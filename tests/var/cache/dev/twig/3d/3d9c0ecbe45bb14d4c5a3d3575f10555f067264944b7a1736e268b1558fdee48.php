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

/* vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php */
class __TwigTemplate_cd8ec6d9700ff5777c0a5a1e161911187a9d3b3a021f5ae39286e73567b6260e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Handler\\AbstractProcessingHandler;
use Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleCommandEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * Writes log to the console output depending on its verbosity setting.
 *
 * It is disabled by default and gets activated as soon as a command is executed.
 * Instead of listening to the console events, the output can also be set manually.
 *
 * The minimum logging level at which this handler will be triggered depends on the
 * verbosity setting of the console output. The default mapping is:
 * - OutputInterface::VERBOSITY_NORMAL will show all WARNING and higher log
 * - OutputInterface::VERBOSITY_VERBOSE (-v) will show all NOTICE and higher log
 * - OutputInterface::VERBOSITY_VERY_VERBOSE (-vv) will show all INFO and higher log
 * - OutputInterface::VERBOSITY_DEBUG (-vvv) will show all DEBUG and higher log, i.e. all log
 *
 * This mapping can be customized with the \$verbosityLevelMap constructor parameter.
 *
 * @author Tobias Schultze <http://tobion.de>
 */
class ConsoleHandler extends AbstractProcessingHandler implements EventSubscriberInterface
{
    private \$output;
    private \$verbosityLevelMap = [
        OutputInterface::VERBOSITY_QUIET => Logger::ERROR,
        OutputInterface::VERBOSITY_NORMAL => Logger::WARNING,
        OutputInterface::VERBOSITY_VERBOSE => Logger::NOTICE,
        OutputInterface::VERBOSITY_VERY_VERBOSE => Logger::INFO,
        OutputInterface::VERBOSITY_DEBUG => Logger::DEBUG,
    ];
    private \$consoleFormaterOptions;

    /**
     * @param OutputInterface|null \$output            The console output to use (the handler remains disabled when passing null
     *                                                until the output is set, e.g. by using console events)
     * @param bool                 \$bubble            Whether the messages that are handled can bubble up the stack
     * @param array                \$verbosityLevelMap Array that maps the OutputInterface verbosity to a minimum logging
     *                                                level (leave empty to use the default mapping)
     */
    public function __construct(OutputInterface \$output = null, bool \$bubble = true, array \$verbosityLevelMap = [], array \$consoleFormaterOptions = [])
    {
        parent::__construct(Logger::DEBUG, \$bubble);
        \$this->output = \$output;

        if (\$verbosityLevelMap) {
            \$this->verbosityLevelMap = \$verbosityLevelMap;
        }

        \$this->consoleFormaterOptions = \$consoleFormaterOptions;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$this->updateLevel() && parent::isHandling(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        // we have to update the logging level each time because the verbosity of the
        // console output might have changed in the meantime (it is not immutable)
        return \$this->updateLevel() && parent::handle(\$record);
    }

    /**
     * Sets the console output to use for printing log.
     */
    public function setOutput(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * Disables the output.
     */
    public function close()
    {
        \$this->output = null;

        parent::close();
    }

    /**
     * Before a command is executed, the handler gets activated and the console output
     * is set in order to know where to write the log.
     */
    public function onCommand(ConsoleCommandEvent \$event)
    {
        \$output = \$event->getOutput();
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$this->setOutput(\$output);
    }

    /**
     * After a command has been executed, it disables the output.
     */
    public function onTerminate(ConsoleTerminateEvent \$event)
    {
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::COMMAND => ['onCommand', 255],
            ConsoleEvents::TERMINATE => ['onTerminate', -255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        // at this point we've determined for sure that we want to output the record, so use the output's own verbosity
        \$this->output->write((string) \$record['formatted'], false, \$this->output->getVerbosity());
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        if (!class_exists(CliDumper::class)) {
            return new LineFormatter();
        }
        if (!\$this->output) {
            return new ConsoleFormatter(\$this->consoleFormaterOptions);
        }

        return new ConsoleFormatter(array_replace([
            'colors' => \$this->output->isDecorated(),
            'multiline' => OutputInterface::VERBOSITY_DEBUG <= \$this->output->getVerbosity(),
        ], \$this->consoleFormaterOptions));
    }

    /**
     * Updates the logging level based on the verbosity setting of the console output.
     *
     * @return bool Whether the handler is enabled and verbosity is not set to quiet
     */
    private function updateLevel()
    {
        if (null === \$this->output) {
            return false;
        }

        \$verbosity = \$this->output->getVerbosity();
        if (isset(\$this->verbosityLevelMap[\$verbosity])) {
            \$this->setLevel(\$this->verbosityLevelMap[\$verbosity]);
        } else {
            \$this->setLevel(Logger::DEBUG);
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Handler\\AbstractProcessingHandler;
use Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleCommandEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * Writes log to the console output depending on its verbosity setting.
 *
 * It is disabled by default and gets activated as soon as a command is executed.
 * Instead of listening to the console events, the output can also be set manually.
 *
 * The minimum logging level at which this handler will be triggered depends on the
 * verbosity setting of the console output. The default mapping is:
 * - OutputInterface::VERBOSITY_NORMAL will show all WARNING and higher log
 * - OutputInterface::VERBOSITY_VERBOSE (-v) will show all NOTICE and higher log
 * - OutputInterface::VERBOSITY_VERY_VERBOSE (-vv) will show all INFO and higher log
 * - OutputInterface::VERBOSITY_DEBUG (-vvv) will show all DEBUG and higher log, i.e. all log
 *
 * This mapping can be customized with the \$verbosityLevelMap constructor parameter.
 *
 * @author Tobias Schultze <http://tobion.de>
 */
class ConsoleHandler extends AbstractProcessingHandler implements EventSubscriberInterface
{
    private \$output;
    private \$verbosityLevelMap = [
        OutputInterface::VERBOSITY_QUIET => Logger::ERROR,
        OutputInterface::VERBOSITY_NORMAL => Logger::WARNING,
        OutputInterface::VERBOSITY_VERBOSE => Logger::NOTICE,
        OutputInterface::VERBOSITY_VERY_VERBOSE => Logger::INFO,
        OutputInterface::VERBOSITY_DEBUG => Logger::DEBUG,
    ];
    private \$consoleFormaterOptions;

    /**
     * @param OutputInterface|null \$output            The console output to use (the handler remains disabled when passing null
     *                                                until the output is set, e.g. by using console events)
     * @param bool                 \$bubble            Whether the messages that are handled can bubble up the stack
     * @param array                \$verbosityLevelMap Array that maps the OutputInterface verbosity to a minimum logging
     *                                                level (leave empty to use the default mapping)
     */
    public function __construct(OutputInterface \$output = null, bool \$bubble = true, array \$verbosityLevelMap = [], array \$consoleFormaterOptions = [])
    {
        parent::__construct(Logger::DEBUG, \$bubble);
        \$this->output = \$output;

        if (\$verbosityLevelMap) {
            \$this->verbosityLevelMap = \$verbosityLevelMap;
        }

        \$this->consoleFormaterOptions = \$consoleFormaterOptions;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array \$record)
    {
        return \$this->updateLevel() && parent::isHandling(\$record);
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        // we have to update the logging level each time because the verbosity of the
        // console output might have changed in the meantime (it is not immutable)
        return \$this->updateLevel() && parent::handle(\$record);
    }

    /**
     * Sets the console output to use for printing log.
     */
    public function setOutput(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * Disables the output.
     */
    public function close()
    {
        \$this->output = null;

        parent::close();
    }

    /**
     * Before a command is executed, the handler gets activated and the console output
     * is set in order to know where to write the log.
     */
    public function onCommand(ConsoleCommandEvent \$event)
    {
        \$output = \$event->getOutput();
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$this->setOutput(\$output);
    }

    /**
     * After a command has been executed, it disables the output.
     */
    public function onTerminate(ConsoleTerminateEvent \$event)
    {
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::COMMAND => ['onCommand', 255],
            ConsoleEvents::TERMINATE => ['onTerminate', -255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        // at this point we've determined for sure that we want to output the record, so use the output's own verbosity
        \$this->output->write((string) \$record['formatted'], false, \$this->output->getVerbosity());
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormatter()
    {
        if (!class_exists(CliDumper::class)) {
            return new LineFormatter();
        }
        if (!\$this->output) {
            return new ConsoleFormatter(\$this->consoleFormaterOptions);
        }

        return new ConsoleFormatter(array_replace([
            'colors' => \$this->output->isDecorated(),
            'multiline' => OutputInterface::VERBOSITY_DEBUG <= \$this->output->getVerbosity(),
        ], \$this->consoleFormaterOptions));
    }

    /**
     * Updates the logging level based on the verbosity setting of the console output.
     *
     * @return bool Whether the handler is enabled and verbosity is not set to quiet
     */
    private function updateLevel()
    {
        if (null === \$this->output) {
            return false;
        }

        \$verbosity = \$this->output->getVerbosity();
        if (isset(\$this->verbosityLevelMap[\$verbosity])) {
            \$this->setLevel(\$this->verbosityLevelMap[\$verbosity]);
        } else {
            \$this->setLevel(Logger::DEBUG);
        }

        return true;
    }
}
", "vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php");
    }
}
