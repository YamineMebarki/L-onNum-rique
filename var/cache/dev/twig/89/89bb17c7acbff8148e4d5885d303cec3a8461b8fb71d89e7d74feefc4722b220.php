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

/* vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php */
class __TwigTemplate_48115b1204746cbe36d1b2aad3f5d74b396b240d23537fa327d715a9f393f205 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

class AnnotatedControllerTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getRoutes
     */
    public function testAnnotatedController(\$path, \$expectedValue)
    {
        \$client = \$this->createClient(['test_case' => 'AnnotatedController', 'root_config' => 'config.yml']);
        \$client->request('GET', '/annotated'.\$path);

        \$this->assertSame(200, \$client->getResponse()->getStatusCode());
        \$this->assertSame(\$expectedValue, \$client->getResponse()->getContent());
    }

    public function getRoutes()
    {
        return [
            ['/null_request', 'Symfony\\Component\\HttpFoundation\\Request'],
            ['/null_argument', ''],
            ['/null_argument_with_route_param', ''],
            ['/null_argument_with_route_param/value', 'value'],
            ['/argument_with_route_param_and_default', 'value'],
            ['/argument_with_route_param_and_default/custom', 'custom'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

class AnnotatedControllerTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getRoutes
     */
    public function testAnnotatedController(\$path, \$expectedValue)
    {
        \$client = \$this->createClient(['test_case' => 'AnnotatedController', 'root_config' => 'config.yml']);
        \$client->request('GET', '/annotated'.\$path);

        \$this->assertSame(200, \$client->getResponse()->getStatusCode());
        \$this->assertSame(\$expectedValue, \$client->getResponse()->getContent());
    }

    public function getRoutes()
    {
        return [
            ['/null_request', 'Symfony\\Component\\HttpFoundation\\Request'],
            ['/null_argument', ''],
            ['/null_argument_with_route_param', ''],
            ['/null_argument_with_route_param/value', 'value'],
            ['/argument_with_route_param_and_default', 'value'],
            ['/argument_with_route_param_and_default/custom', 'custom'],
        ];
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/AnnotatedControllerTest.php");
    }
}
