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

/* vendor/symfony/intl/Resources/data/currencies/sw_CD.json */
class __TwigTemplate_9f5cad1553b038fb89e2cc30471c478f658f18d6b68691a00a38177c66297faa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw_CD.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw_CD.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"CDF\": [
            \"FC\",
            \"Faranga ya Kongo\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ya China\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir ya Uhabeshi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Sarafu ya Kijapani\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary ya Bukini\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritania\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Shelisheli\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga CFA BCEAO\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sw_CD.json";
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
        \"CDF\": [
            \"FC\",
            \"Faranga ya Kongo\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ya China\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir ya Uhabeshi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Sarafu ya Kijapani\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary ya Bukini\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritania\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Shelisheli\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga CFA BCEAO\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sw_CD.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sw_CD.json");
    }
}
