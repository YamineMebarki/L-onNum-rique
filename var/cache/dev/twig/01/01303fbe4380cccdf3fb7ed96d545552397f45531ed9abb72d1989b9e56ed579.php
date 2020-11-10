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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php */
class __TwigTemplate_2985503333b8fb986371b1c1b82b88a191a0f278b3ac975e1a40c3ce04250465 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\FragmentRendererPass;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface;

class FragmentRendererPassTest extends TestCase
{
    /**
     * Tests that content rendering not implementing FragmentRendererInterface
     * triggers an exception.
     */
    public function testContentRendererWithoutInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$fragmentHandlerDefinition = \$builder->register('fragment.handler');
        \$builder->register('my_content_renderer', 'Symfony\\Component\\DependencyInjection\\Definition')
            ->addTag('kernel.fragment_renderer', ['alias' => 'foo']);

        \$pass = new FragmentRendererPass();
        \$pass->process(\$builder);

        \$this->assertEquals([['addRendererService', ['foo', 'my_content_renderer']]], \$fragmentHandlerDefinition->getMethodCalls());
    }

    public function testValidContentRenderer()
    {
        \$builder = new ContainerBuilder();
        \$fragmentHandlerDefinition = \$builder->register('fragment.handler')
            ->addArgument(null);
        \$builder->register('my_content_renderer', 'Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection\\RendererService')
            ->addTag('kernel.fragment_renderer', ['alias' => 'foo']);

        \$pass = new FragmentRendererPass();
        \$pass->process(\$builder);

        \$serviceLocatorDefinition = \$builder->getDefinition((string) \$fragmentHandlerDefinition->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDefinition->getClass());
        \$this->assertEquals(['foo' => new ServiceClosureArgument(new Reference('my_content_renderer'))], \$serviceLocatorDefinition->getArgument(0));
    }
}

class RendererService implements FragmentRendererInterface
{
    public function render(\$uri, Request \$request = null, array \$options = [])
    {
    }

    public function getName()
    {
        return 'test';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\FragmentRendererPass;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface;

class FragmentRendererPassTest extends TestCase
{
    /**
     * Tests that content rendering not implementing FragmentRendererInterface
     * triggers an exception.
     */
    public function testContentRendererWithoutInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$fragmentHandlerDefinition = \$builder->register('fragment.handler');
        \$builder->register('my_content_renderer', 'Symfony\\Component\\DependencyInjection\\Definition')
            ->addTag('kernel.fragment_renderer', ['alias' => 'foo']);

        \$pass = new FragmentRendererPass();
        \$pass->process(\$builder);

        \$this->assertEquals([['addRendererService', ['foo', 'my_content_renderer']]], \$fragmentHandlerDefinition->getMethodCalls());
    }

    public function testValidContentRenderer()
    {
        \$builder = new ContainerBuilder();
        \$fragmentHandlerDefinition = \$builder->register('fragment.handler')
            ->addArgument(null);
        \$builder->register('my_content_renderer', 'Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection\\RendererService')
            ->addTag('kernel.fragment_renderer', ['alias' => 'foo']);

        \$pass = new FragmentRendererPass();
        \$pass->process(\$builder);

        \$serviceLocatorDefinition = \$builder->getDefinition((string) \$fragmentHandlerDefinition->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDefinition->getClass());
        \$this->assertEquals(['foo' => new ServiceClosureArgument(new Reference('my_content_renderer'))], \$serviceLocatorDefinition->getArgument(0));
    }
}

class RendererService implements FragmentRendererInterface
{
    public function render(\$uri, Request \$request = null, array \$options = [])
    {
    }

    public function getName()
    {
        return 'test';
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/FragmentRendererPassTest.php");
    }
}
