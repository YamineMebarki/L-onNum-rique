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

/* vendor/twig/twig/src/TokenParser/BlockTokenParser.php */
class __TwigTemplate_cc99263f02bd5c787f5b1e561f7a0392415d92b948ca6485998a0281aa103674 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/BlockTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/BlockTokenParser.php"));

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
use Twig\\Node\\BlockNode;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Marks a section of a template as being reusable.
 *
 *  ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo " */
final class BlockTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
        if (\$this->parser->hasBlock(\$name)) {
            throw new SyntaxError(sprintf(\"The block '%s' has already been defined line %d.\", \$name, \$this->parser->getBlock(\$name)->getTemplateLine()), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
        }
        \$this->parser->setBlock(\$name, \$block = new BlockNode(\$name, new Node([]), \$lineno));
        \$this->parser->pushLocalScope();
        \$this->parser->pushBlockStack(\$name);

        if (\$stream->nextIf(/* Token::BLOCK_END_TYPE */ 3)) {
            \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
                \$value = \$token->getValue();

                if (\$value != \$name) {
                    throw new SyntaxError(sprintf('Expected endblock for block \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
                }
            }
        } else {
            \$body = new Node([
                new PrintNode(\$this->parser->getExpressionParser()->parseExpression(), \$lineno),
            ]);
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block->setNode('body', \$body);
        \$this->parser->popBlockStack();
        \$this->parser->popLocalScope();

        return new BlockReferenceNode(\$name, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endblock');
    }

    public function getTag()
    {
        return 'block';
    }
}

class_alias('Twig\\TokenParser\\BlockTokenParser', 'Twig_TokenParser_Block');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 26
        echo " *    <link rel=\"stylesheet\" href=\"css.css\" />
 *    <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
 *  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/BlockTokenParser.php";
    }

    public function getDebugInfo()
    {
        return array (  146 => 27,  143 => 26,  133 => 25,  73 => 29,  71 => 25,  45 => 1,);
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
use Twig\\Node\\BlockNode;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Marks a section of a template as being reusable.
 *
 *  {% block head %}
 *    <link rel=\"stylesheet\" href=\"css.css\" />
 *    <title>{% block title %}{% endblock %} - My Webpage</title>
 *  {% endblock %}
 */
final class BlockTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
        if (\$this->parser->hasBlock(\$name)) {
            throw new SyntaxError(sprintf(\"The block '%s' has already been defined line %d.\", \$name, \$this->parser->getBlock(\$name)->getTemplateLine()), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
        }
        \$this->parser->setBlock(\$name, \$block = new BlockNode(\$name, new Node([]), \$lineno));
        \$this->parser->pushLocalScope();
        \$this->parser->pushBlockStack(\$name);

        if (\$stream->nextIf(/* Token::BLOCK_END_TYPE */ 3)) {
            \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
                \$value = \$token->getValue();

                if (\$value != \$name) {
                    throw new SyntaxError(sprintf('Expected endblock for block \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
                }
            }
        } else {
            \$body = new Node([
                new PrintNode(\$this->parser->getExpressionParser()->parseExpression(), \$lineno),
            ]);
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block->setNode('body', \$body);
        \$this->parser->popBlockStack();
        \$this->parser->popLocalScope();

        return new BlockReferenceNode(\$name, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endblock');
    }

    public function getTag()
    {
        return 'block';
    }
}

class_alias('Twig\\TokenParser\\BlockTokenParser', 'Twig_TokenParser_Block');
", "vendor/twig/twig/src/TokenParser/BlockTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/BlockTokenParser.php");
    }
}
