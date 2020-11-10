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

/* vendor/zendframework/zend-eventmanager/composer.json */
class __TwigTemplate_62300ae2542ac3538efd6aabddc74aebea7417e118f44abc713690588a849085 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/composer.json"));

        // line 1
        echo "{
    \"name\": \"zendframework/zend-eventmanager\",
    \"description\": \"Trigger and listen to events within a PHP application\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf2\",
        \"event\",
        \"events\",
        \"eventmanager\"
    ],
    \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
    \"minimum-stability\": \"dev\",
    \"prefer-stable\": true,
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2-dev\",
            \"dev-develop\": \"3.3-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\EventManager\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\EventManager\\\\\": \"test/\",
            \"ZendBench\\\\EventManager\\\\\": \"benchmarks/\"
        },
        \"files\": [
             \"test/_autoload.php\"
        ]
    },
    \"require\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
        \"athletic/athletic\": \"^0.1\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\",
        \"container-interop/container-interop\": \"^1.1.0\",
        \"zendframework/zend-coding-standard\": \"~1.0.0\"
    },
    \"suggest\": {
        \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
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
        return "vendor/zendframework/zend-eventmanager/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"zendframework/zend-eventmanager\",
    \"description\": \"Trigger and listen to events within a PHP application\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf2\",
        \"event\",
        \"events\",
        \"eventmanager\"
    ],
    \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
    \"minimum-stability\": \"dev\",
    \"prefer-stable\": true,
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2-dev\",
            \"dev-develop\": \"3.3-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\EventManager\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\EventManager\\\\\": \"test/\",
            \"ZendBench\\\\EventManager\\\\\": \"benchmarks/\"
        },
        \"files\": [
             \"test/_autoload.php\"
        ]
    },
    \"require\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
        \"athletic/athletic\": \"^0.1\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\",
        \"container-interop/container-interop\": \"^1.1.0\",
        \"zendframework/zend-coding-standard\": \"~1.0.0\"
    },
    \"suggest\": {
        \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
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
", "vendor/zendframework/zend-eventmanager/composer.json", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/composer.json");
    }
}
