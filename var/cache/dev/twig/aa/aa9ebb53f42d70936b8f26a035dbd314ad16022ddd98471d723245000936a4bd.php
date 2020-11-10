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

/* vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php */
class __TwigTemplate_36ffdb6cdd5f47f56a74338d1514bca06fced0a8a357c5c6852d2791d6e2b715 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php"));

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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * Processes a pre-authenticated authentication request.
 *
 * This authentication provider will not perform any checks on authentication
 * requests, as they should already be pre-authenticated. However, the
 * UserProviderInterface implementation may still throw a
 * UsernameNotFoundException, for example.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PreAuthenticatedAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$userProvider;
    private \$userChecker;
    private \$providerKey;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey)
    {
        \$this->userProvider = \$userProvider;
        \$this->userChecker = \$userChecker;
        \$this->providerKey = \$providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (!\$user = \$token->getUser()) {
            throw new BadCredentialsException('No pre-authenticated principal found in request.');
        }

        \$user = \$this->userProvider->loadUserByUsername(\$user);

        \$this->userChecker->checkPostAuth(\$user);

        \$authenticatedToken = new PreAuthenticatedToken(\$user, \$token->getCredentials(), \$this->providerKey, \$user->getRoles());
        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof PreAuthenticatedToken && \$this->providerKey === \$token->getProviderKey();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php";
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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * Processes a pre-authenticated authentication request.
 *
 * This authentication provider will not perform any checks on authentication
 * requests, as they should already be pre-authenticated. However, the
 * UserProviderInterface implementation may still throw a
 * UsernameNotFoundException, for example.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PreAuthenticatedAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$userProvider;
    private \$userChecker;
    private \$providerKey;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey)
    {
        \$this->userProvider = \$userProvider;
        \$this->userChecker = \$userChecker;
        \$this->providerKey = \$providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (!\$user = \$token->getUser()) {
            throw new BadCredentialsException('No pre-authenticated principal found in request.');
        }

        \$user = \$this->userProvider->loadUserByUsername(\$user);

        \$this->userChecker->checkPostAuth(\$user);

        \$authenticatedToken = new PreAuthenticatedToken(\$user, \$token->getCredentials(), \$this->providerKey, \$user->getRoles());
        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof PreAuthenticatedToken && \$this->providerKey === \$token->getProviderKey();
    }
}
", "vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/PreAuthenticatedAuthenticationProvider.php");
    }
}
