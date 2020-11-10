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

/* vendor/sensio/framework-extra-bundle/composer.json */
class __TwigTemplate_c19a81eb5d1203197c77fd72ce871f67da66c0d03100f8e7d09f74cc2483d4f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"sensio/framework-extra-bundle\",
    \"description\": \"This bundle provides a way to configure your controllers with annotations\",
    \"keywords\": [\"annotations\",\"controllers\"],
    \"type\": \"symfony-bundle\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        }
    ],
    \"require\": {
        \"php\": \">=7.1.3\",
        \"symfony/config\": \"^4.3|^5.0\",
        \"symfony/framework-bundle\": \"^4.3|^5.0\",
        \"symfony/dependency-injection\": \"^4.3|^5.0\",
        \"symfony/http-kernel\": \"^4.3|^5.0\",
        \"doctrine/annotations\": \"^1.0\"
    },
    \"require-dev\": {
        \"symfony/expression-language\": \"^4.3|^5.0\",
        \"symfony/finder\": \"^4.3|^5.0\",
        \"symfony/psr-http-message-bridge\": \"^1.1\",
        \"symfony/security-bundle\": \"^4.3|^5.0\",
        \"symfony/yaml\": \"^4.3|^5.0\",
        \"symfony/twig-bundle\": \"^4.3|^5.0\",
        \"twig/twig\": \"^1.34|^2.4|^3.0\",
        \"symfony/browser-kit\": \"^4.3|^5.0\",
        \"symfony/phpunit-bridge\": \"^4.3.5|^5.0\",
        \"symfony/dom-crawler\": \"^4.3|^5.0\",
        \"doctrine/doctrine-bundle\": \"^1.11|^2.0\",
        \"doctrine/orm\": \"^2.5\",
        \"symfony/monolog-bundle\": \"^3.2\",
        \"symfony/monolog-bridge\": \"^4.0|^5.0\",
        \"nyholm/psr7\": \"^1.1\"
    },
    \"conflict\": {
        \"doctrine/doctrine-cache-bundle\": \"<1.3.1\"
    },
    \"suggest\": {
        \"symfony/psr-http-message-bridge\": \"To use the PSR-7 converters\",
        \"symfony/expression-language\": \"\",
        \"symfony/security-bundle\": \"\"
    },
    \"minimum-stability\": \"dev\",
    \"autoload\": {
        \"psr-4\": {
            \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\\": \"src/\"
        },
        \"exclude-from-classmap\": [
            \"/tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Tests\\\\\": \"tests/\",
            \"Tests\\\\Fixtures\\\\\": \"tests/Fixtures/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.5.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"sensio/framework-extra-bundle\",
    \"description\": \"This bundle provides a way to configure your controllers with annotations\",
    \"keywords\": [\"annotations\",\"controllers\"],
    \"type\": \"symfony-bundle\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        }
    ],
    \"require\": {
        \"php\": \">=7.1.3\",
        \"symfony/config\": \"^4.3|^5.0\",
        \"symfony/framework-bundle\": \"^4.3|^5.0\",
        \"symfony/dependency-injection\": \"^4.3|^5.0\",
        \"symfony/http-kernel\": \"^4.3|^5.0\",
        \"doctrine/annotations\": \"^1.0\"
    },
    \"require-dev\": {
        \"symfony/expression-language\": \"^4.3|^5.0\",
        \"symfony/finder\": \"^4.3|^5.0\",
        \"symfony/psr-http-message-bridge\": \"^1.1\",
        \"symfony/security-bundle\": \"^4.3|^5.0\",
        \"symfony/yaml\": \"^4.3|^5.0\",
        \"symfony/twig-bundle\": \"^4.3|^5.0\",
        \"twig/twig\": \"^1.34|^2.4|^3.0\",
        \"symfony/browser-kit\": \"^4.3|^5.0\",
        \"symfony/phpunit-bridge\": \"^4.3.5|^5.0\",
        \"symfony/dom-crawler\": \"^4.3|^5.0\",
        \"doctrine/doctrine-bundle\": \"^1.11|^2.0\",
        \"doctrine/orm\": \"^2.5\",
        \"symfony/monolog-bundle\": \"^3.2\",
        \"symfony/monolog-bridge\": \"^4.0|^5.0\",
        \"nyholm/psr7\": \"^1.1\"
    },
    \"conflict\": {
        \"doctrine/doctrine-cache-bundle\": \"<1.3.1\"
    },
    \"suggest\": {
        \"symfony/psr-http-message-bridge\": \"To use the PSR-7 converters\",
        \"symfony/expression-language\": \"\",
        \"symfony/security-bundle\": \"\"
    },
    \"minimum-stability\": \"dev\",
    \"autoload\": {
        \"psr-4\": {
            \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\\": \"src/\"
        },
        \"exclude-from-classmap\": [
            \"/tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Tests\\\\\": \"tests/\",
            \"Tests\\\\Fixtures\\\\\": \"tests/Fixtures/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.5.x-dev\"
        }
    }
}
", "vendor/sensio/framework-extra-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/composer.json");
    }
}
