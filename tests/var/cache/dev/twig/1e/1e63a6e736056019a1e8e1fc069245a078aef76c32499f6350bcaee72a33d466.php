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

/* vendor/monolog/monolog/composer.json */
class __TwigTemplate_d24981fa33d4551a75d4830da7d3dae44b92a6775af010f1d92b520f94b50f3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/composer.json"));

        // line 1
        echo "{
    \"name\": \"monolog/monolog\",
    \"description\": \"Sends your log to files, sockets, inboxes, databases and various web services\",
    \"keywords\": [\"log\", \"logging\", \"psr-3\"],
    \"homepage\": \"http://github.com/Seldaek/monolog\",
    \"type\": \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Jordi Boggiano\",
            \"email\": \"j.boggiano@seld.be\",
            \"homepage\": \"http://seld.be\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"~4.5\",
        \"graylog2/gelf-php\": \"~1.0\",
        \"sentry/sentry\": \"^0.13\",
        \"ruflin/elastica\": \">=0.90 <3.0\",
        \"doctrine/couchdb\": \"~1.0@dev\",
        \"aws/aws-sdk-php\": \"^2.4.9 || ^3.0\",
        \"php-amqplib/php-amqplib\": \"~2.4\",
        \"swiftmailer/swiftmailer\": \"^5.3|^6.0\",
        \"php-console/php-console\": \"^3.1.3\",
        \"phpunit/phpunit-mock-objects\": \"2.3.0\",
        \"jakub-onderka/php-parallel-lint\": \"0.9\"
    },
    \"_\": \"phpunit/phpunit-mock-objects required in 2.3.0 due to https://github.com/sebastianbergmann/phpunit-mock-objects/issues/223 - needs hhvm 3.8+ on travis\",
    \"suggest\": {
        \"graylog2/gelf-php\": \"Allow sending log messages to a GrayLog2 server\",
        \"sentry/sentry\": \"Allow sending log messages to a Sentry server\",
        \"doctrine/couchdb\": \"Allow sending log messages to a CouchDB server\",
        \"ruflin/elastica\": \"Allow sending log messages to an Elastic Search server\",
        \"php-amqplib/php-amqplib\": \"Allow sending log messages to an AMQP server using php-amqplib\",
        \"ext-amqp\": \"Allow sending log messages to an AMQP server (1.0+ required)\",
        \"ext-mongo\": \"Allow sending log messages to a MongoDB server\",
        \"mongodb/mongodb\": \"Allow sending log messages to a MongoDB server via PHP Driver\",
        \"aws/aws-sdk-php\": \"Allow sending log messages to AWS services like DynamoDB\",
        \"rollbar/rollbar\": \"Allow sending log messages to Rollbar\",
        \"php-console/php-console\": \"Allow sending log messages to Google Chrome\"
    },
    \"autoload\": {
        \"psr-4\": {\"Monolog\\\\\": \"src/Monolog\"}
    },
    \"autoload-dev\": {
        \"psr-4\": {\"Monolog\\\\\": \"tests/Monolog\"}
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0.0\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    },
    \"scripts\": {
        \"test\": [
            \"parallel-lint . --exclude vendor --exclude src/Monolog/Handler/FormattableHandlerInterface.php  --exclude src/Monolog/Handler/FormattableHandlerTrait.php --exclude src/Monolog/Handler/ProcessableHandlerInterface.php --exclude src/Monolog/Handler/ProcessableHandlerTrait.php\",
            \"phpunit\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"monolog/monolog\",
    \"description\": \"Sends your log to files, sockets, inboxes, databases and various web services\",
    \"keywords\": [\"log\", \"logging\", \"psr-3\"],
    \"homepage\": \"http://github.com/Seldaek/monolog\",
    \"type\": \"library\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Jordi Boggiano\",
            \"email\": \"j.boggiano@seld.be\",
            \"homepage\": \"http://seld.be\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"~4.5\",
        \"graylog2/gelf-php\": \"~1.0\",
        \"sentry/sentry\": \"^0.13\",
        \"ruflin/elastica\": \">=0.90 <3.0\",
        \"doctrine/couchdb\": \"~1.0@dev\",
        \"aws/aws-sdk-php\": \"^2.4.9 || ^3.0\",
        \"php-amqplib/php-amqplib\": \"~2.4\",
        \"swiftmailer/swiftmailer\": \"^5.3|^6.0\",
        \"php-console/php-console\": \"^3.1.3\",
        \"phpunit/phpunit-mock-objects\": \"2.3.0\",
        \"jakub-onderka/php-parallel-lint\": \"0.9\"
    },
    \"_\": \"phpunit/phpunit-mock-objects required in 2.3.0 due to https://github.com/sebastianbergmann/phpunit-mock-objects/issues/223 - needs hhvm 3.8+ on travis\",
    \"suggest\": {
        \"graylog2/gelf-php\": \"Allow sending log messages to a GrayLog2 server\",
        \"sentry/sentry\": \"Allow sending log messages to a Sentry server\",
        \"doctrine/couchdb\": \"Allow sending log messages to a CouchDB server\",
        \"ruflin/elastica\": \"Allow sending log messages to an Elastic Search server\",
        \"php-amqplib/php-amqplib\": \"Allow sending log messages to an AMQP server using php-amqplib\",
        \"ext-amqp\": \"Allow sending log messages to an AMQP server (1.0+ required)\",
        \"ext-mongo\": \"Allow sending log messages to a MongoDB server\",
        \"mongodb/mongodb\": \"Allow sending log messages to a MongoDB server via PHP Driver\",
        \"aws/aws-sdk-php\": \"Allow sending log messages to AWS services like DynamoDB\",
        \"rollbar/rollbar\": \"Allow sending log messages to Rollbar\",
        \"php-console/php-console\": \"Allow sending log messages to Google Chrome\"
    },
    \"autoload\": {
        \"psr-4\": {\"Monolog\\\\\": \"src/Monolog\"}
    },
    \"autoload-dev\": {
        \"psr-4\": {\"Monolog\\\\\": \"tests/Monolog\"}
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0.0\"
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    },
    \"scripts\": {
        \"test\": [
            \"parallel-lint . --exclude vendor --exclude src/Monolog/Handler/FormattableHandlerInterface.php  --exclude src/Monolog/Handler/FormattableHandlerTrait.php --exclude src/Monolog/Handler/ProcessableHandlerInterface.php --exclude src/Monolog/Handler/ProcessableHandlerTrait.php\",
            \"phpunit\"
        ]
    }
}
", "vendor/monolog/monolog/composer.json", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/composer.json");
    }
}
