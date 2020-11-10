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

/* vendor/ocramius/proxy-manager/doc-template/default.twig */
class __TwigTemplate_2ea5d131bd66344d4e4a02d470bbf4cbd2ab4c7a40e412abc5b06cd274a4a4f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/default.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/default.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" id=\"top\">
<head>
    <title>ProxyManager Documentation";
        // line 4
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        }
        echo "</title>

    <meta name=\"description\" content=\"A proxyManager write in php\" />
    <meta name=\"keywords\" content=\"ProxyManager, proxy, manager, ocramius, Marco Pivetta, php\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "/css/main.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/css/highlight.dark.css\" rel=\"stylesheet\" />
    <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
</head>
<body>

<header class=\"site-header\">
<div class=\"container\">
<h1><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\"><images alt=\"ProxyManager\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/images/block.png\" /></a></h1>

<nav class=\"main-nav\" role=\"navigation\">
<ul>
    <li><a href=\"https://github.com/Ocramius/ProxyManager\" target=\"_blank\">Github</a></li>

    ";
        // line 27
        if ((isset($context["versions"]) || array_key_exists("versions", $context))) {
            // line 28
            echo "        <li>
            <a href=\"#\">Version</a>

            <ul>
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 32, $this->source); })()), "items", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["key"] => $context["version"]) {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "link", [], "any", false, false, false, 33));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "name", [], "any", false, false, false, 33));
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>
        </li>
    ";
        }
        // line 38
        echo "</ul>
    <div class=\"bcms-clearfix\"></div>
</nav>
</div>
</header>
<main role=\"main\">
<section class=\"component-content\"><div class=\"page-title-wrapper\">
<div class=\"container\">
    <images src=\"https://github.com/Ocramius/ProxyManager/raw/master/proxy-manager.png\">
    <h2 class=\"page-title\">Proxy Manager</h2>
</div>
</div>

<div class=\"component-demo\" id=\"live-demo\">
    <div class=\"container\">
            <div class=\"main-wrapper\" style=\"text-align: right\">
                <iframe src=\"https://ghbtns.com/github-btn.html?user=ocramius&amp;repo=ProxyManager&amp;type=fork&amp;count=true&amp;size=large\"
  allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"310\" height=\"40\"></iframe>

                <iframe src=\"https://ghbtns.com/github-btn.html?user=ocramius&amp;repo=ProxyManager&amp;type=watch&amp;count=true&amp;size=large\"
  allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"200\" height=\"40\"></iframe>

            </div>
        <div class=\"bcms-clearfix bcms-clearfix\"></div>
    </div>
</div>
<div class=\"component-info\">
<div class=\"container\">

<aside class=\"sidebar\">
    <nav class=\"spy-nav\">
        <ul>
            <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "/site.html\">Intro</a></li>
            <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "/docs/lazy-loading-value-holder.html\">Virtual Proxy</a></li>
            <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "/docs/lazy-loading-ghost-object.html\">Ghost Object</a></li>
            <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "/docs/access-interceptor-value-holder.html\">Smart Reference</a></li>
            <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "/docs/access-interceptor-scope-localizer.html\">Smart Reference<br/>(fluent safe)</a></li>
            <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "/docs/null-object.html\">Null Objects</a></li>
            <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "/docs/remote-object.html\">Remote Object</a></li>
            <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "/docs/generator-strategies.html\">Code Evaluators</a></li>
            <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "/docs/tuning-for-production.html\">Tuning for Production</a></li>
        </ul>
    </nav>
<div class=\"bcms-clearfix bcms-clearfix\"></div>
<a class=\"btn btn-action btn-full download-component\"
    href=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "/docs/download.html\">Download</a>
    <div class=\"bcms-clearfix\"></div>
</aside>

<div class=\"content\">
    ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "</div>
</div>
</div>
</section>
</main>

    <footer class=\"site-footer\" role=\"contentinfo\">
        <div class=\"container\">
            <div class=\"footer-logos\">
                <ul>
                    <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "/stability.html\">Stability</a> | </li>
                    <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "/upgrade.html\">Upgrade Notes</a> | </li>
                    <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "/changelog.html\">Changelog</a> | </li>
                    <li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "/contributing.html\">Contributing</a> | </li>
                    <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "/docs/credits.html\">Credits</a> | </li>
                    <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "/docs/copyright.html\">Copyright</a></li>
                </ul>
            </div>
        </div>

        <div class=\"bcms-clearfix\"></div>
    </footer>
    <div class=\"bcms-clearfix\"></div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 89
        echo "
        ";
        // line 90
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 90, $this->source); })());
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/doc-template/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 90,  264 => 89,  254 => 88,  233 => 108,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  213 => 103,  201 => 93,  199 => 88,  191 => 83,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  167 => 74,  163 => 73,  159 => 72,  155 => 71,  151 => 70,  117 => 38,  112 => 35,  101 => 33,  97 => 32,  91 => 28,  89 => 27,  78 => 21,  65 => 11,  61 => 10,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" id=\"top\">
<head>
    <title>ProxyManager Documentation{% if title is defined %} - {{ title }}{% endif %}</title>

    <meta name=\"description\" content=\"A proxyManager write in php\" />
    <meta name=\"keywords\" content=\"ProxyManager, proxy, manager, ocramius, Marco Pivetta, php\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <link href=\"{{ baseUrl }}/css/main.css\" rel=\"stylesheet\" />
    <link href=\"{{ baseUrl }}/css/highlight.dark.css\" rel=\"stylesheet\" />
    <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
</head>
<body>

<header class=\"site-header\">
<div class=\"container\">
<h1><a href=\"{{ baseUrl }}\"><images alt=\"ProxyManager\" src=\"{{ baseUrl }}/images/block.png\" /></a></h1>

<nav class=\"main-nav\" role=\"navigation\">
<ul>
    <li><a href=\"https://github.com/Ocramius/ProxyManager\" target=\"_blank\">Github</a></li>

    {% if versions is defined %}
        <li>
            <a href=\"#\">Version</a>

            <ul>
                {% for key, version in versions.items %}
                    <li><a href=\"{{ version.link|e }}\">{{ version.name|e }}</a></li>
                {% endfor %}
            </ul>
        </li>
    {% endif %}
</ul>
    <div class=\"bcms-clearfix\"></div>
</nav>
</div>
</header>
<main role=\"main\">
<section class=\"component-content\"><div class=\"page-title-wrapper\">
<div class=\"container\">
    <images src=\"https://github.com/Ocramius/ProxyManager/raw/master/proxy-manager.png\">
    <h2 class=\"page-title\">Proxy Manager</h2>
</div>
</div>

<div class=\"component-demo\" id=\"live-demo\">
    <div class=\"container\">
            <div class=\"main-wrapper\" style=\"text-align: right\">
                <iframe src=\"https://ghbtns.com/github-btn.html?user=ocramius&amp;repo=ProxyManager&amp;type=fork&amp;count=true&amp;size=large\"
  allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"310\" height=\"40\"></iframe>

                <iframe src=\"https://ghbtns.com/github-btn.html?user=ocramius&amp;repo=ProxyManager&amp;type=watch&amp;count=true&amp;size=large\"
  allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"200\" height=\"40\"></iframe>

            </div>
        <div class=\"bcms-clearfix bcms-clearfix\"></div>
    </div>
</div>
<div class=\"component-info\">
<div class=\"container\">

<aside class=\"sidebar\">
    <nav class=\"spy-nav\">
        <ul>
            <li><a href=\"{{ baseUrl }}/site.html\">Intro</a></li>
            <li><a href=\"{{ baseUrl }}/docs/lazy-loading-value-holder.html\">Virtual Proxy</a></li>
            <li><a href=\"{{ baseUrl }}/docs/lazy-loading-ghost-object.html\">Ghost Object</a></li>
            <li><a href=\"{{ baseUrl }}/docs/access-interceptor-value-holder.html\">Smart Reference</a></li>
            <li><a href=\"{{ baseUrl }}/docs/access-interceptor-scope-localizer.html\">Smart Reference<br/>(fluent safe)</a></li>
            <li><a href=\"{{ baseUrl }}/docs/null-object.html\">Null Objects</a></li>
            <li><a href=\"{{ baseUrl }}/docs/remote-object.html\">Remote Object</a></li>
            <li><a href=\"{{ baseUrl }}/docs/generator-strategies.html\">Code Evaluators</a></li>
            <li><a href=\"{{ baseUrl }}/docs/tuning-for-production.html\">Tuning for Production</a></li>
        </ul>
    </nav>
<div class=\"bcms-clearfix bcms-clearfix\"></div>
<a class=\"btn btn-action btn-full download-component\"
    href=\"{{ baseUrl }}/docs/download.html\">Download</a>
    <div class=\"bcms-clearfix\"></div>
</aside>

<div class=\"content\">
    {% block content %}

        {{ content|raw }}

    {% endblock %}
</div>
</div>
</div>
</section>
</main>

    <footer class=\"site-footer\" role=\"contentinfo\">
        <div class=\"container\">
            <div class=\"footer-logos\">
                <ul>
                    <li><a href=\"{{ baseUrl }}/stability.html\">Stability</a> | </li>
                    <li><a href=\"{{ baseUrl }}/upgrade.html\">Upgrade Notes</a> | </li>
                    <li><a href=\"{{ baseUrl }}/changelog.html\">Changelog</a> | </li>
                    <li><a href=\"{{ baseUrl }}/contributing.html\">Contributing</a> | </li>
                    <li><a href=\"{{ baseUrl }}/docs/credits.html\">Credits</a> | </li>
                    <li><a href=\"{{ baseUrl }}/docs/copyright.html\">Copyright</a></li>
                </ul>
            </div>
        </div>

        <div class=\"bcms-clearfix\"></div>
    </footer>
    <div class=\"bcms-clearfix\"></div>
    </body>
</html>
", "vendor/ocramius/proxy-manager/doc-template/default.twig", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/doc-template/default.twig");
    }
}
