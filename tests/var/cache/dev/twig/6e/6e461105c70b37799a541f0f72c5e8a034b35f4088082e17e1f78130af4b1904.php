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

/* article/home.html.twig */
class __TwigTemplate_dd8604b2f858aaf0075e929ffbdc2e11eefaf30e3e2877bb61e8c02fb5d22d08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/home.html.twig", 1);
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

        echo "L@nNumérique";
        
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
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/images/L@nNumérique.png"), "html", null, true);
        echo "\" alt=\"Laon\"  class=\"responsive\"/>
    <h1 >Vous souhaite la</h1>
    <h2 class=\"mt-3 bold\">Bienvenue</h2>
    <h3>Conçu pour les développeurs <span class=\"bold\">du Grand Laonnois.</span></h3>
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/img/laon.png"), "html", null, true);
        echo "\" alt=\"Laon\"  class=\"responsive\"/>
    <p class=\"mt-3\">Forum de partage et d'entraide pour développeurs de la ville de Laon et ses environs.</p>
    <section>
        <p class=\"bold\">Rejoignez nous et ensembles formons la 1ere communautés des developpeurs du grand Laonnois.</p>
        <h5 class=\"bold\">Qui sommes nous ?</h5>
        <h5>Créer en <span class=\"bold\">2019</span> L@nNumérique à été pensé afin de venir en aide aux développeurs juniors, afin de leur offrir un lieu d'échange et de partage.</h5>
        <ul class=\"list\">
            <li>Retrouver nos articles dédiées aux technologies du Web,</li>
            <li>Créer vos articles,</li>
            <li>Partager vos connaissances,</li>
            <li>Commenter, liker,</li>
            <li>Partager sur les réseaux sociaux.</li>
        </ul>
    </section>
    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\"><button class=\"btn btn-success btn-lg\">Inscription</button></a>
    </div>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"mv\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                        <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
                                <div class=\"border border-dark rounded p-2 shadow\">
                                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"card-img-top rounded\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "\"   height=\"200\" />
                                    <div class=\"card-block\">
                                        <h4 class=\"card-title lien\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <hr/>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <images class=\"w-100 responsive\" src=\"https://www.publicdomainpictures.net/pictures/280000/nahled/searching-the-web.jpg\" alt=\"First slide\" />
                </div>
                <div class=\"carousel-item\">
                    <images class=\"w-100 responsive\" src=\"https://www.publicdomainpictures.net/pictures/290000/nahled/online-library-1553951810P8h.jpg\" alt=\"Second slide\" />
                </div>
                <div class=\"carousel-item\">
                    <images class=\"w-100 responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/3/31/Logo_Talents_du_Num%C3%A9rique.png\" alt=\"Third slide\" />
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <hr/>
    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\"><h4>Plus d'articles</h4></a>
    ";
        } else {
            // line 73
            echo "        <div class=\"border border-dark rounded p-2 shadow\">
            <p class=\"bold\">Pour pouvoir consulter plus d'article veuillez vous <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">inscrire</a> ou vous <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">connecter.</a></p>
        </div>
    ";
        }
        // line 77
        echo "    <hr/>
    <div class=\"cookiewarning text-center\">
        <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies ou autres traceurs pour améliorer et personnaliser votre navigation sur le site.</p>
        <span class=\"btn btn-primary btn-xl\">Accepter</span>
        <span class=\"btn btn-danger btn-xl\">Refuser</span>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/assets/js/cookiesBootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 85,  221 => 84,  205 => 77,  197 => 74,  194 => 73,  188 => 71,  186 => 70,  155 => 41,  143 => 35,  136 => 33,  131 => 31,  128 => 30,  124 => 29,  115 => 23,  97 => 8,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}L@nNumérique{% endblock %}
{% block body %}
    <images src=\"{{ asset('dist/assets/images/L@nNumérique.png') }}\" alt=\"Laon\"  class=\"responsive\"/>
    <h1 >Vous souhaite la</h1>
    <h2 class=\"mt-3 bold\">Bienvenue</h2>
    <h3>Conçu pour les développeurs <span class=\"bold\">du Grand Laonnois.</span></h3>
    <images src=\"{{ asset('dist/assets/images/laon.png') }}\" alt=\"Laon\"  class=\"responsive\"/>
    <p class=\"mt-3\">Forum de partage et d'entraide pour développeurs de la ville de Laon et ses environs.</p>
    <section>
        <p class=\"bold\">Rejoignez nous et ensembles formons la 1ere communautés des developpeurs du grand Laonnois.</p>
        <h5 class=\"bold\">Qui sommes nous ?</h5>
        <h5>Créer en <span class=\"bold\">2019</span> L@nNumérique à été pensé afin de venir en aide aux développeurs juniors, afin de leur offrir un lieu d'échange et de partage.</h5>
        <ul class=\"list\">
            <li>Retrouver nos articles dédiées aux technologies du Web,</li>
            <li>Créer vos articles,</li>
            <li>Partager vos connaissances,</li>
            <li>Commenter, liker,</li>
            <li>Partager sur les réseaux sociaux.</li>
        </ul>
    </section>
    <div class=\"text-center mt-5\">
        <a href=\"{{ path('security_registration') }}\"><button class=\"btn btn-success btn-lg\">Inscription</button></a>
    </div>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"mv\">
                    {% for article in articles|slice(0, 5) %}
                        <div class=\"mb-4 col-xs-2 col-sm-6 col-md-8\">
                            <a href=\"{{ path('show', {'id': article.id}) }}\">
                                <div class=\"border border-dark rounded p-2 shadow\">
                                    <images src=\"{{ article.image }}\" class=\"card-images-top rounded\" alt=\"{{ article.title }}\"   height=\"200\" />
                                    <div class=\"card-block\">
                                        <h4 class=\"card-title lien\">{{ article.title }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <hr/>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <images class=\"w-100 responsive\" src=\"https://www.publicdomainpictures.net/pictures/280000/nahled/searching-the-web.jpg\" alt=\"First slide\" />
                </div>
                <div class=\"carousel-item\">
                    <images class=\"w-100 responsive\" src=\"https://www.publicdomainpictures.net/pictures/290000/nahled/online-library-1553951810P8h.jpg\" alt=\"Second slide\" />
                </div>
                <div class=\"carousel-item\">
                    <images class=\"w-100 responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/3/31/Logo_Talents_du_Num%C3%A9rique.png\" alt=\"Third slide\" />
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <hr/>
    {% if app.user %}
        <a href=\"{{ path('articles') }}\"><h4>Plus d'articles</h4></a>
    {% else %}
        <div class=\"border border-dark rounded p-2 shadow\">
            <p class=\"bold\">Pour pouvoir consulter plus d'article veuillez vous <a href=\"{{ path('security_registration') }}\">inscrire</a> ou vous <a href=\"{{ path('security_login') }}\">connecter.</a></p>
        </div>
    {% endif %}
    <hr/>
    <div class=\"cookiewarning text-center\">
        <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies ou autres traceurs pour améliorer et personnaliser votre navigation sur le site.</p>
        <span class=\"btn btn-primary btn-xl\">Accepter</span>
        <span class=\"btn btn-danger btn-xl\">Refuser</span>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('dist/assets/js/cookiesBootstrap.js') }}\"></script>
{% endblock %}", "article/home.html.twig", "/var/www/public/DevLaon/templates/article/home.html.twig");
    }
}
