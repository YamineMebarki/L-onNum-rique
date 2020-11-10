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

/* vendor/symfony/console/Output/StreamOutput.php */
class __TwigTemplate_98ab01fe787599db2c72a1e446b74d751db6fa2916b62515a7d75e5c5a85bff1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/StreamOutput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/StreamOutput.php"));

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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * StreamOutput writes the output to a given stream.
 *
 * Usage:
 *
 *     \$output = new StreamOutput(fopen('php://stdout', 'w'));
 *
 * As `StreamOutput` can use any stream, you can also use a file:
 *
 *     \$output = new StreamOutput(fopen('/path/to/output.log', 'a', false));
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamOutput extends Output
{
    private \$stream;

    /**
     * @param resource                      \$stream    A stream resource
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool|null                     \$decorated Whether to decorate messages (null for auto-guessing)
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     *
     * @throws InvalidArgumentException When first argument is not a real stream
     */
    public function __construct(\$stream, int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = null, OutputFormatterInterface \$formatter = null)
    {
        if (!\\is_resource(\$stream) || 'stream' !== get_resource_type(\$stream)) {
            throw new InvalidArgumentException('The StreamOutput class needs a stream as its first argument.');
        }

        \$this->stream = \$stream;

        if (null === \$decorated) {
            \$decorated = \$this->hasColorSupport();
        }

        parent::__construct(\$verbosity, \$decorated, \$formatter);
    }

    /**
     * Gets the stream attached to this StreamOutput instance.
     *
     * @return resource A stream resource
     */
    public function getStream()
    {
        return \$this->stream;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$message, \$newline)
    {
        if (\$newline) {
            \$message .= PHP_EOL;
        }

        if (false === @fwrite(\$this->stream, \$message)) {
            // should never happen
            throw new RuntimeException('Unable to write output.');
        }

        fflush(\$this->stream);
    }

    /**
     * Returns true if the stream supports colorization.
     *
     * Colorization is disabled if not supported by the stream:
     *
     * This is tricky on Windows, because Cygwin, Msys2 etc emulate pseudo
     * terminals via named pipes, so we can only check the environment.
     *
     * Reference: Composer\\XdebugHandler\\Process::supportsColor
     * https://github.com/composer/xdebug-handler
     *
     * @return bool true if the stream supports colorization, false otherwise
     */
    protected function hasColorSupport()
    {
        if ('Hyper' === getenv('TERM_PROGRAM')) {
            return true;
        }

        if (\\DIRECTORY_SEPARATOR === '\\\\') {
            return (\\function_exists('sapi_windows_vt100_support')
                && @sapi_windows_vt100_support(\$this->stream))
                || false !== getenv('ANSICON')
                || 'ON' === getenv('ConEmuANSI')
                || 'xterm' === getenv('TERM');
        }

        if (\\function_exists('stream_isatty')) {
            return @stream_isatty(\$this->stream);
        }

        if (\\function_exists('posix_isatty')) {
            return @posix_isatty(\$this->stream);
        }

        \$stat = @fstat(\$this->stream);
        // Check if formatted mode is S_IFCHR
        return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Output/StreamOutput.php";
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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * StreamOutput writes the output to a given stream.
 *
 * Usage:
 *
 *     \$output = new StreamOutput(fopen('php://stdout', 'w'));
 *
 * As `StreamOutput` can use any stream, you can also use a file:
 *
 *     \$output = new StreamOutput(fopen('/path/to/output.log', 'a', false));
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamOutput extends Output
{
    private \$stream;

    /**
     * @param resource                      \$stream    A stream resource
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool|null                     \$decorated Whether to decorate messages (null for auto-guessing)
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     *
     * @throws InvalidArgumentException When first argument is not a real stream
     */
    public function __construct(\$stream, int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = null, OutputFormatterInterface \$formatter = null)
    {
        if (!\\is_resource(\$stream) || 'stream' !== get_resource_type(\$stream)) {
            throw new InvalidArgumentException('The StreamOutput class needs a stream as its first argument.');
        }

        \$this->stream = \$stream;

        if (null === \$decorated) {
            \$decorated = \$this->hasColorSupport();
        }

        parent::__construct(\$verbosity, \$decorated, \$formatter);
    }

    /**
     * Gets the stream attached to this StreamOutput instance.
     *
     * @return resource A stream resource
     */
    public function getStream()
    {
        return \$this->stream;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$message, \$newline)
    {
        if (\$newline) {
            \$message .= PHP_EOL;
        }

        if (false === @fwrite(\$this->stream, \$message)) {
            // should never happen
            throw new RuntimeException('Unable to write output.');
        }

        fflush(\$this->stream);
    }

    /**
     * Returns true if the stream supports colorization.
     *
     * Colorization is disabled if not supported by the stream:
     *
     * This is tricky on Windows, because Cygwin, Msys2 etc emulate pseudo
     * terminals via named pipes, so we can only check the environment.
     *
     * Reference: Composer\\XdebugHandler\\Process::supportsColor
     * https://github.com/composer/xdebug-handler
     *
     * @return bool true if the stream supports colorization, false otherwise
     */
    protected function hasColorSupport()
    {
        if ('Hyper' === getenv('TERM_PROGRAM')) {
            return true;
        }

        if (\\DIRECTORY_SEPARATOR === '\\\\') {
            return (\\function_exists('sapi_windows_vt100_support')
                && @sapi_windows_vt100_support(\$this->stream))
                || false !== getenv('ANSICON')
                || 'ON' === getenv('ConEmuANSI')
                || 'xterm' === getenv('TERM');
        }

        if (\\function_exists('stream_isatty')) {
            return @stream_isatty(\$this->stream);
        }

        if (\\function_exists('posix_isatty')) {
            return @posix_isatty(\$this->stream);
        }

        \$stat = @fstat(\$this->stream);
        // Check if formatted mode is S_IFCHR
        return \$stat ? 0020000 === (\$stat['mode'] & 0170000) : false;
    }
}
", "vendor/symfony/console/Output/StreamOutput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Output/StreamOutput.php");
    }
}
