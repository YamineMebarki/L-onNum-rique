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

/* vendor/twig/twig/src/TokenParser/FromTokenParser.php */
class __TwigTemplate_d603a61fafd0e4bdcb3950f69d5a7ae8fa18c22c6266802b8efac4385df6f941 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/FromTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/FromTokenParser.php"));

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

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Token;

/**
 * Imports macros.
 *
 *   ";
        // line 21
        $macros["__internal_4dd9d6ae567bb06f0fbd13960b48cafabf61f252c409076422a0f81f36ecb7c1"] = $this->macros["__internal_4dd9d6ae567bb06f0fbd13960b48cafabf61f252c409076422a0f81f36ecb7c1"] = $this->loadTemplate("forms.html", "vendor/twig/twig/src/TokenParser/FromTokenParser.php", 21)->unwrap();
        // line 22
        echo " */
final class FromTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::NAME_TYPE */ 5, 'import');

        \$targets = [];
        do {
            \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

            \$alias = \$name;
            if (\$stream->nextIf('as')) {
                \$alias = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
            }

            \$targets[\$name] = \$alias;

            if (!\$stream->nextIf(/* Token::PUNCTUATION_TYPE */ 9, ',')) {
                break;
            }
        } while (true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$var = new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine());
        \$node = new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());

        foreach (\$targets as \$name => \$alias) {
            \$this->parser->addImportedSymbol('function', \$alias, 'macro_'.\$name, \$var);
        }

        return \$node;
    }

    public function getTag()
    {
        return 'from';
    }
}

class_alias('Twig\\TokenParser\\FromTokenParser', 'Twig_TokenParser_From');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/FromTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  65 => 21,  43 => 1,);
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

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Token;

/**
 * Imports macros.
 *
 *   {% from 'forms.html' import forms %}
 */
final class FromTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::NAME_TYPE */ 5, 'import');

        \$targets = [];
        do {
            \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

            \$alias = \$name;
            if (\$stream->nextIf('as')) {
                \$alias = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
            }

            \$targets[\$name] = \$alias;

            if (!\$stream->nextIf(/* Token::PUNCTUATION_TYPE */ 9, ',')) {
                break;
            }
        } while (true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$var = new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine());
        \$node = new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());

        foreach (\$targets as \$name => \$alias) {
            \$this->parser->addImportedSymbol('function', \$alias, 'macro_'.\$name, \$var);
        }

        return \$node;
    }

    public function getTag()
    {
        return 'from';
    }
}

class_alias('Twig\\TokenParser\\FromTokenParser', 'Twig_TokenParser_From');
", "vendor/twig/twig/src/TokenParser/FromTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/FromTokenParser.php");
    }
}
