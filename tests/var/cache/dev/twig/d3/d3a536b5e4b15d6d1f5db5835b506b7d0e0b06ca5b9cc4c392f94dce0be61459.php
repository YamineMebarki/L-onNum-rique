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

/* vendor/symfony/translation/composer.json */
class __TwigTemplate_e851930749de624c739e1dce74788755097b7be09773319ac6a094aa55076b85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/translation\",
    \"type\": \"library\",
    \"description\": \"Symfony Translation Component\",
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
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/translation-contracts\": \"^1.1.6\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/intl\": \"~3.4|~4.0\",
        \"symfony/service-contracts\": \"^1.1.2\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~2.8|~3.0|~4.0\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<3.4\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"provide\": {
        \"symfony/translation-implementation\": \"1.0\"
    },
    \"suggest\": {
        \"symfony/config\": \"\",
        \"symfony/yaml\": \"\",
        \"psr/log-implementation\": \"To use logging capability in translator\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Translation\\\\\": \"\" },
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
        return "vendor/symfony/translation/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/translation\",
    \"type\": \"library\",
    \"description\": \"Symfony Translation Component\",
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
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/translation-contracts\": \"^1.1.6\"
    },
    \"require-dev\": {
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/intl\": \"~3.4|~4.0\",
        \"symfony/service-contracts\": \"^1.1.2\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/finder\": \"~2.8|~3.0|~4.0\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<3.4\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"provide\": {
        \"symfony/translation-implementation\": \"1.0\"
    },
    \"suggest\": {
        \"symfony/config\": \"\",
        \"symfony/yaml\": \"\",
        \"psr/log-implementation\": \"To use logging capability in translator\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Translation\\\\\": \"\" },
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
", "vendor/symfony/translation/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/translation/composer.json");
    }
}
