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

/* vendor/symfony/intl/Resources/data/regions/so.json */
class __TwigTemplate_8d2061a1277bb684449b74275cfa52bd71747256be8958911f353b8231aa3e7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/so.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/so.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andora\",
        \"AE\": \"Imaaraadka Carabta ee Midoobay\",
        \"AF\": \"Afgaanistaan\",
        \"AG\": \"Antigua & Barbuuda\",
        \"AI\": \"Anguula\",
        \"AL\": \"Albaaniya\",
        \"AM\": \"Armeeniya\",
        \"AO\": \"Angoola\",
        \"AQ\": \"Antaarktika\",
        \"AR\": \"Arjentiina\",
        \"AS\": \"Samowa Ameerika\",
        \"AT\": \"Awsteriya\",
        \"AU\": \"Awstaraaliya\",
        \"AW\": \"Aruba\",
        \"AX\": \"Jasiiradda Aland\",
        \"AZ\": \"Asarbajan\",
        \"BA\": \"Boosniya & Harsegofina\",
        \"BB\": \"Baarbadoos\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Biljam\",
        \"BF\": \"Burkiina Faaso\",
        \"BG\": \"Bulgaariya\",
        \"BH\": \"Baxreyn\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Biniin\",
        \"BL\": \"St. Baathelemiy\",
        \"BM\": \"Barmuuda\",
        \"BN\": \"Buruneeya\",
        \"BO\": \"Boliifiya\",
        \"BQ\": \"Karibiyaan Nadarlands\",
        \"BR\": \"Baraasiil\",
        \"BS\": \"Bahaamas\",
        \"BT\": \"Buutan\",
        \"BV\": \"Buufet Island\",
        \"BW\": \"Botuswaana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Beliis\",
        \"CA\": \"Kanada\",
        \"CC\": \"Jasiiradda Kookoos\",
        \"CD\": \"Jamhuuriyadda Dimuquraadiga Kongo\",
        \"CF\": \"Jamhuuriyadda Afrikada Dhexe\",
        \"CG\": \"Kongo\",
        \"CH\": \"Swiiserlaand\",
        \"CI\": \"Ayfori Koost\",
        \"CK\": \"Jasiiradda Kook\",
        \"CL\": \"Jili\",
        \"CM\": \"Kaameruun\",
        \"CN\": \"Shiinaha\",
        \"CR\": \"Kosta Riika\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Jasiiradda Kayb Faarde\",
        \"CW\": \"Kurakaaw\",
        \"CX\": \"Jasiiradda Kirismas\",
        \"CY\": \"Qubrus\",
        \"CZ\": \"Jekiya\",
        \"DE\": \"Jarmal\",
        \"DJ\": \"Jabuuti\",
        \"DK\": \"Denmark\",
        \"DM\": \"Dominika\",
        \"DO\": \"Jamhuuriyaddda Dominika\",
        \"DZ\": \"Aljeeriya\",
        \"EC\": \"Ikuwadoor\",
        \"EE\": \"Estooniya\",
        \"EG\": \"Masar\",
        \"EH\": \"Saxaraha Galbeed\",
        \"ER\": \"Eritreeya\",
        \"ES\": \"Isbeyn\",
        \"ET\": \"Itoobiya\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Jaziiradaha Fooklaan\",
        \"FM\": \"Mikroneesiya\",
        \"FO\": \"Jasiiradda Faroo\",
        \"FR\": \"Faransiis\",
        \"GA\": \"Gaaboon\",
        \"GB\": \"Boqortooyada Midowday\",
        \"GD\": \"Giriinaada\",
        \"GE\": \"Joorjiya\",
        \"GF\": \"Faransiis Gini\",
        \"GG\": \"Guurnsey\",
        \"GH\": \"Gaana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Gini\",
        \"GP\": \"Guadeluub\",
        \"GQ\": \"Ekuwatooriyal Gini\",
        \"GR\": \"Giriig\",
        \"GS\": \"Jasiiradda Joorjiyada Koonfureed & Sandwij\",
        \"GT\": \"Guwaatamaala\",
        \"GU\": \"Guaam\",
        \"GW\": \"Gini-Bisaaw\",
        \"HK\": \"Hong Kong\",
        \"HM\": \"Jasiiradda Haad & MakDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Korweeshiya\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hangari\",
        \"ID\": \"Indoneesiya\",
        \"IE\": \"Ayrlaand\",
        \"IL\": \"Israaʼiil\",
        \"IM\": \"Jasiiradda Isle of Man\",
        \"IN\": \"Hindiya\",
        \"IO\": \"Dhul xadeedka Badweynta Hindiya ee Biritishka\",
        \"IQ\": \"Ciraaq\",
        \"IR\": \"Iiraan\",
        \"IS\": \"Ayslaand\",
        \"IT\": \"Talyaani\",
        \"JE\": \"Jaarsey\",
        \"JM\": \"Jamaaika\",
        \"JO\": \"Urdun\",
        \"JP\": \"Jabaan\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgistaan\",
        \"KH\": \"Kamboodiya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komooros\",
        \"KN\": \"St. Kitts & Nefis\",
        \"KP\": \"Kuuriyada Waqooyi\",
        \"KR\": \"Kuuriyada Koonfureed\",
        \"KW\": \"Kuwayt\",
        \"KY\": \"Cayman Islands\",
        \"KZ\": \"Kasaakhistaan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lubnaan\",
        \"LC\": \"St. Lusia\",
        \"LI\": \"Liyjtensteyn\",
        \"LK\": \"Sirilaanka\",
        \"LR\": \"Laybeeriya\",
        \"LS\": \"Losooto\",
        \"LT\": \"Lituweeniya\",
        \"LU\": \"Luksemboorg\",
        \"LV\": \"Latfiya\",
        \"LY\": \"Liibya\",
        \"MA\": \"Morooko\",
        \"MC\": \"Moonako\",
        \"MD\": \"Moldofa\",
        \"ME\": \"Moontenegro\",
        \"MF\": \"St. Maartin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Jasiiradda Maarshal\",
        \"MK\": \"Masedooniya Waqooyi\",
        \"ML\": \"Maali\",
        \"MM\": \"Miyanmar\",
        \"MN\": \"Mongooliya\",
        \"MO\": \"Makaaw\",
        \"MP\": \"Jasiiradda Waqooyiga Mariaana\",
        \"MQ\": \"Maartinik\",
        \"MR\": \"Muritaaniya\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Maalta\",
        \"MU\": \"Mawrishiyaas\",
        \"MV\": \"Maaldiqeen\",
        \"MW\": \"Malaawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Musambiik\",
        \"NA\": \"Namiibiya\",
        \"NC\": \"Jasiiradda Niyuu Kaledooniya\",
        \"NE\": \"Nayjer\",
        \"NF\": \"Jasiiradda Noorfolk\",
        \"NG\": \"Nayjeeriya\",
        \"NI\": \"Nikaraaguwa\",
        \"NL\": \"Nederlaands\",
        \"NO\": \"Noorweey\",
        \"NP\": \"Nebaal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Niyuusiilaand\",
        \"OM\": \"Cumaan\",
        \"PA\": \"Baanama\",
        \"PE\": \"Beeru\",
        \"PF\": \"Booliyneesiya Faransiiska\",
        \"PG\": \"Babua Niyuu Gini\",
        \"PH\": \"Filibiin\",
        \"PK\": \"Bakistaan\",
        \"PL\": \"Booland\",
        \"PM\": \"Saint Pierre and Miquelon\",
        \"PN\": \"Bitkairn\",
        \"PR\": \"Bueerto Riiko\",
        \"PS\": \"Falastiin Daanka galbeed iyo Qasa\",
        \"PT\": \"Bortugaal\",
        \"PW\": \"Balaaw\",
        \"PY\": \"Baraguaay\",
        \"QA\": \"Qadar\",
        \"RE\": \"Riyuuniyon\",
        \"RO\": \"Rumaaniya\",
        \"RS\": \"Seerbiya\",
        \"RU\": \"Ruush\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Sacuudi Carabiya\",
        \"SB\": \"Jasiiradda Solomon\",
        \"SC\": \"Sishelis\",
        \"SD\": \"Suudaan\",
        \"SE\": \"Iswidhan\",
        \"SG\": \"Singaboor\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Islofeeniya\",
        \"SJ\": \"Jasiiradda Sfaldbaad & Jaan Mayen\",
        \"SK\": \"Islofaakiya\",
        \"SL\": \"Siraaliyoon\",
        \"SM\": \"San Marino\",
        \"SN\": \"Sinigaal\",
        \"SO\": \"Soomaaliya\",
        \"SR\": \"Surineym\",
        \"SS\": \"Koonfur Suudaan\",
        \"ST\": \"Sao Tome & Birincibal\",
        \"SV\": \"El Salfadoor\",
        \"SX\": \"Siint Maarteen\",
        \"SY\": \"Suuriya\",
        \"SZ\": \"Eswaatiini\",
        \"TC\": \"Turks & Kaikos Island\",
        \"TD\": \"Jaad\",
        \"TF\": \"Dhul xadeedka Koonfureed ee Faransiiska\",
        \"TG\": \"Toogo\",
        \"TH\": \"Taylaand\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelaaw\",
        \"TL\": \"Timoor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tuniisiya\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turki\",
        \"TT\": \"Tirinidaad & Tobago\",
        \"TV\": \"Tufaalu\",
        \"TW\": \"Taywaan\",
        \"TZ\": \"Tansaaniya\",
        \"UA\": \"Yukrayn\",
        \"UG\": \"Ugaanda\",
        \"UM\": \"Jasiiradaha ka baxsan Maraykanka\",
        \"US\": \"Maraykanka\",
        \"UY\": \"Uruguwaay\",
        \"UZ\": \"Uusbakistaan\",
        \"VA\": \"Faatikaan\",
        \"VC\": \"St. Finsent & Girenadiins\",
        \"VE\": \"Fenisuweela\",
        \"VG\": \"Biritish Farjin Island\",
        \"VI\": \"U.S Fargin Island\",
        \"VN\": \"Fiyetnaam\",
        \"VU\": \"Fanuaatu\",
        \"WF\": \"Walis & Futuna\",
        \"WS\": \"Samoowa\",
        \"YE\": \"Yaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Koonfur Afrika\",
        \"ZM\": \"Saambiya\",
        \"ZW\": \"Simbaabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/so.json";
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
        \"AD\": \"Andora\",
        \"AE\": \"Imaaraadka Carabta ee Midoobay\",
        \"AF\": \"Afgaanistaan\",
        \"AG\": \"Antigua & Barbuuda\",
        \"AI\": \"Anguula\",
        \"AL\": \"Albaaniya\",
        \"AM\": \"Armeeniya\",
        \"AO\": \"Angoola\",
        \"AQ\": \"Antaarktika\",
        \"AR\": \"Arjentiina\",
        \"AS\": \"Samowa Ameerika\",
        \"AT\": \"Awsteriya\",
        \"AU\": \"Awstaraaliya\",
        \"AW\": \"Aruba\",
        \"AX\": \"Jasiiradda Aland\",
        \"AZ\": \"Asarbajan\",
        \"BA\": \"Boosniya & Harsegofina\",
        \"BB\": \"Baarbadoos\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Biljam\",
        \"BF\": \"Burkiina Faaso\",
        \"BG\": \"Bulgaariya\",
        \"BH\": \"Baxreyn\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Biniin\",
        \"BL\": \"St. Baathelemiy\",
        \"BM\": \"Barmuuda\",
        \"BN\": \"Buruneeya\",
        \"BO\": \"Boliifiya\",
        \"BQ\": \"Karibiyaan Nadarlands\",
        \"BR\": \"Baraasiil\",
        \"BS\": \"Bahaamas\",
        \"BT\": \"Buutan\",
        \"BV\": \"Buufet Island\",
        \"BW\": \"Botuswaana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Beliis\",
        \"CA\": \"Kanada\",
        \"CC\": \"Jasiiradda Kookoos\",
        \"CD\": \"Jamhuuriyadda Dimuquraadiga Kongo\",
        \"CF\": \"Jamhuuriyadda Afrikada Dhexe\",
        \"CG\": \"Kongo\",
        \"CH\": \"Swiiserlaand\",
        \"CI\": \"Ayfori Koost\",
        \"CK\": \"Jasiiradda Kook\",
        \"CL\": \"Jili\",
        \"CM\": \"Kaameruun\",
        \"CN\": \"Shiinaha\",
        \"CR\": \"Kosta Riika\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Jasiiradda Kayb Faarde\",
        \"CW\": \"Kurakaaw\",
        \"CX\": \"Jasiiradda Kirismas\",
        \"CY\": \"Qubrus\",
        \"CZ\": \"Jekiya\",
        \"DE\": \"Jarmal\",
        \"DJ\": \"Jabuuti\",
        \"DK\": \"Denmark\",
        \"DM\": \"Dominika\",
        \"DO\": \"Jamhuuriyaddda Dominika\",
        \"DZ\": \"Aljeeriya\",
        \"EC\": \"Ikuwadoor\",
        \"EE\": \"Estooniya\",
        \"EG\": \"Masar\",
        \"EH\": \"Saxaraha Galbeed\",
        \"ER\": \"Eritreeya\",
        \"ES\": \"Isbeyn\",
        \"ET\": \"Itoobiya\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Jaziiradaha Fooklaan\",
        \"FM\": \"Mikroneesiya\",
        \"FO\": \"Jasiiradda Faroo\",
        \"FR\": \"Faransiis\",
        \"GA\": \"Gaaboon\",
        \"GB\": \"Boqortooyada Midowday\",
        \"GD\": \"Giriinaada\",
        \"GE\": \"Joorjiya\",
        \"GF\": \"Faransiis Gini\",
        \"GG\": \"Guurnsey\",
        \"GH\": \"Gaana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Gini\",
        \"GP\": \"Guadeluub\",
        \"GQ\": \"Ekuwatooriyal Gini\",
        \"GR\": \"Giriig\",
        \"GS\": \"Jasiiradda Joorjiyada Koonfureed & Sandwij\",
        \"GT\": \"Guwaatamaala\",
        \"GU\": \"Guaam\",
        \"GW\": \"Gini-Bisaaw\",
        \"HK\": \"Hong Kong\",
        \"HM\": \"Jasiiradda Haad & MakDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Korweeshiya\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hangari\",
        \"ID\": \"Indoneesiya\",
        \"IE\": \"Ayrlaand\",
        \"IL\": \"Israaʼiil\",
        \"IM\": \"Jasiiradda Isle of Man\",
        \"IN\": \"Hindiya\",
        \"IO\": \"Dhul xadeedka Badweynta Hindiya ee Biritishka\",
        \"IQ\": \"Ciraaq\",
        \"IR\": \"Iiraan\",
        \"IS\": \"Ayslaand\",
        \"IT\": \"Talyaani\",
        \"JE\": \"Jaarsey\",
        \"JM\": \"Jamaaika\",
        \"JO\": \"Urdun\",
        \"JP\": \"Jabaan\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgistaan\",
        \"KH\": \"Kamboodiya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komooros\",
        \"KN\": \"St. Kitts & Nefis\",
        \"KP\": \"Kuuriyada Waqooyi\",
        \"KR\": \"Kuuriyada Koonfureed\",
        \"KW\": \"Kuwayt\",
        \"KY\": \"Cayman Islands\",
        \"KZ\": \"Kasaakhistaan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lubnaan\",
        \"LC\": \"St. Lusia\",
        \"LI\": \"Liyjtensteyn\",
        \"LK\": \"Sirilaanka\",
        \"LR\": \"Laybeeriya\",
        \"LS\": \"Losooto\",
        \"LT\": \"Lituweeniya\",
        \"LU\": \"Luksemboorg\",
        \"LV\": \"Latfiya\",
        \"LY\": \"Liibya\",
        \"MA\": \"Morooko\",
        \"MC\": \"Moonako\",
        \"MD\": \"Moldofa\",
        \"ME\": \"Moontenegro\",
        \"MF\": \"St. Maartin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Jasiiradda Maarshal\",
        \"MK\": \"Masedooniya Waqooyi\",
        \"ML\": \"Maali\",
        \"MM\": \"Miyanmar\",
        \"MN\": \"Mongooliya\",
        \"MO\": \"Makaaw\",
        \"MP\": \"Jasiiradda Waqooyiga Mariaana\",
        \"MQ\": \"Maartinik\",
        \"MR\": \"Muritaaniya\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Maalta\",
        \"MU\": \"Mawrishiyaas\",
        \"MV\": \"Maaldiqeen\",
        \"MW\": \"Malaawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Musambiik\",
        \"NA\": \"Namiibiya\",
        \"NC\": \"Jasiiradda Niyuu Kaledooniya\",
        \"NE\": \"Nayjer\",
        \"NF\": \"Jasiiradda Noorfolk\",
        \"NG\": \"Nayjeeriya\",
        \"NI\": \"Nikaraaguwa\",
        \"NL\": \"Nederlaands\",
        \"NO\": \"Noorweey\",
        \"NP\": \"Nebaal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Niyuusiilaand\",
        \"OM\": \"Cumaan\",
        \"PA\": \"Baanama\",
        \"PE\": \"Beeru\",
        \"PF\": \"Booliyneesiya Faransiiska\",
        \"PG\": \"Babua Niyuu Gini\",
        \"PH\": \"Filibiin\",
        \"PK\": \"Bakistaan\",
        \"PL\": \"Booland\",
        \"PM\": \"Saint Pierre and Miquelon\",
        \"PN\": \"Bitkairn\",
        \"PR\": \"Bueerto Riiko\",
        \"PS\": \"Falastiin Daanka galbeed iyo Qasa\",
        \"PT\": \"Bortugaal\",
        \"PW\": \"Balaaw\",
        \"PY\": \"Baraguaay\",
        \"QA\": \"Qadar\",
        \"RE\": \"Riyuuniyon\",
        \"RO\": \"Rumaaniya\",
        \"RS\": \"Seerbiya\",
        \"RU\": \"Ruush\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Sacuudi Carabiya\",
        \"SB\": \"Jasiiradda Solomon\",
        \"SC\": \"Sishelis\",
        \"SD\": \"Suudaan\",
        \"SE\": \"Iswidhan\",
        \"SG\": \"Singaboor\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Islofeeniya\",
        \"SJ\": \"Jasiiradda Sfaldbaad & Jaan Mayen\",
        \"SK\": \"Islofaakiya\",
        \"SL\": \"Siraaliyoon\",
        \"SM\": \"San Marino\",
        \"SN\": \"Sinigaal\",
        \"SO\": \"Soomaaliya\",
        \"SR\": \"Surineym\",
        \"SS\": \"Koonfur Suudaan\",
        \"ST\": \"Sao Tome & Birincibal\",
        \"SV\": \"El Salfadoor\",
        \"SX\": \"Siint Maarteen\",
        \"SY\": \"Suuriya\",
        \"SZ\": \"Eswaatiini\",
        \"TC\": \"Turks & Kaikos Island\",
        \"TD\": \"Jaad\",
        \"TF\": \"Dhul xadeedka Koonfureed ee Faransiiska\",
        \"TG\": \"Toogo\",
        \"TH\": \"Taylaand\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelaaw\",
        \"TL\": \"Timoor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tuniisiya\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turki\",
        \"TT\": \"Tirinidaad & Tobago\",
        \"TV\": \"Tufaalu\",
        \"TW\": \"Taywaan\",
        \"TZ\": \"Tansaaniya\",
        \"UA\": \"Yukrayn\",
        \"UG\": \"Ugaanda\",
        \"UM\": \"Jasiiradaha ka baxsan Maraykanka\",
        \"US\": \"Maraykanka\",
        \"UY\": \"Uruguwaay\",
        \"UZ\": \"Uusbakistaan\",
        \"VA\": \"Faatikaan\",
        \"VC\": \"St. Finsent & Girenadiins\",
        \"VE\": \"Fenisuweela\",
        \"VG\": \"Biritish Farjin Island\",
        \"VI\": \"U.S Fargin Island\",
        \"VN\": \"Fiyetnaam\",
        \"VU\": \"Fanuaatu\",
        \"WF\": \"Walis & Futuna\",
        \"WS\": \"Samoowa\",
        \"YE\": \"Yaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Koonfur Afrika\",
        \"ZM\": \"Saambiya\",
        \"ZW\": \"Simbaabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/so.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/so.json");
    }
}
