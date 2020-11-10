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

/* vendor/symfony/form/Extension/Core/Type/CheckboxType.php */
class __TwigTemplate_d296d48fa93b0eed825a38a52f3f55b151a17c111dfd8908cbfa9b179dc2cdde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/CheckboxType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/CheckboxType.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BooleanToStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class CheckboxType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Unlike in other types, where the data is NULL by default, it
        // needs to be a Boolean here. setData(null) is not acceptable
        // for checkboxes and radio buttons (unless a custom model
        // transformer handles this case).
        // We cannot solve this case via overriding the \"data\" option, because
        // doing so also calls setDataLocked(true).
        \$builder->setData(isset(\$options['data']) ? \$options['data'] : false);
        \$builder->addViewTransformer(new BooleanToStringTransformer(\$options['value'], \$options['false_values']));
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars = array_replace(\$view->vars, [
            'value' => \$options['value'],
            'checked' => null !== \$form->getViewData(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$emptyData = function (FormInterface \$form, \$viewData) {
            return \$viewData;
        };

        \$resolver->setDefaults([
            'value' => '1',
            'empty_data' => \$emptyData,
            'compound' => false,
            'false_values' => [null],
        ]);

        \$resolver->setAllowedTypes('false_values', 'array');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'checkbox';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/CheckboxType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BooleanToStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class CheckboxType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Unlike in other types, where the data is NULL by default, it
        // needs to be a Boolean here. setData(null) is not acceptable
        // for checkboxes and radio buttons (unless a custom model
        // transformer handles this case).
        // We cannot solve this case via overriding the \"data\" option, because
        // doing so also calls setDataLocked(true).
        \$builder->setData(isset(\$options['data']) ? \$options['data'] : false);
        \$builder->addViewTransformer(new BooleanToStringTransformer(\$options['value'], \$options['false_values']));
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars = array_replace(\$view->vars, [
            'value' => \$options['value'],
            'checked' => null !== \$form->getViewData(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$emptyData = function (FormInterface \$form, \$viewData) {
            return \$viewData;
        };

        \$resolver->setDefaults([
            'value' => '1',
            'empty_data' => \$emptyData,
            'compound' => false,
            'false_values' => [null],
        ]);

        \$resolver->setAllowedTypes('false_values', 'array');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'checkbox';
    }
}
", "vendor/symfony/form/Extension/Core/Type/CheckboxType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/CheckboxType.php");
    }
}
