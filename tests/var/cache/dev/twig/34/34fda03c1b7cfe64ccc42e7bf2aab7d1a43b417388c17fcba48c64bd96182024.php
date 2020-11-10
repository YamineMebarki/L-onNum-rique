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

/* vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php */
class __TwigTemplate_5ac93864d373dbbc50206fd71e58fd18114f71669f15e0efa9c3e5624d6059e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\DateTimeZoneNormalizer;

/**
 * @author Jérôme Desjardins <jewome62@gmail.com>
 */
class DateTimeZoneNormalizerTest extends TestCase
{
    /**
     * @var DateTimeZoneNormalizer
     */
    private \$normalizer;

    protected function setUp(): void
    {
        \$this->normalizer = new DateTimeZoneNormalizer();
    }

    public function testSupportsNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new \\DateTimeZone('UTC')));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\DateTimeImmutable()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$this->assertEquals('UTC', \$this->normalizer->normalize(new \\DateTimeZone('UTC')));
        \$this->assertEquals('Asia/Tokyo', \$this->normalizer->normalize(new \\DateTimeZone('Asia/Tokyo')));
    }

    public function testNormalizeBadObjectTypeThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->normalizer->normalize(new \\stdClass());
    }

    public function testSupportsDenormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsDenormalization(null, \\DateTimeZone::class));
        \$this->assertFalse(\$this->normalizer->supportsDenormalization(null, \\DateTimeImmutable::class));
        \$this->assertFalse(\$this->normalizer->supportsDenormalization(null, \\stdClass::class));
    }

    public function testDenormalize()
    {
        \$this->assertEquals(new \\DateTimeZone('UTC'), \$this->normalizer->denormalize('UTC', \\DateTimeZone::class, null));
        \$this->assertEquals(new \\DateTimeZone('Asia/Tokyo'), \$this->normalizer->denormalize('Asia/Tokyo', \\DateTimeZone::class, null));
    }

    public function testDenormalizeNullTimeZoneThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException');
        \$this->normalizer->denormalize(null, \\DateTimeZone::class, null);
    }

    public function testDenormalizeBadTimeZoneThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException');
        \$this->normalizer->denormalize('Jupiter/Europa', \\DateTimeZone::class, null);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\DateTimeZoneNormalizer;

/**
 * @author Jérôme Desjardins <jewome62@gmail.com>
 */
class DateTimeZoneNormalizerTest extends TestCase
{
    /**
     * @var DateTimeZoneNormalizer
     */
    private \$normalizer;

    protected function setUp(): void
    {
        \$this->normalizer = new DateTimeZoneNormalizer();
    }

    public function testSupportsNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new \\DateTimeZone('UTC')));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\DateTimeImmutable()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$this->assertEquals('UTC', \$this->normalizer->normalize(new \\DateTimeZone('UTC')));
        \$this->assertEquals('Asia/Tokyo', \$this->normalizer->normalize(new \\DateTimeZone('Asia/Tokyo')));
    }

    public function testNormalizeBadObjectTypeThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->normalizer->normalize(new \\stdClass());
    }

    public function testSupportsDenormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsDenormalization(null, \\DateTimeZone::class));
        \$this->assertFalse(\$this->normalizer->supportsDenormalization(null, \\DateTimeImmutable::class));
        \$this->assertFalse(\$this->normalizer->supportsDenormalization(null, \\stdClass::class));
    }

    public function testDenormalize()
    {
        \$this->assertEquals(new \\DateTimeZone('UTC'), \$this->normalizer->denormalize('UTC', \\DateTimeZone::class, null));
        \$this->assertEquals(new \\DateTimeZone('Asia/Tokyo'), \$this->normalizer->denormalize('Asia/Tokyo', \\DateTimeZone::class, null));
    }

    public function testDenormalizeNullTimeZoneThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException');
        \$this->normalizer->denormalize(null, \\DateTimeZone::class, null);
    }

    public function testDenormalizeBadTimeZoneThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException');
        \$this->normalizer->denormalize('Jupiter/Europa', \\DateTimeZone::class, null);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/DateTimeZoneNormalizerTest.php");
    }
}
