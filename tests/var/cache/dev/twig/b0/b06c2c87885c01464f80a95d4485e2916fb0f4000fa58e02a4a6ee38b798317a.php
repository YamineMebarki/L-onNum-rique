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

/* vendor/symfony/intl/Resources/data/languages/mg.json */
class __TwigTemplate_0710450513ba8cabcc713d8ee2e5bf44c5392e24f5d5fb21fc3e872b110facc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/mg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/mg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Akan\",
        \"am\": \"Amharika\",
        \"ar\": \"Arabo\",
        \"be\": \"Bielorosy\",
        \"bg\": \"Biolgara\",
        \"bn\": \"Bengali\",
        \"cs\": \"Tseky\",
        \"de\": \"Alemanina\",
        \"el\": \"Grika\",
        \"en\": \"Anglisy\",
        \"es\": \"Espaniola\",
        \"fa\": \"Persa\",
        \"fr\": \"Frantsay\",
        \"ha\": \"haoussa\",
        \"hi\": \"hindi\",
        \"hu\": \"hongroà\",
        \"id\": \"Indonezianina\",
        \"ig\": \"igbo\",
        \"it\": \"Italianina\",
        \"ja\": \"Japoney\",
        \"jv\": \"Javaney\",
        \"km\": \"khmer\",
        \"ko\": \"Koreanina\",
        \"mg\": \"Malagasy\",
        \"ms\": \"Malay\",
        \"my\": \"Birmana\",
        \"ne\": \"Nepale\",
        \"nl\": \"Holandey\",
        \"pa\": \"Penjabi\",
        \"pl\": \"Poloney\",
        \"pt\": \"Portiogey\",
        \"ro\": \"Romanianina\",
        \"ru\": \"Rosianina\",
        \"rw\": \"Roande\",
        \"so\": \"Somalianina\",
        \"sv\": \"Soisa\",
        \"ta\": \"Tamoila\",
        \"th\": \"Taioaney\",
        \"tr\": \"Tiorka\",
        \"uk\": \"Okrainianina\",
        \"ur\": \"Ordò\",
        \"vi\": \"Vietnamianina\",
        \"yo\": \"Yôrobà\",
        \"zh\": \"Sinoa, Mandarin\",
        \"zu\": \"Zolò\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/mg.json";
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
        \"ak\": \"Akan\",
        \"am\": \"Amharika\",
        \"ar\": \"Arabo\",
        \"be\": \"Bielorosy\",
        \"bg\": \"Biolgara\",
        \"bn\": \"Bengali\",
        \"cs\": \"Tseky\",
        \"de\": \"Alemanina\",
        \"el\": \"Grika\",
        \"en\": \"Anglisy\",
        \"es\": \"Espaniola\",
        \"fa\": \"Persa\",
        \"fr\": \"Frantsay\",
        \"ha\": \"haoussa\",
        \"hi\": \"hindi\",
        \"hu\": \"hongroà\",
        \"id\": \"Indonezianina\",
        \"ig\": \"igbo\",
        \"it\": \"Italianina\",
        \"ja\": \"Japoney\",
        \"jv\": \"Javaney\",
        \"km\": \"khmer\",
        \"ko\": \"Koreanina\",
        \"mg\": \"Malagasy\",
        \"ms\": \"Malay\",
        \"my\": \"Birmana\",
        \"ne\": \"Nepale\",
        \"nl\": \"Holandey\",
        \"pa\": \"Penjabi\",
        \"pl\": \"Poloney\",
        \"pt\": \"Portiogey\",
        \"ro\": \"Romanianina\",
        \"ru\": \"Rosianina\",
        \"rw\": \"Roande\",
        \"so\": \"Somalianina\",
        \"sv\": \"Soisa\",
        \"ta\": \"Tamoila\",
        \"th\": \"Taioaney\",
        \"tr\": \"Tiorka\",
        \"uk\": \"Okrainianina\",
        \"ur\": \"Ordò\",
        \"vi\": \"Vietnamianina\",
        \"yo\": \"Yôrobà\",
        \"zh\": \"Sinoa, Mandarin\",
        \"zu\": \"Zolò\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/mg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/mg.json");
    }
}
