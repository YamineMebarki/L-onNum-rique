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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml */
class __TwigTemplate_3dbc4f141cd04369e6d4c5eb78b4a5bea0626879ce4241fec85f8c51781cd772 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<srv:container xmlns=\"http://symfony.com/schema/dic/security\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <config>
        <encoder class=\"JMS\\FooBundle\\Entity\\User1\" algorithm=\"plaintext\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User2\" algorithm=\"sha1\" encode-as-base64=\"false\" iterations=\"5\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User3\" algorithm=\"md5\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User4\" id=\"security.encoder.foo\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User5\" algorithm=\"pbkdf2\" hash-algorithm=\"sha1\" encode-as-base64=\"false\" iterations=\"5\" key-length=\"30\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User6\" algorithm=\"native\" time-cost=\"8\" memory-cost=\"100\" cost=\"15\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User7\" algorithm=\"auto\" />

        <provider name=\"default\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER\" />
            </memory>
        </provider>

        <provider name=\"digest\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER, ROLE_ADMIN\" />
            </memory>
        </provider>

        <provider name=\"basic\">
            <memory>
                <user name=\"foo\" password=\"0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33\" roles=\"ROLE_SUPER_ADMIN\" />
                <user name=\"bar\" password=\"0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33\" roles=\"ROLE_USER, ROLE_ADMIN\" />
            </memory>
        </provider>

        <provider name=\"service\" id=\"user.manager\" />

        <provider name=\"chain\">
            <chain providers=\"service, basic\" />
        </provider>

        <firewall name=\"simple\" pattern=\"/login\" security=\"false\" provider=\"default\" />

        <firewall name=\"secure\" stateless=\"true\" provider=\"default\">
            <http-basic />
            <form-login />
            <anonymous />
            <switch-user />
            <x509 />
            <remote-user />
            <user-checker />
            <logout />
            <remember-me secret=\"TheSecret\"/>
        </firewall>

        <firewall name=\"host\" pattern=\"/test\" host=\"foo\\.example\\.org\" methods=\"GET,POST\" provider=\"default\">
            <anonymous />
            <http-basic />
        </firewall>

        <firewall name=\"with_user_checker\" provider=\"default\">
            <anonymous />
            <http-basic />
            <user-checker>app.user_checker</user-checker>
        </firewall>

        <role id=\"ROLE_ADMIN\">ROLE_USER</role>
        <role id=\"ROLE_SUPER_ADMIN\">ROLE_USER,ROLE_ADMIN,ROLE_ALLOWED_TO_SWITCH</role>
        <role id=\"ROLE_REMOTE\">ROLE_USER,ROLE_ADMIN</role>

        <rule path=\"/blog/524\" role=\"ROLE_USER\" requires-channel=\"https\" methods=\"get,POST\" port=\"8000\" />
        <rule role='IS_AUTHENTICATED_ANONYMOUSLY' path=\"/blog/.*\" />
        <rule role='IS_AUTHENTICATED_ANONYMOUSLY' allow-if=\"token.getUsername() matches '/^admin/'\" path=\"/blog/524\" />
    </config>
</srv:container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<srv:container xmlns=\"http://symfony.com/schema/dic/security\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <config>
        <encoder class=\"JMS\\FooBundle\\Entity\\User1\" algorithm=\"plaintext\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User2\" algorithm=\"sha1\" encode-as-base64=\"false\" iterations=\"5\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User3\" algorithm=\"md5\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User4\" id=\"security.encoder.foo\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User5\" algorithm=\"pbkdf2\" hash-algorithm=\"sha1\" encode-as-base64=\"false\" iterations=\"5\" key-length=\"30\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User6\" algorithm=\"native\" time-cost=\"8\" memory-cost=\"100\" cost=\"15\" />

        <encoder class=\"JMS\\FooBundle\\Entity\\User7\" algorithm=\"auto\" />

        <provider name=\"default\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER\" />
            </memory>
        </provider>

        <provider name=\"digest\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER, ROLE_ADMIN\" />
            </memory>
        </provider>

        <provider name=\"basic\">
            <memory>
                <user name=\"foo\" password=\"0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33\" roles=\"ROLE_SUPER_ADMIN\" />
                <user name=\"bar\" password=\"0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33\" roles=\"ROLE_USER, ROLE_ADMIN\" />
            </memory>
        </provider>

        <provider name=\"service\" id=\"user.manager\" />

        <provider name=\"chain\">
            <chain providers=\"service, basic\" />
        </provider>

        <firewall name=\"simple\" pattern=\"/login\" security=\"false\" provider=\"default\" />

        <firewall name=\"secure\" stateless=\"true\" provider=\"default\">
            <http-basic />
            <form-login />
            <anonymous />
            <switch-user />
            <x509 />
            <remote-user />
            <user-checker />
            <logout />
            <remember-me secret=\"TheSecret\"/>
        </firewall>

        <firewall name=\"host\" pattern=\"/test\" host=\"foo\\.example\\.org\" methods=\"GET,POST\" provider=\"default\">
            <anonymous />
            <http-basic />
        </firewall>

        <firewall name=\"with_user_checker\" provider=\"default\">
            <anonymous />
            <http-basic />
            <user-checker>app.user_checker</user-checker>
        </firewall>

        <role id=\"ROLE_ADMIN\">ROLE_USER</role>
        <role id=\"ROLE_SUPER_ADMIN\">ROLE_USER,ROLE_ADMIN,ROLE_ALLOWED_TO_SWITCH</role>
        <role id=\"ROLE_REMOTE\">ROLE_USER,ROLE_ADMIN</role>

        <rule path=\"/blog/524\" role=\"ROLE_USER\" requires-channel=\"https\" methods=\"get,POST\" port=\"8000\" />
        <rule role='IS_AUTHENTICATED_ANONYMOUSLY' path=\"/blog/.*\" />
        <rule role='IS_AUTHENTICATED_ANONYMOUSLY' allow-if=\"token.getUsername() matches '/^admin/'\" path=\"/blog/524\" />
    </config>
</srv:container>
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/container1.xml");
    }
}
