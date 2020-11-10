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

/* vendor/symfony/intl/Resources/data/regions/nd.json */
class __TwigTemplate_b2b2f6b3f2e218f567a98ad8bebee05a9661f9eb15b2e73a029194b51a49b40f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/nd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/nd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andora\",
        \"AE\": \"United Arab Emirates\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua le Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AR\": \"Ajentina\",
        \"AS\": \"Samoa ye Amelika\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Arubha\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bhosnia le Herzegovina\",
        \"BB\": \"Bhabhadosi\",
        \"BD\": \"Bhangiladeshi\",
        \"BE\": \"Bhelgium\",
        \"BF\": \"Bhukina Faso\",
        \"BG\": \"Bhulgariya\",
        \"BH\": \"Bhahareni\",
        \"BI\": \"Bhurundi\",
        \"BJ\": \"Bhenini\",
        \"BM\": \"Bhemuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bholiviya\",
        \"BR\": \"Brazili\",
        \"BS\": \"Bhahamas\",
        \"BT\": \"Bhutani\",
        \"BW\": \"Botswana\",
        \"BY\": \"Bhelarusi\",
        \"BZ\": \"Bhelize\",
        \"CA\": \"Khanada\",
        \"CD\": \"Democratic Republic of the Congo\",
        \"CF\": \"Central African Republic\",
        \"CG\": \"Khongo\",
        \"CH\": \"Switzerland\",
        \"CI\": \"Ivory Coast\",
        \"CK\": \"Cook Islands\",
        \"CL\": \"Chile\",
        \"CM\": \"Khameruni\",
        \"CN\": \"China\",
        \"CO\": \"Kholombiya\",
        \"CR\": \"Khosta Rikha\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cape Verde Islands\",
        \"CY\": \"Cyprus\",
        \"CZ\": \"Czech Republic\",
        \"DE\": \"Germany\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Denmakhi\",
        \"DM\": \"Dominikha\",
        \"DO\": \"Dominican Republic\",
        \"DZ\": \"Aljeriya\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Egypt\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spain\",
        \"ET\": \"Ethiopia\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falkland Islands\",
        \"FM\": \"Micronesia\",
        \"FR\": \"Furansi\",
        \"GA\": \"Gabhoni\",
        \"GB\": \"United Kingdom\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Gwiyana ye Furansi\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Equatorial Guinea\",
        \"GR\": \"Greece\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croatia\",
        \"HT\": \"Hayiti\",
        \"HU\": \"Hungary\",
        \"ID\": \"Indonesiya\",
        \"IE\": \"Ireland\",
        \"IL\": \"Isuraeli\",
        \"IN\": \"Indiya\",
        \"IO\": \"British Indian Ocean Territory\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Iran\",
        \"IS\": \"Iceland\",
        \"IT\": \"Itali\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jodani\",
        \"JP\": \"Japan\",
        \"KE\": \"Khenya\",
        \"KG\": \"Kyrgyzstan\",
        \"KH\": \"Cambodia\",
        \"KI\": \"Khiribati\",
        \"KM\": \"Khomoro\",
        \"KN\": \"Saint Kitts and Nevis\",
        \"KP\": \"North Korea\",
        \"KR\": \"South Korea\",
        \"KW\": \"Khuweiti\",
        \"KY\": \"Cayman Islands\",
        \"KZ\": \"Kazakhstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lebhanoni\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libheriya\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Lithuania\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libhiya\",
        \"MA\": \"Morokho\",
        \"MC\": \"Monakho\",
        \"MD\": \"Moldova\",
        \"MG\": \"Madagaska\",
        \"MH\": \"Marshall Islands\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar\",
        \"MN\": \"Mongolia\",
        \"MP\": \"Northern Mariana Islands\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldives\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksikho\",
        \"MY\": \"Malezhiya\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibhiya\",
        \"NC\": \"New Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolk Island\",
        \"NG\": \"Nigeriya\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Netherlands\",
        \"NO\": \"Noweyi\",
        \"NP\": \"Nephali\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Omani\",
        \"PA\": \"Panama\",
        \"PE\": \"Pheru\",
        \"PF\": \"Pholinesiya ye Fulansi\",
        \"PG\": \"Papua New Guinea\",
        \"PH\": \"Philippines\",
        \"PK\": \"Phakistani\",
        \"PL\": \"Pholandi\",
        \"PM\": \"Saint Pierre and Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestinian West Bank and Gaza\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Kathari\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RU\": \"Rashiya\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Saudi Arabia\",
        \"SB\": \"Solomon Islands\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudani\",
        \"SE\": \"Sweden\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somaliya\",
        \"SR\": \"Suriname\",
        \"ST\": \"São Tomé and Príncipe\",
        \"SV\": \"El Salvador\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Turks and Caicos Islands\",
        \"TD\": \"Chadi\",
        \"TG\": \"Thogo\",
        \"TH\": \"Thayilandi\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Thokelawu\",
        \"TL\": \"East Timor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisiya\",
        \"TO\": \"Thonga\",
        \"TR\": \"Thekhi\",
        \"TT\": \"Trinidad le Tobago\",
        \"TV\": \"Thuvalu\",
        \"TW\": \"Thayiwani\",
        \"TZ\": \"Tanzaniya\",
        \"UA\": \"Yukreini\",
        \"UG\": \"Uganda\",
        \"US\": \"Amelika\",
        \"UY\": \"Yurugwai\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatican State\",
        \"VC\": \"Saint Vincent and the Grenadines\",
        \"VE\": \"Venezuela\",
        \"VG\": \"British Virgin Islands\",
        \"VI\": \"U.S. Virgin Islands\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vhanuatu\",
        \"WF\": \"Wallis and Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Mzansi ye Afrika\",
        \"ZM\": \"Zambiya\",
        \"ZW\": \"Zimbabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/nd.json";
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
        \"AE\": \"United Arab Emirates\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua le Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AR\": \"Ajentina\",
        \"AS\": \"Samoa ye Amelika\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Arubha\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bhosnia le Herzegovina\",
        \"BB\": \"Bhabhadosi\",
        \"BD\": \"Bhangiladeshi\",
        \"BE\": \"Bhelgium\",
        \"BF\": \"Bhukina Faso\",
        \"BG\": \"Bhulgariya\",
        \"BH\": \"Bhahareni\",
        \"BI\": \"Bhurundi\",
        \"BJ\": \"Bhenini\",
        \"BM\": \"Bhemuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bholiviya\",
        \"BR\": \"Brazili\",
        \"BS\": \"Bhahamas\",
        \"BT\": \"Bhutani\",
        \"BW\": \"Botswana\",
        \"BY\": \"Bhelarusi\",
        \"BZ\": \"Bhelize\",
        \"CA\": \"Khanada\",
        \"CD\": \"Democratic Republic of the Congo\",
        \"CF\": \"Central African Republic\",
        \"CG\": \"Khongo\",
        \"CH\": \"Switzerland\",
        \"CI\": \"Ivory Coast\",
        \"CK\": \"Cook Islands\",
        \"CL\": \"Chile\",
        \"CM\": \"Khameruni\",
        \"CN\": \"China\",
        \"CO\": \"Kholombiya\",
        \"CR\": \"Khosta Rikha\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cape Verde Islands\",
        \"CY\": \"Cyprus\",
        \"CZ\": \"Czech Republic\",
        \"DE\": \"Germany\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Denmakhi\",
        \"DM\": \"Dominikha\",
        \"DO\": \"Dominican Republic\",
        \"DZ\": \"Aljeriya\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Egypt\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spain\",
        \"ET\": \"Ethiopia\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falkland Islands\",
        \"FM\": \"Micronesia\",
        \"FR\": \"Furansi\",
        \"GA\": \"Gabhoni\",
        \"GB\": \"United Kingdom\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Gwiyana ye Furansi\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambiya\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Equatorial Guinea\",
        \"GR\": \"Greece\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croatia\",
        \"HT\": \"Hayiti\",
        \"HU\": \"Hungary\",
        \"ID\": \"Indonesiya\",
        \"IE\": \"Ireland\",
        \"IL\": \"Isuraeli\",
        \"IN\": \"Indiya\",
        \"IO\": \"British Indian Ocean Territory\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Iran\",
        \"IS\": \"Iceland\",
        \"IT\": \"Itali\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jodani\",
        \"JP\": \"Japan\",
        \"KE\": \"Khenya\",
        \"KG\": \"Kyrgyzstan\",
        \"KH\": \"Cambodia\",
        \"KI\": \"Khiribati\",
        \"KM\": \"Khomoro\",
        \"KN\": \"Saint Kitts and Nevis\",
        \"KP\": \"North Korea\",
        \"KR\": \"South Korea\",
        \"KW\": \"Khuweiti\",
        \"KY\": \"Cayman Islands\",
        \"KZ\": \"Kazakhstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Lebhanoni\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libheriya\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Lithuania\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libhiya\",
        \"MA\": \"Morokho\",
        \"MC\": \"Monakho\",
        \"MD\": \"Moldova\",
        \"MG\": \"Madagaska\",
        \"MH\": \"Marshall Islands\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar\",
        \"MN\": \"Mongolia\",
        \"MP\": \"Northern Mariana Islands\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldives\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksikho\",
        \"MY\": \"Malezhiya\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibhiya\",
        \"NC\": \"New Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolk Island\",
        \"NG\": \"Nigeriya\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Netherlands\",
        \"NO\": \"Noweyi\",
        \"NP\": \"Nephali\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Omani\",
        \"PA\": \"Panama\",
        \"PE\": \"Pheru\",
        \"PF\": \"Pholinesiya ye Fulansi\",
        \"PG\": \"Papua New Guinea\",
        \"PH\": \"Philippines\",
        \"PK\": \"Phakistani\",
        \"PL\": \"Pholandi\",
        \"PM\": \"Saint Pierre and Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestinian West Bank and Gaza\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Kathari\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RU\": \"Rashiya\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Saudi Arabia\",
        \"SB\": \"Solomon Islands\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudani\",
        \"SE\": \"Sweden\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somaliya\",
        \"SR\": \"Suriname\",
        \"ST\": \"São Tomé and Príncipe\",
        \"SV\": \"El Salvador\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Turks and Caicos Islands\",
        \"TD\": \"Chadi\",
        \"TG\": \"Thogo\",
        \"TH\": \"Thayilandi\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Thokelawu\",
        \"TL\": \"East Timor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisiya\",
        \"TO\": \"Thonga\",
        \"TR\": \"Thekhi\",
        \"TT\": \"Trinidad le Tobago\",
        \"TV\": \"Thuvalu\",
        \"TW\": \"Thayiwani\",
        \"TZ\": \"Tanzaniya\",
        \"UA\": \"Yukreini\",
        \"UG\": \"Uganda\",
        \"US\": \"Amelika\",
        \"UY\": \"Yurugwai\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatican State\",
        \"VC\": \"Saint Vincent and the Grenadines\",
        \"VE\": \"Venezuela\",
        \"VG\": \"British Virgin Islands\",
        \"VI\": \"U.S. Virgin Islands\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vhanuatu\",
        \"WF\": \"Wallis and Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Mzansi ye Afrika\",
        \"ZM\": \"Zambiya\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/nd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/nd.json");
    }
}
