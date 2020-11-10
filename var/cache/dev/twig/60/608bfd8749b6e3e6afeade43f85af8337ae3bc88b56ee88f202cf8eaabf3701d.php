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

/* vendor/symfony/translation/Resources/data/parents.json */
class __TwigTemplate_a1e57235c570ab2ef5b55a89704960f6ce2619e13b9c646f84d464ecfad7319a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Resources/data/parents.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Resources/data/parents.json"));

        // line 1
        echo "{
    \"az_Cyrl\": \"root\",
    \"bs_Cyrl\": \"root\",
    \"en_150\": \"en_001\",
    \"en_AG\": \"en_001\",
    \"en_AI\": \"en_001\",
    \"en_AT\": \"en_150\",
    \"en_AU\": \"en_001\",
    \"en_BB\": \"en_001\",
    \"en_BE\": \"en_150\",
    \"en_BM\": \"en_001\",
    \"en_BS\": \"en_001\",
    \"en_BW\": \"en_001\",
    \"en_BZ\": \"en_001\",
    \"en_CA\": \"en_001\",
    \"en_CC\": \"en_001\",
    \"en_CH\": \"en_150\",
    \"en_CK\": \"en_001\",
    \"en_CM\": \"en_001\",
    \"en_CX\": \"en_001\",
    \"en_CY\": \"en_001\",
    \"en_DE\": \"en_150\",
    \"en_DG\": \"en_001\",
    \"en_DK\": \"en_150\",
    \"en_DM\": \"en_001\",
    \"en_ER\": \"en_001\",
    \"en_FI\": \"en_150\",
    \"en_FJ\": \"en_001\",
    \"en_FK\": \"en_001\",
    \"en_FM\": \"en_001\",
    \"en_GB\": \"en_001\",
    \"en_GD\": \"en_001\",
    \"en_GG\": \"en_001\",
    \"en_GH\": \"en_001\",
    \"en_GI\": \"en_001\",
    \"en_GM\": \"en_001\",
    \"en_GY\": \"en_001\",
    \"en_HK\": \"en_001\",
    \"en_IE\": \"en_001\",
    \"en_IL\": \"en_001\",
    \"en_IM\": \"en_001\",
    \"en_IN\": \"en_001\",
    \"en_IO\": \"en_001\",
    \"en_JE\": \"en_001\",
    \"en_JM\": \"en_001\",
    \"en_KE\": \"en_001\",
    \"en_KI\": \"en_001\",
    \"en_KN\": \"en_001\",
    \"en_KY\": \"en_001\",
    \"en_LC\": \"en_001\",
    \"en_LR\": \"en_001\",
    \"en_LS\": \"en_001\",
    \"en_MG\": \"en_001\",
    \"en_MO\": \"en_001\",
    \"en_MS\": \"en_001\",
    \"en_MT\": \"en_001\",
    \"en_MU\": \"en_001\",
    \"en_MW\": \"en_001\",
    \"en_MY\": \"en_001\",
    \"en_NA\": \"en_001\",
    \"en_NF\": \"en_001\",
    \"en_NG\": \"en_001\",
    \"en_NL\": \"en_150\",
    \"en_NR\": \"en_001\",
    \"en_NU\": \"en_001\",
    \"en_NZ\": \"en_001\",
    \"en_PG\": \"en_001\",
    \"en_PH\": \"en_001\",
    \"en_PK\": \"en_001\",
    \"en_PN\": \"en_001\",
    \"en_PW\": \"en_001\",
    \"en_RW\": \"en_001\",
    \"en_SB\": \"en_001\",
    \"en_SC\": \"en_001\",
    \"en_SD\": \"en_001\",
    \"en_SE\": \"en_150\",
    \"en_SG\": \"en_001\",
    \"en_SH\": \"en_001\",
    \"en_SI\": \"en_150\",
    \"en_SL\": \"en_001\",
    \"en_SS\": \"en_001\",
    \"en_SX\": \"en_001\",
    \"en_SZ\": \"en_001\",
    \"en_TC\": \"en_001\",
    \"en_TK\": \"en_001\",
    \"en_TO\": \"en_001\",
    \"en_TT\": \"en_001\",
    \"en_TV\": \"en_001\",
    \"en_TZ\": \"en_001\",
    \"en_UG\": \"en_001\",
    \"en_VC\": \"en_001\",
    \"en_VG\": \"en_001\",
    \"en_VU\": \"en_001\",
    \"en_WS\": \"en_001\",
    \"en_ZA\": \"en_001\",
    \"en_ZM\": \"en_001\",
    \"en_ZW\": \"en_001\",
    \"es_AR\": \"es_419\",
    \"es_BO\": \"es_419\",
    \"es_BR\": \"es_419\",
    \"es_BZ\": \"es_419\",
    \"es_CL\": \"es_419\",
    \"es_CO\": \"es_419\",
    \"es_CR\": \"es_419\",
    \"es_CU\": \"es_419\",
    \"es_DO\": \"es_419\",
    \"es_EC\": \"es_419\",
    \"es_GT\": \"es_419\",
    \"es_HN\": \"es_419\",
    \"es_MX\": \"es_419\",
    \"es_NI\": \"es_419\",
    \"es_PA\": \"es_419\",
    \"es_PE\": \"es_419\",
    \"es_PR\": \"es_419\",
    \"es_PY\": \"es_419\",
    \"es_SV\": \"es_419\",
    \"es_US\": \"es_419\",
    \"es_UY\": \"es_419\",
    \"es_VE\": \"es_419\",
    \"pa_Arab\": \"root\",
    \"pt_AO\": \"pt_PT\",
    \"pt_CH\": \"pt_PT\",
    \"pt_CV\": \"pt_PT\",
    \"pt_GQ\": \"pt_PT\",
    \"pt_GW\": \"pt_PT\",
    \"pt_LU\": \"pt_PT\",
    \"pt_MO\": \"pt_PT\",
    \"pt_MZ\": \"pt_PT\",
    \"pt_ST\": \"pt_PT\",
    \"pt_TL\": \"pt_PT\",
    \"sr_Latn\": \"root\",
    \"uz_Arab\": \"root\",
    \"uz_Cyrl\": \"root\",
    \"zh_Hant\": \"root\",
    \"zh_Hant_MO\": \"zh_Hant_HK\"
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Resources/data/parents.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"az_Cyrl\": \"root\",
    \"bs_Cyrl\": \"root\",
    \"en_150\": \"en_001\",
    \"en_AG\": \"en_001\",
    \"en_AI\": \"en_001\",
    \"en_AT\": \"en_150\",
    \"en_AU\": \"en_001\",
    \"en_BB\": \"en_001\",
    \"en_BE\": \"en_150\",
    \"en_BM\": \"en_001\",
    \"en_BS\": \"en_001\",
    \"en_BW\": \"en_001\",
    \"en_BZ\": \"en_001\",
    \"en_CA\": \"en_001\",
    \"en_CC\": \"en_001\",
    \"en_CH\": \"en_150\",
    \"en_CK\": \"en_001\",
    \"en_CM\": \"en_001\",
    \"en_CX\": \"en_001\",
    \"en_CY\": \"en_001\",
    \"en_DE\": \"en_150\",
    \"en_DG\": \"en_001\",
    \"en_DK\": \"en_150\",
    \"en_DM\": \"en_001\",
    \"en_ER\": \"en_001\",
    \"en_FI\": \"en_150\",
    \"en_FJ\": \"en_001\",
    \"en_FK\": \"en_001\",
    \"en_FM\": \"en_001\",
    \"en_GB\": \"en_001\",
    \"en_GD\": \"en_001\",
    \"en_GG\": \"en_001\",
    \"en_GH\": \"en_001\",
    \"en_GI\": \"en_001\",
    \"en_GM\": \"en_001\",
    \"en_GY\": \"en_001\",
    \"en_HK\": \"en_001\",
    \"en_IE\": \"en_001\",
    \"en_IL\": \"en_001\",
    \"en_IM\": \"en_001\",
    \"en_IN\": \"en_001\",
    \"en_IO\": \"en_001\",
    \"en_JE\": \"en_001\",
    \"en_JM\": \"en_001\",
    \"en_KE\": \"en_001\",
    \"en_KI\": \"en_001\",
    \"en_KN\": \"en_001\",
    \"en_KY\": \"en_001\",
    \"en_LC\": \"en_001\",
    \"en_LR\": \"en_001\",
    \"en_LS\": \"en_001\",
    \"en_MG\": \"en_001\",
    \"en_MO\": \"en_001\",
    \"en_MS\": \"en_001\",
    \"en_MT\": \"en_001\",
    \"en_MU\": \"en_001\",
    \"en_MW\": \"en_001\",
    \"en_MY\": \"en_001\",
    \"en_NA\": \"en_001\",
    \"en_NF\": \"en_001\",
    \"en_NG\": \"en_001\",
    \"en_NL\": \"en_150\",
    \"en_NR\": \"en_001\",
    \"en_NU\": \"en_001\",
    \"en_NZ\": \"en_001\",
    \"en_PG\": \"en_001\",
    \"en_PH\": \"en_001\",
    \"en_PK\": \"en_001\",
    \"en_PN\": \"en_001\",
    \"en_PW\": \"en_001\",
    \"en_RW\": \"en_001\",
    \"en_SB\": \"en_001\",
    \"en_SC\": \"en_001\",
    \"en_SD\": \"en_001\",
    \"en_SE\": \"en_150\",
    \"en_SG\": \"en_001\",
    \"en_SH\": \"en_001\",
    \"en_SI\": \"en_150\",
    \"en_SL\": \"en_001\",
    \"en_SS\": \"en_001\",
    \"en_SX\": \"en_001\",
    \"en_SZ\": \"en_001\",
    \"en_TC\": \"en_001\",
    \"en_TK\": \"en_001\",
    \"en_TO\": \"en_001\",
    \"en_TT\": \"en_001\",
    \"en_TV\": \"en_001\",
    \"en_TZ\": \"en_001\",
    \"en_UG\": \"en_001\",
    \"en_VC\": \"en_001\",
    \"en_VG\": \"en_001\",
    \"en_VU\": \"en_001\",
    \"en_WS\": \"en_001\",
    \"en_ZA\": \"en_001\",
    \"en_ZM\": \"en_001\",
    \"en_ZW\": \"en_001\",
    \"es_AR\": \"es_419\",
    \"es_BO\": \"es_419\",
    \"es_BR\": \"es_419\",
    \"es_BZ\": \"es_419\",
    \"es_CL\": \"es_419\",
    \"es_CO\": \"es_419\",
    \"es_CR\": \"es_419\",
    \"es_CU\": \"es_419\",
    \"es_DO\": \"es_419\",
    \"es_EC\": \"es_419\",
    \"es_GT\": \"es_419\",
    \"es_HN\": \"es_419\",
    \"es_MX\": \"es_419\",
    \"es_NI\": \"es_419\",
    \"es_PA\": \"es_419\",
    \"es_PE\": \"es_419\",
    \"es_PR\": \"es_419\",
    \"es_PY\": \"es_419\",
    \"es_SV\": \"es_419\",
    \"es_US\": \"es_419\",
    \"es_UY\": \"es_419\",
    \"es_VE\": \"es_419\",
    \"pa_Arab\": \"root\",
    \"pt_AO\": \"pt_PT\",
    \"pt_CH\": \"pt_PT\",
    \"pt_CV\": \"pt_PT\",
    \"pt_GQ\": \"pt_PT\",
    \"pt_GW\": \"pt_PT\",
    \"pt_LU\": \"pt_PT\",
    \"pt_MO\": \"pt_PT\",
    \"pt_MZ\": \"pt_PT\",
    \"pt_ST\": \"pt_PT\",
    \"pt_TL\": \"pt_PT\",
    \"sr_Latn\": \"root\",
    \"uz_Arab\": \"root\",
    \"uz_Cyrl\": \"root\",
    \"zh_Hant\": \"root\",
    \"zh_Hant_MO\": \"zh_Hant_HK\"
}
", "vendor/symfony/translation/Resources/data/parents.json", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Resources/data/parents.json");
    }
}
