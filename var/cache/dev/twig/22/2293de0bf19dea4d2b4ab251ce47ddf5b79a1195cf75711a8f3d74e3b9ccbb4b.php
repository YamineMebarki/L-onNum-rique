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

/* vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php */
class __TwigTemplate_47094b0466038c8fdfe474e5f9c0e47ec3af641411c87b96c5bd113287d65929 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php"));

        // line 1
        echo "<?php

namespace Faker\\Calculator;

use InvalidArgumentException;

/**
 * Utility class for generating and validating Luhn numbers.
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn
{
    /**
     * @param string \$number
     * @return int
     */
    private static function checksum(\$number)
    {
        \$number = (string) \$number;
        \$length = strlen(\$number);
        \$sum = 0;
        for (\$i = \$length - 1; \$i >= 0; \$i -= 2) {
            \$sum += \$number{\$i};
        }
        for (\$i = \$length - 2; \$i >= 0; \$i -= 2) {
            \$sum += array_sum(str_split(\$number{\$i} * 2));
        }

        return \$sum % 10;
    }

    /**
     * @param \$partialNumber
     * @return string
     */
    public static function computeCheckDigit(\$partialNumber)
    {
        \$checkDigit = self::checksum(\$partialNumber . '0');
        if (\$checkDigit === 0) {
            return 0;
        }

        return (string) (10 - \$checkDigit);
    }

    /**
     * Checks whether a number (partial number + check digit) is Luhn compliant
     *
     * @param string \$number
     * @return bool
     */
    public static function isValid(\$number)
    {
        return self::checksum(\$number) === 0;
    }

    /**
     * Generate a Luhn compliant number.
     *
     * @param string \$partialValue
     *
     * @return string
     */
    public static function generateLuhnNumber(\$partialValue)
    {
        if (!preg_match('/^\\d+\$/', \$partialValue)) {
            throw new InvalidArgumentException('Argument should be an integer.');
        }
        return \$partialValue . Luhn::computeCheckDigit(\$partialValue);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php";
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

/**
 * Utility class for generating and validating Luhn numbers.
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn
{
    /**
     * @param string \$number
     * @return int
     */
    private static function checksum(\$number)
    {
        \$number = (string) \$number;
        \$length = strlen(\$number);
        \$sum = 0;
        for (\$i = \$length - 1; \$i >= 0; \$i -= 2) {
            \$sum += \$number{\$i};
        }
        for (\$i = \$length - 2; \$i >= 0; \$i -= 2) {
            \$sum += array_sum(str_split(\$number{\$i} * 2));
        }

        return \$sum % 10;
    }

    /**
     * @param \$partialNumber
     * @return string
     */
    public static function computeCheckDigit(\$partialNumber)
    {
        \$checkDigit = self::checksum(\$partialNumber . '0');
        if (\$checkDigit === 0) {
            return 0;
        }

        return (string) (10 - \$checkDigit);
    }

    /**
     * Checks whether a number (partial number + check digit) is Luhn compliant
     *
     * @param string \$number
     * @return bool
     */
    public static function isValid(\$number)
    {
        return self::checksum(\$number) === 0;
    }

    /**
     * Generate a Luhn compliant number.
     *
     * @param string \$partialValue
     *
     * @return string
     */
    public static function generateLuhnNumber(\$partialValue)
    {
        if (!preg_match('/^\\d+\$/', \$partialValue)) {
            throw new InvalidArgumentException('Argument should be an integer.');
        }
        return \$partialValue . Luhn::computeCheckDigit(\$partialValue);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Calculator/Luhn.php");
    }
}
