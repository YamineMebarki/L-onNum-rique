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

/* vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php */
class __TwigTemplate_ed3bb7aa510d90489ba8994a5b2fe235476ae9616a12b72756acdbaba89ba0f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class DateTime extends Base
{
    protected static \$century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XXI');

    protected static \$defaultTimezone = null;

    /**
     * @param string|float|int \$max
     * @return int|false
     */
    protected static function getMaxTimestamp(\$max = 'now')
    {
        if (is_numeric(\$max)) {
            return (int) \$max;
        }

        if (\$max instanceof \\DateTime) {
            return \$max->getTimestamp();
        }

        return strtotime(empty(\$max) ? 'now' : \$max);
    }

    /**
     * Get a timestamp between January 1, 1970 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return int
     *
     * @example 1061306726
     */
    public static function unixTime(\$max = 'now')
    {
        return mt_rand(0, static::getMaxTimestamp(\$max));
    }

    /**
     * Get a datetime object for a date between January 1, 1970 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2005-08-16 20:39:21')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTime(\$max = 'now', \$timezone = null)
    {
        return static::setTimezone(
            new \\DateTime('@' . static::unixTime(\$max)),
            \$timezone
        );
    }

    /**
     * Get a datetime object for a date between January 1, 001 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1265-03-22 21:15:52')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeAD(\$max = 'now', \$timezone = null)
    {
        \$min = (PHP_INT_SIZE>4 ? -62135597361 : -PHP_INT_MAX);
        return static::setTimezone(
            new \\DateTime('@' . mt_rand(\$min, static::getMaxTimestamp(\$max))),
            \$timezone
        );
    }

    /**
     * get a date string formatted with ISO8601
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2003-10-21T16:05:52+0000'
     */
    public static function iso8601(\$max = 'now')
    {
        return static::date(\\DateTime::ISO8601, \$max);
    }

    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string               \$format
     * @param \\DateTime|int|string \$max    maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2008-11-27'
     */
    public static function date(\$format = 'Y-m-d', \$max = 'now')
    {
        return static::dateTime(\$max)->format(\$format);
    }

    /**
     * Get a time string (24h format by default)
     *
     * @param string               \$format
     * @param \\DateTime|int|string \$max    maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '15:02:34'
     */
    public static function time(\$format = 'H:i:s', \$max = 'now')
    {
        return static::dateTime(\$max)->format(\$format);
    }

    /**
     * Get a DateTime object based on a random date between two given dates.
     * Accepts date strings that can be recognized by strtotime().
     *
     * @param \\DateTime|string \$startDate Defaults to 30 years ago
     * @param \\DateTime|string \$endDate   Defaults to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1999-02-02 11:42:52')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeBetween(\$startDate = '-30 years', \$endDate = 'now', \$timezone = null)
    {
        \$startTimestamp = \$startDate instanceof \\DateTime ? \$startDate->getTimestamp() : strtotime(\$startDate);
        \$endTimestamp = static::getMaxTimestamp(\$endDate);

        if (\$startTimestamp > \$endTimestamp) {
            throw new \\InvalidArgumentException('Start date must be anterior to end date.');
        }

        \$timestamp = mt_rand(\$startTimestamp, \$endTimestamp);

        return static::setTimezone(
            new \\DateTime('@' . \$timestamp),
            \$timezone
        );
    }

    /**
     * Get a DateTime object based on a random date between one given date and
     * an interval
     * Accepts date string that can be recognized by strtotime().
     *
     * @param string \$date      Defaults to 30 years ago
     * @param string \$interval  Defaults to 5 days after
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example dateTimeInInterval('1999-02-02 11:42:52', '+ 5 days')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeInInterval(\$date = '-30 years', \$interval = '+5 days', \$timezone = null)
    {
        \$intervalObject = \\DateInterval::createFromDateString(\$interval);
        \$datetime       = \$date instanceof \\DateTime ? \$date : new \\DateTime(\$date);
        \$otherDatetime  = clone \$datetime;
        \$otherDatetime->add(\$intervalObject);

        \$begin = \$datetime > \$otherDatetime ? \$otherDatetime : \$datetime;
        \$end = \$datetime===\$begin ? \$otherDatetime : \$datetime;

        return static::dateTimeBetween(
            \$begin,
            \$end,
            \$timezone
        );
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1964-04-04 11:02:02')
     * @return \\DateTime
     */
    public static function dateTimeThisCentury(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-100 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2010-03-10 05:18:58')
     * @return \\DateTime
     */
    public static function dateTimeThisDecade(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-10 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2011-09-19 09:24:37')
     * @return \\DateTime
     */
    public static function dateTimeThisYear(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-1 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2011-10-05 12:51:46')
     * @return \\DateTime
     */
    public static function dateTimeThisMonth(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-1 month', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'am'
     */
    public static function amPm(\$max = 'now')
    {
        return static::dateTime(\$max)->format('a');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '22'
     */
    public static function dayOfMonth(\$max = 'now')
    {
        return static::dateTime(\$max)->format('d');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'Tuesday'
     */
    public static function dayOfWeek(\$max = 'now')
    {
        return static::dateTime(\$max)->format('l');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '7'
     */
    public static function month(\$max = 'now')
    {
        return static::dateTime(\$max)->format('m');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'September'
     */
    public static function monthName(\$max = 'now')
    {
        return static::dateTime(\$max)->format('F');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '1673'
     */
    public static function year(\$max = 'now')
    {
        return static::dateTime(\$max)->format('Y');
    }

    /**
     * @return string
     * @example 'XVII'
     */
    public static function century()
    {
        return static::randomElement(static::\$century);
    }

    /**
     * @return string
     * @example 'Europe/Paris'
     */
    public static function timezone()
    {
        return static::randomElement(\\DateTimeZone::listIdentifiers());
    }

    /**
     * Internal method to set the time zone on a DateTime.
     *
     * @param \\DateTime \$dt
     * @param string|null \$timezone
     *
     * @return \\DateTime
     */
    private static function setTimezone(\\DateTime \$dt, \$timezone)
    {
        return \$dt->setTimezone(new \\DateTimeZone(static::resolveTimezone(\$timezone)));
    }

    /**
     * Sets default time zone.
     *
     * @param string \$timezone
     *
     * @return void
     */
    public static function setDefaultTimezone(\$timezone = null)
    {
        static::\$defaultTimezone = \$timezone;
    }

    /**
     * Gets default time zone.
     *
     * @return string|null
     */
    public static function getDefaultTimezone()
    {
        return static::\$defaultTimezone;
    }

    /**
     * @param string|null \$timezone
     * @return null|string
     */
    private static function resolveTimezone(\$timezone)
    {
        return ((null === \$timezone) ? ((null === static::\$defaultTimezone) ? date_default_timezone_get() : static::\$defaultTimezone) : \$timezone);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class DateTime extends Base
{
    protected static \$century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XXI');

    protected static \$defaultTimezone = null;

    /**
     * @param string|float|int \$max
     * @return int|false
     */
    protected static function getMaxTimestamp(\$max = 'now')
    {
        if (is_numeric(\$max)) {
            return (int) \$max;
        }

        if (\$max instanceof \\DateTime) {
            return \$max->getTimestamp();
        }

        return strtotime(empty(\$max) ? 'now' : \$max);
    }

    /**
     * Get a timestamp between January 1, 1970 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return int
     *
     * @example 1061306726
     */
    public static function unixTime(\$max = 'now')
    {
        return mt_rand(0, static::getMaxTimestamp(\$max));
    }

    /**
     * Get a datetime object for a date between January 1, 1970 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2005-08-16 20:39:21')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTime(\$max = 'now', \$timezone = null)
    {
        return static::setTimezone(
            new \\DateTime('@' . static::unixTime(\$max)),
            \$timezone
        );
    }

    /**
     * Get a datetime object for a date between January 1, 001 and now
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1265-03-22 21:15:52')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeAD(\$max = 'now', \$timezone = null)
    {
        \$min = (PHP_INT_SIZE>4 ? -62135597361 : -PHP_INT_MAX);
        return static::setTimezone(
            new \\DateTime('@' . mt_rand(\$min, static::getMaxTimestamp(\$max))),
            \$timezone
        );
    }

    /**
     * get a date string formatted with ISO8601
     *
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2003-10-21T16:05:52+0000'
     */
    public static function iso8601(\$max = 'now')
    {
        return static::date(\\DateTime::ISO8601, \$max);
    }

    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string               \$format
     * @param \\DateTime|int|string \$max    maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2008-11-27'
     */
    public static function date(\$format = 'Y-m-d', \$max = 'now')
    {
        return static::dateTime(\$max)->format(\$format);
    }

    /**
     * Get a time string (24h format by default)
     *
     * @param string               \$format
     * @param \\DateTime|int|string \$max    maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '15:02:34'
     */
    public static function time(\$format = 'H:i:s', \$max = 'now')
    {
        return static::dateTime(\$max)->format(\$format);
    }

    /**
     * Get a DateTime object based on a random date between two given dates.
     * Accepts date strings that can be recognized by strtotime().
     *
     * @param \\DateTime|string \$startDate Defaults to 30 years ago
     * @param \\DateTime|string \$endDate   Defaults to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1999-02-02 11:42:52')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeBetween(\$startDate = '-30 years', \$endDate = 'now', \$timezone = null)
    {
        \$startTimestamp = \$startDate instanceof \\DateTime ? \$startDate->getTimestamp() : strtotime(\$startDate);
        \$endTimestamp = static::getMaxTimestamp(\$endDate);

        if (\$startTimestamp > \$endTimestamp) {
            throw new \\InvalidArgumentException('Start date must be anterior to end date.');
        }

        \$timestamp = mt_rand(\$startTimestamp, \$endTimestamp);

        return static::setTimezone(
            new \\DateTime('@' . \$timestamp),
            \$timezone
        );
    }

    /**
     * Get a DateTime object based on a random date between one given date and
     * an interval
     * Accepts date string that can be recognized by strtotime().
     *
     * @param string \$date      Defaults to 30 years ago
     * @param string \$interval  Defaults to 5 days after
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example dateTimeInInterval('1999-02-02 11:42:52', '+ 5 days')
     * @return \\DateTime
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public static function dateTimeInInterval(\$date = '-30 years', \$interval = '+5 days', \$timezone = null)
    {
        \$intervalObject = \\DateInterval::createFromDateString(\$interval);
        \$datetime       = \$date instanceof \\DateTime ? \$date : new \\DateTime(\$date);
        \$otherDatetime  = clone \$datetime;
        \$otherDatetime->add(\$intervalObject);

        \$begin = \$datetime > \$otherDatetime ? \$otherDatetime : \$datetime;
        \$end = \$datetime===\$begin ? \$otherDatetime : \$datetime;

        return static::dateTimeBetween(
            \$begin,
            \$end,
            \$timezone
        );
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('1964-04-04 11:02:02')
     * @return \\DateTime
     */
    public static function dateTimeThisCentury(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-100 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2010-03-10 05:18:58')
     * @return \\DateTime
     */
    public static function dateTimeThisDecade(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-10 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2011-09-19 09:24:37')
     * @return \\DateTime
     */
    public static function dateTimeThisYear(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-1 year', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @param string|null \$timezone time zone in which the date time should be set, default to DateTime::\$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     * @example DateTime('2011-10-05 12:51:46')
     * @return \\DateTime
     */
    public static function dateTimeThisMonth(\$max = 'now', \$timezone = null)
    {
        return static::dateTimeBetween('-1 month', \$max, \$timezone);
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'am'
     */
    public static function amPm(\$max = 'now')
    {
        return static::dateTime(\$max)->format('a');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '22'
     */
    public static function dayOfMonth(\$max = 'now')
    {
        return static::dateTime(\$max)->format('d');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'Tuesday'
     */
    public static function dayOfWeek(\$max = 'now')
    {
        return static::dateTime(\$max)->format('l');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '7'
     */
    public static function month(\$max = 'now')
    {
        return static::dateTime(\$max)->format('m');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example 'September'
     */
    public static function monthName(\$max = 'now')
    {
        return static::dateTime(\$max)->format('F');
    }

    /**
     * @param \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '1673'
     */
    public static function year(\$max = 'now')
    {
        return static::dateTime(\$max)->format('Y');
    }

    /**
     * @return string
     * @example 'XVII'
     */
    public static function century()
    {
        return static::randomElement(static::\$century);
    }

    /**
     * @return string
     * @example 'Europe/Paris'
     */
    public static function timezone()
    {
        return static::randomElement(\\DateTimeZone::listIdentifiers());
    }

    /**
     * Internal method to set the time zone on a DateTime.
     *
     * @param \\DateTime \$dt
     * @param string|null \$timezone
     *
     * @return \\DateTime
     */
    private static function setTimezone(\\DateTime \$dt, \$timezone)
    {
        return \$dt->setTimezone(new \\DateTimeZone(static::resolveTimezone(\$timezone)));
    }

    /**
     * Sets default time zone.
     *
     * @param string \$timezone
     *
     * @return void
     */
    public static function setDefaultTimezone(\$timezone = null)
    {
        static::\$defaultTimezone = \$timezone;
    }

    /**
     * Gets default time zone.
     *
     * @return string|null
     */
    public static function getDefaultTimezone()
    {
        return static::\$defaultTimezone;
    }

    /**
     * @param string|null \$timezone
     * @return null|string
     */
    private static function resolveTimezone(\$timezone)
    {
        return ((null === \$timezone) ? ((null === static::\$defaultTimezone) ? date_default_timezone_get() : static::\$defaultTimezone) : \$timezone);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/DateTime.php");
    }
}
