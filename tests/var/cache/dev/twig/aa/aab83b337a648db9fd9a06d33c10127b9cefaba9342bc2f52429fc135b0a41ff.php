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

/* vendor/twig/twig/src/TokenParser/ImportTokenParser.php */
class __TwigTemplate_c103206f3c8eefdc4b5a82d5b73467d0826315e9a41026e191ec4e17db82e744 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/ImportTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/ImportTokenParser.php"));

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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.html", "vendor/twig/twig/src/TokenParser/ImportTokenParser.php", 21)->unwrap();
        // line 22
        echo " */
final class ImportTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5, 'as');
        \$var = new AssignNameExpression(\$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5)->getValue(), \$token->getLine());
        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->addImportedSymbol('template', \$var->getAttribute('name'));

        return new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());
    }

    public function getTag()
    {
        return 'import';
    }
}

class_alias('Twig\\TokenParser\\ImportTokenParser', 'Twig_TokenParser_Import');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/ImportTokenParser.php";
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
 *   {% import 'forms.html' as forms %}
 */
final class ImportTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5, 'as');
        \$var = new AssignNameExpression(\$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5)->getValue(), \$token->getLine());
        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->addImportedSymbol('template', \$var->getAttribute('name'));

        return new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());
    }

    public function getTag()
    {
        return 'import';
    }
}

class_alias('Twig\\TokenParser\\ImportTokenParser', 'Twig_TokenParser_Import');
", "vendor/twig/twig/src/TokenParser/ImportTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/ImportTokenParser.php");
    }
}
