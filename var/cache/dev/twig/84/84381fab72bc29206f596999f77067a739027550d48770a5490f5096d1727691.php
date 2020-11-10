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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php */
class __TwigTemplate_e994ebbd30d318ea5ffaf8e2d0af43b2dfb73c83fcd55205aae8cddfd45cf007 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveParameterPlaceHoldersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ResolveParameterPlaceHoldersPassTest extends TestCase
{
    private \$compilerPass;
    private \$container;
    private \$fooDefinition;

    protected function setUp(): void
    {
        \$this->compilerPass = new ResolveParameterPlaceHoldersPass();
        \$this->container = \$this->createContainerBuilder();
        \$this->compilerPass->process(\$this->container);
        \$this->fooDefinition = \$this->container->getDefinition('foo');
    }

    public function testClassParametersShouldBeResolved()
    {
        \$this->assertSame('Foo', \$this->fooDefinition->getClass());
    }

    public function testFactoryParametersShouldBeResolved()
    {
        \$this->assertSame(['FooFactory', 'getFoo'], \$this->fooDefinition->getFactory());
    }

    public function testArgumentParametersShouldBeResolved()
    {
        \$this->assertSame(['bar', ['bar' => 'baz']], \$this->fooDefinition->getArguments());
    }

    public function testMethodCallParametersShouldBeResolved()
    {
        \$this->assertSame([['foobar', ['bar', ['bar' => 'baz']]]], \$this->fooDefinition->getMethodCalls());
    }

    public function testPropertyParametersShouldBeResolved()
    {
        \$this->assertSame(['bar' => 'baz'], \$this->fooDefinition->getProperties());
    }

    public function testFileParametersShouldBeResolved()
    {
        \$this->assertSame('foo.php', \$this->fooDefinition->getFile());
    }

    public function testAliasParametersShouldBeResolved()
    {
        \$this->assertSame('foo', \$this->container->getAlias('bar')->__toString());
    }

    public function testBindingsShouldBeResolved()
    {
        list(\$boundValue) = \$this->container->getDefinition('foo')->getBindings()['\$baz']->getValues();

        \$this->assertSame(\$this->container->getParameterBag()->resolveValue('%env(BAZ)%'), \$boundValue);
    }

    private function createContainerBuilder()
    {
        \$containerBuilder = new ContainerBuilder();

        \$containerBuilder->setParameter('foo.class', 'Foo');
        \$containerBuilder->setParameter('foo.factory.class', 'FooFactory');
        \$containerBuilder->setParameter('foo.arg1', 'bar');
        \$containerBuilder->setParameter('foo.arg2', ['%foo.arg1%' => 'baz']);
        \$containerBuilder->setParameter('foo.method', 'foobar');
        \$containerBuilder->setParameter('foo.property.name', 'bar');
        \$containerBuilder->setParameter('foo.property.value', 'baz');
        \$containerBuilder->setParameter('foo.file', 'foo.php');
        \$containerBuilder->setParameter('alias.id', 'bar');

        \$fooDefinition = \$containerBuilder->register('foo', '%foo.class%');
        \$fooDefinition->setFactory(['%foo.factory.class%', 'getFoo']);
        \$fooDefinition->setArguments(['%foo.arg1%', ['%foo.arg1%' => 'baz']]);
        \$fooDefinition->addMethodCall('%foo.method%', ['%foo.arg1%', '%foo.arg2%']);
        \$fooDefinition->setProperty('%foo.property.name%', '%foo.property.value%');
        \$fooDefinition->setFile('%foo.file%');
        \$fooDefinition->setBindings(['\$baz' => '%env(BAZ)%']);

        \$containerBuilder->setAlias('%alias.id%', 'foo');

        return \$containerBuilder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveParameterPlaceHoldersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ResolveParameterPlaceHoldersPassTest extends TestCase
{
    private \$compilerPass;
    private \$container;
    private \$fooDefinition;

    protected function setUp(): void
    {
        \$this->compilerPass = new ResolveParameterPlaceHoldersPass();
        \$this->container = \$this->createContainerBuilder();
        \$this->compilerPass->process(\$this->container);
        \$this->fooDefinition = \$this->container->getDefinition('foo');
    }

    public function testClassParametersShouldBeResolved()
    {
        \$this->assertSame('Foo', \$this->fooDefinition->getClass());
    }

    public function testFactoryParametersShouldBeResolved()
    {
        \$this->assertSame(['FooFactory', 'getFoo'], \$this->fooDefinition->getFactory());
    }

    public function testArgumentParametersShouldBeResolved()
    {
        \$this->assertSame(['bar', ['bar' => 'baz']], \$this->fooDefinition->getArguments());
    }

    public function testMethodCallParametersShouldBeResolved()
    {
        \$this->assertSame([['foobar', ['bar', ['bar' => 'baz']]]], \$this->fooDefinition->getMethodCalls());
    }

    public function testPropertyParametersShouldBeResolved()
    {
        \$this->assertSame(['bar' => 'baz'], \$this->fooDefinition->getProperties());
    }

    public function testFileParametersShouldBeResolved()
    {
        \$this->assertSame('foo.php', \$this->fooDefinition->getFile());
    }

    public function testAliasParametersShouldBeResolved()
    {
        \$this->assertSame('foo', \$this->container->getAlias('bar')->__toString());
    }

    public function testBindingsShouldBeResolved()
    {
        list(\$boundValue) = \$this->container->getDefinition('foo')->getBindings()['\$baz']->getValues();

        \$this->assertSame(\$this->container->getParameterBag()->resolveValue('%env(BAZ)%'), \$boundValue);
    }

    private function createContainerBuilder()
    {
        \$containerBuilder = new ContainerBuilder();

        \$containerBuilder->setParameter('foo.class', 'Foo');
        \$containerBuilder->setParameter('foo.factory.class', 'FooFactory');
        \$containerBuilder->setParameter('foo.arg1', 'bar');
        \$containerBuilder->setParameter('foo.arg2', ['%foo.arg1%' => 'baz']);
        \$containerBuilder->setParameter('foo.method', 'foobar');
        \$containerBuilder->setParameter('foo.property.name', 'bar');
        \$containerBuilder->setParameter('foo.property.value', 'baz');
        \$containerBuilder->setParameter('foo.file', 'foo.php');
        \$containerBuilder->setParameter('alias.id', 'bar');

        \$fooDefinition = \$containerBuilder->register('foo', '%foo.class%');
        \$fooDefinition->setFactory(['%foo.factory.class%', 'getFoo']);
        \$fooDefinition->setArguments(['%foo.arg1%', ['%foo.arg1%' => 'baz']]);
        \$fooDefinition->addMethodCall('%foo.method%', ['%foo.arg1%', '%foo.arg2%']);
        \$fooDefinition->setProperty('%foo.property.name%', '%foo.property.value%');
        \$fooDefinition->setFile('%foo.file%');
        \$fooDefinition->setBindings(['\$baz' => '%env(BAZ)%']);

        \$containerBuilder->setAlias('%alias.id%', 'foo');

        return \$containerBuilder;
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveParameterPlaceHoldersPassTest.php");
    }
}
