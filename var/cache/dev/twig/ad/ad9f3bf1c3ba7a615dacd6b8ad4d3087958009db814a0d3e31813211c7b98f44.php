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

/* security/mention_legal.html.twig */
class __TwigTemplate_6d3eb6fb24f3c6101fb876c58140af58479a02c601ae92ba7236f40809d2d024 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mention_legal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/mention_legal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/mention_legal.html.twig", 1);
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

        echo "Mentions légales";
        
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
        echo "    <div class=\"container text-center\">
        <h1 class=\"text bold\">MENTIONS LEGALES</h1>
        <hr class=\"mt-5\" />
        <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href=\"http://laon-numérique.fr\" target=\"_blank\">laon-numérique.fr</a> les informations suivantes :</p>
        <hr/>
        <p class=\"mt-4\"><strong>1. Informations légales :</strong></p>
        <p>Statut du propriétaire : <strong>particulier</strong><br />
            Le Propriétaire est : <strong>Laon Numérique</strong><br />
            Adresse postale du propriétaire : <strong>Laon, 02000 02000 LAON</strong><br />
            <br />
            Le Créateur du site est : <strong>Yms L@nNumérique</strong><br />
            Le Responsable de la  publication est : <strong>Yms.Mbrk</strong><br />
            Contacter le responsable de la publication : <strong>laonnumerique@gmail.com</strong><br />
            Le responsable de la publication est une<strong> personne physique</strong><br />
            <br />
            Le Webmaster est  : <strong>Yms.Mbrk</strong><br />
            Contacter le Webmaster :  <strong><a href=\"mailto:yms.mbrk@gmail.com?subject=Contact a partir des mentions lÃ©gales via le site laon-numérique.fr\">yms.mbrk@gmail.com</a></strong><br />
            L’hebergeur du site est : <strong>1&1 ionos https://login.ionos.fr 57200  Sarreguemines</strong><br />
        <p> </p>
        <hr/>
        <p><strong>2. Présentation et principe :</strong></p>
        <p>Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href=\"http://laon-numérique.fr\" target=\"_blank\">laon-numérique.fr</a>.<br />
            Le site <strong>laon-numérique.fr</strong><strong> </strong>regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers le webmaster du site laon-numérique.fr. Le site laon-numérique.fr est mis à jour régulièrement par Yms.Mbrk.<br />
            Laon Numérique s’efforce de fournir sur le site laon-numérique.fr des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.</p>
        <p> </p>
        <hr/>
        <p><strong>3. Accessibilité :</strong><br />
            <br />
            Le site laon-numérique.fr est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, laon-numérique.fr s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, laon-numérique.fr ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>
        <p> </p>
        <hr/>
        <p><strong>4. Propriété intellectuelle :</strong></p>
        <p><br />
            Laon Numérique est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
            Toute reproduction totale ou partielle du site laon-numérique.fr, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Laon Numérique, propriétaire du site à l'email : yms.mbrk@gmail.com, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
        <p><br />
        <hr/>
        <strong>5. Liens hypertextes et cookies :</strong><br />
        <br />
        Le site laon-numérique.fr contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Laon Numérique. Cependant, Laon Numérique n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
        L’utilisateur est informé que lors de ses visites sur le site laon-numérique.fr, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site. <br />
        Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href=\"http://www.cnil.fr\">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p>
        <p><br />
        <hr/>
        <strong>6. Protection des biens et des personnes - gestion des données personnelles :</strong><br />
        <br />
        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
        <p>Sur le site laon-numérique.fr, Laon Numérique ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site laon-numérique.fr. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site laon-numérique.fr l’obligation ou non de fournir ces informations.<br />
            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à laon-numérique.fr par email : <strong><a href=\"mailto:yms.mbrk@gmail.com?subject=Contact ï¿½ partir des mentions lï¿½gales via le site laon-numérique.fr\">laonnumerique@gmail.com</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
        <p>Aucune information personnelle de l'utilisateur du site laon-numérique.fr n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site laon-numérique.fr et de ses droits autorise Laon Numérique à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site laon-numérique.fr.<br />
            Le site laon-numérique.fr est en conformité avec le RGPD voir notre politique RGPD  http://laon-numérique.fr/RGPD.</p>
        <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
        <hr/>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/mention_legal.html.twig";
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
{% block title %}Mentions légales{% endblock %}
{% block body %}
    <div class=\"container text-center\">
        <h1 class=\"text bold\">MENTIONS LEGALES</h1>
        <hr class=\"mt-5\" />
        <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href=\"http://laon-numérique.fr\" target=\"_blank\">laon-numérique.fr</a> les informations suivantes :</p>
        <hr/>
        <p class=\"mt-4\"><strong>1. Informations légales :</strong></p>
        <p>Statut du propriétaire : <strong>particulier</strong><br />
            Le Propriétaire est : <strong>Laon Numérique</strong><br />
            Adresse postale du propriétaire : <strong>Laon, 02000 02000 LAON</strong><br />
            <br />
            Le Créateur du site est : <strong>Yms L@nNumérique</strong><br />
            Le Responsable de la  publication est : <strong>Yms.Mbrk</strong><br />
            Contacter le responsable de la publication : <strong>laonnumerique@gmail.com</strong><br />
            Le responsable de la publication est une<strong> personne physique</strong><br />
            <br />
            Le Webmaster est  : <strong>Yms.Mbrk</strong><br />
            Contacter le Webmaster :  <strong><a href=\"mailto:yms.mbrk@gmail.com?subject=Contact a partir des mentions lÃ©gales via le site laon-numérique.fr\">yms.mbrk@gmail.com</a></strong><br />
            L’hebergeur du site est : <strong>1&1 ionos https://login.ionos.fr 57200  Sarreguemines</strong><br />
        <p> </p>
        <hr/>
        <p><strong>2. Présentation et principe :</strong></p>
        <p>Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href=\"http://laon-numérique.fr\" target=\"_blank\">laon-numérique.fr</a>.<br />
            Le site <strong>laon-numérique.fr</strong><strong> </strong>regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers le webmaster du site laon-numérique.fr. Le site laon-numérique.fr est mis à jour régulièrement par Yms.Mbrk.<br />
            Laon Numérique s’efforce de fournir sur le site laon-numérique.fr des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.</p>
        <p> </p>
        <hr/>
        <p><strong>3. Accessibilité :</strong><br />
            <br />
            Le site laon-numérique.fr est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, laon-numérique.fr s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, laon-numérique.fr ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>
        <p> </p>
        <hr/>
        <p><strong>4. Propriété intellectuelle :</strong></p>
        <p><br />
            Laon Numérique est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
            Toute reproduction totale ou partielle du site laon-numérique.fr, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Laon Numérique, propriétaire du site à l'email : yms.mbrk@gmail.com, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
        <p><br />
        <hr/>
        <strong>5. Liens hypertextes et cookies :</strong><br />
        <br />
        Le site laon-numérique.fr contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Laon Numérique. Cependant, Laon Numérique n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
        L’utilisateur est informé que lors de ses visites sur le site laon-numérique.fr, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site. <br />
        Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href=\"http://www.cnil.fr\">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p>
        <p><br />
        <hr/>
        <strong>6. Protection des biens et des personnes - gestion des données personnelles :</strong><br />
        <br />
        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
        <p>Sur le site laon-numérique.fr, Laon Numérique ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site laon-numérique.fr. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site laon-numérique.fr l’obligation ou non de fournir ces informations.<br />
            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à laon-numérique.fr par email : <strong><a href=\"mailto:yms.mbrk@gmail.com?subject=Contact ï¿½ partir des mentions lï¿½gales via le site laon-numérique.fr\">laonnumerique@gmail.com</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
        <p>Aucune information personnelle de l'utilisateur du site laon-numérique.fr n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site laon-numérique.fr et de ses droits autorise Laon Numérique à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site laon-numérique.fr.<br />
            Le site laon-numérique.fr est en conformité avec le RGPD voir notre politique RGPD  http://laon-numérique.fr/RGPD.</p>
        <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
        <hr/>
    </div>
{% endblock %}", "security/mention_legal.html.twig", "/var/www/public/DevLaon/templates/security/mention_legal.html.twig");
    }
}
