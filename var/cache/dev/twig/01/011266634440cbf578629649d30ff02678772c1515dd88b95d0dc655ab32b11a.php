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

/* vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json */
class __TwigTemplate_4a057900e5235cd6b52ecfbd59ead8af847402d293c584bde999dba5d7244473 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json"));

        // line 1
        echo "{
    \"class\": \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\ChoiceType\",
    \"block_prefix\": \"choice\",
    \"options\": {
        \"own\": [
            \"choice_attr\",
            \"choice_label\",
            \"choice_loader\",
            \"choice_name\",
            \"choice_translation_domain\",
            \"choice_value\",
            \"choices\",
            \"expanded\",
            \"group_by\",
            \"multiple\",
            \"placeholder\",
            \"preferred_choices\"
        ],
        \"overridden\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\": [
                \"compound\",
                \"data_class\",
                \"empty_data\",
                \"error_bubbling\",
                \"trim\"
            ]
        },
        \"parent\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\": [
                \"action\",
                \"allow_file_upload\",
                \"attr\",
                \"attr_translation_parameters\",
                \"auto_initialize\",
                \"block_name\",
                \"block_prefix\",
                \"by_reference\",
                \"data\",
                \"disabled\",
                \"help\",
                \"help_attr\",
                \"help_html\",
                \"help_translation_parameters\",
                \"inherit_data\",
                \"label\",
                \"label_attr\",
                \"label_format\",
                \"label_translation_parameters\",
                \"mapped\",
                \"method\",
                \"post_max_size_message\",
                \"property_path\",
                \"required\",
                \"row_attr\",
                \"translation_domain\",
                \"upload_max_size_message\"
            ]
        },
        \"extension\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Csrf\\\\Type\\\\FormTypeCsrfExtension\": [
                \"csrf_field_name\",
                \"csrf_message\",
                \"csrf_protection\",
                \"csrf_token_id\",
                \"csrf_token_manager\"
            ]
        },
        \"required\": []
    },
    \"parent_types\": [
        \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\"
    ],
    \"type_extensions\": [
        \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Csrf\\\\Type\\\\FormTypeCsrfExtension\"
    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"class\": \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\ChoiceType\",
    \"block_prefix\": \"choice\",
    \"options\": {
        \"own\": [
            \"choice_attr\",
            \"choice_label\",
            \"choice_loader\",
            \"choice_name\",
            \"choice_translation_domain\",
            \"choice_value\",
            \"choices\",
            \"expanded\",
            \"group_by\",
            \"multiple\",
            \"placeholder\",
            \"preferred_choices\"
        ],
        \"overridden\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\": [
                \"compound\",
                \"data_class\",
                \"empty_data\",
                \"error_bubbling\",
                \"trim\"
            ]
        },
        \"parent\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\": [
                \"action\",
                \"allow_file_upload\",
                \"attr\",
                \"attr_translation_parameters\",
                \"auto_initialize\",
                \"block_name\",
                \"block_prefix\",
                \"by_reference\",
                \"data\",
                \"disabled\",
                \"help\",
                \"help_attr\",
                \"help_html\",
                \"help_translation_parameters\",
                \"inherit_data\",
                \"label\",
                \"label_attr\",
                \"label_format\",
                \"label_translation_parameters\",
                \"mapped\",
                \"method\",
                \"post_max_size_message\",
                \"property_path\",
                \"required\",
                \"row_attr\",
                \"translation_domain\",
                \"upload_max_size_message\"
            ]
        },
        \"extension\": {
            \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Csrf\\\\Type\\\\FormTypeCsrfExtension\": [
                \"csrf_field_name\",
                \"csrf_message\",
                \"csrf_protection\",
                \"csrf_token_id\",
                \"csrf_token_manager\"
            ]
        },
        \"required\": []
    },
    \"parent_types\": [
        \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Core\\\\Type\\\\FormType\"
    ],
    \"type_extensions\": [
        \"Symfony\\\\Component\\\\Form\\\\Extension\\\\Csrf\\\\Type\\\\FormTypeCsrfExtension\"
    ]
}
", "vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Descriptor/resolved_form_type_1.json");
    }
}
