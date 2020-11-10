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

/* vendor/symfony/serializer/composer.json */
class __TwigTemplate_c35d88d4272935b262d6e3bde14f5f8b9004a2e39a43f415e995a67b147122fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/serializer\",
    \"type\": \"library\",
    \"description\": \"Symfony Serializer Component\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"^3.4.13|~4.0\",
        \"symfony/validator\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"doctrine/cache\": \"~1.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\"
    },
    \"conflict\": {
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/property-access\": \"<3.4\",
        \"symfony/property-info\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"For using the metadata cache.\",
        \"symfony/property-info\": \"To deserialize relations.\",
        \"symfony/yaml\": \"For using the default YAML mapping loader.\",
        \"symfony/config\": \"For using the XML mapping loader.\",
        \"symfony/property-access\": \"For using the ObjectNormalizer.\",
        \"symfony/http-foundation\": \"For using a MIME type guesser within the DataUriNormalizer.\",
        \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
        \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Serializer\\\\\": \"\" },
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
        return "vendor/symfony/serializer/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/serializer\",
    \"type\": \"library\",
    \"description\": \"Symfony Serializer Component\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"^3.4.13|~4.0\",
        \"symfony/validator\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"doctrine/cache\": \"~1.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\"
    },
    \"conflict\": {
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/property-access\": \"<3.4\",
        \"symfony/property-info\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"For using the metadata cache.\",
        \"symfony/property-info\": \"To deserialize relations.\",
        \"symfony/yaml\": \"For using the default YAML mapping loader.\",
        \"symfony/config\": \"For using the XML mapping loader.\",
        \"symfony/property-access\": \"For using the ObjectNormalizer.\",
        \"symfony/http-foundation\": \"For using a MIME type guesser within the DataUriNormalizer.\",
        \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
        \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Serializer\\\\\": \"\" },
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
", "vendor/symfony/serializer/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/composer.json");
    }
}
