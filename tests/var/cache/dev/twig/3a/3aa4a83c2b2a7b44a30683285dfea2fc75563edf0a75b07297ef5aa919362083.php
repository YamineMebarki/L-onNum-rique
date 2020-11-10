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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php */
class __TwigTemplate_3bb71b4551665e430ed4505193b2e5956b87793336b4ce65c33d426fea571dbf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php"));

        // line 1
        echo "<?php

class One
{
    public \$arg1;
    public \$arg2;

    public function __construct(\$arg1 = null, \$arg2 = null)
    {
        \$this->arg1 = \$arg1;
        \$this->arg2 = \$arg2;
    }
}

class Swift_DependencyContainerTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$container;

    protected function setUp()
    {
        \$this->container = new Swift_DependencyContainer();
    }

    public function testRegisterAndLookupValue()
    {
        \$this->container->register('foo')->asValue('bar');
        \$this->assertEquals('bar', \$this->container->lookup('foo'));
    }

    public function testHasReturnsTrueForRegisteredValue()
    {
        \$this->container->register('foo')->asValue('bar');
        \$this->assertTrue(\$this->container->has('foo'));
    }

    public function testHasReturnsFalseForUnregisteredValue()
    {
        \$this->assertFalse(\$this->container->has('foo'));
    }

    public function testRegisterAndLookupNewInstance()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->assertInstanceOf('One', \$this->container->lookup('one'));
    }

    public function testHasReturnsTrueForRegisteredInstance()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->assertTrue(\$this->container->has('one'));
    }

    public function testNewInstanceIsAlwaysNew()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$a = \$this->container->lookup('one');
        \$b = \$this->container->lookup('one');
        \$this->assertEquals(\$a, \$b);
    }

    public function testRegisterAndLookupSharedInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$this->assertInstanceOf('One', \$this->container->lookup('one'));
    }

    public function testHasReturnsTrueForSharedInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$this->assertTrue(\$this->container->has('one'));
    }

    public function testMultipleSharedInstancesAreSameInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$a = \$this->container->lookup('one');
        \$b = \$this->container->lookup('one');
        \$this->assertEquals(\$a, \$b);
    }

    public function testRegisterAndLookupArray()
    {
        \$this->container->register('One')->asArray();
        \$this->assertSame([], \$this->container->lookup('One'));
    }

    public function testNewInstanceWithDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One')
            ->withDependencies(['foo']);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
    }

    public function testNewInstanceWithMultipleDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asNewInstanceOf('One')
            ->withDependencies(['foo', 'bar']);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
        \$this->assertSame(42, \$obj->arg2);
    }

    public function testNewInstanceWithInjectedObjects()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies(['one', 'foo']);
        \$obj = \$this->container->lookup('two');
        \$this->assertEquals(\$this->container->lookup('one'), \$obj->arg1);
        \$this->assertSame('FOO', \$obj->arg2);
    }

    public function testNewInstanceWithAddConstructorValue()
    {
        \$this->container->register('one')->asNewInstanceOf('One')
            ->addConstructorValue('x')
            ->addConstructorValue(99);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('x', \$obj->arg1);
        \$this->assertSame(99, \$obj->arg2);
    }

    public function testNewInstanceWithAddConstructorLookup()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asNewInstanceOf('One')
            ->addConstructorLookup('foo')
            ->addConstructorLookup('bar');

        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
        \$this->assertSame(42, \$obj->arg2);
    }

    public function testResolvedDependenciesCanBeLookedUp()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies(['one', 'foo']);
        \$deps = \$this->container->createDependenciesFor('two');
        \$this->assertEquals(
            [\$this->container->lookup('one'), 'FOO'], \$deps
            );
    }

    public function testArrayOfDependenciesCanBeSpecified()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies([['one', 'foo'], 'foo']);

        \$obj = \$this->container->lookup('two');
        \$this->assertEquals([\$this->container->lookup('one'), 'FOO'], \$obj->arg1);
        \$this->assertSame('FOO', \$obj->arg2);
    }

    public function testArrayWithDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asArray('One')
            ->withDependencies(['foo', 'bar']);
        \$this->assertSame(['FOO', 42], \$this->container->lookup('one'));
    }

    public function testAliasCanBeSet()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asAliasOf('foo');

        \$this->assertSame('FOO', \$this->container->lookup('bar'));
    }

    public function testAliasOfAliasCanBeSet()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asAliasOf('foo');
        \$this->container->register('zip')->asAliasOf('bar');
        \$this->container->register('button')->asAliasOf('zip');

        \$this->assertSame('FOO', \$this->container->lookup('button'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class One
{
    public \$arg1;
    public \$arg2;

    public function __construct(\$arg1 = null, \$arg2 = null)
    {
        \$this->arg1 = \$arg1;
        \$this->arg2 = \$arg2;
    }
}

class Swift_DependencyContainerTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$container;

    protected function setUp()
    {
        \$this->container = new Swift_DependencyContainer();
    }

    public function testRegisterAndLookupValue()
    {
        \$this->container->register('foo')->asValue('bar');
        \$this->assertEquals('bar', \$this->container->lookup('foo'));
    }

    public function testHasReturnsTrueForRegisteredValue()
    {
        \$this->container->register('foo')->asValue('bar');
        \$this->assertTrue(\$this->container->has('foo'));
    }

    public function testHasReturnsFalseForUnregisteredValue()
    {
        \$this->assertFalse(\$this->container->has('foo'));
    }

    public function testRegisterAndLookupNewInstance()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->assertInstanceOf('One', \$this->container->lookup('one'));
    }

    public function testHasReturnsTrueForRegisteredInstance()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->assertTrue(\$this->container->has('one'));
    }

    public function testNewInstanceIsAlwaysNew()
    {
        \$this->container->register('one')->asNewInstanceOf('One');
        \$a = \$this->container->lookup('one');
        \$b = \$this->container->lookup('one');
        \$this->assertEquals(\$a, \$b);
    }

    public function testRegisterAndLookupSharedInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$this->assertInstanceOf('One', \$this->container->lookup('one'));
    }

    public function testHasReturnsTrueForSharedInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$this->assertTrue(\$this->container->has('one'));
    }

    public function testMultipleSharedInstancesAreSameInstance()
    {
        \$this->container->register('one')->asSharedInstanceOf('One');
        \$a = \$this->container->lookup('one');
        \$b = \$this->container->lookup('one');
        \$this->assertEquals(\$a, \$b);
    }

    public function testRegisterAndLookupArray()
    {
        \$this->container->register('One')->asArray();
        \$this->assertSame([], \$this->container->lookup('One'));
    }

    public function testNewInstanceWithDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One')
            ->withDependencies(['foo']);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
    }

    public function testNewInstanceWithMultipleDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asNewInstanceOf('One')
            ->withDependencies(['foo', 'bar']);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
        \$this->assertSame(42, \$obj->arg2);
    }

    public function testNewInstanceWithInjectedObjects()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies(['one', 'foo']);
        \$obj = \$this->container->lookup('two');
        \$this->assertEquals(\$this->container->lookup('one'), \$obj->arg1);
        \$this->assertSame('FOO', \$obj->arg2);
    }

    public function testNewInstanceWithAddConstructorValue()
    {
        \$this->container->register('one')->asNewInstanceOf('One')
            ->addConstructorValue('x')
            ->addConstructorValue(99);
        \$obj = \$this->container->lookup('one');
        \$this->assertSame('x', \$obj->arg1);
        \$this->assertSame(99, \$obj->arg2);
    }

    public function testNewInstanceWithAddConstructorLookup()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asNewInstanceOf('One')
            ->addConstructorLookup('foo')
            ->addConstructorLookup('bar');

        \$obj = \$this->container->lookup('one');
        \$this->assertSame('FOO', \$obj->arg1);
        \$this->assertSame(42, \$obj->arg2);
    }

    public function testResolvedDependenciesCanBeLookedUp()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies(['one', 'foo']);
        \$deps = \$this->container->createDependenciesFor('two');
        \$this->assertEquals(
            [\$this->container->lookup('one'), 'FOO'], \$deps
            );
    }

    public function testArrayOfDependenciesCanBeSpecified()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('one')->asNewInstanceOf('One');
        \$this->container->register('two')->asNewInstanceOf('One')
            ->withDependencies([['one', 'foo'], 'foo']);

        \$obj = \$this->container->lookup('two');
        \$this->assertEquals([\$this->container->lookup('one'), 'FOO'], \$obj->arg1);
        \$this->assertSame('FOO', \$obj->arg2);
    }

    public function testArrayWithDependencies()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asValue(42);
        \$this->container->register('one')->asArray('One')
            ->withDependencies(['foo', 'bar']);
        \$this->assertSame(['FOO', 42], \$this->container->lookup('one'));
    }

    public function testAliasCanBeSet()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asAliasOf('foo');

        \$this->assertSame('FOO', \$this->container->lookup('bar'));
    }

    public function testAliasOfAliasCanBeSet()
    {
        \$this->container->register('foo')->asValue('FOO');
        \$this->container->register('bar')->asAliasOf('foo');
        \$this->container->register('zip')->asAliasOf('bar');
        \$this->container->register('button')->asAliasOf('zip');

        \$this->assertSame('FOO', \$this->container->lookup('button'));
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/DependencyContainerTest.php");
    }
}
