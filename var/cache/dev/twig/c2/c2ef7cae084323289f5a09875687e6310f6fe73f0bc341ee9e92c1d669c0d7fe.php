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

/* vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php */
class __TwigTemplate_c563984fa784e06507fe2b058221c13ede3ceb7732f716448ab85bc45995cd58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php"));

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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * DaoAuthenticationProvider uses a UserProviderInterface to retrieve the user
 * for a UsernamePasswordToken.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DaoAuthenticationProvider extends UserAuthenticationProvider
{
    private \$encoderFactory;
    private \$userProvider;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey, EncoderFactoryInterface \$encoderFactory, bool \$hideUserNotFoundExceptions = true)
    {
        parent::__construct(\$userChecker, \$providerKey, \$hideUserNotFoundExceptions);

        \$this->encoderFactory = \$encoderFactory;
        \$this->userProvider = \$userProvider;
    }

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token)
    {
        \$currentUser = \$token->getUser();
        if (\$currentUser instanceof UserInterface) {
            if (\$currentUser->getPassword() !== \$user->getPassword()) {
                throw new BadCredentialsException('The credentials were changed from another session.');
            }
        } else {
            if ('' === (\$presentedPassword = \$token->getCredentials())) {
                throw new BadCredentialsException('The presented password cannot be empty.');
            }

            if (!\$this->encoderFactory->getEncoder(\$user)->isPasswordValid(\$user->getPassword(), \$presentedPassword, \$user->getSalt())) {
                throw new BadCredentialsException('The presented password is invalid.');
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function retrieveUser(\$username, UsernamePasswordToken \$token)
    {
        \$user = \$token->getUser();
        if (\$user instanceof UserInterface) {
            return \$user;
        }

        try {
            \$user = \$this->userProvider->loadUserByUsername(\$username);

            if (!\$user instanceof UserInterface) {
                throw new AuthenticationServiceException('The user provider must return a UserInterface object.');
            }

            return \$user;
        } catch (UsernameNotFoundException \$e) {
            \$e->setUsername(\$username);
            throw \$e;
        } catch (\\Exception \$e) {
            \$e = new AuthenticationServiceException(\$e->getMessage(), 0, \$e);
            \$e->setToken(\$token);
            throw \$e;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php";
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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * DaoAuthenticationProvider uses a UserProviderInterface to retrieve the user
 * for a UsernamePasswordToken.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DaoAuthenticationProvider extends UserAuthenticationProvider
{
    private \$encoderFactory;
    private \$userProvider;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey, EncoderFactoryInterface \$encoderFactory, bool \$hideUserNotFoundExceptions = true)
    {
        parent::__construct(\$userChecker, \$providerKey, \$hideUserNotFoundExceptions);

        \$this->encoderFactory = \$encoderFactory;
        \$this->userProvider = \$userProvider;
    }

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token)
    {
        \$currentUser = \$token->getUser();
        if (\$currentUser instanceof UserInterface) {
            if (\$currentUser->getPassword() !== \$user->getPassword()) {
                throw new BadCredentialsException('The credentials were changed from another session.');
            }
        } else {
            if ('' === (\$presentedPassword = \$token->getCredentials())) {
                throw new BadCredentialsException('The presented password cannot be empty.');
            }

            if (!\$this->encoderFactory->getEncoder(\$user)->isPasswordValid(\$user->getPassword(), \$presentedPassword, \$user->getSalt())) {
                throw new BadCredentialsException('The presented password is invalid.');
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function retrieveUser(\$username, UsernamePasswordToken \$token)
    {
        \$user = \$token->getUser();
        if (\$user instanceof UserInterface) {
            return \$user;
        }

        try {
            \$user = \$this->userProvider->loadUserByUsername(\$username);

            if (!\$user instanceof UserInterface) {
                throw new AuthenticationServiceException('The user provider must return a UserInterface object.');
            }

            return \$user;
        } catch (UsernameNotFoundException \$e) {
            \$e->setUsername(\$username);
            throw \$e;
        } catch (\\Exception \$e) {
            \$e = new AuthenticationServiceException(\$e->getMessage(), 0, \$e);
            \$e->setToken(\$token);
            throw \$e;
        }
    }
}
", "vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php");
    }
}
