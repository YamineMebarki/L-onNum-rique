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

/* vendor/symfony/intl/Resources/data/currencies/en_001.json */
class __TwigTemplate_ef0740a39274c647256b49f003e9dfb25aaefd18c98f6d0706e51ae65892c9be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/en_001.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/en_001.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"BYB\": [
            \"BYB\",
            \"Belarusian New Rouble (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusian Rouble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarusian Rouble (2000–2016)\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japanese Yen\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvian Rouble\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russian Rouble\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Russian Rouble (1991–1998)\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pound\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tajikistani Rouble\"
        ],
        \"USD\": [
            \"US\$\",
            \"US Dollar\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/en_001.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"BYB\": [
            \"BYB\",
            \"Belarusian New Rouble (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusian Rouble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarusian Rouble (2000–2016)\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japanese Yen\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvian Rouble\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russian Rouble\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Russian Rouble (1991–1998)\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pound\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tajikistani Rouble\"
        ],
        \"USD\": [
            \"US\$\",
            \"US Dollar\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/en_001.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/en_001.json");
    }
}
