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

/* vendor/symfony/validator/Constraints/CallbackValidator.php */
class __TwigTemplate_b56cdb9814f8a673c12e5e5e50f1a40f9a4ff329196550fd034a993e5bb9cae7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CallbackValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/CallbackValidator.php"));

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
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Validator for Callback constraint.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CallbackValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$object, Constraint \$constraint)
    {
        if (!\$constraint instanceof Callback) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Callback');
        }

        \$method = \$constraint->callback;
        if (\$method instanceof \\Closure) {
            \$method(\$object, \$this->context, \$constraint->payload);
        } elseif (\\is_array(\$method)) {
            if (!\\is_callable(\$method)) {
                if (isset(\$method[0]) && \\is_object(\$method[0])) {
                    \$method[0] = \\get_class(\$method[0]);
                }
                throw new ConstraintDefinitionException(sprintf('%s targeted by Callback constraint is not a valid callable', json_encode(\$method)));
            }

            \$method(\$object, \$this->context, \$constraint->payload);
        } elseif (null !== \$object) {
            if (!method_exists(\$object, \$method)) {
                throw new ConstraintDefinitionException(sprintf('Method \"%s\" targeted by Callback constraint does not exist in class %s', \$method, \\get_class(\$object)));
            }

            \$reflMethod = new \\ReflectionMethod(\$object, \$method);

            if (\$reflMethod->isStatic()) {
                \$reflMethod->invoke(null, \$object, \$this->context, \$constraint->payload);
            } else {
                \$reflMethod->invoke(\$object, \$this->context, \$constraint->payload);
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
        return "vendor/symfony/validator/Constraints/CallbackValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Validator for Callback constraint.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CallbackValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$object, Constraint \$constraint)
    {
        if (!\$constraint instanceof Callback) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Callback');
        }

        \$method = \$constraint->callback;
        if (\$method instanceof \\Closure) {
            \$method(\$object, \$this->context, \$constraint->payload);
        } elseif (\\is_array(\$method)) {
            if (!\\is_callable(\$method)) {
                if (isset(\$method[0]) && \\is_object(\$method[0])) {
                    \$method[0] = \\get_class(\$method[0]);
                }
                throw new ConstraintDefinitionException(sprintf('%s targeted by Callback constraint is not a valid callable', json_encode(\$method)));
            }

            \$method(\$object, \$this->context, \$constraint->payload);
        } elseif (null !== \$object) {
            if (!method_exists(\$object, \$method)) {
                throw new ConstraintDefinitionException(sprintf('Method \"%s\" targeted by Callback constraint does not exist in class %s', \$method, \\get_class(\$object)));
            }

            \$reflMethod = new \\ReflectionMethod(\$object, \$method);

            if (\$reflMethod->isStatic()) {
                \$reflMethod->invoke(null, \$object, \$this->context, \$constraint->payload);
            } else {
                \$reflMethod->invoke(\$object, \$this->context, \$constraint->payload);
            }
        }
    }
}
", "vendor/symfony/validator/Constraints/CallbackValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/CallbackValidator.php");
    }
}
