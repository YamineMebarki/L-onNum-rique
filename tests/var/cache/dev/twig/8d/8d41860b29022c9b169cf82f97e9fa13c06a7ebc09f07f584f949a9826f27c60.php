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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php */
class __TwigTemplate_25ebe549db4d7fed5482cf66a674e86c94c4e172471ae69ce8c43ad64ec5cb1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToHtml5LocalDateTimeTransformer;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer\\Traits\\DateTimeEqualsTrait;

class DateTimeToHtml5LocalDateTimeTransformerTest extends TestCase
{
    use DateTimeEqualsTrait;

    public function transformProvider()
    {
        return [
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06'],
        ];
    }

    public function reverseTransformProvider()
    {
        return [
            // format without seconds, as appears in some browsers
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06'],
            ['UTC', 'UTC', '2010-02-03 04:05:00 UTC', '2010-02-03T04:05'],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:00 America/New_York', '2010-02-03T17:05'],
            ['Europe/Amsterdam', 'Europe/Amsterdam', '2013-08-21 10:30:00 Europe/Amsterdam', '2013-08-21T10:30:00'],
            ['UTC', 'UTC', '2018-09-15T10:00:00Z', '2018-09-15T10:00:00Z'],
            ['Europe/Berlin', 'Europe/Berlin', '2018-09-15T10:00:00+02:00', '2018-09-15T10:00:00+02:00'],
            ['Europe/Berlin', 'Europe/Berlin', '2018-09-15T10:00:00+0200', '2018-09-15T10:00:00+0200'],
            ['UTC', 'UTC', '2018-10-03T10:00:00.000Z', '2018-10-03T10:00:00.000Z'],
        ];
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTime(\$from) : null));
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransformDateTimeImmutable(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTimeImmutable(\$from) : null));
    }

    public function testTransformRequiresValidDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer();
        \$transformer->transform('2010-01-01');
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$toTz, \$fromTz, \$to, \$from)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$toTz, \$fromTz);

        if (null !== \$to) {
            \$this->assertDateTimeEquals(new \\DateTime(\$to), \$transformer->reverseTransform(\$from));
        } else {
            \$this->assertNull(\$transformer->reverseTransform(\$from));
        }
    }

    public function testReverseTransformRequiresString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer();
        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-04-31T04:05');
    }

    public function testReverseTransformExpectsValidDateString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-2010-2010');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToHtml5LocalDateTimeTransformer;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer\\Traits\\DateTimeEqualsTrait;

class DateTimeToHtml5LocalDateTimeTransformerTest extends TestCase
{
    use DateTimeEqualsTrait;

    public function transformProvider()
    {
        return [
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06'],
        ];
    }

    public function reverseTransformProvider()
    {
        return [
            // format without seconds, as appears in some browsers
            ['UTC', 'UTC', '2010-02-03 04:05:06 UTC', '2010-02-03T04:05:06'],
            ['UTC', 'UTC', null, ''],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:06 America/New_York', '2010-02-03T17:05:06'],
            ['America/New_York', 'Asia/Hong_Kong', null, ''],
            ['UTC', 'Asia/Hong_Kong', '2010-02-03 04:05:06 UTC', '2010-02-03T12:05:06'],
            ['America/New_York', 'UTC', '2010-02-03 04:05:06 America/New_York', '2010-02-03T09:05:06'],
            ['UTC', 'UTC', '2010-02-03 04:05:00 UTC', '2010-02-03T04:05'],
            ['America/New_York', 'Asia/Hong_Kong', '2010-02-03 04:05:00 America/New_York', '2010-02-03T17:05'],
            ['Europe/Amsterdam', 'Europe/Amsterdam', '2013-08-21 10:30:00 Europe/Amsterdam', '2013-08-21T10:30:00'],
            ['UTC', 'UTC', '2018-09-15T10:00:00Z', '2018-09-15T10:00:00Z'],
            ['Europe/Berlin', 'Europe/Berlin', '2018-09-15T10:00:00+02:00', '2018-09-15T10:00:00+02:00'],
            ['Europe/Berlin', 'Europe/Berlin', '2018-09-15T10:00:00+0200', '2018-09-15T10:00:00+0200'],
            ['UTC', 'UTC', '2018-10-03T10:00:00.000Z', '2018-10-03T10:00:00.000Z'],
        ];
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTime(\$from) : null));
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransformDateTimeImmutable(\$fromTz, \$toTz, \$from, \$to)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$fromTz, \$toTz);

        \$this->assertSame(\$to, \$transformer->transform(null !== \$from ? new \\DateTimeImmutable(\$from) : null));
    }

    public function testTransformRequiresValidDateTime()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer();
        \$transformer->transform('2010-01-01');
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$toTz, \$fromTz, \$to, \$from)
    {
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer(\$toTz, \$fromTz);

        if (null !== \$to) {
            \$this->assertDateTimeEquals(new \\DateTime(\$to), \$transformer->reverseTransform(\$from));
        } else {
            \$this->assertNull(\$transformer->reverseTransform(\$from));
        }
    }

    public function testReverseTransformRequiresString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer();
        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-04-31T04:05');
    }

    public function testReverseTransformExpectsValidDateString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new DateTimeToHtml5LocalDateTimeTransformer('UTC', 'UTC');

        \$transformer->reverseTransform('2010-2010-2010');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToHtml5LocalDateTimeTransformerTest.php");
    }
}
