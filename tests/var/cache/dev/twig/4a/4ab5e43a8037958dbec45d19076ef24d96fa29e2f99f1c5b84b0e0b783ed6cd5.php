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

/* vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php */
class __TwigTemplate_3b012471934ed9caaaf650281d62272f0de36b567394ef1ae2080fbf7228590d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Bridge\\ProxyManager\\Tests\\LazyProxy\\Dumper\\PhpDumperTest;

class ManagerRegistryTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        if (!class_exists('PHPUnit_Framework_TestCase')) {
            self::markTestSkipped('proxy-manager-bridge is not yet compatible with namespaced phpunit versions.');
        }
        \$test = new PhpDumperTest();
        \$test->testDumpContainerWithProxyServiceWillShareProxies();
    }

    public function testResetService()
    {
        \$container = new \\LazyServiceProjectServiceContainer();

        \$registry = new TestManagerRegistry('name', [], ['defaultManager' => 'foo'], 'defaultConnection', 'defaultManager', 'proxyInterfaceName');
        \$registry->setTestContainer(\$container);

        \$foo = \$container->get('foo');
        \$foo->bar = 123;
        \$this->assertTrue(isset(\$foo->bar));

        \$registry->resetManager();

        \$this->assertSame(\$foo, \$container->get('foo'));
        \$this->assertObjectNotHasAttribute('bar', \$foo);
    }
}

class TestManagerRegistry extends ManagerRegistry
{
    public function setTestContainer(\$container)
    {
        \$this->container = \$container;
    }

    public function getAliasNamespace(\$alias)
    {
        return 'Foo';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Bridge\\ProxyManager\\Tests\\LazyProxy\\Dumper\\PhpDumperTest;

class ManagerRegistryTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        if (!class_exists('PHPUnit_Framework_TestCase')) {
            self::markTestSkipped('proxy-manager-bridge is not yet compatible with namespaced phpunit versions.');
        }
        \$test = new PhpDumperTest();
        \$test->testDumpContainerWithProxyServiceWillShareProxies();
    }

    public function testResetService()
    {
        \$container = new \\LazyServiceProjectServiceContainer();

        \$registry = new TestManagerRegistry('name', [], ['defaultManager' => 'foo'], 'defaultConnection', 'defaultManager', 'proxyInterfaceName');
        \$registry->setTestContainer(\$container);

        \$foo = \$container->get('foo');
        \$foo->bar = 123;
        \$this->assertTrue(isset(\$foo->bar));

        \$registry->resetManager();

        \$this->assertSame(\$foo, \$container->get('foo'));
        \$this->assertObjectNotHasAttribute('bar', \$foo);
    }
}

class TestManagerRegistry extends ManagerRegistry
{
    public function setTestContainer(\$container)
    {
        \$this->container = \$container;
    }

    public function getAliasNamespace(\$alias)
    {
        return 'Foo';
    }
}
", "vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/ManagerRegistryTest.php");
    }
}
