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

/* vendor/symfony/intl/Resources/data/languages/fr_CA.json */
class __TwigTemplate_6356fe3f65af6834031dbc88f1009084d5c4942f58749b269a9cd6442c57db9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/fr_CA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/fr_CA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ady\": \"adygué\",
        \"ang\": \"vieil anglais\",
        \"ar_001\": \"arabe standard moderne\",
        \"asa\": \"assou\",
        \"az\": \"azerbaïdjanais\",
        \"bbj\": \"ghomala\",
        \"bez\": \"bena\",
        \"bik\": \"bicol\",
        \"byn\": \"bilen\",
        \"byv\": \"medumba\",
        \"chg\": \"tchagatay\",
        \"chn\": \"chinook\",
        \"ckb\": \"kurde central\",
        \"cr\": \"cri\",
        \"de_AT\": \"allemand autrichien\",
        \"de_CH\": \"allemand suisse\",
        \"den\": \"slave\",
        \"dgr\": \"tlicho\",
        \"en_AU\": \"anglais australien\",
        \"en_CA\": \"anglais canadien\",
        \"en_GB\": \"anglais britannique\",
        \"en_US\": \"anglais américain\",
        \"esu\": \"yupik central\",
        \"ewo\": \"ewondo\",
        \"fr_CA\": \"français canadien\",
        \"fr_CH\": \"français suisse\",
        \"frc\": \"cajun\",
        \"frp\": \"franco-provençal\",
        \"gbz\": \"dari\",
        \"goh\": \"vieux haut-allemand\",
        \"gu\": \"gujarati\",
        \"ii\": \"yi de Sichuan\",
        \"ken\": \"kenyang\",
        \"kg\": \"kongo\",
        \"kl\": \"kalaallisut\",
        \"ks\": \"kashmiri\",
        \"ksb\": \"chambala\",
        \"ksh\": \"kölsch\",
        \"liv\": \"live\",
        \"lu\": \"luba-katanga\",
        \"lzh\": \"chinois classique\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mr\": \"marathe\",
        \"mwr\": \"marwari\",
        \"mwv\": \"mentawai\",
        \"nds_NL\": \"bas saxon\",
        \"njo\": \"ao naga\",
        \"nl_BE\": \"flamand\",
        \"nmg\": \"kwasio\",
        \"nwc\": \"newari classique\",
        \"nyn\": \"nkole\",
        \"pau\": \"palauan\",
        \"pdc\": \"allemand de Pennsylvanie\",
        \"pdt\": \"bas allemand mennonite\",
        \"peo\": \"vieux perse\",
        \"pfl\": \"palatin\",
        \"pro\": \"ancien occitan\",
        \"pt_BR\": \"portugais brésilien\",
        \"pt_PT\": \"portugais européen\",
        \"quc\": \"k’iche’\",
        \"rar\": \"rarotonga\",
        \"ro_MD\": \"moldave\",
        \"sbp\": \"sangu\",
        \"sdh\": \"kurde méridional\",
        \"sei\": \"seri\",
        \"sga\": \"vieil irlandais\",
        \"sly\": \"selayar\",
        \"smn\": \"sami d’Inari\",
        \"stq\": \"frison de Saterland\",
        \"sus\": \"sosso\",
        \"sw_CD\": \"swahili congolais\",
        \"tru\": \"turoyo\",
        \"tzm\": \"tamazight\",
        \"zh_Hans\": \"chinois simplifié\",
        \"zh_Hant\": \"chinois traditionnel\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/fr_CA.json";
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
        \"ady\": \"adygué\",
        \"ang\": \"vieil anglais\",
        \"ar_001\": \"arabe standard moderne\",
        \"asa\": \"assou\",
        \"az\": \"azerbaïdjanais\",
        \"bbj\": \"ghomala\",
        \"bez\": \"bena\",
        \"bik\": \"bicol\",
        \"byn\": \"bilen\",
        \"byv\": \"medumba\",
        \"chg\": \"tchagatay\",
        \"chn\": \"chinook\",
        \"ckb\": \"kurde central\",
        \"cr\": \"cri\",
        \"de_AT\": \"allemand autrichien\",
        \"de_CH\": \"allemand suisse\",
        \"den\": \"slave\",
        \"dgr\": \"tlicho\",
        \"en_AU\": \"anglais australien\",
        \"en_CA\": \"anglais canadien\",
        \"en_GB\": \"anglais britannique\",
        \"en_US\": \"anglais américain\",
        \"esu\": \"yupik central\",
        \"ewo\": \"ewondo\",
        \"fr_CA\": \"français canadien\",
        \"fr_CH\": \"français suisse\",
        \"frc\": \"cajun\",
        \"frp\": \"franco-provençal\",
        \"gbz\": \"dari\",
        \"goh\": \"vieux haut-allemand\",
        \"gu\": \"gujarati\",
        \"ii\": \"yi de Sichuan\",
        \"ken\": \"kenyang\",
        \"kg\": \"kongo\",
        \"kl\": \"kalaallisut\",
        \"ks\": \"kashmiri\",
        \"ksb\": \"chambala\",
        \"ksh\": \"kölsch\",
        \"liv\": \"live\",
        \"lu\": \"luba-katanga\",
        \"lzh\": \"chinois classique\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mr\": \"marathe\",
        \"mwr\": \"marwari\",
        \"mwv\": \"mentawai\",
        \"nds_NL\": \"bas saxon\",
        \"njo\": \"ao naga\",
        \"nl_BE\": \"flamand\",
        \"nmg\": \"kwasio\",
        \"nwc\": \"newari classique\",
        \"nyn\": \"nkole\",
        \"pau\": \"palauan\",
        \"pdc\": \"allemand de Pennsylvanie\",
        \"pdt\": \"bas allemand mennonite\",
        \"peo\": \"vieux perse\",
        \"pfl\": \"palatin\",
        \"pro\": \"ancien occitan\",
        \"pt_BR\": \"portugais brésilien\",
        \"pt_PT\": \"portugais européen\",
        \"quc\": \"k’iche’\",
        \"rar\": \"rarotonga\",
        \"ro_MD\": \"moldave\",
        \"sbp\": \"sangu\",
        \"sdh\": \"kurde méridional\",
        \"sei\": \"seri\",
        \"sga\": \"vieil irlandais\",
        \"sly\": \"selayar\",
        \"smn\": \"sami d’Inari\",
        \"stq\": \"frison de Saterland\",
        \"sus\": \"sosso\",
        \"sw_CD\": \"swahili congolais\",
        \"tru\": \"turoyo\",
        \"tzm\": \"tamazight\",
        \"zh_Hans\": \"chinois simplifié\",
        \"zh_Hant\": \"chinois traditionnel\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/fr_CA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/fr_CA.json");
    }
}
