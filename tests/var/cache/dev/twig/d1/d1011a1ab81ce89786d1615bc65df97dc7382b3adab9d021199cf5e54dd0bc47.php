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

/* vendor/fzaninotto/faker/src/Faker/Generator.php */
class __TwigTemplate_72ec9ab8e1ae99d9e8f69579d31f95ddd3ac5d2918768dc15efbb2c1d54fd402 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Generator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Generator.php"));

        // line 1
        echo "<?php

namespace Faker;

/**
 * @property string \$name
 * @method string name(string \$gender = null)
 * @property string \$firstName
 * @method string firstName(string \$gender = null)
 * @property string \$firstNameMale
 * @property string \$firstNameFemale
 * @property string \$lastName
 * @property string \$title
 * @method string title(string \$gender = null)
 * @property string \$titleMale
 * @property string \$titleFemale
 *
 * @property string \$citySuffix
 * @property string \$streetSuffix
 * @property string \$buildingNumber
 * @property string \$city
 * @property string \$streetName
 * @property string \$streetAddress
 * @property string \$postcode
 * @property string \$address
 * @property string \$country
 * @property float  \$latitude
 * @property float  \$longitude
 *
 * @property string \$ean13
 * @property string \$ean8
 * @property string \$isbn13
 * @property string \$isbn10
 *
 * @property string \$phoneNumber
 *
 * @property string \$company
 * @property string \$companySuffix
 * @property string \$jobTitle
 *
 * @property string \$creditCardType
 * @property string \$creditCardNumber
 * @method string creditCardNumber(\$type = null, \$formatted = false, \$separator = '-')
 * @property \\DateTime \$creditCardExpirationDate
 * @property string \$creditCardExpirationDateString
 * @property array \$creditCardDetails
 * @property string \$bankAccountNumber
 * @method string iban(\$countryCode = null, \$prefix = '', \$length = null)
 * @property string \$swiftBicNumber
 * @property string \$vat
 *
 * @property string \$word
 * @property string|array \$words
 * @method string|array words(\$nb = 3, \$asText = false)
 * @property string \$sentence
 * @method string sentence(\$nbWords = 6, \$variableNbWords = true)
 * @property string|array \$sentences
 * @method string|array sentences(\$nb = 3, \$asText = false)
 * @property string \$paragraph
 * @method string paragraph(\$nbSentences = 3, \$variableNbSentences = true)
 * @property string|array \$paragraphs
 * @method string|array paragraphs(\$nb = 3, \$asText = false)
 * @property string \$text
 * @method string text(\$maxNbChars = 200)
 *
 * @method string realText(\$maxNbChars = 200, \$indexSize = 2)
 *
 * @property string \$email
 * @property string \$safeEmail
 * @property string \$freeEmail
 * @property string \$companyEmail
 * @property string \$freeEmailDomain
 * @property string \$safeEmailDomain
 * @property string \$userName
 * @property string \$password
 * @method string password(\$minLength = 6, \$maxLength = 20)
 * @property string \$domainName
 * @property string \$domainWord
 * @property string \$tld
 * @property string \$url
 * @property string \$slug
 * @method string slug(\$nbWords = 6, \$variableNbWords = true)
 * @property string \$ipv4
 * @property string \$ipv6
 * @property string \$localIpv4
 * @property string \$macAddress
 *
 * @property int       \$unixTime
 * @property \\DateTime \$dateTime
 * @property \\DateTime \$dateTimeAD
 * @property string    \$iso8601
 * @property \\DateTime \$dateTimeThisCentury
 * @property \\DateTime \$dateTimeThisDecade
 * @property \\DateTime \$dateTimeThisYear
 * @property \\DateTime \$dateTimeThisMonth
 * @property string    \$amPm
 * @property string    \$dayOfMonth
 * @property string    \$dayOfWeek
 * @property string    \$month
 * @property string    \$monthName
 * @property string    \$year
 * @property string    \$century
 * @property string    \$timezone
 * @method string amPm(\$max = 'now')
 * @method string date(\$format = 'Y-m-d', \$max = 'now')
 * @method string dayOfMonth(\$max = 'now')
 * @method string dayOfWeek(\$max = 'now')
 * @method string iso8601(\$max = 'now')
 * @method string month(\$max = 'now')
 * @method string monthName(\$max = 'now')
 * @method string time(\$format = 'H:i:s', \$max = 'now')
 * @method int unixTime(\$max = 'now')
 * @method string year(\$max = 'now')
 * @method \\DateTime dateTime(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeAd(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeBetween(\$startDate = '-30 years', \$endDate = 'now')
 * @method \\DateTime dateTimeInInterval(\$date = '-30 years', \$interval = '+5 days', \$timezone = null)
 * @method \\DateTime dateTimeThisCentury(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisDecade(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisYear(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisMonth(\$max = 'now', \$timezone = null)
 *
 * @property string \$md5
 * @property string \$sha1
 * @property string \$sha256
 * @property string \$locale
 * @property string \$countryCode
 * @property string \$countryISOAlpha3
 * @property string \$languageCode
 * @property string \$currencyCode
 * @property boolean \$boolean
 * @method boolean boolean(\$chanceOfGettingTrue = 50)
 *
 * @property int    \$randomDigit
 * @property int    \$randomDigitNotNull
 * @property string \$randomLetter
 * @property string \$randomAscii
 * @method int randomNumber(\$nbDigits = null, \$strict = false)
 * @method int|string|null randomKey(array \$array = array())
 * @method int numberBetween(\$min = 0, \$max = 2147483647)
 * @method float randomFloat(\$nbMaxDecimals = null, \$min = 0, \$max = null)
 * @method mixed randomElement(array \$array = array('a', 'b', 'c'))
 * @method array randomElements(array \$array = array('a', 'b', 'c'), \$count = 1, \$allowDuplicates = false)
 * @method array|string shuffle(\$arg = '')
 * @method array shuffleArray(array \$array = array())
 * @method string shuffleString(\$string = '', \$encoding = 'UTF-8')
 * @method string numerify(\$string = '###')
 * @method string lexify(\$string = '????')
 * @method string bothify(\$string = '## ??')
 * @method string asciify(\$string = '****')
 * @method string regexify(\$regex = '')
 * @method string toLower(\$string = '')
 * @method string toUpper(\$string = '')
 * @method Generator optional(\$weight = 0.5, \$default = null)
 * @method Generator unique(\$reset = false, \$maxRetries = 10000)
 * @method Generator valid(\$validator = null, \$maxRetries = 10000)
 *
 * @method integer biasedNumberBetween(\$min = 0, \$max = 100, \$function = 'sqrt')
 *
 * @property string \$macProcessor
 * @property string \$linuxProcessor
 * @property string \$userAgent
 * @property string \$chrome
 * @property string \$firefox
 * @property string \$safari
 * @property string \$opera
 * @property string \$internetExplorer
 * @property string \$windowsPlatformToken
 * @property string \$macPlatformToken
 * @property string \$linuxPlatformToken
 *
 * @property string \$uuid
 *
 * @property string \$mimeType
 * @property string \$fileExtension
 * @method string file(\$sourceDirectory = '/tmp', \$targetDirectory = '/tmp', \$fullPath = true)
 *
 * @method string imageUrl(\$width = 640, \$height = 480, \$category = null, \$randomize = true, \$word = null, \$gray = false)
 * @method string image(\$dir = null, \$width = 640, \$height = 480, \$category = null, \$fullPath = true, \$randomize = true, \$word = null)
 *
 * @property string \$hexColor
 * @property string \$safeHexColor
 * @property string \$rgbColor
 * @property array \$rgbColorAsArray
 * @property string \$rgbCssColor
 * @property string \$safeColorName
 * @property string \$colorName
 *
 * @method string randomHtml(\$maxDepth = 4, \$maxWidth = 4)
 *
 */
class Generator
{
    protected \$providers = array();
    protected \$formatters = array();

    public function addProvider(\$provider)
    {
        array_unshift(\$this->providers, \$provider);
    }

    public function getProviders()
    {
        return \$this->providers;
    }

    public function seed(\$seed = null)
    {
        if (\$seed === null) {
            mt_srand();
        } else {
            if (PHP_VERSION_ID < 70100) {
                mt_srand((int) \$seed);
            } else {
                mt_srand((int) \$seed, MT_RAND_PHP);
            }
        }
    }

    public function format(\$formatter, \$arguments = array())
    {
        return call_user_func_array(\$this->getFormatter(\$formatter), \$arguments);
    }

    /**
     * @param string \$formatter
     *
     * @return Callable
     */
    public function getFormatter(\$formatter)
    {
        if (isset(\$this->formatters[\$formatter])) {
            return \$this->formatters[\$formatter];
        }
        foreach (\$this->providers as \$provider) {
            if (method_exists(\$provider, \$formatter)) {
                \$this->formatters[\$formatter] = array(\$provider, \$formatter);

                return \$this->formatters[\$formatter];
            }
        }
        throw new \\InvalidArgumentException(sprintf('Unknown formatter \"%s\"', \$formatter));
    }

    /**
     * Replaces tokens ('";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["tokenName"]) || array_key_exists("tokenName", $context) ? $context["tokenName"] : (function () { throw new RuntimeError('Variable "tokenName" does not exist.', 246, $this->source); })()), "html", null, true);
        echo "') with the result from the token method call
     *
     * @param  string \$string String that needs to bet parsed
     * @return string
     */
    public function parse(\$string)
    {
        return preg_replace_callback('/\\{\\{\\s?(\\w+)\\s?\\}\\}/u', array(\$this, 'callFormatWithMatches'), \$string);
    }

    protected function callFormatWithMatches(\$matches)
    {
        return \$this->format(\$matches[1]);
    }

    /**
     * @param string \$attribute
     *
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->format(\$attribute);
    }

    /**
     * @param string \$method
     * @param array \$attributes
     *
     * @return mixed
     */
    public function __call(\$method, \$attributes)
    {
        return \$this->format(\$method, \$attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Generator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 246,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker;

/**
 * @property string \$name
 * @method string name(string \$gender = null)
 * @property string \$firstName
 * @method string firstName(string \$gender = null)
 * @property string \$firstNameMale
 * @property string \$firstNameFemale
 * @property string \$lastName
 * @property string \$title
 * @method string title(string \$gender = null)
 * @property string \$titleMale
 * @property string \$titleFemale
 *
 * @property string \$citySuffix
 * @property string \$streetSuffix
 * @property string \$buildingNumber
 * @property string \$city
 * @property string \$streetName
 * @property string \$streetAddress
 * @property string \$postcode
 * @property string \$address
 * @property string \$country
 * @property float  \$latitude
 * @property float  \$longitude
 *
 * @property string \$ean13
 * @property string \$ean8
 * @property string \$isbn13
 * @property string \$isbn10
 *
 * @property string \$phoneNumber
 *
 * @property string \$company
 * @property string \$companySuffix
 * @property string \$jobTitle
 *
 * @property string \$creditCardType
 * @property string \$creditCardNumber
 * @method string creditCardNumber(\$type = null, \$formatted = false, \$separator = '-')
 * @property \\DateTime \$creditCardExpirationDate
 * @property string \$creditCardExpirationDateString
 * @property array \$creditCardDetails
 * @property string \$bankAccountNumber
 * @method string iban(\$countryCode = null, \$prefix = '', \$length = null)
 * @property string \$swiftBicNumber
 * @property string \$vat
 *
 * @property string \$word
 * @property string|array \$words
 * @method string|array words(\$nb = 3, \$asText = false)
 * @property string \$sentence
 * @method string sentence(\$nbWords = 6, \$variableNbWords = true)
 * @property string|array \$sentences
 * @method string|array sentences(\$nb = 3, \$asText = false)
 * @property string \$paragraph
 * @method string paragraph(\$nbSentences = 3, \$variableNbSentences = true)
 * @property string|array \$paragraphs
 * @method string|array paragraphs(\$nb = 3, \$asText = false)
 * @property string \$text
 * @method string text(\$maxNbChars = 200)
 *
 * @method string realText(\$maxNbChars = 200, \$indexSize = 2)
 *
 * @property string \$email
 * @property string \$safeEmail
 * @property string \$freeEmail
 * @property string \$companyEmail
 * @property string \$freeEmailDomain
 * @property string \$safeEmailDomain
 * @property string \$userName
 * @property string \$password
 * @method string password(\$minLength = 6, \$maxLength = 20)
 * @property string \$domainName
 * @property string \$domainWord
 * @property string \$tld
 * @property string \$url
 * @property string \$slug
 * @method string slug(\$nbWords = 6, \$variableNbWords = true)
 * @property string \$ipv4
 * @property string \$ipv6
 * @property string \$localIpv4
 * @property string \$macAddress
 *
 * @property int       \$unixTime
 * @property \\DateTime \$dateTime
 * @property \\DateTime \$dateTimeAD
 * @property string    \$iso8601
 * @property \\DateTime \$dateTimeThisCentury
 * @property \\DateTime \$dateTimeThisDecade
 * @property \\DateTime \$dateTimeThisYear
 * @property \\DateTime \$dateTimeThisMonth
 * @property string    \$amPm
 * @property string    \$dayOfMonth
 * @property string    \$dayOfWeek
 * @property string    \$month
 * @property string    \$monthName
 * @property string    \$year
 * @property string    \$century
 * @property string    \$timezone
 * @method string amPm(\$max = 'now')
 * @method string date(\$format = 'Y-m-d', \$max = 'now')
 * @method string dayOfMonth(\$max = 'now')
 * @method string dayOfWeek(\$max = 'now')
 * @method string iso8601(\$max = 'now')
 * @method string month(\$max = 'now')
 * @method string monthName(\$max = 'now')
 * @method string time(\$format = 'H:i:s', \$max = 'now')
 * @method int unixTime(\$max = 'now')
 * @method string year(\$max = 'now')
 * @method \\DateTime dateTime(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeAd(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeBetween(\$startDate = '-30 years', \$endDate = 'now')
 * @method \\DateTime dateTimeInInterval(\$date = '-30 years', \$interval = '+5 days', \$timezone = null)
 * @method \\DateTime dateTimeThisCentury(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisDecade(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisYear(\$max = 'now', \$timezone = null)
 * @method \\DateTime dateTimeThisMonth(\$max = 'now', \$timezone = null)
 *
 * @property string \$md5
 * @property string \$sha1
 * @property string \$sha256
 * @property string \$locale
 * @property string \$countryCode
 * @property string \$countryISOAlpha3
 * @property string \$languageCode
 * @property string \$currencyCode
 * @property boolean \$boolean
 * @method boolean boolean(\$chanceOfGettingTrue = 50)
 *
 * @property int    \$randomDigit
 * @property int    \$randomDigitNotNull
 * @property string \$randomLetter
 * @property string \$randomAscii
 * @method int randomNumber(\$nbDigits = null, \$strict = false)
 * @method int|string|null randomKey(array \$array = array())
 * @method int numberBetween(\$min = 0, \$max = 2147483647)
 * @method float randomFloat(\$nbMaxDecimals = null, \$min = 0, \$max = null)
 * @method mixed randomElement(array \$array = array('a', 'b', 'c'))
 * @method array randomElements(array \$array = array('a', 'b', 'c'), \$count = 1, \$allowDuplicates = false)
 * @method array|string shuffle(\$arg = '')
 * @method array shuffleArray(array \$array = array())
 * @method string shuffleString(\$string = '', \$encoding = 'UTF-8')
 * @method string numerify(\$string = '###')
 * @method string lexify(\$string = '????')
 * @method string bothify(\$string = '## ??')
 * @method string asciify(\$string = '****')
 * @method string regexify(\$regex = '')
 * @method string toLower(\$string = '')
 * @method string toUpper(\$string = '')
 * @method Generator optional(\$weight = 0.5, \$default = null)
 * @method Generator unique(\$reset = false, \$maxRetries = 10000)
 * @method Generator valid(\$validator = null, \$maxRetries = 10000)
 *
 * @method integer biasedNumberBetween(\$min = 0, \$max = 100, \$function = 'sqrt')
 *
 * @property string \$macProcessor
 * @property string \$linuxProcessor
 * @property string \$userAgent
 * @property string \$chrome
 * @property string \$firefox
 * @property string \$safari
 * @property string \$opera
 * @property string \$internetExplorer
 * @property string \$windowsPlatformToken
 * @property string \$macPlatformToken
 * @property string \$linuxPlatformToken
 *
 * @property string \$uuid
 *
 * @property string \$mimeType
 * @property string \$fileExtension
 * @method string file(\$sourceDirectory = '/tmp', \$targetDirectory = '/tmp', \$fullPath = true)
 *
 * @method string imageUrl(\$width = 640, \$height = 480, \$category = null, \$randomize = true, \$word = null, \$gray = false)
 * @method string image(\$dir = null, \$width = 640, \$height = 480, \$category = null, \$fullPath = true, \$randomize = true, \$word = null)
 *
 * @property string \$hexColor
 * @property string \$safeHexColor
 * @property string \$rgbColor
 * @property array \$rgbColorAsArray
 * @property string \$rgbCssColor
 * @property string \$safeColorName
 * @property string \$colorName
 *
 * @method string randomHtml(\$maxDepth = 4, \$maxWidth = 4)
 *
 */
class Generator
{
    protected \$providers = array();
    protected \$formatters = array();

    public function addProvider(\$provider)
    {
        array_unshift(\$this->providers, \$provider);
    }

    public function getProviders()
    {
        return \$this->providers;
    }

    public function seed(\$seed = null)
    {
        if (\$seed === null) {
            mt_srand();
        } else {
            if (PHP_VERSION_ID < 70100) {
                mt_srand((int) \$seed);
            } else {
                mt_srand((int) \$seed, MT_RAND_PHP);
            }
        }
    }

    public function format(\$formatter, \$arguments = array())
    {
        return call_user_func_array(\$this->getFormatter(\$formatter), \$arguments);
    }

    /**
     * @param string \$formatter
     *
     * @return Callable
     */
    public function getFormatter(\$formatter)
    {
        if (isset(\$this->formatters[\$formatter])) {
            return \$this->formatters[\$formatter];
        }
        foreach (\$this->providers as \$provider) {
            if (method_exists(\$provider, \$formatter)) {
                \$this->formatters[\$formatter] = array(\$provider, \$formatter);

                return \$this->formatters[\$formatter];
            }
        }
        throw new \\InvalidArgumentException(sprintf('Unknown formatter \"%s\"', \$formatter));
    }

    /**
     * Replaces tokens ('{{ tokenName }}') with the result from the token method call
     *
     * @param  string \$string String that needs to bet parsed
     * @return string
     */
    public function parse(\$string)
    {
        return preg_replace_callback('/\\{\\{\\s?(\\w+)\\s?\\}\\}/u', array(\$this, 'callFormatWithMatches'), \$string);
    }

    protected function callFormatWithMatches(\$matches)
    {
        return \$this->format(\$matches[1]);
    }

    /**
     * @param string \$attribute
     *
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->format(\$attribute);
    }

    /**
     * @param string \$method
     * @param array \$attributes
     *
     * @return mixed
     */
    public function __call(\$method, \$attributes)
    {
        return \$this->format(\$method, \$attributes);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Generator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Generator.php");
    }
}
