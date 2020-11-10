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

/* vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt */
class __TwigTemplate_4f74a2b633c31f181daf31ef4af7aa57142ddfab42c95b12ec7c1ec852cf36b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt"));

        // line 1
        echo "
Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (Block prefix: \"foo\")
=============================================================================

 --------- 
  Options  
 --------- 
  bar      
 --------- 

Parent types
------------

 * Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType

Type extensions
---------------

 * Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (Block prefix: \"foo\")
=============================================================================

 --------- 
  Options  
 --------- 
  bar      
 --------- 

Parent types
------------

 * Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType

Type extensions
---------------

 * Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension
", "vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Descriptor/deprecated_options_of_type.AideTxt");
    }
}
