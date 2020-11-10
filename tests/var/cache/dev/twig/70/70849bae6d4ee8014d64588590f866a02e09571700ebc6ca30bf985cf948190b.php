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

/* vendor/symfony/intl/composer.json */
class __TwigTemplate_216bef9eb4f8c1a680ebe85dc08d61ab9e7fa9fe553adcf445774e9ca839367e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/intl\",
    \"type\": \"library\",
    \"description\": \"A PHP replacement layer for the C intl extension that includes additional data from the ICU library.\",
    \"keywords\": [\"intl\", \"icu\", \"internationalization\", \"localization\", \"i18n\", \"l10n\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Bernhard Schussek\",
            \"email\": \"bschussek@gmail.com\"
        },
        {
            \"name\": \"Eriksen Costa\",
            \"email\": \"eriksen.costa@infranology.com.br\"
        },
        {
            \"name\": \"Igor Wiedler\",
            \"email\": \"igor@wiedler.ch\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/filesystem\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"ext-intl\": \"to use the component with locales other than \\\"en\\\"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Intl\\\\\": \"\" },
        \"classmap\": [ \"Resources/stubs\" ],
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
        return "vendor/symfony/intl/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/intl\",
    \"type\": \"library\",
    \"description\": \"A PHP replacement layer for the C intl extension that includes additional data from the ICU library.\",
    \"keywords\": [\"intl\", \"icu\", \"internationalization\", \"localization\", \"i18n\", \"l10n\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Bernhard Schussek\",
            \"email\": \"bschussek@gmail.com\"
        },
        {
            \"name\": \"Eriksen Costa\",
            \"email\": \"eriksen.costa@infranology.com.br\"
        },
        {
            \"name\": \"Igor Wiedler\",
            \"email\": \"igor@wiedler.ch\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-intl-icu\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/filesystem\": \"~3.4|~4.0\"
    },
    \"suggest\": {
        \"ext-intl\": \"to use the component with locales other than \\\"en\\\"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Intl\\\\\": \"\" },
        \"classmap\": [ \"Resources/stubs\" ],
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
", "vendor/symfony/intl/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/composer.json");
    }
}
