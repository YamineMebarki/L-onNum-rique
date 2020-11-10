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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php */
class __TwigTemplate_818dc27f2cdba59a9561a5b762ca21438376312cdede7a5ecb088a548acceb01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @see list of Ukraine banks (2017-11-08), source: https://uk.wikipedia.org/wiki/%D0%91%D0%B0%D0%BD%D0%BA%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8
     */
    protected static \$banks = array(
        'А-Банк', 'Авангард', 'Айбокс Банк', 'Акордбанк', 'Альпарі Банк', 'Альтбанк', 'Альфа-Банк', 'Альянс', 'Апекс-банк', 'Аркада', 'Асвіо Банк',
        'Банк 3/4', 'БМ Банк', 'Богуслав', 'БТА Банк', 'Вернум Банк', 'Восток', 'ВТБ',
        'VS Bank',
        'Гефест', 'Глобус', 'Грант',
        'DV Bank', 'Deutsche Bank',
        'Експрес-Банк',
        'Європромбанк',
        'Земельний капітал',
        'Ідея Банк', 'Інвестицій', 'ING', 'Індустріалбанк',
        'Комерційний Індустріальний Банк', 'Кліринговий', 'Комінвестбанк', 'Конкорд', 'Кредит Дніпро', 'Кредит Європа Банк', 'Кредит Оптима Банк', 'Кредитвест', 'Crédit Agricole', 'Кредобанк', 'Кристалбанк',
        'Львів',
        'Марфін банк', 'Мегабанк', 'МетаБанк', 'Міжнародний інвестиційний банк', 'Місто Банк', 'Мотор Банк',
        'Оксі Банк', 'OTP Bank', 'Ощадбанк',
        'Перший Інвестиційний Банк', 'Південний', 'Piraeus Bank', 'Полікомбанк', 'Полтава-банк', 'Портал', 'Правекс-Банк', 'Преміум', 'ПриватБанк', 'ПроКредит Банк', 'Промінвестбанк', 'ПУМБ', 'Промислово-фінансовий банк',
        'Радабанк', 'Райффайзен Аваль', 'РВС банк', 'Регіон-банк', 'Розрахунковий центр',
        'Сбербанк', 'SEB', 'Сітібанк', 'Січ',
        'Таскомбанк', 'Траст-Капітал',
        'Український Капітал', 'Український банк реконструкції та розвитку', 'Укрбудінвестбанк', 'Укргазбанк', 'Укрексімбанк', 'УкрСиббанк', 'Укрсоцбанк', 'Універсал Банк',
        'Фамільний', 'Фінансовий партнер', 'Forward Bank',
        'Центр',
        'Unex'
    );

    /**
     * @example 'Сітібанк'
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @see list of Ukraine banks (2017-11-08), source: https://uk.wikipedia.org/wiki/%D0%91%D0%B0%D0%BD%D0%BA%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8
     */
    protected static \$banks = array(
        'А-Банк', 'Авангард', 'Айбокс Банк', 'Акордбанк', 'Альпарі Банк', 'Альтбанк', 'Альфа-Банк', 'Альянс', 'Апекс-банк', 'Аркада', 'Асвіо Банк',
        'Банк 3/4', 'БМ Банк', 'Богуслав', 'БТА Банк', 'Вернум Банк', 'Восток', 'ВТБ',
        'VS Bank',
        'Гефест', 'Глобус', 'Грант',
        'DV Bank', 'Deutsche Bank',
        'Експрес-Банк',
        'Європромбанк',
        'Земельний капітал',
        'Ідея Банк', 'Інвестицій', 'ING', 'Індустріалбанк',
        'Комерційний Індустріальний Банк', 'Кліринговий', 'Комінвестбанк', 'Конкорд', 'Кредит Дніпро', 'Кредит Європа Банк', 'Кредит Оптима Банк', 'Кредитвест', 'Crédit Agricole', 'Кредобанк', 'Кристалбанк',
        'Львів',
        'Марфін банк', 'Мегабанк', 'МетаБанк', 'Міжнародний інвестиційний банк', 'Місто Банк', 'Мотор Банк',
        'Оксі Банк', 'OTP Bank', 'Ощадбанк',
        'Перший Інвестиційний Банк', 'Південний', 'Piraeus Bank', 'Полікомбанк', 'Полтава-банк', 'Портал', 'Правекс-Банк', 'Преміум', 'ПриватБанк', 'ПроКредит Банк', 'Промінвестбанк', 'ПУМБ', 'Промислово-фінансовий банк',
        'Радабанк', 'Райффайзен Аваль', 'РВС банк', 'Регіон-банк', 'Розрахунковий центр',
        'Сбербанк', 'SEB', 'Сітібанк', 'Січ',
        'Таскомбанк', 'Траст-Капітал',
        'Український Капітал', 'Український банк реконструкції та розвитку', 'Укрбудінвестбанк', 'Укргазбанк', 'Укрексімбанк', 'УкрСиббанк', 'Укрсоцбанк', 'Універсал Банк',
        'Фамільний', 'Фінансовий партнер', 'Forward Bank',
        'Центр',
        'Unex'
    );

    /**
     * @example 'Сітібанк'
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Payment.php");
    }
}
