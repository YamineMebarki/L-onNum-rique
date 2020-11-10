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

/* vendor/symfony/intl/Resources/data/scripts/ku.json */
class __TwigTemplate_a18002e612c64c016cf2c7f8fefd23cf7a7a46ac5d0f8deff124b764661f0344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ku.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ku.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"erebî\",
        \"Armn\": \"ermenî\",
        \"Beng\": \"bengalî\",
        \"Cyrl\": \"kirîlî\",
        \"Deva\": \"devanagarî\",
        \"Geor\": \"gurcî\",
        \"Grek\": \"yewnanî\",
        \"Khmr\": \"ximêrî\",
        \"Latn\": \"latînî\",
        \"Mong\": \"mongolî\",
        \"Tibt\": \"tîbetî\",
        \"Zsym\": \"sembol\",
        \"Zxxx\": \"ne nivîsandî\",
        \"Zyyy\": \"hevpar\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ku.json";
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
        \"Arab\": \"erebî\",
        \"Armn\": \"ermenî\",
        \"Beng\": \"bengalî\",
        \"Cyrl\": \"kirîlî\",
        \"Deva\": \"devanagarî\",
        \"Geor\": \"gurcî\",
        \"Grek\": \"yewnanî\",
        \"Khmr\": \"ximêrî\",
        \"Latn\": \"latînî\",
        \"Mong\": \"mongolî\",
        \"Tibt\": \"tîbetî\",
        \"Zsym\": \"sembol\",
        \"Zxxx\": \"ne nivîsandî\",
        \"Zyyy\": \"hevpar\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ku.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ku.json");
    }
}
