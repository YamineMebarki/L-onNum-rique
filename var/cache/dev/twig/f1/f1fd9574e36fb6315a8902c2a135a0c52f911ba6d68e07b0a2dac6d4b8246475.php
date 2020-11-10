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

/* vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php */
class __TwigTemplate_fe828de0e861bf9ce3aca869eac2deb0f9b888259f72127ac8a6d8cd908c2eaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\EventListener;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Guarantees that the _controller key is parsed into its final format.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 *
 * @deprecated since Symfony 4.1
 */
class ResolveControllerNameSubscriber implements EventSubscriberInterface
{
    private \$parser;

    public function __construct(ControllerNameParser \$parser)
    {
        \$this->parser = \$parser;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$controller = \$event->getRequest()->attributes->get('_controller');
        if (\\is_string(\$controller) && false === strpos(\$controller, '::') && 2 === substr_count(\$controller, ':')) {
            // controller in the a:b:c notation then
            \$event->getRequest()->attributes->set('_controller', \$parsedNotation = \$this->parser->parse(\$controller, false));

            @trigger_error(sprintf('Referencing controllers with %s is deprecated since Symfony 4.1, use \"%s\" instead.', \$controller, \$parsedNotation), E_USER_DEPRECATED);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 24],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\EventListener;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Guarantees that the _controller key is parsed into its final format.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 *
 * @deprecated since Symfony 4.1
 */
class ResolveControllerNameSubscriber implements EventSubscriberInterface
{
    private \$parser;

    public function __construct(ControllerNameParser \$parser)
    {
        \$this->parser = \$parser;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$controller = \$event->getRequest()->attributes->get('_controller');
        if (\\is_string(\$controller) && false === strpos(\$controller, '::') && 2 === substr_count(\$controller, ':')) {
            // controller in the a:b:c notation then
            \$event->getRequest()->attributes->set('_controller', \$parsedNotation = \$this->parser->parse(\$controller, false));

            @trigger_error(sprintf('Referencing controllers with %s is deprecated since Symfony 4.1, use \"%s\" instead.', \$controller, \$parsedNotation), E_USER_DEPRECATED);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 24],
        ];
    }
}
", "vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php");
    }
}
