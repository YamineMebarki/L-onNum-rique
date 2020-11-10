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

/* vendor/symfony/intl/Resources/data/languages/es_AR.json */
class __TwigTemplate_eff6d4e2eb5c068b3b045bbb7705b51541ec5fdbb7092ec58cc087ef7251ec96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_AR.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/es_AR.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"acehnés\",
        \"arp\": \"arapaho\",
        \"bho\": \"bhojpuri\",
        \"eu\": \"euskera\",
        \"grc\": \"griego antiguo\",
        \"lo\": \"lao\",
        \"nso\": \"sotho septentrional\",
        \"pa\": \"punyabí\",
        \"ss\": \"siswati\",
        \"sw\": \"suajili\",
        \"sw_CD\": \"suajili del Congo\",
        \"tn\": \"setswana\",
        \"wo\": \"wolof\",
        \"zgh\": \"tamazight marroquí estándar\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/es_AR.json";
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
        \"arp\": \"arapaho\",
        \"bho\": \"bhojpuri\",
        \"eu\": \"euskera\",
        \"grc\": \"griego antiguo\",
        \"lo\": \"lao\",
        \"nso\": \"sotho septentrional\",
        \"pa\": \"punyabí\",
        \"ss\": \"siswati\",
        \"sw\": \"suajili\",
        \"sw_CD\": \"suajili del Congo\",
        \"tn\": \"setswana\",
        \"wo\": \"wolof\",
        \"zgh\": \"tamazight marroquí estándar\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/es_AR.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/es_AR.json");
    }
}
