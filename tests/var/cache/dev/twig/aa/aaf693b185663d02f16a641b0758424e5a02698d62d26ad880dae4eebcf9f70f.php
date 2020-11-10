<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php */
class __TwigTemplate_e6af2423b94aa84941358335576c4f8af2fb42160b87845c53c36e3ae72bbf3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\Role\\SwitchUserRole;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * UserProviderInterface retrieves users for UsernamePasswordToken tokens.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class UserAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$hideUserNotFoundExceptions;
    private \$userChecker;
    private \$providerKey;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserCheckerInterface \$userChecker, string \$providerKey, bool \$hideUserNotFoundExceptions = true)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->userChecker = \$userChecker;
        \$this->providerKey = \$providerKey;
        \$this->hideUserNotFoundExceptions = \$hideUserNotFoundExceptions;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        \$username = \$token->getUsername();
        if ('' === \$username || null === \$username) {
            \$username = AuthenticationProviderInterface::USERNAME_NONE_PROVIDED;
        }

        try {
            \$user = \$this->retrieveUser(\$username, \$token);
        } catch (UsernameNotFoundException \$e) {
            if (\$this->hideUserNotFoundExceptions) {
                throw new BadCredentialsException('Bad credentials.', 0, \$e);
            }
            \$e->setUsername(\$username);

            throw \$e;
        }

        if (!\$user instanceof UserInterface) {
            throw new AuthenticationServiceException('retrieveUser() must return a UserInterface.');
        }

        try {
            \$this->userChecker->checkPreAuth(\$user);
            \$this->checkAuthentication(\$user, \$token);
            \$this->userChecker->checkPostAuth(\$user);
        } catch (BadCredentialsException \$e) {
            if (\$this->hideUserNotFoundExceptions) {
                throw new BadCredentialsException('Bad credentials.', 0, \$e);
            }

            throw \$e;
        }

        if (\$token instanceof SwitchUserToken) {
            \$authenticatedToken = new SwitchUserToken(\$user, \$token->getCredentials(), \$this->providerKey, \$this->getRoles(\$user, \$token), \$token->getOriginalToken());
        } else {
            \$authenticatedToken = new UsernamePasswordToken(\$user, \$token->getCredentials(), \$this->providerKey, \$this->getRoles(\$user, \$token));
        }

        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey();
    }

    /**
     * Retrieves roles from user and appends SwitchUserRole if original token contained one.
     *
     * @return array The user roles
     */
    private function getRoles(UserInterface \$user, TokenInterface \$token)
    {
        \$roles = \$user->getRoles();

        foreach (\$token->getRoles(false) as \$role) {
            if (\$role instanceof SwitchUserRole) {
                \$roles[] = \$role;

                break;
            }
        }

        return \$roles;
    }

    /**
     * Retrieves the user from an implementation-specific location.
     *
     * @param string                \$username The username to retrieve
     * @param UsernamePasswordToken \$token    The Token
     *
     * @return UserInterface The user
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function retrieveUser(\$username, UsernamePasswordToken \$token);

    /**
     * Does additional checks on the user and token (like validating the
     * credentials).
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\Role\\SwitchUserRole;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * UserProviderInterface retrieves users for UsernamePasswordToken tokens.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class UserAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$hideUserNotFoundExceptions;
    private \$userChecker;
    private \$providerKey;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserCheckerInterface \$userChecker, string \$providerKey, bool \$hideUserNotFoundExceptions = true)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->userChecker = \$userChecker;
        \$this->providerKey = \$providerKey;
        \$this->hideUserNotFoundExceptions = \$hideUserNotFoundExceptions;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        \$username = \$token->getUsername();
        if ('' === \$username || null === \$username) {
            \$username = AuthenticationProviderInterface::USERNAME_NONE_PROVIDED;
        }

        try {
            \$user = \$this->retrieveUser(\$username, \$token);
        } catch (UsernameNotFoundException \$e) {
            if (\$this->hideUserNotFoundExceptions) {
                throw new BadCredentialsException('Bad credentials.', 0, \$e);
            }
            \$e->setUsername(\$username);

            throw \$e;
        }

        if (!\$user instanceof UserInterface) {
            throw new AuthenticationServiceException('retrieveUser() must return a UserInterface.');
        }

        try {
            \$this->userChecker->checkPreAuth(\$user);
            \$this->checkAuthentication(\$user, \$token);
            \$this->userChecker->checkPostAuth(\$user);
        } catch (BadCredentialsException \$e) {
            if (\$this->hideUserNotFoundExceptions) {
                throw new BadCredentialsException('Bad credentials.', 0, \$e);
            }

            throw \$e;
        }

        if (\$token instanceof SwitchUserToken) {
            \$authenticatedToken = new SwitchUserToken(\$user, \$token->getCredentials(), \$this->providerKey, \$this->getRoles(\$user, \$token), \$token->getOriginalToken());
        } else {
            \$authenticatedToken = new UsernamePasswordToken(\$user, \$token->getCredentials(), \$this->providerKey, \$this->getRoles(\$user, \$token));
        }

        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey();
    }

    /**
     * Retrieves roles from user and appends SwitchUserRole if original token contained one.
     *
     * @return array The user roles
     */
    private function getRoles(UserInterface \$user, TokenInterface \$token)
    {
        \$roles = \$user->getRoles();

        foreach (\$token->getRoles(false) as \$role) {
            if (\$role instanceof SwitchUserRole) {
                \$roles[] = \$role;

                break;
            }
        }

        return \$roles;
    }

    /**
     * Retrieves the user from an implementation-specific location.
     *
     * @param string                \$username The username to retrieve
     * @param UsernamePasswordToken \$token    The Token
     *
     * @return UserInterface The user
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function retrieveUser(\$username, UsernamePasswordToken \$token);

    /**
     * Does additional checks on the user and token (like validating the
     * credentials).
     *
     * @throws AuthenticationException if the credentials could not be validated
     */
    abstract protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token);
}
", "vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php");
    }
}
