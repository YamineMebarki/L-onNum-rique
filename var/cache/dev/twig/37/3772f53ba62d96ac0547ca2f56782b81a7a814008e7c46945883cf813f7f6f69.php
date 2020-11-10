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

/* vendor/symfony/property-access/PropertyPathInterface.php */
class __TwigTemplate_a08241841a563bc86012eb1cc0275a70bebaaa0801e83543032792e3c20c1b36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyPathInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyPathInterface.php"));

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
 * A sequence of property names or array indices.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface PropertyPathInterface extends \\Traversable
{
    /**
     * Returns the string representation of the property path.
     *
     * @return string The path as string
     */
    public function __toString();

    /**
     * Returns the length of the property path, i.e. the number of elements.
     *
     * @return int The path length
     */
    public function getLength();

    /**
     * Returns the parent property path.
     *
     * The parent property path is the one that contains the same items as
     * this one except for the last one.
     *
     * If this property path only contains one item, null is returned.
     *
     * @return self|null The parent path or null
     */
    public function getParent();

    /**
     * Returns the elements of the property path as array.
     *
     * @return array An array of property/index names
     */
    public function getElements();

    /**
     * Returns the element at the given index in the property path.
     *
     * @param int \$index The index key
     *
     * @return string A property or index name
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function getElement(\$index);

    /**
     * Returns whether the element at the given index is a property.
     *
     * @param int \$index The index in the property path
     *
     * @return bool Whether the element at this index is a property
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function isProperty(\$index);

    /**
     * Returns whether the element at the given index is an array index.
     *
     * @param int \$index The index in the property path
     *
     * @return bool Whether the element at this index is an array index
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function isIndex(\$index);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/PropertyPathInterface.php";
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
 * A sequence of property names or array indices.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface PropertyPathInterface extends \\Traversable
{
    /**
     * Returns the string representation of the property path.
     *
     * @return string The path as string
     */
    public function __toString();

    /**
     * Returns the length of the property path, i.e. the number of elements.
     *
     * @return int The path length
     */
    public function getLength();

    /**
     * Returns the parent property path.
     *
     * The parent property path is the one that contains the same items as
     * this one except for the last one.
     *
     * If this property path only contains one item, null is returned.
     *
     * @return self|null The parent path or null
     */
    public function getParent();

    /**
     * Returns the elements of the property path as array.
     *
     * @return array An array of property/index names
     */
    public function getElements();

    /**
     * Returns the element at the given index in the property path.
     *
     * @param int \$index The index key
     *
     * @return string A property or index name
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function getElement(\$index);

    /**
     * Returns whether the element at the given index is a property.
     *
     * @param int \$index The index in the property path
     *
     * @return bool Whether the element at this index is a property
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function isProperty(\$index);

    /**
     * Returns whether the element at the given index is an array index.
     *
     * @param int \$index The index in the property path
     *
     * @return bool Whether the element at this index is an array index
     *
     * @throws Exception\\OutOfBoundsException If the offset is invalid
     */
    public function isIndex(\$index);
}
", "vendor/symfony/property-access/PropertyPathInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/PropertyPathInterface.php");
    }
}
