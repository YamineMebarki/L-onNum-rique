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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php */
class __TwigTemplate_aa548a51f30b2c22915392c799bc58d59bc603be1748166accae71b5ddc05db5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BooleanToStringTransformer;

class BooleanToStringTransformerTest extends TestCase
{
    const TRUE_VALUE = '1';

    /**
     * @var BooleanToStringTransformer
     */
    protected \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new BooleanToStringTransformer(self::TRUE_VALUE);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$this->assertEquals(self::TRUE_VALUE, \$this->transformer->transform(true));
        \$this->assertNull(\$this->transformer->transform(false));
    }

    // https://github.com/symfony/symfony/issues/8989
    public function testTransformAcceptsNull()
    {
        \$this->assertNull(\$this->transformer->transform(null));
    }

    public function testTransformFailsIfString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('1');
    }

    public function testReverseTransformFailsIfInteger()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform(1);
    }

    public function testReverseTransform()
    {
        \$this->assertTrue(\$this->transformer->reverseTransform(self::TRUE_VALUE));
        \$this->assertTrue(\$this->transformer->reverseTransform('foobar'));
        \$this->assertTrue(\$this->transformer->reverseTransform(''));
        \$this->assertFalse(\$this->transformer->reverseTransform(null));
    }

    public function testCustomFalseValues()
    {
        \$customFalseTransformer = new BooleanToStringTransformer(self::TRUE_VALUE, ['0', 'myFalse', true]);
        \$this->assertFalse(\$customFalseTransformer->reverseTransform('myFalse'));
        \$this->assertFalse(\$customFalseTransformer->reverseTransform('0'));
        \$this->assertFalse(\$customFalseTransformer->reverseTransform(true));
    }

    public function testTrueValueContainedInFalseValues()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        new BooleanToStringTransformer('0', [null, '0']);
    }

    public function testBeStrictOnTrueInFalseValueCheck()
    {
        \$transformer = new BooleanToStringTransformer('0', [null, false]);
        \$this->assertInstanceOf(BooleanToStringTransformer::class, \$transformer);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BooleanToStringTransformer;

class BooleanToStringTransformerTest extends TestCase
{
    const TRUE_VALUE = '1';

    /**
     * @var BooleanToStringTransformer
     */
    protected \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new BooleanToStringTransformer(self::TRUE_VALUE);
    }

    protected function tearDown(): void
    {
        \$this->transformer = null;
    }

    public function testTransform()
    {
        \$this->assertEquals(self::TRUE_VALUE, \$this->transformer->transform(true));
        \$this->assertNull(\$this->transformer->transform(false));
    }

    // https://github.com/symfony/symfony/issues/8989
    public function testTransformAcceptsNull()
    {
        \$this->assertNull(\$this->transformer->transform(null));
    }

    public function testTransformFailsIfString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('1');
    }

    public function testReverseTransformFailsIfInteger()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->reverseTransform(1);
    }

    public function testReverseTransform()
    {
        \$this->assertTrue(\$this->transformer->reverseTransform(self::TRUE_VALUE));
        \$this->assertTrue(\$this->transformer->reverseTransform('foobar'));
        \$this->assertTrue(\$this->transformer->reverseTransform(''));
        \$this->assertFalse(\$this->transformer->reverseTransform(null));
    }

    public function testCustomFalseValues()
    {
        \$customFalseTransformer = new BooleanToStringTransformer(self::TRUE_VALUE, ['0', 'myFalse', true]);
        \$this->assertFalse(\$customFalseTransformer->reverseTransform('myFalse'));
        \$this->assertFalse(\$customFalseTransformer->reverseTransform('0'));
        \$this->assertFalse(\$customFalseTransformer->reverseTransform(true));
    }

    public function testTrueValueContainedInFalseValues()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        new BooleanToStringTransformer('0', [null, '0']);
    }

    public function testBeStrictOnTrueInFalseValueCheck()
    {
        \$transformer = new BooleanToStringTransformer('0', [null, false]);
        \$this->assertInstanceOf(BooleanToStringTransformer::class, \$transformer);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/BooleanToStringTransformerTest.php");
    }
}
