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

/* vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php */
class __TwigTemplate_41372a91db323131e140207e304264d12b9b9b4e10da9589e6b97a5ac2e8723e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php"));

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

use Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcher;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class DumpedRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        static \$i = 0;

        \$class = 'DumpedRedirectableUrlMatcher'.++\$i;
        \$dumper = new PhpMatcherDumper(\$routes);
        eval('?>'.\$dumper->dump(['class' => \$class, 'base_class' => 'Symfony\\Component\\Routing\\Tests\\Matcher\\TestDumpedRedirectableUrlMatcher']));

        return \$this->getMockBuilder(\$class)
            ->setConstructorArgs([\$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestDumpedRedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
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
        return "vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php";
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

use Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcher;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class DumpedRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        static \$i = 0;

        \$class = 'DumpedRedirectableUrlMatcher'.++\$i;
        \$dumper = new PhpMatcherDumper(\$routes);
        eval('?>'.\$dumper->dump(['class' => \$class, 'base_class' => 'Symfony\\Component\\Routing\\Tests\\Matcher\\TestDumpedRedirectableUrlMatcher']));

        return \$this->getMockBuilder(\$class)
            ->setConstructorArgs([\$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestDumpedRedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
    public function redirect(\$path, \$route, \$scheme = null)
    {
        return [];
    }
}
", "vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/DumpedRedirectableUrlMatcherTest.php");
    }
}
