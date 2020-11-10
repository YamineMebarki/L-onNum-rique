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

/* vendor/doctrine/doctrine-migrations-bundle/composer.json */
class __TwigTemplate_e4a06f1783f846eec6e421616c4a6ae02389b43b09b078653f77d7a750dd8c95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/doctrine-migrations-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineMigrationsBundle\",
    \"keywords\": [\"DBAL\", \"Migrations\", \"Schema\"],
    \"homepage\": \"https://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"~3.4|~4.0\",
        \"doctrine/doctrine-bundle\": \"~1.0\",
        \"doctrine/migrations\": \"^2.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7|^6.4|^7.0\",
        \"mikey179/vfsStream\": \"^1.6\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpstan/phpstan\": \"^0.9.2\",
        \"phpstan/phpstan-strict-rules\": \"^0.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\Tests\\\\\": \"\" }
    },
    \"extra\": {
        \"branch-alias\": {
          \"dev-master\": \"2.0.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/doctrine-migrations-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineMigrationsBundle\",
    \"keywords\": [\"DBAL\", \"Migrations\", \"Schema\"],
    \"homepage\": \"https://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"~3.4|~4.0\",
        \"doctrine/doctrine-bundle\": \"~1.0\",
        \"doctrine/migrations\": \"^2.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7|^6.4|^7.0\",
        \"mikey179/vfsStream\": \"^1.6\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpstan/phpstan\": \"^0.9.2\",
        \"phpstan/phpstan-strict-rules\": \"^0.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\Tests\\\\\": \"\" }
    },
    \"extra\": {
        \"branch-alias\": {
          \"dev-master\": \"2.0.x-dev\"
        }
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/composer.json");
    }
}
