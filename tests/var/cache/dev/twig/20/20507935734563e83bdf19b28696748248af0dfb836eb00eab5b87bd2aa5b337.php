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

/* vendor/symfony/validator/Constraints/LengthValidator.php */
class __TwigTemplate_ab39b01a190bc5acea2d547a756d8f5ef26b510c579691ffd55ccddb68c1bfbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/LengthValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/LengthValidator.php"));

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
class LengthValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Length) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Length');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$stringValue = (string) \$value;

        if (null !== \$constraint->normalizer) {
            \$stringValue = (\$constraint->normalizer)(\$stringValue);
        }

        if (!\$invalidCharset = !@mb_check_encoding(\$stringValue, \$constraint->charset)) {
            \$length = mb_strlen(\$stringValue, \$constraint->charset);
        }

        if (\$invalidCharset) {
            \$this->context->buildViolation(\$constraint->charsetMessage)
                ->setParameter('";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$stringValue))
                ->setParameter('";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "', \$constraint->charset)
                ->setInvalidValue(\$value)
                ->setCode(Length::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->max && \$length > \$constraint->max) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->maxMessage)
                ->setParameter('";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$stringValue))
                ->setParameter('";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "', \$constraint->max)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->max)
                ->setCode(Length::TOO_LONG_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$length < \$constraint->min) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->minMessage)
                ->setParameter('";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$stringValue))
                ->setParameter('";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "', \$constraint->min)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->min)
                ->setCode(Length::TOO_SHORT_ERROR)
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
        return "vendor/symfony/validator/Constraints/LengthValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 77,  132 => 76,  118 => 65,  114 => 64,  101 => 54,  97 => 53,  43 => 1,);
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
class LengthValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Length) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Length');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$stringValue = (string) \$value;

        if (null !== \$constraint->normalizer) {
            \$stringValue = (\$constraint->normalizer)(\$stringValue);
        }

        if (!\$invalidCharset = !@mb_check_encoding(\$stringValue, \$constraint->charset)) {
            \$length = mb_strlen(\$stringValue, \$constraint->charset);
        }

        if (\$invalidCharset) {
            \$this->context->buildViolation(\$constraint->charsetMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$stringValue))
                ->setParameter('{{ charset }}', \$constraint->charset)
                ->setInvalidValue(\$value)
                ->setCode(Length::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->max && \$length > \$constraint->max) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->maxMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$stringValue))
                ->setParameter('{{ limit }}', \$constraint->max)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->max)
                ->setCode(Length::TOO_LONG_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$length < \$constraint->min) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->minMessage)
                ->setParameter('{{ value }}', \$this->formatValue(\$stringValue))
                ->setParameter('{{ limit }}', \$constraint->min)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->min)
                ->setCode(Length::TOO_SHORT_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/LengthValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/LengthValidator.php");
    }
}
