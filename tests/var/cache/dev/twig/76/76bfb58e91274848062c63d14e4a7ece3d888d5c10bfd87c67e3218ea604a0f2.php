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

/* vendor/symfony/validator/Constraints/LuhnValidator.php */
class __TwigTemplate_1e37c85b2018444435d10fc36cc64c08040e13ba53a0f7307aaa6427b4366765 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/LuhnValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/LuhnValidator.php"));

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
 * Validates a PAN using the LUHN Algorithm.
 *
 * For a list of example card numbers that are used to test this
 * class, please see the LuhnValidatorTest class.
 *
 * @see    http://en.wikipedia.org/wiki/Luhn_algorithm
 *
 * @author Tim Nagel <t.nagel@infinite.net.au>
 * @author Greg Knapp http://gregk.me/2011/php-implementation-of-bank-card-luhn-algorithm/
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LuhnValidator extends ConstraintValidator
{
    /**
     * Validates a credit card number with the Luhn algorithm.
     *
     * @param mixed \$value
     *
     * @throws UnexpectedTypeException when the given credit card number is no string
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Luhn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Luhn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        // Work with strings only, because long numbers are represented as floats
        // internally and don't work with strlen()
        if (!\\is_string(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (!ctype_digit(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Luhn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        \$checkSum = 0;
        \$length = \\strlen(\$value);

        // Starting with the last digit and walking left, add every second
        // digit to the check sum
        // e.g. 7  9  9  2  7  3  9  8  7  1  3
        //      ^     ^     ^     ^     ^     ^
        //    = 7  +  9  +  7  +  9  +  7  +  3
        for (\$i = \$length - 1; \$i >= 0; \$i -= 2) {
            \$checkSum += \$value[\$i];
        }

        // Starting with the second last digit and walking left, double every
        // second digit and add it to the check sum
        // For doubles greater than 9, sum the individual digits
        // e.g. 7  9  9  2  7  3  9  8  7  1  3
        //         ^     ^     ^     ^     ^
        //    =    1+8 + 4  +  6  +  1+6 + 2
        for (\$i = \$length - 2; \$i >= 0; \$i -= 2) {
            \$checkSum += array_sum(str_split((int) \$value[\$i] * 2));
        }

        if (0 === \$checkSum || 0 !== \$checkSum % 10) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Luhn::CHECKSUM_FAILED_ERROR)
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
        return "vendor/symfony/validator/Constraints/LuhnValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 91,  104 => 60,  43 => 1,);
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
 * Validates a PAN using the LUHN Algorithm.
 *
 * For a list of example card numbers that are used to test this
 * class, please see the LuhnValidatorTest class.
 *
 * @see    http://en.wikipedia.org/wiki/Luhn_algorithm
 *
 * @author Tim Nagel <t.nagel@infinite.net.au>
 * @author Greg Knapp http://gregk.me/2011/php-implementation-of-bank-card-luhn-algorithm/
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LuhnValidator extends ConstraintValidator
{
    /**
     * Validates a credit card number with the Luhn algorithm.
     *
     * @param mixed \$value
     *
     * @throws UnexpectedTypeException when the given credit card number is no string
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Luhn) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Luhn');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        // Work with strings only, because long numbers are represented as floats
        // internally and don't work with strlen()
        if (!\\is_string(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (!ctype_digit(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Luhn::INVALID_CHARACTERS_ERROR)
                ->addViolation();

            return;
        }

        \$checkSum = 0;
        \$length = \\strlen(\$value);

        // Starting with the last digit and walking left, add every second
        // digit to the check sum
        // e.g. 7  9  9  2  7  3  9  8  7  1  3
        //      ^     ^     ^     ^     ^     ^
        //    = 7  +  9  +  7  +  9  +  7  +  3
        for (\$i = \$length - 1; \$i >= 0; \$i -= 2) {
            \$checkSum += \$value[\$i];
        }

        // Starting with the second last digit and walking left, double every
        // second digit and add it to the check sum
        // For doubles greater than 9, sum the individual digits
        // e.g. 7  9  9  2  7  3  9  8  7  1  3
        //         ^     ^     ^     ^     ^
        //    =    1+8 + 4  +  6  +  1+6 + 2
        for (\$i = \$length - 2; \$i >= 0; \$i -= 2) {
            \$checkSum += array_sum(str_split((int) \$value[\$i] * 2));
        }

        if (0 === \$checkSum || 0 !== \$checkSum % 10) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Luhn::CHECKSUM_FAILED_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/LuhnValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/LuhnValidator.php");
    }
}
