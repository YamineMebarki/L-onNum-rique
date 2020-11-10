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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php */
class __TwigTemplate_c35087716bda621064ce0c40d15645390d23754f09df920c006d484482e84c41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ChoicesToValuesTransformer;

class ChoicesToValuesTransformerTest extends TestCase
{
    protected \$transformer;
    protected \$transformerWithNull;

    protected function setUp(): void
    {
        \$list = new ArrayChoiceList(['', false, 'X']);
        \$listWithNull = new ArrayChoiceList(['', false, 'X', null]);

        \$this->transformer = new ChoicesToValuesTransformer(\$list);
        \$this->transformerWithNull = new ChoicesToValuesTransformer(\$listWithNull);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
        \$this->transformerWithNull = null;
    }

    public function testTransform()
    {
        \$in = ['', false, 'X'];
        \$out = ['', '0', 'X'];

        \$this->assertSame(\$out, \$this->transformer->transform(\$in));

        \$in[] = null;
        \$outWithNull = ['0', '1', '2', '3'];

        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->transform(\$in));
    }

    public function testTransformNull()
    {
        \$this->assertSame([], \$this->transformer->transform(null));
    }

    public function testTransformExpectsArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('foobar');
    }

    public function testReverseTransform()
    {
        // values are expected to be valid choices and stay the same
        \$in = ['', '0', 'X'];
        \$out = ['', false, 'X'];

        \$this->assertSame(\$out, \$this->transformer->reverseTransform(\$in));
        // values are expected to be valid choices and stay the same
        \$inWithNull = ['0', '1', '2', '3'];
        \$out[] = null;

        \$this->assertSame(\$out, \$this->transformerWithNull->reverseTransform(\$inWithNull));
    }

    public function testReverseTransformNull()
    {
        \$this->assertSame([], \$this->transformer->reverseTransform(null));
        \$this->assertSame([], \$this->transformerWithNull->reverseTransform(null));
    }

    public function testReverseTransformExpectsArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform('foobar');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ChoicesToValuesTransformer;

class ChoicesToValuesTransformerTest extends TestCase
{
    protected \$transformer;
    protected \$transformerWithNull;

    protected function setUp(): void
    {
        \$list = new ArrayChoiceList(['', false, 'X']);
        \$listWithNull = new ArrayChoiceList(['', false, 'X', null]);

        \$this->transformer = new ChoicesToValuesTransformer(\$list);
        \$this->transformerWithNull = new ChoicesToValuesTransformer(\$listWithNull);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
        \$this->transformerWithNull = null;
    }

    public function testTransform()
    {
        \$in = ['', false, 'X'];
        \$out = ['', '0', 'X'];

        \$this->assertSame(\$out, \$this->transformer->transform(\$in));

        \$in[] = null;
        \$outWithNull = ['0', '1', '2', '3'];

        \$this->assertSame(\$outWithNull, \$this->transformerWithNull->transform(\$in));
    }

    public function testTransformNull()
    {
        \$this->assertSame([], \$this->transformer->transform(null));
    }

    public function testTransformExpectsArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('foobar');
    }

    public function testReverseTransform()
    {
        // values are expected to be valid choices and stay the same
        \$in = ['', '0', 'X'];
        \$out = ['', false, 'X'];

        \$this->assertSame(\$out, \$this->transformer->reverseTransform(\$in));
        // values are expected to be valid choices and stay the same
        \$inWithNull = ['0', '1', '2', '3'];
        \$out[] = null;

        \$this->assertSame(\$out, \$this->transformerWithNull->reverseTransform(\$inWithNull));
    }

    public function testReverseTransformNull()
    {
        \$this->assertSame([], \$this->transformer->reverseTransform(null));
        \$this->assertSame([], \$this->transformerWithNull->reverseTransform(null));
    }

    public function testReverseTransformExpectsArray()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform('foobar');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/ChoicesToValuesTransformerTest.php");
    }
}
