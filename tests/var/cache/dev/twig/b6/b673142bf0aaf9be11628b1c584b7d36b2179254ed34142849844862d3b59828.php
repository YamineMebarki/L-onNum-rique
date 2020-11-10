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

/* vendor/symfony/validator/Mapping/GenericMetadata.php */
class __TwigTemplate_4664ae229db56c9e79cda00d93b9575ae17a1491bbf7e8dcdd14d44d81e73157 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/GenericMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/GenericMetadata.php"));

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
use Symfony\\Component\\Validator\\Constraints\\Traverse;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * A generic container of {@link Constraint} objects.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class GenericMetadata implements MetadataInterface
{
    /**
     * @var Constraint[]
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getConstraints()} and {@link findConstraints()} instead.
     */
    public \$constraints = [];

    /**
     * @var array
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link findConstraints()} instead.
     */
    public \$constraintsByGroup = [];

    /**
     * The strategy for cascading objects.
     *
     * By default, objects are not cascaded.
     *
     * @var int
     *
     * @see CascadingStrategy
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getCascadingStrategy()} instead.
     */
    public \$cascadingStrategy = CascadingStrategy::NONE;

    /**
     * The strategy for traversing traversable objects.
     *
     * By default, traversable objects are not traversed.
     *
     * @var int
     *
     * @see TraversalStrategy
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getTraversalStrategy()} instead.
     */
    public \$traversalStrategy = TraversalStrategy::NONE;

    /**
     * Returns the names of the properties that should be serialized.
     *
     * @return string[]
     */
    public function __sleep()
    {
        return [
            'constraints',
            'constraintsByGroup',
            'cascadingStrategy',
            'traversalStrategy',
        ];
    }

    /**
     * Clones this object.
     */
    public function __clone()
    {
        \$constraints = \$this->constraints;

        \$this->constraints = [];
        \$this->constraintsByGroup = [];

        foreach (\$constraints as \$constraint) {
            \$this->addConstraint(clone \$constraint);
        }
    }

    /**
     * Adds a constraint.
     *
     * If the constraint {@link Valid} is added, the cascading strategy will be
     * changed to {@link CascadingStrategy::CASCADE}. Depending on the
     * \$traverse property of that constraint, the traversal strategy
     * will be set to one of the following:
     *
     *  - {@link TraversalStrategy::IMPLICIT} if \$traverse is enabled
     *  - {@link TraversalStrategy::NONE} if \$traverse is disabled
     *
     * @return \$this
     *
     * @throws ConstraintDefinitionException When trying to add the
     *                                       {@link Traverse} constraint
     */
    public function addConstraint(Constraint \$constraint)
    {
        if (\$constraint instanceof Traverse) {
            throw new ConstraintDefinitionException(sprintf('The constraint \"%s\" can only be put on classes. Please use \"Symfony\\Component\\Validator\\Constraints\\Valid\" instead.', \\get_class(\$constraint)));
        }

        if (\$constraint instanceof Valid && null === \$constraint->groups) {
            \$this->cascadingStrategy = CascadingStrategy::CASCADE;

            if (\$constraint->traverse) {
                \$this->traversalStrategy = TraversalStrategy::IMPLICIT;
            } else {
                \$this->traversalStrategy = TraversalStrategy::NONE;
            }

            return \$this;
        }

        \$this->constraints[] = \$constraint;

        foreach (\$constraint->groups as \$group) {
            \$this->constraintsByGroup[\$group][] = \$constraint;
        }

        return \$this;
    }

    /**
     * Adds an list of constraints.
     *
     * @param Constraint[] \$constraints The constraints to add
     *
     * @return \$this
     */
    public function addConstraints(array \$constraints)
    {
        foreach (\$constraints as \$constraint) {
            \$this->addConstraint(\$constraint);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getConstraints()
    {
        return \$this->constraints;
    }

    /**
     * Returns whether this element has any constraints.
     *
     * @return bool
     */
    public function hasConstraints()
    {
        return \\count(\$this->constraints) > 0;
    }

    /**
     * {@inheritdoc}
     *
     * Aware of the global group (* group).
     */
    public function findConstraints(\$group)
    {
        return isset(\$this->constraintsByGroup[\$group])
            ? \$this->constraintsByGroup[\$group]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function getCascadingStrategy()
    {
        return \$this->cascadingStrategy;
    }

    /**
     * {@inheritdoc}
     */
    public function getTraversalStrategy()
    {
        return \$this->traversalStrategy;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/GenericMetadata.php";
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
use Symfony\\Component\\Validator\\Constraints\\Traverse;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * A generic container of {@link Constraint} objects.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class GenericMetadata implements MetadataInterface
{
    /**
     * @var Constraint[]
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getConstraints()} and {@link findConstraints()} instead.
     */
    public \$constraints = [];

    /**
     * @var array
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link findConstraints()} instead.
     */
    public \$constraintsByGroup = [];

    /**
     * The strategy for cascading objects.
     *
     * By default, objects are not cascaded.
     *
     * @var int
     *
     * @see CascadingStrategy
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getCascadingStrategy()} instead.
     */
    public \$cascadingStrategy = CascadingStrategy::NONE;

    /**
     * The strategy for traversing traversable objects.
     *
     * By default, traversable objects are not traversed.
     *
     * @var int
     *
     * @see TraversalStrategy
     *
     * @internal This property is public in order to reduce the size of the
     *           class' serialized representation. Do not access it. Use
     *           {@link getTraversalStrategy()} instead.
     */
    public \$traversalStrategy = TraversalStrategy::NONE;

    /**
     * Returns the names of the properties that should be serialized.
     *
     * @return string[]
     */
    public function __sleep()
    {
        return [
            'constraints',
            'constraintsByGroup',
            'cascadingStrategy',
            'traversalStrategy',
        ];
    }

    /**
     * Clones this object.
     */
    public function __clone()
    {
        \$constraints = \$this->constraints;

        \$this->constraints = [];
        \$this->constraintsByGroup = [];

        foreach (\$constraints as \$constraint) {
            \$this->addConstraint(clone \$constraint);
        }
    }

    /**
     * Adds a constraint.
     *
     * If the constraint {@link Valid} is added, the cascading strategy will be
     * changed to {@link CascadingStrategy::CASCADE}. Depending on the
     * \$traverse property of that constraint, the traversal strategy
     * will be set to one of the following:
     *
     *  - {@link TraversalStrategy::IMPLICIT} if \$traverse is enabled
     *  - {@link TraversalStrategy::NONE} if \$traverse is disabled
     *
     * @return \$this
     *
     * @throws ConstraintDefinitionException When trying to add the
     *                                       {@link Traverse} constraint
     */
    public function addConstraint(Constraint \$constraint)
    {
        if (\$constraint instanceof Traverse) {
            throw new ConstraintDefinitionException(sprintf('The constraint \"%s\" can only be put on classes. Please use \"Symfony\\Component\\Validator\\Constraints\\Valid\" instead.', \\get_class(\$constraint)));
        }

        if (\$constraint instanceof Valid && null === \$constraint->groups) {
            \$this->cascadingStrategy = CascadingStrategy::CASCADE;

            if (\$constraint->traverse) {
                \$this->traversalStrategy = TraversalStrategy::IMPLICIT;
            } else {
                \$this->traversalStrategy = TraversalStrategy::NONE;
            }

            return \$this;
        }

        \$this->constraints[] = \$constraint;

        foreach (\$constraint->groups as \$group) {
            \$this->constraintsByGroup[\$group][] = \$constraint;
        }

        return \$this;
    }

    /**
     * Adds an list of constraints.
     *
     * @param Constraint[] \$constraints The constraints to add
     *
     * @return \$this
     */
    public function addConstraints(array \$constraints)
    {
        foreach (\$constraints as \$constraint) {
            \$this->addConstraint(\$constraint);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getConstraints()
    {
        return \$this->constraints;
    }

    /**
     * Returns whether this element has any constraints.
     *
     * @return bool
     */
    public function hasConstraints()
    {
        return \\count(\$this->constraints) > 0;
    }

    /**
     * {@inheritdoc}
     *
     * Aware of the global group (* group).
     */
    public function findConstraints(\$group)
    {
        return isset(\$this->constraintsByGroup[\$group])
            ? \$this->constraintsByGroup[\$group]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function getCascadingStrategy()
    {
        return \$this->cascadingStrategy;
    }

    /**
     * {@inheritdoc}
     */
    public function getTraversalStrategy()
    {
        return \$this->traversalStrategy;
    }
}
", "vendor/symfony/validator/Mapping/GenericMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/GenericMetadata.php");
    }
}
