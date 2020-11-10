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

/* vendor/symfony/security-core/Role/Role.php */
class __TwigTemplate_799a0126253fab0ce8415774fa1bc7c4484242d87cb5f6375477070e3d60d5bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/Role.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/Role.php"));

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

/**
 * Role is a simple implementation representing a role identified by a string.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0. Use strings as roles instead.
 */
class Role
{
    private \$role;

    public function __construct(string \$role)
    {
        if (\\func_num_args() < 2 || func_get_arg(1)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);
        }

        \$this->role = \$role;
    }

    /**
     * Returns a string representation of the role.
     *
     * @return string
     */
    public function getRole()
    {
        return \$this->role;
    }

    public function __toString(): string
    {
        return \$this->role;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Role/Role.php";
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

/**
 * Role is a simple implementation representing a role identified by a string.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0. Use strings as roles instead.
 */
class Role
{
    private \$role;

    public function __construct(string \$role)
    {
        if (\\func_num_args() < 2 || func_get_arg(1)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0. Use strings as roles instead.', __CLASS__), E_USER_DEPRECATED);
        }

        \$this->role = \$role;
    }

    /**
     * Returns a string representation of the role.
     *
     * @return string
     */
    public function getRole()
    {
        return \$this->role;
    }

    public function __toString(): string
    {
        return \$this->role;
    }
}
", "vendor/symfony/security-core/Role/Role.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Role/Role.php");
    }
}
