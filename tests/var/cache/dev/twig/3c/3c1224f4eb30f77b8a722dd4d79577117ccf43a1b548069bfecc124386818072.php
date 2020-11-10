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

/* var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php */
class __TwigTemplate_9b858ff4dbcf6a6cdc8865cea7ad679fe96a1a11b885d1b5341c80ad7b801bff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php"));

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

/* @Twig/Exception/traces.AideTxt.twig */
class __TwigTemplate_e9e48b552a24d54bbda5da4792f80623fe37feee575d5fe7f70f3b2a38ac8803 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.AideTxt.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.AideTxt.twig\"));

        // line 1
        if (twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 1))) {
            // line 2
            echo twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 2, \$this->source); })()), \"class\", [], \"any\", false, false, false, 2);
            echo \":
\";
            // line 3
            if ( !twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 3, \$this->source); })()), \"message\", [], \"any\", false, false, false, 3))) {
                // line 4
                echo twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 4, \$this->source); })()), \"message\", [], \"any\", false, false, false, 4);
                echo \"
\";
            }
            // line 6
            echo \"
\";
            // line 7
            \$context['_parent'] = \$context;
            \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 7, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 7));
            foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
                // line 8
                echo \"  \";
                echo twig_include(\$this->env, \$context, \"@Twig/Exception/trace.AideTxt.twig\", [\"trace\" => \$context[\"trace\"]], false);
                echo \"
\";
            }
            \$_parent = \$context['_parent'];
            unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
            \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        }
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces.AideTxt.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  56 => 6,  51 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"";
        // line 97
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 97, $this->source); })()), "trace", [], "any", false, false, false, 97))) {
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 98, $this->source); })()), "class", [], "any", false, false, false, 98), "html", null, true);
            echo ":
";
            // line 99
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 99, $this->source); })()), "message", [], "any", false, false, false, 99))) {
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 100, $this->source); })()), "message", [], "any", false, false, false, 100), "html", null, true);
                echo "
";
            }
            // line 102
            echo "
";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 103, $this->source); })()), "trace", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 104
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", ["trace" => $context["trace"]], false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 107
        echo "\", \"@Twig/Exception/traces.AideTxt.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces.AideTxt.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 107,  161 => 104,  157 => 103,  154 => 102,  149 => 100,  147 => 99,  143 => 98,  141 => 97,  43 => 1,);
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

/* @Twig/Exception/traces.AideTxt.twig */
class __TwigTemplate_e9e48b552a24d54bbda5da4792f80623fe37feee575d5fe7f70f3b2a38ac8803 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.AideTxt.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.AideTxt.twig\"));

        // line 1
        if (twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 1))) {
            // line 2
            echo twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 2, \$this->source); })()), \"class\", [], \"any\", false, false, false, 2);
            echo \":
\";
            // line 3
            if ( !twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 3, \$this->source); })()), \"message\", [], \"any\", false, false, false, 3))) {
                // line 4
                echo twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 4, \$this->source); })()), \"message\", [], \"any\", false, false, false, 4);
                echo \"
\";
            }
            // line 6
            echo \"
\";
            // line 7
            \$context['_parent'] = \$context;
            \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 7, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 7));
            foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
                // line 8
                echo \"  \";
                echo twig_include(\$this->env, \$context, \"@Twig/Exception/trace.AideTxt.twig\", [\"trace\" => \$context[\"trace\"]], false);
                echo \"
\";
            }
            \$_parent = \$context['_parent'];
            unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
            \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        }
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces.AideTxt.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  56 => 6,  51 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"{% if exception.trace|length %}
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.AideTxt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
{% endif %}
\", \"@Twig/Exception/traces.AideTxt.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces.AideTxt.twig\");
    }
}
", "var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/5f/5f402de2304b11e68249aa26e7f288e717a98bb93ed65d43740892fc80883a28.php");
    }
}
