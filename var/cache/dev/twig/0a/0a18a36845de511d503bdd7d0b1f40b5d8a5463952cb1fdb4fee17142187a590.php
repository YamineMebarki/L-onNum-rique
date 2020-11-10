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

/* vendor/symfony/framework-bundle/composer.json */
class __TwigTemplate_901f85d393e4ade79104830b578fc2e27fa96c4fc24d0ca5e40b03254750dd80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/framework-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony FrameworkBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/cache\": \"^4.3.4\",
        \"symfony/config\": \"^4.3.4\",
        \"symfony/debug\": \"~4.0\",
        \"symfony/dependency-injection\": \"^4.3\",
        \"symfony/http-foundation\": \"^4.3\",
        \"symfony/http-kernel\": \"^4.3.4\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/filesystem\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/routing\": \"^4.3\"
    },
    \"require-dev\": {
        \"doctrine/cache\": \"~1.0\",
        \"fig/link-util\": \"^1.0\",
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/browser-kit\": \"^4.3\",
        \"symfony/console\": \"^4.3.4\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dom-crawler\": \"^4.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/form\": \"^4.3.4\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/http-client\": \"^4.3\",
        \"symfony/mailer\": \"^4.3\",
        \"symfony/messenger\": \"^4.3\",
        \"symfony/mime\": \"^4.3\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/security-http\": \"~3.4|~4.0\",
        \"symfony/serializer\": \"^4.3\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.3\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~2.8|~3.2|~4.0\",
        \"symfony/validator\": \"^4.1\",
        \"symfony/var-dumper\": \"^4.3\",
        \"symfony/workflow\": \"^4.3\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/lock\": \"~3.4|~4.0\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"conflict\": {
        \"phpdocumentor/reflection-docblock\": \"<3.0\",
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/asset\": \"<3.4\",
        \"symfony/browser-kit\": \"<4.3\",
        \"symfony/console\": \"<4.3\",
        \"symfony/dotenv\": \"<4.2\",
        \"symfony/dom-crawler\": \"<4.3\",
        \"symfony/form\": \"<4.3\",
        \"symfony/messenger\": \"<4.3\",
        \"symfony/property-info\": \"<3.4\",
        \"symfony/serializer\": \"<4.2\",
        \"symfony/stopwatch\": \"<3.4\",
        \"symfony/translation\": \"<4.3\",
        \"symfony/twig-bridge\": \"<4.1.1\",
        \"symfony/validator\": \"<4.1\",
        \"symfony/workflow\": \"<4.3\"
    },
    \"suggest\": {
        \"ext-apcu\": \"For best performance of the system caches\",
        \"symfony/console\": \"For using the console commands\",
        \"symfony/form\": \"For using forms\",
        \"symfony/serializer\": \"For using the serializer service\",
        \"symfony/validator\": \"For using validation\",
        \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\",
        \"symfony/property-info\": \"For using the property_info service\",
        \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\" },
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
        return "vendor/symfony/framework-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/framework-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony FrameworkBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/cache\": \"^4.3.4\",
        \"symfony/config\": \"^4.3.4\",
        \"symfony/debug\": \"~4.0\",
        \"symfony/dependency-injection\": \"^4.3\",
        \"symfony/http-foundation\": \"^4.3\",
        \"symfony/http-kernel\": \"^4.3.4\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/filesystem\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/routing\": \"^4.3\"
    },
    \"require-dev\": {
        \"doctrine/cache\": \"~1.0\",
        \"fig/link-util\": \"^1.0\",
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/browser-kit\": \"^4.3\",
        \"symfony/console\": \"^4.3.4\",
        \"symfony/css-selector\": \"~3.4|~4.0\",
        \"symfony/dom-crawler\": \"^4.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/form\": \"^4.3.4\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/http-client\": \"^4.3\",
        \"symfony/mailer\": \"^4.3\",
        \"symfony/messenger\": \"^4.3\",
        \"symfony/mime\": \"^4.3\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/security-http\": \"~3.4|~4.0\",
        \"symfony/serializer\": \"^4.3\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.3\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/twig-bundle\": \"~2.8|~3.2|~4.0\",
        \"symfony/validator\": \"^4.1\",
        \"symfony/var-dumper\": \"^4.3\",
        \"symfony/workflow\": \"^4.3\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/lock\": \"~3.4|~4.0\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"twig/twig\": \"~1.41|~2.10\"
    },
    \"conflict\": {
        \"phpdocumentor/reflection-docblock\": \"<3.0\",
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/asset\": \"<3.4\",
        \"symfony/browser-kit\": \"<4.3\",
        \"symfony/console\": \"<4.3\",
        \"symfony/dotenv\": \"<4.2\",
        \"symfony/dom-crawler\": \"<4.3\",
        \"symfony/form\": \"<4.3\",
        \"symfony/messenger\": \"<4.3\",
        \"symfony/property-info\": \"<3.4\",
        \"symfony/serializer\": \"<4.2\",
        \"symfony/stopwatch\": \"<3.4\",
        \"symfony/translation\": \"<4.3\",
        \"symfony/twig-bridge\": \"<4.1.1\",
        \"symfony/validator\": \"<4.1\",
        \"symfony/workflow\": \"<4.3\"
    },
    \"suggest\": {
        \"ext-apcu\": \"For best performance of the system caches\",
        \"symfony/console\": \"For using the console commands\",
        \"symfony/form\": \"For using forms\",
        \"symfony/serializer\": \"For using the serializer service\",
        \"symfony/validator\": \"For using validation\",
        \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\",
        \"symfony/property-info\": \"For using the property_info service\",
        \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\" },
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
", "vendor/symfony/framework-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/composer.json");
    }
}
