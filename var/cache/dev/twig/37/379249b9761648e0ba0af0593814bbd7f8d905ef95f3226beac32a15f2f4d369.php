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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json */
class __TwigTemplate_1164dbc32e4a5b0b518322844d8491a2012196f2a4776f746d38949800a4127e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json"));

        // line 1
        echo "{
    \"definitions\": {
        \"definition_1\": {
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
        },
        \"definition_without_class\": {
            \"class\": \"\",
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
        },
        \"service_container\": {
            \"class\": \"Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\",
            \"public\": true,
            \"synthetic\": true,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"description\": \"ContainerInterface is the interface implemented by service container classes.\",
            \"arguments\": [],
            \"file\": null,
            \"tags\": []
        }
    },
    \"aliases\": {
        \"alias_1\": {
            \"service\": \"service_1\",
            \"public\": true
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
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"definitions\": {
        \"definition_1\": {
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
        },
        \"definition_without_class\": {
            \"class\": \"\",
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
        },
        \"service_container\": {
            \"class\": \"Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\",
            \"public\": true,
            \"synthetic\": true,
            \"lazy\": false,
            \"shared\": true,
            \"abstract\": false,
            \"autowire\": false,
            \"autoconfigure\": false,
            \"description\": \"ContainerInterface is the interface implemented by service container classes.\",
            \"arguments\": [],
            \"file\": null,
            \"tags\": []
        }
    },
    \"aliases\": {
        \"alias_1\": {
            \"service\": \"service_1\",
            \"public\": true
        }
    },
    \"services\": []
}
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_arguments.json");
    }
}
