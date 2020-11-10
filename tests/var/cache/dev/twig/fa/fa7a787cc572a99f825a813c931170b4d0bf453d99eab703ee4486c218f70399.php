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

/* vendor/symfony/validator/Constraints/ChoiceValidator.php */
class __TwigTemplate_2dfa8cfbbe0a28fc2fc9ec1982c327e290595e116170411b291b22e88dee42b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ChoiceValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ChoiceValidator.php"));

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
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * ChoiceValidator validates that the value is one of the expected values.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Choice) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Choice');
        }

        if (!\\is_array(\$constraint->choices) && !\$constraint->callback) {
            throw new ConstraintDefinitionException('Either \"choices\" or \"callback\" must be specified on constraint Choice');
        }

        if (null === \$value) {
            return;
        }

        if (\$constraint->multiple && !\\is_array(\$value)) {
            throw new UnexpectedValueException(\$value, 'array');
        }

        if (\$constraint->callback) {
            if (!\\is_callable(\$choices = [\$this->context->getObject(), \$constraint->callback])
                && !\\is_callable(\$choices = [\$this->context->getClassName(), \$constraint->callback])
                && !\\is_callable(\$choices = \$constraint->callback)
            ) {
                throw new ConstraintDefinitionException('The Choice constraint expects a valid callback');
            }
            \$choices = \$choices();
        } else {
            \$choices = \$constraint->choices;
        }

        if (true !== \$constraint->strict) {
            throw new \\RuntimeException('The \"strict\" option of the Choice constraint should not be used.');
        }

        if (\$constraint->multiple) {
            foreach (\$value as \$_value) {
                if (!\\in_array(\$_value, \$choices, true)) {
                    \$this->context->buildViolation(\$constraint->multipleMessage)
                        ->setParameter('";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$_value))
                        ->setParameter('";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "', \$this->formatValues(\$choices))
                        ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
                        ->setInvalidValue(\$_value)
                        ->addViolation();

                    return;
                }
            }

            \$count = \\count(\$value);

            if (null !== \$constraint->min && \$count < \$constraint->min) {
                \$this->context->buildViolation(\$constraint->minMessage)
                    ->setParameter('";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "', \$constraint->min)
                    ->setPlural((int) \$constraint->min)
                    ->setCode(Choice::TOO_FEW_ERROR)
                    ->addViolation();

                return;
            }

            if (null !== \$constraint->max && \$count > \$constraint->max) {
                \$this->context->buildViolation(\$constraint->maxMessage)
                    ->setParameter('";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "', \$constraint->max)
                    ->setPlural((int) \$constraint->max)
                    ->setCode(Choice::TOO_MANY_ERROR)
                    ->addViolation();

                return;
            }
        } elseif (!\\in_array(\$value, \$choices, true)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setParameter('";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "', \$this->formatValues(\$choices))
                ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
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
        return "vendor/symfony/validator/Constraints/ChoiceValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 104,  159 => 103,  147 => 94,  134 => 84,  118 => 71,  114 => 70,  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * ChoiceValidator validates that the value is one of the expected values.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Choice) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Choice');
        }

        if (!\\is_array(\$constraint->choices) && !\$constraint->callback) {
            throw new ConstraintDefinitionException('Either \"choices\" or \"callback\" must be specified on constraint Choice');
        }

        if (null === \$value) {
            return;
        }

        if (\$constraint->multiple && !\\is_array(\$value)) {
            throw new UnexpectedValueException(\$value, 'array');
        }

        if (\$constraint->callback) {
            if (!\\is_callable(\$choices = [\$this->context->getObject(), \$constraint->callback])
                && !\\is_callable(\$choices = [\$this->context->getClassName(), \$constraint->callback])
                && !\\is_callable(\$choices = \$constraint->callback)
            ) {
                throw new ConstraintDefinitionException('The Choice constraint expects a valid callback');
            }
            \$choices = \$choices();
        } else {
            \$choices = \$constraint->choices;
        }

        if (true !== \$constraint->strict) {
            throw new \\RuntimeException('The \"strict\" option of the Choice constraint should not be used.');
        }

        if (\$constraint->multiple) {
            foreach (\$value as \$_value) {
                if (!\\in_array(\$_value, \$choices, true)) {
                    \$this->context->buildViolation(\$constraint->multipleMessage)
                        ->setParameter('{{ value }}', \$this->formatValue(\$_value))
                        ->setParameter('{{ choices }}', \$this->formatValues(\$choices))
                        ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
                        ->setInvalidValue(\$_value)
                        ->addViolation();

                    return;
                }
            }

            \$count = \\count(\$value);

            if (null !== \$constraint->min && \$count < \$constraint->min) {
                \$this->context->buildViolation(\$constraint->minMessage)
                    ->setParameter('{{ limit }}', \$constraint->min)
                    ->setPlural((int) \$constraint->min)
                    ->setCode(Choice::TOO_FEW_ERROR)
                    ->addViolation();

                return;
            }

            if (null !== \$constraint->max && \$count > \$constraint->max) {
                \$this->context->buildViolation(\$constraint->maxMessage)
                    ->setParameter('{{ limit }}', \$constraint->max)
                    ->setPlural((int) \$constraint->max)
                    ->setCode(Choice::TOO_MANY_ERROR)
                    ->addViolation();

                return;
            }
        } elseif (!\\in_array(\$value, \$choices, true)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setParameter('{{ choices }}', \$this->formatValues(\$choices))
                ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/ChoiceValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/ChoiceValidator.php");
    }
}
