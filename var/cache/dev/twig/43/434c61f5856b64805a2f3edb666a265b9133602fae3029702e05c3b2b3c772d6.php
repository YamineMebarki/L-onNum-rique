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

/* vendor/fzaninotto/faker/src/Faker/Provider/Address.php */
class __TwigTemplate_1c795dd31789782a73b06e30163c3813110c4582926eb3993c3f9b9a76a223a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class Address extends Base
{
    protected static \$citySuffix = array('Ville');
    protected static \$streetSuffix = array('Street');
    protected static \$cityFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$addressFormats = array(
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$buildingNumber = array('%#');
    protected static \$postcode = array('#####');
    protected static \$country = array();

    /**
     * @example 'town'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    /**
     * @example 'Avenue'
     */
    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    /**
     * @example '791'
     */
    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    /**
     * @example 'Sashabury'
     */
    public function city()
    {
        \$format = static::randomElement(static::\$cityFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Crist Parks'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example '791 Crist Parks'
     */
    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 86039-9874
     */
    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Japan'
     */
    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    /**
     * @example '77.147489'
     * @param float|int \$min
     * @param float|int \$max
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     */
    public static function latitude(\$min = -90, \$max = 90)
    {
        return static::randomFloat(6, \$min, \$max);
    }

    /**
     * @example '86.211205'
     * @param float|int \$min
     * @param float|int \$max
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     */
    public static function longitude(\$min = -180, \$max = 180)
    {
        return static::randomFloat(6, \$min, \$max);
    }

    /**
     * @example array('77.147489', '86.211205')
     * @return array | latitude, longitude
     */
    public static function localCoordinates()
    {
        return array(
            'latitude' => static::latitude(),
            'longitude' => static::longitude()
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  69 => 16,  61 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class Address extends Base
{
    protected static \$citySuffix = array('Ville');
    protected static \$streetSuffix = array('Street');
    protected static \$cityFormats = array(
        '{{firstName}}{{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}'
    );
    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}'
    );
    protected static \$addressFormats = array(
        '{{streetAddress}} {{postcode}} {{city}}',
    );

    protected static \$buildingNumber = array('%#');
    protected static \$postcode = array('#####');
    protected static \$country = array();

    /**
     * @example 'town'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::\$citySuffix);
    }

    /**
     * @example 'Avenue'
     */
    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    /**
     * @example '791'
     */
    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    /**
     * @example 'Sashabury'
     */
    public function city()
    {
        \$format = static::randomElement(static::\$cityFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Crist Parks'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example '791 Crist Parks'
     */
    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 86039-9874
     */
    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Japan'
     */
    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    /**
     * @example '77.147489'
     * @param float|int \$min
     * @param float|int \$max
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     */
    public static function latitude(\$min = -90, \$max = 90)
    {
        return static::randomFloat(6, \$min, \$max);
    }

    /**
     * @example '86.211205'
     * @param float|int \$min
     * @param float|int \$max
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     */
    public static function longitude(\$min = -180, \$max = 180)
    {
        return static::randomFloat(6, \$min, \$max);
    }

    /**
     * @example array('77.147489', '86.211205')
     * @return array | latitude, longitude
     */
    public static function localCoordinates()
    {
        return array(
            'latitude' => static::latitude(),
            'longitude' => static::longitude()
        );
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Address.php");
    }
}
