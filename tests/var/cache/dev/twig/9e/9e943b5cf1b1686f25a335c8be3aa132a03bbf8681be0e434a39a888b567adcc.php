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

/* vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php */
class __TwigTemplate_f095e979d86884634bb7403e76b9436c3de6922666727044a187a86ba6691aef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php"));

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

/**
 * Logs to syslog service.
 *
 * usage example:
 *
 *   \$log = new Logger('application');
 *   \$syslog = new SyslogHandler('myfacility', 'local6');
 *   \$formatter = new LineFormatter(\"%channel%.%level_name%: %message% %extra%\");
 *   \$syslog->setFormatter(\$formatter);
 *   \$log->pushHandler(\$syslog);
 *
 * @author Sven Paulus <sven@karlsruhe.org>
 */
class SyslogHandler extends AbstractSyslogHandler
{
    protected \$ident;
    protected \$logopts;

    /**
     * @param string \$ident
     * @param mixed  \$facility
     * @param int    \$level    The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble   Whether the messages that are handled can bubble up the stack or not
     * @param int    \$logopts  Option flags for the openlog() call, defaults to LOG_PID
     */
    public function __construct(\$ident, \$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true, \$logopts = LOG_PID)
    {
        parent::__construct(\$facility, \$level, \$bubble);

        \$this->ident = \$ident;
        \$this->logopts = \$logopts;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        closelog();
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!openlog(\$this->ident, \$this->logopts, \$this->facility)) {
            throw new \\LogicException('Can\\'t open syslog for ident \"'.\$this->ident.'\" and facility \"'.\$this->facility.'\"');
        }
        syslog(\$this->logLevels[\$record['level']], (string) \$record['formatted']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php";
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

/**
 * Logs to syslog service.
 *
 * usage example:
 *
 *   \$log = new Logger('application');
 *   \$syslog = new SyslogHandler('myfacility', 'local6');
 *   \$formatter = new LineFormatter(\"%channel%.%level_name%: %message% %extra%\");
 *   \$syslog->setFormatter(\$formatter);
 *   \$log->pushHandler(\$syslog);
 *
 * @author Sven Paulus <sven@karlsruhe.org>
 */
class SyslogHandler extends AbstractSyslogHandler
{
    protected \$ident;
    protected \$logopts;

    /**
     * @param string \$ident
     * @param mixed  \$facility
     * @param int    \$level    The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble   Whether the messages that are handled can bubble up the stack or not
     * @param int    \$logopts  Option flags for the openlog() call, defaults to LOG_PID
     */
    public function __construct(\$ident, \$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true, \$logopts = LOG_PID)
    {
        parent::__construct(\$facility, \$level, \$bubble);

        \$this->ident = \$ident;
        \$this->logopts = \$logopts;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        closelog();
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!openlog(\$this->ident, \$this->logopts, \$this->facility)) {
            throw new \\LogicException('Can\\'t open syslog for ident \"'.\$this->ident.'\" and facility \"'.\$this->facility.'\"');
        }
        syslog(\$this->logLevels[\$record['level']], (string) \$record['formatted']);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php");
    }
}
