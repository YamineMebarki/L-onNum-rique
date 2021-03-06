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

/* vendor/jdorn/sql-formatter/composer.lock */
class __TwigTemplate_9cdba68e92487512a6c9395cd1df813cfa621d4ac8543a9187dde47f3a9e9231 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/composer.lock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/composer.lock"));

        // line 1
        echo "{
    \"hash\": \"a709b40d4a35e7077aa40fbd0f78f6c6\",
    \"packages\": [

    ],
    \"packages-dev\": [
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"1.2.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"1.2.9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/1.2.9\",
                \"reference\": \"1.2.9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"phpunit/php-file-iterator\": \">=1.3.0@stable\",
                \"phpunit/php-text-template\": \">=1.1.1@stable\",
                \"phpunit/php-token-stream\": \">=1.1.3@stable\"
            },
            \"suggest\": {
                \"ext-dom\": \"*\",
                \"ext-xdebug\": \">=2.0.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2013-02-26 18:55:56\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"2deb24c65ea78e126daa8d45b2089ddc29ec1d26\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/2deb24c65ea78e126daa8d45b2089ddc29ec1d26\",
                \"reference\": \"2deb24c65ea78e126daa8d45b2089ddc29ec1d26\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"File/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"time\": \"2013-01-07 10:47:05\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"1eeef106193d2f8c539728e566bb4793071a9e18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/1eeef106193d2f8c539728e566bb4793071a9e18\",
                \"reference\": \"1eeef106193d2f8c539728e566bb4793071a9e18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"Text/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2013-01-07 10:56:17\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"1.0.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"ecf7920b27003a9412b07dad79dbb5ad1249e6c3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/ecf7920b27003a9412b07dad79dbb5ad1249e6c3\",
                \"reference\": \"ecf7920b27003a9412b07dad79dbb5ad1249e6c3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2013-01-30 06:08:51\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"c25dd88e1592e66dee2553c99ef244203d5a1b98\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/c25dd88e1592e66dee2553c99ef244203d5a1b98\",
                \"reference\": \"c25dd88e1592e66dee2553c99ef244203d5a1b98\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2013-01-07 10:56:35\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"3.7.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"2c67e52445416bb7c14046b432acd7eb79e4e612\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/2c67e52445416bb7c14046b432acd7eb79e4e612\",
                \"reference\": \"2c67e52445416bb7c14046b432acd7eb79e4e612\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-pcre\": \"*\",
                \"ext-reflection\": \"*\",
                \"ext-spl\": \"*\",
                \"php\": \">=5.3.3\",
                \"phpunit/php-code-coverage\": \">=1.2.1,<1.3.0\",
                \"phpunit/php-file-iterator\": \">=1.3.1\",
                \"phpunit/php-text-template\": \">=1.1.1\",
                \"phpunit/php-timer\": \">=1.0.2,<1.1.0\",
                \"phpunit/phpunit-mock-objects\": \">=1.2.0,<1.3.0\",
                \"symfony/yaml\": \">=2.2.0\"
            },
            \"require-dev\": {
                \"pear-pear/pear\": \"1.9.4\"
            },
            \"suggest\": {
                \"ext-json\": \"*\",
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"phpunit/php-invoker\": \">=1.1.0,<1.2.0\"
            },
            \"bin\": [
                \"composer/bin/phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.7.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"PHPUnit/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\",
                \"../../symfony/yaml/\"
            ],
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
            \"homepage\": \"http://www.phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2013-03-11 07:06:05\"
        },
        {
            \"name\": \"phpunit/phpunit-mock-objects\",
            \"version\": \"1.2.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit-mock-objects.git\",
                \"reference\": \"d49b5683200b5db9b1c64cb06f52f50d147891c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit-mock-objects/zipball/d49b5683200b5db9b1c64cb06f52f50d147891c4\",
                \"reference\": \"d49b5683200b5db9b1c64cb06f52f50d147891c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"phpunit/php-text-template\": \">=1.1.1@stable\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHPUnit/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Mock Object library for PHPUnit\",
            \"homepage\": \"https://github.com/sebastianbergmann/phpunit-mock-objects/\",
            \"keywords\": [
                \"mock\",
                \"xunit\"
            ],
            \"time\": \"2013-02-05 07:46:41\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"dev-master\",
            \"target-dir\": \"Symfony/Component/Yaml\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/Yaml.git\",
                \"reference\": \"f198ac28048eeceae852419c076123aaee59cd1c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/Yaml/zipball/f198ac28048eeceae852419c076123aaee59cd1c\",
                \"reference\": \"f198ac28048eeceae852419c076123aaee59cd1c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
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
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Yaml Component\",
            \"homepage\": \"http://symfony.com\",
            \"time\": \"2013-01-31 21:39:01\"
        }
    ],
    \"aliases\": [

    ],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": [

    ],
    \"platform\": {
        \"php\": \">=5.2.4\"
    },
    \"platform-dev\": [

    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"hash\": \"a709b40d4a35e7077aa40fbd0f78f6c6\",
    \"packages\": [

    ],
    \"packages-dev\": [
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"1.2.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"1.2.9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/1.2.9\",
                \"reference\": \"1.2.9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"phpunit/php-file-iterator\": \">=1.3.0@stable\",
                \"phpunit/php-text-template\": \">=1.1.1@stable\",
                \"phpunit/php-token-stream\": \">=1.1.3@stable\"
            },
            \"suggest\": {
                \"ext-dom\": \"*\",
                \"ext-xdebug\": \">=2.0.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2013-02-26 18:55:56\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"2deb24c65ea78e126daa8d45b2089ddc29ec1d26\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/2deb24c65ea78e126daa8d45b2089ddc29ec1d26\",
                \"reference\": \"2deb24c65ea78e126daa8d45b2089ddc29ec1d26\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"File/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"time\": \"2013-01-07 10:47:05\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"1eeef106193d2f8c539728e566bb4793071a9e18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/1eeef106193d2f8c539728e566bb4793071a9e18\",
                \"reference\": \"1eeef106193d2f8c539728e566bb4793071a9e18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"Text/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2013-01-07 10:56:17\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"1.0.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"ecf7920b27003a9412b07dad79dbb5ad1249e6c3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/ecf7920b27003a9412b07dad79dbb5ad1249e6c3\",
                \"reference\": \"ecf7920b27003a9412b07dad79dbb5ad1249e6c3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2013-01-30 06:08:51\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"c25dd88e1592e66dee2553c99ef244203d5a1b98\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/c25dd88e1592e66dee2553c99ef244203d5a1b98\",
                \"reference\": \"c25dd88e1592e66dee2553c99ef244203d5a1b98\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHP/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2013-01-07 10:56:35\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"3.7.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"2c67e52445416bb7c14046b432acd7eb79e4e612\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/2c67e52445416bb7c14046b432acd7eb79e4e612\",
                \"reference\": \"2c67e52445416bb7c14046b432acd7eb79e4e612\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-pcre\": \"*\",
                \"ext-reflection\": \"*\",
                \"ext-spl\": \"*\",
                \"php\": \">=5.3.3\",
                \"phpunit/php-code-coverage\": \">=1.2.1,<1.3.0\",
                \"phpunit/php-file-iterator\": \">=1.3.1\",
                \"phpunit/php-text-template\": \">=1.1.1\",
                \"phpunit/php-timer\": \">=1.0.2,<1.1.0\",
                \"phpunit/phpunit-mock-objects\": \">=1.2.0,<1.3.0\",
                \"symfony/yaml\": \">=2.2.0\"
            },
            \"require-dev\": {
                \"pear-pear/pear\": \"1.9.4\"
            },
            \"suggest\": {
                \"ext-json\": \"*\",
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"phpunit/php-invoker\": \">=1.1.0,<1.2.0\"
            },
            \"bin\": [
                \"composer/bin/phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.7.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"PHPUnit/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\",
                \"../../symfony/yaml/\"
            ],
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
            \"homepage\": \"http://www.phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2013-03-11 07:06:05\"
        },
        {
            \"name\": \"phpunit/phpunit-mock-objects\",
            \"version\": \"1.2.x-dev\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit-mock-objects.git\",
                \"reference\": \"d49b5683200b5db9b1c64cb06f52f50d147891c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit-mock-objects/zipball/d49b5683200b5db9b1c64cb06f52f50d147891c4\",
                \"reference\": \"d49b5683200b5db9b1c64cb06f52f50d147891c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"phpunit/php-text-template\": \">=1.1.1@stable\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"PHPUnit/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"include-path\": [
                \"\"
            ],
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
            \"description\": \"Mock Object library for PHPUnit\",
            \"homepage\": \"https://github.com/sebastianbergmann/phpunit-mock-objects/\",
            \"keywords\": [
                \"mock\",
                \"xunit\"
            ],
            \"time\": \"2013-02-05 07:46:41\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"dev-master\",
            \"target-dir\": \"Symfony/Component/Yaml\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/Yaml.git\",
                \"reference\": \"f198ac28048eeceae852419c076123aaee59cd1c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/Yaml/zipball/f198ac28048eeceae852419c076123aaee59cd1c\",
                \"reference\": \"f198ac28048eeceae852419c076123aaee59cd1c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
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
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"http://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Yaml Component\",
            \"homepage\": \"http://symfony.com\",
            \"time\": \"2013-01-31 21:39:01\"
        }
    ],
    \"aliases\": [

    ],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": [

    ],
    \"platform\": {
        \"php\": \">=5.2.4\"
    },
    \"platform-dev\": [

    ]
}
", "vendor/jdorn/sql-formatter/composer.lock", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/composer.lock");
    }
}
