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

/* vendor/symfony/form/FormTypeInterface.php */
class __TwigTemplate_76e53ef46db7c490aa35fcfac99113a859295e224d6e3b65919ec14abd51d24e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeInterface.php"));

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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormTypeInterface
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @see FormTypeExtensionInterface::buildForm()
     *
     * @param FormBuilderInterface \$builder The form builder
     * @param array                \$options The options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options);

    /**
     * Builds the form view.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the view.
     *
     * A view of a form is built before the views of the child forms are built.
     * This means that you cannot access child views in this method. If you need
     * to do so, move your logic to {@link finishView()} instead.
     *
     * @see FormTypeExtensionInterface::buildView()
     *
     * @param FormView      \$view    The view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Finishes the form view.
     *
     * This method gets called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the view.
     *
     * When this method is called, views of the form's children have already
     * been built and finished and can be accessed. You should only implement
     * such logic in this method that actually accesses child views. For everything
     * else you are recommended to implement {@link buildView()} instead.
     *
     * @see FormTypeExtensionInterface::finishView()
     *
     * @param FormView      \$view    The view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver \$resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver \$resolver);

    /**
     * Returns the prefix of the template block name for this type.
     *
     * The block prefix defaults to the underscored short class name with
     * the \"Type\" suffix removed (e.g. \"UserProfileType\" => \"user_profile\").
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix();

    /**
     * Returns the name of the parent type.
     *
     * @return string|null The name of the parent type if any, null otherwise
     */
    public function getParent();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormTypeInterface.php";
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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormTypeInterface
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @see FormTypeExtensionInterface::buildForm()
     *
     * @param FormBuilderInterface \$builder The form builder
     * @param array                \$options The options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options);

    /**
     * Builds the form view.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the view.
     *
     * A view of a form is built before the views of the child forms are built.
     * This means that you cannot access child views in this method. If you need
     * to do so, move your logic to {@link finishView()} instead.
     *
     * @see FormTypeExtensionInterface::buildView()
     *
     * @param FormView      \$view    The view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Finishes the form view.
     *
     * This method gets called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the view.
     *
     * When this method is called, views of the form's children have already
     * been built and finished and can be accessed. You should only implement
     * such logic in this method that actually accesses child views. For everything
     * else you are recommended to implement {@link buildView()} instead.
     *
     * @see FormTypeExtensionInterface::finishView()
     *
     * @param FormView      \$view    The view
     * @param FormInterface \$form    The form
     * @param array         \$options The options
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options);

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver \$resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver \$resolver);

    /**
     * Returns the prefix of the template block name for this type.
     *
     * The block prefix defaults to the underscored short class name with
     * the \"Type\" suffix removed (e.g. \"UserProfileType\" => \"user_profile\").
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix();

    /**
     * Returns the name of the parent type.
     *
     * @return string|null The name of the parent type if any, null otherwise
     */
    public function getParent();
}
", "vendor/symfony/form/FormTypeInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormTypeInterface.php");
    }
}
