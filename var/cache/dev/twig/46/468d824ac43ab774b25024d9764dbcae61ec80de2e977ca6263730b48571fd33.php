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

/* vendor/symfony/framework-bundle/Resources/config/http_client.xml */
class __TwigTemplate_9b2b2d425acd4055466ae7357e505a6a1e28e6f004570c8fdde9d209ddcee9ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/http_client.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/http_client.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"http_client\" class=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\">
            <tag name=\"monolog.logger\" channel=\"http_client\" />
            <factory class=\"Symfony\\Component\\HttpClient\\HttpClient\" method=\"create\" />
            <argument type=\"collection\" /> <!-- default options -->
            <argument /> <!-- max host connections -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>
        <service id=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\" alias=\"http_client\" />

        <service id=\"psr18.http_client\" class=\"Symfony\\Component\\HttpClient\\Psr18Client\">
            <argument type=\"service\" id=\"http_client\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\StreamFactoryInterface\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Psr\\Http\\Client\\ClientInterface\" alias=\"psr18.http_client\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/http_client.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"http_client\" class=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\">
            <tag name=\"monolog.logger\" channel=\"http_client\" />
            <factory class=\"Symfony\\Component\\HttpClient\\HttpClient\" method=\"create\" />
            <argument type=\"collection\" /> <!-- default options -->
            <argument /> <!-- max host connections -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>
        <service id=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\" alias=\"http_client\" />

        <service id=\"psr18.http_client\" class=\"Symfony\\Component\\HttpClient\\Psr18Client\">
            <argument type=\"service\" id=\"http_client\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\StreamFactoryInterface\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Psr\\Http\\Client\\ClientInterface\" alias=\"psr18.http_client\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/http_client.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/http_client.xml");
    }
}
