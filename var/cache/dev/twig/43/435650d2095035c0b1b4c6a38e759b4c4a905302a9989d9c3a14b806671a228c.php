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

/* vendor/symfony/intl/Resources/data/regions/ki.json */
class __TwigTemplate_e8d5d2ea5808dfe24d37462b76400efee7a0cd6135f854a5984cc29b4ca9d393 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ki.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ki.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andora\",
        \"AE\": \"Falme za Kiarabu\",
        \"AF\": \"Afuganistani\",
        \"AG\": \"Antigua na Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AR\": \"Ajentina\",
        \"AS\": \"Samoa ya Marekani\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azabajani\",
        \"BA\": \"Bosnia na Hezegovina\",
        \"BB\": \"Babadosi\",
        \"BD\": \"Bangladeshi\",
        \"BE\": \"Ubelgiji\",
        \"BF\": \"Bukinafaso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahareni\",
        \"BI\": \"Mburundi\",
        \"BJ\": \"Benini\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BR\": \"Brazili\",
        \"BS\": \"Bahama\",
        \"BT\": \"Butani\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CD\": \"Jamhuri ya Kidemokrasia ya Kongo\",
        \"CF\": \"Jamhuri ya Afrika ya Kati\",
        \"CG\": \"Kongo\",
        \"CH\": \"Uswisi\",
        \"CI\": \"Kodivaa\",
        \"CK\": \"Visiwa vya Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Kameruni\",
        \"CN\": \"Caina\",
        \"CO\": \"Kolombia\",
        \"CR\": \"Kostarika\",
        \"CU\": \"Kiumba\",
        \"CV\": \"Kepuvede\",
        \"CY\": \"Kuprosi\",
        \"CZ\": \"Jamhuri ya Cheki\",
        \"DE\": \"Njeremani\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Denmaki\",
        \"DM\": \"Dominika\",
        \"DO\": \"Jamhuri ya Dominika\",
        \"DZ\": \"Aljeria\",
        \"EC\": \"Ekwado\",
        \"EE\": \"Estonia\",
        \"EG\": \"Misri\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Hispania\",
        \"ET\": \"Uhabeshi\",
        \"FI\": \"Ufini\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Visiwa vya Falkland\",
        \"FM\": \"Mikronesia\",
        \"FR\": \"Ubaranja\",
        \"GA\": \"Gaboni\",
        \"GB\": \"Ngeretha\",
        \"GD\": \"Grenada\",
        \"GE\": \"Jojia\",
        \"GF\": \"Gwiyana ya Ufaransa\",
        \"GH\": \"Ngana\",
        \"GI\": \"Jibralta\",
        \"GL\": \"Grinlandi\",
        \"GM\": \"Gambia\",
        \"GN\": \"Gine\",
        \"GP\": \"Gwadelupe\",
        \"GQ\": \"Ginekweta\",
        \"GR\": \"Ugiriki\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwam\",
        \"GW\": \"Ginebisau\",
        \"GY\": \"Guyana\",
        \"HN\": \"Hondurasi\",
        \"HR\": \"Korasia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungaria\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Ayalandi\",
        \"IL\": \"Israeli\",
        \"IN\": \"India\",
        \"IO\": \"Eneo la Uingereza katika Bahari Hindi\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Uajemi\",
        \"IS\": \"Aislandi\",
        \"IT\": \"Italia\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Njorondani\",
        \"JP\": \"Njabani\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirigizistani\",
        \"KH\": \"Kambodia\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoro\",
        \"KN\": \"Santakitzi na Nevis\",
        \"KP\": \"Korea Kaskazini\",
        \"KR\": \"Korea Kusini\",
        \"KW\": \"Kuwaiti\",
        \"KY\": \"Visiwa vya Kayman\",
        \"KZ\": \"Kazakistani\",
        \"LA\": \"Laosi\",
        \"LB\": \"Lebanoni\",
        \"LC\": \"Santalusia\",
        \"LI\": \"Lishenteni\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Litwania\",
        \"LU\": \"Lasembagi\",
        \"LV\": \"Lativia\",
        \"LY\": \"Libya\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"MG\": \"Bukini\",
        \"MH\": \"Visiwa vya Marshal\",
        \"ML\": \"Mali\",
        \"MM\": \"Myama\",
        \"MN\": \"Mongolia\",
        \"MP\": \"Visiwa vya Mariana vya Kaskazini\",
        \"MQ\": \"Martiniki\",
        \"MR\": \"Moritania\",
        \"MS\": \"Montserrati\",
        \"MT\": \"Malta\",
        \"MU\": \"Morisi\",
        \"MV\": \"Modivu\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malesia\",
        \"MZ\": \"Msumbiji\",
        \"NA\": \"Namimbia\",
        \"NC\": \"Nyukaledonia\",
        \"NE\": \"Nijeri\",
        \"NF\": \"Kisiwa cha Norfok\",
        \"NG\": \"Nainjeria\",
        \"NI\": \"Nikaragwa\",
        \"NL\": \"Uholanzi\",
        \"NO\": \"Norwe\",
        \"NP\": \"Nepali\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nyuzilandi\",
        \"OM\": \"Omani\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesia ya Ufaransa\",
        \"PG\": \"Papua\",
        \"PH\": \"Filipino\",
        \"PK\": \"Pakistani\",
        \"PL\": \"Polandi\",
        \"PM\": \"Santapieri na Mikeloni\",
        \"PN\": \"Pitkairni\",
        \"PR\": \"Pwetoriko\",
        \"PS\": \"Ukingo wa Magharibi na Ukanda wa Gaza wa Palestina\",
        \"PT\": \"Ureno\",
        \"PW\": \"Palau\",
        \"PY\": \"Paragwai\",
        \"QA\": \"Katari\",
        \"RE\": \"Riyunioni\",
        \"RO\": \"Romania\",
        \"RU\": \"Urusi\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi\",
        \"SB\": \"Visiwa vya Solomon\",
        \"SC\": \"Shelisheli\",
        \"SD\": \"Sudani\",
        \"SE\": \"Uswidi\",
        \"SG\": \"Singapoo\",
        \"SH\": \"Santahelena\",
        \"SI\": \"Slovenia\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Siera Leoni\",
        \"SM\": \"Samarino\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somaria\",
        \"SR\": \"Surinamu\",
        \"ST\": \"Sao Tome na Principe\",
        \"SV\": \"Elsavado\",
        \"SY\": \"Siria\",
        \"SZ\": \"Uswazi\",
        \"TC\": \"Visiwa vya Turki na Kaiko\",
        \"TD\": \"Chadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailandi\",
        \"TJ\": \"Tajikistani\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timori ya Mashariki\",
        \"TM\": \"Turukimenistani\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Uturuki\",
        \"TT\": \"Trinidad na Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwani\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraini\",
        \"UG\": \"Uganda\",
        \"US\": \"Amerika\",
        \"UY\": \"Urugwai\",
        \"UZ\": \"Uzibekistani\",
        \"VA\": \"Vatikani\",
        \"VC\": \"Santavisenti na Grenadini\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Visiwa vya Virgin vya Uingereza\",
        \"VI\": \"Visiwa vya Virgin vya Marekani\",
        \"VN\": \"Vietinamu\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Walis na Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afrika Kusini\",
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
        return "vendor/symfony/intl/Resources/data/regions/ki.json";
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
        \"AE\": \"Falme za Kiarabu\",
        \"AF\": \"Afuganistani\",
        \"AG\": \"Antigua na Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AR\": \"Ajentina\",
        \"AS\": \"Samoa ya Marekani\",
        \"AT\": \"Austria\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AZ\": \"Azabajani\",
        \"BA\": \"Bosnia na Hezegovina\",
        \"BB\": \"Babadosi\",
        \"BD\": \"Bangladeshi\",
        \"BE\": \"Ubelgiji\",
        \"BF\": \"Bukinafaso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahareni\",
        \"BI\": \"Mburundi\",
        \"BJ\": \"Benini\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BR\": \"Brazili\",
        \"BS\": \"Bahama\",
        \"BT\": \"Butani\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarusi\",
        \"BZ\": \"Belize\",
        \"CA\": \"Kanada\",
        \"CD\": \"Jamhuri ya Kidemokrasia ya Kongo\",
        \"CF\": \"Jamhuri ya Afrika ya Kati\",
        \"CG\": \"Kongo\",
        \"CH\": \"Uswisi\",
        \"CI\": \"Kodivaa\",
        \"CK\": \"Visiwa vya Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Kameruni\",
        \"CN\": \"Caina\",
        \"CO\": \"Kolombia\",
        \"CR\": \"Kostarika\",
        \"CU\": \"Kiumba\",
        \"CV\": \"Kepuvede\",
        \"CY\": \"Kuprosi\",
        \"CZ\": \"Jamhuri ya Cheki\",
        \"DE\": \"Njeremani\",
        \"DJ\": \"Jibuti\",
        \"DK\": \"Denmaki\",
        \"DM\": \"Dominika\",
        \"DO\": \"Jamhuri ya Dominika\",
        \"DZ\": \"Aljeria\",
        \"EC\": \"Ekwado\",
        \"EE\": \"Estonia\",
        \"EG\": \"Misri\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Hispania\",
        \"ET\": \"Uhabeshi\",
        \"FI\": \"Ufini\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Visiwa vya Falkland\",
        \"FM\": \"Mikronesia\",
        \"FR\": \"Ubaranja\",
        \"GA\": \"Gaboni\",
        \"GB\": \"Ngeretha\",
        \"GD\": \"Grenada\",
        \"GE\": \"Jojia\",
        \"GF\": \"Gwiyana ya Ufaransa\",
        \"GH\": \"Ngana\",
        \"GI\": \"Jibralta\",
        \"GL\": \"Grinlandi\",
        \"GM\": \"Gambia\",
        \"GN\": \"Gine\",
        \"GP\": \"Gwadelupe\",
        \"GQ\": \"Ginekweta\",
        \"GR\": \"Ugiriki\",
        \"GT\": \"Gwatemala\",
        \"GU\": \"Gwam\",
        \"GW\": \"Ginebisau\",
        \"GY\": \"Guyana\",
        \"HN\": \"Hondurasi\",
        \"HR\": \"Korasia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungaria\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Ayalandi\",
        \"IL\": \"Israeli\",
        \"IN\": \"India\",
        \"IO\": \"Eneo la Uingereza katika Bahari Hindi\",
        \"IQ\": \"Iraki\",
        \"IR\": \"Uajemi\",
        \"IS\": \"Aislandi\",
        \"IT\": \"Italia\",
        \"JM\": \"Jamaika\",
        \"JO\": \"Njorondani\",
        \"JP\": \"Njabani\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kirigizistani\",
        \"KH\": \"Kambodia\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Komoro\",
        \"KN\": \"Santakitzi na Nevis\",
        \"KP\": \"Korea Kaskazini\",
        \"KR\": \"Korea Kusini\",
        \"KW\": \"Kuwaiti\",
        \"KY\": \"Visiwa vya Kayman\",
        \"KZ\": \"Kazakistani\",
        \"LA\": \"Laosi\",
        \"LB\": \"Lebanoni\",
        \"LC\": \"Santalusia\",
        \"LI\": \"Lishenteni\",
        \"LK\": \"Sirilanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesoto\",
        \"LT\": \"Litwania\",
        \"LU\": \"Lasembagi\",
        \"LV\": \"Lativia\",
        \"LY\": \"Libya\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MD\": \"Moldova\",
        \"MG\": \"Bukini\",
        \"MH\": \"Visiwa vya Marshal\",
        \"ML\": \"Mali\",
        \"MM\": \"Myama\",
        \"MN\": \"Mongolia\",
        \"MP\": \"Visiwa vya Mariana vya Kaskazini\",
        \"MQ\": \"Martiniki\",
        \"MR\": \"Moritania\",
        \"MS\": \"Montserrati\",
        \"MT\": \"Malta\",
        \"MU\": \"Morisi\",
        \"MV\": \"Modivu\",
        \"MW\": \"Malawi\",
        \"MX\": \"Meksiko\",
        \"MY\": \"Malesia\",
        \"MZ\": \"Msumbiji\",
        \"NA\": \"Namimbia\",
        \"NC\": \"Nyukaledonia\",
        \"NE\": \"Nijeri\",
        \"NF\": \"Kisiwa cha Norfok\",
        \"NG\": \"Nainjeria\",
        \"NI\": \"Nikaragwa\",
        \"NL\": \"Uholanzi\",
        \"NO\": \"Norwe\",
        \"NP\": \"Nepali\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"Nyuzilandi\",
        \"OM\": \"Omani\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polinesia ya Ufaransa\",
        \"PG\": \"Papua\",
        \"PH\": \"Filipino\",
        \"PK\": \"Pakistani\",
        \"PL\": \"Polandi\",
        \"PM\": \"Santapieri na Mikeloni\",
        \"PN\": \"Pitkairni\",
        \"PR\": \"Pwetoriko\",
        \"PS\": \"Ukingo wa Magharibi na Ukanda wa Gaza wa Palestina\",
        \"PT\": \"Ureno\",
        \"PW\": \"Palau\",
        \"PY\": \"Paragwai\",
        \"QA\": \"Katari\",
        \"RE\": \"Riyunioni\",
        \"RO\": \"Romania\",
        \"RU\": \"Urusi\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Saudi\",
        \"SB\": \"Visiwa vya Solomon\",
        \"SC\": \"Shelisheli\",
        \"SD\": \"Sudani\",
        \"SE\": \"Uswidi\",
        \"SG\": \"Singapoo\",
        \"SH\": \"Santahelena\",
        \"SI\": \"Slovenia\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Siera Leoni\",
        \"SM\": \"Samarino\",
        \"SN\": \"Senegali\",
        \"SO\": \"Somaria\",
        \"SR\": \"Surinamu\",
        \"ST\": \"Sao Tome na Principe\",
        \"SV\": \"Elsavado\",
        \"SY\": \"Siria\",
        \"SZ\": \"Uswazi\",
        \"TC\": \"Visiwa vya Turki na Kaiko\",
        \"TD\": \"Chadi\",
        \"TG\": \"Togo\",
        \"TH\": \"Tailandi\",
        \"TJ\": \"Tajikistani\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timori ya Mashariki\",
        \"TM\": \"Turukimenistani\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Uturuki\",
        \"TT\": \"Trinidad na Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Taiwani\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraini\",
        \"UG\": \"Uganda\",
        \"US\": \"Amerika\",
        \"UY\": \"Urugwai\",
        \"UZ\": \"Uzibekistani\",
        \"VA\": \"Vatikani\",
        \"VC\": \"Santavisenti na Grenadini\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Visiwa vya Virgin vya Uingereza\",
        \"VI\": \"Visiwa vya Virgin vya Marekani\",
        \"VN\": \"Vietinamu\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Walis na Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemeni\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Afrika Kusini\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/ki.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/ki.json");
    }
}
