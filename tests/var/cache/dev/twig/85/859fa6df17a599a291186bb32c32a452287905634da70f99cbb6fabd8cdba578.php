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

/* vendor/symfony/mime/Tests/Part/DataPartTest.php */
class __TwigTemplate_6e28add5ee78fc7c405b366fb788d4312afb9e28d61b6d70a86d2ef48b46edc8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/DataPartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/DataPartTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Part;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\DataPart;

class DataPartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new DataPart('content');
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        // bodyToIterable() can be called several times
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('application', \$p->getMediaType());
        \$this->assertEquals('octet-stream', \$p->getMediaSubType());

        \$p = new DataPart('content', null, 'text/html');
        \$this->assertEquals('text', \$p->getMediaType());
        \$this->assertEquals('html', \$p->getMediaSubType());
    }

    public function testConstructorWithResource()
    {
        \$f = fopen('php://memory', 'r+', false);
        fwrite(\$f, 'content');
        rewind(\$f);
        \$p = new DataPart(\$f);
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        fclose(\$f);
    }

    public function testConstructorWithNonStringOrResource()
    {
        \$this->expectException(\\TypeError::class);
        new DataPart(new \\stdClass());
    }

    public function testHeaders()
    {
        \$p = new DataPart('content');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'application/octet-stream'),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment')
        ), \$p->getPreparedHeaders());

        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'photo.jpg', 'filename' => 'photo.jpg'])
        ), \$p->getPreparedHeaders());
    }

    public function testAsInline()
    {
        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$p->asInline();
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'inline', ['name' => 'photo.jpg', 'filename' => 'photo.jpg'])
        ), \$p->getPreparedHeaders());
    }

    public function testAsInlineWithCID()
    {
        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$p->asInline();
        \$cid = \$p->getContentId();
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'inline', ['name' => 'photo.jpg', 'filename' => 'photo.jpg']),
            new IdentificationHeader('Content-ID', \$cid)
        ), \$p->getPreparedHeaders());
    }

    public function testFromPath()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../Fixtures/mimetypes/test.gif');
        \$content = file_get_contents(\$file);
        \$this->assertEquals(\$content, \$p->getBody());
        \$this->assertEquals(base64_encode(\$content), \$p->bodyToString());
        \$this->assertEquals(base64_encode(\$content), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('image', \$p->getMediaType());
        \$this->assertEquals('gif', \$p->getMediaSubType());
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'image/gif', ['name' => 'test.gif']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'test.gif', 'filename' => 'test.gif'])
        ), \$p->getPreparedHeaders());
    }

    public function testFromPathWithMeta()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../Fixtures/mimetypes/test.gif', 'photo.gif', 'image/jpeg');
        \$content = file_get_contents(\$file);
        \$this->assertEquals(\$content, \$p->getBody());
        \$this->assertEquals(base64_encode(\$content), \$p->bodyToString());
        \$this->assertEquals(base64_encode(\$content), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('image', \$p->getMediaType());
        \$this->assertEquals('jpeg', \$p->getMediaSubType());
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'image/jpeg', ['name' => 'photo.gif']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'photo.gif', 'filename' => 'photo.gif'])
        ), \$p->getPreparedHeaders());
    }

    public function testHasContentId()
    {
        \$p = new DataPart('content');
        \$this->assertFalse(\$p->hasContentId());
        \$p->getContentId();
        \$this->assertTrue(\$p->hasContentId());
    }

    public function testSerialize()
    {
        \$r = fopen('php://memory', 'r+', false);
        fwrite(\$r, 'Text content');
        rewind(\$r);

        \$p = new DataPart(\$r);
        \$p->getHeaders()->addTextHeader('foo', 'bar');
        \$expected = clone \$p;
        \$this->assertEquals(\$expected->toString(), unserialize(serialize(\$p))->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Part/DataPartTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Part;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\DataPart;

class DataPartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new DataPart('content');
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        // bodyToIterable() can be called several times
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('application', \$p->getMediaType());
        \$this->assertEquals('octet-stream', \$p->getMediaSubType());

        \$p = new DataPart('content', null, 'text/html');
        \$this->assertEquals('text', \$p->getMediaType());
        \$this->assertEquals('html', \$p->getMediaSubType());
    }

    public function testConstructorWithResource()
    {
        \$f = fopen('php://memory', 'r+', false);
        fwrite(\$f, 'content');
        rewind(\$f);
        \$p = new DataPart(\$f);
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        fclose(\$f);
    }

    public function testConstructorWithNonStringOrResource()
    {
        \$this->expectException(\\TypeError::class);
        new DataPart(new \\stdClass());
    }

    public function testHeaders()
    {
        \$p = new DataPart('content');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'application/octet-stream'),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment')
        ), \$p->getPreparedHeaders());

        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'photo.jpg', 'filename' => 'photo.jpg'])
        ), \$p->getPreparedHeaders());
    }

    public function testAsInline()
    {
        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$p->asInline();
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'inline', ['name' => 'photo.jpg', 'filename' => 'photo.jpg'])
        ), \$p->getPreparedHeaders());
    }

    public function testAsInlineWithCID()
    {
        \$p = new DataPart('content', 'photo.jpg', 'text/html');
        \$p->asInline();
        \$cid = \$p->getContentId();
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/html', ['name' => 'photo.jpg']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'inline', ['name' => 'photo.jpg', 'filename' => 'photo.jpg']),
            new IdentificationHeader('Content-ID', \$cid)
        ), \$p->getPreparedHeaders());
    }

    public function testFromPath()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../Fixtures/mimetypes/test.gif');
        \$content = file_get_contents(\$file);
        \$this->assertEquals(\$content, \$p->getBody());
        \$this->assertEquals(base64_encode(\$content), \$p->bodyToString());
        \$this->assertEquals(base64_encode(\$content), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('image', \$p->getMediaType());
        \$this->assertEquals('gif', \$p->getMediaSubType());
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'image/gif', ['name' => 'test.gif']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'test.gif', 'filename' => 'test.gif'])
        ), \$p->getPreparedHeaders());
    }

    public function testFromPathWithMeta()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../Fixtures/mimetypes/test.gif', 'photo.gif', 'image/jpeg');
        \$content = file_get_contents(\$file);
        \$this->assertEquals(\$content, \$p->getBody());
        \$this->assertEquals(base64_encode(\$content), \$p->bodyToString());
        \$this->assertEquals(base64_encode(\$content), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('image', \$p->getMediaType());
        \$this->assertEquals('jpeg', \$p->getMediaSubType());
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'image/jpeg', ['name' => 'photo.gif']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'photo.gif', 'filename' => 'photo.gif'])
        ), \$p->getPreparedHeaders());
    }

    public function testHasContentId()
    {
        \$p = new DataPart('content');
        \$this->assertFalse(\$p->hasContentId());
        \$p->getContentId();
        \$this->assertTrue(\$p->hasContentId());
    }

    public function testSerialize()
    {
        \$r = fopen('php://memory', 'r+', false);
        fwrite(\$r, 'Text content');
        rewind(\$r);

        \$p = new DataPart(\$r);
        \$p->getHeaders()->addTextHeader('foo', 'bar');
        \$expected = clone \$p;
        \$this->assertEquals(\$expected->toString(), unserialize(serialize(\$p))->toString());
    }
}
", "vendor/symfony/mime/Tests/Part/DataPartTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Part/DataPartTest.php");
    }
}
