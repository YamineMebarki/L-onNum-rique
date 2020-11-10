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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php */
class __TwigTemplate_db6398e42001438d6e28bc429663b937da745aa5597a2c07a5d0022741c19ccb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php"));

        // line 1
        echo "<?php

class Swift_ByteStream_ArrayByteStreamTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testReadingSingleBytesFromBaseInput()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(\$input, \$output,
            '%s: Bytes read from stream should be the same as bytes in constructor'
            );
    }

    public function testReadingMultipleBytesFromBaseInput()
    {
        \$input = ['a', 'b', 'c', 'd'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(2)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['ab', 'cd'], \$output,
            '%s: Bytes read from stream should be in pairs'
            );
    }

    public function testReadingOddOffsetOnLastByte()
    {
        \$input = ['a', 'b', 'c', 'd', 'e'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(2)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['ab', 'cd', 'e'], \$output,
            '%s: Bytes read from stream should be in pairs except final read'
            );
    }

    public function testSettingPointerPartway()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);
        \$bs->setReadPointer(1);
        \$this->assertEquals('b', \$bs->read(1),
            '%s: Byte should be second byte since pointer as at offset 1'
            );
    }

    public function testResettingPointerAfterExhaustion()
    {
        \$input = ['a', 'b', 'c'];

        \$bs = \$this->createArrayStream(\$input);
        while (false !== \$bs->read(1));

        \$bs->setReadPointer(0);
        \$this->assertEquals('a', \$bs->read(1),
            '%s: Byte should be first byte since pointer as at offset 0'
            );
    }

    public function testPointerNeverSetsBelowZero()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->setReadPointer(-1);
        \$this->assertEquals('a', \$bs->read(1),
            '%s: Byte should be first byte since pointer should be at offset 0'
            );
    }

    public function testPointerNeverSetsAboveStackSize()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->setReadPointer(3);
        \$this->assertFalse(\$bs->read(1),
            '%s: Stream should be at end and thus return false'
            );
    }

    public function testBytesCanBeWrittenToStream()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->write('de');

        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['a', 'b', 'c', 'd', 'e'], \$output,
            '%s: Bytes read from stream should be from initial stack + written'
            );
    }

    public function testContentsCanBeFlushed()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->flushBuffers();

        \$this->assertFalse(\$bs->read(1),
            '%s: Contents have been flushed so read() should return false'
            );
    }

    public function testConstructorCanTakeStringArgument()
    {
        \$bs = \$this->createArrayStream('abc');
        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['a', 'b', 'c'], \$output,
            '%s: Bytes read from stream should be the same as bytes in constructor'
            );
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

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

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->write('x');
        \$bs->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->write('x');

        \$bs->unbind(\$is2);

        \$bs->write('y');
    }

    private function createArrayStream(\$input)
    {
        return new Swift_ByteStream_ArrayByteStream(\$input);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_ByteStream_ArrayByteStreamTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testReadingSingleBytesFromBaseInput()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(\$input, \$output,
            '%s: Bytes read from stream should be the same as bytes in constructor'
            );
    }

    public function testReadingMultipleBytesFromBaseInput()
    {
        \$input = ['a', 'b', 'c', 'd'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(2)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['ab', 'cd'], \$output,
            '%s: Bytes read from stream should be in pairs'
            );
    }

    public function testReadingOddOffsetOnLastByte()
    {
        \$input = ['a', 'b', 'c', 'd', 'e'];
        \$bs = \$this->createArrayStream(\$input);
        \$output = [];
        while (false !== \$bytes = \$bs->read(2)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['ab', 'cd', 'e'], \$output,
            '%s: Bytes read from stream should be in pairs except final read'
            );
    }

    public function testSettingPointerPartway()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);
        \$bs->setReadPointer(1);
        \$this->assertEquals('b', \$bs->read(1),
            '%s: Byte should be second byte since pointer as at offset 1'
            );
    }

    public function testResettingPointerAfterExhaustion()
    {
        \$input = ['a', 'b', 'c'];

        \$bs = \$this->createArrayStream(\$input);
        while (false !== \$bs->read(1));

        \$bs->setReadPointer(0);
        \$this->assertEquals('a', \$bs->read(1),
            '%s: Byte should be first byte since pointer as at offset 0'
            );
    }

    public function testPointerNeverSetsBelowZero()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->setReadPointer(-1);
        \$this->assertEquals('a', \$bs->read(1),
            '%s: Byte should be first byte since pointer should be at offset 0'
            );
    }

    public function testPointerNeverSetsAboveStackSize()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->setReadPointer(3);
        \$this->assertFalse(\$bs->read(1),
            '%s: Stream should be at end and thus return false'
            );
    }

    public function testBytesCanBeWrittenToStream()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->write('de');

        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['a', 'b', 'c', 'd', 'e'], \$output,
            '%s: Bytes read from stream should be from initial stack + written'
            );
    }

    public function testContentsCanBeFlushed()
    {
        \$input = ['a', 'b', 'c'];
        \$bs = \$this->createArrayStream(\$input);

        \$bs->flushBuffers();

        \$this->assertFalse(\$bs->read(1),
            '%s: Contents have been flushed so read() should return false'
            );
    }

    public function testConstructorCanTakeStringArgument()
    {
        \$bs = \$this->createArrayStream('abc');
        \$output = [];
        while (false !== \$bytes = \$bs->read(1)) {
            \$output[] = \$bytes;
        }
        \$this->assertEquals(['a', 'b', 'c'], \$output,
            '%s: Bytes read from stream should be the same as bytes in constructor'
            );
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

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

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->write('x');
        \$bs->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$bs = \$this->createArrayStream('');
        \$is1 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();
        \$is2 = \$this->getMockBuilder('Swift_InputByteStream')->getMock();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$bs->bind(\$is1);
        \$bs->bind(\$is2);

        \$bs->write('x');

        \$bs->unbind(\$is2);

        \$bs->write('y');
    }

    private function createArrayStream(\$input)
    {
        return new Swift_ByteStream_ArrayByteStream(\$input);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/ByteStream/ArrayByteStreamTest.php");
    }
}
