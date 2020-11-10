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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php */
class __TwigTemplate_e5a32f1149a857f7c4707be674acefa62f0d256fd38931651010596da4727b71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ProfilerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ProfilerPassTest extends TestCase
{
    /**
     * Tests that collectors that specify a template but no \"id\" will throw
     * an exception (both are needed if the template is specified).
     *
     * Thus, a fully-valid tag looks something like this:
     *
     *     <tag name=\"data_collector\" template=\"YourBundle:Collector:templatename\" id=\"your_collector_name\" />
     */
    public function testTemplateNoIdThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$builder->register('profiler', 'ProfilerClass');
        \$builder->register('my_collector_service')
            ->addTag('data_collector', ['template' => 'foo']);

        \$profilerPass = new ProfilerPass();
        \$profilerPass->process(\$builder);
    }

    public function testValidCollector()
    {
        \$container = new ContainerBuilder();
        \$profilerDefinition = \$container->register('profiler', 'ProfilerClass');
        \$container->register('my_collector_service')
            ->addTag('data_collector', ['template' => 'foo', 'id' => 'my_collector']);

        \$profilerPass = new ProfilerPass();
        \$profilerPass->process(\$container);

        \$this->assertSame(['my_collector_service' => ['my_collector', 'foo']], \$container->getParameter('data_collector.templates'));

        // grab the method calls off of the \"profiler\" definition
        \$methodCalls = \$profilerDefinition->getMethodCalls();
        \$this->assertCount(1, \$methodCalls);
        \$this->assertEquals('add', \$methodCalls[0][0]); // grab the method part of the first call
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ProfilerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ProfilerPassTest extends TestCase
{
    /**
     * Tests that collectors that specify a template but no \"id\" will throw
     * an exception (both are needed if the template is specified).
     *
     * Thus, a fully-valid tag looks something like this:
     *
     *     <tag name=\"data_collector\" template=\"YourBundle:Collector:templatename\" id=\"your_collector_name\" />
     */
    public function testTemplateNoIdThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$builder->register('profiler', 'ProfilerClass');
        \$builder->register('my_collector_service')
            ->addTag('data_collector', ['template' => 'foo']);

        \$profilerPass = new ProfilerPass();
        \$profilerPass->process(\$builder);
    }

    public function testValidCollector()
    {
        \$container = new ContainerBuilder();
        \$profilerDefinition = \$container->register('profiler', 'ProfilerClass');
        \$container->register('my_collector_service')
            ->addTag('data_collector', ['template' => 'foo', 'id' => 'my_collector']);

        \$profilerPass = new ProfilerPass();
        \$profilerPass->process(\$container);

        \$this->assertSame(['my_collector_service' => ['my_collector', 'foo']], \$container->getParameter('data_collector.templates'));

        // grab the method calls off of the \"profiler\" definition
        \$methodCalls = \$profilerDefinition->getMethodCalls();
        \$this->assertCount(1, \$methodCalls);
        \$this->assertEquals('add', \$methodCalls[0][0]); // grab the method part of the first call
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/ProfilerPassTest.php");
    }
}
