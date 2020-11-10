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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php */
class __TwigTemplate_83f9107f74c3cbe585730870c710602a98a934537a9d8457c402d0fe717bb5ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class TwigLoaderPassTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private \$builder;
    /**
     * @var Definition
     */
    private \$chainLoader;
    /**
     * @var TwigLoaderPass
     */
    private \$pass;

    protected function setUp(): void
    {
        \$this->builder = new ContainerBuilder();
        \$this->builder->register('twig');
        \$this->chainLoader = new Definition('loader');
        \$this->pass = new TwigLoaderPass();
    }

    public function testMapperPassWithOneTaggedLoader()
    {
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader');

        \$this->pass->process(\$this->builder);

        \$this->assertSame('test_loader_1', (string) \$this->builder->getAlias('twig.loader'));
    }

    public function testMapperPassWithTwoTaggedLoaders()
    {
        \$this->builder->setDefinition('twig.loader.chain', \$this->chainLoader);
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader');
        \$this->builder->register('test_loader_2')
            ->addTag('twig.loader');

        \$this->pass->process(\$this->builder);

        \$this->assertSame('twig.loader.chain', (string) \$this->builder->getAlias('twig.loader'));
        \$calls = \$this->chainLoader->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addLoader', \$calls[0][0]);
        \$this->assertEquals('addLoader', \$calls[1][0]);
        \$this->assertEquals('test_loader_1', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_loader_2', (string) \$calls[1][1][0]);
    }

    public function testMapperPassWithTwoTaggedLoadersWithPriority()
    {
        \$this->builder->setDefinition('twig.loader.chain', \$this->chainLoader);
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader', ['priority' => 100]);
        \$this->builder->register('test_loader_2')
            ->addTag('twig.loader', ['priority' => 200]);

        \$this->pass->process(\$this->builder);

        \$this->assertSame('twig.loader.chain', (string) \$this->builder->getAlias('twig.loader'));
        \$calls = \$this->chainLoader->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addLoader', \$calls[0][0]);
        \$this->assertEquals('addLoader', \$calls[1][0]);
        \$this->assertEquals('test_loader_2', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_loader_1', (string) \$calls[1][1][0]);
    }

    public function testMapperPassWithZeroTaggedLoaders()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->pass->process(\$this->builder);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class TwigLoaderPassTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private \$builder;
    /**
     * @var Definition
     */
    private \$chainLoader;
    /**
     * @var TwigLoaderPass
     */
    private \$pass;

    protected function setUp(): void
    {
        \$this->builder = new ContainerBuilder();
        \$this->builder->register('twig');
        \$this->chainLoader = new Definition('loader');
        \$this->pass = new TwigLoaderPass();
    }

    public function testMapperPassWithOneTaggedLoader()
    {
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader');

        \$this->pass->process(\$this->builder);

        \$this->assertSame('test_loader_1', (string) \$this->builder->getAlias('twig.loader'));
    }

    public function testMapperPassWithTwoTaggedLoaders()
    {
        \$this->builder->setDefinition('twig.loader.chain', \$this->chainLoader);
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader');
        \$this->builder->register('test_loader_2')
            ->addTag('twig.loader');

        \$this->pass->process(\$this->builder);

        \$this->assertSame('twig.loader.chain', (string) \$this->builder->getAlias('twig.loader'));
        \$calls = \$this->chainLoader->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addLoader', \$calls[0][0]);
        \$this->assertEquals('addLoader', \$calls[1][0]);
        \$this->assertEquals('test_loader_1', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_loader_2', (string) \$calls[1][1][0]);
    }

    public function testMapperPassWithTwoTaggedLoadersWithPriority()
    {
        \$this->builder->setDefinition('twig.loader.chain', \$this->chainLoader);
        \$this->builder->register('test_loader_1')
            ->addTag('twig.loader', ['priority' => 100]);
        \$this->builder->register('test_loader_2')
            ->addTag('twig.loader', ['priority' => 200]);

        \$this->pass->process(\$this->builder);

        \$this->assertSame('twig.loader.chain', (string) \$this->builder->getAlias('twig.loader'));
        \$calls = \$this->chainLoader->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addLoader', \$calls[0][0]);
        \$this->assertEquals('addLoader', \$calls[1][0]);
        \$this->assertEquals('test_loader_2', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_loader_1', (string) \$calls[1][1][0]);
    }

    public function testMapperPassWithZeroTaggedLoaders()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->pass->process(\$this->builder);
    }
}
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigLoaderPassTest.php");
    }
}
