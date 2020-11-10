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

/* vendor/symfony/intl/Resources/data/currencies/az.json */
class __TwigTemplate_013970785851c37ffe24acad1d38235c422d6e710d26792ae4dc104d2618f6be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/az.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/az.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"Andora Pesetası\"
        ],
        \"AED\": [
            \"AED\",
            \"Birləşmiş Ərəb Əmirlikləri Dirhəmi\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Əfqanıstan Əfqanisi (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Əfqanıstan Əfqanisi\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albaniya Leki (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albaniya Leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Ermənistan Dramı\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderland Antilyası Gilderi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Anqola Kvanzası\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Anqola Kvanzasi (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Anqola Yeni Kvanzası (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Anqola Kvanzası (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentina avstralı\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentina pesosu (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina Pesosu\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Avstriya Şillinqi\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstraliya Dolları\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba Florini\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azərbaycan Manatı (1993–2006)\"
        ],
        \"AZN\": [
            \"₼\",
            \"Azərbaycan Manatı\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosniya-Herseqovina Dinarı\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosniya-Herseqovina Markası\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados Dolları\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Banqladeş Takası\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belçika Frankı (deyşirik)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belçika Frankı\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belçika Frankı (finans)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bolqarıstan Levası\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolqarıstan Levi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bəhreyn Dinarı\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi Frankı\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda Dolları\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruney Dolları\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviya Bolivianosu\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Boliviya pesosu\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Boliviya mvdolı\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Braziliya kruzeyro novası\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Braziliya kruzadosu\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Braziliya kruzeyrosu (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Braziliya Realı\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Braziliya kruzado novası\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Braziliya kruzeyrosu\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Baham Dolları\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan Nqultrumu\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Burmis Kyatı\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana Pulası\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Belarus Yeni Rublu (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus Rublu\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarus Rublu (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz Dolları\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada Dolları\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Konqo Frankı\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR Avro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"İsveçrə Frankı\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR Frankası\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Çili Pesosu\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Çin Yuanı (ofşor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Çin Yuanı\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiya Pesosu\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rika Kolonu\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Serbiya Dinarı (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Çexoslavakiya Korunası\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba Çevrilən Pesosu\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba Pesosu\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kape Verde Eskudosu\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipr Paundu\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Çexiya Korunası\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Şərq Almaniya Ostmarkı\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Alman Markası\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Cibuti Frankı\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danimarka Kronu\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominika Pesosu\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Əlcəzair Dinarı\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvador Sukresi\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estoniya Krunu\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Misir Funtu\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreya Nakfası\"
        ],
        \"ESA\": [
            \"ESA\",
            \"İspan Pesetası (A account)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"İspan Pesetası (dəyşirik)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"İspan Pesetası\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiya Bırrı\"
        ],
        \"EUR\": [
            \"€\",
            \"Avro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Fin Markası\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fici Dolları\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend Adaları Funtu\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Fransız Markası\"
        ],
        \"GBP\": [
            \"£\",
            \"Britaniya Funtu\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gürcüstan Kupon Lariti\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gürcüstan Larisi\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Qana Sedisi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Qana Sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Cəbəli-Tariq Funtu\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Qambiya Dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Qvineya Frankı\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Qvineya Sulisi\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Ekvatoriya Gvineya Ekvele Quneanası\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Yunan Draçması\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Qvatemala Küetzalı\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugal Qvineya Eskudosu\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Qvineya-Bisau Pesosu\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Qayana Dolları\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Honq Konq Dolları\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduras Lempirası\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Xorvatiya Dinarı\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Xorvatiya Kunası\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haiti Qourdu\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Macarıstan Forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"İndoneziya Rupisi\"
        ],
        \"IEP\": [
            \"IEP\",
            \"İrlandiya Paundu\"
        ],
        \"ILP\": [
            \"ILP\",
            \"İzrail Paundu\"
        ],
        \"ILR\": [
            \"ILR\",
            \"İsrail Şekeli (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"İsrail Yeni Şekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindistan Rupisi\"
        ],
        \"IQD\": [
            \"IQD\",
            \"İraq Dinarı\"
        ],
        \"IRR\": [
            \"IRR\",
            \"İran Rialı\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"İslandiya Kronu (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"İslandiya Kronu\"
        ],
        \"ITL\": [
            \"ITL\",
            \"İtaliya Lirası\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Yamayka Dolları\"
        ],
        \"JOD\": [
            \"JOD\",
            \"İordaniya Dinarı\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yaponiya Yeni\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniya Şillinqi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Qırğızıstan Somu\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kamboca Rieli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor Frankı\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Şimali Koreya Vonu\"
        ],
        \"KRW\": [
            \"₩\",
            \"Cənubi Koreya Vonu\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Küveyt Dinarı\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kayman Adaları Dolları\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Qazaxıstan Tengesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos Kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Livan Funtu\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Şri Lanka Rupisi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiya Dolları\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto Lotisi\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litva Liti\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Litva Talonası\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Luksemburq Frankası (dəyişik)\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Luksemburq Frankası\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Luksemburq Frankası (finans)\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latviya Latı\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latviya Rublu\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liviya Dinarı\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Mərakeş Dirhəmi\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Mərakeş Frankası\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova Leyi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madaqaskar Ariarisi\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Madaqaskar Frankası\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedoniya Dinarı\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedoniya Dinarı (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Mali Frankı\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanma Kiyatı\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Monqoliya Tuqriki\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao Patakası\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mavritaniya Ugiyası (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mavritaniya Ugiyası\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Maltiz Paundu\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mavriki Rupisi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiv Rufiyası\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi Kvaçası\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksika Pesosu\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksika gümüş pesosu\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malayziya Ringiti\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambik Eskudosu\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambik Metikalı (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik Metikalı\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiya Dolları\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriya Nairası\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaraqua kordobu\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaraqua Kordobası\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Hollandiya Gilderi\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norveç Kronu\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal Rupisi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Yeni Zelandiya Dolları\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman Rialı\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama Balboası\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peru Inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru Solu\"
        ],
        \"PES\": [
            \"PES\",
            \"Peru Solu (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Yeni Qvineya Kinası\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin Pesosu\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistan Rupisi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polşa Zlotısı\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Polşa Zlotısı (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portuqal Eskudosu\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraqvay Quaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatar Rialı\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodezian Dolları\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumıniya Leyi (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumıniya Leyi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbiya Dinarı\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rusiya Rublu\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rusiya Rublu (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda Frankı\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Səudiyyə Riyalı\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon Adaları Dolları\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyşel Rupisi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan Funtu\"
        ],
        \"SEK\": [
            \"SEK\",
            \"İsveç Kronu\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Sinqapur Dolları\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Müqəddəs Yelena Funtu\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Sloveniya Toları\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovak Korunası\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leon Leonu\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali Şillinqi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam Dolları\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Cənubi Sudan Funtu\"
        ],
        \"STD\": [
            \"STD\",
            \"San Tom və Prinsip Dobrası (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San Tom və Prinsip Dobrası\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovet Rublu\"
        ],
        \"SVC\": [
            \"SVC\",
            \"El Salvador kolonu\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Suriya Funtu\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilend Lilangenini\"
        ],
        \"THB\": [
            \"฿\",
            \"Tayland Batı\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tacikistan Rublu\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tacikistan Somonisi\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Türkmənistan Manatı (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Türkmənistan Manatı\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis Dinarı\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonqa Panqası\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timor Eskudu\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Türkiyə Lirəsi (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Türkiyə Lirəsi\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad və Tobaqo Dolları\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Tayvan Yeni Dolları\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniya Şillinqi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrayna Qrivnası\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrayna Karbovenesası\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Uqanda Şillinqi (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uqanda Şillinqi\"
        ],
        \"USD\": [
            \"US\$\",
            \"ABŞ Dolları\"
        ],
        \"USN\": [
            \"USN\",
            \"ABŞ dolları (yeni gün)\"
        ],
        \"USS\": [
            \"USS\",
            \"ABŞ dolları (həmin gün)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Uruqvay pesosu Unidades Indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Uruqvay Pesosu (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruqvay Pesosu\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Özbəkistan Somu\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venesuela Bolivarı (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela Bolivarı (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela Bolivarı\"
        ],
        \"VND\": [
            \"₫\",
            \"Vyetnam Donqu\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vyetnam Donqu (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu Vatusu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa Talası\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Kamerun Frankı\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Şərqi Karib Dolları\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Fransız Gızıl Frankı\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Fransız UİC Frankı\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Fil Dişi Sahili Frankı\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransız Polineziyası Frankı\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Yəmən Dinarı\"
        ],
        \"YER\": [
            \"YER\",
            \"Yəmən Rialı\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Yuqoslaviya Dinarı (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Yuqoslaviya Yeni Dinarı (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Yuqoslaviya Dinarı (1990–1992)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Cənubi Afrika Randı (finans)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Cənubi Afrika Randı\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiya Kvaçası (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiya Kvaçası\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zair Yeni Zairi (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zair Zairi (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabve Dolları (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabve Dolları (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabve Dolları (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/az.json";
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
        \"ADP\": [
            \"ADP\",
            \"Andora Pesetası\"
        ],
        \"AED\": [
            \"AED\",
            \"Birləşmiş Ərəb Əmirlikləri Dirhəmi\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Əfqanıstan Əfqanisi (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Əfqanıstan Əfqanisi\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albaniya Leki (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albaniya Leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Ermənistan Dramı\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderland Antilyası Gilderi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Anqola Kvanzası\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Anqola Kvanzasi (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Anqola Yeni Kvanzası (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Anqola Kvanzası (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentina avstralı\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentina pesosu (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina Pesosu\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Avstriya Şillinqi\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstraliya Dolları\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba Florini\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azərbaycan Manatı (1993–2006)\"
        ],
        \"AZN\": [
            \"₼\",
            \"Azərbaycan Manatı\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosniya-Herseqovina Dinarı\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosniya-Herseqovina Markası\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados Dolları\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Banqladeş Takası\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belçika Frankı (deyşirik)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belçika Frankı\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belçika Frankı (finans)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bolqarıstan Levası\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolqarıstan Levi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bəhreyn Dinarı\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi Frankı\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda Dolları\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruney Dolları\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviya Bolivianosu\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Boliviya pesosu\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Boliviya mvdolı\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Braziliya kruzeyro novası\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Braziliya kruzadosu\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Braziliya kruzeyrosu (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Braziliya Realı\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Braziliya kruzado novası\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Braziliya kruzeyrosu\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Baham Dolları\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan Nqultrumu\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Burmis Kyatı\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana Pulası\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Belarus Yeni Rublu (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus Rublu\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarus Rublu (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz Dolları\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada Dolları\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Konqo Frankı\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR Avro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"İsveçrə Frankı\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR Frankası\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Çili Pesosu\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Çin Yuanı (ofşor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Çin Yuanı\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiya Pesosu\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rika Kolonu\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Serbiya Dinarı (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Çexoslavakiya Korunası\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba Çevrilən Pesosu\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba Pesosu\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kape Verde Eskudosu\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipr Paundu\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Çexiya Korunası\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Şərq Almaniya Ostmarkı\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Alman Markası\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Cibuti Frankı\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danimarka Kronu\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominika Pesosu\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Əlcəzair Dinarı\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvador Sukresi\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estoniya Krunu\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Misir Funtu\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreya Nakfası\"
        ],
        \"ESA\": [
            \"ESA\",
            \"İspan Pesetası (A account)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"İspan Pesetası (dəyşirik)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"İspan Pesetası\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiya Bırrı\"
        ],
        \"EUR\": [
            \"€\",
            \"Avro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Fin Markası\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fici Dolları\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend Adaları Funtu\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Fransız Markası\"
        ],
        \"GBP\": [
            \"£\",
            \"Britaniya Funtu\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gürcüstan Kupon Lariti\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gürcüstan Larisi\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Qana Sedisi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Qana Sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Cəbəli-Tariq Funtu\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Qambiya Dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Qvineya Frankı\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Qvineya Sulisi\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Ekvatoriya Gvineya Ekvele Quneanası\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Yunan Draçması\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Qvatemala Küetzalı\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugal Qvineya Eskudosu\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Qvineya-Bisau Pesosu\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Qayana Dolları\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Honq Konq Dolları\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduras Lempirası\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Xorvatiya Dinarı\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Xorvatiya Kunası\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haiti Qourdu\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Macarıstan Forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"İndoneziya Rupisi\"
        ],
        \"IEP\": [
            \"IEP\",
            \"İrlandiya Paundu\"
        ],
        \"ILP\": [
            \"ILP\",
            \"İzrail Paundu\"
        ],
        \"ILR\": [
            \"ILR\",
            \"İsrail Şekeli (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"İsrail Yeni Şekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindistan Rupisi\"
        ],
        \"IQD\": [
            \"IQD\",
            \"İraq Dinarı\"
        ],
        \"IRR\": [
            \"IRR\",
            \"İran Rialı\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"İslandiya Kronu (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"İslandiya Kronu\"
        ],
        \"ITL\": [
            \"ITL\",
            \"İtaliya Lirası\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Yamayka Dolları\"
        ],
        \"JOD\": [
            \"JOD\",
            \"İordaniya Dinarı\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yaponiya Yeni\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniya Şillinqi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Qırğızıstan Somu\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kamboca Rieli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor Frankı\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Şimali Koreya Vonu\"
        ],
        \"KRW\": [
            \"₩\",
            \"Cənubi Koreya Vonu\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Küveyt Dinarı\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kayman Adaları Dolları\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Qazaxıstan Tengesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos Kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Livan Funtu\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Şri Lanka Rupisi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiya Dolları\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto Lotisi\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litva Liti\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Litva Talonası\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Luksemburq Frankası (dəyişik)\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Luksemburq Frankası\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Luksemburq Frankası (finans)\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latviya Latı\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latviya Rublu\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liviya Dinarı\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Mərakeş Dirhəmi\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Mərakeş Frankası\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova Leyi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madaqaskar Ariarisi\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Madaqaskar Frankası\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedoniya Dinarı\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedoniya Dinarı (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Mali Frankı\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanma Kiyatı\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Monqoliya Tuqriki\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao Patakası\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mavritaniya Ugiyası (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mavritaniya Ugiyası\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Maltiz Paundu\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mavriki Rupisi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiv Rufiyası\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi Kvaçası\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksika Pesosu\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksika gümüş pesosu\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malayziya Ringiti\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambik Eskudosu\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambik Metikalı (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik Metikalı\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiya Dolları\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriya Nairası\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaraqua kordobu\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaraqua Kordobası\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Hollandiya Gilderi\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norveç Kronu\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal Rupisi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Yeni Zelandiya Dolları\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman Rialı\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama Balboası\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peru Inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru Solu\"
        ],
        \"PES\": [
            \"PES\",
            \"Peru Solu (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Yeni Qvineya Kinası\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin Pesosu\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistan Rupisi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polşa Zlotısı\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Polşa Zlotısı (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portuqal Eskudosu\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraqvay Quaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatar Rialı\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodezian Dolları\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumıniya Leyi (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumıniya Leyi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbiya Dinarı\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rusiya Rublu\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rusiya Rublu (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda Frankı\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Səudiyyə Riyalı\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon Adaları Dolları\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyşel Rupisi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan Funtu\"
        ],
        \"SEK\": [
            \"SEK\",
            \"İsveç Kronu\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Sinqapur Dolları\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Müqəddəs Yelena Funtu\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Sloveniya Toları\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovak Korunası\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leon Leonu\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali Şillinqi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam Dolları\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Cənubi Sudan Funtu\"
        ],
        \"STD\": [
            \"STD\",
            \"San Tom və Prinsip Dobrası (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San Tom və Prinsip Dobrası\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovet Rublu\"
        ],
        \"SVC\": [
            \"SVC\",
            \"El Salvador kolonu\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Suriya Funtu\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilend Lilangenini\"
        ],
        \"THB\": [
            \"฿\",
            \"Tayland Batı\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tacikistan Rublu\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tacikistan Somonisi\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Türkmənistan Manatı (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Türkmənistan Manatı\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis Dinarı\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonqa Panqası\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timor Eskudu\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Türkiyə Lirəsi (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Türkiyə Lirəsi\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad və Tobaqo Dolları\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Tayvan Yeni Dolları\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniya Şillinqi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrayna Qrivnası\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrayna Karbovenesası\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Uqanda Şillinqi (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uqanda Şillinqi\"
        ],
        \"USD\": [
            \"US\$\",
            \"ABŞ Dolları\"
        ],
        \"USN\": [
            \"USN\",
            \"ABŞ dolları (yeni gün)\"
        ],
        \"USS\": [
            \"USS\",
            \"ABŞ dolları (həmin gün)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Uruqvay pesosu Unidades Indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Uruqvay Pesosu (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruqvay Pesosu\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Özbəkistan Somu\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venesuela Bolivarı (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela Bolivarı (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela Bolivarı\"
        ],
        \"VND\": [
            \"₫\",
            \"Vyetnam Donqu\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vyetnam Donqu (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu Vatusu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa Talası\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Kamerun Frankı\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Şərqi Karib Dolları\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Fransız Gızıl Frankı\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Fransız UİC Frankı\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Fil Dişi Sahili Frankı\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransız Polineziyası Frankı\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Yəmən Dinarı\"
        ],
        \"YER\": [
            \"YER\",
            \"Yəmən Rialı\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Yuqoslaviya Dinarı (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Yuqoslaviya Yeni Dinarı (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Yuqoslaviya Dinarı (1990–1992)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Cənubi Afrika Randı (finans)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Cənubi Afrika Randı\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiya Kvaçası (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiya Kvaçası\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zair Yeni Zairi (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zair Zairi (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabve Dolları (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabve Dolları (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabve Dolları (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/az.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/az.json");
    }
}
