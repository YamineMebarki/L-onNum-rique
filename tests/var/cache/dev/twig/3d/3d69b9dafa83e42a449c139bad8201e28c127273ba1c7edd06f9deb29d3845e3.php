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

/* vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php */
class __TwigTemplate_a4a1728ff22d2cd0bca37af589b3b0c3cd34956ed1636d2f07ea2783571c321c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessor;

class EnvVarProcessorTest extends TestCase
{
    const TEST_CONST = 'test';

    /**
     * @dataProvider validStrings
     */
    public function testGetEnvString(\$value, \$processed)
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('env(foo)', \$value);
        \$container->compile();

        \$processor = new EnvVarProcessor(\$container);

        \$result = \$processor->getEnv('string', 'foo', function () {
            \$this->fail('Should not be called');
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validStrings()
    {
        return [
            ['hello', 'hello'],
            ['true', 'true'],
            ['false', 'false'],
            ['null', 'null'],
            ['1', '1'],
            ['0', '0'],
            ['1.1', '1.1'],
            ['1e1', '1e1'],
        ];
    }

    /**
     * @dataProvider validBools
     */
    public function testGetEnvBool(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('bool', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validBools()
    {
        return [
            ['true', true],
            ['false', false],
            ['null', false],
            ['1', true],
            ['0', false],
            ['1.1', true],
            ['1e1', true],
        ];
    }

    /**
     * @dataProvider validInts
     */
    public function testGetEnvInt(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('int', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validInts()
    {
        return [
            ['1', 1],
            ['1.1', 1],
            ['1e1', 10],
        ];
    }

    /**
     * @dataProvider invalidInts
     */
    public function testGetEnvIntInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Non-numeric env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('int', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidInts()
    {
        return [
            ['foo'],
            ['true'],
            ['null'],
        ];
    }

    /**
     * @dataProvider validFloats
     */
    public function testGetEnvFloat(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('float', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validFloats()
    {
        return [
            ['1', 1.0],
            ['1.1', 1.1],
            ['1e1', 10.0],
        ];
    }

    /**
     * @dataProvider invalidFloats
     */
    public function testGetEnvFloatInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Non-numeric env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('float', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidFloats()
    {
        return [
            ['foo'],
            ['true'],
            ['null'],
        ];
    }

    /**
     * @dataProvider validConsts
     */
    public function testGetEnvConst(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('const', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validConsts()
    {
        return [
            ['Symfony\\Component\\DependencyInjection\\Tests\\EnvVarProcessorTest::TEST_CONST', self::TEST_CONST],
            ['E_ERROR', E_ERROR],
        ];
    }

    /**
     * @dataProvider invalidConsts
     */
    public function testGetEnvConstInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('undefined constant');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('const', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidConsts()
    {
        return [
            ['Symfony\\Component\\DependencyInjection\\Tests\\EnvVarProcessorTest::UNDEFINED_CONST'],
            ['UNDEFINED_CONST'],
        ];
    }

    public function testGetEnvBase64()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('base64', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return base64_encode('hello');
        });

        \$this->assertSame('hello', \$result);
    }

    public function testGetEnvTrim()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('trim', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return \" hello\\n\";
        });

        \$this->assertSame('hello', \$result);
    }

    /**
     * @dataProvider validJson
     */
    public function testGetEnvJson(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('json', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validJson()
    {
        return [
            ['[1]', [1]],
            ['{\"key\": \"value\"}', ['key' => 'value']],
            [null, null],
        ];
    }

    public function testGetEnvInvalidJson()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Syntax error');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('json', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return 'invalid_json';
        });
    }

    /**
     * @dataProvider otherJsonValues
     */
    public function testGetEnvJsonOther(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid JSON env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('json', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return json_encode(\$value);
        });
    }

    public function otherJsonValues()
    {
        return [
            [1],
            [1.1],
            [true],
            [false],
            ['foo'],
        ];
    }

    public function testGetEnvUnknown()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Unsupported env var prefix');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('unknown', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return 'foo';
        });
    }

    public function testGetEnvKeyInvalidKey()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid env \"key:foo\": a key specifier should be provided.');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'foo', function (\$name) {
            \$this->fail('Should not get here');
        });
    }

    /**
     * @dataProvider noArrayValues
     */
    public function testGetEnvKeyNoArrayResult(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Resolved value of \"foo\" did not result in an array value.');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function noArrayValues()
    {
        return [
            [null],
            ['string'],
            [1],
            [true],
        ];
    }

    /**
     * @dataProvider invalidArrayValues
     */
    public function testGetEnvKeyArrayKeyNotFound(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException');
        \$this->expectExceptionMessage('Key \"index\" not found in');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidArrayValues()
    {
        return [
            [[]],
            [['index2' => 'value']],
            [['index', 'index2']],
        ];
    }

    /**
     * @dataProvider arrayValues
     */
    public function testGetEnvKey(\$value)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$this->assertSame(\$value['index'], \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        }));
    }

    public function arrayValues()
    {
        return [
            [['index' => 'password']],
            [['index' => 'true']],
            [['index' => false]],
            [['index' => '1']],
            [['index' => 1]],
            [['index' => '1.1']],
            [['index' => 1.1]],
            [['index' => []]],
            [['index' => ['val1', 'val2']]],
        ];
    }

    public function testGetEnvKeyChained()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$this->assertSame('password', \$processor->getEnv('key', 'index:file:foo', function (\$name) {
            \$this->assertSame('file:foo', \$name);

            return [
                'index' => 'password',
            ];
        }));
    }

    /**
     * @dataProvider validNullables
     */
    public function testGetEnvNullable(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());
        \$result = \$processor->getEnv('default', ':foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
        \$this->assertSame(\$processed, \$result);
    }

    public function validNullables()
    {
        return [
            ['hello', 'hello'],
            ['', null],
            ['null', 'null'],
            ['Null', 'Null'],
            ['NULL', 'NULL'],
         ];
    }

    public function testRequireMissingFile()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException');
        \$this->expectExceptionMessage('missing-file');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('require', '/missing-file', function (\$name) {
            return \$name;
        });
    }

    public function testRequireFile()
    {
        \$path = __DIR__.'/Fixtures/php/return_foo_string.php';

        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('require', \$path, function (\$name) use (\$path) {
            \$this->assertSame(\$path, \$name);

            return \$path;
        });

        \$this->assertEquals('foo', \$result);
    }

    /**
     * @dataProvider validCsv
     */
    public function testGetEnvCsv(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('csv', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validCsv()
    {
        \$complex = <<<'CSV'
,\"\"\"\",\"foo\"\"\",\"\\\"\"\",\\,foo\\
CSV;

        return [
            ['', [null]],
            [',', ['', '']],
            ['1', ['1']],
            ['1,2,\" 3 \"', ['1', '2', ' 3 ']],
            ['\\\\,\\\\\\\\', ['\\\\', '\\\\\\\\']],
            [\$complex, \\PHP_VERSION_ID >= 70400 ? ['', '\"', 'foo\"', '\\\\\"', '\\\\', 'foo\\\\'] : ['', '\"', 'foo\"', '\\\\\"\",\\\\,foo\\\\']],
            [null, null],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessor;

class EnvVarProcessorTest extends TestCase
{
    const TEST_CONST = 'test';

    /**
     * @dataProvider validStrings
     */
    public function testGetEnvString(\$value, \$processed)
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('env(foo)', \$value);
        \$container->compile();

        \$processor = new EnvVarProcessor(\$container);

        \$result = \$processor->getEnv('string', 'foo', function () {
            \$this->fail('Should not be called');
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validStrings()
    {
        return [
            ['hello', 'hello'],
            ['true', 'true'],
            ['false', 'false'],
            ['null', 'null'],
            ['1', '1'],
            ['0', '0'],
            ['1.1', '1.1'],
            ['1e1', '1e1'],
        ];
    }

    /**
     * @dataProvider validBools
     */
    public function testGetEnvBool(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('bool', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validBools()
    {
        return [
            ['true', true],
            ['false', false],
            ['null', false],
            ['1', true],
            ['0', false],
            ['1.1', true],
            ['1e1', true],
        ];
    }

    /**
     * @dataProvider validInts
     */
    public function testGetEnvInt(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('int', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validInts()
    {
        return [
            ['1', 1],
            ['1.1', 1],
            ['1e1', 10],
        ];
    }

    /**
     * @dataProvider invalidInts
     */
    public function testGetEnvIntInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Non-numeric env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('int', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidInts()
    {
        return [
            ['foo'],
            ['true'],
            ['null'],
        ];
    }

    /**
     * @dataProvider validFloats
     */
    public function testGetEnvFloat(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('float', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validFloats()
    {
        return [
            ['1', 1.0],
            ['1.1', 1.1],
            ['1e1', 10.0],
        ];
    }

    /**
     * @dataProvider invalidFloats
     */
    public function testGetEnvFloatInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Non-numeric env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('float', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidFloats()
    {
        return [
            ['foo'],
            ['true'],
            ['null'],
        ];
    }

    /**
     * @dataProvider validConsts
     */
    public function testGetEnvConst(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('const', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validConsts()
    {
        return [
            ['Symfony\\Component\\DependencyInjection\\Tests\\EnvVarProcessorTest::TEST_CONST', self::TEST_CONST],
            ['E_ERROR', E_ERROR],
        ];
    }

    /**
     * @dataProvider invalidConsts
     */
    public function testGetEnvConstInvalid(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('undefined constant');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('const', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidConsts()
    {
        return [
            ['Symfony\\Component\\DependencyInjection\\Tests\\EnvVarProcessorTest::UNDEFINED_CONST'],
            ['UNDEFINED_CONST'],
        ];
    }

    public function testGetEnvBase64()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('base64', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return base64_encode('hello');
        });

        \$this->assertSame('hello', \$result);
    }

    public function testGetEnvTrim()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('trim', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return \" hello\\n\";
        });

        \$this->assertSame('hello', \$result);
    }

    /**
     * @dataProvider validJson
     */
    public function testGetEnvJson(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('json', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validJson()
    {
        return [
            ['[1]', [1]],
            ['{\"key\": \"value\"}', ['key' => 'value']],
            [null, null],
        ];
    }

    public function testGetEnvInvalidJson()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Syntax error');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('json', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return 'invalid_json';
        });
    }

    /**
     * @dataProvider otherJsonValues
     */
    public function testGetEnvJsonOther(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid JSON env var');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('json', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return json_encode(\$value);
        });
    }

    public function otherJsonValues()
    {
        return [
            [1],
            [1.1],
            [true],
            [false],
            ['foo'],
        ];
    }

    public function testGetEnvUnknown()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Unsupported env var prefix');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('unknown', 'foo', function (\$name) {
            \$this->assertSame('foo', \$name);

            return 'foo';
        });
    }

    public function testGetEnvKeyInvalidKey()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid env \"key:foo\": a key specifier should be provided.');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'foo', function (\$name) {
            \$this->fail('Should not get here');
        });
    }

    /**
     * @dataProvider noArrayValues
     */
    public function testGetEnvKeyNoArrayResult(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Resolved value of \"foo\" did not result in an array value.');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function noArrayValues()
    {
        return [
            [null],
            ['string'],
            [1],
            [true],
        ];
    }

    /**
     * @dataProvider invalidArrayValues
     */
    public function testGetEnvKeyArrayKeyNotFound(\$value)
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException');
        \$this->expectExceptionMessage('Key \"index\" not found in');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
    }

    public function invalidArrayValues()
    {
        return [
            [[]],
            [['index2' => 'value']],
            [['index', 'index2']],
        ];
    }

    /**
     * @dataProvider arrayValues
     */
    public function testGetEnvKey(\$value)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$this->assertSame(\$value['index'], \$processor->getEnv('key', 'index:foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        }));
    }

    public function arrayValues()
    {
        return [
            [['index' => 'password']],
            [['index' => 'true']],
            [['index' => false]],
            [['index' => '1']],
            [['index' => 1]],
            [['index' => '1.1']],
            [['index' => 1.1]],
            [['index' => []]],
            [['index' => ['val1', 'val2']]],
        ];
    }

    public function testGetEnvKeyChained()
    {
        \$processor = new EnvVarProcessor(new Container());

        \$this->assertSame('password', \$processor->getEnv('key', 'index:file:foo', function (\$name) {
            \$this->assertSame('file:foo', \$name);

            return [
                'index' => 'password',
            ];
        }));
    }

    /**
     * @dataProvider validNullables
     */
    public function testGetEnvNullable(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());
        \$result = \$processor->getEnv('default', ':foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });
        \$this->assertSame(\$processed, \$result);
    }

    public function validNullables()
    {
        return [
            ['hello', 'hello'],
            ['', null],
            ['null', 'null'],
            ['Null', 'Null'],
            ['NULL', 'NULL'],
         ];
    }

    public function testRequireMissingFile()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException');
        \$this->expectExceptionMessage('missing-file');
        \$processor = new EnvVarProcessor(new Container());

        \$processor->getEnv('require', '/missing-file', function (\$name) {
            return \$name;
        });
    }

    public function testRequireFile()
    {
        \$path = __DIR__.'/Fixtures/php/return_foo_string.php';

        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('require', \$path, function (\$name) use (\$path) {
            \$this->assertSame(\$path, \$name);

            return \$path;
        });

        \$this->assertEquals('foo', \$result);
    }

    /**
     * @dataProvider validCsv
     */
    public function testGetEnvCsv(\$value, \$processed)
    {
        \$processor = new EnvVarProcessor(new Container());

        \$result = \$processor->getEnv('csv', 'foo', function (\$name) use (\$value) {
            \$this->assertSame('foo', \$name);

            return \$value;
        });

        \$this->assertSame(\$processed, \$result);
    }

    public function validCsv()
    {
        \$complex = <<<'CSV'
,\"\"\"\",\"foo\"\"\",\"\\\"\"\",\\,foo\\
CSV;

        return [
            ['', [null]],
            [',', ['', '']],
            ['1', ['1']],
            ['1,2,\" 3 \"', ['1', '2', ' 3 ']],
            ['\\\\,\\\\\\\\', ['\\\\', '\\\\\\\\']],
            [\$complex, \\PHP_VERSION_ID >= 70400 ? ['', '\"', 'foo\"', '\\\\\"', '\\\\', 'foo\\\\'] : ['', '\"', 'foo\"', '\\\\\"\",\\\\,foo\\\\']],
            [null, null],
        ];
    }
}
", "vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/EnvVarProcessorTest.php");
    }
}
