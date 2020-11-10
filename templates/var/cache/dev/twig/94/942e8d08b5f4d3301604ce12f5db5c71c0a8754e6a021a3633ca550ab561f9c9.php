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

/* article/show.html.twig */
class __TwigTemplate_3c82be490794e1e5b47b0cc7be6631b3c841650cfde5cd2353a3a74c68c15ee6 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        L@nNumérique
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <div class=\"col-2\">
        <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\"><button class=\"btn btn-warning\">Nos articles</button></a>
    </div>
";
        } else {
            // line 16
            echo "    <p class=\"bold\">Pour pouvoir consulter plus d'article veuillez vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">inscrire</a> ou vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">connecter.</a></p>
";
        }
        // line 18
        echo "<hr/>
<div>
    <h1 class=\"bold\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo " </h1>
    <images src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"rounded responsive\">
    <div class=\"row\">
        <div CLASS=\"container\">
            <div class=\"col-12\">
                <p class=\"font\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25);
        echo "</p>
            </div>
        </div>
    </div>
    <p>Détails :</p>
    <p class=\"metadata\">Écrit le ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "createAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "createAt", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        echo "</p>
    <p>dans la categorie ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "category", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33))) {
                // line 34
                echo "            <div class=\"col-4 mt-2\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
            </div>
        ";
            } else {
                // line 38
                echo "        ";
            }
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "    ";
        }
        // line 41
        echo "</div>
<hr/>
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "    <h3 class=\"mt-2\">Laisser un commentaire</h3>
    ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 45, $this->source); })()), 'form_start');
            echo "
    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 46, $this->source); })()), "content", [], "any", false, false, false, 46), 'row', ["label" => "Votre commentaire"]);
            echo "
    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
";
        } else {
            // line 50
            echo "    <small>Pour pouvoir réagir ou laisser un commentaire veuillez vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">connecter</a> ou vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">inscrire</a> gratuitement.</small>
";
        }
        // line 52
        echo "<hr/>
<div class=\"center\">
    <p class=\"font\">Patager cet article sur votre profil Facebook</p>
    <div class=\"fb-share-button\" data-href=\"http://laon-numérique.fr/article/";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\" data-layout=\"button\" data-size=\"large\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fxn--laon-numérique-ihb.fr%2Farticle%2F";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" class=\"btn btn-link js-likes\">
            ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57) && twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 57, $this->source); })()), "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)], "method", false, false, false, 57))) {
            // line 58
            echo "                <i class=\"fas fa-thumbs-up\"></i>
            ";
        } else {
            // line 60
            echo "                <i class=\"far fa-thumbs-up\"></i>
            ";
        }
        // line 62
        echo "            <span class=\"js-likes\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "articleLikes", [], "any", false, false, false, 62)), "html", null, true);
        echo "</span>
            <span class=\"js-label\">J'aime</span>
        </a>
        <hr/>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <section id=\"commentaires\">
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 70, $this->source); })()), "comments", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            echo "                            <div class=\"comment\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <h4>Détails</h4>
                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                        <p>(<small>écrit le ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "createAt", [], "any", false, false, false, 76), "d/m/y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 76), "H:i"), "html", null, true);
            echo " </small>)</p>
                                    </div>
                                    <div class=\"col\">
                                        <h4>Commentaire :</h4>
                                        ";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 80);
            echo "
                                    </div>
                                    ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "role", [], "any", false, false, false, 82) == "admin")) {
                // line 83
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">
                                            <button class=\"btn btn-danger\">supprimer</button>
                                        </a>
                                    ";
            } else {
                // line 87
                echo "                                    ";
            }
            // line 88
            echo "                                </div>
                            </div>
                            <hr/>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </section>
                </div>
            </div>
        </div>
        <hr/>
        <div id=\"fb-root\"></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 100,  317 => 99,  301 => 92,  292 => 88,  289 => 87,  281 => 83,  279 => 82,  274 => 80,  265 => 76,  261 => 75,  255 => 71,  251 => 70,  239 => 62,  235 => 60,  231 => 58,  229 => 57,  225 => 56,  219 => 55,  214 => 52,  206 => 50,  201 => 48,  196 => 46,  192 => 45,  189 => 44,  187 => 43,  183 => 41,  180 => 40,  177 => 39,  174 => 38,  168 => 35,  165 => 34,  162 => 33,  160 => 32,  154 => 31,  148 => 30,  140 => 25,  131 => 21,  127 => 20,  123 => 18,  115 => 16,  109 => 13,  106 => 12,  104 => 11,  94 => 10,  82 => 7,  76 => 5,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme formComment 'bootstrap_4_layout.html.twig' %}
{% block title %}
    {% if app.user %}
        {{ article.title }}
    {% else %}
        L@nNumérique
    {% endif %}
{% endblock %}
{% block body %}
{% if app.user %}
    <div class=\"col-2\">
        <a href=\"{{ path(\"articles\") }}\"><button class=\"btn btn-warning\">Nos articles</button></a>
    </div>
{% else %}
    <p class=\"bold\">Pour pouvoir consulter plus d'article veuillez vous <a href=\"{{ path('security_registration') }}\">inscrire</a> ou vous <a href=\"{{ path('security_login') }}\">connecter.</a></p>
{% endif %}
<hr/>
<div>
    <h1 class=\"bold\"> {{ article.title }} </h1>
    <images src=\"{{ article.image }}\" alt=\"{{ article.name }}\" class=\"rounded responsive\">
    <div class=\"row\">
        <div CLASS=\"container\">
            <div class=\"col-12\">
                <p class=\"font\">{{ article.content | raw }}</p>
            </div>
        </div>
    </div>
    <p>Détails :</p>
    <p class=\"metadata\">Écrit le {{ article.createAt | date('d/m/Y') }} à {{ article.createAt | date('H:i') }}</p>
    <p>dans la categorie {{ article.category.title }} par {{ article.name }}</p>
    {% if app.user %}
        {% if app.user.username == article.name %}
            <div class=\"col-4 mt-2\">
                <a href=\"{{ path('edit', {'id':article.id}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
            </div>
        {% else %}
        {% endif %}
    {% else %}
    {% endif %}
</div>
<hr/>
{% if app.user %}
    <h3 class=\"mt-2\">Laisser un commentaire</h3>
    {{ form_start(formComment) }}
    {{ form_row(formComment.content, {'label': 'Votre commentaire'}) }}
    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    {{ form_end(formComment) }}
{% else %}
    <small>Pour pouvoir réagir ou laisser un commentaire veuillez vous <a href=\"{{ path('security_login') }}\">connecter</a> ou vous <a href=\"{{ path('security_registration') }}\">inscrire</a> gratuitement.</small>
{% endif %}
<hr/>
<div class=\"center\">
    <p class=\"font\">Patager cet article sur votre profil Facebook</p>
    <div class=\"fb-share-button\" data-href=\"http://laon-numérique.fr/article/{{ article.id }}\" data-layout=\"button\" data-size=\"large\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fxn--laon-numérique-ihb.fr%2Farticle%2F{{ article.id }}&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
    <a href=\"{{ path('article_like', {'id': article.id}) }}\" class=\"btn btn-link js-likes\">
            {% if app.user and article.isLikedByUser(app.user) %}
                <i class=\"fas fa-thumbs-up\"></i>
            {% else %}
                <i class=\"far fa-thumbs-up\"></i>
            {% endif %}
            <span class=\"js-likes\">{{ article.articleLikes | length }}</span>
            <span class=\"js-label\">J'aime</span>
        </a>
        <hr/>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <section id=\"commentaires\">
                        {% for comment in article.comments %}
                            <div class=\"comment\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <h4>Détails</h4>
                                        {{ comment.author }}
                                        <p>(<small>écrit le {{ article.createAt| date('d/m/y') }} à {{ comment.createdAt| date('H:i') }} </small>)</p>
                                    </div>
                                    <div class=\"col\">
                                        <h4>Commentaire :</h4>
                                        {{ comment.content | raw }}
                                    </div>
                                    {% if app.user.role == 'admin' %}
                                        <a href=\"{{ path('delete_comment', {'id': comment.id }) }}\">
                                            <button class=\"btn btn-danger\">supprimer</button>
                                        </a>
                                    {% else %}
                                    {% endif %}
                                </div>
                            </div>
                            <hr/>
                        {% endfor %}
                    </section>
                </div>
            </div>
        </div>
        <hr/>
        <div id=\"fb-root\"></div>
    {% endblock %}
{% block javascripts %}
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0\"></script>
    {% endblock %}", "article/show.html.twig", "/var/www/public/DevLaon/templates/article/show.html.twig");
    }
}
