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

/* vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php */
class __TwigTemplate_35ead1d5240d7723f5d58c8b5c8d03965accb5b982f14432efca03521343e280 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php"));

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
 * Sends notifications through Slack Webhooks
 *
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 */
class SlackWebhookHandler extends AbstractProcessingHandler
{
    /**
     * Slack Webhook token
     * @var string
     */
    private \$webhookUrl;

    /**
     * Instance of the SlackRecord util class preparing data for Slack API.
     * @var SlackRecord
     */
    private \$slackRecord;

    /**
     * @param  string      \$webhookUrl             Slack Webhook URL
     * @param  string|null \$channel                Slack channel (encoded ID or name)
     * @param  string|null \$username               Name of a bot
     * @param  bool        \$useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
     * @param  string|null \$iconEmoji              The emoji name to use (or null)
     * @param  bool        \$useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
     * @param  bool        \$includeContextAndExtra Whether the attachment should include context and extra data
     * @param  int         \$level                  The minimum logging level at which this handler will be triggered
     * @param  bool        \$bubble                 Whether the messages that are handled can bubble up the stack or not
     * @param  array       \$excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     */
    public function __construct(\$webhookUrl, \$channel = null, \$username = null, \$useAttachment = true, \$iconEmoji = null, \$useShortAttachment = false, \$includeContextAndExtra = false, \$level = Logger::CRITICAL, \$bubble = true, array \$excludeFields = array())
    {
        parent::__construct(\$level, \$bubble);

        \$this->webhookUrl = \$webhookUrl;

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
    }

    public function getSlackRecord()
    {
        return \$this->slackRecord;
    }

    public function getWebhookUrl()
    {
        return \$this->webhookUrl;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        \$postData = \$this->slackRecord->getSlackData(\$record);
        \$postString = json_encode(\$postData);

        \$ch = curl_init();
        \$options = array(
            CURLOPT_URL => \$this->webhookUrl,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-type: application/json'),
            CURLOPT_POSTFIELDS => \$postString
        );
        if (defined('CURLOPT_SAFE_UPLOAD')) {
            \$options[CURLOPT_SAFE_UPLOAD] = true;
        }

        curl_setopt_array(\$ch, \$options);

        Curl\\Util::execute(\$ch);
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
        return "vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php";
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
 * Sends notifications through Slack Webhooks
 *
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 */
class SlackWebhookHandler extends AbstractProcessingHandler
{
    /**
     * Slack Webhook token
     * @var string
     */
    private \$webhookUrl;

    /**
     * Instance of the SlackRecord util class preparing data for Slack API.
     * @var SlackRecord
     */
    private \$slackRecord;

    /**
     * @param  string      \$webhookUrl             Slack Webhook URL
     * @param  string|null \$channel                Slack channel (encoded ID or name)
     * @param  string|null \$username               Name of a bot
     * @param  bool        \$useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
     * @param  string|null \$iconEmoji              The emoji name to use (or null)
     * @param  bool        \$useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
     * @param  bool        \$includeContextAndExtra Whether the attachment should include context and extra data
     * @param  int         \$level                  The minimum logging level at which this handler will be triggered
     * @param  bool        \$bubble                 Whether the messages that are handled can bubble up the stack or not
     * @param  array       \$excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     */
    public function __construct(\$webhookUrl, \$channel = null, \$username = null, \$useAttachment = true, \$iconEmoji = null, \$useShortAttachment = false, \$includeContextAndExtra = false, \$level = Logger::CRITICAL, \$bubble = true, array \$excludeFields = array())
    {
        parent::__construct(\$level, \$bubble);

        \$this->webhookUrl = \$webhookUrl;

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
    }

    public function getSlackRecord()
    {
        return \$this->slackRecord;
    }

    public function getWebhookUrl()
    {
        return \$this->webhookUrl;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        \$postData = \$this->slackRecord->getSlackData(\$record);
        \$postString = json_encode(\$postData);

        \$ch = curl_init();
        \$options = array(
            CURLOPT_URL => \$this->webhookUrl,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-type: application/json'),
            CURLOPT_POSTFIELDS => \$postString
        );
        if (defined('CURLOPT_SAFE_UPLOAD')) {
            \$options[CURLOPT_SAFE_UPLOAD] = true;
        }

        curl_setopt_array(\$ch, \$options);

        Curl\\Util::execute(\$ch);
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
", "vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php");
    }
}
