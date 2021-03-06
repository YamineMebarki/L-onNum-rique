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

/* vendor/symfony/debug-bundle/composer.json */
class __TwigTemplate_d960da4e4723d149a047d4b12396c099ed6edf632a52e0ab6ca7fbe8e6ed1f32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/debug-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DebugBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/twig-bridge\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"^4.1.1\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/web-profiler-bundle\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.2\",
        \"symfony/dependency-injection\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/config\": \"For service container configuration\",
        \"symfony/dependency-injection\": \"For using as a service from the container\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\DebugBundle\\\\\": \"\" },
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
        return "vendor/symfony/debug-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/debug-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DebugBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/twig-bridge\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"^4.1.1\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/web-profiler-bundle\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<4.2\",
        \"symfony/dependency-injection\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/config\": \"For service container configuration\",
        \"symfony/dependency-injection\": \"For using as a service from the container\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\DebugBundle\\\\\": \"\" },
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
", "vendor/symfony/debug-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/composer.json");
    }
}
