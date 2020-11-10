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

/* vendor/symfony/console/Tester/TesterTrait.php */
class __TwigTemplate_074cb962a9a650e9d2a21ee867052a41d5ae1d202c8113b038295f8517b69b0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tester/TesterTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tester/TesterTrait.php"));

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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;

/**
 * @author Amrouche Hamza <hamza.simperfit@gmail.com>
 */
trait TesterTrait
{
    /** @var StreamOutput */
    private \$output;
    private \$inputs = [];
    private \$captureStreamsIndependently = false;

    /**
     * Gets the display returned by the last execution of the command or application.
     *
     * @param bool \$normalize Whether to normalize end of lines to \\n or not
     *
     * @return string The display
     */
    public function getDisplay(\$normalize = false)
    {
        if (null === \$this->output) {
            throw new \\RuntimeException('Output not initialized, did you execute the command before requesting the display?');
        }

        rewind(\$this->output->getStream());

        \$display = stream_get_contents(\$this->output->getStream());

        if (\$normalize) {
            \$display = str_replace(PHP_EOL, \"\\n\", \$display);
        }

        return \$display;
    }

    /**
     * Gets the output written to STDERR by the application.
     *
     * @param bool \$normalize Whether to normalize end of lines to \\n or not
     *
     * @return string
     */
    public function getErrorOutput(\$normalize = false)
    {
        if (!\$this->captureStreamsIndependently) {
            throw new \\LogicException('The error output is not available when the tester is run without \"capture_stderr_separately\" option set.');
        }

        rewind(\$this->output->getErrorOutput()->getStream());

        \$display = stream_get_contents(\$this->output->getErrorOutput()->getStream());

        if (\$normalize) {
            \$display = str_replace(PHP_EOL, \"\\n\", \$display);
        }

        return \$display;
    }

    /**
     * Gets the input instance used by the last execution of the command or application.
     *
     * @return InputInterface The current input instance
     */
    public function getInput()
    {
        return \$this->input;
    }

    /**
     * Gets the output instance used by the last execution of the command or application.
     *
     * @return OutputInterface The current output instance
     */
    public function getOutput()
    {
        return \$this->output;
    }

    /**
     * Gets the status code returned by the last execution of the command or application.
     *
     * @return int The status code
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * Sets the user inputs.
     *
     * @param array \$inputs An array of strings representing each input
     *                      passed to the command input stream
     *
     * @return \$this
     */
    public function setInputs(array \$inputs)
    {
        \$this->inputs = \$inputs;

        return \$this;
    }

    /**
     * Initializes the output property.
     *
     * Available options:
     *
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     */
    private function initOutput(array \$options)
    {
        \$this->captureStreamsIndependently = \\array_key_exists('capture_stderr_separately', \$options) && \$options['capture_stderr_separately'];
        if (!\$this->captureStreamsIndependently) {
            \$this->output = new StreamOutput(fopen('php://memory', 'w', false));
            if (isset(\$options['decorated'])) {
                \$this->output->setDecorated(\$options['decorated']);
            }
            if (isset(\$options['verbosity'])) {
                \$this->output->setVerbosity(\$options['verbosity']);
            }
        } else {
            \$this->output = new ConsoleOutput(
                isset(\$options['verbosity']) ? \$options['verbosity'] : ConsoleOutput::VERBOSITY_NORMAL,
                isset(\$options['decorated']) ? \$options['decorated'] : null
            );

            \$errorOutput = new StreamOutput(fopen('php://memory', 'w', false));
            \$errorOutput->setFormatter(\$this->output->getFormatter());
            \$errorOutput->setVerbosity(\$this->output->getVerbosity());
            \$errorOutput->setDecorated(\$this->output->isDecorated());

            \$reflectedOutput = new \\ReflectionObject(\$this->output);
            \$strErrProperty = \$reflectedOutput->getProperty('stderr');
            \$strErrProperty->setAccessible(true);
            \$strErrProperty->setValue(\$this->output, \$errorOutput);

            \$reflectedParent = \$reflectedOutput->getParentClass();
            \$streamProperty = \$reflectedParent->getProperty('stream');
            \$streamProperty->setAccessible(true);
            \$streamProperty->setValue(\$this->output, fopen('php://memory', 'w', false));
        }
    }

    private static function createStream(array \$inputs)
    {
        \$stream = fopen('php://memory', 'r+', false);

        foreach (\$inputs as \$input) {
            fwrite(\$stream, \$input.PHP_EOL);
        }

        rewind(\$stream);

        return \$stream;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tester/TesterTrait.php";
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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;

/**
 * @author Amrouche Hamza <hamza.simperfit@gmail.com>
 */
trait TesterTrait
{
    /** @var StreamOutput */
    private \$output;
    private \$inputs = [];
    private \$captureStreamsIndependently = false;

    /**
     * Gets the display returned by the last execution of the command or application.
     *
     * @param bool \$normalize Whether to normalize end of lines to \\n or not
     *
     * @return string The display
     */
    public function getDisplay(\$normalize = false)
    {
        if (null === \$this->output) {
            throw new \\RuntimeException('Output not initialized, did you execute the command before requesting the display?');
        }

        rewind(\$this->output->getStream());

        \$display = stream_get_contents(\$this->output->getStream());

        if (\$normalize) {
            \$display = str_replace(PHP_EOL, \"\\n\", \$display);
        }

        return \$display;
    }

    /**
     * Gets the output written to STDERR by the application.
     *
     * @param bool \$normalize Whether to normalize end of lines to \\n or not
     *
     * @return string
     */
    public function getErrorOutput(\$normalize = false)
    {
        if (!\$this->captureStreamsIndependently) {
            throw new \\LogicException('The error output is not available when the tester is run without \"capture_stderr_separately\" option set.');
        }

        rewind(\$this->output->getErrorOutput()->getStream());

        \$display = stream_get_contents(\$this->output->getErrorOutput()->getStream());

        if (\$normalize) {
            \$display = str_replace(PHP_EOL, \"\\n\", \$display);
        }

        return \$display;
    }

    /**
     * Gets the input instance used by the last execution of the command or application.
     *
     * @return InputInterface The current input instance
     */
    public function getInput()
    {
        return \$this->input;
    }

    /**
     * Gets the output instance used by the last execution of the command or application.
     *
     * @return OutputInterface The current output instance
     */
    public function getOutput()
    {
        return \$this->output;
    }

    /**
     * Gets the status code returned by the last execution of the command or application.
     *
     * @return int The status code
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * Sets the user inputs.
     *
     * @param array \$inputs An array of strings representing each input
     *                      passed to the command input stream
     *
     * @return \$this
     */
    public function setInputs(array \$inputs)
    {
        \$this->inputs = \$inputs;

        return \$this;
    }

    /**
     * Initializes the output property.
     *
     * Available options:
     *
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     */
    private function initOutput(array \$options)
    {
        \$this->captureStreamsIndependently = \\array_key_exists('capture_stderr_separately', \$options) && \$options['capture_stderr_separately'];
        if (!\$this->captureStreamsIndependently) {
            \$this->output = new StreamOutput(fopen('php://memory', 'w', false));
            if (isset(\$options['decorated'])) {
                \$this->output->setDecorated(\$options['decorated']);
            }
            if (isset(\$options['verbosity'])) {
                \$this->output->setVerbosity(\$options['verbosity']);
            }
        } else {
            \$this->output = new ConsoleOutput(
                isset(\$options['verbosity']) ? \$options['verbosity'] : ConsoleOutput::VERBOSITY_NORMAL,
                isset(\$options['decorated']) ? \$options['decorated'] : null
            );

            \$errorOutput = new StreamOutput(fopen('php://memory', 'w', false));
            \$errorOutput->setFormatter(\$this->output->getFormatter());
            \$errorOutput->setVerbosity(\$this->output->getVerbosity());
            \$errorOutput->setDecorated(\$this->output->isDecorated());

            \$reflectedOutput = new \\ReflectionObject(\$this->output);
            \$strErrProperty = \$reflectedOutput->getProperty('stderr');
            \$strErrProperty->setAccessible(true);
            \$strErrProperty->setValue(\$this->output, \$errorOutput);

            \$reflectedParent = \$reflectedOutput->getParentClass();
            \$streamProperty = \$reflectedParent->getProperty('stream');
            \$streamProperty->setAccessible(true);
            \$streamProperty->setValue(\$this->output, fopen('php://memory', 'w', false));
        }
    }

    private static function createStream(array \$inputs)
    {
        \$stream = fopen('php://memory', 'r+', false);

        foreach (\$inputs as \$input) {
            fwrite(\$stream, \$input.PHP_EOL);
        }

        rewind(\$stream);

        return \$stream;
    }
}
", "vendor/symfony/console/Tester/TesterTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tester/TesterTrait.php");
    }
}
