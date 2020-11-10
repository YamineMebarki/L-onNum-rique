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

/* vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php */
class __TwigTemplate_e0ef7457f4bfa8d75fc1ed7da66f2f06a876b7cf69c265ee519a181d3e8f0f29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\DateTime as DateTimeProvider;
use PHPUnit\\Framework\\TestCase;

class DateTimeTest extends TestCase
{
    public function setUp()
    {
        \$this->defaultTz = 'UTC';
        DateTimeProvider::setDefaultTimezone(\$this->defaultTz);
    }

    public function tearDown()
    {
        DateTimeProvider::setDefaultTimezone();
    }

    public function testPreferDefaultTimezoneOverSystemTimezone()
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp().
         */
        \$originalSystemTimezone = date_default_timezone_get();
        \$systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set(\$systemTimezone);

        /**
         * Get a new date/time value and assert that it prefers the default
         * timezone over the system timezone.
         */
        \$date = DateTimeProvider::dateTime();
        \$this->assertNotSame(\$systemTimezone, \$date->getTimezone()->getName());
        \$this->assertSame(\$this->defaultTz, \$date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set(\$originalSystemTimezone);
    }

    public function testUseSystemTimezoneWhenDefaultTimezoneIsNotSet()
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp() *and* reset the default timezone.
         */
        \$originalSystemTimezone = date_default_timezone_get();
        \$originalDefaultTimezone = DateTimeProvider::getDefaultTimezone();
        \$systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set(\$systemTimezone);
        DateTimeProvider::setDefaultTimezone();

        /**
         * Get a new date/time value and assert that it uses the system timezone
         * and not the system timezone.
         */
        \$date = DateTimeProvider::dateTime();
        \$this->assertSame(\$systemTimezone, \$date->getTimezone()->getName());
        \$this->assertNotSame(\$this->defaultTz, \$date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set(\$originalSystemTimezone);
    }

    public function testUnixTime()
    {
        \$timestamp = DateTimeProvider::unixTime();
        \$this->assertInternalType('int', \$timestamp);
        \$this->assertGreaterThanOrEqual(0, \$timestamp);
        \$this->assertLessThanOrEqual(time(), \$timestamp);
    }

    public function testDateTime()
    {
        \$date = DateTimeProvider::dateTime();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeWithTimezone()
    {
        \$date = DateTimeProvider::dateTime('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeAD()
    {
        \$date = DateTimeProvider::dateTimeAD();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('0000-01-01 00:00:00'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisCentury()
    {
        \$date = DateTimeProvider::dateTimeThisCentury();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-100 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisDecade()
    {
        \$date = DateTimeProvider::dateTimeThisDecade();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-10 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisYear()
    {
        \$date = DateTimeProvider::dateTimeThisYear();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-1 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisMonth()
    {
        \$date = DateTimeProvider::dateTimeThisMonth();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-1 month'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisCenturyWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisCentury('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisDecadeWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisDecade('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisYearWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisYear('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisMonthWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisMonth('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testIso8601()
    {
        \$date = DateTimeProvider::iso8601();
        \$this->assertRegExp('/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[+-Z](\\d{4})?\$/', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), new \\DateTime(\$date));
        \$this->assertLessThanOrEqual(new \\DateTime(), new \\DateTime(\$date));
    }

    public function testDate()
    {
        \$date = DateTimeProvider::date();
        \$this->assertRegExp('/^\\d{4}-\\d{2}-\\d{2}\$/', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), new \\DateTime(\$date));
        \$this->assertLessThanOrEqual(new \\DateTime(), new \\DateTime(\$date));
    }

    public function testTime()
    {
        \$date = DateTimeProvider::time();
        \$this->assertRegExp('/^\\d{2}:\\d{2}:\\d{2}\$/', \$date);
    }

    /**
     *
     * @dataProvider providerDateTimeBetween
     */
    public function testDateTimeBetween(\$start, \$end)
    {
        \$date = DateTimeProvider::dateTimeBetween(\$start, \$end);
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime(\$start), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(\$end), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function providerDateTimeBetween()
    {
        return array(
            array('-1 year', false),
            array('-1 year', null),
            array('-1 day', '-1 hour'),
            array('-1 day', 'now'),
        );
    }

    /**
     *
     * @dataProvider providerDateTimeInInterval
     */
    public function testDateTimeInInterval(\$start, \$interval = \"+5 days\", \$isInFuture)
    {
        \$date = DateTimeProvider::dateTimeInInterval(\$start, \$interval);
        \$this->assertInstanceOf('\\DateTime', \$date);

        \$_interval = \\DateInterval::createFromDateString(\$interval);
        \$_start = new \\DateTime(\$start);
        if (\$isInFuture) {
            \$this->assertGreaterThanOrEqual(\$_start, \$date);
            \$this->assertLessThanOrEqual(\$_start->add(\$_interval), \$date);
        } else {
            \$this->assertLessThanOrEqual(\$_start, \$date);
            \$this->assertGreaterThanOrEqual(\$_start->add(\$_interval), \$date);
        }
    }

    public function providerDateTimeInInterval()
    {
        return array(
            array('-1 year', '+5 days', true),
            array('-1 day', '-1 hour', false),
            array('-1 day', '+1 hour', true),
        );
    }

    public function testFixedSeedWithMaximumTimestamp()
    {
        \$max = '2118-03-01 12:00:00';

        mt_srand(1);
        \$unixTime = DateTimeProvider::unixTime(\$max);
        \$datetimeAD = DateTimeProvider::dateTimeAD(\$max);
        \$dateTime1 = DateTimeProvider::dateTime(\$max);
        \$dateTimeBetween = DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', \$max);
        \$date = DateTimeProvider::date('Y-m-d', \$max);
        \$time = DateTimeProvider::time('H:i:s', \$max);
        \$iso8601 = DateTimeProvider::iso8601(\$max);
        \$dateTimeThisCentury = DateTimeProvider::dateTimeThisCentury(\$max);
        \$dateTimeThisDecade = DateTimeProvider::dateTimeThisDecade(\$max);
        \$dateTimeThisMonth = DateTimeProvider::dateTimeThisMonth(\$max);
        \$amPm = DateTimeProvider::amPm(\$max);
        \$dayOfMonth = DateTimeProvider::dayOfMonth(\$max);
        \$dayOfWeek = DateTimeProvider::dayOfWeek(\$max);
        \$month = DateTimeProvider::month(\$max);
        \$monthName = DateTimeProvider::monthName(\$max);
        \$year = DateTimeProvider::year(\$max);
        \$dateTimeThisYear = DateTimeProvider::dateTimeThisYear(\$max);
        mt_srand();

        //regenerate Random Date with same seed and same maximum end timestamp
        mt_srand(1);
        \$this->assertEquals(\$unixTime, DateTimeProvider::unixTime(\$max));
        \$this->assertEquals(\$datetimeAD, DateTimeProvider::dateTimeAD(\$max));
        \$this->assertEquals(\$dateTime1, DateTimeProvider::dateTime(\$max));
        \$this->assertEquals(\$dateTimeBetween, DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', \$max));
        \$this->assertEquals(\$date, DateTimeProvider::date('Y-m-d', \$max));
        \$this->assertEquals(\$time, DateTimeProvider::time('H:i:s', \$max));
        \$this->assertEquals(\$iso8601, DateTimeProvider::iso8601(\$max));
        \$this->assertEquals(\$dateTimeThisCentury, DateTimeProvider::dateTimeThisCentury(\$max));
        \$this->assertEquals(\$dateTimeThisDecade, DateTimeProvider::dateTimeThisDecade(\$max));
        \$this->assertEquals(\$dateTimeThisMonth, DateTimeProvider::dateTimeThisMonth(\$max));
        \$this->assertEquals(\$amPm, DateTimeProvider::amPm(\$max));
        \$this->assertEquals(\$dayOfMonth, DateTimeProvider::dayOfMonth(\$max));
        \$this->assertEquals(\$dayOfWeek, DateTimeProvider::dayOfWeek(\$max));
        \$this->assertEquals(\$month, DateTimeProvider::month(\$max));
        \$this->assertEquals(\$monthName, DateTimeProvider::monthName(\$max));
        \$this->assertEquals(\$year, DateTimeProvider::year(\$max));
        \$this->assertEquals(\$dateTimeThisYear, DateTimeProvider::dateTimeThisYear(\$max));
        mt_srand();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\DateTime as DateTimeProvider;
use PHPUnit\\Framework\\TestCase;

class DateTimeTest extends TestCase
{
    public function setUp()
    {
        \$this->defaultTz = 'UTC';
        DateTimeProvider::setDefaultTimezone(\$this->defaultTz);
    }

    public function tearDown()
    {
        DateTimeProvider::setDefaultTimezone();
    }

    public function testPreferDefaultTimezoneOverSystemTimezone()
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp().
         */
        \$originalSystemTimezone = date_default_timezone_get();
        \$systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set(\$systemTimezone);

        /**
         * Get a new date/time value and assert that it prefers the default
         * timezone over the system timezone.
         */
        \$date = DateTimeProvider::dateTime();
        \$this->assertNotSame(\$systemTimezone, \$date->getTimezone()->getName());
        \$this->assertSame(\$this->defaultTz, \$date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set(\$originalSystemTimezone);
    }

    public function testUseSystemTimezoneWhenDefaultTimezoneIsNotSet()
    {
        /**
         * Set the system timezone to something *other* than the timezone used
         * in setUp() *and* reset the default timezone.
         */
        \$originalSystemTimezone = date_default_timezone_get();
        \$originalDefaultTimezone = DateTimeProvider::getDefaultTimezone();
        \$systemTimezone = 'Antarctica/Vostok';
        date_default_timezone_set(\$systemTimezone);
        DateTimeProvider::setDefaultTimezone();

        /**
         * Get a new date/time value and assert that it uses the system timezone
         * and not the system timezone.
         */
        \$date = DateTimeProvider::dateTime();
        \$this->assertSame(\$systemTimezone, \$date->getTimezone()->getName());
        \$this->assertNotSame(\$this->defaultTz, \$date->getTimezone()->getName());

        /**
         * Restore the system timezone.
         */
        date_default_timezone_set(\$originalSystemTimezone);
    }

    public function testUnixTime()
    {
        \$timestamp = DateTimeProvider::unixTime();
        \$this->assertInternalType('int', \$timestamp);
        \$this->assertGreaterThanOrEqual(0, \$timestamp);
        \$this->assertLessThanOrEqual(time(), \$timestamp);
    }

    public function testDateTime()
    {
        \$date = DateTimeProvider::dateTime();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeWithTimezone()
    {
        \$date = DateTimeProvider::dateTime('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeAD()
    {
        \$date = DateTimeProvider::dateTimeAD();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('0000-01-01 00:00:00'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisCentury()
    {
        \$date = DateTimeProvider::dateTimeThisCentury();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-100 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisDecade()
    {
        \$date = DateTimeProvider::dateTimeThisDecade();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-10 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisYear()
    {
        \$date = DateTimeProvider::dateTimeThisYear();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-1 year'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisMonth()
    {
        \$date = DateTimeProvider::dateTimeThisMonth();
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('-1 month'), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function testDateTimeThisCenturyWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisCentury('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisDecadeWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisDecade('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisYearWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisYear('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testDateTimeThisMonthWithTimezone()
    {
        \$date = DateTimeProvider::dateTimeThisMonth('now', 'America/New_York');
        \$this->assertEquals(\$date->getTimezone(), new \\DateTimeZone('America/New_York'));
    }

    public function testIso8601()
    {
        \$date = DateTimeProvider::iso8601();
        \$this->assertRegExp('/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[+-Z](\\d{4})?\$/', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), new \\DateTime(\$date));
        \$this->assertLessThanOrEqual(new \\DateTime(), new \\DateTime(\$date));
    }

    public function testDate()
    {
        \$date = DateTimeProvider::date();
        \$this->assertRegExp('/^\\d{4}-\\d{2}-\\d{2}\$/', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime('@0'), new \\DateTime(\$date));
        \$this->assertLessThanOrEqual(new \\DateTime(), new \\DateTime(\$date));
    }

    public function testTime()
    {
        \$date = DateTimeProvider::time();
        \$this->assertRegExp('/^\\d{2}:\\d{2}:\\d{2}\$/', \$date);
    }

    /**
     *
     * @dataProvider providerDateTimeBetween
     */
    public function testDateTimeBetween(\$start, \$end)
    {
        \$date = DateTimeProvider::dateTimeBetween(\$start, \$end);
        \$this->assertInstanceOf('\\DateTime', \$date);
        \$this->assertGreaterThanOrEqual(new \\DateTime(\$start), \$date);
        \$this->assertLessThanOrEqual(new \\DateTime(\$end), \$date);
        \$this->assertEquals(new \\DateTimeZone(\$this->defaultTz), \$date->getTimezone());
    }

    public function providerDateTimeBetween()
    {
        return array(
            array('-1 year', false),
            array('-1 year', null),
            array('-1 day', '-1 hour'),
            array('-1 day', 'now'),
        );
    }

    /**
     *
     * @dataProvider providerDateTimeInInterval
     */
    public function testDateTimeInInterval(\$start, \$interval = \"+5 days\", \$isInFuture)
    {
        \$date = DateTimeProvider::dateTimeInInterval(\$start, \$interval);
        \$this->assertInstanceOf('\\DateTime', \$date);

        \$_interval = \\DateInterval::createFromDateString(\$interval);
        \$_start = new \\DateTime(\$start);
        if (\$isInFuture) {
            \$this->assertGreaterThanOrEqual(\$_start, \$date);
            \$this->assertLessThanOrEqual(\$_start->add(\$_interval), \$date);
        } else {
            \$this->assertLessThanOrEqual(\$_start, \$date);
            \$this->assertGreaterThanOrEqual(\$_start->add(\$_interval), \$date);
        }
    }

    public function providerDateTimeInInterval()
    {
        return array(
            array('-1 year', '+5 days', true),
            array('-1 day', '-1 hour', false),
            array('-1 day', '+1 hour', true),
        );
    }

    public function testFixedSeedWithMaximumTimestamp()
    {
        \$max = '2118-03-01 12:00:00';

        mt_srand(1);
        \$unixTime = DateTimeProvider::unixTime(\$max);
        \$datetimeAD = DateTimeProvider::dateTimeAD(\$max);
        \$dateTime1 = DateTimeProvider::dateTime(\$max);
        \$dateTimeBetween = DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', \$max);
        \$date = DateTimeProvider::date('Y-m-d', \$max);
        \$time = DateTimeProvider::time('H:i:s', \$max);
        \$iso8601 = DateTimeProvider::iso8601(\$max);
        \$dateTimeThisCentury = DateTimeProvider::dateTimeThisCentury(\$max);
        \$dateTimeThisDecade = DateTimeProvider::dateTimeThisDecade(\$max);
        \$dateTimeThisMonth = DateTimeProvider::dateTimeThisMonth(\$max);
        \$amPm = DateTimeProvider::amPm(\$max);
        \$dayOfMonth = DateTimeProvider::dayOfMonth(\$max);
        \$dayOfWeek = DateTimeProvider::dayOfWeek(\$max);
        \$month = DateTimeProvider::month(\$max);
        \$monthName = DateTimeProvider::monthName(\$max);
        \$year = DateTimeProvider::year(\$max);
        \$dateTimeThisYear = DateTimeProvider::dateTimeThisYear(\$max);
        mt_srand();

        //regenerate Random Date with same seed and same maximum end timestamp
        mt_srand(1);
        \$this->assertEquals(\$unixTime, DateTimeProvider::unixTime(\$max));
        \$this->assertEquals(\$datetimeAD, DateTimeProvider::dateTimeAD(\$max));
        \$this->assertEquals(\$dateTime1, DateTimeProvider::dateTime(\$max));
        \$this->assertEquals(\$dateTimeBetween, DateTimeProvider::dateTimeBetween('2014-03-01 06:00:00', \$max));
        \$this->assertEquals(\$date, DateTimeProvider::date('Y-m-d', \$max));
        \$this->assertEquals(\$time, DateTimeProvider::time('H:i:s', \$max));
        \$this->assertEquals(\$iso8601, DateTimeProvider::iso8601(\$max));
        \$this->assertEquals(\$dateTimeThisCentury, DateTimeProvider::dateTimeThisCentury(\$max));
        \$this->assertEquals(\$dateTimeThisDecade, DateTimeProvider::dateTimeThisDecade(\$max));
        \$this->assertEquals(\$dateTimeThisMonth, DateTimeProvider::dateTimeThisMonth(\$max));
        \$this->assertEquals(\$amPm, DateTimeProvider::amPm(\$max));
        \$this->assertEquals(\$dayOfMonth, DateTimeProvider::dayOfMonth(\$max));
        \$this->assertEquals(\$dayOfWeek, DateTimeProvider::dayOfWeek(\$max));
        \$this->assertEquals(\$month, DateTimeProvider::month(\$max));
        \$this->assertEquals(\$monthName, DateTimeProvider::monthName(\$max));
        \$this->assertEquals(\$year, DateTimeProvider::year(\$max));
        \$this->assertEquals(\$dateTimeThisYear, DateTimeProvider::dateTimeThisYear(\$max));
        mt_srand();
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/DateTimeTest.php");
    }
}
