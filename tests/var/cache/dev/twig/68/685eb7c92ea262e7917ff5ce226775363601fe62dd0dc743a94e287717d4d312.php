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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php */
class __TwigTemplate_1f5dcfcf39ce7ba45986ef4a105b2f80f829aedf709f5f848cf8c8b14b8364e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php"));

        // line 1
        echo "<?php

class Swift_CharacterStream_ArrayCharacterStreamTest extends \\SwiftMailerTestCase
{
    public function testValidatorAlgorithmOnImportString()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*',
            0xD0, 0x94,
            0xD0, 0xB6,
            0xD0, 0xBE,
            0xD1, 0x8D,
            0xD0, 0xBB,
            0xD0, 0xB0
            )
        );
    }

    public function testCharactersWrittenUseValidator()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );
    }

    public function testReadCharactersAreInTact()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        //String
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        //Stream
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertIdenticalBinary(
            pack('C*', 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(2)
            );
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertIdenticalBinary(
            pack('C*', 0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B), \$stream->read(3)
            );
        \$this->assertIdenticalBinary(pack('C*', 0xD1, 0x85), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    public function testCharactersCanBeReadAsByteArrays()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        //String
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        //Stream
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );

        \$this->assertEquals([0xD0, 0x94], \$stream->readBytes(1));
        \$this->assertEquals([0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(2));
        \$this->assertEquals([0xD0, 0xBB], \$stream->readBytes(1));
        \$this->assertEquals(
            [0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B], \$stream->readBytes(3)
            );
        \$this->assertEquals([0xD1, 0x85], \$stream->readBytes(1));

        \$this->assertFalse(\$stream->readBytes(1));
    }

    public function testRequestingLargeCharCountPastEndOfStream()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE),
            \$stream->read(100)
            );

        \$this->assertFalse(\$stream->read(1));
    }

    public function testRequestingByteArrayCountPastEndOfStream()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertEquals([0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE],
            \$stream->readBytes(100)
            );

        \$this->assertFalse(\$stream->readBytes(1));
    }

    public function testPointerOffsetCanBeSet()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));

        \$stream->setPointer(0);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));

        \$stream->setPointer(2);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBE), \$stream->read(1));
    }

    public function testContentsCanBeFlushed()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->flushContents();

        \$this->assertFalse(\$stream->read(1));
    }

    public function testByteStreamCanBeImportingUsesValidator()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);
        \$os = \$this->getByteStream();

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$os->shouldReceive('setReadPointer')
           ->between(0, 1)
           ->with(0);
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0x94));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xB6));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xBE));
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importByteStream(\$os);
    }

    public function testImportingStreamProducesCorrectCharArray()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);
        \$os = \$this->getByteStream();

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$os->shouldReceive('setReadPointer')
           ->between(0, 1)
           ->with(0);
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0x94));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xB6));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xBE));
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importByteStream(\$os);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xB6), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBE), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    public function testAlgorithmWithFixedWidthCharsets()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1, 0x8D], 2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0, 0xBB], 2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0, 0xB0], 2);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(
            \$factory, 'utf-8'
        );
        \$stream->importString(pack('C*', 0xD1, 0x8D, 0xD0, 0xBB, 0xD0, 0xB0));

        \$this->assertIdenticalBinary(pack('C*', 0xD1, 0x8D), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xB0), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    private function getReader()
    {
        return \$this->getMockery('Swift_CharacterReader');
    }

    private function getFactory(\$reader)
    {
        \$factory = \$this->getMockery('Swift_CharacterReaderFactory');
        \$factory->shouldReceive('getReaderFor')
                ->zeroOrMoreTimes()
                ->with('utf-8')
                ->andReturn(\$reader);

        return \$factory;
    }

    private function getByteStream()
    {
        return \$this->getMockery('Swift_OutputByteStream');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_CharacterStream_ArrayCharacterStreamTest extends \\SwiftMailerTestCase
{
    public function testValidatorAlgorithmOnImportString()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*',
            0xD0, 0x94,
            0xD0, 0xB6,
            0xD0, 0xBE,
            0xD1, 0x8D,
            0xD0, 0xBB,
            0xD0, 0xB0
            )
        );
    }

    public function testCharactersWrittenUseValidator()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );
    }

    public function testReadCharactersAreInTact()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        //String
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        //Stream
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertIdenticalBinary(
            pack('C*', 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(2)
            );
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertIdenticalBinary(
            pack('C*', 0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B), \$stream->read(3)
            );
        \$this->assertIdenticalBinary(pack('C*', 0xD1, 0x85), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    public function testCharactersCanBeReadAsByteArrays()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        //String
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        //Stream
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
            )
        );

        \$this->assertEquals([0xD0, 0x94], \$stream->readBytes(1));
        \$this->assertEquals([0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(2));
        \$this->assertEquals([0xD0, 0xBB], \$stream->readBytes(1));
        \$this->assertEquals(
            [0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B], \$stream->readBytes(3)
            );
        \$this->assertEquals([0xD1, 0x85], \$stream->readBytes(1));

        \$this->assertFalse(\$stream->readBytes(1));
    }

    public function testRequestingLargeCharCountPastEndOfStream()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE),
            \$stream->read(100)
            );

        \$this->assertFalse(\$stream->read(1));
    }

    public function testRequestingByteArrayCountPastEndOfStream()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertEquals([0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE],
            \$stream->readBytes(100)
            );

        \$this->assertFalse(\$stream->readBytes(1));
    }

    public function testPointerOffsetCanBeSet()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));

        \$stream->setPointer(0);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));

        \$stream->setPointer(2);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBE), \$stream->read(1));
    }

    public function testContentsCanBeFlushed()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importString(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));

        \$stream->flushContents();

        \$this->assertFalse(\$stream->read(1));
    }

    public function testByteStreamCanBeImportingUsesValidator()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);
        \$os = \$this->getByteStream();

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$os->shouldReceive('setReadPointer')
           ->between(0, 1)
           ->with(0);
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0x94));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xB6));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xBE));
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importByteStream(\$os);
    }

    public function testImportingStreamProducesCorrectCharArray()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);
        \$os = \$this->getByteStream();

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8');

        \$os->shouldReceive('setReadPointer')
           ->between(0, 1)
           ->with(0);
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0x94));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xB6));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xD0));
        \$os->shouldReceive('read')->once()->andReturn(pack('C*', 0xBE));
        \$os->shouldReceive('read')
           ->zeroOrMoreTimes()
           ->andReturn(false);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0], 1)->andReturn(1);

        \$stream->importByteStream(\$os);

        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xB6), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBE), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    public function testAlgorithmWithFixedWidthCharsets()
    {
        \$reader = \$this->getReader();
        \$factory = \$this->getFactory(\$reader);

        \$reader->shouldReceive('getInitialByteSize')
               ->zeroOrMoreTimes()
               ->andReturn(2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD1, 0x8D], 2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0, 0xBB], 2);
        \$reader->shouldReceive('validateByteSequence')->once()->with([0xD0, 0xB0], 2);

        \$stream = new Swift_CharacterStream_ArrayCharacterStream(
            \$factory, 'utf-8'
        );
        \$stream->importString(pack('C*', 0xD1, 0x8D, 0xD0, 0xBB, 0xD0, 0xB0));

        \$this->assertIdenticalBinary(pack('C*', 0xD1, 0x8D), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertIdenticalBinary(pack('C*', 0xD0, 0xB0), \$stream->read(1));

        \$this->assertFalse(\$stream->read(1));
    }

    private function getReader()
    {
        return \$this->getMockery('Swift_CharacterReader');
    }

    private function getFactory(\$reader)
    {
        \$factory = \$this->getMockery('Swift_CharacterReaderFactory');
        \$factory->shouldReceive('getReaderFor')
                ->zeroOrMoreTimes()
                ->with('utf-8')
                ->andReturn(\$reader);

        return \$factory;
    }

    private function getByteStream()
    {
        return \$this->getMockery('Swift_OutputByteStream');
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterStream/ArrayCharacterStreamTest.php");
    }
}
