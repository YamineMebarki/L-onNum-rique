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

/* vendor/symfony/console/Tests/Style/SymfonyStyleTest.php */
class __TwigTemplate_a8234bb309b2e55855e1bf643d0db67fad9e85a4723c6e5f98154a865a8c4fc7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Style/SymfonyStyleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Style/SymfonyStyleTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Style;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Console\\Tester\\CommandTester;

class SymfonyStyleTest extends TestCase
{
    /** @var Command */
    protected \$command;
    /** @var CommandTester */
    protected \$tester;
    private \$colSize;

    protected function setUp(): void
    {
        \$this->colSize = getenv('COLUMNS');
        putenv('COLUMNS=121');
        \$this->command = new Command('sfstyle');
        \$this->tester = new CommandTester(\$this->command);
    }

    protected function tearDown(): void
    {
        putenv(\$this->colSize ? 'COLUMNS='.\$this->colSize : 'COLUMNS');
        \$this->command = null;
        \$this->tester = null;
    }

    /**
     * @dataProvider inputCommandToOutputFilesProvider
     */
    public function testOutputs(\$inputCommandFilepath, \$outputFilepath)
    {
        \$code = require \$inputCommandFilepath;
        \$this->command->setCode(\$code);
        \$this->tester->execute([], ['interactive' => false, 'decorated' => false]);
        \$this->assertStringEqualsFile(\$outputFilepath, \$this->tester->getDisplay(true));
    }

    /**
     * @dataProvider inputInteractiveCommandToOutputFilesProvider
     */
    public function testInteractiveOutputs(\$inputCommandFilepath, \$outputFilepath)
    {
        \$code = require \$inputCommandFilepath;
        \$this->command->setCode(\$code);
        \$this->tester->execute([], ['interactive' => true, 'decorated' => false]);
        \$this->assertStringEqualsFile(\$outputFilepath, \$this->tester->getDisplay(true));
    }

    public function inputInteractiveCommandToOutputFilesProvider()
    {
        \$baseDir = __DIR__.'/../Fixtures/Style/SymfonyStyle';

        return array_map(null, glob(\$baseDir.'/command/interactive_command_*.php'), glob(\$baseDir.'/output/interactive_output_*.txt'));
    }

    public function inputCommandToOutputFilesProvider()
    {
        \$baseDir = __DIR__.'/../Fixtures/Style/SymfonyStyle';

        return array_map(null, glob(\$baseDir.'/command/command_*.php'), glob(\$baseDir.'/output/output_*.txt'));
    }

    public function testGetErrorStyle()
    {
        \$input = \$this->getMockBuilder(InputInterface::class)->getMock();

        \$errorOutput = \$this->getMockBuilder(OutputInterface::class)->getMock();
        \$errorOutput
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());
        \$errorOutput
            ->expects(\$this->once())
            ->method('write');

        \$output = \$this->getMockBuilder(ConsoleOutputInterface::class)->getMock();
        \$output
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());
        \$output
            ->expects(\$this->once())
            ->method('getErrorOutput')
            ->willReturn(\$errorOutput);

        \$io = new SymfonyStyle(\$input, \$output);
        \$io->getErrorStyle()->write('');
    }

    public function testGetErrorStyleUsesTheCurrentOutputIfNoErrorOutputIsAvailable()
    {
        \$output = \$this->getMockBuilder(OutputInterface::class)->getMock();
        \$output
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());

        \$style = new SymfonyStyle(\$this->getMockBuilder(InputInterface::class)->getMock(), \$output);

        \$this->assertInstanceOf(SymfonyStyle::class, \$style->getErrorStyle());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Style/SymfonyStyleTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Style;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Console\\Tester\\CommandTester;

class SymfonyStyleTest extends TestCase
{
    /** @var Command */
    protected \$command;
    /** @var CommandTester */
    protected \$tester;
    private \$colSize;

    protected function setUp(): void
    {
        \$this->colSize = getenv('COLUMNS');
        putenv('COLUMNS=121');
        \$this->command = new Command('sfstyle');
        \$this->tester = new CommandTester(\$this->command);
    }

    protected function tearDown(): void
    {
        putenv(\$this->colSize ? 'COLUMNS='.\$this->colSize : 'COLUMNS');
        \$this->command = null;
        \$this->tester = null;
    }

    /**
     * @dataProvider inputCommandToOutputFilesProvider
     */
    public function testOutputs(\$inputCommandFilepath, \$outputFilepath)
    {
        \$code = require \$inputCommandFilepath;
        \$this->command->setCode(\$code);
        \$this->tester->execute([], ['interactive' => false, 'decorated' => false]);
        \$this->assertStringEqualsFile(\$outputFilepath, \$this->tester->getDisplay(true));
    }

    /**
     * @dataProvider inputInteractiveCommandToOutputFilesProvider
     */
    public function testInteractiveOutputs(\$inputCommandFilepath, \$outputFilepath)
    {
        \$code = require \$inputCommandFilepath;
        \$this->command->setCode(\$code);
        \$this->tester->execute([], ['interactive' => true, 'decorated' => false]);
        \$this->assertStringEqualsFile(\$outputFilepath, \$this->tester->getDisplay(true));
    }

    public function inputInteractiveCommandToOutputFilesProvider()
    {
        \$baseDir = __DIR__.'/../Fixtures/Style/SymfonyStyle';

        return array_map(null, glob(\$baseDir.'/command/interactive_command_*.php'), glob(\$baseDir.'/output/interactive_output_*.txt'));
    }

    public function inputCommandToOutputFilesProvider()
    {
        \$baseDir = __DIR__.'/../Fixtures/Style/SymfonyStyle';

        return array_map(null, glob(\$baseDir.'/command/command_*.php'), glob(\$baseDir.'/output/output_*.txt'));
    }

    public function testGetErrorStyle()
    {
        \$input = \$this->getMockBuilder(InputInterface::class)->getMock();

        \$errorOutput = \$this->getMockBuilder(OutputInterface::class)->getMock();
        \$errorOutput
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());
        \$errorOutput
            ->expects(\$this->once())
            ->method('write');

        \$output = \$this->getMockBuilder(ConsoleOutputInterface::class)->getMock();
        \$output
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());
        \$output
            ->expects(\$this->once())
            ->method('getErrorOutput')
            ->willReturn(\$errorOutput);

        \$io = new SymfonyStyle(\$input, \$output);
        \$io->getErrorStyle()->write('');
    }

    public function testGetErrorStyleUsesTheCurrentOutputIfNoErrorOutputIsAvailable()
    {
        \$output = \$this->getMockBuilder(OutputInterface::class)->getMock();
        \$output
            ->method('getFormatter')
            ->willReturn(new OutputFormatter());

        \$style = new SymfonyStyle(\$this->getMockBuilder(InputInterface::class)->getMock(), \$output);

        \$this->assertInstanceOf(SymfonyStyle::class, \$style->getErrorStyle());
    }
}
", "vendor/symfony/console/Tests/Style/SymfonyStyleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Style/SymfonyStyleTest.php");
    }
}
