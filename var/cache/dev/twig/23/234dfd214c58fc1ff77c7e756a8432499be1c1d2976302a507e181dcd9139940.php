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

/* vendor/zendframework/zend-code/composer.json */
class __TwigTemplate_312b493f9efac22fe9ebe353a7808e1b27fcfe34775e1af71c8cd853ad7e84ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/composer.json"));

        // line 1
        echo "{
    \"name\": \"zendframework/zend-code\",
    \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf\",
        \"zendframework\",
        \"code\"
    ],
    \"support\": {
        \"docs\": \"https://docs.zendframework.com/zend-code/\",
        \"issues\": \"https://github.com/zendframework/zend-code/issues\",
        \"source\": \"https://github.com/zendframework/zend-code\",
        \"rss\": \"https://github.com/zendframework/zend-code/releases.atom\",
        \"chat\": \"https://zendframework-slack.herokuapp.com\",
        \"forum\": \"https://discourse.zendframework.com/c/questions/components\"
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
    },
    \"require-dev\": {
        \"ext-phar\": \"*\",
        \"doctrine/annotations\": \"^1.0\",
        \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
        \"zendframework/zend-coding-standard\": \"^1.0\",
        \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
    },
    \"suggest\": {
        \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
        \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\Code\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\Code\\\\\": \"test/\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.4.x-dev\",
            \"dev-develop\": \"3.5.x-dev\"
        }
    },
    \"scripts\": {
        \"check\": [
            \"@cs-check\",
            \"@test\"
        ],
        \"cs-check\": \"phpcs\",
        \"cs-fix\": \"phpcbf\",
        \"test\": \"phpunit --colors=always\",
        \"test-coverage\": \"phpunit --colors=always --coverage-clover clover.xml\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"zendframework/zend-code\",
    \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf\",
        \"zendframework\",
        \"code\"
    ],
    \"support\": {
        \"docs\": \"https://docs.zendframework.com/zend-code/\",
        \"issues\": \"https://github.com/zendframework/zend-code/issues\",
        \"source\": \"https://github.com/zendframework/zend-code\",
        \"rss\": \"https://github.com/zendframework/zend-code/releases.atom\",
        \"chat\": \"https://zendframework-slack.herokuapp.com\",
        \"forum\": \"https://discourse.zendframework.com/c/questions/components\"
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
    },
    \"require-dev\": {
        \"ext-phar\": \"*\",
        \"doctrine/annotations\": \"^1.0\",
        \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
        \"zendframework/zend-coding-standard\": \"^1.0\",
        \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
    },
    \"suggest\": {
        \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
        \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\Code\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\Code\\\\\": \"test/\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.4.x-dev\",
            \"dev-develop\": \"3.5.x-dev\"
        }
    },
    \"scripts\": {
        \"check\": [
            \"@cs-check\",
            \"@test\"
        ],
        \"cs-check\": \"phpcs\",
        \"cs-fix\": \"phpcbf\",
        \"test\": \"phpunit --colors=always\",
        \"test-coverage\": \"phpunit --colors=always --coverage-clover clover.xml\"
    }
}
", "vendor/zendframework/zend-code/composer.json", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/composer.json");
    }
}
