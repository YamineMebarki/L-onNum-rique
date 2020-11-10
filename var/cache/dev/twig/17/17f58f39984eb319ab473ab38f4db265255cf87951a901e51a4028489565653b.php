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

/* vendor/symfony/console/Style/OutputStyle.php */
class __TwigTemplate_2b07ab57c42dd91e761b3335ed2ac7e83632e3be22b52624f808630651e15650 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Style/OutputStyle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Style/OutputStyle.php"));

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

namespace Symfony\\Component\\Console\\Style;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Decorates output to add console style guide helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
abstract class OutputStyle implements OutputInterface, StyleInterface
{
    private \$output;

    public function __construct(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * {@inheritdoc}
     */
    public function newLine(\$count = 1)
    {
        \$this->output->write(str_repeat(PHP_EOL, \$count));
    }

    /**
     * @param int \$max
     *
     * @return ProgressBar
     */
    public function createProgressBar(\$max = 0)
    {
        return new ProgressBar(\$this->output, \$max);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->write(\$messages, \$newline, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->writeln(\$messages, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        \$this->output->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->output->getVerbosity();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->output->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->output->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->output->getFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return \$this->output->isQuiet();
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return \$this->output->isVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return \$this->output->isVeryVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return \$this->output->isDebug();
    }

    protected function getErrorOutput()
    {
        if (!\$this->output instanceof ConsoleOutputInterface) {
            return \$this->output;
        }

        return \$this->output->getErrorOutput();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Style/OutputStyle.php";
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

namespace Symfony\\Component\\Console\\Style;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Decorates output to add console style guide helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
abstract class OutputStyle implements OutputInterface, StyleInterface
{
    private \$output;

    public function __construct(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * {@inheritdoc}
     */
    public function newLine(\$count = 1)
    {
        \$this->output->write(str_repeat(PHP_EOL, \$count));
    }

    /**
     * @param int \$max
     *
     * @return ProgressBar
     */
    public function createProgressBar(\$max = 0)
    {
        return new ProgressBar(\$this->output, \$max);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->write(\$messages, \$newline, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->writeln(\$messages, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        \$this->output->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->output->getVerbosity();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        \$this->output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->output->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->output->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->output->getFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return \$this->output->isQuiet();
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return \$this->output->isVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return \$this->output->isVeryVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return \$this->output->isDebug();
    }

    protected function getErrorOutput()
    {
        if (!\$this->output instanceof ConsoleOutputInterface) {
            return \$this->output;
        }

        return \$this->output->getErrorOutput();
    }
}
", "vendor/symfony/console/Style/OutputStyle.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Style/OutputStyle.php");
    }
}
