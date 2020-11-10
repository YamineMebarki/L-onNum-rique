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

/* vendor/symfony/process/Pipes/WindowsPipes.php */
class __TwigTemplate_a57617302e662013093b5396a6c09a10a5caa77731599f35623fec7c02d04f1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/WindowsPipes.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/WindowsPipes.php"));

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

namespace Symfony\\Component\\Process\\Pipes;

use Symfony\\Component\\Process\\Exception\\RuntimeException;
use Symfony\\Component\\Process\\Process;

/**
 * WindowsPipes implementation uses temporary files as handles.
 *
 * @see https://bugs.php.net/51800
 * @see https://bugs.php.net/65650
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class WindowsPipes extends AbstractPipes
{
    private \$files = [];
    private \$fileHandles = [];
    private \$lockHandles = [];
    private \$readBytes = [
        Process::STDOUT => 0,
        Process::STDERR => 0,
    ];
    private \$haveReadSupport;

    public function __construct(\$input, bool \$haveReadSupport)
    {
        \$this->haveReadSupport = \$haveReadSupport;

        if (\$this->haveReadSupport) {
            // Fix for PHP bug #51800: reading from STDOUT pipe hangs forever on Windows if the output is too big.
            // Workaround for this problem is to use temporary files instead of pipes on Windows platform.
            //
            // @see https://bugs.php.net/51800
            \$pipes = [
                Process::STDOUT => Process::OUT,
                Process::STDERR => Process::ERR,
            ];
            \$tmpDir = sys_get_temp_dir();
            \$lastError = 'unknown reason';
            set_error_handler(function (\$type, \$msg) use (&\$lastError) { \$lastError = \$msg; });
            for (\$i = 0;; ++\$i) {
                foreach (\$pipes as \$pipe => \$name) {
                    \$file = sprintf('%s\\\\sf_proc_%02X.%s', \$tmpDir, \$i, \$name);

                    if (!\$h = fopen(\$file.'.lock', 'w')) {
                        restore_error_handler();
                        throw new RuntimeException(sprintf('A temporary file could not be opened to write the process output: %s', \$lastError));
                    }
                    if (!flock(\$h, LOCK_EX | LOCK_NB)) {
                        continue 2;
                    }
                    if (isset(\$this->lockHandles[\$pipe])) {
                        flock(\$this->lockHandles[\$pipe], LOCK_UN);
                        fclose(\$this->lockHandles[\$pipe]);
                    }
                    \$this->lockHandles[\$pipe] = \$h;

                    if (!fclose(fopen(\$file, 'w')) || !\$h = fopen(\$file, 'r')) {
                        flock(\$this->lockHandles[\$pipe], LOCK_UN);
                        fclose(\$this->lockHandles[\$pipe]);
                        unset(\$this->lockHandles[\$pipe]);
                        continue 2;
                    }
                    \$this->fileHandles[\$pipe] = \$h;
                    \$this->files[\$pipe] = \$file;
                }
                break;
            }
            restore_error_handler();
        }

        parent::__construct(\$input);
    }

    public function __destruct()
    {
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescriptors()
    {
        if (!\$this->haveReadSupport) {
            \$nullstream = fopen('NUL', 'c');

            return [
                ['pipe', 'r'],
                \$nullstream,
                \$nullstream,
            ];
        }

        // We're not using pipe on Windows platform as it hangs (https://bugs.php.net/51800)
        // We're not using file handles as it can produce corrupted output https://bugs.php.net/65650
        // So we redirect output within the commandline and pass the nul device to the process
        return [
            ['pipe', 'r'],
            ['file', 'NUL', 'w'],
            ['file', 'NUL', 'w'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFiles()
    {
        return \$this->files;
    }

    /**
     * {@inheritdoc}
     */
    public function readAndWrite(\$blocking, \$close = false)
    {
        \$this->unblock();
        \$w = \$this->write();
        \$read = \$r = \$e = [];

        if (\$blocking) {
            if (\$w) {
                @stream_select(\$r, \$w, \$e, 0, Process::TIMEOUT_PRECISION * 1E6);
            } elseif (\$this->fileHandles) {
                usleep(Process::TIMEOUT_PRECISION * 1E6);
            }
        }
        foreach (\$this->fileHandles as \$type => \$fileHandle) {
            \$data = stream_get_contents(\$fileHandle, -1, \$this->readBytes[\$type]);

            if (isset(\$data[0])) {
                \$this->readBytes[\$type] += \\strlen(\$data);
                \$read[\$type] = \$data;
            }
            if (\$close) {
                ftruncate(\$fileHandle, 0);
                fclose(\$fileHandle);
                flock(\$this->lockHandles[\$type], LOCK_UN);
                fclose(\$this->lockHandles[\$type]);
                unset(\$this->fileHandles[\$type], \$this->lockHandles[\$type]);
            }
        }

        return \$read;
    }

    /**
     * {@inheritdoc}
     */
    public function haveReadSupport()
    {
        return \$this->haveReadSupport;
    }

    /**
     * {@inheritdoc}
     */
    public function areOpen()
    {
        return \$this->pipes && \$this->fileHandles;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        parent::close();
        foreach (\$this->fileHandles as \$type => \$handle) {
            ftruncate(\$handle, 0);
            fclose(\$handle);
            flock(\$this->lockHandles[\$type], LOCK_UN);
            fclose(\$this->lockHandles[\$type]);
        }
        \$this->fileHandles = \$this->lockHandles = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Pipes/WindowsPipes.php";
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

namespace Symfony\\Component\\Process\\Pipes;

use Symfony\\Component\\Process\\Exception\\RuntimeException;
use Symfony\\Component\\Process\\Process;

/**
 * WindowsPipes implementation uses temporary files as handles.
 *
 * @see https://bugs.php.net/51800
 * @see https://bugs.php.net/65650
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class WindowsPipes extends AbstractPipes
{
    private \$files = [];
    private \$fileHandles = [];
    private \$lockHandles = [];
    private \$readBytes = [
        Process::STDOUT => 0,
        Process::STDERR => 0,
    ];
    private \$haveReadSupport;

    public function __construct(\$input, bool \$haveReadSupport)
    {
        \$this->haveReadSupport = \$haveReadSupport;

        if (\$this->haveReadSupport) {
            // Fix for PHP bug #51800: reading from STDOUT pipe hangs forever on Windows if the output is too big.
            // Workaround for this problem is to use temporary files instead of pipes on Windows platform.
            //
            // @see https://bugs.php.net/51800
            \$pipes = [
                Process::STDOUT => Process::OUT,
                Process::STDERR => Process::ERR,
            ];
            \$tmpDir = sys_get_temp_dir();
            \$lastError = 'unknown reason';
            set_error_handler(function (\$type, \$msg) use (&\$lastError) { \$lastError = \$msg; });
            for (\$i = 0;; ++\$i) {
                foreach (\$pipes as \$pipe => \$name) {
                    \$file = sprintf('%s\\\\sf_proc_%02X.%s', \$tmpDir, \$i, \$name);

                    if (!\$h = fopen(\$file.'.lock', 'w')) {
                        restore_error_handler();
                        throw new RuntimeException(sprintf('A temporary file could not be opened to write the process output: %s', \$lastError));
                    }
                    if (!flock(\$h, LOCK_EX | LOCK_NB)) {
                        continue 2;
                    }
                    if (isset(\$this->lockHandles[\$pipe])) {
                        flock(\$this->lockHandles[\$pipe], LOCK_UN);
                        fclose(\$this->lockHandles[\$pipe]);
                    }
                    \$this->lockHandles[\$pipe] = \$h;

                    if (!fclose(fopen(\$file, 'w')) || !\$h = fopen(\$file, 'r')) {
                        flock(\$this->lockHandles[\$pipe], LOCK_UN);
                        fclose(\$this->lockHandles[\$pipe]);
                        unset(\$this->lockHandles[\$pipe]);
                        continue 2;
                    }
                    \$this->fileHandles[\$pipe] = \$h;
                    \$this->files[\$pipe] = \$file;
                }
                break;
            }
            restore_error_handler();
        }

        parent::__construct(\$input);
    }

    public function __destruct()
    {
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescriptors()
    {
        if (!\$this->haveReadSupport) {
            \$nullstream = fopen('NUL', 'c');

            return [
                ['pipe', 'r'],
                \$nullstream,
                \$nullstream,
            ];
        }

        // We're not using pipe on Windows platform as it hangs (https://bugs.php.net/51800)
        // We're not using file handles as it can produce corrupted output https://bugs.php.net/65650
        // So we redirect output within the commandline and pass the nul device to the process
        return [
            ['pipe', 'r'],
            ['file', 'NUL', 'w'],
            ['file', 'NUL', 'w'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFiles()
    {
        return \$this->files;
    }

    /**
     * {@inheritdoc}
     */
    public function readAndWrite(\$blocking, \$close = false)
    {
        \$this->unblock();
        \$w = \$this->write();
        \$read = \$r = \$e = [];

        if (\$blocking) {
            if (\$w) {
                @stream_select(\$r, \$w, \$e, 0, Process::TIMEOUT_PRECISION * 1E6);
            } elseif (\$this->fileHandles) {
                usleep(Process::TIMEOUT_PRECISION * 1E6);
            }
        }
        foreach (\$this->fileHandles as \$type => \$fileHandle) {
            \$data = stream_get_contents(\$fileHandle, -1, \$this->readBytes[\$type]);

            if (isset(\$data[0])) {
                \$this->readBytes[\$type] += \\strlen(\$data);
                \$read[\$type] = \$data;
            }
            if (\$close) {
                ftruncate(\$fileHandle, 0);
                fclose(\$fileHandle);
                flock(\$this->lockHandles[\$type], LOCK_UN);
                fclose(\$this->lockHandles[\$type]);
                unset(\$this->fileHandles[\$type], \$this->lockHandles[\$type]);
            }
        }

        return \$read;
    }

    /**
     * {@inheritdoc}
     */
    public function haveReadSupport()
    {
        return \$this->haveReadSupport;
    }

    /**
     * {@inheritdoc}
     */
    public function areOpen()
    {
        return \$this->pipes && \$this->fileHandles;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        parent::close();
        foreach (\$this->fileHandles as \$type => \$handle) {
            ftruncate(\$handle, 0);
            fclose(\$handle);
            flock(\$this->lockHandles[\$type], LOCK_UN);
            fclose(\$this->lockHandles[\$type]);
        }
        \$this->fileHandles = \$this->lockHandles = [];
    }
}
", "vendor/symfony/process/Pipes/WindowsPipes.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Pipes/WindowsPipes.php");
    }
}
