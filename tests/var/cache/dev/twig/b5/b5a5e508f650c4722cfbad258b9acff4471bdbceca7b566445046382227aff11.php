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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php */
class __TwigTemplate_592413fe1dd5b86ff73cb82581ed36a4af108157c63c6499f9ba9f8851abb089 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use function strpos;
use function strrev;
use function strrpos;
use function substr;

/**
 * PHP Runtime Reflection Service.
 */
class StaticReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }
        return \$className;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$className)
    {
        \$namespace = '';
        if (strpos(\$className, '\\\\') !== false) {
            \$namespace = strrev(substr(strrev(\$className), strpos(strrev(\$className), '\\\\') + 1));
        }
        return \$namespace;
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use function strpos;
use function strrev;
use function strrpos;
use function substr;

/**
 * PHP Runtime Reflection Service.
 */
class StaticReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }
        return \$className;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$className)
    {
        \$namespace = '';
        if (strpos(\$className, '\\\\') !== false) {
            \$namespace = strrev(substr(strrev(\$className), strpos(strrev(\$className), '\\\\') + 1));
        }
        return \$namespace;
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        return true;
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php");
    }
}
