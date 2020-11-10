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

/* vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php */
class __TwigTemplate_c00848b624b7f6b5795012085ed4bc80bd3718ec183a17d3564ae6e57cda1d97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass;
use Symfony\\Component\\Console\\Tester\\ApplicationTester;

/**
 * @group functional
 */
class ContainerDebugCommandTest extends AbstractWebTestCase
{
    public function testDumpContainerIfNotExists()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container']);

        \$this->assertFileExists(static::\$container->getParameter('debug.container.dump'));
    }

    public function testNoDebug()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => false]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container']);

        \$this->assertStringContainsString('public', \$tester->getDisplay());
    }

    public function testPrivateAlias()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--show-hidden' => true]);
        \$this->assertStringNotContainsString('public', \$tester->getDisplay());
        \$this->assertStringNotContainsString('private_alias', \$tester->getDisplay());

        \$tester->run(['command' => 'debug:container']);
        \$this->assertStringContainsString('public', \$tester->getDisplay());
        \$this->assertStringContainsString('private_alias', \$tester->getDisplay());
    }

    /**
     * @dataProvider provideIgnoreBackslashWhenFindingService
     */
    public function testIgnoreBackslashWhenFindingService(string \$validServiceId)
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', 'name' => \$validServiceId]);
        \$this->assertStringNotContainsString('No services found', \$tester->getDisplay());
    }

    public function testDescribeEnvVars()
    {
        putenv('REAL=value');
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--env-vars' => true], ['decorated' => false]);

        \$this->assertStringMatchesFormat(<<<'TXT'

Symfony Container Environment Variables
=======================================

 --------- ----------------- ------------%w
  Name      Default value     Real value%w
 --------- ----------------- ------------%w
  JSON      \"[1, \"2.5\", 3]\"   n/a%w
  REAL      n/a               \"value\"%w
  UNKNOWN   n/a               n/a%w
 --------- ----------------- ------------%w

 // Note real values might be different between web and CLI.%w

 [WARNING] The following variables are missing:%w

 * UNKNOWN

TXT
        , \$tester->getDisplay(true));

        putenv('REAL');
    }

    public function testDescribeEnvVar()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--env-var' => 'js'], ['decorated' => false]);

        \$this->assertStringContainsString(file_get_contents(__DIR__.'/Fixtures/describe_env_vars.txt'), \$tester->getDisplay(true));
    }

    public function provideIgnoreBackslashWhenFindingService()
    {
        return [
            [BackslashClass::class],
            ['FixturesBackslashClass'],
            ['\\\\'.BackslashClass::class],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass;
use Symfony\\Component\\Console\\Tester\\ApplicationTester;

/**
 * @group functional
 */
class ContainerDebugCommandTest extends AbstractWebTestCase
{
    public function testDumpContainerIfNotExists()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container']);

        \$this->assertFileExists(static::\$container->getParameter('debug.container.dump'));
    }

    public function testNoDebug()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => false]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container']);

        \$this->assertStringContainsString('public', \$tester->getDisplay());
    }

    public function testPrivateAlias()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--show-hidden' => true]);
        \$this->assertStringNotContainsString('public', \$tester->getDisplay());
        \$this->assertStringNotContainsString('private_alias', \$tester->getDisplay());

        \$tester->run(['command' => 'debug:container']);
        \$this->assertStringContainsString('public', \$tester->getDisplay());
        \$this->assertStringContainsString('private_alias', \$tester->getDisplay());
    }

    /**
     * @dataProvider provideIgnoreBackslashWhenFindingService
     */
    public function testIgnoreBackslashWhenFindingService(string \$validServiceId)
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml']);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', 'name' => \$validServiceId]);
        \$this->assertStringNotContainsString('No services found', \$tester->getDisplay());
    }

    public function testDescribeEnvVars()
    {
        putenv('REAL=value');
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--env-vars' => true], ['decorated' => false]);

        \$this->assertStringMatchesFormat(<<<'TXT'

Symfony Container Environment Variables
=======================================

 --------- ----------------- ------------%w
  Name      Default value     Real value%w
 --------- ----------------- ------------%w
  JSON      \"[1, \"2.5\", 3]\"   n/a%w
  REAL      n/a               \"value\"%w
  UNKNOWN   n/a               n/a%w
 --------- ----------------- ------------%w

 // Note real values might be different between web and CLI.%w

 [WARNING] The following variables are missing:%w

 * UNKNOWN

TXT
        , \$tester->getDisplay(true));

        putenv('REAL');
    }

    public function testDescribeEnvVar()
    {
        static::bootKernel(['test_case' => 'ContainerDebug', 'root_config' => 'config.yml', 'debug' => true]);

        \$application = new Application(static::\$kernel);
        \$application->setAutoExit(false);

        @unlink(static::\$container->getParameter('debug.container.dump'));

        \$tester = new ApplicationTester(\$application);
        \$tester->run(['command' => 'debug:container', '--env-var' => 'js'], ['decorated' => false]);

        \$this->assertStringContainsString(file_get_contents(__DIR__.'/Fixtures/describe_env_vars.txt'), \$tester->getDisplay(true));
    }

    public function provideIgnoreBackslashWhenFindingService()
    {
        return [
            [BackslashClass::class],
            ['FixturesBackslashClass'],
            ['\\\\'.BackslashClass::class],
        ];
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/ContainerDebugCommandTest.php");
    }
}
