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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php */
class __TwigTemplate_4cb707701fb7cea5f82fde42301d3c325e7995660a0b2b2757be6c1ab30ff9bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_NZ;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * An array of en_NZ landline phone number formats
     * @var array
     */
    protected static \$formats = array(
        // National Calls
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["beginningNumber"]) || array_key_exists("beginningNumber", $context) ? $context["beginningNumber"] : (function () { throw new RuntimeError('Variable "beginningNumber" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "######',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["beginningNumber"]) || array_key_exists("beginningNumber", $context) ? $context["beginningNumber"] : (function () { throw new RuntimeError('Variable "beginningNumber" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "## ####'
    );

    /**
     * An array of en_NZ mobile (cell) phone number formats
     * @var array
     */
    protected static \$mobileFormats = array(
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####'
    );

    /**
     * An array of toll free phone number formats
     * @var array
     */
    protected static \$tollFreeFormats = array(
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
    );

    /**
     * An array of en_NZ landline area codes
     * @var array
     */
    protected static \$areaCodes = array(
        '02', '03', '04', '06', '07', '09'
    );

    /**
     * An array of en_NZ landline beginning numbers
     * @var array
     */
    protected static \$beginningNumbers = array(
        '2', '3', '4', '5', '6', '7', '8', '9'
    );

    /**
     * Return a en_NZ mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number
     * @return string
     */
    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::\$tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code
     * @return string
     */
    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::\$areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number
     * @return string
     */
    public static function beginningNumber()
    {
        return static::numerify(static::randomElement(static::\$beginningNumbers));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_NZ;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * An array of en_NZ landline phone number formats
     * @var array
     */
    protected static \$formats = array(
        // National Calls
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####'
    );

    /**
     * An array of en_NZ mobile (cell) phone number formats
     * @var array
     */
    protected static \$mobileFormats = array(
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####'
    );

    /**
     * An array of toll free phone number formats
     * @var array
     */
    protected static \$tollFreeFormats = array(
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
    );

    /**
     * An array of en_NZ landline area codes
     * @var array
     */
    protected static \$areaCodes = array(
        '02', '03', '04', '06', '07', '09'
    );

    /**
     * An array of en_NZ landline beginning numbers
     * @var array
     */
    protected static \$beginningNumbers = array(
        '2', '3', '4', '5', '6', '7', '8', '9'
    );

    /**
     * Return a en_NZ mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number
     * @return string
     */
    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::\$tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code
     * @return string
     */
    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::\$areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number
     * @return string
     */
    public static function beginningNumber()
    {
        return static::numerify(static::randomElement(static::\$beginningNumbers));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_NZ/PhoneNumber.php");
    }
}
