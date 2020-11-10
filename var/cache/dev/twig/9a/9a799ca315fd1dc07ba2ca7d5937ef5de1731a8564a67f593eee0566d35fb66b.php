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

/* vendor/doctrine/lexer/composer.json */
class __TwigTemplate_7f967d124612544bbab5ab5f0ffc47f9295e0f41ecbb6f11d07e497bf9c30cfb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/lexer/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/lexer/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/lexer\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
    \"keywords\": [
        \"php\",
        \"parser\",
        \"lexer\",
        \"annotations\",
        \"docblock\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan\": \"^0.11.8\",
        \"phpunit/phpunit\": \"^8.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.1.x-dev\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/lexer/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/lexer\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
    \"keywords\": [
        \"php\",
        \"parser\",
        \"lexer\",
        \"annotations\",
        \"docblock\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan\": \"^0.11.8\",
        \"phpunit/phpunit\": \"^8.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.1.x-dev\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    }
}
", "vendor/doctrine/lexer/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/lexer/composer.json");
    }
}
