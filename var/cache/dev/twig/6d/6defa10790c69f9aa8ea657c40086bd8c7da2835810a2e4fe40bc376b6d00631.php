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

/* vendor/symfony/validator/Constraints/CollectionValidator.php */
class __TwigTemplate_392d93253477056779c079530ea028e51037fb0d9ad3cef70474f6ad59316838 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CollectionValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CollectionValidator.php"));

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
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Collection) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Collection');
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !(\$value instanceof \\Traversable && \$value instanceof \\ArrayAccess)) {
            throw new UnexpectedValueException(\$value, 'array|(Traversable&ArrayAccess)');
        }

        // We need to keep the initialized context when CollectionValidator
        // calls itself recursively (Collection constraints can be nested).
        // Since the context of the validator is overwritten when initialize()
        // is called for the nested constraint, the outer validator is
        // acting on the wrong context when the nested validation terminates.
        //
        // A better solution - which should be approached in Symfony 3.0 - is to
        // remove the initialize() method and pass the context as last argument
        // to validate() instead.
        \$context = \$this->context;

        foreach (\$constraint->fields as \$field => \$fieldConstraint) {
            // bug fix issue #2779
            \$existsInArray = \\is_array(\$value) && \\array_key_exists(\$field, \$value);
            \$existsInArrayAccess = \$value instanceof \\ArrayAccess && \$value->offsetExists(\$field);

            if (\$existsInArray || \$existsInArrayAccess) {
                if (\\count(\$fieldConstraint->constraints) > 0) {
                    \$context->getValidator()
                        ->inContext(\$context)
                        ->atPath('['.\$field.']')
                        ->validate(\$value[\$field], \$fieldConstraint->constraints);
                }
            } elseif (!\$fieldConstraint instanceof Optional && !\$constraint->allowMissingFields) {
                \$context->buildViolation(\$constraint->missingFieldsMessage)
                    ->atPath('['.\$field.']')
                    ->setParameter('";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$field))
                    ->setInvalidValue(null)
                    ->setCode(Collection::MISSING_FIELD_ERROR)
                    ->addViolation();
            }
        }

        if (!\$constraint->allowExtraFields) {
            foreach (\$value as \$field => \$fieldValue) {
                if (!isset(\$constraint->fields[\$field])) {
                    \$context->buildViolation(\$constraint->extraFieldsMessage)
                        ->atPath('['.\$field.']')
                        ->setParameter('";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$field))
                        ->setInvalidValue(\$fieldValue)
                        ->setCode(Collection::NO_SUCH_FIELD_ERROR)
                        ->addViolation();
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/CollectionValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 79,  111 => 67,  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Collection) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Collection');
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !(\$value instanceof \\Traversable && \$value instanceof \\ArrayAccess)) {
            throw new UnexpectedValueException(\$value, 'array|(Traversable&ArrayAccess)');
        }

        // We need to keep the initialized context when CollectionValidator
        // calls itself recursively (Collection constraints can be nested).
        // Since the context of the validator is overwritten when initialize()
        // is called for the nested constraint, the outer validator is
        // acting on the wrong context when the nested validation terminates.
        //
        // A better solution - which should be approached in Symfony 3.0 - is to
        // remove the initialize() method and pass the context as last argument
        // to validate() instead.
        \$context = \$this->context;

        foreach (\$constraint->fields as \$field => \$fieldConstraint) {
            // bug fix issue #2779
            \$existsInArray = \\is_array(\$value) && \\array_key_exists(\$field, \$value);
            \$existsInArrayAccess = \$value instanceof \\ArrayAccess && \$value->offsetExists(\$field);

            if (\$existsInArray || \$existsInArrayAccess) {
                if (\\count(\$fieldConstraint->constraints) > 0) {
                    \$context->getValidator()
                        ->inContext(\$context)
                        ->atPath('['.\$field.']')
                        ->validate(\$value[\$field], \$fieldConstraint->constraints);
                }
            } elseif (!\$fieldConstraint instanceof Optional && !\$constraint->allowMissingFields) {
                \$context->buildViolation(\$constraint->missingFieldsMessage)
                    ->atPath('['.\$field.']')
                    ->setParameter('{{ field }}', \$this->formatValue(\$field))
                    ->setInvalidValue(null)
                    ->setCode(Collection::MISSING_FIELD_ERROR)
                    ->addViolation();
            }
        }

        if (!\$constraint->allowExtraFields) {
            foreach (\$value as \$field => \$fieldValue) {
                if (!isset(\$constraint->fields[\$field])) {
                    \$context->buildViolation(\$constraint->extraFieldsMessage)
                        ->atPath('['.\$field.']')
                        ->setParameter('{{ field }}', \$this->formatValue(\$field))
                        ->setInvalidValue(\$fieldValue)
                        ->setCode(Collection::NO_SUCH_FIELD_ERROR)
                        ->addViolation();
                }
            }
        }
    }
}
", "vendor/symfony/validator/Constraints/CollectionValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/CollectionValidator.php");
    }
}
