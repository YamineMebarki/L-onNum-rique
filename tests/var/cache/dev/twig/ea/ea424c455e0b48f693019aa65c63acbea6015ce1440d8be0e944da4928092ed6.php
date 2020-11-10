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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php */
class __TwigTemplate_aeb7f066b1f8bcad3b053b1e7719046a0e534eb2129dfd690fe50f9adcb5e4a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use Doctrine\\Common\\Reflection\\RuntimePublicReflectionProperty;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use function class_exists;
use function class_parents;

/**
 * PHP Runtime Reflection Service.
 */
class RuntimeReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        if (! class_exists(\$class)) {
            throw MappingException::nonExistingClass(\$class);
        }

        return class_parents(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return new ReflectionClass(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        \$reflectionProperty = new ReflectionProperty(\$class, \$property);

        if (\$reflectionProperty->isPublic()) {
            \$reflectionProperty = new RuntimePublicReflectionProperty(\$class, \$property);
        }

        \$reflectionProperty->setAccessible(true);

        return \$reflectionProperty;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        try {
            \$reflectionMethod = new ReflectionMethod(\$class, \$method);
        } catch (ReflectionException \$e) {
            return false;
        }

        return \$reflectionMethod->isPublic();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use Doctrine\\Common\\Reflection\\RuntimePublicReflectionProperty;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use function class_exists;
use function class_parents;

/**
 * PHP Runtime Reflection Service.
 */
class RuntimeReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        if (! class_exists(\$class)) {
            throw MappingException::nonExistingClass(\$class);
        }

        return class_parents(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return new ReflectionClass(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        \$reflectionProperty = new ReflectionProperty(\$class, \$property);

        if (\$reflectionProperty->isPublic()) {
            \$reflectionProperty = new RuntimePublicReflectionProperty(\$class, \$property);
        }

        \$reflectionProperty->setAccessible(true);

        return \$reflectionProperty;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        try {
            \$reflectionMethod = new ReflectionMethod(\$class, \$method);
        } catch (ReflectionException \$e) {
            return false;
        }

        return \$reflectionMethod->isPublic();
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php");
    }
}
