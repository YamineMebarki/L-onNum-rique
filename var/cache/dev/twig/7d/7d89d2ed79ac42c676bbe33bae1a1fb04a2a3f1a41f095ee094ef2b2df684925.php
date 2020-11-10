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

/* vendor/symfony/yaml/Unescaper.php */
class __TwigTemplate_6ac88b627f5676cde3721436cbd83fe72a70f2b8d118ff575434fb32964ab42f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Unescaper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Unescaper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Yaml;

use Symfony\\Component\\Yaml\\Exception\\ParseException;

/**
 * Unescaper encapsulates unescaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Unescaper
{
    /**
     * Regex fragment that matches an escaped character in a double quoted string.
     */
    const REGEX_ESCAPED_CHARACTER = '\\\\\\\\(x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|U[0-9a-fA-F]{8}|.)';

    /**
     * Unescapes a single quoted string.
     *
     * @param string \$value A single quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeSingleQuotedString(string \$value): string
    {
        return str_replace('\\'\\'', '\\'', \$value);
    }

    /**
     * Unescapes a double quoted string.
     *
     * @param string \$value A double quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeDoubleQuotedString(string \$value): string
    {
        \$callback = function (\$match) {
            return \$this->unescapeCharacter(\$match[0]);
        };

        // evaluate the string
        return preg_replace_callback('/'.self::REGEX_ESCAPED_CHARACTER.'/u', \$callback, \$value);
    }

    /**
     * Unescapes a character that was found in a double-quoted string.
     *
     * @param string \$value An escaped character
     *
     * @return string The unescaped character
     */
    private function unescapeCharacter(string \$value): string
    {
        switch (\$value[1]) {
            case '0':
                return \"\\x0\";
            case 'a':
                return \"\\x7\";
            case 'b':
                return \"\\x8\";
            case 't':
                return \"\\t\";
            case \"\\t\":
                return \"\\t\";
            case 'n':
                return \"\\n\";
            case 'v':
                return \"\\xB\";
            case 'f':
                return \"\\xC\";
            case 'r':
                return \"\\r\";
            case 'e':
                return \"\\x1B\";
            case ' ':
                return ' ';
            case '\"':
                return '\"';
            case '/':
                return '/';
            case '\\\\':
                return '\\\\';
            case 'N':
                // U+0085 NEXT LINE
                return \"\\xC2\\x85\";
            case '_':
                // U+00A0 NO-BREAK SPACE
                return \"\\xC2\\xA0\";
            case 'L':
                // U+2028 LINE SEPARATOR
                return \"\\xE2\\x80\\xA8\";
            case 'P':
                // U+2029 PARAGRAPH SEPARATOR
                return \"\\xE2\\x80\\xA9\";
            case 'x':
                return self::utf8chr(hexdec(substr(\$value, 2, 2)));
            case 'u':
                return self::utf8chr(hexdec(substr(\$value, 2, 4)));
            case 'U':
                return self::utf8chr(hexdec(substr(\$value, 2, 8)));
            default:
                throw new ParseException(sprintf('Found unknown escape character \"%s\".', \$value));
        }
    }

    /**
     * Get the UTF-8 character for the given code point.
     */
    private static function utf8chr(int \$c): string
    {
        if (0x80 > \$c %= 0x200000) {
            return \\chr(\$c);
        }
        if (0x800 > \$c) {
            return \\chr(0xC0 | \$c >> 6).\\chr(0x80 | \$c & 0x3F);
        }
        if (0x10000 > \$c) {
            return \\chr(0xE0 | \$c >> 12).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
        }

        return \\chr(0xF0 | \$c >> 18).\\chr(0x80 | \$c >> 12 & 0x3F).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Unescaper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Yaml;

use Symfony\\Component\\Yaml\\Exception\\ParseException;

/**
 * Unescaper encapsulates unescaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Unescaper
{
    /**
     * Regex fragment that matches an escaped character in a double quoted string.
     */
    const REGEX_ESCAPED_CHARACTER = '\\\\\\\\(x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|U[0-9a-fA-F]{8}|.)';

    /**
     * Unescapes a single quoted string.
     *
     * @param string \$value A single quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeSingleQuotedString(string \$value): string
    {
        return str_replace('\\'\\'', '\\'', \$value);
    }

    /**
     * Unescapes a double quoted string.
     *
     * @param string \$value A double quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeDoubleQuotedString(string \$value): string
    {
        \$callback = function (\$match) {
            return \$this->unescapeCharacter(\$match[0]);
        };

        // evaluate the string
        return preg_replace_callback('/'.self::REGEX_ESCAPED_CHARACTER.'/u', \$callback, \$value);
    }

    /**
     * Unescapes a character that was found in a double-quoted string.
     *
     * @param string \$value An escaped character
     *
     * @return string The unescaped character
     */
    private function unescapeCharacter(string \$value): string
    {
        switch (\$value[1]) {
            case '0':
                return \"\\x0\";
            case 'a':
                return \"\\x7\";
            case 'b':
                return \"\\x8\";
            case 't':
                return \"\\t\";
            case \"\\t\":
                return \"\\t\";
            case 'n':
                return \"\\n\";
            case 'v':
                return \"\\xB\";
            case 'f':
                return \"\\xC\";
            case 'r':
                return \"\\r\";
            case 'e':
                return \"\\x1B\";
            case ' ':
                return ' ';
            case '\"':
                return '\"';
            case '/':
                return '/';
            case '\\\\':
                return '\\\\';
            case 'N':
                // U+0085 NEXT LINE
                return \"\\xC2\\x85\";
            case '_':
                // U+00A0 NO-BREAK SPACE
                return \"\\xC2\\xA0\";
            case 'L':
                // U+2028 LINE SEPARATOR
                return \"\\xE2\\x80\\xA8\";
            case 'P':
                // U+2029 PARAGRAPH SEPARATOR
                return \"\\xE2\\x80\\xA9\";
            case 'x':
                return self::utf8chr(hexdec(substr(\$value, 2, 2)));
            case 'u':
                return self::utf8chr(hexdec(substr(\$value, 2, 4)));
            case 'U':
                return self::utf8chr(hexdec(substr(\$value, 2, 8)));
            default:
                throw new ParseException(sprintf('Found unknown escape character \"%s\".', \$value));
        }
    }

    /**
     * Get the UTF-8 character for the given code point.
     */
    private static function utf8chr(int \$c): string
    {
        if (0x80 > \$c %= 0x200000) {
            return \\chr(\$c);
        }
        if (0x800 > \$c) {
            return \\chr(0xC0 | \$c >> 6).\\chr(0x80 | \$c & 0x3F);
        }
        if (0x10000 > \$c) {
            return \\chr(0xE0 | \$c >> 12).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
        }

        return \\chr(0xF0 | \$c >> 18).\\chr(0x80 | \$c >> 12 & 0x3F).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
    }
}
", "vendor/symfony/yaml/Unescaper.php", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Unescaper.php");
    }
}
