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

/* vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php */
class __TwigTemplate_e44f680c115d3e8e20875d83533a3a1793a8862ad346f0cc18e214b7c043523c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php"));

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

namespace Twig\\Node\\Expression\\Filter;

use Twig\\Compiler;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Node;

/**
 * Returns the value or the default value when it is undefined or empty.
 *
 *  ";
        // line 26
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "any", false, false, false, 26), "foo item on var is not defined")) : ("foo item on var is not defined")), "html", null, true);
        echo "
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DefaultFilter extends FilterExpression
{
    public function __construct(Node \$node, ConstantExpression \$filterName, Node \$arguments, int \$lineno, string \$tag = null)
    {
        \$default = new FilterExpression(\$node, new ConstantExpression('default', \$node->getTemplateLine()), \$arguments, \$node->getTemplateLine());

        if ('default' === \$filterName->getAttribute('value') && (\$node instanceof NameExpression || \$node instanceof GetAttrExpression)) {
            \$test = new DefinedTest(clone \$node, 'defined', new Node(), \$node->getTemplateLine());
            \$false = \\count(\$arguments) ? \$arguments->getNode(0) : new ConstantExpression('', \$node->getTemplateLine());

            \$node = new ConditionalExpression(\$test, \$default, \$false, \$node->getTemplateLine());
        } else {
            \$node = \$default;
        }

        parent::__construct(\$node, \$filterName, \$arguments, \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->subcompile(\$this->getNode('node'));
    }
}

class_alias('Twig\\Node\\Expression\\Filter\\DefaultFilter', 'Twig_Node_Expression_Filter_Default');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  43 => 1,);
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

namespace Twig\\Node\\Expression\\Filter;

use Twig\\Compiler;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Node;

/**
 * Returns the value or the default value when it is undefined or empty.
 *
 *  {{ var.foo|default('foo item on var is not defined') }}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DefaultFilter extends FilterExpression
{
    public function __construct(Node \$node, ConstantExpression \$filterName, Node \$arguments, int \$lineno, string \$tag = null)
    {
        \$default = new FilterExpression(\$node, new ConstantExpression('default', \$node->getTemplateLine()), \$arguments, \$node->getTemplateLine());

        if ('default' === \$filterName->getAttribute('value') && (\$node instanceof NameExpression || \$node instanceof GetAttrExpression)) {
            \$test = new DefinedTest(clone \$node, 'defined', new Node(), \$node->getTemplateLine());
            \$false = \\count(\$arguments) ? \$arguments->getNode(0) : new ConstantExpression('', \$node->getTemplateLine());

            \$node = new ConditionalExpression(\$test, \$default, \$false, \$node->getTemplateLine());
        } else {
            \$node = \$default;
        }

        parent::__construct(\$node, \$filterName, \$arguments, \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->subcompile(\$this->getNode('node'));
    }
}

class_alias('Twig\\Node\\Expression\\Filter\\DefaultFilter', 'Twig_Node_Expression_Filter_Default');
", "vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/Filter/DefaultFilter.php");
    }
}
