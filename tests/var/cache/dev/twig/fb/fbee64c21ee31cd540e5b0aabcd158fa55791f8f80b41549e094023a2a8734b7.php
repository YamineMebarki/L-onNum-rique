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

/* vendor/symfony/security-core/Role/RoleHierarchy.php */
class __TwigTemplate_f36d0c086d781c489606afefaa9c879e4db98e2f83062b56745d3196abeb5950 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/RoleHierarchy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Role/RoleHierarchy.php"));

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
 * RoleHierarchy defines a role hierarchy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleHierarchy implements RoleHierarchyInterface
{
    private \$hierarchy;
    protected \$map;

    /**
     * @param array \$hierarchy An array defining the hierarchy
     */
    public function __construct(array \$hierarchy)
    {
        \$this->hierarchy = \$hierarchy;

        \$this->buildRoleMap();
    }

    /**
     * {@inheritdoc}
     */
    public function getReachableRoles(array \$roles)
    {
        if (0 === \\func_num_args() || func_get_arg(0)) {
            @trigger_error(sprintf('The %s() method is deprecated since Symfony 4.3 and will be removed in 5.0. Use roles as strings and the getReachableRoleNames() method instead.', __METHOD__), E_USER_DEPRECATED);
        }

        \$reachableRoles = \$roles;
        foreach (\$roles as \$role) {
            if (!isset(\$this->map[\$role->getRole()])) {
                continue;
            }

            foreach (\$this->map[\$role->getRole()] as \$r) {
                \$reachableRoles[] = new Role(\$r);
            }
        }

        return \$reachableRoles;
    }

    /**
     * @param string[] \$roles
     *
     * @return string[]
     */
    public function getReachableRoleNames(array \$roles): array
    {
        \$reachableRoles = \$roles;

        foreach (\$roles as \$role) {
            if (!isset(\$this->map[\$role])) {
                continue;
            }

            foreach (\$this->map[\$role] as \$r) {
                \$reachableRoles[] = \$r;
            }
        }

        return \$reachableRoles;
    }

    protected function buildRoleMap()
    {
        \$this->map = [];
        foreach (\$this->hierarchy as \$main => \$roles) {
            \$this->map[\$main] = \$roles;
            \$visited = [];
            \$additionalRoles = \$roles;
            while (\$role = array_shift(\$additionalRoles)) {
                if (!isset(\$this->hierarchy[\$role])) {
                    continue;
                }

                \$visited[] = \$role;

                foreach (\$this->hierarchy[\$role] as \$roleToAdd) {
                    \$this->map[\$main][] = \$roleToAdd;
                }

                foreach (array_diff(\$this->hierarchy[\$role], \$visited) as \$additionalRole) {
                    \$additionalRoles[] = \$additionalRole;
                }
            }

            \$this->map[\$main] = array_unique(\$this->map[\$main]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Role/RoleHierarchy.php";
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
 * RoleHierarchy defines a role hierarchy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleHierarchy implements RoleHierarchyInterface
{
    private \$hierarchy;
    protected \$map;

    /**
     * @param array \$hierarchy An array defining the hierarchy
     */
    public function __construct(array \$hierarchy)
    {
        \$this->hierarchy = \$hierarchy;

        \$this->buildRoleMap();
    }

    /**
     * {@inheritdoc}
     */
    public function getReachableRoles(array \$roles)
    {
        if (0 === \\func_num_args() || func_get_arg(0)) {
            @trigger_error(sprintf('The %s() method is deprecated since Symfony 4.3 and will be removed in 5.0. Use roles as strings and the getReachableRoleNames() method instead.', __METHOD__), E_USER_DEPRECATED);
        }

        \$reachableRoles = \$roles;
        foreach (\$roles as \$role) {
            if (!isset(\$this->map[\$role->getRole()])) {
                continue;
            }

            foreach (\$this->map[\$role->getRole()] as \$r) {
                \$reachableRoles[] = new Role(\$r);
            }
        }

        return \$reachableRoles;
    }

    /**
     * @param string[] \$roles
     *
     * @return string[]
     */
    public function getReachableRoleNames(array \$roles): array
    {
        \$reachableRoles = \$roles;

        foreach (\$roles as \$role) {
            if (!isset(\$this->map[\$role])) {
                continue;
            }

            foreach (\$this->map[\$role] as \$r) {
                \$reachableRoles[] = \$r;
            }
        }

        return \$reachableRoles;
    }

    protected function buildRoleMap()
    {
        \$this->map = [];
        foreach (\$this->hierarchy as \$main => \$roles) {
            \$this->map[\$main] = \$roles;
            \$visited = [];
            \$additionalRoles = \$roles;
            while (\$role = array_shift(\$additionalRoles)) {
                if (!isset(\$this->hierarchy[\$role])) {
                    continue;
                }

                \$visited[] = \$role;

                foreach (\$this->hierarchy[\$role] as \$roleToAdd) {
                    \$this->map[\$main][] = \$roleToAdd;
                }

                foreach (array_diff(\$this->hierarchy[\$role], \$visited) as \$additionalRole) {
                    \$additionalRoles[] = \$additionalRole;
                }
            }

            \$this->map[\$main] = array_unique(\$this->map[\$main]);
        }
    }
}
", "vendor/symfony/security-core/Role/RoleHierarchy.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Role/RoleHierarchy.php");
    }
}
