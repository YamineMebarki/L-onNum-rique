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

/* vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php */
class __TwigTemplate_f6a4bfc69379fa66438cc161c735348c1c729dcf1ca2c5e07267de06b6539c11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection\\WebProfilerExtension;
use Symfony\\Bundle\\WebProfilerBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class WebProfilerExtensionTest extends TestCase
{
    private \$kernel;
    /**
     * @var \\Symfony\\Component\\DependencyInjection\\Container
     */
    private \$container;

    public static function assertSaneContainer(Container \$container, \$message = '', \$knownPrivates = [])
    {
        \$errors = [];
        \$knownPrivates[] = 'debug.file_link_formatter.url_format';
        foreach (\$container->getServiceIds() as \$id) {
            if (\\in_array(\$id, \$knownPrivates, true)) { // for BC with 3.4
                continue;
            }
            try {
                \$container->get(\$id);
            } catch (\\Exception \$e) {
                \$errors[\$id] = \$e->getMessage();
            }
        }

        self::assertEquals([], \$errors, \$message);
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->kernel = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpKernel\\\\KernelInterface')->getMock();

        \$this->container = new ContainerBuilder();
        \$this->container->register('event_dispatcher', EventDispatcher::class)->setPublic(true);
        \$this->container->register('router', \$this->getMockClass('Symfony\\\\Component\\\\Routing\\\\RouterInterface'))->setPublic(true);
        \$this->container->register('twig', 'Twig\\Environment')->setPublic(true);
        \$this->container->register('twig_loader', 'Twig\\Loader\\ArrayLoader')->addArgument([])->setPublic(true);
        \$this->container->register('twig', 'Twig\\Environment')->addArgument(new Reference('twig_loader'))->setPublic(true);
        \$this->container->setParameter('kernel.bundles', []);
        \$this->container->setParameter('kernel.cache_dir', __DIR__);
        \$this->container->setParameter('kernel.debug', false);
        \$this->container->setParameter('kernel.project_dir', __DIR__);
        \$this->container->setParameter('kernel.charset', 'UTF-8');
        \$this->container->setParameter('debug.file_link_format', null);
        \$this->container->setParameter('profiler.class', ['Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\Profiler']);
        \$this->container->register('profiler', \$this->getMockClass('Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\Profiler'))
            ->setPublic(true)
            ->addArgument(new Definition(\$this->getMockClass('Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\ProfilerStorageInterface')));
        \$this->container->setParameter('data_collector.templates', []);
        \$this->container->set('kernel', \$this->kernel);
        \$this->container->addCompilerPass(new RegisterListenersPass());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \$this->container = null;
        \$this->kernel = null;
    }

    /**
     * @dataProvider getDebugModes
     */
    public function testDefaultConfig(\$debug)
    {
        \$this->container->setParameter('kernel.debug', \$debug);

        \$extension = new WebProfilerExtension();
        \$extension->load([[]], \$this->container);

        \$this->assertFalse(\$this->container->has('web_profiler.debug_toolbar'));

        \$this->assertSaneContainer(\$this->getCompiledContainer());
    }

    /**
     * @dataProvider getDebugModes
     */
    public function testToolbarConfig(\$toolbarEnabled, \$interceptRedirects, \$listenerInjected, \$listenerEnabled)
    {
        \$extension = new WebProfilerExtension();
        \$extension->load([['toolbar' => \$toolbarEnabled, 'intercept_redirects' => \$interceptRedirects]], \$this->container);

        \$this->assertSame(\$listenerInjected, \$this->container->has('web_profiler.debug_toolbar'));

        \$this->assertSaneContainer(\$this->getCompiledContainer(), '', ['web_profiler.csp.handler']);

        if (\$listenerInjected) {
            \$this->assertSame(\$listenerEnabled, \$this->container->get('web_profiler.debug_toolbar')->isEnabled());
        }
    }

    public function getDebugModes()
    {
        return [
            [false, false, false, false],
            [true,  false, true,  true],
            [false, true,  true,  false],
            [true,  true,  true,  true],
        ];
    }

    private function getCompiledContainer()
    {
        if (\$this->container->has('web_profiler.debug_toolbar')) {
            \$this->container->getDefinition('web_profiler.debug_toolbar')->setPublic(true);
        }
        \$this->container->compile();
        \$this->container->set('kernel', \$this->kernel);

        return \$this->container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection\\WebProfilerExtension;
use Symfony\\Bundle\\WebProfilerBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class WebProfilerExtensionTest extends TestCase
{
    private \$kernel;
    /**
     * @var \\Symfony\\Component\\DependencyInjection\\Container
     */
    private \$container;

    public static function assertSaneContainer(Container \$container, \$message = '', \$knownPrivates = [])
    {
        \$errors = [];
        \$knownPrivates[] = 'debug.file_link_formatter.url_format';
        foreach (\$container->getServiceIds() as \$id) {
            if (\\in_array(\$id, \$knownPrivates, true)) { // for BC with 3.4
                continue;
            }
            try {
                \$container->get(\$id);
            } catch (\\Exception \$e) {
                \$errors[\$id] = \$e->getMessage();
            }
        }

        self::assertEquals([], \$errors, \$message);
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->kernel = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpKernel\\\\KernelInterface')->getMock();

        \$this->container = new ContainerBuilder();
        \$this->container->register('event_dispatcher', EventDispatcher::class)->setPublic(true);
        \$this->container->register('router', \$this->getMockClass('Symfony\\\\Component\\\\Routing\\\\RouterInterface'))->setPublic(true);
        \$this->container->register('twig', 'Twig\\Environment')->setPublic(true);
        \$this->container->register('twig_loader', 'Twig\\Loader\\ArrayLoader')->addArgument([])->setPublic(true);
        \$this->container->register('twig', 'Twig\\Environment')->addArgument(new Reference('twig_loader'))->setPublic(true);
        \$this->container->setParameter('kernel.bundles', []);
        \$this->container->setParameter('kernel.cache_dir', __DIR__);
        \$this->container->setParameter('kernel.debug', false);
        \$this->container->setParameter('kernel.project_dir', __DIR__);
        \$this->container->setParameter('kernel.charset', 'UTF-8');
        \$this->container->setParameter('debug.file_link_format', null);
        \$this->container->setParameter('profiler.class', ['Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\Profiler']);
        \$this->container->register('profiler', \$this->getMockClass('Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\Profiler'))
            ->setPublic(true)
            ->addArgument(new Definition(\$this->getMockClass('Symfony\\\\Component\\\\HttpKernel\\\\Profiler\\\\ProfilerStorageInterface')));
        \$this->container->setParameter('data_collector.templates', []);
        \$this->container->set('kernel', \$this->kernel);
        \$this->container->addCompilerPass(new RegisterListenersPass());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \$this->container = null;
        \$this->kernel = null;
    }

    /**
     * @dataProvider getDebugModes
     */
    public function testDefaultConfig(\$debug)
    {
        \$this->container->setParameter('kernel.debug', \$debug);

        \$extension = new WebProfilerExtension();
        \$extension->load([[]], \$this->container);

        \$this->assertFalse(\$this->container->has('web_profiler.debug_toolbar'));

        \$this->assertSaneContainer(\$this->getCompiledContainer());
    }

    /**
     * @dataProvider getDebugModes
     */
    public function testToolbarConfig(\$toolbarEnabled, \$interceptRedirects, \$listenerInjected, \$listenerEnabled)
    {
        \$extension = new WebProfilerExtension();
        \$extension->load([['toolbar' => \$toolbarEnabled, 'intercept_redirects' => \$interceptRedirects]], \$this->container);

        \$this->assertSame(\$listenerInjected, \$this->container->has('web_profiler.debug_toolbar'));

        \$this->assertSaneContainer(\$this->getCompiledContainer(), '', ['web_profiler.csp.handler']);

        if (\$listenerInjected) {
            \$this->assertSame(\$listenerEnabled, \$this->container->get('web_profiler.debug_toolbar')->isEnabled());
        }
    }

    public function getDebugModes()
    {
        return [
            [false, false, false, false],
            [true,  false, true,  true],
            [false, true,  true,  false],
            [true,  true,  true,  true],
        ];
    }

    private function getCompiledContainer()
    {
        if (\$this->container->has('web_profiler.debug_toolbar')) {
            \$this->container->getDefinition('web_profiler.debug_toolbar')->setPublic(true);
        }
        \$this->container->compile();
        \$this->container->set('kernel', \$this->kernel);

        return \$this->container;
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/WebProfilerExtensionTest.php");
    }
}
