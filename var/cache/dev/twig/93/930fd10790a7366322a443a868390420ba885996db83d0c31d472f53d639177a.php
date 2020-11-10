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

/* vendor/symfony/intl/Resources/data/languages/es_MX.json */
class __TwigTemplate_a6440a7dd409338607eb29a2eea9c8ba600051f99761db9e999513a89be8f893 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_MX.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_MX.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"acehnés\",
        \"ar_001\": \"árabe estándar moderno\",
        \"arp\": \"arapaho\",
        \"bas\": \"basa\",
        \"bax\": \"bamun\",
        \"bho\": \"bhoshpuri\",
        \"bla\": \"siksika\",
        \"bua\": \"buriat\",
        \"de_AT\": \"alemán austriaco\",
        \"dum\": \"neerlandés medieval\",
        \"enm\": \"inglés medieval\",
        \"eu\": \"euskera\",
        \"frm\": \"francés medieval\",
        \"gan\": \"gan (China)\",
        \"gmh\": \"alemán de la alta edad media\",
        \"grc\": \"griego antiguo\",
        \"hak\": \"kejia (China)\",
        \"hil\": \"hiligainón\",
        \"hsn\": \"xiang (China)\",
        \"inh\": \"ingusetio\",
        \"kbd\": \"kabardiano\",
        \"krc\": \"karachái bálkaro\",
        \"kum\": \"cumuco\",
        \"lo\": \"lao\",
        \"lus\": \"lushai\",
        \"mga\": \"irlandés medieval\",
        \"nan\": \"min nan (Chino)\",
        \"nl_BE\": \"flamenco\",
        \"nr\": \"ndebele meridional\",
        \"nso\": \"sotho septentrional\",
        \"pa\": \"punyabí\",
        \"pcm\": \"pcm\",
        \"shu\": \"árabe chadiano\",
        \"ss\": \"siswati\",
        \"sw\": \"suajili\",
        \"sw_CD\": \"suajili del Congo\",
        \"syr\": \"siriaco\",
        \"tet\": \"tetún\",
        \"tn\": \"setswana\",
        \"tyv\": \"tuviniano\",
        \"wuu\": \"wuu\",
        \"xal\": \"kalmyk\",
        \"zgh\": \"tamazight marroquí estándar\",
        \"zh_Hans\": \"chino simplificado\",
        \"zh_Hant\": \"chino tradicional\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/es_MX.json";
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
        \"ace\": \"acehnés\",
        \"ar_001\": \"árabe estándar moderno\",
        \"arp\": \"arapaho\",
        \"bas\": \"basa\",
        \"bax\": \"bamun\",
        \"bho\": \"bhoshpuri\",
        \"bla\": \"siksika\",
        \"bua\": \"buriat\",
        \"de_AT\": \"alemán austriaco\",
        \"dum\": \"neerlandés medieval\",
        \"enm\": \"inglés medieval\",
        \"eu\": \"euskera\",
        \"frm\": \"francés medieval\",
        \"gan\": \"gan (China)\",
        \"gmh\": \"alemán de la alta edad media\",
        \"grc\": \"griego antiguo\",
        \"hak\": \"kejia (China)\",
        \"hil\": \"hiligainón\",
        \"hsn\": \"xiang (China)\",
        \"inh\": \"ingusetio\",
        \"kbd\": \"kabardiano\",
        \"krc\": \"karachái bálkaro\",
        \"kum\": \"cumuco\",
        \"lo\": \"lao\",
        \"lus\": \"lushai\",
        \"mga\": \"irlandés medieval\",
        \"nan\": \"min nan (Chino)\",
        \"nl_BE\": \"flamenco\",
        \"nr\": \"ndebele meridional\",
        \"nso\": \"sotho septentrional\",
        \"pa\": \"punyabí\",
        \"pcm\": \"pcm\",
        \"shu\": \"árabe chadiano\",
        \"ss\": \"siswati\",
        \"sw\": \"suajili\",
        \"sw_CD\": \"suajili del Congo\",
        \"syr\": \"siriaco\",
        \"tet\": \"tetún\",
        \"tn\": \"setswana\",
        \"tyv\": \"tuviniano\",
        \"wuu\": \"wuu\",
        \"xal\": \"kalmyk\",
        \"zgh\": \"tamazight marroquí estándar\",
        \"zh_Hans\": \"chino simplificado\",
        \"zh_Hant\": \"chino tradicional\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/es_MX.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/es_MX.json");
    }
}
