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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php */
class __TwigTemplate_3c260607ea805044bb8ee512867a6afa64c6fc7b27d31020230bb10d3a9cba5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_ContentEncoder_Base64ContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$samplesDir;
    private \$encoder;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->encoder = new Swift_Mime_ContentEncoder_Base64ContentEncoder();
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
                        base64_decode(\$encoded), \$text,
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_ContentEncoder_Base64ContentEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$samplesDir;
    private \$encoder;

    protected function setUp()
    {
        \$this->samplesDir = realpath(__DIR__.'/../../../../_samples/charsets');
        \$this->encoder = new Swift_Mime_ContentEncoder_Base64ContentEncoder();
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
                        base64_decode(\$encoded), \$text,
                        '%s: Encoded string should decode back to original string for sample '.
                        \$sampleDir.'/'.\$sampleFile
                        );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/ContentEncoder/Base64ContentEncoderAcceptanceTest.php");
    }
}
