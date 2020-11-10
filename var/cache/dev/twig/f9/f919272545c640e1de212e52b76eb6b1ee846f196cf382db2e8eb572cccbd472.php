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

/* vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php */
class __TwigTemplate_dfe85b52311347577b9ddfa7d2001bb76509937aefa8ff213bc409fdf8dd5df6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php"));

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

use phpDocumentor\\Reflection\\Type;

/**
 * Represents a list of values. This is an abstract class for Array_ and Collection.
 */
abstract class AbstractList implements Type
{
    /** @var Type */
    protected \$valueType;

    /** @var Type|null */
    protected \$keyType;

    /** @var Type */
    protected \$defaultKeyType;

    /**
     * Initializes this representation of an array with the given Type.
     */
    public function __construct(?Type \$valueType = null, ?Type \$keyType = null)
    {
        if (\$valueType === null) {
            \$valueType = new Mixed_();
        }

        \$this->valueType      = \$valueType;
        \$this->defaultKeyType = new Compound([new String_(), new Integer()]);
        \$this->keyType        = \$keyType;
    }

    /**
     * Returns the type for the keys of this array.
     */
    public function getKeyType() : Type
    {
        if (\$this->keyType === null) {
            return \$this->defaultKeyType;
        }

        return \$this->keyType;
    }

    /**
     * Returns the value for the keys of this array.
     */
    public function getValueType() : Type
    {
        return \$this->valueType;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        if (\$this->keyType) {
            return 'array<' . \$this->keyType . ',' . \$this->valueType . '>';
        }

        if (\$this->valueType instanceof Mixed_) {
            return 'array';
        }

        if (\$this->valueType instanceof Compound) {
            return '(' . \$this->valueType . ')[]';
        }

        return \$this->valueType . '[]';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php";
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

use phpDocumentor\\Reflection\\Type;

/**
 * Represents a list of values. This is an abstract class for Array_ and Collection.
 */
abstract class AbstractList implements Type
{
    /** @var Type */
    protected \$valueType;

    /** @var Type|null */
    protected \$keyType;

    /** @var Type */
    protected \$defaultKeyType;

    /**
     * Initializes this representation of an array with the given Type.
     */
    public function __construct(?Type \$valueType = null, ?Type \$keyType = null)
    {
        if (\$valueType === null) {
            \$valueType = new Mixed_();
        }

        \$this->valueType      = \$valueType;
        \$this->defaultKeyType = new Compound([new String_(), new Integer()]);
        \$this->keyType        = \$keyType;
    }

    /**
     * Returns the type for the keys of this array.
     */
    public function getKeyType() : Type
    {
        if (\$this->keyType === null) {
            return \$this->defaultKeyType;
        }

        return \$this->keyType;
    }

    /**
     * Returns the value for the keys of this array.
     */
    public function getValueType() : Type
    {
        return \$this->valueType;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        if (\$this->keyType) {
            return 'array<' . \$this->keyType . ',' . \$this->valueType . '>';
        }

        if (\$this->valueType instanceof Mixed_) {
            return 'array';
        }

        if (\$this->valueType instanceof Compound) {
            return '(' . \$this->valueType . ')[]';
        }

        return \$this->valueType . '[]';
    }
}
", "vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/src/Types/AbstractList.php");
    }
}
