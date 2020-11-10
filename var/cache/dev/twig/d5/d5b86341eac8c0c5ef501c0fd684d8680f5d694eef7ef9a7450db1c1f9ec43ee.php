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

/* vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php */
class __TwigTemplate_aedb50c60c4f6368823a5cdfcb5ba82bb77dc20799897437bcb779187f0de8ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php"));

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
class ConfigDebugCommandTest extends AbstractWebTestCase
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
        \$this->assertStringContainsString('custom: foo', \$tester->getDisplay());
    }

    public function testDumpBundleOption()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'TestBundle', 'path' => 'custom']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('foo', \$tester->getDisplay());
    }

    public function testParametersValuesAreResolved()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'framework']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString(\"locale: '%env(LOCALE)%'\", \$tester->getDisplay());
        \$this->assertStringContainsString('secret: test', \$tester->getDisplay());
    }

    public function testDumpUndefinedBundleOption()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['name' => 'TestBundle', 'path' => 'foo']);

        \$this->assertStringContainsString('Unable to find configuration for \"test.foo\"', \$tester->getDisplay());
    }

    public function testDumpWithPrefixedEnv()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['name' => 'FrameworkBundle']);

        \$this->assertStringContainsString(\"cookie_httponly: '%env(bool:COOKIE_HTTPONLY)%'\", \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$command = \$this->application->find('debug:config');

        return new CommandTester(\$command);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php";
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
class ConfigDebugCommandTest extends AbstractWebTestCase
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
        \$this->assertStringContainsString('custom: foo', \$tester->getDisplay());
    }

    public function testDumpBundleOption()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'TestBundle', 'path' => 'custom']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('foo', \$tester->getDisplay());
    }

    public function testParametersValuesAreResolved()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['name' => 'framework']);

        \$this->assertSame(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString(\"locale: '%env(LOCALE)%'\", \$tester->getDisplay());
        \$this->assertStringContainsString('secret: test', \$tester->getDisplay());
    }

    public function testDumpUndefinedBundleOption()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['name' => 'TestBundle', 'path' => 'foo']);

        \$this->assertStringContainsString('Unable to find configuration for \"test.foo\"', \$tester->getDisplay());
    }

    public function testDumpWithPrefixedEnv()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['name' => 'FrameworkBundle']);

        \$this->assertStringContainsString(\"cookie_httponly: '%env(bool:COOKIE_HTTPONLY)%'\", \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$command = \$this->application->find('debug:config');

        return new CommandTester(\$command);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/ConfigDebugCommandTest.php");
    }
}
