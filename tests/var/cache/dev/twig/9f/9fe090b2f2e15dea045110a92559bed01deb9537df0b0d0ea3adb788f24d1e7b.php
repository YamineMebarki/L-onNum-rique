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

/* vendor/symfony/security-core/User/ChainUserProvider.php */
class __TwigTemplate_51391ba7121a3dbda319ac991a77435bdc5c6bf7af89a53e5b7088605d4b841a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/ChainUserProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/ChainUserProvider.php"));

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

namespace Symfony\\Component\\Security\\Core\\User;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

/**
 * Chain User Provider.
 *
 * This provider calls several leaf providers in a chain until one is able to
 * handle the request.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ChainUserProvider implements UserProviderInterface
{
    private \$providers;

    /**
     * @param iterable|UserProviderInterface[] \$providers
     */
    public function __construct(iterable \$providers)
    {
        \$this->providers = \$providers;
    }

    /**
     * @return array
     */
    public function getProviders()
    {
        if (\$this->providers instanceof \\Traversable) {
            return iterator_to_array(\$this->providers);
        }

        return \$this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername(\$username)
    {
        foreach (\$this->providers as \$provider) {
            try {
                return \$provider->loadUserByUsername(\$username);
            } catch (UsernameNotFoundException \$e) {
                // try next one
            }
        }

        \$ex = new UsernameNotFoundException(sprintf('There is no user with name \"%s\".', \$username));
        \$ex->setUsername(\$username);
        throw \$ex;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface \$user)
    {
        \$supportedUserFound = false;

        foreach (\$this->providers as \$provider) {
            try {
                return \$provider->refreshUser(\$user);
            } catch (UnsupportedUserException \$e) {
                // try next one
            } catch (UsernameNotFoundException \$e) {
                \$supportedUserFound = true;
                // try next one
            }
        }

        if (\$supportedUserFound) {
            \$e = new UsernameNotFoundException(sprintf('There is no user with name \"%s\".', \$user->getUsername()));
            \$e->setUsername(\$user->getUsername());
            throw \$e;
        } else {
            throw new UnsupportedUserException(sprintf('The account \"%s\" is not supported.', \\get_class(\$user)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass(\$class)
    {
        foreach (\$this->providers as \$provider) {
            if (\$provider->supportsClass(\$class)) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/User/ChainUserProvider.php";
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

namespace Symfony\\Component\\Security\\Core\\User;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

/**
 * Chain User Provider.
 *
 * This provider calls several leaf providers in a chain until one is able to
 * handle the request.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ChainUserProvider implements UserProviderInterface
{
    private \$providers;

    /**
     * @param iterable|UserProviderInterface[] \$providers
     */
    public function __construct(iterable \$providers)
    {
        \$this->providers = \$providers;
    }

    /**
     * @return array
     */
    public function getProviders()
    {
        if (\$this->providers instanceof \\Traversable) {
            return iterator_to_array(\$this->providers);
        }

        return \$this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername(\$username)
    {
        foreach (\$this->providers as \$provider) {
            try {
                return \$provider->loadUserByUsername(\$username);
            } catch (UsernameNotFoundException \$e) {
                // try next one
            }
        }

        \$ex = new UsernameNotFoundException(sprintf('There is no user with name \"%s\".', \$username));
        \$ex->setUsername(\$username);
        throw \$ex;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface \$user)
    {
        \$supportedUserFound = false;

        foreach (\$this->providers as \$provider) {
            try {
                return \$provider->refreshUser(\$user);
            } catch (UnsupportedUserException \$e) {
                // try next one
            } catch (UsernameNotFoundException \$e) {
                \$supportedUserFound = true;
                // try next one
            }
        }

        if (\$supportedUserFound) {
            \$e = new UsernameNotFoundException(sprintf('There is no user with name \"%s\".', \$user->getUsername()));
            \$e->setUsername(\$user->getUsername());
            throw \$e;
        } else {
            throw new UnsupportedUserException(sprintf('The account \"%s\" is not supported.', \\get_class(\$user)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass(\$class)
    {
        foreach (\$this->providers as \$provider) {
            if (\$provider->supportsClass(\$class)) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/symfony/security-core/User/ChainUserProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/User/ChainUserProvider.php");
    }
}
