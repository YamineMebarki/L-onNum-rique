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

/* vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php */
class __TwigTemplate_b1895337e79f8650bae5eed2a6971c5eb449a6a0731fa9ddfa91c6099f4b1154 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php"));

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

use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class WebLinkExtensionTest extends TestCase
{
    /**
     * @var Request
     */
    private \$request;

    /**
     * @var WebLinkExtension
     */
    private \$extension;

    protected function setUp(): void
    {
        \$this->request = new Request();

        \$requestStack = new RequestStack();
        \$requestStack->push(\$this->request);

        \$this->extension = new WebLinkExtension(\$requestStack);
    }

    public function testLink()
    {
        \$this->assertEquals('/foo.css', \$this->extension->link('/foo.css', 'preload', ['as' => 'style', 'nopush' => true]));

        \$link = (new Link('preload', '/foo.css'))->withAttribute('as', 'style')->withAttribute('nopush', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPreload()
    {
        \$this->assertEquals('/foo.css', \$this->extension->preload('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('preload', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testDnsPrefetch()
    {
        \$this->assertEquals('/foo.css', \$this->extension->dnsPrefetch('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('dns-prefetch', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPreconnect()
    {
        \$this->assertEquals('/foo.css', \$this->extension->preconnect('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('preconnect', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPrefetch()
    {
        \$this->assertEquals('/foo.css', \$this->extension->prefetch('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('prefetch', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPrerender()
    {
        \$this->assertEquals('/foo.css', \$this->extension->prerender('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('prerender', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class WebLinkExtensionTest extends TestCase
{
    /**
     * @var Request
     */
    private \$request;

    /**
     * @var WebLinkExtension
     */
    private \$extension;

    protected function setUp(): void
    {
        \$this->request = new Request();

        \$requestStack = new RequestStack();
        \$requestStack->push(\$this->request);

        \$this->extension = new WebLinkExtension(\$requestStack);
    }

    public function testLink()
    {
        \$this->assertEquals('/foo.css', \$this->extension->link('/foo.css', 'preload', ['as' => 'style', 'nopush' => true]));

        \$link = (new Link('preload', '/foo.css'))->withAttribute('as', 'style')->withAttribute('nopush', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPreload()
    {
        \$this->assertEquals('/foo.css', \$this->extension->preload('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('preload', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testDnsPrefetch()
    {
        \$this->assertEquals('/foo.css', \$this->extension->dnsPrefetch('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('dns-prefetch', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPreconnect()
    {
        \$this->assertEquals('/foo.css', \$this->extension->preconnect('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('preconnect', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPrefetch()
    {
        \$this->assertEquals('/foo.css', \$this->extension->prefetch('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('prefetch', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }

    public function testPrerender()
    {
        \$this->assertEquals('/foo.css', \$this->extension->prerender('/foo.css', ['as' => 'style', 'crossorigin' => true]));

        \$link = (new Link('prerender', '/foo.css'))->withAttribute('as', 'style')->withAttribute('crossorigin', true);
        \$this->assertEquals([\$link], array_values(\$this->request->attributes->get('_links')->getLinks()));
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/WebLinkExtensionTest.php");
    }
}
