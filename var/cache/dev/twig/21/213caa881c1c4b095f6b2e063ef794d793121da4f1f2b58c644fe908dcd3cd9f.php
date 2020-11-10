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

/* vendor/symfony/intl/Resources/data/currencies/ky.json */
class __TwigTemplate_a3b017eafb2e8d546faca751a3386a985a73362fa4596c014602956ceb8c96a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ky.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ky.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Бириккен Араб Эмираттарынын дирхамы\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Афганстан афганиси\"
        ],
        \"ALL\": [
            \"ALL\",
            \"албан леги\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Армения драмы\"
        ],
        \"ANG\": [
            \"ANG\",
            \"нидерланд-антил гулдени\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Ангола кванзасы\"
        ],
        \"ARS\": [
            \"ARS\",
            \"аргентина песосу\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Австралия доллары\"
        ],
        \"AWG\": [
            \"AWG\",
            \"аруба флорини\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Азербайжан манаты\"
        ],
        \"BAM\": [
            \"BAM\",
            \"босния-герцоговина конвертациялануучу маркасы\"
        ],
        \"BBD\": [
            \"BBD\",
            \"барбадос доллары\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Бангладеш такасы\"
        ],
        \"BGN\": [
            \"BGN\",
            \"болгар левиси\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Бахрейн динары\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Бурунди франкы\"
        ],
        \"BMD\": [
            \"BMD\",
            \"бермуд доллары\"
        ],
        \"BND\": [
            \"BND\",
            \"Бруней доллары\"
        ],
        \"BOB\": [
            \"BOB\",
            \"боливия боливианосу\"
        ],
        \"BRL\": [
            \"BRL\",
            \"бразилия реалы\"
        ],
        \"BSD\": [
            \"BSD\",
            \"багама доллары\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Бутан нгултруму\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Ботсвана пуласы\"
        ],
        \"BYN\": [
            \"BYN\",
            \"беларусь рублу\"
        ],
        \"BYR\": [
            \"BYR\",
            \"беларусь рублу (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"белиз доллары\"
        ],
        \"CAD\": [
            \"CAD\",
            \"канада доллары\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Конго франкы\"
        ],
        \"CHF\": [
            \"CHF\",
            \"швейцария франкы\"
        ],
        \"CLP\": [
            \"CLP\",
            \"чили песосу\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Кытай юаны\"
        ],
        \"COP\": [
            \"COP\",
            \"колумбия песосу\"
        ],
        \"CRC\": [
            \"CRC\",
            \"коста-рика колону\"
        ],
        \"CUC\": [
            \"CUC\",
            \"кубанын конвертациялануучу песосу\"
        ],
        \"CUP\": [
            \"CUP\",
            \"куба песосу\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Кабо-Верде эскудосу\"
        ],
        \"CZK\": [
            \"CZK\",
            \"чех кронасы\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Жибути франкы\"
        ],
        \"DKK\": [
            \"DKK\",
            \"дания крону\"
        ],
        \"DOP\": [
            \"DOP\",
            \"доминикан песосу\"
        ],
        \"DZD\": [
            \"DZD\",
            \"алжир динары\"
        ],
        \"EGP\": [
            \"EGP\",
            \"египет фунту\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Эритреа накфасы\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Эфиопия бирри\"
        ],
        \"EUR\": [
            \"€\",
            \"Евро\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Фижи доллары\"
        ],
        \"FKP\": [
            \"FKP\",
            \"фолкленд аралдарынын фунту\"
        ],
        \"GBP\": [
            \"GBP\",
            \"британия фунт стерлинги\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Грузия лариси\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Гана седиси\"
        ],
        \"GIP\": [
            \"GIP\",
            \"гибралтар фунту\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Гамбия даласиси\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Гине франкы\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"гватемала кетсалы\"
        ],
        \"GYD\": [
            \"GYD\",
            \"гуйана доллары\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Гонконг доллары\"
        ],
        \"HNL\": [
            \"HNL\",
            \"гондурас лемпирасы\"
        ],
        \"HRK\": [
            \"HRK\",
            \"хорват кунасы\"
        ],
        \"HTG\": [
            \"HTG\",
            \"гаити гурдусу\"
        ],
        \"HUF\": [
            \"HUF\",
            \"венгр форинти\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Индонезия рупийасы\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Израилдин жаңы шекели\"
        ],
        \"INR\": [
            \"INR\",
            \"Индия руписи\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Ирак динары\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Иран риалы\"
        ],
        \"ISK\": [
            \"ISK\",
            \"исландия крону\"
        ],
        \"JMD\": [
            \"JMD\",
            \"ямайка доллары\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Йордания динары\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Жапан йени\"
        ],
        \"KES\": [
            \"KES\",
            \"Кения шиллинги\"
        ],
        \"KGS\": [
            \"сом\",
            \"Кыргызстан сому\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Камбожа риели\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Коморос франкы\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Түндүк Корея уону\"
        ],
        \"KRW\": [
            \"KRW\",
            \"Түштүк Корея уону\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Кувейт динары\"
        ],
        \"KYD\": [
            \"KYD\",
            \"кайман доллары\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Казакстан теңгеси\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Лаос киби\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Ливан фунту\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Шри Ланка руписи\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Либерия доллары\"
        ],
        \"LTL\": [
            \"LTL\",
            \"литва литасы\"
        ],
        \"LVL\": [
            \"LVL\",
            \"латвия латы\"
        ],
        \"LYD\": [
            \"LYD\",
            \"ливия динары\"
        ],
        \"MAD\": [
            \"MAD\",
            \"марокко дирхамы\"
        ],
        \"MDL\": [
            \"MDL\",
            \"молдован лейи\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Мадагаскар ариариси\"
        ],
        \"MKD\": [
            \"MKD\",
            \"македон денары\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Мйанмар кйаты\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Монгол тугриги\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Макау патакасы\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Мавритания угиясы (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Мавритания угиясы\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Мавританий руписи\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Малдив руфийасы\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Малави квачасы\"
        ],
        \"MXN\": [
            \"MXN\",
            \"мексика песосу\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Малайзия ринггити\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Мозамбик метикалы\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Намибия доллары\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Нигерия найрасы\"
        ],
        \"NIO\": [
            \"NIO\",
            \"никарагуа кордобасы\"
        ],
        \"NOK\": [
            \"NOK\",
            \"норвегия крону\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Непал руписи\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Жаңы Зеландия доллары\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Оман риалы\"
        ],
        \"PAB\": [
            \"PAB\",
            \"панама балбоасы\"
        ],
        \"PEN\": [
            \"PEN\",
            \"перу солу\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Папуа Жаңы Гвинея кинасы\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Филиппин песосу\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Пакистан руписи\"
        ],
        \"PLN\": [
            \"PLN\",
            \"польша злотыйы\"
        ],
        \"PYG\": [
            \"PYG\",
            \"парагвай гуараниси\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Катар риалы\"
        ],
        \"RON\": [
            \"RON\",
            \"румын лейи\"
        ],
        \"RSD\": [
            \"RSD\",
            \"серб динары\"
        ],
        \"RUB\": [
            \"RUB\",
            \"орус рублу\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Руанда франкы\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Сауд риалы\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Соломон аралдарынын доллары\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Сейшел руписи\"
        ],
        \"SDG\": [
            \"SDG\",
            \"судан фунту\"
        ],
        \"SEK\": [
            \"SEK\",
            \"швеция крону\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Сингапур доллары\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ыйык Елена аралынын фунту\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Сиерра-Леоне леонеси\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Сомали шиллинги\"
        ],
        \"SRD\": [
            \"SRD\",
            \"суринам доллары\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Түштүк Судан фунту\"
        ],
        \"STD\": [
            \"STD\",
            \"Сао Томе жана Принсипе добрасы (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Сао Томе жана Принсипе добрасы\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Сирия фунту\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Свази лилангени\"
        ],
        \"THB\": [
            \"฿\",
            \"Тай баты\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Тажикстан сомониси\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Түркмөнстан манаты\"
        ],
        \"TND\": [
            \"TND\",
            \"тунис динары\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Тонга паангасы\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Түркия лирасы\"
        ],
        \"TTD\": [
            \"TTD\",
            \"тринидад жана тобаго доллары\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Тайвань жаңы доллары\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Танзания шиллинги\"
        ],
        \"UAH\": [
            \"UAH\",
            \"украин гривени\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Уганда шиллинги\"
        ],
        \"USD\": [
            \"USD\",
            \"АКШ доллары\"
        ],
        \"UYU\": [
            \"UYU\",
            \"уругвай песосу\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Өзбекстан суму\"
        ],
        \"VEF\": [
            \"VEF\",
            \"венесуэла боливары (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"₫\",
            \"Вьетнам доңу\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Вануату ватусу\"
        ],
        \"WST\": [
            \"WST\",
            \"Самоа таласы\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Борбордук Африка КФА франкы\"
        ],
        \"XCD\": [
            \"XCD\",
            \"чыгыш кариб доллары\"
        ],
        \"XOF\": [
            \"CFA\",
            \"КФА франкы\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"КФП франкы\"
        ],
        \"YER\": [
            \"YER\",
            \"Йемен риалы\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Түштүк Африка ранды\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Замбия квачасы\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ky.json";
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
        \"AED\": [
            \"AED\",
            \"Бириккен Араб Эмираттарынын дирхамы\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Афганстан афганиси\"
        ],
        \"ALL\": [
            \"ALL\",
            \"албан леги\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Армения драмы\"
        ],
        \"ANG\": [
            \"ANG\",
            \"нидерланд-антил гулдени\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Ангола кванзасы\"
        ],
        \"ARS\": [
            \"ARS\",
            \"аргентина песосу\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Австралия доллары\"
        ],
        \"AWG\": [
            \"AWG\",
            \"аруба флорини\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Азербайжан манаты\"
        ],
        \"BAM\": [
            \"BAM\",
            \"босния-герцоговина конвертациялануучу маркасы\"
        ],
        \"BBD\": [
            \"BBD\",
            \"барбадос доллары\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Бангладеш такасы\"
        ],
        \"BGN\": [
            \"BGN\",
            \"болгар левиси\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Бахрейн динары\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Бурунди франкы\"
        ],
        \"BMD\": [
            \"BMD\",
            \"бермуд доллары\"
        ],
        \"BND\": [
            \"BND\",
            \"Бруней доллары\"
        ],
        \"BOB\": [
            \"BOB\",
            \"боливия боливианосу\"
        ],
        \"BRL\": [
            \"BRL\",
            \"бразилия реалы\"
        ],
        \"BSD\": [
            \"BSD\",
            \"багама доллары\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Бутан нгултруму\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Ботсвана пуласы\"
        ],
        \"BYN\": [
            \"BYN\",
            \"беларусь рублу\"
        ],
        \"BYR\": [
            \"BYR\",
            \"беларусь рублу (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"белиз доллары\"
        ],
        \"CAD\": [
            \"CAD\",
            \"канада доллары\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Конго франкы\"
        ],
        \"CHF\": [
            \"CHF\",
            \"швейцария франкы\"
        ],
        \"CLP\": [
            \"CLP\",
            \"чили песосу\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Кытай юаны\"
        ],
        \"COP\": [
            \"COP\",
            \"колумбия песосу\"
        ],
        \"CRC\": [
            \"CRC\",
            \"коста-рика колону\"
        ],
        \"CUC\": [
            \"CUC\",
            \"кубанын конвертациялануучу песосу\"
        ],
        \"CUP\": [
            \"CUP\",
            \"куба песосу\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Кабо-Верде эскудосу\"
        ],
        \"CZK\": [
            \"CZK\",
            \"чех кронасы\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Жибути франкы\"
        ],
        \"DKK\": [
            \"DKK\",
            \"дания крону\"
        ],
        \"DOP\": [
            \"DOP\",
            \"доминикан песосу\"
        ],
        \"DZD\": [
            \"DZD\",
            \"алжир динары\"
        ],
        \"EGP\": [
            \"EGP\",
            \"египет фунту\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Эритреа накфасы\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Эфиопия бирри\"
        ],
        \"EUR\": [
            \"€\",
            \"Евро\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Фижи доллары\"
        ],
        \"FKP\": [
            \"FKP\",
            \"фолкленд аралдарынын фунту\"
        ],
        \"GBP\": [
            \"GBP\",
            \"британия фунт стерлинги\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Грузия лариси\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Гана седиси\"
        ],
        \"GIP\": [
            \"GIP\",
            \"гибралтар фунту\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Гамбия даласиси\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Гине франкы\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"гватемала кетсалы\"
        ],
        \"GYD\": [
            \"GYD\",
            \"гуйана доллары\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Гонконг доллары\"
        ],
        \"HNL\": [
            \"HNL\",
            \"гондурас лемпирасы\"
        ],
        \"HRK\": [
            \"HRK\",
            \"хорват кунасы\"
        ],
        \"HTG\": [
            \"HTG\",
            \"гаити гурдусу\"
        ],
        \"HUF\": [
            \"HUF\",
            \"венгр форинти\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Индонезия рупийасы\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Израилдин жаңы шекели\"
        ],
        \"INR\": [
            \"INR\",
            \"Индия руписи\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Ирак динары\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Иран риалы\"
        ],
        \"ISK\": [
            \"ISK\",
            \"исландия крону\"
        ],
        \"JMD\": [
            \"JMD\",
            \"ямайка доллары\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Йордания динары\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Жапан йени\"
        ],
        \"KES\": [
            \"KES\",
            \"Кения шиллинги\"
        ],
        \"KGS\": [
            \"сом\",
            \"Кыргызстан сому\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Камбожа риели\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Коморос франкы\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Түндүк Корея уону\"
        ],
        \"KRW\": [
            \"KRW\",
            \"Түштүк Корея уону\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Кувейт динары\"
        ],
        \"KYD\": [
            \"KYD\",
            \"кайман доллары\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Казакстан теңгеси\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Лаос киби\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Ливан фунту\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Шри Ланка руписи\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Либерия доллары\"
        ],
        \"LTL\": [
            \"LTL\",
            \"литва литасы\"
        ],
        \"LVL\": [
            \"LVL\",
            \"латвия латы\"
        ],
        \"LYD\": [
            \"LYD\",
            \"ливия динары\"
        ],
        \"MAD\": [
            \"MAD\",
            \"марокко дирхамы\"
        ],
        \"MDL\": [
            \"MDL\",
            \"молдован лейи\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Мадагаскар ариариси\"
        ],
        \"MKD\": [
            \"MKD\",
            \"македон денары\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Мйанмар кйаты\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Монгол тугриги\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Макау патакасы\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Мавритания угиясы (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Мавритания угиясы\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Мавританий руписи\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Малдив руфийасы\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Малави квачасы\"
        ],
        \"MXN\": [
            \"MXN\",
            \"мексика песосу\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Малайзия ринггити\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Мозамбик метикалы\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Намибия доллары\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Нигерия найрасы\"
        ],
        \"NIO\": [
            \"NIO\",
            \"никарагуа кордобасы\"
        ],
        \"NOK\": [
            \"NOK\",
            \"норвегия крону\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Непал руписи\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Жаңы Зеландия доллары\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Оман риалы\"
        ],
        \"PAB\": [
            \"PAB\",
            \"панама балбоасы\"
        ],
        \"PEN\": [
            \"PEN\",
            \"перу солу\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Папуа Жаңы Гвинея кинасы\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Филиппин песосу\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Пакистан руписи\"
        ],
        \"PLN\": [
            \"PLN\",
            \"польша злотыйы\"
        ],
        \"PYG\": [
            \"PYG\",
            \"парагвай гуараниси\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Катар риалы\"
        ],
        \"RON\": [
            \"RON\",
            \"румын лейи\"
        ],
        \"RSD\": [
            \"RSD\",
            \"серб динары\"
        ],
        \"RUB\": [
            \"RUB\",
            \"орус рублу\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Руанда франкы\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Сауд риалы\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Соломон аралдарынын доллары\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Сейшел руписи\"
        ],
        \"SDG\": [
            \"SDG\",
            \"судан фунту\"
        ],
        \"SEK\": [
            \"SEK\",
            \"швеция крону\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Сингапур доллары\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ыйык Елена аралынын фунту\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Сиерра-Леоне леонеси\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Сомали шиллинги\"
        ],
        \"SRD\": [
            \"SRD\",
            \"суринам доллары\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Түштүк Судан фунту\"
        ],
        \"STD\": [
            \"STD\",
            \"Сао Томе жана Принсипе добрасы (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Сао Томе жана Принсипе добрасы\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Сирия фунту\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Свази лилангени\"
        ],
        \"THB\": [
            \"฿\",
            \"Тай баты\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Тажикстан сомониси\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Түркмөнстан манаты\"
        ],
        \"TND\": [
            \"TND\",
            \"тунис динары\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Тонга паангасы\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Түркия лирасы\"
        ],
        \"TTD\": [
            \"TTD\",
            \"тринидад жана тобаго доллары\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Тайвань жаңы доллары\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Танзания шиллинги\"
        ],
        \"UAH\": [
            \"UAH\",
            \"украин гривени\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Уганда шиллинги\"
        ],
        \"USD\": [
            \"USD\",
            \"АКШ доллары\"
        ],
        \"UYU\": [
            \"UYU\",
            \"уругвай песосу\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Өзбекстан суму\"
        ],
        \"VEF\": [
            \"VEF\",
            \"венесуэла боливары (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"₫\",
            \"Вьетнам доңу\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Вануату ватусу\"
        ],
        \"WST\": [
            \"WST\",
            \"Самоа таласы\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Борбордук Африка КФА франкы\"
        ],
        \"XCD\": [
            \"XCD\",
            \"чыгыш кариб доллары\"
        ],
        \"XOF\": [
            \"CFA\",
            \"КФА франкы\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"КФП франкы\"
        ],
        \"YER\": [
            \"YER\",
            \"Йемен риалы\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Түштүк Африка ранды\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Замбия квачасы\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ky.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ky.json");
    }
}