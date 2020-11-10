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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml */
class __TwigTemplate_2812cbc1b221586c2d059098e0b0782691b074494c3bde66de46baf33e67f912 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<srv:container xmlns=\"http://symfony.com/schema/dic/security\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <config>
        <provider name=\"default\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER\" />
            </memory>
        </provider>

        <firewall name=\"simple\" pattern=\"/login\" security=\"false\" />

        <firewall name=\"secure\" stateless=\"true\">
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
    </config>
</srv:container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml";
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
        <provider name=\"default\">
            <memory>
                <user name=\"foo\" password=\"foo\" roles=\"ROLE_USER\" />
            </memory>
        </provider>

        <firewall name=\"simple\" pattern=\"/login\" security=\"false\" />

        <firewall name=\"secure\" stateless=\"true\">
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
    </config>
</srv:container>
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/no_custom_user_checker.xml");
    }
}
