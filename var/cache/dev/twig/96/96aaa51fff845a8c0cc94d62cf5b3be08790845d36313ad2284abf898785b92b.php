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

/* vendor/symfony/validator/Constraints/UrlValidator.php */
class __TwigTemplate_631e45b271fea9829bbbc266997b14a214198128d928ce4e6727facd96bd0f83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UrlValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UrlValidator.php"));

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
use Symfony\\Component\\Validator\\Exception\\InvalidOptionsException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UrlValidator extends ConstraintValidator
{
    const PATTERN = '~^
            (%s)://                                 # protocol
            (([\\.\\pL\\pN-]+:)?([\\.\\pL\\pN-]+)@)?      # basic auth
            (
                ([\\pL\\pN\\pS\\-\\_\\.])+(\\.?([\\pL\\pN]|xn\\-\\-[\\pL\\pN-]+)+\\.?) # a domain name
                    |                                                 # or
                \\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}                    # an IP address
                    |                                                 # or
                \\[
                    (?:(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){6})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:::(?:(?:(?:[0-9a-f]{1,4})):){5})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){4})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,1}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){3})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,2}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){2})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,3}(?:(?:[0-9a-f]{1,4})))?::(?:(?:[0-9a-f]{1,4})):)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,4}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,5}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,6}(?:(?:[0-9a-f]{1,4})))?::))))
                \\]  # an IPv6 address
            )
            (:[0-9]+)?                              # a port (optional)
            (?:/ (?:[\\pL\\pN\\-._\\~!\$&\\'()*+,;=:@]|%%[0-9A-Fa-f]{2})* )*          # a path
            (?:\\? (?:[\\pL\\pN\\-._\\~!\$&\\'\\[\\]()*+,;=:@/?]|%%[0-9A-Fa-f]{2})* )?   # a query (optional)
            (?:\\# (?:[\\pL\\pN\\-._\\~!\$&\\'()*+,;=:@/?]|%%[0-9A-Fa-f]{2})* )?       # a fragment (optional)
        \$~ixu';

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Url) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Url');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        if ('' === \$value) {
            return;
        }

        if (null !== \$constraint->normalizer) {
            \$value = (\$constraint->normalizer)(\$value);
        }

        \$pattern = \$constraint->relativeProtocol ? str_replace('(%s):', '(?:(%s):)?', static::PATTERN) : static::PATTERN;
        \$pattern = sprintf(\$pattern, implode('|', \$constraint->protocols));

        if (!preg_match(\$pattern, \$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Url::INVALID_URL_ERROR)
                ->addViolation();

            return;
        }

        if (\$constraint->checkDNS) {
            if (!\\in_array(\$constraint->checkDNS, [
                Url::CHECK_DNS_TYPE_ANY,
                Url::CHECK_DNS_TYPE_A,
                Url::CHECK_DNS_TYPE_A6,
                Url::CHECK_DNS_TYPE_AAAA,
                Url::CHECK_DNS_TYPE_CNAME,
                Url::CHECK_DNS_TYPE_MX,
                Url::CHECK_DNS_TYPE_NAPTR,
                Url::CHECK_DNS_TYPE_NS,
                Url::CHECK_DNS_TYPE_PTR,
                Url::CHECK_DNS_TYPE_SOA,
                Url::CHECK_DNS_TYPE_SRV,
                Url::CHECK_DNS_TYPE_TXT,
            ], true)) {
                throw new InvalidOptionsException(sprintf('Invalid value for option \"checkDNS\" in constraint %s', \\get_class(\$constraint)), ['checkDNS']);
            }

            \$host = parse_url(\$value, PHP_URL_HOST);

            if (!\\is_string(\$host) || !checkdnsrr(\$host, \$constraint->checkDNS)) {
                \$this->context->buildViolation(\$constraint->dnsMessage)
                    ->setParameter('";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$host))
                    ->setCode(Url::INVALID_URL_ERROR)
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
        return "vendor/symfony/validator/Constraints/UrlValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 103,  118 => 74,  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\InvalidOptionsException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UrlValidator extends ConstraintValidator
{
    const PATTERN = '~^
            (%s)://                                 # protocol
            (([\\.\\pL\\pN-]+:)?([\\.\\pL\\pN-]+)@)?      # basic auth
            (
                ([\\pL\\pN\\pS\\-\\_\\.])+(\\.?([\\pL\\pN]|xn\\-\\-[\\pL\\pN-]+)+\\.?) # a domain name
                    |                                                 # or
                \\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}                    # an IP address
                    |                                                 # or
                \\[
                    (?:(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){6})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:::(?:(?:(?:[0-9a-f]{1,4})):){5})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){4})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,1}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){3})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,2}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){2})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,3}(?:(?:[0-9a-f]{1,4})))?::(?:(?:[0-9a-f]{1,4})):)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,4}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,5}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,6}(?:(?:[0-9a-f]{1,4})))?::))))
                \\]  # an IPv6 address
            )
            (:[0-9]+)?                              # a port (optional)
            (?:/ (?:[\\pL\\pN\\-._\\~!\$&\\'()*+,;=:@]|%%[0-9A-Fa-f]{2})* )*          # a path
            (?:\\? (?:[\\pL\\pN\\-._\\~!\$&\\'\\[\\]()*+,;=:@/?]|%%[0-9A-Fa-f]{2})* )?   # a query (optional)
            (?:\\# (?:[\\pL\\pN\\-._\\~!\$&\\'()*+,;=:@/?]|%%[0-9A-Fa-f]{2})* )?       # a fragment (optional)
        \$~ixu';

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Url) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Url');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;
        if ('' === \$value) {
            return;
        }

        if (null !== \$constraint->normalizer) {
            \$value = (\$constraint->normalizer)(\$value);
        }

        \$pattern = \$constraint->relativeProtocol ? str_replace('(%s):', '(?:(%s):)?', static::PATTERN) : static::PATTERN;
        \$pattern = sprintf(\$pattern, implode('|', \$constraint->protocols));

        if (!preg_match(\$pattern, \$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Url::INVALID_URL_ERROR)
                ->addViolation();

            return;
        }

        if (\$constraint->checkDNS) {
            if (!\\in_array(\$constraint->checkDNS, [
                Url::CHECK_DNS_TYPE_ANY,
                Url::CHECK_DNS_TYPE_A,
                Url::CHECK_DNS_TYPE_A6,
                Url::CHECK_DNS_TYPE_AAAA,
                Url::CHECK_DNS_TYPE_CNAME,
                Url::CHECK_DNS_TYPE_MX,
                Url::CHECK_DNS_TYPE_NAPTR,
                Url::CHECK_DNS_TYPE_NS,
                Url::CHECK_DNS_TYPE_PTR,
                Url::CHECK_DNS_TYPE_SOA,
                Url::CHECK_DNS_TYPE_SRV,
                Url::CHECK_DNS_TYPE_TXT,
            ], true)) {
                throw new InvalidOptionsException(sprintf('Invalid value for option \"checkDNS\" in constraint %s', \\get_class(\$constraint)), ['checkDNS']);
            }

            \$host = parse_url(\$value, PHP_URL_HOST);

            if (!\\is_string(\$host) || !checkdnsrr(\$host, \$constraint->checkDNS)) {
                \$this->context->buildViolation(\$constraint->dnsMessage)
                    ->setParameter('{{ value }}', \$this->formatValue(\$host))
                    ->setCode(Url::INVALID_URL_ERROR)
                    ->addViolation();
            }
        }
    }
}
", "vendor/symfony/validator/Constraints/UrlValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/UrlValidator.php");
    }
}
