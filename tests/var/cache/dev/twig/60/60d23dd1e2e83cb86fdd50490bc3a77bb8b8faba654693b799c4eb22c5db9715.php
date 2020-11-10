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

/* vendor/symfony/monolog-bundle/composer.json */
class __TwigTemplate_d5b9e7048e697af38ca1015a6047219c7e0bb25ad13c37b61a393441d28551c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/monolog-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony MonologBundle\",
    \"keywords\": [\"log\", \"logging\"],
    \"homepage\": \"http://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.6\",
        \"symfony/monolog-bridge\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4.10|^4.0.10\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"monolog/monolog\": \"~1.22\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MonologBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/monolog-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony MonologBundle\",
    \"keywords\": [\"log\", \"logging\"],
    \"homepage\": \"http://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.6\",
        \"symfony/monolog-bridge\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4.10|^4.0.10\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"monolog/monolog\": \"~1.22\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MonologBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.x-dev\"
        }
    }
}
", "vendor/symfony/monolog-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/composer.json");
    }
}
