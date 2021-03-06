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

/* vendor/symfony/intl/Resources/data/regions/nn.json */
class __TwigTemplate_8d7ee54c77d9d99589af5a358e1a6efd8a2e1ba9e1eb0bf48f54c3b1e844f0ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/nn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/nn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Dei sameinte arabiske emirata\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua og Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktis\",
        \"AR\": \"Argentina\",
        \"AS\": \"Amerikansk Samoa\",
        \"AT\": \"Austerrike\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Åland\",
        \"AZ\": \"Aserbajdsjan\",
        \"BA\": \"Bosnia-Hercegovina\",
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
        \"BQ\": \"Karibisk Nederland\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvetøya\",
        \"BW\": \"Botswana\",
        \"BY\": \"Kviterussland\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canada\",
        \"CC\": \"Kokosøyane\",
        \"CD\": \"Kongo-Kinshasa\",
        \"CF\": \"Den sentralafrikanske republikken\",
        \"CG\": \"Kongo-Brazzaville\",
        \"CH\": \"Sveits\",
        \"CI\": \"Elfenbeinskysten\",
        \"CK\": \"Cookøyane\",
        \"CL\": \"Chile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Kina\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Kapp Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Christmasøya\",
        \"CY\": \"Kypros\",
        \"CZ\": \"Tsjekkia\",
        \"DE\": \"Tyskland\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Danmark\",
        \"DM\": \"Dominica\",
        \"DO\": \"Den dominikanske republikken\",
        \"DZ\": \"Algerie\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estland\",
        \"EG\": \"Egypt\",
        \"EH\": \"Vest-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spania\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falklandsøyane\",
        \"FM\": \"Mikronesiaføderasjonen\",
        \"FO\": \"Færøyane\",
        \"FR\": \"Frankrike\",
        \"GA\": \"Gabon\",
        \"GB\": \"Storbritannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Fransk Guyana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grønland\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvatorial-Guinea\",
        \"GR\": \"Hellas\",
        \"GS\": \"Sør-Georgia og Sør-Sandwichøyene\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkong S.A.R. Kina\",
        \"HM\": \"Heardøya og McDonaldøyane\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Ungarn\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irland\",
        \"IL\": \"Israel\",
        \"IM\": \"Man\",
        \"IN\": \"India\",
        \"IO\": \"Det britiske territoriet I Indiahavet\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Island\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordan\",
        \"JP\": \"Japan\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgisistan\",
        \"KH\": \"Kambodsja\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorane\",
        \"KN\": \"Saint Kitts og Nevis\",
        \"KP\": \"Nord-Korea\",
        \"KR\": \"Sør-Korea\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Caymanøyane\",
        \"KZ\": \"Kasakhstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Libanon\",
        \"LC\": \"St. Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litauen\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Marokko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalløyane\",
        \"MK\": \"Nord-Makedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao S.A.R. Kina\",
        \"MP\": \"Nord-Marianane\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldivane\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mexico\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mosambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Ny-Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolkøya\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Nederland\",
        \"NO\": \"Noreg\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Fransk Polynesia\",
        \"PG\": \"Papua Ny-Guinea\",
        \"PH\": \"Filippinane\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polen\",
        \"PM\": \"Saint-Pierre-et-Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestinsk territorium\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Russland\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi-Arabia\",
        \"SB\": \"Salomonøyane\",
        \"SC\": \"Seychellane\",
        \"SD\": \"Sudan\",
        \"SE\": \"Sverige\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Svalbard og Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Surinam\",
        \"SS\": \"Sør-Sudan\",
        \"ST\": \"São Tomé og Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Turks- og Caicosøyane\",
        \"TD\": \"Tsjad\",
        \"TF\": \"Dei franske sørterritoria\",
        \"TG\": \"Togo\",
        \"TH\": \"Thailand\",
        \"TJ\": \"Tadsjikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste (Aust-Timor)\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Tyrkia\",
        \"TT\": \"Trinidad og Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"USAs ytre småøyar\",
        \"US\": \"USA\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Usbekistan\",
        \"VA\": \"Vatikanstaten\",
        \"VC\": \"St. Vincent og Grenadinane\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Dei britiske Jomfruøyane\",
        \"VI\": \"Dei amerikanske Jomfruøyane\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis og Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sør-Afrika\",
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
        return "vendor/symfony/intl/Resources/data/regions/nn.json";
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
        \"AE\": \"Dei sameinte arabiske emirata\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua og Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antarktis\",
        \"AR\": \"Argentina\",
        \"AS\": \"Amerikansk Samoa\",
        \"AT\": \"Austerrike\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Åland\",
        \"AZ\": \"Aserbajdsjan\",
        \"BA\": \"Bosnia-Hercegovina\",
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
        \"BQ\": \"Karibisk Nederland\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Bouvetøya\",
        \"BW\": \"Botswana\",
        \"BY\": \"Kviterussland\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canada\",
        \"CC\": \"Kokosøyane\",
        \"CD\": \"Kongo-Kinshasa\",
        \"CF\": \"Den sentralafrikanske republikken\",
        \"CG\": \"Kongo-Brazzaville\",
        \"CH\": \"Sveits\",
        \"CI\": \"Elfenbeinskysten\",
        \"CK\": \"Cookøyane\",
        \"CL\": \"Chile\",
        \"CM\": \"Kamerun\",
        \"CN\": \"Kina\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Kapp Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Christmasøya\",
        \"CY\": \"Kypros\",
        \"CZ\": \"Tsjekkia\",
        \"DE\": \"Tyskland\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Danmark\",
        \"DM\": \"Dominica\",
        \"DO\": \"Den dominikanske republikken\",
        \"DZ\": \"Algerie\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estland\",
        \"EG\": \"Egypt\",
        \"EH\": \"Vest-Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Spania\",
        \"ET\": \"Etiopia\",
        \"FI\": \"Finland\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Falklandsøyane\",
        \"FM\": \"Mikronesiaføderasjonen\",
        \"FO\": \"Færøyane\",
        \"FR\": \"Frankrike\",
        \"GA\": \"Gabon\",
        \"GB\": \"Storbritannia\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Fransk Guyana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Grønland\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Ekvatorial-Guinea\",
        \"GR\": \"Hellas\",
        \"GS\": \"Sør-Georgia og Sør-Sandwichøyene\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hongkong S.A.R. Kina\",
        \"HM\": \"Heardøya og McDonaldøyane\",
        \"HN\": \"Honduras\",
        \"HR\": \"Kroatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Ungarn\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irland\",
        \"IL\": \"Israel\",
        \"IM\": \"Man\",
        \"IN\": \"India\",
        \"IO\": \"Det britiske territoriet I Indiahavet\",
        \"IQ\": \"Irak\",
        \"IR\": \"Iran\",
        \"IS\": \"Island\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordan\",
        \"JP\": \"Japan\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirgisistan\",
        \"KH\": \"Kambodsja\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komorane\",
        \"KN\": \"Saint Kitts og Nevis\",
        \"KP\": \"Nord-Korea\",
        \"KR\": \"Sør-Korea\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Caymanøyane\",
        \"KZ\": \"Kasakhstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Libanon\",
        \"LC\": \"St. Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litauen\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Marokko\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"Saint Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalløyane\",
        \"MK\": \"Nord-Makedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Burma)\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao S.A.R. Kina\",
        \"MP\": \"Nord-Marianane\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldivane\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mexico\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mosambik\",
        \"NA\": \"Namibia\",
        \"NC\": \"Ny-Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Norfolkøya\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Nederland\",
        \"NO\": \"Noreg\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Fransk Polynesia\",
        \"PG\": \"Papua Ny-Guinea\",
        \"PH\": \"Filippinane\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Polen\",
        \"PM\": \"Saint-Pierre-et-Miquelon\",
        \"PN\": \"Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestinsk territorium\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Russland\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi-Arabia\",
        \"SB\": \"Salomonøyane\",
        \"SC\": \"Seychellane\",
        \"SD\": \"Sudan\",
        \"SE\": \"Sverige\",
        \"SG\": \"Singapore\",
        \"SH\": \"Saint Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Svalbard og Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Surinam\",
        \"SS\": \"Sør-Sudan\",
        \"ST\": \"São Tomé og Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Turks- og Caicosøyane\",
        \"TD\": \"Tsjad\",
        \"TF\": \"Dei franske sørterritoria\",
        \"TG\": \"Togo\",
        \"TH\": \"Thailand\",
        \"TJ\": \"Tadsjikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste (Aust-Timor)\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Tyrkia\",
        \"TT\": \"Trinidad og Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"USAs ytre småøyar\",
        \"US\": \"USA\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Usbekistan\",
        \"VA\": \"Vatikanstaten\",
        \"VC\": \"St. Vincent og Grenadinane\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Dei britiske Jomfruøyane\",
        \"VI\": \"Dei amerikanske Jomfruøyane\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis og Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sør-Afrika\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/nn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/nn.json");
    }
}
