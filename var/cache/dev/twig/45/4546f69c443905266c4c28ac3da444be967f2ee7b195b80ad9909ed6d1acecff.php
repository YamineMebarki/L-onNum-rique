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

/* vendor/symfony/dom-crawler/Tests/ImageTest.php */
class __TwigTemplate_74bd107933f86c177476fd0df936fb5dc7fabfab3c2aeb7987f08e1bb38ff473 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/ImageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/ImageTest.php"));

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

namespace Symfony\\Component\\DomCrawler\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DomCrawler\\Image;

class ImageTest extends TestCase
{
    public function testConstructorWithANonImgTag()
    {
        \$this->expectException('LogicException');
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><div><div></html>');

        new Image(\$dom->getElementsByTagName('div')->item(0), 'http://www.example.com/');
    }

    public function testBaseUriIsOptionalWhenImageUrlIsAbsolute()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><images alt=\"foo\" src=\"https://example.com/foo\" /></html>');

        \$image = new Image(\$dom->getElementsByTagName('images')->item(0));
        \$this->assertSame('https://example.com/foo', \$image->getUri());
    }

    public function testAbsoluteBaseUriIsMandatoryWhenImageUrlIsRelative()
    {
        \$this->expectException('InvalidArgumentException');
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><images alt=\"foo\" src=\"/foo\" /></html>');

        \$image = new Image(\$dom->getElementsByTagName('images')->item(0), 'example.com');
        \$image->getUri();
    }

    /**
     * @dataProvider getGetUriTests
     */
    public function testGetUri(\$url, \$currentUri, \$expected)
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML(sprintf('<html><images alt=\"foo\" src=\"%s\" /></html>', \$url));
        \$image = new Image(\$dom->getElementsByTagName('images')->item(0), \$currentUri);

        \$this->assertEquals(\$expected, \$image->getUri());
    }

    public function getGetUriTests()
    {
        return [
            ['/foo.png', 'http://localhost/bar/foo/', 'http://localhost/foo.png'],
            ['foo.png', 'http://localhost/bar/foo/', 'http://localhost/bar/foo/foo.png'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/ImageTest.php";
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

namespace Symfony\\Component\\DomCrawler\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DomCrawler\\Image;

class ImageTest extends TestCase
{
    public function testConstructorWithANonImgTag()
    {
        \$this->expectException('LogicException');
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><div><div></html>');

        new Image(\$dom->getElementsByTagName('div')->item(0), 'http://www.example.com/');
    }

    public function testBaseUriIsOptionalWhenImageUrlIsAbsolute()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><images alt=\"foo\" src=\"https://example.com/foo\" /></html>');

        \$image = new Image(\$dom->getElementsByTagName('images')->item(0));
        \$this->assertSame('https://example.com/foo', \$image->getUri());
    }

    public function testAbsoluteBaseUriIsMandatoryWhenImageUrlIsRelative()
    {
        \$this->expectException('InvalidArgumentException');
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><images alt=\"foo\" src=\"/foo\" /></html>');

        \$image = new Image(\$dom->getElementsByTagName('images')->item(0), 'example.com');
        \$image->getUri();
    }

    /**
     * @dataProvider getGetUriTests
     */
    public function testGetUri(\$url, \$currentUri, \$expected)
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML(sprintf('<html><images alt=\"foo\" src=\"%s\" /></html>', \$url));
        \$image = new Image(\$dom->getElementsByTagName('images')->item(0), \$currentUri);

        \$this->assertEquals(\$expected, \$image->getUri());
    }

    public function getGetUriTests()
    {
        return [
            ['/foo.png', 'http://localhost/bar/foo/', 'http://localhost/foo.png'],
            ['foo.png', 'http://localhost/bar/foo/', 'http://localhost/bar/foo/foo.png'],
        ];
    }
}
", "vendor/symfony/dom-crawler/Tests/ImageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/ImageTest.php");
    }
}
