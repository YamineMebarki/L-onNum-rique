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

/* vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php */
class __TwigTemplate_52114e3d07c4df476377dd1d0c117074e01ec44a2b085b774fea1669836211bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php"));

        // line 1
        echo "<?php

namespace Faker\\Calculator;

class Iban
{
    /**
     * Generates IBAN Checksum
     *
     * @param string \$iban
     * @return string Checksum (numeric string)
     */
    public static function checksum(\$iban)
    {
        // Move first four digits to end and set checksum to '00'
        \$checkString = substr(\$iban, 4) . substr(\$iban, 0, 2) . '00';

        // Replace all letters with their number equivalents
        \$checkString = preg_replace_callback('/[A-Z]/', array('self','alphaToNumberCallback'), \$checkString);

        // Perform mod 97 and subtract from 98
        \$checksum = 98 - self::mod97(\$checkString);

        return str_pad(\$checksum, 2, '0', STR_PAD_LEFT);
    }

    /**
     * @param string \$match
     *
     * @return int
     */
    private static function alphaToNumberCallback(\$match)
    {
        return self::alphaToNumber(\$match[0]);
    }

    /**
     * Converts letter to number
     *
     * @param string \$char
     * @return int
     */
    public static function alphaToNumber(\$char)
    {
        return ord(\$char) - 55;
    }

    /**
     * Calculates mod97 on a numeric string
     *
     * @param string \$number Numeric string
     * @return int
     */
    public static function mod97(\$number)
    {
        \$checksum = (int)\$number[0];
        for (\$i = 1, \$size = strlen(\$number); \$i < \$size; \$i++) {
            \$checksum = (10 * \$checksum + (int) \$number[\$i]) % 97;
        }
        return \$checksum;
    }

    /**
     * Checks whether an IBAN has a valid checksum
     *
     * @param string \$iban
     * @return boolean
     */
    public static function isValid(\$iban)
    {
        return self::checksum(\$iban) === substr(\$iban, 2, 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Calculator;

class Iban
{
    /**
     * Generates IBAN Checksum
     *
     * @param string \$iban
     * @return string Checksum (numeric string)
     */
    public static function checksum(\$iban)
    {
        // Move first four digits to end and set checksum to '00'
        \$checkString = substr(\$iban, 4) . substr(\$iban, 0, 2) . '00';

        // Replace all letters with their number equivalents
        \$checkString = preg_replace_callback('/[A-Z]/', array('self','alphaToNumberCallback'), \$checkString);

        // Perform mod 97 and subtract from 98
        \$checksum = 98 - self::mod97(\$checkString);

        return str_pad(\$checksum, 2, '0', STR_PAD_LEFT);
    }

    /**
     * @param string \$match
     *
     * @return int
     */
    private static function alphaToNumberCallback(\$match)
    {
        return self::alphaToNumber(\$match[0]);
    }

    /**
     * Converts letter to number
     *
     * @param string \$char
     * @return int
     */
    public static function alphaToNumber(\$char)
    {
        return ord(\$char) - 55;
    }

    /**
     * Calculates mod97 on a numeric string
     *
     * @param string \$number Numeric string
     * @return int
     */
    public static function mod97(\$number)
    {
        \$checksum = (int)\$number[0];
        for (\$i = 1, \$size = strlen(\$number); \$i < \$size; \$i++) {
            \$checksum = (10 * \$checksum + (int) \$number[\$i]) % 97;
        }
        return \$checksum;
    }

    /**
     * Checks whether an IBAN has a valid checksum
     *
     * @param string \$iban
     * @return boolean
     */
    public static function isValid(\$iban)
    {
        return self::checksum(\$iban) === substr(\$iban, 2, 2);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Calculator/Iban.php");
    }
}
