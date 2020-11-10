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

/* vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php */
class __TwigTemplate_535f846faa3d2264db79e9aa4f0034e31de0465ae2521fd0cb6ee60dd8756566 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\DateFormatter;

use Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter;
use Symfony\\Component\\Intl\\Globals\\IntlGlobals;

class IntlDateFormatterTest extends AbstractIntlDateFormatterTest
{
    public function testConstructor()
    {
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithoutLocale()
    {
        \$formatter = new IntlDateFormatter(null, IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithoutCalendar()
    {
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', null, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new IntlDateFormatter('pt_BR', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT);
    }

    public function testStaticCreate()
    {
        \$formatter = IntlDateFormatter::create('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT);
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter', \$formatter);
    }

    public function testFormatWithUnsupportedTimestampArgument()
    {
        \$formatter = \$this->getDefaultDateFormatter();

        \$localtime = [
            'tm_sec' => 59,
            'tm_min' => 3,
            'tm_hour' => 15,
            'tm_mday' => 15,
            'tm_mon' => 3,
            'tm_year' => 112,
            'tm_wday' => 0,
            'tm_yday' => 105,
            'tm_isdst' => 0,
        ];

        try {
            \$formatter->format(\$localtime);
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException', \$e);

            \$this->assertStringEndsWith('Only integer Unix timestamps and DateTime objects are supported.  Please install the \"intl\" extension for full localization capabilities.', \$e->getMessage());
        }
    }

    public function testFormatWithUnimplementedChars()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        \$pattern = 'Y';
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, \$pattern);
        \$formatter->format(0);
    }

    public function testFormatWithNonIntegerTimestamp()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->format([]);
    }

    public function testGetErrorCode()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertEquals(IntlGlobals::getErrorCode(), \$formatter->getErrorCode());
    }

    public function testGetErrorMessage()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertEquals(IntlGlobals::getErrorMessage(), \$formatter->getErrorMessage());
    }

    public function testIsLenient()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertFalse(\$formatter->isLenient());
    }

    public function testLocaltime()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->localtime('Wednesday, December 31, 1969 4:00:00 PM PT');
    }

    public function testParseWithNotNullPositionValue()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentNotImplementedException');
        \$position = 0;
        \$formatter = \$this->getDefaultDateFormatter('y');
        \$this->assertSame(0, \$formatter->parse('1970', \$position));
    }

    public function testSetCalendar()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->setCalendar(IntlDateFormatter::GREGORIAN);
    }

    public function testSetLenient()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->setLenient(true);
    }

    public function testFormatWithGmtTimeZoneAndMinutesOffset()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatWithGmtTimeZoneAndMinutesOffset();
    }

    public function testFormatWithNonStandardTimezone()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatWithNonStandardTimezone();
    }

    public function parseStandaloneAmPmProvider()
    {
        return \$this->notImplemented(parent::parseStandaloneAmPmProvider());
    }

    public function parseDayOfWeekProvider()
    {
        return \$this->notImplemented(parent::parseDayOfWeekProvider());
    }

    public function parseDayOfYearProvider()
    {
        return \$this->notImplemented(parent::parseDayOfYearProvider());
    }

    public function parseQuarterProvider()
    {
        return \$this->notImplemented(parent::parseQuarterProvider());
    }

    public function testParseThreeDigitsYears()
    {
        if (PHP_INT_SIZE < 8) {
            \$this->markTestSkipped('Parsing three digits years requires a 64bit PHP.');
        }

        \$formatter = \$this->getDefaultDateFormatter('yyyy-M-d');
        \$this->assertSame(-32157648000, \$formatter->parse('950-12-19'));
        \$this->assertIsIntlSuccess(\$formatter, 'U_ZERO_ERROR', IntlGlobals::U_ZERO_ERROR);
    }

    protected function getDateFormatter(\$locale, \$datetype, \$timetype, \$timezone = null, \$calendar = IntlDateFormatter::GREGORIAN, \$pattern = null)
    {
        return new IntlDateFormatter(\$locale, \$datetype, \$timetype, \$timezone, \$calendar, \$pattern);
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

    /**
     * Just to document the differences between the stub and the intl
     * implementations. The intl can parse any of the tested formats alone. The
     * stub does not implement them as it would be needed to add more
     * abstraction, passing more context to the transformers objects. Any of the
     * formats are ignored alone or with date/time data (years, months, days,
     * hours, minutes and seconds).
     *
     * Also in intl, format like 'ss E' for '10 2' (2nd day of year
     * + 10 seconds) are added, then we have 86,400 seconds (24h * 60min * 60s)
     * + 10 seconds
     *
     * @return array
     */
    private function notImplemented(array \$dataSets)
    {
        return array_map(function (array \$row) {
            return [\$row[0], \$row[1], 0];
        }, \$dataSets);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\DateFormatter;

use Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter;
use Symfony\\Component\\Intl\\Globals\\IntlGlobals;

class IntlDateFormatterTest extends AbstractIntlDateFormatterTest
{
    public function testConstructor()
    {
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithoutLocale()
    {
        \$formatter = new IntlDateFormatter(null, IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithoutCalendar()
    {
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', null, 'y-M-d');
        \$this->assertEquals('y-M-d', \$formatter->getPattern());
    }

    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new IntlDateFormatter('pt_BR', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT);
    }

    public function testStaticCreate()
    {
        \$formatter = IntlDateFormatter::create('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT);
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter', \$formatter);
    }

    public function testFormatWithUnsupportedTimestampArgument()
    {
        \$formatter = \$this->getDefaultDateFormatter();

        \$localtime = [
            'tm_sec' => 59,
            'tm_min' => 3,
            'tm_hour' => 15,
            'tm_mday' => 15,
            'tm_mon' => 3,
            'tm_year' => 112,
            'tm_wday' => 0,
            'tm_yday' => 105,
            'tm_isdst' => 0,
        ];

        try {
            \$formatter->format(\$localtime);
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException', \$e);

            \$this->assertStringEndsWith('Only integer Unix timestamps and DateTime objects are supported.  Please install the \"intl\" extension for full localization capabilities.', \$e->getMessage());
        }
    }

    public function testFormatWithUnimplementedChars()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        \$pattern = 'Y';
        \$formatter = new IntlDateFormatter('en', IntlDateFormatter::MEDIUM, IntlDateFormatter::SHORT, 'UTC', IntlDateFormatter::GREGORIAN, \$pattern);
        \$formatter->format(0);
    }

    public function testFormatWithNonIntegerTimestamp()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->format([]);
    }

    public function testGetErrorCode()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertEquals(IntlGlobals::getErrorCode(), \$formatter->getErrorCode());
    }

    public function testGetErrorMessage()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertEquals(IntlGlobals::getErrorMessage(), \$formatter->getErrorMessage());
    }

    public function testIsLenient()
    {
        \$formatter = \$this->getDefaultDateFormatter();
        \$this->assertFalse(\$formatter->isLenient());
    }

    public function testLocaltime()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->localtime('Wednesday, December 31, 1969 4:00:00 PM PT');
    }

    public function testParseWithNotNullPositionValue()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentNotImplementedException');
        \$position = 0;
        \$formatter = \$this->getDefaultDateFormatter('y');
        \$this->assertSame(0, \$formatter->parse('1970', \$position));
    }

    public function testSetCalendar()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->setCalendar(IntlDateFormatter::GREGORIAN);
    }

    public function testSetLenient()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        \$formatter = \$this->getDefaultDateFormatter();
        \$formatter->setLenient(true);
    }

    public function testFormatWithGmtTimeZoneAndMinutesOffset()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatWithGmtTimeZoneAndMinutesOffset();
    }

    public function testFormatWithNonStandardTimezone()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\NotImplementedException');
        parent::testFormatWithNonStandardTimezone();
    }

    public function parseStandaloneAmPmProvider()
    {
        return \$this->notImplemented(parent::parseStandaloneAmPmProvider());
    }

    public function parseDayOfWeekProvider()
    {
        return \$this->notImplemented(parent::parseDayOfWeekProvider());
    }

    public function parseDayOfYearProvider()
    {
        return \$this->notImplemented(parent::parseDayOfYearProvider());
    }

    public function parseQuarterProvider()
    {
        return \$this->notImplemented(parent::parseQuarterProvider());
    }

    public function testParseThreeDigitsYears()
    {
        if (PHP_INT_SIZE < 8) {
            \$this->markTestSkipped('Parsing three digits years requires a 64bit PHP.');
        }

        \$formatter = \$this->getDefaultDateFormatter('yyyy-M-d');
        \$this->assertSame(-32157648000, \$formatter->parse('950-12-19'));
        \$this->assertIsIntlSuccess(\$formatter, 'U_ZERO_ERROR', IntlGlobals::U_ZERO_ERROR);
    }

    protected function getDateFormatter(\$locale, \$datetype, \$timetype, \$timezone = null, \$calendar = IntlDateFormatter::GREGORIAN, \$pattern = null)
    {
        return new IntlDateFormatter(\$locale, \$datetype, \$timetype, \$timezone, \$calendar, \$pattern);
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

    /**
     * Just to document the differences between the stub and the intl
     * implementations. The intl can parse any of the tested formats alone. The
     * stub does not implement them as it would be needed to add more
     * abstraction, passing more context to the transformers objects. Any of the
     * formats are ignored alone or with date/time data (years, months, days,
     * hours, minutes and seconds).
     *
     * Also in intl, format like 'ss E' for '10 2' (2nd day of year
     * + 10 seconds) are added, then we have 86,400 seconds (24h * 60min * 60s)
     * + 10 seconds
     *
     * @return array
     */
    private function notImplemented(array \$dataSets)
    {
        return array_map(function (array \$row) {
            return [\$row[0], \$row[1], 0];
        }, \$dataSets);
    }
}
", "vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/DateFormatter/IntlDateFormatterTest.php");
    }
}
