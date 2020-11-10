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

/* vendor/symfony/intl/Resources/data/currencies/am.json */
class __TwigTemplate_ba784dee4800b3062e7d5d58035d907c7c7158d03e042a5801a17b0969c9718d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/am.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/am.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"የተባበሩት የአረብ ኤምሬትስ ድርሀም\"
        ],
        \"AFN\": [
            \"AFN\",
            \"የአፍጋን አፍጋኒ\"
        ],
        \"ALL\": [
            \"ALL\",
            \"የአልባንያ ሌክ\"
        ],
        \"AMD\": [
            \"AMD\",
            \"የአርመን ድራም\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ኔዘርላንድስ አንቲሊአን ጊልደር\"
        ],
        \"AOA\": [
            \"AOA\",
            \"የአንጎላ ኩዋንዛ\"
        ],
        \"ARS\": [
            \"ARS\",
            \"የአርጀንቲና ፔሶ\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"የአውስትራሊያ ዶላር\"
        ],
        \"AWG\": [
            \"AWG\",
            \"አሩባን ፍሎሪን\"
        ],
        \"AZN\": [
            \"AZN\",
            \"የአዛርባጃን ማናት\"
        ],
        \"BAM\": [
            \"BAM\",
            \"የቦስኒያ ሄርዞጎቪና የሚመነዘር ማርክ\"
        ],
        \"BBD\": [
            \"BBD\",
            \"የባርቤዶስ ዶላር\"
        ],
        \"BDT\": [
            \"BDT\",
            \"የባንግላዲሽ ታካ\"
        ],
        \"BGN\": [
            \"BGN\",
            \"የቡልጋሪያ ሌቭ\"
        ],
        \"BHD\": [
            \"BHD\",
            \"የባኽሬን ዲናር\"
        ],
        \"BIF\": [
            \"BIF\",
            \"የብሩንዲ ፍራንክ\"
        ],
        \"BMD\": [
            \"BMD\",
            \"የቤርሙዳ ዶላር\"
        ],
        \"BND\": [
            \"BND\",
            \"የብሩኔ ዶላር\"
        ],
        \"BOB\": [
            \"BOB\",
            \"የቦሊቪያ ቦሊቪያኖ\"
        ],
        \"BRL\": [
            \"R\$\",
            \"የብራዚል ሪል\"
        ],
        \"BSD\": [
            \"BSD\",
            \"የባሃማስ ዶላር\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ብሁታኒዝ ንጉልትረም\"
        ],
        \"BWP\": [
            \"BWP\",
            \"የቦትስዋና ፑላ\"
        ],
        \"BYN\": [
            \"BYN\",
            \"የቤላሩስያ ሩብል\"
        ],
        \"BYR\": [
            \"BYR\",
            \"የቤላሩስያ ሩብል (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"የቤሊዝ ዶላር\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"የካናዳ ዶላር\"
        ],
        \"CDF\": [
            \"CDF\",
            \"የኮንጐ ፍራንክ ኮንጐሌዝ\"
        ],
        \"CHF\": [
            \"CHF\",
            \"የስዊስ ፍራንክ\"
        ],
        \"CLP\": [
            \"CLP\",
            \"የቺሊ ፔሶ\"
        ],
        \"CNH\": [
            \"የቻይና ዩዋን\",
            \"የቻይና ዩዋን (የውጭ ምንዛሪ)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"የቻይና የን\"
        ],
        \"COP\": [
            \"COP\",
            \"የኮሎምቢያ ፔሶ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"የኮስታሪካ ኮሎን\"
        ],
        \"CUC\": [
            \"CUC\",
            \"የኩባ የሚመነዘር ፔሶ\"
        ],
        \"CUP\": [
            \"CUP\",
            \"የኩባ ፔሶ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"የኬፕ ቫርዲ ኤስኩዶ\"
        ],
        \"CZK\": [
            \"CZK\",
            \"ቼክ ሪፐብሊክ ኮሩና\"
        ],
        \"DJF\": [
            \"DJF\",
            \"የጅቡቲ ፍራንክ\"
        ],
        \"DKK\": [
            \"DKK\",
            \"የዴንማርክ ክሮን\"
        ],
        \"DOP\": [
            \"DOP\",
            \"የዶሚኒክ ፔሶ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"የአልጄሪያ ዲናር\"
        ],
        \"EGP\": [
            \"EGP\",
            \"የግብጽ ፓውንድ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"የኤርትራ ናቅፋ\"
        ],
        \"ETB\": [
            \"ብር\",
            \"የኢትዮጵያ ብር\"
        ],
        \"EUR\": [
            \"€\",
            \"ዩሮ\"
        ],
        \"FJD\": [
            \"FJD\",
            \"የፊጂ ዶላር\"
        ],
        \"FKP\": [
            \"FKP\",
            \"የፎክላንድ ደሴቶች ፓውንድ\"
        ],
        \"GBP\": [
            \"£\",
            \"የእንግሊዝ ፓውንድ ስተርሊንግ\"
        ],
        \"GEL\": [
            \"GEL\",
            \"የጆርጅያ ላሪ\"
        ],
        \"GHC\": [
            \"GHC\",
            \"የጋና ሴዲ\"
        ],
        \"GHS\": [
            \"GHS\",
            \"የጋና ሲዲ\"
        ],
        \"GIP\": [
            \"GIP\",
            \"ጂብራልተር ፓውንድ\"
        ],
        \"GMD\": [
            \"GMD\",
            \"የጋምቢያ ዳላሲ\"
        ],
        \"GNF\": [
            \"GNF\",
            \"የጊኒ ፍራንክ\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ጓቲማላን ኩቲዛል\"
        ],
        \"GYD\": [
            \"GYD\",
            \"የጉየና ዶላር\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"የሆንግኮንግ ዶላር\"
        ],
        \"HNL\": [
            \"HNL\",
            \"የሃንዱራ ሌምፓአይራ\"
        ],
        \"HRK\": [
            \"HRK\",
            \"HRK\"
        ],
        \"HTG\": [
            \"HTG\",
            \"የሃያቲ ጓርዴ\"
        ],
        \"HUF\": [
            \"HUF\",
            \"የሃንጋሪያን ፎሪንት\"
        ],
        \"IDR\": [
            \"IDR\",
            \"የኢንዶኔዥያ ሩፒሃ\"
        ],
        \"ILS\": [
            \"₪\",
            \"የእስራኤል አዲስ ሽቅል\"
        ],
        \"INR\": [
            \"₹\",
            \"የሕንድ ሩፒ\"
        ],
        \"IQD\": [
            \"IQD\",
            \"የኢራቅ ዲናር\"
        ],
        \"IRR\": [
            \"IRR\",
            \"የኢራን ሪአል\"
        ],
        \"ISK\": [
            \"ISK\",
            \"የአይስላንድ ክሮና\"
        ],
        \"JMD\": [
            \"JMD\",
            \"የጃማይካ ዶላር\"
        ],
        \"JOD\": [
            \"JOD\",
            \"የጆርዳን ዲናር\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"የጃፓን የን\"
        ],
        \"KES\": [
            \"KES\",
            \"የኬኒያ ሺሊንግ\"
        ],
        \"KGS\": [
            \"KGS\",
            \"የኪርጊስታን ሶም\"
        ],
        \"KHR\": [
            \"KHR\",
            \"የካምቦዲያ ሬል\"
        ],
        \"KMF\": [
            \"KMF\",
            \"የኮሞሮ ፍራንክ\"
        ],
        \"KPW\": [
            \"KPW\",
            \"የሰሜን ኮሪያ ዎን\"
        ],
        \"KRW\": [
            \"₩\",
            \"የደቡብ ኮሪያ ዎን\"
        ],
        \"KWD\": [
            \"KWD\",
            \"የኩዌት ዲናር\"
        ],
        \"KYD\": [
            \"KYD\",
            \"የካይማን ደሴቶች ዶላር\"
        ],
        \"KZT\": [
            \"KZT\",
            \"የካዛኪስታን ተንጌ\"
        ],
        \"LAK\": [
            \"LAK\",
            \"የላኦቲ ኪፕ\"
        ],
        \"LBP\": [
            \"LBP\",
            \"የሊባኖስ ፓውንድ\"
        ],
        \"LKR\": [
            \"LKR\",
            \"የሲሪላንካ ሩፒ\"
        ],
        \"LRD\": [
            \"LRD\",
            \"የላይቤሪያ ዶላር\"
        ],
        \"LSL\": [
            \"LSL\",
            \"የሌሶቶ ሎቲ\"
        ],
        \"LTL\": [
            \"LTL\",
            \"ሊቱዌንያን ሊታስ\"
        ],
        \"LVL\": [
            \"LVL\",
            \"የላቲቫ ላትስ\"
        ],
        \"LYD\": [
            \"LYD\",
            \"የሊቢያ ዲናር\"
        ],
        \"MAD\": [
            \"MAD\",
            \"የሞሮኮ ዲርሀም\"
        ],
        \"MDL\": [
            \"MDL\",
            \"ሞልዶቫን ሊኡ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"የማደጋስካር ማላጋስይ አሪያርይ\"
        ],
        \"MKD\": [
            \"MKD\",
            \"የሜቆድንያ ዲናር\"
        ],
        \"MMK\": [
            \"MMK\",
            \"የማያናማር ክያት\"
        ],
        \"MNT\": [
            \"MNT\",
            \"የሞንጎሊያን ቱግሪክ\"
        ],
        \"MOP\": [
            \"MOP\",
            \"የማካኔዝ ፓታካ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"የሞሪቴኒያ ኦውጉያ (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"የሞሪቴኒያ ኦውጉያ\"
        ],
        \"MUR\": [
            \"MUR\",
            \"የሞሪሸስ ሩፒ\"
        ],
        \"MVR\": [
            \"MVR\",
            \"የማልዲቫ ሩፊያ\"
        ],
        \"MWK\": [
            \"MWK\",
            \"የማላዊ ኩዋቻ\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"የሜክሲኮ ፔሶ\"
        ],
        \"MYR\": [
            \"MYR\",
            \"የማሌዥያ ሪንጊት\"
        ],
        \"MZN\": [
            \"MZN\",
            \"የሞዛምቢክ ሜቲካል\"
        ],
        \"NAD\": [
            \"NAD\",
            \"የናሚቢያ ዶላር\"
        ],
        \"NGN\": [
            \"NGN\",
            \"የናይጄሪያ ናይራ\"
        ],
        \"NIO\": [
            \"NIO\",
            \"የኒካራጓ ኮርዶባ\"
        ],
        \"NOK\": [
            \"NOK\",
            \"የኖርዌይ ክሮን\"
        ],
        \"NPR\": [
            \"NPR\",
            \"የኔፓል ሩፒ\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"የኒውዚላንድ ዶላር\"
        ],
        \"OMR\": [
            \"OMR\",
            \"የኦማን ሪአል\"
        ],
        \"PAB\": [
            \"PAB\",
            \"ፓናማኒአን ባልቦአ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"የፔሩቪያ ሶል\"
        ],
        \"PGK\": [
            \"PGK\",
            \"የፓፕዋ ኒው ጊኒ ኪና\"
        ],
        \"PHP\": [
            \"PHP\",
            \"የፊሊፒንስ ፔሶ\"
        ],
        \"PKR\": [
            \"PKR\",
            \"የፓኪስታን ሩፒ\"
        ],
        \"PLN\": [
            \"PLN\",
            \"የፖላንድ ዝሎቲ\"
        ],
        \"PYG\": [
            \"PYG\",
            \"የፓራጓይ ጉአራኒ\"
        ],
        \"QAR\": [
            \"QAR\",
            \"የኳታር ሪአል\"
        ],
        \"RON\": [
            \"RON\",
            \"የሮማኒያ ለው\"
        ],
        \"RSD\": [
            \"RSD\",
            \"የሰርቢያ ዲናር\"
        ],
        \"RUB\": [
            \"RUB\",
            \"የሩስያ ሩብል\"
        ],
        \"RWF\": [
            \"RWF\",
            \"የሩዋንዳ ፍራንክ\"
        ],
        \"SAR\": [
            \"SAR\",
            \"የሳውዲ ሪያል\"
        ],
        \"SBD\": [
            \"SBD\",
            \"የሰለሞን ደሴቶች ዶላር\"
        ],
        \"SCR\": [
            \"SCR\",
            \"የሲሼል ሩፒ\"
        ],
        \"SDG\": [
            \"SDG\",
            \"የሱዳን ፓውንድ\"
        ],
        \"SDP\": [
            \"SDP\",
            \"የሱዳን ፓውንድ (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"የስዊድን ክሮና\"
        ],
        \"SGD\": [
            \"SGD\",
            \"የሲንጋፖር ዶላር\"
        ],
        \"SHP\": [
            \"SHP\",
            \"የሴይንት ሔሌና ፓውንድ\"
        ],
        \"SLL\": [
            \"SLL\",
            \"የሴራሊዎን ሊዎን\"
        ],
        \"SOS\": [
            \"SOS\",
            \"የሶማሌ ሺሊንግ\"
        ],
        \"SRD\": [
            \"SRD\",
            \"የሰርናሜዝ ዶላር\"
        ],
        \"SSP\": [
            \"SSP\",
            \"የደቡብ ሱዳን ፓውንድ\"
        ],
        \"STD\": [
            \"STD\",
            \"የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ\"
        ],
        \"SYP\": [
            \"SYP\",
            \"የሲሪያ ፓውንድ\"
        ],
        \"SZL\": [
            \"SZL\",
            \"የስዋዚላንድ ሊላንገኒ\"
        ],
        \"THB\": [
            \"฿\",
            \"የታይላንድ ባህት\"
        ],
        \"TJS\": [
            \"TJS\",
            \"የታጂክስታን ሶሞኒ\"
        ],
        \"TMT\": [
            \"TMT\",
            \"ቱርክሜኒስታኒ ማናት\"
        ],
        \"TND\": [
            \"TND\",
            \"የቱኒዚያ ዲናር\"
        ],
        \"TOP\": [
            \"TOP\",
            \"ቶንጋን ፓ’አንጋ\"
        ],
        \"TRY\": [
            \"TRY\",
            \"የቱርክ ሊራ\"
        ],
        \"TTD\": [
            \"TTD\",
            \"የትሪንዳድ እና ቶቤጎዶላር\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"የአዲሷ ታይዋን ዶላር\"
        ],
        \"TZS\": [
            \"TZS\",
            \"የታንዛኒያ ሺሊንግ\"
        ],
        \"UAH\": [
            \"UAH\",
            \"የዩክሬን ሀሪይቭኒአ\"
        ],
        \"UGX\": [
            \"UGX\",
            \"የዩጋንዳ ሺሊንግ\"
        ],
        \"USD\": [
            \"US\$\",
            \"የአሜሪካን ዶላር\"
        ],
        \"UYU\": [
            \"UYU\",
            \"የኡራጓይ ፔሶ\"
        ],
        \"UZS\": [
            \"UZS\",
            \"የኡዝፔኪስታን ሶም\"
        ],
        \"VEF\": [
            \"VEF\",
            \"የቬንዝዌላ ቦሊቫር (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"የቬንዝዌላ-ቦሊቫር\"
        ],
        \"VND\": [
            \"₫\",
            \"የቭየትናም ዶንግ\"
        ],
        \"VUV\": [
            \"VUV\",
            \"የቫንዋንቱ ቫቱ\"
        ],
        \"WST\": [
            \"WST\",
            \"ሳሞአን ታላ\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"የመካከለኛው አፍሪካ ሴፋ ፍራንክ\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"የምዕራብ ካሪብያን ዶላር\"
        ],
        \"XOF\": [
            \"CFA\",
            \"የምዕራብ አፍሪካ ሴፋ ፍራንክ\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"ሲ ኤፍ ፒ ፍራንክ\"
        ],
        \"YER\": [
            \"YER\",
            \"የየመን ሪአል\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"የደቡብ አፍሪካ ራንድ\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"የዛምቢያ ክዋቻ (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"የዛምቢያ ክዋቻ\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"የዚምቧቡዌ ዶላር\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/am.json";
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
            \"የተባበሩት የአረብ ኤምሬትስ ድርሀም\"
        ],
        \"AFN\": [
            \"AFN\",
            \"የአፍጋን አፍጋኒ\"
        ],
        \"ALL\": [
            \"ALL\",
            \"የአልባንያ ሌክ\"
        ],
        \"AMD\": [
            \"AMD\",
            \"የአርመን ድራም\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ኔዘርላንድስ አንቲሊአን ጊልደር\"
        ],
        \"AOA\": [
            \"AOA\",
            \"የአንጎላ ኩዋንዛ\"
        ],
        \"ARS\": [
            \"ARS\",
            \"የአርጀንቲና ፔሶ\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"የአውስትራሊያ ዶላር\"
        ],
        \"AWG\": [
            \"AWG\",
            \"አሩባን ፍሎሪን\"
        ],
        \"AZN\": [
            \"AZN\",
            \"የአዛርባጃን ማናት\"
        ],
        \"BAM\": [
            \"BAM\",
            \"የቦስኒያ ሄርዞጎቪና የሚመነዘር ማርክ\"
        ],
        \"BBD\": [
            \"BBD\",
            \"የባርቤዶስ ዶላር\"
        ],
        \"BDT\": [
            \"BDT\",
            \"የባንግላዲሽ ታካ\"
        ],
        \"BGN\": [
            \"BGN\",
            \"የቡልጋሪያ ሌቭ\"
        ],
        \"BHD\": [
            \"BHD\",
            \"የባኽሬን ዲናር\"
        ],
        \"BIF\": [
            \"BIF\",
            \"የብሩንዲ ፍራንክ\"
        ],
        \"BMD\": [
            \"BMD\",
            \"የቤርሙዳ ዶላር\"
        ],
        \"BND\": [
            \"BND\",
            \"የብሩኔ ዶላር\"
        ],
        \"BOB\": [
            \"BOB\",
            \"የቦሊቪያ ቦሊቪያኖ\"
        ],
        \"BRL\": [
            \"R\$\",
            \"የብራዚል ሪል\"
        ],
        \"BSD\": [
            \"BSD\",
            \"የባሃማስ ዶላር\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ብሁታኒዝ ንጉልትረም\"
        ],
        \"BWP\": [
            \"BWP\",
            \"የቦትስዋና ፑላ\"
        ],
        \"BYN\": [
            \"BYN\",
            \"የቤላሩስያ ሩብል\"
        ],
        \"BYR\": [
            \"BYR\",
            \"የቤላሩስያ ሩብል (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"የቤሊዝ ዶላር\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"የካናዳ ዶላር\"
        ],
        \"CDF\": [
            \"CDF\",
            \"የኮንጐ ፍራንክ ኮንጐሌዝ\"
        ],
        \"CHF\": [
            \"CHF\",
            \"የስዊስ ፍራንክ\"
        ],
        \"CLP\": [
            \"CLP\",
            \"የቺሊ ፔሶ\"
        ],
        \"CNH\": [
            \"የቻይና ዩዋን\",
            \"የቻይና ዩዋን (የውጭ ምንዛሪ)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"የቻይና የን\"
        ],
        \"COP\": [
            \"COP\",
            \"የኮሎምቢያ ፔሶ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"የኮስታሪካ ኮሎን\"
        ],
        \"CUC\": [
            \"CUC\",
            \"የኩባ የሚመነዘር ፔሶ\"
        ],
        \"CUP\": [
            \"CUP\",
            \"የኩባ ፔሶ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"የኬፕ ቫርዲ ኤስኩዶ\"
        ],
        \"CZK\": [
            \"CZK\",
            \"ቼክ ሪፐብሊክ ኮሩና\"
        ],
        \"DJF\": [
            \"DJF\",
            \"የጅቡቲ ፍራንክ\"
        ],
        \"DKK\": [
            \"DKK\",
            \"የዴንማርክ ክሮን\"
        ],
        \"DOP\": [
            \"DOP\",
            \"የዶሚኒክ ፔሶ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"የአልጄሪያ ዲናር\"
        ],
        \"EGP\": [
            \"EGP\",
            \"የግብጽ ፓውንድ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"የኤርትራ ናቅፋ\"
        ],
        \"ETB\": [
            \"ብር\",
            \"የኢትዮጵያ ብር\"
        ],
        \"EUR\": [
            \"€\",
            \"ዩሮ\"
        ],
        \"FJD\": [
            \"FJD\",
            \"የፊጂ ዶላር\"
        ],
        \"FKP\": [
            \"FKP\",
            \"የፎክላንድ ደሴቶች ፓውንድ\"
        ],
        \"GBP\": [
            \"£\",
            \"የእንግሊዝ ፓውንድ ስተርሊንግ\"
        ],
        \"GEL\": [
            \"GEL\",
            \"የጆርጅያ ላሪ\"
        ],
        \"GHC\": [
            \"GHC\",
            \"የጋና ሴዲ\"
        ],
        \"GHS\": [
            \"GHS\",
            \"የጋና ሲዲ\"
        ],
        \"GIP\": [
            \"GIP\",
            \"ጂብራልተር ፓውንድ\"
        ],
        \"GMD\": [
            \"GMD\",
            \"የጋምቢያ ዳላሲ\"
        ],
        \"GNF\": [
            \"GNF\",
            \"የጊኒ ፍራንክ\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ጓቲማላን ኩቲዛል\"
        ],
        \"GYD\": [
            \"GYD\",
            \"የጉየና ዶላር\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"የሆንግኮንግ ዶላር\"
        ],
        \"HNL\": [
            \"HNL\",
            \"የሃንዱራ ሌምፓአይራ\"
        ],
        \"HRK\": [
            \"HRK\",
            \"HRK\"
        ],
        \"HTG\": [
            \"HTG\",
            \"የሃያቲ ጓርዴ\"
        ],
        \"HUF\": [
            \"HUF\",
            \"የሃንጋሪያን ፎሪንት\"
        ],
        \"IDR\": [
            \"IDR\",
            \"የኢንዶኔዥያ ሩፒሃ\"
        ],
        \"ILS\": [
            \"₪\",
            \"የእስራኤል አዲስ ሽቅል\"
        ],
        \"INR\": [
            \"₹\",
            \"የሕንድ ሩፒ\"
        ],
        \"IQD\": [
            \"IQD\",
            \"የኢራቅ ዲናር\"
        ],
        \"IRR\": [
            \"IRR\",
            \"የኢራን ሪአል\"
        ],
        \"ISK\": [
            \"ISK\",
            \"የአይስላንድ ክሮና\"
        ],
        \"JMD\": [
            \"JMD\",
            \"የጃማይካ ዶላር\"
        ],
        \"JOD\": [
            \"JOD\",
            \"የጆርዳን ዲናር\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"የጃፓን የን\"
        ],
        \"KES\": [
            \"KES\",
            \"የኬኒያ ሺሊንግ\"
        ],
        \"KGS\": [
            \"KGS\",
            \"የኪርጊስታን ሶም\"
        ],
        \"KHR\": [
            \"KHR\",
            \"የካምቦዲያ ሬል\"
        ],
        \"KMF\": [
            \"KMF\",
            \"የኮሞሮ ፍራንክ\"
        ],
        \"KPW\": [
            \"KPW\",
            \"የሰሜን ኮሪያ ዎን\"
        ],
        \"KRW\": [
            \"₩\",
            \"የደቡብ ኮሪያ ዎን\"
        ],
        \"KWD\": [
            \"KWD\",
            \"የኩዌት ዲናር\"
        ],
        \"KYD\": [
            \"KYD\",
            \"የካይማን ደሴቶች ዶላር\"
        ],
        \"KZT\": [
            \"KZT\",
            \"የካዛኪስታን ተንጌ\"
        ],
        \"LAK\": [
            \"LAK\",
            \"የላኦቲ ኪፕ\"
        ],
        \"LBP\": [
            \"LBP\",
            \"የሊባኖስ ፓውንድ\"
        ],
        \"LKR\": [
            \"LKR\",
            \"የሲሪላንካ ሩፒ\"
        ],
        \"LRD\": [
            \"LRD\",
            \"የላይቤሪያ ዶላር\"
        ],
        \"LSL\": [
            \"LSL\",
            \"የሌሶቶ ሎቲ\"
        ],
        \"LTL\": [
            \"LTL\",
            \"ሊቱዌንያን ሊታስ\"
        ],
        \"LVL\": [
            \"LVL\",
            \"የላቲቫ ላትስ\"
        ],
        \"LYD\": [
            \"LYD\",
            \"የሊቢያ ዲናር\"
        ],
        \"MAD\": [
            \"MAD\",
            \"የሞሮኮ ዲርሀም\"
        ],
        \"MDL\": [
            \"MDL\",
            \"ሞልዶቫን ሊኡ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"የማደጋስካር ማላጋስይ አሪያርይ\"
        ],
        \"MKD\": [
            \"MKD\",
            \"የሜቆድንያ ዲናር\"
        ],
        \"MMK\": [
            \"MMK\",
            \"የማያናማር ክያት\"
        ],
        \"MNT\": [
            \"MNT\",
            \"የሞንጎሊያን ቱግሪክ\"
        ],
        \"MOP\": [
            \"MOP\",
            \"የማካኔዝ ፓታካ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"የሞሪቴኒያ ኦውጉያ (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"የሞሪቴኒያ ኦውጉያ\"
        ],
        \"MUR\": [
            \"MUR\",
            \"የሞሪሸስ ሩፒ\"
        ],
        \"MVR\": [
            \"MVR\",
            \"የማልዲቫ ሩፊያ\"
        ],
        \"MWK\": [
            \"MWK\",
            \"የማላዊ ኩዋቻ\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"የሜክሲኮ ፔሶ\"
        ],
        \"MYR\": [
            \"MYR\",
            \"የማሌዥያ ሪንጊት\"
        ],
        \"MZN\": [
            \"MZN\",
            \"የሞዛምቢክ ሜቲካል\"
        ],
        \"NAD\": [
            \"NAD\",
            \"የናሚቢያ ዶላር\"
        ],
        \"NGN\": [
            \"NGN\",
            \"የናይጄሪያ ናይራ\"
        ],
        \"NIO\": [
            \"NIO\",
            \"የኒካራጓ ኮርዶባ\"
        ],
        \"NOK\": [
            \"NOK\",
            \"የኖርዌይ ክሮን\"
        ],
        \"NPR\": [
            \"NPR\",
            \"የኔፓል ሩፒ\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"የኒውዚላንድ ዶላር\"
        ],
        \"OMR\": [
            \"OMR\",
            \"የኦማን ሪአል\"
        ],
        \"PAB\": [
            \"PAB\",
            \"ፓናማኒአን ባልቦአ\"
        ],
        \"PEN\": [
            \"PEN\",
            \"የፔሩቪያ ሶል\"
        ],
        \"PGK\": [
            \"PGK\",
            \"የፓፕዋ ኒው ጊኒ ኪና\"
        ],
        \"PHP\": [
            \"PHP\",
            \"የፊሊፒንስ ፔሶ\"
        ],
        \"PKR\": [
            \"PKR\",
            \"የፓኪስታን ሩፒ\"
        ],
        \"PLN\": [
            \"PLN\",
            \"የፖላንድ ዝሎቲ\"
        ],
        \"PYG\": [
            \"PYG\",
            \"የፓራጓይ ጉአራኒ\"
        ],
        \"QAR\": [
            \"QAR\",
            \"የኳታር ሪአል\"
        ],
        \"RON\": [
            \"RON\",
            \"የሮማኒያ ለው\"
        ],
        \"RSD\": [
            \"RSD\",
            \"የሰርቢያ ዲናር\"
        ],
        \"RUB\": [
            \"RUB\",
            \"የሩስያ ሩብል\"
        ],
        \"RWF\": [
            \"RWF\",
            \"የሩዋንዳ ፍራንክ\"
        ],
        \"SAR\": [
            \"SAR\",
            \"የሳውዲ ሪያል\"
        ],
        \"SBD\": [
            \"SBD\",
            \"የሰለሞን ደሴቶች ዶላር\"
        ],
        \"SCR\": [
            \"SCR\",
            \"የሲሼል ሩፒ\"
        ],
        \"SDG\": [
            \"SDG\",
            \"የሱዳን ፓውንድ\"
        ],
        \"SDP\": [
            \"SDP\",
            \"የሱዳን ፓውንድ (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"የስዊድን ክሮና\"
        ],
        \"SGD\": [
            \"SGD\",
            \"የሲንጋፖር ዶላር\"
        ],
        \"SHP\": [
            \"SHP\",
            \"የሴይንት ሔሌና ፓውንድ\"
        ],
        \"SLL\": [
            \"SLL\",
            \"የሴራሊዎን ሊዎን\"
        ],
        \"SOS\": [
            \"SOS\",
            \"የሶማሌ ሺሊንግ\"
        ],
        \"SRD\": [
            \"SRD\",
            \"የሰርናሜዝ ዶላር\"
        ],
        \"SSP\": [
            \"SSP\",
            \"የደቡብ ሱዳን ፓውንድ\"
        ],
        \"STD\": [
            \"STD\",
            \"የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ\"
        ],
        \"SYP\": [
            \"SYP\",
            \"የሲሪያ ፓውንድ\"
        ],
        \"SZL\": [
            \"SZL\",
            \"የስዋዚላንድ ሊላንገኒ\"
        ],
        \"THB\": [
            \"฿\",
            \"የታይላንድ ባህት\"
        ],
        \"TJS\": [
            \"TJS\",
            \"የታጂክስታን ሶሞኒ\"
        ],
        \"TMT\": [
            \"TMT\",
            \"ቱርክሜኒስታኒ ማናት\"
        ],
        \"TND\": [
            \"TND\",
            \"የቱኒዚያ ዲናር\"
        ],
        \"TOP\": [
            \"TOP\",
            \"ቶንጋን ፓ’አንጋ\"
        ],
        \"TRY\": [
            \"TRY\",
            \"የቱርክ ሊራ\"
        ],
        \"TTD\": [
            \"TTD\",
            \"የትሪንዳድ እና ቶቤጎዶላር\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"የአዲሷ ታይዋን ዶላር\"
        ],
        \"TZS\": [
            \"TZS\",
            \"የታንዛኒያ ሺሊንግ\"
        ],
        \"UAH\": [
            \"UAH\",
            \"የዩክሬን ሀሪይቭኒአ\"
        ],
        \"UGX\": [
            \"UGX\",
            \"የዩጋንዳ ሺሊንግ\"
        ],
        \"USD\": [
            \"US\$\",
            \"የአሜሪካን ዶላር\"
        ],
        \"UYU\": [
            \"UYU\",
            \"የኡራጓይ ፔሶ\"
        ],
        \"UZS\": [
            \"UZS\",
            \"የኡዝፔኪስታን ሶም\"
        ],
        \"VEF\": [
            \"VEF\",
            \"የቬንዝዌላ ቦሊቫር (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"የቬንዝዌላ-ቦሊቫር\"
        ],
        \"VND\": [
            \"₫\",
            \"የቭየትናም ዶንግ\"
        ],
        \"VUV\": [
            \"VUV\",
            \"የቫንዋንቱ ቫቱ\"
        ],
        \"WST\": [
            \"WST\",
            \"ሳሞአን ታላ\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"የመካከለኛው አፍሪካ ሴፋ ፍራንክ\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"የምዕራብ ካሪብያን ዶላር\"
        ],
        \"XOF\": [
            \"CFA\",
            \"የምዕራብ አፍሪካ ሴፋ ፍራንክ\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"ሲ ኤፍ ፒ ፍራንክ\"
        ],
        \"YER\": [
            \"YER\",
            \"የየመን ሪአል\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"የደቡብ አፍሪካ ራንድ\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"የዛምቢያ ክዋቻ (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"የዛምቢያ ክዋቻ\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"የዚምቧቡዌ ዶላር\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/am.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/am.json");
    }
}
