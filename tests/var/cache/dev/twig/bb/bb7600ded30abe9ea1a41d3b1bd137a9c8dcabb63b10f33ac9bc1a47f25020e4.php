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

/* vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php */
class __TwigTemplate_61487d7e093b88c6f1bdb240fe4c8c1cb7be0b046cb1dacc8b144764731934c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Encoder\\CsvEncoder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CsvEncoderTest extends TestCase
{
    /**
     * @var CsvEncoder
     */
    private \$encoder;

    protected function setUp(): void
    {
        \$this->encoder = new CsvEncoder();
    }

    public function testTrueFalseValues()
    {
        \$data = [
            'string' => 'foo',
            'int' => 2,
            'false' => false,
            'true' => true,
            'int_one' => 1,
            'string_one' => '1',
        ];

        // Check that true and false are appropriately handled
        \$this->assertSame(\$csv = <<<'CSV'
string,int,false,true,int_one,string_one
foo,2,0,1,1,1

CSV
        , \$this->encoder->encode(\$data, 'csv'));

        \$this->assertSame([
            'string' => 'foo',
            'int' => '2',
            'false' => '0',
            'true' => '1',
            'int_one' => '1',
            'string_one' => '1',
        ], \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    /**
     * @requires PHP 7.4
     */
    public function testDoubleQuotesAndSlashes()
    {
        \$this->assertSame(\$csv = <<<'CSV'
0,1,2,3,4,5
,\"\"\"\",\"foo\"\"\",\"\\\"\"\",\\,foo\\

CSV
        , \$this->encoder->encode(\$data = ['', '\"', 'foo\"', '\\\\\"', '\\\\', 'foo\\\\'], 'csv'));

        \$this->assertSame(\$data, \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    /**
     * @requires PHP 7.4
     */
    public function testSingleSlash()
    {
        \$this->assertSame(\$csv = \"0\\n\\\\\\n\", \$this->encoder->encode(\$data = ['\\\\'], 'csv'));
        \$this->assertSame(\$data, \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
        \$this->assertSame(\$data, \$this->encoder->decode(trim(\$csv), 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    public function testSupportEncoding()
    {
        \$this->assertTrue(\$this->encoder->supportsEncoding('csv'));
        \$this->assertFalse(\$this->encoder->supportsEncoding('foo'));
    }

    public function testEncode()
    {
        \$value = ['foo' => 'hello', 'bar' => 'hey ho'];

        \$this->assertEquals(<<<'CSV'
foo,bar
hello,\"hey ho\"

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCollection()
    {
        \$value = [
            ['foo' => 'hello', 'bar' => 'hey ho'],
            ['foo' => 'hi', 'bar' => 'let\\'s go'],
        ];

        \$this->assertEquals(<<<'CSV'
foo,bar
hello,\"hey ho\"
hi,\"let's go\"

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodePlainIndexedArray()
    {
        \$this->assertEquals(<<<'CSV'
0,1,2
a,b,c

CSV
            , \$this->encoder->encode(['a', 'b', 'c'], 'csv'));
    }

    public function testEncodeNonArray()
    {
        \$this->assertEquals(<<<'CSV'
0
foo

CSV
            , \$this->encoder->encode('foo', 'csv'));
    }

    public function testEncodeNestedArrays()
    {
        \$value = ['foo' => 'hello', 'bar' => [
            ['id' => 'yo', 1 => 'wesh'],
            ['baz' => 'Halo', 'foo' => 'olá'],
        ]];

        \$this->assertEquals(<<<'CSV'
foo,bar.0.id,bar.0.1,bar.1.baz,bar.1.foo
hello,yo,wesh,Halo,olá

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomSettings()
    {
        \$this->doTestEncodeCustomSettings();
    }

    public function testLegacyEncodeCustomSettings()
    {
        \$this->doTestEncodeCustomSettings(true);
    }

    private function doTestEncodeCustomSettings(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(';', \"'\", '|', '-');
        } else {
            \$this->encoder = new CsvEncoder([
                CsvEncoder::DELIMITER_KEY => ';',
                CsvEncoder::ENCLOSURE_KEY => \"'\",
                CsvEncoder::ESCAPE_CHAR_KEY => '|',
                CsvEncoder::KEY_SEPARATOR_KEY => '-',
            ]);
        }

        \$value = ['a' => 'he\\'llo', 'c' => ['d' => 'foo']];

        \$this->assertEquals(<<<'CSV'
a;c-d
'he''llo';foo

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomSettingsPassedInContext()
    {
        \$value = ['a' => 'he\\'llo', 'c' => ['d' => 'foo']];

        \$this->assertSame(<<<'CSV'
a;c-d
'he''llo';foo

CSV
        , \$this->encoder->encode(\$value, 'csv', [
            CsvEncoder::DELIMITER_KEY => ';',
            CsvEncoder::ENCLOSURE_KEY => \"'\",
            CsvEncoder::ESCAPE_CHAR_KEY => '|',
            CsvEncoder::KEY_SEPARATOR_KEY => '-',
        ]));
    }

    public function testEncodeEmptyArray()
    {
        \$this->assertEquals(\"\\n\\n\", \$this->encoder->encode([], 'csv'));
        \$this->assertEquals(\"\\n\\n\", \$this->encoder->encode([[]], 'csv'));
    }

    public function testEncodeVariableStructure()
    {
        \$value = [
            ['a' => ['foo', 'bar']],
            ['a' => [], 'b' => 'baz'],
            ['a' => ['bar', 'foo'], 'c' => 'pong'],
        ];
        \$csv = <<<CSV
a.0,a.1,c,b
foo,bar,,
,,,baz
bar,foo,pong,

CSV;

        \$this->assertEquals(\$csv, \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomHeaders()
    {
        \$context = [
            CsvEncoder::HEADERS_KEY => [
                'b',
                'c',
            ],
        ];
        \$value = [
            ['a' => 'foo', 'b' => 'bar'],
        ];
        \$csv = <<<CSV
b,c,a
bar,,foo

CSV;

        \$this->assertEquals(\$csv, \$this->encoder->encode(\$value, 'csv', \$context));
    }

    public function testEncodeFormulas()
    {
        \$this->doTestEncodeFormulas();
    }

    public function testLegacyEncodeFormulas()
    {
        \$this->doTestEncodeFormulas(true);
    }

    private function doTestEncodeFormulas(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(',', '\"', '\\\\', '.', true);
        } else {
            \$this->encoder = new CsvEncoder([CsvEncoder::ESCAPE_FORMULAS_KEY => true]);
        }

        \$this->assertSame(<<<'CSV'
0
\"\t=2+3\"

CSV
            , \$this->encoder->encode(['=2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t-2+3\"

CSV
            , \$this->encoder->encode(['-2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t+2+3\"

CSV
            , \$this->encoder->encode(['+2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t@MyDataColumn\"

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv'));
    }

    public function testDoNotEncodeFormulas()
    {
        \$this->assertSame(<<<'CSV'
0
=2+3

CSV
            , \$this->encoder->encode(['=2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
-2+3

CSV
            , \$this->encoder->encode(['-2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
+2+3

CSV
            , \$this->encoder->encode(['+2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
@MyDataColumn

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv'));
    }

    public function testEncodeFormulasWithSettingsPassedInContext()
    {
        \$this->assertSame(<<<'CSV'
0
\"\t=2+3\"

CSV
            , \$this->encoder->encode(['=2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t-2+3\"

CSV
            , \$this->encoder->encode(['-2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t+2+3\"

CSV
            , \$this->encoder->encode(['+2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t@MyDataColumn\"

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));
    }

    public function testEncodeWithoutHeader()
    {
        \$this->assertSame(<<<'CSV'
a,b
c,d

CSV
            , \$this->encoder->encode([['a', 'b'], ['c', 'd']], 'csv', [
                CsvEncoder::NO_HEADERS_KEY => true,
            ]));
    }

    public function testSupportsDecoding()
    {
        \$this->assertTrue(\$this->encoder->supportsDecoding('csv'));
        \$this->assertFalse(\$this->encoder->supportsDecoding('foo'));
    }

    /**
     * @group legacy
     * @expectedDeprecation Relying on the default value (false) of the \"as_collection\" option is deprecated since 4.2. You should set it to false explicitly instead as true will be the default value in 5.0.
     */
    public function testDecodeLegacy()
    {
        \$expected = ['foo' => 'a', 'bar' => 'b'];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
CSV
        , 'csv'));
    }

    public function testDecodeAsSingle()
    {
        \$expected = ['foo' => 'a', 'bar' => 'b'];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
CSV
        , 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    public function testDecodeCollection()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => 'b'],
            ['foo' => 'c', 'bar' => 'd'],
            ['foo' => 'f'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
c,d
f

CSV
        , 'csv'));
    }

    public function testDecode()
    {
        \$expected = [
            ['foo' => 'a'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo
a

CSV
        , 'csv', [
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeToManyRelation()
    {
        \$expected = [
            ['foo' => 'bar', 'relations' => [['a' => 'b'], ['a' => 'b']]],
            ['foo' => 'bat', 'relations' => [['a' => 'b'], ['a' => '']]],
            ['foo' => 'bat', 'relations' => [['a' => 'b']]],
            ['foo' => 'baz', 'relations' => [['a' => 'c'], ['a' => 'c']]],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,relations.0.a,relations.1.a
bar,b,b
bat,b,
bat,b
baz,c,c
CSV
            , 'csv'));
    }

    public function testDecodeNestedArrays()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => ['baz' => ['bat' => 'b']]],
            ['foo' => 'c', 'bar' => ['baz' => ['bat' => 'd']]],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar.baz.bat
a,b
c,d
CSV
        , 'csv'));
    }

    public function testDecodeCustomSettings()
    {
        \$this->doTestDecodeCustomSettings();
    }

    public function testLegacyDecodeCustomSettings()
    {
        \$this->doTestDecodeCustomSettings(true);
    }

    private function doTestDecodeCustomSettings(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(';', \"'\", '|', '-');
        } else {
            \$this->encoder = new CsvEncoder([
                CsvEncoder::DELIMITER_KEY => ';',
                CsvEncoder::ENCLOSURE_KEY => \"'\",
                CsvEncoder::ESCAPE_CHAR_KEY => '|',
                CsvEncoder::KEY_SEPARATOR_KEY => '-',
            ]);
        }

        \$expected = [['a' => 'hell\\'o', 'bar' => ['baz' => 'b']]];
        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
a;bar-baz
'hell''o';b;c
CSV
        , 'csv', [
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeCustomSettingsPassedInContext()
    {
        \$expected = [['a' => 'hell\\'o', 'bar' => ['baz' => 'b']]];
        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
a;bar-baz
'hell''o';b;c
CSV
        , 'csv', [
            CsvEncoder::DELIMITER_KEY => ';',
            CsvEncoder::ENCLOSURE_KEY => \"'\",
            CsvEncoder::ESCAPE_CHAR_KEY => '|',
            CsvEncoder::KEY_SEPARATOR_KEY => '-',
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeMalformedCollection()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => 'b'],
            ['foo' => 'c', 'bar' => 'd'],
            ['foo' => 'f'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b,e
c,d,g,h
f

CSV
            , 'csv'));
    }

    public function testDecodeEmptyArray()
    {
        \$this->assertEquals([], \$this->encoder->decode('', 'csv'));
    }

    public function testDecodeWithoutHeader()
    {
        \$this->assertEquals([['a', 'b'], ['c', 'd']], \$this->encoder->decode(<<<'CSV'
a,b
c,d

CSV
        , 'csv', [
            CsvEncoder::NO_HEADERS_KEY => true,
        ]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Encoder\\CsvEncoder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CsvEncoderTest extends TestCase
{
    /**
     * @var CsvEncoder
     */
    private \$encoder;

    protected function setUp(): void
    {
        \$this->encoder = new CsvEncoder();
    }

    public function testTrueFalseValues()
    {
        \$data = [
            'string' => 'foo',
            'int' => 2,
            'false' => false,
            'true' => true,
            'int_one' => 1,
            'string_one' => '1',
        ];

        // Check that true and false are appropriately handled
        \$this->assertSame(\$csv = <<<'CSV'
string,int,false,true,int_one,string_one
foo,2,0,1,1,1

CSV
        , \$this->encoder->encode(\$data, 'csv'));

        \$this->assertSame([
            'string' => 'foo',
            'int' => '2',
            'false' => '0',
            'true' => '1',
            'int_one' => '1',
            'string_one' => '1',
        ], \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    /**
     * @requires PHP 7.4
     */
    public function testDoubleQuotesAndSlashes()
    {
        \$this->assertSame(\$csv = <<<'CSV'
0,1,2,3,4,5
,\"\"\"\",\"foo\"\"\",\"\\\"\"\",\\,foo\\

CSV
        , \$this->encoder->encode(\$data = ['', '\"', 'foo\"', '\\\\\"', '\\\\', 'foo\\\\'], 'csv'));

        \$this->assertSame(\$data, \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    /**
     * @requires PHP 7.4
     */
    public function testSingleSlash()
    {
        \$this->assertSame(\$csv = \"0\\n\\\\\\n\", \$this->encoder->encode(\$data = ['\\\\'], 'csv'));
        \$this->assertSame(\$data, \$this->encoder->decode(\$csv, 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
        \$this->assertSame(\$data, \$this->encoder->decode(trim(\$csv), 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    public function testSupportEncoding()
    {
        \$this->assertTrue(\$this->encoder->supportsEncoding('csv'));
        \$this->assertFalse(\$this->encoder->supportsEncoding('foo'));
    }

    public function testEncode()
    {
        \$value = ['foo' => 'hello', 'bar' => 'hey ho'];

        \$this->assertEquals(<<<'CSV'
foo,bar
hello,\"hey ho\"

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCollection()
    {
        \$value = [
            ['foo' => 'hello', 'bar' => 'hey ho'],
            ['foo' => 'hi', 'bar' => 'let\\'s go'],
        ];

        \$this->assertEquals(<<<'CSV'
foo,bar
hello,\"hey ho\"
hi,\"let's go\"

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodePlainIndexedArray()
    {
        \$this->assertEquals(<<<'CSV'
0,1,2
a,b,c

CSV
            , \$this->encoder->encode(['a', 'b', 'c'], 'csv'));
    }

    public function testEncodeNonArray()
    {
        \$this->assertEquals(<<<'CSV'
0
foo

CSV
            , \$this->encoder->encode('foo', 'csv'));
    }

    public function testEncodeNestedArrays()
    {
        \$value = ['foo' => 'hello', 'bar' => [
            ['id' => 'yo', 1 => 'wesh'],
            ['baz' => 'Halo', 'foo' => 'olá'],
        ]];

        \$this->assertEquals(<<<'CSV'
foo,bar.0.id,bar.0.1,bar.1.baz,bar.1.foo
hello,yo,wesh,Halo,olá

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomSettings()
    {
        \$this->doTestEncodeCustomSettings();
    }

    public function testLegacyEncodeCustomSettings()
    {
        \$this->doTestEncodeCustomSettings(true);
    }

    private function doTestEncodeCustomSettings(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(';', \"'\", '|', '-');
        } else {
            \$this->encoder = new CsvEncoder([
                CsvEncoder::DELIMITER_KEY => ';',
                CsvEncoder::ENCLOSURE_KEY => \"'\",
                CsvEncoder::ESCAPE_CHAR_KEY => '|',
                CsvEncoder::KEY_SEPARATOR_KEY => '-',
            ]);
        }

        \$value = ['a' => 'he\\'llo', 'c' => ['d' => 'foo']];

        \$this->assertEquals(<<<'CSV'
a;c-d
'he''llo';foo

CSV
    , \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomSettingsPassedInContext()
    {
        \$value = ['a' => 'he\\'llo', 'c' => ['d' => 'foo']];

        \$this->assertSame(<<<'CSV'
a;c-d
'he''llo';foo

CSV
        , \$this->encoder->encode(\$value, 'csv', [
            CsvEncoder::DELIMITER_KEY => ';',
            CsvEncoder::ENCLOSURE_KEY => \"'\",
            CsvEncoder::ESCAPE_CHAR_KEY => '|',
            CsvEncoder::KEY_SEPARATOR_KEY => '-',
        ]));
    }

    public function testEncodeEmptyArray()
    {
        \$this->assertEquals(\"\\n\\n\", \$this->encoder->encode([], 'csv'));
        \$this->assertEquals(\"\\n\\n\", \$this->encoder->encode([[]], 'csv'));
    }

    public function testEncodeVariableStructure()
    {
        \$value = [
            ['a' => ['foo', 'bar']],
            ['a' => [], 'b' => 'baz'],
            ['a' => ['bar', 'foo'], 'c' => 'pong'],
        ];
        \$csv = <<<CSV
a.0,a.1,c,b
foo,bar,,
,,,baz
bar,foo,pong,

CSV;

        \$this->assertEquals(\$csv, \$this->encoder->encode(\$value, 'csv'));
    }

    public function testEncodeCustomHeaders()
    {
        \$context = [
            CsvEncoder::HEADERS_KEY => [
                'b',
                'c',
            ],
        ];
        \$value = [
            ['a' => 'foo', 'b' => 'bar'],
        ];
        \$csv = <<<CSV
b,c,a
bar,,foo

CSV;

        \$this->assertEquals(\$csv, \$this->encoder->encode(\$value, 'csv', \$context));
    }

    public function testEncodeFormulas()
    {
        \$this->doTestEncodeFormulas();
    }

    public function testLegacyEncodeFormulas()
    {
        \$this->doTestEncodeFormulas(true);
    }

    private function doTestEncodeFormulas(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(',', '\"', '\\\\', '.', true);
        } else {
            \$this->encoder = new CsvEncoder([CsvEncoder::ESCAPE_FORMULAS_KEY => true]);
        }

        \$this->assertSame(<<<'CSV'
0
\"\t=2+3\"

CSV
            , \$this->encoder->encode(['=2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t-2+3\"

CSV
            , \$this->encoder->encode(['-2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t+2+3\"

CSV
            , \$this->encoder->encode(['+2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
\"\t@MyDataColumn\"

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv'));
    }

    public function testDoNotEncodeFormulas()
    {
        \$this->assertSame(<<<'CSV'
0
=2+3

CSV
            , \$this->encoder->encode(['=2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
-2+3

CSV
            , \$this->encoder->encode(['-2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
+2+3

CSV
            , \$this->encoder->encode(['+2+3'], 'csv'));

        \$this->assertSame(<<<'CSV'
0
@MyDataColumn

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv'));
    }

    public function testEncodeFormulasWithSettingsPassedInContext()
    {
        \$this->assertSame(<<<'CSV'
0
\"\t=2+3\"

CSV
            , \$this->encoder->encode(['=2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t-2+3\"

CSV
            , \$this->encoder->encode(['-2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t+2+3\"

CSV
            , \$this->encoder->encode(['+2+3'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));

        \$this->assertSame(<<<'CSV'
0
\"\t@MyDataColumn\"

CSV
            , \$this->encoder->encode(['@MyDataColumn'], 'csv', [
                CsvEncoder::ESCAPE_FORMULAS_KEY => true,
            ]));
    }

    public function testEncodeWithoutHeader()
    {
        \$this->assertSame(<<<'CSV'
a,b
c,d

CSV
            , \$this->encoder->encode([['a', 'b'], ['c', 'd']], 'csv', [
                CsvEncoder::NO_HEADERS_KEY => true,
            ]));
    }

    public function testSupportsDecoding()
    {
        \$this->assertTrue(\$this->encoder->supportsDecoding('csv'));
        \$this->assertFalse(\$this->encoder->supportsDecoding('foo'));
    }

    /**
     * @group legacy
     * @expectedDeprecation Relying on the default value (false) of the \"as_collection\" option is deprecated since 4.2. You should set it to false explicitly instead as true will be the default value in 5.0.
     */
    public function testDecodeLegacy()
    {
        \$expected = ['foo' => 'a', 'bar' => 'b'];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
CSV
        , 'csv'));
    }

    public function testDecodeAsSingle()
    {
        \$expected = ['foo' => 'a', 'bar' => 'b'];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
CSV
        , 'csv', [CsvEncoder::AS_COLLECTION_KEY => false]));
    }

    public function testDecodeCollection()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => 'b'],
            ['foo' => 'c', 'bar' => 'd'],
            ['foo' => 'f'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b
c,d
f

CSV
        , 'csv'));
    }

    public function testDecode()
    {
        \$expected = [
            ['foo' => 'a'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo
a

CSV
        , 'csv', [
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeToManyRelation()
    {
        \$expected = [
            ['foo' => 'bar', 'relations' => [['a' => 'b'], ['a' => 'b']]],
            ['foo' => 'bat', 'relations' => [['a' => 'b'], ['a' => '']]],
            ['foo' => 'bat', 'relations' => [['a' => 'b']]],
            ['foo' => 'baz', 'relations' => [['a' => 'c'], ['a' => 'c']]],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,relations.0.a,relations.1.a
bar,b,b
bat,b,
bat,b
baz,c,c
CSV
            , 'csv'));
    }

    public function testDecodeNestedArrays()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => ['baz' => ['bat' => 'b']]],
            ['foo' => 'c', 'bar' => ['baz' => ['bat' => 'd']]],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar.baz.bat
a,b
c,d
CSV
        , 'csv'));
    }

    public function testDecodeCustomSettings()
    {
        \$this->doTestDecodeCustomSettings();
    }

    public function testLegacyDecodeCustomSettings()
    {
        \$this->doTestDecodeCustomSettings(true);
    }

    private function doTestDecodeCustomSettings(bool \$legacy = false)
    {
        if (\$legacy) {
            \$this->encoder = new CsvEncoder(';', \"'\", '|', '-');
        } else {
            \$this->encoder = new CsvEncoder([
                CsvEncoder::DELIMITER_KEY => ';',
                CsvEncoder::ENCLOSURE_KEY => \"'\",
                CsvEncoder::ESCAPE_CHAR_KEY => '|',
                CsvEncoder::KEY_SEPARATOR_KEY => '-',
            ]);
        }

        \$expected = [['a' => 'hell\\'o', 'bar' => ['baz' => 'b']]];
        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
a;bar-baz
'hell''o';b;c
CSV
        , 'csv', [
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeCustomSettingsPassedInContext()
    {
        \$expected = [['a' => 'hell\\'o', 'bar' => ['baz' => 'b']]];
        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
a;bar-baz
'hell''o';b;c
CSV
        , 'csv', [
            CsvEncoder::DELIMITER_KEY => ';',
            CsvEncoder::ENCLOSURE_KEY => \"'\",
            CsvEncoder::ESCAPE_CHAR_KEY => '|',
            CsvEncoder::KEY_SEPARATOR_KEY => '-',
            CsvEncoder::AS_COLLECTION_KEY => true, // Can be removed in 5.0
        ]));
    }

    public function testDecodeMalformedCollection()
    {
        \$expected = [
            ['foo' => 'a', 'bar' => 'b'],
            ['foo' => 'c', 'bar' => 'd'],
            ['foo' => 'f'],
        ];

        \$this->assertEquals(\$expected, \$this->encoder->decode(<<<'CSV'
foo,bar
a,b,e
c,d,g,h
f

CSV
            , 'csv'));
    }

    public function testDecodeEmptyArray()
    {
        \$this->assertEquals([], \$this->encoder->decode('', 'csv'));
    }

    public function testDecodeWithoutHeader()
    {
        \$this->assertEquals([['a', 'b'], ['c', 'd']], \$this->encoder->decode(<<<'CSV'
a,b
c,d

CSV
        , 'csv', [
            CsvEncoder::NO_HEADERS_KEY => true,
        ]));
    }
}
", "vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Encoder/CsvEncoderTest.php");
    }
}
