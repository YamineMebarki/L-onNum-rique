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

/* vendor/symfony/console/Terminal.php */
class __TwigTemplate_f330f6dc1608bcaf4197a2ecfa5e0f8b6106c919f68e54844e2d5c86993ad5a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Terminal.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Terminal.php"));

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

namespace Symfony\\Component\\Console;

class Terminal
{
    private static \$width;
    private static \$height;
    private static \$stty;

    /**
     * Gets the terminal width.
     *
     * @return int
     */
    public function getWidth()
    {
        \$width = getenv('COLUMNS');
        if (false !== \$width) {
            return (int) trim(\$width);
        }

        if (null === self::\$width) {
            self::initDimensions();
        }

        return self::\$width ?: 80;
    }

    /**
     * Gets the terminal height.
     *
     * @return int
     */
    public function getHeight()
    {
        \$height = getenv('LINES');
        if (false !== \$height) {
            return (int) trim(\$height);
        }

        if (null === self::\$height) {
            self::initDimensions();
        }

        return self::\$height ?: 50;
    }

    /**
     * @internal
     *
     * @return bool
     */
    public static function hasSttyAvailable()
    {
        if (null !== self::\$stty) {
            return self::\$stty;
        }

        exec('stty 2>&1', \$output, \$exitcode);

        return self::\$stty = 0 === \$exitcode;
    }

    private static function initDimensions()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            if (preg_match('/^(\\d+)x(\\d+)(?: \\((\\d+)x(\\d+)\\))?\$/', trim(getenv('ANSICON')), \$matches)) {
                // extract [w, H] from \"wxh (WxH)\"
                // or [w, h] from \"wxh\"
                self::\$width = (int) \$matches[1];
                self::\$height = isset(\$matches[4]) ? (int) \$matches[4] : (int) \$matches[2];
            } elseif (self::hasSttyAvailable()) {
                self::initDimensionsUsingStty();
            } elseif (null !== \$dimensions = self::getConsoleMode()) {
                // extract [w, h] from \"wxh\"
                self::\$width = (int) \$dimensions[0];
                self::\$height = (int) \$dimensions[1];
            }
        } else {
            self::initDimensionsUsingStty();
        }
    }

    private static function initDimensionsUsingStty()
    {
        if (\$sttyString = self::getSttyColumns()) {
            if (preg_match('/rows.(\\d+);.columns.(\\d+);/i', \$sttyString, \$matches)) {
                // extract [w, h] from \"rows h; columns w;\"
                self::\$width = (int) \$matches[2];
                self::\$height = (int) \$matches[1];
            } elseif (preg_match('/;.(\\d+).rows;.(\\d+).columns/i', \$sttyString, \$matches)) {
                // extract [w, h] from \"; h rows; w columns\"
                self::\$width = (int) \$matches[2];
                self::\$height = (int) \$matches[1];
            }
        }
    }

    /**
     * Runs and parses mode CON if it's available, suppressing any error output.
     *
     * @return int[]|null An array composed of the width and the height or null if it could not be parsed
     */
    private static function getConsoleMode()
    {
        \$info = self::readFromProcess('mode CON');

        if (null === \$info || !preg_match('/--------+\\r?\\n.+?(\\d+)\\r?\\n.+?(\\d+)\\r?\\n/', \$info, \$matches)) {
            return null;
        }

        return [(int) \$matches[2], (int) \$matches[1]];
    }

    /**
     * Runs and parses stty -a if it's available, suppressing any error output.
     *
     * @return string|null
     */
    private static function getSttyColumns()
    {
        return self::readFromProcess('stty -a | grep columns');
    }

    /**
     * @param string \$command
     *
     * @return string|null
     */
    private static function readFromProcess(\$command)
    {
        if (!\\function_exists('proc_open')) {
            return null;
        }

        \$descriptorspec = [
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];

        \$process = proc_open(\$command, \$descriptorspec, \$pipes, null, null, ['suppress_errors' => true]);
        if (!\\is_resource(\$process)) {
            return null;
        }

        \$info = stream_get_contents(\$pipes[1]);
        fclose(\$pipes[1]);
        fclose(\$pipes[2]);
        proc_close(\$process);

        return \$info;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Terminal.php";
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

namespace Symfony\\Component\\Console;

class Terminal
{
    private static \$width;
    private static \$height;
    private static \$stty;

    /**
     * Gets the terminal width.
     *
     * @return int
     */
    public function getWidth()
    {
        \$width = getenv('COLUMNS');
        if (false !== \$width) {
            return (int) trim(\$width);
        }

        if (null === self::\$width) {
            self::initDimensions();
        }

        return self::\$width ?: 80;
    }

    /**
     * Gets the terminal height.
     *
     * @return int
     */
    public function getHeight()
    {
        \$height = getenv('LINES');
        if (false !== \$height) {
            return (int) trim(\$height);
        }

        if (null === self::\$height) {
            self::initDimensions();
        }

        return self::\$height ?: 50;
    }

    /**
     * @internal
     *
     * @return bool
     */
    public static function hasSttyAvailable()
    {
        if (null !== self::\$stty) {
            return self::\$stty;
        }

        exec('stty 2>&1', \$output, \$exitcode);

        return self::\$stty = 0 === \$exitcode;
    }

    private static function initDimensions()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            if (preg_match('/^(\\d+)x(\\d+)(?: \\((\\d+)x(\\d+)\\))?\$/', trim(getenv('ANSICON')), \$matches)) {
                // extract [w, H] from \"wxh (WxH)\"
                // or [w, h] from \"wxh\"
                self::\$width = (int) \$matches[1];
                self::\$height = isset(\$matches[4]) ? (int) \$matches[4] : (int) \$matches[2];
            } elseif (self::hasSttyAvailable()) {
                self::initDimensionsUsingStty();
            } elseif (null !== \$dimensions = self::getConsoleMode()) {
                // extract [w, h] from \"wxh\"
                self::\$width = (int) \$dimensions[0];
                self::\$height = (int) \$dimensions[1];
            }
        } else {
            self::initDimensionsUsingStty();
        }
    }

    private static function initDimensionsUsingStty()
    {
        if (\$sttyString = self::getSttyColumns()) {
            if (preg_match('/rows.(\\d+);.columns.(\\d+);/i', \$sttyString, \$matches)) {
                // extract [w, h] from \"rows h; columns w;\"
                self::\$width = (int) \$matches[2];
                self::\$height = (int) \$matches[1];
            } elseif (preg_match('/;.(\\d+).rows;.(\\d+).columns/i', \$sttyString, \$matches)) {
                // extract [w, h] from \"; h rows; w columns\"
                self::\$width = (int) \$matches[2];
                self::\$height = (int) \$matches[1];
            }
        }
    }

    /**
     * Runs and parses mode CON if it's available, suppressing any error output.
     *
     * @return int[]|null An array composed of the width and the height or null if it could not be parsed
     */
    private static function getConsoleMode()
    {
        \$info = self::readFromProcess('mode CON');

        if (null === \$info || !preg_match('/--------+\\r?\\n.+?(\\d+)\\r?\\n.+?(\\d+)\\r?\\n/', \$info, \$matches)) {
            return null;
        }

        return [(int) \$matches[2], (int) \$matches[1]];
    }

    /**
     * Runs and parses stty -a if it's available, suppressing any error output.
     *
     * @return string|null
     */
    private static function getSttyColumns()
    {
        return self::readFromProcess('stty -a | grep columns');
    }

    /**
     * @param string \$command
     *
     * @return string|null
     */
    private static function readFromProcess(\$command)
    {
        if (!\\function_exists('proc_open')) {
            return null;
        }

        \$descriptorspec = [
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];

        \$process = proc_open(\$command, \$descriptorspec, \$pipes, null, null, ['suppress_errors' => true]);
        if (!\\is_resource(\$process)) {
            return null;
        }

        \$info = stream_get_contents(\$pipes[1]);
        fclose(\$pipes[1]);
        fclose(\$pipes[2]);
        proc_close(\$process);

        return \$info;
    }
}
", "vendor/symfony/console/Terminal.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Terminal.php");
    }
}
