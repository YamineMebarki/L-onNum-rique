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

/* vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php */
class __TwigTemplate_5586a631b0ec3f4dae8073dfac138cdd689fbd651c7b04172a12ca93d3678003 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php"));

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

use Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

class CompiledRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        \$dumper = new CompiledUrlMatcherDumper(\$routes);
        \$compiledRoutes = \$dumper->getCompiledRoutes();

        return \$this->getMockBuilder(TestCompiledRedirectableUrlMatcher::class)
            ->setConstructorArgs([\$compiledRoutes, \$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestCompiledRedirectableUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    public function redirect(\$path, \$route, \$scheme = null)
    {
        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php";
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

use Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

class CompiledRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        \$dumper = new CompiledUrlMatcherDumper(\$routes);
        \$compiledRoutes = \$dumper->getCompiledRoutes();

        return \$this->getMockBuilder(TestCompiledRedirectableUrlMatcher::class)
            ->setConstructorArgs([\$compiledRoutes, \$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestCompiledRedirectableUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    public function redirect(\$path, \$route, \$scheme = null)
    {
        return [];
    }
}
", "vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/CompiledRedirectableUrlMatcherTest.php");
    }
}
