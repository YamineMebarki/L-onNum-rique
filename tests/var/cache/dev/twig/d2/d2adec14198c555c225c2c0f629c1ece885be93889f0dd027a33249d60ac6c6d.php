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

/* vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php */
class __TwigTemplate_f2cd449ebab4ede6b76ce3cc4ffb79bd951ccda380699f632f5eaab1480289e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php"));

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
 * Sends notifications through the pushover api to mobile phones
 *
 * @author Sebastian Göttschkes <sebastian.goettschkes@googlemail.com>
 * @see    https://www.pushover.net/api
 */
class PushoverHandler extends SocketHandler
{
    private \$token;
    private \$users;
    private \$title;
    private \$user;
    private \$retry;
    private \$expire;

    private \$highPriorityLevel;
    private \$emergencyLevel;
    private \$useFormattedMessage = false;

    /**
     * All parameters that can be sent to Pushover
     * @see https://pushover.net/api
     * @var array
     */
    private \$parameterNames = array(
        'token' => true,
        'user' => true,
        'message' => true,
        'device' => true,
        'title' => true,
        'url' => true,
        'url_title' => true,
        'priority' => true,
        'timestamp' => true,
        'sound' => true,
        'retry' => true,
        'expire' => true,
        'callback' => true,
    );

    /**
     * Sounds the api supports by default
     * @see https://pushover.net/api#sounds
     * @var array
     */
    private \$sounds = array(
        'pushover', 'bike', 'bugle', 'cashregister', 'classical', 'cosmic', 'falling', 'gamelan', 'incoming',
        'intermission', 'magic', 'mechanical', 'pianobar', 'siren', 'spacealarm', 'tugboat', 'alien', 'climb',
        'persistent', 'echo', 'updown', 'none',
    );

    /**
     * @param string       \$token             Pushover api token
     * @param string|array \$users             Pushover user id or array of ids the message will be sent to
     * @param string       \$title             Title sent to the Pushover API
     * @param int          \$level             The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble            Whether the messages that are handled can bubble up the stack or not
     * @param bool         \$useSSL            Whether to connect via SSL. Required when pushing messages to users that are not
     *                                        the pushover.net app owner. OpenSSL is required for this option.
     * @param int          \$highPriorityLevel The minimum logging level at which this handler will start
     *                                        sending \"high priority\" requests to the Pushover API
     * @param int          \$emergencyLevel    The minimum logging level at which this handler will start
     *                                        sending \"emergency\" requests to the Pushover API
     * @param int          \$retry             The retry parameter specifies how often (in seconds) the Pushover servers will send the same notification to the user.
     * @param int          \$expire            The expire parameter specifies how many seconds your notification will continue to be retried for (every retry seconds).
     */
    public function __construct(\$token, \$users, \$title = null, \$level = Logger::CRITICAL, \$bubble = true, \$useSSL = true, \$highPriorityLevel = Logger::CRITICAL, \$emergencyLevel = Logger::EMERGENCY, \$retry = 30, \$expire = 25200)
    {
        \$connectionString = \$useSSL ? 'ssl://api.pushover.net:443' : 'api.pushover.net:80';
        parent::__construct(\$connectionString, \$level, \$bubble);

        \$this->token = \$token;
        \$this->users = (array) \$users;
        \$this->title = \$title ?: gethostname();
        \$this->highPriorityLevel = Logger::toMonologLevel(\$highPriorityLevel);
        \$this->emergencyLevel = Logger::toMonologLevel(\$emergencyLevel);
        \$this->retry = \$retry;
        \$this->expire = \$expire;
    }

    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    private function buildContent(\$record)
    {
        // Pushover has a limit of 512 characters on title and message combined.
        \$maxMessageLength = 512 - strlen(\$this->title);

        \$message = (\$this->useFormattedMessage) ? \$record['formatted'] : \$record['message'];
        \$message = substr(\$message, 0, \$maxMessageLength);

        \$timestamp = \$record['datetime']->getTimestamp();

        \$dataArray = array(
            'token' => \$this->token,
            'user' => \$this->user,
            'message' => \$message,
            'title' => \$this->title,
            'timestamp' => \$timestamp,
        );

        if (isset(\$record['level']) && \$record['level'] >= \$this->emergencyLevel) {
            \$dataArray['priority'] = 2;
            \$dataArray['retry'] = \$this->retry;
            \$dataArray['expire'] = \$this->expire;
        } elseif (isset(\$record['level']) && \$record['level'] >= \$this->highPriorityLevel) {
            \$dataArray['priority'] = 1;
        }

        // First determine the available parameters
        \$context = array_intersect_key(\$record['context'], \$this->parameterNames);
        \$extra = array_intersect_key(\$record['extra'], \$this->parameterNames);

        // Least important info should be merged with subsequent info
        \$dataArray = array_merge(\$extra, \$context, \$dataArray);

        // Only pass sounds that are supported by the API
        if (isset(\$dataArray['sound']) && !in_array(\$dataArray['sound'], \$this->sounds)) {
            unset(\$dataArray['sound']);
        }

        return http_build_query(\$dataArray);
    }

    private function buildHeader(\$content)
    {
        \$header = \"POST /1/messages.json HTTP/1.1\\r\\n\";
        \$header .= \"Host: api.pushover.net\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    protected function write(array \$record)
    {
        foreach (\$this->users as \$user) {
            \$this->user = \$user;

            parent::write(\$record);
            \$this->closeSocket();
        }

        \$this->user = null;
    }

    public function setHighPriorityLevel(\$value)
    {
        \$this->highPriorityLevel = \$value;
    }

    public function setEmergencyLevel(\$value)
    {
        \$this->emergencyLevel = \$value;
    }

    /**
     * Use the formatted message?
     * @param bool \$value
     */
    public function useFormattedMessage(\$value)
    {
        \$this->useFormattedMessage = (bool) \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php";
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
 * Sends notifications through the pushover api to mobile phones
 *
 * @author Sebastian Göttschkes <sebastian.goettschkes@googlemail.com>
 * @see    https://www.pushover.net/api
 */
class PushoverHandler extends SocketHandler
{
    private \$token;
    private \$users;
    private \$title;
    private \$user;
    private \$retry;
    private \$expire;

    private \$highPriorityLevel;
    private \$emergencyLevel;
    private \$useFormattedMessage = false;

    /**
     * All parameters that can be sent to Pushover
     * @see https://pushover.net/api
     * @var array
     */
    private \$parameterNames = array(
        'token' => true,
        'user' => true,
        'message' => true,
        'device' => true,
        'title' => true,
        'url' => true,
        'url_title' => true,
        'priority' => true,
        'timestamp' => true,
        'sound' => true,
        'retry' => true,
        'expire' => true,
        'callback' => true,
    );

    /**
     * Sounds the api supports by default
     * @see https://pushover.net/api#sounds
     * @var array
     */
    private \$sounds = array(
        'pushover', 'bike', 'bugle', 'cashregister', 'classical', 'cosmic', 'falling', 'gamelan', 'incoming',
        'intermission', 'magic', 'mechanical', 'pianobar', 'siren', 'spacealarm', 'tugboat', 'alien', 'climb',
        'persistent', 'echo', 'updown', 'none',
    );

    /**
     * @param string       \$token             Pushover api token
     * @param string|array \$users             Pushover user id or array of ids the message will be sent to
     * @param string       \$title             Title sent to the Pushover API
     * @param int          \$level             The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble            Whether the messages that are handled can bubble up the stack or not
     * @param bool         \$useSSL            Whether to connect via SSL. Required when pushing messages to users that are not
     *                                        the pushover.net app owner. OpenSSL is required for this option.
     * @param int          \$highPriorityLevel The minimum logging level at which this handler will start
     *                                        sending \"high priority\" requests to the Pushover API
     * @param int          \$emergencyLevel    The minimum logging level at which this handler will start
     *                                        sending \"emergency\" requests to the Pushover API
     * @param int          \$retry             The retry parameter specifies how often (in seconds) the Pushover servers will send the same notification to the user.
     * @param int          \$expire            The expire parameter specifies how many seconds your notification will continue to be retried for (every retry seconds).
     */
    public function __construct(\$token, \$users, \$title = null, \$level = Logger::CRITICAL, \$bubble = true, \$useSSL = true, \$highPriorityLevel = Logger::CRITICAL, \$emergencyLevel = Logger::EMERGENCY, \$retry = 30, \$expire = 25200)
    {
        \$connectionString = \$useSSL ? 'ssl://api.pushover.net:443' : 'api.pushover.net:80';
        parent::__construct(\$connectionString, \$level, \$bubble);

        \$this->token = \$token;
        \$this->users = (array) \$users;
        \$this->title = \$title ?: gethostname();
        \$this->highPriorityLevel = Logger::toMonologLevel(\$highPriorityLevel);
        \$this->emergencyLevel = Logger::toMonologLevel(\$emergencyLevel);
        \$this->retry = \$retry;
        \$this->expire = \$expire;
    }

    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    private function buildContent(\$record)
    {
        // Pushover has a limit of 512 characters on title and message combined.
        \$maxMessageLength = 512 - strlen(\$this->title);

        \$message = (\$this->useFormattedMessage) ? \$record['formatted'] : \$record['message'];
        \$message = substr(\$message, 0, \$maxMessageLength);

        \$timestamp = \$record['datetime']->getTimestamp();

        \$dataArray = array(
            'token' => \$this->token,
            'user' => \$this->user,
            'message' => \$message,
            'title' => \$this->title,
            'timestamp' => \$timestamp,
        );

        if (isset(\$record['level']) && \$record['level'] >= \$this->emergencyLevel) {
            \$dataArray['priority'] = 2;
            \$dataArray['retry'] = \$this->retry;
            \$dataArray['expire'] = \$this->expire;
        } elseif (isset(\$record['level']) && \$record['level'] >= \$this->highPriorityLevel) {
            \$dataArray['priority'] = 1;
        }

        // First determine the available parameters
        \$context = array_intersect_key(\$record['context'], \$this->parameterNames);
        \$extra = array_intersect_key(\$record['extra'], \$this->parameterNames);

        // Least important info should be merged with subsequent info
        \$dataArray = array_merge(\$extra, \$context, \$dataArray);

        // Only pass sounds that are supported by the API
        if (isset(\$dataArray['sound']) && !in_array(\$dataArray['sound'], \$this->sounds)) {
            unset(\$dataArray['sound']);
        }

        return http_build_query(\$dataArray);
    }

    private function buildHeader(\$content)
    {
        \$header = \"POST /1/messages.json HTTP/1.1\\r\\n\";
        \$header .= \"Host: api.pushover.net\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    protected function write(array \$record)
    {
        foreach (\$this->users as \$user) {
            \$this->user = \$user;

            parent::write(\$record);
            \$this->closeSocket();
        }

        \$this->user = null;
    }

    public function setHighPriorityLevel(\$value)
    {
        \$this->highPriorityLevel = \$value;
    }

    public function setEmergencyLevel(\$value)
    {
        \$this->emergencyLevel = \$value;
    }

    /**
     * Use the formatted message?
     * @param bool \$value
     */
    public function useFormattedMessage(\$value)
    {
        \$this->useFormattedMessage = (bool) \$value;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php");
    }
}
