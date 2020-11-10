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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php */
class __TwigTemplate_77c26a00dd38abad9e9e90ad88ba411752da91d5881cfb7ff09675fee4086542 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_SG;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$internationalCodePrefix = array(
        '+65',
        '65',
    );

    protected static \$zeroToEight = array(0, 1, 2, 3, 4, 5, 6, 7, 8);

    protected static \$oneToNine = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    protected static \$mobileNumberFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "9";
        echo twig_escape_filter($this->env, (isset($context["zeroToEight"]) || array_key_exists("zeroToEight", $context) ? $context["zeroToEight"] : (function () { throw new RuntimeError('Variable "zeroToEight" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "## ####',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " 9";
        echo twig_escape_filter($this->env, (isset($context["zeroToEight"]) || array_key_exists("zeroToEight", $context) ? $context["zeroToEight"] : (function () { throw new RuntimeError('Variable "zeroToEight" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "## ####',
        '9";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["zeroToEight"]) || array_key_exists("zeroToEight", $context) ? $context["zeroToEight"] : (function () { throw new RuntimeError('Variable "zeroToEight" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "## ####',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "8";
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "## ####',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " 8";
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "## ####',
        '8";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "## ####',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "7";
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "## ####',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " 7";
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "## ####',
        '7";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["oneToNine"]) || array_key_exists("oneToNine", $context) ? $context["oneToNine"] : (function () { throw new RuntimeError('Variable "oneToNine" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "## ####',
    );

    protected static \$fixedLineNumberFormats = array(
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "6### ####',
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " 6### ####',
        '6### ####',
    );

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static \$formats = array(
        '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["mobileNumber"]) || array_key_exists("mobileNumber", $context) ? $context["mobileNumber"] : (function () { throw new RuntimeError('Variable "mobileNumber" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["fixedLineNumber"]) || array_key_exists("fixedLineNumber", $context) ? $context["fixedLineNumber"] : (function () { throw new RuntimeError('Variable "fixedLineNumber" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$voipNumber = array(
        '";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "3### ####',
        '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["internationalCodePrefix"]) || array_key_exists("internationalCodePrefix", $context) ? $context["internationalCodePrefix"] : (function () { throw new RuntimeError('Variable "internationalCodePrefix" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " 3### ####',
        '3### ####',
    );

    protected static \$tollFreeInternationalNumber = array(
        '800 ### ####'
    );

    protected static \$tollFreeLineNumber = array(
        '1800 ### ####'
    );

    protected static \$premiumPhoneNumber = array(
        '1900 ### ####'
    );

    public function tollFreeInternationalNumber()
    {
        return static::randomElement(static::\$tollFreeInternationalNumber);
    }

    public function tollFreeLineNumber()
    {
        return static::randomElement(static::\$tollFreeLineNumber);
    }

    public function premiumPhoneNumber()
    {
        return static::randomElement(static::\$premiumPhoneNumber);
    }

    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$mobileNumberFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }

    public function fixedLineNumber()
    {
        \$format = static::randomElement(static::\$fixedLineNumberFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }

    public function voipNumber()
    {
        \$format = static::randomElement(static::\$voipNumber);

        return \$this->generator->parse(\$format);
    }

    public function internationalCodePrefix()
    {
        \$format = static::randomElement(static::\$internationalCodePrefix);

        return \$this->generator->parse(\$format);
    }

    public function zeroToEight()
    {
        return static::randomElement(static::\$zeroToEight);
    }

    public function oneToNine()
    {
        return static::randomElement(static::\$oneToNine);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  136 => 41,  129 => 37,  125 => 36,  116 => 30,  112 => 29,  105 => 25,  99 => 24,  93 => 23,  89 => 22,  83 => 21,  77 => 20,  73 => 19,  67 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_SG;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$internationalCodePrefix = array(
        '+65',
        '65',
    );

    protected static \$zeroToEight = array(0, 1, 2, 3, 4, 5, 6, 7, 8);

    protected static \$oneToNine = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    protected static \$mobileNumberFormats = array(
        '{{internationalCodePrefix}}9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}} 9{{zeroToEight}}## ####',
        '9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}}8{{oneToNine}}## ####',
        '{{internationalCodePrefix}} 8{{oneToNine}}## ####',
        '8{{oneToNine}}## ####',
        '{{internationalCodePrefix}}7{{oneToNine}}## ####',
        '{{internationalCodePrefix}} 7{{oneToNine}}## ####',
        '7{{oneToNine}}## ####',
    );

    protected static \$fixedLineNumberFormats = array(
        '{{internationalCodePrefix}}6### ####',
        '{{internationalCodePrefix}} 6### ####',
        '6### ####',
    );

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static \$formats = array(
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
    );

    protected static \$voipNumber = array(
        '{{internationalCodePrefix}}3### ####',
        '{{internationalCodePrefix}} 3### ####',
        '3### ####',
    );

    protected static \$tollFreeInternationalNumber = array(
        '800 ### ####'
    );

    protected static \$tollFreeLineNumber = array(
        '1800 ### ####'
    );

    protected static \$premiumPhoneNumber = array(
        '1900 ### ####'
    );

    public function tollFreeInternationalNumber()
    {
        return static::randomElement(static::\$tollFreeInternationalNumber);
    }

    public function tollFreeLineNumber()
    {
        return static::randomElement(static::\$tollFreeLineNumber);
    }

    public function premiumPhoneNumber()
    {
        return static::randomElement(static::\$premiumPhoneNumber);
    }

    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$mobileNumberFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }

    public function fixedLineNumber()
    {
        \$format = static::randomElement(static::\$fixedLineNumberFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }

    public function voipNumber()
    {
        \$format = static::randomElement(static::\$voipNumber);

        return \$this->generator->parse(\$format);
    }

    public function internationalCodePrefix()
    {
        \$format = static::randomElement(static::\$internationalCodePrefix);

        return \$this->generator->parse(\$format);
    }

    public function zeroToEight()
    {
        return static::randomElement(static::\$zeroToEight);
    }

    public function oneToNine()
    {
        return static::randomElement(static::\$oneToNine);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_SG/PhoneNumber.php");
    }
}
