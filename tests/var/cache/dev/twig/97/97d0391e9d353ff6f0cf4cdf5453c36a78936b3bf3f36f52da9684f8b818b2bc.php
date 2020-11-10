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

/* var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php */
class __TwigTemplate_c42551bce0b55d52069cda583fe1d24d56035353c762f91e541fcfa54a0127cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php"));

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

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f6e57bb934b56b371960b6d7556447a90c5b36151fefe2489c4054dbf16f5c5f extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/header.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/header.html.twig\"));

        // line 1
        echo \"<div id=\\\"header\\\">
    <div class=\\\"container\\\">
        <h1>\";
        // line 3
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Icon/symfony.svg\");
        echo \" Symfony <span>Profiler</span></h1>

        <div class=\\\"search\\\">
            <form method=\\\"get\\\" action=\\\"https://symfony.com/search\\\" target=\\\"_blank\\\">
                <div class=\\\"form-row\\\">
                    <input name=\\\"q\\\" id=\\\"search-id\\\" type=\\\"search\\\" placeholder=\\\"search on symfony.com\\\">
                    <button type=\\\"submit\\\" class=\\\"btn\\\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/header.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"header\\\">
    <div class=\\\"container\\\">
        <h1>";
        // line 88
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\\\"search\\\">
            <form method=\\\"get\\\" action=\\\"https://symfony.com/search\\\" target=\\\"_blank\\\">
                <div class=\\\"form-row\\\">
                    <input name=\\\"q\\\" id=\\\"search-id\\\" type=\\\"search\\\" placeholder=\\\"search on symfony.com\\\">
                    <button type=\\\"submit\\\" class=\\\"btn\\\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
\", \"@WebProfiler/Profiler/header.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 88,  43 => 1,);
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

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f6e57bb934b56b371960b6d7556447a90c5b36151fefe2489c4054dbf16f5c5f extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/header.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@WebProfiler/Profiler/header.html.twig\"));

        // line 1
        echo \"<div id=\\\"header\\\">
    <div class=\\\"container\\\">
        <h1>\";
        // line 3
        echo twig_include(\$this->env, \$context, \"@WebProfiler/Icon/symfony.svg\");
        echo \" Symfony <span>Profiler</span></h1>

        <div class=\\\"search\\\">
            <form method=\\\"get\\\" action=\\\"https://symfony.com/search\\\" target=\\\"_blank\\\">
                <div class=\\\"form-row\\\">
                    <input name=\\\"q\\\" id=\\\"search-id\\\" type=\\\"search\\\" placeholder=\\\"search on symfony.com\\\">
                    <button type=\\\"submit\\\" class=\\\"btn\\\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@WebProfiler/Profiler/header.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div id=\\\"header\\\">
    <div class=\\\"container\\\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\\\"search\\\">
            <form method=\\\"get\\\" action=\\\"https://symfony.com/search\\\" target=\\\"_blank\\\">
                <div class=\\\"form-row\\\">
                    <input name=\\\"q\\\" id=\\\"search-id\\\" type=\\\"search\\\" placeholder=\\\"search on symfony.com\\\">
                    <button type=\\\"submit\\\" class=\\\"btn\\\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
\", \"@WebProfiler/Profiler/header.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig\");
    }
}
", "var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/fb/fb7b46383a67b7520ddaf654862bf2d639fa30e08d52df786721a30ab9d6634e.php");
    }
}
