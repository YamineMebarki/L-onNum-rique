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

/* vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php */
class __TwigTemplate_df00ddf956563cd72b2d725bc100c79ab466d3624c2c73d1b5ec7e7c1f856e35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * RoleHierarchyVoter uses a RoleHierarchy to determine the roles granted to
 * the user before voting.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleHierarchyVoter extends RoleVoter
{
    private \$roleHierarchy;

    public function __construct(RoleHierarchyInterface \$roleHierarchy, string \$prefix = 'ROLE_')
    {
        if (!method_exists(\$roleHierarchy, 'getReachableRoleNames')) {
            @trigger_error(sprintf('Not implementing the \"%s::getReachableRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', RoleHierarchyInterface::class, \\get_class(\$roleHierarchy)), E_USER_DEPRECATED);
        }

        \$this->roleHierarchy = \$roleHierarchy;

        parent::__construct(\$prefix);
    }

    /**
     * {@inheritdoc}
     */
    protected function extractRoles(TokenInterface \$token)
    {
        if (method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            if (method_exists(\$token, 'getRoleNames')) {
                \$roles = \$token->getRoleNames();
            } else {
                @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

                \$roles = array_map(function (Role \$role) { return \$role->getRole(); }, \$token->getRoles(false));
            }

            return \$this->roleHierarchy->getReachableRoleNames(\$roles);
        }

        return \$this->roleHierarchy->getReachableRoles(\$token->getRoles(false));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * RoleHierarchyVoter uses a RoleHierarchy to determine the roles granted to
 * the user before voting.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleHierarchyVoter extends RoleVoter
{
    private \$roleHierarchy;

    public function __construct(RoleHierarchyInterface \$roleHierarchy, string \$prefix = 'ROLE_')
    {
        if (!method_exists(\$roleHierarchy, 'getReachableRoleNames')) {
            @trigger_error(sprintf('Not implementing the \"%s::getReachableRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', RoleHierarchyInterface::class, \\get_class(\$roleHierarchy)), E_USER_DEPRECATED);
        }

        \$this->roleHierarchy = \$roleHierarchy;

        parent::__construct(\$prefix);
    }

    /**
     * {@inheritdoc}
     */
    protected function extractRoles(TokenInterface \$token)
    {
        if (method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            if (method_exists(\$token, 'getRoleNames')) {
                \$roles = \$token->getRoleNames();
            } else {
                @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

                \$roles = array_map(function (Role \$role) { return \$role->getRole(); }, \$token->getRoles(false));
            }

            return \$this->roleHierarchy->getReachableRoleNames(\$roles);
        }

        return \$this->roleHierarchy->getReachableRoles(\$token->getRoles(false));
    }
}
", "vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php");
    }
}
