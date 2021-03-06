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

/* vendor/doctrine/orm/composer.lock */
class __TwigTemplate_856ff75f2e05a3fab652c67db22ae811704589b378e120bf3be70496b594bc0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/composer.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"d5d0e87e612dc300640150a1d8a8a8a7\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.7.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"fa4c4e861e809d6a1103bd620cce63ed91aedfeb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/fa4c4e861e809d6a1103bd620cce63ed91aedfeb\",
                \"reference\": \"fa4c4e861e809d6a1103bd620cce63ed91aedfeb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^7.5@dev\"
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
            \"time\": \"2019-08-08T18:11:40+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d768d58baee9a4862ca783840eca1b9add7a7f57\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\",
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-08-21T18:01:43+00:00\"
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
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
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
            \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"lexer\",
                \"parser\",
                \"php\"
            ],
            \"time\": \"2019-06-08T11:03:04+00:00\"
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
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"de63799239b3881b8a08f8481b22348f77ed7b36\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/de63799239b3881b8a08f8481b22348f77ed7b36\",
                \"reference\": \"de63799239b3881b8a08f8481b22348f77ed7b36\",
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
            \"time\": \"2019-08-26T08:26:39+00:00\"
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
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"ea7263d6b6d5f798b56a45a5b8d686725f2719a3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/ea7263d6b6d5f798b56a45a5b8d686725f2719a3\",
                \"reference\": \"ea7263d6b6d5f798b56a45a5b8d686725f2719a3\",
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
            \"time\": \"2019-08-20T14:44:19+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/e749410375ff6fb7a040a68878c656c2e610b132\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"^2|^3\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"phpcompatibility/php-compatibility\": \"^9.0\",
                \"sensiolabs/security-checker\": \"^4.1.0\"
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
                    \"email\": \"franck.nijhof@dealerdirect.com\",
                    \"homepage\": \"http://www.frenck.nl\",
                    \"role\": \"Developer / IT Manager\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://www.dealerdirect.com\",
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
            \"time\": \"2018-10-26T13:21:45+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"5.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"9017efe98b47329cbd895d43f596747c8ef27307\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/9017efe98b47329cbd895d43f596747c8ef27307\",
                \"reference\": \"9017efe98b47329cbd895d43f596747c8ef27307\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.5.0\",
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
            \"time\": \"2019-01-31T13:22:30+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\",
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
            \"time\": \"2019-08-09T12:45:53+00:00\"
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
            \"version\": \"4.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
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
            \"time\": \"2019-04-30T17:48:53+00:00\"
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
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
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
                \"psr-4\": {
                    \"Prophecy\\\\\": \"src/Prophecy\"
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
            \"time\": \"2019-06-13T12:50:23+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
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
                \"sebastian/environment\": \"^3.1 || ^4.0\",
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
                    \"dev-master\": \"6.1-dev\"
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
            \"time\": \"2018-10-31T16:06:48+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
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
            \"time\": \"2018-09-13T20:33:42+00:00\"
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
            \"version\": \"2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\",
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
                    \"dev-master\": \"2.1-dev\"
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
            \"time\": \"2019-06-07T04:22:29+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\",
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
                    \"dev-master\": \"3.1-dev\"
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
            \"time\": \"2019-07-25T05:29:42+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.5.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\",
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
                \"phpunit/php-timer\": \"^2.1\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^4.0\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0\",
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
                    \"dev-master\": \"7.5-dev\"
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
            \"time\": \"2019-08-21T07:05:16+00:00\"
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
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
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
            \"time\": \"2019-02-04T06:01:07+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"suggest\": {
                \"ext-posix\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
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
            \"time\": \"2019-05-05T09:05:15+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\",
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2019-08-11T12:43:14+00:00\"
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
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
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
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2018-10-04T04:07:39+00:00\"
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
            \"version\": \"4.8.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"bff96313d8c7c2ba57a4edb13c1c141df8988c58\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/bff96313d8c7c2ba57a4edb13c1c141df8988c58\",
                \"reference\": \"bff96313d8c7c2ba57a4edb13c1c141df8988c58\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"^3.4.0\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.9.2\",
                \"phpstan/phpstan-phpunit\": \"0.9.4\",
                \"phpstan/phpstan-strict-rules\": \"0.9\",
                \"phpunit/phpunit\": \"7.5.1\"
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
            \"time\": \"2019-01-03T13:15:50+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
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
            \"homepage\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2019-04-10T23:49:02+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/550ebaac289296ce228a706d0867afc34687e3f4\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\",
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
                    \"dev-master\": \"1.12-dev\"
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
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
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
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\",
                \"reference\": \"5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\",
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
            \"time\": \"2019-08-20T14:27:59+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
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
                    \"role\": \"Developer\",
                    \"email\": \"arne@blankerts.de\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
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
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/composer.lock";
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
    \"content-hash\": \"d5d0e87e612dc300640150a1d8a8a8a7\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.7.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"fa4c4e861e809d6a1103bd620cce63ed91aedfeb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/fa4c4e861e809d6a1103bd620cce63ed91aedfeb\",
                \"reference\": \"fa4c4e861e809d6a1103bd620cce63ed91aedfeb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^7.5@dev\"
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
            \"time\": \"2019-08-08T18:11:40+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d768d58baee9a4862ca783840eca1b9add7a7f57\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\",
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
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-08-21T18:01:43+00:00\"
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
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
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
            \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"lexer\",
                \"parser\",
                \"php\"
            ],
            \"time\": \"2019-06-08T11:03:04+00:00\"
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
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"de63799239b3881b8a08f8481b22348f77ed7b36\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/de63799239b3881b8a08f8481b22348f77ed7b36\",
                \"reference\": \"de63799239b3881b8a08f8481b22348f77ed7b36\",
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
            \"time\": \"2019-08-26T08:26:39+00:00\"
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
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"ea7263d6b6d5f798b56a45a5b8d686725f2719a3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/ea7263d6b6d5f798b56a45a5b8d686725f2719a3\",
                \"reference\": \"ea7263d6b6d5f798b56a45a5b8d686725f2719a3\",
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
            \"time\": \"2019-08-20T14:44:19+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/e749410375ff6fb7a040a68878c656c2e610b132\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"^2|^3\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"phpcompatibility/php-compatibility\": \"^9.0\",
                \"sensiolabs/security-checker\": \"^4.1.0\"
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
                    \"email\": \"franck.nijhof@dealerdirect.com\",
                    \"homepage\": \"http://www.frenck.nl\",
                    \"role\": \"Developer / IT Manager\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://www.dealerdirect.com\",
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
            \"time\": \"2018-10-26T13:21:45+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"5.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"9017efe98b47329cbd895d43f596747c8ef27307\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/9017efe98b47329cbd895d43f596747c8ef27307\",
                \"reference\": \"9017efe98b47329cbd895d43f596747c8ef27307\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.5.0\",
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
            \"time\": \"2019-01-31T13:22:30+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\",
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
            \"time\": \"2019-08-09T12:45:53+00:00\"
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
            \"version\": \"4.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
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
            \"time\": \"2019-04-30T17:48:53+00:00\"
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
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
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
                \"psr-4\": {
                    \"Prophecy\\\\\": \"src/Prophecy\"
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
            \"time\": \"2019-06-13T12:50:23+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
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
                \"sebastian/environment\": \"^3.1 || ^4.0\",
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
                    \"dev-master\": \"6.1-dev\"
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
            \"time\": \"2018-10-31T16:06:48+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
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
            \"time\": \"2018-09-13T20:33:42+00:00\"
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
            \"version\": \"2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\",
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
                    \"dev-master\": \"2.1-dev\"
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
            \"time\": \"2019-06-07T04:22:29+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\",
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
                    \"dev-master\": \"3.1-dev\"
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
            \"time\": \"2019-07-25T05:29:42+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.5.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\",
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
                \"phpunit/php-timer\": \"^2.1\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^4.0\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0\",
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
                    \"dev-master\": \"7.5-dev\"
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
            \"time\": \"2019-08-21T07:05:16+00:00\"
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
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
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
            \"time\": \"2019-02-04T06:01:07+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"suggest\": {
                \"ext-posix\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
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
            \"time\": \"2019-05-05T09:05:15+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\",
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2019-08-11T12:43:14+00:00\"
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
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
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
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2018-10-04T04:07:39+00:00\"
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
            \"version\": \"4.8.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"bff96313d8c7c2ba57a4edb13c1c141df8988c58\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/bff96313d8c7c2ba57a4edb13c1c141df8988c58\",
                \"reference\": \"bff96313d8c7c2ba57a4edb13c1c141df8988c58\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"^3.4.0\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.9.2\",
                \"phpstan/phpstan-phpunit\": \"0.9.4\",
                \"phpstan/phpstan-strict-rules\": \"0.9\",
                \"phpunit/phpunit\": \"7.5.1\"
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
            \"time\": \"2019-01-03T13:15:50+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
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
            \"homepage\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2019-04-10T23:49:02+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/550ebaac289296ce228a706d0867afc34687e3f4\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\",
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
                    \"dev-master\": \"1.12-dev\"
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
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
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
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\",
                \"reference\": \"5a0b7c32dc3ec56fd4abae8a4a71b0cf05013686\",
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
            \"time\": \"2019-08-20T14:27:59+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
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
                    \"role\": \"Developer\",
                    \"email\": \"arne@blankerts.de\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
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
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\"
    },
    \"platform-dev\": []
}
", "vendor/doctrine/orm/composer.lock", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/composer.lock");
    }
}
