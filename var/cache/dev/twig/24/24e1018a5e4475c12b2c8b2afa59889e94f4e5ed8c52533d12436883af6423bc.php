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

/* vendor/symfony/routing/Tests/Annotation/RouteTest.php */
class __TwigTemplate_e097c07d2fd1fc5d90fabc7a8ea97b63f84f4ef735eb6a022c3323026b57fdab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Annotation/RouteTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Annotation/RouteTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RouteTest extends TestCase
{
    public function testInvalidRouteParameter()
    {
        \$this->expectException('BadMethodCallException');
        \$route = new Route(['foo' => 'bar']);
    }

    public function testTryingToSetLocalesDirectly()
    {
        \$this->expectException('BadMethodCallException');
        \$route = new Route(['locales' => ['nl' => 'bar']]);
    }

    /**
     * @dataProvider getValidParameters
     */
    public function testRouteParameters(\$parameter, \$value, \$getter)
    {
        \$route = new Route([\$parameter => \$value]);
        \$this->assertEquals(\$route->\$getter(), \$value);
    }

    public function getValidParameters()
    {
        return [
            ['value', '/Blog', 'getPath'],
            ['requirements', ['locale' => 'en'], 'getRequirements'],
            ['options', ['compiler_class' => 'RouteCompiler'], 'getOptions'],
            ['name', 'blog_index', 'getName'],
            ['defaults', ['_controller' => 'MyBlogBundle:Blog:index'], 'getDefaults'],
            ['schemes', ['https'], 'getSchemes'],
            ['methods', ['GET', 'POST'], 'getMethods'],
            ['host', '{locale}.example.com', 'getHost'],
            ['condition', 'context.getMethod() == \"GET\"', 'getCondition'],
            ['value', ['nl' => '/hier', 'en' => '/here'], 'getLocalizedPaths'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Annotation/RouteTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RouteTest extends TestCase
{
    public function testInvalidRouteParameter()
    {
        \$this->expectException('BadMethodCallException');
        \$route = new Route(['foo' => 'bar']);
    }

    public function testTryingToSetLocalesDirectly()
    {
        \$this->expectException('BadMethodCallException');
        \$route = new Route(['locales' => ['nl' => 'bar']]);
    }

    /**
     * @dataProvider getValidParameters
     */
    public function testRouteParameters(\$parameter, \$value, \$getter)
    {
        \$route = new Route([\$parameter => \$value]);
        \$this->assertEquals(\$route->\$getter(), \$value);
    }

    public function getValidParameters()
    {
        return [
            ['value', '/Blog', 'getPath'],
            ['requirements', ['locale' => 'en'], 'getRequirements'],
            ['options', ['compiler_class' => 'RouteCompiler'], 'getOptions'],
            ['name', 'blog_index', 'getName'],
            ['defaults', ['_controller' => 'MyBlogBundle:Blog:index'], 'getDefaults'],
            ['schemes', ['https'], 'getSchemes'],
            ['methods', ['GET', 'POST'], 'getMethods'],
            ['host', '{locale}.example.com', 'getHost'],
            ['condition', 'context.getMethod() == \"GET\"', 'getCondition'],
            ['value', ['nl' => '/hier', 'en' => '/here'], 'getLocalizedPaths'],
        ];
    }
}
", "vendor/symfony/routing/Tests/Annotation/RouteTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Annotation/RouteTest.php");
    }
}
