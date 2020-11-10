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

/* vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php */
class __TwigTemplate_bbf5a2fc03a1fa17e5d5d0625a4cfe47b8abb04a221f2bdee4295d658eff75a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class CachePoolClearCommandTest extends AbstractWebTestCase
{
    protected function setUp(): void
    {
        static::bootKernel(['test_case' => 'CachePoolClear', 'root_config' => 'config.yml']);
    }

    public function testClearPrivatePool()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.private_pool']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.private_pool', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearPublicPool()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.public_pool']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.public_pool', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearPoolWithCustomClearer()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.pool_with_clearer']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.pool_with_clearer', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testCallClearer()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.app_clearer']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Calling cache clearer: cache.app_clearer', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearUnexistingPool()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('You have requested a non-existent service \"unknown_pool\"');
        \$this->createCommandTester()
            ->execute(['pools' => ['unknown_pool']], ['decorated' => false]);
    }

    private function createCommandTester()
    {
        \$application = new Application(static::\$kernel);
        \$application->add(new CachePoolClearCommand(static::\$container->get('cache.global_clearer')));

        return new CommandTester(\$application->find('cache:pool:clear'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * @group functional
 */
class CachePoolClearCommandTest extends AbstractWebTestCase
{
    protected function setUp(): void
    {
        static::bootKernel(['test_case' => 'CachePoolClear', 'root_config' => 'config.yml']);
    }

    public function testClearPrivatePool()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.private_pool']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.private_pool', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearPublicPool()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.public_pool']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.public_pool', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearPoolWithCustomClearer()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.pool_with_clearer']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Clearing cache pool: cache.pool_with_clearer', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testCallClearer()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['pools' => ['cache.app_clearer']], ['decorated' => false]);

        \$this->assertSame(0, \$tester->getStatusCode(), 'cache:pool:clear exits with 0 in case of success');
        \$this->assertStringContainsString('Calling cache clearer: cache.app_clearer', \$tester->getDisplay());
        \$this->assertStringContainsString('[OK] Cache was successfully cleared.', \$tester->getDisplay());
    }

    public function testClearUnexistingPool()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('You have requested a non-existent service \"unknown_pool\"');
        \$this->createCommandTester()
            ->execute(['pools' => ['unknown_pool']], ['decorated' => false]);
    }

    private function createCommandTester()
    {
        \$application = new Application(static::\$kernel);
        \$application->add(new CachePoolClearCommand(static::\$container->get('cache.global_clearer')));

        return new CommandTester(\$application->find('cache:pool:clear'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/CachePoolClearCommandTest.php");
    }
}
