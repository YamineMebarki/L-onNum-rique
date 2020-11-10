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

/* vendor/symfony/monolog-bridge/composer.json */
class __TwigTemplate_d4dc443908424860f70f1be2a99421266356bc8ca34c708623738111677f8c3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/monolog-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Monolog Bridge\",
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
        \"monolog/monolog\": \"~1.19\",
        \"symfony/service-contracts\": \"^1.1\",
        \"symfony/http-kernel\": \"^4.3\"
    },
    \"require-dev\": {
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/security-core\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/console\": \"<3.4\",
        \"symfony/http-foundation\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/http-kernel\": \"For using the debugging handlers together with the response life cycle of the HTTP kernel.\",
        \"symfony/console\": \"For the possibility to show log messages in console commands depending on verbosity settings.\",
        \"symfony/var-dumper\": \"For using the debugging handlers like the console handler or the log server handler.\"
     },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Monolog\\\\\": \"\" },
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
        return "vendor/symfony/monolog-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/monolog-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Monolog Bridge\",
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
        \"monolog/monolog\": \"~1.19\",
        \"symfony/service-contracts\": \"^1.1\",
        \"symfony/http-kernel\": \"^4.3\"
    },
    \"require-dev\": {
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/security-core\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/console\": \"<3.4\",
        \"symfony/http-foundation\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/http-kernel\": \"For using the debugging handlers together with the response life cycle of the HTTP kernel.\",
        \"symfony/console\": \"For the possibility to show log messages in console commands depending on verbosity settings.\",
        \"symfony/var-dumper\": \"For using the debugging handlers like the console handler or the log server handler.\"
     },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Monolog\\\\\": \"\" },
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
", "vendor/symfony/monolog-bridge/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/composer.json");
    }
}
