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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php */
class __TwigTemplate_4daed40ebdd05dc55a235c53ad1187244e5c9991b4b99f2f14dad210febaa9ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntegerToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class IntegerToLocalizedStringTransformerTest extends TestCase
{
    private \$defaultLocale;

    protected function setUp(): void
    {
        \$this->defaultLocale = \\Locale::getDefault();
        \\Locale::setDefault('en');
    }

    protected function tearDown(): void
    {
        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function transformWithRoundingProvider()
    {
        return [
            // towards positive infinity (1.6 -> 2, -1.6 -> -1)
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [1234.4, '1235', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            // towards negative infinity (1.6 -> 1, -1.6 -> -2)
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [-1234.4, '-1235', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            // away from zero (1.6 -> 2, -1.6 -> 2)
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [1234.4, '1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [-1234.4, '-1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            // towards zero (1.6 -> 1, -1.6 -> -1)
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            // round halves (.5) to the next even number
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1233.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1232.5, '1232', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1233.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1232.5, '-1232', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            // round halves (.5) away from zero
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            // round halves (.5) towards zero
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
        ];
    }

    /**
     * @dataProvider transformWithRoundingProvider
     */
    public function testTransformWithRounding(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     * @dataProvider transformWithRoundingProvider
     */
    public function testTransformWithRoundingUsingLegacyConstructorSignature(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testReverseTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new IntegerToLocalizedStringTransformer();

        \$this->assertEquals(1, \$transformer->reverseTransform('1'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testReverseTransformWithGrouping()
    {
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$transformer = new IntegerToLocalizedStringTransformer(true);

        \$this->assertEquals(1234, \$transformer->reverseTransform('1.234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12.345'));
        \$this->assertEquals(1234, \$transformer->reverseTransform('1234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     */
    public function testReverseTransformWithGroupingUsingLegacyConstructorSignature()
    {
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$transformer = new IntegerToLocalizedStringTransformer(null, true);

        \$this->assertEquals(1234, \$transformer->reverseTransform('1.234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12.345'));
        \$this->assertEquals(1234, \$transformer->reverseTransform('1234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    public function reverseTransformWithRoundingProvider()
    {
        return [
            // towards positive infinity (1.6 -> 2, -1.6 -> -1)
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['1234,4', 1235, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            // towards negative infinity (1.6 -> 1, -1.6 -> -2)
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['-1234,4', -1235, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            // away from zero (1.6 -> 2, -1.6 -> 2)
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['1234,4', 1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['-1234,4', -1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            // towards zero (1.6 -> 1, -1.6 -> -1)
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            // round halves (.5) to the next even number
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1233,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1232,5', 1232, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1233,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1232,5', -1232, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            // round halves (.5) away from zero
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            // round halves (.5) towards zero
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
        ];
    }

    /**
     * @dataProvider reverseTransformWithRoundingProvider
     */
    public function testReverseTransformWithRounding(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     * @dataProvider reverseTransformWithRoundingProvider
     */
    public function testReverseTransformWithRoundingUsingLegacyConstructorSignature(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform(1);
    }

    public function testReverseTransformExpectsValidNumber()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('foo');
    }

    /**
     * @dataProvider floatNumberProvider
     */
    public function testReverseTransformExpectsInteger(\$number, \$locale)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault(\$locale);

        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform(\$number);
    }

    public function floatNumberProvider()
    {
        return [
            ['12345.912', 'en'],
            ['1.234,5', 'de_DE'],
        ];
    }

    public function testReverseTransformDisallowsNaN()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('NaN');
    }

    public function testReverseTransformDisallowsNaN2()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('nan');
    }

    public function testReverseTransformDisallowsInfinity()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('∞');
    }

    public function testReverseTransformDisallowsNegativeInfinity()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('-∞');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntegerToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class IntegerToLocalizedStringTransformerTest extends TestCase
{
    private \$defaultLocale;

    protected function setUp(): void
    {
        \$this->defaultLocale = \\Locale::getDefault();
        \\Locale::setDefault('en');
    }

    protected function tearDown(): void
    {
        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function transformWithRoundingProvider()
    {
        return [
            // towards positive infinity (1.6 -> 2, -1.6 -> -1)
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [1234.4, '1235', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_CEILING],
            // towards negative infinity (1.6 -> 1, -1.6 -> -2)
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            [-1234.4, '-1235', IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            // away from zero (1.6 -> 2, -1.6 -> 2)
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [1234.4, '1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            [-1234.4, '-1235', IntegerToLocalizedStringTransformer::ROUND_UP],
            // towards zero (1.6 -> 1, -1.6 -> -1)
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_DOWN],
            // round halves (.5) to the next even number
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1233.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [1232.5, '1232', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1233.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            [-1232.5, '-1232', IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            // round halves (.5) away from zero
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [1234.5, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.5, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            // round halves (.5) towards zero
            [1234.6, '1235', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [1234.5, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [1234.4, '1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.6, '-1235', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.5, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            [-1234.4, '-1234', IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
        ];
    }

    /**
     * @dataProvider transformWithRoundingProvider
     */
    public function testTransformWithRounding(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     * @dataProvider transformWithRoundingProvider
     */
    public function testTransformWithRoundingUsingLegacyConstructorSignature(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->transform(\$input));
    }

    public function testReverseTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new IntegerToLocalizedStringTransformer();

        \$this->assertEquals(1, \$transformer->reverseTransform('1'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testReverseTransformWithGrouping()
    {
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$transformer = new IntegerToLocalizedStringTransformer(true);

        \$this->assertEquals(1234, \$transformer->reverseTransform('1.234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12.345'));
        \$this->assertEquals(1234, \$transformer->reverseTransform('1234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     */
    public function testReverseTransformWithGroupingUsingLegacyConstructorSignature()
    {
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$transformer = new IntegerToLocalizedStringTransformer(null, true);

        \$this->assertEquals(1234, \$transformer->reverseTransform('1.234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12.345'));
        \$this->assertEquals(1234, \$transformer->reverseTransform('1234'));
        \$this->assertEquals(12345, \$transformer->reverseTransform('12345'));
    }

    public function reverseTransformWithRoundingProvider()
    {
        return [
            // towards positive infinity (1.6 -> 2, -1.6 -> -1)
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['1234,4', 1235, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_CEILING],
            // towards negative infinity (1.6 -> 1, -1.6 -> -2)
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            ['-1234,4', -1235, IntegerToLocalizedStringTransformer::ROUND_FLOOR],
            // away from zero (1.6 -> 2, -1.6 -> 2)
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['1234,4', 1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            ['-1234,4', -1235, IntegerToLocalizedStringTransformer::ROUND_UP],
            // towards zero (1.6 -> 1, -1.6 -> -1)
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_DOWN],
            // round halves (.5) to the next even number
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1233,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['1232,5', 1232, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1233,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            ['-1232,5', -1232, IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN],
            // round halves (.5) away from zero
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['1234,5', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,5', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_UP],
            // round halves (.5) towards zero
            ['1234,6', 1235, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['1234,5', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['1234,4', 1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,6', -1235, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,5', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
            ['-1234,4', -1234, IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN],
        ];
    }

    /**
     * @dataProvider reverseTransformWithRoundingProvider
     */
    public function testReverseTransformWithRounding(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.
     * @dataProvider reverseTransformWithRoundingProvider
     */
    public function testReverseTransformWithRoundingUsingLegacyConstructorSignature(\$input, \$output, \$roundingMode)
    {
        \$transformer = new IntegerToLocalizedStringTransformer(null, null, \$roundingMode);

        \$this->assertEquals(\$output, \$transformer->reverseTransform(\$input));
    }

    public function testReverseTransformExpectsString()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform(1);
    }

    public function testReverseTransformExpectsValidNumber()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('foo');
    }

    /**
     * @dataProvider floatNumberProvider
     */
    public function testReverseTransformExpectsInteger(\$number, \$locale)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault(\$locale);

        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform(\$number);
    }

    public function floatNumberProvider()
    {
        return [
            ['12345.912', 'en'],
            ['1.234,5', 'de_DE'],
        ];
    }

    public function testReverseTransformDisallowsNaN()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('NaN');
    }

    public function testReverseTransformDisallowsNaN2()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('nan');
    }

    public function testReverseTransformDisallowsInfinity()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('∞');
    }

    public function testReverseTransformDisallowsNegativeInfinity()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new IntegerToLocalizedStringTransformer();

        \$transformer->reverseTransform('-∞');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformerTest.php");
    }
}
