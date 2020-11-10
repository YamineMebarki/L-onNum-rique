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

/* composer.json */
class __TwigTemplate_d3aa7ed24dc6d34ee69d725031cb7a54168866749e3ff3113d37a3ee1fd2a7bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composer.json"));

        // line 1
        echo "{
    \"type\": \"project\",
    \"license\": \"proprietary\",
    \"require\": {
        \"php\": \"^7.1.3\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\",
        \"doctrine/doctrine-fixtures-bundle\": \"^3.2\",
        \"fzaninotto/faker\": \"^1.8\",
        \"sensio/framework-extra-bundle\": \"^5.1\",
        \"symfony/apache-pack\": \"^1.0\",
        \"symfony/asset\": \"4.3.*\",
        \"symfony/console\": \"4.3.*\",
        \"symfony/dotenv\": \"4.3.*\",
        \"symfony/expression-language\": \"4.3.*\",
        \"symfony/flex\": \"^1.3.1\",
        \"symfony/form\": \"4.3.*\",
        \"symfony/framework-bundle\": \"4.3.*\",
        \"symfony/http-client\": \"4.3.*\",
        \"symfony/intl\": \"4.3.*\",
        \"symfony/monolog-bundle\": \"^3.1\",
        \"symfony/orm-pack\": \"*\",
        \"symfony/process\": \"4.3.*\",
        \"symfony/security-bundle\": \"4.3.*\",
        \"symfony/serializer-pack\": \"*\",
        \"symfony/swiftmailer-bundle\": \"^3.1\",
        \"symfony/translation\": \"4.3.*\",
        \"symfony/twig-bundle\": \"4.3.*\",
        \"symfony/validator\": \"4.3.*\",
        \"symfony/web-link\": \"4.3.*\",
        \"symfony/web-server-bundle\": \"4.3.*\",
        \"symfony/yaml\": \"4.3.*\"
    },
    \"require-dev\": {
        \"symfony/debug-pack\": \"*\",
        \"symfony/maker-bundle\": \"^1.0\",
        \"symfony/profiler-pack\": \"*\",
        \"symfony/test-pack\": \"*\"
    },
    \"config\": {
        \"preferred-install\": {
            \"*\": \"dist\"
        },
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": {
            \"App\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"App\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"replace\": {
        \"paragonie/random_compat\": \"2.*\",
        \"symfony/polyfill-ctype\": \"*\",
        \"symfony/polyfill-iconv\": \"*\",
        \"symfony/polyfill-php71\": \"*\",
        \"symfony/polyfill-php70\": \"*\",
        \"symfony/polyfill-php56\": \"*\"
    },
    \"scripts\": {
        \"auto-scripts\": {
            \"cache:clear\": \"symfony-cmd\",
            \"assets:install %PUBLIC_DIR%\": \"symfony-cmd\"
        },
        \"post-install-cmd\": [
            \"@auto-scripts\"
        ],
        \"post-update-cmd\": [
            \"@auto-scripts\"
        ]
    },
    \"conflict\": {
        \"symfony/symfony\": \"*\"
    },
    \"extra\": {
        \"symfony\": {
            \"allow-contrib\": false,
            \"require\": \"4.3.*\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"type\": \"project\",
    \"license\": \"proprietary\",
    \"require\": {
        \"php\": \"^7.1.3\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\",
        \"doctrine/doctrine-fixtures-bundle\": \"^3.2\",
        \"fzaninotto/faker\": \"^1.8\",
        \"sensio/framework-extra-bundle\": \"^5.1\",
        \"symfony/apache-pack\": \"^1.0\",
        \"symfony/asset\": \"4.3.*\",
        \"symfony/console\": \"4.3.*\",
        \"symfony/dotenv\": \"4.3.*\",
        \"symfony/expression-language\": \"4.3.*\",
        \"symfony/flex\": \"^1.3.1\",
        \"symfony/form\": \"4.3.*\",
        \"symfony/framework-bundle\": \"4.3.*\",
        \"symfony/http-client\": \"4.3.*\",
        \"symfony/intl\": \"4.3.*\",
        \"symfony/monolog-bundle\": \"^3.1\",
        \"symfony/orm-pack\": \"*\",
        \"symfony/process\": \"4.3.*\",
        \"symfony/security-bundle\": \"4.3.*\",
        \"symfony/serializer-pack\": \"*\",
        \"symfony/swiftmailer-bundle\": \"^3.1\",
        \"symfony/translation\": \"4.3.*\",
        \"symfony/twig-bundle\": \"4.3.*\",
        \"symfony/validator\": \"4.3.*\",
        \"symfony/web-link\": \"4.3.*\",
        \"symfony/web-server-bundle\": \"4.3.*\",
        \"symfony/yaml\": \"4.3.*\"
    },
    \"require-dev\": {
        \"symfony/debug-pack\": \"*\",
        \"symfony/maker-bundle\": \"^1.0\",
        \"symfony/profiler-pack\": \"*\",
        \"symfony/test-pack\": \"*\"
    },
    \"config\": {
        \"preferred-install\": {
            \"*\": \"dist\"
        },
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": {
            \"App\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"App\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"replace\": {
        \"paragonie/random_compat\": \"2.*\",
        \"symfony/polyfill-ctype\": \"*\",
        \"symfony/polyfill-iconv\": \"*\",
        \"symfony/polyfill-php71\": \"*\",
        \"symfony/polyfill-php70\": \"*\",
        \"symfony/polyfill-php56\": \"*\"
    },
    \"scripts\": {
        \"auto-scripts\": {
            \"cache:clear\": \"symfony-cmd\",
            \"assets:install %PUBLIC_DIR%\": \"symfony-cmd\"
        },
        \"post-install-cmd\": [
            \"@auto-scripts\"
        ],
        \"post-update-cmd\": [
            \"@auto-scripts\"
        ]
    },
    \"conflict\": {
        \"symfony/symfony\": \"*\"
    },
    \"extra\": {
        \"symfony\": {
            \"allow-contrib\": false,
            \"require\": \"4.3.*\"
        }
    }
}
", "composer.json", "/var/www/public/DevLaon/templates/composer.json");
    }
}
