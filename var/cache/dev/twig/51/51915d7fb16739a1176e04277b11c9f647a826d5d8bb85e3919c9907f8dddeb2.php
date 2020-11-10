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

/* vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php */
class __TwigTemplate_312c02816c4115d39cf1140fccb3b8dfb87adcc11b3c2431bb32e55352ae3407 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @requires extension intl
 */
class IntlCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testMessageFormatter()
    {
        \$var = new \\MessageFormatter('en', 'Hello {name}');

        \$expected = <<<EOTXT
MessageFormatter {
  locale: \"en\"
  pattern: \"Hello {name}\"
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastNumberFormatter()
    {
        \$var = new \\NumberFormatter('en', \\NumberFormatter::DECIMAL);

        \$expectedLocale = \$var->getLocale();
        \$expectedPattern = \$var->getPattern();

        \$expectedAttribute1 = \$var->getAttribute(\\NumberFormatter::PARSE_INT_ONLY);
        \$expectedAttribute2 = \$var->getAttribute(\\NumberFormatter::GROUPING_USED);
        \$expectedAttribute3 = \$var->getAttribute(\\NumberFormatter::DECIMAL_ALWAYS_SHOWN);
        \$expectedAttribute4 = \$var->getAttribute(\\NumberFormatter::MAX_INTEGER_DIGITS);
        \$expectedAttribute5 = \$var->getAttribute(\\NumberFormatter::MIN_INTEGER_DIGITS);
        \$expectedAttribute6 = \$var->getAttribute(\\NumberFormatter::INTEGER_DIGITS);
        \$expectedAttribute7 = \$var->getAttribute(\\NumberFormatter::MAX_FRACTION_DIGITS);
        \$expectedAttribute8 = \$var->getAttribute(\\NumberFormatter::MIN_FRACTION_DIGITS);
        \$expectedAttribute9 = \$var->getAttribute(\\NumberFormatter::FRACTION_DIGITS);
        \$expectedAttribute10 = \$var->getAttribute(\\NumberFormatter::MULTIPLIER);
        \$expectedAttribute11 = \$var->getAttribute(\\NumberFormatter::GROUPING_SIZE);
        \$expectedAttribute12 = \$var->getAttribute(\\NumberFormatter::ROUNDING_MODE);
        \$expectedAttribute13 = number_format(\$var->getAttribute(\\NumberFormatter::ROUNDING_INCREMENT), 1);
        \$expectedAttribute14 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::FORMAT_WIDTH));
        \$expectedAttribute15 = \$var->getAttribute(\\NumberFormatter::PADDING_POSITION);
        \$expectedAttribute16 = \$var->getAttribute(\\NumberFormatter::SECONDARY_GROUPING_SIZE);
        \$expectedAttribute17 = \$var->getAttribute(\\NumberFormatter::SIGNIFICANT_DIGITS_USED);
        \$expectedAttribute18 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::MIN_SIGNIFICANT_DIGITS));
        \$expectedAttribute19 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::MAX_SIGNIFICANT_DIGITS));
        \$expectedAttribute20 = \$var->getAttribute(\\NumberFormatter::LENIENT_PARSE);

        \$expectedTextAttribute1 = \$var->getTextAttribute(\\NumberFormatter::POSITIVE_PREFIX);
        \$expectedTextAttribute2 = \$var->getTextAttribute(\\NumberFormatter::POSITIVE_SUFFIX);
        \$expectedTextAttribute3 = \$var->getTextAttribute(\\NumberFormatter::NEGATIVE_PREFIX);
        \$expectedTextAttribute4 = \$var->getTextAttribute(\\NumberFormatter::NEGATIVE_SUFFIX);
        \$expectedTextAttribute5 = \$var->getTextAttribute(\\NumberFormatter::PADDING_CHARACTER);
        \$expectedTextAttribute6 = \$var->getTextAttribute(\\NumberFormatter::CURRENCY_CODE);
        \$expectedTextAttribute7 = \$var->getTextAttribute(\\NumberFormatter::DEFAULT_RULESET) ? 'true' : 'false';
        \$expectedTextAttribute8 = \$var->getTextAttribute(\\NumberFormatter::PUBLIC_RULESETS) ? 'true' : 'false';

        \$expectedSymbol1 = \$var->getSymbol(\\NumberFormatter::DECIMAL_SEPARATOR_SYMBOL);
        \$expectedSymbol2 = \$var->getSymbol(\\NumberFormatter::GROUPING_SEPARATOR_SYMBOL);
        \$expectedSymbol3 = \$var->getSymbol(\\NumberFormatter::PATTERN_SEPARATOR_SYMBOL);
        \$expectedSymbol4 = \$var->getSymbol(\\NumberFormatter::PERCENT_SYMBOL);
        \$expectedSymbol5 = \$var->getSymbol(\\NumberFormatter::ZERO_DIGIT_SYMBOL);
        \$expectedSymbol6 = \$var->getSymbol(\\NumberFormatter::DIGIT_SYMBOL);
        \$expectedSymbol7 = \$var->getSymbol(\\NumberFormatter::MINUS_SIGN_SYMBOL);
        \$expectedSymbol8 = \$var->getSymbol(\\NumberFormatter::PLUS_SIGN_SYMBOL);
        \$expectedSymbol9 = \$var->getSymbol(\\NumberFormatter::CURRENCY_SYMBOL);
        \$expectedSymbol10 = \$var->getSymbol(\\NumberFormatter::INTL_CURRENCY_SYMBOL);
        \$expectedSymbol11 = \$var->getSymbol(\\NumberFormatter::MONETARY_SEPARATOR_SYMBOL);
        \$expectedSymbol12 = \$var->getSymbol(\\NumberFormatter::EXPONENTIAL_SYMBOL);
        \$expectedSymbol13 = \$var->getSymbol(\\NumberFormatter::PERMILL_SYMBOL);
        \$expectedSymbol14 = \$var->getSymbol(\\NumberFormatter::PAD_ESCAPE_SYMBOL);
        \$expectedSymbol15 = \$var->getSymbol(\\NumberFormatter::INFINITY_SYMBOL);
        \$expectedSymbol16 = \$var->getSymbol(\\NumberFormatter::NAN_SYMBOL);
        \$expectedSymbol17 = \$var->getSymbol(\\NumberFormatter::SIGNIFICANT_DIGIT_SYMBOL);
        \$expectedSymbol18 = \$var->getSymbol(\\NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL);

        \$expected = <<<EOTXT
NumberFormatter {
  locale: \"\$expectedLocale\"
  pattern: \"\$expectedPattern\"
  attributes: {
    PARSE_INT_ONLY: \$expectedAttribute1
    GROUPING_USED: \$expectedAttribute2
    DECIMAL_ALWAYS_SHOWN: \$expectedAttribute3
    MAX_INTEGER_DIGITS: \$expectedAttribute4
    MIN_INTEGER_DIGITS: \$expectedAttribute5
    INTEGER_DIGITS: \$expectedAttribute6
    MAX_FRACTION_DIGITS: \$expectedAttribute7
    MIN_FRACTION_DIGITS: \$expectedAttribute8
    FRACTION_DIGITS: \$expectedAttribute9
    MULTIPLIER: \$expectedAttribute10
    GROUPING_SIZE: \$expectedAttribute11
    ROUNDING_MODE: \$expectedAttribute12
    ROUNDING_INCREMENT: \$expectedAttribute13
    FORMAT_WIDTH: \$expectedAttribute14
    PADDING_POSITION: \$expectedAttribute15
    SECONDARY_GROUPING_SIZE: \$expectedAttribute16
    SIGNIFICANT_DIGITS_USED: \$expectedAttribute17
    MIN_SIGNIFICANT_DIGITS: \$expectedAttribute18
    MAX_SIGNIFICANT_DIGITS: \$expectedAttribute19
    LENIENT_PARSE: \$expectedAttribute20
  }
  text_attributes: {
    POSITIVE_PREFIX: \"\$expectedTextAttribute1\"
    POSITIVE_SUFFIX: \"\$expectedTextAttribute2\"
    NEGATIVE_PREFIX: \"\$expectedTextAttribute3\"
    NEGATIVE_SUFFIX: \"\$expectedTextAttribute4\"
    PADDING_CHARACTER: \"\$expectedTextAttribute5\"
    CURRENCY_CODE: \"\$expectedTextAttribute6\"
    DEFAULT_RULESET: \$expectedTextAttribute7
    PUBLIC_RULESETS: \$expectedTextAttribute8
  }
  symbols: {
    DECIMAL_SEPARATOR_SYMBOL: \"\$expectedSymbol1\"
    GROUPING_SEPARATOR_SYMBOL: \"\$expectedSymbol2\"
    PATTERN_SEPARATOR_SYMBOL: \"\$expectedSymbol3\"
    PERCENT_SYMBOL: \"\$expectedSymbol4\"
    ZERO_DIGIT_SYMBOL: \"\$expectedSymbol5\"
    DIGIT_SYMBOL: \"\$expectedSymbol6\"
    MINUS_SIGN_SYMBOL: \"\$expectedSymbol7\"
    PLUS_SIGN_SYMBOL: \"\$expectedSymbol8\"
    CURRENCY_SYMBOL: \"\$expectedSymbol9\"
    INTL_CURRENCY_SYMBOL: \"\$expectedSymbol10\"
    MONETARY_SEPARATOR_SYMBOL: \"\$expectedSymbol11\"
    EXPONENTIAL_SYMBOL: \"\$expectedSymbol12\"
    PERMILL_SYMBOL: \"\$expectedSymbol13\"
    PAD_ESCAPE_SYMBOL: \"\$expectedSymbol14\"
    INFINITY_SYMBOL: \"\$expectedSymbol15\"
    NAN_SYMBOL: \"\$expectedSymbol16\"
    SIGNIFICANT_DIGIT_SYMBOL: \"\$expectedSymbol17\"
    MONETARY_GROUPING_SEPARATOR_SYMBOL: \"\$expectedSymbol18\"
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlTimeZoneWithDST()
    {
        \$var = \\IntlTimeZone::createTimeZone('America/Los_Angeles');

        \$expectedDisplayName = \$var->getDisplayName();
        \$expectedDSTSavings = \$var->getDSTSavings();
        \$expectedID = \$var->getID();
        \$expectedRawOffset = \$var->getRawOffset();

        \$expected = <<<EOTXT
IntlTimeZone {
  display_name: \"\$expectedDisplayName\"
  id: \"\$expectedID\"
  raw_offset: \$expectedRawOffset
  dst_savings: \$expectedDSTSavings
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlTimeZoneWithoutDST()
    {
        \$var = \\IntlTimeZone::createTimeZone('Asia/Bangkok');

        \$expectedDisplayName = \$var->getDisplayName();
        \$expectedID = \$var->getID();
        \$expectedRawOffset = \$var->getRawOffset();

        \$expected = <<<EOTXT
IntlTimeZone {
  display_name: \"\$expectedDisplayName\"
  id: \"\$expectedID\"
  raw_offset: \$expectedRawOffset
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlCalendar()
    {
        \$var = \\IntlCalendar::createInstance('America/Los_Angeles', 'en');

        \$expectedType = \$var->getType();
        \$expectedFirstDayOfWeek = \$var->getFirstDayOfWeek();
        \$expectedMinimalDaysInFirstWeek = \$var->getMinimalDaysInFirstWeek();
        \$expectedRepeatedWallTimeOption = \$var->getRepeatedWallTimeOption();
        \$expectedSkippedWallTimeOption = \$var->getSkippedWallTimeOption();
        \$expectedTime = \$var->getTime().'.0';
        \$expectedInDaylightTime = \$var->inDaylightTime() ? 'true' : 'false';
        \$expectedIsLenient = \$var->isLenient() ? 'true' : 'false';

        \$expectedTimeZone = \$var->getTimeZone();
        \$expectedTimeZoneDisplayName = \$expectedTimeZone->getDisplayName();
        \$expectedTimeZoneID = \$expectedTimeZone->getID();
        \$expectedTimeZoneRawOffset = \$expectedTimeZone->getRawOffset();
        \$expectedTimeZoneDSTSavings = \$expectedTimeZone->getDSTSavings();

        \$expected = <<<EOTXT
IntlGregorianCalendar {
  type: \"\$expectedType\"
  first_day_of_week: \$expectedFirstDayOfWeek
  minimal_days_in_first_week: \$expectedMinimalDaysInFirstWeek
  repeated_wall_time_option: \$expectedRepeatedWallTimeOption
  skipped_wall_time_option: \$expectedSkippedWallTimeOption
  time: \$expectedTime
  in_daylight_time: \$expectedInDaylightTime
  is_lenient: \$expectedIsLenient
  time_zone: IntlTimeZone {
    display_name: \"\$expectedTimeZoneDisplayName\"
    id: \"\$expectedTimeZoneID\"
    raw_offset: \$expectedTimeZoneRawOffset
    dst_savings: \$expectedTimeZoneDSTSavings
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastDateFormatter()
    {
        \$var = new \\IntlDateFormatter('en', \\IntlDateFormatter::TRADITIONAL, \\IntlDateFormatter::TRADITIONAL);

        \$expectedLocale = \$var->getLocale();
        \$expectedPattern = \$var->getPattern();
        \$expectedCalendar = \$var->getCalendar();
        \$expectedTimeZoneId = \$var->getTimeZoneId();
        \$expectedTimeType = \$var->getTimeType();
        \$expectedDateType = \$var->getDateType();

        \$expectedTimeZone = \$var->getTimeZone();
        \$expectedTimeZoneDisplayName = \$expectedTimeZone->getDisplayName();
        \$expectedTimeZoneID = \$expectedTimeZone->getID();
        \$expectedTimeZoneRawOffset = \$expectedTimeZone->getRawOffset();
        \$expectedTimeZoneDSTSavings = \$expectedTimeZone->useDaylightTime() ? \"\\n    dst_savings: \".\$expectedTimeZone->getDSTSavings() : '';

        \$expectedCalendarObject = \$var->getCalendarObject();
        \$expectedCalendarObjectType = \$expectedCalendarObject->getType();
        \$expectedCalendarObjectFirstDayOfWeek = \$expectedCalendarObject->getFirstDayOfWeek();
        \$expectedCalendarObjectMinimalDaysInFirstWeek = \$expectedCalendarObject->getMinimalDaysInFirstWeek();
        \$expectedCalendarObjectRepeatedWallTimeOption = \$expectedCalendarObject->getRepeatedWallTimeOption();
        \$expectedCalendarObjectSkippedWallTimeOption = \$expectedCalendarObject->getSkippedWallTimeOption();
        \$expectedCalendarObjectTime = \$expectedCalendarObject->getTime().'.0';
        \$expectedCalendarObjectInDaylightTime = \$expectedCalendarObject->inDaylightTime() ? 'true' : 'false';
        \$expectedCalendarObjectIsLenient = \$expectedCalendarObject->isLenient() ? 'true' : 'false';

        \$expectedCalendarObjectTimeZone = \$expectedCalendarObject->getTimeZone();
        \$expectedCalendarObjectTimeZoneDisplayName = \$expectedCalendarObjectTimeZone->getDisplayName();
        \$expectedCalendarObjectTimeZoneID = \$expectedCalendarObjectTimeZone->getID();
        \$expectedCalendarObjectTimeZoneRawOffset = \$expectedCalendarObjectTimeZone->getRawOffset();
        \$expectedCalendarObjectTimeZoneDSTSavings = \$expectedTimeZone->useDaylightTime() ? \"\\n      dst_savings: \".\$expectedCalendarObjectTimeZone->getDSTSavings() : '';

        \$expected = <<<EOTXT
IntlDateFormatter {
  locale: \"\$expectedLocale\"
  pattern: \"\$expectedPattern\"
  calendar: \$expectedCalendar
  time_zone_id: \"\$expectedTimeZoneId\"
  time_type: \$expectedTimeType
  date_type: \$expectedDateType
  calendar_object: IntlGregorianCalendar {
    type: \"\$expectedCalendarObjectType\"
    first_day_of_week: \$expectedCalendarObjectFirstDayOfWeek
    minimal_days_in_first_week: \$expectedCalendarObjectMinimalDaysInFirstWeek
    repeated_wall_time_option: \$expectedCalendarObjectRepeatedWallTimeOption
    skipped_wall_time_option: \$expectedCalendarObjectSkippedWallTimeOption
    time: \$expectedCalendarObjectTime
    in_daylight_time: \$expectedCalendarObjectInDaylightTime
    is_lenient: \$expectedCalendarObjectIsLenient
    time_zone: IntlTimeZone {
      display_name: \"\$expectedCalendarObjectTimeZoneDisplayName\"
      id: \"\$expectedCalendarObjectTimeZoneID\"
      raw_offset: \$expectedCalendarObjectTimeZoneRawOffset\$expectedCalendarObjectTimeZoneDSTSavings
    }
  }
  time_zone: IntlTimeZone {
    display_name: \"\$expectedTimeZoneDisplayName\"
    id: \"\$expectedTimeZoneID\"
    raw_offset: \$expectedTimeZoneRawOffset\$expectedTimeZoneDSTSavings
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @requires extension intl
 */
class IntlCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testMessageFormatter()
    {
        \$var = new \\MessageFormatter('en', 'Hello {name}');

        \$expected = <<<EOTXT
MessageFormatter {
  locale: \"en\"
  pattern: \"Hello {name}\"
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastNumberFormatter()
    {
        \$var = new \\NumberFormatter('en', \\NumberFormatter::DECIMAL);

        \$expectedLocale = \$var->getLocale();
        \$expectedPattern = \$var->getPattern();

        \$expectedAttribute1 = \$var->getAttribute(\\NumberFormatter::PARSE_INT_ONLY);
        \$expectedAttribute2 = \$var->getAttribute(\\NumberFormatter::GROUPING_USED);
        \$expectedAttribute3 = \$var->getAttribute(\\NumberFormatter::DECIMAL_ALWAYS_SHOWN);
        \$expectedAttribute4 = \$var->getAttribute(\\NumberFormatter::MAX_INTEGER_DIGITS);
        \$expectedAttribute5 = \$var->getAttribute(\\NumberFormatter::MIN_INTEGER_DIGITS);
        \$expectedAttribute6 = \$var->getAttribute(\\NumberFormatter::INTEGER_DIGITS);
        \$expectedAttribute7 = \$var->getAttribute(\\NumberFormatter::MAX_FRACTION_DIGITS);
        \$expectedAttribute8 = \$var->getAttribute(\\NumberFormatter::MIN_FRACTION_DIGITS);
        \$expectedAttribute9 = \$var->getAttribute(\\NumberFormatter::FRACTION_DIGITS);
        \$expectedAttribute10 = \$var->getAttribute(\\NumberFormatter::MULTIPLIER);
        \$expectedAttribute11 = \$var->getAttribute(\\NumberFormatter::GROUPING_SIZE);
        \$expectedAttribute12 = \$var->getAttribute(\\NumberFormatter::ROUNDING_MODE);
        \$expectedAttribute13 = number_format(\$var->getAttribute(\\NumberFormatter::ROUNDING_INCREMENT), 1);
        \$expectedAttribute14 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::FORMAT_WIDTH));
        \$expectedAttribute15 = \$var->getAttribute(\\NumberFormatter::PADDING_POSITION);
        \$expectedAttribute16 = \$var->getAttribute(\\NumberFormatter::SECONDARY_GROUPING_SIZE);
        \$expectedAttribute17 = \$var->getAttribute(\\NumberFormatter::SIGNIFICANT_DIGITS_USED);
        \$expectedAttribute18 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::MIN_SIGNIFICANT_DIGITS));
        \$expectedAttribute19 = \$this->getDump(\$var->getAttribute(\\NumberFormatter::MAX_SIGNIFICANT_DIGITS));
        \$expectedAttribute20 = \$var->getAttribute(\\NumberFormatter::LENIENT_PARSE);

        \$expectedTextAttribute1 = \$var->getTextAttribute(\\NumberFormatter::POSITIVE_PREFIX);
        \$expectedTextAttribute2 = \$var->getTextAttribute(\\NumberFormatter::POSITIVE_SUFFIX);
        \$expectedTextAttribute3 = \$var->getTextAttribute(\\NumberFormatter::NEGATIVE_PREFIX);
        \$expectedTextAttribute4 = \$var->getTextAttribute(\\NumberFormatter::NEGATIVE_SUFFIX);
        \$expectedTextAttribute5 = \$var->getTextAttribute(\\NumberFormatter::PADDING_CHARACTER);
        \$expectedTextAttribute6 = \$var->getTextAttribute(\\NumberFormatter::CURRENCY_CODE);
        \$expectedTextAttribute7 = \$var->getTextAttribute(\\NumberFormatter::DEFAULT_RULESET) ? 'true' : 'false';
        \$expectedTextAttribute8 = \$var->getTextAttribute(\\NumberFormatter::PUBLIC_RULESETS) ? 'true' : 'false';

        \$expectedSymbol1 = \$var->getSymbol(\\NumberFormatter::DECIMAL_SEPARATOR_SYMBOL);
        \$expectedSymbol2 = \$var->getSymbol(\\NumberFormatter::GROUPING_SEPARATOR_SYMBOL);
        \$expectedSymbol3 = \$var->getSymbol(\\NumberFormatter::PATTERN_SEPARATOR_SYMBOL);
        \$expectedSymbol4 = \$var->getSymbol(\\NumberFormatter::PERCENT_SYMBOL);
        \$expectedSymbol5 = \$var->getSymbol(\\NumberFormatter::ZERO_DIGIT_SYMBOL);
        \$expectedSymbol6 = \$var->getSymbol(\\NumberFormatter::DIGIT_SYMBOL);
        \$expectedSymbol7 = \$var->getSymbol(\\NumberFormatter::MINUS_SIGN_SYMBOL);
        \$expectedSymbol8 = \$var->getSymbol(\\NumberFormatter::PLUS_SIGN_SYMBOL);
        \$expectedSymbol9 = \$var->getSymbol(\\NumberFormatter::CURRENCY_SYMBOL);
        \$expectedSymbol10 = \$var->getSymbol(\\NumberFormatter::INTL_CURRENCY_SYMBOL);
        \$expectedSymbol11 = \$var->getSymbol(\\NumberFormatter::MONETARY_SEPARATOR_SYMBOL);
        \$expectedSymbol12 = \$var->getSymbol(\\NumberFormatter::EXPONENTIAL_SYMBOL);
        \$expectedSymbol13 = \$var->getSymbol(\\NumberFormatter::PERMILL_SYMBOL);
        \$expectedSymbol14 = \$var->getSymbol(\\NumberFormatter::PAD_ESCAPE_SYMBOL);
        \$expectedSymbol15 = \$var->getSymbol(\\NumberFormatter::INFINITY_SYMBOL);
        \$expectedSymbol16 = \$var->getSymbol(\\NumberFormatter::NAN_SYMBOL);
        \$expectedSymbol17 = \$var->getSymbol(\\NumberFormatter::SIGNIFICANT_DIGIT_SYMBOL);
        \$expectedSymbol18 = \$var->getSymbol(\\NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL);

        \$expected = <<<EOTXT
NumberFormatter {
  locale: \"\$expectedLocale\"
  pattern: \"\$expectedPattern\"
  attributes: {
    PARSE_INT_ONLY: \$expectedAttribute1
    GROUPING_USED: \$expectedAttribute2
    DECIMAL_ALWAYS_SHOWN: \$expectedAttribute3
    MAX_INTEGER_DIGITS: \$expectedAttribute4
    MIN_INTEGER_DIGITS: \$expectedAttribute5
    INTEGER_DIGITS: \$expectedAttribute6
    MAX_FRACTION_DIGITS: \$expectedAttribute7
    MIN_FRACTION_DIGITS: \$expectedAttribute8
    FRACTION_DIGITS: \$expectedAttribute9
    MULTIPLIER: \$expectedAttribute10
    GROUPING_SIZE: \$expectedAttribute11
    ROUNDING_MODE: \$expectedAttribute12
    ROUNDING_INCREMENT: \$expectedAttribute13
    FORMAT_WIDTH: \$expectedAttribute14
    PADDING_POSITION: \$expectedAttribute15
    SECONDARY_GROUPING_SIZE: \$expectedAttribute16
    SIGNIFICANT_DIGITS_USED: \$expectedAttribute17
    MIN_SIGNIFICANT_DIGITS: \$expectedAttribute18
    MAX_SIGNIFICANT_DIGITS: \$expectedAttribute19
    LENIENT_PARSE: \$expectedAttribute20
  }
  text_attributes: {
    POSITIVE_PREFIX: \"\$expectedTextAttribute1\"
    POSITIVE_SUFFIX: \"\$expectedTextAttribute2\"
    NEGATIVE_PREFIX: \"\$expectedTextAttribute3\"
    NEGATIVE_SUFFIX: \"\$expectedTextAttribute4\"
    PADDING_CHARACTER: \"\$expectedTextAttribute5\"
    CURRENCY_CODE: \"\$expectedTextAttribute6\"
    DEFAULT_RULESET: \$expectedTextAttribute7
    PUBLIC_RULESETS: \$expectedTextAttribute8
  }
  symbols: {
    DECIMAL_SEPARATOR_SYMBOL: \"\$expectedSymbol1\"
    GROUPING_SEPARATOR_SYMBOL: \"\$expectedSymbol2\"
    PATTERN_SEPARATOR_SYMBOL: \"\$expectedSymbol3\"
    PERCENT_SYMBOL: \"\$expectedSymbol4\"
    ZERO_DIGIT_SYMBOL: \"\$expectedSymbol5\"
    DIGIT_SYMBOL: \"\$expectedSymbol6\"
    MINUS_SIGN_SYMBOL: \"\$expectedSymbol7\"
    PLUS_SIGN_SYMBOL: \"\$expectedSymbol8\"
    CURRENCY_SYMBOL: \"\$expectedSymbol9\"
    INTL_CURRENCY_SYMBOL: \"\$expectedSymbol10\"
    MONETARY_SEPARATOR_SYMBOL: \"\$expectedSymbol11\"
    EXPONENTIAL_SYMBOL: \"\$expectedSymbol12\"
    PERMILL_SYMBOL: \"\$expectedSymbol13\"
    PAD_ESCAPE_SYMBOL: \"\$expectedSymbol14\"
    INFINITY_SYMBOL: \"\$expectedSymbol15\"
    NAN_SYMBOL: \"\$expectedSymbol16\"
    SIGNIFICANT_DIGIT_SYMBOL: \"\$expectedSymbol17\"
    MONETARY_GROUPING_SEPARATOR_SYMBOL: \"\$expectedSymbol18\"
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlTimeZoneWithDST()
    {
        \$var = \\IntlTimeZone::createTimeZone('America/Los_Angeles');

        \$expectedDisplayName = \$var->getDisplayName();
        \$expectedDSTSavings = \$var->getDSTSavings();
        \$expectedID = \$var->getID();
        \$expectedRawOffset = \$var->getRawOffset();

        \$expected = <<<EOTXT
IntlTimeZone {
  display_name: \"\$expectedDisplayName\"
  id: \"\$expectedID\"
  raw_offset: \$expectedRawOffset
  dst_savings: \$expectedDSTSavings
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlTimeZoneWithoutDST()
    {
        \$var = \\IntlTimeZone::createTimeZone('Asia/Bangkok');

        \$expectedDisplayName = \$var->getDisplayName();
        \$expectedID = \$var->getID();
        \$expectedRawOffset = \$var->getRawOffset();

        \$expected = <<<EOTXT
IntlTimeZone {
  display_name: \"\$expectedDisplayName\"
  id: \"\$expectedID\"
  raw_offset: \$expectedRawOffset
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastIntlCalendar()
    {
        \$var = \\IntlCalendar::createInstance('America/Los_Angeles', 'en');

        \$expectedType = \$var->getType();
        \$expectedFirstDayOfWeek = \$var->getFirstDayOfWeek();
        \$expectedMinimalDaysInFirstWeek = \$var->getMinimalDaysInFirstWeek();
        \$expectedRepeatedWallTimeOption = \$var->getRepeatedWallTimeOption();
        \$expectedSkippedWallTimeOption = \$var->getSkippedWallTimeOption();
        \$expectedTime = \$var->getTime().'.0';
        \$expectedInDaylightTime = \$var->inDaylightTime() ? 'true' : 'false';
        \$expectedIsLenient = \$var->isLenient() ? 'true' : 'false';

        \$expectedTimeZone = \$var->getTimeZone();
        \$expectedTimeZoneDisplayName = \$expectedTimeZone->getDisplayName();
        \$expectedTimeZoneID = \$expectedTimeZone->getID();
        \$expectedTimeZoneRawOffset = \$expectedTimeZone->getRawOffset();
        \$expectedTimeZoneDSTSavings = \$expectedTimeZone->getDSTSavings();

        \$expected = <<<EOTXT
IntlGregorianCalendar {
  type: \"\$expectedType\"
  first_day_of_week: \$expectedFirstDayOfWeek
  minimal_days_in_first_week: \$expectedMinimalDaysInFirstWeek
  repeated_wall_time_option: \$expectedRepeatedWallTimeOption
  skipped_wall_time_option: \$expectedSkippedWallTimeOption
  time: \$expectedTime
  in_daylight_time: \$expectedInDaylightTime
  is_lenient: \$expectedIsLenient
  time_zone: IntlTimeZone {
    display_name: \"\$expectedTimeZoneDisplayName\"
    id: \"\$expectedTimeZoneID\"
    raw_offset: \$expectedTimeZoneRawOffset
    dst_savings: \$expectedTimeZoneDSTSavings
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastDateFormatter()
    {
        \$var = new \\IntlDateFormatter('en', \\IntlDateFormatter::TRADITIONAL, \\IntlDateFormatter::TRADITIONAL);

        \$expectedLocale = \$var->getLocale();
        \$expectedPattern = \$var->getPattern();
        \$expectedCalendar = \$var->getCalendar();
        \$expectedTimeZoneId = \$var->getTimeZoneId();
        \$expectedTimeType = \$var->getTimeType();
        \$expectedDateType = \$var->getDateType();

        \$expectedTimeZone = \$var->getTimeZone();
        \$expectedTimeZoneDisplayName = \$expectedTimeZone->getDisplayName();
        \$expectedTimeZoneID = \$expectedTimeZone->getID();
        \$expectedTimeZoneRawOffset = \$expectedTimeZone->getRawOffset();
        \$expectedTimeZoneDSTSavings = \$expectedTimeZone->useDaylightTime() ? \"\\n    dst_savings: \".\$expectedTimeZone->getDSTSavings() : '';

        \$expectedCalendarObject = \$var->getCalendarObject();
        \$expectedCalendarObjectType = \$expectedCalendarObject->getType();
        \$expectedCalendarObjectFirstDayOfWeek = \$expectedCalendarObject->getFirstDayOfWeek();
        \$expectedCalendarObjectMinimalDaysInFirstWeek = \$expectedCalendarObject->getMinimalDaysInFirstWeek();
        \$expectedCalendarObjectRepeatedWallTimeOption = \$expectedCalendarObject->getRepeatedWallTimeOption();
        \$expectedCalendarObjectSkippedWallTimeOption = \$expectedCalendarObject->getSkippedWallTimeOption();
        \$expectedCalendarObjectTime = \$expectedCalendarObject->getTime().'.0';
        \$expectedCalendarObjectInDaylightTime = \$expectedCalendarObject->inDaylightTime() ? 'true' : 'false';
        \$expectedCalendarObjectIsLenient = \$expectedCalendarObject->isLenient() ? 'true' : 'false';

        \$expectedCalendarObjectTimeZone = \$expectedCalendarObject->getTimeZone();
        \$expectedCalendarObjectTimeZoneDisplayName = \$expectedCalendarObjectTimeZone->getDisplayName();
        \$expectedCalendarObjectTimeZoneID = \$expectedCalendarObjectTimeZone->getID();
        \$expectedCalendarObjectTimeZoneRawOffset = \$expectedCalendarObjectTimeZone->getRawOffset();
        \$expectedCalendarObjectTimeZoneDSTSavings = \$expectedTimeZone->useDaylightTime() ? \"\\n      dst_savings: \".\$expectedCalendarObjectTimeZone->getDSTSavings() : '';

        \$expected = <<<EOTXT
IntlDateFormatter {
  locale: \"\$expectedLocale\"
  pattern: \"\$expectedPattern\"
  calendar: \$expectedCalendar
  time_zone_id: \"\$expectedTimeZoneId\"
  time_type: \$expectedTimeType
  date_type: \$expectedDateType
  calendar_object: IntlGregorianCalendar {
    type: \"\$expectedCalendarObjectType\"
    first_day_of_week: \$expectedCalendarObjectFirstDayOfWeek
    minimal_days_in_first_week: \$expectedCalendarObjectMinimalDaysInFirstWeek
    repeated_wall_time_option: \$expectedCalendarObjectRepeatedWallTimeOption
    skipped_wall_time_option: \$expectedCalendarObjectSkippedWallTimeOption
    time: \$expectedCalendarObjectTime
    in_daylight_time: \$expectedCalendarObjectInDaylightTime
    is_lenient: \$expectedCalendarObjectIsLenient
    time_zone: IntlTimeZone {
      display_name: \"\$expectedCalendarObjectTimeZoneDisplayName\"
      id: \"\$expectedCalendarObjectTimeZoneID\"
      raw_offset: \$expectedCalendarObjectTimeZoneRawOffset\$expectedCalendarObjectTimeZoneDSTSavings
    }
  }
  time_zone: IntlTimeZone {
    display_name: \"\$expectedTimeZoneDisplayName\"
    id: \"\$expectedTimeZoneID\"
    raw_offset: \$expectedTimeZoneRawOffset\$expectedTimeZoneDSTSavings
  }
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/IntlCasterTest.php");
    }
}
