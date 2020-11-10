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

/* vendor/symfony/validator/Constraints/UuidValidator.php */
class __TwigTemplate_116f04731b5f8c0dcb4eda12144ef904af5ffd2d7f37eeb1b99e12b041fa30c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UuidValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UuidValidator.php"));

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
 * Validates whether the value is a valid UUID (also known as GUID).
 *
 * Strict validation will allow a UUID as specified per RFC 4122.
 * Loose validation will allow any type of UUID.
 *
 * For better compatibility, both loose and strict, you should consider using a specialized UUID library like \"ramsey/uuid\" instead.
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://tools.ietf.org/html/rfc4122
 * @see https://en.wikipedia.org/wiki/Universally_unique_identifier
 * @see https://github.com/ramsey/uuid
 */
class UuidValidator extends ConstraintValidator
{
    // The strict pattern matches UUIDs like this:
    // xxxxxxxx-xxxx-Mxxx-Nxxx-xxxxxxxxxxxx

    // Roughly speaking:
    // x = any hexadecimal character
    // M = any allowed version {1..5}
    // N = any allowed variant {8, 9, a, b}

    const STRICT_LENGTH = 36;
    const STRICT_FIRST_HYPHEN_POSITION = 8;
    const STRICT_LAST_HYPHEN_POSITION = 23;
    const STRICT_VERSION_POSITION = 14;
    const STRICT_VARIANT_POSITION = 19;

    // The loose pattern validates similar yet non-compliant UUIDs.
    // Hyphens are completely optional. If present, they should only appear
    // between every fourth character:
    // xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx
    // xxxxxxxxxxxx-xxxx-xxxx-xxxx-xxxx-xxxx
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    // The value can also be wrapped with characters like []{}:
    // {xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx}

    // Neither the version nor the variant is validated by this pattern.

    const LOOSE_MAX_LENGTH = 39;
    const LOOSE_FIRST_HYPHEN_POSITION = 4;

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Uuid) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Uuid');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (null !== \$constraint->normalizer) {
            \$value = (\$constraint->normalizer)(\$value);
        }

        if (\$constraint->strict) {
            \$this->validateStrict(\$value, \$constraint);

            return;
        }

        \$this->validateLoose(\$value, \$constraint);
    }

    private function validateLoose(\$value, Uuid \$constraint)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_INVALID_HYPHEN_PLACEMENT
        // 3. ERROR_TOO_SHORT/ERROR_TOO_LONG

        // Trim any wrapping characters like [] or {} used by some legacy systems
        \$trimmed = trim(\$value, '[]{}');

        // Position of the next expected hyphen
        \$h = self::LOOSE_FIRST_HYPHEN_POSITION;

        // Expected length
        \$l = self::LOOSE_MAX_LENGTH;

        for (\$i = 0; \$i < \$l; ++\$i) {
            // Check length
            if (!isset(\$trimmed[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Uuid::TOO_SHORT_ERROR)
                    ->addViolation();

                return;
            }

            // Hyphens must occur every fifth position
            // xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx
            //     ^    ^    ^    ^    ^    ^    ^
            if ('-' === \$trimmed[\$i]) {
                if (\$i !== \$h) {
                    \$this->context->buildViolation(\$constraint->message)
                        ->setParameter('";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                        ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                        ->addViolation();

                    return;
                }

                \$h += 5;

                continue;
            }

            // Missing hyphens are ignored
            if (\$i === \$h) {
                \$h += 4;
                --\$l;
            }

            // Check characters
            if (!ctype_xdigit(\$trimmed[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_CHARACTERS_ERROR)
                    ->addViolation();

                return;
            }
        }

        // Check length again
        if (isset(\$trimmed[\$i])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Uuid::TOO_LONG_ERROR)
                ->addViolation();
        }
    }

    private function validateStrict(\$value, Uuid \$constraint)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_INVALID_HYPHEN_PLACEMENT
        // 3. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 4. ERROR_INVALID_VERSION
        // 5. ERROR_INVALID_VARIANT

        // Position of the next expected hyphen
        \$h = self::STRICT_FIRST_HYPHEN_POSITION;

        for (\$i = 0; \$i < self::STRICT_LENGTH; ++\$i) {
            // Check length
            if (!isset(\$value[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Uuid::TOO_SHORT_ERROR)
                    ->addViolation();

                return;
            }

            // Check hyphen placement
            // xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
            //         ^    ^    ^    ^
            if ('-' === \$value[\$i]) {
                if (\$i !== \$h) {
                    \$this->context->buildViolation(\$constraint->message)
                        ->setParameter('";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                        ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                        ->addViolation();

                    return;
                }

                // xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
                //                        ^
                if (\$h < self::STRICT_LAST_HYPHEN_POSITION) {
                    \$h += 5;
                }

                continue;
            }

            // Check characters
            if (!ctype_xdigit(\$value[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 216, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_CHARACTERS_ERROR)
                    ->addViolation();

                return;
            }

            // Missing hyphen
            if (\$i === \$h) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                    ->addViolation();

                return;
            }
        }

        // Check length again
        if (isset(\$value[\$i])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 237, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Uuid::TOO_LONG_ERROR)
                ->addViolation();
        }

        // Check version
        if (!\\in_array(\$value[self::STRICT_VERSION_POSITION], \$constraint->versions)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 245, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Uuid::INVALID_VERSION_ERROR)
                ->addViolation();
        }

        // Check variant - first two bits must equal \"10\"
        //   0b10xx
        // & 0b1100 (12)
        // = 0b1000 (8)
        if (8 !== (hexdec(\$value[self::STRICT_VARIANT_POSITION]) & 12)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 256, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Uuid::INVALID_VARIANT_ERROR)
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
        return "vendor/symfony/validator/Constraints/UuidValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 256,  316 => 245,  305 => 237,  291 => 226,  278 => 216,  256 => 197,  240 => 184,  215 => 162,  201 => 151,  177 => 130,  161 => 117,  43 => 1,);
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
 * Validates whether the value is a valid UUID (also known as GUID).
 *
 * Strict validation will allow a UUID as specified per RFC 4122.
 * Loose validation will allow any type of UUID.
 *
 * For better compatibility, both loose and strict, you should consider using a specialized UUID library like \"ramsey/uuid\" instead.
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://tools.ietf.org/html/rfc4122
 * @see https://en.wikipedia.org/wiki/Universally_unique_identifier
 * @see https://github.com/ramsey/uuid
 */
class UuidValidator extends ConstraintValidator
{
    // The strict pattern matches UUIDs like this:
    // xxxxxxxx-xxxx-Mxxx-Nxxx-xxxxxxxxxxxx

    // Roughly speaking:
    // x = any hexadecimal character
    // M = any allowed version {1..5}
    // N = any allowed variant {8, 9, a, b}

    const STRICT_LENGTH = 36;
    const STRICT_FIRST_HYPHEN_POSITION = 8;
    const STRICT_LAST_HYPHEN_POSITION = 23;
    const STRICT_VERSION_POSITION = 14;
    const STRICT_VARIANT_POSITION = 19;

    // The loose pattern validates similar yet non-compliant UUIDs.
    // Hyphens are completely optional. If present, they should only appear
    // between every fourth character:
    // xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx
    // xxxxxxxxxxxx-xxxx-xxxx-xxxx-xxxx-xxxx
    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    // The value can also be wrapped with characters like []{}:
    // {xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx}

    // Neither the version nor the variant is validated by this pattern.

    const LOOSE_MAX_LENGTH = 39;
    const LOOSE_FIRST_HYPHEN_POSITION = 4;

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Uuid) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Uuid');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (null !== \$constraint->normalizer) {
            \$value = (\$constraint->normalizer)(\$value);
        }

        if (\$constraint->strict) {
            \$this->validateStrict(\$value, \$constraint);

            return;
        }

        \$this->validateLoose(\$value, \$constraint);
    }

    private function validateLoose(\$value, Uuid \$constraint)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_INVALID_HYPHEN_PLACEMENT
        // 3. ERROR_TOO_SHORT/ERROR_TOO_LONG

        // Trim any wrapping characters like [] or {} used by some legacy systems
        \$trimmed = trim(\$value, '[]{}');

        // Position of the next expected hyphen
        \$h = self::LOOSE_FIRST_HYPHEN_POSITION;

        // Expected length
        \$l = self::LOOSE_MAX_LENGTH;

        for (\$i = 0; \$i < \$l; ++\$i) {
            // Check length
            if (!isset(\$trimmed[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Uuid::TOO_SHORT_ERROR)
                    ->addViolation();

                return;
            }

            // Hyphens must occur every fifth position
            // xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx-xxxx
            //     ^    ^    ^    ^    ^    ^    ^
            if ('-' === \$trimmed[\$i]) {
                if (\$i !== \$h) {
                    \$this->context->buildViolation(\$constraint->message)
                        ->setParameter('{{ value }}', \$this->formatValue(\$value))
                        ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                        ->addViolation();

                    return;
                }

                \$h += 5;

                continue;
            }

            // Missing hyphens are ignored
            if (\$i === \$h) {
                \$h += 4;
                --\$l;
            }

            // Check characters
            if (!ctype_xdigit(\$trimmed[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_CHARACTERS_ERROR)
                    ->addViolation();

                return;
            }
        }

        // Check length again
        if (isset(\$trimmed[\$i])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Uuid::TOO_LONG_ERROR)
                ->addViolation();
        }
    }

    private function validateStrict(\$value, Uuid \$constraint)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_INVALID_HYPHEN_PLACEMENT
        // 3. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 4. ERROR_INVALID_VERSION
        // 5. ERROR_INVALID_VARIANT

        // Position of the next expected hyphen
        \$h = self::STRICT_FIRST_HYPHEN_POSITION;

        for (\$i = 0; \$i < self::STRICT_LENGTH; ++\$i) {
            // Check length
            if (!isset(\$value[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Uuid::TOO_SHORT_ERROR)
                    ->addViolation();

                return;
            }

            // Check hyphen placement
            // xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
            //         ^    ^    ^    ^
            if ('-' === \$value[\$i]) {
                if (\$i !== \$h) {
                    \$this->context->buildViolation(\$constraint->message)
                        ->setParameter('{{ value }}', \$this->formatValue(\$value))
                        ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                        ->addViolation();

                    return;
                }

                // xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
                //                        ^
                if (\$h < self::STRICT_LAST_HYPHEN_POSITION) {
                    \$h += 5;
                }

                continue;
            }

            // Check characters
            if (!ctype_xdigit(\$value[\$i])) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_CHARACTERS_ERROR)
                    ->addViolation();

                return;
            }

            // Missing hyphen
            if (\$i === \$h) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Uuid::INVALID_HYPHEN_PLACEMENT_ERROR)
                    ->addViolation();

                return;
            }
        }

        // Check length again
        if (isset(\$value[\$i])) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Uuid::TOO_LONG_ERROR)
                ->addViolation();
        }

        // Check version
        if (!\\in_array(\$value[self::STRICT_VERSION_POSITION], \$constraint->versions)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Uuid::INVALID_VERSION_ERROR)
                ->addViolation();
        }

        // Check variant - first two bits must equal \"10\"
        //   0b10xx
        // & 0b1100 (12)
        // = 0b1000 (8)
        if (8 !== (hexdec(\$value[self::STRICT_VARIANT_POSITION]) & 12)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Uuid::INVALID_VARIANT_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/UuidValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/UuidValidator.php");
    }
}
