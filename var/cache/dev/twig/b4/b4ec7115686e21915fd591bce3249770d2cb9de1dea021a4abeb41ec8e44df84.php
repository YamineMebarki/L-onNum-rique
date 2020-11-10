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

/* vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php */
class __TwigTemplate_8dfcac49b79b590ad1542ba133d63e950fb24cff54056ba2d6f9c56edcab4474 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php"));

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

namespace Symfony\\Bridge\\PhpUnit;

use PHPUnit\\Framework\\TestResult;
use PHPUnit\\Util\\ErrorHandler;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Configuration;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Deprecation;

/**
 * Catch deprecation notices and print a summary report at the end of the test suite.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DeprecationErrorHandler
{
    /**
     * @deprecated since Symfony 4.3, use max[self]=0 instead
     */
    const MODE_WEAK_VENDORS = 'weak_vendors';

    const MODE_DISABLED = 'disabled';
    const MODE_WEAK = 'max[total]=999999&verbose=0';
    const MODE_STRICT = 'max[total]=0';

    private \$mode;
    private \$configuration;
    private \$deprecations = [
        'unsilencedCount' => 0,
        'remaining selfCount' => 0,
        'legacyCount' => 0,
        'otherCount' => 0,
        'remaining directCount' => 0,
        'remaining indirectCount' => 0,
        'unsilenced' => [],
        'remaining self' => [],
        'legacy' => [],
        'other' => [],
        'remaining direct' => [],
        'remaining indirect' => [],
    ];

    private static \$isRegistered = false;
    private static \$utilPrefix;
    private static \$isAtLeastPhpUnit83;

    /**
     * Registers and configures the deprecation handler.
     *
     * The mode is a query string with options:
     *  - \"disabled\" to disable the deprecation handler
     *  - \"verbose\" to enable/disable displaying the deprecation report
     *  - \"max\" to configure the number of deprecations to allow before exiting with a non-zero
     *    status code; it's an array with keys \"total\", \"self\", \"direct\" and \"indirect\"
     *
     * The default mode is \"max[total]=0&verbose=1\".
     *
     * The mode can alternatively be \"/some-regexp/\" to stop the test suite whenever
     * a deprecation message matches the given regular expression.
     *
     * @param int|string|false \$mode The reporting mode, defaults to not allowing any deprecations
     */
    public static function register(\$mode = 0)
    {
        if (self::\$isRegistered) {
            return;
        }

        self::\$utilPrefix = class_exists('PHPUnit_Util_ErrorHandler') ? 'PHPUnit_Util_' : 'PHPUnit\\Util\\\\';

        \$handler = new self();
        \$oldErrorHandler = set_error_handler([\$handler, 'handleError']);

        if (null !== \$oldErrorHandler) {
            restore_error_handler();

            if (\$oldErrorHandler instanceof ErrorHandler || [self::\$utilPrefix.'ErrorHandler', 'handleError'] === \$oldErrorHandler) {
                restore_error_handler();
                self::register(\$mode);
            }
        } else {
            \$handler->mode = \$mode;
            self::\$isRegistered = true;
            register_shutdown_function([\$handler, 'shutdown']);
        }
    }

    public static function collectDeprecations(\$outputFile)
    {
        \$deprecations = [];
        \$previousErrorHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$deprecations, &\$previousErrorHandler) {
            if (E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type && (E_WARNING !== \$type || false === strpos(\$msg, '\" targeting switch is equivalent to \"break'))) {
                if (\$previousErrorHandler) {
                    return \$previousErrorHandler(\$type, \$msg, \$file, \$line, \$context);
                }

                return \\call_user_func(self::getPhpUnitErrorHandler(), \$type, \$msg, \$file, \$line, \$context);
            }

            \$deprecations[] = [error_reporting(), \$msg, \$file];

            return null;
        });

        register_shutdown_function(function () use (\$outputFile, &\$deprecations) {
            file_put_contents(\$outputFile, serialize(\$deprecations));
        });
    }

    /**
     * @internal
     */
    public function handleError(\$type, \$msg, \$file, \$line, \$context = [])
    {
        if ((E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type && (E_WARNING !== \$type || false === strpos(\$msg, '\" targeting switch is equivalent to \"break'))) || !\$this->getConfiguration()->isEnabled()) {
            return \\call_user_func(self::getPhpUnitErrorHandler(), \$type, \$msg, \$file, \$line, \$context);
        }

        \$deprecation = new Deprecation(\$msg, debug_backtrace(), \$file);
        if (\$deprecation->isMuted()) {
            return null;
        }
        \$group = 'other';

        if (\$deprecation->originatesFromAnObject()) {
            \$class = \$deprecation->originatingClass();
            \$method = \$deprecation->originatingMethod();
            \$msg = \$deprecation->getMessage();

            if (0 !== error_reporting()) {
                \$group = 'unsilenced';
            } elseif (\$deprecation->isLegacy(self::\$utilPrefix)) {
                \$group = 'legacy';
            } else {
                \$group = [
                    Deprecation::TYPE_SELF => 'remaining self',
                    Deprecation::TYPE_DIRECT => 'remaining direct',
                    Deprecation::TYPE_INDIRECT => 'remaining indirect',
                    Deprecation::TYPE_UNDETERMINED => 'other',
                ][\$deprecation->getType()];
            }

            if (\$this->getConfiguration()->shouldDisplayStackTrace(\$msg)) {
                echo \"\\n\".ucfirst(\$group).' '.\$deprecation->toString();

                exit(1);
            }
            if ('legacy' !== \$group) {
                \$ref = &\$this->deprecations[\$group][\$msg]['count'];
                ++\$ref;
                \$ref = &\$this->deprecations[\$group][\$msg][\$class.'::'.\$method];
                ++\$ref;
            }
        } else {
            \$ref = &\$this->deprecations[\$group][\$msg]['count'];
            ++\$ref;
        }

        ++\$this->deprecations[\$group.'Count'];

        return null;
    }

    /**
     * @internal
     */
    public function shutdown()
    {
        \$configuration = \$this->getConfiguration();

        if (\$configuration->isInRegexMode()) {
            return;
        }

        \$currErrorHandler = set_error_handler('var_dump');
        restore_error_handler();

        if (\$currErrorHandler !== [\$this, 'handleError']) {
            echo \"\\n\", self::colorize('THE ERROR HANDLER HAS CHANGED!', true), \"\\n\";
        }

        \$groups = ['unsilenced', 'remaining self', 'remaining direct', 'remaining indirect', 'legacy', 'other'];

        \$this->displayDeprecations(\$groups, \$configuration);

        // store failing status
        \$isFailing = !\$configuration->tolerates(\$this->deprecations);

        // reset deprecations array
        foreach (\$this->deprecations as \$group => \$arrayOrInt) {
            \$this->deprecations[\$group] = \\is_int(\$arrayOrInt) ? 0 : [];
        }

        register_shutdown_function(function () use (\$isFailing, \$groups, \$configuration) {
            foreach (\$this->deprecations as \$group => \$arrayOrInt) {
                if (0 < (\\is_int(\$arrayOrInt) ? \$arrayOrInt : \\count(\$arrayOrInt))) {
                    echo \"Shutdown-time deprecations:\\n\";
                    break;
                }
            }

            \$this->displayDeprecations(\$groups, \$configuration);

            if (\$isFailing || !\$configuration->tolerates(\$this->deprecations)) {
                exit(1);
            }
        });
    }

    private function getConfiguration()
    {
        if (null !== \$this->configuration) {
            return \$this->configuration;
        }
        if (false === \$mode = \$this->mode) {
            if (isset(\$_SERVER['SYMFONY_DEPRECATIONS_HELPER'])) {
                \$mode = \$_SERVER['SYMFONY_DEPRECATIONS_HELPER'];
            } elseif (isset(\$_ENV['SYMFONY_DEPRECATIONS_HELPER'])) {
                \$mode = \$_ENV['SYMFONY_DEPRECATIONS_HELPER'];
            } else {
                \$mode = getenv('SYMFONY_DEPRECATIONS_HELPER');
            }
        }
        if ('strict' === \$mode) {
            return \$this->configuration = Configuration::inStrictMode();
        }
        if (self::MODE_DISABLED === \$mode) {
            return \$this->configuration = Configuration::inDisabledMode();
        }
        if ('weak' === \$mode) {
            return \$this->configuration = Configuration::inWeakMode();
        }
        if (self::MODE_WEAK_VENDORS === \$mode) {
            ++\$this->deprecations['remaining directCount'];
            \$msg = sprintf('Setting SYMFONY_DEPRECATIONS_HELPER to \"%s\" is deprecated in favor of \"max[self]=0\"', \$mode);
            \$ref = &\$this->deprecations['remaining direct'][\$msg]['count'];
            ++\$ref;
            \$mode = 'max[self]=0';
        }
        if (isset(\$mode[0]) && '/' === \$mode[0]) {
            return \$this->configuration = Configuration::fromRegex(\$mode);
        }

        if (preg_match('/^[1-9][0-9]*\$/', (string) \$mode)) {
            return \$this->configuration = Configuration::fromNumber(\$mode);
        }

        if (!\$mode) {
            return \$this->configuration = Configuration::fromNumber(0);
        }

        return \$this->configuration = Configuration::fromUrlEncodedString((string) \$mode);
    }

    /**
     * @param string \$str
     * @param bool   \$red
     *
     * @return string
     */
    private static function colorize(\$str, \$red)
    {
        if (!self::hasColorSupport()) {
            return \$str;
        }

        \$color = \$red ? '41;37' : '43;30';

        return \"\\x1B[{\$color}m{\$str}\\x1B[0m\";
    }

    /**
     * @param string[]      \$groups
     * @param Configuration \$configuration
     */
    private function displayDeprecations(\$groups, \$configuration)
    {
        \$cmp = function (\$a, \$b) {
            return \$b['count'] - \$a['count'];
        };

        foreach (\$groups as \$group) {
            if (\$this->deprecations[\$group.'Count']) {
                echo \"\\n\", self::colorize(
                    sprintf('%s deprecation notices (%d)', ucfirst(\$group), \$this->deprecations[\$group.'Count']),
                    'legacy' !== \$group && 'remaining indirect' !== \$group
                ), \"\\n\";

                if (!\$configuration->verboseOutput()) {
                    continue;
                }
                uasort(\$this->deprecations[\$group], \$cmp);

                foreach (\$this->deprecations[\$group] as \$msg => \$notices) {
                    echo \"\\n  \", \$notices['count'], 'x: ', \$msg, \"\\n\";

                    arsort(\$notices);

                    foreach (\$notices as \$method => \$count) {
                        if ('count' !== \$method) {
                            echo '    ', \$count, 'x in ', preg_replace('/(.*)\\\\\\\\(.*?::.*?)\$/', '\$2 from \$1', \$method), \"\\n\";
                        }
                    }
                }
            }
        }

        if (!empty(\$notices)) {
            echo \"\\n\";
        }
    }

    private static function getPhpUnitErrorHandler()
    {
        if (!isset(self::\$isAtLeastPhpUnit83)) {
            self::\$isAtLeastPhpUnit83 = class_exists('PHPUnit\\Util\\ErrorHandler') && method_exists('PHPUnit\\Util\\ErrorHandler', '__invoke');
        }
        if (!self::\$isAtLeastPhpUnit83) {
            return (class_exists('PHPUnit_Util_ErrorHandler', false) ? 'PHPUnit_Util_' : 'PHPUnit\\Util\\\\').'ErrorHandler::handleError';
        }

        foreach (debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS) as \$frame) {
            if (isset(\$frame['object']) && \$frame['object'] instanceof TestResult) {
                return new ErrorHandler(
                    \$frame['object']->getConvertDeprecationsToExceptions(),
                    \$frame['object']->getConvertErrorsToExceptions(),
                    \$frame['object']->getConvertNoticesToExceptions(),
                    \$frame['object']->getConvertWarningsToExceptions()
                );
            }
        }

        return function () { return false; };
    }

    /**
     * Returns true if STDOUT is defined and supports colorization.
     *
     * Reference: Composer\\XdebugHandler\\Process::supportsColor
     * https://github.com/composer/xdebug-handler
     *
     * @return bool
     */
    private static function hasColorSupport()
    {
        if (!\\defined('STDOUT')) {
            return false;
        }

        if ('Hyper' === getenv('TERM_PROGRAM')) {
            return true;
        }

        if (\\DIRECTORY_SEPARATOR === '\\\\') {
            return (\\function_exists('sapi_windows_vt100_support')
                && sapi_windows_vt100_support(STDOUT))
                || false !== getenv('ANSICON')
                || 'ON' === getenv('ConEmuANSI')
                || 'xterm' === getenv('TERM');
        }

        if (\\function_exists('stream_isatty')) {
            return stream_isatty(STDOUT);
        }

        if (\\function_exists('posix_isatty')) {
            return posix_isatty(STDOUT);
        }

        \$stat = fstat(STDOUT);

        // Check if formatted mode is S_IFCHR
        return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php";
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

namespace Symfony\\Bridge\\PhpUnit;

use PHPUnit\\Framework\\TestResult;
use PHPUnit\\Util\\ErrorHandler;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Configuration;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Deprecation;

/**
 * Catch deprecation notices and print a summary report at the end of the test suite.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DeprecationErrorHandler
{
    /**
     * @deprecated since Symfony 4.3, use max[self]=0 instead
     */
    const MODE_WEAK_VENDORS = 'weak_vendors';

    const MODE_DISABLED = 'disabled';
    const MODE_WEAK = 'max[total]=999999&verbose=0';
    const MODE_STRICT = 'max[total]=0';

    private \$mode;
    private \$configuration;
    private \$deprecations = [
        'unsilencedCount' => 0,
        'remaining selfCount' => 0,
        'legacyCount' => 0,
        'otherCount' => 0,
        'remaining directCount' => 0,
        'remaining indirectCount' => 0,
        'unsilenced' => [],
        'remaining self' => [],
        'legacy' => [],
        'other' => [],
        'remaining direct' => [],
        'remaining indirect' => [],
    ];

    private static \$isRegistered = false;
    private static \$utilPrefix;
    private static \$isAtLeastPhpUnit83;

    /**
     * Registers and configures the deprecation handler.
     *
     * The mode is a query string with options:
     *  - \"disabled\" to disable the deprecation handler
     *  - \"verbose\" to enable/disable displaying the deprecation report
     *  - \"max\" to configure the number of deprecations to allow before exiting with a non-zero
     *    status code; it's an array with keys \"total\", \"self\", \"direct\" and \"indirect\"
     *
     * The default mode is \"max[total]=0&verbose=1\".
     *
     * The mode can alternatively be \"/some-regexp/\" to stop the test suite whenever
     * a deprecation message matches the given regular expression.
     *
     * @param int|string|false \$mode The reporting mode, defaults to not allowing any deprecations
     */
    public static function register(\$mode = 0)
    {
        if (self::\$isRegistered) {
            return;
        }

        self::\$utilPrefix = class_exists('PHPUnit_Util_ErrorHandler') ? 'PHPUnit_Util_' : 'PHPUnit\\Util\\\\';

        \$handler = new self();
        \$oldErrorHandler = set_error_handler([\$handler, 'handleError']);

        if (null !== \$oldErrorHandler) {
            restore_error_handler();

            if (\$oldErrorHandler instanceof ErrorHandler || [self::\$utilPrefix.'ErrorHandler', 'handleError'] === \$oldErrorHandler) {
                restore_error_handler();
                self::register(\$mode);
            }
        } else {
            \$handler->mode = \$mode;
            self::\$isRegistered = true;
            register_shutdown_function([\$handler, 'shutdown']);
        }
    }

    public static function collectDeprecations(\$outputFile)
    {
        \$deprecations = [];
        \$previousErrorHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$deprecations, &\$previousErrorHandler) {
            if (E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type && (E_WARNING !== \$type || false === strpos(\$msg, '\" targeting switch is equivalent to \"break'))) {
                if (\$previousErrorHandler) {
                    return \$previousErrorHandler(\$type, \$msg, \$file, \$line, \$context);
                }

                return \\call_user_func(self::getPhpUnitErrorHandler(), \$type, \$msg, \$file, \$line, \$context);
            }

            \$deprecations[] = [error_reporting(), \$msg, \$file];

            return null;
        });

        register_shutdown_function(function () use (\$outputFile, &\$deprecations) {
            file_put_contents(\$outputFile, serialize(\$deprecations));
        });
    }

    /**
     * @internal
     */
    public function handleError(\$type, \$msg, \$file, \$line, \$context = [])
    {
        if ((E_USER_DEPRECATED !== \$type && E_DEPRECATED !== \$type && (E_WARNING !== \$type || false === strpos(\$msg, '\" targeting switch is equivalent to \"break'))) || !\$this->getConfiguration()->isEnabled()) {
            return \\call_user_func(self::getPhpUnitErrorHandler(), \$type, \$msg, \$file, \$line, \$context);
        }

        \$deprecation = new Deprecation(\$msg, debug_backtrace(), \$file);
        if (\$deprecation->isMuted()) {
            return null;
        }
        \$group = 'other';

        if (\$deprecation->originatesFromAnObject()) {
            \$class = \$deprecation->originatingClass();
            \$method = \$deprecation->originatingMethod();
            \$msg = \$deprecation->getMessage();

            if (0 !== error_reporting()) {
                \$group = 'unsilenced';
            } elseif (\$deprecation->isLegacy(self::\$utilPrefix)) {
                \$group = 'legacy';
            } else {
                \$group = [
                    Deprecation::TYPE_SELF => 'remaining self',
                    Deprecation::TYPE_DIRECT => 'remaining direct',
                    Deprecation::TYPE_INDIRECT => 'remaining indirect',
                    Deprecation::TYPE_UNDETERMINED => 'other',
                ][\$deprecation->getType()];
            }

            if (\$this->getConfiguration()->shouldDisplayStackTrace(\$msg)) {
                echo \"\\n\".ucfirst(\$group).' '.\$deprecation->toString();

                exit(1);
            }
            if ('legacy' !== \$group) {
                \$ref = &\$this->deprecations[\$group][\$msg]['count'];
                ++\$ref;
                \$ref = &\$this->deprecations[\$group][\$msg][\$class.'::'.\$method];
                ++\$ref;
            }
        } else {
            \$ref = &\$this->deprecations[\$group][\$msg]['count'];
            ++\$ref;
        }

        ++\$this->deprecations[\$group.'Count'];

        return null;
    }

    /**
     * @internal
     */
    public function shutdown()
    {
        \$configuration = \$this->getConfiguration();

        if (\$configuration->isInRegexMode()) {
            return;
        }

        \$currErrorHandler = set_error_handler('var_dump');
        restore_error_handler();

        if (\$currErrorHandler !== [\$this, 'handleError']) {
            echo \"\\n\", self::colorize('THE ERROR HANDLER HAS CHANGED!', true), \"\\n\";
        }

        \$groups = ['unsilenced', 'remaining self', 'remaining direct', 'remaining indirect', 'legacy', 'other'];

        \$this->displayDeprecations(\$groups, \$configuration);

        // store failing status
        \$isFailing = !\$configuration->tolerates(\$this->deprecations);

        // reset deprecations array
        foreach (\$this->deprecations as \$group => \$arrayOrInt) {
            \$this->deprecations[\$group] = \\is_int(\$arrayOrInt) ? 0 : [];
        }

        register_shutdown_function(function () use (\$isFailing, \$groups, \$configuration) {
            foreach (\$this->deprecations as \$group => \$arrayOrInt) {
                if (0 < (\\is_int(\$arrayOrInt) ? \$arrayOrInt : \\count(\$arrayOrInt))) {
                    echo \"Shutdown-time deprecations:\\n\";
                    break;
                }
            }

            \$this->displayDeprecations(\$groups, \$configuration);

            if (\$isFailing || !\$configuration->tolerates(\$this->deprecations)) {
                exit(1);
            }
        });
    }

    private function getConfiguration()
    {
        if (null !== \$this->configuration) {
            return \$this->configuration;
        }
        if (false === \$mode = \$this->mode) {
            if (isset(\$_SERVER['SYMFONY_DEPRECATIONS_HELPER'])) {
                \$mode = \$_SERVER['SYMFONY_DEPRECATIONS_HELPER'];
            } elseif (isset(\$_ENV['SYMFONY_DEPRECATIONS_HELPER'])) {
                \$mode = \$_ENV['SYMFONY_DEPRECATIONS_HELPER'];
            } else {
                \$mode = getenv('SYMFONY_DEPRECATIONS_HELPER');
            }
        }
        if ('strict' === \$mode) {
            return \$this->configuration = Configuration::inStrictMode();
        }
        if (self::MODE_DISABLED === \$mode) {
            return \$this->configuration = Configuration::inDisabledMode();
        }
        if ('weak' === \$mode) {
            return \$this->configuration = Configuration::inWeakMode();
        }
        if (self::MODE_WEAK_VENDORS === \$mode) {
            ++\$this->deprecations['remaining directCount'];
            \$msg = sprintf('Setting SYMFONY_DEPRECATIONS_HELPER to \"%s\" is deprecated in favor of \"max[self]=0\"', \$mode);
            \$ref = &\$this->deprecations['remaining direct'][\$msg]['count'];
            ++\$ref;
            \$mode = 'max[self]=0';
        }
        if (isset(\$mode[0]) && '/' === \$mode[0]) {
            return \$this->configuration = Configuration::fromRegex(\$mode);
        }

        if (preg_match('/^[1-9][0-9]*\$/', (string) \$mode)) {
            return \$this->configuration = Configuration::fromNumber(\$mode);
        }

        if (!\$mode) {
            return \$this->configuration = Configuration::fromNumber(0);
        }

        return \$this->configuration = Configuration::fromUrlEncodedString((string) \$mode);
    }

    /**
     * @param string \$str
     * @param bool   \$red
     *
     * @return string
     */
    private static function colorize(\$str, \$red)
    {
        if (!self::hasColorSupport()) {
            return \$str;
        }

        \$color = \$red ? '41;37' : '43;30';

        return \"\\x1B[{\$color}m{\$str}\\x1B[0m\";
    }

    /**
     * @param string[]      \$groups
     * @param Configuration \$configuration
     */
    private function displayDeprecations(\$groups, \$configuration)
    {
        \$cmp = function (\$a, \$b) {
            return \$b['count'] - \$a['count'];
        };

        foreach (\$groups as \$group) {
            if (\$this->deprecations[\$group.'Count']) {
                echo \"\\n\", self::colorize(
                    sprintf('%s deprecation notices (%d)', ucfirst(\$group), \$this->deprecations[\$group.'Count']),
                    'legacy' !== \$group && 'remaining indirect' !== \$group
                ), \"\\n\";

                if (!\$configuration->verboseOutput()) {
                    continue;
                }
                uasort(\$this->deprecations[\$group], \$cmp);

                foreach (\$this->deprecations[\$group] as \$msg => \$notices) {
                    echo \"\\n  \", \$notices['count'], 'x: ', \$msg, \"\\n\";

                    arsort(\$notices);

                    foreach (\$notices as \$method => \$count) {
                        if ('count' !== \$method) {
                            echo '    ', \$count, 'x in ', preg_replace('/(.*)\\\\\\\\(.*?::.*?)\$/', '\$2 from \$1', \$method), \"\\n\";
                        }
                    }
                }
            }
        }

        if (!empty(\$notices)) {
            echo \"\\n\";
        }
    }

    private static function getPhpUnitErrorHandler()
    {
        if (!isset(self::\$isAtLeastPhpUnit83)) {
            self::\$isAtLeastPhpUnit83 = class_exists('PHPUnit\\Util\\ErrorHandler') && method_exists('PHPUnit\\Util\\ErrorHandler', '__invoke');
        }
        if (!self::\$isAtLeastPhpUnit83) {
            return (class_exists('PHPUnit_Util_ErrorHandler', false) ? 'PHPUnit_Util_' : 'PHPUnit\\Util\\\\').'ErrorHandler::handleError';
        }

        foreach (debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS) as \$frame) {
            if (isset(\$frame['object']) && \$frame['object'] instanceof TestResult) {
                return new ErrorHandler(
                    \$frame['object']->getConvertDeprecationsToExceptions(),
                    \$frame['object']->getConvertErrorsToExceptions(),
                    \$frame['object']->getConvertNoticesToExceptions(),
                    \$frame['object']->getConvertWarningsToExceptions()
                );
            }
        }

        return function () { return false; };
    }

    /**
     * Returns true if STDOUT is defined and supports colorization.
     *
     * Reference: Composer\\XdebugHandler\\Process::supportsColor
     * https://github.com/composer/xdebug-handler
     *
     * @return bool
     */
    private static function hasColorSupport()
    {
        if (!\\defined('STDOUT')) {
            return false;
        }

        if ('Hyper' === getenv('TERM_PROGRAM')) {
            return true;
        }

        if (\\DIRECTORY_SEPARATOR === '\\\\') {
            return (\\function_exists('sapi_windows_vt100_support')
                && sapi_windows_vt100_support(STDOUT))
                || false !== getenv('ANSICON')
                || 'ON' === getenv('ConEmuANSI')
                || 'xterm' === getenv('TERM');
        }

        if (\\function_exists('stream_isatty')) {
            return stream_isatty(STDOUT);
        }

        if (\\function_exists('posix_isatty')) {
            return posix_isatty(STDOUT);
        }

        \$stat = fstat(STDOUT);

        // Check if formatted mode is S_IFCHR
        return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
    }
}
", "vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/DeprecationErrorHandler.php");
    }
}
