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

/* vendor/symfony/intl/Resources/data/regions/tr.json */
class __TwigTemplate_52becbb8905fc7b1395a700e4fa133ec0764e93a1f71e03b43d2f885fcea3402 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/tr.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/tr.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Birleşik Arap Emirlikleri\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ve Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Arnavutluk\",
        \"AM\": \"Ermenistan\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Arjantin\",
        \"AS\": \"Amerikan Samoası\",
        \"AT\": \"Avusturya\",
        \"AU\": \"Avustralya\",
        \"AW\": \"Aruba\",
        \"AX\": \"Åland Adaları\",
        \"AZ\": \"Azerbaycan\",
        \"BA\": \"Bosna-Hersek\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladeş\",
        \"BE\": \"Belçika\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaristan\",
        \"BH\": \"Bahreyn\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint Barthelemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivya\",
        \"BQ\": \"Karayip Hollandası\",
        \"BR\": \"Brezilya\",
        \"BS\": \"Bahamalar\",
        \"BT\": \"Butan\",
        \"BV\": \"Bouvet Adası\",
        \"BW\": \"Botsvana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Cocos (Keeling) Adaları\",
        \"CD\": \"Kongo - Kinşasa\",
        \"CF\": \"Orta Afrika Cumhuriyeti\",
        \"CG\": \"Kongo - Brazavil\",
        \"CH\": \"İsviçre\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Cook Adaları\",
        \"CL\": \"Şili\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Çin\",
        \"CO\": \"Kolombiya\",
        \"CR\": \"Kosta Rika\",
        \"CU\": \"Küba\",
        \"CV\": \"Cape Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Christmas Adası\",
        \"CY\": \"Kıbrıs\",
        \"CZ\": \"Çekya\",
        \"DE\": \"Almanya\",
        \"DJ\": \"Cibuti\",
        \"DK\": \"Danimarka\",
        \"DM\": \"Dominika\",
        \"DO\": \"Dominik Cumhuriyeti\",
        \"DZ\": \"Cezayir\",
        \"EC\": \"Ekvador\",
        \"EE\": \"Estonya\",
        \"EG\": \"Mısır\",
        \"EH\": \"Batı Sahra\",
        \"ER\": \"Eritre\",
        \"ES\": \"İspanya\",
        \"ET\": \"Etiyopya\",
        \"FI\": \"Finlandiya\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falkland Adaları\",
        \"FM\": \"Mikronezya\",
        \"FO\": \"Faroe Adaları\",
        \"FR\": \"Fransa\",
        \"GA\": \"Gabon\",
        \"GB\": \"Birleşik Krallık\",
        \"GD\": \"Grenada\",
        \"GE\": \"Gürcistan\",
        \"GF\": \"Fransız Guyanası\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Cebelitarık\",
        \"GL\": \"Grönland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Gine\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvator Ginesi\",
        \"GR\": \"Yunanistan\",
        \"GS\": \"Güney Georgia ve Güney Sandwich Adaları\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Gine-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Çin Hong Kong ÖİB\",
        \"HM\": \"Heard Adası ve McDonald Adaları\",
        \"HN\": \"Honduras\",
        \"HR\": \"Hırvatistan\",
        \"HT\": \"Haiti\",
        \"HU\": \"Macaristan\",
        \"ID\": \"Endonezya\",
        \"IE\": \"İrlanda\",
        \"IL\": \"İsrail\",
        \"IM\": \"Man Adası\",
        \"IN\": \"Hindistan\",
        \"IO\": \"Britanya Hint Okyanusu Toprakları\",
        \"IQ\": \"Irak\",
        \"IR\": \"İran\",
        \"IS\": \"İzlanda\",
        \"IT\": \"İtalya\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Ürdün\",
        \"JP\": \"Japonya\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kırgızistan\",
        \"KH\": \"Kamboçya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorlar\",
        \"KN\": \"Saint Kitts ve Nevis\",
        \"KP\": \"Kuzey Kore\",
        \"KR\": \"Güney Kore\",
        \"KW\": \"Kuveyt\",
        \"KY\": \"Cayman Adaları\",
        \"KZ\": \"Kazakistan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lübnan\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberya\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litvanya\",
        \"LU\": \"Lüksemburg\",
        \"LV\": \"Letonya\",
        \"LY\": \"Libya\",
        \"MA\": \"Fas\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"ME\": \"Karadağ\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshall Adaları\",
        \"MK\": \"Kuzey Makedonya\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Moğolistan\",
        \"MO\": \"Çin Makao ÖİB\",
        \"MP\": \"Kuzey Mariana Adaları\",
        \"MQ\": \"Martinik\",
        \"MR\": \"Moritanya\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldivler\",
        \"MW\": \"Malavi\",
        \"MX\": \"Meksika\",
        \"MY\": \"Malezya\",
        \"MZ\": \"Mozambik\",
        \"NA\": \"Namibya\",
        \"NC\": \"Yeni Kaledonya\",
        \"NE\": \"Nijer\",
        \"NF\": \"Norfolk Adası\",
        \"NG\": \"Nijerya\",
        \"NI\": \"Nikaragua\",
        \"NL\": \"Hollanda\",
        \"NO\": \"Norveç\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Yeni Zelanda\",
        \"OM\": \"Umman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Fransız Polinezyası\",
        \"PG\": \"Papua Yeni Gine\",
        \"PH\": \"Filipinler\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polonya\",
        \"PM\": \"Saint Pierre ve Miquelon\",
        \"PN\": \"Pitcairn Adaları\",
        \"PR\": \"Porto Riko\",
        \"PS\": \"Filistin Bölgeleri\",
        \"PT\": \"Portekiz\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Katar\",
        \"RE\": \"Reunion\",
        \"RO\": \"Romanya\",
        \"RS\": \"Sırbistan\",
        \"RU\": \"Rusya\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Suudi Arabistan\",
        \"SB\": \"Solomon Adaları\",
        \"SC\": \"Seyşeller\",
        \"SD\": \"Sudan\",
        \"SE\": \"İsveç\",
        \"SG\": \"Singapur\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenya\",
        \"SJ\": \"Svalbard ve Jan Mayen\",
        \"SK\": \"Slovakya\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somali\",
        \"SR\": \"Surinam\",
        \"SS\": \"Güney Sudan\",
        \"ST\": \"Sao Tome ve Principe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Suriye\",
        \"SZ\": \"Esvatini\",
        \"TC\": \"Turks ve Caicos Adaları\",
        \"TD\": \"Çad\",
        \"TF\": \"Fransız Güney Toprakları\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayland\",
        \"TJ\": \"Tacikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Türkmenistan\",
        \"TN\": \"Tunus\",
        \"TO\": \"Tonga\",
        \"TR\": \"Türkiye\",
        \"TT\": \"Trinidad ve Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayvan\",
        \"TZ\": \"Tanzanya\",
        \"UA\": \"Ukrayna\",
        \"UG\": \"Uganda\",
        \"UM\": \"ABD Küçük Harici Adaları\",
        \"US\": \"Amerika Birleşik Devletleri\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Özbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent ve Grenadinler\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Britanya Virjin Adaları\",
        \"VI\": \"ABD Virjin Adaları\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ve Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Güney Afrika\",
        \"ZM\": \"Zambiya\",
        \"ZW\": \"Zimbabve\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/tr.json";
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
        \"AE\": \"Birleşik Arap Emirlikleri\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ve Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Arnavutluk\",
        \"AM\": \"Ermenistan\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Arjantin\",
        \"AS\": \"Amerikan Samoası\",
        \"AT\": \"Avusturya\",
        \"AU\": \"Avustralya\",
        \"AW\": \"Aruba\",
        \"AX\": \"Åland Adaları\",
        \"AZ\": \"Azerbaycan\",
        \"BA\": \"Bosna-Hersek\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladeş\",
        \"BE\": \"Belçika\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaristan\",
        \"BH\": \"Bahreyn\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint Barthelemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivya\",
        \"BQ\": \"Karayip Hollandası\",
        \"BR\": \"Brezilya\",
        \"BS\": \"Bahamalar\",
        \"BT\": \"Butan\",
        \"BV\": \"Bouvet Adası\",
        \"BW\": \"Botsvana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Cocos (Keeling) Adaları\",
        \"CD\": \"Kongo - Kinşasa\",
        \"CF\": \"Orta Afrika Cumhuriyeti\",
        \"CG\": \"Kongo - Brazavil\",
        \"CH\": \"İsviçre\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Cook Adaları\",
        \"CL\": \"Şili\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Çin\",
        \"CO\": \"Kolombiya\",
        \"CR\": \"Kosta Rika\",
        \"CU\": \"Küba\",
        \"CV\": \"Cape Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Christmas Adası\",
        \"CY\": \"Kıbrıs\",
        \"CZ\": \"Çekya\",
        \"DE\": \"Almanya\",
        \"DJ\": \"Cibuti\",
        \"DK\": \"Danimarka\",
        \"DM\": \"Dominika\",
        \"DO\": \"Dominik Cumhuriyeti\",
        \"DZ\": \"Cezayir\",
        \"EC\": \"Ekvador\",
        \"EE\": \"Estonya\",
        \"EG\": \"Mısır\",
        \"EH\": \"Batı Sahra\",
        \"ER\": \"Eritre\",
        \"ES\": \"İspanya\",
        \"ET\": \"Etiyopya\",
        \"FI\": \"Finlandiya\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falkland Adaları\",
        \"FM\": \"Mikronezya\",
        \"FO\": \"Faroe Adaları\",
        \"FR\": \"Fransa\",
        \"GA\": \"Gabon\",
        \"GB\": \"Birleşik Krallık\",
        \"GD\": \"Grenada\",
        \"GE\": \"Gürcistan\",
        \"GF\": \"Fransız Guyanası\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Cebelitarık\",
        \"GL\": \"Grönland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Gine\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvator Ginesi\",
        \"GR\": \"Yunanistan\",
        \"GS\": \"Güney Georgia ve Güney Sandwich Adaları\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Gine-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Çin Hong Kong ÖİB\",
        \"HM\": \"Heard Adası ve McDonald Adaları\",
        \"HN\": \"Honduras\",
        \"HR\": \"Hırvatistan\",
        \"HT\": \"Haiti\",
        \"HU\": \"Macaristan\",
        \"ID\": \"Endonezya\",
        \"IE\": \"İrlanda\",
        \"IL\": \"İsrail\",
        \"IM\": \"Man Adası\",
        \"IN\": \"Hindistan\",
        \"IO\": \"Britanya Hint Okyanusu Toprakları\",
        \"IQ\": \"Irak\",
        \"IR\": \"İran\",
        \"IS\": \"İzlanda\",
        \"IT\": \"İtalya\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Ürdün\",
        \"JP\": \"Japonya\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kırgızistan\",
        \"KH\": \"Kamboçya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorlar\",
        \"KN\": \"Saint Kitts ve Nevis\",
        \"KP\": \"Kuzey Kore\",
        \"KR\": \"Güney Kore\",
        \"KW\": \"Kuveyt\",
        \"KY\": \"Cayman Adaları\",
        \"KZ\": \"Kazakistan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lübnan\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberya\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litvanya\",
        \"LU\": \"Lüksemburg\",
        \"LV\": \"Letonya\",
        \"LY\": \"Libya\",
        \"MA\": \"Fas\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"ME\": \"Karadağ\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshall Adaları\",
        \"MK\": \"Kuzey Makedonya\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Moğolistan\",
        \"MO\": \"Çin Makao ÖİB\",
        \"MP\": \"Kuzey Mariana Adaları\",
        \"MQ\": \"Martinik\",
        \"MR\": \"Moritanya\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldivler\",
        \"MW\": \"Malavi\",
        \"MX\": \"Meksika\",
        \"MY\": \"Malezya\",
        \"MZ\": \"Mozambik\",
        \"NA\": \"Namibya\",
        \"NC\": \"Yeni Kaledonya\",
        \"NE\": \"Nijer\",
        \"NF\": \"Norfolk Adası\",
        \"NG\": \"Nijerya\",
        \"NI\": \"Nikaragua\",
        \"NL\": \"Hollanda\",
        \"NO\": \"Norveç\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Yeni Zelanda\",
        \"OM\": \"Umman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Fransız Polinezyası\",
        \"PG\": \"Papua Yeni Gine\",
        \"PH\": \"Filipinler\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polonya\",
        \"PM\": \"Saint Pierre ve Miquelon\",
        \"PN\": \"Pitcairn Adaları\",
        \"PR\": \"Porto Riko\",
        \"PS\": \"Filistin Bölgeleri\",
        \"PT\": \"Portekiz\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Katar\",
        \"RE\": \"Reunion\",
        \"RO\": \"Romanya\",
        \"RS\": \"Sırbistan\",
        \"RU\": \"Rusya\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Suudi Arabistan\",
        \"SB\": \"Solomon Adaları\",
        \"SC\": \"Seyşeller\",
        \"SD\": \"Sudan\",
        \"SE\": \"İsveç\",
        \"SG\": \"Singapur\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenya\",
        \"SJ\": \"Svalbard ve Jan Mayen\",
        \"SK\": \"Slovakya\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somali\",
        \"SR\": \"Surinam\",
        \"SS\": \"Güney Sudan\",
        \"ST\": \"Sao Tome ve Principe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Suriye\",
        \"SZ\": \"Esvatini\",
        \"TC\": \"Turks ve Caicos Adaları\",
        \"TD\": \"Çad\",
        \"TF\": \"Fransız Güney Toprakları\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayland\",
        \"TJ\": \"Tacikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Türkmenistan\",
        \"TN\": \"Tunus\",
        \"TO\": \"Tonga\",
        \"TR\": \"Türkiye\",
        \"TT\": \"Trinidad ve Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayvan\",
        \"TZ\": \"Tanzanya\",
        \"UA\": \"Ukrayna\",
        \"UG\": \"Uganda\",
        \"UM\": \"ABD Küçük Harici Adaları\",
        \"US\": \"Amerika Birleşik Devletleri\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Özbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent ve Grenadinler\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Britanya Virjin Adaları\",
        \"VI\": \"ABD Virjin Adaları\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ve Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Güney Afrika\",
        \"ZM\": \"Zambiya\",
        \"ZW\": \"Zimbabve\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/tr.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/tr.json");
    }
}