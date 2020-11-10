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

/* vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php */
class __TwigTemplate_9996b1035ec244a22519b55b02c4dacf0c12ce50d9f64ba17ad5a8446505d278 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckCircularReferencesPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\Compiler;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CheckCircularReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testProcessWithAliases()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->setAlias('b', 'c');
        \$container->setAlias('c', 'a');

        \$this->process(\$container);
    }

    public function testProcessWithFactory()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();

        \$container
            ->register('a', 'stdClass')
            ->setFactory([new Reference('b'), 'getInstance']);

        \$container
            ->register('b', 'stdClass')
            ->setFactory([new Reference('a'), 'getInstance']);

        \$this->process(\$container);
    }

    public function testProcessDetectsIndirectCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('c'));
        \$container->register('c')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testProcessDetectsIndirectCircularReferenceWithFactory()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();

        \$container->register('a')->addArgument(new Reference('b'));

        \$container
            ->register('b', 'stdClass')
            ->setFactory([new Reference('c'), 'getInstance']);

        \$container->register('c')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testDeepCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('c'));
        \$container->register('c')->addArgument(new Reference('b'));

        \$this->process(\$container);
    }

    public function testProcessIgnoresMethodCalls()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addMethodCall('setA', [new Reference('a')]);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testProcessIgnoresLazyServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->setLazy(true)->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('a'));

        \$this->process(\$container);

        // just make sure that a lazily loaded service does not trigger a CircularReferenceException
        \$this->addToAssertionCount(1);
    }

    public function testProcessIgnoresIteratorArguments()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new IteratorArgument([new Reference('a')]));

        \$this->process(\$container);

        // just make sure that an IteratorArgument does not trigger a CircularReferenceException
        \$this->addToAssertionCount(1);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$compiler = new Compiler();
        \$passConfig = \$compiler->getPassConfig();
        \$passConfig->setOptimizationPasses([
            new AnalyzeServiceReferencesPass(true),
            new CheckCircularReferencesPass(),
        ]);
        \$passConfig->setRemovingPasses([]);

        \$compiler->compile(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckCircularReferencesPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\Compiler;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CheckCircularReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testProcessWithAliases()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->setAlias('b', 'c');
        \$container->setAlias('c', 'a');

        \$this->process(\$container);
    }

    public function testProcessWithFactory()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();

        \$container
            ->register('a', 'stdClass')
            ->setFactory([new Reference('b'), 'getInstance']);

        \$container
            ->register('b', 'stdClass')
            ->setFactory([new Reference('a'), 'getInstance']);

        \$this->process(\$container);
    }

    public function testProcessDetectsIndirectCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('c'));
        \$container->register('c')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testProcessDetectsIndirectCircularReferenceWithFactory()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();

        \$container->register('a')->addArgument(new Reference('b'));

        \$container
            ->register('b', 'stdClass')
            ->setFactory([new Reference('c'), 'getInstance']);

        \$container->register('c')->addArgument(new Reference('a'));

        \$this->process(\$container);
    }

    public function testDeepCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('c'));
        \$container->register('c')->addArgument(new Reference('b'));

        \$this->process(\$container);
    }

    public function testProcessIgnoresMethodCalls()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addMethodCall('setA', [new Reference('a')]);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testProcessIgnoresLazyServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->setLazy(true)->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new Reference('a'));

        \$this->process(\$container);

        // just make sure that a lazily loaded service does not trigger a CircularReferenceException
        \$this->addToAssertionCount(1);
    }

    public function testProcessIgnoresIteratorArguments()
    {
        \$container = new ContainerBuilder();
        \$container->register('a')->addArgument(new Reference('b'));
        \$container->register('b')->addArgument(new IteratorArgument([new Reference('a')]));

        \$this->process(\$container);

        // just make sure that an IteratorArgument does not trigger a CircularReferenceException
        \$this->addToAssertionCount(1);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$compiler = new Compiler();
        \$passConfig = \$compiler->getPassConfig();
        \$passConfig->setOptimizationPasses([
            new AnalyzeServiceReferencesPass(true),
            new CheckCircularReferencesPass(),
        ]);
        \$passConfig->setRemovingPasses([]);

        \$compiler->compile(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/CheckCircularReferencesPassTest.php");
    }
}
