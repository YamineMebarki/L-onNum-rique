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

/* vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt */
class __TwigTemplate_2c11eaeb48a21067728319aa14a6e10fd3a192fd7e709c22c87763afd3cd34b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt"));

        // line 1
        echo "Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (bar)
=============================================================

 --------------------- ----------------------------------- 
  Deprecated            true                               
 --------------------- ----------------------------------- 
  Deprecation message   \"The option \"bar\" is deprecated.\"  
 --------------------- ----------------------------------- 
  Required              false                              
 --------------------- ----------------------------------- 
  Default               -                                  
 --------------------- ----------------------------------- 
  Allowed types         -                                  
 --------------------- ----------------------------------- 
  Allowed values        -                                  
 --------------------- ----------------------------------- 
  Normalizers           -                                  
 --------------------- -----------------------------------";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (bar)
=============================================================

 --------------------- ----------------------------------- 
  Deprecated            true                               
 --------------------- ----------------------------------- 
  Deprecation message   \"The option \"bar\" is deprecated.\"  
 --------------------- ----------------------------------- 
  Required              false                              
 --------------------- ----------------------------------- 
  Default               -                                  
 --------------------- ----------------------------------- 
  Allowed types         -                                  
 --------------------- ----------------------------------- 
  Allowed values        -                                  
 --------------------- ----------------------------------- 
  Normalizers           -                                  
 --------------------- -----------------------------------", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_option.txt");
    }
}
