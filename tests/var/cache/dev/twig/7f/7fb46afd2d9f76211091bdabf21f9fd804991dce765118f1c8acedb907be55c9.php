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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php */
class __TwigTemplate_6c1c8e9f696fd213cc3aa0037febbd01b46040101d83511154b708130b92367a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\CachePoolPass;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @group legacy
 */
class CachePoolPassTest extends TestCase
{
    private \$cachePoolPass;

    protected function setUp(): void
    {
        \$this->cachePoolPass = new CachePoolPass();
    }

    public function testNamespaceArgumentIsReplaced()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');
        \$adapter = new Definition();
        \$adapter->setAbstract(true);
        \$adapter->addTag('cache.pool');
        \$container->setDefinition('app.cache_adapter', \$adapter);
        \$container->setAlias('app.cache_adapter_alias', 'app.cache_adapter');
        \$cachePool = new ChildDefinition('app.cache_adapter_alias');
        \$cachePool->addArgument(null);
        \$cachePool->addTag('cache.pool');
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertSame('z3X945Jbf5', \$cachePool->getArgument(0));
    }

    public function testNamespaceArgumentIsNotReplacedIfArrayAdapterIsUsed()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');

        \$container->register('cache.adapter.array', ArrayAdapter::class)->addArgument(0);

        \$cachePool = new ChildDefinition('cache.adapter.array');
        \$cachePool->addTag('cache.pool');
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertCount(0, \$container->getDefinition('app.cache_pool')->getArguments());
    }

    public function testArgsAreReplaced()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('cache.prefix.seed', 'foo');
        \$cachePool = new Definition();
        \$cachePool->addTag('cache.pool', [
            'provider' => 'foobar',
            'default_lifetime' => 3,
        ]);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertInstanceOf(Reference::class, \$cachePool->getArgument(0));
        \$this->assertSame('foobar', (string) \$cachePool->getArgument(0));
        \$this->assertSame('tQNhcV-8xa', \$cachePool->getArgument(1));
        \$this->assertSame(3, \$cachePool->getArgument(2));
    }

    public function testWithNameAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('cache.prefix.seed', 'foo');
        \$cachePool = new Definition();
        \$cachePool->addTag('cache.pool', [
            'name' => 'foobar',
            'provider' => 'foobar',
        ]);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertSame('+naTpPa4Sm', \$cachePool->getArgument(1));
    }

    public function testThrowsExceptionWhenCachePoolTagHasUnknownAttributes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid \"cache.pool\" tag for service \"app.cache_pool\": accepted attributes are');
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');
        \$adapter = new Definition();
        \$adapter->setAbstract(true);
        \$adapter->addTag('cache.pool');
        \$container->setDefinition('app.cache_adapter', \$adapter);
        \$cachePool = new ChildDefinition('app.cache_adapter');
        \$cachePool->addTag('cache.pool', ['foobar' => 123]);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\CachePoolPass;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @group legacy
 */
class CachePoolPassTest extends TestCase
{
    private \$cachePoolPass;

    protected function setUp(): void
    {
        \$this->cachePoolPass = new CachePoolPass();
    }

    public function testNamespaceArgumentIsReplaced()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');
        \$adapter = new Definition();
        \$adapter->setAbstract(true);
        \$adapter->addTag('cache.pool');
        \$container->setDefinition('app.cache_adapter', \$adapter);
        \$container->setAlias('app.cache_adapter_alias', 'app.cache_adapter');
        \$cachePool = new ChildDefinition('app.cache_adapter_alias');
        \$cachePool->addArgument(null);
        \$cachePool->addTag('cache.pool');
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertSame('z3X945Jbf5', \$cachePool->getArgument(0));
    }

    public function testNamespaceArgumentIsNotReplacedIfArrayAdapterIsUsed()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');

        \$container->register('cache.adapter.array', ArrayAdapter::class)->addArgument(0);

        \$cachePool = new ChildDefinition('cache.adapter.array');
        \$cachePool->addTag('cache.pool');
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertCount(0, \$container->getDefinition('app.cache_pool')->getArguments());
    }

    public function testArgsAreReplaced()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('cache.prefix.seed', 'foo');
        \$cachePool = new Definition();
        \$cachePool->addTag('cache.pool', [
            'provider' => 'foobar',
            'default_lifetime' => 3,
        ]);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertInstanceOf(Reference::class, \$cachePool->getArgument(0));
        \$this->assertSame('foobar', (string) \$cachePool->getArgument(0));
        \$this->assertSame('tQNhcV-8xa', \$cachePool->getArgument(1));
        \$this->assertSame(3, \$cachePool->getArgument(2));
    }

    public function testWithNameAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('cache.prefix.seed', 'foo');
        \$cachePool = new Definition();
        \$cachePool->addTag('cache.pool', [
            'name' => 'foobar',
            'provider' => 'foobar',
        ]);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$cachePool->addArgument(null);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);

        \$this->assertSame('+naTpPa4Sm', \$cachePool->getArgument(1));
    }

    public function testThrowsExceptionWhenCachePoolTagHasUnknownAttributes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid \"cache.pool\" tag for service \"app.cache_pool\": accepted attributes are');
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');
        \$adapter = new Definition();
        \$adapter->setAbstract(true);
        \$adapter->addTag('cache.pool');
        \$container->setDefinition('app.cache_adapter', \$adapter);
        \$cachePool = new ChildDefinition('app.cache_adapter');
        \$cachePool->addTag('cache.pool', ['foobar' => 123]);
        \$container->setDefinition('app.cache_pool', \$cachePool);

        \$this->cachePoolPass->process(\$container);
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/CachePoolPassTest.php");
    }
}
