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

/* var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php */
class __TwigTemplate_10482755e943e4e86ca0b63b0a27aa59d397e96cd95d52ed217ae4eac61b57df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php"));

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

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_08581123ea67079373126acaaf3c201d2f5085533e4ca728cb52900a5356b03b extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/search.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/search.html.twig\"));

        // line 1
        echo \"<div id=\\\"sidebar-search\\\" class=\\\"hidden\\\">
    <form action=\\\"\";
        // line 2
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"_profiler_search\");
        echo \"\\\" method=\\\"get\\\">
        <div class=\\\"form-group\\\">
            <label for=\\\"ip\\\">IP</label>
            <input type=\\\"text\\\" name=\\\"ip\\\" id=\\\"ip\\\" value=\\\"\";
        // line 5
        echo twig_escape_filter(\$this->env, (isset(\$context[\"ip\"]) || array_key_exists(\"ip\", \$context) ? \$context[\"ip\"] : (function () { throw new RuntimeError('Variable \"ip\" does not exist.', 5, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"method\\\">Method</label>
            <select name=\\\"method\\\" id=\\\"method\\\">
                <option value=\\\"\\\">Any</option>
                \";
        // line 12
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable([0 => \"DELETE\", 1 => \"GET\", 2 => \"HEAD\", 3 => \"PATCH\", 4 => \"POST\", 5 => \"PUT\"]);
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"m\"]) {
            // line 13
            echo \"                    <option \";
            echo (((\$context[\"m\"] == (isset(\$context[\"method\"]) || array_key_exists(\"method\", \$context) ? \$context[\"method\"] : (function () { throw new RuntimeError('Variable \"method\" does not exist.', 13, \$this->source); })()))) ? (\"selected=\\\"selected\\\"\") : (\"\"));
            echo \">\";
            echo twig_escape_filter(\$this->env, \$context[\"m\"], \"html\", null, true);
            echo \"</option>
                \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['m'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 15
        echo \"            </select>
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"status_code\\\">Status</label>
            <input type=\\\"number\\\" name=\\\"status_code\\\" id=\\\"status_code\\\" min=\\\"100\\\" max=\\\"599\\\" value=\\\"\";
        // line 20
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 20, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"url\\\">URL</label>
            <input type=\\\"text\\\" name=\\\"url\\\" id=\\\"url\\\" value=\\\"\";
        // line 25
        echo twig_escape_filter(\$this->env, (isset(\$context[\"url\"]) || array_key_exists(\"url\", \$context) ? \$context[\"url\"] : (function () { throw new RuntimeError('Variable \"url\" does not exist.', 25, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"token\\\">Token</label>
            <input type=\\\"text\\\" name=\\\"token\\\" id=\\\"token\\\" value=\\\"\";
        // line 30
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 30, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"start\\\">From</label>
            <input type=\\\"date\\\" name=\\\"start\\\" id=\\\"start\\\" value=\\\"\";
        // line 35
        echo twig_escape_filter(\$this->env, (isset(\$context[\"start\"]) || array_key_exists(\"start\", \$context) ? \$context[\"start\"] : (function () { throw new RuntimeError('Variable \"start\" does not exist.', 35, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"end\\\">Until</label>
            <input type=\\\"date\\\" name=\\\"end\\\" id=\\\"end\\\" value=\\\"\";
        // line 40
        echo twig_escape_filter(\$this->env, (isset(\$context[\"end\"]) || array_key_exists(\"end\", \$context) ? \$context[\"end\"] : (function () { throw new RuntimeError('Variable \"end\" does not exist.', 40, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"limit\\\">Results</label>
            <select name=\\\"limit\\\" id=\\\"limit\\\">
                \";
        // line 46
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 50, 2 => 100]);
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"l\"]) {
            // line 47
            echo \"                    <option \";
            echo (((\$context[\"l\"] == (isset(\$context[\"limit\"]) || array_key_exists(\"limit\", \$context) ? \$context[\"limit\"] : (function () { throw new RuntimeError('Variable \"limit\" does not exist.', 47, \$this->source); })()))) ? (\"selected=\\\"selected\\\"\") : (\"\"));
            echo \">\";
            echo twig_escape_filter(\$this->env, \$context[\"l\"], \"html\", null, true);
            echo \"</option>
                \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['l'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 49
        echo \"            </select>
        </div>

        <div class=\\\"form-group\\\">
            <button type=\\\"submit\\\" class=\\\"btn btn-sm\\\">Search</button>
        </div>
    </form>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/search.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  129 => 47,  125 => 46,  116 => 40,  108 => 35,  100 => 30,  92 => 25,  84 => 20,  77 => 15,  66 => 13,  62 => 12,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"sidebar-search\\\" class=\\\"hidden\\\">
    <form action=\\\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search");
        echo "\\\" method=\\\"get\\\">
        <div class=\\\"form-group\\\">
            <label for=\\\"ip\\\">IP</label>
            <input type=\\\"text\\\" name=\\\"ip\\\" id=\\\"ip\\\" value=\\\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"method\\\">Method</label>
            <select name=\\\"method\\\" id=\\\"method\\\">
                <option value=\\\"\\\">Any</option>
                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"]);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 186
            echo "                    <option ";
            echo ((($context["m"] == (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 186, $this->source); })()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "            </select>
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"status_code\\\">Status</label>
            <input type=\\\"number\\\" name=\\\"status_code\\\" id=\\\"status_code\\\" min=\\\"100\\\" max=\\\"599\\\" value=\\\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"url\\\">URL</label>
            <input type=\\\"text\\\" name=\\\"url\\\" id=\\\"url\\\" value=\\\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"token\\\">Token</label>
            <input type=\\\"text\\\" name=\\\"token\\\" id=\\\"token\\\" value=\\\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 203, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"start\\\">From</label>
            <input type=\\\"date\\\" name=\\\"start\\\" id=\\\"start\\\" value=\\\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 208, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"end\\\">Until</label>
            <input type=\\\"date\\\" name=\\\"end\\\" id=\\\"end\\\" value=\\\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 213, $this->source); })()), "html", null, true);
        echo "\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"limit\\\">Results</label>
            <select name=\\\"limit\\\" id=\\\"limit\\\">
                ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 50, 2 => 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 220
            echo "                    <option ";
            echo ((($context["l"] == (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 220, $this->source); })()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "            </select>
        </div>

        <div class=\\\"form-group\\\">
            <button type=\\\"submit\\\" class=\\\"btn btn-sm\\\">Search</button>
        </div>
    </form>
</div>
\", \"@WebProfiler/Profiler/search.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/search.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 222,  302 => 220,  298 => 219,  289 => 213,  281 => 208,  273 => 203,  265 => 198,  257 => 193,  250 => 188,  239 => 186,  235 => 185,  225 => 178,  219 => 175,  43 => 1,);
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

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_08581123ea67079373126acaaf3c201d2f5085533e4ca728cb52900a5356b03b extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/search.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/search.html.twig\"));

        // line 1
        echo \"<div id=\\\"sidebar-search\\\" class=\\\"hidden\\\">
    <form action=\\\"\";
        // line 2
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"_profiler_search\");
        echo \"\\\" method=\\\"get\\\">
        <div class=\\\"form-group\\\">
            <label for=\\\"ip\\\">IP</label>
            <input type=\\\"text\\\" name=\\\"ip\\\" id=\\\"ip\\\" value=\\\"\";
        // line 5
        echo twig_escape_filter(\$this->env, (isset(\$context[\"ip\"]) || array_key_exists(\"ip\", \$context) ? \$context[\"ip\"] : (function () { throw new RuntimeError('Variable \"ip\" does not exist.', 5, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"method\\\">Method</label>
            <select name=\\\"method\\\" id=\\\"method\\\">
                <option value=\\\"\\\">Any</option>
                \";
        // line 12
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable([0 => \"DELETE\", 1 => \"GET\", 2 => \"HEAD\", 3 => \"PATCH\", 4 => \"POST\", 5 => \"PUT\"]);
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"m\"]) {
            // line 13
            echo \"                    <option \";
            echo (((\$context[\"m\"] == (isset(\$context[\"method\"]) || array_key_exists(\"method\", \$context) ? \$context[\"method\"] : (function () { throw new RuntimeError('Variable \"method\" does not exist.', 13, \$this->source); })()))) ? (\"selected=\\\"selected\\\"\") : (\"\"));
            echo \">\";
            echo twig_escape_filter(\$this->env, \$context[\"m\"], \"html\", null, true);
            echo \"</option>
                \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['m'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 15
        echo \"            </select>
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"status_code\\\">Status</label>
            <input type=\\\"number\\\" name=\\\"status_code\\\" id=\\\"status_code\\\" min=\\\"100\\\" max=\\\"599\\\" value=\\\"\";
        // line 20
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 20, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"url\\\">URL</label>
            <input type=\\\"text\\\" name=\\\"url\\\" id=\\\"url\\\" value=\\\"\";
        // line 25
        echo twig_escape_filter(\$this->env, (isset(\$context[\"url\"]) || array_key_exists(\"url\", \$context) ? \$context[\"url\"] : (function () { throw new RuntimeError('Variable \"url\" does not exist.', 25, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"token\\\">Token</label>
            <input type=\\\"text\\\" name=\\\"token\\\" id=\\\"token\\\" value=\\\"\";
        // line 30
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 30, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"start\\\">From</label>
            <input type=\\\"date\\\" name=\\\"start\\\" id=\\\"start\\\" value=\\\"\";
        // line 35
        echo twig_escape_filter(\$this->env, (isset(\$context[\"start\"]) || array_key_exists(\"start\", \$context) ? \$context[\"start\"] : (function () { throw new RuntimeError('Variable \"start\" does not exist.', 35, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"end\\\">Until</label>
            <input type=\\\"date\\\" name=\\\"end\\\" id=\\\"end\\\" value=\\\"\";
        // line 40
        echo twig_escape_filter(\$this->env, (isset(\$context[\"end\"]) || array_key_exists(\"end\", \$context) ? \$context[\"end\"] : (function () { throw new RuntimeError('Variable \"end\" does not exist.', 40, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"limit\\\">Results</label>
            <select name=\\\"limit\\\" id=\\\"limit\\\">
                \";
        // line 46
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 50, 2 => 100]);
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"l\"]) {
            // line 47
            echo \"                    <option \";
            echo (((\$context[\"l\"] == (isset(\$context[\"limit\"]) || array_key_exists(\"limit\", \$context) ? \$context[\"limit\"] : (function () { throw new RuntimeError('Variable \"limit\" does not exist.', 47, \$this->source); })()))) ? (\"selected=\\\"selected\\\"\") : (\"\"));
            echo \">\";
            echo twig_escape_filter(\$this->env, \$context[\"l\"], \"html\", null, true);
            echo \"</option>
                \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['l'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 49
        echo \"            </select>
        </div>

        <div class=\\\"form-group\\\">
            <button type=\\\"submit\\\" class=\\\"btn btn-sm\\\">Search</button>
        </div>
    </form>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/search.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  129 => 47,  125 => 46,  116 => 40,  108 => 35,  100 => 30,  92 => 25,  84 => 20,  77 => 15,  66 => 13,  62 => 12,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"sidebar-search\\\" class=\\\"hidden\\\">
    <form action=\\\"{{ path('_profiler_search') }}\\\" method=\\\"get\\\">
        <div class=\\\"form-group\\\">
            <label for=\\\"ip\\\">IP</label>
            <input type=\\\"text\\\" name=\\\"ip\\\" id=\\\"ip\\\" value=\\\"{{ ip }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"method\\\">Method</label>
            <select name=\\\"method\\\" id=\\\"method\\\">
                <option value=\\\"\\\">Any</option>
                {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}
                    <option {{ m == method ? 'selected=\\\"selected\\\"' }}>{{ m }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"status_code\\\">Status</label>
            <input type=\\\"number\\\" name=\\\"status_code\\\" id=\\\"status_code\\\" min=\\\"100\\\" max=\\\"599\\\" value=\\\"{{ status_code }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"url\\\">URL</label>
            <input type=\\\"text\\\" name=\\\"url\\\" id=\\\"url\\\" value=\\\"{{ url }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"token\\\">Token</label>
            <input type=\\\"text\\\" name=\\\"token\\\" id=\\\"token\\\" value=\\\"{{ token }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"start\\\">From</label>
            <input type=\\\"date\\\" name=\\\"start\\\" id=\\\"start\\\" value=\\\"{{ start }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"end\\\">Until</label>
            <input type=\\\"date\\\" name=\\\"end\\\" id=\\\"end\\\" value=\\\"{{ end }}\\\">
        </div>

        <div class=\\\"form-group\\\">
            <label for=\\\"limit\\\">Results</label>
            <select name=\\\"limit\\\" id=\\\"limit\\\">
                {% for l in [10, 50, 100] %}
                    <option {{ l == limit ? 'selected=\\\"selected\\\"' }}>{{ l }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\\\"form-group\\\">
            <button type=\\\"submit\\\" class=\\\"btn btn-sm\\\">Search</button>
        </div>
    </form>
</div>
\", \"@WebProfiler/Profiler/search.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/search.html.twig\");
    }
}
", "var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/2f/2f7634904a8ecd4cba9fb74735f38e44fab64aaf093740d27b4d685a86b3df9e.php");
    }
}
