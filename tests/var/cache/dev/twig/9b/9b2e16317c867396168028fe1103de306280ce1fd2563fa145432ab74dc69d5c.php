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

/* vendor/doctrine/orm/composer.json */
class __TwigTemplate_716aae3b1b7e59f4b1dc8515e2624ceae833ac20d4d0331f37fad06740cb6ec8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/orm\",
    \"type\": \"library\",
    \"description\": \"Object-Relational-Mapper for PHP\",
    \"keywords\": [\"orm\", \"database\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"config\": {
        \"sort-packages\": true
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/annotations\": \"~1.5\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"^1.4\",
        \"doctrine/common\": \"^2.7.1\",
        \"doctrine/dbal\": \"^2.6\",
        \"doctrine/instantiator\": \"~1.1\",
        \"symfony/console\": \"~3.0|~4.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/yaml\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Performance\\\\\": \"tests/Doctrine/Performance\"
        }
    },
    \"bin\": [\"bin/doctrine\"],
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.6.x-dev\"
        }
    },
    \"archive\": {
        \"exclude\": [\"!vendor\", \"tests\", \"*phpunit.xml\", \".travis.yml\", \"build.xml\", \"build.properties\", \"composer.phar\", \"vendor/satooshi\", \"lib/vendor\", \"*.swp\"]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/orm\",
    \"type\": \"library\",
    \"description\": \"Object-Relational-Mapper for PHP\",
    \"keywords\": [\"orm\", \"database\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"config\": {
        \"sort-packages\": true
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/annotations\": \"~1.5\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"^1.4\",
        \"doctrine/common\": \"^2.7.1\",
        \"doctrine/dbal\": \"^2.6\",
        \"doctrine/instantiator\": \"~1.1\",
        \"symfony/console\": \"~3.0|~4.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/yaml\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Performance\\\\\": \"tests/Doctrine/Performance\"
        }
    },
    \"bin\": [\"bin/doctrine\"],
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.6.x-dev\"
        }
    },
    \"archive\": {
        \"exclude\": [\"!vendor\", \"tests\", \"*phpunit.xml\", \".travis.yml\", \"build.xml\", \"build.properties\", \"composer.phar\", \"vendor/satooshi\", \"lib/vendor\", \"*.swp\"]
    }
}
", "vendor/doctrine/orm/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/composer.json");
    }
}
