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

/* vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php */
class __TwigTemplate_a62a5bd6a5cc2f7c080d889c7c0de83ae55e241e2072a8219a746ebbca2058ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php"));

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
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\Loader\\YamlFileLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class YamlFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new YamlFileLoader(\$this->getMockBuilder('Symfony\\Component\\Config\\FileLocator')->getMock());

        \$this->assertTrue(\$loader->supports('foo.yml'), '->supports() returns true if the resource is loadable');
        \$this->assertTrue(\$loader->supports('foo.yaml'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$loader->supports('foo.yml', 'yaml'), '->supports() checks the resource type if specified');
        \$this->assertTrue(\$loader->supports('foo.yaml', 'yaml'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$loader->supports('foo.yml', 'foo'), '->supports() checks the resource type if specified');
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$collection = \$loader->load('empty.yml');

        \$this->assertEquals([], \$collection->all());
        \$this->assertEquals([new FileResource(realpath(__DIR__.'/../Fixtures/empty.yml'))], \$collection->getResources());
    }

    /**
     * @dataProvider getPathsToInvalidFiles
     */
    public function testLoadThrowsExceptionWithInvalidFile(\$filePath)
    {
        \$this->expectException('InvalidArgumentException');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$loader->load(\$filePath);
    }

    public function getPathsToInvalidFiles()
    {
        return [
            ['nonvalid.yml'],
            ['nonvalid2.yml'],
            ['incomplete.yml'],
            ['nonvalidkeys.yml'],
            ['nonesense_resource_plus_path.yml'],
            ['nonesense_type_without_resource.yml'],
            ['bad_format.yml'],
        ];
    }

    public function testLoadSpecialRouteName()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('special_route_name.yml');
        \$route = \$routeCollection->get('#\$péß^a|');

        \$this->assertInstanceOf('Symfony\\Component\\Routing\\Route', \$route);
        \$this->assertSame('/true', \$route->getPath());
    }

    public function testLoadWithRoute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('validpattern.yml');
        \$route = \$routeCollection->get('blog_show');

        \$this->assertInstanceOf('Symfony\\Component\\Routing\\Route', \$route);
        \$this->assertSame('/blog/{slug}', \$route->getPath());
        \$this->assertSame('{locale}.example.com', \$route->getHost());
        \$this->assertSame('MyBundle:Blog:show', \$route->getDefault('_controller'));
        \$this->assertSame('\\w+', \$route->getRequirement('locale'));
        \$this->assertSame('RouteCompiler', \$route->getOption('compiler_class'));
        \$this->assertEquals(['GET', 'POST', 'PUT', 'OPTIONS'], \$route->getMethods());
        \$this->assertEquals(['https'], \$route->getSchemes());
        \$this->assertEquals('context.getMethod() == \"GET\"', \$route->getCondition());
    }

    public function testLoadWithResource()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('validresource.yml');
        \$routes = \$routeCollection->all();

        \$this->assertCount(2, \$routes, 'Two routes are loaded');
        \$this->assertContainsOnly('Symfony\\Component\\Routing\\Route', \$routes);

        foreach (\$routes as \$route) {
            \$this->assertSame('/{foo}/blog/{slug}', \$route->getPath());
            \$this->assertSame('123', \$route->getDefault('foo'));
            \$this->assertSame('\\d+', \$route->getRequirement('foo'));
            \$this->assertSame('bar', \$route->getOption('foo'));
            \$this->assertSame('', \$route->getHost());
            \$this->assertSame('context.getMethod() == \"POST\"', \$route->getCondition());
        }
    }

    public function testLoadRouteWithControllerAttribute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_homepage');

        \$this->assertSame('AppBundle:Homepage:show', \$route->getDefault('_controller'));
    }

    public function testLoadRouteWithoutControllerAttribute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_logout');

        \$this->assertNull(\$route->getDefault('_controller'));
    }

    public function testLoadRouteWithControllerSetInDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_blog');

        \$this->assertSame('AppBundle:Blog:list', \$route->getDefault('_controller'));
    }

    public function testOverrideControllerInDefaults()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The routing file \"[^\"]*\" must not specify both the \"controller\" key and the defaults key \"_controller\" for \"app_blog\"/');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$loader->load('override_defaults.yml');
    }

    /**
     * @dataProvider provideFilesImportingRoutesWithControllers
     */
    public function testImportRouteWithController(\$file)
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load(\$file);

        \$route = \$routeCollection->get('app_homepage');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('app_blog');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('app_logout');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));
    }

    public function provideFilesImportingRoutesWithControllers()
    {
        yield ['import_controller.yml'];
        yield ['import__controller.yml'];
    }

    public function testImportWithOverriddenController()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The routing file \"[^\"]*\" must not specify both the \"controller\" key and the defaults key \"_controller\" for \"_static\"/');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$loader->load('import_override_defaults.yml');
    }

    public function testImportRouteWithGlobMatchingSingleFile()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/glob']));
        \$routeCollection = \$loader->load('import_single.yml');

        \$route = \$routeCollection->get('bar_route');
        \$this->assertSame('AppBundle:Bar:view', \$route->getDefault('_controller'));
    }

    public function testImportRouteWithGlobMatchingMultipleFiles()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/glob']));
        \$routeCollection = \$loader->load('import_multiple.yml');

        \$route = \$routeCollection->get('bar_route');
        \$this->assertSame('AppBundle:Bar:view', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('baz_route');
        \$this->assertSame('AppBundle:Baz:view', \$route->getDefault('_controller'));
    }

    public function testImportRouteWithNamePrefix()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/import_with_name_prefix']));
        \$routeCollection = \$loader->load('routing.yml');

        \$this->assertNotNull(\$routeCollection->get('app_blog'));
        \$this->assertEquals('/blog', \$routeCollection->get('app_blog')->getPath());
        \$this->assertNotNull(\$routeCollection->get('api_app_blog'));
        \$this->assertEquals('/api/blog', \$routeCollection->get('api_app_blog')->getPath());
    }

    public function testRemoteSourcesAreNotAccepted()
    {
        \$loader = new YamlFileLoader(new FileLocatorStub());
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('http://remote.com/here.yml');
    }

    public function testLoadingRouteWithDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routes = \$loader->load('defaults.yml');

        \$this->assertCount(1, \$routes);

        \$defaultsRoute = \$routes->get('defaults');

        \$this->assertSame('/defaults', \$defaultsRoute->getPath());
        \$this->assertSame('en', \$defaultsRoute->getDefault('_locale'));
        \$this->assertSame('html', \$defaultsRoute->getDefault('_format'));
    }

    public function testLoadingImportedRoutesWithDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routes = \$loader->load('importer-with-defaults.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('one', \$localeRoute = new Route('/defaults/one'));
        \$localeRoute->setDefault('_locale', 'g_locale');
        \$localeRoute->setDefault('_format', 'g_format');
        \$expectedRoutes->add('two', \$formatRoute = new Route('/defaults/two'));
        \$formatRoute->setDefault('_locale', 'g_locale');
        \$formatRoute->setDefault('_format', 'g_format');
        \$formatRoute->setDefault('specific', 'imported');

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/imported-with-defaults.yml'));
        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/importer-with-defaults.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingUtf8Route()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('utf8.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('some_route', new Route('/'));

        \$expectedRoutes->add('some_utf8_route', \$route = new Route('/utf8'));
        \$route->setOption('utf8', true);

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/utf8.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingUtf8ImportedRoutes()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-utf8.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('utf8_one', \$one = new Route('/one'));
        \$one->setOption('utf8', true);

        \$expectedRoutes->add('utf8_two', \$two = new Route('/two'));
        \$two->setOption('utf8', true);

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/imported-with-utf8.yml'));
        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/importer-with-utf8.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingLocalizedRoute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('localized-route.yml');

        \$this->assertCount(3, \$routes);
    }

    public function testImportingRoutesFromDefinition()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importing-localized-route.yml');

        \$this->assertCount(3, \$routes);
        \$this->assertEquals('/nl', \$routes->get('home.nl')->getPath());
        \$this->assertEquals('/en', \$routes->get('home.en')->getPath());
        \$this->assertEquals('/here', \$routes->get('not_localized')->getPath());
    }

    public function testImportingRoutesWithLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-locale.yml');

        \$this->assertCount(2, \$routes);
        \$this->assertEquals('/nl/voorbeeld', \$routes->get('imported.nl')->getPath());
        \$this->assertEquals('/en/example', \$routes->get('imported.en')->getPath());
    }

    public function testImportingNonLocalizedRoutesWithLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-locale-imports-non-localized-route.yml');

        \$this->assertCount(2, \$routes);
        \$this->assertEquals('/nl/imported', \$routes->get('imported.nl')->getPath());
        \$this->assertEquals('/en/imported', \$routes->get('imported.en')->getPath());
    }

    public function testImportingRoutesWithOfficialLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('officially_formatted_locales.yml');

        \$this->assertCount(3, \$routes);
        \$this->assertEquals('/omelette-au-fromage', \$routes->get('official.fr.UTF-8')->getPath());
        \$this->assertEquals('/eu-não-sou-espanhol', \$routes->get('official.pt-PT')->getPath());
        \$this->assertEquals('/churrasco', \$routes->get('official.pt_BR')->getPath());
    }

    public function testImportingRoutesFromDefinitionMissingLocalePrefix()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('missing-locale-in-importer.yml');
    }

    public function testImportingRouteWithoutPathOrLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('route-without-path-or-locales.yml');
    }

    public function testImportingWithControllerDefault()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-controller-default.yml');
        \$this->assertCount(3, \$routes);
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('home.en')->getDefault('_controller'));
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('home.nl')->getDefault('_controller'));
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('not_localized')->getDefault('_controller'));
    }

    public function testImportRouteWithNoTrailingSlash()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/import_with_no_trailing_slash']));
        \$routeCollection = \$loader->load('routing.yml');

        \$this->assertEquals('/slash/', \$routeCollection->get('a_app_homepage')->getPath());
        \$this->assertEquals('/no-slash', \$routeCollection->get('b_app_homepage')->getPath());
    }

    /**
     * @group legacy
     * @expectedDeprecation A placeholder name must be a string (0 given). Did you forget to specify the placeholder key for the requirement \"\\d+\" of route \"foo\" in \"%srequirements_without_placeholder_name.yml\"?
     */
    public function testRequirementsWithoutPlaceholderName()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$loader->load('requirements_without_placeholder_name.yml');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php";
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
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\Loader\\YamlFileLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class YamlFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new YamlFileLoader(\$this->getMockBuilder('Symfony\\Component\\Config\\FileLocator')->getMock());

        \$this->assertTrue(\$loader->supports('foo.yml'), '->supports() returns true if the resource is loadable');
        \$this->assertTrue(\$loader->supports('foo.yaml'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$loader->supports('foo.yml', 'yaml'), '->supports() checks the resource type if specified');
        \$this->assertTrue(\$loader->supports('foo.yaml', 'yaml'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$loader->supports('foo.yml', 'foo'), '->supports() checks the resource type if specified');
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$collection = \$loader->load('empty.yml');

        \$this->assertEquals([], \$collection->all());
        \$this->assertEquals([new FileResource(realpath(__DIR__.'/../Fixtures/empty.yml'))], \$collection->getResources());
    }

    /**
     * @dataProvider getPathsToInvalidFiles
     */
    public function testLoadThrowsExceptionWithInvalidFile(\$filePath)
    {
        \$this->expectException('InvalidArgumentException');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$loader->load(\$filePath);
    }

    public function getPathsToInvalidFiles()
    {
        return [
            ['nonvalid.yml'],
            ['nonvalid2.yml'],
            ['incomplete.yml'],
            ['nonvalidkeys.yml'],
            ['nonesense_resource_plus_path.yml'],
            ['nonesense_type_without_resource.yml'],
            ['bad_format.yml'],
        ];
    }

    public function testLoadSpecialRouteName()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('special_route_name.yml');
        \$route = \$routeCollection->get('#\$péß^a|');

        \$this->assertInstanceOf('Symfony\\Component\\Routing\\Route', \$route);
        \$this->assertSame('/true', \$route->getPath());
    }

    public function testLoadWithRoute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('validpattern.yml');
        \$route = \$routeCollection->get('blog_show');

        \$this->assertInstanceOf('Symfony\\Component\\Routing\\Route', \$route);
        \$this->assertSame('/blog/{slug}', \$route->getPath());
        \$this->assertSame('{locale}.example.com', \$route->getHost());
        \$this->assertSame('MyBundle:Blog:show', \$route->getDefault('_controller'));
        \$this->assertSame('\\w+', \$route->getRequirement('locale'));
        \$this->assertSame('RouteCompiler', \$route->getOption('compiler_class'));
        \$this->assertEquals(['GET', 'POST', 'PUT', 'OPTIONS'], \$route->getMethods());
        \$this->assertEquals(['https'], \$route->getSchemes());
        \$this->assertEquals('context.getMethod() == \"GET\"', \$route->getCondition());
    }

    public function testLoadWithResource()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routeCollection = \$loader->load('validresource.yml');
        \$routes = \$routeCollection->all();

        \$this->assertCount(2, \$routes, 'Two routes are loaded');
        \$this->assertContainsOnly('Symfony\\Component\\Routing\\Route', \$routes);

        foreach (\$routes as \$route) {
            \$this->assertSame('/{foo}/blog/{slug}', \$route->getPath());
            \$this->assertSame('123', \$route->getDefault('foo'));
            \$this->assertSame('\\d+', \$route->getRequirement('foo'));
            \$this->assertSame('bar', \$route->getOption('foo'));
            \$this->assertSame('', \$route->getHost());
            \$this->assertSame('context.getMethod() == \"POST\"', \$route->getCondition());
        }
    }

    public function testLoadRouteWithControllerAttribute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_homepage');

        \$this->assertSame('AppBundle:Homepage:show', \$route->getDefault('_controller'));
    }

    public function testLoadRouteWithoutControllerAttribute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_logout');

        \$this->assertNull(\$route->getDefault('_controller'));
    }

    public function testLoadRouteWithControllerSetInDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load('routing.yml');

        \$route = \$routeCollection->get('app_blog');

        \$this->assertSame('AppBundle:Blog:list', \$route->getDefault('_controller'));
    }

    public function testOverrideControllerInDefaults()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The routing file \"[^\"]*\" must not specify both the \"controller\" key and the defaults key \"_controller\" for \"app_blog\"/');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$loader->load('override_defaults.yml');
    }

    /**
     * @dataProvider provideFilesImportingRoutesWithControllers
     */
    public function testImportRouteWithController(\$file)
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$routeCollection = \$loader->load(\$file);

        \$route = \$routeCollection->get('app_homepage');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('app_blog');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('app_logout');
        \$this->assertSame('FrameworkBundle:Template:template', \$route->getDefault('_controller'));
    }

    public function provideFilesImportingRoutesWithControllers()
    {
        yield ['import_controller.yml'];
        yield ['import__controller.yml'];
    }

    public function testImportWithOverriddenController()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The routing file \"[^\"]*\" must not specify both the \"controller\" key and the defaults key \"_controller\" for \"_static\"/');
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/controller']));
        \$loader->load('import_override_defaults.yml');
    }

    public function testImportRouteWithGlobMatchingSingleFile()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/glob']));
        \$routeCollection = \$loader->load('import_single.yml');

        \$route = \$routeCollection->get('bar_route');
        \$this->assertSame('AppBundle:Bar:view', \$route->getDefault('_controller'));
    }

    public function testImportRouteWithGlobMatchingMultipleFiles()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/glob']));
        \$routeCollection = \$loader->load('import_multiple.yml');

        \$route = \$routeCollection->get('bar_route');
        \$this->assertSame('AppBundle:Bar:view', \$route->getDefault('_controller'));

        \$route = \$routeCollection->get('baz_route');
        \$this->assertSame('AppBundle:Baz:view', \$route->getDefault('_controller'));
    }

    public function testImportRouteWithNamePrefix()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/import_with_name_prefix']));
        \$routeCollection = \$loader->load('routing.yml');

        \$this->assertNotNull(\$routeCollection->get('app_blog'));
        \$this->assertEquals('/blog', \$routeCollection->get('app_blog')->getPath());
        \$this->assertNotNull(\$routeCollection->get('api_app_blog'));
        \$this->assertEquals('/api/blog', \$routeCollection->get('api_app_blog')->getPath());
    }

    public function testRemoteSourcesAreNotAccepted()
    {
        \$loader = new YamlFileLoader(new FileLocatorStub());
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('http://remote.com/here.yml');
    }

    public function testLoadingRouteWithDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routes = \$loader->load('defaults.yml');

        \$this->assertCount(1, \$routes);

        \$defaultsRoute = \$routes->get('defaults');

        \$this->assertSame('/defaults', \$defaultsRoute->getPath());
        \$this->assertSame('en', \$defaultsRoute->getDefault('_locale'));
        \$this->assertSame('html', \$defaultsRoute->getDefault('_format'));
    }

    public function testLoadingImportedRoutesWithDefaults()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$routes = \$loader->load('importer-with-defaults.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('one', \$localeRoute = new Route('/defaults/one'));
        \$localeRoute->setDefault('_locale', 'g_locale');
        \$localeRoute->setDefault('_format', 'g_format');
        \$expectedRoutes->add('two', \$formatRoute = new Route('/defaults/two'));
        \$formatRoute->setDefault('_locale', 'g_locale');
        \$formatRoute->setDefault('_format', 'g_format');
        \$formatRoute->setDefault('specific', 'imported');

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/imported-with-defaults.yml'));
        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/importer-with-defaults.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingUtf8Route()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('utf8.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('some_route', new Route('/'));

        \$expectedRoutes->add('some_utf8_route', \$route = new Route('/utf8'));
        \$route->setOption('utf8', true);

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/utf8.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingUtf8ImportedRoutes()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-utf8.yml');

        \$this->assertCount(2, \$routes);

        \$expectedRoutes = new RouteCollection();
        \$expectedRoutes->add('utf8_one', \$one = new Route('/one'));
        \$one->setOption('utf8', true);

        \$expectedRoutes->add('utf8_two', \$two = new Route('/two'));
        \$two->setOption('utf8', true);

        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/imported-with-utf8.yml'));
        \$expectedRoutes->addResource(new FileResource(__DIR__.'/../Fixtures/localized/importer-with-utf8.yml'));

        \$this->assertEquals(\$expectedRoutes, \$routes);
    }

    public function testLoadingLocalizedRoute()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('localized-route.yml');

        \$this->assertCount(3, \$routes);
    }

    public function testImportingRoutesFromDefinition()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importing-localized-route.yml');

        \$this->assertCount(3, \$routes);
        \$this->assertEquals('/nl', \$routes->get('home.nl')->getPath());
        \$this->assertEquals('/en', \$routes->get('home.en')->getPath());
        \$this->assertEquals('/here', \$routes->get('not_localized')->getPath());
    }

    public function testImportingRoutesWithLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-locale.yml');

        \$this->assertCount(2, \$routes);
        \$this->assertEquals('/nl/voorbeeld', \$routes->get('imported.nl')->getPath());
        \$this->assertEquals('/en/example', \$routes->get('imported.en')->getPath());
    }

    public function testImportingNonLocalizedRoutesWithLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-locale-imports-non-localized-route.yml');

        \$this->assertCount(2, \$routes);
        \$this->assertEquals('/nl/imported', \$routes->get('imported.nl')->getPath());
        \$this->assertEquals('/en/imported', \$routes->get('imported.en')->getPath());
    }

    public function testImportingRoutesWithOfficialLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('officially_formatted_locales.yml');

        \$this->assertCount(3, \$routes);
        \$this->assertEquals('/omelette-au-fromage', \$routes->get('official.fr.UTF-8')->getPath());
        \$this->assertEquals('/eu-não-sou-espanhol', \$routes->get('official.pt-PT')->getPath());
        \$this->assertEquals('/churrasco', \$routes->get('official.pt_BR')->getPath());
    }

    public function testImportingRoutesFromDefinitionMissingLocalePrefix()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('missing-locale-in-importer.yml');
    }

    public function testImportingRouteWithoutPathOrLocales()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$this->expectException(\\InvalidArgumentException::class);
        \$loader->load('route-without-path-or-locales.yml');
    }

    public function testImportingWithControllerDefault()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/localized']));
        \$routes = \$loader->load('importer-with-controller-default.yml');
        \$this->assertCount(3, \$routes);
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('home.en')->getDefault('_controller'));
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('home.nl')->getDefault('_controller'));
        \$this->assertEquals('DefaultController::defaultAction', \$routes->get('not_localized')->getDefault('_controller'));
    }

    public function testImportRouteWithNoTrailingSlash()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures/import_with_no_trailing_slash']));
        \$routeCollection = \$loader->load('routing.yml');

        \$this->assertEquals('/slash/', \$routeCollection->get('a_app_homepage')->getPath());
        \$this->assertEquals('/no-slash', \$routeCollection->get('b_app_homepage')->getPath());
    }

    /**
     * @group legacy
     * @expectedDeprecation A placeholder name must be a string (0 given). Did you forget to specify the placeholder key for the requirement \"\\d+\" of route \"foo\" in \"%srequirements_without_placeholder_name.yml\"?
     */
    public function testRequirementsWithoutPlaceholderName()
    {
        \$loader = new YamlFileLoader(new FileLocator([__DIR__.'/../Fixtures']));
        \$loader->load('requirements_without_placeholder_name.yml');
    }
}
", "vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/YamlFileLoaderTest.php");
    }
}
