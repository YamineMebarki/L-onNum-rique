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

/* vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php */
class __TwigTemplate_8d34b53508d93adcc4258ee7eaad8c217edc7292ff02e1fd26792e01b2f9eb57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ObjectRouteLoaderTest extends TestCase
{
    /**
     * @group legacy
     * @expectedDeprecation Referencing service route loaders with a single colon is deprecated since Symfony 4.1. Use my_route_provider_service::loadRoutes instead.
     */
    public function testLoadCallsServiceAndReturnsCollectionWithLegacyNotation()
    {
        \$loader = new ObjectRouteLoaderForTest();

        // create a basic collection that will be returned
        \$collection = new RouteCollection();
        \$collection->add('foo', new Route('/foo'));

        \$loader->loaderMap = [
            'my_route_provider_service' => new RouteService(\$collection),
        ];

        \$actualRoutes = \$loader->load(
            'my_route_provider_service:loadRoutes',
            'service'
        );

        \$this->assertSame(\$collection, \$actualRoutes);
        // the service file should be listed as a resource
        \$this->assertNotEmpty(\$actualRoutes->getResources());
    }

    public function testLoadCallsServiceAndReturnsCollection()
    {
        \$loader = new ObjectRouteLoaderForTest();

        // create a basic collection that will be returned
        \$collection = new RouteCollection();
        \$collection->add('foo', new Route('/foo'));

        \$loader->loaderMap = [
            'my_route_provider_service' => new RouteService(\$collection),
        ];

        \$actualRoutes = \$loader->load(
            'my_route_provider_service::loadRoutes',
            'service'
        );

        \$this->assertSame(\$collection, \$actualRoutes);
        // the service file should be listed as a resource
        \$this->assertNotEmpty(\$actualRoutes->getResources());
    }

    /**
     * @dataProvider getBadResourceStrings
     */
    public function testExceptionWithoutSyntax(string \$resourceString): void
    {
        \$this->expectException('InvalidArgumentException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->load(\$resourceString);
    }

    public function getBadResourceStrings()
    {
        return [
            ['Foo:Bar:baz'],
            ['Foo::Bar::baz'],
            ['Foo:'],
            ['Foo::'],
            [':Foo'],
            ['::Foo'],
        ];
    }

    public function testExceptionOnNoObjectReturned()
    {
        \$this->expectException('LogicException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => 'NOT_AN_OBJECT'];
        \$loader->load('my_service::method');
    }

    public function testExceptionOnBadMethod()
    {
        \$this->expectException('BadMethodCallException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => new \\stdClass()];
        \$loader->load('my_service::method');
    }

    public function testExceptionOnMethodNotReturningCollection()
    {
        \$this->expectException('LogicException');
        \$service = \$this->getMockBuilder('stdClass')
            ->setMethods(['loadRoutes'])
            ->getMock();
        \$service->expects(\$this->once())
            ->method('loadRoutes')
            ->willReturn('NOT_A_COLLECTION');

        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => \$service];
        \$loader->load('my_service::loadRoutes');
    }
}

class ObjectRouteLoaderForTest extends ObjectRouteLoader
{
    public \$loaderMap = [];

    protected function getServiceObject(\$id)
    {
        return isset(\$this->loaderMap[\$id]) ? \$this->loaderMap[\$id] : null;
    }
}

class RouteService
{
    private \$collection;

    public function __construct(\$collection)
    {
        \$this->collection = \$collection;
    }

    public function loadRoutes()
    {
        return \$this->collection;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ObjectRouteLoaderTest extends TestCase
{
    /**
     * @group legacy
     * @expectedDeprecation Referencing service route loaders with a single colon is deprecated since Symfony 4.1. Use my_route_provider_service::loadRoutes instead.
     */
    public function testLoadCallsServiceAndReturnsCollectionWithLegacyNotation()
    {
        \$loader = new ObjectRouteLoaderForTest();

        // create a basic collection that will be returned
        \$collection = new RouteCollection();
        \$collection->add('foo', new Route('/foo'));

        \$loader->loaderMap = [
            'my_route_provider_service' => new RouteService(\$collection),
        ];

        \$actualRoutes = \$loader->load(
            'my_route_provider_service:loadRoutes',
            'service'
        );

        \$this->assertSame(\$collection, \$actualRoutes);
        // the service file should be listed as a resource
        \$this->assertNotEmpty(\$actualRoutes->getResources());
    }

    public function testLoadCallsServiceAndReturnsCollection()
    {
        \$loader = new ObjectRouteLoaderForTest();

        // create a basic collection that will be returned
        \$collection = new RouteCollection();
        \$collection->add('foo', new Route('/foo'));

        \$loader->loaderMap = [
            'my_route_provider_service' => new RouteService(\$collection),
        ];

        \$actualRoutes = \$loader->load(
            'my_route_provider_service::loadRoutes',
            'service'
        );

        \$this->assertSame(\$collection, \$actualRoutes);
        // the service file should be listed as a resource
        \$this->assertNotEmpty(\$actualRoutes->getResources());
    }

    /**
     * @dataProvider getBadResourceStrings
     */
    public function testExceptionWithoutSyntax(string \$resourceString): void
    {
        \$this->expectException('InvalidArgumentException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->load(\$resourceString);
    }

    public function getBadResourceStrings()
    {
        return [
            ['Foo:Bar:baz'],
            ['Foo::Bar::baz'],
            ['Foo:'],
            ['Foo::'],
            [':Foo'],
            ['::Foo'],
        ];
    }

    public function testExceptionOnNoObjectReturned()
    {
        \$this->expectException('LogicException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => 'NOT_AN_OBJECT'];
        \$loader->load('my_service::method');
    }

    public function testExceptionOnBadMethod()
    {
        \$this->expectException('BadMethodCallException');
        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => new \\stdClass()];
        \$loader->load('my_service::method');
    }

    public function testExceptionOnMethodNotReturningCollection()
    {
        \$this->expectException('LogicException');
        \$service = \$this->getMockBuilder('stdClass')
            ->setMethods(['loadRoutes'])
            ->getMock();
        \$service->expects(\$this->once())
            ->method('loadRoutes')
            ->willReturn('NOT_A_COLLECTION');

        \$loader = new ObjectRouteLoaderForTest();
        \$loader->loaderMap = ['my_service' => \$service];
        \$loader->load('my_service::loadRoutes');
    }
}

class ObjectRouteLoaderForTest extends ObjectRouteLoader
{
    public \$loaderMap = [];

    protected function getServiceObject(\$id)
    {
        return isset(\$this->loaderMap[\$id]) ? \$this->loaderMap[\$id] : null;
    }
}

class RouteService
{
    private \$collection;

    public function __construct(\$collection)
    {
        \$this->collection = \$collection;
    }

    public function loadRoutes()
    {
        return \$this->collection;
    }
}
", "vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/ObjectRouteLoaderTest.php");
    }
}
