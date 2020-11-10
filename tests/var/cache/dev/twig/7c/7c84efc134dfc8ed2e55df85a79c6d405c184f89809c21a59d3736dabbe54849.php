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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php */
class __TwigTemplate_f4841c0050c93664c4c417353725db3b341f96a4cdfed9167bdd71097df67989 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToRfc3339Transformer;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer\\Traits\\DateTimeEqualsTrait;

class DateTimeToRfc3339TransformerTest extends TestCase
{
    use DateTimeEqualsTrait;

    protected \$dateTime;
    protected \$dateTimeWithoutSeconds;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dateTime = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$this->dateTimeWithoutSeconds = new \\DateTime('2010-02-03 04:05:00 UTC');
    }

    protected function tearDown(): void
    {
        \$this->dateTime = null;
        \$this->dateTimeWithoutSeconds = null;
    }

    public function allProvider()
    {
        return [
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06Z'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06+08:00'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06+08:00'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06Z'],
        ];
    }

    public function transformProvider()
    {
        return \$this->allProvider();
    }

    public function reverseTransformProvider()
    {
        return array_merge(\$this->allProvider(), [
            // format without seconds, as appears in some browsers
            ['UTC', 'UTC', '2010-02-03 04:05:00 UTC', '2010-02-03T04:05Z'],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:00 America/New_York', '2010-02-03T17:05+08:00'],
            ['Europe/Amsterdam', 'Europe/Amsterdam', '2013-08-21 10:30:00 Europe/Amsterdam', '2013-08-21T08:30:00Z'],
            ['UTC', 'UTC', '2018-10-03T10:00:00.000Z', '2018-10-03T10:00:00.000Z'],
        ]);
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTime(\$from) : null));
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransformDateTimeImmutable(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTimeImmutable(\$from) : null));
    }

    public function testTransformRequiresValidDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer();
        \$transformer->transform('2010-01-01');
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$toTz, \$fromTz, \$to, \$from)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$toTz, \$fromTz);

        if (null !== \$to) {
            \$this->assertDateTimeEquals(new \\DateTime(\$to), \$transformer->reverseTransform(\$from));
        } else {
            \$this->assertNull(\$transformer->reverseTransform(\$from));
        }
    }

    public function testReverseTransformRequiresString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer();
        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-04-31T04:05Z');
    }

    /**
     * @dataProvider invalidDateStringProvider
     */
    public function testReverseTransformExpectsValidDateString(\$date)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer('UTC', 'UTC');

        \$transformer->reverseTransform(\$date);
    }

    public function invalidDateStringProvider()
    {
        return [
            'invalid month' => ['2010-2010-01'],
            'invalid day' => ['2010-10-2010'],
            'no date' => ['x'],
            'cookie format' => ['Saturday, 01-May-2010 04:05:00 Z'],
            'RFC 822 format' => ['Sat, 01 May 10 04:05:00 +0000'],
            'RSS format' => ['Sat, 01 May 2010 04:05:00 +0000'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToRfc3339Transformer;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer\\Traits\\DateTimeEqualsTrait;

class DateTimeToRfc3339TransformerTest extends TestCase
{
    use DateTimeEqualsTrait;

    protected \$dateTime;
    protected \$dateTimeWithoutSeconds;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dateTime = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$this->dateTimeWithoutSeconds = new \\DateTime('2010-02-03 04:05:00 UTC');
    }

    protected function tearDown(): void
    {
        \$this->dateTime = null;
        \$this->dateTimeWithoutSeconds = null;
    }

    public function allProvider()
    {
        return [
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06Z'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06+08:00'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06+08:00'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06Z'],
        ];
    }

    public function transformProvider()
    {
        return \$this->allProvider();
    }

    public function reverseTransformProvider()
    {
        return array_merge(\$this->allProvider(), [
            // format without seconds, as appears in some browsers
            ['UTC', 'UTC', '2010-02-03 04:05:00 UTC', '2010-02-03T04:05Z'],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:00 America/New_York', '2010-02-03T17:05+08:00'],
            ['Europe/Amsterdam', 'Europe/Amsterdam', '2013-08-21 10:30:00 Europe/Amsterdam', '2013-08-21T08:30:00Z'],
            ['UTC', 'UTC', '2018-10-03T10:00:00.000Z', '2018-10-03T10:00:00.000Z'],
        ]);
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTime(\$from) : null));
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransformDateTimeImmutable(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTimeImmutable(\$from) : null));
    }

    public function testTransformRequiresValidDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer();
        \$transformer->transform('2010-01-01');
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$toTz, \$fromTz, \$to, \$from)
    {
        \$transformer = new DateTimeToRfc3339Transformer(\$toTz, \$fromTz);

        if (null !== \$to) {
            \$this->assertDateTimeEquals(new \\DateTime(\$to), \$transformer->reverseTransform(\$from));
        } else {
            \$this->assertNull(\$transformer->reverseTransform(\$from));
        }
    }

    public function testReverseTransformRequiresString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer();
        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-04-31T04:05Z');
    }

    /**
     * @dataProvider invalidDateStringProvider
     */
    public function testReverseTransformExpectsValidDateString(\$date)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToRfc3339Transformer('UTC', 'UTC');

        \$transformer->reverseTransform(\$date);
    }

    public function invalidDateStringProvider()
    {
        return [
            'invalid month' => ['2010-2010-01'],
            'invalid day' => ['2010-10-2010'],
            'no date' => ['x'],
            'cookie format' => ['Saturday, 01-May-2010 04:05:00 Z'],
            'RFC 822 format' => ['Sat, 01 May 10 04:05:00 +0000'],
            'RSS format' => ['Sat, 01 May 2010 04:05:00 +0000'],
        ];
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToRfc3339TransformerTest.php");
    }
}
