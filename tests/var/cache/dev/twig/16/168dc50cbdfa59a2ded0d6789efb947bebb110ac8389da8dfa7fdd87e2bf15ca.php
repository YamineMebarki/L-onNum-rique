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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php */
class __TwigTemplate_2b900edf038b93df285d006d845cca7b189a1751f093010a6b415a43848e3dfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_AU;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        // Local calls
        '#### ####',
        '####-####',
        '####.####',
        '########',

        // National dialing
        '0";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " #### ####',
        '0";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "-####-####',
        '0";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ".####.####',
        '0";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "########',

        // Optional parenthesis
        '(0";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ") #### ####',
        '(0";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ")-####-####',
        '(0";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ").####.####',
        '(0";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ")########',

        // International drops the 0
        '+61 ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " #### ####',
        '+61-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "-####-####',
        '+61.";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ".####.####',
        '+61";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["areaCode"]) || array_key_exists("areaCode", $context) ? $context["areaCode"] : (function () { throw new RuntimeError('Variable "areaCode" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "########',
    );

    // 04 Mobile telephones (Australia-wide) mostly commonly written 4 - 3 - 3 instead of 2 - 4 - 4
    protected static \$mobileFormats = array(
        '04## ### ###',
        '04##-###-###',
        '04##.###.###',
        '+61 4## ### ###',
        '+61-4##-###-###',
        '+61.4##.###.###',
    );

    protected static \$areacodes = array(
        '2', '3', '7', '8'
    );

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::\$areacodes));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  103 => 29,  99 => 28,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_AU;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        // Local calls
        '#### ####',
        '####-####',
        '####.####',
        '########',

        // National dialing
        '0{{areaCode}} #### ####',
        '0{{areaCode}}-####-####',
        '0{{areaCode}}.####.####',
        '0{{areaCode}}########',

        // Optional parenthesis
        '(0{{areaCode}}) #### ####',
        '(0{{areaCode}})-####-####',
        '(0{{areaCode}}).####.####',
        '(0{{areaCode}})########',

        // International drops the 0
        '+61 {{areaCode}} #### ####',
        '+61-{{areaCode}}-####-####',
        '+61.{{areaCode}}.####.####',
        '+61{{areaCode}}########',
    );

    // 04 Mobile telephones (Australia-wide) mostly commonly written 4 - 3 - 3 instead of 2 - 4 - 4
    protected static \$mobileFormats = array(
        '04## ### ###',
        '04##-###-###',
        '04##.###.###',
        '+61 4## ### ###',
        '+61-4##-###-###',
        '+61.4##.###.###',
    );

    protected static \$areacodes = array(
        '2', '3', '7', '8'
    );

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::\$areacodes));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_AU/PhoneNumber.php");
    }
}
