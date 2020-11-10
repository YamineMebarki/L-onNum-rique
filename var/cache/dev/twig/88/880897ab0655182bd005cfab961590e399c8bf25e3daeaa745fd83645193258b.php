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

/* vendor/doctrine/dbal/composer.json */
class __TwigTemplate_a38bedf40fe7b287cab227a6b4cf9aa9d24f1fbae95787fc613e70b8c8a491bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/dbal\",
    \"type\": \"library\",
    \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
    \"keywords\": [
        \"php\",
        \"mysql\",
        \"pgsql\",
        \"dbal\",
        \"database\",
        \"abstraction\",
        \"persistence\",
        \"queryobject\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
        \"phpstan/phpstan\": \"^0.10.1\",
        \"phpunit/phpunit\": \"^7.4\",
        \"symfony/console\": \"^2.0.5|^3.0|^4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.5|^4.0.5\"
    },
    \"suggest\": {
        \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
    },
    \"bin\": [\"bin/doctrine-dbal\"],
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.9.x-dev\",
            \"dev-develop\": \"3.0.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/dbal\",
    \"type\": \"library\",
    \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
    \"keywords\": [
        \"php\",
        \"mysql\",
        \"pgsql\",
        \"dbal\",
        \"database\",
        \"abstraction\",
        \"persistence\",
        \"queryobject\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
        \"phpstan/phpstan\": \"^0.10.1\",
        \"phpunit/phpunit\": \"^7.4\",
        \"symfony/console\": \"^2.0.5|^3.0|^4.0\",
        \"symfony/phpunit-bridge\": \"^3.4.5|^4.0.5\"
    },
    \"suggest\": {
        \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
    },
    \"bin\": [\"bin/doctrine-dbal\"],
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.9.x-dev\",
            \"dev-develop\": \"3.0.x-dev\"
        }
    }
}
", "vendor/doctrine/dbal/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/composer.json");
    }
}
