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

/* vendor/symfony/validator/Constraints/IssnValidator.php */
class __TwigTemplate_6d7861dae01caf36b95a166b1445499aea1a0faaf90e893bb6b8fae222576a45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IssnValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IssnValidator.php"));

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
 * Validates whether the value is a valid ISSN.
 *
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Issn
 */
class IssnValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Issn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Issn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        \$canonical = \$value;

        // 1234-567X
        //     ^
        if (isset(\$canonical[4]) && '-' === \$canonical[4]) {
            // remove hyphen
            \$canonical = substr(\$canonical, 0, 4).substr(\$canonical, 5);
        } elseif (\$constraint->requireHyphen) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::MISSING_HYPHEN_ERROR)
                ->addViolation();

            return;
        }

        \$length = \\strlen(\$canonical);

        if (\$length < 8) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::TOO_SHORT_ERROR)
                ->addViolation();

            return;
        }

        if (\$length > 8) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::TOO_LONG_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        // ^^^^^^^ digits only
        if (!ctype_digit(substr(\$canonical, 0, 7))) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        //        ^ digit, x or X
        if (!ctype_digit(\$canonical[7]) && 'x' !== \$canonical[7] && 'X' !== \$canonical[7]) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        //        ^ case-sensitive?
        if (\$constraint->caseSensitive && 'x' === \$canonical[7]) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CASE_ERROR)
                ->addViolation();

            return;
        }

        // Calculate a checksum. \"X\" equals 10.
        \$checkSum = 'X' === \$canonical[7]
        || 'x' === \$canonical[7]
        ? 10
            : \$canonical[7];

        for (\$i = 0; \$i < 7; ++\$i) {
            // Multiply the first digit by 8, the second by 7, etc.
            \$checkSum += (8 - \$i) * (int) \$canonical[\$i];
        }

        if (0 !== \$checkSum % 11) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Issn::CHECKSUM_FAILED_ERROR)
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
        return "vendor/symfony/validator/Constraints/IssnValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 129,  168 => 109,  154 => 98,  140 => 87,  126 => 76,  114 => 67,  100 => 56,  43 => 1,);
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
 * Validates whether the value is a valid ISSN.
 *
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Issn
 */
class IssnValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Issn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Issn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        \$canonical = \$value;

        // 1234-567X
        //     ^
        if (isset(\$canonical[4]) && '-' === \$canonical[4]) {
            // remove hyphen
            \$canonical = substr(\$canonical, 0, 4).substr(\$canonical, 5);
        } elseif (\$constraint->requireHyphen) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::MISSING_HYPHEN_ERROR)
                ->addViolation();

            return;
        }

        \$length = \\strlen(\$canonical);

        if (\$length < 8) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::TOO_SHORT_ERROR)
                ->addViolation();

            return;
        }

        if (\$length > 8) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::TOO_LONG_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        // ^^^^^^^ digits only
        if (!ctype_digit(substr(\$canonical, 0, 7))) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        //        ^ digit, x or X
        if (!ctype_digit(\$canonical[7]) && 'x' !== \$canonical[7] && 'X' !== \$canonical[7]) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        // 1234567X
        //        ^ case-sensitive?
        if (\$constraint->caseSensitive && 'x' === \$canonical[7]) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::INVALID_CASE_ERROR)
                ->addViolation();

            return;
        }

        // Calculate a checksum. \"X\" equals 10.
        \$checkSum = 'X' === \$canonical[7]
        || 'x' === \$canonical[7]
        ? 10
            : \$canonical[7];

        for (\$i = 0; \$i < 7; ++\$i) {
            // Multiply the first digit by 8, the second by 7, etc.
            \$checkSum += (8 - \$i) * (int) \$canonical[\$i];
        }

        if (0 !== \$checkSum % 11) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Issn::CHECKSUM_FAILED_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/IssnValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/IssnValidator.php");
    }
}
