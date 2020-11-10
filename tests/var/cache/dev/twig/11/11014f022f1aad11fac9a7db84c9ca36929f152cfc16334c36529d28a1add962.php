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

/* vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml */
class __TwigTemplate_082b4584ef1b1a914539a6e4f9397180a3217a275b02c682db6689a1a07fd42b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml"));

        // line 1
        echo "services:
    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\NonPublicService:
        public: false

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService: ~

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\UnusedPrivateService: ~

    private_service: '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService'

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PublicService:
        public: true
        arguments:
            - '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\NonPublicService'
            - '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\NonPublicService:
        public: false

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService: ~

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\UnusedPrivateService: ~

    private_service: '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService'

    Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PublicService:
        public: true
        arguments:
            - '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\NonPublicService'
            - '@Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\TestServiceContainer\\PrivateService'
", "vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/TestServiceContainer/services.yml");
    }
}
