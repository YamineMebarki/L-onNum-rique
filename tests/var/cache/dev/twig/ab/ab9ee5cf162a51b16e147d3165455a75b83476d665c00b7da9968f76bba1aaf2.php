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

/* vendor/symfony/intl/Resources/data/locales/om.json */
class __TwigTemplate_ceca4ff6c1ee6a7982ff87f71a13fb93293acc850e5ed93418c11da743c549ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/om.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/om.json"));

        // line 1
        echo "{
    \"Names\": {
        \"af\": \"Afrikoota\",
        \"am\": \"Afaan Sidaamaa\",
        \"am_ET\": \"Afaan Sidaamaa (Itoophiyaa)\",
        \"ar\": \"Arabiffaa\",
        \"az\": \"Afaan Azerbaijani\",
        \"az_Latn\": \"Afaan Azerbaijani (Latin)\",
        \"be\": \"Afaan Belarusia\",
        \"bg\": \"Afaan Bulgariya\",
        \"bn\": \"Afaan Baangladeshi\",
        \"bn_IN\": \"Afaan Baangladeshi (India)\",
        \"bs\": \"Afaan Bosniyaa\",
        \"bs_Latn\": \"Afaan Bosniyaa (Latin)\",
        \"ca\": \"Afaan Katalaa\",
        \"ca_FR\": \"Afaan Katalaa (France)\",
        \"ca_IT\": \"Afaan Katalaa (Italy)\",
        \"cs\": \"Afaan Czech\",
        \"cy\": \"Welishiffaa\",
        \"cy_GB\": \"Welishiffaa (United Kingdom)\",
        \"da\": \"Afaan Deenmaark\",
        \"de\": \"Afaan Jarmanii\",
        \"de_DE\": \"Afaan Jarmanii (Germany)\",
        \"de_IT\": \"Afaan Jarmanii (Italy)\",
        \"el\": \"Afaan Giriiki\",
        \"en\": \"Ingliffa\",
        \"en_DE\": \"Ingliffa (Germany)\",
        \"en_GB\": \"Ingliffa (United Kingdom)\",
        \"en_IN\": \"Ingliffa (India)\",
        \"en_KE\": \"Ingliffa (Keeniyaa)\",
        \"en_US\": \"Ingliffa (United States)\",
        \"eo\": \"Afaan Esperantoo\",
        \"es\": \"Afaan Ispeen\",
        \"es_BR\": \"Afaan Ispeen (Brazil)\",
        \"es_US\": \"Afaan Ispeen (United States)\",
        \"et\": \"Afaan Istooniya\",
        \"eu\": \"Afaan Baskuu\",
        \"fa\": \"Afaan Persia\",
        \"fi\": \"Afaan Fiilaandi\",
        \"fo\": \"Afaan Faroese\",
        \"fr\": \"Afaan Faransaayii\",
        \"fr_FR\": \"Afaan Faransaayii (France)\",
        \"fy\": \"Afaan Firisiyaani\",
        \"ga\": \"Afaan Ayirishii\",
        \"ga_GB\": \"Afaan Ayirishii (United Kingdom)\",
        \"gd\": \"Scots Gaelic\",
        \"gd_GB\": \"Scots Gaelic (United Kingdom)\",
        \"gl\": \"Afaan Galishii\",
        \"gu\": \"Afaan Gujarati\",
        \"gu_IN\": \"Afaan Gujarati (India)\",
        \"he\": \"Afaan Hebrew\",
        \"hi\": \"Afaan Hindii\",
        \"hi_IN\": \"Afaan Hindii (India)\",
        \"hr\": \"Afaan Croatian\",
        \"hu\": \"Afaan Hangaari\",
        \"ia\": \"Interlingua\",
        \"id\": \"Afaan Indoneziya\",
        \"is\": \"Ayiislandiffaa\",
        \"it\": \"Afaan Xaaliyaani\",
        \"it_IT\": \"Afaan Xaaliyaani (Italy)\",
        \"ja\": \"Afaan Japanii\",
        \"ja_JP\": \"Afaan Japanii (Japan)\",
        \"jv\": \"Afaan Java\",
        \"ka\": \"Afaan Georgian\",
        \"kn\": \"Afaan Kannada\",
        \"kn_IN\": \"Afaan Kannada (India)\",
        \"ko\": \"Afaan Korea\",
        \"lt\": \"Afaan Liituniyaa\",
        \"lv\": \"Afaan Lativiyaa\",
        \"mk\": \"Afaan Macedooniyaa\",
        \"ml\": \"Malayaalamiffaa\",
        \"ml_IN\": \"Malayaalamiffaa (India)\",
        \"mr\": \"Afaan Maratii\",
        \"mr_IN\": \"Afaan Maratii (India)\",
        \"ms\": \"Malaayiffaa\",
        \"mt\": \"Afaan Maltesii\",
        \"ne\": \"Afaan Nepalii\",
        \"ne_IN\": \"Afaan Nepalii (India)\",
        \"nl\": \"Afaan Dachii\",
        \"nn\": \"Afaan Norwegian\",
        \"no\": \"Afaan Norweyii\",
        \"om\": \"Oromoo\",
        \"om_ET\": \"Oromoo (Itoophiyaa)\",
        \"om_KE\": \"Oromoo (Keeniyaa)\",
        \"pa\": \"Afaan Punjabii\",
        \"pa_IN\": \"Afaan Punjabii (India)\",
        \"pl\": \"Afaan Polandii\",
        \"pt\": \"Afaan Porchugaal\",
        \"pt_BR\": \"Afaan Porchugaal (Brazil)\",
        \"ro\": \"Afaan Romaniyaa\",
        \"ru\": \"Afaan Rushiyaa\",
        \"ru_RU\": \"Afaan Rushiyaa (Russia)\",
        \"si\": \"Afaan Sinhalese\",
        \"sk\": \"Afaan Slovak\",
        \"sl\": \"Afaan Islovaniyaa\",
        \"sq\": \"Afaan Albaniyaa\",
        \"sr\": \"Afaan Serbiya\",
        \"sr_Latn\": \"Afaan Serbiya (Latin)\",
        \"sv\": \"Afaan Suwidiin\",
        \"sw\": \"Suwahilii\",
        \"sw_KE\": \"Suwahilii (Keeniyaa)\",
        \"ta\": \"Afaan Tamilii\",
        \"ta_IN\": \"Afaan Tamilii (India)\",
        \"te\": \"Afaan Telugu\",
        \"te_IN\": \"Afaan Telugu (India)\",
        \"th\": \"Afaan Tayii\",
        \"ti\": \"Afaan Tigiree\",
        \"ti_ET\": \"Afaan Tigiree (Itoophiyaa)\",
        \"tk\": \"Lammii Turkii\",
        \"tr\": \"Afaan Turkii\",
        \"uk\": \"Afaan Ukreenii\",
        \"ur\": \"Afaan Urdu\",
        \"ur_IN\": \"Afaan Urdu (India)\",
        \"uz\": \"Afaan Uzbek\",
        \"uz_Latn\": \"Afaan Uzbek (Latin)\",
        \"vi\": \"Afaan Veetinam\",
        \"xh\": \"Afaan Xhosa\",
        \"zh\": \"Chinese\",
        \"zh_CN\": \"Chinese (China)\",
        \"zu\": \"Afaan Zuulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/om.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"af\": \"Afrikoota\",
        \"am\": \"Afaan Sidaamaa\",
        \"am_ET\": \"Afaan Sidaamaa (Itoophiyaa)\",
        \"ar\": \"Arabiffaa\",
        \"az\": \"Afaan Azerbaijani\",
        \"az_Latn\": \"Afaan Azerbaijani (Latin)\",
        \"be\": \"Afaan Belarusia\",
        \"bg\": \"Afaan Bulgariya\",
        \"bn\": \"Afaan Baangladeshi\",
        \"bn_IN\": \"Afaan Baangladeshi (India)\",
        \"bs\": \"Afaan Bosniyaa\",
        \"bs_Latn\": \"Afaan Bosniyaa (Latin)\",
        \"ca\": \"Afaan Katalaa\",
        \"ca_FR\": \"Afaan Katalaa (France)\",
        \"ca_IT\": \"Afaan Katalaa (Italy)\",
        \"cs\": \"Afaan Czech\",
        \"cy\": \"Welishiffaa\",
        \"cy_GB\": \"Welishiffaa (United Kingdom)\",
        \"da\": \"Afaan Deenmaark\",
        \"de\": \"Afaan Jarmanii\",
        \"de_DE\": \"Afaan Jarmanii (Germany)\",
        \"de_IT\": \"Afaan Jarmanii (Italy)\",
        \"el\": \"Afaan Giriiki\",
        \"en\": \"Ingliffa\",
        \"en_DE\": \"Ingliffa (Germany)\",
        \"en_GB\": \"Ingliffa (United Kingdom)\",
        \"en_IN\": \"Ingliffa (India)\",
        \"en_KE\": \"Ingliffa (Keeniyaa)\",
        \"en_US\": \"Ingliffa (United States)\",
        \"eo\": \"Afaan Esperantoo\",
        \"es\": \"Afaan Ispeen\",
        \"es_BR\": \"Afaan Ispeen (Brazil)\",
        \"es_US\": \"Afaan Ispeen (United States)\",
        \"et\": \"Afaan Istooniya\",
        \"eu\": \"Afaan Baskuu\",
        \"fa\": \"Afaan Persia\",
        \"fi\": \"Afaan Fiilaandi\",
        \"fo\": \"Afaan Faroese\",
        \"fr\": \"Afaan Faransaayii\",
        \"fr_FR\": \"Afaan Faransaayii (France)\",
        \"fy\": \"Afaan Firisiyaani\",
        \"ga\": \"Afaan Ayirishii\",
        \"ga_GB\": \"Afaan Ayirishii (United Kingdom)\",
        \"gd\": \"Scots Gaelic\",
        \"gd_GB\": \"Scots Gaelic (United Kingdom)\",
        \"gl\": \"Afaan Galishii\",
        \"gu\": \"Afaan Gujarati\",
        \"gu_IN\": \"Afaan Gujarati (India)\",
        \"he\": \"Afaan Hebrew\",
        \"hi\": \"Afaan Hindii\",
        \"hi_IN\": \"Afaan Hindii (India)\",
        \"hr\": \"Afaan Croatian\",
        \"hu\": \"Afaan Hangaari\",
        \"ia\": \"Interlingua\",
        \"id\": \"Afaan Indoneziya\",
        \"is\": \"Ayiislandiffaa\",
        \"it\": \"Afaan Xaaliyaani\",
        \"it_IT\": \"Afaan Xaaliyaani (Italy)\",
        \"ja\": \"Afaan Japanii\",
        \"ja_JP\": \"Afaan Japanii (Japan)\",
        \"jv\": \"Afaan Java\",
        \"ka\": \"Afaan Georgian\",
        \"kn\": \"Afaan Kannada\",
        \"kn_IN\": \"Afaan Kannada (India)\",
        \"ko\": \"Afaan Korea\",
        \"lt\": \"Afaan Liituniyaa\",
        \"lv\": \"Afaan Lativiyaa\",
        \"mk\": \"Afaan Macedooniyaa\",
        \"ml\": \"Malayaalamiffaa\",
        \"ml_IN\": \"Malayaalamiffaa (India)\",
        \"mr\": \"Afaan Maratii\",
        \"mr_IN\": \"Afaan Maratii (India)\",
        \"ms\": \"Malaayiffaa\",
        \"mt\": \"Afaan Maltesii\",
        \"ne\": \"Afaan Nepalii\",
        \"ne_IN\": \"Afaan Nepalii (India)\",
        \"nl\": \"Afaan Dachii\",
        \"nn\": \"Afaan Norwegian\",
        \"no\": \"Afaan Norweyii\",
        \"om\": \"Oromoo\",
        \"om_ET\": \"Oromoo (Itoophiyaa)\",
        \"om_KE\": \"Oromoo (Keeniyaa)\",
        \"pa\": \"Afaan Punjabii\",
        \"pa_IN\": \"Afaan Punjabii (India)\",
        \"pl\": \"Afaan Polandii\",
        \"pt\": \"Afaan Porchugaal\",
        \"pt_BR\": \"Afaan Porchugaal (Brazil)\",
        \"ro\": \"Afaan Romaniyaa\",
        \"ru\": \"Afaan Rushiyaa\",
        \"ru_RU\": \"Afaan Rushiyaa (Russia)\",
        \"si\": \"Afaan Sinhalese\",
        \"sk\": \"Afaan Slovak\",
        \"sl\": \"Afaan Islovaniyaa\",
        \"sq\": \"Afaan Albaniyaa\",
        \"sr\": \"Afaan Serbiya\",
        \"sr_Latn\": \"Afaan Serbiya (Latin)\",
        \"sv\": \"Afaan Suwidiin\",
        \"sw\": \"Suwahilii\",
        \"sw_KE\": \"Suwahilii (Keeniyaa)\",
        \"ta\": \"Afaan Tamilii\",
        \"ta_IN\": \"Afaan Tamilii (India)\",
        \"te\": \"Afaan Telugu\",
        \"te_IN\": \"Afaan Telugu (India)\",
        \"th\": \"Afaan Tayii\",
        \"ti\": \"Afaan Tigiree\",
        \"ti_ET\": \"Afaan Tigiree (Itoophiyaa)\",
        \"tk\": \"Lammii Turkii\",
        \"tr\": \"Afaan Turkii\",
        \"uk\": \"Afaan Ukreenii\",
        \"ur\": \"Afaan Urdu\",
        \"ur_IN\": \"Afaan Urdu (India)\",
        \"uz\": \"Afaan Uzbek\",
        \"uz_Latn\": \"Afaan Uzbek (Latin)\",
        \"vi\": \"Afaan Veetinam\",
        \"xh\": \"Afaan Xhosa\",
        \"zh\": \"Chinese\",
        \"zh_CN\": \"Chinese (China)\",
        \"zu\": \"Afaan Zuulu\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/om.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/om.json");
    }
}
