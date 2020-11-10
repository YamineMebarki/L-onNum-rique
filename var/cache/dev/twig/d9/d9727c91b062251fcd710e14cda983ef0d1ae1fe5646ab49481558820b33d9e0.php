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

/* vendor/symfony/http-foundation/HeaderUtils.php */
class __TwigTemplate_2ba7eb1a424b74d701aad4aedf16a8ad42d2f6a302f5c04941c7784ed6800077 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/HeaderUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/HeaderUtils.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HTTP header utility functions.
 *
 * @author Christian Schmidt <github@chsc.dk>
 */
class HeaderUtils
{
    public const DISPOSITION_ATTACHMENT = 'attachment';
    public const DISPOSITION_INLINE = 'inline';

    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Splits an HTTP header by one or more separators.
     *
     * Example:
     *
     *     HeaderUtils::split(\"da, en-gb;q=0.8\", \",;\")
     *     // => ['da'], ['en-gb', 'q=0.8']]
     *
     * @param string \$separators List of characters to split on, ordered by
     *                           precedence, e.g. \",\", \";=\", or \",;=\"
     *
     * @return array Nested array with as many levels as there are characters in
     *               \$separators
     */
    public static function split(string \$header, string \$separators): array
    {
        \$quotedSeparators = preg_quote(\$separators, '/');

        preg_match_all('
            /
                (?!\\s)
                    (?:
                        # quoted-string
                        \"(?:[^\"\\\\\\\\]|\\\\\\\\.)*(?:\"|\\\\\\\\|\$)
                    |
                        # token
                        [^\"'.\$quotedSeparators.']+
                    )+
                (?<!\\s)
            |
                # separator
                \\s*
                (?<separator>['.\$quotedSeparators.'])
                \\s*
            /x', trim(\$header), \$matches, PREG_SET_ORDER);

        return self::groupParts(\$matches, \$separators);
    }

    /**
     * Combines an array of arrays into one associative array.
     *
     * Each of the nested arrays should have one or two elements. The first
     * value will be used as the keys in the associative array, and the second
     * will be used as the values, or true if the nested array only contains one
     * element. Array keys are lowercased.
     *
     * Example:
     *
     *     HeaderUtils::combine([[\"foo\", \"abc\"], [\"bar\"]])
     *     // => [\"foo\" => \"abc\", \"bar\" => true]
     */
    public static function combine(array \$parts): array
    {
        \$assoc = [];
        foreach (\$parts as \$part) {
            \$name = strtolower(\$part[0]);
            \$value = \$part[1] ?? true;
            \$assoc[\$name] = \$value;
        }

        return \$assoc;
    }

    /**
     * Joins an associative array into a string for use in an HTTP header.
     *
     * The key and value of each entry are joined with \"=\", and all entries
     * are joined with the specified separator and an additional space (for
     * readability). Values are quoted if necessary.
     *
     * Example:
     *
     *     HeaderUtils::toString([\"foo\" => \"abc\", \"bar\" => true, \"baz\" => \"a b c\"], \",\")
     *     // => 'foo=abc, bar, baz=\"a b c\"'
     */
    public static function toString(array \$assoc, string \$separator): string
    {
        \$parts = [];
        foreach (\$assoc as \$name => \$value) {
            if (true === \$value) {
                \$parts[] = \$name;
            } else {
                \$parts[] = \$name.'='.self::quote(\$value);
            }
        }

        return implode(\$separator.' ', \$parts);
    }

    /**
     * Encodes a string as a quoted string, if necessary.
     *
     * If a string contains characters not allowed by the \"token\" construct in
     * the HTTP specification, it is backslash-escaped and enclosed in quotes
     * to match the \"quoted-string\" construct.
     */
    public static function quote(string \$s): string
    {
        if (preg_match('/^[a-z0-9!#\$%&\\'*.^_`|~-]+\$/i', \$s)) {
            return \$s;
        }

        return '\"'.addcslashes(\$s, '\"\\\\\"').'\"';
    }

    /**
     * Decodes a quoted string.
     *
     * If passed an unquoted string that matches the \"token\" construct (as
     * defined in the HTTP specification), it is passed through verbatimly.
     */
    public static function unquote(string \$s): string
    {
        return preg_replace('/\\\\\\\\(.)|\"/', '\$1', \$s);
    }

    /**
     * Generates a HTTP Content-Disposition field-value.
     *
     * @param string \$disposition      One of \"inline\" or \"attachment\"
     * @param string \$filename         A unicode string
     * @param string \$filenameFallback A string containing only ASCII characters that
     *                                 is semantically equivalent to \$filename. If the filename is already ASCII,
     *                                 it can be omitted, or just copied from \$filename
     *
     * @return string A string suitable for use as a Content-Disposition field-value
     *
     * @throws \\InvalidArgumentException
     *
     * @see RFC 6266
     */
    public static function makeDisposition(string \$disposition, string \$filename, string \$filenameFallback = ''): string
    {
        if (!\\in_array(\$disposition, [self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE])) {
            throw new \\InvalidArgumentException(sprintf('The disposition must be either \"%s\" or \"%s\".', self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE));
        }

        if ('' === \$filenameFallback) {
            \$filenameFallback = \$filename;
        }

        // filenameFallback is not ASCII.
        if (!preg_match('/^[\\x20-\\x7e]*\$/', \$filenameFallback)) {
            throw new \\InvalidArgumentException('The filename fallback must only contain ASCII characters.');
        }

        // percent characters aren't safe in fallback.
        if (false !== strpos(\$filenameFallback, '%')) {
            throw new \\InvalidArgumentException('The filename fallback cannot contain the \"%\" character.');
        }

        // path separators aren't allowed in either.
        if (false !== strpos(\$filename, '/') || false !== strpos(\$filename, '\\\\') || false !== strpos(\$filenameFallback, '/') || false !== strpos(\$filenameFallback, '\\\\')) {
            throw new \\InvalidArgumentException('The filename and the fallback cannot contain the \"/\" and \"\\\\\" characters.');
        }

        \$params = ['filename' => \$filenameFallback];
        if (\$filename !== \$filenameFallback) {
            \$params['filename*'] = \"utf-8''\".rawurlencode(\$filename);
        }

        return \$disposition.'; '.self::toString(\$params, ';');
    }

    private static function groupParts(array \$matches, string \$separators): array
    {
        \$separator = \$separators[0];
        \$partSeparators = substr(\$separators, 1);

        \$i = 0;
        \$partMatches = [];
        foreach (\$matches as \$match) {
            if (isset(\$match['separator']) && \$match['separator'] === \$separator) {
                ++\$i;
            } else {
                \$partMatches[\$i][] = \$match;
            }
        }

        \$parts = [];
        if (\$partSeparators) {
            foreach (\$partMatches as \$matches) {
                \$parts[] = self::groupParts(\$matches, \$partSeparators);
            }
        } else {
            foreach (\$partMatches as \$matches) {
                \$parts[] = self::unquote(\$matches[0][0]);
            }
        }

        return \$parts;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/HeaderUtils.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HTTP header utility functions.
 *
 * @author Christian Schmidt <github@chsc.dk>
 */
class HeaderUtils
{
    public const DISPOSITION_ATTACHMENT = 'attachment';
    public const DISPOSITION_INLINE = 'inline';

    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Splits an HTTP header by one or more separators.
     *
     * Example:
     *
     *     HeaderUtils::split(\"da, en-gb;q=0.8\", \",;\")
     *     // => ['da'], ['en-gb', 'q=0.8']]
     *
     * @param string \$separators List of characters to split on, ordered by
     *                           precedence, e.g. \",\", \";=\", or \",;=\"
     *
     * @return array Nested array with as many levels as there are characters in
     *               \$separators
     */
    public static function split(string \$header, string \$separators): array
    {
        \$quotedSeparators = preg_quote(\$separators, '/');

        preg_match_all('
            /
                (?!\\s)
                    (?:
                        # quoted-string
                        \"(?:[^\"\\\\\\\\]|\\\\\\\\.)*(?:\"|\\\\\\\\|\$)
                    |
                        # token
                        [^\"'.\$quotedSeparators.']+
                    )+
                (?<!\\s)
            |
                # separator
                \\s*
                (?<separator>['.\$quotedSeparators.'])
                \\s*
            /x', trim(\$header), \$matches, PREG_SET_ORDER);

        return self::groupParts(\$matches, \$separators);
    }

    /**
     * Combines an array of arrays into one associative array.
     *
     * Each of the nested arrays should have one or two elements. The first
     * value will be used as the keys in the associative array, and the second
     * will be used as the values, or true if the nested array only contains one
     * element. Array keys are lowercased.
     *
     * Example:
     *
     *     HeaderUtils::combine([[\"foo\", \"abc\"], [\"bar\"]])
     *     // => [\"foo\" => \"abc\", \"bar\" => true]
     */
    public static function combine(array \$parts): array
    {
        \$assoc = [];
        foreach (\$parts as \$part) {
            \$name = strtolower(\$part[0]);
            \$value = \$part[1] ?? true;
            \$assoc[\$name] = \$value;
        }

        return \$assoc;
    }

    /**
     * Joins an associative array into a string for use in an HTTP header.
     *
     * The key and value of each entry are joined with \"=\", and all entries
     * are joined with the specified separator and an additional space (for
     * readability). Values are quoted if necessary.
     *
     * Example:
     *
     *     HeaderUtils::toString([\"foo\" => \"abc\", \"bar\" => true, \"baz\" => \"a b c\"], \",\")
     *     // => 'foo=abc, bar, baz=\"a b c\"'
     */
    public static function toString(array \$assoc, string \$separator): string
    {
        \$parts = [];
        foreach (\$assoc as \$name => \$value) {
            if (true === \$value) {
                \$parts[] = \$name;
            } else {
                \$parts[] = \$name.'='.self::quote(\$value);
            }
        }

        return implode(\$separator.' ', \$parts);
    }

    /**
     * Encodes a string as a quoted string, if necessary.
     *
     * If a string contains characters not allowed by the \"token\" construct in
     * the HTTP specification, it is backslash-escaped and enclosed in quotes
     * to match the \"quoted-string\" construct.
     */
    public static function quote(string \$s): string
    {
        if (preg_match('/^[a-z0-9!#\$%&\\'*.^_`|~-]+\$/i', \$s)) {
            return \$s;
        }

        return '\"'.addcslashes(\$s, '\"\\\\\"').'\"';
    }

    /**
     * Decodes a quoted string.
     *
     * If passed an unquoted string that matches the \"token\" construct (as
     * defined in the HTTP specification), it is passed through verbatimly.
     */
    public static function unquote(string \$s): string
    {
        return preg_replace('/\\\\\\\\(.)|\"/', '\$1', \$s);
    }

    /**
     * Generates a HTTP Content-Disposition field-value.
     *
     * @param string \$disposition      One of \"inline\" or \"attachment\"
     * @param string \$filename         A unicode string
     * @param string \$filenameFallback A string containing only ASCII characters that
     *                                 is semantically equivalent to \$filename. If the filename is already ASCII,
     *                                 it can be omitted, or just copied from \$filename
     *
     * @return string A string suitable for use as a Content-Disposition field-value
     *
     * @throws \\InvalidArgumentException
     *
     * @see RFC 6266
     */
    public static function makeDisposition(string \$disposition, string \$filename, string \$filenameFallback = ''): string
    {
        if (!\\in_array(\$disposition, [self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE])) {
            throw new \\InvalidArgumentException(sprintf('The disposition must be either \"%s\" or \"%s\".', self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE));
        }

        if ('' === \$filenameFallback) {
            \$filenameFallback = \$filename;
        }

        // filenameFallback is not ASCII.
        if (!preg_match('/^[\\x20-\\x7e]*\$/', \$filenameFallback)) {
            throw new \\InvalidArgumentException('The filename fallback must only contain ASCII characters.');
        }

        // percent characters aren't safe in fallback.
        if (false !== strpos(\$filenameFallback, '%')) {
            throw new \\InvalidArgumentException('The filename fallback cannot contain the \"%\" character.');
        }

        // path separators aren't allowed in either.
        if (false !== strpos(\$filename, '/') || false !== strpos(\$filename, '\\\\') || false !== strpos(\$filenameFallback, '/') || false !== strpos(\$filenameFallback, '\\\\')) {
            throw new \\InvalidArgumentException('The filename and the fallback cannot contain the \"/\" and \"\\\\\" characters.');
        }

        \$params = ['filename' => \$filenameFallback];
        if (\$filename !== \$filenameFallback) {
            \$params['filename*'] = \"utf-8''\".rawurlencode(\$filename);
        }

        return \$disposition.'; '.self::toString(\$params, ';');
    }

    private static function groupParts(array \$matches, string \$separators): array
    {
        \$separator = \$separators[0];
        \$partSeparators = substr(\$separators, 1);

        \$i = 0;
        \$partMatches = [];
        foreach (\$matches as \$match) {
            if (isset(\$match['separator']) && \$match['separator'] === \$separator) {
                ++\$i;
            } else {
                \$partMatches[\$i][] = \$match;
            }
        }

        \$parts = [];
        if (\$partSeparators) {
            foreach (\$partMatches as \$matches) {
                \$parts[] = self::groupParts(\$matches, \$partSeparators);
            }
        } else {
            foreach (\$partMatches as \$matches) {
                \$parts[] = self::unquote(\$matches[0][0]);
            }
        }

        return \$parts;
    }
}
", "vendor/symfony/http-foundation/HeaderUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/HeaderUtils.php");
    }
}
