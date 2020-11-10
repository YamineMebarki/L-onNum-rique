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

/* vendor/doctrine/migrations/composer.json */
class __TwigTemplate_a4657762340a6fc93dc0d47376a993fc90fee5876932c1dffd182121fccdcaec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/migrations\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
    \"keywords\": [\"php\", \"database\", \"migrations\", \"dbal\"],
    \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Michael Simonson\", \"email\": \"contact@mikesimonson.com\" }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/dbal\": \"^2.9\",
        \"ocramius/package-versions\": \"^1.3\",
        \"ocramius/proxy-manager\": \"^2.0.2\",
        \"symfony/console\": \"^3.4||^4.0\",
        \"symfony/stopwatch\": \"^3.4||^4.0\"
    },
    \"require-dev\": {
        \"ext-pdo_sqlite\": \"*\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"doctrine/orm\": \"^2.6\",
        \"jdorn/sql-formatter\": \"^1.1\",
        \"mikey179/vfsStream\": \"^1.6\",
        \"phpstan/phpstan\": \"^0.10\",
        \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
        \"phpstan/phpstan-phpunit\": \"^0.10\",
        \"phpstan/phpstan-strict-rules\": \"^0.10\",
        \"phpunit/phpunit\": \"^7.0\",
        \"symfony/process\": \"^3.4||^4.0\",
        \"symfony/yaml\": \"^3.4||^4.0\"
    },
    \"suggest\": {
        \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
        \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Migrations\\\\Tests\\\\\": \"tests/Doctrine/Migrations/Tests\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.1.x-dev\"
        }
    },
    \"bin\": [
        \"bin/doctrine-migrations\"
    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/migrations\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
    \"keywords\": [\"php\", \"database\", \"migrations\", \"dbal\"],
    \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Michael Simonson\", \"email\": \"contact@mikesimonson.com\" }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/dbal\": \"^2.9\",
        \"ocramius/package-versions\": \"^1.3\",
        \"ocramius/proxy-manager\": \"^2.0.2\",
        \"symfony/console\": \"^3.4||^4.0\",
        \"symfony/stopwatch\": \"^3.4||^4.0\"
    },
    \"require-dev\": {
        \"ext-pdo_sqlite\": \"*\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"doctrine/orm\": \"^2.6\",
        \"jdorn/sql-formatter\": \"^1.1\",
        \"mikey179/vfsStream\": \"^1.6\",
        \"phpstan/phpstan\": \"^0.10\",
        \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
        \"phpstan/phpstan-phpunit\": \"^0.10\",
        \"phpstan/phpstan-strict-rules\": \"^0.10\",
        \"phpunit/phpunit\": \"^7.0\",
        \"symfony/process\": \"^3.4||^4.0\",
        \"symfony/yaml\": \"^3.4||^4.0\"
    },
    \"suggest\": {
        \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
        \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Migrations\\\\Tests\\\\\": \"tests/Doctrine/Migrations/Tests\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.1.x-dev\"
        }
    },
    \"bin\": [
        \"bin/doctrine-migrations\"
    ]
}
", "vendor/doctrine/migrations/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/composer.json");
    }
}
