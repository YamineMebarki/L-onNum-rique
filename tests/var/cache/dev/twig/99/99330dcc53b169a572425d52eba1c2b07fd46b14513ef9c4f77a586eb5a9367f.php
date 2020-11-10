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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php */
class __TwigTemplate_46dd2323c3a37953798217a0150ba303735d2eed7f010adf8d4f658684ebdd59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntlTimeZoneToStringTransformer;

/**
 * @requires extension intl
 */
class IntlTimeZoneToStringTransformerTest extends TestCase
{
    public function testSingle()
    {
        \$transformer = new IntlTimeZoneToStringTransformer();

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame('Europe/Amsterdam', \$transformer->transform(\\IntlTimeZone::createTimeZone('Europe/Amsterdam')));
        \$this->assertEquals(\\IntlTimeZone::createTimeZone('Europe/Amsterdam'), \$transformer->reverseTransform('Europe/Amsterdam'));
    }

    public function testMultiple()
    {
        \$transformer = new IntlTimeZoneToStringTransformer(true);

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame(['Europe/Amsterdam'], \$transformer->transform([\\IntlTimeZone::createTimeZone('Europe/Amsterdam')]));
        \$this->assertEquals([\\IntlTimeZone::createTimeZone('Europe/Amsterdam')], \$transformer->reverseTransform(['Europe/Amsterdam']));
    }

    public function testInvalidTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new IntlTimeZoneToStringTransformer())->transform(1);
    }

    public function testUnknownTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new IntlTimeZoneToStringTransformer(true))->reverseTransform(['Foo/Bar']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntlTimeZoneToStringTransformer;

/**
 * @requires extension intl
 */
class IntlTimeZoneToStringTransformerTest extends TestCase
{
    public function testSingle()
    {
        \$transformer = new IntlTimeZoneToStringTransformer();

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame('Europe/Amsterdam', \$transformer->transform(\\IntlTimeZone::createTimeZone('Europe/Amsterdam')));
        \$this->assertEquals(\\IntlTimeZone::createTimeZone('Europe/Amsterdam'), \$transformer->reverseTransform('Europe/Amsterdam'));
    }

    public function testMultiple()
    {
        \$transformer = new IntlTimeZoneToStringTransformer(true);

        \$this->assertNull(\$transformer->transform(null));
        \$this->assertNull(\$transformer->reverseTransform(null));

        \$this->assertSame(['Europe/Amsterdam'], \$transformer->transform([\\IntlTimeZone::createTimeZone('Europe/Amsterdam')]));
        \$this->assertEquals([\\IntlTimeZone::createTimeZone('Europe/Amsterdam')], \$transformer->reverseTransform(['Europe/Amsterdam']));
    }

    public function testInvalidTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new IntlTimeZoneToStringTransformer())->transform(1);
    }

    public function testUnknownTimezone()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        (new IntlTimeZoneToStringTransformer(true))->reverseTransform(['Foo/Bar']);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntlTimeZoneToStringTransformerTest.php");
    }
}
