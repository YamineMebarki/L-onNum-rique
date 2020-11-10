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

/* vendor/doctrine/doctrine-fixtures-bundle/composer.json */
class __TwigTemplate_dd97ea9c1a397e1db0daf4488780aa1174b7bed67cc8bef8ab04ffa2e605265f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/doctrine-fixtures-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineFixturesBundle\",
    \"keywords\": [\"Persistence\", \"Fixture\"],
    \"homepage\": \"http://www.doctrine-project.org\",
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
        \"doctrine/data-fixtures\": \"^1.3\",
        \"doctrine/doctrine-bundle\": \"^1.6\",
        \"doctrine/orm\": \"^2.6.0\",
        \"symfony/doctrine-bridge\": \"~3.4|^4.1\",
        \"symfony/framework-bundle\": \"^3.4|^4.1\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpunit/phpunit\": \"^7.4\",
        \"symfony/phpunit-bridge\": \"^4.1\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\FixturesBundle\\\\\": \"\" }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/doctrine-fixtures-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineFixturesBundle\",
    \"keywords\": [\"Persistence\", \"Fixture\"],
    \"homepage\": \"http://www.doctrine-project.org\",
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
        \"doctrine/data-fixtures\": \"^1.3\",
        \"doctrine/doctrine-bundle\": \"^1.6\",
        \"doctrine/orm\": \"^2.6.0\",
        \"symfony/doctrine-bridge\": \"~3.4|^4.1\",
        \"symfony/framework-bundle\": \"^3.4|^4.1\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpunit/phpunit\": \"^7.4\",
        \"symfony/phpunit-bridge\": \"^4.1\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\FixturesBundle\\\\\": \"\" }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2.x-dev\"
        }
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/composer.json");
    }
}
