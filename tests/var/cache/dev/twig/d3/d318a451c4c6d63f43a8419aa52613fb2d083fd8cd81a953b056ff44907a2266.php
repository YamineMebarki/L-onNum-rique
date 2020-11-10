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

/* vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php */
class __TwigTemplate_88973056d3df31ed8ed277727ae949431bf67c2522ac955ec0455fd1349c8f9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php"));

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
use Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\UriSigner;

class EsiFragmentRendererTest extends TestCase
{
    public function testRenderFallbackToInlineStrategyIfEsiNotSupported()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(true));
        \$strategy->render('/', Request::create('/'));
    }

    public function testRenderFallbackWithScalar()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(true), new UriSigner('foo'));
        \$request = Request::create('/');
        \$reference = new ControllerReference('main_controller', ['foo' => [true]], []);
        \$strategy->render(\$reference, \$request);
    }

    public function testRender()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$this->assertEquals('<esi:include src=\"/\" />', \$strategy->render('/', \$request)->getContent());
        \$this->assertEquals(\"<esi:comment text=\\\"This is a comment\\\" />\\n<esi:include src=\\\"/\\\" />\", \$strategy->render('/', \$request, ['comment' => 'This is a comment'])->getContent());
        \$this->assertEquals('<esi:include src=\"/\" alt=\"foo\" />', \$strategy->render('/', \$request, ['alt' => 'foo'])->getContent());
    }

    public function testRenderControllerReference()
    {
        \$signer = new UriSigner('foo');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(), \$signer);

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$reference = new ControllerReference('main_controller', [], []);
        \$altReference = new ControllerReference('alt_controller', [], []);

        \$this->assertEquals(
            '<esi:include src=\"/_fragment?_hash=Jz1P8NErmhKTeI6onI1EdAXTB85359MY3RIk5mSJ60w%3D&_path=_format%3Dhtml%26_locale%3Dfr%26_controller%3Dmain_controller\" alt=\"/_fragment?_hash=iPJEdRoUpGrM1ztqByiorpfMPtiW%2FOWwdH1DBUXHhEc%3D&_path=_format%3Dhtml%26_locale%3Dfr%26_controller%3Dalt_controller\" />',
            \$strategy->render(\$reference, \$request, ['alt' => \$altReference])->getContent()
        );
    }

    public function testRenderControllerReferenceWithoutSignerThrowsException()
    {
        \$this->expectException('LogicException');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$strategy->render(new ControllerReference('main_controller'), \$request);
    }

    public function testRenderAltControllerReferenceWithoutSignerThrowsException()
    {
        \$this->expectException('LogicException');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$strategy->render('/', \$request, ['alt' => new ControllerReference('alt_controller')]);
    }

    private function getInlineStrategy(\$called = false)
    {
        \$inline = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer')->disableOriginalConstructor()->getMock();

        if (\$called) {
            \$inline->expects(\$this->once())->method('render');
        }

        return \$inline;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php";
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
use Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\UriSigner;

class EsiFragmentRendererTest extends TestCase
{
    public function testRenderFallbackToInlineStrategyIfEsiNotSupported()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(true));
        \$strategy->render('/', Request::create('/'));
    }

    public function testRenderFallbackWithScalar()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(true), new UriSigner('foo'));
        \$request = Request::create('/');
        \$reference = new ControllerReference('main_controller', ['foo' => [true]], []);
        \$strategy->render(\$reference, \$request);
    }

    public function testRender()
    {
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$this->assertEquals('<esi:include src=\"/\" />', \$strategy->render('/', \$request)->getContent());
        \$this->assertEquals(\"<esi:comment text=\\\"This is a comment\\\" />\\n<esi:include src=\\\"/\\\" />\", \$strategy->render('/', \$request, ['comment' => 'This is a comment'])->getContent());
        \$this->assertEquals('<esi:include src=\"/\" alt=\"foo\" />', \$strategy->render('/', \$request, ['alt' => 'foo'])->getContent());
    }

    public function testRenderControllerReference()
    {
        \$signer = new UriSigner('foo');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy(), \$signer);

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$reference = new ControllerReference('main_controller', [], []);
        \$altReference = new ControllerReference('alt_controller', [], []);

        \$this->assertEquals(
            '<esi:include src=\"/_fragment?_hash=Jz1P8NErmhKTeI6onI1EdAXTB85359MY3RIk5mSJ60w%3D&_path=_format%3Dhtml%26_locale%3Dfr%26_controller%3Dmain_controller\" alt=\"/_fragment?_hash=iPJEdRoUpGrM1ztqByiorpfMPtiW%2FOWwdH1DBUXHhEc%3D&_path=_format%3Dhtml%26_locale%3Dfr%26_controller%3Dalt_controller\" />',
            \$strategy->render(\$reference, \$request, ['alt' => \$altReference])->getContent()
        );
    }

    public function testRenderControllerReferenceWithoutSignerThrowsException()
    {
        \$this->expectException('LogicException');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$strategy->render(new ControllerReference('main_controller'), \$request);
    }

    public function testRenderAltControllerReferenceWithoutSignerThrowsException()
    {
        \$this->expectException('LogicException');
        \$strategy = new EsiFragmentRenderer(new Esi(), \$this->getInlineStrategy());

        \$request = Request::create('/');
        \$request->setLocale('fr');
        \$request->headers->set('Surrogate-Capability', 'ESI/1.0');

        \$strategy->render('/', \$request, ['alt' => new ControllerReference('alt_controller')]);
    }

    private function getInlineStrategy(\$called = false)
    {
        \$inline = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer')->disableOriginalConstructor()->getMock();

        if (\$called) {
            \$inline->expects(\$this->once())->method('render');
        }

        return \$inline;
    }
}
", "vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Fragment/EsiFragmentRendererTest.php");
    }
}
