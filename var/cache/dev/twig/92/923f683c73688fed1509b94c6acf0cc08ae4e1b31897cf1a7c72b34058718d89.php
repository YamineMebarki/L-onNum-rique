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

/* vendor/symfony/intl/Resources/data/regions/fr_CA.json */
class __TwigTemplate_ee045a975e1bc3a9db3038ac74b0c5a0a568eddfc293236e6ad54dc4fa4cb1de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fr_CA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fr_CA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AX\": \"îles d’Åland\",
        \"BN\": \"Brunei\",
        \"BV\": \"île Bouvet\",
        \"BY\": \"Bélarus\",
        \"CC\": \"îles Cocos (Keeling)\",
        \"CK\": \"îles Cook\",
        \"CX\": \"île Christmas\",
        \"FK\": \"îles Malouines\",
        \"FM\": \"Micronésie\",
        \"FO\": \"îles Féroé\",
        \"HM\": \"îles Heard et McDonald\",
        \"IM\": \"île de Man\",
        \"IO\": \"territoire britannique de l’océan Indien\",
        \"MF\": \"Saint-Martin (France)\",
        \"MM\": \"Myanmar\",
        \"MP\": \"Mariannes du Nord\",
        \"NF\": \"île Norfolk\",
        \"PN\": \"îles Pitcairn\",
        \"RE\": \"la Réunion\",
        \"SX\": \"Saint-Martin (Pays-Bas)\",
        \"TL\": \"Timor-Leste\",
        \"UM\": \"îles mineures éloignées des États-Unis\",
        \"VA\": \"Cité du Vatican\",
        \"VC\": \"Saint-Vincent-et-les Grenadines\",
        \"VG\": \"îles Vierges britanniques\",
        \"VI\": \"îles Vierges américaines\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/fr_CA.json";
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
        \"AX\": \"îles d’Åland\",
        \"BN\": \"Brunei\",
        \"BV\": \"île Bouvet\",
        \"BY\": \"Bélarus\",
        \"CC\": \"îles Cocos (Keeling)\",
        \"CK\": \"îles Cook\",
        \"CX\": \"île Christmas\",
        \"FK\": \"îles Malouines\",
        \"FM\": \"Micronésie\",
        \"FO\": \"îles Féroé\",
        \"HM\": \"îles Heard et McDonald\",
        \"IM\": \"île de Man\",
        \"IO\": \"territoire britannique de l’océan Indien\",
        \"MF\": \"Saint-Martin (France)\",
        \"MM\": \"Myanmar\",
        \"MP\": \"Mariannes du Nord\",
        \"NF\": \"île Norfolk\",
        \"PN\": \"îles Pitcairn\",
        \"RE\": \"la Réunion\",
        \"SX\": \"Saint-Martin (Pays-Bas)\",
        \"TL\": \"Timor-Leste\",
        \"UM\": \"îles mineures éloignées des États-Unis\",
        \"VA\": \"Cité du Vatican\",
        \"VC\": \"Saint-Vincent-et-les Grenadines\",
        \"VG\": \"îles Vierges britanniques\",
        \"VI\": \"îles Vierges américaines\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/fr_CA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/fr_CA.json");
    }
}
