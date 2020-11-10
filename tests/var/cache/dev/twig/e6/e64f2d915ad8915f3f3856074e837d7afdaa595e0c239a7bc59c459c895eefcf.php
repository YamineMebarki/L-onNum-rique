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

/* vendor/swiftmailer/swiftmailer/composer.json */
class __TwigTemplate_7ab36379bebb1b73f90819808f6a3a515b83ed72e184cd046dd56473b8725780 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/composer.json"));

        // line 1
        echo "{
    \"name\": \"swiftmailer/swiftmailer\",
    \"type\": \"library\",
    \"description\": \"Swiftmailer, free feature-rich PHP mailer\",
    \"keywords\": [\"mail\",\"mailer\",\"email\"],
    \"homepage\": \"https://swiftmailer.symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Chris Corbyn\"
        },
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0.0\",
        \"egulias/email-validator\": \"~2.0\",
        \"symfony/polyfill-iconv\": \"^1.0\",
        \"symfony/polyfill-mbstring\": \"^1.0\",
        \"symfony/polyfill-intl-idn\": \"^1.10\"
    },
    \"require-dev\": {
        \"mockery/mockery\": \"~0.9.1\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\"
    },
    \"suggest\": {
        \"ext-intl\": \"Needed to support internationalized email addresses\",
        \"true/punycode\": \"Needed to support internationalized email addresses, if ext-intl is not installed\"
    },
    \"autoload\": {
        \"files\": [\"lib/swift_required.php\"]
    },
    \"autoload-dev\": {
        \"psr-0\": { \"Swift_\": \"tests/unit\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"6.2-dev\"
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"swiftmailer/swiftmailer\",
    \"type\": \"library\",
    \"description\": \"Swiftmailer, free feature-rich PHP mailer\",
    \"keywords\": [\"mail\",\"mailer\",\"email\"],
    \"homepage\": \"https://swiftmailer.symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Chris Corbyn\"
        },
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        }
    ],
    \"require\": {
        \"php\": \">=7.0.0\",
        \"egulias/email-validator\": \"~2.0\",
        \"symfony/polyfill-iconv\": \"^1.0\",
        \"symfony/polyfill-mbstring\": \"^1.0\",
        \"symfony/polyfill-intl-idn\": \"^1.10\"
    },
    \"require-dev\": {
        \"mockery/mockery\": \"~0.9.1\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8\"
    },
    \"suggest\": {
        \"ext-intl\": \"Needed to support internationalized email addresses\",
        \"true/punycode\": \"Needed to support internationalized email addresses, if ext-intl is not installed\"
    },
    \"autoload\": {
        \"files\": [\"lib/swift_required.php\"]
    },
    \"autoload-dev\": {
        \"psr-0\": { \"Swift_\": \"tests/unit\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"6.2-dev\"
        }
    }
}
", "vendor/swiftmailer/swiftmailer/composer.json", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/composer.json");
    }
}
