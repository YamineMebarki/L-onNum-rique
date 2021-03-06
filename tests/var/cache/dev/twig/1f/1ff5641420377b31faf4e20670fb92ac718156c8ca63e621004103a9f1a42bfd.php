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

/* vendor/symfony/intl/Resources/data/regions/bm.json */
class __TwigTemplate_d237855b6a15ca9cad207140906be92086bb8be82c73ed97e05baaed065945ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/bm.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/bm.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andɔr\",
        \"AE\": \"Arabu mara kafoli\",
        \"AF\": \"Afiganistaŋ\",
        \"AG\": \"Antiga-ni-Barbuda\",
        \"AI\": \"Angiya\",
        \"AL\": \"Alibani\",
        \"AM\": \"Arimeni\",
        \"AO\": \"Angola\",
        \"AR\": \"Arizantin\",
        \"AS\": \"Samowa amerikani\",
        \"AT\": \"Otirisi\",
        \"AU\": \"Ositirali\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azɛrbayjaŋ\",
        \"BA\": \"Bozni-Ɛrizigovini\",
        \"BB\": \"Barbadi\",
        \"BD\": \"Bɛngiladɛsi\",
        \"BE\": \"Bɛliziki\",
        \"BF\": \"Burukina Faso\",
        \"BG\": \"Buligari\",
        \"BH\": \"Bareyini\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benɛn\",
        \"BM\": \"Bermudi\",
        \"BN\": \"Burinɛyi\",
        \"BO\": \"Bolivi\",
        \"BR\": \"Berezili\",
        \"BS\": \"Bahamasi\",
        \"BT\": \"Butaŋ\",
        \"BW\": \"Bɔtisiwana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belizi\",
        \"CA\": \"Kanada\",
        \"CD\": \"Kongo ka republiki demɔkratiki\",
        \"CF\": \"Santarafiriki\",
        \"CG\": \"Kongo\",
        \"CH\": \"Suwisi\",
        \"CI\": \"Kodiwari\",
        \"CK\": \"Kuki Gun\",
        \"CL\": \"Sili\",
        \"CM\": \"Kameruni\",
        \"CN\": \"Siniwajamana\",
        \"CO\": \"Kolombi\",
        \"CR\": \"Kɔsitarika\",
        \"CU\": \"Kuba\",
        \"CV\": \"Capivɛrdi\",
        \"CY\": \"Cipri\",
        \"CZ\": \"Ceki republiki\",
        \"DE\": \"Alimaɲi\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Danemarki\",
        \"DM\": \"Dɔminiki\",
        \"DO\": \"Dɔmimiki republiki\",
        \"DZ\": \"Alizeri\",
        \"EC\": \"Ekwatɔr\",
        \"EE\": \"Esetoni\",
        \"EG\": \"Eziputi\",
        \"ER\": \"Eritere\",
        \"ES\": \"Esipaɲi\",
        \"ET\": \"Etiopi\",
        \"FI\": \"Finilandi\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Maluwini Gun\",
        \"FM\": \"Mikironesi\",
        \"FR\": \"Faransi\",
        \"GA\": \"Gabɔŋ\",
        \"GB\": \"Angilɛtɛri\",
        \"GD\": \"Granadi\",
        \"GE\": \"Zeyɔrzi\",
        \"GF\": \"Faransi ka gwiyani\",
        \"GH\": \"Gana\",
        \"GI\": \"Zibralitari\",
        \"GL\": \"Gɔrɔhenelandi\",
        \"GM\": \"Ganbi\",
        \"GN\": \"Gine\",
        \"GP\": \"Gwadelup\",
        \"GQ\": \"Gine ekwatɔri\",
        \"GR\": \"Gɛrɛsi\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwam\",
        \"GW\": \"Gine Bisawo\",
        \"GY\": \"Gwiyana\",
        \"HN\": \"Hɔndirasi\",
        \"HR\": \"Kroasi\",
        \"HT\": \"Ayiti\",
        \"HU\": \"Hɔngri\",
        \"ID\": \"Ɛndonezi\",
        \"IE\": \"Irilandi\",
        \"IL\": \"Isirayeli\",
        \"IN\": \"Ɛndujamana\",
        \"IO\": \"Angilɛ ka ɛndu dugukolo\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Iraŋ\",
        \"IS\": \"Isilandi\",
        \"IT\": \"Itali\",
        \"JM\": \"Zamayiki\",
        \"JO\": \"Zɔrdani\",
        \"JP\": \"Zapɔn\",
        \"KE\": \"Keniya\",
        \"KG\": \"Kirigizisitaŋ\",
        \"KH\": \"Kamboji\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komɔri\",
        \"KN\": \"Kristɔfo-Senu-ni-Ɲevɛs\",
        \"KP\": \"Kɛɲɛka Kore\",
        \"KR\": \"Worodugu Kore\",
        \"KW\": \"Kowɛti\",
        \"KY\": \"Bama Gun\",
        \"KZ\": \"Kazakistaŋ\",
        \"LA\": \"Layosi\",
        \"LB\": \"Libaŋ\",
        \"LC\": \"Lusi-Senu\",
        \"LI\": \"Lisɛnsitayini\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberiya\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituyani\",
        \"LU\": \"Likisanburu\",
        \"LV\": \"Letoni\",
        \"LY\": \"Libi\",
        \"MA\": \"Marɔku\",
        \"MC\": \"Monako\",
        \"MD\": \"Molidavi\",
        \"MG\": \"Madagasikari\",
        \"MH\": \"Marisali Gun\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanimari\",
        \"MN\": \"Moŋoli\",
        \"MP\": \"Kɛɲɛka Mariyani Gun\",
        \"MQ\": \"Maritiniki\",
        \"MR\": \"Mɔritani\",
        \"MS\": \"Moŋsera\",
        \"MT\": \"Malti\",
        \"MU\": \"Morisi\",
        \"MV\": \"Maldivi\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiki\",
        \"MY\": \"Malɛzi\",
        \"MZ\": \"Mozanbiki\",
        \"NA\": \"Namibi\",
        \"NC\": \"Kaledoni Koura\",
        \"NE\": \"Nizɛri\",
        \"NF\": \"Nɔrofoliki Gun\",
        \"NG\": \"Nizeriya\",
        \"NI\": \"Nikaragwa\",
        \"NL\": \"Peyiba\",
        \"NO\": \"Nɔriwɛzi\",
        \"NP\": \"Nepali\",
        \"NR\": \"Nawuru\",
        \"NU\": \"Nyuwe\",
        \"NZ\": \"Zelandi Koura\",
        \"OM\": \"Omaŋ\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Faransi ka polinezi\",
        \"PG\": \"Papuwasi-Gine-Koura\",
        \"PH\": \"Filipini\",
        \"PK\": \"Pakisitaŋ\",
        \"PL\": \"Poloɲi\",
        \"PM\": \"Piyɛri-Senu-ni-Mikelɔŋ\",
        \"PN\": \"Pitikarini\",
        \"PR\": \"Pɔrotoriko\",
        \"PS\": \"Palesitini\",
        \"PT\": \"Pɔritigali\",
        \"PW\": \"Palawu\",
        \"PY\": \"Paraguwayi\",
        \"QA\": \"Katari\",
        \"RE\": \"Reyuɲɔŋ\",
        \"RO\": \"Rumani\",
        \"RU\": \"Irisi\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Arabiya Sawudiya\",
        \"SB\": \"Salomo Gun\",
        \"SC\": \"Sesɛli\",
        \"SD\": \"Sudaŋ\",
        \"SE\": \"Suwɛdi\",
        \"SG\": \"Sɛngapuri\",
        \"SH\": \"Ɛlɛni Senu\",
        \"SI\": \"Sloveni\",
        \"SK\": \"Slowaki\",
        \"SL\": \"Siyera Lewɔni\",
        \"SM\": \"Marini-Senu\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somali\",
        \"SR\": \"Surinami\",
        \"ST\": \"Sawo Tome-ni-Prinicipe\",
        \"SV\": \"Salivadɔr\",
        \"SY\": \"Siri\",
        \"SZ\": \"Swazilandi\",
        \"TC\": \"Turiki Gun ni Kayiki\",
        \"TD\": \"Cadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayilandi\",
        \"TJ\": \"Tajikisitani\",
        \"TK\": \"Tokelo\",
        \"TL\": \"Kɔrɔn Timɔr\",
        \"TM\": \"Turikimenisitani\",
        \"TN\": \"Tunizi\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turiki\",
        \"TT\": \"Trinite-ni-Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayiwani\",
        \"TZ\": \"Tanzani\",
        \"UA\": \"Ukɛrɛni\",
        \"UG\": \"Uganda\",
        \"US\": \"Ameriki\",
        \"UY\": \"Urugwayi\",
        \"UZ\": \"Uzebekisitani\",
        \"VA\": \"Vatikaŋ\",
        \"VC\": \"Vinisɛn-Senu-ni-Grenadini\",
        \"VE\": \"Venezuwela\",
        \"VG\": \"Angilɛ ka Sungurunnin Gun\",
        \"VI\": \"Ameriki ka Sungurunnin Gun\",
        \"VN\": \"Wiyɛtinamu\",
        \"VU\": \"Vanuwatu\",
        \"WF\": \"Walisi-ni-Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemɛni\",
        \"YT\": \"Mayoti\",
        \"ZA\": \"Worodugu Afriki\",
        \"ZM\": \"Zanbi\",
        \"ZW\": \"Zimbabuwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/bm.json";
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
        \"AD\": \"Andɔr\",
        \"AE\": \"Arabu mara kafoli\",
        \"AF\": \"Afiganistaŋ\",
        \"AG\": \"Antiga-ni-Barbuda\",
        \"AI\": \"Angiya\",
        \"AL\": \"Alibani\",
        \"AM\": \"Arimeni\",
        \"AO\": \"Angola\",
        \"AR\": \"Arizantin\",
        \"AS\": \"Samowa amerikani\",
        \"AT\": \"Otirisi\",
        \"AU\": \"Ositirali\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azɛrbayjaŋ\",
        \"BA\": \"Bozni-Ɛrizigovini\",
        \"BB\": \"Barbadi\",
        \"BD\": \"Bɛngiladɛsi\",
        \"BE\": \"Bɛliziki\",
        \"BF\": \"Burukina Faso\",
        \"BG\": \"Buligari\",
        \"BH\": \"Bareyini\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benɛn\",
        \"BM\": \"Bermudi\",
        \"BN\": \"Burinɛyi\",
        \"BO\": \"Bolivi\",
        \"BR\": \"Berezili\",
        \"BS\": \"Bahamasi\",
        \"BT\": \"Butaŋ\",
        \"BW\": \"Bɔtisiwana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belizi\",
        \"CA\": \"Kanada\",
        \"CD\": \"Kongo ka republiki demɔkratiki\",
        \"CF\": \"Santarafiriki\",
        \"CG\": \"Kongo\",
        \"CH\": \"Suwisi\",
        \"CI\": \"Kodiwari\",
        \"CK\": \"Kuki Gun\",
        \"CL\": \"Sili\",
        \"CM\": \"Kameruni\",
        \"CN\": \"Siniwajamana\",
        \"CO\": \"Kolombi\",
        \"CR\": \"Kɔsitarika\",
        \"CU\": \"Kuba\",
        \"CV\": \"Capivɛrdi\",
        \"CY\": \"Cipri\",
        \"CZ\": \"Ceki republiki\",
        \"DE\": \"Alimaɲi\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Danemarki\",
        \"DM\": \"Dɔminiki\",
        \"DO\": \"Dɔmimiki republiki\",
        \"DZ\": \"Alizeri\",
        \"EC\": \"Ekwatɔr\",
        \"EE\": \"Esetoni\",
        \"EG\": \"Eziputi\",
        \"ER\": \"Eritere\",
        \"ES\": \"Esipaɲi\",
        \"ET\": \"Etiopi\",
        \"FI\": \"Finilandi\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Maluwini Gun\",
        \"FM\": \"Mikironesi\",
        \"FR\": \"Faransi\",
        \"GA\": \"Gabɔŋ\",
        \"GB\": \"Angilɛtɛri\",
        \"GD\": \"Granadi\",
        \"GE\": \"Zeyɔrzi\",
        \"GF\": \"Faransi ka gwiyani\",
        \"GH\": \"Gana\",
        \"GI\": \"Zibralitari\",
        \"GL\": \"Gɔrɔhenelandi\",
        \"GM\": \"Ganbi\",
        \"GN\": \"Gine\",
        \"GP\": \"Gwadelup\",
        \"GQ\": \"Gine ekwatɔri\",
        \"GR\": \"Gɛrɛsi\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwam\",
        \"GW\": \"Gine Bisawo\",
        \"GY\": \"Gwiyana\",
        \"HN\": \"Hɔndirasi\",
        \"HR\": \"Kroasi\",
        \"HT\": \"Ayiti\",
        \"HU\": \"Hɔngri\",
        \"ID\": \"Ɛndonezi\",
        \"IE\": \"Irilandi\",
        \"IL\": \"Isirayeli\",
        \"IN\": \"Ɛndujamana\",
        \"IO\": \"Angilɛ ka ɛndu dugukolo\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Iraŋ\",
        \"IS\": \"Isilandi\",
        \"IT\": \"Itali\",
        \"JM\": \"Zamayiki\",
        \"JO\": \"Zɔrdani\",
        \"JP\": \"Zapɔn\",
        \"KE\": \"Keniya\",
        \"KG\": \"Kirigizisitaŋ\",
        \"KH\": \"Kamboji\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komɔri\",
        \"KN\": \"Kristɔfo-Senu-ni-Ɲevɛs\",
        \"KP\": \"Kɛɲɛka Kore\",
        \"KR\": \"Worodugu Kore\",
        \"KW\": \"Kowɛti\",
        \"KY\": \"Bama Gun\",
        \"KZ\": \"Kazakistaŋ\",
        \"LA\": \"Layosi\",
        \"LB\": \"Libaŋ\",
        \"LC\": \"Lusi-Senu\",
        \"LI\": \"Lisɛnsitayini\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberiya\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Lituyani\",
        \"LU\": \"Likisanburu\",
        \"LV\": \"Letoni\",
        \"LY\": \"Libi\",
        \"MA\": \"Marɔku\",
        \"MC\": \"Monako\",
        \"MD\": \"Molidavi\",
        \"MG\": \"Madagasikari\",
        \"MH\": \"Marisali Gun\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanimari\",
        \"MN\": \"Moŋoli\",
        \"MP\": \"Kɛɲɛka Mariyani Gun\",
        \"MQ\": \"Maritiniki\",
        \"MR\": \"Mɔritani\",
        \"MS\": \"Moŋsera\",
        \"MT\": \"Malti\",
        \"MU\": \"Morisi\",
        \"MV\": \"Maldivi\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiki\",
        \"MY\": \"Malɛzi\",
        \"MZ\": \"Mozanbiki\",
        \"NA\": \"Namibi\",
        \"NC\": \"Kaledoni Koura\",
        \"NE\": \"Nizɛri\",
        \"NF\": \"Nɔrofoliki Gun\",
        \"NG\": \"Nizeriya\",
        \"NI\": \"Nikaragwa\",
        \"NL\": \"Peyiba\",
        \"NO\": \"Nɔriwɛzi\",
        \"NP\": \"Nepali\",
        \"NR\": \"Nawuru\",
        \"NU\": \"Nyuwe\",
        \"NZ\": \"Zelandi Koura\",
        \"OM\": \"Omaŋ\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Faransi ka polinezi\",
        \"PG\": \"Papuwasi-Gine-Koura\",
        \"PH\": \"Filipini\",
        \"PK\": \"Pakisitaŋ\",
        \"PL\": \"Poloɲi\",
        \"PM\": \"Piyɛri-Senu-ni-Mikelɔŋ\",
        \"PN\": \"Pitikarini\",
        \"PR\": \"Pɔrotoriko\",
        \"PS\": \"Palesitini\",
        \"PT\": \"Pɔritigali\",
        \"PW\": \"Palawu\",
        \"PY\": \"Paraguwayi\",
        \"QA\": \"Katari\",
        \"RE\": \"Reyuɲɔŋ\",
        \"RO\": \"Rumani\",
        \"RU\": \"Irisi\",
        \"RW\": \"Ruwanda\",
        \"SA\": \"Arabiya Sawudiya\",
        \"SB\": \"Salomo Gun\",
        \"SC\": \"Sesɛli\",
        \"SD\": \"Sudaŋ\",
        \"SE\": \"Suwɛdi\",
        \"SG\": \"Sɛngapuri\",
        \"SH\": \"Ɛlɛni Senu\",
        \"SI\": \"Sloveni\",
        \"SK\": \"Slowaki\",
        \"SL\": \"Siyera Lewɔni\",
        \"SM\": \"Marini-Senu\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somali\",
        \"SR\": \"Surinami\",
        \"ST\": \"Sawo Tome-ni-Prinicipe\",
        \"SV\": \"Salivadɔr\",
        \"SY\": \"Siri\",
        \"SZ\": \"Swazilandi\",
        \"TC\": \"Turiki Gun ni Kayiki\",
        \"TD\": \"Cadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tayilandi\",
        \"TJ\": \"Tajikisitani\",
        \"TK\": \"Tokelo\",
        \"TL\": \"Kɔrɔn Timɔr\",
        \"TM\": \"Turikimenisitani\",
        \"TN\": \"Tunizi\",
        \"TO\": \"Tonga\",
        \"TR\": \"Turiki\",
        \"TT\": \"Trinite-ni-Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Tayiwani\",
        \"TZ\": \"Tanzani\",
        \"UA\": \"Ukɛrɛni\",
        \"UG\": \"Uganda\",
        \"US\": \"Ameriki\",
        \"UY\": \"Urugwayi\",
        \"UZ\": \"Uzebekisitani\",
        \"VA\": \"Vatikaŋ\",
        \"VC\": \"Vinisɛn-Senu-ni-Grenadini\",
        \"VE\": \"Venezuwela\",
        \"VG\": \"Angilɛ ka Sungurunnin Gun\",
        \"VI\": \"Ameriki ka Sungurunnin Gun\",
        \"VN\": \"Wiyɛtinamu\",
        \"VU\": \"Vanuwatu\",
        \"WF\": \"Walisi-ni-Futuna\",
        \"WS\": \"Samowa\",
        \"YE\": \"Yemɛni\",
        \"YT\": \"Mayoti\",
        \"ZA\": \"Worodugu Afriki\",
        \"ZM\": \"Zanbi\",
        \"ZW\": \"Zimbabuwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/bm.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/bm.json");
    }
}
