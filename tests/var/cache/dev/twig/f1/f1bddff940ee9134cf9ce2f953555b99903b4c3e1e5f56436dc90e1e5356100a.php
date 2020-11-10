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

/* vendor/symfony/intl/Resources/data/timezones/es_MX.json */
class __TwigTemplate_1436903bf2644936a68deacdffbe675c2cb0b26fe3426630e5a9b8d33f641421 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_MX.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_MX.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Africa\\/Bujumbura\": \"hora de África central (Buyumbura)\",
        \"Africa\\/Conakry\": \"hora del meridiano de Greenwich (Conakri)\",
        \"Africa\\/Dar_es_Salaam\": \"hora de África oriental (Dar es-Salaam)\",
        \"Africa\\/Khartoum\": \"hora de África central (Jartum)\",
        \"America\\/Rio_Branco\": \"Hora de Acre (Rio Branco)\",
        \"Asia\\/Almaty\": \"hora de Kazajistán oriental (Almatý)\",
        \"Asia\\/Aqtobe\": \"hora de Kazajistán occidental (Aktobé)\",
        \"Asia\\/Atyrau\": \"hora de Kazajistán occidental (Atirau)\",
        \"Atlantic\\/Stanley\": \"hora de Islas Malvinas (Stanley)\",
        \"Etc\\/UTC\": \"hora universal coordinada\",
        \"Indian\\/Christmas\": \"hora de la isla de Navidad\",
        \"Pacific\\/Easter\": \"hora de Isla de Pascua\",
        \"Pacific\\/Honolulu\": \"hora de Hawái-Aleutianas (Honolulu)\",
        \"Pacific\\/Tarawa\": \"hora de las Islas Gilbert (Tarawa)\",
        \"Pacific\\/Wake\": \"hora de la Isla Wake\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/es_MX.json";
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
        \"Africa\\/Bujumbura\": \"hora de África central (Buyumbura)\",
        \"Africa\\/Conakry\": \"hora del meridiano de Greenwich (Conakri)\",
        \"Africa\\/Dar_es_Salaam\": \"hora de África oriental (Dar es-Salaam)\",
        \"Africa\\/Khartoum\": \"hora de África central (Jartum)\",
        \"America\\/Rio_Branco\": \"Hora de Acre (Rio Branco)\",
        \"Asia\\/Almaty\": \"hora de Kazajistán oriental (Almatý)\",
        \"Asia\\/Aqtobe\": \"hora de Kazajistán occidental (Aktobé)\",
        \"Asia\\/Atyrau\": \"hora de Kazajistán occidental (Atirau)\",
        \"Atlantic\\/Stanley\": \"hora de Islas Malvinas (Stanley)\",
        \"Etc\\/UTC\": \"hora universal coordinada\",
        \"Indian\\/Christmas\": \"hora de la isla de Navidad\",
        \"Pacific\\/Easter\": \"hora de Isla de Pascua\",
        \"Pacific\\/Honolulu\": \"hora de Hawái-Aleutianas (Honolulu)\",
        \"Pacific\\/Tarawa\": \"hora de las Islas Gilbert (Tarawa)\",
        \"Pacific\\/Wake\": \"hora de la Isla Wake\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/es_MX.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/es_MX.json");
    }
}
