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

/* vendor/symfony/intl/Resources/data/locales/sw_KE.json */
class __TwigTemplate_3000e6f3c3c1cebe5c65f81eba3ea4ee3af658d63d56df5ccaa141c710e6d318 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sw_KE.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sw_KE.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ar_JO\": \"Kiarabu (Yordani)\",
        \"ar_LB\": \"Kiarabu (Lebanoni)\",
        \"ar_MA\": \"Kiarabu (Moroko)\",
        \"ar_OM\": \"Kiarabu (Omani)\",
        \"ar_PS\": \"Kiarabu (Himaya za Palestina)\",
        \"ar_QA\": \"Kiarabu (Katari)\",
        \"ar_SY\": \"Kiarabu (Shamu)\",
        \"ar_TD\": \"Kiarabu (Chadi)\",
        \"as\": \"Kiasamisi\",
        \"as_IN\": \"Kiasamisi (India)\",
        \"az_AZ\": \"Kiazerbaijani (Azabajani)\",
        \"az_Cyrl_AZ\": \"Kiazerbaijani (Kisiriliki, Azabajani)\",
        \"az_Latn_AZ\": \"Kiazerbaijani (Kilatini, Azabajani)\",
        \"be_BY\": \"Kibelarusi (Belarusi)\",
        \"da_DK\": \"Kidenmaki (Denmaki)\",
        \"da_GL\": \"Kidenmaki (Grinilandi)\",
        \"de_LI\": \"Kijerumani (Lishenteni)\",
        \"de_LU\": \"Kijerumani (Lasembagi)\",
        \"dz_BT\": \"Kizongkha (Bhutani)\",
        \"el_CY\": \"Kigiriki (Saiprasi)\",
        \"en_AI\": \"Kiingereza (Anguila)\",
        \"en_CC\": \"Kiingereza (Visiwa vya Kokos [Keeling])\",
        \"en_CY\": \"Kiingereza (Saiprasi)\",
        \"en_DK\": \"Kiingereza (Denmaki)\",
        \"en_FM\": \"Kiingereza (Mikronesia)\",
        \"en_GU\": \"Kiingereza (Guami)\",
        \"en_IO\": \"Kiingereza (Himaya ya Uingereza katika Bahari Hindi)\",
        \"en_KY\": \"Kiingereza (Visiwa vya Kaimani)\",
        \"en_LS\": \"Kiingereza (Lesotho)\",
        \"en_MS\": \"Kiingereza (Montserati)\",
        \"en_PG\": \"Kiingereza (Papua Guinea Mpya)\",
        \"en_PR\": \"Kiingereza (Puetoriko)\",
        \"en_SG\": \"Kiingereza (Singapuri)\",
        \"en_VG\": \"Kiingereza (Visiwa vya Virgin vya Uingereza)\",
        \"en_VI\": \"Kiingereza (Visiwa vya Virgin vya Marekani)\",
        \"es_EC\": \"Kihispania (Ekwado)\",
        \"es_PR\": \"Kihispania (Puetoriko)\",
        \"es_PY\": \"Kihispania (Paragwai)\",
        \"es_UY\": \"Kihispania (Urugwai)\",
        \"fa_AF\": \"Kiajemi (Afghanistani)\",
        \"ff_Latn_NE\": \"Kifulani (Kilatini, Nijeri)\",
        \"fo_DK\": \"Kifaroe (Denmaki)\",
        \"fr_BJ\": \"Kifaransa (Benini)\",
        \"fr_CD\": \"Kifaransa (Kongo - Kinshasa)\",
        \"fr_CI\": \"Kifaransa (Ivorikosti)\",
        \"fr_GA\": \"Kifaransa (Gaboni)\",
        \"fr_GP\": \"Kifaransa (Gwadelupe)\",
        \"fr_LU\": \"Kifaransa (Lasembagi)\",
        \"fr_MA\": \"Kifaransa (Moroko)\",
        \"fr_MC\": \"Kifaransa (Monako)\",
        \"fr_MQ\": \"Kifaransa (Martiniki)\",
        \"fr_NC\": \"Kifaransa (Nyukaledonia)\",
        \"fr_NE\": \"Kifaransa (Nijeri)\",
        \"fr_PF\": \"Kifaransa (Polinesia ya Ufaransa)\",
        \"fr_SY\": \"Kifaransa (Shamu)\",
        \"fr_TD\": \"Kifaransa (Chadi)\",
        \"fr_YT\": \"Kifaransa (Mayote)\",
        \"ha_NE\": \"Kihausa (Nijeri)\",
        \"hr_HR\": \"Kikroeshia (Kroashia)\",
        \"hy\": \"Kiamenia\",
        \"hy_AM\": \"Kiamenia (Armenia)\",
        \"it_VA\": \"Kiitaliano (Mji wa Vatikani)\",
        \"kl_GL\": \"Kikalaallisut (Grinilandi)\",
        \"km\": \"Kikhmeri\",
        \"km_KH\": \"Kikhmeri (Kambodia)\",
        \"kn\": \"Kikanada\",
        \"kn_IN\": \"Kikanada (India)\",
        \"lb_LU\": \"Kilasembagi (Lasembagi)\",
        \"ln_CD\": \"Kilingala (Kongo - Kinshasa)\",
        \"lo_LA\": \"Kilaosi (Laosi)\",
        \"lu_CD\": \"Kiluba-Katanga (Kongo - Kinshasa)\",
        \"lv_LV\": \"Kilatvia (Lativia)\",
        \"mk\": \"Kimasedonia\",
        \"mk_MK\": \"Kimasedonia (Masedonia)\",
        \"ms_SG\": \"Kimalei (Singapuri)\",
        \"my_MM\": \"Kiburma (Myama [Burma])\",
        \"nb_NO\": \"Kinorwe cha Bokmal (Norwe)\",
        \"ne_NP\": \"Kinepali (Nepali)\",
        \"nl_SR\": \"Kiholanzi (Surinamu)\",
        \"nn_NO\": \"Kinorwe cha Nynorsk (Norwe)\",
        \"no_NO\": \"Kinorwe (Norwe)\",
        \"or\": \"Kiodia\",
        \"or_IN\": \"Kiodia (India)\",
        \"pl_PL\": \"Kipolandi (Polandi)\",
        \"ps_AF\": \"Kipashto (Afghanistani)\",
        \"pt_CV\": \"Kireno (Kepuvede)\",
        \"pt_LU\": \"Kireno (Lasembagi)\",
        \"pt_ST\": \"Kireno (Sao Tome na Prinsipe)\",
        \"qu_EC\": \"Kikechua (Ekwado)\",
        \"ru_BY\": \"Kirusi (Belarusi)\",
        \"ru_UA\": \"Kirusi (Ukreni)\",
        \"se_NO\": \"Kisami cha Kaskazini (Norwe)\",
        \"sq_MK\": \"Kialbania (Masedonia)\",
        \"sw_CD\": \"Kiswahili (Kongo - Kinshasa)\",
        \"ta_SG\": \"Kitamili (Singapuri)\",
        \"th_TH\": \"Kithai (Thailandi)\",
        \"tk_TM\": \"Kiturukimeni (Turukimenstani)\",
        \"tr_CY\": \"Kituruki (Saiprasi)\",
        \"ug\": \"Kiuiguri\",
        \"ug_CN\": \"Kiuiguri (Uchina)\",
        \"uk_UA\": \"Kiukraini (Ukreni)\",
        \"uz_AF\": \"Kiuzbeki (Afghanistani)\",
        \"uz_Arab_AF\": \"Kiuzbeki (Kiarabu, Afghanistani)\",
        \"vi_VN\": \"Kivietinamu (Vietnamu)\",
        \"yo_BJ\": \"Kiyoruba (Benini)\",
        \"zh_Hans_SG\": \"Kichina (Rahisi, Singapuri)\",
        \"zh_Hant_TW\": \"Kichina (Cha jadi, Taiwani)\",
        \"zh_SG\": \"Kichina (Singapuri)\",
        \"zh_TW\": \"Kichina (Taiwani)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/sw_KE.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ar_JO\": \"Kiarabu (Yordani)\",
        \"ar_LB\": \"Kiarabu (Lebanoni)\",
        \"ar_MA\": \"Kiarabu (Moroko)\",
        \"ar_OM\": \"Kiarabu (Omani)\",
        \"ar_PS\": \"Kiarabu (Himaya za Palestina)\",
        \"ar_QA\": \"Kiarabu (Katari)\",
        \"ar_SY\": \"Kiarabu (Shamu)\",
        \"ar_TD\": \"Kiarabu (Chadi)\",
        \"as\": \"Kiasamisi\",
        \"as_IN\": \"Kiasamisi (India)\",
        \"az_AZ\": \"Kiazerbaijani (Azabajani)\",
        \"az_Cyrl_AZ\": \"Kiazerbaijani (Kisiriliki, Azabajani)\",
        \"az_Latn_AZ\": \"Kiazerbaijani (Kilatini, Azabajani)\",
        \"be_BY\": \"Kibelarusi (Belarusi)\",
        \"da_DK\": \"Kidenmaki (Denmaki)\",
        \"da_GL\": \"Kidenmaki (Grinilandi)\",
        \"de_LI\": \"Kijerumani (Lishenteni)\",
        \"de_LU\": \"Kijerumani (Lasembagi)\",
        \"dz_BT\": \"Kizongkha (Bhutani)\",
        \"el_CY\": \"Kigiriki (Saiprasi)\",
        \"en_AI\": \"Kiingereza (Anguila)\",
        \"en_CC\": \"Kiingereza (Visiwa vya Kokos [Keeling])\",
        \"en_CY\": \"Kiingereza (Saiprasi)\",
        \"en_DK\": \"Kiingereza (Denmaki)\",
        \"en_FM\": \"Kiingereza (Mikronesia)\",
        \"en_GU\": \"Kiingereza (Guami)\",
        \"en_IO\": \"Kiingereza (Himaya ya Uingereza katika Bahari Hindi)\",
        \"en_KY\": \"Kiingereza (Visiwa vya Kaimani)\",
        \"en_LS\": \"Kiingereza (Lesotho)\",
        \"en_MS\": \"Kiingereza (Montserati)\",
        \"en_PG\": \"Kiingereza (Papua Guinea Mpya)\",
        \"en_PR\": \"Kiingereza (Puetoriko)\",
        \"en_SG\": \"Kiingereza (Singapuri)\",
        \"en_VG\": \"Kiingereza (Visiwa vya Virgin vya Uingereza)\",
        \"en_VI\": \"Kiingereza (Visiwa vya Virgin vya Marekani)\",
        \"es_EC\": \"Kihispania (Ekwado)\",
        \"es_PR\": \"Kihispania (Puetoriko)\",
        \"es_PY\": \"Kihispania (Paragwai)\",
        \"es_UY\": \"Kihispania (Urugwai)\",
        \"fa_AF\": \"Kiajemi (Afghanistani)\",
        \"ff_Latn_NE\": \"Kifulani (Kilatini, Nijeri)\",
        \"fo_DK\": \"Kifaroe (Denmaki)\",
        \"fr_BJ\": \"Kifaransa (Benini)\",
        \"fr_CD\": \"Kifaransa (Kongo - Kinshasa)\",
        \"fr_CI\": \"Kifaransa (Ivorikosti)\",
        \"fr_GA\": \"Kifaransa (Gaboni)\",
        \"fr_GP\": \"Kifaransa (Gwadelupe)\",
        \"fr_LU\": \"Kifaransa (Lasembagi)\",
        \"fr_MA\": \"Kifaransa (Moroko)\",
        \"fr_MC\": \"Kifaransa (Monako)\",
        \"fr_MQ\": \"Kifaransa (Martiniki)\",
        \"fr_NC\": \"Kifaransa (Nyukaledonia)\",
        \"fr_NE\": \"Kifaransa (Nijeri)\",
        \"fr_PF\": \"Kifaransa (Polinesia ya Ufaransa)\",
        \"fr_SY\": \"Kifaransa (Shamu)\",
        \"fr_TD\": \"Kifaransa (Chadi)\",
        \"fr_YT\": \"Kifaransa (Mayote)\",
        \"ha_NE\": \"Kihausa (Nijeri)\",
        \"hr_HR\": \"Kikroeshia (Kroashia)\",
        \"hy\": \"Kiamenia\",
        \"hy_AM\": \"Kiamenia (Armenia)\",
        \"it_VA\": \"Kiitaliano (Mji wa Vatikani)\",
        \"kl_GL\": \"Kikalaallisut (Grinilandi)\",
        \"km\": \"Kikhmeri\",
        \"km_KH\": \"Kikhmeri (Kambodia)\",
        \"kn\": \"Kikanada\",
        \"kn_IN\": \"Kikanada (India)\",
        \"lb_LU\": \"Kilasembagi (Lasembagi)\",
        \"ln_CD\": \"Kilingala (Kongo - Kinshasa)\",
        \"lo_LA\": \"Kilaosi (Laosi)\",
        \"lu_CD\": \"Kiluba-Katanga (Kongo - Kinshasa)\",
        \"lv_LV\": \"Kilatvia (Lativia)\",
        \"mk\": \"Kimasedonia\",
        \"mk_MK\": \"Kimasedonia (Masedonia)\",
        \"ms_SG\": \"Kimalei (Singapuri)\",
        \"my_MM\": \"Kiburma (Myama [Burma])\",
        \"nb_NO\": \"Kinorwe cha Bokmal (Norwe)\",
        \"ne_NP\": \"Kinepali (Nepali)\",
        \"nl_SR\": \"Kiholanzi (Surinamu)\",
        \"nn_NO\": \"Kinorwe cha Nynorsk (Norwe)\",
        \"no_NO\": \"Kinorwe (Norwe)\",
        \"or\": \"Kiodia\",
        \"or_IN\": \"Kiodia (India)\",
        \"pl_PL\": \"Kipolandi (Polandi)\",
        \"ps_AF\": \"Kipashto (Afghanistani)\",
        \"pt_CV\": \"Kireno (Kepuvede)\",
        \"pt_LU\": \"Kireno (Lasembagi)\",
        \"pt_ST\": \"Kireno (Sao Tome na Prinsipe)\",
        \"qu_EC\": \"Kikechua (Ekwado)\",
        \"ru_BY\": \"Kirusi (Belarusi)\",
        \"ru_UA\": \"Kirusi (Ukreni)\",
        \"se_NO\": \"Kisami cha Kaskazini (Norwe)\",
        \"sq_MK\": \"Kialbania (Masedonia)\",
        \"sw_CD\": \"Kiswahili (Kongo - Kinshasa)\",
        \"ta_SG\": \"Kitamili (Singapuri)\",
        \"th_TH\": \"Kithai (Thailandi)\",
        \"tk_TM\": \"Kiturukimeni (Turukimenstani)\",
        \"tr_CY\": \"Kituruki (Saiprasi)\",
        \"ug\": \"Kiuiguri\",
        \"ug_CN\": \"Kiuiguri (Uchina)\",
        \"uk_UA\": \"Kiukraini (Ukreni)\",
        \"uz_AF\": \"Kiuzbeki (Afghanistani)\",
        \"uz_Arab_AF\": \"Kiuzbeki (Kiarabu, Afghanistani)\",
        \"vi_VN\": \"Kivietinamu (Vietnamu)\",
        \"yo_BJ\": \"Kiyoruba (Benini)\",
        \"zh_Hans_SG\": \"Kichina (Rahisi, Singapuri)\",
        \"zh_Hant_TW\": \"Kichina (Cha jadi, Taiwani)\",
        \"zh_SG\": \"Kichina (Singapuri)\",
        \"zh_TW\": \"Kichina (Taiwani)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/sw_KE.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/sw_KE.json");
    }
}