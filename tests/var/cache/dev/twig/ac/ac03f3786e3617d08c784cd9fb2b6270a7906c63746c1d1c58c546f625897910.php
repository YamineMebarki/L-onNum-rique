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

/* vendor/symfony/security-bundle/Resources/config/guard.xml */
class __TwigTemplate_8c7830826e1a4ef12134f59e4e5ef63f9db0666d6ed595a9dcf09b000e73cbc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/guard.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/guard.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authentication.guard_handler\"
                 class=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\"
            >
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument /> <!-- stateless firewall keys -->
            <call method=\"setSessionAuthenticationStrategy\">
                <argument type=\"service\" id=\"security.authentication.session_strategy\" />
            </call>
        </service>
        
        <service id=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" alias=\"security.authentication.guard_handler\" />

        <!-- See GuardAuthenticationFactory -->
        <service id=\"security.authentication.provider.guard\"
                 class=\"Symfony\\Component\\Security\\Guard\\Provider\\GuardAuthenticationProvider\"
                 abstract=\"true\"
            >
            <argument /> <!-- Simple Authenticator -->
            <argument /> <!-- User Provider -->
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.authentication.listener.guard\"
                 class=\"Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener\"
                 abstract=\"true\"
            >
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.authentication.guard_handler\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/guard.xml";
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

        <service id=\"security.authentication.guard_handler\"
                 class=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\"
            >
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\" />
            <argument /> <!-- stateless firewall keys -->
            <call method=\"setSessionAuthenticationStrategy\">
                <argument type=\"service\" id=\"security.authentication.session_strategy\" />
            </call>
        </service>
        
        <service id=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" alias=\"security.authentication.guard_handler\" />

        <!-- See GuardAuthenticationFactory -->
        <service id=\"security.authentication.provider.guard\"
                 class=\"Symfony\\Component\\Security\\Guard\\Provider\\GuardAuthenticationProvider\"
                 abstract=\"true\"
            >
            <argument /> <!-- Simple Authenticator -->
            <argument /> <!-- User Provider -->
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.authentication.listener.guard\"
                 class=\"Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener\"
                 abstract=\"true\"
            >
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.authentication.guard_handler\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument /> <!-- Provider-shared Key -->
            <argument /> <!-- Authenticator -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/guard.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/guard.xml");
    }
}
