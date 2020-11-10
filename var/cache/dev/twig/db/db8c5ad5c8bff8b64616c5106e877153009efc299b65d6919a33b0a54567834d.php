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

/* vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php */
class __TwigTemplate_3bacfe4a44652f47a3f9b2334126feba6917dc1ad10a8cbf1c8020923e742267 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php"));

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
use Symfony\\Component\\Routing\\Loader\\ClosureLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ClosureLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new ClosureLoader();

        \$closure = function () {};

        \$this->assertTrue(\$loader->supports(\$closure), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$loader->supports(\$closure, 'closure'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$loader->supports(\$closure, 'foo'), '->supports() checks the resource type if specified');
    }

    public function testLoad()
    {
        \$loader = new ClosureLoader();

        \$route = new Route('/');
        \$routes = \$loader->load(function () use (\$route) {
            \$routes = new RouteCollection();

            \$routes->add('foo', \$route);

            return \$routes;
        });

        \$this->assertEquals(\$route, \$routes->get('foo'), '->load() loads a \\Closure resource');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php";
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
use Symfony\\Component\\Routing\\Loader\\ClosureLoader;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ClosureLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new ClosureLoader();

        \$closure = function () {};

        \$this->assertTrue(\$loader->supports(\$closure), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$loader->supports(\$closure, 'closure'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$loader->supports(\$closure, 'foo'), '->supports() checks the resource type if specified');
    }

    public function testLoad()
    {
        \$loader = new ClosureLoader();

        \$route = new Route('/');
        \$routes = \$loader->load(function () use (\$route) {
            \$routes = new RouteCollection();

            \$routes->add('foo', \$route);

            return \$routes;
        });

        \$this->assertEquals(\$route, \$routes->get('foo'), '->load() loads a \\Closure resource');
    }
}
", "vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/ClosureLoaderTest.php");
    }
}
