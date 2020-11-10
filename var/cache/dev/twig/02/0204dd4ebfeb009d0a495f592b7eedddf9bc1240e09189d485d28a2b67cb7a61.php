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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php */
class __TwigTemplate_93373c3b7e3fe1e5a671f516f40972177a0ed05a8124128f771ece8fcb0674cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadataFactory
{
    /**
     * Forces the factory to load the metadata of all classes known to the underlying
     * mapping driver.
     *
     * @return ClassMetadata[] The ClassMetadata instances of all mapped classes.
     */
    public function getAllMetadata();

    /**
     * Gets the class metadata descriptor for a class.
     *
     * @param string \$className The name of the class.
     *
     * @return ClassMetadata
     */
    public function getMetadataFor(\$className);

    /**
     * Checks whether the factory has the metadata for a class loaded already.
     *
     * @param string \$className
     *
     * @return bool TRUE if the metadata of the class in question is already loaded, FALSE otherwise.
     */
    public function hasMetadataFor(\$className);

    /**
     * Sets the metadata descriptor for a specific class.
     *
     * @param string        \$className
     * @param ClassMetadata \$class
     */
    public function setMetadataFor(\$className, \$class);

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped directly or as a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadataFactory
{
    /**
     * Forces the factory to load the metadata of all classes known to the underlying
     * mapping driver.
     *
     * @return ClassMetadata[] The ClassMetadata instances of all mapped classes.
     */
    public function getAllMetadata();

    /**
     * Gets the class metadata descriptor for a class.
     *
     * @param string \$className The name of the class.
     *
     * @return ClassMetadata
     */
    public function getMetadataFor(\$className);

    /**
     * Checks whether the factory has the metadata for a class loaded already.
     *
     * @param string \$className
     *
     * @return bool TRUE if the metadata of the class in question is already loaded, FALSE otherwise.
     */
    public function hasMetadataFor(\$className);

    /**
     * Sets the metadata descriptor for a specific class.
     *
     * @param string        \$className
     * @param ClassMetadata \$class
     */
    public function setMetadataFor(\$className, \$class);

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped directly or as a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php");
    }
}
