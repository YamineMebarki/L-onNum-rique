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

/* vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php */
class __TwigTemplate_6713119fdd7a7bd9a4267d67818427d7aecde07ff55e3823d82939d5dbd59465 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php"));

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
use Symfony\\Component\\Serializer\\Encoder\\ChainEncoder;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\NormalizationAwareInterface;

class ChainEncoderTest extends TestCase
{
    const FORMAT_1 = 'format1';
    const FORMAT_2 = 'format2';
    const FORMAT_3 = 'format3';

    private \$chainEncoder;
    private \$encoder1;
    private \$encoder2;

    protected function setUp(): void
    {
        \$this->encoder1 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\EncoderInterface')
            ->getMock();

        \$this->encoder1
            ->method('supportsEncoding')
            ->willReturnMap([
                [self::FORMAT_1, [], true],
                [self::FORMAT_2, [], false],
                [self::FORMAT_3, [], false],
                [self::FORMAT_3, ['foo' => 'bar'], true],
            ]);

        \$this->encoder2 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\EncoderInterface')
            ->getMock();

        \$this->encoder2
            ->method('supportsEncoding')
            ->willReturnMap([
                [self::FORMAT_1, [], false],
                [self::FORMAT_2, [], true],
                [self::FORMAT_3, [], false],
            ]);

        \$this->chainEncoder = new ChainEncoder([\$this->encoder1, \$this->encoder2]);
    }

    public function testSupportsEncoding()
    {
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_1));
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_2));
        \$this->assertFalse(\$this->chainEncoder->supportsEncoding(self::FORMAT_3));
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_3, ['foo' => 'bar']));
    }

    public function testEncode()
    {
        \$this->encoder1->expects(\$this->never())->method('encode');
        \$this->encoder2->expects(\$this->once())->method('encode');

        \$this->chainEncoder->encode(['foo' => 123], self::FORMAT_2);
    }

    public function testEncodeUnsupportedFormat()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\RuntimeException');
        \$this->chainEncoder->encode(['foo' => 123], self::FORMAT_3);
    }

    public function testNeedsNormalizationBasic()
    {
        \$this->assertTrue(\$this->chainEncoder->needsNormalization(self::FORMAT_1));
        \$this->assertTrue(\$this->chainEncoder->needsNormalization(self::FORMAT_2));
    }

    public function testNeedsNormalizationNormalizationAware()
    {
        \$encoder = new NormalizationAwareEncoder();
        \$sut = new ChainEncoder([\$encoder]);

        \$this->assertFalse(\$sut->needsNormalization(self::FORMAT_1));
    }
}

class NormalizationAwareEncoder implements EncoderInterface, NormalizationAwareInterface
{
    public function supportsEncoding(\$format)
    {
        return true;
    }

    public function encode(\$data, \$format, array \$context = [])
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php";
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
use Symfony\\Component\\Serializer\\Encoder\\ChainEncoder;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\NormalizationAwareInterface;

class ChainEncoderTest extends TestCase
{
    const FORMAT_1 = 'format1';
    const FORMAT_2 = 'format2';
    const FORMAT_3 = 'format3';

    private \$chainEncoder;
    private \$encoder1;
    private \$encoder2;

    protected function setUp(): void
    {
        \$this->encoder1 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\EncoderInterface')
            ->getMock();

        \$this->encoder1
            ->method('supportsEncoding')
            ->willReturnMap([
                [self::FORMAT_1, [], true],
                [self::FORMAT_2, [], false],
                [self::FORMAT_3, [], false],
                [self::FORMAT_3, ['foo' => 'bar'], true],
            ]);

        \$this->encoder2 = \$this
            ->getMockBuilder('Symfony\\Component\\Serializer\\Encoder\\EncoderInterface')
            ->getMock();

        \$this->encoder2
            ->method('supportsEncoding')
            ->willReturnMap([
                [self::FORMAT_1, [], false],
                [self::FORMAT_2, [], true],
                [self::FORMAT_3, [], false],
            ]);

        \$this->chainEncoder = new ChainEncoder([\$this->encoder1, \$this->encoder2]);
    }

    public function testSupportsEncoding()
    {
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_1));
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_2));
        \$this->assertFalse(\$this->chainEncoder->supportsEncoding(self::FORMAT_3));
        \$this->assertTrue(\$this->chainEncoder->supportsEncoding(self::FORMAT_3, ['foo' => 'bar']));
    }

    public function testEncode()
    {
        \$this->encoder1->expects(\$this->never())->method('encode');
        \$this->encoder2->expects(\$this->once())->method('encode');

        \$this->chainEncoder->encode(['foo' => 123], self::FORMAT_2);
    }

    public function testEncodeUnsupportedFormat()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\RuntimeException');
        \$this->chainEncoder->encode(['foo' => 123], self::FORMAT_3);
    }

    public function testNeedsNormalizationBasic()
    {
        \$this->assertTrue(\$this->chainEncoder->needsNormalization(self::FORMAT_1));
        \$this->assertTrue(\$this->chainEncoder->needsNormalization(self::FORMAT_2));
    }

    public function testNeedsNormalizationNormalizationAware()
    {
        \$encoder = new NormalizationAwareEncoder();
        \$sut = new ChainEncoder([\$encoder]);

        \$this->assertFalse(\$sut->needsNormalization(self::FORMAT_1));
    }
}

class NormalizationAwareEncoder implements EncoderInterface, NormalizationAwareInterface
{
    public function supportsEncoding(\$format)
    {
        return true;
    }

    public function encode(\$data, \$format, array \$context = [])
    {
    }
}
", "vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Encoder/ChainEncoderTest.php");
    }
}
