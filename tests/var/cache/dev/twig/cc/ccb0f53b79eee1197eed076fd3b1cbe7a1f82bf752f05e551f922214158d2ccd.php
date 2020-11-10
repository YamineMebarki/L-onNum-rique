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

/* vendor/symfony/security-bundle/Security/FirewallMap.php */
class __TwigTemplate_dcef2a4fec8dcdfe1a85f2ad26b30c92a25d5ef300d179e3b4ba57300c580a6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallMap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallMap.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;

/**
 * This is a lazy-loading firewall map implementation.
 *
 * Listeners will only be initialized if we really need them.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FirewallMap implements FirewallMapInterface
{
    private \$container;
    private \$map;
    private \$contexts;

    public function __construct(ContainerInterface \$container, iterable \$map)
    {
        \$this->container = \$container;
        \$this->map = \$map;
        \$this->contexts = new \\SplObjectStorage();
    }

    public function getListeners(Request \$request)
    {
        \$context = \$this->getFirewallContext(\$request);

        if (null === \$context) {
            return [[], null, null];
        }

        return [\$context->getListeners(), \$context->getExceptionListener(), \$context->getLogoutListener()];
    }

    /**
     * @return FirewallConfig|null
     */
    public function getFirewallConfig(Request \$request)
    {
        \$context = \$this->getFirewallContext(\$request);

        if (null === \$context) {
            return null;
        }

        return \$context->getConfig();
    }

    /**
     * @return FirewallContext|null
     */
    private function getFirewallContext(Request \$request)
    {
        if (\$request->attributes->has('_firewall_context')) {
            \$storedContextId = \$request->attributes->get('_firewall_context');
            foreach (\$this->map as \$contextId => \$requestMatcher) {
                if (\$contextId === \$storedContextId) {
                    return \$this->container->get(\$contextId);
                }
            }

            \$request->attributes->remove('_firewall_context');
        }

        foreach (\$this->map as \$contextId => \$requestMatcher) {
            if (null === \$requestMatcher || \$requestMatcher->matches(\$request)) {
                \$request->attributes->set('_firewall_context', \$contextId);

                return \$this->container->get(\$contextId);
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Security/FirewallMap.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;

/**
 * This is a lazy-loading firewall map implementation.
 *
 * Listeners will only be initialized if we really need them.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FirewallMap implements FirewallMapInterface
{
    private \$container;
    private \$map;
    private \$contexts;

    public function __construct(ContainerInterface \$container, iterable \$map)
    {
        \$this->container = \$container;
        \$this->map = \$map;
        \$this->contexts = new \\SplObjectStorage();
    }

    public function getListeners(Request \$request)
    {
        \$context = \$this->getFirewallContext(\$request);

        if (null === \$context) {
            return [[], null, null];
        }

        return [\$context->getListeners(), \$context->getExceptionListener(), \$context->getLogoutListener()];
    }

    /**
     * @return FirewallConfig|null
     */
    public function getFirewallConfig(Request \$request)
    {
        \$context = \$this->getFirewallContext(\$request);

        if (null === \$context) {
            return null;
        }

        return \$context->getConfig();
    }

    /**
     * @return FirewallContext|null
     */
    private function getFirewallContext(Request \$request)
    {
        if (\$request->attributes->has('_firewall_context')) {
            \$storedContextId = \$request->attributes->get('_firewall_context');
            foreach (\$this->map as \$contextId => \$requestMatcher) {
                if (\$contextId === \$storedContextId) {
                    return \$this->container->get(\$contextId);
                }
            }

            \$request->attributes->remove('_firewall_context');
        }

        foreach (\$this->map as \$contextId => \$requestMatcher) {
            if (null === \$requestMatcher || \$requestMatcher->matches(\$request)) {
                \$request->attributes->set('_firewall_context', \$contextId);

                return \$this->container->get(\$contextId);
            }
        }

        return null;
    }
}
", "vendor/symfony/security-bundle/Security/FirewallMap.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Security/FirewallMap.php");
    }
}
