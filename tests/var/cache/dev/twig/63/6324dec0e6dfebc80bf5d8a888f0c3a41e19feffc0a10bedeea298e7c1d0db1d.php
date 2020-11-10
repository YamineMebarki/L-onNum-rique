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

/* vendor/symfony/mime/Tests/Part/TextPartTest.php */
class __TwigTemplate_b1410cfde8f67b824796e0c892d1095b1db28e99015a8529f59ad354a4bcb8e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/TextPartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/TextPartTest.php"));

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
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\TextPart;

class TextPartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new TextPart('content');
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals('content', \$p->bodyToString());
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        // bodyToIterable() can be called several times
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('text', \$p->getMediaType());
        \$this->assertEquals('plain', \$p->getMediaSubType());

        \$p = new TextPart('content', null, 'html');
        \$this->assertEquals('html', \$p->getMediaSubType());
    }

    public function testConstructorWithResource()
    {
        \$f = fopen('php://memory', 'r+', false);
        fwrite(\$f, 'content');
        rewind(\$f);
        \$p = new TextPart(\$f);
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals('content', \$p->bodyToString());
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        fclose(\$f);
    }

    public function testConstructorWithNonStringOrResource()
    {
        \$this->expectException(\\TypeError::class);
        new TextPart(new \\stdClass());
    }

    public function testHeaders()
    {
        \$p = new TextPart('content');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')
        ), \$p->getPreparedHeaders());

        \$p = new TextPart('content', 'iso-8859-1');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'iso-8859-1']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')
        ), \$p->getPreparedHeaders());
    }

    public function testEncoding()
    {
        \$p = new TextPart('content', 'utf-8', 'plain', 'base64');
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64')
        ), \$p->getPreparedHeaders());
    }

    public function testSerialize()
    {
        \$r = fopen('php://memory', 'r+', false);
        fwrite(\$r, 'Text content');
        rewind(\$r);

        \$p = new TextPart(\$r);
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
        return "vendor/symfony/mime/Tests/Part/TextPartTest.php";
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
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\TextPart;

class TextPartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new TextPart('content');
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals('content', \$p->bodyToString());
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        // bodyToIterable() can be called several times
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('text', \$p->getMediaType());
        \$this->assertEquals('plain', \$p->getMediaSubType());

        \$p = new TextPart('content', null, 'html');
        \$this->assertEquals('html', \$p->getMediaSubType());
    }

    public function testConstructorWithResource()
    {
        \$f = fopen('php://memory', 'r+', false);
        fwrite(\$f, 'content');
        rewind(\$f);
        \$p = new TextPart(\$f);
        \$this->assertEquals('content', \$p->getBody());
        \$this->assertEquals('content', \$p->bodyToString());
        \$this->assertEquals('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        fclose(\$f);
    }

    public function testConstructorWithNonStringOrResource()
    {
        \$this->expectException(\\TypeError::class);
        new TextPart(new \\stdClass());
    }

    public function testHeaders()
    {
        \$p = new TextPart('content');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')
        ), \$p->getPreparedHeaders());

        \$p = new TextPart('content', 'iso-8859-1');
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'iso-8859-1']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')
        ), \$p->getPreparedHeaders());
    }

    public function testEncoding()
    {
        \$p = new TextPart('content', 'utf-8', 'plain', 'base64');
        \$this->assertEquals(base64_encode('content'), \$p->bodyToString());
        \$this->assertEquals(base64_encode('content'), implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64')
        ), \$p->getPreparedHeaders());
    }

    public function testSerialize()
    {
        \$r = fopen('php://memory', 'r+', false);
        fwrite(\$r, 'Text content');
        rewind(\$r);

        \$p = new TextPart(\$r);
        \$p->getHeaders()->addTextHeader('foo', 'bar');
        \$expected = clone \$p;
        \$this->assertEquals(\$expected->toString(), unserialize(serialize(\$p))->toString());
    }
}
", "vendor/symfony/mime/Tests/Part/TextPartTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Part/TextPartTest.php");
    }
}
