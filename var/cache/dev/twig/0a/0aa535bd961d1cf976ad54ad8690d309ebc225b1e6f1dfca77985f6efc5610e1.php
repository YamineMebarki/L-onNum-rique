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

/* vendor/phpdocumentor/type-resolver/src/Types/Collection.php */
class __TwigTemplate_c8b032beb56e7bb68e836725e207ac05a8fe5a7d13feafadace699f4b5f9b4b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Collection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Collection.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\Types;

use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\Type;

/**
 * Represents a collection type as described in the PSR-5, the PHPDoc Standard.
 *
 * A collection can be represented in two forms:
 *
 * 1. `ACollectionObject<aValueType>`
 * 2. `ACollectionObject<aValueType,aKeyType>`
 *
 * - ACollectionObject can be 'array' or an object that can act as an array
 * - aValueType and aKeyType can be any type expression
 */
final class Collection extends AbstractList
{
    /** @var Fqsen|null */
    private \$fqsen;

    /**
     * Initializes this representation of an array with the given Type or Fqsen.
     */
    public function __construct(?Fqsen \$fqsen, Type \$valueType, ?Type \$keyType = null)
    {
        parent::__construct(\$valueType, \$keyType);

        \$this->fqsen = \$fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return \$this->fqsen;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        \$objectType = (string) (\$this->fqsen ?? 'object');

        if (\$this->keyType === null) {
            return \$objectType . '<' . \$this->valueType . '>';
        }

        return \$objectType . '<' . \$this->keyType . ',' . \$this->valueType . '>';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/src/Types/Collection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\Types;

use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\Type;

/**
 * Represents a collection type as described in the PSR-5, the PHPDoc Standard.
 *
 * A collection can be represented in two forms:
 *
 * 1. `ACollectionObject<aValueType>`
 * 2. `ACollectionObject<aValueType,aKeyType>`
 *
 * - ACollectionObject can be 'array' or an object that can act as an array
 * - aValueType and aKeyType can be any type expression
 */
final class Collection extends AbstractList
{
    /** @var Fqsen|null */
    private \$fqsen;

    /**
     * Initializes this representation of an array with the given Type or Fqsen.
     */
    public function __construct(?Fqsen \$fqsen, Type \$valueType, ?Type \$keyType = null)
    {
        parent::__construct(\$valueType, \$keyType);

        \$this->fqsen = \$fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return \$this->fqsen;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        \$objectType = (string) (\$this->fqsen ?? 'object');

        if (\$this->keyType === null) {
            return \$objectType . '<' . \$this->valueType . '>';
        }

        return \$objectType . '<' . \$this->keyType . ',' . \$this->valueType . '>';
    }
}
", "vendor/phpdocumentor/type-resolver/src/Types/Collection.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/src/Types/Collection.php");
    }
}
