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

/* vendor/symfony/intl/Resources/data/regions/tg.json */
class __TwigTemplate_bd03acafca4d3089d59fa20cd0d9d5d18f5b16028a22aae2fc9a5862cd3697f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/tg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/tg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Андорра\",
        \"AE\": \"Аморатҳои Муттаҳидаи Араб\",
        \"AF\": \"Афғонистон\",
        \"AG\": \"Антигуа ва Барбуда\",
        \"AI\": \"Ангилия\",
        \"AL\": \"Албания\",
        \"AM\": \"Арманистон\",
        \"AO\": \"Ангола\",
        \"AQ\": \"Антарктида\",
        \"AR\": \"Аргентина\",
        \"AS\": \"Самоаи Америка\",
        \"AT\": \"Австрия\",
        \"AU\": \"Австралия\",
        \"AW\": \"Аруба\",
        \"AX\": \"Ҷазираҳои Аланд\",
        \"AZ\": \"Озарбойҷон\",
        \"BA\": \"Босния ва Ҳерсеговина\",
        \"BB\": \"Барбадос\",
        \"BD\": \"Бангладеш\",
        \"BE\": \"Белгия\",
        \"BF\": \"Буркина-Фасо\",
        \"BG\": \"Булғория\",
        \"BH\": \"Баҳрайн\",
        \"BI\": \"Бурунди\",
        \"BJ\": \"Бенин\",
        \"BL\": \"Сент-Бартелми\",
        \"BM\": \"Бермуда\",
        \"BN\": \"Бруней\",
        \"BO\": \"Боливия\",
        \"BR\": \"Бразилия\",
        \"BS\": \"Багам\",
        \"BT\": \"Бутон\",
        \"BV\": \"Ҷазираи Буве\",
        \"BW\": \"Ботсвана\",
        \"BY\": \"Белорус\",
        \"BZ\": \"Белиз\",
        \"CA\": \"Канада\",
        \"CC\": \"Ҷазираҳои Кокос (Килинг)\",
        \"CF\": \"Ҷумҳурии Африқои Марказӣ\",
        \"CH\": \"Швейтсария\",
        \"CI\": \"Кот-д’Ивуар\",
        \"CK\": \"Ҷазираҳои Кук\",
        \"CL\": \"Чили\",
        \"CM\": \"Камерун\",
        \"CN\": \"Хитой\",
        \"CO\": \"Колумбия\",
        \"CR\": \"Коста-Рика\",
        \"CU\": \"Куба\",
        \"CV\": \"Кабо-Верде\",
        \"CW\": \"Кюрасао\",
        \"CX\": \"Ҷазираи Крисмас\",
        \"CY\": \"Кипр\",
        \"CZ\": \"Ҷумҳурии Чех\",
        \"DE\": \"Германия\",
        \"DJ\": \"Ҷибути\",
        \"DK\": \"Дания\",
        \"DM\": \"Доминика\",
        \"DO\": \"Ҷумҳурии Доминикан\",
        \"DZ\": \"Алҷазоир\",
        \"EC\": \"Эквадор\",
        \"EE\": \"Эстония\",
        \"EG\": \"Миср\",
        \"ER\": \"Эритрея\",
        \"ES\": \"Испания\",
        \"ET\": \"Эфиопия\",
        \"FI\": \"Финляндия\",
        \"FJ\": \"Фиҷи\",
        \"FK\": \"Ҷазираҳои Фолкленд\",
        \"FM\": \"Штатҳои Федеративии Микронезия\",
        \"FO\": \"Ҷазираҳои Фарер\",
        \"FR\": \"Фаронса\",
        \"GA\": \"Габон\",
        \"GB\": \"Шоҳигарии Муттаҳида\",
        \"GD\": \"Гренада\",
        \"GE\": \"Гурҷистон\",
        \"GF\": \"Гвианаи Фаронса\",
        \"GG\": \"Гернси\",
        \"GH\": \"Гана\",
        \"GI\": \"Гибралтар\",
        \"GL\": \"Гренландия\",
        \"GM\": \"Гамбия\",
        \"GN\": \"Гвинея\",
        \"GP\": \"Гваделупа\",
        \"GQ\": \"Гвинеяи Экваторӣ\",
        \"GR\": \"Юнон\",
        \"GS\": \"Ҷорҷияи Ҷанубӣ ва Ҷазираҳои Сандвич\",
        \"GT\": \"Гватемала\",
        \"GU\": \"Гуам\",
        \"GW\": \"Гвинея-Бисау\",
        \"GY\": \"Гайана\",
        \"HK\": \"Ҳонконг (МММ)\",
        \"HM\": \"Ҷазираи Ҳерд ва Ҷазираҳои Макдоналд\",
        \"HN\": \"Гондурас\",
        \"HR\": \"Хорватия\",
        \"HT\": \"Гаити\",
        \"HU\": \"Маҷористон\",
        \"ID\": \"Индонезия\",
        \"IE\": \"Ирландия\",
        \"IL\": \"Исроил\",
        \"IM\": \"Ҷазираи Мэн\",
        \"IN\": \"Ҳиндустон\",
        \"IO\": \"Қаламрави Британия дар уқёнуси Ҳинд\",
        \"IQ\": \"Ироқ\",
        \"IR\": \"Эрон\",
        \"IS\": \"Исландия\",
        \"IT\": \"Италия\",
        \"JE\": \"Ҷерси\",
        \"JM\": \"Ямайка\",
        \"JO\": \"Урдун\",
        \"JP\": \"Япония\",
        \"KE\": \"Кения\",
        \"KG\": \"Қирғизистон\",
        \"KH\": \"Камбоҷа\",
        \"KI\": \"Кирибати\",
        \"KM\": \"Комор\",
        \"KN\": \"Сент-Китс ва Невис\",
        \"KP\": \"Кореяи Шимолӣ\",
        \"KW\": \"Қувайт\",
        \"KY\": \"Ҷазираҳои Кайман\",
        \"KZ\": \"Қазоқистон\",
        \"LA\": \"Лаос\",
        \"LB\": \"Лубнон\",
        \"LC\": \"Сент-Люсия\",
        \"LI\": \"Лихтенштейн\",
        \"LK\": \"Шри-Ланка\",
        \"LR\": \"Либерия\",
        \"LS\": \"Лесото\",
        \"LT\": \"Литва\",
        \"LU\": \"Люксембург\",
        \"LV\": \"Латвия\",
        \"LY\": \"Либия\",
        \"MA\": \"Марокаш\",
        \"MC\": \"Монако\",
        \"MD\": \"Молдова\",
        \"ME\": \"Черногория\",
        \"MF\": \"Ҷазираи Сент-Мартин\",
        \"MG\": \"Мадагаскар\",
        \"MH\": \"Ҷазираҳои Маршалл\",
        \"MK\": \"Македонияи Шимолӣ\",
        \"ML\": \"Мали\",
        \"MM\": \"Мянма\",
        \"MN\": \"Муғулистон\",
        \"MO\": \"Макао (МММ)\",
        \"MP\": \"Ҷазираҳои Марианаи Шимолӣ\",
        \"MQ\": \"Мартиника\",
        \"MR\": \"Мавритания\",
        \"MS\": \"Монтсеррат\",
        \"MT\": \"Малта\",
        \"MU\": \"Маврикий\",
        \"MV\": \"Малдив\",
        \"MW\": \"Малави\",
        \"MX\": \"Мексика\",
        \"MY\": \"Малайзия\",
        \"MZ\": \"Мозамбик\",
        \"NA\": \"Намибия\",
        \"NC\": \"Каледонияи Нав\",
        \"NE\": \"Нигер\",
        \"NF\": \"Ҷазираи Норфолк\",
        \"NG\": \"Нигерия\",
        \"NI\": \"Никарагуа\",
        \"NL\": \"Нидерландия\",
        \"NO\": \"Норвегия\",
        \"NP\": \"Непал\",
        \"NR\": \"Науру\",
        \"NU\": \"Ниуэ\",
        \"NZ\": \"Зеландияи Нав\",
        \"OM\": \"Умон\",
        \"PA\": \"Панама\",
        \"PE\": \"Перу\",
        \"PF\": \"Полинезияи Фаронса\",
        \"PG\": \"Папуа Гвинеяи Нав\",
        \"PH\": \"Филиппин\",
        \"PK\": \"Покистон\",
        \"PL\": \"Лаҳистон\",
        \"PM\": \"Сент-Пер ва Микелон\",
        \"PN\": \"Ҷазираҳои Питкейрн\",
        \"PR\": \"Пуэрто-Рико\",
        \"PT\": \"Португалия\",
        \"PW\": \"Палау\",
        \"PY\": \"Парагвай\",
        \"QA\": \"Қатар\",
        \"RE\": \"Реюнион\",
        \"RO\": \"Руминия\",
        \"RS\": \"Сербия\",
        \"RU\": \"Русия\",
        \"RW\": \"Руанда\",
        \"SA\": \"Арабистони Саудӣ\",
        \"SB\": \"Ҷазираҳои Соломон\",
        \"SC\": \"Сейшел\",
        \"SD\": \"Судон\",
        \"SE\": \"Шветсия\",
        \"SG\": \"Сингапур\",
        \"SH\": \"Сент Елена\",
        \"SI\": \"Словения\",
        \"SJ\": \"Шпитсберген ва Ян Майен\",
        \"SK\": \"Словакия\",
        \"SL\": \"Сиерра-Леоне\",
        \"SM\": \"Сан-Марино\",
        \"SN\": \"Сенегал\",
        \"SO\": \"Сомалӣ\",
        \"SR\": \"Суринам\",
        \"SS\": \"Судони Ҷанубӣ\",
        \"ST\": \"Сан Томе ва Принсипи\",
        \"SV\": \"Эл-Салвадор\",
        \"SX\": \"Синт-Маартен\",
        \"SY\": \"Сурия\",
        \"SZ\": \"Свазиленд\",
        \"TC\": \"Ҷазираҳои Теркс ва Кайкос\",
        \"TD\": \"Чад\",
        \"TF\": \"Минтақаҳои Ҷанубии Фаронса\",
        \"TG\": \"Того\",
        \"TH\": \"Таиланд\",
        \"TJ\": \"Тоҷикистон\",
        \"TK\": \"Токелау\",
        \"TL\": \"Тимор-Лесте\",
        \"TM\": \"Туркманистон\",
        \"TN\": \"Тунис\",
        \"TO\": \"Тонга\",
        \"TR\": \"Туркия\",
        \"TT\": \"Тринидад ва Тобаго\",
        \"TV\": \"Тувалу\",
        \"TW\": \"Тайван\",
        \"TZ\": \"Танзания\",
        \"UA\": \"Украина\",
        \"UG\": \"Уганда\",
        \"UM\": \"Ҷазираҳои Хурди Дурдасти ИМА\",
        \"US\": \"Иёлоти Муттаҳида\",
        \"UY\": \"Уругвай\",
        \"UZ\": \"Ӯзбекистон\",
        \"VA\": \"Шаҳри Вотикон\",
        \"VC\": \"Сент-Винсент ва Гренадина\",
        \"VE\": \"Венесуэла\",
        \"VG\": \"Ҷазираҳои Виргини Британия\",
        \"VI\": \"Ҷазираҳои Виргини ИМА\",
        \"VN\": \"Ветнам\",
        \"VU\": \"Вануату\",
        \"WF\": \"Уоллис ва Футуна\",
        \"WS\": \"Самоа\",
        \"YE\": \"Яман\",
        \"YT\": \"Майотта\",
        \"ZA\": \"Африкаи Ҷанубӣ\",
        \"ZM\": \"Замбия\",
        \"ZW\": \"Зимбабве\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/tg.json";
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
        \"AD\": \"Андорра\",
        \"AE\": \"Аморатҳои Муттаҳидаи Араб\",
        \"AF\": \"Афғонистон\",
        \"AG\": \"Антигуа ва Барбуда\",
        \"AI\": \"Ангилия\",
        \"AL\": \"Албания\",
        \"AM\": \"Арманистон\",
        \"AO\": \"Ангола\",
        \"AQ\": \"Антарктида\",
        \"AR\": \"Аргентина\",
        \"AS\": \"Самоаи Америка\",
        \"AT\": \"Австрия\",
        \"AU\": \"Австралия\",
        \"AW\": \"Аруба\",
        \"AX\": \"Ҷазираҳои Аланд\",
        \"AZ\": \"Озарбойҷон\",
        \"BA\": \"Босния ва Ҳерсеговина\",
        \"BB\": \"Барбадос\",
        \"BD\": \"Бангладеш\",
        \"BE\": \"Белгия\",
        \"BF\": \"Буркина-Фасо\",
        \"BG\": \"Булғория\",
        \"BH\": \"Баҳрайн\",
        \"BI\": \"Бурунди\",
        \"BJ\": \"Бенин\",
        \"BL\": \"Сент-Бартелми\",
        \"BM\": \"Бермуда\",
        \"BN\": \"Бруней\",
        \"BO\": \"Боливия\",
        \"BR\": \"Бразилия\",
        \"BS\": \"Багам\",
        \"BT\": \"Бутон\",
        \"BV\": \"Ҷазираи Буве\",
        \"BW\": \"Ботсвана\",
        \"BY\": \"Белорус\",
        \"BZ\": \"Белиз\",
        \"CA\": \"Канада\",
        \"CC\": \"Ҷазираҳои Кокос (Килинг)\",
        \"CF\": \"Ҷумҳурии Африқои Марказӣ\",
        \"CH\": \"Швейтсария\",
        \"CI\": \"Кот-д’Ивуар\",
        \"CK\": \"Ҷазираҳои Кук\",
        \"CL\": \"Чили\",
        \"CM\": \"Камерун\",
        \"CN\": \"Хитой\",
        \"CO\": \"Колумбия\",
        \"CR\": \"Коста-Рика\",
        \"CU\": \"Куба\",
        \"CV\": \"Кабо-Верде\",
        \"CW\": \"Кюрасао\",
        \"CX\": \"Ҷазираи Крисмас\",
        \"CY\": \"Кипр\",
        \"CZ\": \"Ҷумҳурии Чех\",
        \"DE\": \"Германия\",
        \"DJ\": \"Ҷибути\",
        \"DK\": \"Дания\",
        \"DM\": \"Доминика\",
        \"DO\": \"Ҷумҳурии Доминикан\",
        \"DZ\": \"Алҷазоир\",
        \"EC\": \"Эквадор\",
        \"EE\": \"Эстония\",
        \"EG\": \"Миср\",
        \"ER\": \"Эритрея\",
        \"ES\": \"Испания\",
        \"ET\": \"Эфиопия\",
        \"FI\": \"Финляндия\",
        \"FJ\": \"Фиҷи\",
        \"FK\": \"Ҷазираҳои Фолкленд\",
        \"FM\": \"Штатҳои Федеративии Микронезия\",
        \"FO\": \"Ҷазираҳои Фарер\",
        \"FR\": \"Фаронса\",
        \"GA\": \"Габон\",
        \"GB\": \"Шоҳигарии Муттаҳида\",
        \"GD\": \"Гренада\",
        \"GE\": \"Гурҷистон\",
        \"GF\": \"Гвианаи Фаронса\",
        \"GG\": \"Гернси\",
        \"GH\": \"Гана\",
        \"GI\": \"Гибралтар\",
        \"GL\": \"Гренландия\",
        \"GM\": \"Гамбия\",
        \"GN\": \"Гвинея\",
        \"GP\": \"Гваделупа\",
        \"GQ\": \"Гвинеяи Экваторӣ\",
        \"GR\": \"Юнон\",
        \"GS\": \"Ҷорҷияи Ҷанубӣ ва Ҷазираҳои Сандвич\",
        \"GT\": \"Гватемала\",
        \"GU\": \"Гуам\",
        \"GW\": \"Гвинея-Бисау\",
        \"GY\": \"Гайана\",
        \"HK\": \"Ҳонконг (МММ)\",
        \"HM\": \"Ҷазираи Ҳерд ва Ҷазираҳои Макдоналд\",
        \"HN\": \"Гондурас\",
        \"HR\": \"Хорватия\",
        \"HT\": \"Гаити\",
        \"HU\": \"Маҷористон\",
        \"ID\": \"Индонезия\",
        \"IE\": \"Ирландия\",
        \"IL\": \"Исроил\",
        \"IM\": \"Ҷазираи Мэн\",
        \"IN\": \"Ҳиндустон\",
        \"IO\": \"Қаламрави Британия дар уқёнуси Ҳинд\",
        \"IQ\": \"Ироқ\",
        \"IR\": \"Эрон\",
        \"IS\": \"Исландия\",
        \"IT\": \"Италия\",
        \"JE\": \"Ҷерси\",
        \"JM\": \"Ямайка\",
        \"JO\": \"Урдун\",
        \"JP\": \"Япония\",
        \"KE\": \"Кения\",
        \"KG\": \"Қирғизистон\",
        \"KH\": \"Камбоҷа\",
        \"KI\": \"Кирибати\",
        \"KM\": \"Комор\",
        \"KN\": \"Сент-Китс ва Невис\",
        \"KP\": \"Кореяи Шимолӣ\",
        \"KW\": \"Қувайт\",
        \"KY\": \"Ҷазираҳои Кайман\",
        \"KZ\": \"Қазоқистон\",
        \"LA\": \"Лаос\",
        \"LB\": \"Лубнон\",
        \"LC\": \"Сент-Люсия\",
        \"LI\": \"Лихтенштейн\",
        \"LK\": \"Шри-Ланка\",
        \"LR\": \"Либерия\",
        \"LS\": \"Лесото\",
        \"LT\": \"Литва\",
        \"LU\": \"Люксембург\",
        \"LV\": \"Латвия\",
        \"LY\": \"Либия\",
        \"MA\": \"Марокаш\",
        \"MC\": \"Монако\",
        \"MD\": \"Молдова\",
        \"ME\": \"Черногория\",
        \"MF\": \"Ҷазираи Сент-Мартин\",
        \"MG\": \"Мадагаскар\",
        \"MH\": \"Ҷазираҳои Маршалл\",
        \"MK\": \"Македонияи Шимолӣ\",
        \"ML\": \"Мали\",
        \"MM\": \"Мянма\",
        \"MN\": \"Муғулистон\",
        \"MO\": \"Макао (МММ)\",
        \"MP\": \"Ҷазираҳои Марианаи Шимолӣ\",
        \"MQ\": \"Мартиника\",
        \"MR\": \"Мавритания\",
        \"MS\": \"Монтсеррат\",
        \"MT\": \"Малта\",
        \"MU\": \"Маврикий\",
        \"MV\": \"Малдив\",
        \"MW\": \"Малави\",
        \"MX\": \"Мексика\",
        \"MY\": \"Малайзия\",
        \"MZ\": \"Мозамбик\",
        \"NA\": \"Намибия\",
        \"NC\": \"Каледонияи Нав\",
        \"NE\": \"Нигер\",
        \"NF\": \"Ҷазираи Норфолк\",
        \"NG\": \"Нигерия\",
        \"NI\": \"Никарагуа\",
        \"NL\": \"Нидерландия\",
        \"NO\": \"Норвегия\",
        \"NP\": \"Непал\",
        \"NR\": \"Науру\",
        \"NU\": \"Ниуэ\",
        \"NZ\": \"Зеландияи Нав\",
        \"OM\": \"Умон\",
        \"PA\": \"Панама\",
        \"PE\": \"Перу\",
        \"PF\": \"Полинезияи Фаронса\",
        \"PG\": \"Папуа Гвинеяи Нав\",
        \"PH\": \"Филиппин\",
        \"PK\": \"Покистон\",
        \"PL\": \"Лаҳистон\",
        \"PM\": \"Сент-Пер ва Микелон\",
        \"PN\": \"Ҷазираҳои Питкейрн\",
        \"PR\": \"Пуэрто-Рико\",
        \"PT\": \"Португалия\",
        \"PW\": \"Палау\",
        \"PY\": \"Парагвай\",
        \"QA\": \"Қатар\",
        \"RE\": \"Реюнион\",
        \"RO\": \"Руминия\",
        \"RS\": \"Сербия\",
        \"RU\": \"Русия\",
        \"RW\": \"Руанда\",
        \"SA\": \"Арабистони Саудӣ\",
        \"SB\": \"Ҷазираҳои Соломон\",
        \"SC\": \"Сейшел\",
        \"SD\": \"Судон\",
        \"SE\": \"Шветсия\",
        \"SG\": \"Сингапур\",
        \"SH\": \"Сент Елена\",
        \"SI\": \"Словения\",
        \"SJ\": \"Шпитсберген ва Ян Майен\",
        \"SK\": \"Словакия\",
        \"SL\": \"Сиерра-Леоне\",
        \"SM\": \"Сан-Марино\",
        \"SN\": \"Сенегал\",
        \"SO\": \"Сомалӣ\",
        \"SR\": \"Суринам\",
        \"SS\": \"Судони Ҷанубӣ\",
        \"ST\": \"Сан Томе ва Принсипи\",
        \"SV\": \"Эл-Салвадор\",
        \"SX\": \"Синт-Маартен\",
        \"SY\": \"Сурия\",
        \"SZ\": \"Свазиленд\",
        \"TC\": \"Ҷазираҳои Теркс ва Кайкос\",
        \"TD\": \"Чад\",
        \"TF\": \"Минтақаҳои Ҷанубии Фаронса\",
        \"TG\": \"Того\",
        \"TH\": \"Таиланд\",
        \"TJ\": \"Тоҷикистон\",
        \"TK\": \"Токелау\",
        \"TL\": \"Тимор-Лесте\",
        \"TM\": \"Туркманистон\",
        \"TN\": \"Тунис\",
        \"TO\": \"Тонга\",
        \"TR\": \"Туркия\",
        \"TT\": \"Тринидад ва Тобаго\",
        \"TV\": \"Тувалу\",
        \"TW\": \"Тайван\",
        \"TZ\": \"Танзания\",
        \"UA\": \"Украина\",
        \"UG\": \"Уганда\",
        \"UM\": \"Ҷазираҳои Хурди Дурдасти ИМА\",
        \"US\": \"Иёлоти Муттаҳида\",
        \"UY\": \"Уругвай\",
        \"UZ\": \"Ӯзбекистон\",
        \"VA\": \"Шаҳри Вотикон\",
        \"VC\": \"Сент-Винсент ва Гренадина\",
        \"VE\": \"Венесуэла\",
        \"VG\": \"Ҷазираҳои Виргини Британия\",
        \"VI\": \"Ҷазираҳои Виргини ИМА\",
        \"VN\": \"Ветнам\",
        \"VU\": \"Вануату\",
        \"WF\": \"Уоллис ва Футуна\",
        \"WS\": \"Самоа\",
        \"YE\": \"Яман\",
        \"YT\": \"Майотта\",
        \"ZA\": \"Африкаи Ҷанубӣ\",
        \"ZM\": \"Замбия\",
        \"ZW\": \"Зимбабве\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/tg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/tg.json");
    }
}
