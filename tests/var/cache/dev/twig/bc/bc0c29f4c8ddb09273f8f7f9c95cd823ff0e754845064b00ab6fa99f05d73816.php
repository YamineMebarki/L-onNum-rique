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

/* vendor/symfony/monolog-bridge/Processor/WebProcessor.php */
class __TwigTemplate_bee3531e2c4ac9c0ca409e73eb240f7c5cb0968f5f88be19d68574551f1dc62d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/WebProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/WebProcessor.php"));

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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Monolog\\Processor\\WebProcessor as BaseWebProcessor;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * WebProcessor override to read from the HttpFoundation's Request.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @final since Symfony 4.3
 */
class WebProcessor extends BaseWebProcessor implements EventSubscriberInterface
{
    public function __construct(array \$extraFields = null)
    {
        // Pass an empty array as the default null value would access \$_SERVER
        parent::__construct([], \$extraFields);
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->serverData = \$event->getRequest()->server->all();
            \$this->serverData['REMOTE_ADDR'] = \$event->getRequest()->getClientIp();
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 4096],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Processor/WebProcessor.php";
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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Monolog\\Processor\\WebProcessor as BaseWebProcessor;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * WebProcessor override to read from the HttpFoundation's Request.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @final since Symfony 4.3
 */
class WebProcessor extends BaseWebProcessor implements EventSubscriberInterface
{
    public function __construct(array \$extraFields = null)
    {
        // Pass an empty array as the default null value would access \$_SERVER
        parent::__construct([], \$extraFields);
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->serverData = \$event->getRequest()->server->all();
            \$this->serverData['REMOTE_ADDR'] = \$event->getRequest()->getClientIp();
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 4096],
        ];
    }
}
", "vendor/symfony/monolog-bridge/Processor/WebProcessor.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Processor/WebProcessor.php");
    }
}
