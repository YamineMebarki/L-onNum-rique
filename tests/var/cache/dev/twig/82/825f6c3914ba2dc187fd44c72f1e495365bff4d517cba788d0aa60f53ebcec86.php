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

/* vendor/symfony/form/Extension/Core/Type/RepeatedType.php */
class __TwigTemplate_c717fb0fc37336404689e9d00124cdece99cbbde0599250ef567f207bbdf5cfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/RepeatedType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/RepeatedType.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ValueToDuplicatesTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RepeatedType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Overwrite required option for child fields
        \$options['first_options']['required'] = \$options['required'];
        \$options['second_options']['required'] = \$options['required'];

        if (!isset(\$options['options']['error_bubbling'])) {
            \$options['options']['error_bubbling'] = \$options['error_bubbling'];
        }

        \$builder
            ->addViewTransformer(new ValueToDuplicatesTransformer([
                \$options['first_name'],
                \$options['second_name'],
            ]))
            ->add(\$options['first_name'], \$options['type'], array_merge(\$options['options'], \$options['first_options']))
            ->add(\$options['second_name'], \$options['type'], array_merge(\$options['options'], \$options['second_options']))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'type' => __NAMESPACE__.'\\TextType',
            'options' => [],
            'first_options' => [],
            'second_options' => [],
            'first_name' => 'first',
            'second_name' => 'second',
            'error_bubbling' => false,
        ]);

        \$resolver->setAllowedTypes('options', 'array');
        \$resolver->setAllowedTypes('first_options', 'array');
        \$resolver->setAllowedTypes('second_options', 'array');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'repeated';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/RepeatedType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\ValueToDuplicatesTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RepeatedType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Overwrite required option for child fields
        \$options['first_options']['required'] = \$options['required'];
        \$options['second_options']['required'] = \$options['required'];

        if (!isset(\$options['options']['error_bubbling'])) {
            \$options['options']['error_bubbling'] = \$options['error_bubbling'];
        }

        \$builder
            ->addViewTransformer(new ValueToDuplicatesTransformer([
                \$options['first_name'],
                \$options['second_name'],
            ]))
            ->add(\$options['first_name'], \$options['type'], array_merge(\$options['options'], \$options['first_options']))
            ->add(\$options['second_name'], \$options['type'], array_merge(\$options['options'], \$options['second_options']))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'type' => __NAMESPACE__.'\\TextType',
            'options' => [],
            'first_options' => [],
            'second_options' => [],
            'first_name' => 'first',
            'second_name' => 'second',
            'error_bubbling' => false,
        ]);

        \$resolver->setAllowedTypes('options', 'array');
        \$resolver->setAllowedTypes('first_options', 'array');
        \$resolver->setAllowedTypes('second_options', 'array');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'repeated';
    }
}
", "vendor/symfony/form/Extension/Core/Type/RepeatedType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/RepeatedType.php");
    }
}
