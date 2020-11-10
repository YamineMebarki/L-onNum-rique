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

/* vendor/symfony/validator/Constraints/AbstractComparisonValidator.php */
class __TwigTemplate_9311f05c23c2bf83166438c8eb9c5dfc259ca2bdba70db89f249b5d925760726 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/AbstractComparisonValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/AbstractComparisonValidator.php"));

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

use Symfony\\Component\\PropertyAccess\\Exception\\NoSuchPropertyException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Provides a base class for the validation of property comparisons.
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractComparisonValidator extends ConstraintValidator
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof AbstractComparison) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\AbstractComparison');
        }

        if (null === \$value) {
            return;
        }

        if (\$path = \$constraint->propertyPath) {
            if (null === \$object = \$this->context->getObject()) {
                return;
            }

            try {
                \$comparedValue = \$this->getPropertyAccessor()->getValue(\$object, \$path);
            } catch (NoSuchPropertyException \$e) {
                throw new ConstraintDefinitionException(sprintf('Invalid property path \"%s\" provided to \"%s\" constraint: %s', \$path, \\get_class(\$constraint), \$e->getMessage()), 0, \$e);
            }
        } else {
            \$comparedValue = \$constraint->value;
        }

        // Convert strings to DateTimes if comparing another DateTime
        // This allows to compare with any date/time value supported by
        // the DateTime constructor:
        // https://php.net/datetime.formats
        if (\\is_string(\$comparedValue) && \$value instanceof \\DateTimeInterface) {
            // If \$value is immutable, convert the compared value to a DateTimeImmutable too, otherwise use DateTime
            \$dateTimeClass = \$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class;

            try {
                \$comparedValue = new \$dateTimeClass(\$comparedValue);
            } catch (\\Exception \$e) {
                throw new ConstraintDefinitionException(sprintf('The compared value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$comparedValue, \$dateTimeClass, \\get_class(\$constraint)));
            }
        }

        if (!\$this->compareValues(\$value, \$comparedValue)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value, self::OBJECT_TO_STRING | self::PRETTY_DATE))
                ->setParameter('";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$comparedValue, self::OBJECT_TO_STRING | self::PRETTY_DATE))
                ->setParameter('";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "', \$this->formatTypeOf(\$comparedValue))
                ->setCode(\$this->getErrorCode())
                ->addViolation();
        }
    }

    private function getPropertyAccessor()
    {
        if (null === \$this->propertyAccessor) {
            \$this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        return \$this->propertyAccessor;
    }

    /**
     * Compares the two given values to find if their relationship is valid.
     *
     * @param mixed \$value1 The first value to compare
     * @param mixed \$value2 The second value to compare
     *
     * @return bool true if the relationship is valid, false otherwise
     */
    abstract protected function compareValues(\$value1, \$value2);

    /**
     * Returns the error code used if the comparison fails.
     *
     * @return string|null The error code or `null` if no code should be set
     */
    protected function getErrorCode()
    {
        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/AbstractComparisonValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 83,  129 => 82,  125 => 81,  43 => 1,);
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

use Symfony\\Component\\PropertyAccess\\Exception\\NoSuchPropertyException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Provides a base class for the validation of property comparisons.
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractComparisonValidator extends ConstraintValidator
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof AbstractComparison) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\AbstractComparison');
        }

        if (null === \$value) {
            return;
        }

        if (\$path = \$constraint->propertyPath) {
            if (null === \$object = \$this->context->getObject()) {
                return;
            }

            try {
                \$comparedValue = \$this->getPropertyAccessor()->getValue(\$object, \$path);
            } catch (NoSuchPropertyException \$e) {
                throw new ConstraintDefinitionException(sprintf('Invalid property path \"%s\" provided to \"%s\" constraint: %s', \$path, \\get_class(\$constraint), \$e->getMessage()), 0, \$e);
            }
        } else {
            \$comparedValue = \$constraint->value;
        }

        // Convert strings to DateTimes if comparing another DateTime
        // This allows to compare with any date/time value supported by
        // the DateTime constructor:
        // https://php.net/datetime.formats
        if (\\is_string(\$comparedValue) && \$value instanceof \\DateTimeInterface) {
            // If \$value is immutable, convert the compared value to a DateTimeImmutable too, otherwise use DateTime
            \$dateTimeClass = \$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class;

            try {
                \$comparedValue = new \$dateTimeClass(\$comparedValue);
            } catch (\\Exception \$e) {
                throw new ConstraintDefinitionException(sprintf('The compared value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$comparedValue, \$dateTimeClass, \\get_class(\$constraint)));
            }
        }

        if (!\$this->compareValues(\$value, \$comparedValue)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value, self::OBJECT_TO_STRING | self::PRETTY_DATE))
                ->setParameter('{{ compared_value }}', \$this->formatValue(\$comparedValue, self::OBJECT_TO_STRING | self::PRETTY_DATE))
                ->setParameter('{{ compared_value_type }}', \$this->formatTypeOf(\$comparedValue))
                ->setCode(\$this->getErrorCode())
                ->addViolation();
        }
    }

    private function getPropertyAccessor()
    {
        if (null === \$this->propertyAccessor) {
            \$this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        return \$this->propertyAccessor;
    }

    /**
     * Compares the two given values to find if their relationship is valid.
     *
     * @param mixed \$value1 The first value to compare
     * @param mixed \$value2 The second value to compare
     *
     * @return bool true if the relationship is valid, false otherwise
     */
    abstract protected function compareValues(\$value1, \$value2);

    /**
     * Returns the error code used if the comparison fails.
     *
     * @return string|null The error code or `null` if no code should be set
     */
    protected function getErrorCode()
    {
        return null;
    }
}
", "vendor/symfony/validator/Constraints/AbstractComparisonValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/AbstractComparisonValidator.php");
    }
}
