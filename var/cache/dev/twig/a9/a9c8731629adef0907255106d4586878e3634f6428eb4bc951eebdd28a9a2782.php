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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json */
class __TwigTemplate_ae46ed3eea3a002a4d1f6d15feebb6c2d3849d26eba342fb88de76dffcf871e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json"));

        // line 1
        echo "{
    \"definitions\": {
        \".definition_2\": {
            \"class\": \"Full\\\\Qualified\\\\Class2\",
            \"public\": false,
            \"synthetic\": true,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"file\": \"\\/path\\/to\\/file\",
            \"factory_service\": \"factory.service\",
            \"factory_method\": \"get\",
            \"calls\": [
                \"setMailer\"
            ],
            \"tags\": [
                {
                    \"name\": \"tag1\",
                    \"parameters\": {
                        \"attr1\": \"val1\",
                        \"attr2\": \"val2\"
                    }
                },
                {
                    \"name\": \"tag1\",
                    \"parameters\": {
                        \"attr3\": \"val3\"
                    }
                },
                {
                    \"name\": \"tag2\",
                    \"parameters\": []
                }
            ]
        }
    },
    \"aliases\": {
        \".alias_2\": {
            \"service\": \".service_2\",
            \"public\": false
        }
    },
    \"services\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"definitions\": {
        \".definition_2\": {
            \"class\": \"Full\\\\Qualified\\\\Class2\",
            \"public\": false,
            \"synthetic\": true,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"file\": \"\\/path\\/to\\/file\",
            \"factory_service\": \"factory.service\",
            \"factory_method\": \"get\",
            \"calls\": [
                \"setMailer\"
            ],
            \"tags\": [
                {
                    \"name\": \"tag1\",
                    \"parameters\": {
                        \"attr1\": \"val1\",
                        \"attr2\": \"val2\"
                    }
                },
                {
                    \"name\": \"tag1\",
                    \"parameters\": {
                        \"attr3\": \"val3\"
                    }
                },
                {
                    \"name\": \"tag2\",
                    \"parameters\": []
                }
            ]
        }
    },
    \"aliases\": {
        \".alias_2\": {
            \"service\": \".service_2\",
            \"public\": false
        }
    },
    \"services\": []
}
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_services.json");
    }
}
