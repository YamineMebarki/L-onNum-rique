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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php */
class __TwigTemplate_b51ac57ab7852581c5e8e841640763e66c2192e2fd51b2d6e7158e236b4e045a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_ContentEncoder_QpContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$samplesDir;
    private \$factory;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
    }

    protected function tearDown()
    {
        Swift_Preferences::getInstance()->setQPDotEscape(false);
    }

    public function testEncodingAndDecodingSamples()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

            \$encoding = \$encodingDir;
            \$charStream = new Swift_CharacterStream_NgCharacterStream(
                \$this->factory, \$encoding);
            \$encoder = new Swift_Mime_ContentEncoder_QpContentEncoder(\$charStream);

            \$sampleDir = \$this->samplesDir.'/'.\$encodingDir;

            if (is_dir(\$sampleDir)) {
                \$fileFp = opendir(\$sampleDir);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$sampleDir.'/'.\$sampleFile);

                    \$os = new Swift_ByteStream_ArrayByteStream();
                    \$os->write(\$text);

                    \$is = new Swift_ByteStream_ArrayByteStream();
                    \$encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        quoted_printable_decode(\$encoded), \$text,
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

            \$encoding = \$encodingDir;
            \$encoder = \$this->createEncoderFromContainer();

            \$sampleDir = \$this->samplesDir.'/'.\$encodingDir;

            if (is_dir(\$sampleDir)) {
                \$fileFp = opendir(\$sampleDir);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$sampleDir.'/'.\$sampleFile);

                    \$os = new Swift_ByteStream_ArrayByteStream();
                    \$os->write(\$text);

                    \$is = new Swift_ByteStream_ArrayByteStream();
                    \$encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        str_replace(\"\\r\\n\", \"\\n\", quoted_printable_decode(\$encoded)), str_replace(\"\\r\\n\", \"\\n\", \$text),
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingLFTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\nb\\nc\"));
    }

    public function testEncodingCRTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\rb\\rc\"));
    }

    public function testEncodingLFCRTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\n\\r\\nb\\r\\n\\r\\nc\", \$encoder->encodeString(\"a\\n\\rb\\n\\rc\"));
    }

    public function testEncodingCRLFTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\r\\nb\\r\\nc\"));
    }

    public function testEncodingDotStuffingWithDiConfiguredInstance()
    {
        // Enable DotEscaping
        Swift_Preferences::getInstance()->setQPDotEscape(true);
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a=2E\\r\\n=2E\\r\\n=2Eb\\r\\nc\", \$encoder->encodeString(\"a.\\r\\n.\\r\\n.b\\r\\nc\"));
        // Return to default
        Swift_Preferences::getInstance()->setQPDotEscape(false);
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a.\\r\\n.\\r\\n.b\\r\\nc\", \$encoder->encodeString(\"a.\\r\\n.\\r\\n.b\\r\\nc\"));
    }

    public function testDotStuffingEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        // Enable DotEscaping
        Swift_Preferences::getInstance()->setQPDotEscape(true);
        \$this->testEncodingAndDecodingSamplesFromDiConfiguredInstance();
    }

    private function createEncoderFromContainer()
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('mime.qpcontentencoder')
            ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_ContentEncoder_QpContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$samplesDir;
    private \$factory;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
    }

    protected function tearDown()
    {
        Swift_Preferences::getInstance()->setQPDotEscape(false);
    }

    public function testEncodingAndDecodingSamples()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

            \$encoding = \$encodingDir;
            \$charStream = new Swift_CharacterStream_NgCharacterStream(
                \$this->factory, \$encoding);
            \$encoder = new Swift_Mime_ContentEncoder_QpContentEncoder(\$charStream);

            \$sampleDir = \$this->samplesDir.'/'.\$encodingDir;

            if (is_dir(\$sampleDir)) {
                \$fileFp = opendir(\$sampleDir);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$sampleDir.'/'.\$sampleFile);

                    \$os = new Swift_ByteStream_ArrayByteStream();
                    \$os->write(\$text);

                    \$is = new Swift_ByteStream_ArrayByteStream();
                    \$encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        quoted_printable_decode(\$encoded), \$text,
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

            \$encoding = \$encodingDir;
            \$encoder = \$this->createEncoderFromContainer();

            \$sampleDir = \$this->samplesDir.'/'.\$encodingDir;

            if (is_dir(\$sampleDir)) {
                \$fileFp = opendir(\$sampleDir);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$sampleDir.'/'.\$sampleFile);

                    \$os = new Swift_ByteStream_ArrayByteStream();
                    \$os->write(\$text);

                    \$is = new Swift_ByteStream_ArrayByteStream();
                    \$encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        str_replace(\"\\r\\n\", \"\\n\", quoted_printable_decode(\$encoded)), str_replace(\"\\r\\n\", \"\\n\", \$text),
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingLFTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\nb\\nc\"));
    }

    public function testEncodingCRTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\rb\\rc\"));
    }

    public function testEncodingLFCRTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\n\\r\\nb\\r\\n\\r\\nc\", \$encoder->encodeString(\"a\\n\\rb\\n\\rc\"));
    }

    public function testEncodingCRLFTextWithDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a\\r\\nb\\r\\nc\", \$encoder->encodeString(\"a\\r\\nb\\r\\nc\"));
    }

    public function testEncodingDotStuffingWithDiConfiguredInstance()
    {
        // Enable DotEscaping
        Swift_Preferences::getInstance()->setQPDotEscape(true);
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a=2E\\r\\n=2E\\r\\n=2Eb\\r\\nc\", \$encoder->encodeString(\"a.\\r\\n.\\r\\n.b\\r\\nc\"));
        // Return to default
        Swift_Preferences::getInstance()->setQPDotEscape(false);
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertEquals(\"a.\\r\\n.\\r\\n.b\\r\\nc\", \$encoder->encodeString(\"a.\\r\\n.\\r\\n.b\\r\\nc\"));
    }

    public function testDotStuffingEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        // Enable DotEscaping
        Swift_Preferences::getInstance()->setQPDotEscape(true);
        \$this->testEncodingAndDecodingSamplesFromDiConfiguredInstance();
    }

    private function createEncoderFromContainer()
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('mime.qpcontentencoder')
            ;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/QpContentEncoderAcceptanceTest.php");
    }
}
