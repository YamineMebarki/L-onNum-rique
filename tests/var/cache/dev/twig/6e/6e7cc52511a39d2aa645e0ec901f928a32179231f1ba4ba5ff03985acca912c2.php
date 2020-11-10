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

/* vendor/twig/twig/src/TokenParser/ForTokenParser.php */
class __TwigTemplate_a7decd6282a2c147064066d0365bcdb500eb8e9d37c3f87bf1f46e7c6255fc1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/ForTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/ForTokenParser.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenStream;

/**
 * Loops over each item of a sequence.
 *
 *   <ul>
 *    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo " *      <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 30));
            echo "</li>
 *    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " *   </ul>
 */
final class ForTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$targets = \$this->parser->getExpressionParser()->parseAssignmentExpression();
        \$stream->expect(/* Token::OPERATOR_TYPE */ 8, 'in');
        \$seq = \$this->parser->getExpressionParser()->parseExpression();

        \$ifexpr = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'if')) {
            @trigger_error(sprintf('Using an \"if\" condition on \"for\" tag in \"%s\" at line %d is deprecated since Twig 2.10.0, use a \"filter\" filter or an \"if\" condition inside the \"for\" body instead (if your condition depends on a variable updated inside the loop).', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

            \$ifexpr = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideForFork']);
        if ('else' == \$stream->next()->getValue()) {
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
            \$else = \$this->parser->subparse([\$this, 'decideForEnd'], true);
        } else {
            \$else = null;
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        if (\\count(\$targets) > 1) {
            \$keyTarget = \$targets->getNode(0);
            \$keyTarget = new AssignNameExpression(\$keyTarget->getAttribute('name'), \$keyTarget->getTemplateLine());
            \$valueTarget = \$targets->getNode(1);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        } else {
            \$keyTarget = new AssignNameExpression('_key', \$lineno);
            \$valueTarget = \$targets->getNode(0);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        }

        if (\$ifexpr) {
            \$this->checkLoopUsageCondition(\$stream, \$ifexpr);
            \$this->checkLoopUsageBody(\$stream, \$body);
        }

        return new ForNode(\$keyTarget, \$valueTarget, \$seq, \$ifexpr, \$body, \$else, \$lineno, \$this->getTag());
    }

    public function decideForFork(Token \$token)
    {
        return \$token->test(['else', 'endfor']);
    }

    public function decideForEnd(Token \$token)
    {
        return \$token->test('endfor');
    }

    // the loop variable cannot be used in the condition
    private function checkLoopUsageCondition(TokenStream \$stream, Node \$node)
    {
        if (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression && 'loop' == \$node->getNode('node')->getAttribute('name')) {
            throw new SyntaxError('The \"loop\" variable cannot be used in a looping condition.', \$node->getTemplateLine(), \$stream->getSourceContext());
        }

        foreach (\$node as \$n) {
            if (!\$n) {
                continue;
            }

            \$this->checkLoopUsageCondition(\$stream, \$n);
        }
    }

    // check usage of non-defined loop-items
    // it does not catch all problems (for instance when a for is included into another or when the variable is used in an include)
    private function checkLoopUsageBody(TokenStream \$stream, Node \$node)
    {
        if (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression && 'loop' == \$node->getNode('node')->getAttribute('name')) {
            \$attribute = \$node->getNode('attribute');
            if (\$attribute instanceof ConstantExpression && \\in_array(\$attribute->getAttribute('value'), ['length', 'revindex0', 'revindex', 'last'])) {
                throw new SyntaxError(sprintf('The \"loop.%s\" variable is not defined when looping with a condition.', \$attribute->getAttribute('value')), \$node->getTemplateLine(), \$stream->getSourceContext());
            }
        }

        // should check for parent.loop.XXX usage
        if (\$node instanceof ForNode) {
            return;
        }

        foreach (\$node as \$n) {
            if (!\$n) {
                continue;
            }

            \$this->checkLoopUsageBody(\$stream, \$n);
        }
    }

    public function getTag()
    {
        return 'for';
    }
}

class_alias('Twig\\TokenParser\\ForTokenParser', 'Twig_TokenParser_For');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/ForTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  77 => 30,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenStream;

/**
 * Loops over each item of a sequence.
 *
 *   <ul>
 *    {% for user in users %}
 *      <li>{{ user.username|e }}</li>
 *    {% endfor %}
 *   </ul>
 */
final class ForTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$targets = \$this->parser->getExpressionParser()->parseAssignmentExpression();
        \$stream->expect(/* Token::OPERATOR_TYPE */ 8, 'in');
        \$seq = \$this->parser->getExpressionParser()->parseExpression();

        \$ifexpr = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'if')) {
            @trigger_error(sprintf('Using an \"if\" condition on \"for\" tag in \"%s\" at line %d is deprecated since Twig 2.10.0, use a \"filter\" filter or an \"if\" condition inside the \"for\" body instead (if your condition depends on a variable updated inside the loop).', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

            \$ifexpr = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideForFork']);
        if ('else' == \$stream->next()->getValue()) {
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
            \$else = \$this->parser->subparse([\$this, 'decideForEnd'], true);
        } else {
            \$else = null;
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        if (\\count(\$targets) > 1) {
            \$keyTarget = \$targets->getNode(0);
            \$keyTarget = new AssignNameExpression(\$keyTarget->getAttribute('name'), \$keyTarget->getTemplateLine());
            \$valueTarget = \$targets->getNode(1);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        } else {
            \$keyTarget = new AssignNameExpression('_key', \$lineno);
            \$valueTarget = \$targets->getNode(0);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        }

        if (\$ifexpr) {
            \$this->checkLoopUsageCondition(\$stream, \$ifexpr);
            \$this->checkLoopUsageBody(\$stream, \$body);
        }

        return new ForNode(\$keyTarget, \$valueTarget, \$seq, \$ifexpr, \$body, \$else, \$lineno, \$this->getTag());
    }

    public function decideForFork(Token \$token)
    {
        return \$token->test(['else', 'endfor']);
    }

    public function decideForEnd(Token \$token)
    {
        return \$token->test('endfor');
    }

    // the loop variable cannot be used in the condition
    private function checkLoopUsageCondition(TokenStream \$stream, Node \$node)
    {
        if (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression && 'loop' == \$node->getNode('node')->getAttribute('name')) {
            throw new SyntaxError('The \"loop\" variable cannot be used in a looping condition.', \$node->getTemplateLine(), \$stream->getSourceContext());
        }

        foreach (\$node as \$n) {
            if (!\$n) {
                continue;
            }

            \$this->checkLoopUsageCondition(\$stream, \$n);
        }
    }

    // check usage of non-defined loop-items
    // it does not catch all problems (for instance when a for is included into another or when the variable is used in an include)
    private function checkLoopUsageBody(TokenStream \$stream, Node \$node)
    {
        if (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression && 'loop' == \$node->getNode('node')->getAttribute('name')) {
            \$attribute = \$node->getNode('attribute');
            if (\$attribute instanceof ConstantExpression && \\in_array(\$attribute->getAttribute('value'), ['length', 'revindex0', 'revindex', 'last'])) {
                throw new SyntaxError(sprintf('The \"loop.%s\" variable is not defined when looping with a condition.', \$attribute->getAttribute('value')), \$node->getTemplateLine(), \$stream->getSourceContext());
            }
        }

        // should check for parent.loop.XXX usage
        if (\$node instanceof ForNode) {
            return;
        }

        foreach (\$node as \$n) {
            if (!\$n) {
                continue;
            }

            \$this->checkLoopUsageBody(\$stream, \$n);
        }
    }

    public function getTag()
    {
        return 'for';
    }
}

class_alias('Twig\\TokenParser\\ForTokenParser', 'Twig_TokenParser_For');
", "vendor/twig/twig/src/TokenParser/ForTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/ForTokenParser.php");
    }
}
