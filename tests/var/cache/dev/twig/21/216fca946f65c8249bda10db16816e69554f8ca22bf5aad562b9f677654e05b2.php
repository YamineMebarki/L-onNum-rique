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

/* vendor/symfony/console/Output/Output.php */
class __TwigTemplate_189a1f3b959febe43e95e491921fb1f79ab440050045d8884826d6b39ddfd568 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/Output.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/Output.php"));

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

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * Base class for output classes.
 *
 * There are five levels of verbosity:
 *
 *  * normal: no option passed (normal output)
 *  * verbose: -v (more output)
 *  * very verbose: -vv (highly extended output)
 *  * debug: -vvv (all debug output)
 *  * quiet: -q (no output)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Output implements OutputInterface
{
    private \$verbosity;
    private \$formatter;

    /**
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool                          \$decorated Whether to decorate messages
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     */
    public function __construct(?int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = false, OutputFormatterInterface \$formatter = null)
    {
        \$this->verbosity = null === \$verbosity ? self::VERBOSITY_NORMAL : \$verbosity;
        \$this->formatter = \$formatter ?: new OutputFormatter();
        \$this->formatter->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->formatter->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->formatter->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        \$this->verbosity = (int) \$level;
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return self::VERBOSITY_QUIET === \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return self::VERBOSITY_VERBOSE <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return self::VERBOSITY_VERY_VERBOSE <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return self::VERBOSITY_DEBUG <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$options = self::OUTPUT_NORMAL)
    {
        \$this->write(\$messages, true, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$options = self::OUTPUT_NORMAL)
    {
        if (!is_iterable(\$messages)) {
            \$messages = [\$messages];
        }

        \$types = self::OUTPUT_NORMAL | self::OUTPUT_RAW | self::OUTPUT_PLAIN;
        \$type = \$types & \$options ?: self::OUTPUT_NORMAL;

        \$verbosities = self::VERBOSITY_QUIET | self::VERBOSITY_NORMAL | self::VERBOSITY_VERBOSE | self::VERBOSITY_VERY_VERBOSE | self::VERBOSITY_DEBUG;
        \$verbosity = \$verbosities & \$options ?: self::VERBOSITY_NORMAL;

        if (\$verbosity > \$this->getVerbosity()) {
            return;
        }

        foreach (\$messages as \$message) {
            switch (\$type) {
                case OutputInterface::OUTPUT_NORMAL:
                    \$message = \$this->formatter->format(\$message);
                    break;
                case OutputInterface::OUTPUT_RAW:
                    break;
                case OutputInterface::OUTPUT_PLAIN:
                    \$message = strip_tags(\$this->formatter->format(\$message));
                    break;
            }

            \$this->doWrite(\$message, \$newline);
        }
    }

    /**
     * Writes a message to the output.
     *
     * @param string \$message A message to write to the output
     * @param bool   \$newline Whether to add a newline or not
     */
    abstract protected function doWrite(\$message, \$newline);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Output/Output.php";
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

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * Base class for output classes.
 *
 * There are five levels of verbosity:
 *
 *  * normal: no option passed (normal output)
 *  * verbose: -v (more output)
 *  * very verbose: -vv (highly extended output)
 *  * debug: -vvv (all debug output)
 *  * quiet: -q (no output)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Output implements OutputInterface
{
    private \$verbosity;
    private \$formatter;

    /**
     * @param int                           \$verbosity The verbosity level (one of the VERBOSITY constants in OutputInterface)
     * @param bool                          \$decorated Whether to decorate messages
     * @param OutputFormatterInterface|null \$formatter Output formatter instance (null to use default OutputFormatter)
     */
    public function __construct(?int \$verbosity = self::VERBOSITY_NORMAL, bool \$decorated = false, OutputFormatterInterface \$formatter = null)
    {
        \$this->verbosity = null === \$verbosity ? self::VERBOSITY_NORMAL : \$verbosity;
        \$this->formatter = \$formatter ?: new OutputFormatter();
        \$this->formatter->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->formatter = \$formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->formatter->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->formatter->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        \$this->verbosity = (int) \$level;
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return self::VERBOSITY_QUIET === \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return self::VERBOSITY_VERBOSE <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return self::VERBOSITY_VERY_VERBOSE <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return self::VERBOSITY_DEBUG <= \$this->verbosity;
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$options = self::OUTPUT_NORMAL)
    {
        \$this->write(\$messages, true, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$options = self::OUTPUT_NORMAL)
    {
        if (!is_iterable(\$messages)) {
            \$messages = [\$messages];
        }

        \$types = self::OUTPUT_NORMAL | self::OUTPUT_RAW | self::OUTPUT_PLAIN;
        \$type = \$types & \$options ?: self::OUTPUT_NORMAL;

        \$verbosities = self::VERBOSITY_QUIET | self::VERBOSITY_NORMAL | self::VERBOSITY_VERBOSE | self::VERBOSITY_VERY_VERBOSE | self::VERBOSITY_DEBUG;
        \$verbosity = \$verbosities & \$options ?: self::VERBOSITY_NORMAL;

        if (\$verbosity > \$this->getVerbosity()) {
            return;
        }

        foreach (\$messages as \$message) {
            switch (\$type) {
                case OutputInterface::OUTPUT_NORMAL:
                    \$message = \$this->formatter->format(\$message);
                    break;
                case OutputInterface::OUTPUT_RAW:
                    break;
                case OutputInterface::OUTPUT_PLAIN:
                    \$message = strip_tags(\$this->formatter->format(\$message));
                    break;
            }

            \$this->doWrite(\$message, \$newline);
        }
    }

    /**
     * Writes a message to the output.
     *
     * @param string \$message A message to write to the output
     * @param bool   \$newline Whether to add a newline or not
     */
    abstract protected function doWrite(\$message, \$newline);
}
", "vendor/symfony/console/Output/Output.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Output/Output.php");
    }
}
