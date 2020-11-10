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

/* vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php */
class __TwigTemplate_6c72098376b0de757b80f8e2d5f12481ca1634e95a7209746c89fa4724671248 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php"));

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

use Doctrine\\Common\\Annotations\\Reader;
use Doctrine\\Common\\Persistence\\Proxy;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ConfigurationInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * The ControllerListener class parses annotation blocks located in
 * controller classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ControllerListener implements EventSubscriberInterface
{
    /**
     * @var Reader
     */
    private \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * Modifies the Request object to apply configuration information found in
     * controllers annotations like the template to render or HTTP caching
     * configuration.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$controller = \$event->getController();

        if (!\\is_array(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        }

        if (!\\is_array(\$controller)) {
            return;
        }

        \$className = \$this->getRealClass(\\get_class(\$controller[0]));
        \$object = new \\ReflectionClass(\$className);
        \$method = \$object->getMethod(\$controller[1]);

        \$classConfigurations = \$this->getConfigurations(\$this->reader->getClassAnnotations(\$object));
        \$methodConfigurations = \$this->getConfigurations(\$this->reader->getMethodAnnotations(\$method));

        \$configurations = [];
        foreach (array_merge(array_keys(\$classConfigurations), array_keys(\$methodConfigurations)) as \$key) {
            if (!\\array_key_exists(\$key, \$classConfigurations)) {
                \$configurations[\$key] = \$methodConfigurations[\$key];
            } elseif (!\\array_key_exists(\$key, \$methodConfigurations)) {
                \$configurations[\$key] = \$classConfigurations[\$key];
            } else {
                if (\\is_array(\$classConfigurations[\$key])) {
                    if (!\\is_array(\$methodConfigurations[\$key])) {
                        throw new \\UnexpectedValueException('Configurations should both be an array or both not be an array');
                    }
                    \$configurations[\$key] = array_merge(\$classConfigurations[\$key], \$methodConfigurations[\$key]);
                } else {
                    // method configuration overrides class configuration
                    \$configurations[\$key] = \$methodConfigurations[\$key];
                }
            }
        }

        \$request = \$event->getRequest();
        foreach (\$configurations as \$key => \$attributes) {
            \$request->attributes->set(\$key, \$attributes);
        }
    }

    private function getConfigurations(array \$annotations)
    {
        \$configurations = [];
        foreach (\$annotations as \$configuration) {
            if (\$configuration instanceof ConfigurationInterface) {
                if (\$configuration->allowArray()) {
                    \$configurations['_'.\$configuration->getAliasName()][] = \$configuration;
                } elseif (!isset(\$configurations['_'.\$configuration->getAliasName()])) {
                    \$configurations['_'.\$configuration->getAliasName()] = \$configuration;
                } else {
                    throw new \\LogicException(sprintf('Multiple \"%s\" annotations are not allowed.', \$configuration->getAliasName()));
                }
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

    private static function getRealClass(string \$class): string
    {
        if (!class_exists(Proxy::class)) {
            return \$class;
        }
        if (false === \$pos = strrpos(\$class, '\\\\'.Proxy::MARKER.'\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php";
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

use Doctrine\\Common\\Annotations\\Reader;
use Doctrine\\Common\\Persistence\\Proxy;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ConfigurationInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * The ControllerListener class parses annotation blocks located in
 * controller classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ControllerListener implements EventSubscriberInterface
{
    /**
     * @var Reader
     */
    private \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * Modifies the Request object to apply configuration information found in
     * controllers annotations like the template to render or HTTP caching
     * configuration.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$controller = \$event->getController();

        if (!\\is_array(\$controller) && method_exists(\$controller, '__invoke')) {
            \$controller = [\$controller, '__invoke'];
        }

        if (!\\is_array(\$controller)) {
            return;
        }

        \$className = \$this->getRealClass(\\get_class(\$controller[0]));
        \$object = new \\ReflectionClass(\$className);
        \$method = \$object->getMethod(\$controller[1]);

        \$classConfigurations = \$this->getConfigurations(\$this->reader->getClassAnnotations(\$object));
        \$methodConfigurations = \$this->getConfigurations(\$this->reader->getMethodAnnotations(\$method));

        \$configurations = [];
        foreach (array_merge(array_keys(\$classConfigurations), array_keys(\$methodConfigurations)) as \$key) {
            if (!\\array_key_exists(\$key, \$classConfigurations)) {
                \$configurations[\$key] = \$methodConfigurations[\$key];
            } elseif (!\\array_key_exists(\$key, \$methodConfigurations)) {
                \$configurations[\$key] = \$classConfigurations[\$key];
            } else {
                if (\\is_array(\$classConfigurations[\$key])) {
                    if (!\\is_array(\$methodConfigurations[\$key])) {
                        throw new \\UnexpectedValueException('Configurations should both be an array or both not be an array');
                    }
                    \$configurations[\$key] = array_merge(\$classConfigurations[\$key], \$methodConfigurations[\$key]);
                } else {
                    // method configuration overrides class configuration
                    \$configurations[\$key] = \$methodConfigurations[\$key];
                }
            }
        }

        \$request = \$event->getRequest();
        foreach (\$configurations as \$key => \$attributes) {
            \$request->attributes->set(\$key, \$attributes);
        }
    }

    private function getConfigurations(array \$annotations)
    {
        \$configurations = [];
        foreach (\$annotations as \$configuration) {
            if (\$configuration instanceof ConfigurationInterface) {
                if (\$configuration->allowArray()) {
                    \$configurations['_'.\$configuration->getAliasName()][] = \$configuration;
                } elseif (!isset(\$configurations['_'.\$configuration->getAliasName()])) {
                    \$configurations['_'.\$configuration->getAliasName()] = \$configuration;
                } else {
                    throw new \\LogicException(sprintf('Multiple \"%s\" annotations are not allowed.', \$configuration->getAliasName()));
                }
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

    private static function getRealClass(string \$class): string
    {
        if (!class_exists(Proxy::class)) {
            return \$class;
        }
        if (false === \$pos = strrpos(\$class, '\\\\'.Proxy::MARKER.'\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php");
    }
}
