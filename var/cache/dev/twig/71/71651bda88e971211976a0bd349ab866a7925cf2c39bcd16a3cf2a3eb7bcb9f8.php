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

/* vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php */
class __TwigTemplate_46845f8e1891c4cdb6a0df88cf3c842443a6ce4e9a3171c4aab4238e903ddb41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CachePruneCommandTest extends TestCase
{
    public function testCommandWithPools()
    {
        \$tester = \$this->getCommandTester(\$this->getKernel(), \$this->getRewindableGenerator());
        \$tester->execute([]);
    }

    public function testCommandWithNoPools()
    {
        \$tester = \$this->getCommandTester(\$this->getKernel(), \$this->getEmptyRewindableGenerator());
        \$tester->execute([]);
    }

    private function getRewindableGenerator(): RewindableGenerator
    {
        return new RewindableGenerator(function () {
            yield 'foo_pool' => \$this->getPruneableInterfaceMock();
            yield 'bar_pool' => \$this->getPruneableInterfaceMock();
        }, 2);
    }

    private function getEmptyRewindableGenerator(): RewindableGenerator
    {
        return new RewindableGenerator(function () {
            return new \\ArrayIterator([]);
        }, 0);
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

    /**
     * @return MockObject|PruneableInterface
     */
    private function getPruneableInterfaceMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune');

        return \$pruneable;
    }

    private function getCommandTester(KernelInterface \$kernel, RewindableGenerator \$generator): CommandTester
    {
        \$application = new Application(\$kernel);
        \$application->add(new CachePoolPruneCommand(\$generator));

        return new CommandTester(\$application->find('cache:pool:prune'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CachePruneCommandTest extends TestCase
{
    public function testCommandWithPools()
    {
        \$tester = \$this->getCommandTester(\$this->getKernel(), \$this->getRewindableGenerator());
        \$tester->execute([]);
    }

    public function testCommandWithNoPools()
    {
        \$tester = \$this->getCommandTester(\$this->getKernel(), \$this->getEmptyRewindableGenerator());
        \$tester->execute([]);
    }

    private function getRewindableGenerator(): RewindableGenerator
    {
        return new RewindableGenerator(function () {
            yield 'foo_pool' => \$this->getPruneableInterfaceMock();
            yield 'bar_pool' => \$this->getPruneableInterfaceMock();
        }, 2);
    }

    private function getEmptyRewindableGenerator(): RewindableGenerator
    {
        return new RewindableGenerator(function () {
            return new \\ArrayIterator([]);
        }, 0);
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

    /**
     * @return MockObject|PruneableInterface
     */
    private function getPruneableInterfaceMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune');

        return \$pruneable;
    }

    private function getCommandTester(KernelInterface \$kernel, RewindableGenerator \$generator): CommandTester
    {
        \$application = new Application(\$kernel);
        \$application->add(new CachePoolPruneCommand(\$generator));

        return new CommandTester(\$application->find('cache:pool:prune'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/CachePruneCommandTest.php");
    }
}
