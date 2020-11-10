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

/* vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php */
class __TwigTemplate_43fbfca5d7aa5f9032853d2f49076624c6e6616d478e71ada8fe3f5a937d813f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AnalyzeServiceReferencesPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckExceptionOnInvalidReferenceBehaviorPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class CheckExceptionOnInvalidReferenceBehaviorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
        ;
        \$container->register('b', '\\stdClass');

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testProcessThrowsExceptionOnInvalidReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$container = new ContainerBuilder();

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
        ;

        \$this->process(\$container);
    }

    public function testProcessThrowsExceptionOnInvalidReferenceFromInlinedDefinition()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$container = new ContainerBuilder();

        \$def = new Definition();
        \$def->addArgument(new Reference('b'));

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(\$def)
        ;

        \$this->process(\$container);
    }

    public function testProcessDefinitionWithBindings()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('b')
            ->setBindings([new BoundArgument(new Reference('a'))])
        ;

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testWithErroredServiceLocator()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('The service \"foo\" in the container provided to \"bar\" has a dependency on a non-existent service \"baz\".');
        \$container = new ContainerBuilder();

        ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('baz')], 'bar');

        (new AnalyzeServiceReferencesPass())->process(\$container);
        (new InlineServiceDefinitionsPass())->process(\$container);
        \$this->process(\$container);
    }

    public function testWithErroredHiddenService()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('The service \"bar\" has a dependency on a non-existent service \"foo\".');
        \$container = new ContainerBuilder();

        ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('foo')], 'bar');

        (new AnalyzeServiceReferencesPass())->process(\$container);
        (new InlineServiceDefinitionsPass())->process(\$container);
        \$this->process(\$container);
    }

    private function process(ContainerBuilder \$container)
    {
        \$pass = new CheckExceptionOnInvalidReferenceBehaviorPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AnalyzeServiceReferencesPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckExceptionOnInvalidReferenceBehaviorPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class CheckExceptionOnInvalidReferenceBehaviorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
        ;
        \$container->register('b', '\\stdClass');

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testProcessThrowsExceptionOnInvalidReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$container = new ContainerBuilder();

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
        ;

        \$this->process(\$container);
    }

    public function testProcessThrowsExceptionOnInvalidReferenceFromInlinedDefinition()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$container = new ContainerBuilder();

        \$def = new Definition();
        \$def->addArgument(new Reference('b'));

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(\$def)
        ;

        \$this->process(\$container);
    }

    public function testProcessDefinitionWithBindings()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('b')
            ->setBindings([new BoundArgument(new Reference('a'))])
        ;

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testWithErroredServiceLocator()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('The service \"foo\" in the container provided to \"bar\" has a dependency on a non-existent service \"baz\".');
        \$container = new ContainerBuilder();

        ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('baz')], 'bar');

        (new AnalyzeServiceReferencesPass())->process(\$container);
        (new InlineServiceDefinitionsPass())->process(\$container);
        \$this->process(\$container);
    }

    public function testWithErroredHiddenService()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('The service \"bar\" has a dependency on a non-existent service \"foo\".');
        \$container = new ContainerBuilder();

        ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('foo')], 'bar');

        (new AnalyzeServiceReferencesPass())->process(\$container);
        (new InlineServiceDefinitionsPass())->process(\$container);
        \$this->process(\$container);
    }

    private function process(ContainerBuilder \$container)
    {
        \$pass = new CheckExceptionOnInvalidReferenceBehaviorPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/CheckExceptionOnInvalidReferenceBehaviorPassTest.php");
    }
}
