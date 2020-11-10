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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php */
class __TwigTemplate_2a5febda7ae89ff290e10c2d9443babda4af0e2913e72eabf5fa7cb62944967b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class TwigEnvironmentPassTest extends TestCase
{
    public function testPassWithTwoExtensionsWithPriority()
    {
        \$twigDefinition = new Definition('twig');
        \$twigDefinition->setPublic(true);
        \$builder = new ContainerBuilder();
        \$builder->setDefinition('twig', \$twigDefinition);
        \$pass = new TwigEnvironmentPass();

        \$definition = new Definition('test_extension_1');
        \$definition->addTag('twig.extension', ['priority' => 100]);
        \$builder->setDefinition('test_extension_1', \$definition);

        \$definition = new Definition('test_extension_2');
        \$definition->addTag('twig.extension', ['priority' => 200]);
        \$builder->setDefinition('test_extension_2', \$definition);

        \$pass->process(\$builder);
        \$calls = \$twigDefinition->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addExtension', \$calls[0][0]);
        \$this->assertEquals('addExtension', \$calls[1][0]);
        \$this->assertEquals('test_extension_2', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_extension_1', (string) \$calls[1][1][0]);
    }

    public function testTwigBridgeExtensionsAreRegisteredFirst()
    {
        \$container = new ContainerBuilder();
        \$twigDefinition = \$container->register('twig');
        \$container->register('other_extension', 'Foo\\Bar')
            ->addTag('twig.extension');
        \$container->register('twig_bridge_extension', FormExtension::class)
            ->addTag('twig.extension');

        \$twigEnvironmentPass = new TwigEnvironmentPass();
        \$twigEnvironmentPass->process(\$container);

        \$methodCalls = \$twigDefinition->getMethodCalls();
        \$this->assertCount(2, \$methodCalls);

        \$twigBridgeExtensionReference = \$methodCalls[0][1][0];
        \$this->assertInstanceOf(Reference::class, \$twigBridgeExtensionReference);
        \$this->assertSame('twig_bridge_extension', (string) \$twigBridgeExtensionReference);

        \$otherExtensionReference = \$methodCalls[1][1][0];
        \$this->assertInstanceOf(Reference::class, \$otherExtensionReference);
        \$this->assertSame('other_extension', (string) \$otherExtensionReference);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class TwigEnvironmentPassTest extends TestCase
{
    public function testPassWithTwoExtensionsWithPriority()
    {
        \$twigDefinition = new Definition('twig');
        \$twigDefinition->setPublic(true);
        \$builder = new ContainerBuilder();
        \$builder->setDefinition('twig', \$twigDefinition);
        \$pass = new TwigEnvironmentPass();

        \$definition = new Definition('test_extension_1');
        \$definition->addTag('twig.extension', ['priority' => 100]);
        \$builder->setDefinition('test_extension_1', \$definition);

        \$definition = new Definition('test_extension_2');
        \$definition->addTag('twig.extension', ['priority' => 200]);
        \$builder->setDefinition('test_extension_2', \$definition);

        \$pass->process(\$builder);
        \$calls = \$twigDefinition->getMethodCalls();
        \$this->assertCount(2, \$calls);
        \$this->assertEquals('addExtension', \$calls[0][0]);
        \$this->assertEquals('addExtension', \$calls[1][0]);
        \$this->assertEquals('test_extension_2', (string) \$calls[0][1][0]);
        \$this->assertEquals('test_extension_1', (string) \$calls[1][1][0]);
    }

    public function testTwigBridgeExtensionsAreRegisteredFirst()
    {
        \$container = new ContainerBuilder();
        \$twigDefinition = \$container->register('twig');
        \$container->register('other_extension', 'Foo\\Bar')
            ->addTag('twig.extension');
        \$container->register('twig_bridge_extension', FormExtension::class)
            ->addTag('twig.extension');

        \$twigEnvironmentPass = new TwigEnvironmentPass();
        \$twigEnvironmentPass->process(\$container);

        \$methodCalls = \$twigDefinition->getMethodCalls();
        \$this->assertCount(2, \$methodCalls);

        \$twigBridgeExtensionReference = \$methodCalls[0][1][0];
        \$this->assertInstanceOf(Reference::class, \$twigBridgeExtensionReference);
        \$this->assertSame('twig_bridge_extension', (string) \$twigBridgeExtensionReference);

        \$otherExtensionReference = \$methodCalls[1][1][0];
        \$this->assertInstanceOf(Reference::class, \$otherExtensionReference);
        \$this->assertSame('other_extension', (string) \$otherExtensionReference);
    }
}
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/TwigEnvironmentPassTest.php");
    }
}
