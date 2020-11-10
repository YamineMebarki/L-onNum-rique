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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php */
class __TwigTemplate_1dfc4229164d94ae2dc7018533964aa227572a61fee38ea869e9a48eefe0e674 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_EmbeddedFileAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$contentEncoder;
    private \$cache;
    private \$headers;
    private \$emailValidator;

    protected function setUp()
    {
        \$this->cache = new Swift_KeyCache_ArrayKeyCache(
            new Swift_KeyCache_SimpleKeyCacheInputStream()
            );
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$this->contentEncoder = new Swift_Mime_ContentEncoder_Base64ContentEncoder();

        \$headerEncoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
            );
        \$paramEncoder = new Swift_Encoder_Rfc2231Encoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
            );
        \$this->emailValidator = new EmailValidator();
        \$this->idGenerator = new Swift_Mime_IdGenerator('example.com');
        \$this->headers = new Swift_Mime_SimpleHeaderSet(
            new Swift_Mime_SimpleHeaderFactory(\$headerEncoder, \$paramEncoder, \$this->emailValidator)
            );
    }

    public function testContentIdIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$file->setContentType('application/pdf');
        \$file->setId('foo@bar');
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <foo@bar>'.\"\\r\\n\".
            'Content-Disposition: inline'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testDispositionIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setDisposition('attachment');
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: attachment'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testFilenameIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testSizeIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setSize(12340);
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; size=12340'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testMultipleParametersInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$file->setSize(12340);

        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf; size=12340'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testEndToEnd()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$file->setSize(12340);
        \$file->setBody('abcd');
        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf; size=12340'.\"\\r\\n\".
            \"\\r\\n\".
            base64_encode('abcd'),
            \$file->toString()
            );
    }

    protected function createEmbeddedFile()
    {
        \$entity = new Swift_Mime_EmbeddedFile(
            \$this->headers,
            \$this->contentEncoder,
            \$this->cache,
            \$this->idGenerator
            );

        return \$entity;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_EmbeddedFileAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$contentEncoder;
    private \$cache;
    private \$headers;
    private \$emailValidator;

    protected function setUp()
    {
        \$this->cache = new Swift_KeyCache_ArrayKeyCache(
            new Swift_KeyCache_SimpleKeyCacheInputStream()
            );
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$this->contentEncoder = new Swift_Mime_ContentEncoder_Base64ContentEncoder();

        \$headerEncoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
            );
        \$paramEncoder = new Swift_Encoder_Rfc2231Encoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
            );
        \$this->emailValidator = new EmailValidator();
        \$this->idGenerator = new Swift_Mime_IdGenerator('example.com');
        \$this->headers = new Swift_Mime_SimpleHeaderSet(
            new Swift_Mime_SimpleHeaderFactory(\$headerEncoder, \$paramEncoder, \$this->emailValidator)
            );
    }

    public function testContentIdIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$file->setContentType('application/pdf');
        \$file->setId('foo@bar');
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <foo@bar>'.\"\\r\\n\".
            'Content-Disposition: inline'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testDispositionIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setDisposition('attachment');
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: attachment'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testFilenameIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testSizeIsSetInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setSize(12340);
        \$this->assertEquals(
            'Content-Type: application/pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; size=12340'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testMultipleParametersInHeader()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$file->setSize(12340);

        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf; size=12340'.\"\\r\\n\",
            \$file->toString()
            );
    }

    public function testEndToEnd()
    {
        \$file = \$this->createEmbeddedFile();
        \$id = \$file->getId();
        \$file->setContentType('application/pdf');
        \$file->setFilename('foo.pdf');
        \$file->setSize(12340);
        \$file->setBody('abcd');
        \$this->assertEquals(
            'Content-Type: application/pdf; name=foo.pdf'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.\$id.'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=foo.pdf; size=12340'.\"\\r\\n\".
            \"\\r\\n\".
            base64_encode('abcd'),
            \$file->toString()
            );
    }

    protected function createEmbeddedFile()
    {
        \$entity = new Swift_Mime_EmbeddedFile(
            \$this->headers,
            \$this->contentEncoder,
            \$this->cache,
            \$this->idGenerator
            );

        return \$entity;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/EmbeddedFileAcceptanceTest.php");
    }
}
