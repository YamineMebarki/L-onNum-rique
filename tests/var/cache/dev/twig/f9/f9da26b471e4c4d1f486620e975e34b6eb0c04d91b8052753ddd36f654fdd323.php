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

/* vendor/symfony/property-info/composer.json */
class __TwigTemplate_9730122620278579848ed219bf9be4315929f244b6a6d55dfac57f54c8c0deda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/property-info\",
    \"type\": \"library\",
    \"description\": \"Symfony Property Info Component\",
    \"keywords\": [
        \"property\",
        \"type\",
        \"PHPDoc\",
        \"symfony\",
        \"validator\",
        \"doctrine\"
    ],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Kévin Dunglas\",
            \"email\": \"dunglas@gmail.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/inflector\": \"~3.4|~4.0\"
    },
    \"require-dev\": {
        \"symfony/serializer\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"doctrine/annotations\": \"~1.7\"
    },
    \"conflict\": {
        \"phpdocumentor/reflection-docblock\": \"<3.0||>=3.2.0,<3.2.2\",
        \"phpdocumentor/type-resolver\": \"<0.3.0\",
        \"symfony/dependency-injection\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"To cache results\",
        \"symfony/doctrine-bridge\": \"To use Doctrine metadata\",
        \"phpdocumentor/reflection-docblock\": \"To use the PHPDoc\",
        \"symfony/serializer\": \"To use Serializer metadata\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\PropertyInfo\\\\\": \"\" },
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
        return "vendor/symfony/property-info/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/property-info\",
    \"type\": \"library\",
    \"description\": \"Symfony Property Info Component\",
    \"keywords\": [
        \"property\",
        \"type\",
        \"PHPDoc\",
        \"symfony\",
        \"validator\",
        \"doctrine\"
    ],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Kévin Dunglas\",
            \"email\": \"dunglas@gmail.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/inflector\": \"~3.4|~4.0\"
    },
    \"require-dev\": {
        \"symfony/serializer\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"doctrine/annotations\": \"~1.7\"
    },
    \"conflict\": {
        \"phpdocumentor/reflection-docblock\": \"<3.0||>=3.2.0,<3.2.2\",
        \"phpdocumentor/type-resolver\": \"<0.3.0\",
        \"symfony/dependency-injection\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"To cache results\",
        \"symfony/doctrine-bridge\": \"To use Doctrine metadata\",
        \"phpdocumentor/reflection-docblock\": \"To use the PHPDoc\",
        \"symfony/serializer\": \"To use Serializer metadata\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\PropertyInfo\\\\\": \"\" },
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
", "vendor/symfony/property-info/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/composer.json");
    }
}
