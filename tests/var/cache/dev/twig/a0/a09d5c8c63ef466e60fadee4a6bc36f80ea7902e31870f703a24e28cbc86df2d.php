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

/* vendor/symfony/intl/Resources/data/languages/ak.json */
class __TwigTemplate_dceae03e64952f07dbf7668182538f6dd3954d05201c3f53ba392f27f80f77d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ak.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ak.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Akan\",
        \"am\": \"Amarik\",
        \"ar\": \"Arabik\",
        \"be\": \"Belarus kasa\",
        \"bg\": \"Bɔlgeria kasa\",
        \"bn\": \"Bengali kasa\",
        \"cs\": \"Kyɛk kasa\",
        \"de\": \"Gyaaman\",
        \"el\": \"Greek kasa\",
        \"en\": \"Borɔfo\",
        \"es\": \"Spain kasa\",
        \"fa\": \"Pɛɛhyia kasa\",
        \"fr\": \"Frɛnkye\",
        \"ha\": \"Hausa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Hangri kasa\",
        \"id\": \"Indonihyia kasa\",
        \"ig\": \"Igbo\",
        \"it\": \"Italy kasa\",
        \"ja\": \"Gyapan kasa\",
        \"jv\": \"Gyabanis kasa\",
        \"km\": \"Kambodia kasa\",
        \"ko\": \"Korea kasa\",
        \"ms\": \"Malay kasa\",
        \"my\": \"Bɛɛmis kasa\",
        \"ne\": \"Nɛpal kasa\",
        \"nl\": \"Dɛɛkye\",
        \"pa\": \"Pungyabi kasa\",
        \"pl\": \"Pɔland kasa\",
        \"pt\": \"Pɔɔtugal kasa\",
        \"ro\": \"Romenia kasa\",
        \"ru\": \"Rahyia kasa\",
        \"rw\": \"Rewanda kasa\",
        \"so\": \"Somalia kasa\",
        \"sv\": \"Sweden kasa\",
        \"ta\": \"Tamil kasa\",
        \"th\": \"Taeland kasa\",
        \"tr\": \"Tɛɛki kasa\",
        \"uk\": \"Ukren kasa\",
        \"ur\": \"Urdu kasa\",
        \"vi\": \"Viɛtnam kasa\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Kyaena kasa\",
        \"zu\": \"Zulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ak.json";
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
        \"ak\": \"Akan\",
        \"am\": \"Amarik\",
        \"ar\": \"Arabik\",
        \"be\": \"Belarus kasa\",
        \"bg\": \"Bɔlgeria kasa\",
        \"bn\": \"Bengali kasa\",
        \"cs\": \"Kyɛk kasa\",
        \"de\": \"Gyaaman\",
        \"el\": \"Greek kasa\",
        \"en\": \"Borɔfo\",
        \"es\": \"Spain kasa\",
        \"fa\": \"Pɛɛhyia kasa\",
        \"fr\": \"Frɛnkye\",
        \"ha\": \"Hausa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Hangri kasa\",
        \"id\": \"Indonihyia kasa\",
        \"ig\": \"Igbo\",
        \"it\": \"Italy kasa\",
        \"ja\": \"Gyapan kasa\",
        \"jv\": \"Gyabanis kasa\",
        \"km\": \"Kambodia kasa\",
        \"ko\": \"Korea kasa\",
        \"ms\": \"Malay kasa\",
        \"my\": \"Bɛɛmis kasa\",
        \"ne\": \"Nɛpal kasa\",
        \"nl\": \"Dɛɛkye\",
        \"pa\": \"Pungyabi kasa\",
        \"pl\": \"Pɔland kasa\",
        \"pt\": \"Pɔɔtugal kasa\",
        \"ro\": \"Romenia kasa\",
        \"ru\": \"Rahyia kasa\",
        \"rw\": \"Rewanda kasa\",
        \"so\": \"Somalia kasa\",
        \"sv\": \"Sweden kasa\",
        \"ta\": \"Tamil kasa\",
        \"th\": \"Taeland kasa\",
        \"tr\": \"Tɛɛki kasa\",
        \"uk\": \"Ukren kasa\",
        \"ur\": \"Urdu kasa\",
        \"vi\": \"Viɛtnam kasa\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Kyaena kasa\",
        \"zu\": \"Zulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ak.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ak.json");
    }
}
