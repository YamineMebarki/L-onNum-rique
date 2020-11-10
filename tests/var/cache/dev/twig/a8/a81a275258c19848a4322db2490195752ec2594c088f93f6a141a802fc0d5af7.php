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

/* vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php */
class __TwigTemplate_d71c72ccd9b1a85529d4daa9976a2e2f5e10fde03cf450fea04e460fc00c4589 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php"));

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

use Symfony\\Component\\ExpressionLanguage\\Expression;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * ExpressionVoter votes based on the evaluation of an expression.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionVoter implements VoterInterface
{
    private \$expressionLanguage;
    private \$trustResolver;
    private \$authChecker;
    private \$roleHierarchy;

    /**
     * @param AuthorizationCheckerInterface \$authChecker
     */
    public function __construct(ExpressionLanguage \$expressionLanguage, AuthenticationTrustResolverInterface \$trustResolver, \$authChecker = null, RoleHierarchyInterface \$roleHierarchy = null)
    {
        if (\$authChecker instanceof RoleHierarchyInterface) {
            @trigger_error(sprintf('Passing a RoleHierarchyInterface to \"%s()\" is deprecated since Symfony 4.2. Pass an AuthorizationCheckerInterface instead.', __METHOD__), E_USER_DEPRECATED);
            \$roleHierarchy = \$authChecker;
            \$authChecker = null;

            if (!method_exists(\$roleHierarchy, 'getReachableRoleNames')) {
                @trigger_error(sprintf('Not implementing the \"%s::getReachableRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', RoleHierarchyInterface::class, \\get_class(\$this->roleHierarchy)), E_USER_DEPRECATED);
            }
        } elseif (null === \$authChecker) {
            @trigger_error(sprintf('Argument 3 passed to \"%s()\" should be an instance of AuthorizationCheckerInterface, not passing it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        } elseif (!\$authChecker instanceof AuthorizationCheckerInterface) {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be an instance of %s or null, %s given.', __METHOD__, AuthorizationCheckerInterface::class, \\is_object(\$authChecker) ? \\get_class(\$authChecker) : \\gettype(\$authChecker)));
        }

        \$this->expressionLanguage = \$expressionLanguage;
        \$this->trustResolver = \$trustResolver;
        \$this->authChecker = \$authChecker;
        \$this->roleHierarchy = \$roleHierarchy;
    }

    /**
     * @deprecated since Symfony 4.1, register the provider directly on the injected ExpressionLanguage instance instead.
     */
    public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface \$provider)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, register the provider directly on the injected ExpressionLanguage instance instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->expressionLanguage->registerProvider(\$provider);
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        \$variables = null;
        foreach (\$attributes as \$attribute) {
            if (!\$attribute instanceof Expression) {
                continue;
            }

            if (null === \$variables) {
                \$variables = \$this->getVariables(\$token, \$subject);
            }

            \$result = VoterInterface::ACCESS_DENIED;
            if (\$this->expressionLanguage->evaluate(\$attribute, \$variables)) {
                return VoterInterface::ACCESS_GRANTED;
            }
        }

        return \$result;
    }

    private function getVariables(TokenInterface \$token, \$subject)
    {
        if (method_exists(\$token, 'getRoleNames')) {
            \$roleNames = \$token->getRoleNames();
            \$roles = array_map(function (string \$role) { return new Role(\$role, false); }, \$roleNames);
        } else {
            @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

            \$roles = \$token->getRoles(false);
            \$roleNames = array_map(function (Role \$role) { return \$role->getRole(); }, \$roles);
        }

        if (null !== \$this->roleHierarchy && method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            \$roleNames = \$this->roleHierarchy->getReachableRoleNames(\$roleNames);
            \$roles = array_map(function (string \$role) { return new Role(\$role, false); }, \$roleNames);
        } elseif (null !== \$this->roleHierarchy) {
            \$roles = \$this->roleHierarchy->getReachableRoles(\$roles);
            \$roleNames = array_map(function (Role \$role) { return \$role->getRole(); }, \$roles);
        }

        \$variables = [
            'token' => \$token,
            'user' => \$token->getUser(),
            'object' => \$subject,
            'subject' => \$subject,
            'roles' => \$roles,
            'role_names' => \$roleNames,
            'trust_resolver' => \$this->trustResolver,
            'auth_checker' => \$this->authChecker,
        ];

        // this is mainly to propose a better experience when the expression is used
        // in an access control rule, as the developer does not know that it's going
        // to be handled by this voter
        if (\$subject instanceof Request) {
            \$variables['request'] = \$subject;
        }

        return \$variables;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php";
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

use Symfony\\Component\\ExpressionLanguage\\Expression;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * ExpressionVoter votes based on the evaluation of an expression.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionVoter implements VoterInterface
{
    private \$expressionLanguage;
    private \$trustResolver;
    private \$authChecker;
    private \$roleHierarchy;

    /**
     * @param AuthorizationCheckerInterface \$authChecker
     */
    public function __construct(ExpressionLanguage \$expressionLanguage, AuthenticationTrustResolverInterface \$trustResolver, \$authChecker = null, RoleHierarchyInterface \$roleHierarchy = null)
    {
        if (\$authChecker instanceof RoleHierarchyInterface) {
            @trigger_error(sprintf('Passing a RoleHierarchyInterface to \"%s()\" is deprecated since Symfony 4.2. Pass an AuthorizationCheckerInterface instead.', __METHOD__), E_USER_DEPRECATED);
            \$roleHierarchy = \$authChecker;
            \$authChecker = null;

            if (!method_exists(\$roleHierarchy, 'getReachableRoleNames')) {
                @trigger_error(sprintf('Not implementing the \"%s::getReachableRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', RoleHierarchyInterface::class, \\get_class(\$this->roleHierarchy)), E_USER_DEPRECATED);
            }
        } elseif (null === \$authChecker) {
            @trigger_error(sprintf('Argument 3 passed to \"%s()\" should be an instance of AuthorizationCheckerInterface, not passing it is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        } elseif (!\$authChecker instanceof AuthorizationCheckerInterface) {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be an instance of %s or null, %s given.', __METHOD__, AuthorizationCheckerInterface::class, \\is_object(\$authChecker) ? \\get_class(\$authChecker) : \\gettype(\$authChecker)));
        }

        \$this->expressionLanguage = \$expressionLanguage;
        \$this->trustResolver = \$trustResolver;
        \$this->authChecker = \$authChecker;
        \$this->roleHierarchy = \$roleHierarchy;
    }

    /**
     * @deprecated since Symfony 4.1, register the provider directly on the injected ExpressionLanguage instance instead.
     */
    public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface \$provider)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1, register the provider directly on the injected ExpressionLanguage instance instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->expressionLanguage->registerProvider(\$provider);
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        \$variables = null;
        foreach (\$attributes as \$attribute) {
            if (!\$attribute instanceof Expression) {
                continue;
            }

            if (null === \$variables) {
                \$variables = \$this->getVariables(\$token, \$subject);
            }

            \$result = VoterInterface::ACCESS_DENIED;
            if (\$this->expressionLanguage->evaluate(\$attribute, \$variables)) {
                return VoterInterface::ACCESS_GRANTED;
            }
        }

        return \$result;
    }

    private function getVariables(TokenInterface \$token, \$subject)
    {
        if (method_exists(\$token, 'getRoleNames')) {
            \$roleNames = \$token->getRoleNames();
            \$roles = array_map(function (string \$role) { return new Role(\$role, false); }, \$roleNames);
        } else {
            @trigger_error(sprintf('Not implementing the \"%s::getRoleNames()\" method in \"%s\" is deprecated since Symfony 4.3.', TokenInterface::class, \\get_class(\$token)), E_USER_DEPRECATED);

            \$roles = \$token->getRoles(false);
            \$roleNames = array_map(function (Role \$role) { return \$role->getRole(); }, \$roles);
        }

        if (null !== \$this->roleHierarchy && method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            \$roleNames = \$this->roleHierarchy->getReachableRoleNames(\$roleNames);
            \$roles = array_map(function (string \$role) { return new Role(\$role, false); }, \$roleNames);
        } elseif (null !== \$this->roleHierarchy) {
            \$roles = \$this->roleHierarchy->getReachableRoles(\$roles);
            \$roleNames = array_map(function (Role \$role) { return \$role->getRole(); }, \$roles);
        }

        \$variables = [
            'token' => \$token,
            'user' => \$token->getUser(),
            'object' => \$subject,
            'subject' => \$subject,
            'roles' => \$roles,
            'role_names' => \$roleNames,
            'trust_resolver' => \$this->trustResolver,
            'auth_checker' => \$this->authChecker,
        ];

        // this is mainly to propose a better experience when the expression is used
        // in an access control rule, as the developer does not know that it's going
        // to be handled by this voter
        if (\$subject instanceof Request) {
            \$variables['request'] = \$subject;
        }

        return \$variables;
    }
}
", "vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php");
    }
}
