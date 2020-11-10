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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php */
class __TwigTemplate_469b2c9f1fd6e4da7ac49c6d811301ca9c6da04da837af191869781ed5cf19a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php"));

        // line 1
        echo "<?php


namespace Faker\\Provider\\en_US;


class Payment extends \\Faker\\Provider\\Payment
{
    public function bankAccountNumber()
    {
        // Length between 5 and 17, biased towards center
        \$length = self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + 5;

        return self::numerify(str_repeat('#', \$length));
    }

    public function bankRoutingNumber()
    {
        \$district = self::numberBetween(1, 12);
        \$type = self::randomElement(array(0, 0, 0, 0, 20, 20, 60));
        \$clearingCenter = self::randomDigitNotNull();
        \$state = self::randomDigit();
        \$institution = self::randomNumber(4, true);

        \$result = sprintf('%02d%01d%01d%04d', \$district + \$type, \$clearingCenter, \$state, \$institution);

        return \$result . self::calculateRoutingNumberChecksum(\$result);
    }

    public static function calculateRoutingNumberChecksum(\$routing)
    {
        return (
            7 * (\$routing[0] + \$routing[3] + \$routing[6]) +
            3 * (\$routing[1] + \$routing[4] + \$routing[7]) +
            9 * (\$routing[2] + \$routing[5])
        ) % 10;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Faker\\Provider\\en_US;


class Payment extends \\Faker\\Provider\\Payment
{
    public function bankAccountNumber()
    {
        // Length between 5 and 17, biased towards center
        \$length = self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + 5;

        return self::numerify(str_repeat('#', \$length));
    }

    public function bankRoutingNumber()
    {
        \$district = self::numberBetween(1, 12);
        \$type = self::randomElement(array(0, 0, 0, 0, 20, 20, 60));
        \$clearingCenter = self::randomDigitNotNull();
        \$state = self::randomDigit();
        \$institution = self::randomNumber(4, true);

        \$result = sprintf('%02d%01d%01d%04d', \$district + \$type, \$clearingCenter, \$state, \$institution);

        return \$result . self::calculateRoutingNumberChecksum(\$result);
    }

    public static function calculateRoutingNumberChecksum(\$routing)
    {
        return (
            7 * (\$routing[0] + \$routing[3] + \$routing[6]) +
            3 * (\$routing[1] + \$routing[4] + \$routing[7]) +
            9 * (\$routing[2] + \$routing[5])
        ) % 10;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_US/Payment.php");
    }
}
