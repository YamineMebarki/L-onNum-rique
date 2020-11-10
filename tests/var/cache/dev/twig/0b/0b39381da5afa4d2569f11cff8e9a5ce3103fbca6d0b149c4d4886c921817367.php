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

/* vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php */
class __TwigTemplate_2c2cd29d434189c86d95f0a1cc46c241cc7b05a613dd9bd1a9dda60001e5d9cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Application as BaseApplication;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Tests the part of the XliffLintCommand managed by the FrameworkBundle. The
 * rest of the features are tested in the Translation component.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class XliffLintCommandTest extends TestCase
{
    private \$files;

    public function testGetHelp()
    {
        \$command = new XliffLintCommand();
        \$expected = <<<EOF
Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF;

        \$this->assertStringContainsString(\$expected, \$command->getHelp());
    }

    public function testLintFilesFromBundleDirectory()
    {
        \$tester = \$this->createCommandTester(\$this->getKernelAwareApplicationMock());
        \$tester->execute(
            ['filename' => '@AppBundle/Resources'],
            ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]
        );

        \$this->assertEquals(0, \$tester->getStatusCode(), 'Returns 0 in case of success');
        \$this->assertStringContainsString('[OK] All 0 XLIFF files contain valid syntax', trim(\$tester->getDisplay()));
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester(\$application = null)
    {
        if (!\$application) {
            \$application = new BaseApplication();
            \$application->add(new XliffLintCommand());
        }

        \$command = \$application->find('lint:xliff');

        if (\$application) {
            \$command->setApplication(\$application);
        }

        return new CommandTester(\$command);
    }

    private function getKernelAwareApplicationMock()
    {
        \$kernel = \$this->getMockBuilder(KernelInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$kernel
            ->expects(\$this->once())
            ->method('locateResource')
            ->with('@AppBundle/Resources')
            ->willReturn(sys_get_temp_dir().'/xliff-lint-test');

        \$application = \$this->getMockBuilder(Application::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$application
            ->expects(\$this->once())
            ->method('getKernel')
            ->willReturn(\$kernel);

        \$application
            ->expects(\$this->once())
            ->method('getHelperSet')
            ->willReturn(new HelperSet());

        \$application
            ->expects(\$this->any())
            ->method('getDefinition')
            ->willReturn(new InputDefinition());

        \$application
            ->expects(\$this->once())
            ->method('find')
            ->with('lint:xliff')
            ->willReturn(new XliffLintCommand());

        return \$application;
    }

    protected function setUp(): void
    {
        @mkdir(sys_get_temp_dir().'/xliff-lint-test');
        \$this->files = [];
    }

    protected function tearDown(): void
    {
        foreach (\$this->files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
        rmdir(sys_get_temp_dir().'/xliff-lint-test');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Application as BaseApplication;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Tests the part of the XliffLintCommand managed by the FrameworkBundle. The
 * rest of the features are tested in the Translation component.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class XliffLintCommandTest extends TestCase
{
    private \$files;

    public function testGetHelp()
    {
        \$command = new XliffLintCommand();
        \$expected = <<<EOF
Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF;

        \$this->assertStringContainsString(\$expected, \$command->getHelp());
    }

    public function testLintFilesFromBundleDirectory()
    {
        \$tester = \$this->createCommandTester(\$this->getKernelAwareApplicationMock());
        \$tester->execute(
            ['filename' => '@AppBundle/Resources'],
            ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]
        );

        \$this->assertEquals(0, \$tester->getStatusCode(), 'Returns 0 in case of success');
        \$this->assertStringContainsString('[OK] All 0 XLIFF files contain valid syntax', trim(\$tester->getDisplay()));
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester(\$application = null)
    {
        if (!\$application) {
            \$application = new BaseApplication();
            \$application->add(new XliffLintCommand());
        }

        \$command = \$application->find('lint:xliff');

        if (\$application) {
            \$command->setApplication(\$application);
        }

        return new CommandTester(\$command);
    }

    private function getKernelAwareApplicationMock()
    {
        \$kernel = \$this->getMockBuilder(KernelInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$kernel
            ->expects(\$this->once())
            ->method('locateResource')
            ->with('@AppBundle/Resources')
            ->willReturn(sys_get_temp_dir().'/xliff-lint-test');

        \$application = \$this->getMockBuilder(Application::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$application
            ->expects(\$this->once())
            ->method('getKernel')
            ->willReturn(\$kernel);

        \$application
            ->expects(\$this->once())
            ->method('getHelperSet')
            ->willReturn(new HelperSet());

        \$application
            ->expects(\$this->any())
            ->method('getDefinition')
            ->willReturn(new InputDefinition());

        \$application
            ->expects(\$this->once())
            ->method('find')
            ->with('lint:xliff')
            ->willReturn(new XliffLintCommand());

        return \$application;
    }

    protected function setUp(): void
    {
        @mkdir(sys_get_temp_dir().'/xliff-lint-test');
        \$this->files = [];
    }

    protected function tearDown(): void
    {
        foreach (\$this->files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
        rmdir(sys_get_temp_dir().'/xliff-lint-test');
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/XliffLintCommandTest.php");
    }
}
