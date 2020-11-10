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

/* vendor/phpdocumentor/reflection-common/composer.json */
class __TwigTemplate_c03526f99534e62f5f4907c7b56114af7c75f69f8fd0462157cda395a0a9a5d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/composer.json"));

        // line 1
        echo "{
    \"name\": \"phpdocumentor/reflection-common\",
    \"keywords\": [\"phpdoc\", \"phpDocumentor\", \"reflection\", \"static analysis\", \"FQSEN\"],
    \"homepage\": \"http://www.phpdoc.org\",
    \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Jaap van Otterdijk\",
            \"email\": \"opensource@ijaap.nl\"
        }
    ],
    \"require\": {
        \"php\": \">=7.1\"
    },
    \"autoload\" : {
      \"psr-4\" : {
        \"phpDocumentor\\\\Reflection\\\\\": \"src/\"
      }
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"~6\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"phpdocumentor/reflection-common\",
    \"keywords\": [\"phpdoc\", \"phpDocumentor\", \"reflection\", \"static analysis\", \"FQSEN\"],
    \"homepage\": \"http://www.phpdoc.org\",
    \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Jaap van Otterdijk\",
            \"email\": \"opensource@ijaap.nl\"
        }
    ],
    \"require\": {
        \"php\": \">=7.1\"
    },
    \"autoload\" : {
      \"psr-4\" : {
        \"phpDocumentor\\\\Reflection\\\\\": \"src/\"
      }
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"~6\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.x-dev\"
        }
    }
}
", "vendor/phpdocumentor/reflection-common/composer.json", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/composer.json");
    }
}
