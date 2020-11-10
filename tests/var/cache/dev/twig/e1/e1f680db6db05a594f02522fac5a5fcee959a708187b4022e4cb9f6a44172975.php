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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php */
class __TwigTemplate_7f739c3535184d19717d5b4ae1799fbf72a2fbb519762fa37d9c490ac1b37624 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_CA;

/**
 * Extend US class since most fields share the same format
 */

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$postcode = array('?#? #?#', '?#?-#?#', '?#?#?#');

    protected static \$postcodeLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

    protected static \$province = array(
        'Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon Territory',
    );

    protected static \$provinceAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NT', 'NS', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'
    );

    protected static \$addressFormats = array(
        \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["provinceAbbr"]) || array_key_exists("provinceAbbr", $context) ? $context["provinceAbbr"] : (function () { throw new RuntimeError('Variable "provinceAbbr" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * @example 'Ontario'
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }

    /**
     * @example 'ON'
     */
    public static function provinceAbbr()
    {
        return static::randomElement(static::\$provinceAbbr);
    }

    /**
     * Returns a postalcode-safe letter
     * @example A1B 2C3
     */
    public static function randomPostcodeLetter()
    {
        return static::randomElement(static::\$postcodeLetters);
    }

    /**
     * @example A1B 2C3
     */
    public static function postcode()
    {
        \$string = static::randomElement(static::\$postcode);

        \$string = preg_replace_callback('/\\#/u', 'static::randomDigit', \$string);
        \$string = preg_replace_callback('/\\?/u', 'static::randomPostcodeLetter', \$string);

        return static::toUpper(\$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_CA;

/**
 * Extend US class since most fields share the same format
 */

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$postcode = array('?#? #?#', '?#?-#?#', '?#?#?#');

    protected static \$postcodeLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

    protected static \$province = array(
        'Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon Territory',
    );

    protected static \$provinceAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NT', 'NS', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{city}}, {{provinceAbbr}}  {{postcode}}\",
    );

    /**
     * @example 'Ontario'
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }

    /**
     * @example 'ON'
     */
    public static function provinceAbbr()
    {
        return static::randomElement(static::\$provinceAbbr);
    }

    /**
     * Returns a postalcode-safe letter
     * @example A1B 2C3
     */
    public static function randomPostcodeLetter()
    {
        return static::randomElement(static::\$postcodeLetters);
    }

    /**
     * @example A1B 2C3
     */
    public static function postcode()
    {
        \$string = static::randomElement(static::\$postcode);

        \$string = preg_replace_callback('/\\#/u', 'static::randomDigit', \$string);
        \$string = preg_replace_callback('/\\?/u', 'static::randomPostcodeLetter', \$string);

        return static::toUpper(\$string);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_CA/Address.php");
    }
}
