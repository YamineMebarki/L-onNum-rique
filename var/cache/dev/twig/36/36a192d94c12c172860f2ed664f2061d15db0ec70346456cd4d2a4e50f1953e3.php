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

/* vendor/symfony/validator/Constraints/CardSchemeValidator.php */
class __TwigTemplate_9295acec42fd1c43a6bd35059ee94af34c564cfd17ec5eb5ff4c8e4c0bcf2260 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CardSchemeValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CardSchemeValidator.php"));

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

/**
 * Validates that a card number belongs to a specified scheme.
 *
 * @author Tim Nagel <t.nagel@infinite.net.au>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Payment_card_number
 * @see https://www.regular-expressions.info/creditcard.html
 */
class CardSchemeValidator extends ConstraintValidator
{
    protected \$schemes = [
        // American Express card numbers start with 34 or 37 and have 15 digits.
        'AMEX' => [
            '/^3[47][0-9]{13}\$/',
        ],
        // China UnionPay cards start with 62 and have between 16 and 19 digits.
        // Please note that these cards do not follow Luhn Algorithm as a checksum.
        'CHINA_UNIONPAY' => [
            '/^62[0-9]{14,17}\$/',
        ],
        // Diners Club card numbers begin with 300 through 305, 36 or 38. All have 14 digits.
        // There are Diners Club cards that begin with 5 and have 16 digits.
        // These are a joint venture between Diners Club and MasterCard, and should be processed like a MasterCard.
        'DINERS' => [
            '/^3(?:0[0-5]|[68][0-9])[0-9]{11}\$/',
        ],
        // Discover card numbers begin with 6011, 622126 through 622925, 644 through 649 or 65.
        // All have 16 digits.
        'DISCOVER' => [
            '/^6011[0-9]{12}\$/',
            '/^64[4-9][0-9]{13}\$/',
            '/^65[0-9]{14}\$/',
            '/^622(12[6-9]|1[3-9][0-9]|[2-8][0-9][0-9]|91[0-9]|92[0-5])[0-9]{10}\$/',
        ],
        // InstaPayment cards begin with 637 through 639 and have 16 digits.
        'INSTAPAYMENT' => [
            '/^63[7-9][0-9]{13}\$/',
        ],
        // JCB cards beginning with 2131 or 1800 have 15 digits.
        // JCB cards beginning with 35 have 16 digits.
        'JCB' => [
            '/^(?:2131|1800|35[0-9]{3})[0-9]{11}\$/',
        ],
        // Laser cards begin with either 6304, 6706, 6709 or 6771 and have between 16 and 19 digits.
        'LASER' => [
            '/^(6304|670[69]|6771)[0-9]{12,15}\$/',
        ],
        // Maestro international cards begin with 675900..675999 and have between 12 and 19 digits.
        // Maestro UK cards begin with either 500000..509999 or 560000..699999 and have between 12 and 19 digits.
        'MAESTRO' => [
            '/^(6759[0-9]{2})[0-9]{6,13}\$/',
            '/^(50[0-9]{4})[0-9]{6,13}\$/',
            '/^5[6-9][0-9]{10,17}\$/',
            '/^6[0-9]{11,18}\$/',
        ],
        // All MasterCard numbers start with the numbers 51 through 55. All have 16 digits.
        // October 2016 MasterCard numbers can also start with 222100 through 272099.
        'MASTERCARD' => [
            '/^5[1-5][0-9]{14}\$/',
            '/^2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12})\$/',
        ],
        // Payment system MIR numbers start with 220, then 1 digit from 0 to 4, then 12 digits
        'MIR' => [
            '/^220[0-4][0-9]{12}\$/',
        ],
        // All UATP card numbers start with a 1 and have a length of 15 digits.
        'UATP' => [
            '/^1[0-9]{14}\$/',
        ],
        // All Visa card numbers start with a 4 and have a length of 13, 16, or 19 digits.
        'VISA' => [
            '/^4([0-9]{12}|[0-9]{15}|[0-9]{18})\$/',
        ],
    ];

    /**
     * Validates a creditcard belongs to a specified scheme.
     *
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof CardScheme) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\CardScheme');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_numeric(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(CardScheme::NOT_NUMERIC_ERROR)
                ->addViolation();

            return;
        }

        \$schemes = array_flip((array) \$constraint->schemes);
        \$schemeRegexes = array_intersect_key(\$this->schemes, \$schemes);

        foreach (\$schemeRegexes as \$regexes) {
            foreach (\$regexes as \$regex) {
                if (preg_match(\$regex, \$value)) {
                    return;
                }
            }
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setParameter('";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
            ->setCode(CardScheme::INVALID_FORMAT_ERROR)
            ->addViolation();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/CardSchemeValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 130,  155 => 111,  43 => 1,);
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

/**
 * Validates that a card number belongs to a specified scheme.
 *
 * @author Tim Nagel <t.nagel@infinite.net.au>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see https://en.wikipedia.org/wiki/Payment_card_number
 * @see https://www.regular-expressions.info/creditcard.html
 */
class CardSchemeValidator extends ConstraintValidator
{
    protected \$schemes = [
        // American Express card numbers start with 34 or 37 and have 15 digits.
        'AMEX' => [
            '/^3[47][0-9]{13}\$/',
        ],
        // China UnionPay cards start with 62 and have between 16 and 19 digits.
        // Please note that these cards do not follow Luhn Algorithm as a checksum.
        'CHINA_UNIONPAY' => [
            '/^62[0-9]{14,17}\$/',
        ],
        // Diners Club card numbers begin with 300 through 305, 36 or 38. All have 14 digits.
        // There are Diners Club cards that begin with 5 and have 16 digits.
        // These are a joint venture between Diners Club and MasterCard, and should be processed like a MasterCard.
        'DINERS' => [
            '/^3(?:0[0-5]|[68][0-9])[0-9]{11}\$/',
        ],
        // Discover card numbers begin with 6011, 622126 through 622925, 644 through 649 or 65.
        // All have 16 digits.
        'DISCOVER' => [
            '/^6011[0-9]{12}\$/',
            '/^64[4-9][0-9]{13}\$/',
            '/^65[0-9]{14}\$/',
            '/^622(12[6-9]|1[3-9][0-9]|[2-8][0-9][0-9]|91[0-9]|92[0-5])[0-9]{10}\$/',
        ],
        // InstaPayment cards begin with 637 through 639 and have 16 digits.
        'INSTAPAYMENT' => [
            '/^63[7-9][0-9]{13}\$/',
        ],
        // JCB cards beginning with 2131 or 1800 have 15 digits.
        // JCB cards beginning with 35 have 16 digits.
        'JCB' => [
            '/^(?:2131|1800|35[0-9]{3})[0-9]{11}\$/',
        ],
        // Laser cards begin with either 6304, 6706, 6709 or 6771 and have between 16 and 19 digits.
        'LASER' => [
            '/^(6304|670[69]|6771)[0-9]{12,15}\$/',
        ],
        // Maestro international cards begin with 675900..675999 and have between 12 and 19 digits.
        // Maestro UK cards begin with either 500000..509999 or 560000..699999 and have between 12 and 19 digits.
        'MAESTRO' => [
            '/^(6759[0-9]{2})[0-9]{6,13}\$/',
            '/^(50[0-9]{4})[0-9]{6,13}\$/',
            '/^5[6-9][0-9]{10,17}\$/',
            '/^6[0-9]{11,18}\$/',
        ],
        // All MasterCard numbers start with the numbers 51 through 55. All have 16 digits.
        // October 2016 MasterCard numbers can also start with 222100 through 272099.
        'MASTERCARD' => [
            '/^5[1-5][0-9]{14}\$/',
            '/^2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12})\$/',
        ],
        // Payment system MIR numbers start with 220, then 1 digit from 0 to 4, then 12 digits
        'MIR' => [
            '/^220[0-4][0-9]{12}\$/',
        ],
        // All UATP card numbers start with a 1 and have a length of 15 digits.
        'UATP' => [
            '/^1[0-9]{14}\$/',
        ],
        // All Visa card numbers start with a 4 and have a length of 13, 16, or 19 digits.
        'VISA' => [
            '/^4([0-9]{12}|[0-9]{15}|[0-9]{18})\$/',
        ],
    ];

    /**
     * Validates a creditcard belongs to a specified scheme.
     *
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof CardScheme) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\CardScheme');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_numeric(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(CardScheme::NOT_NUMERIC_ERROR)
                ->addViolation();

            return;
        }

        \$schemes = array_flip((array) \$constraint->schemes);
        \$schemeRegexes = array_intersect_key(\$this->schemes, \$schemes);

        foreach (\$schemeRegexes as \$regexes) {
            foreach (\$regexes as \$regex) {
                if (preg_match(\$regex, \$value)) {
                    return;
                }
            }
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setParameter('{{ value }}', \$this->formatValue(\$value))
            ->setCode(CardScheme::INVALID_FORMAT_ERROR)
            ->addViolation();
    }
}
", "vendor/symfony/validator/Constraints/CardSchemeValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/CardSchemeValidator.php");
    }
}
