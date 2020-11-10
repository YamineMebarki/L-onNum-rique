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

/* vendor/psr/link/composer.json */
class __TwigTemplate_e74674a63963f8e581633a580a7ea5e3bfa3ec36e6f0b84c9a8347b59dda9fb6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/link/composer.json"));

        // line 1
        echo "{
    \"name\": \"psr/link\",
    \"description\": \"Common interfaces for HTTP links\",
    \"keywords\": [\"psr\", \"psr-13\", \"http\", \"http-link\", \"link\", \"rest\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\Link\\\\\": \"src/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/link/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"psr/link\",
    \"description\": \"Common interfaces for HTTP links\",
    \"keywords\": [\"psr\", \"psr-13\", \"http\", \"http-link\", \"link\", \"rest\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\Link\\\\\": \"src/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
", "vendor/psr/link/composer.json", "/var/www/public/DevLaon/templates/vendor/psr/link/composer.json");
    }
}
