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

/* vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php */
class __TwigTemplate_302af537f4cf1e33e08a1186974097711c8144ca398e220e8c424b98a93c7eef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fi_FI;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html
     * @var array
     */
    protected static \$landLineareaCodes = array(
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
    );

    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html
     * @var array
     */
    protected static \$mobileNetworkAreaCodes = array(
        '040',
        '050',
        '044',
        '045',
    );

    protected static \$numberFormats = array(
        '### ####',
        '#######',
    );

    protected static \$formats = array(
        '+358 (";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["e164MobileNetworkAreaCode"]) || array_key_exists("e164MobileNetworkAreaCode", $context) ? $context["e164MobileNetworkAreaCode"] : (function () { throw new RuntimeError('Variable "e164MobileNetworkAreaCode" does not exist.', 44, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "',
        '+358 ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["e164MobileNetworkAreaCode"]) || array_key_exists("e164MobileNetworkAreaCode", $context) ? $context["e164MobileNetworkAreaCode"] : (function () { throw new RuntimeError('Variable "e164MobileNetworkAreaCode" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "',
        '+358 (";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["e164landLineAreaCode"]) || array_key_exists("e164landLineAreaCode", $context) ? $context["e164landLineAreaCode"] : (function () { throw new RuntimeError('Variable "e164landLineAreaCode" does not exist.', 46, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
        '+358 ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["e164landLineAreaCode"]) || array_key_exists("e164landLineAreaCode", $context) ? $context["e164landLineAreaCode"] : (function () { throw new RuntimeError('Variable "e164landLineAreaCode" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["mobileNetworkAreaCode"]) || array_key_exists("mobileNetworkAreaCode", $context) ? $context["mobileNetworkAreaCode"] : (function () { throw new RuntimeError('Variable "mobileNetworkAreaCode" does not exist.', 48, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 48, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["landLineAreaCode"]) || array_key_exists("landLineAreaCode", $context) ? $context["landLineAreaCode"] : (function () { throw new RuntimeError('Variable "landLineAreaCode" does not exist.', 49, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 49, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["numberFormat"]) || array_key_exists("numberFormat", $context) ? $context["numberFormat"] : (function () { throw new RuntimeError('Variable "numberFormat" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @return string
     */
    public function landLineAreaCode()
    {
        return static::randomElement(static::\$landLineareaCodes);
    }

    /**
     * @return string
     */
    public function e164landLineAreaCode()
    {
        return substr(static::randomElement(static::\$landLineareaCodes), 1);
    }

    /**
     * @return string
     */
    public function mobileNetworkAreaCode()
    {
        return static::randomElement(static::\$mobileNetworkAreaCodes);
    }

    /**
     * @return string
     */
    public function e164MobileNetworkAreaCode()
    {
        return substr(static::randomElement(static::\$mobileNetworkAreaCodes), 1);
    }

    /**
     * @return string
     */
    public function numberFormat()
    {
        return static::randomElement(static::\$numberFormats);
    }

    /**
     * @return string
     */
    public function separator()
    {
        return static::randomElement(array(' ', '-'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  112 => 48,  106 => 47,  100 => 46,  94 => 45,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fi_FI;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html
     * @var array
     */
    protected static \$landLineareaCodes = array(
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
    );

    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html
     * @var array
     */
    protected static \$mobileNetworkAreaCodes = array(
        '040',
        '050',
        '044',
        '045',
    );

    protected static \$numberFormats = array(
        '### ####',
        '#######',
    );

    protected static \$formats = array(
        '+358 ({{ e164MobileNetworkAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164MobileNetworkAreaCode }} {{ numberFormat }}',
        '+358 ({{ e164landLineAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164landLineAreaCode }} {{ numberFormat }}',
        '{{ mobileNetworkAreaCode }}{{ separator }}{{ numberFormat }}',
        '{{ landLineAreaCode }}{{ separator }}{{ numberFormat }}',
    );

    /**
     * @return string
     */
    public function landLineAreaCode()
    {
        return static::randomElement(static::\$landLineareaCodes);
    }

    /**
     * @return string
     */
    public function e164landLineAreaCode()
    {
        return substr(static::randomElement(static::\$landLineareaCodes), 1);
    }

    /**
     * @return string
     */
    public function mobileNetworkAreaCode()
    {
        return static::randomElement(static::\$mobileNetworkAreaCodes);
    }

    /**
     * @return string
     */
    public function e164MobileNetworkAreaCode()
    {
        return substr(static::randomElement(static::\$mobileNetworkAreaCodes), 1);
    }

    /**
     * @return string
     */
    public function numberFormat()
    {
        return static::randomElement(static::\$numberFormats);
    }

    /**
     * @return string
     */
    public function separator()
    {
        return static::randomElement(array(' ', '-'));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fi_FI/PhoneNumber.php");
    }
}
