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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt */
class __TwigTemplate_23bfaccb6bd78d507c38d98e610d9f7258b5a0861487ef1c791a3202f4dffa98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt"));

        // line 1
        echo "[39;49m // [39;49mThis service is a [32mpublic[39m alias for the service [32mservice_1[39m                                                            

[33mInformation for Service \"[39m[32mservice_1[39m[33m\"[39m
[33m===================================[39m

 ---------------- ----------------------------- 
 [32m Option         [39m [32m Value                       [39m 
 ---------------- ----------------------------- 
  Service ID       service_1                    
  Class            Full\\Qualified\\Class1        
  Tags             -                            
  Public           yes                          
  Synthetic        no                           
  Lazy             yes                          
  Shared           yes                          
  Abstract         yes                          
  Autowired        no                           
  Autoconfigured   no                           
  Factory Class    Full\\Qualified\\FactoryClass  
  Factory Method   get                          
 ---------------- -----------------------------
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[39;49m // [39;49mThis service is a [32mpublic[39m alias for the service [32mservice_1[39m                                                            

[33mInformation for Service \"[39m[32mservice_1[39m[33m\"[39m
[33m===================================[39m

 ---------------- ----------------------------- 
 [32m Option         [39m [32m Value                       [39m 
 ---------------- ----------------------------- 
  Service ID       service_1                    
  Class            Full\\Qualified\\Class1        
  Tags             -                            
  Public           yes                          
  Synthetic        no                           
  Lazy             yes                          
  Shared           yes                          
  Abstract         yes                          
  Autowired        no                           
  Autoconfigured   no                           
  Factory Class    Full\\Qualified\\FactoryClass  
  Factory Method   get                          
 ---------------- -----------------------------
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/alias_with_definition_1.txt");
    }
}
