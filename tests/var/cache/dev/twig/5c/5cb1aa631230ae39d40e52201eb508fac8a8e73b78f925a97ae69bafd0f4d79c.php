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

/* vendor/symfony/cache/composer.json */
class __TwigTemplate_fbc636a070722edc90d27dcbd169dd4836f35028d9e0d158b7f4e59249ede090 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/cache\",
    \"type\": \"library\",
    \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
    \"keywords\": [\"caching\", \"psr6\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"provide\": {
        \"psr/cache-implementation\": \"1.0\",
        \"psr/simple-cache-implementation\": \"1.0\",
        \"symfony/cache-implementation\": \"1.0\"
    },
    \"require\": {
        \"php\": \"^7.1.3\",
        \"psr/cache\": \"~1.0\",
        \"psr/log\": \"~1.0\",
        \"symfony/cache-contracts\": \"^1.1\",
        \"symfony/service-contracts\": \"^1.1\",
        \"symfony/var-exporter\": \"^4.2\"
    },
    \"require-dev\": {
        \"cache/integration-tests\": \"dev-master\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/dbal\": \"~2.5\",
        \"predis/predis\": \"~1.1\",
        \"psr/simple-cache\": \"^1.0\",
        \"symfony/config\": \"~4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.1\",
        \"symfony/var-dumper\": \"^4.1.1\"
    },
    \"conflict\": {
        \"doctrine/dbal\": \"<2.5\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/var-dumper\": \"<3.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Cache\\\\\": \"\" },
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
        return "vendor/symfony/cache/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/cache\",
    \"type\": \"library\",
    \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
    \"keywords\": [\"caching\", \"psr6\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"provide\": {
        \"psr/cache-implementation\": \"1.0\",
        \"psr/simple-cache-implementation\": \"1.0\",
        \"symfony/cache-implementation\": \"1.0\"
    },
    \"require\": {
        \"php\": \"^7.1.3\",
        \"psr/cache\": \"~1.0\",
        \"psr/log\": \"~1.0\",
        \"symfony/cache-contracts\": \"^1.1\",
        \"symfony/service-contracts\": \"^1.1\",
        \"symfony/var-exporter\": \"^4.2\"
    },
    \"require-dev\": {
        \"cache/integration-tests\": \"dev-master\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/dbal\": \"~2.5\",
        \"predis/predis\": \"~1.1\",
        \"psr/simple-cache\": \"^1.0\",
        \"symfony/config\": \"~4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.1\",
        \"symfony/var-dumper\": \"^4.1.1\"
    },
    \"conflict\": {
        \"doctrine/dbal\": \"<2.5\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/var-dumper\": \"<3.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Cache\\\\\": \"\" },
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
", "vendor/symfony/cache/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/cache/composer.json");
    }
}
