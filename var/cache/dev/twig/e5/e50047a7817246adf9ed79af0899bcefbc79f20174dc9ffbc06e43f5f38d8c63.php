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

/* vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php */
class __TwigTemplate_2e9192026712d735d838abb3797a5db5f11e981ea6e7ab1428b29a8f55d85ea2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fa_IR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('استان');
    protected static \$streetPrefix = array('خیابان');
    protected static \$buildingNamePrefix = array('ساختمان');
    protected static \$buildingNumberPrefix = array('پلاک', 'قطعه');
    protected static \$postcodePrefix = array('کد پستی');

    protected static \$cityName = array(
        \"آذربایجان شرقی\", \"آذربایجان غربی\", \"اردبیل\", \"اصفهان\", \"البرز\", \"ایلام\", \"بوشهر\",
        \"تهران\", \"خراسان جنوبی\", \"خراسان رضوی\", \"خراسان شمالی\", \"خوزستان\", \"زنجان\", \"سمنان\",
        \"سیستان و بلوچستان\", \"فارس\", \"قزوین\", \"قم\", \"لرستان\", \"مازندران\", \"مرکزی\", \"هرمزگان\",
        \"همدان\", \"چهارمحال و بختیاری\", \"کردستان\", \"کرمان\", \"کرمانشاه\", \"کهگیلویه و بویراحمد\",
        \"گلستان\", \"گیلان\", \"یزد\"
    );

    protected static \$cityFormats = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$addressFormats = array(
        '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcodePrefix"]) || array_key_exists("postcodePrefix", $context) ? $context["postcodePrefix"] : (function () { throw new RuntimeError('Variable "postcodePrefix" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$buildingFormat = array(
        '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["buildingNamePrefix"]) || array_key_exists("buildingNamePrefix", $context) ? $context["buildingNamePrefix"] : (function () { throw new RuntimeError('Variable "buildingNamePrefix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumberPrefix"]) || array_key_exists("buildingNumberPrefix", $context) ? $context["buildingNumberPrefix"] : (function () { throw new RuntimeError('Variable "buildingNumberPrefix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["buildingNamePrefix"]) || array_key_exists("buildingNamePrefix", $context) ? $context["buildingNamePrefix"] : (function () { throw new RuntimeError('Variable "buildingNamePrefix" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$postcode = array('##########');
    protected static \$country = array('ایران');

    /**
     * @example 'استان'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'زنجان'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'خیابان'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'ساختمان'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::\$buildingNamePrefix);
    }

    /**
     * @example 'پلاک'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::\$buildingNumberPrefix);
    }

    /**
     * @example 'ساختمان آفتاب پلاک 24'
     */
    public function building()
    {
        \$format = static::randomElement(static::\$buildingFormat);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'کد پستی'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::\$postcodePrefix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  112 => 36,  104 => 33,  94 => 32,  86 => 29,  78 => 26,  70 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fa_IR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('استان');
    protected static \$streetPrefix = array('خیابان');
    protected static \$buildingNamePrefix = array('ساختمان');
    protected static \$buildingNumberPrefix = array('پلاک', 'قطعه');
    protected static \$postcodePrefix = array('کد پستی');

    protected static \$cityName = array(
        \"آذربایجان شرقی\", \"آذربایجان غربی\", \"اردبیل\", \"اصفهان\", \"البرز\", \"ایلام\", \"بوشهر\",
        \"تهران\", \"خراسان جنوبی\", \"خراسان رضوی\", \"خراسان شمالی\", \"خوزستان\", \"زنجان\", \"سمنان\",
        \"سیستان و بلوچستان\", \"فارس\", \"قزوین\", \"قم\", \"لرستان\", \"مازندران\", \"مرکزی\", \"هرمزگان\",
        \"همدان\", \"چهارمحال و بختیاری\", \"کردستان\", \"کرمان\", \"کرمانشاه\", \"کهگیلویه و بویراحمد\",
        \"گلستان\", \"گیلان\", \"یزد\"
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    );
    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{building}}'
    );
    protected static \$addressFormats = array(
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}',
    );
    protected static \$buildingFormat = array(
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    );

    protected static \$postcode = array('##########');
    protected static \$country = array('ایران');

    /**
     * @example 'استان'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'زنجان'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'خیابان'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'ساختمان'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::\$buildingNamePrefix);
    }

    /**
     * @example 'پلاک'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::\$buildingNumberPrefix);
    }

    /**
     * @example 'ساختمان آفتاب پلاک 24'
     */
    public function building()
    {
        \$format = static::randomElement(static::\$buildingFormat);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'کد پستی'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::\$postcodePrefix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Address.php");
    }
}
