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

/* vendor/symfony/intl/Resources/data/languages/ki.json */
class __TwigTemplate_ad4d5ba9ab5ceccb4da9f85760aa09bc4d16b6006bf1b0685662d0740c7cd9b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ki.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ki.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Kiakan\",
        \"am\": \"Kiamhari\",
        \"ar\": \"Kĩarabu\",
        \"be\": \"Kibelarusi\",
        \"bg\": \"Kibulgaria\",
        \"bn\": \"Kibangla\",
        \"cs\": \"Kichecki\",
        \"de\": \"Kĩnjeremani\",
        \"el\": \"Kigiriki\",
        \"en\": \"Gĩthungũ\",
        \"es\": \"Kihispania\",
        \"fa\": \"Kiajemi\",
        \"fr\": \"Kĩbaranja\",
        \"ha\": \"Kihausa\",
        \"hi\": \"Kĩhĩndĩ\",
        \"hu\": \"Kihungari\",
        \"id\": \"Kiindonesia\",
        \"ig\": \"Kiigbo\",
        \"it\": \"Kĩtaliano\",
        \"ja\": \"Kĩnjabani\",
        \"jv\": \"Kijava\",
        \"ki\": \"Gikuyu\",
        \"km\": \"Kikambodia\",
        \"ko\": \"Kikorea\",
        \"ms\": \"Kimalesia\",
        \"my\": \"Kiburma\",
        \"ne\": \"Kinepali\",
        \"nl\": \"Kiholanzi\",
        \"pa\": \"Kipunjabi\",
        \"pl\": \"Kipolandi\",
        \"pt\": \"Kireno\",
        \"ro\": \"Kiromania\",
        \"ru\": \"Kĩracia\",
        \"rw\": \"Kinyarwanda\",
        \"so\": \"Kĩcumarĩ\",
        \"sv\": \"Kiswidi\",
        \"ta\": \"Kitamil\",
        \"th\": \"Kitailandi\",
        \"tr\": \"Kituruki\",
        \"uk\": \"Kiukrania\",
        \"ur\": \"Kiurdu\",
        \"vi\": \"Kivietinamu\",
        \"yo\": \"Kiyoruba\",
        \"zh\": \"Kĩcaina\",
        \"zu\": \"Kizulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ki.json";
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
        \"ak\": \"Kiakan\",
        \"am\": \"Kiamhari\",
        \"ar\": \"Kĩarabu\",
        \"be\": \"Kibelarusi\",
        \"bg\": \"Kibulgaria\",
        \"bn\": \"Kibangla\",
        \"cs\": \"Kichecki\",
        \"de\": \"Kĩnjeremani\",
        \"el\": \"Kigiriki\",
        \"en\": \"Gĩthungũ\",
        \"es\": \"Kihispania\",
        \"fa\": \"Kiajemi\",
        \"fr\": \"Kĩbaranja\",
        \"ha\": \"Kihausa\",
        \"hi\": \"Kĩhĩndĩ\",
        \"hu\": \"Kihungari\",
        \"id\": \"Kiindonesia\",
        \"ig\": \"Kiigbo\",
        \"it\": \"Kĩtaliano\",
        \"ja\": \"Kĩnjabani\",
        \"jv\": \"Kijava\",
        \"ki\": \"Gikuyu\",
        \"km\": \"Kikambodia\",
        \"ko\": \"Kikorea\",
        \"ms\": \"Kimalesia\",
        \"my\": \"Kiburma\",
        \"ne\": \"Kinepali\",
        \"nl\": \"Kiholanzi\",
        \"pa\": \"Kipunjabi\",
        \"pl\": \"Kipolandi\",
        \"pt\": \"Kireno\",
        \"ro\": \"Kiromania\",
        \"ru\": \"Kĩracia\",
        \"rw\": \"Kinyarwanda\",
        \"so\": \"Kĩcumarĩ\",
        \"sv\": \"Kiswidi\",
        \"ta\": \"Kitamil\",
        \"th\": \"Kitailandi\",
        \"tr\": \"Kituruki\",
        \"uk\": \"Kiukrania\",
        \"ur\": \"Kiurdu\",
        \"vi\": \"Kivietinamu\",
        \"yo\": \"Kiyoruba\",
        \"zh\": \"Kĩcaina\",
        \"zu\": \"Kizulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ki.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ki.json");
    }
}
