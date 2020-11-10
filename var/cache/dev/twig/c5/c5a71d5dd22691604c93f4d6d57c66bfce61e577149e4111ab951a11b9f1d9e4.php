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

/* vendor/symfony/finder/Glob.php */
class __TwigTemplate_ea9d4c982830a898fc1e1d9f65225a0b10d66eaf432dd7d5a688c53e23cef57f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Glob.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Glob.php"));

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

namespace Symfony\\Component\\Finder;

/**
 * Glob matches globbing patterns against text.
 *
 *     if match_glob(\"foo.*\", \"foo.bar\") echo \"matched\\n\";
 *
 *     // prints foo.bar and foo.baz
 *     \$regex = glob_to_regex(\"foo.*\");
 *     for (['foo.bar', 'foo.baz', 'foo', 'bar'] as \$t)
 *     {
 *         if (/\$regex/) echo \"matched: \$car\\n\";
 *     }
 *
 * Glob implements glob(3) style matching that can be used to match
 * against text, rather than fetching names from a filesystem.
 *
 * Based on the Perl Text::Glob module.
 *
 * @author Fabien Potencier <fabien@symfony.com> PHP port
 * @author     Richard Clamp <richardc@unixbeard.net> Perl version
 * @copyright  2004-2005 Fabien Potencier <fabien@symfony.com>
 * @copyright  2002 Richard Clamp <richardc@unixbeard.net>
 */
class Glob
{
    /**
     * Returns a regexp which is the equivalent of the glob pattern.
     *
     * @param string \$glob                The glob pattern
     * @param bool   \$strictLeadingDot
     * @param bool   \$strictWildcardSlash
     * @param string \$delimiter           Optional delimiter
     *
     * @return string regex The regexp
     */
    public static function toRegex(\$glob, \$strictLeadingDot = true, \$strictWildcardSlash = true, \$delimiter = '#')
    {
        \$firstByte = true;
        \$escaping = false;
        \$inCurlies = 0;
        \$regex = '';
        \$sizeGlob = \\strlen(\$glob);
        for (\$i = 0; \$i < \$sizeGlob; ++\$i) {
            \$car = \$glob[\$i];
            if (\$firstByte && \$strictLeadingDot && '.' !== \$car) {
                \$regex .= '(?=[^\\.])';
            }

            \$firstByte = '/' === \$car;

            if (\$firstByte && \$strictWildcardSlash && isset(\$glob[\$i + 2]) && '**' === \$glob[\$i + 1].\$glob[\$i + 2] && (!isset(\$glob[\$i + 3]) || '/' === \$glob[\$i + 3])) {
                \$car = '[^/]++/';
                if (!isset(\$glob[\$i + 3])) {
                    \$car .= '?';
                }

                if (\$strictLeadingDot) {
                    \$car = '(?=[^\\.])'.\$car;
                }

                \$car = '/(?:'.\$car.')*';
                \$i += 2 + isset(\$glob[\$i + 3]);

                if ('/' === \$delimiter) {
                    \$car = str_replace('/', '\\\\/', \$car);
                }
            }

            if (\$delimiter === \$car || '.' === \$car || '(' === \$car || ')' === \$car || '|' === \$car || '+' === \$car || '^' === \$car || '\$' === \$car) {
                \$regex .= \"\\\\\$car\";
            } elseif ('*' === \$car) {
                \$regex .= \$escaping ? '\\\\*' : (\$strictWildcardSlash ? '[^/]*' : '.*');
            } elseif ('?' === \$car) {
                \$regex .= \$escaping ? '\\\\?' : (\$strictWildcardSlash ? '[^/]' : '.');
            } elseif ('{' === \$car) {
                \$regex .= \$escaping ? '\\\\{' : '(';
                if (!\$escaping) {
                    ++\$inCurlies;
                }
            } elseif ('}' === \$car && \$inCurlies) {
                \$regex .= \$escaping ? '}' : ')';
                if (!\$escaping) {
                    --\$inCurlies;
                }
            } elseif (',' === \$car && \$inCurlies) {
                \$regex .= \$escaping ? ',' : '|';
            } elseif ('\\\\' === \$car) {
                if (\$escaping) {
                    \$regex .= '\\\\\\\\';
                    \$escaping = false;
                } else {
                    \$escaping = true;
                }

                continue;
            } else {
                \$regex .= \$car;
            }
            \$escaping = false;
        }

        return \$delimiter.'^'.\$regex.'\$'.\$delimiter;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Glob.php";
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

namespace Symfony\\Component\\Finder;

/**
 * Glob matches globbing patterns against text.
 *
 *     if match_glob(\"foo.*\", \"foo.bar\") echo \"matched\\n\";
 *
 *     // prints foo.bar and foo.baz
 *     \$regex = glob_to_regex(\"foo.*\");
 *     for (['foo.bar', 'foo.baz', 'foo', 'bar'] as \$t)
 *     {
 *         if (/\$regex/) echo \"matched: \$car\\n\";
 *     }
 *
 * Glob implements glob(3) style matching that can be used to match
 * against text, rather than fetching names from a filesystem.
 *
 * Based on the Perl Text::Glob module.
 *
 * @author Fabien Potencier <fabien@symfony.com> PHP port
 * @author     Richard Clamp <richardc@unixbeard.net> Perl version
 * @copyright  2004-2005 Fabien Potencier <fabien@symfony.com>
 * @copyright  2002 Richard Clamp <richardc@unixbeard.net>
 */
class Glob
{
    /**
     * Returns a regexp which is the equivalent of the glob pattern.
     *
     * @param string \$glob                The glob pattern
     * @param bool   \$strictLeadingDot
     * @param bool   \$strictWildcardSlash
     * @param string \$delimiter           Optional delimiter
     *
     * @return string regex The regexp
     */
    public static function toRegex(\$glob, \$strictLeadingDot = true, \$strictWildcardSlash = true, \$delimiter = '#')
    {
        \$firstByte = true;
        \$escaping = false;
        \$inCurlies = 0;
        \$regex = '';
        \$sizeGlob = \\strlen(\$glob);
        for (\$i = 0; \$i < \$sizeGlob; ++\$i) {
            \$car = \$glob[\$i];
            if (\$firstByte && \$strictLeadingDot && '.' !== \$car) {
                \$regex .= '(?=[^\\.])';
            }

            \$firstByte = '/' === \$car;

            if (\$firstByte && \$strictWildcardSlash && isset(\$glob[\$i + 2]) && '**' === \$glob[\$i + 1].\$glob[\$i + 2] && (!isset(\$glob[\$i + 3]) || '/' === \$glob[\$i + 3])) {
                \$car = '[^/]++/';
                if (!isset(\$glob[\$i + 3])) {
                    \$car .= '?';
                }

                if (\$strictLeadingDot) {
                    \$car = '(?=[^\\.])'.\$car;
                }

                \$car = '/(?:'.\$car.')*';
                \$i += 2 + isset(\$glob[\$i + 3]);

                if ('/' === \$delimiter) {
                    \$car = str_replace('/', '\\\\/', \$car);
                }
            }

            if (\$delimiter === \$car || '.' === \$car || '(' === \$car || ')' === \$car || '|' === \$car || '+' === \$car || '^' === \$car || '\$' === \$car) {
                \$regex .= \"\\\\\$car\";
            } elseif ('*' === \$car) {
                \$regex .= \$escaping ? '\\\\*' : (\$strictWildcardSlash ? '[^/]*' : '.*');
            } elseif ('?' === \$car) {
                \$regex .= \$escaping ? '\\\\?' : (\$strictWildcardSlash ? '[^/]' : '.');
            } elseif ('{' === \$car) {
                \$regex .= \$escaping ? '\\\\{' : '(';
                if (!\$escaping) {
                    ++\$inCurlies;
                }
            } elseif ('}' === \$car && \$inCurlies) {
                \$regex .= \$escaping ? '}' : ')';
                if (!\$escaping) {
                    --\$inCurlies;
                }
            } elseif (',' === \$car && \$inCurlies) {
                \$regex .= \$escaping ? ',' : '|';
            } elseif ('\\\\' === \$car) {
                if (\$escaping) {
                    \$regex .= '\\\\\\\\';
                    \$escaping = false;
                } else {
                    \$escaping = true;
                }

                continue;
            } else {
                \$regex .= \$car;
            }
            \$escaping = false;
        }

        return \$delimiter.'^'.\$regex.'\$'.\$delimiter;
    }
}
", "vendor/symfony/finder/Glob.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Glob.php");
    }
}
