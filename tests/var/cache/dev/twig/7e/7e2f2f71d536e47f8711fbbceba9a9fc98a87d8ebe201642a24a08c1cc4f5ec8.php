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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php */
class __TwigTemplate_be0f8a03ea54e064c3fa98ce868f525477690af226b7637d017f42b194d01b1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\PercentToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class PercentToLocalizedStringTransformerTest extends TestCase
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

    public function testTransform()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals('10', \$transformer->transform(0.1));
        \$this->assertEquals('15', \$transformer->transform(0.15));
        \$this->assertEquals('12', \$transformer->transform(0.1234));
        \$this->assertEquals('200', \$transformer->transform(2));
    }

    public function testTransformEmpty()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals('', \$transformer->transform(null));
    }

    public function testTransformWithInteger()
    {
        \$transformer = new PercentToLocalizedStringTransformer(null, 'integer');

        \$this->assertEquals('0', \$transformer->transform(0.1));
        \$this->assertEquals('1', \$transformer->transform(1));
        \$this->assertEquals('15', \$transformer->transform(15));
        \$this->assertEquals('16', \$transformer->transform(15.9));
    }

    public function testTransformWithScale()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new PercentToLocalizedStringTransformer(2);

        \$this->assertEquals('12,34', \$transformer->transform(0.1234));
    }

    public function testReverseTransform()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals(0.1, \$transformer->reverseTransform('10'));
        \$this->assertEquals(0.15, \$transformer->reverseTransform('15'));
        \$this->assertEquals(0.12, \$transformer->reverseTransform('12'));
        \$this->assertEquals(2, \$transformer->reverseTransform('200'));
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testReverseTransformWithInteger()
    {
        \$transformer = new PercentToLocalizedStringTransformer(null, 'integer');

        \$this->assertEquals(10, \$transformer->reverseTransform('10'));
        \$this->assertEquals(15, \$transformer->reverseTransform('15'));
        \$this->assertEquals(12, \$transformer->reverseTransform('12'));
        \$this->assertEquals(200, \$transformer->reverseTransform('200'));
    }

    public function testReverseTransformWithScale()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new PercentToLocalizedStringTransformer(2);

        \$this->assertEquals(0.1234, \$transformer->reverseTransform('12,34'));
    }

    public function testTransformExpectsNumeric()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('foo');
    }

    public function testReverseTransformExpectsString()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->reverseTransform(1);
    }

    public function testDecimalSeparatorMayBeDotIfGroupingSeparatorIsNotDot()
    {
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('fr');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        // completely valid format
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234,5'));
        // accept dots
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234.5'));
        // omit group separator
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testDecimalSeparatorMayNotBeDotIfGroupingSeparatorIsDot()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('de_DE');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1.234.5');
    }

    public function testDecimalSeparatorMayNotBeDotIfGroupingSeparatorIsDotWithNoGroupSep()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('de_DE');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1234.5');
    }

    public function testDecimalSeparatorMayBeDotIfGroupingSeparatorIsDotButNoGroupingUsed()
    {
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('fr');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testDecimalSeparatorMayBeCommaIfGroupingSeparatorIsNotComma()
    {
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('bg');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        // completely valid format
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234.5'));
        // accept commas
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234,5'));
        // omit group separator
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
    }

    public function testDecimalSeparatorMayNotBeCommaIfGroupingSeparatorIsComma()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1,234,5');
    }

    public function testDecimalSeparatorMayNotBeCommaIfGroupingSeparatorIsCommaWithNoGroupSep()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1234,5');
    }

    public function testDecimalSeparatorMayBeCommaIfGroupingSeparatorIsCommaButNoGroupingUsed()
    {
        \$formatter = new \\NumberFormatter(\\Locale::getDefault(), \\NumberFormatter::DECIMAL);
        \$formatter->setAttribute(\\NumberFormatter::FRACTION_DIGITS, 1);
        \$formatter->setAttribute(\\NumberFormatter::GROUPING_USED, false);

        \$transformer = \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\PercentToLocalizedStringTransformer')
            ->setMethods(['getNumberFormatter'])
            ->setConstructorArgs([1, 'integer'])
            ->getMock();
        \$transformer->expects(\$this->any())
            ->method('getNumberFormatter')
            ->willReturn(\$formatter);

        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testReverseTransformDisallowsLeadingExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('foo123');
    }

    public function testReverseTransformDisallowsCenteredExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo3\"');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('12foo3');
    }

    /**
     * @requires extension mbstring
     */
    public function testReverseTransformDisallowsCenteredExtraCharactersMultibyte()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo8\"');
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('ru');

        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform(\"12\\xc2\\xa0345,67foo8\");
    }

    public function testReverseTransformDisallowsTrailingExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo\"');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('123foo');
    }

    /**
     * @requires extension mbstring
     */
    public function testReverseTransformDisallowsTrailingExtraCharactersMultibyte()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo\"');
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('ru');

        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform(\"12\\xc2\\xa0345,678foo\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\PercentToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class PercentToLocalizedStringTransformerTest extends TestCase
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

    public function testTransform()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals('10', \$transformer->transform(0.1));
        \$this->assertEquals('15', \$transformer->transform(0.15));
        \$this->assertEquals('12', \$transformer->transform(0.1234));
        \$this->assertEquals('200', \$transformer->transform(2));
    }

    public function testTransformEmpty()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals('', \$transformer->transform(null));
    }

    public function testTransformWithInteger()
    {
        \$transformer = new PercentToLocalizedStringTransformer(null, 'integer');

        \$this->assertEquals('0', \$transformer->transform(0.1));
        \$this->assertEquals('1', \$transformer->transform(1));
        \$this->assertEquals('15', \$transformer->transform(15));
        \$this->assertEquals('16', \$transformer->transform(15.9));
    }

    public function testTransformWithScale()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new PercentToLocalizedStringTransformer(2);

        \$this->assertEquals('12,34', \$transformer->transform(0.1234));
    }

    public function testReverseTransform()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertEquals(0.1, \$transformer->reverseTransform('10'));
        \$this->assertEquals(0.15, \$transformer->reverseTransform('15'));
        \$this->assertEquals(0.12, \$transformer->reverseTransform('12'));
        \$this->assertEquals(2, \$transformer->reverseTransform('200'));
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testReverseTransformWithInteger()
    {
        \$transformer = new PercentToLocalizedStringTransformer(null, 'integer');

        \$this->assertEquals(10, \$transformer->reverseTransform('10'));
        \$this->assertEquals(15, \$transformer->reverseTransform('15'));
        \$this->assertEquals(12, \$transformer->reverseTransform('12'));
        \$this->assertEquals(200, \$transformer->reverseTransform('200'));
    }

    public function testReverseTransformWithScale()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new PercentToLocalizedStringTransformer(2);

        \$this->assertEquals(0.1234, \$transformer->reverseTransform('12,34'));
    }

    public function testTransformExpectsNumeric()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('foo');
    }

    public function testReverseTransformExpectsString()
    {
        \$transformer = new PercentToLocalizedStringTransformer();

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->reverseTransform(1);
    }

    public function testDecimalSeparatorMayBeDotIfGroupingSeparatorIsNotDot()
    {
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('fr');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        // completely valid format
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234,5'));
        // accept dots
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234.5'));
        // omit group separator
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testDecimalSeparatorMayNotBeDotIfGroupingSeparatorIsDot()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('de_DE');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1.234.5');
    }

    public function testDecimalSeparatorMayNotBeDotIfGroupingSeparatorIsDotWithNoGroupSep()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        // Since we test against \"de_DE\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('de_DE');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1234.5');
    }

    public function testDecimalSeparatorMayBeDotIfGroupingSeparatorIsDotButNoGroupingUsed()
    {
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('fr');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testDecimalSeparatorMayBeCommaIfGroupingSeparatorIsNotComma()
    {
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \\Locale::setDefault('bg');
        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        // completely valid format
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234.5'));
        // accept commas
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1 234,5'));
        // omit group separator
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
    }

    public function testDecimalSeparatorMayNotBeCommaIfGroupingSeparatorIsComma()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1,234,5');
    }

    public function testDecimalSeparatorMayNotBeCommaIfGroupingSeparatorIsCommaWithNoGroupSep()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        IntlTestHelper::requireFullIntl(\$this, '4.8.1.1');

        \$transformer = new PercentToLocalizedStringTransformer(1, 'integer');

        \$transformer->reverseTransform('1234,5');
    }

    public function testDecimalSeparatorMayBeCommaIfGroupingSeparatorIsCommaButNoGroupingUsed()
    {
        \$formatter = new \\NumberFormatter(\\Locale::getDefault(), \\NumberFormatter::DECIMAL);
        \$formatter->setAttribute(\\NumberFormatter::FRACTION_DIGITS, 1);
        \$formatter->setAttribute(\\NumberFormatter::GROUPING_USED, false);

        \$transformer = \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\PercentToLocalizedStringTransformer')
            ->setMethods(['getNumberFormatter'])
            ->setConstructorArgs([1, 'integer'])
            ->getMock();
        \$transformer->expects(\$this->any())
            ->method('getNumberFormatter')
            ->willReturn(\$formatter);

        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234,5'));
        \$this->assertEquals(1234.5, \$transformer->reverseTransform('1234.5'));
    }

    public function testReverseTransformDisallowsLeadingExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('foo123');
    }

    public function testReverseTransformDisallowsCenteredExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo3\"');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('12foo3');
    }

    /**
     * @requires extension mbstring
     */
    public function testReverseTransformDisallowsCenteredExtraCharactersMultibyte()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo8\"');
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('ru');

        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform(\"12\\xc2\\xa0345,67foo8\");
    }

    public function testReverseTransformDisallowsTrailingExtraCharacters()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo\"');
        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform('123foo');
    }

    /**
     * @requires extension mbstring
     */
    public function testReverseTransformDisallowsTrailingExtraCharactersMultibyte()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->expectExceptionMessage('The number contains unrecognized characters: \"foo\"');
        // Since we test against other locales, we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('ru');

        \$transformer = new PercentToLocalizedStringTransformer();

        \$transformer->reverseTransform(\"12\\xc2\\xa0345,678foo\");
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/PercentToLocalizedStringTransformerTest.php");
    }
}
