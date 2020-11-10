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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php */
class __TwigTemplate_5dfd41677d72d3be301a950f60c429a0dbc32f548696e34495b8b896a5a4a771 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_MimePartAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
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
        \$this->contentEncoder = new Swift_Mime_ContentEncoder_QpContentEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8'),
            new Swift_StreamFilters_ByteArrayReplacementFilter(
                [[0x0D, 0x0A], [0x0D], [0x0A]],
                [[0x0A], [0x0A], [0x0D, 0x0A]]
                )
            );

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

    public function testCharsetIsSetInHeader()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testFormatIsSetInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setFormat('flowed');
        \$part->setBody('> foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; format=flowed'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            '> foobar',
            \$part->toString()
            );
    }

    public function testDelSpIsSetInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setDelSp(true);
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; delsp=yes'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testAll3ParamsInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setFormat('fixed');
        \$part->setDelSp(true);
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8; format=fixed; delsp=yes'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testBodyIsCanonicalized()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setBody(\"foobar\\r\\rtest\\ning\\r\");
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            \"foobar\\r\\n\".
            \"\\r\\n\".
            \"test\\r\\n\".
            \"ing\\r\\n\",
            \$part->toString()
            );
    }

    protected function createMimePart()
    {
        \$entity = new Swift_Mime_MimePart(
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
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_MimePartAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
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
        \$this->contentEncoder = new Swift_Mime_ContentEncoder_QpContentEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8'),
            new Swift_StreamFilters_ByteArrayReplacementFilter(
                [[0x0D, 0x0A], [0x0D], [0x0A]],
                [[0x0A], [0x0A], [0x0D, 0x0A]]
                )
            );

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

    public function testCharsetIsSetInHeader()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testFormatIsSetInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setFormat('flowed');
        \$part->setBody('> foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; format=flowed'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            '> foobar',
            \$part->toString()
            );
    }

    public function testDelSpIsSetInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setDelSp(true);
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; delsp=yes'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testAll3ParamsInHeaders()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setFormat('fixed');
        \$part->setDelSp(true);
        \$part->setBody('foobar');
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8; format=fixed; delsp=yes'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foobar',
            \$part->toString()
            );
    }

    public function testBodyIsCanonicalized()
    {
        \$part = \$this->createMimePart();
        \$part->setContentType('text/plain');
        \$part->setCharset('utf-8');
        \$part->setBody(\"foobar\\r\\rtest\\ning\\r\");
        \$this->assertEquals(
            'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            \"foobar\\r\\n\".
            \"\\r\\n\".
            \"test\\r\\n\".
            \"ing\\r\\n\",
            \$part->toString()
            );
    }

    protected function createMimePart()
    {
        \$entity = new Swift_Mime_MimePart(
            \$this->headers,
            \$this->contentEncoder,
            \$this->cache,
            \$this->idGenerator
        );

        return \$entity;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/MimePartAcceptanceTest.php");
    }
}
