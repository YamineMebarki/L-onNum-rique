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

/* vendor/symfony/intl/Resources/data/languages/ig.json */
class __TwigTemplate_bba21ae1cef869e45d40b9adf77f0be27e57b14c4f97df9a6e5536491e603e42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ig.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ig.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Akan\",
        \"am\": \"Amariikị\",
        \"ar\": \"Arabiikị\",
        \"ar_001\": \"Ụdị Arabiikị nke oge a\",
        \"be\": \"Belaruusu\",
        \"bg\": \"Bọlụgarịa\",
        \"bn\": \"Bengali\",
        \"cs\": \"Cheekị\",
        \"de\": \"Asụsụ Jaman\",
        \"de_AT\": \"Jaman ndị Austria\",
        \"de_CH\": \"Jaman Izugbe ndị Switzerland\",
        \"el\": \"Giriikị\",
        \"en\": \"Asụsụ Bekee\",
        \"en_AU\": \"Bekee ndị Australia\",
        \"en_CA\": \"Bekee ndị Canada\",
        \"en_US\": \"Bekee ndị America\",
        \"es\": \"Asụsụ Spanish\",
        \"es_419\": \"Asụsụ Spanish ndị Latin America\",
        \"es_ES\": \"Asụsụ Spanish ndị Europe\",
        \"es_MX\": \"Asụsụ Spanish ndị Mexico\",
        \"fa\": \"Peshan\",
        \"fr\": \"Asụsụ Fụrench\",
        \"fr_CA\": \"Fụrench ndị Canada\",
        \"fr_CH\": \"Fụrench ndị Switzerland\",
        \"ha\": \"Awụsa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Magịya\",
        \"id\": \"Indonisia\",
        \"ig\": \"Asụsụ Igbo\",
        \"it\": \"Asụsụ Italian\",
        \"ja\": \"Asụsụ Japanese\",
        \"jv\": \"Java\",
        \"km\": \"Keme, Etiti\",
        \"ko\": \"Koria\",
        \"ms\": \"Maleyi\",
        \"my\": \"Mịanma\",
        \"ne\": \"Nepali\",
        \"nl\": \"Dọọch\",
        \"pa\": \"Punjabi\",
        \"pl\": \"Poliishi\",
        \"pt\": \"Asụsụ Portuguese\",
        \"pt_BR\": \"Asụsụ Portuguese ndị Brazil\",
        \"pt_PT\": \"Asụsụ Portuguese ndị Europe\",
        \"ro\": \"Rumenia\",
        \"ru\": \"Asụsụ Russian\",
        \"rw\": \"Rụwanda\",
        \"so\": \"Somali\",
        \"sv\": \"Sụwidiishi\",
        \"ta\": \"Tamụlụ\",
        \"th\": \"Taị\",
        \"tr\": \"Tọkiishi\",
        \"uk\": \"Ukureenị\",
        \"ur\": \"Urudu\",
        \"vi\": \"Viyetịnaamụ\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Mandarịịnị\",
        \"zh_Hans\": \"Asụsụ Chinese dị mfe\",
        \"zh_Hant\": \"Asụsụ Chinese Izugbe\",
        \"zu\": \"Zulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ig.json";
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
        \"ak\": \"Akan\",
        \"am\": \"Amariikị\",
        \"ar\": \"Arabiikị\",
        \"ar_001\": \"Ụdị Arabiikị nke oge a\",
        \"be\": \"Belaruusu\",
        \"bg\": \"Bọlụgarịa\",
        \"bn\": \"Bengali\",
        \"cs\": \"Cheekị\",
        \"de\": \"Asụsụ Jaman\",
        \"de_AT\": \"Jaman ndị Austria\",
        \"de_CH\": \"Jaman Izugbe ndị Switzerland\",
        \"el\": \"Giriikị\",
        \"en\": \"Asụsụ Bekee\",
        \"en_AU\": \"Bekee ndị Australia\",
        \"en_CA\": \"Bekee ndị Canada\",
        \"en_US\": \"Bekee ndị America\",
        \"es\": \"Asụsụ Spanish\",
        \"es_419\": \"Asụsụ Spanish ndị Latin America\",
        \"es_ES\": \"Asụsụ Spanish ndị Europe\",
        \"es_MX\": \"Asụsụ Spanish ndị Mexico\",
        \"fa\": \"Peshan\",
        \"fr\": \"Asụsụ Fụrench\",
        \"fr_CA\": \"Fụrench ndị Canada\",
        \"fr_CH\": \"Fụrench ndị Switzerland\",
        \"ha\": \"Awụsa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Magịya\",
        \"id\": \"Indonisia\",
        \"ig\": \"Asụsụ Igbo\",
        \"it\": \"Asụsụ Italian\",
        \"ja\": \"Asụsụ Japanese\",
        \"jv\": \"Java\",
        \"km\": \"Keme, Etiti\",
        \"ko\": \"Koria\",
        \"ms\": \"Maleyi\",
        \"my\": \"Mịanma\",
        \"ne\": \"Nepali\",
        \"nl\": \"Dọọch\",
        \"pa\": \"Punjabi\",
        \"pl\": \"Poliishi\",
        \"pt\": \"Asụsụ Portuguese\",
        \"pt_BR\": \"Asụsụ Portuguese ndị Brazil\",
        \"pt_PT\": \"Asụsụ Portuguese ndị Europe\",
        \"ro\": \"Rumenia\",
        \"ru\": \"Asụsụ Russian\",
        \"rw\": \"Rụwanda\",
        \"so\": \"Somali\",
        \"sv\": \"Sụwidiishi\",
        \"ta\": \"Tamụlụ\",
        \"th\": \"Taị\",
        \"tr\": \"Tọkiishi\",
        \"uk\": \"Ukureenị\",
        \"ur\": \"Urudu\",
        \"vi\": \"Viyetịnaamụ\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Mandarịịnị\",
        \"zh_Hans\": \"Asụsụ Chinese dị mfe\",
        \"zh_Hant\": \"Asụsụ Chinese Izugbe\",
        \"zu\": \"Zulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ig.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ig.json");
    }
}
