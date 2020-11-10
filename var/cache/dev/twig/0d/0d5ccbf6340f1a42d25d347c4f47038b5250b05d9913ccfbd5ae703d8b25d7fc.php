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

/* vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php */
class __TwigTemplate_50954a9d55f2dceb3fa886616fd7cc4a92eb4f6f8e48c1582f9025ee4ea8cf3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter;
use Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * SecurityListener handles security restrictions on controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityListener implements EventSubscriberInterface
{
    private \$argumentNameConverter;
    private \$tokenStorage;
    private \$authChecker;
    private \$language;
    private \$trustResolver;
    private \$roleHierarchy;
    private \$logger;

    public function __construct(ArgumentNameConverter \$argumentNameConverter, ExpressionLanguage \$language = null, AuthenticationTrustResolverInterface \$trustResolver = null, RoleHierarchyInterface \$roleHierarchy = null, TokenStorageInterface \$tokenStorage = null, AuthorizationCheckerInterface \$authChecker = null, LoggerInterface \$logger = null)
    {
        \$this->argumentNameConverter = \$argumentNameConverter;
        \$this->tokenStorage = \$tokenStorage;
        \$this->authChecker = \$authChecker;
        \$this->language = \$language;
        \$this->trustResolver = \$trustResolver;
        \$this->roleHierarchy = \$roleHierarchy;
        \$this->logger = \$logger;
    }

    public function onKernelControllerArguments(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        if (!\$configurations = \$request->attributes->get('_security')) {
            return;
        }

        if (null === \$this->tokenStorage || null === \$this->trustResolver) {
            throw new \\LogicException('To use the @Security tag, you need to install the Symfony Security bundle.');
        }

        if (null === \$this->tokenStorage->getToken()) {
            throw new \\LogicException('To use the @Security tag, your controller needs to be behind a firewall.');
        }

        if (null === \$this->language) {
            throw new \\LogicException('To use the @Security tag, you need to use the Security component 2.4 or newer and install the ExpressionLanguage component.');
        }

        foreach (\$configurations as \$configuration) {
            if (!\$this->language->evaluate(\$configuration->getExpression(), \$this->getVariables(\$event))) {
                if (\$statusCode = \$configuration->getStatusCode()) {
                    throw new HttpException(\$statusCode, \$configuration->getMessage());
                }

                throw new AccessDeniedException(\$configuration->getMessage() ?: sprintf('Expression \"%s\" denied access.', \$configuration->getExpression()));
            }
        }
    }

    // code should be sync with Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter
    private function getVariables(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        \$token = \$this->tokenStorage->getToken();

        if (method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            if (null !== \$this->roleHierarchy) {
                \$roles = \$this->roleHierarchy->getReachableRoleNames(\$token->getRoleNames());
            } else {
                \$roles = \$token->getRoleNames();
            }
        } else {
            if (null !== \$this->roleHierarchy) {
                \$roles = \$this->roleHierarchy->getReachableRoles(\$token->getRoles());
            } else {
                \$roles = \$token->getRoles();
            }

            \$roles = array_map(function (\$role) {
                return \$role->getRole();
            }, \$roles);
        }

        \$variables = [
            'token' => \$token,
            'user' => \$token->getUser(),
            'object' => \$request,
            'subject' => \$request,
            'request' => \$request,
            'roles' => \$roles,
            'trust_resolver' => \$this->trustResolver,
            // needed for the is_granted expression function
            'auth_checker' => \$this->authChecker,
        ];

        \$controllerArguments = \$this->argumentNameConverter->getControllerArguments(\$event);

        if (\$diff = array_intersect(array_keys(\$variables), array_keys(\$controllerArguments))) {
            foreach (\$diff as \$key => \$variableName) {
                if (\$variables[\$variableName] === \$controllerArguments[\$variableName]) {
                    unset(\$diff[\$key]);
                }
            }

            if (\$diff) {
                \$singular = 1 === \\count(\$diff);
                if (null !== \$this->logger) {
                    \$this->logger->warning(sprintf('Controller argument%s \"%s\" collided with the built-in security expression variables. The built-in value%s are being used for the @Security expression.', \$singular ? '' : 's', implode('\", \"', \$diff), \$singular ? 's' : ''));
                }
            }
        }

        // controller variables should also be accessible
        return array_merge(\$controllerArguments, \$variables);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelControllerArguments'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter;
use Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface;

/**
 * SecurityListener handles security restrictions on controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityListener implements EventSubscriberInterface
{
    private \$argumentNameConverter;
    private \$tokenStorage;
    private \$authChecker;
    private \$language;
    private \$trustResolver;
    private \$roleHierarchy;
    private \$logger;

    public function __construct(ArgumentNameConverter \$argumentNameConverter, ExpressionLanguage \$language = null, AuthenticationTrustResolverInterface \$trustResolver = null, RoleHierarchyInterface \$roleHierarchy = null, TokenStorageInterface \$tokenStorage = null, AuthorizationCheckerInterface \$authChecker = null, LoggerInterface \$logger = null)
    {
        \$this->argumentNameConverter = \$argumentNameConverter;
        \$this->tokenStorage = \$tokenStorage;
        \$this->authChecker = \$authChecker;
        \$this->language = \$language;
        \$this->trustResolver = \$trustResolver;
        \$this->roleHierarchy = \$roleHierarchy;
        \$this->logger = \$logger;
    }

    public function onKernelControllerArguments(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        if (!\$configurations = \$request->attributes->get('_security')) {
            return;
        }

        if (null === \$this->tokenStorage || null === \$this->trustResolver) {
            throw new \\LogicException('To use the @Security tag, you need to install the Symfony Security bundle.');
        }

        if (null === \$this->tokenStorage->getToken()) {
            throw new \\LogicException('To use the @Security tag, your controller needs to be behind a firewall.');
        }

        if (null === \$this->language) {
            throw new \\LogicException('To use the @Security tag, you need to use the Security component 2.4 or newer and install the ExpressionLanguage component.');
        }

        foreach (\$configurations as \$configuration) {
            if (!\$this->language->evaluate(\$configuration->getExpression(), \$this->getVariables(\$event))) {
                if (\$statusCode = \$configuration->getStatusCode()) {
                    throw new HttpException(\$statusCode, \$configuration->getMessage());
                }

                throw new AccessDeniedException(\$configuration->getMessage() ?: sprintf('Expression \"%s\" denied access.', \$configuration->getExpression()));
            }
        }
    }

    // code should be sync with Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter
    private function getVariables(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        \$token = \$this->tokenStorage->getToken();

        if (method_exists(\$this->roleHierarchy, 'getReachableRoleNames')) {
            if (null !== \$this->roleHierarchy) {
                \$roles = \$this->roleHierarchy->getReachableRoleNames(\$token->getRoleNames());
            } else {
                \$roles = \$token->getRoleNames();
            }
        } else {
            if (null !== \$this->roleHierarchy) {
                \$roles = \$this->roleHierarchy->getReachableRoles(\$token->getRoles());
            } else {
                \$roles = \$token->getRoles();
            }

            \$roles = array_map(function (\$role) {
                return \$role->getRole();
            }, \$roles);
        }

        \$variables = [
            'token' => \$token,
            'user' => \$token->getUser(),
            'object' => \$request,
            'subject' => \$request,
            'request' => \$request,
            'roles' => \$roles,
            'trust_resolver' => \$this->trustResolver,
            // needed for the is_granted expression function
            'auth_checker' => \$this->authChecker,
        ];

        \$controllerArguments = \$this->argumentNameConverter->getControllerArguments(\$event);

        if (\$diff = array_intersect(array_keys(\$variables), array_keys(\$controllerArguments))) {
            foreach (\$diff as \$key => \$variableName) {
                if (\$variables[\$variableName] === \$controllerArguments[\$variableName]) {
                    unset(\$diff[\$key]);
                }
            }

            if (\$diff) {
                \$singular = 1 === \\count(\$diff);
                if (null !== \$this->logger) {
                    \$this->logger->warning(sprintf('Controller argument%s \"%s\" collided with the built-in security expression variables. The built-in value%s are being used for the @Security expression.', \$singular ? '' : 's', implode('\", \"', \$diff), \$singular ? 's' : ''));
                }
            }
        }

        // controller variables should also be accessible
        return array_merge(\$controllerArguments, \$variables);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelControllerArguments'];
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php");
    }
}
