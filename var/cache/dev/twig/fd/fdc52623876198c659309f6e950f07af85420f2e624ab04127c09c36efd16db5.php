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

/* vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php */
class __TwigTemplate_c6898e383f484af00bff710eeaff40d74728a299c65f1ada61143802a9fd8322 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php"));

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

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Twig\\Environment;

/**
 * Handles the Template annotation for actions.
 *
 * Depends on pre-processing of the ControllerListener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateListener implements EventSubscriberInterface
{
    private \$templateGuesser;
    private \$twig;

    public function __construct(TemplateGuesser \$templateGuesser, Environment \$twig = null)
    {
        \$this->templateGuesser = \$templateGuesser;
        \$this->twig = \$twig;
    }

    /**
     * Guesses the template name to render and its variables and adds them to
     * the request object.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        \$template = \$request->attributes->get('_template');

        if (!\$template instanceof Template) {
            return;
        }

        \$controller = \$event->getController();
        if (!\\is_array(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        }
        \$template->setOwner(\$controller);

        // when no template has been given, try to resolve it based on the controller
        if (null === \$template->getTemplate()) {
            \$template->setTemplate(\$this->templateGuesser->guessTemplateName(\$controller, \$request));
        }
    }

    /**
     * Renders the template and initializes a new response object with the
     * rendered template content.
     */
    public function onKernelView(KernelEvent \$event)
    {
        /* @var Template \$template */
        \$request = \$event->getRequest();
        \$template = \$request->attributes->get('_template');

        if (!\$template instanceof Template) {
            return;
        }

        if (null === \$this->twig) {
            throw new \\LogicException('You can not use the \"@Template\" annotation if the Twig Bundle is not available.');
        }

        \$parameters = \$event->getControllerResult();
        \$owner = \$template->getOwner();
        list(\$controller, \$action) = \$owner;

        // when the annotation declares no default vars and the action returns
        // null, all action method arguments are used as default vars
        if (null === \$parameters) {
            \$parameters = \$this->resolveDefaultParameters(\$request, \$template, \$controller, \$action);
        }

        // attempt to render the actual response
        if (\$template->isStreamable()) {
            \$callback = function () use (\$template, \$parameters) {
                \$this->twig->display(\$template->getTemplate(), \$parameters);
            };

            \$event->setResponse(new StreamedResponse(\$callback));
        } else {
            \$event->setResponse(new Response(\$this->twig->render(\$template->getTemplate(), \$parameters)));
        }

        // make sure the owner (controller+dependencies) is not cached or stored elsewhere
        \$template->setOwner([]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => ['onKernelController', -128],
            KernelEvents::VIEW => 'onKernelView',
        ];
    }

    private function resolveDefaultParameters(Request \$request, Template \$template, \$controller, \$action)
    {
        \$parameters = [];
        \$arguments = \$template->getVars();

        if (0 === \\count(\$arguments)) {
            \$r = new \\ReflectionObject(\$controller);

            \$arguments = [];
            foreach (\$r->getMethod(\$action)->getParameters() as \$param) {
                \$arguments[] = \$param;
            }
        }

        // fetch the arguments of @Template.vars or everything if desired
        // and assign them to the designated template
        foreach (\$arguments as \$argument) {
            if (\$argument instanceof \\ReflectionParameter) {
                \$parameters[\$name = \$argument->getName()] = !\$request->attributes->has(\$name) && \$argument->isDefaultValueAvailable() ? \$argument->getDefaultValue() : \$request->attributes->get(\$name);
            } else {
                \$parameters[\$argument] = \$request->attributes->get(\$argument);
            }
        }

        return \$parameters;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php";
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

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Twig\\Environment;

/**
 * Handles the Template annotation for actions.
 *
 * Depends on pre-processing of the ControllerListener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateListener implements EventSubscriberInterface
{
    private \$templateGuesser;
    private \$twig;

    public function __construct(TemplateGuesser \$templateGuesser, Environment \$twig = null)
    {
        \$this->templateGuesser = \$templateGuesser;
        \$this->twig = \$twig;
    }

    /**
     * Guesses the template name to render and its variables and adds them to
     * the request object.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        \$template = \$request->attributes->get('_template');

        if (!\$template instanceof Template) {
            return;
        }

        \$controller = \$event->getController();
        if (!\\is_array(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        }
        \$template->setOwner(\$controller);

        // when no template has been given, try to resolve it based on the controller
        if (null === \$template->getTemplate()) {
            \$template->setTemplate(\$this->templateGuesser->guessTemplateName(\$controller, \$request));
        }
    }

    /**
     * Renders the template and initializes a new response object with the
     * rendered template content.
     */
    public function onKernelView(KernelEvent \$event)
    {
        /* @var Template \$template */
        \$request = \$event->getRequest();
        \$template = \$request->attributes->get('_template');

        if (!\$template instanceof Template) {
            return;
        }

        if (null === \$this->twig) {
            throw new \\LogicException('You can not use the \"@Template\" annotation if the Twig Bundle is not available.');
        }

        \$parameters = \$event->getControllerResult();
        \$owner = \$template->getOwner();
        list(\$controller, \$action) = \$owner;

        // when the annotation declares no default vars and the action returns
        // null, all action method arguments are used as default vars
        if (null === \$parameters) {
            \$parameters = \$this->resolveDefaultParameters(\$request, \$template, \$controller, \$action);
        }

        // attempt to render the actual response
        if (\$template->isStreamable()) {
            \$callback = function () use (\$template, \$parameters) {
                \$this->twig->display(\$template->getTemplate(), \$parameters);
            };

            \$event->setResponse(new StreamedResponse(\$callback));
        } else {
            \$event->setResponse(new Response(\$this->twig->render(\$template->getTemplate(), \$parameters)));
        }

        // make sure the owner (controller+dependencies) is not cached or stored elsewhere
        \$template->setOwner([]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => ['onKernelController', -128],
            KernelEvents::VIEW => 'onKernelView',
        ];
    }

    private function resolveDefaultParameters(Request \$request, Template \$template, \$controller, \$action)
    {
        \$parameters = [];
        \$arguments = \$template->getVars();

        if (0 === \\count(\$arguments)) {
            \$r = new \\ReflectionObject(\$controller);

            \$arguments = [];
            foreach (\$r->getMethod(\$action)->getParameters() as \$param) {
                \$arguments[] = \$param;
            }
        }

        // fetch the arguments of @Template.vars or everything if desired
        // and assign them to the designated template
        foreach (\$arguments as \$argument) {
            if (\$argument instanceof \\ReflectionParameter) {
                \$parameters[\$name = \$argument->getName()] = !\$request->attributes->has(\$name) && \$argument->isDefaultValueAvailable() ? \$argument->getDefaultValue() : \$request->attributes->get(\$name);
            } else {
                \$parameters[\$argument] = \$request->attributes->get(\$argument);
            }
        }

        return \$parameters;
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php");
    }
}
