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

/* vendor/symfony/swiftmailer-bundle/composer.json */
class __TwigTemplate_452c7313d4e2a90aedf6e7f27e3c822db9c04e192ef88420641769a46e2a10f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/swiftmailer-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony SwiftmailerBundle\",
    \"keywords\": [],
    \"homepage\": \"http://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0.0\",
        \"swiftmailer/swiftmailer\": \"^6.1.3\",
        \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
        \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\",
        \"symfony/config\": \"^3.4|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"symfony/console\": \"^3.4|^4.0|^5.0\",
        \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
        \"symfony/phpunit-bridge\": \"^3.4.32|^4.3.5|^5.0\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"conflict\": {
        \"twig/twig\": \"<1.41|<2.10\"
    },
    \"suggest\": {
        \"psr/log\": \"Allows logging\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\SwiftmailerBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.3-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/swiftmailer-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony SwiftmailerBundle\",
    \"keywords\": [],
    \"homepage\": \"http://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0.0\",
        \"swiftmailer/swiftmailer\": \"^6.1.3\",
        \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
        \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\",
        \"symfony/config\": \"^3.4|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"symfony/console\": \"^3.4|^4.0|^5.0\",
        \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
        \"symfony/phpunit-bridge\": \"^3.4.32|^4.3.5|^5.0\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"conflict\": {
        \"twig/twig\": \"<1.41|<2.10\"
    },
    \"suggest\": {
        \"psr/log\": \"Allows logging\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\SwiftmailerBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.3-dev\"
        }
    }
}
", "vendor/symfony/swiftmailer-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/composer.json");
    }
}
