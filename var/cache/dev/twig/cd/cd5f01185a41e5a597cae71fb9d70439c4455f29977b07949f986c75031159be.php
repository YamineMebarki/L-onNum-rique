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

/* vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php */
class __TwigTemplate_d1b24a70750b989e71597b7a9a8038a6caf04761bbced4c5af6d60708e0d2548 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ru_RU;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('город');

    protected static \$regionSuffix = array('область');
    protected static \$streetPrefix = array(
        'пер.', 'ул.', 'пр.', 'шоссе', 'пл.', 'бульвар',
        'въезд', 'спуск', 'проезд', 'наб.',
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('######');
    
    /**
     * @link https://ru.wikipedia.org/wiki/Общероссийский_классификатор_стран_мира#Список_стран_согласно_Классификатору
     */
    protected static \$country = array(
        'Абхазия', 'Австралия', 'Австрия', 'Азербайджан', 'Албания', 'Алжир', 'Американское Самоа', 'Ангилья', 'Ангола', 'Андорра', 'Антарктида', 'Антигуа и Барбуда', 'Аргентина', 'Армения', 'Аруба', 'Афганистан',
        'Багамы', 'Бангладеш', 'Барбадос', 'Бахрейн', 'Беларусь', 'Белиз', 'Бельгия', 'Бенин', 'Бермуды', 'Болгария', 'Боливия', 'Бонэйр, Синт-Эстатиус и Саба', 'Босния и Герцеговина', 'Ботсвана', 'Бразилия', 'Британская Территория в Индийском Океане', 'Британские Виргинские Острова', 'Бруней', 'Буркина-Фасо', 'Бурунди', 'Бутан',
        'Вануату', 'Ватикан', 'Венгрия', 'Венесуэла', 'Великобритания', 'Виргинские Острова Соединённых Штатов', 'Вьетнам',
        'Габон', 'Гаити', 'Гайана', 'Гамбия', 'Гана', 'Гваделупа', 'Гватемала', 'Гвинея', 'Гвинея-Бисау', 'Германия', 'Гернси', 'Гибралтар', 'Гондурас', 'Гонконг', 'Гренада', 'Гренландия', 'Греция', 'Грузия', 'Гуам',
        'Дания', 'Демократическая Республика Конго', 'Джерси', 'Джибути', 'Доминика', 'Доминиканская Республика',
        'Египет',
        'Замбия', 'Западная Сахара', 'Зимбабве',
        'Израиль', 'Индия', 'Индонезия', 'Иордания', 'Ирак', 'Иран', 'Ирландия', 'Исландия', 'Испания', 'Италия',
        'Йемен',
        'Кабо-Верде', 'Казахстан', 'Камбоджа', 'Камерун', 'Канада', 'Катар', 'Кения', 'Кипр', 'Киргизия', 'Кирибати', 'Китай', 'Кокосовые острова', 'Колумбия', 'Коморы', 'Конго', 'Корейская Народно-Демократическая Республика', 'Корея', 'Коста-Рика', 'Кот-д\\'Ивуар', 'Куба', 'Кувейт', 'Кюрасао',
        'Лаос', 'Латвия', 'Лесото', 'Либерия', 'Ливан', 'Ливия', 'Литва', 'Лихтенштейн', 'Люксембург',
        'Маврикий', 'Мавритания', 'Мадагаскар', 'Майотта', 'Макао', 'Малави', 'Малайзия', 'Мали', 'Малые Тихоокеанские Отдаленные Острова Соединенных Штатов', 'Мальдивы', 'Мальта', 'Марокко', 'Мартиника', 'Маршалловы Острова', 'Мексика', 'Микронезия', 'Мозамбик', 'Молдова', 'Монако', 'Монголия', 'Монтсеррат', 'Мьянма',
        'Намибия', 'Науру', 'Непал', 'Нигер', 'Нигерия', 'Нидерланды', 'Никарагуа', 'Ниуэ', 'Новая Зеландия', 'Новая Каледония', 'Норвегия',
        'Объединенные Арабские Эмираты', 'Оман', 'Острова Кайман', 'Острова Кука', 'Острова Теркс и Кайкос', 'Остров Буве', 'Остров Мэн', 'Остров Норфолк', 'Остров Рождества', 'Остров Херд и Острова Макдональд',
        'Пакистан', 'Палау', 'Палестина', 'Панама', 'Папуа-Новая Гвинея', 'Парагвай', 'Перу', 'Питкерн', 'Польша', 'Португалия', 'Пуэрто-Рико',
        'Республика Македония', 'Реюньон', 'Россия', 'Руанда', 'Румыния',
        'Самоа', 'Сан-Марино', 'Сан-Томе и Принсипи', 'Саудовская Аравия', 'Свазиленд', 'Святая Елена, Остров Вознесения, Тристан-да-кунья', 'Северные Марианские Острова', 'Сейшелы', 'Сен-Бартелеми', 'Сен-Мартен', 'Сенегал', 'Сент-Винсент и Гренадины', 'Сент-Китс и Невис', 'Сент-Люсия', 'Сент-Пьер и Микелон', 'Сербия', 'Сингапур', 'Сирийская Арабская Республика', 'Словакия', 'Словения', 'Соединенные Штаты Америки', 'Соломоновы Острова', 'Сомали', 'Судан', 'Суринам', 'Сьерра-Леоне',
        'Таджикистан', 'Таиланд', 'Тайвань', 'Танзания', 'Тимор-лесте', 'Того', 'Токелау', 'Тонга', 'Тринидад и Тобаго', 'Тувалу', 'Тунис', 'Туркмения', 'Турция',
        'Уганда', 'Узбекистан', 'Украина', 'Уоллис и Футуна', 'Уругвай',
        'Фарерские острова', 'Фиджи', 'Филиппины', 'Финляндия', 'Фолклендские острова', 'Франция', 'Французская Гвиана', 'Французская Полинезия', 'Французские Южные Территории',
        'Хорватия',
        'Центрально-Африканская Республика',
        'Чад', 'Черногория', 'Чехия', 'Чили',
        'Швейцария', 'Швеция', 'Шпицберген и Ян-Майен', 'Шри-Ланка',
        'Эквадор', 'Экваториальная Гвинея', 'Эландские Острова', 'Эль-Сальвадор', 'Эритрея', 'Эстония', 'Эфиопия',
        'Южная Африка', 'Южная Джорджия и Южные Сандвичевы Острова', 'Южная Осетия', 'Южный Судан',
        'Ямайка', 'Япония',
    );

    protected static \$region = array(
        'Амурская', 'Архангельская', 'Астраханская', 'Белгородская', 'Брянская',
        'Владимирская', 'Волгоградская', 'Вологодская', 'Воронежская', 'Ивановская',
        'Иркутская', 'Калининградская', 'Калужская', 'Кемеровская', 'Кировская',
        'Костромская', 'Курганская', 'Курская', 'Ленинградская', 'Липецкая',
        'Магаданская', 'Московская', 'Мурманская', 'Нижегородская', 'Новгородская',
        'Новосибирская', 'Омская', 'Оренбургская', 'Орловская', 'Пензенская',
        'Псковская', 'Ростовская', 'Рязанская', 'Самарская', 'Саратовская',
        'Сахалинская', 'Свердловская', 'Смоленская', 'Тамбовская', 'Тверская',
        'Томская', 'Тульская', 'Тюменская', 'Ульяновская', 'Челябинская',
        'Читинская', 'Ярославская',
    );

    protected static \$city = array(
        'Балашиха', 'Видное', 'Волоколамск', 'Воскресенск', 'Дмитров',
        'Домодедово', 'Дорохово', 'Егорьевск', 'Зарайск', 'Истра',
        'Кашира', 'Клин', 'Коломна', 'Красногорск', 'Лотошино',
        'Луховицы', 'Люберцы', 'Можайск', 'Москва', 'Мытищи',
        'Наро-Фоминск', 'Ногинск', 'Одинцово', 'Озёры', 'Орехово-Зуево',
        'Павловский Посад', 'Подольск', 'Пушкино', 'Раменское', 'Сергиев Посад',
        'Серебряные Пруды', 'Серпухов', 'Солнечногорск', 'Ступино', 'Талдом',
        'Чехов', 'Шатура', 'Шаховская', 'Щёлково',
    );

    protected static \$street = array(
        'Косиора', 'Ладыгина', 'Ленина', 'Ломоносова', 'Домодедовская', 'Гоголя', '1905 года', 'Чехова', 'Сталина',
        'Космонавтов', 'Гагарина', 'Славы', 'Бухарестская', 'Будапештсткая', 'Балканская'
    );

    protected static \$addressFormats = array(
        \"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 81, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 81, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 81, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 81, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$streetAddressFormats = array(
        \"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 85, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 85, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\"
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
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

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 85,  125 => 81,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ru_RU;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('город');

    protected static \$regionSuffix = array('область');
    protected static \$streetPrefix = array(
        'пер.', 'ул.', 'пр.', 'шоссе', 'пл.', 'бульвар',
        'въезд', 'спуск', 'проезд', 'наб.',
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('######');
    
    /**
     * @link https://ru.wikipedia.org/wiki/Общероссийский_классификатор_стран_мира#Список_стран_согласно_Классификатору
     */
    protected static \$country = array(
        'Абхазия', 'Австралия', 'Австрия', 'Азербайджан', 'Албания', 'Алжир', 'Американское Самоа', 'Ангилья', 'Ангола', 'Андорра', 'Антарктида', 'Антигуа и Барбуда', 'Аргентина', 'Армения', 'Аруба', 'Афганистан',
        'Багамы', 'Бангладеш', 'Барбадос', 'Бахрейн', 'Беларусь', 'Белиз', 'Бельгия', 'Бенин', 'Бермуды', 'Болгария', 'Боливия', 'Бонэйр, Синт-Эстатиус и Саба', 'Босния и Герцеговина', 'Ботсвана', 'Бразилия', 'Британская Территория в Индийском Океане', 'Британские Виргинские Острова', 'Бруней', 'Буркина-Фасо', 'Бурунди', 'Бутан',
        'Вануату', 'Ватикан', 'Венгрия', 'Венесуэла', 'Великобритания', 'Виргинские Острова Соединённых Штатов', 'Вьетнам',
        'Габон', 'Гаити', 'Гайана', 'Гамбия', 'Гана', 'Гваделупа', 'Гватемала', 'Гвинея', 'Гвинея-Бисау', 'Германия', 'Гернси', 'Гибралтар', 'Гондурас', 'Гонконг', 'Гренада', 'Гренландия', 'Греция', 'Грузия', 'Гуам',
        'Дания', 'Демократическая Республика Конго', 'Джерси', 'Джибути', 'Доминика', 'Доминиканская Республика',
        'Египет',
        'Замбия', 'Западная Сахара', 'Зимбабве',
        'Израиль', 'Индия', 'Индонезия', 'Иордания', 'Ирак', 'Иран', 'Ирландия', 'Исландия', 'Испания', 'Италия',
        'Йемен',
        'Кабо-Верде', 'Казахстан', 'Камбоджа', 'Камерун', 'Канада', 'Катар', 'Кения', 'Кипр', 'Киргизия', 'Кирибати', 'Китай', 'Кокосовые острова', 'Колумбия', 'Коморы', 'Конго', 'Корейская Народно-Демократическая Республика', 'Корея', 'Коста-Рика', 'Кот-д\\'Ивуар', 'Куба', 'Кувейт', 'Кюрасао',
        'Лаос', 'Латвия', 'Лесото', 'Либерия', 'Ливан', 'Ливия', 'Литва', 'Лихтенштейн', 'Люксембург',
        'Маврикий', 'Мавритания', 'Мадагаскар', 'Майотта', 'Макао', 'Малави', 'Малайзия', 'Мали', 'Малые Тихоокеанские Отдаленные Острова Соединенных Штатов', 'Мальдивы', 'Мальта', 'Марокко', 'Мартиника', 'Маршалловы Острова', 'Мексика', 'Микронезия', 'Мозамбик', 'Молдова', 'Монако', 'Монголия', 'Монтсеррат', 'Мьянма',
        'Намибия', 'Науру', 'Непал', 'Нигер', 'Нигерия', 'Нидерланды', 'Никарагуа', 'Ниуэ', 'Новая Зеландия', 'Новая Каледония', 'Норвегия',
        'Объединенные Арабские Эмираты', 'Оман', 'Острова Кайман', 'Острова Кука', 'Острова Теркс и Кайкос', 'Остров Буве', 'Остров Мэн', 'Остров Норфолк', 'Остров Рождества', 'Остров Херд и Острова Макдональд',
        'Пакистан', 'Палау', 'Палестина', 'Панама', 'Папуа-Новая Гвинея', 'Парагвай', 'Перу', 'Питкерн', 'Польша', 'Португалия', 'Пуэрто-Рико',
        'Республика Македония', 'Реюньон', 'Россия', 'Руанда', 'Румыния',
        'Самоа', 'Сан-Марино', 'Сан-Томе и Принсипи', 'Саудовская Аравия', 'Свазиленд', 'Святая Елена, Остров Вознесения, Тристан-да-кунья', 'Северные Марианские Острова', 'Сейшелы', 'Сен-Бартелеми', 'Сен-Мартен', 'Сенегал', 'Сент-Винсент и Гренадины', 'Сент-Китс и Невис', 'Сент-Люсия', 'Сент-Пьер и Микелон', 'Сербия', 'Сингапур', 'Сирийская Арабская Республика', 'Словакия', 'Словения', 'Соединенные Штаты Америки', 'Соломоновы Острова', 'Сомали', 'Судан', 'Суринам', 'Сьерра-Леоне',
        'Таджикистан', 'Таиланд', 'Тайвань', 'Танзания', 'Тимор-лесте', 'Того', 'Токелау', 'Тонга', 'Тринидад и Тобаго', 'Тувалу', 'Тунис', 'Туркмения', 'Турция',
        'Уганда', 'Узбекистан', 'Украина', 'Уоллис и Футуна', 'Уругвай',
        'Фарерские острова', 'Фиджи', 'Филиппины', 'Финляндия', 'Фолклендские острова', 'Франция', 'Французская Гвиана', 'Французская Полинезия', 'Французские Южные Территории',
        'Хорватия',
        'Центрально-Африканская Республика',
        'Чад', 'Черногория', 'Чехия', 'Чили',
        'Швейцария', 'Швеция', 'Шпицберген и Ян-Майен', 'Шри-Ланка',
        'Эквадор', 'Экваториальная Гвинея', 'Эландские Острова', 'Эль-Сальвадор', 'Эритрея', 'Эстония', 'Эфиопия',
        'Южная Африка', 'Южная Джорджия и Южные Сандвичевы Острова', 'Южная Осетия', 'Южный Судан',
        'Ямайка', 'Япония',
    );

    protected static \$region = array(
        'Амурская', 'Архангельская', 'Астраханская', 'Белгородская', 'Брянская',
        'Владимирская', 'Волгоградская', 'Вологодская', 'Воронежская', 'Ивановская',
        'Иркутская', 'Калининградская', 'Калужская', 'Кемеровская', 'Кировская',
        'Костромская', 'Курганская', 'Курская', 'Ленинградская', 'Липецкая',
        'Магаданская', 'Московская', 'Мурманская', 'Нижегородская', 'Новгородская',
        'Новосибирская', 'Омская', 'Оренбургская', 'Орловская', 'Пензенская',
        'Псковская', 'Ростовская', 'Рязанская', 'Самарская', 'Саратовская',
        'Сахалинская', 'Свердловская', 'Смоленская', 'Тамбовская', 'Тверская',
        'Томская', 'Тульская', 'Тюменская', 'Ульяновская', 'Челябинская',
        'Читинская', 'Ярославская',
    );

    protected static \$city = array(
        'Балашиха', 'Видное', 'Волоколамск', 'Воскресенск', 'Дмитров',
        'Домодедово', 'Дорохово', 'Егорьевск', 'Зарайск', 'Истра',
        'Кашира', 'Клин', 'Коломна', 'Красногорск', 'Лотошино',
        'Луховицы', 'Люберцы', 'Можайск', 'Москва', 'Мытищи',
        'Наро-Фоминск', 'Ногинск', 'Одинцово', 'Озёры', 'Орехово-Зуево',
        'Павловский Посад', 'Подольск', 'Пушкино', 'Раменское', 'Сергиев Посад',
        'Серебряные Пруды', 'Серпухов', 'Солнечногорск', 'Ступино', 'Талдом',
        'Чехов', 'Шатура', 'Шаховская', 'Щёлково',
    );

    protected static \$street = array(
        'Косиора', 'Ладыгина', 'Ленина', 'Ломоносова', 'Домодедовская', 'Гоголя', '1905 года', 'Чехова', 'Сталина',
        'Космонавтов', 'Гагарина', 'Славы', 'Бухарестская', 'Будапештсткая', 'Балканская'
    );

    protected static \$addressFormats = array(
        \"{{postcode}}, {{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{streetPrefix}} {{street}}, {{buildingNumber}}\",
    );

    protected static \$streetAddressFormats = array(
        \"{{streetPrefix}} {{street}}, {{buildingNumber}}\"
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
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

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Address.php");
    }
}
