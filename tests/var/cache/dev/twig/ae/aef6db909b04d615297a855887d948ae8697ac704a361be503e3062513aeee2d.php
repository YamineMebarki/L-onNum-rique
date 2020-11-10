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

/* vendor/symfony/console/Output/ConsoleOutput.php */
class __TwigTemplate_1dd6a6c647187aa59098da0c655170a435f4e255488faf9220c27d818c44a599 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/ConsoleOutput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/ConsoleOutput.php"));

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

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * ConsoleOutput is the default class for all CLI output. It uses STDOUT and STDERR.
 *
 * This class is a convenient wrapper around `StreamOutput` for both STDOUT and STDERR.
 *
 *     \$output = new ConsoleOutput();
 *
 * This is equivalent to:
 *
 *     \$output = new StreamOutput(fopen('php://stdout', 'w'));
 *     \$stdErr = new StreamOutput(fopen('php://stderr', 'w'));
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConsoleOutput extends StreamOutput implements ConsoleOutputInterface
{
    private \$stderr;
    private \$consoleSectionOutputs = [];

    /**
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool|null                     \$decorated Whether to decorate messages (null for auto-guessing)
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     */
    public function __construct(int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = null, OutputFormatterInterface \$formatter = null)
    {
        parent::__construct(\$this->openOutputStream(), \$verbosity, \$decorated, \$formatter);

        \$actualDecorated = \$this->isDecorated();
        \$this->stderr = new StreamOutput(\$this->openErrorStream(), \$verbosity, \$decorated, \$this->getFormatter());

        if (null === \$decorated) {
            \$this->setDecorated(\$actualDecorated && \$this->stderr->isDecorated());
        }
    }

    /**
     * Creates a new output section.
     */
    public function section(): ConsoleSectionOutput
    {
        return new ConsoleSectionOutput(\$this->getStream(), \$this->consoleSectionOutputs, \$this->getVerbosity(), \$this->isDecorated(), \$this->getFormatter());
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        parent::setDecorated(\$decorated);
        \$this->stderr->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        parent::setFormatter(\$formatter);
        \$this->stderr->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        parent::setVerbosity(\$level);
        \$this->stderr->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorOutput()
    {
        return \$this->stderr;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorOutput(OutputInterface \$error)
    {
        \$this->stderr = \$error;
    }

    /**
     * Returns true if current environment supports writing console output to
     * STDOUT.
     *
     * @return bool
     */
    protected function hasStdoutSupport()
    {
        return false === \$this->isRunningOS400();
    }

    /**
     * Returns true if current environment supports writing console output to
     * STDERR.
     *
     * @return bool
     */
    protected function hasStderrSupport()
    {
        return false === \$this->isRunningOS400();
    }

    /**
     * Checks if current executing environment is IBM iSeries (OS400), which
     * doesn't properly convert character-encodings between ASCII to EBCDIC.
     *
     * @return bool
     */
    private function isRunningOS400()
    {
        \$checks = [
            \\function_exists('php_uname') ? php_uname('s') : '',
            getenv('OSTYPE'),
            PHP_OS,
        ];

        return false !== stripos(implode(';', \$checks), 'OS400');
    }

    /**
     * @return resource
     */
    private function openOutputStream()
    {
        if (!\$this->hasStdoutSupport()) {
            return fopen('php://output', 'w');
        }

        return @fopen('php://stdout', 'w') ?: fopen('php://output', 'w');
    }

    /**
     * @return resource
     */
    private function openErrorStream()
    {
        return fopen(\$this->hasStderrSupport() ? 'php://stderr' : 'php://output', 'w');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Output/ConsoleOutput.php";
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

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * ConsoleOutput is the default class for all CLI output. It uses STDOUT and STDERR.
 *
 * This class is a convenient wrapper around `StreamOutput` for both STDOUT and STDERR.
 *
 *     \$output = new ConsoleOutput();
 *
 * This is equivalent to:
 *
 *     \$output = new StreamOutput(fopen('php://stdout', 'w'));
 *     \$stdErr = new StreamOutput(fopen('php://stderr', 'w'));
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConsoleOutput extends StreamOutput implements ConsoleOutputInterface
{
    private \$stderr;
    private \$consoleSectionOutputs = [];

    /**
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool|null                     \$decorated Whether to decorate messages (null for auto-guessing)
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     */
    public function __construct(int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = null, OutputFormatterInterface \$formatter = null)
    {
        parent::__construct(\$this->openOutputStream(), \$verbosity, \$decorated, \$formatter);

        \$actualDecorated = \$this->isDecorated();
        \$this->stderr = new StreamOutput(\$this->openErrorStream(), \$verbosity, \$decorated, \$this->getFormatter());

        if (null === \$decorated) {
            \$this->setDecorated(\$actualDecorated && \$this->stderr->isDecorated());
        }
    }

    /**
     * Creates a new output section.
     */
    public function section(): ConsoleSectionOutput
    {
        return new ConsoleSectionOutput(\$this->getStream(), \$this->consoleSectionOutputs, \$this->getVerbosity(), \$this->isDecorated(), \$this->getFormatter());
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        parent::setDecorated(\$decorated);
        \$this->stderr->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        parent::setFormatter(\$formatter);
        \$this->stderr->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        parent::setVerbosity(\$level);
        \$this->stderr->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorOutput()
    {
        return \$this->stderr;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorOutput(OutputInterface \$error)
    {
        \$this->stderr = \$error;
    }

    /**
     * Returns true if current environment supports writing console output to
     * STDOUT.
     *
     * @return bool
     */
    protected function hasStdoutSupport()
    {
        return false === \$this->isRunningOS400();
    }

    /**
     * Returns true if current environment supports writing console output to
     * STDERR.
     *
     * @return bool
     */
    protected function hasStderrSupport()
    {
        return false === \$this->isRunningOS400();
    }

    /**
     * Checks if current executing environment is IBM iSeries (OS400), which
     * doesn't properly convert character-encodings between ASCII to EBCDIC.
     *
     * @return bool
     */
    private function isRunningOS400()
    {
        \$checks = [
            \\function_exists('php_uname') ? php_uname('s') : '',
            getenv('OSTYPE'),
            PHP_OS,
        ];

        return false !== stripos(implode(';', \$checks), 'OS400');
    }

    /**
     * @return resource
     */
    private function openOutputStream()
    {
        if (!\$this->hasStdoutSupport()) {
            return fopen('php://output', 'w');
        }

        return @fopen('php://stdout', 'w') ?: fopen('php://output', 'w');
    }

    /**
     * @return resource
     */
    private function openErrorStream()
    {
        return fopen(\$this->hasStderrSupport() ? 'php://stderr' : 'php://output', 'w');
    }
}
", "vendor/symfony/console/Output/ConsoleOutput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Output/ConsoleOutput.php");
    }
}
