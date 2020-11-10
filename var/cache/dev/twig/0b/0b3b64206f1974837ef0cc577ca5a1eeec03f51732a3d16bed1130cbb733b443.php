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

/* vendor/symfony/intl/Resources/data/locales/ff.json */
class __TwigTemplate_5f0855b6c322c1a82d5ae350023e1720d5f798a5234589ff2f46a1175f6aeb2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ff.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ff.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ak\": \"Akaan\",
        \"ak_GH\": \"Akaan (Ganaa)\",
        \"am\": \"Amarik\",
        \"am_ET\": \"Amarik (Ecoppi)\",
        \"ar\": \"Aarabeere\",
        \"ar_AE\": \"Aarabeere (Emiraat Araab Denntuɗe)\",
        \"ar_BH\": \"Aarabeere (Bahreyn)\",
        \"ar_DJ\": \"Aarabeere (Jibutii)\",
        \"ar_DZ\": \"Aarabeere (Alaseri)\",
        \"ar_EG\": \"Aarabeere (Ejipt)\",
        \"ar_ER\": \"Aarabeere (Eriteree)\",
        \"ar_IL\": \"Aarabeere (Israa’iila)\",
        \"ar_IQ\": \"Aarabeere (Iraak)\",
        \"ar_JO\": \"Aarabeere (Jordani)\",
        \"ar_KM\": \"Aarabeere (Komoor)\",
        \"ar_KW\": \"Aarabeere (Kuweyti)\",
        \"ar_LB\": \"Aarabeere (Libaa)\",
        \"ar_LY\": \"Aarabeere (Libi)\",
        \"ar_MA\": \"Aarabeere (Maruk)\",
        \"ar_MR\": \"Aarabeere (Muritani)\",
        \"ar_OM\": \"Aarabeere (Omaan)\",
        \"ar_PS\": \"Aarabeere (Palestiin Sisjordani e Gaasaa)\",
        \"ar_QA\": \"Aarabeere (Kataar)\",
        \"ar_SA\": \"Aarabeere (Arabii Sawdit)\",
        \"ar_SD\": \"Aarabeere (Sudaan)\",
        \"ar_SO\": \"Aarabeere (Somalii)\",
        \"ar_SY\": \"Aarabeere (Sirii)\",
        \"ar_TD\": \"Aarabeere (Caad)\",
        \"ar_TN\": \"Aarabeere (Tunisii)\",
        \"ar_YE\": \"Aarabeere (Yemen)\",
        \"be\": \"Belaruuse\",
        \"be_BY\": \"Belaruuse (Belaruus)\",
        \"bg\": \"Bulgariire\",
        \"bg_BG\": \"Bulgariire (Bulgarii)\",
        \"bn\": \"Bengali\",
        \"bn_BD\": \"Bengali (Banglaadees)\",
        \"bn_IN\": \"Bengali (Enndo)\",
        \"cs\": \"Cekkere\",
        \"cs_CZ\": \"Cekkere (Ndenndaandi Cek)\",
        \"de\": \"Docceere\",
        \"de_AT\": \"Docceere (Otiriis)\",
        \"de_BE\": \"Docceere (Beljik)\",
        \"de_CH\": \"Docceere (Suwiis)\",
        \"de_DE\": \"Docceere (Almaañ)\",
        \"de_IT\": \"Docceere (Itali)\",
        \"de_LI\": \"Docceere (Lincenstayn)\",
        \"de_LU\": \"Docceere (Liksembuur)\",
        \"el\": \"Gerke\",
        \"el_CY\": \"Gerke (Siipar)\",
        \"el_GR\": \"Gerke (Gerees)\",
        \"en\": \"Engeleere\",
        \"en_AE\": \"Engeleere (Emiraat Araab Denntuɗe)\",
        \"en_AG\": \"Engeleere (Antiguwaa e Barbudaa)\",
        \"en_AI\": \"Engeleere (Anngiyaa)\",
        \"en_AS\": \"Engeleere (Samowa Amerik)\",
        \"en_AT\": \"Engeleere (Otiriis)\",
        \"en_AU\": \"Engeleere (Ostaraalii)\",
        \"en_BB\": \"Engeleere (Barbadoos)\",
        \"en_BE\": \"Engeleere (Beljik)\",
        \"en_BI\": \"Engeleere (Burunndi)\",
        \"en_BM\": \"Engeleere (Bermudaa)\",
        \"en_BS\": \"Engeleere (Bahamaas)\",
        \"en_BW\": \"Engeleere (Botswaana)\",
        \"en_BZ\": \"Engeleere (Beliise)\",
        \"en_CA\": \"Engeleere (Kanadaa)\",
        \"en_CH\": \"Engeleere (Suwiis)\",
        \"en_CK\": \"Engeleere (Duuɗe Kuuk)\",
        \"en_CM\": \"Engeleere (Kameruun)\",
        \"en_CY\": \"Engeleere (Siipar)\",
        \"en_DE\": \"Engeleere (Almaañ)\",
        \"en_DK\": \"Engeleere (Danmark)\",
        \"en_DM\": \"Engeleere (Dominika)\",
        \"en_ER\": \"Engeleere (Eriteree)\",
        \"en_FI\": \"Engeleere (Fenland)\",
        \"en_FJ\": \"Engeleere (Fijji)\",
        \"en_FK\": \"Engeleere (Duuɗe Falkland)\",
        \"en_FM\": \"Engeleere (Mikoronesii)\",
        \"en_GB\": \"Engeleere (Laamateeri Rentundi)\",
        \"en_GD\": \"Engeleere (Garnaad)\",
        \"en_GH\": \"Engeleere (Ganaa)\",
        \"en_GI\": \"Engeleere (Jibraltaar)\",
        \"en_GM\": \"Engeleere (Gammbi)\",
        \"en_GU\": \"Engeleere (Guwam)\",
        \"en_GY\": \"Engeleere (Giyaan)\",
        \"en_IE\": \"Engeleere (Irlannda)\",
        \"en_IL\": \"Engeleere (Israa’iila)\",
        \"en_IN\": \"Engeleere (Enndo)\",
        \"en_IO\": \"Engeleere (Keeriindi britaani to maayo enndo)\",
        \"en_JM\": \"Engeleere (Jamayka)\",
        \"en_KE\": \"Engeleere (Keñaa)\",
        \"en_KI\": \"Engeleere (Kiribari)\",
        \"en_KN\": \"Engeleere (Sent Kits e Newis)\",
        \"en_KY\": \"Engeleere (Duuɗe Kaymaa)\",
        \"en_LC\": \"Engeleere (Sent Lusiyaa)\",
        \"en_LR\": \"Engeleere (Liberiyaa)\",
        \"en_LS\": \"Engeleere (Lesoto)\",
        \"en_MG\": \"Engeleere (Madagaskaar)\",
        \"en_MH\": \"Engeleere (Duuɗe Marsaal)\",
        \"en_MP\": \"Engeleere (Duuɗe Mariyaana Rewo)\",
        \"en_MS\": \"Engeleere (Monseraat)\",
        \"en_MT\": \"Engeleere (Malte)\",
        \"en_MU\": \"Engeleere (Moriis)\",
        \"en_MW\": \"Engeleere (Malaawi)\",
        \"en_MY\": \"Engeleere (Malesii)\",
        \"en_NA\": \"Engeleere (Namibii)\",
        \"en_NF\": \"Engeleere (Duuɗe Norfolk)\",
        \"en_NG\": \"Engeleere (Nijeriyaa)\",
        \"en_NL\": \"Engeleere (Nederlannda)\",
        \"en_NR\": \"Engeleere (Nawuru)\",
        \"en_NU\": \"Engeleere (Niuwe)\",
        \"en_NZ\": \"Engeleere (Nuwel Selannda)\",
        \"en_PG\": \"Engeleere (Papuwaa Nuwel Gine)\",
        \"en_PH\": \"Engeleere (Filipiin)\",
        \"en_PK\": \"Engeleere (Pakistaan)\",
        \"en_PN\": \"Engeleere (Pitkern)\",
        \"en_PR\": \"Engeleere (Porto Rikoo)\",
        \"en_PW\": \"Engeleere (Palawu)\",
        \"en_RW\": \"Engeleere (Ruwanndaa)\",
        \"en_SB\": \"Engeleere (Duuɗe Solomon)\",
        \"en_SC\": \"Engeleere (Seysel)\",
        \"en_SD\": \"Engeleere (Sudaan)\",
        \"en_SE\": \"Engeleere (Suweed)\",
        \"en_SG\": \"Engeleere (Sinngapuur)\",
        \"en_SH\": \"Engeleere (Sent Helen)\",
        \"en_SI\": \"Engeleere (Slowenii)\",
        \"en_SL\": \"Engeleere (Seraa liyon)\",
        \"en_SZ\": \"Engeleere (Swaasilannda)\",
        \"en_TC\": \"Engeleere (Duuɗe Turke e Keikoos)\",
        \"en_TK\": \"Engeleere (Tokelaaw)\",
        \"en_TO\": \"Engeleere (Tonngaa)\",
        \"en_TT\": \"Engeleere (Tirnidaad e Tobaago)\",
        \"en_TV\": \"Engeleere (Tuwaluu)\",
        \"en_TZ\": \"Engeleere (Tansanii)\",
        \"en_UG\": \"Engeleere (Unganndaa)\",
        \"en_US\": \"Engeleere (Dowlaaji Dentuɗi Amerik)\",
        \"en_VC\": \"Engeleere (See Weesaa e Garnadiin)\",
        \"en_VG\": \"Engeleere (duuɗe kecce britanii)\",
        \"en_VI\": \"Engeleere (Duuɗe Kecce Amerik)\",
        \"en_VU\": \"Engeleere (Wanuwaatuu)\",
        \"en_WS\": \"Engeleere (Samowaa)\",
        \"en_ZA\": \"Engeleere (Afrik bŋ Worgo)\",
        \"en_ZM\": \"Engeleere (Sammbi)\",
        \"en_ZW\": \"Engeleere (Simbaabuwe)\",
        \"es\": \"Español\",
        \"es_AR\": \"Español (Arjantiin)\",
        \"es_BO\": \"Español (Boliwii)\",
        \"es_BR\": \"Español (Beresiil)\",
        \"es_BZ\": \"Español (Beliise)\",
        \"es_CL\": \"Español (Cilii)\",
        \"es_CO\": \"Español (Kolombiya)\",
        \"es_CR\": \"Español (Kosta Rikaa)\",
        \"es_CU\": \"Español (Kubaa)\",
        \"es_DO\": \"Español (Ndenndanndi Dominika)\",
        \"es_EC\": \"Español (Ekuwatoor)\",
        \"es_ES\": \"Español (Espaañ)\",
        \"es_GQ\": \"Español (Ginee Ekuwaatoriyaal)\",
        \"es_GT\": \"Español (Gwaatemalaa)\",
        \"es_HN\": \"Español (Onnduraas)\",
        \"es_MX\": \"Español (Meksik)\",
        \"es_NI\": \"Español (Nikaraguwaa)\",
        \"es_PA\": \"Español (Panamaa)\",
        \"es_PE\": \"Español (Peru)\",
        \"es_PH\": \"Español (Filipiin)\",
        \"es_PR\": \"Español (Porto Rikoo)\",
        \"es_PY\": \"Español (Paraguwaay)\",
        \"es_SV\": \"Español (El Salwador)\",
        \"es_US\": \"Español (Dowlaaji Dentuɗi Amerik)\",
        \"es_UY\": \"Español (Uruguwaay)\",
        \"es_VE\": \"Español (Wenesuwelaa)\",
        \"fa\": \"Perseere\",
        \"fa_AF\": \"Perseere (Afganistaan)\",
        \"fa_IR\": \"Perseere (Iraan)\",
        \"ff\": \"Pulaar\",
        \"ff_CM\": \"Pulaar (Kameruun)\",
        \"ff_GN\": \"Pulaar (Gine)\",
        \"ff_MR\": \"Pulaar (Muritani)\",
        \"ff_SN\": \"Pulaar (Senegaal)\",
        \"fr\": \"Farayseere\",
        \"fr_BE\": \"Farayseere (Beljik)\",
        \"fr_BF\": \"Farayseere (Burkibaa Faaso)\",
        \"fr_BI\": \"Farayseere (Burunndi)\",
        \"fr_BJ\": \"Farayseere (Benee)\",
        \"fr_CA\": \"Farayseere (Kanadaa)\",
        \"fr_CD\": \"Farayseere (Ndenndaandi Demokaraasiire Konngo)\",
        \"fr_CF\": \"Farayseere (Ndenndaandi Santarafrik)\",
        \"fr_CG\": \"Farayseere (Konngo)\",
        \"fr_CH\": \"Farayseere (Suwiis)\",
        \"fr_CI\": \"Farayseere (Kodduwaar)\",
        \"fr_CM\": \"Farayseere (Kameruun)\",
        \"fr_DJ\": \"Farayseere (Jibutii)\",
        \"fr_DZ\": \"Farayseere (Alaseri)\",
        \"fr_FR\": \"Farayseere (Farayse)\",
        \"fr_GA\": \"Farayseere (Gaboo)\",
        \"fr_GF\": \"Farayseere (Giyaan Farayse)\",
        \"fr_GN\": \"Farayseere (Gine)\",
        \"fr_GP\": \"Farayseere (Gwaadalup)\",
        \"fr_GQ\": \"Farayseere (Ginee Ekuwaatoriyaal)\",
        \"fr_HT\": \"Farayseere (Haytii)\",
        \"fr_KM\": \"Farayseere (Komoor)\",
        \"fr_LU\": \"Farayseere (Liksembuur)\",
        \"fr_MA\": \"Farayseere (Maruk)\",
        \"fr_MC\": \"Farayseere (Monaakoo)\",
        \"fr_MG\": \"Farayseere (Madagaskaar)\",
        \"fr_ML\": \"Farayseere (Maali)\",
        \"fr_MQ\": \"Farayseere (Martinik)\",
        \"fr_MR\": \"Farayseere (Muritani)\",
        \"fr_MU\": \"Farayseere (Moriis)\",
        \"fr_NC\": \"Farayseere (Nuwel Kaledonii)\",
        \"fr_NE\": \"Farayseere (Nijeer)\",
        \"fr_PF\": \"Farayseere (Polinesii Farayse)\",
        \"fr_PM\": \"Farayseere (See Piyeer e Mikeloo)\",
        \"fr_RE\": \"Farayseere (Rewiñoo)\",
        \"fr_RW\": \"Farayseere (Ruwanndaa)\",
        \"fr_SC\": \"Farayseere (Seysel)\",
        \"fr_SN\": \"Farayseere (Senegaal)\",
        \"fr_SY\": \"Farayseere (Sirii)\",
        \"fr_TD\": \"Farayseere (Caad)\",
        \"fr_TG\": \"Farayseere (Togoo)\",
        \"fr_TN\": \"Farayseere (Tunisii)\",
        \"fr_VU\": \"Farayseere (Wanuwaatuu)\",
        \"fr_WF\": \"Farayseere (Walis e Futuna)\",
        \"fr_YT\": \"Farayseere (Mayoot)\",
        \"ha\": \"Hawsaŋkoore\",
        \"ha_GH\": \"Hawsaŋkoore (Ganaa)\",
        \"ha_NE\": \"Hawsaŋkoore (Nijeer)\",
        \"ha_NG\": \"Hawsaŋkoore (Nijeriyaa)\",
        \"hi\": \"Hinndi\",
        \"hi_IN\": \"Hinndi (Enndo)\",
        \"hu\": \"Hongariire\",
        \"hu_HU\": \"Hongariire (Onngiri)\",
        \"id\": \"Endonesiire\",
        \"id_ID\": \"Endonesiire (Enndonesii)\",
        \"ig\": \"Igiboore\",
        \"ig_NG\": \"Igiboore (Nijeriyaa)\",
        \"it\": \"Italiyeere\",
        \"it_CH\": \"Italiyeere (Suwiis)\",
        \"it_IT\": \"Italiyeere (Itali)\",
        \"it_SM\": \"Italiyeere (See Maree)\",
        \"it_VA\": \"Italiyeere (Dowla Waticaan)\",
        \"ja\": \"Saponeere\",
        \"ja_JP\": \"Saponeere (Sapoo)\",
        \"jv\": \"Sawaneere\",
        \"jv_ID\": \"Sawaneere (Enndonesii)\",
        \"km\": \"Kemeere\",
        \"km_KH\": \"Kemeere (Kambodso)\",
        \"ko\": \"Koreere\",
        \"ko_KP\": \"Koreere (Koree Rewo)\",
        \"ko_KR\": \"Koreere (Koree Worgo)\",
        \"ms\": \"Malayeere\",
        \"ms_BN\": \"Malayeere (Burnaay)\",
        \"ms_MY\": \"Malayeere (Malesii)\",
        \"ms_SG\": \"Malayeere (Sinngapuur)\",
        \"my\": \"Burmeese\",
        \"my_MM\": \"Burmeese (Miyamaar)\",
        \"ne\": \"Nepaaleere\",
        \"ne_IN\": \"Nepaaleere (Enndo)\",
        \"ne_NP\": \"Nepaaleere (Nepaal)\",
        \"nl\": \"Dacceere\",
        \"nl_AW\": \"Dacceere (Aruuba)\",
        \"nl_BE\": \"Dacceere (Beljik)\",
        \"nl_NL\": \"Dacceere (Nederlannda)\",
        \"nl_SR\": \"Dacceere (Surinaam)\",
        \"pa\": \"Punjabeere\",
        \"pa_IN\": \"Punjabeere (Enndo)\",
        \"pa_PK\": \"Punjabeere (Pakistaan)\",
        \"pl\": \"Poloneere\",
        \"pl_PL\": \"Poloneere (Poloñ)\",
        \"pt\": \"Purtugeere\",
        \"pt_AO\": \"Purtugeere (Anngolaa)\",
        \"pt_BR\": \"Purtugeere (Beresiil)\",
        \"pt_CH\": \"Purtugeere (Suwiis)\",
        \"pt_CV\": \"Purtugeere (Duuɗe Kap Weer)\",
        \"pt_GQ\": \"Purtugeere (Ginee Ekuwaatoriyaal)\",
        \"pt_GW\": \"Purtugeere (Gine-Bisaawo)\",
        \"pt_LU\": \"Purtugeere (Liksembuur)\",
        \"pt_MZ\": \"Purtugeere (Mosammbik)\",
        \"pt_PT\": \"Purtugeere (Purtugaal)\",
        \"pt_ST\": \"Purtugeere (Sawo Tome e Perensipe)\",
        \"pt_TL\": \"Purtugeere (Timoor Fuɗnaange)\",
        \"ro\": \"Romaneere\",
        \"ro_MD\": \"Romaneere (Moldawii)\",
        \"ro_RO\": \"Romaneere (Rumanii)\",
        \"ru\": \"Riis\",
        \"ru_BY\": \"Riis (Belaruus)\",
        \"ru_KG\": \"Riis (Kirgistaan)\",
        \"ru_KZ\": \"Riis (Kasakstaan)\",
        \"ru_MD\": \"Riis (Moldawii)\",
        \"ru_RU\": \"Riis (Riisii)\",
        \"ru_UA\": \"Riis (Ukereen)\",
        \"rw\": \"Ruwaanndeere\",
        \"rw_RW\": \"Ruwaanndeere (Ruwanndaa)\",
        \"so\": \"Somalii\",
        \"so_DJ\": \"Somalii (Jibutii)\",
        \"so_ET\": \"Somalii (Ecoppi)\",
        \"so_KE\": \"Somalii (Keñaa)\",
        \"so_SO\": \"Somalii (Somalii)\",
        \"sv\": \"Sweedeere\",
        \"sv_FI\": \"Sweedeere (Fenland)\",
        \"sv_SE\": \"Sweedeere (Suweed)\",
        \"ta\": \"Tamil\",
        \"ta_IN\": \"Tamil (Enndo)\",
        \"ta_LK\": \"Tamil (Siri Lanka)\",
        \"ta_MY\": \"Tamil (Malesii)\",
        \"ta_SG\": \"Tamil (Sinngapuur)\",
        \"th\": \"Taay\",
        \"th_TH\": \"Taay (Taylannda)\",
        \"tr\": \"Turkeere\",
        \"tr_CY\": \"Turkeere (Siipar)\",
        \"tr_TR\": \"Turkeere (Turkii)\",
        \"uk\": \"Ukereneere\",
        \"uk_UA\": \"Ukereneere (Ukereen)\",
        \"ur\": \"Urdu\",
        \"ur_IN\": \"Urdu (Enndo)\",
        \"ur_PK\": \"Urdu (Pakistaan)\",
        \"vi\": \"Wiyetnameere\",
        \"vi_VN\": \"Wiyetnameere (Wiyetnaam)\",
        \"yo\": \"Yorrubaa\",
        \"yo_BJ\": \"Yorrubaa (Benee)\",
        \"yo_NG\": \"Yorrubaa (Nijeriyaa)\",
        \"zh\": \"Sinuwaare\",
        \"zh_CN\": \"Sinuwaare (Siin)\",
        \"zh_SG\": \"Sinuwaare (Sinngapuur)\",
        \"zh_TW\": \"Sinuwaare (Taywaan)\",
        \"zu\": \"Suluŋkoore\",
        \"zu_ZA\": \"Suluŋkoore (Afrik bŋ Worgo)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/ff.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ak\": \"Akaan\",
        \"ak_GH\": \"Akaan (Ganaa)\",
        \"am\": \"Amarik\",
        \"am_ET\": \"Amarik (Ecoppi)\",
        \"ar\": \"Aarabeere\",
        \"ar_AE\": \"Aarabeere (Emiraat Araab Denntuɗe)\",
        \"ar_BH\": \"Aarabeere (Bahreyn)\",
        \"ar_DJ\": \"Aarabeere (Jibutii)\",
        \"ar_DZ\": \"Aarabeere (Alaseri)\",
        \"ar_EG\": \"Aarabeere (Ejipt)\",
        \"ar_ER\": \"Aarabeere (Eriteree)\",
        \"ar_IL\": \"Aarabeere (Israa’iila)\",
        \"ar_IQ\": \"Aarabeere (Iraak)\",
        \"ar_JO\": \"Aarabeere (Jordani)\",
        \"ar_KM\": \"Aarabeere (Komoor)\",
        \"ar_KW\": \"Aarabeere (Kuweyti)\",
        \"ar_LB\": \"Aarabeere (Libaa)\",
        \"ar_LY\": \"Aarabeere (Libi)\",
        \"ar_MA\": \"Aarabeere (Maruk)\",
        \"ar_MR\": \"Aarabeere (Muritani)\",
        \"ar_OM\": \"Aarabeere (Omaan)\",
        \"ar_PS\": \"Aarabeere (Palestiin Sisjordani e Gaasaa)\",
        \"ar_QA\": \"Aarabeere (Kataar)\",
        \"ar_SA\": \"Aarabeere (Arabii Sawdit)\",
        \"ar_SD\": \"Aarabeere (Sudaan)\",
        \"ar_SO\": \"Aarabeere (Somalii)\",
        \"ar_SY\": \"Aarabeere (Sirii)\",
        \"ar_TD\": \"Aarabeere (Caad)\",
        \"ar_TN\": \"Aarabeere (Tunisii)\",
        \"ar_YE\": \"Aarabeere (Yemen)\",
        \"be\": \"Belaruuse\",
        \"be_BY\": \"Belaruuse (Belaruus)\",
        \"bg\": \"Bulgariire\",
        \"bg_BG\": \"Bulgariire (Bulgarii)\",
        \"bn\": \"Bengali\",
        \"bn_BD\": \"Bengali (Banglaadees)\",
        \"bn_IN\": \"Bengali (Enndo)\",
        \"cs\": \"Cekkere\",
        \"cs_CZ\": \"Cekkere (Ndenndaandi Cek)\",
        \"de\": \"Docceere\",
        \"de_AT\": \"Docceere (Otiriis)\",
        \"de_BE\": \"Docceere (Beljik)\",
        \"de_CH\": \"Docceere (Suwiis)\",
        \"de_DE\": \"Docceere (Almaañ)\",
        \"de_IT\": \"Docceere (Itali)\",
        \"de_LI\": \"Docceere (Lincenstayn)\",
        \"de_LU\": \"Docceere (Liksembuur)\",
        \"el\": \"Gerke\",
        \"el_CY\": \"Gerke (Siipar)\",
        \"el_GR\": \"Gerke (Gerees)\",
        \"en\": \"Engeleere\",
        \"en_AE\": \"Engeleere (Emiraat Araab Denntuɗe)\",
        \"en_AG\": \"Engeleere (Antiguwaa e Barbudaa)\",
        \"en_AI\": \"Engeleere (Anngiyaa)\",
        \"en_AS\": \"Engeleere (Samowa Amerik)\",
        \"en_AT\": \"Engeleere (Otiriis)\",
        \"en_AU\": \"Engeleere (Ostaraalii)\",
        \"en_BB\": \"Engeleere (Barbadoos)\",
        \"en_BE\": \"Engeleere (Beljik)\",
        \"en_BI\": \"Engeleere (Burunndi)\",
        \"en_BM\": \"Engeleere (Bermudaa)\",
        \"en_BS\": \"Engeleere (Bahamaas)\",
        \"en_BW\": \"Engeleere (Botswaana)\",
        \"en_BZ\": \"Engeleere (Beliise)\",
        \"en_CA\": \"Engeleere (Kanadaa)\",
        \"en_CH\": \"Engeleere (Suwiis)\",
        \"en_CK\": \"Engeleere (Duuɗe Kuuk)\",
        \"en_CM\": \"Engeleere (Kameruun)\",
        \"en_CY\": \"Engeleere (Siipar)\",
        \"en_DE\": \"Engeleere (Almaañ)\",
        \"en_DK\": \"Engeleere (Danmark)\",
        \"en_DM\": \"Engeleere (Dominika)\",
        \"en_ER\": \"Engeleere (Eriteree)\",
        \"en_FI\": \"Engeleere (Fenland)\",
        \"en_FJ\": \"Engeleere (Fijji)\",
        \"en_FK\": \"Engeleere (Duuɗe Falkland)\",
        \"en_FM\": \"Engeleere (Mikoronesii)\",
        \"en_GB\": \"Engeleere (Laamateeri Rentundi)\",
        \"en_GD\": \"Engeleere (Garnaad)\",
        \"en_GH\": \"Engeleere (Ganaa)\",
        \"en_GI\": \"Engeleere (Jibraltaar)\",
        \"en_GM\": \"Engeleere (Gammbi)\",
        \"en_GU\": \"Engeleere (Guwam)\",
        \"en_GY\": \"Engeleere (Giyaan)\",
        \"en_IE\": \"Engeleere (Irlannda)\",
        \"en_IL\": \"Engeleere (Israa’iila)\",
        \"en_IN\": \"Engeleere (Enndo)\",
        \"en_IO\": \"Engeleere (Keeriindi britaani to maayo enndo)\",
        \"en_JM\": \"Engeleere (Jamayka)\",
        \"en_KE\": \"Engeleere (Keñaa)\",
        \"en_KI\": \"Engeleere (Kiribari)\",
        \"en_KN\": \"Engeleere (Sent Kits e Newis)\",
        \"en_KY\": \"Engeleere (Duuɗe Kaymaa)\",
        \"en_LC\": \"Engeleere (Sent Lusiyaa)\",
        \"en_LR\": \"Engeleere (Liberiyaa)\",
        \"en_LS\": \"Engeleere (Lesoto)\",
        \"en_MG\": \"Engeleere (Madagaskaar)\",
        \"en_MH\": \"Engeleere (Duuɗe Marsaal)\",
        \"en_MP\": \"Engeleere (Duuɗe Mariyaana Rewo)\",
        \"en_MS\": \"Engeleere (Monseraat)\",
        \"en_MT\": \"Engeleere (Malte)\",
        \"en_MU\": \"Engeleere (Moriis)\",
        \"en_MW\": \"Engeleere (Malaawi)\",
        \"en_MY\": \"Engeleere (Malesii)\",
        \"en_NA\": \"Engeleere (Namibii)\",
        \"en_NF\": \"Engeleere (Duuɗe Norfolk)\",
        \"en_NG\": \"Engeleere (Nijeriyaa)\",
        \"en_NL\": \"Engeleere (Nederlannda)\",
        \"en_NR\": \"Engeleere (Nawuru)\",
        \"en_NU\": \"Engeleere (Niuwe)\",
        \"en_NZ\": \"Engeleere (Nuwel Selannda)\",
        \"en_PG\": \"Engeleere (Papuwaa Nuwel Gine)\",
        \"en_PH\": \"Engeleere (Filipiin)\",
        \"en_PK\": \"Engeleere (Pakistaan)\",
        \"en_PN\": \"Engeleere (Pitkern)\",
        \"en_PR\": \"Engeleere (Porto Rikoo)\",
        \"en_PW\": \"Engeleere (Palawu)\",
        \"en_RW\": \"Engeleere (Ruwanndaa)\",
        \"en_SB\": \"Engeleere (Duuɗe Solomon)\",
        \"en_SC\": \"Engeleere (Seysel)\",
        \"en_SD\": \"Engeleere (Sudaan)\",
        \"en_SE\": \"Engeleere (Suweed)\",
        \"en_SG\": \"Engeleere (Sinngapuur)\",
        \"en_SH\": \"Engeleere (Sent Helen)\",
        \"en_SI\": \"Engeleere (Slowenii)\",
        \"en_SL\": \"Engeleere (Seraa liyon)\",
        \"en_SZ\": \"Engeleere (Swaasilannda)\",
        \"en_TC\": \"Engeleere (Duuɗe Turke e Keikoos)\",
        \"en_TK\": \"Engeleere (Tokelaaw)\",
        \"en_TO\": \"Engeleere (Tonngaa)\",
        \"en_TT\": \"Engeleere (Tirnidaad e Tobaago)\",
        \"en_TV\": \"Engeleere (Tuwaluu)\",
        \"en_TZ\": \"Engeleere (Tansanii)\",
        \"en_UG\": \"Engeleere (Unganndaa)\",
        \"en_US\": \"Engeleere (Dowlaaji Dentuɗi Amerik)\",
        \"en_VC\": \"Engeleere (See Weesaa e Garnadiin)\",
        \"en_VG\": \"Engeleere (duuɗe kecce britanii)\",
        \"en_VI\": \"Engeleere (Duuɗe Kecce Amerik)\",
        \"en_VU\": \"Engeleere (Wanuwaatuu)\",
        \"en_WS\": \"Engeleere (Samowaa)\",
        \"en_ZA\": \"Engeleere (Afrik bŋ Worgo)\",
        \"en_ZM\": \"Engeleere (Sammbi)\",
        \"en_ZW\": \"Engeleere (Simbaabuwe)\",
        \"es\": \"Español\",
        \"es_AR\": \"Español (Arjantiin)\",
        \"es_BO\": \"Español (Boliwii)\",
        \"es_BR\": \"Español (Beresiil)\",
        \"es_BZ\": \"Español (Beliise)\",
        \"es_CL\": \"Español (Cilii)\",
        \"es_CO\": \"Español (Kolombiya)\",
        \"es_CR\": \"Español (Kosta Rikaa)\",
        \"es_CU\": \"Español (Kubaa)\",
        \"es_DO\": \"Español (Ndenndanndi Dominika)\",
        \"es_EC\": \"Español (Ekuwatoor)\",
        \"es_ES\": \"Español (Espaañ)\",
        \"es_GQ\": \"Español (Ginee Ekuwaatoriyaal)\",
        \"es_GT\": \"Español (Gwaatemalaa)\",
        \"es_HN\": \"Español (Onnduraas)\",
        \"es_MX\": \"Español (Meksik)\",
        \"es_NI\": \"Español (Nikaraguwaa)\",
        \"es_PA\": \"Español (Panamaa)\",
        \"es_PE\": \"Español (Peru)\",
        \"es_PH\": \"Español (Filipiin)\",
        \"es_PR\": \"Español (Porto Rikoo)\",
        \"es_PY\": \"Español (Paraguwaay)\",
        \"es_SV\": \"Español (El Salwador)\",
        \"es_US\": \"Español (Dowlaaji Dentuɗi Amerik)\",
        \"es_UY\": \"Español (Uruguwaay)\",
        \"es_VE\": \"Español (Wenesuwelaa)\",
        \"fa\": \"Perseere\",
        \"fa_AF\": \"Perseere (Afganistaan)\",
        \"fa_IR\": \"Perseere (Iraan)\",
        \"ff\": \"Pulaar\",
        \"ff_CM\": \"Pulaar (Kameruun)\",
        \"ff_GN\": \"Pulaar (Gine)\",
        \"ff_MR\": \"Pulaar (Muritani)\",
        \"ff_SN\": \"Pulaar (Senegaal)\",
        \"fr\": \"Farayseere\",
        \"fr_BE\": \"Farayseere (Beljik)\",
        \"fr_BF\": \"Farayseere (Burkibaa Faaso)\",
        \"fr_BI\": \"Farayseere (Burunndi)\",
        \"fr_BJ\": \"Farayseere (Benee)\",
        \"fr_CA\": \"Farayseere (Kanadaa)\",
        \"fr_CD\": \"Farayseere (Ndenndaandi Demokaraasiire Konngo)\",
        \"fr_CF\": \"Farayseere (Ndenndaandi Santarafrik)\",
        \"fr_CG\": \"Farayseere (Konngo)\",
        \"fr_CH\": \"Farayseere (Suwiis)\",
        \"fr_CI\": \"Farayseere (Kodduwaar)\",
        \"fr_CM\": \"Farayseere (Kameruun)\",
        \"fr_DJ\": \"Farayseere (Jibutii)\",
        \"fr_DZ\": \"Farayseere (Alaseri)\",
        \"fr_FR\": \"Farayseere (Farayse)\",
        \"fr_GA\": \"Farayseere (Gaboo)\",
        \"fr_GF\": \"Farayseere (Giyaan Farayse)\",
        \"fr_GN\": \"Farayseere (Gine)\",
        \"fr_GP\": \"Farayseere (Gwaadalup)\",
        \"fr_GQ\": \"Farayseere (Ginee Ekuwaatoriyaal)\",
        \"fr_HT\": \"Farayseere (Haytii)\",
        \"fr_KM\": \"Farayseere (Komoor)\",
        \"fr_LU\": \"Farayseere (Liksembuur)\",
        \"fr_MA\": \"Farayseere (Maruk)\",
        \"fr_MC\": \"Farayseere (Monaakoo)\",
        \"fr_MG\": \"Farayseere (Madagaskaar)\",
        \"fr_ML\": \"Farayseere (Maali)\",
        \"fr_MQ\": \"Farayseere (Martinik)\",
        \"fr_MR\": \"Farayseere (Muritani)\",
        \"fr_MU\": \"Farayseere (Moriis)\",
        \"fr_NC\": \"Farayseere (Nuwel Kaledonii)\",
        \"fr_NE\": \"Farayseere (Nijeer)\",
        \"fr_PF\": \"Farayseere (Polinesii Farayse)\",
        \"fr_PM\": \"Farayseere (See Piyeer e Mikeloo)\",
        \"fr_RE\": \"Farayseere (Rewiñoo)\",
        \"fr_RW\": \"Farayseere (Ruwanndaa)\",
        \"fr_SC\": \"Farayseere (Seysel)\",
        \"fr_SN\": \"Farayseere (Senegaal)\",
        \"fr_SY\": \"Farayseere (Sirii)\",
        \"fr_TD\": \"Farayseere (Caad)\",
        \"fr_TG\": \"Farayseere (Togoo)\",
        \"fr_TN\": \"Farayseere (Tunisii)\",
        \"fr_VU\": \"Farayseere (Wanuwaatuu)\",
        \"fr_WF\": \"Farayseere (Walis e Futuna)\",
        \"fr_YT\": \"Farayseere (Mayoot)\",
        \"ha\": \"Hawsaŋkoore\",
        \"ha_GH\": \"Hawsaŋkoore (Ganaa)\",
        \"ha_NE\": \"Hawsaŋkoore (Nijeer)\",
        \"ha_NG\": \"Hawsaŋkoore (Nijeriyaa)\",
        \"hi\": \"Hinndi\",
        \"hi_IN\": \"Hinndi (Enndo)\",
        \"hu\": \"Hongariire\",
        \"hu_HU\": \"Hongariire (Onngiri)\",
        \"id\": \"Endonesiire\",
        \"id_ID\": \"Endonesiire (Enndonesii)\",
        \"ig\": \"Igiboore\",
        \"ig_NG\": \"Igiboore (Nijeriyaa)\",
        \"it\": \"Italiyeere\",
        \"it_CH\": \"Italiyeere (Suwiis)\",
        \"it_IT\": \"Italiyeere (Itali)\",
        \"it_SM\": \"Italiyeere (See Maree)\",
        \"it_VA\": \"Italiyeere (Dowla Waticaan)\",
        \"ja\": \"Saponeere\",
        \"ja_JP\": \"Saponeere (Sapoo)\",
        \"jv\": \"Sawaneere\",
        \"jv_ID\": \"Sawaneere (Enndonesii)\",
        \"km\": \"Kemeere\",
        \"km_KH\": \"Kemeere (Kambodso)\",
        \"ko\": \"Koreere\",
        \"ko_KP\": \"Koreere (Koree Rewo)\",
        \"ko_KR\": \"Koreere (Koree Worgo)\",
        \"ms\": \"Malayeere\",
        \"ms_BN\": \"Malayeere (Burnaay)\",
        \"ms_MY\": \"Malayeere (Malesii)\",
        \"ms_SG\": \"Malayeere (Sinngapuur)\",
        \"my\": \"Burmeese\",
        \"my_MM\": \"Burmeese (Miyamaar)\",
        \"ne\": \"Nepaaleere\",
        \"ne_IN\": \"Nepaaleere (Enndo)\",
        \"ne_NP\": \"Nepaaleere (Nepaal)\",
        \"nl\": \"Dacceere\",
        \"nl_AW\": \"Dacceere (Aruuba)\",
        \"nl_BE\": \"Dacceere (Beljik)\",
        \"nl_NL\": \"Dacceere (Nederlannda)\",
        \"nl_SR\": \"Dacceere (Surinaam)\",
        \"pa\": \"Punjabeere\",
        \"pa_IN\": \"Punjabeere (Enndo)\",
        \"pa_PK\": \"Punjabeere (Pakistaan)\",
        \"pl\": \"Poloneere\",
        \"pl_PL\": \"Poloneere (Poloñ)\",
        \"pt\": \"Purtugeere\",
        \"pt_AO\": \"Purtugeere (Anngolaa)\",
        \"pt_BR\": \"Purtugeere (Beresiil)\",
        \"pt_CH\": \"Purtugeere (Suwiis)\",
        \"pt_CV\": \"Purtugeere (Duuɗe Kap Weer)\",
        \"pt_GQ\": \"Purtugeere (Ginee Ekuwaatoriyaal)\",
        \"pt_GW\": \"Purtugeere (Gine-Bisaawo)\",
        \"pt_LU\": \"Purtugeere (Liksembuur)\",
        \"pt_MZ\": \"Purtugeere (Mosammbik)\",
        \"pt_PT\": \"Purtugeere (Purtugaal)\",
        \"pt_ST\": \"Purtugeere (Sawo Tome e Perensipe)\",
        \"pt_TL\": \"Purtugeere (Timoor Fuɗnaange)\",
        \"ro\": \"Romaneere\",
        \"ro_MD\": \"Romaneere (Moldawii)\",
        \"ro_RO\": \"Romaneere (Rumanii)\",
        \"ru\": \"Riis\",
        \"ru_BY\": \"Riis (Belaruus)\",
        \"ru_KG\": \"Riis (Kirgistaan)\",
        \"ru_KZ\": \"Riis (Kasakstaan)\",
        \"ru_MD\": \"Riis (Moldawii)\",
        \"ru_RU\": \"Riis (Riisii)\",
        \"ru_UA\": \"Riis (Ukereen)\",
        \"rw\": \"Ruwaanndeere\",
        \"rw_RW\": \"Ruwaanndeere (Ruwanndaa)\",
        \"so\": \"Somalii\",
        \"so_DJ\": \"Somalii (Jibutii)\",
        \"so_ET\": \"Somalii (Ecoppi)\",
        \"so_KE\": \"Somalii (Keñaa)\",
        \"so_SO\": \"Somalii (Somalii)\",
        \"sv\": \"Sweedeere\",
        \"sv_FI\": \"Sweedeere (Fenland)\",
        \"sv_SE\": \"Sweedeere (Suweed)\",
        \"ta\": \"Tamil\",
        \"ta_IN\": \"Tamil (Enndo)\",
        \"ta_LK\": \"Tamil (Siri Lanka)\",
        \"ta_MY\": \"Tamil (Malesii)\",
        \"ta_SG\": \"Tamil (Sinngapuur)\",
        \"th\": \"Taay\",
        \"th_TH\": \"Taay (Taylannda)\",
        \"tr\": \"Turkeere\",
        \"tr_CY\": \"Turkeere (Siipar)\",
        \"tr_TR\": \"Turkeere (Turkii)\",
        \"uk\": \"Ukereneere\",
        \"uk_UA\": \"Ukereneere (Ukereen)\",
        \"ur\": \"Urdu\",
        \"ur_IN\": \"Urdu (Enndo)\",
        \"ur_PK\": \"Urdu (Pakistaan)\",
        \"vi\": \"Wiyetnameere\",
        \"vi_VN\": \"Wiyetnameere (Wiyetnaam)\",
        \"yo\": \"Yorrubaa\",
        \"yo_BJ\": \"Yorrubaa (Benee)\",
        \"yo_NG\": \"Yorrubaa (Nijeriyaa)\",
        \"zh\": \"Sinuwaare\",
        \"zh_CN\": \"Sinuwaare (Siin)\",
        \"zh_SG\": \"Sinuwaare (Sinngapuur)\",
        \"zh_TW\": \"Sinuwaare (Taywaan)\",
        \"zu\": \"Suluŋkoore\",
        \"zu_ZA\": \"Suluŋkoore (Afrik bŋ Worgo)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/ff.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/ff.json");
    }
}
