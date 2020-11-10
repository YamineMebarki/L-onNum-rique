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

/* vendor/symfony/validator/Constraints/CountValidator.php */
class __TwigTemplate_b3e7572a0de38add053fd7210bf0a0a709e87a33286be70ad82394e4eae59b09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CountValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CountValidator.php"));

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
class CountValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Count) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Count');
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !\$value instanceof \\Countable) {
            throw new UnexpectedValueException(\$value, 'array|\\Countable');
        }

        \$count = \\count(\$value);

        if (null !== \$constraint->max && \$count > \$constraint->max) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->maxMessage)
                ->setParameter('";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "', \$count)
                ->setParameter('";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "', \$constraint->max)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->max)
                ->setCode(Count::TOO_MANY_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$count < \$constraint->min) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->minMessage)
                ->setParameter('";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "', \$count)
                ->setParameter('";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "', \$constraint->min)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->min)
                ->setCode(Count::TOO_FEW_ERROR)
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
        return "vendor/symfony/validator/Constraints/CountValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 58,  107 => 57,  93 => 46,  89 => 45,  43 => 1,);
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
class CountValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Count) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Count');
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !\$value instanceof \\Countable) {
            throw new UnexpectedValueException(\$value, 'array|\\Countable');
        }

        \$count = \\count(\$value);

        if (null !== \$constraint->max && \$count > \$constraint->max) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->maxMessage)
                ->setParameter('{{ count }}', \$count)
                ->setParameter('{{ limit }}', \$constraint->max)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->max)
                ->setCode(Count::TOO_MANY_ERROR)
                ->addViolation();

            return;
        }

        if (null !== \$constraint->min && \$count < \$constraint->min) {
            \$this->context->buildViolation(\$constraint->min == \$constraint->max ? \$constraint->exactMessage : \$constraint->minMessage)
                ->setParameter('{{ count }}', \$count)
                ->setParameter('{{ limit }}', \$constraint->min)
                ->setInvalidValue(\$value)
                ->setPlural((int) \$constraint->min)
                ->setCode(Count::TOO_FEW_ERROR)
                ->addViolation();
        }
    }
}
", "vendor/symfony/validator/Constraints/CountValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/CountValidator.php");
    }
}
