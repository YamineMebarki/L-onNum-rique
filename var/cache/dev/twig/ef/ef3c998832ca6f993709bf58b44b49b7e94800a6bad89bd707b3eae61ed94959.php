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

/* vendor/symfony/form/FormBuilder.php */
class __TwigTemplate_411613eede3c1a22d740f13e45ca55e04a74ec1911943ba71e49f84f0b29d298 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormBuilder.php"));

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
use Symfony\\Component\\Form\\Exception\\BadMethodCallException;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * A builder for creating {@link Form} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormBuilder extends FormConfigBuilder implements \\IteratorAggregate, FormBuilderInterface
{
    /**
     * The children of the form builder.
     *
     * @var FormBuilderInterface[]
     */
    private \$children = [];

    /**
     * The data of children who haven't been converted to form builders yet.
     *
     * @var array
     */
    private \$unresolvedChildren = [];

    public function __construct(?string \$name, ?string \$dataClass, EventDispatcherInterface \$dispatcher, FormFactoryInterface \$factory, array \$options = [])
    {
        parent::__construct(\$name, \$dataClass, \$dispatcher, \$options);

        \$this->setFormFactory(\$factory);
    }

    /**
     * {@inheritdoc}
     */
    public function add(\$child, \$type = null, array \$options = [])
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$child instanceof FormBuilderInterface) {
            \$this->children[\$child->getName()] = \$child;

            // In case an unresolved child with the same name exists
            unset(\$this->unresolvedChildren[\$child->getName()]);

            return \$this;
        }

        if (!\\is_string(\$child) && !\\is_int(\$child)) {
            throw new UnexpectedTypeException(\$child, 'string or Symfony\\Component\\Form\\FormBuilderInterface');
        }

        if (null !== \$type && !\\is_string(\$type) && !\$type instanceof FormTypeInterface) {
            throw new UnexpectedTypeException(\$type, 'string or Symfony\\Component\\Form\\FormTypeInterface');
        }

        // Add to \"children\" to maintain order
        \$this->children[\$child] = null;
        \$this->unresolvedChildren[\$child] = [\$type, \$options];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function create(\$name, \$type = null, array \$options = [])
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (null === \$type && null === \$this->getDataClass()) {
            \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType';
        }

        if (null !== \$type) {
            return \$this->getFormFactory()->createNamedBuilder(\$name, \$type, null, \$options);
        }

        return \$this->getFormFactory()->createBuilderForProperty(\$this->getDataClass(), \$name, null, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (isset(\$this->unresolvedChildren[\$name])) {
            return \$this->resolveChild(\$name);
        }

        if (isset(\$this->children[\$name])) {
            return \$this->children[\$name];
        }

        throw new InvalidArgumentException(sprintf('The child with the name \"%s\" does not exist.', \$name));
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        unset(\$this->unresolvedChildren[\$name], \$this->children[\$name]);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return isset(\$this->unresolvedChildren[\$name]) || isset(\$this->children[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->resolveChildren();

        return \$this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return \\count(\$this->children);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormConfig()
    {
        /** @var \$config self */
        \$config = parent::getFormConfig();

        \$config->children = [];
        \$config->unresolvedChildren = [];

        return \$config;
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->resolveChildren();

        \$form = new Form(\$this->getFormConfig());

        foreach (\$this->children as \$child) {
            // Automatic initialization is only supported on root forms
            \$form->add(\$child->setAutoInitialize(false)->getForm());
        }

        if (\$this->getAutoInitialize()) {
            // Automatically initialize the form if it is configured so
            \$form->initialize();
        }

        return \$form;
    }

    /**
     * {@inheritdoc}
     *
     * @return FormBuilderInterface[]|\\Traversable
     */
    public function getIterator()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return new \\ArrayIterator(\$this->all());
    }

    /**
     * Converts an unresolved child into a {@link FormBuilderInterface} instance.
     */
    private function resolveChild(string \$name): FormBuilderInterface
    {
        list(\$type, \$options) = \$this->unresolvedChildren[\$name];

        unset(\$this->unresolvedChildren[\$name]);

        return \$this->children[\$name] = \$this->create(\$name, \$type, \$options);
    }

    /**
     * Converts all unresolved children into {@link FormBuilder} instances.
     */
    private function resolveChildren()
    {
        foreach (\$this->unresolvedChildren as \$name => \$info) {
            \$this->children[\$name] = \$this->create(\$name, \$info[0], \$info[1]);
        }

        \$this->unresolvedChildren = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormBuilder.php";
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
use Symfony\\Component\\Form\\Exception\\BadMethodCallException;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * A builder for creating {@link Form} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormBuilder extends FormConfigBuilder implements \\IteratorAggregate, FormBuilderInterface
{
    /**
     * The children of the form builder.
     *
     * @var FormBuilderInterface[]
     */
    private \$children = [];

    /**
     * The data of children who haven't been converted to form builders yet.
     *
     * @var array
     */
    private \$unresolvedChildren = [];

    public function __construct(?string \$name, ?string \$dataClass, EventDispatcherInterface \$dispatcher, FormFactoryInterface \$factory, array \$options = [])
    {
        parent::__construct(\$name, \$dataClass, \$dispatcher, \$options);

        \$this->setFormFactory(\$factory);
    }

    /**
     * {@inheritdoc}
     */
    public function add(\$child, \$type = null, array \$options = [])
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (\$child instanceof FormBuilderInterface) {
            \$this->children[\$child->getName()] = \$child;

            // In case an unresolved child with the same name exists
            unset(\$this->unresolvedChildren[\$child->getName()]);

            return \$this;
        }

        if (!\\is_string(\$child) && !\\is_int(\$child)) {
            throw new UnexpectedTypeException(\$child, 'string or Symfony\\Component\\Form\\FormBuilderInterface');
        }

        if (null !== \$type && !\\is_string(\$type) && !\$type instanceof FormTypeInterface) {
            throw new UnexpectedTypeException(\$type, 'string or Symfony\\Component\\Form\\FormTypeInterface');
        }

        // Add to \"children\" to maintain order
        \$this->children[\$child] = null;
        \$this->unresolvedChildren[\$child] = [\$type, \$options];

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function create(\$name, \$type = null, array \$options = [])
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (null === \$type && null === \$this->getDataClass()) {
            \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType';
        }

        if (null !== \$type) {
            return \$this->getFormFactory()->createNamedBuilder(\$name, \$type, null, \$options);
        }

        return \$this->getFormFactory()->createBuilderForProperty(\$this->getDataClass(), \$name, null, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        if (isset(\$this->unresolvedChildren[\$name])) {
            return \$this->resolveChild(\$name);
        }

        if (isset(\$this->children[\$name])) {
            return \$this->children[\$name];
        }

        throw new InvalidArgumentException(sprintf('The child with the name \"%s\" does not exist.', \$name));
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        unset(\$this->unresolvedChildren[\$name], \$this->children[\$name]);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return isset(\$this->unresolvedChildren[\$name]) || isset(\$this->children[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->resolveChildren();

        return \$this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return \\count(\$this->children);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormConfig()
    {
        /** @var \$config self */
        \$config = parent::getFormConfig();

        \$config->children = [];
        \$config->unresolvedChildren = [];

        return \$config;
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        \$this->resolveChildren();

        \$form = new Form(\$this->getFormConfig());

        foreach (\$this->children as \$child) {
            // Automatic initialization is only supported on root forms
            \$form->add(\$child->setAutoInitialize(false)->getForm());
        }

        if (\$this->getAutoInitialize()) {
            // Automatically initialize the form if it is configured so
            \$form->initialize();
        }

        return \$form;
    }

    /**
     * {@inheritdoc}
     *
     * @return FormBuilderInterface[]|\\Traversable
     */
    public function getIterator()
    {
        if (\$this->locked) {
            throw new BadMethodCallException('FormBuilder methods cannot be accessed anymore once the builder is turned into a FormConfigInterface instance.');
        }

        return new \\ArrayIterator(\$this->all());
    }

    /**
     * Converts an unresolved child into a {@link FormBuilderInterface} instance.
     */
    private function resolveChild(string \$name): FormBuilderInterface
    {
        list(\$type, \$options) = \$this->unresolvedChildren[\$name];

        unset(\$this->unresolvedChildren[\$name]);

        return \$this->children[\$name] = \$this->create(\$name, \$type, \$options);
    }

    /**
     * Converts all unresolved children into {@link FormBuilder} instances.
     */
    private function resolveChildren()
    {
        foreach (\$this->unresolvedChildren as \$name => \$info) {
            \$this->children[\$name] = \$this->create(\$name, \$info[0], \$info[1]);
        }

        \$this->unresolvedChildren = [];
    }
}
", "vendor/symfony/form/FormBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormBuilder.php");
    }
}
