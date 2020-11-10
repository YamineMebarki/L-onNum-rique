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

/* vendor/symfony/security-bundle/SecurityBundle.php */
class __TwigTemplate_afbd056f708587d52fe6f40b813442858df05ad69edb99542acd62a2e76eb047 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/SecurityBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/SecurityBundle.php"));

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

namespace Symfony\\Bundle\\SecurityBundle;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddSecurityVotersPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddSessionDomainConstraintPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\RegisterCsrfTokenClearingLogoutHandlerPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\FormLoginFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\FormLoginLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\GuardAuthenticationFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\HttpBasicFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\HttpBasicLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\JsonLoginFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\JsonLoginLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\RememberMeFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\RemoteUserFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SimpleFormFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SimplePreAuthenticationFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\X509Factory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\InMemoryFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\LdapFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new FormLoginFactory());
        \$extension->addSecurityListenerFactory(new FormLoginLdapFactory());
        \$extension->addSecurityListenerFactory(new JsonLoginFactory());
        \$extension->addSecurityListenerFactory(new JsonLoginLdapFactory());
        \$extension->addSecurityListenerFactory(new HttpBasicFactory());
        \$extension->addSecurityListenerFactory(new HttpBasicLdapFactory());
        \$extension->addSecurityListenerFactory(new RememberMeFactory());
        \$extension->addSecurityListenerFactory(new X509Factory());
        \$extension->addSecurityListenerFactory(new RemoteUserFactory());
        \$extension->addSecurityListenerFactory(new SimplePreAuthenticationFactory(false));
        \$extension->addSecurityListenerFactory(new SimpleFormFactory(false));
        \$extension->addSecurityListenerFactory(new GuardAuthenticationFactory());

        \$extension->addUserProviderFactory(new InMemoryFactory());
        \$extension->addUserProviderFactory(new LdapFactory());
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());
        \$container->addCompilerPass(new AddSecurityVotersPass());
        \$container->addCompilerPass(new AddSessionDomainConstraintPass(), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new RegisterCsrfTokenClearingLogoutHandlerPass());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/SecurityBundle.php";
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

namespace Symfony\\Bundle\\SecurityBundle;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddSecurityVotersPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddSessionDomainConstraintPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\RegisterCsrfTokenClearingLogoutHandlerPass;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\FormLoginFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\FormLoginLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\GuardAuthenticationFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\HttpBasicFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\HttpBasicLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\JsonLoginFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\JsonLoginLdapFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\RememberMeFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\RemoteUserFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SimpleFormFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SimplePreAuthenticationFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\X509Factory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\InMemoryFactory;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\LdapFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new FormLoginFactory());
        \$extension->addSecurityListenerFactory(new FormLoginLdapFactory());
        \$extension->addSecurityListenerFactory(new JsonLoginFactory());
        \$extension->addSecurityListenerFactory(new JsonLoginLdapFactory());
        \$extension->addSecurityListenerFactory(new HttpBasicFactory());
        \$extension->addSecurityListenerFactory(new HttpBasicLdapFactory());
        \$extension->addSecurityListenerFactory(new RememberMeFactory());
        \$extension->addSecurityListenerFactory(new X509Factory());
        \$extension->addSecurityListenerFactory(new RemoteUserFactory());
        \$extension->addSecurityListenerFactory(new SimplePreAuthenticationFactory(false));
        \$extension->addSecurityListenerFactory(new SimpleFormFactory(false));
        \$extension->addSecurityListenerFactory(new GuardAuthenticationFactory());

        \$extension->addUserProviderFactory(new InMemoryFactory());
        \$extension->addUserProviderFactory(new LdapFactory());
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());
        \$container->addCompilerPass(new AddSecurityVotersPass());
        \$container->addCompilerPass(new AddSessionDomainConstraintPass(), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new RegisterCsrfTokenClearingLogoutHandlerPass());
    }
}
", "vendor/symfony/security-bundle/SecurityBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/SecurityBundle.php");
    }
}
