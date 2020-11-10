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

/* vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php */
class __TwigTemplate_06c2fa48cd30c427790803fbda5f6500ef7b41b229df7cee900753a7653d280f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\BufferedOutput;

abstract class AbstractDescriptorTest extends TestCase
{
    /** @dataProvider getDescribeInputArgumentTestData */
    public function testDescribeInputArgument(InputArgument \$argument, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$argument);
    }

    /** @dataProvider getDescribeInputOptionTestData */
    public function testDescribeInputOption(InputOption \$option, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$option);
    }

    /** @dataProvider getDescribeInputDefinitionTestData */
    public function testDescribeInputDefinition(InputDefinition \$definition, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$definition);
    }

    /** @dataProvider getDescribeCommandTestData */
    public function testDescribeCommand(Command \$command, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$command);
    }

    /** @dataProvider getDescribeApplicationTestData */
    public function testDescribeApplication(Application \$application, \$expectedDescription)
    {
        // Replaces the dynamic placeholders of the command help text with a static version.
        // The placeholder %command.full_name% includes the script path that is not predictable
        // and can not be tested against.
        foreach (\$application->all() as \$command) {
            \$command->setHelp(str_replace('%command.full_name%', 'app/console %command.name%', \$command->getHelp()));
        }

        \$this->assertDescription(\$expectedDescription, \$application);
    }

    public function getDescribeInputArgumentTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputArguments());
    }

    public function getDescribeInputOptionTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputOptions());
    }

    public function getDescribeInputDefinitionTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputDefinitions());
    }

    public function getDescribeCommandTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getCommands());
    }

    public function getDescribeApplicationTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getApplications());
    }

    abstract protected function getDescriptor();

    abstract protected function getFormat();

    protected function getDescriptionTestData(array \$objects)
    {
        \$data = [];
        foreach (\$objects as \$name => \$object) {
            \$description = file_get_contents(sprintf('%s/../Fixtures/%s.%s', __DIR__, \$name, \$this->getFormat()));
            \$data[] = [\$object, \$description];
        }

        return \$data;
    }

    protected function assertDescription(\$expectedDescription, \$describedObject, array \$options = [])
    {
        \$output = new BufferedOutput(BufferedOutput::VERBOSITY_NORMAL, true);
        \$this->getDescriptor()->describe(\$output, \$describedObject, \$options + ['raw_output' => true]);
        \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$output->fetch())));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\BufferedOutput;

abstract class AbstractDescriptorTest extends TestCase
{
    /** @dataProvider getDescribeInputArgumentTestData */
    public function testDescribeInputArgument(InputArgument \$argument, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$argument);
    }

    /** @dataProvider getDescribeInputOptionTestData */
    public function testDescribeInputOption(InputOption \$option, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$option);
    }

    /** @dataProvider getDescribeInputDefinitionTestData */
    public function testDescribeInputDefinition(InputDefinition \$definition, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$definition);
    }

    /** @dataProvider getDescribeCommandTestData */
    public function testDescribeCommand(Command \$command, \$expectedDescription)
    {
        \$this->assertDescription(\$expectedDescription, \$command);
    }

    /** @dataProvider getDescribeApplicationTestData */
    public function testDescribeApplication(Application \$application, \$expectedDescription)
    {
        // Replaces the dynamic placeholders of the command help text with a static version.
        // The placeholder %command.full_name% includes the script path that is not predictable
        // and can not be tested against.
        foreach (\$application->all() as \$command) {
            \$command->setHelp(str_replace('%command.full_name%', 'app/console %command.name%', \$command->getHelp()));
        }

        \$this->assertDescription(\$expectedDescription, \$application);
    }

    public function getDescribeInputArgumentTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputArguments());
    }

    public function getDescribeInputOptionTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputOptions());
    }

    public function getDescribeInputDefinitionTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getInputDefinitions());
    }

    public function getDescribeCommandTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getCommands());
    }

    public function getDescribeApplicationTestData()
    {
        return \$this->getDescriptionTestData(ObjectsProvider::getApplications());
    }

    abstract protected function getDescriptor();

    abstract protected function getFormat();

    protected function getDescriptionTestData(array \$objects)
    {
        \$data = [];
        foreach (\$objects as \$name => \$object) {
            \$description = file_get_contents(sprintf('%s/../Fixtures/%s.%s', __DIR__, \$name, \$this->getFormat()));
            \$data[] = [\$object, \$description];
        }

        return \$data;
    }

    protected function assertDescription(\$expectedDescription, \$describedObject, array \$options = [])
    {
        \$output = new BufferedOutput(BufferedOutput::VERBOSITY_NORMAL, true);
        \$this->getDescriptor()->describe(\$output, \$describedObject, \$options + ['raw_output' => true]);
        \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$output->fetch())));
    }
}
", "vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Descriptor/AbstractDescriptorTest.php");
    }
}
