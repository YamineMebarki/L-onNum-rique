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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php */
class __TwigTemplate_723ad8f00a3e2edf60b37c5e652c375989b167b81c34c7707c942d4ec2fa412c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToTimestampTransformer;

class DateTimeToTimestampTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeToTimestampTransformer('UTC', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$output = \$input->format('U');

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToTimestampTransformer();

        \$this->assertNull(\$transformer->transform(null));
    }

    public function testTransformWithDifferentTimezones()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$input = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$output = \$input->format('U');
        \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformFromDifferentTimezone()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 Asia/Hong_Kong');

        \$dateTime = clone \$input;
        \$dateTime->setTimezone(new \\DateTimeZone('UTC'));
        \$output = \$dateTime->format('U');

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');
        \$output = \$input->format('U');
        \$input = \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformExpectsDateTime()
    {
        \$transformer = new DateTimeToTimestampTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('1234');
    }

    public function testReverseTransform()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer('UTC', 'UTC');

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$input = \$output->format('U');

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmpty()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer();

        \$this->assertNull(\$reverseTransformer->reverseTransform(null));
    }

    public function testReverseTransformWithDifferentTimezones()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$output = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$input = \$output->format('U');
        \$output->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsValidTimestamp()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-2010-2010');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToTimestampTransformer;

class DateTimeToTimestampTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeToTimestampTransformer('UTC', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$output = \$input->format('U');

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeToTimestampTransformer();

        \$this->assertNull(\$transformer->transform(null));
    }

    public function testTransformWithDifferentTimezones()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$input = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$output = \$input->format('U');
        \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformFromDifferentTimezone()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'UTC');

        \$input = new \\DateTime('2010-02-03 04:05:06 Asia/Hong_Kong');

        \$dateTime = clone \$input;
        \$dateTime->setTimezone(new \\DateTimeZone('UTC'));
        \$output = \$dateTime->format('U');

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformDateTimeImmutable()
    {
        \$transformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 America/New_York');
        \$output = \$input->format('U');
        \$input = \$input->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testTransformExpectsDateTime()
    {
        \$transformer = new DateTimeToTimestampTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('1234');
    }

    public function testReverseTransform()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer('UTC', 'UTC');

        \$output = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$input = \$output->format('U');

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmpty()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer();

        \$this->assertNull(\$reverseTransformer->reverseTransform(null));
    }

    public function testReverseTransformWithDifferentTimezones()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer('Asia/Hong_Kong', 'America/New_York');

        \$output = new \\DateTime('2010-02-03 04:05:06 America/New_York');
        \$input = \$output->format('U');
        \$output->setTimezone(new \\DateTimeZone('Asia/Hong_Kong'));

        \$this->assertEquals(\$output, \$reverseTransformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsValidTimestamp()
    {
        \$reverseTransformer = new DateTimeToTimestampTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$reverseTransformer->reverseTransform('2010-2010-2010');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeToTimestampTransformerTest.php");
    }
}
