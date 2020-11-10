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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php */
class __TwigTemplate_1a65646646421c0e02eabed325d77c2a67fdfc6a2ee31c0cde391cfb9a496be6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_NZ;

class Address extends \\Faker\\Provider\\en_US\\Address
{

    /**
     * An array of en_NZ (New Zealand) building number formats
     * @var array
     */
    protected static \$buildingNumber = array('#', '##', '###');

    /**
     * An array of en_NZ (New Zealand) street suffixes
     * @var array
     */
    protected static \$streetSuffix = array(
        'Avenue', 'Close', 'Court', 'Crescent', 'Drive', 'Esplanade', 'Grove', 'Heights', 'Highway', 'Hill', 'Lane', 'Line', 'Mall', 'Parade', 'Place', 'Quay', 'Rise', 'Road', 'Square', 'Street', 'Terrace', 'Way'
    );

    /**
     * City suffixes
     * @var array
     */
    protected static \$citySuffix = array('ville', 'ston');

    /**
     * City formats
     * @var array
     */
    protected static \$cityFormats = array('";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 32, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "');

    /**
     * An array of en_NZ (New Zealand) regions
     * @see http://en.wikipedia.org/wiki/Regions_of_New_Zealand
     * @var array
     */
    protected static \$region = array(
        'Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawkes Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'
    );

    /**
     * An array of en_NZ (New Zealand) poscode formats
     * @var array
     */
    protected static \$postcode = array('####');

    /**
     * An array of en_NZ (New Zealand) address formats
     * @var array
     */
    protected static \$addressFormats = array('";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "');

    /**
     * An array of en_NZ (New Zealand) street address formats
     * @var array
     */
    protected static \$streetAddressFormats = array('";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "');

    /**
     * Return a en_NZ (New Zealand) postcode
     * @return string
     */
    public static function postcode()
    {
        return static::numerify(static::randomElement(static::\$postcode));
    }

    /**
     * Return a en_NZ (New Zealand) region
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 59,  101 => 53,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_NZ;

class Address extends \\Faker\\Provider\\en_US\\Address
{

    /**
     * An array of en_NZ (New Zealand) building number formats
     * @var array
     */
    protected static \$buildingNumber = array('#', '##', '###');

    /**
     * An array of en_NZ (New Zealand) street suffixes
     * @var array
     */
    protected static \$streetSuffix = array(
        'Avenue', 'Close', 'Court', 'Crescent', 'Drive', 'Esplanade', 'Grove', 'Heights', 'Highway', 'Hill', 'Lane', 'Line', 'Mall', 'Parade', 'Place', 'Quay', 'Rise', 'Road', 'Square', 'Street', 'Terrace', 'Way'
    );

    /**
     * City suffixes
     * @var array
     */
    protected static \$citySuffix = array('ville', 'ston');

    /**
     * City formats
     * @var array
     */
    protected static \$cityFormats = array('{{firstName}}{{citySuffix}}');

    /**
     * An array of en_NZ (New Zealand) regions
     * @see http://en.wikipedia.org/wiki/Regions_of_New_Zealand
     * @var array
     */
    protected static \$region = array(
        'Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawkes Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'
    );

    /**
     * An array of en_NZ (New Zealand) poscode formats
     * @var array
     */
    protected static \$postcode = array('####');

    /**
     * An array of en_NZ (New Zealand) address formats
     * @var array
     */
    protected static \$addressFormats = array('{{buildingNumber}} {{streetName}}, {{city}}, {{region}}, {{postcode}}');

    /**
     * An array of en_NZ (New Zealand) street address formats
     * @var array
     */
    protected static \$streetAddressFormats = array('{{buildingNumber}} {{streetName}}');

    /**
     * Return a en_NZ (New Zealand) postcode
     * @return string
     */
    public static function postcode()
    {
        return static::numerify(static::randomElement(static::\$postcode));
    }

    /**
     * Return a en_NZ (New Zealand) region
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/Address.php");
    }
}
