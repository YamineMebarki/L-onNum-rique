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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php */
class __TwigTemplate_efde8e421f5213ed895a06db3f2cd1678020b2910498cac3a1ad2f0a4a7a4ad3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\WorkflowGuardListenerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class WorkflowGuardListenerPassTest extends TestCase
{
    private \$container;
    private \$compilerPass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->compilerPass = new WorkflowGuardListenerPass();
    }

    public function testNoExeptionIfParameterIsNotSet()
    {
        \$this->compilerPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasParameter('workflow.has_guard_listeners'));
    }

    public function testNoExeptionIfAllDependenciesArePresent()
    {
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);
        \$this->container->register('validator', ValidatorInterface::class);

        \$this->compilerPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasParameter('workflow.has_guard_listeners'));
    }

    public function testExceptionIfTheTokenStorageServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.token_storage\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheAuthorizationCheckerServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.authorization_checker\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheAuthenticationTrustResolverServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.authentication.trust_resolver\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheRoleHierarchyServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.role_hierarchy\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);

        \$this->compilerPass->process(\$this->container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\WorkflowGuardListenerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class WorkflowGuardListenerPassTest extends TestCase
{
    private \$container;
    private \$compilerPass;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->compilerPass = new WorkflowGuardListenerPass();
    }

    public function testNoExeptionIfParameterIsNotSet()
    {
        \$this->compilerPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasParameter('workflow.has_guard_listeners'));
    }

    public function testNoExeptionIfAllDependenciesArePresent()
    {
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);
        \$this->container->register('validator', ValidatorInterface::class);

        \$this->compilerPass->process(\$this->container);

        \$this->assertFalse(\$this->container->hasParameter('workflow.has_guard_listeners'));
    }

    public function testExceptionIfTheTokenStorageServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.token_storage\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheAuthorizationCheckerServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.authorization_checker\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheAuthenticationTrustResolverServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.authentication.trust_resolver\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.role_hierarchy', RoleHierarchy::class);

        \$this->compilerPass->process(\$this->container);
    }

    public function testExceptionIfTheRoleHierarchyServiceIsNotPresent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\LogicException');
        \$this->expectExceptionMessage('The \"security.role_hierarchy\" service is needed to be able to use the workflow guard listener.');
        \$this->container->setParameter('workflow.has_guard_listeners', true);
        \$this->container->register('security.token_storage', TokenStorageInterface::class);
        \$this->container->register('security.authorization_checker', AuthorizationCheckerInterface::class);
        \$this->container->register('security.authentication.trust_resolver', AuthenticationTrustResolverInterface::class);

        \$this->compilerPass->process(\$this->container);
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/WorkflowGuardListenerPassTest.php");
    }
}
