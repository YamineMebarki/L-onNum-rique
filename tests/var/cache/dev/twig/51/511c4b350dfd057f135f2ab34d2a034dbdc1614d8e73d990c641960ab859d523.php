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

/* vendor/symfony/validator/Constraints/Expression.php */
class __TwigTemplate_14e0aa91d61a43abda315c3559095e60c877d79589e1c59e4c4477e744219f17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Expression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Expression.php"));

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
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"CLASS\", \"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Expression extends Constraint
{
    const EXPRESSION_FAILED_ERROR = '6b3befbc-2f01-4ddf-be21-b57898905284';

    protected static \$errorNames = [
        self::EXPRESSION_FAILED_ERROR => 'EXPRESSION_FAILED_ERROR',
    ];

    public \$message = 'This value is not valid.';
    public \$expression;
    public \$values = [];

    public function __construct(\$options = null)
    {
        if (!class_exists(ExpressionLanguage::class)) {
            // throw new LogicException(sprintf('The \"symfony/expression-language\" component is required to use the \"%s\" constraint.', __CLASS__));
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/expression-language\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'expression';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['expression'];
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'validator.expression';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Expression.php";
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

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"CLASS\", \"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Expression extends Constraint
{
    const EXPRESSION_FAILED_ERROR = '6b3befbc-2f01-4ddf-be21-b57898905284';

    protected static \$errorNames = [
        self::EXPRESSION_FAILED_ERROR => 'EXPRESSION_FAILED_ERROR',
    ];

    public \$message = 'This value is not valid.';
    public \$expression;
    public \$values = [];

    public function __construct(\$options = null)
    {
        if (!class_exists(ExpressionLanguage::class)) {
            // throw new LogicException(sprintf('The \"symfony/expression-language\" component is required to use the \"%s\" constraint.', __CLASS__));
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/expression-language\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'expression';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['expression'];
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'validator.expression';
    }
}
", "vendor/symfony/validator/Constraints/Expression.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Expression.php");
    }
}
