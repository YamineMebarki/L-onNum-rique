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

/* vendor/symfony/validator/Constraints/TimeValidator.php */
class __TwigTemplate_c1e9a6fc530275329885ae59d940c00091d159cb1d30015648876a0db74414bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TimeValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TimeValidator.php"));

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
class TimeValidator extends ConstraintValidator
{
    const PATTERN = '/^(\\d{2}):(\\d{2}):(\\d{2})\$/';

    /**
     * Checks whether a time is valid.
     *
     * @param int \$hour   The hour
     * @param int \$minute The minute
     * @param int \$second The second
     *
     * @return bool Whether the time is valid
     *
     * @internal
     */
    public static function checkTime(\$hour, \$minute, \$second)
    {
        return \$hour >= 0 && \$hour < 24 && \$minute >= 0 && \$minute < 60 && \$second >= 0 && \$second < 60;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Time) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Time');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof \\DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\\\DateTimeInterface with \"%s\" is deprecated since version 4.2. Use \"%s\" instead or remove the constraint if the underlying model is already type hinted to \\\\DateTimeInterface.', Time::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (!preg_match(static::PATTERN, \$value, \$matches)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Time::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkTime(\$matches[1], \$matches[2], \$matches[3])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Time::INVALID_TIME_ERROR)
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
        return "vendor/symfony/validator/Constraints/TimeValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 78,  113 => 69,  43 => 1,);
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
class TimeValidator extends ConstraintValidator
{
    const PATTERN = '/^(\\d{2}):(\\d{2}):(\\d{2})\$/';

    /**
     * Checks whether a time is valid.
     *
     * @param int \$hour   The hour
     * @param int \$minute The minute
     * @param int \$second The second
     *
     * @return bool Whether the time is valid
     *
     * @internal
     */
    public static function checkTime(\$hour, \$minute, \$second)
    {
        return \$hour >= 0 && \$hour < 24 && \$minute >= 0 && \$minute < 60 && \$second >= 0 && \$second < 60;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Time) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Time');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (\$value instanceof \\DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\\\DateTimeInterface with \"%s\" is deprecated since version 4.2. Use \"%s\" instead or remove the constraint if the underlying model is already type hinted to \\\\DateTimeInterface.', Time::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (!preg_match(static::PATTERN, \$value, \$matches)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Time::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkTime(\$matches[1], \$matches[2], \$matches[3])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Time::INVALID_TIME_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/TimeValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/TimeValidator.php");
    }
}
