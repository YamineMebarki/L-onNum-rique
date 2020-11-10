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

/* vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php */
class __TwigTemplate_dad24521ee30b70f598b720c82b6c1c90ca5e29a7789da24c98253118eef840f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class DateTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType';

    private \$defaultTimezone;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->defaultTimezone = date_default_timezone_get();
        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        date_default_timezone_set(\$this->defaultTimezone);
        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testInvalidWidgetOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'fake_widget',
        ]);
    }

    public function testInvalidInputOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'fake_input',
        ]);
    }

    public function testSubmitFromSingleTextDateTimeWithDefaultFormat()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('2010-06-02');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('2010-06-02', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTimeWithCustomFormat()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
            'format' => 'yyyy',
            'html5' => false,
        ]);

        \$form->submit('2010');

        \$this->assertEquals(new \\DateTime('2010-01-01 UTC'), \$form->getData());
        \$this->assertEquals('2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTime()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTimeImmutable()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime_immutable',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertInstanceOf(\\DateTimeImmutable::class, \$form->getData());
        \$this->assertEquals(new \\DateTimeImmutable('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextString()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'string',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertEquals('2010-06-02', \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextTimestamp()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'timestamp',
        ]);

        \$form->submit('2.6.2010');

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime->format('U'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextRaw()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'array',
        ]);

        \$form->submit('2.6.2010');

        \$output = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$this->assertEquals(\$output, \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'text',
        ]);

        \$text = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$form->submit(\$text);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromChoice()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
            'years' => [2010],
        ]);

        \$text = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$form->submit(\$text);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromChoiceEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
            'required' => false,
        ]);

        \$text = [
            'day' => '',
            'month' => '',
            'year' => '',
        ];

        \$form->submit(\$text);

        \$this->assertNull(\$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromInputDateTimeDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('06*2010*02');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputStringDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'string',
        ]);

        \$form->submit('06*2010*02');

        \$this->assertEquals('2010-06-02', \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputTimestampDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'timestamp',
        ]);

        \$form->submit('06*2010*02');

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime->format('U'), \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputRawDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'array',
        ]);

        \$form->submit('06*2010*02');

        \$output = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$this->assertEquals(\$output, \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    /**
     * @dataProvider provideDateFormats
     */
    public function testDatePatternWithFormatOption(\$format, \$pattern)
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \$format,
        ])
            ->createView();

        \$this->assertEquals(\$pattern, \$view->vars['date_pattern']);
    }

    public function provideDateFormats()
    {
        return [
            ['dMy', '";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 363, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 363, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 363, $this->source); })()), "html", null, true);
        echo "'],
            ['d-M-yyyy', '";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 364, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 364, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 364, $this->source); })()), "html", null, true);
        echo "'],
            ['M d y', '";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 365, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 365, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 365, $this->source); })()), "html", null, true);
        echo "'],
        ];
    }

    /**
     * This test is to check that the strings '0', '1', '2', '3' are not accepted
     * as valid IntlDateFormatter constants for FULL, LONG, MEDIUM or SHORT respectively.
     */
    public function testThrowExceptionIfFormatIsNoPattern()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => '0',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'string',
        ]);
    }

    public function testThrowExceptionIfFormatDoesNotContainYearMonthAndDay()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The \"format\" option should contain the letters \"y\", \"M\" and \"d\". Its current value is \"yy\".');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [6, 7],
            'format' => 'yy',
        ]);
    }

    public function testThrowExceptionIfFormatMissesYearMonthAndDayWithSingleTextWidget()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The \"format\" option should contain the letters \"y\", \"M\" or \"d\". Its current value is \"wrong\".');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'format' => 'wrong',
            'html5' => false,
        ]);
    }

    public function testThrowExceptionIfFormatIsNoConstant()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 105,
        ]);
    }

    public function testThrowExceptionIfFormatIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => [],
        ]);
    }

    public function testThrowExceptionIfYearsIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => 'bad value',
        ]);
    }

    public function testThrowExceptionIfMonthsIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => 'bad value',
        ]);
    }

    public function testThrowExceptionIfDaysIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'days' => 'bad value',
        ]);
    }

    public function testSetDataWithNegativeTimezoneOffsetStringInput()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'America/New_York',
            'input' => 'string',
            'widget' => 'single_text',
        ]);

        \$form->setData('2010-06-02');

        // 2010-06-02 00:00:00 UTC
        // 2010-06-01 20:00:00 UTC-4
        \$this->assertEquals('01.06.2010', \$form->getViewData());
    }

    public function testSetDataWithNegativeTimezoneOffsetDateTimeInput()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'America/New_York',
            'input' => 'datetime',
            'widget' => 'single_text',
        ]);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$form->setData(\$dateTime);

        // 2010-06-02 00:00:00 UTC
        // 2010-06-01 20:00:00 UTC-4
        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals('01.06.2010', \$form->getViewData());
    }

    public function testYearsOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => [2010, 2011],
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView('2010', '2010', '2010'),
            new ChoiceView('2011', '2011', '2011'),
        ], \$view['year']->vars['choices']);
    }

    public function testMonthsOption()
    {
        \\Locale::setDefault('en');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [6, 7],
            'format' => \\IntlDateFormatter::SHORT,
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView(6, '6', '6'),
            new ChoiceView(7, '7', '7'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionShortFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '57.1');

        \\Locale::setDefault('de_AT');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMM.yy',
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jän.'),
            new ChoiceView(4, '4', 'Apr.'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionLongFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMMM.yy',
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jänner'),
            new ChoiceView(4, '4', 'April'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionLongFormatWithDifferentTimezone()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMMM.yy',
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jänner'),
            new ChoiceView(4, '4', 'April'),
        ], \$view['month']->vars['choices']);
    }

    public function testIsDayWithinRangeReturnsTrueIfWithin()
    {
        \\Locale::setDefault('en');
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'days' => [6, 7],
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(6, '6', '6'),
            new ChoiceView(7, '7', '7'),
        ], \$view['day']->vars['choices']);
    }

    public function testIsSynchronizedReturnsTrueIfChoiceAndCompletelyEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '',
            'month' => '',
            'year' => '',
        ]);

        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testIsSynchronizedReturnsTrueIfChoiceAndCompletelyFilled()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, new \\DateTime(), [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '1',
            'month' => '6',
            'year' => '2010',
        ]);

        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testIsSynchronizedReturnsFalseIfChoiceAndDayEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '',
            'month' => '6',
            'year' => '2010',
        ]);

        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testPassDatePatternToView()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE)
            ->createView();

        \$this->assertSame('";
        // line 657
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 657, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 657, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 657, $this->source); })()), "html", null, true);
        echo "', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::LONG,
        ])
            ->createView();

        \$this->assertSame('";
        // line 672
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 672, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 672, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 672, $this->source); })()), "html", null, true);
        echo "', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentPattern()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 'MMyyyydd',
        ])
            ->createView();

        \$this->assertSame('";
        // line 682
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 682, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 682, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 682, $this->source); })()), "html", null, true);
        echo "', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentPatternWithSeparators()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 'MM*yyyy*dd',
        ])
            ->createView();

        \$this->assertSame('";
        // line 692
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 692, $this->source); })()), "html", null, true);
        echo "*";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 692, $this->source); })()), "html", null, true);
        echo "*";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 692, $this->source); })()), "html", null, true);
        echo "', \$view->vars['date_pattern']);
    }

    public function testDontPassDatePatternIfText()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertArrayNotHasKey('date_pattern', \$view->vars);
    }

    public function testDatePatternFormatWithQuotedStrings()
    {
        // we test against \"es_ES\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('es_ES');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            // EEEE, d 'de' MMMM 'de' y
            'format' => \\IntlDateFormatter::FULL,
        ])
            ->createView();

        \$this->assertEquals('";
        // line 718
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 718, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 718, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 718, $this->source); })()), "html", null, true);
        echo "', \$view->vars['date_pattern']);
    }

    public function testPassWidgetToView()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertSame('single_text', \$view->vars['widget']);
    }

    public function testInitializeWithDateTime()
    {
        // Throws an exception if \"data_class\" option is not explicitly set
        // to null in the type
        \$this->assertInstanceOf('Symfony\\Component\\Form\\FormInterface', \$this->factory->create(static::TESTED_TYPE, new \\DateTime()));
    }

    public function testSingleTextWidgetShouldUseTheRightInputType()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertEquals('date', \$view->vars['type']);
    }

    public function testPassDefaultPlaceholderToViewIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
        ])
            ->createView();

        \$this->assertSame('', \$view['year']->vars['placeholder']);
        \$this->assertSame('', \$view['month']->vars['placeholder']);
        \$this->assertSame('', \$view['day']->vars['placeholder']);
    }

    public function testPassNoPlaceholderToViewIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
        ])
            ->createView();

        \$this->assertNull(\$view['year']->vars['placeholder']);
        \$this->assertNull(\$view['month']->vars['placeholder']);
        \$this->assertNull(\$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsString()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => 'Empty',
        ])
            ->createView();

        \$this->assertSame('Empty', \$view['year']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsArray()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => [
                'year' => 'Empty year',
                'month' => 'Empty month',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertSame('Empty month', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddEmptyIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'placeholder' => [
                'year' => 'Empty year',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertSame('', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddNullIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'placeholder' => [
                'year' => 'Empty year',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertNull(\$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassHtml5TypeIfSingleTextAndHtml5Format()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertSame('date', \$view->vars['type']);
    }

    public function testDontPassHtml5TypeIfHtml5NotAllowed()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'html5' => false,
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function testDontPassHtml5TypeIfNotHtml5Format()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function testDontPassHtml5TypeIfNotSingleText()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'text',
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function provideCompoundWidgets()
    {
        return [
            ['text'],
            ['choice'],
        ];
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testYearErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['year']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['year']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testMonthErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['month']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['month']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testDayErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['day']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['day']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    public function testYearsFor32BitsMachines()
    {
        if (4 !== PHP_INT_SIZE) {
            \$this->markTestSkipped('PHP 32 bit is required.');
        }

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => range(1900, 2040),
        ])
            ->createView();

        \$listChoices = [];
        foreach (range(1902, 2037) as \$y) {
            \$listChoices[] = new ChoiceView(\$y, \$y, \$y);
        }

        \$this->assertEquals(\$listChoices, \$view['year']->vars['choices']);
    }

    public function testPassDefaultChoiceTranslationDomain()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);

        \$view = \$form->createView();
        \$this->assertFalse(\$view['year']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['month']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['day']->vars['choice_translation_domain']);
    }

    public function testPassChoiceTranslationDomainAsString()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'choice_translation_domain' => 'messages',
        ]);

        \$view = \$form->createView();
        \$this->assertSame('messages', \$view['year']->vars['choice_translation_domain']);
        \$this->assertSame('messages', \$view['month']->vars['choice_translation_domain']);
        \$this->assertSame('messages', \$view['day']->vars['choice_translation_domain']);
    }

    public function testPassChoiceTranslationDomainAsArray()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'choice_translation_domain' => [
                'year' => 'foo',
                'day' => 'test',
            ],
        ]);

        \$view = \$form->createView();
        \$this->assertSame('foo', \$view['year']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['month']->vars['choice_translation_domain']);
        \$this->assertSame('test', \$view['day']->vars['choice_translation_domain']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, ['year' => '', 'month' => '', 'day' => '']);
    }

    public function testSubmitNullWithSingleText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ]);
        \$form->submit(null);

        \$this->assertNull(\$form->getData());
        \$this->assertNull(\$form->getNormData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = null)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // view transformer writes back empty strings in the view data
        \$this->assertSame(['year' => '', 'month' => '', 'day' => ''], \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    /**
     * @dataProvider provideEmptyData
     */
    public function testSubmitNullUsesDateEmptyData(\$widget, \$emptyData, \$expectedData)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertEquals(\$expectedData, \$form->getNormData());
        \$this->assertEquals(\$expectedData, \$form->getData());
    }

    public function provideEmptyData()
    {
        \$expectedData = \\DateTime::createFromFormat('Y-m-d H:i:s', '2018-11-11 00:00:00');

        return [
            'Simple field' => ['single_text', '2018-11-11', \$expectedData],
            'Compound text fields' => ['text', ['year' => '2018', 'month' => '11', 'day' => '11'], \$expectedData],
            'Compound choice fields' => ['choice', ['year' => '2018', 'month' => '11', 'day' => '11'], \$expectedData],
        ];
    }

    public function testSubmitStringWithCustomInputFormat(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'string',
            'input_format' => 'd/m/Y',
        ]);

        \$form->submit('2018-01-14');

        \$this->assertSame('14/01/2018', \$form->getData());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  803 => 718,  770 => 692,  755 => 682,  740 => 672,  720 => 657,  421 => 365,  413 => 364,  407 => 363,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class DateTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType';

    private \$defaultTimezone;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->defaultTimezone = date_default_timezone_get();
        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        date_default_timezone_set(\$this->defaultTimezone);
        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testInvalidWidgetOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'fake_widget',
        ]);
    }

    public function testInvalidInputOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'fake_input',
        ]);
    }

    public function testSubmitFromSingleTextDateTimeWithDefaultFormat()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('2010-06-02');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('2010-06-02', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTimeWithCustomFormat()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
            'format' => 'yyyy',
            'html5' => false,
        ]);

        \$form->submit('2010');

        \$this->assertEquals(new \\DateTime('2010-01-01 UTC'), \$form->getData());
        \$this->assertEquals('2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTime()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextDateTimeImmutable()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'datetime_immutable',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertInstanceOf(\\DateTimeImmutable::class, \$form->getData());
        \$this->assertEquals(new \\DateTimeImmutable('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextString()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'string',
        ]);

        \$form->submit('2.6.2010');

        \$this->assertEquals('2010-06-02', \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextTimestamp()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'timestamp',
        ]);

        \$form->submit('2.6.2010');

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime->format('U'), \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromSingleTextRaw()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'array',
        ]);

        \$form->submit('2.6.2010');

        \$output = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$this->assertEquals(\$output, \$form->getData());
        \$this->assertEquals('02.06.2010', \$form->getViewData());
    }

    public function testSubmitFromText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'text',
        ]);

        \$text = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$form->submit(\$text);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromChoice()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
            'years' => [2010],
        ]);

        \$text = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$form->submit(\$text);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromChoiceEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
            'required' => false,
        ]);

        \$text = [
            'day' => '',
            'month' => '',
            'year' => '',
        ];

        \$form->submit(\$text);

        \$this->assertNull(\$form->getData());
        \$this->assertEquals(\$text, \$form->getViewData());
    }

    public function testSubmitFromInputDateTimeDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'datetime',
        ]);

        \$form->submit('06*2010*02');

        \$this->assertEquals(new \\DateTime('2010-06-02 UTC'), \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputStringDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'string',
        ]);

        \$form->submit('06*2010*02');

        \$this->assertEquals('2010-06-02', \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputTimestampDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'timestamp',
        ]);

        \$form->submit('06*2010*02');

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$this->assertEquals(\$dateTime->format('U'), \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    public function testSubmitFromInputRawDifferentPattern()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'format' => 'MM*yyyy*dd',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'array',
        ]);

        \$form->submit('06*2010*02');

        \$output = [
            'day' => '2',
            'month' => '6',
            'year' => '2010',
        ];

        \$this->assertEquals(\$output, \$form->getData());
        \$this->assertEquals('06*2010*02', \$form->getViewData());
    }

    /**
     * @dataProvider provideDateFormats
     */
    public function testDatePatternWithFormatOption(\$format, \$pattern)
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \$format,
        ])
            ->createView();

        \$this->assertEquals(\$pattern, \$view->vars['date_pattern']);
    }

    public function provideDateFormats()
    {
        return [
            ['dMy', '{{ day }}{{ month }}{{ year }}'],
            ['d-M-yyyy', '{{ day }}-{{ month }}-{{ year }}'],
            ['M d y', '{{ month }} {{ day }} {{ year }}'],
        ];
    }

    /**
     * This test is to check that the strings '0', '1', '2', '3' are not accepted
     * as valid IntlDateFormatter constants for FULL, LONG, MEDIUM or SHORT respectively.
     */
    public function testThrowExceptionIfFormatIsNoPattern()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => '0',
            'html5' => false,
            'widget' => 'single_text',
            'input' => 'string',
        ]);
    }

    public function testThrowExceptionIfFormatDoesNotContainYearMonthAndDay()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The \"format\" option should contain the letters \"y\", \"M\" and \"d\". Its current value is \"yy\".');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [6, 7],
            'format' => 'yy',
        ]);
    }

    public function testThrowExceptionIfFormatMissesYearMonthAndDayWithSingleTextWidget()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The \"format\" option should contain the letters \"y\", \"M\" or \"d\". Its current value is \"wrong\".');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'format' => 'wrong',
            'html5' => false,
        ]);
    }

    public function testThrowExceptionIfFormatIsNoConstant()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 105,
        ]);
    }

    public function testThrowExceptionIfFormatIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => [],
        ]);
    }

    public function testThrowExceptionIfYearsIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => 'bad value',
        ]);
    }

    public function testThrowExceptionIfMonthsIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => 'bad value',
        ]);
    }

    public function testThrowExceptionIfDaysIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'days' => 'bad value',
        ]);
    }

    public function testSetDataWithNegativeTimezoneOffsetStringInput()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'America/New_York',
            'input' => 'string',
            'widget' => 'single_text',
        ]);

        \$form->setData('2010-06-02');

        // 2010-06-02 00:00:00 UTC
        // 2010-06-01 20:00:00 UTC-4
        \$this->assertEquals('01.06.2010', \$form->getViewData());
    }

    public function testSetDataWithNegativeTimezoneOffsetDateTimeInput()
    {
        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_DE');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
            'model_timezone' => 'UTC',
            'view_timezone' => 'America/New_York',
            'input' => 'datetime',
            'widget' => 'single_text',
        ]);

        \$dateTime = new \\DateTime('2010-06-02 UTC');

        \$form->setData(\$dateTime);

        // 2010-06-02 00:00:00 UTC
        // 2010-06-01 20:00:00 UTC-4
        \$this->assertEquals(\$dateTime, \$form->getData());
        \$this->assertEquals('01.06.2010', \$form->getViewData());
    }

    public function testYearsOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => [2010, 2011],
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView('2010', '2010', '2010'),
            new ChoiceView('2011', '2011', '2011'),
        ], \$view['year']->vars['choices']);
    }

    public function testMonthsOption()
    {
        \\Locale::setDefault('en');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [6, 7],
            'format' => \\IntlDateFormatter::SHORT,
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView(6, '6', '6'),
            new ChoiceView(7, '7', '7'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionShortFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, '57.1');

        \\Locale::setDefault('de_AT');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMM.yy',
        ]);

        \$view = \$form->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jän.'),
            new ChoiceView(4, '4', 'Apr.'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionLongFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMMM.yy',
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jänner'),
            new ChoiceView(4, '4', 'April'),
        ], \$view['month']->vars['choices']);
    }

    public function testMonthsOptionLongFormatWithDifferentTimezone()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'months' => [1, 4],
            'format' => 'dd.MMMM.yy',
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(1, '1', 'Jänner'),
            new ChoiceView(4, '4', 'April'),
        ], \$view['month']->vars['choices']);
    }

    public function testIsDayWithinRangeReturnsTrueIfWithin()
    {
        \\Locale::setDefault('en');
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'days' => [6, 7],
        ])
            ->createView();

        \$this->assertEquals([
            new ChoiceView(6, '6', '6'),
            new ChoiceView(7, '7', '7'),
        ], \$view['day']->vars['choices']);
    }

    public function testIsSynchronizedReturnsTrueIfChoiceAndCompletelyEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '',
            'month' => '',
            'year' => '',
        ]);

        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testIsSynchronizedReturnsTrueIfChoiceAndCompletelyFilled()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, new \\DateTime(), [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '1',
            'month' => '6',
            'year' => '2010',
        ]);

        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testIsSynchronizedReturnsFalseIfChoiceAndDayEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'choice',
        ]);

        \$form->submit([
            'day' => '',
            'month' => '6',
            'year' => '2010',
        ]);

        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testPassDatePatternToView()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE)
            ->createView();

        \$this->assertSame('{{ day }}{{ month }}{{ year }}', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentFormat()
    {
        // we test against \"de_AT\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => \\IntlDateFormatter::LONG,
        ])
            ->createView();

        \$this->assertSame('{{ day }}{{ month }}{{ year }}', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentPattern()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 'MMyyyydd',
        ])
            ->createView();

        \$this->assertSame('{{ month }}{{ year }}{{ day }}', \$view->vars['date_pattern']);
    }

    public function testPassDatePatternToViewDifferentPatternWithSeparators()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'format' => 'MM*yyyy*dd',
        ])
            ->createView();

        \$this->assertSame('{{ month }}*{{ year }}*{{ day }}', \$view->vars['date_pattern']);
    }

    public function testDontPassDatePatternIfText()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertArrayNotHasKey('date_pattern', \$view->vars);
    }

    public function testDatePatternFormatWithQuotedStrings()
    {
        // we test against \"es_ES\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('es_ES');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            // EEEE, d 'de' MMMM 'de' y
            'format' => \\IntlDateFormatter::FULL,
        ])
            ->createView();

        \$this->assertEquals('{{ day }}{{ month }}{{ year }}', \$view->vars['date_pattern']);
    }

    public function testPassWidgetToView()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertSame('single_text', \$view->vars['widget']);
    }

    public function testInitializeWithDateTime()
    {
        // Throws an exception if \"data_class\" option is not explicitly set
        // to null in the type
        \$this->assertInstanceOf('Symfony\\Component\\Form\\FormInterface', \$this->factory->create(static::TESTED_TYPE, new \\DateTime()));
    }

    public function testSingleTextWidgetShouldUseTheRightInputType()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertEquals('date', \$view->vars['type']);
    }

    public function testPassDefaultPlaceholderToViewIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
        ])
            ->createView();

        \$this->assertSame('', \$view['year']->vars['placeholder']);
        \$this->assertSame('', \$view['month']->vars['placeholder']);
        \$this->assertSame('', \$view['day']->vars['placeholder']);
    }

    public function testPassNoPlaceholderToViewIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
        ])
            ->createView();

        \$this->assertNull(\$view['year']->vars['placeholder']);
        \$this->assertNull(\$view['month']->vars['placeholder']);
        \$this->assertNull(\$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsString()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => 'Empty',
        ])
            ->createView();

        \$this->assertSame('Empty', \$view['year']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsArray()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => [
                'year' => 'Empty year',
                'month' => 'Empty month',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertSame('Empty month', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddEmptyIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'placeholder' => [
                'year' => 'Empty year',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertSame('', \$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddNullIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'placeholder' => [
                'year' => 'Empty year',
                'day' => 'Empty day',
            ],
        ])
            ->createView();

        \$this->assertSame('Empty year', \$view['year']->vars['placeholder']);
        \$this->assertNull(\$view['month']->vars['placeholder']);
        \$this->assertSame('Empty day', \$view['day']->vars['placeholder']);
    }

    public function testPassHtml5TypeIfSingleTextAndHtml5Format()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ])
            ->createView();

        \$this->assertSame('date', \$view->vars['type']);
    }

    public function testDontPassHtml5TypeIfHtml5NotAllowed()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'html5' => false,
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function testDontPassHtml5TypeIfNotHtml5Format()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
            'format' => \\IntlDateFormatter::MEDIUM,
            'html5' => false,
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function testDontPassHtml5TypeIfNotSingleText()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'text',
        ])
            ->createView();

        \$this->assertArrayNotHasKey('type', \$view->vars);
    }

    public function provideCompoundWidgets()
    {
        return [
            ['text'],
            ['choice'],
        ];
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testYearErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['year']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['year']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testMonthErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['month']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['month']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    /**
     * @dataProvider provideCompoundWidgets
     */
    public function testDayErrorsBubbleUp(\$widget)
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
        ]);
        \$form['day']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['day']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    public function testYearsFor32BitsMachines()
    {
        if (4 !== PHP_INT_SIZE) {
            \$this->markTestSkipped('PHP 32 bit is required.');
        }

        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'years' => range(1900, 2040),
        ])
            ->createView();

        \$listChoices = [];
        foreach (range(1902, 2037) as \$y) {
            \$listChoices[] = new ChoiceView(\$y, \$y, \$y);
        }

        \$this->assertEquals(\$listChoices, \$view['year']->vars['choices']);
    }

    public function testPassDefaultChoiceTranslationDomain()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);

        \$view = \$form->createView();
        \$this->assertFalse(\$view['year']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['month']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['day']->vars['choice_translation_domain']);
    }

    public function testPassChoiceTranslationDomainAsString()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'choice_translation_domain' => 'messages',
        ]);

        \$view = \$form->createView();
        \$this->assertSame('messages', \$view['year']->vars['choice_translation_domain']);
        \$this->assertSame('messages', \$view['month']->vars['choice_translation_domain']);
        \$this->assertSame('messages', \$view['day']->vars['choice_translation_domain']);
    }

    public function testPassChoiceTranslationDomainAsArray()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'choice_translation_domain' => [
                'year' => 'foo',
                'day' => 'test',
            ],
        ]);

        \$view = \$form->createView();
        \$this->assertSame('foo', \$view['year']->vars['choice_translation_domain']);
        \$this->assertFalse(\$view['month']->vars['choice_translation_domain']);
        \$this->assertSame('test', \$view['day']->vars['choice_translation_domain']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, ['year' => '', 'month' => '', 'day' => '']);
    }

    public function testSubmitNullWithSingleText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'single_text',
        ]);
        \$form->submit(null);

        \$this->assertNull(\$form->getData());
        \$this->assertNull(\$form->getNormData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = null)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // view transformer writes back empty strings in the view data
        \$this->assertSame(['year' => '', 'month' => '', 'day' => ''], \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    /**
     * @dataProvider provideEmptyData
     */
    public function testSubmitNullUsesDateEmptyData(\$widget, \$emptyData, \$expectedData)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => \$widget,
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertEquals(\$expectedData, \$form->getNormData());
        \$this->assertEquals(\$expectedData, \$form->getData());
    }

    public function provideEmptyData()
    {
        \$expectedData = \\DateTime::createFromFormat('Y-m-d H:i:s', '2018-11-11 00:00:00');

        return [
            'Simple field' => ['single_text', '2018-11-11', \$expectedData],
            'Compound text fields' => ['text', ['year' => '2018', 'month' => '11', 'day' => '11'], \$expectedData],
            'Compound choice fields' => ['choice', ['year' => '2018', 'month' => '11', 'day' => '11'], \$expectedData],
        ];
    }

    public function testSubmitStringWithCustomInputFormat(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'widget' => 'single_text',
            'input' => 'string',
            'input_format' => 'd/m/Y',
        ]);

        \$form->submit('2018-01-14');

        \$this->assertSame('14/01/2018', \$form->getData());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/DateTypeTest.php");
    }
}
