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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php */
class __TwigTemplate_2166ff19309e106eba7175530d0096a08f48a102d2ee4790d2ebd9e7b0632912 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php"));

        // line 1
        echo "<?php

class Swift_Bug76Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$inputFile;
    private \$outputFile;
    private \$encoder;

    protected function setUp()
    {
        \$this->inputFile = sys_get_temp_dir().'/in.bin';
        file_put_contents(\$this->inputFile, '');

        \$this->outputFile = sys_get_temp_dir().'/out.bin';
        file_put_contents(\$this->outputFile, '');

        \$this->encoder = \$this->createEncoder();
    }

    protected function tearDown()
    {
        unlink(\$this->inputFile);
        unlink(\$this->outputFile);
    }

    public function testBase64EncodedLineLengthNeverExceeds76CharactersEvenIfArgsDo()
    {
        \$this->fillFileWithRandomBytes(1000, \$this->inputFile);

        \$os = \$this->createStream(\$this->inputFile);
        \$is = \$this->createStream(\$this->outputFile);

        \$this->encoder->encodeByteStream(\$os, \$is, 0, 80); //Exceeds 76

        \$this->assertMaxLineLength(76, \$this->outputFile,
            '%s: Line length should not exceed 76 characters'
        );
    }

    public function assertMaxLineLength(\$length, \$filePath, \$message = '%s')
    {
        \$lines = file(\$filePath);
        foreach (\$lines as \$line) {
            \$this->assertTrue((strlen(trim(\$line)) <= 76), \$message);
        }
    }

    private function fillFileWithRandomBytes(\$byteCount, \$file)
    {
        // I was going to use dd with if=/dev/random but this way seems more
        // cross platform even if a hella expensive!!

        file_put_contents(\$file, '');
        \$fp = fopen(\$file, 'wb');
        for (\$i = 0; \$i < \$byteCount; ++\$i) {
            \$byteVal = random_int(0, 255);
            fwrite(\$fp, pack('i', \$byteVal));
        }
        fclose(\$fp);
    }

    private function createEncoder()
    {
        return new Swift_Mime_ContentEncoder_Base64ContentEncoder();
    }

    private function createStream(\$file)
    {
        return new Swift_ByteStream_FileByteStream(\$file, true);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug76Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$inputFile;
    private \$outputFile;
    private \$encoder;

    protected function setUp()
    {
        \$this->inputFile = sys_get_temp_dir().'/in.bin';
        file_put_contents(\$this->inputFile, '');

        \$this->outputFile = sys_get_temp_dir().'/out.bin';
        file_put_contents(\$this->outputFile, '');

        \$this->encoder = \$this->createEncoder();
    }

    protected function tearDown()
    {
        unlink(\$this->inputFile);
        unlink(\$this->outputFile);
    }

    public function testBase64EncodedLineLengthNeverExceeds76CharactersEvenIfArgsDo()
    {
        \$this->fillFileWithRandomBytes(1000, \$this->inputFile);

        \$os = \$this->createStream(\$this->inputFile);
        \$is = \$this->createStream(\$this->outputFile);

        \$this->encoder->encodeByteStream(\$os, \$is, 0, 80); //Exceeds 76

        \$this->assertMaxLineLength(76, \$this->outputFile,
            '%s: Line length should not exceed 76 characters'
        );
    }

    public function assertMaxLineLength(\$length, \$filePath, \$message = '%s')
    {
        \$lines = file(\$filePath);
        foreach (\$lines as \$line) {
            \$this->assertTrue((strlen(trim(\$line)) <= 76), \$message);
        }
    }

    private function fillFileWithRandomBytes(\$byteCount, \$file)
    {
        // I was going to use dd with if=/dev/random but this way seems more
        // cross platform even if a hella expensive!!

        file_put_contents(\$file, '');
        \$fp = fopen(\$file, 'wb');
        for (\$i = 0; \$i < \$byteCount; ++\$i) {
            \$byteVal = random_int(0, 255);
            fwrite(\$fp, pack('i', \$byteVal));
        }
        fclose(\$fp);
    }

    private function createEncoder()
    {
        return new Swift_Mime_ContentEncoder_Base64ContentEncoder();
    }

    private function createStream(\$file)
    {
        return new Swift_ByteStream_FileByteStream(\$file, true);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug76Test.php");
    }
}
