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

/* vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php */
class __TwigTemplate_48db75c31309cd7011d0848df43f0945589038b60644ecbd92f9d58c5df17179 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AnalyzeServiceReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AnalyzeServiceReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$a = \$container
            ->register('a')
            ->addArgument(\$ref1 = new Reference('b'))
        ;

        \$b = \$container
            ->register('b')
            ->addMethodCall('setA', [\$ref2 = new Reference('a')])
        ;

        \$c = \$container
            ->register('c')
            ->addArgument(\$ref3 = new Reference('a'))
            ->addArgument(\$ref4 = new Reference('b'))
        ;

        \$d = \$container
            ->register('d')
            ->setProperty('foo', \$ref5 = new Reference('b'))
        ;

        \$e = \$container
            ->register('e')
            ->setConfigurator([\$ref6 = new Reference('b'), 'methodName'])
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(4, \$edges = \$graph->getNode('b')->getInEdges());

        \$this->assertSame(\$ref1, \$edges[0]->getValue());
        \$this->assertSame(\$ref4, \$edges[1]->getValue());
        \$this->assertSame(\$ref5, \$edges[2]->getValue());
        \$this->assertSame(\$ref6, \$edges[3]->getValue());
    }

    public function testProcessMarksEdgesLazyWhenReferencedServiceIsLazy()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
            ->setLazy(true)
            ->addArgument(\$ref1 = new Reference('b'))
        ;

        \$container
            ->register('b')
            ->addArgument(\$ref2 = new Reference('a'))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$graph->getNode('b')->getInEdges());
        \$this->assertCount(1, \$edges = \$graph->getNode('a')->getInEdges());

        \$this->assertSame(\$ref2, \$edges[0]->getValue());
        \$this->assertTrue(\$edges[0]->isLazy());
    }

    public function testProcessMarksEdgesLazyWhenReferencedFromIteratorArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('a');
        \$container->register('b');

        \$container
            ->register('c')
            ->addArgument(\$ref1 = new Reference('a'))
            ->addArgument(new IteratorArgument([\$ref2 = new Reference('b')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$graph->getNode('a')->getInEdges());
        \$this->assertCount(1, \$graph->getNode('b')->getInEdges());
        \$this->assertCount(2, \$edges = \$graph->getNode('c')->getOutEdges());

        \$this->assertSame(\$ref1, \$edges[0]->getValue());
        \$this->assertFalse(\$edges[0]->isLazy());
        \$this->assertSame(\$ref2, \$edges[1]->getValue());
        \$this->assertTrue(\$edges[1]->isLazy());
    }

    public function testProcessDetectsReferencesFromInlinedDefinitions()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$container
            ->register('b')
            ->addArgument(new Definition(null, [\$ref = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
        \$this->assertSame(\$ref, \$refs[0]->getValue());
    }

    public function testProcessDetectsReferencesFromIteratorArguments()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$container
            ->register('b')
            ->addArgument(new IteratorArgument([\$ref = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
        \$this->assertSame(\$ref, \$refs[0]->getValue());
    }

    public function testProcessDetectsReferencesFromInlinedFactoryDefinitions()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$factory = new Definition();
        \$factory->setFactory([new Reference('a'), 'a']);

        \$container
            ->register('b')
            ->addArgument(\$factory)
        ;

        \$graph = \$this->process(\$container);

        \$this->assertTrue(\$graph->hasNode('a'));
        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
    }

    public function testProcessDoesNotSaveDuplicateReferences()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;
        \$container
            ->register('b')
            ->addArgument(new Definition(null, [\$ref1 = new Reference('a')]))
            ->addArgument(new Definition(null, [\$ref2 = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(2, \$graph->getNode('a')->getInEdges());
    }

    public function testProcessDetectsFactoryReferences()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('foo', 'stdClass')
            ->setFactory(['stdClass', 'getInstance']);

        \$container
            ->register('bar', 'stdClass')
            ->setFactory([new Reference('foo'), 'getInstance']);

        \$graph = \$this->process(\$container);

        \$this->assertTrue(\$graph->hasNode('foo'));
        \$this->assertCount(1, \$graph->getNode('foo')->getInEdges());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new AnalyzeServiceReferencesPass();
        \$pass->process(\$container);

        return \$container->getCompiler()->getServiceReferenceGraph();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AnalyzeServiceReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AnalyzeServiceReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$a = \$container
            ->register('a')
            ->addArgument(\$ref1 = new Reference('b'))
        ;

        \$b = \$container
            ->register('b')
            ->addMethodCall('setA', [\$ref2 = new Reference('a')])
        ;

        \$c = \$container
            ->register('c')
            ->addArgument(\$ref3 = new Reference('a'))
            ->addArgument(\$ref4 = new Reference('b'))
        ;

        \$d = \$container
            ->register('d')
            ->setProperty('foo', \$ref5 = new Reference('b'))
        ;

        \$e = \$container
            ->register('e')
            ->setConfigurator([\$ref6 = new Reference('b'), 'methodName'])
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(4, \$edges = \$graph->getNode('b')->getInEdges());

        \$this->assertSame(\$ref1, \$edges[0]->getValue());
        \$this->assertSame(\$ref4, \$edges[1]->getValue());
        \$this->assertSame(\$ref5, \$edges[2]->getValue());
        \$this->assertSame(\$ref6, \$edges[3]->getValue());
    }

    public function testProcessMarksEdgesLazyWhenReferencedServiceIsLazy()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
            ->setLazy(true)
            ->addArgument(\$ref1 = new Reference('b'))
        ;

        \$container
            ->register('b')
            ->addArgument(\$ref2 = new Reference('a'))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$graph->getNode('b')->getInEdges());
        \$this->assertCount(1, \$edges = \$graph->getNode('a')->getInEdges());

        \$this->assertSame(\$ref2, \$edges[0]->getValue());
        \$this->assertTrue(\$edges[0]->isLazy());
    }

    public function testProcessMarksEdgesLazyWhenReferencedFromIteratorArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('a');
        \$container->register('b');

        \$container
            ->register('c')
            ->addArgument(\$ref1 = new Reference('a'))
            ->addArgument(new IteratorArgument([\$ref2 = new Reference('b')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$graph->getNode('a')->getInEdges());
        \$this->assertCount(1, \$graph->getNode('b')->getInEdges());
        \$this->assertCount(2, \$edges = \$graph->getNode('c')->getOutEdges());

        \$this->assertSame(\$ref1, \$edges[0]->getValue());
        \$this->assertFalse(\$edges[0]->isLazy());
        \$this->assertSame(\$ref2, \$edges[1]->getValue());
        \$this->assertTrue(\$edges[1]->isLazy());
    }

    public function testProcessDetectsReferencesFromInlinedDefinitions()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$container
            ->register('b')
            ->addArgument(new Definition(null, [\$ref = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
        \$this->assertSame(\$ref, \$refs[0]->getValue());
    }

    public function testProcessDetectsReferencesFromIteratorArguments()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$container
            ->register('b')
            ->addArgument(new IteratorArgument([\$ref = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
        \$this->assertSame(\$ref, \$refs[0]->getValue());
    }

    public function testProcessDetectsReferencesFromInlinedFactoryDefinitions()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;

        \$factory = new Definition();
        \$factory->setFactory([new Reference('a'), 'a']);

        \$container
            ->register('b')
            ->addArgument(\$factory)
        ;

        \$graph = \$this->process(\$container);

        \$this->assertTrue(\$graph->hasNode('a'));
        \$this->assertCount(1, \$refs = \$graph->getNode('a')->getInEdges());
    }

    public function testProcessDoesNotSaveDuplicateReferences()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a')
        ;
        \$container
            ->register('b')
            ->addArgument(new Definition(null, [\$ref1 = new Reference('a')]))
            ->addArgument(new Definition(null, [\$ref2 = new Reference('a')]))
        ;

        \$graph = \$this->process(\$container);

        \$this->assertCount(2, \$graph->getNode('a')->getInEdges());
    }

    public function testProcessDetectsFactoryReferences()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('foo', 'stdClass')
            ->setFactory(['stdClass', 'getInstance']);

        \$container
            ->register('bar', 'stdClass')
            ->setFactory([new Reference('foo'), 'getInstance']);

        \$graph = \$this->process(\$container);

        \$this->assertTrue(\$graph->hasNode('foo'));
        \$this->assertCount(1, \$graph->getNode('foo')->getInEdges());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new AnalyzeServiceReferencesPass();
        \$pass->process(\$container);

        return \$container->getCompiler()->getServiceReferenceGraph();
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/AnalyzeServiceReferencesPassTest.php");
    }
}
