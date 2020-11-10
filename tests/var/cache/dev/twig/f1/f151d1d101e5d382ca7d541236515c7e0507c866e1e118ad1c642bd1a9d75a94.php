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

/* vendor/symfony/intl/Resources/data/languages/eo.json */
class __TwigTemplate_fea28d10de433caecd599ed5ceea8745d01d0f2e4ef4e009f585e589336c9037 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/eo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/eo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"afara\",
        \"ab\": \"abĥaza\",
        \"af\": \"afrikansa\",
        \"am\": \"amhara\",
        \"ar\": \"araba\",
        \"as\": \"asama\",
        \"ay\": \"ajmara\",
        \"az\": \"azerbajĝana\",
        \"ba\": \"baŝkira\",
        \"be\": \"belorusa\",
        \"bg\": \"bulgara\",
        \"bi\": \"bislamo\",
        \"bn\": \"bengala\",
        \"bo\": \"tibeta\",
        \"br\": \"bretona\",
        \"bs\": \"bosnia\",
        \"ca\": \"kataluna\",
        \"co\": \"korsika\",
        \"cs\": \"ĉeĥa\",
        \"cy\": \"kimra\",
        \"da\": \"dana\",
        \"de\": \"germana\",
        \"dv\": \"mahla\",
        \"dz\": \"dzonko\",
        \"efi\": \"ibibioefika\",
        \"el\": \"greka\",
        \"en\": \"angla\",
        \"eo\": \"esperanto\",
        \"es\": \"hispana\",
        \"et\": \"estona\",
        \"eu\": \"eŭska\",
        \"fa\": \"persa\",
        \"fi\": \"finna\",
        \"fil\": \"filipina\",
        \"fj\": \"fiĝia\",
        \"fo\": \"feroa\",
        \"fr\": \"franca\",
        \"fy\": \"frisa\",
        \"ga\": \"irlanda\",
        \"gd\": \"gaela\",
        \"gl\": \"galega\",
        \"gn\": \"gvarania\",
        \"gu\": \"guĝarata\",
        \"ha\": \"haŭsa\",
        \"haw\": \"havaja\",
        \"he\": \"hebrea\",
        \"hi\": \"hinda\",
        \"hr\": \"kroata\",
        \"ht\": \"haitia kreola\",
        \"hu\": \"hungara\",
        \"hy\": \"armena\",
        \"ia\": \"interlingvao\",
        \"id\": \"indonezia\",
        \"ie\": \"okcidentalo\",
        \"ik\": \"eskima\",
        \"is\": \"islanda\",
        \"it\": \"itala\",
        \"iu\": \"inuita\",
        \"ja\": \"japana\",
        \"jv\": \"java\",
        \"ka\": \"kartvela\",
        \"kk\": \"kazaĥa\",
        \"kl\": \"gronlanda\",
        \"km\": \"kmera\",
        \"kn\": \"kanara\",
        \"ko\": \"korea\",
        \"ks\": \"kaŝmira\",
        \"ku\": \"kurda\",
        \"ky\": \"kirgiza\",
        \"la\": \"latino\",
        \"lb\": \"luksemburga\",
        \"ln\": \"lingala\",
        \"lo\": \"laŭa\",
        \"lt\": \"litova\",
        \"lv\": \"latva\",
        \"mg\": \"malagasa\",
        \"mi\": \"maoria\",
        \"mk\": \"makedona\",
        \"ml\": \"malajalama\",
        \"mn\": \"mongola\",
        \"mr\": \"marata\",
        \"ms\": \"malaja\",
        \"mt\": \"malta\",
        \"my\": \"birma\",
        \"na\": \"naura\",
        \"nb\": \"dannorvega\",
        \"ne\": \"nepala\",
        \"nl\": \"nederlanda\",
        \"nn\": \"novnorvega\",
        \"no\": \"norvega\",
        \"oc\": \"okcitana\",
        \"om\": \"oroma\",
        \"or\": \"orijo\",
        \"pa\": \"panĝaba\",
        \"pl\": \"pola\",
        \"ps\": \"paŝtoa\",
        \"pt\": \"portugala\",
        \"pt_BR\": \"brazilportugala\",
        \"pt_PT\": \"eŭropportugala\",
        \"qu\": \"keĉua\",
        \"rm\": \"romanĉa\",
        \"rn\": \"burunda\",
        \"ro\": \"rumana\",
        \"ru\": \"rusa\",
        \"rw\": \"ruanda\",
        \"sa\": \"sanskrito\",
        \"sd\": \"sinda\",
        \"sg\": \"sangoa\",
        \"sh\": \"serbo-Kroata\",
        \"si\": \"sinhala\",
        \"sk\": \"slovaka\",
        \"sl\": \"slovena\",
        \"sm\": \"samoa\",
        \"sn\": \"ŝona\",
        \"so\": \"somala\",
        \"sq\": \"albana\",
        \"sr\": \"serba\",
        \"ss\": \"svazia\",
        \"st\": \"sota\",
        \"su\": \"sunda\",
        \"sv\": \"sveda\",
        \"sw\": \"svahila\",
        \"ta\": \"tamila\",
        \"te\": \"telugua\",
        \"tg\": \"taĝika\",
        \"th\": \"taja\",
        \"ti\": \"tigraja\",
        \"tk\": \"turkmena\",
        \"tl\": \"tagaloga\",
        \"tlh\": \"klingona\",
        \"tn\": \"cvana\",
        \"to\": \"tongaa\",
        \"tr\": \"turka\",
        \"ts\": \"conga\",
        \"tt\": \"tatara\",
        \"tw\": \"tw\",
        \"ug\": \"ujgura\",
        \"uk\": \"ukraina\",
        \"ur\": \"urduo\",
        \"uz\": \"uzbeka\",
        \"vi\": \"vjetnama\",
        \"vo\": \"volapuko\",
        \"wo\": \"volofa\",
        \"xh\": \"ksosa\",
        \"yi\": \"jida\",
        \"yo\": \"joruba\",
        \"za\": \"ĝuanga\",
        \"zh\": \"ĉina\",
        \"zh_Hans\": \"ĉina simpligita\",
        \"zh_Hant\": \"ĉina tradicia\",
        \"zu\": \"zulua\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/eo.json";
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
        \"aa\": \"afara\",
        \"ab\": \"abĥaza\",
        \"af\": \"afrikansa\",
        \"am\": \"amhara\",
        \"ar\": \"araba\",
        \"as\": \"asama\",
        \"ay\": \"ajmara\",
        \"az\": \"azerbajĝana\",
        \"ba\": \"baŝkira\",
        \"be\": \"belorusa\",
        \"bg\": \"bulgara\",
        \"bi\": \"bislamo\",
        \"bn\": \"bengala\",
        \"bo\": \"tibeta\",
        \"br\": \"bretona\",
        \"bs\": \"bosnia\",
        \"ca\": \"kataluna\",
        \"co\": \"korsika\",
        \"cs\": \"ĉeĥa\",
        \"cy\": \"kimra\",
        \"da\": \"dana\",
        \"de\": \"germana\",
        \"dv\": \"mahla\",
        \"dz\": \"dzonko\",
        \"efi\": \"ibibioefika\",
        \"el\": \"greka\",
        \"en\": \"angla\",
        \"eo\": \"esperanto\",
        \"es\": \"hispana\",
        \"et\": \"estona\",
        \"eu\": \"eŭska\",
        \"fa\": \"persa\",
        \"fi\": \"finna\",
        \"fil\": \"filipina\",
        \"fj\": \"fiĝia\",
        \"fo\": \"feroa\",
        \"fr\": \"franca\",
        \"fy\": \"frisa\",
        \"ga\": \"irlanda\",
        \"gd\": \"gaela\",
        \"gl\": \"galega\",
        \"gn\": \"gvarania\",
        \"gu\": \"guĝarata\",
        \"ha\": \"haŭsa\",
        \"haw\": \"havaja\",
        \"he\": \"hebrea\",
        \"hi\": \"hinda\",
        \"hr\": \"kroata\",
        \"ht\": \"haitia kreola\",
        \"hu\": \"hungara\",
        \"hy\": \"armena\",
        \"ia\": \"interlingvao\",
        \"id\": \"indonezia\",
        \"ie\": \"okcidentalo\",
        \"ik\": \"eskima\",
        \"is\": \"islanda\",
        \"it\": \"itala\",
        \"iu\": \"inuita\",
        \"ja\": \"japana\",
        \"jv\": \"java\",
        \"ka\": \"kartvela\",
        \"kk\": \"kazaĥa\",
        \"kl\": \"gronlanda\",
        \"km\": \"kmera\",
        \"kn\": \"kanara\",
        \"ko\": \"korea\",
        \"ks\": \"kaŝmira\",
        \"ku\": \"kurda\",
        \"ky\": \"kirgiza\",
        \"la\": \"latino\",
        \"lb\": \"luksemburga\",
        \"ln\": \"lingala\",
        \"lo\": \"laŭa\",
        \"lt\": \"litova\",
        \"lv\": \"latva\",
        \"mg\": \"malagasa\",
        \"mi\": \"maoria\",
        \"mk\": \"makedona\",
        \"ml\": \"malajalama\",
        \"mn\": \"mongola\",
        \"mr\": \"marata\",
        \"ms\": \"malaja\",
        \"mt\": \"malta\",
        \"my\": \"birma\",
        \"na\": \"naura\",
        \"nb\": \"dannorvega\",
        \"ne\": \"nepala\",
        \"nl\": \"nederlanda\",
        \"nn\": \"novnorvega\",
        \"no\": \"norvega\",
        \"oc\": \"okcitana\",
        \"om\": \"oroma\",
        \"or\": \"orijo\",
        \"pa\": \"panĝaba\",
        \"pl\": \"pola\",
        \"ps\": \"paŝtoa\",
        \"pt\": \"portugala\",
        \"pt_BR\": \"brazilportugala\",
        \"pt_PT\": \"eŭropportugala\",
        \"qu\": \"keĉua\",
        \"rm\": \"romanĉa\",
        \"rn\": \"burunda\",
        \"ro\": \"rumana\",
        \"ru\": \"rusa\",
        \"rw\": \"ruanda\",
        \"sa\": \"sanskrito\",
        \"sd\": \"sinda\",
        \"sg\": \"sangoa\",
        \"sh\": \"serbo-Kroata\",
        \"si\": \"sinhala\",
        \"sk\": \"slovaka\",
        \"sl\": \"slovena\",
        \"sm\": \"samoa\",
        \"sn\": \"ŝona\",
        \"so\": \"somala\",
        \"sq\": \"albana\",
        \"sr\": \"serba\",
        \"ss\": \"svazia\",
        \"st\": \"sota\",
        \"su\": \"sunda\",
        \"sv\": \"sveda\",
        \"sw\": \"svahila\",
        \"ta\": \"tamila\",
        \"te\": \"telugua\",
        \"tg\": \"taĝika\",
        \"th\": \"taja\",
        \"ti\": \"tigraja\",
        \"tk\": \"turkmena\",
        \"tl\": \"tagaloga\",
        \"tlh\": \"klingona\",
        \"tn\": \"cvana\",
        \"to\": \"tongaa\",
        \"tr\": \"turka\",
        \"ts\": \"conga\",
        \"tt\": \"tatara\",
        \"tw\": \"tw\",
        \"ug\": \"ujgura\",
        \"uk\": \"ukraina\",
        \"ur\": \"urduo\",
        \"uz\": \"uzbeka\",
        \"vi\": \"vjetnama\",
        \"vo\": \"volapuko\",
        \"wo\": \"volofa\",
        \"xh\": \"ksosa\",
        \"yi\": \"jida\",
        \"yo\": \"joruba\",
        \"za\": \"ĝuanga\",
        \"zh\": \"ĉina\",
        \"zh_Hans\": \"ĉina simpligita\",
        \"zh_Hant\": \"ĉina tradicia\",
        \"zu\": \"zulua\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/eo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/eo.json");
    }
}
