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

/* vendor/symfony/intl/Resources/data/languages/de_CH.json */
class __TwigTemplate_86b8fa21263d3d6bfbe88e76f2c3056a6946be6f22d8285ce19a785491e3fe57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/de_CH.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/de_CH.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"Aceh-Sprache\",
        \"ach\": \"Acholi-Sprache\",
        \"ar_001\": \"Modernes Hocharabisch\",
        \"ars\": \"Nadschd-Arabisch\",
        \"bas\": \"Basaa-Sprache\",
        \"be\": \"Weissrussisch\",
        \"bik\": \"Bikol-Sprache\",
        \"bin\": \"Bini-Sprache\",
        \"chb\": \"Chibcha-Sprache\",
        \"de_CH\": \"Schweizer Hochdeutsch\",
        \"din\": \"Dinka-Sprache\",
        \"fan\": \"Pangwe-Sprache\",
        \"gba\": \"Gbaya-Sprache\",
        \"kmb\": \"Kimbundu-Sprache\",
        \"mus\": \"Muskogee-Sprache\",
        \"nl_BE\": \"Flämisch\",
        \"prg\": \"Altpreussisch\",
        \"zh_Hans\": \"Chinesisch (vereinfacht)\",
        \"zh_Hant\": \"Chinesisch (traditionell)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/de_CH.json";
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
        \"ace\": \"Aceh-Sprache\",
        \"ach\": \"Acholi-Sprache\",
        \"ar_001\": \"Modernes Hocharabisch\",
        \"ars\": \"Nadschd-Arabisch\",
        \"bas\": \"Basaa-Sprache\",
        \"be\": \"Weissrussisch\",
        \"bik\": \"Bikol-Sprache\",
        \"bin\": \"Bini-Sprache\",
        \"chb\": \"Chibcha-Sprache\",
        \"de_CH\": \"Schweizer Hochdeutsch\",
        \"din\": \"Dinka-Sprache\",
        \"fan\": \"Pangwe-Sprache\",
        \"gba\": \"Gbaya-Sprache\",
        \"kmb\": \"Kimbundu-Sprache\",
        \"mus\": \"Muskogee-Sprache\",
        \"nl_BE\": \"Flämisch\",
        \"prg\": \"Altpreussisch\",
        \"zh_Hans\": \"Chinesisch (vereinfacht)\",
        \"zh_Hant\": \"Chinesisch (traditionell)\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/de_CH.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/de_CH.json");
    }
}
