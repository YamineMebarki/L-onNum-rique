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

/* vendor/symfony/security-bundle/Resources/config/security_debug.xml */
class __TwigTemplate_b0cfbd4269af0962fe03f6f34afccf70c879bea7cd1876caef21d3a0db2f943b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_debug.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/security_debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager\" decorates=\"security.access.decision_manager\">
            <argument type=\"service\" id=\"debug.security.access.decision_manager.inner\" />
        </service>

        <service id=\"debug.security.voter.vote_listener\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"debug.security.access.decision_manager\" />
        </service>

        <service id=\"debug.security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"security.firewall.map\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />
        </service>

        <service id=\"security.firewall\" alias=\"debug.security.firewall\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/security_debug.xml";
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

        <service id=\"debug.security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager\" decorates=\"security.access.decision_manager\">
            <argument type=\"service\" id=\"debug.security.access.decision_manager.inner\" />
        </service>

        <service id=\"debug.security.voter.vote_listener\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"debug.security.access.decision_manager\" />
        </service>

        <service id=\"debug.security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"security.firewall.map\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />
        </service>

        <service id=\"security.firewall\" alias=\"debug.security.firewall\" />
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/security_debug.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/security_debug.xml");
    }
}
