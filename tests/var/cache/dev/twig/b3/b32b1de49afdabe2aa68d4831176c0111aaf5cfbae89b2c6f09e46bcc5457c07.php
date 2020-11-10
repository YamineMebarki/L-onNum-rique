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

/* vendor/symfony/expression-language/Node/ArrayNode.php */
class __TwigTemplate_9d7931e7dc1467b887747799365e1eff56a79a4b1cdc0c35f3b0cd9dca59bfaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/ArrayNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/ArrayNode.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class ArrayNode extends Node
{
    protected \$index;

    public function __construct()
    {
        \$this->index = -1;
    }

    public function addElement(Node \$value, Node \$key = null)
    {
        if (null === \$key) {
            \$key = new ConstantNode(++\$this->index);
        }

        array_push(\$this->nodes, \$key, \$value);
    }

    /**
     * Compiles the node to PHP.
     */
    public function compile(Compiler \$compiler)
    {
        \$compiler->raw('[');
        \$this->compileArguments(\$compiler);
        \$compiler->raw(']');
    }

    public function evaluate(\$functions, \$values)
    {
        \$result = [];
        foreach (\$this->getKeyValuePairs() as \$pair) {
            \$result[\$pair['key']->evaluate(\$functions, \$values)] = \$pair['value']->evaluate(\$functions, \$values);
        }

        return \$result;
    }

    public function toArray()
    {
        \$value = [];
        foreach (\$this->getKeyValuePairs() as \$pair) {
            \$value[\$pair['key']->attributes['value']] = \$pair['value'];
        }

        \$array = [];

        if (\$this->isHash(\$value)) {
            foreach (\$value as \$k => \$v) {
                \$array[] = ', ';
                \$array[] = new ConstantNode(\$k);
                \$array[] = ': ';
                \$array[] = \$v;
            }
            \$array[0] = '{';
            \$array[] = '}';
        } else {
            foreach (\$value as \$v) {
                \$array[] = ', ';
                \$array[] = \$v;
            }
            \$array[0] = '[';
            \$array[] = ']';
        }

        return \$array;
    }

    protected function getKeyValuePairs()
    {
        \$pairs = [];
        foreach (array_chunk(\$this->nodes, 2) as \$pair) {
            \$pairs[] = ['key' => \$pair[0], 'value' => \$pair[1]];
        }

        return \$pairs;
    }

    protected function compileArguments(Compiler \$compiler, \$withKeys = true)
    {
        \$first = true;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            if (\$withKeys) {
                \$compiler
                    ->compile(\$pair['key'])
                    ->raw(' => ')
                ;
            }

            \$compiler->compile(\$pair['value']);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/ArrayNode.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class ArrayNode extends Node
{
    protected \$index;

    public function __construct()
    {
        \$this->index = -1;
    }

    public function addElement(Node \$value, Node \$key = null)
    {
        if (null === \$key) {
            \$key = new ConstantNode(++\$this->index);
        }

        array_push(\$this->nodes, \$key, \$value);
    }

    /**
     * Compiles the node to PHP.
     */
    public function compile(Compiler \$compiler)
    {
        \$compiler->raw('[');
        \$this->compileArguments(\$compiler);
        \$compiler->raw(']');
    }

    public function evaluate(\$functions, \$values)
    {
        \$result = [];
        foreach (\$this->getKeyValuePairs() as \$pair) {
            \$result[\$pair['key']->evaluate(\$functions, \$values)] = \$pair['value']->evaluate(\$functions, \$values);
        }

        return \$result;
    }

    public function toArray()
    {
        \$value = [];
        foreach (\$this->getKeyValuePairs() as \$pair) {
            \$value[\$pair['key']->attributes['value']] = \$pair['value'];
        }

        \$array = [];

        if (\$this->isHash(\$value)) {
            foreach (\$value as \$k => \$v) {
                \$array[] = ', ';
                \$array[] = new ConstantNode(\$k);
                \$array[] = ': ';
                \$array[] = \$v;
            }
            \$array[0] = '{';
            \$array[] = '}';
        } else {
            foreach (\$value as \$v) {
                \$array[] = ', ';
                \$array[] = \$v;
            }
            \$array[0] = '[';
            \$array[] = ']';
        }

        return \$array;
    }

    protected function getKeyValuePairs()
    {
        \$pairs = [];
        foreach (array_chunk(\$this->nodes, 2) as \$pair) {
            \$pairs[] = ['key' => \$pair[0], 'value' => \$pair[1]];
        }

        return \$pairs;
    }

    protected function compileArguments(Compiler \$compiler, \$withKeys = true)
    {
        \$first = true;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            if (\$withKeys) {
                \$compiler
                    ->compile(\$pair['key'])
                    ->raw(' => ')
                ;
            }

            \$compiler->compile(\$pair['value']);
        }
    }
}
", "vendor/symfony/expression-language/Node/ArrayNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/ArrayNode.php");
    }
}
