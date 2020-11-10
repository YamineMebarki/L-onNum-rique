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

/* vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php */
class __TwigTemplate_b92b7950f4173911bc3cece75146055b15d8a971fde375145ecc55bcff72ed05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\AuthenticationEvents;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\ProviderNotFoundException;

/**
 * AuthenticationProviderManager uses a list of AuthenticationProviderInterface
 * instances to authenticate a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
    private \$providers;
    private \$eraseCredentials;
    private \$eventDispatcher;

    /**
     * @param iterable|AuthenticationProviderInterface[] \$providers        An iterable with AuthenticationProviderInterface instances as values
     * @param bool                                       \$eraseCredentials Whether to erase credentials after authentication or not
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(iterable \$providers, bool \$eraseCredentials = true)
    {
        if (!\$providers) {
            throw new \\InvalidArgumentException('You must at least add one authentication provider.');
        }

        \$this->providers = \$providers;
        \$this->eraseCredentials = \$eraseCredentials;
    }

    /**
     * @final since Symfony 4.3, the type-hint will be updated to the interface from symfony/contracts in 5.0
     */
    public function setEventDispatcher(EventDispatcherInterface \$dispatcher)
    {
        \$this->eventDispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        \$lastException = null;
        \$result = null;

        foreach (\$this->providers as \$provider) {
            if (!\$provider instanceof AuthenticationProviderInterface) {
                throw new \\InvalidArgumentException(sprintf('Provider \"%s\" must implement the AuthenticationProviderInterface.', \\get_class(\$provider)));
            }

            if (!\$provider->supports(\$token)) {
                continue;
            }

            try {
                \$result = \$provider->authenticate(\$token);

                if (null !== \$result) {
                    break;
                }
            } catch (AccountStatusException \$e) {
                \$lastException = \$e;

                break;
            } catch (AuthenticationException \$e) {
                \$lastException = \$e;
            }
        }

        if (null !== \$result) {
            if (true === \$this->eraseCredentials) {
                \$result->eraseCredentials();
            }

            if (null !== \$this->eventDispatcher) {
                \$this->eventDispatcher->dispatch(new AuthenticationSuccessEvent(\$result), AuthenticationEvents::AUTHENTICATION_SUCCESS);
            }

            return \$result;
        }

        if (null === \$lastException) {
            \$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class \"%s\".', \\get_class(\$token)));
        }

        if (null !== \$this->eventDispatcher) {
            \$this->eventDispatcher->dispatch(new AuthenticationFailureEvent(\$token, \$lastException), AuthenticationEvents::AUTHENTICATION_FAILURE);
        }

        \$lastException->setToken(\$token);

        throw \$lastException;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\AuthenticationEvents;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\ProviderNotFoundException;

/**
 * AuthenticationProviderManager uses a list of AuthenticationProviderInterface
 * instances to authenticate a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
    private \$providers;
    private \$eraseCredentials;
    private \$eventDispatcher;

    /**
     * @param iterable|AuthenticationProviderInterface[] \$providers        An iterable with AuthenticationProviderInterface instances as values
     * @param bool                                       \$eraseCredentials Whether to erase credentials after authentication or not
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(iterable \$providers, bool \$eraseCredentials = true)
    {
        if (!\$providers) {
            throw new \\InvalidArgumentException('You must at least add one authentication provider.');
        }

        \$this->providers = \$providers;
        \$this->eraseCredentials = \$eraseCredentials;
    }

    /**
     * @final since Symfony 4.3, the type-hint will be updated to the interface from symfony/contracts in 5.0
     */
    public function setEventDispatcher(EventDispatcherInterface \$dispatcher)
    {
        \$this->eventDispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        \$lastException = null;
        \$result = null;

        foreach (\$this->providers as \$provider) {
            if (!\$provider instanceof AuthenticationProviderInterface) {
                throw new \\InvalidArgumentException(sprintf('Provider \"%s\" must implement the AuthenticationProviderInterface.', \\get_class(\$provider)));
            }

            if (!\$provider->supports(\$token)) {
                continue;
            }

            try {
                \$result = \$provider->authenticate(\$token);

                if (null !== \$result) {
                    break;
                }
            } catch (AccountStatusException \$e) {
                \$lastException = \$e;

                break;
            } catch (AuthenticationException \$e) {
                \$lastException = \$e;
            }
        }

        if (null !== \$result) {
            if (true === \$this->eraseCredentials) {
                \$result->eraseCredentials();
            }

            if (null !== \$this->eventDispatcher) {
                \$this->eventDispatcher->dispatch(new AuthenticationSuccessEvent(\$result), AuthenticationEvents::AUTHENTICATION_SUCCESS);
            }

            return \$result;
        }

        if (null === \$lastException) {
            \$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class \"%s\".', \\get_class(\$token)));
        }

        if (null !== \$this->eventDispatcher) {
            \$this->eventDispatcher->dispatch(new AuthenticationFailureEvent(\$token, \$lastException), AuthenticationEvents::AUTHENTICATION_FAILURE);
        }

        \$lastException->setToken(\$token);

        throw \$lastException;
    }
}
", "vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php");
    }
}
