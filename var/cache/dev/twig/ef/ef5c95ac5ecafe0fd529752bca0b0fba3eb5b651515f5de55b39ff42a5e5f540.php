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

/* vendor/symfony/var-dumper/composer.json */
class __TwigTemplate_9019ae444992b13716e798c3e0eff754270af590e3d0c18b69d8e8803ef30a52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/var-dumper\",
    \"type\": \"library\",
    \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
    \"keywords\": [\"dump\", \"debug\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/polyfill-php72\": \"~1.5\"
    },
    \"require-dev\": {
        \"ext-iconv\": \"*\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"twig/twig\": \"~1.34|~2.4\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/console\": \"<3.4\"
    },
    \"suggest\": {
        \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
        \"ext-intl\": \"To show region name in time zone dump\",
        \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
    },
    \"autoload\": {
        \"files\": [ \"Resources/functions/dump.php\" ],
        \"psr-4\": { \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"Resources/bin/var-dump-server\"
    ],
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
        return "vendor/symfony/var-dumper/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/var-dumper\",
    \"type\": \"library\",
    \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
    \"keywords\": [\"dump\", \"debug\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/polyfill-php72\": \"~1.5\"
    },
    \"require-dev\": {
        \"ext-iconv\": \"*\",
        \"symfony/console\": \"~3.4|~4.0\",
        \"symfony/process\": \"~3.4|~4.0\",
        \"twig/twig\": \"~1.34|~2.4\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
        \"symfony/console\": \"<3.4\"
    },
    \"suggest\": {
        \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
        \"ext-intl\": \"To show region name in time zone dump\",
        \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
    },
    \"autoload\": {
        \"files\": [ \"Resources/functions/dump.php\" ],
        \"psr-4\": { \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"Resources/bin/var-dump-server\"
    ],
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.3-dev\"
        }
    }
}
", "vendor/symfony/var-dumper/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/composer.json");
    }
}
