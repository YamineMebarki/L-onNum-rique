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

/* vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php */
class __TwigTemplate_cc4f32e08e4cae5ed3f894d9e1ce5821692a927f4cef676dfacba9697a0ecd5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\NumberFormatter;

use Symfony\\Component\\Intl\\Globals\\IntlGlobals;
use Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter;

/**
 * Note that there are some values written like -2147483647 - 1. This is the lower 32bit int max and is a known
 * behavior of PHP.
 */
class NumberFormatterTest extends AbstractNumberFormatterTest
{
    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new NumberFormatter('pt_BR');
    }

    public function testConstructorWithUnsupportedStyle()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new NumberFormatter('en', NumberFormatter::PATTERN_DECIMAL);
    }

    public function testConstructorWithPatternDifferentThanNull()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentNotImplementedException');
        new NumberFormatter('en', NumberFormatter::DECIMAL, '');
    }

    public function testSetAttributeWithUnsupportedAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setAttribute(NumberFormatter::LENIENT_PARSE, null);
    }

    public function testSetAttributeInvalidRoundingMode()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setAttribute(NumberFormatter::ROUNDING_MODE, null);
    }

    public function testConstructWithoutLocale()
    {
        \$this->assertInstanceOf(
            '\\Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter',
            \$this->getNumberFormatter(null, NumberFormatter::DECIMAL)
        );
    }

    public function testCreate()
    {
        \$this->assertInstanceOf(
            '\\Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter',
            NumberFormatter::create('en', NumberFormatter::DECIMAL)
        );
    }

    public function testFormatWithCurrencyStyle()
    {
        \$this->expectException('RuntimeException');
        parent::testFormatWithCurrencyStyle();
    }

    /**
     * @dataProvider formatTypeInt32Provider
     */
    public function testFormatTypeInt32(\$formatter, \$value, \$expected, \$message = '')
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeInt32(\$formatter, \$value, \$expected, \$message);
    }

    /**
     * @dataProvider formatTypeInt32WithCurrencyStyleProvider
     */
    public function testFormatTypeInt32WithCurrencyStyle(\$formatter, \$value, \$expected, \$message = '')
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeInt32WithCurrencyStyle(\$formatter, \$value, \$expected, \$message);
    }

    /**
     * @dataProvider formatTypeInt64Provider
     */
    public function testFormatTypeInt64(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeInt64(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeInt64WithCurrencyStyleProvider
     */
    public function testFormatTypeInt64WithCurrencyStyle(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeInt64WithCurrencyStyle(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeDoubleProvider
     */
    public function testFormatTypeDouble(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeDouble(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeDoubleWithCurrencyStyleProvider
     */
    public function testFormatTypeDoubleWithCurrencyStyle(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeDoubleWithCurrencyStyle(\$formatter, \$value, \$expected);
    }

    public function testGetPattern()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->getPattern();
    }

    public function testGetErrorCode()
    {
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$this->assertEquals(IntlGlobals::U_ZERO_ERROR, \$formatter->getErrorCode());
    }

    public function testParseCurrency()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->parseCurrency(null, \$currency);
    }

    public function testSetPattern()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setPattern(null);
    }

    public function testSetSymbol()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setSymbol(null, null);
    }

    public function testSetTextAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setTextAttribute(null, null);
    }

    protected function getNumberFormatter(\$locale = 'en', \$style = null, \$pattern = null)
    {
        return new NumberFormatter(\$locale, \$style, \$pattern);
    }

    protected function getIntlErrorMessage()
    {
        return IntlGlobals::getErrorMessage();
    }

    protected function getIntlErrorCode()
    {
        return IntlGlobals::getErrorCode();
    }

    protected function isIntlFailure(\$errorCode)
    {
        return IntlGlobals::isFailure(\$errorCode);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\NumberFormatter;

use Symfony\\Component\\Intl\\Globals\\IntlGlobals;
use Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter;

/**
 * Note that there are some values written like -2147483647 - 1. This is the lower 32bit int max and is a known
 * behavior of PHP.
 */
class NumberFormatterTest extends AbstractNumberFormatterTest
{
    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new NumberFormatter('pt_BR');
    }

    public function testConstructorWithUnsupportedStyle()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new NumberFormatter('en', NumberFormatter::PATTERN_DECIMAL);
    }

    public function testConstructorWithPatternDifferentThanNull()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentNotImplementedException');
        new NumberFormatter('en', NumberFormatter::DECIMAL, '');
    }

    public function testSetAttributeWithUnsupportedAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setAttribute(NumberFormatter::LENIENT_PARSE, null);
    }

    public function testSetAttributeInvalidRoundingMode()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setAttribute(NumberFormatter::ROUNDING_MODE, null);
    }

    public function testConstructWithoutLocale()
    {
        \$this->assertInstanceOf(
            '\\Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter',
            \$this->getNumberFormatter(null, NumberFormatter::DECIMAL)
        );
    }

    public function testCreate()
    {
        \$this->assertInstanceOf(
            '\\Symfony\\Component\\Intl\\NumberFormatter\\NumberFormatter',
            NumberFormatter::create('en', NumberFormatter::DECIMAL)
        );
    }

    public function testFormatWithCurrencyStyle()
    {
        \$this->expectException('RuntimeException');
        parent::testFormatWithCurrencyStyle();
    }

    /**
     * @dataProvider formatTypeInt32Provider
     */
    public function testFormatTypeInt32(\$formatter, \$value, \$expected, \$message = '')
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeInt32(\$formatter, \$value, \$expected, \$message);
    }

    /**
     * @dataProvider formatTypeInt32WithCurrencyStyleProvider
     */
    public function testFormatTypeInt32WithCurrencyStyle(\$formatter, \$value, \$expected, \$message = '')
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeInt32WithCurrencyStyle(\$formatter, \$value, \$expected, \$message);
    }

    /**
     * @dataProvider formatTypeInt64Provider
     */
    public function testFormatTypeInt64(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeInt64(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeInt64WithCurrencyStyleProvider
     */
    public function testFormatTypeInt64WithCurrencyStyle(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeInt64WithCurrencyStyle(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeDoubleProvider
     */
    public function testFormatTypeDouble(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        parent::testFormatTypeDouble(\$formatter, \$value, \$expected);
    }

    /**
     * @dataProvider formatTypeDoubleWithCurrencyStyleProvider
     */
    public function testFormatTypeDoubleWithCurrencyStyle(\$formatter, \$value, \$expected)
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatTypeDoubleWithCurrencyStyle(\$formatter, \$value, \$expected);
    }

    public function testGetPattern()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->getPattern();
    }

    public function testGetErrorCode()
    {
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$this->assertEquals(IntlGlobals::U_ZERO_ERROR, \$formatter->getErrorCode());
    }

    public function testParseCurrency()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->parseCurrency(null, \$currency);
    }

    public function testSetPattern()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setPattern(null);
    }

    public function testSetSymbol()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setSymbol(null, null);
    }

    public function testSetTextAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getNumberFormatter('en', NumberFormatter::DECIMAL);
        \$formatter->setTextAttribute(null, null);
    }

    protected function getNumberFormatter(\$locale = 'en', \$style = null, \$pattern = null)
    {
        return new NumberFormatter(\$locale, \$style, \$pattern);
    }

    protected function getIntlErrorMessage()
    {
        return IntlGlobals::getErrorMessage();
    }

    protected function getIntlErrorCode()
    {
        return IntlGlobals::getErrorCode();
    }

    protected function isIntlFailure(\$errorCode)
    {
        return IntlGlobals::isFailure(\$errorCode);
    }
}
", "vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/NumberFormatter/NumberFormatterTest.php");
    }
}
