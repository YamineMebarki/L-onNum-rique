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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php */
class __TwigTemplate_4c45696bdaa4884f9b03d8a5afcc87c14c6bb9ca1b2f7e94add4b4025131140e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_ContentEncoder_PlainContentEncoderTest extends \\SwiftMailerTestCase
{
    public function testNameCanBeSpecifiedInConstructor()
    {
        \$encoder = \$this->getEncoder('7bit');
        \$this->assertEquals('7bit', \$encoder->getName());

        \$encoder = \$this->getEncoder('8bit');
        \$this->assertEquals('8bit', \$encoder->getName());
    }

    public function testNoOctetsAreModifiedInString()
    {
        \$encoder = \$this->getEncoder('7bit');
        foreach (range(0x00, 0xFF) as \$octet) {
            \$byte = pack('C', \$octet);
            \$this->assertIdenticalBinary(\$byte, \$encoder->encodeString(\$byte));
        }
    }

    public function testNoOctetsAreModifiedInByteStream()
    {
        \$encoder = \$this->getEncoder('7bit');
        foreach (range(0x00, 0xFF) as \$octet) {
            \$byte = pack('C', \$octet);

            \$os = \$this->createOutputByteStream();
            \$is = \$this->createInputByteStream();
            \$collection = new Swift_StreamCollector();

            \$is->shouldReceive('write')
               ->zeroOrMoreTimes()
               ->andReturnUsing(\$collection);
            \$os->shouldReceive('read')
               ->once()
               ->andReturn(\$byte);
            \$os->shouldReceive('read')
               ->zeroOrMoreTimes()
               ->andReturn(false);

            \$encoder->encodeByteStream(\$os, \$is);
            \$this->assertIdenticalBinary(\$byte, \$collection->content);
        }
    }

    public function testLineLengthCanBeSpecified()
    {
        \$encoder = \$this->getEncoder('7bit');

        \$chars = [];
        for (\$i = 0; \$i < 50; ++\$i) {
            \$chars[] = 'a';
        }
        \$input = implode(' ', \$chars); //99 chars long

        \$this->assertEquals(
            'a a a a a a a a a a a a a a a a a a a a a a a a a '.\"\\r\\n\".//50 *
            'a a a a a a a a a a a a a a a a a a a a a a a a a',            //99
            \$encoder->encodeString(\$input, 0, 50),
            '%s: Lines should be wrapped at 50 chars'
            );
    }

    public function testLineLengthCanBeSpecifiedInByteStream()
    {
        \$encoder = \$this->getEncoder('7bit');

        \$os = \$this->createOutputByteStream();
        \$is = \$this->createInputByteStream();
        \$collection = new Swift_StreamCollector();

        \$is->shouldReceive('write')
           ->zeroOrMoreTimes()
           ->andReturnUsing(\$collection);

        for (\$i = 0; \$i < 50; ++\$i) {
            \$os->shouldReceive('read')
               ->once()
               ->andReturn('a ');
        }

        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$encoder->encodeByteStream(\$os, \$is, 0, 50);
        \$this->assertEquals(
            str_repeat('a ', 25).\"\\r\\n\".str_repeat('a ', 25),
            \$collection->content
            );
    }

    public function testencodeStringGeneratesCorrectCrlf()
    {
        \$encoder = \$this->getEncoder('7bit', true);
        \$this->assertEquals(\"a\\r\\nb\", \$encoder->encodeString(\"a\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\nb\", \$encoder->encodeString(\"a\\nb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\n\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\r\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\n\\nb\"),
            '%s: Line endings should be standardized'
            );
    }

    public function crlfProvider()
    {
        return [
            [\"\\r\", \"a\\r\\nb\"],
            [\"\\n\", \"a\\r\\nb\"],
            [\"\\n\\r\", \"a\\r\\n\\r\\nb\"],
            [\"\\n\\n\", \"a\\r\\n\\r\\nb\"],
            [\"\\r\\r\", \"a\\r\\n\\r\\nb\"],
        ];
    }

    /**
     * @dataProvider crlfProvider
     */
    public function testCanonicEncodeByteStreamGeneratesCorrectCrlf(\$test, \$expected)
    {
        \$encoder = \$this->getEncoder('7bit', true);

        \$os = \$this->createOutputByteStream();
        \$is = \$this->createInputByteStream();
        \$collection = new Swift_StreamCollector();

        \$is->shouldReceive('write')
           ->zeroOrMoreTimes()
           ->andReturnUsing(\$collection);
        \$os->shouldReceive('read')
           ->once()
           ->andReturn('a');
        \$os->shouldReceive('read')
           ->once()
           ->andReturn(\$test);
        \$os->shouldReceive('read')
           ->once()
           ->andReturn('b');
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$encoder->encodeByteStream(\$os, \$is);
        \$this->assertEquals(\$expected, \$collection->content);
    }

    private function getEncoder(\$name, \$canonical = false)
    {
        return new Swift_Mime_ContentEncoder_PlainContentEncoder(\$name, \$canonical);
    }

    private function createOutputByteStream(\$stub = false)
    {
        return \$this->getMockery('Swift_OutputByteStream')->shouldIgnoreMissing();
    }

    private function createInputByteStream(\$stub = false)
    {
        return \$this->getMockery('Swift_InputByteStream')->shouldIgnoreMissing();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_ContentEncoder_PlainContentEncoderTest extends \\SwiftMailerTestCase
{
    public function testNameCanBeSpecifiedInConstructor()
    {
        \$encoder = \$this->getEncoder('7bit');
        \$this->assertEquals('7bit', \$encoder->getName());

        \$encoder = \$this->getEncoder('8bit');
        \$this->assertEquals('8bit', \$encoder->getName());
    }

    public function testNoOctetsAreModifiedInString()
    {
        \$encoder = \$this->getEncoder('7bit');
        foreach (range(0x00, 0xFF) as \$octet) {
            \$byte = pack('C', \$octet);
            \$this->assertIdenticalBinary(\$byte, \$encoder->encodeString(\$byte));
        }
    }

    public function testNoOctetsAreModifiedInByteStream()
    {
        \$encoder = \$this->getEncoder('7bit');
        foreach (range(0x00, 0xFF) as \$octet) {
            \$byte = pack('C', \$octet);

            \$os = \$this->createOutputByteStream();
            \$is = \$this->createInputByteStream();
            \$collection = new Swift_StreamCollector();

            \$is->shouldReceive('write')
               ->zeroOrMoreTimes()
               ->andReturnUsing(\$collection);
            \$os->shouldReceive('read')
               ->once()
               ->andReturn(\$byte);
            \$os->shouldReceive('read')
               ->zeroOrMoreTimes()
               ->andReturn(false);

            \$encoder->encodeByteStream(\$os, \$is);
            \$this->assertIdenticalBinary(\$byte, \$collection->content);
        }
    }

    public function testLineLengthCanBeSpecified()
    {
        \$encoder = \$this->getEncoder('7bit');

        \$chars = [];
        for (\$i = 0; \$i < 50; ++\$i) {
            \$chars[] = 'a';
        }
        \$input = implode(' ', \$chars); //99 chars long

        \$this->assertEquals(
            'a a a a a a a a a a a a a a a a a a a a a a a a a '.\"\\r\\n\".//50 *
            'a a a a a a a a a a a a a a a a a a a a a a a a a',            //99
            \$encoder->encodeString(\$input, 0, 50),
            '%s: Lines should be wrapped at 50 chars'
            );
    }

    public function testLineLengthCanBeSpecifiedInByteStream()
    {
        \$encoder = \$this->getEncoder('7bit');

        \$os = \$this->createOutputByteStream();
        \$is = \$this->createInputByteStream();
        \$collection = new Swift_StreamCollector();

        \$is->shouldReceive('write')
           ->zeroOrMoreTimes()
           ->andReturnUsing(\$collection);

        for (\$i = 0; \$i < 50; ++\$i) {
            \$os->shouldReceive('read')
               ->once()
               ->andReturn('a ');
        }

        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$encoder->encodeByteStream(\$os, \$is, 0, 50);
        \$this->assertEquals(
            str_repeat('a ', 25).\"\\r\\n\".str_repeat('a ', 25),
            \$collection->content
            );
    }

    public function testencodeStringGeneratesCorrectCrlf()
    {
        \$encoder = \$this->getEncoder('7bit', true);
        \$this->assertEquals(\"a\\r\\nb\", \$encoder->encodeString(\"a\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\nb\", \$encoder->encodeString(\"a\\nb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\n\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\r\\rb\"),
            '%s: Line endings should be standardized'
            );
        \$this->assertEquals(\"a\\r\\n\\r\\nb\", \$encoder->encodeString(\"a\\n\\nb\"),
            '%s: Line endings should be standardized'
            );
    }

    public function crlfProvider()
    {
        return [
            [\"\\r\", \"a\\r\\nb\"],
            [\"\\n\", \"a\\r\\nb\"],
            [\"\\n\\r\", \"a\\r\\n\\r\\nb\"],
            [\"\\n\\n\", \"a\\r\\n\\r\\nb\"],
            [\"\\r\\r\", \"a\\r\\n\\r\\nb\"],
        ];
    }

    /**
     * @dataProvider crlfProvider
     */
    public function testCanonicEncodeByteStreamGeneratesCorrectCrlf(\$test, \$expected)
    {
        \$encoder = \$this->getEncoder('7bit', true);

        \$os = \$this->createOutputByteStream();
        \$is = \$this->createInputByteStream();
        \$collection = new Swift_StreamCollector();

        \$is->shouldReceive('write')
           ->zeroOrMoreTimes()
           ->andReturnUsing(\$collection);
        \$os->shouldReceive('read')
           ->once()
           ->andReturn('a');
        \$os->shouldReceive('read')
           ->once()
           ->andReturn(\$test);
        \$os->shouldReceive('read')
           ->once()
           ->andReturn('b');
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$encoder->encodeByteStream(\$os, \$is);
        \$this->assertEquals(\$expected, \$collection->content);
    }

    private function getEncoder(\$name, \$canonical = false)
    {
        return new Swift_Mime_ContentEncoder_PlainContentEncoder(\$name, \$canonical);
    }

    private function createOutputByteStream(\$stub = false)
    {
        return \$this->getMockery('Swift_OutputByteStream')->shouldIgnoreMissing();
    }

    private function createInputByteStream(\$stub = false)
    {
        return \$this->getMockery('Swift_InputByteStream')->shouldIgnoreMissing();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/ContentEncoder/PlainContentEncoderTest.php");
    }
}
