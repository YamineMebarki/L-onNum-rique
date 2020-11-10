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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml */
class __TwigTemplate_455deb8e97dabc09ae95d2effa10e774ffdb4b58b702782ef3558f18e8906319 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:serializer enabled=\"true\" />
        <framework:messenger>
            <framework:serializer default-serializer=\"messenger.transport.symfony_serializer\" />
            <framework:routing message-class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\DummyMessage\">
                <framework:sender service=\"amqp\" />
                <framework:sender service=\"audit\" />
            </framework:routing>
            <framework:routing message-class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\SecondMessage\">
                <framework:sender service=\"amqp\" />
                <framework:sender service=\"audit\" />
            </framework:routing>
            <framework:routing message-class=\"*\">
                <framework:sender service=\"amqp\" />
            </framework:routing>
            <framework:transport name=\"amqp\" dsn=\"amqp://localhost/%2f/messages\" />
        </framework:messenger>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:serializer enabled=\"true\" />
        <framework:messenger>
            <framework:serializer default-serializer=\"messenger.transport.symfony_serializer\" />
            <framework:routing message-class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\DummyMessage\">
                <framework:sender service=\"amqp\" />
                <framework:sender service=\"audit\" />
            </framework:routing>
            <framework:routing message-class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\SecondMessage\">
                <framework:sender service=\"amqp\" />
                <framework:sender service=\"audit\" />
            </framework:routing>
            <framework:routing message-class=\"*\">
                <framework:sender service=\"amqp\" />
            </framework:routing>
            <framework:transport name=\"amqp\" dsn=\"amqp://localhost/%2f/messages\" />
        </framework:messenger>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_routing.xml");
    }
}
