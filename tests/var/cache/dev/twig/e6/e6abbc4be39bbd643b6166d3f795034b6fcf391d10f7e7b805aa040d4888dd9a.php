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

/* article/show_user.html.twig */
class __TwigTemplate_a6df64d3e0b4511edaf0dcc2c6ee33ae88a2ec6d3c4aa9dae87244dca8bbacfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show_user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show_user.html.twig", 1);
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

        echo "Dashboard/User/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
            echo "        <div class=\"col-2\">
            <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_dashboard");
            echo "\"><button class=\"btn btn-warning\">Retour</button></a>
        </div>
        <hr/>
        <div class=\"col-xl-4 offset-xl-4 col-lg-7 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12\">
            <table class=\"table-responsive text-center table table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Age</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Role</th>
                    <th scope=\"col\">Supp</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</th>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "age", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "role", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                            <button class=\"btn btn-danger\">X</button>
                        </a>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr/>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2><span class=\"bold\">";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</span>
                        ";
            // line 43
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 43, $this->source); })()) > 1)) {
                // line 44
                echo "                            articles publiés
                        ";
            } else {
                // line 46
                echo "                            article publié
                        ";
            }
            // line 48
            echo "                    </h2>
                    <div class=\"mv\">
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["articles"]);
            foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
                // line 51
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
                                <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                                    <div class=\"border border-dark rounded p-2 shadow\">
                                        <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "image", [], "any", false, false, false, 54), "html", null, true);
                echo "\" class=\"card-img-top rounded\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 54), "html", null, true);
                echo "\"   height=\"200\" />
                                        <div class=\"card-block\">
                                            <h4 class=\"card-title\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 56), "html", null, true);
                echo "</h4>
                                            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"btn btn-link js-likes\">
                                                ";
                // line 58
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58) && twig_get_attribute($this->env, $this->source, $context["articles"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)], "method", false, false, false, 58))) {
                    // line 59
                    echo "                                                    <i class=\"fas fa-thumbs-up\"></i>
                                                ";
                } else {
                    // line 61
                    echo "                                                    <i class=\"far fa-thumbs-up\"></i>
                                                ";
                }
                // line 63
                echo "                                                <span class=\"js-likes\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articles"], "articleLikes", [], "any", false, false, false, 63)), "html", null, true);
                echo "</span>
                                                <span class=\"js-label\">J'aime</span>
                                            </a>
                                            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["articles"], "id", [], "any", false, false, false, 66)]), "html", null, true);
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
            // line 74
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 79
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
        return "article/show_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  227 => 74,  213 => 66,  206 => 63,  202 => 61,  198 => 59,  196 => 58,  192 => 57,  188 => 56,  181 => 54,  174 => 51,  170 => 50,  166 => 48,  162 => 46,  158 => 44,  156 => 43,  152 => 42,  136 => 29,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  95 => 6,  92 => 5,  89 => 4,  79 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Dashboard/User/{{ user.id }}{% endblock %}
{% block body %}
    {% if app.user %}
        <div class=\"col-2\">
            <a href=\"{{ path(\"security_dashboard\") }}\"><button class=\"btn btn-warning\">Retour</button></a>
        </div>
        <hr/>
        <div class=\"col-xl-4 offset-xl-4 col-lg-7 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12\">
            <table class=\"table-responsive text-center table table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Age</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Role</th>
                    <th scope=\"col\">Supp</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">{{ user.id }}</th>
                    <td>{{ user.username }}</td>
                    <td>{{ user.age }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.role }}</td>
                    <td>
                        <a href=\"{{ path('delete_user', {'id': user.id}) }}\">
                            <button class=\"btn btn-danger\">X</button>
                        </a>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr/>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2><span class=\"bold\">{{ count }}</span>
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
", "article/show_user.html.twig", "/var/www/public/DevLaon/templates/article/show_user.html.twig");
    }
}
