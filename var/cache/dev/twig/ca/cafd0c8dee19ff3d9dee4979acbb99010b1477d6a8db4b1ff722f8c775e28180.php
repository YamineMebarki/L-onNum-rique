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

/* vendor/symfony/validator/Constraints/TimezoneValidator.php */
class __TwigTemplate_6a43c4fe70e4bf9364abb7e3a3e76122b0b17add89d3b6a0da9894de25d94492 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TimezoneValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TimezoneValidator.php"));

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

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Timezones;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates whether a value is a valid timezone identifier.
 *
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class TimezoneValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Timezone) {
            throw new UnexpectedTypeException(\$constraint, Timezone::class);
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (\$constraint->intlCompatible && 'Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$value)->getID()) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Timezone::TIMEZONE_IDENTIFIER_INTL_ERROR)
                ->addViolation();

            return;
        }

        if (
            \\in_array(\$value, self::getPhpTimezones(\$constraint->zone, \$constraint->countryCode), true) ||
            \\in_array(\$value, self::getIntlTimezones(\$constraint->zone, \$constraint->countryCode), true)
        ) {
            return;
        }

        if (\$constraint->countryCode) {
            \$code = Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR;
        } elseif (\\DateTimeZone::ALL !== \$constraint->zone) {
            \$code = Timezone::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR;
        } else {
            \$code = Timezone::TIMEZONE_IDENTIFIER_ERROR;
        }

        \$this->context->buildViolation(\$constraint->message)
              ->setParameter('";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
              ->setCode(\$code)
              ->addViolation();
    }

    private static function getPhpTimezones(int \$zone, string \$countryCode = null): array
    {
        if (null !== \$countryCode) {
            return @\\DateTimeZone::listIdentifiers(\$zone, \$countryCode) ?: [];
        }

        return \\DateTimeZone::listIdentifiers(\$zone);
    }

    private static function getIntlTimezones(int \$zone, string \$countryCode = null): array
    {
        if (!class_exists(Timezones::class)) {
            return [];
        }

        if (null !== \$countryCode) {
            try {
                return Timezones::forCountryCode(\$countryCode);
            } catch (MissingResourceException \$e) {
                return [];
            }
        }

        \$timezones = Timezones::getIds();

        if (\\DateTimeZone::ALL === (\\DateTimeZone::ALL & \$zone)) {
            return \$timezones;
        }

        \$filtered = [];
        foreach ((new \\ReflectionClass(\\DateTimeZone::class))->getConstants() as \$const => \$flag) {
            if (\$flag !== (\$flag & \$zone)) {
                continue;
            }

            \$filtered[] = array_filter(\$timezones, static function (\$id) use (\$const) {
                return 0 === stripos(\$id, \$const.'/');
            });
        }

        return \$filtered ? array_merge(...\$filtered) : [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/TimezoneValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 73,  94 => 50,  43 => 1,);
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

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Timezones;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates whether a value is a valid timezone identifier.
 *
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class TimezoneValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Timezone) {
            throw new UnexpectedTypeException(\$constraint, Timezone::class);
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        \$value = (string) \$value;

        if (\$constraint->intlCompatible && 'Etc/Unknown' === \\IntlTimeZone::createTimeZone(\$value)->getID()) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Timezone::TIMEZONE_IDENTIFIER_INTL_ERROR)
                ->addViolation();

            return;
        }

        if (
            \\in_array(\$value, self::getPhpTimezones(\$constraint->zone, \$constraint->countryCode), true) ||
            \\in_array(\$value, self::getIntlTimezones(\$constraint->zone, \$constraint->countryCode), true)
        ) {
            return;
        }

        if (\$constraint->countryCode) {
            \$code = Timezone::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR;
        } elseif (\\DateTimeZone::ALL !== \$constraint->zone) {
            \$code = Timezone::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR;
        } else {
            \$code = Timezone::TIMEZONE_IDENTIFIER_ERROR;
        }

        \$this->context->buildViolation(\$constraint->message)
              ->setParameter('{{ value }}', \$this->formatValue(\$value))
              ->setCode(\$code)
              ->addViolation();
    }

    private static function getPhpTimezones(int \$zone, string \$countryCode = null): array
    {
        if (null !== \$countryCode) {
            return @\\DateTimeZone::listIdentifiers(\$zone, \$countryCode) ?: [];
        }

        return \\DateTimeZone::listIdentifiers(\$zone);
    }

    private static function getIntlTimezones(int \$zone, string \$countryCode = null): array
    {
        if (!class_exists(Timezones::class)) {
            return [];
        }

        if (null !== \$countryCode) {
            try {
                return Timezones::forCountryCode(\$countryCode);
            } catch (MissingResourceException \$e) {
                return [];
            }
        }

        \$timezones = Timezones::getIds();

        if (\\DateTimeZone::ALL === (\\DateTimeZone::ALL & \$zone)) {
            return \$timezones;
        }

        \$filtered = [];
        foreach ((new \\ReflectionClass(\\DateTimeZone::class))->getConstants() as \$const => \$flag) {
            if (\$flag !== (\$flag & \$zone)) {
                continue;
            }

            \$filtered[] = array_filter(\$timezones, static function (\$id) use (\$const) {
                return 0 === stripos(\$id, \$const.'/');
            });
        }

        return \$filtered ? array_merge(...\$filtered) : [];
    }
}
", "vendor/symfony/validator/Constraints/TimezoneValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/TimezoneValidator.php");
    }
}
