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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php */
class __TwigTemplate_f40ea7d4b3b1c2a20f301190dd236812b5bbb4ccf97e8d4457f111615fe72399 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_PT;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
     /*
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Portugal
     */
    protected static \$formats = array(
        '+351 91#######',
        '+351 92#######',
        '+351 93#######',
        '+351 96#######',
        '+351 21#######',
        '+351 22#######',
        '+351 23#######',
        '+351 24#######',
        '+351 25#######',
        '+351 26#######',
        '+351 27#######',
        '+351 28#######',
        '+351 29#######',
        '91#######',
        '92#######',
        '93#######',
        '96#######',
        '21#######',
        '22#######',
        '23#######',
        '24#######',
        '25#######',
        '26#######',
        '27#######',
        '28#######',
        '29#######',
    );

    protected static \$mobileNumberPrefixes = array(
        '91#######',
        '92#######',
        '93#######',
        '96#######',
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_PT;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
     /*
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Portugal
     */
    protected static \$formats = array(
        '+351 91#######',
        '+351 92#######',
        '+351 93#######',
        '+351 96#######',
        '+351 21#######',
        '+351 22#######',
        '+351 23#######',
        '+351 24#######',
        '+351 25#######',
        '+351 26#######',
        '+351 27#######',
        '+351 28#######',
        '+351 29#######',
        '91#######',
        '92#######',
        '93#######',
        '96#######',
        '21#######',
        '22#######',
        '23#######',
        '24#######',
        '25#######',
        '26#######',
        '27#######',
        '28#######',
        '29#######',
    );

    protected static \$mobileNumberPrefixes = array(
        '91#######',
        '92#######',
        '93#######',
        '96#######',
    );

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileNumberPrefixes));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/PhoneNumber.php");
    }
}
