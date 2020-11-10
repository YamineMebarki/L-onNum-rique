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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt */
class __TwigTemplate_92410d32d28254aac56e266f2e882d9d9309c5d4273cc8ea3f0361c94f089cb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt"));

        // line 1
        echo "
[33mSymfony Container Services[39m
[33m==========================[39m

 -------------------------- ---------------------------------------------------------- 
 [32m Service ID               [39m [32m Class name                                               [39m 
 -------------------------- ---------------------------------------------------------- 
  alias_1                    alias for \"service_1\"                                     
  definition_1               Full\\Qualified\\Class1                                     
  definition_without_class                                                             
  service_container          Symfony\\Component\\DependencyInjection\\ContainerInterface  
 -------------------------- ---------------------------------------------------------- 

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
[33mSymfony Container Services[39m
[33m==========================[39m

 -------------------------- ---------------------------------------------------------- 
 [32m Service ID               [39m [32m Class name                                               [39m 
 -------------------------- ---------------------------------------------------------- 
  alias_1                    alias for \"service_1\"                                     
  definition_1               Full\\Qualified\\Class1                                     
  definition_without_class                                                             
  service_container          Symfony\\Component\\DependencyInjection\\ContainerInterface  
 -------------------------- ---------------------------------------------------------- 

", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.txt");
    }
}
