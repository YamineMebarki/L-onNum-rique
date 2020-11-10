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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json */
class __TwigTemplate_39af5c0447a01841b9650a5915ca4b13cc67ced81727f006dffc17322a9f642d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json"));

        // line 1
        echo "{
    \"class\": \"Full\\\\Qualified\\\\Class1\",
    \"public\": true,
    \"synthetic\": false,
    \"lazy\": true,
    \"shared\": true,
    \"abstract\": true,
    \"autowire\": false,
    \"autoconfigure\": false,
    \"arguments\": [
        {
            \"type\": \"service\",
            \"id\": \".definition_2\"
        },
        \"%parameter%\",
        {
            \"class\": \"inline_service\",
            \"public\": false,
            \"synthetic\": false,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"arguments\": [
                \"arg1\",
                \"arg2\"
            ],
            \"file\": null,
            \"tags\": []
        },
        [
            \"foo\",
            {
                \"type\": \"service\",
                \"id\": \".definition_2\"
            },
            {
                \"class\": \"inline_service\",
                \"public\": false,
                \"synthetic\": false,
                \"lazy\": false,
                \"shared\": true,
                \"abstract\": false,
                \"autowire\": false,
                \"autoconfigure\": false,
                \"arguments\": [],
                \"file\": null,
                \"tags\": []
            }
        ],
        [
            {
                \"type\": \"service\",
                \"id\": \"definition_1\"
            },
            {
                \"type\": \"service\",
                \"id\": \".definition_2\"
            }
        ]
    ],
    \"file\": null,
    \"factory_class\": \"Full\\\\Qualified\\\\FactoryClass\",
    \"factory_method\": \"get\",
    \"tags\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"class\": \"Full\\\\Qualified\\\\Class1\",
    \"public\": true,
    \"synthetic\": false,
    \"lazy\": true,
    \"shared\": true,
    \"abstract\": true,
    \"autowire\": false,
    \"autoconfigure\": false,
    \"arguments\": [
        {
            \"type\": \"service\",
            \"id\": \".definition_2\"
        },
        \"%parameter%\",
        {
            \"class\": \"inline_service\",
            \"public\": false,
            \"synthetic\": false,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"arguments\": [
                \"arg1\",
                \"arg2\"
            ],
            \"file\": null,
            \"tags\": []
        },
        [
            \"foo\",
            {
                \"type\": \"service\",
                \"id\": \".definition_2\"
            },
            {
                \"class\": \"inline_service\",
                \"public\": false,
                \"synthetic\": false,
                \"lazy\": false,
                \"shared\": true,
                \"abstract\": false,
                \"autowire\": false,
                \"autoconfigure\": false,
                \"arguments\": [],
                \"file\": null,
                \"tags\": []
            }
        ],
        [
            {
                \"type\": \"service\",
                \"id\": \"definition_1\"
            },
            {
                \"type\": \"service\",
                \"id\": \".definition_2\"
            }
        ]
    ],
    \"file\": null,
    \"factory_class\": \"Full\\\\Qualified\\\\FactoryClass\",
    \"factory_method\": \"get\",
    \"tags\": []
}
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_1.json");
    }
}
