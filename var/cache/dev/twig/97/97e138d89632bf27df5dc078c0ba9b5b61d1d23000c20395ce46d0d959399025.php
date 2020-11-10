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

/* vendor/symfony/security-http/composer.json */
class __TwigTemplate_46388fb5de2166d9f764c944e3018b6cd24f50336b28d2f6b98217df9486a172 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/security-http\",
    \"type\": \"library\",
    \"description\": \"Symfony Security Component - HTTP Integration\",
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
        \"symfony/security-core\": \"^4.3\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/property-access\": \"~3.4|~4.0\"
    },
    \"require-dev\": {
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/security-csrf\": \"^3.4.11|^4.0.11\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/security-csrf\": \"<3.4.11|~4.0,<4.0.11\"
    },
    \"suggest\": {
        \"symfony/security-csrf\": \"For using tokens to protect authentication/logout attempts\",
        \"symfony/routing\": \"For using the HttpUtils class to create sub-requests, redirect the user, and match URLs\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Security\\\\Http\\\\\": \"\" },
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
        return "vendor/symfony/security-http/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/security-http\",
    \"type\": \"library\",
    \"description\": \"Symfony Security Component - HTTP Integration\",
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
        \"symfony/security-core\": \"^4.3\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/property-access\": \"~3.4|~4.0\"
    },
    \"require-dev\": {
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/security-csrf\": \"^3.4.11|^4.0.11\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/security-csrf\": \"<3.4.11|~4.0,<4.0.11\"
    },
    \"suggest\": {
        \"symfony/security-csrf\": \"For using tokens to protect authentication/logout attempts\",
        \"symfony/routing\": \"For using the HttpUtils class to create sub-requests, redirect the user, and match URLs\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Security\\\\Http\\\\\": \"\" },
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
", "vendor/symfony/security-http/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/composer.json");
    }
}
