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

/* vendor/zendframework/zend-eventmanager/composer.lock */
class __TwigTemplate_bf6dc14f1086a54bef5a16da9192c33301647db8dbd0627fd343569001bee193 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/composer.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"7be208641d67e8a91bf182baaa79364a\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"athletic/athletic\",
            \"version\": \"v0.1.8\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/polyfractal/athletic.git\",
                \"reference\": \"51fe4b6e5298dd8af187825a4e57745898e37f0e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/polyfractal/athletic/zipball/51fe4b6e5298dd8af187825a4e57745898e37f0e\",
                \"reference\": \"51fe4b6e5298dd8af187825a4e57745898e37f0e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nategood/commando\": \"0.2.1\",
                \"php\": \">=5.3.9\",
                \"pimple/pimple\": \">=1.0,<3.0\",
                \"zeptech/annotations\": \"1.1.*\"
            },
            \"require-dev\": {
                \"mikey179/vfsstream\": \"1.2.*\",
                \"mockery/mockery\": \"0.8.*\",
                \"phpunit/phpunit\": \"~4.0\",
                \"satooshi/php-coveralls\": \"0.6.*\"
            },
            \"bin\": [
                \"bin/athletic\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Athletic\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Zachary Tong\"
                }
            ],
            \"description\": \"PHP Benchmarking Framework\",
            \"keywords\": [
                \"benchmark\",
                \"benchmarking\",
                \"profiling\"
            ],
            \"time\": \"2014-06-03T18:32:22+00:00\"
        },
        {
            \"name\": \"container-interop/container-interop\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/container-interop/container-interop.git\",
                \"reference\": \"79cbf1341c22ec75643d841642dd5d6acd83bdb8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/container-interop/container-interop/zipball/79cbf1341c22ec75643d841642dd5d6acd83bdb8\",
                \"reference\": \"79cbf1341c22ec75643d841642dd5d6acd83bdb8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"psr/container\": \"^1.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Interop\\\\Container\\\\\": \"src/Interop/Container/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Promoting the interoperability of container objects (DIC, SL, etc.)\",
            \"homepage\": \"https://github.com/container-interop/container-interop\",
            \"time\": \"2017-02-14T19:40:03+00:00\"
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
            \"name\": \"kevinlebrun/colors.php\",
            \"version\": \"0.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/kevinlebrun/colors.php.git\",
                \"reference\": \"b13d23b9365ece519abc0eaa77cd3061c5810d30\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/kevinlebrun/colors.php/zipball/b13d23b9365ece519abc0eaa77cd3061c5810d30\",
                \"reference\": \"b13d23b9365ece519abc0eaa77cd3061c5810d30\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Colors\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kevin Le Brun\",
                    \"email\": \"lebrun.k@gmail.com\",
                    \"homepage\": \"http://kevinlebrun.fr\",
                    \"role\": \"developer\"
                }
            ],
            \"description\": \"Colors for PHP CLI scripts\",
            \"homepage\": \"https://github.com/kevinlebrun/colors.php\",
            \"keywords\": [
                \"cli\",
                \"color\",
                \"colors\",
                \"console\",
                \"shell\"
            ],
            \"time\": \"2012-03-25T18:18:10+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.7.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\",
                \"reference\": \"3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^4.1\"
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
            \"time\": \"2017-10-19T19:58:43+00:00\"
        },
        {
            \"name\": \"nategood/commando\",
            \"version\": \"0.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nategood/commando.git\",
                \"reference\": \"b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nategood/commando/zipball/b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\",
                \"reference\": \"b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"kevinlebrun/colors.php\": \"0.2.*\",
                \"php\": \">=5.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Commando\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nate Good\",
                    \"email\": \"me@nategood.com\",
                    \"homepage\": \"http://nategood.com\"
                }
            ],
            \"description\": \"PHP CLI Commando Style\",
            \"homepage\": \"http://github.com/nategood/commando\",
            \"keywords\": [
                \"automation\",
                \"cli\",
                \"command\",
                \"command line\",
                \"command line interface\",
                \"scripting\"
            ],
            \"time\": \"2012-10-07T15:35:37+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"2df402786ab5368a0169091f61a7c1e0eb6852d0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/2df402786ab5368a0169091f61a7c1e0eb6852d0\",
                \"reference\": \"2df402786ab5368a0169091f61a7c1e0eb6852d0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^1.0.1\",
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
            \"time\": \"2017-03-05T18:14:27+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"a70c0ced4be299a63d32fa96d9281d03e94041df\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/a70c0ced4be299a63d32fa96d9281d03e94041df\",
                \"reference\": \"a70c0ced4be299a63d32fa96d9281d03e94041df\",
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
            \"time\": \"2017-03-05T17:38:23+00:00\"
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
            \"version\": \"1.7.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"33a7e3c4fda54e912ff6338c48823bd5c0f0b712\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/33a7e3c4fda54e912ff6338c48823bd5c0f0b712\",
                \"reference\": \"33a7e3c4fda54e912ff6338c48823bd5c0f0b712\",
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
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
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
            \"time\": \"2018-04-18T13:57:24+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"774a82c0c5da4c1c7701790c262035d235ab7856\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/774a82c0c5da4c1c7701790c262035d235ab7856\",
                \"reference\": \"774a82c0c5da4c1c7701790c262035d235ab7856\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^1.4.2\",
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
            \"time\": \"2018-04-06T15:39:20+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"1.4.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"730b01bc3e867237eaac355e06a36b85dd93a8b4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/730b01bc3e867237eaac355e06a36b85dd93a8b4\",
                \"reference\": \"730b01bc3e867237eaac355e06a36b85dd93a8b4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.4.x-dev\"
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
                    \"email\": \"sb@sebastian-bergmann.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2017-11-27T13:52:08+00:00\"
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
            \"version\": \"7.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"6d51299e307dc510149e0b7cd1931dd11770e1cb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/6d51299e307dc510149e0b7cd1931dd11770e1cb\",
                \"reference\": \"6d51299e307dc510149e0b7cd1931dd11770e1cb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.6.1\",
                \"phar-io/manifest\": \"^1.0.1\",
                \"phar-io/version\": \"^1.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.1\",
                \"phpunit/php-file-iterator\": \"^1.4.3\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.0\",
                \"phpunit/phpunit-mock-objects\": \"^6.1.1\",
                \"sebastian/comparator\": \"^2.1 || ^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^1.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.1-dev\"
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
            \"time\": \"2018-04-18T13:41:53+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit-mock-objects\",
            \"version\": \"6.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit-mock-objects.git\",
                \"reference\": \"70c740bde8fd9ea9ea295be1cd875dd7b267e157\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit-mock-objects/zipball/70c740bde8fd9ea9ea295be1cd875dd7b267e157\",
                \"reference\": \"70c740bde8fd9ea9ea295be1cd875dd7b267e157\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.5\",
                \"php\": \"^7.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\"
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
            \"description\": \"Mock Object library for PHPUnit\",
            \"homepage\": \"https://github.com/sebastianbergmann/phpunit-mock-objects/\",
            \"keywords\": [
                \"mock\",
                \"xunit\"
            ],
            \"time\": \"2018-04-11T04:50:36+00:00\"
        },
        {
            \"name\": \"pimple/pimple\",
            \"version\": \"v2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/silexphp/Pimple.git\",
                \"reference\": \"ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/silexphp/Pimple/zipball/ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\",
                \"reference\": \"ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Pimple\": \"src/\"
                }
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
            \"description\": \"Pimple is a simple Dependency Injection Container for PHP 5.3\",
            \"homepage\": \"http://pimple.sensiolabs.org\",
            \"keywords\": [
                \"container\",
                \"dependency injection\"
            ],
            \"time\": \"2014-07-24T07:10:08+00:00\"
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
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"ed5fd2281113729f1ebcc64d101ad66028aeb3d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/ed5fd2281113729f1ebcc64d101ad66028aeb3d5\",
                \"reference\": \"ed5fd2281113729f1ebcc64d101ad66028aeb3d5\",
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
            \"time\": \"2018-04-18T13:33:00+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"e09160918c66281713f1c324c1f4c4c3037ba1e8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/e09160918c66281713f1c324c1f4c4c3037ba1e8\",
                \"reference\": \"e09160918c66281713f1c324c1f4c4c3037ba1e8\",
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
            \"time\": \"2018-02-01T13:45:15+00:00\"
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
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"2.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"dcbed1074f8244661eecddfc2a675430d8d33f62\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/dcbed1074f8244661eecddfc2a675430d8d33f62\",
                \"reference\": \"dcbed1074f8244661eecddfc2a675430d8d33f62\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.1.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0\"
            },
            \"bin\": [
                \"scripts/phpcs\",
                \"scripts/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"CodeSniffer.php\",
                    \"CodeSniffer/CLI.php\",
                    \"CodeSniffer/Exception.php\",
                    \"CodeSniffer/File.php\",
                    \"CodeSniffer/Fixer.php\",
                    \"CodeSniffer/Report.php\",
                    \"CodeSniffer/Reporting.php\",
                    \"CodeSniffer/Sniff.php\",
                    \"CodeSniffer/Tokens.php\",
                    \"CodeSniffer/Reports/\",
                    \"CodeSniffer/Tokenizers/\",
                    \"CodeSniffer/DocGenerators/\",
                    \"CodeSniffer/Standards/AbstractPatternSniff.php\",
                    \"CodeSniffer/Standards/AbstractScopeSniff.php\",
                    \"CodeSniffer/Standards/AbstractVariableSniff.php\",
                    \"CodeSniffer/Standards/IncorrectPatternException.php\",
                    \"CodeSniffer/Standards/Generic/Sniffs/\",
                    \"CodeSniffer/Standards/MySource/Sniffs/\",
                    \"CodeSniffer/Standards/PEAR/Sniffs/\",
                    \"CodeSniffer/Standards/PSR1/Sniffs/\",
                    \"CodeSniffer/Standards/PSR2/Sniffs/\",
                    \"CodeSniffer/Standards/Squiz/Sniffs/\",
                    \"CodeSniffer/Standards/Zend/Sniffs/\"
                ]
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
            \"time\": \"2017-05-22T02:43:20+00:00\"
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
        },
        {
            \"name\": \"zendframework/zend-coding-standard\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-coding-standard.git\",
                \"reference\": \"893316d2904e93f1c74c1384b6d7d57778299cb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-coding-standard/zipball/893316d2904e93f1c74c1384b6d7d57778299cb6\",
                \"reference\": \"893316d2904e93f1c74c1384b6d7d57778299cb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"squizlabs/php_codesniffer\": \"^2.7\"
            },
            \"type\": \"library\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"Zend Framework coding standard\",
            \"keywords\": [
                \"Coding Standard\",
                \"zf\"
            ],
            \"time\": \"2016-11-09T21:30:43+00:00\"
        },
        {
            \"name\": \"zendframework/zend-stdlib\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-stdlib.git\",
                \"reference\": \"10ef03144902d1955f935fff5346ed52f7d99bcc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-stdlib/zipball/10ef03144902d1955f935fff5346ed52f7d99bcc\",
                \"reference\": \"10ef03144902d1955f935fff5346ed52f7d99bcc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"~0.1\",
                \"phpunit/phpunit\": \"~4.0\",
                \"zendframework/zend-coding-standard\": \"~1.0.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\",
                    \"dev-develop\": \"3.2-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Zend\\\\Stdlib\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"homepage\": \"https://github.com/zendframework/zend-stdlib\",
            \"keywords\": [
                \"stdlib\",
                \"zf2\"
            ],
            \"time\": \"2018-04-12T16:05:42+00:00\"
        },
        {
            \"name\": \"zeptech/annotations\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/pgraham/php-annotations.git\",
                \"reference\": \"9cd042daa9ace184d04b49f0605edf73f19a9c71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/pgraham/php-annotations/zipball/9cd042daa9ace184d04b49f0605edf73f19a9c71\",
                \"reference\": \"9cd042daa9ace184d04b49f0605edf73f19a9c71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"zpt\\\\anno\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD\"
            ],
            \"authors\": [
                {
                    \"name\": \"Philip Graham\",
                    \"email\": \"philip@zeptech.ca\"
                }
            ],
            \"description\": \"DOC Block annotation parsing for PHP\",
            \"homepage\": \"https://github.com/pgraham/php-annotations\",
            \"keywords\": [
                \"annotations\"
            ],
            \"time\": \"2013-05-29T02:35:23+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": [],
    \"prefer-stable\": true,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/composer.lock";
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
    \"content-hash\": \"7be208641d67e8a91bf182baaa79364a\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"athletic/athletic\",
            \"version\": \"v0.1.8\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/polyfractal/athletic.git\",
                \"reference\": \"51fe4b6e5298dd8af187825a4e57745898e37f0e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/polyfractal/athletic/zipball/51fe4b6e5298dd8af187825a4e57745898e37f0e\",
                \"reference\": \"51fe4b6e5298dd8af187825a4e57745898e37f0e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nategood/commando\": \"0.2.1\",
                \"php\": \">=5.3.9\",
                \"pimple/pimple\": \">=1.0,<3.0\",
                \"zeptech/annotations\": \"1.1.*\"
            },
            \"require-dev\": {
                \"mikey179/vfsstream\": \"1.2.*\",
                \"mockery/mockery\": \"0.8.*\",
                \"phpunit/phpunit\": \"~4.0\",
                \"satooshi/php-coveralls\": \"0.6.*\"
            },
            \"bin\": [
                \"bin/athletic\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Athletic\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Zachary Tong\"
                }
            ],
            \"description\": \"PHP Benchmarking Framework\",
            \"keywords\": [
                \"benchmark\",
                \"benchmarking\",
                \"profiling\"
            ],
            \"time\": \"2014-06-03T18:32:22+00:00\"
        },
        {
            \"name\": \"container-interop/container-interop\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/container-interop/container-interop.git\",
                \"reference\": \"79cbf1341c22ec75643d841642dd5d6acd83bdb8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/container-interop/container-interop/zipball/79cbf1341c22ec75643d841642dd5d6acd83bdb8\",
                \"reference\": \"79cbf1341c22ec75643d841642dd5d6acd83bdb8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"psr/container\": \"^1.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Interop\\\\Container\\\\\": \"src/Interop/Container/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Promoting the interoperability of container objects (DIC, SL, etc.)\",
            \"homepage\": \"https://github.com/container-interop/container-interop\",
            \"time\": \"2017-02-14T19:40:03+00:00\"
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
            \"name\": \"kevinlebrun/colors.php\",
            \"version\": \"0.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/kevinlebrun/colors.php.git\",
                \"reference\": \"b13d23b9365ece519abc0eaa77cd3061c5810d30\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/kevinlebrun/colors.php/zipball/b13d23b9365ece519abc0eaa77cd3061c5810d30\",
                \"reference\": \"b13d23b9365ece519abc0eaa77cd3061c5810d30\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Colors\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kevin Le Brun\",
                    \"email\": \"lebrun.k@gmail.com\",
                    \"homepage\": \"http://kevinlebrun.fr\",
                    \"role\": \"developer\"
                }
            ],
            \"description\": \"Colors for PHP CLI scripts\",
            \"homepage\": \"https://github.com/kevinlebrun/colors.php\",
            \"keywords\": [
                \"cli\",
                \"color\",
                \"colors\",
                \"console\",
                \"shell\"
            ],
            \"time\": \"2012-03-25T18:18:10+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.7.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\",
                \"reference\": \"3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^4.1\"
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
            \"time\": \"2017-10-19T19:58:43+00:00\"
        },
        {
            \"name\": \"nategood/commando\",
            \"version\": \"0.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nategood/commando.git\",
                \"reference\": \"b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nategood/commando/zipball/b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\",
                \"reference\": \"b8e475d08a6ff1c0f2b89391e777c4e71fc1a6e1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"kevinlebrun/colors.php\": \"0.2.*\",
                \"php\": \">=5.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"Commando\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nate Good\",
                    \"email\": \"me@nategood.com\",
                    \"homepage\": \"http://nategood.com\"
                }
            ],
            \"description\": \"PHP CLI Commando Style\",
            \"homepage\": \"http://github.com/nategood/commando\",
            \"keywords\": [
                \"automation\",
                \"cli\",
                \"command\",
                \"command line\",
                \"command line interface\",
                \"scripting\"
            ],
            \"time\": \"2012-10-07T15:35:37+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"2df402786ab5368a0169091f61a7c1e0eb6852d0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/2df402786ab5368a0169091f61a7c1e0eb6852d0\",
                \"reference\": \"2df402786ab5368a0169091f61a7c1e0eb6852d0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^1.0.1\",
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
            \"time\": \"2017-03-05T18:14:27+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"a70c0ced4be299a63d32fa96d9281d03e94041df\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/a70c0ced4be299a63d32fa96d9281d03e94041df\",
                \"reference\": \"a70c0ced4be299a63d32fa96d9281d03e94041df\",
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
            \"time\": \"2017-03-05T17:38:23+00:00\"
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
            \"version\": \"1.7.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"33a7e3c4fda54e912ff6338c48823bd5c0f0b712\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/33a7e3c4fda54e912ff6338c48823bd5c0f0b712\",
                \"reference\": \"33a7e3c4fda54e912ff6338c48823bd5c0f0b712\",
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
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
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
            \"time\": \"2018-04-18T13:57:24+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"774a82c0c5da4c1c7701790c262035d235ab7856\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/774a82c0c5da4c1c7701790c262035d235ab7856\",
                \"reference\": \"774a82c0c5da4c1c7701790c262035d235ab7856\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^1.4.2\",
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
            \"time\": \"2018-04-06T15:39:20+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"1.4.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"730b01bc3e867237eaac355e06a36b85dd93a8b4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/730b01bc3e867237eaac355e06a36b85dd93a8b4\",
                \"reference\": \"730b01bc3e867237eaac355e06a36b85dd93a8b4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.4.x-dev\"
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
                    \"email\": \"sb@sebastian-bergmann.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2017-11-27T13:52:08+00:00\"
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
            \"version\": \"7.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"6d51299e307dc510149e0b7cd1931dd11770e1cb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/6d51299e307dc510149e0b7cd1931dd11770e1cb\",
                \"reference\": \"6d51299e307dc510149e0b7cd1931dd11770e1cb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.6.1\",
                \"phar-io/manifest\": \"^1.0.1\",
                \"phar-io/version\": \"^1.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.1\",
                \"phpunit/php-file-iterator\": \"^1.4.3\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.0\",
                \"phpunit/phpunit-mock-objects\": \"^6.1.1\",
                \"sebastian/comparator\": \"^2.1 || ^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^3.1\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^1.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.1-dev\"
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
            \"time\": \"2018-04-18T13:41:53+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit-mock-objects\",
            \"version\": \"6.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit-mock-objects.git\",
                \"reference\": \"70c740bde8fd9ea9ea295be1cd875dd7b267e157\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit-mock-objects/zipball/70c740bde8fd9ea9ea295be1cd875dd7b267e157\",
                \"reference\": \"70c740bde8fd9ea9ea295be1cd875dd7b267e157\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.5\",
                \"php\": \"^7.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\"
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
            \"description\": \"Mock Object library for PHPUnit\",
            \"homepage\": \"https://github.com/sebastianbergmann/phpunit-mock-objects/\",
            \"keywords\": [
                \"mock\",
                \"xunit\"
            ],
            \"time\": \"2018-04-11T04:50:36+00:00\"
        },
        {
            \"name\": \"pimple/pimple\",
            \"version\": \"v2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/silexphp/Pimple.git\",
                \"reference\": \"ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/silexphp/Pimple/zipball/ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\",
                \"reference\": \"ea22fb2880faf7b7b0e17c9809c6fe25b071fd76\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Pimple\": \"src/\"
                }
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
            \"description\": \"Pimple is a simple Dependency Injection Container for PHP 5.3\",
            \"homepage\": \"http://pimple.sensiolabs.org\",
            \"keywords\": [
                \"container\",
                \"dependency injection\"
            ],
            \"time\": \"2014-07-24T07:10:08+00:00\"
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
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"ed5fd2281113729f1ebcc64d101ad66028aeb3d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/ed5fd2281113729f1ebcc64d101ad66028aeb3d5\",
                \"reference\": \"ed5fd2281113729f1ebcc64d101ad66028aeb3d5\",
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
            \"time\": \"2018-04-18T13:33:00+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"e09160918c66281713f1c324c1f4c4c3037ba1e8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/e09160918c66281713f1c324c1f4c4c3037ba1e8\",
                \"reference\": \"e09160918c66281713f1c324c1f4c4c3037ba1e8\",
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
            \"time\": \"2018-02-01T13:45:15+00:00\"
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
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"2.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"dcbed1074f8244661eecddfc2a675430d8d33f62\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/dcbed1074f8244661eecddfc2a675430d8d33f62\",
                \"reference\": \"dcbed1074f8244661eecddfc2a675430d8d33f62\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.1.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0\"
            },
            \"bin\": [
                \"scripts/phpcs\",
                \"scripts/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"CodeSniffer.php\",
                    \"CodeSniffer/CLI.php\",
                    \"CodeSniffer/Exception.php\",
                    \"CodeSniffer/File.php\",
                    \"CodeSniffer/Fixer.php\",
                    \"CodeSniffer/Report.php\",
                    \"CodeSniffer/Reporting.php\",
                    \"CodeSniffer/Sniff.php\",
                    \"CodeSniffer/Tokens.php\",
                    \"CodeSniffer/Reports/\",
                    \"CodeSniffer/Tokenizers/\",
                    \"CodeSniffer/DocGenerators/\",
                    \"CodeSniffer/Standards/AbstractPatternSniff.php\",
                    \"CodeSniffer/Standards/AbstractScopeSniff.php\",
                    \"CodeSniffer/Standards/AbstractVariableSniff.php\",
                    \"CodeSniffer/Standards/IncorrectPatternException.php\",
                    \"CodeSniffer/Standards/Generic/Sniffs/\",
                    \"CodeSniffer/Standards/MySource/Sniffs/\",
                    \"CodeSniffer/Standards/PEAR/Sniffs/\",
                    \"CodeSniffer/Standards/PSR1/Sniffs/\",
                    \"CodeSniffer/Standards/PSR2/Sniffs/\",
                    \"CodeSniffer/Standards/Squiz/Sniffs/\",
                    \"CodeSniffer/Standards/Zend/Sniffs/\"
                ]
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
            \"time\": \"2017-05-22T02:43:20+00:00\"
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
        },
        {
            \"name\": \"zendframework/zend-coding-standard\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-coding-standard.git\",
                \"reference\": \"893316d2904e93f1c74c1384b6d7d57778299cb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-coding-standard/zipball/893316d2904e93f1c74c1384b6d7d57778299cb6\",
                \"reference\": \"893316d2904e93f1c74c1384b6d7d57778299cb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"squizlabs/php_codesniffer\": \"^2.7\"
            },
            \"type\": \"library\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"description\": \"Zend Framework coding standard\",
            \"keywords\": [
                \"Coding Standard\",
                \"zf\"
            ],
            \"time\": \"2016-11-09T21:30:43+00:00\"
        },
        {
            \"name\": \"zendframework/zend-stdlib\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/zendframework/zend-stdlib.git\",
                \"reference\": \"10ef03144902d1955f935fff5346ed52f7d99bcc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/zendframework/zend-stdlib/zipball/10ef03144902d1955f935fff5346ed52f7d99bcc\",
                \"reference\": \"10ef03144902d1955f935fff5346ed52f7d99bcc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"athletic/athletic\": \"~0.1\",
                \"phpunit/phpunit\": \"~4.0\",
                \"zendframework/zend-coding-standard\": \"~1.0.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\",
                    \"dev-develop\": \"3.2-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Zend\\\\Stdlib\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"homepage\": \"https://github.com/zendframework/zend-stdlib\",
            \"keywords\": [
                \"stdlib\",
                \"zf2\"
            ],
            \"time\": \"2018-04-12T16:05:42+00:00\"
        },
        {
            \"name\": \"zeptech/annotations\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/pgraham/php-annotations.git\",
                \"reference\": \"9cd042daa9ace184d04b49f0605edf73f19a9c71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/pgraham/php-annotations/zipball/9cd042daa9ace184d04b49f0605edf73f19a9c71\",
                \"reference\": \"9cd042daa9ace184d04b49f0605edf73f19a9c71\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"zpt\\\\anno\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD\"
            ],
            \"authors\": [
                {
                    \"name\": \"Philip Graham\",
                    \"email\": \"philip@zeptech.ca\"
                }
            ],
            \"description\": \"DOC Block annotation parsing for PHP\",
            \"homepage\": \"https://github.com/pgraham/php-annotations\",
            \"keywords\": [
                \"annotations\"
            ],
            \"time\": \"2013-05-29T02:35:23+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": [],
    \"prefer-stable\": true,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"platform-dev\": []
}
", "vendor/zendframework/zend-eventmanager/composer.lock", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/composer.lock");
    }
}
