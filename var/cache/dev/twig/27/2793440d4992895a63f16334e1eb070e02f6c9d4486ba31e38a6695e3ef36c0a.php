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

/* article/articles.html.twig */
class __TwigTemplate_8aa5e8e9010cbc46fd041b4bc4ffd6d218d67808a800374e0d8f8cb40efabb80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/articles.html.twig", 1);
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

        echo "Nos articles";
        
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
        echo "    <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-12\">
    <form action=\"\" method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"search\">Recherche</label>
            <input type=\"text\" name=\"search\" class=\"form-control\" id=\"search\" value=\"\" />
        </div>
        <div class=\"form-group\">
            <input type=\"submit\" name=\"searchOk\" class=\"btn btn-success\" id=\"searchok\" value=\"Rechercher\" />
        </div>
    </form>
    <h1 class=\"mt-3\">Nos Articles,</h1>
    <div>
        <p>par categories :</p>
        <a href=\"#developpeur\" class=\"text-black-50\">Developpeur</a> -
        <a href=\"#linux\" class=\"text-black-50\">Linux</a> -
        <a href=\"#android\" class=\"text-black-50\">Android</a> -
        <a href=\"#windows\" class=\"text-black-50\">Windows</a>
    </div>
    <hr/>
    <div class=\"mv\">
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "        <section id=\"developpeur\"  class=\"mt-5\">
            <h2  class=\"col-md-8\">Article Developeur</h2>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 30
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30) == "developpeur")) {
                    // line 31
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 36), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 38
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)], "method", false, false, false, 38))) {
                        // line 39
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 41
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 43
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 43)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 51
                    echo "                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </section>
        <section id=\"linux\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Linux</h2>
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 57
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57) == "linux")) {
                    // line 58
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 61), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 63), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 65
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)], "method", false, false, false, 65))) {
                        // line 66
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 68
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 70
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 70)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 78
                    echo "                ";
                }
                // line 79
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </section>
        <section  id=\"android\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Android</h2>
            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 84
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 84), "title", [], "any", false, false, false, 84) == "android")) {
                    // line 85
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 88), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 88), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 90), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)], "method", false, false, false, 92))) {
                        // line 93
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 95
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 97
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 97)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 105
                    echo "                ";
                }
                // line 106
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        </section>
        <section id=\"windows\" class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Windows</h2>
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 111
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 111), "title", [], "any", false, false, false, 111) == "windows")) {
                    // line 112
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 115), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 115), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 117), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 119
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119)], "method", false, false, false, 119))) {
                        // line 120
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 122
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 124
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 124)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 132
                    echo "                ";
                }
                // line 133
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        </section>
        </div>
        </div>
        </div>
        </div>
    ";
        } else {
            // line 140
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
        return "article/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 140,  371 => 134,  365 => 133,  362 => 132,  350 => 124,  346 => 122,  342 => 120,  340 => 119,  336 => 118,  332 => 117,  325 => 115,  318 => 112,  315 => 111,  311 => 110,  306 => 107,  300 => 106,  297 => 105,  285 => 97,  281 => 95,  277 => 93,  275 => 92,  271 => 91,  267 => 90,  260 => 88,  253 => 85,  250 => 84,  246 => 83,  241 => 80,  235 => 79,  232 => 78,  220 => 70,  216 => 68,  212 => 66,  210 => 65,  206 => 64,  202 => 63,  195 => 61,  188 => 58,  185 => 57,  181 => 56,  176 => 53,  170 => 52,  167 => 51,  155 => 43,  151 => 41,  147 => 39,  145 => 38,  141 => 37,  137 => 36,  132 => 34,  125 => 31,  122 => 30,  118 => 29,  114 => 27,  112 => 26,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Nos articles{% endblock %}
{% block body %}
    <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-12\">
    <form action=\"\" method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"search\">Recherche</label>
            <input type=\"text\" name=\"search\" class=\"form-control\" id=\"search\" value=\"\" />
        </div>
        <div class=\"form-group\">
            <input type=\"submit\" name=\"searchOk\" class=\"btn btn-success\" id=\"searchok\" value=\"Rechercher\" />
        </div>
    </form>
    <h1 class=\"mt-3\">Nos Articles,</h1>
    <div>
        <p>par categories :</p>
        <a href=\"#developpeur\" class=\"text-black-50\">Developpeur</a> -
        <a href=\"#linux\" class=\"text-black-50\">Linux</a> -
        <a href=\"#android\" class=\"text-black-50\">Android</a> -
        <a href=\"#windows\" class=\"text-black-50\">Windows</a>
    </div>
    <hr/>
    <div class=\"mv\">
    {% if app.user %}
        <section id=\"developpeur\"  class=\"mt-5\">
            <h2  class=\"col-md-8\">Article Developeur</h2>
            {% for article in articles %}
                {% if article.category.title == \"developpeur\" %}
                    <a href=\"{{ path('show', {'id': article.id}) }}\">
                        <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"{{ article.image }}\" class=\"card-images-top rounded\" alt=\"\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">{{ article.title }}</h4>
                                    <a href=\"{{ path('article_like', {'id': article.id}) }}\" class=\"btn btn-link js-likes\">
                                        {% if app.user and article.isLikedByUser(app.user) %}
                                            <i class=\"fas fa-thumbs-up\"></i>
                                        {% else %}
                                            <i class=\"far fa-thumbs-up\"></i>
                                        {% endif %}
                                        <span class=\"js-likes\">{{ article.articleLikes | length }}</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                {% else %}
                {% endif %}
            {% endfor %}
        </section>
        <section id=\"linux\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Linux</h2>
            {% for article in articles %}
                {% if article.category.title == \"linux\" %}
                    <a href=\"{{ path('show', {'id': article.id}) }}\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"{{ article.image }}\" class=\"card-images-top rounded\" alt=\"{{ article.title }}\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">{{ article.title }}</h4>
                                    <a href=\"{{ path('article_like', {'id': article.id}) }}\" class=\"btn btn-link js-likes\">
                                        {% if app.user and article.isLikedByUser(app.user) %}
                                            <i class=\"fas fa-thumbs-up\"></i>
                                        {% else %}
                                            <i class=\"far fa-thumbs-up\"></i>
                                        {% endif %}
                                        <span class=\"js-likes\">{{ article.articleLikes | length }}</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                {% else %}
                {% endif %}
            {% endfor %}
        </section>
        <section  id=\"android\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Android</h2>
            {% for article in articles %}
                {% if article.category.title == \"android\" %}
                    <a href=\"{{ path('show', {'id': article.id}) }}\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"{{ article.image }}\" class=\"card-images-top rounded\" alt=\"{{ article.title }}\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">{{ article.title }}</h4>
                                    <a href=\"{{ path('article_like', {'id': article.id}) }}\" class=\"btn btn-link js-likes\">
                                        {% if app.user and article.isLikedByUser(app.user) %}
                                            <i class=\"fas fa-thumbs-up\"></i>
                                        {% else %}
                                            <i class=\"far fa-thumbs-up\"></i>
                                        {% endif %}
                                        <span class=\"js-likes\">{{ article.articleLikes | length }}</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                {% else %}
                {% endif %}
            {% endfor %}
        </section>
        <section id=\"windows\" class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Windows</h2>
            {% for article in articles %}
                {% if article.category.title == \"windows\" %}
                    <a href=\"{{ path('show', {'id': article.id}) }}\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"{{ article.image }}\" class=\"card-images-top rounded\" alt=\"{{ article.title }}\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">{{ article.title }}</h4>
                                    <a href=\"{{ path('article_like', {'id': article.id}) }}\" class=\"btn btn-link js-likes\">
                                        {% if app.user and article.isLikedByUser(app.user) %}
                                            <i class=\"fas fa-thumbs-up\"></i>
                                        {% else %}
                                            <i class=\"far fa-thumbs-up\"></i>
                                        {% endif %}
                                        <span class=\"js-likes\">{{ article.articleLikes | length }}</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                {% else %}
                {% endif %}
            {% endfor %}
        </section>
        </div>
        </div>
        </div>
        </div>
    {% else %}
        <h1 class=\"mt-5\">Veuillez vous <a href=\"{{ path('security_login') }}\">Connecter</a> ou vous <a href=\"{{ path('security_registration') }}\">inscrire</a></h1>
    {% endif %}
{% endblock %}
", "article/articles.html.twig", "/var/www/public/DevLaon/templates/article/articles.html.twig");
    }
}
