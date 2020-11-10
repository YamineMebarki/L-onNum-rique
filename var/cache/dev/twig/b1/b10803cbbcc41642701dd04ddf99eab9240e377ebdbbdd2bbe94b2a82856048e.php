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

/* vendor/ocramius/package-versions/composer.json */
class __TwigTemplate_79beb839a4f2c63dfc8e0970b4fbe990db1d5538f6310ac65f9c6c2ee754c7ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/composer.json"));

        // line 1
        echo "{
    \"name\": \"ocramius/package-versions\",
    \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
    \"type\": \"composer-plugin\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Marco Pivetta\",
            \"email\": \"ocramius@gmail.com\"
        }
    ],
    \"require\": {
        \"php\":                 \"^7.1.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":          \"^7.0.0\",
        \"infection/infection\":      \"^0.7.1\",
        \"composer/composer\":        \"^1.6.3\",
        \"ext-zip\":                  \"*\",
        \"doctrine/coding-standard\": \"^5.0.1\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"PackageVersions\\\\\": \"src/PackageVersions\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PackageVersionsTest\\\\\": \"test/PackageVersionsTest\"
        }
    },
    \"extra\": {
        \"class\": \"PackageVersions\\\\Installer\",
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    },
    \"scripts\": {
        \"post-update-cmd\":  \"PackageVersions\\\\Installer::dumpVersionsClass\",
        \"post-install-cmd\": \"PackageVersions\\\\Installer::dumpVersionsClass\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/package-versions/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"ocramius/package-versions\",
    \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
    \"type\": \"composer-plugin\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Marco Pivetta\",
            \"email\": \"ocramius@gmail.com\"
        }
    ],
    \"require\": {
        \"php\":                 \"^7.1.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":          \"^7.0.0\",
        \"infection/infection\":      \"^0.7.1\",
        \"composer/composer\":        \"^1.6.3\",
        \"ext-zip\":                  \"*\",
        \"doctrine/coding-standard\": \"^5.0.1\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"PackageVersions\\\\\": \"src/PackageVersions\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PackageVersionsTest\\\\\": \"test/PackageVersionsTest\"
        }
    },
    \"extra\": {
        \"class\": \"PackageVersions\\\\Installer\",
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    },
    \"scripts\": {
        \"post-update-cmd\":  \"PackageVersions\\\\Installer::dumpVersionsClass\",
        \"post-install-cmd\": \"PackageVersions\\\\Installer::dumpVersionsClass\"
    }
}
", "vendor/ocramius/package-versions/composer.json", "/var/www/public/DevLaon/templates/vendor/ocramius/package-versions/composer.json");
    }
}
