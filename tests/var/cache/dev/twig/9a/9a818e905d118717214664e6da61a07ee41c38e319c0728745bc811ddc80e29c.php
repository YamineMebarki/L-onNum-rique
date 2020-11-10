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

/* vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php */
class __TwigTemplate_5c912603915ce06ee4bbe6c8f44b092aac6b25264d0774604b557b93c588753e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php"));

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

namespace Monolog\\Handler;

use Monolog\\Formatter\\NormalizerFormatter;
use Monolog\\Logger;

/**
 * Handler sending log to Zend Monitor
 *
 * @author  Christian Bergau <cbergau86@gmail.com>
 * @author  Jason Davis <happydude@jasondavis.net>
 */
class ZendMonitorHandler extends AbstractProcessingHandler
{
    /**
     * Monolog level / ZendMonitor Custom Event priority map
     *
     * @var array
     */
    protected \$levelMap = array();

    /**
     * Construct
     *
     * @param  int                       \$level
     * @param  bool                      \$bubble
     * @throws MissingExtensionException
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        if (!function_exists('zend_monitor_custom_event')) {
            throw new MissingExtensionException(
                'You must have Zend Server installed with Zend Monitor enabled in order to use this handler'
            );
        }
        //zend monitor constants are not defined if zend monitor is not enabled.
        \$this->levelMap = array(
            Logger::DEBUG     => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::INFO      => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::NOTICE    => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::WARNING   => \\ZEND_MONITOR_EVENT_SEVERITY_WARNING,
            Logger::ERROR     => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::CRITICAL  => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::ALERT     => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::EMERGENCY => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
        );
        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->writeZendMonitorCustomEvent(
            Logger::getLevelName(\$record['level']),
            \$record['message'],
            \$record['formatted'],
            \$this->levelMap[\$record['level']]
        );
    }

    /**
     * Write to Zend Monitor Events
     * @param string \$type Text displayed in \"Class Name (custom)\" field
     * @param string \$message Text displayed in \"Error String\"
     * @param mixed \$formatted Displayed in Custom Variables tab
     * @param int \$severity Set the event severity level (-1,0,1)
     */
    protected function writeZendMonitorCustomEvent(\$type, \$message, \$formatted, \$severity)
    {
        zend_monitor_custom_event(\$type, \$message, \$formatted, \$severity);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFormatter()
    {
        return new NormalizerFormatter();
    }

    /**
     * Get the level map
     *
     * @return array
     */
    public function getLevelMap()
    {
        return \$this->levelMap;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php";
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

namespace Monolog\\Handler;

use Monolog\\Formatter\\NormalizerFormatter;
use Monolog\\Logger;

/**
 * Handler sending log to Zend Monitor
 *
 * @author  Christian Bergau <cbergau86@gmail.com>
 * @author  Jason Davis <happydude@jasondavis.net>
 */
class ZendMonitorHandler extends AbstractProcessingHandler
{
    /**
     * Monolog level / ZendMonitor Custom Event priority map
     *
     * @var array
     */
    protected \$levelMap = array();

    /**
     * Construct
     *
     * @param  int                       \$level
     * @param  bool                      \$bubble
     * @throws MissingExtensionException
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        if (!function_exists('zend_monitor_custom_event')) {
            throw new MissingExtensionException(
                'You must have Zend Server installed with Zend Monitor enabled in order to use this handler'
            );
        }
        //zend monitor constants are not defined if zend monitor is not enabled.
        \$this->levelMap = array(
            Logger::DEBUG     => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::INFO      => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::NOTICE    => \\ZEND_MONITOR_EVENT_SEVERITY_INFO,
            Logger::WARNING   => \\ZEND_MONITOR_EVENT_SEVERITY_WARNING,
            Logger::ERROR     => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::CRITICAL  => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::ALERT     => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
            Logger::EMERGENCY => \\ZEND_MONITOR_EVENT_SEVERITY_ERROR,
        );
        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->writeZendMonitorCustomEvent(
            Logger::getLevelName(\$record['level']),
            \$record['message'],
            \$record['formatted'],
            \$this->levelMap[\$record['level']]
        );
    }

    /**
     * Write to Zend Monitor Events
     * @param string \$type Text displayed in \"Class Name (custom)\" field
     * @param string \$message Text displayed in \"Error String\"
     * @param mixed \$formatted Displayed in Custom Variables tab
     * @param int \$severity Set the event severity level (-1,0,1)
     */
    protected function writeZendMonitorCustomEvent(\$type, \$message, \$formatted, \$severity)
    {
        zend_monitor_custom_event(\$type, \$message, \$formatted, \$severity);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFormatter()
    {
        return new NormalizerFormatter();
    }

    /**
     * Get the level map
     *
     * @return array
     */
    public function getLevelMap()
    {
        return \$this->levelMap;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php");
    }
}
