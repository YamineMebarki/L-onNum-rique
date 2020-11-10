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

/* vendor/symfony/doctrine-bridge/composer.json */
class __TwigTemplate_904dfd3d56183dfe48c281d8c6cfc9d9cd5ecb0fd948e60c5faf311bba1f2a24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/doctrine-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Doctrine Bridge\",
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
        \"doctrine/event-manager\": \"~1.0\",
        \"doctrine/persistence\": \"~1.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/service-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/config\": \"^4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/form\": \"~4.3\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/messenger\": \"~4.3\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
        \"symfony/security-core\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"symfony/translation\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"~1.0\",
        \"doctrine/data-fixtures\": \"1.0.*\",
        \"doctrine/dbal\": \"~2.4\",
        \"doctrine/orm\": \"^2.6.3\",
        \"doctrine/reflection\": \"~1.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/form\": \"<4.3\",
        \"symfony/messenger\": \"<4.3\"
    },
    \"suggest\": {
        \"symfony/form\": \"\",
        \"symfony/validator\": \"\",
        \"symfony/property-info\": \"\",
        \"doctrine/data-fixtures\": \"\",
        \"doctrine/dbal\": \"\",
        \"doctrine/orm\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\" },
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
        return "vendor/symfony/doctrine-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/doctrine-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Doctrine Bridge\",
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
        \"doctrine/event-manager\": \"~1.0\",
        \"doctrine/persistence\": \"~1.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/service-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/config\": \"^4.2\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/form\": \"~4.3\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/messenger\": \"~4.3\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
        \"symfony/security-core\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"symfony/translation\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"~1.0\",
        \"doctrine/data-fixtures\": \"1.0.*\",
        \"doctrine/dbal\": \"~2.4\",
        \"doctrine/orm\": \"^2.6.3\",
        \"doctrine/reflection\": \"~1.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/form\": \"<4.3\",
        \"symfony/messenger\": \"<4.3\"
    },
    \"suggest\": {
        \"symfony/form\": \"\",
        \"symfony/validator\": \"\",
        \"symfony/property-info\": \"\",
        \"doctrine/data-fixtures\": \"\",
        \"doctrine/dbal\": \"\",
        \"doctrine/orm\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\" },
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
", "vendor/symfony/doctrine-bridge/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/composer.json");
    }
}
