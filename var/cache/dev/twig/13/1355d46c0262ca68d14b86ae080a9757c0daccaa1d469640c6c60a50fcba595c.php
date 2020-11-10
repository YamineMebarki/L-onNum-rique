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

/* composer.lock */
class __TwigTemplate_6a92b0e7a37ac11580939e1056b10e75f9ee6336ed693602cf65eca1dc41c17c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composer.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"119a910b42def609310fcf4e76225b6d\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/904dca4eb10715b92569fbcd79e201d5c349b6bc\",
                \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"time\": \"2019-10-01T18:55:10+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d4374ae95b36062d02ef310100ed33d78738d76c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d4374ae95b36062d02ef310100ed33d78738d76c\",
                \"reference\": \"d4374ae95b36062d02ef310100ed33d78738d76c\",
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
                \"doctrine/coding-standard\": \"^4.0\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^7.0\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2019-10-28T09:31:32+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.6.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"c5e0bc17b1620e97c968ac409acbff28b8b850be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/c5e0bc17b1620e97c968ac409acbff28b8b850be\",
                \"reference\": \"c5e0bc17b1620e97c968ac409acbff28b8b850be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpstan/phpstan-shim\": \"^0.9.2\",
                \"phpunit/phpunit\": \"^7.0\",
                \"vimeo/psalm\": \"^3.2.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\"
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
            \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterators\",
                \"php\"
            ],
            \"time\": \"2019-06-09T13:48:14+00:00\"
        },
        {
            \"name\": \"doctrine/common\",
            \"version\": \"v2.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/common.git\",
                \"reference\": \"b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/common/zipball/b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\",
                \"reference\": \"b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/inflector\": \"^1.0\",
                \"doctrine/lexer\": \"^1.0\",
                \"doctrine/persistence\": \"^1.1\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^1.0\",
                \"phpstan/phpstan\": \"^0.11\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\",
                \"symfony/phpunit-bridge\": \"^4.0.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.11.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
            \"keywords\": [
                \"common\",
                \"doctrine\",
                \"php\"
            ],
            \"time\": \"2019-09-10T10:10:14+00:00\"
        },
        {
            \"name\": \"doctrine/data-fixtures\",
            \"version\": \"v1.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/data-fixtures.git\",
                \"reference\": \"09b16943b27f3d80d63988d100ff256148c2f78b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/data-fixtures/zipball/09b16943b27f3d80d63988d100ff256148c2f78b\",
                \"reference\": \"09b16943b27f3d80d63988d100ff256148c2f78b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/common\": \"~2.2\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/phpcr-odm\": \"<1.3.0\"
            },
            \"require-dev\": {
                \"doctrine/dbal\": \"^2.5.4\",
                \"doctrine/orm\": \"^2.5.4\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"For using MongoDB ODM with PHP 7\",
                \"doctrine/mongodb-odm\": \"For loading MongoDB ODM fixtures\",
                \"doctrine/orm\": \"For loading ORM fixtures\",
                \"doctrine/phpcr-odm\": \"For loading PHPCR ODM fixtures\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\DataFixtures\\\\\": \"lib/Doctrine/Common/DataFixtures\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                }
            ],
            \"description\": \"Data Fixtures for all Doctrine Object Managers\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\"
            ],
            \"time\": \"2019-07-10T18:30:35+00:00\"
        },
        {
            \"name\": \"doctrine/dbal\",
            \"version\": \"v2.9.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/dbal.git\",
                \"reference\": \"22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\",
                \"reference\": \"22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
                \"phpstan/phpstan\": \"^0.10.1\",
                \"phpunit/phpunit\": \"^7.4\",
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
                    \"dev-master\": \"2.9.x-dev\",
                    \"dev-develop\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\"
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
            \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
            \"keywords\": [
                \"abstraction\",
                \"database\",
                \"dbal\",
                \"mysql\",
                \"persistence\",
                \"pgsql\",
                \"php\",
                \"queryobject\"
            ],
            \"time\": \"2018-12-31T03:27:51+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-bundle\",
            \"version\": \"1.11.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
                \"reference\": \"28101e20776d8fa20a00b54947fbae2db0d09103\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/28101e20776d8fa20a00b54947fbae2db0d09103\",
                \"reference\": \"28101e20776d8fa20a00b54947fbae2db0d09103\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.5.12\",
                \"doctrine/doctrine-cache-bundle\": \"~1.2\",
                \"jdorn/sql-formatter\": \"^1.2.16\",
                \"php\": \"^7.1\",
                \"symfony/config\": \"^3.4|^4.1\",
                \"symfony/console\": \"^3.4|^4.1\",
                \"symfony/dependency-injection\": \"^3.4|^4.1\",
                \"symfony/doctrine-bridge\": \"^3.4|^4.1\",
                \"symfony/framework-bundle\": \"^3.4|^4.1\"
            },
            \"conflict\": {
                \"doctrine/orm\": \"<2.6\",
                \"twig/twig\": \"<1.34|>=2.0,<2.4\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"doctrine/orm\": \"^2.6\",
                \"php-coveralls/php-coveralls\": \"^2.1\",
                \"phpunit/phpunit\": \"7.0\",
                \"symfony/cache\": \"^3.4|^4.1\",
                \"symfony/phpunit-bridge\": \"^4.2\",
                \"symfony/property-info\": \"^3.4|^4.1\",
                \"symfony/validator\": \"^3.4|^4.1\",
                \"symfony/web-profiler-bundle\": \"^3.4|^4.1\",
                \"symfony/yaml\": \"^3.4|^4.1\",
                \"twig/twig\": \"^1.34|^2.4\"
            },
            \"suggest\": {
                \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
                \"symfony/web-profiler-bundle\": \"To use the data collector.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.11.x-dev\"
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
            \"time\": \"2019-06-04T07:35:05+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-cache-bundle\",
            \"version\": \"1.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineCacheBundle.git\",
                \"reference\": \"5514c90d9fb595e1095e6d66ebb98ce9ef049927\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineCacheBundle/zipball/5514c90d9fb595e1095e6d66ebb98ce9ef049927\",
                \"reference\": \"5514c90d9fb595e1095e6d66ebb98ce9ef049927\",
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
                \"phpunit/phpunit\": \"~4.8.36|~5.6|~6.5|~7.0\",
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-11-09T06:25:35+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-fixtures-bundle\",
            \"version\": \"3.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineFixturesBundle.git\",
                \"reference\": \"90e4a4f968b2dae40e290a6ee516957af043f16c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineFixturesBundle/zipball/90e4a4f968b2dae40e290a6ee516957af043f16c\",
                \"reference\": \"90e4a4f968b2dae40e290a6ee516957af043f16c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/data-fixtures\": \"^1.3\",
                \"doctrine/doctrine-bundle\": \"^1.6\",
                \"doctrine/orm\": \"^2.6.0\",
                \"php\": \"^7.1\",
                \"symfony/doctrine-bridge\": \"~3.4|^4.1\",
                \"symfony/framework-bundle\": \"^3.4|^4.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpunit/phpunit\": \"^7.4\",
                \"symfony/phpunit-bridge\": \"^4.1\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\FixturesBundle\\\\\": \"\"
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
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineFixturesBundle\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"Fixture\",
                \"persistence\"
            ],
            \"time\": \"2019-06-12T12:03:37+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-migrations-bundle\",
            \"version\": \"v2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineMigrationsBundle.git\",
                \"reference\": \"4c9579e0e43df1fb3f0ca29b9c20871c824fac71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineMigrationsBundle/zipball/4c9579e0e43df1fb3f0ca29b9c20871c824fac71\",
                \"reference\": \"4c9579e0e43df1fb3f0ca29b9c20871c824fac71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/doctrine-bundle\": \"~1.0\",
                \"doctrine/migrations\": \"^2.0\",
                \"php\": \"^7.1\",
                \"symfony/framework-bundle\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-strict-rules\": \"^0.9\",
                \"phpunit/phpunit\": \"^5.7|^6.4|^7.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\"
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
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineMigrationsBundle\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"dbal\",
                \"migrations\",
                \"schema\"
            ],
            \"time\": \"2019-01-09T18:49:50+00:00\"
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
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/a2c590166b2133a4633738648b6b064edae0814a\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"ext-pdo\": \"*\",
                \"ext-phar\": \"*\",
                \"phpbench/phpbench\": \"^0.13\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpstan/phpstan-shim\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\"
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
            \"homepage\": \"https://www.doctrine-project.org/projects/instantiator.html\",
            \"keywords\": [
                \"constructor\",
                \"instantiate\"
            ],
            \"time\": \"2019-03-17T17:37:11+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"e17f069ede36f7534b95adec71910ed1b49c74ea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/e17f069ede36f7534b95adec71910ed1b49c74ea\",
                \"reference\": \"e17f069ede36f7534b95adec71910ed1b49c74ea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpstan/phpstan\": \"^0.11.8\",
                \"phpunit/phpunit\": \"^8.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"lexer\",
                \"parser\",
                \"php\"
            ],
            \"time\": \"2019-07-30T19:33:28+00:00\"
        },
        {
            \"name\": \"doctrine/migrations\",
            \"version\": \"2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/migrations.git\",
                \"reference\": \"a89fa87a192e90179163c1e863a145c13337f442\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/a89fa87a192e90179163c1e863a145c13337f442\",
                \"reference\": \"a89fa87a192e90179163c1e863a145c13337f442\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.9\",
                \"ocramius/package-versions\": \"^1.3\",
                \"ocramius/proxy-manager\": \"^2.0.2\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"^3.4||^4.0\",
                \"symfony/stopwatch\": \"^3.4||^4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
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
                    \"dev-master\": \"2.1.x-dev\"
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
            \"time\": \"2019-07-30T18:51:47+00:00\"
        },
        {
            \"name\": \"doctrine/orm\",
            \"version\": \"v2.6.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/orm.git\",
                \"reference\": \"b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/orm/zipball/b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\",
                \"reference\": \"b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"~1.5\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/collections\": \"^1.4\",
                \"doctrine/common\": \"^2.7.1\",
                \"doctrine/dbal\": \"^2.6\",
                \"doctrine/instantiator\": \"~1.1\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"~3.0|~4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpunit/phpunit\": \"^7.5\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
            },
            \"bin\": [
                \"bin/doctrine\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Object-Relational-Mapper for PHP\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"orm\"
            ],
            \"time\": \"2019-09-20T14:30:26+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"3da7c9d125591ca83944f477e65ed3d7b4617c48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/3da7c9d125591ca83944f477e65ed3d7b4617c48\",
                \"reference\": \"3da7c9d125591ca83944f477e65ed3d7b4617c48\",
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
                \"doctrine/common\": \"<2.10@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
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
            \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
            \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
            \"keywords\": [
                \"mapper\",
                \"object\",
                \"odm\",
                \"orm\",
                \"persistence\"
            ],
            \"time\": \"2019-04-23T08:28:24+00:00\"
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
            \"name\": \"egulias/email-validator\",
            \"version\": \"2.1.11\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/egulias/EmailValidator.git\",
                \"reference\": \"92dd169c32f6f55ba570c309d83f5209cefb5e23\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/egulias/EmailValidator/zipball/92dd169c32f6f55ba570c309d83f5209cefb5e23\",
                \"reference\": \"92dd169c32f6f55ba570c309d83f5209cefb5e23\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"^1.0.1\",
                \"php\": \">= 5.5\"
            },
            \"require-dev\": {
                \"dominicsayers/isemail\": \"dev-master\",
                \"phpunit/phpunit\": \"^4.8.35||^5.7||^6.0\",
                \"satooshi/php-coveralls\": \"^1.0.1\",
                \"symfony/phpunit-bridge\": \"^4.4@dev\"
            },
            \"suggest\": {
                \"ext-intl\": \"PHP Internationalization Libraries are required to use the SpoofChecking validation\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Egulias\\\\EmailValidator\\\\\": \"EmailValidator\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Eduardo Gulias Davis\"
                }
            ],
            \"description\": \"A library for validating emails against several RFCs\",
            \"homepage\": \"https://github.com/egulias/EmailValidator\",
            \"keywords\": [
                \"email\",
                \"emailvalidation\",
                \"emailvalidator\",
                \"validation\",
                \"validator\"
            ],
            \"time\": \"2019-08-13T17:33:27+00:00\"
        },
        {
            \"name\": \"fig/link-util\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/link-util.git\",
                \"reference\": \"1a07821801a148be4add11ab0603e4af55a72fac\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/link-util/zipball/1a07821801a148be4add11ab0603e4af55a72fac\",
                \"reference\": \"1a07821801a148be4add11ab0603e4af55a72fac\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5.0\",
                \"psr/link\": \"~1.0@dev\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.1\",
                \"squizlabs/php_codesniffer\": \"^2.3.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Fig\\\\Link\\\\\": \"src/\"
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
            \"description\": \"Common utility implementations for HTTP links\",
            \"keywords\": [
                \"http\",
                \"http-link\",
                \"link\",
                \"psr\",
                \"psr-13\",
                \"rest\"
            ],
            \"time\": \"2016-10-17T18:31:11+00:00\"
        },
        {
            \"name\": \"fzaninotto/faker\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/fzaninotto/Faker.git\",
                \"reference\": \"f72816b43e74063c8b10357394b6bba8cb1c10de\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/fzaninotto/Faker/zipball/f72816b43e74063c8b10357394b6bba8cb1c10de\",
                \"reference\": \"f72816b43e74063c8b10357394b6bba8cb1c10de\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\"
            },
            \"require-dev\": {
                \"ext-intl\": \"*\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7\",
                \"squizlabs/php_codesniffer\": \"^1.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Faker\\\\\": \"src/Faker/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"François Zaninotto\"
                }
            ],
            \"description\": \"Faker is a PHP library that generates fake data for you.\",
            \"keywords\": [
                \"data\",
                \"faker\",
                \"fixtures\"
            ],
            \"time\": \"2018-07-12T10:23:15+00:00\"
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
            \"name\": \"monolog/monolog\",
            \"version\": \"1.25.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/monolog.git\",
                \"reference\": \"70e65a5470a42cfec1a7da00d30edb6e617e8dcf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/monolog/zipball/70e65a5470a42cfec1a7da00d30edb6e617e8dcf\",
                \"reference\": \"70e65a5470a42cfec1a7da00d30edb6e617e8dcf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\",
                \"psr/log\": \"~1.0\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0.0\"
            },
            \"require-dev\": {
                \"aws/aws-sdk-php\": \"^2.4.9 || ^3.0\",
                \"doctrine/couchdb\": \"~1.0@dev\",
                \"graylog2/gelf-php\": \"~1.0\",
                \"jakub-onderka/php-parallel-lint\": \"0.9\",
                \"php-amqplib/php-amqplib\": \"~2.4\",
                \"php-console/php-console\": \"^3.1.3\",
                \"phpunit/phpunit\": \"~4.5\",
                \"phpunit/phpunit-mock-objects\": \"2.3.0\",
                \"ruflin/elastica\": \">=0.90 <3.0\",
                \"sentry/sentry\": \"^0.13\",
                \"swiftmailer/swiftmailer\": \"^5.3|^6.0\"
            },
            \"suggest\": {
                \"aws/aws-sdk-php\": \"Allow sending log messages to AWS services like DynamoDB\",
                \"doctrine/couchdb\": \"Allow sending log messages to a CouchDB server\",
                \"ext-amqp\": \"Allow sending log messages to an AMQP server (1.0+ required)\",
                \"ext-mongo\": \"Allow sending log messages to a MongoDB server\",
                \"graylog2/gelf-php\": \"Allow sending log messages to a GrayLog2 server\",
                \"mongodb/mongodb\": \"Allow sending log messages to a MongoDB server via PHP Driver\",
                \"php-amqplib/php-amqplib\": \"Allow sending log messages to an AMQP server using php-amqplib\",
                \"php-console/php-console\": \"Allow sending log messages to Google Chrome\",
                \"rollbar/rollbar\": \"Allow sending log messages to Rollbar\",
                \"ruflin/elastica\": \"Allow sending log messages to an Elastic Search server\",
                \"sentry/sentry\": \"Allow sending log messages to a Sentry server\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Monolog\\\\\": \"src/Monolog\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Sends your log to files, sockets, inboxes, databases and various web services\",
            \"homepage\": \"http://github.com/Seldaek/monolog\",
            \"keywords\": [
                \"log\",
                \"logging\",
                \"psr-3\"
            ],
            \"time\": \"2019-09-06T13:49:17+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"doctrine/coding-standard\": \"^5.0.1\",
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
            \"time\": \"2019-02-21T12:16:21+00:00\"
        },
        {
            \"name\": \"ocramius/proxy-manager\",
            \"version\": \"2.2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
                \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/4d154742e31c35137d5374c998e8f86b54db2e2f\",
                \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.1.3\",
                \"php\": \"^7.2.0\",
                \"zendframework/zend-code\": \"^3.3.0\"
            },
            \"require-dev\": {
                \"couscous/couscous\": \"^1.6.1\",
                \"ext-phar\": \"*\",
                \"humbug/humbug\": \"1.0.0-RC.0@RC\",
                \"nikic/php-parser\": \"^3.1.1\",
                \"padraic/phpunit-accelerator\": \"dev-master@DEV\",
                \"phpbench/phpbench\": \"^0.12.2\",
                \"phpstan/phpstan\": \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
                \"phpstan/phpstan-phpunit\": \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
                \"phpunit/phpunit\": \"^6.4.3\",
                \"squizlabs/php_codesniffer\": \"^2.9.1\"
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
            \"time\": \"2019-08-10T08:37:15+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"63a995caa1ca9e5590304cd845c15ad6d482a62a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/63a995caa1ca9e5590304cd845c15ad6d482a62a\",
                \"reference\": \"63a995caa1ca9e5590304cd845c15ad6d482a62a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src/\"
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
            \"time\": \"2018-08-07T13:53:10+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"b83ff7cfcfee7827e1e78b637a5904fe6a96698e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/b83ff7cfcfee7827e1e78b637a5904fe6a96698e\",
                \"reference\": \"b83ff7cfcfee7827e1e78b637a5904fe6a96698e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0 || ^2.0.0\",
                \"phpdocumentor/type-resolver\": \"~0.4 || ^1.0.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"^1.0.5\",
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
            \"time\": \"2019-09-12T14:27:41+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\",
                \"reference\": \"2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"phpdocumentor/reflection-common\": \"^2.0\"
            },
            \"require-dev\": {
                \"ext-tokenizer\": \"^7.1\",
                \"mockery/mockery\": \"~1\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src\"
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
            \"description\": \"A PSR-5 based resolver of Class names, Types and Structural Element Names\",
            \"time\": \"2019-08-22T18:11:29+00:00\"
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
            \"name\": \"psr/link\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/link.git\",
                \"reference\": \"eea8e8662d5cd3ae4517c9b864493f59fca95562\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/link/zipball/eea8e8662d5cd3ae4517c9b864493f59fca95562\",
                \"reference\": \"eea8e8662d5cd3ae4517c9b864493f59fca95562\",
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
                    \"Psr\\\\Link\\\\\": \"src/\"
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
            \"description\": \"Common interfaces for HTTP links\",
            \"keywords\": [
                \"http\",
                \"http-link\",
                \"link\",
                \"psr\",
                \"psr-13\",
                \"rest\"
            ],
            \"time\": \"2016-10-28T16:06:13+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\",
                \"reference\": \"bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
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
            \"time\": \"2019-10-25T08:06:51+00:00\"
        },
        {
            \"name\": \"sensio/framework-extra-bundle\",
            \"version\": \"v5.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sensiolabs/SensioFrameworkExtraBundle.git\",
                \"reference\": \"dfc2c4df9f7d465a65c770e9feb578fe071636f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sensiolabs/SensioFrameworkExtraBundle/zipball/dfc2c4df9f7d465a65c770e9feb578fe071636f7\",
                \"reference\": \"dfc2c4df9f7d465a65c770e9feb578fe071636f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"php\": \">=7.1.3\",
                \"symfony/config\": \"^4.3|^5.0\",
                \"symfony/dependency-injection\": \"^4.3|^5.0\",
                \"symfony/framework-bundle\": \"^4.3|^5.0\",
                \"symfony/http-kernel\": \"^4.3|^5.0\"
            },
            \"conflict\": {
                \"doctrine/doctrine-cache-bundle\": \"<1.3.1\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"^1.11|^2.0\",
                \"doctrine/orm\": \"^2.5\",
                \"nyholm/psr7\": \"^1.1\",
                \"symfony/browser-kit\": \"^4.3|^5.0\",
                \"symfony/dom-crawler\": \"^4.3|^5.0\",
                \"symfony/expression-language\": \"^4.3|^5.0\",
                \"symfony/finder\": \"^4.3|^5.0\",
                \"symfony/monolog-bridge\": \"^4.0|^5.0\",
                \"symfony/monolog-bundle\": \"^3.2\",
                \"symfony/phpunit-bridge\": \"^4.3.5|^5.0\",
                \"symfony/psr-http-message-bridge\": \"^1.1\",
                \"symfony/security-bundle\": \"^4.3|^5.0\",
                \"symfony/twig-bundle\": \"^4.3|^5.0\",
                \"symfony/yaml\": \"^4.3|^5.0\",
                \"twig/twig\": \"^1.34|^2.4|^3.0\"
            },
            \"suggest\": {
                \"symfony/expression-language\": \"\",
                \"symfony/psr-http-message-bridge\": \"To use the PSR-7 converters\",
                \"symfony/security-bundle\": \"\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.5.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\\": \"src/\"
                },
                \"exclude-from-classmap\": [
                    \"/tests/\"
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
                }
            ],
            \"description\": \"This bundle provides a way to configure your controllers with annotations\",
            \"keywords\": [
                \"annotations\",
                \"controllers\"
            ],
            \"time\": \"2019-10-16T18:54:45+00:00\"
        },
        {
            \"name\": \"swiftmailer/swiftmailer\",
            \"version\": \"v6.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/swiftmailer/swiftmailer.git\",
                \"reference\": \"5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/swiftmailer/swiftmailer/zipball/5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\",
                \"reference\": \"5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"egulias/email-validator\": \"~2.0\",
                \"php\": \">=7.0.0\",
                \"symfony/polyfill-iconv\": \"^1.0\",
                \"symfony/polyfill-intl-idn\": \"^1.10\",
                \"symfony/polyfill-mbstring\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"~0.9.1\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\"
            },
            \"suggest\": {
                \"ext-intl\": \"Needed to support internationalized email addresses\",
                \"true/punycode\": \"Needed to support internationalized email addresses, if ext-intl is not installed\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.2-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"lib/swift_required.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Chris Corbyn\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Swiftmailer, free feature-rich PHP mailer\",
            \"homepage\": \"https://swiftmailer.symfony.com\",
            \"keywords\": [
                \"email\",
                \"mail\",
                \"mailer\"
            ],
            \"time\": \"2019-04-21T09:21:45+00:00\"
        },
        {
            \"name\": \"symfony/apache-pack\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/apache-pack.git\",
                \"reference\": \"3aa5818d73ad2551281fc58a75afd9ca82622e6c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/apache-pack/zipball/3aa5818d73ad2551281fc58a75afd9ca82622e6c\",
                \"reference\": \"3aa5818d73ad2551281fc58a75afd9ca82622e6c\",
                \"shasum\": \"\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for Apache support in Symfony\",
            \"time\": \"2017-12-12T01:46:35+00:00\"
        },
        {
            \"name\": \"symfony/asset\",
            \"version\": \"v4.3.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/asset.git\",
                \"reference\": \"3f97e57596884f7b9158d564a533112a0d19dbdd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/asset/zipball/3f97e57596884f7b9158d564a533112a0d19dbdd\",
                \"reference\": \"3f97e57596884f7b9158d564a533112a0d19dbdd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
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
            \"description\": \"Symfony Asset Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-03T21:50:52+00:00\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"40c62600ebad1ed2defbf7d35523d918a73ab330\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/40c62600ebad1ed2defbf7d35523d918a73ab330\",
                \"reference\": \"40c62600ebad1ed2defbf7d35523d918a73ab330\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/cache-contracts\": \"^1.1\",
                \"symfony/service-contracts\": \"^1.1\",
                \"symfony/var-exporter\": \"^4.2\"
            },
            \"conflict\": {
                \"doctrine/dbal\": \"<2.5\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\",
                \"symfony/cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.5\",
                \"predis/predis\": \"~1.1\",
                \"psr/simple-cache\": \"^1.0\",
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.1\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T10:57:53+00:00\"
        },
        {
            \"name\": \"symfony/cache-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache-contracts.git\",
                \"reference\": \"af50d14ada9e4e82cfabfabdc502d144f89be0a1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache-contracts/zipball/af50d14ada9e4e82cfabfabdc502d144f89be0a1\",
                \"reference\": \"af50d14ada9e4e82cfabfabdc502d144f89be0a1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/cache-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Cache\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to caching\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-10-04T21:43:27+00:00\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"0acb26407a9e1a64a275142f0ae5e36436342720\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/0acb26407a9e1a64a275142f0ae5e36436342720\",
                \"reference\": \"0acb26407a9e1a64a275142f0ae5e36436342720\",
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
                \"symfony/messenger\": \"~4.1\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-19T15:51:53+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"929ddf360d401b958f611d44e726094ab46a7369\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/929ddf360d401b958f611d44e726094ab46a7369\",
                \"reference\": \"929ddf360d401b958f611d44e726094ab46a7369\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php73\": \"^1.8\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.3\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-07T12:36:49+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\",
                \"reference\": \"cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\",
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-19T15:51:53+00:00\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"e1e0762a814b957a1092bff75a550db49724d05b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/e1e0762a814b957a1092bff75a550db49724d05b\",
                \"reference\": \"e1e0762a814b957a1092bff75a550db49724d05b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\",
                \"symfony/service-contracts\": \"^1.1.6\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.3\",
                \"symfony/finder\": \"<3.4\",
                \"symfony/proxy-manager-bridge\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\",
                \"symfony/service-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"^4.3\",
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-02T12:58:58+00:00\"
        },
        {
            \"name\": \"symfony/doctrine-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
                \"reference\": \"486fa65a74692d84f250087c79d0b89d30d655a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/486fa65a74692d84f250087c79d0b89d30d655a8\",
                \"reference\": \"486fa65a74692d84f250087c79d0b89d30d655a8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/event-manager\": \"~1.0\",
                \"doctrine/persistence\": \"~1.0\",
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/collections\": \"~1.0\",
                \"doctrine/data-fixtures\": \"1.0.*\",
                \"doctrine/dbal\": \"~2.4\",
                \"doctrine/orm\": \"^2.6.3\",
                \"doctrine/reflection\": \"~1.0\",
                \"symfony/config\": \"^4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~4.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/messenger\": \"~4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-08T20:39:53+00:00\"
        },
        {
            \"name\": \"symfony/dotenv\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dotenv.git\",
                \"reference\": \"1785b18148a016b8f4e6a612291188d568e1f9cd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dotenv/zipball/1785b18148a016b8f4e6a612291188d568e1f9cd\",
                \"reference\": \"1785b18148a016b8f4e6a612291188d568e1f9cd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Dotenv\\\\\": \"\"
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
            \"description\": \"Registers environment variables from a .env_GogolejokeVoice file\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"dotenv\",
                \"env\",
                \"environment\"
            ],
            \"time\": \"2019-08-03T21:50:52+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"6229f58993e5a157f6096fc7145c0717d0be8807\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/6229f58993e5a157f6096fc7145c0717d0be8807\",
                \"reference\": \"6229f58993e5a157f6096fc7145c0717d0be8807\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"provide\": {
                \"psr/event-dispatcher-implementation\": \"1.0\",
                \"symfony/event-dispatcher-implementation\": \"1.1\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^3.4|^4.0\",
                \"symfony/service-contracts\": \"^1.1\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-01T16:40:32+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
                \"reference\": \"c43ab685673fb6c8d84220c77897b1d6cdbe1d18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/c43ab685673fb6c8d84220c77897b1d6cdbe1d18\",
                \"reference\": \"c43ab685673fb6c8d84220c77897b1d6cdbe1d18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"psr/event-dispatcher\": \"\",
                \"symfony/event-dispatcher-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to dispatching event\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T09:54:03+00:00\"
        },
        {
            \"name\": \"symfony/expression-language\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/expression-language.git\",
                \"reference\": \"c8b47d8820d3bf75f757eec8a2647584c14cf0c6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/expression-language/zipball/c8b47d8820d3bf75f757eec8a2647584c14cf0c6\",
                \"reference\": \"c8b47d8820d3bf75f757eec8a2647584c14cf0c6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\ExpressionLanguage\\\\\": \"\"
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
            \"description\": \"Symfony ExpressionLanguage Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"9abbb7ef96a51f4d7e69627bc6f63307994e4263\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/9abbb7ef96a51f4d7e69627bc6f63307994e4263\",
                \"reference\": \"9abbb7ef96a51f4d7e69627bc6f63307994e4263\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-08-20T14:07:54+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"5e575faa95548d0586f6bedaeabec259714e44d1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/5e575faa95548d0586f6bedaeabec259714e44d1\",
                \"reference\": \"5e575faa95548d0586f6bedaeabec259714e44d1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-16T11:29:48+00:00\"
        },
        {
            \"name\": \"symfony/flex\",
            \"version\": \"v1.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/flex.git\",
                \"reference\": \"133e649fdf08aeb8741be1ba955ccbe5cd17c696\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/flex/zipball/133e649fdf08aeb8741be1ba955ccbe5cd17c696\",
                \"reference\": \"133e649fdf08aeb8741be1ba955ccbe5cd17c696\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.0.2\",
                \"symfony/dotenv\": \"^3.4|^4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\",
                \"symfony/process\": \"^2.7|^3.0|^4.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.4-dev\"
                },
                \"class\": \"Symfony\\\\Flex\\\\Flex\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Flex\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien.potencier@gmail.com\"
                }
            ],
            \"description\": \"Composer plugin for Symfony\",
            \"time\": \"2019-09-19T14:55:57+00:00\"
        },
        {
            \"name\": \"symfony/form\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/form.git\",
                \"reference\": \"4a799fb998c325ac77fc5513f35be033cc0edf3c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/form/zipball/4a799fb998c325ac77fc5513f35be033cc0edf3c\",
                \"reference\": \"4a799fb998c325ac77fc5513f35be033cc0edf3c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/intl\": \"^4.3\",
                \"symfony/options-resolver\": \"~4.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"~1.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/console\": \"<4.3\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/doctrine-bridge\": \"<3.4\",
                \"symfony/framework-bundle\": \"<3.4\",
                \"symfony/http-kernel\": \"<4.3\",
                \"symfony/intl\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/twig-bridge\": \"<3.4.5|<4.0.5,>=4.0\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"^4.3\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~4.3\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\",
                \"symfony/var-dumper\": \"^4.3\"
            },
            \"suggest\": {
                \"symfony/security-csrf\": \"For protecting forms against CSRF attacks.\",
                \"symfony/twig-bridge\": \"For templating with Twig.\",
                \"symfony/validator\": \"For form validation.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Form\\\\\": \"\"
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
            \"description\": \"Symfony Form Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-27T14:21:32+00:00\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"fca765488ecea04bf6c1c502d7b0214fa29460d8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/fca765488ecea04bf6c1c502d7b0214fa29460d8\",
                \"reference\": \"fca765488ecea04bf6c1c502d7b0214fa29460d8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"^4.3.4\",
                \"symfony/config\": \"^4.3.4\",
                \"symfony/debug\": \"~4.0\",
                \"symfony/dependency-injection\": \"^4.3\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^4.3\",
                \"symfony/http-kernel\": \"^4.3.4\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"^4.3\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.4\",
                \"symfony/browser-kit\": \"<4.3\",
                \"symfony/console\": \"<4.3\",
                \"symfony/dom-crawler\": \"<4.3\",
                \"symfony/dotenv\": \"<4.2\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.3\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/serializer\": \"<4.2\",
                \"symfony/stopwatch\": \"<3.4\",
                \"symfony/translation\": \"<4.3\",
                \"symfony/twig-bridge\": \"<4.1.1\",
                \"symfony/validator\": \"<4.1\",
                \"symfony/workflow\": \"<4.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"^4.3\",
                \"symfony/console\": \"^4.3.4\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"^4.3\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.3.4\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/mailer\": \"^4.3\",
                \"symfony/messenger\": \"^4.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/security-http\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"^4.3\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.3\",
                \"symfony/twig-bundle\": \"~2.8|~3.2|~4.0\",
                \"symfony/validator\": \"^4.1\",
                \"symfony/var-dumper\": \"^4.3\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"^4.3\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.41|~2.10\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T17:45:43+00:00\"
        },
        {
            \"name\": \"symfony/http-client\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-client.git\",
                \"reference\": \"69d438274718121e1166e7f65c290f891a4c8ddb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-client/zipball/69d438274718121e1166e7f65c290f891a4c8ddb\",
                \"reference\": \"69d438274718121e1166e7f65c290f891a4c8ddb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"^1.0\",
                \"symfony/http-client-contracts\": \"^1.1.7\",
                \"symfony/polyfill-php73\": \"^1.11\"
            },
            \"provide\": {
                \"psr/http-client-implementation\": \"1.0\",
                \"symfony/http-client-implementation\": \"1.1\"
            },
            \"require-dev\": {
                \"nyholm/psr7\": \"^1.0\",
                \"psr/http-client\": \"^1.0\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/process\": \"^4.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpClient\\\\\": \"\"
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
            \"description\": \"Symfony HttpClient component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-07T10:52:41+00:00\"
        },
        {
            \"name\": \"symfony/http-client-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-client-contracts.git\",
                \"reference\": \"353b2a3e907e5c34cf8f74827a4b21eb745aab1d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-client-contracts/zipball/353b2a3e907e5c34cf8f74827a4b21eb745aab1d\",
                \"reference\": \"353b2a3e907e5c34cf8f74827a4b21eb745aab1d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"symfony/http-client-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\HttpClient\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to HTTP clients\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-26T22:09:58+00:00\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"76590ced16d4674780863471bae10452b79210a5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/76590ced16d4674780863471bae10452b79210a5\",
                \"reference\": \"76590ced16d4674780863471bae10452b79210a5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"predis/predis\": \"~1.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T19:48:13+00:00\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"5f08141850932e8019c01d8988bf3ed6367d2991\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/5f08141850932e8019c01d8988bf3ed6367d2991\",
                \"reference\": \"5f08141850932e8019c01d8988bf3ed6367d2991\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/http-foundation\": \"^4.1.1\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-php73\": \"^1.9\"
            },
            \"conflict\": {
                \"symfony/browser-kit\": \"<4.3\",
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/var-dumper\": \"<4.1.1\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"^4.3\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.3\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/translation-contracts\": \"^1.1\",
                \"symfony/var-dumper\": \"^4.1.1\",
                \"twig/twig\": \"^1.34|^2.4\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-07T15:06:41+00:00\"
        },
        {
            \"name\": \"symfony/inflector\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/inflector.git\",
                \"reference\": \"fc488a52c79b2bbe848fa9def35f2cccb47c4798\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/inflector/zipball/fc488a52c79b2bbe848fa9def35f2cccb47c4798\",
                \"reference\": \"fc488a52c79b2bbe848fa9def35f2cccb47c4798\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Inflector\\\\\": \"\"
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
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Inflector Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"inflection\",
                \"pluralize\",
                \"singularize\",
                \"string\",
                \"symfony\",
                \"words\"
            ],
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/intl\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/intl.git\",
                \"reference\": \"818771ff6acef04cdce05023ddfc39b7078014bf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/intl/zipball/818771ff6acef04cdce05023ddfc39b7078014bf\",
                \"reference\": \"818771ff6acef04cdce05023ddfc39b7078014bf\",
                \"shasum\": \"\"
            },
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Intl\\\\\": \"\"
                },
                \"classmap\": [
                    \"Resources/stubs\"
                ],
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
            \"description\": \"A PHP replacement layer for the C intl extension that includes additional data from the ICU library.\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"i18n\",
                \"icu\",
                \"internationalization\",
                \"intl\",
                \"l10n\",
                \"localization\"
            ],
            \"time\": \"2019-10-04T21:18:34+00:00\"
        },
        {
            \"name\": \"symfony/mime\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/mime.git\",
                \"reference\": \"32f71570547b91879fdbd9cf50317d556ae86916\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/mime/zipball/32f71570547b91879fdbd9cf50317d556ae86916\",
                \"reference\": \"32f71570547b91879fdbd9cf50317d556ae86916\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-intl-idn\": \"^1.10\",
                \"symfony/polyfill-mbstring\": \"^1.0\"
            },
            \"require-dev\": {
                \"egulias/email-validator\": \"^2.1.10\",
                \"symfony/dependency-injection\": \"~3.4|^4.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Mime\\\\\": \"\"
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
            \"description\": \"A library to manipulate MIME messages\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"mime\",
                \"mime-type\"
            ],
            \"time\": \"2019-09-19T17:00:15+00:00\"
        },
        {
            \"name\": \"symfony/monolog-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/monolog-bridge.git\",
                \"reference\": \"6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/monolog-bridge/zipball/6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\",
                \"reference\": \"6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.19\",
                \"php\": \"^7.1.3\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\",
                \"symfony/http-foundation\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For the possibility to show log messages in console commands depending on verbosity settings.\",
                \"symfony/http-kernel\": \"For using the debugging handlers together with the response life cycle of the HTTP kernel.\",
                \"symfony/var-dumper\": \"For using the debugging handlers like the console handler or the log server handler.\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Monolog\\\\\": \"\"
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
            \"description\": \"Symfony Monolog Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-06T09:34:03+00:00\"
        },
        {
            \"name\": \"symfony/monolog-bundle\",
            \"version\": \"v3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/monolog-bundle.git\",
                \"reference\": \"7fbecb371c1c614642c93c6b2cbcdf723ae8809d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/monolog-bundle/zipball/7fbecb371c1c614642c93c6b2cbcdf723ae8809d\",
                \"reference\": \"7fbecb371c1c614642c93c6b2cbcdf723ae8809d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.22\",
                \"php\": \">=5.6\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4.10|^4.0.10\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/monolog-bridge\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\MonologBundle\\\\\": \"\"
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
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony MonologBundle\",
            \"homepage\": \"http://symfony.com\",
            \"keywords\": [
                \"log\",
                \"logging\"
            ],
            \"time\": \"2019-06-20T12:18:19+00:00\"
        },
        {
            \"name\": \"symfony/options-resolver\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"81c2e120522a42f623233968244baebd6b36cb6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/81c2e120522a42f623233968244baebd6b36cb6a\",
                \"reference\": \"81c2e120522a42f623233968244baebd6b36cb6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\OptionsResolver\\\\\": \"\"
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
            \"description\": \"Symfony OptionsResolver Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"config\",
                \"configuration\",
                \"options\"
            ],
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/orm-pack\",
            \"version\": \"v1.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/orm-pack.git\",
                \"reference\": \"c57f5e05232ca40626eb9fa52a32bc8565e9231c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/orm-pack/zipball/c57f5e05232ca40626eb9fa52a32bc8565e9231c\",
                \"reference\": \"c57f5e05232ca40626eb9fa52a32bc8565e9231c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/doctrine-bundle\": \"^1.6.10|^2.0\",
                \"doctrine/doctrine-migrations-bundle\": \"^1.3|^2.0\",
                \"doctrine/orm\": \"^2.5.11\",
                \"php\": \"^7.0\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Doctrine ORM\",
            \"time\": \"2019-10-18T05:41:09+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-icu\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-icu.git\",
                \"reference\": \"66810b9d6eb4af54d543867909d65ab9af654d7e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-icu/zipball/66810b9d6eb4af54d543867909d65ab9af654d7e\",
                \"reference\": \"66810b9d6eb4af54d543867909d65ab9af654d7e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"symfony/intl\": \"~2.3|~3.0|~4.0|~5.0\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
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
            \"description\": \"Symfony polyfill for intl's ICU-related data and classes\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"icu\",
                \"intl\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-idn\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-idn.git\",
                \"reference\": \"6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\",
                \"reference\": \"6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"symfony/polyfill-mbstring\": \"^1.3\",
                \"symfony/polyfill-php72\": \"^1.9\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\"
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
                    \"name\": \"Laurent Bassin\",
                    \"email\": \"laurent@bassin.info\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"idn\",
                \"intl\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"b42a2f66e8f1b15ccf25652c3424265923eb4f17\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/b42a2f66e8f1b15ccf25652c3424265923eb4f17\",
                \"reference\": \"b42a2f66e8f1b15ccf25652c3424265923eb4f17\",
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
                    \"dev-master\": \"1.12-dev\"
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
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php72\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php72.git\",
                \"reference\": \"04ce3335667451138df4307d6a9b61565560199e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php72/zipball/04ce3335667451138df4307d6a9b61565560199e\",
                \"reference\": \"04ce3335667451138df4307d6a9b61565560199e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php72\\\\\": \"\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"2ceb49eaccb9352bff54d22570276bb75ba4a188\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/2ceb49eaccb9352bff54d22570276bb75ba4a188\",
                \"reference\": \"2ceb49eaccb9352bff54d22570276bb75ba4a188\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"classmap\": [
                    \"Resources/stubs\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"50556892f3cc47d4200bfd1075314139c4c9ff4b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/50556892f3cc47d4200bfd1075314139c4c9ff4b\",
                \"reference\": \"50556892f3cc47d4200bfd1075314139c4c9ff4b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
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
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-26T21:17:10+00:00\"
        },
        {
            \"name\": \"symfony/property-access\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/property-access.git\",
                \"reference\": \"bb0c302375ffeef60c31e72a4539611b7f787565\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/property-access/zipball/bb0c302375ffeef60c31e72a4539611b7f787565\",
                \"reference\": \"bb0c302375ffeef60c31e72a4539611b7f787565\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/inflector\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/cache\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/cache-implementation\": \"To cache access methods.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\PropertyAccess\\\\\": \"\"
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
            \"description\": \"Symfony PropertyAccess Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"access\",
                \"array\",
                \"extraction\",
                \"index\",
                \"injection\",
                \"object\",
                \"property\",
                \"property path\",
                \"reflection\"
            ],
            \"time\": \"2019-08-26T08:26:39+00:00\"
        },
        {
            \"name\": \"symfony/property-info\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/property-info.git\",
                \"reference\": \"6e4bf437295ef11eb3665ec8f800fb14a74cb976\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/property-info/zipball/6e4bf437295ef11eb3665ec8f800fb14a74cb976\",
                \"reference\": \"6e4bf437295ef11eb3665ec8f800fb14a74cb976\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/inflector\": \"~3.4|~4.0\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0||>=3.2.0,<3.2.2\",
                \"phpdocumentor/type-resolver\": \"<0.3.0\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"phpdocumentor/reflection-docblock\": \"To use the PHPDoc\",
                \"psr/cache-implementation\": \"To cache results\",
                \"symfony/doctrine-bridge\": \"To use Doctrine metadata\",
                \"symfony/serializer\": \"To use Serializer metadata\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\PropertyInfo\\\\\": \"\"
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
                    \"name\": \"Kévin Dunglas\",
                    \"email\": \"dunglas@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Property Info Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"doctrine\",
                \"phpdoc\",
                \"property\",
                \"symfony\",
                \"type\",
                \"validator\"
            ],
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"3b174ef04fe66696524efad1e5f7a6c663d822ea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/3b174ef04fe66696524efad1e5f7a6c663d822ea\",
                \"reference\": \"3b174ef04fe66696524efad1e5f7a6c663d822ea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.2\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.2\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T20:57:10+00:00\"
        },
        {
            \"name\": \"symfony/security-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-bundle.git\",
                \"reference\": \"aa3cd52168c2e5c99effe560907f22fcffe8a788\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-bundle/zipball/aa3cd52168c2e5c99effe560907f22fcffe8a788\",
                \"reference\": \"aa3cd52168c2e5c99effe560907f22fcffe8a788\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"^4.2\",
                \"symfony/dependency-injection\": \"^4.2\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/security-core\": \"~4.3\",
                \"symfony/security-csrf\": \"~4.2\",
                \"symfony/security-guard\": \"~4.2\",
                \"symfony/security-http\": \"^4.3\"
            },
            \"conflict\": {
                \"symfony/browser-kit\": \"<4.2\",
                \"symfony/console\": \"<3.4\",
                \"symfony/framework-bundle\": \"<4.3.4\",
                \"symfony/twig-bundle\": \"<4.2\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"~1.5\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"~4.2\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/framework-bundle\": \"^4.3.4\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/twig-bridge\": \"~3.4|~4.0\",
                \"symfony/twig-bundle\": \"~4.2\",
                \"symfony/validator\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.41|~2.10\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\SecurityBundle\\\\\": \"\"
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
            \"description\": \"Symfony SecurityBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-05T18:00:30+00:00\"
        },
        {
            \"name\": \"symfony/security-core\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-core.git\",
                \"reference\": \"a6f763c1f093b833d371f813519a1a8c07b75fb9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-core/zipball/a6f763c1f093b833d371f813519a1a8c07b75fb9\",
                \"reference\": \"a6f763c1f093b833d371f813519a1a8c07b75fb9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher-contracts\": \"^1.1\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/security-guard\": \"<4.3\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/ldap\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\"
            },
            \"suggest\": {
                \"psr/container-implementation\": \"To instantiate the Security class\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/expression-language\": \"For using the expression voter\",
                \"symfony/http-foundation\": \"\",
                \"symfony/ldap\": \"For using LDAP integration\",
                \"symfony/validator\": \"For using the user password constraint\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Core\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - Core Library\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-10T11:22:25+00:00\"
        },
        {
            \"name\": \"symfony/security-csrf\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-csrf.git\",
                \"reference\": \"0760ec651ea8ff81e22097780337e43f3a795769\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-csrf/zipball/0760ec651ea8ff81e22097780337e43f3a795769\",
                \"reference\": \"0760ec651ea8ff81e22097780337e43f3a795769\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/security-core\": \"~3.4|~4.0\"
            },
            \"conflict\": {
                \"symfony/http-foundation\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"For using the class SessionTokenStorage.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Csrf\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - CSRF Library\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-24T15:54:14+00:00\"
        },
        {
            \"name\": \"symfony/security-guard\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-guard.git\",
                \"reference\": \"4beec980b6a0122afc1ca166ca50ce3b84398507\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-guard/zipball/4beec980b6a0122afc1ca166ca50ce3b84398507\",
                \"reference\": \"4beec980b6a0122afc1ca166ca50ce3b84398507\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/security-core\": \"~3.4.22|^4.2.3\",
                \"symfony/security-http\": \"^4.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Guard\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - Guard\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/security-http\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-http.git\",
                \"reference\": \"b91b6d4d1bded8365f23f6bd4290d28bc6af0832\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-http/zipball/b91b6d4d1bded8365f23f6bd4290d28bc6af0832\",
                \"reference\": \"b91b6d4d1bded8365f23f6bd4290d28bc6af0832\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"^4.3\"
            },
            \"conflict\": {
                \"symfony/security-csrf\": \"<3.4.11|~4.0,<4.0.11\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"^3.4.11|^4.0.11\"
            },
            \"suggest\": {
                \"symfony/routing\": \"For using the HttpUtils class to create sub-requests, redirect the user, and match URLs\",
                \"symfony/security-csrf\": \"For using tokens to protect authentication/logout attempts\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Http\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - HTTP Integration\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-04T21:11:33+00:00\"
        },
        {
            \"name\": \"symfony/serializer\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/serializer.git\",
                \"reference\": \"805eacc72d28e237ef31659344a4d72acef335ec\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/serializer/zipball/805eacc72d28e237ef31659344a4d72acef335ec\",
                \"reference\": \"805eacc72d28e237ef31659344a4d72acef335ec\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/property-access\": \"<3.4\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"^3.4.13|~4.0\",
                \"symfony/validator\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
                \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
                \"psr/cache-implementation\": \"For using the metadata cache.\",
                \"symfony/config\": \"For using the XML mapping loader.\",
                \"symfony/http-foundation\": \"For using a MIME type guesser within the DataUriNormalizer.\",
                \"symfony/property-access\": \"For using the ObjectNormalizer.\",
                \"symfony/property-info\": \"To deserialize relations.\",
                \"symfony/yaml\": \"For using the default YAML mapping loader.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Serializer\\\\\": \"\"
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
            \"description\": \"Symfony Serializer Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T15:03:35+00:00\"
        },
        {
            \"name\": \"symfony/serializer-pack\",
            \"version\": \"v1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/serializer-pack.git\",
                \"reference\": \"c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/serializer-pack/zipball/c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\",
                \"reference\": \"c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/property-access\": \"*\",
                \"symfony/property-info\": \"*\",
                \"symfony/serializer\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Symfony serializer\",
            \"time\": \"2018-12-10T12:14:14+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"ffcde9615dc5bb4825b9f6aed07716f1f57faae0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/ffcde9615dc5bb4825b9f6aed07716f1f57faae0\",
                \"reference\": \"ffcde9615dc5bb4825b9f6aed07716f1f57faae0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Service\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to writing services\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T11:12:18+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"1e4ff456bd625be5032fac9be4294e60442e9b71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/1e4ff456bd625be5032fac9be4294e60442e9b71\",
                \"reference\": \"1e4ff456bd625be5032fac9be4294e60442e9b71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/service-contracts\": \"^1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-08-07T11:52:19+00:00\"
        },
        {
            \"name\": \"symfony/swiftmailer-bundle\",
            \"version\": \"v3.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/swiftmailer-bundle.git\",
                \"reference\": \"6b895bc0a5e815d1bf2d444869415a7c752516aa\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/swiftmailer-bundle/zipball/6b895bc0a5e815d1bf2d444869415a7c752516aa\",
                \"reference\": \"6b895bc0a5e815d1bf2d444869415a7c752516aa\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0.0\",
                \"swiftmailer/swiftmailer\": \"^6.1.3\",
                \"symfony/config\": \"^3.4|^4.0|^5.0\",
                \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
                \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
            },
            \"conflict\": {
                \"twig/twig\": \"<1.41|<2.10\"
            },
            \"require-dev\": {
                \"symfony/console\": \"^3.4|^4.0|^5.0\",
                \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
                \"symfony/phpunit-bridge\": \"^3.4.32|^4.3.5|^5.0\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"suggest\": {
                \"psr/log\": \"Allows logging\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\SwiftmailerBundle\\\\\": \"\"
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
                    \"homepage\": \"http://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony SwiftmailerBundle\",
            \"homepage\": \"http://symfony.com\",
            \"time\": \"2019-10-20T12:05:18+00:00\"
        },
        {
            \"name\": \"symfony/translation\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/translation.git\",
                \"reference\": \"fe6193b066c457c144333c06aaa869a2d42a167f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/translation/zipball/fe6193b066c457c144333c06aaa869a2d42a167f\",
                \"reference\": \"fe6193b066c457c144333c06aaa869a2d42a167f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/translation-contracts\": \"^1.1.6\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"symfony/translation-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~2.8|~3.0|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/intl\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"^1.1.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log-implementation\": \"To use logging capability in translator\",
                \"symfony/config\": \"\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Translation\\\\\": \"\"
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
            \"description\": \"Symfony Translation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-27T14:37:39+00:00\"
        },
        {
            \"name\": \"symfony/translation-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/translation-contracts.git\",
                \"reference\": \"364518c132c95642e530d9b2d217acbc2ccac3e6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/translation-contracts/zipball/364518c132c95642e530d9b2d217acbc2ccac3e6\",
                \"reference\": \"364518c132c95642e530d9b2d217acbc2ccac3e6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"symfony/translation-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Translation\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to translation\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T11:12:18+00:00\"
        },
        {
            \"name\": \"symfony/twig-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bridge.git\",
                \"reference\": \"499b3f3aedffa44e4e30b476bbd433854afc9bc3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/499b3f3aedffa44e4e30b476bbd433854afc9bc3\",
                \"reference\": \"499b3f3aedffa44e4e30b476bbd433854afc9bc3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/translation-contracts\": \"^1.1\",
                \"twig/twig\": \"^1.41|^2.10\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\",
                \"symfony/form\": \"<4.3.4\",
                \"symfony/http-foundation\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/workflow\": \"<4.3\"
            },
            \"require-dev\": {
                \"egulias/email-validator\": \"^2.1.10\",
                \"fig/link-util\": \"^1.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.3.4\",
                \"symfony/http-foundation\": \"~4.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/mime\": \"~4.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/security-acl\": \"~2.8|~3.0\",
                \"symfony/security-core\": \"~3.0|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/security-http\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"^4.2.1\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"~4.3\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/asset\": \"For using the AssetExtension\",
                \"symfony/expression-language\": \"For using the ExpressionExtension\",
                \"symfony/finder\": \"\",
                \"symfony/form\": \"For using the FormExtension\",
                \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
                \"symfony/routing\": \"For using the RoutingExtension\",
                \"symfony/security-core\": \"For using the SecurityExtension\",
                \"symfony/security-csrf\": \"For using the CsrfExtension\",
                \"symfony/security-http\": \"For using the LogoutUrlExtension\",
                \"symfony/stopwatch\": \"For using the StopwatchExtension\",
                \"symfony/templating\": \"For using the TwigEngine\",
                \"symfony/translation\": \"For using the TranslationExtension\",
                \"symfony/var-dumper\": \"For using the DumpExtension\",
                \"symfony/web-link\": \"For using the WebLinkExtension\",
                \"symfony/yaml\": \"For using the YamlExtension\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
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
            \"description\": \"Symfony Twig Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/twig-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bundle.git\",
                \"reference\": \"c27738bb0d9b314b96a323aebc5f40a20e2a644b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/c27738bb0d9b314b96a323aebc5f40a20e2a644b\",
                \"reference\": \"c27738bb0d9b314b96a323aebc5f40a20e2a644b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"~4.2\",
                \"symfony/debug\": \"~4.0\",
                \"symfony/http-foundation\": \"~4.3\",
                \"symfony/http-kernel\": \"~4.1\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/twig-bridge\": \"^4.3\",
                \"twig/twig\": \"~1.41|~2.10\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<4.1\",
                \"symfony/framework-bundle\": \"<4.3\",
                \"symfony/translation\": \"<4.2\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.2.5\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/framework-bundle\": \"~4.3\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"^4.2\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
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
            \"description\": \"Symfony TwigBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/validator\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/validator.git\",
                \"reference\": \"dd344bae7894ce8d6c399d854d894eb6e52ee178\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/validator/zipball/dd344bae7894ce8d6c399d854d894eb6e52ee178\",
                \"reference\": \"dd344bae7894ce8d6c399d854d894eb6e52ee178\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/translation-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"doctrine/lexer\": \"<1.0.2\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/http-kernel\": \"<3.4\",
                \"symfony/intl\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"egulias/email-validator\": \"^2.1.10\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/http-foundation\": \"~4.1\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/intl\": \"^4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
                \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
                \"egulias/email-validator\": \"Strict (RFC compliant) email validation\",
                \"psr/cache-implementation\": \"For using the metadata cache.\",
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using the Expression validator\",
                \"symfony/http-foundation\": \"\",
                \"symfony/intl\": \"\",
                \"symfony/property-access\": \"For accessing properties within comparison constraints\",
                \"symfony/property-info\": \"To automatically add NotNull and Type constraints\",
                \"symfony/translation\": \"For translating validation errors.\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Validator\\\\\": \"\"
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
            \"description\": \"Symfony Validator Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-07T12:36:49+00:00\"
        },
        {
            \"name\": \"symfony/var-exporter\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/var-exporter.git\",
                \"reference\": \"d5b4e2d334c1d80e42876c7d489896cfd37562f2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/var-exporter/zipball/d5b4e2d334c1d80e42876c7d489896cfd37562f2\",
                \"reference\": \"d5b4e2d334c1d80e42876c7d489896cfd37562f2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\VarExporter\\\\\": \"\"
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
            \"description\": \"A blend of var_export() + serialize() to turn any serializable data structure to plain PHP code\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"clone\",
                \"construct\",
                \"export\",
                \"hydrate\",
                \"instantiate\",
                \"serialize\"
            ],
            \"time\": \"2019-08-22T07:33:08+00:00\"
        },
        {
            \"name\": \"symfony/web-link\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-link.git\",
                \"reference\": \"4bd0ce7c54d604300deee8eb1b1beda856fbba20\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-link/zipball/4bd0ce7c54d604300deee8eb1b1beda856fbba20\",
                \"reference\": \"4bd0ce7c54d604300deee8eb1b1beda856fbba20\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"fig/link-util\": \"^1.0\",
                \"php\": \"^7.1.3\",
                \"psr/link\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \"<4.3\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"^4.3\"
            },
            \"suggest\": {
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\WebLink\\\\\": \"\"
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
                    \"name\": \"Kévin Dunglas\",
                    \"email\": \"dunglas@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony WebLink Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"dns-prefetch\",
                \"http\",
                \"http2\",
                \"link\",
                \"performance\",
                \"prefetch\",
                \"preload\",
                \"prerender\",
                \"psr13\",
                \"push\"
            ],
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/web-server-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-server-bundle.git\",
                \"reference\": \"dc26b980900ddf3e9feade14e5b21c029e8ca92f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-server-bundle/zipball/dc26b980900ddf3e9feade14e5b21c029e8ca92f\",
                \"reference\": \"dc26b980900ddf3e9feade14e5b21c029e8ca92f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/process\": \"^3.4.2|^4.0.2\"
            },
            \"suggest\": {
                \"symfony/expression-language\": \"For using the filter option of the log server.\",
                \"symfony/monolog-bridge\": \"For using the log server.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebServerBundle\\\\\": \"\"
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
            \"description\": \"Symfony WebServerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-20T14:27:59+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"41e16350a2a1c7383c4735aa2f9fce74cf3d1178\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/41e16350a2a1c7383c4735aa2f9fce74cf3d1178\",
                \"reference\": \"41e16350a2a1c7383c4735aa2f9fce74cf3d1178\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For validating YAML files using the lint command\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
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
            \"description\": \"Symfony Yaml Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-11T15:41:19+00:00\"
        },
        {
            \"name\": \"twig/twig\",
            \"version\": \"v2.12.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/twigphp/Twig.git\",
                \"reference\": \"ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\",
                \"reference\": \"ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\",
                \"symfony/polyfill-mbstring\": \"^1.3\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"symfony/debug\": \"^3.4|^4.2\",
                \"symfony/phpunit-bridge\": \"^4.4@dev|^5.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Twig_\": \"lib/\"
                },
                \"psr-4\": {
                    \"Twig\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\",
                    \"homepage\": \"http://fabien.potencier.org\",
                    \"role\": \"Lead Developer\"
                },
                {
                    \"name\": \"Twig Team\",
                    \"homepage\": \"https://twig.symfony.com/contributors\",
                    \"role\": \"Contributors\"
                },
                {
                    \"name\": \"Armin Ronacher\",
                    \"email\": \"armin.ronacher@active-4.com\",
                    \"role\": \"Project Founder\"
                }
            ],
            \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
            \"homepage\": \"https://twig.symfony.com\",
            \"keywords\": [
                \"templating\"
            ],
            \"time\": \"2019-10-17T07:34:53+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
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
            \"time\": \"2019-08-24T08:43:50+00:00\"
        },
        {
            \"name\": \"zendframework/zend-code\",
            \"version\": \"3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-code.git\",
                \"reference\": \"46feaeecea14161734b56c1ace74f28cb329f194\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/46feaeecea14161734b56c1ace74f28cb329f194\",
                \"reference\": \"46feaeecea14161734b56c1ace74f28cb329f194\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
                \"zendframework/zend-coding-standard\": \"^1.0\",
                \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
                \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4.x-dev\",
                    \"dev-develop\": \"3.5.x-dev\"
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
            \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
            \"keywords\": [
                \"ZendFramework\",
                \"code\",
                \"zf\"
            ],
            \"time\": \"2019-10-05T23:18:22+00:00\"
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
            \"name\": \"easycorp/easy-log-handler\",
            \"version\": \"v1.0.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/EasyCorp/easy-log-handler.git\",
                \"reference\": \"224e1dfcf9455aceee89cd0af306ac097167fac1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/EasyCorp/easy-log-handler/zipball/224e1dfcf9455aceee89cd0af306ac097167fac1\",
                \"reference\": \"224e1dfcf9455aceee89cd0af306ac097167fac1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.6|~2.0\",
                \"php\": \">=7.1\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"EasyCorp\\\\EasyLog\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Javier Eguiluz\",
                    \"email\": \"javiereguiluz@gmail.com\"
                },
                {
                    \"name\": \"Project Contributors\",
                    \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\"
                }
            ],
            \"description\": \"A handler for Monolog that optimizes log messages to be processed by humans instead of software. Improve your productivity with log that are easy to understand.\",
            \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\",
            \"keywords\": [
                \"easy\",
                \"log\",
                \"logging\",
                \"monolog\",
                \"productivity\"
            ],
            \"time\": \"2019-10-24T07:13:31+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\",
                \"reference\": \"b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"ircmaxell/php-yacc\": \"0.0.4\",
                \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
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
            \"time\": \"2019-10-25T18:33:07+00:00\"
        },
        {
            \"name\": \"symfony/browser-kit\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/browser-kit.git\",
                \"reference\": \"78b7611c45039e8ce81698be319851529bf040b1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/browser-kit/zipball/78b7611c45039e8ce81698be319851529bf040b1\",
                \"reference\": \"78b7611c45039e8ce81698be319851529bf040b1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\BrowserKit\\\\\": \"\"
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
            \"description\": \"Symfony BrowserKit Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-10T11:25:17+00:00\"
        },
        {
            \"name\": \"symfony/css-selector\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/css-selector.git\",
                \"reference\": \"f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/css-selector/zipball/f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\",
                \"reference\": \"f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\CssSelector\\\\\": \"\"
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
                    \"name\": \"Jean-François Simon\",
                    \"email\": \"jeanfrancois.simon@sensiolabs.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony CssSelector Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/debug-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug-bundle.git\",
                \"reference\": \"bb83f93785dae1f9c227a408ced3eb3f86399bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug-bundle/zipball/bb83f93785dae1f9c227a408ced3eb3f86399bf8\",
                \"reference\": \"bb83f93785dae1f9c227a408ced3eb3f86399bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/twig-bridge\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.2\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/web-profiler-bundle\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/config\": \"For service container configuration\",
                \"symfony/dependency-injection\": \"For using as a service from the container\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\DebugBundle\\\\\": \"\"
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
            \"description\": \"Symfony DebugBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-07-19T08:33:28+00:00\"
        },
        {
            \"name\": \"symfony/debug-pack\",
            \"version\": \"v1.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug-pack.git\",
                \"reference\": \"09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug-pack/zipball/09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\",
                \"reference\": \"09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"easycorp/easy-log-handler\": \"^1.0.7\",
                \"php\": \"^7.0\",
                \"symfony/debug-bundle\": \"*\",
                \"symfony/monolog-bundle\": \"^3.0\",
                \"symfony/profiler-pack\": \"*\",
                \"symfony/var-dumper\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A debug pack for Symfony projects\",
            \"time\": \"2018-12-10T12:11:11+00:00\"
        },
        {
            \"name\": \"symfony/dom-crawler\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dom-crawler.git\",
                \"reference\": \"e9f7b4d19d69b133bd638eeddcdc757723b4211f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dom-crawler/zipball/e9f7b4d19d69b133bd638eeddcdc757723b4211f\",
                \"reference\": \"e9f7b4d19d69b133bd638eeddcdc757723b4211f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"masterminds/html5\": \"<2.6\"
            },
            \"require-dev\": {
                \"masterminds/html5\": \"^2.6\",
                \"symfony/css-selector\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/css-selector\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DomCrawler\\\\\": \"\"
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
            \"description\": \"Symfony DomCrawler Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-28T21:25:05+00:00\"
        },
        {
            \"name\": \"symfony/maker-bundle\",
            \"version\": \"v1.14.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/maker-bundle.git\",
                \"reference\": \"31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/maker-bundle/zipball/31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\",
                \"reference\": \"31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/inflector\": \"^1.2\",
                \"nikic/php-parser\": \"^4.0\",
                \"php\": \"^7.0.8\",
                \"symfony/config\": \"^3.4|^4.0|^5.0\",
                \"symfony/console\": \"^3.4|^4.0|^5.0\",
                \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
                \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
                \"symfony/finder\": \"^3.4|^4.0|^5.0\",
                \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
                \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
                \"doctrine/orm\": \"^2.3\",
                \"friendsofphp/php-cs-fixer\": \"^2.8\",
                \"friendsoftwig/twigcs\": \"^3.1.2\",
                \"symfony/http-client\": \"^4.3|^5.0\",
                \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
                \"symfony/process\": \"^3.4|^4.0|^5.0\",
                \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
            \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/site.html\",
            \"keywords\": [
                \"code generator\",
                \"generator\",
                \"scaffold\",
                \"scaffolding\"
            ],
            \"time\": \"2019-10-21T12:43:48+00:00\"
        },
        {
            \"name\": \"symfony/phpunit-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/phpunit-bridge.git\",
                \"reference\": \"a7fd9e742c31ac2b607b166c9016bab51a36c574\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/phpunit-bridge/zipball/a7fd9e742c31ac2b607b166c9016bab51a36c574\",
                \"reference\": \"a7fd9e742c31ac2b607b166c9016bab51a36c574\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5.9\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
            },
            \"suggest\": {
                \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
            },
            \"bin\": [
                \"bin/simple-phpunit\"
            ],
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                },
                \"thanks\": {
                    \"name\": \"phpunit/phpunit\",
                    \"url\": \"https://github.com/sebastianbergmann/phpunit\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\"
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
            \"description\": \"Symfony PHPUnit Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/profiler-pack\",
            \"version\": \"v1.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/profiler-pack.git\",
                \"reference\": \"99c4370632c2a59bb0444852f92140074ef02209\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/profiler-pack/zipball/99c4370632c2a59bb0444852f92140074ef02209\",
                \"reference\": \"99c4370632c2a59bb0444852f92140074ef02209\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/stopwatch\": \"*\",
                \"symfony/twig-bundle\": \"*\",
                \"symfony/web-profiler-bundle\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Symfony web profiler\",
            \"time\": \"2018-12-10T12:11:44+00:00\"
        },
        {
            \"name\": \"symfony/test-pack\",
            \"version\": \"v1.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/test-pack.git\",
                \"reference\": \"ff87e800a67d06c423389f77b8209bc9dc469def\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/test-pack/zipball/ff87e800a67d06c423389f77b8209bc9dc469def\",
                \"reference\": \"ff87e800a67d06c423389f77b8209bc9dc469def\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/browser-kit\": \"*\",
                \"symfony/css-selector\": \"*\",
                \"symfony/phpunit-bridge\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for functional and end-to-end testing within a Symfony app\",
            \"time\": \"2019-06-21T06:27:32+00:00\"
        },
        {
            \"name\": \"symfony/var-dumper\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/var-dumper.git\",
                \"reference\": \"bde8957fc415fdc6964f33916a3755737744ff05\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/var-dumper/zipball/bde8957fc415fdc6964f33916a3755737744ff05\",
                \"reference\": \"bde8957fc415fdc6964f33916a3755737744ff05\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php72\": \"~1.5\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"ext-iconv\": \"*\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
                \"ext-intl\": \"To show region name in time zone dump\",
                \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
            },
            \"bin\": [
                \"Resources/bin/var-dump-server\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"Resources/functions/dump.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\"
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
            \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"debug\",
                \"dump\"
            ],
            \"time\": \"2019-10-04T19:48:13+00:00\"
        },
        {
            \"name\": \"symfony/web-profiler-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-profiler-bundle.git\",
                \"reference\": \"b52bb32e6182d924303dbeb9c584396819fef118\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-profiler-bundle/zipball/b52bb32e6182d924303dbeb9c584396819fef118\",
                \"reference\": \"b52bb32e6182d924303dbeb9c584396819fef118\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"^4.2\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/twig-bundle\": \"~4.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"twig/twig\": \"^1.41|^2.10\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.2\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\\": \"\"
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
            \"description\": \"Symfony WebProfilerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1.3\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "composer.lock";
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
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"119a910b42def609310fcf4e76225b6d\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/904dca4eb10715b92569fbcd79e201d5c349b6bc\",
                \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"time\": \"2019-10-01T18:55:10+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d4374ae95b36062d02ef310100ed33d78738d76c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d4374ae95b36062d02ef310100ed33d78738d76c\",
                \"reference\": \"d4374ae95b36062d02ef310100ed33d78738d76c\",
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
                \"doctrine/coding-standard\": \"^4.0\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^7.0\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2019-10-28T09:31:32+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.6.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"c5e0bc17b1620e97c968ac409acbff28b8b850be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/c5e0bc17b1620e97c968ac409acbff28b8b850be\",
                \"reference\": \"c5e0bc17b1620e97c968ac409acbff28b8b850be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpstan/phpstan-shim\": \"^0.9.2\",
                \"phpunit/phpunit\": \"^7.0\",
                \"vimeo/psalm\": \"^3.2.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\"
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
            \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterators\",
                \"php\"
            ],
            \"time\": \"2019-06-09T13:48:14+00:00\"
        },
        {
            \"name\": \"doctrine/common\",
            \"version\": \"v2.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/common.git\",
                \"reference\": \"b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/common/zipball/b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\",
                \"reference\": \"b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/inflector\": \"^1.0\",
                \"doctrine/lexer\": \"^1.0\",
                \"doctrine/persistence\": \"^1.1\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^1.0\",
                \"phpstan/phpstan\": \"^0.11\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\",
                \"symfony/phpunit-bridge\": \"^4.0.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.11.x-dev\"
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
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
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
            \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
            \"keywords\": [
                \"common\",
                \"doctrine\",
                \"php\"
            ],
            \"time\": \"2019-09-10T10:10:14+00:00\"
        },
        {
            \"name\": \"doctrine/data-fixtures\",
            \"version\": \"v1.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/data-fixtures.git\",
                \"reference\": \"09b16943b27f3d80d63988d100ff256148c2f78b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/data-fixtures/zipball/09b16943b27f3d80d63988d100ff256148c2f78b\",
                \"reference\": \"09b16943b27f3d80d63988d100ff256148c2f78b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/common\": \"~2.2\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/phpcr-odm\": \"<1.3.0\"
            },
            \"require-dev\": {
                \"doctrine/dbal\": \"^2.5.4\",
                \"doctrine/orm\": \"^2.5.4\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"For using MongoDB ODM with PHP 7\",
                \"doctrine/mongodb-odm\": \"For loading MongoDB ODM fixtures\",
                \"doctrine/orm\": \"For loading ORM fixtures\",
                \"doctrine/phpcr-odm\": \"For loading PHPCR ODM fixtures\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\DataFixtures\\\\\": \"lib/Doctrine/Common/DataFixtures\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                }
            ],
            \"description\": \"Data Fixtures for all Doctrine Object Managers\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\"
            ],
            \"time\": \"2019-07-10T18:30:35+00:00\"
        },
        {
            \"name\": \"doctrine/dbal\",
            \"version\": \"v2.9.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/dbal.git\",
                \"reference\": \"22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\",
                \"reference\": \"22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"jetbrains/phpstorm-stubs\": \"^2018.1.2\",
                \"phpstan/phpstan\": \"^0.10.1\",
                \"phpunit/phpunit\": \"^7.4\",
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
                    \"dev-master\": \"2.9.x-dev\",
                    \"dev-develop\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\"
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
            \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
            \"keywords\": [
                \"abstraction\",
                \"database\",
                \"dbal\",
                \"mysql\",
                \"persistence\",
                \"pgsql\",
                \"php\",
                \"queryobject\"
            ],
            \"time\": \"2018-12-31T03:27:51+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-bundle\",
            \"version\": \"1.11.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
                \"reference\": \"28101e20776d8fa20a00b54947fbae2db0d09103\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/28101e20776d8fa20a00b54947fbae2db0d09103\",
                \"reference\": \"28101e20776d8fa20a00b54947fbae2db0d09103\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.5.12\",
                \"doctrine/doctrine-cache-bundle\": \"~1.2\",
                \"jdorn/sql-formatter\": \"^1.2.16\",
                \"php\": \"^7.1\",
                \"symfony/config\": \"^3.4|^4.1\",
                \"symfony/console\": \"^3.4|^4.1\",
                \"symfony/dependency-injection\": \"^3.4|^4.1\",
                \"symfony/doctrine-bridge\": \"^3.4|^4.1\",
                \"symfony/framework-bundle\": \"^3.4|^4.1\"
            },
            \"conflict\": {
                \"doctrine/orm\": \"<2.6\",
                \"twig/twig\": \"<1.34|>=2.0,<2.4\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"doctrine/orm\": \"^2.6\",
                \"php-coveralls/php-coveralls\": \"^2.1\",
                \"phpunit/phpunit\": \"7.0\",
                \"symfony/cache\": \"^3.4|^4.1\",
                \"symfony/phpunit-bridge\": \"^4.2\",
                \"symfony/property-info\": \"^3.4|^4.1\",
                \"symfony/validator\": \"^3.4|^4.1\",
                \"symfony/web-profiler-bundle\": \"^3.4|^4.1\",
                \"symfony/yaml\": \"^3.4|^4.1\",
                \"twig/twig\": \"^1.34|^2.4\"
            },
            \"suggest\": {
                \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
                \"symfony/web-profiler-bundle\": \"To use the data collector.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.11.x-dev\"
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
            \"time\": \"2019-06-04T07:35:05+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-cache-bundle\",
            \"version\": \"1.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineCacheBundle.git\",
                \"reference\": \"5514c90d9fb595e1095e6d66ebb98ce9ef049927\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineCacheBundle/zipball/5514c90d9fb595e1095e6d66ebb98ce9ef049927\",
                \"reference\": \"5514c90d9fb595e1095e6d66ebb98ce9ef049927\",
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
                \"phpunit/phpunit\": \"~4.8.36|~5.6|~6.5|~7.0\",
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-11-09T06:25:35+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-fixtures-bundle\",
            \"version\": \"3.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineFixturesBundle.git\",
                \"reference\": \"90e4a4f968b2dae40e290a6ee516957af043f16c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineFixturesBundle/zipball/90e4a4f968b2dae40e290a6ee516957af043f16c\",
                \"reference\": \"90e4a4f968b2dae40e290a6ee516957af043f16c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/data-fixtures\": \"^1.3\",
                \"doctrine/doctrine-bundle\": \"^1.6\",
                \"doctrine/orm\": \"^2.6.0\",
                \"php\": \"^7.1\",
                \"symfony/doctrine-bridge\": \"~3.4|^4.1\",
                \"symfony/framework-bundle\": \"^3.4|^4.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpunit/phpunit\": \"^7.4\",
                \"symfony/phpunit-bridge\": \"^4.1\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\FixturesBundle\\\\\": \"\"
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
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineFixturesBundle\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"Fixture\",
                \"persistence\"
            ],
            \"time\": \"2019-06-12T12:03:37+00:00\"
        },
        {
            \"name\": \"doctrine/doctrine-migrations-bundle\",
            \"version\": \"v2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/DoctrineMigrationsBundle.git\",
                \"reference\": \"4c9579e0e43df1fb3f0ca29b9c20871c824fac71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/DoctrineMigrationsBundle/zipball/4c9579e0e43df1fb3f0ca29b9c20871c824fac71\",
                \"reference\": \"4c9579e0e43df1fb3f0ca29b9c20871c824fac71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/doctrine-bundle\": \"~1.0\",
                \"doctrine/migrations\": \"^2.0\",
                \"php\": \"^7.1\",
                \"symfony/framework-bundle\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-strict-rules\": \"^0.9\",
                \"phpunit/phpunit\": \"^5.7|^6.4|^7.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\"
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
                    \"name\": \"Doctrine Project\",
                    \"homepage\": \"http://www.doctrine-project.org\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony DoctrineMigrationsBundle\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"dbal\",
                \"migrations\",
                \"schema\"
            ],
            \"time\": \"2019-01-09T18:49:50+00:00\"
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
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/a2c590166b2133a4633738648b6b064edae0814a\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"ext-pdo\": \"*\",
                \"ext-phar\": \"*\",
                \"phpbench/phpbench\": \"^0.13\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpstan/phpstan-shim\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\"
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
            \"homepage\": \"https://www.doctrine-project.org/projects/instantiator.html\",
            \"keywords\": [
                \"constructor\",
                \"instantiate\"
            ],
            \"time\": \"2019-03-17T17:37:11+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"e17f069ede36f7534b95adec71910ed1b49c74ea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/e17f069ede36f7534b95adec71910ed1b49c74ea\",
                \"reference\": \"e17f069ede36f7534b95adec71910ed1b49c74ea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpstan/phpstan\": \"^0.11.8\",
                \"phpunit/phpunit\": \"^8.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"lexer\",
                \"parser\",
                \"php\"
            ],
            \"time\": \"2019-07-30T19:33:28+00:00\"
        },
        {
            \"name\": \"doctrine/migrations\",
            \"version\": \"2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/migrations.git\",
                \"reference\": \"a89fa87a192e90179163c1e863a145c13337f442\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/a89fa87a192e90179163c1e863a145c13337f442\",
                \"reference\": \"a89fa87a192e90179163c1e863a145c13337f442\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/dbal\": \"^2.9\",
                \"ocramius/package-versions\": \"^1.3\",
                \"ocramius/proxy-manager\": \"^2.0.2\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"^3.4||^4.0\",
                \"symfony/stopwatch\": \"^3.4||^4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
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
                    \"dev-master\": \"2.1.x-dev\"
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
            \"time\": \"2019-07-30T18:51:47+00:00\"
        },
        {
            \"name\": \"doctrine/orm\",
            \"version\": \"v2.6.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/orm.git\",
                \"reference\": \"b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/orm/zipball/b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\",
                \"reference\": \"b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"~1.5\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/collections\": \"^1.4\",
                \"doctrine/common\": \"^2.7.1\",
                \"doctrine/dbal\": \"^2.6\",
                \"doctrine/instantiator\": \"~1.1\",
                \"ext-pdo\": \"*\",
                \"php\": \"^7.1\",
                \"symfony/console\": \"~3.0|~4.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpunit/phpunit\": \"^7.5\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
            },
            \"bin\": [
                \"bin/doctrine\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.6.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\"
                }
            ],
            \"description\": \"Object-Relational-Mapper for PHP\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"database\",
                \"orm\"
            ],
            \"time\": \"2019-09-20T14:30:26+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"3da7c9d125591ca83944f477e65ed3d7b4617c48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/3da7c9d125591ca83944f477e65ed3d7b4617c48\",
                \"reference\": \"3da7c9d125591ca83944f477e65ed3d7b4617c48\",
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
                \"doctrine/common\": \"<2.10@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
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
            \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
            \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
            \"keywords\": [
                \"mapper\",
                \"object\",
                \"odm\",
                \"orm\",
                \"persistence\"
            ],
            \"time\": \"2019-04-23T08:28:24+00:00\"
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
            \"name\": \"egulias/email-validator\",
            \"version\": \"2.1.11\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/egulias/EmailValidator.git\",
                \"reference\": \"92dd169c32f6f55ba570c309d83f5209cefb5e23\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/egulias/EmailValidator/zipball/92dd169c32f6f55ba570c309d83f5209cefb5e23\",
                \"reference\": \"92dd169c32f6f55ba570c309d83f5209cefb5e23\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"^1.0.1\",
                \"php\": \">= 5.5\"
            },
            \"require-dev\": {
                \"dominicsayers/isemail\": \"dev-master\",
                \"phpunit/phpunit\": \"^4.8.35||^5.7||^6.0\",
                \"satooshi/php-coveralls\": \"^1.0.1\",
                \"symfony/phpunit-bridge\": \"^4.4@dev\"
            },
            \"suggest\": {
                \"ext-intl\": \"PHP Internationalization Libraries are required to use the SpoofChecking validation\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Egulias\\\\EmailValidator\\\\\": \"EmailValidator\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Eduardo Gulias Davis\"
                }
            ],
            \"description\": \"A library for validating emails against several RFCs\",
            \"homepage\": \"https://github.com/egulias/EmailValidator\",
            \"keywords\": [
                \"email\",
                \"emailvalidation\",
                \"emailvalidator\",
                \"validation\",
                \"validator\"
            ],
            \"time\": \"2019-08-13T17:33:27+00:00\"
        },
        {
            \"name\": \"fig/link-util\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/link-util.git\",
                \"reference\": \"1a07821801a148be4add11ab0603e4af55a72fac\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/link-util/zipball/1a07821801a148be4add11ab0603e4af55a72fac\",
                \"reference\": \"1a07821801a148be4add11ab0603e4af55a72fac\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5.0\",
                \"psr/link\": \"~1.0@dev\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.1\",
                \"squizlabs/php_codesniffer\": \"^2.3.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Fig\\\\Link\\\\\": \"src/\"
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
            \"description\": \"Common utility implementations for HTTP links\",
            \"keywords\": [
                \"http\",
                \"http-link\",
                \"link\",
                \"psr\",
                \"psr-13\",
                \"rest\"
            ],
            \"time\": \"2016-10-17T18:31:11+00:00\"
        },
        {
            \"name\": \"fzaninotto/faker\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/fzaninotto/Faker.git\",
                \"reference\": \"f72816b43e74063c8b10357394b6bba8cb1c10de\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/fzaninotto/Faker/zipball/f72816b43e74063c8b10357394b6bba8cb1c10de\",
                \"reference\": \"f72816b43e74063c8b10357394b6bba8cb1c10de\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\"
            },
            \"require-dev\": {
                \"ext-intl\": \"*\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7\",
                \"squizlabs/php_codesniffer\": \"^1.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Faker\\\\\": \"src/Faker/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"François Zaninotto\"
                }
            ],
            \"description\": \"Faker is a PHP library that generates fake data for you.\",
            \"keywords\": [
                \"data\",
                \"faker\",
                \"fixtures\"
            ],
            \"time\": \"2018-07-12T10:23:15+00:00\"
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
            \"name\": \"monolog/monolog\",
            \"version\": \"1.25.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/monolog.git\",
                \"reference\": \"70e65a5470a42cfec1a7da00d30edb6e617e8dcf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/monolog/zipball/70e65a5470a42cfec1a7da00d30edb6e617e8dcf\",
                \"reference\": \"70e65a5470a42cfec1a7da00d30edb6e617e8dcf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\",
                \"psr/log\": \"~1.0\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0.0\"
            },
            \"require-dev\": {
                \"aws/aws-sdk-php\": \"^2.4.9 || ^3.0\",
                \"doctrine/couchdb\": \"~1.0@dev\",
                \"graylog2/gelf-php\": \"~1.0\",
                \"jakub-onderka/php-parallel-lint\": \"0.9\",
                \"php-amqplib/php-amqplib\": \"~2.4\",
                \"php-console/php-console\": \"^3.1.3\",
                \"phpunit/phpunit\": \"~4.5\",
                \"phpunit/phpunit-mock-objects\": \"2.3.0\",
                \"ruflin/elastica\": \">=0.90 <3.0\",
                \"sentry/sentry\": \"^0.13\",
                \"swiftmailer/swiftmailer\": \"^5.3|^6.0\"
            },
            \"suggest\": {
                \"aws/aws-sdk-php\": \"Allow sending log messages to AWS services like DynamoDB\",
                \"doctrine/couchdb\": \"Allow sending log messages to a CouchDB server\",
                \"ext-amqp\": \"Allow sending log messages to an AMQP server (1.0+ required)\",
                \"ext-mongo\": \"Allow sending log messages to a MongoDB server\",
                \"graylog2/gelf-php\": \"Allow sending log messages to a GrayLog2 server\",
                \"mongodb/mongodb\": \"Allow sending log messages to a MongoDB server via PHP Driver\",
                \"php-amqplib/php-amqplib\": \"Allow sending log messages to an AMQP server using php-amqplib\",
                \"php-console/php-console\": \"Allow sending log messages to Google Chrome\",
                \"rollbar/rollbar\": \"Allow sending log messages to Rollbar\",
                \"ruflin/elastica\": \"Allow sending log messages to an Elastic Search server\",
                \"sentry/sentry\": \"Allow sending log messages to a Sentry server\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Monolog\\\\\": \"src/Monolog\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Sends your log to files, sockets, inboxes, databases and various web services\",
            \"homepage\": \"http://github.com/Seldaek/monolog\",
            \"keywords\": [
                \"log\",
                \"logging\",
                \"psr-3\"
            ],
            \"time\": \"2019-09-06T13:49:17+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"doctrine/coding-standard\": \"^5.0.1\",
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
            \"time\": \"2019-02-21T12:16:21+00:00\"
        },
        {
            \"name\": \"ocramius/proxy-manager\",
            \"version\": \"2.2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
                \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/4d154742e31c35137d5374c998e8f86b54db2e2f\",
                \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.1.3\",
                \"php\": \"^7.2.0\",
                \"zendframework/zend-code\": \"^3.3.0\"
            },
            \"require-dev\": {
                \"couscous/couscous\": \"^1.6.1\",
                \"ext-phar\": \"*\",
                \"humbug/humbug\": \"1.0.0-RC.0@RC\",
                \"nikic/php-parser\": \"^3.1.1\",
                \"padraic/phpunit-accelerator\": \"dev-master@DEV\",
                \"phpbench/phpbench\": \"^0.12.2\",
                \"phpstan/phpstan\": \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
                \"phpstan/phpstan-phpunit\": \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
                \"phpunit/phpunit\": \"^6.4.3\",
                \"squizlabs/php_codesniffer\": \"^2.9.1\"
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
            \"time\": \"2019-08-10T08:37:15+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"63a995caa1ca9e5590304cd845c15ad6d482a62a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/63a995caa1ca9e5590304cd845c15ad6d482a62a\",
                \"reference\": \"63a995caa1ca9e5590304cd845c15ad6d482a62a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src/\"
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
            \"time\": \"2018-08-07T13:53:10+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"b83ff7cfcfee7827e1e78b637a5904fe6a96698e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/b83ff7cfcfee7827e1e78b637a5904fe6a96698e\",
                \"reference\": \"b83ff7cfcfee7827e1e78b637a5904fe6a96698e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0 || ^2.0.0\",
                \"phpdocumentor/type-resolver\": \"~0.4 || ^1.0.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"^1.0.5\",
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
            \"time\": \"2019-09-12T14:27:41+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\",
                \"reference\": \"2e32a6d48972b2c1976ed5d8967145b6cec4a4a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"phpdocumentor/reflection-common\": \"^2.0\"
            },
            \"require-dev\": {
                \"ext-tokenizer\": \"^7.1\",
                \"mockery/mockery\": \"~1\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src\"
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
            \"description\": \"A PSR-5 based resolver of Class names, Types and Structural Element Names\",
            \"time\": \"2019-08-22T18:11:29+00:00\"
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
            \"name\": \"psr/link\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/link.git\",
                \"reference\": \"eea8e8662d5cd3ae4517c9b864493f59fca95562\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/link/zipball/eea8e8662d5cd3ae4517c9b864493f59fca95562\",
                \"reference\": \"eea8e8662d5cd3ae4517c9b864493f59fca95562\",
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
                    \"Psr\\\\Link\\\\\": \"src/\"
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
            \"description\": \"Common interfaces for HTTP links\",
            \"keywords\": [
                \"http\",
                \"http-link\",
                \"link\",
                \"psr\",
                \"psr-13\",
                \"rest\"
            ],
            \"time\": \"2016-10-28T16:06:13+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\",
                \"reference\": \"bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
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
            \"time\": \"2019-10-25T08:06:51+00:00\"
        },
        {
            \"name\": \"sensio/framework-extra-bundle\",
            \"version\": \"v5.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sensiolabs/SensioFrameworkExtraBundle.git\",
                \"reference\": \"dfc2c4df9f7d465a65c770e9feb578fe071636f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sensiolabs/SensioFrameworkExtraBundle/zipball/dfc2c4df9f7d465a65c770e9feb578fe071636f7\",
                \"reference\": \"dfc2c4df9f7d465a65c770e9feb578fe071636f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"php\": \">=7.1.3\",
                \"symfony/config\": \"^4.3|^5.0\",
                \"symfony/dependency-injection\": \"^4.3|^5.0\",
                \"symfony/framework-bundle\": \"^4.3|^5.0\",
                \"symfony/http-kernel\": \"^4.3|^5.0\"
            },
            \"conflict\": {
                \"doctrine/doctrine-cache-bundle\": \"<1.3.1\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"^1.11|^2.0\",
                \"doctrine/orm\": \"^2.5\",
                \"nyholm/psr7\": \"^1.1\",
                \"symfony/browser-kit\": \"^4.3|^5.0\",
                \"symfony/dom-crawler\": \"^4.3|^5.0\",
                \"symfony/expression-language\": \"^4.3|^5.0\",
                \"symfony/finder\": \"^4.3|^5.0\",
                \"symfony/monolog-bridge\": \"^4.0|^5.0\",
                \"symfony/monolog-bundle\": \"^3.2\",
                \"symfony/phpunit-bridge\": \"^4.3.5|^5.0\",
                \"symfony/psr-http-message-bridge\": \"^1.1\",
                \"symfony/security-bundle\": \"^4.3|^5.0\",
                \"symfony/twig-bundle\": \"^4.3|^5.0\",
                \"symfony/yaml\": \"^4.3|^5.0\",
                \"twig/twig\": \"^1.34|^2.4|^3.0\"
            },
            \"suggest\": {
                \"symfony/expression-language\": \"\",
                \"symfony/psr-http-message-bridge\": \"To use the PSR-7 converters\",
                \"symfony/security-bundle\": \"\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.5.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\\": \"src/\"
                },
                \"exclude-from-classmap\": [
                    \"/tests/\"
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
                }
            ],
            \"description\": \"This bundle provides a way to configure your controllers with annotations\",
            \"keywords\": [
                \"annotations\",
                \"controllers\"
            ],
            \"time\": \"2019-10-16T18:54:45+00:00\"
        },
        {
            \"name\": \"swiftmailer/swiftmailer\",
            \"version\": \"v6.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/swiftmailer/swiftmailer.git\",
                \"reference\": \"5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/swiftmailer/swiftmailer/zipball/5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\",
                \"reference\": \"5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"egulias/email-validator\": \"~2.0\",
                \"php\": \">=7.0.0\",
                \"symfony/polyfill-iconv\": \"^1.0\",
                \"symfony/polyfill-intl-idn\": \"^1.10\",
                \"symfony/polyfill-mbstring\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"~0.9.1\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\"
            },
            \"suggest\": {
                \"ext-intl\": \"Needed to support internationalized email addresses\",
                \"true/punycode\": \"Needed to support internationalized email addresses, if ext-intl is not installed\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.2-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"lib/swift_required.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Chris Corbyn\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Swiftmailer, free feature-rich PHP mailer\",
            \"homepage\": \"https://swiftmailer.symfony.com\",
            \"keywords\": [
                \"email\",
                \"mail\",
                \"mailer\"
            ],
            \"time\": \"2019-04-21T09:21:45+00:00\"
        },
        {
            \"name\": \"symfony/apache-pack\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/apache-pack.git\",
                \"reference\": \"3aa5818d73ad2551281fc58a75afd9ca82622e6c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/apache-pack/zipball/3aa5818d73ad2551281fc58a75afd9ca82622e6c\",
                \"reference\": \"3aa5818d73ad2551281fc58a75afd9ca82622e6c\",
                \"shasum\": \"\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for Apache support in Symfony\",
            \"time\": \"2017-12-12T01:46:35+00:00\"
        },
        {
            \"name\": \"symfony/asset\",
            \"version\": \"v4.3.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/asset.git\",
                \"reference\": \"3f97e57596884f7b9158d564a533112a0d19dbdd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/asset/zipball/3f97e57596884f7b9158d564a533112a0d19dbdd\",
                \"reference\": \"3f97e57596884f7b9158d564a533112a0d19dbdd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
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
            \"description\": \"Symfony Asset Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-03T21:50:52+00:00\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"40c62600ebad1ed2defbf7d35523d918a73ab330\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/40c62600ebad1ed2defbf7d35523d918a73ab330\",
                \"reference\": \"40c62600ebad1ed2defbf7d35523d918a73ab330\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/cache-contracts\": \"^1.1\",
                \"symfony/service-contracts\": \"^1.1\",
                \"symfony/var-exporter\": \"^4.2\"
            },
            \"conflict\": {
                \"doctrine/dbal\": \"<2.5\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\",
                \"symfony/cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.5\",
                \"predis/predis\": \"~1.1\",
                \"psr/simple-cache\": \"^1.0\",
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.1\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T10:57:53+00:00\"
        },
        {
            \"name\": \"symfony/cache-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache-contracts.git\",
                \"reference\": \"af50d14ada9e4e82cfabfabdc502d144f89be0a1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache-contracts/zipball/af50d14ada9e4e82cfabfabdc502d144f89be0a1\",
                \"reference\": \"af50d14ada9e4e82cfabfabdc502d144f89be0a1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/cache\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/cache-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Cache\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to caching\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-10-04T21:43:27+00:00\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"0acb26407a9e1a64a275142f0ae5e36436342720\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/0acb26407a9e1a64a275142f0ae5e36436342720\",
                \"reference\": \"0acb26407a9e1a64a275142f0ae5e36436342720\",
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
                \"symfony/messenger\": \"~4.1\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-19T15:51:53+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"929ddf360d401b958f611d44e726094ab46a7369\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/929ddf360d401b958f611d44e726094ab46a7369\",
                \"reference\": \"929ddf360d401b958f611d44e726094ab46a7369\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php73\": \"^1.8\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.3\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-07T12:36:49+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\",
                \"reference\": \"cc5c1efd0edfcfd10b354750594a46b3dd2afbbe\",
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-19T15:51:53+00:00\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"e1e0762a814b957a1092bff75a550db49724d05b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/e1e0762a814b957a1092bff75a550db49724d05b\",
                \"reference\": \"e1e0762a814b957a1092bff75a550db49724d05b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\",
                \"symfony/service-contracts\": \"^1.1.6\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.3\",
                \"symfony/finder\": \"<3.4\",
                \"symfony/proxy-manager-bridge\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\",
                \"symfony/service-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"^4.3\",
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-02T12:58:58+00:00\"
        },
        {
            \"name\": \"symfony/doctrine-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
                \"reference\": \"486fa65a74692d84f250087c79d0b89d30d655a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/486fa65a74692d84f250087c79d0b89d30d655a8\",
                \"reference\": \"486fa65a74692d84f250087c79d0b89d30d655a8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/event-manager\": \"~1.0\",
                \"doctrine/persistence\": \"~1.0\",
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/collections\": \"~1.0\",
                \"doctrine/data-fixtures\": \"1.0.*\",
                \"doctrine/dbal\": \"~2.4\",
                \"doctrine/orm\": \"^2.6.3\",
                \"doctrine/reflection\": \"~1.0\",
                \"symfony/config\": \"^4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~4.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/messenger\": \"~4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/proxy-manager-bridge\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-08T20:39:53+00:00\"
        },
        {
            \"name\": \"symfony/dotenv\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dotenv.git\",
                \"reference\": \"1785b18148a016b8f4e6a612291188d568e1f9cd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dotenv/zipball/1785b18148a016b8f4e6a612291188d568e1f9cd\",
                \"reference\": \"1785b18148a016b8f4e6a612291188d568e1f9cd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Dotenv\\\\\": \"\"
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
            \"description\": \"Registers environment variables from a .env_GogolejokeVoice file\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"dotenv\",
                \"env\",
                \"environment\"
            ],
            \"time\": \"2019-08-03T21:50:52+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"6229f58993e5a157f6096fc7145c0717d0be8807\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/6229f58993e5a157f6096fc7145c0717d0be8807\",
                \"reference\": \"6229f58993e5a157f6096fc7145c0717d0be8807\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"provide\": {
                \"psr/event-dispatcher-implementation\": \"1.0\",
                \"symfony/event-dispatcher-implementation\": \"1.1\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^3.4|^4.0\",
                \"symfony/service-contracts\": \"^1.1\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-01T16:40:32+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
                \"reference\": \"c43ab685673fb6c8d84220c77897b1d6cdbe1d18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/c43ab685673fb6c8d84220c77897b1d6cdbe1d18\",
                \"reference\": \"c43ab685673fb6c8d84220c77897b1d6cdbe1d18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"psr/event-dispatcher\": \"\",
                \"symfony/event-dispatcher-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to dispatching event\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T09:54:03+00:00\"
        },
        {
            \"name\": \"symfony/expression-language\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/expression-language.git\",
                \"reference\": \"c8b47d8820d3bf75f757eec8a2647584c14cf0c6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/expression-language/zipball/c8b47d8820d3bf75f757eec8a2647584c14cf0c6\",
                \"reference\": \"c8b47d8820d3bf75f757eec8a2647584c14cf0c6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\ExpressionLanguage\\\\\": \"\"
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
            \"description\": \"Symfony ExpressionLanguage Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"9abbb7ef96a51f4d7e69627bc6f63307994e4263\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/9abbb7ef96a51f4d7e69627bc6f63307994e4263\",
                \"reference\": \"9abbb7ef96a51f4d7e69627bc6f63307994e4263\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-08-20T14:07:54+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"5e575faa95548d0586f6bedaeabec259714e44d1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/5e575faa95548d0586f6bedaeabec259714e44d1\",
                \"reference\": \"5e575faa95548d0586f6bedaeabec259714e44d1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-09-16T11:29:48+00:00\"
        },
        {
            \"name\": \"symfony/flex\",
            \"version\": \"v1.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/flex.git\",
                \"reference\": \"133e649fdf08aeb8741be1ba955ccbe5cd17c696\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/flex/zipball/133e649fdf08aeb8741be1ba955ccbe5cd17c696\",
                \"reference\": \"133e649fdf08aeb8741be1ba955ccbe5cd17c696\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.0.2\",
                \"symfony/dotenv\": \"^3.4|^4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\",
                \"symfony/process\": \"^2.7|^3.0|^4.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.4-dev\"
                },
                \"class\": \"Symfony\\\\Flex\\\\Flex\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Flex\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien.potencier@gmail.com\"
                }
            ],
            \"description\": \"Composer plugin for Symfony\",
            \"time\": \"2019-09-19T14:55:57+00:00\"
        },
        {
            \"name\": \"symfony/form\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/form.git\",
                \"reference\": \"4a799fb998c325ac77fc5513f35be033cc0edf3c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/form/zipball/4a799fb998c325ac77fc5513f35be033cc0edf3c\",
                \"reference\": \"4a799fb998c325ac77fc5513f35be033cc0edf3c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/intl\": \"^4.3\",
                \"symfony/options-resolver\": \"~4.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"~1.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/console\": \"<4.3\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/doctrine-bridge\": \"<3.4\",
                \"symfony/framework-bundle\": \"<3.4\",
                \"symfony/http-kernel\": \"<4.3\",
                \"symfony/intl\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/twig-bridge\": \"<3.4.5|<4.0.5,>=4.0\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"^4.3\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~4.3\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\",
                \"symfony/var-dumper\": \"^4.3\"
            },
            \"suggest\": {
                \"symfony/security-csrf\": \"For protecting forms against CSRF attacks.\",
                \"symfony/twig-bridge\": \"For templating with Twig.\",
                \"symfony/validator\": \"For form validation.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Form\\\\\": \"\"
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
            \"description\": \"Symfony Form Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-27T14:21:32+00:00\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"fca765488ecea04bf6c1c502d7b0214fa29460d8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/fca765488ecea04bf6c1c502d7b0214fa29460d8\",
                \"reference\": \"fca765488ecea04bf6c1c502d7b0214fa29460d8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/cache\": \"^4.3.4\",
                \"symfony/config\": \"^4.3.4\",
                \"symfony/debug\": \"~4.0\",
                \"symfony/dependency-injection\": \"^4.3\",
                \"symfony/filesystem\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"^4.3\",
                \"symfony/http-kernel\": \"^4.3.4\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"^4.3\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.4\",
                \"symfony/browser-kit\": \"<4.3\",
                \"symfony/console\": \"<4.3\",
                \"symfony/dom-crawler\": \"<4.3\",
                \"symfony/dotenv\": \"<4.2\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.3\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/serializer\": \"<4.2\",
                \"symfony/stopwatch\": \"<3.4\",
                \"symfony/translation\": \"<4.3\",
                \"symfony/twig-bridge\": \"<4.1.1\",
                \"symfony/validator\": \"<4.1\",
                \"symfony/workflow\": \"<4.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"^4.3\",
                \"symfony/console\": \"^4.3.4\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"^4.3\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.3.4\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/mailer\": \"^4.3\",
                \"symfony/messenger\": \"^4.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/security-http\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"^4.3\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.3\",
                \"symfony/twig-bundle\": \"~2.8|~3.2|~4.0\",
                \"symfony/validator\": \"^4.1\",
                \"symfony/var-dumper\": \"^4.3\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"^4.3\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.41|~2.10\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T17:45:43+00:00\"
        },
        {
            \"name\": \"symfony/http-client\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-client.git\",
                \"reference\": \"69d438274718121e1166e7f65c290f891a4c8ddb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-client/zipball/69d438274718121e1166e7f65c290f891a4c8ddb\",
                \"reference\": \"69d438274718121e1166e7f65c290f891a4c8ddb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"^1.0\",
                \"symfony/http-client-contracts\": \"^1.1.7\",
                \"symfony/polyfill-php73\": \"^1.11\"
            },
            \"provide\": {
                \"psr/http-client-implementation\": \"1.0\",
                \"symfony/http-client-implementation\": \"1.1\"
            },
            \"require-dev\": {
                \"nyholm/psr7\": \"^1.0\",
                \"psr/http-client\": \"^1.0\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/process\": \"^4.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpClient\\\\\": \"\"
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
            \"description\": \"Symfony HttpClient component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-07T10:52:41+00:00\"
        },
        {
            \"name\": \"symfony/http-client-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-client-contracts.git\",
                \"reference\": \"353b2a3e907e5c34cf8f74827a4b21eb745aab1d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-client-contracts/zipball/353b2a3e907e5c34cf8f74827a4b21eb745aab1d\",
                \"reference\": \"353b2a3e907e5c34cf8f74827a4b21eb745aab1d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"symfony/http-client-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\HttpClient\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to HTTP clients\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-26T22:09:58+00:00\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"76590ced16d4674780863471bae10452b79210a5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/76590ced16d4674780863471bae10452b79210a5\",
                \"reference\": \"76590ced16d4674780863471bae10452b79210a5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"predis/predis\": \"~1.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T19:48:13+00:00\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"5f08141850932e8019c01d8988bf3ed6367d2991\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/5f08141850932e8019c01d8988bf3ed6367d2991\",
                \"reference\": \"5f08141850932e8019c01d8988bf3ed6367d2991\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/http-foundation\": \"^4.1.1\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-php73\": \"^1.9\"
            },
            \"conflict\": {
                \"symfony/browser-kit\": \"<4.3\",
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/var-dumper\": \"<4.1.1\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"^4.3\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.3\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/translation-contracts\": \"^1.1\",
                \"symfony/var-dumper\": \"^4.1.1\",
                \"twig/twig\": \"^1.34|^2.4\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-07T15:06:41+00:00\"
        },
        {
            \"name\": \"symfony/inflector\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/inflector.git\",
                \"reference\": \"fc488a52c79b2bbe848fa9def35f2cccb47c4798\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/inflector/zipball/fc488a52c79b2bbe848fa9def35f2cccb47c4798\",
                \"reference\": \"fc488a52c79b2bbe848fa9def35f2cccb47c4798\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Inflector\\\\\": \"\"
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
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Inflector Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"inflection\",
                \"pluralize\",
                \"singularize\",
                \"string\",
                \"symfony\",
                \"words\"
            ],
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/intl\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/intl.git\",
                \"reference\": \"818771ff6acef04cdce05023ddfc39b7078014bf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/intl/zipball/818771ff6acef04cdce05023ddfc39b7078014bf\",
                \"reference\": \"818771ff6acef04cdce05023ddfc39b7078014bf\",
                \"shasum\": \"\"
            },
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Intl\\\\\": \"\"
                },
                \"classmap\": [
                    \"Resources/stubs\"
                ],
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
            \"description\": \"A PHP replacement layer for the C intl extension that includes additional data from the ICU library.\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"i18n\",
                \"icu\",
                \"internationalization\",
                \"intl\",
                \"l10n\",
                \"localization\"
            ],
            \"time\": \"2019-10-04T21:18:34+00:00\"
        },
        {
            \"name\": \"symfony/mime\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/mime.git\",
                \"reference\": \"32f71570547b91879fdbd9cf50317d556ae86916\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/mime/zipball/32f71570547b91879fdbd9cf50317d556ae86916\",
                \"reference\": \"32f71570547b91879fdbd9cf50317d556ae86916\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-intl-idn\": \"^1.10\",
                \"symfony/polyfill-mbstring\": \"^1.0\"
            },
            \"require-dev\": {
                \"egulias/email-validator\": \"^2.1.10\",
                \"symfony/dependency-injection\": \"~3.4|^4.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Mime\\\\\": \"\"
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
            \"description\": \"A library to manipulate MIME messages\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"mime\",
                \"mime-type\"
            ],
            \"time\": \"2019-09-19T17:00:15+00:00\"
        },
        {
            \"name\": \"symfony/monolog-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/monolog-bridge.git\",
                \"reference\": \"6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/monolog-bridge/zipball/6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\",
                \"reference\": \"6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.19\",
                \"php\": \"^7.1.3\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\",
                \"symfony/http-foundation\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For the possibility to show log messages in console commands depending on verbosity settings.\",
                \"symfony/http-kernel\": \"For using the debugging handlers together with the response life cycle of the HTTP kernel.\",
                \"symfony/var-dumper\": \"For using the debugging handlers like the console handler or the log server handler.\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Monolog\\\\\": \"\"
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
            \"description\": \"Symfony Monolog Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-06T09:34:03+00:00\"
        },
        {
            \"name\": \"symfony/monolog-bundle\",
            \"version\": \"v3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/monolog-bundle.git\",
                \"reference\": \"7fbecb371c1c614642c93c6b2cbcdf723ae8809d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/monolog-bundle/zipball/7fbecb371c1c614642c93c6b2cbcdf723ae8809d\",
                \"reference\": \"7fbecb371c1c614642c93c6b2cbcdf723ae8809d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.22\",
                \"php\": \">=5.6\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4.10|^4.0.10\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/monolog-bridge\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/phpunit-bridge\": \"^3.4.19|^4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\MonologBundle\\\\\": \"\"
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
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                },
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                }
            ],
            \"description\": \"Symfony MonologBundle\",
            \"homepage\": \"http://symfony.com\",
            \"keywords\": [
                \"log\",
                \"logging\"
            ],
            \"time\": \"2019-06-20T12:18:19+00:00\"
        },
        {
            \"name\": \"symfony/options-resolver\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"81c2e120522a42f623233968244baebd6b36cb6a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/81c2e120522a42f623233968244baebd6b36cb6a\",
                \"reference\": \"81c2e120522a42f623233968244baebd6b36cb6a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\OptionsResolver\\\\\": \"\"
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
            \"description\": \"Symfony OptionsResolver Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"config\",
                \"configuration\",
                \"options\"
            ],
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/orm-pack\",
            \"version\": \"v1.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/orm-pack.git\",
                \"reference\": \"c57f5e05232ca40626eb9fa52a32bc8565e9231c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/orm-pack/zipball/c57f5e05232ca40626eb9fa52a32bc8565e9231c\",
                \"reference\": \"c57f5e05232ca40626eb9fa52a32bc8565e9231c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/doctrine-bundle\": \"^1.6.10|^2.0\",
                \"doctrine/doctrine-migrations-bundle\": \"^1.3|^2.0\",
                \"doctrine/orm\": \"^2.5.11\",
                \"php\": \"^7.0\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Doctrine ORM\",
            \"time\": \"2019-10-18T05:41:09+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-icu\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-icu.git\",
                \"reference\": \"66810b9d6eb4af54d543867909d65ab9af654d7e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-icu/zipball/66810b9d6eb4af54d543867909d65ab9af654d7e\",
                \"reference\": \"66810b9d6eb4af54d543867909d65ab9af654d7e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"symfony/intl\": \"~2.3|~3.0|~4.0|~5.0\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
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
            \"description\": \"Symfony polyfill for intl's ICU-related data and classes\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"icu\",
                \"intl\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-idn\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-idn.git\",
                \"reference\": \"6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\",
                \"reference\": \"6af626ae6fa37d396dc90a399c0ff08e5cfc45b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"symfony/polyfill-mbstring\": \"^1.3\",
                \"symfony/polyfill-php72\": \"^1.9\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\"
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
                    \"name\": \"Laurent Bassin\",
                    \"email\": \"laurent@bassin.info\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"idn\",
                \"intl\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"b42a2f66e8f1b15ccf25652c3424265923eb4f17\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/b42a2f66e8f1b15ccf25652c3424265923eb4f17\",
                \"reference\": \"b42a2f66e8f1b15ccf25652c3424265923eb4f17\",
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
                    \"dev-master\": \"1.12-dev\"
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
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php72\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php72.git\",
                \"reference\": \"04ce3335667451138df4307d6a9b61565560199e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php72/zipball/04ce3335667451138df4307d6a9b61565560199e\",
                \"reference\": \"04ce3335667451138df4307d6a9b61565560199e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php72\\\\\": \"\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"2ceb49eaccb9352bff54d22570276bb75ba4a188\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/2ceb49eaccb9352bff54d22570276bb75ba4a188\",
                \"reference\": \"2ceb49eaccb9352bff54d22570276bb75ba4a188\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"classmap\": [
                    \"Resources/stubs\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"50556892f3cc47d4200bfd1075314139c4c9ff4b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/50556892f3cc47d4200bfd1075314139c4c9ff4b\",
                \"reference\": \"50556892f3cc47d4200bfd1075314139c4c9ff4b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
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
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-26T21:17:10+00:00\"
        },
        {
            \"name\": \"symfony/property-access\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/property-access.git\",
                \"reference\": \"bb0c302375ffeef60c31e72a4539611b7f787565\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/property-access/zipball/bb0c302375ffeef60c31e72a4539611b7f787565\",
                \"reference\": \"bb0c302375ffeef60c31e72a4539611b7f787565\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/inflector\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/cache\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/cache-implementation\": \"To cache access methods.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\PropertyAccess\\\\\": \"\"
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
            \"description\": \"Symfony PropertyAccess Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"access\",
                \"array\",
                \"extraction\",
                \"index\",
                \"injection\",
                \"object\",
                \"property\",
                \"property path\",
                \"reflection\"
            ],
            \"time\": \"2019-08-26T08:26:39+00:00\"
        },
        {
            \"name\": \"symfony/property-info\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/property-info.git\",
                \"reference\": \"6e4bf437295ef11eb3665ec8f800fb14a74cb976\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/property-info/zipball/6e4bf437295ef11eb3665ec8f800fb14a74cb976\",
                \"reference\": \"6e4bf437295ef11eb3665ec8f800fb14a74cb976\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/inflector\": \"~3.4|~4.0\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0||>=3.2.0,<3.2.2\",
                \"phpdocumentor/type-resolver\": \"<0.3.0\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/serializer\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"phpdocumentor/reflection-docblock\": \"To use the PHPDoc\",
                \"psr/cache-implementation\": \"To cache results\",
                \"symfony/doctrine-bridge\": \"To use Doctrine metadata\",
                \"symfony/serializer\": \"To use Serializer metadata\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\PropertyInfo\\\\\": \"\"
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
                    \"name\": \"Kévin Dunglas\",
                    \"email\": \"dunglas@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Property Info Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"doctrine\",
                \"phpdoc\",
                \"property\",
                \"symfony\",
                \"type\",
                \"validator\"
            ],
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"3b174ef04fe66696524efad1e5f7a6c663d822ea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/3b174ef04fe66696524efad1e5f7a6c663d822ea\",
                \"reference\": \"3b174ef04fe66696524efad1e5f7a6c663d822ea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.2\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.2\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-10-04T20:57:10+00:00\"
        },
        {
            \"name\": \"symfony/security-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-bundle.git\",
                \"reference\": \"aa3cd52168c2e5c99effe560907f22fcffe8a788\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-bundle/zipball/aa3cd52168c2e5c99effe560907f22fcffe8a788\",
                \"reference\": \"aa3cd52168c2e5c99effe560907f22fcffe8a788\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"^4.2\",
                \"symfony/dependency-injection\": \"^4.2\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/security-core\": \"~4.3\",
                \"symfony/security-csrf\": \"~4.2\",
                \"symfony/security-guard\": \"~4.2\",
                \"symfony/security-http\": \"^4.3\"
            },
            \"conflict\": {
                \"symfony/browser-kit\": \"<4.2\",
                \"symfony/console\": \"<3.4\",
                \"symfony/framework-bundle\": \"<4.3.4\",
                \"symfony/twig-bundle\": \"<4.2\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"~1.5\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/browser-kit\": \"~4.2\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/framework-bundle\": \"^4.3.4\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~3.4|~4.0\",
                \"symfony/twig-bridge\": \"~3.4|~4.0\",
                \"symfony/twig-bundle\": \"~4.2\",
                \"symfony/validator\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.41|~2.10\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\SecurityBundle\\\\\": \"\"
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
            \"description\": \"Symfony SecurityBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-05T18:00:30+00:00\"
        },
        {
            \"name\": \"symfony/security-core\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-core.git\",
                \"reference\": \"a6f763c1f093b833d371f813519a1a8c07b75fb9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-core/zipball/a6f763c1f093b833d371f813519a1a8c07b75fb9\",
                \"reference\": \"a6f763c1f093b833d371f813519a1a8c07b75fb9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/event-dispatcher-contracts\": \"^1.1\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/security-guard\": \"<4.3\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"psr/log\": \"~1.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/ldap\": \"~3.4|~4.0\",
                \"symfony/validator\": \"^3.4.31|^4.3.4\"
            },
            \"suggest\": {
                \"psr/container-implementation\": \"To instantiate the Security class\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/expression-language\": \"For using the expression voter\",
                \"symfony/http-foundation\": \"\",
                \"symfony/ldap\": \"For using LDAP integration\",
                \"symfony/validator\": \"For using the user password constraint\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Core\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - Core Library\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-10T11:22:25+00:00\"
        },
        {
            \"name\": \"symfony/security-csrf\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-csrf.git\",
                \"reference\": \"0760ec651ea8ff81e22097780337e43f3a795769\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-csrf/zipball/0760ec651ea8ff81e22097780337e43f3a795769\",
                \"reference\": \"0760ec651ea8ff81e22097780337e43f3a795769\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/security-core\": \"~3.4|~4.0\"
            },
            \"conflict\": {
                \"symfony/http-foundation\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"For using the class SessionTokenStorage.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Csrf\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - CSRF Library\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-24T15:54:14+00:00\"
        },
        {
            \"name\": \"symfony/security-guard\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-guard.git\",
                \"reference\": \"4beec980b6a0122afc1ca166ca50ce3b84398507\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-guard/zipball/4beec980b6a0122afc1ca166ca50ce3b84398507\",
                \"reference\": \"4beec980b6a0122afc1ca166ca50ce3b84398507\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/security-core\": \"~3.4.22|^4.2.3\",
                \"symfony/security-http\": \"^4.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Guard\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - Guard\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-17T11:12:06+00:00\"
        },
        {
            \"name\": \"symfony/security-http\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/security-http.git\",
                \"reference\": \"b91b6d4d1bded8365f23f6bd4290d28bc6af0832\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/security-http/zipball/b91b6d4d1bded8365f23f6bd4290d28bc6af0832\",
                \"reference\": \"b91b6d4d1bded8365f23f6bd4290d28bc6af0832\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/security-core\": \"^4.3\"
            },
            \"conflict\": {
                \"symfony/security-csrf\": \"<3.4.11|~4.0,<4.0.11\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/security-csrf\": \"^3.4.11|^4.0.11\"
            },
            \"suggest\": {
                \"symfony/routing\": \"For using the HttpUtils class to create sub-requests, redirect the user, and match URLs\",
                \"symfony/security-csrf\": \"For using tokens to protect authentication/logout attempts\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Security\\\\Http\\\\\": \"\"
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
            \"description\": \"Symfony Security Component - HTTP Integration\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-04T21:11:33+00:00\"
        },
        {
            \"name\": \"symfony/serializer\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/serializer.git\",
                \"reference\": \"805eacc72d28e237ef31659344a4d72acef335ec\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/serializer/zipball/805eacc72d28e237ef31659344a4d72acef335ec\",
                \"reference\": \"805eacc72d28e237ef31659344a4d72acef335ec\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"phpdocumentor/type-resolver\": \"<0.2.1\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/property-access\": \"<3.4\",
                \"symfony/property-info\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"^3.4.13|~4.0\",
                \"symfony/validator\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
                \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
                \"psr/cache-implementation\": \"For using the metadata cache.\",
                \"symfony/config\": \"For using the XML mapping loader.\",
                \"symfony/http-foundation\": \"For using a MIME type guesser within the DataUriNormalizer.\",
                \"symfony/property-access\": \"For using the ObjectNormalizer.\",
                \"symfony/property-info\": \"To deserialize relations.\",
                \"symfony/yaml\": \"For using the default YAML mapping loader.\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Serializer\\\\\": \"\"
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
            \"description\": \"Symfony Serializer Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T15:03:35+00:00\"
        },
        {
            \"name\": \"symfony/serializer-pack\",
            \"version\": \"v1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/serializer-pack.git\",
                \"reference\": \"c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/serializer-pack/zipball/c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\",
                \"reference\": \"c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"symfony/property-access\": \"*\",
                \"symfony/property-info\": \"*\",
                \"symfony/serializer\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Symfony serializer\",
            \"time\": \"2018-12-10T12:14:14+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"ffcde9615dc5bb4825b9f6aed07716f1f57faae0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/ffcde9615dc5bb4825b9f6aed07716f1f57faae0\",
                \"reference\": \"ffcde9615dc5bb4825b9f6aed07716f1f57faae0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Service\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to writing services\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T11:12:18+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"1e4ff456bd625be5032fac9be4294e60442e9b71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/1e4ff456bd625be5032fac9be4294e60442e9b71\",
                \"reference\": \"1e4ff456bd625be5032fac9be4294e60442e9b71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/service-contracts\": \"^1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-08-07T11:52:19+00:00\"
        },
        {
            \"name\": \"symfony/swiftmailer-bundle\",
            \"version\": \"v3.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/swiftmailer-bundle.git\",
                \"reference\": \"6b895bc0a5e815d1bf2d444869415a7c752516aa\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/swiftmailer-bundle/zipball/6b895bc0a5e815d1bf2d444869415a7c752516aa\",
                \"reference\": \"6b895bc0a5e815d1bf2d444869415a7c752516aa\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0.0\",
                \"swiftmailer/swiftmailer\": \"^6.1.3\",
                \"symfony/config\": \"^3.4|^4.0|^5.0\",
                \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
                \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
            },
            \"conflict\": {
                \"twig/twig\": \"<1.41|<2.10\"
            },
            \"require-dev\": {
                \"symfony/console\": \"^3.4|^4.0|^5.0\",
                \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
                \"symfony/phpunit-bridge\": \"^3.4.32|^4.3.5|^5.0\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"suggest\": {
                \"psr/log\": \"Allows logging\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\SwiftmailerBundle\\\\\": \"\"
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
                    \"homepage\": \"http://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony SwiftmailerBundle\",
            \"homepage\": \"http://symfony.com\",
            \"time\": \"2019-10-20T12:05:18+00:00\"
        },
        {
            \"name\": \"symfony/translation\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/translation.git\",
                \"reference\": \"fe6193b066c457c144333c06aaa869a2d42a167f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/translation/zipball/fe6193b066c457c144333c06aaa869a2d42a167f\",
                \"reference\": \"fe6193b066c457c144333c06aaa869a2d42a167f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/translation-contracts\": \"^1.1.6\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.4\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"provide\": {
                \"symfony/translation-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~2.8|~3.0|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/intl\": \"~3.4|~4.0\",
                \"symfony/service-contracts\": \"^1.1.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log-implementation\": \"To use logging capability in translator\",
                \"symfony/config\": \"\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Translation\\\\\": \"\"
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
            \"description\": \"Symfony Translation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-27T14:37:39+00:00\"
        },
        {
            \"name\": \"symfony/translation-contracts\",
            \"version\": \"v1.1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/translation-contracts.git\",
                \"reference\": \"364518c132c95642e530d9b2d217acbc2ccac3e6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/translation-contracts/zipball/364518c132c95642e530d9b2d217acbc2ccac3e6\",
                \"reference\": \"364518c132c95642e530d9b2d217acbc2ccac3e6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"suggest\": {
                \"symfony/translation-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Translation\\\\\": \"\"
                }
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
            \"description\": \"Generic abstractions related to translation\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2019-09-17T11:12:18+00:00\"
        },
        {
            \"name\": \"symfony/twig-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bridge.git\",
                \"reference\": \"499b3f3aedffa44e4e30b476bbd433854afc9bc3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/499b3f3aedffa44e4e30b476bbd433854afc9bc3\",
                \"reference\": \"499b3f3aedffa44e4e30b476bbd433854afc9bc3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/translation-contracts\": \"^1.1\",
                \"twig/twig\": \"^1.41|^2.10\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\",
                \"symfony/form\": \"<4.3.4\",
                \"symfony/http-foundation\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/workflow\": \"<4.3\"
            },
            \"require-dev\": {
                \"egulias/email-validator\": \"^2.1.10\",
                \"fig/link-util\": \"^1.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/form\": \"^4.3.4\",
                \"symfony/http-foundation\": \"~4.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/mime\": \"~4.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/security-acl\": \"~2.8|~3.0\",
                \"symfony/security-core\": \"~3.0|~4.0\",
                \"symfony/security-csrf\": \"~3.4|~4.0\",
                \"symfony/security-http\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"^4.2.1\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/workflow\": \"~4.3\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/asset\": \"For using the AssetExtension\",
                \"symfony/expression-language\": \"For using the ExpressionExtension\",
                \"symfony/finder\": \"\",
                \"symfony/form\": \"For using the FormExtension\",
                \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
                \"symfony/routing\": \"For using the RoutingExtension\",
                \"symfony/security-core\": \"For using the SecurityExtension\",
                \"symfony/security-csrf\": \"For using the CsrfExtension\",
                \"symfony/security-http\": \"For using the LogoutUrlExtension\",
                \"symfony/stopwatch\": \"For using the StopwatchExtension\",
                \"symfony/templating\": \"For using the TwigEngine\",
                \"symfony/translation\": \"For using the TranslationExtension\",
                \"symfony/var-dumper\": \"For using the DumpExtension\",
                \"symfony/web-link\": \"For using the WebLinkExtension\",
                \"symfony/yaml\": \"For using the YamlExtension\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
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
            \"description\": \"Symfony Twig Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/twig-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bundle.git\",
                \"reference\": \"c27738bb0d9b314b96a323aebc5f40a20e2a644b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/c27738bb0d9b314b96a323aebc5f40a20e2a644b\",
                \"reference\": \"c27738bb0d9b314b96a323aebc5f40a20e2a644b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"~4.2\",
                \"symfony/debug\": \"~4.0\",
                \"symfony/http-foundation\": \"~4.3\",
                \"symfony/http-kernel\": \"~4.1\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/twig-bridge\": \"^4.3\",
                \"twig/twig\": \"~1.41|~2.10\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<4.1\",
                \"symfony/framework-bundle\": \"<4.3\",
                \"symfony/translation\": \"<4.2\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"symfony/asset\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"^4.2.5\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/finder\": \"~3.4|~4.0\",
                \"symfony/form\": \"~3.4|~4.0\",
                \"symfony/framework-bundle\": \"~4.3\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\",
                \"symfony/templating\": \"~3.4|~4.0\",
                \"symfony/translation\": \"^4.2\",
                \"symfony/web-link\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
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
            \"description\": \"Symfony TwigBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/validator\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/validator.git\",
                \"reference\": \"dd344bae7894ce8d6c399d854d894eb6e52ee178\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/validator/zipball/dd344bae7894ce8d6c399d854d894eb6e52ee178\",
                \"reference\": \"dd344bae7894ce8d6c399d854d894eb6e52ee178\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/translation-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"doctrine/lexer\": \"<1.0.2\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/http-kernel\": \"<3.4\",
                \"symfony/intl\": \"<4.3\",
                \"symfony/translation\": \"<4.2\",
                \"symfony/yaml\": \"<3.4\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.7\",
                \"doctrine/cache\": \"~1.0\",
                \"egulias/email-validator\": \"^2.1.10\",
                \"symfony/cache\": \"~3.4|~4.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/expression-language\": \"~3.4|~4.0\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/http-foundation\": \"~4.1\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/intl\": \"^4.3\",
                \"symfony/property-access\": \"~3.4|~4.0\",
                \"symfony/property-info\": \"~3.4|~4.0\",
                \"symfony/translation\": \"~4.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"symfony/yaml\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation mapping. You will also need doctrine/cache.\",
                \"doctrine/cache\": \"For using the default cached annotation reader and metadata cache.\",
                \"egulias/email-validator\": \"Strict (RFC compliant) email validation\",
                \"psr/cache-implementation\": \"For using the metadata cache.\",
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using the Expression validator\",
                \"symfony/http-foundation\": \"\",
                \"symfony/intl\": \"\",
                \"symfony/property-access\": \"For accessing properties within comparison constraints\",
                \"symfony/property-info\": \"To automatically add NotNull and Type constraints\",
                \"symfony/translation\": \"For translating validation errors.\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Validator\\\\\": \"\"
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
            \"description\": \"Symfony Validator Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-07T12:36:49+00:00\"
        },
        {
            \"name\": \"symfony/var-exporter\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/var-exporter.git\",
                \"reference\": \"d5b4e2d334c1d80e42876c7d489896cfd37562f2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/var-exporter/zipball/d5b4e2d334c1d80e42876c7d489896cfd37562f2\",
                \"reference\": \"d5b4e2d334c1d80e42876c7d489896cfd37562f2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\VarExporter\\\\\": \"\"
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
            \"description\": \"A blend of var_export() + serialize() to turn any serializable data structure to plain PHP code\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"clone\",
                \"construct\",
                \"export\",
                \"hydrate\",
                \"instantiate\",
                \"serialize\"
            ],
            \"time\": \"2019-08-22T07:33:08+00:00\"
        },
        {
            \"name\": \"symfony/web-link\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-link.git\",
                \"reference\": \"4bd0ce7c54d604300deee8eb1b1beda856fbba20\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-link/zipball/4bd0ce7c54d604300deee8eb1b1beda856fbba20\",
                \"reference\": \"4bd0ce7c54d604300deee8eb1b1beda856fbba20\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"fig/link-util\": \"^1.0\",
                \"php\": \"^7.1.3\",
                \"psr/link\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \"<4.3\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"^4.3\"
            },
            \"suggest\": {
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\WebLink\\\\\": \"\"
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
                    \"name\": \"Kévin Dunglas\",
                    \"email\": \"dunglas@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony WebLink Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"dns-prefetch\",
                \"http\",
                \"http2\",
                \"link\",
                \"performance\",
                \"prefetch\",
                \"preload\",
                \"prerender\",
                \"psr13\",
                \"push\"
            ],
            \"time\": \"2019-08-08T09:29:19+00:00\"
        },
        {
            \"name\": \"symfony/web-server-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-server-bundle.git\",
                \"reference\": \"dc26b980900ddf3e9feade14e5b21c029e8ca92f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-server-bundle/zipball/dc26b980900ddf3e9feade14e5b21c029e8ca92f\",
                \"reference\": \"dc26b980900ddf3e9feade14e5b21c029e8ca92f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/process\": \"^3.4.2|^4.0.2\"
            },
            \"suggest\": {
                \"symfony/expression-language\": \"For using the filter option of the log server.\",
                \"symfony/monolog-bridge\": \"For using the log server.\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebServerBundle\\\\\": \"\"
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
            \"description\": \"Symfony WebServerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-08-20T14:27:59+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"41e16350a2a1c7383c4735aa2f9fce74cf3d1178\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/41e16350a2a1c7383c4735aa2f9fce74cf3d1178\",
                \"reference\": \"41e16350a2a1c7383c4735aa2f9fce74cf3d1178\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For validating YAML files using the lint command\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
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
            \"description\": \"Symfony Yaml Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-11T15:41:19+00:00\"
        },
        {
            \"name\": \"twig/twig\",
            \"version\": \"v2.12.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/twigphp/Twig.git\",
                \"reference\": \"ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\",
                \"reference\": \"ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\",
                \"symfony/polyfill-mbstring\": \"^1.3\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"symfony/debug\": \"^3.4|^4.2\",
                \"symfony/phpunit-bridge\": \"^4.4@dev|^5.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Twig_\": \"lib/\"
                },
                \"psr-4\": {
                    \"Twig\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\",
                    \"homepage\": \"http://fabien.potencier.org\",
                    \"role\": \"Lead Developer\"
                },
                {
                    \"name\": \"Twig Team\",
                    \"homepage\": \"https://twig.symfony.com/contributors\",
                    \"role\": \"Contributors\"
                },
                {
                    \"name\": \"Armin Ronacher\",
                    \"email\": \"armin.ronacher@active-4.com\",
                    \"role\": \"Project Founder\"
                }
            ],
            \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
            \"homepage\": \"https://twig.symfony.com\",
            \"keywords\": [
                \"templating\"
            ],
            \"time\": \"2019-10-17T07:34:53+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
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
            \"time\": \"2019-08-24T08:43:50+00:00\"
        },
        {
            \"name\": \"zendframework/zend-code\",
            \"version\": \"3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-code.git\",
                \"reference\": \"46feaeecea14161734b56c1ace74f28cb329f194\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/46feaeecea14161734b56c1ace74f28cb329f194\",
                \"reference\": \"46feaeecea14161734b56c1ace74f28cb329f194\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-phar\": \"*\",
                \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
                \"zendframework/zend-coding-standard\": \"^1.0\",
                \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
                \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4.x-dev\",
                    \"dev-develop\": \"3.5.x-dev\"
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
            \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
            \"keywords\": [
                \"ZendFramework\",
                \"code\",
                \"zf\"
            ],
            \"time\": \"2019-10-05T23:18:22+00:00\"
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
            \"name\": \"easycorp/easy-log-handler\",
            \"version\": \"v1.0.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/EasyCorp/easy-log-handler.git\",
                \"reference\": \"224e1dfcf9455aceee89cd0af306ac097167fac1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/EasyCorp/easy-log-handler/zipball/224e1dfcf9455aceee89cd0af306ac097167fac1\",
                \"reference\": \"224e1dfcf9455aceee89cd0af306ac097167fac1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"monolog/monolog\": \"~1.6|~2.0\",
                \"php\": \">=7.1\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"EasyCorp\\\\EasyLog\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Javier Eguiluz\",
                    \"email\": \"javiereguiluz@gmail.com\"
                },
                {
                    \"name\": \"Project Contributors\",
                    \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\"
                }
            ],
            \"description\": \"A handler for Monolog that optimizes log messages to be processed by humans instead of software. Improve your productivity with log that are easy to understand.\",
            \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\",
            \"keywords\": [
                \"easy\",
                \"log\",
                \"logging\",
                \"monolog\",
                \"productivity\"
            ],
            \"time\": \"2019-10-24T07:13:31+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\",
                \"reference\": \"b76bbc3c51f22c570648de48e8c2d941ed5e2cf2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"ircmaxell/php-yacc\": \"0.0.4\",
                \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
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
            \"time\": \"2019-10-25T18:33:07+00:00\"
        },
        {
            \"name\": \"symfony/browser-kit\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/browser-kit.git\",
                \"reference\": \"78b7611c45039e8ce81698be319851529bf040b1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/browser-kit/zipball/78b7611c45039e8ce81698be319851529bf040b1\",
                \"reference\": \"78b7611c45039e8ce81698be319851529bf040b1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/dom-crawler\": \"~3.4|~4.0\"
            },
            \"require-dev\": {
                \"symfony/css-selector\": \"~3.4|~4.0\",
                \"symfony/http-client\": \"^4.3\",
                \"symfony/mime\": \"^4.3\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\BrowserKit\\\\\": \"\"
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
            \"description\": \"Symfony BrowserKit Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-10T11:25:17+00:00\"
        },
        {
            \"name\": \"symfony/css-selector\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/css-selector.git\",
                \"reference\": \"f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/css-selector/zipball/f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\",
                \"reference\": \"f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\CssSelector\\\\\": \"\"
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
                    \"name\": \"Jean-François Simon\",
                    \"email\": \"jeanfrancois.simon@sensiolabs.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony CssSelector Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/debug-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug-bundle.git\",
                \"reference\": \"bb83f93785dae1f9c227a408ced3eb3f86399bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug-bundle/zipball/bb83f93785dae1f9c227a408ced3eb3f86399bf8\",
                \"reference\": \"bb83f93785dae1f9c227a408ced3eb3f86399bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-xml\": \"*\",
                \"php\": \"^7.1.3\",
                \"symfony/http-kernel\": \"~3.4|~4.0\",
                \"symfony/twig-bridge\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.1.1\"
            },
            \"conflict\": {
                \"symfony/config\": \"<4.2\",
                \"symfony/dependency-injection\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~4.2\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/web-profiler-bundle\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/config\": \"For service container configuration\",
                \"symfony/dependency-injection\": \"For using as a service from the container\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\DebugBundle\\\\\": \"\"
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
            \"description\": \"Symfony DebugBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-07-19T08:33:28+00:00\"
        },
        {
            \"name\": \"symfony/debug-pack\",
            \"version\": \"v1.0.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug-pack.git\",
                \"reference\": \"09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug-pack/zipball/09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\",
                \"reference\": \"09a4a1e9bf2465987d4f79db0ad6c11cc632bc79\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"easycorp/easy-log-handler\": \"^1.0.7\",
                \"php\": \"^7.0\",
                \"symfony/debug-bundle\": \"*\",
                \"symfony/monolog-bundle\": \"^3.0\",
                \"symfony/profiler-pack\": \"*\",
                \"symfony/var-dumper\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A debug pack for Symfony projects\",
            \"time\": \"2018-12-10T12:11:11+00:00\"
        },
        {
            \"name\": \"symfony/dom-crawler\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dom-crawler.git\",
                \"reference\": \"e9f7b4d19d69b133bd638eeddcdc757723b4211f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dom-crawler/zipball/e9f7b4d19d69b133bd638eeddcdc757723b4211f\",
                \"reference\": \"e9f7b4d19d69b133bd638eeddcdc757723b4211f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"masterminds/html5\": \"<2.6\"
            },
            \"require-dev\": {
                \"masterminds/html5\": \"^2.6\",
                \"symfony/css-selector\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/css-selector\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DomCrawler\\\\\": \"\"
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
            \"description\": \"Symfony DomCrawler Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-09-28T21:25:05+00:00\"
        },
        {
            \"name\": \"symfony/maker-bundle\",
            \"version\": \"v1.14.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/maker-bundle.git\",
                \"reference\": \"31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/maker-bundle/zipball/31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\",
                \"reference\": \"31a7597a99d8315bfa8eb0bfd2247ab880cb0c1b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/inflector\": \"^1.2\",
                \"nikic/php-parser\": \"^4.0\",
                \"php\": \"^7.0.8\",
                \"symfony/config\": \"^3.4|^4.0|^5.0\",
                \"symfony/console\": \"^3.4|^4.0|^5.0\",
                \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
                \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
                \"symfony/finder\": \"^3.4|^4.0|^5.0\",
                \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
                \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
            },
            \"require-dev\": {
                \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
                \"doctrine/orm\": \"^2.3\",
                \"friendsofphp/php-cs-fixer\": \"^2.8\",
                \"friendsoftwig/twigcs\": \"^3.1.2\",
                \"symfony/http-client\": \"^4.3|^5.0\",
                \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
                \"symfony/process\": \"^3.4|^4.0|^5.0\",
                \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
                \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
            \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/site.html\",
            \"keywords\": [
                \"code generator\",
                \"generator\",
                \"scaffold\",
                \"scaffolding\"
            ],
            \"time\": \"2019-10-21T12:43:48+00:00\"
        },
        {
            \"name\": \"symfony/phpunit-bridge\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/phpunit-bridge.git\",
                \"reference\": \"a7fd9e742c31ac2b607b166c9016bab51a36c574\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/phpunit-bridge/zipball/a7fd9e742c31ac2b607b166c9016bab51a36c574\",
                \"reference\": \"a7fd9e742c31ac2b607b166c9016bab51a36c574\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5.9\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
            },
            \"suggest\": {
                \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
            },
            \"bin\": [
                \"bin/simple-phpunit\"
            ],
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                },
                \"thanks\": {
                    \"name\": \"phpunit/phpunit\",
                    \"url\": \"https://github.com/sebastianbergmann/phpunit\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\"
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
            \"description\": \"Symfony PHPUnit Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        },
        {
            \"name\": \"symfony/profiler-pack\",
            \"version\": \"v1.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/profiler-pack.git\",
                \"reference\": \"99c4370632c2a59bb0444852f92140074ef02209\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/profiler-pack/zipball/99c4370632c2a59bb0444852f92140074ef02209\",
                \"reference\": \"99c4370632c2a59bb0444852f92140074ef02209\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/stopwatch\": \"*\",
                \"symfony/twig-bundle\": \"*\",
                \"symfony/web-profiler-bundle\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for the Symfony web profiler\",
            \"time\": \"2018-12-10T12:11:44+00:00\"
        },
        {
            \"name\": \"symfony/test-pack\",
            \"version\": \"v1.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/test-pack.git\",
                \"reference\": \"ff87e800a67d06c423389f77b8209bc9dc469def\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/test-pack/zipball/ff87e800a67d06c423389f77b8209bc9dc469def\",
                \"reference\": \"ff87e800a67d06c423389f77b8209bc9dc469def\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/browser-kit\": \"*\",
                \"symfony/css-selector\": \"*\",
                \"symfony/phpunit-bridge\": \"*\"
            },
            \"type\": \"symfony-pack\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A pack for functional and end-to-end testing within a Symfony app\",
            \"time\": \"2019-06-21T06:27:32+00:00\"
        },
        {
            \"name\": \"symfony/var-dumper\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/var-dumper.git\",
                \"reference\": \"bde8957fc415fdc6964f33916a3755737744ff05\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/var-dumper/zipball/bde8957fc415fdc6964f33916a3755737744ff05\",
                \"reference\": \"bde8957fc415fdc6964f33916a3755737744ff05\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php72\": \"~1.5\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"ext-iconv\": \"*\",
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
                \"ext-intl\": \"To show region name in time zone dump\",
                \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
            },
            \"bin\": [
                \"Resources/bin/var-dump-server\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"Resources/functions/dump.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\"
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
            \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"debug\",
                \"dump\"
            ],
            \"time\": \"2019-10-04T19:48:13+00:00\"
        },
        {
            \"name\": \"symfony/web-profiler-bundle\",
            \"version\": \"v4.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-profiler-bundle.git\",
                \"reference\": \"b52bb32e6182d924303dbeb9c584396819fef118\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-profiler-bundle/zipball/b52bb32e6182d924303dbeb9c584396819fef118\",
                \"reference\": \"b52bb32e6182d924303dbeb9c584396819fef118\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/config\": \"^4.2\",
                \"symfony/http-kernel\": \"^4.3\",
                \"symfony/routing\": \"~3.4|~4.0\",
                \"symfony/twig-bundle\": \"~4.2\",
                \"symfony/var-dumper\": \"~3.4|~4.0\",
                \"twig/twig\": \"^1.41|^2.10\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/form\": \"<4.3\",
                \"symfony/messenger\": \"<4.2\",
                \"symfony/var-dumper\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/stopwatch\": \"~3.4|~4.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\\": \"\"
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
            \"description\": \"Symfony WebProfilerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-10-02T08:36:26+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1.3\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\"
    },
    \"platform-dev\": []
}
", "composer.lock", "/var/www/public/DevLaon/templates/composer.lock");
    }
}
