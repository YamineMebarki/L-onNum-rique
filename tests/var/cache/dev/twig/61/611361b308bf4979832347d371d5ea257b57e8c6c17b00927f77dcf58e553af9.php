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

/* vendor/symfony/security-core/composer.json */
class __TwigTemplate_77fcf18cf24b0f26852ca6815353f1578c8995f6ab097357602a2f1b7fe6d1de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/security-core\",
    \"type\": \"library\",
    \"description\": \"Symfony Security Component - Core Library\",
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
        \"symfony/event-dispatcher-contracts\": \"^1.1\",
        \"symfony/service-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"psr/container\": \"^1.0\",
        \"symfony/event-dispatcher\": \"^4.3\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/ldap\": \"~3.4|~4.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/event-dispatcher\": \"<4.3\",
        \"symfony/security-guard\": \"<4.3\"
    },
    \"suggest\": {
        \"psr/container-implementation\": \"To instantiate the Security class\",
        \"symfony/event-dispatcher\": \"\",
        \"symfony/http-foundation\": \"\",
        \"symfony/validator\": \"For using the user password constraint\",
        \"symfony/expression-language\": \"For using the expression voter\",
        \"symfony/ldap\": \"For using LDAP integration\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Security\\\\Core\\\\\": \"\" },
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
        return "vendor/symfony/security-core/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/security-core\",
    \"type\": \"library\",
    \"description\": \"Symfony Security Component - Core Library\",
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
        \"symfony/event-dispatcher-contracts\": \"^1.1\",
        \"symfony/service-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"psr/container\": \"^1.0\",
        \"symfony/event-dispatcher\": \"^4.3\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/ldap\": \"~3.4|~4.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/event-dispatcher\": \"<4.3\",
        \"symfony/security-guard\": \"<4.3\"
    },
    \"suggest\": {
        \"psr/container-implementation\": \"To instantiate the Security class\",
        \"symfony/event-dispatcher\": \"\",
        \"symfony/http-foundation\": \"\",
        \"symfony/validator\": \"For using the user password constraint\",
        \"symfony/expression-language\": \"For using the expression voter\",
        \"symfony/ldap\": \"For using LDAP integration\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Security\\\\Core\\\\\": \"\" },
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
", "vendor/symfony/security-core/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/composer.json");
    }
}
