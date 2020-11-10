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

/* vendor/symfony/form/Extension/Core/Type/NumberType.php */
class __TwigTemplate_b8b4354fab713aa6bc103358f482a810be808471b29fb5b491dae5f8e9e6df70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/NumberType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/NumberType.php"));

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
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\NumberToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\StringToFloatTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class NumberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addViewTransformer(new NumberToLocalizedStringTransformer(
            \$options['scale'],
            \$options['grouping'],
            \$options['rounding_mode'],
            \$options['html5'] ? 'en' : null
        ));

        if ('string' === \$options['input']) {
            \$builder->addModelTransformer(new StringToFloatTransformer(\$options['scale']));
            \$builder->addModelTransformer(new CallbackTransformer(
                function (\$value) {
                    return \\is_float(\$value) || \\is_int(\$value) ? (string) \$value : \$value;
                },
                function (\$value) {
                    return \$value;
                }
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['html5']) {
            \$view->vars['type'] = 'number';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            // default scale is locale specific (usually around 3)
            'scale' => null,
            'grouping' => false,
            'rounding_mode' => NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            'compound' => false,
            'input' => 'number',
            'html5' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            NumberToLocalizedStringTransformer::ROUND_FLOOR,
            NumberToLocalizedStringTransformer::ROUND_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_EVEN,
            NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            NumberToLocalizedStringTransformer::ROUND_UP,
            NumberToLocalizedStringTransformer::ROUND_CEILING,
        ]);
        \$resolver->setAllowedValues('input', ['number', 'string']);
        \$resolver->setAllowedTypes('scale', ['null', 'int']);
        \$resolver->setAllowedTypes('html5', 'bool');

        \$resolver->setNormalizer('grouping', function (Options \$options, \$value) {
            if (true === \$value && \$options['html5']) {
                throw new LogicException('Cannot use the \"grouping\" option when the \"html5\" option is enabled.');
            }

            return \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'number';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/NumberType.php";
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
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\NumberToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\StringToFloatTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class NumberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addViewTransformer(new NumberToLocalizedStringTransformer(
            \$options['scale'],
            \$options['grouping'],
            \$options['rounding_mode'],
            \$options['html5'] ? 'en' : null
        ));

        if ('string' === \$options['input']) {
            \$builder->addModelTransformer(new StringToFloatTransformer(\$options['scale']));
            \$builder->addModelTransformer(new CallbackTransformer(
                function (\$value) {
                    return \\is_float(\$value) || \\is_int(\$value) ? (string) \$value : \$value;
                },
                function (\$value) {
                    return \$value;
                }
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['html5']) {
            \$view->vars['type'] = 'number';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            // default scale is locale specific (usually around 3)
            'scale' => null,
            'grouping' => false,
            'rounding_mode' => NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            'compound' => false,
            'input' => 'number',
            'html5' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            NumberToLocalizedStringTransformer::ROUND_FLOOR,
            NumberToLocalizedStringTransformer::ROUND_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_EVEN,
            NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            NumberToLocalizedStringTransformer::ROUND_UP,
            NumberToLocalizedStringTransformer::ROUND_CEILING,
        ]);
        \$resolver->setAllowedValues('input', ['number', 'string']);
        \$resolver->setAllowedTypes('scale', ['null', 'int']);
        \$resolver->setAllowedTypes('html5', 'bool');

        \$resolver->setNormalizer('grouping', function (Options \$options, \$value) {
            if (true === \$value && \$options['html5']) {
                throw new LogicException('Cannot use the \"grouping\" option when the \"html5\" option is enabled.');
            }

            return \$value;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'number';
    }
}
", "vendor/symfony/form/Extension/Core/Type/NumberType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/NumberType.php");
    }
}
