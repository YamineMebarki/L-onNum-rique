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

/* vendor/symfony/config/composer.json */
class __TwigTemplate_5b60d41335f2242eb3dc49eadc355aa48af7f19916029a1cd994d65c2db9e26a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/config\",
    \"type\": \"library\",
    \"description\": \"Symfony Config Component\",
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
        \"symfony/filesystem\": \"~3.4|~4.0\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/event-dispatcher\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/messenger\": \"~4.1\",
        \"symfony/yaml\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/finder\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"To use the yaml reference dumper\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Config\\\\\": \"\" },
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
        return "vendor/symfony/config/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/config\",
    \"type\": \"library\",
    \"description\": \"Symfony Config Component\",
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
        \"symfony/filesystem\": \"~3.4|~4.0\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/event-dispatcher\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/messenger\": \"~4.1\",
        \"symfony/yaml\": \"~3.4|~4.0\"
    },
    \"conflict\": {
        \"symfony/finder\": \"<3.4\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"To use the yaml reference dumper\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Config\\\\\": \"\" },
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
", "vendor/symfony/config/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/config/composer.json");
    }
}
