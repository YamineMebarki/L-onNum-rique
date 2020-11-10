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

/* vendor/ocramius/proxy-manager/composer.json */
class __TwigTemplate_7f5cec5654bab9b3c987df3e9c6b2c74eee93eec0a473bf0c5d34cdbeb19c003 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/composer.json"));

        // line 1
        echo "{
    \"name\":              \"ocramius/proxy-manager\",
    \"description\":       \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
    \"type\":              \"library\",
    \"license\":           \"MIT\",
    \"homepage\":          \"https://github.com/Ocramius/ProxyManager\",
    \"keywords\":          [
        \"proxy\",
        \"proxy pattern\",
        \"service proxies\",
        \"lazy loading\",
        \"aop\"
    ],
    \"authors\": [
        {
            \"name\":     \"Marco Pivetta\",
            \"email\":    \"ocramius@gmail.com\",
            \"homepage\": \"http://ocramius.github.io/\"
        }
    ],
    \"require\": {
        \"php\":                       \"^7.2.0\",
        \"zendframework/zend-code\":   \"^3.3.0\",
        \"ocramius/package-versions\": \"^1.1.3\"
    },
    \"require-dev\": {
        \"ext-phar\":                     \"*\",
        \"phpunit/phpunit\":              \"^6.4.3\",
        \"squizlabs/php_codesniffer\":    \"^2.9.1\",
        \"couscous/couscous\":            \"^1.6.1\",
        \"phpbench/phpbench\":            \"^0.12.2\",
        \"phpstan/phpstan\":              \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
        \"phpstan/phpstan-phpunit\":      \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
        \"nikic/php-parser\":             \"^3.1.1\",
        \"humbug/humbug\":                \"1.0.0-RC.0@RC\",
        \"padraic/phpunit-accelerator\":  \"dev-master@DEV\"
    },
    \"suggest\": {
        \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
        \"zendframework/zend-xmlrpc\":   \"To have the XmlRpc adapter (Remote Object feature)\",
        \"zendframework/zend-json\":     \"To have the JsonRpc adapter (Remote Object feature)\",
        \"zendframework/zend-soap\":     \"To have the Soap adapter (Remote Object feature)\"
    },
    \"autoload\": {
        \"psr-0\": {
            \"ProxyManager\\\\\": \"src\"
        }
    },
    \"autoload-dev\": {
        \"psr-0\": {
            \"ProxyManagerBench\\\\\": \"tests\",
            \"ProxyManagerTest\\\\\": \"tests\",
            \"ProxyManagerTestAsset\\\\\": \"tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.0.x-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\":              \"ocramius/proxy-manager\",
    \"description\":       \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
    \"type\":              \"library\",
    \"license\":           \"MIT\",
    \"homepage\":          \"https://github.com/Ocramius/ProxyManager\",
    \"keywords\":          [
        \"proxy\",
        \"proxy pattern\",
        \"service proxies\",
        \"lazy loading\",
        \"aop\"
    ],
    \"authors\": [
        {
            \"name\":     \"Marco Pivetta\",
            \"email\":    \"ocramius@gmail.com\",
            \"homepage\": \"http://ocramius.github.io/\"
        }
    ],
    \"require\": {
        \"php\":                       \"^7.2.0\",
        \"zendframework/zend-code\":   \"^3.3.0\",
        \"ocramius/package-versions\": \"^1.1.3\"
    },
    \"require-dev\": {
        \"ext-phar\":                     \"*\",
        \"phpunit/phpunit\":              \"^6.4.3\",
        \"squizlabs/php_codesniffer\":    \"^2.9.1\",
        \"couscous/couscous\":            \"^1.6.1\",
        \"phpbench/phpbench\":            \"^0.12.2\",
        \"phpstan/phpstan\":              \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
        \"phpstan/phpstan-phpunit\":      \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
        \"nikic/php-parser\":             \"^3.1.1\",
        \"humbug/humbug\":                \"1.0.0-RC.0@RC\",
        \"padraic/phpunit-accelerator\":  \"dev-master@DEV\"
    },
    \"suggest\": {
        \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
        \"zendframework/zend-xmlrpc\":   \"To have the XmlRpc adapter (Remote Object feature)\",
        \"zendframework/zend-json\":     \"To have the JsonRpc adapter (Remote Object feature)\",
        \"zendframework/zend-soap\":     \"To have the Soap adapter (Remote Object feature)\"
    },
    \"autoload\": {
        \"psr-0\": {
            \"ProxyManager\\\\\": \"src\"
        }
    },
    \"autoload-dev\": {
        \"psr-0\": {
            \"ProxyManagerBench\\\\\": \"tests\",
            \"ProxyManagerTest\\\\\": \"tests\",
            \"ProxyManagerTestAsset\\\\\": \"tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.0.x-dev\"
        }
    }
}
", "vendor/ocramius/proxy-manager/composer.json", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/composer.json");
    }
}
