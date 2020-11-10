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

/* vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php */
class __TwigTemplate_01b6f2741f4dce723ff56ba031afbb1d1643d03bcba71732c68d49eadb19c947 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php"));

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

namespace Monolog\\Handler\\Slack;

use Monolog\\Logger;
use Monolog\\Formatter\\NormalizerFormatter;
use Monolog\\Formatter\\FormatterInterface;

/**
 * Slack record utility helping to log to Slack webhooks or API.
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 * @see    https://api.slack.com/docs/message-attachments
 */
class SlackRecord
{
    const COLOR_DANGER = 'danger';

    const COLOR_WARNING = 'warning';

    const COLOR_GOOD = 'good';

    const COLOR_DEFAULT = '#e3e4e6';

    /**
     * Slack channel (encoded ID or name)
     * @var string|null
     */
    private \$channel;

    /**
     * Name of a bot
     * @var string|null
     */
    private \$username;

    /**
     * User icon e.g. 'ghost', 'http://example.com/user.png'
     * @var string
     */
    private \$userIcon;

    /**
     * Whether the message should be added to Slack as attachment (plain text otherwise)
     * @var bool
     */
    private \$useAttachment;

    /**
     * Whether the the context/extra messages added to Slack as attachments are in a short style
     * @var bool
     */
    private \$useShortAttachment;

    /**
     * Whether the attachment should include context and extra data
     * @var bool
     */
    private \$includeContextAndExtra;

    /**
     * Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @var array
     */
    private \$excludeFields;

    /**
     * @var FormatterInterface
     */
    private \$formatter;

    /**
     * @var NormalizerFormatter
     */
    private \$normalizerFormatter;

    public function __construct(\$channel = null, \$username = null, \$useAttachment = true, \$userIcon = null, \$useShortAttachment = false, \$includeContextAndExtra = false, array \$excludeFields = array(), FormatterInterface \$formatter = null)
    {
        \$this->channel = \$channel;
        \$this->username = \$username;
        \$this->userIcon = trim(\$userIcon, ':');
        \$this->useAttachment = \$useAttachment;
        \$this->useShortAttachment = \$useShortAttachment;
        \$this->includeContextAndExtra = \$includeContextAndExtra;
        \$this->excludeFields = \$excludeFields;
        \$this->formatter = \$formatter;

        if (\$this->includeContextAndExtra) {
            \$this->normalizerFormatter = new NormalizerFormatter();
        }
    }

    public function getSlackData(array \$record)
    {
        \$dataArray = array();
        \$record = \$this->excludeFields(\$record);

        if (\$this->username) {
            \$dataArray['username'] = \$this->username;
        }

        if (\$this->channel) {
            \$dataArray['channel'] = \$this->channel;
        }

        if (\$this->formatter && !\$this->useAttachment) {
            \$message = \$this->formatter->format(\$record);
        } else {
            \$message = \$record['message'];
        }

        if (\$this->useAttachment) {
            \$attachment = array(
                'fallback'  => \$message,
                'text'      => \$message,
                'color'     => \$this->getAttachmentColor(\$record['level']),
                'fields'    => array(),
                'mrkdwn_in' => array('fields'),
                'ts'        => \$record['datetime']->getTimestamp()
            );

            if (\$this->useShortAttachment) {
                \$attachment['title'] = \$record['level_name'];
            } else {
                \$attachment['title'] = 'Message';
                \$attachment['fields'][] = \$this->generateAttachmentField('Level', \$record['level_name']);
            }


            if (\$this->includeContextAndExtra) {
                foreach (array('extra', 'context') as \$key) {
                    if (empty(\$record[\$key])) {
                        continue;
                    }

                    if (\$this->useShortAttachment) {
                        \$attachment['fields'][] = \$this->generateAttachmentField(
                            \$key,
                            \$record[\$key]
                        );
                    } else {
                        // Add all extra fields as individual fields in attachment
                        \$attachment['fields'] = array_merge(
                            \$attachment['fields'],
                            \$this->generateAttachmentFields(\$record[\$key])
                        );
                    }
                }
            }

            \$dataArray['attachments'] = array(\$attachment);
        } else {
            \$dataArray['text'] = \$message;
        }

        if (\$this->userIcon) {
            if (filter_var(\$this->userIcon, FILTER_VALIDATE_URL)) {
                \$dataArray['icon_url'] = \$this->userIcon;
            } else {
                \$dataArray['icon_emoji'] = \":{\$this->userIcon}:\";
            }
        }

        return \$dataArray;
    }

    /**
     * Returned a Slack message attachment color associated with
     * provided level.
     *
     * @param  int    \$level
     * @return string
     */
    public function getAttachmentColor(\$level)
    {
        switch (true) {
            case \$level >= Logger::ERROR:
                return self::COLOR_DANGER;
            case \$level >= Logger::WARNING:
                return self::COLOR_WARNING;
            case \$level >= Logger::INFO:
                return self::COLOR_GOOD;
            default:
                return self::COLOR_DEFAULT;
        }
    }

    /**
     * Stringifies an array of key/value pairs to be used in attachment fields
     *
     * @param array \$fields
     *
     * @return string
     */
    public function stringify(\$fields)
    {
        \$normalized = \$this->normalizerFormatter->format(\$fields);
        \$prettyPrintFlag = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 128;

        \$hasSecondDimension = count(array_filter(\$normalized, 'is_array'));
        \$hasNonNumericKeys = !count(array_filter(array_keys(\$normalized), 'is_numeric'));

        return \$hasSecondDimension || \$hasNonNumericKeys
            ? json_encode(\$normalized, \$prettyPrintFlag)
            : json_encode(\$normalized);
    }

    /**
     * Sets the formatter
     *
     * @param FormatterInterface \$formatter
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;
    }

    /**
     * Generates attachment field
     *
     * @param string       \$title
     * @param string|array \$value
     *
     * @return array
     */
    private function generateAttachmentField(\$title, \$value)
    {
        \$value = is_array(\$value)
            ? sprintf('```%s```', \$this->stringify(\$value))
            : \$value;

        return array(
            'title' => ucfirst(\$title),
            'value' => \$value,
            'short' => false
        );
    }

    /**
     * Generates a collection of attachment fields from array
     *
     * @param array \$data
     *
     * @return array
     */
    private function generateAttachmentFields(array \$data)
    {
        \$fields = array();
        foreach (\$this->normalizerFormatter->format(\$data) as \$key => \$value) {
            \$fields[] = \$this->generateAttachmentField(\$key, \$value);
        }

        return \$fields;
    }

    /**
     * Get a copy of record with fields excluded according to \$this->excludeFields
     *
     * @param array \$record
     *
     * @return array
     */
    private function excludeFields(array \$record)
    {
        foreach (\$this->excludeFields as \$field) {
            \$keys = explode('.', \$field);
            \$node = &\$record;
            \$lastKey = end(\$keys);
            foreach (\$keys as \$key) {
                if (!isset(\$node[\$key])) {
                    break;
                }
                if (\$lastKey === \$key) {
                    unset(\$node[\$key]);
                    break;
                }
                \$node = &\$node[\$key];
            }
        }

        return \$record;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php";
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

namespace Monolog\\Handler\\Slack;

use Monolog\\Logger;
use Monolog\\Formatter\\NormalizerFormatter;
use Monolog\\Formatter\\FormatterInterface;

/**
 * Slack record utility helping to log to Slack webhooks or API.
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 * @see    https://api.slack.com/docs/message-attachments
 */
class SlackRecord
{
    const COLOR_DANGER = 'danger';

    const COLOR_WARNING = 'warning';

    const COLOR_GOOD = 'good';

    const COLOR_DEFAULT = '#e3e4e6';

    /**
     * Slack channel (encoded ID or name)
     * @var string|null
     */
    private \$channel;

    /**
     * Name of a bot
     * @var string|null
     */
    private \$username;

    /**
     * User icon e.g. 'ghost', 'http://example.com/user.png'
     * @var string
     */
    private \$userIcon;

    /**
     * Whether the message should be added to Slack as attachment (plain text otherwise)
     * @var bool
     */
    private \$useAttachment;

    /**
     * Whether the the context/extra messages added to Slack as attachments are in a short style
     * @var bool
     */
    private \$useShortAttachment;

    /**
     * Whether the attachment should include context and extra data
     * @var bool
     */
    private \$includeContextAndExtra;

    /**
     * Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @var array
     */
    private \$excludeFields;

    /**
     * @var FormatterInterface
     */
    private \$formatter;

    /**
     * @var NormalizerFormatter
     */
    private \$normalizerFormatter;

    public function __construct(\$channel = null, \$username = null, \$useAttachment = true, \$userIcon = null, \$useShortAttachment = false, \$includeContextAndExtra = false, array \$excludeFields = array(), FormatterInterface \$formatter = null)
    {
        \$this->channel = \$channel;
        \$this->username = \$username;
        \$this->userIcon = trim(\$userIcon, ':');
        \$this->useAttachment = \$useAttachment;
        \$this->useShortAttachment = \$useShortAttachment;
        \$this->includeContextAndExtra = \$includeContextAndExtra;
        \$this->excludeFields = \$excludeFields;
        \$this->formatter = \$formatter;

        if (\$this->includeContextAndExtra) {
            \$this->normalizerFormatter = new NormalizerFormatter();
        }
    }

    public function getSlackData(array \$record)
    {
        \$dataArray = array();
        \$record = \$this->excludeFields(\$record);

        if (\$this->username) {
            \$dataArray['username'] = \$this->username;
        }

        if (\$this->channel) {
            \$dataArray['channel'] = \$this->channel;
        }

        if (\$this->formatter && !\$this->useAttachment) {
            \$message = \$this->formatter->format(\$record);
        } else {
            \$message = \$record['message'];
        }

        if (\$this->useAttachment) {
            \$attachment = array(
                'fallback'  => \$message,
                'text'      => \$message,
                'color'     => \$this->getAttachmentColor(\$record['level']),
                'fields'    => array(),
                'mrkdwn_in' => array('fields'),
                'ts'        => \$record['datetime']->getTimestamp()
            );

            if (\$this->useShortAttachment) {
                \$attachment['title'] = \$record['level_name'];
            } else {
                \$attachment['title'] = 'Message';
                \$attachment['fields'][] = \$this->generateAttachmentField('Level', \$record['level_name']);
            }


            if (\$this->includeContextAndExtra) {
                foreach (array('extra', 'context') as \$key) {
                    if (empty(\$record[\$key])) {
                        continue;
                    }

                    if (\$this->useShortAttachment) {
                        \$attachment['fields'][] = \$this->generateAttachmentField(
                            \$key,
                            \$record[\$key]
                        );
                    } else {
                        // Add all extra fields as individual fields in attachment
                        \$attachment['fields'] = array_merge(
                            \$attachment['fields'],
                            \$this->generateAttachmentFields(\$record[\$key])
                        );
                    }
                }
            }

            \$dataArray['attachments'] = array(\$attachment);
        } else {
            \$dataArray['text'] = \$message;
        }

        if (\$this->userIcon) {
            if (filter_var(\$this->userIcon, FILTER_VALIDATE_URL)) {
                \$dataArray['icon_url'] = \$this->userIcon;
            } else {
                \$dataArray['icon_emoji'] = \":{\$this->userIcon}:\";
            }
        }

        return \$dataArray;
    }

    /**
     * Returned a Slack message attachment color associated with
     * provided level.
     *
     * @param  int    \$level
     * @return string
     */
    public function getAttachmentColor(\$level)
    {
        switch (true) {
            case \$level >= Logger::ERROR:
                return self::COLOR_DANGER;
            case \$level >= Logger::WARNING:
                return self::COLOR_WARNING;
            case \$level >= Logger::INFO:
                return self::COLOR_GOOD;
            default:
                return self::COLOR_DEFAULT;
        }
    }

    /**
     * Stringifies an array of key/value pairs to be used in attachment fields
     *
     * @param array \$fields
     *
     * @return string
     */
    public function stringify(\$fields)
    {
        \$normalized = \$this->normalizerFormatter->format(\$fields);
        \$prettyPrintFlag = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 128;

        \$hasSecondDimension = count(array_filter(\$normalized, 'is_array'));
        \$hasNonNumericKeys = !count(array_filter(array_keys(\$normalized), 'is_numeric'));

        return \$hasSecondDimension || \$hasNonNumericKeys
            ? json_encode(\$normalized, \$prettyPrintFlag)
            : json_encode(\$normalized);
    }

    /**
     * Sets the formatter
     *
     * @param FormatterInterface \$formatter
     */
    public function setFormatter(FormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;
    }

    /**
     * Generates attachment field
     *
     * @param string       \$title
     * @param string|array \$value
     *
     * @return array
     */
    private function generateAttachmentField(\$title, \$value)
    {
        \$value = is_array(\$value)
            ? sprintf('```%s```', \$this->stringify(\$value))
            : \$value;

        return array(
            'title' => ucfirst(\$title),
            'value' => \$value,
            'short' => false
        );
    }

    /**
     * Generates a collection of attachment fields from array
     *
     * @param array \$data
     *
     * @return array
     */
    private function generateAttachmentFields(array \$data)
    {
        \$fields = array();
        foreach (\$this->normalizerFormatter->format(\$data) as \$key => \$value) {
            \$fields[] = \$this->generateAttachmentField(\$key, \$value);
        }

        return \$fields;
    }

    /**
     * Get a copy of record with fields excluded according to \$this->excludeFields
     *
     * @param array \$record
     *
     * @return array
     */
    private function excludeFields(array \$record)
    {
        foreach (\$this->excludeFields as \$field) {
            \$keys = explode('.', \$field);
            \$node = &\$record;
            \$lastKey = end(\$keys);
            foreach (\$keys as \$key) {
                if (!isset(\$node[\$key])) {
                    break;
                }
                if (\$lastKey === \$key) {
                    unset(\$node[\$key]);
                    break;
                }
                \$node = &\$node[\$key];
            }
        }

        return \$record;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php");
    }
}
