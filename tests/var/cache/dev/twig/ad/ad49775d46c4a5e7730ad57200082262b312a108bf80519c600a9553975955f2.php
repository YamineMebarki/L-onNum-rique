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

/* vendor/symfony/web-server-bundle/Resources/config/webserver.xml */
class __TwigTemplate_763f2ac4b266644f35b0e289750d48768ef633c50f97719b0822a86290f24572 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Resources/config/webserver.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Resources/config/webserver.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"web_server.command.server_run\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand\">
            <argument>%kernel.project_dir%/public</argument>
            <argument>%kernel.environment%</argument>
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:run\" />
        </service>

        <service id=\"web_server.command.server_start\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand\">
            <argument>%kernel.project_dir%/public</argument>
            <argument>%kernel.environment%</argument>
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:start\" />
        </service>

        <service id=\"web_server.command.server_stop\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand\">
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:stop\" />
        </service>

        <service id=\"web_server.command.server_status\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand\">
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:status\" />
        </service>

        <service id=\"web_server.command.server_log\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerLogCommand\">
            <tag name=\"console.command\" command=\"server:log\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/Resources/config/webserver.xml";
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

        <service id=\"web_server.command.server_run\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand\">
            <argument>%kernel.project_dir%/public</argument>
            <argument>%kernel.environment%</argument>
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:run\" />
        </service>

        <service id=\"web_server.command.server_start\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand\">
            <argument>%kernel.project_dir%/public</argument>
            <argument>%kernel.environment%</argument>
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:start\" />
        </service>

        <service id=\"web_server.command.server_stop\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand\">
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:stop\" />
        </service>

        <service id=\"web_server.command.server_status\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand\">
            <argument>%kernel.project_dir%/var/cache</argument>
            <tag name=\"console.command\" command=\"server:status\" />
        </service>

        <service id=\"web_server.command.server_log\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerLogCommand\">
            <tag name=\"console.command\" command=\"server:log\" />
        </service>
    </services>
</container>
", "vendor/symfony/web-server-bundle/Resources/config/webserver.xml", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/Resources/config/webserver.xml");
    }
}
