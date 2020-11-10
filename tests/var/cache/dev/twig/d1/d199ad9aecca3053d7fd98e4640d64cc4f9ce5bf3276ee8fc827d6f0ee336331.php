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

/* vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php */
class __TwigTemplate_bb1ae1d764e46ff4400bad21cc27a0f64735f5931364787fb3e13c0198d843e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Routing;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RouterTest extends TestCase
{
    public function testConstructThrowsOnNonSymfonyNorPsr11Container()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('You should either pass a \"Symfony\\Component\\DependencyInjection\\ContainerInterface\" instance or provide the \$parameters argument of the \"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router::__construct\" method');
        new Router(\$this->createMock(ContainerInterface::class), 'foo');
    }

    public function testGenerateWithServiceParam()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            ' /{_locale}',
            [
                '_locale' => '%locale%',
            ],
            [
                '_locale' => 'en|es',
            ], [], '', [], [], '\"%foo%\" == \"bar\"'
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag([
            'locale' => 'es',
            'foo' => 'bar',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$this->assertSame('/en', \$router->generate('foo', ['_locale' => 'en']));
        \$this->assertSame('/', \$router->generate('foo', ['_locale' => 'es']));
        \$this->assertSame('\"bar\" == \"bar\"', \$router->getRouteCollection()->get('foo')->getCondition());
    }

    public function testGenerateWithServiceParamWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            ' /{_locale}',
            [
                '_locale' => '%locale%',
            ],
            [
                '_locale' => 'en|es',
            ], [], '', [], [], '\"%foo%\" == \"bar\"'
        ));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('locale', 'es');
        \$sc->setParameter('foo', 'bar');

        \$router = new Router(\$sc, 'foo');

        \$this->assertSame('/en', \$router->generate('foo', ['_locale' => 'en']));
        \$this->assertSame('/', \$router->generate('foo', ['_locale' => 'es']));
        \$this->assertSame('\"bar\" == \"bar\"', \$router->getRouteCollection()->get('foo')->getCondition());
    }

    public function testGenerateWithDefaultLocale()
    {
        \$routes = new RouteCollection();

        \$route = new Route('');

        \$name = 'testFoo';

        foreach (['hr' => '/test-hr', 'en' => '/test-en'] as \$locale => \$path) {
            \$localizedRoute = clone \$route;
            \$localizedRoute->setDefault('_locale', \$locale);
            \$localizedRoute->setDefault('_canonical_route', \$name);
            \$localizedRoute->setPath(\$path);
            \$routes->add(\$name.'.'.\$locale, \$localizedRoute);
        }

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, '', [], null, null, null, 'hr');

        \$this->assertSame('/test-hr', \$router->generate(\$name));

        \$this->assertSame('/test-en', \$router->generate(\$name, ['_locale' => 'en']));
        \$this->assertSame('/test-hr', \$router->generate(\$name, ['_locale' => 'hr']));
    }

    public function testDefaultsPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
                'boo' => ['%parameter%', '%%escaped_parameter%%', ['%bee_parameter%', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            [
            ]
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);

        \$parameters = \$this->getParameterBag([
            'parameter.foo' => 'foo',
            'parameter.bar' => 'bar',
            'parameter' => 'boo',
            'bee_parameter' => 'foo_bee',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
                'boo' => ['boo', '%escaped_parameter%', ['foo_bee', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            \$route->getDefaults()
        );
    }

    public function testDefaultsPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
                'boo' => ['%parameter%', '%%escaped_parameter%%', ['%bee_parameter%', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            [
            ]
        ));

        \$sc = \$this->getServiceContainer(\$routes);

        \$sc->setParameter('parameter.foo', 'foo');
        \$sc->setParameter('parameter.bar', 'bar');
        \$sc->setParameter('parameter', 'boo');
        \$sc->setParameter('bee_parameter', 'foo_bee');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
                'boo' => ['boo', '%escaped_parameter%', ['foo_bee', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            \$route->getDefaults()
        );
    }

    public function testRequirementsPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
            ],
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
            ]
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag([
            'parameter.foo' => 'foo',
            'parameter.bar' => 'bar',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
            ],
            \$route->getRequirements()
        );
    }

    public function testRequirementsPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
            ],
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
            ]
        ));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo');
        \$sc->setParameter('parameter.bar', 'bar');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
            ],
            \$route->getRequirements()
        );
    }

    public function testPatternPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/before/%parameter.foo%/after/%%escaped%%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.foo' => 'foo']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getPath()
        );
    }

    public function testPatternPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/before/%parameter.foo%/after/%%escaped%%'));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo-%%escaped%%');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo-%escaped%/after/%escaped%',
            \$route->getPath()
        );
    }

    public function testEnvPlaceholders()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Using \"%env(FOO)%\" is not allowed in routing configuration.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%env(FOO)%'));

        \$router = new Router(\$this->getPsr11ServiceContainer(\$routes), 'foo', [], null, \$this->getParameterBag());
        \$router->getRouteCollection();
    }

    public function testEnvPlaceholdersWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Using \"%env(FOO)%\" is not allowed in routing configuration.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%env(FOO)%'));

        \$router = new Router(\$this->getServiceContainer(\$routes), 'foo');
        \$router->getRouteCollection();
    }

    public function testIndirectEnvPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%foo%'));

        \$router = new Router(\$container = \$this->getServiceContainer(\$routes), 'foo');
        \$container->setParameter('foo', 'foo-%bar%');
        \$container->setParameter('bar', '%env(string:FOO)%');

        \$this->expectException(RuntimeException::class);
        \$this->expectExceptionMessage('Using \"%env(string:FOO)%\" is not allowed in routing configuration.');

        \$router->getRouteCollection();
    }

    public function testHostPlaceholders()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setHost('/before/%parameter.foo%/after/%%escaped%%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.foo' => 'foo']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getHost()
        );
    }

    public function testHostPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setHost('/before/%parameter.foo%/after/%%escaped%%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getHost()
        );
    }

    public function testExceptionOnNonExistentParameterWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException');
        \$this->expectExceptionMessage('You have requested a non-existent parameter \"nope\".');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%nope%'));

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo');
        \$router->getRouteCollection()->get('foo');
    }

    public function testExceptionOnNonStringParameter()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The container parameter \"object\", used in the route configuration value \"/%object%\", must be a string or numeric, but it is of type object.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%object%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['object' => new \\stdClass()]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$router->getRouteCollection()->get('foo');
    }

    public function testExceptionOnNonStringParameterWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The container parameter \"object\", used in the route configuration value \"/%object%\", must be a string or numeric, but it is of type object.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%object%'));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('object', new \\stdClass());

        \$router = new Router(\$sc, 'foo');
        \$router->getRouteCollection()->get('foo');
    }

    /**
     * @dataProvider getNonStringValues
     */
    public function testDefaultValuesAsNonStrings(\$value)
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('foo', ['foo' => \$value], ['foo' => '\\d+']));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo', [], null, \$this->getParameterBag());

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame(\$value, \$route->getDefault('foo'));
    }

    /**
     * @dataProvider getNonStringValues
     */
    public function testDefaultValuesAsNonStringsWithSfContainer(\$value)
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('foo', ['foo' => \$value], ['foo' => '\\d+']));

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo');

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame(\$value, \$route->getDefault('foo'));
    }

    public function testGetRouteCollectionAddsContainerParametersResource()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/%locale%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routeCollection);
        \$parameters = \$this->getParameterBag(['locale' => 'en']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$router->getRouteCollection();
    }

    public function testGetRouteCollectionAddsContainerParametersResourceWithSfContainer()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/%locale%'));

        \$sc = \$this->getServiceContainer(\$routeCollection);
        \$sc->setParameter('locale', 'en');

        \$router = new Router(\$sc, 'foo');

        \$routeCollection = \$router->getRouteCollection();

        \$this->assertEquals([new ContainerParametersResource(['locale' => 'en'])], \$routeCollection->getResources());
    }

    public function testBooleanContainerParametersWithinRouteCondition()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setCondition('%parameter.true% or %parameter.false%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.true' => true, 'parameter.false' => false]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame('1 or 0', \$route->getCondition());
    }

    public function getNonStringValues()
    {
        return [[null], [false], [true], [new \\stdClass()], [['foo', 'bar']], [[[]]]];
    }

    /**
     * @return \\Symfony\\Component\\DependencyInjection\\Container
     */
    private function getServiceContainer(RouteCollection \$routes)
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();

        \$loader
            ->expects(\$this->any())
            ->method('load')
            ->willReturn(\$routes)
        ;

        \$sc = \$this->getMockBuilder('Symfony\\\\Component\\\\DependencyInjection\\\\Container')->setMethods(['get'])->getMock();

        \$sc
            ->expects(\$this->once())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$sc;
    }

    private function getPsr11ServiceContainer(RouteCollection \$routes): ContainerInterface
    {
        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loader
            ->expects(\$this->any())
            ->method('load')
            ->willReturn(\$routes)
        ;

        \$sc = \$this->getMockBuilder(ContainerInterface::class)->getMock();

        \$sc
            ->expects(\$this->once())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$sc;
    }

    private function getParameterBag(array \$params = []): ContainerInterface
    {
        \$bag = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$bag
            ->expects(\$this->any())
            ->method('get')
            ->willReturnCallback(function (\$key) use (\$params) {
                return isset(\$params[\$key]) ? \$params[\$key] : null;
            })
        ;

        return \$bag;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Routing;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RouterTest extends TestCase
{
    public function testConstructThrowsOnNonSymfonyNorPsr11Container()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('You should either pass a \"Symfony\\Component\\DependencyInjection\\ContainerInterface\" instance or provide the \$parameters argument of the \"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router::__construct\" method');
        new Router(\$this->createMock(ContainerInterface::class), 'foo');
    }

    public function testGenerateWithServiceParam()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            ' /{_locale}',
            [
                '_locale' => '%locale%',
            ],
            [
                '_locale' => 'en|es',
            ], [], '', [], [], '\"%foo%\" == \"bar\"'
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag([
            'locale' => 'es',
            'foo' => 'bar',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$this->assertSame('/en', \$router->generate('foo', ['_locale' => 'en']));
        \$this->assertSame('/', \$router->generate('foo', ['_locale' => 'es']));
        \$this->assertSame('\"bar\" == \"bar\"', \$router->getRouteCollection()->get('foo')->getCondition());
    }

    public function testGenerateWithServiceParamWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            ' /{_locale}',
            [
                '_locale' => '%locale%',
            ],
            [
                '_locale' => 'en|es',
            ], [], '', [], [], '\"%foo%\" == \"bar\"'
        ));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('locale', 'es');
        \$sc->setParameter('foo', 'bar');

        \$router = new Router(\$sc, 'foo');

        \$this->assertSame('/en', \$router->generate('foo', ['_locale' => 'en']));
        \$this->assertSame('/', \$router->generate('foo', ['_locale' => 'es']));
        \$this->assertSame('\"bar\" == \"bar\"', \$router->getRouteCollection()->get('foo')->getCondition());
    }

    public function testGenerateWithDefaultLocale()
    {
        \$routes = new RouteCollection();

        \$route = new Route('');

        \$name = 'testFoo';

        foreach (['hr' => '/test-hr', 'en' => '/test-en'] as \$locale => \$path) {
            \$localizedRoute = clone \$route;
            \$localizedRoute->setDefault('_locale', \$locale);
            \$localizedRoute->setDefault('_canonical_route', \$name);
            \$localizedRoute->setPath(\$path);
            \$routes->add(\$name.'.'.\$locale, \$localizedRoute);
        }

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, '', [], null, null, null, 'hr');

        \$this->assertSame('/test-hr', \$router->generate(\$name));

        \$this->assertSame('/test-en', \$router->generate(\$name, ['_locale' => 'en']));
        \$this->assertSame('/test-hr', \$router->generate(\$name, ['_locale' => 'hr']));
    }

    public function testDefaultsPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
                'boo' => ['%parameter%', '%%escaped_parameter%%', ['%bee_parameter%', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            [
            ]
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);

        \$parameters = \$this->getParameterBag([
            'parameter.foo' => 'foo',
            'parameter.bar' => 'bar',
            'parameter' => 'boo',
            'bee_parameter' => 'foo_bee',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
                'boo' => ['boo', '%escaped_parameter%', ['foo_bee', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            \$route->getDefaults()
        );
    }

    public function testDefaultsPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
                'boo' => ['%parameter%', '%%escaped_parameter%%', ['%bee_parameter%', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            [
            ]
        ));

        \$sc = \$this->getServiceContainer(\$routes);

        \$sc->setParameter('parameter.foo', 'foo');
        \$sc->setParameter('parameter.bar', 'bar');
        \$sc->setParameter('parameter', 'boo');
        \$sc->setParameter('bee_parameter', 'foo_bee');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
                'boo' => ['boo', '%escaped_parameter%', ['foo_bee', 'bee']],
                'bee' => ['bee', 'bee'],
            ],
            \$route->getDefaults()
        );
    }

    public function testRequirementsPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
            ],
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
            ]
        ));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag([
            'parameter.foo' => 'foo',
            'parameter.bar' => 'bar',
        ]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
            ],
            \$route->getRequirements()
        );
    }

    public function testRequirementsPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route(
            '/foo',
            [
            ],
            [
                'foo' => 'before_%parameter.foo%',
                'bar' => '%parameter.bar%_after',
                'baz' => '%%escaped%%',
            ]
        ));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo');
        \$sc->setParameter('parameter.bar', 'bar');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            [
                'foo' => 'before_foo',
                'bar' => 'bar_after',
                'baz' => '%escaped%',
            ],
            \$route->getRequirements()
        );
    }

    public function testPatternPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/before/%parameter.foo%/after/%%escaped%%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.foo' => 'foo']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getPath()
        );
    }

    public function testPatternPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/before/%parameter.foo%/after/%%escaped%%'));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo-%%escaped%%');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo-%escaped%/after/%escaped%',
            \$route->getPath()
        );
    }

    public function testEnvPlaceholders()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Using \"%env(FOO)%\" is not allowed in routing configuration.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%env(FOO)%'));

        \$router = new Router(\$this->getPsr11ServiceContainer(\$routes), 'foo', [], null, \$this->getParameterBag());
        \$router->getRouteCollection();
    }

    public function testEnvPlaceholdersWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Using \"%env(FOO)%\" is not allowed in routing configuration.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%env(FOO)%'));

        \$router = new Router(\$this->getServiceContainer(\$routes), 'foo');
        \$router->getRouteCollection();
    }

    public function testIndirectEnvPlaceholders()
    {
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%foo%'));

        \$router = new Router(\$container = \$this->getServiceContainer(\$routes), 'foo');
        \$container->setParameter('foo', 'foo-%bar%');
        \$container->setParameter('bar', '%env(string:FOO)%');

        \$this->expectException(RuntimeException::class);
        \$this->expectExceptionMessage('Using \"%env(string:FOO)%\" is not allowed in routing configuration.');

        \$router->getRouteCollection();
    }

    public function testHostPlaceholders()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setHost('/before/%parameter.foo%/after/%%escaped%%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.foo' => 'foo']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getHost()
        );
    }

    public function testHostPlaceholdersWithSfContainer()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setHost('/before/%parameter.foo%/after/%%escaped%%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('parameter.foo', 'foo');

        \$router = new Router(\$sc, 'foo');
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertEquals(
            '/before/foo/after/%escaped%',
            \$route->getHost()
        );
    }

    public function testExceptionOnNonExistentParameterWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException');
        \$this->expectExceptionMessage('You have requested a non-existent parameter \"nope\".');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%nope%'));

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo');
        \$router->getRouteCollection()->get('foo');
    }

    public function testExceptionOnNonStringParameter()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The container parameter \"object\", used in the route configuration value \"/%object%\", must be a string or numeric, but it is of type object.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%object%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['object' => new \\stdClass()]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$router->getRouteCollection()->get('foo');
    }

    public function testExceptionOnNonStringParameterWithSfContainer()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The container parameter \"object\", used in the route configuration value \"/%object%\", must be a string or numeric, but it is of type object.');
        \$routes = new RouteCollection();

        \$routes->add('foo', new Route('/%object%'));

        \$sc = \$this->getServiceContainer(\$routes);
        \$sc->setParameter('object', new \\stdClass());

        \$router = new Router(\$sc, 'foo');
        \$router->getRouteCollection()->get('foo');
    }

    /**
     * @dataProvider getNonStringValues
     */
    public function testDefaultValuesAsNonStrings(\$value)
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('foo', ['foo' => \$value], ['foo' => '\\d+']));

        \$sc = \$this->getPsr11ServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo', [], null, \$this->getParameterBag());

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame(\$value, \$route->getDefault('foo'));
    }

    /**
     * @dataProvider getNonStringValues
     */
    public function testDefaultValuesAsNonStringsWithSfContainer(\$value)
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('foo', ['foo' => \$value], ['foo' => '\\d+']));

        \$sc = \$this->getServiceContainer(\$routes);

        \$router = new Router(\$sc, 'foo');

        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame(\$value, \$route->getDefault('foo'));
    }

    public function testGetRouteCollectionAddsContainerParametersResource()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/%locale%'));

        \$sc = \$this->getPsr11ServiceContainer(\$routeCollection);
        \$parameters = \$this->getParameterBag(['locale' => 'en']);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);

        \$router->getRouteCollection();
    }

    public function testGetRouteCollectionAddsContainerParametersResourceWithSfContainer()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('/%locale%'));

        \$sc = \$this->getServiceContainer(\$routeCollection);
        \$sc->setParameter('locale', 'en');

        \$router = new Router(\$sc, 'foo');

        \$routeCollection = \$router->getRouteCollection();

        \$this->assertEquals([new ContainerParametersResource(['locale' => 'en'])], \$routeCollection->getResources());
    }

    public function testBooleanContainerParametersWithinRouteCondition()
    {
        \$routes = new RouteCollection();

        \$route = new Route('foo');
        \$route->setCondition('%parameter.true% or %parameter.false%');

        \$routes->add('foo', \$route);

        \$sc = \$this->getPsr11ServiceContainer(\$routes);
        \$parameters = \$this->getParameterBag(['parameter.true' => true, 'parameter.false' => false]);

        \$router = new Router(\$sc, 'foo', [], null, \$parameters);
        \$route = \$router->getRouteCollection()->get('foo');

        \$this->assertSame('1 or 0', \$route->getCondition());
    }

    public function getNonStringValues()
    {
        return [[null], [false], [true], [new \\stdClass()], [['foo', 'bar']], [[[]]]];
    }

    /**
     * @return \\Symfony\\Component\\DependencyInjection\\Container
     */
    private function getServiceContainer(RouteCollection \$routes)
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();

        \$loader
            ->expects(\$this->any())
            ->method('load')
            ->willReturn(\$routes)
        ;

        \$sc = \$this->getMockBuilder('Symfony\\\\Component\\\\DependencyInjection\\\\Container')->setMethods(['get'])->getMock();

        \$sc
            ->expects(\$this->once())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$sc;
    }

    private function getPsr11ServiceContainer(RouteCollection \$routes): ContainerInterface
    {
        \$loader = \$this->getMockBuilder(LoaderInterface::class)->getMock();

        \$loader
            ->expects(\$this->any())
            ->method('load')
            ->willReturn(\$routes)
        ;

        \$sc = \$this->getMockBuilder(ContainerInterface::class)->getMock();

        \$sc
            ->expects(\$this->once())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$sc;
    }

    private function getParameterBag(array \$params = []): ContainerInterface
    {
        \$bag = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$bag
            ->expects(\$this->any())
            ->method('get')
            ->willReturnCallback(function (\$key) use (\$params) {
                return isset(\$params[\$key]) ? \$params[\$key] : null;
            })
        ;

        return \$bag;
    }
}
", "vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Routing/RouterTest.php");
    }
}
