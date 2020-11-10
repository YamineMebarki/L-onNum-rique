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

/* vendor/twig/twig/composer.json */
class __TwigTemplate_175f5dc52ba70108b9d3715d8f3ebabbe38e10f205cce0bc6e38f28e9fb70c97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/composer.json"));

        // line 1
        echo "{
    \"name\": \"twig/twig\",
    \"type\": \"library\",
    \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
    \"keywords\": [\"templating\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        },
        {
            \"name\": \"Twig Team\",
            \"homepage\": \"https://twig.symfony.com/contributors\",
            \"role\": \"Contributors\"
        },
        {
            \"name\": \"Armin Ronacher\",
            \"email\": \"armin.ronacher@active-4.com\",
            \"role\": \"Project Founder\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"symfony/phpunit-bridge\": \"^4.4@dev|^5.0\",
        \"symfony/debug\": \"^3.4|^4.2\",
        \"psr/container\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-0\" : {
            \"Twig_\" : \"lib/\"
        },
        \"psr-4\" : {
            \"Twig\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Tests\\\\\" : \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.12-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"twig/twig\",
    \"type\": \"library\",
    \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
    \"keywords\": [\"templating\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        },
        {
            \"name\": \"Twig Team\",
            \"homepage\": \"https://twig.symfony.com/contributors\",
            \"role\": \"Contributors\"
        },
        {
            \"name\": \"Armin Ronacher\",
            \"email\": \"armin.ronacher@active-4.com\",
            \"role\": \"Project Founder\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"symfony/phpunit-bridge\": \"^4.4@dev|^5.0\",
        \"symfony/debug\": \"^3.4|^4.2\",
        \"psr/container\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-0\" : {
            \"Twig_\" : \"lib/\"
        },
        \"psr-4\" : {
            \"Twig\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Tests\\\\\" : \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.12-dev\"
        }
    }
}
", "vendor/twig/twig/composer.json", "/var/www/public/DevLaon/templates/vendor/twig/twig/composer.json");
    }
}
