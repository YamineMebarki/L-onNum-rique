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

/* vendor/symfony/intl/Resources/data/regions/id.json */
class __TwigTemplate_18cbc8f890ec3864c4ff25d623fa55c2875ea6e4ffbb47b1d21df553190f9be1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/id.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/id.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Uni Emirat Arab\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua dan Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Amerika\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Kepulauan Aland\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bosnia dan Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Belanda Karibia\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Pulau Bouvet\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kepulauan Cocos (Keeling)\",
        \"CD\": \"Kongo - Kinshasa\",
        \"CF\": \"Republik Afrika Tengah\",
        \"CG\": \"Kongo - Brazzaville\",
        \"CH\": \"Swiss\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Kepulauan Cook\",
        \"CL\": \"Cile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Tiongkok\",
        \"CO\": \"Kolombia\",
        \"CR\": \"Kosta Rika\",
        \"CU\": \"Kuba\",
        \"CV\": \"Tanjung Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Pulau Natal\",
        \"CY\": \"Siprus\",
        \"CZ\": \"Ceko\",
        \"DE\": \"Jerman\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Denmark\",
        \"DM\": \"Dominika\",
        \"DO\": \"Republik Dominika\",
        \"DZ\": \"Aljazair\",
        \"EC\": \"Ekuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Mesir\",
        \"EH\": \"Sahara Barat\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spanyol\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Finlandia\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Kepulauan Falkland\",
        \"FM\": \"Mikronesia\",
        \"FO\": \"Kepulauan Faroe\",
        \"FR\": \"Prancis\",
        \"GA\": \"Gabon\",
        \"GB\": \"Inggris Raya\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guyana Prancis\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grinlandia\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Guinea Ekuatorial\",
        \"GR\": \"Yunani\",
        \"GS\": \"Georgia Selatan & Kep. Sandwich Selatan\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hong Kong DAK Tiongkok\",
        \"HM\": \"Pulau Heard dan Kepulauan McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroasia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungaria\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlandia\",
        \"IL\": \"Israel\",
        \"IM\": \"Pulau Man\",
        \"IN\": \"India\",
        \"IO\": \"Wilayah Inggris di Samudra Hindia\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Islandia\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Yordania\",
        \"JP\": \"Jepang\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgistan\",
        \"KH\": \"Kamboja\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoro\",
        \"KN\": \"Saint Kitts dan Nevis\",
        \"KP\": \"Korea Utara\",
        \"KR\": \"Korea Selatan\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Kepulauan Cayman\",
        \"KZ\": \"Kazakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lebanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Lituania\",
        \"LU\": \"Luksemburg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libia\",
        \"MA\": \"Maroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Kepulauan Marshall\",
        \"MK\": \"Makedonia Utara\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Makau DAK Tiongkok\",
        \"MP\": \"Kepulauan Mariana Utara\",
        \"MQ\": \"Martinik\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maladewa\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mozambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Kaledonia Baru\",
        \"NE\": \"Niger\",
        \"NF\": \"Kepulauan Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nikaragua\",
        \"NL\": \"Belanda\",
        \"NO\": \"Norwegia\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Selandia Baru\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesia Prancis\",
        \"PG\": \"Papua Nugini\",
        \"PH\": \"Filipina\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polandia\",
        \"PM\": \"Saint Pierre dan Miquelon\",
        \"PN\": \"Kepulauan Pitcairn\",
        \"PR\": \"Puerto Riko\",
        \"PS\": \"Wilayah Palestina\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rumania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Rusia\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Arab Saudi\",
        \"SB\": \"Kepulauan Solomon\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudan\",
        \"SE\": \"Swedia\",
        \"SG\": \"Singapura\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Kepulauan Svalbard dan Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Sudan Selatan\",
        \"ST\": \"Sao Tome dan Principe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Suriah\",
        \"SZ\": \"eSwatini\",
        \"TC\": \"Kepulauan Turks dan Caicos\",
        \"TD\": \"Cad\",
        \"TF\": \"Wilayah Selatan Perancis\",
        \"TG\": \"Togo\",
        \"TH\": \"Thailand\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor Leste\",
        \"TM\": \"Turkimenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turki\",
        \"TT\": \"Trinidad dan Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Kepulauan Terluar A.S.\",
        \"US\": \"Amerika Serikat\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent dan Grenadine\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Kepulauan Virgin Britania Raya\",
        \"VI\": \"Kepulauan Virgin Amerika Serikat\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Kepulauan Wallis dan Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afrika Selatan\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/id.json";
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
        \"AE\": \"Uni Emirat Arab\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua dan Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Amerika\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Kepulauan Aland\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bosnia dan Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Belanda Karibia\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Pulau Bouvet\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kepulauan Cocos (Keeling)\",
        \"CD\": \"Kongo - Kinshasa\",
        \"CF\": \"Republik Afrika Tengah\",
        \"CG\": \"Kongo - Brazzaville\",
        \"CH\": \"Swiss\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Kepulauan Cook\",
        \"CL\": \"Cile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Tiongkok\",
        \"CO\": \"Kolombia\",
        \"CR\": \"Kosta Rika\",
        \"CU\": \"Kuba\",
        \"CV\": \"Tanjung Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Pulau Natal\",
        \"CY\": \"Siprus\",
        \"CZ\": \"Ceko\",
        \"DE\": \"Jerman\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Denmark\",
        \"DM\": \"Dominika\",
        \"DO\": \"Republik Dominika\",
        \"DZ\": \"Aljazair\",
        \"EC\": \"Ekuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Mesir\",
        \"EH\": \"Sahara Barat\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spanyol\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Finlandia\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Kepulauan Falkland\",
        \"FM\": \"Mikronesia\",
        \"FO\": \"Kepulauan Faroe\",
        \"FR\": \"Prancis\",
        \"GA\": \"Gabon\",
        \"GB\": \"Inggris Raya\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guyana Prancis\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grinlandia\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Guinea Ekuatorial\",
        \"GR\": \"Yunani\",
        \"GS\": \"Georgia Selatan & Kep. Sandwich Selatan\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hong Kong DAK Tiongkok\",
        \"HM\": \"Pulau Heard dan Kepulauan McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroasia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungaria\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlandia\",
        \"IL\": \"Israel\",
        \"IM\": \"Pulau Man\",
        \"IN\": \"India\",
        \"IO\": \"Wilayah Inggris di Samudra Hindia\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Islandia\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Yordania\",
        \"JP\": \"Jepang\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgistan\",
        \"KH\": \"Kamboja\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoro\",
        \"KN\": \"Saint Kitts dan Nevis\",
        \"KP\": \"Korea Utara\",
        \"KR\": \"Korea Selatan\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Kepulauan Cayman\",
        \"KZ\": \"Kazakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lebanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Lituania\",
        \"LU\": \"Luksemburg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libia\",
        \"MA\": \"Maroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Kepulauan Marshall\",
        \"MK\": \"Makedonia Utara\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Makau DAK Tiongkok\",
        \"MP\": \"Kepulauan Mariana Utara\",
        \"MQ\": \"Martinik\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maladewa\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mozambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Kaledonia Baru\",
        \"NE\": \"Niger\",
        \"NF\": \"Kepulauan Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nikaragua\",
        \"NL\": \"Belanda\",
        \"NO\": \"Norwegia\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Selandia Baru\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesia Prancis\",
        \"PG\": \"Papua Nugini\",
        \"PH\": \"Filipina\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polandia\",
        \"PM\": \"Saint Pierre dan Miquelon\",
        \"PN\": \"Kepulauan Pitcairn\",
        \"PR\": \"Puerto Riko\",
        \"PS\": \"Wilayah Palestina\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rumania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Rusia\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Arab Saudi\",
        \"SB\": \"Kepulauan Solomon\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudan\",
        \"SE\": \"Swedia\",
        \"SG\": \"Singapura\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Kepulauan Svalbard dan Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Sudan Selatan\",
        \"ST\": \"Sao Tome dan Principe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Suriah\",
        \"SZ\": \"eSwatini\",
        \"TC\": \"Kepulauan Turks dan Caicos\",
        \"TD\": \"Cad\",
        \"TF\": \"Wilayah Selatan Perancis\",
        \"TG\": \"Togo\",
        \"TH\": \"Thailand\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor Leste\",
        \"TM\": \"Turkimenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turki\",
        \"TT\": \"Trinidad dan Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Kepulauan Terluar A.S.\",
        \"US\": \"Amerika Serikat\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent dan Grenadine\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Kepulauan Virgin Britania Raya\",
        \"VI\": \"Kepulauan Virgin Amerika Serikat\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Kepulauan Wallis dan Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yaman\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afrika Selatan\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/id.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/id.json");
    }
}
