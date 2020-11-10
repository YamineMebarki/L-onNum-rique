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

/* vendor/symfony/intl/Resources/data/languages/lg.json */
class __TwigTemplate_c8df35ce4a116d1b77f28eecceb00cadf24db9bbd9dc96bf80806e1494764c74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/lg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/lg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ak\": \"Lu-akaani\",
        \"am\": \"Lu-amhariki\",
        \"ar\": \"Luwarabu\",
        \"be\": \"Lubelarusi\",
        \"bg\": \"Lubulugariya\",
        \"bn\": \"Lubengali\",
        \"cs\": \"Luceeke\",
        \"de\": \"Ludaaki\",
        \"el\": \"Lugereeki\\/Luyonaani\",
        \"en\": \"Lungereza\",
        \"es\": \"Lusipanya\",
        \"fa\": \"Luperusi\",
        \"fr\": \"Lufalansa\",
        \"ha\": \"Luhawuza\",
        \"hi\": \"Luhindu\",
        \"hu\": \"Luhangare\",
        \"id\": \"Luyindonezya\",
        \"ig\": \"Luyibo\",
        \"it\": \"Luyitale\",
        \"ja\": \"Lujapani\",
        \"jv\": \"Lunnajjava\",
        \"km\": \"Lukme\",
        \"ko\": \"Lukoreya\",
        \"lg\": \"Luganda\",
        \"ms\": \"Lumalayi\",
        \"my\": \"Lubbama\",
        \"ne\": \"Lunepali\",
        \"nl\": \"Luholandi\",
        \"pa\": \"Lupunjabi\",
        \"pl\": \"Lupolandi\",
        \"pt\": \"Lupotugiizi\",
        \"ro\": \"Lulomaniya\",
        \"ru\": \"Lulasa\",
        \"rw\": \"Lunarwanda\",
        \"so\": \"Lusomaliya\",
        \"sv\": \"Luswideni\",
        \"ta\": \"Lutamiiru\",
        \"th\": \"Luttaayi\",
        \"tr\": \"Lutake\",
        \"uk\": \"Luyukurayine\",
        \"ur\": \"Lu-urudu\",
        \"vi\": \"Luvyetinaamu\",
        \"yo\": \"Luyoruba\",
        \"zh\": \"Lucayina\",
        \"zu\": \"Luzzulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/lg.json";
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
        \"ak\": \"Lu-akaani\",
        \"am\": \"Lu-amhariki\",
        \"ar\": \"Luwarabu\",
        \"be\": \"Lubelarusi\",
        \"bg\": \"Lubulugariya\",
        \"bn\": \"Lubengali\",
        \"cs\": \"Luceeke\",
        \"de\": \"Ludaaki\",
        \"el\": \"Lugereeki\\/Luyonaani\",
        \"en\": \"Lungereza\",
        \"es\": \"Lusipanya\",
        \"fa\": \"Luperusi\",
        \"fr\": \"Lufalansa\",
        \"ha\": \"Luhawuza\",
        \"hi\": \"Luhindu\",
        \"hu\": \"Luhangare\",
        \"id\": \"Luyindonezya\",
        \"ig\": \"Luyibo\",
        \"it\": \"Luyitale\",
        \"ja\": \"Lujapani\",
        \"jv\": \"Lunnajjava\",
        \"km\": \"Lukme\",
        \"ko\": \"Lukoreya\",
        \"lg\": \"Luganda\",
        \"ms\": \"Lumalayi\",
        \"my\": \"Lubbama\",
        \"ne\": \"Lunepali\",
        \"nl\": \"Luholandi\",
        \"pa\": \"Lupunjabi\",
        \"pl\": \"Lupolandi\",
        \"pt\": \"Lupotugiizi\",
        \"ro\": \"Lulomaniya\",
        \"ru\": \"Lulasa\",
        \"rw\": \"Lunarwanda\",
        \"so\": \"Lusomaliya\",
        \"sv\": \"Luswideni\",
        \"ta\": \"Lutamiiru\",
        \"th\": \"Luttaayi\",
        \"tr\": \"Lutake\",
        \"uk\": \"Luyukurayine\",
        \"ur\": \"Lu-urudu\",
        \"vi\": \"Luvyetinaamu\",
        \"yo\": \"Luyoruba\",
        \"zh\": \"Lucayina\",
        \"zu\": \"Luzzulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/lg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/lg.json");
    }
}
