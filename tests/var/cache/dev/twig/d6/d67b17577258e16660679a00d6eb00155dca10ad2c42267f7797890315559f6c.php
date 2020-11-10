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

/* vendor/symfony/security-core/Authorization/Voter/RoleVoter.php */
class __TwigTemplate_a816d2ba00148c9bee858c34112ff468c6c6621ad8f03a3770ac643e5625ea15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/RoleVoter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/RoleVoter.php"));

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

/**
 * RoleVoter votes if any attribute starts with a given prefix.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleVoter implements VoterInterface
{
    private \$prefix;

    public function __construct(string \$prefix = 'ROLE_')
    {
        \$this->prefix = \$prefix;
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        \$roles = \$this->extractRoles(\$token);

        foreach (\$attributes as \$attribute) {
            if (\$attribute instanceof Role) {
                \$attribute = \$attribute->getRole();
            }

            if (!\\is_string(\$attribute) || 0 !== strpos(\$attribute, \$this->prefix)) {
                continue;
            }

            \$result = VoterInterface::ACCESS_DENIED;
            foreach (\$roles as \$role) {
                if (\$attribute === \$role) {
                    return VoterInterface::ACCESS_GRANTED;
                }
            }
        }

        return \$result;
    }

    protected function extractRoles(TokenInterface \$token)
    {
        if (method_exists(\$token, 'getRoleNames')) {
            return \$token->getRoleNames();
        }

        @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

        return array_map(function (Role \$role) { return \$role->getRole(); }, \$token->getRoles(false));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/Voter/RoleVoter.php";
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

/**
 * RoleVoter votes if any attribute starts with a given prefix.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoleVoter implements VoterInterface
{
    private \$prefix;

    public function __construct(string \$prefix = 'ROLE_')
    {
        \$this->prefix = \$prefix;
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        \$roles = \$this->extractRoles(\$token);

        foreach (\$attributes as \$attribute) {
            if (\$attribute instanceof Role) {
                \$attribute = \$attribute->getRole();
            }

            if (!\\is_string(\$attribute) || 0 !== strpos(\$attribute, \$this->prefix)) {
                continue;
            }

            \$result = VoterInterface::ACCESS_DENIED;
            foreach (\$roles as \$role) {
                if (\$attribute === \$role) {
                    return VoterInterface::ACCESS_GRANTED;
                }
            }
        }

        return \$result;
    }

    protected function extractRoles(TokenInterface \$token)
    {
        if (method_exists(\$token, 'getRoleNames')) {
            return \$token->getRoleNames();
        }

        @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

        return array_map(function (Role \$role) { return \$role->getRole(); }, \$token->getRoles(false));
    }
}
", "vendor/symfony/security-core/Authorization/Voter/RoleVoter.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php");
    }
}
