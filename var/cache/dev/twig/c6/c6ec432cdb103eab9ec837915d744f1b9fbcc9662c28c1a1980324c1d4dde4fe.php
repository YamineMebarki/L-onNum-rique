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

/* vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php */
class __TwigTemplate_191fda68df4c4ca92f040425a18a731a34de2b25705bc58b033086fc14d0f70b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php"));

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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Logger;
use Monolog\\Handler\\Slack\\SlackRecord;

/**
 * Sends notifications through Slack API
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @see    https://api.slack.com/
 */
class SlackHandler extends SocketHandler
{
    /**
     * Slack API token
     * @var string
     */
    private \$token;

    /**
     * Instance of the SlackRecord util class preparing data for Slack API.
     * @var SlackRecord
     */
    private \$slackRecord;

    /**
     * @param  string                    \$token                  Slack API token
     * @param  string                    \$channel                Slack channel (encoded ID or name)
     * @param  string|null               \$username               Name of a bot
     * @param  bool                      \$useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
     * @param  string|null               \$iconEmoji              The emoji name to use (or null)
     * @param  int                       \$level                  The minimum logging level at which this handler will be triggered
     * @param  bool                      \$bubble                 Whether the messages that are handled can bubble up the stack or not
     * @param  bool                      \$useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
     * @param  bool                      \$includeContextAndExtra Whether the attachment should include context and extra data
     * @param  array                     \$excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @throws MissingExtensionException If no OpenSSL PHP extension configured
     */
    public function __construct(\$token, \$channel, \$username = null, \$useAttachment = true, \$iconEmoji = null, \$level = Logger::CRITICAL, \$bubble = true, \$useShortAttachment = false, \$includeContextAndExtra = false, array \$excludeFields = array())
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the SlackHandler');
        }

        parent::__construct('ssl://slack.com:443', \$level, \$bubble);

        \$this->slackRecord = new SlackRecord(
            \$channel,
            \$username,
            \$useAttachment,
            \$iconEmoji,
            \$useShortAttachment,
            \$includeContextAndExtra,
            \$excludeFields,
            \$this->formatter
        );

        \$this->token = \$token;
    }

    public function getSlackRecord()
    {
        return \$this->slackRecord;
    }

    public function getToken()
    {
        return \$this->token;
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        \$dataArray = \$this->prepareContentData(\$record);

        return http_build_query(\$dataArray);
    }

    /**
     * Prepares content data
     *
     * @param  array \$record
     * @return array
     */
    protected function prepareContentData(\$record)
    {
        \$dataArray = \$this->slackRecord->getSlackData(\$record);
        \$dataArray['token'] = \$this->token;

        if (!empty(\$dataArray['attachments'])) {
            \$dataArray['attachments'] = json_encode(\$dataArray['attachments']);
        }

        return \$dataArray;
    }

    /**
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST /api/chat.postMessage HTTP/1.1\\r\\n\";
        \$header .= \"Host: slack.com\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        parent::write(\$record);
        \$this->finalizeWrite();
    }

    /**
     * Finalizes the request by reading some bytes and then closing the socket
     *
     * If we do not read some but close the socket too early, slack sometimes
     * drops the request entirely.
     */
    protected function finalizeWrite()
    {
        \$res = \$this->getResource();
        if (is_resource(\$res)) {
            @fread(\$res, 2048);
        }
        \$this->closeSocket();
    }

    /**
     * Returned a Slack message attachment color associated with
     * provided level.
     *
     * @param  int    \$level
     * @return string
     * @deprecated Use underlying SlackRecord instead
     */
    protected function getAttachmentColor(\$level)
    {
        trigger_error(
            'SlackHandler::getAttachmentColor() is deprecated. Use underlying SlackRecord instead.',
            E_USER_DEPRECATED
        );

        return \$this->slackRecord->getAttachmentColor(\$level);
    }

    /**
     * Stringifies an array of key/value pairs to be used in attachment fields
     *
     * @param  array  \$fields
     * @return string
     * @deprecated Use underlying SlackRecord instead
     */
    protected function stringify(\$fields)
    {
        trigger_error(
            'SlackHandler::stringify() is deprecated. Use underlying SlackRecord instead.',
            E_USER_DEPRECATED
        );

        return \$this->slackRecord->stringify(\$fields);
    }

    public function setFormatter(FormatterInterface \$formatter)
    {
        parent::setFormatter(\$formatter);
        \$this->slackRecord->setFormatter(\$formatter);

        return \$this;
    }

    public function getFormatter()
    {
        \$formatter = parent::getFormatter();
        \$this->slackRecord->setFormatter(\$formatter);

        return \$formatter;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php";
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

use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Logger;
use Monolog\\Handler\\Slack\\SlackRecord;

/**
 * Sends notifications through Slack API
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @see    https://api.slack.com/
 */
class SlackHandler extends SocketHandler
{
    /**
     * Slack API token
     * @var string
     */
    private \$token;

    /**
     * Instance of the SlackRecord util class preparing data for Slack API.
     * @var SlackRecord
     */
    private \$slackRecord;

    /**
     * @param  string                    \$token                  Slack API token
     * @param  string                    \$channel                Slack channel (encoded ID or name)
     * @param  string|null               \$username               Name of a bot
     * @param  bool                      \$useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
     * @param  string|null               \$iconEmoji              The emoji name to use (or null)
     * @param  int                       \$level                  The minimum logging level at which this handler will be triggered
     * @param  bool                      \$bubble                 Whether the messages that are handled can bubble up the stack or not
     * @param  bool                      \$useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
     * @param  bool                      \$includeContextAndExtra Whether the attachment should include context and extra data
     * @param  array                     \$excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @throws MissingExtensionException If no OpenSSL PHP extension configured
     */
    public function __construct(\$token, \$channel, \$username = null, \$useAttachment = true, \$iconEmoji = null, \$level = Logger::CRITICAL, \$bubble = true, \$useShortAttachment = false, \$includeContextAndExtra = false, array \$excludeFields = array())
    {
        if (!extension_loaded('openssl')) {
            throw new MissingExtensionException('The OpenSSL PHP extension is required to use the SlackHandler');
        }

        parent::__construct('ssl://slack.com:443', \$level, \$bubble);

        \$this->slackRecord = new SlackRecord(
            \$channel,
            \$username,
            \$useAttachment,
            \$iconEmoji,
            \$useShortAttachment,
            \$includeContextAndExtra,
            \$excludeFields,
            \$this->formatter
        );

        \$this->token = \$token;
    }

    public function getSlackRecord()
    {
        return \$this->slackRecord;
    }

    public function getToken()
    {
        return \$this->token;
    }

    /**
     * {@inheritdoc}
     *
     * @param  array  \$record
     * @return string
     */
    protected function generateDataStream(\$record)
    {
        \$content = \$this->buildContent(\$record);

        return \$this->buildHeader(\$content) . \$content;
    }

    /**
     * Builds the body of API call
     *
     * @param  array  \$record
     * @return string
     */
    private function buildContent(\$record)
    {
        \$dataArray = \$this->prepareContentData(\$record);

        return http_build_query(\$dataArray);
    }

    /**
     * Prepares content data
     *
     * @param  array \$record
     * @return array
     */
    protected function prepareContentData(\$record)
    {
        \$dataArray = \$this->slackRecord->getSlackData(\$record);
        \$dataArray['token'] = \$this->token;

        if (!empty(\$dataArray['attachments'])) {
            \$dataArray['attachments'] = json_encode(\$dataArray['attachments']);
        }

        return \$dataArray;
    }

    /**
     * Builds the header of the API Call
     *
     * @param  string \$content
     * @return string
     */
    private function buildHeader(\$content)
    {
        \$header = \"POST /api/chat.postMessage HTTP/1.1\\r\\n\";
        \$header .= \"Host: slack.com\\r\\n\";
        \$header .= \"Content-Type: application/x-www-form-urlencoded\\r\\n\";
        \$header .= \"Content-Length: \" . strlen(\$content) . \"\\r\\n\";
        \$header .= \"\\r\\n\";

        return \$header;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        parent::write(\$record);
        \$this->finalizeWrite();
    }

    /**
     * Finalizes the request by reading some bytes and then closing the socket
     *
     * If we do not read some but close the socket too early, slack sometimes
     * drops the request entirely.
     */
    protected function finalizeWrite()
    {
        \$res = \$this->getResource();
        if (is_resource(\$res)) {
            @fread(\$res, 2048);
        }
        \$this->closeSocket();
    }

    /**
     * Returned a Slack message attachment color associated with
     * provided level.
     *
     * @param  int    \$level
     * @return string
     * @deprecated Use underlying SlackRecord instead
     */
    protected function getAttachmentColor(\$level)
    {
        trigger_error(
            'SlackHandler::getAttachmentColor() is deprecated. Use underlying SlackRecord instead.',
            E_USER_DEPRECATED
        );

        return \$this->slackRecord->getAttachmentColor(\$level);
    }

    /**
     * Stringifies an array of key/value pairs to be used in attachment fields
     *
     * @param  array  \$fields
     * @return string
     * @deprecated Use underlying SlackRecord instead
     */
    protected function stringify(\$fields)
    {
        trigger_error(
            'SlackHandler::stringify() is deprecated. Use underlying SlackRecord instead.',
            E_USER_DEPRECATED
        );

        return \$this->slackRecord->stringify(\$fields);
    }

    public function setFormatter(FormatterInterface \$formatter)
    {
        parent::setFormatter(\$formatter);
        \$this->slackRecord->setFormatter(\$formatter);

        return \$this;
    }

    public function getFormatter()
    {
        \$formatter = parent::getFormatter();
        \$this->slackRecord->setFormatter(\$formatter);

        return \$formatter;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php");
    }
}
