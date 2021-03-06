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

/* vendor/symfony/intl/Resources/data/regions/uk.json */
class __TwigTemplate_18bcc6f96fa0d71aafb6b7a9f5a0828a98a5485ba5db391f18f2346926bac184 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/uk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/uk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Андорра\",
        \"AE\": \"Обʼєднані Арабські Емірати\",
        \"AF\": \"Афганістан\",
        \"AG\": \"Антиґуа і Барбуда\",
        \"AI\": \"Анґілья\",
        \"AL\": \"Албанія\",
        \"AM\": \"Вірменія\",
        \"AO\": \"Ангола\",
        \"AQ\": \"Антарктика\",
        \"AR\": \"Аргентина\",
        \"AS\": \"Американське Самоа\",
        \"AT\": \"Австрія\",
        \"AU\": \"Австралія\",
        \"AW\": \"Аруба\",
        \"AX\": \"Аландські Острови\",
        \"AZ\": \"Азербайджан\",
        \"BA\": \"Боснія і Герцеґовина\",
        \"BB\": \"Барбадос\",
        \"BD\": \"Бангладеш\",
        \"BE\": \"Бельґія\",
        \"BF\": \"Буркіна-Фасо\",
        \"BG\": \"Болгарія\",
        \"BH\": \"Бахрейн\",
        \"BI\": \"Бурунді\",
        \"BJ\": \"Бенін\",
        \"BL\": \"Сен-Бартельмі\",
        \"BM\": \"Бермудські Острови\",
        \"BN\": \"Бруней\",
        \"BO\": \"Болівія\",
        \"BQ\": \"Нідерландські Карибські острови\",
        \"BR\": \"Бразілія\",
        \"BS\": \"Багамські Острови\",
        \"BT\": \"Бутан\",
        \"BV\": \"Острів Буве\",
        \"BW\": \"Ботсвана\",
        \"BY\": \"Білорусь\",
        \"BZ\": \"Беліз\",
        \"CA\": \"Канада\",
        \"CC\": \"Кокосові (Кілінґ) Острови\",
        \"CD\": \"Конго – Кіншаса\",
        \"CF\": \"Центральноафриканська Республіка\",
        \"CG\": \"Конго – Браззавіль\",
        \"CH\": \"Швейцарія\",
        \"CI\": \"Кот-дʼІвуар\",
        \"CK\": \"Острови Кука\",
        \"CL\": \"Чілі\",
        \"CM\": \"Камерун\",
        \"CN\": \"Китай\",
        \"CO\": \"Колумбія\",
        \"CR\": \"Коста-Ріка\",
        \"CU\": \"Куба\",
        \"CV\": \"Кабо-Верде\",
        \"CW\": \"Кюрасао\",
        \"CX\": \"Острів Різдва\",
        \"CY\": \"Кіпр\",
        \"CZ\": \"Чехія\",
        \"DE\": \"Німеччина\",
        \"DJ\": \"Джибуті\",
        \"DK\": \"Данія\",
        \"DM\": \"Домініка\",
        \"DO\": \"Домініканська Республіка\",
        \"DZ\": \"Алжир\",
        \"EC\": \"Еквадор\",
        \"EE\": \"Естонія\",
        \"EG\": \"Єгипет\",
        \"EH\": \"Західна Сахара\",
        \"ER\": \"Еритрея\",
        \"ES\": \"Іспанія\",
        \"ET\": \"Ефіопія\",
        \"FI\": \"Фінляндія\",
        \"FJ\": \"Фіджі\",
        \"FK\": \"Фолклендські Острови\",
        \"FM\": \"Мікронезія\",
        \"FO\": \"Фарерські Острови\",
        \"FR\": \"Франція\",
        \"GA\": \"Габон\",
        \"GB\": \"Велика Британія\",
        \"GD\": \"Ґренада\",
        \"GE\": \"Грузія\",
        \"GF\": \"Французька Ґвіана\",
        \"GG\": \"Ґернсі\",
        \"GH\": \"Гана\",
        \"GI\": \"Ґібралтар\",
        \"GL\": \"Ґренландія\",
        \"GM\": \"Гамбія\",
        \"GN\": \"Гвінея\",
        \"GP\": \"Ґваделупа\",
        \"GQ\": \"Екваторіальна Гвінея\",
        \"GR\": \"Греція\",
        \"GS\": \"Південна Джорджія та Південні Сандвічеві Острови\",
        \"GT\": \"Ґватемала\",
        \"GU\": \"Ґуам\",
        \"GW\": \"Гвінея-Бісау\",
        \"GY\": \"Ґайана\",
        \"HK\": \"Гонконг, О.А.Р. Китаю\",
        \"HM\": \"Острови Герд і Макдоналд\",
        \"HN\": \"Гондурас\",
        \"HR\": \"Хорватія\",
        \"HT\": \"Гаїті\",
        \"HU\": \"Угорщина\",
        \"ID\": \"Індонезія\",
        \"IE\": \"Ірландія\",
        \"IL\": \"Ізраїль\",
        \"IM\": \"Острів Мен\",
        \"IN\": \"Індія\",
        \"IO\": \"Британська територія в Індійському Океані\",
        \"IQ\": \"Ірак\",
        \"IR\": \"Іран\",
        \"IS\": \"Ісландія\",
        \"IT\": \"Італія\",
        \"JE\": \"Джерсі\",
        \"JM\": \"Ямайка\",
        \"JO\": \"Йорданія\",
        \"JP\": \"Японія\",
        \"KE\": \"Кенія\",
        \"KG\": \"Киргизстан\",
        \"KH\": \"Камбоджа\",
        \"KI\": \"Кірібаті\",
        \"KM\": \"Комори\",
        \"KN\": \"Сент-Кітс і Невіс\",
        \"KP\": \"Північна Корея\",
        \"KR\": \"Південна Корея\",
        \"KW\": \"Кувейт\",
        \"KY\": \"Кайманові Острови\",
        \"KZ\": \"Казахстан\",
        \"LA\": \"Лаос\",
        \"LB\": \"Ліван\",
        \"LC\": \"Сент-Люсія\",
        \"LI\": \"Ліхтенштейн\",
        \"LK\": \"Шрі-Ланка\",
        \"LR\": \"Ліберія\",
        \"LS\": \"Лесото\",
        \"LT\": \"Литва\",
        \"LU\": \"Люксембурґ\",
        \"LV\": \"Латвія\",
        \"LY\": \"Лівія\",
        \"MA\": \"Марокко\",
        \"MC\": \"Монако\",
        \"MD\": \"Молдова\",
        \"ME\": \"Чорногорія\",
        \"MF\": \"Сен-Мартен\",
        \"MG\": \"Мадагаскар\",
        \"MH\": \"Маршаллові Острови\",
        \"MK\": \"Північна Македонія\",
        \"ML\": \"Малі\",
        \"MM\": \"Мʼянма (Бірма)\",
        \"MN\": \"Монголія\",
        \"MO\": \"Макао, О.А.Р Китаю\",
        \"MP\": \"Північні Маріанські Острови\",
        \"MQ\": \"Мартініка\",
        \"MR\": \"Мавританія\",
        \"MS\": \"Монтсеррат\",
        \"MT\": \"Мальта\",
        \"MU\": \"Маврікій\",
        \"MV\": \"Мальдіви\",
        \"MW\": \"Малаві\",
        \"MX\": \"Мексика\",
        \"MY\": \"Малайзія\",
        \"MZ\": \"Мозамбік\",
        \"NA\": \"Намібія\",
        \"NC\": \"Нова Каледонія\",
        \"NE\": \"Нігер\",
        \"NF\": \"Острів Норфолк\",
        \"NG\": \"Нігерія\",
        \"NI\": \"Нікараґуа\",
        \"NL\": \"Нідерланди\",
        \"NO\": \"Норвеґія\",
        \"NP\": \"Непал\",
        \"NR\": \"Науру\",
        \"NU\": \"Ніуе\",
        \"NZ\": \"Нова Зеландія\",
        \"OM\": \"Оман\",
        \"PA\": \"Панама\",
        \"PE\": \"Перу\",
        \"PF\": \"Французька Полінезія\",
        \"PG\": \"Папуа-Нова Ґвінея\",
        \"PH\": \"Філіппіни\",
        \"PK\": \"Пакистан\",
        \"PL\": \"Польща\",
        \"PM\": \"Сен-Пʼєр і Мікелон\",
        \"PN\": \"Острови Піткерн\",
        \"PR\": \"Пуерто-Ріко\",
        \"PS\": \"Палестинські території\",
        \"PT\": \"Портуґалія\",
        \"PW\": \"Палау\",
        \"PY\": \"Параґвай\",
        \"QA\": \"Катар\",
        \"RE\": \"Реюньйон\",
        \"RO\": \"Румунія\",
        \"RS\": \"Сербія\",
        \"RU\": \"Росія\",
        \"RW\": \"Руанда\",
        \"SA\": \"Саудівська Аравія\",
        \"SB\": \"Соломонові Острови\",
        \"SC\": \"Сейшельські Острови\",
        \"SD\": \"Судан\",
        \"SE\": \"Швеція\",
        \"SG\": \"Сінгапур\",
        \"SH\": \"Острів Святої Єлени\",
        \"SI\": \"Словенія\",
        \"SJ\": \"Шпіцберген та Ян-Маєн\",
        \"SK\": \"Словаччина\",
        \"SL\": \"Сьєрра-Леоне\",
        \"SM\": \"Сан-Маріно\",
        \"SN\": \"Сенегал\",
        \"SO\": \"Сомалі\",
        \"SR\": \"Сурінам\",
        \"SS\": \"Південний Судан\",
        \"ST\": \"Сан-Томе і Прінсіпі\",
        \"SV\": \"Сальвадор\",
        \"SX\": \"Сінт-Мартен\",
        \"SY\": \"Сирія\",
        \"SZ\": \"Есватіні\",
        \"TC\": \"Острови Теркс і Кайкос\",
        \"TD\": \"Чад\",
        \"TF\": \"Французькі Південні Території\",
        \"TG\": \"Того\",
        \"TH\": \"Таїланд\",
        \"TJ\": \"Таджикистан\",
        \"TK\": \"Токелау\",
        \"TL\": \"Тімор-Лешті\",
        \"TM\": \"Туркменістан\",
        \"TN\": \"Туніс\",
        \"TO\": \"Тонґа\",
        \"TR\": \"Туреччина\",
        \"TT\": \"Трінідад і Тобаґо\",
        \"TV\": \"Тувалу\",
        \"TW\": \"Тайвань\",
        \"TZ\": \"Танзанія\",
        \"UA\": \"Україна\",
        \"UG\": \"Уганда\",
        \"UM\": \"Віддалені острови США\",
        \"US\": \"Сполучені Штати\",
        \"UY\": \"Уруґвай\",
        \"UZ\": \"Узбекистан\",
        \"VA\": \"Ватикан\",
        \"VC\": \"Сент-Вінсент і Ґренадіни\",
        \"VE\": \"Венесуела\",
        \"VG\": \"Британські Віргінські острови\",
        \"VI\": \"Віргінські острови, США\",
        \"VN\": \"Вʼєтнам\",
        \"VU\": \"Вануату\",
        \"WF\": \"Уолліс і Футуна\",
        \"WS\": \"Самоа\",
        \"YE\": \"Ємен\",
        \"YT\": \"Майотта\",
        \"ZA\": \"Південно-Африканська Республіка\",
        \"ZM\": \"Замбія\",
        \"ZW\": \"Зімбабве\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/uk.json";
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
        \"AE\": \"Обʼєднані Арабські Емірати\",
        \"AF\": \"Афганістан\",
        \"AG\": \"Антиґуа і Барбуда\",
        \"AI\": \"Анґілья\",
        \"AL\": \"Албанія\",
        \"AM\": \"Вірменія\",
        \"AO\": \"Ангола\",
        \"AQ\": \"Антарктика\",
        \"AR\": \"Аргентина\",
        \"AS\": \"Американське Самоа\",
        \"AT\": \"Австрія\",
        \"AU\": \"Австралія\",
        \"AW\": \"Аруба\",
        \"AX\": \"Аландські Острови\",
        \"AZ\": \"Азербайджан\",
        \"BA\": \"Боснія і Герцеґовина\",
        \"BB\": \"Барбадос\",
        \"BD\": \"Бангладеш\",
        \"BE\": \"Бельґія\",
        \"BF\": \"Буркіна-Фасо\",
        \"BG\": \"Болгарія\",
        \"BH\": \"Бахрейн\",
        \"BI\": \"Бурунді\",
        \"BJ\": \"Бенін\",
        \"BL\": \"Сен-Бартельмі\",
        \"BM\": \"Бермудські Острови\",
        \"BN\": \"Бруней\",
        \"BO\": \"Болівія\",
        \"BQ\": \"Нідерландські Карибські острови\",
        \"BR\": \"Бразілія\",
        \"BS\": \"Багамські Острови\",
        \"BT\": \"Бутан\",
        \"BV\": \"Острів Буве\",
        \"BW\": \"Ботсвана\",
        \"BY\": \"Білорусь\",
        \"BZ\": \"Беліз\",
        \"CA\": \"Канада\",
        \"CC\": \"Кокосові (Кілінґ) Острови\",
        \"CD\": \"Конго – Кіншаса\",
        \"CF\": \"Центральноафриканська Республіка\",
        \"CG\": \"Конго – Браззавіль\",
        \"CH\": \"Швейцарія\",
        \"CI\": \"Кот-дʼІвуар\",
        \"CK\": \"Острови Кука\",
        \"CL\": \"Чілі\",
        \"CM\": \"Камерун\",
        \"CN\": \"Китай\",
        \"CO\": \"Колумбія\",
        \"CR\": \"Коста-Ріка\",
        \"CU\": \"Куба\",
        \"CV\": \"Кабо-Верде\",
        \"CW\": \"Кюрасао\",
        \"CX\": \"Острів Різдва\",
        \"CY\": \"Кіпр\",
        \"CZ\": \"Чехія\",
        \"DE\": \"Німеччина\",
        \"DJ\": \"Джибуті\",
        \"DK\": \"Данія\",
        \"DM\": \"Домініка\",
        \"DO\": \"Домініканська Республіка\",
        \"DZ\": \"Алжир\",
        \"EC\": \"Еквадор\",
        \"EE\": \"Естонія\",
        \"EG\": \"Єгипет\",
        \"EH\": \"Західна Сахара\",
        \"ER\": \"Еритрея\",
        \"ES\": \"Іспанія\",
        \"ET\": \"Ефіопія\",
        \"FI\": \"Фінляндія\",
        \"FJ\": \"Фіджі\",
        \"FK\": \"Фолклендські Острови\",
        \"FM\": \"Мікронезія\",
        \"FO\": \"Фарерські Острови\",
        \"FR\": \"Франція\",
        \"GA\": \"Габон\",
        \"GB\": \"Велика Британія\",
        \"GD\": \"Ґренада\",
        \"GE\": \"Грузія\",
        \"GF\": \"Французька Ґвіана\",
        \"GG\": \"Ґернсі\",
        \"GH\": \"Гана\",
        \"GI\": \"Ґібралтар\",
        \"GL\": \"Ґренландія\",
        \"GM\": \"Гамбія\",
        \"GN\": \"Гвінея\",
        \"GP\": \"Ґваделупа\",
        \"GQ\": \"Екваторіальна Гвінея\",
        \"GR\": \"Греція\",
        \"GS\": \"Південна Джорджія та Південні Сандвічеві Острови\",
        \"GT\": \"Ґватемала\",
        \"GU\": \"Ґуам\",
        \"GW\": \"Гвінея-Бісау\",
        \"GY\": \"Ґайана\",
        \"HK\": \"Гонконг, О.А.Р. Китаю\",
        \"HM\": \"Острови Герд і Макдоналд\",
        \"HN\": \"Гондурас\",
        \"HR\": \"Хорватія\",
        \"HT\": \"Гаїті\",
        \"HU\": \"Угорщина\",
        \"ID\": \"Індонезія\",
        \"IE\": \"Ірландія\",
        \"IL\": \"Ізраїль\",
        \"IM\": \"Острів Мен\",
        \"IN\": \"Індія\",
        \"IO\": \"Британська територія в Індійському Океані\",
        \"IQ\": \"Ірак\",
        \"IR\": \"Іран\",
        \"IS\": \"Ісландія\",
        \"IT\": \"Італія\",
        \"JE\": \"Джерсі\",
        \"JM\": \"Ямайка\",
        \"JO\": \"Йорданія\",
        \"JP\": \"Японія\",
        \"KE\": \"Кенія\",
        \"KG\": \"Киргизстан\",
        \"KH\": \"Камбоджа\",
        \"KI\": \"Кірібаті\",
        \"KM\": \"Комори\",
        \"KN\": \"Сент-Кітс і Невіс\",
        \"KP\": \"Північна Корея\",
        \"KR\": \"Південна Корея\",
        \"KW\": \"Кувейт\",
        \"KY\": \"Кайманові Острови\",
        \"KZ\": \"Казахстан\",
        \"LA\": \"Лаос\",
        \"LB\": \"Ліван\",
        \"LC\": \"Сент-Люсія\",
        \"LI\": \"Ліхтенштейн\",
        \"LK\": \"Шрі-Ланка\",
        \"LR\": \"Ліберія\",
        \"LS\": \"Лесото\",
        \"LT\": \"Литва\",
        \"LU\": \"Люксембурґ\",
        \"LV\": \"Латвія\",
        \"LY\": \"Лівія\",
        \"MA\": \"Марокко\",
        \"MC\": \"Монако\",
        \"MD\": \"Молдова\",
        \"ME\": \"Чорногорія\",
        \"MF\": \"Сен-Мартен\",
        \"MG\": \"Мадагаскар\",
        \"MH\": \"Маршаллові Острови\",
        \"MK\": \"Північна Македонія\",
        \"ML\": \"Малі\",
        \"MM\": \"Мʼянма (Бірма)\",
        \"MN\": \"Монголія\",
        \"MO\": \"Макао, О.А.Р Китаю\",
        \"MP\": \"Північні Маріанські Острови\",
        \"MQ\": \"Мартініка\",
        \"MR\": \"Мавританія\",
        \"MS\": \"Монтсеррат\",
        \"MT\": \"Мальта\",
        \"MU\": \"Маврікій\",
        \"MV\": \"Мальдіви\",
        \"MW\": \"Малаві\",
        \"MX\": \"Мексика\",
        \"MY\": \"Малайзія\",
        \"MZ\": \"Мозамбік\",
        \"NA\": \"Намібія\",
        \"NC\": \"Нова Каледонія\",
        \"NE\": \"Нігер\",
        \"NF\": \"Острів Норфолк\",
        \"NG\": \"Нігерія\",
        \"NI\": \"Нікараґуа\",
        \"NL\": \"Нідерланди\",
        \"NO\": \"Норвеґія\",
        \"NP\": \"Непал\",
        \"NR\": \"Науру\",
        \"NU\": \"Ніуе\",
        \"NZ\": \"Нова Зеландія\",
        \"OM\": \"Оман\",
        \"PA\": \"Панама\",
        \"PE\": \"Перу\",
        \"PF\": \"Французька Полінезія\",
        \"PG\": \"Папуа-Нова Ґвінея\",
        \"PH\": \"Філіппіни\",
        \"PK\": \"Пакистан\",
        \"PL\": \"Польща\",
        \"PM\": \"Сен-Пʼєр і Мікелон\",
        \"PN\": \"Острови Піткерн\",
        \"PR\": \"Пуерто-Ріко\",
        \"PS\": \"Палестинські території\",
        \"PT\": \"Портуґалія\",
        \"PW\": \"Палау\",
        \"PY\": \"Параґвай\",
        \"QA\": \"Катар\",
        \"RE\": \"Реюньйон\",
        \"RO\": \"Румунія\",
        \"RS\": \"Сербія\",
        \"RU\": \"Росія\",
        \"RW\": \"Руанда\",
        \"SA\": \"Саудівська Аравія\",
        \"SB\": \"Соломонові Острови\",
        \"SC\": \"Сейшельські Острови\",
        \"SD\": \"Судан\",
        \"SE\": \"Швеція\",
        \"SG\": \"Сінгапур\",
        \"SH\": \"Острів Святої Єлени\",
        \"SI\": \"Словенія\",
        \"SJ\": \"Шпіцберген та Ян-Маєн\",
        \"SK\": \"Словаччина\",
        \"SL\": \"Сьєрра-Леоне\",
        \"SM\": \"Сан-Маріно\",
        \"SN\": \"Сенегал\",
        \"SO\": \"Сомалі\",
        \"SR\": \"Сурінам\",
        \"SS\": \"Південний Судан\",
        \"ST\": \"Сан-Томе і Прінсіпі\",
        \"SV\": \"Сальвадор\",
        \"SX\": \"Сінт-Мартен\",
        \"SY\": \"Сирія\",
        \"SZ\": \"Есватіні\",
        \"TC\": \"Острови Теркс і Кайкос\",
        \"TD\": \"Чад\",
        \"TF\": \"Французькі Південні Території\",
        \"TG\": \"Того\",
        \"TH\": \"Таїланд\",
        \"TJ\": \"Таджикистан\",
        \"TK\": \"Токелау\",
        \"TL\": \"Тімор-Лешті\",
        \"TM\": \"Туркменістан\",
        \"TN\": \"Туніс\",
        \"TO\": \"Тонґа\",
        \"TR\": \"Туреччина\",
        \"TT\": \"Трінідад і Тобаґо\",
        \"TV\": \"Тувалу\",
        \"TW\": \"Тайвань\",
        \"TZ\": \"Танзанія\",
        \"UA\": \"Україна\",
        \"UG\": \"Уганда\",
        \"UM\": \"Віддалені острови США\",
        \"US\": \"Сполучені Штати\",
        \"UY\": \"Уруґвай\",
        \"UZ\": \"Узбекистан\",
        \"VA\": \"Ватикан\",
        \"VC\": \"Сент-Вінсент і Ґренадіни\",
        \"VE\": \"Венесуела\",
        \"VG\": \"Британські Віргінські острови\",
        \"VI\": \"Віргінські острови, США\",
        \"VN\": \"Вʼєтнам\",
        \"VU\": \"Вануату\",
        \"WF\": \"Уолліс і Футуна\",
        \"WS\": \"Самоа\",
        \"YE\": \"Ємен\",
        \"YT\": \"Майотта\",
        \"ZA\": \"Південно-Африканська Республіка\",
        \"ZM\": \"Замбія\",
        \"ZW\": \"Зімбабве\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/uk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/uk.json");
    }
}
