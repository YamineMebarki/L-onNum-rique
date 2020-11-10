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

/* vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php */
class __TwigTemplate_ec01287b8901c267f3b15e3f81754ec914b90c997ae04cf3801daec8c9f74b4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php"));

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
use Symfony\\Component\\Serializer\\Encoder\\YamlEncoder;
use Symfony\\Component\\Yaml\\Dumper;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlEncoderTest extends TestCase
{
    public function testEncode()
    {
        \$encoder = new YamlEncoder();

        \$this->assertEquals('foo', \$encoder->encode('foo', 'yaml'));
        \$this->assertEquals('{ foo: 1 }', \$encoder->encode(['foo' => 1], 'yaml'));
    }

    public function testSupportsEncoding()
    {
        \$encoder = new YamlEncoder();

        \$this->assertTrue(\$encoder->supportsEncoding('yaml'));
        \$this->assertTrue(\$encoder->supportsEncoding('yml'));
        \$this->assertFalse(\$encoder->supportsEncoding('json'));
    }

    public function testDecode()
    {
        \$encoder = new YamlEncoder();

        \$this->assertEquals('foo', \$encoder->decode('foo', 'yaml'));
        \$this->assertEquals(['foo' => 1], \$encoder->decode('{ foo: 1 }', 'yaml'));
    }

    public function testSupportsDecoding()
    {
        \$encoder = new YamlEncoder();

        \$this->assertTrue(\$encoder->supportsDecoding('yaml'));
        \$this->assertTrue(\$encoder->supportsDecoding('yml'));
        \$this->assertFalse(\$encoder->supportsDecoding('json'));
    }

    public function testContext()
    {
        \$encoder = new YamlEncoder(new Dumper(), new Parser(), ['yaml_inline' => 1, 'yaml_indent' => 4, 'yaml_flags' => Yaml::DUMP_OBJECT | Yaml::PARSE_OBJECT]);

        \$obj = new \\stdClass();
        \$obj->bar = 2;

        \$legacyTag = \"    foo: !php/object:O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}\\n\";
        \$spacedTag = \"    foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\\n\";
        \$this->assertThat(\$encoder->encode(['foo' => \$obj], 'yaml'), \$this->logicalOr(\$this->equalTo(\$legacyTag), \$this->equalTo(\$spacedTag)));
        \$this->assertEquals('  { foo: null }', \$encoder->encode(['foo' => \$obj], 'yaml', ['yaml_inline' => 0, 'yaml_indent' => 2, 'yaml_flags' => 0]));
        \$this->assertEquals(['foo' => \$obj], \$encoder->decode(\"foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\", 'yaml'));
        \$this->assertEquals(['foo' => null], \$encoder->decode(\"foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\", 'yaml', ['yaml_flags' => 0]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php";
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
use Symfony\\Component\\Serializer\\Encoder\\YamlEncoder;
use Symfony\\Component\\Yaml\\Dumper;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlEncoderTest extends TestCase
{
    public function testEncode()
    {
        \$encoder = new YamlEncoder();

        \$this->assertEquals('foo', \$encoder->encode('foo', 'yaml'));
        \$this->assertEquals('{ foo: 1 }', \$encoder->encode(['foo' => 1], 'yaml'));
    }

    public function testSupportsEncoding()
    {
        \$encoder = new YamlEncoder();

        \$this->assertTrue(\$encoder->supportsEncoding('yaml'));
        \$this->assertTrue(\$encoder->supportsEncoding('yml'));
        \$this->assertFalse(\$encoder->supportsEncoding('json'));
    }

    public function testDecode()
    {
        \$encoder = new YamlEncoder();

        \$this->assertEquals('foo', \$encoder->decode('foo', 'yaml'));
        \$this->assertEquals(['foo' => 1], \$encoder->decode('{ foo: 1 }', 'yaml'));
    }

    public function testSupportsDecoding()
    {
        \$encoder = new YamlEncoder();

        \$this->assertTrue(\$encoder->supportsDecoding('yaml'));
        \$this->assertTrue(\$encoder->supportsDecoding('yml'));
        \$this->assertFalse(\$encoder->supportsDecoding('json'));
    }

    public function testContext()
    {
        \$encoder = new YamlEncoder(new Dumper(), new Parser(), ['yaml_inline' => 1, 'yaml_indent' => 4, 'yaml_flags' => Yaml::DUMP_OBJECT | Yaml::PARSE_OBJECT]);

        \$obj = new \\stdClass();
        \$obj->bar = 2;

        \$legacyTag = \"    foo: !php/object:O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}\\n\";
        \$spacedTag = \"    foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\\n\";
        \$this->assertThat(\$encoder->encode(['foo' => \$obj], 'yaml'), \$this->logicalOr(\$this->equalTo(\$legacyTag), \$this->equalTo(\$spacedTag)));
        \$this->assertEquals('  { foo: null }', \$encoder->encode(['foo' => \$obj], 'yaml', ['yaml_inline' => 0, 'yaml_indent' => 2, 'yaml_flags' => 0]));
        \$this->assertEquals(['foo' => \$obj], \$encoder->decode(\"foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\", 'yaml'));
        \$this->assertEquals(['foo' => null], \$encoder->decode(\"foo: !php/object 'O:8:\\\"stdClass\\\":1:{s:3:\\\"bar\\\";i:2;}'\", 'yaml', ['yaml_flags' => 0]));
    }
}
", "vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Encoder/YamlEncoderTest.php");
    }
}
