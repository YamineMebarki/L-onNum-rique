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

/* vendor/symfony/validator/Validator/ValidatorInterface.php */
class __TwigTemplate_c58055ec32548230e8595a72a6da3cc77d6a7dd7f50a77b4d91983d6c042a651 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/ValidatorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/ValidatorInterface.php"));

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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;

/**
 * Validates PHP values against constraints.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ValidatorInterface extends MetadataFactoryInterface
{
    /**
     * Validates a value against a constraint or a list of constraints.
     *
     * If no constraint is passed, the constraint
     * {@link \\Symfony\\Component\\Validator\\Constraints\\Valid} is assumed.
     *
     * @param mixed                                              \$value       The value to validate
     * @param Constraint|Constraint[]                            \$constraints The constraint(s) to validate against
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups      The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validate(\$value, \$constraints = null, \$groups = null);

    /**
     * Validates a property of an object against the constraints specified
     * for this property.
     *
     * @param object                                             \$object       The object
     * @param string                                             \$propertyName The name of the validated property
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups       The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null);

    /**
     * Validates a value against the constraints specified for an object's
     * property.
     *
     * @param object|string                                      \$objectOrClass The object or its class name
     * @param string                                             \$propertyName  The name of the property
     * @param mixed                                              \$value         The value to validate against the property's constraints
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups        The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null);

    /**
     * Starts a new validation context and returns a validator for that context.
     *
     * The returned validator collects all violations generated within its
     * context. You can access these violations with the
     * {@link ContextualValidatorInterface::getViolations()} method.
     *
     * @return ContextualValidatorInterface The validator for the new context
     */
    public function startContext();

    /**
     * Returns a validator in the given execution context.
     *
     * The returned validator adds all generated violations to the given
     * context.
     *
     * @return ContextualValidatorInterface The validator for that context
     */
    public function inContext(ExecutionContextInterface \$context);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Validator/ValidatorInterface.php";
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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;

/**
 * Validates PHP values against constraints.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ValidatorInterface extends MetadataFactoryInterface
{
    /**
     * Validates a value against a constraint or a list of constraints.
     *
     * If no constraint is passed, the constraint
     * {@link \\Symfony\\Component\\Validator\\Constraints\\Valid} is assumed.
     *
     * @param mixed                                              \$value       The value to validate
     * @param Constraint|Constraint[]                            \$constraints The constraint(s) to validate against
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups      The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validate(\$value, \$constraints = null, \$groups = null);

    /**
     * Validates a property of an object against the constraints specified
     * for this property.
     *
     * @param object                                             \$object       The object
     * @param string                                             \$propertyName The name of the validated property
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups       The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null);

    /**
     * Validates a value against the constraints specified for an object's
     * property.
     *
     * @param object|string                                      \$objectOrClass The object or its class name
     * @param string                                             \$propertyName  The name of the property
     * @param mixed                                              \$value         The value to validate against the property's constraints
     * @param string|GroupSequence|(string|GroupSequence)[]|null \$groups        The validation groups to validate. If none is given, \"Default\" is assumed
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     *                                          If the list is empty, validation
     *                                          succeeded
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null);

    /**
     * Starts a new validation context and returns a validator for that context.
     *
     * The returned validator collects all violations generated within its
     * context. You can access these violations with the
     * {@link ContextualValidatorInterface::getViolations()} method.
     *
     * @return ContextualValidatorInterface The validator for the new context
     */
    public function startContext();

    /**
     * Returns a validator in the given execution context.
     *
     * The returned validator adds all generated violations to the given
     * context.
     *
     * @return ContextualValidatorInterface The validator for that context
     */
    public function inContext(ExecutionContextInterface \$context);
}
", "vendor/symfony/validator/Validator/ValidatorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Validator/ValidatorInterface.php");
    }
}
