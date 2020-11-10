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

/* vendor/symfony/config/Definition/Builder/ExprBuilder.php */
class __TwigTemplate_6f7170f80f854724b5b573bcb0826eb047a620a278cd138747a397ed22559326 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/ExprBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/ExprBuilder.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\UnsetKeyException;

/**
 * This class builds an if expression.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ExprBuilder
{
    protected \$node;
    public \$ifPart;
    public \$thenPart;

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Marks the expression as being always used.
     *
     * @return \$this
     */
    public function always(\\Closure \$then = null)
    {
        \$this->ifPart = function (\$v) { return true; };

        if (null !== \$then) {
            \$this->thenPart = \$then;
        }

        return \$this;
    }

    /**
     * Sets a closure to use as tests.
     *
     * The default one tests if the value is true.
     *
     * @return \$this
     */
    public function ifTrue(\\Closure \$closure = null)
    {
        if (null === \$closure) {
            \$closure = function (\$v) { return true === \$v; };
        }

        \$this->ifPart = \$closure;

        return \$this;
    }

    /**
     * Tests if the value is a string.
     *
     * @return \$this
     */
    public function ifString()
    {
        \$this->ifPart = function (\$v) { return \\is_string(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is null.
     *
     * @return \$this
     */
    public function ifNull()
    {
        \$this->ifPart = function (\$v) { return null === \$v; };

        return \$this;
    }

    /**
     * Tests if the value is empty.
     *
     * @return ExprBuilder
     */
    public function ifEmpty()
    {
        \$this->ifPart = function (\$v) { return empty(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is an array.
     *
     * @return \$this
     */
    public function ifArray()
    {
        \$this->ifPart = function (\$v) { return \\is_array(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is in an array.
     *
     * @return \$this
     */
    public function ifInArray(array \$array)
    {
        \$this->ifPart = function (\$v) use (\$array) { return \\in_array(\$v, \$array, true); };

        return \$this;
    }

    /**
     * Tests if the value is not in an array.
     *
     * @return \$this
     */
    public function ifNotInArray(array \$array)
    {
        \$this->ifPart = function (\$v) use (\$array) { return !\\in_array(\$v, \$array, true); };

        return \$this;
    }

    /**
     * Transforms variables of any type into an array.
     *
     * @return \$this
     */
    public function castToArray()
    {
        \$this->ifPart = function (\$v) { return !\\is_array(\$v); };
        \$this->thenPart = function (\$v) { return [\$v]; };

        return \$this;
    }

    /**
     * Sets the closure to run if the test pass.
     *
     * @return \$this
     */
    public function then(\\Closure \$closure)
    {
        \$this->thenPart = \$closure;

        return \$this;
    }

    /**
     * Sets a closure returning an empty array.
     *
     * @return \$this
     */
    public function thenEmptyArray()
    {
        \$this->thenPart = function (\$v) { return []; };

        return \$this;
    }

    /**
     * Sets a closure marking the value as invalid at processing time.
     *
     * if you want to add the value of the node in your message just use a %s placeholder.
     *
     * @param string \$message
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException
     */
    public function thenInvalid(\$message)
    {
        \$this->thenPart = function (\$v) use (\$message) { throw new \\InvalidArgumentException(sprintf(\$message, json_encode(\$v))); };

        return \$this;
    }

    /**
     * Sets a closure unsetting this key of the array at processing time.
     *
     * @return \$this
     *
     * @throws UnsetKeyException
     */
    public function thenUnset()
    {
        \$this->thenPart = function (\$v) { throw new UnsetKeyException('Unsetting key'); };

        return \$this;
    }

    /**
     * Returns the related node.
     *
     * @return NodeDefinition|ArrayNodeDefinition|VariableNodeDefinition
     *
     * @throws \\RuntimeException
     */
    public function end()
    {
        if (null === \$this->ifPart) {
            throw new \\RuntimeException('You must specify an if part.');
        }
        if (null === \$this->thenPart) {
            throw new \\RuntimeException('You must specify a then part.');
        }

        return \$this->node;
    }

    /**
     * Builds the expressions.
     *
     * @param ExprBuilder[] \$expressions An array of ExprBuilder instances to build
     *
     * @return array
     */
    public static function buildExpressions(array \$expressions)
    {
        foreach (\$expressions as \$k => \$expr) {
            if (\$expr instanceof self) {
                \$if = \$expr->ifPart;
                \$then = \$expr->thenPart;
                \$expressions[\$k] = function (\$v) use (\$if, \$then) {
                    return \$if(\$v) ? \$then(\$v) : \$v;
                };
            }
        }

        return \$expressions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/ExprBuilder.php";
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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\UnsetKeyException;

/**
 * This class builds an if expression.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ExprBuilder
{
    protected \$node;
    public \$ifPart;
    public \$thenPart;

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Marks the expression as being always used.
     *
     * @return \$this
     */
    public function always(\\Closure \$then = null)
    {
        \$this->ifPart = function (\$v) { return true; };

        if (null !== \$then) {
            \$this->thenPart = \$then;
        }

        return \$this;
    }

    /**
     * Sets a closure to use as tests.
     *
     * The default one tests if the value is true.
     *
     * @return \$this
     */
    public function ifTrue(\\Closure \$closure = null)
    {
        if (null === \$closure) {
            \$closure = function (\$v) { return true === \$v; };
        }

        \$this->ifPart = \$closure;

        return \$this;
    }

    /**
     * Tests if the value is a string.
     *
     * @return \$this
     */
    public function ifString()
    {
        \$this->ifPart = function (\$v) { return \\is_string(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is null.
     *
     * @return \$this
     */
    public function ifNull()
    {
        \$this->ifPart = function (\$v) { return null === \$v; };

        return \$this;
    }

    /**
     * Tests if the value is empty.
     *
     * @return ExprBuilder
     */
    public function ifEmpty()
    {
        \$this->ifPart = function (\$v) { return empty(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is an array.
     *
     * @return \$this
     */
    public function ifArray()
    {
        \$this->ifPart = function (\$v) { return \\is_array(\$v); };

        return \$this;
    }

    /**
     * Tests if the value is in an array.
     *
     * @return \$this
     */
    public function ifInArray(array \$array)
    {
        \$this->ifPart = function (\$v) use (\$array) { return \\in_array(\$v, \$array, true); };

        return \$this;
    }

    /**
     * Tests if the value is not in an array.
     *
     * @return \$this
     */
    public function ifNotInArray(array \$array)
    {
        \$this->ifPart = function (\$v) use (\$array) { return !\\in_array(\$v, \$array, true); };

        return \$this;
    }

    /**
     * Transforms variables of any type into an array.
     *
     * @return \$this
     */
    public function castToArray()
    {
        \$this->ifPart = function (\$v) { return !\\is_array(\$v); };
        \$this->thenPart = function (\$v) { return [\$v]; };

        return \$this;
    }

    /**
     * Sets the closure to run if the test pass.
     *
     * @return \$this
     */
    public function then(\\Closure \$closure)
    {
        \$this->thenPart = \$closure;

        return \$this;
    }

    /**
     * Sets a closure returning an empty array.
     *
     * @return \$this
     */
    public function thenEmptyArray()
    {
        \$this->thenPart = function (\$v) { return []; };

        return \$this;
    }

    /**
     * Sets a closure marking the value as invalid at processing time.
     *
     * if you want to add the value of the node in your message just use a %s placeholder.
     *
     * @param string \$message
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException
     */
    public function thenInvalid(\$message)
    {
        \$this->thenPart = function (\$v) use (\$message) { throw new \\InvalidArgumentException(sprintf(\$message, json_encode(\$v))); };

        return \$this;
    }

    /**
     * Sets a closure unsetting this key of the array at processing time.
     *
     * @return \$this
     *
     * @throws UnsetKeyException
     */
    public function thenUnset()
    {
        \$this->thenPart = function (\$v) { throw new UnsetKeyException('Unsetting key'); };

        return \$this;
    }

    /**
     * Returns the related node.
     *
     * @return NodeDefinition|ArrayNodeDefinition|VariableNodeDefinition
     *
     * @throws \\RuntimeException
     */
    public function end()
    {
        if (null === \$this->ifPart) {
            throw new \\RuntimeException('You must specify an if part.');
        }
        if (null === \$this->thenPart) {
            throw new \\RuntimeException('You must specify a then part.');
        }

        return \$this->node;
    }

    /**
     * Builds the expressions.
     *
     * @param ExprBuilder[] \$expressions An array of ExprBuilder instances to build
     *
     * @return array
     */
    public static function buildExpressions(array \$expressions)
    {
        foreach (\$expressions as \$k => \$expr) {
            if (\$expr instanceof self) {
                \$if = \$expr->ifPart;
                \$then = \$expr->thenPart;
                \$expressions[\$k] = function (\$v) use (\$if, \$then) {
                    return \$if(\$v) ? \$then(\$v) : \$v;
                };
            }
        }

        return \$expressions;
    }
}
", "vendor/symfony/config/Definition/Builder/ExprBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/ExprBuilder.php");
    }
}
