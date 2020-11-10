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

/* vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php */
class __TwigTemplate_17096254dfdf9b56cd7fd594cc09f0700e7f1b25a427d149f9b32906d4bac970 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Routing;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\Config\\Loader\\LoaderResolverInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class DelegatingLoaderTest extends TestCase
{
    public function testConstructorApi()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();
        new DelegatingLoader(\$controllerNameParser, new LoaderResolver());
        \$this->assertTrue(true, '__construct() takes a ControllerNameParser and LoaderResolverInterface respectively as its first and second argument.');
    }

    public function testLoadDefaultOptions()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loaderResolver = \$this->getMockBuilder(LoaderResolverInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loaderResolver->expects(\$this->once())
            ->method('resolve')
            ->willReturn(\$loader);

        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/', [], [], ['utf8' => false]));
        \$routeCollection->add('bar', new Route('/', [], [], ['foo' => 123]));

        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$routeCollection);

        \$delegatingLoader = new DelegatingLoader(\$controllerNameParser, \$loaderResolver, ['utf8' => true]);

        \$loadedRouteCollection = \$delegatingLoader->load('foo');
        \$this->assertCount(2, \$loadedRouteCollection);

        \$expected = [
            'compiler_class' => 'Symfony\\Component\\Routing\\RouteCompiler',
            'utf8' => false,
        ];
        \$this->assertSame(\$expected, \$routeCollection->get('foo')->getOptions());

        \$expected = [
            'compiler_class' => 'Symfony\\Component\\Routing\\RouteCompiler',
            'foo' => 123,
            'utf8' => true,
        ];
        \$this->assertSame(\$expected, \$routeCollection->get('bar')->getOptions());
    }

    /**
     * @group legacy
     * @expectedDeprecation Referencing controllers with foo:bar:baz is deprecated since Symfony 4.1, use \"some_parsed::controller\" instead.
     */
    public function testLoad()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$controllerNameParser->expects(\$this->once())
            ->method('parse')
            ->with('foo:bar:baz')
            ->willReturn('some_parsed::controller');

        \$loaderResolver = \$this->getMockBuilder(LoaderResolverInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loaderResolver->expects(\$this->once())
            ->method('resolve')
            ->willReturn(\$loader);

        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/', ['_controller' => 'foo:bar:baz']));
        \$routeCollection->add('bar', new Route('/', ['_controller' => 'foo::baz']));
        \$routeCollection->add('baz', new Route('/', ['_controller' => 'foo:baz']));

        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$routeCollection);

        \$delegatingLoader = new DelegatingLoader(\$controllerNameParser, \$loaderResolver);

        \$loadedRouteCollection = \$delegatingLoader->load('foo');
        \$this->assertCount(3, \$loadedRouteCollection);
        \$this->assertSame('some_parsed::controller', \$routeCollection->get('foo')->getDefault('_controller'));
        \$this->assertSame('foo::baz', \$routeCollection->get('bar')->getDefault('_controller'));
        \$this->assertSame('foo:baz', \$routeCollection->get('baz')->getDefault('_controller'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Routing;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\Config\\Loader\\LoaderResolverInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class DelegatingLoaderTest extends TestCase
{
    public function testConstructorApi()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();
        new DelegatingLoader(\$controllerNameParser, new LoaderResolver());
        \$this->assertTrue(true, '__construct() takes a ControllerNameParser and LoaderResolverInterface respectively as its first and second argument.');
    }

    public function testLoadDefaultOptions()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loaderResolver = \$this->getMockBuilder(LoaderResolverInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loaderResolver->expects(\$this->once())
            ->method('resolve')
            ->willReturn(\$loader);

        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/', [], [], ['utf8' => false]));
        \$routeCollection->add('bar', new Route('/', [], [], ['foo' => 123]));

        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$routeCollection);

        \$delegatingLoader = new DelegatingLoader(\$controllerNameParser, \$loaderResolver, ['utf8' => true]);

        \$loadedRouteCollection = \$delegatingLoader->load('foo');
        \$this->assertCount(2, \$loadedRouteCollection);

        \$expected = [
            'compiler_class' => 'Symfony\\Component\\Routing\\RouteCompiler',
            'utf8' => false,
        ];
        \$this->assertSame(\$expected, \$routeCollection->get('foo')->getOptions());

        \$expected = [
            'compiler_class' => 'Symfony\\Component\\Routing\\RouteCompiler',
            'foo' => 123,
            'utf8' => true,
        ];
        \$this->assertSame(\$expected, \$routeCollection->get('bar')->getOptions());
    }

    /**
     * @group legacy
     * @expectedDeprecation Referencing controllers with foo:bar:baz is deprecated since Symfony 4.1, use \"some_parsed::controller\" instead.
     */
    public function testLoad()
    {
        \$controllerNameParser = \$this->getMockBuilder(ControllerNameParser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$controllerNameParser->expects(\$this->once())
            ->method('parse')
            ->with('foo:bar:baz')
            ->willReturn('some_parsed::controller');

        \$loaderResolver = \$this->getMockBuilder(LoaderResolverInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loaderResolver->expects(\$this->once())
            ->method('resolve')
            ->willReturn(\$loader);

        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/', ['_controller' => 'foo:bar:baz']));
        \$routeCollection->add('bar', new Route('/', ['_controller' => 'foo::baz']));
        \$routeCollection->add('baz', new Route('/', ['_controller' => 'foo:baz']));

        \$loader->expects(\$this->once())
            ->method('load')
            ->willReturn(\$routeCollection);

        \$delegatingLoader = new DelegatingLoader(\$controllerNameParser, \$loaderResolver);

        \$loadedRouteCollection = \$delegatingLoader->load('foo');
        \$this->assertCount(3, \$loadedRouteCollection);
        \$this->assertSame('some_parsed::controller', \$routeCollection->get('foo')->getDefault('_controller'));
        \$this->assertSame('foo::baz', \$routeCollection->get('bar')->getDefault('_controller'));
        \$this->assertSame('foo:baz', \$routeCollection->get('baz')->getDefault('_controller'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Routing/DelegatingLoaderTest.php");
    }
}
