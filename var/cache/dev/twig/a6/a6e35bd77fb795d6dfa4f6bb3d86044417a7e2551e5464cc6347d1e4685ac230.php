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

/* vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php */
class __TwigTemplate_9c4dd48ee05fa6586f05a347ecd9644804c22cfbfce866e9f6ca81971067fec7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php"));

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

use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RedirectableUrlMatcherTest extends UrlMatcherTest
{
    public function testMissingTrailingSlash()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->willReturn([]);
        \$matcher->match('/foo');
    }

    public function testExtraTrailingSlash()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->willReturn([]);
        \$matcher->match('/foo/');
    }

    public function testRedirectWhenNoSlashForNonSafeMethod()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException');
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));

        \$context = new RequestContext();
        \$context->setMethod('POST');
        \$matcher = \$this->getUrlMatcher(\$coll, \$context);
        \$matcher->match('/foo');
    }

    public function testSchemeRedirectRedirectsToFirstScheme()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['FTP', 'HTTPS']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo', 'foo', 'ftp')
            ->willReturn(['_route' => 'foo'])
        ;
        \$matcher->match('/foo');
    }

    public function testNoSchemaRedirectIfOneOfMultipleSchemesMatches()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['https', 'http']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->never())
            ->method('redirect');
        \$matcher->match('/foo');
    }

    public function testSchemeRedirectWithParams()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/{bar}', [], [], [], '', ['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo/baz', 'foo', 'https')
            ->willReturn(['redirect' => 'value'])
        ;
        \$this->assertEquals(['_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'], \$matcher->match('/foo/baz'));
    }

    public function testSchemeRedirectForRoot()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/', [], [], [], '', ['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/', 'foo', 'https')
            ->willReturn(['redirect' => 'value']);
        \$this->assertEquals(['_route' => 'foo', 'redirect' => 'value'], \$matcher->match('/'));
    }

    public function testSlashRedirectWithParams()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/{bar}/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo/baz/', 'foo', null)
            ->willReturn(['redirect' => 'value'])
        ;
        \$this->assertEquals(['_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'], \$matcher->match('/foo/baz'));
    }

    public function testRedirectPreservesUrlEncoding()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo:bar/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo%3Abar/')->willReturn([]);
        \$matcher->match('/foo%3Abar');
    }

    public function testSchemeRequirement()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['https']));
        \$matcher = \$this->getUrlMatcher(\$coll, new RequestContext());
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo', 'foo', 'https')->willReturn([]);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo'));
    }

    public function testFallbackPage()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));
        \$coll->add('bar', new Route('/{name}'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo/', 'foo')->willReturn(['_route' => 'foo']);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo'));

        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo'));
        \$coll->add('bar', new Route('/{name}/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo', 'foo')->willReturn(['_route' => 'foo']);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo/'));
    }

    public function testMissingTrailingSlashAndScheme()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', (new Route('/foo/'))->setSchemes(['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo/', 'foo', 'https')->willReturn([]);
        \$matcher->match('/foo');
    }

    public function testSlashAndVerbPrecedenceWithRedirection()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/api/customers/{customerId}/contactpersons', [], [], [], '', [], ['post']));
        \$coll->add('b', new Route('/api/customers/{customerId}/contactpersons/', [], [], [], '', [], ['get']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$expected = [
            '_route' => 'b',
            'customerId' => '123',
        ];
        \$this->assertEquals(\$expected, \$matcher->match('/api/customers/123/contactpersons/'));

        \$matcher->expects(\$this->once())->method('redirect')->with('/api/customers/123/contactpersons/')->willReturn([]);
        \$this->assertEquals(\$expected, \$matcher->match('/api/customers/123/contactpersons'));
    }

    public function testNonGreedyTrailingRequirement()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/{a}', [], ['a' => '\\d+']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/123')->willReturn([]);

        \$this->assertEquals(['_route' => 'a', 'a' => '123'], \$matcher->match('/123/'));
    }

    public function testTrailingRequirementWithDefault_A()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/fr-fr/{a}', ['a' => 'aaa'], ['a' => '.+']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/fr-fr')->willReturn([]);

        \$this->assertEquals(['_route' => 'a', 'a' => 'aaa'], \$matcher->match('/fr-fr/'));
    }

    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        return \$this->getMockForAbstractClass('Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher', [\$routes, \$context ?: new RequestContext()]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php";
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

use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RedirectableUrlMatcherTest extends UrlMatcherTest
{
    public function testMissingTrailingSlash()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->willReturn([]);
        \$matcher->match('/foo');
    }

    public function testExtraTrailingSlash()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->willReturn([]);
        \$matcher->match('/foo/');
    }

    public function testRedirectWhenNoSlashForNonSafeMethod()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException');
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));

        \$context = new RequestContext();
        \$context->setMethod('POST');
        \$matcher = \$this->getUrlMatcher(\$coll, \$context);
        \$matcher->match('/foo');
    }

    public function testSchemeRedirectRedirectsToFirstScheme()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['FTP', 'HTTPS']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo', 'foo', 'ftp')
            ->willReturn(['_route' => 'foo'])
        ;
        \$matcher->match('/foo');
    }

    public function testNoSchemaRedirectIfOneOfMultipleSchemesMatches()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['https', 'http']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->never())
            ->method('redirect');
        \$matcher->match('/foo');
    }

    public function testSchemeRedirectWithParams()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/{bar}', [], [], [], '', ['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo/baz', 'foo', 'https')
            ->willReturn(['redirect' => 'value'])
        ;
        \$this->assertEquals(['_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'], \$matcher->match('/foo/baz'));
    }

    public function testSchemeRedirectForRoot()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/', [], [], [], '', ['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/', 'foo', 'https')
            ->willReturn(['redirect' => 'value']);
        \$this->assertEquals(['_route' => 'foo', 'redirect' => 'value'], \$matcher->match('/'));
    }

    public function testSlashRedirectWithParams()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/{bar}/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher
            ->expects(\$this->once())
            ->method('redirect')
            ->with('/foo/baz/', 'foo', null)
            ->willReturn(['redirect' => 'value'])
        ;
        \$this->assertEquals(['_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'], \$matcher->match('/foo/baz'));
    }

    public function testRedirectPreservesUrlEncoding()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo:bar/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo%3Abar/')->willReturn([]);
        \$matcher->match('/foo%3Abar');
    }

    public function testSchemeRequirement()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo', [], [], [], '', ['https']));
        \$matcher = \$this->getUrlMatcher(\$coll, new RequestContext());
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo', 'foo', 'https')->willReturn([]);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo'));
    }

    public function testFallbackPage()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo/'));
        \$coll->add('bar', new Route('/{name}'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo/', 'foo')->willReturn(['_route' => 'foo']);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo'));

        \$coll = new RouteCollection();
        \$coll->add('foo', new Route('/foo'));
        \$coll->add('bar', new Route('/{name}/'));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo', 'foo')->willReturn(['_route' => 'foo']);
        \$this->assertSame(['_route' => 'foo'], \$matcher->match('/foo/'));
    }

    public function testMissingTrailingSlashAndScheme()
    {
        \$coll = new RouteCollection();
        \$coll->add('foo', (new Route('/foo/'))->setSchemes(['https']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/foo/', 'foo', 'https')->willReturn([]);
        \$matcher->match('/foo');
    }

    public function testSlashAndVerbPrecedenceWithRedirection()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/api/customers/{customerId}/contactpersons', [], [], [], '', [], ['post']));
        \$coll->add('b', new Route('/api/customers/{customerId}/contactpersons/', [], [], [], '', [], ['get']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$expected = [
            '_route' => 'b',
            'customerId' => '123',
        ];
        \$this->assertEquals(\$expected, \$matcher->match('/api/customers/123/contactpersons/'));

        \$matcher->expects(\$this->once())->method('redirect')->with('/api/customers/123/contactpersons/')->willReturn([]);
        \$this->assertEquals(\$expected, \$matcher->match('/api/customers/123/contactpersons'));
    }

    public function testNonGreedyTrailingRequirement()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/{a}', [], ['a' => '\\d+']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/123')->willReturn([]);

        \$this->assertEquals(['_route' => 'a', 'a' => '123'], \$matcher->match('/123/'));
    }

    public function testTrailingRequirementWithDefault_A()
    {
        \$coll = new RouteCollection();
        \$coll->add('a', new Route('/fr-fr/{a}', ['a' => 'aaa'], ['a' => '.+']));

        \$matcher = \$this->getUrlMatcher(\$coll);
        \$matcher->expects(\$this->once())->method('redirect')->with('/fr-fr')->willReturn([]);

        \$this->assertEquals(['_route' => 'a', 'a' => 'aaa'], \$matcher->match('/fr-fr/'));
    }

    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        return \$this->getMockForAbstractClass('Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher', [\$routes, \$context ?: new RequestContext()]);
    }
}
", "vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/RedirectableUrlMatcherTest.php");
    }
}
