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

/* vendor/symfony/validator/Constraints/UniqueValidator.php */
class __TwigTemplate_41a59b1903664ea91847b5f0b551cea8dc167b9576c5a6ab985da0801edceee7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UniqueValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/UniqueValidator.php"));

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
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 */
class UniqueValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Unique) {
            throw new UnexpectedTypeException(\$constraint, Unique::class);
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !\$value instanceof \\IteratorAggregate) {
            throw new UnexpectedValueException(\$value, 'array|IteratorAggregate');
        }

        \$collectionElements = [];
        foreach (\$value as \$element) {
            if (\\in_array(\$element, \$collectionElements, true)) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "', \$this->formatValue(\$value))
                    ->setCode(Unique::IS_NOT_UNIQUE)
                    ->addViolation();

                return;
            }
            \$collectionElements[] = \$element;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/UniqueValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  43 => 1,);
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
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 */
class UniqueValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Unique) {
            throw new UnexpectedTypeException(\$constraint, Unique::class);
        }

        if (null === \$value) {
            return;
        }

        if (!\\is_array(\$value) && !\$value instanceof \\IteratorAggregate) {
            throw new UnexpectedValueException(\$value, 'array|IteratorAggregate');
        }

        \$collectionElements = [];
        foreach (\$value as \$element) {
            if (\\in_array(\$element, \$collectionElements, true)) {
                \$this->context->buildViolation(\$constraint->message)
                    ->setParameter('{{ value }}', \$this->formatValue(\$value))
                    ->setCode(Unique::IS_NOT_UNIQUE)
                    ->addViolation();

                return;
            }
            \$collectionElements[] = \$element;
        }
    }
}
", "vendor/symfony/validator/Constraints/UniqueValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/UniqueValidator.php");
    }
}
