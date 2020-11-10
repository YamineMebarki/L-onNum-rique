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

/* vendor/symfony/intl/Resources/data/regions/fi.json */
class __TwigTemplate_7447444708b91bce44c0ff2aa5632d00b26378c418c80f706882cfa826cf0977 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fi.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Arabiemiirikunnat\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ja Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktis\",
        \"AR\": \"Argentiina\",
        \"AS\": \"Amerikan Samoa\",
        \"AT\": \"Itävalta\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ahvenanmaa\",
        \"AZ\": \"Azerbaidžan\",
        \"BA\": \"Bosnia ja Hertsegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint-Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Karibian Alankomaat\",
        \"BR\": \"Brasilia\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvet’nsaari\",
        \"BW\": \"Botswana\",
        \"BY\": \"Valko-Venäjä\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kookossaaret (Keelingsaaret)\",
        \"CD\": \"Kongon demokraattinen tasavalta\",
        \"CF\": \"Keski-Afrikan tasavalta\",
        \"CG\": \"Kongon tasavalta\",
        \"CH\": \"Sveitsi\",
        \"CI\": \"Norsunluurannikko\",
        \"CK\": \"Cookinsaaret\",
        \"CL\": \"Chile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Kiina\",
        \"CO\": \"Kolumbia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Kap Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Joulusaari\",
        \"CY\": \"Kypros\",
        \"CZ\": \"Tšekki\",
        \"DE\": \"Saksa\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Tanska\",
        \"DM\": \"Dominica\",
        \"DO\": \"Dominikaaninen tasavalta\",
        \"DZ\": \"Algeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Viro\",
        \"EG\": \"Egypti\",
        \"EH\": \"Länsi-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Espanja\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Suomi\",
        \"FJ\": \"Fidži\",
        \"FK\": \"Falklandinsaaret\",
        \"FM\": \"Mikronesian liittovaltio\",
        \"FO\": \"Färsaaret\",
        \"FR\": \"Ranska\",
        \"GA\": \"Gabon\",
        \"GB\": \"Iso-Britannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Ranskan Guayana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grönlanti\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Päiväntasaajan Guinea\",
        \"GR\": \"Kreikka\",
        \"GS\": \"Etelä-Georgia ja Eteläiset Sandwichsaaret\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkong – Kiinan e.h.a.\",
        \"HM\": \"Heard ja McDonaldinsaaret\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Unkari\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlanti\",
        \"IL\": \"Israel\",
        \"IM\": \"Mansaari\",
        \"IN\": \"Intia\",
        \"IO\": \"Brittiläinen Intian valtameren alue\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Islanti\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Jordania\",
        \"JP\": \"Japani\",
        \"KE\": \"Kenia\",
        \"KG\": \"Kirgisia\",
        \"KH\": \"Kambodža\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorit\",
        \"KN\": \"Saint Kitts ja Nevis\",
        \"KP\": \"Pohjois-Korea\",
        \"KR\": \"Etelä-Korea\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Caymansaaret\",
        \"KZ\": \"Kazakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Libanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Liettua\",
        \"LU\": \"Luxemburg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Marokko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshallinsaaret\",
        \"MK\": \"Pohjois-Makedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao – Kiinan e.h.a.\",
        \"MP\": \"Pohjois-Mariaanit\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Malediivit\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malesia\",
        \"MZ\": \"Mosambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Uusi-Kaledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolkinsaari\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Alankomaat\",
        \"NO\": \"Norja\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Uusi-Seelanti\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Ranskan Polynesia\",
        \"PG\": \"Papua-Uusi-Guinea\",
        \"PH\": \"Filippiinit\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Puola\",
        \"PM\": \"Saint-Pierre ja Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestiinalaisalueet\",
        \"PT\": \"Portugali\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Venäjä\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Saudi-Arabia\",
        \"SB\": \"Salomonsaaret\",
        \"SC\": \"Seychellit\",
        \"SD\": \"Sudan\",
        \"SE\": \"Ruotsi\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Huippuvuoret ja Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Etelä-Sudan\",
        \"ST\": \"São Tomé ja Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syyria\",
        \"SZ\": \"Swazimaa\",
        \"TC\": \"Turks- ja Caicossaaret\",
        \"TD\": \"Tšad\",
        \"TF\": \"Ranskan eteläiset alueet\",
        \"TG\": \"Togo\",
        \"TH\": \"Thaimaa\",
        \"TJ\": \"Tadžikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Itä-Timor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turkki\",
        \"TT\": \"Trinidad ja Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tansania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Yhdysvaltain erillissaaret\",
        \"US\": \"Yhdysvallat\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatikaani\",
        \"VC\": \"Saint Vincent ja Grenadiinit\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Brittiläiset Neitsytsaaret\",
        \"VI\": \"Yhdysvaltain Neitsytsaaret\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ja Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Etelä-Afrikka\",
        \"ZM\": \"Sambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/fi.json";
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
        \"AE\": \"Arabiemiirikunnat\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ja Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktis\",
        \"AR\": \"Argentiina\",
        \"AS\": \"Amerikan Samoa\",
        \"AT\": \"Itävalta\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ahvenanmaa\",
        \"AZ\": \"Azerbaidžan\",
        \"BA\": \"Bosnia ja Hertsegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint-Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Karibian Alankomaat\",
        \"BR\": \"Brasilia\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvet’nsaari\",
        \"BW\": \"Botswana\",
        \"BY\": \"Valko-Venäjä\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kookossaaret (Keelingsaaret)\",
        \"CD\": \"Kongon demokraattinen tasavalta\",
        \"CF\": \"Keski-Afrikan tasavalta\",
        \"CG\": \"Kongon tasavalta\",
        \"CH\": \"Sveitsi\",
        \"CI\": \"Norsunluurannikko\",
        \"CK\": \"Cookinsaaret\",
        \"CL\": \"Chile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Kiina\",
        \"CO\": \"Kolumbia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Kap Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Joulusaari\",
        \"CY\": \"Kypros\",
        \"CZ\": \"Tšekki\",
        \"DE\": \"Saksa\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Tanska\",
        \"DM\": \"Dominica\",
        \"DO\": \"Dominikaaninen tasavalta\",
        \"DZ\": \"Algeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Viro\",
        \"EG\": \"Egypti\",
        \"EH\": \"Länsi-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Espanja\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Suomi\",
        \"FJ\": \"Fidži\",
        \"FK\": \"Falklandinsaaret\",
        \"FM\": \"Mikronesian liittovaltio\",
        \"FO\": \"Färsaaret\",
        \"FR\": \"Ranska\",
        \"GA\": \"Gabon\",
        \"GB\": \"Iso-Britannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Ranskan Guayana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grönlanti\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Päiväntasaajan Guinea\",
        \"GR\": \"Kreikka\",
        \"GS\": \"Etelä-Georgia ja Eteläiset Sandwichsaaret\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkong – Kiinan e.h.a.\",
        \"HM\": \"Heard ja McDonaldinsaaret\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Unkari\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlanti\",
        \"IL\": \"Israel\",
        \"IM\": \"Mansaari\",
        \"IN\": \"Intia\",
        \"IO\": \"Brittiläinen Intian valtameren alue\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Islanti\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Jordania\",
        \"JP\": \"Japani\",
        \"KE\": \"Kenia\",
        \"KG\": \"Kirgisia\",
        \"KH\": \"Kambodža\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorit\",
        \"KN\": \"Saint Kitts ja Nevis\",
        \"KP\": \"Pohjois-Korea\",
        \"KR\": \"Etelä-Korea\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Caymansaaret\",
        \"KZ\": \"Kazakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Libanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Liettua\",
        \"LU\": \"Luxemburg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Marokko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshallinsaaret\",
        \"MK\": \"Pohjois-Makedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao – Kiinan e.h.a.\",
        \"MP\": \"Pohjois-Mariaanit\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Malediivit\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malesia\",
        \"MZ\": \"Mosambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Uusi-Kaledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolkinsaari\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Alankomaat\",
        \"NO\": \"Norja\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Uusi-Seelanti\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Ranskan Polynesia\",
        \"PG\": \"Papua-Uusi-Guinea\",
        \"PH\": \"Filippiinit\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Puola\",
        \"PM\": \"Saint-Pierre ja Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestiinalaisalueet\",
        \"PT\": \"Portugali\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Venäjä\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Saudi-Arabia\",
        \"SB\": \"Salomonsaaret\",
        \"SC\": \"Seychellit\",
        \"SD\": \"Sudan\",
        \"SE\": \"Ruotsi\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Huippuvuoret ja Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Etelä-Sudan\",
        \"ST\": \"São Tomé ja Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syyria\",
        \"SZ\": \"Swazimaa\",
        \"TC\": \"Turks- ja Caicossaaret\",
        \"TD\": \"Tšad\",
        \"TF\": \"Ranskan eteläiset alueet\",
        \"TG\": \"Togo\",
        \"TH\": \"Thaimaa\",
        \"TJ\": \"Tadžikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Itä-Timor\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turkki\",
        \"TT\": \"Trinidad ja Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tansania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Yhdysvaltain erillissaaret\",
        \"US\": \"Yhdysvallat\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Vatikaani\",
        \"VC\": \"Saint Vincent ja Grenadiinit\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Brittiläiset Neitsytsaaret\",
        \"VI\": \"Yhdysvaltain Neitsytsaaret\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ja Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Etelä-Afrikka\",
        \"ZM\": \"Sambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/fi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/fi.json");
    }
}
