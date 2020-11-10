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

/* vendor/symfony/console/Formatter/OutputFormatter.php */
class __TwigTemplate_4a4460599abc89ae587054678ac7ee83e753944732e8fbbe1a75924877041518 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatter.php"));

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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Formatter class for console output.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class OutputFormatter implements WrappableOutputFormatterInterface
{
    private \$decorated;
    private \$styles = [];
    private \$styleStack;

    /**
     * Escapes \"<\" special char in given text.
     *
     * @param string \$text Text to escape
     *
     * @return string Escaped text
     */
    public static function escape(\$text)
    {
        \$text = preg_replace('/([^\\\\\\\\]?)</', '\$1\\\\<', \$text);

        return self::escapeTrailingBackslash(\$text);
    }

    /**
     * Escapes trailing \"\\\" in given text.
     *
     * @param string \$text Text to escape
     *
     * @return string Escaped text
     *
     * @internal
     */
    public static function escapeTrailingBackslash(\$text)
    {
        if ('\\\\' === substr(\$text, -1)) {
            \$len = \\strlen(\$text);
            \$text = rtrim(\$text, '\\\\');
            \$text = str_replace(\"\\0\", '', \$text);
            \$text .= str_repeat(\"\\0\", \$len - \\strlen(\$text));
        }

        return \$text;
    }

    /**
     * Initializes console output formatter.
     *
     * @param bool                            \$decorated Whether this formatter should actually decorate strings
     * @param OutputFormatterStyleInterface[] \$styles    Array of \"name => FormatterStyle\" instances
     */
    public function __construct(bool \$decorated = false, array \$styles = [])
    {
        \$this->decorated = \$decorated;

        \$this->setStyle('error', new OutputFormatterStyle('white', 'red'));
        \$this->setStyle('info', new OutputFormatterStyle('green'));
        \$this->setStyle('comment', new OutputFormatterStyle('yellow'));
        \$this->setStyle('question', new OutputFormatterStyle('black', 'cyan'));

        foreach (\$styles as \$name => \$style) {
            \$this->setStyle(\$name, \$style);
        }

        \$this->styleStack = new OutputFormatterStyleStack();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->decorated = (bool) \$decorated;
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->decorated;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle(\$name, OutputFormatterStyleInterface \$style)
    {
        \$this->styles[strtolower(\$name)] = \$style;
    }

    /**
     * {@inheritdoc}
     */
    public function hasStyle(\$name)
    {
        return isset(\$this->styles[strtolower(\$name)]);
    }

    /**
     * {@inheritdoc}
     */
    public function getStyle(\$name)
    {
        if (!\$this->hasStyle(\$name)) {
            throw new InvalidArgumentException(sprintf('Undefined style: %s', \$name));
        }

        return \$this->styles[strtolower(\$name)];
    }

    /**
     * {@inheritdoc}
     */
    public function format(\$message)
    {
        return \$this->formatAndWrap((string) \$message, 0);
    }

    /**
     * {@inheritdoc}
     */
    public function formatAndWrap(string \$message, int \$width)
    {
        \$offset = 0;
        \$output = '';
        \$tagRegex = '[a-z][^<>]*+';
        \$currentLineLength = 0;
        preg_match_all(\"#<((\$tagRegex) | /(\$tagRegex)?)>#ix\", \$message, \$matches, PREG_OFFSET_CAPTURE);
        foreach (\$matches[0] as \$i => \$match) {
            \$pos = \$match[1];
            \$text = \$match[0];

            if (0 != \$pos && '\\\\' == \$message[\$pos - 1]) {
                continue;
            }

            // add the text up to the next tag
            \$output .= \$this->applyCurrentStyle(substr(\$message, \$offset, \$pos - \$offset), \$output, \$width, \$currentLineLength);
            \$offset = \$pos + \\strlen(\$text);

            // opening tag?
            if (\$open = '/' != \$text[1]) {
                \$tag = \$matches[1][\$i][0];
            } else {
                \$tag = isset(\$matches[3][\$i][0]) ? \$matches[3][\$i][0] : '';
            }

            if (!\$open && !\$tag) {
                // </>
                \$this->styleStack->pop();
            } elseif (false === \$style = \$this->createStyleFromString(\$tag)) {
                \$output .= \$this->applyCurrentStyle(\$text, \$output, \$width, \$currentLineLength);
            } elseif (\$open) {
                \$this->styleStack->push(\$style);
            } else {
                \$this->styleStack->pop(\$style);
            }
        }

        \$output .= \$this->applyCurrentStyle(substr(\$message, \$offset), \$output, \$width, \$currentLineLength);

        if (false !== strpos(\$output, \"\\0\")) {
            return strtr(\$output, [\"\\0\" => '\\\\', '\\\\<' => '<']);
        }

        return str_replace('\\\\<', '<', \$output);
    }

    /**
     * @return OutputFormatterStyleStack
     */
    public function getStyleStack()
    {
        return \$this->styleStack;
    }

    /**
     * Tries to create new style instance from string.
     *
     * @return OutputFormatterStyle|false False if string is not format string
     */
    private function createStyleFromString(string \$string)
    {
        if (isset(\$this->styles[\$string])) {
            return \$this->styles[\$string];
        }

        if (!preg_match_all('/([^=]+)=([^;]+)(;|\$)/', \$string, \$matches, PREG_SET_ORDER)) {
            return false;
        }

        \$style = new OutputFormatterStyle();
        foreach (\$matches as \$match) {
            array_shift(\$match);
            \$match[0] = strtolower(\$match[0]);

            if ('fg' == \$match[0]) {
                \$style->setForeground(strtolower(\$match[1]));
            } elseif ('bg' == \$match[0]) {
                \$style->setBackground(strtolower(\$match[1]));
            } elseif ('href' === \$match[0]) {
                \$style->setHref(\$match[1]);
            } elseif ('options' === \$match[0]) {
                preg_match_all('([^,;]+)', strtolower(\$match[1]), \$options);
                \$options = array_shift(\$options);
                foreach (\$options as \$option) {
                    \$style->setOption(\$option);
                }
            } else {
                return false;
            }
        }

        return \$style;
    }

    /**
     * Applies current style from stack to text, if must be applied.
     */
    private function applyCurrentStyle(string \$text, string \$current, int \$width, int &\$currentLineLength): string
    {
        if ('' === \$text) {
            return '';
        }

        if (!\$width) {
            return \$this->isDecorated() ? \$this->styleStack->getCurrent()->apply(\$text) : \$text;
        }

        if (!\$currentLineLength && '' !== \$current) {
            \$text = ltrim(\$text);
        }

        if (\$currentLineLength) {
            \$prefix = substr(\$text, 0, \$i = \$width - \$currentLineLength).\"\\n\";
            \$text = substr(\$text, \$i);
        } else {
            \$prefix = '';
        }

        preg_match('~(\\\\n)\$~', \$text, \$matches);
        \$text = \$prefix.preg_replace('~([^\\\\n]{'.\$width.'})\\\\ *~', \"\\\$1\\n\", \$text);
        \$text = rtrim(\$text, \"\\n\").(\$matches[1] ?? '');

        if (!\$currentLineLength && '' !== \$current && \"\\n\" !== substr(\$current, -1)) {
            \$text = \"\\n\".\$text;
        }

        \$lines = explode(\"\\n\", \$text);

        foreach (\$lines as \$line) {
            \$currentLineLength += \\strlen(\$line);
            if (\$width <= \$currentLineLength) {
                \$currentLineLength = 0;
            }
        }

        if (\$this->isDecorated()) {
            foreach (\$lines as \$i => \$line) {
                \$lines[\$i] = \$this->styleStack->getCurrent()->apply(\$line);
            }
        }

        return implode(\"\\n\", \$lines);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Formatter/OutputFormatter.php";
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

namespace Symfony\\Component\\Console\\Formatter;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Formatter class for console output.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class OutputFormatter implements WrappableOutputFormatterInterface
{
    private \$decorated;
    private \$styles = [];
    private \$styleStack;

    /**
     * Escapes \"<\" special char in given text.
     *
     * @param string \$text Text to escape
     *
     * @return string Escaped text
     */
    public static function escape(\$text)
    {
        \$text = preg_replace('/([^\\\\\\\\]?)</', '\$1\\\\<', \$text);

        return self::escapeTrailingBackslash(\$text);
    }

    /**
     * Escapes trailing \"\\\" in given text.
     *
     * @param string \$text Text to escape
     *
     * @return string Escaped text
     *
     * @internal
     */
    public static function escapeTrailingBackslash(\$text)
    {
        if ('\\\\' === substr(\$text, -1)) {
            \$len = \\strlen(\$text);
            \$text = rtrim(\$text, '\\\\');
            \$text = str_replace(\"\\0\", '', \$text);
            \$text .= str_repeat(\"\\0\", \$len - \\strlen(\$text));
        }

        return \$text;
    }

    /**
     * Initializes console output formatter.
     *
     * @param bool                            \$decorated Whether this formatter should actually decorate strings
     * @param OutputFormatterStyleInterface[] \$styles    Array of \"name => FormatterStyle\" instances
     */
    public function __construct(bool \$decorated = false, array \$styles = [])
    {
        \$this->decorated = \$decorated;

        \$this->setStyle('error', new OutputFormatterStyle('white', 'red'));
        \$this->setStyle('info', new OutputFormatterStyle('green'));
        \$this->setStyle('comment', new OutputFormatterStyle('yellow'));
        \$this->setStyle('question', new OutputFormatterStyle('black', 'cyan'));

        foreach (\$styles as \$name => \$style) {
            \$this->setStyle(\$name, \$style);
        }

        \$this->styleStack = new OutputFormatterStyleStack();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->decorated = (bool) \$decorated;
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->decorated;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle(\$name, OutputFormatterStyleInterface \$style)
    {
        \$this->styles[strtolower(\$name)] = \$style;
    }

    /**
     * {@inheritdoc}
     */
    public function hasStyle(\$name)
    {
        return isset(\$this->styles[strtolower(\$name)]);
    }

    /**
     * {@inheritdoc}
     */
    public function getStyle(\$name)
    {
        if (!\$this->hasStyle(\$name)) {
            throw new InvalidArgumentException(sprintf('Undefined style: %s', \$name));
        }

        return \$this->styles[strtolower(\$name)];
    }

    /**
     * {@inheritdoc}
     */
    public function format(\$message)
    {
        return \$this->formatAndWrap((string) \$message, 0);
    }

    /**
     * {@inheritdoc}
     */
    public function formatAndWrap(string \$message, int \$width)
    {
        \$offset = 0;
        \$output = '';
        \$tagRegex = '[a-z][^<>]*+';
        \$currentLineLength = 0;
        preg_match_all(\"#<((\$tagRegex) | /(\$tagRegex)?)>#ix\", \$message, \$matches, PREG_OFFSET_CAPTURE);
        foreach (\$matches[0] as \$i => \$match) {
            \$pos = \$match[1];
            \$text = \$match[0];

            if (0 != \$pos && '\\\\' == \$message[\$pos - 1]) {
                continue;
            }

            // add the text up to the next tag
            \$output .= \$this->applyCurrentStyle(substr(\$message, \$offset, \$pos - \$offset), \$output, \$width, \$currentLineLength);
            \$offset = \$pos + \\strlen(\$text);

            // opening tag?
            if (\$open = '/' != \$text[1]) {
                \$tag = \$matches[1][\$i][0];
            } else {
                \$tag = isset(\$matches[3][\$i][0]) ? \$matches[3][\$i][0] : '';
            }

            if (!\$open && !\$tag) {
                // </>
                \$this->styleStack->pop();
            } elseif (false === \$style = \$this->createStyleFromString(\$tag)) {
                \$output .= \$this->applyCurrentStyle(\$text, \$output, \$width, \$currentLineLength);
            } elseif (\$open) {
                \$this->styleStack->push(\$style);
            } else {
                \$this->styleStack->pop(\$style);
            }
        }

        \$output .= \$this->applyCurrentStyle(substr(\$message, \$offset), \$output, \$width, \$currentLineLength);

        if (false !== strpos(\$output, \"\\0\")) {
            return strtr(\$output, [\"\\0\" => '\\\\', '\\\\<' => '<']);
        }

        return str_replace('\\\\<', '<', \$output);
    }

    /**
     * @return OutputFormatterStyleStack
     */
    public function getStyleStack()
    {
        return \$this->styleStack;
    }

    /**
     * Tries to create new style instance from string.
     *
     * @return OutputFormatterStyle|false False if string is not format string
     */
    private function createStyleFromString(string \$string)
    {
        if (isset(\$this->styles[\$string])) {
            return \$this->styles[\$string];
        }

        if (!preg_match_all('/([^=]+)=([^;]+)(;|\$)/', \$string, \$matches, PREG_SET_ORDER)) {
            return false;
        }

        \$style = new OutputFormatterStyle();
        foreach (\$matches as \$match) {
            array_shift(\$match);
            \$match[0] = strtolower(\$match[0]);

            if ('fg' == \$match[0]) {
                \$style->setForeground(strtolower(\$match[1]));
            } elseif ('bg' == \$match[0]) {
                \$style->setBackground(strtolower(\$match[1]));
            } elseif ('href' === \$match[0]) {
                \$style->setHref(\$match[1]);
            } elseif ('options' === \$match[0]) {
                preg_match_all('([^,;]+)', strtolower(\$match[1]), \$options);
                \$options = array_shift(\$options);
                foreach (\$options as \$option) {
                    \$style->setOption(\$option);
                }
            } else {
                return false;
            }
        }

        return \$style;
    }

    /**
     * Applies current style from stack to text, if must be applied.
     */
    private function applyCurrentStyle(string \$text, string \$current, int \$width, int &\$currentLineLength): string
    {
        if ('' === \$text) {
            return '';
        }

        if (!\$width) {
            return \$this->isDecorated() ? \$this->styleStack->getCurrent()->apply(\$text) : \$text;
        }

        if (!\$currentLineLength && '' !== \$current) {
            \$text = ltrim(\$text);
        }

        if (\$currentLineLength) {
            \$prefix = substr(\$text, 0, \$i = \$width - \$currentLineLength).\"\\n\";
            \$text = substr(\$text, \$i);
        } else {
            \$prefix = '';
        }

        preg_match('~(\\\\n)\$~', \$text, \$matches);
        \$text = \$prefix.preg_replace('~([^\\\\n]{'.\$width.'})\\\\ *~', \"\\\$1\\n\", \$text);
        \$text = rtrim(\$text, \"\\n\").(\$matches[1] ?? '');

        if (!\$currentLineLength && '' !== \$current && \"\\n\" !== substr(\$current, -1)) {
            \$text = \"\\n\".\$text;
        }

        \$lines = explode(\"\\n\", \$text);

        foreach (\$lines as \$line) {
            \$currentLineLength += \\strlen(\$line);
            if (\$width <= \$currentLineLength) {
                \$currentLineLength = 0;
            }
        }

        if (\$this->isDecorated()) {
            foreach (\$lines as \$i => \$line) {
                \$lines[\$i] = \$this->styleStack->getCurrent()->apply(\$line);
            }
        }

        return implode(\"\\n\", \$lines);
    }
}
", "vendor/symfony/console/Formatter/OutputFormatter.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Formatter/OutputFormatter.php");
    }
}
