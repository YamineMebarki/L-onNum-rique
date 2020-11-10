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

/* vendor/twig/twig/src/Node/Expression/ArrayExpression.php */
class __TwigTemplate_b0f8c3b443d55318adba9a1f1f645332f1ea757e82365ab23cb6260cd1df3082 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/ArrayExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/ArrayExpression.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

class ArrayExpression extends AbstractExpression
{
    private \$index;

    public function __construct(array \$elements, int \$lineno)
    {
        parent::__construct(\$elements, [], \$lineno);

        \$this->index = -1;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (\$pair['key'] instanceof ConstantExpression && ctype_digit((string) \$pair['key']->getAttribute('value')) && \$pair['key']->getAttribute('value') > \$this->index) {
                \$this->index = \$pair['key']->getAttribute('value');
            }
        }
    }

    public function getKeyValuePairs()
    {
        \$pairs = [];

        foreach (array_chunk(\$this->nodes, 2) as \$pair) {
            \$pairs[] = [
                'key' => \$pair[0],
                'value' => \$pair[1],
            ];
        }

        return \$pairs;
    }

    public function hasElement(AbstractExpression \$key)
    {
        foreach (\$this->getKeyValuePairs() as \$pair) {
            // we compare the string representation of the keys
            // to avoid comparing the line numbers which are not relevant here.
            if ((string) \$key === (string) \$pair['key']) {
                return true;
            }
        }

        return false;
    }

    public function addElement(AbstractExpression \$value, AbstractExpression \$key = null)
    {
        if (null === \$key) {
            \$key = new ConstantExpression(++\$this->index, \$value->getTemplateLine());
        }

        array_push(\$this->nodes, \$key, \$value);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->raw('[');
        \$first = true;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            \$compiler
                ->subcompile(\$pair['key'])
                ->raw(' => ')
                ->subcompile(\$pair['value'])
            ;
        }
        \$compiler->raw(']');
    }
}

class_alias('Twig\\Node\\Expression\\ArrayExpression', 'Twig_Node_Expression_Array');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/ArrayExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

class ArrayExpression extends AbstractExpression
{
    private \$index;

    public function __construct(array \$elements, int \$lineno)
    {
        parent::__construct(\$elements, [], \$lineno);

        \$this->index = -1;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (\$pair['key'] instanceof ConstantExpression && ctype_digit((string) \$pair['key']->getAttribute('value')) && \$pair['key']->getAttribute('value') > \$this->index) {
                \$this->index = \$pair['key']->getAttribute('value');
            }
        }
    }

    public function getKeyValuePairs()
    {
        \$pairs = [];

        foreach (array_chunk(\$this->nodes, 2) as \$pair) {
            \$pairs[] = [
                'key' => \$pair[0],
                'value' => \$pair[1],
            ];
        }

        return \$pairs;
    }

    public function hasElement(AbstractExpression \$key)
    {
        foreach (\$this->getKeyValuePairs() as \$pair) {
            // we compare the string representation of the keys
            // to avoid comparing the line numbers which are not relevant here.
            if ((string) \$key === (string) \$pair['key']) {
                return true;
            }
        }

        return false;
    }

    public function addElement(AbstractExpression \$value, AbstractExpression \$key = null)
    {
        if (null === \$key) {
            \$key = new ConstantExpression(++\$this->index, \$value->getTemplateLine());
        }

        array_push(\$this->nodes, \$key, \$value);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->raw('[');
        \$first = true;
        foreach (\$this->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            \$compiler
                ->subcompile(\$pair['key'])
                ->raw(' => ')
                ->subcompile(\$pair['value'])
            ;
        }
        \$compiler->raw(']');
    }
}

class_alias('Twig\\Node\\Expression\\ArrayExpression', 'Twig_Node_Expression_Array');
", "vendor/twig/twig/src/Node/Expression/ArrayExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/ArrayExpression.php");
    }
}
