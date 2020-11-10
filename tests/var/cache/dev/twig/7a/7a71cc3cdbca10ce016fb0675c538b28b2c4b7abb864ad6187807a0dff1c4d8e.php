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

/* vendor/symfony/intl/Resources/data/locales/se_FI.json */
class __TwigTemplate_b5429300ce1bd1ffcd00de5976ea71228cafef4ed118ffeabbc631e7bf2d6aa1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/se_FI.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/se_FI.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ar_SD\": \"arábagiella (Sudan)\",
        \"ar_TD\": \"arábagiella (Chad)\",
        \"be\": \"vilgesruoššagiella\",
        \"be_BY\": \"vilgesruoššagiella (Vilges-Ruošša)\",
        \"bn\": \"bengalagiella\",
        \"bn_BD\": \"bengalagiella (Bangladesh)\",
        \"bn_IN\": \"bengalagiella (India)\",
        \"bs_BA\": \"bosniagiella (Bosnia ja Hercegovina)\",
        \"bs_Cyrl_BA\": \"bosniagiella (kyrillalaš, Bosnia ja Hercegovina)\",
        \"bs_Latn_BA\": \"bosniagiella (láhtenaš, Bosnia ja Hercegovina)\",
        \"en_SD\": \"eaŋgalsgiella (Sudan)\",
        \"fr_TD\": \"fránskkagiella (Chad)\",
        \"hr_BA\": \"kroátiagiella (Bosnia ja Hercegovina)\",
        \"hy\": \"armenagiella\",
        \"hy_AM\": \"armenagiella (Armenia)\",
        \"kk\": \"kazakhgiella\",
        \"kk_KZ\": \"kazakhgiella (Kasakstan)\",
        \"km\": \"kambožagiella\",
        \"km_KH\": \"kambožagiella (Kamboža)\",
        \"ne\": \"nepalagiella\",
        \"ne_IN\": \"nepalagiella (India)\",
        \"ne_NP\": \"nepalagiella (Nepal)\",
        \"pa\": \"panjabagiella\",
        \"pa_Arab\": \"panjabagiella (arábalaš)\",
        \"pa_Arab_PK\": \"panjabagiella (arábalaš, Pakistan)\",
        \"pa_IN\": \"panjabagiella (India)\",
        \"pa_PK\": \"panjabagiella (Pakistan)\",
        \"sh_BA\": \"serbokroatiagiella (Bosnia ja Hercegovina)\",
        \"sr_BA\": \"serbiagiella (Bosnia ja Hercegovina)\",
        \"sr_Cyrl_BA\": \"serbiagiella (kyrillalaš, Bosnia ja Hercegovina)\",
        \"sr_Latn_BA\": \"serbiagiella (láhtenaš, Bosnia ja Hercegovina)\",
        \"th\": \"thaigiella\",
        \"th_TH\": \"thaigiella (Thaieana)\",
        \"vi\": \"vietnamagiella\",
        \"vi_VN\": \"vietnamagiella (Vietnam)\",
        \"zh_Hans\": \"kiinnágiella (álkes kiinnálaš)\",
        \"zh_Hans_CN\": \"kiinnágiella (álkes kiinnálaš, Kiinná)\",
        \"zh_Hans_HK\": \"kiinnágiella (álkes kiinnálaš, Hongkong)\",
        \"zh_Hans_MO\": \"kiinnágiella (álkes kiinnálaš, Makáo)\",
        \"zh_Hans_SG\": \"kiinnágiella (álkes kiinnálaš, Singapore)\",
        \"zh_Hant\": \"kiinnágiella (árbevirolaš kiinnálaš)\",
        \"zh_Hant_HK\": \"kiinnágiella (árbevirolaš kiinnálaš, Hongkong)\",
        \"zh_Hant_MO\": \"kiinnágiella (árbevirolaš kiinnálaš, Makáo)\",
        \"zh_Hant_TW\": \"kiinnágiella (árbevirolaš kiinnálaš, Taiwan)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/se_FI.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ar_SD\": \"arábagiella (Sudan)\",
        \"ar_TD\": \"arábagiella (Chad)\",
        \"be\": \"vilgesruoššagiella\",
        \"be_BY\": \"vilgesruoššagiella (Vilges-Ruošša)\",
        \"bn\": \"bengalagiella\",
        \"bn_BD\": \"bengalagiella (Bangladesh)\",
        \"bn_IN\": \"bengalagiella (India)\",
        \"bs_BA\": \"bosniagiella (Bosnia ja Hercegovina)\",
        \"bs_Cyrl_BA\": \"bosniagiella (kyrillalaš, Bosnia ja Hercegovina)\",
        \"bs_Latn_BA\": \"bosniagiella (láhtenaš, Bosnia ja Hercegovina)\",
        \"en_SD\": \"eaŋgalsgiella (Sudan)\",
        \"fr_TD\": \"fránskkagiella (Chad)\",
        \"hr_BA\": \"kroátiagiella (Bosnia ja Hercegovina)\",
        \"hy\": \"armenagiella\",
        \"hy_AM\": \"armenagiella (Armenia)\",
        \"kk\": \"kazakhgiella\",
        \"kk_KZ\": \"kazakhgiella (Kasakstan)\",
        \"km\": \"kambožagiella\",
        \"km_KH\": \"kambožagiella (Kamboža)\",
        \"ne\": \"nepalagiella\",
        \"ne_IN\": \"nepalagiella (India)\",
        \"ne_NP\": \"nepalagiella (Nepal)\",
        \"pa\": \"panjabagiella\",
        \"pa_Arab\": \"panjabagiella (arábalaš)\",
        \"pa_Arab_PK\": \"panjabagiella (arábalaš, Pakistan)\",
        \"pa_IN\": \"panjabagiella (India)\",
        \"pa_PK\": \"panjabagiella (Pakistan)\",
        \"sh_BA\": \"serbokroatiagiella (Bosnia ja Hercegovina)\",
        \"sr_BA\": \"serbiagiella (Bosnia ja Hercegovina)\",
        \"sr_Cyrl_BA\": \"serbiagiella (kyrillalaš, Bosnia ja Hercegovina)\",
        \"sr_Latn_BA\": \"serbiagiella (láhtenaš, Bosnia ja Hercegovina)\",
        \"th\": \"thaigiella\",
        \"th_TH\": \"thaigiella (Thaieana)\",
        \"vi\": \"vietnamagiella\",
        \"vi_VN\": \"vietnamagiella (Vietnam)\",
        \"zh_Hans\": \"kiinnágiella (álkes kiinnálaš)\",
        \"zh_Hans_CN\": \"kiinnágiella (álkes kiinnálaš, Kiinná)\",
        \"zh_Hans_HK\": \"kiinnágiella (álkes kiinnálaš, Hongkong)\",
        \"zh_Hans_MO\": \"kiinnágiella (álkes kiinnálaš, Makáo)\",
        \"zh_Hans_SG\": \"kiinnágiella (álkes kiinnálaš, Singapore)\",
        \"zh_Hant\": \"kiinnágiella (árbevirolaš kiinnálaš)\",
        \"zh_Hant_HK\": \"kiinnágiella (árbevirolaš kiinnálaš, Hongkong)\",
        \"zh_Hant_MO\": \"kiinnágiella (árbevirolaš kiinnálaš, Makáo)\",
        \"zh_Hant_TW\": \"kiinnágiella (árbevirolaš kiinnálaš, Taiwan)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/se_FI.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/se_FI.json");
    }
}
