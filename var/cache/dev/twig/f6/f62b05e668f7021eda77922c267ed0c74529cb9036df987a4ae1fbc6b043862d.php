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

/* var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php */
class __TwigTemplate_b5765fe4d9b7ffb32226f4ffe0cd41f2bf032101d692d223e11a3473c0081ffa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php"));

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

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_aa4becfe0623b771069069475515d7c37dbe3e7c70f8ee3c6690f7944faa15be extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces_text.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces_text.html.twig\"));

        // line 1
        echo \"<table class=\\\"trace trace-as-text\\\">
    <thead class=\\\"trace-head\\\">
        <tr>
            <th class=\\\"sf-toggle\\\" data-toggle-selector=\\\"#trace-text-\";
        // line 4
        echo twig_escape_filter(\$this->env, (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 4, \$this->source); })()), \"html\", null, true);
        echo \"\\\" data-toggle-initial=\\\"\";
        echo (((1 == (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 4, \$this->source); })()))) ? (\"display\") : (\"\"));
        echo \"\\\">
                <h3 class=\\\"trace-class\\\">
                    \";
        // line 6
        if (((isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 6, \$this->source); })()) > 1)) {
            // line 7
            echo \"                        <span class=\\\"text-muted\\\">[\";
            echo twig_escape_filter(\$this->env, (((isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 7, \$this->source); })()) - (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 7, \$this->source); })())) + 1), \"html\", null, true);
            echo \"/\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 7, \$this->source); })()), \"html\", null, true);
            echo \"]</span>
                    \";
        }
        // line 9
        echo \"                    \";
        echo twig_escape_filter(\$this->env, twig_last(\$this->env, twig_split_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 9, \$this->source); })()), \"class\", [], \"any\", false, false, false, 9), \"\\\\\")), \"html\", null, true);
        echo \"
                    <span class=\\\"icon icon-close\\\">\";
        // line 10
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-minus-square-o.svg\");
        echo \"</span>
                    <span class=\\\"icon icon-open\\\">\";
        // line 11
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-plus-square-o.svg\");
        echo \"</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\\\"trace-text-\";
        // line 17
        echo twig_escape_filter(\$this->env, (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 17, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        <tr>
            <td>
                \";
        // line 20
        if (twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 20, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 20))) {
            // line 21
            echo \"                <pre class=\\\"stacktrace\\\">\";
            // line 22
            ob_start();
            // line 23
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces.txt.twig\", [\"exception\" => (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 23, \$this->source); })()), \"format\" => \"html\"], false);
            \$___internal_d5177159cc6d2a0fed025c86228be330e7d33ee485631d1c82e7fcac4501d5f4_ = ('' === \$tmp = ob_get_clean()) ? '' : new Markup(\$tmp, \$this->env->getCharset());
            // line 22
            echo twig_escape_filter(\$this->env, \$___internal_d5177159cc6d2a0fed025c86228be330e7d33ee485631d1c82e7fcac4501d5f4_, \"html\");
            // line 25
            echo \"</pre>
                \";
        }
        // line 27
        echo \"            </td>
        </tr>
    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces_text.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 25,  98 => 22,  95 => 23,  93 => 22,  91 => 21,  89 => 20,  83 => 17,  74 => 11,  70 => 10,  65 => 9,  57 => 7,  55 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<table class=\\\"trace trace-as-text\\\">
    <thead class=\\\"trace-head\\\">
        <tr>
            <th class=\\\"sf-toggle\\\" data-toggle-selector=\\\"#trace-text-";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "\\\" data-toggle-initial=\\\"";
        echo (((1 == (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 137, $this->source); })()))) ? ("display") : (""));
        echo "\\\">
                <h3 class=\\\"trace-class\\\">
                    ";
        // line 139
        if (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 139, $this->source); })()) > 1)) {
            // line 140
            echo "                        <span class=\\\"text-muted\\\">[";
            echo twig_escape_filter($this->env, (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 140, $this->source); })()) - (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 140, $this->source); })())) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 140, $this->source); })()), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 142
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 142, $this->source); })()), "class", [], "any", false, false, false, 142), "\\\\")), "html", null, true);
        echo "
                    <span class=\\\"icon icon-close\\\">";
        // line 143
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\\\"icon icon-open\\\">";
        // line 144
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\\\"trace-text-";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "\\\">
        <tr>
            <td>
                ";
        // line 153
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 153, $this->source); })()), "trace", [], "any", false, false, false, 153))) {
            // line 154
            echo "                <pre class=\\\"stacktrace\\\">";
            // line 155
            ob_start();
            // line 156
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 156, $this->source); })()), "format" => "html"], false);
            $___internal_233a3b1ee304c968726735c0675f69fb8b1c80c06249b1603003d180bdb20eb5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo twig_escape_filter($this->env, $___internal_233a3b1ee304c968726735c0675f69fb8b1c80c06249b1603003d180bdb20eb5_, "html");
            // line 158
            echo "</pre>
                ";
        }
        // line 160
        echo "            </td>
        </tr>
    </tbody>
</table>
\", \"@Twig/Exception/traces_text.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 160,  233 => 158,  231 => 155,  228 => 156,  226 => 155,  224 => 154,  222 => 153,  216 => 150,  207 => 144,  203 => 143,  198 => 142,  190 => 140,  188 => 139,  181 => 137,  43 => 1,);
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

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_aa4becfe0623b771069069475515d7c37dbe3e7c70f8ee3c6690f7944faa15be extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces_text.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/traces_text.html.twig\"));

        // line 1
        echo \"<table class=\\\"trace trace-as-text\\\">
    <thead class=\\\"trace-head\\\">
        <tr>
            <th class=\\\"sf-toggle\\\" data-toggle-selector=\\\"#trace-text-\";
        // line 4
        echo twig_escape_filter(\$this->env, (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 4, \$this->source); })()), \"html\", null, true);
        echo \"\\\" data-toggle-initial=\\\"\";
        echo (((1 == (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 4, \$this->source); })()))) ? (\"display\") : (\"\"));
        echo \"\\\">
                <h3 class=\\\"trace-class\\\">
                    \";
        // line 6
        if (((isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 6, \$this->source); })()) > 1)) {
            // line 7
            echo \"                        <span class=\\\"text-muted\\\">[\";
            echo twig_escape_filter(\$this->env, (((isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 7, \$this->source); })()) - (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 7, \$this->source); })())) + 1), \"html\", null, true);
            echo \"/\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"num_exceptions\"]) || array_key_exists(\"num_exceptions\", \$context) ? \$context[\"num_exceptions\"] : (function () { throw new RuntimeError('Variable \"num_exceptions\" does not exist.', 7, \$this->source); })()), \"html\", null, true);
            echo \"]</span>
                    \";
        }
        // line 9
        echo \"                    \";
        echo twig_escape_filter(\$this->env, twig_last(\$this->env, twig_split_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 9, \$this->source); })()), \"class\", [], \"any\", false, false, false, 9), \"\\\\\")), \"html\", null, true);
        echo \"
                    <span class=\\\"icon icon-close\\\">\";
        // line 10
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-minus-square-o.svg\");
        echo \"</span>
                    <span class=\\\"icon icon-open\\\">\";
        // line 11
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-plus-square-o.svg\");
        echo \"</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\\\"trace-text-\";
        // line 17
        echo twig_escape_filter(\$this->env, (isset(\$context[\"index\"]) || array_key_exists(\"index\", \$context) ? \$context[\"index\"] : (function () { throw new RuntimeError('Variable \"index\" does not exist.', 17, \$this->source); })()), \"html\", null, true);
        echo \"\\\">
        <tr>
            <td>
                \";
        // line 20
        if (twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 20, \$this->source); })()), \"trace\", [], \"any\", false, false, false, 20))) {
            // line 21
            echo \"                <pre class=\\\"stacktrace\\\">\";
            // line 22
            ob_start();
            // line 23
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces.txt.twig\", [\"exception\" => (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 23, \$this->source); })()), \"format\" => \"html\"], false);
            \$___internal_d5177159cc6d2a0fed025c86228be330e7d33ee485631d1c82e7fcac4501d5f4_ = ('' === \$tmp = ob_get_clean()) ? '' : new Markup(\$tmp, \$this->env->getCharset());
            // line 22
            echo twig_escape_filter(\$this->env, \$___internal_d5177159cc6d2a0fed025c86228be330e7d33ee485631d1c82e7fcac4501d5f4_, \"html\");
            // line 25
            echo \"</pre>
                \";
        }
        // line 27
        echo \"            </td>
        </tr>
    </tbody>
</table>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/traces_text.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 25,  98 => 22,  95 => 23,  93 => 22,  91 => 21,  89 => 20,  83 => 17,  74 => 11,  70 => 10,  65 => 9,  57 => 7,  55 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<table class=\\\"trace trace-as-text\\\">
    <thead class=\\\"trace-head\\\">
        <tr>
            <th class=\\\"sf-toggle\\\" data-toggle-selector=\\\"#trace-text-{{ index }}\\\" data-toggle-initial=\\\"{{ 1 == index ? 'display' }}\\\">
                <h3 class=\\\"trace-class\\\">
                    {% if num_exceptions > 1 %}
                        <span class=\\\"text-muted\\\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\\\\\')|last }}
                    <span class=\\\"icon icon-close\\\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\\\"icon icon-open\\\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\\\"trace-text-{{ index }}\\\">
        <tr>
            <td>
                {% if exception.trace|length %}
                <pre class=\\\"stacktrace\\\">
                {%- apply escape('html') -%}
                    {{- include('@Twig/Exception/traces.txt.twig', { exception: exception, format: 'html' }, with_context = false) }}
                {%- endapply -%}
                </pre>
                {% endif %}
            </td>
        </tr>
    </tbody>
</table>
\", \"@Twig/Exception/traces_text.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig\");
    }
}
", "var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/2a/2a39fdbe66548947bb1b6bd0830b75769037cc600f82c66d54825129a16a86a2.php");
    }
}
