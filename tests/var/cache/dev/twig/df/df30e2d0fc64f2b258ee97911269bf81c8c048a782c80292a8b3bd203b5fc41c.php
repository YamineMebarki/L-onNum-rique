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

/* vendor/symfony/intl/Resources/data/timezones/es_US.json */
class __TwigTemplate_31dab119f6786c7d5ad3b910a343c5c45f3e31247e89fb70ff98feee3b75777c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_US.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_US.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"America\\/Rio_Branco\": \"Hora de Acre (Rio Branco)\",
        \"Asia\\/Almaty\": \"hora de Kazajistán oriental (Almatý)\",
        \"Asia\\/Barnaul\": \"hora de Rusia (Barnaul)\",
        \"Asia\\/Pyongyang\": \"hora de Corea (Piongyang)\",
        \"Etc\\/UTC\": \"hora universal coordinada\",
        \"Europe\\/Astrakhan\": \"hora de Moscú (Astrakhan)\",
        \"Europe\\/Kirov\": \"hora de Rusia (Kirov)\",
        \"Europe\\/Ulyanovsk\": \"hora de Moscú (Ulyanovsk)\",
        \"Indian\\/Chagos\": \"hora del Océano Índico (Chagos)\",
        \"Indian\\/Christmas\": \"hora de la isla de Navidad\",
        \"Pacific\\/Enderbury\": \"hora de las islas Fénix (Enderbury)\",
        \"Pacific\\/Guam\": \"hora de Chamorro (Guam)\",
        \"Pacific\\/Honolulu\": \"hora de Hawái-Aleutianas (Honolulu)\",
        \"Pacific\\/Marquesas\": \"hora de las islas Marquesas\",
        \"Pacific\\/Saipan\": \"hora de Chamorro (Saipán)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/es_US.json";
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
        \"America\\/Rio_Branco\": \"Hora de Acre (Rio Branco)\",
        \"Asia\\/Almaty\": \"hora de Kazajistán oriental (Almatý)\",
        \"Asia\\/Barnaul\": \"hora de Rusia (Barnaul)\",
        \"Asia\\/Pyongyang\": \"hora de Corea (Piongyang)\",
        \"Etc\\/UTC\": \"hora universal coordinada\",
        \"Europe\\/Astrakhan\": \"hora de Moscú (Astrakhan)\",
        \"Europe\\/Kirov\": \"hora de Rusia (Kirov)\",
        \"Europe\\/Ulyanovsk\": \"hora de Moscú (Ulyanovsk)\",
        \"Indian\\/Chagos\": \"hora del Océano Índico (Chagos)\",
        \"Indian\\/Christmas\": \"hora de la isla de Navidad\",
        \"Pacific\\/Enderbury\": \"hora de las islas Fénix (Enderbury)\",
        \"Pacific\\/Guam\": \"hora de Chamorro (Guam)\",
        \"Pacific\\/Honolulu\": \"hora de Hawái-Aleutianas (Honolulu)\",
        \"Pacific\\/Marquesas\": \"hora de las islas Marquesas\",
        \"Pacific\\/Saipan\": \"hora de Chamorro (Saipán)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/es_US.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/es_US.json");
    }
}
