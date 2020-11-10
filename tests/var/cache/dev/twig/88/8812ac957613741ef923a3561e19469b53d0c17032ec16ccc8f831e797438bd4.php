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

/* vendor/symfony/form/FormConfigBuilder.php */
class __TwigTemplate_2174472338ae48e382be3fb1a641b0801b2ba9ac60676a0cc53a53a8eb77b039 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormConfigBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormConfigBuilder.php"));

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
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\ImmutableEventDispatcher;
use Symfony\\Component\\Form\\Exception\\BadMethodCallException;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * A basic form configuration.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormConfigBuilder implements FormConfigBuilderInterface
{
    /**
     * Caches a globally unique {@link NativeRequestHandler} instance.
     *
     * @var NativeRequestHandler
     */
    private static \$nativeRequestHandler;

    protected \$locked = false;
    private \$dispatcher;
    private \$name;

    /**
     * @var PropertyPathInterface|string|null
     */
    private \$propertyPath;

    private \$mapped = true;
    private \$byReference = true;
    private \$inheritData = false;
    private \$compound = false;

    /**
     * @var ResolvedFormTypeInterface
     */
    private \$type;

    private \$viewTransformers = [];
    private \$modelTransformers = [];

    /**
     * @var DataMapperInterface|null
     */
    private \$dataMapper;

    private \$required = true;
    private \$disabled = false;
    private \$errorBubbling = false;

    /**
     * @var mixed
     */
    private \$emptyData;

    private \$attributes = [];

    /**
     * @var mixed
     */
    private \$data;

    /**
     * @var string|null
     */
    private \$dataClass;

    private \$dataLocked = false;

    /**
     * @var FormFactoryInterface|null
     */
    private \$formFactory;

    /**
     * @var string|null
     */
    private \$action;

    private \$method = 'POST';

    /**
     * @var RequestHandlerInterface|null
     */
    private \$requestHandler;

    private \$autoInitialize = false;
    private \$options;

    /**
     * Creates an empty form configuration.
     *
     * @param string      \$name      The form name
     * @param string|null \$dataClass The class of the form's data
     *
     * @throws InvalidArgumentException if the data class is not a valid class or if
     *                                  the name contains invalid characters
     */
    public function __construct(\$name, ?string \$dataClass, EventDispatcherInterface \$dispatcher, array \$options = [])
    {
        self::validateName(\$name);

        if (null !== \$dataClass && !class_exists(\$dataClass) && !interface_exists(\$dataClass, false)) {
            throw new InvalidArgumentException(sprintf('Class \"%s\" not found. Is the \"data_class\" form option set correctly?', \$dataClass));
        }

        \$this->name = (string) \$name;
        \$this->dataClass = \$dataClass;
        \$this->dispatcher = \$dispatcher;
        \$this->options = \$options;
    }

    /**
     * {@inheritdoc}
     */
    public function addEventListener(\$eventName, \$listener, \$priority = 0)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dispatcher->addListener(\$eventName, \$listener, \$priority);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addEventSubscriber(EventSubscriberInterface \$subscriber)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dispatcher->addSubscriber(\$subscriber);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addViewTransformer(DataTransformerInterface \$viewTransformer, \$forcePrepend = false)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$forcePrepend) {
            array_unshift(\$this->viewTransformers, \$viewTransformer);
        } else {
            \$this->viewTransformers[] = \$viewTransformer;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetViewTransformers()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->viewTransformers = [];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addModelTransformer(DataTransformerInterface \$modelTransformer, \$forceAppend = false)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$forceAppend) {
            \$this->modelTransformers[] = \$modelTransformer;
        } else {
            array_unshift(\$this->modelTransformers, \$modelTransformer);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetModelTransformers()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->modelTransformers = [];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher()
    {
        if (\$this->locked && !\$this->dispatcher instanceof ImmutableEventDispatcher) {
            \$this->dispatcher = new ImmutableEventDispatcher(\$this->dispatcher);
        }

        return \$this->dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyPath()
    {
        return \$this->propertyPath;
    }

    /**
     * {@inheritdoc}
     */
    public function getMapped()
    {
        return \$this->mapped;
    }

    /**
     * {@inheritdoc}
     */
    public function getByReference()
    {
        return \$this->byReference;
    }

    /**
     * {@inheritdoc}
     */
    public function getInheritData()
    {
        return \$this->inheritData;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompound()
    {
        return \$this->compound;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getViewTransformers()
    {
        return \$this->viewTransformers;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelTransformers()
    {
        return \$this->modelTransformers;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataMapper()
    {
        return \$this->dataMapper;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequired()
    {
        return \$this->required;
    }

    /**
     * {@inheritdoc}
     */
    public function getDisabled()
    {
        return \$this->disabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorBubbling()
    {
        return \$this->errorBubbling;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyData()
    {
        return \$this->emptyData;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAttribute(\$name)
    {
        return \\array_key_exists(\$name, \$this->attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->attributes) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataClass()
    {
        return \$this->dataClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataLocked()
    {
        return \$this->dataLocked;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormFactory()
    {
        return \$this->formFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestHandler()
    {
        if (null === \$this->requestHandler) {
            if (null === self::\$nativeRequestHandler) {
                self::\$nativeRequestHandler = new NativeRequestHandler();
            }
            \$this->requestHandler = self::\$nativeRequestHandler;
        }

        return \$this->requestHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoInitialize()
    {
        return \$this->autoInitialize;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(\$name)
    {
        return \\array_key_exists(\$name, \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute(\$name, \$value)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->attributes[\$name] = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributes(array \$attributes)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->attributes = \$attributes;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataMapper(DataMapperInterface \$dataMapper = null)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dataMapper = \$dataMapper;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisabled(\$disabled)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->disabled = (bool) \$disabled;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmptyData(\$emptyData)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->emptyData = \$emptyData;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorBubbling(\$errorBubbling)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->errorBubbling = (bool) \$errorBubbling;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequired(\$required)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->required = (bool) \$required;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPropertyPath(\$propertyPath)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (null !== \$propertyPath && !\$propertyPath instanceof PropertyPathInterface) {
            \$propertyPath = new PropertyPath(\$propertyPath);
        }

        \$this->propertyPath = \$propertyPath;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMapped(\$mapped)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->mapped = (bool) \$mapped;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setByReference(\$byReference)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->byReference = (bool) \$byReference;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setInheritData(\$inheritData)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->inheritData = (bool) \$inheritData;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCompound(\$compound)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->compound = (bool) \$compound;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(ResolvedFormTypeInterface \$type)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->type = \$type;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setData(\$data)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->data = \$data;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataLocked(\$locked)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dataLocked = (bool) \$locked;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormFactory(FormFactoryInterface \$formFactory)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->formFactory = \$formFactory;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAction(\$action)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->action = (string) \$action;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod(\$method)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->method = strtoupper(\$method);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequestHandler(RequestHandlerInterface \$requestHandler)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->requestHandler = \$requestHandler;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAutoInitialize(\$initialize)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->autoInitialize = (bool) \$initialize;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormConfig()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        // This method should be idempotent, so clone the builder
        \$config = clone \$this;
        \$config->locked = true;

        return \$config;
    }

    /**
     * Validates whether the given variable is a valid form name.
     *
     * @param string|null \$name The tested form name
     *
     * @throws UnexpectedTypeException  if the name is not a string or an integer
     * @throws InvalidArgumentException if the name contains invalid characters
     */
    public static function validateName(\$name)
    {
        if (null !== \$name && !\\is_string(\$name) && !\\is_int(\$name)) {
            throw new UnexpectedTypeException(\$name, 'string or null');
        }

        if (!self::isValidName(\$name)) {
            throw new InvalidArgumentException(sprintf('The name \"%s\" contains illegal characters. Names should start with a letter, digit or underscore and only contain letters, digits, numbers, underscores (\"_\"), hyphens (\"-\") and colons (\":\").', \$name));
        }
    }

    /**
     * Returns whether the given variable contains a valid form name.
     *
     * A name is accepted if it
     *
     *   * is empty
     *   * starts with a letter, digit or underscore
     *   * contains only letters, digits, numbers, underscores (\"_\"),
     *     hyphens (\"-\") and colons (\":\")
     *
     * @param string|null \$name The tested form name
     *
     * @return bool Whether the name is valid
     */
    public static function isValidName(\$name)
    {
        return '' === \$name || null === \$name || preg_match('/^[a-zA-Z0-9_][a-zA-Z0-9_\\-:]*\$/D', \$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormConfigBuilder.php";
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
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\ImmutableEventDispatcher;
use Symfony\\Component\\Form\\Exception\\BadMethodCallException;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * A basic form configuration.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormConfigBuilder implements FormConfigBuilderInterface
{
    /**
     * Caches a globally unique {@link NativeRequestHandler} instance.
     *
     * @var NativeRequestHandler
     */
    private static \$nativeRequestHandler;

    protected \$locked = false;
    private \$dispatcher;
    private \$name;

    /**
     * @var PropertyPathInterface|string|null
     */
    private \$propertyPath;

    private \$mapped = true;
    private \$byReference = true;
    private \$inheritData = false;
    private \$compound = false;

    /**
     * @var ResolvedFormTypeInterface
     */
    private \$type;

    private \$viewTransformers = [];
    private \$modelTransformers = [];

    /**
     * @var DataMapperInterface|null
     */
    private \$dataMapper;

    private \$required = true;
    private \$disabled = false;
    private \$errorBubbling = false;

    /**
     * @var mixed
     */
    private \$emptyData;

    private \$attributes = [];

    /**
     * @var mixed
     */
    private \$data;

    /**
     * @var string|null
     */
    private \$dataClass;

    private \$dataLocked = false;

    /**
     * @var FormFactoryInterface|null
     */
    private \$formFactory;

    /**
     * @var string|null
     */
    private \$action;

    private \$method = 'POST';

    /**
     * @var RequestHandlerInterface|null
     */
    private \$requestHandler;

    private \$autoInitialize = false;
    private \$options;

    /**
     * Creates an empty form configuration.
     *
     * @param string      \$name      The form name
     * @param string|null \$dataClass The class of the form's data
     *
     * @throws InvalidArgumentException if the data class is not a valid class or if
     *                                  the name contains invalid characters
     */
    public function __construct(\$name, ?string \$dataClass, EventDispatcherInterface \$dispatcher, array \$options = [])
    {
        self::validateName(\$name);

        if (null !== \$dataClass && !class_exists(\$dataClass) && !interface_exists(\$dataClass, false)) {
            throw new InvalidArgumentException(sprintf('Class \"%s\" not found. Is the \"data_class\" form option set correctly?', \$dataClass));
        }

        \$this->name = (string) \$name;
        \$this->dataClass = \$dataClass;
        \$this->dispatcher = \$dispatcher;
        \$this->options = \$options;
    }

    /**
     * {@inheritdoc}
     */
    public function addEventListener(\$eventName, \$listener, \$priority = 0)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dispatcher->addListener(\$eventName, \$listener, \$priority);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addEventSubscriber(EventSubscriberInterface \$subscriber)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dispatcher->addSubscriber(\$subscriber);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addViewTransformer(DataTransformerInterface \$viewTransformer, \$forcePrepend = false)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$forcePrepend) {
            array_unshift(\$this->viewTransformers, \$viewTransformer);
        } else {
            \$this->viewTransformers[] = \$viewTransformer;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetViewTransformers()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->viewTransformers = [];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addModelTransformer(DataTransformerInterface \$modelTransformer, \$forceAppend = false)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$forceAppend) {
            \$this->modelTransformers[] = \$modelTransformer;
        } else {
            array_unshift(\$this->modelTransformers, \$modelTransformer);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetModelTransformers()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->modelTransformers = [];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher()
    {
        if (\$this->locked && !\$this->dispatcher instanceof ImmutableEventDispatcher) {
            \$this->dispatcher = new ImmutableEventDispatcher(\$this->dispatcher);
        }

        return \$this->dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyPath()
    {
        return \$this->propertyPath;
    }

    /**
     * {@inheritdoc}
     */
    public function getMapped()
    {
        return \$this->mapped;
    }

    /**
     * {@inheritdoc}
     */
    public function getByReference()
    {
        return \$this->byReference;
    }

    /**
     * {@inheritdoc}
     */
    public function getInheritData()
    {
        return \$this->inheritData;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompound()
    {
        return \$this->compound;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getViewTransformers()
    {
        return \$this->viewTransformers;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelTransformers()
    {
        return \$this->modelTransformers;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataMapper()
    {
        return \$this->dataMapper;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequired()
    {
        return \$this->required;
    }

    /**
     * {@inheritdoc}
     */
    public function getDisabled()
    {
        return \$this->disabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorBubbling()
    {
        return \$this->errorBubbling;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyData()
    {
        return \$this->emptyData;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAttribute(\$name)
    {
        return \\array_key_exists(\$name, \$this->attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->attributes) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataClass()
    {
        return \$this->dataClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataLocked()
    {
        return \$this->dataLocked;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormFactory()
    {
        return \$this->formFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestHandler()
    {
        if (null === \$this->requestHandler) {
            if (null === self::\$nativeRequestHandler) {
                self::\$nativeRequestHandler = new NativeRequestHandler();
            }
            \$this->requestHandler = self::\$nativeRequestHandler;
        }

        return \$this->requestHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoInitialize()
    {
        return \$this->autoInitialize;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption(\$name)
    {
        return \\array_key_exists(\$name, \$this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->options) ? \$this->options[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute(\$name, \$value)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->attributes[\$name] = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributes(array \$attributes)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->attributes = \$attributes;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataMapper(DataMapperInterface \$dataMapper = null)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dataMapper = \$dataMapper;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisabled(\$disabled)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->disabled = (bool) \$disabled;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmptyData(\$emptyData)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->emptyData = \$emptyData;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorBubbling(\$errorBubbling)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->errorBubbling = (bool) \$errorBubbling;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequired(\$required)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->required = (bool) \$required;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPropertyPath(\$propertyPath)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (null !== \$propertyPath && !\$propertyPath instanceof PropertyPathInterface) {
            \$propertyPath = new PropertyPath(\$propertyPath);
        }

        \$this->propertyPath = \$propertyPath;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMapped(\$mapped)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->mapped = (bool) \$mapped;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setByReference(\$byReference)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->byReference = (bool) \$byReference;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setInheritData(\$inheritData)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->inheritData = (bool) \$inheritData;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCompound(\$compound)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->compound = (bool) \$compound;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(ResolvedFormTypeInterface \$type)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->type = \$type;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setData(\$data)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->data = \$data;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataLocked(\$locked)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->dataLocked = (bool) \$locked;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormFactory(FormFactoryInterface \$formFactory)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->formFactory = \$formFactory;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAction(\$action)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->action = (string) \$action;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod(\$method)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->method = strtoupper(\$method);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequestHandler(RequestHandlerInterface \$requestHandler)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('The config builder cannot be modified anymore.');
        }

        \$this->requestHandler = \$requestHandler;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAutoInitialize(\$initialize)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->autoInitialize = (bool) \$initialize;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormConfig()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormConfigBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        // This method should be idempotent, so clone the builder
        \$config = clone \$this;
        \$config->locked = true;

        return \$config;
    }

    /**
     * Validates whether the given variable is a valid form name.
     *
     * @param string|null \$name The tested form name
     *
     * @throws UnexpectedTypeException  if the name is not a string or an integer
     * @throws InvalidArgumentException if the name contains invalid characters
     */
    public static function validateName(\$name)
    {
        if (null !== \$name && !\\is_string(\$name) && !\\is_int(\$name)) {
            throw new UnexpectedTypeException(\$name, 'string or null');
        }

        if (!self::isValidName(\$name)) {
            throw new InvalidArgumentException(sprintf('The name \"%s\" contains illegal characters. Names should start with a letter, digit or underscore and only contain letters, digits, numbers, underscores (\"_\"), hyphens (\"-\") and colons (\":\").', \$name));
        }
    }

    /**
     * Returns whether the given variable contains a valid form name.
     *
     * A name is accepted if it
     *
     *   * is empty
     *   * starts with a letter, digit or underscore
     *   * contains only letters, digits, numbers, underscores (\"_\"),
     *     hyphens (\"-\") and colons (\":\")
     *
     * @param string|null \$name The tested form name
     *
     * @return bool Whether the name is valid
     */
    public static function isValidName(\$name)
    {
        return '' === \$name || null === \$name || preg_match('/^[a-zA-Z0-9_][a-zA-Z0-9_\\-:]*\$/D', \$name);
    }
}
", "vendor/symfony/form/FormConfigBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormConfigBuilder.php");
    }
}
