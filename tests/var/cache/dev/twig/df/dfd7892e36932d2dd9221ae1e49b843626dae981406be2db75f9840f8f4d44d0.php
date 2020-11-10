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

/* vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml */
class __TwigTemplate_b5645d921b0744cb242fe52c49e38ad0ca9eabab9951529f9b4aec6fc2d71cc1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml"));

        // line 1
        echo "imports:
    - { resource: ../config/default.yml }

parameters:
    env(JSON): '[1, \"2.5\", 3]'

services:
    _defaults: { public: true }
    public:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\DeclaredClass
    private_alias:
        alias: public
        public: false
    Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass
    env:
        class: stdClass
        arguments:
            - '%env(UNKNOWN)%'
            - '%env(REAL)%'
            - '%env(int:key:2:json:JSON)%'
            - '%env(float:key:2:json:JSON)%'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ../config/default.yml }

parameters:
    env(JSON): '[1, \"2.5\", 3]'

services:
    _defaults: { public: true }
    public:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\DeclaredClass
    private_alias:
        alias: public
        public: false
    Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\BackslashClass
    env:
        class: stdClass
        arguments:
            - '%env(UNKNOWN)%'
            - '%env(REAL)%'
            - '%env(int:key:2:json:JSON)%'
            - '%env(float:key:2:json:JSON)%'
", "vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/ContainerDebug/config.yml");
    }
}
