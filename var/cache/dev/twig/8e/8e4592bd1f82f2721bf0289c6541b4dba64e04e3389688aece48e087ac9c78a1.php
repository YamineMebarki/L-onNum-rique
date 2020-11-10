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

/* vendor/symfony/validator/composer.json */
class __TwigTemplate_111187ff857cf1701c47512148bde78b186644c693030313870233e62efbbe57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/validator\",
    \"type\": \"library\",
    \"description\": \"Symfony Validator Component\",
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
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/translation-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"symfony/http-client\": \"^4.3\",
        \"symfony/http-foundation\": \"~4.1\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/intl\": \"^4.3\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\",
        \"egulias/email-validator\": \"^2.1.10\"
    },
    \"conflict\": {
        \"doctrine/lexer\": \"<1.0.2\",
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/http-kernel\": \"<3.4\",
        \"symfony/intl\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"For using the metadata cache.\",
        \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
        \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
        \"symfony/http-foundation\": \"\",
        \"symfony/intl\": \"\",
        \"symfony/translation\": \"For translating validation errors.\",
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"egulias/email-validator\": \"Strict (RFC compliant) email validation\",
        \"symfony/property-access\": \"For accessing properties within comparison constraints\",
        \"symfony/property-info\": \"To automatically add NotNull and Type constraints\",
        \"symfony/expression-language\": \"For using the Expression validator\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Validator\\\\\": \"\" },
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
        return "vendor/symfony/validator/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/validator\",
    \"type\": \"library\",
    \"description\": \"Symfony Validator Component\",
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
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/translation-contracts\": \"^1.1\"
    },
    \"require-dev\": {
        \"symfony/http-client\": \"^4.3\",
        \"symfony/http-foundation\": \"~4.1\",
        \"symfony/http-kernel\": \"~3.4|~4.0\",
        \"symfony/var-dumper\": \"~3.4|~4.0\",
        \"symfony/intl\": \"^4.3\",
        \"symfony/yaml\": \"~3.4|~4.0\",
        \"symfony/config\": \"~3.4|~4.0\",
        \"symfony/dependency-injection\": \"~3.4|~4.0\",
        \"symfony/expression-language\": \"~3.4|~4.0\",
        \"symfony/cache\": \"~3.4|~4.0\",
        \"symfony/property-access\": \"~3.4|~4.0\",
        \"symfony/property-info\": \"~3.4|~4.0\",
        \"symfony/translation\": \"~4.2\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\",
        \"egulias/email-validator\": \"^2.1.10\"
    },
    \"conflict\": {
        \"doctrine/lexer\": \"<1.0.2\",
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/dependency-injection\": \"<3.4\",
        \"symfony/http-kernel\": \"<3.4\",
        \"symfony/intl\": \"<4.3\",
        \"symfony/translation\": \"<4.2\",
        \"symfony/yaml\": \"<3.4\"
    },
    \"suggest\": {
        \"psr/cache-implementation\": \"For using the metadata cache.\",
        \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
        \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
        \"symfony/http-foundation\": \"\",
        \"symfony/intl\": \"\",
        \"symfony/translation\": \"For translating validation errors.\",
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"egulias/email-validator\": \"Strict (RFC compliant) email validation\",
        \"symfony/property-access\": \"For accessing properties within comparison constraints\",
        \"symfony/property-info\": \"To automatically add NotNull and Type constraints\",
        \"symfony/expression-language\": \"For using the Expression validator\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Validator\\\\\": \"\" },
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
", "vendor/symfony/validator/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/validator/composer.json");
    }
}
