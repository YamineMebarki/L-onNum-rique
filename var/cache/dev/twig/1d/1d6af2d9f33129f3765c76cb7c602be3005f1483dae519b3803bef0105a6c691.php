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

/* vendor/symfony/intl/Resources/data/languages/se.json */
class __TwigTemplate_2888bfcb389118a67a0b11296dab94a61cd566ad814606b93d2cc214503ab23b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/se.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/se.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ace\": \"acehgiella\",
        \"af\": \"afrikánsagiella\",
        \"an\": \"aragoniagiella\",
        \"ang\": \"boares eaŋgalasgiella\",
        \"ar\": \"arábagiella\",
        \"ast\": \"asturiagiella\",
        \"be\": \"vilges-ruoššagiella\",
        \"bg\": \"bulgáriagiella\",
        \"bn\": \"bengalgiella\",
        \"bo\": \"tibetagiella\",
        \"br\": \"bretonagiella\",
        \"bs\": \"bosniagiella\",
        \"ca\": \"katalánagiella\",
        \"chm\": \"marigiella\",
        \"co\": \"corsicagiella\",
        \"cs\": \"čeahkagiella\",
        \"cy\": \"kymragiella\",
        \"da\": \"dánskkagiella\",
        \"de\": \"duiskkagiella\",
        \"dv\": \"divehigiella\",
        \"dz\": \"dzongkhagiella\",
        \"el\": \"greikkagiella\",
        \"en\": \"eaŋgalsgiella\",
        \"es\": \"spánskkagiella\",
        \"et\": \"esttegiella\",
        \"fa\": \"persijagiella\",
        \"fi\": \"suomagiella\",
        \"fil\": \"filippiinnagiella\",
        \"fj\": \"fidjigiella\",
        \"fo\": \"fearagiella\",
        \"fr\": \"fránskkagiella\",
        \"fy\": \"oarjifriisagiella\",
        \"ga\": \"iirragiella\",
        \"gu\": \"gujaratagiella\",
        \"gv\": \"manksgiella\",
        \"ha\": \"haussagiella\",
        \"haw\": \"hawaiigiella\",
        \"hi\": \"hindigiella\",
        \"hr\": \"kroátiagiella\",
        \"ht\": \"haitigiella\",
        \"hu\": \"ungárgiella\",
        \"hy\": \"armeenagiella\",
        \"id\": \"indonesiagiella\",
        \"is\": \"islánddagiella\",
        \"it\": \"itáliagiella\",
        \"ja\": \"japánagiella\",
        \"jv\": \"javagiella\",
        \"ka\": \"georgiagiella\",
        \"kk\": \"kazakgiella\",
        \"km\": \"kambodiagiella\",
        \"ko\": \"koreagiella\",
        \"krl\": \"gárjilgiella\",
        \"ku\": \"kurdigiella\",
        \"kv\": \"komigiella\",
        \"kw\": \"kornagiella\",
        \"la\": \"láhtengiella\",
        \"lb\": \"luxemburggagiella\",
        \"lo\": \"laogiella\",
        \"lt\": \"liettuvagiella\",
        \"lv\": \"látviagiella\",
        \"mdf\": \"mokšagiella\",
        \"mi\": \"maorigiella\",
        \"mk\": \"makedoniagiella\",
        \"mn\": \"mongoliagiella\",
        \"mt\": \"maltagiella\",
        \"my\": \"burmagiella\",
        \"myv\": \"ersagiella\",
        \"nb\": \"girjedárogiella\",
        \"ne\": \"nepaligiella\",
        \"nl\": \"hollánddagiella\",
        \"nn\": \"ođđadárogiella\",
        \"no\": \"dárogiella\",
        \"oc\": \"oksitánagiella\",
        \"pa\": \"panjabigiella\",
        \"pl\": \"polskkagiella\",
        \"pt\": \"portugálagiella\",
        \"rm\": \"romanšgiella\",
        \"ro\": \"romániagiella\",
        \"ru\": \"ruoššagiella\",
        \"sc\": \"sardigiella\",
        \"scn\": \"sisiliagiella\",
        \"se\": \"davvisámegiella\",
        \"sel\": \"selkupagiella\",
        \"sh\": \"serbokroatiagiella\",
        \"sk\": \"slovákiagiella\",
        \"sl\": \"slovenagiella\",
        \"sm\": \"samoagiella\",
        \"sma\": \"lullisámegiella\",
        \"smj\": \"julevsámegiella\",
        \"smn\": \"anárašgiella\",
        \"sms\": \"nuortalašgiella\",
        \"sq\": \"albánagiella\",
        \"sr\": \"serbiagiella\",
        \"sv\": \"ruoŧagiella\",
        \"swb\": \"shimaorigiella\",
        \"th\": \"ŧaigiella\",
        \"tr\": \"durkagiella\",
        \"ty\": \"tahitigiella\",
        \"udm\": \"udmurtagiella\",
        \"uk\": \"ukrainagiella\",
        \"ur\": \"urdugiella\",
        \"vi\": \"vietnamgiella\",
        \"wa\": \"vallonagiella\",
        \"yue\": \"kantongiella\",
        \"zh\": \"kiinnágiella\",
        \"zh_Hans\": \"álki kiinágiella\",
        \"zh_Hant\": \"árbevirolaš kiinnágiella\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/se.json";
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
        \"ace\": \"acehgiella\",
        \"af\": \"afrikánsagiella\",
        \"an\": \"aragoniagiella\",
        \"ang\": \"boares eaŋgalasgiella\",
        \"ar\": \"arábagiella\",
        \"ast\": \"asturiagiella\",
        \"be\": \"vilges-ruoššagiella\",
        \"bg\": \"bulgáriagiella\",
        \"bn\": \"bengalgiella\",
        \"bo\": \"tibetagiella\",
        \"br\": \"bretonagiella\",
        \"bs\": \"bosniagiella\",
        \"ca\": \"katalánagiella\",
        \"chm\": \"marigiella\",
        \"co\": \"corsicagiella\",
        \"cs\": \"čeahkagiella\",
        \"cy\": \"kymragiella\",
        \"da\": \"dánskkagiella\",
        \"de\": \"duiskkagiella\",
        \"dv\": \"divehigiella\",
        \"dz\": \"dzongkhagiella\",
        \"el\": \"greikkagiella\",
        \"en\": \"eaŋgalsgiella\",
        \"es\": \"spánskkagiella\",
        \"et\": \"esttegiella\",
        \"fa\": \"persijagiella\",
        \"fi\": \"suomagiella\",
        \"fil\": \"filippiinnagiella\",
        \"fj\": \"fidjigiella\",
        \"fo\": \"fearagiella\",
        \"fr\": \"fránskkagiella\",
        \"fy\": \"oarjifriisagiella\",
        \"ga\": \"iirragiella\",
        \"gu\": \"gujaratagiella\",
        \"gv\": \"manksgiella\",
        \"ha\": \"haussagiella\",
        \"haw\": \"hawaiigiella\",
        \"hi\": \"hindigiella\",
        \"hr\": \"kroátiagiella\",
        \"ht\": \"haitigiella\",
        \"hu\": \"ungárgiella\",
        \"hy\": \"armeenagiella\",
        \"id\": \"indonesiagiella\",
        \"is\": \"islánddagiella\",
        \"it\": \"itáliagiella\",
        \"ja\": \"japánagiella\",
        \"jv\": \"javagiella\",
        \"ka\": \"georgiagiella\",
        \"kk\": \"kazakgiella\",
        \"km\": \"kambodiagiella\",
        \"ko\": \"koreagiella\",
        \"krl\": \"gárjilgiella\",
        \"ku\": \"kurdigiella\",
        \"kv\": \"komigiella\",
        \"kw\": \"kornagiella\",
        \"la\": \"láhtengiella\",
        \"lb\": \"luxemburggagiella\",
        \"lo\": \"laogiella\",
        \"lt\": \"liettuvagiella\",
        \"lv\": \"látviagiella\",
        \"mdf\": \"mokšagiella\",
        \"mi\": \"maorigiella\",
        \"mk\": \"makedoniagiella\",
        \"mn\": \"mongoliagiella\",
        \"mt\": \"maltagiella\",
        \"my\": \"burmagiella\",
        \"myv\": \"ersagiella\",
        \"nb\": \"girjedárogiella\",
        \"ne\": \"nepaligiella\",
        \"nl\": \"hollánddagiella\",
        \"nn\": \"ođđadárogiella\",
        \"no\": \"dárogiella\",
        \"oc\": \"oksitánagiella\",
        \"pa\": \"panjabigiella\",
        \"pl\": \"polskkagiella\",
        \"pt\": \"portugálagiella\",
        \"rm\": \"romanšgiella\",
        \"ro\": \"romániagiella\",
        \"ru\": \"ruoššagiella\",
        \"sc\": \"sardigiella\",
        \"scn\": \"sisiliagiella\",
        \"se\": \"davvisámegiella\",
        \"sel\": \"selkupagiella\",
        \"sh\": \"serbokroatiagiella\",
        \"sk\": \"slovákiagiella\",
        \"sl\": \"slovenagiella\",
        \"sm\": \"samoagiella\",
        \"sma\": \"lullisámegiella\",
        \"smj\": \"julevsámegiella\",
        \"smn\": \"anárašgiella\",
        \"sms\": \"nuortalašgiella\",
        \"sq\": \"albánagiella\",
        \"sr\": \"serbiagiella\",
        \"sv\": \"ruoŧagiella\",
        \"swb\": \"shimaorigiella\",
        \"th\": \"ŧaigiella\",
        \"tr\": \"durkagiella\",
        \"ty\": \"tahitigiella\",
        \"udm\": \"udmurtagiella\",
        \"uk\": \"ukrainagiella\",
        \"ur\": \"urdugiella\",
        \"vi\": \"vietnamgiella\",
        \"wa\": \"vallonagiella\",
        \"yue\": \"kantongiella\",
        \"zh\": \"kiinnágiella\",
        \"zh_Hans\": \"álki kiinágiella\",
        \"zh_Hant\": \"árbevirolaš kiinnágiella\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/se.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/se.json");
    }
}
