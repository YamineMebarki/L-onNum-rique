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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php */
class __TwigTemplate_952ac2da7965762e9431c1194c0744078274ed9f22d5a64e21208b75d295f536 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_ZA;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+27(";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ")#######',
        '+27";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "#######',
        '0";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "#######',
        '0";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ### ####',
        '0";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-###-####',
    );

    protected static \$cellphoneFormats = array(
        '+27";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["cellphoneCode"]) || array_key_exists("cellphoneCode", $context) ? $context["cellphoneCode"] : (function () { throw new RuntimeError('Variable "cellphoneCode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "#######',
        '0";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["cellphoneCode"]) || array_key_exists("cellphoneCode", $context) ? $context["cellphoneCode"] : (function () { throw new RuntimeError('Variable "cellphoneCode" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "#######',
        '0";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["cellphoneCode"]) || array_key_exists("cellphoneCode", $context) ? $context["cellphoneCode"] : (function () { throw new RuntimeError('Variable "cellphoneCode" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ### ####',
        '0";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cellphoneCode"]) || array_key_exists("cellphoneCode", $context) ? $context["cellphoneCode"] : (function () { throw new RuntimeError('Variable "cellphoneCode" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "-###-####',
    );

    protected static \$specialFormats = array(
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["specialCode"]) || array_key_exists("specialCode", $context) ? $context["specialCode"] : (function () { throw new RuntimeError('Variable "specialCode" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "#######',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["specialCode"]) || array_key_exists("specialCode", $context) ? $context["specialCode"] : (function () { throw new RuntimeError('Variable "specialCode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ### ####',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["specialCode"]) || array_key_exists("specialCode", $context) ? $context["specialCode"] : (function () { throw new RuntimeError('Variable "specialCode" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "-###-####',
        '(";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["specialCode"]) || array_key_exists("specialCode", $context) ? $context["specialCode"] : (function () { throw new RuntimeError('Variable "specialCode" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ")###-####',
    );

    protected static \$tollFreeAreaCodes = array(
        '0800', '0860', '0861', '0862',
    );

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     */
    public static function areaCode()
    {
        \$digits[] = self::numberBetween(1, 5);
        switch (\$digits[0]) {
            case 1:
                \$digits[] = self::numberBetween(1, 8);
                break;
            case 2:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(5, 6)) ? \$number + 2 : \$number;
                break;
            case 3:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(7, 8)) ? \$number - 2 : \$number;
                break;
            case 4:
                \$digits[] = self::numberBetween(1, 9);
                break;
            case 5:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(2, 5)) ? \$number + 2 : \$number;
                break;
        }

        return implode('', \$digits);
    }

    public static function cellphoneCode()
    {
        \$digits[] = self::numberBetween(6, 8);
        switch (\$digits[0]) {
            case 6:
                \$digits[] = self::numberBetween(0, 2);
                break;
            case 7:
                \$number = self::numberBetween(1, 9);
                \$digits[] = in_array(\$number, array(5, 7)) ? \$number + 1 : \$number;
                break;
            case 8:
                \$digits[] = self::numberBetween(1, 9);
                break;
        }

        return implode('', \$digits);
    }

    public static function specialCode()
    {
        return static::randomElement(static::\$tollFreeAreaCodes);
    }

    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$cellphoneFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }

    public function tollFreeNumber()
    {
        \$format = static::randomElement(static::\$specialFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  102 => 25,  98 => 24,  94 => 23,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_ZA;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+27({{areaCode}})#######',
        '+27{{areaCode}}#######',
        '0{{areaCode}}#######',
        '0{{areaCode}} ### ####',
        '0{{areaCode}}-###-####',
    );

    protected static \$cellphoneFormats = array(
        '+27{{cellphoneCode}}#######',
        '0{{cellphoneCode}}#######',
        '0{{cellphoneCode}} ### ####',
        '0{{cellphoneCode}}-###-####',
    );

    protected static \$specialFormats = array(
        '{{specialCode}}#######',
        '{{specialCode}} ### ####',
        '{{specialCode}}-###-####',
        '({{specialCode}})###-####',
    );

    protected static \$tollFreeAreaCodes = array(
        '0800', '0860', '0861', '0862',
    );

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     */
    public static function areaCode()
    {
        \$digits[] = self::numberBetween(1, 5);
        switch (\$digits[0]) {
            case 1:
                \$digits[] = self::numberBetween(1, 8);
                break;
            case 2:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(5, 6)) ? \$number + 2 : \$number;
                break;
            case 3:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(7, 8)) ? \$number - 2 : \$number;
                break;
            case 4:
                \$digits[] = self::numberBetween(1, 9);
                break;
            case 5:
                \$number = self::numberBetween(1, 8);
                \$digits[] = in_array(\$number, array(2, 5)) ? \$number + 2 : \$number;
                break;
        }

        return implode('', \$digits);
    }

    public static function cellphoneCode()
    {
        \$digits[] = self::numberBetween(6, 8);
        switch (\$digits[0]) {
            case 6:
                \$digits[] = self::numberBetween(0, 2);
                break;
            case 7:
                \$number = self::numberBetween(1, 9);
                \$digits[] = in_array(\$number, array(5, 7)) ? \$number + 1 : \$number;
                break;
            case 8:
                \$digits[] = self::numberBetween(1, 9);
                break;
        }

        return implode('', \$digits);
    }

    public static function specialCode()
    {
        return static::randomElement(static::\$tollFreeAreaCodes);
    }

    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$cellphoneFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }

    public function tollFreeNumber()
    {
        \$format = static::randomElement(static::\$specialFormats);

        return self::numerify(\$this->generator->parse(\$format));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/PhoneNumber.php");
    }
}
