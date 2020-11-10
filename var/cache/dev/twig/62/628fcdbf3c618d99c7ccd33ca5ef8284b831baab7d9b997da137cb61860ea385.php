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

/* vendor/phpdocumentor/type-resolver/src/Types/Object_.php */
class __TwigTemplate_f2c567c3c17e5c806a5956690fd36213dd2e704f78e660b57267681746ee20ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Object_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/Types/Object_.php"));

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

use InvalidArgumentException;
use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\Type;
use function strpos;

/**
 * Value Object representing an object.
 *
 * An object can be either typed or untyped. When an object is typed it means that it has an identifier, the FQSEN,
 * pointing to an element in PHP. Object types that are untyped do not refer to a specific class but represent objects
 * in general.
 */
final class Object_ implements Type
{
    /** @var Fqsen|null */
    private \$fqsen;

    /**
     * Initializes this object with an optional FQSEN, if not provided this object is considered 'untyped'.
     *
     * @throws InvalidArgumentException When provided \$fqsen is not a valid type.
     */
    public function __construct(?Fqsen \$fqsen = null)
    {
        if (strpos((string) \$fqsen, '::') !== false || strpos((string) \$fqsen, '()') !== false) {
            throw new InvalidArgumentException(
                'Object types can only refer to a class, interface or trait but a method, function, constant or '
                . 'property was received: ' . (string) \$fqsen
            );
        }

        \$this->fqsen = \$fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return \$this->fqsen;
    }

    public function __toString() : string
    {
        if (\$this->fqsen) {
            return (string) \$this->fqsen;
        }

        return 'object';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/src/Types/Object_.php";
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

use InvalidArgumentException;
use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\Type;
use function strpos;

/**
 * Value Object representing an object.
 *
 * An object can be either typed or untyped. When an object is typed it means that it has an identifier, the FQSEN,
 * pointing to an element in PHP. Object types that are untyped do not refer to a specific class but represent objects
 * in general.
 */
final class Object_ implements Type
{
    /** @var Fqsen|null */
    private \$fqsen;

    /**
     * Initializes this object with an optional FQSEN, if not provided this object is considered 'untyped'.
     *
     * @throws InvalidArgumentException When provided \$fqsen is not a valid type.
     */
    public function __construct(?Fqsen \$fqsen = null)
    {
        if (strpos((string) \$fqsen, '::') !== false || strpos((string) \$fqsen, '()') !== false) {
            throw new InvalidArgumentException(
                'Object types can only refer to a class, interface or trait but a method, function, constant or '
                . 'property was received: ' . (string) \$fqsen
            );
        }

        \$this->fqsen = \$fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return \$this->fqsen;
    }

    public function __toString() : string
    {
        if (\$this->fqsen) {
            return (string) \$this->fqsen;
        }

        return 'object';
    }
}
", "vendor/phpdocumentor/type-resolver/src/Types/Object_.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/src/Types/Object_.php");
    }
}
