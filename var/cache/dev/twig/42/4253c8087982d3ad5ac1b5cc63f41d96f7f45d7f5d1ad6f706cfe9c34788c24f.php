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

/* vendor/twig/twig/src/TokenParser/IfTokenParser.php */
class __TwigTemplate_96ca33a452484b9e34be5531b26ea38caa328532884e23af6e110a95c973f3d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/IfTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/IfTokenParser.php"));

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
use Twig\\Node\\IfNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Tests a condition.
 *
 *   ";
        // line 23
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })())) {
            // line 24
            echo " *    <ul>
 *      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo " *        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 26));
                echo "</li>
 *      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " *    </ul>
 *   ";
        }
        // line 30
        echo " */
final class IfTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$expr = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideIfFork']);
        \$tests = [\$expr, \$body];
        \$else = null;

        \$end = false;
        while (!\$end) {
            switch (\$stream->next()->getValue()) {
                case 'else':
                    \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
                    \$else = \$this->parser->subparse([\$this, 'decideIfEnd']);
                    break;

                case 'elseif':
                    \$expr = \$this->parser->getExpressionParser()->parseExpression();
                    \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
                    \$body = \$this->parser->subparse([\$this, 'decideIfFork']);
                    \$tests[] = \$expr;
                    \$tests[] = \$body;
                    break;

                case 'endif':
                    \$end = true;
                    break;

                default:
                    throw new SyntaxError(sprintf('Unexpected end of template. Twig was looking for the following tags \"else\", \"elseif\", or \"endif\" to close the \"if\" block started at line %d).', \$lineno), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new IfNode(new Node(\$tests), \$else, \$lineno, \$this->getTag());
    }

    public function decideIfFork(Token \$token)
    {
        return \$token->test(['elseif', 'else', 'endif']);
    }

    public function decideIfEnd(Token \$token)
    {
        return \$token->test(['endif']);
    }

    public function getTag()
    {
        return 'if';
    }
}

class_alias('Twig\\TokenParser\\IfTokenParser', 'Twig_TokenParser_If');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/IfTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  85 => 28,  76 => 26,  72 => 25,  69 => 24,  67 => 23,  43 => 1,);
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
use Twig\\Node\\IfNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Tests a condition.
 *
 *   {% if users %}
 *    <ul>
 *      {% for user in users %}
 *        <li>{{ user.username|e }}</li>
 *      {% endfor %}
 *    </ul>
 *   {% endif %}
 */
final class IfTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$expr = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideIfFork']);
        \$tests = [\$expr, \$body];
        \$else = null;

        \$end = false;
        while (!\$end) {
            switch (\$stream->next()->getValue()) {
                case 'else':
                    \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
                    \$else = \$this->parser->subparse([\$this, 'decideIfEnd']);
                    break;

                case 'elseif':
                    \$expr = \$this->parser->getExpressionParser()->parseExpression();
                    \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
                    \$body = \$this->parser->subparse([\$this, 'decideIfFork']);
                    \$tests[] = \$expr;
                    \$tests[] = \$body;
                    break;

                case 'endif':
                    \$end = true;
                    break;

                default:
                    throw new SyntaxError(sprintf('Unexpected end of template. Twig was looking for the following tags \"else\", \"elseif\", or \"endif\" to close the \"if\" block started at line %d).', \$lineno), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new IfNode(new Node(\$tests), \$else, \$lineno, \$this->getTag());
    }

    public function decideIfFork(Token \$token)
    {
        return \$token->test(['elseif', 'else', 'endif']);
    }

    public function decideIfEnd(Token \$token)
    {
        return \$token->test(['endif']);
    }

    public function getTag()
    {
        return 'if';
    }
}

class_alias('Twig\\TokenParser\\IfTokenParser', 'Twig_TokenParser_If');
", "vendor/twig/twig/src/TokenParser/IfTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/IfTokenParser.php");
    }
}
