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

/* vendor/twig/twig/src/Token.php */
class __TwigTemplate_d9f7ad6febc1a1a369ccf7f2b40e8d84ec3fe398e6070e99c983c9d5af2a065d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Token.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Token.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Represents a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Token
{
    private \$value;
    private \$type;
    private \$lineno;

    const EOF_TYPE = -1;
    const TEXT_TYPE = 0;
    const BLOCK_START_TYPE = 1;
    const VAR_START_TYPE = 2;
    const BLOCK_END_TYPE = 3;
    const VAR_END_TYPE = 4;
    const NAME_TYPE = 5;
    const NUMBER_TYPE = 6;
    const STRING_TYPE = 7;
    const OPERATOR_TYPE = 8;
    const PUNCTUATION_TYPE = 9;
    const INTERPOLATION_START_TYPE = 10;
    const INTERPOLATION_END_TYPE = 11;
    const ARROW_TYPE = 12;

    /**
     * @param int    \$type   The type of the token
     * @param string \$value  The token value
     * @param int    \$lineno The line position in the source
     */
    public function __construct(\$type, \$value, \$lineno)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->lineno = \$lineno;
    }

    public function __toString()
    {
        return sprintf('%s(%s)', self::typeToString(\$this->type, true), \$this->value);
    }

    /**
     * Tests the current token for a type and/or a value.
     *
     * Parameters may be:
     *  * just type
     *  * type and value (or array of possible values)
     *  * just value (or array of possible values) (NAME_TYPE is used as type)
     *
     * @param array|string|int  \$type   The type to test
     * @param array|string|null \$values The token value
     *
     * @return bool
     */
    public function test(\$type, \$values = null)
    {
        if (null === \$values && !\\is_int(\$type)) {
            \$values = \$type;
            \$type = self::NAME_TYPE;
        }

        return (\$this->type === \$type) && (
            null === \$values ||
            (\\is_array(\$values) && \\in_array(\$this->value, \$values)) ||
            \$this->value == \$values
        );
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return \$this->lineno;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the constant representation (internal) of a given type.
     *
     * @param int  \$type  The type as an integer
     * @param bool \$short Whether to return a short representation or not
     *
     * @return string The string representation
     */
    public static function typeToString(\$type, \$short = false)
    {
        switch (\$type) {
            case self::EOF_TYPE:
                \$name = 'EOF_TYPE';
                break;
            case self::TEXT_TYPE:
                \$name = 'TEXT_TYPE';
                break;
            case self::BLOCK_START_TYPE:
                \$name = 'BLOCK_START_TYPE';
                break;
            case self::VAR_START_TYPE:
                \$name = 'VAR_START_TYPE';
                break;
            case self::BLOCK_END_TYPE:
                \$name = 'BLOCK_END_TYPE';
                break;
            case self::VAR_END_TYPE:
                \$name = 'VAR_END_TYPE';
                break;
            case self::NAME_TYPE:
                \$name = 'NAME_TYPE';
                break;
            case self::NUMBER_TYPE:
                \$name = 'NUMBER_TYPE';
                break;
            case self::STRING_TYPE:
                \$name = 'STRING_TYPE';
                break;
            case self::OPERATOR_TYPE:
                \$name = 'OPERATOR_TYPE';
                break;
            case self::PUNCTUATION_TYPE:
                \$name = 'PUNCTUATION_TYPE';
                break;
            case self::INTERPOLATION_START_TYPE:
                \$name = 'INTERPOLATION_START_TYPE';
                break;
            case self::INTERPOLATION_END_TYPE:
                \$name = 'INTERPOLATION_END_TYPE';
                break;
            case self::ARROW_TYPE:
                \$name = 'ARROW_TYPE';
                break;
            default:
                throw new \\LogicException(sprintf('Token of type \"%s\" does not exist.', \$type));
        }

        return \$short ? \$name : 'Twig\\Token::'.\$name;
    }

    /**
     * Returns the English representation of a given type.
     *
     * @param int \$type The type as an integer
     *
     * @return string The string representation
     */
    public static function typeToEnglish(\$type)
    {
        switch (\$type) {
            case self::EOF_TYPE:
                return 'end of template';
            case self::TEXT_TYPE:
                return 'text';
            case self::BLOCK_START_TYPE:
                return 'begin of statement block';
            case self::VAR_START_TYPE:
                return 'begin of print statement';
            case self::BLOCK_END_TYPE:
                return 'end of statement block';
            case self::VAR_END_TYPE:
                return 'end of print statement';
            case self::NAME_TYPE:
                return 'name';
            case self::NUMBER_TYPE:
                return 'number';
            case self::STRING_TYPE:
                return 'string';
            case self::OPERATOR_TYPE:
                return 'operator';
            case self::PUNCTUATION_TYPE:
                return 'punctuation';
            case self::INTERPOLATION_START_TYPE:
                return 'begin of string interpolation';
            case self::INTERPOLATION_END_TYPE:
                return 'end of string interpolation';
            case self::ARROW_TYPE:
                return 'arrow function';
            default:
                throw new \\LogicException(sprintf('Token of type \"%s\" does not exist.', \$type));
        }
    }
}

class_alias('Twig\\Token', 'Twig_Token');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Token.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Represents a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Token
{
    private \$value;
    private \$type;
    private \$lineno;

    const EOF_TYPE = -1;
    const TEXT_TYPE = 0;
    const BLOCK_START_TYPE = 1;
    const VAR_START_TYPE = 2;
    const BLOCK_END_TYPE = 3;
    const VAR_END_TYPE = 4;
    const NAME_TYPE = 5;
    const NUMBER_TYPE = 6;
    const STRING_TYPE = 7;
    const OPERATOR_TYPE = 8;
    const PUNCTUATION_TYPE = 9;
    const INTERPOLATION_START_TYPE = 10;
    const INTERPOLATION_END_TYPE = 11;
    const ARROW_TYPE = 12;

    /**
     * @param int    \$type   The type of the token
     * @param string \$value  The token value
     * @param int    \$lineno The line position in the source
     */
    public function __construct(\$type, \$value, \$lineno)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->lineno = \$lineno;
    }

    public function __toString()
    {
        return sprintf('%s(%s)', self::typeToString(\$this->type, true), \$this->value);
    }

    /**
     * Tests the current token for a type and/or a value.
     *
     * Parameters may be:
     *  * just type
     *  * type and value (or array of possible values)
     *  * just value (or array of possible values) (NAME_TYPE is used as type)
     *
     * @param array|string|int  \$type   The type to test
     * @param array|string|null \$values The token value
     *
     * @return bool
     */
    public function test(\$type, \$values = null)
    {
        if (null === \$values && !\\is_int(\$type)) {
            \$values = \$type;
            \$type = self::NAME_TYPE;
        }

        return (\$this->type === \$type) && (
            null === \$values ||
            (\\is_array(\$values) && \\in_array(\$this->value, \$values)) ||
            \$this->value == \$values
        );
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return \$this->lineno;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the constant representation (internal) of a given type.
     *
     * @param int  \$type  The type as an integer
     * @param bool \$short Whether to return a short representation or not
     *
     * @return string The string representation
     */
    public static function typeToString(\$type, \$short = false)
    {
        switch (\$type) {
            case self::EOF_TYPE:
                \$name = 'EOF_TYPE';
                break;
            case self::TEXT_TYPE:
                \$name = 'TEXT_TYPE';
                break;
            case self::BLOCK_START_TYPE:
                \$name = 'BLOCK_START_TYPE';
                break;
            case self::VAR_START_TYPE:
                \$name = 'VAR_START_TYPE';
                break;
            case self::BLOCK_END_TYPE:
                \$name = 'BLOCK_END_TYPE';
                break;
            case self::VAR_END_TYPE:
                \$name = 'VAR_END_TYPE';
                break;
            case self::NAME_TYPE:
                \$name = 'NAME_TYPE';
                break;
            case self::NUMBER_TYPE:
                \$name = 'NUMBER_TYPE';
                break;
            case self::STRING_TYPE:
                \$name = 'STRING_TYPE';
                break;
            case self::OPERATOR_TYPE:
                \$name = 'OPERATOR_TYPE';
                break;
            case self::PUNCTUATION_TYPE:
                \$name = 'PUNCTUATION_TYPE';
                break;
            case self::INTERPOLATION_START_TYPE:
                \$name = 'INTERPOLATION_START_TYPE';
                break;
            case self::INTERPOLATION_END_TYPE:
                \$name = 'INTERPOLATION_END_TYPE';
                break;
            case self::ARROW_TYPE:
                \$name = 'ARROW_TYPE';
                break;
            default:
                throw new \\LogicException(sprintf('Token of type \"%s\" does not exist.', \$type));
        }

        return \$short ? \$name : 'Twig\\Token::'.\$name;
    }

    /**
     * Returns the English representation of a given type.
     *
     * @param int \$type The type as an integer
     *
     * @return string The string representation
     */
    public static function typeToEnglish(\$type)
    {
        switch (\$type) {
            case self::EOF_TYPE:
                return 'end of template';
            case self::TEXT_TYPE:
                return 'text';
            case self::BLOCK_START_TYPE:
                return 'begin of statement block';
            case self::VAR_START_TYPE:
                return 'begin of print statement';
            case self::BLOCK_END_TYPE:
                return 'end of statement block';
            case self::VAR_END_TYPE:
                return 'end of print statement';
            case self::NAME_TYPE:
                return 'name';
            case self::NUMBER_TYPE:
                return 'number';
            case self::STRING_TYPE:
                return 'string';
            case self::OPERATOR_TYPE:
                return 'operator';
            case self::PUNCTUATION_TYPE:
                return 'punctuation';
            case self::INTERPOLATION_START_TYPE:
                return 'begin of string interpolation';
            case self::INTERPOLATION_END_TYPE:
                return 'end of string interpolation';
            case self::ARROW_TYPE:
                return 'arrow function';
            default:
                throw new \\LogicException(sprintf('Token of type \"%s\" does not exist.', \$type));
        }
    }
}

class_alias('Twig\\Token', 'Twig_Token');
", "vendor/twig/twig/src/Token.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Token.php");
    }
}
