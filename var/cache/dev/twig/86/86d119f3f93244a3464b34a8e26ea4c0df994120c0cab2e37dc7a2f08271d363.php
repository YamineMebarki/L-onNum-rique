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

/* vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php */
class __TwigTemplate_9d828e7c404befb4207af135a51746d1fd0bc6d7c4840efd548778e7f95ea8f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php"));

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
use Symfony\\Component\\Serializer\\Encoder\\ChainDecoder;

class ChainDecoderTest extends TestCase
{
    const FORMAT_1 = 'format1';
    const FORMAT_2 = 'format2';
    const FORMAT_3 = 'format3';

    private \$chainDecoder;
    private \$decoder1;
    private \$decoder2;

    protected function setUp(): void
    {
        \$this->decoder1 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\DecoderInterface')
            ->getMock();

        \$this->decoder1
            ->method('supportsDecoding')
            ->willReturnMap([
                [self::FORMAT_1, [], true],
                [self::FORMAT_2, [], false],
                [self::FORMAT_3, [], false],
                [self::FORMAT_3, ['foo' => 'bar'], true],
            ]);

        \$this->decoder2 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\DecoderInterface')
            ->getMock();

        \$this->decoder2
            ->method('supportsDecoding')
            ->willReturnMap([
                [self::FORMAT_1, [], false],
                [self::FORMAT_2, [], true],
                [self::FORMAT_3, [], false],
            ]);

        \$this->chainDecoder = new ChainDecoder([\$this->decoder1, \$this->decoder2]);
    }

    public function testSupportsDecoding()
    {
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_1));
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_2));
        \$this->assertFalse(\$this->chainDecoder->supportsDecoding(self::FORMAT_3));
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_3, ['foo' => 'bar']));
    }

    public function testDecode()
    {
        \$this->decoder1->expects(\$this->never())->method('decode');
        \$this->decoder2->expects(\$this->once())->method('decode');

        \$this->chainDecoder->decode('string_to_decode', self::FORMAT_2);
    }

    public function testDecodeUnsupportedFormat()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\RuntimeException');
        \$this->chainDecoder->decode('string_to_decode', self::FORMAT_3);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php";
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
use Symfony\\Component\\Serializer\\Encoder\\ChainDecoder;

class ChainDecoderTest extends TestCase
{
    const FORMAT_1 = 'format1';
    const FORMAT_2 = 'format2';
    const FORMAT_3 = 'format3';

    private \$chainDecoder;
    private \$decoder1;
    private \$decoder2;

    protected function setUp(): void
    {
        \$this->decoder1 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\DecoderInterface')
            ->getMock();

        \$this->decoder1
            ->method('supportsDecoding')
            ->willReturnMap([
                [self::FORMAT_1, [], true],
                [self::FORMAT_2, [], false],
                [self::FORMAT_3, [], false],
                [self::FORMAT_3, ['foo' => 'bar'], true],
            ]);

        \$this->decoder2 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\DecoderInterface')
            ->getMock();

        \$this->decoder2
            ->method('supportsDecoding')
            ->willReturnMap([
                [self::FORMAT_1, [], false],
                [self::FORMAT_2, [], true],
                [self::FORMAT_3, [], false],
            ]);

        \$this->chainDecoder = new ChainDecoder([\$this->decoder1, \$this->decoder2]);
    }

    public function testSupportsDecoding()
    {
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_1));
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_2));
        \$this->assertFalse(\$this->chainDecoder->supportsDecoding(self::FORMAT_3));
        \$this->assertTrue(\$this->chainDecoder->supportsDecoding(self::FORMAT_3, ['foo' => 'bar']));
    }

    public function testDecode()
    {
        \$this->decoder1->expects(\$this->never())->method('decode');
        \$this->decoder2->expects(\$this->once())->method('decode');

        \$this->chainDecoder->decode('string_to_decode', self::FORMAT_2);
    }

    public function testDecodeUnsupportedFormat()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\RuntimeException');
        \$this->chainDecoder->decode('string_to_decode', self::FORMAT_3);
    }
}
", "vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Encoder/ChainDecoderTest.php");
    }
}
