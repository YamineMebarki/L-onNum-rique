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

/* vendor/symfony/framework-bundle/Resources/config/mailer.xml */
class __TwigTemplate_156c00a06fe5e2d068fc5de5d11e5b2bc6e02dbb2c1dfa0527235ebd08d64ff1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/mailer.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/mailer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"mailer.mailer\" class=\"Symfony\\Component\\Mailer\\Mailer\">
            <argument type=\"service\" id=\"mailer.default_transport\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
        </service>
        <service id=\"mailer\" alias=\"mailer.mailer\" />
        <service id=\"Symfony\\Component\\Mailer\\MailerInterface\" alias=\"mailer.mailer\" />

        <service id=\"mailer.default_transport\" class=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\">
            <factory class=\"Symfony\\Component\\Mailer\\Transport\" method=\"fromDsn\" />
            <argument /> <!-- env(MAILER_DSN) -->
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\" alias=\"mailer.default_transport\" />

        <service id=\"mailer.messenger.message_handler\" class=\"Symfony\\Component\\Mailer\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"mailer.default_transport\" />
            <tag name=\"messenger.message_handler\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/mailer.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"mailer.mailer\" class=\"Symfony\\Component\\Mailer\\Mailer\">
            <argument type=\"service\" id=\"mailer.default_transport\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
        </service>
        <service id=\"mailer\" alias=\"mailer.mailer\" />
        <service id=\"Symfony\\Component\\Mailer\\MailerInterface\" alias=\"mailer.mailer\" />

        <service id=\"mailer.default_transport\" class=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\">
            <factory class=\"Symfony\\Component\\Mailer\\Transport\" method=\"fromDsn\" />
            <argument /> <!-- env(MAILER_DSN) -->
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\" alias=\"mailer.default_transport\" />

        <service id=\"mailer.messenger.message_handler\" class=\"Symfony\\Component\\Mailer\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"mailer.default_transport\" />
            <tag name=\"messenger.message_handler\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/mailer.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/mailer.xml");
    }
}
