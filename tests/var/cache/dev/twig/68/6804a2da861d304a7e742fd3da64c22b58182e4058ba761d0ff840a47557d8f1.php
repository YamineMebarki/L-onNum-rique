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

/* vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php */
class __TwigTemplate_485290e2d52d677cc0205ec8b9efcc461aa2d7bea5e3e90b13340ff0c304cb30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Matcher;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class TraceableUrlMatcherTest extends UrlMatcherTest
{
    public function test()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', [], ['POST']));
        \$coll->add('bar', new Route('/bar/{id}', [], ['id' => '\\d+']));
        \$coll->add('bar1', new Route('/bar/{name}', [], ['id' => '\\w+'], [], '', [], ['POST']));
        \$coll->add('bar2', new Route('/foo', [], [], [], 'baz'));
        \$coll->add('bar3', new Route('/foo1', [], [], [], 'baz'));
        \$coll->add('bar4', new Route('/foo2', [], [], [], 'baz', [], [], 'context.getMethod() == \"GET\"'));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$coll, \$context);
        \$traces = \$matcher->getTraces('/babar');
        \$this->assertSame([0, 0, 0, 0, 0, 0], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo');
        \$this->assertSame([1, 0, 0, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/12');
        \$this->assertSame([0, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/dd');
        \$this->assertSame([0, 1, 1, 0, 0, 0], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo1');
        \$this->assertSame([0, 0, 0, 0, 2], \$this->getLevels(\$traces));

        \$context->setMethod('POST');
        \$traces = \$matcher->getTraces('/foo');
        \$this->assertSame([2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/dd');
        \$this->assertSame([0, 1, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo2');
        \$this->assertSame([0, 0, 0, 0, 0, 1], \$this->getLevels(\$traces));
    }

    public function testMatchRouteOnMultipleHosts()
    {
        \$routes = new RouteCollection();
        \$routes->add('first', new Route(
            '/mypath/',
            ['_controller' => 'MainBundle:Info:first'],
            [],
            [],
            'some.example.com'
        ));

        \$routes->add('second', new Route(
            '/mypath/',
            ['_controller' => 'MainBundle:Info:second'],
            [],
            [],
            'another.example.com'
        ));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$routes, \$context);

        \$traces = \$matcher->getTraces('/mypath/');
        \$this->assertSame(
            [TraceableUrlMatcher::ROUTE_ALMOST_MATCHES, TraceableUrlMatcher::ROUTE_ALMOST_MATCHES],
            \$this->getLevels(\$traces)
        );
    }

    public function getLevels(\$traces)
    {
        \$levels = [];
        foreach (\$traces as \$trace) {
            \$levels[] = \$trace['level'];
        }

        return \$levels;
    }

    public function testRoutesWithConditions()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo', [], [], [], 'baz', [], [], \"request.headers.get('User-Agent') matches '/firefox/i'\"));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$routes, \$context);

        \$notMatchingRequest = Request::create('/foo', 'GET');
        \$traces = \$matcher->getTracesForRequest(\$notMatchingRequest);
        \$this->assertEquals(\"Condition \\\"request.headers.get('User-Agent') matches '/firefox/i'\\\" does not evaluate to \\\"true\\\"\", \$traces[0]['log']);

        \$matchingRequest = Request::create('/foo', 'GET', [], [], [], ['HTTP_USER_AGENT' => 'Firefox']);
        \$traces = \$matcher->getTracesForRequest(\$matchingRequest);
        \$this->assertEquals('Route matches!', \$traces[0]['log']);
    }

    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        return new TraceableUrlMatcher(\$routes, \$context ?: new RequestContext());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Matcher;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class TraceableUrlMatcherTest extends UrlMatcherTest
{
    public function test()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', [], ['POST']));
        \$coll->add('bar', new Route('/bar/{id}', [], ['id' => '\\d+']));
        \$coll->add('bar1', new Route('/bar/{name}', [], ['id' => '\\w+'], [], '', [], ['POST']));
        \$coll->add('bar2', new Route('/foo', [], [], [], 'baz'));
        \$coll->add('bar3', new Route('/foo1', [], [], [], 'baz'));
        \$coll->add('bar4', new Route('/foo2', [], [], [], 'baz', [], [], 'context.getMethod() == \"GET\"'));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$coll, \$context);
        \$traces = \$matcher->getTraces('/babar');
        \$this->assertSame([0, 0, 0, 0, 0, 0], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo');
        \$this->assertSame([1, 0, 0, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/12');
        \$this->assertSame([0, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/dd');
        \$this->assertSame([0, 1, 1, 0, 0, 0], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo1');
        \$this->assertSame([0, 0, 0, 0, 2], \$this->getLevels(\$traces));

        \$context->setMethod('POST');
        \$traces = \$matcher->getTraces('/foo');
        \$this->assertSame([2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/bar/dd');
        \$this->assertSame([0, 1, 2], \$this->getLevels(\$traces));

        \$traces = \$matcher->getTraces('/foo2');
        \$this->assertSame([0, 0, 0, 0, 0, 1], \$this->getLevels(\$traces));
    }

    public function testMatchRouteOnMultipleHosts()
    {
        \$routes = new RouteCollection();
        \$routes->add('first', new Route(
            '/mypath/',
            ['_controller' => 'MainBundle:Info:first'],
            [],
            [],
            'some.example.com'
        ));

        \$routes->add('second', new Route(
            '/mypath/',
            ['_controller' => 'MainBundle:Info:second'],
            [],
            [],
            'another.example.com'
        ));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$routes, \$context);

        \$traces = \$matcher->getTraces('/mypath/');
        \$this->assertSame(
            [TraceableUrlMatcher::ROUTE_ALMOST_MATCHES, TraceableUrlMatcher::ROUTE_ALMOST_MATCHES],
            \$this->getLevels(\$traces)
        );
    }

    public function getLevels(\$traces)
    {
        \$levels = [];
        foreach (\$traces as \$trace) {
            \$levels[] = \$trace['level'];
        }

        return \$levels;
    }

    public function testRoutesWithConditions()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo', [], [], [], 'baz', [], [], \"request.headers.get('User-Agent') matches '/firefox/i'\"));

        \$context = new RequestContext();
        \$context->setHost('baz');

        \$matcher = new TraceableUrlMatcher(\$routes, \$context);

        \$notMatchingRequest = Request::create('/foo', 'GET');
        \$traces = \$matcher->getTracesForRequest(\$notMatchingRequest);
        \$this->assertEquals(\"Condition \\\"request.headers.get('User-Agent') matches '/firefox/i'\\\" does not evaluate to \\\"true\\\"\", \$traces[0]['log']);

        \$matchingRequest = Request::create('/foo', 'GET', [], [], [], ['HTTP_USER_AGENT' => 'Firefox']);
        \$traces = \$matcher->getTracesForRequest(\$matchingRequest);
        \$this->assertEquals('Route matches!', \$traces[0]['log']);
    }

    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        return new TraceableUrlMatcher(\$routes, \$context ?: new RequestContext());
    }
}
", "vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/TraceableUrlMatcherTest.php");
    }
}
