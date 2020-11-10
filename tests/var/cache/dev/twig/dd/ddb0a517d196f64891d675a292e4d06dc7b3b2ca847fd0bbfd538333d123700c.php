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

/* vendor/nikic/php-parser/composer.json */
class __TwigTemplate_9f215b4322e302fcaf3391d480f8490978f9aec9e1f85bca2becd82fcefaeae8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/composer.json"));

        // line 1
        echo "{
    \"name\": \"nikic/php-parser\",
    \"type\": \"library\",
    \"description\": \"A PHP parser written in PHP\",
    \"keywords\": [
        \"php\",
        \"parser\"
    ],
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Nikita Popov\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0\",
        \"ext-tokenizer\": \"*\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\",
        \"ircmaxell/php-yacc\": \"0.0.4\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.2-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"PhpParser\\\\\": \"lib/PhpParser\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PhpParser\\\\\": \"test/PhpParser/\"
        }
    },
    \"bin\": [
        \"bin/php-parse\"
    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"nikic/php-parser\",
    \"type\": \"library\",
    \"description\": \"A PHP parser written in PHP\",
    \"keywords\": [
        \"php\",
        \"parser\"
    ],
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Nikita Popov\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0\",
        \"ext-tokenizer\": \"*\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\",
        \"ircmaxell/php-yacc\": \"0.0.4\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.2-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"PhpParser\\\\\": \"lib/PhpParser\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PhpParser\\\\\": \"test/PhpParser/\"
        }
    },
    \"bin\": [
        \"bin/php-parse\"
    ]
}
", "vendor/nikic/php-parser/composer.json", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/composer.json");
    }
}
