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
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <section id=\"developpeur\"  class=\"mt-5\">
            <h2  class=\"col-md-8\">Article Developeur</h2>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 21
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21) == "developpeur")) {
                    // line 22
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 25), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 27), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 29
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)], "method", false, false, false, 29))) {
                        // line 30
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 32
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 34
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 34)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 42
                    echo "                ";
                }
                // line 43
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </section>
        <section id=\"linux\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Linux</h2>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 48
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48) == "linux")) {
                    // line 49
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 52), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 54), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 56
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)], "method", false, false, false, 56))) {
                        // line 57
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 59
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 61
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 61)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 69
                    echo "                ";
                }
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </section>
        <section  id=\"android\"  class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Android</h2>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 75
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75) == "android")) {
                    // line 76
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 79), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 79), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 81), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 83
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83)], "method", false, false, false, 83))) {
                        // line 84
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 86
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 88
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 88)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 96
                    echo "                ";
                }
                // line 97
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </section>
        <section id=\"windows\" class=\"mt-5\">
            <h2 class=\"col-md-8\">Article Windows</h2>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 102
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 102), "title", [], "any", false, false, false, 102) == "windows")) {
                    // line 103
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                    echo "\">
                        <div class=\"mb-3 col-xs-2 col-sm-6 col-md-8\">
                            <div class=\"border border-dark rounded p-2 shadow\">
                                <images src=\"";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 106), "html", null, true);
                    echo "\" class=\"card-images-top rounded\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 106), "html", null, true);
                    echo "\"   height=\"200\" />
                                <div class=\"card-block\">
                                    <h4 class=\"card-title lien\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 108), "html", null, true);
                    echo "</h4>
                                    <a href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                    echo "\" class=\"btn btn-link js-likes\">
                                        ";
                    // line 110
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110)], "method", false, false, false, 110))) {
                        // line 111
                        echo "                                            <i class=\"fas fa-thumbs-up\"></i>
                                        ";
                    } else {
                        // line 113
                        echo "                                            <i class=\"far fa-thumbs-up\"></i>
                                        ";
                    }
                    // line 115
                    echo "                                        <span class=\"js-likes\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 115)), "html", null, true);
                    echo "</span>
                                        <span class=\"js-label\">J'aime</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
                } else {
                    // line 123
                    echo "                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </section>
        </div>
        </div>
        </div>
        </div>
    ";
        } else {
            // line 131
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
        return array (  370 => 131,  362 => 125,  356 => 124,  353 => 123,  341 => 115,  337 => 113,  333 => 111,  331 => 110,  327 => 109,  323 => 108,  316 => 106,  309 => 103,  306 => 102,  302 => 101,  297 => 98,  291 => 97,  288 => 96,  276 => 88,  272 => 86,  268 => 84,  266 => 83,  262 => 82,  258 => 81,  251 => 79,  244 => 76,  241 => 75,  237 => 74,  232 => 71,  226 => 70,  223 => 69,  211 => 61,  207 => 59,  203 => 57,  201 => 56,  197 => 55,  193 => 54,  186 => 52,  179 => 49,  176 => 48,  172 => 47,  167 => 44,  161 => 43,  158 => 42,  146 => 34,  142 => 32,  138 => 30,  136 => 29,  132 => 28,  128 => 27,  123 => 25,  116 => 22,  113 => 21,  109 => 20,  105 => 18,  103 => 17,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Nos articles{% endblock %}
{% block body %}
    <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-12\">
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
