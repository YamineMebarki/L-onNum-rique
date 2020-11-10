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

/* symfony.lock */
class __TwigTemplate_5f4eb01004780e24bc7c2c0a0bb40be75a0c72f498d57404ad780f401b40e9bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "symfony.lock"));

        // line 1
        echo "{
    \"doctrine/annotations\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"cb4152ebcadbe620ea2261da1a1c5a9b8cea7672\"
        },
        \"files\": [
            \"config/routes/annotations.yaml\"
        ]
    },
    \"doctrine/cache\": {
        \"version\": \"v1.8.1\"
    },
    \"doctrine/collections\": {
        \"version\": \"v1.6.2\"
    },
    \"doctrine/common\": {
        \"version\": \"v2.11.0\"
    },
    \"doctrine/data-fixtures\": {
        \"version\": \"v1.3.2\"
    },
    \"doctrine/dbal\": {
        \"version\": \"v2.9.2\"
    },
    \"doctrine/doctrine-bundle\": {
        \"version\": \"1.6\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.6\",
            \"ref\": \"05802762c395b1e9f0f2645ebbd6128a87942f09\"
        },
        \"files\": [
            \"config/packages/doctrine.yaml\",
            \"config/packages/prod/doctrine.yaml\",
            \"src/Entity/.gitignore\",
            \"src/Repository/.gitignore\"
        ]
    },
    \"doctrine/doctrine-cache-bundle\": {
        \"version\": \"1.3.5\"
    },
    \"doctrine/doctrine-fixtures-bundle\": {
        \"version\": \"3.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.0\",
            \"ref\": \"fc52d86631a6dfd9fdf3381d0b7e3df2069e51b3\"
        },
        \"files\": [
            \"src/DataFixtures/AppFixtures.php\"
        ]
    },
    \"doctrine/doctrine-migrations-bundle\": {
        \"version\": \"1.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.2\",
            \"ref\": \"c1431086fec31f17fbcfe6d6d7e92059458facc1\"
        },
        \"files\": [
            \"config/packages/doctrine_migrations.yaml\",
            \"src/Migrations/.gitignore\"
        ]
    },
    \"doctrine/event-manager\": {
        \"version\": \"v1.0.0\"
    },
    \"doctrine/inflector\": {
        \"version\": \"v1.3.0\"
    },
    \"doctrine/instantiator\": {
        \"version\": \"1.2.0\"
    },
    \"doctrine/lexer\": {
        \"version\": \"1.1.0\"
    },
    \"doctrine/migrations\": {
        \"version\": \"2.1.1\"
    },
    \"doctrine/orm\": {
        \"version\": \"v2.6.4\"
    },
    \"doctrine/persistence\": {
        \"version\": \"1.1.1\"
    },
    \"doctrine/reflection\": {
        \"version\": \"v1.0.0\"
    },
    \"easycorp/easy-log-handler\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"70062abc2cd58794d2a90274502f81b55cd9951b\"
        },
        \"files\": [
            \"config/packages/dev/easy_log_handler.yaml\"
        ]
    },
    \"egulias/email-validator\": {
        \"version\": \"2.1.11\"
    },
    \"fig/link-util\": {
        \"version\": \"1.0.0\"
    },
    \"fzaninotto/faker\": {
        \"version\": \"v1.8.0\"
    },
    \"jdorn/sql-formatter\": {
        \"version\": \"v1.2.17\"
    },
    \"monolog/monolog\": {
        \"version\": \"1.25.1\"
    },
    \"nikic/php-parser\": {
        \"version\": \"v4.2.5\"
    },
    \"ocramius/package-versions\": {
        \"version\": \"1.4.0\"
    },
    \"ocramius/proxy-manager\": {
        \"version\": \"2.2.3\"
    },
    \"phpdocumentor/reflection-common\": {
        \"version\": \"2.0.0\"
    },
    \"phpdocumentor/reflection-docblock\": {
        \"version\": \"4.3.2\"
    },
    \"phpdocumentor/type-resolver\": {
        \"version\": \"1.0.1\"
    },
    \"psr/cache\": {
        \"version\": \"1.0.1\"
    },
    \"psr/container\": {
        \"version\": \"1.0.0\"
    },
    \"psr/link\": {
        \"version\": \"1.0.0\"
    },
    \"psr/log\": {
        \"version\": \"1.1.1\"
    },
    \"sensio/framework-extra-bundle\": {
        \"version\": \"5.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"5.2\",
            \"ref\": \"fb7e19da7f013d0d422fa9bce16f5c510e27609b\"
        },
        \"files\": [
            \"config/packages/sensio_framework_extra.yaml\"
        ]
    },
    \"swiftmailer/swiftmailer\": {
        \"version\": \"v6.2.1\"
    },
    \"symfony/apache-pack\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes-contrib\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"c82bead70f9a4f656354a193df7bf0ca2114efa0\"
        },
        \"files\": [
            \"public/.htaccess\"
        ]
    },
    \"symfony/asset\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/browser-kit\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/cache\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/cache-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/config\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/console\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"482d233eb8de91ebd042992077bbd5838858890c\"
        },
        \"files\": [
            \"bin/console\",
            \"config/bootstrap.php\"
        ]
    },
    \"symfony/css-selector\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/debug\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/debug-bundle\": {
        \"version\": \"4.1\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.1\",
            \"ref\": \"f8863cbad2f2e58c4b65fa1eac892ab189971bea\"
        },
        \"files\": [
            \"config/packages/dev/debug.yaml\"
        ]
    },
    \"symfony/debug-pack\": {
        \"version\": \"v1.0.7\"
    },
    \"symfony/dependency-injection\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/doctrine-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/dom-crawler\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/dotenv\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/event-dispatcher\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/event-dispatcher-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/expression-language\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/filesystem\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/finder\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/flex\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"19fa03bacd9a6619583d1e4939da4388df22984d\"
        },
        \"files\": [
            \".env_GogolejokeVoice\"
        ]
    },
    \"symfony/form\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/framework-bundle\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"61ad963f28c091b8bb9449507654b9c7d8bbb53c\"
        },
        \"files\": [
            \"config/bootstrap.php\",
            \"config/packages/cache.yaml\",
            \"config/packages/framework.yaml\",
            \"config/packages/test/framework.yaml\",
            \"config/services.yaml\",
            \"public/index.php\",
            \"src/Controller/.gitignore\",
            \"src/Kernel.php\"
        ]
    },
    \"symfony/http-client\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/http-client-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/http-foundation\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/http-kernel\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/inflector\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/intl\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/maker-bundle\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"fadbfe33303a76e25cb63401050439aa9b1a9c7f\"
        }
    },
    \"symfony/mime\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/monolog-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/monolog-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"6240c6d43e8237a32452f057f81816820fd56ab6\"
        },
        \"files\": [
            \"config/packages/dev/monolog.yaml\",
            \"config/packages/prod/monolog.yaml\",
            \"config/packages/test/monolog.yaml\"
        ]
    },
    \"symfony/options-resolver\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/orm-pack\": {
        \"version\": \"v1.0.7\"
    },
    \"symfony/phpunit-bridge\": {
        \"version\": \"4.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.3\",
            \"ref\": \"b0582341f1df39aaf3a9a866cdbe49937da35984\"
        },
        \"files\": [
            \".env_GogolejokeVoice.test\",
            \"bin/phpunit\",
            \"config/bootstrap.php\",
            \"phpunit.xml.dist\",
            \"tests/.gitignore\"
        ]
    },
    \"symfony/polyfill-intl-icu\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-intl-idn\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-mbstring\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-php72\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-php73\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/process\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/profiler-pack\": {
        \"version\": \"v1.0.4\"
    },
    \"symfony/property-access\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/property-info\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/routing\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"683dcb08707ba8d41b7e34adb0344bfd68d248a7\"
        },
        \"files\": [
            \"config/packages/prod/routing.yaml\",
            \"config/packages/routing.yaml\",
            \"config/routes.yaml\"
        ]
    },
    \"symfony/security-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"e5a0228251d1dd2bca4c8ef918e14423c06db625\"
        },
        \"files\": [
            \"config/packages/security.yaml\"
        ]
    },
    \"symfony/security-core\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-csrf\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-guard\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-http\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/serializer\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/serializer-pack\": {
        \"version\": \"v1.0.2\"
    },
    \"symfony/service-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/stopwatch\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/swiftmailer-bundle\": {
        \"version\": \"2.5\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"2.5\",
            \"ref\": \"429afc6c6778a1fdddb52a4f708cd94ff2c9960f\"
        },
        \"files\": [
            \"config/packages/dev/swiftmailer.yaml\",
            \"config/packages/swiftmailer.yaml\",
            \"config/packages/test/swiftmailer.yaml\"
        ]
    },
    \"symfony/test-pack\": {
        \"version\": \"v1.0.6\"
    },
    \"symfony/translation\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"2ad9d2545bce8ca1a863e50e92141f0b9d87ffcd\"
        },
        \"files\": [
            \"config/packages/translation.yaml\",
            \"translations/.gitignore\"
        ]
    },
    \"symfony/translation-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/twig-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/twig-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"7e5911186d596214c14dd28305485a3c143ee746\"
        },
        \"files\": [
            \"config/packages/twig.yaml\",
            \"config/routes/dev/twig.yaml\",
            \"templates/base.html.twig\"
        ]
    },
    \"symfony/validator\": {
        \"version\": \"4.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.3\",
            \"ref\": \"d902da3e4952f18d3bf05aab29512eb61cabd869\"
        },
        \"files\": [
            \"config/packages/test/validator.yaml\",
            \"config/packages/validator.yaml\"
        ]
    },
    \"symfony/var-dumper\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/var-exporter\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/web-link\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/web-profiler-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"6bdfa1a95f6b2e677ab985cd1af2eae35d62e0f6\"
        },
        \"files\": [
            \"config/packages/dev/web_profiler.yaml\",
            \"config/packages/test/web_profiler.yaml\",
            \"config/routes/dev/web_profiler.yaml\"
        ]
    },
    \"symfony/web-server-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"dae9b39fd6717970be7601101ce5aa960bf53d9a\"
        }
    },
    \"symfony/yaml\": {
        \"version\": \"v4.3.5\"
    },
    \"twig/twig\": {
        \"version\": \"v2.12.1\"
    },
    \"webmozart/assert\": {
        \"version\": \"1.5.0\"
    },
    \"zendframework/zend-code\": {
        \"version\": \"3.4.0\"
    },
    \"zendframework/zend-eventmanager\": {
        \"version\": \"3.2.1\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "symfony.lock";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"doctrine/annotations\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"cb4152ebcadbe620ea2261da1a1c5a9b8cea7672\"
        },
        \"files\": [
            \"config/routes/annotations.yaml\"
        ]
    },
    \"doctrine/cache\": {
        \"version\": \"v1.8.1\"
    },
    \"doctrine/collections\": {
        \"version\": \"v1.6.2\"
    },
    \"doctrine/common\": {
        \"version\": \"v2.11.0\"
    },
    \"doctrine/data-fixtures\": {
        \"version\": \"v1.3.2\"
    },
    \"doctrine/dbal\": {
        \"version\": \"v2.9.2\"
    },
    \"doctrine/doctrine-bundle\": {
        \"version\": \"1.6\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.6\",
            \"ref\": \"05802762c395b1e9f0f2645ebbd6128a87942f09\"
        },
        \"files\": [
            \"config/packages/doctrine.yaml\",
            \"config/packages/prod/doctrine.yaml\",
            \"src/Entity/.gitignore\",
            \"src/Repository/.gitignore\"
        ]
    },
    \"doctrine/doctrine-cache-bundle\": {
        \"version\": \"1.3.5\"
    },
    \"doctrine/doctrine-fixtures-bundle\": {
        \"version\": \"3.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.0\",
            \"ref\": \"fc52d86631a6dfd9fdf3381d0b7e3df2069e51b3\"
        },
        \"files\": [
            \"src/DataFixtures/AppFixtures.php\"
        ]
    },
    \"doctrine/doctrine-migrations-bundle\": {
        \"version\": \"1.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.2\",
            \"ref\": \"c1431086fec31f17fbcfe6d6d7e92059458facc1\"
        },
        \"files\": [
            \"config/packages/doctrine_migrations.yaml\",
            \"src/Migrations/.gitignore\"
        ]
    },
    \"doctrine/event-manager\": {
        \"version\": \"v1.0.0\"
    },
    \"doctrine/inflector\": {
        \"version\": \"v1.3.0\"
    },
    \"doctrine/instantiator\": {
        \"version\": \"1.2.0\"
    },
    \"doctrine/lexer\": {
        \"version\": \"1.1.0\"
    },
    \"doctrine/migrations\": {
        \"version\": \"2.1.1\"
    },
    \"doctrine/orm\": {
        \"version\": \"v2.6.4\"
    },
    \"doctrine/persistence\": {
        \"version\": \"1.1.1\"
    },
    \"doctrine/reflection\": {
        \"version\": \"v1.0.0\"
    },
    \"easycorp/easy-log-handler\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"70062abc2cd58794d2a90274502f81b55cd9951b\"
        },
        \"files\": [
            \"config/packages/dev/easy_log_handler.yaml\"
        ]
    },
    \"egulias/email-validator\": {
        \"version\": \"2.1.11\"
    },
    \"fig/link-util\": {
        \"version\": \"1.0.0\"
    },
    \"fzaninotto/faker\": {
        \"version\": \"v1.8.0\"
    },
    \"jdorn/sql-formatter\": {
        \"version\": \"v1.2.17\"
    },
    \"monolog/monolog\": {
        \"version\": \"1.25.1\"
    },
    \"nikic/php-parser\": {
        \"version\": \"v4.2.5\"
    },
    \"ocramius/package-versions\": {
        \"version\": \"1.4.0\"
    },
    \"ocramius/proxy-manager\": {
        \"version\": \"2.2.3\"
    },
    \"phpdocumentor/reflection-common\": {
        \"version\": \"2.0.0\"
    },
    \"phpdocumentor/reflection-docblock\": {
        \"version\": \"4.3.2\"
    },
    \"phpdocumentor/type-resolver\": {
        \"version\": \"1.0.1\"
    },
    \"psr/cache\": {
        \"version\": \"1.0.1\"
    },
    \"psr/container\": {
        \"version\": \"1.0.0\"
    },
    \"psr/link\": {
        \"version\": \"1.0.0\"
    },
    \"psr/log\": {
        \"version\": \"1.1.1\"
    },
    \"sensio/framework-extra-bundle\": {
        \"version\": \"5.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"5.2\",
            \"ref\": \"fb7e19da7f013d0d422fa9bce16f5c510e27609b\"
        },
        \"files\": [
            \"config/packages/sensio_framework_extra.yaml\"
        ]
    },
    \"swiftmailer/swiftmailer\": {
        \"version\": \"v6.2.1\"
    },
    \"symfony/apache-pack\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes-contrib\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"c82bead70f9a4f656354a193df7bf0ca2114efa0\"
        },
        \"files\": [
            \"public/.htaccess\"
        ]
    },
    \"symfony/asset\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/browser-kit\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/cache\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/cache-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/config\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/console\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"482d233eb8de91ebd042992077bbd5838858890c\"
        },
        \"files\": [
            \"bin/console\",
            \"config/bootstrap.php\"
        ]
    },
    \"symfony/css-selector\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/debug\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/debug-bundle\": {
        \"version\": \"4.1\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.1\",
            \"ref\": \"f8863cbad2f2e58c4b65fa1eac892ab189971bea\"
        },
        \"files\": [
            \"config/packages/dev/debug.yaml\"
        ]
    },
    \"symfony/debug-pack\": {
        \"version\": \"v1.0.7\"
    },
    \"symfony/dependency-injection\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/doctrine-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/dom-crawler\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/dotenv\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/event-dispatcher\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/event-dispatcher-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/expression-language\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/filesystem\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/finder\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/flex\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"19fa03bacd9a6619583d1e4939da4388df22984d\"
        },
        \"files\": [
            \".env_GogolejokeVoice\"
        ]
    },
    \"symfony/form\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/framework-bundle\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"61ad963f28c091b8bb9449507654b9c7d8bbb53c\"
        },
        \"files\": [
            \"config/bootstrap.php\",
            \"config/packages/cache.yaml\",
            \"config/packages/framework.yaml\",
            \"config/packages/test/framework.yaml\",
            \"config/services.yaml\",
            \"public/index.php\",
            \"src/Controller/.gitignore\",
            \"src/Kernel.php\"
        ]
    },
    \"symfony/http-client\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/http-client-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/http-foundation\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/http-kernel\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/inflector\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/intl\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/maker-bundle\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"fadbfe33303a76e25cb63401050439aa9b1a9c7f\"
        }
    },
    \"symfony/mime\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/monolog-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/monolog-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"6240c6d43e8237a32452f057f81816820fd56ab6\"
        },
        \"files\": [
            \"config/packages/dev/monolog.yaml\",
            \"config/packages/prod/monolog.yaml\",
            \"config/packages/test/monolog.yaml\"
        ]
    },
    \"symfony/options-resolver\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/orm-pack\": {
        \"version\": \"v1.0.7\"
    },
    \"symfony/phpunit-bridge\": {
        \"version\": \"4.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.3\",
            \"ref\": \"b0582341f1df39aaf3a9a866cdbe49937da35984\"
        },
        \"files\": [
            \".env_GogolejokeVoice.test\",
            \"bin/phpunit\",
            \"config/bootstrap.php\",
            \"phpunit.xml.dist\",
            \"tests/.gitignore\"
        ]
    },
    \"symfony/polyfill-intl-icu\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-intl-idn\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-mbstring\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-php72\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/polyfill-php73\": {
        \"version\": \"v1.12.0\"
    },
    \"symfony/process\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/profiler-pack\": {
        \"version\": \"v1.0.4\"
    },
    \"symfony/property-access\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/property-info\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/routing\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"683dcb08707ba8d41b7e34adb0344bfd68d248a7\"
        },
        \"files\": [
            \"config/packages/prod/routing.yaml\",
            \"config/packages/routing.yaml\",
            \"config/routes.yaml\"
        ]
    },
    \"symfony/security-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"e5a0228251d1dd2bca4c8ef918e14423c06db625\"
        },
        \"files\": [
            \"config/packages/security.yaml\"
        ]
    },
    \"symfony/security-core\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-csrf\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-guard\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/security-http\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/serializer\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/serializer-pack\": {
        \"version\": \"v1.0.2\"
    },
    \"symfony/service-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/stopwatch\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/swiftmailer-bundle\": {
        \"version\": \"2.5\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"2.5\",
            \"ref\": \"429afc6c6778a1fdddb52a4f708cd94ff2c9960f\"
        },
        \"files\": [
            \"config/packages/dev/swiftmailer.yaml\",
            \"config/packages/swiftmailer.yaml\",
            \"config/packages/test/swiftmailer.yaml\"
        ]
    },
    \"symfony/test-pack\": {
        \"version\": \"v1.0.6\"
    },
    \"symfony/translation\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"2ad9d2545bce8ca1a863e50e92141f0b9d87ffcd\"
        },
        \"files\": [
            \"config/packages/translation.yaml\",
            \"translations/.gitignore\"
        ]
    },
    \"symfony/translation-contracts\": {
        \"version\": \"v1.1.7\"
    },
    \"symfony/twig-bridge\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/twig-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"7e5911186d596214c14dd28305485a3c143ee746\"
        },
        \"files\": [
            \"config/packages/twig.yaml\",
            \"config/routes/dev/twig.yaml\",
            \"templates/base.html.twig\"
        ]
    },
    \"symfony/validator\": {
        \"version\": \"4.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.3\",
            \"ref\": \"d902da3e4952f18d3bf05aab29512eb61cabd869\"
        },
        \"files\": [
            \"config/packages/test/validator.yaml\",
            \"config/packages/validator.yaml\"
        ]
    },
    \"symfony/var-dumper\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/var-exporter\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/web-link\": {
        \"version\": \"v4.3.5\"
    },
    \"symfony/web-profiler-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"6bdfa1a95f6b2e677ab985cd1af2eae35d62e0f6\"
        },
        \"files\": [
            \"config/packages/dev/web_profiler.yaml\",
            \"config/packages/test/web_profiler.yaml\",
            \"config/routes/dev/web_profiler.yaml\"
        ]
    },
    \"symfony/web-server-bundle\": {
        \"version\": \"3.3\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"3.3\",
            \"ref\": \"dae9b39fd6717970be7601101ce5aa960bf53d9a\"
        }
    },
    \"symfony/yaml\": {
        \"version\": \"v4.3.5\"
    },
    \"twig/twig\": {
        \"version\": \"v2.12.1\"
    },
    \"webmozart/assert\": {
        \"version\": \"1.5.0\"
    },
    \"zendframework/zend-code\": {
        \"version\": \"3.4.0\"
    },
    \"zendframework/zend-eventmanager\": {
        \"version\": \"3.2.1\"
    }
}
", "symfony.lock", "/var/www/public/DevLaon/templates/symfony.lock");
    }
}
