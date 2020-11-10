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

/* vendor/symfony/routing/Tests/RouterTest.php */
class __TwigTemplate_81ba47bd230de69deb59131e6769e007284a2001e17a14943191e43c49f0d84d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/RouterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/RouterTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\Router;

class RouterTest extends TestCase
{
    private \$router = null;

    private \$loader = null;

    protected function setUp(): void
    {
        \$this->loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$this->router = new Router(\$this->loader, 'routing.yml');
    }

    public function testSetOptionsWithSupportedOptions()
    {
        \$this->router->setOptions([
            'cache_dir' => './cache',
            'debug' => true,
            'resource_type' => 'ResourceType',
        ]);

        \$this->assertSame('./cache', \$this->router->getOption('cache_dir'));
        \$this->assertTrue(\$this->router->getOption('debug'));
        \$this->assertSame('ResourceType', \$this->router->getOption('resource_type'));
    }

    public function testSetOptionsWithUnsupportedOptions()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the following options: \"option_foo\", \"option_bar\"');
        \$this->router->setOptions([
            'cache_dir' => './cache',
            'option_foo' => true,
            'option_bar' => 'baz',
            'resource_type' => 'ResourceType',
        ]);
    }

    public function testSetOptionWithSupportedOption()
    {
        \$this->router->setOption('cache_dir', './cache');

        \$this->assertSame('./cache', \$this->router->getOption('cache_dir'));
    }

    public function testSetOptionWithUnsupportedOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the \"option_foo\" option');
        \$this->router->setOption('option_foo', true);
    }

    public function testGetOptionWithUnsupportedOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the \"option_foo\" option');
        \$this->router->getOption('option_foo', true);
    }

    public function testThatRouteCollectionIsLoaded()
    {
        \$this->router->setOption('resource_type', 'ResourceType');

        \$routeCollection = new RouteCollection();

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', 'ResourceType')
            ->willReturn(\$routeCollection);

        \$this->assertSame(\$routeCollection, \$this->router->getRouteCollection());
    }

    public function testMatcherIsCreatedIfCacheIsNotConfigured()
    {
        \$this->router->setOption('cache_dir', null);

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', null)
            ->willReturn(new RouteCollection());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\Routing\\\\Matcher\\\\UrlMatcher', \$this->router->getMatcher());
    }

    public function testGeneratorIsCreatedIfCacheIsNotConfigured()
    {
        \$this->router->setOption('cache_dir', null);

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', null)
            ->willReturn(new RouteCollection());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\Routing\\\\Generator\\\\UrlGenerator', \$this->router->getGenerator());
    }

    public function testMatchRequestWithUrlMatcherInterface()
    {
        \$matcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface')->getMock();
        \$matcher->expects(\$this->once())->method('match');

        \$p = new \\ReflectionProperty(\$this->router, 'matcher');
        \$p->setAccessible(true);
        \$p->setValue(\$this->router, \$matcher);

        \$this->router->matchRequest(Request::create('/'));
    }

    public function testMatchRequestWithRequestMatcherInterface()
    {
        \$matcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$matcher->expects(\$this->once())->method('matchRequest');

        \$p = new \\ReflectionProperty(\$this->router, 'matcher');
        \$p->setAccessible(true);
        \$p->setValue(\$this->router, \$matcher);

        \$this->router->matchRequest(Request::create('/'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/RouterTest.php";
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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\Router;

class RouterTest extends TestCase
{
    private \$router = null;

    private \$loader = null;

    protected function setUp(): void
    {
        \$this->loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$this->router = new Router(\$this->loader, 'routing.yml');
    }

    public function testSetOptionsWithSupportedOptions()
    {
        \$this->router->setOptions([
            'cache_dir' => './cache',
            'debug' => true,
            'resource_type' => 'ResourceType',
        ]);

        \$this->assertSame('./cache', \$this->router->getOption('cache_dir'));
        \$this->assertTrue(\$this->router->getOption('debug'));
        \$this->assertSame('ResourceType', \$this->router->getOption('resource_type'));
    }

    public function testSetOptionsWithUnsupportedOptions()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the following options: \"option_foo\", \"option_bar\"');
        \$this->router->setOptions([
            'cache_dir' => './cache',
            'option_foo' => true,
            'option_bar' => 'baz',
            'resource_type' => 'ResourceType',
        ]);
    }

    public function testSetOptionWithSupportedOption()
    {
        \$this->router->setOption('cache_dir', './cache');

        \$this->assertSame('./cache', \$this->router->getOption('cache_dir'));
    }

    public function testSetOptionWithUnsupportedOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the \"option_foo\" option');
        \$this->router->setOption('option_foo', true);
    }

    public function testGetOptionWithUnsupportedOption()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The Router does not support the \"option_foo\" option');
        \$this->router->getOption('option_foo', true);
    }

    public function testThatRouteCollectionIsLoaded()
    {
        \$this->router->setOption('resource_type', 'ResourceType');

        \$routeCollection = new RouteCollection();

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', 'ResourceType')
            ->willReturn(\$routeCollection);

        \$this->assertSame(\$routeCollection, \$this->router->getRouteCollection());
    }

    public function testMatcherIsCreatedIfCacheIsNotConfigured()
    {
        \$this->router->setOption('cache_dir', null);

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', null)
            ->willReturn(new RouteCollection());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\Routing\\\\Matcher\\\\UrlMatcher', \$this->router->getMatcher());
    }

    public function testGeneratorIsCreatedIfCacheIsNotConfigured()
    {
        \$this->router->setOption('cache_dir', null);

        \$this->loader->expects(\$this->once())
            ->method('load')->with('routing.yml', null)
            ->willReturn(new RouteCollection());

        \$this->assertInstanceOf('Symfony\\\\Component\\\\Routing\\\\Generator\\\\UrlGenerator', \$this->router->getGenerator());
    }

    public function testMatchRequestWithUrlMatcherInterface()
    {
        \$matcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface')->getMock();
        \$matcher->expects(\$this->once())->method('match');

        \$p = new \\ReflectionProperty(\$this->router, 'matcher');
        \$p->setAccessible(true);
        \$p->setValue(\$this->router, \$matcher);

        \$this->router->matchRequest(Request::create('/'));
    }

    public function testMatchRequestWithRequestMatcherInterface()
    {
        \$matcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$matcher->expects(\$this->once())->method('matchRequest');

        \$p = new \\ReflectionProperty(\$this->router, 'matcher');
        \$p->setAccessible(true);
        \$p->setValue(\$this->router, \$matcher);

        \$this->router->matchRequest(Request::create('/'));
    }
}
", "vendor/symfony/routing/Tests/RouterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/RouterTest.php");
    }
}
