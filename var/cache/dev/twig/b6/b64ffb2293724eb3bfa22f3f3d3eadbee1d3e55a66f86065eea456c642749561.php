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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php */
class __TwigTemplate_abebcde4bdd52185918776a247c759e72927416a6e32ce6025484aa288aa4a7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use Exception;
use function implode;
use function sprintf;

/**
 * A MappingException indicates that something is wrong with the mapping setup.
 */
class MappingException extends Exception
{
    /**
     * @param string   \$className
     * @param string[] \$namespaces
     *
     * @return self
     */
    public static function classNotFoundInNamespaces(\$className, \$namespaces)
    {
        return new self(sprintf(
            \"The class '%s' was not found in the chain configured namespaces %s\",
            \$className,
            implode(', ', \$namespaces)
        ));
    }

    /**
     * @return self
     */
    public static function pathRequired()
    {
        return new self('Specifying the paths to your entities is required ' .
            'in the AnnotationDriver to retrieve all class names.');
    }

    /**
     * @param string|null \$path
     *
     * @return self
     */
    public static function fileMappingDriversRequireConfiguredDirectoryPath(\$path = null)
    {
        if (! empty(\$path)) {
            \$path = '[' . \$path . ']';
        }

        return new self(sprintf(
            'File mapping drivers must have a valid directory path, ' .
            'however the given path %s seems to be incorrect!',
            \$path
        ));
    }

    /**
     * @param string \$entityName
     * @param string \$fileName
     *
     * @return self
     */
    public static function mappingFileNotFound(\$entityName, \$fileName)
    {
        return new self(sprintf(
            \"No mapping file found named '%s' for class '%s'.\",
            \$fileName,
            \$entityName
        ));
    }

    /**
     * @param string \$entityName
     * @param string \$fileName
     *
     * @return self
     */
    public static function invalidMappingFile(\$entityName, \$fileName)
    {
        return new self(sprintf(
            \"Invalid mapping file '%s' for class '%s'.\",
            \$fileName,
            \$entityName
        ));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function nonExistingClass(\$className)
    {
        return new self(sprintf(\"Class '%s' does not exist\", \$className));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use Exception;
use function implode;
use function sprintf;

/**
 * A MappingException indicates that something is wrong with the mapping setup.
 */
class MappingException extends Exception
{
    /**
     * @param string   \$className
     * @param string[] \$namespaces
     *
     * @return self
     */
    public static function classNotFoundInNamespaces(\$className, \$namespaces)
    {
        return new self(sprintf(
            \"The class '%s' was not found in the chain configured namespaces %s\",
            \$className,
            implode(', ', \$namespaces)
        ));
    }

    /**
     * @return self
     */
    public static function pathRequired()
    {
        return new self('Specifying the paths to your entities is required ' .
            'in the AnnotationDriver to retrieve all class names.');
    }

    /**
     * @param string|null \$path
     *
     * @return self
     */
    public static function fileMappingDriversRequireConfiguredDirectoryPath(\$path = null)
    {
        if (! empty(\$path)) {
            \$path = '[' . \$path . ']';
        }

        return new self(sprintf(
            'File mapping drivers must have a valid directory path, ' .
            'however the given path %s seems to be incorrect!',
            \$path
        ));
    }

    /**
     * @param string \$entityName
     * @param string \$fileName
     *
     * @return self
     */
    public static function mappingFileNotFound(\$entityName, \$fileName)
    {
        return new self(sprintf(
            \"No mapping file found named '%s' for class '%s'.\",
            \$fileName,
            \$entityName
        ));
    }

    /**
     * @param string \$entityName
     * @param string \$fileName
     *
     * @return self
     */
    public static function invalidMappingFile(\$entityName, \$fileName)
    {
        return new self(sprintf(
            \"Invalid mapping file '%s' for class '%s'.\",
            \$fileName,
            \$entityName
        ));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function nonExistingClass(\$className)
    {
        return new self(sprintf(\"Class '%s' does not exist\", \$className));
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php");
    }
}
