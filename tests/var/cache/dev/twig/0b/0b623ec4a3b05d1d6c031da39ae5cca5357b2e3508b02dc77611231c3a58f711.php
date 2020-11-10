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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php */
class __TwigTemplate_5453f196261aba3a6fb9ddbd1b95a759a0657a655333aa92b035c1a833bc5e32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeImmutableToDateTimeTransformer;

class DateTimeImmutableToDateTimeTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 UTC');
        \$expectedOutput = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$actualOutput = \$transformer->transform(\$input);

        \$this->assertInstanceOf(\\DateTime::class, \$actualOutput);
        \$this->assertEquals(\$expectedOutput, \$actualOutput);
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$this->assertNull(\$transformer->transform(null));
    }

    public function testTransformFail()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('Expected a \\DateTimeImmutable.');
        \$transformer = new DateTimeImmutableToDateTimeTransformer();
        \$transformer->transform(new \\DateTime());
    }

    public function testReverseTransform()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$expectedOutput = new \\DateTimeImmutable('2010-02-03 04:05:06 UTC');
        \$actualOutput = \$transformer->reverseTransform(\$input);

        \$this->assertInstanceOf(\\DateTimeImmutable::class, \$actualOutput);
        \$this->assertEquals(\$expectedOutput, \$actualOutput);
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$this->assertNull(\$transformer->reverseTransform(null));
    }

    public function testReverseTransformFail()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('Expected a \\DateTime.');
        \$transformer = new DateTimeImmutableToDateTimeTransformer();
        \$transformer->reverseTransform(new \\DateTimeImmutable());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeImmutableToDateTimeTransformer;

class DateTimeImmutableToDateTimeTransformerTest extends TestCase
{
    public function testTransform()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$input = new \\DateTimeImmutable('2010-02-03 04:05:06 UTC');
        \$expectedOutput = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$actualOutput = \$transformer->transform(\$input);

        \$this->assertInstanceOf(\\DateTime::class, \$actualOutput);
        \$this->assertEquals(\$expectedOutput, \$actualOutput);
    }

    public function testTransformEmpty()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$this->assertNull(\$transformer->transform(null));
    }

    public function testTransformFail()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('Expected a \\DateTimeImmutable.');
        \$transformer = new DateTimeImmutableToDateTimeTransformer();
        \$transformer->transform(new \\DateTime());
    }

    public function testReverseTransform()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$input = new \\DateTime('2010-02-03 04:05:06 UTC');
        \$expectedOutput = new \\DateTimeImmutable('2010-02-03 04:05:06 UTC');
        \$actualOutput = \$transformer->reverseTransform(\$input);

        \$this->assertInstanceOf(\\DateTimeImmutable::class, \$actualOutput);
        \$this->assertEquals(\$expectedOutput, \$actualOutput);
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new DateTimeImmutableToDateTimeTransformer();

        \$this->assertNull(\$transformer->reverseTransform(null));
    }

    public function testReverseTransformFail()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('Expected a \\DateTime.');
        \$transformer = new DateTimeImmutableToDateTimeTransformer();
        \$transformer->reverseTransform(new \\DateTimeImmutable());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformerTest.php");
    }
}
