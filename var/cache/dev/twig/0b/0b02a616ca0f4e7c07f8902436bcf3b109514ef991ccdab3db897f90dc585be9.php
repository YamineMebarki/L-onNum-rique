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

/* vendor/symfony/intl/Resources/data/locales/es_419.json */
class __TwigTemplate_eb2fa74213e8ee32b90c07157cc4d7ac947f40796c578965ab3e20dce04d12bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/es_419.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/es_419.json"));

        // line 1
        echo "{
    \"Names\": {
        \"az_Latn\": \"azerbaiyano (latín)\",
        \"az_Latn_AZ\": \"azerbaiyano (latín, Azerbaiyán)\",
        \"bs_BA\": \"bosnio (Bosnia-Herzegovina)\",
        \"bs_Cyrl_BA\": \"bosnio (cirílico, Bosnia-Herzegovina)\",
        \"bs_Latn\": \"bosnio (latín)\",
        \"bs_Latn_BA\": \"bosnio (latín, Bosnia-Herzegovina)\",
        \"en_GG\": \"inglés (Guernesey)\",
        \"en_UM\": \"inglés (Islas Ultramarinas de EE.UU.)\",
        \"eu\": \"vasco\",
        \"eu_ES\": \"vasco (España)\",
        \"ff_Latn\": \"fula (latín)\",
        \"ff_Latn_BF\": \"fula (latín, Burkina Faso)\",
        \"ff_Latn_CM\": \"fula (latín, Camerún)\",
        \"ff_Latn_GH\": \"fula (latín, Ghana)\",
        \"ff_Latn_GM\": \"fula (latín, Gambia)\",
        \"ff_Latn_GN\": \"fula (latín, Guinea)\",
        \"ff_Latn_GW\": \"fula (latín, Guinea-Bisáu)\",
        \"ff_Latn_LR\": \"fula (latín, Liberia)\",
        \"ff_Latn_MR\": \"fula (latín, Mauritania)\",
        \"ff_Latn_NE\": \"fula (latín, Níger)\",
        \"ff_Latn_NG\": \"fula (latín, Nigeria)\",
        \"ff_Latn_SL\": \"fula (latín, Sierra Leona)\",
        \"ff_Latn_SN\": \"fula (latín, Senegal)\",
        \"fr_CG\": \"francés (República del Congo)\",
        \"fr_CI\": \"francés (Costa de Marfil)\",
        \"gu\": \"gujarati\",
        \"gu_IN\": \"gujarati (India)\",
        \"hr_BA\": \"croata (Bosnia-Herzegovina)\",
        \"ln_CG\": \"lingala (República del Congo)\",
        \"lo\": \"laosiano\",
        \"lo_LA\": \"laosiano (Laos)\",
        \"pa\": \"panyabí\",
        \"pa_Arab\": \"panyabí (árabe)\",
        \"pa_Arab_PK\": \"panyabí (árabe, Pakistán)\",
        \"pa_Guru\": \"panyabí (gurmuji)\",
        \"pa_Guru_IN\": \"panyabí (gurmuji, India)\",
        \"pa_IN\": \"panyabí (India)\",
        \"pa_PK\": \"panyabí (Pakistán)\",
        \"rm\": \"retorrománico\",
        \"rm_CH\": \"retorrománico (Suiza)\",
        \"sh_BA\": \"serbocroata (Bosnia-Herzegovina)\",
        \"sr_BA\": \"serbio (Bosnia-Herzegovina)\",
        \"sr_Cyrl_BA\": \"serbio (cirílico, Bosnia-Herzegovina)\",
        \"sr_Latn\": \"serbio (latín)\",
        \"sr_Latn_BA\": \"serbio (latín, Bosnia-Herzegovina)\",
        \"sr_Latn_ME\": \"serbio (latín, Montenegro)\",
        \"sr_Latn_RS\": \"serbio (latín, Serbia)\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"swahili (República Democrática del Congo)\",
        \"sw_KE\": \"swahili (Kenia)\",
        \"sw_TZ\": \"swahili (Tanzania)\",
        \"sw_UG\": \"swahili (Uganda)\",
        \"uz_Latn\": \"uzbeko (latín)\",
        \"uz_Latn_UZ\": \"uzbeko (latín, Uzbekistán)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/es_419.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"az_Latn\": \"azerbaiyano (latín)\",
        \"az_Latn_AZ\": \"azerbaiyano (latín, Azerbaiyán)\",
        \"bs_BA\": \"bosnio (Bosnia-Herzegovina)\",
        \"bs_Cyrl_BA\": \"bosnio (cirílico, Bosnia-Herzegovina)\",
        \"bs_Latn\": \"bosnio (latín)\",
        \"bs_Latn_BA\": \"bosnio (latín, Bosnia-Herzegovina)\",
        \"en_GG\": \"inglés (Guernesey)\",
        \"en_UM\": \"inglés (Islas Ultramarinas de EE.UU.)\",
        \"eu\": \"vasco\",
        \"eu_ES\": \"vasco (España)\",
        \"ff_Latn\": \"fula (latín)\",
        \"ff_Latn_BF\": \"fula (latín, Burkina Faso)\",
        \"ff_Latn_CM\": \"fula (latín, Camerún)\",
        \"ff_Latn_GH\": \"fula (latín, Ghana)\",
        \"ff_Latn_GM\": \"fula (latín, Gambia)\",
        \"ff_Latn_GN\": \"fula (latín, Guinea)\",
        \"ff_Latn_GW\": \"fula (latín, Guinea-Bisáu)\",
        \"ff_Latn_LR\": \"fula (latín, Liberia)\",
        \"ff_Latn_MR\": \"fula (latín, Mauritania)\",
        \"ff_Latn_NE\": \"fula (latín, Níger)\",
        \"ff_Latn_NG\": \"fula (latín, Nigeria)\",
        \"ff_Latn_SL\": \"fula (latín, Sierra Leona)\",
        \"ff_Latn_SN\": \"fula (latín, Senegal)\",
        \"fr_CG\": \"francés (República del Congo)\",
        \"fr_CI\": \"francés (Costa de Marfil)\",
        \"gu\": \"gujarati\",
        \"gu_IN\": \"gujarati (India)\",
        \"hr_BA\": \"croata (Bosnia-Herzegovina)\",
        \"ln_CG\": \"lingala (República del Congo)\",
        \"lo\": \"laosiano\",
        \"lo_LA\": \"laosiano (Laos)\",
        \"pa\": \"panyabí\",
        \"pa_Arab\": \"panyabí (árabe)\",
        \"pa_Arab_PK\": \"panyabí (árabe, Pakistán)\",
        \"pa_Guru\": \"panyabí (gurmuji)\",
        \"pa_Guru_IN\": \"panyabí (gurmuji, India)\",
        \"pa_IN\": \"panyabí (India)\",
        \"pa_PK\": \"panyabí (Pakistán)\",
        \"rm\": \"retorrománico\",
        \"rm_CH\": \"retorrománico (Suiza)\",
        \"sh_BA\": \"serbocroata (Bosnia-Herzegovina)\",
        \"sr_BA\": \"serbio (Bosnia-Herzegovina)\",
        \"sr_Cyrl_BA\": \"serbio (cirílico, Bosnia-Herzegovina)\",
        \"sr_Latn\": \"serbio (latín)\",
        \"sr_Latn_BA\": \"serbio (latín, Bosnia-Herzegovina)\",
        \"sr_Latn_ME\": \"serbio (latín, Montenegro)\",
        \"sr_Latn_RS\": \"serbio (latín, Serbia)\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"swahili (República Democrática del Congo)\",
        \"sw_KE\": \"swahili (Kenia)\",
        \"sw_TZ\": \"swahili (Tanzania)\",
        \"sw_UG\": \"swahili (Uganda)\",
        \"uz_Latn\": \"uzbeko (latín)\",
        \"uz_Latn_UZ\": \"uzbeko (latín, Uzbekistán)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/es_419.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/es_419.json");
    }
}
