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

/* vendor/symfony/phpunit-bridge/composer.json */
class __TwigTemplate_97eef6662af64dcb326b177c7935cc8736da881f166f55e34459270835b5bb92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/phpunit-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony PHPUnit Bridge\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.5.9 EVEN ON LATEST SYMFONY VERSIONS TO ALLOW USING\",
        \"php\": \"THIS BRIDGE WHEN TESTING LOWEST SYMFONY VERSIONS.\",
        \"php\": \">=5.5.9\"
    },
    \"suggest\": {
        \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
    },
    \"autoload\": {
        \"files\": [ \"bootstrap.php\" ],
        \"psr-4\": { \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"bin/simple-phpunit\"
    ],
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.3-dev\"
        },
        \"thanks\": {
            \"name\": \"phpunit/phpunit\",
            \"url\": \"https://github.com/sebastianbergmann/phpunit\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/phpunit-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony PHPUnit Bridge\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.5.9 EVEN ON LATEST SYMFONY VERSIONS TO ALLOW USING\",
        \"php\": \"THIS BRIDGE WHEN TESTING LOWEST SYMFONY VERSIONS.\",
        \"php\": \">=5.5.9\"
    },
    \"suggest\": {
        \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
    },
    \"autoload\": {
        \"files\": [ \"bootstrap.php\" ],
        \"psr-4\": { \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"bin/simple-phpunit\"
    ],
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.3-dev\"
        },
        \"thanks\": {
            \"name\": \"phpunit/phpunit\",
            \"url\": \"https://github.com/sebastianbergmann/phpunit\"
        }
    }
}
", "vendor/symfony/phpunit-bridge/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/composer.json");
    }
}
