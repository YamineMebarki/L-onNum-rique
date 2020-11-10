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

/* vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php */
class __TwigTemplate_912d110036d8412f4c6057734119a1628049e23d63c45b8aa404464a80dde819 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\DecoratorServicePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class DecoratorServicePassTest extends TestCase
{
    public function testProcessWithoutAlias()
    {
        \$container = new ContainerBuilder();
        \$fooDefinition = \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$fooExtendedDefinition = \$container
            ->register('foo.extended')
            ->setPublic(true)
            ->setDecoratedService('foo')
        ;
        \$barDefinition = \$container
            ->register('bar')
            ->setPublic(true)
        ;
        \$barExtendedDefinition = \$container
            ->register('bar.extended')
            ->setPublic(true)
            ->setDecoratedService('bar', 'bar.yoo')
        ;

        \$this->process(\$container);

        \$this->assertEquals('foo.extended', \$container->getAlias('foo'));
        \$this->assertFalse(\$container->getAlias('foo')->isPublic());

        \$this->assertEquals('bar.extended', \$container->getAlias('bar'));
        \$this->assertTrue(\$container->getAlias('bar')->isPublic());

        \$this->assertSame(\$fooDefinition, \$container->getDefinition('foo.extended.inner'));
        \$this->assertFalse(\$container->getDefinition('foo.extended.inner')->isPublic());

        \$this->assertSame(\$barDefinition, \$container->getDefinition('bar.yoo'));
        \$this->assertFalse(\$container->getDefinition('bar.yoo')->isPublic());

        \$this->assertNull(\$fooExtendedDefinition->getDecoratedService());
        \$this->assertNull(\$barExtendedDefinition->getDecoratedService());
    }

    public function testProcessWithAlias()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(true)
        ;
        \$container->setAlias('foo.alias', new Alias('foo', false));
        \$fooExtendedDefinition = \$container
            ->register('foo.extended')
            ->setPublic(true)
            ->setDecoratedService('foo.alias')
        ;

        \$this->process(\$container);

        \$this->assertEquals('foo.extended', \$container->getAlias('foo.alias'));
        \$this->assertFalse(\$container->getAlias('foo.alias')->isPublic());

        \$this->assertEquals('foo', \$container->getAlias('foo.extended.inner'));
        \$this->assertFalse(\$container->getAlias('foo.extended.inner')->isPublic());

        \$this->assertNull(\$fooExtendedDefinition->getDecoratedService());
    }

    public function testProcessWithPriority()
    {
        \$container = new ContainerBuilder();
        \$fooDefinition = \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$barDefinition = \$container
            ->register('bar')
            ->setPublic(true)
            ->setDecoratedService('foo')
        ;
        \$bazDefinition = \$container
            ->register('baz')
            ->setPublic(true)
            ->setDecoratedService('foo', null, 5)
        ;
        \$quxDefinition = \$container
            ->register('qux')
            ->setPublic(true)
            ->setDecoratedService('foo', null, 3)
        ;

        \$this->process(\$container);

        \$this->assertEquals('bar', \$container->getAlias('foo'));
        \$this->assertFalse(\$container->getAlias('foo')->isPublic());

        \$this->assertSame(\$fooDefinition, \$container->getDefinition('baz.inner'));
        \$this->assertFalse(\$container->getDefinition('baz.inner')->isPublic());

        \$this->assertEquals('qux', \$container->getAlias('bar.inner'));
        \$this->assertFalse(\$container->getAlias('bar.inner')->isPublic());

        \$this->assertEquals('baz', \$container->getAlias('qux.inner'));
        \$this->assertFalse(\$container->getAlias('qux.inner')->isPublic());

        \$this->assertNull(\$barDefinition->getDecoratedService());
        \$this->assertNull(\$bazDefinition->getDecoratedService());
        \$this->assertNull(\$quxDefinition->getDecoratedService());
    }

    public function testProcessMovesTagsFromDecoratedDefinitionToDecoratingDefinition()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setTags(['bar' => ['attr' => 'baz']])
        ;
        \$container
            ->register('baz')
            ->setTags(['foobar' => ['attr' => 'bar']])
            ->setDecoratedService('foo')
        ;

        \$this->process(\$container);

        \$this->assertEmpty(\$container->getDefinition('baz.inner')->getTags());
        \$this->assertEquals(['bar' => ['attr' => 'baz'], 'foobar' => ['attr' => 'bar']], \$container->getDefinition('baz')->getTags());
    }

    public function testProcessMovesTagsFromDecoratedDefinitionToDecoratingDefinitionMultipleTimes()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(true)
            ->setTags(['bar' => ['attr' => 'baz']])
        ;
        \$container
            ->register('deco1')
            ->setDecoratedService('foo', null, 50)
        ;
        \$container
            ->register('deco2')
            ->setDecoratedService('foo', null, 2)
        ;

        \$this->process(\$container);

        \$this->assertEmpty(\$container->getDefinition('deco1')->getTags());
        \$this->assertEquals(['bar' => ['attr' => 'baz']], \$container->getDefinition('deco2')->getTags());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$repeatedPass = new DecoratorServicePass();
        \$repeatedPass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\DecoratorServicePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class DecoratorServicePassTest extends TestCase
{
    public function testProcessWithoutAlias()
    {
        \$container = new ContainerBuilder();
        \$fooDefinition = \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$fooExtendedDefinition = \$container
            ->register('foo.extended')
            ->setPublic(true)
            ->setDecoratedService('foo')
        ;
        \$barDefinition = \$container
            ->register('bar')
            ->setPublic(true)
        ;
        \$barExtendedDefinition = \$container
            ->register('bar.extended')
            ->setPublic(true)
            ->setDecoratedService('bar', 'bar.yoo')
        ;

        \$this->process(\$container);

        \$this->assertEquals('foo.extended', \$container->getAlias('foo'));
        \$this->assertFalse(\$container->getAlias('foo')->isPublic());

        \$this->assertEquals('bar.extended', \$container->getAlias('bar'));
        \$this->assertTrue(\$container->getAlias('bar')->isPublic());

        \$this->assertSame(\$fooDefinition, \$container->getDefinition('foo.extended.inner'));
        \$this->assertFalse(\$container->getDefinition('foo.extended.inner')->isPublic());

        \$this->assertSame(\$barDefinition, \$container->getDefinition('bar.yoo'));
        \$this->assertFalse(\$container->getDefinition('bar.yoo')->isPublic());

        \$this->assertNull(\$fooExtendedDefinition->getDecoratedService());
        \$this->assertNull(\$barExtendedDefinition->getDecoratedService());
    }

    public function testProcessWithAlias()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(true)
        ;
        \$container->setAlias('foo.alias', new Alias('foo', false));
        \$fooExtendedDefinition = \$container
            ->register('foo.extended')
            ->setPublic(true)
            ->setDecoratedService('foo.alias')
        ;

        \$this->process(\$container);

        \$this->assertEquals('foo.extended', \$container->getAlias('foo.alias'));
        \$this->assertFalse(\$container->getAlias('foo.alias')->isPublic());

        \$this->assertEquals('foo', \$container->getAlias('foo.extended.inner'));
        \$this->assertFalse(\$container->getAlias('foo.extended.inner')->isPublic());

        \$this->assertNull(\$fooExtendedDefinition->getDecoratedService());
    }

    public function testProcessWithPriority()
    {
        \$container = new ContainerBuilder();
        \$fooDefinition = \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$barDefinition = \$container
            ->register('bar')
            ->setPublic(true)
            ->setDecoratedService('foo')
        ;
        \$bazDefinition = \$container
            ->register('baz')
            ->setPublic(true)
            ->setDecoratedService('foo', null, 5)
        ;
        \$quxDefinition = \$container
            ->register('qux')
            ->setPublic(true)
            ->setDecoratedService('foo', null, 3)
        ;

        \$this->process(\$container);

        \$this->assertEquals('bar', \$container->getAlias('foo'));
        \$this->assertFalse(\$container->getAlias('foo')->isPublic());

        \$this->assertSame(\$fooDefinition, \$container->getDefinition('baz.inner'));
        \$this->assertFalse(\$container->getDefinition('baz.inner')->isPublic());

        \$this->assertEquals('qux', \$container->getAlias('bar.inner'));
        \$this->assertFalse(\$container->getAlias('bar.inner')->isPublic());

        \$this->assertEquals('baz', \$container->getAlias('qux.inner'));
        \$this->assertFalse(\$container->getAlias('qux.inner')->isPublic());

        \$this->assertNull(\$barDefinition->getDecoratedService());
        \$this->assertNull(\$bazDefinition->getDecoratedService());
        \$this->assertNull(\$quxDefinition->getDecoratedService());
    }

    public function testProcessMovesTagsFromDecoratedDefinitionToDecoratingDefinition()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setTags(['bar' => ['attr' => 'baz']])
        ;
        \$container
            ->register('baz')
            ->setTags(['foobar' => ['attr' => 'bar']])
            ->setDecoratedService('foo')
        ;

        \$this->process(\$container);

        \$this->assertEmpty(\$container->getDefinition('baz.inner')->getTags());
        \$this->assertEquals(['bar' => ['attr' => 'baz'], 'foobar' => ['attr' => 'bar']], \$container->getDefinition('baz')->getTags());
    }

    public function testProcessMovesTagsFromDecoratedDefinitionToDecoratingDefinitionMultipleTimes()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(true)
            ->setTags(['bar' => ['attr' => 'baz']])
        ;
        \$container
            ->register('deco1')
            ->setDecoratedService('foo', null, 50)
        ;
        \$container
            ->register('deco2')
            ->setDecoratedService('foo', null, 2)
        ;

        \$this->process(\$container);

        \$this->assertEmpty(\$container->getDefinition('deco1')->getTags());
        \$this->assertEquals(['bar' => ['attr' => 'baz']], \$container->getDefinition('deco2')->getTags());
    }

    protected function process(ContainerBuilder \$container)
    {
        \$repeatedPass = new DecoratorServicePass();
        \$repeatedPass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/DecoratorServicePassTest.php");
    }
}
