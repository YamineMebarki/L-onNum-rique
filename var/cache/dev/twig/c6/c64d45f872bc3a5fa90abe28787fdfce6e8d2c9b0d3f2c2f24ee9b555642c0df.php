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

/* vendor/symfony/console/Tests/Command/HelpCommandTest.php */
class __TwigTemplate_daf81e078d74ea84a1b08b2abcfba5ff3101f868fa178d67a33fc74e7142d6ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Command/HelpCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Command/HelpCommandTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\HelpCommand;
use Symfony\\Component\\Console\\Command\\ListCommand;
use Symfony\\Component\\Console\\Tester\\CommandTester;

class HelpCommandTest extends TestCase
{
    public function testExecuteForCommandAlias()
    {
        \$command = new HelpCommand();
        \$command->setApplication(new Application());
        \$commandTester = new CommandTester(\$command);
        \$commandTester->execute(['command_name' => 'li'], ['decorated' => false]);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
    }

    public function testExecuteForCommand()
    {
        \$command = new HelpCommand();
        \$commandTester = new CommandTester(\$command);
        \$command->setCommand(new ListCommand());
        \$commandTester->execute([], ['decorated' => false]);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
    }

    public function testExecuteForCommandWithXmlOption()
    {
        \$command = new HelpCommand();
        \$commandTester = new CommandTester(\$command);
        \$command->setCommand(new ListCommand());
        \$commandTester->execute(['--format' => 'xml']);
        \$this->assertStringContainsString('<command', \$commandTester->getDisplay(), '->execute() returns an XML help text if --xml is passed');
    }

    public function testExecuteForApplicationCommand()
    {
        \$application = new Application();
        \$commandTester = new CommandTester(\$application->get('help'));
        \$commandTester->execute(['command_name' => 'list']);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
    }

    public function testExecuteForApplicationCommandWithXmlOption()
    {
        \$application = new Application();
        \$commandTester = new CommandTester(\$application->get('help'));
        \$commandTester->execute(['command_name' => 'list', '--format' => 'xml']);
        \$this->assertStringContainsString('list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('<command', \$commandTester->getDisplay(), '->execute() returns an XML help text if --format=xml is passed');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Command/HelpCommandTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\HelpCommand;
use Symfony\\Component\\Console\\Command\\ListCommand;
use Symfony\\Component\\Console\\Tester\\CommandTester;

class HelpCommandTest extends TestCase
{
    public function testExecuteForCommandAlias()
    {
        \$command = new HelpCommand();
        \$command->setApplication(new Application());
        \$commandTester = new CommandTester(\$command);
        \$commandTester->execute(['command_name' => 'li'], ['decorated' => false]);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
    }

    public function testExecuteForCommand()
    {
        \$command = new HelpCommand();
        \$commandTester = new CommandTester(\$command);
        \$command->setCommand(new ListCommand());
        \$commandTester->execute([], ['decorated' => false]);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
    }

    public function testExecuteForCommandWithXmlOption()
    {
        \$command = new HelpCommand();
        \$commandTester = new CommandTester(\$command);
        \$command->setCommand(new ListCommand());
        \$commandTester->execute(['--format' => 'xml']);
        \$this->assertStringContainsString('<command', \$commandTester->getDisplay(), '->execute() returns an XML help text if --xml is passed');
    }

    public function testExecuteForApplicationCommand()
    {
        \$application = new Application();
        \$commandTester = new CommandTester(\$application->get('help'));
        \$commandTester->execute(['command_name' => 'list']);
        \$this->assertStringContainsString('list [options] [--] [<namespace>]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('format=FORMAT', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('raw', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
    }

    public function testExecuteForApplicationCommandWithXmlOption()
    {
        \$application = new Application();
        \$commandTester = new CommandTester(\$application->get('help'));
        \$commandTester->execute(['command_name' => 'list', '--format' => 'xml']);
        \$this->assertStringContainsString('list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]', \$commandTester->getDisplay(), '->execute() returns a text help for the given command');
        \$this->assertStringContainsString('<command', \$commandTester->getDisplay(), '->execute() returns an XML help text if --format=xml is passed');
    }
}
", "vendor/symfony/console/Tests/Command/HelpCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Command/HelpCommandTest.php");
    }
}
