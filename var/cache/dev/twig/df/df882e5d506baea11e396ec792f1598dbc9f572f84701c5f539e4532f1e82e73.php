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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php */
class __TwigTemplate_8490af5b90fc22e1f4962858d961e3e8cd71396eecc4fdaf3031145849bb164b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',                                      // Вектор
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"',                  // ТОВ \"Інфоком\"
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',                    // Сервіс-Плюс
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"',// ПАТ \"Альфа-Стиль\"
    );

    protected static \$urlFormats = array(
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companyPrefix = array('ТОВ', 'ПП', 'ПАТ','ПрАТ');
    protected static \$companySuffix = array('Сервіс','Плюс', 'Груп', 'Стиль', 'Дизайн');

    protected static \$companyName = array(
        'Вектор', 'Едельвейс', 'Смарт', 'Альфа', 'Система', 'Універсал',
        'Інфоком', 'Макс', 'Планета', 'Вектор', 'Приват', 'Еко', 'Мега',
        'Мегамакс', 'Мульти', 'Майнер'
    );

    /**
     * @see list of Ukraine job title (2017-08-09), source: https://uk.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BF%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%96%D0%B9
     */
    protected static \$jobTitleFormat = array(
        'Агроном', 'Адвокат', 'Актор', 'Акушер', 'Антрополог', 'Аптекар', 'Архітектор', 'Археолог', 'Астронавт', 'Астрофізик', 'Автослюсар', 'Агент',
        'Бариста', 'Бармен', 'Бібліограф', 'Біолог', 'Бізнесмен', 'Ботанік', 'Будівельник', 'Будник', 'Бухгалтер', 'Бібліотекар',
        'Вантажник', 'Ведучий', 'Ветеринар', 'Випробувач', 'Водій', 'Вчитель', 'Візажист',
        'Гардеробник', 'Географ', 'Геолог', 'Геофізик', 'Гицель', 'Гінеколог', 'Гірник', 'Гірничий інженер', 'Головний меркшейдер', 'Графік', 'Громадський діяч',
        'Ґрунтознавець',
        'Дантист', 'Державний службовець', 'Детектив', 'Дизайнер', 'Дипломат', 'Диригент', 'Ді-джей', 'Доморобітниця', 'Доцент', 'Драматург',
        'Економіст', 'Електрик', 'Електромонтер', 'Електромонтажник', 'Електрослюсар', 'Електротехнік', 'Епідеміолог', 'Етнограф', 'Еколог',
        'Євнух', 'Єгер',
        'Журналіст', 'Живописець',
        'Золотар', 'Зоолог',
        'Інженер комп’ютерної техніки', 'Інженер', 'Іконописець', 'Історик', 'Інспектор', 'Інструктор',
        'Каскадер', 'Клавішник', 'Клоун', 'Композитор', 'Консьєрж', 'Конструктор', 'Коуч', 'Краєзнавець', 'Криміналіст', 'Кушнір', 'Кіноактор', 'Кінокритик', 'Кінорежисер', 'Кур’єр', 'Кухар', 'Кінолог', 'Круп’є',
        'Лаборант', 'Льотчик', 'Лікар', 'Ліпник архітектурних деталей', 'Лісничий', 'Літературознавець', 'Логопед', 'Локсмайстер', 'Лор',
        'Математик', 'Машиніст', 'Медик', 'Менеджер', 'Мистецтвознавець', 'Мірошник', 'Мікробіолог', 'Мінералог', 'Мовознавець', 'Модельєр', 'Модельник', 'Музикант', 'Музикознавець', 'Музичний редактор', 'Маркетолог', 'М’ясник', 'Мікробіолог',
        'Намотувальник', 'Науковець', 'Няня', 'Нотаріус', 'Навідник-оператор',
        'Озеленювач', 'Окуліст', 'Онколог', 'Оператор', 'Організатор', 'Охоронець', 'Охоронник',
        'Паблік рилейшнз', 'Палеонтолог', 'Паралегал', 'Парфумер', 'Пасічник', 'Патологоанатом', 'Педагог', 'Пекар', 'Перекладач', 'Перукар', 'Петрограф', 'Письменник', 'Піаніст', 'Підприємець', 'Пілот', 'Правник', 'Прибиральник', 'Програміст', 'Провізор', 'Прокурор', 'Промисловець', 'Професор', 'Психолог', 'Політик', 'Публіцист', 'Продюсер',
        'Ревізор', 'Режисер', 'Різноробочий', 'Реабілітолог', 'Редактор', 'Реставратор', 'Ріелтор',
        'Сантехнік', 'Священик', 'Складальник', 'Скульптор', 'Соціолог', 'Співак', 'Спортсмен', 'Сценарист', 'Стрінгер', 'Стропальник', 'Стоматолог', 'Слідчий', 'Стиліст', 'Секретар', 'Стрілочник', 'Стюардеса', 'Суддя', 'Стиліст',
        'Таксист', 'Тамада', 'Танцівник', 'Тенісист', 'Терапевт', 'Ткач', 'Токар', 'Тракторист',
        'Фармацевт', 'Фермер', 'Фізик', 'Філолог', 'Фольклорист', 'Формувальник', 'Фотограф', 'Футболіст', 'Флорист', 'Фінансист',
        'Хірург', 'Хімік', 'Художник', 'Хореограф', 'Хормейстер',
        'Шериф', 'Швачка', 'Штукатур',
        'Ювелір','Юрист'
    );

    public function companyUrl()
    {
        \$format = static::randomElement(static::\$urlFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$companyName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  79 => 15,  68 => 11,  62 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{companyName}}',                                      // Вектор
        '{{companyPrefix}} \"{{companyName}}\"',                  // ТОВ \"Інфоком\"
        '{{companyName}}-{{companySuffix}}',                    // Сервіс-Плюс
        '{{companyPrefix}} \"{{companyName}}-{{companySuffix}}\"',// ПАТ \"Альфа-Стиль\"
    );

    protected static \$urlFormats = array(
        '{{companyName}}',
        '{{companyName}}-{{companySuffix}}',
    );

    protected static \$companyPrefix = array('ТОВ', 'ПП', 'ПАТ','ПрАТ');
    protected static \$companySuffix = array('Сервіс','Плюс', 'Груп', 'Стиль', 'Дизайн');

    protected static \$companyName = array(
        'Вектор', 'Едельвейс', 'Смарт', 'Альфа', 'Система', 'Універсал',
        'Інфоком', 'Макс', 'Планета', 'Вектор', 'Приват', 'Еко', 'Мега',
        'Мегамакс', 'Мульти', 'Майнер'
    );

    /**
     * @see list of Ukraine job title (2017-08-09), source: https://uk.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BF%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%96%D0%B9
     */
    protected static \$jobTitleFormat = array(
        'Агроном', 'Адвокат', 'Актор', 'Акушер', 'Антрополог', 'Аптекар', 'Архітектор', 'Археолог', 'Астронавт', 'Астрофізик', 'Автослюсар', 'Агент',
        'Бариста', 'Бармен', 'Бібліограф', 'Біолог', 'Бізнесмен', 'Ботанік', 'Будівельник', 'Будник', 'Бухгалтер', 'Бібліотекар',
        'Вантажник', 'Ведучий', 'Ветеринар', 'Випробувач', 'Водій', 'Вчитель', 'Візажист',
        'Гардеробник', 'Географ', 'Геолог', 'Геофізик', 'Гицель', 'Гінеколог', 'Гірник', 'Гірничий інженер', 'Головний меркшейдер', 'Графік', 'Громадський діяч',
        'Ґрунтознавець',
        'Дантист', 'Державний службовець', 'Детектив', 'Дизайнер', 'Дипломат', 'Диригент', 'Ді-джей', 'Доморобітниця', 'Доцент', 'Драматург',
        'Економіст', 'Електрик', 'Електромонтер', 'Електромонтажник', 'Електрослюсар', 'Електротехнік', 'Епідеміолог', 'Етнограф', 'Еколог',
        'Євнух', 'Єгер',
        'Журналіст', 'Живописець',
        'Золотар', 'Зоолог',
        'Інженер комп’ютерної техніки', 'Інженер', 'Іконописець', 'Історик', 'Інспектор', 'Інструктор',
        'Каскадер', 'Клавішник', 'Клоун', 'Композитор', 'Консьєрж', 'Конструктор', 'Коуч', 'Краєзнавець', 'Криміналіст', 'Кушнір', 'Кіноактор', 'Кінокритик', 'Кінорежисер', 'Кур’єр', 'Кухар', 'Кінолог', 'Круп’є',
        'Лаборант', 'Льотчик', 'Лікар', 'Ліпник архітектурних деталей', 'Лісничий', 'Літературознавець', 'Логопед', 'Локсмайстер', 'Лор',
        'Математик', 'Машиніст', 'Медик', 'Менеджер', 'Мистецтвознавець', 'Мірошник', 'Мікробіолог', 'Мінералог', 'Мовознавець', 'Модельєр', 'Модельник', 'Музикант', 'Музикознавець', 'Музичний редактор', 'Маркетолог', 'М’ясник', 'Мікробіолог',
        'Намотувальник', 'Науковець', 'Няня', 'Нотаріус', 'Навідник-оператор',
        'Озеленювач', 'Окуліст', 'Онколог', 'Оператор', 'Організатор', 'Охоронець', 'Охоронник',
        'Паблік рилейшнз', 'Палеонтолог', 'Паралегал', 'Парфумер', 'Пасічник', 'Патологоанатом', 'Педагог', 'Пекар', 'Перекладач', 'Перукар', 'Петрограф', 'Письменник', 'Піаніст', 'Підприємець', 'Пілот', 'Правник', 'Прибиральник', 'Програміст', 'Провізор', 'Прокурор', 'Промисловець', 'Професор', 'Психолог', 'Політик', 'Публіцист', 'Продюсер',
        'Ревізор', 'Режисер', 'Різноробочий', 'Реабілітолог', 'Редактор', 'Реставратор', 'Ріелтор',
        'Сантехнік', 'Священик', 'Складальник', 'Скульптор', 'Соціолог', 'Співак', 'Спортсмен', 'Сценарист', 'Стрінгер', 'Стропальник', 'Стоматолог', 'Слідчий', 'Стиліст', 'Секретар', 'Стрілочник', 'Стюардеса', 'Суддя', 'Стиліст',
        'Таксист', 'Тамада', 'Танцівник', 'Тенісист', 'Терапевт', 'Ткач', 'Токар', 'Тракторист',
        'Фармацевт', 'Фермер', 'Фізик', 'Філолог', 'Фольклорист', 'Формувальник', 'Фотограф', 'Футболіст', 'Флорист', 'Фінансист',
        'Хірург', 'Хімік', 'Художник', 'Хореограф', 'Хормейстер',
        'Шериф', 'Швачка', 'Штукатур',
        'Ювелір','Юрист'
    );

    public function companyUrl()
    {
        \$format = static::randomElement(static::\$urlFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$companyName);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Company.php");
    }
}
