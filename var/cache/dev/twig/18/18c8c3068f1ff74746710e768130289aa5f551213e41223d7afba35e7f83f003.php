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

/* vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php */
class __TwigTemplate_cf119e6eb0c95730b77ea5ae4f4ff502ed1e1f2d4c01bdc7aada5ad7d9cebabc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php"));

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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Builds {@see ArgumentMetadata} objects based on the given Controller.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createArgumentMetadata(\$controller)
    {
        \$arguments = [];

        if (\\is_array(\$controller)) {
            \$reflection = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && !\$controller instanceof \\Closure) {
            \$reflection = (new \\ReflectionObject(\$controller))->getMethod('__invoke');
        } else {
            \$reflection = new \\ReflectionFunction(\$controller);
        }

        foreach (\$reflection->getParameters() as \$param) {
            \$arguments[] = new ArgumentMetadata(\$param->getName(), \$this->getType(\$param, \$reflection), \$param->isVariadic(), \$param->isDefaultValueAvailable(), \$param->isDefaultValueAvailable() ? \$param->getDefaultValue() : null, \$param->allowsNull());
        }

        return \$arguments;
    }

    /**
     * Returns an associated type to the given parameter if available.
     */
    private function getType(\\ReflectionParameter \$parameter, \\ReflectionFunctionAbstract \$function): ?string
    {
        if (!\$type = \$parameter->getType()) {
            return null;
        }
        \$name = \$type->getName();
        \$lcName = strtolower(\$name);

        if ('self' !== \$lcName && 'parent' !== \$lcName) {
            return \$name;
        }
        if (!\$function instanceof \\ReflectionMethod) {
            return null;
        }
        if ('self' === \$lcName) {
            return \$function->getDeclaringClass()->name;
        }
        if (\$parent = \$function->getDeclaringClass()->getParentClass()) {
            return \$parent->name;
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
        return "vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php";
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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Builds {@see ArgumentMetadata} objects based on the given Controller.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createArgumentMetadata(\$controller)
    {
        \$arguments = [];

        if (\\is_array(\$controller)) {
            \$reflection = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && !\$controller instanceof \\Closure) {
            \$reflection = (new \\ReflectionObject(\$controller))->getMethod('__invoke');
        } else {
            \$reflection = new \\ReflectionFunction(\$controller);
        }

        foreach (\$reflection->getParameters() as \$param) {
            \$arguments[] = new ArgumentMetadata(\$param->getName(), \$this->getType(\$param, \$reflection), \$param->isVariadic(), \$param->isDefaultValueAvailable(), \$param->isDefaultValueAvailable() ? \$param->getDefaultValue() : null, \$param->allowsNull());
        }

        return \$arguments;
    }

    /**
     * Returns an associated type to the given parameter if available.
     */
    private function getType(\\ReflectionParameter \$parameter, \\ReflectionFunctionAbstract \$function): ?string
    {
        if (!\$type = \$parameter->getType()) {
            return null;
        }
        \$name = \$type->getName();
        \$lcName = strtolower(\$name);

        if ('self' !== \$lcName && 'parent' !== \$lcName) {
            return \$name;
        }
        if (!\$function instanceof \\ReflectionMethod) {
            return null;
        }
        if ('self' === \$lcName) {
            return \$function->getDeclaringClass()->name;
        }
        if (\$parent = \$function->getDeclaringClass()->getParentClass()) {
            return \$parent->name;
        }

        return null;
    }
}
", "vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php");
    }
}
