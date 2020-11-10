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

/* vendor/symfony/validator/Validator/ContextualValidatorInterface.php */
class __TwigTemplate_9c17362b040e0afebb556143415ddfdb0295be766005bfa9d95531d0e2388828 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/ContextualValidatorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/ContextualValidatorInterface.php"));

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

/**
 * A validator in a specific execution context.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ContextualValidatorInterface
{
    /**
     * Appends the given path to the property path of the context.
     *
     * If called multiple times, the path will always be reset to the context's
     * original path with the given path appended to it.
     *
     * @param string \$path The path to append
     *
     * @return \$this
     */
    public function atPath(\$path);

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
     * @return \$this
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
     * @return \$this
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
     * @return \$this
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null);

    /**
     * Returns the violations that have been generated so far in the context
     * of the validator.
     *
     * @return ConstraintViolationListInterface The constraint violations
     */
    public function getViolations();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Validator/ContextualValidatorInterface.php";
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

/**
 * A validator in a specific execution context.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ContextualValidatorInterface
{
    /**
     * Appends the given path to the property path of the context.
     *
     * If called multiple times, the path will always be reset to the context's
     * original path with the given path appended to it.
     *
     * @param string \$path The path to append
     *
     * @return \$this
     */
    public function atPath(\$path);

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
     * @return \$this
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
     * @return \$this
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
     * @return \$this
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null);

    /**
     * Returns the violations that have been generated so far in the context
     * of the validator.
     *
     * @return ConstraintViolationListInterface The constraint violations
     */
    public function getViolations();
}
", "vendor/symfony/validator/Validator/ContextualValidatorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Validator/ContextualValidatorInterface.php");
    }
}
