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

/* vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json */
class __TwigTemplate_c1081f31cebc4918745589ac1f58dbfba7459f25adae684a140c4e2436476795 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json"));

        // line 1
        echo "{
    \"Names\": {
        \"be\": \"bjeloruski\",
        \"be_BY\": \"bjeloruski (Bjelorusija)\",
        \"bm\": \"bamanankan\",
        \"bm_ML\": \"bamanankan (Mali)\",
        \"bn\": \"bangla\",
        \"bn_BD\": \"bangla (Bangladeš)\",
        \"bn_IN\": \"bangla (Indija)\",
        \"cs_CZ\": \"češki (Češka Republika)\",
        \"de_DE\": \"nemački (Njemačka)\",
        \"en_DE\": \"engleski (Njemačka)\",
        \"en_KN\": \"engleski (Sveti Kits i Nevis)\",
        \"en_MO\": \"engleski (SAR Makao)\",
        \"en_UM\": \"engleski (Manja udaljena ostrva SAD)\",
        \"en_VC\": \"engleski (Sveti Vinsent i Grenadini)\",
        \"en_VG\": \"engleski (Britanska Djevičanska Ostrva)\",
        \"en_VI\": \"engleski (Američka Djevičanska Ostrva)\",
        \"fr_CG\": \"francuski (Kongo)\",
        \"fr_PM\": \"francuski (Sveti Pjer i Mikelon)\",
        \"fr_RE\": \"francuski (Reunion)\",
        \"ln_CG\": \"lingala (Kongo)\",
        \"lo\": \"laoški\",
        \"lo_LA\": \"laoški (Laos)\",
        \"pt_CV\": \"portugalski (Kabo Verde)\",
        \"pt_MO\": \"portugalski (SAR Makao)\",
        \"ru_BY\": \"ruski (Bjelorusija)\",
        \"si\": \"sinhalski\",
        \"si_LK\": \"sinhalski (Šri Lanka)\",
        \"xh\": \"isikosa\",
        \"xh_ZA\": \"isikosa (Južnoafrička Republika)\",
        \"zh_Hans_MO\": \"kineski (pojednostavljeno kinesko pismo, SAR Makao)\",
        \"zh_Hant_MO\": \"kineski (tradicionalno kinesko pismo, SAR Makao)\",
        \"zh_MO\": \"kineski (SAR Makao)\",
        \"zu\": \"isizulu\",
        \"zu_ZA\": \"isizulu (Južnoafrička Republika)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"be\": \"bjeloruski\",
        \"be_BY\": \"bjeloruski (Bjelorusija)\",
        \"bm\": \"bamanankan\",
        \"bm_ML\": \"bamanankan (Mali)\",
        \"bn\": \"bangla\",
        \"bn_BD\": \"bangla (Bangladeš)\",
        \"bn_IN\": \"bangla (Indija)\",
        \"cs_CZ\": \"češki (Češka Republika)\",
        \"de_DE\": \"nemački (Njemačka)\",
        \"en_DE\": \"engleski (Njemačka)\",
        \"en_KN\": \"engleski (Sveti Kits i Nevis)\",
        \"en_MO\": \"engleski (SAR Makao)\",
        \"en_UM\": \"engleski (Manja udaljena ostrva SAD)\",
        \"en_VC\": \"engleski (Sveti Vinsent i Grenadini)\",
        \"en_VG\": \"engleski (Britanska Djevičanska Ostrva)\",
        \"en_VI\": \"engleski (Američka Djevičanska Ostrva)\",
        \"fr_CG\": \"francuski (Kongo)\",
        \"fr_PM\": \"francuski (Sveti Pjer i Mikelon)\",
        \"fr_RE\": \"francuski (Reunion)\",
        \"ln_CG\": \"lingala (Kongo)\",
        \"lo\": \"laoški\",
        \"lo_LA\": \"laoški (Laos)\",
        \"pt_CV\": \"portugalski (Kabo Verde)\",
        \"pt_MO\": \"portugalski (SAR Makao)\",
        \"ru_BY\": \"ruski (Bjelorusija)\",
        \"si\": \"sinhalski\",
        \"si_LK\": \"sinhalski (Šri Lanka)\",
        \"xh\": \"isikosa\",
        \"xh_ZA\": \"isikosa (Južnoafrička Republika)\",
        \"zh_Hans_MO\": \"kineski (pojednostavljeno kinesko pismo, SAR Makao)\",
        \"zh_Hant_MO\": \"kineski (tradicionalno kinesko pismo, SAR Makao)\",
        \"zh_MO\": \"kineski (SAR Makao)\",
        \"zu\": \"isizulu\",
        \"zu_ZA\": \"isizulu (Južnoafrička Republika)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/sr_Latn_BA.json");
    }
}
