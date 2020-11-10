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

/* vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php */
class __TwigTemplate_d51531a45417a60b37eb9fe29efd8cb478ae242a0e5bd9234eb703d6be8534f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

/**
 * @see http://en.wikipedia.org/wiki/EAN-13
 * @see http://en.wikipedia.org/wiki/ISBN
 */
class Barcode extends Base
{
    private function ean(\$length = 13)
    {
        \$code = static::numerify(str_repeat('#', \$length - 1));

        return \$code . static::eanChecksum(\$code);
    }

    /**
     * Utility function for computing EAN checksums
     *
     * @param string \$input
     *
     * @return integer
     */
    protected static function eanChecksum(\$input)
    {
        \$sequence = (strlen(\$input) + 1) === 8 ? array(3, 1) : array(1, 3);
        \$sums = 0;
        foreach (str_split(\$input) as \$n => \$digit) {
            \$sums += \$digit * \$sequence[\$n % 2];
        }
        return (10 - \$sums % 10) % 10;
    }

    /**
     * ISBN-10 check digit
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number#ISBN-10_check_digits
     *
     * @param  string           \$input ISBN without check-digit
     * @throws \\LengthException When wrong input length passed
     *
     * @return integer Check digit
     */
    protected static function isbnChecksum(\$input)
    {
        // We're calculating check digit for ISBN-10
        // so, the length of the input should be 9
        \$length = 9;

        if (strlen(\$input) !== \$length) {
            throw new \\LengthException(sprintf('Input length should be equal to %d', \$length));
        }

        \$digits = str_split(\$input);
        array_walk(
            \$digits,
            function (&\$digit, \$position) {
                \$digit = (10 - \$position) * \$digit;
            }
        );
        \$result = (11 - array_sum(\$digits) % 11) % 11;

        // 10 is replaced by X
        return (\$result < 10)?\$result:'X';
    }

    /**
     * Get a random EAN13 barcode.
     * @return string
     * @example '4006381333931'
     */
    public function ean13()
    {
        return \$this->ean(13);
    }

    /**
     * Get a random EAN8 barcode.
     * @return string
     * @example '73513537'
     */
    public function ean8()
    {
        return \$this->ean(8);
    }

    /**
     * Get a random ISBN-10 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '4881416324'
     */
    public function isbn10()
    {
        \$code = static::numerify(str_repeat('#', 9));

        return \$code . static::isbnChecksum(\$code);
    }

    /**
     * Get a random ISBN-13 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '9790404436093'
     */
    public function isbn13()
    {
        \$code = '97' . static::numberBetween(8, 9) . static::numerify(str_repeat('#', 9));

        return \$code . static::eanChecksum(\$code);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

/**
 * @see http://en.wikipedia.org/wiki/EAN-13
 * @see http://en.wikipedia.org/wiki/ISBN
 */
class Barcode extends Base
{
    private function ean(\$length = 13)
    {
        \$code = static::numerify(str_repeat('#', \$length - 1));

        return \$code . static::eanChecksum(\$code);
    }

    /**
     * Utility function for computing EAN checksums
     *
     * @param string \$input
     *
     * @return integer
     */
    protected static function eanChecksum(\$input)
    {
        \$sequence = (strlen(\$input) + 1) === 8 ? array(3, 1) : array(1, 3);
        \$sums = 0;
        foreach (str_split(\$input) as \$n => \$digit) {
            \$sums += \$digit * \$sequence[\$n % 2];
        }
        return (10 - \$sums % 10) % 10;
    }

    /**
     * ISBN-10 check digit
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number#ISBN-10_check_digits
     *
     * @param  string           \$input ISBN without check-digit
     * @throws \\LengthException When wrong input length passed
     *
     * @return integer Check digit
     */
    protected static function isbnChecksum(\$input)
    {
        // We're calculating check digit for ISBN-10
        // so, the length of the input should be 9
        \$length = 9;

        if (strlen(\$input) !== \$length) {
            throw new \\LengthException(sprintf('Input length should be equal to %d', \$length));
        }

        \$digits = str_split(\$input);
        array_walk(
            \$digits,
            function (&\$digit, \$position) {
                \$digit = (10 - \$position) * \$digit;
            }
        );
        \$result = (11 - array_sum(\$digits) % 11) % 11;

        // 10 is replaced by X
        return (\$result < 10)?\$result:'X';
    }

    /**
     * Get a random EAN13 barcode.
     * @return string
     * @example '4006381333931'
     */
    public function ean13()
    {
        return \$this->ean(13);
    }

    /**
     * Get a random EAN8 barcode.
     * @return string
     * @example '73513537'
     */
    public function ean8()
    {
        return \$this->ean(8);
    }

    /**
     * Get a random ISBN-10 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '4881416324'
     */
    public function isbn10()
    {
        \$code = static::numerify(str_repeat('#', 9));

        return \$code . static::isbnChecksum(\$code);
    }

    /**
     * Get a random ISBN-13 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '9790404436093'
     */
    public function isbn13()
    {
        \$code = '97' . static::numberBetween(8, 9) . static::numerify(str_repeat('#', 9));

        return \$code . static::eanChecksum(\$code);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Barcode.php");
    }
}
