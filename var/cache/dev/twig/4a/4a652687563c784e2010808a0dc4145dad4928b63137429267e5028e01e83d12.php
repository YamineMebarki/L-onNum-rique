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

/* vendor/fzaninotto/faker/src/Faker/Provider/Payment.php */
class __TwigTemplate_74be61a4a895c9605a754d98db2f78b18e70fddd5185037c7e34f34e8763d8b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

use Faker\\Calculator\\Iban;
use Faker\\Calculator\\Luhn;

class Payment extends Base
{
    public static \$expirationDateFormat = \"m/y\";

    protected static \$cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Visa Retired'
    );

    /**
     * @var array List of card brand masks for generating valid credit card numbers
     * @see https://en.wikipedia.org/wiki/Payment_card_number Reference for existing prefixes
     * @see https://www.mastercard.us/en-us/issuers/get-support/2-series-bin-expansion.html MasterCard 2017 2-Series BIN Expansion
     */
    protected static \$cardParams = array(
        'Visa' => array(
            \"4539###########\",
            \"4556###########\",
            \"4916###########\",
            \"4532###########\",
            \"4929###########\",
            \"40240071#######\",
            \"4485###########\",
            \"4716###########\",
            \"4##############\"
        ),
        'Visa Retired' => array(
            \"4539########\",
            \"4556########\",
            \"4916########\",
            \"4532########\",
            \"4929########\",
            \"40240071####\",
            \"4485########\",
            \"4716########\",
            \"4###########\",
        ),
        'MasterCard' => array(
            \"2221###########\",
            \"23#############\",
            \"24#############\",
            \"25#############\",
            \"26#############\",
            \"2720###########\",
            \"51#############\",
            \"52#############\",
            \"53#############\",
            \"54#############\",
            \"55#############\"
        ),
        'American Express' => array(
            \"34############\",
            \"37############\"
        ),
        'Discover Card' => array(
            \"6011###########\"
        ),
    );

    /**
     * @var array list of IBAN formats, source: @link https://www.swift.com/standards/data-standards/iban
     */
    protected static \$ibanFormats = array(
        'AD' => array(array('n', 4),    array('n', 4),  array('c', 12)),
        'AE' => array(array('n', 3),    array('n', 16)),
        'AL' => array(array('n', 8),    array('c', 16)),
        'AT' => array(array('n', 5),    array('n', 11)),
        'AZ' => array(array('a', 4),    array('c', 20)),
        'BA' => array(array('n', 3),    array('n', 3),  array('n', 8),  array('n', 2)),
        'BE' => array(array('n', 3),    array('n', 7),  array('n', 2)),
        'BG' => array(array('a', 4),    array('n', 4),  array('n', 2),  array('c', 8)),
        'BH' => array(array('a', 4),    array('c', 14)),
        'BR' => array(array('n', 8),    array('n', 5),  array('n', 10), array('a', 1),  array('c', 1)),
        'CH' => array(array('n', 5),    array('c', 12)),
        'CR' => array(array('n', 3),    array('n', 14)),
        'CY' => array(array('n', 3),    array('n', 5),  array('c', 16)),
        'CZ' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'DE' => array(array('n', 8),    array('n', 10)),
        'DK' => array(array('n', 4),    array('n', 9),  array('n', 1)),
        'DO' => array(array('c', 4),    array('n', 20)),
        'EE' => array(array('n', 2),    array('n', 2),  array('n', 11), array('n', 1)),
        'ES' => array(array('n', 4),    array('n', 4),  array('n', 1),  array('n', 1),  array('n', 10)),
        'FI' => array(array('n', 6),    array('n', 7),  array('n', 1)),
        'FR' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'GB' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'GE' => array(array('a', 2),    array('n', 16)),
        'GI' => array(array('a', 4),    array('c', 15)),
        'GR' => array(array('n', 3),    array('n', 4),  array('c', 16)),
        'GT' => array(array('c', 4),    array('c', 20)),
        'HR' => array(array('n', 7),    array('n', 10)),
        'HU' => array(array('n', 3),    array('n', 4),  array('n', 1),  array('n', 15), array('n', 1)),
        'IE' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'IL' => array(array('n', 3),    array('n', 3),  array('n', 13)),
        'IS' => array(array('n', 4),    array('n', 2),  array('n', 6),  array('n', 10)),
        'IT' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'KW' => array(array('a', 4),    array('n', 22)),
        'KZ' => array(array('n', 3),    array('c', 13)),
        'LB' => array(array('n', 4),    array('c', 20)),
        'LI' => array(array('n', 5),    array('c', 12)),
        'LT' => array(array('n', 5),    array('n', 11)),
        'LU' => array(array('n', 3),    array('c', 13)),
        'LV' => array(array('a', 4),    array('c', 13)),
        'MC' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'MD' => array(array('c', 2),    array('c', 18)),
        'ME' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'MK' => array(array('n', 3),    array('c', 10), array('n', 2)),
        'MR' => array(array('n', 5),    array('n', 5),  array('n', 11), array('n', 2)),
        'MT' => array(array('a', 4),    array('n', 5),  array('c', 18)),
        'MU' => array(array('a', 4),    array('n', 2),  array('n', 2),  array('n', 12), array('n', 3),  array('a', 3)),
        'NL' => array(array('a', 4),    array('n', 10)),
        'NO' => array(array('n', 4),    array('n', 6),  array('n', 1)),
        'PK' => array(array('a', 4),    array('c', 16)),
        'PL' => array(array('n', 8),    array('n', 16)),
        'PS' => array(array('a', 4),    array('c', 21)),
        'PT' => array(array('n', 4),    array('n', 4),  array('n', 11), array('n', 2)),
        'RO' => array(array('a', 4),    array('c', 16)),
        'RS' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'SA' => array(array('n', 2),    array('c', 18)),
        'SE' => array(array('n', 3),    array('n', 16), array('n', 1)),
        'SI' => array(array('n', 5),    array('n', 8),  array('n', 2)),
        'SK' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'SM' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'TN' => array(array('n', 2),    array('n', 3),  array('n', 13), array('n', 2)),
        'TR' => array(array('n', 5),    array('n', 1),  array('c', 16)),
        'VG' => array(array('a', 4),    array('n', 16)),
    );

    /**
     * @return string Returns a credit card vendor name
     *
     * @example 'MasterCard'
     */
    public static function creditCardType()
    {
        return static::randomElement(static::\$cardVendors);
    }

    /**
     * Returns the String of a credit card number.
     *
     * @param string  \$type      Supporting any of 'Visa', 'MasterCard', 'American Express', and 'Discover'
     * @param boolean \$formatted Set to true if the output string should contain one separator every 4 digits
     * @param string  \$separator Separator string for formatting card number. Defaults to dash (-).
     * @return string
     *
     * @example '4485480221084675'
     */
    public static function creditCardNumber(\$type = null, \$formatted = false, \$separator = '-')
    {
        if (is_null(\$type)) {
            \$type = static::creditCardType();
        }
        \$mask = static::randomElement(static::\$cardParams[\$type]);

        \$number = static::numerify(\$mask);
        \$number .= Luhn::computeCheckDigit(\$number);

        if (\$formatted) {
            \$p1 = substr(\$number, 0, 4);
            \$p2 = substr(\$number, 4, 4);
            \$p3 = substr(\$number, 8, 4);
            \$p4 = substr(\$number, 12);
            \$number = \$p1 . \$separator . \$p2 . \$separator . \$p3 . \$separator . \$p4;
        }

        return \$number;
    }

    /**
     * @param boolean \$valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return \\DateTime
     * @example 04/13
     */
    public function creditCardExpirationDate(\$valid = true)
    {
        if (\$valid) {
            return \$this->generator->dateTimeBetween('now', '36 months');
        }

        return \$this->generator->dateTimeBetween('-36 months', '36 months');
    }

    /**
     * @param boolean \$valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  \$expirationDateFormat
     * @return string
     * @example '04/13'
     */
    public function creditCardExpirationDateString(\$valid = true, \$expirationDateFormat = null)
    {
        return \$this->creditCardExpirationDate(\$valid)->format(is_null(\$expirationDateFormat) ? static::\$expirationDateFormat : \$expirationDateFormat);
    }

    /**
     * @param  boolean \$valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return array
     */
    public function creditCardDetails(\$valid = true)
    {
        \$type = static::creditCardType();

        return array(
            'type'   => \$type,
            'number' => static::creditCardNumber(\$type),
            'name'   => \$this->generator->name(),
            'expirationDate' => \$this->creditCardExpirationDateString(\$valid)
        );
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function iban(\$countryCode = null, \$prefix = '', \$length = null)
    {
        \$countryCode = is_null(\$countryCode) ? self::randomKey(self::\$ibanFormats) : strtoupper(\$countryCode);

        \$format = !isset(static::\$ibanFormats[\$countryCode]) ? null : static::\$ibanFormats[\$countryCode];
        if (\$length === null) {
            if (\$format === null) {
                \$length = 24;
            } else {
                \$length = 0;
                foreach (\$format as \$part) {
                    list(\$class, \$groupCount) = \$part;
                    \$length += \$groupCount;
                }
            }
        }
        if (\$format === null) {
            \$format = array(array('n', \$length));
        }

        \$expandedFormat = '';
        foreach (\$format as \$item) {
            list(\$class, \$length) = \$item;
            \$expandedFormat .=  str_repeat(\$class, \$length);
        }

        \$result = \$prefix;
        \$expandedFormat = substr(\$expandedFormat, strlen(\$result));
        foreach (str_split(\$expandedFormat) as \$class) {
            switch (\$class) {
                default:
                case 'c':
                    \$result .= mt_rand(0, 100) <= 50 ? static::randomDigit() : strtoupper(static::randomLetter());
                    break;
                case 'a':
                    \$result .= strtoupper(static::randomLetter());
                    break;
                case 'n':
                    \$result .= static::randomDigit();
                    break;
            }
        }

        \$checksum = Iban::checksum(\$countryCode . '00' . \$result);

        return \$countryCode . \$checksum . \$result;
    }

    /**
     * Return the String of a SWIFT/BIC number
     *
     * @example 'RZTIAT22263'
     * @link    http://en.wikipedia.org/wiki/ISO_9362
     * @return  string Swift/Bic number
     */
    public static function swiftBicNumber()
    {
        return self::regexify(\"^([A-Z]){4}([A-Z]){2}([0-9A-Z]){2}([0-9A-Z]{3})?\$\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

use Faker\\Calculator\\Iban;
use Faker\\Calculator\\Luhn;

class Payment extends Base
{
    public static \$expirationDateFormat = \"m/y\";

    protected static \$cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Visa Retired'
    );

    /**
     * @var array List of card brand masks for generating valid credit card numbers
     * @see https://en.wikipedia.org/wiki/Payment_card_number Reference for existing prefixes
     * @see https://www.mastercard.us/en-us/issuers/get-support/2-series-bin-expansion.html MasterCard 2017 2-Series BIN Expansion
     */
    protected static \$cardParams = array(
        'Visa' => array(
            \"4539###########\",
            \"4556###########\",
            \"4916###########\",
            \"4532###########\",
            \"4929###########\",
            \"40240071#######\",
            \"4485###########\",
            \"4716###########\",
            \"4##############\"
        ),
        'Visa Retired' => array(
            \"4539########\",
            \"4556########\",
            \"4916########\",
            \"4532########\",
            \"4929########\",
            \"40240071####\",
            \"4485########\",
            \"4716########\",
            \"4###########\",
        ),
        'MasterCard' => array(
            \"2221###########\",
            \"23#############\",
            \"24#############\",
            \"25#############\",
            \"26#############\",
            \"2720###########\",
            \"51#############\",
            \"52#############\",
            \"53#############\",
            \"54#############\",
            \"55#############\"
        ),
        'American Express' => array(
            \"34############\",
            \"37############\"
        ),
        'Discover Card' => array(
            \"6011###########\"
        ),
    );

    /**
     * @var array list of IBAN formats, source: @link https://www.swift.com/standards/data-standards/iban
     */
    protected static \$ibanFormats = array(
        'AD' => array(array('n', 4),    array('n', 4),  array('c', 12)),
        'AE' => array(array('n', 3),    array('n', 16)),
        'AL' => array(array('n', 8),    array('c', 16)),
        'AT' => array(array('n', 5),    array('n', 11)),
        'AZ' => array(array('a', 4),    array('c', 20)),
        'BA' => array(array('n', 3),    array('n', 3),  array('n', 8),  array('n', 2)),
        'BE' => array(array('n', 3),    array('n', 7),  array('n', 2)),
        'BG' => array(array('a', 4),    array('n', 4),  array('n', 2),  array('c', 8)),
        'BH' => array(array('a', 4),    array('c', 14)),
        'BR' => array(array('n', 8),    array('n', 5),  array('n', 10), array('a', 1),  array('c', 1)),
        'CH' => array(array('n', 5),    array('c', 12)),
        'CR' => array(array('n', 3),    array('n', 14)),
        'CY' => array(array('n', 3),    array('n', 5),  array('c', 16)),
        'CZ' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'DE' => array(array('n', 8),    array('n', 10)),
        'DK' => array(array('n', 4),    array('n', 9),  array('n', 1)),
        'DO' => array(array('c', 4),    array('n', 20)),
        'EE' => array(array('n', 2),    array('n', 2),  array('n', 11), array('n', 1)),
        'ES' => array(array('n', 4),    array('n', 4),  array('n', 1),  array('n', 1),  array('n', 10)),
        'FI' => array(array('n', 6),    array('n', 7),  array('n', 1)),
        'FR' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'GB' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'GE' => array(array('a', 2),    array('n', 16)),
        'GI' => array(array('a', 4),    array('c', 15)),
        'GR' => array(array('n', 3),    array('n', 4),  array('c', 16)),
        'GT' => array(array('c', 4),    array('c', 20)),
        'HR' => array(array('n', 7),    array('n', 10)),
        'HU' => array(array('n', 3),    array('n', 4),  array('n', 1),  array('n', 15), array('n', 1)),
        'IE' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'IL' => array(array('n', 3),    array('n', 3),  array('n', 13)),
        'IS' => array(array('n', 4),    array('n', 2),  array('n', 6),  array('n', 10)),
        'IT' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'KW' => array(array('a', 4),    array('n', 22)),
        'KZ' => array(array('n', 3),    array('c', 13)),
        'LB' => array(array('n', 4),    array('c', 20)),
        'LI' => array(array('n', 5),    array('c', 12)),
        'LT' => array(array('n', 5),    array('n', 11)),
        'LU' => array(array('n', 3),    array('c', 13)),
        'LV' => array(array('a', 4),    array('c', 13)),
        'MC' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'MD' => array(array('c', 2),    array('c', 18)),
        'ME' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'MK' => array(array('n', 3),    array('c', 10), array('n', 2)),
        'MR' => array(array('n', 5),    array('n', 5),  array('n', 11), array('n', 2)),
        'MT' => array(array('a', 4),    array('n', 5),  array('c', 18)),
        'MU' => array(array('a', 4),    array('n', 2),  array('n', 2),  array('n', 12), array('n', 3),  array('a', 3)),
        'NL' => array(array('a', 4),    array('n', 10)),
        'NO' => array(array('n', 4),    array('n', 6),  array('n', 1)),
        'PK' => array(array('a', 4),    array('c', 16)),
        'PL' => array(array('n', 8),    array('n', 16)),
        'PS' => array(array('a', 4),    array('c', 21)),
        'PT' => array(array('n', 4),    array('n', 4),  array('n', 11), array('n', 2)),
        'RO' => array(array('a', 4),    array('c', 16)),
        'RS' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'SA' => array(array('n', 2),    array('c', 18)),
        'SE' => array(array('n', 3),    array('n', 16), array('n', 1)),
        'SI' => array(array('n', 5),    array('n', 8),  array('n', 2)),
        'SK' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'SM' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'TN' => array(array('n', 2),    array('n', 3),  array('n', 13), array('n', 2)),
        'TR' => array(array('n', 5),    array('n', 1),  array('c', 16)),
        'VG' => array(array('a', 4),    array('n', 16)),
    );

    /**
     * @return string Returns a credit card vendor name
     *
     * @example 'MasterCard'
     */
    public static function creditCardType()
    {
        return static::randomElement(static::\$cardVendors);
    }

    /**
     * Returns the String of a credit card number.
     *
     * @param string  \$type      Supporting any of 'Visa', 'MasterCard', 'American Express', and 'Discover'
     * @param boolean \$formatted Set to true if the output string should contain one separator every 4 digits
     * @param string  \$separator Separator string for formatting card number. Defaults to dash (-).
     * @return string
     *
     * @example '4485480221084675'
     */
    public static function creditCardNumber(\$type = null, \$formatted = false, \$separator = '-')
    {
        if (is_null(\$type)) {
            \$type = static::creditCardType();
        }
        \$mask = static::randomElement(static::\$cardParams[\$type]);

        \$number = static::numerify(\$mask);
        \$number .= Luhn::computeCheckDigit(\$number);

        if (\$formatted) {
            \$p1 = substr(\$number, 0, 4);
            \$p2 = substr(\$number, 4, 4);
            \$p3 = substr(\$number, 8, 4);
            \$p4 = substr(\$number, 12);
            \$number = \$p1 . \$separator . \$p2 . \$separator . \$p3 . \$separator . \$p4;
        }

        return \$number;
    }

    /**
     * @param boolean \$valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return \\DateTime
     * @example 04/13
     */
    public function creditCardExpirationDate(\$valid = true)
    {
        if (\$valid) {
            return \$this->generator->dateTimeBetween('now', '36 months');
        }

        return \$this->generator->dateTimeBetween('-36 months', '36 months');
    }

    /**
     * @param boolean \$valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  \$expirationDateFormat
     * @return string
     * @example '04/13'
     */
    public function creditCardExpirationDateString(\$valid = true, \$expirationDateFormat = null)
    {
        return \$this->creditCardExpirationDate(\$valid)->format(is_null(\$expirationDateFormat) ? static::\$expirationDateFormat : \$expirationDateFormat);
    }

    /**
     * @param  boolean \$valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return array
     */
    public function creditCardDetails(\$valid = true)
    {
        \$type = static::creditCardType();

        return array(
            'type'   => \$type,
            'number' => static::creditCardNumber(\$type),
            'name'   => \$this->generator->name(),
            'expirationDate' => \$this->creditCardExpirationDateString(\$valid)
        );
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function iban(\$countryCode = null, \$prefix = '', \$length = null)
    {
        \$countryCode = is_null(\$countryCode) ? self::randomKey(self::\$ibanFormats) : strtoupper(\$countryCode);

        \$format = !isset(static::\$ibanFormats[\$countryCode]) ? null : static::\$ibanFormats[\$countryCode];
        if (\$length === null) {
            if (\$format === null) {
                \$length = 24;
            } else {
                \$length = 0;
                foreach (\$format as \$part) {
                    list(\$class, \$groupCount) = \$part;
                    \$length += \$groupCount;
                }
            }
        }
        if (\$format === null) {
            \$format = array(array('n', \$length));
        }

        \$expandedFormat = '';
        foreach (\$format as \$item) {
            list(\$class, \$length) = \$item;
            \$expandedFormat .=  str_repeat(\$class, \$length);
        }

        \$result = \$prefix;
        \$expandedFormat = substr(\$expandedFormat, strlen(\$result));
        foreach (str_split(\$expandedFormat) as \$class) {
            switch (\$class) {
                default:
                case 'c':
                    \$result .= mt_rand(0, 100) <= 50 ? static::randomDigit() : strtoupper(static::randomLetter());
                    break;
                case 'a':
                    \$result .= strtoupper(static::randomLetter());
                    break;
                case 'n':
                    \$result .= static::randomDigit();
                    break;
            }
        }

        \$checksum = Iban::checksum(\$countryCode . '00' . \$result);

        return \$countryCode . \$checksum . \$result;
    }

    /**
     * Return the String of a SWIFT/BIC number
     *
     * @example 'RZTIAT22263'
     * @link    http://en.wikipedia.org/wiki/ISO_9362
     * @return  string Swift/Bic number
     */
    public static function swiftBicNumber()
    {
        return self::regexify(\"^([A-Z]){4}([A-Z]){2}([0-9A-Z]){2}([0-9A-Z]{3})?\$\");
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Payment.php");
    }
}
