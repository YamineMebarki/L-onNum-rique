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

/* vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php */
class __TwigTemplate_ef3271fdf0196525b2319aff4e45e3a309fbd1274c7da0ca00c33374973661a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php"));

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

use Monolog\\Logger;
use Monolog\\Formatter\\LineFormatter;

/**
 * Common syslog functionality
 */
abstract class AbstractSyslogHandler extends AbstractProcessingHandler
{
    protected \$facility;

    /**
     * Translates Monolog log levels to syslog log priorities.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => LOG_DEBUG,
        Logger::INFO      => LOG_INFO,
        Logger::NOTICE    => LOG_NOTICE,
        Logger::WARNING   => LOG_WARNING,
        Logger::ERROR     => LOG_ERR,
        Logger::CRITICAL  => LOG_CRIT,
        Logger::ALERT     => LOG_ALERT,
        Logger::EMERGENCY => LOG_EMERG,
    );

    /**
     * List of valid log facility names.
     */
    protected \$facilities = array(
        'auth'     => LOG_AUTH,
        'authpriv' => LOG_AUTHPRIV,
        'cron'     => LOG_CRON,
        'daemon'   => LOG_DAEMON,
        'kern'     => LOG_KERN,
        'lpr'      => LOG_LPR,
        'mail'     => LOG_MAIL,
        'news'     => LOG_NEWS,
        'syslog'   => LOG_SYSLOG,
        'user'     => LOG_USER,
        'uucp'     => LOG_UUCP,
    );

    /**
     * @param mixed \$facility
     * @param int   \$level The minimum logging level at which this handler will be triggered
     * @param bool  \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!defined('PHP_WINDOWS_VERSION_BUILD')) {
            \$this->facilities['local0'] = LOG_LOCAL0;
            \$this->facilities['local1'] = LOG_LOCAL1;
            \$this->facilities['local2'] = LOG_LOCAL2;
            \$this->facilities['local3'] = LOG_LOCAL3;
            \$this->facilities['local4'] = LOG_LOCAL4;
            \$this->facilities['local5'] = LOG_LOCAL5;
            \$this->facilities['local6'] = LOG_LOCAL6;
            \$this->facilities['local7'] = LOG_LOCAL7;
        } else {
            \$this->facilities['local0'] = 128; // LOG_LOCAL0
            \$this->facilities['local1'] = 136; // LOG_LOCAL1
            \$this->facilities['local2'] = 144; // LOG_LOCAL2
            \$this->facilities['local3'] = 152; // LOG_LOCAL3
            \$this->facilities['local4'] = 160; // LOG_LOCAL4
            \$this->facilities['local5'] = 168; // LOG_LOCAL5
            \$this->facilities['local6'] = 176; // LOG_LOCAL6
            \$this->facilities['local7'] = 184; // LOG_LOCAL7
        }

        // convert textual description of facility to syslog constant
        if (array_key_exists(strtolower(\$facility), \$this->facilities)) {
            \$facility = \$this->facilities[strtolower(\$facility)];
        } elseif (!in_array(\$facility, array_values(\$this->facilities), true)) {
            throw new \\UnexpectedValueException('Unknown facility value \"'.\$facility.'\" given');
        }

        \$this->facility = \$facility;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('%channel%.%level_name%: %message% %context% %extra%');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php";
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

use Monolog\\Logger;
use Monolog\\Formatter\\LineFormatter;

/**
 * Common syslog functionality
 */
abstract class AbstractSyslogHandler extends AbstractProcessingHandler
{
    protected \$facility;

    /**
     * Translates Monolog log levels to syslog log priorities.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => LOG_DEBUG,
        Logger::INFO      => LOG_INFO,
        Logger::NOTICE    => LOG_NOTICE,
        Logger::WARNING   => LOG_WARNING,
        Logger::ERROR     => LOG_ERR,
        Logger::CRITICAL  => LOG_CRIT,
        Logger::ALERT     => LOG_ALERT,
        Logger::EMERGENCY => LOG_EMERG,
    );

    /**
     * List of valid log facility names.
     */
    protected \$facilities = array(
        'auth'     => LOG_AUTH,
        'authpriv' => LOG_AUTHPRIV,
        'cron'     => LOG_CRON,
        'daemon'   => LOG_DAEMON,
        'kern'     => LOG_KERN,
        'lpr'      => LOG_LPR,
        'mail'     => LOG_MAIL,
        'news'     => LOG_NEWS,
        'syslog'   => LOG_SYSLOG,
        'user'     => LOG_USER,
        'uucp'     => LOG_UUCP,
    );

    /**
     * @param mixed \$facility
     * @param int   \$level The minimum logging level at which this handler will be triggered
     * @param bool  \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!defined('PHP_WINDOWS_VERSION_BUILD')) {
            \$this->facilities['local0'] = LOG_LOCAL0;
            \$this->facilities['local1'] = LOG_LOCAL1;
            \$this->facilities['local2'] = LOG_LOCAL2;
            \$this->facilities['local3'] = LOG_LOCAL3;
            \$this->facilities['local4'] = LOG_LOCAL4;
            \$this->facilities['local5'] = LOG_LOCAL5;
            \$this->facilities['local6'] = LOG_LOCAL6;
            \$this->facilities['local7'] = LOG_LOCAL7;
        } else {
            \$this->facilities['local0'] = 128; // LOG_LOCAL0
            \$this->facilities['local1'] = 136; // LOG_LOCAL1
            \$this->facilities['local2'] = 144; // LOG_LOCAL2
            \$this->facilities['local3'] = 152; // LOG_LOCAL3
            \$this->facilities['local4'] = 160; // LOG_LOCAL4
            \$this->facilities['local5'] = 168; // LOG_LOCAL5
            \$this->facilities['local6'] = 176; // LOG_LOCAL6
            \$this->facilities['local7'] = 184; // LOG_LOCAL7
        }

        // convert textual description of facility to syslog constant
        if (array_key_exists(strtolower(\$facility), \$this->facilities)) {
            \$facility = \$this->facilities[strtolower(\$facility)];
        } elseif (!in_array(\$facility, array_values(\$this->facilities), true)) {
            throw new \\UnexpectedValueException('Unknown facility value \"'.\$facility.'\" given');
        }

        \$this->facility = \$facility;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('%channel%.%level_name%: %message% %context% %extra%');
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php");
    }
}
