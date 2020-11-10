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

/* vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php */
class __TwigTemplate_7238f0b96679cbc6b0ad1d7fb8eae1a491b133c19b74775ecaefed9523429a99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php"));

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

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CachePoolDeleteCommandTest extends TestCase
{
    private \$cachePool;

    protected function setUp(): void
    {
        \$this->cachePool = \$this->getMockBuilder(CacheItemPoolInterface::class)
            ->getMock();
    }

    public function testCommandWithValidKey()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(true);

        \$this->cachePool->expects(\$this->once())
            ->method('deleteItem')
            ->with('bar')
            ->willReturn(true);

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);

        \$this->assertStringContainsString('[OK] Cache item \"bar\" was successfully deleted.', \$tester->getDisplay());
    }

    public function testCommandWithInValidKey()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(false);

        \$this->cachePool->expects(\$this->never())
            ->method('deleteItem')
            ->with('bar');

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);

        \$this->assertStringContainsString('[NOTE] Cache item \"bar\" does not exist in cache pool \"foo\".', \$tester->getDisplay());
    }

    public function testCommandDeleteFailed()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(true);

        \$this->cachePool->expects(\$this->once())
            ->method('deleteItem')
            ->with('bar')
            ->willReturn(false);

        \$this->expectExceptionMessage('Cache item \"bar\" could not be deleted.');

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);
    }

    /**
     * @return MockObject|KernelInterface
     */
    private function getKernel()
    {
        \$container = \$this
            ->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')
            ->getMock();

        \$kernel = \$this
            ->getMockBuilder(KernelInterface::class)
            ->getMock();

        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container);

        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn([]);

        return \$kernel;
    }

    private function getCommandTester(KernelInterface \$kernel): CommandTester
    {
        \$application = new Application(\$kernel);
        \$application->add(new CachePoolDeleteCommand(new Psr6CacheClearer(['foo' => \$this->cachePool])));

        return new CommandTester(\$application->find('cache:pool:delete'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php";
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

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CachePoolDeleteCommandTest extends TestCase
{
    private \$cachePool;

    protected function setUp(): void
    {
        \$this->cachePool = \$this->getMockBuilder(CacheItemPoolInterface::class)
            ->getMock();
    }

    public function testCommandWithValidKey()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(true);

        \$this->cachePool->expects(\$this->once())
            ->method('deleteItem')
            ->with('bar')
            ->willReturn(true);

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);

        \$this->assertStringContainsString('[OK] Cache item \"bar\" was successfully deleted.', \$tester->getDisplay());
    }

    public function testCommandWithInValidKey()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(false);

        \$this->cachePool->expects(\$this->never())
            ->method('deleteItem')
            ->with('bar');

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);

        \$this->assertStringContainsString('[NOTE] Cache item \"bar\" does not exist in cache pool \"foo\".', \$tester->getDisplay());
    }

    public function testCommandDeleteFailed()
    {
        \$this->cachePool->expects(\$this->once())
            ->method('hasItem')
            ->with('bar')
            ->willReturn(true);

        \$this->cachePool->expects(\$this->once())
            ->method('deleteItem')
            ->with('bar')
            ->willReturn(false);

        \$this->expectExceptionMessage('Cache item \"bar\" could not be deleted.');

        \$tester = \$this->getCommandTester(\$this->getKernel());
        \$tester->execute(['pool' => 'foo', 'key' => 'bar']);
    }

    /**
     * @return MockObject|KernelInterface
     */
    private function getKernel()
    {
        \$container = \$this
            ->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')
            ->getMock();

        \$kernel = \$this
            ->getMockBuilder(KernelInterface::class)
            ->getMock();

        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container);

        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn([]);

        return \$kernel;
    }

    private function getCommandTester(KernelInterface \$kernel): CommandTester
    {
        \$application = new Application(\$kernel);
        \$application->add(new CachePoolDeleteCommand(new Psr6CacheClearer(['foo' => \$this->cachePool])));

        return new CommandTester(\$application->find('cache:pool:delete'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/CachePoolDeleteCommandTest.php");
    }
}
