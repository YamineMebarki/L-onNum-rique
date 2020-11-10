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

/* vendor/symfony/dependency-injection/composer.json */
class __TwigTemplate_21b59c9d6e211d05ce08bbc032eb6162a2e2caaf454e5533ce64d6e8eec1352c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/dependency-injection\",
    \"type\": \"library\",
    \"description\": \"Symfony DependencyInjection Component\",
    \"keywords\": [],
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
        \"php\": \"^7.1.3\",
        \"psr/container\": \"^1.0\",
        \"symfony/service-contracts\": \"^1.1.6\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"^4.3\",
        \"symfony/expression-language\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
        \"symfony/expression-language\": \"For using expressions in service container configuration\",
        \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.3\",
        \"symfony/finder\": \"<3.4\",
        \"symfony/proxy-manager-bridge\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"provide\": {
        \"psr/container-implementation\": \"1.0\",
        \"symfony/service-implementation\": \"1.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\" },
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
        return "vendor/symfony/dependency-injection/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/dependency-injection\",
    \"type\": \"library\",
    \"description\": \"Symfony DependencyInjection Component\",
    \"keywords\": [],
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
        \"php\": \"^7.1.3\",
        \"psr/container\": \"^1.0\",
        \"symfony/service-contracts\": \"^1.1.6\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"^4.3\",
        \"symfony/expression-language\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
        \"symfony/expression-language\": \"For using expressions in service container configuration\",
        \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.3\",
        \"symfony/finder\": \"<3.4\",
        \"symfony/proxy-manager-bridge\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"provide\": {
        \"psr/container-implementation\": \"1.0\",
        \"symfony/service-implementation\": \"1.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\" },
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
", "vendor/symfony/dependency-injection/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/composer.json");
    }
}
