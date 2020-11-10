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

/* vendor/phpdocumentor/reflection-docblock/composer.json */
class __TwigTemplate_74fc120b7cb026bbf86df6ccda68aad45a8da5956604be17aa8c1969a7fc6040 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/composer.json"));

        // line 1
        echo "{
    \"name\":    \"phpdocumentor/reflection-docblock\",
    \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
    \"type\":    \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Mike van Riel\",
            \"email\": \"me@mikevanriel.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"phpdocumentor/reflection-common\": \"^1.0.0 || ^2.0.0\",
        \"phpdocumentor/type-resolver\": \"~0.4 || ^1.0.0\",
        \"webmozart/assert\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-4\": {\"phpDocumentor\\\\Reflection\\\\\": [\"src/\"]}
    },
    \"autoload-dev\": {
        \"psr-4\": {\"phpDocumentor\\\\Reflection\\\\\": [\"tests/unit\"]}
    },
    \"require-dev\": {
        \"mockery/mockery\": \"^1.0\",
        \"phpunit/phpunit\": \"^6.4\",
        \"doctrine/instantiator\": \"^1.0.5\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\":    \"phpdocumentor/reflection-docblock\",
    \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
    \"type\":    \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Mike van Riel\",
            \"email\": \"me@mikevanriel.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"phpdocumentor/reflection-common\": \"^1.0.0 || ^2.0.0\",
        \"phpdocumentor/type-resolver\": \"~0.4 || ^1.0.0\",
        \"webmozart/assert\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-4\": {\"phpDocumentor\\\\Reflection\\\\\": [\"src/\"]}
    },
    \"autoload-dev\": {
        \"psr-4\": {\"phpDocumentor\\\\Reflection\\\\\": [\"tests/unit\"]}
    },
    \"require-dev\": {
        \"mockery/mockery\": \"^1.0\",
        \"phpunit/phpunit\": \"^6.4\",
        \"doctrine/instantiator\": \"^1.0.5\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.x-dev\"
        }
    }
}
", "vendor/phpdocumentor/reflection-docblock/composer.json", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/composer.json");
    }
}
