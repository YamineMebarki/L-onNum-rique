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

/* vendor/symfony/intl/Resources/data/locales/ii.json */
class __TwigTemplate_c50e2bc57b758bf816a80ad3ab956a8b35a453877451f8d8236cb74af105d58e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ii.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ii.json"));

        // line 1
        echo "{
    \"Names\": {
        \"de\": \"ꄓꇩꉙ\",
        \"de_DE\": \"ꄓꇩꉙ (ꄓꇩ)\",
        \"de_IT\": \"ꄓꇩꉙ (ꑴꄊꆺ)\",
        \"en\": \"ꑱꇩꉙ\",
        \"en_DE\": \"ꑱꇩꉙ (ꄓꇩ)\",
        \"en_GB\": \"ꑱꇩꉙ (ꑱꇩ)\",
        \"en_IN\": \"ꑱꇩꉙ (ꑴꄗ)\",
        \"en_US\": \"ꑱꇩꉙ (ꂰꇩ)\",
        \"es\": \"ꑭꀠꑸꉙ\",
        \"es_BR\": \"ꑭꀠꑸꉙ (ꀠꑭ)\",
        \"es_US\": \"ꑭꀠꑸꉙ (ꂰꇩ)\",
        \"fr\": \"ꃔꇩꉙ\",
        \"fr_FR\": \"ꃔꇩꉙ (ꃔꇩ)\",
        \"ii\": \"ꆈꌠꉙ\",
        \"ii_CN\": \"ꆈꌠꉙ (ꍏꇩ)\",
        \"it\": \"ꑴꄊꆺꉙ\",
        \"it_IT\": \"ꑴꄊꆺꉙ (ꑴꄊꆺ)\",
        \"ja\": \"ꏝꀪꉙ\",
        \"ja_JP\": \"ꏝꀪꉙ (ꏝꀪ)\",
        \"pt\": \"ꁍꄨꑸꉙ\",
        \"pt_BR\": \"ꁍꄨꑸꉙ (ꀠꑭ)\",
        \"ru\": \"ꊉꇩꉙ\",
        \"ru_RU\": \"ꊉꇩꉙ (ꊉꇆꌦ)\",
        \"zh\": \"ꍏꇩꉙ\",
        \"zh_CN\": \"ꍏꇩꉙ (ꍏꇩ)\",
        \"zh_Hans\": \"ꍏꇩꉙ (ꈝꐯꉌꈲꁱꂷ)\",
        \"zh_Hans_CN\": \"ꍏꇩꉙ (ꈝꐯꉌꈲꁱꂷ, ꍏꇩ)\",
        \"zh_Hant\": \"ꍏꇩꉙ (ꀎꋏꉌꈲꁱꂷ)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/ii.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"de\": \"ꄓꇩꉙ\",
        \"de_DE\": \"ꄓꇩꉙ (ꄓꇩ)\",
        \"de_IT\": \"ꄓꇩꉙ (ꑴꄊꆺ)\",
        \"en\": \"ꑱꇩꉙ\",
        \"en_DE\": \"ꑱꇩꉙ (ꄓꇩ)\",
        \"en_GB\": \"ꑱꇩꉙ (ꑱꇩ)\",
        \"en_IN\": \"ꑱꇩꉙ (ꑴꄗ)\",
        \"en_US\": \"ꑱꇩꉙ (ꂰꇩ)\",
        \"es\": \"ꑭꀠꑸꉙ\",
        \"es_BR\": \"ꑭꀠꑸꉙ (ꀠꑭ)\",
        \"es_US\": \"ꑭꀠꑸꉙ (ꂰꇩ)\",
        \"fr\": \"ꃔꇩꉙ\",
        \"fr_FR\": \"ꃔꇩꉙ (ꃔꇩ)\",
        \"ii\": \"ꆈꌠꉙ\",
        \"ii_CN\": \"ꆈꌠꉙ (ꍏꇩ)\",
        \"it\": \"ꑴꄊꆺꉙ\",
        \"it_IT\": \"ꑴꄊꆺꉙ (ꑴꄊꆺ)\",
        \"ja\": \"ꏝꀪꉙ\",
        \"ja_JP\": \"ꏝꀪꉙ (ꏝꀪ)\",
        \"pt\": \"ꁍꄨꑸꉙ\",
        \"pt_BR\": \"ꁍꄨꑸꉙ (ꀠꑭ)\",
        \"ru\": \"ꊉꇩꉙ\",
        \"ru_RU\": \"ꊉꇩꉙ (ꊉꇆꌦ)\",
        \"zh\": \"ꍏꇩꉙ\",
        \"zh_CN\": \"ꍏꇩꉙ (ꍏꇩ)\",
        \"zh_Hans\": \"ꍏꇩꉙ (ꈝꐯꉌꈲꁱꂷ)\",
        \"zh_Hans_CN\": \"ꍏꇩꉙ (ꈝꐯꉌꈲꁱꂷ, ꍏꇩ)\",
        \"zh_Hant\": \"ꍏꇩꉙ (ꀎꋏꉌꈲꁱꂷ)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/ii.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/ii.json");
    }
}
