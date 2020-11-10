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

/* vendor/symfony/validator/Constraints/IpValidator.php */
class __TwigTemplate_7c50f9284dddf4f1a18e1b116efc2ff7948cb0d4a4ae868d56276091a637e95a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IpValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/IpValidator.php"));

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
 * Validates whether a value is a valid IP address.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class IpValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Ip) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Ip');
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

        switch (\$constraint->version) {
            case Ip::V4:
               \$flag = FILTER_FLAG_IPV4;
               break;

            case Ip::V6:
               \$flag = FILTER_FLAG_IPV6;
               break;

            case Ip::V4_NO_PRIV:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::V6_NO_PRIV:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::ALL_NO_PRIV:
               \$flag = FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::V4_NO_RES:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V6_NO_RES:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::ALL_NO_RES:
               \$flag = FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V4_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V6_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::ALL_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            default:
                \$flag = null;
                break;
        }

        if (!filter_var(\$value, FILTER_VALIDATE_IP, \$flag)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Ip::INVALID_IP_ERROR)
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
        return "vendor/symfony/validator/Constraints/IpValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 102,  43 => 1,);
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
 * Validates whether a value is a valid IP address.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class IpValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Ip) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Ip');
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

        switch (\$constraint->version) {
            case Ip::V4:
               \$flag = FILTER_FLAG_IPV4;
               break;

            case Ip::V6:
               \$flag = FILTER_FLAG_IPV6;
               break;

            case Ip::V4_NO_PRIV:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::V6_NO_PRIV:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::ALL_NO_PRIV:
               \$flag = FILTER_FLAG_NO_PRIV_RANGE;
               break;

            case Ip::V4_NO_RES:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V6_NO_RES:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::ALL_NO_RES:
               \$flag = FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V4_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::V6_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            case Ip::ALL_ONLY_PUBLIC:
               \$flag = FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE;
               break;

            default:
                \$flag = null;
                break;
        }

        if (!filter_var(\$value, FILTER_VALIDATE_IP, \$flag)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Ip::INVALID_IP_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/IpValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/IpValidator.php");
    }
}
