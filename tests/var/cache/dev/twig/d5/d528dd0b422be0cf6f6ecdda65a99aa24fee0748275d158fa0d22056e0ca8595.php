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

/* vendor/symfony/intl/Resources/data/scripts/bg.json */
class __TwigTemplate_e5799cad19fd83435913ed4268b4432834055e4947329f51b128dff4c02b80ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"арабска\",
        \"Armi\": \"Арамейска\",
        \"Armn\": \"арменска\",
        \"Avst\": \"Авестанска\",
        \"Bali\": \"Балийски\",
        \"Batk\": \"Батакска\",
        \"Beng\": \"бенгалска\",
        \"Blis\": \"Блис символи\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"Брахми\",
        \"Brai\": \"брайлова\",
        \"Bugi\": \"Бугинска\",
        \"Buhd\": \"Бухид\",
        \"Cakm\": \"Чакма\",
        \"Cans\": \"Унифицирани символи на канадски аборигени\",
        \"Cari\": \"Карийска\",
        \"Cham\": \"Хамитска\",
        \"Cher\": \"Чероки\",
        \"Cirt\": \"Кирт\",
        \"Copt\": \"Коптска\",
        \"Cprt\": \"Кипърска\",
        \"Cyrl\": \"кирилица\",
        \"Deva\": \"деванагари\",
        \"Dsrt\": \"Дезерет\",
        \"Egyd\": \"Египетско демотично писмо\",
        \"Egyh\": \"Египетско йератично писмо\",
        \"Egyp\": \"Египетски йероглифи\",
        \"Ethi\": \"етиопска\",
        \"Geok\": \"Грузинска хуцури\",
        \"Geor\": \"грузинска\",
        \"Glag\": \"Глаголическа\",
        \"Goth\": \"Готическа\",
        \"Grek\": \"гръцка\",
        \"Gujr\": \"гуджарати\",
        \"Guru\": \"гурмукхи\",
        \"Hanb\": \"ханб\",
        \"Hang\": \"хангъл\",
        \"Hani\": \"хан\",
        \"Hano\": \"Хануну\",
        \"Hans\": \"опростена\",
        \"Hant\": \"традиционна\",
        \"Hebr\": \"иврит\",
        \"Hira\": \"хирагана\",
        \"Hmng\": \"Пахау хмонг\",
        \"Hrkt\": \"японска сричкова\",
        \"Hung\": \"Староунгарска\",
        \"Inds\": \"Харапска\",
        \"Ital\": \"Древно италийска\",
        \"Jamo\": \"джамо\",
        \"Java\": \"Яванска\",
        \"Jpan\": \"японска\",
        \"Kali\": \"Кая Ли\",
        \"Kana\": \"катакана\",
        \"Khar\": \"Кхароштхи\",
        \"Khmr\": \"кхмерска\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корейска\",
        \"Kthi\": \"Кайтхи\",
        \"Lana\": \"Ланна\",
        \"Laoo\": \"лаоска\",
        \"Latf\": \"Латинска фрактура\",
        \"Latg\": \"Галска латинска\",
        \"Latn\": \"латиница\",
        \"Lepc\": \"Лепча\",
        \"Limb\": \"Лимбу\",
        \"Lina\": \"Линейна А\",
        \"Linb\": \"Линейна Б\",
        \"Lyci\": \"Лицийска\",
        \"Lydi\": \"Лидийска\",
        \"Mand\": \"Мандаринска\",
        \"Mani\": \"Манихейска\",
        \"Maya\": \"Йероглифи на Маите\",
        \"Mero\": \"Мероитска\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"монголска\",
        \"Moon\": \"Мун\",
        \"Mtei\": \"Манипури\",
        \"Mymr\": \"бирманска\",
        \"Nkoo\": \"Н’Ко\",
        \"Ogam\": \"Огамическа\",
        \"Olck\": \"Ол Чики\",
        \"Orkh\": \"Орхоно-енисейска\",
        \"Orya\": \"ория\",
        \"Osma\": \"Османска\",
        \"Perm\": \"Древно пермска\",
        \"Phag\": \"Фагс-па\",
        \"Phlv\": \"Пахлавска\",
        \"Phnx\": \"Финикийска\",
        \"Plrd\": \"Писменост Полард\",
        \"Roro\": \"Ронго-ронго\",
        \"Runr\": \"Руническа\",
        \"Samr\": \"Самаританска\",
        \"Sara\": \"Сарати\",
        \"Saur\": \"Саураштра\",
        \"Sinh\": \"синхалска\",
        \"Sund\": \"Сунданска\",
        \"Sylo\": \"Силоти Нагри\",
        \"Syrc\": \"Сирийска\",
        \"Syre\": \"Сирийска естрангело\",
        \"Syrj\": \"Западна сирийска\",
        \"Syrn\": \"Източна сирийска\",
        \"Tagb\": \"Тагбанва\",
        \"Tale\": \"Тай Ле\",
        \"Talu\": \"Нова Тай Ле\",
        \"Taml\": \"тамилска\",
        \"Telu\": \"телугу\",
        \"Tglg\": \"Тагалог\",
        \"Thaa\": \"таана\",
        \"Thai\": \"тайска\",
        \"Tibt\": \"тибетска\",
        \"Ugar\": \"Угаритска\",
        \"Vaii\": \"Вайска\",
        \"Visp\": \"Видима реч\",
        \"Xpeo\": \"Староперсийска\",
        \"Xsux\": \"Шумеро-акадски клинопис\",
        \"Yiii\": \"Йи\",
        \"Zmth\": \"математически символи\",
        \"Zsye\": \"емоджи\",
        \"Zsym\": \"символи\",
        \"Zxxx\": \"без писменост\",
        \"Zyyy\": \"обща\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/bg.json";
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
        \"Arab\": \"арабска\",
        \"Armi\": \"Арамейска\",
        \"Armn\": \"арменска\",
        \"Avst\": \"Авестанска\",
        \"Bali\": \"Балийски\",
        \"Batk\": \"Батакска\",
        \"Beng\": \"бенгалска\",
        \"Blis\": \"Блис символи\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"Брахми\",
        \"Brai\": \"брайлова\",
        \"Bugi\": \"Бугинска\",
        \"Buhd\": \"Бухид\",
        \"Cakm\": \"Чакма\",
        \"Cans\": \"Унифицирани символи на канадски аборигени\",
        \"Cari\": \"Карийска\",
        \"Cham\": \"Хамитска\",
        \"Cher\": \"Чероки\",
        \"Cirt\": \"Кирт\",
        \"Copt\": \"Коптска\",
        \"Cprt\": \"Кипърска\",
        \"Cyrl\": \"кирилица\",
        \"Deva\": \"деванагари\",
        \"Dsrt\": \"Дезерет\",
        \"Egyd\": \"Египетско демотично писмо\",
        \"Egyh\": \"Египетско йератично писмо\",
        \"Egyp\": \"Египетски йероглифи\",
        \"Ethi\": \"етиопска\",
        \"Geok\": \"Грузинска хуцури\",
        \"Geor\": \"грузинска\",
        \"Glag\": \"Глаголическа\",
        \"Goth\": \"Готическа\",
        \"Grek\": \"гръцка\",
        \"Gujr\": \"гуджарати\",
        \"Guru\": \"гурмукхи\",
        \"Hanb\": \"ханб\",
        \"Hang\": \"хангъл\",
        \"Hani\": \"хан\",
        \"Hano\": \"Хануну\",
        \"Hans\": \"опростена\",
        \"Hant\": \"традиционна\",
        \"Hebr\": \"иврит\",
        \"Hira\": \"хирагана\",
        \"Hmng\": \"Пахау хмонг\",
        \"Hrkt\": \"японска сричкова\",
        \"Hung\": \"Староунгарска\",
        \"Inds\": \"Харапска\",
        \"Ital\": \"Древно италийска\",
        \"Jamo\": \"джамо\",
        \"Java\": \"Яванска\",
        \"Jpan\": \"японска\",
        \"Kali\": \"Кая Ли\",
        \"Kana\": \"катакана\",
        \"Khar\": \"Кхароштхи\",
        \"Khmr\": \"кхмерска\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корейска\",
        \"Kthi\": \"Кайтхи\",
        \"Lana\": \"Ланна\",
        \"Laoo\": \"лаоска\",
        \"Latf\": \"Латинска фрактура\",
        \"Latg\": \"Галска латинска\",
        \"Latn\": \"латиница\",
        \"Lepc\": \"Лепча\",
        \"Limb\": \"Лимбу\",
        \"Lina\": \"Линейна А\",
        \"Linb\": \"Линейна Б\",
        \"Lyci\": \"Лицийска\",
        \"Lydi\": \"Лидийска\",
        \"Mand\": \"Мандаринска\",
        \"Mani\": \"Манихейска\",
        \"Maya\": \"Йероглифи на Маите\",
        \"Mero\": \"Мероитска\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"монголска\",
        \"Moon\": \"Мун\",
        \"Mtei\": \"Манипури\",
        \"Mymr\": \"бирманска\",
        \"Nkoo\": \"Н’Ко\",
        \"Ogam\": \"Огамическа\",
        \"Olck\": \"Ол Чики\",
        \"Orkh\": \"Орхоно-енисейска\",
        \"Orya\": \"ория\",
        \"Osma\": \"Османска\",
        \"Perm\": \"Древно пермска\",
        \"Phag\": \"Фагс-па\",
        \"Phlv\": \"Пахлавска\",
        \"Phnx\": \"Финикийска\",
        \"Plrd\": \"Писменост Полард\",
        \"Roro\": \"Ронго-ронго\",
        \"Runr\": \"Руническа\",
        \"Samr\": \"Самаританска\",
        \"Sara\": \"Сарати\",
        \"Saur\": \"Саураштра\",
        \"Sinh\": \"синхалска\",
        \"Sund\": \"Сунданска\",
        \"Sylo\": \"Силоти Нагри\",
        \"Syrc\": \"Сирийска\",
        \"Syre\": \"Сирийска естрангело\",
        \"Syrj\": \"Западна сирийска\",
        \"Syrn\": \"Източна сирийска\",
        \"Tagb\": \"Тагбанва\",
        \"Tale\": \"Тай Ле\",
        \"Talu\": \"Нова Тай Ле\",
        \"Taml\": \"тамилска\",
        \"Telu\": \"телугу\",
        \"Tglg\": \"Тагалог\",
        \"Thaa\": \"таана\",
        \"Thai\": \"тайска\",
        \"Tibt\": \"тибетска\",
        \"Ugar\": \"Угаритска\",
        \"Vaii\": \"Вайска\",
        \"Visp\": \"Видима реч\",
        \"Xpeo\": \"Староперсийска\",
        \"Xsux\": \"Шумеро-акадски клинопис\",
        \"Yiii\": \"Йи\",
        \"Zmth\": \"математически символи\",
        \"Zsye\": \"емоджи\",
        \"Zsym\": \"символи\",
        \"Zxxx\": \"без писменост\",
        \"Zyyy\": \"обща\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/bg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/bg.json");
    }
}
