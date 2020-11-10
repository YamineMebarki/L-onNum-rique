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

/* vendor/symfony/validator/Constraints/AbstractComparison.php */
class __TwigTemplate_dd845938fdf46ec3f2cedf8497a02169f7fc4ca448291090cca41ef34e6d9734 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/AbstractComparison.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/AbstractComparison.php"));

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

use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * Used for the comparison of values.
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractComparison extends Constraint
{
    public \$message;
    public \$value;
    public \$propertyPath;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        if (null === \$options) {
            \$options = [];
        }

        if (\\is_array(\$options)) {
            if (!isset(\$options['value']) && !isset(\$options['propertyPath'])) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" constraint requires either the \"value\" or \"propertyPath\" option to be set.', \\get_class(\$this)));
            }

            if (isset(\$options['value']) && isset(\$options['propertyPath'])) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" constraint requires only one of the \"value\" or \"propertyPath\" options to be set, not both.', \\get_class(\$this)));
            }

            if (isset(\$options['propertyPath']) && !class_exists(PropertyAccess::class)) {
                throw new LogicException(sprintf('The \"%s\" constraint requires the Symfony PropertyAccess component to use the \"propertyPath\" option.', \\get_class(\$this)));
            }
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'value';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/AbstractComparison.php";
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

use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * Used for the comparison of values.
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractComparison extends Constraint
{
    public \$message;
    public \$value;
    public \$propertyPath;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        if (null === \$options) {
            \$options = [];
        }

        if (\\is_array(\$options)) {
            if (!isset(\$options['value']) && !isset(\$options['propertyPath'])) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" constraint requires either the \"value\" or \"propertyPath\" option to be set.', \\get_class(\$this)));
            }

            if (isset(\$options['value']) && isset(\$options['propertyPath'])) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" constraint requires only one of the \"value\" or \"propertyPath\" options to be set, not both.', \\get_class(\$this)));
            }

            if (isset(\$options['propertyPath']) && !class_exists(PropertyAccess::class)) {
                throw new LogicException(sprintf('The \"%s\" constraint requires the Symfony PropertyAccess component to use the \"propertyPath\" option.', \\get_class(\$this)));
            }
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'value';
    }
}
", "vendor/symfony/validator/Constraints/AbstractComparison.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/AbstractComparison.php");
    }
}
