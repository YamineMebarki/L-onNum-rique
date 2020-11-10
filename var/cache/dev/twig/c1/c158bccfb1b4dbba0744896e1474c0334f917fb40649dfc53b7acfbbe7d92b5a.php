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

/* var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php */
class __TwigTemplate_247eb650275a7dc8268d6add3713b8f6424ed613f1ee7f6ee42d029687aa50d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php"));

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

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_4362dcceffb6cd22bd76500c94a635a238c1047fa18f007f8a0578f31f5d9e75 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.xml.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.xml.twig\"));

        // line 1
        echo \"        <traces>
\";
        // line 2
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 2, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 2));
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
            // line 3
            echo \"            <trace>
\";
            // line 4
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/trace.txt.twig\", [\"trace\" => \$context[\"trace\"]], false);
            echo \"

            </trace>
\";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 8
        echo \"        </traces>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces.xml.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"        <traces>
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 91, $this->source); })()), "trace", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 92
            echo "            <trace>
";
            // line 93
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", ["trace" => $context["trace"]], false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </traces>
\", \"@Twig/Exception/traces.xml.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  142 => 93,  139 => 92,  135 => 91,  43 => 1,);
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

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_4362dcceffb6cd22bd76500c94a635a238c1047fa18f007f8a0578f31f5d9e75 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.xml.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces.xml.twig\"));

        // line 1
        echo \"        <traces>
\";
        // line 2
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 2, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 2));
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
            // line 3
            echo \"            <trace>
\";
            // line 4
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/trace.txt.twig\", [\"trace\" => \$context[\"trace\"]], false);
            echo \"

            </trace>
\";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 8
        echo \"        </traces>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces.xml.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
\", \"@Twig/Exception/traces.xml.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig\");
    }
}
", "var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/e4/e408ea37413dbecd10d8aeb354457330b37538d280c75c22412258ad34d2c9a3.php");
    }
}
