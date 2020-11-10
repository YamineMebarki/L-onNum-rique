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

/* vendor/symfony/property-access/PropertyAccessorInterface.php */
class __TwigTemplate_1d02c9258e89d8715ffc00070a1ae44acd824882f7ad014947f47ab6149b74a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyAccessorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyAccessorInterface.php"));

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

namespace Symfony\\Component\\PropertyAccess;

/**
 * Writes and reads values to/from an object/array graph.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface PropertyAccessorInterface
{
    /**
     * Sets the value at the end of the property path of the object graph.
     *
     * Example:
     *
     *     use Symfony\\Component\\PropertyAccess\\PropertyAccess;
     *
     *     \$propertyAccessor = PropertyAccess::createPropertyAccessor();
     *
     *     echo \$propertyAccessor->setValue(\$object, 'child.name', 'Fabien');
     *     // equals echo \$object->getChild()->setName('Fabien');
     *
     * This method first tries to find a public setter for each property in the
     * path. The name of the setter must be the camel-cased property name
     * prefixed with \"set\".
     *
     * If the setter does not exist, this method tries to find a public
     * property. The value of the property is then changed.
     *
     * If neither is found, an exception is thrown.
     *
     * @param object|array                 \$objectOrArray The object or array to modify
     * @param string|PropertyPathInterface \$propertyPath  The property path to modify
     * @param mixed                        \$value         The value to set at the end of the property path
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     * @throws Exception\\AccessException          If a property/index does not exist or is not public
     * @throws Exception\\UnexpectedTypeException  If a value within the path is neither object nor array
     */
    public function setValue(&\$objectOrArray, \$propertyPath, \$value);

    /**
     * Returns the value at the end of the property path of the object graph.
     *
     * Example:
     *
     *     use Symfony\\Component\\PropertyAccess\\PropertyAccess;
     *
     *     \$propertyAccessor = PropertyAccess::createPropertyAccessor();
     *
     *     echo \$propertyAccessor->getValue(\$object, 'child.name');
     *     // equals echo \$object->getChild()->getName();
     *
     * This method first tries to find a public getter for each property in the
     * path. The name of the getter must be the camel-cased property name
     * prefixed with \"get\", \"is\", or \"has\".
     *
     * If the getter does not exist, this method tries to find a public
     * property. The value of the property is then returned.
     *
     * If none of them are found, an exception is thrown.
     *
     * @param object|array                 \$objectOrArray The object or array to traverse
     * @param string|PropertyPathInterface \$propertyPath  The property path to read
     *
     * @return mixed The value at the end of the property path
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     * @throws Exception\\AccessException          If a property/index does not exist or is not public
     * @throws Exception\\UnexpectedTypeException  If a value within the path is neither object
     *                                            nor array
     */
    public function getValue(\$objectOrArray, \$propertyPath);

    /**
     * Returns whether a value can be written at a given property path.
     *
     * Whenever this method returns true, {@link setValue()} is guaranteed not
     * to throw an exception when called with the same arguments.
     *
     * @param object|array                 \$objectOrArray The object or array to check
     * @param string|PropertyPathInterface \$propertyPath  The property path to check
     *
     * @return bool Whether the value can be set
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     */
    public function isWritable(\$objectOrArray, \$propertyPath);

    /**
     * Returns whether a property path can be read from an object graph.
     *
     * Whenever this method returns true, {@link getValue()} is guaranteed not
     * to throw an exception when called with the same arguments.
     *
     * @param object|array                 \$objectOrArray The object or array to check
     * @param string|PropertyPathInterface \$propertyPath  The property path to check
     *
     * @return bool Whether the property path can be read
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     */
    public function isReadable(\$objectOrArray, \$propertyPath);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/PropertyAccessorInterface.php";
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

namespace Symfony\\Component\\PropertyAccess;

/**
 * Writes and reads values to/from an object/array graph.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface PropertyAccessorInterface
{
    /**
     * Sets the value at the end of the property path of the object graph.
     *
     * Example:
     *
     *     use Symfony\\Component\\PropertyAccess\\PropertyAccess;
     *
     *     \$propertyAccessor = PropertyAccess::createPropertyAccessor();
     *
     *     echo \$propertyAccessor->setValue(\$object, 'child.name', 'Fabien');
     *     // equals echo \$object->getChild()->setName('Fabien');
     *
     * This method first tries to find a public setter for each property in the
     * path. The name of the setter must be the camel-cased property name
     * prefixed with \"set\".
     *
     * If the setter does not exist, this method tries to find a public
     * property. The value of the property is then changed.
     *
     * If neither is found, an exception is thrown.
     *
     * @param object|array                 \$objectOrArray The object or array to modify
     * @param string|PropertyPathInterface \$propertyPath  The property path to modify
     * @param mixed                        \$value         The value to set at the end of the property path
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     * @throws Exception\\AccessException          If a property/index does not exist or is not public
     * @throws Exception\\UnexpectedTypeException  If a value within the path is neither object nor array
     */
    public function setValue(&\$objectOrArray, \$propertyPath, \$value);

    /**
     * Returns the value at the end of the property path of the object graph.
     *
     * Example:
     *
     *     use Symfony\\Component\\PropertyAccess\\PropertyAccess;
     *
     *     \$propertyAccessor = PropertyAccess::createPropertyAccessor();
     *
     *     echo \$propertyAccessor->getValue(\$object, 'child.name');
     *     // equals echo \$object->getChild()->getName();
     *
     * This method first tries to find a public getter for each property in the
     * path. The name of the getter must be the camel-cased property name
     * prefixed with \"get\", \"is\", or \"has\".
     *
     * If the getter does not exist, this method tries to find a public
     * property. The value of the property is then returned.
     *
     * If none of them are found, an exception is thrown.
     *
     * @param object|array                 \$objectOrArray The object or array to traverse
     * @param string|PropertyPathInterface \$propertyPath  The property path to read
     *
     * @return mixed The value at the end of the property path
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     * @throws Exception\\AccessException          If a property/index does not exist or is not public
     * @throws Exception\\UnexpectedTypeException  If a value within the path is neither object
     *                                            nor array
     */
    public function getValue(\$objectOrArray, \$propertyPath);

    /**
     * Returns whether a value can be written at a given property path.
     *
     * Whenever this method returns true, {@link setValue()} is guaranteed not
     * to throw an exception when called with the same arguments.
     *
     * @param object|array                 \$objectOrArray The object or array to check
     * @param string|PropertyPathInterface \$propertyPath  The property path to check
     *
     * @return bool Whether the value can be set
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     */
    public function isWritable(\$objectOrArray, \$propertyPath);

    /**
     * Returns whether a property path can be read from an object graph.
     *
     * Whenever this method returns true, {@link getValue()} is guaranteed not
     * to throw an exception when called with the same arguments.
     *
     * @param object|array                 \$objectOrArray The object or array to check
     * @param string|PropertyPathInterface \$propertyPath  The property path to check
     *
     * @return bool Whether the property path can be read
     *
     * @throws Exception\\InvalidArgumentException If the property path is invalid
     */
    public function isReadable(\$objectOrArray, \$propertyPath);
}
", "vendor/symfony/property-access/PropertyAccessorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/PropertyAccessorInterface.php");
    }
}
