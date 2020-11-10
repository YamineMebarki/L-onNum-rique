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

/* vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php */
class __TwigTemplate_b531d85a72145a84f17465239e2a742ec33fbe469da9503fb2654d434bb2c373 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php"));

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

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * The ParamConverterListener handles the ParamConverter annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParamConverterListener implements EventSubscriberInterface
{
    /**
     * @var ParamConverterManager
     */
    private \$manager;

    private \$autoConvert;

    /**
     * @var bool
     */
    private \$isParameterTypeSupported;

    /**
     * @param bool \$autoConvert Auto convert non-configured objects
     */
    public function __construct(ParamConverterManager \$manager, \$autoConvert = true)
    {
        \$this->manager = \$manager;
        \$this->autoConvert = \$autoConvert;
        \$this->isParameterTypeSupported = method_exists('ReflectionParameter', 'getType');
    }

    /**
     * Modifies the ParamConverterManager instance.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$controller = \$event->getController();
        \$request = \$event->getRequest();
        \$configurations = [];

        if (\$configuration = \$request->attributes->get('_converters')) {
            foreach (\\is_array(\$configuration) ? \$configuration : [\$configuration] as \$configuration) {
                \$configurations[\$configuration->getName()] = \$configuration;
            }
        }

        if (\\is_array(\$controller)) {
            \$r = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && \\is_callable([\$controller, '__invoke'])) {
            \$r = new \\ReflectionMethod(\$controller, '__invoke');
        } else {
            \$r = new \\ReflectionFunction(\$controller);
        }

        // automatically apply conversion for non-configured objects
        if (\$this->autoConvert) {
            \$configurations = \$this->autoConfigure(\$r, \$request, \$configurations);
        }

        \$this->manager->apply(\$request, \$configurations);
    }

    private function autoConfigure(\\ReflectionFunctionAbstract \$r, Request \$request, \$configurations)
    {
        foreach (\$r->getParameters() as \$param) {
            if (\$param->getClass() && \$param->getClass()->isInstance(\$request)) {
                continue;
            }

            \$name = \$param->getName();
            \$class = \$param->getClass();
            \$hasType = \$this->isParameterTypeSupported && \$param->hasType();

            if (\$class || \$hasType) {
                if (!isset(\$configurations[\$name])) {
                    \$configuration = new ParamConverter([]);
                    \$configuration->setName(\$name);

                    \$configurations[\$name] = \$configuration;
                }

                if (\$class && null === \$configurations[\$name]->getClass()) {
                    \$configurations[\$name]->setClass(\$class->getName());
                }
            }

            if (isset(\$configurations[\$name])) {
                \$configurations[\$name]->setIsOptional(\$param->isOptional() || \$param->isDefaultValueAvailable() || \$hasType && \$param->getType()->allowsNull());
            }
        }

        return \$configurations;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php";
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

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * The ParamConverterListener handles the ParamConverter annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParamConverterListener implements EventSubscriberInterface
{
    /**
     * @var ParamConverterManager
     */
    private \$manager;

    private \$autoConvert;

    /**
     * @var bool
     */
    private \$isParameterTypeSupported;

    /**
     * @param bool \$autoConvert Auto convert non-configured objects
     */
    public function __construct(ParamConverterManager \$manager, \$autoConvert = true)
    {
        \$this->manager = \$manager;
        \$this->autoConvert = \$autoConvert;
        \$this->isParameterTypeSupported = method_exists('ReflectionParameter', 'getType');
    }

    /**
     * Modifies the ParamConverterManager instance.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$controller = \$event->getController();
        \$request = \$event->getRequest();
        \$configurations = [];

        if (\$configuration = \$request->attributes->get('_converters')) {
            foreach (\\is_array(\$configuration) ? \$configuration : [\$configuration] as \$configuration) {
                \$configurations[\$configuration->getName()] = \$configuration;
            }
        }

        if (\\is_array(\$controller)) {
            \$r = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && \\is_callable([\$controller, '__invoke'])) {
            \$r = new \\ReflectionMethod(\$controller, '__invoke');
        } else {
            \$r = new \\ReflectionFunction(\$controller);
        }

        // automatically apply conversion for non-configured objects
        if (\$this->autoConvert) {
            \$configurations = \$this->autoConfigure(\$r, \$request, \$configurations);
        }

        \$this->manager->apply(\$request, \$configurations);
    }

    private function autoConfigure(\\ReflectionFunctionAbstract \$r, Request \$request, \$configurations)
    {
        foreach (\$r->getParameters() as \$param) {
            if (\$param->getClass() && \$param->getClass()->isInstance(\$request)) {
                continue;
            }

            \$name = \$param->getName();
            \$class = \$param->getClass();
            \$hasType = \$this->isParameterTypeSupported && \$param->hasType();

            if (\$class || \$hasType) {
                if (!isset(\$configurations[\$name])) {
                    \$configuration = new ParamConverter([]);
                    \$configuration->setName(\$name);

                    \$configurations[\$name] = \$configuration;
                }

                if (\$class && null === \$configurations[\$name]->getClass()) {
                    \$configurations[\$name]->setClass(\$class->getName());
                }
            }

            if (isset(\$configurations[\$name])) {
                \$configurations[\$name]->setIsOptional(\$param->isOptional() || \$param->isDefaultValueAvailable() || \$hasType && \$param->getType()->allowsNull());
            }
        }

        return \$configurations;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php");
    }
}
