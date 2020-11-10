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

/* vendor/symfony/intl/Resources/data/languages/sn.json */
class __TwigTemplate_d12ccd02951859b792c8f6f58ac132a27c6fb519887ad5d92cdbf60c082ff966 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"chiAkani\",
        \"am\": \"chiAmaric\",
        \"ar\": \"chiArabu\",
        \"be\": \"chiBelarusi\",
        \"bg\": \"chiBulgarian\",
        \"bn\": \"chiBengali\",
        \"cs\": \"chiCzech\",
        \"de\": \"chiJerimani\",
        \"el\": \"chiGreek\",
        \"en\": \"Chirungu\",
        \"es\": \"chiSpanish\",
        \"fa\": \"chiPeshiya\",
        \"fr\": \"chiFurenchi\",
        \"ha\": \"chiHausa\",
        \"hi\": \"chiHindi\",
        \"hu\": \"chiHungari\",
        \"id\": \"chiIndonesia\",
        \"ig\": \"chiIgbo\",
        \"it\": \"chiTariana\",
        \"ja\": \"chiJapani\",
        \"jv\": \"chiJava\",
        \"km\": \"chiKhema\",
        \"ko\": \"chiKoria\",
        \"ms\": \"chiMalay\",
        \"my\": \"chiBurma\",
        \"ne\": \"chiNepali\",
        \"nl\": \"chiDutch\",
        \"pa\": \"chiPunjabi\",
        \"pl\": \"chiPolish\",
        \"pt\": \"chiPutukezi\",
        \"ro\": \"chiRomanian\",
        \"ru\": \"chiRashiya\",
        \"rw\": \"chiRwanda\",
        \"sn\": \"chiShona\",
        \"so\": \"chiSomali\",
        \"sv\": \"chiSwedish\",
        \"ta\": \"chiTamil\",
        \"th\": \"chiThai\",
        \"tr\": \"chiTurkish\",
        \"uk\": \"chiUkrenia\",
        \"ur\": \"chiUrdu\",
        \"vi\": \"chiVietnam\",
        \"yo\": \"chiYoruba\",
        \"zh\": \"chiChinese\",
        \"zu\": \"chiZulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/sn.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"chiAkani\",
        \"am\": \"chiAmaric\",
        \"ar\": \"chiArabu\",
        \"be\": \"chiBelarusi\",
        \"bg\": \"chiBulgarian\",
        \"bn\": \"chiBengali\",
        \"cs\": \"chiCzech\",
        \"de\": \"chiJerimani\",
        \"el\": \"chiGreek\",
        \"en\": \"Chirungu\",
        \"es\": \"chiSpanish\",
        \"fa\": \"chiPeshiya\",
        \"fr\": \"chiFurenchi\",
        \"ha\": \"chiHausa\",
        \"hi\": \"chiHindi\",
        \"hu\": \"chiHungari\",
        \"id\": \"chiIndonesia\",
        \"ig\": \"chiIgbo\",
        \"it\": \"chiTariana\",
        \"ja\": \"chiJapani\",
        \"jv\": \"chiJava\",
        \"km\": \"chiKhema\",
        \"ko\": \"chiKoria\",
        \"ms\": \"chiMalay\",
        \"my\": \"chiBurma\",
        \"ne\": \"chiNepali\",
        \"nl\": \"chiDutch\",
        \"pa\": \"chiPunjabi\",
        \"pl\": \"chiPolish\",
        \"pt\": \"chiPutukezi\",
        \"ro\": \"chiRomanian\",
        \"ru\": \"chiRashiya\",
        \"rw\": \"chiRwanda\",
        \"sn\": \"chiShona\",
        \"so\": \"chiSomali\",
        \"sv\": \"chiSwedish\",
        \"ta\": \"chiTamil\",
        \"th\": \"chiThai\",
        \"tr\": \"chiTurkish\",
        \"uk\": \"chiUkrenia\",
        \"ur\": \"chiUrdu\",
        \"vi\": \"chiVietnam\",
        \"yo\": \"chiYoruba\",
        \"zh\": \"chiChinese\",
        \"zu\": \"chiZulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/sn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/sn.json");
    }
}
