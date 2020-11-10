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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php */
class __TwigTemplate_f249322b8c09be9b1a41dd9ff6bff00397e40c8f371e320913197c4878c391d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToArrayTransformer;

class DateTimeToArrayTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$output = [
            'year' => '',
            'month' => '',
            'day' => '',
            'hour' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertSame(\$output, \$transformer->transform(null));
    }

    public function testTransformEmptyWithFields()
    {
        \$transformer = new DateTimeToArrayTransformer(null, null, ['year', 'minute', 'second']);

        \$output = [
            'year' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertSame(\$output, \$transformer->transform(null));
    }

    public function testTransformWithFields()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC', ['year', 'month', 'minute', 'second']);

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '2',
            'minute' => '5',
            'second' => '6',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformWithPadding()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC', null, true);

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '02',
            'day' => '03',
            'hour' => '04',
            'minute' => '05',
            'second' => '06',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDifferentTimezones()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = new \\DateTime('2010-02-03 04:05:06 America/New_York');

        \$dateTime = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$dateTime->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));
        \$output = [
            'year' => (string) (int) \$dateTime->format('Y'),
            'month' => (string) (int) \$dateTime->format('m'),
            'day' => (string) (int) \$dateTime->format('d'),
            'hour' => (string) (int) \$dateTime->format('H'),
            'minute' => (string) (int) \$dateTime->format('i'),
            'second' => (string) (int) \$dateTime->format('s'),
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');

        \$dateTime = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');
        \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));
        \$output = [
            'year' => (string) (int) \$dateTime->format('Y'),
            'month' => (string) (int) \$dateTime->format('m'),
            'day' => (string) (int) \$dateTime->format('d'),
            'hour' => (string) (int) \$dateTime->format('H'),
            'minute' => (string) (int) \$dateTime->format('i'),
            'second' => (string) (int) \$dateTime->format('s'),
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformRequiresDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform('12345');
    }

    public function testReverseTransform()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformWithSomeZero()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '0',
            'second' => '0',
        ];

        \$output = new \\DateTime('2010-02-03 04:00:00 UTC');

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$input = [
            'year' => '',
            'month' => '',
            'day' => '',
            'hour' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertNull(\$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmptySubsetOfFields()
    {
        \$transformer = new DateTimeToArrayTransformer(null, null, ['year', 'month', 'day']);

        \$input = [
            'year' => '',
            'month' => '',
            'day' => '',
        ];

        \$this->assertNull(\$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyEmptyYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptySecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
        ]);
    }

    public function testReverseTransformNull()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$this->assertNull(\$transformer->reverseTransform(null));
    }

    public function testReverseTransformDifferentTimezones()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 Asia/Hong_Kong');
        \$output->setTimezone(new \\DateTimeZone('America/New_York'));

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformToDifferentTimezone()
    {
        \$transformer = new DateTimeToArrayTransformer('Asia/Hong_Kong', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$output->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform('12345');
    }

    public function testReverseTransformWithNegativeYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '-1',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '-1',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '-1',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '-1',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '-1',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeSecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '-1',
        ]);
    }

    public function testReverseTransformWithInvalidMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '13',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithInvalidDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => 'bazinga',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => 'bazinga',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => 'bazinga',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringSecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '',
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToArrayTransformer;

class DateTimeToArrayTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$output = [
            'year' => '',
            'month' => '',
            'day' => '',
            'hour' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertSame(\$output, \$transformer->transform(null));
    }

    public function testTransformEmptyWithFields()
    {
        \$transformer = new DateTimeToArrayTransformer(null, null, ['year', 'minute', 'second']);

        \$output = [
            'year' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertSame(\$output, \$transformer->transform(null));
    }

    public function testTransformWithFields()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC', ['year', 'month', 'minute', 'second']);

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '2',
            'minute' => '5',
            'second' => '6',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformWithPadding()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC', null, true);

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$output = [
            'year' => '2010',
            'month' => '02',
            'day' => '03',
            'hour' => '04',
            'minute' => '05',
            'second' => '06',
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDifferentTimezones()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = new \\DateTime('2010-02-03 04:05:06 America/New_York');

        \$dateTime = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$dateTime->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));
        \$output = [
            'year' => (string) (int) \$dateTime->format('Y'),
            'month' => (string) (int) \$dateTime->format('m'),
            'day' => (string) (int) \$dateTime->format('d'),
            'hour' => (string) (int) \$dateTime->format('H'),
            'minute' => (string) (int) \$dateTime->format('i'),
            'second' => (string) (int) \$dateTime->format('s'),
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');

        \$dateTime = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');
        \$dateTime = \$dateTime->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));
        \$output = [
            'year' => (string) (int) \$dateTime->format('Y'),
            'month' => (string) (int) \$dateTime->format('m'),
            'day' => (string) (int) \$dateTime->format('d'),
            'hour' => (string) (int) \$dateTime->format('H'),
            'minute' => (string) (int) \$dateTime->format('i'),
            'second' => (string) (int) \$dateTime->format('s'),
        ];

        \$this->assertSame(\$output, \$transformer->transform(\$input));
    }

    public function testTransformRequiresDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform('12345');
    }

    public function testReverseTransform()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformWithSomeZero()
    {
        \$transformer = new DateTimeToArrayTransformer('UTC', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '0',
            'second' => '0',
        ];

        \$output = new \\DateTime('2010-02-03 04:00:00 UTC');

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$input = [
            'year' => '',
            'month' => '',
            'day' => '',
            'hour' => '',
            'minute' => '',
            'second' => '',
        ];

        \$this->assertNull(\$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmptySubsetOfFields()
    {
        \$transformer = new DateTimeToArrayTransformer(null, null, ['year', 'month', 'day']);

        \$input = [
            'year' => '',
            'month' => '',
            'day' => '',
        ];

        \$this->assertNull(\$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyEmptyYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptyMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'second' => '6',
        ]);
    }

    public function testReverseTransformPartiallyEmptySecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
        ]);
    }

    public function testReverseTransformNull()
    {
        \$transformer = new DateTimeToArrayTransformer();

        \$this->assertNull(\$transformer->reverseTransform(null));
    }

    public function testReverseTransformDifferentTimezones()
    {
        \$transformer = new DateTimeToArrayTransformer('America/New_York', 'Asia/Hong_Kong');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 Asia/Hong_Kong');
        \$output->setTimezone(new \\DateTimeZone('America/New_York'));

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformToDifferentTimezone()
    {
        \$transformer = new DateTimeToArrayTransformer('Asia/Hong_Kong', 'UTC');

        \$input = [
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ];

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$output->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform('12345');
    }

    public function testReverseTransformWithNegativeYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '-1',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '-1',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '-1',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '-1',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '-1',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithNegativeSecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '-1',
        ]);
    }

    public function testReverseTransformWithInvalidMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '13',
            'day' => '3',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithInvalidDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringDay()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => 'bazinga',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringMonth()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => 'bazinga',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithStringYear()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => 'bazinga',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringHour()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '',
            'minute' => '5',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringMinute()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '',
            'second' => '6',
        ]);
    }

    public function testReverseTransformWithEmptyStringSecond()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToArrayTransformer();
        \$transformer->reverseTransform([
            'year' => '2010',
            'month' => '2',
            'day' => '31',
            'hour' => '4',
            'minute' => '5',
            'second' => '',
        ]);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToArrayTransformerTest.php");
    }
}
