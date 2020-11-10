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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php */
class __TwigTemplate_b2ed404020c8beba0d998965969cc415069510c6f66593599b34a9b94ae884e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToStringTransformer;

class DateTimeToStringTransformerTest extends TestCase
{
    public function dataProvider()
    {
        \$data = [
            ['Y-m-d H:i:s', '2010-02-03 16:05:06', '2010-02-03 16:05:06 UTC'],
            ['Y-m-d H:i:00', '2010-02-03 16:05:00', '2010-02-03 16:05:00 UTC'],
            ['Y-m-d H:i', '2010-02-03 16:05', '2010-02-03 16:05:00 UTC'],
            ['Y-m-d H', '2010-02-03 16', '2010-02-03 16:00:00 UTC'],
            ['Y-m-d', '2010-02-03', '2010-02-03 00:00:00 UTC'],
            ['Y-m', '2010-12', '2010-12-01 00:00:00 UTC'],
            ['Y', '2010', '2010-01-01 00:00:00 UTC'],
            ['d-m-Y', '03-02-2010', '2010-02-03 00:00:00 UTC'],
            ['H:i:s', '16:05:06', '1970-01-01 16:05:06 UTC'],
            ['H:i:00', '16:05:00', '1970-01-01 16:05:00 UTC'],
            ['H:i', '16:05', '1970-01-01 16:05:00 UTC'],
            ['H', '16', '1970-01-01 16:00:00 UTC'],
            ['Y-z', '2010-33', '2010-02-03 00:00:00 UTC'],

            // different day representations
            ['Y-m-j', '2010-02-3', '2010-02-03 00:00:00 UTC'],
            ['z', '33', '1970-02-03 00:00:00 UTC'],

            // not bijective
            // this will not work as PHP will use actual date to replace missing info
            // and after change of date will lookup for closest Wednesday
            // i.e. value: 2010-02, PHP value: 2010-02-(today i.e. 20), parsed date: 2010-02-24
            //['Y-m-D', '2010-02-Wed', '2010-02-03 00:00:00 UTC'],
            //['Y-m-l', '2010-02-Wednesday', '2010-02-03 00:00:00 UTC'],

            // different month representations
            ['Y-n-d', '2010-2-03', '2010-02-03 00:00:00 UTC'],
            ['Y-M-d', '2010-Feb-03', '2010-02-03 00:00:00 UTC'],
            ['Y-F-d', '2010-February-03', '2010-02-03 00:00:00 UTC'],

            // different year representations
            ['y-m-d', '10-02-03', '2010-02-03 00:00:00 UTC'],

            // different time representations
            ['G:i:s', '16:05:06', '1970-01-01 16:05:06 UTC'],
            ['g:i:s a', '4:05:06 pm', '1970-01-01 16:05:06 UTC'],
            ['h:i:s a', '04:05:06 pm', '1970-01-01 16:05:06 UTC'],

            // seconds since Unix
            ['U', '1265213106', '2010-02-03 16:05:06 UTC'],

            ['Y-z', '2010-33', '2010-02-03 00:00:00 UTC'],
        ];

        return \$data;
    }

    /**
     * @dataProvider dataProvider
     */
    public function testTransform(\$format, \$output, \$input)
    {
        \$transformer = new DateTimeToStringTransformer('UTC', 'UTC', \$format);

        \$input = new \\DateTime(\$input);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToStringTransformer();

        \$this->assertSame('', \$transformer->transform(null));
    }

    public function testTransformWithDifferentTimezones()
    {
        \$transformer = new DateTimeToStringTransformer('Asia/Hong_Kong', 'America/New_York', 'Y-m-d H:i:s');

        \$input = new \\DateTime('2010-02-03 12:05:06 America/New_York');
        \$output = \$input->format('Y-m-d H:i:s');
        \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToStringTransformer('Asia/Hong_Kong', 'America/New_York', 'Y-m-d H:i:s');

        \$input = new \\DateTimeImmutable('2010-02-03 12:05:06 America/New_York');
        \$output = \$input->format('Y-m-d H:i:s');
        \$input = \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformExpectsDateTime()
    {
        \$transformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('1234');
    }

    /**
     * @dataProvider dataProvider
     */
    public function testReverseTransform(\$format, \$input, \$output)
    {
        \$reverseTransformer = new DateTimeToStringTransformer('UTC', 'UTC', \$format);

        \$output = new \\DateTime(\$output);

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmpty()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->assertNull(\$reverseTransformer->reverseTransform(''));
    }

    public function testReverseTransformWithDifferentTimezones()
    {
        \$reverseTransformer = new DateTimeToStringTransformer('America/New_York', 'Asia/Hong_Kong', 'Y-m-d H:i:s');

        \$output = new \\DateTime('2010-02-03 16:05:06 Asia/Hong_Kong');
        \$input = \$output->format('Y-m-d H:i:s');
        \$output->setTimezone(new \\DateTimeZone('America/New_York'));

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsString()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform(1234);
    }

    public function testReverseTransformExpectsValidDateString()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-2010-2010');
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-04-31');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToStringTransformer;

class DateTimeToStringTransformerTest extends TestCase
{
    public function dataProvider()
    {
        \$data = [
            ['Y-m-d H:i:s', '2010-02-03 16:05:06', '2010-02-03 16:05:06 UTC'],
            ['Y-m-d H:i:00', '2010-02-03 16:05:00', '2010-02-03 16:05:00 UTC'],
            ['Y-m-d H:i', '2010-02-03 16:05', '2010-02-03 16:05:00 UTC'],
            ['Y-m-d H', '2010-02-03 16', '2010-02-03 16:00:00 UTC'],
            ['Y-m-d', '2010-02-03', '2010-02-03 00:00:00 UTC'],
            ['Y-m', '2010-12', '2010-12-01 00:00:00 UTC'],
            ['Y', '2010', '2010-01-01 00:00:00 UTC'],
            ['d-m-Y', '03-02-2010', '2010-02-03 00:00:00 UTC'],
            ['H:i:s', '16:05:06', '1970-01-01 16:05:06 UTC'],
            ['H:i:00', '16:05:00', '1970-01-01 16:05:00 UTC'],
            ['H:i', '16:05', '1970-01-01 16:05:00 UTC'],
            ['H', '16', '1970-01-01 16:00:00 UTC'],
            ['Y-z', '2010-33', '2010-02-03 00:00:00 UTC'],

            // different day representations
            ['Y-m-j', '2010-02-3', '2010-02-03 00:00:00 UTC'],
            ['z', '33', '1970-02-03 00:00:00 UTC'],

            // not bijective
            // this will not work as PHP will use actual date to replace missing info
            // and after change of date will lookup for closest Wednesday
            // i.e. value: 2010-02, PHP value: 2010-02-(today i.e. 20), parsed date: 2010-02-24
            //['Y-m-D', '2010-02-Wed', '2010-02-03 00:00:00 UTC'],
            //['Y-m-l', '2010-02-Wednesday', '2010-02-03 00:00:00 UTC'],

            // different month representations
            ['Y-n-d', '2010-2-03', '2010-02-03 00:00:00 UTC'],
            ['Y-M-d', '2010-Feb-03', '2010-02-03 00:00:00 UTC'],
            ['Y-F-d', '2010-February-03', '2010-02-03 00:00:00 UTC'],

            // different year representations
            ['y-m-d', '10-02-03', '2010-02-03 00:00:00 UTC'],

            // different time representations
            ['G:i:s', '16:05:06', '1970-01-01 16:05:06 UTC'],
            ['g:i:s a', '4:05:06 pm', '1970-01-01 16:05:06 UTC'],
            ['h:i:s a', '04:05:06 pm', '1970-01-01 16:05:06 UTC'],

            // seconds since Unix
            ['U', '1265213106', '2010-02-03 16:05:06 UTC'],

            ['Y-z', '2010-33', '2010-02-03 00:00:00 UTC'],
        ];

        return \$data;
    }

    /**
     * @dataProvider dataProvider
     */
    public function testTransform(\$format, \$output, \$input)
    {
        \$transformer = new DateTimeToStringTransformer('UTC', 'UTC', \$format);

        \$input = new \\DateTime(\$input);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToStringTransformer();

        \$this->assertSame('', \$transformer->transform(null));
    }

    public function testTransformWithDifferentTimezones()
    {
        \$transformer = new DateTimeToStringTransformer('Asia/Hong_Kong', 'America/New_York', 'Y-m-d H:i:s');

        \$input = new \\DateTime('2010-02-03 12:05:06 America/New_York');
        \$output = \$input->format('Y-m-d H:i:s');
        \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToStringTransformer('Asia/Hong_Kong', 'America/New_York', 'Y-m-d H:i:s');

        \$input = new \\DateTimeImmutable('2010-02-03 12:05:06 America/New_York');
        \$output = \$input->format('Y-m-d H:i:s');
        \$input = \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformExpectsDateTime()
    {
        \$transformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('1234');
    }

    /**
     * @dataProvider dataProvider
     */
    public function testReverseTransform(\$format, \$input, \$output)
    {
        \$reverseTransformer = new DateTimeToStringTransformer('UTC', 'UTC', \$format);

        \$output = new \\DateTime(\$output);

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmpty()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->assertNull(\$reverseTransformer->reverseTransform(''));
    }

    public function testReverseTransformWithDifferentTimezones()
    {
        \$reverseTransformer = new DateTimeToStringTransformer('America/New_York', 'Asia/Hong_Kong', 'Y-m-d H:i:s');

        \$output = new \\DateTime('2010-02-03 16:05:06 Asia/Hong_Kong');
        \$input = \$output->format('Y-m-d H:i:s');
        \$output->setTimezone(new \\DateTimeZone('America/New_York'));

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsString()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform(1234);
    }

    public function testReverseTransformExpectsValidDateString()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-2010-2010');
    }

    public function testReverseTransformWithNonExistingDate()
    {
        \$reverseTransformer = new DateTimeToStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-04-31');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToStringTransformerTest.php");
    }
}
