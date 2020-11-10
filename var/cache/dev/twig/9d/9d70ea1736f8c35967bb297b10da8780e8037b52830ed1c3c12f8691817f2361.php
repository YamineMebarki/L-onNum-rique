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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_1042d5a41a287a6253b4d642cf06a5d915e84c6e42c1b8568e2df89ddd0d9565 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <style>
        body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; margin: 0; }
        .container { margin: 30px; max-width: 600px; }
        h1 { color: #dc3545; font-size: 24px; }
        h2 { font-size: 18px; }
    </style>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
            ";
        // line 22
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a>
                </li>
            ";
        } else {
            // line 33
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\">Nos Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
            echo "\">Créer un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_articles", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Mes articles</a>
                </li>
                ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "role", [], "any", false, false, false, 42) == "admin")) {
                // line 43
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_dashboard");
                echo "\">Dashboard</a>
                    </li>
                ";
            } else {
                // line 47
                echo "                ";
            }
            // line 48
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Se deconnecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a>
                </li>
            ";
        }
        // line 55
        echo "        </ul>
    </div>
</nav>
<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/img/L@nNumérique.png"), "html", null, true);
        echo "\" alt=\"Laon\"  class=\"responsive\"/>
<div class=\"container text-center\">
    <h1>Oops! ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\".</h1>
    <p>
        La page demander n'héxiste plus ou a été rendu innaccessible par son propriétaire.
    </p>
</div>
<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/img/laon.png"), "html", null, true);
        echo "\" alt=\"Laon\"  class=\"responsive\"/>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 65,  159 => 60,  154 => 58,  149 => 55,  143 => 52,  137 => 49,  134 => 48,  131 => 47,  125 => 44,  122 => 43,  120 => 42,  115 => 40,  109 => 37,  103 => 34,  100 => 33,  94 => 30,  88 => 27,  82 => 24,  79 => 23,  77 => 22,  68 => 16,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"{{ _charset }}\" />
    <title>{{ status_code }} {{ status_text }}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <style>
        body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; margin: 0; }
        .container { margin: 30px; max-width: 600px; }
        h1 { color: #dc3545; font-size: 24px; }
        h2 { font-size: 18px; }
    </style>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
            {% if not app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('security_registration') }}\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('security_login') }}\">Se connecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('articles') }}\">Nos Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('create') }}\">Créer un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('my_articles', {'name': app.user.username}) }}\">Mes articles</a>
                </li>
                {% if app.user.role == 'admin' %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('security_dashboard') }}\">Dashboard</a>
                    </li>
                {% else %}
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('security_logout') }}\">Se deconnecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>
<images src=\"{{ asset('dist/assets/images/L@nNumérique.png') }}\" alt=\"Laon\"  class=\"responsive\"/>
<div class=\"container text-center\">
    <h1>Oops! {{ status_code }} {{ status_text }}\".</h1>
    <p>
        La page demander n'héxiste plus ou a été rendu innaccessible par son propriétaire.
    </p>
</div>
<images src=\"{{ asset('dist/assets/images/laon.png') }}\" alt=\"Laon\"  class=\"responsive\"/>
</body>
</html>
", "@Twig/Exception/error.html.twig", "/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig");
    }
}
