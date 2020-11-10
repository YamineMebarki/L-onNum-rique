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

/* var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php */
class __TwigTemplate_c13bc2d83ed73184e85a07dbeb2d28592b9194ec81231eb0ab60197905914848 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php"));

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

/* base.html.twig */
class __TwigTemplate_802cd772767671e47f8055560a1cc523d0ae494171ac2b913e5b8ed7a3650e16 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
            'stylesheets' => [\$this, 'block_stylesheets'],
            'title' => [\$this, 'block_title'],
            'body' => [\$this, 'block_body'],
            'javascripts' => [\$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"base.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"base.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html lang=\\\"fr\\\">
<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1, shrink-to-fit=no\\\">
    <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"\";
        // line 6
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/img/laon.png\"), \"html\", null, true);
        echo \"\\\" />
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\\\" integrity=\\\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\\\" crossorigin=\\\"anonymous\\\">
    <link rel=\\\"stylesheet\\\" href=\\\"\";
        // line 8
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/css/style.css\"), \"html\", null, true);
        echo \"\\\" />
    <link rel=\\\"icon\\\"  href=\\\"\";
        // line 9
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/css/animate.css\"), \"html\", null, true);
        echo \"\\\" />
    <link href=\\\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\\\" rel=\\\"stylesheet\\\">
    <link href=\\\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\\\" rel=\\\"stylesheet\\\" integrity=\\\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\\\" crossorigin=\\\"anonymous\\\" />
    \";
        // line 12
        \$this->displayBlock('stylesheets', \$context, \$blocks);
        // line 13
        echo \"    <title>\";
        \$this->displayBlock('title', \$context, \$blocks);
        echo \"</title>
    <script src=\\\"https://code.jquery.com/jquery-3.3.1.slim.min.js\\\" integrity=\\\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\\\" integrity=\\\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\\\" integrity=\\\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://code.jquery.com/jquery-3.4.1.js\\\"></script>
</head>
<body>
<nav class=\\\"navbar navbar-expand-lg navbar-dark bg-dark\\\">
    <a class=\\\"navbar-brand\\\" href=\\\"\";
        // line 21
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"home\");
        echo \"\\\">Accueil</a>
    <button class=\\\"navbar-toggler\\\" type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarColor02\\\" aria-controls=\\\"navbarColor02\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\">
        <span class=\\\"navbar-toggler-icon\\\"></span>
    </button>
    <div class=\\\"collapse navbar-collapse\\\" id=\\\"navbarColor02\\\">
        <ul class=\\\"navbar-nav mr-auto\\\">
            \";
        // line 27
        if ( !twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 27, \$this->source); })()), \"user\", [], \"any\", false, false, false, 27)) {
            // line 28
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 29
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_registration\");
            echo \"\\\">Inscription</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 32
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_login\");
            echo \"\\\">Se connecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 35
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"contact\");
            echo \"\\\">Contact</a>
                </li>
            \";
        } else {
            // line 38
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 39
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"articles\");
            echo \"\\\">Nos Articles</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 42
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"create\");
            echo \"\\\">Créer un article</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 45
            echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"my_articles\", [\"name\" => twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 45, \$this->source); })()), \"user\", [], \"any\", false, false, false, 45), \"username\", [], \"any\", false, false, false, 45)]), \"html\", null, true);
            echo \"\\\">Mes articles</a>
                </li>
                \";
            // line 47
            if ((twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 47, \$this->source); })()), \"user\", [], \"any\", false, false, false, 47), \"role\", [], \"any\", false, false, false, 47) == \"admin\")) {
                // line 48
                echo \"                    <li class=\\\"nav-item\\\">
                        <a class=\\\"nav-link\\\" href=\\\"\";
                // line 49
                echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_dashboard\");
                echo \"\\\">Dashboard</a>
                    </li>
                \";
            } else {
                // line 52
                echo \"                \";
            }
            // line 53
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 54
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_logout\");
            echo \"\\\">Se deconnecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 57
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"contact\");
            echo \"\\\">Contact</a>
                </li>
            \";
        }
        // line 60
        echo \"        </ul>
    </div>
</nav>
<div class=\\\"text-center container-fluid\\\">
    <div class=\\\"row\\\">
        <div class=\\\"col-12 font\\\">
            \";
        // line 66
        if (twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 66, \$this->source); })()), \"user\", [], \"any\", false, false, false, 66)) {
            // line 67
            echo \"                <h4 class=\\\"mt-4 bold\\\">Hello  \";
            echo twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 67, \$this->source); })()), \"user\", [], \"any\", false, false, false, 67), \"username\", [], \"any\", false, false, false, 67), \"html\", null, true);
            echo \"</h4>
            \";
        } else {
            // line 69
            echo \"            \";
        }
        // line 70
        echo \"            <p class=\\\"mt-4 bold\\\"><span id=\\\"days\\\"></span> , <span id=\\\"date\\\"></span> <span id=\\\"month\\\"></span> <span id=\\\"years\\\"></span> ,  <span id=\\\"hour\\\"></span></p>
            \";
        // line 71
        \$this->displayBlock('body', \$context, \$blocks);
        // line 72
        echo \"            <div class=\\\"scroll-top-wrapper\\\" id=\\\"scroll\\\"><i class=\\\"fas fa-angle-up\\\"></i></div>
        </div>
    </div>
</div>
<div class=\\\"footer text-center\\\">
    <div class=\\\"mt-5\\\">
        <a href=\\\"\";
        // line 78
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"rgpd\");
        echo \"\\\" class=\\\"text-black-50\\\"0000>Politique de confidentialité</a> - <a href=\\\"\";
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"mention_legal\");
        echo \"\\\" class=\\\"text-black-50\\\">Mention légal</a>
        <p><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\\\"\";
        // line 82
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/js/date.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"\";
        // line 83
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/lib/scroll.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"\";
        // line 84
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/js/captcha.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"https://unpkg.com/axios/dist/axios.min.js\\\"></script>
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
                window.alert(\\\"Veuillez vous connecter pour pouvoir liker\\\")
            }else{
                window.alert(\\\"Une erreur s'est produite, merci de réessayez plus tard\\\")
            }
        })
    }
    document.querySelectorAll('a.js-likes').forEach(function (link) {
        link.addEventListener('click', onClickBtnLike);
    })
</script>
\";
        // line 111
        \$this->displayBlock('javascripts', \$context, \$blocks);
        // line 112
        echo \"</body>
</html>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"stylesheets\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"stylesheets\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        echo \"L@nNumérique\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
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

    // line 111
    public function block_javascripts(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"javascripts\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"javascripts\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return \"base.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 111,  294 => 71,  275 => 13,  257 => 12,  245 => 112,  243 => 111,  213 => 84,  209 => 83,  205 => 82,  196 => 78,  188 => 72,  186 => 71,  183 => 70,  180 => 69,  174 => 67,  172 => 66,  164 => 60,  158 => 57,  152 => 54,  149 => 53,  146 => 52,  140 => 49,  137 => 48,  135 => 47,  130 => 45,  124 => 42,  118 => 39,  115 => 38,  109 => 35,  103 => 32,  97 => 29,  94 => 28,  92 => 27,  83 => 21,  71 => 13,  69 => 12,  63 => 9,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html lang=\\\"fr\\\">
<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1, shrink-to-fit=no\\\">
    <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/img/laon.png"), "html", null, true);
        echo "\\\" />
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\\\" integrity=\\\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\\\" crossorigin=\\\"anonymous\\\">
    <link rel=\\\"stylesheet\\\" href=\\\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/css/style.css"), "html", null, true);
        echo "\\\" />
    <link rel=\\\"icon\\\"  href=\\\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/css/animate.css"), "html", null, true);
        echo "\\\" />
    <link href=\\\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\\\" rel=\\\"stylesheet\\\">
    <link href=\\\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\\\" rel=\\\"stylesheet\\\" integrity=\\\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\\\" crossorigin=\\\"anonymous\\\" />
    ";
        // line 357
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 358
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\\\"https://code.jquery.com/jquery-3.3.1.slim.min.js\\\" integrity=\\\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\\\" integrity=\\\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\\\" integrity=\\\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://code.jquery.com/jquery-3.4.1.js\\\"></script>
</head>
<body>
<nav class=\\\"navbar navbar-expand-lg navbar-dark bg-dark\\\">
    <a class=\\\"navbar-brand\\\" href=\\\"";
        // line 366
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\\\">Accueil</a>
    <button class=\\\"navbar-toggler\\\" type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarColor02\\\" aria-controls=\\\"navbarColor02\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\">
        <span class=\\\"navbar-toggler-icon\\\"></span>
    </button>
    <div class=\\\"collapse navbar-collapse\\\" id=\\\"navbarColor02\\\">
        <ul class=\\\"navbar-nav mr-auto\\\">
            ";
        // line 372
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 372, $this->source); })()), "user", [], "any", false, false, false, 372)) {
            // line 373
            echo "                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 374
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\\\">Inscription</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 377
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\\\">Se connecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 380
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\\\">Contact</a>
                </li>
            ";
        } else {
            // line 383
            echo "                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 384
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\\\">Nos Articles</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 387
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
            echo "\\\">Créer un article</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 390
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_articles", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390), "username", [], "any", false, false, false, 390)]), "html", null, true);
            echo "\\\">Mes articles</a>
                </li>
                ";
            // line 392
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392), "role", [], "any", false, false, false, 392) == "admin")) {
                // line 393
                echo "                    <li class=\\\"nav-item\\\">
                        <a class=\\\"nav-link\\\" href=\\\"";
                // line 394
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_dashboard");
                echo "\\\">Dashboard</a>
                    </li>
                ";
            } else {
                // line 397
                echo "                ";
            }
            // line 398
            echo "                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 399
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\\\">Se deconnecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"";
            // line 402
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\\\">Contact</a>
                </li>
            ";
        }
        // line 405
        echo "        </ul>
    </div>
</nav>
<div class=\\\"text-center container-fluid\\\">
    <div class=\\\"row\\\">
        <div class=\\\"col-12 font\\\">
            ";
        // line 411
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 411, $this->source); })()), "user", [], "any", false, false, false, 411)) {
            // line 412
            echo "                <h4 class=\\\"mt-4 bold\\\">Hello  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 412, $this->source); })()), "user", [], "any", false, false, false, 412), "username", [], "any", false, false, false, 412), "html", null, true);
            echo "</h4>
            ";
        } else {
            // line 414
            echo "            ";
        }
        // line 415
        echo "            <p class=\\\"mt-4 bold\\\"><span id=\\\"days\\\"></span> , <span id=\\\"date\\\"></span> <span id=\\\"month\\\"></span> <span id=\\\"years\\\"></span> ,  <span id=\\\"hour\\\"></span></p>
            ";
        // line 416
        $this->displayBlock('body', $context, $blocks);
        // line 417
        echo "            <div class=\\\"scroll-top-wrapper\\\" id=\\\"scroll\\\"><i class=\\\"fas fa-angle-up\\\"></i></div>
        </div>
    </div>
</div>
<div class=\\\"footer text-center\\\">
    <div class=\\\"mt-5\\\">
        <a href=\\\"";
        // line 423
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rgpd");
        echo "\\\" class=\\\"text-black-50\\\"0000>Politique de confidentialité</a> - <a href=\\\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention_legal");
        echo "\\\" class=\\\"text-black-50\\\">Mention légal</a>
        <p><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\\\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/js/date.js"), "html", null, true);
        echo "\\\"></script>
<script src=\\\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/lib/scroll.js"), "html", null, true);
        echo "\\\"></script>
<script src=\\\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/js/captcha.js"), "html", null, true);
        echo "\\\"></script>
<script src=\\\"https://unpkg.com/axios/dist/axios.min.js\\\"></script>
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
                window.alert(\\\"Veuillez vous connecter pour pouvoir liker\\\")
            }else{
                window.alert(\\\"Une erreur s'est produite, merci de réessayez plus tard\\\")
            }
        })
    }
    document.querySelectorAll('a.js-likes').forEach(function (link) {
        link.addEventListener('click', onClickBtnLike);
    })
</script>
";
        // line 456
        $this->displayBlock('javascripts', $context, $blocks);
        // line 457
        echo "</body>
</html>
\", \"base.html.twig\", \"/var/www/public/DevLaon/templates/base.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 357
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

    // line 358
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

    // line 416
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

    // line 456
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
        return "var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 456,  642 => 416,  623 => 358,  605 => 357,  590 => 457,  588 => 456,  558 => 429,  554 => 428,  550 => 427,  541 => 423,  533 => 417,  531 => 416,  528 => 415,  525 => 414,  519 => 412,  517 => 411,  509 => 405,  503 => 402,  497 => 399,  494 => 398,  491 => 397,  485 => 394,  482 => 393,  480 => 392,  475 => 390,  469 => 387,  463 => 384,  460 => 383,  454 => 380,  448 => 377,  442 => 374,  439 => 373,  437 => 372,  428 => 366,  416 => 358,  414 => 357,  408 => 354,  404 => 353,  399 => 351,  47 => 1,);
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

/* base.html.twig */
class __TwigTemplate_802cd772767671e47f8055560a1cc523d0ae494171ac2b913e5b8ed7a3650e16 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
            'stylesheets' => [\$this, 'block_stylesheets'],
            'title' => [\$this, 'block_title'],
            'body' => [\$this, 'block_body'],
            'javascripts' => [\$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"base.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"base.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html lang=\\\"fr\\\">
<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1, shrink-to-fit=no\\\">
    <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"\";
        // line 6
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/images/laon.png\"), \"html\", null, true);
        echo \"\\\" />
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\\\" integrity=\\\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\\\" crossorigin=\\\"anonymous\\\">
    <link rel=\\\"stylesheet\\\" href=\\\"\";
        // line 8
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/css/style.css\"), \"html\", null, true);
        echo \"\\\" />
    <link rel=\\\"icon\\\"  href=\\\"\";
        // line 9
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/css/animate.css\"), \"html\", null, true);
        echo \"\\\" />
    <link href=\\\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\\\" rel=\\\"stylesheet\\\">
    <link href=\\\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\\\" rel=\\\"stylesheet\\\" integrity=\\\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\\\" crossorigin=\\\"anonymous\\\" />
    \";
        // line 12
        \$this->displayBlock('stylesheets', \$context, \$blocks);
        // line 13
        echo \"    <title>\";
        \$this->displayBlock('title', \$context, \$blocks);
        echo \"</title>
    <script src=\\\"https://code.jquery.com/jquery-3.3.1.slim.min.js\\\" integrity=\\\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\\\" integrity=\\\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\\\" integrity=\\\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://code.jquery.com/jquery-3.4.1.js\\\"></script>
</head>
<body>
<nav class=\\\"navbar navbar-expand-lg navbar-dark bg-dark\\\">
    <a class=\\\"navbar-brand\\\" href=\\\"\";
        // line 21
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"home\");
        echo \"\\\">Accueil</a>
    <button class=\\\"navbar-toggler\\\" type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarColor02\\\" aria-controls=\\\"navbarColor02\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\">
        <span class=\\\"navbar-toggler-icon\\\"></span>
    </button>
    <div class=\\\"collapse navbar-collapse\\\" id=\\\"navbarColor02\\\">
        <ul class=\\\"navbar-nav mr-auto\\\">
            \";
        // line 27
        if ( !twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 27, \$this->source); })()), \"user\", [], \"any\", false, false, false, 27)) {
            // line 28
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 29
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_registration\");
            echo \"\\\">Inscription</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 32
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_login\");
            echo \"\\\">Se connecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 35
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"contact\");
            echo \"\\\">Contact</a>
                </li>
            \";
        } else {
            // line 38
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 39
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"articles\");
            echo \"\\\">Nos Articles</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 42
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"create\");
            echo \"\\\">Créer un article</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 45
            echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"my_articles\", [\"name\" => twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 45, \$this->source); })()), \"user\", [], \"any\", false, false, false, 45), \"username\", [], \"any\", false, false, false, 45)]), \"html\", null, true);
            echo \"\\\">Mes articles</a>
                </li>
                \";
            // line 47
            if ((twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 47, \$this->source); })()), \"user\", [], \"any\", false, false, false, 47), \"role\", [], \"any\", false, false, false, 47) == \"admin\")) {
                // line 48
                echo \"                    <li class=\\\"nav-item\\\">
                        <a class=\\\"nav-link\\\" href=\\\"\";
                // line 49
                echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_dashboard\");
                echo \"\\\">Dashboard</a>
                    </li>
                \";
            } else {
                // line 52
                echo \"                \";
            }
            // line 53
            echo \"                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 54
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"security_logout\");
            echo \"\\\">Se deconnecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"\";
            // line 57
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"contact\");
            echo \"\\\">Contact</a>
                </li>
            \";
        }
        // line 60
        echo \"        </ul>
    </div>
</nav>
<div class=\\\"text-center container-fluid\\\">
    <div class=\\\"row\\\">
        <div class=\\\"col-12 font\\\">
            \";
        // line 66
        if (twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 66, \$this->source); })()), \"user\", [], \"any\", false, false, false, 66)) {
            // line 67
            echo \"                <h4 class=\\\"mt-4 bold\\\">Hello  \";
            echo twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"app\"]) || array_key_exists(\"app\", \$context) ? \$context[\"app\"] : (function () { throw new RuntimeError('Variable \"app\" does not exist.', 67, \$this->source); })()), \"user\", [], \"any\", false, false, false, 67), \"username\", [], \"any\", false, false, false, 67), \"html\", null, true);
            echo \"</h4>
            \";
        } else {
            // line 69
            echo \"            \";
        }
        // line 70
        echo \"            <p class=\\\"mt-4 bold\\\"><span id=\\\"days\\\"></span> , <span id=\\\"date\\\"></span> <span id=\\\"month\\\"></span> <span id=\\\"years\\\"></span> ,  <span id=\\\"hour\\\"></span></p>
            \";
        // line 71
        \$this->displayBlock('body', \$context, \$blocks);
        // line 72
        echo \"            <div class=\\\"scroll-top-wrapper\\\" id=\\\"scroll\\\"><i class=\\\"fas fa-angle-up\\\"></i></div>
        </div>
    </div>
</div>
<div class=\\\"footer text-center\\\">
    <div class=\\\"mt-5\\\">
        <a href=\\\"\";
        // line 78
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"rgpd\");
        echo \"\\\" class=\\\"text-black-50\\\"0000>Politique de confidentialité</a> - <a href=\\\"\";
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\RoutingExtension']->getPath(\"mention_legal\");
        echo \"\\\" class=\\\"text-black-50\\\">Mention légal</a>
        <p><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\\\"\";
        // line 82
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/js/date.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"\";
        // line 83
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/lib/scroll.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"\";
        // line 84
        echo twig_escape_filter(\$this->env, \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\AssetExtension']->getAssetUrl(\"dist/assets/js/captcha.js\"), \"html\", null, true);
        echo \"\\\"></script>
<script src=\\\"https://unpkg.com/axios/dist/axios.min.js\\\"></script>
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
                window.alert(\\\"Veuillez vous connecter pour pouvoir liker\\\")
            }else{
                window.alert(\\\"Une erreur s'est produite, merci de réessayez plus tard\\\")
            }
        })
    }
    document.querySelectorAll('a.js-likes').forEach(function (link) {
        link.addEventListener('click', onClickBtnLike);
    })
</script>
\";
        // line 111
        \$this->displayBlock('javascripts', \$context, \$blocks);
        // line 112
        echo \"</body>
</html>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"stylesheets\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"stylesheets\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"title\"));

        echo \"L@nNumérique\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
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

    // line 111
    public function block_javascripts(\$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"javascripts\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"block\", \"javascripts\"));

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return \"base.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 111,  294 => 71,  275 => 13,  257 => 12,  245 => 112,  243 => 111,  213 => 84,  209 => 83,  205 => 82,  196 => 78,  188 => 72,  186 => 71,  183 => 70,  180 => 69,  174 => 67,  172 => 66,  164 => 60,  158 => 57,  152 => 54,  149 => 53,  146 => 52,  140 => 49,  137 => 48,  135 => 47,  130 => 45,  124 => 42,  118 => 39,  115 => 38,  109 => 35,  103 => 32,  97 => 29,  94 => 28,  92 => 27,  83 => 21,  71 => 13,  69 => 12,  63 => 9,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html lang=\\\"fr\\\">
<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1, shrink-to-fit=no\\\">
    <link rel=\\\"icon\\\" type=\\\"image/png\\\" href=\\\"{{ asset('dist/assets/images/laon.png') }}\\\" />
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css\\\" integrity=\\\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\\\" crossorigin=\\\"anonymous\\\">
    <link rel=\\\"stylesheet\\\" href=\\\"{{ asset('dist/assets/css/style.css') }}\\\" />
    <link rel=\\\"icon\\\"  href=\\\"{{ asset('dist/assets/css/animate.css') }}\\\" />
    <link href=\\\"https://fonts.googleapis.com/css?family=Gruppo&display=swap\\\" rel=\\\"stylesheet\\\">
    <link href=\\\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\\\" rel=\\\"stylesheet\\\" integrity=\\\"sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns\\\" crossorigin=\\\"anonymous\\\" />
    {% block stylesheets %}{% endblock %}
    <title>{% block title %}L@nNumérique{% endblock %}</title>
    <script src=\\\"https://code.jquery.com/jquery-3.3.1.slim.min.js\\\" integrity=\\\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\\\" integrity=\\\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\\\" integrity=\\\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\\\" crossorigin=\\\"anonymous\\\"></script>
    <script src=\\\"https://code.jquery.com/jquery-3.4.1.js\\\"></script>
</head>
<body>
<nav class=\\\"navbar navbar-expand-lg navbar-dark bg-dark\\\">
    <a class=\\\"navbar-brand\\\" href=\\\"{{ path('home') }}\\\">Accueil</a>
    <button class=\\\"navbar-toggler\\\" type=\\\"button\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#navbarColor02\\\" aria-controls=\\\"navbarColor02\\\" aria-expanded=\\\"false\\\" aria-label=\\\"Toggle navigation\\\">
        <span class=\\\"navbar-toggler-icon\\\"></span>
    </button>
    <div class=\\\"collapse navbar-collapse\\\" id=\\\"navbarColor02\\\">
        <ul class=\\\"navbar-nav mr-auto\\\">
            {% if not app.user %}
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('security_registration') }}\\\">Inscription</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('security_login') }}\\\">Se connecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('contact') }}\\\">Contact</a>
                </li>
            {% else %}
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('articles') }}\\\">Nos Articles</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('create') }}\\\">Créer un article</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('my_articles', {'name': app.user.username}) }}\\\">Mes articles</a>
                </li>
                {% if app.user.role == 'admin' %}
                    <li class=\\\"nav-item\\\">
                        <a class=\\\"nav-link\\\" href=\\\"{{ path('security_dashboard') }}\\\">Dashboard</a>
                    </li>
                {% else %}
                {% endif %}
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('security_logout') }}\\\">Se deconnecter</a>
                </li>
                <li class=\\\"nav-item\\\">
                    <a class=\\\"nav-link\\\" href=\\\"{{ path('contact') }}\\\">Contact</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>
<div class=\\\"text-center container-fluid\\\">
    <div class=\\\"row\\\">
        <div class=\\\"col-12 font\\\">
            {% if app.user %}
                <h4 class=\\\"mt-4 bold\\\">Hello  {{ app.user.username }}</h4>
            {% else %}
            {% endif %}
            <p class=\\\"mt-4 bold\\\"><span id=\\\"days\\\"></span> , <span id=\\\"date\\\"></span> <span id=\\\"month\\\"></span> <span id=\\\"years\\\"></span> ,  <span id=\\\"hour\\\"></span></p>
            {% block body %}{% endblock %}
            <div class=\\\"scroll-top-wrapper\\\" id=\\\"scroll\\\"><i class=\\\"fas fa-angle-up\\\"></i></div>
        </div>
    </div>
</div>
<div class=\\\"footer text-center\\\">
    <div class=\\\"mt-5\\\">
        <a href=\\\"{{ path('rgpd') }}\\\" class=\\\"text-black-50\\\"0000>Politique de confidentialité</a> - <a href=\\\"{{ path('mention_legal') }}\\\" class=\\\"text-black-50\\\">Mention légal</a>
        <p><small>© Copyright  L@nNumérique</small></p>
    </div>
</div>
<script src=\\\"{{ asset('dist/assets/js/date.js') }}\\\"></script>
<script src=\\\"{{ asset('dist/assets/lib/scroll.js') }}\\\"></script>
<script src=\\\"{{ asset('dist/assets/js/captcha.js') }}\\\"></script>
<script src=\\\"https://unpkg.com/axios/dist/axios.min.js\\\"></script>
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
                window.alert(\\\"Veuillez vous connecter pour pouvoir liker\\\")
            }else{
                window.alert(\\\"Une erreur s'est produite, merci de réessayez plus tard\\\")
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
\", \"base.html.twig\", \"/var/www/public/DevLaon/templates/base.html.twig\");
    }
}
", "var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/7b/7b664ea68c0d3542e06f72b75088761188720dcf3b2d5321c292c1ff2bea1242.php");
    }
}
