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

/* vendor/symfony/validator/Constraints/DateTimeValidator.php */
class __TwigTemplate_7f3ca665ce47dc0fc5e29edd0f1116281f82ac3697d2f523a847248076973dfe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DateTimeValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DateTimeValidator.php"));

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
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DateTimeValidator extends DateValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof DateTime) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\DateTime');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof \\DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\\\DateTimeInterface with \"%s\" is deprecated since version 4.2. Use \"%s\" instead or remove the constraint if the underlying model is already type hinted to \\\\DateTimeInterface.', DateTime::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        \\DateTime::createFromFormat(\$constraint->format, \$value);

        \$errors = \\DateTime::getLastErrors();

        if (0 < \$errors['error_count']) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(DateTime::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        foreach (\$errors['warnings'] as \$warning) {
            if ('The parsed date was invalid' === \$warning) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_DATE_ERROR)
                    ->addViolation();
            } elseif ('The parsed time was invalid' === \$warning) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_TIME_ERROR)
                    ->addViolation();
            } else {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_FORMAT_ERROR)
                    ->addViolation();
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
        return "vendor/symfony/validator/Constraints/DateTimeValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 75,  120 => 70,  112 => 65,  99 => 55,  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DateTimeValidator extends DateValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof DateTime) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\DateTime');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof \\DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\\\DateTimeInterface with \"%s\" is deprecated since version 4.2. Use \"%s\" instead or remove the constraint if the underlying model is already type hinted to \\\\DateTimeInterface.', DateTime::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        \\DateTime::createFromFormat(\$constraint->format, \$value);

        \$errors = \\DateTime::getLastErrors();

        if (0 < \$errors['error_count']) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(DateTime::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        foreach (\$errors['warnings'] as \$warning) {
            if ('The parsed date was invalid' === \$warning) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_DATE_ERROR)
                    ->addViolation();
            } elseif ('The parsed time was invalid' === \$warning) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_TIME_ERROR)
                    ->addViolation();
            } else {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(DateTime::INVALID_FORMAT_ERROR)
                    ->addViolation();
            }
        }
    }
}
", "vendor/symfony/validator/Constraints/DateTimeValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/DateTimeValidator.php");
    }
}
