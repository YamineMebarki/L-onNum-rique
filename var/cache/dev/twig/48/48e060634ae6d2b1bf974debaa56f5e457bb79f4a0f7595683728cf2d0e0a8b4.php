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

/* vendor/symfony/security-bundle/EventListener/FirewallListener.php */
class __TwigTemplate_2ee34db01826a48c1b1d23c7db384186142be69e6456f90ba92e98d1b9b7095e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/EventListener/FirewallListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/EventListener/FirewallListener.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\EventListener;

use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\Firewall;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FirewallListener extends Firewall
{
    private \$map;
    private \$logoutUrlGenerator;

    public function __construct(FirewallMapInterface \$map, EventDispatcherInterface \$dispatcher, LogoutUrlGenerator \$logoutUrlGenerator)
    {
        // the type-hint will be updated to the \"EventDispatcherInterface\" from symfony/contracts in 5.0

        \$this->map = \$map;
        \$this->logoutUrlGenerator = \$logoutUrlGenerator;

        parent::__construct(\$map, \$dispatcher);
    }

    /**
     * @internal
     */
    public function configureLogoutUrlGenerator(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        if (\$this->map instanceof FirewallMap && \$config = \$this->map->getFirewallConfig(\$event->getRequest())) {
            \$this->logoutUrlGenerator->setCurrentFirewall(\$config->getName(), \$config->getContext());
        }
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->logoutUrlGenerator->setCurrentFirewall(null);
        }

        parent::onKernelFinishRequest(\$event);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                ['configureLogoutUrlGenerator', 8],
                ['onKernelRequest', 8],
            ],
            KernelEvents::FINISH_REQUEST => 'onKernelFinishRequest',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/EventListener/FirewallListener.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\EventListener;

use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\Firewall;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FirewallListener extends Firewall
{
    private \$map;
    private \$logoutUrlGenerator;

    public function __construct(FirewallMapInterface \$map, EventDispatcherInterface \$dispatcher, LogoutUrlGenerator \$logoutUrlGenerator)
    {
        // the type-hint will be updated to the \"EventDispatcherInterface\" from symfony/contracts in 5.0

        \$this->map = \$map;
        \$this->logoutUrlGenerator = \$logoutUrlGenerator;

        parent::__construct(\$map, \$dispatcher);
    }

    /**
     * @internal
     */
    public function configureLogoutUrlGenerator(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        if (\$this->map instanceof FirewallMap && \$config = \$this->map->getFirewallConfig(\$event->getRequest())) {
            \$this->logoutUrlGenerator->setCurrentFirewall(\$config->getName(), \$config->getContext());
        }
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->logoutUrlGenerator->setCurrentFirewall(null);
        }

        parent::onKernelFinishRequest(\$event);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                ['configureLogoutUrlGenerator', 8],
                ['onKernelRequest', 8],
            ],
            KernelEvents::FINISH_REQUEST => 'onKernelFinishRequest',
        ];
    }
}
", "vendor/symfony/security-bundle/EventListener/FirewallListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/EventListener/FirewallListener.php");
    }
}
