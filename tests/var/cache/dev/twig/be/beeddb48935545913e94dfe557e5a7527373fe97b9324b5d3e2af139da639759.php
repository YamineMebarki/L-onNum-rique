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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php */
class __TwigTemplate_47b829e0b4f4aa8ce034eb2a0901e1212abba6cc3f26b91de00ec33550714729 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php"));

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
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\FixEmptyLoggerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class FixEmptyLoggerPassTest extends TestCase
{
    public function testProcess()
    {
        \$loggerChannelPass = \$this->getMockBuilder('Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass')->getMock();
        \$loggerChannelPass->expects(\$this->any())->method('getChannels')->will(\$this->returnValue(array('foo', 'bar')));

        \$container = new ContainerBuilder();
        \$container->register('monolog.logger.foo', 'Monolog\\Logger');
        \$container->register('monolog.logger.bar', 'Monolog\\Logger')->addMethodCall('pushHandler');

        \$pass = new FixEmptyLoggerPass(\$loggerChannelPass);
        \$pass->process(\$container);

        \$calls = \$container->getDefinition('monolog.logger.foo')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertSame('pushHandler', \$calls[0][0]);
        \$this->assertSame('monolog.handler.null_internal', (string) \$calls[0][1][0]);

        \$calls = \$container->getDefinition('monolog.logger.bar')->getMethodCalls();
        \$this->assertCount(1, \$calls);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php";
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
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\FixEmptyLoggerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class FixEmptyLoggerPassTest extends TestCase
{
    public function testProcess()
    {
        \$loggerChannelPass = \$this->getMockBuilder('Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass')->getMock();
        \$loggerChannelPass->expects(\$this->any())->method('getChannels')->will(\$this->returnValue(array('foo', 'bar')));

        \$container = new ContainerBuilder();
        \$container->register('monolog.logger.foo', 'Monolog\\Logger');
        \$container->register('monolog.logger.bar', 'Monolog\\Logger')->addMethodCall('pushHandler');

        \$pass = new FixEmptyLoggerPass(\$loggerChannelPass);
        \$pass->process(\$container);

        \$calls = \$container->getDefinition('monolog.logger.foo')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertSame('pushHandler', \$calls[0][0]);
        \$this->assertSame('monolog.handler.null_internal', (string) \$calls[0][1][0]);

        \$calls = \$container->getDefinition('monolog.logger.bar')->getMethodCalls();
        \$this->assertCount(1, \$calls);
    }
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/FixEmptyLoggerPassTest.php");
    }
}
