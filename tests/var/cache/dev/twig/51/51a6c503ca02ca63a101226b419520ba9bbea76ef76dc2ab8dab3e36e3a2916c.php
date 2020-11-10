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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt */
class __TwigTemplate_a662275f2c7ddc262201a43f3c65fc795ff7b362f6e8831e7aacbc4274fb651e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt"));

        // line 1
        echo " ---------------- ----------------------------- 
 [32m Option         [39m [32m Value                       [39m 
 ---------------- ----------------------------- 
  Service ID       -                            
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
[39;49m  Arguments        Service(.definition_2)[39;49m[39;49m       [39;49m
[39;49m                   [39;49m[39;49m%parameter%[39;49m[39;49m                  [39;49m
[39;49m                   [39;49m[39;49mInlined Service[39;49m[39;49m              [39;49m
[39;49m                   [39;49m[39;49mArray (3 element(s))[39;49m[39;49m         [39;49m
[39;49m                   [39;49m[39;49mIterator (2 element(s))[39;49m[39;49m      [39;49m
[39;49m                   [39;49m[39;49m- Service(definition_1)[39;49m[39;49m      [39;49m
[39;49m                   [39;49m- Service(.definition_2)     
 ---------------- -----------------------------

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" ---------------- ----------------------------- 
 [32m Option         [39m [32m Value                       [39m 
 ---------------- ----------------------------- 
  Service ID       -                            
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
[39;49m  Arguments        Service(.definition_2)[39;49m[39;49m       [39;49m
[39;49m                   [39;49m[39;49m%parameter%[39;49m[39;49m                  [39;49m
[39;49m                   [39;49m[39;49mInlined Service[39;49m[39;49m              [39;49m
[39;49m                   [39;49m[39;49mArray (3 element(s))[39;49m[39;49m         [39;49m
[39;49m                   [39;49m[39;49mIterator (2 element(s))[39;49m[39;49m      [39;49m
[39;49m                   [39;49m[39;49m- Service(definition_1)[39;49m[39;49m      [39;49m
[39;49m                   [39;49m- Service(.definition_2)     
 ---------------- -----------------------------

", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.txt");
    }
}
