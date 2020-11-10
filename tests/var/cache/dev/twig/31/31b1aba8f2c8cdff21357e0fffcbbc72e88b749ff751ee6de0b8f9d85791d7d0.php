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

/* var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php */
class __TwigTemplate_7dcbc8b0dd6c5347e00f75d277a8efc2d0182c3ddd42e0523ed96f8a5826f7a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php"));

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

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_02c76018579afa8ddd704bab7a6aceca74172307c4d60e15661d895027e2dcd1 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/table.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/table.html.twig\"));

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
        \$context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset(\$context[\"data\"]) || array_key_exists(\"data\", \$context) ? \$context[\"data\"] : (function () { throw new RuntimeError('Variable \"data\" does not exist.', 9, \$this->source); })()))));
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"key\"]) {
            // line 10
            echo \"            <tr>
                <th scope=\\\"row\\\">\";
            // line 11
            echo twig_escape_filter(\$this->env, \$context[\"key\"], \"html\", null, true);
            echo \"</th>
                <td>\";
            // line 12
            echo \$this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension']->dumpData(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"data\"]) || array_key_exists(\"data\", \$context) ? \$context[\"data\"] : (function () { throw new RuntimeError('Variable \"data\" does not exist.', 12, \$this->source); })()), \$context[\"key\"], [], \"array\", false, false, false, 12));
            echo \"</td>
            </tr>
        \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['key'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 15
        echo \"    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/table.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  72 => 12,  68 => 11,  65 => 10,  61 => 9,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<table class=\\\"";
        // line 109
        echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 109, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\\\">
    <thead>
        <tr>
            <th scope=\\\"col\\\" class=\\\"key\\\">";
        // line 112
        (((isset($context["labels"]) || array_key_exists("labels", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 112, $this->source); })()), 0, [], "array", false, false, false, 112), "html", null, true))) : (print ("Key")));
        echo "</th>
            <th scope=\\\"col\\\">";
        // line 113
        (((isset($context["labels"]) || array_key_exists("labels", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113), "html", null, true))) : (print ("Value")));
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 118
            echo "            <tr>
                <th scope=\\\"row\\\">";
            // line 119
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 120
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), $context["key"], [], "array", false, false, false, 120));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </tbody>
</table>
\", \"@WebProfiler/Profiler/table.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/table.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 123,  181 => 120,  177 => 119,  174 => 118,  170 => 117,  163 => 113,  159 => 112,  153 => 109,  43 => 1,);
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

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_02c76018579afa8ddd704bab7a6aceca74172307c4d60e15661d895027e2dcd1 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/table.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/table.html.twig\"));

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
        \$context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset(\$context[\"data\"]) || array_key_exists(\"data\", \$context) ? \$context[\"data\"] : (function () { throw new RuntimeError('Variable \"data\" does not exist.', 9, \$this->source); })()))));
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"key\"]) {
            // line 10
            echo \"            <tr>
                <th scope=\\\"row\\\">\";
            // line 11
            echo twig_escape_filter(\$this->env, \$context[\"key\"], \"html\", null, true);
            echo \"</th>
                <td>\";
            // line 12
            echo \$this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension']->dumpData(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"data\"]) || array_key_exists(\"data\", \$context) ? \$context[\"data\"] : (function () { throw new RuntimeError('Variable \"data\" does not exist.', 12, \$this->source); })()), \$context[\"key\"], [], \"array\", false, false, false, 12));
            echo \"</td>
            </tr>
        \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['key'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 15
        echo \"    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/table.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  72 => 12,  68 => 11,  65 => 10,  61 => 9,  54 => 5,  50 => 4,  43 => 1,);
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
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\\\"row\\\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
\", \"@WebProfiler/Profiler/table.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/table.html.twig\");
    }
}
", "var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/85/85697d76e6d0d00faa5c6a5c0993dd29d3d6d3978f79f32ad7d89624c398c59c.php");
    }
}
