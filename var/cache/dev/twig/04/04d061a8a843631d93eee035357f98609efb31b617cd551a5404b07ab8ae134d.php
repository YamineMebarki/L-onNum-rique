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

/* vendor/twig/twig/src/TokenParser/IncludeTokenParser.php */
class __TwigTemplate_614f522a3aa5bc3ec9ca4b4e4f23cfacb29b50a379096c187e83db7c8f53a809 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php"));

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

use Twig\\Node\\IncludeNode;
use Twig\\Token;

/**
 * Includes a template.
 *
 *   ";
        // line 21
        $this->loadTemplate("header.html", "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", 21)->display($context);
        // line 22
        echo " *     Body
 *   ";
        // line 23
        $this->loadTemplate("footer.html", "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", 23)->display($context);
        // line 24
        echo " */
class IncludeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        return new IncludeNode(\$expr, \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    protected function parseArguments()
    {
        \$stream = \$this->parser->getStream();

        \$ignoreMissing = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
            \$stream->expect(/* Token::NAME_TYPE */ 5, 'missing');

            \$ignoreMissing = true;
        }

        \$variables = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$only = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
            \$only = true;
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return [\$variables, \$only, \$ignoreMissing];
    }

    public function getTag()
    {
        return 'include';
    }
}

class_alias('Twig\\TokenParser\\IncludeTokenParser', 'Twig_TokenParser_Include');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  70 => 23,  67 => 22,  65 => 21,  43 => 1,);
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

use Twig\\Node\\IncludeNode;
use Twig\\Token;

/**
 * Includes a template.
 *
 *   {% include 'header.html' %}
 *     Body
 *   {% include 'footer.html' %}
 */
class IncludeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        return new IncludeNode(\$expr, \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    protected function parseArguments()
    {
        \$stream = \$this->parser->getStream();

        \$ignoreMissing = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
            \$stream->expect(/* Token::NAME_TYPE */ 5, 'missing');

            \$ignoreMissing = true;
        }

        \$variables = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$only = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
            \$only = true;
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return [\$variables, \$only, \$ignoreMissing];
    }

    public function getTag()
    {
        return 'include';
    }
}

class_alias('Twig\\TokenParser\\IncludeTokenParser', 'Twig_TokenParser_Include');
", "vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php");
    }
}
