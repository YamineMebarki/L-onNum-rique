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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php */
class __TwigTemplate_b02b89bcc78553a468bc0211a86abbf8859f5d5ba90eb86b74a5ef32a7fcd9a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveReferencesToAliasesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveReferencesToAliasesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$def = \$container
            ->register('moo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('foo', (string) \$arguments[0]);
    }

    public function testProcessRecursively()
    {
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$container->setAlias('moo', 'bar');
        \$def = \$container
            ->register('foobar')
            ->setArguments([new Reference('moo')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('foo', (string) \$arguments[0]);
    }

    public function testAliasCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$container->setAlias('foo', 'bar');
        \$this->process(\$container);
    }

    public function testResolveFactory()
    {
        \$container = new ContainerBuilder();
        \$container->register('factory', 'Factory');
        \$container->setAlias('factory_alias', new Alias('factory'));
        \$foo = new Definition();
        \$foo->setFactory([new Reference('factory_alias'), 'createFoo']);
        \$container->setDefinition('foo', \$foo);
        \$bar = new Definition();
        \$bar->setFactory(['Factory', 'createFoo']);
        \$container->setDefinition('bar', \$bar);

        \$this->process(\$container);

        \$resolvedFooFactory = \$container->getDefinition('foo')->getFactory();
        \$resolvedBarFactory = \$container->getDefinition('bar')->getFactory();

        \$this->assertSame('factory', (string) \$resolvedFooFactory[0]);
        \$this->assertSame('Factory', (string) \$resolvedBarFactory[0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"deprecated_foo_alias\" service alias is deprecated. You should stop using it, as it will be removed in the future. It is being referenced by the \"alias\" alias.
     */
    public function testDeprecationNoticeWhenReferencedByAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass');

        \$aliasDeprecated = new Alias('foo');
        \$aliasDeprecated->setDeprecated(true);
        \$container->setAlias('deprecated_foo_alias', \$aliasDeprecated);

        \$alias = new Alias('deprecated_foo_alias');
        \$container->setAlias('alias', \$alias);

        \$this->process(\$container);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"foo_aliased\" service alias is deprecated. You should stop using it, as it will be removed in the future. It is being referenced by the \"definition\" service.
     */
    public function testDeprecationNoticeWhenReferencedByDefinition()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass');

        \$aliasDeprecated = new Alias('foo');
        \$aliasDeprecated->setDeprecated(true);
        \$container->setAlias('foo_aliased', \$aliasDeprecated);

        \$container
            ->register('definition')
            ->setArguments([new Reference('foo_aliased')])
        ;

        \$this->process(\$container);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ResolveReferencesToAliasesPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveReferencesToAliasesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveReferencesToAliasesPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$def = \$container
            ->register('moo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('foo', (string) \$arguments[0]);
    }

    public function testProcessRecursively()
    {
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$container->setAlias('moo', 'bar');
        \$def = \$container
            ->register('foobar')
            ->setArguments([new Reference('moo')])
        ;

        \$this->process(\$container);

        \$arguments = \$def->getArguments();
        \$this->assertEquals('foo', (string) \$arguments[0]);
    }

    public function testAliasCircularReference()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException');
        \$container = new ContainerBuilder();
        \$container->setAlias('bar', 'foo');
        \$container->setAlias('foo', 'bar');
        \$this->process(\$container);
    }

    public function testResolveFactory()
    {
        \$container = new ContainerBuilder();
        \$container->register('factory', 'Factory');
        \$container->setAlias('factory_alias', new Alias('factory'));
        \$foo = new Definition();
        \$foo->setFactory([new Reference('factory_alias'), 'createFoo']);
        \$container->setDefinition('foo', \$foo);
        \$bar = new Definition();
        \$bar->setFactory(['Factory', 'createFoo']);
        \$container->setDefinition('bar', \$bar);

        \$this->process(\$container);

        \$resolvedFooFactory = \$container->getDefinition('foo')->getFactory();
        \$resolvedBarFactory = \$container->getDefinition('bar')->getFactory();

        \$this->assertSame('factory', (string) \$resolvedFooFactory[0]);
        \$this->assertSame('Factory', (string) \$resolvedBarFactory[0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"deprecated_foo_alias\" service alias is deprecated. You should stop using it, as it will be removed in the future. It is being referenced by the \"alias\" alias.
     */
    public function testDeprecationNoticeWhenReferencedByAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass');

        \$aliasDeprecated = new Alias('foo');
        \$aliasDeprecated->setDeprecated(true);
        \$container->setAlias('deprecated_foo_alias', \$aliasDeprecated);

        \$alias = new Alias('deprecated_foo_alias');
        \$container->setAlias('alias', \$alias);

        \$this->process(\$container);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"foo_aliased\" service alias is deprecated. You should stop using it, as it will be removed in the future. It is being referenced by the \"definition\" service.
     */
    public function testDeprecationNoticeWhenReferencedByDefinition()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass');

        \$aliasDeprecated = new Alias('foo');
        \$aliasDeprecated->setDeprecated(true);
        \$container->setAlias('foo_aliased', \$aliasDeprecated);

        \$container
            ->register('definition')
            ->setArguments([new Reference('foo_aliased')])
        ;

        \$this->process(\$container);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ResolveReferencesToAliasesPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveReferencesToAliasesPassTest.php");
    }
}
