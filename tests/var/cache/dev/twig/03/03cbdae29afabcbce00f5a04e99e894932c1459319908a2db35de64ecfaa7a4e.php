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

/* vendor/symfony/form/Extension/Core/Type/LocaleType.php */
class __TwigTemplate_fe49ea9d3d83f2dd00f4461bf7357647ea061849a44fdc07492b8c52e6d3c4bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/LocaleType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/LocaleType.php"));

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
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\IntlCallbackChoiceLoader;
use Symfony\\Component\\Intl\\Locales;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class LocaleType extends AbstractType implements ChoiceLoaderInterface
{
    /**
     * Locale loaded choice list.
     *
     * The choices are lazy loaded and generated from the Intl component.
     *
     * {@link \\Symfony\\Component\\Intl\\Intl::getLocaleBundle()}.
     *
     * @var ArrayChoiceList
     *
     * @deprecated since Symfony 4.1
     */
    private \$choiceList;

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choice_loader' => function (Options \$options) {
                \$choiceTranslationLocale = \$options['choice_translation_locale'];

                return new IntlCallbackChoiceLoader(function () use (\$choiceTranslationLocale) {
                    return array_flip(Locales::getNames(\$choiceTranslationLocale));
                });
            },
            'choice_translation_domain' => false,
            'choice_translation_locale' => null,
        ]);

        \$resolver->setAllowedTypes('choice_translation_locale', ['null', 'string']);
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
        return 'locale';
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadChoiceList(\$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        if (null !== \$this->choiceList) {
            return \$this->choiceList;
        }

        return \$this->choiceList = new ArrayChoiceList(array_flip(Locales::getNames()), \$value);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        // Optimize
        \$values = array_filter(\$values);
        if (empty(\$values)) {
            return [];
        }

        return \$this->loadChoiceList(\$value)->getChoicesForValues(\$values);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadValuesForChoices(array \$choices, \$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        // Optimize
        \$choices = array_filter(\$choices);
        if (empty(\$choices)) {
            return [];
        }

        // If no callable is set, choices are the same as values
        if (null === \$value) {
            return \$choices;
        }

        return \$this->loadChoiceList(\$value)->getValuesForChoices(\$choices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/LocaleType.php";
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
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\IntlCallbackChoiceLoader;
use Symfony\\Component\\Intl\\Locales;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class LocaleType extends AbstractType implements ChoiceLoaderInterface
{
    /**
     * Locale loaded choice list.
     *
     * The choices are lazy loaded and generated from the Intl component.
     *
     * {@link \\Symfony\\Component\\Intl\\Intl::getLocaleBundle()}.
     *
     * @var ArrayChoiceList
     *
     * @deprecated since Symfony 4.1
     */
    private \$choiceList;

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choice_loader' => function (Options \$options) {
                \$choiceTranslationLocale = \$options['choice_translation_locale'];

                return new IntlCallbackChoiceLoader(function () use (\$choiceTranslationLocale) {
                    return array_flip(Locales::getNames(\$choiceTranslationLocale));
                });
            },
            'choice_translation_domain' => false,
            'choice_translation_locale' => null,
        ]);

        \$resolver->setAllowedTypes('choice_translation_locale', ['null', 'string']);
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
        return 'locale';
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadChoiceList(\$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        if (null !== \$this->choiceList) {
            return \$this->choiceList;
        }

        return \$this->choiceList = new ArrayChoiceList(array_flip(Locales::getNames()), \$value);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadChoicesForValues(array \$values, \$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        // Optimize
        \$values = array_filter(\$values);
        if (empty(\$values)) {
            return [];
        }

        return \$this->loadChoiceList(\$value)->getChoicesForValues(\$values);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.1
     */
    public function loadValuesForChoices(array \$choices, \$value = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, use the \"choice_loader\" option instead.', __METHOD__), E_USER_DEPRECATED);

        // Optimize
        \$choices = array_filter(\$choices);
        if (empty(\$choices)) {
            return [];
        }

        // If no callable is set, choices are the same as values
        if (null === \$value) {
            return \$choices;
        }

        return \$this->loadChoiceList(\$value)->getValuesForChoices(\$choices);
    }
}
", "vendor/symfony/form/Extension/Core/Type/LocaleType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/LocaleType.php");
    }
}
