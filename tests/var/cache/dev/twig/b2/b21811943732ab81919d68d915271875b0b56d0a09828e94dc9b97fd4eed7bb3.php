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

/* vendor/symfony/console/Helper/Helper.php */
class __TwigTemplate_9e7c53dcef35aee42ddf70764e08c09e3a6e3ac04c325182afb294937bfdb2dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/Helper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/Helper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * Helper is the base class for all helper classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Helper implements HelperInterface
{
    protected \$helperSet = null;

    /**
     * {@inheritdoc}
     */
    public function setHelperSet(HelperSet \$helperSet = null)
    {
        \$this->helperSet = \$helperSet;
    }

    /**
     * {@inheritdoc}
     */
    public function getHelperSet()
    {
        return \$this->helperSet;
    }

    /**
     * Returns the length of a string, using mb_strwidth if it is available.
     *
     * @param string \$string The string to check its length
     *
     * @return int The length of the string
     */
    public static function strlen(\$string)
    {
        if (false === \$encoding = mb_detect_encoding(\$string, null, true)) {
            return \\strlen(\$string);
        }

        return mb_strwidth(\$string, \$encoding);
    }

    /**
     * Returns the subset of a string, using mb_substr if it is available.
     *
     * @param string   \$string String to subset
     * @param int      \$from   Start offset
     * @param int|null \$length Length to read
     *
     * @return string The string subset
     */
    public static function substr(\$string, \$from, \$length = null)
    {
        if (false === \$encoding = mb_detect_encoding(\$string, null, true)) {
            return substr(\$string, \$from, \$length);
        }

        return mb_substr(\$string, \$from, \$length, \$encoding);
    }

    public static function formatTime(\$secs)
    {
        static \$timeFormats = [
            [0, '< 1 sec'],
            [1, '1 sec'],
            [2, 'secs', 1],
            [60, '1 min'],
            [120, 'mins', 60],
            [3600, '1 hr'],
            [7200, 'hrs', 3600],
            [86400, '1 day'],
            [172800, 'days', 86400],
        ];

        foreach (\$timeFormats as \$index => \$format) {
            if (\$secs >= \$format[0]) {
                if ((isset(\$timeFormats[\$index + 1]) && \$secs < \$timeFormats[\$index + 1][0])
                    || \$index == \\count(\$timeFormats) - 1
                ) {
                    if (2 == \\count(\$format)) {
                        return \$format[1];
                    }

                    return floor(\$secs / \$format[2]).' '.\$format[1];
                }
            }
        }
    }

    public static function formatMemory(\$memory)
    {
        if (\$memory >= 1024 * 1024 * 1024) {
            return sprintf('%.1f GiB', \$memory / 1024 / 1024 / 1024);
        }

        if (\$memory >= 1024 * 1024) {
            return sprintf('%.1f MiB', \$memory / 1024 / 1024);
        }

        if (\$memory >= 1024) {
            return sprintf('%d KiB', \$memory / 1024);
        }

        return sprintf('%d B', \$memory);
    }

    public static function strlenWithoutDecoration(OutputFormatterInterface \$formatter, \$string)
    {
        return self::strlen(self::removeDecoration(\$formatter, \$string));
    }

    public static function removeDecoration(OutputFormatterInterface \$formatter, \$string)
    {
        \$isDecorated = \$formatter->isDecorated();
        \$formatter->setDecorated(false);
        // remove <...> formatting
        \$string = \$formatter->format(\$string);
        // remove already formatted characters
        \$string = preg_replace(\"/\\033\\[[^m]*m/\", '', \$string);
        \$formatter->setDecorated(\$isDecorated);

        return \$string;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/Helper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * Helper is the base class for all helper classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Helper implements HelperInterface
{
    protected \$helperSet = null;

    /**
     * {@inheritdoc}
     */
    public function setHelperSet(HelperSet \$helperSet = null)
    {
        \$this->helperSet = \$helperSet;
    }

    /**
     * {@inheritdoc}
     */
    public function getHelperSet()
    {
        return \$this->helperSet;
    }

    /**
     * Returns the length of a string, using mb_strwidth if it is available.
     *
     * @param string \$string The string to check its length
     *
     * @return int The length of the string
     */
    public static function strlen(\$string)
    {
        if (false === \$encoding = mb_detect_encoding(\$string, null, true)) {
            return \\strlen(\$string);
        }

        return mb_strwidth(\$string, \$encoding);
    }

    /**
     * Returns the subset of a string, using mb_substr if it is available.
     *
     * @param string   \$string String to subset
     * @param int      \$from   Start offset
     * @param int|null \$length Length to read
     *
     * @return string The string subset
     */
    public static function substr(\$string, \$from, \$length = null)
    {
        if (false === \$encoding = mb_detect_encoding(\$string, null, true)) {
            return substr(\$string, \$from, \$length);
        }

        return mb_substr(\$string, \$from, \$length, \$encoding);
    }

    public static function formatTime(\$secs)
    {
        static \$timeFormats = [
            [0, '< 1 sec'],
            [1, '1 sec'],
            [2, 'secs', 1],
            [60, '1 min'],
            [120, 'mins', 60],
            [3600, '1 hr'],
            [7200, 'hrs', 3600],
            [86400, '1 day'],
            [172800, 'days', 86400],
        ];

        foreach (\$timeFormats as \$index => \$format) {
            if (\$secs >= \$format[0]) {
                if ((isset(\$timeFormats[\$index + 1]) && \$secs < \$timeFormats[\$index + 1][0])
                    || \$index == \\count(\$timeFormats) - 1
                ) {
                    if (2 == \\count(\$format)) {
                        return \$format[1];
                    }

                    return floor(\$secs / \$format[2]).' '.\$format[1];
                }
            }
        }
    }

    public static function formatMemory(\$memory)
    {
        if (\$memory >= 1024 * 1024 * 1024) {
            return sprintf('%.1f GiB', \$memory / 1024 / 1024 / 1024);
        }

        if (\$memory >= 1024 * 1024) {
            return sprintf('%.1f MiB', \$memory / 1024 / 1024);
        }

        if (\$memory >= 1024) {
            return sprintf('%d KiB', \$memory / 1024);
        }

        return sprintf('%d B', \$memory);
    }

    public static function strlenWithoutDecoration(OutputFormatterInterface \$formatter, \$string)
    {
        return self::strlen(self::removeDecoration(\$formatter, \$string));
    }

    public static function removeDecoration(OutputFormatterInterface \$formatter, \$string)
    {
        \$isDecorated = \$formatter->isDecorated();
        \$formatter->setDecorated(false);
        // remove <...> formatting
        \$string = \$formatter->format(\$string);
        // remove already formatted characters
        \$string = preg_replace(\"/\\033\\[[^m]*m/\", '', \$string);
        \$formatter->setDecorated(\$isDecorated);

        return \$string;
    }
}
", "vendor/symfony/console/Helper/Helper.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/Helper.php");
    }
}
