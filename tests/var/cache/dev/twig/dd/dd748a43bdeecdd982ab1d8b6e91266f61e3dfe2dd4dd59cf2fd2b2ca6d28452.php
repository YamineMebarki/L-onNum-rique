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

/* vendor/symfony/security-bundle/Resources/config/security_listeners.xml */
class __TwigTemplate_d174c7f53b8a9ae1c54cef1b4621752a4efc0051ab0423ffed2c7860fd81aa2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_listeners.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_listeners.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authentication.listener.anonymous\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument /> <!-- Key -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
        </service>

        <service id=\"security.authentication.provider.anonymous\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\">
            <argument /> <!-- Key -->
        </service>

        <service id=\"security.authentication.retry_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint\">
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>

        <service id=\"security.authentication.basic_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint\" />

        <service id=\"security.channel_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.access_map\" />
            <argument type=\"service\" id=\"security.authentication.retry_entry_point\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.access_map\" class=\"Symfony\\Component\\Security\\Http\\AccessMap\" />

        <service id=\"security.context_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"collection\" />
            <argument /> <!-- Provider Key -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
        </service>

        <service id=\"security.logout_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" abstract=\"true\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"service\" id=\"security.logout.success_handler\" />
            <argument /> <!-- Options -->
        </service>

        <service id=\"security.logout.handler.session\" class=\"Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler\" />

        <service id=\"security.logout.handler.cookie_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler\" abstract=\"true\" />

        <service id=\"security.logout.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" abstract=\"true\">
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument>/</argument>
        </service>

        <service id=\"security.authentication.form_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" abstract=\"true\">
            <argument type=\"service\" id=\"http_kernel\" />
        </service>

        <service id=\"security.authentication.listener.abstract\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.authentication.session_strategy\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument />
            <argument type=\"service\" id=\"security.authentication.success_handler\" />
            <argument type=\"service\" id=\"security.authentication.failure_handler\" />
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.custom_success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationSuccessHandler\" abstract=\"true\">
            <argument /> <!-- The custom success handler service id -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument /> <!-- Provider-shared Key -->
        </service>

        <service id=\"security.authentication.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" abstract=\"true\">
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"collection\" /> <!-- Options -->
        </service>

        <service id=\"security.authentication.custom_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationFailureHandler\" abstract=\"true\">
            <argument /> <!-- The custom failure handler service id -->
            <argument type=\"collection\" /> <!-- Options -->
        </service>

        <service id=\"security.authentication.failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"http_kernel\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.form\"
                 class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\"
                 parent=\"security.authentication.listener.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.authentication.listener.simple_form\"
                 class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener\"
                 parent=\"security.authentication.listener.abstract\"
                 public=\"false\"
                 abstract=\"true\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.simple_success_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"security.authentication.success_handler\" />
            <argument type=\"service\" id=\"security.authentication.failure_handler\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.listener.simple_preauth\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.listener.x509\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- x509 user -->
            <argument /> <!-- x509 credentials -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.json\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordJsonAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Failure handler -->
            <argument /> <!-- Success Handler -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"property_accessor\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.remote_user\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- REMOTE_USER server env var -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
        </service>

        <service id=\"security.authentication.listener.basic\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Entry Point -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.provider.dao\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
            <argument /> <!-- Provider-shared Key -->
            <argument type=\"service\" id=\"security.encoder_factory\" />
            <argument>%security.authentication.hide_user_not_found%</argument>
        </service>

        <service id=\"security.authentication.provider.ldap_bind\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- UserChecker -->
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- LDAP -->
            <argument /> <!-- Base DN -->
            <argument>%security.authentication.hide_user_not_found%</argument>
        </service>

        <service id=\"security.authentication.provider.simple\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- Simple Authenticator -->
            <argument /> <!-- User Provider -->
            <argument /> <!-- Provider-shared Key -->
            <argument>null</argument> <!-- UserChecker -->
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.provider.pre_authenticated\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.exception_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument />
            <argument type=\"service\" id=\"security.authentication.entry_point\" on-invalid=\"null\" />
            <argument>%security.access.denied_url%</argument>
            <argument type=\"service\" id=\"security.access.denied_handler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>false</argument> <!-- Stateless -->
        </service>

        <service id=\"security.authentication.switchuser_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
            <argument /> <!--  Provider Key -->
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>_switch_user</argument>
            <argument>ROLE_ALLOWED_TO_SWITCH</argument>
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument>false</argument> <!-- Stateless -->
        </service>

        <service id=\"security.access_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AccessListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument type=\"service\" id=\"security.access_map\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/security_listeners.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authentication.listener.anonymous\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument /> <!-- Key -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
        </service>

        <service id=\"security.authentication.provider.anonymous\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\">
            <argument /> <!-- Key -->
        </service>

        <service id=\"security.authentication.retry_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint\">
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>

        <service id=\"security.authentication.basic_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint\" />

        <service id=\"security.channel_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.access_map\" />
            <argument type=\"service\" id=\"security.authentication.retry_entry_point\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.access_map\" class=\"Symfony\\Component\\Security\\Http\\AccessMap\" />

        <service id=\"security.context_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"collection\" />
            <argument /> <!-- Provider Key -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
        </service>

        <service id=\"security.logout_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" abstract=\"true\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"service\" id=\"security.logout.success_handler\" />
            <argument /> <!-- Options -->
        </service>

        <service id=\"security.logout.handler.session\" class=\"Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler\" />

        <service id=\"security.logout.handler.cookie_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler\" abstract=\"true\" />

        <service id=\"security.logout.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" abstract=\"true\">
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument>/</argument>
        </service>

        <service id=\"security.authentication.form_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" abstract=\"true\">
            <argument type=\"service\" id=\"http_kernel\" />
        </service>

        <service id=\"security.authentication.listener.abstract\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.authentication.session_strategy\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument />
            <argument type=\"service\" id=\"security.authentication.success_handler\" />
            <argument type=\"service\" id=\"security.authentication.failure_handler\" />
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.custom_success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationSuccessHandler\" abstract=\"true\">
            <argument /> <!-- The custom success handler service id -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument /> <!-- Provider-shared Key -->
        </service>

        <service id=\"security.authentication.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" abstract=\"true\">
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"collection\" /> <!-- Options -->
        </service>

        <service id=\"security.authentication.custom_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationFailureHandler\" abstract=\"true\">
            <argument /> <!-- The custom failure handler service id -->
            <argument type=\"collection\" /> <!-- Options -->
        </service>

        <service id=\"security.authentication.failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"http_kernel\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.form\"
                 class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\"
                 parent=\"security.authentication.listener.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.authentication.listener.simple_form\"
                 class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener\"
                 parent=\"security.authentication.listener.abstract\"
                 public=\"false\"
                 abstract=\"true\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.simple_success_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"security.authentication.success_handler\" />
            <argument type=\"service\" id=\"security.authentication.failure_handler\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.listener.simple_preauth\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.listener.x509\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- x509 user -->
            <argument /> <!-- x509 credentials -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.json\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordJsonAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Failure handler -->
            <argument /> <!-- Success Handler -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"property_accessor\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.listener.remote_user\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- REMOTE_USER server env var -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
        </service>

        <service id=\"security.authentication.listener.basic\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Entry Point -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.provider.dao\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
            <argument /> <!-- Provider-shared Key -->
            <argument type=\"service\" id=\"security.encoder_factory\" />
            <argument>%security.authentication.hide_user_not_found%</argument>
        </service>

        <service id=\"security.authentication.provider.ldap_bind\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- UserChecker -->
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- LDAP -->
            <argument /> <!-- Base DN -->
            <argument>%security.authentication.hide_user_not_found%</argument>
        </service>

        <service id=\"security.authentication.provider.simple\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- Simple Authenticator -->
            <argument /> <!-- User Provider -->
            <argument /> <!-- Provider-shared Key -->
            <argument>null</argument> <!-- UserChecker -->
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
        </service>

        <service id=\"security.authentication.provider.pre_authenticated\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.exception_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <argument type=\"service\" id=\"security.http_utils\" />
            <argument />
            <argument type=\"service\" id=\"security.authentication.entry_point\" on-invalid=\"null\" />
            <argument>%security.access.denied_url%</argument>
            <argument type=\"service\" id=\"security.access.denied_handler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>false</argument> <!-- Stateless -->
        </service>

        <service id=\"security.authentication.switchuser_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument /> <!-- User Provider -->
            <argument /> <!-- User Checker -->
            <argument /> <!--  Provider Key -->
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>_switch_user</argument>
            <argument>ROLE_ALLOWED_TO_SWITCH</argument>
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument>false</argument> <!-- Stateless -->
        </service>

        <service id=\"security.access_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AccessListener\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument type=\"service\" id=\"security.access_map\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
        </service>
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/security_listeners.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/security_listeners.xml");
    }
}
