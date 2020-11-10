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

/* vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php */
class __TwigTemplate_37b57ba54721c66e71ab6bc333177e441cb5c400c9c6c78ac002253f33bde956 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @requires function \\Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher::match
 */
class RedirectableCompiledUrlMatcherTest extends TestCase
{
    public function testRedirectWhenNoSlash()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo/'));

        \$matcher = \$this->getMatcher(\$routes, \$context = new RequestContext());

        \$this->assertEquals([
                '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
                'path' => '/foo/',
                'permanent' => true,
                'scheme' => null,
                'httpPort' => \$context->getHttpPort(),
                'httpsPort' => \$context->getHttpsPort(),
                '_route' => 'foo',
            ],
            \$matcher->match('/foo')
        );
    }

    public function testSchemeRedirect()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo', [], [], [], '', ['https']));

        \$matcher = \$this->getMatcher(\$routes, \$context = new RequestContext());

        \$this->assertEquals([
                '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
                'path' => '/foo',
                'permanent' => true,
                'scheme' => 'https',
                'httpPort' => \$context->getHttpPort(),
                'httpsPort' => \$context->getHttpsPort(),
                '_route' => 'foo',
            ],
            \$matcher->match('/foo')
        );
    }

    private function getMatcher(RouteCollection \$routes, RequestContext \$context)
    {
        \$dumper = new CompiledUrlMatcherDumper(\$routes);

        return new RedirectableCompiledUrlMatcher(\$dumper->getCompiledRoutes(), \$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @requires function \\Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher::match
 */
class RedirectableCompiledUrlMatcherTest extends TestCase
{
    public function testRedirectWhenNoSlash()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo/'));

        \$matcher = \$this->getMatcher(\$routes, \$context = new RequestContext());

        \$this->assertEquals([
                '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
                'path' => '/foo/',
                'permanent' => true,
                'scheme' => null,
                'httpPort' => \$context->getHttpPort(),
                'httpsPort' => \$context->getHttpsPort(),
                '_route' => 'foo',
            ],
            \$matcher->match('/foo')
        );
    }

    public function testSchemeRedirect()
    {
        \$routes = new RouteCollection();
        \$routes->add('foo', new Route('/foo', [], [], [], '', ['https']));

        \$matcher = \$this->getMatcher(\$routes, \$context = new RequestContext());

        \$this->assertEquals([
                '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
                'path' => '/foo',
                'permanent' => true,
                'scheme' => 'https',
                'httpPort' => \$context->getHttpPort(),
                'httpsPort' => \$context->getHttpsPort(),
                '_route' => 'foo',
            ],
            \$matcher->match('/foo')
        );
    }

    private function getMatcher(RouteCollection \$routes, RequestContext \$context)
    {
        \$dumper = new CompiledUrlMatcherDumper(\$routes);

        return new RedirectableCompiledUrlMatcher(\$dumper->getCompiledRoutes(), \$context);
    }
}
", "vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Routing/RedirectableCompiledUrlMatcherTest.php");
    }
}
