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

/* vendor/twig/twig/src/TokenParser/MacroTokenParser.php */
class __TwigTemplate_8d204ea19299d65f8a9a8ad23695c17d80cf79e747f1aa7eaf0cfc04908fa4cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/MacroTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/MacroTokenParser.php"));

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
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Defines a macro.
 *
 *   ";
        // line 26
        echo " */
final class MacroTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

        \$arguments = \$this->parser->getExpressionParser()->parseArguments(true, true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$this->parser->pushLocalScope();
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
            \$value = \$token->getValue();

            if (\$value != \$name) {
                throw new SyntaxError(sprintf('Expected endmacro for macro \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }
        \$this->parser->popLocalScope();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->setMacro(\$name, new MacroNode(\$name, new BodyNode([\$body]), \$arguments, \$lineno, \$this->getTag()));

        return new Node();
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endmacro');
    }

    public function getTag()
    {
        return 'macro';
    }
}

class_alias('Twig\\TokenParser\\MacroTokenParser', 'Twig_TokenParser_Macro');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function macro_input($__name__ = null, $__value__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            // line 24
            echo " *      <input type=\"";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()));
            echo "\" size=\"";
            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 24, $this->source); })()), 20)) : (20)), "html", null, true);
            echo "\" />
 *   ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/MacroTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  118 => 23,  67 => 26,  43 => 1,);
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
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Defines a macro.
 *
 *   {% macro input(name, value, type, size) %}
 *      <input type=\"{{ type|default('text') }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size|default(20) }}\" />
 *   {% endmacro %}
 */
final class MacroTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

        \$arguments = \$this->parser->getExpressionParser()->parseArguments(true, true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$this->parser->pushLocalScope();
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
            \$value = \$token->getValue();

            if (\$value != \$name) {
                throw new SyntaxError(sprintf('Expected endmacro for macro \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }
        \$this->parser->popLocalScope();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->setMacro(\$name, new MacroNode(\$name, new BodyNode([\$body]), \$arguments, \$lineno, \$this->getTag()));

        return new Node();
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endmacro');
    }

    public function getTag()
    {
        return 'macro';
    }
}

class_alias('Twig\\TokenParser\\MacroTokenParser', 'Twig_TokenParser_Macro');
", "vendor/twig/twig/src/TokenParser/MacroTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/MacroTokenParser.php");
    }
}
