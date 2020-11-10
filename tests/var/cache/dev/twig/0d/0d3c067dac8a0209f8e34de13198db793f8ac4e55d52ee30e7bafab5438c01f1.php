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

/* vendor/symfony/validator/Constraints/NotCompromisedPassword.php */
class __TwigTemplate_ea9d1414e7d3240db58cd5fcc51e2d9b69d20fd13057c690ee417375d3f10689 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/NotCompromisedPassword.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/NotCompromisedPassword.php"));

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

/**
 * Checks if a password has been leaked in a data breach.
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NotCompromisedPassword extends Constraint
{
    const COMPROMISED_PASSWORD_ERROR = 'd9bcdbfe-a9d6-4bfa-a8ff-da5fd93e0f6d';

    protected static \$errorNames = [self::COMPROMISED_PASSWORD_ERROR => 'COMPROMISED_PASSWORD_ERROR'];

    public \$message = 'This password has been leaked in a data breach, it must not be used. Please use another password.';
    public \$threshold = 1;
    public \$skipOnError = false;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/NotCompromisedPassword.php";
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

/**
 * Checks if a password has been leaked in a data breach.
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NotCompromisedPassword extends Constraint
{
    const COMPROMISED_PASSWORD_ERROR = 'd9bcdbfe-a9d6-4bfa-a8ff-da5fd93e0f6d';

    protected static \$errorNames = [self::COMPROMISED_PASSWORD_ERROR => 'COMPROMISED_PASSWORD_ERROR'];

    public \$message = 'This password has been leaked in a data breach, it must not be used. Please use another password.';
    public \$threshold = 1;
    public \$skipOnError = false;
}
", "vendor/symfony/validator/Constraints/NotCompromisedPassword.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/NotCompromisedPassword.php");
    }
}
