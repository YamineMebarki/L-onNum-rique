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

/* vendor/symfony/security-bundle/Resources/config/security.xml */
class __TwigTemplate_6fdc3fa74e844185b6ec25c5c6e0dbe4e68b97fcf28f8b4ca523b58aee6b6b06 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"security.authentication.trust_resolver.anonymous_class\">null</parameter>
        <parameter key=\"security.authentication.trust_resolver.rememberme_class\">null</parameter>
        <parameter key=\"security.role_hierarchy.roles\" type=\"collection\" />
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authorization_checker\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker\" public=\"true\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument>%security.access.always_authenticate_before_granting%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\" alias=\"security.authorization_checker\" />

        <service id=\"security.token_storage\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage\" public=\"true\">
            <tag name=\"kernel.reset\" method=\"setToken\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\" alias=\"security.token_storage\" />

        <service id=\"security.helper\" class=\"Symfony\\Component\\Security\\Core\\Security\">
            <argument type=\"service_locator\">
                <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" />
                <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\" />
            </argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Security\" alias=\"security.helper\" />

        <service id=\"security.user_value_resolver\" class=\"Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <tag name=\"controller.argument_value_resolver\" priority=\"40\" />
        </service>

        <!-- Authentication related services -->
        <service id=\"security.authentication.manager\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager\">
            <argument /> <!-- providers -->
            <argument>%security.authentication.manager.erase_credentials%</argument>
            <call method=\"setEventDispatcher\">
                <argument type=\"service\" id=\"event_dispatcher\" />
            </call>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\" alias=\"security.authentication.manager\" />

        <service id=\"security.authentication.trust_resolver\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver\">
            <argument>%security.authentication.trust_resolver.anonymous_class%</argument>
            <argument>%security.authentication.trust_resolver.rememberme_class%</argument>
        </service>

        <service id=\"security.authentication.session_strategy\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\">
            <argument>%security.authentication.session_strategy.strategy%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\" alias=\"security.authentication.session_strategy\" />

        <service id=\"security.authentication.session_strategy_noop\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
            <argument>none</argument>
        </service>

        <service id=\"security.encoder_factory.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory\">
            <argument type=\"collection\" />
        </service>

        <service id=\"security.encoder_factory\" alias=\"security.encoder_factory.generic\" />
        <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\" alias=\"security.encoder_factory\" />

        <service id=\"security.user_password_encoder.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder\">
            <argument type=\"service\" id=\"security.encoder_factory\"></argument>
        </service>

        <service id=\"security.password_encoder\" alias=\"security.user_password_encoder.generic\" public=\"true\" />
        <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\" alias=\"security.password_encoder\" />

        <service id=\"security.user_checker\" class=\"Symfony\\Component\\Security\\Core\\User\\UserChecker\" />

        <service id=\"security.expression_language\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage\">
            <argument type=\"service\" id=\"cache.security_expression_language\"></argument>
        </service>

        <service id=\"security.authentication_utils\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" public=\"true\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" alias=\"security.authentication_utils\" />

        <!-- Authorization related services -->
        <service id=\"security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager\">
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\" alias=\"security.access.decision_manager\" />

        <service id=\"security.role_hierarchy\" class=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy\">
            <argument>%security.role_hierarchy.roles%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\" alias=\"security.role_hierarchy\" />

        <!-- Security Voters -->
        <service id=\"security.access.simple_role_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter\">
            <tag name=\"security.voter\" priority=\"245\" />
        </service>

        <service id=\"security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter\">
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <tag name=\"security.voter\" priority=\"250\" />
        </service>

        <service id=\"security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter\">
            <argument type=\"service\" id=\"security.role_hierarchy\" />
            <tag name=\"security.voter\" priority=\"245\" />
        </service>

        <service id=\"security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter\">
            <argument type=\"service\" id=\"security.expression_language\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <argument type=\"service\" id=\"security.authorization_checker\" />
            <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\" />
            <tag name=\"security.voter\" priority=\"245\" />
        </service>


        <!-- Firewall related services -->
        <service id=\"security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\FirewallListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"security.firewall.map\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Firewall\" alias=\"security.firewall\" />

        <service id=\"security.firewall.map\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap\">
            <argument /> <!-- Firewall context locator -->
            <argument /> <!-- Request matchers -->
        </service>

        <service id=\"security.firewall.context\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" abstract=\"true\">
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"security.exception_listener\" />
            <argument />  <!-- LogoutListener -->
            <argument />  <!-- FirewallConfig -->
        </service>

        <service id=\"security.firewall.config\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" abstract=\"true\">
            <argument />                   <!-- name -->
            <argument />                   <!-- user_checker -->
            <argument />                   <!-- request_matcher -->
            <argument />                   <!-- security enabled -->
            <argument />                   <!-- stateless -->
            <argument />                   <!-- provider -->
            <argument />                   <!-- context -->
            <argument />                   <!-- entry_point -->
            <argument />                   <!-- access_denied_handler -->
            <argument />                   <!-- access_denied_url -->
            <argument type=\"collection\" /> <!-- listeners -->
            <argument />                   <!-- switch_user -->
        </service>

        <service id=\"security.logout_url_generator\" class=\"Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator\">
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\" />
        </service>

        <!-- Provisioning -->
        <service id=\"security.user.provider.missing\" class=\"Symfony\\Component\\Security\\Core\\User\\MissingUserProvider\" abstract=\"true\">
            <argument /> <!-- firewall -->
        </service>

        <service id=\"security.user.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider\" abstract=\"true\" />
        <service id=\"security.user.provider.in_memory.user\" class=\"Symfony\\Component\\Security\\Core\\User\\User\" abstract=\"true\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1.</deprecated>
        </service>

        <service id=\"security.user.provider.ldap\" class=\"Symfony\\Component\\Security\\Core\\User\\LdapUserProvider\" abstract=\"true\">
            <argument /> <!-- security.ldap.ldap -->
            <argument /> <!-- base dn -->
            <argument /> <!-- search dn -->
            <argument /> <!-- search password -->
            <argument /> <!-- default_roles -->
            <argument /> <!-- uid key -->
            <argument /> <!-- filter -->
            <argument /> <!-- password_attribute -->
        </service>

        <service id=\"security.user.provider.chain\" class=\"Symfony\\Component\\Security\\Core\\User\\ChainUserProvider\" abstract=\"true\" />

        <service id=\"security.http_utils\" class=\"Symfony\\Component\\Security\\Http\\HttpUtils\">
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\HttpUtils\" alias=\"security.http_utils\" />


        <!-- Validator -->
        <service id=\"security.validator.user_password\" class=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\">
            <tag name=\"validator.constraint_validator\" alias=\"security.validator.user_password\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.encoder_factory\" />
        </service>

        <!-- Cache -->
        <service id=\"cache.security_expression_language\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <!-- Cache Warmers -->
        <service id=\"security.cache_warmer.expression\" class=\"Symfony\\Bundle\\SecurityBundle\\CacheWarmer\\ExpressionCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"collection\" /> <!-- expressions -->
            <argument type=\"service\" id=\"security.expression_language\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/security.xml";
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

    <parameters>
        <parameter key=\"security.authentication.trust_resolver.anonymous_class\">null</parameter>
        <parameter key=\"security.authentication.trust_resolver.rememberme_class\">null</parameter>
        <parameter key=\"security.role_hierarchy.roles\" type=\"collection\" />
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authorization_checker\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker\" public=\"true\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"security.access.decision_manager\" />
            <argument>%security.access.always_authenticate_before_granting%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\" alias=\"security.authorization_checker\" />

        <service id=\"security.token_storage\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage\" public=\"true\">
            <tag name=\"kernel.reset\" method=\"setToken\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\" alias=\"security.token_storage\" />

        <service id=\"security.helper\" class=\"Symfony\\Component\\Security\\Core\\Security\">
            <argument type=\"service_locator\">
                <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" />
                <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\" />
            </argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Security\" alias=\"security.helper\" />

        <service id=\"security.user_value_resolver\" class=\"Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver\">
            <argument type=\"service\" id=\"security.token_storage\" />
            <tag name=\"controller.argument_value_resolver\" priority=\"40\" />
        </service>

        <!-- Authentication related services -->
        <service id=\"security.authentication.manager\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager\">
            <argument /> <!-- providers -->
            <argument>%security.authentication.manager.erase_credentials%</argument>
            <call method=\"setEventDispatcher\">
                <argument type=\"service\" id=\"event_dispatcher\" />
            </call>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\" alias=\"security.authentication.manager\" />

        <service id=\"security.authentication.trust_resolver\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver\">
            <argument>%security.authentication.trust_resolver.anonymous_class%</argument>
            <argument>%security.authentication.trust_resolver.rememberme_class%</argument>
        </service>

        <service id=\"security.authentication.session_strategy\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\">
            <argument>%security.authentication.session_strategy.strategy%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\" alias=\"security.authentication.session_strategy\" />

        <service id=\"security.authentication.session_strategy_noop\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
            <argument>none</argument>
        </service>

        <service id=\"security.encoder_factory.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory\">
            <argument type=\"collection\" />
        </service>

        <service id=\"security.encoder_factory\" alias=\"security.encoder_factory.generic\" />
        <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\" alias=\"security.encoder_factory\" />

        <service id=\"security.user_password_encoder.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder\">
            <argument type=\"service\" id=\"security.encoder_factory\"></argument>
        </service>

        <service id=\"security.password_encoder\" alias=\"security.user_password_encoder.generic\" public=\"true\" />
        <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\" alias=\"security.password_encoder\" />

        <service id=\"security.user_checker\" class=\"Symfony\\Component\\Security\\Core\\User\\UserChecker\" />

        <service id=\"security.expression_language\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage\">
            <argument type=\"service\" id=\"cache.security_expression_language\"></argument>
        </service>

        <service id=\"security.authentication_utils\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" public=\"true\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" alias=\"security.authentication_utils\" />

        <!-- Authorization related services -->
        <service id=\"security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager\">
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\" alias=\"security.access.decision_manager\" />

        <service id=\"security.role_hierarchy\" class=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy\">
            <argument>%security.role_hierarchy.roles%</argument>
        </service>
        <service id=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\" alias=\"security.role_hierarchy\" />

        <!-- Security Voters -->
        <service id=\"security.access.simple_role_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter\">
            <tag name=\"security.voter\" priority=\"245\" />
        </service>

        <service id=\"security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter\">
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <tag name=\"security.voter\" priority=\"250\" />
        </service>

        <service id=\"security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter\">
            <argument type=\"service\" id=\"security.role_hierarchy\" />
            <tag name=\"security.voter\" priority=\"245\" />
        </service>

        <service id=\"security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter\">
            <argument type=\"service\" id=\"security.expression_language\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" />
            <argument type=\"service\" id=\"security.authorization_checker\" />
            <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\" />
            <tag name=\"security.voter\" priority=\"245\" />
        </service>


        <!-- Firewall related services -->
        <service id=\"security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\FirewallListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"security.firewall.map\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\Firewall\" alias=\"security.firewall\" />

        <service id=\"security.firewall.map\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap\">
            <argument /> <!-- Firewall context locator -->
            <argument /> <!-- Request matchers -->
        </service>

        <service id=\"security.firewall.context\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" abstract=\"true\">
            <argument type=\"collection\" />
            <argument type=\"service\" id=\"security.exception_listener\" />
            <argument />  <!-- LogoutListener -->
            <argument />  <!-- FirewallConfig -->
        </service>

        <service id=\"security.firewall.config\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" abstract=\"true\">
            <argument />                   <!-- name -->
            <argument />                   <!-- user_checker -->
            <argument />                   <!-- request_matcher -->
            <argument />                   <!-- security enabled -->
            <argument />                   <!-- stateless -->
            <argument />                   <!-- provider -->
            <argument />                   <!-- context -->
            <argument />                   <!-- entry_point -->
            <argument />                   <!-- access_denied_handler -->
            <argument />                   <!-- access_denied_url -->
            <argument type=\"collection\" /> <!-- listeners -->
            <argument />                   <!-- switch_user -->
        </service>

        <service id=\"security.logout_url_generator\" class=\"Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator\">
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\" />
        </service>

        <!-- Provisioning -->
        <service id=\"security.user.provider.missing\" class=\"Symfony\\Component\\Security\\Core\\User\\MissingUserProvider\" abstract=\"true\">
            <argument /> <!-- firewall -->
        </service>

        <service id=\"security.user.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider\" abstract=\"true\" />
        <service id=\"security.user.provider.in_memory.user\" class=\"Symfony\\Component\\Security\\Core\\User\\User\" abstract=\"true\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1.</deprecated>
        </service>

        <service id=\"security.user.provider.ldap\" class=\"Symfony\\Component\\Security\\Core\\User\\LdapUserProvider\" abstract=\"true\">
            <argument /> <!-- security.ldap.ldap -->
            <argument /> <!-- base dn -->
            <argument /> <!-- search dn -->
            <argument /> <!-- search password -->
            <argument /> <!-- default_roles -->
            <argument /> <!-- uid key -->
            <argument /> <!-- filter -->
            <argument /> <!-- password_attribute -->
        </service>

        <service id=\"security.user.provider.chain\" class=\"Symfony\\Component\\Security\\Core\\User\\ChainUserProvider\" abstract=\"true\" />

        <service id=\"security.http_utils\" class=\"Symfony\\Component\\Security\\Http\\HttpUtils\">
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Http\\HttpUtils\" alias=\"security.http_utils\" />


        <!-- Validator -->
        <service id=\"security.validator.user_password\" class=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\">
            <tag name=\"validator.constraint_validator\" alias=\"security.validator.user_password\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.encoder_factory\" />
        </service>

        <!-- Cache -->
        <service id=\"cache.security_expression_language\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <!-- Cache Warmers -->
        <service id=\"security.cache_warmer.expression\" class=\"Symfony\\Bundle\\SecurityBundle\\CacheWarmer\\ExpressionCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"collection\" /> <!-- expressions -->
            <argument type=\"service\" id=\"security.expression_language\" />
        </service>
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/security.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/security.xml");
    }
}
