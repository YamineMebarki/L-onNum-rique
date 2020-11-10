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

/* vendor/symfony/form/Extension/Core/Type/TimezoneType.php */
class __TwigTemplate_42bbd33bb7e9f5dd7df08968184b820ad93f3075834255d3c51892878f75be68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/TimezoneType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/TimezoneType.php"));

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
use Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\IntlCallbackChoiceLoader;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeZoneToStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntlTimeZoneToStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Intl\\Timezones;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class TimezoneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if ('datetimezone' === \$options['input']) {
            \$builder->addModelTransformer(new DateTimeZoneToStringTransformer(\$options['multiple']));
        } elseif ('intltimezone' === \$options['input']) {
            \$builder->addModelTransformer(new IntlTimeZoneToStringTransformer(\$options['multiple']));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'intl' => false,
            'choice_loader' => function (Options \$options) {
                \$input = \$options['input'];

                if (\$options['intl']) {
                    \$choiceTranslationLocale = \$options['choice_translation_locale'];

                    return new IntlCallbackChoiceLoader(function () use (\$input, \$choiceTranslationLocale) {
                        return self::getIntlTimezones(\$input, \$choiceTranslationLocale);
                    });
                }

                \$regions = \$options->offsetGet('regions', false);

                return new CallbackChoiceLoader(function () use (\$regions, \$input) {
                    return self::getPhpTimezones(\$regions, \$input);
                });
            },
            'choice_translation_domain' => false,
            'choice_translation_locale' => null,
            'input' => 'string',
            'regions' => \\DateTimeZone::ALL,
        ]);

        \$resolver->setAllowedTypes('intl', ['bool']);

        \$resolver->setAllowedTypes('choice_translation_locale', ['null', 'string']);
        \$resolver->setNormalizer('choice_translation_locale', function (Options \$options, \$value) {
            if (null !== \$value && !\$options['intl']) {
                throw new LogicException('The \"choice_translation_locale\" option can only be used if the \"intl\" option is set to true.');
            }

            return \$value;
        });

        \$resolver->setAllowedValues('input', ['string', 'datetimezone', 'intltimezone']);
        \$resolver->setNormalizer('input', function (Options \$options, \$value) {
            if ('intltimezone' === \$value && !class_exists(\\IntlTimeZone::class)) {
                throw new LogicException('Cannot use \"intltimezone\" input because the PHP intl extension is not available.');
            }

            return \$value;
        });

        \$resolver->setAllowedTypes('regions', 'int');
        \$resolver->setDeprecated('regions', 'The option \"%name%\" is deprecated since Symfony 4.2.');
        \$resolver->setNormalizer('regions', function (Options \$options, \$value) {
            if (\$options['intl'] && \\DateTimeZone::ALL !== (\\DateTimeZone::ALL & \$value)) {
                throw new LogicException('The \"regions\" option can only be used if the \"intl\" option is set to false.');
            }

            return \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\\ChoiceType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'timezone';
    }

    private static function getPhpTimezones(int \$regions, string \$input): array
    {
        \$timezones = [];

        foreach (\\DateTimeZone::listIdentifiers(\$regions) as \$timezone) {
            if ('intltimezone' === \$input && 'Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$timezone)->getID()) {
                continue;
            }

            \$timezones[str_replace(['/', '_'], [' / ', ' '], \$timezone)] = \$timezone;
        }

        return \$timezones;
    }

    private static function getIntlTimezones(string \$input, string \$locale = null): array
    {
        \$timezones = array_flip(Timezones::getNames(\$locale));

        if ('intltimezone' === \$input) {
            foreach (\$timezones as \$name => \$timezone) {
                if ('Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$timezone)->getID()) {
                    unset(\$timezones[\$name]);
                }
            }
        }

        return \$timezones;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/TimezoneType.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\IntlCallbackChoiceLoader;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DateTimeZoneToStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntlTimeZoneToStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Intl\\Timezones;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class TimezoneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if ('datetimezone' === \$options['input']) {
            \$builder->addModelTransformer(new DateTimeZoneToStringTransformer(\$options['multiple']));
        } elseif ('intltimezone' === \$options['input']) {
            \$builder->addModelTransformer(new IntlTimeZoneToStringTransformer(\$options['multiple']));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'intl' => false,
            'choice_loader' => function (Options \$options) {
                \$input = \$options['input'];

                if (\$options['intl']) {
                    \$choiceTranslationLocale = \$options['choice_translation_locale'];

                    return new IntlCallbackChoiceLoader(function () use (\$input, \$choiceTranslationLocale) {
                        return self::getIntlTimezones(\$input, \$choiceTranslationLocale);
                    });
                }

                \$regions = \$options->offsetGet('regions', false);

                return new CallbackChoiceLoader(function () use (\$regions, \$input) {
                    return self::getPhpTimezones(\$regions, \$input);
                });
            },
            'choice_translation_domain' => false,
            'choice_translation_locale' => null,
            'input' => 'string',
            'regions' => \\DateTimeZone::ALL,
        ]);

        \$resolver->setAllowedTypes('intl', ['bool']);

        \$resolver->setAllowedTypes('choice_translation_locale', ['null', 'string']);
        \$resolver->setNormalizer('choice_translation_locale', function (Options \$options, \$value) {
            if (null !== \$value && !\$options['intl']) {
                throw new LogicException('The \"choice_translation_locale\" option can only be used if the \"intl\" option is set to true.');
            }

            return \$value;
        });

        \$resolver->setAllowedValues('input', ['string', 'datetimezone', 'intltimezone']);
        \$resolver->setNormalizer('input', function (Options \$options, \$value) {
            if ('intltimezone' === \$value && !class_exists(\\IntlTimeZone::class)) {
                throw new LogicException('Cannot use \"intltimezone\" input because the PHP intl extension is not available.');
            }

            return \$value;
        });

        \$resolver->setAllowedTypes('regions', 'int');
        \$resolver->setDeprecated('regions', 'The option \"%name%\" is deprecated since Symfony 4.2.');
        \$resolver->setNormalizer('regions', function (Options \$options, \$value) {
            if (\$options['intl'] && \\DateTimeZone::ALL !== (\\DateTimeZone::ALL & \$value)) {
                throw new LogicException('The \"regions\" option can only be used if the \"intl\" option is set to false.');
            }

            return \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\\ChoiceType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'timezone';
    }

    private static function getPhpTimezones(int \$regions, string \$input): array
    {
        \$timezones = [];

        foreach (\\DateTimeZone::listIdentifiers(\$regions) as \$timezone) {
            if ('intltimezone' === \$input && 'Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$timezone)->getID()) {
                continue;
            }

            \$timezones[str_replace(['/', '_'], [' / ', ' '], \$timezone)] = \$timezone;
        }

        return \$timezones;
    }

    private static function getIntlTimezones(string \$input, string \$locale = null): array
    {
        \$timezones = array_flip(Timezones::getNames(\$locale));

        if ('intltimezone' === \$input) {
            foreach (\$timezones as \$name => \$timezone) {
                if ('Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$timezone)->getID()) {
                    unset(\$timezones[\$name]);
                }
            }
        }

        return \$timezones;
    }
}
", "vendor/symfony/form/Extension/Core/Type/TimezoneType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/TimezoneType.php");
    }
}
