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

/* vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php */
class __TwigTemplate_48e3c34cc2aec9a05e086667f87b3d884afe4101a705956fe902b88ddea8e38e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php"));

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
use Monolog\\Handler\\SyslogUdp\\UdpSocket;

/**
 * A Handler for logging to a remote syslogd server.
 *
 * @author Jesper Skovgaard Nielsen <nulpunkt@gmail.com>
 * @author Dominik Kukacka <dominik.kukacka@gmail.com>
 */
class SyslogUdpHandler extends AbstractSyslogHandler
{
    const RFC3164 = 0;
    const RFC5424 = 1;

    private \$dateFormats = array(
        self::RFC3164 => 'M d H:i:s',
        self::RFC5424 => \\DateTime::RFC3339,
    );

    protected \$socket;
    protected \$ident;
    protected \$rfc;

    /**
     * @param string \$host
     * @param int    \$port
     * @param mixed  \$facility
     * @param int    \$level    The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble   Whether the messages that are handled can bubble up the stack or not
     * @param string \$ident    Program name or tag for each log message.
     * @param int    \$rfc      RFC to format the message for.
     */
    public function __construct(\$host, \$port = 514, \$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true, \$ident = 'php', \$rfc = self::RFC5424)
    {
        parent::__construct(\$facility, \$level, \$bubble);

        \$this->ident = \$ident;
        \$this->rfc = \$rfc;

        \$this->socket = new UdpSocket(\$host, \$port ?: 514);
    }

    protected function write(array \$record)
    {
        \$lines = \$this->splitMessageIntoLines(\$record['formatted']);

        \$header = \$this->makeCommonSyslogHeader(\$this->logLevels[\$record['level']]);

        foreach (\$lines as \$line) {
            \$this->socket->write(\$line, \$header);
        }
    }

    public function close()
    {
        \$this->socket->close();
    }

    private function splitMessageIntoLines(\$message)
    {
        if (is_array(\$message)) {
            \$message = implode(\"\\n\", \$message);
        }

        return preg_split('/\$\\R?^/m', \$message, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Make common syslog header (see rfc5424 or rfc3164)
     */
    protected function makeCommonSyslogHeader(\$severity)
    {
        \$priority = \$severity + \$this->facility;

        if (!\$pid = getmypid()) {
            \$pid = '-';
        }

        if (!\$hostname = gethostname()) {
            \$hostname = '-';
        }

        \$date = \$this->getDateTime();

        if (\$this->rfc === self::RFC3164) {
            return \"<\$priority>\" .
                \$date . \" \" .
                \$hostname . \" \" .
                \$this->ident . \"[\" . \$pid . \"]: \";
        } else {
            return \"<\$priority>1 \" .
                \$date . \" \" .
                \$hostname . \" \" .
                \$this->ident . \" \" .
                \$pid . \" - - \";
        }
    }

    protected function getDateTime()
    {
        return date(\$this->dateFormats[\$this->rfc]);
    }

    /**
     * Inject your own socket, mainly used for testing
     */
    public function setSocket(\$socket)
    {
        \$this->socket = \$socket;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php";
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
use Monolog\\Handler\\SyslogUdp\\UdpSocket;

/**
 * A Handler for logging to a remote syslogd server.
 *
 * @author Jesper Skovgaard Nielsen <nulpunkt@gmail.com>
 * @author Dominik Kukacka <dominik.kukacka@gmail.com>
 */
class SyslogUdpHandler extends AbstractSyslogHandler
{
    const RFC3164 = 0;
    const RFC5424 = 1;

    private \$dateFormats = array(
        self::RFC3164 => 'M d H:i:s',
        self::RFC5424 => \\DateTime::RFC3339,
    );

    protected \$socket;
    protected \$ident;
    protected \$rfc;

    /**
     * @param string \$host
     * @param int    \$port
     * @param mixed  \$facility
     * @param int    \$level    The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble   Whether the messages that are handled can bubble up the stack or not
     * @param string \$ident    Program name or tag for each log message.
     * @param int    \$rfc      RFC to format the message for.
     */
    public function __construct(\$host, \$port = 514, \$facility = LOG_USER, \$level = Logger::DEBUG, \$bubble = true, \$ident = 'php', \$rfc = self::RFC5424)
    {
        parent::__construct(\$facility, \$level, \$bubble);

        \$this->ident = \$ident;
        \$this->rfc = \$rfc;

        \$this->socket = new UdpSocket(\$host, \$port ?: 514);
    }

    protected function write(array \$record)
    {
        \$lines = \$this->splitMessageIntoLines(\$record['formatted']);

        \$header = \$this->makeCommonSyslogHeader(\$this->logLevels[\$record['level']]);

        foreach (\$lines as \$line) {
            \$this->socket->write(\$line, \$header);
        }
    }

    public function close()
    {
        \$this->socket->close();
    }

    private function splitMessageIntoLines(\$message)
    {
        if (is_array(\$message)) {
            \$message = implode(\"\\n\", \$message);
        }

        return preg_split('/\$\\R?^/m', \$message, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Make common syslog header (see rfc5424 or rfc3164)
     */
    protected function makeCommonSyslogHeader(\$severity)
    {
        \$priority = \$severity + \$this->facility;

        if (!\$pid = getmypid()) {
            \$pid = '-';
        }

        if (!\$hostname = gethostname()) {
            \$hostname = '-';
        }

        \$date = \$this->getDateTime();

        if (\$this->rfc === self::RFC3164) {
            return \"<\$priority>\" .
                \$date . \" \" .
                \$hostname . \" \" .
                \$this->ident . \"[\" . \$pid . \"]: \";
        } else {
            return \"<\$priority>1 \" .
                \$date . \" \" .
                \$hostname . \" \" .
                \$this->ident . \" \" .
                \$pid . \" - - \";
        }
    }

    protected function getDateTime()
    {
        return date(\$this->dateFormats[\$this->rfc]);
    }

    /**
     * Inject your own socket, mainly used for testing
     */
    public function setSocket(\$socket)
    {
        \$this->socket = \$socket;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php");
    }
}
