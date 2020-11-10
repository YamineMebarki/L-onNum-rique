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

/* vendor/symfony/security-bundle/composer.json */
class __TwigTemplate_412785a17fa7ff271f8e0dfee712961f2e4810f47c0af6ddc53bf749d5ae21a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/security-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony SecurityBundle\",
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
        \"symfony/config\": \"^4.2\",
        \"symfony/dependency-injection\": \"^4.2\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/security-core\": \"~4.3\",
        \"symfony/security-csrf\": \"~4.2\",
        \"symfony/security-guard\": \"~4.2\",
        \"symfony/security-http\": \"^4.3\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/browser-kit\": \"~4.2\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dom-crawler\": \"~3.4|~4.0\",
        \"symfony/form\": \"~3.4|~4.0\",
        \"symfony/framework-bundle\": \"^4.3.4\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~4.2\",
        \"symfony/twig-bridge\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/validator\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"doctrine/doctrine-bundle\": \"~1.5\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.2\",
        \"symfony/twig-bundle\": \"<4.2\",
        \"symfony/var-dumper\": \"<3.4\",
        \"symfony/framework-bundle\": \"<4.3.4\",
        \"symfony/console\": \"<3.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\SecurityBundle\\\\\": \"\" },
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
        return "vendor/symfony/security-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/security-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony SecurityBundle\",
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
        \"symfony/config\": \"^4.2\",
        \"symfony/dependency-injection\": \"^4.2\",
        \"symfony/http-kernel\": \"^4.3\",
        \"symfony/security-core\": \"~4.3\",
        \"symfony/security-csrf\": \"~4.2\",
        \"symfony/security-guard\": \"~4.2\",
        \"symfony/security-http\": \"^4.3\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/browser-kit\": \"~4.2\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dom-crawler\": \"~3.4|~4.0\",
        \"symfony/form\": \"~3.4|~4.0\",
        \"symfony/framework-bundle\": \"^4.3.4\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~4.2\",
        \"symfony/twig-bridge\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/validator\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"doctrine/doctrine-bundle\": \"~1.5\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.2\",
        \"symfony/twig-bundle\": \"<4.2\",
        \"symfony/var-dumper\": \"<3.4\",
        \"symfony/framework-bundle\": \"<4.3.4\",
        \"symfony/console\": \"<3.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\SecurityBundle\\\\\": \"\" },
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
", "vendor/symfony/security-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/composer.json");
    }
}
