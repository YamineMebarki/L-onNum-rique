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

/* vendor/symfony/validator/Mapping/MemberMetadata.php */
class __TwigTemplate_718652c6713635a46125e77f9249d2509d75bf0a4a0040acf7b64b4d302547cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/MemberMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/MemberMetadata.php"));

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

namespace Symfony\\Component\\Validator\\Mapping;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * Stores all metadata needed for validating a class property.
 *
 * The method of accessing the property's value must be specified by subclasses
 * by implementing the {@link newReflectionMember()} method.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
abstract class MemberMetadata extends GenericMetadata implements PropertyMetadataInterface
{
    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getClassName()} instead.
     */
    public \$class;

    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getName()} instead.
     */
    public \$name;

    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getPropertyName()} instead.
     */
    public \$property;

    /**
     * @var \\ReflectionMethod[]|\\ReflectionProperty[]
     */
    private \$reflMember = [];

    /**
     * @param string \$class    The name of the class this member is defined on
     * @param string \$name     The name of the member
     * @param string \$property The property the member belongs to
     */
    public function __construct(string \$class, string \$name, string \$property)
    {
        \$this->class = \$class;
        \$this->name = \$name;
        \$this->property = \$property;
    }

    /**
     * {@inheritdoc}
     */
    public function addConstraint(Constraint \$constraint)
    {
        if (!\\in_array(Constraint::PROPERTY_CONSTRAINT, (array) \$constraint->getTargets())) {
            throw new ConstraintDefinitionException(sprintf('The constraint %s cannot be put on properties or getters', \\get_class(\$constraint)));
        }

        parent::addConstraint(\$constraint);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function __sleep()
    {
        return array_merge(parent::__sleep(), [
            'class',
            'name',
            'property',
        ]);
    }

    /**
     * Returns the name of the member.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return \$this->class;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyName()
    {
        return \$this->property;
    }

    /**
     * Returns whether this member is public.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isPublic(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isPublic();
    }

    /**
     * Returns whether this member is protected.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isProtected(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isProtected();
    }

    /**
     * Returns whether this member is private.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isPrivate(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isPrivate();
    }

    /**
     * Returns the reflection instance for accessing the member's value.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return \\ReflectionMethod|\\ReflectionProperty The reflection instance
     */
    public function getReflectionMember(\$objectOrClassName)
    {
        \$className = \\is_string(\$objectOrClassName) ? \$objectOrClassName : \\get_class(\$objectOrClassName);
        if (!isset(\$this->reflMember[\$className])) {
            \$this->reflMember[\$className] = \$this->newReflectionMember(\$objectOrClassName);
        }

        return \$this->reflMember[\$className];
    }

    /**
     * Creates a new reflection instance for accessing the member's value.
     *
     * Must be implemented by subclasses.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return \\ReflectionMethod|\\ReflectionProperty The reflection instance
     */
    abstract protected function newReflectionMember(\$objectOrClassName);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/MemberMetadata.php";
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

namespace Symfony\\Component\\Validator\\Mapping;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * Stores all metadata needed for validating a class property.
 *
 * The method of accessing the property's value must be specified by subclasses
 * by implementing the {@link newReflectionMember()} method.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
abstract class MemberMetadata extends GenericMetadata implements PropertyMetadataInterface
{
    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getClassName()} instead.
     */
    public \$class;

    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getName()} instead.
     */
    public \$name;

    /**
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getPropertyName()} instead.
     */
    public \$property;

    /**
     * @var \\ReflectionMethod[]|\\ReflectionProperty[]
     */
    private \$reflMember = [];

    /**
     * @param string \$class    The name of the class this member is defined on
     * @param string \$name     The name of the member
     * @param string \$property The property the member belongs to
     */
    public function __construct(string \$class, string \$name, string \$property)
    {
        \$this->class = \$class;
        \$this->name = \$name;
        \$this->property = \$property;
    }

    /**
     * {@inheritdoc}
     */
    public function addConstraint(Constraint \$constraint)
    {
        if (!\\in_array(Constraint::PROPERTY_CONSTRAINT, (array) \$constraint->getTargets())) {
            throw new ConstraintDefinitionException(sprintf('The constraint %s cannot be put on properties or getters', \\get_class(\$constraint)));
        }

        parent::addConstraint(\$constraint);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function __sleep()
    {
        return array_merge(parent::__sleep(), [
            'class',
            'name',
            'property',
        ]);
    }

    /**
     * Returns the name of the member.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return \$this->class;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyName()
    {
        return \$this->property;
    }

    /**
     * Returns whether this member is public.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isPublic(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isPublic();
    }

    /**
     * Returns whether this member is protected.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isProtected(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isProtected();
    }

    /**
     * Returns whether this member is private.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return bool
     */
    public function isPrivate(\$objectOrClassName)
    {
        return \$this->getReflectionMember(\$objectOrClassName)->isPrivate();
    }

    /**
     * Returns the reflection instance for accessing the member's value.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return \\ReflectionMethod|\\ReflectionProperty The reflection instance
     */
    public function getReflectionMember(\$objectOrClassName)
    {
        \$className = \\is_string(\$objectOrClassName) ? \$objectOrClassName : \\get_class(\$objectOrClassName);
        if (!isset(\$this->reflMember[\$className])) {
            \$this->reflMember[\$className] = \$this->newReflectionMember(\$objectOrClassName);
        }

        return \$this->reflMember[\$className];
    }

    /**
     * Creates a new reflection instance for accessing the member's value.
     *
     * Must be implemented by subclasses.
     *
     * @param object|string \$objectOrClassName The object or the class name
     *
     * @return \\ReflectionMethod|\\ReflectionProperty The reflection instance
     */
    abstract protected function newReflectionMember(\$objectOrClassName);
}
", "vendor/symfony/validator/Mapping/MemberMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/MemberMetadata.php");
    }
}
