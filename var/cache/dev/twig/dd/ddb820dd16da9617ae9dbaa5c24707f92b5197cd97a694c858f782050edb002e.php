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

/* vendor/symfony/intl/Resources/data/languages/se_FI.json */
class __TwigTemplate_da5de70cc086397fe32c0b36e25ba7fa087f6a6f3cfe71fd55123e0036f8d865 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/se_FI.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/se_FI.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"ačehgiella\",
        \"ar_001\": \"standárda arábagiella\",
        \"be\": \"vilgesruoššagiella\",
        \"bn\": \"bengalagiella\",
        \"de_AT\": \"nuortariikkalaš duiskkagiella\",
        \"de_CH\": \"šveicalaš duiskkagiella\",
        \"en_AU\": \"austrálialaš eaŋgalsgiella\",
        \"en_CA\": \"kanádalaš eaŋgalsgiella\",
        \"en_GB\": \"brihttalaš eaŋgalsgiella\",
        \"en_US\": \"amerihkálaš eaŋgalsgiella\",
        \"es_419\": \"latiinna-amerihkalaš spánskkagiella\",
        \"es_ES\": \"espánjalaš spánskkagiella\",
        \"es_MX\": \"meksikolaš spánskkagiella\",
        \"fj\": \"fižigiella\",
        \"fr_CA\": \"kanádalaš fránskkagiella\",
        \"fr_CH\": \"šveicalaš fránskkagiella\",
        \"hy\": \"armenagiella\",
        \"kk\": \"kazakhgiella\",
        \"km\": \"kambožagiella\",
        \"ne\": \"nepalagiella\",
        \"nl_BE\": \"belgialaš hollánddagiella\",
        \"pa\": \"panjabagiella\",
        \"pt_BR\": \"brasilialaš portugálagiella\",
        \"pt_PT\": \"portugálalaš portugálagiella\",
        \"ro_MD\": \"moldávialaš romániagiella\",
        \"swb\": \"komoragiella\",
        \"th\": \"thaigiella\",
        \"vi\": \"vietnamagiella\",
        \"zh_Hans\": \"álkes kiinnágiella\",
        \"zh_Hant\": \"árbevirolaš kiinnágiella\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/se_FI.json";
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
        \"ace\": \"ačehgiella\",
        \"ar_001\": \"standárda arábagiella\",
        \"be\": \"vilgesruoššagiella\",
        \"bn\": \"bengalagiella\",
        \"de_AT\": \"nuortariikkalaš duiskkagiella\",
        \"de_CH\": \"šveicalaš duiskkagiella\",
        \"en_AU\": \"austrálialaš eaŋgalsgiella\",
        \"en_CA\": \"kanádalaš eaŋgalsgiella\",
        \"en_GB\": \"brihttalaš eaŋgalsgiella\",
        \"en_US\": \"amerihkálaš eaŋgalsgiella\",
        \"es_419\": \"latiinna-amerihkalaš spánskkagiella\",
        \"es_ES\": \"espánjalaš spánskkagiella\",
        \"es_MX\": \"meksikolaš spánskkagiella\",
        \"fj\": \"fižigiella\",
        \"fr_CA\": \"kanádalaš fránskkagiella\",
        \"fr_CH\": \"šveicalaš fránskkagiella\",
        \"hy\": \"armenagiella\",
        \"kk\": \"kazakhgiella\",
        \"km\": \"kambožagiella\",
        \"ne\": \"nepalagiella\",
        \"nl_BE\": \"belgialaš hollánddagiella\",
        \"pa\": \"panjabagiella\",
        \"pt_BR\": \"brasilialaš portugálagiella\",
        \"pt_PT\": \"portugálalaš portugálagiella\",
        \"ro_MD\": \"moldávialaš romániagiella\",
        \"swb\": \"komoragiella\",
        \"th\": \"thaigiella\",
        \"vi\": \"vietnamagiella\",
        \"zh_Hans\": \"álkes kiinnágiella\",
        \"zh_Hant\": \"árbevirolaš kiinnágiella\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/se_FI.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/se_FI.json");
    }
}
