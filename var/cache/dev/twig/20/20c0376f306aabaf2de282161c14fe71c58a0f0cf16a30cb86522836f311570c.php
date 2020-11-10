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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php */
class __TwigTemplate_8fe0da67fa6e41600ee3c516cbf3baf36da7e6eba2889c78894c4eb3de415c58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Error;
use PhpParser\\Node\\Scalar;

class LNumber extends Scalar
{
    /* For use in \"kind\" attribute */
    const KIND_BIN = 2;
    const KIND_OCT = 8;
    const KIND_DEC = 10;
    const KIND_HEX = 16;

    /** @var int Number value */
    public \$value;

    /**
     * Constructs an integer number scalar node.
     *
     * @param int   \$value      Value of the number
     * @param array \$attributes Additional attributes
     */
    public function __construct(int \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * Constructs an LNumber node from a string number literal.
     *
     * @param string \$str               String number literal (decimal, octal, hex or binary)
     * @param array  \$attributes        Additional attributes
     * @param bool   \$allowInvalidOctal Whether to allow invalid octal numbers (PHP 5)
     *
     * @return LNumber The constructed LNumber, including kind attribute
     */
    public static function fromString(string \$str, array \$attributes = [], bool \$allowInvalidOctal = false) : LNumber {
        \$str = str_replace('_', '', \$str);

        if ('0' !== \$str[0] || '0' === \$str) {
            \$attributes['kind'] = LNumber::KIND_DEC;
            return new LNumber((int) \$str, \$attributes);
        }

        if ('x' === \$str[1] || 'X' === \$str[1]) {
            \$attributes['kind'] = LNumber::KIND_HEX;
            return new LNumber(hexdec(\$str), \$attributes);
        }

        if ('b' === \$str[1] || 'B' === \$str[1]) {
            \$attributes['kind'] = LNumber::KIND_BIN;
            return new LNumber(bindec(\$str), \$attributes);
        }

        if (!\$allowInvalidOctal && strpbrk(\$str, '89')) {
            throw new Error('Invalid numeric literal', \$attributes);
        }

        // use intval instead of octdec to get proper cutting behavior with malformed numbers
        \$attributes['kind'] = LNumber::KIND_OCT;
        return new LNumber(intval(\$str, 8), \$attributes);
    }
    
    public function getType() : string {
        return 'Scalar_LNumber';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Error;
use PhpParser\\Node\\Scalar;

class LNumber extends Scalar
{
    /* For use in \"kind\" attribute */
    const KIND_BIN = 2;
    const KIND_OCT = 8;
    const KIND_DEC = 10;
    const KIND_HEX = 16;

    /** @var int Number value */
    public \$value;

    /**
     * Constructs an integer number scalar node.
     *
     * @param int   \$value      Value of the number
     * @param array \$attributes Additional attributes
     */
    public function __construct(int \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * Constructs an LNumber node from a string number literal.
     *
     * @param string \$str               String number literal (decimal, octal, hex or binary)
     * @param array  \$attributes        Additional attributes
     * @param bool   \$allowInvalidOctal Whether to allow invalid octal numbers (PHP 5)
     *
     * @return LNumber The constructed LNumber, including kind attribute
     */
    public static function fromString(string \$str, array \$attributes = [], bool \$allowInvalidOctal = false) : LNumber {
        \$str = str_replace('_', '', \$str);

        if ('0' !== \$str[0] || '0' === \$str) {
            \$attributes['kind'] = LNumber::KIND_DEC;
            return new LNumber((int) \$str, \$attributes);
        }

        if ('x' === \$str[1] || 'X' === \$str[1]) {
            \$attributes['kind'] = LNumber::KIND_HEX;
            return new LNumber(hexdec(\$str), \$attributes);
        }

        if ('b' === \$str[1] || 'B' === \$str[1]) {
            \$attributes['kind'] = LNumber::KIND_BIN;
            return new LNumber(bindec(\$str), \$attributes);
        }

        if (!\$allowInvalidOctal && strpbrk(\$str, '89')) {
            throw new Error('Invalid numeric literal', \$attributes);
        }

        // use intval instead of octdec to get proper cutting behavior with malformed numbers
        \$attributes['kind'] = LNumber::KIND_OCT;
        return new LNumber(intval(\$str, 8), \$attributes);
    }
    
    public function getType() : string {
        return 'Scalar_LNumber';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/LNumber.php");
    }
}
