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

/* vendor/symfony/form/ResolvedFormType.php */
class __TwigTemplate_a4195c717c3de5f8946a60e7b9cad32a6bffec043bd01e3eb75efe4033b9cd6b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormType.php"));

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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * A wrapper for a form type and its extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedFormType implements ResolvedFormTypeInterface
{
    /**
     * @var FormTypeInterface
     */
    private \$innerType;

    /**
     * @var FormTypeExtensionInterface[]
     */
    private \$typeExtensions;

    /**
     * @var ResolvedFormTypeInterface|null
     */
    private \$parent;

    /**
     * @var OptionsResolver
     */
    private \$optionsResolver;

    public function __construct(FormTypeInterface \$innerType, array \$typeExtensions = [], ResolvedFormTypeInterface \$parent = null)
    {
        foreach (\$typeExtensions as \$extension) {
            if (!\$extension instanceof FormTypeExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormTypeExtensionInterface');
            }
        }

        \$this->innerType = \$innerType;
        \$this->typeExtensions = \$typeExtensions;
        \$this->parent = \$parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return \$this->innerType->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getInnerType()
    {
        return \$this->innerType;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions()
    {
        return \$this->typeExtensions;
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = [])
    {
        \$options = \$this->getOptionsResolver()->resolve(\$options);

        // Should be decoupled from the specific option at some point
        \$dataClass = isset(\$options['data_class']) ? \$options['data_class'] : null;

        \$builder = \$this->newBuilder(\$name, \$dataClass, \$factory, \$options);
        \$builder->setType(\$this);

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createView(FormInterface \$form, FormView \$parent = null)
    {
        return \$this->newView(\$parent);
    }

    /**
     * Configures a form builder for the type hierarchy.
     *
     * @param FormBuilderInterface \$builder The builder to configure
     * @param array                \$options The options used for the configuration
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->buildForm(\$builder, \$options);
        }

        \$this->innerType->buildForm(\$builder, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            \$extension->buildForm(\$builder, \$options);
        }
    }

    /**
     * Configures a form view for the type hierarchy.
     *
     * This method is called before the children of the view are built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->buildView(\$view, \$form, \$options);
        }

        \$this->innerType->buildView(\$view, \$form, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            \$extension->buildView(\$view, \$form, \$options);
        }
    }

    /**
     * Finishes a form view for the type hierarchy.
     *
     * This method is called after the children of the view have been built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->finishView(\$view, \$form, \$options);
        }

        \$this->innerType->finishView(\$view, \$form, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            /* @var FormTypeExtensionInterface \$extension */
            \$extension->finishView(\$view, \$form, \$options);
        }
    }

    /**
     * Returns the configured options resolver used for this type.
     *
     * @return \\Symfony\\Component\\OptionsResolver\\OptionsResolver The options resolver
     */
    public function getOptionsResolver()
    {
        if (null === \$this->optionsResolver) {
            if (null !== \$this->parent) {
                \$this->optionsResolver = clone \$this->parent->getOptionsResolver();
            } else {
                \$this->optionsResolver = new OptionsResolver();
            }

            \$this->innerType->configureOptions(\$this->optionsResolver);

            foreach (\$this->typeExtensions as \$extension) {
                \$extension->configureOptions(\$this->optionsResolver);
            }
        }

        return \$this->optionsResolver;
    }

    /**
     * Creates a new builder instance.
     *
     * Override this method if you want to customize the builder class.
     *
     * @param string               \$name      The name of the builder
     * @param string|null          \$dataClass The data class
     * @param FormFactoryInterface \$factory   The current form factory
     * @param array                \$options   The builder options
     *
     * @return FormBuilderInterface The new builder instance
     */
    protected function newBuilder(\$name, \$dataClass, FormFactoryInterface \$factory, array \$options)
    {
        if (\$this->innerType instanceof ButtonTypeInterface) {
            return new ButtonBuilder(\$name, \$options);
        }

        if (\$this->innerType instanceof SubmitButtonTypeInterface) {
            return new SubmitButtonBuilder(\$name, \$options);
        }

        return new FormBuilder(\$name, \$dataClass, new EventDispatcher(), \$factory, \$options);
    }

    /**
     * Creates a new view instance.
     *
     * Override this method if you want to customize the view class.
     *
     * @param FormView|null \$parent The parent view, if available
     *
     * @return FormView A new view instance
     */
    protected function newView(FormView \$parent = null)
    {
        return new FormView(\$parent);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ResolvedFormType.php";
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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * A wrapper for a form type and its extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedFormType implements ResolvedFormTypeInterface
{
    /**
     * @var FormTypeInterface
     */
    private \$innerType;

    /**
     * @var FormTypeExtensionInterface[]
     */
    private \$typeExtensions;

    /**
     * @var ResolvedFormTypeInterface|null
     */
    private \$parent;

    /**
     * @var OptionsResolver
     */
    private \$optionsResolver;

    public function __construct(FormTypeInterface \$innerType, array \$typeExtensions = [], ResolvedFormTypeInterface \$parent = null)
    {
        foreach (\$typeExtensions as \$extension) {
            if (!\$extension instanceof FormTypeExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormTypeExtensionInterface');
            }
        }

        \$this->innerType = \$innerType;
        \$this->typeExtensions = \$typeExtensions;
        \$this->parent = \$parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return \$this->innerType->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getInnerType()
    {
        return \$this->innerType;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions()
    {
        return \$this->typeExtensions;
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = [])
    {
        \$options = \$this->getOptionsResolver()->resolve(\$options);

        // Should be decoupled from the specific option at some point
        \$dataClass = isset(\$options['data_class']) ? \$options['data_class'] : null;

        \$builder = \$this->newBuilder(\$name, \$dataClass, \$factory, \$options);
        \$builder->setType(\$this);

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createView(FormInterface \$form, FormView \$parent = null)
    {
        return \$this->newView(\$parent);
    }

    /**
     * Configures a form builder for the type hierarchy.
     *
     * @param FormBuilderInterface \$builder The builder to configure
     * @param array                \$options The options used for the configuration
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->buildForm(\$builder, \$options);
        }

        \$this->innerType->buildForm(\$builder, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            \$extension->buildForm(\$builder, \$options);
        }
    }

    /**
     * Configures a form view for the type hierarchy.
     *
     * This method is called before the children of the view are built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->buildView(\$view, \$form, \$options);
        }

        \$this->innerType->buildView(\$view, \$form, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            \$extension->buildView(\$view, \$form, \$options);
        }
    }

    /**
     * Finishes a form view for the type hierarchy.
     *
     * This method is called after the children of the view have been built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null !== \$this->parent) {
            \$this->parent->finishView(\$view, \$form, \$options);
        }

        \$this->innerType->finishView(\$view, \$form, \$options);

        foreach (\$this->typeExtensions as \$extension) {
            /* @var FormTypeExtensionInterface \$extension */
            \$extension->finishView(\$view, \$form, \$options);
        }
    }

    /**
     * Returns the configured options resolver used for this type.
     *
     * @return \\Symfony\\Component\\OptionsResolver\\OptionsResolver The options resolver
     */
    public function getOptionsResolver()
    {
        if (null === \$this->optionsResolver) {
            if (null !== \$this->parent) {
                \$this->optionsResolver = clone \$this->parent->getOptionsResolver();
            } else {
                \$this->optionsResolver = new OptionsResolver();
            }

            \$this->innerType->configureOptions(\$this->optionsResolver);

            foreach (\$this->typeExtensions as \$extension) {
                \$extension->configureOptions(\$this->optionsResolver);
            }
        }

        return \$this->optionsResolver;
    }

    /**
     * Creates a new builder instance.
     *
     * Override this method if you want to customize the builder class.
     *
     * @param string               \$name      The name of the builder
     * @param string|null          \$dataClass The data class
     * @param FormFactoryInterface \$factory   The current form factory
     * @param array                \$options   The builder options
     *
     * @return FormBuilderInterface The new builder instance
     */
    protected function newBuilder(\$name, \$dataClass, FormFactoryInterface \$factory, array \$options)
    {
        if (\$this->innerType instanceof ButtonTypeInterface) {
            return new ButtonBuilder(\$name, \$options);
        }

        if (\$this->innerType instanceof SubmitButtonTypeInterface) {
            return new SubmitButtonBuilder(\$name, \$options);
        }

        return new FormBuilder(\$name, \$dataClass, new EventDispatcher(), \$factory, \$options);
    }

    /**
     * Creates a new view instance.
     *
     * Override this method if you want to customize the view class.
     *
     * @param FormView|null \$parent The parent view, if available
     *
     * @return FormView A new view instance
     */
    protected function newView(FormView \$parent = null)
    {
        return new FormView(\$parent);
    }
}
", "vendor/symfony/form/ResolvedFormType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ResolvedFormType.php");
    }
}
