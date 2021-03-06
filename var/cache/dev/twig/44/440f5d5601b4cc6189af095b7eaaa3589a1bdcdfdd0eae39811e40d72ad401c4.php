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

/* vendor/symfony/intl/Resources/data/regions/pt.json */
class __TwigTemplate_265cdd258dc57558aaf877ff3c01e1d9766cb927dc5710edc5c74236f775cc39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/pt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/pt.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Emirados Árabes Unidos\",
        \"AF\": \"Afeganistão\",
        \"AG\": \"Antígua e Barbuda\",
        \"AI\": \"Anguila\",
        \"AL\": \"Albânia\",
        \"AM\": \"Armênia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antártida\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Americana\",
        \"AT\": \"Áustria\",
        \"AU\": \"Austrália\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ilhas Aland\",
        \"AZ\": \"Azerbaijão\",
        \"BA\": \"Bósnia e Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bélgica\",
        \"BF\": \"Burquina Faso\",
        \"BG\": \"Bulgária\",
        \"BH\": \"Bahrein\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"São Bartolomeu\",
        \"BM\": \"Bermudas\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolívia\",
        \"BQ\": \"Países Baixos Caribenhos\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Butão\",
        \"BV\": \"Ilha Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"Bielorrússia\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canadá\",
        \"CC\": \"Ilhas Cocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"República Centro-Africana\",
        \"CG\": \"República do Congo\",
        \"CH\": \"Suíça\",
        \"CI\": \"Costa do Marfim\",
        \"CK\": \"Ilhas Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Camarões\",
        \"CN\": \"China\",
        \"CO\": \"Colômbia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cabo Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Ilha Christmas\",
        \"CY\": \"Chipre\",
        \"CZ\": \"Tchéquia\",
        \"DE\": \"Alemanha\",
        \"DJ\": \"Djibuti\",
        \"DK\": \"Dinamarca\",
        \"DM\": \"Dominica\",
        \"DO\": \"República Dominicana\",
        \"DZ\": \"Argélia\",
        \"EC\": \"Equador\",
        \"EE\": \"Estônia\",
        \"EG\": \"Egito\",
        \"EH\": \"Saara Ocidental\",
        \"ER\": \"Eritreia\",
        \"ES\": \"Espanha\",
        \"ET\": \"Etiópia\",
        \"FI\": \"Finlândia\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Ilhas Malvinas\",
        \"FM\": \"Micronésia\",
        \"FO\": \"Ilhas Faroe\",
        \"FR\": \"França\",
        \"GA\": \"Gabão\",
        \"GB\": \"Reino Unido\",
        \"GD\": \"Granada\",
        \"GE\": \"Geórgia\",
        \"GF\": \"Guiana Francesa\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Groenlândia\",
        \"GM\": \"Gâmbia\",
        \"GN\": \"Guiné\",
        \"GP\": \"Guadalupe\",
        \"GQ\": \"Guiné Equatorial\",
        \"GR\": \"Grécia\",
        \"GS\": \"Ilhas Geórgia do Sul e Sandwich do Sul\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guiné-Bissau\",
        \"GY\": \"Guiana\",
        \"HK\": \"Hong Kong, RAE da China\",
        \"HM\": \"Ilhas Heard e McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croácia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungria\",
        \"ID\": \"Indonésia\",
        \"IE\": \"Irlanda\",
        \"IL\": \"Israel\",
        \"IM\": \"Ilha de Man\",
        \"IN\": \"Índia\",
        \"IO\": \"Território Britânico do Oceano Índico\",
        \"IQ\": \"Iraque\",
        \"IR\": \"Irã\",
        \"IS\": \"Islândia\",
        \"IT\": \"Itália\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordânia\",
        \"JP\": \"Japão\",
        \"KE\": \"Quênia\",
        \"KG\": \"Quirguistão\",
        \"KH\": \"Camboja\",
        \"KI\": \"Quiribati\",
        \"KM\": \"Comores\",
        \"KN\": \"São Cristóvão e Névis\",
        \"KP\": \"Coreia do Norte\",
        \"KR\": \"Coreia do Sul\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Ilhas Cayman\",
        \"KZ\": \"Cazaquistão\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbano\",
        \"LC\": \"Santa Lúcia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libéria\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituânia\",
        \"LU\": \"Luxemburgo\",
        \"LV\": \"Letônia\",
        \"LY\": \"Líbia\",
        \"MA\": \"Marrocos\",
        \"MC\": \"Mônaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"São Martinho\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Ilhas Marshall\",
        \"MK\": \"Macedônia do Norte\",
        \"ML\": \"Mali\",
        \"MM\": \"Mianmar (Birmânia)\",
        \"MN\": \"Mongólia\",
        \"MO\": \"Macau, RAE da China\",
        \"MP\": \"Ilhas Marianas do Norte\",
        \"MQ\": \"Martinica\",
        \"MR\": \"Mauritânia\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Maurício\",
        \"MV\": \"Maldivas\",
        \"MW\": \"Malaui\",
        \"MX\": \"México\",
        \"MY\": \"Malásia\",
        \"MZ\": \"Moçambique\",
        \"NA\": \"Namíbia\",
        \"NC\": \"Nova Caledônia\",
        \"NE\": \"Níger\",
        \"NF\": \"Ilha Norfolk\",
        \"NG\": \"Nigéria\",
        \"NI\": \"Nicarágua\",
        \"NL\": \"Países Baixos\",
        \"NO\": \"Noruega\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nova Zelândia\",
        \"OM\": \"Omã\",
        \"PA\": \"Panamá\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinésia Francesa\",
        \"PG\": \"Papua-Nova Guiné\",
        \"PH\": \"Filipinas\",
        \"PK\": \"Paquistão\",
        \"PL\": \"Polônia\",
        \"PM\": \"São Pedro e Miquelão\",
        \"PN\": \"Ilhas Pitcairn\",
        \"PR\": \"Porto Rico\",
        \"PS\": \"Territórios palestinos\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguai\",
        \"QA\": \"Catar\",
        \"RE\": \"Reunião\",
        \"RO\": \"Romênia\",
        \"RS\": \"Sérvia\",
        \"RU\": \"Rússia\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Arábia Saudita\",
        \"SB\": \"Ilhas Salomão\",
        \"SC\": \"Seicheles\",
        \"SD\": \"Sudão\",
        \"SE\": \"Suécia\",
        \"SG\": \"Singapura\",
        \"SH\": \"Santa Helena\",
        \"SI\": \"Eslovênia\",
        \"SJ\": \"Svalbard e Jan Mayen\",
        \"SK\": \"Eslováquia\",
        \"SL\": \"Serra Leoa\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somália\",
        \"SR\": \"Suriname\",
        \"SS\": \"Sudão do Sul\",
        \"ST\": \"São Tomé e Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Síria\",
        \"SZ\": \"Essuatíni\",
        \"TC\": \"Ilhas Turcas e Caicos\",
        \"TD\": \"Chade\",
        \"TF\": \"Territórios Franceses do Sul\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailândia\",
        \"TJ\": \"Tadjiquistão\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turcomenistão\",
        \"TN\": \"Tunísia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turquia\",
        \"TT\": \"Trinidad e Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzânia\",
        \"UA\": \"Ucrânia\",
        \"UG\": \"Uganda\",
        \"UM\": \"Ilhas Menores Distantes dos EUA\",
        \"US\": \"Estados Unidos\",
        \"UY\": \"Uruguai\",
        \"UZ\": \"Uzbequistão\",
        \"VA\": \"Cidade do Vaticano\",
        \"VC\": \"São Vicente e Granadinas\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Ilhas Virgens Britânicas\",
        \"VI\": \"Ilhas Virgens Americanas\",
        \"VN\": \"Vietnã\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis e Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Iêmen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"África do Sul\",
        \"ZM\": \"Zâmbia\",
        \"ZW\": \"Zimbábue\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/pt.json";
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
        \"AE\": \"Emirados Árabes Unidos\",
        \"AF\": \"Afeganistão\",
        \"AG\": \"Antígua e Barbuda\",
        \"AI\": \"Anguila\",
        \"AL\": \"Albânia\",
        \"AM\": \"Armênia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Antártida\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa Americana\",
        \"AT\": \"Áustria\",
        \"AU\": \"Austrália\",
        \"AW\": \"Aruba\",
        \"AX\": \"Ilhas Aland\",
        \"AZ\": \"Azerbaijão\",
        \"BA\": \"Bósnia e Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bélgica\",
        \"BF\": \"Burquina Faso\",
        \"BG\": \"Bulgária\",
        \"BH\": \"Bahrein\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"São Bartolomeu\",
        \"BM\": \"Bermudas\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolívia\",
        \"BQ\": \"Países Baixos Caribenhos\",
        \"BR\": \"Brasil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Butão\",
        \"BV\": \"Ilha Bouvet\",
        \"BW\": \"Botsuana\",
        \"BY\": \"Bielorrússia\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canadá\",
        \"CC\": \"Ilhas Cocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"República Centro-Africana\",
        \"CG\": \"República do Congo\",
        \"CH\": \"Suíça\",
        \"CI\": \"Costa do Marfim\",
        \"CK\": \"Ilhas Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Camarões\",
        \"CN\": \"China\",
        \"CO\": \"Colômbia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cabo Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Ilha Christmas\",
        \"CY\": \"Chipre\",
        \"CZ\": \"Tchéquia\",
        \"DE\": \"Alemanha\",
        \"DJ\": \"Djibuti\",
        \"DK\": \"Dinamarca\",
        \"DM\": \"Dominica\",
        \"DO\": \"República Dominicana\",
        \"DZ\": \"Argélia\",
        \"EC\": \"Equador\",
        \"EE\": \"Estônia\",
        \"EG\": \"Egito\",
        \"EH\": \"Saara Ocidental\",
        \"ER\": \"Eritreia\",
        \"ES\": \"Espanha\",
        \"ET\": \"Etiópia\",
        \"FI\": \"Finlândia\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Ilhas Malvinas\",
        \"FM\": \"Micronésia\",
        \"FO\": \"Ilhas Faroe\",
        \"FR\": \"França\",
        \"GA\": \"Gabão\",
        \"GB\": \"Reino Unido\",
        \"GD\": \"Granada\",
        \"GE\": \"Geórgia\",
        \"GF\": \"Guiana Francesa\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Groenlândia\",
        \"GM\": \"Gâmbia\",
        \"GN\": \"Guiné\",
        \"GP\": \"Guadalupe\",
        \"GQ\": \"Guiné Equatorial\",
        \"GR\": \"Grécia\",
        \"GS\": \"Ilhas Geórgia do Sul e Sandwich do Sul\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guiné-Bissau\",
        \"GY\": \"Guiana\",
        \"HK\": \"Hong Kong, RAE da China\",
        \"HM\": \"Ilhas Heard e McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croácia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungria\",
        \"ID\": \"Indonésia\",
        \"IE\": \"Irlanda\",
        \"IL\": \"Israel\",
        \"IM\": \"Ilha de Man\",
        \"IN\": \"Índia\",
        \"IO\": \"Território Britânico do Oceano Índico\",
        \"IQ\": \"Iraque\",
        \"IR\": \"Irã\",
        \"IS\": \"Islândia\",
        \"IT\": \"Itália\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordânia\",
        \"JP\": \"Japão\",
        \"KE\": \"Quênia\",
        \"KG\": \"Quirguistão\",
        \"KH\": \"Camboja\",
        \"KI\": \"Quiribati\",
        \"KM\": \"Comores\",
        \"KN\": \"São Cristóvão e Névis\",
        \"KP\": \"Coreia do Norte\",
        \"KR\": \"Coreia do Sul\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Ilhas Cayman\",
        \"KZ\": \"Cazaquistão\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbano\",
        \"LC\": \"Santa Lúcia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Libéria\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituânia\",
        \"LU\": \"Luxemburgo\",
        \"LV\": \"Letônia\",
        \"LY\": \"Líbia\",
        \"MA\": \"Marrocos\",
        \"MC\": \"Mônaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"São Martinho\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Ilhas Marshall\",
        \"MK\": \"Macedônia do Norte\",
        \"ML\": \"Mali\",
        \"MM\": \"Mianmar (Birmânia)\",
        \"MN\": \"Mongólia\",
        \"MO\": \"Macau, RAE da China\",
        \"MP\": \"Ilhas Marianas do Norte\",
        \"MQ\": \"Martinica\",
        \"MR\": \"Mauritânia\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Maurício\",
        \"MV\": \"Maldivas\",
        \"MW\": \"Malaui\",
        \"MX\": \"México\",
        \"MY\": \"Malásia\",
        \"MZ\": \"Moçambique\",
        \"NA\": \"Namíbia\",
        \"NC\": \"Nova Caledônia\",
        \"NE\": \"Níger\",
        \"NF\": \"Ilha Norfolk\",
        \"NG\": \"Nigéria\",
        \"NI\": \"Nicarágua\",
        \"NL\": \"Países Baixos\",
        \"NO\": \"Noruega\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nova Zelândia\",
        \"OM\": \"Omã\",
        \"PA\": \"Panamá\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinésia Francesa\",
        \"PG\": \"Papua-Nova Guiné\",
        \"PH\": \"Filipinas\",
        \"PK\": \"Paquistão\",
        \"PL\": \"Polônia\",
        \"PM\": \"São Pedro e Miquelão\",
        \"PN\": \"Ilhas Pitcairn\",
        \"PR\": \"Porto Rico\",
        \"PS\": \"Territórios palestinos\",
        \"PT\": \"Portugal\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguai\",
        \"QA\": \"Catar\",
        \"RE\": \"Reunião\",
        \"RO\": \"Romênia\",
        \"RS\": \"Sérvia\",
        \"RU\": \"Rússia\",
        \"RW\": \"Ruanda\",
        \"SA\": \"Arábia Saudita\",
        \"SB\": \"Ilhas Salomão\",
        \"SC\": \"Seicheles\",
        \"SD\": \"Sudão\",
        \"SE\": \"Suécia\",
        \"SG\": \"Singapura\",
        \"SH\": \"Santa Helena\",
        \"SI\": \"Eslovênia\",
        \"SJ\": \"Svalbard e Jan Mayen\",
        \"SK\": \"Eslováquia\",
        \"SL\": \"Serra Leoa\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somália\",
        \"SR\": \"Suriname\",
        \"SS\": \"Sudão do Sul\",
        \"ST\": \"São Tomé e Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Síria\",
        \"SZ\": \"Essuatíni\",
        \"TC\": \"Ilhas Turcas e Caicos\",
        \"TD\": \"Chade\",
        \"TF\": \"Territórios Franceses do Sul\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailândia\",
        \"TJ\": \"Tadjiquistão\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turcomenistão\",
        \"TN\": \"Tunísia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turquia\",
        \"TT\": \"Trinidad e Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwan\",
        \"TZ\": \"Tanzânia\",
        \"UA\": \"Ucrânia\",
        \"UG\": \"Uganda\",
        \"UM\": \"Ilhas Menores Distantes dos EUA\",
        \"US\": \"Estados Unidos\",
        \"UY\": \"Uruguai\",
        \"UZ\": \"Uzbequistão\",
        \"VA\": \"Cidade do Vaticano\",
        \"VC\": \"São Vicente e Granadinas\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Ilhas Virgens Britânicas\",
        \"VI\": \"Ilhas Virgens Americanas\",
        \"VN\": \"Vietnã\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis e Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Iêmen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"África do Sul\",
        \"ZM\": \"Zâmbia\",
        \"ZW\": \"Zimbábue\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/pt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/pt.json");
    }
}
