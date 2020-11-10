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

/* vendor/symfony/intl/Resources/data/locales/de_CH.json */
class __TwigTemplate_9ae0735e00f3e4415e9545ca12c4b7c2e2568e7fb3a964de25359b83e583e496 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/de_CH.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/de_CH.json"));

        // line 1
        echo "{
    \"Names\": {
        \"be\": \"Weissrussisch\",
        \"be_BY\": \"Weissrussisch (Weissrussland)\",
        \"cy_GB\": \"Walisisch (Grossbritannien)\",
        \"en_BW\": \"Englisch (Botswana)\",
        \"en_GB\": \"Englisch (Grossbritannien)\",
        \"en_SB\": \"Englisch (Salomon-Inseln)\",
        \"en_ZW\": \"Englisch (Zimbabwe)\",
        \"ga_GB\": \"Irisch (Grossbritannien)\",
        \"gd_GB\": \"Schottisches Gälisch (Grossbritannien)\",
        \"kw_GB\": \"Kornisch (Grossbritannien)\",
        \"ms_BN\": \"Malaiisch (Brunei)\",
        \"nd_ZW\": \"Nord-Ndebele (Zimbabwe)\",
        \"pt_CV\": \"Portugiesisch (Kapverden)\",
        \"pt_TL\": \"Portugiesisch (Osttimor)\",
        \"ru_BY\": \"Russisch (Weissrussland)\",
        \"sn_ZW\": \"Shona (Zimbabwe)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/de_CH.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"be\": \"Weissrussisch\",
        \"be_BY\": \"Weissrussisch (Weissrussland)\",
        \"cy_GB\": \"Walisisch (Grossbritannien)\",
        \"en_BW\": \"Englisch (Botswana)\",
        \"en_GB\": \"Englisch (Grossbritannien)\",
        \"en_SB\": \"Englisch (Salomon-Inseln)\",
        \"en_ZW\": \"Englisch (Zimbabwe)\",
        \"ga_GB\": \"Irisch (Grossbritannien)\",
        \"gd_GB\": \"Schottisches Gälisch (Grossbritannien)\",
        \"kw_GB\": \"Kornisch (Grossbritannien)\",
        \"ms_BN\": \"Malaiisch (Brunei)\",
        \"nd_ZW\": \"Nord-Ndebele (Zimbabwe)\",
        \"pt_CV\": \"Portugiesisch (Kapverden)\",
        \"pt_TL\": \"Portugiesisch (Osttimor)\",
        \"ru_BY\": \"Russisch (Weissrussland)\",
        \"sn_ZW\": \"Shona (Zimbabwe)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/de_CH.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/de_CH.json");
    }
}
