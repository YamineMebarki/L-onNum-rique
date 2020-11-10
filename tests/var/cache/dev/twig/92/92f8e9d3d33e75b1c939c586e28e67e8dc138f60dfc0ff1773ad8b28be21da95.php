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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php */
class __TwigTemplate_929821fdcadccd90a4330db75d88f5df9779c9e73214d966d71ae8c8faff73c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveFactoryClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveFactoryClassPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory', 'Foo\\Bar');
        \$factory->setFactory([null, 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(['Foo\\Bar', 'create'], \$factory->getFactory());
    }

    public function testInlinedDefinitionFactoryIsProcessed()
    {
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory');
        \$factory->setFactory([(new Definition('Baz\\Qux'))->setFactory([null, 'getInstance']), 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(['Baz\\Qux', 'getInstance'], \$factory->getFactory()[0]->getFactory());
    }

    public function provideFulfilledFactories()
    {
        return [
            [['Foo\\Bar', 'create']],
            [[new Reference('foo'), 'create']],
            [[new Definition('Baz'), 'create']],
        ];
    }

    /**
     * @dataProvider provideFulfilledFactories
     */
    public function testIgnoresFulfilledFactories(\$factory)
    {
        \$container = new ContainerBuilder();
        \$definition = new Definition();
        \$definition->setFactory(\$factory);

        \$container->setDefinition('factory', \$definition);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(\$factory, \$container->getDefinition('factory')->getFactory());
    }

    public function testNotAnyClassThrowsException()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The \"factory\" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?');
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory');
        \$factory->setFactory([null, 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveFactoryClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveFactoryClassPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory', 'Foo\\Bar');
        \$factory->setFactory([null, 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(['Foo\\Bar', 'create'], \$factory->getFactory());
    }

    public function testInlinedDefinitionFactoryIsProcessed()
    {
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory');
        \$factory->setFactory([(new Definition('Baz\\Qux'))->setFactory([null, 'getInstance']), 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(['Baz\\Qux', 'getInstance'], \$factory->getFactory()[0]->getFactory());
    }

    public function provideFulfilledFactories()
    {
        return [
            [['Foo\\Bar', 'create']],
            [[new Reference('foo'), 'create']],
            [[new Definition('Baz'), 'create']],
        ];
    }

    /**
     * @dataProvider provideFulfilledFactories
     */
    public function testIgnoresFulfilledFactories(\$factory)
    {
        \$container = new ContainerBuilder();
        \$definition = new Definition();
        \$definition->setFactory(\$factory);

        \$container->setDefinition('factory', \$definition);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);

        \$this->assertSame(\$factory, \$container->getDefinition('factory')->getFactory());
    }

    public function testNotAnyClassThrowsException()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The \"factory\" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?');
        \$container = new ContainerBuilder();

        \$factory = \$container->register('factory');
        \$factory->setFactory([null, 'create']);

        \$pass = new ResolveFactoryClassPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveFactoryClassPassTest.php");
    }
}
