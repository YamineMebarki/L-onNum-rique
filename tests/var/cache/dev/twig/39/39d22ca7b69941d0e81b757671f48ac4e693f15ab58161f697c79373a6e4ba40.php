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

/* vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php */
class __TwigTemplate_9fffbed858d1f8d2cc6c5fabfd674501b481d438632086291ab40fd515f6394d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension;
use Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class HttpKernelExtensionTest extends TestCase
{
    public function testFragmentWithError()
    {
        \$this->expectException('Twig\\Error\\RuntimeError');
        \$renderer = \$this->getFragmentHandler(\$this->throwException(new \\Exception('foo')));

        \$this->renderTemplate(\$renderer);
    }

    public function testRenderFragment()
    {
        \$renderer = \$this->getFragmentHandler(\$this->returnValue(new Response('html')));

        \$response = \$this->renderTemplate(\$renderer);

        \$this->assertEquals('html', \$response);
    }

    public function testUnknownFragmentRenderer()
    {
        \$context = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        \$renderer = new FragmentHandler(\$context);

        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"inline\" renderer does not exist.');

        \$renderer->render('/foo');
    }

    protected function getFragmentHandler(\$return)
    {
        \$strategy = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpKernel\\\\Fragment\\\\FragmentRendererInterface')->getMock();
        \$strategy->expects(\$this->once())->method('getName')->willReturn('inline');
        \$strategy->expects(\$this->once())->method('render')->will(\$return);

        \$context = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$context->expects(\$this->any())->method('getCurrentRequest')->willReturn(Request::create('/'));

        return new FragmentHandler(\$context, [\$strategy], false);
    }

    protected function renderTemplate(FragmentHandler \$renderer, \$template = '";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment("foo");
        echo "')
    {
        \$loader = new ArrayLoader(['index' => \$template]);
        \$twig = new Environment(\$loader, ['debug' => true, 'cache' => false]);
        \$twig->addExtension(new HttpKernelExtension());

        \$loader = \$this->getMockBuilder('Twig\\RuntimeLoader\\RuntimeLoaderInterface')->getMock();
        \$loader->expects(\$this->any())->method('load')->willReturnMap([
            ['Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime', new HttpKernelRuntime(\$renderer)],
        ]);
        \$twig->addRuntimeLoader(\$loader);

        return \$twig->render('index');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 72,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension;
use Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class HttpKernelExtensionTest extends TestCase
{
    public function testFragmentWithError()
    {
        \$this->expectException('Twig\\Error\\RuntimeError');
        \$renderer = \$this->getFragmentHandler(\$this->throwException(new \\Exception('foo')));

        \$this->renderTemplate(\$renderer);
    }

    public function testRenderFragment()
    {
        \$renderer = \$this->getFragmentHandler(\$this->returnValue(new Response('html')));

        \$response = \$this->renderTemplate(\$renderer);

        \$this->assertEquals('html', \$response);
    }

    public function testUnknownFragmentRenderer()
    {
        \$context = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        \$renderer = new FragmentHandler(\$context);

        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The \"inline\" renderer does not exist.');

        \$renderer->render('/foo');
    }

    protected function getFragmentHandler(\$return)
    {
        \$strategy = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpKernel\\\\Fragment\\\\FragmentRendererInterface')->getMock();
        \$strategy->expects(\$this->once())->method('getName')->willReturn('inline');
        \$strategy->expects(\$this->once())->method('render')->will(\$return);

        \$context = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$context->expects(\$this->any())->method('getCurrentRequest')->willReturn(Request::create('/'));

        return new FragmentHandler(\$context, [\$strategy], false);
    }

    protected function renderTemplate(FragmentHandler \$renderer, \$template = '{{ render(\"foo\") }}')
    {
        \$loader = new ArrayLoader(['index' => \$template]);
        \$twig = new Environment(\$loader, ['debug' => true, 'cache' => false]);
        \$twig->addExtension(new HttpKernelExtension());

        \$loader = \$this->getMockBuilder('Twig\\RuntimeLoader\\RuntimeLoaderInterface')->getMock();
        \$loader->expects(\$this->any())->method('load')->willReturnMap([
            ['Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime', new HttpKernelRuntime(\$renderer)],
        ]);
        \$twig->addRuntimeLoader(\$loader);

        return \$twig->render('index');
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/HttpKernelExtensionTest.php");
    }
}
