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

/* vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php */
class __TwigTemplate_4d6d9eda6bb4b9a8b4748cc74f12253d7b0c3d71552ccd7bf3f53f593f6893f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveParameterPlaceHoldersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class RemoveUnusedDefinitionsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setPublic(false)
        ;
        \$container
            ->register('moo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
        \$this->assertTrue(\$container->hasDefinition('moo'));
    }

    public function testProcessRemovesUnusedDefinitionsRecursively()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setArguments([new Reference('foo')])
            ->setPublic(false)
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
        \$this->assertFalse(\$container->hasDefinition('bar'));
    }

    public function testProcessWorksWithInlinedDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setArguments([new Definition(null, [new Reference('foo')])])
        ;

        \$this->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
    }

    public function testProcessWontRemovePrivateFactory()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('foo', 'stdClass')
            ->setFactory(['stdClass', 'getInstance'])
            ->setPublic(false);

        \$container
            ->register('bar', 'stdClass')
            ->setFactory([new Reference('foo'), 'getInstance'])
            ->setPublic(false);

        \$container
            ->register('foobar')
            ->addArgument(new Reference('bar'));

        \$this->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
        \$this->assertTrue(\$container->hasDefinition('foobar'));
    }

    public function testProcessConsiderEnvVariablesAsUsedEvenInPrivateServices()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('env(FOOBAR)', 'test');
        \$container
            ->register('foo')
            ->setArguments(['%env(FOOBAR)%'])
            ->setPublic(false)
        ;

        \$resolvePass = new ResolveParameterPlaceHoldersPass();
        \$resolvePass->process(\$container);

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));

        \$envCounters = \$container->getEnvCounters();
        \$this->assertArrayHasKey('FOOBAR', \$envCounters);
        \$this->assertSame(1, \$envCounters['FOOBAR']);
    }

    public function testProcessDoesNotErrorOnServicesThatDoNotHaveDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('defined')
            ->addArgument(new Reference('not.defined'))
            ->setPublic(true);

        \$container->set('not.defined', new \\StdClass());

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('not.defined'));
    }

    public function testProcessWorksWithClosureErrorsInDefinitions()
    {
        \$definition = new Definition();
        \$definition->addError(function () {
            return 'foo bar';
        });

        \$container = new ContainerBuilder();
        \$container
            ->setDefinition('foo', \$definition)
            ->setPublic(false)
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
    }

    protected function process(ContainerBuilder \$container)
    {
        (new RemoveUnusedDefinitionsPass())->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveParameterPlaceHoldersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class RemoveUnusedDefinitionsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setPublic(false)
        ;
        \$container
            ->register('moo')
            ->setArguments([new Reference('bar')])
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
        \$this->assertTrue(\$container->hasDefinition('moo'));
    }

    public function testProcessRemovesUnusedDefinitionsRecursively()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setArguments([new Reference('foo')])
            ->setPublic(false)
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
        \$this->assertFalse(\$container->hasDefinition('bar'));
    }

    public function testProcessWorksWithInlinedDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('foo')
            ->setPublic(false)
        ;
        \$container
            ->register('bar')
            ->setArguments([new Definition(null, [new Reference('foo')])])
        ;

        \$this->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
    }

    public function testProcessWontRemovePrivateFactory()
    {
        \$container = new ContainerBuilder();

        \$container
            ->register('foo', 'stdClass')
            ->setFactory(['stdClass', 'getInstance'])
            ->setPublic(false);

        \$container
            ->register('bar', 'stdClass')
            ->setFactory([new Reference('foo'), 'getInstance'])
            ->setPublic(false);

        \$container
            ->register('foobar')
            ->addArgument(new Reference('bar'));

        \$this->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('foo'));
        \$this->assertTrue(\$container->hasDefinition('bar'));
        \$this->assertTrue(\$container->hasDefinition('foobar'));
    }

    public function testProcessConsiderEnvVariablesAsUsedEvenInPrivateServices()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('env(FOOBAR)', 'test');
        \$container
            ->register('foo')
            ->setArguments(['%env(FOOBAR)%'])
            ->setPublic(false)
        ;

        \$resolvePass = new ResolveParameterPlaceHoldersPass();
        \$resolvePass->process(\$container);

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));

        \$envCounters = \$container->getEnvCounters();
        \$this->assertArrayHasKey('FOOBAR', \$envCounters);
        \$this->assertSame(1, \$envCounters['FOOBAR']);
    }

    public function testProcessDoesNotErrorOnServicesThatDoNotHaveDefinitions()
    {
        \$container = new ContainerBuilder();
        \$container
            ->register('defined')
            ->addArgument(new Reference('not.defined'))
            ->setPublic(true);

        \$container->set('not.defined', new \\StdClass());

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('not.defined'));
    }

    public function testProcessWorksWithClosureErrorsInDefinitions()
    {
        \$definition = new Definition();
        \$definition->addError(function () {
            return 'foo bar';
        });

        \$container = new ContainerBuilder();
        \$container
            ->setDefinition('foo', \$definition)
            ->setPublic(false)
        ;

        \$this->process(\$container);

        \$this->assertFalse(\$container->hasDefinition('foo'));
    }

    protected function process(ContainerBuilder \$container)
    {
        (new RemoveUnusedDefinitionsPass())->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/RemoveUnusedDefinitionsPassTest.php");
    }
}
