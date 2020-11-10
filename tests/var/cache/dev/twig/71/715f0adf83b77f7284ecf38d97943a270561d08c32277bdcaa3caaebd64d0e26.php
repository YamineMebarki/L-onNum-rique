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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php */
class __TwigTemplate_39ee0ada6da0defe673395974c53808f2d04a76ce0139696ad8eb223291ca543 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveInvalidReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveInvalidReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setArguments([
                new Reference('bar', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
            ])
            ->addMethodCall('foo', [new Reference('moo', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertSame([null, null], \$arguments);
        \$this->assertCount(0, \$def->getMethodCalls());
    }

    public function testProcessIgnoreInvalidArgumentInCollectionArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('baz');
        \$def = \$container
            ->register('foo')
            ->setArguments([
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    \$baz = new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new Reference('moo', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                ],
            ])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertSame([\$baz, null], \$arguments[0]);
    }

    public function testProcessKeepMethodCallOnInvalidArgumentInCollectionArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('baz');
        \$def = \$container
            ->register('foo')
            ->addMethodCall('foo', [
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    \$baz = new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new Reference('moo', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                ],
            ])
        ;

        \$this->process(\$container);

        \$calls = \$def->getMethodCalls();
        \$this->assertCount(1, \$def->getMethodCalls());
        \$this->assertSame([\$baz, null], \$calls[0][1][0]);
    }

    public function testProcessIgnoreNonExistentServices()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('bar', (string) \$arguments[0]);
    }

    public function testProcessRemovesPropertiesOnInvalid()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setProperty('foo', new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE))
        ;

        \$this->process(\$container);

        \$this->assertEquals([], \$def->getProperties());
    }

    public function testProcessRemovesArgumentsOnInvalid()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->addArgument([
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new ServiceClosureArgument(new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
                ],
            ])
        ;

        \$this->process(\$container);

        \$this->assertSame([[[]]], \$def->getArguments());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ResolveInvalidReferencesPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveInvalidReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveInvalidReferencesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setArguments([
                new Reference('bar', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
            ])
            ->addMethodCall('foo', [new Reference('moo', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertSame([null, null], \$arguments);
        \$this->assertCount(0, \$def->getMethodCalls());
    }

    public function testProcessIgnoreInvalidArgumentInCollectionArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('baz');
        \$def = \$container
            ->register('foo')
            ->setArguments([
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    \$baz = new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new Reference('moo', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                ],
            ])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertSame([\$baz, null], \$arguments[0]);
    }

    public function testProcessKeepMethodCallOnInvalidArgumentInCollectionArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('baz');
        \$def = \$container
            ->register('foo')
            ->addMethodCall('foo', [
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    \$baz = new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new Reference('moo', ContainerInterface::NULL_ON_INVALID_REFERENCE),
                ],
            ])
        ;

        \$this->process(\$container);

        \$calls = \$def->getMethodCalls();
        \$this->assertCount(1, \$def->getMethodCalls());
        \$this->assertSame([\$baz, null], \$calls[0][1][0]);
    }

    public function testProcessIgnoreNonExistentServices()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('bar', (string) \$arguments[0]);
    }

    public function testProcessRemovesPropertiesOnInvalid()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->setProperty('foo', new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE))
        ;

        \$this->process(\$container);

        \$this->assertEquals([], \$def->getProperties());
    }

    public function testProcessRemovesArgumentsOnInvalid()
    {
        \$container = new ContainerBuilder();
        \$def = \$container
            ->register('foo')
            ->addArgument([
                [
                    new Reference('bar', ContainerInterface::IGNORE_ON_INVALID_REFERENCE),
                    new ServiceClosureArgument(new Reference('baz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
                ],
            ])
        ;

        \$this->process(\$container);

        \$this->assertSame([[[]]], \$def->getArguments());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ResolveInvalidReferencesPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveInvalidReferencesPassTest.php");
    }
}
