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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml */
class __TwigTemplate_423f0a6b8c5587d9da4313cc45b46b36fc7ca4e9330cad93876414e06523e202 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml"));

        // line 1
        echo "framework:
    serializer: true
    messenger:
        serializer:
            default_serializer: messenger.transport.symfony_serializer
        routing:
            'Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\DummyMessage': [amqp, audit]
            'Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\SecondMessage':
                senders: [amqp, audit]
            '*': amqp
        transports:
            amqp: 'amqp://localhost/%2f/messages'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("framework:
    serializer: true
    messenger:
        serializer:
            default_serializer: messenger.transport.symfony_serializer
        routing:
            'Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\DummyMessage': [amqp, audit]
            'Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Messenger\\SecondMessage':
                senders: [amqp, audit]
            '*': amqp
        transports:
            amqp: 'amqp://localhost/%2f/messages'
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/messenger_routing.yml");
    }
}
