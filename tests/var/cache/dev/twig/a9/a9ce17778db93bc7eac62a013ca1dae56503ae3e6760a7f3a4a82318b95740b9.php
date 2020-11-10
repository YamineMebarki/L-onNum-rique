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

/* vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php */
class __TwigTemplate_308ef4de67859f29a337d0cb12eb43f82f1208c6ccd2fb591fe53343cfe72280 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php"));

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

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Logger;
use Raven_Client;

/**
 * Handler to send messages to a Sentry (https://github.com/getsentry/sentry) server
 * using sentry-php (https://github.com/getsentry/sentry-php)
 *
 * @author Marc Abramowitz <marc@marc-abramowitz.com>
 */
class RavenHandler extends AbstractProcessingHandler
{
    /**
     * Translates Monolog log levels to Raven log levels.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => Raven_Client::DEBUG,
        Logger::INFO      => Raven_Client::INFO,
        Logger::NOTICE    => Raven_Client::INFO,
        Logger::WARNING   => Raven_Client::WARNING,
        Logger::ERROR     => Raven_Client::ERROR,
        Logger::CRITICAL  => Raven_Client::FATAL,
        Logger::ALERT     => Raven_Client::FATAL,
        Logger::EMERGENCY => Raven_Client::FATAL,
    );

    /**
     * @var string should represent the current version of the calling
     *             software. Can be any string (git commit, version number)
     */
    protected \$release;

    /**
     * @var Raven_Client the client object that sends the message to the server
     */
    protected \$ravenClient;

    /**
     * @var LineFormatter The formatter to use for the log generated via handleBatch()
     */
    protected \$batchFormatter;

    /**
     * @param Raven_Client \$ravenClient
     * @param int          \$level       The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble      Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(Raven_Client \$ravenClient, \$level = Logger::DEBUG, \$bubble = true)
    {
        @trigger_error('The Monolog\\Handler\\RavenHandler class is deprecated. You should rather upgrade to the sentry/sentry 2.x and use Sentry\\Monolog\\Handler, see https://github.com/getsentry/sentry-php/blob/master/src/Monolog/Handler.php', E_USER_DEPRECATED);

        parent::__construct(\$level, \$bubble);

        \$this->ravenClient = \$ravenClient;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$level = \$this->level;

        // filter records based on their level
        \$records = array_filter(\$records, function (\$record) use (\$level) {
            return \$record['level'] >= \$level;
        });

        if (!\$records) {
            return;
        }

        // the record with the highest severity is the \"main\" one
        \$record = array_reduce(\$records, function (\$highest, \$record) {
            if (\$record['level'] > \$highest['level']) {
                return \$record;
            }

            return \$highest;
        });

        // the other ones are added as a context item
        \$log = array();
        foreach (\$records as \$r) {
            \$log[] = \$this->processRecord(\$r);
        }

        if (\$log) {
            \$record['context']['log'] = (string) \$this->getBatchFormatter()->formatBatch(\$log);
        }

        \$this->handle(\$record);
    }

    /**
     * Sets the formatter for the log generated by handleBatch().
     *
     * @param FormatterInterface \$formatter
     */
    public function setBatchFormatter(FormatterInterface \$formatter)
    {
        \$this->batchFormatter = \$formatter;
    }

    /**
     * Gets the formatter for the log generated by handleBatch().
     *
     * @return FormatterInterface
     */
    public function getBatchFormatter()
    {
        if (!\$this->batchFormatter) {
            \$this->batchFormatter = \$this->getDefaultBatchFormatter();
        }

        return \$this->batchFormatter;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$previousUserContext = false;
        \$options = array();
        \$options['level'] = \$this->logLevels[\$record['level']];
        \$options['tags'] = array();
        if (!empty(\$record['extra']['tags'])) {
            \$options['tags'] = array_merge(\$options['tags'], \$record['extra']['tags']);
            unset(\$record['extra']['tags']);
        }
        if (!empty(\$record['context']['tags'])) {
            \$options['tags'] = array_merge(\$options['tags'], \$record['context']['tags']);
            unset(\$record['context']['tags']);
        }
        if (!empty(\$record['context']['fingerprint'])) {
            \$options['fingerprint'] = \$record['context']['fingerprint'];
            unset(\$record['context']['fingerprint']);
        }
        if (!empty(\$record['context']['logger'])) {
            \$options['logger'] = \$record['context']['logger'];
            unset(\$record['context']['logger']);
        } else {
            \$options['logger'] = \$record['channel'];
        }
        foreach (\$this->getExtraParameters() as \$key) {
            foreach (array('extra', 'context') as \$source) {
                if (!empty(\$record[\$source][\$key])) {
                    \$options[\$key] = \$record[\$source][\$key];
                    unset(\$record[\$source][\$key]);
                }
            }
        }
        if (!empty(\$record['context'])) {
            \$options['extra']['context'] = \$record['context'];
            if (!empty(\$record['context']['user'])) {
                \$previousUserContext = \$this->ravenClient->context->user;
                \$this->ravenClient->user_context(\$record['context']['user']);
                unset(\$options['extra']['context']['user']);
            }
        }
        if (!empty(\$record['extra'])) {
            \$options['extra']['extra'] = \$record['extra'];
        }

        if (!empty(\$this->release) && !isset(\$options['release'])) {
            \$options['release'] = \$this->release;
        }

        if (isset(\$record['context']['exception']) && (\$record['context']['exception'] instanceof \\Exception || (PHP_VERSION_ID >= 70000 && \$record['context']['exception'] instanceof \\Throwable))) {
            \$options['message'] = \$record['formatted'];
            \$this->ravenClient->captureException(\$record['context']['exception'], \$options);
        } else {
            \$this->ravenClient->captureMessage(\$record['formatted'], array(), \$options);
        }

        if (\$previousUserContext !== false) {
            \$this->ravenClient->user_context(\$previousUserContext);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('[%channel%] %message%');
    }

    /**
     * Gets the default formatter for the log generated by handleBatch().
     *
     * @return FormatterInterface
     */
    protected function getDefaultBatchFormatter()
    {
        return new LineFormatter();
    }

    /**
     * Gets extra parameters supported by Raven that can be found in \"extra\" and \"context\"
     *
     * @return array
     */
    protected function getExtraParameters()
    {
        return array('contexts', 'checksum', 'release', 'event_id');
    }

    /**
     * @param string \$value
     * @return self
     */
    public function setRelease(\$value)
    {
        \$this->release = \$value;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php";
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

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Logger;
use Raven_Client;

/**
 * Handler to send messages to a Sentry (https://github.com/getsentry/sentry) server
 * using sentry-php (https://github.com/getsentry/sentry-php)
 *
 * @author Marc Abramowitz <marc@marc-abramowitz.com>
 */
class RavenHandler extends AbstractProcessingHandler
{
    /**
     * Translates Monolog log levels to Raven log levels.
     */
    protected \$logLevels = array(
        Logger::DEBUG     => Raven_Client::DEBUG,
        Logger::INFO      => Raven_Client::INFO,
        Logger::NOTICE    => Raven_Client::INFO,
        Logger::WARNING   => Raven_Client::WARNING,
        Logger::ERROR     => Raven_Client::ERROR,
        Logger::CRITICAL  => Raven_Client::FATAL,
        Logger::ALERT     => Raven_Client::FATAL,
        Logger::EMERGENCY => Raven_Client::FATAL,
    );

    /**
     * @var string should represent the current version of the calling
     *             software. Can be any string (git commit, version number)
     */
    protected \$release;

    /**
     * @var Raven_Client the client object that sends the message to the server
     */
    protected \$ravenClient;

    /**
     * @var LineFormatter The formatter to use for the log generated via handleBatch()
     */
    protected \$batchFormatter;

    /**
     * @param Raven_Client \$ravenClient
     * @param int          \$level       The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble      Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(Raven_Client \$ravenClient, \$level = Logger::DEBUG, \$bubble = true)
    {
        @trigger_error('The Monolog\\Handler\\RavenHandler class is deprecated. You should rather upgrade to the sentry/sentry 2.x and use Sentry\\Monolog\\Handler, see https://github.com/getsentry/sentry-php/blob/master/src/Monolog/Handler.php', E_USER_DEPRECATED);

        parent::__construct(\$level, \$bubble);

        \$this->ravenClient = \$ravenClient;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$level = \$this->level;

        // filter records based on their level
        \$records = array_filter(\$records, function (\$record) use (\$level) {
            return \$record['level'] >= \$level;
        });

        if (!\$records) {
            return;
        }

        // the record with the highest severity is the \"main\" one
        \$record = array_reduce(\$records, function (\$highest, \$record) {
            if (\$record['level'] > \$highest['level']) {
                return \$record;
            }

            return \$highest;
        });

        // the other ones are added as a context item
        \$log = array();
        foreach (\$records as \$r) {
            \$log[] = \$this->processRecord(\$r);
        }

        if (\$log) {
            \$record['context']['log'] = (string) \$this->getBatchFormatter()->formatBatch(\$log);
        }

        \$this->handle(\$record);
    }

    /**
     * Sets the formatter for the log generated by handleBatch().
     *
     * @param FormatterInterface \$formatter
     */
    public function setBatchFormatter(FormatterInterface \$formatter)
    {
        \$this->batchFormatter = \$formatter;
    }

    /**
     * Gets the formatter for the log generated by handleBatch().
     *
     * @return FormatterInterface
     */
    public function getBatchFormatter()
    {
        if (!\$this->batchFormatter) {
            \$this->batchFormatter = \$this->getDefaultBatchFormatter();
        }

        return \$this->batchFormatter;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$previousUserContext = false;
        \$options = array();
        \$options['level'] = \$this->logLevels[\$record['level']];
        \$options['tags'] = array();
        if (!empty(\$record['extra']['tags'])) {
            \$options['tags'] = array_merge(\$options['tags'], \$record['extra']['tags']);
            unset(\$record['extra']['tags']);
        }
        if (!empty(\$record['context']['tags'])) {
            \$options['tags'] = array_merge(\$options['tags'], \$record['context']['tags']);
            unset(\$record['context']['tags']);
        }
        if (!empty(\$record['context']['fingerprint'])) {
            \$options['fingerprint'] = \$record['context']['fingerprint'];
            unset(\$record['context']['fingerprint']);
        }
        if (!empty(\$record['context']['logger'])) {
            \$options['logger'] = \$record['context']['logger'];
            unset(\$record['context']['logger']);
        } else {
            \$options['logger'] = \$record['channel'];
        }
        foreach (\$this->getExtraParameters() as \$key) {
            foreach (array('extra', 'context') as \$source) {
                if (!empty(\$record[\$source][\$key])) {
                    \$options[\$key] = \$record[\$source][\$key];
                    unset(\$record[\$source][\$key]);
                }
            }
        }
        if (!empty(\$record['context'])) {
            \$options['extra']['context'] = \$record['context'];
            if (!empty(\$record['context']['user'])) {
                \$previousUserContext = \$this->ravenClient->context->user;
                \$this->ravenClient->user_context(\$record['context']['user']);
                unset(\$options['extra']['context']['user']);
            }
        }
        if (!empty(\$record['extra'])) {
            \$options['extra']['extra'] = \$record['extra'];
        }

        if (!empty(\$this->release) && !isset(\$options['release'])) {
            \$options['release'] = \$this->release;
        }

        if (isset(\$record['context']['exception']) && (\$record['context']['exception'] instanceof \\Exception || (PHP_VERSION_ID >= 70000 && \$record['context']['exception'] instanceof \\Throwable))) {
            \$options['message'] = \$record['formatted'];
            \$this->ravenClient->captureException(\$record['context']['exception'], \$options);
        } else {
            \$this->ravenClient->captureMessage(\$record['formatted'], array(), \$options);
        }

        if (\$previousUserContext !== false) {
            \$this->ravenClient->user_context(\$previousUserContext);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('[%channel%] %message%');
    }

    /**
     * Gets the default formatter for the log generated by handleBatch().
     *
     * @return FormatterInterface
     */
    protected function getDefaultBatchFormatter()
    {
        return new LineFormatter();
    }

    /**
     * Gets extra parameters supported by Raven that can be found in \"extra\" and \"context\"
     *
     * @return array
     */
    protected function getExtraParameters()
    {
        return array('contexts', 'checksum', 'release', 'event_id');
    }

    /**
     * @param string \$value
     * @return self
     */
    public function setRelease(\$value)
    {
        \$this->release = \$value;

        return \$this;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/RavenHandler.php");
    }
}
