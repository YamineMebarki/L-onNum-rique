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

/* vendor/symfony/polyfill-intl-idn/composer.json */
class __TwigTemplate_ebb8a4bc79741bcd87d3a91c1e9e2958b15a4e4aaec32d663ca973960cf5a662 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-intl-idn/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-intl-idn/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/polyfill-intl-idn\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\", \"intl\", \"idn\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Laurent Bassin\",
            \"email\": \"laurent@bassin.info\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-php72\": \"^1.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ]
    },
    \"suggest\": {
        \"ext-intl\": \"For best performance\"
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.12-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-intl-idn/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/polyfill-intl-idn\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\", \"intl\", \"idn\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Laurent Bassin\",
            \"email\": \"laurent@bassin.info\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-php72\": \"^1.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ]
    },
    \"suggest\": {
        \"ext-intl\": \"For best performance\"
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.12-dev\"
        }
    }
}
", "vendor/symfony/polyfill-intl-idn/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-intl-idn/composer.json");
    }
}
