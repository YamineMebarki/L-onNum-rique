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

/* vendor/symfony/form/Extension/Core/Type/DateType.php */
class __TwigTemplate_ce2829470c64d39c66423b8cd0f5ec1dd1af8fc4afc6373c001148a2505f07b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/DateType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/DateType.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeImmutableToDateTimeTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToArrayTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToTimestampTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\ReversedTransformer;
use Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class DateType extends AbstractType
{
    const DEFAULT_FORMAT = \\IntlDateFormatter::MEDIUM;
    const HTML5_FORMAT = 'yyyy-MM-dd';

    private static \$acceptedFormats = [
        \\IntlDateFormatter::FULL,
        \\IntlDateFormatter::LONG,
        \\IntlDateFormatter::MEDIUM,
        \\IntlDateFormatter::SHORT,
    ];

    private static \$widgets = [
        'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType',
        'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType',
    ];

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$dateFormat = \\is_int(\$options['format']) ? \$options['format'] : self::DEFAULT_FORMAT;
        \$timeFormat = \\IntlDateFormatter::NONE;
        \$calendar = \\IntlDateFormatter::GREGORIAN;
        \$pattern = \\is_string(\$options['format']) ? \$options['format'] : null;

        if (!\\in_array(\$dateFormat, self::\$acceptedFormats, true)) {
            throw new InvalidOptionsException('The \"format\" option must be one of the IntlDateFormatter constants (FULL, LONG, MEDIUM, SHORT) or a string representing a custom format.');
        }

        if ('single_text' === \$options['widget']) {
            if (null !== \$pattern && false === strpos(\$pattern, 'y') && false === strpos(\$pattern, 'M') && false === strpos(\$pattern, 'd')) {
                throw new InvalidOptionsException(sprintf('The \"format\" option should contain the letters \"y\", \"M\" or \"d\". Its current value is \"%s\".', \$pattern));
            }

            \$builder->addViewTransformer(new DateTimeToLocalizedStringTransformer(
                \$options['model_timezone'],
                \$options['view_timezone'],
                \$dateFormat,
                \$timeFormat,
                \$calendar,
                \$pattern
            ));
        } else {
            if (null !== \$pattern && (false === strpos(\$pattern, 'y') || false === strpos(\$pattern, 'M') || false === strpos(\$pattern, 'd'))) {
                throw new InvalidOptionsException(sprintf('The \"format\" option should contain the letters \"y\", \"M\" and \"d\". Its current value is \"%s\".', \$pattern));
            }

            \$yearOptions = \$monthOptions = \$dayOptions = [
                'error_bubbling' => true,
                'empty_data' => '',
            ];
            // when the form is compound the entries of the array are ignored in favor of children data
            // so we need to handle the cascade setting here
            \$emptyData = \$builder->getEmptyData() ?: [];

            if (isset(\$emptyData['year'])) {
                \$yearOptions['empty_data'] = \$emptyData['year'];
            }
            if (isset(\$emptyData['month'])) {
                \$monthOptions['empty_data'] = \$emptyData['month'];
            }
            if (isset(\$emptyData['day'])) {
                \$dayOptions['empty_data'] = \$emptyData['day'];
            }

            if (isset(\$options['invalid_message'])) {
                \$dayOptions['invalid_message'] = \$options['invalid_message'];
                \$monthOptions['invalid_message'] = \$options['invalid_message'];
                \$yearOptions['invalid_message'] = \$options['invalid_message'];
            }

            if (isset(\$options['invalid_message_parameters'])) {
                \$dayOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
                \$monthOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
                \$yearOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
            }

            \$formatter = new \\IntlDateFormatter(
                \\Locale::getDefault(),
                \$dateFormat,
                \$timeFormat,
                // see https://bugs.php.net/66323
                class_exists('IntlTimeZone', false) ? \\IntlTimeZone::createDefault() : null,
                \$calendar,
                \$pattern
            );

            // new \\IntlDateFormatter may return null instead of false in case of failure, see https://bugs.php.net/66323
            if (!\$formatter) {
                throw new InvalidOptionsException(intl_get_error_message(), intl_get_error_code());
            }

            \$formatter->setLenient(false);

            if ('choice' === \$options['widget']) {
                // Only pass a subset of the options to children
                \$yearOptions['choices'] = \$this->formatTimestamps(\$formatter, '/y+/', \$this->listYears(\$options['years']));
                \$yearOptions['placeholder'] = \$options['placeholder']['year'];
                \$yearOptions['choice_translation_domain'] = \$options['choice_translation_domain']['year'];
                \$monthOptions['choices'] = \$this->formatTimestamps(\$formatter, '/[M|L]+/', \$this->listMonths(\$options['months']));
                \$monthOptions['placeholder'] = \$options['placeholder']['month'];
                \$monthOptions['choice_translation_domain'] = \$options['choice_translation_domain']['month'];
                \$dayOptions['choices'] = \$this->formatTimestamps(\$formatter, '/d+/', \$this->listDays(\$options['days']));
                \$dayOptions['placeholder'] = \$options['placeholder']['day'];
                \$dayOptions['choice_translation_domain'] = \$options['choice_translation_domain']['day'];
            }

            // Append generic carry-along options
            foreach (['required', 'translation_domain'] as \$passOpt) {
                \$yearOptions[\$passOpt] = \$monthOptions[\$passOpt] = \$dayOptions[\$passOpt] = \$options[\$passOpt];
            }

            \$builder
                ->add('year', self::\$widgets[\$options['widget']], \$yearOptions)
                ->add('month', self::\$widgets[\$options['widget']], \$monthOptions)
                ->add('day', self::\$widgets[\$options['widget']], \$dayOptions)
                ->addViewTransformer(new DateTimeToArrayTransformer(
                    \$options['model_timezone'], \$options['view_timezone'], ['year', 'month', 'day']
                ))
                ->setAttribute('formatter', \$formatter)
            ;
        }

        if ('datetime_immutable' === \$options['input']) {
            \$builder->addModelTransformer(new DateTimeImmutableToDateTimeTransformer());
        } elseif ('string' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToStringTransformer(\$options['model_timezone'], \$options['model_timezone'], \$options['input_format'])
            ));
        } elseif ('timestamp' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToTimestampTransformer(\$options['model_timezone'], \$options['model_timezone'])
            ));
        } elseif ('array' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToArrayTransformer(\$options['model_timezone'], \$options['model_timezone'], ['year', 'month', 'day'])
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['widget'] = \$options['widget'];

        // Change the input to a HTML5 date input if
        //  * the widget is set to \"single_text\"
        //  * the format matches the one expected by HTML5
        //  * the html5 is set to true
        if (\$options['html5'] && 'single_text' === \$options['widget'] && self::HTML5_FORMAT === \$options['format']) {
            \$view->vars['type'] = 'date';
        }

        if (\$form->getConfig()->hasAttribute('formatter')) {
            \$pattern = \$form->getConfig()->getAttribute('formatter')->getPattern();

            // remove special characters unless the format was explicitly specified
            if (!\\is_string(\$options['format'])) {
                // remove quoted strings first
                \$pattern = preg_replace('/\\'[^\\']+\\'/', '', \$pattern);

                // remove remaining special chars
                \$pattern = preg_replace('/[^yMd]+/', '', \$pattern);
            }

            // set right order with respect to locale (e.g.: de_DE=dd.MM.yy; en_US=M/d/yy)
            // lookup various formats at http://userguide.icu-project.org/formatparse/datetime
            if (preg_match('/^([yMd]+)[^yMd]*([yMd]+)[^yMd]*([yMd]+)\$/', \$pattern)) {
                \$pattern = preg_replace(['/y+/', '/M+/', '/d+/'], ['";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "'], \$pattern);
            } else {
                // default fallback
                \$pattern = '";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 203, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 203, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 203, $this->source); })()), "html", null, true);
        echo "';
            }

            \$view->vars['date_pattern'] = \$pattern;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$compound = function (Options \$options) {
            return 'single_text' !== \$options['widget'];
        };

        \$placeholderDefault = function (Options \$options) {
            return \$options['required'] ? null : '';
        };

        \$placeholderNormalizer = function (Options \$options, \$placeholder) use (\$placeholderDefault) {
            if (\\is_array(\$placeholder)) {
                \$default = \$placeholderDefault(\$options);

                return array_merge(
                    ['year' => \$default, 'month' => \$default, 'day' => \$default],
                    \$placeholder
                );
            }

            return [
                'year' => \$placeholder,
                'month' => \$placeholder,
                'day' => \$placeholder,
            ];
        };

        \$choiceTranslationDomainNormalizer = function (Options \$options, \$choiceTranslationDomain) {
            if (\\is_array(\$choiceTranslationDomain)) {
                \$default = false;

                return array_replace(
                    ['year' => \$default, 'month' => \$default, 'day' => \$default],
                    \$choiceTranslationDomain
                );
            }

            return [
                'year' => \$choiceTranslationDomain,
                'month' => \$choiceTranslationDomain,
                'day' => \$choiceTranslationDomain,
            ];
        };

        \$format = function (Options \$options) {
            return 'single_text' === \$options['widget'] ? self::HTML5_FORMAT : self::DEFAULT_FORMAT;
        };

        \$resolver->setDefaults([
            'years' => range((int) date('Y') - 5, (int) date('Y') + 5),
            'months' => range(1, 12),
            'days' => range(1, 31),
            'widget' => 'choice',
            'input' => 'datetime',
            'format' => \$format,
            'model_timezone' => null,
            'view_timezone' => null,
            'placeholder' => \$placeholderDefault,
            'html5' => true,
            // Don't modify \\DateTime classes by reference, we treat
            // them like immutable value objects
            'by_reference' => false,
            'error_bubbling' => false,
            // If initialized with a \\DateTime object, FormType initializes
            // this option to \"\\DateTime\". Since the internal, normalized
            // representation is not \\DateTime, but an array, we need to unset
            // this option.
            'data_class' => null,
            'compound' => \$compound,
            'empty_data' => function (Options \$options) {
                return \$options['compound'] ? [] : '';
            },
            'choice_translation_domain' => false,
            'input_format' => 'Y-m-d',
        ]);

        \$resolver->setNormalizer('placeholder', \$placeholderNormalizer);
        \$resolver->setNormalizer('choice_translation_domain', \$choiceTranslationDomainNormalizer);

        \$resolver->setAllowedValues('input', [
            'datetime',
            'datetime_immutable',
            'string',
            'timestamp',
            'array',
        ]);
        \$resolver->setAllowedValues('widget', [
            'single_text',
            'text',
            'choice',
        ]);

        \$resolver->setAllowedTypes('format', ['int', 'string']);
        \$resolver->setAllowedTypes('years', 'array');
        \$resolver->setAllowedTypes('months', 'array');
        \$resolver->setAllowedTypes('days', 'array');
        \$resolver->setAllowedTypes('input_format', 'string');

        \$resolver->setDeprecated('html5', function (Options \$options, \$html5) {
            if (\$html5 && 'single_text' === \$options['widget'] && self::HTML5_FORMAT !== \$options['format']) {
                return sprintf('Using a custom format when the \"html5\" option of %s is enabled is deprecated since Symfony 4.3 and will lead to an exception in 5.0.', self::class);
                //throw new LogicException(sprintf('Cannot use the \"format\" option of %s when the \"html5\" option is disabled.', self::class));
            }

            return '';
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'date';
    }

    private function formatTimestamps(\\IntlDateFormatter \$formatter, \$regex, array \$timestamps)
    {
        \$pattern = \$formatter->getPattern();
        \$timezone = \$formatter->getTimeZoneId();
        \$formattedTimestamps = [];

        \$formatter->setTimeZone('UTC');

        if (preg_match(\$regex, \$pattern, \$matches)) {
            \$formatter->setPattern(\$matches[0]);

            foreach (\$timestamps as \$timestamp => \$choice) {
                \$formattedTimestamps[\$formatter->format(\$timestamp)] = \$choice;
            }

            // I'd like to clone the formatter above, but then we get a
            // segmentation fault, so let's restore the old state instead
            \$formatter->setPattern(\$pattern);
        }

        \$formatter->setTimeZone(\$timezone);

        return \$formattedTimestamps;
    }

    private function listYears(array \$years)
    {
        \$result = [];

        foreach (\$years as \$year) {
            if (false !== \$y = gmmktime(0, 0, 0, 6, 15, \$year)) {
                \$result[\$y] = \$year;
            }
        }

        return \$result;
    }

    private function listMonths(array \$months)
    {
        \$result = [];

        foreach (\$months as \$month) {
            \$result[gmmktime(0, 0, 0, \$month, 15)] = \$month;
        }

        return \$result;
    }

    private function listDays(array \$days)
    {
        \$result = [];

        foreach (\$days as \$day) {
            \$result[gmmktime(0, 0, 0, 5, \$day)] = \$day;
        }

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/DateType.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 203,  244 => 200,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeImmutableToDateTimeTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToArrayTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeToTimestampTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\ReversedTransformer;
use Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class DateType extends AbstractType
{
    const DEFAULT_FORMAT = \\IntlDateFormatter::MEDIUM;
    const HTML5_FORMAT = 'yyyy-MM-dd';

    private static \$acceptedFormats = [
        \\IntlDateFormatter::FULL,
        \\IntlDateFormatter::LONG,
        \\IntlDateFormatter::MEDIUM,
        \\IntlDateFormatter::SHORT,
    ];

    private static \$widgets = [
        'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType',
        'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType',
    ];

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$dateFormat = \\is_int(\$options['format']) ? \$options['format'] : self::DEFAULT_FORMAT;
        \$timeFormat = \\IntlDateFormatter::NONE;
        \$calendar = \\IntlDateFormatter::GREGORIAN;
        \$pattern = \\is_string(\$options['format']) ? \$options['format'] : null;

        if (!\\in_array(\$dateFormat, self::\$acceptedFormats, true)) {
            throw new InvalidOptionsException('The \"format\" option must be one of the IntlDateFormatter constants (FULL, LONG, MEDIUM, SHORT) or a string representing a custom format.');
        }

        if ('single_text' === \$options['widget']) {
            if (null !== \$pattern && false === strpos(\$pattern, 'y') && false === strpos(\$pattern, 'M') && false === strpos(\$pattern, 'd')) {
                throw new InvalidOptionsException(sprintf('The \"format\" option should contain the letters \"y\", \"M\" or \"d\". Its current value is \"%s\".', \$pattern));
            }

            \$builder->addViewTransformer(new DateTimeToLocalizedStringTransformer(
                \$options['model_timezone'],
                \$options['view_timezone'],
                \$dateFormat,
                \$timeFormat,
                \$calendar,
                \$pattern
            ));
        } else {
            if (null !== \$pattern && (false === strpos(\$pattern, 'y') || false === strpos(\$pattern, 'M') || false === strpos(\$pattern, 'd'))) {
                throw new InvalidOptionsException(sprintf('The \"format\" option should contain the letters \"y\", \"M\" and \"d\". Its current value is \"%s\".', \$pattern));
            }

            \$yearOptions = \$monthOptions = \$dayOptions = [
                'error_bubbling' => true,
                'empty_data' => '',
            ];
            // when the form is compound the entries of the array are ignored in favor of children data
            // so we need to handle the cascade setting here
            \$emptyData = \$builder->getEmptyData() ?: [];

            if (isset(\$emptyData['year'])) {
                \$yearOptions['empty_data'] = \$emptyData['year'];
            }
            if (isset(\$emptyData['month'])) {
                \$monthOptions['empty_data'] = \$emptyData['month'];
            }
            if (isset(\$emptyData['day'])) {
                \$dayOptions['empty_data'] = \$emptyData['day'];
            }

            if (isset(\$options['invalid_message'])) {
                \$dayOptions['invalid_message'] = \$options['invalid_message'];
                \$monthOptions['invalid_message'] = \$options['invalid_message'];
                \$yearOptions['invalid_message'] = \$options['invalid_message'];
            }

            if (isset(\$options['invalid_message_parameters'])) {
                \$dayOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
                \$monthOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
                \$yearOptions['invalid_message_parameters'] = \$options['invalid_message_parameters'];
            }

            \$formatter = new \\IntlDateFormatter(
                \\Locale::getDefault(),
                \$dateFormat,
                \$timeFormat,
                // see https://bugs.php.net/66323
                class_exists('IntlTimeZone', false) ? \\IntlTimeZone::createDefault() : null,
                \$calendar,
                \$pattern
            );

            // new \\IntlDateFormatter may return null instead of false in case of failure, see https://bugs.php.net/66323
            if (!\$formatter) {
                throw new InvalidOptionsException(intl_get_error_message(), intl_get_error_code());
            }

            \$formatter->setLenient(false);

            if ('choice' === \$options['widget']) {
                // Only pass a subset of the options to children
                \$yearOptions['choices'] = \$this->formatTimestamps(\$formatter, '/y+/', \$this->listYears(\$options['years']));
                \$yearOptions['placeholder'] = \$options['placeholder']['year'];
                \$yearOptions['choice_translation_domain'] = \$options['choice_translation_domain']['year'];
                \$monthOptions['choices'] = \$this->formatTimestamps(\$formatter, '/[M|L]+/', \$this->listMonths(\$options['months']));
                \$monthOptions['placeholder'] = \$options['placeholder']['month'];
                \$monthOptions['choice_translation_domain'] = \$options['choice_translation_domain']['month'];
                \$dayOptions['choices'] = \$this->formatTimestamps(\$formatter, '/d+/', \$this->listDays(\$options['days']));
                \$dayOptions['placeholder'] = \$options['placeholder']['day'];
                \$dayOptions['choice_translation_domain'] = \$options['choice_translation_domain']['day'];
            }

            // Append generic carry-along options
            foreach (['required', 'translation_domain'] as \$passOpt) {
                \$yearOptions[\$passOpt] = \$monthOptions[\$passOpt] = \$dayOptions[\$passOpt] = \$options[\$passOpt];
            }

            \$builder
                ->add('year', self::\$widgets[\$options['widget']], \$yearOptions)
                ->add('month', self::\$widgets[\$options['widget']], \$monthOptions)
                ->add('day', self::\$widgets[\$options['widget']], \$dayOptions)
                ->addViewTransformer(new DateTimeToArrayTransformer(
                    \$options['model_timezone'], \$options['view_timezone'], ['year', 'month', 'day']
                ))
                ->setAttribute('formatter', \$formatter)
            ;
        }

        if ('datetime_immutable' === \$options['input']) {
            \$builder->addModelTransformer(new DateTimeImmutableToDateTimeTransformer());
        } elseif ('string' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToStringTransformer(\$options['model_timezone'], \$options['model_timezone'], \$options['input_format'])
            ));
        } elseif ('timestamp' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToTimestampTransformer(\$options['model_timezone'], \$options['model_timezone'])
            ));
        } elseif ('array' === \$options['input']) {
            \$builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToArrayTransformer(\$options['model_timezone'], \$options['model_timezone'], ['year', 'month', 'day'])
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['widget'] = \$options['widget'];

        // Change the input to a HTML5 date input if
        //  * the widget is set to \"single_text\"
        //  * the format matches the one expected by HTML5
        //  * the html5 is set to true
        if (\$options['html5'] && 'single_text' === \$options['widget'] && self::HTML5_FORMAT === \$options['format']) {
            \$view->vars['type'] = 'date';
        }

        if (\$form->getConfig()->hasAttribute('formatter')) {
            \$pattern = \$form->getConfig()->getAttribute('formatter')->getPattern();

            // remove special characters unless the format was explicitly specified
            if (!\\is_string(\$options['format'])) {
                // remove quoted strings first
                \$pattern = preg_replace('/\\'[^\\']+\\'/', '', \$pattern);

                // remove remaining special chars
                \$pattern = preg_replace('/[^yMd]+/', '', \$pattern);
            }

            // set right order with respect to locale (e.g.: de_DE=dd.MM.yy; en_US=M/d/yy)
            // lookup various formats at http://userguide.icu-project.org/formatparse/datetime
            if (preg_match('/^([yMd]+)[^yMd]*([yMd]+)[^yMd]*([yMd]+)\$/', \$pattern)) {
                \$pattern = preg_replace(['/y+/', '/M+/', '/d+/'], ['{{ year }}', '{{ month }}', '{{ day }}'], \$pattern);
            } else {
                // default fallback
                \$pattern = '{{ year }}{{ month }}{{ day }}';
            }

            \$view->vars['date_pattern'] = \$pattern;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$compound = function (Options \$options) {
            return 'single_text' !== \$options['widget'];
        };

        \$placeholderDefault = function (Options \$options) {
            return \$options['required'] ? null : '';
        };

        \$placeholderNormalizer = function (Options \$options, \$placeholder) use (\$placeholderDefault) {
            if (\\is_array(\$placeholder)) {
                \$default = \$placeholderDefault(\$options);

                return array_merge(
                    ['year' => \$default, 'month' => \$default, 'day' => \$default],
                    \$placeholder
                );
            }

            return [
                'year' => \$placeholder,
                'month' => \$placeholder,
                'day' => \$placeholder,
            ];
        };

        \$choiceTranslationDomainNormalizer = function (Options \$options, \$choiceTranslationDomain) {
            if (\\is_array(\$choiceTranslationDomain)) {
                \$default = false;

                return array_replace(
                    ['year' => \$default, 'month' => \$default, 'day' => \$default],
                    \$choiceTranslationDomain
                );
            }

            return [
                'year' => \$choiceTranslationDomain,
                'month' => \$choiceTranslationDomain,
                'day' => \$choiceTranslationDomain,
            ];
        };

        \$format = function (Options \$options) {
            return 'single_text' === \$options['widget'] ? self::HTML5_FORMAT : self::DEFAULT_FORMAT;
        };

        \$resolver->setDefaults([
            'years' => range((int) date('Y') - 5, (int) date('Y') + 5),
            'months' => range(1, 12),
            'days' => range(1, 31),
            'widget' => 'choice',
            'input' => 'datetime',
            'format' => \$format,
            'model_timezone' => null,
            'view_timezone' => null,
            'placeholder' => \$placeholderDefault,
            'html5' => true,
            // Don't modify \\DateTime classes by reference, we treat
            // them like immutable value objects
            'by_reference' => false,
            'error_bubbling' => false,
            // If initialized with a \\DateTime object, FormType initializes
            // this option to \"\\DateTime\". Since the internal, normalized
            // representation is not \\DateTime, but an array, we need to unset
            // this option.
            'data_class' => null,
            'compound' => \$compound,
            'empty_data' => function (Options \$options) {
                return \$options['compound'] ? [] : '';
            },
            'choice_translation_domain' => false,
            'input_format' => 'Y-m-d',
        ]);

        \$resolver->setNormalizer('placeholder', \$placeholderNormalizer);
        \$resolver->setNormalizer('choice_translation_domain', \$choiceTranslationDomainNormalizer);

        \$resolver->setAllowedValues('input', [
            'datetime',
            'datetime_immutable',
            'string',
            'timestamp',
            'array',
        ]);
        \$resolver->setAllowedValues('widget', [
            'single_text',
            'text',
            'choice',
        ]);

        \$resolver->setAllowedTypes('format', ['int', 'string']);
        \$resolver->setAllowedTypes('years', 'array');
        \$resolver->setAllowedTypes('months', 'array');
        \$resolver->setAllowedTypes('days', 'array');
        \$resolver->setAllowedTypes('input_format', 'string');

        \$resolver->setDeprecated('html5', function (Options \$options, \$html5) {
            if (\$html5 && 'single_text' === \$options['widget'] && self::HTML5_FORMAT !== \$options['format']) {
                return sprintf('Using a custom format when the \"html5\" option of %s is enabled is deprecated since Symfony 4.3 and will lead to an exception in 5.0.', self::class);
                //throw new LogicException(sprintf('Cannot use the \"format\" option of %s when the \"html5\" option is disabled.', self::class));
            }

            return '';
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'date';
    }

    private function formatTimestamps(\\IntlDateFormatter \$formatter, \$regex, array \$timestamps)
    {
        \$pattern = \$formatter->getPattern();
        \$timezone = \$formatter->getTimeZoneId();
        \$formattedTimestamps = [];

        \$formatter->setTimeZone('UTC');

        if (preg_match(\$regex, \$pattern, \$matches)) {
            \$formatter->setPattern(\$matches[0]);

            foreach (\$timestamps as \$timestamp => \$choice) {
                \$formattedTimestamps[\$formatter->format(\$timestamp)] = \$choice;
            }

            // I'd like to clone the formatter above, but then we get a
            // segmentation fault, so let's restore the old state instead
            \$formatter->setPattern(\$pattern);
        }

        \$formatter->setTimeZone(\$timezone);

        return \$formattedTimestamps;
    }

    private function listYears(array \$years)
    {
        \$result = [];

        foreach (\$years as \$year) {
            if (false !== \$y = gmmktime(0, 0, 0, 6, 15, \$year)) {
                \$result[\$y] = \$year;
            }
        }

        return \$result;
    }

    private function listMonths(array \$months)
    {
        \$result = [];

        foreach (\$months as \$month) {
            \$result[gmmktime(0, 0, 0, \$month, 15)] = \$month;
        }

        return \$result;
    }

    private function listDays(array \$days)
    {
        \$result = [];

        foreach (\$days as \$day) {
            \$result[gmmktime(0, 0, 0, 5, \$day)] = \$day;
        }

        return \$result;
    }
}
", "vendor/symfony/form/Extension/Core/Type/DateType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/DateType.php");
    }
}
