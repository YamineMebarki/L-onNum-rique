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

/* var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php */
class __TwigTemplate_f3185f283b15c6ea344c4e1650969b075d346e1360fc6df5a2617d9332296955 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.main' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Util/TargetPathTrait.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

\$a = (\$this->privates['security.http_utils'] ?? \$this->load('getSecurity_HttpUtilsService.php'));
\$b = new \\Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler(\$a, []);
\$b->setOptions(['login_path' => 'security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
\$b->setProviderKey('main');
\$c = (\$this->privates['monolog.logger.security'] ?? \$this->load('getMonolog_Logger_SecurityService.php'));

\$d = new \\Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler((\$this->services['http_kernel'] ?? \$this->getHttpKernelService()), \$a, [], \$c);
\$d->setOptions(['login_path' => 'security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

return \$this->privates['security.authentication.listener.form.main'] = new \\Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener((\$this->services['security.token_storage'] ?? (\$this->services['security.token_storage'] = new \\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage())), (\$this->privates['security.authentication.manager'] ?? \$this->getSecurity_Authentication_ManagerService()), (\$this->privates['security.authentication.session_strategy'] ?? (\$this->privates['security.authentication.session_strategy'] = new \\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy('migrate'))), \$a, 'main', \$b, \$d, ['check_path' => 'security_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], \$c, (\$this->services['event_dispatcher'] ?? \$this->getEventDispatcherService()), NULL);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.main' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Util/TargetPathTrait.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

\$a = (\$this->privates['security.http_utils'] ?? \$this->load('getSecurity_HttpUtilsService.php'));
\$b = new \\Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler(\$a, []);
\$b->setOptions(['login_path' => 'security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
\$b->setProviderKey('main');
\$c = (\$this->privates['monolog.logger.security'] ?? \$this->load('getMonolog_Logger_SecurityService.php'));

\$d = new \\Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler((\$this->services['http_kernel'] ?? \$this->getHttpKernelService()), \$a, [], \$c);
\$d->setOptions(['login_path' => 'security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

return \$this->privates['security.authentication.listener.form.main'] = new \\Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener((\$this->services['security.token_storage'] ?? (\$this->services['security.token_storage'] = new \\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage())), (\$this->privates['security.authentication.manager'] ?? \$this->getSecurity_Authentication_ManagerService()), (\$this->privates['security.authentication.session_strategy'] ?? (\$this->privates['security.authentication.session_strategy'] = new \\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy('migrate'))), \$a, 'main', \$b, \$d, ['check_path' => 'security_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], \$c, (\$this->services['event_dispatcher'] ?? \$this->getEventDispatcherService()), NULL);
", "var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getSecurity_Authentication_Listener_Form_MainService.php");
    }
}
