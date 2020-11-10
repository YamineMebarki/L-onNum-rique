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

/* vendor/symfony/web-link/composer.json */
class __TwigTemplate_3c144c3cafb5562c3d23afcc04d54c43a31937dde714dbaa1fe8b287e47dce29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/web-link\",
    \"type\": \"library\",
    \"description\": \"Symfony WebLink Component\",
    \"keywords\": [\"link\", \"psr13\", \"http\", \"http2\", \"preload\", \"prefetch\", \"prerender\", \"dns-prefetch\", \"push\", \"performance\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Kévin Dunglas\",
            \"email\": \"dunglas@gmail.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"fig/link-util\": \"^1.0\",
        \"psr/link\": \"^1.0\"
    },
    \"suggest\": {
        \"symfony/http-kernel\": \"\"
    },
    \"require-dev\": {
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"^4.3\"
    },
    \"conflict\": {
        \"symfony/http-kernel\": \"<4.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\WebLink\\\\\": \"\" },
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
        return "vendor/symfony/web-link/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/web-link\",
    \"type\": \"library\",
    \"description\": \"Symfony WebLink Component\",
    \"keywords\": [\"link\", \"psr13\", \"http\", \"http2\", \"preload\", \"prefetch\", \"prerender\", \"dns-prefetch\", \"push\", \"performance\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Kévin Dunglas\",
            \"email\": \"dunglas@gmail.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"fig/link-util\": \"^1.0\",
        \"psr/link\": \"^1.0\"
    },
    \"suggest\": {
        \"symfony/http-kernel\": \"\"
    },
    \"require-dev\": {
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"^4.3\"
    },
    \"conflict\": {
        \"symfony/http-kernel\": \"<4.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\WebLink\\\\\": \"\" },
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
", "vendor/symfony/web-link/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/web-link/composer.json");
    }
}
