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

/* vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php */
class __TwigTemplate_da4484b481cca15be1db8f1482d593d61101760e0c9744b22fb65c953ffabc87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\it_CH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+41 (0)## ### ## ##',
        '+41(0)#########',
        '+41 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
    );

    /**
     * An array of Swiss mobile (cell) phone number formats.
     *
     * @var array
     */
    protected static \$mobileFormats = array(
        // Local
        '075 ### ## ##',
        '075#######',
        '076 ### ## ##',
        '076#######',
        '077 ### ## ##',
        '077#######',
        '078 ### ## ##',
        '078#######',
        '079 ### ## ##',
        '079#######',
    );

    /**
     * Return a Swiss mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\it_CH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+41 (0)## ### ## ##',
        '+41(0)#########',
        '+41 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
    );

    /**
     * An array of Swiss mobile (cell) phone number formats.
     *
     * @var array
     */
    protected static \$mobileFormats = array(
        // Local
        '075 ### ## ##',
        '075#######',
        '076 ### ## ##',
        '076#######',
        '077 ### ## ##',
        '077#######',
        '078 ### ## ##',
        '078#######',
        '079 ### ## ##',
        '079#######',
    );

    /**
     * Return a Swiss mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/it_CH/PhoneNumber.php");
    }
}
