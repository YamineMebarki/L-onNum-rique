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

/* vendor/symfony/routing/composer.json */
class __TwigTemplate_4e1d3fd791afd4d0ab844ea2bec79f7c3825315e19df86ba144906229a5f083f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/routing\",
    \"type\": \"library\",
    \"description\": \"Symfony Routing Component\",
    \"keywords\": [\"routing\", \"router\", \"URL\", \"URI\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~4.2\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.2\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.2\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/http-foundation\": \"For using a Symfony Request object\",
        \"symfony/config\": \"For using the all-in-one router or any loader\",
        \"symfony/yaml\": \"For using the YAML loader\",
        \"symfony/expression-language\": \"For using expression matching\",
        \"doctrine/annotations\": \"For using the annotation loader\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Routing\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.3-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/routing\",
    \"type\": \"library\",
    \"description\": \"Symfony Routing Component\",
    \"keywords\": [\"routing\", \"router\", \"URL\", \"URI\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~4.2\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.2\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.2\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/http-foundation\": \"For using a Symfony Request object\",
        \"symfony/config\": \"For using the all-in-one router or any loader\",
        \"symfony/yaml\": \"For using the YAML loader\",
        \"symfony/expression-language\": \"For using expression matching\",
        \"doctrine/annotations\": \"For using the annotation loader\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Routing\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.3-dev\"
        }
    }
}
", "vendor/symfony/routing/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/routing/composer.json");
    }
}
