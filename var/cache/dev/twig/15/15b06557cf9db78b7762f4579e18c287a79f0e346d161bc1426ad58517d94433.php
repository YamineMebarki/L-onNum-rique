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

/* vendor/symfony/form/Extension/Core/Type/IntegerType.php */
class __TwigTemplate_322253d7e89a9ab29b9a2902970281aa986c1a52d9241e1b363692ba4f3c473e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/IntegerType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/IntegerType.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntegerToLocalizedStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class IntegerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addViewTransformer(new IntegerToLocalizedStringTransformer(\$options['grouping'], \$options['rounding_mode']));
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['grouping']) {
            \$view->vars['type'] = 'text';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'grouping' => false,
            // Integer cast rounds towards 0, so do the same when displaying fractions
            'rounding_mode' => IntegerToLocalizedStringTransformer::ROUND_DOWN,
            'compound' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            IntegerToLocalizedStringTransformer::ROUND_FLOOR,
            IntegerToLocalizedStringTransformer::ROUND_DOWN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_UP,
            IntegerToLocalizedStringTransformer::ROUND_UP,
            IntegerToLocalizedStringTransformer::ROUND_CEILING,
        ]);

        \$resolver->setDefined('scale');
        \$resolver->setAllowedTypes('scale', ['null', 'int']);
        \$resolver->setDeprecated('scale');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'integer';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/IntegerType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\IntegerToLocalizedStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class IntegerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addViewTransformer(new IntegerToLocalizedStringTransformer(\$options['grouping'], \$options['rounding_mode']));
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (\$options['grouping']) {
            \$view->vars['type'] = 'text';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'grouping' => false,
            // Integer cast rounds towards 0, so do the same when displaying fractions
            'rounding_mode' => IntegerToLocalizedStringTransformer::ROUND_DOWN,
            'compound' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            IntegerToLocalizedStringTransformer::ROUND_FLOOR,
            IntegerToLocalizedStringTransformer::ROUND_DOWN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_DOWN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_EVEN,
            IntegerToLocalizedStringTransformer::ROUND_HALF_UP,
            IntegerToLocalizedStringTransformer::ROUND_UP,
            IntegerToLocalizedStringTransformer::ROUND_CEILING,
        ]);

        \$resolver->setDefined('scale');
        \$resolver->setAllowedTypes('scale', ['null', 'int']);
        \$resolver->setDeprecated('scale');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'integer';
    }
}
", "vendor/symfony/form/Extension/Core/Type/IntegerType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/IntegerType.php");
    }
}
