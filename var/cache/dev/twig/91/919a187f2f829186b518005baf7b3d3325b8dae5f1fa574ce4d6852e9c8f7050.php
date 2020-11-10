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

/* vendor/symfony/framework-bundle/Resources/config/security_csrf.xml */
class __TwigTemplate_aec57c6bd9f4090f9decbf8135c67005f0b6970d79c4d366da679006f5deebc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/security_csrf.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/security_csrf.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" />
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" />

        <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\">
            <argument type=\"service\" id=\"session\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" />

        <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
            <argument type=\"service\" id=\"security.csrf.token_generator\" />
            <argument type=\"service\" id=\"security.csrf.token_storage\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" />

        <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\">
            <tag name=\"twig.runtime\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
        </service>

        <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\">
            <tag name=\"twig.extension\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/security_csrf.xml";
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

        <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" />
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" />

        <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\">
            <argument type=\"service\" id=\"session\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" />

        <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
            <argument type=\"service\" id=\"security.csrf.token_generator\" />
            <argument type=\"service\" id=\"security.csrf.token_storage\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" />

        <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\">
            <tag name=\"twig.runtime\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
        </service>

        <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\">
            <tag name=\"twig.extension\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/security_csrf.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/security_csrf.xml");
    }
}
