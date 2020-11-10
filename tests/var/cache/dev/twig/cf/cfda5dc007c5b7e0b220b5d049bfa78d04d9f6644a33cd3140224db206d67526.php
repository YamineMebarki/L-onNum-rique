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

/* vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php */
class __TwigTemplate_6372371cd0aa979bf83c9cacc4b446194eb780dc484e472e9f2cfe4c93da6a70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php"));

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

namespace Symfony\\Bundle\\DebugBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\DebugExtension;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;

class DebugExtensionTest extends TestCase
{
    public function testLoadWithoutConfiguration()
    {
        \$container = \$this->createContainer();
        \$container->registerExtension(new DebugExtension());
        \$container->loadFromExtension('debug', []);
        \$this->compileContainer(\$container);

        \$expectedTags = [
            [
                'id' => 'dump',
                'template' => '@Debug/Profiler/dump.html.twig',
                'priority' => 240,
            ],
        ];

        \$this->assertSame(\$expectedTags, \$container->getDefinition('data_collector.dump')->getTag('data_collector'));
    }

    public function testUnsetClosureFileInfoShouldBeRegisteredInVarCloner()
    {
        if (!method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$this->markTestSkipped('Method not available');
        }

        \$container = \$this->createContainer();
        \$container->registerExtension(new DebugExtension());
        \$container->loadFromExtension('debug', []);
        \$this->compileContainer(\$container);

        \$definition = \$container->getDefinition('var_dumper.cloner');

        \$called = false;
        foreach (\$definition->getMethodCalls() as \$call) {
            if ('addCasters' !== \$call[0]) {
                continue;
            }

            \$argument = \$call[1][0] ?? null;
            if (null === \$argument) {
                continue;
            }

            if (['Closure' => ReflectionCaster::class.'::unsetClosureFileInfo'] === \$argument) {
                \$called = true;
                break;
            }
        }

        \$this->assertTrue(\$called);
    }

    private function createContainer()
    {
        \$container = new ContainerBuilder(new ParameterBag([
            'kernel.cache_dir' => __DIR__,
            'kernel.charset' => 'UTF-8',
            'kernel.debug' => true,
            'kernel.bundles' => ['DebugBundle' => 'Symfony\\\\Bundle\\\\DebugBundle\\\\DebugBundle'],
        ]));

        return \$container;
    }

    private function compileContainer(ContainerBuilder \$container)
    {
        \$container->getCompilerPassConfig()->setOptimizationPasses([]);
        \$container->getCompilerPassConfig()->setRemovingPasses([]);
        \$container->getCompilerPassConfig()->setAfterRemovingPasses([]);
        \$container->compile();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php";
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

namespace Symfony\\Bundle\\DebugBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\DebugBundle\\DependencyInjection\\DebugExtension;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;

class DebugExtensionTest extends TestCase
{
    public function testLoadWithoutConfiguration()
    {
        \$container = \$this->createContainer();
        \$container->registerExtension(new DebugExtension());
        \$container->loadFromExtension('debug', []);
        \$this->compileContainer(\$container);

        \$expectedTags = [
            [
                'id' => 'dump',
                'template' => '@Debug/Profiler/dump.html.twig',
                'priority' => 240,
            ],
        ];

        \$this->assertSame(\$expectedTags, \$container->getDefinition('data_collector.dump')->getTag('data_collector'));
    }

    public function testUnsetClosureFileInfoShouldBeRegisteredInVarCloner()
    {
        if (!method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$this->markTestSkipped('Method not available');
        }

        \$container = \$this->createContainer();
        \$container->registerExtension(new DebugExtension());
        \$container->loadFromExtension('debug', []);
        \$this->compileContainer(\$container);

        \$definition = \$container->getDefinition('var_dumper.cloner');

        \$called = false;
        foreach (\$definition->getMethodCalls() as \$call) {
            if ('addCasters' !== \$call[0]) {
                continue;
            }

            \$argument = \$call[1][0] ?? null;
            if (null === \$argument) {
                continue;
            }

            if (['Closure' => ReflectionCaster::class.'::unsetClosureFileInfo'] === \$argument) {
                \$called = true;
                break;
            }
        }

        \$this->assertTrue(\$called);
    }

    private function createContainer()
    {
        \$container = new ContainerBuilder(new ParameterBag([
            'kernel.cache_dir' => __DIR__,
            'kernel.charset' => 'UTF-8',
            'kernel.debug' => true,
            'kernel.bundles' => ['DebugBundle' => 'Symfony\\\\Bundle\\\\DebugBundle\\\\DebugBundle'],
        ]));

        return \$container;
    }

    private function compileContainer(ContainerBuilder \$container)
    {
        \$container->getCompilerPassConfig()->setOptimizationPasses([]);
        \$container->getCompilerPassConfig()->setRemovingPasses([]);
        \$container->getCompilerPassConfig()->setAfterRemovingPasses([]);
        \$container->compile();
    }
}
", "vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/Tests/DependencyInjection/DebugExtensionTest.php");
    }
}
