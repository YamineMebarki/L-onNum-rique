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

/* vendor/symfony/config/Tests/Util/XmlUtilsTest.php */
class __TwigTemplate_600d30df15bd55c58d85a36b1dbf4b00cbd272429686391f8c4818b979844162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Util/XmlUtilsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Util/XmlUtilsTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Util\\XmlUtils;

class XmlUtilsTest extends TestCase
{
    public function testLoadFile()
    {
        \$fixtures = __DIR__.'/../Fixtures/Util/';

        try {
            XmlUtils::loadFile(\$fixtures.'invalid.xml');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('ERROR 77', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'document_type.xml');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('Document types are not allowed', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'invalid_schema.xml', \$fixtures.'schema.xsd');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('ERROR 1845', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'invalid_schema.xml', 'invalid_callback_or_file');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('XSD file or callable', \$e->getMessage());
        }

        \$mock = \$this->getMockBuilder(__NAMESPACE__.'\\Validator')->getMock();
        \$mock->expects(\$this->exactly(2))->method('validate')->will(\$this->onConsecutiveCalls(false, true));

        try {
            XmlUtils::loadFile(\$fixtures.'valid.xml', [\$mock, 'validate']);
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertRegExp('/The XML file \".+\" is not valid\\./', \$e->getMessage());
        }

        \$this->assertInstanceOf('DOMDocument', XmlUtils::loadFile(\$fixtures.'valid.xml', [\$mock, 'validate']));
        \$this->assertSame([], libxml_get_errors());
    }

    public function testParseWithInvalidValidatorCallable()
    {
        \$this->expectException('Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException');
        \$this->expectExceptionMessage('The XML is not valid');
        \$fixtures = __DIR__.'/../Fixtures/Util/';

        \$mock = \$this->getMockBuilder(__NAMESPACE__.'\\Validator')->getMock();
        \$mock->expects(\$this->once())->method('validate')->willReturn(false);

        XmlUtils::parse(file_get_contents(\$fixtures.'valid.xml'), [\$mock, 'validate']);
    }

    public function testLoadFileWithInternalErrorsEnabled()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$this->assertSame([], libxml_get_errors());
        \$this->assertInstanceOf('DOMDocument', XmlUtils::loadFile(__DIR__.'/../Fixtures/Util/invalid_schema.xml'));
        \$this->assertSame([], libxml_get_errors());

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }

    /**
     * @dataProvider getDataForConvertDomToArray
     */
    public function testConvertDomToArray(\$expected, \$xml, \$root = false, \$checkPrefix = true)
    {
        \$dom = new \\DOMDocument();
        \$dom->loadXML(\$root ? \$xml : '<root>'.\$xml.'</root>');

        \$this->assertSame(\$expected, XmlUtils::convertDomElementToArray(\$dom->documentElement, \$checkPrefix));
    }

    public function getDataForConvertDomToArray()
    {
        return [
            [null, ''],
            ['bar', 'bar'],
            [['bar' => 'foobar'], '<foo bar=\"foobar\" />', true],
            [['foo' => null], '<foo />'],
            [['foo' => 'bar'], '<foo>bar</foo>'],
            [['foo' => ['foo' => 'bar']], '<foo foo=\"bar\"/>'],
            [['foo' => ['foo' => 0]], '<foo><foo>0</foo></foo>'],
            [['foo' => ['foo' => 'bar']], '<foo><foo>bar</foo></foo>'],
            [['foo' => ['foo' => 'bar', 'value' => 'text']], '<foo foo=\"bar\">text</foo>'],
            [['foo' => ['attr' => 'bar', 'foo' => 'text']], '<foo attr=\"bar\"><foo>text</foo></foo>'],
            [['foo' => ['bar', 'text']], '<foo>bar</foo><foo>text</foo>'],
            [['foo' => [['foo' => 'bar'], ['foo' => 'text']]], '<foo foo=\"bar\"/><foo foo=\"text\" />'],
            [['foo' => ['foo' => ['bar', 'text']]], '<foo foo=\"bar\"><foo>text</foo></foo>'],
            [['foo' => 'bar'], '<foo><!-- Comment -->bar</foo>'],
            [['foo' => 'text'], '<foo xmlns:h=\"http://www.example.org/bar\" h:bar=\"bar\">text</foo>'],
            [['foo' => ['bar' => 'bar', 'value' => 'text']], '<foo xmlns:h=\"http://www.example.org/bar\" h:bar=\"bar\">text</foo>', false, false],
            [['attr' => 1, 'b' => 'hello'], '<foo:a xmlns:foo=\"http://www.example.org/foo\" xmlns:h=\"http://www.example.org/bar\" attr=\"1\" h:bar=\"bar\"><foo:b>hello</foo:b><h:c>2</h:c></foo:a>', true],
        ];
    }

    /**
     * @dataProvider getDataForPhpize
     */
    public function testPhpize(\$expected, \$value)
    {
        \$this->assertSame(\$expected, XmlUtils::phpize(\$value));
    }

    public function getDataForPhpize()
    {
        return [
            ['', ''],
            [null, 'null'],
            [true, 'true'],
            [false, 'false'],
            [null, 'Null'],
            [true, 'True'],
            [false, 'False'],
            [0, '0'],
            [1, '1'],
            [-1, '-1'],
            [0777, '0777'],
            [255, '0xFF'],
            [100.0, '1e2'],
            [-120.0, '-1.2E2'],
            [-10100.1, '-10100.1'],
            ['-10,100.1', '-10,100.1'],
            ['1234 5678 9101 1121 3141', '1234 5678 9101 1121 3141'],
            ['1,2,3,4', '1,2,3,4'],
            ['11,22,33,44', '11,22,33,44'],
            ['11,222,333,4', '11,222,333,4'],
            ['1,222,333,444', '1,222,333,444'],
            ['11,222,333,444', '11,222,333,444'],
            ['111,222,333,444', '111,222,333,444'],
            ['1111,2222,3333,4444,5555', '1111,2222,3333,4444,5555'],
            ['foo', 'foo'],
            [6, '0b0110'],
        ];
    }

    public function testLoadEmptyXmlFile()
    {
        \$file = __DIR__.'/../Fixtures/foo.xml';

        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage(sprintf('File %s does not contain valid XML, it is empty.', \$file));

        XmlUtils::loadFile(\$file);
    }

    // test for issue https://github.com/symfony/symfony/issues/9731
    public function testLoadWrongEmptyXMLWithErrorHandler()
    {
        \$originalDisableEntities = libxml_disable_entity_loader(false);
        \$errorReporting = error_reporting(-1);

        set_error_handler(function (\$errno, \$errstr) {
            throw new \\Exception(\$errstr, \$errno);
        });

        \$file = __DIR__.'/../Fixtures/foo.xml';
        try {
            try {
                XmlUtils::loadFile(\$file);
                \$this->fail('An exception should have been raised');
            } catch (\\InvalidArgumentException \$e) {
                \$this->assertEquals(sprintf('File %s does not contain valid XML, it is empty.', \$file), \$e->getMessage());
            }
        } finally {
            restore_error_handler();
            error_reporting(\$errorReporting);
        }

        \$disableEntities = libxml_disable_entity_loader(true);
        libxml_disable_entity_loader(\$disableEntities);

        libxml_disable_entity_loader(\$originalDisableEntities);

        \$this->assertFalse(\$disableEntities);

        // should not throw an exception
        XmlUtils::loadFile(__DIR__.'/../Fixtures/Util/valid.xml', __DIR__.'/../Fixtures/Util/schema.xsd');
    }
}

interface Validator
{
    public function validate();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Util/XmlUtilsTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Util\\XmlUtils;

class XmlUtilsTest extends TestCase
{
    public function testLoadFile()
    {
        \$fixtures = __DIR__.'/../Fixtures/Util/';

        try {
            XmlUtils::loadFile(\$fixtures.'invalid.xml');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('ERROR 77', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'document_type.xml');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('Document types are not allowed', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'invalid_schema.xml', \$fixtures.'schema.xsd');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('ERROR 1845', \$e->getMessage());
        }

        try {
            XmlUtils::loadFile(\$fixtures.'invalid_schema.xml', 'invalid_callback_or_file');
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertStringContainsString('XSD file or callable', \$e->getMessage());
        }

        \$mock = \$this->getMockBuilder(__NAMESPACE__.'\\Validator')->getMock();
        \$mock->expects(\$this->exactly(2))->method('validate')->will(\$this->onConsecutiveCalls(false, true));

        try {
            XmlUtils::loadFile(\$fixtures.'valid.xml', [\$mock, 'validate']);
            \$this->fail();
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertRegExp('/The XML file \".+\" is not valid\\./', \$e->getMessage());
        }

        \$this->assertInstanceOf('DOMDocument', XmlUtils::loadFile(\$fixtures.'valid.xml', [\$mock, 'validate']));
        \$this->assertSame([], libxml_get_errors());
    }

    public function testParseWithInvalidValidatorCallable()
    {
        \$this->expectException('Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException');
        \$this->expectExceptionMessage('The XML is not valid');
        \$fixtures = __DIR__.'/../Fixtures/Util/';

        \$mock = \$this->getMockBuilder(__NAMESPACE__.'\\Validator')->getMock();
        \$mock->expects(\$this->once())->method('validate')->willReturn(false);

        XmlUtils::parse(file_get_contents(\$fixtures.'valid.xml'), [\$mock, 'validate']);
    }

    public function testLoadFileWithInternalErrorsEnabled()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$this->assertSame([], libxml_get_errors());
        \$this->assertInstanceOf('DOMDocument', XmlUtils::loadFile(__DIR__.'/../Fixtures/Util/invalid_schema.xml'));
        \$this->assertSame([], libxml_get_errors());

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }

    /**
     * @dataProvider getDataForConvertDomToArray
     */
    public function testConvertDomToArray(\$expected, \$xml, \$root = false, \$checkPrefix = true)
    {
        \$dom = new \\DOMDocument();
        \$dom->loadXML(\$root ? \$xml : '<root>'.\$xml.'</root>');

        \$this->assertSame(\$expected, XmlUtils::convertDomElementToArray(\$dom->documentElement, \$checkPrefix));
    }

    public function getDataForConvertDomToArray()
    {
        return [
            [null, ''],
            ['bar', 'bar'],
            [['bar' => 'foobar'], '<foo bar=\"foobar\" />', true],
            [['foo' => null], '<foo />'],
            [['foo' => 'bar'], '<foo>bar</foo>'],
            [['foo' => ['foo' => 'bar']], '<foo foo=\"bar\"/>'],
            [['foo' => ['foo' => 0]], '<foo><foo>0</foo></foo>'],
            [['foo' => ['foo' => 'bar']], '<foo><foo>bar</foo></foo>'],
            [['foo' => ['foo' => 'bar', 'value' => 'text']], '<foo foo=\"bar\">text</foo>'],
            [['foo' => ['attr' => 'bar', 'foo' => 'text']], '<foo attr=\"bar\"><foo>text</foo></foo>'],
            [['foo' => ['bar', 'text']], '<foo>bar</foo><foo>text</foo>'],
            [['foo' => [['foo' => 'bar'], ['foo' => 'text']]], '<foo foo=\"bar\"/><foo foo=\"text\" />'],
            [['foo' => ['foo' => ['bar', 'text']]], '<foo foo=\"bar\"><foo>text</foo></foo>'],
            [['foo' => 'bar'], '<foo><!-- Comment -->bar</foo>'],
            [['foo' => 'text'], '<foo xmlns:h=\"http://www.example.org/bar\" h:bar=\"bar\">text</foo>'],
            [['foo' => ['bar' => 'bar', 'value' => 'text']], '<foo xmlns:h=\"http://www.example.org/bar\" h:bar=\"bar\">text</foo>', false, false],
            [['attr' => 1, 'b' => 'hello'], '<foo:a xmlns:foo=\"http://www.example.org/foo\" xmlns:h=\"http://www.example.org/bar\" attr=\"1\" h:bar=\"bar\"><foo:b>hello</foo:b><h:c>2</h:c></foo:a>', true],
        ];
    }

    /**
     * @dataProvider getDataForPhpize
     */
    public function testPhpize(\$expected, \$value)
    {
        \$this->assertSame(\$expected, XmlUtils::phpize(\$value));
    }

    public function getDataForPhpize()
    {
        return [
            ['', ''],
            [null, 'null'],
            [true, 'true'],
            [false, 'false'],
            [null, 'Null'],
            [true, 'True'],
            [false, 'False'],
            [0, '0'],
            [1, '1'],
            [-1, '-1'],
            [0777, '0777'],
            [255, '0xFF'],
            [100.0, '1e2'],
            [-120.0, '-1.2E2'],
            [-10100.1, '-10100.1'],
            ['-10,100.1', '-10,100.1'],
            ['1234 5678 9101 1121 3141', '1234 5678 9101 1121 3141'],
            ['1,2,3,4', '1,2,3,4'],
            ['11,22,33,44', '11,22,33,44'],
            ['11,222,333,4', '11,222,333,4'],
            ['1,222,333,444', '1,222,333,444'],
            ['11,222,333,444', '11,222,333,444'],
            ['111,222,333,444', '111,222,333,444'],
            ['1111,2222,3333,4444,5555', '1111,2222,3333,4444,5555'],
            ['foo', 'foo'],
            [6, '0b0110'],
        ];
    }

    public function testLoadEmptyXmlFile()
    {
        \$file = __DIR__.'/../Fixtures/foo.xml';

        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage(sprintf('File %s does not contain valid XML, it is empty.', \$file));

        XmlUtils::loadFile(\$file);
    }

    // test for issue https://github.com/symfony/symfony/issues/9731
    public function testLoadWrongEmptyXMLWithErrorHandler()
    {
        \$originalDisableEntities = libxml_disable_entity_loader(false);
        \$errorReporting = error_reporting(-1);

        set_error_handler(function (\$errno, \$errstr) {
            throw new \\Exception(\$errstr, \$errno);
        });

        \$file = __DIR__.'/../Fixtures/foo.xml';
        try {
            try {
                XmlUtils::loadFile(\$file);
                \$this->fail('An exception should have been raised');
            } catch (\\InvalidArgumentException \$e) {
                \$this->assertEquals(sprintf('File %s does not contain valid XML, it is empty.', \$file), \$e->getMessage());
            }
        } finally {
            restore_error_handler();
            error_reporting(\$errorReporting);
        }

        \$disableEntities = libxml_disable_entity_loader(true);
        libxml_disable_entity_loader(\$disableEntities);

        libxml_disable_entity_loader(\$originalDisableEntities);

        \$this->assertFalse(\$disableEntities);

        // should not throw an exception
        XmlUtils::loadFile(__DIR__.'/../Fixtures/Util/valid.xml', __DIR__.'/../Fixtures/Util/schema.xsd');
    }
}

interface Validator
{
    public function validate();
}
", "vendor/symfony/config/Tests/Util/XmlUtilsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Util/XmlUtilsTest.php");
    }
}
