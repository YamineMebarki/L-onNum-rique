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

/* vendor/symfony/security-bundle/Resources/config/security_rememberme.xml */
class __TwigTemplate_a8e44820c316f93498c1cd05808c27259fccb88238ee5a88751a86430b334911 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_rememberme.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_rememberme.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.authentication.listener.rememberme\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.rememberme\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument /> <!-- Catch exception flag set in RememberMeFactory -->
            <argument type=\"service\" id=\"security.authentication.session_strategy\" />
        </service>

        <service id=\"security.authentication.provider.rememberme\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.rememberme.token.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider\" />

        <service id=\"security.authentication.rememberme.services.abstract\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"collection\" /> <!--  User Providers -->
            <argument /> <!-- Shared Token Key -->
            <argument /> <!-- Shared Provider Key -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.rememberme.services.persistent\"
                 class=\"Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices\"
                 parent=\"security.authentication.rememberme.services.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.authentication.rememberme.services.simplehash\"
                 class=\"Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices\"
                 parent=\"security.authentication.rememberme.services.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.rememberme.response_listener\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/security_rememberme.xml";
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

        <service id=\"security.authentication.listener.rememberme\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"service\" id=\"security.token_storage\" />
            <argument type=\"service\" id=\"security.authentication.rememberme\" />
            <argument type=\"service\" id=\"security.authentication.manager\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"null\"/>
            <argument /> <!-- Catch exception flag set in RememberMeFactory -->
            <argument type=\"service\" id=\"security.authentication.session_strategy\" />
        </service>

        <service id=\"security.authentication.provider.rememberme\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider\" abstract=\"true\">
            <argument /> <!-- User Checker -->
        </service>

        <service id=\"security.rememberme.token.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider\" />

        <service id=\"security.authentication.rememberme.services.abstract\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"security\" />
            <argument type=\"collection\" /> <!--  User Providers -->
            <argument /> <!-- Shared Token Key -->
            <argument /> <!-- Shared Provider Key -->
            <argument type=\"collection\" /> <!-- Options -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"security.authentication.rememberme.services.persistent\"
                 class=\"Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices\"
                 parent=\"security.authentication.rememberme.services.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.authentication.rememberme.services.simplehash\"
                 class=\"Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices\"
                 parent=\"security.authentication.rememberme.services.abstract\"
                 public=\"false\"
                 abstract=\"true\" />

        <service id=\"security.rememberme.response_listener\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/security_rememberme.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/security_rememberme.xml");
    }
}
