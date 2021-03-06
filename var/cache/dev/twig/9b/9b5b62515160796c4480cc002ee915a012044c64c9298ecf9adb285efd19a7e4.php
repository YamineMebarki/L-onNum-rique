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

/* vendor/symfony/web-profiler-bundle/composer.json */
class __TwigTemplate_4a0387be21e5cb1a9a6d768c38ad7dc8e606f794b92c356fbaf0371dbc477aa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/web-profiler-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony WebProfilerBundle\",
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
        \"symfony/config\": \"^4.2\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~4.2\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"twig/twig\": \"^1.41|^2.10\"
    },
    \"require-dev\": {
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/messenger\": \"<4.2\",
        \"symfony/var-dumper\": \"<3.4\",
        \"symfony/form\": \"<4.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\\": \"\" },
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
        return "vendor/symfony/web-profiler-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/web-profiler-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony WebProfilerBundle\",
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
        \"symfony/config\": \"^4.2\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~4.2\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"twig/twig\": \"^1.41|^2.10\"
    },
    \"require-dev\": {
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/messenger\": \"<4.2\",
        \"symfony/var-dumper\": \"<3.4\",
        \"symfony/form\": \"<4.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\\": \"\" },
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
", "vendor/symfony/web-profiler-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/composer.json");
    }
}
