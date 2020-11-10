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

/* vendor/symfony/polyfill-php72/Php72.php */
class __TwigTemplate_959f966cf67c664297c0fb2cbd484d6aa434964ab19361267f5e4038432e9a8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/Php72.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/Php72.php"));

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

namespace Symfony\\Polyfill\\Php72;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class Php72
{
    private static \$hashMask;

    public static function utf8_encode(\$s)
    {
        \$s .= \$s;
        \$len = \\strlen(\$s);

        for (\$i = \$len >> 1, \$j = 0; \$i < \$len; ++\$i, ++\$j) {
            switch (true) {
                case \$s[\$i] < \"\\x80\": \$s[\$j] = \$s[\$i]; break;
                case \$s[\$i] < \"\\xC0\": \$s[\$j] = \"\\xC2\"; \$s[++\$j] = \$s[\$i]; break;
                default: \$s[\$j] = \"\\xC3\"; \$s[++\$j] = \\chr(\\ord(\$s[\$i]) - 64); break;
            }
        }

        return substr(\$s, 0, \$j);
    }

    public static function utf8_decode(\$s)
    {
        \$s = (string) \$s;
        \$len = \\strlen(\$s);

        for (\$i = 0, \$j = 0; \$i < \$len; ++\$i, ++\$j) {
            switch (\$s[\$i] & \"\\xF0\") {
                case \"\\xC0\":
                case \"\\xD0\":
                    \$c = (\\ord(\$s[\$i] & \"\\x1F\") << 6) | \\ord(\$s[++\$i] & \"\\x3F\");
                    \$s[\$j] = \$c < 256 ? \\chr(\$c) : '?';
                    break;

                case \"\\xF0\":
                    ++\$i;
                    // no break

                case \"\\xE0\":
                    \$s[\$j] = '?';
                    \$i += 2;
                    break;

                default:
                    \$s[\$j] = \$s[\$i];
            }
        }

        return substr(\$s, 0, \$j);
    }

    public static function php_os_family()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            return 'Windows';
        }

        \$map = array(
            'Darwin' => 'Darwin',
            'DragonFly' => 'BSD',
            'FreeBSD' => 'BSD',
            'NetBSD' => 'BSD',
            'OpenBSD' => 'BSD',
            'Linux' => 'Linux',
            'SunOS' => 'Solaris',
        );

        return isset(\$map[PHP_OS]) ? \$map[PHP_OS] : 'Unknown';
    }

    public static function spl_object_id(\$object)
    {
        if (null === self::\$hashMask) {
            self::initHashMask();
        }
        if (null === \$hash = spl_object_hash(\$object)) {
            return;
        }

        return self::\$hashMask ^ hexdec(substr(\$hash, 16 - \\PHP_INT_SIZE, \\PHP_INT_SIZE));
    }

    public static function sapi_windows_vt100_support(\$stream, \$enable = null)
    {
        if (!\\is_resource(\$stream)) {
            trigger_error('sapi_windows_vt100_support() expects parameter 1 to be resource, '.\\gettype(\$stream).' given', E_USER_WARNING);

            return false;
        }

        \$meta = stream_get_meta_data(\$stream);

        if ('STDIO' !== \$meta['stream_type']) {
            trigger_error('sapi_windows_vt100_support() was not able to analyze the specified stream', E_USER_WARNING);

            return false;
        }

        // We cannot actually disable vt100 support if it is set
        if (false === \$enable || !self::stream_isatty(\$stream)) {
            return false;
        }

        // The native function does not apply to stdin
        \$meta = array_map('strtolower', \$meta);
        \$stdin = 'php://stdin' === \$meta['uri'] || 'php://fd/0' === \$meta['uri'];

        return !\$stdin
            && (false !== getenv('ANSICON')
            || 'ON' === getenv('ConEmuANSI')
            || 'xterm' === getenv('TERM')
            || 'Hyper' === getenv('TERM_PROGRAM'));
    }

    public static function stream_isatty(\$stream)
    {
        if (!\\is_resource(\$stream)) {
            trigger_error('stream_isatty() expects parameter 1 to be resource, '.\\gettype(\$stream).' given', E_USER_WARNING);

            return false;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$stat = @fstat(\$stream);
            // Check if formatted mode is S_IFCHR
            return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
        }

        return \\function_exists('posix_isatty') && @posix_isatty(\$stream);
    }

    private static function initHashMask()
    {
        \$obj = (object) array();
        self::\$hashMask = -1;

        // check if we are nested in an output buffering handler to prevent a fatal error with ob_start() below
        \$obFuncs = array('ob_clean', 'ob_end_clean', 'ob_flush', 'ob_end_flush', 'ob_get_contents', 'ob_get_flush');
        foreach (debug_backtrace(\\PHP_VERSION_ID >= 50400 ? DEBUG_BACKTRACE_IGNORE_ARGS : false) as \$frame) {
            if (isset(\$frame['function'][0]) && !isset(\$frame['class']) && 'o' === \$frame['function'][0] && \\in_array(\$frame['function'], \$obFuncs)) {
                \$frame['line'] = 0;
                break;
            }
        }
        if (!empty(\$frame['line'])) {
            ob_start();
            debug_zval_dump(\$obj);
            self::\$hashMask = (int) substr(ob_get_clean(), 17);
        }

        self::\$hashMask ^= hexdec(substr(spl_object_hash(\$obj), 16 - \\PHP_INT_SIZE, \\PHP_INT_SIZE));
    }

    public static function mb_chr(\$code, \$encoding = null)
    {
        if (0x80 > \$code %= 0x200000) {
            \$s = \\chr(\$code);
        } elseif (0x800 > \$code) {
            \$s = \\chr(0xC0 | \$code >> 6).\\chr(0x80 | \$code & 0x3F);
        } elseif (0x10000 > \$code) {
            \$s = \\chr(0xE0 | \$code >> 12).\\chr(0x80 | \$code >> 6 & 0x3F).\\chr(0x80 | \$code & 0x3F);
        } else {
            \$s = \\chr(0xF0 | \$code >> 18).\\chr(0x80 | \$code >> 12 & 0x3F).\\chr(0x80 | \$code >> 6 & 0x3F).\\chr(0x80 | \$code & 0x3F);
        }

        if ('UTF-8' !== \$encoding) {
            \$s = mb_convert_encoding(\$s, \$encoding, 'UTF-8');
        }

        return \$s;
    }

    public static function mb_ord(\$s, \$encoding = null)
    {
        if (null == \$encoding) {
            \$s = mb_convert_encoding(\$s, 'UTF-8');
        } elseif ('UTF-8' !== \$encoding) {
            \$s = mb_convert_encoding(\$s, 'UTF-8', \$encoding);
        }

        if (1 === \\strlen(\$s)) {
            return \\ord(\$s);
        }

        \$code = (\$s = unpack('C*', substr(\$s, 0, 4))) ? \$s[1] : 0;
        if (0xF0 <= \$code) {
            return ((\$code - 0xF0) << 18) + ((\$s[2] - 0x80) << 12) + ((\$s[3] - 0x80) << 6) + \$s[4] - 0x80;
        }
        if (0xE0 <= \$code) {
            return ((\$code - 0xE0) << 12) + ((\$s[2] - 0x80) << 6) + \$s[3] - 0x80;
        }
        if (0xC0 <= \$code) {
            return ((\$code - 0xC0) << 6) + \$s[2] - 0x80;
        }

        return \$code;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-php72/Php72.php";
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

namespace Symfony\\Polyfill\\Php72;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class Php72
{
    private static \$hashMask;

    public static function utf8_encode(\$s)
    {
        \$s .= \$s;
        \$len = \\strlen(\$s);

        for (\$i = \$len >> 1, \$j = 0; \$i < \$len; ++\$i, ++\$j) {
            switch (true) {
                case \$s[\$i] < \"\\x80\": \$s[\$j] = \$s[\$i]; break;
                case \$s[\$i] < \"\\xC0\": \$s[\$j] = \"\\xC2\"; \$s[++\$j] = \$s[\$i]; break;
                default: \$s[\$j] = \"\\xC3\"; \$s[++\$j] = \\chr(\\ord(\$s[\$i]) - 64); break;
            }
        }

        return substr(\$s, 0, \$j);
    }

    public static function utf8_decode(\$s)
    {
        \$s = (string) \$s;
        \$len = \\strlen(\$s);

        for (\$i = 0, \$j = 0; \$i < \$len; ++\$i, ++\$j) {
            switch (\$s[\$i] & \"\\xF0\") {
                case \"\\xC0\":
                case \"\\xD0\":
                    \$c = (\\ord(\$s[\$i] & \"\\x1F\") << 6) | \\ord(\$s[++\$i] & \"\\x3F\");
                    \$s[\$j] = \$c < 256 ? \\chr(\$c) : '?';
                    break;

                case \"\\xF0\":
                    ++\$i;
                    // no break

                case \"\\xE0\":
                    \$s[\$j] = '?';
                    \$i += 2;
                    break;

                default:
                    \$s[\$j] = \$s[\$i];
            }
        }

        return substr(\$s, 0, \$j);
    }

    public static function php_os_family()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            return 'Windows';
        }

        \$map = array(
            'Darwin' => 'Darwin',
            'DragonFly' => 'BSD',
            'FreeBSD' => 'BSD',
            'NetBSD' => 'BSD',
            'OpenBSD' => 'BSD',
            'Linux' => 'Linux',
            'SunOS' => 'Solaris',
        );

        return isset(\$map[PHP_OS]) ? \$map[PHP_OS] : 'Unknown';
    }

    public static function spl_object_id(\$object)
    {
        if (null === self::\$hashMask) {
            self::initHashMask();
        }
        if (null === \$hash = spl_object_hash(\$object)) {
            return;
        }

        return self::\$hashMask ^ hexdec(substr(\$hash, 16 - \\PHP_INT_SIZE, \\PHP_INT_SIZE));
    }

    public static function sapi_windows_vt100_support(\$stream, \$enable = null)
    {
        if (!\\is_resource(\$stream)) {
            trigger_error('sapi_windows_vt100_support() expects parameter 1 to be resource, '.\\gettype(\$stream).' given', E_USER_WARNING);

            return false;
        }

        \$meta = stream_get_meta_data(\$stream);

        if ('STDIO' !== \$meta['stream_type']) {
            trigger_error('sapi_windows_vt100_support() was not able to analyze the specified stream', E_USER_WARNING);

            return false;
        }

        // We cannot actually disable vt100 support if it is set
        if (false === \$enable || !self::stream_isatty(\$stream)) {
            return false;
        }

        // The native function does not apply to stdin
        \$meta = array_map('strtolower', \$meta);
        \$stdin = 'php://stdin' === \$meta['uri'] || 'php://fd/0' === \$meta['uri'];

        return !\$stdin
            && (false !== getenv('ANSICON')
            || 'ON' === getenv('ConEmuANSI')
            || 'xterm' === getenv('TERM')
            || 'Hyper' === getenv('TERM_PROGRAM'));
    }

    public static function stream_isatty(\$stream)
    {
        if (!\\is_resource(\$stream)) {
            trigger_error('stream_isatty() expects parameter 1 to be resource, '.\\gettype(\$stream).' given', E_USER_WARNING);

            return false;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$stat = @fstat(\$stream);
            // Check if formatted mode is S_IFCHR
            return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
        }

        return \\function_exists('posix_isatty') && @posix_isatty(\$stream);
    }

    private static function initHashMask()
    {
        \$obj = (object) array();
        self::\$hashMask = -1;

        // check if we are nested in an output buffering handler to prevent a fatal error with ob_start() below
        \$obFuncs = array('ob_clean', 'ob_end_clean', 'ob_flush', 'ob_end_flush', 'ob_get_contents', 'ob_get_flush');
        foreach (debug_backtrace(\\PHP_VERSION_ID >= 50400 ? DEBUG_BACKTRACE_IGNORE_ARGS : false) as \$frame) {
            if (isset(\$frame['function'][0]) && !isset(\$frame['class']) && 'o' === \$frame['function'][0] && \\in_array(\$frame['function'], \$obFuncs)) {
                \$frame['line'] = 0;
                break;
            }
        }
        if (!empty(\$frame['line'])) {
            ob_start();
            debug_zval_dump(\$obj);
            self::\$hashMask = (int) substr(ob_get_clean(), 17);
        }

        self::\$hashMask ^= hexdec(substr(spl_object_hash(\$obj), 16 - \\PHP_INT_SIZE, \\PHP_INT_SIZE));
    }

    public static function mb_chr(\$code, \$encoding = null)
    {
        if (0x80 > \$code %= 0x200000) {
            \$s = \\chr(\$code);
        } elseif (0x800 > \$code) {
            \$s = \\chr(0xC0 | \$code >> 6).\\chr(0x80 | \$code & 0x3F);
        } elseif (0x10000 > \$code) {
            \$s = \\chr(0xE0 | \$code >> 12).\\chr(0x80 | \$code >> 6 & 0x3F).\\chr(0x80 | \$code & 0x3F);
        } else {
            \$s = \\chr(0xF0 | \$code >> 18).\\chr(0x80 | \$code >> 12 & 0x3F).\\chr(0x80 | \$code >> 6 & 0x3F).\\chr(0x80 | \$code & 0x3F);
        }

        if ('UTF-8' !== \$encoding) {
            \$s = mb_convert_encoding(\$s, \$encoding, 'UTF-8');
        }

        return \$s;
    }

    public static function mb_ord(\$s, \$encoding = null)
    {
        if (null == \$encoding) {
            \$s = mb_convert_encoding(\$s, 'UTF-8');
        } elseif ('UTF-8' !== \$encoding) {
            \$s = mb_convert_encoding(\$s, 'UTF-8', \$encoding);
        }

        if (1 === \\strlen(\$s)) {
            return \\ord(\$s);
        }

        \$code = (\$s = unpack('C*', substr(\$s, 0, 4))) ? \$s[1] : 0;
        if (0xF0 <= \$code) {
            return ((\$code - 0xF0) << 18) + ((\$s[2] - 0x80) << 12) + ((\$s[3] - 0x80) << 6) + \$s[4] - 0x80;
        }
        if (0xE0 <= \$code) {
            return ((\$code - 0xE0) << 12) + ((\$s[2] - 0x80) << 6) + \$s[3] - 0x80;
        }
        if (0xC0 <= \$code) {
            return ((\$code - 0xC0) << 6) + \$s[2] - 0x80;
        }

        return \$code;
    }
}
", "vendor/symfony/polyfill-php72/Php72.php", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-php72/Php72.php");
    }
}
