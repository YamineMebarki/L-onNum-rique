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

/* vendor/symfony/intl/Resources/data/languages/lu.json */
class __TwigTemplate_9af1ea883ea04974163876befa9f4fd11fcf88fdc59c4e96b9e463c93209d100 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/lu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/lu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Liakan\",
        \"am\": \"Liamhariki\",
        \"ar\": \"Arabi\",
        \"be\": \"Belarusi\",
        \"bg\": \"Bulegari\",
        \"bn\": \"Bengali\",
        \"cs\": \"Tsheki\",
        \"de\": \"Lizelumani\",
        \"el\": \"Giliki\",
        \"en\": \"Lingelesa\",
        \"es\": \"Lihispania\",
        \"fa\": \"Mpepajemi\",
        \"fr\": \"Mfwàlànsa\",
        \"ha\": \"Hausa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Hongili\",
        \"id\": \"Lindonezia\",
        \"ig\": \"Igbo\",
        \"it\": \"Litali\",
        \"ja\": \"Liyapani\",
        \"jv\": \"Java\",
        \"ko\": \"Likoreya\",
        \"lu\": \"Tshiluba\",
        \"ms\": \"Limalezia\",
        \"ne\": \"nepali\",
        \"nl\": \"olandi\",
        \"pa\": \"Lipunjabi\",
        \"pl\": \"Mpoloni\",
        \"pt\": \"Mputulugɛsi\",
        \"ro\": \"Liromani\",
        \"ru\": \"Lirisi\",
        \"rw\": \"kinyarwanda\",
        \"so\": \"Lisomali\",
        \"sv\": \"Lisuwidi\",
        \"ta\": \"Mtamuili\",
        \"th\": \"Ntailandi\",
        \"tr\": \"Ntuluki\",
        \"uk\": \"Nkrani\",
        \"ur\": \"Urdu\",
        \"vi\": \"Liviyetinamu\",
        \"yo\": \"Nyoruba\",
        \"zh\": \"shinɛ\",
        \"zu\": \"Nzulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/lu.json";
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
        \"ak\": \"Liakan\",
        \"am\": \"Liamhariki\",
        \"ar\": \"Arabi\",
        \"be\": \"Belarusi\",
        \"bg\": \"Bulegari\",
        \"bn\": \"Bengali\",
        \"cs\": \"Tsheki\",
        \"de\": \"Lizelumani\",
        \"el\": \"Giliki\",
        \"en\": \"Lingelesa\",
        \"es\": \"Lihispania\",
        \"fa\": \"Mpepajemi\",
        \"fr\": \"Mfwàlànsa\",
        \"ha\": \"Hausa\",
        \"hi\": \"Hindi\",
        \"hu\": \"Hongili\",
        \"id\": \"Lindonezia\",
        \"ig\": \"Igbo\",
        \"it\": \"Litali\",
        \"ja\": \"Liyapani\",
        \"jv\": \"Java\",
        \"ko\": \"Likoreya\",
        \"lu\": \"Tshiluba\",
        \"ms\": \"Limalezia\",
        \"ne\": \"nepali\",
        \"nl\": \"olandi\",
        \"pa\": \"Lipunjabi\",
        \"pl\": \"Mpoloni\",
        \"pt\": \"Mputulugɛsi\",
        \"ro\": \"Liromani\",
        \"ru\": \"Lirisi\",
        \"rw\": \"kinyarwanda\",
        \"so\": \"Lisomali\",
        \"sv\": \"Lisuwidi\",
        \"ta\": \"Mtamuili\",
        \"th\": \"Ntailandi\",
        \"tr\": \"Ntuluki\",
        \"uk\": \"Nkrani\",
        \"ur\": \"Urdu\",
        \"vi\": \"Liviyetinamu\",
        \"yo\": \"Nyoruba\",
        \"zh\": \"shinɛ\",
        \"zu\": \"Nzulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/lu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/lu.json");
    }
}
