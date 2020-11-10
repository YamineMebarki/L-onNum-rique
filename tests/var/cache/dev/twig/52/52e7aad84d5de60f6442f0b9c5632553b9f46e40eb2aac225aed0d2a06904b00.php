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

/* vendor/symfony/intl/Resources/data/regions/lg.json */
class __TwigTemplate_85f0c969a4b770b244aa71df98e3f234798974b352f85d3f4c517d9a0bde6f6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/lg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/lg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andora\",
        \"AE\": \"Emireeti\",
        \"AF\": \"Afaganisitani\",
        \"AG\": \"Antigwa ne Barabuda\",
        \"AI\": \"Angwila\",
        \"AL\": \"Alibaniya\",
        \"AM\": \"Arameniya\",
        \"AO\": \"Angola\",
        \"AR\": \"Arigentina\",
        \"AS\": \"Samowa omumerika\",
        \"AT\": \"Awusituriya\",
        \"AU\": \"Awusitureliya\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azerebayijaani\",
        \"BA\": \"Boziniya Hezegovina\",
        \"BB\": \"Barabadosi\",
        \"BD\": \"Bangaladesi\",
        \"BE\": \"Bubirigi\",
        \"BF\": \"Burukina Faso\",
        \"BG\": \"Bulugariya\",
        \"BH\": \"Baareeni\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benini\",
        \"BM\": \"Beremuda\",
        \"BN\": \"Burunayi\",
        \"BO\": \"Boliviya\",
        \"BR\": \"Buraziiri\",
        \"BS\": \"Bahamasi\",
        \"BT\": \"Butaani\",
        \"BW\": \"Botiswana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CD\": \"Kongo - Zayire\",
        \"CF\": \"Lipubulika eya Senturafiriki\",
        \"CG\": \"Kongo\",
        \"CH\": \"Switizirandi\",
        \"CI\": \"Kote Divwa\",
        \"CK\": \"Bizinga bya Kkuki\",
        \"CL\": \"Cile\",
        \"CM\": \"Kameruuni\",
        \"CN\": \"Cayina\",
        \"CO\": \"Kolombya\",
        \"CR\": \"Kosita Rika\",
        \"CU\": \"Cuba\",
        \"CV\": \"Bizinga by’e Kepu Veredi\",
        \"CY\": \"Sipuriya\",
        \"CZ\": \"Lipubulika ya Ceeka\",
        \"DE\": \"Budaaki\",
        \"DJ\": \"Jjibuti\",
        \"DK\": \"Denimaaka\",
        \"DM\": \"Dominika\",
        \"DO\": \"Lipubulika ya Dominika\",
        \"DZ\": \"Aligerya\",
        \"EC\": \"Ekwado\",
        \"EE\": \"Esitoniya\",
        \"EG\": \"Misiri\",
        \"ER\": \"Eritureya\",
        \"ES\": \"Sipeyini\",
        \"ET\": \"Esyopya\",
        \"FI\": \"Finilandi\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Bizinga by’eFalikalandi\",
        \"FM\": \"Mikuronezya\",
        \"FR\": \"Bufalansa\",
        \"GA\": \"Gaboni\",
        \"GB\": \"Bungereza\",
        \"GD\": \"Gurenada\",
        \"GE\": \"Gyogya\",
        \"GF\": \"Guyana enfalansa\",
        \"GH\": \"Gana\",
        \"GI\": \"Giburalita\",
        \"GL\": \"Gurenelandi\",
        \"GM\": \"Gambya\",
        \"GN\": \"Gini\",
        \"GP\": \"Gwadalupe\",
        \"GQ\": \"Gayana ey’oku ekweta\",
        \"GR\": \"Bugereeki\\/Buyonaani\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwamu\",
        \"GW\": \"Gini-Bisawu\",
        \"GY\": \"Gayana\",
        \"HN\": \"Hundurasi\",
        \"HR\": \"Kurowesya\",
        \"HT\": \"Hayiti\",
        \"HU\": \"Hangare\",
        \"ID\": \"Yindonezya\",
        \"IE\": \"Ayalandi\",
        \"IL\": \"Yisirayeri\",
        \"IN\": \"Buyindi\",
        \"IO\": \"Bizinga by’eCago\",
        \"IQ\": \"Yiraaka\",
        \"IR\": \"Yiraani\",
        \"IS\": \"Ayisirandi\",
        \"IT\": \"Yitale\",
        \"JM\": \"Jamayika\",
        \"JO\": \"Yorodani\",
        \"JP\": \"Japani\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirigizisitaani\",
        \"KH\": \"Kambodya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Bizinga by’eKomoro\",
        \"KN\": \"Senti Kitisi ne Nevisi\",
        \"KP\": \"Koreya ey’omumambuka\",
        \"KR\": \"Koreya ey’omumaserengeta\",
        \"KW\": \"Kuweti\",
        \"KY\": \"Bizinga ebya Kayimaani\",
        \"KZ\": \"Kazakisitaani\",
        \"LA\": \"Lawosi\",
        \"LB\": \"Lebanoni\",
        \"LC\": \"Senti Luciya\",
        \"LI\": \"Licitensitayini\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberya\",
        \"LS\": \"Lesoso\",
        \"LT\": \"Lisuwenya\",
        \"LU\": \"Lukisembaaga\",
        \"LV\": \"Lativya\",
        \"LY\": \"Libya\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Molodova\",
        \"MG\": \"Madagasika\",
        \"MH\": \"Bizinga bya Mariso\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanima\",
        \"MN\": \"Mongoliya\",
        \"MP\": \"Bizinga bya Mariyana eby’omumambuka\",
        \"MQ\": \"Maritiniiki\",
        \"MR\": \"Mawulitenya\",
        \"MS\": \"Monteseraati\",
        \"MT\": \"Malita\",
        \"MU\": \"Mawulisyasi\",
        \"MV\": \"Bizinga by’eMalidive\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mekisiko\",
        \"MY\": \"Malezya\",
        \"MZ\": \"Mozambiiki\",
        \"NA\": \"Namibiya\",
        \"NC\": \"Kaledonya mupya\",
        \"NE\": \"Nije\",
        \"NF\": \"Kizinga ky’eNorofoko\",
        \"NG\": \"Nayijerya\",
        \"NI\": \"Nikaraguwa\",
        \"NL\": \"Holandi\",
        \"NO\": \"Nowe\",
        \"NP\": \"Nepalo\",
        \"NR\": \"Nawuru\",
        \"NU\": \"Niyuwe\",
        \"NZ\": \"Niyuziirandi\",
        \"OM\": \"Omaani\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesiya enfalansa\",
        \"PG\": \"Papwa Nyugini\",
        \"PH\": \"Bizinga bya Firipino\",
        \"PK\": \"Pakisitaani\",
        \"PL\": \"Polandi\",
        \"PM\": \"Senti Piyere ne Mikeloni\",
        \"PN\": \"Pitikeeni\",
        \"PR\": \"Potoriko\",
        \"PS\": \"Palesitayini\",
        \"PT\": \"Potugaali\",
        \"PW\": \"Palawu\",
        \"PY\": \"Paragwayi\",
        \"QA\": \"Kataa\",
        \"RE\": \"Leyunyoni\",
        \"RO\": \"Lomaniya\",
        \"RU\": \"Lasa\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Sawudarebya - Buwarabu\",
        \"SB\": \"Bizanga by’eSolomooni\",
        \"SC\": \"Sesere\",
        \"SD\": \"Sudaani\",
        \"SE\": \"Swideni\",
        \"SG\": \"Singapowa\",
        \"SH\": \"Senti Herena\",
        \"SI\": \"Sirovenya\",
        \"SK\": \"Sirovakya\",
        \"SL\": \"Siyeralewone\",
        \"SM\": \"Sanimarino\",
        \"SN\": \"Senegaalo\",
        \"SO\": \"Somaliya\",
        \"SR\": \"Surinaamu\",
        \"ST\": \"Sanitome ne Purincipe\",
        \"SV\": \"El salivado\",
        \"SY\": \"Siriya\",
        \"SZ\": \"Swazirandi\",
        \"TC\": \"Bizinga by’eTaaka ne Kayikosi\",
        \"TD\": \"Caadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayirandi\",
        \"TJ\": \"Tajikisitaani\",
        \"TK\": \"Tokelawu\",
        \"TL\": \"Timowa\",
        \"TM\": \"Takimenesitaani\",
        \"TN\": \"Tunisya\",
        \"TO\": \"Tonga\",
        \"TR\": \"Ttake\",
        \"TT\": \"Turindaadi ne Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayiwani\",
        \"TZ\": \"Tanzaniya\",
        \"UA\": \"Yukurayine\",
        \"UG\": \"Yuganda\",
        \"US\": \"Amerika\",
        \"UY\": \"Wurugwayi\",
        \"UZ\": \"Wuzibekisitaani\",
        \"VA\": \"Vatikaani\",
        \"VC\": \"Senti Vinsenti ne Gurendadiini\",
        \"VE\": \"Venzwera\",
        \"VG\": \"Bizinga ebya Virigini ebitwalibwa Bungereza\",
        \"VI\": \"Bizinga bya Virigini eby’Amerika\",
        \"VN\": \"Vyetinaamu\",
        \"VU\": \"Vanawuwatu\",
        \"WF\": \"Walisi ne Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sawusafirika\",
        \"ZM\": \"Zambya\",
        \"ZW\": \"Zimbabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/lg.json";
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
        \"AE\": \"Emireeti\",
        \"AF\": \"Afaganisitani\",
        \"AG\": \"Antigwa ne Barabuda\",
        \"AI\": \"Angwila\",
        \"AL\": \"Alibaniya\",
        \"AM\": \"Arameniya\",
        \"AO\": \"Angola\",
        \"AR\": \"Arigentina\",
        \"AS\": \"Samowa omumerika\",
        \"AT\": \"Awusituriya\",
        \"AU\": \"Awusitureliya\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azerebayijaani\",
        \"BA\": \"Boziniya Hezegovina\",
        \"BB\": \"Barabadosi\",
        \"BD\": \"Bangaladesi\",
        \"BE\": \"Bubirigi\",
        \"BF\": \"Burukina Faso\",
        \"BG\": \"Bulugariya\",
        \"BH\": \"Baareeni\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benini\",
        \"BM\": \"Beremuda\",
        \"BN\": \"Burunayi\",
        \"BO\": \"Boliviya\",
        \"BR\": \"Buraziiri\",
        \"BS\": \"Bahamasi\",
        \"BT\": \"Butaani\",
        \"BW\": \"Botiswana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CD\": \"Kongo - Zayire\",
        \"CF\": \"Lipubulika eya Senturafiriki\",
        \"CG\": \"Kongo\",
        \"CH\": \"Switizirandi\",
        \"CI\": \"Kote Divwa\",
        \"CK\": \"Bizinga bya Kkuki\",
        \"CL\": \"Cile\",
        \"CM\": \"Kameruuni\",
        \"CN\": \"Cayina\",
        \"CO\": \"Kolombya\",
        \"CR\": \"Kosita Rika\",
        \"CU\": \"Cuba\",
        \"CV\": \"Bizinga by’e Kepu Veredi\",
        \"CY\": \"Sipuriya\",
        \"CZ\": \"Lipubulika ya Ceeka\",
        \"DE\": \"Budaaki\",
        \"DJ\": \"Jjibuti\",
        \"DK\": \"Denimaaka\",
        \"DM\": \"Dominika\",
        \"DO\": \"Lipubulika ya Dominika\",
        \"DZ\": \"Aligerya\",
        \"EC\": \"Ekwado\",
        \"EE\": \"Esitoniya\",
        \"EG\": \"Misiri\",
        \"ER\": \"Eritureya\",
        \"ES\": \"Sipeyini\",
        \"ET\": \"Esyopya\",
        \"FI\": \"Finilandi\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Bizinga by’eFalikalandi\",
        \"FM\": \"Mikuronezya\",
        \"FR\": \"Bufalansa\",
        \"GA\": \"Gaboni\",
        \"GB\": \"Bungereza\",
        \"GD\": \"Gurenada\",
        \"GE\": \"Gyogya\",
        \"GF\": \"Guyana enfalansa\",
        \"GH\": \"Gana\",
        \"GI\": \"Giburalita\",
        \"GL\": \"Gurenelandi\",
        \"GM\": \"Gambya\",
        \"GN\": \"Gini\",
        \"GP\": \"Gwadalupe\",
        \"GQ\": \"Gayana ey’oku ekweta\",
        \"GR\": \"Bugereeki\\/Buyonaani\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwamu\",
        \"GW\": \"Gini-Bisawu\",
        \"GY\": \"Gayana\",
        \"HN\": \"Hundurasi\",
        \"HR\": \"Kurowesya\",
        \"HT\": \"Hayiti\",
        \"HU\": \"Hangare\",
        \"ID\": \"Yindonezya\",
        \"IE\": \"Ayalandi\",
        \"IL\": \"Yisirayeri\",
        \"IN\": \"Buyindi\",
        \"IO\": \"Bizinga by’eCago\",
        \"IQ\": \"Yiraaka\",
        \"IR\": \"Yiraani\",
        \"IS\": \"Ayisirandi\",
        \"IT\": \"Yitale\",
        \"JM\": \"Jamayika\",
        \"JO\": \"Yorodani\",
        \"JP\": \"Japani\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirigizisitaani\",
        \"KH\": \"Kambodya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Bizinga by’eKomoro\",
        \"KN\": \"Senti Kitisi ne Nevisi\",
        \"KP\": \"Koreya ey’omumambuka\",
        \"KR\": \"Koreya ey’omumaserengeta\",
        \"KW\": \"Kuweti\",
        \"KY\": \"Bizinga ebya Kayimaani\",
        \"KZ\": \"Kazakisitaani\",
        \"LA\": \"Lawosi\",
        \"LB\": \"Lebanoni\",
        \"LC\": \"Senti Luciya\",
        \"LI\": \"Licitensitayini\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberya\",
        \"LS\": \"Lesoso\",
        \"LT\": \"Lisuwenya\",
        \"LU\": \"Lukisembaaga\",
        \"LV\": \"Lativya\",
        \"LY\": \"Libya\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Molodova\",
        \"MG\": \"Madagasika\",
        \"MH\": \"Bizinga bya Mariso\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanima\",
        \"MN\": \"Mongoliya\",
        \"MP\": \"Bizinga bya Mariyana eby’omumambuka\",
        \"MQ\": \"Maritiniiki\",
        \"MR\": \"Mawulitenya\",
        \"MS\": \"Monteseraati\",
        \"MT\": \"Malita\",
        \"MU\": \"Mawulisyasi\",
        \"MV\": \"Bizinga by’eMalidive\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mekisiko\",
        \"MY\": \"Malezya\",
        \"MZ\": \"Mozambiiki\",
        \"NA\": \"Namibiya\",
        \"NC\": \"Kaledonya mupya\",
        \"NE\": \"Nije\",
        \"NF\": \"Kizinga ky’eNorofoko\",
        \"NG\": \"Nayijerya\",
        \"NI\": \"Nikaraguwa\",
        \"NL\": \"Holandi\",
        \"NO\": \"Nowe\",
        \"NP\": \"Nepalo\",
        \"NR\": \"Nawuru\",
        \"NU\": \"Niyuwe\",
        \"NZ\": \"Niyuziirandi\",
        \"OM\": \"Omaani\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesiya enfalansa\",
        \"PG\": \"Papwa Nyugini\",
        \"PH\": \"Bizinga bya Firipino\",
        \"PK\": \"Pakisitaani\",
        \"PL\": \"Polandi\",
        \"PM\": \"Senti Piyere ne Mikeloni\",
        \"PN\": \"Pitikeeni\",
        \"PR\": \"Potoriko\",
        \"PS\": \"Palesitayini\",
        \"PT\": \"Potugaali\",
        \"PW\": \"Palawu\",
        \"PY\": \"Paragwayi\",
        \"QA\": \"Kataa\",
        \"RE\": \"Leyunyoni\",
        \"RO\": \"Lomaniya\",
        \"RU\": \"Lasa\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Sawudarebya - Buwarabu\",
        \"SB\": \"Bizanga by’eSolomooni\",
        \"SC\": \"Sesere\",
        \"SD\": \"Sudaani\",
        \"SE\": \"Swideni\",
        \"SG\": \"Singapowa\",
        \"SH\": \"Senti Herena\",
        \"SI\": \"Sirovenya\",
        \"SK\": \"Sirovakya\",
        \"SL\": \"Siyeralewone\",
        \"SM\": \"Sanimarino\",
        \"SN\": \"Senegaalo\",
        \"SO\": \"Somaliya\",
        \"SR\": \"Surinaamu\",
        \"ST\": \"Sanitome ne Purincipe\",
        \"SV\": \"El salivado\",
        \"SY\": \"Siriya\",
        \"SZ\": \"Swazirandi\",
        \"TC\": \"Bizinga by’eTaaka ne Kayikosi\",
        \"TD\": \"Caadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayirandi\",
        \"TJ\": \"Tajikisitaani\",
        \"TK\": \"Tokelawu\",
        \"TL\": \"Timowa\",
        \"TM\": \"Takimenesitaani\",
        \"TN\": \"Tunisya\",
        \"TO\": \"Tonga\",
        \"TR\": \"Ttake\",
        \"TT\": \"Turindaadi ne Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayiwani\",
        \"TZ\": \"Tanzaniya\",
        \"UA\": \"Yukurayine\",
        \"UG\": \"Yuganda\",
        \"US\": \"Amerika\",
        \"UY\": \"Wurugwayi\",
        \"UZ\": \"Wuzibekisitaani\",
        \"VA\": \"Vatikaani\",
        \"VC\": \"Senti Vinsenti ne Gurendadiini\",
        \"VE\": \"Venzwera\",
        \"VG\": \"Bizinga ebya Virigini ebitwalibwa Bungereza\",
        \"VI\": \"Bizinga bya Virigini eby’Amerika\",
        \"VN\": \"Vyetinaamu\",
        \"VU\": \"Vanawuwatu\",
        \"WF\": \"Walisi ne Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sawusafirika\",
        \"ZM\": \"Zambya\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/lg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/lg.json");
    }
}