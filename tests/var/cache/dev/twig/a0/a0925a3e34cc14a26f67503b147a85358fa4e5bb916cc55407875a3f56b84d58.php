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

/* vendor/symfony/console/Output/NullOutput.php */
class __TwigTemplate_9d7700fd0b8d81427a6401c7ea8f237c4b110cf97933a23332072e33f998ff77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/NullOutput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Output/NullOutput.php"));

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
 * NullOutput suppresses all output.
 *
 *     \$output = new NullOutput();
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class NullOutput implements OutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        // to comply with the interface we must return a OutputFormatterInterface
        return new OutputFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return self::VERBOSITY_QUIET;
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$options = self::OUTPUT_NORMAL)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$options = self::OUTPUT_NORMAL)
    {
        // do nothing
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Output/NullOutput.php";
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
 * NullOutput suppresses all output.
 *
 *     \$output = new NullOutput();
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class NullOutput implements OutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        // to comply with the interface we must return a OutputFormatterInterface
        return new OutputFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(\$decorated)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(\$level)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return self::VERBOSITY_QUIET;
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, \$options = self::OUTPUT_NORMAL)
    {
        // do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, \$newline = false, \$options = self::OUTPUT_NORMAL)
    {
        // do nothing
    }
}
", "vendor/symfony/console/Output/NullOutput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Output/NullOutput.php");
    }
}
