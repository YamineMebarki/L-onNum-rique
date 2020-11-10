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

/* base.html.twig */
class __TwigTemplate_9896f84e970e9ce166d63374bc522776bd1188279b1cae912cafcfc60fe1ed83 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/images/laon.png"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"icon\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/css/animate.css"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\" rel=\"stylesheet\">
    <link href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" rel=\"stylesheet\" integrity=\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\" crossorigin=\"anonymous\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto right\">
            ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a>
                </li>
            ";
        } else {
            // line 38
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\">Nos Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
            echo "\">Créer un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_articles", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Mes articles</a>
                </li>
                ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "role", [], "any", false, false, false, 47) == "admin")) {
                // line 48
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_dashboard");
                echo "\">Dashboard</a>
                    </li>
                ";
            } else {
                // line 52
                echo "                ";
            }
            // line 53
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Se deconnecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a>
                </li>
            ";
        }
        // line 60
        echo "        </ul>
        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "        <a data-toggle=\"modal\" data-target=\"#parametreModal\"><i class=\"text-white fas fa-cog \" data-toggle='tooltip' data-placement='bottom' title=\"Paramétres\"></i></a>
        ";
        }
        // line 64
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            echo "            <div class=\"justify-content-between\">
            </div>
            <div id=\"parametreModal\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h2><i class=\"fas fa-cog \"><span class=\"font\">Parametre du compte</span></i></h2>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_pass", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\">Modifier mon mot de passe</button></a>
                        </div>
                        <div class=\"modal-footer\">
                            <a data-toggle=\"modal\" data-target=\"#delete\"> <button class=\"btn btn-danger\">Supprimer mon compte</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal supression user-->
            <div id=\"delete\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h3 class=\"text-center font\">Êtes vous sur de vouloir supprimer votre compte ?</h3>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <h4 class=\"text-danger font\">Une fois supprimer les données ne pourront êtres récupérées</h4>
                            <hr/>
                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user_id", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\">Confirmer</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal modifier pass-->
            <div id=\"modifyPass\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h3 class=\"text-center font\">Modifier mon mot de pass</h3>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <form method=\"POST\" action=\"\">
                                <div class=\"form-group font\"><label for=\"oldPass\">Veuillez entrer votre mot de pass actuel</label>
                                    <input type=\"password\" name=\"password\" id=\"oldPass\" class=\"form-control shadow\"/>
                                    <div class=\"passMessage text-danger\"></div>
                                </div>
                                <hr/>
                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                                <input type=\"submit\"  value=\"Confirmer\" name=\"prevalidPass\" class=\"btn btn-success\" id=\"prevalidPass\" /></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 123
        echo "    </div>
</nav>
<div class=\"text-center container-fluid\">
    <div class=\"row\">
        <div class=\"col-12 font\">
            ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128)) {
            // line 129
            echo "                <h4 class=\"mt-4 bold\">Hello  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "username", [], "any", false, false, false, 129), "html", null, true);
            echo "</h4>
            ";
        } else {
            // line 131
            echo "            ";
        }
        // line 132
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "            <div class=\"scroll-top-wrapper\" id=\"scroll\"><i class=\"fas fa-angle-up\"></i></div>
        </div>
    </div>
</div>
<p class=\"mt-4 bold text-center\"><span id=\"days\"></span> , <span id=\"date\"></span> <span id=\"month\"></span> <span id=\"years\"></span> ,  <span id=\"hour\"></span></p>
<div class=\"footer text-center\">
    <div class=\"mt-5\">
        <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rgpd");
        echo "\" class=\"text-black-50\">Politique de confidentialité</a> - <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention_legal");
        echo "\" class=\"text-black-50\">Mention légal</a>
        <p class=\"mt-3\"><a href=\"https://www.facebook.com/laon.numerique\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/images/facebook.png"), "html", null, true);
        echo "\" class=\"logos\" alt=\"\" /></a>  <a href=\"https://instagram.com/laon_numerique\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/images/instagram.png"), "html", null, true);
        echo "\" class=\"logos\" alt=\"\" /></a>  <a href=\"https://twitter.com/LaonNumerique?s=9\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/images/twitter.png"), "html", null, true);
        echo "\" class=\"twitter\" alt=\"\" /></a></p>
        <p class=\"mt-4\"><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/js/date.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/lib/scroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/js/captcha.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickBtnLike(event) {
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icone = this.querySelector('i');
        axios.get(url).then(function (response) {
            spanCount.textContent = response.data.likes;
            if(icone.classList.contains('fas')) {
                icone.classList.replace('fas', 'far');
            } else {
                icone.classList.replace('far', 'fas');
            }
        }).catch(function (error) {
            if(error.response.status === 403) {
                window.alert(\"Veuillez vous connecter pour pouvoir liker\")
            }else{
                window.alert(\"Une erreur s'est produite, merci de réessayez plus tard\")
            }
        })
    }
    document.querySelectorAll('a.js-likes').forEach(function (link) {
        link.addEventListener('click', onClickBtnLike);
    })
</script>
";
        // line 174
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "L@nNumérique";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
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

    // line 174
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 174,  378 => 132,  359 => 13,  341 => 12,  329 => 175,  327 => 174,  297 => 147,  293 => 146,  289 => 145,  278 => 141,  272 => 140,  263 => 133,  260 => 132,  257 => 131,  251 => 129,  249 => 128,  242 => 123,  211 => 95,  188 => 75,  176 => 65,  173 => 64,  169 => 62,  167 => 61,  164 => 60,  158 => 57,  152 => 54,  149 => 53,  146 => 52,  140 => 49,  137 => 48,  135 => 47,  130 => 45,  124 => 42,  118 => 39,  115 => 38,  109 => 35,  103 => 32,  97 => 29,  94 => 28,  92 => 27,  83 => 21,  71 => 13,  69 => 12,  63 => 9,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('dist/assets/images/laon.png') }}\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('dist/assets/css/style.css') }}\" />
    <link rel=\"icon\"  href=\"{{ asset('dist/assets/css/animate.css') }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\" rel=\"stylesheet\">
    <link href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" rel=\"stylesheet\" integrity=\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\" crossorigin=\"anonymous\" />
    {% block stylesheets %}{% endblock %}
    <title>{% block title %}L@nNumérique{% endblock %}</title>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto right\">
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
        {% if app.user  %}
        <a data-toggle=\"modal\" data-target=\"#parametreModal\"><i class=\"text-white fas fa-cog \" data-toggle='tooltip' data-placement='bottom' title=\"Paramétres\"></i></a>
        {% endif %}
        {% if app.user  %}
            <div class=\"justify-content-between\">
            </div>
            <div id=\"parametreModal\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h2><i class=\"fas fa-cog \"><span class=\"font\">Parametre du compte</span></i></h2>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <a href=\"{{ path('modif_pass', {'id':app.user.id}) }}\"><button class=\"btn btn-success\">Modifier mon mot de passe</button></a>
                        </div>
                        <div class=\"modal-footer\">
                            <a data-toggle=\"modal\" data-target=\"#delete\"> <button class=\"btn btn-danger\">Supprimer mon compte</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal supression user-->
            <div id=\"delete\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h3 class=\"text-center font\">Êtes vous sur de vouloir supprimer votre compte ?</h3>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <h4 class=\"text-danger font\">Une fois supprimer les données ne pourront êtres récupérées</h4>
                            <hr/>
                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                                <a href=\"{{ path('delete_user_id', {'id': app.user.id}) }}\"><button class=\"btn btn-success\">Confirmer</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal modifier pass-->
            <div id=\"modifyPass\" class=\"modal center\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content shadow\">
                        <div class=\"modal-header\">
                            <h3 class=\"text-center font\">Modifier mon mot de pass</h3>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"> &times; </button>
                        </div>
                        <div class=\"modal-body\">
                            <form method=\"POST\" action=\"\">
                                <div class=\"form-group font\"><label for=\"oldPass\">Veuillez entrer votre mot de pass actuel</label>
                                    <input type=\"password\" name=\"password\" id=\"oldPass\" class=\"form-control shadow\"/>
                                    <div class=\"passMessage text-danger\"></div>
                                </div>
                                <hr/>
                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                                <input type=\"submit\"  value=\"Confirmer\" name=\"prevalidPass\" class=\"btn btn-success\" id=\"prevalidPass\" /></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
</nav>
<div class=\"text-center container-fluid\">
    <div class=\"row\">
        <div class=\"col-12 font\">
            {% if app.user %}
                <h4 class=\"mt-4 bold\">Hello  {{ app.user.username }}</h4>
            {% else %}
            {% endif %}
            {% block body %}{% endblock %}
            <div class=\"scroll-top-wrapper\" id=\"scroll\"><i class=\"fas fa-angle-up\"></i></div>
        </div>
    </div>
</div>
<p class=\"mt-4 bold text-center\"><span id=\"days\"></span> , <span id=\"date\"></span> <span id=\"month\"></span> <span id=\"years\"></span> ,  <span id=\"hour\"></span></p>
<div class=\"footer text-center\">
    <div class=\"mt-5\">
        <a href=\"{{ path('rgpd') }}\" class=\"text-black-50\">Politique de confidentialité</a> - <a href=\"{{ path('mention_legal') }}\" class=\"text-black-50\">Mention légal</a>
        <p class=\"mt-3\"><a href=\"https://www.facebook.com/laon.numerique\"><img src=\"{{ asset('dist/assets/images/facebook.png') }}\" class=\"logos\" alt=\"\" /></a>  <a href=\"https://instagram.com/laon_numerique\"><img src=\"{{ asset('dist/assets/images/instagram.png') }}\" class=\"logos\" alt=\"\" /></a>  <a href=\"https://twitter.com/LaonNumerique?s=9\"><img src=\"{{ asset('dist/assets/images/twitter.png') }}\" class=\"twitter\" alt=\"\" /></a></p>
        <p class=\"mt-4\"><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\"{{ asset('dist/assets/js/date.js') }}\"></script>
<script src=\"{{ asset('dist/assets/lib/scroll.js') }}\"></script>
<script src=\"{{ asset('dist/assets/js/captcha.js') }}\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickBtnLike(event) {
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icone = this.querySelector('i');
        axios.get(url).then(function (response) {
            spanCount.textContent = response.data.likes;
            if(icone.classList.contains('fas')) {
                icone.classList.replace('fas', 'far');
            } else {
                icone.classList.replace('far', 'fas');
            }
        }).catch(function (error) {
            if(error.response.status === 403) {
                window.alert(\"Veuillez vous connecter pour pouvoir liker\")
            }else{
                window.alert(\"Une erreur s'est produite, merci de réessayez plus tard\")
            }
        })
    }
    document.querySelectorAll('a.js-likes').forEach(function (link) {
        link.addEventListener('click', onClickBtnLike);
    })
</script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/public/L@nNumérique/templates/base.html.twig");
    }
}
