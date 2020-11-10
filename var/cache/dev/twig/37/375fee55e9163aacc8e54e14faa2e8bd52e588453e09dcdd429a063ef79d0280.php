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

/* security/confidential.html.twig */
class __TwigTemplate_d8712a6e1d96743ef9d29fa18e6da79bbe42dc1608c077b2a9586ad1fca160b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/confidential.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/confidential.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/confidential.html.twig", 1);
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

        echo "RGPD";
        
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
        <h1 class=\"bold\">Politique de confidentialité</h1>
        <hr class=\"mt-5\"/>
        <h2> 1.Collecte de l’information </h2>
        <p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site,
            lorsque vous vous connectez à votre compte, faites un achat, participez à un concours, et / ou lorsque vous vous déconnectez.
            Les informations recueillies incluent votre nom, votre adresse e-mail, numéro de téléphone, et / ou carte de crédit.
            En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP,
            vos logiciels et votre matériel, et la page que vous demandez.</p>
        <hr/>
        <h3> 2. Utilisation des informations </h3>
        <p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
        <ul class=\"list\">
            <li>- Personnaliser votre expérience et répondre à vos besoins individuels</li>
            <li> - Fournir un contenu publicitaire personnalisé</li>
            <li> - Améliorer notre site</li>
            <li>- Améliorer le service client et vos besoins de prise en charge</li>
            <li>- Vous contacter par e-mail</li>
            <li>- Administrer un concours, une promotion, ou une enquête</li>
        </ul>
        <hr/>
        <h3> 3. Confidentialité du commerce en ligne </h3>
        <p>Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, échangées, transférées,
            ou données à une autre société pour n’importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour répondre à une demande
            et / ou une transaction, comme par exemple pour expédier une commande.</p>
        <hr/>
        <h3> 4. Divulgation à des tiers </h3>
        <p>Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers.
            Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires,
            tant que ces parties conviennent de garder ces informations confidentielles.
            Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales,
            fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.
            Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.</p>
        <hr/>
        <h3>5. Protection des informations </h3>
        <p>Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles.
            Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne.
            Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique (par exemple,
            la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables.
            Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.</p>
        <h4 class=\"mt-4\"> Est-ce que nous utilisons des cookies ? </h4>
        <p>Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts.
            Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations personnelles identifiables sur notre site.</p>
        <hr/>
        <h3>6. Se désabonner </h3>
        <p>Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et mises à jour relatives à votre commande,
            des nouvelles de l’entreprise de façon occasionnelle, des informations sur des produits liés, etc.
        </p>
        <hr/>
        <h3>7. Consentement </h3>
        <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
        <hr/>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/confidential.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}RGPD{% endblock %}
{% block body %}
    <div class=\"container\">
        <h1 class=\"bold\">Politique de confidentialité</h1>
        <hr class=\"mt-5\"/>
        <h2> 1.Collecte de l’information </h2>
        <p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site,
            lorsque vous vous connectez à votre compte, faites un achat, participez à un concours, et / ou lorsque vous vous déconnectez.
            Les informations recueillies incluent votre nom, votre adresse e-mail, numéro de téléphone, et / ou carte de crédit.
            En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP,
            vos logiciels et votre matériel, et la page que vous demandez.</p>
        <hr/>
        <h3> 2. Utilisation des informations </h3>
        <p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
        <ul class=\"list\">
            <li>- Personnaliser votre expérience et répondre à vos besoins individuels</li>
            <li> - Fournir un contenu publicitaire personnalisé</li>
            <li> - Améliorer notre site</li>
            <li>- Améliorer le service client et vos besoins de prise en charge</li>
            <li>- Vous contacter par e-mail</li>
            <li>- Administrer un concours, une promotion, ou une enquête</li>
        </ul>
        <hr/>
        <h3> 3. Confidentialité du commerce en ligne </h3>
        <p>Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, échangées, transférées,
            ou données à une autre société pour n’importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour répondre à une demande
            et / ou une transaction, comme par exemple pour expédier une commande.</p>
        <hr/>
        <h3> 4. Divulgation à des tiers </h3>
        <p>Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers.
            Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires,
            tant que ces parties conviennent de garder ces informations confidentielles.
            Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales,
            fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.
            Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.</p>
        <hr/>
        <h3>5. Protection des informations </h3>
        <p>Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles.
            Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne.
            Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique (par exemple,
            la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables.
            Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.</p>
        <h4 class=\"mt-4\"> Est-ce que nous utilisons des cookies ? </h4>
        <p>Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts.
            Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations personnelles identifiables sur notre site.</p>
        <hr/>
        <h3>6. Se désabonner </h3>
        <p>Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et mises à jour relatives à votre commande,
            des nouvelles de l’entreprise de façon occasionnelle, des informations sur des produits liés, etc.
        </p>
        <hr/>
        <h3>7. Consentement </h3>
        <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
        <hr/>
    </div>
{% endblock %}", "security/confidential.html.twig", "/var/www/public/DevLaon/templates/security/confidential.html.twig");
    }
}
