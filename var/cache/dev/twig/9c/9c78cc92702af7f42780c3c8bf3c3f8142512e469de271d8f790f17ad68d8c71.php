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

/* vendor/symfony/process/Pipes/UnixPipes.php */
class __TwigTemplate_c964d10c962c0119df9afe10be4fda5866cbf2fdc914bfa3e636e7334edd823b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/UnixPipes.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/UnixPipes.php"));

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

use Symfony\\Component\\Process\\Process;

/**
 * UnixPipes implementation uses unix pipes as handles.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class UnixPipes extends AbstractPipes
{
    private \$ttyMode;
    private \$ptyMode;
    private \$haveReadSupport;

    public function __construct(?bool \$ttyMode, bool \$ptyMode, \$input, bool \$haveReadSupport)
    {
        \$this->ttyMode = \$ttyMode;
        \$this->ptyMode = \$ptyMode;
        \$this->haveReadSupport = \$haveReadSupport;

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
            \$nullstream = fopen('/dev/null', 'c');

            return [
                ['pipe', 'r'],
                \$nullstream,
                \$nullstream,
            ];
        }

        if (\$this->ttyMode) {
            return [
                ['file', '/dev/tty', 'r'],
                ['file', '/dev/tty', 'w'],
                ['file', '/dev/tty', 'w'],
            ];
        }

        if (\$this->ptyMode && Process::isPtySupported()) {
            return [
                ['pty'],
                ['pty'],
                ['pty'],
            ];
        }

        return [
            ['pipe', 'r'],
            ['pipe', 'w'], // stdout
            ['pipe', 'w'], // stderr
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFiles()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function readAndWrite(\$blocking, \$close = false)
    {
        \$this->unblock();
        \$w = \$this->write();

        \$read = \$e = [];
        \$r = \$this->pipes;
        unset(\$r[0]);

        // let's have a look if something changed in streams
        set_error_handler([\$this, 'handleError']);
        if ((\$r || \$w) && false === stream_select(\$r, \$w, \$e, 0, \$blocking ? Process::TIMEOUT_PRECISION * 1E6 : 0)) {
            restore_error_handler();
            // if a system call has been interrupted, forget about it, let's try again
            // otherwise, an error occurred, let's reset pipes
            if (!\$this->hasSystemCallBeenInterrupted()) {
                \$this->pipes = [];
            }

            return \$read;
        }
        restore_error_handler();

        foreach (\$r as \$pipe) {
            // prior PHP 5.4 the array passed to stream_select is modified and
            // lose key association, we have to find back the key
            \$read[\$type = array_search(\$pipe, \$this->pipes, true)] = '';

            do {
                \$data = fread(\$pipe, self::CHUNK_SIZE);
                \$read[\$type] .= \$data;
            } while (isset(\$data[0]) && (\$close || isset(\$data[self::CHUNK_SIZE - 1])));

            if (!isset(\$read[\$type][0])) {
                unset(\$read[\$type]);
            }

            if (\$close && feof(\$pipe)) {
                fclose(\$pipe);
                unset(\$this->pipes[\$type]);
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
        return (bool) \$this->pipes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Pipes/UnixPipes.php";
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

use Symfony\\Component\\Process\\Process;

/**
 * UnixPipes implementation uses unix pipes as handles.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class UnixPipes extends AbstractPipes
{
    private \$ttyMode;
    private \$ptyMode;
    private \$haveReadSupport;

    public function __construct(?bool \$ttyMode, bool \$ptyMode, \$input, bool \$haveReadSupport)
    {
        \$this->ttyMode = \$ttyMode;
        \$this->ptyMode = \$ptyMode;
        \$this->haveReadSupport = \$haveReadSupport;

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
            \$nullstream = fopen('/dev/null', 'c');

            return [
                ['pipe', 'r'],
                \$nullstream,
                \$nullstream,
            ];
        }

        if (\$this->ttyMode) {
            return [
                ['file', '/dev/tty', 'r'],
                ['file', '/dev/tty', 'w'],
                ['file', '/dev/tty', 'w'],
            ];
        }

        if (\$this->ptyMode && Process::isPtySupported()) {
            return [
                ['pty'],
                ['pty'],
                ['pty'],
            ];
        }

        return [
            ['pipe', 'r'],
            ['pipe', 'w'], // stdout
            ['pipe', 'w'], // stderr
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFiles()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function readAndWrite(\$blocking, \$close = false)
    {
        \$this->unblock();
        \$w = \$this->write();

        \$read = \$e = [];
        \$r = \$this->pipes;
        unset(\$r[0]);

        // let's have a look if something changed in streams
        set_error_handler([\$this, 'handleError']);
        if ((\$r || \$w) && false === stream_select(\$r, \$w, \$e, 0, \$blocking ? Process::TIMEOUT_PRECISION * 1E6 : 0)) {
            restore_error_handler();
            // if a system call has been interrupted, forget about it, let's try again
            // otherwise, an error occurred, let's reset pipes
            if (!\$this->hasSystemCallBeenInterrupted()) {
                \$this->pipes = [];
            }

            return \$read;
        }
        restore_error_handler();

        foreach (\$r as \$pipe) {
            // prior PHP 5.4 the array passed to stream_select is modified and
            // lose key association, we have to find back the key
            \$read[\$type = array_search(\$pipe, \$this->pipes, true)] = '';

            do {
                \$data = fread(\$pipe, self::CHUNK_SIZE);
                \$read[\$type] .= \$data;
            } while (isset(\$data[0]) && (\$close || isset(\$data[self::CHUNK_SIZE - 1])));

            if (!isset(\$read[\$type][0])) {
                unset(\$read[\$type]);
            }

            if (\$close && feof(\$pipe)) {
                fclose(\$pipe);
                unset(\$this->pipes[\$type]);
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
        return (bool) \$this->pipes;
    }
}
", "vendor/symfony/process/Pipes/UnixPipes.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Pipes/UnixPipes.php");
    }
}
