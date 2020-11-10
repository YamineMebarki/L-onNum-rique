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

/* vendor/twig/twig/src/TokenParser/FilterTokenParser.php */
class __TwigTemplate_5baa79158500d8516067d0bff871882ba5758369f71d9719e5ae90a9f5d6d3dc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc' => [$this, 'block___internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/FilterTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/FilterTokenParser.php"));

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

use Twig\\Node\\BlockNode;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Filters a section of a template by applying filters.
 *
 *   ";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env,         $this->renderBlock("__internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc", $context, $blocks)), "html", null, true);
        // line 26
        echo " *
 * @deprecated since Twig 2.9, to be removed in 3.0 (use the \"apply\" tag instead)
 */
final class FilterTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();
        \$lineno = \$token->getLine();

        @trigger_error(sprintf('The \"filter\" tag in \"%s\" at line %d is deprecated since Twig 2.9, use the \"apply\" tag instead.', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

        \$name = \$this->parser->getVarName();
        \$ref = new BlockReferenceExpression(new ConstantExpression(\$name, \$lineno), null, \$lineno, \$this->getTag());

        \$filter = \$this->parser->getExpressionParser()->parseFilterExpressionRaw(\$ref, \$this->getTag());
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block = new BlockNode(\$name, \$body, \$lineno);
        \$this->parser->setBlock(\$name, \$block);

        return new PrintNode(\$filter, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endfilter');
    }

    public function getTag()
    {
        return 'filter';
    }
}

class_alias('Twig\\TokenParser\\FilterTokenParser', 'Twig_TokenParser_Filter');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block___internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_fca39a928a79ccdbaea57e32f0757e8ca18be18e15d969576f31d4f04cf0d9bc"));

        // line 24
        echo " *      This text becomes uppercase
 *   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/FilterTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  119 => 23,  70 => 26,  68 => 23,  44 => 1,);
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

use Twig\\Node\\BlockNode;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Filters a section of a template by applying filters.
 *
 *   {% filter upper %}
 *      This text becomes uppercase
 *   {% endfilter %}
 *
 * @deprecated since Twig 2.9, to be removed in 3.0 (use the \"apply\" tag instead)
 */
final class FilterTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();
        \$lineno = \$token->getLine();

        @trigger_error(sprintf('The \"filter\" tag in \"%s\" at line %d is deprecated since Twig 2.9, use the \"apply\" tag instead.', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

        \$name = \$this->parser->getVarName();
        \$ref = new BlockReferenceExpression(new ConstantExpression(\$name, \$lineno), null, \$lineno, \$this->getTag());

        \$filter = \$this->parser->getExpressionParser()->parseFilterExpressionRaw(\$ref, \$this->getTag());
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block = new BlockNode(\$name, \$body, \$lineno);
        \$this->parser->setBlock(\$name, \$block);

        return new PrintNode(\$filter, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token)
    {
        return \$token->test('endfilter');
    }

    public function getTag()
    {
        return 'filter';
    }
}

class_alias('Twig\\TokenParser\\FilterTokenParser', 'Twig_TokenParser_Filter');
", "vendor/twig/twig/src/TokenParser/FilterTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/FilterTokenParser.php");
    }
}
