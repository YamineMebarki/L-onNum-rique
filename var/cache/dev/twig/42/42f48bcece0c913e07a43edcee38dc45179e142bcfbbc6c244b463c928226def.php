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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt */
class __TwigTemplate_da2223efa1486cfe1d494d908b36054222391d814598d419e6704e08959cf9df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt"));

        // line 1
        echo "This is a class with a doc comment.

 ---------------- ----------------------------------------------------------------------------- 
 [32m Option         [39m [32m Value                                                                       [39m 
 ---------------- ----------------------------------------------------------------------------- 
  Service ID       -                                                                            
  Class            Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\ClassWithDocComment  
  Tags             -                                                                            
  Public           no                                                                           
  Synthetic        no                                                                           
  Lazy             no                                                                           
  Shared           yes                                                                          
  Abstract         no                                                                           
  Autowired        no                                                                           
  Autoconfigured   no                                                                           
 ---------------- -----------------------------------------------------------------------------

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("This is a class with a doc comment.

 ---------------- ----------------------------------------------------------------------------- 
 [32m Option         [39m [32m Value                                                                       [39m 
 ---------------- ----------------------------------------------------------------------------- 
  Service ID       -                                                                            
  Class            Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\ClassWithDocComment  
  Tags             -                                                                            
  Public           no                                                                           
  Synthetic        no                                                                           
  Lazy             no                                                                           
  Shared           yes                                                                          
  Abstract         no                                                                           
  Autowired        no                                                                           
  Autoconfigured   no                                                                           
 ---------------- -----------------------------------------------------------------------------

", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/existing_class_def_1.txt");
    }
}
