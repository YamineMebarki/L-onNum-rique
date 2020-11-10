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

/* vendor/symfony/console/Tests/Output/NullOutputTest.php */
class __TwigTemplate_268695b89f10f8b6f7fd7d09e0c3ef8f42536c41c93e87ab12ee4652d1598cb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Output/NullOutputTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Output/NullOutputTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Output;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\Output;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class NullOutputTest extends TestCase
{
    public function testConstructor()
    {
        \$output = new NullOutput();

        ob_start();
        \$output->write('foo');
        \$buffer = ob_get_clean();

        \$this->assertSame('', \$buffer, '->write() does nothing (at least nothing is printed)');
        \$this->assertFalse(\$output->isDecorated(), '->isDecorated() returns false');
    }

    public function testVerbosity()
    {
        \$output = new NullOutput();
        \$this->assertSame(OutputInterface::VERBOSITY_QUIET, \$output->getVerbosity(), '->getVerbosity() returns VERBOSITY_QUIET for NullOutput by default');

        \$output->setVerbosity(OutputInterface::VERBOSITY_VERBOSE);
        \$this->assertSame(OutputInterface::VERBOSITY_QUIET, \$output->getVerbosity(), '->getVerbosity() always returns VERBOSITY_QUIET for NullOutput');
    }

    public function testSetFormatter()
    {
        \$output = new NullOutput();
        \$outputFormatter = new OutputFormatter();
        \$output->setFormatter(\$outputFormatter);
        \$this->assertNotSame(\$outputFormatter, \$output->getFormatter());
    }

    public function testSetVerbosity()
    {
        \$output = new NullOutput();
        \$output->setVerbosity(Output::VERBOSITY_NORMAL);
        \$this->assertEquals(Output::VERBOSITY_QUIET, \$output->getVerbosity());
    }

    public function testSetDecorated()
    {
        \$output = new NullOutput();
        \$output->setDecorated(true);
        \$this->assertFalse(\$output->isDecorated());
    }

    public function testIsQuiet()
    {
        \$output = new NullOutput();
        \$this->assertTrue(\$output->isQuiet());
    }

    public function testIsVerbose()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isVerbose());
    }

    public function testIsVeryVerbose()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isVeryVerbose());
    }

    public function testIsDebug()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isDebug());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Output/NullOutputTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Output;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\Output;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class NullOutputTest extends TestCase
{
    public function testConstructor()
    {
        \$output = new NullOutput();

        ob_start();
        \$output->write('foo');
        \$buffer = ob_get_clean();

        \$this->assertSame('', \$buffer, '->write() does nothing (at least nothing is printed)');
        \$this->assertFalse(\$output->isDecorated(), '->isDecorated() returns false');
    }

    public function testVerbosity()
    {
        \$output = new NullOutput();
        \$this->assertSame(OutputInterface::VERBOSITY_QUIET, \$output->getVerbosity(), '->getVerbosity() returns VERBOSITY_QUIET for NullOutput by default');

        \$output->setVerbosity(OutputInterface::VERBOSITY_VERBOSE);
        \$this->assertSame(OutputInterface::VERBOSITY_QUIET, \$output->getVerbosity(), '->getVerbosity() always returns VERBOSITY_QUIET for NullOutput');
    }

    public function testSetFormatter()
    {
        \$output = new NullOutput();
        \$outputFormatter = new OutputFormatter();
        \$output->setFormatter(\$outputFormatter);
        \$this->assertNotSame(\$outputFormatter, \$output->getFormatter());
    }

    public function testSetVerbosity()
    {
        \$output = new NullOutput();
        \$output->setVerbosity(Output::VERBOSITY_NORMAL);
        \$this->assertEquals(Output::VERBOSITY_QUIET, \$output->getVerbosity());
    }

    public function testSetDecorated()
    {
        \$output = new NullOutput();
        \$output->setDecorated(true);
        \$this->assertFalse(\$output->isDecorated());
    }

    public function testIsQuiet()
    {
        \$output = new NullOutput();
        \$this->assertTrue(\$output->isQuiet());
    }

    public function testIsVerbose()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isVerbose());
    }

    public function testIsVeryVerbose()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isVeryVerbose());
    }

    public function testIsDebug()
    {
        \$output = new NullOutput();
        \$this->assertFalse(\$output->isDebug());
    }
}
", "vendor/symfony/console/Tests/Output/NullOutputTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Output/NullOutputTest.php");
    }
}
