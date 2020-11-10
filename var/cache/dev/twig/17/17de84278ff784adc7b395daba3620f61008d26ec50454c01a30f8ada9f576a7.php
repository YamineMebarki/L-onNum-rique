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

/* vendor/symfony/process/CHANGELOG.md */
class __TwigTemplate_7fb3f1f9a3a493c1834ad016acd374ceb5d77f48d82b6e8f42329e0b5ada5186 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.2.0
-----

 * added the `Process::fromShellCommandline()` to run commands in a shell wrapper
 * deprecated passing a command as string when creating a `Process` instance
 * deprecated the `Process::setCommandline()` and the `PhpProcess::setPhpBinary()` methods
 * added the `Process::waitUntil()` method to wait for the process only for a
   specific output, then continue the normal execution of your application

4.1.0
-----

 * added the `Process::isTtySupported()` method that allows to check for TTY support
 * made `PhpExecutableFinder` look for the `PHP_BINARY` env var when searching the php binary
 * added the `ProcessSignaledException` class to properly catch signaled process errors

4.0.0
-----

 * environment variables will always be inherited
 * added a second `array \$env = []` argument to the `start()`, `run()`,
   `mustRun()`, and `restart()` methods of the `Process` class
 * added a second `array \$env = []` argument to the `start()` method of the
   `PhpProcess` class
 * the `ProcessUtils::escapeArgument()` method has been removed
 * the `areEnvironmentVariablesInherited()`, `getOptions()`, and `setOptions()`
   methods of the `Process` class have been removed
 * support for passing `proc_open()` options has been removed
 * removed the `ProcessBuilder` class, use the `Process` class instead
 * removed the `getEnhanceWindowsCompatibility()` and `setEnhanceWindowsCompatibility()` methods of the `Process` class
 * passing a not existing working directory to the constructor of the `Symfony\\Component\\Process\\Process` class is not
   supported anymore

3.4.0
-----

 * deprecated the ProcessBuilder class
 * deprecated calling `Process::start()` without setting a valid working directory beforehand (via `setWorkingDirectory()` or constructor)

3.3.0
-----

 * added command line arrays in the `Process` class
 * added `\$env` argument to `Process::start()`, `run()`, `mustRun()` and `restart()` methods
 * deprecated the `ProcessUtils::escapeArgument()` method
 * deprecated not inheriting environment variables
 * deprecated configuring `proc_open()` options
 * deprecated configuring enhanced Windows compatibility
 * deprecated configuring enhanced sigchild compatibility

2.5.0
-----

 * added support for PTY mode
 * added the convenience method \"mustRun\"
 * deprecation: Process::setStdin() is deprecated in favor of Process::setInput()
 * deprecation: Process::getStdin() is deprecated in favor of Process::getInput()
 * deprecation: Process::setInput() and ProcessBuilder::setInput() do not accept non-scalar types

2.4.0
-----

 * added the ability to define an idle timeout

2.3.0
-----

 * added ProcessUtils::escapeArgument() to fix the bug in escapeshellarg() function on Windows
 * added Process::signal()
 * added Process::getPid()
 * added support for a TTY mode

2.2.0
-----

 * added ProcessBuilder::setArguments() to reset the arguments on a builder
 * added a way to retrieve the standard and error output incrementally
 * added Process:restart()

2.1.0
-----

 * added support for non-blocking processes (start(), wait(), isRunning(), stop())
 * enhanced Windows compatibility
 * added Process::getExitCodeText() that returns a string representation for
   the exit code returned by the process
 * added ProcessBuilder
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.2.0
-----

 * added the `Process::fromShellCommandline()` to run commands in a shell wrapper
 * deprecated passing a command as string when creating a `Process` instance
 * deprecated the `Process::setCommandline()` and the `PhpProcess::setPhpBinary()` methods
 * added the `Process::waitUntil()` method to wait for the process only for a
   specific output, then continue the normal execution of your application

4.1.0
-----

 * added the `Process::isTtySupported()` method that allows to check for TTY support
 * made `PhpExecutableFinder` look for the `PHP_BINARY` env var when searching the php binary
 * added the `ProcessSignaledException` class to properly catch signaled process errors

4.0.0
-----

 * environment variables will always be inherited
 * added a second `array \$env = []` argument to the `start()`, `run()`,
   `mustRun()`, and `restart()` methods of the `Process` class
 * added a second `array \$env = []` argument to the `start()` method of the
   `PhpProcess` class
 * the `ProcessUtils::escapeArgument()` method has been removed
 * the `areEnvironmentVariablesInherited()`, `getOptions()`, and `setOptions()`
   methods of the `Process` class have been removed
 * support for passing `proc_open()` options has been removed
 * removed the `ProcessBuilder` class, use the `Process` class instead
 * removed the `getEnhanceWindowsCompatibility()` and `setEnhanceWindowsCompatibility()` methods of the `Process` class
 * passing a not existing working directory to the constructor of the `Symfony\\Component\\Process\\Process` class is not
   supported anymore

3.4.0
-----

 * deprecated the ProcessBuilder class
 * deprecated calling `Process::start()` without setting a valid working directory beforehand (via `setWorkingDirectory()` or constructor)

3.3.0
-----

 * added command line arrays in the `Process` class
 * added `\$env` argument to `Process::start()`, `run()`, `mustRun()` and `restart()` methods
 * deprecated the `ProcessUtils::escapeArgument()` method
 * deprecated not inheriting environment variables
 * deprecated configuring `proc_open()` options
 * deprecated configuring enhanced Windows compatibility
 * deprecated configuring enhanced sigchild compatibility

2.5.0
-----

 * added support for PTY mode
 * added the convenience method \"mustRun\"
 * deprecation: Process::setStdin() is deprecated in favor of Process::setInput()
 * deprecation: Process::getStdin() is deprecated in favor of Process::getInput()
 * deprecation: Process::setInput() and ProcessBuilder::setInput() do not accept non-scalar types

2.4.0
-----

 * added the ability to define an idle timeout

2.3.0
-----

 * added ProcessUtils::escapeArgument() to fix the bug in escapeshellarg() function on Windows
 * added Process::signal()
 * added Process::getPid()
 * added support for a TTY mode

2.2.0
-----

 * added ProcessBuilder::setArguments() to reset the arguments on a builder
 * added a way to retrieve the standard and error output incrementally
 * added Process:restart()

2.1.0
-----

 * added support for non-blocking processes (start(), wait(), isRunning(), stop())
 * enhanced Windows compatibility
 * added Process::getExitCodeText() that returns a string representation for
   the exit code returned by the process
 * added ProcessBuilder
", "vendor/symfony/process/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/process/CHANGELOG.md");
    }
}
