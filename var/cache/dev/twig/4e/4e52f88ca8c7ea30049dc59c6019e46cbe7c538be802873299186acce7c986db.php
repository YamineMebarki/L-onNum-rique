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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php */
class __TwigTemplate_89277497e9cacdc77e3edd5c5cccc5a2a72cb40e685b93740116e945c29be31d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_ContentEncoder_NativeQpContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$_samplesDir;

    /**
     * @var Swift_Mime_ContentEncoder_NativeQpContentEncoder
     */
    protected \$encoder;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->encoder = new Swift_Mime_ContentEncoder_NativeQpContentEncoder();
    }

    public function testEncodingAndDecodingSamples()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

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
                    \$this->encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        quoted_printable_decode(\$encoded),
                        // CR and LF are converted to CRLF
                        preg_replace('~\\r(?!\\n)|(?<!\\r)\\n~', \"\\r\\n\", \$text),
                        '%s: Encoded string should decode back to original string for sample '.\$sampleDir.'/'.\$sampleFile
                    );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertSame('=C3=A4=C3=B6=C3=BC=C3=9F', \$encoder->encodeString('äöüß'));
    }

    /**
     * @expectedException \\RuntimeException
     */
    public function testCharsetChangeNotImplemented()
    {
        \$this->encoder->charsetChanged('utf-8');
        \$this->encoder->charsetChanged('charset');
        \$this->encoder->encodeString('foo');
    }

    public function testGetName()
    {
        \$this->assertSame('quoted-printable', \$this->encoder->getName());
    }

    private function createEncoderFromContainer()
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('mime.nativeqpcontentencoder')
            ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_ContentEncoder_NativeQpContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$_samplesDir;

    /**
     * @var Swift_Mime_ContentEncoder_NativeQpContentEncoder
     */
    protected \$encoder;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->encoder = new Swift_Mime_ContentEncoder_NativeQpContentEncoder();
    }

    public function testEncodingAndDecodingSamples()
    {
        \$sampleFp = opendir(\$this->samplesDir);
        while (false !== \$encodingDir = readdir(\$sampleFp)) {
            if ('.' == substr(\$encodingDir, 0, 1)) {
                continue;
            }

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
                    \$this->encoder->encodeByteStream(\$os, \$is);

                    \$encoded = '';
                    while (false !== \$bytes = \$is->read(8192)) {
                        \$encoded .= \$bytes;
                    }

                    \$this->assertEquals(
                        quoted_printable_decode(\$encoded),
                        // CR and LF are converted to CRLF
                        preg_replace('~\\r(?!\\n)|(?<!\\r)\\n~', \"\\r\\n\", \$text),
                        '%s: Encoded string should decode back to original string for sample '.\$sampleDir.'/'.\$sampleFile
                    );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }

    public function testEncodingAndDecodingSamplesFromDiConfiguredInstance()
    {
        \$encoder = \$this->createEncoderFromContainer();
        \$this->assertSame('=C3=A4=C3=B6=C3=BC=C3=9F', \$encoder->encodeString('äöüß'));
    }

    /**
     * @expectedException \\RuntimeException
     */
    public function testCharsetChangeNotImplemented()
    {
        \$this->encoder->charsetChanged('utf-8');
        \$this->encoder->charsetChanged('charset');
        \$this->encoder->encodeString('foo');
    }

    public function testGetName()
    {
        \$this->assertSame('quoted-printable', \$this->encoder->getName());
    }

    private function createEncoderFromContainer()
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('mime.nativeqpcontentencoder')
            ;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/NativeQpContentEncoderAcceptanceTest.php");
    }
}
