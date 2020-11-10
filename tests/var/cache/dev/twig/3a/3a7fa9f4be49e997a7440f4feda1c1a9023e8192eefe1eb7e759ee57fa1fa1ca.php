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

/* vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php */
class __TwigTemplate_edf2a9df7980ac3085bf1532361b2a41b80c8e89fc0dbd8d2dd406fa9a6301d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php"));

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
use Symfony\\Component\\Serializer\\Encoder\\JsonEncode;
use Symfony\\Component\\Serializer\\Encoder\\JsonEncoder;

class JsonEncodeTest extends TestCase
{
    private \$encode;

    protected function setUp(): void
    {
        \$this->encode = new JsonEncode();
    }

    public function testSupportsEncoding()
    {
        \$this->assertTrue(\$this->encode->supportsEncoding(JsonEncoder::FORMAT));
        \$this->assertFalse(\$this->encode->supportsEncoding('foobar'));
    }

    /**
     * @dataProvider encodeProvider
     */
    public function testEncode(\$toEncode, \$expected, \$context)
    {
        \$this->assertEquals(
            \$expected,
            \$this->encode->encode(\$toEncode, JsonEncoder::FORMAT, \$context)
        );
    }

    public function encodeProvider()
    {
        return [
            [[], '[]', []],
            [[], '{}', ['json_encode_options' => JSON_FORCE_OBJECT]],
        ];
    }

    public function testEncodeWithError()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException');
        \$this->encode->encode(\"\\xB1\\x31\", JsonEncoder::FORMAT);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php";
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
use Symfony\\Component\\Serializer\\Encoder\\JsonEncode;
use Symfony\\Component\\Serializer\\Encoder\\JsonEncoder;

class JsonEncodeTest extends TestCase
{
    private \$encode;

    protected function setUp(): void
    {
        \$this->encode = new JsonEncode();
    }

    public function testSupportsEncoding()
    {
        \$this->assertTrue(\$this->encode->supportsEncoding(JsonEncoder::FORMAT));
        \$this->assertFalse(\$this->encode->supportsEncoding('foobar'));
    }

    /**
     * @dataProvider encodeProvider
     */
    public function testEncode(\$toEncode, \$expected, \$context)
    {
        \$this->assertEquals(
            \$expected,
            \$this->encode->encode(\$toEncode, JsonEncoder::FORMAT, \$context)
        );
    }

    public function encodeProvider()
    {
        return [
            [[], '[]', []],
            [[], '{}', ['json_encode_options' => JSON_FORCE_OBJECT]],
        ];
    }

    public function testEncodeWithError()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException');
        \$this->encode->encode(\"\\xB1\\x31\", JsonEncoder::FORMAT);
    }
}
", "vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Encoder/JsonEncodeTest.php");
    }
}
