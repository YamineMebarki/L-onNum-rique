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

/* vendor/symfony/intl/Resources/data/locales/sw_CD.json */
class __TwigTemplate_993de38fcd34be873c56138302a0bf25f1ec3f9fb31a6cbfba60ed6b64fb6223 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sw_CD.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sw_CD.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ak\": \"Kiakan\",
        \"ak_GH\": \"Kiakan (Ghana)\",
        \"ar_JO\": \"Kiarabu (Yordani)\",
        \"ar_LB\": \"Kiarabu (Lebanoni)\",
        \"ar_MA\": \"Kiarabu (Moroko)\",
        \"ar_OM\": \"Kiarabu (Omani)\",
        \"ar_QA\": \"Kiarabu (Katari)\",
        \"ar_SD\": \"Kiarabu (Sudani)\",
        \"ar_TD\": \"Kiarabu (Chadi)\",
        \"az\": \"Kiazabajani\",
        \"az_AZ\": \"Kiazabajani (Azabajani)\",
        \"az_Cyrl\": \"Kiazabajani (Kisiriliki)\",
        \"az_Cyrl_AZ\": \"Kiazabajani (Kisiriliki, Azabajani)\",
        \"az_Latn\": \"Kiazabajani (Kilatini)\",
        \"az_Latn_AZ\": \"Kiazabajani (Kilatini, Azabajani)\",
        \"da_DK\": \"Kidenmaki (Denmaki)\",
        \"de_LI\": \"Kijerumani (Lishenteni)\",
        \"de_LU\": \"Kijerumani (Lasembagi)\",
        \"el_CY\": \"Kigiriki (Saiprasi)\",
        \"en_CX\": \"Kiingereza (Kisiwa cha Christmas)\",
        \"en_CY\": \"Kiingereza (Saiprasi)\",
        \"en_DK\": \"Kiingereza (Denmaki)\",
        \"en_NG\": \"Kiingereza (Nijeria)\",
        \"en_PR\": \"Kiingereza (Puetoriko)\",
        \"en_SD\": \"Kiingereza (Sudani)\",
        \"es_PR\": \"Kihispania (Puetoriko)\",
        \"fa_AF\": \"Kiajemi (Afuganistani)\",
        \"ff_Latn_NE\": \"Kifulani (Kilatini, Nijeri)\",
        \"ff_Latn_NG\": \"Kifulani (Kilatini, Nijeria)\",
        \"fo_DK\": \"Kifaroe (Denmaki)\",
        \"fr_BJ\": \"Kifaransa (Benini)\",
        \"fr_CI\": \"Kifaransa (Kodivaa)\",
        \"fr_LU\": \"Kifaransa (Lasembagi)\",
        \"fr_MA\": \"Kifaransa (Moroko)\",
        \"fr_NE\": \"Kifaransa (Nijeri)\",
        \"fr_TD\": \"Kifaransa (Chadi)\",
        \"gv\": \"Kimanksi\",
        \"gv_IM\": \"Kimanksi (Kisiwa cha Man)\",
        \"ha_NE\": \"Kihausa (Nijeri)\",
        \"ha_NG\": \"Kihausa (Nijeria)\",
        \"hr_HR\": \"Kikroeshia (Kroeshia)\",
        \"ig_NG\": \"Kiigbo (Nijeria)\",
        \"ky\": \"Kikirigizi\",
        \"ky_KG\": \"Kikirigizi (Kirigizistani)\",
        \"lb_LU\": \"Kilasembagi (Lasembagi)\",
        \"lv_LV\": \"Kilatvia (Lativia)\",
        \"mk\": \"Kimasedonia\",
        \"mk_MK\": \"Kimasedonia (Masedonia ya Kaskazini)\",
        \"my_MM\": \"Kiburma (Myama)\",
        \"nb_NO\": \"Kinorwe cha Bokmal (Norwe)\",
        \"ne_NP\": \"Kinepali (Nepali)\",
        \"nn_NO\": \"Kinorwe cha Nynorsk (Norwe)\",
        \"no_NO\": \"Kinorwe (Norwe)\",
        \"ps_AF\": \"Kipashto (Afuganistani)\",
        \"pt_LU\": \"Kireno (Lasembagi)\",
        \"pt_ST\": \"Kireno (Sao Tome na Prinsipe)\",
        \"pt_TL\": \"Kireno (Timori ya Mashariki)\",
        \"se_NO\": \"Kisami cha Kaskazini (Norwe)\",
        \"tr_CY\": \"Kituruki (Saiprasi)\",
        \"uz_AF\": \"Kiuzbeki (Afuganistani)\",
        \"uz_Arab_AF\": \"Kiuzbeki (Kiarabu, Afuganistani)\",
        \"vi_VN\": \"Kivietinamu (Vietnamu)\",
        \"yi\": \"Kiyidi\",
        \"yo_BJ\": \"Kiyoruba (Benini)\",
        \"yo_NG\": \"Kiyoruba (Nijeria)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/sw_CD.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ak\": \"Kiakan\",
        \"ak_GH\": \"Kiakan (Ghana)\",
        \"ar_JO\": \"Kiarabu (Yordani)\",
        \"ar_LB\": \"Kiarabu (Lebanoni)\",
        \"ar_MA\": \"Kiarabu (Moroko)\",
        \"ar_OM\": \"Kiarabu (Omani)\",
        \"ar_QA\": \"Kiarabu (Katari)\",
        \"ar_SD\": \"Kiarabu (Sudani)\",
        \"ar_TD\": \"Kiarabu (Chadi)\",
        \"az\": \"Kiazabajani\",
        \"az_AZ\": \"Kiazabajani (Azabajani)\",
        \"az_Cyrl\": \"Kiazabajani (Kisiriliki)\",
        \"az_Cyrl_AZ\": \"Kiazabajani (Kisiriliki, Azabajani)\",
        \"az_Latn\": \"Kiazabajani (Kilatini)\",
        \"az_Latn_AZ\": \"Kiazabajani (Kilatini, Azabajani)\",
        \"da_DK\": \"Kidenmaki (Denmaki)\",
        \"de_LI\": \"Kijerumani (Lishenteni)\",
        \"de_LU\": \"Kijerumani (Lasembagi)\",
        \"el_CY\": \"Kigiriki (Saiprasi)\",
        \"en_CX\": \"Kiingereza (Kisiwa cha Christmas)\",
        \"en_CY\": \"Kiingereza (Saiprasi)\",
        \"en_DK\": \"Kiingereza (Denmaki)\",
        \"en_NG\": \"Kiingereza (Nijeria)\",
        \"en_PR\": \"Kiingereza (Puetoriko)\",
        \"en_SD\": \"Kiingereza (Sudani)\",
        \"es_PR\": \"Kihispania (Puetoriko)\",
        \"fa_AF\": \"Kiajemi (Afuganistani)\",
        \"ff_Latn_NE\": \"Kifulani (Kilatini, Nijeri)\",
        \"ff_Latn_NG\": \"Kifulani (Kilatini, Nijeria)\",
        \"fo_DK\": \"Kifaroe (Denmaki)\",
        \"fr_BJ\": \"Kifaransa (Benini)\",
        \"fr_CI\": \"Kifaransa (Kodivaa)\",
        \"fr_LU\": \"Kifaransa (Lasembagi)\",
        \"fr_MA\": \"Kifaransa (Moroko)\",
        \"fr_NE\": \"Kifaransa (Nijeri)\",
        \"fr_TD\": \"Kifaransa (Chadi)\",
        \"gv\": \"Kimanksi\",
        \"gv_IM\": \"Kimanksi (Kisiwa cha Man)\",
        \"ha_NE\": \"Kihausa (Nijeri)\",
        \"ha_NG\": \"Kihausa (Nijeria)\",
        \"hr_HR\": \"Kikroeshia (Kroeshia)\",
        \"ig_NG\": \"Kiigbo (Nijeria)\",
        \"ky\": \"Kikirigizi\",
        \"ky_KG\": \"Kikirigizi (Kirigizistani)\",
        \"lb_LU\": \"Kilasembagi (Lasembagi)\",
        \"lv_LV\": \"Kilatvia (Lativia)\",
        \"mk\": \"Kimasedonia\",
        \"mk_MK\": \"Kimasedonia (Masedonia ya Kaskazini)\",
        \"my_MM\": \"Kiburma (Myama)\",
        \"nb_NO\": \"Kinorwe cha Bokmal (Norwe)\",
        \"ne_NP\": \"Kinepali (Nepali)\",
        \"nn_NO\": \"Kinorwe cha Nynorsk (Norwe)\",
        \"no_NO\": \"Kinorwe (Norwe)\",
        \"ps_AF\": \"Kipashto (Afuganistani)\",
        \"pt_LU\": \"Kireno (Lasembagi)\",
        \"pt_ST\": \"Kireno (Sao Tome na Prinsipe)\",
        \"pt_TL\": \"Kireno (Timori ya Mashariki)\",
        \"se_NO\": \"Kisami cha Kaskazini (Norwe)\",
        \"tr_CY\": \"Kituruki (Saiprasi)\",
        \"uz_AF\": \"Kiuzbeki (Afuganistani)\",
        \"uz_Arab_AF\": \"Kiuzbeki (Kiarabu, Afuganistani)\",
        \"vi_VN\": \"Kivietinamu (Vietnamu)\",
        \"yi\": \"Kiyidi\",
        \"yo_BJ\": \"Kiyoruba (Benini)\",
        \"yo_NG\": \"Kiyoruba (Nijeria)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/sw_CD.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/sw_CD.json");
    }
}
