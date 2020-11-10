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

/* vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php */
class __TwigTemplate_138ae0dd30b69d4280bbadfc1e8e9ee90274b6a5596c8adea976cf5a8b7dbec8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Profiler;

use Symfony\\Bundle\\WebProfilerBundle\\Profiler\\TemplateManager;
use Symfony\\Bundle\\WebProfilerBundle\\Tests\\TestCase;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;
use Twig\\Environment;
use Twig\\Loader\\LoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * DevLaon for TemplateManager class.
 *
 * @author Artur Wielogórski <wodor@wodor.net>
 */
class TemplateManagerTest extends TestCase
{
    /**
     * @var Environment
     */
    protected \$twigEnvironment;

    /**
     * @var \\Symfony\\Component\\HttpKernel\\Profiler\\Profiler
     */
    protected \$profiler;

    /**
     * @var \\Symfony\\Bundle\\WebProfilerBundle\\Profiler\\TemplateManager
     */
    protected \$templateManager;

    protected function setUp(): void
    {
        parent::setUp();

        \$profiler = \$this->mockProfiler();
        \$twigEnvironment = \$this->mockTwigEnvironment();
        \$templates = [
            'data_collector.foo' => ['foo', 'FooBundle:Collector:foo'],
            'data_collector.bar' => ['bar', 'FooBundle:Collector:bar'],
            'data_collector.baz' => ['baz', 'FooBundle:Collector:baz'],
        ];

        \$this->templateManager = new TemplateManager(\$profiler, \$twigEnvironment, \$templates);
    }

    public function testGetNameOfInvalidTemplate()
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException');
        \$this->templateManager->getName(new Profile('token'), 'notexistingpanel');
    }

    /**
     * if template exists in both profile and profiler then its name should be returned.
     */
    public function testGetNameValidTemplate()
    {
        \$this->profiler->expects(\$this->any())
            ->method('has')
            ->withAnyParameters()
            ->willReturnCallback([\$this, 'profilerHasCallback']);

        \$this->assertEquals('FooBundle:Collector:foo.html.twig', \$this->templateManager->getName(new ProfileDummy(), 'foo'));
    }

    public function profilerHasCallback(\$panel)
    {
        switch (\$panel) {
            case 'foo':
            case 'bar':
                return true;
            default:
                return false;
        }
    }

    public function profileHasCollectorCallback(\$panel)
    {
        switch (\$panel) {
            case 'foo':
            case 'baz':
                return true;
            default:
                return false;
        }
    }

    protected function mockProfile()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profile')->disableOriginalConstructor()->getMock();
    }

    protected function mockTwigEnvironment()
    {
        \$this->twigEnvironment = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();

        \$this->twigEnvironment->expects(\$this->any())
            ->method('loadTemplate')
            ->willReturn('loadedTemplate');

        if (Environment::MAJOR_VERSION > 1) {
            \$loader = \$this->createMock(LoaderInterface::class);
            \$loader
                ->expects(\$this->any())
                ->method('exists')
                ->willReturn(true);
        } else {
            \$loader = \$this->createMock(SourceContextLoaderInterface::class);
        }

        \$this->twigEnvironment->expects(\$this->any())->method('getLoader')->willReturn(\$loader);

        return \$this->twigEnvironment;
    }

    protected function mockProfiler()
    {
        \$this->profiler = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        return \$this->profiler;
    }
}

class ProfileDummy extends Profile
{
    public function __construct()
    {
        parent::__construct('token');
    }

    public function hasCollector(\$name)
    {
        switch (\$name) {
            case 'foo':
            case 'bar':
                return true;
            default:
                return false;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Profiler;

use Symfony\\Bundle\\WebProfilerBundle\\Profiler\\TemplateManager;
use Symfony\\Bundle\\WebProfilerBundle\\Tests\\TestCase;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;
use Twig\\Environment;
use Twig\\Loader\\LoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * DevLaon for TemplateManager class.
 *
 * @author Artur Wielogórski <wodor@wodor.net>
 */
class TemplateManagerTest extends TestCase
{
    /**
     * @var Environment
     */
    protected \$twigEnvironment;

    /**
     * @var \\Symfony\\Component\\HttpKernel\\Profiler\\Profiler
     */
    protected \$profiler;

    /**
     * @var \\Symfony\\Bundle\\WebProfilerBundle\\Profiler\\TemplateManager
     */
    protected \$templateManager;

    protected function setUp(): void
    {
        parent::setUp();

        \$profiler = \$this->mockProfiler();
        \$twigEnvironment = \$this->mockTwigEnvironment();
        \$templates = [
            'data_collector.foo' => ['foo', 'FooBundle:Collector:foo'],
            'data_collector.bar' => ['bar', 'FooBundle:Collector:bar'],
            'data_collector.baz' => ['baz', 'FooBundle:Collector:baz'],
        ];

        \$this->templateManager = new TemplateManager(\$profiler, \$twigEnvironment, \$templates);
    }

    public function testGetNameOfInvalidTemplate()
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException');
        \$this->templateManager->getName(new Profile('token'), 'notexistingpanel');
    }

    /**
     * if template exists in both profile and profiler then its name should be returned.
     */
    public function testGetNameValidTemplate()
    {
        \$this->profiler->expects(\$this->any())
            ->method('has')
            ->withAnyParameters()
            ->willReturnCallback([\$this, 'profilerHasCallback']);

        \$this->assertEquals('FooBundle:Collector:foo.html.twig', \$this->templateManager->getName(new ProfileDummy(), 'foo'));
    }

    public function profilerHasCallback(\$panel)
    {
        switch (\$panel) {
            case 'foo':
            case 'bar':
                return true;
            default:
                return false;
        }
    }

    public function profileHasCollectorCallback(\$panel)
    {
        switch (\$panel) {
            case 'foo':
            case 'baz':
                return true;
            default:
                return false;
        }
    }

    protected function mockProfile()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profile')->disableOriginalConstructor()->getMock();
    }

    protected function mockTwigEnvironment()
    {
        \$this->twigEnvironment = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();

        \$this->twigEnvironment->expects(\$this->any())
            ->method('loadTemplate')
            ->willReturn('loadedTemplate');

        if (Environment::MAJOR_VERSION > 1) {
            \$loader = \$this->createMock(LoaderInterface::class);
            \$loader
                ->expects(\$this->any())
                ->method('exists')
                ->willReturn(true);
        } else {
            \$loader = \$this->createMock(SourceContextLoaderInterface::class);
        }

        \$this->twigEnvironment->expects(\$this->any())->method('getLoader')->willReturn(\$loader);

        return \$this->twigEnvironment;
    }

    protected function mockProfiler()
    {
        \$this->profiler = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        return \$this->profiler;
    }
}

class ProfileDummy extends Profile
{
    public function __construct()
    {
        parent::__construct('token');
    }

    public function hasCollector(\$name)
    {
        switch (\$name) {
            case 'foo':
            case 'bar':
                return true;
            default:
                return false;
        }
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/Profiler/TemplateManagerTest.php");
    }
}
