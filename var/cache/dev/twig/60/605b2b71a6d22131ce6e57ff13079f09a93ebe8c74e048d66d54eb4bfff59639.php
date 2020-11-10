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

/* vendor/symfony/form/FormConfigInterface.php */
class __TwigTemplate_0389204478df124241a949662f90c0a9de822eb643a587114fda9d85dba35a89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormConfigInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormConfigInterface.php"));

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

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * The configuration of a {@link Form} object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormConfigInterface
{
    /**
     * Returns the event dispatcher used to dispatch form events.
     *
     * @return EventDispatcherInterface The dispatcher
     */
    public function getEventDispatcher();

    /**
     * Returns the name of the form used as HTTP parameter.
     *
     * @return string The form name
     */
    public function getName();

    /**
     * Returns the property path that the form should be mapped to.
     *
     * @return PropertyPathInterface|null The property path
     */
    public function getPropertyPath();

    /**
     * Returns whether the form should be mapped to an element of its
     * parent's data.
     *
     * @return bool Whether the form is mapped
     */
    public function getMapped();

    /**
     * Returns whether the form's data should be modified by reference.
     *
     * @return bool Whether to modify the form's data by reference
     */
    public function getByReference();

    /**
     * Returns whether the form should read and write the data of its parent.
     *
     * @return bool Whether the form should inherit its parent's data
     */
    public function getInheritData();

    /**
     * Returns whether the form is compound.
     *
     * This property is independent of whether the form actually has
     * children. A form can be compound and have no children at all, like
     * for example an empty collection form.
     * The contrary is not possible, a form which is not compound
     * cannot have any children.
     *
     * @return bool Whether the form is compound
     */
    public function getCompound();

    /**
     * Returns the resolved form type used to construct the form.
     *
     * @return ResolvedFormTypeInterface The form's resolved type
     */
    public function getType();

    /**
     * Returns the view transformers of the form.
     *
     * @return DataTransformerInterface[] An array of {@link DataTransformerInterface} instances
     */
    public function getViewTransformers();

    /**
     * Returns the model transformers of the form.
     *
     * @return DataTransformerInterface[] An array of {@link DataTransformerInterface} instances
     */
    public function getModelTransformers();

    /**
     * Returns the data mapper of the compound form or null for a simple form.
     *
     * @return DataMapperInterface|null The data mapper
     */
    public function getDataMapper();

    /**
     * Returns whether the form is required.
     *
     * @return bool Whether the form is required
     */
    public function getRequired();

    /**
     * Returns whether the form is disabled.
     *
     * @return bool Whether the form is disabled
     */
    public function getDisabled();

    /**
     * Returns whether errors attached to the form will bubble to its parent.
     *
     * @return bool Whether errors will bubble up
     */
    public function getErrorBubbling();

    /**
     * Used when the view data is empty on submission.
     *
     * When the form is compound it will also be used to map the
     * children data.
     *
     * The empty data must match the view format as it will passed to the first view transformer's
     * \"reverseTransform\" method.
     *
     * @return mixed The data used when the submitted form is initially empty
     */
    public function getEmptyData();

    /**
     * Returns additional attributes of the form.
     *
     * @return array An array of key-value combinations
     */
    public function getAttributes();

    /**
     * Returns whether the attribute with the given name exists.
     *
     * @param string \$name The attribute name
     *
     * @return bool Whether the attribute exists
     */
    public function hasAttribute(\$name);

    /**
     * Returns the value of the given attribute.
     *
     * @param string \$name    The attribute name
     * @param mixed  \$default The value returned if the attribute does not exist
     *
     * @return mixed The attribute value
     */
    public function getAttribute(\$name, \$default = null);

    /**
     * Returns the initial data of the form.
     *
     * @return mixed The initial form data
     */
    public function getData();

    /**
     * Returns the class of the view data or null if the data is scalar or an array.
     *
     * @return string|null The data class or null
     */
    public function getDataClass();

    /**
     * Returns whether the form's data is locked.
     *
     * A form with locked data is restricted to the data passed in
     * this configuration. The data can only be modified then by
     * submitting the form.
     *
     * @return bool Whether the data is locked
     */
    public function getDataLocked();

    /**
     * Returns the form factory used for creating new forms.
     *
     * @return FormFactoryInterface The form factory
     */
    public function getFormFactory();

    /**
     * Returns the target URL of the form.
     *
     * @return string The target URL of the form
     */
    public function getAction();

    /**
     * Returns the HTTP method used by the form.
     *
     * @return string The HTTP method of the form
     */
    public function getMethod();

    /**
     * Returns the request handler used by the form.
     *
     * @return RequestHandlerInterface The request handler
     */
    public function getRequestHandler();

    /**
     * Returns whether the form should be initialized upon creation.
     *
     * @return bool returns true if the form should be initialized
     *              when created, false otherwise
     */
    public function getAutoInitialize();

    /**
     * Returns all options passed during the construction of the form.
     *
     * @return array The passed options
     */
    public function getOptions();

    /**
     * Returns whether a specific option exists.
     *
     * @param string \$name The option name,
     *
     * @return bool Whether the option exists
     */
    public function hasOption(\$name);

    /**
     * Returns the value of a specific option.
     *
     * @param string \$name    The option name
     * @param mixed  \$default The value returned if the option does not exist
     *
     * @return mixed The option value
     */
    public function getOption(\$name, \$default = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormConfigInterface.php";
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

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * The configuration of a {@link Form} object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormConfigInterface
{
    /**
     * Returns the event dispatcher used to dispatch form events.
     *
     * @return EventDispatcherInterface The dispatcher
     */
    public function getEventDispatcher();

    /**
     * Returns the name of the form used as HTTP parameter.
     *
     * @return string The form name
     */
    public function getName();

    /**
     * Returns the property path that the form should be mapped to.
     *
     * @return PropertyPathInterface|null The property path
     */
    public function getPropertyPath();

    /**
     * Returns whether the form should be mapped to an element of its
     * parent's data.
     *
     * @return bool Whether the form is mapped
     */
    public function getMapped();

    /**
     * Returns whether the form's data should be modified by reference.
     *
     * @return bool Whether to modify the form's data by reference
     */
    public function getByReference();

    /**
     * Returns whether the form should read and write the data of its parent.
     *
     * @return bool Whether the form should inherit its parent's data
     */
    public function getInheritData();

    /**
     * Returns whether the form is compound.
     *
     * This property is independent of whether the form actually has
     * children. A form can be compound and have no children at all, like
     * for example an empty collection form.
     * The contrary is not possible, a form which is not compound
     * cannot have any children.
     *
     * @return bool Whether the form is compound
     */
    public function getCompound();

    /**
     * Returns the resolved form type used to construct the form.
     *
     * @return ResolvedFormTypeInterface The form's resolved type
     */
    public function getType();

    /**
     * Returns the view transformers of the form.
     *
     * @return DataTransformerInterface[] An array of {@link DataTransformerInterface} instances
     */
    public function getViewTransformers();

    /**
     * Returns the model transformers of the form.
     *
     * @return DataTransformerInterface[] An array of {@link DataTransformerInterface} instances
     */
    public function getModelTransformers();

    /**
     * Returns the data mapper of the compound form or null for a simple form.
     *
     * @return DataMapperInterface|null The data mapper
     */
    public function getDataMapper();

    /**
     * Returns whether the form is required.
     *
     * @return bool Whether the form is required
     */
    public function getRequired();

    /**
     * Returns whether the form is disabled.
     *
     * @return bool Whether the form is disabled
     */
    public function getDisabled();

    /**
     * Returns whether errors attached to the form will bubble to its parent.
     *
     * @return bool Whether errors will bubble up
     */
    public function getErrorBubbling();

    /**
     * Used when the view data is empty on submission.
     *
     * When the form is compound it will also be used to map the
     * children data.
     *
     * The empty data must match the view format as it will passed to the first view transformer's
     * \"reverseTransform\" method.
     *
     * @return mixed The data used when the submitted form is initially empty
     */
    public function getEmptyData();

    /**
     * Returns additional attributes of the form.
     *
     * @return array An array of key-value combinations
     */
    public function getAttributes();

    /**
     * Returns whether the attribute with the given name exists.
     *
     * @param string \$name The attribute name
     *
     * @return bool Whether the attribute exists
     */
    public function hasAttribute(\$name);

    /**
     * Returns the value of the given attribute.
     *
     * @param string \$name    The attribute name
     * @param mixed  \$default The value returned if the attribute does not exist
     *
     * @return mixed The attribute value
     */
    public function getAttribute(\$name, \$default = null);

    /**
     * Returns the initial data of the form.
     *
     * @return mixed The initial form data
     */
    public function getData();

    /**
     * Returns the class of the view data or null if the data is scalar or an array.
     *
     * @return string|null The data class or null
     */
    public function getDataClass();

    /**
     * Returns whether the form's data is locked.
     *
     * A form with locked data is restricted to the data passed in
     * this configuration. The data can only be modified then by
     * submitting the form.
     *
     * @return bool Whether the data is locked
     */
    public function getDataLocked();

    /**
     * Returns the form factory used for creating new forms.
     *
     * @return FormFactoryInterface The form factory
     */
    public function getFormFactory();

    /**
     * Returns the target URL of the form.
     *
     * @return string The target URL of the form
     */
    public function getAction();

    /**
     * Returns the HTTP method used by the form.
     *
     * @return string The HTTP method of the form
     */
    public function getMethod();

    /**
     * Returns the request handler used by the form.
     *
     * @return RequestHandlerInterface The request handler
     */
    public function getRequestHandler();

    /**
     * Returns whether the form should be initialized upon creation.
     *
     * @return bool returns true if the form should be initialized
     *              when created, false otherwise
     */
    public function getAutoInitialize();

    /**
     * Returns all options passed during the construction of the form.
     *
     * @return array The passed options
     */
    public function getOptions();

    /**
     * Returns whether a specific option exists.
     *
     * @param string \$name The option name,
     *
     * @return bool Whether the option exists
     */
    public function hasOption(\$name);

    /**
     * Returns the value of a specific option.
     *
     * @param string \$name    The option name
     * @param mixed  \$default The value returned if the option does not exist
     *
     * @return mixed The option value
     */
    public function getOption(\$name, \$default = null);
}
", "vendor/symfony/form/FormConfigInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormConfigInterface.php");
    }
}
