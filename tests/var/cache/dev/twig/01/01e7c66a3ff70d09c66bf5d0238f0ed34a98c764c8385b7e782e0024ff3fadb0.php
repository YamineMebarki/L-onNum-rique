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

/* vendor/symfony/intl/Resources/data/languages/es_419.json */
class __TwigTemplate_4e7835cab00027539a01e435c28510d1cdb311b7b18e778755ecb6545bafe528 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_419.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_419.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"achenés\",
        \"ady\": \"adigeo\",
        \"alt\": \"altái del sur\",
        \"ar_001\": \"árabe estándar moderno\",
        \"arp\": \"arapajó\",
        \"ars\": \"árabe de Néyed\",
        \"bla\": \"siksiká\",
        \"de_AT\": \"alemán austríaco\",
        \"de_CH\": \"alto alemán suizo\",
        \"en_AU\": \"inglés australiano\",
        \"en_CA\": \"inglés canadiense\",
        \"en_GB\": \"inglés británico\",
        \"en_US\": \"inglés estadounidense\",
        \"es_419\": \"español latinoamericano\",
        \"es_ES\": \"español de España\",
        \"es_MX\": \"español de México\",
        \"eu\": \"vasco\",
        \"fr_CA\": \"francés canadiense\",
        \"fr_CH\": \"francés suizo\",
        \"goh\": \"alemán de la alta edad antigua\",
        \"grc\": \"griego clásico\",
        \"gu\": \"gujarati\",
        \"ht\": \"haitiano\",
        \"kbd\": \"cabardiano\",
        \"krc\": \"karachái-bálkaro\",
        \"lo\": \"laosiano\",
        \"nl_BE\": \"flamenco\",
        \"nr\": \"ndebele del sur\",
        \"nso\": \"sesotho del norte\",
        \"pa\": \"panyabí\",
        \"prg\": \"prusiano antiguo\",
        \"pt_BR\": \"portugués de Brasil\",
        \"pt_PT\": \"portugués de Portugal\",
        \"rm\": \"retorrománico\",
        \"ro_MD\": \"moldavo\",
        \"shu\": \"árabe (Chad)\",
        \"sma\": \"sami del sur\",
        \"st\": \"sesotho del sur\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"swahili (Congo)\",
        \"syr\": \"siríaco\",
        \"tet\": \"tetun\",
        \"tyv\": \"tuvano\",
        \"wal\": \"walamo\",
        \"wuu\": \"wu\",
        \"xal\": \"calmuco\",
        \"zh_Hans\": \"chino simplificado\",
        \"zh_Hant\": \"chino tradicional\",
        \"zun\": \"zuni\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/es_419.json";
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
        \"ace\": \"achenés\",
        \"ady\": \"adigeo\",
        \"alt\": \"altái del sur\",
        \"ar_001\": \"árabe estándar moderno\",
        \"arp\": \"arapajó\",
        \"ars\": \"árabe de Néyed\",
        \"bla\": \"siksiká\",
        \"de_AT\": \"alemán austríaco\",
        \"de_CH\": \"alto alemán suizo\",
        \"en_AU\": \"inglés australiano\",
        \"en_CA\": \"inglés canadiense\",
        \"en_GB\": \"inglés británico\",
        \"en_US\": \"inglés estadounidense\",
        \"es_419\": \"español latinoamericano\",
        \"es_ES\": \"español de España\",
        \"es_MX\": \"español de México\",
        \"eu\": \"vasco\",
        \"fr_CA\": \"francés canadiense\",
        \"fr_CH\": \"francés suizo\",
        \"goh\": \"alemán de la alta edad antigua\",
        \"grc\": \"griego clásico\",
        \"gu\": \"gujarati\",
        \"ht\": \"haitiano\",
        \"kbd\": \"cabardiano\",
        \"krc\": \"karachái-bálkaro\",
        \"lo\": \"laosiano\",
        \"nl_BE\": \"flamenco\",
        \"nr\": \"ndebele del sur\",
        \"nso\": \"sesotho del norte\",
        \"pa\": \"panyabí\",
        \"prg\": \"prusiano antiguo\",
        \"pt_BR\": \"portugués de Brasil\",
        \"pt_PT\": \"portugués de Portugal\",
        \"rm\": \"retorrománico\",
        \"ro_MD\": \"moldavo\",
        \"shu\": \"árabe (Chad)\",
        \"sma\": \"sami del sur\",
        \"st\": \"sesotho del sur\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"swahili (Congo)\",
        \"syr\": \"siríaco\",
        \"tet\": \"tetun\",
        \"tyv\": \"tuvano\",
        \"wal\": \"walamo\",
        \"wuu\": \"wu\",
        \"xal\": \"calmuco\",
        \"zh_Hans\": \"chino simplificado\",
        \"zh_Hant\": \"chino tradicional\",
        \"zun\": \"zuni\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/es_419.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/es_419.json");
    }
}
