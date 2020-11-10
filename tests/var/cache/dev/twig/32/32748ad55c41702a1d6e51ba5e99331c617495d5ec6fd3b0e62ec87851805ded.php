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

/* vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php */
class __TwigTemplate_4f7092b08cad06faecb5022a972689db96e533a08bb804f91a125f6adca915ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php"));

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

use RollbarNotifier;
use Exception;
use Monolog\\Logger;

/**
 * Sends errors to Rollbar
 *
 * If the context data contains a `payload` key, that is used as an array
 * of payload options to RollbarNotifier's report_message/report_exception methods.
 *
 * Rollbar's context info will contain the context + extra keys from the log record
 * merged, and then on top of that a few keys:
 *
 *  - level (rollbar level name)
 *  - monolog_level (monolog level name, raw level, as rollbar only has 5 but monolog 8)
 *  - channel
 *  - datetime (unix timestamp)
 *
 * @author Paul Statezny <paulstatezny@gmail.com>
 */
class RollbarHandler extends AbstractProcessingHandler
{
    /**
     * Rollbar notifier
     *
     * @var RollbarNotifier
     */
    protected \$rollbarNotifier;

    protected \$levelMap = array(
        Logger::DEBUG     => 'debug',
        Logger::INFO      => 'info',
        Logger::NOTICE    => 'info',
        Logger::WARNING   => 'warning',
        Logger::ERROR     => 'error',
        Logger::CRITICAL  => 'critical',
        Logger::ALERT     => 'critical',
        Logger::EMERGENCY => 'critical',
    );

    /**
     * Records whether any log records have been added since the last flush of the rollbar notifier
     *
     * @var bool
     */
    private \$hasRecords = false;

    protected \$initialized = false;

    /**
     * @param RollbarNotifier \$rollbarNotifier RollbarNotifier object constructed with valid token
     * @param int             \$level           The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble          Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(RollbarNotifier \$rollbarNotifier, \$level = Logger::ERROR, \$bubble = true)
    {
        \$this->rollbarNotifier = \$rollbarNotifier;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!\$this->initialized) {
            // __destructor() doesn't get called on Fatal errors
            register_shutdown_function(array(\$this, 'close'));
            \$this->initialized = true;
        }

        \$context = \$record['context'];
        \$payload = array();
        if (isset(\$context['payload'])) {
            \$payload = \$context['payload'];
            unset(\$context['payload']);
        }
        \$context = array_merge(\$context, \$record['extra'], array(
            'level' => \$this->levelMap[\$record['level']],
            'monolog_level' => \$record['level_name'],
            'channel' => \$record['channel'],
            'datetime' => \$record['datetime']->format('U'),
        ));

        if (isset(\$context['exception']) && \$context['exception'] instanceof Exception) {
            \$payload['level'] = \$context['level'];
            \$exception = \$context['exception'];
            unset(\$context['exception']);

            \$this->rollbarNotifier->report_exception(\$exception, \$context, \$payload);
        } else {
            \$this->rollbarNotifier->report_message(
                \$record['message'],
                \$context['level'],
                \$context,
                \$payload
            );
        }

        \$this->hasRecords = true;
    }

    public function flush()
    {
        if (\$this->hasRecords) {
            \$this->rollbarNotifier->flush();
            \$this->hasRecords = false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$this->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->flush();

        parent::reset();
    }


}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php";
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

use RollbarNotifier;
use Exception;
use Monolog\\Logger;

/**
 * Sends errors to Rollbar
 *
 * If the context data contains a `payload` key, that is used as an array
 * of payload options to RollbarNotifier's report_message/report_exception methods.
 *
 * Rollbar's context info will contain the context + extra keys from the log record
 * merged, and then on top of that a few keys:
 *
 *  - level (rollbar level name)
 *  - monolog_level (monolog level name, raw level, as rollbar only has 5 but monolog 8)
 *  - channel
 *  - datetime (unix timestamp)
 *
 * @author Paul Statezny <paulstatezny@gmail.com>
 */
class RollbarHandler extends AbstractProcessingHandler
{
    /**
     * Rollbar notifier
     *
     * @var RollbarNotifier
     */
    protected \$rollbarNotifier;

    protected \$levelMap = array(
        Logger::DEBUG     => 'debug',
        Logger::INFO      => 'info',
        Logger::NOTICE    => 'info',
        Logger::WARNING   => 'warning',
        Logger::ERROR     => 'error',
        Logger::CRITICAL  => 'critical',
        Logger::ALERT     => 'critical',
        Logger::EMERGENCY => 'critical',
    );

    /**
     * Records whether any log records have been added since the last flush of the rollbar notifier
     *
     * @var bool
     */
    private \$hasRecords = false;

    protected \$initialized = false;

    /**
     * @param RollbarNotifier \$rollbarNotifier RollbarNotifier object constructed with valid token
     * @param int             \$level           The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble          Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(RollbarNotifier \$rollbarNotifier, \$level = Logger::ERROR, \$bubble = true)
    {
        \$this->rollbarNotifier = \$rollbarNotifier;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!\$this->initialized) {
            // __destructor() doesn't get called on Fatal errors
            register_shutdown_function(array(\$this, 'close'));
            \$this->initialized = true;
        }

        \$context = \$record['context'];
        \$payload = array();
        if (isset(\$context['payload'])) {
            \$payload = \$context['payload'];
            unset(\$context['payload']);
        }
        \$context = array_merge(\$context, \$record['extra'], array(
            'level' => \$this->levelMap[\$record['level']],
            'monolog_level' => \$record['level_name'],
            'channel' => \$record['channel'],
            'datetime' => \$record['datetime']->format('U'),
        ));

        if (isset(\$context['exception']) && \$context['exception'] instanceof Exception) {
            \$payload['level'] = \$context['level'];
            \$exception = \$context['exception'];
            unset(\$context['exception']);

            \$this->rollbarNotifier->report_exception(\$exception, \$context, \$payload);
        } else {
            \$this->rollbarNotifier->report_message(
                \$record['message'],
                \$context['level'],
                \$context,
                \$payload
            );
        }

        \$this->hasRecords = true;
    }

    public function flush()
    {
        if (\$this->hasRecords) {
            \$this->rollbarNotifier->flush();
            \$this->hasRecords = false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$this->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->flush();

        parent::reset();
    }


}
", "vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php");
    }
}
