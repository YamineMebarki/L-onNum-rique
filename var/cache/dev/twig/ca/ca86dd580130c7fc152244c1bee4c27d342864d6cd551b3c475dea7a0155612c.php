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

/* vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php */
class __TwigTemplate_9fc831464a88a66203a2e059115a6ca79f14108a7807e4066fa2e993886dffe6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\JsonSerializableDummy;

/**
 * @author Fred Cox <mcfedr@gmail.com>
 */
class JsonSerializableNormalizerTest extends TestCase
{
    /**
     * @var JsonSerializableNormalizer
     */
    private \$normalizer;

    /**
     * @var MockObject|SerializerInterface
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->createNormalizer();
    }

    private function createNormalizer(array \$defaultContext = [])
    {
        \$this->serializer = \$this->getMockBuilder(JsonSerializerNormalizer::class)->getMock();
        \$this->normalizer = new JsonSerializableNormalizer(null, null, \$defaultContext);
        \$this->normalizer->setSerializer(\$this->serializer);
    }

    public function testSupportNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new JsonSerializableDummy()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$this->serializer
            ->expects(\$this->once())
            ->method('normalize')
            ->willReturnCallback(function (\$data) {
                \$this->assertSame(['foo' => 'a', 'bar' => 'b', 'baz' => 'c'], array_diff_key(\$data, ['qux' => '']));

                return 'string_object';
            })
        ;

        \$this->assertEquals('string_object', \$this->normalizer->normalize(new JsonSerializableDummy()));
    }

    public function testCircularNormalize()
    {
        \$this->doTestCircularNormalize();
    }

    public function testLegacyCircularNormalize()
    {
        \$this->doTestCircularNormalize(true);
    }

    private function doTestCircularNormalize(bool \$legacy = false)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\CircularReferenceException');
        \$legacy ? \$this->normalizer->setCircularReferenceLimit(1) : \$this->createNormalizer([JsonSerializableNormalizer::CIRCULAR_REFERENCE_LIMIT => 1]);

        \$this->serializer
            ->expects(\$this->once())
            ->method('normalize')
            ->willReturnCallback(function (\$data, \$format, \$context) {
                \$this->normalizer->normalize(\$data['qux'], \$format, \$context);

                return 'string_object';
            })
        ;

        \$this->assertEquals('string_object', \$this->normalizer->normalize(new JsonSerializableDummy()));
    }

    public function testInvalidDataThrowException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The object must implement \"JsonSerializable\".');
        \$this->normalizer->normalize(new \\stdClass());
    }
}

abstract class JsonSerializerNormalizer implements SerializerInterface, NormalizerInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\JsonSerializableDummy;

/**
 * @author Fred Cox <mcfedr@gmail.com>
 */
class JsonSerializableNormalizerTest extends TestCase
{
    /**
     * @var JsonSerializableNormalizer
     */
    private \$normalizer;

    /**
     * @var MockObject|SerializerInterface
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->createNormalizer();
    }

    private function createNormalizer(array \$defaultContext = [])
    {
        \$this->serializer = \$this->getMockBuilder(JsonSerializerNormalizer::class)->getMock();
        \$this->normalizer = new JsonSerializableNormalizer(null, null, \$defaultContext);
        \$this->normalizer->setSerializer(\$this->serializer);
    }

    public function testSupportNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new JsonSerializableDummy()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$this->serializer
            ->expects(\$this->once())
            ->method('normalize')
            ->willReturnCallback(function (\$data) {
                \$this->assertSame(['foo' => 'a', 'bar' => 'b', 'baz' => 'c'], array_diff_key(\$data, ['qux' => '']));

                return 'string_object';
            })
        ;

        \$this->assertEquals('string_object', \$this->normalizer->normalize(new JsonSerializableDummy()));
    }

    public function testCircularNormalize()
    {
        \$this->doTestCircularNormalize();
    }

    public function testLegacyCircularNormalize()
    {
        \$this->doTestCircularNormalize(true);
    }

    private function doTestCircularNormalize(bool \$legacy = false)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\CircularReferenceException');
        \$legacy ? \$this->normalizer->setCircularReferenceLimit(1) : \$this->createNormalizer([JsonSerializableNormalizer::CIRCULAR_REFERENCE_LIMIT => 1]);

        \$this->serializer
            ->expects(\$this->once())
            ->method('normalize')
            ->willReturnCallback(function (\$data, \$format, \$context) {
                \$this->normalizer->normalize(\$data['qux'], \$format, \$context);

                return 'string_object';
            })
        ;

        \$this->assertEquals('string_object', \$this->normalizer->normalize(new JsonSerializableDummy()));
    }

    public function testInvalidDataThrowException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The object must implement \"JsonSerializable\".');
        \$this->normalizer->normalize(new \\stdClass());
    }
}

abstract class JsonSerializerNormalizer implements SerializerInterface, NormalizerInterface
{
}
", "vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/JsonSerializableNormalizerTest.php");
    }
}
