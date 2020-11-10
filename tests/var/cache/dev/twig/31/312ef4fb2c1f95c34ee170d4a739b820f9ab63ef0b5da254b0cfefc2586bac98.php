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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php */
class __TwigTemplate_62d1bd6b9211e13820c31c504ce061faf57fa493f978cc2097bcd2b12d0371c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler;

class LazyLoadingFragmentHandlerTest extends TestCase
{
    public function testRender()
    {
        \$renderer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface')->getMock();
        \$renderer->expects(\$this->once())->method('getName')->willReturn('foo');
        \$renderer->expects(\$this->any())->method('render')->willReturn(new Response());

        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->expects(\$this->any())->method('getCurrentRequest')->willReturn(Request::create('/'));

        \$container = \$this->getMockBuilder('Psr\\Container\\ContainerInterface')->getMock();
        \$container->expects(\$this->once())->method('has')->with('foo')->willReturn(true);
        \$container->expects(\$this->once())->method('get')->willReturn(\$renderer);

        \$handler = new LazyLoadingFragmentHandler(\$container, \$requestStack, false);

        \$handler->render('/foo', 'foo');

        // second call should not lazy-load anymore (see once() above on the get() method)
        \$handler->render('/foo', 'foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler;

class LazyLoadingFragmentHandlerTest extends TestCase
{
    public function testRender()
    {
        \$renderer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface')->getMock();
        \$renderer->expects(\$this->once())->method('getName')->willReturn('foo');
        \$renderer->expects(\$this->any())->method('render')->willReturn(new Response());

        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->expects(\$this->any())->method('getCurrentRequest')->willReturn(Request::create('/'));

        \$container = \$this->getMockBuilder('Psr\\Container\\ContainerInterface')->getMock();
        \$container->expects(\$this->once())->method('has')->with('foo')->willReturn(true);
        \$container->expects(\$this->once())->method('get')->willReturn(\$renderer);

        \$handler = new LazyLoadingFragmentHandler(\$container, \$requestStack, false);

        \$handler->render('/foo', 'foo');

        // second call should not lazy-load anymore (see once() above on the get() method)
        \$handler->render('/foo', 'foo');
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/LazyLoadingFragmentHandlerTest.php");
    }
}
