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

/* vendor/symfony/validator/Constraints/TypeValidator.php */
class __TwigTemplate_6904598ca1c4eab373de074c4b76a95be19c5bdd2d5daffef7724dd05cdb1303 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TypeValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/TypeValidator.php"));

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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TypeValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Type) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Type');
        }

        if (null === \$value) {
            return;
        }

        \$type = strtolower(\$constraint->type);
        \$type = 'boolean' == \$type ? 'bool' : \$constraint->type;
        \$isFunction = 'is_'.\$type;
        \$ctypeFunction = 'ctype_'.\$type;

        if (\\function_exists(\$isFunction) && \$isFunction(\$value)) {
            return;
        } elseif (\\function_exists(\$ctypeFunction) && \$ctypeFunction(\$value)) {
            return;
        } elseif (\$value instanceof \$constraint->type) {
            return;
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setParameter('";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
            ->setParameter('";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "', \$constraint->type)
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->addViolation();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/TypeValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 51,  94 => 50,  43 => 1,);
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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TypeValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Type) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Type');
        }

        if (null === \$value) {
            return;
        }

        \$type = strtolower(\$constraint->type);
        \$type = 'boolean' == \$type ? 'bool' : \$constraint->type;
        \$isFunction = 'is_'.\$type;
        \$ctypeFunction = 'ctype_'.\$type;

        if (\\function_exists(\$isFunction) && \$isFunction(\$value)) {
            return;
        } elseif (\\function_exists(\$ctypeFunction) && \$ctypeFunction(\$value)) {
            return;
        } elseif (\$value instanceof \$constraint->type) {
            return;
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setParameter('{{ value }}', \$this->formatValue(\$value))
            ->setParameter('{{ type }}', \$constraint->type)
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->addViolation();
    }
}
", "vendor/symfony/validator/Constraints/TypeValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/TypeValidator.php");
    }
}
