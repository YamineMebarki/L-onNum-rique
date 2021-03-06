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

/* vendor/symfony/intl/Resources/data/regions/gd.json */
class __TwigTemplate_40844d078bcb768d4af93ef35c28e7cdcc5dfb464a7008403a99c91bbf1954d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/gd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/gd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Na h-Iomaratan Arabach Aonaichte\",
        \"AF\": \"Afghanastàn\",
        \"AG\": \"Aintìoga is Barbuda\",
        \"AI\": \"Anguillia\",
        \"AL\": \"Albàinia\",
        \"AM\": \"Airmeinea\",
        \"AO\": \"Angòla\",
        \"AQ\": \"An Antartaig\",
        \"AR\": \"An Argantain\",
        \"AS\": \"Samotha na h-Aimeireaga\",
        \"AT\": \"An Ostair\",
        \"AU\": \"Astràilia\",
        \"AW\": \"Arùba\",
        \"AX\": \"Na h-Eileanan Åland\",
        \"AZ\": \"Asarbaideàn\",
        \"BA\": \"Bosna is Hearsagobhana\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladais\",
        \"BE\": \"A’ Bheilg\",
        \"BF\": \"Buirciona Faso\",
        \"BG\": \"A’ Bhulgair\",
        \"BH\": \"Bachrain\",
        \"BI\": \"Burundaidh\",
        \"BJ\": \"Beinin\",
        \"BL\": \"Saint Barthélemy\",
        \"BM\": \"Bearmùda\",
        \"BN\": \"Brùnaigh\",
        \"BO\": \"Boilibhia\",
        \"BQ\": \"Na Tìrean Ìsle Caraibeach\",
        \"BR\": \"Braisil\",
        \"BS\": \"Na h-Eileanan Bhathama\",
        \"BT\": \"Butàn\",
        \"BV\": \"Eilean Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"A’ Bhealaruis\",
        \"BZ\": \"A’ Bheilìs\",
        \"CA\": \"Canada\",
        \"CC\": \"Na h-Eileanan Chocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"Poblachd Meadhan Afraga\",
        \"CG\": \"A’ Chongo - Brazzaville\",
        \"CH\": \"An Eilbheis\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Eileanan Cook\",
        \"CL\": \"An t-Sile\",
        \"CM\": \"Camarun\",
        \"CN\": \"An t-Sìn\",
        \"CO\": \"Coloimbia\",
        \"CR\": \"Costa Rìcea\",
        \"CU\": \"Cùba\",
        \"CV\": \"An Ceap Uaine\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Eilean na Nollaig\",
        \"CY\": \"Cìopras\",
        \"CZ\": \"An t-Seic\",
        \"DE\": \"A’ Ghearmailt\",
        \"DJ\": \"Diobùtaidh\",
        \"DK\": \"An Danmhairg\",
        \"DM\": \"Doiminicea\",
        \"DO\": \"A’ Phoblachd Dhoiminiceach\",
        \"DZ\": \"Aildiria\",
        \"EC\": \"Eacuador\",
        \"EE\": \"An Eastoin\",
        \"EG\": \"An Èiphit\",
        \"EH\": \"Sathara an Iar\",
        \"ER\": \"Eartra\",
        \"ES\": \"An Spàinnt\",
        \"ET\": \"An Itiop\",
        \"FI\": \"An Fhionnlann\",
        \"FJ\": \"Fìdi\",
        \"FK\": \"Na h-Eileanan Fàclannach\",
        \"FM\": \"Na Meanbh-eileanan\",
        \"FO\": \"Na h-Eileanan Fàro\",
        \"FR\": \"An Fhraing\",
        \"GA\": \"Gabon\",
        \"GB\": \"An Rìoghachd Aonaichte\",
        \"GD\": \"Greanàda\",
        \"GE\": \"A’ Chairtbheil\",
        \"GF\": \"Guidheàna na Frainge\",
        \"GG\": \"Geàrnsaidh\",
        \"GH\": \"Gàna\",
        \"GI\": \"Diobraltar\",
        \"GL\": \"A’ Ghraonlann\",
        \"GM\": \"A’ Ghaimbia\",
        \"GN\": \"Gini\",
        \"GP\": \"Guadalup\",
        \"GQ\": \"Gini Mheadhan-Chriosach\",
        \"GR\": \"A’ Ghreug\",
        \"GS\": \"Seòirsea a Deas is na h-Eileanan Sandwich a Deas\",
        \"GT\": \"Guatamala\",
        \"GU\": \"Guam\",
        \"GW\": \"Gini-Bioso\",
        \"GY\": \"Guidheàna\",
        \"HK\": \"Hong Kong SAR na Sìne\",
        \"HM\": \"Eilean Heard is MhicDhòmhnaill\",
        \"HN\": \"Hondùras\",
        \"HR\": \"A’ Chròthais\",
        \"HT\": \"Haidhti\",
        \"HU\": \"An Ungair\",
        \"ID\": \"Na h-Innd-innse\",
        \"IE\": \"Èirinn\",
        \"IL\": \"Iosrael\",
        \"IM\": \"Eilean Mhanainn\",
        \"IN\": \"Na h-Innseachan\",
        \"IO\": \"Ranntair Breatannach Cuan nan Innseachan\",
        \"IQ\": \"Ioràc\",
        \"IR\": \"Ioràn\",
        \"IS\": \"Innis Tìle\",
        \"IT\": \"An Eadailt\",
        \"JE\": \"Deàrsaidh\",
        \"JM\": \"Diameuga\",
        \"JO\": \"Iòrdan\",
        \"JP\": \"An t-Seapan\",
        \"KE\": \"Ceinia\",
        \"KG\": \"Cìorgastan\",
        \"KH\": \"Cambuidea\",
        \"KI\": \"Ciribeas\",
        \"KM\": \"Comoros\",
        \"KN\": \"Naomh Crìstean is Nibheis\",
        \"KP\": \"Coirèa a Tuath\",
        \"KR\": \"Coirèa\",
        \"KW\": \"Cuibhèit\",
        \"KY\": \"Na h-Eileanan Caimean\",
        \"KZ\": \"Casachstàn\",
        \"LA\": \"Làthos\",
        \"LB\": \"Leabanon\",
        \"LC\": \"Naomh Lùisea\",
        \"LI\": \"Lichtenstein\",
        \"LK\": \"Sri Lanca\",
        \"LR\": \"Libèir\",
        \"LS\": \"Leasoto\",
        \"LT\": \"An Liotuain\",
        \"LU\": \"Lugsamburg\",
        \"LV\": \"An Laitbhe\",
        \"LY\": \"Libia\",
        \"MA\": \"Moroco\",
        \"MC\": \"Monaco\",
        \"MD\": \"A’ Mholdobha\",
        \"ME\": \"Am Monadh Neagrach\",
        \"MF\": \"Naomh Màrtainn\",
        \"MG\": \"Madagasgar\",
        \"MH\": \"Eileanan Mharshall\",
        \"MK\": \"A’ Mhasadon a Tuath\",
        \"ML\": \"Màili\",
        \"MM\": \"Miànmar\",
        \"MN\": \"Dùthaich nam Mongol\",
        \"MO\": \"Macàthu SAR na Sìne\",
        \"MP\": \"Na h-Eileanan Mairianach a Tuath\",
        \"MQ\": \"Mairtinic\",
        \"MR\": \"Moratàinea\",
        \"MS\": \"Montsarat\",
        \"MT\": \"Malta\",
        \"MU\": \"Na h-Eileanan Mhoiriseas\",
        \"MV\": \"Na h-Eileanan Mhaladaibh\",
        \"MW\": \"Malabhaidh\",
        \"MX\": \"Meagsago\",
        \"MY\": \"Malaidhsea\",
        \"MZ\": \"Mòsaimbic\",
        \"NA\": \"An Namaib\",
        \"NC\": \"Cailleann Nuadh\",
        \"NE\": \"Nìgeir\",
        \"NF\": \"Eilean Norfolk\",
        \"NG\": \"Nigèiria\",
        \"NI\": \"Niocaragua\",
        \"NL\": \"Na Tìrean Ìsle\",
        \"NO\": \"Nirribhidh\",
        \"NP\": \"Neapàl\",
        \"NR\": \"Nabhru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Sealainn Nuadh\",
        \"OM\": \"Omàn\",
        \"PA\": \"Panama\",
        \"PE\": \"Pearù\",
        \"PF\": \"Poilinèis na Frainge\",
        \"PG\": \"Gini Nuadh Phaputhach\",
        \"PH\": \"Na h-Eileanan Filipineach\",
        \"PK\": \"Pagastàn\",
        \"PL\": \"A’ Phòlainn\",
        \"PM\": \"Saint Pierre agus Miquelon\",
        \"PN\": \"Eileanan Pheit a’ Chàirn\",
        \"PR\": \"Porto Rìceo\",
        \"PS\": \"Ùghdarras nam Palastaineach\",
        \"PT\": \"A’ Phortagail\",
        \"PW\": \"Palabh\",
        \"PY\": \"Paraguaidh\",
        \"QA\": \"Catar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romàinia\",
        \"RS\": \"An t-Sèirb\",
        \"RU\": \"An Ruis\",
        \"RW\": \"Rubhanda\",
        \"SA\": \"Aràibia nan Sabhd\",
        \"SB\": \"Eileanan Sholaimh\",
        \"SC\": \"Na h-Eileanan Sheiseall\",
        \"SD\": \"Sudàn\",
        \"SE\": \"An t-Suain\",
        \"SG\": \"Singeapòr\",
        \"SH\": \"Eilean Naomh Eilidh\",
        \"SI\": \"An t-Slòbhain\",
        \"SJ\": \"Svalbard agus Jan Mayen\",
        \"SK\": \"An t-Slòbhac\",
        \"SL\": \"Siarra Leòmhann\",
        \"SM\": \"San Marino\",
        \"SN\": \"Seanagal\",
        \"SO\": \"Somàilia\",
        \"SR\": \"Suranam\",
        \"SS\": \"Sudàn a Deas\",
        \"ST\": \"São Tomé agus Príncipe\",
        \"SV\": \"An Salbhador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Siridhea\",
        \"SZ\": \"eSwatini\",
        \"TC\": \"Na h-Eileanan Turcach is Caiceo\",
        \"TD\": \"An t-Seàd\",
        \"TF\": \"Ranntairean a Deas na Frainge\",
        \"TG\": \"Togo\",
        \"TH\": \"Dùthaich nan Tàidh\",
        \"TJ\": \"Taidigeastàn\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turcmanastàn\",
        \"TN\": \"Tuinisea\",
        \"TO\": \"Tonga\",
        \"TR\": \"An Tuirc\",
        \"TT\": \"Trianaid agus Tobago\",
        \"TV\": \"Tubhalu\",
        \"TW\": \"Taidh-Bhàn\",
        \"TZ\": \"An Tansan\",
        \"UA\": \"An Ucràin\",
        \"UG\": \"Uganda\",
        \"UM\": \"Meanbh-Eileanan Iomallach nan SA\",
        \"US\": \"Na Stàitean Aonaichte\",
        \"UY\": \"Uruguaidh\",
        \"UZ\": \"Usbagastàn\",
        \"VA\": \"Cathair na Bhatacain\",
        \"VC\": \"Naomh Bhionsant agus Eileanan Greanadach\",
        \"VE\": \"A’ Bheiniseala\",
        \"VG\": \"Eileanan Breatannach na Maighdinn\",
        \"VI\": \"Eileanan na Maighdinn aig na SA\",
        \"VN\": \"Bhiet-Nam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Uallas agus Futuna\",
        \"WS\": \"Samotha\",
        \"YE\": \"An Eaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afraga a Deas\",
        \"ZM\": \"Sàimbia\",
        \"ZW\": \"An t-Sìombab\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/gd.json";
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
        \"AD\": \"Andorra\",
        \"AE\": \"Na h-Iomaratan Arabach Aonaichte\",
        \"AF\": \"Afghanastàn\",
        \"AG\": \"Aintìoga is Barbuda\",
        \"AI\": \"Anguillia\",
        \"AL\": \"Albàinia\",
        \"AM\": \"Airmeinea\",
        \"AO\": \"Angòla\",
        \"AQ\": \"An Antartaig\",
        \"AR\": \"An Argantain\",
        \"AS\": \"Samotha na h-Aimeireaga\",
        \"AT\": \"An Ostair\",
        \"AU\": \"Astràilia\",
        \"AW\": \"Arùba\",
        \"AX\": \"Na h-Eileanan Åland\",
        \"AZ\": \"Asarbaideàn\",
        \"BA\": \"Bosna is Hearsagobhana\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladais\",
        \"BE\": \"A’ Bheilg\",
        \"BF\": \"Buirciona Faso\",
        \"BG\": \"A’ Bhulgair\",
        \"BH\": \"Bachrain\",
        \"BI\": \"Burundaidh\",
        \"BJ\": \"Beinin\",
        \"BL\": \"Saint Barthélemy\",
        \"BM\": \"Bearmùda\",
        \"BN\": \"Brùnaigh\",
        \"BO\": \"Boilibhia\",
        \"BQ\": \"Na Tìrean Ìsle Caraibeach\",
        \"BR\": \"Braisil\",
        \"BS\": \"Na h-Eileanan Bhathama\",
        \"BT\": \"Butàn\",
        \"BV\": \"Eilean Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"A’ Bhealaruis\",
        \"BZ\": \"A’ Bheilìs\",
        \"CA\": \"Canada\",
        \"CC\": \"Na h-Eileanan Chocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"Poblachd Meadhan Afraga\",
        \"CG\": \"A’ Chongo - Brazzaville\",
        \"CH\": \"An Eilbheis\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Eileanan Cook\",
        \"CL\": \"An t-Sile\",
        \"CM\": \"Camarun\",
        \"CN\": \"An t-Sìn\",
        \"CO\": \"Coloimbia\",
        \"CR\": \"Costa Rìcea\",
        \"CU\": \"Cùba\",
        \"CV\": \"An Ceap Uaine\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Eilean na Nollaig\",
        \"CY\": \"Cìopras\",
        \"CZ\": \"An t-Seic\",
        \"DE\": \"A’ Ghearmailt\",
        \"DJ\": \"Diobùtaidh\",
        \"DK\": \"An Danmhairg\",
        \"DM\": \"Doiminicea\",
        \"DO\": \"A’ Phoblachd Dhoiminiceach\",
        \"DZ\": \"Aildiria\",
        \"EC\": \"Eacuador\",
        \"EE\": \"An Eastoin\",
        \"EG\": \"An Èiphit\",
        \"EH\": \"Sathara an Iar\",
        \"ER\": \"Eartra\",
        \"ES\": \"An Spàinnt\",
        \"ET\": \"An Itiop\",
        \"FI\": \"An Fhionnlann\",
        \"FJ\": \"Fìdi\",
        \"FK\": \"Na h-Eileanan Fàclannach\",
        \"FM\": \"Na Meanbh-eileanan\",
        \"FO\": \"Na h-Eileanan Fàro\",
        \"FR\": \"An Fhraing\",
        \"GA\": \"Gabon\",
        \"GB\": \"An Rìoghachd Aonaichte\",
        \"GD\": \"Greanàda\",
        \"GE\": \"A’ Chairtbheil\",
        \"GF\": \"Guidheàna na Frainge\",
        \"GG\": \"Geàrnsaidh\",
        \"GH\": \"Gàna\",
        \"GI\": \"Diobraltar\",
        \"GL\": \"A’ Ghraonlann\",
        \"GM\": \"A’ Ghaimbia\",
        \"GN\": \"Gini\",
        \"GP\": \"Guadalup\",
        \"GQ\": \"Gini Mheadhan-Chriosach\",
        \"GR\": \"A’ Ghreug\",
        \"GS\": \"Seòirsea a Deas is na h-Eileanan Sandwich a Deas\",
        \"GT\": \"Guatamala\",
        \"GU\": \"Guam\",
        \"GW\": \"Gini-Bioso\",
        \"GY\": \"Guidheàna\",
        \"HK\": \"Hong Kong SAR na Sìne\",
        \"HM\": \"Eilean Heard is MhicDhòmhnaill\",
        \"HN\": \"Hondùras\",
        \"HR\": \"A’ Chròthais\",
        \"HT\": \"Haidhti\",
        \"HU\": \"An Ungair\",
        \"ID\": \"Na h-Innd-innse\",
        \"IE\": \"Èirinn\",
        \"IL\": \"Iosrael\",
        \"IM\": \"Eilean Mhanainn\",
        \"IN\": \"Na h-Innseachan\",
        \"IO\": \"Ranntair Breatannach Cuan nan Innseachan\",
        \"IQ\": \"Ioràc\",
        \"IR\": \"Ioràn\",
        \"IS\": \"Innis Tìle\",
        \"IT\": \"An Eadailt\",
        \"JE\": \"Deàrsaidh\",
        \"JM\": \"Diameuga\",
        \"JO\": \"Iòrdan\",
        \"JP\": \"An t-Seapan\",
        \"KE\": \"Ceinia\",
        \"KG\": \"Cìorgastan\",
        \"KH\": \"Cambuidea\",
        \"KI\": \"Ciribeas\",
        \"KM\": \"Comoros\",
        \"KN\": \"Naomh Crìstean is Nibheis\",
        \"KP\": \"Coirèa a Tuath\",
        \"KR\": \"Coirèa\",
        \"KW\": \"Cuibhèit\",
        \"KY\": \"Na h-Eileanan Caimean\",
        \"KZ\": \"Casachstàn\",
        \"LA\": \"Làthos\",
        \"LB\": \"Leabanon\",
        \"LC\": \"Naomh Lùisea\",
        \"LI\": \"Lichtenstein\",
        \"LK\": \"Sri Lanca\",
        \"LR\": \"Libèir\",
        \"LS\": \"Leasoto\",
        \"LT\": \"An Liotuain\",
        \"LU\": \"Lugsamburg\",
        \"LV\": \"An Laitbhe\",
        \"LY\": \"Libia\",
        \"MA\": \"Moroco\",
        \"MC\": \"Monaco\",
        \"MD\": \"A’ Mholdobha\",
        \"ME\": \"Am Monadh Neagrach\",
        \"MF\": \"Naomh Màrtainn\",
        \"MG\": \"Madagasgar\",
        \"MH\": \"Eileanan Mharshall\",
        \"MK\": \"A’ Mhasadon a Tuath\",
        \"ML\": \"Màili\",
        \"MM\": \"Miànmar\",
        \"MN\": \"Dùthaich nam Mongol\",
        \"MO\": \"Macàthu SAR na Sìne\",
        \"MP\": \"Na h-Eileanan Mairianach a Tuath\",
        \"MQ\": \"Mairtinic\",
        \"MR\": \"Moratàinea\",
        \"MS\": \"Montsarat\",
        \"MT\": \"Malta\",
        \"MU\": \"Na h-Eileanan Mhoiriseas\",
        \"MV\": \"Na h-Eileanan Mhaladaibh\",
        \"MW\": \"Malabhaidh\",
        \"MX\": \"Meagsago\",
        \"MY\": \"Malaidhsea\",
        \"MZ\": \"Mòsaimbic\",
        \"NA\": \"An Namaib\",
        \"NC\": \"Cailleann Nuadh\",
        \"NE\": \"Nìgeir\",
        \"NF\": \"Eilean Norfolk\",
        \"NG\": \"Nigèiria\",
        \"NI\": \"Niocaragua\",
        \"NL\": \"Na Tìrean Ìsle\",
        \"NO\": \"Nirribhidh\",
        \"NP\": \"Neapàl\",
        \"NR\": \"Nabhru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Sealainn Nuadh\",
        \"OM\": \"Omàn\",
        \"PA\": \"Panama\",
        \"PE\": \"Pearù\",
        \"PF\": \"Poilinèis na Frainge\",
        \"PG\": \"Gini Nuadh Phaputhach\",
        \"PH\": \"Na h-Eileanan Filipineach\",
        \"PK\": \"Pagastàn\",
        \"PL\": \"A’ Phòlainn\",
        \"PM\": \"Saint Pierre agus Miquelon\",
        \"PN\": \"Eileanan Pheit a’ Chàirn\",
        \"PR\": \"Porto Rìceo\",
        \"PS\": \"Ùghdarras nam Palastaineach\",
        \"PT\": \"A’ Phortagail\",
        \"PW\": \"Palabh\",
        \"PY\": \"Paraguaidh\",
        \"QA\": \"Catar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romàinia\",
        \"RS\": \"An t-Sèirb\",
        \"RU\": \"An Ruis\",
        \"RW\": \"Rubhanda\",
        \"SA\": \"Aràibia nan Sabhd\",
        \"SB\": \"Eileanan Sholaimh\",
        \"SC\": \"Na h-Eileanan Sheiseall\",
        \"SD\": \"Sudàn\",
        \"SE\": \"An t-Suain\",
        \"SG\": \"Singeapòr\",
        \"SH\": \"Eilean Naomh Eilidh\",
        \"SI\": \"An t-Slòbhain\",
        \"SJ\": \"Svalbard agus Jan Mayen\",
        \"SK\": \"An t-Slòbhac\",
        \"SL\": \"Siarra Leòmhann\",
        \"SM\": \"San Marino\",
        \"SN\": \"Seanagal\",
        \"SO\": \"Somàilia\",
        \"SR\": \"Suranam\",
        \"SS\": \"Sudàn a Deas\",
        \"ST\": \"São Tomé agus Príncipe\",
        \"SV\": \"An Salbhador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Siridhea\",
        \"SZ\": \"eSwatini\",
        \"TC\": \"Na h-Eileanan Turcach is Caiceo\",
        \"TD\": \"An t-Seàd\",
        \"TF\": \"Ranntairean a Deas na Frainge\",
        \"TG\": \"Togo\",
        \"TH\": \"Dùthaich nan Tàidh\",
        \"TJ\": \"Taidigeastàn\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turcmanastàn\",
        \"TN\": \"Tuinisea\",
        \"TO\": \"Tonga\",
        \"TR\": \"An Tuirc\",
        \"TT\": \"Trianaid agus Tobago\",
        \"TV\": \"Tubhalu\",
        \"TW\": \"Taidh-Bhàn\",
        \"TZ\": \"An Tansan\",
        \"UA\": \"An Ucràin\",
        \"UG\": \"Uganda\",
        \"UM\": \"Meanbh-Eileanan Iomallach nan SA\",
        \"US\": \"Na Stàitean Aonaichte\",
        \"UY\": \"Uruguaidh\",
        \"UZ\": \"Usbagastàn\",
        \"VA\": \"Cathair na Bhatacain\",
        \"VC\": \"Naomh Bhionsant agus Eileanan Greanadach\",
        \"VE\": \"A’ Bheiniseala\",
        \"VG\": \"Eileanan Breatannach na Maighdinn\",
        \"VI\": \"Eileanan na Maighdinn aig na SA\",
        \"VN\": \"Bhiet-Nam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Uallas agus Futuna\",
        \"WS\": \"Samotha\",
        \"YE\": \"An Eaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afraga a Deas\",
        \"ZM\": \"Sàimbia\",
        \"ZW\": \"An t-Sìombab\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/gd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/gd.json");
    }
}
