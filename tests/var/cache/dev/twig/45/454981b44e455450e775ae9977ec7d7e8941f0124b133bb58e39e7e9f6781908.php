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

/* vendor/symfony/security-core/Role/SwitchUserRole.php */
class __TwigTemplate_38c959e34974b2e2de57c172ebce77c90b875273ac888d44ec8e492db6efd99c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/SwitchUserRole.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/SwitchUserRole.php"));

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

namespace Symfony\\Component\\Security\\Core\\Role;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * SwitchUserRole is used when the current user temporarily impersonates
 * another one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0. Use strings as roles instead.
 */
class SwitchUserRole extends Role
{
    private \$deprecationTriggered = false;
    private \$source;

    /**
     * @param string         \$role   The role as a string
     * @param TokenInterface \$source The original token
     */
    public function __construct(string \$role, TokenInterface \$source)
    {
        if (\$triggerDeprecation = \\func_num_args() < 3 || func_get_arg(2)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);

            \$this->deprecationTriggered = true;
        }

        parent::__construct(\$role, \$triggerDeprecation);

        \$this->source = \$source;
    }

    /**
     * Returns the original Token.
     *
     * @return TokenInterface The original TokenInterface instance
     */
    public function getSource()
    {
        if (!\$this->deprecationTriggered && (\\func_num_args() < 1 || func_get_arg(0))) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since version 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);

            \$this->deprecationTriggered = true;
        }

        return \$this->source;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Role/SwitchUserRole.php";
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

namespace Symfony\\Component\\Security\\Core\\Role;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * SwitchUserRole is used when the current user temporarily impersonates
 * another one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0. Use strings as roles instead.
 */
class SwitchUserRole extends Role
{
    private \$deprecationTriggered = false;
    private \$source;

    /**
     * @param string         \$role   The role as a string
     * @param TokenInterface \$source The original token
     */
    public function __construct(string \$role, TokenInterface \$source)
    {
        if (\$triggerDeprecation = \\func_num_args() < 3 || func_get_arg(2)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);

            \$this->deprecationTriggered = true;
        }

        parent::__construct(\$role, \$triggerDeprecation);

        \$this->source = \$source;
    }

    /**
     * Returns the original Token.
     *
     * @return TokenInterface The original TokenInterface instance
     */
    public function getSource()
    {
        if (!\$this->deprecationTriggered && (\\func_num_args() < 1 || func_get_arg(0))) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since version 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);

            \$this->deprecationTriggered = true;
        }

        return \$this->source;
    }
}
", "vendor/symfony/security-core/Role/SwitchUserRole.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Role/SwitchUserRole.php");
    }
}
