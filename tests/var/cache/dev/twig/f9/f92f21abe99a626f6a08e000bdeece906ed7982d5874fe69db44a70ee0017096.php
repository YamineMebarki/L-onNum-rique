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

/* vendor/symfony/intl/Resources/data/scripts/uk.json */
class __TwigTemplate_7892d383b51ac5f0582429482b5de3cabf101311087f15e08dadad8530314af6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/uk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/uk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Adlm\": \"адлам\",
        \"Afak\": \"афака\",
        \"Aghb\": \"кавказька албанська\",
        \"Ahom\": \"ахом\",
        \"Arab\": \"арабиця\",
        \"Armi\": \"армі\",
        \"Armn\": \"вірменська\",
        \"Avst\": \"авестійський\",
        \"Bali\": \"балійський\",
        \"Bamu\": \"бамум\",
        \"Bass\": \"басса\",
        \"Batk\": \"батак\",
        \"Beng\": \"бенгальська\",
        \"Blis\": \"символи Блісса\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"брахмі\",
        \"Brai\": \"шрифт Брайля\",
        \"Bugi\": \"бугійський\",
        \"Buhd\": \"бухід\",
        \"Cakm\": \"чакма\",
        \"Cans\": \"уніфіковані символи канадських тубільців\",
        \"Cari\": \"каріанський\",
        \"Cham\": \"хамітський\",
        \"Cher\": \"черокі\",
        \"Cirt\": \"кирт\",
        \"Copt\": \"коптський\",
        \"Cprt\": \"кіпрський\",
        \"Cyrl\": \"кирилиця\",
        \"Cyrs\": \"давньоцерковнословʼянський\",
        \"Deva\": \"деванагарі\",
        \"Dsrt\": \"дезерет\",
        \"Egyd\": \"єгипетський демотичний\",
        \"Egyh\": \"єгипетський ієратичний\",
        \"Egyp\": \"єгипетський ієрогліфічний\",
        \"Ethi\": \"ефіопська\",
        \"Geok\": \"кхутсурі\",
        \"Geor\": \"грузинська\",
        \"Glag\": \"глаголичний\",
        \"Goth\": \"готичний\",
        \"Grek\": \"грецька\",
        \"Gujr\": \"гуджараті\",
        \"Guru\": \"гурмухі\",
        \"Hanb\": \"хань\",
        \"Hang\": \"хангиль\",
        \"Hani\": \"китайська\",
        \"Hano\": \"хануну\",
        \"Hans\": \"спрощена\",
        \"Hant\": \"традиційна\",
        \"Hebr\": \"іврит\",
        \"Hira\": \"хірагана\",
        \"Hmng\": \"пахау хмонг\",
        \"Hrkt\": \"японські силабарії\",
        \"Hung\": \"давньоугорський\",
        \"Inds\": \"харапський\",
        \"Ital\": \"давньоіталійський\",
        \"Jamo\": \"чамо\",
        \"Java\": \"яванський\",
        \"Jpan\": \"японська\",
        \"Kali\": \"кая лі\",
        \"Kana\": \"катакана\",
        \"Khar\": \"кхароштхі\",
        \"Khmr\": \"кхмерська\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корейська\",
        \"Kthi\": \"каїті\",
        \"Lana\": \"ланна\",
        \"Laoo\": \"лаоська\",
        \"Latf\": \"латинський фрактурний\",
        \"Latg\": \"латинський гельський\",
        \"Latn\": \"латиниця\",
        \"Lepc\": \"лепча\",
        \"Limb\": \"лімбу\",
        \"Lina\": \"лінійний А\",
        \"Linb\": \"лінійний В\",
        \"Lisu\": \"абетка Фрейзера\",
        \"Loma\": \"лома\",
        \"Lyci\": \"лікійський\",
        \"Lydi\": \"лідійський\",
        \"Mand\": \"мандейський\",
        \"Mani\": \"маніхейський\",
        \"Maya\": \"майя ієрогліфічний\",
        \"Mero\": \"мероїтський\",
        \"Mlym\": \"малаяламська\",
        \"Mong\": \"монгольська\",
        \"Moon\": \"мун\",
        \"Mtei\": \"мейтей майєк\",
        \"Mymr\": \"мʼянмська\",
        \"Newa\": \"нева\",
        \"Nkoo\": \"нко\",
        \"Ogam\": \"огамічний\",
        \"Olck\": \"сантальський\",
        \"Orkh\": \"орхонський\",
        \"Orya\": \"орія\",
        \"Osge\": \"осейджиська\",
        \"Osma\": \"османський\",
        \"Perm\": \"давньопермський\",
        \"Phag\": \"пхагс-па\",
        \"Phli\": \"пехлеві написів\",
        \"Phlp\": \"пехлеві релігійний\",
        \"Phlv\": \"пехлеві літературний\",
        \"Phnx\": \"фінікійський\",
        \"Plrd\": \"писемність Полларда\",
        \"Prti\": \"парфянський\",
        \"Rjng\": \"реджанг\",
        \"Roro\": \"ронго-ронго\",
        \"Runr\": \"рунічний\",
        \"Samr\": \"самаритянський\",
        \"Sara\": \"сараті\",
        \"Saur\": \"саураштра\",
        \"Sgnw\": \"знаковий\",
        \"Shaw\": \"шоу\",
        \"Sinh\": \"сингальська\",
        \"Sund\": \"сунданський\",
        \"Sylo\": \"сілоті нагрі\",
        \"Syrc\": \"сирійський\",
        \"Syre\": \"давньосирійський естрангело\",
        \"Syrj\": \"давньосирійський західний\",
        \"Syrn\": \"давньосирійський східний\",
        \"Tagb\": \"тагбанва\",
        \"Tale\": \"тай-лі\",
        \"Talu\": \"новий тайський луе\",
        \"Taml\": \"тамільська\",
        \"Tang\": \"тангут\",
        \"Tavt\": \"тай-вʼєт\",
        \"Telu\": \"телугу\",
        \"Teng\": \"тенгвар\",
        \"Tfng\": \"тифінаг\",
        \"Tglg\": \"тагальський\",
        \"Thaa\": \"таана\",
        \"Thai\": \"тайська\",
        \"Tibt\": \"тибетська\",
        \"Ugar\": \"угаритський\",
        \"Vaii\": \"ваї\",
        \"Visp\": \"видиме мовлення\",
        \"Xpeo\": \"давньоперський\",
        \"Xsux\": \"шумеро-аккадський клінопис\",
        \"Yiii\": \"йї\",
        \"Zinh\": \"успадкована\",
        \"Zmth\": \"математична\",
        \"Zsye\": \"емодзі\",
        \"Zsym\": \"символьна\",
        \"Zxxx\": \"безписемна\",
        \"Zyyy\": \"звичайна\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/uk.json";
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
        \"Adlm\": \"адлам\",
        \"Afak\": \"афака\",
        \"Aghb\": \"кавказька албанська\",
        \"Ahom\": \"ахом\",
        \"Arab\": \"арабиця\",
        \"Armi\": \"армі\",
        \"Armn\": \"вірменська\",
        \"Avst\": \"авестійський\",
        \"Bali\": \"балійський\",
        \"Bamu\": \"бамум\",
        \"Bass\": \"басса\",
        \"Batk\": \"батак\",
        \"Beng\": \"бенгальська\",
        \"Blis\": \"символи Блісса\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"брахмі\",
        \"Brai\": \"шрифт Брайля\",
        \"Bugi\": \"бугійський\",
        \"Buhd\": \"бухід\",
        \"Cakm\": \"чакма\",
        \"Cans\": \"уніфіковані символи канадських тубільців\",
        \"Cari\": \"каріанський\",
        \"Cham\": \"хамітський\",
        \"Cher\": \"черокі\",
        \"Cirt\": \"кирт\",
        \"Copt\": \"коптський\",
        \"Cprt\": \"кіпрський\",
        \"Cyrl\": \"кирилиця\",
        \"Cyrs\": \"давньоцерковнословʼянський\",
        \"Deva\": \"деванагарі\",
        \"Dsrt\": \"дезерет\",
        \"Egyd\": \"єгипетський демотичний\",
        \"Egyh\": \"єгипетський ієратичний\",
        \"Egyp\": \"єгипетський ієрогліфічний\",
        \"Ethi\": \"ефіопська\",
        \"Geok\": \"кхутсурі\",
        \"Geor\": \"грузинська\",
        \"Glag\": \"глаголичний\",
        \"Goth\": \"готичний\",
        \"Grek\": \"грецька\",
        \"Gujr\": \"гуджараті\",
        \"Guru\": \"гурмухі\",
        \"Hanb\": \"хань\",
        \"Hang\": \"хангиль\",
        \"Hani\": \"китайська\",
        \"Hano\": \"хануну\",
        \"Hans\": \"спрощена\",
        \"Hant\": \"традиційна\",
        \"Hebr\": \"іврит\",
        \"Hira\": \"хірагана\",
        \"Hmng\": \"пахау хмонг\",
        \"Hrkt\": \"японські силабарії\",
        \"Hung\": \"давньоугорський\",
        \"Inds\": \"харапський\",
        \"Ital\": \"давньоіталійський\",
        \"Jamo\": \"чамо\",
        \"Java\": \"яванський\",
        \"Jpan\": \"японська\",
        \"Kali\": \"кая лі\",
        \"Kana\": \"катакана\",
        \"Khar\": \"кхароштхі\",
        \"Khmr\": \"кхмерська\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корейська\",
        \"Kthi\": \"каїті\",
        \"Lana\": \"ланна\",
        \"Laoo\": \"лаоська\",
        \"Latf\": \"латинський фрактурний\",
        \"Latg\": \"латинський гельський\",
        \"Latn\": \"латиниця\",
        \"Lepc\": \"лепча\",
        \"Limb\": \"лімбу\",
        \"Lina\": \"лінійний А\",
        \"Linb\": \"лінійний В\",
        \"Lisu\": \"абетка Фрейзера\",
        \"Loma\": \"лома\",
        \"Lyci\": \"лікійський\",
        \"Lydi\": \"лідійський\",
        \"Mand\": \"мандейський\",
        \"Mani\": \"маніхейський\",
        \"Maya\": \"майя ієрогліфічний\",
        \"Mero\": \"мероїтський\",
        \"Mlym\": \"малаяламська\",
        \"Mong\": \"монгольська\",
        \"Moon\": \"мун\",
        \"Mtei\": \"мейтей майєк\",
        \"Mymr\": \"мʼянмська\",
        \"Newa\": \"нева\",
        \"Nkoo\": \"нко\",
        \"Ogam\": \"огамічний\",
        \"Olck\": \"сантальський\",
        \"Orkh\": \"орхонський\",
        \"Orya\": \"орія\",
        \"Osge\": \"осейджиська\",
        \"Osma\": \"османський\",
        \"Perm\": \"давньопермський\",
        \"Phag\": \"пхагс-па\",
        \"Phli\": \"пехлеві написів\",
        \"Phlp\": \"пехлеві релігійний\",
        \"Phlv\": \"пехлеві літературний\",
        \"Phnx\": \"фінікійський\",
        \"Plrd\": \"писемність Полларда\",
        \"Prti\": \"парфянський\",
        \"Rjng\": \"реджанг\",
        \"Roro\": \"ронго-ронго\",
        \"Runr\": \"рунічний\",
        \"Samr\": \"самаритянський\",
        \"Sara\": \"сараті\",
        \"Saur\": \"саураштра\",
        \"Sgnw\": \"знаковий\",
        \"Shaw\": \"шоу\",
        \"Sinh\": \"сингальська\",
        \"Sund\": \"сунданський\",
        \"Sylo\": \"сілоті нагрі\",
        \"Syrc\": \"сирійський\",
        \"Syre\": \"давньосирійський естрангело\",
        \"Syrj\": \"давньосирійський західний\",
        \"Syrn\": \"давньосирійський східний\",
        \"Tagb\": \"тагбанва\",
        \"Tale\": \"тай-лі\",
        \"Talu\": \"новий тайський луе\",
        \"Taml\": \"тамільська\",
        \"Tang\": \"тангут\",
        \"Tavt\": \"тай-вʼєт\",
        \"Telu\": \"телугу\",
        \"Teng\": \"тенгвар\",
        \"Tfng\": \"тифінаг\",
        \"Tglg\": \"тагальський\",
        \"Thaa\": \"таана\",
        \"Thai\": \"тайська\",
        \"Tibt\": \"тибетська\",
        \"Ugar\": \"угаритський\",
        \"Vaii\": \"ваї\",
        \"Visp\": \"видиме мовлення\",
        \"Xpeo\": \"давньоперський\",
        \"Xsux\": \"шумеро-аккадський клінопис\",
        \"Yiii\": \"йї\",
        \"Zinh\": \"успадкована\",
        \"Zmth\": \"математична\",
        \"Zsye\": \"емодзі\",
        \"Zsym\": \"символьна\",
        \"Zxxx\": \"безписемна\",
        \"Zyyy\": \"звичайна\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/uk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/uk.json");
    }
}
