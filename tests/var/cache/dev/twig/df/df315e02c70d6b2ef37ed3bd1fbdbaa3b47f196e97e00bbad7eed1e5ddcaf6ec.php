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

/* vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php */
class __TwigTemplate_af7ffcd95d720459e2b8aba40f8c023c904069f21faa224ddf1be2765c2f8468 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class ConfigDumpReferenceCommandTest extends AbstractWebTestCase
{
    private \$application;

    protected function setUp(): void
    {
        \$kernel = static::createKernel(['test_case' => 'ConfigDump', 'root_config' => 'config.yml']);
        \$this->application = new Application(\$kernel);
        \$this->application->doRun(new ArrayInput([]), new NullOutput());
    }

    public function testDumpBundleName()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'TestBundle']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('test:', \$tester->getDisplay());
        \$this->assertStringContainsString('    custom:', \$tester->getDisplay());
    }

    public function testDumpAtPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([
            'name' => 'test',
            'path' => 'array',
        ]);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertSame(<<<'EOL'
# Default configuration for extension with alias: \"test\" at path \"array\"
array:
    child1:               ~
    child2:               ~


EOL
            , \$tester->getDisplay(true));
    }

    public function testDumpAtPathXml()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([
            'name' => 'test',
            'path' => 'array',
            '--format' => 'xml',
        ]);

        \$this->assertSame(1, \$ret);
        \$this->assertStringContainsString('[ERROR] The \"path\" option is only available for the \"yaml\" format.', \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$command = \$this->application->find('config:dump-reference');

        return new CommandTester(\$command);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class ConfigDumpReferenceCommandTest extends AbstractWebTestCase
{
    private \$application;

    protected function setUp(): void
    {
        \$kernel = static::createKernel(['test_case' => 'ConfigDump', 'root_config' => 'config.yml']);
        \$this->application = new Application(\$kernel);
        \$this->application->doRun(new ArrayInput([]), new NullOutput());
    }

    public function testDumpBundleName()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'TestBundle']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('test:', \$tester->getDisplay());
        \$this->assertStringContainsString('    custom:', \$tester->getDisplay());
    }

    public function testDumpAtPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([
            'name' => 'test',
            'path' => 'array',
        ]);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertSame(<<<'EOL'
# Default configuration for extension with alias: \"test\" at path \"array\"
array:
    child1:               ~
    child2:               ~


EOL
            , \$tester->getDisplay(true));
    }

    public function testDumpAtPathXml()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([
            'name' => 'test',
            'path' => 'array',
            '--format' => 'xml',
        ]);

        \$this->assertSame(1, \$ret);
        \$this->assertStringContainsString('[ERROR] The \"path\" option is only available for the \"yaml\" format.', \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$command = \$this->application->find('config:dump-reference');

        return new CommandTester(\$command);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/ConfigDumpReferenceCommandTest.php");
    }
}
