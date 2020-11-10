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

/* vendor/symfony/twig-bundle/composer.json */
class __TwigTemplate_c83e3f146beb533fe94abba81edf23c0b62358fd22ca5a32a97e76630e12be71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/twig-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony TwigBundle\",
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
        \"symfony/config\": \"~4.2\",
        \"symfony/debug\": \"~4.0\",
        \"symfony/twig-bridge\": \"^4.3\",
        \"symfony/http-foundation\": \"~4.3\",
        \"symfony/http-kernel\": \"~4.1\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"^4.2.5\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/form\": \"~3.4|~4.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"^4.2\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/framework-bundle\": \"~4.3\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.1\",
        \"symfony/framework-bundle\": \"<4.3\",
        \"symfony/translation\": \"<4.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\" },
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
        return "vendor/symfony/twig-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/twig-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony TwigBundle\",
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
        \"symfony/config\": \"~4.2\",
        \"symfony/debug\": \"~4.0\",
        \"symfony/twig-bridge\": \"^4.3\",
        \"symfony/http-foundation\": \"~4.3\",
        \"symfony/http-kernel\": \"~4.1\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"^4.2.5\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/form\": \"~3.4|~4.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"^4.2\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/framework-bundle\": \"~4.3\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.1\",
        \"symfony/framework-bundle\": \"<4.3\",
        \"symfony/translation\": \"<4.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\" },
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
", "vendor/symfony/twig-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/composer.json");
    }
}
