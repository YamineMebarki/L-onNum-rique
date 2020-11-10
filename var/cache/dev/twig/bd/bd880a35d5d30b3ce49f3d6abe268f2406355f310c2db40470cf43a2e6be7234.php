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

/* vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php */
class __TwigTemplate_c238c0a15cda3fc335e53885794b3c76766683e0cfb97037331f46b492b2ad0d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fa_IR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://fa.wikipedia.org/wiki/%D8%B4%D9%85%D8%A7%D8%B1%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C_%D8%AA%D9%84%D9%81%D9%86_%D8%AF%D8%B1_%D8%A7%DB%8C%D8%B1%D8%A7%D9%86#.D8.AA.D9.84.D9.81.D9.86.E2.80.8C.D9.87.D8.A7.DB.8C_.D9.87.D9.85.D8.B1.D8.A7.D9.87
     */
    protected static \$formats = array(
        '021########',
        '026########',
        '031########',
    );
    protected static \$mobileNumberPrefixes = array(
        '0910#######',//mci
        '0911#######',
        '0912#######',
        '0913#######',
        '0914#######',
        '0915#######',
        '0916#######',
        '0917#######',
        '0918#######',
        '0919#######',
        '0901#######',
        '0901#######',
        '0902#######',
        '0903#######',
        '0930#######',
        '0933#######',
        '0935#######',
        '0936#######',
        '0937#######',
        '0938#######',
        '0939#######',
        '0920#######',
        '0921#######',
        '0937#######',
        '0937#######',
    );
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileNumberPrefixes));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fa_IR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://fa.wikipedia.org/wiki/%D8%B4%D9%85%D8%A7%D8%B1%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C_%D8%AA%D9%84%D9%81%D9%86_%D8%AF%D8%B1_%D8%A7%DB%8C%D8%B1%D8%A7%D9%86#.D8.AA.D9.84.D9.81.D9.86.E2.80.8C.D9.87.D8.A7.DB.8C_.D9.87.D9.85.D8.B1.D8.A7.D9.87
     */
    protected static \$formats = array(
        '021########',
        '026########',
        '031########',
    );
    protected static \$mobileNumberPrefixes = array(
        '0910#######',//mci
        '0911#######',
        '0912#######',
        '0913#######',
        '0914#######',
        '0915#######',
        '0916#######',
        '0917#######',
        '0918#######',
        '0919#######',
        '0901#######',
        '0901#######',
        '0902#######',
        '0903#######',
        '0930#######',
        '0933#######',
        '0935#######',
        '0936#######',
        '0937#######',
        '0938#######',
        '0939#######',
        '0920#######',
        '0921#######',
        '0937#######',
        '0937#######',
    );
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileNumberPrefixes));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/PhoneNumber.php");
    }
}
