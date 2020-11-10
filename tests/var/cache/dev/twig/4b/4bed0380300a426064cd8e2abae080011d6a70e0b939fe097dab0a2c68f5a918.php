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

/* vendor/symfony/validator/Constraints/IsbnValidator.php */
class __TwigTemplate_5bff4de7e446e1f1eac534f3146a3e7307702d32d74733bfc3d825ce6c1d89a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IsbnValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IsbnValidator.php"));

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
 * Validates whether the value is a valid ISBN-10 or ISBN-13.
 *
 * @author The Whole Life To Learn <thewholelifetolearn@gmail.com>
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Isbn
 */
class IsbnValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Isbn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Isbn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        \$canonical = str_replace('-', '', \$value);

        // Explicitly validate against ISBN-10
        if ('isbn10' === \$constraint->type) {
            if (true !== (\$code = \$this->validateIsbn10(\$canonical))) {
                \$this->context->buildViolation(\$this->getMessage(\$constraint, \$constraint->type))
                    ->setParameter('";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(\$code)
                    ->addViolation();
            }

            return;
        }

        // Explicitly validate against ISBN-13
        if ('isbn13' === \$constraint->type) {
            if (true !== (\$code = \$this->validateIsbn13(\$canonical))) {
                \$this->context->buildViolation(\$this->getMessage(\$constraint, \$constraint->type))
                    ->setParameter('";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(\$code)
                    ->addViolation();
            }

            return;
        }

        // Try both ISBNs

        // First, try ISBN-10
        \$code = \$this->validateIsbn10(\$canonical);

        // The ISBN can only be an ISBN-13 if the value was too long for ISBN-10
        if (Isbn::TOO_LONG_ERROR === \$code) {
            // Try ISBN-13 now
            \$code = \$this->validateIsbn13(\$canonical);

            // If too short, this means we have 11 or 12 digits
            if (Isbn::TOO_SHORT_ERROR === \$code) {
                \$code = Isbn::TYPE_NOT_RECOGNIZED_ERROR;
            }
        }

        if (true !== \$code) {
            \$this->context->buildViolation(\$this->getMessage(\$constraint))
                ->setParameter('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(\$code)
                ->addViolation();
        }
    }

    protected function validateIsbn10(\$isbn)
    {
        // Choose an algorithm so that ERROR_INVALID_CHARACTERS is preferred
        // over ERROR_TOO_SHORT/ERROR_TOO_LONG
        // Otherwise \"0-45122-5244\" passes, but \"0-45122_5244\" reports
        // \"too long\"

        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 3. ERROR_CHECKSUM_FAILED

        \$checkSum = 0;

        for (\$i = 0; \$i < 10; ++\$i) {
            // If we test the length before the loop, we get an ERROR_TOO_SHORT
            // when actually an ERROR_INVALID_CHARACTERS is wanted, e.g. for
            // \"0-45122_5244\" (typo)
            if (!isset(\$isbn[\$i])) {
                return Isbn::TOO_SHORT_ERROR;
            }

            if ('X' === \$isbn[\$i]) {
                \$digit = 10;
            } elseif (ctype_digit(\$isbn[\$i])) {
                \$digit = \$isbn[\$i];
            } else {
                return Isbn::INVALID_CHARACTERS_ERROR;
            }

            \$checkSum += \$digit * (10 - \$i);
        }

        if (isset(\$isbn[\$i])) {
            return Isbn::TOO_LONG_ERROR;
        }

        return 0 === \$checkSum % 11 ? true : Isbn::CHECKSUM_FAILED_ERROR;
    }

    protected function validateIsbn13(\$isbn)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 3. ERROR_CHECKSUM_FAILED

        if (!ctype_digit(\$isbn)) {
            return Isbn::INVALID_CHARACTERS_ERROR;
        }

        \$length = \\strlen(\$isbn);

        if (\$length < 13) {
            return Isbn::TOO_SHORT_ERROR;
        }

        if (\$length > 13) {
            return Isbn::TOO_LONG_ERROR;
        }

        \$checkSum = 0;

        for (\$i = 0; \$i < 13; \$i += 2) {
            \$checkSum += \$isbn[\$i];
        }

        for (\$i = 1; \$i < 12; \$i += 2) {
            \$checkSum += \$isbn[\$i]
            * 3;
        }

        return 0 === \$checkSum % 10 ? true : Isbn::CHECKSUM_FAILED_ERROR;
    }

    protected function getMessage(\$constraint, \$type = null)
    {
        if (null !== \$constraint->message) {
            return \$constraint->message;
        } elseif ('isbn10' === \$type) {
            return \$constraint->isbn10Message;
        } elseif ('isbn13' === \$type) {
            return \$constraint->isbn13Message;
        }

        return \$constraint->bothIsbnMessage;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/IsbnValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 92,  113 => 66,  98 => 54,  43 => 1,);
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
 * Validates whether the value is a valid ISBN-10 or ISBN-13.
 *
 * @author The Whole Life To Learn <thewholelifetolearn@gmail.com>
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Isbn
 */
class IsbnValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Isbn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Isbn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        \$canonical = str_replace('-', '', \$value);

        // Explicitly validate against ISBN-10
        if ('isbn10' === \$constraint->type) {
            if (true !== (\$code = \$this->validateIsbn10(\$canonical))) {
                \$this->context->buildViolation(\$this->getMessage(\$constraint, \$constraint->type))
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(\$code)
                    ->addViolation();
            }

            return;
        }

        // Explicitly validate against ISBN-13
        if ('isbn13' === \$constraint->type) {
            if (true !== (\$code = \$this->validateIsbn13(\$canonical))) {
                \$this->context->buildViolation(\$this->getMessage(\$constraint, \$constraint->type))
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(\$code)
                    ->addViolation();
            }

            return;
        }

        // Try both ISBNs

        // First, try ISBN-10
        \$code = \$this->validateIsbn10(\$canonical);

        // The ISBN can only be an ISBN-13 if the value was too long for ISBN-10
        if (Isbn::TOO_LONG_ERROR === \$code) {
            // Try ISBN-13 now
            \$code = \$this->validateIsbn13(\$canonical);

            // If too short, this means we have 11 or 12 digits
            if (Isbn::TOO_SHORT_ERROR === \$code) {
                \$code = Isbn::TYPE_NOT_RECOGNIZED_ERROR;
            }
        }

        if (true !== \$code) {
            \$this->context->buildViolation(\$this->getMessage(\$constraint))
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(\$code)
                ->addViolation();
        }
    }

    protected function validateIsbn10(\$isbn)
    {
        // Choose an algorithm so that ERROR_INVALID_CHARACTERS is preferred
        // over ERROR_TOO_SHORT/ERROR_TOO_LONG
        // Otherwise \"0-45122-5244\" passes, but \"0-45122_5244\" reports
        // \"too long\"

        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 3. ERROR_CHECKSUM_FAILED

        \$checkSum = 0;

        for (\$i = 0; \$i < 10; ++\$i) {
            // If we test the length before the loop, we get an ERROR_TOO_SHORT
            // when actually an ERROR_INVALID_CHARACTERS is wanted, e.g. for
            // \"0-45122_5244\" (typo)
            if (!isset(\$isbn[\$i])) {
                return Isbn::TOO_SHORT_ERROR;
            }

            if ('X' === \$isbn[\$i]) {
                \$digit = 10;
            } elseif (ctype_digit(\$isbn[\$i])) {
                \$digit = \$isbn[\$i];
            } else {
                return Isbn::INVALID_CHARACTERS_ERROR;
            }

            \$checkSum += \$digit * (10 - \$i);
        }

        if (isset(\$isbn[\$i])) {
            return Isbn::TOO_LONG_ERROR;
        }

        return 0 === \$checkSum % 11 ? true : Isbn::CHECKSUM_FAILED_ERROR;
    }

    protected function validateIsbn13(\$isbn)
    {
        // Error priority:
        // 1. ERROR_INVALID_CHARACTERS
        // 2. ERROR_TOO_SHORT/ERROR_TOO_LONG
        // 3. ERROR_CHECKSUM_FAILED

        if (!ctype_digit(\$isbn)) {
            return Isbn::INVALID_CHARACTERS_ERROR;
        }

        \$length = \\strlen(\$isbn);

        if (\$length < 13) {
            return Isbn::TOO_SHORT_ERROR;
        }

        if (\$length > 13) {
            return Isbn::TOO_LONG_ERROR;
        }

        \$checkSum = 0;

        for (\$i = 0; \$i < 13; \$i += 2) {
            \$checkSum += \$isbn[\$i];
        }

        for (\$i = 1; \$i < 12; \$i += 2) {
            \$checkSum += \$isbn[\$i]
            * 3;
        }

        return 0 === \$checkSum % 10 ? true : Isbn::CHECKSUM_FAILED_ERROR;
    }

    protected function getMessage(\$constraint, \$type = null)
    {
        if (null !== \$constraint->message) {
            return \$constraint->message;
        } elseif ('isbn10' === \$type) {
            return \$constraint->isbn10Message;
        } elseif ('isbn13' === \$type) {
            return \$constraint->isbn13Message;
        }

        return \$constraint->bothIsbnMessage;
    }
}
", "vendor/symfony/validator/Constraints/IsbnValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/IsbnValidator.php");
    }
}
