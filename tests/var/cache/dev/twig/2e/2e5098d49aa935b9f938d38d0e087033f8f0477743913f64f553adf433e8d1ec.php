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

/* vendor/symfony/security-http/RememberMe/ResponseListener.php */
class __TwigTemplate_cbb1db7d0c95feab892470971e03453220c29a65a0e03bcacf15c82d933facbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/ResponseListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/ResponseListener.php"));

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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Adds remember-me cookies to the Response.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class ResponseListener implements EventSubscriberInterface
{
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        \$response = \$event->getResponse();

        if (\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME)) {
            \$response->headers->setCookie(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME));
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/RememberMe/ResponseListener.php";
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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Adds remember-me cookies to the Response.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class ResponseListener implements EventSubscriberInterface
{
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        \$response = \$event->getResponse();

        if (\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME)) {
            \$response->headers->setCookie(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME));
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
", "vendor/symfony/security-http/RememberMe/ResponseListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/RememberMe/ResponseListener.php");
    }
}
