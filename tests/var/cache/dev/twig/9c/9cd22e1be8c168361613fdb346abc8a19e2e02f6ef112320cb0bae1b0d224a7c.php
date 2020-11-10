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

/* vendor/phpdocumentor/type-resolver/composer.json */
class __TwigTemplate_102c046b9c7655d192d3ec20c98353888cab2cbf818881127d5de1eeb27526d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/composer.json"));

        // line 1
        echo "{
    \"name\": \"phpdocumentor/type-resolver\",
    \"description\": \"A PSR-5 based resolver of Class names, Types and Structural Element Names\",
    \"type\": \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
          \"name\": \"Mike van Riel\",
          \"email\": \"me@mikevanriel.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"phpdocumentor/reflection-common\": \"^2.0\"
    },
    \"require-dev\": {
        \"mockery/mockery\": \"~1\",
        \"ext-tokenizer\": \"^7.1\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"phpDocumentor\\\\Reflection\\\\\": \"src\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"phpDocumentor\\\\Reflection\\\\\": \"tests/unit\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"phpdocumentor/type-resolver\",
    \"description\": \"A PSR-5 based resolver of Class names, Types and Structural Element Names\",
    \"type\": \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
          \"name\": \"Mike van Riel\",
          \"email\": \"me@mikevanriel.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"phpdocumentor/reflection-common\": \"^2.0\"
    },
    \"require-dev\": {
        \"mockery/mockery\": \"~1\",
        \"ext-tokenizer\": \"^7.1\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"phpDocumentor\\\\Reflection\\\\\": \"src\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"phpDocumentor\\\\Reflection\\\\\": \"tests/unit\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.x-dev\"
        }
    }
}
", "vendor/phpdocumentor/type-resolver/composer.json", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/composer.json");
    }
}
