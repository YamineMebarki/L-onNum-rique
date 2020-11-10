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

/* vendor/symfony/twig-bridge/composer.json */
class __TwigTemplate_b837a41f512d8e5357dba34a68a8ba46627f828d5f987ce93b15930c6fe3d014 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/twig-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Twig Bridge\",
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
        \"symfony/translation-contracts\": \"^1.1\",
        \"twig/twig\": \"^1.41|^2.10\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"fig/link-util\": \"^1.0\",
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/form\": \"^4.3.4\",
        \"symfony/http-foundation\": \"~4.3\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/mime\": \"~4.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"^4.2.1\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/security-acl\": \"~2.8|~3.0\",
        \"symfony/security-core\": \"~3.0|~4.0\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/security-http\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"symfony/workflow\": \"~4.3\"
    },
    \"conflict\": {
        \"symfony/console\": \"<3.4\",
        \"symfony/form\": \"<4.3.4\",
        \"symfony/http-foundation\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/workflow\": \"<4.3\"
    },
    \"suggest\": {
        \"symfony/finder\": \"\",
        \"symfony/asset\": \"For using the AssetExtension\",
        \"symfony/form\": \"For using the FormExtension\",
        \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
        \"symfony/routing\": \"For using the RoutingExtension\",
        \"symfony/templating\": \"For using the TwigEngine\",
        \"symfony/translation\": \"For using the TranslationExtension\",
        \"symfony/yaml\": \"For using the YamlExtension\",
        \"symfony/security-core\": \"For using the SecurityExtension\",
        \"symfony/security-csrf\": \"For using the CsrfExtension\",
        \"symfony/security-http\": \"For using the LogoutUrlExtension\",
        \"symfony/stopwatch\": \"For using the StopwatchExtension\",
        \"symfony/var-dumper\": \"For using the DumpExtension\",
        \"symfony/expression-language\": \"For using the ExpressionExtension\",
        \"symfony/web-link\": \"For using the WebLinkExtension\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\" },
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
        return "vendor/symfony/twig-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/twig-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Twig Bridge\",
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
        \"symfony/translation-contracts\": \"^1.1\",
        \"twig/twig\": \"^1.41|^2.10\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"fig/link-util\": \"^1.0\",
        \"symfony/asset\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~3.4|~4.0\",
        \"symfony/form\": \"^4.3.4\",
        \"symfony/http-foundation\": \"~4.3\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/mime\": \"~4.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/routing\": \"~3.4|~4.0\",
        \"symfony/templating\": \"~3.4|~4.0\",
        \"symfony/translation\": \"^4.2.1\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/security-acl\": \"~2.8|~3.0\",
        \"symfony/security-core\": \"~3.0|~4.0\",
        \"symfony/security-csrf\": \"~3.4|~4.0\",
        \"symfony/security-http\": \"~3.4|~4.0\",
        \"symfony/stopwatch\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/web-link\": \"~3.4|~4.0\",
        \"symfony/workflow\": \"~4.3\"
    },
    \"conflict\": {
        \"symfony/console\": \"<3.4\",
        \"symfony/form\": \"<4.3.4\",
        \"symfony/http-foundation\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/workflow\": \"<4.3\"
    },
    \"suggest\": {
        \"symfony/finder\": \"\",
        \"symfony/asset\": \"For using the AssetExtension\",
        \"symfony/form\": \"For using the FormExtension\",
        \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
        \"symfony/routing\": \"For using the RoutingExtension\",
        \"symfony/templating\": \"For using the TwigEngine\",
        \"symfony/translation\": \"For using the TranslationExtension\",
        \"symfony/yaml\": \"For using the YamlExtension\",
        \"symfony/security-core\": \"For using the SecurityExtension\",
        \"symfony/security-csrf\": \"For using the CsrfExtension\",
        \"symfony/security-http\": \"For using the LogoutUrlExtension\",
        \"symfony/stopwatch\": \"For using the StopwatchExtension\",
        \"symfony/var-dumper\": \"For using the DumpExtension\",
        \"symfony/expression-language\": \"For using the ExpressionExtension\",
        \"symfony/web-link\": \"For using the WebLinkExtension\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\" },
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
", "vendor/symfony/twig-bridge/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/composer.json");
    }
}
