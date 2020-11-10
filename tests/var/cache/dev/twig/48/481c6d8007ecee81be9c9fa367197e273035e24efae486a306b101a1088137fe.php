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

/* vendor/symfony/web-server-bundle/WebServer.php */
class __TwigTemplate_e44424863f2321db66a86019db85267b772629d1bc41c09efa1d7b18159b37c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/WebServer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/WebServer.php"));

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

namespace Symfony\\Bundle\\WebServerBundle;

use Symfony\\Component\\Process\\Exception\\RuntimeException;
use Symfony\\Component\\Process\\PhpExecutableFinder;
use Symfony\\Component\\Process\\Process;

/**
 * Manages a local HTTP web server.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebServer
{
    const STARTED = 0;
    const STOPPED = 1;

    private \$pidFileDirectory;

    public function __construct(string \$pidFileDirectory = null)
    {
        \$this->pidFileDirectory = \$pidFileDirectory;
    }

    public function run(WebServerConfig \$config, \$disableOutput = true, callable \$callback = null)
    {
        if (\$this->isRunning()) {
            throw new \\RuntimeException(sprintf('A process is already listening on http://%s.', \$config->getAddress()));
        }

        \$process = \$this->createServerProcess(\$config);
        if (\$disableOutput) {
            \$process->disableOutput();
            \$callback = null;
        } else {
            try {
                \$process->setTty(true);
                \$callback = null;
            } catch (RuntimeException \$e) {
            }
        }

        \$process->run(\$callback);

        if (!\$process->isSuccessful()) {
            \$error = 'Server terminated unexpectedly.';
            if (\$process->isOutputDisabled()) {
                \$error .= ' Run the command again with -v option for more details.';
            }

            throw new \\RuntimeException(\$error);
        }
    }

    public function start(WebServerConfig \$config, \$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (\$this->isRunning(\$pidFile)) {
            throw new \\RuntimeException(sprintf('A process is already listening on http://%s.', \$config->getAddress()));
        }

        \$pid = pcntl_fork();

        if (\$pid < 0) {
            throw new \\RuntimeException('Unable to start the server process.');
        }

        if (\$pid > 0) {
            return self::STARTED;
        }

        if (posix_setsid() < 0) {
            throw new \\RuntimeException('Unable to set the child process as session leader.');
        }

        \$process = \$this->createServerProcess(\$config);
        \$process->disableOutput();
        \$process->start();

        if (!\$process->isRunning()) {
            throw new \\RuntimeException('Unable to start the server process.');
        }

        file_put_contents(\$pidFile, \$config->getAddress());

        // stop the web server when the lock file is removed
        while (\$process->isRunning()) {
            if (!file_exists(\$pidFile)) {
                \$process->stop();
            }

            sleep(1);
        }

        return self::STOPPED;
    }

    public function stop(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            throw new \\RuntimeException('No web server is listening.');
        }

        unlink(\$pidFile);
    }

    public function getAddress(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            return false;
        }

        return file_get_contents(\$pidFile);
    }

    public function isRunning(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            return false;
        }

        \$address = file_get_contents(\$pidFile);
        \$pos = strrpos(\$address, ':');
        \$hostname = substr(\$address, 0, \$pos);
        \$port = substr(\$address, \$pos + 1);
        if (false !== \$fp = @fsockopen(\$hostname, \$port, \$errno, \$errstr, 1)) {
            fclose(\$fp);

            return true;
        }

        unlink(\$pidFile);

        return false;
    }

    /**
     * @return Process The process
     */
    private function createServerProcess(WebServerConfig \$config)
    {
        \$finder = new PhpExecutableFinder();
        if (false === \$binary = \$finder->find(false)) {
            throw new \\RuntimeException('Unable to find the PHP binary.');
        }

        \$xdebugArgs = ini_get('xdebug.profiler_enable_trigger') ? ['-dxdebug.profiler_enable_trigger=1'] : [];

        \$process = new Process(array_merge([\$binary], \$finder->findArguments(), \$xdebugArgs, ['-dvariables_order=EGPCS', '-S', \$config->getAddress(), \$config->getRouter()]));
        \$process->setWorkingDirectory(\$config->getDocumentRoot());
        \$process->setTimeout(null);

        if (\\in_array('APP_ENV', explode(',', getenv('SYMFONY_DOTENV_VARS')))) {
            \$process->setEnv(['APP_ENV' => false]);
            \$process->inheritEnvironmentVariables();
        }

        return \$process;
    }

    private function getDefaultPidFile()
    {
        return (\$this->pidFileDirectory ?? getcwd()).'/.web-server-pid';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/WebServer.php";
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

namespace Symfony\\Bundle\\WebServerBundle;

use Symfony\\Component\\Process\\Exception\\RuntimeException;
use Symfony\\Component\\Process\\PhpExecutableFinder;
use Symfony\\Component\\Process\\Process;

/**
 * Manages a local HTTP web server.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebServer
{
    const STARTED = 0;
    const STOPPED = 1;

    private \$pidFileDirectory;

    public function __construct(string \$pidFileDirectory = null)
    {
        \$this->pidFileDirectory = \$pidFileDirectory;
    }

    public function run(WebServerConfig \$config, \$disableOutput = true, callable \$callback = null)
    {
        if (\$this->isRunning()) {
            throw new \\RuntimeException(sprintf('A process is already listening on http://%s.', \$config->getAddress()));
        }

        \$process = \$this->createServerProcess(\$config);
        if (\$disableOutput) {
            \$process->disableOutput();
            \$callback = null;
        } else {
            try {
                \$process->setTty(true);
                \$callback = null;
            } catch (RuntimeException \$e) {
            }
        }

        \$process->run(\$callback);

        if (!\$process->isSuccessful()) {
            \$error = 'Server terminated unexpectedly.';
            if (\$process->isOutputDisabled()) {
                \$error .= ' Run the command again with -v option for more details.';
            }

            throw new \\RuntimeException(\$error);
        }
    }

    public function start(WebServerConfig \$config, \$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (\$this->isRunning(\$pidFile)) {
            throw new \\RuntimeException(sprintf('A process is already listening on http://%s.', \$config->getAddress()));
        }

        \$pid = pcntl_fork();

        if (\$pid < 0) {
            throw new \\RuntimeException('Unable to start the server process.');
        }

        if (\$pid > 0) {
            return self::STARTED;
        }

        if (posix_setsid() < 0) {
            throw new \\RuntimeException('Unable to set the child process as session leader.');
        }

        \$process = \$this->createServerProcess(\$config);
        \$process->disableOutput();
        \$process->start();

        if (!\$process->isRunning()) {
            throw new \\RuntimeException('Unable to start the server process.');
        }

        file_put_contents(\$pidFile, \$config->getAddress());

        // stop the web server when the lock file is removed
        while (\$process->isRunning()) {
            if (!file_exists(\$pidFile)) {
                \$process->stop();
            }

            sleep(1);
        }

        return self::STOPPED;
    }

    public function stop(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            throw new \\RuntimeException('No web server is listening.');
        }

        unlink(\$pidFile);
    }

    public function getAddress(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            return false;
        }

        return file_get_contents(\$pidFile);
    }

    public function isRunning(\$pidFile = null)
    {
        \$pidFile = \$pidFile ?: \$this->getDefaultPidFile();
        if (!file_exists(\$pidFile)) {
            return false;
        }

        \$address = file_get_contents(\$pidFile);
        \$pos = strrpos(\$address, ':');
        \$hostname = substr(\$address, 0, \$pos);
        \$port = substr(\$address, \$pos + 1);
        if (false !== \$fp = @fsockopen(\$hostname, \$port, \$errno, \$errstr, 1)) {
            fclose(\$fp);

            return true;
        }

        unlink(\$pidFile);

        return false;
    }

    /**
     * @return Process The process
     */
    private function createServerProcess(WebServerConfig \$config)
    {
        \$finder = new PhpExecutableFinder();
        if (false === \$binary = \$finder->find(false)) {
            throw new \\RuntimeException('Unable to find the PHP binary.');
        }

        \$xdebugArgs = ini_get('xdebug.profiler_enable_trigger') ? ['-dxdebug.profiler_enable_trigger=1'] : [];

        \$process = new Process(array_merge([\$binary], \$finder->findArguments(), \$xdebugArgs, ['-dvariables_order=EGPCS', '-S', \$config->getAddress(), \$config->getRouter()]));
        \$process->setWorkingDirectory(\$config->getDocumentRoot());
        \$process->setTimeout(null);

        if (\\in_array('APP_ENV', explode(',', getenv('SYMFONY_DOTENV_VARS')))) {
            \$process->setEnv(['APP_ENV' => false]);
            \$process->inheritEnvironmentVariables();
        }

        return \$process;
    }

    private function getDefaultPidFile()
    {
        return (\$this->pidFileDirectory ?? getcwd()).'/.web-server-pid';
    }
}
", "vendor/symfony/web-server-bundle/WebServer.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/WebServer.php");
    }
}
