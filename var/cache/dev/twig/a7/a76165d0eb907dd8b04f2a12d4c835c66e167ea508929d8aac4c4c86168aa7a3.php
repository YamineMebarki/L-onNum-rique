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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php */
class __TwigTemplate_9aecd59760786fcf8db87dec854e351a0f753d8cbec9ebdbf68538994c03dc42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use ReflectionClass;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadata
{
    /**
     * Gets the fully-qualified class name of this persistent class.
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the mapped identifier field name.
     *
     * The returned structure is an array of the identifier field names.
     *
     * @return mixed[]
     */
    public function getIdentifier();

    /**
     * Gets the ReflectionClass instance for this mapped class.
     *
     * @return ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Checks if the given field name is a mapped identifier for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isIdentifier(\$fieldName);

    /**
     * Checks if the given field is a mapped property for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function hasField(\$fieldName);

    /**
     * Checks if the given field is a mapped association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function hasAssociation(\$fieldName);

    /**
     * Checks if the given field is a mapped single valued association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isSingleValuedAssociation(\$fieldName);

    /**
     * Checks if the given field is a mapped collection valued association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isCollectionValuedAssociation(\$fieldName);

    /**
     * A numerically indexed list of field names of this persistent class.
     *
     * This array includes identifier fields if present on this class.
     *
     * @return string[]
     */
    public function getFieldNames();

    /**
     * Returns an array of identifier field names numerically indexed.
     *
     * @return string[]
     */
    public function getIdentifierFieldNames();

    /**
     * Returns a numerically indexed list of association names of this persistent class.
     *
     * This array includes identifier associations if present on this class.
     *
     * @return string[]
     */
    public function getAssociationNames();

    /**
     * Returns a type name of this field.
     *
     * This type names can be implementation specific but should at least include the php types:
     * integer, string, boolean, float/double, datetime.
     *
     * @param string \$fieldName
     *
     * @return string
     */
    public function getTypeOfField(\$fieldName);

    /**
     * Returns the target class name of the given association.
     *
     * @param string \$assocName
     *
     * @return string
     */
    public function getAssociationTargetClass(\$assocName);

    /**
     * Checks if the association is the inverse side of a bidirectional association.
     *
     * @param string \$assocName
     *
     * @return bool
     */
    public function isAssociationInverseSide(\$assocName);

    /**
     * Returns the target field of the owning side of the association.
     *
     * @param string \$assocName
     *
     * @return string
     */
    public function getAssociationMappedByTargetField(\$assocName);

    /**
     * Returns the identifier of this object as an array with field name as key.
     *
     * Has to return an empty array if no identifier isset.
     *
     * @param object \$object
     *
     * @return mixed[]
     */
    public function getIdentifierValues(\$object);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use ReflectionClass;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadata
{
    /**
     * Gets the fully-qualified class name of this persistent class.
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the mapped identifier field name.
     *
     * The returned structure is an array of the identifier field names.
     *
     * @return mixed[]
     */
    public function getIdentifier();

    /**
     * Gets the ReflectionClass instance for this mapped class.
     *
     * @return ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Checks if the given field name is a mapped identifier for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isIdentifier(\$fieldName);

    /**
     * Checks if the given field is a mapped property for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function hasField(\$fieldName);

    /**
     * Checks if the given field is a mapped association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function hasAssociation(\$fieldName);

    /**
     * Checks if the given field is a mapped single valued association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isSingleValuedAssociation(\$fieldName);

    /**
     * Checks if the given field is a mapped collection valued association for this class.
     *
     * @param string \$fieldName
     *
     * @return bool
     */
    public function isCollectionValuedAssociation(\$fieldName);

    /**
     * A numerically indexed list of field names of this persistent class.
     *
     * This array includes identifier fields if present on this class.
     *
     * @return string[]
     */
    public function getFieldNames();

    /**
     * Returns an array of identifier field names numerically indexed.
     *
     * @return string[]
     */
    public function getIdentifierFieldNames();

    /**
     * Returns a numerically indexed list of association names of this persistent class.
     *
     * This array includes identifier associations if present on this class.
     *
     * @return string[]
     */
    public function getAssociationNames();

    /**
     * Returns a type name of this field.
     *
     * This type names can be implementation specific but should at least include the php types:
     * integer, string, boolean, float/double, datetime.
     *
     * @param string \$fieldName
     *
     * @return string
     */
    public function getTypeOfField(\$fieldName);

    /**
     * Returns the target class name of the given association.
     *
     * @param string \$assocName
     *
     * @return string
     */
    public function getAssociationTargetClass(\$assocName);

    /**
     * Checks if the association is the inverse side of a bidirectional association.
     *
     * @param string \$assocName
     *
     * @return bool
     */
    public function isAssociationInverseSide(\$assocName);

    /**
     * Returns the target field of the owning side of the association.
     *
     * @param string \$assocName
     *
     * @return string
     */
    public function getAssociationMappedByTargetField(\$assocName);

    /**
     * Returns the identifier of this object as an array with field name as key.
     *
     * Has to return an empty array if no identifier isset.
     *
     * @param object \$object
     *
     * @return mixed[]
     */
    public function getIdentifierValues(\$object);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php");
    }
}
