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

/* vendor/symfony/flex/composer.json */
class __TwigTemplate_10349fa601f37d07c993400bcc0534fcc2d66b181d205f7af51e12b858d51942 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/flex\",
    \"type\": \"composer-plugin\",
    \"description\": \"Composer plugin for Symfony\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien.potencier@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"composer-plugin-api\": \"^1.0\"
    },
    \"require-dev\": {
        \"composer/composer\": \"^1.0.2\",
        \"symfony/dotenv\": \"^3.4|^4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\",
        \"symfony/process\": \"^2.7|^3.0|^4.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Symfony\\\\Flex\\\\\": \"src\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.4-dev\"
        },
        \"class\": \"Symfony\\\\Flex\\\\Flex\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/flex\",
    \"type\": \"composer-plugin\",
    \"description\": \"Composer plugin for Symfony\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien.potencier@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"composer-plugin-api\": \"^1.0\"
    },
    \"require-dev\": {
        \"composer/composer\": \"^1.0.2\",
        \"symfony/dotenv\": \"^3.4|^4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\",
        \"symfony/process\": \"^2.7|^3.0|^4.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Symfony\\\\Flex\\\\\": \"src\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.4-dev\"
        },
        \"class\": \"Symfony\\\\Flex\\\\Flex\"
    }
}
", "vendor/symfony/flex/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/flex/composer.json");
    }
}
