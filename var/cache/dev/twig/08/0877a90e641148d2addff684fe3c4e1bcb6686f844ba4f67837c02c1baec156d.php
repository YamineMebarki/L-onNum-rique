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

/* vendor/symfony/intl/Resources/data/languages/en_CA.json */
class __TwigTemplate_f931b4cf6ce515c09c9ee17b42923b89e4ec68d1ccb106e69a63e1ef762d99d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/en_CA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/en_CA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ar_001\": \"Modern Standard Arabic\",
        \"bn\": \"Bengali\",
        \"de_AT\": \"Austrian German\",
        \"de_CH\": \"Swiss High German\",
        \"en_AU\": \"Australian English\",
        \"en_CA\": \"Canadian English\",
        \"en_GB\": \"British English\",
        \"en_US\": \"American English\",
        \"es_419\": \"Latin American Spanish\",
        \"es_ES\": \"European Spanish\",
        \"es_MX\": \"Mexican Spanish\",
        \"fa_AF\": \"Dari\",
        \"fr_CA\": \"Canadian French\",
        \"fr_CH\": \"Swiss French\",
        \"mfe\": \"Mauritian\",
        \"nl_BE\": \"Flemish\",
        \"pt_BR\": \"Brazilian Portuguese\",
        \"pt_PT\": \"European Portuguese\",
        \"ro_MD\": \"Moldovan\",
        \"sr_ME\": \"Montenegrin\",
        \"sw_CD\": \"Congo Swahili\",
        \"tvl\": \"Tuvaluan\",
        \"zh_Hans\": \"Simplified Chinese\",
        \"zh_Hant\": \"Traditional Chinese\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/en_CA.json";
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
        \"ar_001\": \"Modern Standard Arabic\",
        \"bn\": \"Bengali\",
        \"de_AT\": \"Austrian German\",
        \"de_CH\": \"Swiss High German\",
        \"en_AU\": \"Australian English\",
        \"en_CA\": \"Canadian English\",
        \"en_GB\": \"British English\",
        \"en_US\": \"American English\",
        \"es_419\": \"Latin American Spanish\",
        \"es_ES\": \"European Spanish\",
        \"es_MX\": \"Mexican Spanish\",
        \"fa_AF\": \"Dari\",
        \"fr_CA\": \"Canadian French\",
        \"fr_CH\": \"Swiss French\",
        \"mfe\": \"Mauritian\",
        \"nl_BE\": \"Flemish\",
        \"pt_BR\": \"Brazilian Portuguese\",
        \"pt_PT\": \"European Portuguese\",
        \"ro_MD\": \"Moldovan\",
        \"sr_ME\": \"Montenegrin\",
        \"sw_CD\": \"Congo Swahili\",
        \"tvl\": \"Tuvaluan\",
        \"zh_Hans\": \"Simplified Chinese\",
        \"zh_Hant\": \"Traditional Chinese\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/en_CA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/en_CA.json");
    }
}
