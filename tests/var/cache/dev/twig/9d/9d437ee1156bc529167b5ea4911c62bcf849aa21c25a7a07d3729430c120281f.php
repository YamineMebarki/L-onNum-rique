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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php */
class __TwigTemplate_5ea05efa68b6bdcb98cd4d939d345b5d74f39f98540da39c02ae148658ef941e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeZoneToStringTransformer;

class DateTimeZoneToStringTransformerTest extends TestCase
{
    public function testSingle()
    {
        \$transformer = new DateTimeZoneToStringTransformer();

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame('Europe/Amsterdam', \$transformer->transform(new \\DateTimeZone('Europe/Amsterdam')));
        \$this->assertEquals(new \\DateTimeZone('Europe/Amsterdam'), \$transformer->reverseTransform('Europe/Amsterdam'));
    }

    public function testMultiple()
    {
        \$transformer = new DateTimeZoneToStringTransformer(true);

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame(['Europe/Amsterdam'], \$transformer->transform([new \\DateTimeZone('Europe/Amsterdam')]));
        \$this->assertEquals([new \\DateTimeZone('Europe/Amsterdam')], \$transformer->reverseTransform(['Europe/Amsterdam']));
    }

    public function testInvalidTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new DateTimeZoneToStringTransformer())->transform(1);
    }

    public function testUnknownTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new DateTimeZoneToStringTransformer(true))->reverseTransform(['Foo/Bar']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeZoneToStringTransformer;

class DateTimeZoneToStringTransformerTest extends TestCase
{
    public function testSingle()
    {
        \$transformer = new DateTimeZoneToStringTransformer();

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame('Europe/Amsterdam', \$transformer->transform(new \\DateTimeZone('Europe/Amsterdam')));
        \$this->assertEquals(new \\DateTimeZone('Europe/Amsterdam'), \$transformer->reverseTransform('Europe/Amsterdam'));
    }

    public function testMultiple()
    {
        \$transformer = new DateTimeZoneToStringTransformer(true);

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame(['Europe/Amsterdam'], \$transformer->transform([new \\DateTimeZone('Europe/Amsterdam')]));
        \$this->assertEquals([new \\DateTimeZone('Europe/Amsterdam')], \$transformer->reverseTransform(['Europe/Amsterdam']));
    }

    public function testInvalidTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new DateTimeZoneToStringTransformer())->transform(1);
    }

    public function testUnknownTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new DateTimeZoneToStringTransformer(true))->reverseTransform(['Foo/Bar']);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeZoneToStringTransformerTest.php");
    }
}
