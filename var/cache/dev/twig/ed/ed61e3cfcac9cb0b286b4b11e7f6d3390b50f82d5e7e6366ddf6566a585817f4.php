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

/* vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php */
class __TwigTemplate_3e76ae7a1f54dd346b8674d0d7007ddcb4a5c4a9078cb8224ab65e1e822c291a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Part\\Multipart;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\FormDataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

class FormDataPartTest extends TestCase
{
    public function testConstructor()
    {
        \$r = new \\ReflectionProperty(TextPart::class, 'encoding');
        \$r->setAccessible(true);

        \$b = new TextPart('content');
        \$c = DataPart::fromPath(\$file = __DIR__.'/../../Fixtures/mimetypes/test.gif');
        \$f = new FormDataPart([
            'foo' => \$content = 'very very long content that will not be cut even if the length is way more than 76 characters, ok?',
            'bar' => clone \$b,
            'baz' => clone \$c,
        ]);
        \$this->assertEquals('multipart', \$f->getMediaType());
        \$this->assertEquals('form-data', \$f->getMediaSubtype());
        \$t = new TextPart(\$content, 'utf-8', 'plain', '8bit');
        \$t->setDisposition('form-data');
        \$t->setName('foo');
        \$t->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$b->setDisposition('form-data');
        \$b->setName('bar');
        \$b->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$b, '8bit');
        \$c->setDisposition('form-data');
        \$c->setName('baz');
        \$c->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$c, '8bit');
        \$this->assertEquals([\$t, \$b, \$c], \$f->getParts());
    }

    public function testToString()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../../Fixtures/mimetypes/test.gif');
        \$this->assertEquals(base64_encode(file_get_contents(\$file)), \$p->bodyToString());
    }

    public function testContentLineLength()
    {
        \$f = new FormDataPart([
            'foo' => new DataPart(\$foo = str_repeat('foo', 1000), 'foo.txt', 'text/plain'),
            'bar' => \$bar = str_repeat('bar', 1000),
        ]);
        \$parts = \$f->getParts();
        \$this->assertEquals(\$foo, \$parts[0]->bodyToString());
        \$this->assertEquals(\$bar, \$parts[1]->bodyToString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Part\\Multipart;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\FormDataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

class FormDataPartTest extends TestCase
{
    public function testConstructor()
    {
        \$r = new \\ReflectionProperty(TextPart::class, 'encoding');
        \$r->setAccessible(true);

        \$b = new TextPart('content');
        \$c = DataPart::fromPath(\$file = __DIR__.'/../../Fixtures/mimetypes/test.gif');
        \$f = new FormDataPart([
            'foo' => \$content = 'very very long content that will not be cut even if the length is way more than 76 characters, ok?',
            'bar' => clone \$b,
            'baz' => clone \$c,
        ]);
        \$this->assertEquals('multipart', \$f->getMediaType());
        \$this->assertEquals('form-data', \$f->getMediaSubtype());
        \$t = new TextPart(\$content, 'utf-8', 'plain', '8bit');
        \$t->setDisposition('form-data');
        \$t->setName('foo');
        \$t->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$b->setDisposition('form-data');
        \$b->setName('bar');
        \$b->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$b, '8bit');
        \$c->setDisposition('form-data');
        \$c->setName('baz');
        \$c->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$c, '8bit');
        \$this->assertEquals([\$t, \$b, \$c], \$f->getParts());
    }

    public function testToString()
    {
        \$p = DataPart::fromPath(\$file = __DIR__.'/../../Fixtures/mimetypes/test.gif');
        \$this->assertEquals(base64_encode(file_get_contents(\$file)), \$p->bodyToString());
    }

    public function testContentLineLength()
    {
        \$f = new FormDataPart([
            'foo' => new DataPart(\$foo = str_repeat('foo', 1000), 'foo.txt', 'text/plain'),
            'bar' => \$bar = str_repeat('bar', 1000),
        ]);
        \$parts = \$f->getParts();
        \$this->assertEquals(\$foo, \$parts[0]->bodyToString());
        \$this->assertEquals(\$bar, \$parts[1]->bodyToString());
    }
}
", "vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Part/Multipart/FormDataPartTest.php");
    }
}
