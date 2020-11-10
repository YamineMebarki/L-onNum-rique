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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php */
class __TwigTemplate_28c6bc04aefdbbd4e81b1fe6a2323748f58e6d0a4384906fdc1be817325e4ca2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php"));

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
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ChoiceToValueTransformer;

class ChoiceToValueTransformerTest extends TestCase
{
    protected \$transformer;
    protected \$transformerWithNull;

    protected function setUp(): void
    {
        \$list = new ArrayChoiceList(['', false, 'X', true]);
        \$listWithNull = new ArrayChoiceList(['', false, 'X', null]);

        \$this->transformer = new ChoiceToValueTransformer(\$list);
        \$this->transformerWithNull = new ChoiceToValueTransformer(\$listWithNull);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
        \$this->transformerWithNull = null;
    }

    public function transformProvider()
    {
        return [
            // more extensive test set can be found in FormUtilTest
            ['', '', '', '0'],
            [false, '0', false, '1'],
            ['X', 'X', 'X', '2'],
            [true, '1', null, '3'],
        ];
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$in, \$out, \$inWithNull, \$outWithNull)
    {
        \$this->assertSame(\$out, \$this->transformer->transform(\$in));
        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->transform(\$inWithNull));
    }

    public function reverseTransformProvider()
    {
        return [
            // values are expected to be valid choice keys already and stay
            // the same
            ['', '', '0', ''],
            ['0', false, '1', false],
            ['X', 'X', '2', 'X'],
            ['1', true, '3', null],
        ];
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$in, \$out, \$inWithNull, \$outWithNull)
    {
        \$this->assertSame(\$out, \$this->transformer->reverseTransform(\$in));
        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->reverseTransform(\$inWithNull));
    }

    public function reverseTransformExpectsStringOrNullProvider()
    {
        return [
            [0],
            [true],
            [false],
            [[]],
        ];
    }

    /**
     * @dataProvider reverseTransformExpectsStringOrNullProvider
     */
    public function testReverseTransformExpectsStringOrNull(\$value)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php";
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
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ChoiceToValueTransformer;

class ChoiceToValueTransformerTest extends TestCase
{
    protected \$transformer;
    protected \$transformerWithNull;

    protected function setUp(): void
    {
        \$list = new ArrayChoiceList(['', false, 'X', true]);
        \$listWithNull = new ArrayChoiceList(['', false, 'X', null]);

        \$this->transformer = new ChoiceToValueTransformer(\$list);
        \$this->transformerWithNull = new ChoiceToValueTransformer(\$listWithNull);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
        \$this->transformerWithNull = null;
    }

    public function transformProvider()
    {
        return [
            // more extensive test set can be found in FormUtilTest
            ['', '', '', '0'],
            [false, '0', false, '1'],
            ['X', 'X', 'X', '2'],
            [true, '1', null, '3'],
        ];
    }

    /**
     * @dataProvider transformProvider
     */
    public function testTransform(\$in, \$out, \$inWithNull, \$outWithNull)
    {
        \$this->assertSame(\$out, \$this->transformer->transform(\$in));
        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->transform(\$inWithNull));
    }

    public function reverseTransformProvider()
    {
        return [
            // values are expected to be valid choice keys already and stay
            // the same
            ['', '', '0', ''],
            ['0', false, '1', false],
            ['X', 'X', '2', 'X'],
            ['1', true, '3', null],
        ];
    }

    /**
     * @dataProvider reverseTransformProvider
     */
    public function testReverseTransform(\$in, \$out, \$inWithNull, \$outWithNull)
    {
        \$this->assertSame(\$out, \$this->transformer->reverseTransform(\$in));
        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->reverseTransform(\$inWithNull));
    }

    public function reverseTransformExpectsStringOrNullProvider()
    {
        return [
            [0],
            [true],
            [false],
            [[]],
        ];
    }

    /**
     * @dataProvider reverseTransformExpectsStringOrNullProvider
     */
    public function testReverseTransformExpectsStringOrNull(\$value)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform(\$value);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoiceToValueTransformerTest.php");
    }
}
