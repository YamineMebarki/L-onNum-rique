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

/* vendor/webmozart/assert/composer.json */
class __TwigTemplate_a6297af3b49364924a8461a4d60fae4c232a3d03eec609e0061743b5760bc0a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/composer.json"));

        // line 1
        echo "{
    \"name\": \"webmozart/assert\",
    \"description\": \"Assertions to validate method input/output with nice error messages.\",
    \"keywords\": [
        \"assert\",
        \"check\",
        \"validate\"
    ],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Bernhard Schussek\",
            \"email\": \"bschussek@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^5.3.3 || ^7.0\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
    },
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
    \"autoload-dev\": {
        \"psr-4\": {
            \"Webmozart\\\\Assert\\\\Tests\\\\\": \"tests/\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/webmozart/assert/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"webmozart/assert\",
    \"description\": \"Assertions to validate method input/output with nice error messages.\",
    \"keywords\": [
        \"assert\",
        \"check\",
        \"validate\"
    ],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Bernhard Schussek\",
            \"email\": \"bschussek@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^5.3.3 || ^7.0\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
    },
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
    \"autoload-dev\": {
        \"psr-4\": {
            \"Webmozart\\\\Assert\\\\Tests\\\\\": \"tests/\"
        }
    }
}
", "vendor/webmozart/assert/composer.json", "/var/www/public/DevLaon/templates/vendor/webmozart/assert/composer.json");
    }
}
