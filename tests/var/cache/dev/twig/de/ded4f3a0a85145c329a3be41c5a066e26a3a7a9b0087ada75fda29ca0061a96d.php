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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php */
class __TwigTemplate_ee542025fb33049415e381e1e3e312f9d5ce9d8fa7ec623d24d5016bfc7dc5ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CaseSensitiveClass;

class ResolveClassPassTest extends TestCase
{
    /**
     * @dataProvider provideValidClassId
     */
    public function testResolveClassFromId(\$serviceId)
    {
        \$container = new ContainerBuilder();
        \$def = \$container->register(\$serviceId);

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame(\$serviceId, \$def->getClass());
    }

    public function provideValidClassId()
    {
        yield ['Acme\\UnknownClass'];
        yield [CaseSensitiveClass::class];
    }

    /**
     * @dataProvider provideInvalidClassId
     */
    public function testWontResolveClassFromId(\$serviceId)
    {
        \$container = new ContainerBuilder();
        \$def = \$container->register(\$serviceId);

        (new ResolveClassPass())->process(\$container);

        \$this->assertNull(\$def->getClass());
    }

    public function provideInvalidClassId()
    {
        yield [\\stdClass::class];
        yield ['bar'];
        yield ['\\DateTime'];
    }

    public function testNonFqcnChildDefinition()
    {
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition('App\\Foo.child', new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame('App\\Foo', \$parent->getClass());
        \$this->assertNull(\$child->getClass());
    }

    public function testClassFoundChildDefinition()
    {
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition(self::class, new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame('App\\Foo', \$parent->getClass());
        \$this->assertSame(self::class, \$child->getClass());
    }

    public function testAmbiguousChildDefinition()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service definition \"App\\Foo\\Child\" has a parent but no class, and its name looks like a FQCN. Either the class is missing or you want to inherit it from the parent service. To resolve this ambiguity, please rename this service to a non-FQCN (e.g. using dots), or create the missing class.');
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition('App\\Foo\\Child', new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CaseSensitiveClass;

class ResolveClassPassTest extends TestCase
{
    /**
     * @dataProvider provideValidClassId
     */
    public function testResolveClassFromId(\$serviceId)
    {
        \$container = new ContainerBuilder();
        \$def = \$container->register(\$serviceId);

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame(\$serviceId, \$def->getClass());
    }

    public function provideValidClassId()
    {
        yield ['Acme\\UnknownClass'];
        yield [CaseSensitiveClass::class];
    }

    /**
     * @dataProvider provideInvalidClassId
     */
    public function testWontResolveClassFromId(\$serviceId)
    {
        \$container = new ContainerBuilder();
        \$def = \$container->register(\$serviceId);

        (new ResolveClassPass())->process(\$container);

        \$this->assertNull(\$def->getClass());
    }

    public function provideInvalidClassId()
    {
        yield [\\stdClass::class];
        yield ['bar'];
        yield ['\\DateTime'];
    }

    public function testNonFqcnChildDefinition()
    {
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition('App\\Foo.child', new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame('App\\Foo', \$parent->getClass());
        \$this->assertNull(\$child->getClass());
    }

    public function testClassFoundChildDefinition()
    {
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition(self::class, new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);

        \$this->assertSame('App\\Foo', \$parent->getClass());
        \$this->assertSame(self::class, \$child->getClass());
    }

    public function testAmbiguousChildDefinition()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service definition \"App\\Foo\\Child\" has a parent but no class, and its name looks like a FQCN. Either the class is missing or you want to inherit it from the parent service. To resolve this ambiguity, please rename this service to a non-FQCN (e.g. using dots), or create the missing class.');
        \$container = new ContainerBuilder();
        \$parent = \$container->register('App\\Foo', null);
        \$child = \$container->setDefinition('App\\Foo\\Child', new ChildDefinition('App\\Foo'));

        (new ResolveClassPass())->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveClassPassTest.php");
    }
}
