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

/* vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php */
class __TwigTemplate_2e7781735a9f8fb2b9efd6c6349cf98c7128f708dba53687e80926b99c057f78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooForCircularWithAddCalls;

\$public = 'public' === \$visibility;
\$container = new ContainerBuilder();

// same visibility for deps

\$container->register('foo', FooCircular::class)->setPublic(true)
   ->addArgument(new Reference('bar'));

\$container->register('bar', BarCircular::class)->setPublic(\$public)
    ->addMethodCall('addFoobar', [new Reference('foobar')]);

\$container->register('foobar', FoobarCircular::class)->setPublic(\$public)
    ->addArgument(new Reference('foo'));

// mixed visibility for deps

\$container->register('foo2', FooCircular::class)->setPublic(true)
   ->addArgument(new Reference('bar2'));

\$container->register('bar2', BarCircular::class)->setPublic(!\$public)
    ->addMethodCall('addFoobar', [new Reference('foobar2')]);

\$container->register('foobar2', FoobarCircular::class)->setPublic(\$public)
    ->addArgument(new Reference('foo2'));

// simple inline setter with internal reference

\$container->register('bar3', BarCircular::class)->setPublic(true)
    ->addMethodCall('addFoobar', [new Reference('foobar3'), new Reference('foobar3')]);

\$container->register('foobar3', FoobarCircular::class)->setPublic(\$public);

// loop with non-shared dep

\$container->register('foo4', 'stdClass')->setPublic(\$public)
    ->setShared(false)
    ->setProperty('foobar', new Reference('foobar4'));

\$container->register('foobar4', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('foo4'));

// loop on the constructor of a setter-injected dep with property

\$container->register('foo5', 'stdClass')->setPublic(true)
    ->setProperty('bar', new Reference('bar5'));

\$container->register('bar5', 'stdClass')->setPublic(\$public)
    ->addArgument(new Reference('foo5'))
    ->setProperty('foo', new Reference('foo5'));

// doctrine-like event system + some extra

\$container->register('manager', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection'));

\$container->register('logger', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection'))
    ->setProperty('handler', (new Definition('stdClass'))->addArgument(new Reference('manager')))
;
\$container->register('connection', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('dispatcher'))
    ->addArgument(new Reference('config'));

\$container->register('config', 'stdClass')->setPublic(false)
    ->setProperty('logger', new Reference('logger'));

\$container->register('dispatcher', 'stdClass')->setPublic(\$public)
    ->setLazy(\$public)
    ->setProperty('subscriber', new Reference('subscriber'));

\$container->register('subscriber', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('manager'));

// doctrine-like event system + some extra (bis)

\$container->register('manager2', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection2'));

\$container->register('logger2', 'stdClass')->setPublic(false)
    ->addArgument(new Reference('connection2'))
    ->setProperty('handler2', (new Definition('stdClass'))->addArgument(new Reference('manager2')))
;
\$container->register('connection2', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('dispatcher2'))
    ->addArgument(new Reference('config2'));

\$container->register('config2', 'stdClass')->setPublic(false)
    ->setProperty('logger2', new Reference('logger2'));

\$container->register('dispatcher2', 'stdClass')->setPublic(\$public)
    ->setLazy(\$public)
    ->setProperty('subscriber2', new Reference('subscriber2'));

\$container->register('subscriber2', 'stdClass')->setPublic(false)
    ->addArgument(new Reference('manager2'));

// doctrine-like event system with listener

\$container->register('manager3', 'stdClass')
    ->setLazy(true)
    ->setPublic(true)
    ->addArgument(new Reference('connection3'));

\$container->register('connection3', 'stdClass')
    ->setPublic(\$public)
    ->setProperty('listener', [new Reference('listener3')]);

\$container->register('listener3', 'stdClass')
    ->setPublic(true)
    ->setProperty('manager', new Reference('manager3'));

// doctrine-like event system with small differences

\$container->register('manager4', 'stdClass')
    ->setLazy(true)
    ->addArgument(new Reference('connection4'));

\$container->register('connection4', 'stdClass')
    ->setPublic(\$public)
    ->setProperty('listener', [new Reference('listener4')]);

\$container->register('listener4', 'stdClass')
    ->setPublic(true)
    ->addArgument(new Reference('manager4'));

// private service involved in a loop

\$container->register('foo6', 'stdClass')
    ->setPublic(true)
    ->setProperty('bar6', new Reference('bar6'));

\$container->register('bar6', 'stdClass')
    ->setPublic(false)
    ->addArgument(new Reference('foo6'));

\$container->register('baz6', 'stdClass')
    ->setPublic(true)
    ->setProperty('bar6', new Reference('bar6'));

// provided by Christian Schiffler

\$container
    ->register('root', 'stdClass')
    ->setArguments([new Reference('level2'), new Reference('multiuse1')])
    ->setPublic(true);

\$container
    ->register('level2', FooForCircularWithAddCalls::class)
    ->addMethodCall('call', [new Reference('level3')]);

\$container->register('multiuse1', 'stdClass');

\$container
    ->register('level3', 'stdClass')
    ->addArgument(new Reference('level4'));

\$container
    ->register('level4', 'stdClass')
    ->setArguments([new Reference('multiuse1'), new Reference('level5')]);

\$container
    ->register('level5', 'stdClass')
    ->addArgument(new Reference('level6'));

\$container
    ->register('level6', FooForCircularWithAddCalls::class)
    ->addMethodCall('call', [new Reference('level5')]);

return \$container;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooForCircularWithAddCalls;

\$public = 'public' === \$visibility;
\$container = new ContainerBuilder();

// same visibility for deps

\$container->register('foo', FooCircular::class)->setPublic(true)
   ->addArgument(new Reference('bar'));

\$container->register('bar', BarCircular::class)->setPublic(\$public)
    ->addMethodCall('addFoobar', [new Reference('foobar')]);

\$container->register('foobar', FoobarCircular::class)->setPublic(\$public)
    ->addArgument(new Reference('foo'));

// mixed visibility for deps

\$container->register('foo2', FooCircular::class)->setPublic(true)
   ->addArgument(new Reference('bar2'));

\$container->register('bar2', BarCircular::class)->setPublic(!\$public)
    ->addMethodCall('addFoobar', [new Reference('foobar2')]);

\$container->register('foobar2', FoobarCircular::class)->setPublic(\$public)
    ->addArgument(new Reference('foo2'));

// simple inline setter with internal reference

\$container->register('bar3', BarCircular::class)->setPublic(true)
    ->addMethodCall('addFoobar', [new Reference('foobar3'), new Reference('foobar3')]);

\$container->register('foobar3', FoobarCircular::class)->setPublic(\$public);

// loop with non-shared dep

\$container->register('foo4', 'stdClass')->setPublic(\$public)
    ->setShared(false)
    ->setProperty('foobar', new Reference('foobar4'));

\$container->register('foobar4', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('foo4'));

// loop on the constructor of a setter-injected dep with property

\$container->register('foo5', 'stdClass')->setPublic(true)
    ->setProperty('bar', new Reference('bar5'));

\$container->register('bar5', 'stdClass')->setPublic(\$public)
    ->addArgument(new Reference('foo5'))
    ->setProperty('foo', new Reference('foo5'));

// doctrine-like event system + some extra

\$container->register('manager', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection'));

\$container->register('logger', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection'))
    ->setProperty('handler', (new Definition('stdClass'))->addArgument(new Reference('manager')))
;
\$container->register('connection', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('dispatcher'))
    ->addArgument(new Reference('config'));

\$container->register('config', 'stdClass')->setPublic(false)
    ->setProperty('logger', new Reference('logger'));

\$container->register('dispatcher', 'stdClass')->setPublic(\$public)
    ->setLazy(\$public)
    ->setProperty('subscriber', new Reference('subscriber'));

\$container->register('subscriber', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('manager'));

// doctrine-like event system + some extra (bis)

\$container->register('manager2', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('connection2'));

\$container->register('logger2', 'stdClass')->setPublic(false)
    ->addArgument(new Reference('connection2'))
    ->setProperty('handler2', (new Definition('stdClass'))->addArgument(new Reference('manager2')))
;
\$container->register('connection2', 'stdClass')->setPublic(true)
    ->addArgument(new Reference('dispatcher2'))
    ->addArgument(new Reference('config2'));

\$container->register('config2', 'stdClass')->setPublic(false)
    ->setProperty('logger2', new Reference('logger2'));

\$container->register('dispatcher2', 'stdClass')->setPublic(\$public)
    ->setLazy(\$public)
    ->setProperty('subscriber2', new Reference('subscriber2'));

\$container->register('subscriber2', 'stdClass')->setPublic(false)
    ->addArgument(new Reference('manager2'));

// doctrine-like event system with listener

\$container->register('manager3', 'stdClass')
    ->setLazy(true)
    ->setPublic(true)
    ->addArgument(new Reference('connection3'));

\$container->register('connection3', 'stdClass')
    ->setPublic(\$public)
    ->setProperty('listener', [new Reference('listener3')]);

\$container->register('listener3', 'stdClass')
    ->setPublic(true)
    ->setProperty('manager', new Reference('manager3'));

// doctrine-like event system with small differences

\$container->register('manager4', 'stdClass')
    ->setLazy(true)
    ->addArgument(new Reference('connection4'));

\$container->register('connection4', 'stdClass')
    ->setPublic(\$public)
    ->setProperty('listener', [new Reference('listener4')]);

\$container->register('listener4', 'stdClass')
    ->setPublic(true)
    ->addArgument(new Reference('manager4'));

// private service involved in a loop

\$container->register('foo6', 'stdClass')
    ->setPublic(true)
    ->setProperty('bar6', new Reference('bar6'));

\$container->register('bar6', 'stdClass')
    ->setPublic(false)
    ->addArgument(new Reference('foo6'));

\$container->register('baz6', 'stdClass')
    ->setPublic(true)
    ->setProperty('bar6', new Reference('bar6'));

// provided by Christian Schiffler

\$container
    ->register('root', 'stdClass')
    ->setArguments([new Reference('level2'), new Reference('multiuse1')])
    ->setPublic(true);

\$container
    ->register('level2', FooForCircularWithAddCalls::class)
    ->addMethodCall('call', [new Reference('level3')]);

\$container->register('multiuse1', 'stdClass');

\$container
    ->register('level3', 'stdClass')
    ->addArgument(new Reference('level4'));

\$container
    ->register('level4', 'stdClass')
    ->setArguments([new Reference('multiuse1'), new Reference('level5')]);

\$container
    ->register('level5', 'stdClass')
    ->addArgument(new Reference('level6'));

\$container
    ->register('level6', FooForCircularWithAddCalls::class)
    ->addMethodCall('call', [new Reference('level5')]);

return \$container;
", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_almost_circular.php");
    }
}
