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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json */
class __TwigTemplate_256bb5fa30607c2c4fd429714939aaeaee9ab66300ce20f47b0ef6ad23d9a31f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json"));

        // line 1
        echo "{
    \"class\": \"Full\\\\Qualified\\\\Class2\",
    \"public\": false,
    \"synthetic\": true,
    \"lazy\": false,
    \"shared\": true,
    \"abstract\": false,
    \"autowire\": false,
    \"autoconfigure\": false,
    \"arguments\": [],
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
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"class\": \"Full\\\\Qualified\\\\Class2\",
    \"public\": false,
    \"synthetic\": true,
    \"lazy\": false,
    \"shared\": true,
    \"abstract\": false,
    \"autowire\": false,
    \"autoconfigure\": false,
    \"arguments\": [],
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
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.json");
    }
}
