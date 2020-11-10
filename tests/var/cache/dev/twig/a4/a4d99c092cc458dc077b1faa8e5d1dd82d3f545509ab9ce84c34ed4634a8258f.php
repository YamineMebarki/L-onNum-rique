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

/* vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json */
class __TwigTemplate_86ae26a6bd4f4adb9c6d39529aac85a147d8774030dc0822f08d5d4fb2215998 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json"));

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
        \"en_UM\": \"engleski (Manja udaljena ostrva SAD)\",
        \"en_VC\": \"engleski (Sveti Vinsent i Grenadini)\",
        \"en_VG\": \"engleski (Britanska Djevičanska Ostrva)\",
        \"en_VI\": \"engleski (Američka Djevičanska Ostrva)\",
        \"ff\": \"fulah\",
        \"ff_CM\": \"fulah (Kamerun)\",
        \"ff_GN\": \"fulah (Gvineja)\",
        \"ff_Latn\": \"fulah (latinica)\",
        \"ff_Latn_BF\": \"fulah (latinica, Burkina Faso)\",
        \"ff_Latn_CM\": \"fulah (latinica, Kamerun)\",
        \"ff_Latn_GH\": \"fulah (latinica, Gana)\",
        \"ff_Latn_GM\": \"fulah (latinica, Gambija)\",
        \"ff_Latn_GN\": \"fulah (latinica, Gvineja)\",
        \"ff_Latn_GW\": \"fulah (latinica, Gvineja-Bisao)\",
        \"ff_Latn_LR\": \"fulah (latinica, Liberija)\",
        \"ff_Latn_MR\": \"fulah (latinica, Mauritanija)\",
        \"ff_Latn_NE\": \"fulah (latinica, Niger)\",
        \"ff_Latn_NG\": \"fulah (latinica, Nigerija)\",
        \"ff_Latn_SL\": \"fulah (latinica, Sijera Leone)\",
        \"ff_Latn_SN\": \"fulah (latinica, Senegal)\",
        \"ff_MR\": \"fulah (Mauritanija)\",
        \"ff_SN\": \"fulah (Senegal)\",
        \"fr_CG\": \"francuski (Kongo)\",
        \"fr_PM\": \"francuski (Sveti Pjer i Mikelon)\",
        \"fr_RE\": \"francuski (Reunion)\",
        \"ln_CG\": \"lingala (Kongo)\",
        \"lo\": \"laoški\",
        \"lo_LA\": \"laoški (Laos)\",
        \"ru_BY\": \"ruski (Bjelorusija)\",
        \"xh\": \"isikosa\",
        \"xh_ZA\": \"isikosa (Južnoafrička Republika)\",
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
        return "vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json";
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
        \"en_UM\": \"engleski (Manja udaljena ostrva SAD)\",
        \"en_VC\": \"engleski (Sveti Vinsent i Grenadini)\",
        \"en_VG\": \"engleski (Britanska Djevičanska Ostrva)\",
        \"en_VI\": \"engleski (Američka Djevičanska Ostrva)\",
        \"ff\": \"fulah\",
        \"ff_CM\": \"fulah (Kamerun)\",
        \"ff_GN\": \"fulah (Gvineja)\",
        \"ff_Latn\": \"fulah (latinica)\",
        \"ff_Latn_BF\": \"fulah (latinica, Burkina Faso)\",
        \"ff_Latn_CM\": \"fulah (latinica, Kamerun)\",
        \"ff_Latn_GH\": \"fulah (latinica, Gana)\",
        \"ff_Latn_GM\": \"fulah (latinica, Gambija)\",
        \"ff_Latn_GN\": \"fulah (latinica, Gvineja)\",
        \"ff_Latn_GW\": \"fulah (latinica, Gvineja-Bisao)\",
        \"ff_Latn_LR\": \"fulah (latinica, Liberija)\",
        \"ff_Latn_MR\": \"fulah (latinica, Mauritanija)\",
        \"ff_Latn_NE\": \"fulah (latinica, Niger)\",
        \"ff_Latn_NG\": \"fulah (latinica, Nigerija)\",
        \"ff_Latn_SL\": \"fulah (latinica, Sijera Leone)\",
        \"ff_Latn_SN\": \"fulah (latinica, Senegal)\",
        \"ff_MR\": \"fulah (Mauritanija)\",
        \"ff_SN\": \"fulah (Senegal)\",
        \"fr_CG\": \"francuski (Kongo)\",
        \"fr_PM\": \"francuski (Sveti Pjer i Mikelon)\",
        \"fr_RE\": \"francuski (Reunion)\",
        \"ln_CG\": \"lingala (Kongo)\",
        \"lo\": \"laoški\",
        \"lo_LA\": \"laoški (Laos)\",
        \"ru_BY\": \"ruski (Bjelorusija)\",
        \"xh\": \"isikosa\",
        \"xh_ZA\": \"isikosa (Južnoafrička Republika)\",
        \"zu\": \"isizulu\",
        \"zu_ZA\": \"isizulu (Južnoafrička Republika)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/sr_Latn_ME.json");
    }
}
