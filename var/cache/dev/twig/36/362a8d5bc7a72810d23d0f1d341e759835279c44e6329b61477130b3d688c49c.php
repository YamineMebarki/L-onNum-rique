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

/* vendor/symfony/intl/Resources/data/regions/et.json */
class __TwigTemplate_0499b1e0edc08fc3d7cf2ee900ae27df9c947f4815e8fd0da6abbafc55d836cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/et.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/et.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Araabia Ühendemiraadid\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ja Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albaania\",
        \"AM\": \"Armeenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Argentina\",
        \"AS\": \"Ameerika Samoa\",
        \"AT\": \"Austria\",
        \"AU\": \"Austraalia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ahvenamaa\",
        \"AZ\": \"Aserbaidžaan\",
        \"BA\": \"Bosnia ja Hertsegoviina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaaria\",
        \"BH\": \"Bahrein\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint-Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Boliivia\",
        \"BQ\": \"Hollandi Kariibi mere saared\",
        \"BR\": \"Brasiilia\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvet’ saar\",
        \"BW\": \"Botswana\",
        \"BY\": \"Valgevene\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kookossaared\",
        \"CD\": \"Kongo DV\",
        \"CF\": \"Kesk-Aafrika Vabariik\",
        \"CG\": \"Kongo Vabariik\",
        \"CH\": \"Šveits\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Cooki saared\",
        \"CL\": \"Tšiili\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Hiina\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Roheneemesaared\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Jõulusaar\",
        \"CY\": \"Küpros\",
        \"CZ\": \"Tšehhi\",
        \"DE\": \"Saksamaa\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Taani\",
        \"DM\": \"Dominica\",
        \"DO\": \"Dominikaani Vabariik\",
        \"DZ\": \"Alžeeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Eesti\",
        \"EG\": \"Egiptus\",
        \"EH\": \"Lääne-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Hispaania\",
        \"ET\": \"Etioopia\",
        \"FI\": \"Soome\",
        \"FJ\": \"Fidži\",
        \"FK\": \"Falklandi saared\",
        \"FM\": \"Mikroneesia\",
        \"FO\": \"Fääri saared\",
        \"FR\": \"Prantsusmaa\",
        \"GA\": \"Gabon\",
        \"GB\": \"Suurbritannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Gruusia\",
        \"GF\": \"Prantsuse Guajaana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Gröönimaa\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvatoriaal-Guinea\",
        \"GR\": \"Kreeka\",
        \"GS\": \"Lõuna-Georgia ja Lõuna-Sandwichi saared\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkongi erihalduspiirkond\",
        \"HM\": \"Heardi ja McDonaldi saared\",
        \"HN\": \"Honduras\",
        \"HR\": \"Horvaatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Ungari\",
        \"ID\": \"Indoneesia\",
        \"IE\": \"Iirimaa\",
        \"IL\": \"Iisrael\",
        \"IM\": \"Mani saar\",
        \"IN\": \"India\",
        \"IO\": \"Briti India ookeani ala\",
        \"IQ\": \"Iraak\",
        \"IR\": \"Iraan\",
        \"IS\": \"Island\",
        \"IT\": \"Itaalia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordaania\",
        \"JP\": \"Jaapan\",
        \"KE\": \"Keenia\",
        \"KG\": \"Kõrgõzstan\",
        \"KH\": \"Kambodža\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoorid\",
        \"KN\": \"Saint Kitts ja Nevis\",
        \"KP\": \"Põhja-Korea\",
        \"KR\": \"Lõuna-Korea\",
        \"KW\": \"Kuveit\",
        \"KY\": \"Kaimanisaared\",
        \"KZ\": \"Kasahstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Liibanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libeeria\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Leedu\",
        \"LU\": \"Luksemburg\",
        \"LV\": \"Läti\",
        \"LY\": \"Liibüa\",
        \"MA\": \"Maroko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalli Saared\",
        \"MK\": \"Põhja-Makedoonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Birma)\",
        \"MN\": \"Mongoolia\",
        \"MO\": \"Macau erihalduspiirkond\",
        \"MP\": \"Põhja-Mariaanid\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritaania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldiivid\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mehhiko\",
        \"MY\": \"Malaisia\",
        \"MZ\": \"Mosambiik\",
        \"NA\": \"Namiibia\",
        \"NC\": \"Uus-Kaledoonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolk\",
        \"NG\": \"Nigeeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Holland\",
        \"NO\": \"Norra\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Uus-Meremaa\",
        \"OM\": \"Omaan\",
        \"PA\": \"Panama\",
        \"PE\": \"Peruu\",
        \"PF\": \"Prantsuse Polüneesia\",
        \"PG\": \"Paapua Uus-Guinea\",
        \"PH\": \"Filipiinid\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Poola\",
        \"PM\": \"Saint-Pierre ja Miquelon\",
        \"PN\": \"Pitcairni saared\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestiina alad\",
        \"PT\": \"Portugal\",
        \"PW\": \"Belau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Katar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rumeenia\",
        \"RS\": \"Serbia\",
        \"RU\": \"Venemaa\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi Araabia\",
        \"SB\": \"Saalomoni Saared\",
        \"SC\": \"Seišellid\",
        \"SD\": \"Sudaan\",
        \"SE\": \"Rootsi\",
        \"SG\": \"Singapur\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Sloveenia\",
        \"SJ\": \"Svalbard ja Jan Mayen\",
        \"SK\": \"Slovakkia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somaalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Lõuna-Sudaan\",
        \"ST\": \"São Tomé ja Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Süüria\",
        \"SZ\": \"Svaasimaa\",
        \"TC\": \"Turks ja Caicos\",
        \"TD\": \"Tšaad\",
        \"TF\": \"Prantsuse Lõunaalad\",
        \"TG\": \"Togo\",
        \"TH\": \"Tai\",
        \"TJ\": \"Tadžikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Ida-Timor\",
        \"TM\": \"Türkmenistan\",
        \"TN\": \"Tuneesia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Türgi\",
        \"TT\": \"Trinidad ja Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tansaania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Ühendriikide hajasaared\",
        \"US\": \"Ameerika Ühendriigid\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Usbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent ja Grenadiinid\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Briti Neitsisaared\",
        \"VI\": \"USA Neitsisaared\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ja Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jeemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Lõuna-Aafrika Vabariik\",
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
        return "vendor/symfony/intl/Resources/data/regions/et.json";
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
        \"AE\": \"Araabia Ühendemiraadid\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antigua ja Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albaania\",
        \"AM\": \"Armeenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktika\",
        \"AR\": \"Argentina\",
        \"AS\": \"Ameerika Samoa\",
        \"AT\": \"Austria\",
        \"AU\": \"Austraalia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ahvenamaa\",
        \"AZ\": \"Aserbaidžaan\",
        \"BA\": \"Bosnia ja Hertsegoviina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Belgia\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaaria\",
        \"BH\": \"Bahrein\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"Saint-Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Boliivia\",
        \"BQ\": \"Hollandi Kariibi mere saared\",
        \"BR\": \"Brasiilia\",
        \"BS\": \"Bahama\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvet’ saar\",
        \"BW\": \"Botswana\",
        \"BY\": \"Valgevene\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kookossaared\",
        \"CD\": \"Kongo DV\",
        \"CF\": \"Kesk-Aafrika Vabariik\",
        \"CG\": \"Kongo Vabariik\",
        \"CH\": \"Šveits\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Cooki saared\",
        \"CL\": \"Tšiili\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Hiina\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Kuuba\",
        \"CV\": \"Roheneemesaared\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Jõulusaar\",
        \"CY\": \"Küpros\",
        \"CZ\": \"Tšehhi\",
        \"DE\": \"Saksamaa\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Taani\",
        \"DM\": \"Dominica\",
        \"DO\": \"Dominikaani Vabariik\",
        \"DZ\": \"Alžeeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Eesti\",
        \"EG\": \"Egiptus\",
        \"EH\": \"Lääne-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Hispaania\",
        \"ET\": \"Etioopia\",
        \"FI\": \"Soome\",
        \"FJ\": \"Fidži\",
        \"FK\": \"Falklandi saared\",
        \"FM\": \"Mikroneesia\",
        \"FO\": \"Fääri saared\",
        \"FR\": \"Prantsusmaa\",
        \"GA\": \"Gabon\",
        \"GB\": \"Suurbritannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Gruusia\",
        \"GF\": \"Prantsuse Guajaana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Gröönimaa\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvatoriaal-Guinea\",
        \"GR\": \"Kreeka\",
        \"GS\": \"Lõuna-Georgia ja Lõuna-Sandwichi saared\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkongi erihalduspiirkond\",
        \"HM\": \"Heardi ja McDonaldi saared\",
        \"HN\": \"Honduras\",
        \"HR\": \"Horvaatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Ungari\",
        \"ID\": \"Indoneesia\",
        \"IE\": \"Iirimaa\",
        \"IL\": \"Iisrael\",
        \"IM\": \"Mani saar\",
        \"IN\": \"India\",
        \"IO\": \"Briti India ookeani ala\",
        \"IQ\": \"Iraak\",
        \"IR\": \"Iraan\",
        \"IS\": \"Island\",
        \"IT\": \"Itaalia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordaania\",
        \"JP\": \"Jaapan\",
        \"KE\": \"Keenia\",
        \"KG\": \"Kõrgõzstan\",
        \"KH\": \"Kambodža\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoorid\",
        \"KN\": \"Saint Kitts ja Nevis\",
        \"KP\": \"Põhja-Korea\",
        \"KR\": \"Lõuna-Korea\",
        \"KW\": \"Kuveit\",
        \"KY\": \"Kaimanisaared\",
        \"KZ\": \"Kasahstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Liibanon\",
        \"LC\": \"Saint Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libeeria\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Leedu\",
        \"LU\": \"Luksemburg\",
        \"LV\": \"Läti\",
        \"LY\": \"Liibüa\",
        \"MA\": \"Maroko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalli Saared\",
        \"MK\": \"Põhja-Makedoonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Birma)\",
        \"MN\": \"Mongoolia\",
        \"MO\": \"Macau erihalduspiirkond\",
        \"MP\": \"Põhja-Mariaanid\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritaania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldiivid\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mehhiko\",
        \"MY\": \"Malaisia\",
        \"MZ\": \"Mosambiik\",
        \"NA\": \"Namiibia\",
        \"NC\": \"Uus-Kaledoonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolk\",
        \"NG\": \"Nigeeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Holland\",
        \"NO\": \"Norra\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Uus-Meremaa\",
        \"OM\": \"Omaan\",
        \"PA\": \"Panama\",
        \"PE\": \"Peruu\",
        \"PF\": \"Prantsuse Polüneesia\",
        \"PG\": \"Paapua Uus-Guinea\",
        \"PH\": \"Filipiinid\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Poola\",
        \"PM\": \"Saint-Pierre ja Miquelon\",
        \"PN\": \"Pitcairni saared\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestiina alad\",
        \"PT\": \"Portugal\",
        \"PW\": \"Belau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Katar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rumeenia\",
        \"RS\": \"Serbia\",
        \"RU\": \"Venemaa\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi Araabia\",
        \"SB\": \"Saalomoni Saared\",
        \"SC\": \"Seišellid\",
        \"SD\": \"Sudaan\",
        \"SE\": \"Rootsi\",
        \"SG\": \"Singapur\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Sloveenia\",
        \"SJ\": \"Svalbard ja Jan Mayen\",
        \"SK\": \"Slovakkia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somaalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Lõuna-Sudaan\",
        \"ST\": \"São Tomé ja Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Süüria\",
        \"SZ\": \"Svaasimaa\",
        \"TC\": \"Turks ja Caicos\",
        \"TD\": \"Tšaad\",
        \"TF\": \"Prantsuse Lõunaalad\",
        \"TG\": \"Togo\",
        \"TH\": \"Tai\",
        \"TJ\": \"Tadžikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Ida-Timor\",
        \"TM\": \"Türkmenistan\",
        \"TN\": \"Tuneesia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Türgi\",
        \"TT\": \"Trinidad ja Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tansaania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Ühendriikide hajasaared\",
        \"US\": \"Ameerika Ühendriigid\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Usbekistan\",
        \"VA\": \"Vatikan\",
        \"VC\": \"Saint Vincent ja Grenadiinid\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Briti Neitsisaared\",
        \"VI\": \"USA Neitsisaared\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis ja Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jeemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Lõuna-Aafrika Vabariik\",
        \"ZM\": \"Sambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/et.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/et.json");
    }
}
