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

/* vendor/symfony/validator/Constraints/CountryValidator.php */
class __TwigTemplate_dfab7083a9293907925f8192e03bfefc027ca4d61b03a50cbd1df70c881b2ae6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CountryValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CountryValidator.php"));

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

use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates whether a value is a valid country code.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CountryValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Country) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Country');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        if (!class_exists(Countries::class)) {
            throw new LogicException('The Intl component is required to use the Country constraint. Try running \"composer require symfony/intl\".');
        }

        \$value = (string) \$value;

        if (!Countries::exists(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                ->setCode(Country::NO_SUCH_COUNTRY_ERROR)
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
        return "vendor/symfony/validator/Constraints/CountryValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  43 => 1,);
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

use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates whether a value is a valid country code.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CountryValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Country) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Country');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedValueException(\$value, 'string');
        }

        if (!class_exists(Countries::class)) {
            throw new LogicException('The Intl component is required to use the Country constraint. Try running \"composer require symfony/intl\".');
        }

        \$value = (string) \$value;

        if (!Countries::exists(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value))
                ->setCode(Country::NO_SUCH_COUNTRY_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/CountryValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/CountryValidator.php");
    }
}
