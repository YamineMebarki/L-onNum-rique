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

/* vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php */
class __TwigTemplate_a7e996fad73c883ea36e7404cfee40a325ce4d6bc269a9cfbf3e5be26c5b1f2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

interface TraitUsageInterface
{
    /**
     * Add a class to \"use\" classes
     *
     * @param  string \$use
     * @param  string|null \$useAlias
     * @return self
     */
    public function addUse(\$use, \$useAlias = null);

    /**
     * Returns the \"use\" classes
     *
     * @return array
     */
    public function getUses();

    /**
     * Add trait takes an array of trait options or string as arguments.
     *
     * Array Format:
     * key: traitName value: String
     *
     * key: aliases value: array of arrays
     *      key: method value: @see addTraitAlias
     *      key: alias value: @see addTraitAlias
     *      key: visibility value: @see addTraitAlias
     *
     * key: insteadof value: array of arrays
     *      key: method value: @see self::addTraitOverride
     *      key: traitToReplace value: @see self::addTraitOverride
     *
     * @param mixed \$trait String | Array
     * @return self
     */
    public function addTrait(\$trait);

    /**
     * Add multiple traits.  Trait can be an array of trait names or array of trait
     * configurations
     *
     * @param array \$traits Array of string names or configurations (@see addTrait)
     * @return self
     */
    public function addTraits(array \$traits);

    /**
     * Check to see if the class has a trait defined
     *
     * @param string \$traitName
     * @return bool
     */
    public function hasTrait(\$traitName);

    /**
     * Get a list of trait names
     *
     * @return array
     */
    public function getTraits();

    /**
     * Remove a trait by its name
     *
     * @param string \$traitName
     */
    public function removeTrait(\$traitName);

    /**
     * Add a trait alias.  This will be used to generate the AS portion of the use statement.
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String
     * Option 2: Array
     * key: traitName value: name of trait
     * key: method value: trait method
     *
     * \$alias:
     * Alias is a string representing the new method name.
     *
     * \$visibilty:
     * ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PRIVATE | ReflectionMethod::IS_PROTECTED
     *
     * @param mixed \$method String or Array
     * @param string \$alias
     * @param null|int \$visibility
     */
    public function addTraitAlias(\$method, \$alias, \$visibility = null);

    /**
     * @return array
     */
    public function getTraitAliases();

    /**
     * Add a trait method override.  This will be used to generate the INSTEADOF portion of the use
     * statement.
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String Format: <trait name>::<method name>
     * Option 2: Array
     * key: traitName value: trait name
     * key: method value: method name
     *
     * \$traitToReplace:
     * The name of the trait that you wish to supersede.
     *
     * This method provides 2 ways for defining the trait method.
     * Option 1: String of trait to replace
     * Option 2: Array of strings of traits to replace

     * @param mixed \$method
     * @param mixed \$traitsToReplace
     */
    public function addTraitOverride(\$method, \$traitsToReplace);

    /**
     * Remove an override for a given trait::method
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String Format: <trait name>::<method name>
     * Option 2: Array
     * key: traitName value: trait name
     * key: method value: method name
     *
     * \$overridesToRemove:
     * The name of the trait that you wish to remove.
     *
     * This method provides 2 ways for defining the trait method.
     * Option 1: String of trait to replace
     * Option 2: Array of strings of traits to replace
     *
     * @param mixed \$method
     * @param mixed \$overridesToRemove
     * @return self
     */
    public function removeTraitOverride(\$method, \$overridesToRemove = null);

    /**
     * Return trait overrides
     *
     * @return array
     */
    public function getTraitOverrides();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

interface TraitUsageInterface
{
    /**
     * Add a class to \"use\" classes
     *
     * @param  string \$use
     * @param  string|null \$useAlias
     * @return self
     */
    public function addUse(\$use, \$useAlias = null);

    /**
     * Returns the \"use\" classes
     *
     * @return array
     */
    public function getUses();

    /**
     * Add trait takes an array of trait options or string as arguments.
     *
     * Array Format:
     * key: traitName value: String
     *
     * key: aliases value: array of arrays
     *      key: method value: @see addTraitAlias
     *      key: alias value: @see addTraitAlias
     *      key: visibility value: @see addTraitAlias
     *
     * key: insteadof value: array of arrays
     *      key: method value: @see self::addTraitOverride
     *      key: traitToReplace value: @see self::addTraitOverride
     *
     * @param mixed \$trait String | Array
     * @return self
     */
    public function addTrait(\$trait);

    /**
     * Add multiple traits.  Trait can be an array of trait names or array of trait
     * configurations
     *
     * @param array \$traits Array of string names or configurations (@see addTrait)
     * @return self
     */
    public function addTraits(array \$traits);

    /**
     * Check to see if the class has a trait defined
     *
     * @param string \$traitName
     * @return bool
     */
    public function hasTrait(\$traitName);

    /**
     * Get a list of trait names
     *
     * @return array
     */
    public function getTraits();

    /**
     * Remove a trait by its name
     *
     * @param string \$traitName
     */
    public function removeTrait(\$traitName);

    /**
     * Add a trait alias.  This will be used to generate the AS portion of the use statement.
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String
     * Option 2: Array
     * key: traitName value: name of trait
     * key: method value: trait method
     *
     * \$alias:
     * Alias is a string representing the new method name.
     *
     * \$visibilty:
     * ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PRIVATE | ReflectionMethod::IS_PROTECTED
     *
     * @param mixed \$method String or Array
     * @param string \$alias
     * @param null|int \$visibility
     */
    public function addTraitAlias(\$method, \$alias, \$visibility = null);

    /**
     * @return array
     */
    public function getTraitAliases();

    /**
     * Add a trait method override.  This will be used to generate the INSTEADOF portion of the use
     * statement.
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String Format: <trait name>::<method name>
     * Option 2: Array
     * key: traitName value: trait name
     * key: method value: method name
     *
     * \$traitToReplace:
     * The name of the trait that you wish to supersede.
     *
     * This method provides 2 ways for defining the trait method.
     * Option 1: String of trait to replace
     * Option 2: Array of strings of traits to replace

     * @param mixed \$method
     * @param mixed \$traitsToReplace
     */
    public function addTraitOverride(\$method, \$traitsToReplace);

    /**
     * Remove an override for a given trait::method
     *
     * \$method:
     * This method provides 2 ways for defining the trait method.
     * Option 1: String Format: <trait name>::<method name>
     * Option 2: Array
     * key: traitName value: trait name
     * key: method value: method name
     *
     * \$overridesToRemove:
     * The name of the trait that you wish to remove.
     *
     * This method provides 2 ways for defining the trait method.
     * Option 1: String of trait to replace
     * Option 2: Array of strings of traits to replace
     *
     * @param mixed \$method
     * @param mixed \$overridesToRemove
     * @return self
     */
    public function removeTraitOverride(\$method, \$overridesToRemove = null);

    /**
     * Return trait overrides
     *
     * @return array
     */
    public function getTraitOverrides();
}
", "vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/TraitUsageInterface.php");
    }
}
