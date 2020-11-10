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

/* vendor/symfony/validator/Constraints/Composite.php */
class __TwigTemplate_7edb8158301435124697e39a797f7e60fee7eb60b22ceef9783eebb45c936e6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Composite.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Composite.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * A constraint that is composed of other constraints.
 *
 * You should never use the nested constraint instances anywhere else, because
 * their groups are adapted when passed to the constructor of this class.
 *
 * If you want to create your own composite constraint, extend this class and
 * let {@link getCompositeOption()} return the name of the property which
 * contains the nested constraints.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Composite extends Constraint
{
    /**
     * {@inheritdoc}
     *
     * The groups of the composite and its nested constraints are made
     * consistent using the following strategy:
     *
     *   - If groups are passed explicitly to the composite constraint, but
     *     not to the nested constraints, the options of the composite
     *     constraint are copied to the nested constraints;
     *
     *   - If groups are passed explicitly to the nested constraints, but not
     *     to the composite constraint, the groups of all nested constraints
     *     are merged and used as groups for the composite constraint;
     *
     *   - If groups are passed explicitly to both the composite and its nested
     *     constraints, the groups of the nested constraints must be a subset
     *     of the groups of the composite constraint. If not, a
     *     {@link ConstraintDefinitionException} is thrown.
     *
     * All this is done in the constructor, because constraints can then be
     * cached. When constraints are loaded from the cache, no more group
     * checks need to be done.
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        \$this->initializeNestedConstraints();

        /* @var Constraint[] \$nestedConstraints */
        \$compositeOption = \$this->getCompositeOption();
        \$nestedConstraints = \$this->\$compositeOption;

        if (!\\is_array(\$nestedConstraints)) {
            \$nestedConstraints = [\$nestedConstraints];
        }

        foreach (\$nestedConstraints as \$constraint) {
            if (!\$constraint instanceof Constraint) {
                if (\\is_object(\$constraint)) {
                    \$constraint = \\get_class(\$constraint);
                }

                throw new ConstraintDefinitionException(sprintf('The value %s is not an instance of Constraint in constraint %s', \$constraint, \\get_class(\$this)));
            }

            if (\$constraint instanceof Valid) {
                throw new ConstraintDefinitionException(sprintf('The constraint Valid cannot be nested inside constraint %s. You can only declare the Valid constraint directly on a field or method.', \\get_class(\$this)));
            }
        }

        if (!property_exists(\$this, 'groups')) {
            \$mergedGroups = [];

            foreach (\$nestedConstraints as \$constraint) {
                foreach (\$constraint->groups as \$group) {
                    \$mergedGroups[\$group] = true;
                }
            }

            \$this->groups = array_keys(\$mergedGroups);
            \$this->\$compositeOption = \$nestedConstraints;

            return;
        }

        foreach (\$nestedConstraints as \$constraint) {
            if (property_exists(\$constraint, 'groups')) {
                \$excessGroups = array_diff(\$constraint->groups, \$this->groups);

                if (\\count(\$excessGroups) > 0) {
                    throw new ConstraintDefinitionException(sprintf('The group(s) \"%s\" passed to the constraint %s should also be passed to its containing constraint %s', implode('\", \"', \$excessGroups), \\get_class(\$constraint), \\get_class(\$this)));
                }
            } else {
                \$constraint->groups = \$this->groups;
            }
        }

        \$this->\$compositeOption = \$nestedConstraints;
    }

    /**
     * {@inheritdoc}
     *
     * Implicit group names are forwarded to nested constraints.
     *
     * @param string \$group
     */
    public function addImplicitGroupName(\$group)
    {
        parent::addImplicitGroupName(\$group);

        /** @var Constraint[] \$nestedConstraints */
        \$nestedConstraints = \$this->{\$this->getCompositeOption()};

        foreach (\$nestedConstraints as \$constraint) {
            \$constraint->addImplicitGroupName(\$group);
        }
    }

    /**
     * Returns the name of the property that contains the nested constraints.
     *
     * @return string The property name
     */
    abstract protected function getCompositeOption();

    /**
     * Initializes the nested constraints.
     *
     * This method can be overwritten in subclasses to clean up the nested
     * constraints passed to the constructor.
     *
     * @see Collection::initializeNestedConstraints()
     */
    protected function initializeNestedConstraints()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Composite.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * A constraint that is composed of other constraints.
 *
 * You should never use the nested constraint instances anywhere else, because
 * their groups are adapted when passed to the constructor of this class.
 *
 * If you want to create your own composite constraint, extend this class and
 * let {@link getCompositeOption()} return the name of the property which
 * contains the nested constraints.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Composite extends Constraint
{
    /**
     * {@inheritdoc}
     *
     * The groups of the composite and its nested constraints are made
     * consistent using the following strategy:
     *
     *   - If groups are passed explicitly to the composite constraint, but
     *     not to the nested constraints, the options of the composite
     *     constraint are copied to the nested constraints;
     *
     *   - If groups are passed explicitly to the nested constraints, but not
     *     to the composite constraint, the groups of all nested constraints
     *     are merged and used as groups for the composite constraint;
     *
     *   - If groups are passed explicitly to both the composite and its nested
     *     constraints, the groups of the nested constraints must be a subset
     *     of the groups of the composite constraint. If not, a
     *     {@link ConstraintDefinitionException} is thrown.
     *
     * All this is done in the constructor, because constraints can then be
     * cached. When constraints are loaded from the cache, no more group
     * checks need to be done.
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        \$this->initializeNestedConstraints();

        /* @var Constraint[] \$nestedConstraints */
        \$compositeOption = \$this->getCompositeOption();
        \$nestedConstraints = \$this->\$compositeOption;

        if (!\\is_array(\$nestedConstraints)) {
            \$nestedConstraints = [\$nestedConstraints];
        }

        foreach (\$nestedConstraints as \$constraint) {
            if (!\$constraint instanceof Constraint) {
                if (\\is_object(\$constraint)) {
                    \$constraint = \\get_class(\$constraint);
                }

                throw new ConstraintDefinitionException(sprintf('The value %s is not an instance of Constraint in constraint %s', \$constraint, \\get_class(\$this)));
            }

            if (\$constraint instanceof Valid) {
                throw new ConstraintDefinitionException(sprintf('The constraint Valid cannot be nested inside constraint %s. You can only declare the Valid constraint directly on a field or method.', \\get_class(\$this)));
            }
        }

        if (!property_exists(\$this, 'groups')) {
            \$mergedGroups = [];

            foreach (\$nestedConstraints as \$constraint) {
                foreach (\$constraint->groups as \$group) {
                    \$mergedGroups[\$group] = true;
                }
            }

            \$this->groups = array_keys(\$mergedGroups);
            \$this->\$compositeOption = \$nestedConstraints;

            return;
        }

        foreach (\$nestedConstraints as \$constraint) {
            if (property_exists(\$constraint, 'groups')) {
                \$excessGroups = array_diff(\$constraint->groups, \$this->groups);

                if (\\count(\$excessGroups) > 0) {
                    throw new ConstraintDefinitionException(sprintf('The group(s) \"%s\" passed to the constraint %s should also be passed to its containing constraint %s', implode('\", \"', \$excessGroups), \\get_class(\$constraint), \\get_class(\$this)));
                }
            } else {
                \$constraint->groups = \$this->groups;
            }
        }

        \$this->\$compositeOption = \$nestedConstraints;
    }

    /**
     * {@inheritdoc}
     *
     * Implicit group names are forwarded to nested constraints.
     *
     * @param string \$group
     */
    public function addImplicitGroupName(\$group)
    {
        parent::addImplicitGroupName(\$group);

        /** @var Constraint[] \$nestedConstraints */
        \$nestedConstraints = \$this->{\$this->getCompositeOption()};

        foreach (\$nestedConstraints as \$constraint) {
            \$constraint->addImplicitGroupName(\$group);
        }
    }

    /**
     * Returns the name of the property that contains the nested constraints.
     *
     * @return string The property name
     */
    abstract protected function getCompositeOption();

    /**
     * Initializes the nested constraints.
     *
     * This method can be overwritten in subclasses to clean up the nested
     * constraints passed to the constructor.
     *
     * @see Collection::initializeNestedConstraints()
     */
    protected function initializeNestedConstraints()
    {
    }
}
", "vendor/symfony/validator/Constraints/Composite.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Composite.php");
    }
}
