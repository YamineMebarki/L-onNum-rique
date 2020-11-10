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

/* vendor/symfony/intl/Resources/data/regions/qu.json */
class __TwigTemplate_4ee7860b9eda20f7c1ccfe0733cd542b9cabf099e6e71872bc85a31a699f9494 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/qu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/qu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Emiratos Árabes Unidos\",
        \"AF\": \"Afganistán\",
        \"AG\": \"Antigua y Barbuda\",
        \"AI\": \"Anguila\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antártida\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Americana\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Islas Åland\",
        \"AZ\": \"Azerbaiyán\",
        \"BA\": \"Bosnia y Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bélgica\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Baréin\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benín\",
        \"BL\": \"San Bartolomé\",
        \"BM\": \"Bermudas\",
        \"BN\": \"Brunéi\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Bonaire\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bután\",
        \"BV\": \"Isla Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"Belarús\",
        \"BZ\": \"Belice\",
        \"CA\": \"Canadá\",
        \"CC\": \"Islas Cocos\",
        \"CD\": \"Congo (RDC)\",
        \"CF\": \"República Centroafricana\",
        \"CG\": \"Congo\",
        \"CH\": \"Suiza\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Islas Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Camerún\",
        \"CN\": \"China\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cabo Verde\",
        \"CW\": \"Curazao\",
        \"CX\": \"Isla Christmas\",
        \"CY\": \"Chipre\",
        \"CZ\": \"Chequia\",
        \"DE\": \"Alemania\",
        \"DJ\": \"Yibuti\",
        \"DK\": \"Dinamarca\",
        \"DM\": \"Dominica\",
        \"DO\": \"República Dominicana\",
        \"DZ\": \"Argelia\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Egipto\",
        \"EH\": \"Sahara Occidental\",
        \"ER\": \"Eritrea\",
        \"ES\": \"España\",
        \"ET\": \"Etiopía\",
        \"FI\": \"Finlandia\",
        \"FJ\": \"Fiyi\",
        \"FK\": \"Islas Malvinas\",
        \"FM\": \"Micronesia\",
        \"FO\": \"Islas Feroe\",
        \"FR\": \"Francia\",
        \"GA\": \"Gabón\",
        \"GB\": \"Reino Unido\",
        \"GD\": \"Granada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guayana Francesa\",
        \"GG\": \"Guernesey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Groenlandia\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadalupe\",
        \"GQ\": \"Guinea Ecuatorial\",
        \"GR\": \"Grecia\",
        \"GS\": \"Georgia del Sur e Islas Sandwich del Sur\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bisáu\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hong Kong (RAE)\",
        \"HM\": \"Islas Heard y McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croacia\",
        \"HT\": \"Haití\",
        \"HU\": \"Hungría\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlanda\",
        \"IL\": \"Israel\",
        \"IM\": \"Isla de Man\",
        \"IN\": \"India\",
        \"IO\": \"Territorio Británico del Océano Índico\",
        \"IQ\": \"Irak\",
        \"IR\": \"Irán\",
        \"IS\": \"Islandia\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordania\",
        \"JP\": \"Japón\",
        \"KE\": \"Kenia\",
        \"KG\": \"Kirguistán\",
        \"KH\": \"Camboya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Comoras\",
        \"KN\": \"San Cristóbal y Nieves\",
        \"KP\": \"Corea del Norte\",
        \"KR\": \"Corea del Sur\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Islas Caimán\",
        \"KZ\": \"Kazajistán\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbano\",
        \"LC\": \"Santa Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituania\",
        \"LU\": \"Luxemburgo\",
        \"LV\": \"Letonia\",
        \"LY\": \"Libia\",
        \"MA\": \"Marruecos\",
        \"MC\": \"Mónaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"San Martín\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Islas Marshall\",
        \"MK\": \"Macedonia del Norte\",
        \"ML\": \"Malí\",
        \"MM\": \"Myanmar\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao RAE\",
        \"MP\": \"Islas Marianas del Norte\",
        \"MQ\": \"Martinica\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauricio\",
        \"MV\": \"Maldivas\",
        \"MW\": \"Malawi\",
        \"MX\": \"México\",
        \"MY\": \"Malasia\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibia\",
        \"NC\": \"Nueva Caledonia\",
        \"NE\": \"Níger\",
        \"NF\": \"Isla Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Países Bajos\",
        \"NO\": \"Noruega\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nueva Zelanda\",
        \"OM\": \"Omán\",
        \"PA\": \"Panamá\",
        \"PE\": \"Perú\",
        \"PF\": \"Polinesia Francesa\",
        \"PG\": \"Papúa Nueva Guinea\",
        \"PH\": \"Filipinas\",
        \"PK\": \"Pakistán\",
        \"PL\": \"Polonia\",
        \"PM\": \"San Pedro y Miquelón\",
        \"PN\": \"Islas Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestina Kamachikuq\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palaos\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Reunión\",
        \"RO\": \"Rumania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Rusia\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Arabia Saudí\",
        \"SB\": \"Islas Salomón\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudán\",
        \"SE\": \"Suecia\",
        \"SG\": \"Singapur\",
        \"SH\": \"Santa Elena\",
        \"SI\": \"Eslovenia\",
        \"SJ\": \"Svalbard y Jan Mayen\",
        \"SK\": \"Eslovaquia\",
        \"SL\": \"Sierra Leona\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Surinam\",
        \"SS\": \"Sudán del Sur\",
        \"ST\": \"Santo Tomé y Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Siria\",
        \"SZ\": \"Suazilandia\",
        \"TC\": \"Islas Turcas y Caicos\",
        \"TD\": \"Chad\",
        \"TF\": \"Territorios Australes Franceses\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailandia\",
        \"TJ\": \"Tayikistán\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turkmenistán\",
        \"TN\": \"Túnez\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turquía\",
        \"TT\": \"Trinidad y Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwán\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ucrania\",
        \"UG\": \"Uganda\",
        \"UM\": \"Islas menores alejadas de los EE.UU.\",
        \"US\": \"Estados Unidos\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistán\",
        \"VA\": \"Santa Sede (Ciudad del Vaticano)\",
        \"VC\": \"San Vicente y las Granadinas\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Islas Vírgenes Británicas\",
        \"VI\": \"EE.UU. Islas Vírgenes\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis y Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sudáfrica\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabue\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/qu.json";
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
        \"AE\": \"Emiratos Árabes Unidos\",
        \"AF\": \"Afganistán\",
        \"AG\": \"Antigua y Barbuda\",
        \"AI\": \"Anguila\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antártida\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Americana\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Islas Åland\",
        \"AZ\": \"Azerbaiyán\",
        \"BA\": \"Bosnia y Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bélgica\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Baréin\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benín\",
        \"BL\": \"San Bartolomé\",
        \"BM\": \"Bermudas\",
        \"BN\": \"Brunéi\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Bonaire\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bután\",
        \"BV\": \"Isla Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"Belarús\",
        \"BZ\": \"Belice\",
        \"CA\": \"Canadá\",
        \"CC\": \"Islas Cocos\",
        \"CD\": \"Congo (RDC)\",
        \"CF\": \"República Centroafricana\",
        \"CG\": \"Congo\",
        \"CH\": \"Suiza\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Islas Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Camerún\",
        \"CN\": \"China\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cabo Verde\",
        \"CW\": \"Curazao\",
        \"CX\": \"Isla Christmas\",
        \"CY\": \"Chipre\",
        \"CZ\": \"Chequia\",
        \"DE\": \"Alemania\",
        \"DJ\": \"Yibuti\",
        \"DK\": \"Dinamarca\",
        \"DM\": \"Dominica\",
        \"DO\": \"República Dominicana\",
        \"DZ\": \"Argelia\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Egipto\",
        \"EH\": \"Sahara Occidental\",
        \"ER\": \"Eritrea\",
        \"ES\": \"España\",
        \"ET\": \"Etiopía\",
        \"FI\": \"Finlandia\",
        \"FJ\": \"Fiyi\",
        \"FK\": \"Islas Malvinas\",
        \"FM\": \"Micronesia\",
        \"FO\": \"Islas Feroe\",
        \"FR\": \"Francia\",
        \"GA\": \"Gabón\",
        \"GB\": \"Reino Unido\",
        \"GD\": \"Granada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guayana Francesa\",
        \"GG\": \"Guernesey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Groenlandia\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadalupe\",
        \"GQ\": \"Guinea Ecuatorial\",
        \"GR\": \"Grecia\",
        \"GS\": \"Georgia del Sur e Islas Sandwich del Sur\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bisáu\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hong Kong (RAE)\",
        \"HM\": \"Islas Heard y McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croacia\",
        \"HT\": \"Haití\",
        \"HU\": \"Hungría\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Irlanda\",
        \"IL\": \"Israel\",
        \"IM\": \"Isla de Man\",
        \"IN\": \"India\",
        \"IO\": \"Territorio Británico del Océano Índico\",
        \"IQ\": \"Irak\",
        \"IR\": \"Irán\",
        \"IS\": \"Islandia\",
        \"IT\": \"Italia\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordania\",
        \"JP\": \"Japón\",
        \"KE\": \"Kenia\",
        \"KG\": \"Kirguistán\",
        \"KH\": \"Camboya\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Comoras\",
        \"KN\": \"San Cristóbal y Nieves\",
        \"KP\": \"Corea del Norte\",
        \"KR\": \"Corea del Sur\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Islas Caimán\",
        \"KZ\": \"Kazajistán\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbano\",
        \"LC\": \"Santa Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituania\",
        \"LU\": \"Luxemburgo\",
        \"LV\": \"Letonia\",
        \"LY\": \"Libia\",
        \"MA\": \"Marruecos\",
        \"MC\": \"Mónaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"San Martín\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Islas Marshall\",
        \"MK\": \"Macedonia del Norte\",
        \"ML\": \"Malí\",
        \"MM\": \"Myanmar\",
        \"MN\": \"Mongolia\",
        \"MO\": \"Macao RAE\",
        \"MP\": \"Islas Marianas del Norte\",
        \"MQ\": \"Martinica\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauricio\",
        \"MV\": \"Maldivas\",
        \"MW\": \"Malawi\",
        \"MX\": \"México\",
        \"MY\": \"Malasia\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibia\",
        \"NC\": \"Nueva Caledonia\",
        \"NE\": \"Níger\",
        \"NF\": \"Isla Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Países Bajos\",
        \"NO\": \"Noruega\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nueva Zelanda\",
        \"OM\": \"Omán\",
        \"PA\": \"Panamá\",
        \"PE\": \"Perú\",
        \"PF\": \"Polinesia Francesa\",
        \"PG\": \"Papúa Nueva Guinea\",
        \"PH\": \"Filipinas\",
        \"PK\": \"Pakistán\",
        \"PL\": \"Polonia\",
        \"PM\": \"San Pedro y Miquelón\",
        \"PN\": \"Islas Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Palestina Kamachikuq\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palaos\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Reunión\",
        \"RO\": \"Rumania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Rusia\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Arabia Saudí\",
        \"SB\": \"Islas Salomón\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudán\",
        \"SE\": \"Suecia\",
        \"SG\": \"Singapur\",
        \"SH\": \"Santa Elena\",
        \"SI\": \"Eslovenia\",
        \"SJ\": \"Svalbard y Jan Mayen\",
        \"SK\": \"Eslovaquia\",
        \"SL\": \"Sierra Leona\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Surinam\",
        \"SS\": \"Sudán del Sur\",
        \"ST\": \"Santo Tomé y Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Siria\",
        \"SZ\": \"Suazilandia\",
        \"TC\": \"Islas Turcas y Caicos\",
        \"TD\": \"Chad\",
        \"TF\": \"Territorios Australes Franceses\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailandia\",
        \"TJ\": \"Tayikistán\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turkmenistán\",
        \"TN\": \"Túnez\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turquía\",
        \"TT\": \"Trinidad y Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwán\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ucrania\",
        \"UG\": \"Uganda\",
        \"UM\": \"Islas menores alejadas de los EE.UU.\",
        \"US\": \"Estados Unidos\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistán\",
        \"VA\": \"Santa Sede (Ciudad del Vaticano)\",
        \"VC\": \"San Vicente y las Granadinas\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Islas Vírgenes Británicas\",
        \"VI\": \"EE.UU. Islas Vírgenes\",
        \"VN\": \"Vietnam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis y Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Sudáfrica\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabue\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/qu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/qu.json");
    }
}