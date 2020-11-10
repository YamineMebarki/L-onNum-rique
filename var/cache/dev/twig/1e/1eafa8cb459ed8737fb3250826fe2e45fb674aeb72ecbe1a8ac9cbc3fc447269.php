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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php */
class __TwigTemplate_998282fb4fb505e73a7a55149ccc9b2f1a1c32047b12898965f480b4b0810dfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ArrayToPartsTransformer;

class ArrayToPartsTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new ArrayToPartsTransformer([
            'first' => ['a', 'b', 'c'],
            'second' => ['d', 'e', 'f'],
        ]);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$input = [
            'a' => '1',
            'b' => '2',
            'c' => '3',
            'd' => '4',
            'e' => '5',
            'f' => '6',
        ];

        \$output = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => [
                'd' => '4',
                'e' => '5',
                'f' => '6',
            ],
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$output = [
            'first' => null,
            'second' => null,
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(null));
    }

    public function testTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('12345');
    }

    public function testReverseTransform()
    {
        \$input = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => [
                'd' => '4',
                'e' => '5',
                'f' => '6',
            ],
        ];

        \$output = [
            'a' => '1',
            'b' => '2',
            'c' => '3',
            'd' => '4',
            'e' => '5',
            'f' => '6',
        ];

        \$this->assertSame(\$output, \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$input = [
            'first' => '',
            'second' => '',
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyNull()
    {
        \$input = [
            'first' => null,
            'second' => null,
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => null,
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
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ArrayToPartsTransformer;

class ArrayToPartsTransformerTest extends TestCase
{
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new ArrayToPartsTransformer([
            'first' => ['a', 'b', 'c'],
            'second' => ['d', 'e', 'f'],
        ]);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$input = [
            'a' => '1',
            'b' => '2',
            'c' => '3',
            'd' => '4',
            'e' => '5',
            'f' => '6',
        ];

        \$output = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => [
                'd' => '4',
                'e' => '5',
                'f' => '6',
            ],
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(\$input));
    }

    public function testTransformEmpty()
    {
        \$output = [
            'first' => null,
            'second' => null,
        ];

        \$this->assertSame(\$output, \$this->transformer->transform(null));
    }

    public function testTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('12345');
    }

    public function testReverseTransform()
    {
        \$input = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => [
                'd' => '4',
                'e' => '5',
                'f' => '6',
            ],
        ];

        \$output = [
            'a' => '1',
            'b' => '2',
            'c' => '3',
            'd' => '4',
            'e' => '5',
            'f' => '6',
        ];

        \$this->assertSame(\$output, \$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyEmpty()
    {
        \$input = [
            'first' => '',
            'second' => '',
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformCompletelyNull()
    {
        \$input = [
            'first' => null,
            'second' => null,
        ];

        \$this->assertNull(\$this->transformer->reverseTransform(\$input));
    }

    public function testReverseTransformPartiallyNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$input = [
            'first' => [
                'a' => '1',
                'b' => '2',
                'c' => '3',
            ],
            'second' => null,
        ];

        \$this->transformer->reverseTransform(\$input);
    }

    public function testReverseTransformRequiresArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform('12345');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/ArrayToPartsTransformerTest.php");
    }
}
