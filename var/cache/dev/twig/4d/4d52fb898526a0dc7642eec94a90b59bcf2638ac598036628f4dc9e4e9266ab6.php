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

/* vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php */
class __TwigTemplate_6f64cd53e0725832cecd5070e1f0f61a7a44ac9f99020b909d4d3edfbc4bd013 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ru_RU;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 9, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$companyPrefixes = array(
      'ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО', 'ПАО', 'МКК', 'МФО'
    );

    protected static \$companyNameSuffixes = array(
      'Маш', 'Наладка', 'Экспедиция', 'Пром', 'Комплекс', 'Машина', 'Снос', '-М', 'Лизинг', 'Траст', 'Снаб',
      '-H', 'Трест', 'Банк', 'Опт', 'Проф', 'Сбыт', 'Центр'
    );
    /**
     * @note Words and parts of words that usually used in company names
     */
    protected static \$companyElements = array(
        'ЖелДор', 'Гараж', 'Цемент', 'Асбоцемент', 'Строй', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Рос', 'Тяж', 'Тех', 'Сантех', 'Урал', 'Башкир', 'Тверь', 'Казань', 'Обл', 'Бух', 'Хоз', 'Электро',
        'Текстиль', 'Восток', 'Орион', 'Юпитер', 'Финанс', 'Микро', 'Радио', 'Мобайл', 'Дизайн', 'Метал', 'Нефть',
        'Телеком', 'Инфо', 'Сервис', 'Софт', 'IT', 'Рыб', 'Глав', 'Вектор', 'Рем', 'Гор', 'Газ', 'Монтаж', 'Мор',
        'Реч', 'Флот', 'Cиб', 'Каз', 'Инж', 'Вод', 'Пив', 'Хмель', 'Мяс', 'Томск', 'Омск', 'Север', 'Лен'
    );

    /**
     * @link https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8
     * @note Randomly took from this list - some jobs titles for each letter
     */
    protected static \$jobTitleFormat = array(
      'Абразивоструйщик', 'Автоинструктор', 'Администратор', 'Арт-директор', 'Архивист', 'Бариста', 'Бармен',
      'Бестиарий (гладиатор)', 'Бизнес-аналитик', 'Бухгалтер', 'Ветеринар', 'Водитель', 'Водолаз', 'Геймдизайнер',
      'Герольд', 'Гитарный мастер', 'Горный проводник', 'Детектив', 'Диджей', 'Диктор', 'Дипломат', 'Егерь', 'Жокей',
      'Зубной техник', 'Интеллектуал', 'Информационный работник', 'Кассир', 'Ковбой', 'Креативный директор', 'Критик',
      'Крупье', 'Лесоруб', 'Лингвист', 'Машинист', 'Менеджер', 'Музыкант', 'Научный сотрудник', 'Офис-менеджер',
      'Печник', 'Пианист', 'Писатель', 'Продюсер', 'Промоутер', 'Психолог', 'Радист', 'Редактор', 'Садовник',
      'Системный аналитик', 'Стилист', 'Столяр', 'Сторож', 'Телефонистка', 'Телохранитель', 'Технический писатель',
      'Учёный', 'Физик', 'Финансовый советник', 'Фотограф', 'Фрезеровщик', 'Художник', 'Чабан', 'Штурман',
      'Экономист', 'Электромонтёр'
    );

    /**
     * @example 'ООО АсбестЦементМонтаж'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }

    public static function inn(\$area_code = \"\")
    {
        if (\$area_code === \"\" || intval(\$area_code) == 0) {
            //Simple generation code for areas in Russian without check for valid
            \$area_code = static::numberBetween(1, 91);
        } else {
            \$area_code = intval(\$area_code);
        }
        \$area_code = str_pad(\$area_code, 2, '0', STR_PAD_LEFT);
        \$inn_base =  \$area_code . static::numerify('#######');
        return \$inn_base . \\Faker\\Calculator\\Inn::checksum(\$inn_base);
    }

    public static function kpp(\$inn = \"\")
    {
        if (\$inn == \"\" || strlen(\$inn) < 4) {
            \$inn = static::inn();
        }
        return substr(\$inn, 0, 4) . \"01001\";
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  65 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ru_RU;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static \$companyPrefixes = array(
      'ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО', 'ПАО', 'МКК', 'МФО'
    );

    protected static \$companyNameSuffixes = array(
      'Маш', 'Наладка', 'Экспедиция', 'Пром', 'Комплекс', 'Машина', 'Снос', '-М', 'Лизинг', 'Траст', 'Снаб',
      '-H', 'Трест', 'Банк', 'Опт', 'Проф', 'Сбыт', 'Центр'
    );
    /**
     * @note Words and parts of words that usually used in company names
     */
    protected static \$companyElements = array(
        'ЖелДор', 'Гараж', 'Цемент', 'Асбоцемент', 'Строй', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Рос', 'Тяж', 'Тех', 'Сантех', 'Урал', 'Башкир', 'Тверь', 'Казань', 'Обл', 'Бух', 'Хоз', 'Электро',
        'Текстиль', 'Восток', 'Орион', 'Юпитер', 'Финанс', 'Микро', 'Радио', 'Мобайл', 'Дизайн', 'Метал', 'Нефть',
        'Телеком', 'Инфо', 'Сервис', 'Софт', 'IT', 'Рыб', 'Глав', 'Вектор', 'Рем', 'Гор', 'Газ', 'Монтаж', 'Мор',
        'Реч', 'Флот', 'Cиб', 'Каз', 'Инж', 'Вод', 'Пив', 'Хмель', 'Мяс', 'Томск', 'Омск', 'Север', 'Лен'
    );

    /**
     * @link https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8
     * @note Randomly took from this list - some jobs titles for each letter
     */
    protected static \$jobTitleFormat = array(
      'Абразивоструйщик', 'Автоинструктор', 'Администратор', 'Арт-директор', 'Архивист', 'Бариста', 'Бармен',
      'Бестиарий (гладиатор)', 'Бизнес-аналитик', 'Бухгалтер', 'Ветеринар', 'Водитель', 'Водолаз', 'Геймдизайнер',
      'Герольд', 'Гитарный мастер', 'Горный проводник', 'Детектив', 'Диджей', 'Диктор', 'Дипломат', 'Егерь', 'Жокей',
      'Зубной техник', 'Интеллектуал', 'Информационный работник', 'Кассир', 'Ковбой', 'Креативный директор', 'Критик',
      'Крупье', 'Лесоруб', 'Лингвист', 'Машинист', 'Менеджер', 'Музыкант', 'Научный сотрудник', 'Офис-менеджер',
      'Печник', 'Пианист', 'Писатель', 'Продюсер', 'Промоутер', 'Психолог', 'Радист', 'Редактор', 'Садовник',
      'Системный аналитик', 'Стилист', 'Столяр', 'Сторож', 'Телефонистка', 'Телохранитель', 'Технический писатель',
      'Учёный', 'Физик', 'Финансовый советник', 'Фотограф', 'Фрезеровщик', 'Художник', 'Чабан', 'Штурман',
      'Экономист', 'Электромонтёр'
    );

    /**
     * @example 'ООО АсбестЦементМонтаж'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }

    public static function inn(\$area_code = \"\")
    {
        if (\$area_code === \"\" || intval(\$area_code) == 0) {
            //Simple generation code for areas in Russian without check for valid
            \$area_code = static::numberBetween(1, 91);
        } else {
            \$area_code = intval(\$area_code);
        }
        \$area_code = str_pad(\$area_code, 2, '0', STR_PAD_LEFT);
        \$inn_base =  \$area_code . static::numerify('#######');
        return \$inn_base . \\Faker\\Calculator\\Inn::checksum(\$inn_base);
    }

    public static function kpp(\$inn = \"\")
    {
        if (\$inn == \"\" || strlen(\$inn) < 4) {
            \$inn = static::inn();
        }
        return substr(\$inn, 0, 4) . \"01001\";
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Company.php");
    }
}
