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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt */
class __TwigTemplate_d7e9bdbcaaced37ccf33b5fe769570581ed2aeabd9a20e25ed0f6d3a4c806d5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt"));

        // line 1
        echo "
[33mRegistered Listeners Grouped by Event[39m
[33m=====================================[39m

[33m\"event1\" event[39m
[33m--------------[39m

 ------- ------------------- ---------- 
 [32m Order [39m [32m Callable          [39m [32m Priority [39m 
 ------- ------------------- ---------- 
  #1      global_function()   255       
  #2      Closure()           -1        
 ------- ------------------- ---------- 

[33m\"event2\" event[39m
[33m--------------[39m

 ------- ----------------------------------------------------------------------------------- ---------- 
 [32m Order [39m [32m Callable                                                                          [39m [32m Priority [39m 
 ------- ----------------------------------------------------------------------------------- ---------- 
  #1      Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\CallableClass::__invoke()   0         
 ------- ----------------------------------------------------------------------------------- ---------- 

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
[33mRegistered Listeners Grouped by Event[39m
[33m=====================================[39m

[33m\"event1\" event[39m
[33m--------------[39m

 ------- ------------------- ---------- 
 [32m Order [39m [32m Callable          [39m [32m Priority [39m 
 ------- ------------------- ---------- 
  #1      global_function()   255       
  #2      Closure()           -1        
 ------- ------------------- ---------- 

[33m\"event2\" event[39m
[33m--------------[39m

 ------- ----------------------------------------------------------------------------------- ---------- 
 [32m Order [39m [32m Callable                                                                          [39m [32m Priority [39m 
 ------- ----------------------------------------------------------------------------------- ---------- 
  #1      Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\CallableClass::__invoke()   0         
 ------- ----------------------------------------------------------------------------------- ---------- 

", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/event_dispatcher_1_events.txt");
    }
}
