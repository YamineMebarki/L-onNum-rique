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

/* vendor/phpdocumentor/type-resolver/src/Types/Compound.php */
class __TwigTemplate_73d713a8ac79fdda8a4cbe9789c3c8e1ac3b2cc7926c95cfce6398482ba0dde5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Compound.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Compound.php"));

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

use ArrayIterator;
use InvalidArgumentException;
use IteratorAggregate;
use phpDocumentor\\Reflection\\Type;
use function implode;

/**
 * Value Object representing a Compound Type.
 *
 * A Compound Type is not so much a special keyword or object reference but is a series of Types that are separated
 * using an OR operator (`|`). This combination of types signifies that whatever is associated with this compound type
 * may contain a value with any of the given types.
 */
final class Compound implements Type, IteratorAggregate
{
    /** @var Type[] */
    private \$types;

    /**
     * Initializes a compound type (i.e. `string|int`) and tests if the provided types all implement the Type interface.
     *
     * @param Type[] \$types
     *
     * @throws InvalidArgumentException When types are not all instance of Type.
     */
    public function __construct(array \$types)
    {
        foreach (\$types as \$type) {
            /** @psalm-suppress RedundantConditionGivenDocblockType */
            if (!\$type instanceof Type) {
                throw new InvalidArgumentException('A compound type can only have other types as elements');
            }
        }

        \$this->types = \$types;
    }

    /**
     * Returns the type at the given index.
     */
    public function get(int \$index) : ?Type
    {
        if (!\$this->has(\$index)) {
            return null;
        }

        return \$this->types[\$index];
    }

    /**
     * Tests if this compound type has a type with the given index.
     */
    public function has(int \$index) : bool
    {
        return isset(\$this->types[\$index]);
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return implode('|', \$this->types);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new ArrayIterator(\$this->types);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/src/Types/Compound.php";
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

use ArrayIterator;
use InvalidArgumentException;
use IteratorAggregate;
use phpDocumentor\\Reflection\\Type;
use function implode;

/**
 * Value Object representing a Compound Type.
 *
 * A Compound Type is not so much a special keyword or object reference but is a series of Types that are separated
 * using an OR operator (`|`). This combination of types signifies that whatever is associated with this compound type
 * may contain a value with any of the given types.
 */
final class Compound implements Type, IteratorAggregate
{
    /** @var Type[] */
    private \$types;

    /**
     * Initializes a compound type (i.e. `string|int`) and tests if the provided types all implement the Type interface.
     *
     * @param Type[] \$types
     *
     * @throws InvalidArgumentException When types are not all instance of Type.
     */
    public function __construct(array \$types)
    {
        foreach (\$types as \$type) {
            /** @psalm-suppress RedundantConditionGivenDocblockType */
            if (!\$type instanceof Type) {
                throw new InvalidArgumentException('A compound type can only have other types as elements');
            }
        }

        \$this->types = \$types;
    }

    /**
     * Returns the type at the given index.
     */
    public function get(int \$index) : ?Type
    {
        if (!\$this->has(\$index)) {
            return null;
        }

        return \$this->types[\$index];
    }

    /**
     * Tests if this compound type has a type with the given index.
     */
    public function has(int \$index) : bool
    {
        return isset(\$this->types[\$index]);
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return implode('|', \$this->types);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new ArrayIterator(\$this->types);
    }
}
", "vendor/phpdocumentor/type-resolver/src/Types/Compound.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/src/Types/Compound.php");
    }
}
