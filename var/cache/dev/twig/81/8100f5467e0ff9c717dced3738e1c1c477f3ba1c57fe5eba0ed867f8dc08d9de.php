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

/* vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php */
class __TwigTemplate_1639231c9c1d5eac61f6671c4c89acbeecb8eb55f190038a96dc22591331b510 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php"));

        // line 1
        echo "<?php

namespace Faker\\Calculator;

use InvalidArgumentException;

class TCNo
{
    /**
     * Generates Turkish Identity Number Checksum
     * Gets first 9 digit as prefix and calcuates checksums
     *
     * https://en.wikipedia.org/wiki/Turkish_Identification_Number
     *
     * @param string \$identityPrefix
     * @return string Checksum (two digit)
     */
    public static function checksum(\$identityPrefix)
    {
        if (strlen((string)\$identityPrefix) !== 9) {
            throw new InvalidArgumentException('Argument should be an integer and should be 9 digits.');
        }

        \$oddSum = 0;
        \$evenSum = 0;

        \$identityArray = array_map('intval', str_split(\$identityPrefix)); // Creates array from int
        foreach (\$identityArray as \$index => \$digit) {
            if (\$index % 2 == 0) {
                \$evenSum += \$digit;
            } else {
                \$oddSum += \$digit;
            }
        }

        \$tenthDigit = (7 * \$evenSum - \$oddSum) % 10;
        \$eleventhDigit = (\$evenSum + \$oddSum + \$tenthDigit) % 10;

        return \$tenthDigit . \$eleventhDigit;
    }

    /**
     * Checks whether an TCNo has a valid checksum
     *
     * @param string \$tcNo
     * @return boolean
     */
    public static function isValid(\$tcNo)
    {
        return self::checksum(substr(\$tcNo, 0, -2)) === substr(\$tcNo, -2, 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Calculator;

use InvalidArgumentException;

class TCNo
{
    /**
     * Generates Turkish Identity Number Checksum
     * Gets first 9 digit as prefix and calcuates checksums
     *
     * https://en.wikipedia.org/wiki/Turkish_Identification_Number
     *
     * @param string \$identityPrefix
     * @return string Checksum (two digit)
     */
    public static function checksum(\$identityPrefix)
    {
        if (strlen((string)\$identityPrefix) !== 9) {
            throw new InvalidArgumentException('Argument should be an integer and should be 9 digits.');
        }

        \$oddSum = 0;
        \$evenSum = 0;

        \$identityArray = array_map('intval', str_split(\$identityPrefix)); // Creates array from int
        foreach (\$identityArray as \$index => \$digit) {
            if (\$index % 2 == 0) {
                \$evenSum += \$digit;
            } else {
                \$oddSum += \$digit;
            }
        }

        \$tenthDigit = (7 * \$evenSum - \$oddSum) % 10;
        \$eleventhDigit = (\$evenSum + \$oddSum + \$tenthDigit) % 10;

        return \$tenthDigit . \$eleventhDigit;
    }

    /**
     * Checks whether an TCNo has a valid checksum
     *
     * @param string \$tcNo
     * @return boolean
     */
    public static function isValid(\$tcNo)
    {
        return self::checksum(substr(\$tcNo, 0, -2)) === substr(\$tcNo, -2, 2);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Calculator/TCNo.php");
    }
}
