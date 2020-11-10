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

/* vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt */
class __TwigTemplate_6cec37bb980bb24f8bc083e46ed6e7487f6613a49ad7c17b9e1e5a6b65506371 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt"));

        // line 1
        echo "
Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType (Block prefix: \"choice\")
==============================================================================

 --------------------------- -------------------- ------------------------------ ----------------------- 
  Options                     Overridden options   Parent options                 Extension options      
 --------------------------- -------------------- ------------------------------ ----------------------- 
  choice_attr                 FormType             FormType                       FormTypeCsrfExtension  
  choice_label               -------------------- ------------------------------ ----------------------- 
  choice_loader               compound             action                         csrf_field_name        
  choice_name                 data_class           allow_file_upload              csrf_message           
  choice_translation_domain   empty_data           attr                           csrf_protection        
  choice_value                error_bubbling       attr_translation_parameters    csrf_token_id          
  choices                     trim                 auto_initialize                csrf_token_manager     
  expanded                                         block_name                                            
  group_by                                         block_prefix                                          
  multiple                                         by_reference                                          
  placeholder                                      data                                                  
  preferred_choices                                disabled                                              
                                                   help                                                  
                                                   help_attr                                             
                                                   help_html                                             
                                                   help_translation_parameters                           
                                                   inherit_data                                          
                                                   label                                                 
                                                   label_attr                                            
                                                   label_format                                          
                                                   label_translation_parameters                          
                                                   mapped                                                
                                                   method                                                
                                                   post_max_size_message                                 
                                                   property_path                                         
                                                   required                                              
                                                   row_attr                                              
                                                   translation_domain                                    
                                                   upload_max_size_message                               
 --------------------------- -------------------- ------------------------------ ----------------------- 

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
        return "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType (Block prefix: \"choice\")
==============================================================================

 --------------------------- -------------------- ------------------------------ ----------------------- 
  Options                     Overridden options   Parent options                 Extension options      
 --------------------------- -------------------- ------------------------------ ----------------------- 
  choice_attr                 FormType             FormType                       FormTypeCsrfExtension  
  choice_label               -------------------- ------------------------------ ----------------------- 
  choice_loader               compound             action                         csrf_field_name        
  choice_name                 data_class           allow_file_upload              csrf_message           
  choice_translation_domain   empty_data           attr                           csrf_protection        
  choice_value                error_bubbling       attr_translation_parameters    csrf_token_id          
  choices                     trim                 auto_initialize                csrf_token_manager     
  expanded                                         block_name                                            
  group_by                                         block_prefix                                          
  multiple                                         by_reference                                          
  placeholder                                      data                                                  
  preferred_choices                                disabled                                              
                                                   help                                                  
                                                   help_attr                                             
                                                   help_html                                             
                                                   help_translation_parameters                           
                                                   inherit_data                                          
                                                   label                                                 
                                                   label_attr                                            
                                                   label_format                                          
                                                   label_translation_parameters                          
                                                   mapped                                                
                                                   method                                                
                                                   post_max_size_message                                 
                                                   property_path                                         
                                                   required                                              
                                                   row_attr                                              
                                                   translation_domain                                    
                                                   upload_max_size_message                               
 --------------------------- -------------------- ------------------------------ ----------------------- 

Parent types
------------

 * Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType

Type extensions
---------------

 * Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension

", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.txt");
    }
}
