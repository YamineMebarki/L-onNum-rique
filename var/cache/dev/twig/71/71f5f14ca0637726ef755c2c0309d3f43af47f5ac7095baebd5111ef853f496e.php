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

/* vendor/symfony/intl/Resources/data/locales/mg.json */
class __TwigTemplate_a99bc9adf21e5fe484011add4c278e9f0f995b470dfa4487c817cc1a873aa962 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/mg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/mg.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ak\": \"Akan\",
        \"ak_GH\": \"Akan (Ghana)\",
        \"am\": \"Amharika\",
        \"am_ET\": \"Amharika (Ethiopia)\",
        \"ar\": \"Arabo\",
        \"ar_AE\": \"Arabo (Emirà Arabo mitambatra)\",
        \"ar_BH\": \"Arabo (Bahrain)\",
        \"ar_DJ\": \"Arabo (Djiboti)\",
        \"ar_DZ\": \"Arabo (Alzeria)\",
        \"ar_EG\": \"Arabo (Ejypta)\",
        \"ar_ER\": \"Arabo (Eritrea)\",
        \"ar_IL\": \"Arabo (Israely)\",
        \"ar_IQ\": \"Arabo (Irak)\",
        \"ar_JO\": \"Arabo (Jordania)\",
        \"ar_KM\": \"Arabo (Kômaoro)\",
        \"ar_KW\": \"Arabo (Kôeity)\",
        \"ar_LB\": \"Arabo (Libana)\",
        \"ar_LY\": \"Arabo (Libya)\",
        \"ar_MA\": \"Arabo (Marôka)\",
        \"ar_MR\": \"Arabo (Maoritania)\",
        \"ar_OM\": \"Arabo (Oman)\",
        \"ar_PS\": \"Arabo (Palestina)\",
        \"ar_QA\": \"Arabo (Katar)\",
        \"ar_SA\": \"Arabo (Arabia saodita)\",
        \"ar_SD\": \"Arabo (Sodan)\",
        \"ar_SO\": \"Arabo (Somalia)\",
        \"ar_SY\": \"Arabo (Syria)\",
        \"ar_TD\": \"Arabo (Tsady)\",
        \"ar_TN\": \"Arabo (Tonizia)\",
        \"ar_YE\": \"Arabo (Yemen)\",
        \"be\": \"Bielorosy\",
        \"be_BY\": \"Bielorosy (Belarosy)\",
        \"bg\": \"Biolgara\",
        \"bg_BG\": \"Biolgara (Biolgaria)\",
        \"bn\": \"Bengali\",
        \"bn_BD\": \"Bengali (Bangladesy)\",
        \"bn_IN\": \"Bengali (Indy)\",
        \"cs\": \"Tseky\",
        \"cs_CZ\": \"Tseky (Repoblikan’i Tseky)\",
        \"de\": \"Alemanina\",
        \"de_AT\": \"Alemanina (Aotrisy)\",
        \"de_BE\": \"Alemanina (Belzika)\",
        \"de_CH\": \"Alemanina (Soisa)\",
        \"de_DE\": \"Alemanina (Alemaina)\",
        \"de_IT\": \"Alemanina (Italia)\",
        \"de_LI\": \"Alemanina (Listenstein)\",
        \"de_LU\": \"Alemanina (Lioksamboro)\",
        \"el\": \"Grika\",
        \"el_CY\": \"Grika (Sypra)\",
        \"el_GR\": \"Grika (Gresy)\",
        \"en\": \"Anglisy\",
        \"en_AE\": \"Anglisy (Emirà Arabo mitambatra)\",
        \"en_AG\": \"Anglisy (Antiga sy Barboda)\",
        \"en_AI\": \"Anglisy (Anguilla)\",
        \"en_AS\": \"Anglisy (Samoa amerikanina)\",
        \"en_AT\": \"Anglisy (Aotrisy)\",
        \"en_AU\": \"Anglisy (Aostralia)\",
        \"en_BB\": \"Anglisy (Barbady)\",
        \"en_BE\": \"Anglisy (Belzika)\",
        \"en_BI\": \"Anglisy (Borondi)\",
        \"en_BM\": \"Anglisy (Bermioda)\",
        \"en_BS\": \"Anglisy (Bahamas)\",
        \"en_BW\": \"Anglisy (Botsoana)\",
        \"en_BZ\": \"Anglisy (Belize)\",
        \"en_CA\": \"Anglisy (Kanada)\",
        \"en_CH\": \"Anglisy (Soisa)\",
        \"en_CK\": \"Anglisy (Nosy Kook)\",
        \"en_CM\": \"Anglisy (Kamerona)\",
        \"en_CY\": \"Anglisy (Sypra)\",
        \"en_DE\": \"Anglisy (Alemaina)\",
        \"en_DK\": \"Anglisy (Danmarka)\",
        \"en_DM\": \"Anglisy (Dominika)\",
        \"en_ER\": \"Anglisy (Eritrea)\",
        \"en_FI\": \"Anglisy (Finlandy)\",
        \"en_FJ\": \"Anglisy (Fidji)\",
        \"en_FK\": \"Anglisy (Nosy Falkand)\",
        \"en_FM\": \"Anglisy (Mikrônezia)\",
        \"en_GB\": \"Anglisy (Angletera)\",
        \"en_GD\": \"Anglisy (Grenady)\",
        \"en_GH\": \"Anglisy (Ghana)\",
        \"en_GI\": \"Anglisy (Zibraltara)\",
        \"en_GM\": \"Anglisy (Gambia)\",
        \"en_GU\": \"Anglisy (Guam)\",
        \"en_GY\": \"Anglisy (Guyana)\",
        \"en_IE\": \"Anglisy (Irlandy)\",
        \"en_IL\": \"Anglisy (Israely)\",
        \"en_IN\": \"Anglisy (Indy)\",
        \"en_IO\": \"Anglisy (Faridranomasina indiana britanika)\",
        \"en_JM\": \"Anglisy (Jamaïka)\",
        \"en_KE\": \"Anglisy (Kenya)\",
        \"en_KI\": \"Anglisy (Kiribati)\",
        \"en_KN\": \"Anglisy (Saint-Christophe-et-Niévès)\",
        \"en_KY\": \"Anglisy (Nosy Kayman)\",
        \"en_LC\": \"Anglisy (Sainte-Lucie)\",
        \"en_LR\": \"Anglisy (Liberia)\",
        \"en_LS\": \"Anglisy (Lesotho)\",
        \"en_MG\": \"Anglisy (Madagasikara)\",
        \"en_MH\": \"Anglisy (Nosy Marshall)\",
        \"en_MP\": \"Anglisy (Nosy Mariana Atsinanana)\",
        \"en_MS\": \"Anglisy (Montserrat)\",
        \"en_MT\": \"Anglisy (Malta)\",
        \"en_MU\": \"Anglisy (Maorisy)\",
        \"en_MW\": \"Anglisy (Malaoì)\",
        \"en_MY\": \"Anglisy (Malaizia)\",
        \"en_NA\": \"Anglisy (Namibia)\",
        \"en_NF\": \"Anglisy (Nosy Norfolk)\",
        \"en_NG\": \"Anglisy (Nizeria)\",
        \"en_NL\": \"Anglisy (Holanda)\",
        \"en_NR\": \"Anglisy (Naorò)\",
        \"en_NU\": \"Anglisy (Nioé)\",
        \"en_NZ\": \"Anglisy (Nouvelle-Zélande)\",
        \"en_PG\": \"Anglisy (Papouasie-Nouvelle-Guinée)\",
        \"en_PH\": \"Anglisy (Filipina)\",
        \"en_PK\": \"Anglisy (Pakistan)\",
        \"en_PN\": \"Anglisy (Pitkairn)\",
        \"en_PR\": \"Anglisy (Pôrtô Rikô)\",
        \"en_PW\": \"Anglisy (Palao)\",
        \"en_RW\": \"Anglisy (Roanda)\",
        \"en_SB\": \"Anglisy (Nosy Salomona)\",
        \"en_SC\": \"Anglisy (Seyshela)\",
        \"en_SD\": \"Anglisy (Sodan)\",
        \"en_SE\": \"Anglisy (Soedy)\",
        \"en_SG\": \"Anglisy (Singaporo)\",
        \"en_SH\": \"Anglisy (Sainte-Hélène)\",
        \"en_SI\": \"Anglisy (Slovenia)\",
        \"en_SL\": \"Anglisy (Sierra Leone)\",
        \"en_SZ\": \"Anglisy (Soazilandy)\",
        \"en_TC\": \"Anglisy (Nosy Turks sy Caïques)\",
        \"en_TK\": \"Anglisy (Tokelao)\",
        \"en_TO\": \"Anglisy (Tongà)\",
        \"en_TT\": \"Anglisy (Trinidad sy Tobagô)\",
        \"en_TV\": \"Anglisy (Tovalò)\",
        \"en_TZ\": \"Anglisy (Tanzania)\",
        \"en_UG\": \"Anglisy (Oganda)\",
        \"en_US\": \"Anglisy (Etazonia)\",
        \"en_VC\": \"Anglisy (Saint-Vincent-et-les Grenadines)\",
        \"en_VG\": \"Anglisy (Nosy britanika virijiny)\",
        \"en_VI\": \"Anglisy (Nosy Virijiny Etazonia)\",
        \"en_VU\": \"Anglisy (Vanoatò)\",
        \"en_WS\": \"Anglisy (Samoa)\",
        \"en_ZA\": \"Anglisy (Afrika Atsimo)\",
        \"en_ZM\": \"Anglisy (Zambia)\",
        \"en_ZW\": \"Anglisy (Zimbaboe)\",
        \"es\": \"Espaniola\",
        \"es_AR\": \"Espaniola (Arzantina)\",
        \"es_BO\": \"Espaniola (Bolivia)\",
        \"es_BR\": \"Espaniola (Brezila)\",
        \"es_BZ\": \"Espaniola (Belize)\",
        \"es_CL\": \"Espaniola (Shili)\",
        \"es_CO\": \"Espaniola (Kôlômbia)\",
        \"es_CR\": \"Espaniola (Kosta Rikà)\",
        \"es_CU\": \"Espaniola (Kiobà)\",
        \"es_DO\": \"Espaniola (Repoblika Dominikanina)\",
        \"es_EC\": \"Espaniola (Ekoatera)\",
        \"es_ES\": \"Espaniola (Espaina)\",
        \"es_GQ\": \"Espaniola (Guinea Ekoatera)\",
        \"es_GT\": \"Espaniola (Goatemalà)\",
        \"es_HN\": \"Espaniola (Hondiorasy)\",
        \"es_MX\": \"Espaniola (Meksika)\",
        \"es_NI\": \"Espaniola (Nikaragoà)\",
        \"es_PA\": \"Espaniola (Panama)\",
        \"es_PE\": \"Espaniola (Peroa)\",
        \"es_PH\": \"Espaniola (Filipina)\",
        \"es_PR\": \"Espaniola (Pôrtô Rikô)\",
        \"es_PY\": \"Espaniola (Paragoay)\",
        \"es_SV\": \"Espaniola (El Salvador)\",
        \"es_US\": \"Espaniola (Etazonia)\",
        \"es_UY\": \"Espaniola (Orogoay)\",
        \"es_VE\": \"Espaniola (Venezoelà)\",
        \"fa\": \"Persa\",
        \"fa_AF\": \"Persa (Afghanistan)\",
        \"fa_IR\": \"Persa (Iran)\",
        \"fr\": \"Frantsay\",
        \"fr_BE\": \"Frantsay (Belzika)\",
        \"fr_BF\": \"Frantsay (Borkina Faso)\",
        \"fr_BI\": \"Frantsay (Borondi)\",
        \"fr_BJ\": \"Frantsay (Benin)\",
        \"fr_CA\": \"Frantsay (Kanada)\",
        \"fr_CD\": \"Frantsay (Repoblikan’i Kongo)\",
        \"fr_CF\": \"Frantsay (Repoblika Ivon’Afrika)\",
        \"fr_CG\": \"Frantsay (Kôngô)\",
        \"fr_CH\": \"Frantsay (Soisa)\",
        \"fr_CI\": \"Frantsay (Côte d’Ivoire)\",
        \"fr_CM\": \"Frantsay (Kamerona)\",
        \"fr_DJ\": \"Frantsay (Djiboti)\",
        \"fr_DZ\": \"Frantsay (Alzeria)\",
        \"fr_FR\": \"Frantsay (Frantsa)\",
        \"fr_GA\": \"Frantsay (Gabon)\",
        \"fr_GF\": \"Frantsay (Guyana frantsay)\",
        \"fr_GN\": \"Frantsay (Ginea)\",
        \"fr_GP\": \"Frantsay (Goadelopy)\",
        \"fr_GQ\": \"Frantsay (Guinea Ekoatera)\",
        \"fr_HT\": \"Frantsay (Haiti)\",
        \"fr_KM\": \"Frantsay (Kômaoro)\",
        \"fr_LU\": \"Frantsay (Lioksamboro)\",
        \"fr_MA\": \"Frantsay (Marôka)\",
        \"fr_MC\": \"Frantsay (Mônakô)\",
        \"fr_MG\": \"Frantsay (Madagasikara)\",
        \"fr_ML\": \"Frantsay (Mali)\",
        \"fr_MQ\": \"Frantsay (Martinika)\",
        \"fr_MR\": \"Frantsay (Maoritania)\",
        \"fr_MU\": \"Frantsay (Maorisy)\",
        \"fr_NC\": \"Frantsay (Nouvelle-Calédonie)\",
        \"fr_NE\": \"Frantsay (Niger)\",
        \"fr_PF\": \"Frantsay (Polynezia frantsay)\",
        \"fr_PM\": \"Frantsay (Saint-Pierre-et-Miquelon)\",
        \"fr_RE\": \"Frantsay (Larenion)\",
        \"fr_RW\": \"Frantsay (Roanda)\",
        \"fr_SC\": \"Frantsay (Seyshela)\",
        \"fr_SN\": \"Frantsay (Senegal)\",
        \"fr_SY\": \"Frantsay (Syria)\",
        \"fr_TD\": \"Frantsay (Tsady)\",
        \"fr_TG\": \"Frantsay (Togo)\",
        \"fr_TN\": \"Frantsay (Tonizia)\",
        \"fr_VU\": \"Frantsay (Vanoatò)\",
        \"fr_WF\": \"Frantsay (Wallis sy Futuna)\",
        \"fr_YT\": \"Frantsay (Mayôty)\",
        \"ha\": \"haoussa\",
        \"ha_GH\": \"haoussa (Ghana)\",
        \"ha_NE\": \"haoussa (Niger)\",
        \"ha_NG\": \"haoussa (Nizeria)\",
        \"hi\": \"hindi\",
        \"hi_IN\": \"hindi (Indy)\",
        \"hu\": \"hongroà\",
        \"hu_HU\": \"hongroà (Hongria)\",
        \"id\": \"Indonezianina\",
        \"id_ID\": \"Indonezianina (Indonezia)\",
        \"ig\": \"igbo\",
        \"ig_NG\": \"igbo (Nizeria)\",
        \"it\": \"Italianina\",
        \"it_CH\": \"Italianina (Soisa)\",
        \"it_IT\": \"Italianina (Italia)\",
        \"it_SM\": \"Italianina (Saint-Marin)\",
        \"it_VA\": \"Italianina (Firenen’i Vatikana)\",
        \"ja\": \"Japoney\",
        \"ja_JP\": \"Japoney (Japana)\",
        \"jv\": \"Javaney\",
        \"jv_ID\": \"Javaney (Indonezia)\",
        \"km\": \"khmer\",
        \"km_KH\": \"khmer (Kambôdja)\",
        \"ko\": \"Koreanina\",
        \"ko_KP\": \"Koreanina (Korea Avaratra)\",
        \"ko_KR\": \"Koreanina (Korea Atsimo)\",
        \"mg\": \"Malagasy\",
        \"mg_MG\": \"Malagasy (Madagasikara)\",
        \"ms\": \"Malay\",
        \"ms_BN\": \"Malay (Brunei)\",
        \"ms_MY\": \"Malay (Malaizia)\",
        \"ms_SG\": \"Malay (Singaporo)\",
        \"my\": \"Birmana\",
        \"my_MM\": \"Birmana (Myanmar)\",
        \"ne\": \"Nepale\",
        \"ne_IN\": \"Nepale (Indy)\",
        \"ne_NP\": \"Nepale (Nepala)\",
        \"nl\": \"Holandey\",
        \"nl_AW\": \"Holandey (Arobà)\",
        \"nl_BE\": \"Holandey (Belzika)\",
        \"nl_NL\": \"Holandey (Holanda)\",
        \"nl_SR\": \"Holandey (Sorinam)\",
        \"pa\": \"Penjabi\",
        \"pa_IN\": \"Penjabi (Indy)\",
        \"pa_PK\": \"Penjabi (Pakistan)\",
        \"pl\": \"Poloney\",
        \"pl_PL\": \"Poloney (Pôlôna)\",
        \"pt\": \"Portiogey\",
        \"pt_AO\": \"Portiogey (Angola)\",
        \"pt_BR\": \"Portiogey (Brezila)\",
        \"pt_CH\": \"Portiogey (Soisa)\",
        \"pt_CV\": \"Portiogey (Nosy Cap-Vert)\",
        \"pt_GQ\": \"Portiogey (Guinea Ekoatera)\",
        \"pt_GW\": \"Portiogey (Giné-Bisao)\",
        \"pt_LU\": \"Portiogey (Lioksamboro)\",
        \"pt_MZ\": \"Portiogey (Mozambika)\",
        \"pt_PT\": \"Portiogey (Pôrtiogala)\",
        \"pt_ST\": \"Portiogey (São Tomé-et-Príncipe)\",
        \"pt_TL\": \"Portiogey (Timor Atsinanana)\",
        \"ro\": \"Romanianina\",
        \"ro_MD\": \"Romanianina (Môldavia)\",
        \"ro_RO\": \"Romanianina (Romania)\",
        \"ru\": \"Rosianina\",
        \"ru_BY\": \"Rosianina (Belarosy)\",
        \"ru_KG\": \"Rosianina (Kiordistan)\",
        \"ru_KZ\": \"Rosianina (Kazakhstan)\",
        \"ru_MD\": \"Rosianina (Môldavia)\",
        \"ru_RU\": \"Rosianina (Rosia)\",
        \"ru_UA\": \"Rosianina (Okraina)\",
        \"rw\": \"Roande\",
        \"rw_RW\": \"Roande (Roanda)\",
        \"so\": \"Somalianina\",
        \"so_DJ\": \"Somalianina (Djiboti)\",
        \"so_ET\": \"Somalianina (Ethiopia)\",
        \"so_KE\": \"Somalianina (Kenya)\",
        \"so_SO\": \"Somalianina (Somalia)\",
        \"sv\": \"Soisa\",
        \"sv_FI\": \"Soisa (Finlandy)\",
        \"sv_SE\": \"Soisa (Soedy)\",
        \"ta\": \"Tamoila\",
        \"ta_IN\": \"Tamoila (Indy)\",
        \"ta_LK\": \"Tamoila (Sri Lanka)\",
        \"ta_MY\": \"Tamoila (Malaizia)\",
        \"ta_SG\": \"Tamoila (Singaporo)\",
        \"th\": \"Taioaney\",
        \"th_TH\": \"Taioaney (Thailandy)\",
        \"tr\": \"Tiorka\",
        \"tr_CY\": \"Tiorka (Sypra)\",
        \"tr_TR\": \"Tiorka (Torkia)\",
        \"uk\": \"Okrainianina\",
        \"uk_UA\": \"Okrainianina (Okraina)\",
        \"ur\": \"Ordò\",
        \"ur_IN\": \"Ordò (Indy)\",
        \"ur_PK\": \"Ordò (Pakistan)\",
        \"vi\": \"Vietnamianina\",
        \"vi_VN\": \"Vietnamianina (Vietnam)\",
        \"yo\": \"Yôrobà\",
        \"yo_BJ\": \"Yôrobà (Benin)\",
        \"yo_NG\": \"Yôrobà (Nizeria)\",
        \"zh\": \"Sinoa, Mandarin\",
        \"zh_CN\": \"Sinoa, Mandarin (Sina)\",
        \"zh_SG\": \"Sinoa, Mandarin (Singaporo)\",
        \"zh_TW\": \"Sinoa, Mandarin (Taioana)\",
        \"zu\": \"Zolò\",
        \"zu_ZA\": \"Zolò (Afrika Atsimo)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/mg.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ak\": \"Akan\",
        \"ak_GH\": \"Akan (Ghana)\",
        \"am\": \"Amharika\",
        \"am_ET\": \"Amharika (Ethiopia)\",
        \"ar\": \"Arabo\",
        \"ar_AE\": \"Arabo (Emirà Arabo mitambatra)\",
        \"ar_BH\": \"Arabo (Bahrain)\",
        \"ar_DJ\": \"Arabo (Djiboti)\",
        \"ar_DZ\": \"Arabo (Alzeria)\",
        \"ar_EG\": \"Arabo (Ejypta)\",
        \"ar_ER\": \"Arabo (Eritrea)\",
        \"ar_IL\": \"Arabo (Israely)\",
        \"ar_IQ\": \"Arabo (Irak)\",
        \"ar_JO\": \"Arabo (Jordania)\",
        \"ar_KM\": \"Arabo (Kômaoro)\",
        \"ar_KW\": \"Arabo (Kôeity)\",
        \"ar_LB\": \"Arabo (Libana)\",
        \"ar_LY\": \"Arabo (Libya)\",
        \"ar_MA\": \"Arabo (Marôka)\",
        \"ar_MR\": \"Arabo (Maoritania)\",
        \"ar_OM\": \"Arabo (Oman)\",
        \"ar_PS\": \"Arabo (Palestina)\",
        \"ar_QA\": \"Arabo (Katar)\",
        \"ar_SA\": \"Arabo (Arabia saodita)\",
        \"ar_SD\": \"Arabo (Sodan)\",
        \"ar_SO\": \"Arabo (Somalia)\",
        \"ar_SY\": \"Arabo (Syria)\",
        \"ar_TD\": \"Arabo (Tsady)\",
        \"ar_TN\": \"Arabo (Tonizia)\",
        \"ar_YE\": \"Arabo (Yemen)\",
        \"be\": \"Bielorosy\",
        \"be_BY\": \"Bielorosy (Belarosy)\",
        \"bg\": \"Biolgara\",
        \"bg_BG\": \"Biolgara (Biolgaria)\",
        \"bn\": \"Bengali\",
        \"bn_BD\": \"Bengali (Bangladesy)\",
        \"bn_IN\": \"Bengali (Indy)\",
        \"cs\": \"Tseky\",
        \"cs_CZ\": \"Tseky (Repoblikan’i Tseky)\",
        \"de\": \"Alemanina\",
        \"de_AT\": \"Alemanina (Aotrisy)\",
        \"de_BE\": \"Alemanina (Belzika)\",
        \"de_CH\": \"Alemanina (Soisa)\",
        \"de_DE\": \"Alemanina (Alemaina)\",
        \"de_IT\": \"Alemanina (Italia)\",
        \"de_LI\": \"Alemanina (Listenstein)\",
        \"de_LU\": \"Alemanina (Lioksamboro)\",
        \"el\": \"Grika\",
        \"el_CY\": \"Grika (Sypra)\",
        \"el_GR\": \"Grika (Gresy)\",
        \"en\": \"Anglisy\",
        \"en_AE\": \"Anglisy (Emirà Arabo mitambatra)\",
        \"en_AG\": \"Anglisy (Antiga sy Barboda)\",
        \"en_AI\": \"Anglisy (Anguilla)\",
        \"en_AS\": \"Anglisy (Samoa amerikanina)\",
        \"en_AT\": \"Anglisy (Aotrisy)\",
        \"en_AU\": \"Anglisy (Aostralia)\",
        \"en_BB\": \"Anglisy (Barbady)\",
        \"en_BE\": \"Anglisy (Belzika)\",
        \"en_BI\": \"Anglisy (Borondi)\",
        \"en_BM\": \"Anglisy (Bermioda)\",
        \"en_BS\": \"Anglisy (Bahamas)\",
        \"en_BW\": \"Anglisy (Botsoana)\",
        \"en_BZ\": \"Anglisy (Belize)\",
        \"en_CA\": \"Anglisy (Kanada)\",
        \"en_CH\": \"Anglisy (Soisa)\",
        \"en_CK\": \"Anglisy (Nosy Kook)\",
        \"en_CM\": \"Anglisy (Kamerona)\",
        \"en_CY\": \"Anglisy (Sypra)\",
        \"en_DE\": \"Anglisy (Alemaina)\",
        \"en_DK\": \"Anglisy (Danmarka)\",
        \"en_DM\": \"Anglisy (Dominika)\",
        \"en_ER\": \"Anglisy (Eritrea)\",
        \"en_FI\": \"Anglisy (Finlandy)\",
        \"en_FJ\": \"Anglisy (Fidji)\",
        \"en_FK\": \"Anglisy (Nosy Falkand)\",
        \"en_FM\": \"Anglisy (Mikrônezia)\",
        \"en_GB\": \"Anglisy (Angletera)\",
        \"en_GD\": \"Anglisy (Grenady)\",
        \"en_GH\": \"Anglisy (Ghana)\",
        \"en_GI\": \"Anglisy (Zibraltara)\",
        \"en_GM\": \"Anglisy (Gambia)\",
        \"en_GU\": \"Anglisy (Guam)\",
        \"en_GY\": \"Anglisy (Guyana)\",
        \"en_IE\": \"Anglisy (Irlandy)\",
        \"en_IL\": \"Anglisy (Israely)\",
        \"en_IN\": \"Anglisy (Indy)\",
        \"en_IO\": \"Anglisy (Faridranomasina indiana britanika)\",
        \"en_JM\": \"Anglisy (Jamaïka)\",
        \"en_KE\": \"Anglisy (Kenya)\",
        \"en_KI\": \"Anglisy (Kiribati)\",
        \"en_KN\": \"Anglisy (Saint-Christophe-et-Niévès)\",
        \"en_KY\": \"Anglisy (Nosy Kayman)\",
        \"en_LC\": \"Anglisy (Sainte-Lucie)\",
        \"en_LR\": \"Anglisy (Liberia)\",
        \"en_LS\": \"Anglisy (Lesotho)\",
        \"en_MG\": \"Anglisy (Madagasikara)\",
        \"en_MH\": \"Anglisy (Nosy Marshall)\",
        \"en_MP\": \"Anglisy (Nosy Mariana Atsinanana)\",
        \"en_MS\": \"Anglisy (Montserrat)\",
        \"en_MT\": \"Anglisy (Malta)\",
        \"en_MU\": \"Anglisy (Maorisy)\",
        \"en_MW\": \"Anglisy (Malaoì)\",
        \"en_MY\": \"Anglisy (Malaizia)\",
        \"en_NA\": \"Anglisy (Namibia)\",
        \"en_NF\": \"Anglisy (Nosy Norfolk)\",
        \"en_NG\": \"Anglisy (Nizeria)\",
        \"en_NL\": \"Anglisy (Holanda)\",
        \"en_NR\": \"Anglisy (Naorò)\",
        \"en_NU\": \"Anglisy (Nioé)\",
        \"en_NZ\": \"Anglisy (Nouvelle-Zélande)\",
        \"en_PG\": \"Anglisy (Papouasie-Nouvelle-Guinée)\",
        \"en_PH\": \"Anglisy (Filipina)\",
        \"en_PK\": \"Anglisy (Pakistan)\",
        \"en_PN\": \"Anglisy (Pitkairn)\",
        \"en_PR\": \"Anglisy (Pôrtô Rikô)\",
        \"en_PW\": \"Anglisy (Palao)\",
        \"en_RW\": \"Anglisy (Roanda)\",
        \"en_SB\": \"Anglisy (Nosy Salomona)\",
        \"en_SC\": \"Anglisy (Seyshela)\",
        \"en_SD\": \"Anglisy (Sodan)\",
        \"en_SE\": \"Anglisy (Soedy)\",
        \"en_SG\": \"Anglisy (Singaporo)\",
        \"en_SH\": \"Anglisy (Sainte-Hélène)\",
        \"en_SI\": \"Anglisy (Slovenia)\",
        \"en_SL\": \"Anglisy (Sierra Leone)\",
        \"en_SZ\": \"Anglisy (Soazilandy)\",
        \"en_TC\": \"Anglisy (Nosy Turks sy Caïques)\",
        \"en_TK\": \"Anglisy (Tokelao)\",
        \"en_TO\": \"Anglisy (Tongà)\",
        \"en_TT\": \"Anglisy (Trinidad sy Tobagô)\",
        \"en_TV\": \"Anglisy (Tovalò)\",
        \"en_TZ\": \"Anglisy (Tanzania)\",
        \"en_UG\": \"Anglisy (Oganda)\",
        \"en_US\": \"Anglisy (Etazonia)\",
        \"en_VC\": \"Anglisy (Saint-Vincent-et-les Grenadines)\",
        \"en_VG\": \"Anglisy (Nosy britanika virijiny)\",
        \"en_VI\": \"Anglisy (Nosy Virijiny Etazonia)\",
        \"en_VU\": \"Anglisy (Vanoatò)\",
        \"en_WS\": \"Anglisy (Samoa)\",
        \"en_ZA\": \"Anglisy (Afrika Atsimo)\",
        \"en_ZM\": \"Anglisy (Zambia)\",
        \"en_ZW\": \"Anglisy (Zimbaboe)\",
        \"es\": \"Espaniola\",
        \"es_AR\": \"Espaniola (Arzantina)\",
        \"es_BO\": \"Espaniola (Bolivia)\",
        \"es_BR\": \"Espaniola (Brezila)\",
        \"es_BZ\": \"Espaniola (Belize)\",
        \"es_CL\": \"Espaniola (Shili)\",
        \"es_CO\": \"Espaniola (Kôlômbia)\",
        \"es_CR\": \"Espaniola (Kosta Rikà)\",
        \"es_CU\": \"Espaniola (Kiobà)\",
        \"es_DO\": \"Espaniola (Repoblika Dominikanina)\",
        \"es_EC\": \"Espaniola (Ekoatera)\",
        \"es_ES\": \"Espaniola (Espaina)\",
        \"es_GQ\": \"Espaniola (Guinea Ekoatera)\",
        \"es_GT\": \"Espaniola (Goatemalà)\",
        \"es_HN\": \"Espaniola (Hondiorasy)\",
        \"es_MX\": \"Espaniola (Meksika)\",
        \"es_NI\": \"Espaniola (Nikaragoà)\",
        \"es_PA\": \"Espaniola (Panama)\",
        \"es_PE\": \"Espaniola (Peroa)\",
        \"es_PH\": \"Espaniola (Filipina)\",
        \"es_PR\": \"Espaniola (Pôrtô Rikô)\",
        \"es_PY\": \"Espaniola (Paragoay)\",
        \"es_SV\": \"Espaniola (El Salvador)\",
        \"es_US\": \"Espaniola (Etazonia)\",
        \"es_UY\": \"Espaniola (Orogoay)\",
        \"es_VE\": \"Espaniola (Venezoelà)\",
        \"fa\": \"Persa\",
        \"fa_AF\": \"Persa (Afghanistan)\",
        \"fa_IR\": \"Persa (Iran)\",
        \"fr\": \"Frantsay\",
        \"fr_BE\": \"Frantsay (Belzika)\",
        \"fr_BF\": \"Frantsay (Borkina Faso)\",
        \"fr_BI\": \"Frantsay (Borondi)\",
        \"fr_BJ\": \"Frantsay (Benin)\",
        \"fr_CA\": \"Frantsay (Kanada)\",
        \"fr_CD\": \"Frantsay (Repoblikan’i Kongo)\",
        \"fr_CF\": \"Frantsay (Repoblika Ivon’Afrika)\",
        \"fr_CG\": \"Frantsay (Kôngô)\",
        \"fr_CH\": \"Frantsay (Soisa)\",
        \"fr_CI\": \"Frantsay (Côte d’Ivoire)\",
        \"fr_CM\": \"Frantsay (Kamerona)\",
        \"fr_DJ\": \"Frantsay (Djiboti)\",
        \"fr_DZ\": \"Frantsay (Alzeria)\",
        \"fr_FR\": \"Frantsay (Frantsa)\",
        \"fr_GA\": \"Frantsay (Gabon)\",
        \"fr_GF\": \"Frantsay (Guyana frantsay)\",
        \"fr_GN\": \"Frantsay (Ginea)\",
        \"fr_GP\": \"Frantsay (Goadelopy)\",
        \"fr_GQ\": \"Frantsay (Guinea Ekoatera)\",
        \"fr_HT\": \"Frantsay (Haiti)\",
        \"fr_KM\": \"Frantsay (Kômaoro)\",
        \"fr_LU\": \"Frantsay (Lioksamboro)\",
        \"fr_MA\": \"Frantsay (Marôka)\",
        \"fr_MC\": \"Frantsay (Mônakô)\",
        \"fr_MG\": \"Frantsay (Madagasikara)\",
        \"fr_ML\": \"Frantsay (Mali)\",
        \"fr_MQ\": \"Frantsay (Martinika)\",
        \"fr_MR\": \"Frantsay (Maoritania)\",
        \"fr_MU\": \"Frantsay (Maorisy)\",
        \"fr_NC\": \"Frantsay (Nouvelle-Calédonie)\",
        \"fr_NE\": \"Frantsay (Niger)\",
        \"fr_PF\": \"Frantsay (Polynezia frantsay)\",
        \"fr_PM\": \"Frantsay (Saint-Pierre-et-Miquelon)\",
        \"fr_RE\": \"Frantsay (Larenion)\",
        \"fr_RW\": \"Frantsay (Roanda)\",
        \"fr_SC\": \"Frantsay (Seyshela)\",
        \"fr_SN\": \"Frantsay (Senegal)\",
        \"fr_SY\": \"Frantsay (Syria)\",
        \"fr_TD\": \"Frantsay (Tsady)\",
        \"fr_TG\": \"Frantsay (Togo)\",
        \"fr_TN\": \"Frantsay (Tonizia)\",
        \"fr_VU\": \"Frantsay (Vanoatò)\",
        \"fr_WF\": \"Frantsay (Wallis sy Futuna)\",
        \"fr_YT\": \"Frantsay (Mayôty)\",
        \"ha\": \"haoussa\",
        \"ha_GH\": \"haoussa (Ghana)\",
        \"ha_NE\": \"haoussa (Niger)\",
        \"ha_NG\": \"haoussa (Nizeria)\",
        \"hi\": \"hindi\",
        \"hi_IN\": \"hindi (Indy)\",
        \"hu\": \"hongroà\",
        \"hu_HU\": \"hongroà (Hongria)\",
        \"id\": \"Indonezianina\",
        \"id_ID\": \"Indonezianina (Indonezia)\",
        \"ig\": \"igbo\",
        \"ig_NG\": \"igbo (Nizeria)\",
        \"it\": \"Italianina\",
        \"it_CH\": \"Italianina (Soisa)\",
        \"it_IT\": \"Italianina (Italia)\",
        \"it_SM\": \"Italianina (Saint-Marin)\",
        \"it_VA\": \"Italianina (Firenen’i Vatikana)\",
        \"ja\": \"Japoney\",
        \"ja_JP\": \"Japoney (Japana)\",
        \"jv\": \"Javaney\",
        \"jv_ID\": \"Javaney (Indonezia)\",
        \"km\": \"khmer\",
        \"km_KH\": \"khmer (Kambôdja)\",
        \"ko\": \"Koreanina\",
        \"ko_KP\": \"Koreanina (Korea Avaratra)\",
        \"ko_KR\": \"Koreanina (Korea Atsimo)\",
        \"mg\": \"Malagasy\",
        \"mg_MG\": \"Malagasy (Madagasikara)\",
        \"ms\": \"Malay\",
        \"ms_BN\": \"Malay (Brunei)\",
        \"ms_MY\": \"Malay (Malaizia)\",
        \"ms_SG\": \"Malay (Singaporo)\",
        \"my\": \"Birmana\",
        \"my_MM\": \"Birmana (Myanmar)\",
        \"ne\": \"Nepale\",
        \"ne_IN\": \"Nepale (Indy)\",
        \"ne_NP\": \"Nepale (Nepala)\",
        \"nl\": \"Holandey\",
        \"nl_AW\": \"Holandey (Arobà)\",
        \"nl_BE\": \"Holandey (Belzika)\",
        \"nl_NL\": \"Holandey (Holanda)\",
        \"nl_SR\": \"Holandey (Sorinam)\",
        \"pa\": \"Penjabi\",
        \"pa_IN\": \"Penjabi (Indy)\",
        \"pa_PK\": \"Penjabi (Pakistan)\",
        \"pl\": \"Poloney\",
        \"pl_PL\": \"Poloney (Pôlôna)\",
        \"pt\": \"Portiogey\",
        \"pt_AO\": \"Portiogey (Angola)\",
        \"pt_BR\": \"Portiogey (Brezila)\",
        \"pt_CH\": \"Portiogey (Soisa)\",
        \"pt_CV\": \"Portiogey (Nosy Cap-Vert)\",
        \"pt_GQ\": \"Portiogey (Guinea Ekoatera)\",
        \"pt_GW\": \"Portiogey (Giné-Bisao)\",
        \"pt_LU\": \"Portiogey (Lioksamboro)\",
        \"pt_MZ\": \"Portiogey (Mozambika)\",
        \"pt_PT\": \"Portiogey (Pôrtiogala)\",
        \"pt_ST\": \"Portiogey (São Tomé-et-Príncipe)\",
        \"pt_TL\": \"Portiogey (Timor Atsinanana)\",
        \"ro\": \"Romanianina\",
        \"ro_MD\": \"Romanianina (Môldavia)\",
        \"ro_RO\": \"Romanianina (Romania)\",
        \"ru\": \"Rosianina\",
        \"ru_BY\": \"Rosianina (Belarosy)\",
        \"ru_KG\": \"Rosianina (Kiordistan)\",
        \"ru_KZ\": \"Rosianina (Kazakhstan)\",
        \"ru_MD\": \"Rosianina (Môldavia)\",
        \"ru_RU\": \"Rosianina (Rosia)\",
        \"ru_UA\": \"Rosianina (Okraina)\",
        \"rw\": \"Roande\",
        \"rw_RW\": \"Roande (Roanda)\",
        \"so\": \"Somalianina\",
        \"so_DJ\": \"Somalianina (Djiboti)\",
        \"so_ET\": \"Somalianina (Ethiopia)\",
        \"so_KE\": \"Somalianina (Kenya)\",
        \"so_SO\": \"Somalianina (Somalia)\",
        \"sv\": \"Soisa\",
        \"sv_FI\": \"Soisa (Finlandy)\",
        \"sv_SE\": \"Soisa (Soedy)\",
        \"ta\": \"Tamoila\",
        \"ta_IN\": \"Tamoila (Indy)\",
        \"ta_LK\": \"Tamoila (Sri Lanka)\",
        \"ta_MY\": \"Tamoila (Malaizia)\",
        \"ta_SG\": \"Tamoila (Singaporo)\",
        \"th\": \"Taioaney\",
        \"th_TH\": \"Taioaney (Thailandy)\",
        \"tr\": \"Tiorka\",
        \"tr_CY\": \"Tiorka (Sypra)\",
        \"tr_TR\": \"Tiorka (Torkia)\",
        \"uk\": \"Okrainianina\",
        \"uk_UA\": \"Okrainianina (Okraina)\",
        \"ur\": \"Ordò\",
        \"ur_IN\": \"Ordò (Indy)\",
        \"ur_PK\": \"Ordò (Pakistan)\",
        \"vi\": \"Vietnamianina\",
        \"vi_VN\": \"Vietnamianina (Vietnam)\",
        \"yo\": \"Yôrobà\",
        \"yo_BJ\": \"Yôrobà (Benin)\",
        \"yo_NG\": \"Yôrobà (Nizeria)\",
        \"zh\": \"Sinoa, Mandarin\",
        \"zh_CN\": \"Sinoa, Mandarin (Sina)\",
        \"zh_SG\": \"Sinoa, Mandarin (Singaporo)\",
        \"zh_TW\": \"Sinoa, Mandarin (Taioana)\",
        \"zu\": \"Zolò\",
        \"zu_ZA\": \"Zolò (Afrika Atsimo)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/mg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/mg.json");
    }
}