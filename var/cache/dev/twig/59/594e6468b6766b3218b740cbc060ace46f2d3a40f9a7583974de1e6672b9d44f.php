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

/* vendor/symfony/http-kernel/composer.json */
class __TwigTemplate_40fdb5510c853c193b9ad1613e30c9ec0fb74fb69e0bb2831d00ec5d393c7dc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/http-kernel\",
    \"type\": \"library\",
    \"description\": \"Symfony HttpKernel Component\",
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
        \"symfony/http-foundation\": \"^4.1.1\",
        \"symfony/debug\": \"~3.4|~4.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-php73\": \"^1.9\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/browser-kit\": \"^4.3\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"^4.3\",
        \"symfony/dom-crawler\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"symfony/translation-contracts\": \"^1.1\",
        \"symfony/var-dumper\": \"^4.1.1\",
        \"psr/cache\": \"~1.0\",
        \"twig/twig\": \"^1.34|^2.4\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.3\",
        \"symfony/config\": \"<3.4\",
        \"symfony/dependency-injection\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/var-dumper\": \"<4.1.1\",
        \"twig/twig\": \"<1.34|<2.4,>=2\"
    },
    \"suggest\": {
        \"symfony/browser-kit\": \"\",
        \"symfony/config\": \"\",
        \"symfony/console\": \"\",
        \"symfony/dependency-injection\": \"\",
        \"symfony/var-dumper\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\" },
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
        return "vendor/symfony/http-kernel/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/http-kernel\",
    \"type\": \"library\",
    \"description\": \"Symfony HttpKernel Component\",
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
        \"symfony/http-foundation\": \"^4.1.1\",
        \"symfony/debug\": \"~3.4|~4.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-php73\": \"^1.9\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/browser-kit\": \"^4.3\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"^4.3\",
        \"symfony/dom-crawler\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"symfony/translation-contracts\": \"^1.1\",
        \"symfony/var-dumper\": \"^4.1.1\",
        \"psr/cache\": \"~1.0\",
        \"twig/twig\": \"^1.34|^2.4\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.3\",
        \"symfony/config\": \"<3.4\",
        \"symfony/dependency-injection\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/var-dumper\": \"<4.1.1\",
        \"twig/twig\": \"<1.34|<2.4,>=2\"
    },
    \"suggest\": {
        \"symfony/browser-kit\": \"\",
        \"symfony/config\": \"\",
        \"symfony/console\": \"\",
        \"symfony/dependency-injection\": \"\",
        \"symfony/var-dumper\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\" },
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
", "vendor/symfony/http-kernel/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/composer.json");
    }
}
