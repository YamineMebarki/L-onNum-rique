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

/* vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php */
class __TwigTemplate_8ff4b123e7a7cf2ae82b33f6af89c79920506aaba712edc0b01a6141b7924b09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Psr\\Http\\Message\\ResponseInterface;
use Symfony\\Bridge\\PsrHttpMessage\\HttpFoundationFactoryInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Converts PSR-7 Response to HttpFoundation Response using the bridge.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PsrResponseListener implements EventSubscriberInterface
{
    /**
     * @var HttpFoundationFactoryInterface
     */
    private \$httpFoundationFactory;

    public function __construct(HttpFoundationFactoryInterface \$httpFoundationFactory)
    {
        \$this->httpFoundationFactory = \$httpFoundationFactory;
    }

    /**
     * Do the conversion if applicable and update the response of the event.
     */
    public function onKernelView(KernelEvent \$event)
    {
        \$controllerResult = \$event->getControllerResult();

        if (!\$controllerResult instanceof ResponseInterface) {
            return;
        }

        \$event->setResponse(\$this->httpFoundationFactory->createResponse(\$controllerResult));
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => 'onKernelView',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Psr\\Http\\Message\\ResponseInterface;
use Symfony\\Bridge\\PsrHttpMessage\\HttpFoundationFactoryInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Converts PSR-7 Response to HttpFoundation Response using the bridge.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PsrResponseListener implements EventSubscriberInterface
{
    /**
     * @var HttpFoundationFactoryInterface
     */
    private \$httpFoundationFactory;

    public function __construct(HttpFoundationFactoryInterface \$httpFoundationFactory)
    {
        \$this->httpFoundationFactory = \$httpFoundationFactory;
    }

    /**
     * Do the conversion if applicable and update the response of the event.
     */
    public function onKernelView(KernelEvent \$event)
    {
        \$controllerResult = \$event->getControllerResult();

        if (!\$controllerResult instanceof ResponseInterface) {
            return;
        }

        \$event->setResponse(\$this->httpFoundationFactory->createResponse(\$controllerResult));
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => 'onKernelView',
        ];
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php");
    }
}
