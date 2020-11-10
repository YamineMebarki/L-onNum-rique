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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php */
class __TwigTemplate_0c6717c43c88ec676ef5b18232a313480e546bef2f934415e83a8d76fe6c47b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('місто');
    protected static \$regionSuffix = array('область');
    protected static \$streetPrefix = array(
        'вул.', 'пров.', 'пл.', 'просп.'
    );
    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('#####');
    protected static \$country = array(
        'Афганістан',
        'Албанія',
        'Алжир',
        'Андорра',
        'Ангола',
        'Аргентина',
        'Вірменія',
        'Австралія',
        'Австрія',
        'Азербайджан',
        'Багамські острови',
        'Бахрейн',
        'Бангладеш',
        'Барбадос',
        'Білорусь',
        'Бельгія',
        'Беліз',
        'Бенін',
        'Бутан',
        'Болівія',
        'Боснія і Герцеговина',
        'Ботсвана',
        'Бразилія',
        'Бруней',
        'Болгарія',
        'Бурунді',
        'Камбоджа',
        'Камерун',
        'Канада',
        'Кабо-Верде',
        'Центрально-Африканська Республіка',
        'Чад',
        'Чилі',
        'Китай',
        'Колумбія',
        'Коморські острови',
        'Конго',
        'Конго, Демократична Республіка',
        'Коста-Ріка',
        'Хорватія',
        'Куба',
        'Кіпр',
        'Чеська республіка',
        'Данія',
        'Джибуті',
        'Домініка',
        'Домініканська Республіка',
        'східний Тимор',
        'Еквадор',
        'Єгипет',
        'Сальвадор',
        'Екваторіальна Гвінея',
        'Еритрея',
        'Естонія',
        'Ефіопія',
        'Фіджі',
        'Фінляндія',
        'Франція',
        'Габон',
        'Гамбія',
        'Грузія',
        'Німеччина',
        'Гана',
        'Греція',
        'Гренада',
        'Гватемала',
        'Гвінея',
        'Гвінея-Бісау',
        'Гайана',
        'Гаїті',
        'Гондурас',
        'Угорщина',
        'Ісландія',
        'Індія',
        'Індонезія',
        'Іран',
        'Ірак',
        'Ірландія',
        'Ізраїль',
        'Італія',
        'Ямайка',
        'Японія',
        'Йорданія',
        'Казахстан',
        'Кенія',
        'Кірібаті',
        'Північна Корея',
        'Південна Корея',
        'Косово',
        'Кувейт',
        'Киргизія',
        'Лаос',
        'Латвія',
        'Ліван',
        'Лесото',
        'Ліберія',
        'Лівія',
        'Ліхтенштейн',
        'Литва',
        'Люксембург',
        'Македонії',
        'Мадагаскар',
        'Малаві',
        'Малайзія',
        'Мальдіви',
        'Малі',
        'Мальта',
        'Маршаллові острови',
        'Мавританія',
        'Маврикій',
        'Мексика',
        'Мікронезія',
        'Молдова',
        'Монако',
        'Монголія',
        'Чорногорія',
        'Марокко',
        'Мозамбік',
        'М\\'янма',
        'Намібія',
        'Науру',
        'Непал',
        'Нідерланди',
        'Нова Зеландія',
        'Нікарагуа',
        'Нігер',
        'Нігерія',
        'Норвегія',
        'Оман',
        'Пакистан',
        'Палау',
        'Панама',
        'Папуа-Нова Гвінея',
        'Парагвай',
        'Перу',
        'Філіппіни',
        'Польща',
        'Португалія',
        'Катар',
        'Румунія',
        'Російська Федерація',
        'Руанда',
        'Сент-Кітс і Невіс',
        'Сент-Люсія',
        'Сент-Вінсент і Гренадіни',
        'Самоа',
        'Саудівська Аравія',
        'Сенегал',
        'Сербія',
        'Сейшельські острови',
        'Сьєрра-Леоне',
        'Сінгапур',
        'Словаччина',
        'Словенія',
        'Соломонові острови',
        'Сомалі',
        'ПАР',
        'Іспанія',
        'Шрі Ланка',
        'Судан',
        'Сурінам',
        'Свазіленд',
        'Швеція',
        'Швейцарія',
        'Сирія',
        'Тайвань',
        'Таджикистан',
        'Танзанія',
        'Таїланд',
        'Того',
        'Тонга',
        'Тринідад і Тобаго',
        'Туніс',
        'Туреччина',
        'Туркменістан',
        'Тувалу',
        'Уганда',
        'Україна',
        'Об\\'єднані Арабські Емірати',
        'Великобританія',
        'Сполучені Штати',
        'Уругвай',
        'Узбекистан',
        'Вануату',
        'Ватикан',
        'Венесуела',
        'В\\'єтнам',
        'Ємен',
        'Замбія',
        'Зімбабве',
    );

    protected static \$region = array(
        'Вінницька',
        'Волинська',
        'Дніпропетровська',
        'Донецька',
        'Житомирська',
        'Закарпатська',
        'Запорізька',
        'Івано-Франківська',
        'Київська',
        'Кіровоградська',
        'Луганська',
        'Львівська',
        'Миколаївська',
        'Одеська',
        'Полтавська',
        'Рівненська',
        'Сумська',
        'Тернопільська',
        'Харківська',
        'Херсонська',
        'Хмельницька',
        'Черкаська',
        'Чернівецька',
        'Чернігівська'
    );

    protected static \$city = array(
        'Вінниця',
        'Луцьк',
        'Дніпропетровськ',
        'Донецьк',
        'Житомир',
        'Ужгород',
        'Запоріжжя',
        'Івано-Франківськ',
        'Київ',
        'Кіровоград',
        'Луганськ',
        'Львів',
        'Миколаїв',
        'Одеса',
        'Полтава',
        'Рівне',
        'Суми',
        'Тернопіль',
        'Харків',
        'Херсон',
        'Хмельницький',
        'Черкаси',
        'Чернівці',
        'Чернігів'
    );

    /**
     * @see list of Ukraine street (2017-08-08), source: http://ukrexport.gov.ua/ukr/useful_info/gov/
     */
    protected static \$street = array(
        'Тараса Шевченка',
        'Лесі Українки',
        'Михайла Грушевського',
        'Урицького',
        'П. Орлика',
        'Хрещатик',
        'Артема',
        'Копиленка',
        'Різницька',
        'Лук’янівська',
        'Паторжинського',
        'Солом’янська',
        'Арсенальна',
        'Мельникова',
        'Володимирська',
        'Фізкультури',
        'Львівська',
        'Шота Руставелі',
        'Прорізна',
        'І. Франкa',
        'Б. Грінченка',
        'Інститутська',
        'Пирогова',
        'М. Коцюбинського',
        'Володимирська'
    );

    protected static \$addressFormats = array(
        \"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 293, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["cityAndRegion"]) || array_key_exists("cityAndRegion", $context) ? $context["cityAndRegion"] : (function () { throw new RuntimeError('Variable "cityAndRegion" does not exist.', 293, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 293, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 293, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 293, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$streetAddressFormats = array(
        \"";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 297, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 297, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 297, $this->source); })()), "html", null, true);
        echo "\"
    );

    public static function citySuffix()
    {
        // We don't use city suffix
        return '';
    }

    public static function streetSuffix()
    {
        // We don't use street suffix
        return '';
    }

    public function streetName()
    {
        return static::randomElement(static::\$street);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * Get city and region together
     * We need it because city and region must comply each other in Ukraine
     * @example 'Закарпатська область, місто Ужгород'
     * @return string
     */
    public function cityAndRegion()
    {
        \$regionAndCityNumber = rand(0, count(static::\$region) - 1);
        \$region = static::\$region[\$regionAndCityNumber];
        \$city = static::\$city[\$regionAndCityNumber];
        \$format = \"\$region ";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 353, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 353, $this->source); })()), "html", null, true);
        echo " \$city\";

        return \$this->generator->parse(\$format);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 353,  352 => 297,  337 => 293,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('місто');
    protected static \$regionSuffix = array('область');
    protected static \$streetPrefix = array(
        'вул.', 'пров.', 'пл.', 'просп.'
    );
    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('#####');
    protected static \$country = array(
        'Афганістан',
        'Албанія',
        'Алжир',
        'Андорра',
        'Ангола',
        'Аргентина',
        'Вірменія',
        'Австралія',
        'Австрія',
        'Азербайджан',
        'Багамські острови',
        'Бахрейн',
        'Бангладеш',
        'Барбадос',
        'Білорусь',
        'Бельгія',
        'Беліз',
        'Бенін',
        'Бутан',
        'Болівія',
        'Боснія і Герцеговина',
        'Ботсвана',
        'Бразилія',
        'Бруней',
        'Болгарія',
        'Бурунді',
        'Камбоджа',
        'Камерун',
        'Канада',
        'Кабо-Верде',
        'Центрально-Африканська Республіка',
        'Чад',
        'Чилі',
        'Китай',
        'Колумбія',
        'Коморські острови',
        'Конго',
        'Конго, Демократична Республіка',
        'Коста-Ріка',
        'Хорватія',
        'Куба',
        'Кіпр',
        'Чеська республіка',
        'Данія',
        'Джибуті',
        'Домініка',
        'Домініканська Республіка',
        'східний Тимор',
        'Еквадор',
        'Єгипет',
        'Сальвадор',
        'Екваторіальна Гвінея',
        'Еритрея',
        'Естонія',
        'Ефіопія',
        'Фіджі',
        'Фінляндія',
        'Франція',
        'Габон',
        'Гамбія',
        'Грузія',
        'Німеччина',
        'Гана',
        'Греція',
        'Гренада',
        'Гватемала',
        'Гвінея',
        'Гвінея-Бісау',
        'Гайана',
        'Гаїті',
        'Гондурас',
        'Угорщина',
        'Ісландія',
        'Індія',
        'Індонезія',
        'Іран',
        'Ірак',
        'Ірландія',
        'Ізраїль',
        'Італія',
        'Ямайка',
        'Японія',
        'Йорданія',
        'Казахстан',
        'Кенія',
        'Кірібаті',
        'Північна Корея',
        'Південна Корея',
        'Косово',
        'Кувейт',
        'Киргизія',
        'Лаос',
        'Латвія',
        'Ліван',
        'Лесото',
        'Ліберія',
        'Лівія',
        'Ліхтенштейн',
        'Литва',
        'Люксембург',
        'Македонії',
        'Мадагаскар',
        'Малаві',
        'Малайзія',
        'Мальдіви',
        'Малі',
        'Мальта',
        'Маршаллові острови',
        'Мавританія',
        'Маврикій',
        'Мексика',
        'Мікронезія',
        'Молдова',
        'Монако',
        'Монголія',
        'Чорногорія',
        'Марокко',
        'Мозамбік',
        'М\\'янма',
        'Намібія',
        'Науру',
        'Непал',
        'Нідерланди',
        'Нова Зеландія',
        'Нікарагуа',
        'Нігер',
        'Нігерія',
        'Норвегія',
        'Оман',
        'Пакистан',
        'Палау',
        'Панама',
        'Папуа-Нова Гвінея',
        'Парагвай',
        'Перу',
        'Філіппіни',
        'Польща',
        'Португалія',
        'Катар',
        'Румунія',
        'Російська Федерація',
        'Руанда',
        'Сент-Кітс і Невіс',
        'Сент-Люсія',
        'Сент-Вінсент і Гренадіни',
        'Самоа',
        'Саудівська Аравія',
        'Сенегал',
        'Сербія',
        'Сейшельські острови',
        'Сьєрра-Леоне',
        'Сінгапур',
        'Словаччина',
        'Словенія',
        'Соломонові острови',
        'Сомалі',
        'ПАР',
        'Іспанія',
        'Шрі Ланка',
        'Судан',
        'Сурінам',
        'Свазіленд',
        'Швеція',
        'Швейцарія',
        'Сирія',
        'Тайвань',
        'Таджикистан',
        'Танзанія',
        'Таїланд',
        'Того',
        'Тонга',
        'Тринідад і Тобаго',
        'Туніс',
        'Туреччина',
        'Туркменістан',
        'Тувалу',
        'Уганда',
        'Україна',
        'Об\\'єднані Арабські Емірати',
        'Великобританія',
        'Сполучені Штати',
        'Уругвай',
        'Узбекистан',
        'Вануату',
        'Ватикан',
        'Венесуела',
        'В\\'єтнам',
        'Ємен',
        'Замбія',
        'Зімбабве',
    );

    protected static \$region = array(
        'Вінницька',
        'Волинська',
        'Дніпропетровська',
        'Донецька',
        'Житомирська',
        'Закарпатська',
        'Запорізька',
        'Івано-Франківська',
        'Київська',
        'Кіровоградська',
        'Луганська',
        'Львівська',
        'Миколаївська',
        'Одеська',
        'Полтавська',
        'Рівненська',
        'Сумська',
        'Тернопільська',
        'Харківська',
        'Херсонська',
        'Хмельницька',
        'Черкаська',
        'Чернівецька',
        'Чернігівська'
    );

    protected static \$city = array(
        'Вінниця',
        'Луцьк',
        'Дніпропетровськ',
        'Донецьк',
        'Житомир',
        'Ужгород',
        'Запоріжжя',
        'Івано-Франківськ',
        'Київ',
        'Кіровоград',
        'Луганськ',
        'Львів',
        'Миколаїв',
        'Одеса',
        'Полтава',
        'Рівне',
        'Суми',
        'Тернопіль',
        'Харків',
        'Херсон',
        'Хмельницький',
        'Черкаси',
        'Чернівці',
        'Чернігів'
    );

    /**
     * @see list of Ukraine street (2017-08-08), source: http://ukrexport.gov.ua/ukr/useful_info/gov/
     */
    protected static \$street = array(
        'Тараса Шевченка',
        'Лесі Українки',
        'Михайла Грушевського',
        'Урицького',
        'П. Орлика',
        'Хрещатик',
        'Артема',
        'Копиленка',
        'Різницька',
        'Лук’янівська',
        'Паторжинського',
        'Солом’янська',
        'Арсенальна',
        'Мельникова',
        'Володимирська',
        'Фізкультури',
        'Львівська',
        'Шота Руставелі',
        'Прорізна',
        'І. Франкa',
        'Б. Грінченка',
        'Інститутська',
        'Пирогова',
        'М. Коцюбинського',
        'Володимирська'
    );

    protected static \$addressFormats = array(
        \"{{postcode}}, {{cityAndRegion}}, {{streetPrefix}} {{streetName}}, {{buildingNumber}}\",
    );

    protected static \$streetAddressFormats = array(
        \"{{streetPrefix}} {{streetName}}, {{buildingNumber}}\"
    );

    public static function citySuffix()
    {
        // We don't use city suffix
        return '';
    }

    public static function streetSuffix()
    {
        // We don't use street suffix
        return '';
    }

    public function streetName()
    {
        return static::randomElement(static::\$street);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * Get city and region together
     * We need it because city and region must comply each other in Ukraine
     * @example 'Закарпатська область, місто Ужгород'
     * @return string
     */
    public function cityAndRegion()
    {
        \$regionAndCityNumber = rand(0, count(static::\$region) - 1);
        \$region = static::\$region[\$regionAndCityNumber];
        \$city = static::\$city[\$regionAndCityNumber];
        \$format = \"\$region {{regionSuffix}}, {{cityPrefix}} \$city\";

        return \$this->generator->parse(\$format);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Address.php");
    }
}
