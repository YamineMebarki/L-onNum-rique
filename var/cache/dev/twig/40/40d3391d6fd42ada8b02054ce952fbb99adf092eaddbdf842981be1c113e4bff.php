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

/* vendor/symfony/intl/Resources/data/timezones/en_AU.json */
class __TwigTemplate_ca74939d6d6274db42b4363aa8705cb819fdf60d09a85c28fe418155fbb4387a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/en_AU.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/en_AU.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Africa\\/Addis_Ababa\": \"Eastern Africa Time (Addis Ababa)\",
        \"Africa\\/Asmera\": \"Eastern Africa Time (Asmara)\",
        \"Africa\\/Dar_es_Salaam\": \"Eastern Africa Time (Dar es Salaam)\",
        \"Africa\\/Djibouti\": \"Eastern Africa Time (Djibouti)\",
        \"Africa\\/Juba\": \"Eastern Africa Time (Juba)\",
        \"Africa\\/Kampala\": \"Eastern Africa Time (Kampala)\",
        \"Africa\\/Mogadishu\": \"Eastern Africa Time (Mogadishu)\",
        \"Africa\\/Nairobi\": \"Eastern Africa Time (Nairobi)\",
        \"Antarctica\\/Casey\": \"Australian Western Time (Casey)\",
        \"Asia\\/Aden\": \"Arabia Time (Aden)\",
        \"Asia\\/Baghdad\": \"Arabia Time (Baghdad)\",
        \"Asia\\/Bahrain\": \"Arabia Time (Bahrain)\",
        \"Asia\\/Kuwait\": \"Arabia Time (Kuwait)\",
        \"Asia\\/Pyongyang\": \"Korea Time (Pyongyang)\",
        \"Asia\\/Qatar\": \"Arabia Time (Qatar)\",
        \"Asia\\/Rangoon\": \"Myanmar Time (Rangoon)\",
        \"Asia\\/Riyadh\": \"Arabia Time (Riyadh)\",
        \"Asia\\/Seoul\": \"Korea Time (Seoul)\",
        \"Australia\\/Adelaide\": \"Australian Central Time (Adelaide)\",
        \"Australia\\/Brisbane\": \"Australian Eastern Time (Brisbane)\",
        \"Australia\\/Broken_Hill\": \"Australian Central Time (Broken Hill)\",
        \"Australia\\/Currie\": \"Australian Eastern Time (Currie)\",
        \"Australia\\/Darwin\": \"Australian Central Time (Darwin)\",
        \"Australia\\/Hobart\": \"Australian Eastern Time (Hobart)\",
        \"Australia\\/Lindeman\": \"Australian Eastern Time (Lindeman)\",
        \"Australia\\/Melbourne\": \"Australian Eastern Time (Melbourne)\",
        \"Australia\\/Perth\": \"Australian Western Time (Perth)\",
        \"Australia\\/Sydney\": \"Australian Eastern Time (Sydney)\",
        \"Indian\\/Antananarivo\": \"Eastern Africa Time (Antananarivo)\",
        \"Indian\\/Comoro\": \"Eastern Africa Time (Comoro)\",
        \"Indian\\/Mayotte\": \"Eastern Africa Time (Mayotte)\",
        \"Pacific\\/Rarotonga\": \"Cook Island Time (Rarotonga)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/en_AU.json";
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
        \"Africa\\/Addis_Ababa\": \"Eastern Africa Time (Addis Ababa)\",
        \"Africa\\/Asmera\": \"Eastern Africa Time (Asmara)\",
        \"Africa\\/Dar_es_Salaam\": \"Eastern Africa Time (Dar es Salaam)\",
        \"Africa\\/Djibouti\": \"Eastern Africa Time (Djibouti)\",
        \"Africa\\/Juba\": \"Eastern Africa Time (Juba)\",
        \"Africa\\/Kampala\": \"Eastern Africa Time (Kampala)\",
        \"Africa\\/Mogadishu\": \"Eastern Africa Time (Mogadishu)\",
        \"Africa\\/Nairobi\": \"Eastern Africa Time (Nairobi)\",
        \"Antarctica\\/Casey\": \"Australian Western Time (Casey)\",
        \"Asia\\/Aden\": \"Arabia Time (Aden)\",
        \"Asia\\/Baghdad\": \"Arabia Time (Baghdad)\",
        \"Asia\\/Bahrain\": \"Arabia Time (Bahrain)\",
        \"Asia\\/Kuwait\": \"Arabia Time (Kuwait)\",
        \"Asia\\/Pyongyang\": \"Korea Time (Pyongyang)\",
        \"Asia\\/Qatar\": \"Arabia Time (Qatar)\",
        \"Asia\\/Rangoon\": \"Myanmar Time (Rangoon)\",
        \"Asia\\/Riyadh\": \"Arabia Time (Riyadh)\",
        \"Asia\\/Seoul\": \"Korea Time (Seoul)\",
        \"Australia\\/Adelaide\": \"Australian Central Time (Adelaide)\",
        \"Australia\\/Brisbane\": \"Australian Eastern Time (Brisbane)\",
        \"Australia\\/Broken_Hill\": \"Australian Central Time (Broken Hill)\",
        \"Australia\\/Currie\": \"Australian Eastern Time (Currie)\",
        \"Australia\\/Darwin\": \"Australian Central Time (Darwin)\",
        \"Australia\\/Hobart\": \"Australian Eastern Time (Hobart)\",
        \"Australia\\/Lindeman\": \"Australian Eastern Time (Lindeman)\",
        \"Australia\\/Melbourne\": \"Australian Eastern Time (Melbourne)\",
        \"Australia\\/Perth\": \"Australian Western Time (Perth)\",
        \"Australia\\/Sydney\": \"Australian Eastern Time (Sydney)\",
        \"Indian\\/Antananarivo\": \"Eastern Africa Time (Antananarivo)\",
        \"Indian\\/Comoro\": \"Eastern Africa Time (Comoro)\",
        \"Indian\\/Mayotte\": \"Eastern Africa Time (Mayotte)\",
        \"Pacific\\/Rarotonga\": \"Cook Island Time (Rarotonga)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/en_AU.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/en_AU.json");
    }
}
