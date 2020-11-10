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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php */
class __TwigTemplate_02e64434d6a6ffc4b0c2f43bcf9a1a58e2cd6398f63f15d5a2e3fcea29cd5e4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php"));

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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddProcessorsPass;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;

class AddProcessorsPassTest extends TestCase
{
    public function testHandlerProcessors()
    {
        \$container = \$this->getContainer();

        \$service = \$container->getDefinition('monolog.handler.test');
        \$calls = \$service->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals(array('pushProcessor', array(new Reference('test'))), \$calls[0]);

        \$service = \$container->getDefinition('handler_test');
        \$calls = \$service->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals(array('pushProcessor', array(new Reference('test2'))), \$calls[0]);
    }

    protected function getContainer()
    {
        \$container = new ContainerBuilder();
        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../../../Resources/config'));
        \$loader->load('monolog.xml');

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$container->setDefinition('monolog.handler.test', new Definition('%monolog.handler.null.class%', array(100, false)));
        \$container->setDefinition('handler_test', new Definition('%monolog.handler.null.class%', array(100, false)));
        \$container->setAlias('monolog.handler.test2', 'handler_test');
        \$definition->addMethodCall('pushHandler', array(new Reference('monolog.handler.test')));
        \$definition->addMethodCall('pushHandler', array(new Reference('monolog.handler.test2')));

        \$service = new Definition('TestClass', array('false', new Reference('logger')));
        \$service->addTag('monolog.processor', array('handler' => 'test'));
        \$container->setDefinition('test', \$service);

        \$service = new Definition('TestClass', array('false', new Reference('logger')));
        \$service->addTag('monolog.processor', array('handler' => 'test2'));
        \$container->setDefinition('test2', \$service);

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new AddProcessorsPass());
        \$container->compile();

        return \$container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php";
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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddProcessorsPass;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;

class AddProcessorsPassTest extends TestCase
{
    public function testHandlerProcessors()
    {
        \$container = \$this->getContainer();

        \$service = \$container->getDefinition('monolog.handler.test');
        \$calls = \$service->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals(array('pushProcessor', array(new Reference('test'))), \$calls[0]);

        \$service = \$container->getDefinition('handler_test');
        \$calls = \$service->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals(array('pushProcessor', array(new Reference('test2'))), \$calls[0]);
    }

    protected function getContainer()
    {
        \$container = new ContainerBuilder();
        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../../../Resources/config'));
        \$loader->load('monolog.xml');

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$container->setDefinition('monolog.handler.test', new Definition('%monolog.handler.null.class%', array(100, false)));
        \$container->setDefinition('handler_test', new Definition('%monolog.handler.null.class%', array(100, false)));
        \$container->setAlias('monolog.handler.test2', 'handler_test');
        \$definition->addMethodCall('pushHandler', array(new Reference('monolog.handler.test')));
        \$definition->addMethodCall('pushHandler', array(new Reference('monolog.handler.test2')));

        \$service = new Definition('TestClass', array('false', new Reference('logger')));
        \$service->addTag('monolog.processor', array('handler' => 'test'));
        \$container->setDefinition('test', \$service);

        \$service = new Definition('TestClass', array('false', new Reference('logger')));
        \$service->addTag('monolog.processor', array('handler' => 'test2'));
        \$container->setDefinition('test2', \$service);

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new AddProcessorsPass());
        \$container->compile();

        return \$container;
    }
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddProcessorsPassTest.php");
    }
}
