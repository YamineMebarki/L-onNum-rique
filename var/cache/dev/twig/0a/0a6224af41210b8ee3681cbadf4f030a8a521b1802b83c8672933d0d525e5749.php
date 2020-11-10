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

/* vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt */
class __TwigTemplate_759c732df145a9623cc2d8db33e704417e48a56f6d7f204d84588bfc3c9a1d3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt"));

        // line 1
        echo "%env(float:key:2:json:JSON)%
----------------------------

 ----------------- ----------------- 
  Default value     \"[1, \"2.5\", 3]\"  
  Real value        n/a              
  Processed value   3.0              
 ----------------- ----------------- 

%env(int:key:2:json:JSON)%
--------------------------

 ----------------- ----------------- 
  Default value     \"[1, \"2.5\", 3]\"  
  Real value        n/a              
  Processed value   3                
 ----------------- ----------------- 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("%env(float:key:2:json:JSON)%
----------------------------

 ----------------- ----------------- 
  Default value     \"[1, \"2.5\", 3]\"  
  Real value        n/a              
  Processed value   3.0              
 ----------------- ----------------- 

%env(int:key:2:json:JSON)%
--------------------------

 ----------------- ----------------- 
  Default value     \"[1, \"2.5\", 3]\"  
  Real value        n/a              
  Processed value   3                
 ----------------- ----------------- 
", "vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Fixtures/describe_env_vars.AideTxt");
    }
}
