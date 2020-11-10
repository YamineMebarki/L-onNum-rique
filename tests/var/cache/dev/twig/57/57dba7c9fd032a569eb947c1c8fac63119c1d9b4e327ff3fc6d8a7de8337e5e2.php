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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php */
class __TwigTemplate_af6510d76121f40f272ecbcc128bb831c7a969d6c3396d87959481589fda5a48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_ByteStream_FileByteStreamAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$_testFile;

    protected function setUp()
    {
        \$this->testFile = sys_get_temp_dir().'/swift-test-file'.__CLASS__;
        file_put_contents(\$this->testFile, 'abcdefghijklm');
    }

    protected function tearDown()
    {
        unlink(\$this->testFile);
    }

    public function testFileDataCanBeRead()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$str = '';
        while (false !== \$bytes = \$file->read(8192)) {
            \$str .= \$bytes;
        }
        \$this->assertEquals('abcdefghijklm', \$str);
    }

    public function testFileDataCanBeReadSequentially()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$this->assertEquals('abcde', \$file->read(5));
        \$this->assertEquals('fghijklm', \$file->read(8));
        \$this->assertFalse(\$file->read(1));
    }

    public function testFilenameIsReturned()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$this->assertEquals(\$this->testFile, \$file->getPath());
    }

    public function testFileCanBeWrittenTo()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->write('foobar');
        \$this->assertEquals('foobar', \$file->read(8192));
    }

    public function testReadingFromThenWritingToFile()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->write('foobar');
        \$this->assertEquals('foobar', \$file->read(8192));
        \$file->write('zipbutton');
        \$this->assertEquals('zipbutton', \$file->read(8192));
    }

    public function testWritingToFileWithCanonicalization()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->addFilter(\$this->createFilter([\"\\r\\n\", \"\\r\"], \"\\n\"), 'allToLF');
        \$file->write(\"foo\\r\\nbar\\r\");
        \$file->write(\"\\nzip\\r\\ntest\\r\");
        \$file->flushBuffers();
        \$this->assertEquals(\"foo\\nbar\\nzip\\ntest\\n\", file_get_contents(\$this->testFile));
    }

    public function testWritingWithFulleMessageLengthOfAMultipleOf8192()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->addFilter(\$this->createFilter([\"\\r\\n\", \"\\r\"], \"\\n\"), 'allToLF');
        \$file->write('');
        \$file->flushBuffers();
        \$this->assertEquals('', file_get_contents(\$this->testFile));
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is2->expects(\$this->at(1))
            ->method('write')
            ->with('y');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->write('x');
        \$file->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$file = \$this->createFileStream(
            \$this->testFile, true
            );
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->write('x');

        \$file->unbind(\$is2);

        \$file->write('y');
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
    }

    private function createMockInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }

    private function createFileStream(\$file, \$writable = false)
    {
        return new Swift_ByteStream_FileByteStream(\$file, \$writable);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_ByteStream_FileByteStreamAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$_testFile;

    protected function setUp()
    {
        \$this->testFile = sys_get_temp_dir().'/swift-test-file'.__CLASS__;
        file_put_contents(\$this->testFile, 'abcdefghijklm');
    }

    protected function tearDown()
    {
        unlink(\$this->testFile);
    }

    public function testFileDataCanBeRead()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$str = '';
        while (false !== \$bytes = \$file->read(8192)) {
            \$str .= \$bytes;
        }
        \$this->assertEquals('abcdefghijklm', \$str);
    }

    public function testFileDataCanBeReadSequentially()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$this->assertEquals('abcde', \$file->read(5));
        \$this->assertEquals('fghijklm', \$file->read(8));
        \$this->assertFalse(\$file->read(1));
    }

    public function testFilenameIsReturned()
    {
        \$file = \$this->createFileStream(\$this->testFile);
        \$this->assertEquals(\$this->testFile, \$file->getPath());
    }

    public function testFileCanBeWrittenTo()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->write('foobar');
        \$this->assertEquals('foobar', \$file->read(8192));
    }

    public function testReadingFromThenWritingToFile()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->write('foobar');
        \$this->assertEquals('foobar', \$file->read(8192));
        \$file->write('zipbutton');
        \$this->assertEquals('zipbutton', \$file->read(8192));
    }

    public function testWritingToFileWithCanonicalization()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->addFilter(\$this->createFilter([\"\\r\\n\", \"\\r\"], \"\\n\"), 'allToLF');
        \$file->write(\"foo\\r\\nbar\\r\");
        \$file->write(\"\\nzip\\r\\ntest\\r\");
        \$file->flushBuffers();
        \$this->assertEquals(\"foo\\nbar\\nzip\\ntest\\n\", file_get_contents(\$this->testFile));
    }

    public function testWritingWithFulleMessageLengthOfAMultipleOf8192()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$file->addFilter(\$this->createFilter([\"\\r\\n\", \"\\r\"], \"\\n\"), 'allToLF');
        \$file->write('');
        \$file->flushBuffers();
        \$this->assertEquals('', file_get_contents(\$this->testFile));
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is2->expects(\$this->at(1))
            ->method('write')
            ->with('y');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->write('x');
        \$file->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$file = \$this->createFileStream(
            \$this->testFile, true
            );
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$file = \$this->createFileStream(\$this->testFile, true);
        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$file->bind(\$is1);
        \$file->bind(\$is2);

        \$file->write('x');

        \$file->unbind(\$is2);

        \$file->write('y');
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
    }

    private function createMockInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }

    private function createFileStream(\$file, \$writable = false)
    {
        return new Swift_ByteStream_FileByteStream(\$file, \$writable);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/ByteStream/FileByteStreamAcceptanceTest.php");
    }
}
