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

/* vendor/symfony/intl/Resources/data/languages/ln.json */
class __TwigTemplate_32ce3953e2eba359c99f189d3341e4e1fc7734ff58d8cab14bd190440083ea9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ln.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ln.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"akan\",
        \"am\": \"liamariki\",
        \"ar\": \"lialabo\",
        \"be\": \"libyelorisí\",
        \"bg\": \"libiligali\",
        \"bn\": \"libengali\",
        \"cs\": \"litshekɛ\",
        \"de\": \"lialemá\",
        \"el\": \"ligeleki\",
        \"en\": \"lingɛlɛ́sa\",
        \"es\": \"lisipanye\",
        \"fa\": \"lipelésanɛ\",
        \"fr\": \"lifalansɛ́\",
        \"ha\": \"hausa\",
        \"hi\": \"lihindi\",
        \"hu\": \"liongili\",
        \"id\": \"lindonezi\",
        \"ig\": \"igbo\",
        \"it\": \"litaliano\",
        \"ja\": \"lizapɔ\",
        \"jv\": \"lizava\",
        \"km\": \"likambodza\",
        \"ko\": \"likoreya\",
        \"ln\": \"lingála\",
        \"ms\": \"limalezi\",
        \"my\": \"libilimá\",
        \"ne\": \"linepalɛ\",
        \"nl\": \"lifalamá\",
        \"pa\": \"lipendzabi\",
        \"pl\": \"lipolonɛ\",
        \"pt\": \"lipulutugɛ́si\",
        \"ro\": \"liromani\",
        \"ru\": \"lirisí\",
        \"rw\": \"kinyarwanda\",
        \"so\": \"lisomali\",
        \"sv\": \"lisuwedɛ\",
        \"ta\": \"litamuli\",
        \"th\": \"litaye\",
        \"tr\": \"litiliki\",
        \"uk\": \"likrɛni\",
        \"ur\": \"liurdu\",
        \"vi\": \"liviyetinámi\",
        \"yo\": \"yoruba\",
        \"zh\": \"lisinwa\",
        \"zu\": \"zulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ln.json";
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
        \"ak\": \"akan\",
        \"am\": \"liamariki\",
        \"ar\": \"lialabo\",
        \"be\": \"libyelorisí\",
        \"bg\": \"libiligali\",
        \"bn\": \"libengali\",
        \"cs\": \"litshekɛ\",
        \"de\": \"lialemá\",
        \"el\": \"ligeleki\",
        \"en\": \"lingɛlɛ́sa\",
        \"es\": \"lisipanye\",
        \"fa\": \"lipelésanɛ\",
        \"fr\": \"lifalansɛ́\",
        \"ha\": \"hausa\",
        \"hi\": \"lihindi\",
        \"hu\": \"liongili\",
        \"id\": \"lindonezi\",
        \"ig\": \"igbo\",
        \"it\": \"litaliano\",
        \"ja\": \"lizapɔ\",
        \"jv\": \"lizava\",
        \"km\": \"likambodza\",
        \"ko\": \"likoreya\",
        \"ln\": \"lingála\",
        \"ms\": \"limalezi\",
        \"my\": \"libilimá\",
        \"ne\": \"linepalɛ\",
        \"nl\": \"lifalamá\",
        \"pa\": \"lipendzabi\",
        \"pl\": \"lipolonɛ\",
        \"pt\": \"lipulutugɛ́si\",
        \"ro\": \"liromani\",
        \"ru\": \"lirisí\",
        \"rw\": \"kinyarwanda\",
        \"so\": \"lisomali\",
        \"sv\": \"lisuwedɛ\",
        \"ta\": \"litamuli\",
        \"th\": \"litaye\",
        \"tr\": \"litiliki\",
        \"uk\": \"likrɛni\",
        \"ur\": \"liurdu\",
        \"vi\": \"liviyetinámi\",
        \"yo\": \"yoruba\",
        \"zh\": \"lisinwa\",
        \"zu\": \"zulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ln.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ln.json");
    }
}
