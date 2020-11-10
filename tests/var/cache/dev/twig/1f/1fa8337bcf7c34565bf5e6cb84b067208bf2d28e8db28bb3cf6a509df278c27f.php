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

/* var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php */
class __TwigTemplate_a9a19fe6a98f36976b3eba099865669adf44a2e9ac061219b78db5aef694e5b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @WebProfiler/Profiler/bag.html.twig */
class __TwigTemplate_ce6d8904fa4dc66620ac9d8a5ff54fe6af3d0e19af59eb9f1da833f09689c194 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/bag.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/bag.html.twig\"));

        // line 1
        echo \"<table class=\\\"\";
        echo twig_escape_filter(\$this->env, (((isset(\$context[\"class\"]) || array_key_exists(\"class\", \$context))) ? (_twig_default_filter((isset(\$context[\"class\"]) || array_key_exists(\"class\", \$context) ? \$context[\"class\"] : (function () { throw new RuntimeError('Variable \"class\" does not exist.', 1, \$this->source); })()), \"\")) : (\"\")), \"html\", null, true);
        echo \"\\\">
    <thead>
        <tr>
            <th scope=\\\"col\\\" class=\\\"key\\\">\";
        // line 4
        (((isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context))) ? (print (twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context) ? \$context[\"labels\"] : (function () { throw new RuntimeError('Variable \"labels\" does not exist.', 4, \$this->source); })()), 0, [], \"array\", false, false, false, 4), \"html\", null, true))) : (print (\"Key\")));
        echo \"</th>
            <th scope=\\\"col\\\">\";
        // line 5
        (((isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context))) ? (print (twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context) ? \$context[\"labels\"] : (function () { throw new RuntimeError('Variable \"labels\" does not exist.', 5, \$this->source); })()), 1, [], \"array\", false, false, false, 5), \"html\", null, true))) : (print (\"Value\")));
        echo \"</th>
        </tr>
    </thead>
    <tbody>
        \";
        // line 9
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"bag\"]) || array_key_exists(\"bag\", \$context) ? \$context[\"bag\"] : (function () { throw new RuntimeError('Variable \"bag\" does not exist.', 9, \$this->source); })()), \"keys\", [], \"any\", false, false, false, 9)));
        \$context['_iterated'] = false;
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"key\"]) {
            // line 10
            echo \"            <tr>
                <th>\";
            // line 11
            echo twig_escape_filter(\$this->env, \$context[\"key\"], \"html\", null, true);
            echo \"</th>
                <td>\";
            // line 12
            echo \$this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension']->dumpData(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"bag\"]) || array_key_exists(\"bag\", \$context) ? \$context[\"bag\"] : (function () { throw new RuntimeError('Variable \"bag\" does not exist.', 12, \$this->source); })()), \"get\", [0 => \$context[\"key\"]], \"method\", false, false, false, 12), (((isset(\$context[\"maxDepth\"]) || array_key_exists(\"maxDepth\", \$context))) ? (_twig_default_filter((isset(\$context[\"maxDepth\"]) || array_key_exists(\"maxDepth\", \$context) ? \$context[\"maxDepth\"] : (function () { throw new RuntimeError('Variable \"maxDepth\" does not exist.', 12, \$this->source); })()), 0)) : (0)));
            echo \"</td>
            </tr>
        \";
            \$context['_iterated'] = true;
        }
        if (!\$context['_iterated']) {
            // line 15
            echo \"            <tr>
                <td colspan=\\\"2\\\">(no data)</td>
            </tr>
        \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['key'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 19
        echo \"    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/bag.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  81 => 15,  73 => 12,  69 => 11,  66 => 10,  61 => 9,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<table class=\\\"";
        // line 118
        echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 118, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\\\">
    <thead>
        <tr>
            <th scope=\\\"col\\\" class=\\\"key\\\">";
        // line 121
        (((isset($context["labels"]) || array_key_exists("labels", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 121, $this->source); })()), 0, [], "array", false, false, false, 121), "html", null, true))) : (print ("Key")));
        echo "</th>
            <th scope=\\\"col\\\">";
        // line 122
        (((isset($context["labels"]) || array_key_exists("labels", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 122, $this->source); })()), 1, [], "array", false, false, false, 122), "html", null, true))) : (print ("Value")));
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["bag"]) || array_key_exists("bag", $context) ? $context["bag"] : (function () { throw new RuntimeError('Variable "bag" does not exist.', 126, $this->source); })()), "keys", [], "any", false, false, false, 126)));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 127
            echo "            <tr>
                <th>";
            // line 128
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 129
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bag"]) || array_key_exists("bag", $context) ? $context["bag"] : (function () { throw new RuntimeError('Variable "bag" does not exist.', 129, $this->source); })()), "get", [0 => $context["key"]], "method", false, false, false, 129), (((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context))) ? (_twig_default_filter((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 129, $this->source); })()), 0)) : (0)));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            echo "            <tr>
                <td colspan=\\\"2\\\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "    </tbody>
</table>
\", \"@WebProfiler/Profiler/bag.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/bag.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 136,  199 => 132,  191 => 129,  187 => 128,  184 => 127,  179 => 126,  172 => 122,  168 => 121,  162 => 118,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @WebProfiler/Profiler/bag.html.twig */
class __TwigTemplate_ce6d8904fa4dc66620ac9d8a5ff54fe6af3d0e19af59eb9f1da833f09689c194 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/bag.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/bag.html.twig\"));

        // line 1
        echo \"<table class=\\\"\";
        echo twig_escape_filter(\$this->env, (((isset(\$context[\"class\"]) || array_key_exists(\"class\", \$context))) ? (_twig_default_filter((isset(\$context[\"class\"]) || array_key_exists(\"class\", \$context) ? \$context[\"class\"] : (function () { throw new RuntimeError('Variable \"class\" does not exist.', 1, \$this->source); })()), \"\")) : (\"\")), \"html\", null, true);
        echo \"\\\">
    <thead>
        <tr>
            <th scope=\\\"col\\\" class=\\\"key\\\">\";
        // line 4
        (((isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context))) ? (print (twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context) ? \$context[\"labels\"] : (function () { throw new RuntimeError('Variable \"labels\" does not exist.', 4, \$this->source); })()), 0, [], \"array\", false, false, false, 4), \"html\", null, true))) : (print (\"Key\")));
        echo \"</th>
            <th scope=\\\"col\\\">\";
        // line 5
        (((isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context))) ? (print (twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"labels\"]) || array_key_exists(\"labels\", \$context) ? \$context[\"labels\"] : (function () { throw new RuntimeError('Variable \"labels\" does not exist.', 5, \$this->source); })()), 1, [], \"array\", false, false, false, 5), \"html\", null, true))) : (print (\"Value\")));
        echo \"</th>
        </tr>
    </thead>
    <tbody>
        \";
        // line 9
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"bag\"]) || array_key_exists(\"bag\", \$context) ? \$context[\"bag\"] : (function () { throw new RuntimeError('Variable \"bag\" does not exist.', 9, \$this->source); })()), \"keys\", [], \"any\", false, false, false, 9)));
        \$context['_iterated'] = false;
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"key\"]) {
            // line 10
            echo \"            <tr>
                <th>\";
            // line 11
            echo twig_escape_filter(\$this->env, \$context[\"key\"], \"html\", null, true);
            echo \"</th>
                <td>\";
            // line 12
            echo \$this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension']->dumpData(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"bag\"]) || array_key_exists(\"bag\", \$context) ? \$context[\"bag\"] : (function () { throw new RuntimeError('Variable \"bag\" does not exist.', 12, \$this->source); })()), \"get\", [0 => \$context[\"key\"]], \"method\", false, false, false, 12), (((isset(\$context[\"maxDepth\"]) || array_key_exists(\"maxDepth\", \$context))) ? (_twig_default_filter((isset(\$context[\"maxDepth\"]) || array_key_exists(\"maxDepth\", \$context) ? \$context[\"maxDepth\"] : (function () { throw new RuntimeError('Variable \"maxDepth\" does not exist.', 12, \$this->source); })()), 0)) : (0)));
            echo \"</td>
            </tr>
        \";
            \$context['_iterated'] = true;
        }
        if (!\$context['_iterated']) {
            // line 15
            echo \"            <tr>
                <td colspan=\\\"2\\\">(no data)</td>
            </tr>
        \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['key'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 19
        echo \"    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/bag.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  81 => 15,  73 => 12,  69 => 11,  66 => 10,  61 => 9,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<table class=\\\"{{ class|default('') }}\\\">
    <thead>
        <tr>
            <th scope=\\\"col\\\" class=\\\"key\\\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\\\"col\\\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in bag.keys|sort %}
            <tr>
                <th>{{ key }}</th>
                <td>{{ profiler_dump(bag.get(key), maxDepth=maxDepth|default(0)) }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\\\"2\\\">(no data)</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
\", \"@WebProfiler/Profiler/bag.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/bag.html.twig\");
    }
}
", "var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/e7/e7b261e1411d10eb6fbd3f4db473cc2bb31abc1b4e5dfe07c25c3860a615aefc.php");
    }
}
