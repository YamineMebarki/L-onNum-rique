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

/* vendor/symfony/intl/Resources/data/regions/is.json */
class __TwigTemplate_e593508db09c26f300a1ab8f60bd39219fa39a96b4b859316e54bc8d772278d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/is.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/is.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Sameinuðu arabísku furstadæmin\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antígva og Barbúda\",
        \"AI\": \"Angvilla\",
        \"AL\": \"Albanía\",
        \"AM\": \"Armenía\",
        \"AO\": \"Angóla\",
        \"AQ\": \"Suðurskautslandið\",
        \"AR\": \"Argentína\",
        \"AS\": \"Bandaríska Samóa\",
        \"AT\": \"Austurríki\",
        \"AU\": \"Ástralía\",
        \"AW\": \"Arúba\",
        \"AX\": \"Álandseyjar\",
        \"AZ\": \"Aserbaídsjan\",
        \"BA\": \"Bosnía og Hersegóvína\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladess\",
        \"BE\": \"Belgía\",
        \"BF\": \"Búrkína Fasó\",
        \"BG\": \"Búlgaría\",
        \"BH\": \"Barein\",
        \"BI\": \"Búrúndí\",
        \"BJ\": \"Benín\",
        \"BL\": \"Sankti Bartólómeusareyjar\",
        \"BM\": \"Bermúdaeyjar\",
        \"BN\": \"Brúnei\",
        \"BO\": \"Bólivía\",
        \"BQ\": \"Karíbahafshluti Hollands\",
        \"BR\": \"Brasilía\",
        \"BS\": \"Bahamaeyjar\",
        \"BT\": \"Bútan\",
        \"BV\": \"Bouveteyja\",
        \"BW\": \"Botsvana\",
        \"BY\": \"Hvíta-Rússland\",
        \"BZ\": \"Belís\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kókoseyjar (Keeling)\",
        \"CD\": \"Kongó-Kinshasa\",
        \"CF\": \"Mið-Afríkulýðveldið\",
        \"CG\": \"Kongó-Brazzaville\",
        \"CH\": \"Sviss\",
        \"CI\": \"Fílabeinsströndin\",
        \"CK\": \"Cooks-eyjar\",
        \"CL\": \"Síle\",
        \"CM\": \"Kamerún\",
        \"CN\": \"Kína\",
        \"CO\": \"Kólumbía\",
        \"CR\": \"Kostaríka\",
        \"CU\": \"Kúba\",
        \"CV\": \"Grænhöfðaeyjar\",
        \"CW\": \"Curacao\",
        \"CX\": \"Jólaey\",
        \"CY\": \"Kýpur\",
        \"CZ\": \"Tékkland\",
        \"DE\": \"Þýskaland\",
        \"DJ\": \"Djíbútí\",
        \"DK\": \"Danmörk\",
        \"DM\": \"Dóminíka\",
        \"DO\": \"Dóminíska lýðveldið\",
        \"DZ\": \"Alsír\",
        \"EC\": \"Ekvador\",
        \"EE\": \"Eistland\",
        \"EG\": \"Egyptaland\",
        \"EH\": \"Vestur-Sahara\",
        \"ER\": \"Erítrea\",
        \"ES\": \"Spánn\",
        \"ET\": \"Eþíópía\",
        \"FI\": \"Finnland\",
        \"FJ\": \"Fídjíeyjar\",
        \"FK\": \"Falklandseyjar\",
        \"FM\": \"Míkrónesía\",
        \"FO\": \"Færeyjar\",
        \"FR\": \"Frakkland\",
        \"GA\": \"Gabon\",
        \"GB\": \"Bretland\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgía\",
        \"GF\": \"Franska Gvæjana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Gíbraltar\",
        \"GL\": \"Grænland\",
        \"GM\": \"Gambía\",
        \"GN\": \"Gínea\",
        \"GP\": \"Gvadelúpeyjar\",
        \"GQ\": \"Miðbaugs-Gínea\",
        \"GR\": \"Grikkland\",
        \"GS\": \"Suður-Georgía og Suður-Sandvíkureyjar\",
        \"GT\": \"Gvatemala\",
        \"GU\": \"Gvam\",
        \"GW\": \"Gínea-Bissá\",
        \"GY\": \"Gvæjana\",
        \"HK\": \"sérstjórnarsvæðið Hong Kong\",
        \"HM\": \"Heard og McDonaldseyjar\",
        \"HN\": \"Hondúras\",
        \"HR\": \"Króatía\",
        \"HT\": \"Haítí\",
        \"HU\": \"Ungverjaland\",
        \"ID\": \"Indónesía\",
        \"IE\": \"Írland\",
        \"IL\": \"Ísrael\",
        \"IM\": \"Mön\",
        \"IN\": \"Indland\",
        \"IO\": \"Bresku Indlandshafseyjar\",
        \"IQ\": \"Írak\",
        \"IR\": \"Íran\",
        \"IS\": \"Ísland\",
        \"IT\": \"Ítalía\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaíka\",
        \"JO\": \"Jórdanía\",
        \"JP\": \"Japan\",
        \"KE\": \"Kenía\",
        \"KG\": \"Kirgistan\",
        \"KH\": \"Kambódía\",
        \"KI\": \"Kíribatí\",
        \"KM\": \"Kómoreyjar\",
        \"KN\": \"Sankti Kitts og Nevis\",
        \"KP\": \"Norður-Kórea\",
        \"KR\": \"Suður-Kórea\",
        \"KW\": \"Kúveit\",
        \"KY\": \"Caymaneyjar\",
        \"KZ\": \"Kasakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbanon\",
        \"LC\": \"Sankti Lúsía\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Srí Lanka\",
        \"LR\": \"Líbería\",
        \"LS\": \"Lesótó\",
        \"LT\": \"Litháen\",
        \"LU\": \"Lúxemborg\",
        \"LV\": \"Lettland\",
        \"LY\": \"Líbía\",
        \"MA\": \"Marokkó\",
        \"MC\": \"Mónakó\",
        \"MD\": \"Moldóva\",
        \"ME\": \"Svartfjallaland\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalleyjar\",
        \"MK\": \"Norður-Makedónía\",
        \"ML\": \"Malí\",
        \"MM\": \"Mjanmar (Búrma)\",
        \"MN\": \"Mongólía\",
        \"MO\": \"sérstjórnarsvæðið Makaó\",
        \"MP\": \"Norður-Maríanaeyjar\",
        \"MQ\": \"Martiník\",
        \"MR\": \"Máritanía\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Máritíus\",
        \"MV\": \"Maldíveyjar\",
        \"MW\": \"Malaví\",
        \"MX\": \"Mexíkó\",
        \"MY\": \"Malasía\",
        \"MZ\": \"Mósambík\",
        \"NA\": \"Namibía\",
        \"NC\": \"Nýja-Kaledónía\",
        \"NE\": \"Níger\",
        \"NF\": \"Norfolkeyja\",
        \"NG\": \"Nígería\",
        \"NI\": \"Níkaragva\",
        \"NL\": \"Holland\",
        \"NO\": \"Noregur\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nárú\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nýja-Sjáland\",
        \"OM\": \"Óman\",
        \"PA\": \"Panama\",
        \"PE\": \"Perú\",
        \"PF\": \"Franska Pólýnesía\",
        \"PG\": \"Papúa Nýja-Gínea\",
        \"PH\": \"Filippseyjar\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Pólland\",
        \"PM\": \"Sankti Pierre og Miquelon\",
        \"PN\": \"Pitcairn-eyjar\",
        \"PR\": \"Púertó Ríkó\",
        \"PS\": \"Heimastjórnarsvæði Palestínumanna\",
        \"PT\": \"Portúgal\",
        \"PW\": \"Palá\",
        \"PY\": \"Paragvæ\",
        \"QA\": \"Katar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rúmenía\",
        \"RS\": \"Serbía\",
        \"RU\": \"Rússland\",
        \"RW\": \"Rúanda\",
        \"SA\": \"Sádi-Arabía\",
        \"SB\": \"Salómonseyjar\",
        \"SC\": \"Seychelles-eyjar\",
        \"SD\": \"Súdan\",
        \"SE\": \"Svíþjóð\",
        \"SG\": \"Singapúr\",
        \"SH\": \"Sankti Helena\",
        \"SI\": \"Slóvenía\",
        \"SJ\": \"Svalbarði og Jan Mayen\",
        \"SK\": \"Slóvakía\",
        \"SL\": \"Síerra Leóne\",
        \"SM\": \"San Marínó\",
        \"SN\": \"Senegal\",
        \"SO\": \"Sómalía\",
        \"SR\": \"Súrínam\",
        \"SS\": \"Suður-Súdan\",
        \"ST\": \"Saó Tóme og Prinsípe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sankti Martin\",
        \"SY\": \"Sýrland\",
        \"SZ\": \"Svasíland\",
        \"TC\": \"Turks- og Caicoseyjar\",
        \"TD\": \"Tsjad\",
        \"TF\": \"Frönsku suðlægu landsvæðin\",
        \"TG\": \"Tógó\",
        \"TH\": \"Taíland\",
        \"TJ\": \"Tadsjikistan\",
        \"TK\": \"Tókelá\",
        \"TL\": \"Tímor-Leste\",
        \"TM\": \"Túrkmenistan\",
        \"TN\": \"Túnis\",
        \"TO\": \"Tonga\",
        \"TR\": \"Tyrkland\",
        \"TT\": \"Trínidad og Tóbagó\",
        \"TV\": \"Túvalú\",
        \"TW\": \"Taívan\",
        \"TZ\": \"Tansanía\",
        \"UA\": \"Úkraína\",
        \"UG\": \"Úganda\",
        \"UM\": \"Smáeyjar Bandaríkjanna\",
        \"US\": \"Bandaríkin\",
        \"UY\": \"Úrúgvæ\",
        \"UZ\": \"Úsbekistan\",
        \"VA\": \"Vatíkanið\",
        \"VC\": \"Sankti Vinsent og Grenadíneyjar\",
        \"VE\": \"Venesúela\",
        \"VG\": \"Bresku Jómfrúaeyjar\",
        \"VI\": \"Bandarísku Jómfrúaeyjar\",
        \"VN\": \"Víetnam\",
        \"VU\": \"Vanúatú\",
        \"WF\": \"Wallis- og Fútúnaeyjar\",
        \"WS\": \"Samóa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Suður-Afríka\",
        \"ZM\": \"Sambía\",
        \"ZW\": \"Simbabve\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/is.json";
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
        \"AE\": \"Sameinuðu arabísku furstadæmin\",
        \"AF\": \"Afganistan\",
        \"AG\": \"Antígva og Barbúda\",
        \"AI\": \"Angvilla\",
        \"AL\": \"Albanía\",
        \"AM\": \"Armenía\",
        \"AO\": \"Angóla\",
        \"AQ\": \"Suðurskautslandið\",
        \"AR\": \"Argentína\",
        \"AS\": \"Bandaríska Samóa\",
        \"AT\": \"Austurríki\",
        \"AU\": \"Ástralía\",
        \"AW\": \"Arúba\",
        \"AX\": \"Álandseyjar\",
        \"AZ\": \"Aserbaídsjan\",
        \"BA\": \"Bosnía og Hersegóvína\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladess\",
        \"BE\": \"Belgía\",
        \"BF\": \"Búrkína Fasó\",
        \"BG\": \"Búlgaría\",
        \"BH\": \"Barein\",
        \"BI\": \"Búrúndí\",
        \"BJ\": \"Benín\",
        \"BL\": \"Sankti Bartólómeusareyjar\",
        \"BM\": \"Bermúdaeyjar\",
        \"BN\": \"Brúnei\",
        \"BO\": \"Bólivía\",
        \"BQ\": \"Karíbahafshluti Hollands\",
        \"BR\": \"Brasilía\",
        \"BS\": \"Bahamaeyjar\",
        \"BT\": \"Bútan\",
        \"BV\": \"Bouveteyja\",
        \"BW\": \"Botsvana\",
        \"BY\": \"Hvíta-Rússland\",
        \"BZ\": \"Belís\",
        \"CA\": \"Kanada\",
        \"CC\": \"Kókoseyjar (Keeling)\",
        \"CD\": \"Kongó-Kinshasa\",
        \"CF\": \"Mið-Afríkulýðveldið\",
        \"CG\": \"Kongó-Brazzaville\",
        \"CH\": \"Sviss\",
        \"CI\": \"Fílabeinsströndin\",
        \"CK\": \"Cooks-eyjar\",
        \"CL\": \"Síle\",
        \"CM\": \"Kamerún\",
        \"CN\": \"Kína\",
        \"CO\": \"Kólumbía\",
        \"CR\": \"Kostaríka\",
        \"CU\": \"Kúba\",
        \"CV\": \"Grænhöfðaeyjar\",
        \"CW\": \"Curacao\",
        \"CX\": \"Jólaey\",
        \"CY\": \"Kýpur\",
        \"CZ\": \"Tékkland\",
        \"DE\": \"Þýskaland\",
        \"DJ\": \"Djíbútí\",
        \"DK\": \"Danmörk\",
        \"DM\": \"Dóminíka\",
        \"DO\": \"Dóminíska lýðveldið\",
        \"DZ\": \"Alsír\",
        \"EC\": \"Ekvador\",
        \"EE\": \"Eistland\",
        \"EG\": \"Egyptaland\",
        \"EH\": \"Vestur-Sahara\",
        \"ER\": \"Erítrea\",
        \"ES\": \"Spánn\",
        \"ET\": \"Eþíópía\",
        \"FI\": \"Finnland\",
        \"FJ\": \"Fídjíeyjar\",
        \"FK\": \"Falklandseyjar\",
        \"FM\": \"Míkrónesía\",
        \"FO\": \"Færeyjar\",
        \"FR\": \"Frakkland\",
        \"GA\": \"Gabon\",
        \"GB\": \"Bretland\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgía\",
        \"GF\": \"Franska Gvæjana\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Gana\",
        \"GI\": \"Gíbraltar\",
        \"GL\": \"Grænland\",
        \"GM\": \"Gambía\",
        \"GN\": \"Gínea\",
        \"GP\": \"Gvadelúpeyjar\",
        \"GQ\": \"Miðbaugs-Gínea\",
        \"GR\": \"Grikkland\",
        \"GS\": \"Suður-Georgía og Suður-Sandvíkureyjar\",
        \"GT\": \"Gvatemala\",
        \"GU\": \"Gvam\",
        \"GW\": \"Gínea-Bissá\",
        \"GY\": \"Gvæjana\",
        \"HK\": \"sérstjórnarsvæðið Hong Kong\",
        \"HM\": \"Heard og McDonaldseyjar\",
        \"HN\": \"Hondúras\",
        \"HR\": \"Króatía\",
        \"HT\": \"Haítí\",
        \"HU\": \"Ungverjaland\",
        \"ID\": \"Indónesía\",
        \"IE\": \"Írland\",
        \"IL\": \"Ísrael\",
        \"IM\": \"Mön\",
        \"IN\": \"Indland\",
        \"IO\": \"Bresku Indlandshafseyjar\",
        \"IQ\": \"Írak\",
        \"IR\": \"Íran\",
        \"IS\": \"Ísland\",
        \"IT\": \"Ítalía\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaíka\",
        \"JO\": \"Jórdanía\",
        \"JP\": \"Japan\",
        \"KE\": \"Kenía\",
        \"KG\": \"Kirgistan\",
        \"KH\": \"Kambódía\",
        \"KI\": \"Kíribatí\",
        \"KM\": \"Kómoreyjar\",
        \"KN\": \"Sankti Kitts og Nevis\",
        \"KP\": \"Norður-Kórea\",
        \"KR\": \"Suður-Kórea\",
        \"KW\": \"Kúveit\",
        \"KY\": \"Caymaneyjar\",
        \"KZ\": \"Kasakstan\",
        \"LA\": \"Laos\",
        \"LB\": \"Líbanon\",
        \"LC\": \"Sankti Lúsía\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Srí Lanka\",
        \"LR\": \"Líbería\",
        \"LS\": \"Lesótó\",
        \"LT\": \"Litháen\",
        \"LU\": \"Lúxemborg\",
        \"LV\": \"Lettland\",
        \"LY\": \"Líbía\",
        \"MA\": \"Marokkó\",
        \"MC\": \"Mónakó\",
        \"MD\": \"Moldóva\",
        \"ME\": \"Svartfjallaland\",
        \"MF\": \"Saint-Martin\",
        \"MG\": \"Madagaskar\",
        \"MH\": \"Marshalleyjar\",
        \"MK\": \"Norður-Makedónía\",
        \"ML\": \"Malí\",
        \"MM\": \"Mjanmar (Búrma)\",
        \"MN\": \"Mongólía\",
        \"MO\": \"sérstjórnarsvæðið Makaó\",
        \"MP\": \"Norður-Maríanaeyjar\",
        \"MQ\": \"Martiník\",
        \"MR\": \"Máritanía\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Máritíus\",
        \"MV\": \"Maldíveyjar\",
        \"MW\": \"Malaví\",
        \"MX\": \"Mexíkó\",
        \"MY\": \"Malasía\",
        \"MZ\": \"Mósambík\",
        \"NA\": \"Namibía\",
        \"NC\": \"Nýja-Kaledónía\",
        \"NE\": \"Níger\",
        \"NF\": \"Norfolkeyja\",
        \"NG\": \"Nígería\",
        \"NI\": \"Níkaragva\",
        \"NL\": \"Holland\",
        \"NO\": \"Noregur\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nárú\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nýja-Sjáland\",
        \"OM\": \"Óman\",
        \"PA\": \"Panama\",
        \"PE\": \"Perú\",
        \"PF\": \"Franska Pólýnesía\",
        \"PG\": \"Papúa Nýja-Gínea\",
        \"PH\": \"Filippseyjar\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Pólland\",
        \"PM\": \"Sankti Pierre og Miquelon\",
        \"PN\": \"Pitcairn-eyjar\",
        \"PR\": \"Púertó Ríkó\",
        \"PS\": \"Heimastjórnarsvæði Palestínumanna\",
        \"PT\": \"Portúgal\",
        \"PW\": \"Palá\",
        \"PY\": \"Paragvæ\",
        \"QA\": \"Katar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Rúmenía\",
        \"RS\": \"Serbía\",
        \"RU\": \"Rússland\",
        \"RW\": \"Rúanda\",
        \"SA\": \"Sádi-Arabía\",
        \"SB\": \"Salómonseyjar\",
        \"SC\": \"Seychelles-eyjar\",
        \"SD\": \"Súdan\",
        \"SE\": \"Svíþjóð\",
        \"SG\": \"Singapúr\",
        \"SH\": \"Sankti Helena\",
        \"SI\": \"Slóvenía\",
        \"SJ\": \"Svalbarði og Jan Mayen\",
        \"SK\": \"Slóvakía\",
        \"SL\": \"Síerra Leóne\",
        \"SM\": \"San Marínó\",
        \"SN\": \"Senegal\",
        \"SO\": \"Sómalía\",
        \"SR\": \"Súrínam\",
        \"SS\": \"Suður-Súdan\",
        \"ST\": \"Saó Tóme og Prinsípe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sankti Martin\",
        \"SY\": \"Sýrland\",
        \"SZ\": \"Svasíland\",
        \"TC\": \"Turks- og Caicoseyjar\",
        \"TD\": \"Tsjad\",
        \"TF\": \"Frönsku suðlægu landsvæðin\",
        \"TG\": \"Tógó\",
        \"TH\": \"Taíland\",
        \"TJ\": \"Tadsjikistan\",
        \"TK\": \"Tókelá\",
        \"TL\": \"Tímor-Leste\",
        \"TM\": \"Túrkmenistan\",
        \"TN\": \"Túnis\",
        \"TO\": \"Tonga\",
        \"TR\": \"Tyrkland\",
        \"TT\": \"Trínidad og Tóbagó\",
        \"TV\": \"Túvalú\",
        \"TW\": \"Taívan\",
        \"TZ\": \"Tansanía\",
        \"UA\": \"Úkraína\",
        \"UG\": \"Úganda\",
        \"UM\": \"Smáeyjar Bandaríkjanna\",
        \"US\": \"Bandaríkin\",
        \"UY\": \"Úrúgvæ\",
        \"UZ\": \"Úsbekistan\",
        \"VA\": \"Vatíkanið\",
        \"VC\": \"Sankti Vinsent og Grenadíneyjar\",
        \"VE\": \"Venesúela\",
        \"VG\": \"Bresku Jómfrúaeyjar\",
        \"VI\": \"Bandarísku Jómfrúaeyjar\",
        \"VN\": \"Víetnam\",
        \"VU\": \"Vanúatú\",
        \"WF\": \"Wallis- og Fútúnaeyjar\",
        \"WS\": \"Samóa\",
        \"YE\": \"Jemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Suður-Afríka\",
        \"ZM\": \"Sambía\",
        \"ZW\": \"Simbabve\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/is.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/is.json");
    }
}
