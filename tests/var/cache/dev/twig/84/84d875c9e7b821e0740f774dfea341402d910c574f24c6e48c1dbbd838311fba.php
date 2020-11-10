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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php */
class __TwigTemplate_a4d064dcec8accdbc88b257865961cc6e54b16c85192093e93b37daa8b180e71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ControllerArgumentValueResolverPass;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class ControllerArgumentValueResolverPassTest extends TestCase
{
    public function testServicesAreOrderedAccordingToPriority()
    {
        \$services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        \$expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->setDefinition('argument_resolver', \$definition);

        foreach (\$services as \$id => list(\$tag)) {
            \$container->register(\$id)->addTag('controller.argument_value_resolver', \$tag);
        }

        \$container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertFalse(\$container->hasDefinition('n1.traceable'));
        \$this->assertFalse(\$container->hasDefinition('n2.traceable'));
        \$this->assertFalse(\$container->hasDefinition('n3.traceable'));
    }

    public function testInDebugWithStopWatchDefinition()
    {
        \$services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        \$expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->register('debug.stopwatch', Stopwatch::class);
        \$container->setDefinition('argument_resolver', \$definition);

        foreach (\$services as \$id => list(\$tag)) {
            \$container->register(\$id)->addTag('controller.argument_value_resolver', \$tag);
        }

        \$container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertTrue(\$container->hasDefinition('debug.n1'));
        \$this->assertTrue(\$container->hasDefinition('debug.n2'));
        \$this->assertTrue(\$container->hasDefinition('debug.n3'));

        \$this->assertTrue(\$container->hasDefinition('n1'));
        \$this->assertTrue(\$container->hasDefinition('n2'));
        \$this->assertTrue(\$container->hasDefinition('n3'));
    }

    public function testInDebugWithouStopWatchDefinition()
    {
        \$expected = [new Reference('n1')];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->register('n1')->addTag('controller.argument_value_resolver');
        \$container->setDefinition('argument_resolver', \$definition);

        \$container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertFalse(\$container->hasDefinition('debug.n1'));
        \$this->assertTrue(\$container->hasDefinition('n1'));
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->setDefinition('argument_resolver', \$definition);

        \$container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals([], \$definition->getArgument(1)->getValues());
    }

    public function testNoArgumentResolver()
    {
        \$container = new ContainerBuilder();

        (new ControllerArgumentValueResolverPass())->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('argument_resolver'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ControllerArgumentValueResolverPass;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class ControllerArgumentValueResolverPassTest extends TestCase
{
    public function testServicesAreOrderedAccordingToPriority()
    {
        \$services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        \$expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->setDefinition('argument_resolver', \$definition);

        foreach (\$services as \$id => list(\$tag)) {
            \$container->register(\$id)->addTag('controller.argument_value_resolver', \$tag);
        }

        \$container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertFalse(\$container->hasDefinition('n1.traceable'));
        \$this->assertFalse(\$container->hasDefinition('n2.traceable'));
        \$this->assertFalse(\$container->hasDefinition('n3.traceable'));
    }

    public function testInDebugWithStopWatchDefinition()
    {
        \$services = [
            'n3' => [[]],
            'n1' => [['priority' => 200]],
            'n2' => [['priority' => 100]],
        ];

        \$expected = [
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->register('debug.stopwatch', Stopwatch::class);
        \$container->setDefinition('argument_resolver', \$definition);

        foreach (\$services as \$id => list(\$tag)) {
            \$container->register(\$id)->addTag('controller.argument_value_resolver', \$tag);
        }

        \$container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertTrue(\$container->hasDefinition('debug.n1'));
        \$this->assertTrue(\$container->hasDefinition('debug.n2'));
        \$this->assertTrue(\$container->hasDefinition('debug.n3'));

        \$this->assertTrue(\$container->hasDefinition('n1'));
        \$this->assertTrue(\$container->hasDefinition('n2'));
        \$this->assertTrue(\$container->hasDefinition('n3'));
    }

    public function testInDebugWithouStopWatchDefinition()
    {
        \$expected = [new Reference('n1')];

        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->register('n1')->addTag('controller.argument_value_resolver');
        \$container->setDefinition('argument_resolver', \$definition);

        \$container->setParameter('kernel.debug', true);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals(\$expected, \$definition->getArgument(1)->getValues());

        \$this->assertFalse(\$container->hasDefinition('debug.n1'));
        \$this->assertTrue(\$container->hasDefinition('n1'));
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        \$definition = new Definition(ArgumentResolver::class, [null, []]);
        \$container = new ContainerBuilder();
        \$container->setDefinition('argument_resolver', \$definition);

        \$container->setParameter('kernel.debug', false);

        (new ControllerArgumentValueResolverPass())->process(\$container);
        \$this->assertEquals([], \$definition->getArgument(1)->getValues());
    }

    public function testNoArgumentResolver()
    {
        \$container = new ContainerBuilder();

        (new ControllerArgumentValueResolverPass())->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('argument_resolver'));
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/ControllerArgumentValueResolverPassTest.php");
    }
}
