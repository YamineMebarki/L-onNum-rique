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

/* vendor/symfony/form/Extension/Validator/Constraints/Form.php */
class __TwigTemplate_e56dab6dae88ae5abcedbf4e9407024552b5a47304b5827bc4ddd42b2d6647da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Constraints/Form.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Constraints/Form.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Form extends Constraint
{
    const NOT_SYNCHRONIZED_ERROR = '1dafa156-89e1-4736-b832-419c2e501fca';
    const NO_SUCH_FIELD_ERROR = '6e5212ed-a197-4339-99aa-5654798a4854';

    protected static \$errorNames = [
        self::NOT_SYNCHRONIZED_ERROR => 'NOT_SYNCHRONIZED_ERROR',
        self::NO_SUCH_FIELD_ERROR => 'NO_SUCH_FIELD_ERROR',
    ];

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/Constraints/Form.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Form extends Constraint
{
    const NOT_SYNCHRONIZED_ERROR = '1dafa156-89e1-4736-b832-419c2e501fca';
    const NO_SUCH_FIELD_ERROR = '6e5212ed-a197-4339-99aa-5654798a4854';

    protected static \$errorNames = [
        self::NOT_SYNCHRONIZED_ERROR => 'NOT_SYNCHRONIZED_ERROR',
        self::NO_SUCH_FIELD_ERROR => 'NO_SUCH_FIELD_ERROR',
    ];

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
", "vendor/symfony/form/Extension/Validator/Constraints/Form.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/Constraints/Form.php");
    }
}
