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

/* article/my_articles.html.twig */
class __TwigTemplate_3f13022f253f6ab44b59bcac12f22553c4cf00128ba29e2f0f25e374a45a84d8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/my_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/my_articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/my_articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Articles de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "username", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Actuellement vous avez <span class=\"bold\">";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</span>
                        ";
            // line 9
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 9, $this->source); })()) > 1)) {
                // line 10
                echo "                            articles publiés
                        ";
            } else {
                // line 12
                echo "                            article publié
                        ";
            }
            // line 14
            echo "                    </h2>
                    <div class=\"mv\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["articles"]);
            foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
                // line 17
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">
                            <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                    <images src=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "image", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"card-images-top rounded\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 20), "html", null, true);
                echo "\"   height=\"200\" />
                                    <div class=\"card-block\">
                                        <h4 class=\"card-title\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h4>
                                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"btn btn-link js-likes\">
                                            ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) && twig_get_attribute($this->env, $this->source, $context["articles"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)], "method", false, false, false, 24))) {
                    // line 25
                    echo "                                                <i class=\"fas fa-thumbs-up\"></i>
                                            ";
                } else {
                    // line 27
                    echo "                                                <i class=\"far fa-thumbs-up\"></i>
                                            ";
                }
                // line 29
                echo "                                            <span class=\"js-likes\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "articleLikes", [], "any", false, false, false, 29)), "html", null, true);
                echo "</span>
                                            <span class=\"js-label\">J'aime</span>
                                        </a>
                                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
                                            <button class=\"btn btn-danger\">X</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 45
            echo "        <h1 class=\"mt-5\">Veuillez vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connecter</a> ou vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">inscrire</a></h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/my_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 45,  173 => 40,  159 => 32,  152 => 29,  148 => 27,  144 => 25,  142 => 24,  138 => 23,  134 => 22,  127 => 20,  120 => 17,  116 => 16,  112 => 14,  108 => 12,  104 => 10,  102 => 9,  98 => 8,  93 => 5,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}
{% block title %}Articles de {{ user.username }} {% endblock %}
{% block body %}
    {% if app.user %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2>Actuellement vous avez <span class=\"bold\">{{ count }}</span>
                        {% if count >1 %}
                            articles publiés
                        {% else %}
                            article publié
                        {% endif %}
                    </h2>
                    <div class=\"mv\">
                    {% for articles in articles %}
                        <a href=\"{{ path('show', {'id': articles.id}) }}\">
                            <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                    <images src=\"{{ articles.image }}\" class=\"card-images-top rounded\" alt=\"{{ articles.title }}\"   height=\"200\" />
                                    <div class=\"card-block\">
                                        <h4 class=\"card-title\">{{ articles.title }}</h4>
                                        <a href=\"{{ path('article_like', {'id': articles.id}) }}\" class=\"btn btn-link js-likes\">
                                            {% if app.user and articles.isLikedByUser(app.user) %}
                                                <i class=\"fas fa-thumbs-up\"></i>
                                            {% else %}
                                                <i class=\"far fa-thumbs-up\"></i>
                                            {% endif %}
                                            <span class=\"js-likes\">{{ articles.articleLikes | length }}</span>
                                            <span class=\"js-label\">J'aime</span>
                                        </a>
                                        <a href=\"{{ path('delete_article', {'id':articles.id}) }}\">
                                            <button class=\"btn btn-danger\">X</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <h1 class=\"mt-5\">Veuillez vous <a href=\"{{ path('security_login') }}\">Connecter</a> ou vous <a href=\"{{ path('security_registration') }}\">inscrire</a></h1>
    {% endif %}
{% endblock %}
", "article/my_articles.html.twig", "/var/www/public/DevLaon/templates/article/my_articles.html.twig");
    }
}
