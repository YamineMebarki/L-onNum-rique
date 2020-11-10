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

/* vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php */
class __TwigTemplate_6feb6f19d5f4b729d2614e0a9e4b280096a9df56f63cea799125053e7d0172b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.CodeHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal since Symfony 4.2
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class CodeHelper extends Helper
{
    protected \$fileLinkFormat;
    protected \$rootDir; // to be renamed \$projectDir in 5.0
    protected \$charset;

    /**
     * @param string|FileLinkFormatter \$fileLinkFormat The format for links to source files
     * @param string                   \$projectDir     The project root directory
     * @param string                   \$charset        The charset
     */
    public function __construct(\$fileLinkFormat, string \$projectDir, string \$charset)
    {
        \$this->fileLinkFormat = \$fileLinkFormat ?: ini_get('xdebug.file_link_format') ?: get_cfg_var('xdebug.file_link_format');
        \$this->rootDir = str_replace('\\\\', '/', \$projectDir).'/';
        \$this->charset = \$charset;
    }

    /**
     * Formats an array as a string.
     *
     * @param array \$args The argument array
     *
     * @return string
     */
    public function formatArgsAsText(array \$args)
    {
        return strip_tags(\$this->formatArgs(\$args));
    }

    public function abbrClass(\$class)
    {
        \$parts = explode('\\\\', \$class);
        \$short = array_pop(\$parts);

        return sprintf('<abbr title=\"%s\">%s</abbr>', \$class, \$short);
    }

    public function abbrMethod(\$method)
    {
        if (false !== strpos(\$method, '::')) {
            list(\$class, \$method) = explode('::', \$method, 2);
            \$result = sprintf('%s::%s()', \$this->abbrClass(\$class), \$method);
        } elseif ('Closure' === \$method) {
            \$result = sprintf('<abbr title=\"%s\">%1\$s</abbr>', \$method);
        } else {
            \$result = sprintf('<abbr title=\"%s\">%1\$s</abbr>()', \$method);
        }

        return \$result;
    }

    /**
     * Formats an array as a string.
     *
     * @param array \$args The argument array
     *
     * @return string
     */
    public function formatArgs(array \$args)
    {
        \$result = [];
        foreach (\$args as \$key => \$item) {
            if ('object' === \$item[0]) {
                \$parts = explode('\\\\', \$item[1]);
                \$short = array_pop(\$parts);
                \$formattedValue = sprintf('<em>object</em>(<abbr title=\"%s\">%s</abbr>)', \$item[1], \$short);
            } elseif ('array' === \$item[0]) {
                \$formattedValue = sprintf('<em>array</em>(%s)', \\is_array(\$item[1]) ? \$this->formatArgs(\$item[1]) : \$item[1]);
            } elseif ('string' === \$item[0]) {
                \$formattedValue = sprintf(\"'%s'\", htmlspecialchars(\$item[1], ENT_QUOTES, \$this->getCharset()));
            } elseif ('null' === \$item[0]) {
                \$formattedValue = '<em>null</em>';
            } elseif ('boolean' === \$item[0]) {
                \$formattedValue = '<em>'.strtolower(var_export(\$item[1], true)).'</em>';
            } elseif ('resource' === \$item[0]) {
                \$formattedValue = '<em>resource</em>';
            } else {
                \$formattedValue = str_replace(\"\\n\", '', var_export(htmlspecialchars((string) \$item[1], ENT_QUOTES, \$this->getCharset()), true));
            }

            \$result[] = \\is_int(\$key) ? \$formattedValue : sprintf(\"'%s' => %s\", \$key, \$formattedValue);
        }

        return implode(', ', \$result);
    }

    /**
     * Returns an excerpt of a code file around the given line number.
     *
     * @param string \$file A file path
     * @param int    \$line The selected line number
     *
     * @return string|null An HTML string
     */
    public function fileExcerpt(\$file, \$line)
    {
        if (is_readable(\$file)) {
            if (\\extension_loaded('fileinfo')) {
                \$finfo = new \\finfo();

                // Check if the file is an application/octet-stream (eg. Phar file) because highlight_file cannot parse these files
                if ('application/octet-stream' === \$finfo->file(\$file, FILEINFO_MIME_TYPE)) {
                    return '';
                }
            }

            // highlight_file could throw warnings
            // see https://bugs.php.net/25725
            \$code = @highlight_file(\$file, true);
            // remove main code/span tags
            \$code = preg_replace('#^<code.*?>\\s*<span.*?>(.*)</span>\\s*</code>#s', '\\\\1', \$code);
            \$content = explode('<br />', \$code);

            \$lines = [];
            for (\$i = max(\$line - 3, 1), \$max = min(\$line + 3, \\count(\$content)); \$i <= \$max; ++\$i) {
                \$lines[] = '<li'.(\$i == \$line ? ' class=\"selected\"' : '').'><code>'.self::fixCodeMarkup(\$content[\$i - 1]).'</code></li>';
            }

            return '<ol start=\"'.max(\$line - 3, 1).'\">'.implode(\"\\n\", \$lines).'</ol>';
        }

        return null;
    }

    /**
     * Formats a file path.
     *
     * @param string \$file An absolute file path
     * @param int    \$line The line number
     * @param string \$text Use this text for the link rather than the file path
     *
     * @return string
     */
    public function formatFile(\$file, \$line, \$text = null)
    {
        \$flags = ENT_QUOTES | ENT_SUBSTITUTE;

        if (null === \$text) {
            \$file = trim(\$file);
            \$fileStr = \$file;
            if (0 === strpos(\$fileStr, \$this->rootDir)) {
                \$fileStr = str_replace(['\\\\', \$this->rootDir], ['/', ''], \$fileStr);
                \$fileStr = htmlspecialchars(\$fileStr, \$flags, \$this->charset);
                \$fileStr = sprintf('<abbr title=\"%s\">kernel.project_dir</abbr>/%s', htmlspecialchars(\$this->rootDir, \$flags, \$this->charset), \$fileStr);
            }

            \$text = sprintf('%s at line %d', \$fileStr, \$line);
        }

        if (false !== \$link = \$this->getFileLink(\$file, \$line)) {
            return sprintf('<a href=\"%s\" title=\"Click to open this file\" class=\"file_link\">%s</a>', htmlspecialchars(\$link, \$flags, \$this->charset), \$text);
        }

        return \$text;
    }

    /**
     * Returns the link for a given file/line pair.
     *
     * @param string \$file An absolute file path
     * @param int    \$line The line number
     *
     * @return string A link of false
     */
    public function getFileLink(\$file, \$line)
    {
        if (\$fmt = \$this->fileLinkFormat) {
            return \\is_string(\$fmt) ? strtr(\$fmt, ['%f' => \$file, '%l' => \$line]) : \$fmt->format(\$file, \$line);
        }

        return false;
    }

    public function formatFileFromText(\$text)
    {
        return preg_replace_callback('/in (\"|&quot;)?(.+?)\\1(?: +(?:on|at))? +line (\\d+)/s', function (\$match) {
            return 'in '.\$this->formatFile(\$match[2], \$match[3]);
        }, \$text);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'code';
    }

    protected static function fixCodeMarkup(\$line)
    {
        // </span> ending tag from previous line
        \$opening = strpos(\$line, '<span');
        \$closing = strpos(\$line, '</span>');
        if (false !== \$closing && (false === \$opening || \$closing < \$opening)) {
            \$line = substr_replace(\$line, '', \$closing, 7);
        }

        // missing </span> tag at the end of line
        \$opening = strpos(\$line, '<span');
        \$closing = strpos(\$line, '</span>');
        if (false !== \$opening && (false === \$closing || \$closing > \$opening)) {
            \$line .= '</span>';
        }

        return \$line;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.CodeHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal since Symfony 4.2
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class CodeHelper extends Helper
{
    protected \$fileLinkFormat;
    protected \$rootDir; // to be renamed \$projectDir in 5.0
    protected \$charset;

    /**
     * @param string|FileLinkFormatter \$fileLinkFormat The format for links to source files
     * @param string                   \$projectDir     The project root directory
     * @param string                   \$charset        The charset
     */
    public function __construct(\$fileLinkFormat, string \$projectDir, string \$charset)
    {
        \$this->fileLinkFormat = \$fileLinkFormat ?: ini_get('xdebug.file_link_format') ?: get_cfg_var('xdebug.file_link_format');
        \$this->rootDir = str_replace('\\\\', '/', \$projectDir).'/';
        \$this->charset = \$charset;
    }

    /**
     * Formats an array as a string.
     *
     * @param array \$args The argument array
     *
     * @return string
     */
    public function formatArgsAsText(array \$args)
    {
        return strip_tags(\$this->formatArgs(\$args));
    }

    public function abbrClass(\$class)
    {
        \$parts = explode('\\\\', \$class);
        \$short = array_pop(\$parts);

        return sprintf('<abbr title=\"%s\">%s</abbr>', \$class, \$short);
    }

    public function abbrMethod(\$method)
    {
        if (false !== strpos(\$method, '::')) {
            list(\$class, \$method) = explode('::', \$method, 2);
            \$result = sprintf('%s::%s()', \$this->abbrClass(\$class), \$method);
        } elseif ('Closure' === \$method) {
            \$result = sprintf('<abbr title=\"%s\">%1\$s</abbr>', \$method);
        } else {
            \$result = sprintf('<abbr title=\"%s\">%1\$s</abbr>()', \$method);
        }

        return \$result;
    }

    /**
     * Formats an array as a string.
     *
     * @param array \$args The argument array
     *
     * @return string
     */
    public function formatArgs(array \$args)
    {
        \$result = [];
        foreach (\$args as \$key => \$item) {
            if ('object' === \$item[0]) {
                \$parts = explode('\\\\', \$item[1]);
                \$short = array_pop(\$parts);
                \$formattedValue = sprintf('<em>object</em>(<abbr title=\"%s\">%s</abbr>)', \$item[1], \$short);
            } elseif ('array' === \$item[0]) {
                \$formattedValue = sprintf('<em>array</em>(%s)', \\is_array(\$item[1]) ? \$this->formatArgs(\$item[1]) : \$item[1]);
            } elseif ('string' === \$item[0]) {
                \$formattedValue = sprintf(\"'%s'\", htmlspecialchars(\$item[1], ENT_QUOTES, \$this->getCharset()));
            } elseif ('null' === \$item[0]) {
                \$formattedValue = '<em>null</em>';
            } elseif ('boolean' === \$item[0]) {
                \$formattedValue = '<em>'.strtolower(var_export(\$item[1], true)).'</em>';
            } elseif ('resource' === \$item[0]) {
                \$formattedValue = '<em>resource</em>';
            } else {
                \$formattedValue = str_replace(\"\\n\", '', var_export(htmlspecialchars((string) \$item[1], ENT_QUOTES, \$this->getCharset()), true));
            }

            \$result[] = \\is_int(\$key) ? \$formattedValue : sprintf(\"'%s' => %s\", \$key, \$formattedValue);
        }

        return implode(', ', \$result);
    }

    /**
     * Returns an excerpt of a code file around the given line number.
     *
     * @param string \$file A file path
     * @param int    \$line The selected line number
     *
     * @return string|null An HTML string
     */
    public function fileExcerpt(\$file, \$line)
    {
        if (is_readable(\$file)) {
            if (\\extension_loaded('fileinfo')) {
                \$finfo = new \\finfo();

                // Check if the file is an application/octet-stream (eg. Phar file) because highlight_file cannot parse these files
                if ('application/octet-stream' === \$finfo->file(\$file, FILEINFO_MIME_TYPE)) {
                    return '';
                }
            }

            // highlight_file could throw warnings
            // see https://bugs.php.net/25725
            \$code = @highlight_file(\$file, true);
            // remove main code/span tags
            \$code = preg_replace('#^<code.*?>\\s*<span.*?>(.*)</span>\\s*</code>#s', '\\\\1', \$code);
            \$content = explode('<br />', \$code);

            \$lines = [];
            for (\$i = max(\$line - 3, 1), \$max = min(\$line + 3, \\count(\$content)); \$i <= \$max; ++\$i) {
                \$lines[] = '<li'.(\$i == \$line ? ' class=\"selected\"' : '').'><code>'.self::fixCodeMarkup(\$content[\$i - 1]).'</code></li>';
            }

            return '<ol start=\"'.max(\$line - 3, 1).'\">'.implode(\"\\n\", \$lines).'</ol>';
        }

        return null;
    }

    /**
     * Formats a file path.
     *
     * @param string \$file An absolute file path
     * @param int    \$line The line number
     * @param string \$text Use this text for the link rather than the file path
     *
     * @return string
     */
    public function formatFile(\$file, \$line, \$text = null)
    {
        \$flags = ENT_QUOTES | ENT_SUBSTITUTE;

        if (null === \$text) {
            \$file = trim(\$file);
            \$fileStr = \$file;
            if (0 === strpos(\$fileStr, \$this->rootDir)) {
                \$fileStr = str_replace(['\\\\', \$this->rootDir], ['/', ''], \$fileStr);
                \$fileStr = htmlspecialchars(\$fileStr, \$flags, \$this->charset);
                \$fileStr = sprintf('<abbr title=\"%s\">kernel.project_dir</abbr>/%s', htmlspecialchars(\$this->rootDir, \$flags, \$this->charset), \$fileStr);
            }

            \$text = sprintf('%s at line %d', \$fileStr, \$line);
        }

        if (false !== \$link = \$this->getFileLink(\$file, \$line)) {
            return sprintf('<a href=\"%s\" title=\"Click to open this file\" class=\"file_link\">%s</a>', htmlspecialchars(\$link, \$flags, \$this->charset), \$text);
        }

        return \$text;
    }

    /**
     * Returns the link for a given file/line pair.
     *
     * @param string \$file An absolute file path
     * @param int    \$line The line number
     *
     * @return string A link of false
     */
    public function getFileLink(\$file, \$line)
    {
        if (\$fmt = \$this->fileLinkFormat) {
            return \\is_string(\$fmt) ? strtr(\$fmt, ['%f' => \$file, '%l' => \$line]) : \$fmt->format(\$file, \$line);
        }

        return false;
    }

    public function formatFileFromText(\$text)
    {
        return preg_replace_callback('/in (\"|&quot;)?(.+?)\\1(?: +(?:on|at))? +line (\\d+)/s', function (\$match) {
            return 'in '.\$this->formatFile(\$match[2], \$match[3]);
        }, \$text);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'code';
    }

    protected static function fixCodeMarkup(\$line)
    {
        // </span> ending tag from previous line
        \$opening = strpos(\$line, '<span');
        \$closing = strpos(\$line, '</span>');
        if (false !== \$closing && (false === \$opening || \$closing < \$opening)) {
            \$line = substr_replace(\$line, '', \$closing, 7);
        }

        // missing </span> tag at the end of line
        \$opening = strpos(\$line, '<span');
        \$closing = strpos(\$line, '</span>');
        if (false !== \$opening && (false === \$closing || \$closing > \$opening)) {
            \$line .= '</span>';
        }

        return \$line;
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/CodeHelper.php");
    }
}
