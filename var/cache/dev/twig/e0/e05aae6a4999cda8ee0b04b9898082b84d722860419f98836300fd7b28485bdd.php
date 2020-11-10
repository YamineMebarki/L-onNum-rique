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

/* vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php */
class __TwigTemplate_9892b14241566d00a5f8aa2d30955f72afdf09890aa02bc34f177d4a603823f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php"));

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
use Twig\\Node\\Expression\\Binary\\AndBinary;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Expression\\Test\\NullTest;
use Twig\\Node\\Expression\\Unary\\NotUnary;
use Twig\\Node\\Node;

class NullCoalesceExpression extends ConditionalExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        \$test = new DefinedTest(clone \$left, 'defined', new Node(), \$left->getTemplateLine());
        // for \"block()\", we don't need the null test as the return value is always a string
        if (!\$left instanceof BlockReferenceExpression) {
            \$test = new AndBinary(
                \$test,
                new NotUnary(new NullTest(\$left, 'null', new Node(), \$left->getTemplateLine()), \$left->getTemplateLine()),
                \$left->getTemplateLine()
            );
        }

        parent::__construct(\$test, \$left, \$right, \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log(\"foo\") ?? \"...\" works,
         * but log(\$a[\"foo\"]) ?? \"...\" does not if \$a[\"foo\"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
        if (\$this->getNode('expr2') instanceof NameExpression) {
            \$this->getNode('expr2')->setAttribute('always_defined', true);
            \$compiler
                ->raw('((')
                ->subcompile(\$this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile(\$this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile(\$compiler);
        }
    }
}

class_alias('Twig\\Node\\Expression\\NullCoalesceExpression', 'Twig_Node_Expression_NullCoalesce');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php";
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
use Twig\\Node\\Expression\\Binary\\AndBinary;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Expression\\Test\\NullTest;
use Twig\\Node\\Expression\\Unary\\NotUnary;
use Twig\\Node\\Node;

class NullCoalesceExpression extends ConditionalExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        \$test = new DefinedTest(clone \$left, 'defined', new Node(), \$left->getTemplateLine());
        // for \"block()\", we don't need the null test as the return value is always a string
        if (!\$left instanceof BlockReferenceExpression) {
            \$test = new AndBinary(
                \$test,
                new NotUnary(new NullTest(\$left, 'null', new Node(), \$left->getTemplateLine()), \$left->getTemplateLine()),
                \$left->getTemplateLine()
            );
        }

        parent::__construct(\$test, \$left, \$right, \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log(\"foo\") ?? \"...\" works,
         * but log(\$a[\"foo\"]) ?? \"...\" does not if \$a[\"foo\"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
        if (\$this->getNode('expr2') instanceof NameExpression) {
            \$this->getNode('expr2')->setAttribute('always_defined', true);
            \$compiler
                ->raw('((')
                ->subcompile(\$this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile(\$this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile(\$compiler);
        }
    }
}

class_alias('Twig\\Node\\Expression\\NullCoalesceExpression', 'Twig_Node_Expression_NullCoalesce');
", "vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php");
    }
}
