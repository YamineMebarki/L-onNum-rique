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

/* vendor/symfony/intl/Resources/data/currencies/mr.json */
class __TwigTemplate_8be9dc94b7e9b78196f2655febffc9d8c79771cbbecaa0fe13aad642e16c27e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mr.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mr.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"संयुक्त अरब अमीरात दिरहॅम\"
        ],
        \"AFN\": [
            \"AFN\",
            \"अफगाण अफगाणी\"
        ],
        \"ALL\": [
            \"ALL\",
            \"अल्बानियन लेक\"
        ],
        \"AMD\": [
            \"AMD\",
            \"आर्मेनियन द्रॅम\"
        ],
        \"ANG\": [
            \"ANG\",
            \"नेदरलँडचा अँटिलीन गिल्डर\"
        ],
        \"AOA\": [
            \"AOA\",
            \"अँगोलन क्वॅन्झा\"
        ],
        \"ARS\": [
            \"ARS\",
            \"अर्जेंटाइन पेसो\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ऑस्ट्रेलियन डॉलर\"
        ],
        \"AWG\": [
            \"AWG\",
            \"अरुबा फ्लोरिन\"
        ],
        \"AZN\": [
            \"AZN\",
            \"अझरबैझानी मानाट\"
        ],
        \"BAM\": [
            \"BAM\",
            \"बोस्निया-हर्जेगोविना विनिमय मार्क\"
        ],
        \"BBD\": [
            \"BBD\",
            \"बार्बाडियन डॉलर\"
        ],
        \"BDT\": [
            \"BDT\",
            \"बांगलादेशी टका\"
        ],
        \"BGN\": [
            \"BGN\",
            \"बल्गेरियन लेव\"
        ],
        \"BHD\": [
            \"BHD\",
            \"बाहरिनी दिनार\"
        ],
        \"BIF\": [
            \"BIF\",
            \"बुरुंडियन फ्रँक\"
        ],
        \"BMD\": [
            \"BMD\",
            \"बर्मुडा डॉलर\"
        ],
        \"BND\": [
            \"BND\",
            \"ब्रुनेई डॉलर\"
        ],
        \"BOB\": [
            \"BOB\",
            \"बोलिव्हियन बोलिव्हियानो\"
        ],
        \"BRL\": [
            \"R\$\",
            \"ब्राझिलियन रियाल\"
        ],
        \"BSD\": [
            \"BSD\",
            \"बहामी डॉलर\"
        ],
        \"BTN\": [
            \"BTN\",
            \"भूतानी एंगल्ट्रम\"
        ],
        \"BWP\": [
            \"BWP\",
            \"बोट्सवानन पुला\"
        ],
        \"BYN\": [
            \"BYN\",
            \"बेलारुशियन रुबल\"
        ],
        \"BYR\": [
            \"BYR\",
            \"बेलारुशियन रुबल (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"बेलीझ डॉलर\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"कॅनडियन डॉलर\"
        ],
        \"CDF\": [
            \"CDF\",
            \"काँगोलीज फ्रँक\"
        ],
        \"CHF\": [
            \"CHF\",
            \"स्विस फ्रँक\"
        ],
        \"CLP\": [
            \"CLP\",
            \"चिली पेसो\"
        ],
        \"CNH\": [
            \"CNH\",
            \"चिनी युआन (ऑफशोर)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"चीनी युआन\"
        ],
        \"COP\": [
            \"COP\",
            \"कोलंबियन पेसो\"
        ],
        \"CRC\": [
            \"CRC\",
            \"कोस्टा रिका कोलोन\"
        ],
        \"CUC\": [
            \"CUC\",
            \"क्यूबन विनिमय पेसो\"
        ],
        \"CUP\": [
            \"CUP\",
            \"क्यूबन पेसो\"
        ],
        \"CVE\": [
            \"CVE\",
            \"केप व्हर्डेयन एस्कुडो\"
        ],
        \"CZK\": [
            \"CZK\",
            \"झेक प्रजासत्ताक कोरुना\"
        ],
        \"DJF\": [
            \"DJF\",
            \"जिबौटियन फ्रँक\"
        ],
        \"DKK\": [
            \"DKK\",
            \"डॅनिश क्रोन\"
        ],
        \"DOP\": [
            \"DOP\",
            \"डोमिनिकन पेसो\"
        ],
        \"DZD\": [
            \"DZD\",
            \"अल्जेरियन दिनार\"
        ],
        \"EGP\": [
            \"EGP\",
            \"इजिप्शियन पाउंड\"
        ],
        \"ERN\": [
            \"ERN\",
            \"इरिट्रियन नाक्फा\"
        ],
        \"ETB\": [
            \"ETB\",
            \"इथिओपियन बिर\"
        ],
        \"EUR\": [
            \"€\",
            \"युरो\"
        ],
        \"FJD\": [
            \"FJD\",
            \"फिजियन डॉलर\"
        ],
        \"FKP\": [
            \"FKP\",
            \"फॉकलंड आयलंड पाउंड\"
        ],
        \"GBP\": [
            \"£\",
            \"ब्रिटिश पाऊंड\"
        ],
        \"GEL\": [
            \"GEL\",
            \"जॉर्जियन लारी\"
        ],
        \"GHS\": [
            \"GHS\",
            \"घानीयन सेडी\"
        ],
        \"GIP\": [
            \"GIP\",
            \"जिब्राल्टर पाउंड\"
        ],
        \"GMD\": [
            \"GMD\",
            \"गाम्बियन डालासी\"
        ],
        \"GNF\": [
            \"GNF\",
            \"गिनी फ्रँक\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ग्वाटेमालाचे क्वेत्झाल\"
        ],
        \"GYD\": [
            \"GYD\",
            \"गयाना डॉलर\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"हाँगकाँग डॉलर\"
        ],
        \"HNL\": [
            \"HNL\",
            \"होन्डुरन लेंपिरा\"
        ],
        \"HRK\": [
            \"HRK\",
            \"क्रोएशियन कूना\"
        ],
        \"HTG\": [
            \"HTG\",
            \"हैती गोअर्ड\"
        ],
        \"HUF\": [
            \"HUF\",
            \"हंगेरियन फॉरिन्ट\"
        ],
        \"IDR\": [
            \"IDR\",
            \"इंडोनेशियन रुपिया\"
        ],
        \"ILS\": [
            \"₪\",
            \"ईस्त्रायली न्यू शेकेल\"
        ],
        \"INR\": [
            \"₹\",
            \"भारतीय रुपया\"
        ],
        \"IQD\": [
            \"IQD\",
            \"इराकी दिनार\"
        ],
        \"IRR\": [
            \"IRR\",
            \"इराणी रियाल\"
        ],
        \"ISK\": [
            \"ISK\",
            \"आइसलँडिक क्रोना\"
        ],
        \"JMD\": [
            \"JMD\",
            \"जमैकन डॉलर\"
        ],
        \"JOD\": [
            \"JOD\",
            \"जॉर्डनियन दिनार\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"जपानी येन\"
        ],
        \"KES\": [
            \"KES\",
            \"केनियन शिलिंग\"
        ],
        \"KGS\": [
            \"KGS\",
            \"किरगिस्तानी सॉम\"
        ],
        \"KHR\": [
            \"KHR\",
            \"कंबोडियन रियेल\"
        ],
        \"KMF\": [
            \"KMF\",
            \"कोमोरियन फ्रँक\"
        ],
        \"KPW\": [
            \"KPW\",
            \"उत्तर कोरियन वॉन\"
        ],
        \"KRW\": [
            \"₩\",
            \"दक्षिण कोरियन वॉन\"
        ],
        \"KWD\": [
            \"KWD\",
            \"कुवैती दिनार\"
        ],
        \"KYD\": [
            \"KYD\",
            \"केमेन आयलॅंड डॉलर\"
        ],
        \"KZT\": [
            \"KZT\",
            \"कझाकिस्तानी तेंगे\"
        ],
        \"LAK\": [
            \"LAK\",
            \"लाओशियन किप\"
        ],
        \"LBP\": [
            \"LBP\",
            \"लेबनीज पाउंड\"
        ],
        \"LKR\": [
            \"LKR\",
            \"श्रीलंकन रुपया\"
        ],
        \"LRD\": [
            \"LRD\",
            \"लाइबेरियन डॉलर\"
        ],
        \"LSL\": [
            \"LSL\",
            \"लेसोटो लोटी\"
        ],
        \"LTL\": [
            \"LTL\",
            \"लिथुआनियन लिटास\"
        ],
        \"LVL\": [
            \"LVL\",
            \"लाट्व्हियन लाट्झ\"
        ],
        \"LYD\": [
            \"LYD\",
            \"लिबियाचा दिनार\"
        ],
        \"MAD\": [
            \"MAD\",
            \"मोरोक्को दिरहॅम\"
        ],
        \"MDL\": [
            \"MDL\",
            \"मोल्डोवन लेउ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"मालागासी एरियारी\"
        ],
        \"MKD\": [
            \"MKD\",
            \"मॅसेडोनियन देनार\"
        ],
        \"MMK\": [
            \"MMK\",
            \"म्यानमार क्याट\"
        ],
        \"MNT\": [
            \"MNT\",
            \"मंगोलियन टुग्रिक\"
        ],
        \"MOP\": [
            \"MOP\",
            \"मॅकॅनीज् पटाका\"
        ],
        \"MRO\": [
            \"MRO\",
            \"मॉरिटानियन ओगिया (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"मॉरिटानियन ओगिया\"
        ],
        \"MUR\": [
            \"MUR\",
            \"मॉरिशियन रुपी\"
        ],
        \"MVR\": [
            \"MVR\",
            \"मालदीवियन रुफिया\"
        ],
        \"MWK\": [
            \"MWK\",
            \"मालावियन क्वाचा\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"मेक्सिको पेसो\"
        ],
        \"MYR\": [
            \"MYR\",
            \"मलेशियन रिंगिट\"
        ],
        \"MZN\": [
            \"MZN\",
            \"मोझांबिकन मेटिकल\"
        ],
        \"NAD\": [
            \"NAD\",
            \"नमिबियन डॉलर\"
        ],
        \"NGN\": [
            \"NGN\",
            \"नायजेरियन नायरा\"
        ],
        \"NIO\": [
            \"NIO\",
            \"निकाराग्वेचा कोर्डोबा\"
        ],
        \"NOK\": [
            \"NOK\",
            \"नॉर्वेजियन क्रोन\"
        ],
        \"NPR\": [
            \"NPR\",
            \"नेपाळी रुपया\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"न्यूझीलँड डॉलर\"
        ],
        \"OMR\": [
            \"OMR\",
            \"ओमानी रियाल\"
        ],
        \"PAB\": [
            \"PAB\",
            \"पनामा बाल्बोआ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"पेरुवियन सोल\"
        ],
        \"PGK\": [
            \"PGK\",
            \"पापुआ न्यू गिनीयन किना\"
        ],
        \"PHP\": [
            \"PHP\",
            \"फिलिपिनी पेसो\"
        ],
        \"PKR\": [
            \"PKR\",
            \"पाकिस्तानी रुपया\"
        ],
        \"PLN\": [
            \"PLN\",
            \"पोलिश झ्लॉटी\"
        ],
        \"PYG\": [
            \"PYG\",
            \"पराग्वे ग्वारानी\"
        ],
        \"QAR\": [
            \"QAR\",
            \"कतारी रियाल\"
        ],
        \"RON\": [
            \"RON\",
            \"रोमानियन लेऊ\"
        ],
        \"RSD\": [
            \"RSD\",
            \"सर्बियन दिनार\"
        ],
        \"RUB\": [
            \"RUB\",
            \"रशियन रुबल\"
        ],
        \"RWF\": [
            \"RWF\",
            \"रवांडा फ्रँक\"
        ],
        \"SAR\": [
            \"SAR\",
            \"सौदी रियाल\"
        ],
        \"SBD\": [
            \"SBD\",
            \"सोलोमन आयलँड्स डॉलर\"
        ],
        \"SCR\": [
            \"SCR\",
            \"सेशेलोईस रुपी\"
        ],
        \"SDG\": [
            \"SDG\",
            \"सुदानी पाउंड\"
        ],
        \"SEK\": [
            \"SEK\",
            \"स्वीडिश क्रोना\"
        ],
        \"SGD\": [
            \"SGD\",
            \"सिंगापूर डॉलर\"
        ],
        \"SHP\": [
            \"SHP\",
            \"सेंट हेलेना पाउंड\"
        ],
        \"SLL\": [
            \"SLL\",
            \"सिएरा लिऑनचा लिऑन\"
        ],
        \"SOS\": [
            \"SOS\",
            \"सोमाली शिलिंग\"
        ],
        \"SRD\": [
            \"SRD\",
            \"सुरिनामी डॉलर\"
        ],
        \"SSP\": [
            \"SSP\",
            \"दक्षिण सुदानी पाउंड\"
        ],
        \"STD\": [
            \"STD\",
            \"साओ टोम आणि प्रिन्सिपे डोबरा (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"साओ टोम आणि प्रिन्सिपे डोबरा\"
        ],
        \"SYP\": [
            \"SYP\",
            \"सीरियन पाउंड\"
        ],
        \"SZL\": [
            \"SZL\",
            \"स्वाझी लीलांगेनी\"
        ],
        \"THB\": [
            \"฿\",
            \"थाई बाहत\"
        ],
        \"TJS\": [
            \"TJS\",
            \"ताजकीस्तानी सोमोनी\"
        ],
        \"TMT\": [
            \"TMT\",
            \"तुर्कमेनिस्तानी मानाट\"
        ],
        \"TND\": [
            \"TND\",
            \"ट्यूनिशियन दिनार\"
        ],
        \"TOP\": [
            \"TOP\",
            \"टोंगन पाआंगा\"
        ],
        \"TRY\": [
            \"TRY\",
            \"तुर्की लिरा\"
        ],
        \"TTD\": [
            \"TTD\",
            \"त्रिनिदाद आणि टोबॅगो डॉलर\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"न्यू तैवान डॉलर\"
        ],
        \"TZS\": [
            \"TZS\",
            \"टांझानियन शिलिंग\"
        ],
        \"UAH\": [
            \"UAH\",
            \"युक्रेनियन रिवनिया\"
        ],
        \"UGX\": [
            \"UGX\",
            \"युगांडा शिलिंग\"
        ],
        \"USD\": [
            \"\$\",
            \"यूएस डॉलर\"
        ],
        \"UYU\": [
            \"UYU\",
            \"उरुग्वेचा पेसो\"
        ],
        \"UZS\": [
            \"UZS\",
            \"उझबेकिस्तानी सोम\"
        ],
        \"VEF\": [
            \"VEF\",
            \"व्हेनेझुएला बोलिव्हार (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"व्हेनेझुएला बोलिव्हार\"
        ],
        \"VND\": [
            \"₫\",
            \"व्हिएतनामी डोंग\"
        ],
        \"VUV\": [
            \"VUV\",
            \"वानुआतु वाटु\"
        ],
        \"WST\": [
            \"WST\",
            \"सामोअन टाला\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"मध्य आफ्रिकन [CFA] फ्रँक\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"पूर्व कॅरीबियन डॉलर\"
        ],
        \"XOF\": [
            \"CFA\",
            \"पश्चिम आफ्रिकन [CFA] फ्रँक\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"[CFP] फ्रँक\"
        ],
        \"YER\": [
            \"YER\",
            \"येमेनी रियाल\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"दक्षिण आफ्रिकी रँड\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"झांबियन क्वाचा (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"झांबियन क्वाचा\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/mr.json";
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
            \"संयुक्त अरब अमीरात दिरहॅम\"
        ],
        \"AFN\": [
            \"AFN\",
            \"अफगाण अफगाणी\"
        ],
        \"ALL\": [
            \"ALL\",
            \"अल्बानियन लेक\"
        ],
        \"AMD\": [
            \"AMD\",
            \"आर्मेनियन द्रॅम\"
        ],
        \"ANG\": [
            \"ANG\",
            \"नेदरलँडचा अँटिलीन गिल्डर\"
        ],
        \"AOA\": [
            \"AOA\",
            \"अँगोलन क्वॅन्झा\"
        ],
        \"ARS\": [
            \"ARS\",
            \"अर्जेंटाइन पेसो\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ऑस्ट्रेलियन डॉलर\"
        ],
        \"AWG\": [
            \"AWG\",
            \"अरुबा फ्लोरिन\"
        ],
        \"AZN\": [
            \"AZN\",
            \"अझरबैझानी मानाट\"
        ],
        \"BAM\": [
            \"BAM\",
            \"बोस्निया-हर्जेगोविना विनिमय मार्क\"
        ],
        \"BBD\": [
            \"BBD\",
            \"बार्बाडियन डॉलर\"
        ],
        \"BDT\": [
            \"BDT\",
            \"बांगलादेशी टका\"
        ],
        \"BGN\": [
            \"BGN\",
            \"बल्गेरियन लेव\"
        ],
        \"BHD\": [
            \"BHD\",
            \"बाहरिनी दिनार\"
        ],
        \"BIF\": [
            \"BIF\",
            \"बुरुंडियन फ्रँक\"
        ],
        \"BMD\": [
            \"BMD\",
            \"बर्मुडा डॉलर\"
        ],
        \"BND\": [
            \"BND\",
            \"ब्रुनेई डॉलर\"
        ],
        \"BOB\": [
            \"BOB\",
            \"बोलिव्हियन बोलिव्हियानो\"
        ],
        \"BRL\": [
            \"R\$\",
            \"ब्राझिलियन रियाल\"
        ],
        \"BSD\": [
            \"BSD\",
            \"बहामी डॉलर\"
        ],
        \"BTN\": [
            \"BTN\",
            \"भूतानी एंगल्ट्रम\"
        ],
        \"BWP\": [
            \"BWP\",
            \"बोट्सवानन पुला\"
        ],
        \"BYN\": [
            \"BYN\",
            \"बेलारुशियन रुबल\"
        ],
        \"BYR\": [
            \"BYR\",
            \"बेलारुशियन रुबल (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"बेलीझ डॉलर\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"कॅनडियन डॉलर\"
        ],
        \"CDF\": [
            \"CDF\",
            \"काँगोलीज फ्रँक\"
        ],
        \"CHF\": [
            \"CHF\",
            \"स्विस फ्रँक\"
        ],
        \"CLP\": [
            \"CLP\",
            \"चिली पेसो\"
        ],
        \"CNH\": [
            \"CNH\",
            \"चिनी युआन (ऑफशोर)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"चीनी युआन\"
        ],
        \"COP\": [
            \"COP\",
            \"कोलंबियन पेसो\"
        ],
        \"CRC\": [
            \"CRC\",
            \"कोस्टा रिका कोलोन\"
        ],
        \"CUC\": [
            \"CUC\",
            \"क्यूबन विनिमय पेसो\"
        ],
        \"CUP\": [
            \"CUP\",
            \"क्यूबन पेसो\"
        ],
        \"CVE\": [
            \"CVE\",
            \"केप व्हर्डेयन एस्कुडो\"
        ],
        \"CZK\": [
            \"CZK\",
            \"झेक प्रजासत्ताक कोरुना\"
        ],
        \"DJF\": [
            \"DJF\",
            \"जिबौटियन फ्रँक\"
        ],
        \"DKK\": [
            \"DKK\",
            \"डॅनिश क्रोन\"
        ],
        \"DOP\": [
            \"DOP\",
            \"डोमिनिकन पेसो\"
        ],
        \"DZD\": [
            \"DZD\",
            \"अल्जेरियन दिनार\"
        ],
        \"EGP\": [
            \"EGP\",
            \"इजिप्शियन पाउंड\"
        ],
        \"ERN\": [
            \"ERN\",
            \"इरिट्रियन नाक्फा\"
        ],
        \"ETB\": [
            \"ETB\",
            \"इथिओपियन बिर\"
        ],
        \"EUR\": [
            \"€\",
            \"युरो\"
        ],
        \"FJD\": [
            \"FJD\",
            \"फिजियन डॉलर\"
        ],
        \"FKP\": [
            \"FKP\",
            \"फॉकलंड आयलंड पाउंड\"
        ],
        \"GBP\": [
            \"£\",
            \"ब्रिटिश पाऊंड\"
        ],
        \"GEL\": [
            \"GEL\",
            \"जॉर्जियन लारी\"
        ],
        \"GHS\": [
            \"GHS\",
            \"घानीयन सेडी\"
        ],
        \"GIP\": [
            \"GIP\",
            \"जिब्राल्टर पाउंड\"
        ],
        \"GMD\": [
            \"GMD\",
            \"गाम्बियन डालासी\"
        ],
        \"GNF\": [
            \"GNF\",
            \"गिनी फ्रँक\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ग्वाटेमालाचे क्वेत्झाल\"
        ],
        \"GYD\": [
            \"GYD\",
            \"गयाना डॉलर\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"हाँगकाँग डॉलर\"
        ],
        \"HNL\": [
            \"HNL\",
            \"होन्डुरन लेंपिरा\"
        ],
        \"HRK\": [
            \"HRK\",
            \"क्रोएशियन कूना\"
        ],
        \"HTG\": [
            \"HTG\",
            \"हैती गोअर्ड\"
        ],
        \"HUF\": [
            \"HUF\",
            \"हंगेरियन फॉरिन्ट\"
        ],
        \"IDR\": [
            \"IDR\",
            \"इंडोनेशियन रुपिया\"
        ],
        \"ILS\": [
            \"₪\",
            \"ईस्त्रायली न्यू शेकेल\"
        ],
        \"INR\": [
            \"₹\",
            \"भारतीय रुपया\"
        ],
        \"IQD\": [
            \"IQD\",
            \"इराकी दिनार\"
        ],
        \"IRR\": [
            \"IRR\",
            \"इराणी रियाल\"
        ],
        \"ISK\": [
            \"ISK\",
            \"आइसलँडिक क्रोना\"
        ],
        \"JMD\": [
            \"JMD\",
            \"जमैकन डॉलर\"
        ],
        \"JOD\": [
            \"JOD\",
            \"जॉर्डनियन दिनार\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"जपानी येन\"
        ],
        \"KES\": [
            \"KES\",
            \"केनियन शिलिंग\"
        ],
        \"KGS\": [
            \"KGS\",
            \"किरगिस्तानी सॉम\"
        ],
        \"KHR\": [
            \"KHR\",
            \"कंबोडियन रियेल\"
        ],
        \"KMF\": [
            \"KMF\",
            \"कोमोरियन फ्रँक\"
        ],
        \"KPW\": [
            \"KPW\",
            \"उत्तर कोरियन वॉन\"
        ],
        \"KRW\": [
            \"₩\",
            \"दक्षिण कोरियन वॉन\"
        ],
        \"KWD\": [
            \"KWD\",
            \"कुवैती दिनार\"
        ],
        \"KYD\": [
            \"KYD\",
            \"केमेन आयलॅंड डॉलर\"
        ],
        \"KZT\": [
            \"KZT\",
            \"कझाकिस्तानी तेंगे\"
        ],
        \"LAK\": [
            \"LAK\",
            \"लाओशियन किप\"
        ],
        \"LBP\": [
            \"LBP\",
            \"लेबनीज पाउंड\"
        ],
        \"LKR\": [
            \"LKR\",
            \"श्रीलंकन रुपया\"
        ],
        \"LRD\": [
            \"LRD\",
            \"लाइबेरियन डॉलर\"
        ],
        \"LSL\": [
            \"LSL\",
            \"लेसोटो लोटी\"
        ],
        \"LTL\": [
            \"LTL\",
            \"लिथुआनियन लिटास\"
        ],
        \"LVL\": [
            \"LVL\",
            \"लाट्व्हियन लाट्झ\"
        ],
        \"LYD\": [
            \"LYD\",
            \"लिबियाचा दिनार\"
        ],
        \"MAD\": [
            \"MAD\",
            \"मोरोक्को दिरहॅम\"
        ],
        \"MDL\": [
            \"MDL\",
            \"मोल्डोवन लेउ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"मालागासी एरियारी\"
        ],
        \"MKD\": [
            \"MKD\",
            \"मॅसेडोनियन देनार\"
        ],
        \"MMK\": [
            \"MMK\",
            \"म्यानमार क्याट\"
        ],
        \"MNT\": [
            \"MNT\",
            \"मंगोलियन टुग्रिक\"
        ],
        \"MOP\": [
            \"MOP\",
            \"मॅकॅनीज् पटाका\"
        ],
        \"MRO\": [
            \"MRO\",
            \"मॉरिटानियन ओगिया (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"मॉरिटानियन ओगिया\"
        ],
        \"MUR\": [
            \"MUR\",
            \"मॉरिशियन रुपी\"
        ],
        \"MVR\": [
            \"MVR\",
            \"मालदीवियन रुफिया\"
        ],
        \"MWK\": [
            \"MWK\",
            \"मालावियन क्वाचा\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"मेक्सिको पेसो\"
        ],
        \"MYR\": [
            \"MYR\",
            \"मलेशियन रिंगिट\"
        ],
        \"MZN\": [
            \"MZN\",
            \"मोझांबिकन मेटिकल\"
        ],
        \"NAD\": [
            \"NAD\",
            \"नमिबियन डॉलर\"
        ],
        \"NGN\": [
            \"NGN\",
            \"नायजेरियन नायरा\"
        ],
        \"NIO\": [
            \"NIO\",
            \"निकाराग्वेचा कोर्डोबा\"
        ],
        \"NOK\": [
            \"NOK\",
            \"नॉर्वेजियन क्रोन\"
        ],
        \"NPR\": [
            \"NPR\",
            \"नेपाळी रुपया\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"न्यूझीलँड डॉलर\"
        ],
        \"OMR\": [
            \"OMR\",
            \"ओमानी रियाल\"
        ],
        \"PAB\": [
            \"PAB\",
            \"पनामा बाल्बोआ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"पेरुवियन सोल\"
        ],
        \"PGK\": [
            \"PGK\",
            \"पापुआ न्यू गिनीयन किना\"
        ],
        \"PHP\": [
            \"PHP\",
            \"फिलिपिनी पेसो\"
        ],
        \"PKR\": [
            \"PKR\",
            \"पाकिस्तानी रुपया\"
        ],
        \"PLN\": [
            \"PLN\",
            \"पोलिश झ्लॉटी\"
        ],
        \"PYG\": [
            \"PYG\",
            \"पराग्वे ग्वारानी\"
        ],
        \"QAR\": [
            \"QAR\",
            \"कतारी रियाल\"
        ],
        \"RON\": [
            \"RON\",
            \"रोमानियन लेऊ\"
        ],
        \"RSD\": [
            \"RSD\",
            \"सर्बियन दिनार\"
        ],
        \"RUB\": [
            \"RUB\",
            \"रशियन रुबल\"
        ],
        \"RWF\": [
            \"RWF\",
            \"रवांडा फ्रँक\"
        ],
        \"SAR\": [
            \"SAR\",
            \"सौदी रियाल\"
        ],
        \"SBD\": [
            \"SBD\",
            \"सोलोमन आयलँड्स डॉलर\"
        ],
        \"SCR\": [
            \"SCR\",
            \"सेशेलोईस रुपी\"
        ],
        \"SDG\": [
            \"SDG\",
            \"सुदानी पाउंड\"
        ],
        \"SEK\": [
            \"SEK\",
            \"स्वीडिश क्रोना\"
        ],
        \"SGD\": [
            \"SGD\",
            \"सिंगापूर डॉलर\"
        ],
        \"SHP\": [
            \"SHP\",
            \"सेंट हेलेना पाउंड\"
        ],
        \"SLL\": [
            \"SLL\",
            \"सिएरा लिऑनचा लिऑन\"
        ],
        \"SOS\": [
            \"SOS\",
            \"सोमाली शिलिंग\"
        ],
        \"SRD\": [
            \"SRD\",
            \"सुरिनामी डॉलर\"
        ],
        \"SSP\": [
            \"SSP\",
            \"दक्षिण सुदानी पाउंड\"
        ],
        \"STD\": [
            \"STD\",
            \"साओ टोम आणि प्रिन्सिपे डोबरा (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"साओ टोम आणि प्रिन्सिपे डोबरा\"
        ],
        \"SYP\": [
            \"SYP\",
            \"सीरियन पाउंड\"
        ],
        \"SZL\": [
            \"SZL\",
            \"स्वाझी लीलांगेनी\"
        ],
        \"THB\": [
            \"฿\",
            \"थाई बाहत\"
        ],
        \"TJS\": [
            \"TJS\",
            \"ताजकीस्तानी सोमोनी\"
        ],
        \"TMT\": [
            \"TMT\",
            \"तुर्कमेनिस्तानी मानाट\"
        ],
        \"TND\": [
            \"TND\",
            \"ट्यूनिशियन दिनार\"
        ],
        \"TOP\": [
            \"TOP\",
            \"टोंगन पाआंगा\"
        ],
        \"TRY\": [
            \"TRY\",
            \"तुर्की लिरा\"
        ],
        \"TTD\": [
            \"TTD\",
            \"त्रिनिदाद आणि टोबॅगो डॉलर\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"न्यू तैवान डॉलर\"
        ],
        \"TZS\": [
            \"TZS\",
            \"टांझानियन शिलिंग\"
        ],
        \"UAH\": [
            \"UAH\",
            \"युक्रेनियन रिवनिया\"
        ],
        \"UGX\": [
            \"UGX\",
            \"युगांडा शिलिंग\"
        ],
        \"USD\": [
            \"\$\",
            \"यूएस डॉलर\"
        ],
        \"UYU\": [
            \"UYU\",
            \"उरुग्वेचा पेसो\"
        ],
        \"UZS\": [
            \"UZS\",
            \"उझबेकिस्तानी सोम\"
        ],
        \"VEF\": [
            \"VEF\",
            \"व्हेनेझुएला बोलिव्हार (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"व्हेनेझुएला बोलिव्हार\"
        ],
        \"VND\": [
            \"₫\",
            \"व्हिएतनामी डोंग\"
        ],
        \"VUV\": [
            \"VUV\",
            \"वानुआतु वाटु\"
        ],
        \"WST\": [
            \"WST\",
            \"सामोअन टाला\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"मध्य आफ्रिकन [CFA] फ्रँक\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"पूर्व कॅरीबियन डॉलर\"
        ],
        \"XOF\": [
            \"CFA\",
            \"पश्चिम आफ्रिकन [CFA] फ्रँक\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"[CFP] फ्रँक\"
        ],
        \"YER\": [
            \"YER\",
            \"येमेनी रियाल\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"दक्षिण आफ्रिकी रँड\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"झांबियन क्वाचा (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"झांबियन क्वाचा\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/mr.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/mr.json");
    }
}
