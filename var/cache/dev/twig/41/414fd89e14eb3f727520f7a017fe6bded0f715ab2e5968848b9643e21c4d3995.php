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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php */
class __TwigTemplate_25d04f202b71273295b17b567eec8829b5b41ff86ff324f415b191a65ab6e0d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ValueToDuplicatesTransformer;

class ValueToDuplicatesTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new ValueToDuplicatesTransformer(['a', 'b', 'c']);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$output = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => 'Foo',
        ];

        \$this->assertSame(\$output, \$this->transformer->transform('Foo'));
    }

    public function testTransformEmpty()
    {
        \$output = [
            'a' => null,
            'b' => null,
            'c' => null,
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(null));
    }

    public function testReverseTransform()
    {
        \$input = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => 'Foo',
        ];

        \$this->assertSame('Foo', \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$input = [
            'a' => '',
            'b' => '',
            'c' => '',
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyNull()
    {
        \$input = [
            'a' => null,
            'b' => null,
            'c' => null,
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmptyArray()
    {
        \$input = [
            'a' => [],
            'b' => [],
            'c' => [],
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformZeroString()
    {
        \$input = [
            'a' => '0',
            'b' => '0',
            'c' => '0',
        ];

        \$this->assertSame('0', \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => null,
        ];

        \$this->transformer->reverseTransform(\$input);
    }

    public function testReverseTransformDifferences()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'a' => 'Foo',
            'b' => 'Bar',
            'c' => 'Foo',
        ];

        \$this->transformer->reverseTransform(\$input);
    }

    public function testReverseTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform('12345');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ValueToDuplicatesTransformer;

class ValueToDuplicatesTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new ValueToDuplicatesTransformer(['a', 'b', 'c']);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$output = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => 'Foo',
        ];

        \$this->assertSame(\$output, \$this->transformer->transform('Foo'));
    }

    public function testTransformEmpty()
    {
        \$output = [
            'a' => null,
            'b' => null,
            'c' => null,
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(null));
    }

    public function testReverseTransform()
    {
        \$input = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => 'Foo',
        ];

        \$this->assertSame('Foo', \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$input = [
            'a' => '',
            'b' => '',
            'c' => '',
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyNull()
    {
        \$input = [
            'a' => null,
            'b' => null,
            'c' => null,
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformEmptyArray()
    {
        \$input = [
            'a' => [],
            'b' => [],
            'c' => [],
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformZeroString()
    {
        \$input = [
            'a' => '0',
            'b' => '0',
            'c' => '0',
        ];

        \$this->assertSame('0', \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'a' => 'Foo',
            'b' => 'Foo',
            'c' => null,
        ];

        \$this->transformer->reverseTransform(\$input);
    }

    public function testReverseTransformDifferences()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'a' => 'Foo',
            'b' => 'Bar',
            'c' => 'Foo',
        ];

        \$this->transformer->reverseTransform(\$input);
    }

    public function testReverseTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform('12345');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/ValueToDuplicatesTransformerTest.php");
    }
}
