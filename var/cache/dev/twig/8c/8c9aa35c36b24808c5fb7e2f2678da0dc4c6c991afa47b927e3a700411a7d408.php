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

/* vendor/twig/twig/src/TokenParser/SetTokenParser.php */
class __TwigTemplate_b1234e5d3868067d39ecf46b2734e633fd1718d84815dc6c64b892e17902379f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/SetTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/SetTokenParser.php"));

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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\SetNode;
use Twig\\Token;

/**
 * Defines a variable.
 *
 *  ";
        // line 21
        $context["foo"] = "foo";
        // line 22
        echo " *  ";
        $context["foo"] = [0 => 1, 1 => 2];
        // line 23
        echo " *  ";
        $context["foo"] = ["foo" => "bar"];
        // line 24
        echo " *  ";
        $context["foo"] = ("foo" . "bar");
        // line 25
        echo " *  ";
        list($context["foo"], $context["bar"]) =         ["foo", "bar"];
        // line 26
        echo " *  ";
        $context["foo"] = ('' === $tmp = "Some content") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo " */
final class SetTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$names = \$this->parser->getExpressionParser()->parseAssignmentExpression();

        \$capture = false;
        if (\$stream->nextIf(/* Token::OPERATOR_TYPE */ 8, '=')) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            if (\\count(\$names) !== \\count(\$values)) {
                throw new SyntaxError('When using set, you must have the same number of variables and assignments.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        } else {
            \$capture = true;

            if (\\count(\$names) > 1) {
                throw new SyntaxError('When using set with a block, you cannot have a multi-target.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            \$values = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        }

        return new SetNode(\$capture, \$names, \$values, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endset');
    }

    public function getTag()
    {
        return 'set';
    }
}

class_alias('Twig\\TokenParser\\SetTokenParser', 'Twig_TokenParser_Set');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/SetTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  79 => 26,  76 => 25,  73 => 24,  70 => 23,  67 => 22,  65 => 21,  43 => 1,);
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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\SetNode;
use Twig\\Token;

/**
 * Defines a variable.
 *
 *  {% set foo = 'foo' %}
 *  {% set foo = [1, 2] %}
 *  {% set foo = {'foo': 'bar'} %}
 *  {% set foo = 'foo' ~ 'bar' %}
 *  {% set foo, bar = 'foo', 'bar' %}
 *  {% set foo %}Some content{% endset %}
 */
final class SetTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$names = \$this->parser->getExpressionParser()->parseAssignmentExpression();

        \$capture = false;
        if (\$stream->nextIf(/* Token::OPERATOR_TYPE */ 8, '=')) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            if (\\count(\$names) !== \\count(\$values)) {
                throw new SyntaxError('When using set, you must have the same number of variables and assignments.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        } else {
            \$capture = true;

            if (\\count(\$names) > 1) {
                throw new SyntaxError('When using set with a block, you cannot have a multi-target.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            \$values = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        }

        return new SetNode(\$capture, \$names, \$values, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endset');
    }

    public function getTag()
    {
        return 'set';
    }
}

class_alias('Twig\\TokenParser\\SetTokenParser', 'Twig_TokenParser_Set');
", "vendor/twig/twig/src/TokenParser/SetTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/SetTokenParser.php");
    }
}
