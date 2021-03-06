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

/* vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php */
class __TwigTemplate_2cb4ae97060143f5085c5c3e9df5f2b17b4e1d5991fd156f888a2cab9e05f9a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableTagAwareAdapter;
use Symfony\\Component\\Cache\\DataCollector\\CacheDataCollector;
use Symfony\\Component\\Cache\\DependencyInjection\\CacheCollectorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CacheCollectorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('fs', FilesystemAdapter::class)
            ->addTag('cache.pool');
        \$container
            ->register('tagged_fs', TagAwareAdapter::class)
            ->addArgument(new Reference('fs'))
            ->addTag('cache.pool');

        \$collector = \$container->register('data_collector.cache', CacheDataCollector::class);
        (new CacheCollectorPass())->process(\$container);

        \$this->assertEquals([
            ['addInstance', ['fs', new Reference('fs')]],
            ['addInstance', ['tagged_fs', new Reference('tagged_fs')]],
        ], \$collector->getMethodCalls());

        \$this->assertSame(TraceableAdapter::class, \$container->findDefinition('fs')->getClass());
        \$this->assertSame(TraceableTagAwareAdapter::class, \$container->getDefinition('tagged_fs')->getClass());
        \$this->assertFalse(\$collector->isPublic(), 'The \"data_collector.cache\" should be private after processing');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableTagAwareAdapter;
use Symfony\\Component\\Cache\\DataCollector\\CacheDataCollector;
use Symfony\\Component\\Cache\\DependencyInjection\\CacheCollectorPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CacheCollectorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('fs', FilesystemAdapter::class)
            ->addTag('cache.pool');
        \$container
            ->register('tagged_fs', TagAwareAdapter::class)
            ->addArgument(new Reference('fs'))
            ->addTag('cache.pool');

        \$collector = \$container->register('data_collector.cache', CacheDataCollector::class);
        (new CacheCollectorPass())->process(\$container);

        \$this->assertEquals([
            ['addInstance', ['fs', new Reference('fs')]],
            ['addInstance', ['tagged_fs', new Reference('tagged_fs')]],
        ], \$collector->getMethodCalls());

        \$this->assertSame(TraceableAdapter::class, \$container->findDefinition('fs')->getClass());
        \$this->assertSame(TraceableTagAwareAdapter::class, \$container->getDefinition('tagged_fs')->getClass());
        \$this->assertFalse(\$collector->isPublic(), 'The \"data_collector.cache\" should be private after processing');
    }
}
", "vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/DependencyInjection/CacheCollectorPassTest.php");
    }
}
