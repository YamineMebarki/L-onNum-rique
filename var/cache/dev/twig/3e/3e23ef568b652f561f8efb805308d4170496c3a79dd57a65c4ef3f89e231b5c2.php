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

/* vendor/doctrine/doctrine-cache-bundle/composer.json */
class __TwigTemplate_e4778592e7848cf47860f1e3ccf778409336ce532ba0afc24c56c7dac6b6d9b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/composer.json"));

        // line 1
        echo "{
    \"name\":                 \"doctrine/doctrine-cache-bundle\",
    \"homepage\":             \"https://www.doctrine-project.org\",
    \"description\":          \"Symfony Bundle for Doctrine Cache\",
    \"keywords\":             [\"cache\", \"caching\"],
    \"type\":                 \"symfony-bundle\",
    \"license\":              \"MIT\",
    \"authors\": [
        {
            \"name\":     \"Fabien Potencier\",
            \"email\":    \"fabien@symfony.com\"
        },
        {
            \"name\":     \"Benjamin Eberlei\",
            \"email\":    \"kontakt@beberlei.de\"
        },
        {
            \"name\":     \"Fabio B. Silva\",
            \"email\":    \"fabio.bat.silva@gmail.com\"
        },
        {
            \"name\":     \"Guilherme Blanco\",
            \"email\":    \"guilhermeblanco@hotmail.com\"
        },
        {
            \"name\":     \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\":     \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\":                     \">=5.3.2\",
        \"symfony/doctrine-bridge\": \"~2.7|~3.3|~4.0\",
        \"doctrine/inflector\":      \"~1.0\",
        \"doctrine/cache\":          \"^1.4.2\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":                       \"~4.8.36|~5.6|~6.5|~7.0\",
        \"symfony/phpunit-bridge\":                \"~2.7|~3.3|~4.0\",
        \"symfony/yaml\":                          \"~2.7|~3.3|~4.0\",
        \"symfony/validator\":                     \"~2.7|~3.3|~4.0\",
        \"symfony/console\":                       \"~2.7|~3.3|~4.0\",
        \"symfony/finder\":                        \"~2.7|~3.3|~4.0\",
        \"symfony/framework-bundle\":              \"~2.7|~3.3|~4.0\",
        \"symfony/security-acl\":                  \"~2.7|~3.3\",
        \"instaclick/coding-standard\":            \"~1.1\",
        \"satooshi/php-coveralls\":                \"^1.0\",
        \"squizlabs/php_codesniffer\":             \"~1.5\",
        \"instaclick/object-calisthenics-sniffs\": \"dev-master\",
        \"instaclick/symfony2-coding-standard\":   \"dev-remaster\",
        \"predis/predis\":                         \"~0.8\"
    },
    \"suggest\": {
        \"symfony/security-acl\": \"For using this bundle to cache ACLs\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\Tests\\\\\": \"Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\":                 \"doctrine/doctrine-cache-bundle\",
    \"homepage\":             \"https://www.doctrine-project.org\",
    \"description\":          \"Symfony Bundle for Doctrine Cache\",
    \"keywords\":             [\"cache\", \"caching\"],
    \"type\":                 \"symfony-bundle\",
    \"license\":              \"MIT\",
    \"authors\": [
        {
            \"name\":     \"Fabien Potencier\",
            \"email\":    \"fabien@symfony.com\"
        },
        {
            \"name\":     \"Benjamin Eberlei\",
            \"email\":    \"kontakt@beberlei.de\"
        },
        {
            \"name\":     \"Fabio B. Silva\",
            \"email\":    \"fabio.bat.silva@gmail.com\"
        },
        {
            \"name\":     \"Guilherme Blanco\",
            \"email\":    \"guilhermeblanco@hotmail.com\"
        },
        {
            \"name\":     \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\":     \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\":                     \">=5.3.2\",
        \"symfony/doctrine-bridge\": \"~2.7|~3.3|~4.0\",
        \"doctrine/inflector\":      \"~1.0\",
        \"doctrine/cache\":          \"^1.4.2\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":                       \"~4.8.36|~5.6|~6.5|~7.0\",
        \"symfony/phpunit-bridge\":                \"~2.7|~3.3|~4.0\",
        \"symfony/yaml\":                          \"~2.7|~3.3|~4.0\",
        \"symfony/validator\":                     \"~2.7|~3.3|~4.0\",
        \"symfony/console\":                       \"~2.7|~3.3|~4.0\",
        \"symfony/finder\":                        \"~2.7|~3.3|~4.0\",
        \"symfony/framework-bundle\":              \"~2.7|~3.3|~4.0\",
        \"symfony/security-acl\":                  \"~2.7|~3.3\",
        \"instaclick/coding-standard\":            \"~1.1\",
        \"satooshi/php-coveralls\":                \"^1.0\",
        \"squizlabs/php_codesniffer\":             \"~1.5\",
        \"instaclick/object-calisthenics-sniffs\": \"dev-master\",
        \"instaclick/symfony2-coding-standard\":   \"dev-remaster\",
        \"predis/predis\":                         \"~0.8\"
    },
    \"suggest\": {
        \"symfony/security-acl\": \"For using this bundle to cache ACLs\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\Tests\\\\\": \"Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
", "vendor/doctrine/doctrine-cache-bundle/composer.json", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/composer.json");
    }
}
