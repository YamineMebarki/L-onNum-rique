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

/* vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php */
class __TwigTemplate_f82c9d0eab0ad38d0a7be5a07da9038654e507c3dd5d75f0edc0b807b0094f3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * @group legacy
 */
class DelegatingEngineTest extends TestCase
{
    public function testSupportsRetrievesEngineFromTheContainer()
    {
        \$container = \$this->getContainerMock([
            'engine.first' => \$this->getEngineMock('template.php', false),
            'engine.second' => \$this->getEngineMock('template.php', true),
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);

        \$this->assertTrue(\$delegatingEngine->supports('template.php'));
    }

    public function testGetExistingEngine()
    {
        \$firstEngine = \$this->getEngineMock('template.php', false);
        \$secondEngine = \$this->getEngineMock('template.php', true);
        \$container = \$this->getContainerMock([
            'engine.first' => \$firstEngine,
            'engine.second' => \$secondEngine,
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);

        \$this->assertSame(\$secondEngine, \$delegatingEngine->getEngine('template.php'));
    }

    public function testGetInvalidEngine()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('No engine is able to work with the template \"template.php\"');
        \$firstEngine = \$this->getEngineMock('template.php', false);
        \$secondEngine = \$this->getEngineMock('template.php', false);
        \$container = \$this->getContainerMock([
            'engine.first' => \$firstEngine,
            'engine.second' => \$secondEngine,
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);
        \$delegatingEngine->getEngine('template.php');
    }

    public function testRenderResponseWithFrameworkEngine()
    {
        \$response = new Response();
        \$engine = \$this->getFrameworkEngineMock('template.php', true);
        \$engine->expects(\$this->once())
            ->method('renderResponse')
            ->with('template.php', ['foo' => 'bar'])
            ->willReturn(\$response);
        \$container = \$this->getContainerMock(['engine' => \$engine]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine']);

        \$this->assertSame(\$response, \$delegatingEngine->renderResponse('template.php', ['foo' => 'bar']));
    }

    public function testRenderResponseWithTemplatingEngine()
    {
        \$engine = \$this->getEngineMock('template.php', true);
        \$container = \$this->getContainerMock(['engine' => \$engine]);
        \$delegatingEngine = new DelegatingEngine(\$container, ['engine']);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', \$delegatingEngine->renderResponse('template.php', ['foo' => 'bar']));
    }

    private function getEngineMock(\$template, \$supports)
    {
        \$engine = \$this->getMockBuilder('Symfony\\Component\\Templating\\EngineInterface')->getMock();

        \$engine->expects(\$this->once())
            ->method('supports')
            ->with(\$template)
            ->willReturn(\$supports);

        return \$engine;
    }

    private function getFrameworkEngineMock(\$template, \$supports)
    {
        \$engine = \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface')->getMock();

        \$engine->expects(\$this->once())
            ->method('supports')
            ->with(\$template)
            ->willReturn(\$supports);

        return \$engine;
    }

    private function getContainerMock(\$services)
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();

        \$i = 0;
        foreach (\$services as \$id => \$service) {
            \$container->expects(\$this->at(\$i++))
                ->method('get')
                ->with(\$id)
                ->willReturn(\$service);
        }

        return \$container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * @group legacy
 */
class DelegatingEngineTest extends TestCase
{
    public function testSupportsRetrievesEngineFromTheContainer()
    {
        \$container = \$this->getContainerMock([
            'engine.first' => \$this->getEngineMock('template.php', false),
            'engine.second' => \$this->getEngineMock('template.php', true),
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);

        \$this->assertTrue(\$delegatingEngine->supports('template.php'));
    }

    public function testGetExistingEngine()
    {
        \$firstEngine = \$this->getEngineMock('template.php', false);
        \$secondEngine = \$this->getEngineMock('template.php', true);
        \$container = \$this->getContainerMock([
            'engine.first' => \$firstEngine,
            'engine.second' => \$secondEngine,
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);

        \$this->assertSame(\$secondEngine, \$delegatingEngine->getEngine('template.php'));
    }

    public function testGetInvalidEngine()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('No engine is able to work with the template \"template.php\"');
        \$firstEngine = \$this->getEngineMock('template.php', false);
        \$secondEngine = \$this->getEngineMock('template.php', false);
        \$container = \$this->getContainerMock([
            'engine.first' => \$firstEngine,
            'engine.second' => \$secondEngine,
        ]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine.first', 'engine.second']);
        \$delegatingEngine->getEngine('template.php');
    }

    public function testRenderResponseWithFrameworkEngine()
    {
        \$response = new Response();
        \$engine = \$this->getFrameworkEngineMock('template.php', true);
        \$engine->expects(\$this->once())
            ->method('renderResponse')
            ->with('template.php', ['foo' => 'bar'])
            ->willReturn(\$response);
        \$container = \$this->getContainerMock(['engine' => \$engine]);

        \$delegatingEngine = new DelegatingEngine(\$container, ['engine']);

        \$this->assertSame(\$response, \$delegatingEngine->renderResponse('template.php', ['foo' => 'bar']));
    }

    public function testRenderResponseWithTemplatingEngine()
    {
        \$engine = \$this->getEngineMock('template.php', true);
        \$container = \$this->getContainerMock(['engine' => \$engine]);
        \$delegatingEngine = new DelegatingEngine(\$container, ['engine']);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', \$delegatingEngine->renderResponse('template.php', ['foo' => 'bar']));
    }

    private function getEngineMock(\$template, \$supports)
    {
        \$engine = \$this->getMockBuilder('Symfony\\Component\\Templating\\EngineInterface')->getMock();

        \$engine->expects(\$this->once())
            ->method('supports')
            ->with(\$template)
            ->willReturn(\$supports);

        return \$engine;
    }

    private function getFrameworkEngineMock(\$template, \$supports)
    {
        \$engine = \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface')->getMock();

        \$engine->expects(\$this->once())
            ->method('supports')
            ->with(\$template)
            ->willReturn(\$supports);

        return \$engine;
    }

    private function getContainerMock(\$services)
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();

        \$i = 0;
        foreach (\$services as \$id => \$service) {
            \$container->expects(\$this->at(\$i++))
                ->method('get')
                ->with(\$id)
                ->willReturn(\$service);
        }

        return \$container;
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/DelegatingEngineTest.php");
    }
}
