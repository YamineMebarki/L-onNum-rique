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

/* var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php */
class __TwigTemplate_e080c3c7b4adcdac0407eee5cb08279578efb50ee92c596ec5f711adda28212d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php"));

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

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_8d4a68a60a93a4aaa10404dca4ad8c5dc7a123c489d6c764ef53beb120f54db9 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/toolbar_js.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/toolbar_js.html.twig\"));

        // line 1
        echo \"<div id=\\\"sfwdt\";
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 1, \$this->source); })()), \"html\", null, true);
        echo \"\\\" class=\\\"sf-toolbar sf-display-none\\\"></div>
\";
        // line 2
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Profiler/base_js.html.twig\");
        echo \"
<style\";
        // line 3
        if ((isset(\$context[\"csp_style_nonce\"]) || array_key_exists(\"csp_style_nonce\", \$context) ? \$context[\"csp_style_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_style_nonce\" does not exist.', 3, \$this->source); })())) {
            echo \" nonce=\\\"\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"csp_style_nonce\"]) || array_key_exists(\"csp_style_nonce\", \$context) ? \$context[\"csp_style_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_style_nonce\" does not exist.', 3, \$this->source); })()), \"html\", null, true);
            echo \"\\\"\";
        }
        echo \">
    \";
        // line 4
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Profiler/toolbar.css.twig\");
        echo \"
</style>
<script\";
        // line 6
        if ((isset(\$context[\"csp_script_nonce\"]) || array_key_exists(\"csp_script_nonce\", \$context) ? \$context[\"csp_script_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_script_nonce\" does not exist.', 6, \$this->source); })())) {
            echo \" nonce=\\\"\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"csp_script_nonce\"]) || array_key_exists(\"csp_script_nonce\", \$context) ? \$context[\"csp_script_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_script_nonce\" does not exist.', 6, \$this->source); })()), \"html\", null, true);
            echo \"\\\"\";
        }
        echo \">/*<![CDATA[*/
    (function () {
        Sfjs.loadToolbar('\";
        // line 8
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 8, \$this->source); })()), \"html\", null, true);
        echo \"');
    })();
/*]]>*/</script>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/toolbar_js.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  65 => 6,  60 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"sfwdt";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\\\" class=\\\"sf-toolbar sf-display-none\\\"></div>
";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
<style";
        // line 106
        if ((isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 106, $this->source); })())) {
            echo " nonce=\\\"";
            echo twig_escape_filter($this->env, (isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "\\\"";
        }
        echo ">
    ";
        // line 107
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig");
        echo "
</style>
<script";
        // line 109
        if ((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 109, $this->source); })())) {
            echo " nonce=\\\"";
            echo twig_escape_filter($this->env, (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "\\\"";
        }
        echo ">/*<![CDATA[*/
    (function () {
        Sfjs.loadToolbar('";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "');
    })();
/*]]>*/</script>
\", \"@WebProfiler/Profiler/toolbar_js.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_js.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 111,  169 => 109,  164 => 107,  156 => 106,  152 => 105,  148 => 104,  43 => 1,);
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

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_8d4a68a60a93a4aaa10404dca4ad8c5dc7a123c489d6c764ef53beb120f54db9 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/toolbar_js.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/toolbar_js.html.twig\"));

        // line 1
        echo \"<div id=\\\"sfwdt\";
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 1, \$this->source); })()), \"html\", null, true);
        echo \"\\\" class=\\\"sf-toolbar sf-display-none\\\"></div>
\";
        // line 2
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Profiler/base_js.html.twig\");
        echo \"
<style\";
        // line 3
        if ((isset(\$context[\"csp_style_nonce\"]) || array_key_exists(\"csp_style_nonce\", \$context) ? \$context[\"csp_style_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_style_nonce\" does not exist.', 3, \$this->source); })())) {
            echo \" nonce=\\\"\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"csp_style_nonce\"]) || array_key_exists(\"csp_style_nonce\", \$context) ? \$context[\"csp_style_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_style_nonce\" does not exist.', 3, \$this->source); })()), \"html\", null, true);
            echo \"\\\"\";
        }
        echo \">
    \";
        // line 4
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Profiler/toolbar.css.twig\");
        echo \"
</style>
<script\";
        // line 6
        if ((isset(\$context[\"csp_script_nonce\"]) || array_key_exists(\"csp_script_nonce\", \$context) ? \$context[\"csp_script_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_script_nonce\" does not exist.', 6, \$this->source); })())) {
            echo \" nonce=\\\"\";
            echo twig_escape_filter(\$this->env, (isset(\$context[\"csp_script_nonce\"]) || array_key_exists(\"csp_script_nonce\", \$context) ? \$context[\"csp_script_nonce\"] : (function () { throw new RuntimeError('Variable \"csp_script_nonce\" does not exist.', 6, \$this->source); })()), \"html\", null, true);
            echo \"\\\"\";
        }
        echo \">/*<![CDATA[*/
    (function () {
        Sfjs.loadToolbar('\";
        // line 8
        echo twig_escape_filter(\$this->env, (isset(\$context[\"token\"]) || array_key_exists(\"token\", \$context) ? \$context[\"token\"] : (function () { throw new RuntimeError('Variable \"token\" does not exist.', 8, \$this->source); })()), \"html\", null, true);
        echo \"');
    })();
/*]]>*/</script>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/toolbar_js.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  65 => 6,  60 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"sfwdt{{ token }}\\\" class=\\\"sf-toolbar sf-display-none\\\"></div>
{{ include('@WebProfiler/Profiler/base_js.html.twig') }}
<style{% if csp_style_nonce %} nonce=\\\"{{ csp_style_nonce }}\\\"{% endif %}>
    {{ include('@WebProfiler/Profiler/toolbar.css.twig') }}
</style>
<script{% if csp_script_nonce %} nonce=\\\"{{ csp_script_nonce }}\\\"{% endif %}>/*<![CDATA[*/
    (function () {
        Sfjs.loadToolbar('{{ token }}');
    })();
/*]]>*/</script>
\", \"@WebProfiler/Profiler/toolbar_js.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_js.html.twig\");
    }
}
", "var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/2f/2f9bbdeab779c263b40007af2fa135383515f6622168fd47fba21d823fd54e0b.php");
    }
}
