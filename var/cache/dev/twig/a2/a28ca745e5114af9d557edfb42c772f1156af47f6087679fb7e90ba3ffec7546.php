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

/* vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php */
class __TwigTemplate_1bde76fdcc854330178d9eb552c4ce2e58fd6c4d8ff92e82421710a5a7a3ede9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Timezone;
use Symfony\\Component\\Validator\\Constraints\\TimezoneValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class TimezoneValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator(): TimezoneValidator
    {
        return new TimezoneValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Timezone());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Timezone());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Timezone());
    }

    /**
     * @dataProvider getValidTimezones
     */
    public function testValidTimezones(string \$timezone)
    {
        \$this->validator->validate(\$timezone, new Timezone());

        \$this->assertNoViolation();
    }

    public function getValidTimezones(): iterable
    {
        // ICU standard (alias/BC in PHP)
        yield ['Etc/UTC'];
        yield ['Etc/GMT'];
        yield ['America/Buenos_Aires'];

        // PHP standard (alias in ICU)
        yield ['UTC'];
        yield ['America/Argentina/Buenos_Aires'];

        // not deprecated in ICU
        yield ['CST6CDT'];
        yield ['EST5EDT'];
        yield ['MST7MDT'];
        yield ['PST8PDT'];
        yield ['America/Montreal'];

        // previously expired in ICU
        yield ['Europe/Saratov'];

        // standard
        yield ['America/Barbados'];
        yield ['America/Toronto'];
        yield ['Antarctica/Syowa'];
        yield ['Africa/Douala'];
        yield ['Atlantic/Canary'];
        yield ['Asia/Gaza'];
        yield ['Australia/Sydney'];
        yield ['Europe/Copenhagen'];
        yield ['Europe/Paris'];
        yield ['Pacific/Noumea'];
    }

    /**
     * @dataProvider getValidGroupedTimezones
     */
    public function testValidGroupedTimezones(string \$timezone, int \$zone)
    {
        \$constraint = new Timezone([
            'zone' => \$zone,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidGroupedTimezones(): iterable
    {
        yield ['America/Buenos_Aires', \\DateTimeZone::AMERICA | \\DateTimeZone::AUSTRALIA]; // icu
        yield ['America/Argentina/Buenos_Aires', \\DateTimeZone::AMERICA]; // php
        yield ['America/Argentina/Cordoba', \\DateTimeZone::AMERICA];
        yield ['America/Barbados', \\DateTimeZone::AMERICA];
        yield ['Africa/Cairo', \\DateTimeZone::AFRICA];
        yield ['Atlantic/Cape_Verde', \\DateTimeZone::ATLANTIC];
        yield ['Europe/Bratislava', \\DateTimeZone::EUROPE];
        yield ['Indian/Christmas', \\DateTimeZone::INDIAN];
        yield ['Pacific/Kiritimati', \\DateTimeZone::ALL];
        yield ['Pacific/Kiritimati', \\DateTimeZone::ALL_WITH_BC];
        yield ['Pacific/Kiritimati', \\DateTimeZone::PACIFIC];
        yield ['Arctic/Longyearbyen', \\DateTimeZone::ARCTIC];
        yield ['Asia/Beirut', \\DateTimeZone::ASIA];
        yield ['Atlantic/Bermuda', \\DateTimeZone::ASIA | \\DateTimeZone::ATLANTIC];
        yield ['Atlantic/Azores', \\DateTimeZone::ATLANTIC | \\DateTimeZone::ASIA];
    }

    /**
     * @dataProvider getInvalidTimezones
     */
    public function testInvalidTimezoneWithoutZone(string \$timezone)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_ERROR)
            ->assertRaised();
    }

    public function getInvalidTimezones(): iterable
    {
        yield ['Buenos_Aires/America'];
        yield ['Buenos_Aires/Argentina/America'];
        yield ['Mayotte/Indian'];
        yield ['foobar'];
    }

    /**
     * @dataProvider getInvalidGroupedTimezones
     */
    public function testInvalidGroupedTimezones(string \$timezone, int \$zone)
    {
        \$constraint = new Timezone([
            'zone' => \$zone,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR)
            ->assertRaised();
    }

    public function getInvalidGroupedTimezones(): iterable
    {
        yield ['America/Buenos_Aires', \\DateTimeZone::ASIA | \\DateTimeZone::AUSTRALIA]; // icu
        yield ['America/Argentina/Buenos_Aires', \\DateTimeZone::EUROPE]; // php
        yield ['Antarctica/McMurdo', \\DateTimeZone::AMERICA];
        yield ['America/Barbados', \\DateTimeZone::ANTARCTICA];
        yield ['Europe/Kiev', \\DateTimeZone::ARCTIC];
        yield ['Asia/Ho_Chi_Minh', \\DateTimeZone::INDIAN];
        yield ['Asia/Ho_Chi_Minh', \\DateTimeZone::INDIAN | \\DateTimeZone::ANTARCTICA];
        yield ['UTC', \\DateTimeZone::EUROPE];
        yield ['Etc/UTC', \\DateTimeZone::EUROPE];
    }

    /**
     * @dataProvider getValidGroupedTimezonesByCountry
     */
    public function testValidGroupedTimezonesByCountry(string \$timezone, string \$country)
    {
        \$constraint = new Timezone([
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => \$country,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidGroupedTimezonesByCountry(): iterable
    {
        yield ['America/Buenos_Aires', 'AR']; // icu
        yield ['America/Argentina/Buenos_Aires', 'AR']; // php
        yield ['America/Argentina/Cordoba', 'AR'];
        yield ['America/Barbados', 'BB'];
        yield ['Africa/Cairo', 'EG'];
        yield ['Arctic/Longyearbyen', 'SJ'];
        yield ['Asia/Beirut', 'LB'];
        yield ['Atlantic/Azores', 'PT'];
        yield ['Atlantic/Bermuda', 'BM'];
        yield ['Atlantic/Cape_Verde', 'CV'];
        yield ['Australia/Sydney', 'AU'];
        yield ['Australia/Melbourne', 'AU'];
        yield ['Europe/Bratislava', 'SK'];
        yield ['Europe/Paris', 'FR'];
        yield ['Europe/Madrid', 'ES'];
        yield ['Europe/Monaco', 'MC'];
        yield ['Indian/Christmas', 'CX'];
        yield ['Pacific/Kiritimati', 'KI'];
    }

    /**
     * @dataProvider getInvalidGroupedTimezonesByCountry
     */
    public function testInvalidGroupedTimezonesByCountry(string \$timezone, string \$countryCode)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => \$countryCode,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 233, $this->source); })()), "html", null, true);
        echo "', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR)
            ->assertRaised();
    }

    public function getInvalidGroupedTimezonesByCountry(): iterable
    {
        yield ['America/Argentina/Cordoba', 'FR'];
        yield ['America/Barbados', 'PT'];
        yield ['Europe/Bern', 'FR'];
        yield ['Etc/UTC', 'NL'];
        yield ['Europe/Amsterdam', 'AC']; // \"AC\" has no timezones, but is a valid country code
    }

    public function testGroupedTimezonesWithInvalidCountry()
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => 'foobar',
        ]);

        \$this->validator->validate('Europe/Amsterdam', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo "', '\"Europe/Amsterdam\"')
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getDeprecatedTimezones
     */
    public function testDeprecatedTimezonesAreValidWithBC(string \$timezone)
    {
        \$constraint = new Timezone(\\DateTimeZone::ALL_WITH_BC);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getDeprecatedTimezones
     */
    public function testDeprecatedTimezonesAreInvalidWithoutBC(string \$timezone)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_ERROR)
            ->assertRaised();
    }

    public function getDeprecatedTimezones(): iterable
    {
        yield ['Australia/ACT'];
        yield ['Australia/LHI'];
        yield ['Australia/Queensland'];
        yield ['Canada/Eastern'];
        yield ['Canada/Central'];
        yield ['Canada/Mountain'];
        yield ['Canada/Pacific'];
        yield ['CET'];
        yield ['GMT'];
        yield ['Etc/Greenwich'];
        yield ['Etc/UCT'];
        yield ['Etc/Universal'];
        yield ['Etc/Zulu'];
        yield ['US/Pacific'];
    }

    /**
     * @requires extension intl
     */
    public function testIntlCompatibility()
    {
        \$reflector = new \\ReflectionExtension('intl');
        ob_start();
        \$reflector->info();
        \$output = strip_tags(ob_get_clean());
        preg_match('/^ICU TZData version (?:=>)?(.*)\$/m', \$output, \$matches);
        \$tzDbVersion = isset(\$matches[1]) ? (int) trim(\$matches[1]) : 0;

        if (!\$tzDbVersion || 2017 <= \$tzDbVersion) {
            \$this->markTestSkipped('\"Europe/Saratov\" is expired until 2017, current version is '.\$tzDbVersion);
        }

        \$constraint = new Timezone([
            'message' => 'myMessage',
            'intlCompatible' => true,
        ]);

        \$this->validator->validate('Europe/Saratov', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 334, $this->source); })()), "html", null, true);
        echo "', '\"Europe/Saratov\"')
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_INTL_ERROR)
            ->assertRaised();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 334,  343 => 287,  311 => 258,  283 => 233,  211 => 164,  182 => 138,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Timezone;
use Symfony\\Component\\Validator\\Constraints\\TimezoneValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class TimezoneValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator(): TimezoneValidator
    {
        return new TimezoneValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Timezone());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Timezone());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Timezone());
    }

    /**
     * @dataProvider getValidTimezones
     */
    public function testValidTimezones(string \$timezone)
    {
        \$this->validator->validate(\$timezone, new Timezone());

        \$this->assertNoViolation();
    }

    public function getValidTimezones(): iterable
    {
        // ICU standard (alias/BC in PHP)
        yield ['Etc/UTC'];
        yield ['Etc/GMT'];
        yield ['America/Buenos_Aires'];

        // PHP standard (alias in ICU)
        yield ['UTC'];
        yield ['America/Argentina/Buenos_Aires'];

        // not deprecated in ICU
        yield ['CST6CDT'];
        yield ['EST5EDT'];
        yield ['MST7MDT'];
        yield ['PST8PDT'];
        yield ['America/Montreal'];

        // previously expired in ICU
        yield ['Europe/Saratov'];

        // standard
        yield ['America/Barbados'];
        yield ['America/Toronto'];
        yield ['Antarctica/Syowa'];
        yield ['Africa/Douala'];
        yield ['Atlantic/Canary'];
        yield ['Asia/Gaza'];
        yield ['Australia/Sydney'];
        yield ['Europe/Copenhagen'];
        yield ['Europe/Paris'];
        yield ['Pacific/Noumea'];
    }

    /**
     * @dataProvider getValidGroupedTimezones
     */
    public function testValidGroupedTimezones(string \$timezone, int \$zone)
    {
        \$constraint = new Timezone([
            'zone' => \$zone,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidGroupedTimezones(): iterable
    {
        yield ['America/Buenos_Aires', \\DateTimeZone::AMERICA | \\DateTimeZone::AUSTRALIA]; // icu
        yield ['America/Argentina/Buenos_Aires', \\DateTimeZone::AMERICA]; // php
        yield ['America/Argentina/Cordoba', \\DateTimeZone::AMERICA];
        yield ['America/Barbados', \\DateTimeZone::AMERICA];
        yield ['Africa/Cairo', \\DateTimeZone::AFRICA];
        yield ['Atlantic/Cape_Verde', \\DateTimeZone::ATLANTIC];
        yield ['Europe/Bratislava', \\DateTimeZone::EUROPE];
        yield ['Indian/Christmas', \\DateTimeZone::INDIAN];
        yield ['Pacific/Kiritimati', \\DateTimeZone::ALL];
        yield ['Pacific/Kiritimati', \\DateTimeZone::ALL_WITH_BC];
        yield ['Pacific/Kiritimati', \\DateTimeZone::PACIFIC];
        yield ['Arctic/Longyearbyen', \\DateTimeZone::ARCTIC];
        yield ['Asia/Beirut', \\DateTimeZone::ASIA];
        yield ['Atlantic/Bermuda', \\DateTimeZone::ASIA | \\DateTimeZone::ATLANTIC];
        yield ['Atlantic/Azores', \\DateTimeZone::ATLANTIC | \\DateTimeZone::ASIA];
    }

    /**
     * @dataProvider getInvalidTimezones
     */
    public function testInvalidTimezoneWithoutZone(string \$timezone)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_ERROR)
            ->assertRaised();
    }

    public function getInvalidTimezones(): iterable
    {
        yield ['Buenos_Aires/America'];
        yield ['Buenos_Aires/Argentina/America'];
        yield ['Mayotte/Indian'];
        yield ['foobar'];
    }

    /**
     * @dataProvider getInvalidGroupedTimezones
     */
    public function testInvalidGroupedTimezones(string \$timezone, int \$zone)
    {
        \$constraint = new Timezone([
            'zone' => \$zone,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR)
            ->assertRaised();
    }

    public function getInvalidGroupedTimezones(): iterable
    {
        yield ['America/Buenos_Aires', \\DateTimeZone::ASIA | \\DateTimeZone::AUSTRALIA]; // icu
        yield ['America/Argentina/Buenos_Aires', \\DateTimeZone::EUROPE]; // php
        yield ['Antarctica/McMurdo', \\DateTimeZone::AMERICA];
        yield ['America/Barbados', \\DateTimeZone::ANTARCTICA];
        yield ['Europe/Kiev', \\DateTimeZone::ARCTIC];
        yield ['Asia/Ho_Chi_Minh', \\DateTimeZone::INDIAN];
        yield ['Asia/Ho_Chi_Minh', \\DateTimeZone::INDIAN | \\DateTimeZone::ANTARCTICA];
        yield ['UTC', \\DateTimeZone::EUROPE];
        yield ['Etc/UTC', \\DateTimeZone::EUROPE];
    }

    /**
     * @dataProvider getValidGroupedTimezonesByCountry
     */
    public function testValidGroupedTimezonesByCountry(string \$timezone, string \$country)
    {
        \$constraint = new Timezone([
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => \$country,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidGroupedTimezonesByCountry(): iterable
    {
        yield ['America/Buenos_Aires', 'AR']; // icu
        yield ['America/Argentina/Buenos_Aires', 'AR']; // php
        yield ['America/Argentina/Cordoba', 'AR'];
        yield ['America/Barbados', 'BB'];
        yield ['Africa/Cairo', 'EG'];
        yield ['Arctic/Longyearbyen', 'SJ'];
        yield ['Asia/Beirut', 'LB'];
        yield ['Atlantic/Azores', 'PT'];
        yield ['Atlantic/Bermuda', 'BM'];
        yield ['Atlantic/Cape_Verde', 'CV'];
        yield ['Australia/Sydney', 'AU'];
        yield ['Australia/Melbourne', 'AU'];
        yield ['Europe/Bratislava', 'SK'];
        yield ['Europe/Paris', 'FR'];
        yield ['Europe/Madrid', 'ES'];
        yield ['Europe/Monaco', 'MC'];
        yield ['Indian/Christmas', 'CX'];
        yield ['Pacific/Kiritimati', 'KI'];
    }

    /**
     * @dataProvider getInvalidGroupedTimezonesByCountry
     */
    public function testInvalidGroupedTimezonesByCountry(string \$timezone, string \$countryCode)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => \$countryCode,
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR)
            ->assertRaised();
    }

    public function getInvalidGroupedTimezonesByCountry(): iterable
    {
        yield ['America/Argentina/Cordoba', 'FR'];
        yield ['America/Barbados', 'PT'];
        yield ['Europe/Bern', 'FR'];
        yield ['Etc/UTC', 'NL'];
        yield ['Europe/Amsterdam', 'AC']; // \"AC\" has no timezones, but is a valid country code
    }

    public function testGroupedTimezonesWithInvalidCountry()
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => 'foobar',
        ]);

        \$this->validator->validate('Europe/Amsterdam', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"Europe/Amsterdam\"')
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getDeprecatedTimezones
     */
    public function testDeprecatedTimezonesAreValidWithBC(string \$timezone)
    {
        \$constraint = new Timezone(\\DateTimeZone::ALL_WITH_BC);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getDeprecatedTimezones
     */
    public function testDeprecatedTimezonesAreInvalidWithoutBC(string \$timezone)
    {
        \$constraint = new Timezone([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$timezone, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', sprintf('\"%s\"', \$timezone))
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_ERROR)
            ->assertRaised();
    }

    public function getDeprecatedTimezones(): iterable
    {
        yield ['Australia/ACT'];
        yield ['Australia/LHI'];
        yield ['Australia/Queensland'];
        yield ['Canada/Eastern'];
        yield ['Canada/Central'];
        yield ['Canada/Mountain'];
        yield ['Canada/Pacific'];
        yield ['CET'];
        yield ['GMT'];
        yield ['Etc/Greenwich'];
        yield ['Etc/UCT'];
        yield ['Etc/Universal'];
        yield ['Etc/Zulu'];
        yield ['US/Pacific'];
    }

    /**
     * @requires extension intl
     */
    public function testIntlCompatibility()
    {
        \$reflector = new \\ReflectionExtension('intl');
        ob_start();
        \$reflector->info();
        \$output = strip_tags(ob_get_clean());
        preg_match('/^ICU TZData version (?:=>)?(.*)\$/m', \$output, \$matches);
        \$tzDbVersion = isset(\$matches[1]) ? (int) trim(\$matches[1]) : 0;

        if (!\$tzDbVersion || 2017 <= \$tzDbVersion) {
            \$this->markTestSkipped('\"Europe/Saratov\" is expired until 2017, current version is '.\$tzDbVersion);
        }

        \$constraint = new Timezone([
            'message' => 'myMessage',
            'intlCompatible' => true,
        ]);

        \$this->validator->validate('Europe/Saratov', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"Europe/Saratov\"')
            ->setCode(Timezone::TIMEZONE_IDENTIFIER_INTL_ERROR)
            ->assertRaised();
    }
}
", "vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/TimezoneValidatorTest.php");
    }
}
