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

/* vendor/symfony/intl/Resources/data/languages/nd.json */
class __TwigTemplate_98fb3f0c9c93e44184acfe25b347639cfe88111b4566ccbf8afbc50678950bab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/nd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/nd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"isi-Akhani\",
        \"am\": \"isi-Amaharikhi\",
        \"ar\": \"isi-Alabhu\",
        \"be\": \"isi-Bhelarashiyani\",
        \"bg\": \"isi-Bulgaria\",
        \"bn\": \"isi-Bhengali\",
        \"cs\": \"isi-Czech\",
        \"de\": \"isi-Jalimani\",
        \"el\": \"isi-Giliki\",
        \"en\": \"isi-Ngisi\",
        \"es\": \"isi-Sipeyini\",
        \"fa\": \"isi-Pheshiyani\",
        \"fr\": \"isi-Fulentshi\",
        \"ha\": \"isi-Hausa\",
        \"hi\": \"isi-Hindi\",
        \"hu\": \"isi-Hangari\",
        \"id\": \"isi-Indonesia\",
        \"ig\": \"isi-Igbo\",
        \"it\": \"isi-Italiano\",
        \"ja\": \"isi-Japhani\",
        \"jv\": \"isi-Java\",
        \"km\": \"isi-Khambodiya\",
        \"ko\": \"isi-Koriya\",
        \"ms\": \"isi-Malayi\",
        \"my\": \"isi-Burma\",
        \"nd\": \"isiNdebele\",
        \"ne\": \"isi-Nepali\",
        \"nl\": \"isi-Dutch\",
        \"pa\": \"isi-Phunjabi\",
        \"pl\": \"isi-Pholoshi\",
        \"pt\": \"isi-Potukezi\",
        \"ro\": \"isi-Romani\",
        \"ru\": \"isi-Rashiya\",
        \"rw\": \"isi-Ruwanda\",
        \"so\": \"isi-Somali\",
        \"sv\": \"isi-Swidishi\",
        \"ta\": \"isi-Thamil\",
        \"th\": \"isi-Thayi\",
        \"tr\": \"isi-Thekishi\",
        \"uk\": \"isi-Ukrain\",
        \"ur\": \"isi-Udu\",
        \"vi\": \"isi-Vietnamese\",
        \"yo\": \"isi-Yorubha\",
        \"zh\": \"isi-China\",
        \"zu\": \"isi-Zulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/nd.json";
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
        \"ak\": \"isi-Akhani\",
        \"am\": \"isi-Amaharikhi\",
        \"ar\": \"isi-Alabhu\",
        \"be\": \"isi-Bhelarashiyani\",
        \"bg\": \"isi-Bulgaria\",
        \"bn\": \"isi-Bhengali\",
        \"cs\": \"isi-Czech\",
        \"de\": \"isi-Jalimani\",
        \"el\": \"isi-Giliki\",
        \"en\": \"isi-Ngisi\",
        \"es\": \"isi-Sipeyini\",
        \"fa\": \"isi-Pheshiyani\",
        \"fr\": \"isi-Fulentshi\",
        \"ha\": \"isi-Hausa\",
        \"hi\": \"isi-Hindi\",
        \"hu\": \"isi-Hangari\",
        \"id\": \"isi-Indonesia\",
        \"ig\": \"isi-Igbo\",
        \"it\": \"isi-Italiano\",
        \"ja\": \"isi-Japhani\",
        \"jv\": \"isi-Java\",
        \"km\": \"isi-Khambodiya\",
        \"ko\": \"isi-Koriya\",
        \"ms\": \"isi-Malayi\",
        \"my\": \"isi-Burma\",
        \"nd\": \"isiNdebele\",
        \"ne\": \"isi-Nepali\",
        \"nl\": \"isi-Dutch\",
        \"pa\": \"isi-Phunjabi\",
        \"pl\": \"isi-Pholoshi\",
        \"pt\": \"isi-Potukezi\",
        \"ro\": \"isi-Romani\",
        \"ru\": \"isi-Rashiya\",
        \"rw\": \"isi-Ruwanda\",
        \"so\": \"isi-Somali\",
        \"sv\": \"isi-Swidishi\",
        \"ta\": \"isi-Thamil\",
        \"th\": \"isi-Thayi\",
        \"tr\": \"isi-Thekishi\",
        \"uk\": \"isi-Ukrain\",
        \"ur\": \"isi-Udu\",
        \"vi\": \"isi-Vietnamese\",
        \"yo\": \"isi-Yorubha\",
        \"zh\": \"isi-China\",
        \"zu\": \"isi-Zulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/nd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/nd.json");
    }
}
