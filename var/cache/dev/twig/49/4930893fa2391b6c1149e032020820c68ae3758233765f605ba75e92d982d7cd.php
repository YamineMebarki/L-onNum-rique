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

/* vendor/symfony/form/composer.json */
class __TwigTemplate_f1a053bcb755e33da5c2ca7f5db22bdec14301b883a917feb6d519cb5246a881 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/form\",
    \"type\": \"library\",
    \"description\": \"Symfony Form Component\",
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
        \"symfony/event-dispatcher\": \"^4.3\",
        \"symfony/intl\": \"^4.3\",
        \"symfony/options-resolver\": \"~4.3\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/service-contracts\": \"~1.1\"
    },
    \"require-dev\": {
        \"doctrine/collections\": \"~1.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"^4.3\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~4.3\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"symfony/var-dumper\": \"^4.3\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/console\": \"<4.3\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/doctrine-bridge\": \"<3.4\",
        \"symfony/framework-bundle\": \"<3.4\",
        \"symfony/http-kernel\": \"<4.3\",
        \"symfony/intl\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/twig-bridge\": \"<3.4.5|<4.0.5,>=4.0\"
    },
    \"suggest\": {
        \"symfony/validator\": \"For form validation.\",
        \"symfony/security-csrf\": \"For protecting forms against CSRF attacks.\",
        \"symfony/twig-bridge\": \"For templating with Twig.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Form\\\\\": \"\" },
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
        return "vendor/symfony/form/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/form\",
    \"type\": \"library\",
    \"description\": \"Symfony Form Component\",
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
        \"symfony/event-dispatcher\": \"^4.3\",
        \"symfony/intl\": \"^4.3\",
        \"symfony/options-resolver\": \"~4.3\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/service-contracts\": \"~1.1\"
    },
    \"require-dev\": {
        \"doctrine/collections\": \"~1.0\",
        \"symfony/validator\": \"^3.4.31|^4.3.4\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"^4.3\",
        \"symfony/http-foundation\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~4.3\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"symfony/var-dumper\": \"^4.3\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/console\": \"<4.3\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/doctrine-bridge\": \"<3.4\",
        \"symfony/framework-bundle\": \"<3.4\",
        \"symfony/http-kernel\": \"<4.3\",
        \"symfony/intl\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/twig-bridge\": \"<3.4.5|<4.0.5,>=4.0\"
    },
    \"suggest\": {
        \"symfony/validator\": \"For form validation.\",
        \"symfony/security-csrf\": \"For protecting forms against CSRF attacks.\",
        \"symfony/twig-bridge\": \"For templating with Twig.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Form\\\\\": \"\" },
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
", "vendor/symfony/form/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/form/composer.json");
    }
}
