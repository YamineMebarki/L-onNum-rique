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

/* vendor/fig/link-util/composer.json */
class __TwigTemplate_a1a364141f221355c0f791511edfaa87453546961e84ee53e2bb05ec9d8e91af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/composer.json"));

        // line 1
        echo "{
    \"name\": \"fig/link-util\",
    \"description\": \"Common utility implementations for HTTP links\",
    \"keywords\": [\"psr\", \"psr-13\", \"http\", \"http-link\", \"link\", \"rest\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.5.0\",
        \"psr/link\": \"~1.0@dev\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.1\",
        \"squizlabs/php_codesniffer\": \"^2.3.1\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Fig\\\\Link\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Fig\\\\Link\\\\Test\\\\\": \"test/\"
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
        return "vendor/fig/link-util/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"fig/link-util\",
    \"description\": \"Common utility implementations for HTTP links\",
    \"keywords\": [\"psr\", \"psr-13\", \"http\", \"http-link\", \"link\", \"rest\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.5.0\",
        \"psr/link\": \"~1.0@dev\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.1\",
        \"squizlabs/php_codesniffer\": \"^2.3.1\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Fig\\\\Link\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Fig\\\\Link\\\\Test\\\\\": \"test/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
", "vendor/fig/link-util/composer.json", "/var/www/public/DevLaon/templates/vendor/fig/link-util/composer.json");
    }
}
