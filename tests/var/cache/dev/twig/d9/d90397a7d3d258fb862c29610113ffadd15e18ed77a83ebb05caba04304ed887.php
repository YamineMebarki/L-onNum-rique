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

/* vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php */
class __TwigTemplate_cad6859d4a765620cba6877d6fc6bb0fad49016a516eac5b932a7300b45c3e0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ms_MY;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mobileNumber"]) || array_key_exists("mobileNumber", $context) ? $context["mobileNumber"] : (function () { throw new RuntimeError('Variable "mobileNumber" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["fixedLineNumber"]) || array_key_exists("fixedLineNumber", $context) ? $context["fixedLineNumber"] : (function () { throw new RuntimeError('Variable "fixedLineNumber" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["voipNumber"]) || array_key_exists("voipNumber", $context) ? $context["voipNumber"] : (function () { throw new RuntimeError('Variable "voipNumber" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$plusSymbol = array(
        '+'
    );

    protected static \$countryCodePrefix = array(
        '6'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$zeroOneOnePrefix = array('10','11','12','13','14','15','16','17','18','19','20','22','23','32');
    protected static \$zeroOneFourPrefix = array('2','3','4','5','6','7','8','9');
    protected static \$zeroOneFivePrefix = array('1','2','3','4','5','6','9');

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$mobileNumberFormatsWithFormatting = array(
        '010-### ####',
        '011-";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["zeroOneOnePrefix"]) || array_key_exists("zeroOneOnePrefix", $context) ? $context["zeroOneOnePrefix"] : (function () { throw new RuntimeError('Variable "zeroOneOnePrefix" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "## ####',
        '012-### ####',
        '013-### ####',
        '014-";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["zeroOneFourPrefix"]) || array_key_exists("zeroOneFourPrefix", $context) ? $context["zeroOneFourPrefix"] : (function () { throw new RuntimeError('Variable "zeroOneFourPrefix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "## ####',
        '016-### ####',
        '017-### ####',
        '018-### ####',
        '019-### ####',
    );

    protected static \$mobileNumberFormats = array(
        '010#######',
        '011";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["zeroOneOnePrefix"]) || array_key_exists("zeroOneOnePrefix", $context) ? $context["zeroOneOnePrefix"] : (function () { throw new RuntimeError('Variable "zeroOneOnePrefix" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "######',
        '012#######',
        '013#######',
        '014";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["zeroOneFourPrefix"]) || array_key_exists("zeroOneFourPrefix", $context) ? $context["zeroOneFourPrefix"] : (function () { throw new RuntimeError('Variable "zeroOneFourPrefix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "######',
        '016#######',
        '017#######',
        '018#######',
        '019#######',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Geographic_area_codes
     */
    protected static \$fixedLineNumberFormatsWithFormatting = array(
        '03-#### ####',
        '04-### ####',
        '05-### ####',
        '06-### ####',
        '07-### ####',
        '08#-## ####',
        '09-### ####',
    );

    protected static \$fixedLineNumberFormats = array(
        '03########',
        '04#######',
        '05#######',
        '06#######',
        '07#######',
        '08#######',
        '09#######',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$voipNumberWithFormatting = array(
        '015-";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["zeroOneFivePrefix"]) || array_key_exists("zeroOneFivePrefix", $context) ? $context["zeroOneFivePrefix"] : (function () { throw new RuntimeError('Variable "zeroOneFivePrefix" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "## ####'
    );

    protected static \$voipNumber = array(
        '015";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["zeroOneFivePrefix"]) || array_key_exists("zeroOneFivePrefix", $context) ? $context["zeroOneFivePrefix"] : (function () { throw new RuntimeError('Variable "zeroOneFivePrefix" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "######'
    );

    /**
     * Return a Malaysian Mobile Phone Number.
     * 
     * @example '+6012-345-6789'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function mobileNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$mobileNumberFormatsWithFormatting);
        } else {
            \$format = static::randomElement(static::\$mobileNumberFormats);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return prefix digits for 011 numbers
     * 
     * @example '10'
     * 
     * @return string
     */
    public static function zeroOneOnePrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneOnePrefix));
    }

    /**
     * Return prefix digits for 014 numbers
     * 
     * @example '2'
     * 
     * @return string
     */
    public static function zeroOneFourPrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneFourPrefix));
    }

    /**
     * Return prefix digits for 015 numbers
     * 
     * @example '1'
     * 
     * @return string
     */
    public static function zeroOneFivePrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneFivePrefix));
    }

    /**
     * Return a Malaysian Fixed Line Phone Number.
     * 
     * @example '+603-4567-8912'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function fixedLineNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$fixedLineNumberFormatsWithFormatting);
        } else {
            \$format = static::randomElement(static::\$fixedLineNumberFormats);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return a Malaysian VoIP Phone Number.
     * 
     * @example '+6015-678-9234'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function voipNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$voipNumberWithFormatting);
        } else {
            \$format = static::randomElement(static::\$voipNumber);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return a Malaysian Country Code Prefix.
     * 
     * @example '+6'
     * 
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public static function countryCodePrefix(\$formatting = true)
    {
        if (\$formatting) {
            return static::randomElement(static::\$plusSymbol) . static::randomElement(static::\$countryCodePrefix);
        } else {
            return static::randomElement(static::\$countryCodePrefix);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 86,  147 => 82,  110 => 48,  104 => 45,  92 => 36,  86 => 33,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ms_MY;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
        '{{voipNumber}}'
    );

    protected static \$plusSymbol = array(
        '+'
    );

    protected static \$countryCodePrefix = array(
        '6'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$zeroOneOnePrefix = array('10','11','12','13','14','15','16','17','18','19','20','22','23','32');
    protected static \$zeroOneFourPrefix = array('2','3','4','5','6','7','8','9');
    protected static \$zeroOneFivePrefix = array('1','2','3','4','5','6','9');

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$mobileNumberFormatsWithFormatting = array(
        '010-### ####',
        '011-{{zeroOneOnePrefix}}## ####',
        '012-### ####',
        '013-### ####',
        '014-{{zeroOneFourPrefix}}## ####',
        '016-### ####',
        '017-### ####',
        '018-### ####',
        '019-### ####',
    );

    protected static \$mobileNumberFormats = array(
        '010#######',
        '011{{zeroOneOnePrefix}}######',
        '012#######',
        '013#######',
        '014{{zeroOneFourPrefix}}######',
        '016#######',
        '017#######',
        '018#######',
        '019#######',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Geographic_area_codes
     */
    protected static \$fixedLineNumberFormatsWithFormatting = array(
        '03-#### ####',
        '04-### ####',
        '05-### ####',
        '06-### ####',
        '07-### ####',
        '08#-## ####',
        '09-### ####',
    );

    protected static \$fixedLineNumberFormats = array(
        '03########',
        '04#######',
        '05#######',
        '06#######',
        '07#######',
        '08#######',
        '09#######',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static \$voipNumberWithFormatting = array(
        '015-{{zeroOneFivePrefix}}## ####'
    );

    protected static \$voipNumber = array(
        '015{{zeroOneFivePrefix}}######'
    );

    /**
     * Return a Malaysian Mobile Phone Number.
     * 
     * @example '+6012-345-6789'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function mobileNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$mobileNumberFormatsWithFormatting);
        } else {
            \$format = static::randomElement(static::\$mobileNumberFormats);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return prefix digits for 011 numbers
     * 
     * @example '10'
     * 
     * @return string
     */
    public static function zeroOneOnePrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneOnePrefix));
    }

    /**
     * Return prefix digits for 014 numbers
     * 
     * @example '2'
     * 
     * @return string
     */
    public static function zeroOneFourPrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneFourPrefix));
    }

    /**
     * Return prefix digits for 015 numbers
     * 
     * @example '1'
     * 
     * @return string
     */
    public static function zeroOneFivePrefix()
    {
        return static::numerify(static::randomElement(static::\$zeroOneFivePrefix));
    }

    /**
     * Return a Malaysian Fixed Line Phone Number.
     * 
     * @example '+603-4567-8912'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function fixedLineNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$fixedLineNumberFormatsWithFormatting);
        } else {
            \$format = static::randomElement(static::\$fixedLineNumberFormats);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return a Malaysian VoIP Phone Number.
     * 
     * @example '+6015-678-9234'
     * 
     * @param bool \$countryCodePrefix true, false
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public function voipNumber(\$countryCodePrefix = true, \$formatting = true)
    {
        if (\$formatting) {
            \$format = static::randomElement(static::\$voipNumberWithFormatting);
        } else {
            \$format = static::randomElement(static::\$voipNumber);
        }

        if (\$countryCodePrefix) {
            return static::countryCodePrefix(\$formatting) . static::numerify(\$this->generator->parse(\$format));
        } else {
            return static::numerify(\$this->generator->parse(\$format));
        }
    }

    /**
     * Return a Malaysian Country Code Prefix.
     * 
     * @example '+6'
     * 
     * @param bool \$formatting true, false
     * 
     * @return string
     */
    public static function countryCodePrefix(\$formatting = true)
    {
        if (\$formatting) {
            return static::randomElement(static::\$plusSymbol) . static::randomElement(static::\$countryCodePrefix);
        } else {
            return static::randomElement(static::\$countryCodePrefix);
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/PhoneNumber.php");
    }
}
