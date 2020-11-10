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

/* vendor/symfony/http-kernel/Controller/ControllerResolver.php */
class __TwigTemplate_288a124d1f83ee34a8ac362fb62ef5cc98b4f59615d006bee58251d5f913ff5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ControllerResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ControllerResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * This implementation uses the '_controller' request attribute to determine
 * the controller to execute.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class ControllerResolver implements ControllerResolverInterface
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function getController(Request \$request)
    {
        if (!\$controller = \$request->attributes->get('_controller')) {
            if (null !== \$this->logger) {
                \$this->logger->warning('Unable to look for the controller as the \"_controller\" parameter is missing.');
            }

            return false;
        }

        if (\\is_array(\$controller)) {
            if (isset(\$controller[0]) && \\is_string(\$controller[0]) && isset(\$controller[1])) {
                try {
                    \$controller[0] = \$this->instantiateController(\$controller[0]);
                } catch (\\Error | \\LogicException \$e) {
                    try {
                        // We cannot just check is_callable but have to use reflection because a non-static method
                        // can still be called statically in PHP but we don't want that. This is deprecated in PHP 7, so we
                        // could simplify this with PHP 8.
                        if ((new \\ReflectionMethod(\$controller[0], \$controller[1]))->isStatic()) {
                            return \$controller;
                        }
                    } catch (\\ReflectionException \$reflectionException) {
                        throw \$e;
                    }

                    throw \$e;
                }
            }

            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$controller)));
            }

            return \$controller;
        }

        if (\\is_object(\$controller)) {
            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$controller)));
            }

            return \$controller;
        }

        if (\\function_exists(\$controller)) {
            return \$controller;
        }

        try {
            \$callable = \$this->createController(\$controller);
        } catch (\\InvalidArgumentException \$e) {
            throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$e->getMessage()));
        }

        if (!\\is_callable(\$callable)) {
            throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$callable)));
        }

        return \$callable;
    }

    /**
     * Returns a callable for the given controller.
     *
     * @param string \$controller A Controller string
     *
     * @return callable A PHP callable
     *
     * @throws \\InvalidArgumentException When the controller cannot be created
     */
    protected function createController(\$controller)
    {
        if (false === strpos(\$controller, '::')) {
            \$controller = \$this->instantiateController(\$controller);

            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(\$this->getControllerError(\$controller));
            }

            return \$controller;
        }

        list(\$class, \$method) = explode('::', \$controller, 2);

        try {
            \$controller = [\$this->instantiateController(\$class), \$method];
        } catch (\\Error | \\LogicException \$e) {
            try {
                if ((new \\ReflectionMethod(\$class, \$method))->isStatic()) {
                    return \$class.'::'.\$method;
                }
            } catch (\\ReflectionException \$reflectionException) {
                throw \$e;
            }

            throw \$e;
        }

        if (!\\is_callable(\$controller)) {
            throw new \\InvalidArgumentException(\$this->getControllerError(\$controller));
        }

        return \$controller;
    }

    /**
     * Returns an instantiated controller.
     *
     * @param string \$class A class name
     *
     * @return object
     */
    protected function instantiateController(\$class)
    {
        return new \$class();
    }

    private function getControllerError(\$callable)
    {
        if (\\is_string(\$callable)) {
            if (false !== strpos(\$callable, '::')) {
                \$callable = explode('::', \$callable, 2);
            } else {
                return sprintf('Function \"%s\" does not exist.', \$callable);
            }
        }

        if (\\is_object(\$callable)) {
            \$availableMethods = \$this->getClassMethodsWithoutMagicMethods(\$callable);
            \$alternativeMsg = \$availableMethods ? sprintf(' or use one of the available methods: \"%s\"', implode('\", \"', \$availableMethods)) : '';

            return sprintf('Controller class \"%s\" cannot be called without a method name. You need to implement \"__invoke\"%s.', \\get_class(\$callable), \$alternativeMsg);
        }

        if (!\\is_array(\$callable)) {
            return sprintf('Invalid type for controller given, expected string, array or object, got \"%s\".', \\gettype(\$callable));
        }

        if (!isset(\$callable[0]) || !isset(\$callable[1]) || 2 !== \\count(\$callable)) {
            return 'Invalid array callable, expected [controller, method].';
        }

        list(\$controller, \$method) = \$callable;

        if (\\is_string(\$controller) && !class_exists(\$controller)) {
            return sprintf('Class \"%s\" does not exist.', \$controller);
        }

        \$className = \\is_object(\$controller) ? \\get_class(\$controller) : \$controller;

        if (method_exists(\$controller, \$method)) {
            return sprintf('Method \"%s\" on class \"%s\" should be public and non-abstract.', \$method, \$className);
        }

        \$collection = \$this->getClassMethodsWithoutMagicMethods(\$controller);

        \$alternatives = [];

        foreach (\$collection as \$item) {
            \$lev = levenshtein(\$method, \$item);

            if (\$lev <= \\strlen(\$method) / 3 || false !== strpos(\$item, \$method)) {
                \$alternatives[] = \$item;
            }
        }

        asort(\$alternatives);

        \$message = sprintf('Expected method \"%s\" on class \"%s\"', \$method, \$className);

        if (\\count(\$alternatives) > 0) {
            \$message .= sprintf(', did you mean \"%s\"?', implode('\", \"', \$alternatives));
        } else {
            \$message .= sprintf('. Available methods: \"%s\".', implode('\", \"', \$collection));
        }

        return \$message;
    }

    private function getClassMethodsWithoutMagicMethods(\$classOrObject)
    {
        \$methods = get_class_methods(\$classOrObject);

        return array_filter(\$methods, function (string \$method) {
            return 0 !== strncmp(\$method, '__', 2);
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Controller/ControllerResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * This implementation uses the '_controller' request attribute to determine
 * the controller to execute.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class ControllerResolver implements ControllerResolverInterface
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function getController(Request \$request)
    {
        if (!\$controller = \$request->attributes->get('_controller')) {
            if (null !== \$this->logger) {
                \$this->logger->warning('Unable to look for the controller as the \"_controller\" parameter is missing.');
            }

            return false;
        }

        if (\\is_array(\$controller)) {
            if (isset(\$controller[0]) && \\is_string(\$controller[0]) && isset(\$controller[1])) {
                try {
                    \$controller[0] = \$this->instantiateController(\$controller[0]);
                } catch (\\Error | \\LogicException \$e) {
                    try {
                        // We cannot just check is_callable but have to use reflection because a non-static method
                        // can still be called statically in PHP but we don't want that. This is deprecated in PHP 7, so we
                        // could simplify this with PHP 8.
                        if ((new \\ReflectionMethod(\$controller[0], \$controller[1]))->isStatic()) {
                            return \$controller;
                        }
                    } catch (\\ReflectionException \$reflectionException) {
                        throw \$e;
                    }

                    throw \$e;
                }
            }

            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$controller)));
            }

            return \$controller;
        }

        if (\\is_object(\$controller)) {
            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$controller)));
            }

            return \$controller;
        }

        if (\\function_exists(\$controller)) {
            return \$controller;
        }

        try {
            \$callable = \$this->createController(\$controller);
        } catch (\\InvalidArgumentException \$e) {
            throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$e->getMessage()));
        }

        if (!\\is_callable(\$callable)) {
            throw new \\InvalidArgumentException(sprintf('The controller for URI \"%s\" is not callable. %s', \$request->getPathInfo(), \$this->getControllerError(\$callable)));
        }

        return \$callable;
    }

    /**
     * Returns a callable for the given controller.
     *
     * @param string \$controller A Controller string
     *
     * @return callable A PHP callable
     *
     * @throws \\InvalidArgumentException When the controller cannot be created
     */
    protected function createController(\$controller)
    {
        if (false === strpos(\$controller, '::')) {
            \$controller = \$this->instantiateController(\$controller);

            if (!\\is_callable(\$controller)) {
                throw new \\InvalidArgumentException(\$this->getControllerError(\$controller));
            }

            return \$controller;
        }

        list(\$class, \$method) = explode('::', \$controller, 2);

        try {
            \$controller = [\$this->instantiateController(\$class), \$method];
        } catch (\\Error | \\LogicException \$e) {
            try {
                if ((new \\ReflectionMethod(\$class, \$method))->isStatic()) {
                    return \$class.'::'.\$method;
                }
            } catch (\\ReflectionException \$reflectionException) {
                throw \$e;
            }

            throw \$e;
        }

        if (!\\is_callable(\$controller)) {
            throw new \\InvalidArgumentException(\$this->getControllerError(\$controller));
        }

        return \$controller;
    }

    /**
     * Returns an instantiated controller.
     *
     * @param string \$class A class name
     *
     * @return object
     */
    protected function instantiateController(\$class)
    {
        return new \$class();
    }

    private function getControllerError(\$callable)
    {
        if (\\is_string(\$callable)) {
            if (false !== strpos(\$callable, '::')) {
                \$callable = explode('::', \$callable, 2);
            } else {
                return sprintf('Function \"%s\" does not exist.', \$callable);
            }
        }

        if (\\is_object(\$callable)) {
            \$availableMethods = \$this->getClassMethodsWithoutMagicMethods(\$callable);
            \$alternativeMsg = \$availableMethods ? sprintf(' or use one of the available methods: \"%s\"', implode('\", \"', \$availableMethods)) : '';

            return sprintf('Controller class \"%s\" cannot be called without a method name. You need to implement \"__invoke\"%s.', \\get_class(\$callable), \$alternativeMsg);
        }

        if (!\\is_array(\$callable)) {
            return sprintf('Invalid type for controller given, expected string, array or object, got \"%s\".', \\gettype(\$callable));
        }

        if (!isset(\$callable[0]) || !isset(\$callable[1]) || 2 !== \\count(\$callable)) {
            return 'Invalid array callable, expected [controller, method].';
        }

        list(\$controller, \$method) = \$callable;

        if (\\is_string(\$controller) && !class_exists(\$controller)) {
            return sprintf('Class \"%s\" does not exist.', \$controller);
        }

        \$className = \\is_object(\$controller) ? \\get_class(\$controller) : \$controller;

        if (method_exists(\$controller, \$method)) {
            return sprintf('Method \"%s\" on class \"%s\" should be public and non-abstract.', \$method, \$className);
        }

        \$collection = \$this->getClassMethodsWithoutMagicMethods(\$controller);

        \$alternatives = [];

        foreach (\$collection as \$item) {
            \$lev = levenshtein(\$method, \$item);

            if (\$lev <= \\strlen(\$method) / 3 || false !== strpos(\$item, \$method)) {
                \$alternatives[] = \$item;
            }
        }

        asort(\$alternatives);

        \$message = sprintf('Expected method \"%s\" on class \"%s\"', \$method, \$className);

        if (\\count(\$alternatives) > 0) {
            \$message .= sprintf(', did you mean \"%s\"?', implode('\", \"', \$alternatives));
        } else {
            \$message .= sprintf('. Available methods: \"%s\".', implode('\", \"', \$collection));
        }

        return \$message;
    }

    private function getClassMethodsWithoutMagicMethods(\$classOrObject)
    {
        \$methods = get_class_methods(\$classOrObject);

        return array_filter(\$methods, function (string \$method) {
            return 0 !== strncmp(\$method, '__', 2);
        });
    }
}
", "vendor/symfony/http-kernel/Controller/ControllerResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Controller/ControllerResolver.php");
    }
}
