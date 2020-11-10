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

/* vendor/symfony/validator/Constraints/ExpressionValidator.php */
class __TwigTemplate_114053a57e0fdb23784294883318e977622bdd2a0414803b164bf2ef8f0c1a88 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ExpressionValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ExpressionValidator.php"));

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

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
class ExpressionValidator extends ConstraintValidator
{
    private \$expressionLanguage;

    public function __construct(\$propertyAccessor = null, ExpressionLanguage \$expressionLanguage = null)
    {
        \$this->expressionLanguage = \$expressionLanguage;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Expression) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Expression');
        }

        \$variables = \$constraint->values;
        \$variables['value'] = \$value;
        \$variables['this'] = \$this->context->getObject();

        if (!\$this->getExpressionLanguage()->evaluate(\$constraint->expression, \$variables)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value, self::OBJECT_TO_STRING))
                ->setCode(Expression::EXPRESSION_FAILED_ERROR)
                ->addViolation();
        }
    }

    private function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new LogicException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage();
        }

        return \$this->expressionLanguage;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/ExpressionValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  43 => 1,);
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

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
class ExpressionValidator extends ConstraintValidator
{
    private \$expressionLanguage;

    public function __construct(\$propertyAccessor = null, ExpressionLanguage \$expressionLanguage = null)
    {
        \$this->expressionLanguage = \$expressionLanguage;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Expression) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Expression');
        }

        \$variables = \$constraint->values;
        \$variables['value'] = \$value;
        \$variables['this'] = \$this->context->getObject();

        if (!\$this->getExpressionLanguage()->evaluate(\$constraint->expression, \$variables)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('{{ value }}', \$this->formatValue(\$value, self::OBJECT_TO_STRING))
                ->setCode(Expression::EXPRESSION_FAILED_ERROR)
                ->addViolation();
        }
    }

    private function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new LogicException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage();
        }

        return \$this->expressionLanguage;
    }
}
", "vendor/symfony/validator/Constraints/ExpressionValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/ExpressionValidator.php");
    }
}
