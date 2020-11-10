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

/* vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php */
class __TwigTemplate_31261f540d024b4dcd42bd87a6c3614277a764726a0b3ccb6751f8e71b604497 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php"));

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
use Twig\\Node\\AutoEscapeNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Token;

/**
 * Marks a section of a template to be escaped or not.
 */
final class AutoEscapeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        if (\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$value = 'html';
        } else {
            \$expr = \$this->parser->getExpressionParser()->parseExpression();
            if (!\$expr instanceof ConstantExpression) {
                throw new SyntaxError('An escaping strategy must be a string or false.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
            \$value = \$expr->getAttribute('value');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new AutoEscapeNode(\$value, \$body, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endautoescape');
    }

    public function getTag()
    {
        return 'autoescape';
    }
}

class_alias('Twig\\TokenParser\\AutoEscapeTokenParser', 'Twig_TokenParser_AutoEscape');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php";
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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\AutoEscapeNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Token;

/**
 * Marks a section of a template to be escaped or not.
 */
final class AutoEscapeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        if (\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$value = 'html';
        } else {
            \$expr = \$this->parser->getExpressionParser()->parseExpression();
            if (!\$expr instanceof ConstantExpression) {
                throw new SyntaxError('An escaping strategy must be a string or false.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
            \$value = \$expr->getAttribute('value');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new AutoEscapeNode(\$value, \$body, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endautoescape');
    }

    public function getTag()
    {
        return 'autoescape';
    }
}

class_alias('Twig\\TokenParser\\AutoEscapeTokenParser', 'Twig_TokenParser_AutoEscape');
", "vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php");
    }
}
