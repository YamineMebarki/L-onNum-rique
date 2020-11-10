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

/* var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php */
class __TwigTemplate_b0972ad38e9aff63b380ff811add671f363f6da8c664eb7034c8b5801747bb69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php"));

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

/* @Twig/layout.html.twig */
class __TwigTemplate_154823f5b0decb6775d78a5d88bacd5277effe25c2aabe727ff8dd3f60ddd692 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
            'title' => [\$this, 'block_title'],
            'head' => [\$this, 'block_head'],
            'body' => [\$this, 'block_body'],
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/layout.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/layout.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html>
    <head>
        <meta charset=\\\"\";
        // line 4
        echo twig_escape_filter(\$this->env, \$this->env->getCharset(), \"html\", null, true);
        echo \"\\\" />
        <meta name=\\\"robots\\\" content=\\\"noindex,nofollow\\\" />
        <meta name=\\\"viewport\\\" content=\\\"width=device-width,initial-scale=1\\\" />
        <title>\";
        // line 7
        \$this->displayBlock('title', \$context, \$blocks);
        echo \"</title>
        <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"\";
        // line 8
        echo twig_include(\$this->env, \$context, \"@Twig/images/favicon.png.base64\");
        echo \"\\\">
        <style>\";
        // line 9
        echo twig_include(\$this->env, \$context, \"@Twig/exception.css.twig\");
        echo \"</style>
        \";
        // line 10
        \$this->displayBlock('head', \$context, \$blocks);
        // line 11
        echo \"    </head>
    <body>
        <header>
            <div class=\\\"container\\\">
                <h1 class=\\\"logo\\\">\";
        // line 15
        echo twig_include(\$this->env, \$context, \"@Twig/images/symfony-logo.svg\");
        echo \" Symfony Exception</h1>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/doc/\";
        // line 18
        echo twig_escape_filter(\$this->env, twig_constant(\"Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION\"), \"html\", null, true);
        echo \"/site.html\\\">
                        <span class=\\\"icon\\\">\";
        // line 19
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-book.svg\");
        echo \"</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/support\\\">
                        <span class=\\\"icon\\\">\";
        // line 26
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-support.svg\");
        echo \"</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        \";
        // line 33
        \$this->displayBlock('body', \$context, \$blocks);
        // line 34
        echo \"        \";
        echo twig_include(\$this->env, \$context, \"@Twig/base_js.html.twig\");
        echo \"
    </body>
</html>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_head(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"head\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"head\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"body\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"body\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/layout.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 33,  142 => 10,  124 => 7,  109 => 34,  107 => 33,  97 => 26,  87 => 19,  83 => 18,  77 => 15,  71 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html>
    <head>
        <meta charset=\\\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\\\" />
        <meta name=\\\"robots\\\" content=\\\"noindex,nofollow\\\" />
        <meta name=\\\"viewport\\\" content=\\\"width=device-width,initial-scale=1\\\" />
        <title>";
        // line 200
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"";
        // line 201
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\\\">
        <style>";
        // line 202
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 203
        $this->displayBlock('head', $context, $blocks);
        // line 204
        echo "    </head>
    <body>
        <header>
            <div class=\\\"container\\\">
                <h1 class=\\\"logo\\\">";
        // line 208
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/doc/";
        // line 211
        echo twig_escape_filter($this->env, twig_constant("Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION"), "html", null, true);
        echo "/site.html\\\">
                        <span class=\\\"icon\\\">";
        // line 212
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/support\\\">
                        <span class=\\\"icon\\\">";
        // line 219
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 227
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
\", \"@Twig/layout.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/layout.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 226,  338 => 203,  320 => 200,  302 => 227,  300 => 226,  290 => 219,  280 => 212,  276 => 211,  270 => 208,  264 => 204,  262 => 203,  258 => 202,  254 => 201,  250 => 200,  244 => 197,  46 => 1,);
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

/* @Twig/layout.html.twig */
class __TwigTemplate_154823f5b0decb6775d78a5d88bacd5277effe25c2aabe727ff8dd3f60ddd692 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
            'title' => [\$this, 'block_title'],
            'head' => [\$this, 'block_head'],
            'body' => [\$this, 'block_body'],
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/layout.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/layout.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html>
    <head>
        <meta charset=\\\"\";
        // line 4
        echo twig_escape_filter(\$this->env, \$this->env->getCharset(), \"html\", null, true);
        echo \"\\\" />
        <meta name=\\\"robots\\\" content=\\\"noindex,nofollow\\\" />
        <meta name=\\\"viewport\\\" content=\\\"width=device-width,initial-scale=1\\\" />
        <title>\";
        // line 7
        \$this->displayBlock('title', \$context, \$blocks);
        echo \"</title>
        <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"\";
        // line 8
        echo twig_include(\$this->env, \$context, \"@Twig/images/favicon.png.base64\");
        echo \"\\\">
        <style>\";
        // line 9
        echo twig_include(\$this->env, \$context, \"@Twig/exception.css.twig\");
        echo \"</style>
        \";
        // line 10
        \$this->displayBlock('head', \$context, \$blocks);
        // line 11
        echo \"    </head>
    <body>
        <header>
            <div class=\\\"container\\\">
                <h1 class=\\\"logo\\\">\";
        // line 15
        echo twig_include(\$this->env, \$context, \"@Twig/images/symfony-logo.svg\");
        echo \" Symfony Exception</h1>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/doc/\";
        // line 18
        echo twig_escape_filter(\$this->env, twig_constant(\"Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION\"), \"html\", null, true);
        echo \"/site.html\\\">
                        <span class=\\\"icon\\\">\";
        // line 19
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-book.svg\");
        echo \"</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/support\\\">
                        <span class=\\\"icon\\\">\";
        // line 26
        echo twig_include(\$this->env, \$context, \"@Twig/images/icon-support.svg\");
        echo \"</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        \";
        // line 33
        \$this->displayBlock('body', \$context, \$blocks);
        // line 34
        echo \"        \";
        echo twig_include(\$this->env, \$context, \"@Twig/base_js.html.twig\");
        echo \"
    </body>
</html>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_head(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"head\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"head\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"body\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"body\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/layout.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 33,  142 => 10,  124 => 7,  109 => 34,  107 => 33,  97 => 26,  87 => 19,  83 => 18,  77 => 15,  71 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html>
    <head>
        <meta charset=\\\"{{ _charset }}\\\" />
        <meta name=\\\"robots\\\" content=\\\"noindex,nofollow\\\" />
        <meta name=\\\"viewport\\\" content=\\\"width=device-width,initial-scale=1\\\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"{{ include('@Twig/images/favicon.png.base64') }}\\\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\\\"container\\\">
                <h1 class=\\\"logo\\\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/doc/{{ constant('Symfony\\\\\\\\Component\\\\\\\\HttpKernel\\\\\\\\Kernel::VERSION') }}/site.html\\\">
                        <span class=\\\"icon\\\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\\\"help-link\\\">
                    <a href=\\\"https://symfony.com/support\\\">
                        <span class=\\\"icon\\\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\\\"hidden-xs-down\\\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
\", \"@Twig/layout.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/layout.html.twig\");
    }
}
", "var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/36/3637402cafdc584c1791cc87cddad0a772f2878498d88c663a3a88d6b672f3e2.php");
    }
}
