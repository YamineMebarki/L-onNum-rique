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

/* vendor/symfony/intl/Resources/data/locales/mi.json */
class __TwigTemplate_92a1479391e9d227e3e4b0d26025c6bdc8027b9b11e32857c7a1eeedaec0afb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/mi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/mi.json"));

        // line 1
        echo "{
    \"Names\": {
        \"de\": \"Tiamana\",
        \"de_DE\": \"Tiamana (Tiamana)\",
        \"de_IT\": \"Tiamana (Itāria)\",
        \"en\": \"Ingarihi\",
        \"en_DE\": \"Ingarihi (Tiamana)\",
        \"en_GB\": \"Ingarihi (Hononga o Piritene)\",
        \"en_IN\": \"Ingarihi (Inia)\",
        \"en_NZ\": \"Ingarihi (Aotearoa)\",
        \"en_US\": \"Ingarihi (Hononga o Amerika)\",
        \"es\": \"Paniora\",
        \"es_BR\": \"Paniora (Parahi)\",
        \"es_US\": \"Paniora (Hononga o Amerika)\",
        \"fr\": \"Wīwī\",
        \"fr_FR\": \"Wīwī (Wīwī)\",
        \"it\": \"Ītariana\",
        \"it_IT\": \"Ītariana (Itāria)\",
        \"ja\": \"Hapanihi\",
        \"ja_JP\": \"Hapanihi (Hapani)\",
        \"mi\": \"Māori\",
        \"mi_NZ\": \"Māori (Aotearoa)\",
        \"pt\": \"Pōtikī\",
        \"pt_BR\": \"Pōtikī (Parahi)\",
        \"ru\": \"Ruhiana\",
        \"ru_RU\": \"Ruhiana (Rūhia)\",
        \"zh\": \"Hainamana\",
        \"zh_CN\": \"Hainamana (Haina)\",
        \"zh_Hans\": \"Hainamana (Māmā)\",
        \"zh_Hans_CN\": \"Hainamana (Māmā, Haina)\",
        \"zh_Hant\": \"Hainamana (Tukuiho)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/mi.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"de\": \"Tiamana\",
        \"de_DE\": \"Tiamana (Tiamana)\",
        \"de_IT\": \"Tiamana (Itāria)\",
        \"en\": \"Ingarihi\",
        \"en_DE\": \"Ingarihi (Tiamana)\",
        \"en_GB\": \"Ingarihi (Hononga o Piritene)\",
        \"en_IN\": \"Ingarihi (Inia)\",
        \"en_NZ\": \"Ingarihi (Aotearoa)\",
        \"en_US\": \"Ingarihi (Hononga o Amerika)\",
        \"es\": \"Paniora\",
        \"es_BR\": \"Paniora (Parahi)\",
        \"es_US\": \"Paniora (Hononga o Amerika)\",
        \"fr\": \"Wīwī\",
        \"fr_FR\": \"Wīwī (Wīwī)\",
        \"it\": \"Ītariana\",
        \"it_IT\": \"Ītariana (Itāria)\",
        \"ja\": \"Hapanihi\",
        \"ja_JP\": \"Hapanihi (Hapani)\",
        \"mi\": \"Māori\",
        \"mi_NZ\": \"Māori (Aotearoa)\",
        \"pt\": \"Pōtikī\",
        \"pt_BR\": \"Pōtikī (Parahi)\",
        \"ru\": \"Ruhiana\",
        \"ru_RU\": \"Ruhiana (Rūhia)\",
        \"zh\": \"Hainamana\",
        \"zh_CN\": \"Hainamana (Haina)\",
        \"zh_Hans\": \"Hainamana (Māmā)\",
        \"zh_Hans_CN\": \"Hainamana (Māmā, Haina)\",
        \"zh_Hant\": \"Hainamana (Tukuiho)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/mi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/mi.json");
    }
}
