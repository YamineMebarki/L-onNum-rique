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

/* vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php */
class __TwigTemplate_a6fde7f5d62d2802659707c92814979ca9dabc35b46885b4b32a8ec13edaac53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php"));

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
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class HIncludeFragmentRendererTest extends TestCase
{
    public function testRenderExceptionWhenControllerAndNoSigner()
    {
        \$this->expectException('LogicException');
        \$strategy = new HIncludeFragmentRenderer();
        \$strategy->render(new ControllerReference('main_controller', [], []), Request::create('/'));
    }

    public function testRenderWithControllerAndSigner()
    {
        \$strategy = new HIncludeFragmentRenderer(null, new UriSigner('foo'));

        \$this->assertEquals('<hx:include src=\"/_fragment?_hash=BP%2BOzCD5MRUI%2BHJpgPDOmoju00FnzLhP3TGcSHbbBLs%3D&amp;_path=_format%3Dhtml%26_locale%3Den%26_controller%3Dmain_controller\"></hx:include>', \$strategy->render(new ControllerReference('main_controller', [], []), Request::create('/'))->getContent());
    }

    public function testRenderWithUri()
    {
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\"></hx:include>', \$strategy->render('/foo', Request::create('/'))->getContent());

        \$strategy = new HIncludeFragmentRenderer(null, new UriSigner('foo'));
        \$this->assertEquals('<hx:include src=\"/foo\"></hx:include>', \$strategy->render('/foo', Request::create('/'))->getContent());
    }

    public function testRenderWithDefault()
    {
        // only default
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());

        // only global default
        \$strategy = new HIncludeFragmentRenderer(null, null, 'global_default');
        \$this->assertEquals('<hx:include src=\"/foo\">global_default</hx:include>', \$strategy->render('/foo', Request::create('/'), [])->getContent());

        // global default and default
        \$strategy = new HIncludeFragmentRenderer(null, null, 'global_default');
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());
    }

    public function testRenderWithAttributesOptions()
    {
        // with id
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" id=\"bar\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'id' => 'bar'])->getContent());

        // with attributes
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" p1=\"v1\" p2=\"v2\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'attributes' => ['p1' => 'v1', 'p2' => 'v2']])->getContent());

        // with id & attributes
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" p1=\"v1\" p2=\"v2\" id=\"bar\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'id' => 'bar', 'attributes' => ['p1' => 'v1', 'p2' => 'v2']])->getContent());
    }

    public function testRenderWithTwigAndDefaultText()
    {
        \$twig = new Environment(\$loader = new ArrayLoader());
        \$strategy = new HIncludeFragmentRenderer(\$twig);
        \$this->assertEquals('<hx:include src=\"/foo\">loading...</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'loading...'])->getContent());
    }

    /**
     * @group legacy
     */
    public function testRenderWithDefaultTextLegacy()
    {
        \$engine = \$this->getMockBuilder('Symfony\\\\Component\\\\Templating\\\\EngineInterface')->getMock();
        \$engine->expects(\$this->once())
            ->method('exists')
            ->with('default')
            ->willThrowException(new \\InvalidArgumentException());

        // only default
        \$strategy = new HIncludeFragmentRenderer(\$engine);
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php";
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
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class HIncludeFragmentRendererTest extends TestCase
{
    public function testRenderExceptionWhenControllerAndNoSigner()
    {
        \$this->expectException('LogicException');
        \$strategy = new HIncludeFragmentRenderer();
        \$strategy->render(new ControllerReference('main_controller', [], []), Request::create('/'));
    }

    public function testRenderWithControllerAndSigner()
    {
        \$strategy = new HIncludeFragmentRenderer(null, new UriSigner('foo'));

        \$this->assertEquals('<hx:include src=\"/_fragment?_hash=BP%2BOzCD5MRUI%2BHJpgPDOmoju00FnzLhP3TGcSHbbBLs%3D&amp;_path=_format%3Dhtml%26_locale%3Den%26_controller%3Dmain_controller\"></hx:include>', \$strategy->render(new ControllerReference('main_controller', [], []), Request::create('/'))->getContent());
    }

    public function testRenderWithUri()
    {
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\"></hx:include>', \$strategy->render('/foo', Request::create('/'))->getContent());

        \$strategy = new HIncludeFragmentRenderer(null, new UriSigner('foo'));
        \$this->assertEquals('<hx:include src=\"/foo\"></hx:include>', \$strategy->render('/foo', Request::create('/'))->getContent());
    }

    public function testRenderWithDefault()
    {
        // only default
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());

        // only global default
        \$strategy = new HIncludeFragmentRenderer(null, null, 'global_default');
        \$this->assertEquals('<hx:include src=\"/foo\">global_default</hx:include>', \$strategy->render('/foo', Request::create('/'), [])->getContent());

        // global default and default
        \$strategy = new HIncludeFragmentRenderer(null, null, 'global_default');
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());
    }

    public function testRenderWithAttributesOptions()
    {
        // with id
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" id=\"bar\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'id' => 'bar'])->getContent());

        // with attributes
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" p1=\"v1\" p2=\"v2\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'attributes' => ['p1' => 'v1', 'p2' => 'v2']])->getContent());

        // with id & attributes
        \$strategy = new HIncludeFragmentRenderer();
        \$this->assertEquals('<hx:include src=\"/foo\" p1=\"v1\" p2=\"v2\" id=\"bar\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default', 'id' => 'bar', 'attributes' => ['p1' => 'v1', 'p2' => 'v2']])->getContent());
    }

    public function testRenderWithTwigAndDefaultText()
    {
        \$twig = new Environment(\$loader = new ArrayLoader());
        \$strategy = new HIncludeFragmentRenderer(\$twig);
        \$this->assertEquals('<hx:include src=\"/foo\">loading...</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'loading...'])->getContent());
    }

    /**
     * @group legacy
     */
    public function testRenderWithDefaultTextLegacy()
    {
        \$engine = \$this->getMockBuilder('Symfony\\\\Component\\\\Templating\\\\EngineInterface')->getMock();
        \$engine->expects(\$this->once())
            ->method('exists')
            ->with('default')
            ->willThrowException(new \\InvalidArgumentException());

        // only default
        \$strategy = new HIncludeFragmentRenderer(\$engine);
        \$this->assertEquals('<hx:include src=\"/foo\">default</hx:include>', \$strategy->render('/foo', Request::create('/'), ['default' => 'default'])->getContent());
    }
}
", "vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Fragment/HIncludeFragmentRendererTest.php");
    }
}
