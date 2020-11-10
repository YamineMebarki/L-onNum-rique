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

/* vendor/doctrine/data-fixtures/composer.json */
class __TwigTemplate_e2cc9675d7d0b3c827e573822ef4949df9bd972e65d0b053af6df73452999678 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/data-fixtures\",
    \"type\": \"library\",
    \"description\": \"Data Fixtures for all Doctrine Object Managers\",
    \"keywords\": [\"database\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/common\": \"~2.2\"
    },
    \"require-dev\": {
        \"doctrine/orm\": \"^2.5.4\",
        \"doctrine/dbal\": \"^2.5.4\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"suggest\": {
        \"doctrine/orm\": \"For loading ORM fixtures\",
        \"doctrine/mongodb-odm\": \"For loading MongoDB ODM fixtures\",
        \"doctrine/phpcr-odm\": \"For loading PHPCR ODM fixtures\",
        \"alcaeus/mongo-php-adapter\": \"For using MongoDB ODM with PHP 7\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\DataFixtures\\\\\": \"lib/Doctrine/Common/DataFixtures\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    },
    \"conflict\": {
        \"doctrine/phpcr-odm\": \"<1.3.0\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/data-fixtures\",
    \"type\": \"library\",
    \"description\": \"Data Fixtures for all Doctrine Object Managers\",
    \"keywords\": [\"database\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/common\": \"~2.2\"
    },
    \"require-dev\": {
        \"doctrine/orm\": \"^2.5.4\",
        \"doctrine/dbal\": \"^2.5.4\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"suggest\": {
        \"doctrine/orm\": \"For loading ORM fixtures\",
        \"doctrine/mongodb-odm\": \"For loading MongoDB ODM fixtures\",
        \"doctrine/phpcr-odm\": \"For loading PHPCR ODM fixtures\",
        \"alcaeus/mongo-php-adapter\": \"For using MongoDB ODM with PHP 7\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\DataFixtures\\\\\": \"lib/Doctrine/Common/DataFixtures\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    },
    \"conflict\": {
        \"doctrine/phpcr-odm\": \"<1.3.0\"
    }
}
", "vendor/doctrine/data-fixtures/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/composer.json");
    }
}
