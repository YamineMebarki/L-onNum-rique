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

/* vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json */
class __TwigTemplate_8be602e6f7e838d474084336fe62a2a3b07f95337b83259eb4e31565c7e7e8cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"BY\": \"Bjelorusija\",
        \"CG\": \"Kongo\",
        \"CZ\": \"Češka Republika\",
        \"DE\": \"Njemačka\",
        \"KN\": \"Sveti Kits i Nevis\",
        \"PM\": \"Sveti Pjer i Mikelon\",
        \"RE\": \"Reunion\",
        \"UM\": \"Manja udaljena ostrva SAD\",
        \"VC\": \"Sveti Vinsent i Grenadini\",
        \"VG\": \"Britanska Djevičanska Ostrva\",
        \"VI\": \"Američka Djevičanska Ostrva\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json";
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
        \"BY\": \"Bjelorusija\",
        \"CG\": \"Kongo\",
        \"CZ\": \"Češka Republika\",
        \"DE\": \"Njemačka\",
        \"KN\": \"Sveti Kits i Nevis\",
        \"PM\": \"Sveti Pjer i Mikelon\",
        \"RE\": \"Reunion\",
        \"UM\": \"Manja udaljena ostrva SAD\",
        \"VC\": \"Sveti Vinsent i Grenadini\",
        \"VG\": \"Britanska Djevičanska Ostrva\",
        \"VI\": \"Američka Djevičanska Ostrva\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/sr_Latn_ME.json");
    }
}
