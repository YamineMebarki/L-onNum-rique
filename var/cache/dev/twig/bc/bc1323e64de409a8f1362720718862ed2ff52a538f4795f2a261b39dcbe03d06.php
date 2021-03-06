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

/* vendor/symfony/form/ResolvedFormTypeInterface.php */
class __TwigTemplate_9afa63531cecee2230665ef908692d434068e790f98a56c8ae1c9f3170bc67d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormTypeInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormTypeInterface.php"));

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

use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * A wrapper for a form type and its extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ResolvedFormTypeInterface
{
    /**
     * Returns the prefix of the template block name for this type.
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix();

    /**
     * Returns the parent type.
     *
     * @return self|null The parent type or null
     */
    public function getParent();

    /**
     * Returns the wrapped form type.
     *
     * @return FormTypeInterface The wrapped form type
     */
    public function getInnerType();

    /**
     * Returns the extensions of the wrapped form type.
     *
     * @return FormTypeExtensionInterface[] An array of {@link FormTypeExtensionInterface} instances
     */
    public function getTypeExtensions();

    /**
     * Creates a new form builder for this type.
     *
     * @param FormFactoryInterface \$factory The form factory
     * @param string               \$name    The name for the builder
     * @param array                \$options The builder options
     *
     * @return FormBuilderInterface The created form builder
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = []);

    /**
     * Creates a new form view for a form of this type.
     *
     * @param FormInterface \$form   The form to create a view for
     * @param FormView      \$parent The parent view or null
     *
     * @return FormView The created form view
     */
    public function createView(FormInterface \$form, FormView \$parent = null);

    /**
     * Configures a form builder for the type hierarchy.
     *
     * @param FormBuilderInterface \$builder The builder to configure
     * @param array                \$options The options used for the configuration
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options);

    /**
     * Configures a form view for the type hierarchy.
     *
     * It is called before the children of the view are built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Finishes a form view for the type hierarchy.
     *
     * It is called after the children of the view have been built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Returns the configured options resolver used for this type.
     *
     * @return OptionsResolver The options resolver
     */
    public function getOptionsResolver();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ResolvedFormTypeInterface.php";
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

use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * A wrapper for a form type and its extensions.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ResolvedFormTypeInterface
{
    /**
     * Returns the prefix of the template block name for this type.
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix();

    /**
     * Returns the parent type.
     *
     * @return self|null The parent type or null
     */
    public function getParent();

    /**
     * Returns the wrapped form type.
     *
     * @return FormTypeInterface The wrapped form type
     */
    public function getInnerType();

    /**
     * Returns the extensions of the wrapped form type.
     *
     * @return FormTypeExtensionInterface[] An array of {@link FormTypeExtensionInterface} instances
     */
    public function getTypeExtensions();

    /**
     * Creates a new form builder for this type.
     *
     * @param FormFactoryInterface \$factory The form factory
     * @param string               \$name    The name for the builder
     * @param array                \$options The builder options
     *
     * @return FormBuilderInterface The created form builder
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = []);

    /**
     * Creates a new form view for a form of this type.
     *
     * @param FormInterface \$form   The form to create a view for
     * @param FormView      \$parent The parent view or null
     *
     * @return FormView The created form view
     */
    public function createView(FormInterface \$form, FormView \$parent = null);

    /**
     * Configures a form builder for the type hierarchy.
     *
     * @param FormBuilderInterface \$builder The builder to configure
     * @param array                \$options The options used for the configuration
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options);

    /**
     * Configures a form view for the type hierarchy.
     *
     * It is called before the children of the view are built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Finishes a form view for the type hierarchy.
     *
     * It is called after the children of the view have been built.
     *
     * @param FormView      \$view    The form view to configure
     * @param FormInterface \$form    The form corresponding to the view
     * @param array         \$options The options used for the configuration
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Returns the configured options resolver used for this type.
     *
     * @return OptionsResolver The options resolver
     */
    public function getOptionsResolver();
}
", "vendor/symfony/form/ResolvedFormTypeInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ResolvedFormTypeInterface.php");
    }
}
