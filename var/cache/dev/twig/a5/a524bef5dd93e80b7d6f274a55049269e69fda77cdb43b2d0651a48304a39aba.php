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

/* vendor/doctrine/doctrine-bundle/composer.json */
class __TwigTemplate_f56da0f3775805f652c1ee3a654c5daa04b64657006c643725896c3002fb5ad2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/doctrine-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineBundle\",
    \"keywords\": [\"DBAL\", \"ORM\", \"Database\", \"Persistence\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Benjamin Eberlei\",
            \"email\": \"kontakt@beberlei.de\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"^3.4|^4.1\",
        \"symfony/config\": \"^3.4|^4.1\",
        \"symfony/console\": \"^3.4|^4.1\",
        \"symfony/dependency-injection\": \"^3.4|^4.1\",
        \"doctrine/dbal\": \"^2.5.12\",
        \"jdorn/sql-formatter\": \"^1.2.16\",
        \"symfony/doctrine-bridge\": \"^3.4|^4.1\",
        \"doctrine/doctrine-cache-bundle\": \"~1.2\"
    },
    \"require-dev\": {
        \"doctrine/orm\": \"^2.6\",
        \"symfony/cache\": \"^3.4|^4.1\",
        \"symfony/yaml\": \"^3.4|^4.1\",
        \"symfony/validator\": \"^3.4|^4.1\",
        \"symfony/property-info\": \"^3.4|^4.1\",
        \"symfony/phpunit-bridge\": \"^4.2\",
        \"twig/twig\": \"^1.34|^2.4\",
        \"php-coveralls/php-coveralls\": \"^2.1\",
        \"phpunit/phpunit\": \"7.0\",
        \"symfony/web-profiler-bundle\": \"^3.4|^4.1\",
        \"doctrine/coding-standard\": \"^6.0\"
    },
    \"conflict\": {
        \"doctrine/orm\": \"<2.6\",
        \"twig/twig\": \"<1.34|>=2.0,<2.4\"
    },
    \"suggest\": {
        \"symfony/web-profiler-bundle\": \"To use the data collector.\",
        \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"\": \"Tests/DependencyInjection\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.11.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/doctrine-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineBundle\",
    \"keywords\": [\"DBAL\", \"ORM\", \"Database\", \"Persistence\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Benjamin Eberlei\",
            \"email\": \"kontakt@beberlei.de\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"^3.4|^4.1\",
        \"symfony/config\": \"^3.4|^4.1\",
        \"symfony/console\": \"^3.4|^4.1\",
        \"symfony/dependency-injection\": \"^3.4|^4.1\",
        \"doctrine/dbal\": \"^2.5.12\",
        \"jdorn/sql-formatter\": \"^1.2.16\",
        \"symfony/doctrine-bridge\": \"^3.4|^4.1\",
        \"doctrine/doctrine-cache-bundle\": \"~1.2\"
    },
    \"require-dev\": {
        \"doctrine/orm\": \"^2.6\",
        \"symfony/cache\": \"^3.4|^4.1\",
        \"symfony/yaml\": \"^3.4|^4.1\",
        \"symfony/validator\": \"^3.4|^4.1\",
        \"symfony/property-info\": \"^3.4|^4.1\",
        \"symfony/phpunit-bridge\": \"^4.2\",
        \"twig/twig\": \"^1.34|^2.4\",
        \"php-coveralls/php-coveralls\": \"^2.1\",
        \"phpunit/phpunit\": \"7.0\",
        \"symfony/web-profiler-bundle\": \"^3.4|^4.1\",
        \"doctrine/coding-standard\": \"^6.0\"
    },
    \"conflict\": {
        \"doctrine/orm\": \"<2.6\",
        \"twig/twig\": \"<1.34|>=2.0,<2.4\"
    },
    \"suggest\": {
        \"symfony/web-profiler-bundle\": \"To use the data collector.\",
        \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"\": \"Tests/DependencyInjection\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.11.x-dev\"
        }
    }
}
", "vendor/doctrine/doctrine-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/composer.json");
    }
}
