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

/* vendor/doctrine/doctrine-migrations-bundle/composer.lock */
class __TwigTemplate_254e65b4d04c2620958cb1c91515bf68a5cc593ef736d283166f6573a6bb8c20 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/composer.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"5624a5acc9a356ba1a5cede9a3aef594\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Docblock Annotations Parser\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"parser\"
            ],
            \"time\": \"2017-12-06T07:11:42+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \">2.2,<2.4\"
            },
            \"require-dev\": {
                \"alcaeus/mongo-php-adapter\": \"^1.1\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^5.7\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2017-08-25T07:02:50+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"~0.1@dev\",
                \"phpunit/phpunit\": \"^5.7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Collections Abstraction library\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterator\"
            ],
            \"time\": \"2017-07-22T10:37:32+00:00\"
        },
        {
            \"name\": \"doctrine/common\",
            \"version\": \"v2.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/common.git\",
                \"reference\": \"a210246d286c77d2b89040f8691ba7b3a713d2c1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/common/zipball/a210246d286c77d2b89040f8691ba7b3a713d2c1\",
                \"reference\": \"a210246d286c77d2b89040f8691ba7b3a713d2c1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/inflector\": \"^1.0\",
                \"doctrine/lexer\": \"^1.0\",
                \"doctrine/persistence\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.3\",
                \"squizlabs/php_codesniffer\": \"^3.0\",
                \"symfony/phpunit-bridge\": \"^4.0.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.9.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Common Library for Doctrine projects\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"annotations\",
                \"collections\",
                \"eventmanager\",
                \"persistence\",
                \"spl\"
            ],
            \"time\": \"2018-07-12T21:16:12+00:00\"
        },
        {
            \"name\": \"doctrine/dbal\",
            \"version\": \"v2.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/dbal.git\",
                \"reference\": \"5140a64c08b4b607b9bedaae0cedd26f04a0e621\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/5140a64c08b4b607b9bedaae0cedd26f04a0e621\",
                \"reference\": \"5140a64c08b4b607b9bedaae0cedd26f04a0e621\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
                \"phpstan/phpstan\": \"^0.10.1\",
                \"phpunit/phpunit\": \"^7.1.2\",
                \"phpunit/phpunit-mock-objects\": \"!=3.2.4,!=3.2.5\",
                \"symfony/console\": \"^2.0.5|^3.0|^4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.5|^4.0.5\"
            },
            \"suggest\": {
                \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
            },
            \"bin\": [
                \"bin/doctrine-dbal\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.8.x-dev\",
                    \"dev-develop\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\DBAL\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                }
            ],
            \"description\": \"Database Abstraction Layer\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"persistence\",
                \"queryobject\"
            ],
            \"time\": \"2018-07-13T03:16:35+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-bundle\",
            \"version\": \"1.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
                \"reference\": \"703fad32e4c8cbe609caf45a71a1d4266c830f0f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/703fad32e4c8cbe609caf45a71a1d4266c830f0f\",
                \"reference\": \"703fad32e4c8cbe609caf45a71a1d4266c830f0f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.5.12\",
                \"doctrine/doctrine-cache-bundle\": \"~1.2\",
                \"jdorn/sql-formatter\": \"^1.2.16\",
                \"php\": \"^5.5.9|^7.0\",
                \"symfony/console\": \"~2.7|~3.0|~4.0\",
                \"symfony/dependency-injection\": \"~2.7|~3.0|~4.0\",
                \"symfony/doctrine-bridge\": \"~2.7|~3.0|~4.0\",
                \"symfony/framework-bundle\": \"^2.7.22|~3.0|~4.0\"
            },
            \"conflict\": {
                \"symfony/http-foundation\": \"<2.6\"
            },
            \"require-dev\": {
                \"doctrine/orm\": \"~2.4\",
                \"phpunit/phpunit\": \"^4.8.36|^5.7|^6.4\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"symfony/phpunit-bridge\": \"~2.7|~3.0|~4.0\",
                \"symfony/property-info\": \"~2.8|~3.0|~4.0\",
                \"symfony/validator\": \"~2.7|~3.0|~4.0\",
                \"symfony/web-profiler-bundle\": \"~2.7|~3.0|~4.0\",
                \"symfony/yaml\": \"~2.7|~3.0|~4.0\",
                \"twig/twig\": \"~1.26|~2.0\"
            },
            \"suggest\": {
                \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
                \"symfony/web-profiler-bundle\": \"To use the data collector.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org/\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineBundle\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"orm\",
                \"persistence\"
            ],
            \"time\": \"2018-04-19T14:07:39+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-cache-bundle\",
            \"version\": \"1.3.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineCacheBundle.git\",
                \"reference\": \"4c8e363f96427924e7e519c5b5119b4f54512697\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineCacheBundle/zipball/4c8e363f96427924e7e519c5b5119b4f54512697\",
                \"reference\": \"4c8e363f96427924e7e519c5b5119b4f54512697\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.4.2\",
                \"doctrine/inflector\": \"~1.0\",
                \"php\": \">=5.3.2\",
                \"symfony/doctrine-bridge\": \"~2.7|~3.3|~4.0\"
            },
            \"require-dev\": {
                \"instaclick/coding-standard\": \"~1.1\",
                \"instaclick/object-calisthenics-sniffs\": \"dev-master\",
                \"instaclick/symfony2-coding-standard\": \"dev-remaster\",
                \"phpunit/phpunit\": \"~4|~5\",
                \"predis/predis\": \"~0.8\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"squizlabs/php_codesniffer\": \"~1.5\",
                \"symfony/console\": \"~2.7|~3.3|~4.0\",
                \"symfony/finder\": \"~2.7|~3.3|~4.0\",
                \"symfony/framework-bundle\": \"~2.7|~3.3|~4.0\",
                \"symfony/phpunit-bridge\": \"~2.7|~3.3|~4.0\",
                \"symfony/security-acl\": \"~2.7|~3.3\",
                \"symfony/validator\": \"~2.7|~3.3|~4.0\",
                \"symfony/yaml\": \"~2.7|~3.3|~4.0\"
            },
            \"suggest\": {
                \"symfony/security-acl\": \"For using this bundle to cache ACLs\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Fabio B. Silva\",
                    \"email\": \"fabio.bat.silva@gmail.com\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@hotmail.com\"
                },
                {
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org/\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony Bundle for Doctrine Cache\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-03-27T09:22:12+00:00\"
        },
        {
            \"name\": \"doctrine/event-manager\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/event-manager.git\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Event Manager component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
            \"keywords\": [
                \"event\",
                \"eventdispatcher\",
                \"eventmanager\"
            ],
            \"time\": \"2018-06-11T11:59:03+00:00\"
        },
        {
            \"name\": \"doctrine/inflector\",
            \"version\": \"v1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/inflector.git\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/5527a48b7313d15261292c149e55e26eae771b0a\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Inflector\\\\\": \"lib/Doctrine/Common/Inflector\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Common String Manipulations with regard to casing and singular/plural rules.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"inflection\",
                \"pluralize\",
                \"singularize\",
                \"string\"
            ],
            \"time\": \"2018-01-09T20:05:19+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"lexer\",
                \"parser\"
            ],
            \"time\": \"2014-09-09T13:34:57+00:00\"
        },
        {
            \"name\": \"doctrine/migrations\",
            \"version\": \"v2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/migrations.git\",
                \"reference\": \"0101f5bd7f4e5043bf8630db2930f8fd7da552b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/0101f5bd7f4e5043bf8630db2930f8fd7da552b6\",
                \"reference\": \"0101f5bd7f4e5043bf8630db2930f8fd7da552b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.6\",
                \"ocramius/package-versions\": \"^1.3\",
                \"ocramius/proxy-manager\": \"^2.0.2\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"^3.4||^4.0\",
                \"symfony/stopwatch\": \"^3.4||^4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"doctrine/orm\": \"^2.6\",
                \"ext-pdo_sqlite\": \"*\",
                \"jdorn/sql-formatter\": \"^1.1\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
                \"phpstan/phpstan-phpunit\": \"^0.10\",
                \"phpstan/phpstan-strict-rules\": \"^0.10\",
                \"phpunit/phpunit\": \"^7.0\",
                \"symfony/process\": \"^3.4||^4.0\",
                \"symfony/yaml\": \"^3.4||^4.0\"
            },
            \"suggest\": {
                \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
                \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
            },
            \"bin\": [
                \"bin/doctrine-migrations\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Michael Simonson\",
                    \"email\": \"contact@mikesimonson.com\"
                }
            ],
            \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"migrations\",
                \"php\"
            ],
            \"time\": \"2019-01-03T18:59:09+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"17896f6d56a2794a1619e019596ae627aabd8fd5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/17896f6d56a2794a1619e019596ae627aabd8fd5\",
                \"reference\": \"17896f6d56a2794a1619e019596ae627aabd8fd5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Persistence abstractions.\",
            \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
            \"keywords\": [
                \"persistence\"
            ],
            \"time\": \"2018-06-14T18:57:48+00:00\"
        },
        {
            \"name\": \"doctrine/reflection\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/reflection.git\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"doctrine/common\": \"^2.8\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-phpunit\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Reflection component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
            \"keywords\": [
                \"reflection\"
            ],
            \"time\": \"2018-06-14T14:45:07+00:00\"
        },
        {
            \"name\": \"jdorn/sql-formatter\",
            \"version\": \"v1.2.17\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/jdorn/sql-formatter.git\",
                \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/jdorn/sql-formatter/zipball/64990d96e0959dff8e059dfcdc1af130728d92bc\",
                \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.2.4\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"3.7.*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"lib\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeremy Dorn\",
                    \"email\": \"jeremy@jeremydorn.com\",
                    \"homepage\": \"http://jeremydorn.com/\"
                }
            ],
            \"description\": \"a PHP SQL highlighting library\",
            \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
            \"keywords\": [
                \"highlight\",
                \"sql\"
            ],
            \"time\": \"2014-01-12T16:20:24+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"4489d5002c49d55576fa0ba786f42dbb009be46f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/4489d5002c49d55576fa0ba786f42dbb009be46f\",
                \"reference\": \"4489d5002c49d55576fa0ba786f42dbb009be46f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"ext-zip\": \"*\",
                \"infection/infection\": \"^0.7.1\",
                \"phpunit/phpunit\": \"^7.0.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"PackageVersions\\\\Installer\",
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PackageVersions\\\\\": \"src/PackageVersions\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
            \"time\": \"2018-02-05T13:05:30+00:00\"
        },
        {
            \"name\": \"ocramius/proxy-manager\",
            \"version\": \"2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
                \"reference\": \"e18ac876b2e4819c76349de8f78ccc8ef1554cd7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/e18ac876b2e4819c76349de8f78ccc8ef1554cd7\",
                \"reference\": \"e18ac876b2e4819c76349de8f78ccc8ef1554cd7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.1.1\",
                \"php\": \"^7.1.0\",
                \"zendframework/zend-code\": \"^3.1.0\"
            },
            \"require-dev\": {
                \"couscous/couscous\": \"^1.5.2\",
                \"ext-phar\": \"*\",
                \"humbug/humbug\": \"dev-master@DEV\",
                \"nikic/php-parser\": \"^3.0.4\",
                \"phpbench/phpbench\": \"^0.12.2\",
                \"phpstan/phpstan\": \"^0.6.4\",
                \"phpunit/phpunit\": \"^5.6.4\",
                \"phpunit/phpunit-mock-objects\": \"^3.4.1\",
                \"squizlabs/php_codesniffer\": \"^2.7.0\"
            },
            \"suggest\": {
                \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
                \"zendframework/zend-json\": \"To have the JsonRpc adapter (Remote Object feature)\",
                \"zendframework/zend-soap\": \"To have the Soap adapter (Remote Object feature)\",
                \"zendframework/zend-xmlrpc\": \"To have the XmlRpc adapter (Remote Object feature)\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"ProxyManager\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\",
                    \"homepage\": \"http://ocramius.github.io/\"
                }
            ],
            \"description\": \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
            \"homepage\": \"https://github.com/Ocramius/ProxyManager\",
            \"keywords\": [
                \"aop\",
                \"lazy loading\",
                \"proxy\",
                \"proxy pattern\",
                \"service proxies\"
            ],
            \"time\": \"2017-05-04T11:12:50+00:00\"
        },
        {
            \"name\": \"psr/cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/cache.git\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Cache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for caching libraries\",
            \"keywords\": [
                \"cache\",
                \"psr\",
                \"psr-6\"
            ],
            \"time\": \"2016-08-06T20:24:11+00:00\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/container.git\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Container\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
            \"homepage\": \"https://github.com/php-fig/container\",
            \"keywords\": [
                \"PSR-11\",
                \"container\",
                \"container-interface\",
                \"container-interop\",
                \"psr\"
            ],
            \"time\": \"2017-02-14T16:28:37+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Log\\\\\": \"Psr/Log/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"time\": \"2016-10-10T12:19:37+00:00\"
        },
        {
            \"name\": \"psr/simple-cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/simple-cache.git\",
                \"reference\": \"408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\",
                \"reference\": \"408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\SimpleCache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interfaces for simple caching\",
            \"keywords\": [
                \"cache\",
                \"caching\",
                \"psr\",
                \"psr-16\",
                \"simple-cache\"
            ],
            \"time\": \"2017-10-23T01:57:42+00:00\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\",
                \"reference\": \"c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"psr/simple-cache\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.4\",
                \"predis/predis\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"caching\",
                \"psr6\"
            ],
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"c868972ac26e4e19860ce11b300bb74145246ff9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/c868972ac26e4e19860ce11b300bb74145246ff9\",
                \"reference\": \"c868972ac26e4e19860ce11b300bb74145246ff9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/finder\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Config\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Config Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"ca80b8ced97cf07390078b29773dc384c39eee1f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/ca80b8ced97cf07390078b29773dc384c39eee1f\",
                \"reference\": \"ca80b8ced97cf07390078b29773dc384c39eee1f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/process\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log-implementation\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Console\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Console Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"9316545571f079c4dd183e674721d9dc783ce196\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/9316545571f079c4dd183e674721d9dc783ce196\",
                \"reference\": \"9316545571f079c4dd183e674721d9dc783ce196\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Debug\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Debug Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"f4f401fc2766eb8d766fc6043d9e6489b37a41e4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/f4f401fc2766eb8d766fc6043d9e6489b37a41e4\",
                \"reference\": \"f4f401fc2766eb8d766fc6043d9e6489b37a41e4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.1.1\",
                \"symfony/finder\": \"<3.4\",
                \"symfony/proxy-manager-bridge\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~4.1\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using expressions in service container configuration\",
                \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
                \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony DependencyInjection Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T08:24:03+00:00\"
        },
        {
            \"name\": \"symfony/doctrine-bridge\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
                \"reference\": \"3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\",
                \"reference\": \"3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/common\": \"~2.4@stable\",
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/data-fixtures\": \"1.0.*\",
                \"doctrine/dbal\": \"~2.4\",
                \"doctrine/orm\": \"^2.4.5\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
                \"symfony/security\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/data-fixtures\": \"\",
                \"doctrine/dbal\": \"\",
                \"doctrine/orm\": \"\",
                \"symfony/form\": \"\",
                \"symfony/property-info\": \"\",
                \"symfony/validator\": \"\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Doctrine Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"bfb30c2ad377615a463ebbc875eba64a99f6aa3e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/bfb30c2ad377615a463ebbc875eba64a99f6aa3e\",
                \"reference\": \"bfb30c2ad377615a463ebbc875eba64a99f6aa3e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony EventDispatcher Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T09:10:45+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"2e30335e0aafeaa86645555959572fe7cea22b43\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/2e30335e0aafeaa86645555959572fe7cea22b43\",
                \"reference\": \"2e30335e0aafeaa86645555959572fe7cea22b43\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Filesystem Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"e162f1df3102d0b7472805a5a9d5db9fcf0a8068\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/e162f1df3102d0b7472805a5a9d5db9fcf0a8068\",
                \"reference\": \"e162f1df3102d0b7472805a5a9d5db9fcf0a8068\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Finder Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\",
                \"reference\": \"ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.1.1\",
                \"symfony/event-dispatcher\": \"^4.1\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^4.1\",
                \"symfony/http-kernel\": \"^4.1\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"^4.1\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.4\",
                \"symfony/console\": \"<3.4\",
                \"symfony/form\": \"<4.1\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/serializer\": \"<4.1\",
                \"symfony/stopwatch\": \"<3.4\",
                \"symfony/translation\": \"<3.4\",
                \"symfony/twig-bridge\": \"<4.1.1\",
                \"symfony/validator\": \"<4.1\",
                \"symfony/workflow\": \"<4.1\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.1\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/messenger\": \"^4.1\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/security\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"^4.1\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^4.1\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"^4.1\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-apcu\": \"For best performance of the system caches\",
                \"symfony/console\": \"For using the console commands\",
                \"symfony/form\": \"For using forms\",
                \"symfony/property-info\": \"For using the property_info service\",
                \"symfony/serializer\": \"For using the serializer service\",
                \"symfony/validator\": \"For using validation\",
                \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
                \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony FrameworkBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T08:24:03+00:00\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\",
                \"reference\": \"7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"predis/predis\": \"~1.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony HttpFoundation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T14:07:44+00:00\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"6347be5110efb27fe45ea04bf213078b67a05036\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/6347be5110efb27fe45ea04bf213078b67a05036\",
                \"reference\": \"6347be5110efb27fe45ea04bf213078b67a05036\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~4.1\",
                \"symfony/http-foundation\": \"^4.1.1\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<4.1\",
                \"symfony/var-dumper\": \"<4.1.1\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.1\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"suggest\": {
                \"symfony/browser-kit\": \"\",
                \"symfony/config\": \"\",
                \"symfony/console\": \"\",
                \"symfony/dependency-injection\": \"\",
                \"symfony/var-dumper\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony HttpKernel Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T15:30:34+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"e3d826245268269cd66f8326bd8bc066687b4a19\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/e3d826245268269cd66f8326bd8bc066687b4a19\",
                \"reference\": \"e3d826245268269cd66f8326bd8bc066687b4a19\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                }
            ],
            \"description\": \"Symfony polyfill for ctype functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"ctype\",
                \"polyfill\",
                \"portable\"
            ],
            \"time\": \"2018-08-06T14:22:27+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"d0cd638f4634c16d8df4508e847f14e9e43168b8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/d0cd638f4634c16d8df4508e847f14e9e43168b8\",
                \"reference\": \"d0cd638f4634c16d8df4508e847f14e9e43168b8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony polyfill for the Mbstring extension\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"mbstring\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2018-08-06T14:22:27+00:00\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\",
                \"reference\": \"6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/dependency-injection\": \"For loading routes from a service\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Routing Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"router\",
                \"routing\",
                \"uri\",
                \"url\"
            ],
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"966c982df3cca41324253dc0c7ffe76b6076b705\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/966c982df3cca41324253dc0c7ffe76b6076b705\",
                \"reference\": \"966c982df3cca41324253dc0c7ffe76b6076b705\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Stopwatch Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:00:49+00:00\"
        },
        {
            \"name\": \"zendframework/zend-code\",
            \"version\": \"3.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-code.git\",
                \"reference\": \"c21db169075c6ec4b342149f446e7b7b724f95eb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/c21db169075c6ec4b342149f446e7b7b724f95eb\",
                \"reference\": \"c21db169075c6ec4b342149f446e7b7b724f95eb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^6.2.3\",
                \"zendframework/zend-coding-standard\": \"^1.0.0\",
                \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
                \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3.x-dev\",
                    \"dev-develop\": \"3.4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Zend\\\\Code\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"provides facilities to generate arbitrary code using an object oriented interface\",
            \"homepage\": \"https://github.com/zendframework/zend-code\",
            \"keywords\": [
                \"code\",
                \"zf2\"
            ],
            \"time\": \"2018-08-13T20:36:59+00:00\"
        },
        {
            \"name\": \"zendframework/zend-eventmanager\",
            \"version\": \"3.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-eventmanager.git\",
                \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-eventmanager/zipball/a5e2583a211f73604691586b8406ff7296a946dd\",
                \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"^0.1\",
                \"container-interop/container-interop\": \"^1.1.0\",
                \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
                \"zendframework/zend-coding-standard\": \"~1.0.0\",
                \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\"
            },
            \"suggest\": {
                \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
                \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
            },
            \"type\": \"library\",
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
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"Trigger and listen to events within a PHP application\",
            \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
            \"keywords\": [
                \"event\",
                \"eventmanager\",
                \"events\",
                \"zf2\"
            ],
            \"time\": \"2018-04-25T15:33:34+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.4.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"*\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"wimg/php-compatibility\": \"^8.0\"
            },
            \"suggest\": {
                \"dealerdirect/qa-tools\": \"All the PHP QA tools you'll need\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\Plugin\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Franck Nijhof\",
                    \"email\": \"f.nijhof@dealerdirect.nl\",
                    \"homepage\": \"http://workingatdealerdirect.eu\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://workingatdealerdirect.eu\",
            \"keywords\": [
                \"PHPCodeSniffer\",
                \"PHP_CodeSniffer\",
                \"code quality\",
                \"codesniffer\",
                \"composer\",
                \"installer\",
                \"phpcs\",
                \"plugin\",
                \"qa\",
                \"quality\",
                \"standard\",
                \"standards\",
                \"style guide\",
                \"stylecheck\",
                \"tests\"
            ],
            \"time\": \"2017-12-06T16:27:17+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"5.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"bb8de042a25c4fb59a2c55c350dc55cc00227a8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/bb8de042a25c4fb59a2c55c350dc55cc00227a8c\",
                \"reference\": \"bb8de042a25c4fb59a2c55c350dc55cc00227a8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"php\": \"^7.1\",
                \"slevomat/coding-standard\": \"^4.8.0\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Sniffs\\\\\": \"lib/Doctrine/Sniffs\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Steve Müller\",
                    \"email\": \"st.mueller@dzh-online.de\"
                }
            ],
            \"description\": \"The Doctrine Coding Standard is a set of PHPCS rules applied to all Doctrine projects.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/coding-standard.html\",
            \"keywords\": [
                \"checks\",
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"rules\",
                \"sniffer\",
                \"sniffs\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2018-09-24T19:08:56+00:00\"
        },
        {
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\",
                \"reference\": \"185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"~0.1.8\",
                \"ext-pdo\": \"*\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^6.2.3\",
                \"squizlabs/php_codesniffer\": \"^3.0.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\",
                    \"homepage\": \"http://ocramius.github.com/\"
                }
            ],
            \"description\": \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
            \"homepage\": \"https://github.com/doctrine/instantiator\",
            \"keywords\": [
                \"constructor\",
                \"instantiate\"
            ],
            \"time\": \"2017-07-22T11:58:36+00:00\"
        },
        {
            \"name\": \"jean85/pretty-package-versions\",
            \"version\": \"1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Jean85/pretty-package-versions.git\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Jean85/pretty-package-versions/zipball/75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.2.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Jean85\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Alessandro Lai\",
                    \"email\": \"alessandro.lai85@gmail.com\"
                }
            ],
            \"description\": \"A wrapper for ocramius/package-versions to get pretty versions strings\",
            \"keywords\": [
                \"composer\",
                \"package\",
                \"release\",
                \"versions\"
            ],
            \"time\": \"2018-06-13T13:22:40+00:00\"
        },
        {
            \"name\": \"mikey179/vfsStream\",
            \"version\": \"v1.6.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/mikey179/vfsStream.git\",
                \"reference\": \"d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/mikey179/vfsStream/zipball/d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\",
                \"reference\": \"d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"org\\\\bovigo\\\\vfs\\\\\": \"src/main/php\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Frank Kleine\",
                    \"homepage\": \"http://frankkleine.de/\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Virtual file system to mock the real file system in unit tests.\",
            \"homepage\": \"http://vfs.bovigo.org/\",
            \"time\": \"2017-08-01T08:02:14+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\",
                \"reference\": \"3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"replace\": {
                \"myclabs/deep-copy\": \"self.version\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"DeepCopy\\\\\": \"src/DeepCopy/\"
                },
                \"files\": [
                    \"src/DeepCopy/deep_copy.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Create deep copies (clones) of your objects\",
            \"keywords\": [
                \"clone\",
                \"copy\",
                \"duplicate\",
                \"object\",
                \"object graph\"
            ],
            \"time\": \"2018-06-11T23:09:50+00:00\"
        },
        {
            \"name\": \"nette/bootstrap\",
            \"version\": \"v2.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/bootstrap.git\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/bootstrap/zipball/268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/di\": \"~2.4.7\",
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"latte/latte\": \"~2.2\",
                \"nette/application\": \"~2.3\",
                \"nette/caching\": \"~2.3\",
                \"nette/database\": \"~2.3\",
                \"nette/forms\": \"~2.3\",
                \"nette/http\": \"~2.4.0\",
                \"nette/mail\": \"~2.3\",
                \"nette/robot-loader\": \"^2.4.2 || ^3.0\",
                \"nette/safe-stream\": \"~2.2\",
                \"nette/security\": \"~2.3\",
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.4.1\"
            },
            \"suggest\": {
                \"nette/robot-loader\": \"to use Configurator::createRobotLoader()\",
                \"tracy/tracy\": \"to use Configurator::enableTracy()\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🅱 Nette Bootstrap: the simple way to configure and bootstrap your Nette application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"bootstrapping\",
                \"configurator\",
                \"nette\"
            ],
            \"time\": \"2018-05-17T12:52:20+00:00\"
        },
        {
            \"name\": \"nette/di\",
            \"version\": \"v2.4.13\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/di.git\",
                \"reference\": \"3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/di/zipball/3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\",
                \"reference\": \"3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/neon\": \"^2.3.3 || ~3.0.0\",
                \"nette/php-generator\": \"^2.6.1 || ~3.0.0\",
                \"nette/utils\": \"^2.4.3 || ~3.0.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/bootstrap\": \"<2.4\",
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"💎 Nette Dependency Injection Container: Flexible, compiled and full-featured DIC with perfectly usable autowiring and support for all new PHP 7.1 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"compiled\",
                \"di\",
                \"dic\",
                \"factory\",
                \"ioc\",
                \"nette\",
                \"static\"
            ],
            \"time\": \"2018-06-11T08:46:01+00:00\"
        },
        {
            \"name\": \"nette/finder\",
            \"version\": \"v2.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/finder.git\",
                \"reference\": \"ee951a656cb8ac622e5dd33474a01fd2470505a0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/finder/zipball/ee951a656cb8ac622e5dd33474a01fd2470505a0\",
                \"reference\": \"ee951a656cb8ac622e5dd33474a01fd2470505a0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🔍 Nette Finder: find files and directories with an intuitive API.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"filesystem\",
                \"glob\",
                \"iterator\",
                \"nette\"
            ],
            \"time\": \"2018-06-28T11:49:23+00:00\"
        },
        {
            \"name\": \"nette/neon\",
            \"version\": \"v2.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/neon.git\",
                \"reference\": \"5e72b1dd3e2d34f0863c5561139a19df6a1ef398\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/neon/zipball/5e72b1dd3e2d34f0863c5561139a19df6a1ef398\",
                \"reference\": \"5e72b1dd3e2d34f0863c5561139a19df6a1ef398\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-iconv\": \"*\",
                \"ext-json\": \"*\",
                \"php\": \">=5.6.0\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍸 Nette NEON: encodes and decodes NEON file format.\",
            \"homepage\": \"http://ne-on.org\",
            \"keywords\": [
                \"export\",
                \"import\",
                \"neon\",
                \"nette\",
                \"yaml\"
            ],
            \"time\": \"2018-03-21T12:12:21+00:00\"
        },
        {
            \"name\": \"nette/php-generator\",
            \"version\": \"v3.0.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/php-generator.git\",
                \"reference\": \"ea90209c2e8a7cd087b2742ca553c047a8df5eff\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/php-generator/zipball/ea90209c2e8a7cd087b2742ca553c047a8df5eff\",
                \"reference\": \"ea90209c2e8a7cd087b2742ca553c047a8df5eff\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4.2 || ~3.0.0\",
                \"php\": \">=7.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🐘 Nette PHP Generator: generates neat PHP code for you. Supports new PHP 7.2 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"code\",
                \"nette\",
                \"php\",
                \"scaffolding\"
            ],
            \"time\": \"2018-08-09T14:32:27+00:00\"
        },
        {
            \"name\": \"nette/robot-loader\",
            \"version\": \"v3.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/robot-loader.git\",
                \"reference\": \"3cf88781a05e0bf4618ae605361afcbaa4d5b392\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/robot-loader/zipball/3cf88781a05e0bf4618ae605361afcbaa4d5b392\",
                \"reference\": \"3cf88781a05e0bf4618ae605361afcbaa4d5b392\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/finder\": \"^2.3 || ^3.0\",
                \"nette/utils\": \"^2.4 || ^3.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍀 Nette RobotLoader: high performance and comfortable autoloader that will search and autoload classes within your application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"autoload\",
                \"class\",
                \"interface\",
                \"nette\",
                \"trait\"
            ],
            \"time\": \"2018-06-22T09:34:04+00:00\"
        },
        {
            \"name\": \"nette/utils\",
            \"version\": \"v2.5.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/utils.git\",
                \"reference\": \"183069866dc477fcfbac393ed486aaa6d93d19a5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/utils/zipball/183069866dc477fcfbac393ed486aaa6d93d19a5\",
                \"reference\": \"183069866dc477fcfbac393ed486aaa6d93d19a5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"suggest\": {
                \"ext-gd\": \"to use Image\",
                \"ext-iconv\": \"to use Strings::webalize() and toAscii()\",
                \"ext-intl\": \"for script transliteration in Strings::webalize() and toAscii()\",
                \"ext-json\": \"to use Nette\\\\Utils\\\\Json\",
                \"ext-mbstring\": \"to use Strings::lower() etc...\",
                \"ext-xml\": \"to use Strings::length() etc. when mbstring is not available\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ],
                \"files\": [
                    \"src/loader.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🛠 Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"array\",
                \"core\",
                \"datetime\",
                \"images\",
                \"json\",
                \"nette\",
                \"paginator\",
                \"password\",
                \"slugify\",
                \"string\",
                \"unicode\",
                \"utf-8\",
                \"utility\",
                \"validation\"
            ],
            \"time\": \"2018-05-02T17:16:08+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v3.1.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0|~5.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PhpParser\\\\\": \"lib/PhpParser\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nikita Popov\"
                }
            ],
            \"description\": \"A PHP parser written in PHP\",
            \"keywords\": [
                \"parser\",
                \"php\"
            ],
            \"time\": \"2018-02-28T20:30:58+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Component for reading phar.io manifest information from a PHP Archive (PHAR)\",
            \"time\": \"2018-07-08T19:23:20+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Library for handling version information and constraints\",
            \"time\": \"2018-07-08T19:19:57+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"opensource@ijaap.nl\"
                }
            ],
            \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
            \"homepage\": \"http://www.phpdoc.org\",
            \"keywords\": [
                \"FQSEN\",
                \"phpDocumentor\",
                \"phpdoc\",
                \"reflection\",
                \"static analysis\"
            ],
            \"time\": \"2017-09-11T18:02:19+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"94fd0001232e47129dd3504189fa1c7225010d08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/94fd0001232e47129dd3504189fa1c7225010d08\",
                \"reference\": \"94fd0001232e47129dd3504189fa1c7225010d08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0\",
                \"phpdocumentor/type-resolver\": \"^0.4.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"~1.0.5\",
                \"mockery/mockery\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
            \"time\": \"2017-11-30T07:14:17+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"0.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5 || ^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^5.2||^4.8.24\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"time\": \"2017-07-14T14:27:02+00:00\"
        },
        {
            \"name\": \"phpspec/prophecy\",
            \"version\": \"1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"4ba436b55987b4bf311cb7c6ba82aa528aac0a06\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/4ba436b55987b4bf311cb7c6ba82aa528aac0a06\",
                \"reference\": \"4ba436b55987b4bf311cb7c6ba82aa528aac0a06\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.2\",
                \"php\": \"^5.3|^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^2.0|^3.0.2|^4.0\",
                \"sebastian/comparator\": \"^1.1|^2.0|^3.0\",
                \"sebastian/recursion-context\": \"^1.0|^2.0|^3.0\"
            },
            \"require-dev\": {
                \"phpspec/phpspec\": \"^2.5|^3.2\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5 || ^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Prophecy\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Konstantin Kudryashov\",
                    \"email\": \"ever.zet@gmail.com\",
                    \"homepage\": \"http://everzet.com\"
                },
                {
                    \"name\": \"Marcello Duarte\",
                    \"email\": \"marcello.duarte@gmail.com\"
                }
            ],
            \"description\": \"Highly opinionated mocking framework for PHP 5.3+\",
            \"homepage\": \"https://github.com/phpspec/prophecy\",
            \"keywords\": [
                \"Double\",
                \"Dummy\",
                \"fake\",
                \"mock\",
                \"spy\",
                \"stub\"
            ],
            \"time\": \"2018-08-05T17:53:17+00:00\"
        },
        {
            \"name\": \"phpstan/phpdoc-parser\",
            \"version\": \"0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"02f909f134fe06f0cd4790d8627ee24efbe84d6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/02f909f134fe06f0cd4790d8627ee24efbe84d6a\",
                \"reference\": \"02f909f134fe06f0cd4790d8627ee24efbe84d6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^3.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\PhpDocParser\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPDoc parser with support for nullable, intersection and generic types\",
            \"time\": \"2018-01-13T18:19:41+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan\",
            \"version\": \"0.9.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan.git\",
                \"reference\": \"e59541bcc7cac9b35ca54db6365bf377baf4a488\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan/zipball/e59541bcc7cac9b35ca54db6365bf377baf4a488\",
                \"reference\": \"e59541bcc7cac9b35ca54db6365bf377baf4a488\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"jean85/pretty-package-versions\": \"^1.0.3\",
                \"nette/bootstrap\": \"^2.4 || ^3.0\",
                \"nette/di\": \"^2.4.7 || ^3.0\",
                \"nette/robot-loader\": \"^3.0.1\",
                \"nette/utils\": \"^2.4.5 || ^3.0\",
                \"nikic/php-parser\": \"^3.1\",
                \"php\": \"~7.0\",
                \"phpstan/phpdoc-parser\": \"^0.2\",
                \"symfony/console\": \"~3.2 || ~4.0\",
                \"symfony/finder\": \"~3.2 || ~4.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"2.2.1\",
                \"ext-gd\": \"*\",
                \"ext-intl\": \"*\",
                \"ext-mysqli\": \"*\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-php-parser\": \"^0.9\",
                \"phpstan/phpstan-phpunit\": \"^0.9.3\",
                \"phpstan/phpstan-strict-rules\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.5.4\",
                \"slevomat/coding-standard\": \"4.0.0\"
            },
            \"bin\": [
                \"bin/phpstan\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": [
                        \"src/\",
                        \"build/PHPStan\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPStan - PHP Static Analysis Tool\",
            \"time\": \"2018-01-28T13:22:19+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan-strict-rules\",
            \"version\": \"0.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan-strict-rules.git\",
                \"reference\": \"15be9090622c6b85c079922308f831018d8d9e23\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan-strict-rules/zipball/15be9090622c6b85c079922308f831018d8d9e23\",
                \"reference\": \"15be9090622c6b85c079922308f831018d8d9e23\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.0\",
                \"phpstan/phpstan\": \"^0.9\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-phpunit\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.4\",
                \"slevomat/coding-standard\": \"^3.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Extra strict and opinionated rules for PHPStan\",
            \"time\": \"2017-11-26T20:12:30+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"865662550c384bc1db7e51d29aeda1c2c161d69a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/865662550c384bc1db7e51d29aeda1c2c161d69a\",
                \"reference\": \"865662550c384bc1db7e51d29aeda1c2c161d69a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^2.0\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-06-01T07:51:50+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"cecbc684605bb0cc288828eb5d65d93d5c676d3c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/cecbc684605bb0cc288828eb5d65d93d5c676d3c\",
                \"reference\": \"cecbc684605bb0cc288828eb5d65d93d5c676d3c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2018-06-11T11:44:00+00:00\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2015-06-21T13:50:34+00:00\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"8b8454ea6958c3dee38453d3bd571e023108c91f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/8b8454ea6958c3dee38453d3bd571e023108c91f\",
                \"reference\": \"8b8454ea6958c3dee38453d3bd571e023108c91f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2018-02-01T13:07:23+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"21ad88bbba7c3d93530d93994e0a33cd45f02ace\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/21ad88bbba7c3d93530d93994e0a33cd45f02ace\",
                \"reference\": \"21ad88bbba7c3d93530d93994e0a33cd45f02ace\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2018-02-01T13:16:43+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"f9b14c17860eccb440a0352a117a81eb754cff5a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/f9b14c17860eccb440a0352a117a81eb754cff5a\",
                \"reference\": \"f9b14c17860eccb440a0352a117a81eb754cff5a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.1\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.7\",
                \"phar-io/manifest\": \"^1.0.2\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.7\",
                \"phpunit/php-file-iterator\": \"^2.0.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.0\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^1.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit-mock-objects\": \"*\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.3-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"The PHP Unit Testing framework.\",
            \"homepage\": \"https://phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-08-07T06:44:28+00:00\"
        },
        {
            \"name\": \"sebastian/code-unit-reverse-lookup\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup.git\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7 || ^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Looks up which function or method a line of code belongs to\",
            \"homepage\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/\",
            \"time\": \"2017-03-04T06:30:41+00:00\"
        },
        {
            \"name\": \"sebastian/comparator\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides the functionality to compare PHP values for equality\",
            \"homepage\": \"https://github.com/sebastianbergmann/comparator\",
            \"keywords\": [
                \"comparator\",
                \"compare\",
                \"equality\"
            ],
            \"time\": \"2018-07-12T15:12:46+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"366541b989927187c4ca70490a35615d3fef2dce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/366541b989927187c4ca70490a35615d3fef2dce\",
                \"reference\": \"366541b989927187c4ca70490a35615d3fef2dce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\",
                \"symfony/process\": \"^2 || ^3.3 || ^4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Diff implementation\",
            \"homepage\": \"https://github.com/sebastianbergmann/diff\",
            \"keywords\": [
                \"diff\",
                \"udiff\",
                \"unidiff\",
                \"unified diff\"
            ],
            \"time\": \"2018-06-10T07:54:39+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"cd0871b3975fb7fc44d11314fd1ee20925fce4f5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/cd0871b3975fb7fc44d11314fd1ee20925fce4f5\",
                \"reference\": \"cd0871b3975fb7fc44d11314fd1ee20925fce4f5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides functionality to handle HHVM/PHP environments\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/environment\",
            \"keywords\": [
                \"Xdebug\",
                \"environment\",
                \"hhvm\"
            ],
            \"time\": \"2017-07-01T08:51:00+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-mbstring\": \"*\",
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2017-04-03T13:19:02+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2017-04-27T15:39:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-enumerator\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-enumerator.git\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Traverses array structures and object graphs to enumerate all referenced objects\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-enumerator/\",
            \"time\": \"2017-08-03T12:35:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-reflector\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-reflector.git\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Allows reflection of object attributes, including inherited and non-public ones\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-reflector/\",
            \"time\": \"2017-03-29T09:07:27+00:00\"
        },
        {
            \"name\": \"sebastian/recursion-context\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/recursion-context.git\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides functionality to recursively process PHP variables\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/recursion-context\",
            \"time\": \"2017-03-03T06:23:57+00:00\"
        },
        {
            \"name\": \"sebastian/resource-operations\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\",
                \"reference\": \"ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2015-07-28T20:34:47+00:00\"
        },
        {
            \"name\": \"sebastian/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/version.git\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that helps with managing the version number of Git-hosted PHP projects\",
            \"homepage\": \"https://github.com/sebastianbergmann/version\",
            \"time\": \"2016-10-03T07:35:21+00:00\"
        },
        {
            \"name\": \"slevomat/coding-standard\",
            \"version\": \"4.8.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"5e878708a16a75ed11a7d9aa02f50c257065d4fe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/5e878708a16a75ed11a7d9aa02f50c257065d4fe\",
                \"reference\": \"5e878708a16a75ed11a7d9aa02f50c257065d4fe\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"^3.3.0\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.9.2\",
                \"phpstan/phpstan-phpunit\": \"0.9.4\",
                \"phpstan/phpstan-strict-rules\": \"0.9\",
                \"phpunit/phpunit\": \"7.3.5\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"autoload\": {
                \"psr-4\": {
                    \"SlevomatCodingStandard\\\\\": \"SlevomatCodingStandard\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Slevomat Coding Standard for PHP_CodeSniffer complements Consistence Coding Standard by providing sniffs with additional checks.\",
            \"time\": \"2018-09-25T06:49:15+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"6ad28354c04b364c3c71a34e4a18b629cc3b231e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/6ad28354c04b364c3c71a34e4a18b629cc3b231e\",
                \"reference\": \"6ad28354c04b364c3c71a34e4a18b629cc3b231e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.4.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.0 || ^5.0 || ^6.0 || ^7.0\"
            },
            \"bin\": [
                \"bin/phpcs\",
                \"bin/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Greg Sherwood\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.\",
            \"homepage\": \"http://www.squizlabs.com/php-codesniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2018-09-23T23:08:17+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"cb2f008f3f05af2893a87208fe6a6c4985483f8b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/cb2f008f3f05af2893a87208fe6a6c4985483f8b\",
                \"reference\": \"cb2f008f3f05af2893a87208fe6a6c4985483f8b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2017-04-07T12:08:54+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"0df1908962e7a3071564e857d86874dad1ef204a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/0df1908962e7a3071564e857d86874dad1ef204a\",
                \"reference\": \"0df1908962e7a3071564e857d86874dad1ef204a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Assert\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Assertions to validate method input/output with nice error messages.\",
            \"keywords\": [
                \"assert\",
                \"check\",
                \"validate\"
            ],
            \"time\": \"2018-01-29T19:49:41+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"5624a5acc9a356ba1a5cede9a3aef594\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Docblock Annotations Parser\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"parser\"
            ],
            \"time\": \"2017-12-06T07:11:42+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \">2.2,<2.4\"
            },
            \"require-dev\": {
                \"alcaeus/mongo-php-adapter\": \"^1.1\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^5.7\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2017-08-25T07:02:50+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"~0.1@dev\",
                \"phpunit/phpunit\": \"^5.7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Collections Abstraction library\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterator\"
            ],
            \"time\": \"2017-07-22T10:37:32+00:00\"
        },
        {
            \"name\": \"doctrine/common\",
            \"version\": \"v2.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/common.git\",
                \"reference\": \"a210246d286c77d2b89040f8691ba7b3a713d2c1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/common/zipball/a210246d286c77d2b89040f8691ba7b3a713d2c1\",
                \"reference\": \"a210246d286c77d2b89040f8691ba7b3a713d2c1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/inflector\": \"^1.0\",
                \"doctrine/lexer\": \"^1.0\",
                \"doctrine/persistence\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.3\",
                \"squizlabs/php_codesniffer\": \"^3.0\",
                \"symfony/phpunit-bridge\": \"^4.0.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.9.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Common Library for Doctrine projects\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"annotations\",
                \"collections\",
                \"eventmanager\",
                \"persistence\",
                \"spl\"
            ],
            \"time\": \"2018-07-12T21:16:12+00:00\"
        },
        {
            \"name\": \"doctrine/dbal\",
            \"version\": \"v2.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/dbal.git\",
                \"reference\": \"5140a64c08b4b607b9bedaae0cedd26f04a0e621\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/5140a64c08b4b607b9bedaae0cedd26f04a0e621\",
                \"reference\": \"5140a64c08b4b607b9bedaae0cedd26f04a0e621\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
                \"phpstan/phpstan\": \"^0.10.1\",
                \"phpunit/phpunit\": \"^7.1.2\",
                \"phpunit/phpunit-mock-objects\": \"!=3.2.4,!=3.2.5\",
                \"symfony/console\": \"^2.0.5|^3.0|^4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.5|^4.0.5\"
            },
            \"suggest\": {
                \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
            },
            \"bin\": [
                \"bin/doctrine-dbal\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.8.x-dev\",
                    \"dev-develop\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\DBAL\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                }
            ],
            \"description\": \"Database Abstraction Layer\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"persistence\",
                \"queryobject\"
            ],
            \"time\": \"2018-07-13T03:16:35+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-bundle\",
            \"version\": \"1.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
                \"reference\": \"703fad32e4c8cbe609caf45a71a1d4266c830f0f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/703fad32e4c8cbe609caf45a71a1d4266c830f0f\",
                \"reference\": \"703fad32e4c8cbe609caf45a71a1d4266c830f0f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.5.12\",
                \"doctrine/doctrine-cache-bundle\": \"~1.2\",
                \"jdorn/sql-formatter\": \"^1.2.16\",
                \"php\": \"^5.5.9|^7.0\",
                \"symfony/console\": \"~2.7|~3.0|~4.0\",
                \"symfony/dependency-injection\": \"~2.7|~3.0|~4.0\",
                \"symfony/doctrine-bridge\": \"~2.7|~3.0|~4.0\",
                \"symfony/framework-bundle\": \"^2.7.22|~3.0|~4.0\"
            },
            \"conflict\": {
                \"symfony/http-foundation\": \"<2.6\"
            },
            \"require-dev\": {
                \"doctrine/orm\": \"~2.4\",
                \"phpunit/phpunit\": \"^4.8.36|^5.7|^6.4\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"symfony/phpunit-bridge\": \"~2.7|~3.0|~4.0\",
                \"symfony/property-info\": \"~2.8|~3.0|~4.0\",
                \"symfony/validator\": \"~2.7|~3.0|~4.0\",
                \"symfony/web-profiler-bundle\": \"~2.7|~3.0|~4.0\",
                \"symfony/yaml\": \"~2.7|~3.0|~4.0\",
                \"twig/twig\": \"~1.26|~2.0\"
            },
            \"suggest\": {
                \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
                \"symfony/web-profiler-bundle\": \"To use the data collector.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org/\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineBundle\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"orm\",
                \"persistence\"
            ],
            \"time\": \"2018-04-19T14:07:39+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-cache-bundle\",
            \"version\": \"1.3.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineCacheBundle.git\",
                \"reference\": \"4c8e363f96427924e7e519c5b5119b4f54512697\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineCacheBundle/zipball/4c8e363f96427924e7e519c5b5119b4f54512697\",
                \"reference\": \"4c8e363f96427924e7e519c5b5119b4f54512697\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.4.2\",
                \"doctrine/inflector\": \"~1.0\",
                \"php\": \">=5.3.2\",
                \"symfony/doctrine-bridge\": \"~2.7|~3.3|~4.0\"
            },
            \"require-dev\": {
                \"instaclick/coding-standard\": \"~1.1\",
                \"instaclick/object-calisthenics-sniffs\": \"dev-master\",
                \"instaclick/symfony2-coding-standard\": \"dev-remaster\",
                \"phpunit/phpunit\": \"~4|~5\",
                \"predis/predis\": \"~0.8\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"squizlabs/php_codesniffer\": \"~1.5\",
                \"symfony/console\": \"~2.7|~3.3|~4.0\",
                \"symfony/finder\": \"~2.7|~3.3|~4.0\",
                \"symfony/framework-bundle\": \"~2.7|~3.3|~4.0\",
                \"symfony/phpunit-bridge\": \"~2.7|~3.3|~4.0\",
                \"symfony/security-acl\": \"~2.7|~3.3\",
                \"symfony/validator\": \"~2.7|~3.3|~4.0\",
                \"symfony/yaml\": \"~2.7|~3.3|~4.0\"
            },
            \"suggest\": {
                \"symfony/security-acl\": \"For using this bundle to cache ACLs\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Fabio B. Silva\",
                    \"email\": \"fabio.bat.silva@gmail.com\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@hotmail.com\"
                },
                {
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org/\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony Bundle for Doctrine Cache\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-03-27T09:22:12+00:00\"
        },
        {
            \"name\": \"doctrine/event-manager\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/event-manager.git\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Event Manager component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
            \"keywords\": [
                \"event\",
                \"eventdispatcher\",
                \"eventmanager\"
            ],
            \"time\": \"2018-06-11T11:59:03+00:00\"
        },
        {
            \"name\": \"doctrine/inflector\",
            \"version\": \"v1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/inflector.git\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/5527a48b7313d15261292c149e55e26eae771b0a\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Inflector\\\\\": \"lib/Doctrine/Common/Inflector\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Common String Manipulations with regard to casing and singular/plural rules.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"inflection\",
                \"pluralize\",
                \"singularize\",
                \"string\"
            ],
            \"time\": \"2018-01-09T20:05:19+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"lexer\",
                \"parser\"
            ],
            \"time\": \"2014-09-09T13:34:57+00:00\"
        },
        {
            \"name\": \"doctrine/migrations\",
            \"version\": \"v2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/migrations.git\",
                \"reference\": \"0101f5bd7f4e5043bf8630db2930f8fd7da552b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/0101f5bd7f4e5043bf8630db2930f8fd7da552b6\",
                \"reference\": \"0101f5bd7f4e5043bf8630db2930f8fd7da552b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.6\",
                \"ocramius/package-versions\": \"^1.3\",
                \"ocramius/proxy-manager\": \"^2.0.2\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"^3.4||^4.0\",
                \"symfony/stopwatch\": \"^3.4||^4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"doctrine/orm\": \"^2.6\",
                \"ext-pdo_sqlite\": \"*\",
                \"jdorn/sql-formatter\": \"^1.1\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
                \"phpstan/phpstan-phpunit\": \"^0.10\",
                \"phpstan/phpstan-strict-rules\": \"^0.10\",
                \"phpunit/phpunit\": \"^7.0\",
                \"symfony/process\": \"^3.4||^4.0\",
                \"symfony/yaml\": \"^3.4||^4.0\"
            },
            \"suggest\": {
                \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
                \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
            },
            \"bin\": [
                \"bin/doctrine-migrations\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Michael Simonson\",
                    \"email\": \"contact@mikesimonson.com\"
                }
            ],
            \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
            \"keywords\": [
                \"database\",
                \"dbal\",
                \"migrations\",
                \"php\"
            ],
            \"time\": \"2019-01-03T18:59:09+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"17896f6d56a2794a1619e019596ae627aabd8fd5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/17896f6d56a2794a1619e019596ae627aabd8fd5\",
                \"reference\": \"17896f6d56a2794a1619e019596ae627aabd8fd5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Persistence abstractions.\",
            \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
            \"keywords\": [
                \"persistence\"
            ],
            \"time\": \"2018-06-14T18:57:48+00:00\"
        },
        {
            \"name\": \"doctrine/reflection\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/reflection.git\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"doctrine/common\": \"^2.8\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-phpunit\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Doctrine Reflection component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
            \"keywords\": [
                \"reflection\"
            ],
            \"time\": \"2018-06-14T14:45:07+00:00\"
        },
        {
            \"name\": \"jdorn/sql-formatter\",
            \"version\": \"v1.2.17\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/jdorn/sql-formatter.git\",
                \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/jdorn/sql-formatter/zipball/64990d96e0959dff8e059dfcdc1af130728d92bc\",
                \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.2.4\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"3.7.*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"lib\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeremy Dorn\",
                    \"email\": \"jeremy@jeremydorn.com\",
                    \"homepage\": \"http://jeremydorn.com/\"
                }
            ],
            \"description\": \"a PHP SQL highlighting library\",
            \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
            \"keywords\": [
                \"highlight\",
                \"sql\"
            ],
            \"time\": \"2014-01-12T16:20:24+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"4489d5002c49d55576fa0ba786f42dbb009be46f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/4489d5002c49d55576fa0ba786f42dbb009be46f\",
                \"reference\": \"4489d5002c49d55576fa0ba786f42dbb009be46f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"ext-zip\": \"*\",
                \"infection/infection\": \"^0.7.1\",
                \"phpunit/phpunit\": \"^7.0.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"PackageVersions\\\\Installer\",
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PackageVersions\\\\\": \"src/PackageVersions\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
            \"time\": \"2018-02-05T13:05:30+00:00\"
        },
        {
            \"name\": \"ocramius/proxy-manager\",
            \"version\": \"2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
                \"reference\": \"e18ac876b2e4819c76349de8f78ccc8ef1554cd7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/e18ac876b2e4819c76349de8f78ccc8ef1554cd7\",
                \"reference\": \"e18ac876b2e4819c76349de8f78ccc8ef1554cd7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.1.1\",
                \"php\": \"^7.1.0\",
                \"zendframework/zend-code\": \"^3.1.0\"
            },
            \"require-dev\": {
                \"couscous/couscous\": \"^1.5.2\",
                \"ext-phar\": \"*\",
                \"humbug/humbug\": \"dev-master@DEV\",
                \"nikic/php-parser\": \"^3.0.4\",
                \"phpbench/phpbench\": \"^0.12.2\",
                \"phpstan/phpstan\": \"^0.6.4\",
                \"phpunit/phpunit\": \"^5.6.4\",
                \"phpunit/phpunit-mock-objects\": \"^3.4.1\",
                \"squizlabs/php_codesniffer\": \"^2.7.0\"
            },
            \"suggest\": {
                \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
                \"zendframework/zend-json\": \"To have the JsonRpc adapter (Remote Object feature)\",
                \"zendframework/zend-soap\": \"To have the Soap adapter (Remote Object feature)\",
                \"zendframework/zend-xmlrpc\": \"To have the XmlRpc adapter (Remote Object feature)\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"ProxyManager\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\",
                    \"homepage\": \"http://ocramius.github.io/\"
                }
            ],
            \"description\": \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
            \"homepage\": \"https://github.com/Ocramius/ProxyManager\",
            \"keywords\": [
                \"aop\",
                \"lazy loading\",
                \"proxy\",
                \"proxy pattern\",
                \"service proxies\"
            ],
            \"time\": \"2017-05-04T11:12:50+00:00\"
        },
        {
            \"name\": \"psr/cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/cache.git\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Cache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for caching libraries\",
            \"keywords\": [
                \"cache\",
                \"psr\",
                \"psr-6\"
            ],
            \"time\": \"2016-08-06T20:24:11+00:00\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/container.git\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Container\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
            \"homepage\": \"https://github.com/php-fig/container\",
            \"keywords\": [
                \"PSR-11\",
                \"container\",
                \"container-interface\",
                \"container-interop\",
                \"psr\"
            ],
            \"time\": \"2017-02-14T16:28:37+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Log\\\\\": \"Psr/Log/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"time\": \"2016-10-10T12:19:37+00:00\"
        },
        {
            \"name\": \"psr/simple-cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/simple-cache.git\",
                \"reference\": \"408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\",
                \"reference\": \"408d5eafb83c57f6365a3ca330ff23aa4a5fa39b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\SimpleCache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interfaces for simple caching\",
            \"keywords\": [
                \"cache\",
                \"caching\",
                \"psr\",
                \"psr-16\",
                \"simple-cache\"
            ],
            \"time\": \"2017-10-23T01:57:42+00:00\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\",
                \"reference\": \"c666a5bbfeb1fe05c7b91d46810f405c8bea14cf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"psr/simple-cache\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.4\",
                \"predis/predis\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"caching\",
                \"psr6\"
            ],
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"c868972ac26e4e19860ce11b300bb74145246ff9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/c868972ac26e4e19860ce11b300bb74145246ff9\",
                \"reference\": \"c868972ac26e4e19860ce11b300bb74145246ff9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/finder\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Config\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Config Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"ca80b8ced97cf07390078b29773dc384c39eee1f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/ca80b8ced97cf07390078b29773dc384c39eee1f\",
                \"reference\": \"ca80b8ced97cf07390078b29773dc384c39eee1f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/process\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log-implementation\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Console\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Console Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"9316545571f079c4dd183e674721d9dc783ce196\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/9316545571f079c4dd183e674721d9dc783ce196\",
                \"reference\": \"9316545571f079c4dd183e674721d9dc783ce196\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Debug\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Debug Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"f4f401fc2766eb8d766fc6043d9e6489b37a41e4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/f4f401fc2766eb8d766fc6043d9e6489b37a41e4\",
                \"reference\": \"f4f401fc2766eb8d766fc6043d9e6489b37a41e4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.1.1\",
                \"symfony/finder\": \"<3.4\",
                \"symfony/proxy-manager-bridge\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~4.1\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using expressions in service container configuration\",
                \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
                \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony DependencyInjection Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T08:24:03+00:00\"
        },
        {
            \"name\": \"symfony/doctrine-bridge\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
                \"reference\": \"3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\",
                \"reference\": \"3ecf9bddd49f6cd3a1088babf5db5c67aa05f27e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/common\": \"~2.4@stable\",
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/data-fixtures\": \"1.0.*\",
                \"doctrine/dbal\": \"~2.4\",
                \"doctrine/orm\": \"^2.4.5\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
                \"symfony/security\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/data-fixtures\": \"\",
                \"doctrine/dbal\": \"\",
                \"doctrine/orm\": \"\",
                \"symfony/form\": \"\",
                \"symfony/property-info\": \"\",
                \"symfony/validator\": \"\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Doctrine Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"bfb30c2ad377615a463ebbc875eba64a99f6aa3e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/bfb30c2ad377615a463ebbc875eba64a99f6aa3e\",
                \"reference\": \"bfb30c2ad377615a463ebbc875eba64a99f6aa3e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony EventDispatcher Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T09:10:45+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"2e30335e0aafeaa86645555959572fe7cea22b43\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/2e30335e0aafeaa86645555959572fe7cea22b43\",
                \"reference\": \"2e30335e0aafeaa86645555959572fe7cea22b43\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Filesystem Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"e162f1df3102d0b7472805a5a9d5db9fcf0a8068\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/e162f1df3102d0b7472805a5a9d5db9fcf0a8068\",
                \"reference\": \"e162f1df3102d0b7472805a5a9d5db9fcf0a8068\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Finder Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\",
                \"reference\": \"ad1ac510d8c89557b8afa2dd838e2f34b4c2529c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.1.1\",
                \"symfony/event-dispatcher\": \"^4.1\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^4.1\",
                \"symfony/http-kernel\": \"^4.1\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"^4.1\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.4\",
                \"symfony/console\": \"<3.4\",
                \"symfony/form\": \"<4.1\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/serializer\": \"<4.1\",
                \"symfony/stopwatch\": \"<3.4\",
                \"symfony/translation\": \"<3.4\",
                \"symfony/twig-bridge\": \"<4.1.1\",
                \"symfony/validator\": \"<4.1\",
                \"symfony/workflow\": \"<4.1\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.1\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/messenger\": \"^4.1\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/security\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"^4.1\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^4.1\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"^4.1\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-apcu\": \"For best performance of the system caches\",
                \"symfony/console\": \"For using the console commands\",
                \"symfony/form\": \"For using forms\",
                \"symfony/property-info\": \"For using the property_info service\",
                \"symfony/serializer\": \"For using the serializer service\",
                \"symfony/validator\": \"For using validation\",
                \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
                \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony FrameworkBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T08:24:03+00:00\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\",
                \"reference\": \"7d93e3547660ec7ee3dad1428ba42e8076a0e5f1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"predis/predis\": \"~1.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony HttpFoundation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T14:07:44+00:00\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"6347be5110efb27fe45ea04bf213078b67a05036\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/6347be5110efb27fe45ea04bf213078b67a05036\",
                \"reference\": \"6347be5110efb27fe45ea04bf213078b67a05036\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~4.1\",
                \"symfony/http-foundation\": \"^4.1.1\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<4.1\",
                \"symfony/var-dumper\": \"<4.1.1\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.1\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"suggest\": {
                \"symfony/browser-kit\": \"\",
                \"symfony/config\": \"\",
                \"symfony/console\": \"\",
                \"symfony/dependency-injection\": \"\",
                \"symfony/var-dumper\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony HttpKernel Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-08-01T15:30:34+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"e3d826245268269cd66f8326bd8bc066687b4a19\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/e3d826245268269cd66f8326bd8bc066687b4a19\",
                \"reference\": \"e3d826245268269cd66f8326bd8bc066687b4a19\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                }
            ],
            \"description\": \"Symfony polyfill for ctype functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"ctype\",
                \"polyfill\",
                \"portable\"
            ],
            \"time\": \"2018-08-06T14:22:27+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.9.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"d0cd638f4634c16d8df4508e847f14e9e43168b8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/d0cd638f4634c16d8df4508e847f14e9e43168b8\",
                \"reference\": \"d0cd638f4634c16d8df4508e847f14e9e43168b8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony polyfill for the Mbstring extension\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"mbstring\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2018-08-06T14:22:27+00:00\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\",
                \"reference\": \"6912cfebc0ea4e7a46fdd15c9bd1f427dd39ff1b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/dependency-injection\": \"For loading routes from a service\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Routing Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"router\",
                \"routing\",
                \"uri\",
                \"url\"
            ],
            \"time\": \"2018-07-26T11:24:31+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v4.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"966c982df3cca41324253dc0c7ffe76b6076b705\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/966c982df3cca41324253dc0c7ffe76b6076b705\",
                \"reference\": \"966c982df3cca41324253dc0c7ffe76b6076b705\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
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
            \"description\": \"Symfony Stopwatch Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2018-07-26T11:00:49+00:00\"
        },
        {
            \"name\": \"zendframework/zend-code\",
            \"version\": \"3.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-code.git\",
                \"reference\": \"c21db169075c6ec4b342149f446e7b7b724f95eb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/c21db169075c6ec4b342149f446e7b7b724f95eb\",
                \"reference\": \"c21db169075c6ec4b342149f446e7b7b724f95eb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^6.2.3\",
                \"zendframework/zend-coding-standard\": \"^1.0.0\",
                \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
                \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3.x-dev\",
                    \"dev-develop\": \"3.4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Zend\\\\Code\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"provides facilities to generate arbitrary code using an object oriented interface\",
            \"homepage\": \"https://github.com/zendframework/zend-code\",
            \"keywords\": [
                \"code\",
                \"zf2\"
            ],
            \"time\": \"2018-08-13T20:36:59+00:00\"
        },
        {
            \"name\": \"zendframework/zend-eventmanager\",
            \"version\": \"3.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-eventmanager.git\",
                \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-eventmanager/zipball/a5e2583a211f73604691586b8406ff7296a946dd\",
                \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"^0.1\",
                \"container-interop/container-interop\": \"^1.1.0\",
                \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
                \"zendframework/zend-coding-standard\": \"~1.0.0\",
                \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\"
            },
            \"suggest\": {
                \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
                \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
            },
            \"type\": \"library\",
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
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"Trigger and listen to events within a PHP application\",
            \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
            \"keywords\": [
                \"event\",
                \"eventmanager\",
                \"events\",
                \"zf2\"
            ],
            \"time\": \"2018-04-25T15:33:34+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.4.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"*\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"wimg/php-compatibility\": \"^8.0\"
            },
            \"suggest\": {
                \"dealerdirect/qa-tools\": \"All the PHP QA tools you'll need\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\Plugin\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Franck Nijhof\",
                    \"email\": \"f.nijhof@dealerdirect.nl\",
                    \"homepage\": \"http://workingatdealerdirect.eu\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://workingatdealerdirect.eu\",
            \"keywords\": [
                \"PHPCodeSniffer\",
                \"PHP_CodeSniffer\",
                \"code quality\",
                \"codesniffer\",
                \"composer\",
                \"installer\",
                \"phpcs\",
                \"plugin\",
                \"qa\",
                \"quality\",
                \"standard\",
                \"standards\",
                \"style guide\",
                \"stylecheck\",
                \"tests\"
            ],
            \"time\": \"2017-12-06T16:27:17+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"5.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"bb8de042a25c4fb59a2c55c350dc55cc00227a8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/bb8de042a25c4fb59a2c55c350dc55cc00227a8c\",
                \"reference\": \"bb8de042a25c4fb59a2c55c350dc55cc00227a8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"php\": \"^7.1\",
                \"slevomat/coding-standard\": \"^4.8.0\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Sniffs\\\\\": \"lib/Doctrine/Sniffs\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Steve Müller\",
                    \"email\": \"st.mueller@dzh-online.de\"
                }
            ],
            \"description\": \"The Doctrine Coding Standard is a set of PHPCS rules applied to all Doctrine projects.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/coding-standard.html\",
            \"keywords\": [
                \"checks\",
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"rules\",
                \"sniffer\",
                \"sniffs\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2018-09-24T19:08:56+00:00\"
        },
        {
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\",
                \"reference\": \"185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"~0.1.8\",
                \"ext-pdo\": \"*\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^6.2.3\",
                \"squizlabs/php_codesniffer\": \"^3.0.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\",
                    \"homepage\": \"http://ocramius.github.com/\"
                }
            ],
            \"description\": \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
            \"homepage\": \"https://github.com/doctrine/instantiator\",
            \"keywords\": [
                \"constructor\",
                \"instantiate\"
            ],
            \"time\": \"2017-07-22T11:58:36+00:00\"
        },
        {
            \"name\": \"jean85/pretty-package-versions\",
            \"version\": \"1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Jean85/pretty-package-versions.git\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Jean85/pretty-package-versions/zipball/75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.2.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Jean85\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Alessandro Lai\",
                    \"email\": \"alessandro.lai85@gmail.com\"
                }
            ],
            \"description\": \"A wrapper for ocramius/package-versions to get pretty versions strings\",
            \"keywords\": [
                \"composer\",
                \"package\",
                \"release\",
                \"versions\"
            ],
            \"time\": \"2018-06-13T13:22:40+00:00\"
        },
        {
            \"name\": \"mikey179/vfsStream\",
            \"version\": \"v1.6.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/mikey179/vfsStream.git\",
                \"reference\": \"d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/mikey179/vfsStream/zipball/d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\",
                \"reference\": \"d5fec95f541d4d71c4823bb5e30cf9b9e5b96145\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"org\\\\bovigo\\\\vfs\\\\\": \"src/main/php\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Frank Kleine\",
                    \"homepage\": \"http://frankkleine.de/\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Virtual file system to mock the real file system in unit tests.\",
            \"homepage\": \"http://vfs.bovigo.org/\",
            \"time\": \"2017-08-01T08:02:14+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\",
                \"reference\": \"3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"replace\": {
                \"myclabs/deep-copy\": \"self.version\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"DeepCopy\\\\\": \"src/DeepCopy/\"
                },
                \"files\": [
                    \"src/DeepCopy/deep_copy.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Create deep copies (clones) of your objects\",
            \"keywords\": [
                \"clone\",
                \"copy\",
                \"duplicate\",
                \"object\",
                \"object graph\"
            ],
            \"time\": \"2018-06-11T23:09:50+00:00\"
        },
        {
            \"name\": \"nette/bootstrap\",
            \"version\": \"v2.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/bootstrap.git\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/bootstrap/zipball/268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/di\": \"~2.4.7\",
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"latte/latte\": \"~2.2\",
                \"nette/application\": \"~2.3\",
                \"nette/caching\": \"~2.3\",
                \"nette/database\": \"~2.3\",
                \"nette/forms\": \"~2.3\",
                \"nette/http\": \"~2.4.0\",
                \"nette/mail\": \"~2.3\",
                \"nette/robot-loader\": \"^2.4.2 || ^3.0\",
                \"nette/safe-stream\": \"~2.2\",
                \"nette/security\": \"~2.3\",
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.4.1\"
            },
            \"suggest\": {
                \"nette/robot-loader\": \"to use Configurator::createRobotLoader()\",
                \"tracy/tracy\": \"to use Configurator::enableTracy()\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🅱 Nette Bootstrap: the simple way to configure and bootstrap your Nette application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"bootstrapping\",
                \"configurator\",
                \"nette\"
            ],
            \"time\": \"2018-05-17T12:52:20+00:00\"
        },
        {
            \"name\": \"nette/di\",
            \"version\": \"v2.4.13\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/di.git\",
                \"reference\": \"3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/di/zipball/3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\",
                \"reference\": \"3f8f212b02d5c17feb97a7e0a39ab306f40c06ca\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/neon\": \"^2.3.3 || ~3.0.0\",
                \"nette/php-generator\": \"^2.6.1 || ~3.0.0\",
                \"nette/utils\": \"^2.4.3 || ~3.0.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/bootstrap\": \"<2.4\",
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"💎 Nette Dependency Injection Container: Flexible, compiled and full-featured DIC with perfectly usable autowiring and support for all new PHP 7.1 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"compiled\",
                \"di\",
                \"dic\",
                \"factory\",
                \"ioc\",
                \"nette\",
                \"static\"
            ],
            \"time\": \"2018-06-11T08:46:01+00:00\"
        },
        {
            \"name\": \"nette/finder\",
            \"version\": \"v2.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/finder.git\",
                \"reference\": \"ee951a656cb8ac622e5dd33474a01fd2470505a0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/finder/zipball/ee951a656cb8ac622e5dd33474a01fd2470505a0\",
                \"reference\": \"ee951a656cb8ac622e5dd33474a01fd2470505a0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🔍 Nette Finder: find files and directories with an intuitive API.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"filesystem\",
                \"glob\",
                \"iterator\",
                \"nette\"
            ],
            \"time\": \"2018-06-28T11:49:23+00:00\"
        },
        {
            \"name\": \"nette/neon\",
            \"version\": \"v2.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/neon.git\",
                \"reference\": \"5e72b1dd3e2d34f0863c5561139a19df6a1ef398\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/neon/zipball/5e72b1dd3e2d34f0863c5561139a19df6a1ef398\",
                \"reference\": \"5e72b1dd3e2d34f0863c5561139a19df6a1ef398\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-iconv\": \"*\",
                \"ext-json\": \"*\",
                \"php\": \">=5.6.0\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍸 Nette NEON: encodes and decodes NEON file format.\",
            \"homepage\": \"http://ne-on.org\",
            \"keywords\": [
                \"export\",
                \"import\",
                \"neon\",
                \"nette\",
                \"yaml\"
            ],
            \"time\": \"2018-03-21T12:12:21+00:00\"
        },
        {
            \"name\": \"nette/php-generator\",
            \"version\": \"v3.0.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/php-generator.git\",
                \"reference\": \"ea90209c2e8a7cd087b2742ca553c047a8df5eff\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/php-generator/zipball/ea90209c2e8a7cd087b2742ca553c047a8df5eff\",
                \"reference\": \"ea90209c2e8a7cd087b2742ca553c047a8df5eff\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4.2 || ~3.0.0\",
                \"php\": \">=7.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🐘 Nette PHP Generator: generates neat PHP code for you. Supports new PHP 7.2 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"code\",
                \"nette\",
                \"php\",
                \"scaffolding\"
            ],
            \"time\": \"2018-08-09T14:32:27+00:00\"
        },
        {
            \"name\": \"nette/robot-loader\",
            \"version\": \"v3.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/robot-loader.git\",
                \"reference\": \"3cf88781a05e0bf4618ae605361afcbaa4d5b392\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/robot-loader/zipball/3cf88781a05e0bf4618ae605361afcbaa4d5b392\",
                \"reference\": \"3cf88781a05e0bf4618ae605361afcbaa4d5b392\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/finder\": \"^2.3 || ^3.0\",
                \"nette/utils\": \"^2.4 || ^3.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍀 Nette RobotLoader: high performance and comfortable autoloader that will search and autoload classes within your application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"autoload\",
                \"class\",
                \"interface\",
                \"nette\",
                \"trait\"
            ],
            \"time\": \"2018-06-22T09:34:04+00:00\"
        },
        {
            \"name\": \"nette/utils\",
            \"version\": \"v2.5.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/utils.git\",
                \"reference\": \"183069866dc477fcfbac393ed486aaa6d93d19a5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/utils/zipball/183069866dc477fcfbac393ed486aaa6d93d19a5\",
                \"reference\": \"183069866dc477fcfbac393ed486aaa6d93d19a5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"suggest\": {
                \"ext-gd\": \"to use Image\",
                \"ext-iconv\": \"to use Strings::webalize() and toAscii()\",
                \"ext-intl\": \"for script transliteration in Strings::webalize() and toAscii()\",
                \"ext-json\": \"to use Nette\\\\Utils\\\\Json\",
                \"ext-mbstring\": \"to use Strings::lower() etc...\",
                \"ext-xml\": \"to use Strings::length() etc. when mbstring is not available\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ],
                \"files\": [
                    \"src/loader.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🛠 Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"array\",
                \"core\",
                \"datetime\",
                \"images\",
                \"json\",
                \"nette\",
                \"paginator\",
                \"password\",
                \"slugify\",
                \"string\",
                \"unicode\",
                \"utf-8\",
                \"utility\",
                \"validation\"
            ],
            \"time\": \"2018-05-02T17:16:08+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v3.1.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0|~5.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PhpParser\\\\\": \"lib/PhpParser\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nikita Popov\"
                }
            ],
            \"description\": \"A PHP parser written in PHP\",
            \"keywords\": [
                \"parser\",
                \"php\"
            ],
            \"time\": \"2018-02-28T20:30:58+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Component for reading phar.io manifest information from a PHP Archive (PHAR)\",
            \"time\": \"2018-07-08T19:23:20+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Library for handling version information and constraints\",
            \"time\": \"2018-07-08T19:19:57+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"opensource@ijaap.nl\"
                }
            ],
            \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
            \"homepage\": \"http://www.phpdoc.org\",
            \"keywords\": [
                \"FQSEN\",
                \"phpDocumentor\",
                \"phpdoc\",
                \"reflection\",
                \"static analysis\"
            ],
            \"time\": \"2017-09-11T18:02:19+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"94fd0001232e47129dd3504189fa1c7225010d08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/94fd0001232e47129dd3504189fa1c7225010d08\",
                \"reference\": \"94fd0001232e47129dd3504189fa1c7225010d08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0\",
                \"phpdocumentor/type-resolver\": \"^0.4.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"~1.0.5\",
                \"mockery/mockery\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
            \"time\": \"2017-11-30T07:14:17+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"0.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5 || ^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^5.2||^4.8.24\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"time\": \"2017-07-14T14:27:02+00:00\"
        },
        {
            \"name\": \"phpspec/prophecy\",
            \"version\": \"1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"4ba436b55987b4bf311cb7c6ba82aa528aac0a06\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/4ba436b55987b4bf311cb7c6ba82aa528aac0a06\",
                \"reference\": \"4ba436b55987b4bf311cb7c6ba82aa528aac0a06\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.2\",
                \"php\": \"^5.3|^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^2.0|^3.0.2|^4.0\",
                \"sebastian/comparator\": \"^1.1|^2.0|^3.0\",
                \"sebastian/recursion-context\": \"^1.0|^2.0|^3.0\"
            },
            \"require-dev\": {
                \"phpspec/phpspec\": \"^2.5|^3.2\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5 || ^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Prophecy\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Konstantin Kudryashov\",
                    \"email\": \"ever.zet@gmail.com\",
                    \"homepage\": \"http://everzet.com\"
                },
                {
                    \"name\": \"Marcello Duarte\",
                    \"email\": \"marcello.duarte@gmail.com\"
                }
            ],
            \"description\": \"Highly opinionated mocking framework for PHP 5.3+\",
            \"homepage\": \"https://github.com/phpspec/prophecy\",
            \"keywords\": [
                \"Double\",
                \"Dummy\",
                \"fake\",
                \"mock\",
                \"spy\",
                \"stub\"
            ],
            \"time\": \"2018-08-05T17:53:17+00:00\"
        },
        {
            \"name\": \"phpstan/phpdoc-parser\",
            \"version\": \"0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"02f909f134fe06f0cd4790d8627ee24efbe84d6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/02f909f134fe06f0cd4790d8627ee24efbe84d6a\",
                \"reference\": \"02f909f134fe06f0cd4790d8627ee24efbe84d6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^3.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\PhpDocParser\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPDoc parser with support for nullable, intersection and generic types\",
            \"time\": \"2018-01-13T18:19:41+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan\",
            \"version\": \"0.9.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan.git\",
                \"reference\": \"e59541bcc7cac9b35ca54db6365bf377baf4a488\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan/zipball/e59541bcc7cac9b35ca54db6365bf377baf4a488\",
                \"reference\": \"e59541bcc7cac9b35ca54db6365bf377baf4a488\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"jean85/pretty-package-versions\": \"^1.0.3\",
                \"nette/bootstrap\": \"^2.4 || ^3.0\",
                \"nette/di\": \"^2.4.7 || ^3.0\",
                \"nette/robot-loader\": \"^3.0.1\",
                \"nette/utils\": \"^2.4.5 || ^3.0\",
                \"nikic/php-parser\": \"^3.1\",
                \"php\": \"~7.0\",
                \"phpstan/phpdoc-parser\": \"^0.2\",
                \"symfony/console\": \"~3.2 || ~4.0\",
                \"symfony/finder\": \"~3.2 || ~4.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"2.2.1\",
                \"ext-gd\": \"*\",
                \"ext-intl\": \"*\",
                \"ext-mysqli\": \"*\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-php-parser\": \"^0.9\",
                \"phpstan/phpstan-phpunit\": \"^0.9.3\",
                \"phpstan/phpstan-strict-rules\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.5.4\",
                \"slevomat/coding-standard\": \"4.0.0\"
            },
            \"bin\": [
                \"bin/phpstan\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": [
                        \"src/\",
                        \"build/PHPStan\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPStan - PHP Static Analysis Tool\",
            \"time\": \"2018-01-28T13:22:19+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan-strict-rules\",
            \"version\": \"0.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan-strict-rules.git\",
                \"reference\": \"15be9090622c6b85c079922308f831018d8d9e23\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan-strict-rules/zipball/15be9090622c6b85c079922308f831018d8d9e23\",
                \"reference\": \"15be9090622c6b85c079922308f831018d8d9e23\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.0\",
                \"phpstan/phpstan\": \"^0.9\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-phpunit\": \"^0.9\",
                \"phpunit/phpunit\": \"^6.4\",
                \"slevomat/coding-standard\": \"^3.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.9-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Extra strict and opinionated rules for PHPStan\",
            \"time\": \"2017-11-26T20:12:30+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"865662550c384bc1db7e51d29aeda1c2c161d69a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/865662550c384bc1db7e51d29aeda1c2c161d69a\",
                \"reference\": \"865662550c384bc1db7e51d29aeda1c2c161d69a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^2.0\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-06-01T07:51:50+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"cecbc684605bb0cc288828eb5d65d93d5c676d3c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/cecbc684605bb0cc288828eb5d65d93d5c676d3c\",
                \"reference\": \"cecbc684605bb0cc288828eb5d65d93d5c676d3c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2018-06-11T11:44:00+00:00\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2015-06-21T13:50:34+00:00\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"8b8454ea6958c3dee38453d3bd571e023108c91f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/8b8454ea6958c3dee38453d3bd571e023108c91f\",
                \"reference\": \"8b8454ea6958c3dee38453d3bd571e023108c91f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2018-02-01T13:07:23+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"21ad88bbba7c3d93530d93994e0a33cd45f02ace\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/21ad88bbba7c3d93530d93994e0a33cd45f02ace\",
                \"reference\": \"21ad88bbba7c3d93530d93994e0a33cd45f02ace\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2018-02-01T13:16:43+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"f9b14c17860eccb440a0352a117a81eb754cff5a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/f9b14c17860eccb440a0352a117a81eb754cff5a\",
                \"reference\": \"f9b14c17860eccb440a0352a117a81eb754cff5a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.1\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.7\",
                \"phar-io/manifest\": \"^1.0.2\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.7\",
                \"phpunit/php-file-iterator\": \"^2.0.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.0\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^1.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit-mock-objects\": \"*\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.3-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"The PHP Unit Testing framework.\",
            \"homepage\": \"https://phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-08-07T06:44:28+00:00\"
        },
        {
            \"name\": \"sebastian/code-unit-reverse-lookup\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup.git\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7 || ^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Looks up which function or method a line of code belongs to\",
            \"homepage\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/\",
            \"time\": \"2017-03-04T06:30:41+00:00\"
        },
        {
            \"name\": \"sebastian/comparator\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides the functionality to compare PHP values for equality\",
            \"homepage\": \"https://github.com/sebastianbergmann/comparator\",
            \"keywords\": [
                \"comparator\",
                \"compare\",
                \"equality\"
            ],
            \"time\": \"2018-07-12T15:12:46+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"366541b989927187c4ca70490a35615d3fef2dce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/366541b989927187c4ca70490a35615d3fef2dce\",
                \"reference\": \"366541b989927187c4ca70490a35615d3fef2dce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\",
                \"symfony/process\": \"^2 || ^3.3 || ^4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Diff implementation\",
            \"homepage\": \"https://github.com/sebastianbergmann/diff\",
            \"keywords\": [
                \"diff\",
                \"udiff\",
                \"unidiff\",
                \"unified diff\"
            ],
            \"time\": \"2018-06-10T07:54:39+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"cd0871b3975fb7fc44d11314fd1ee20925fce4f5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/cd0871b3975fb7fc44d11314fd1ee20925fce4f5\",
                \"reference\": \"cd0871b3975fb7fc44d11314fd1ee20925fce4f5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides functionality to handle HHVM/PHP environments\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/environment\",
            \"keywords\": [
                \"Xdebug\",
                \"environment\",
                \"hhvm\"
            ],
            \"time\": \"2017-07-01T08:51:00+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-mbstring\": \"*\",
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2017-04-03T13:19:02+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2017-04-27T15:39:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-enumerator\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-enumerator.git\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Traverses array structures and object graphs to enumerate all referenced objects\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-enumerator/\",
            \"time\": \"2017-08-03T12:35:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-reflector\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-reflector.git\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Allows reflection of object attributes, including inherited and non-public ones\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-reflector/\",
            \"time\": \"2017-03-29T09:07:27+00:00\"
        },
        {
            \"name\": \"sebastian/recursion-context\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/recursion-context.git\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides functionality to recursively process PHP variables\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/recursion-context\",
            \"time\": \"2017-03-03T06:23:57+00:00\"
        },
        {
            \"name\": \"sebastian/resource-operations\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\",
                \"reference\": \"ce990bb21759f94aeafd30209e8cfcdfa8bc3f52\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2015-07-28T20:34:47+00:00\"
        },
        {
            \"name\": \"sebastian/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/version.git\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that helps with managing the version number of Git-hosted PHP projects\",
            \"homepage\": \"https://github.com/sebastianbergmann/version\",
            \"time\": \"2016-10-03T07:35:21+00:00\"
        },
        {
            \"name\": \"slevomat/coding-standard\",
            \"version\": \"4.8.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"5e878708a16a75ed11a7d9aa02f50c257065d4fe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/5e878708a16a75ed11a7d9aa02f50c257065d4fe\",
                \"reference\": \"5e878708a16a75ed11a7d9aa02f50c257065d4fe\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"^3.3.0\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.9.2\",
                \"phpstan/phpstan-phpunit\": \"0.9.4\",
                \"phpstan/phpstan-strict-rules\": \"0.9\",
                \"phpunit/phpunit\": \"7.3.5\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"autoload\": {
                \"psr-4\": {
                    \"SlevomatCodingStandard\\\\\": \"SlevomatCodingStandard\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Slevomat Coding Standard for PHP_CodeSniffer complements Consistence Coding Standard by providing sniffs with additional checks.\",
            \"time\": \"2018-09-25T06:49:15+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"6ad28354c04b364c3c71a34e4a18b629cc3b231e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/6ad28354c04b364c3c71a34e4a18b629cc3b231e\",
                \"reference\": \"6ad28354c04b364c3c71a34e4a18b629cc3b231e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.4.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.0 || ^5.0 || ^6.0 || ^7.0\"
            },
            \"bin\": [
                \"bin/phpcs\",
                \"bin/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Greg Sherwood\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.\",
            \"homepage\": \"http://www.squizlabs.com/php-codesniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2018-09-23T23:08:17+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"cb2f008f3f05af2893a87208fe6a6c4985483f8b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/cb2f008f3f05af2893a87208fe6a6c4985483f8b\",
                \"reference\": \"cb2f008f3f05af2893a87208fe6a6c4985483f8b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2017-04-07T12:08:54+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"0df1908962e7a3071564e857d86874dad1ef204a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/0df1908962e7a3071564e857d86874dad1ef204a\",
                \"reference\": \"0df1908962e7a3071564e857d86874dad1ef204a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Assert\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Assertions to validate method input/output with nice error messages.\",
            \"keywords\": [
                \"assert\",
                \"check\",
                \"validate\"
            ],
            \"time\": \"2018-01-29T19:49:41+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
", "vendor/doctrine/doctrine-migrations-bundle/composer.lock", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/composer.lock");
    }
}
