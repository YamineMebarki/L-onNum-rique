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

/* vendor/symfony/intl/Resources/data/currencies/or.json */
class __TwigTemplate_988ef53a9a6bc111013cfd229b3436df06e8fe5cd891e106f78cf97586137d78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/or.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/or.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"ଯୁକ୍ତ ଆରବ ଏମିରେଟସ୍ ଦିରହାମ୍\"
        ],
        \"AFN\": [
            \"AFN\",
            \"ଆଫଗାନ ଆଫଗାନି\"
        ],
        \"ALL\": [
            \"ALL\",
            \"ଆଲବାନିୟ ଲେକ୍\"
        ],
        \"AMD\": [
            \"AMD\",
            \"ଅର୍ମେନୀୟ ଡ୍ରାମ୍\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ନେଦରଲ୍ୟାଣ୍ଡ୍ ଆଣ୍ଟିଲିୟ ଗିଲଡର୍\"
        ],
        \"AOA\": [
            \"AOA\",
            \"ଅଙ୍ଗୋଲୀୟ କୱାନଜା\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ଆର୍ଜେଣ୍ଟାଇନ୍‍ ପେସୋ\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ଅଷ୍ଟ୍ରେଲିୟ ଡଲାର୍\"
        ],
        \"AWG\": [
            \"AWG\",
            \"ଆରୁବୀୟ ଫ୍ଲୋରିନ୍\"
        ],
        \"AZN\": [
            \"AZN\",
            \"ଆଜେରବାଇଜାନି ମନତ୍\"
        ],
        \"BAM\": [
            \"BAM\",
            \"ବୋସନିଆ-ହର୍ଜଗୋଭିନା କନଭର୍ଟିବଲ୍ ମାର୍କ୍\"
        ],
        \"BBD\": [
            \"BBD\",
            \"ବାର୍ବାଡୀୟ ଡଲାର୍\"
        ],
        \"BDT\": [
            \"BDT\",
            \"ବଙ୍ଗଳାଦେଶୀ ଟାକା\"
        ],
        \"BGN\": [
            \"BGN\",
            \"ବୁଲଗେରୀୟ ଲେଭ୍\"
        ],
        \"BHD\": [
            \"BHD\",
            \"ବାଃରେନି ଦିନାର୍\"
        ],
        \"BIF\": [
            \"BIF\",
            \"ବୁରୁଣ୍ଡିୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"BMD\": [
            \"BMD\",
            \"ବର୍ମ୍ୟୁଡା ଡଲାର୍\"
        ],
        \"BND\": [
            \"BND\",
            \"ବ୍ରୁନେଇ ଡଲାର୍\"
        ],
        \"BOB\": [
            \"BOB\",
            \"ବୋଲିଭୀୟ ବୋଲିଭିଆନୋ\"
        ],
        \"BRL\": [
            \"R\$\",
            \"ବ୍ରାଜିଲୀୟ ରିଏଲ୍\"
        ],
        \"BSD\": [
            \"BSD\",
            \"ବାହାମୀୟ ଡଲାର୍\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ଭୁଟାନୀ ଗଲଟ୍ରୁମ୍\"
        ],
        \"BWP\": [
            \"BWP\",
            \"ବୋତ୍ସୱାନା ପୁଲା\"
        ],
        \"BYN\": [
            \"BYN\",
            \"ବେଲାରୁସି ରୁବଲ୍\"
        ],
        \"BZD\": [
            \"BZD\",
            \"ବେଲିଜ୍ ଡଲାର୍\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"କାନେଡିୟ ଡଲାର୍\"
        ],
        \"CDF\": [
            \"CDF\",
            \"କଙ୍ଗୋଲିଜ୍ ଫ୍ରାଙ୍କ୍\"
        ],
        \"CHF\": [
            \"CHF\",
            \"ସୁଇସ୍ ଫ୍ରାଙ୍କ୍\"
        ],
        \"CLP\": [
            \"CLP\",
            \"ଚିଲି ପେସୋ\"
        ],
        \"CNH\": [
            \"CNH\",
            \"ଚିନୀ ୟୁଆନ୍ (ଅଫସୋର୍)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"ଚିନୀ ୟୁଆନ୍\"
        ],
        \"COP\": [
            \"COP\",
            \"କଲୋମ୍ବୀୟ ପେସୋ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"କୋଷ୍ଟା ରିକୀୟ କୋଲୋନ୍\"
        ],
        \"CUC\": [
            \"CUC\",
            \"କ୍ୟୁବାନ୍ କନଭର୍ଟିବଲ୍ ପେସୋ\"
        ],
        \"CUP\": [
            \"CUP\",
            \"କ୍ୟୁବାନ୍ ପେସୋ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"କେପ୍ ଭେର୍ଦେୟ ଏସ୍କୁଡୋ\"
        ],
        \"CZK\": [
            \"CZK\",
            \"ଚେକ୍ କୋରୁନା\"
        ],
        \"DJF\": [
            \"DJF\",
            \"ଜିବୌଟିୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"DKK\": [
            \"DKK\",
            \"ଡାନିସ୍ କ୍ରୋନ୍\"
        ],
        \"DOP\": [
            \"DOP\",
            \"ଡୋମିନିକୀୟ ପେସୋ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"ଆଲଜେରୀୟ ଦିନାର୍\"
        ],
        \"EGP\": [
            \"EGP\",
            \"ଇଜିପ୍ଟିୟ ପାଉଣ୍ଡ୍\"
        ],
        \"ERN\": [
            \"ERN\",
            \"ଏରିଟ୍ରେୟ ନାକଫା\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ଇଥିଓପିୟ ବିର୍\"
        ],
        \"EUR\": [
            \"€\",
            \"ୟୁରୋ\"
        ],
        \"FJD\": [
            \"FJD\",
            \"ଫିଜି ଡଲାର୍\"
        ],
        \"FKP\": [
            \"FKP\",
            \"ଫକଲ୍ୟାଣ୍ଡ୍ ଦ୍ଵୀପପୁଞ୍ଜ ପାଉଣ୍ଡ୍\"
        ],
        \"GBP\": [
            \"£\",
            \"ବ୍ରିଟିଶ୍ ପାଉଣ୍ଡ୍\"
        ],
        \"GEL\": [
            \"GEL\",
            \"ଜର୍ଜିୟ ଲାରି\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ଘାନିୟ ସେଡି\"
        ],
        \"GIP\": [
            \"GIP\",
            \"ଗିବ୍ରାଲଟର୍ ପାଉଣ୍ଡ୍\"
        ],
        \"GMD\": [
            \"GMD\",
            \"ଗାମ୍ବିୟ ଡାଲାସି\"
        ],
        \"GNF\": [
            \"GNF\",
            \"ଗୁଇନେୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ଗୁଏଟମାଲୀୟ କ୍ଵେତଜାଲ୍\"
        ],
        \"GYD\": [
            \"GYD\",
            \"ଗାୟାନିସ୍ ଡଲାର୍\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"ହଂ କଂ ଡଲାର୍\"
        ],
        \"HNL\": [
            \"HNL\",
            \"ହୋଣ୍ଡୁରୀୟ ଲେମପିରା\"
        ],
        \"HRK\": [
            \"HRK\",
            \"କ୍ରୋଏସୀୟ କୁନା\"
        ],
        \"HTG\": [
            \"HTG\",
            \"ହାଇତୀୟ ଗୋରଡ୍\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ହଙ୍ଗେରିୟ ଫୋରିଣ୍ଟ୍\"
        ],
        \"IDR\": [
            \"IDR\",
            \"ଇଣ୍ଡୋନେସିୟ ରୁପିଆ\"
        ],
        \"ILS\": [
            \"₪\",
            \"ଇସ୍ରାଇଲି ନ୍ୟୁ ଶେକେଲ୍\"
        ],
        \"INR\": [
            \"₹\",
            \"ଭାରତୀୟ ଟଙ୍କା\"
        ],
        \"IQD\": [
            \"IQD\",
            \"ଇରାକି ଦିନାର୍\"
        ],
        \"IRR\": [
            \"IRR\",
            \"ଇରାନୀ ରିଆଲ୍\"
        ],
        \"ISK\": [
            \"ISK\",
            \"ଆଇସଲ୍ୟାଣ୍ଡିକ୍‍ କ୍ରୋନା\"
        ],
        \"JMD\": [
            \"JMD\",
            \"ଜାମାଇକୀୟ ଡଲାର୍\"
        ],
        \"JOD\": [
            \"JOD\",
            \"ଜର୍ଡାନିୟ ଦିନାର୍\"
        ],
        \"JPY\": [
            \"¥\",
            \"ଜାପାନୀ ୟେନ୍\"
        ],
        \"KES\": [
            \"KES\",
            \"କେନିୟ ଶିଲିଂ\"
        ],
        \"KGS\": [
            \"KGS\",
            \"କିର୍ଗିସ୍ତାନୀ ସୋମ୍\"
        ],
        \"KHR\": [
            \"KHR\",
            \"କାମ୍ଵୋଡିୟ ରିଏଲ୍\"
        ],
        \"KMF\": [
            \"KMF\",
            \"କୋମୋରୀୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"KPW\": [
            \"KPW\",
            \"ଉତ୍ତର କୋରିଆଇ ୱୋନ୍\"
        ],
        \"KRW\": [
            \"₩\",
            \"ଦକ୍ଷିଣ କୋରିଆଇ ୱୋନ୍\"
        ],
        \"KWD\": [
            \"KWD\",
            \"କୁୱେତି ଦିନାର୍\"
        ],
        \"KYD\": [
            \"KYD\",
            \"କେମେନ୍ ଦ୍ଵୀପପୁଞ୍ଜ ଡଲାର୍\"
        ],
        \"KZT\": [
            \"KZT\",
            \"କାଜାକସ୍ତାନୀ ତେଙ୍ଗେ\"
        ],
        \"LAK\": [
            \"LAK\",
            \"ଲାଓଟିୟ କିପ୍\"
        ],
        \"LBP\": [
            \"LBP\",
            \"ଲେବାନିଜ୍ ପାଉଣ୍ଡ୍\"
        ],
        \"LKR\": [
            \"LKR\",
            \"ଶ୍ରୀଲଙ୍କିୟ ରୁପି\"
        ],
        \"LRD\": [
            \"LRD\",
            \"ଲିବେରୀୟ ଡଲାର୍\"
        ],
        \"LYD\": [
            \"LYD\",
            \"ଲିବ୍ୟ ଦିନାର୍\"
        ],
        \"MAD\": [
            \"MAD\",
            \"ମୋରୋକୀୟ ଦିର୍ହାମ୍\"
        ],
        \"MDL\": [
            \"MDL\",
            \"ମୋଲଡୋଭାନ୍ ଲେୟୁ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ମାଲାଗାସି ଏରିଆରୀ\"
        ],
        \"MKD\": [
            \"MKD\",
            \"ମାସେଡୋନୀୟ ଡିନର୍\"
        ],
        \"MMK\": [
            \"MMK\",
            \"ମ୍ୟାନମାର୍ କ୍ୟାତ୍‌\"
        ],
        \"MNT\": [
            \"MNT\",
            \"ମଙ୍ଗୋଲିୟ ତୁଗ୍ରିକ୍\"
        ],
        \"MOP\": [
            \"MOP\",
            \"ମାକାନେଜ୍ ପାଟାକା\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ମର୍ଟିନିୟ ଆଗୁଇଅ (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ମର୍ଟିନିୟ ଆଗୁଇଅ\"
        ],
        \"MUR\": [
            \"MUR\",
            \"ମୌରିସୀୟ ରୁପି\"
        ],
        \"MVR\": [
            \"MVR\",
            \"ମାଲଡିଭିୟ ରୁଫିୟା\"
        ],
        \"MWK\": [
            \"MWK\",
            \"ମଲାୱି କ୍ୱାଚା\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"ମେକ୍ସିକୀୟ ପେସୋ\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ମାଲେସିୟ ରିଙ୍ଗିଟ୍\"
        ],
        \"MZN\": [
            \"MZN\",
            \"ମୋଜାମ୍ବିକୀୟ ମେଟିକାଲ୍\"
        ],
        \"NAD\": [
            \"NAD\",
            \"ନାମିବିୟ ଡଲାର୍\"
        ],
        \"NGN\": [
            \"NGN\",
            \"ନାଇଜେରିଆଇ ନାଇରା\"
        ],
        \"NIO\": [
            \"NIO\",
            \"ନିକାରାଗୁଆ କୋର୍ଡୋବା\"
        ],
        \"NOK\": [
            \"NOK\",
            \"ନରୱେୟୀୟ କ୍ରୋନ୍\"
        ],
        \"NPR\": [
            \"NPR\",
            \"ନେପାଳି ରୁପି\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"ନ୍ୟୁଜିଲ୍ୟାଣ୍ଡ୍ ଡଲାର୍\"
        ],
        \"OMR\": [
            \"OMR\",
            \"ଓମାନି ରିଆଲ୍\"
        ],
        \"PAB\": [
            \"PAB\",
            \"ପାନାମାନିୟ ବାଲବୋଆ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"ପେରୁଭୀୟ ସୋଲ୍\"
        ],
        \"PGK\": [
            \"PGK\",
            \"ପପୁଆ ନ୍ୟୁ ଗୁଇନିୟ କିନା\"
        ],
        \"PHP\": [
            \"PHP\",
            \"ଫିଲିପିନି ପେସୋ\"
        ],
        \"PKR\": [
            \"PKR\",
            \"ପାକିସ୍ତାନୀ ରୁପି\"
        ],
        \"PLN\": [
            \"PLN\",
            \"ପୋଲିଶ୍ ଜ୍ଲଟୀ\"
        ],
        \"PYG\": [
            \"PYG\",
            \"ପାରାଗୁଆୟାନ୍ ଗୁଆରାନି\"
        ],
        \"QAR\": [
            \"QAR\",
            \"କ୍ଵାତାରି ରିଆଲ୍\"
        ],
        \"RON\": [
            \"RON\",
            \"ରୋମାନିୟ ଲେଉ\"
        ],
        \"RSD\": [
            \"RSD\",
            \"ସର୍ବିଆଇ ଦିନାର\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ରୁଷି ରୁବଲ୍\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ରୁୱାଣ୍ଡା ଫ୍ରାଙ୍କ୍\"
        ],
        \"SAR\": [
            \"SAR\",
            \"ସୌଦି ରିୟାଲ୍\"
        ],
        \"SBD\": [
            \"SBD\",
            \"ସୋଲୋମୋନ୍ ଦ୍ଵୀପପୁଞ୍ଜ ଡଲାର୍\"
        ],
        \"SCR\": [
            \"SCR\",
            \"ସେୟଚେଲୋଇସ୍ ରୁପି\"
        ],
        \"SDG\": [
            \"SDG\",
            \"ସୁଦାନୀଜ ପାଉଣ୍ଡ୍\"
        ],
        \"SEK\": [
            \"SEK\",
            \"ସ୍ୱେଡିଶ୍ କ୍ରୋନା\"
        ],
        \"SGD\": [
            \"SGD\",
            \"ସିଙ୍ଗାପୁର୍ ଡଲାର୍\"
        ],
        \"SHP\": [
            \"SHP\",
            \"ସେଣ୍ଟ୍. ହେଲେନା ପାଉଣ୍ଡ୍\"
        ],
        \"SLL\": [
            \"SLL\",
            \"ସିଏରା ଲିଓନୀୟ ଲେଓନ୍\"
        ],
        \"SOS\": [
            \"SOS\",
            \"ସୋମାଲି ସିଲିଂ\"
        ],
        \"SRD\": [
            \"SRD\",
            \"ସୁରିନାମିଜ୍ ଡଲାର୍\"
        ],
        \"SSP\": [
            \"SSP\",
            \"ଦକ୍ଷିଣ ସୁଡାନିଜ୍‍ ପାଉଣ୍ଡ୍\"
        ],
        \"STD\": [
            \"STD\",
            \"ସାଓ ତୋମେ & ପ୍ରିସିପ୍ ଡୋବ୍ରା (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"ସାଓ ତୋମେ & ପ୍ରିସିପ୍ ଡୋବ୍ରା\"
        ],
        \"SYP\": [
            \"SYP\",
            \"ସିରିୟ ପାଉଣ୍ଡ୍\"
        ],
        \"SZL\": [
            \"SZL\",
            \"ସ୍ଵାଜି ଲିଲାଞ୍ଜେନି\"
        ],
        \"THB\": [
            \"THB\",
            \"ଥାଇ ଭାଟ୍\"
        ],
        \"TJS\": [
            \"TJS\",
            \"ତାଜିକିସ୍ତାନୀ ସୋମୋନି\"
        ],
        \"TMT\": [
            \"TMT\",
            \"ତୁର୍କମେନିସ୍ତାନୀ ମନତ୍‌\"
        ],
        \"TND\": [
            \"TND\",
            \"ଟୁନେସିଆଇ ଦିନାର୍\"
        ],
        \"TOP\": [
            \"TOP\",
            \"ତୋଙ୍ଗିୟ ପାଙ୍ଗା\"
        ],
        \"TRY\": [
            \"TRY\",
            \"ତୁର୍କିୟ ଲିରା\"
        ],
        \"TTD\": [
            \"TTD\",
            \"ତ୍ରିନିଦାଦ୍ ଏବଂ ଟୋବାଗୋ ଡଲାର୍\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"ନ୍ୟୁ ତାଇୱାନ୍ ଡଲାର୍\"
        ],
        \"TZS\": [
            \"TZS\",
            \"ତାନଜାନୀୟ ଶିଲିଂ\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ୟୁକ୍ରେନୀୟ ହ୍ରାଇଭନିଆ\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ଉଗାଣ୍ଡିୟ ଶିଲିଂ\"
        ],
        \"USD\": [
            \"\$\",
            \"ଯୁକ୍ତରାଷ୍ଟ୍ର ଡଲାର୍\"
        ],
        \"UYU\": [
            \"UYU\",
            \"ଉରୁଗୁଇୟାନ୍ ପେସୋ\"
        ],
        \"UZS\": [
            \"UZS\",
            \"ଉଜବେକିସ୍ତାନୀ ସୋମ୍\"
        ],
        \"VEF\": [
            \"VEF\",
            \"ଭେନେଜୁଏଲାନ୍ ବୋଲିଭାର୍ (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"ଭେନେଜୁଏଲାନ୍ ବୋଲିଭାର୍\"
        ],
        \"VND\": [
            \"₫\",
            \"ଭୀଏତନାମୀୟ ଡଙ୍ଗ\"
        ],
        \"VUV\": [
            \"VUV\",
            \"ଭାନୁଆଟୁ ଭାଟୁ\"
        ],
        \"WST\": [
            \"WST\",
            \"ସାମୋୟିୟ ତାଲା\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"ମଧ୍ୟ ଆଫ୍ରିକୀ CFA ଫ୍ରାଙ୍କ୍\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"ପୂର୍ବ କାରିବୀୟ ଡଲାର୍\"
        ],
        \"XOF\": [
            \"CFA\",
            \"ପଶ୍ଚିମ ଆଫ୍ରିକିୟ CFA ଫ୍ରାଙ୍କ୍\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP ଫ୍ରାଙ୍କ୍\"
        ],
        \"YER\": [
            \"YER\",
            \"ୟେମେନି ରିଆଲ୍\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"ଦକ୍ଷିଣ ଆଫ୍ରିକିୟ ରାଣ୍ଡ୍\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"ଜାମ୍ବୀୟ କ୍ୱାଚା\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/or.json";
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
            \"ଯୁକ୍ତ ଆରବ ଏମିରେଟସ୍ ଦିରହାମ୍\"
        ],
        \"AFN\": [
            \"AFN\",
            \"ଆଫଗାନ ଆଫଗାନି\"
        ],
        \"ALL\": [
            \"ALL\",
            \"ଆଲବାନିୟ ଲେକ୍\"
        ],
        \"AMD\": [
            \"AMD\",
            \"ଅର୍ମେନୀୟ ଡ୍ରାମ୍\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ନେଦରଲ୍ୟାଣ୍ଡ୍ ଆଣ୍ଟିଲିୟ ଗିଲଡର୍\"
        ],
        \"AOA\": [
            \"AOA\",
            \"ଅଙ୍ଗୋଲୀୟ କୱାନଜା\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ଆର୍ଜେଣ୍ଟାଇନ୍‍ ପେସୋ\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ଅଷ୍ଟ୍ରେଲିୟ ଡଲାର୍\"
        ],
        \"AWG\": [
            \"AWG\",
            \"ଆରୁବୀୟ ଫ୍ଲୋରିନ୍\"
        ],
        \"AZN\": [
            \"AZN\",
            \"ଆଜେରବାଇଜାନି ମନତ୍\"
        ],
        \"BAM\": [
            \"BAM\",
            \"ବୋସନିଆ-ହର୍ଜଗୋଭିନା କନଭର୍ଟିବଲ୍ ମାର୍କ୍\"
        ],
        \"BBD\": [
            \"BBD\",
            \"ବାର୍ବାଡୀୟ ଡଲାର୍\"
        ],
        \"BDT\": [
            \"BDT\",
            \"ବଙ୍ଗଳାଦେଶୀ ଟାକା\"
        ],
        \"BGN\": [
            \"BGN\",
            \"ବୁଲଗେରୀୟ ଲେଭ୍\"
        ],
        \"BHD\": [
            \"BHD\",
            \"ବାଃରେନି ଦିନାର୍\"
        ],
        \"BIF\": [
            \"BIF\",
            \"ବୁରୁଣ୍ଡିୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"BMD\": [
            \"BMD\",
            \"ବର୍ମ୍ୟୁଡା ଡଲାର୍\"
        ],
        \"BND\": [
            \"BND\",
            \"ବ୍ରୁନେଇ ଡଲାର୍\"
        ],
        \"BOB\": [
            \"BOB\",
            \"ବୋଲିଭୀୟ ବୋଲିଭିଆନୋ\"
        ],
        \"BRL\": [
            \"R\$\",
            \"ବ୍ରାଜିଲୀୟ ରିଏଲ୍\"
        ],
        \"BSD\": [
            \"BSD\",
            \"ବାହାମୀୟ ଡଲାର୍\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ଭୁଟାନୀ ଗଲଟ୍ରୁମ୍\"
        ],
        \"BWP\": [
            \"BWP\",
            \"ବୋତ୍ସୱାନା ପୁଲା\"
        ],
        \"BYN\": [
            \"BYN\",
            \"ବେଲାରୁସି ରୁବଲ୍\"
        ],
        \"BZD\": [
            \"BZD\",
            \"ବେଲିଜ୍ ଡଲାର୍\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"କାନେଡିୟ ଡଲାର୍\"
        ],
        \"CDF\": [
            \"CDF\",
            \"କଙ୍ଗୋଲିଜ୍ ଫ୍ରାଙ୍କ୍\"
        ],
        \"CHF\": [
            \"CHF\",
            \"ସୁଇସ୍ ଫ୍ରାଙ୍କ୍\"
        ],
        \"CLP\": [
            \"CLP\",
            \"ଚିଲି ପେସୋ\"
        ],
        \"CNH\": [
            \"CNH\",
            \"ଚିନୀ ୟୁଆନ୍ (ଅଫସୋର୍)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"ଚିନୀ ୟୁଆନ୍\"
        ],
        \"COP\": [
            \"COP\",
            \"କଲୋମ୍ବୀୟ ପେସୋ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"କୋଷ୍ଟା ରିକୀୟ କୋଲୋନ୍\"
        ],
        \"CUC\": [
            \"CUC\",
            \"କ୍ୟୁବାନ୍ କନଭର୍ଟିବଲ୍ ପେସୋ\"
        ],
        \"CUP\": [
            \"CUP\",
            \"କ୍ୟୁବାନ୍ ପେସୋ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"କେପ୍ ଭେର୍ଦେୟ ଏସ୍କୁଡୋ\"
        ],
        \"CZK\": [
            \"CZK\",
            \"ଚେକ୍ କୋରୁନା\"
        ],
        \"DJF\": [
            \"DJF\",
            \"ଜିବୌଟିୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"DKK\": [
            \"DKK\",
            \"ଡାନିସ୍ କ୍ରୋନ୍\"
        ],
        \"DOP\": [
            \"DOP\",
            \"ଡୋମିନିକୀୟ ପେସୋ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"ଆଲଜେରୀୟ ଦିନାର୍\"
        ],
        \"EGP\": [
            \"EGP\",
            \"ଇଜିପ୍ଟିୟ ପାଉଣ୍ଡ୍\"
        ],
        \"ERN\": [
            \"ERN\",
            \"ଏରିଟ୍ରେୟ ନାକଫା\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ଇଥିଓପିୟ ବିର୍\"
        ],
        \"EUR\": [
            \"€\",
            \"ୟୁରୋ\"
        ],
        \"FJD\": [
            \"FJD\",
            \"ଫିଜି ଡଲାର୍\"
        ],
        \"FKP\": [
            \"FKP\",
            \"ଫକଲ୍ୟାଣ୍ଡ୍ ଦ୍ଵୀପପୁଞ୍ଜ ପାଉଣ୍ଡ୍\"
        ],
        \"GBP\": [
            \"£\",
            \"ବ୍ରିଟିଶ୍ ପାଉଣ୍ଡ୍\"
        ],
        \"GEL\": [
            \"GEL\",
            \"ଜର୍ଜିୟ ଲାରି\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ଘାନିୟ ସେଡି\"
        ],
        \"GIP\": [
            \"GIP\",
            \"ଗିବ୍ରାଲଟର୍ ପାଉଣ୍ଡ୍\"
        ],
        \"GMD\": [
            \"GMD\",
            \"ଗାମ୍ବିୟ ଡାଲାସି\"
        ],
        \"GNF\": [
            \"GNF\",
            \"ଗୁଇନେୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ଗୁଏଟମାଲୀୟ କ୍ଵେତଜାଲ୍\"
        ],
        \"GYD\": [
            \"GYD\",
            \"ଗାୟାନିସ୍ ଡଲାର୍\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"ହଂ କଂ ଡଲାର୍\"
        ],
        \"HNL\": [
            \"HNL\",
            \"ହୋଣ୍ଡୁରୀୟ ଲେମପିରା\"
        ],
        \"HRK\": [
            \"HRK\",
            \"କ୍ରୋଏସୀୟ କୁନା\"
        ],
        \"HTG\": [
            \"HTG\",
            \"ହାଇତୀୟ ଗୋରଡ୍\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ହଙ୍ଗେରିୟ ଫୋରିଣ୍ଟ୍\"
        ],
        \"IDR\": [
            \"IDR\",
            \"ଇଣ୍ଡୋନେସିୟ ରୁପିଆ\"
        ],
        \"ILS\": [
            \"₪\",
            \"ଇସ୍ରାଇଲି ନ୍ୟୁ ଶେକେଲ୍\"
        ],
        \"INR\": [
            \"₹\",
            \"ଭାରତୀୟ ଟଙ୍କା\"
        ],
        \"IQD\": [
            \"IQD\",
            \"ଇରାକି ଦିନାର୍\"
        ],
        \"IRR\": [
            \"IRR\",
            \"ଇରାନୀ ରିଆଲ୍\"
        ],
        \"ISK\": [
            \"ISK\",
            \"ଆଇସଲ୍ୟାଣ୍ଡିକ୍‍ କ୍ରୋନା\"
        ],
        \"JMD\": [
            \"JMD\",
            \"ଜାମାଇକୀୟ ଡଲାର୍\"
        ],
        \"JOD\": [
            \"JOD\",
            \"ଜର୍ଡାନିୟ ଦିନାର୍\"
        ],
        \"JPY\": [
            \"¥\",
            \"ଜାପାନୀ ୟେନ୍\"
        ],
        \"KES\": [
            \"KES\",
            \"କେନିୟ ଶିଲିଂ\"
        ],
        \"KGS\": [
            \"KGS\",
            \"କିର୍ଗିସ୍ତାନୀ ସୋମ୍\"
        ],
        \"KHR\": [
            \"KHR\",
            \"କାମ୍ଵୋଡିୟ ରିଏଲ୍\"
        ],
        \"KMF\": [
            \"KMF\",
            \"କୋମୋରୀୟ ଫ୍ରାଙ୍କ୍\"
        ],
        \"KPW\": [
            \"KPW\",
            \"ଉତ୍ତର କୋରିଆଇ ୱୋନ୍\"
        ],
        \"KRW\": [
            \"₩\",
            \"ଦକ୍ଷିଣ କୋରିଆଇ ୱୋନ୍\"
        ],
        \"KWD\": [
            \"KWD\",
            \"କୁୱେତି ଦିନାର୍\"
        ],
        \"KYD\": [
            \"KYD\",
            \"କେମେନ୍ ଦ୍ଵୀପପୁଞ୍ଜ ଡଲାର୍\"
        ],
        \"KZT\": [
            \"KZT\",
            \"କାଜାକସ୍ତାନୀ ତେଙ୍ଗେ\"
        ],
        \"LAK\": [
            \"LAK\",
            \"ଲାଓଟିୟ କିପ୍\"
        ],
        \"LBP\": [
            \"LBP\",
            \"ଲେବାନିଜ୍ ପାଉଣ୍ଡ୍\"
        ],
        \"LKR\": [
            \"LKR\",
            \"ଶ୍ରୀଲଙ୍କିୟ ରୁପି\"
        ],
        \"LRD\": [
            \"LRD\",
            \"ଲିବେରୀୟ ଡଲାର୍\"
        ],
        \"LYD\": [
            \"LYD\",
            \"ଲିବ୍ୟ ଦିନାର୍\"
        ],
        \"MAD\": [
            \"MAD\",
            \"ମୋରୋକୀୟ ଦିର୍ହାମ୍\"
        ],
        \"MDL\": [
            \"MDL\",
            \"ମୋଲଡୋଭାନ୍ ଲେୟୁ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ମାଲାଗାସି ଏରିଆରୀ\"
        ],
        \"MKD\": [
            \"MKD\",
            \"ମାସେଡୋନୀୟ ଡିନର୍\"
        ],
        \"MMK\": [
            \"MMK\",
            \"ମ୍ୟାନମାର୍ କ୍ୟାତ୍‌\"
        ],
        \"MNT\": [
            \"MNT\",
            \"ମଙ୍ଗୋଲିୟ ତୁଗ୍ରିକ୍\"
        ],
        \"MOP\": [
            \"MOP\",
            \"ମାକାନେଜ୍ ପାଟାକା\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ମର୍ଟିନିୟ ଆଗୁଇଅ (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ମର୍ଟିନିୟ ଆଗୁଇଅ\"
        ],
        \"MUR\": [
            \"MUR\",
            \"ମୌରିସୀୟ ରୁପି\"
        ],
        \"MVR\": [
            \"MVR\",
            \"ମାଲଡିଭିୟ ରୁଫିୟା\"
        ],
        \"MWK\": [
            \"MWK\",
            \"ମଲାୱି କ୍ୱାଚା\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"ମେକ୍ସିକୀୟ ପେସୋ\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ମାଲେସିୟ ରିଙ୍ଗିଟ୍\"
        ],
        \"MZN\": [
            \"MZN\",
            \"ମୋଜାମ୍ବିକୀୟ ମେଟିକାଲ୍\"
        ],
        \"NAD\": [
            \"NAD\",
            \"ନାମିବିୟ ଡଲାର୍\"
        ],
        \"NGN\": [
            \"NGN\",
            \"ନାଇଜେରିଆଇ ନାଇରା\"
        ],
        \"NIO\": [
            \"NIO\",
            \"ନିକାରାଗୁଆ କୋର୍ଡୋବା\"
        ],
        \"NOK\": [
            \"NOK\",
            \"ନରୱେୟୀୟ କ୍ରୋନ୍\"
        ],
        \"NPR\": [
            \"NPR\",
            \"ନେପାଳି ରୁପି\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"ନ୍ୟୁଜିଲ୍ୟାଣ୍ଡ୍ ଡଲାର୍\"
        ],
        \"OMR\": [
            \"OMR\",
            \"ଓମାନି ରିଆଲ୍\"
        ],
        \"PAB\": [
            \"PAB\",
            \"ପାନାମାନିୟ ବାଲବୋଆ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"ପେରୁଭୀୟ ସୋଲ୍\"
        ],
        \"PGK\": [
            \"PGK\",
            \"ପପୁଆ ନ୍ୟୁ ଗୁଇନିୟ କିନା\"
        ],
        \"PHP\": [
            \"PHP\",
            \"ଫିଲିପିନି ପେସୋ\"
        ],
        \"PKR\": [
            \"PKR\",
            \"ପାକିସ୍ତାନୀ ରୁପି\"
        ],
        \"PLN\": [
            \"PLN\",
            \"ପୋଲିଶ୍ ଜ୍ଲଟୀ\"
        ],
        \"PYG\": [
            \"PYG\",
            \"ପାରାଗୁଆୟାନ୍ ଗୁଆରାନି\"
        ],
        \"QAR\": [
            \"QAR\",
            \"କ୍ଵାତାରି ରିଆଲ୍\"
        ],
        \"RON\": [
            \"RON\",
            \"ରୋମାନିୟ ଲେଉ\"
        ],
        \"RSD\": [
            \"RSD\",
            \"ସର୍ବିଆଇ ଦିନାର\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ରୁଷି ରୁବଲ୍\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ରୁୱାଣ୍ଡା ଫ୍ରାଙ୍କ୍\"
        ],
        \"SAR\": [
            \"SAR\",
            \"ସୌଦି ରିୟାଲ୍\"
        ],
        \"SBD\": [
            \"SBD\",
            \"ସୋଲୋମୋନ୍ ଦ୍ଵୀପପୁଞ୍ଜ ଡଲାର୍\"
        ],
        \"SCR\": [
            \"SCR\",
            \"ସେୟଚେଲୋଇସ୍ ରୁପି\"
        ],
        \"SDG\": [
            \"SDG\",
            \"ସୁଦାନୀଜ ପାଉଣ୍ଡ୍\"
        ],
        \"SEK\": [
            \"SEK\",
            \"ସ୍ୱେଡିଶ୍ କ୍ରୋନା\"
        ],
        \"SGD\": [
            \"SGD\",
            \"ସିଙ୍ଗାପୁର୍ ଡଲାର୍\"
        ],
        \"SHP\": [
            \"SHP\",
            \"ସେଣ୍ଟ୍. ହେଲେନା ପାଉଣ୍ଡ୍\"
        ],
        \"SLL\": [
            \"SLL\",
            \"ସିଏରା ଲିଓନୀୟ ଲେଓନ୍\"
        ],
        \"SOS\": [
            \"SOS\",
            \"ସୋମାଲି ସିଲିଂ\"
        ],
        \"SRD\": [
            \"SRD\",
            \"ସୁରିନାମିଜ୍ ଡଲାର୍\"
        ],
        \"SSP\": [
            \"SSP\",
            \"ଦକ୍ଷିଣ ସୁଡାନିଜ୍‍ ପାଉଣ୍ଡ୍\"
        ],
        \"STD\": [
            \"STD\",
            \"ସାଓ ତୋମେ & ପ୍ରିସିପ୍ ଡୋବ୍ରା (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"ସାଓ ତୋମେ & ପ୍ରିସିପ୍ ଡୋବ୍ରା\"
        ],
        \"SYP\": [
            \"SYP\",
            \"ସିରିୟ ପାଉଣ୍ଡ୍\"
        ],
        \"SZL\": [
            \"SZL\",
            \"ସ୍ଵାଜି ଲିଲାଞ୍ଜେନି\"
        ],
        \"THB\": [
            \"THB\",
            \"ଥାଇ ଭାଟ୍\"
        ],
        \"TJS\": [
            \"TJS\",
            \"ତାଜିକିସ୍ତାନୀ ସୋମୋନି\"
        ],
        \"TMT\": [
            \"TMT\",
            \"ତୁର୍କମେନିସ୍ତାନୀ ମନତ୍‌\"
        ],
        \"TND\": [
            \"TND\",
            \"ଟୁନେସିଆଇ ଦିନାର୍\"
        ],
        \"TOP\": [
            \"TOP\",
            \"ତୋଙ୍ଗିୟ ପାଙ୍ଗା\"
        ],
        \"TRY\": [
            \"TRY\",
            \"ତୁର୍କିୟ ଲିରା\"
        ],
        \"TTD\": [
            \"TTD\",
            \"ତ୍ରିନିଦାଦ୍ ଏବଂ ଟୋବାଗୋ ଡଲାର୍\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"ନ୍ୟୁ ତାଇୱାନ୍ ଡଲାର୍\"
        ],
        \"TZS\": [
            \"TZS\",
            \"ତାନଜାନୀୟ ଶିଲିଂ\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ୟୁକ୍ରେନୀୟ ହ୍ରାଇଭନିଆ\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ଉଗାଣ୍ଡିୟ ଶିଲିଂ\"
        ],
        \"USD\": [
            \"\$\",
            \"ଯୁକ୍ତରାଷ୍ଟ୍ର ଡଲାର୍\"
        ],
        \"UYU\": [
            \"UYU\",
            \"ଉରୁଗୁଇୟାନ୍ ପେସୋ\"
        ],
        \"UZS\": [
            \"UZS\",
            \"ଉଜବେକିସ୍ତାନୀ ସୋମ୍\"
        ],
        \"VEF\": [
            \"VEF\",
            \"ଭେନେଜୁଏଲାନ୍ ବୋଲିଭାର୍ (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"ଭେନେଜୁଏଲାନ୍ ବୋଲିଭାର୍\"
        ],
        \"VND\": [
            \"₫\",
            \"ଭୀଏତନାମୀୟ ଡଙ୍ଗ\"
        ],
        \"VUV\": [
            \"VUV\",
            \"ଭାନୁଆଟୁ ଭାଟୁ\"
        ],
        \"WST\": [
            \"WST\",
            \"ସାମୋୟିୟ ତାଲା\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"ମଧ୍ୟ ଆଫ୍ରିକୀ CFA ଫ୍ରାଙ୍କ୍\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"ପୂର୍ବ କାରିବୀୟ ଡଲାର୍\"
        ],
        \"XOF\": [
            \"CFA\",
            \"ପଶ୍ଚିମ ଆଫ୍ରିକିୟ CFA ଫ୍ରାଙ୍କ୍\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP ଫ୍ରାଙ୍କ୍\"
        ],
        \"YER\": [
            \"YER\",
            \"ୟେମେନି ରିଆଲ୍\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"ଦକ୍ଷିଣ ଆଫ୍ରିକିୟ ରାଣ୍ଡ୍\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"ଜାମ୍ବୀୟ କ୍ୱାଚା\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/or.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/or.json");
    }
}
