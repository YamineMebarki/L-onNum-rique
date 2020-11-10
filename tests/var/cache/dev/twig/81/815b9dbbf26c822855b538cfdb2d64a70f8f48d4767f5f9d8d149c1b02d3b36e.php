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

/* vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php */
class __TwigTemplate_23307d5098be944f7c34b346d7fc13b8abf8eb69e8a211bcdaca72628f5749ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php"));

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

use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateIntervalType;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormInterface;

class DateIntervalTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = DateIntervalType::class;

    public function testSubmitDateInterval()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'dateinterval']);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertDateIntervalEquals(new \\DateInterval('P7Y6M5D'), \$form->getData());
    }

    public function testSubmitString()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string']);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertSame('P7Y6M5D', \$form->getData());
    }

    public function testSubmitArray()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'array']);

        \$input = [
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ];

        \$form->submit(\$input);

        \$this->assertSame(\$input, \$form->getData());
    }

    public function testSubmitWithoutMonths()
    {
        \$interval = new \\DateInterval('P7Y5D');

        \$form = \$this->factory->create(static::TESTED_TYPE, \$interval, [
            'input' => 'dateinterval',
            'with_months' => false,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testSubmitWithTime()
    {
        \$interval = new \\DateInterval('P7Y6M5DT4H3M2S');
        \$form = \$this->factory->create(static::TESTED_TYPE, \$interval, [
            'input' => 'dateinterval',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'hours' => '4',
            'minutes' => '3',
            'seconds' => '2',
        ]);

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testSubmitWithWeeks()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, new \\DateInterval('P0Y'), [
            'input' => 'dateinterval',
            'with_years' => false,
            'with_months' => false,
            'with_weeks' => true,
            'with_days' => false,
        ]);

        \$form->submit([
            'weeks' => '30',
        ]);

        \$this->assertDateIntervalEquals(new \\DateInterval('P30W'), \$form->getData());
    }

    public function testSubmitWithInvert()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'dateinterval',
            'with_invert' => true,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'invert' => true,
        ]);

        \$interval = new \\DateInterval('P7Y6M5D');
        \$interval->invert = 1;

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
    }

    public function testSubmitStringSingleText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'string',
            'widget' => 'single_text',
        ]);

        \$interval = 'P7Y6M5D';

        \$form->submit(\$interval);

        \$this->assertSame(\$interval, \$form->getData());
        \$this->assertSame(\$interval, \$form->getViewData());
    }

    public function testSubmitStringSingleTextWithSeconds()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'string',
            'widget' => 'single_text',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$interval = 'P7Y6M5DT4H3M2S';

        \$form->submit(\$interval);

        \$this->assertSame(\$interval, \$form->getData());
        \$this->assertSame(\$interval, \$form->getViewData());
    }

    public function testSubmitArrayInteger()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'integer',
            'with_invert' => true,
        ]);

        \$years = '7';

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'invert' => true,
        ]);

        \$this->assertSame(\$years, \$form['years']->getData());
        \$this->assertSame(\$years, \$form['years']->getViewData());
    }

    public function testInitializeWithDateInterval()
    {
        // Throws an exception if \"data_class\" option is not explicitly set
        // to null in the type
        \$this->assertInstanceOf(FormInterface::class, \$this->factory->create(static::TESTED_TYPE, new \\DateInterval('P0Y')));
    }

    public function testPassDefaultPlaceholderToViewIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('', \$view['years']->vars['placeholder']);
        \$this->assertSame('', \$view['months']->vars['placeholder']);
        \$this->assertSame('', \$view['days']->vars['placeholder']);
        \$this->assertSame('', \$view['seconds']->vars['placeholder']);
    }

    public function testPassNoPlaceholderToViewIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertNull(\$view['years']->vars['placeholder']);
        \$this->assertNull(\$view['months']->vars['placeholder']);
        \$this->assertNull(\$view['days']->vars['placeholder']);
        \$this->assertNull(\$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsString()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => 'Empty',
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty', \$view['years']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsArray()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => [
                'years' => 'Empty years',
                'months' => 'Empty months',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'minutes' => 'Empty minutes',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertSame('Empty months', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertSame('Empty minutes', \$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddEmptyIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'placeholder' => [
                'years' => 'Empty years',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertSame('', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertSame('', \$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddNullIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'placeholder' => [
                'years' => 'Empty years',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertNull(\$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertNull(\$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testDateTypeChoiceErrorsBubbleUp()
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null);

        \$form['years']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['years']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    public function testTranslationsAreDisabledForChoiceWidget()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'choice',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$this->assertFalse(\$form->get('years')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('months')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('days')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('hours')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('minutes')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('seconds')->getConfig()->getOption('choice_translation_domain'));
    }

    public function testInvertDoesNotInheritRequiredOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'dateinterval',
            'with_invert' => true,
            'required' => true,
        ]);

        \$this->assertFalse(\$form->get('invert')->getConfig()->getOption('required'));
    }

    public function testCanChangeTimeFieldsLabels()
    {
        \$form = \$this->factory->create(
            static::TESTED_TYPE,
            null,
            [
                'required' => true,
                'with_invert' => true,
                'with_hours' => true,
                'with_minutes' => true,
                'with_seconds' => true,
                'labels' => [
                    'invert' => 'form.trans.invert',
                    'years' => 'form.trans.years',
                    'months' => 'form.trans.months',
                    'days' => 'form.trans.days',
                    'hours' => 'form.trans.hours',
                    'minutes' => 'form.trans.minutes',
                    'seconds' => 'form.trans.seconds',
                ],
            ]
        );

        \$view = \$form->createView();
        \$this->assertSame('form.trans.invert', \$view['invert']->vars['label']);
        \$this->assertSame('form.trans.years', \$view['years']->vars['label']);
        \$this->assertSame('form.trans.months', \$view['months']->vars['label']);
        \$this->assertSame('form.trans.days', \$view['days']->vars['label']);
        \$this->assertSame('form.trans.hours', \$view['hours']->vars['label']);
        \$this->assertSame('form.trans.minutes', \$view['minutes']->vars['label']);
        \$this->assertSame('form.trans.seconds', \$view['seconds']->vars['label']);
    }

    public function testInvertDefaultLabel()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['with_invert' => true]);

        \$view = \$form->createView();
        \$this->assertSame('Negative interval', \$view['invert']->vars['label']);

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'with_invert' => true,
            'labels' => ['invert' => null],
        ]);

        \$view = \$form->createView();
        \$this->assertSame('Negative interval', \$view['invert']->vars['label']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, [
            'years' => '',
            'months' => '',
            'days' => '',
        ]);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = null)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // view transformer writes back empty strings in the view data
        \$this->assertSame(['years' => '', 'months' => '', 'days' => ''], \$form->getViewData());
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
        \$expectedData = new \\DateInterval('P6Y4M');

        return [
            'Simple field' => ['single_text', 'P6Y4M0D', \$expectedData],
            'Compound text field' => ['text', ['years' => '06', 'months' => '04', 'days' => '00'], \$expectedData],
            'Compound integer field' => ['integer', ['years' => '6', 'months' => '4', 'days' => '0'], \$expectedData],
            'Compound choice field' => ['choice', ['years' => '6', 'months' => '4', 'days' => '0'], \$expectedData],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateIntervalType;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormInterface;

class DateIntervalTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = DateIntervalType::class;

    public function testSubmitDateInterval()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'dateinterval']);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertDateIntervalEquals(new \\DateInterval('P7Y6M5D'), \$form->getData());
    }

    public function testSubmitString()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string']);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertSame('P7Y6M5D', \$form->getData());
    }

    public function testSubmitArray()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'array']);

        \$input = [
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ];

        \$form->submit(\$input);

        \$this->assertSame(\$input, \$form->getData());
    }

    public function testSubmitWithoutMonths()
    {
        \$interval = new \\DateInterval('P7Y5D');

        \$form = \$this->factory->create(static::TESTED_TYPE, \$interval, [
            'input' => 'dateinterval',
            'with_months' => false,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
        ]);

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testSubmitWithTime()
    {
        \$interval = new \\DateInterval('P7Y6M5DT4H3M2S');
        \$form = \$this->factory->create(static::TESTED_TYPE, \$interval, [
            'input' => 'dateinterval',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'hours' => '4',
            'minutes' => '3',
            'seconds' => '2',
        ]);

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
        \$this->assertTrue(\$form->isSynchronized());
    }

    public function testSubmitWithWeeks()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, new \\DateInterval('P0Y'), [
            'input' => 'dateinterval',
            'with_years' => false,
            'with_months' => false,
            'with_weeks' => true,
            'with_days' => false,
        ]);

        \$form->submit([
            'weeks' => '30',
        ]);

        \$this->assertDateIntervalEquals(new \\DateInterval('P30W'), \$form->getData());
    }

    public function testSubmitWithInvert()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'dateinterval',
            'with_invert' => true,
        ]);

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'invert' => true,
        ]);

        \$interval = new \\DateInterval('P7Y6M5D');
        \$interval->invert = 1;

        \$this->assertDateIntervalEquals(\$interval, \$form->getData());
    }

    public function testSubmitStringSingleText()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'string',
            'widget' => 'single_text',
        ]);

        \$interval = 'P7Y6M5D';

        \$form->submit(\$interval);

        \$this->assertSame(\$interval, \$form->getData());
        \$this->assertSame(\$interval, \$form->getViewData());
    }

    public function testSubmitStringSingleTextWithSeconds()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'string',
            'widget' => 'single_text',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$interval = 'P7Y6M5DT4H3M2S';

        \$form->submit(\$interval);

        \$this->assertSame(\$interval, \$form->getData());
        \$this->assertSame(\$interval, \$form->getViewData());
    }

    public function testSubmitArrayInteger()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'integer',
            'with_invert' => true,
        ]);

        \$years = '7';

        \$form->submit([
            'years' => '7',
            'months' => '6',
            'days' => '5',
            'invert' => true,
        ]);

        \$this->assertSame(\$years, \$form['years']->getData());
        \$this->assertSame(\$years, \$form['years']->getViewData());
    }

    public function testInitializeWithDateInterval()
    {
        // Throws an exception if \"data_class\" option is not explicitly set
        // to null in the type
        \$this->assertInstanceOf(FormInterface::class, \$this->factory->create(static::TESTED_TYPE, new \\DateInterval('P0Y')));
    }

    public function testPassDefaultPlaceholderToViewIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('', \$view['years']->vars['placeholder']);
        \$this->assertSame('', \$view['months']->vars['placeholder']);
        \$this->assertSame('', \$view['days']->vars['placeholder']);
        \$this->assertSame('', \$view['seconds']->vars['placeholder']);
    }

    public function testPassNoPlaceholderToViewIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertNull(\$view['years']->vars['placeholder']);
        \$this->assertNull(\$view['months']->vars['placeholder']);
        \$this->assertNull(\$view['days']->vars['placeholder']);
        \$this->assertNull(\$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsString()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => 'Empty',
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty', \$view['years']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsArray()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'placeholder' => [
                'years' => 'Empty years',
                'months' => 'Empty months',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'minutes' => 'Empty minutes',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertSame('Empty months', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertSame('Empty minutes', \$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddEmptyIfNotRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => false,
            'placeholder' => [
                'years' => 'Empty years',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertSame('', \$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertSame('', \$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddNullIfRequired()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, [
            'required' => true,
            'placeholder' => [
                'years' => 'Empty years',
                'days' => 'Empty days',
                'hours' => 'Empty hours',
                'seconds' => 'Empty seconds',
            ],
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ])
            ->createView();

        \$this->assertSame('Empty years', \$view['years']->vars['placeholder']);
        \$this->assertNull(\$view['months']->vars['placeholder']);
        \$this->assertSame('Empty days', \$view['days']->vars['placeholder']);
        \$this->assertSame('Empty hours', \$view['hours']->vars['placeholder']);
        \$this->assertNull(\$view['minutes']->vars['placeholder']);
        \$this->assertSame('Empty seconds', \$view['seconds']->vars['placeholder']);
    }

    public function testDateTypeChoiceErrorsBubbleUp()
    {
        \$error = new FormError('Invalid!');
        \$form = \$this->factory->create(static::TESTED_TYPE, null);

        \$form['years']->addError(\$error);

        \$this->assertSame([], iterator_to_array(\$form['years']->getErrors()));
        \$this->assertSame([\$error], iterator_to_array(\$form->getErrors()));
    }

    public function testTranslationsAreDisabledForChoiceWidget()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'widget' => 'choice',
            'with_hours' => true,
            'with_minutes' => true,
            'with_seconds' => true,
        ]);

        \$this->assertFalse(\$form->get('years')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('months')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('days')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('hours')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('minutes')->getConfig()->getOption('choice_translation_domain'));
        \$this->assertFalse(\$form->get('seconds')->getConfig()->getOption('choice_translation_domain'));
    }

    public function testInvertDoesNotInheritRequiredOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'input' => 'dateinterval',
            'with_invert' => true,
            'required' => true,
        ]);

        \$this->assertFalse(\$form->get('invert')->getConfig()->getOption('required'));
    }

    public function testCanChangeTimeFieldsLabels()
    {
        \$form = \$this->factory->create(
            static::TESTED_TYPE,
            null,
            [
                'required' => true,
                'with_invert' => true,
                'with_hours' => true,
                'with_minutes' => true,
                'with_seconds' => true,
                'labels' => [
                    'invert' => 'form.trans.invert',
                    'years' => 'form.trans.years',
                    'months' => 'form.trans.months',
                    'days' => 'form.trans.days',
                    'hours' => 'form.trans.hours',
                    'minutes' => 'form.trans.minutes',
                    'seconds' => 'form.trans.seconds',
                ],
            ]
        );

        \$view = \$form->createView();
        \$this->assertSame('form.trans.invert', \$view['invert']->vars['label']);
        \$this->assertSame('form.trans.years', \$view['years']->vars['label']);
        \$this->assertSame('form.trans.months', \$view['months']->vars['label']);
        \$this->assertSame('form.trans.days', \$view['days']->vars['label']);
        \$this->assertSame('form.trans.hours', \$view['hours']->vars['label']);
        \$this->assertSame('form.trans.minutes', \$view['minutes']->vars['label']);
        \$this->assertSame('form.trans.seconds', \$view['seconds']->vars['label']);
    }

    public function testInvertDefaultLabel()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['with_invert' => true]);

        \$view = \$form->createView();
        \$this->assertSame('Negative interval', \$view['invert']->vars['label']);

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'with_invert' => true,
            'labels' => ['invert' => null],
        ]);

        \$view = \$form->createView();
        \$this->assertSame('Negative interval', \$view['invert']->vars['label']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, [
            'years' => '',
            'months' => '',
            'days' => '',
        ]);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = null)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // view transformer writes back empty strings in the view data
        \$this->assertSame(['years' => '', 'months' => '', 'days' => ''], \$form->getViewData());
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
        \$expectedData = new \\DateInterval('P6Y4M');

        return [
            'Simple field' => ['single_text', 'P6Y4M0D', \$expectedData],
            'Compound text field' => ['text', ['years' => '06', 'months' => '04', 'days' => '00'], \$expectedData],
            'Compound integer field' => ['integer', ['years' => '6', 'months' => '4', 'days' => '0'], \$expectedData],
            'Compound choice field' => ['choice', ['years' => '6', 'months' => '4', 'days' => '0'], \$expectedData],
        ];
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/DateIntervalTypeTest.php");
    }
}
