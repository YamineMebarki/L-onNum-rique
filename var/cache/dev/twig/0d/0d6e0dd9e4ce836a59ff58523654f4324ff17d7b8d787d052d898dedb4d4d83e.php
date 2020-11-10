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

/* vendor/symfony/intl/Resources/data/languages/pt_PT.json */
class __TwigTemplate_31afe7e8e34913c58dc017bc6b14af9efd61e18a96a141009d2f41bd810501dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/pt_PT.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/pt_PT.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"africanês\",
        \"alt\": \"altai do sul\",
        \"ang\": \"inglês antigo\",
        \"ar_001\": \"árabe moderno padrão\",
        \"arn\": \"mapuche\",
        \"ars\": \"árabe do Négede\",
        \"av\": \"avaric\",
        \"bax\": \"bamun\",
        \"bbj\": \"ghomala\",
        \"bn\": \"bengalês\",
        \"bua\": \"buriat\",
        \"ccp\": \"changma\",
        \"chk\": \"chuquês\",
        \"chn\": \"jargão chinook\",
        \"chr\": \"cherokee\",
        \"chy\": \"cheyenne\",
        \"ckb\": \"sorani curdo\",
        \"co\": \"córsico\",
        \"crs\": \"francês crioulo seselwa\",
        \"cs\": \"checo\",
        \"cv\": \"chuvash\",
        \"de_AT\": \"alemão austríaco\",
        \"de_CH\": \"alto alemão suíço\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egy\": \"egípcio clássico\",
        \"en_AU\": \"inglês australiano\",
        \"en_CA\": \"inglês canadiano\",
        \"en_GB\": \"inglês britânico\",
        \"en_US\": \"inglês americano\",
        \"es_419\": \"espanhol latino-americano\",
        \"es_ES\": \"espanhol europeu\",
        \"es_MX\": \"espanhol mexicano\",
        \"et\": \"estónio\",
        \"fon\": \"fon\",
        \"fr_CA\": \"francês canadiano\",
        \"fr_CH\": \"francês suíço\",
        \"fro\": \"francês antigo\",
        \"frs\": \"frísio oriental\",
        \"fy\": \"frísico ocidental\",
        \"gez\": \"geʼez\",
        \"goh\": \"alemão alto antigo\",
        \"grc\": \"grego clássico\",
        \"gsw\": \"alemão suíço\",
        \"ha\": \"haúça\",
        \"hi\": \"hindi\",
        \"hy\": \"arménio\",
        \"kbd\": \"cabardiano\",
        \"kl\": \"gronelandês\",
        \"krc\": \"carachaio-bálcaro\",
        \"lez\": \"lezghiano\",
        \"lg\": \"ganda\",
        \"lou\": \"crioulo de Louisiana\",
        \"lrc\": \"luri do norte\",
        \"mak\": \"makassarês\",
        \"mk\": \"macedónio\",
        \"moh\": \"mohawk\",
        \"mr\": \"marata\",
        \"nb\": \"norueguês bokmål\",
        \"nds\": \"baixo-alemão\",
        \"nds_NL\": \"baixo-saxão\",
        \"nl\": \"neerlandês\",
        \"nl_BE\": \"flamengo\",
        \"nn\": \"norueguês nynorsk\",
        \"non\": \"nórdico antigo\",
        \"oc\": \"occitano\",
        \"or\": \"oriya\",
        \"os\": \"ossético\",
        \"pag\": \"língua pangasinesa\",
        \"pam\": \"pampango\",
        \"peo\": \"persa antigo\",
        \"pl\": \"polaco\",
        \"pon\": \"língua pohnpeica\",
        \"pro\": \"provençal antigo\",
        \"ps\": \"pastó\",
        \"pt_BR\": \"português do Brasil\",
        \"pt_PT\": \"português europeu\",
        \"raj\": \"rajastanês\",
        \"ro_MD\": \"moldávio\",
        \"root\": \"root\",
        \"se\": \"sami do norte\",
        \"sga\": \"irlandês antigo\",
        \"shu\": \"árabe do Chade\",
        \"sma\": \"sami do sul\",
        \"smn\": \"inari sami\",
        \"sn\": \"shona\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"tg\": \"tajique\",
        \"tk\": \"turcomano\",
        \"to\": \"tonga\",
        \"tt\": \"tatar\",
        \"tzm\": \"tamazight do Atlas Central\",
        \"uz\": \"usbeque\",
        \"wo\": \"uólofe\",
        \"xh\": \"xosa\",
        \"xog\": \"soga\",
        \"yo\": \"ioruba\",
        \"zgh\": \"tamazight marroquino padrão\",
        \"zh_Hans\": \"chinês simplificado\",
        \"zh_Hant\": \"chinês tradicional\",
        \"zun\": \"zuni\",
        \"zza\": \"zaza\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/pt_PT.json";
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
        \"af\": \"africanês\",
        \"alt\": \"altai do sul\",
        \"ang\": \"inglês antigo\",
        \"ar_001\": \"árabe moderno padrão\",
        \"arn\": \"mapuche\",
        \"ars\": \"árabe do Négede\",
        \"av\": \"avaric\",
        \"bax\": \"bamun\",
        \"bbj\": \"ghomala\",
        \"bn\": \"bengalês\",
        \"bua\": \"buriat\",
        \"ccp\": \"changma\",
        \"chk\": \"chuquês\",
        \"chn\": \"jargão chinook\",
        \"chr\": \"cherokee\",
        \"chy\": \"cheyenne\",
        \"ckb\": \"sorani curdo\",
        \"co\": \"córsico\",
        \"crs\": \"francês crioulo seselwa\",
        \"cs\": \"checo\",
        \"cv\": \"chuvash\",
        \"de_AT\": \"alemão austríaco\",
        \"de_CH\": \"alto alemão suíço\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egy\": \"egípcio clássico\",
        \"en_AU\": \"inglês australiano\",
        \"en_CA\": \"inglês canadiano\",
        \"en_GB\": \"inglês britânico\",
        \"en_US\": \"inglês americano\",
        \"es_419\": \"espanhol latino-americano\",
        \"es_ES\": \"espanhol europeu\",
        \"es_MX\": \"espanhol mexicano\",
        \"et\": \"estónio\",
        \"fon\": \"fon\",
        \"fr_CA\": \"francês canadiano\",
        \"fr_CH\": \"francês suíço\",
        \"fro\": \"francês antigo\",
        \"frs\": \"frísio oriental\",
        \"fy\": \"frísico ocidental\",
        \"gez\": \"geʼez\",
        \"goh\": \"alemão alto antigo\",
        \"grc\": \"grego clássico\",
        \"gsw\": \"alemão suíço\",
        \"ha\": \"haúça\",
        \"hi\": \"hindi\",
        \"hy\": \"arménio\",
        \"kbd\": \"cabardiano\",
        \"kl\": \"gronelandês\",
        \"krc\": \"carachaio-bálcaro\",
        \"lez\": \"lezghiano\",
        \"lg\": \"ganda\",
        \"lou\": \"crioulo de Louisiana\",
        \"lrc\": \"luri do norte\",
        \"mak\": \"makassarês\",
        \"mk\": \"macedónio\",
        \"moh\": \"mohawk\",
        \"mr\": \"marata\",
        \"nb\": \"norueguês bokmål\",
        \"nds\": \"baixo-alemão\",
        \"nds_NL\": \"baixo-saxão\",
        \"nl\": \"neerlandês\",
        \"nl_BE\": \"flamengo\",
        \"nn\": \"norueguês nynorsk\",
        \"non\": \"nórdico antigo\",
        \"oc\": \"occitano\",
        \"or\": \"oriya\",
        \"os\": \"ossético\",
        \"pag\": \"língua pangasinesa\",
        \"pam\": \"pampango\",
        \"peo\": \"persa antigo\",
        \"pl\": \"polaco\",
        \"pon\": \"língua pohnpeica\",
        \"pro\": \"provençal antigo\",
        \"ps\": \"pastó\",
        \"pt_BR\": \"português do Brasil\",
        \"pt_PT\": \"português europeu\",
        \"raj\": \"rajastanês\",
        \"ro_MD\": \"moldávio\",
        \"root\": \"root\",
        \"se\": \"sami do norte\",
        \"sga\": \"irlandês antigo\",
        \"shu\": \"árabe do Chade\",
        \"sma\": \"sami do sul\",
        \"smn\": \"inari sami\",
        \"sn\": \"shona\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"tg\": \"tajique\",
        \"tk\": \"turcomano\",
        \"to\": \"tonga\",
        \"tt\": \"tatar\",
        \"tzm\": \"tamazight do Atlas Central\",
        \"uz\": \"usbeque\",
        \"wo\": \"uólofe\",
        \"xh\": \"xosa\",
        \"xog\": \"soga\",
        \"yo\": \"ioruba\",
        \"zgh\": \"tamazight marroquino padrão\",
        \"zh_Hans\": \"chinês simplificado\",
        \"zh_Hant\": \"chinês tradicional\",
        \"zun\": \"zuni\",
        \"zza\": \"zaza\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/pt_PT.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/pt_PT.json");
    }
}
