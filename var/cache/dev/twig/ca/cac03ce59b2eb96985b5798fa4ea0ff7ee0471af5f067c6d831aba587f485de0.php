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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php */
class __TwigTemplate_9e6263e75388ca907fb25adfe8f0bf8955f50f7991e37f4b74a88646b885b86f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the symfony/symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\StringToFloatTransformer;

class StringToFloatTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new StringToFloatTransformer();
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function provideTransformations(): array
    {
        return [
            [null, null],
            ['1', 1.],
            ['1.', 1.],
            ['1.0', 1.],
            ['1.23', 1.23],
        ];
    }

    /**
     * @dataProvider provideTransformations
     */
    public function testTransform(\$from, \$to): void
    {
        \$transformer = new StringToFloatTransformer();

        \$this->assertSame(\$to, \$transformer->transform(\$from));
    }

    public function testFailIfTransformingANonString(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->transform(1.0);
    }

    public function testFailIfTransformingANonNumericString(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->transform('foobar');
    }

    public function provideReverseTransformations(): array
    {
        return [
            [null, null],
            [1, '1'],
            [1., '1'],
            [1.0, '1'],
            [1.23, '1.23'],
            [1, '1.000', 3],
            [1.0, '1.000', 3],
            [1.23, '1.230', 3],
            [1.2344, '1.234', 3],
            [1.2345, '1.235', 3],
        ];
    }

    /**
     * @dataProvider provideReverseTransformations
     */
    public function testReverseTransform(\$from, \$to, int \$scale = null): void
    {
        \$transformer = new StringToFloatTransformer(\$scale);

        \$this->assertSame(\$to, \$transformer->reverseTransform(\$from));
    }

    public function testFailIfReverseTransformingANonNumeric(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->reverseTransform('foobar');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the symfony/symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\StringToFloatTransformer;

class StringToFloatTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new StringToFloatTransformer();
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function provideTransformations(): array
    {
        return [
            [null, null],
            ['1', 1.],
            ['1.', 1.],
            ['1.0', 1.],
            ['1.23', 1.23],
        ];
    }

    /**
     * @dataProvider provideTransformations
     */
    public function testTransform(\$from, \$to): void
    {
        \$transformer = new StringToFloatTransformer();

        \$this->assertSame(\$to, \$transformer->transform(\$from));
    }

    public function testFailIfTransformingANonString(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->transform(1.0);
    }

    public function testFailIfTransformingANonNumericString(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->transform('foobar');
    }

    public function provideReverseTransformations(): array
    {
        return [
            [null, null],
            [1, '1'],
            [1., '1'],
            [1.0, '1'],
            [1.23, '1.23'],
            [1, '1.000', 3],
            [1.0, '1.000', 3],
            [1.23, '1.230', 3],
            [1.2344, '1.234', 3],
            [1.2345, '1.235', 3],
        ];
    }

    /**
     * @dataProvider provideReverseTransformations
     */
    public function testReverseTransform(\$from, \$to, int \$scale = null): void
    {
        \$transformer = new StringToFloatTransformer(\$scale);

        \$this->assertSame(\$to, \$transformer->reverseTransform(\$from));
    }

    public function testFailIfReverseTransformingANonNumeric(): void
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new StringToFloatTransformer();
        \$transformer->reverseTransform('foobar');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/StringToFloatTransformerTest.php");
    }
}
