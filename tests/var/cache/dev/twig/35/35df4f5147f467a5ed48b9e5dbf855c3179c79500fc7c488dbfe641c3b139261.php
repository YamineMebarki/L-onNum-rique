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

/* vendor/symfony/intl/Resources/data/languages/rn.json */
class __TwigTemplate_1a3624bfcfdce4c93983b388364dae9a01e81364a8256ed5ac1f5b7f3e1b8497 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/rn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/rn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Igikani\",
        \"am\": \"Ikimuhariki\",
        \"ar\": \"Icarabu\",
        \"be\": \"Ikibelarusiya\",
        \"bg\": \"Ikinyabuligariya\",
        \"bn\": \"Ikibengali\",
        \"cs\": \"Igiceke\",
        \"de\": \"Ikidage\",
        \"el\": \"Ikigereki\",
        \"en\": \"Icongereza\",
        \"es\": \"Icesipanyolo\",
        \"fa\": \"Igiperisi\",
        \"fr\": \"Igifaransa\",
        \"ha\": \"Igihawusa\",
        \"hi\": \"Igihindi\",
        \"hu\": \"Ikinyahongiriya\",
        \"id\": \"Ikinyendoziya\",
        \"ig\": \"Ikigubo\",
        \"it\": \"Igitaliyani\",
        \"ja\": \"Ikiyapani\",
        \"jv\": \"Ikinyejava\",
        \"km\": \"Igikambodiya\",
        \"ko\": \"Ikinyakoreya\",
        \"ms\": \"Ikinyamaleziya\",
        \"my\": \"Ikinyabirimaniya\",
        \"ne\": \"Ikinepali\",
        \"nl\": \"Igiholandi\",
        \"pa\": \"Igipunjabi\",
        \"pl\": \"Ikinyapolonye\",
        \"pt\": \"Igiporutugari\",
        \"rn\": \"Ikirundi\",
        \"ro\": \"Ikinyarumaniya\",
        \"ru\": \"Ikirusiya\",
        \"rw\": \"Ikinyarwanda\",
        \"so\": \"Igisomali\",
        \"sv\": \"Igisuweduwa\",
        \"ta\": \"Igitamili\",
        \"th\": \"Ikinyatayilandi\",
        \"tr\": \"Igiturukiya\",
        \"uk\": \"Ikinyayukereni\",
        \"ur\": \"Inyeyurudu\",
        \"vi\": \"Ikinyaviyetinamu\",
        \"yo\": \"Ikiyoruba\",
        \"zh\": \"Igishinwa\",
        \"zu\": \"Ikizulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/rn.json";
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
        \"ak\": \"Igikani\",
        \"am\": \"Ikimuhariki\",
        \"ar\": \"Icarabu\",
        \"be\": \"Ikibelarusiya\",
        \"bg\": \"Ikinyabuligariya\",
        \"bn\": \"Ikibengali\",
        \"cs\": \"Igiceke\",
        \"de\": \"Ikidage\",
        \"el\": \"Ikigereki\",
        \"en\": \"Icongereza\",
        \"es\": \"Icesipanyolo\",
        \"fa\": \"Igiperisi\",
        \"fr\": \"Igifaransa\",
        \"ha\": \"Igihawusa\",
        \"hi\": \"Igihindi\",
        \"hu\": \"Ikinyahongiriya\",
        \"id\": \"Ikinyendoziya\",
        \"ig\": \"Ikigubo\",
        \"it\": \"Igitaliyani\",
        \"ja\": \"Ikiyapani\",
        \"jv\": \"Ikinyejava\",
        \"km\": \"Igikambodiya\",
        \"ko\": \"Ikinyakoreya\",
        \"ms\": \"Ikinyamaleziya\",
        \"my\": \"Ikinyabirimaniya\",
        \"ne\": \"Ikinepali\",
        \"nl\": \"Igiholandi\",
        \"pa\": \"Igipunjabi\",
        \"pl\": \"Ikinyapolonye\",
        \"pt\": \"Igiporutugari\",
        \"rn\": \"Ikirundi\",
        \"ro\": \"Ikinyarumaniya\",
        \"ru\": \"Ikirusiya\",
        \"rw\": \"Ikinyarwanda\",
        \"so\": \"Igisomali\",
        \"sv\": \"Igisuweduwa\",
        \"ta\": \"Igitamili\",
        \"th\": \"Ikinyatayilandi\",
        \"tr\": \"Igiturukiya\",
        \"uk\": \"Ikinyayukereni\",
        \"ur\": \"Inyeyurudu\",
        \"vi\": \"Ikinyaviyetinamu\",
        \"yo\": \"Ikiyoruba\",
        \"zh\": \"Igishinwa\",
        \"zu\": \"Ikizulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/rn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/rn.json");
    }
}
