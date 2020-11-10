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

/* vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php */
class __TwigTemplate_9a5d567f5162752cb5b9242d104d85d4fd71f51172af5bc1cb3602dd6cf21d2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php"));

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

use Monolog\\Formatter\\ChromePHPFormatter;
use Monolog\\Logger;

/**
 * Handler sending log to the ChromePHP extension (http://www.chromephp.com/)
 *
 * This also works out of the box with Firefox 43+
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChromePHPHandler extends AbstractProcessingHandler
{
    /**
     * Version of the extension
     */
    const VERSION = '4.0';

    /**
     * Header name
     */
    const HEADER_NAME = 'X-ChromeLogger-Data';

    /**
     * Regular expression to detect supported browsers (matches any Chrome, or Firefox 43+)
     */
    const USER_AGENT_REGEX = '{\\b(?:Chrome/\\d+(?:\\.\\d+)*|HeadlessChrome|Firefox/(?:4[3-9]|[5-9]\\d|\\d{3,})(?:\\.\\d)*)\\b}';

    protected static \$initialized = false;

    /**
     * Tracks whether we sent too much data
     *
     * Chrome limits the headers to 4KB, so when we sent 3KB we stop sending
     *
     * @var bool
     */
    protected static \$overflowed = false;

    protected static \$json = array(
        'version' => self::VERSION,
        'columns' => array('label', 'log', 'backtrace', 'type'),
        'rows' => array(),
    );

    protected static \$sendHeaders = true;

    /**
     * @param int  \$level  The minimum logging level at which this handler will be triggered
     * @param bool \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);
        if (!function_exists('json_encode')) {
            throw new \\RuntimeException('PHP\\'s json extension is required to use Monolog\\'s ChromePHPHandler');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$messages = array();

        foreach (\$records as \$record) {
            if (\$record['level'] < \$this->level) {
                continue;
            }
            \$messages[] = \$this->processRecord(\$record);
        }

        if (!empty(\$messages)) {
            \$messages = \$this->getFormatter()->formatBatch(\$messages);
            self::\$json['rows'] = array_merge(self::\$json['rows'], \$messages);
            \$this->send();
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new ChromePHPFormatter();
    }

    /**
     * Creates & sends header for a record
     *
     * @see sendHeader()
     * @see send()
     * @param array \$record
     */
    protected function write(array \$record)
    {
        self::\$json['rows'][] = \$record['formatted'];

        \$this->send();
    }

    /**
     * Sends the log header
     *
     * @see sendHeader()
     */
    protected function send()
    {
        if (self::\$overflowed || !self::\$sendHeaders) {
            return;
        }

        if (!self::\$initialized) {
            self::\$initialized = true;

            self::\$sendHeaders = \$this->headersAccepted();
            if (!self::\$sendHeaders) {
                return;
            }

            self::\$json['request_uri'] = isset(\$_SERVER['REQUEST_URI']) ? \$_SERVER['REQUEST_URI'] : '';
        }

        \$json = @json_encode(self::\$json);
        \$data = base64_encode(utf8_encode(\$json));
        if (strlen(\$data) > 3 * 1024) {
            self::\$overflowed = true;

            \$record = array(
                'message' => 'Incomplete log, chrome header size limit reached',
                'context' => array(),
                'level' => Logger::WARNING,
                'level_name' => Logger::getLevelName(Logger::WARNING),
                'channel' => 'monolog',
                'datetime' => new \\DateTime(),
                'extra' => array(),
            );
            self::\$json['rows'][count(self::\$json['rows']) - 1] = \$this->getFormatter()->format(\$record);
            \$json = @json_encode(self::\$json);
            \$data = base64_encode(utf8_encode(\$json));
        }

        if (trim(\$data) !== '') {
            \$this->sendHeader(self::HEADER_NAME, \$data);
        }
    }

    /**
     * Send header string to the client
     *
     * @param string \$header
     * @param string \$content
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!headers_sent() && self::\$sendHeaders) {
            header(sprintf('%s: %s', \$header, \$content));
        }
    }

    /**
     * Verifies if the headers are accepted by the current user agent
     *
     * @return bool
     */
    protected function headersAccepted()
    {
        if (empty(\$_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }

        return preg_match(self::USER_AGENT_REGEX, \$_SERVER['HTTP_USER_AGENT']);
    }

    /**
     * BC getter for the sendHeaders property that has been made static
     */
    public function __get(\$property)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        return static::\$sendHeaders;
    }

    /**
     * BC setter for the sendHeaders property that has been made static
     */
    public function __set(\$property, \$value)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        static::\$sendHeaders = \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php";
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

use Monolog\\Formatter\\ChromePHPFormatter;
use Monolog\\Logger;

/**
 * Handler sending log to the ChromePHP extension (http://www.chromephp.com/)
 *
 * This also works out of the box with Firefox 43+
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChromePHPHandler extends AbstractProcessingHandler
{
    /**
     * Version of the extension
     */
    const VERSION = '4.0';

    /**
     * Header name
     */
    const HEADER_NAME = 'X-ChromeLogger-Data';

    /**
     * Regular expression to detect supported browsers (matches any Chrome, or Firefox 43+)
     */
    const USER_AGENT_REGEX = '{\\b(?:Chrome/\\d+(?:\\.\\d+)*|HeadlessChrome|Firefox/(?:4[3-9]|[5-9]\\d|\\d{3,})(?:\\.\\d)*)\\b}';

    protected static \$initialized = false;

    /**
     * Tracks whether we sent too much data
     *
     * Chrome limits the headers to 4KB, so when we sent 3KB we stop sending
     *
     * @var bool
     */
    protected static \$overflowed = false;

    protected static \$json = array(
        'version' => self::VERSION,
        'columns' => array('label', 'log', 'backtrace', 'type'),
        'rows' => array(),
    );

    protected static \$sendHeaders = true;

    /**
     * @param int  \$level  The minimum logging level at which this handler will be triggered
     * @param bool \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);
        if (!function_exists('json_encode')) {
            throw new \\RuntimeException('PHP\\'s json extension is required to use Monolog\\'s ChromePHPHandler');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$messages = array();

        foreach (\$records as \$record) {
            if (\$record['level'] < \$this->level) {
                continue;
            }
            \$messages[] = \$this->processRecord(\$record);
        }

        if (!empty(\$messages)) {
            \$messages = \$this->getFormatter()->formatBatch(\$messages);
            self::\$json['rows'] = array_merge(self::\$json['rows'], \$messages);
            \$this->send();
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new ChromePHPFormatter();
    }

    /**
     * Creates & sends header for a record
     *
     * @see sendHeader()
     * @see send()
     * @param array \$record
     */
    protected function write(array \$record)
    {
        self::\$json['rows'][] = \$record['formatted'];

        \$this->send();
    }

    /**
     * Sends the log header
     *
     * @see sendHeader()
     */
    protected function send()
    {
        if (self::\$overflowed || !self::\$sendHeaders) {
            return;
        }

        if (!self::\$initialized) {
            self::\$initialized = true;

            self::\$sendHeaders = \$this->headersAccepted();
            if (!self::\$sendHeaders) {
                return;
            }

            self::\$json['request_uri'] = isset(\$_SERVER['REQUEST_URI']) ? \$_SERVER['REQUEST_URI'] : '';
        }

        \$json = @json_encode(self::\$json);
        \$data = base64_encode(utf8_encode(\$json));
        if (strlen(\$data) > 3 * 1024) {
            self::\$overflowed = true;

            \$record = array(
                'message' => 'Incomplete log, chrome header size limit reached',
                'context' => array(),
                'level' => Logger::WARNING,
                'level_name' => Logger::getLevelName(Logger::WARNING),
                'channel' => 'monolog',
                'datetime' => new \\DateTime(),
                'extra' => array(),
            );
            self::\$json['rows'][count(self::\$json['rows']) - 1] = \$this->getFormatter()->format(\$record);
            \$json = @json_encode(self::\$json);
            \$data = base64_encode(utf8_encode(\$json));
        }

        if (trim(\$data) !== '') {
            \$this->sendHeader(self::HEADER_NAME, \$data);
        }
    }

    /**
     * Send header string to the client
     *
     * @param string \$header
     * @param string \$content
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!headers_sent() && self::\$sendHeaders) {
            header(sprintf('%s: %s', \$header, \$content));
        }
    }

    /**
     * Verifies if the headers are accepted by the current user agent
     *
     * @return bool
     */
    protected function headersAccepted()
    {
        if (empty(\$_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }

        return preg_match(self::USER_AGENT_REGEX, \$_SERVER['HTTP_USER_AGENT']);
    }

    /**
     * BC getter for the sendHeaders property that has been made static
     */
    public function __get(\$property)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        return static::\$sendHeaders;
    }

    /**
     * BC setter for the sendHeaders property that has been made static
     */
    public function __set(\$property, \$value)
    {
        if ('sendHeaders' !== \$property) {
            throw new \\InvalidArgumentException('Undefined property '.\$property);
        }

        static::\$sendHeaders = \$value;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php");
    }
}
