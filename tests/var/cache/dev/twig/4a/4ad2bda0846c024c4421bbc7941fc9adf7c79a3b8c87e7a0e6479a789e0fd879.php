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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php */
class __TwigTemplate_3040fe1e922eaa401dd21aa9ef0baa90257de936aebc6afff295463d2dd3db03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_US;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static \$formats = array(
        // International format
        '+1-";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-####',
        '+1 (";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "-####',
        '+1-";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "-####',
        '+1.";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".####',
        '+1";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "####',

        // Standard formats
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "-####',
        '(";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "-####',
        '1-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "-####',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ".####',

        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "-####',
        '(";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "-####',
        '1-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "-####',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 27, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 27, $this->source); })()), "html", null, true);
        echo ".####',

        // Extensions
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "-#### x###',
        '(";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 31, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "-#### x###',
        '1-";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-#### x###',
        '";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ".#### x###',

        '";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "-#### x####',
        '(";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "-#### x####',
        '1-";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "-#### x####',
        '";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 38, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 38, $this->source); })()), "html", null, true);
        echo ".#### x####',

        '";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "-#### x#####',
        '(";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 41, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "-#### x#####',
        '1-";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "-#### x#####',
        '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 43, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 43, $this->source); })()), "html", null, true);
        echo ".#### x#####'
    );

    /**
     * @see https://en.wikipedia.org/wiki/Toll-free_telephone_number#United_States
     */
    protected static \$tollFreeAreaCodes = array(
        800, 844, 855, 866, 877, 888
    );
    protected static \$tollFreeFormats = array(
        // Standard formats
        '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["tollFreeAreaCode"]) || array_key_exists("tollFreeAreaCode", $context) ? $context["tollFreeAreaCode"] : (function () { throw new RuntimeError('Variable "tollFreeAreaCode" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "-####',
        '(";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["tollFreeAreaCode"]) || array_key_exists("tollFreeAreaCode", $context) ? $context["tollFreeAreaCode"] : (function () { throw new RuntimeError('Variable "tollFreeAreaCode" does not exist.', 55, $this->source); })()), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "-####',
        '1-";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["tollFreeAreaCode"]) || array_key_exists("tollFreeAreaCode", $context) ? $context["tollFreeAreaCode"] : (function () { throw new RuntimeError('Variable "tollFreeAreaCode" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "-####',
        '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["tollFreeAreaCode"]) || array_key_exists("tollFreeAreaCode", $context) ? $context["tollFreeAreaCode"] : (function () { throw new RuntimeError('Variable "tollFreeAreaCode" does not exist.', 57, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["exchangeCode"]) || array_key_exists("exchangeCode", $context) ? $context["exchangeCode"] : (function () { throw new RuntimeError('Variable "exchangeCode" does not exist.', 57, $this->source); })()), "html", null, true);
        echo ".####',
    );

    public function tollFreeAreaCode()
    {
        return self::randomElement(static::\$tollFreeAreaCodes);
    }

    public function tollFreePhoneNumber()
    {
        \$format = self::randomElement(static::\$tollFreeFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }

    /**
     * NPA-format area code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function areaCode()
    {
        \$digits[] = self::numberBetween(2, 9);
        \$digits[] = self::randomDigit();
        \$digits[] = self::randomDigitNot(\$digits[1]);

        return join('', \$digits);
    }

    /**
     * NXX-format central office exchange code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function exchangeCode()
    {
        \$digits[] = self::numberBetween(2, 9);
        \$digits[] = self::randomDigit();

        if (\$digits[1] === 1) {
            \$digits[] = self::randomDigitNot(1);
        } else {
            \$digits[] = self::randomDigit();
        }

        return join('', \$digits);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 57,  234 => 56,  228 => 55,  222 => 54,  206 => 43,  200 => 42,  194 => 41,  188 => 40,  181 => 38,  175 => 37,  169 => 36,  163 => 35,  156 => 33,  150 => 32,  144 => 31,  138 => 30,  130 => 27,  124 => 26,  118 => 25,  112 => 24,  105 => 22,  99 => 21,  93 => 20,  87 => 19,  80 => 16,  74 => 15,  68 => 14,  62 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_US;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static \$formats = array(
        // International format
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1 ({{areaCode}}) {{exchangeCode}}-####',
        '+1-{{areaCode}}-{{exchangeCode}}-####',
        '+1.{{areaCode}}.{{exchangeCode}}.####',
        '+1{{areaCode}}{{exchangeCode}}####',

        // Standard formats
        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',

        '{{areaCode}}-{{exchangeCode}}-####',
        '({{areaCode}}) {{exchangeCode}}-####',
        '1-{{areaCode}}-{{exchangeCode}}-####',
        '{{areaCode}}.{{exchangeCode}}.####',

        // Extensions
        '{{areaCode}}-{{exchangeCode}}-#### x###',
        '({{areaCode}}) {{exchangeCode}}-#### x###',
        '1-{{areaCode}}-{{exchangeCode}}-#### x###',
        '{{areaCode}}.{{exchangeCode}}.#### x###',

        '{{areaCode}}-{{exchangeCode}}-#### x####',
        '({{areaCode}}) {{exchangeCode}}-#### x####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x####',
        '{{areaCode}}.{{exchangeCode}}.#### x####',

        '{{areaCode}}-{{exchangeCode}}-#### x#####',
        '({{areaCode}}) {{exchangeCode}}-#### x#####',
        '1-{{areaCode}}-{{exchangeCode}}-#### x#####',
        '{{areaCode}}.{{exchangeCode}}.#### x#####'
    );

    /**
     * @see https://en.wikipedia.org/wiki/Toll-free_telephone_number#United_States
     */
    protected static \$tollFreeAreaCodes = array(
        800, 844, 855, 866, 877, 888
    );
    protected static \$tollFreeFormats = array(
        // Standard formats
        '{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '({{tollFreeAreaCode}}) {{exchangeCode}}-####',
        '1-{{tollFreeAreaCode}}-{{exchangeCode}}-####',
        '{{tollFreeAreaCode}}.{{exchangeCode}}.####',
    );

    public function tollFreeAreaCode()
    {
        return self::randomElement(static::\$tollFreeAreaCodes);
    }

    public function tollFreePhoneNumber()
    {
        \$format = self::randomElement(static::\$tollFreeFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }

    /**
     * NPA-format area code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function areaCode()
    {
        \$digits[] = self::numberBetween(2, 9);
        \$digits[] = self::randomDigit();
        \$digits[] = self::randomDigitNot(\$digits[1]);

        return join('', \$digits);
    }

    /**
     * NXX-format central office exchange code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function exchangeCode()
    {
        \$digits[] = self::numberBetween(2, 9);
        \$digits[] = self::randomDigit();

        if (\$digits[1] === 1) {
            \$digits[] = self::randomDigitNot(1);
        } else {
            \$digits[] = self::randomDigit();
        }

        return join('', \$digits);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_US/PhoneNumber.php");
    }
}
