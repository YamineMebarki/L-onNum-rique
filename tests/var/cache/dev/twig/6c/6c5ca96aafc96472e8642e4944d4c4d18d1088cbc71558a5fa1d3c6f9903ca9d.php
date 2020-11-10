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

/* vendor/symfony/console/Helper/ProcessHelper.php */
class __TwigTemplate_931bc573f58c61ab607e1bfadd01a147cbfab17f3415c6ed8ef09486c445787c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/ProcessHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/ProcessHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;
use Symfony\\Component\\Process\\Process;

/**
 * The ProcessHelper class provides helpers to run external processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.2
 */
class ProcessHelper extends Helper
{
    /**
     * Runs an external process.
     *
     * @param OutputInterface \$output    An OutputInterface instance
     * @param array|Process   \$cmd       An instance of Process or an array of the command and arguments
     * @param string|null     \$error     An error message that must be displayed if something went wrong
     * @param callable|null   \$callback  A PHP callback to run whenever there is some
     *                                   output available on STDOUT or STDERR
     * @param int             \$verbosity The threshold for verbosity
     *
     * @return Process The process that ran
     */
    public function run(OutputInterface \$output, \$cmd, \$error = null, callable \$callback = null, \$verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        if (\$cmd instanceof Process) {
            \$cmd = [\$cmd];
        }

        if (!\\is_array(\$cmd)) {
            @trigger_error(sprintf('Passing a command as a string to \"%s()\" is deprecated since Symfony 4.2, pass it the command as an array of arguments instead.', __METHOD__), E_USER_DEPRECATED);
            \$cmd = [method_exists(Process::class, 'fromShellCommandline') ? Process::fromShellCommandline(\$cmd) : new Process(\$cmd)];
        }

        if (\\is_string(\$cmd[0] ?? null)) {
            \$process = new Process(\$cmd);
            \$cmd = [];
        } elseif ((\$cmd[0] ?? null) instanceof Process) {
            \$process = \$cmd[0];
            unset(\$cmd[0]);
        } else {
            throw new \\InvalidArgumentException(sprintf('Invalid command provided to \"%s()\": the command should be an array whose first element is either the path to the binary to run or a \"Process\" object.', __METHOD__));
        }

        if (\$verbosity <= \$output->getVerbosity()) {
            \$output->write(\$formatter->start(spl_object_hash(\$process), \$this->escapeString(\$process->getCommandLine())));
        }

        if (\$output->isDebug()) {
            \$callback = \$this->wrapCallback(\$output, \$process, \$callback);
        }

        \$process->run(\$callback, \$cmd);

        if (\$verbosity <= \$output->getVerbosity()) {
            \$message = \$process->isSuccessful() ? 'Command ran successfully' : sprintf('%s Command did not run successfully', \$process->getExitCode());
            \$output->write(\$formatter->stop(spl_object_hash(\$process), \$message, \$process->isSuccessful()));
        }

        if (!\$process->isSuccessful() && null !== \$error) {
            \$output->writeln(sprintf('<error>%s</error>', \$this->escapeString(\$error)));
        }

        return \$process;
    }

    /**
     * Runs the process.
     *
     * This is identical to run() except that an exception is thrown if the process
     * exits with a non-zero exit code.
     *
     * @param OutputInterface \$output   An OutputInterface instance
     * @param string|Process  \$cmd      An instance of Process or a command to run
     * @param string|null     \$error    An error message that must be displayed if something went wrong
     * @param callable|null   \$callback A PHP callback to run whenever there is some
     *                                  output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     *
     * @throws ProcessFailedException
     *
     * @see run()
     */
    public function mustRun(OutputInterface \$output, \$cmd, \$error = null, callable \$callback = null)
    {
        \$process = \$this->run(\$output, \$cmd, \$error, \$callback);

        if (!\$process->isSuccessful()) {
            throw new ProcessFailedException(\$process);
        }

        return \$process;
    }

    /**
     * Wraps a Process callback to add debugging output.
     *
     * @param OutputInterface \$output   An OutputInterface interface
     * @param Process         \$process  The Process
     * @param callable|null   \$callback A PHP callable
     *
     * @return callable
     */
    public function wrapCallback(OutputInterface \$output, Process \$process, callable \$callback = null)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        return function (\$type, \$buffer) use (\$output, \$process, \$callback, \$formatter) {
            \$output->write(\$formatter->progress(spl_object_hash(\$process), \$this->escapeString(\$buffer), Process::ERR === \$type));

            if (null !== \$callback) {
                \$callback(\$type, \$buffer);
            }
        };
    }

    private function escapeString(\$str)
    {
        return str_replace('<', '\\\\<', \$str);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'process';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/ProcessHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;
use Symfony\\Component\\Process\\Process;

/**
 * The ProcessHelper class provides helpers to run external processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.2
 */
class ProcessHelper extends Helper
{
    /**
     * Runs an external process.
     *
     * @param OutputInterface \$output    An OutputInterface instance
     * @param array|Process   \$cmd       An instance of Process or an array of the command and arguments
     * @param string|null     \$error     An error message that must be displayed if something went wrong
     * @param callable|null   \$callback  A PHP callback to run whenever there is some
     *                                   output available on STDOUT or STDERR
     * @param int             \$verbosity The threshold for verbosity
     *
     * @return Process The process that ran
     */
    public function run(OutputInterface \$output, \$cmd, \$error = null, callable \$callback = null, \$verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        if (\$cmd instanceof Process) {
            \$cmd = [\$cmd];
        }

        if (!\\is_array(\$cmd)) {
            @trigger_error(sprintf('Passing a command as a string to \"%s()\" is deprecated since Symfony 4.2, pass it the command as an array of arguments instead.', __METHOD__), E_USER_DEPRECATED);
            \$cmd = [method_exists(Process::class, 'fromShellCommandline') ? Process::fromShellCommandline(\$cmd) : new Process(\$cmd)];
        }

        if (\\is_string(\$cmd[0] ?? null)) {
            \$process = new Process(\$cmd);
            \$cmd = [];
        } elseif ((\$cmd[0] ?? null) instanceof Process) {
            \$process = \$cmd[0];
            unset(\$cmd[0]);
        } else {
            throw new \\InvalidArgumentException(sprintf('Invalid command provided to \"%s()\": the command should be an array whose first element is either the path to the binary to run or a \"Process\" object.', __METHOD__));
        }

        if (\$verbosity <= \$output->getVerbosity()) {
            \$output->write(\$formatter->start(spl_object_hash(\$process), \$this->escapeString(\$process->getCommandLine())));
        }

        if (\$output->isDebug()) {
            \$callback = \$this->wrapCallback(\$output, \$process, \$callback);
        }

        \$process->run(\$callback, \$cmd);

        if (\$verbosity <= \$output->getVerbosity()) {
            \$message = \$process->isSuccessful() ? 'Command ran successfully' : sprintf('%s Command did not run successfully', \$process->getExitCode());
            \$output->write(\$formatter->stop(spl_object_hash(\$process), \$message, \$process->isSuccessful()));
        }

        if (!\$process->isSuccessful() && null !== \$error) {
            \$output->writeln(sprintf('<error>%s</error>', \$this->escapeString(\$error)));
        }

        return \$process;
    }

    /**
     * Runs the process.
     *
     * This is identical to run() except that an exception is thrown if the process
     * exits with a non-zero exit code.
     *
     * @param OutputInterface \$output   An OutputInterface instance
     * @param string|Process  \$cmd      An instance of Process or a command to run
     * @param string|null     \$error    An error message that must be displayed if something went wrong
     * @param callable|null   \$callback A PHP callback to run whenever there is some
     *                                  output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     *
     * @throws ProcessFailedException
     *
     * @see run()
     */
    public function mustRun(OutputInterface \$output, \$cmd, \$error = null, callable \$callback = null)
    {
        \$process = \$this->run(\$output, \$cmd, \$error, \$callback);

        if (!\$process->isSuccessful()) {
            throw new ProcessFailedException(\$process);
        }

        return \$process;
    }

    /**
     * Wraps a Process callback to add debugging output.
     *
     * @param OutputInterface \$output   An OutputInterface interface
     * @param Process         \$process  The Process
     * @param callable|null   \$callback A PHP callable
     *
     * @return callable
     */
    public function wrapCallback(OutputInterface \$output, Process \$process, callable \$callback = null)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        return function (\$type, \$buffer) use (\$output, \$process, \$callback, \$formatter) {
            \$output->write(\$formatter->progress(spl_object_hash(\$process), \$this->escapeString(\$buffer), Process::ERR === \$type));

            if (null !== \$callback) {
                \$callback(\$type, \$buffer);
            }
        };
    }

    private function escapeString(\$str)
    {
        return str_replace('<', '\\\\<', \$str);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'process';
    }
}
", "vendor/symfony/console/Helper/ProcessHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/ProcessHelper.php");
    }
}
