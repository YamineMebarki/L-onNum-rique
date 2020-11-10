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

/* vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php */
class __TwigTemplate_2a7aec426f7fafb0b2dd2267f7d7c4f0c797f3053b801bdd707e0d602f8bd51d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\ConsoleCommandProcessor;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Input\\InputInterface;

class ConsoleCommandProcessorTest extends TestCase
{
    private const TEST_ARGUMENTS = ['test' => 'argument'];
    private const TEST_OPTIONS = ['test' => 'option'];
    private const TEST_NAME = 'some:test';

    public function testProcessor()
    {
        \$processor = new ConsoleCommandProcessor();
        \$processor->addCommandData(\$this->getConsoleEvent());

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('command', \$record['extra']);
        \$this->assertEquals(
            ['name' => self::TEST_NAME, 'arguments' => self::TEST_ARGUMENTS],
            \$record['extra']['command']
        );
    }

    public function testProcessorWithOptions()
    {
        \$processor = new ConsoleCommandProcessor(true, true);
        \$processor->addCommandData(\$this->getConsoleEvent());

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('command', \$record['extra']);
        \$this->assertEquals(
            ['name' => self::TEST_NAME, 'arguments' => self::TEST_ARGUMENTS, 'options' => self::TEST_OPTIONS],
            \$record['extra']['command']
        );
    }

    public function testProcessorDoesNothingWhenNotInConsole()
    {
        \$processor = new ConsoleCommandProcessor(true, true);

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    private function getConsoleEvent(): ConsoleEvent
    {
        \$input = \$this->getMockBuilder(InputInterface::class)->getMock();
        \$input->method('getArguments')->willReturn(self::TEST_ARGUMENTS);
        \$input->method('getOptions')->willReturn(self::TEST_OPTIONS);
        \$command = \$this->getMockBuilder(Command::class)->disableOriginalConstructor()->getMock();
        \$command->method('getName')->willReturn(self::TEST_NAME);
        \$consoleEvent = \$this->getMockBuilder(ConsoleEvent::class)->disableOriginalConstructor()->getMock();
        \$consoleEvent->method('getCommand')->willReturn(\$command);
        \$consoleEvent->method('getInput')->willReturn(\$input);

        return \$consoleEvent;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\ConsoleCommandProcessor;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Input\\InputInterface;

class ConsoleCommandProcessorTest extends TestCase
{
    private const TEST_ARGUMENTS = ['test' => 'argument'];
    private const TEST_OPTIONS = ['test' => 'option'];
    private const TEST_NAME = 'some:test';

    public function testProcessor()
    {
        \$processor = new ConsoleCommandProcessor();
        \$processor->addCommandData(\$this->getConsoleEvent());

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('command', \$record['extra']);
        \$this->assertEquals(
            ['name' => self::TEST_NAME, 'arguments' => self::TEST_ARGUMENTS],
            \$record['extra']['command']
        );
    }

    public function testProcessorWithOptions()
    {
        \$processor = new ConsoleCommandProcessor(true, true);
        \$processor->addCommandData(\$this->getConsoleEvent());

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('command', \$record['extra']);
        \$this->assertEquals(
            ['name' => self::TEST_NAME, 'arguments' => self::TEST_ARGUMENTS, 'options' => self::TEST_OPTIONS],
            \$record['extra']['command']
        );
    }

    public function testProcessorDoesNothingWhenNotInConsole()
    {
        \$processor = new ConsoleCommandProcessor(true, true);

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    private function getConsoleEvent(): ConsoleEvent
    {
        \$input = \$this->getMockBuilder(InputInterface::class)->getMock();
        \$input->method('getArguments')->willReturn(self::TEST_ARGUMENTS);
        \$input->method('getOptions')->willReturn(self::TEST_OPTIONS);
        \$command = \$this->getMockBuilder(Command::class)->disableOriginalConstructor()->getMock();
        \$command->method('getName')->willReturn(self::TEST_NAME);
        \$consoleEvent = \$this->getMockBuilder(ConsoleEvent::class)->disableOriginalConstructor()->getMock();
        \$consoleEvent->method('getCommand')->willReturn(\$command);
        \$consoleEvent->method('getInput')->willReturn(\$input);

        return \$consoleEvent;
    }
}
", "vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Processor/ConsoleCommandProcessorTest.php");
    }
}
