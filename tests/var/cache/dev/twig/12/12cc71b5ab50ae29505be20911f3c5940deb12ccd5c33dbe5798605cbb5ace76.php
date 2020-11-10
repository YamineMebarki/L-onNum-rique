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

/* vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php */
class __TwigTemplate_df6791d5cb53b33166d9d370f0846cf85b43fc6419049e82512535759c70b312 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Fragment;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * @group time-sensitive
 */
class FragmentHandlerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        \$this->requestStack
            ->expects(\$this->any())
            ->method('getCurrentRequest')
            ->willReturn(Request::create('/'))
        ;
    }

    public function testRenderWhenRendererDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = new FragmentHandler(\$this->requestStack);
        \$handler->render('/', 'foo');
    }

    public function testRenderWithUnknownRenderer()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo')));

        \$handler->render('/', 'bar');
    }

    public function testDeliverWithUnsuccessfulResponse()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Error when rendering \"http://localhost/\" (Status code is 404).');
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo', 404)));

        \$handler->render('/', 'foo');
    }

    public function testRender()
    {
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo')), ['/', Request::create('/'), ['foo' => 'foo', 'ignore_errors' => true]]);

        \$this->assertEquals('foo', \$handler->render('/', 'foo', ['foo' => 'foo']));
    }

    protected function getHandler(\$returnValue, \$arguments = [])
    {
        \$renderer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface')->getMock();
        \$renderer
            ->expects(\$this->any())
            ->method('getName')
            ->willReturn('foo')
        ;
        \$e = \$renderer
            ->expects(\$this->any())
            ->method('render')
            ->will(\$returnValue)
        ;

        if (\$arguments) {
            \$e->with(...\$arguments);
        }

        \$handler = new FragmentHandler(\$this->requestStack);
        \$handler->addRenderer(\$renderer);

        return \$handler;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Fragment;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * @group time-sensitive
 */
class FragmentHandlerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        \$this->requestStack
            ->expects(\$this->any())
            ->method('getCurrentRequest')
            ->willReturn(Request::create('/'))
        ;
    }

    public function testRenderWhenRendererDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = new FragmentHandler(\$this->requestStack);
        \$handler->render('/', 'foo');
    }

    public function testRenderWithUnknownRenderer()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo')));

        \$handler->render('/', 'bar');
    }

    public function testDeliverWithUnsuccessfulResponse()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Error when rendering \"http://localhost/\" (Status code is 404).');
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo', 404)));

        \$handler->render('/', 'foo');
    }

    public function testRender()
    {
        \$handler = \$this->getHandler(\$this->returnValue(new Response('foo')), ['/', Request::create('/'), ['foo' => 'foo', 'ignore_errors' => true]]);

        \$this->assertEquals('foo', \$handler->render('/', 'foo', ['foo' => 'foo']));
    }

    protected function getHandler(\$returnValue, \$arguments = [])
    {
        \$renderer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface')->getMock();
        \$renderer
            ->expects(\$this->any())
            ->method('getName')
            ->willReturn('foo')
        ;
        \$e = \$renderer
            ->expects(\$this->any())
            ->method('render')
            ->will(\$returnValue)
        ;

        if (\$arguments) {
            \$e->with(...\$arguments);
        }

        \$handler = new FragmentHandler(\$this->requestStack);
        \$handler->addRenderer(\$renderer);

        return \$handler;
    }
}
", "vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Fragment/FragmentHandlerTest.php");
    }
}
