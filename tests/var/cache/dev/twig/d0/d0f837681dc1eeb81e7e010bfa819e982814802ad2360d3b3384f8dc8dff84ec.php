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

/* vendor/symfony/validator/Mapping/ClassMetadataInterface.php */
class __TwigTemplate_3edd9631e020028e0990484590dc11a8e58c3b88729e2739caa1d5996be84fb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/ClassMetadataInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/ClassMetadataInterface.php"));

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

namespace Symfony\\Component\\Validator\\Mapping;

/**
 * Stores all metadata needed for validating objects of specific class.
 *
 * Most importantly, the metadata stores the constraints against which an object
 * and its properties should be validated.
 *
 * Additionally, the metadata stores whether the \"Default\" group is overridden
 * by a group sequence for that class and whether instances of that class
 * should be traversed or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see MetadataInterface
 * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
 * @see \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface
 * @see TraversalStrategy
 */
interface ClassMetadataInterface extends MetadataInterface
{
    /**
     * Returns the names of all constrained properties.
     *
     * @return string[] A list of property names
     */
    public function getConstrainedProperties();

    /**
     * Returns whether the \"Default\" group is overridden by a group sequence.
     *
     * If it is, you can access the group sequence with {@link getGroupSequence()}.
     *
     * @return bool Returns true if the \"Default\" group is overridden
     *
     * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
     */
    public function hasGroupSequence();

    /**
     * Returns the group sequence that overrides the \"Default\" group for this
     * class.
     *
     * @return \\Symfony\\Component\\Validator\\Constraints\\GroupSequence|null The group sequence or null
     *
     * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
     */
    public function getGroupSequence();

    /**
     * Returns whether the \"Default\" group is overridden by a dynamic group
     * sequence obtained by the validated objects.
     *
     * If this method returns true, the class must implement
     * {@link \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface}.
     * This interface will be used to obtain the group sequence when an object
     * of this class is validated.
     *
     * @return bool Returns true if the \"Default\" group is overridden by
     *              a dynamic group sequence
     *
     * @see \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface
     */
    public function isGroupSequenceProvider();

    /**
     * Check if there's any metadata attached to the given named property.
     *
     * @param string \$property The property name
     *
     * @return bool
     */
    public function hasPropertyMetadata(\$property);

    /**
     * Returns all metadata instances for the given named property.
     *
     * If your implementation does not support properties, throw an exception
     * in this method (for example a <tt>BadMethodCallException</tt>).
     *
     * @param string \$property The property name
     *
     * @return PropertyMetadataInterface[] A list of metadata instances. Empty if
     *                                     no metadata exists for the property.
     */
    public function getPropertyMetadata(\$property);

    /**
     * Returns the name of the backing PHP class.
     *
     * @return string The name of the backing class
     */
    public function getClassName();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/ClassMetadataInterface.php";
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

namespace Symfony\\Component\\Validator\\Mapping;

/**
 * Stores all metadata needed for validating objects of specific class.
 *
 * Most importantly, the metadata stores the constraints against which an object
 * and its properties should be validated.
 *
 * Additionally, the metadata stores whether the \"Default\" group is overridden
 * by a group sequence for that class and whether instances of that class
 * should be traversed or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see MetadataInterface
 * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
 * @see \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface
 * @see TraversalStrategy
 */
interface ClassMetadataInterface extends MetadataInterface
{
    /**
     * Returns the names of all constrained properties.
     *
     * @return string[] A list of property names
     */
    public function getConstrainedProperties();

    /**
     * Returns whether the \"Default\" group is overridden by a group sequence.
     *
     * If it is, you can access the group sequence with {@link getGroupSequence()}.
     *
     * @return bool Returns true if the \"Default\" group is overridden
     *
     * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
     */
    public function hasGroupSequence();

    /**
     * Returns the group sequence that overrides the \"Default\" group for this
     * class.
     *
     * @return \\Symfony\\Component\\Validator\\Constraints\\GroupSequence|null The group sequence or null
     *
     * @see \\Symfony\\Component\\Validator\\Constraints\\GroupSequence
     */
    public function getGroupSequence();

    /**
     * Returns whether the \"Default\" group is overridden by a dynamic group
     * sequence obtained by the validated objects.
     *
     * If this method returns true, the class must implement
     * {@link \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface}.
     * This interface will be used to obtain the group sequence when an object
     * of this class is validated.
     *
     * @return bool Returns true if the \"Default\" group is overridden by
     *              a dynamic group sequence
     *
     * @see \\Symfony\\Component\\Validator\\GroupSequenceProviderInterface
     */
    public function isGroupSequenceProvider();

    /**
     * Check if there's any metadata attached to the given named property.
     *
     * @param string \$property The property name
     *
     * @return bool
     */
    public function hasPropertyMetadata(\$property);

    /**
     * Returns all metadata instances for the given named property.
     *
     * If your implementation does not support properties, throw an exception
     * in this method (for example a <tt>BadMethodCallException</tt>).
     *
     * @param string \$property The property name
     *
     * @return PropertyMetadataInterface[] A list of metadata instances. Empty if
     *                                     no metadata exists for the property.
     */
    public function getPropertyMetadata(\$property);

    /**
     * Returns the name of the backing PHP class.
     *
     * @return string The name of the backing class
     */
    public function getClassName();
}
", "vendor/symfony/validator/Mapping/ClassMetadataInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/ClassMetadataInterface.php");
    }
}
