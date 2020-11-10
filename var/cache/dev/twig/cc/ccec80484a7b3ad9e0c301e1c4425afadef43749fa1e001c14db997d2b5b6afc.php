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

/* vendor/symfony/validator/Constraints/RangeValidator.php */
class __TwigTemplate_37a957826088537b84fb00192a16597671d8ff82000466bc79b18f2d6d71977b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/RangeValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/RangeValidator.php"));

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
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RangeValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Range) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Range');
        }

        if (null === \$value) {
            return;
        }

        if (!is_numeric(\$value) && !\$value instanceof \\DateTimeInterface) {
            \$this->context->buildViolation(\$constraint->invalidMessage)
                ->setParameter('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setCode(Range::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        \$min = \$constraint->min;
        \$max = \$constraint->max;

        // Convert strings to DateTimes if comparing another DateTime
        // This allows to compare with any date/time value supported by
        // the DateTime constructor:
        // https://php.net/datetime.formats
        if (\$value instanceof \\DateTimeInterface) {
            \$dateTimeClass = null;

            if (\\is_string(\$min)) {
                \$dateTimeClass = \$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class;

                try {
                    \$min = new \$dateTimeClass(\$min);
                } catch (\\Exception \$e) {
                    throw new ConstraintDefinitionException(sprintf('The min value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$min, \$dateTimeClass, \\get_class(\$constraint)));
                }
            }

            if (\\is_string(\$max)) {
                \$dateTimeClass = \$dateTimeClass ?: (\$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class);

                try {
                    \$max = new \$dateTimeClass(\$max);
                } catch (\\Exception \$e) {
                    throw new ConstraintDefinitionException(sprintf('The max value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$max, \$dateTimeClass, \\get_class(\$constraint)));
                }
            }
        }

        if (null !== \$constraint->max && \$value > \$max) {
            \$this->context->buildViolation(\$constraint->maxMessage)
                ->setParameter('";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setParameter('";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$max, self::PRETTY_DATE))
                ->setCode(Range::TOO_HIGH_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$value < \$min) {
            \$this->context->buildViolation(\$constraint->minMessage)
                ->setParameter('";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setParameter('";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$min, self::PRETTY_DATE))
                ->setCode(Range::TOO_LOW_ERROR)
                ->addViolation();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/RangeValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 90,  142 => 89,  130 => 80,  126 => 79,  83 => 39,  43 => 1,);
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
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RangeValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Range) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Range');
        }

        if (null === \$value) {
            return;
        }

        if (!is_numeric(\$value) && !\$value instanceof \\DateTimeInterface) {
            \$this->context->buildViolation(\$constraint->invalidMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setCode(Range::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        \$min = \$constraint->min;
        \$max = \$constraint->max;

        // Convert strings to DateTimes if comparing another DateTime
        // This allows to compare with any date/time value supported by
        // the DateTime constructor:
        // https://php.net/datetime.formats
        if (\$value instanceof \\DateTimeInterface) {
            \$dateTimeClass = null;

            if (\\is_string(\$min)) {
                \$dateTimeClass = \$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class;

                try {
                    \$min = new \$dateTimeClass(\$min);
                } catch (\\Exception \$e) {
                    throw new ConstraintDefinitionException(sprintf('The min value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$min, \$dateTimeClass, \\get_class(\$constraint)));
                }
            }

            if (\\is_string(\$max)) {
                \$dateTimeClass = \$dateTimeClass ?: (\$value instanceof \\DateTimeImmutable ? \\DateTimeImmutable::class : \\DateTime::class);

                try {
                    \$max = new \$dateTimeClass(\$max);
                } catch (\\Exception \$e) {
                    throw new ConstraintDefinitionException(sprintf('The max value \"%s\" could not be converted to a \"%s\" instance in the \"%s\" constraint.', \$max, \$dateTimeClass, \\get_class(\$constraint)));
                }
            }
        }

        if (null !== \$constraint->max && \$value > \$max) {
            \$this->context->buildViolation(\$constraint->maxMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setParameter('{{ limit }}', \$this->formatValue(\$max, self::PRETTY_DATE))
                ->setCode(Range::TOO_HIGH_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$value < \$min) {
            \$this->context->buildViolation(\$constraint->minMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$value, self::PRETTY_DATE))
                ->setParameter('{{ limit }}', \$this->formatValue(\$min, self::PRETTY_DATE))
                ->setCode(Range::TOO_LOW_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/RangeValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/RangeValidator.php");
    }
}
