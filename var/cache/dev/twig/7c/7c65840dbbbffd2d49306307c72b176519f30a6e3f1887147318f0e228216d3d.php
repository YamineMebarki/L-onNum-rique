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

/* vendor/monolog/monolog/src/Monolog/Registry.php */
class __TwigTemplate_4f68a9ffe26da6af6f91afe6be309643007e043a460d7545f840ba403d1d5a19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Registry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Registry.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog;

use InvalidArgumentException;

/**
 * Monolog log registry
 *
 * Allows to get `Logger` instances in the global scope
 * via static method calls on this class.
 *
 * <code>
 * \$application = new Monolog\\Logger('application');
 * \$api = new Monolog\\Logger('api');
 *
 * Monolog\\Registry::addLogger(\$application);
 * Monolog\\Registry::addLogger(\$api);
 *
 * function testLogger()
 * {
 *     Monolog\\Registry::api()->addError('Sent to \$api Logger instance');
 *     Monolog\\Registry::application()->addError('Sent to \$application Logger instance');
 * }
 * </code>
 *
 * @author Tomas Tatarko <tomas@tatarko.sk>
 */
class Registry
{
    /**
     * List of all loggers in the registry (by named indexes)
     *
     * @var Logger[]
     */
    private static \$loggers = array();

    /**
     * Adds new logging channel to the registry
     *
     * @param  Logger                    \$logger    Instance of the logging channel
     * @param  string|null               \$name      Name of the logging channel (\$logger->getName() by default)
     * @param  bool                      \$overwrite Overwrite instance in the registry if the given name already exists?
     * @throws \\InvalidArgumentException If \$overwrite set to false and named Logger instance already exists
     */
    public static function addLogger(Logger \$logger, \$name = null, \$overwrite = false)
    {
        \$name = \$name ?: \$logger->getName();

        if (isset(self::\$loggers[\$name]) && !\$overwrite) {
            throw new InvalidArgumentException('Logger with the given name already exists');
        }

        self::\$loggers[\$name] = \$logger;
    }

    /**
     * Checks if such logging channel exists by name or instance
     *
     * @param string|Logger \$logger Name or logger instance
     */
    public static function hasLogger(\$logger)
    {
        if (\$logger instanceof Logger) {
            \$index = array_search(\$logger, self::\$loggers, true);

            return false !== \$index;
        } else {
            return isset(self::\$loggers[\$logger]);
        }
    }

    /**
     * Removes instance from registry by name or instance
     *
     * @param string|Logger \$logger Name or logger instance
     */
    public static function removeLogger(\$logger)
    {
        if (\$logger instanceof Logger) {
            if (false !== (\$idx = array_search(\$logger, self::\$loggers, true))) {
                unset(self::\$loggers[\$idx]);
            }
        } else {
            unset(self::\$loggers[\$logger]);
        }
    }

    /**
     * Clears the registry
     */
    public static function clear()
    {
        self::\$loggers = array();
    }

    /**
     * Gets Logger instance from the registry
     *
     * @param  string                    \$name Name of the requested Logger instance
     * @throws \\InvalidArgumentException If named Logger instance is not in the registry
     * @return Logger                    Requested instance of Logger
     */
    public static function getInstance(\$name)
    {
        if (!isset(self::\$loggers[\$name])) {
            throw new InvalidArgumentException(sprintf('Requested \"%s\" logger instance is not in the registry', \$name));
        }

        return self::\$loggers[\$name];
    }

    /**
     * Gets Logger instance from the registry via static method call
     *
     * @param  string                    \$name      Name of the requested Logger instance
     * @param  array                     \$arguments Arguments passed to static method call
     * @throws \\InvalidArgumentException If named Logger instance is not in the registry
     * @return Logger                    Requested instance of Logger
     */
    public static function __callStatic(\$name, \$arguments)
    {
        return self::getInstance(\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Registry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog;

use InvalidArgumentException;

/**
 * Monolog log registry
 *
 * Allows to get `Logger` instances in the global scope
 * via static method calls on this class.
 *
 * <code>
 * \$application = new Monolog\\Logger('application');
 * \$api = new Monolog\\Logger('api');
 *
 * Monolog\\Registry::addLogger(\$application);
 * Monolog\\Registry::addLogger(\$api);
 *
 * function testLogger()
 * {
 *     Monolog\\Registry::api()->addError('Sent to \$api Logger instance');
 *     Monolog\\Registry::application()->addError('Sent to \$application Logger instance');
 * }
 * </code>
 *
 * @author Tomas Tatarko <tomas@tatarko.sk>
 */
class Registry
{
    /**
     * List of all loggers in the registry (by named indexes)
     *
     * @var Logger[]
     */
    private static \$loggers = array();

    /**
     * Adds new logging channel to the registry
     *
     * @param  Logger                    \$logger    Instance of the logging channel
     * @param  string|null               \$name      Name of the logging channel (\$logger->getName() by default)
     * @param  bool                      \$overwrite Overwrite instance in the registry if the given name already exists?
     * @throws \\InvalidArgumentException If \$overwrite set to false and named Logger instance already exists
     */
    public static function addLogger(Logger \$logger, \$name = null, \$overwrite = false)
    {
        \$name = \$name ?: \$logger->getName();

        if (isset(self::\$loggers[\$name]) && !\$overwrite) {
            throw new InvalidArgumentException('Logger with the given name already exists');
        }

        self::\$loggers[\$name] = \$logger;
    }

    /**
     * Checks if such logging channel exists by name or instance
     *
     * @param string|Logger \$logger Name or logger instance
     */
    public static function hasLogger(\$logger)
    {
        if (\$logger instanceof Logger) {
            \$index = array_search(\$logger, self::\$loggers, true);

            return false !== \$index;
        } else {
            return isset(self::\$loggers[\$logger]);
        }
    }

    /**
     * Removes instance from registry by name or instance
     *
     * @param string|Logger \$logger Name or logger instance
     */
    public static function removeLogger(\$logger)
    {
        if (\$logger instanceof Logger) {
            if (false !== (\$idx = array_search(\$logger, self::\$loggers, true))) {
                unset(self::\$loggers[\$idx]);
            }
        } else {
            unset(self::\$loggers[\$logger]);
        }
    }

    /**
     * Clears the registry
     */
    public static function clear()
    {
        self::\$loggers = array();
    }

    /**
     * Gets Logger instance from the registry
     *
     * @param  string                    \$name Name of the requested Logger instance
     * @throws \\InvalidArgumentException If named Logger instance is not in the registry
     * @return Logger                    Requested instance of Logger
     */
    public static function getInstance(\$name)
    {
        if (!isset(self::\$loggers[\$name])) {
            throw new InvalidArgumentException(sprintf('Requested \"%s\" logger instance is not in the registry', \$name));
        }

        return self::\$loggers[\$name];
    }

    /**
     * Gets Logger instance from the registry via static method call
     *
     * @param  string                    \$name      Name of the requested Logger instance
     * @param  array                     \$arguments Arguments passed to static method call
     * @throws \\InvalidArgumentException If named Logger instance is not in the registry
     * @return Logger                    Requested instance of Logger
     */
    public static function __callStatic(\$name, \$arguments)
    {
        return self::getInstance(\$name);
    }
}
", "vendor/monolog/monolog/src/Monolog/Registry.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Registry.php");
    }
}
