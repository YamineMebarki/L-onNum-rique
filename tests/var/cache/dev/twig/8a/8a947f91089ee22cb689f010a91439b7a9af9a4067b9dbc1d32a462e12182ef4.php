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

/* vendor/symfony/intl/Resources/data/languages/om.json */
class __TwigTemplate_fd0770334a40fd5739645c5caadc5bc7c570e970bff68347ce1d940a85040669 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/om.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/om.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"Afrikoota\",
        \"am\": \"Afaan Sidaamaa\",
        \"ar\": \"Arabiffaa\",
        \"az\": \"Afaan Azerbaijani\",
        \"be\": \"Afaan Belarusia\",
        \"bg\": \"Afaan Bulgariya\",
        \"bn\": \"Afaan Baangladeshi\",
        \"bs\": \"Afaan Bosniyaa\",
        \"ca\": \"Afaan Katalaa\",
        \"cs\": \"Afaan Czech\",
        \"cy\": \"Welishiffaa\",
        \"da\": \"Afaan Deenmaark\",
        \"de\": \"Afaan Jarmanii\",
        \"el\": \"Afaan Giriiki\",
        \"en\": \"Ingliffa\",
        \"eo\": \"Afaan Esperantoo\",
        \"es\": \"Afaan Ispeen\",
        \"et\": \"Afaan Istooniya\",
        \"eu\": \"Afaan Baskuu\",
        \"fa\": \"Afaan Persia\",
        \"fi\": \"Afaan Fiilaandi\",
        \"fil\": \"Afaan Filippinii\",
        \"fo\": \"Afaan Faroese\",
        \"fr\": \"Afaan Faransaayii\",
        \"fy\": \"Afaan Firisiyaani\",
        \"ga\": \"Afaan Ayirishii\",
        \"gd\": \"Scots Gaelic\",
        \"gl\": \"Afaan Galishii\",
        \"gn\": \"Afaan Guarani\",
        \"gu\": \"Afaan Gujarati\",
        \"he\": \"Afaan Hebrew\",
        \"hi\": \"Afaan Hindii\",
        \"hr\": \"Afaan Croatian\",
        \"hu\": \"Afaan Hangaari\",
        \"ia\": \"Interlingua\",
        \"id\": \"Afaan Indoneziya\",
        \"is\": \"Ayiislandiffaa\",
        \"it\": \"Afaan Xaaliyaani\",
        \"ja\": \"Afaan Japanii\",
        \"jv\": \"Afaan Java\",
        \"ka\": \"Afaan Georgian\",
        \"kn\": \"Afaan Kannada\",
        \"ko\": \"Afaan Korea\",
        \"la\": \"Afaan Laatini\",
        \"lt\": \"Afaan Liituniyaa\",
        \"lv\": \"Afaan Lativiyaa\",
        \"mk\": \"Afaan Macedooniyaa\",
        \"ml\": \"Malayaalamiffaa\",
        \"mr\": \"Afaan Maratii\",
        \"ms\": \"Malaayiffaa\",
        \"mt\": \"Afaan Maltesii\",
        \"ne\": \"Afaan Nepalii\",
        \"nl\": \"Afaan Dachii\",
        \"nn\": \"Afaan Norwegian\",
        \"no\": \"Afaan Norweyii\",
        \"oc\": \"Afaan Occit\",
        \"om\": \"Oromoo\",
        \"pa\": \"Afaan Punjabii\",
        \"pl\": \"Afaan Polandii\",
        \"pt\": \"Afaan Porchugaal\",
        \"pt_BR\": \"Afaan Portugali (Braazil)\",
        \"pt_PT\": \"Afaan Protuguese\",
        \"ro\": \"Afaan Romaniyaa\",
        \"ru\": \"Afaan Rushiyaa\",
        \"si\": \"Afaan Sinhalese\",
        \"sk\": \"Afaan Slovak\",
        \"sl\": \"Afaan Islovaniyaa\",
        \"sq\": \"Afaan Albaniyaa\",
        \"sr\": \"Afaan Serbiya\",
        \"su\": \"Afaan Sudaanii\",
        \"sv\": \"Afaan Suwidiin\",
        \"sw\": \"Suwahilii\",
        \"ta\": \"Afaan Tamilii\",
        \"te\": \"Afaan Telugu\",
        \"th\": \"Afaan Tayii\",
        \"ti\": \"Afaan Tigiree\",
        \"tk\": \"Lammii Turkii\",
        \"tlh\": \"Afaan Kilingon\",
        \"tr\": \"Afaan Turkii\",
        \"uk\": \"Afaan Ukreenii\",
        \"ur\": \"Afaan Urdu\",
        \"uz\": \"Afaan Uzbek\",
        \"vi\": \"Afaan Veetinam\",
        \"xh\": \"Afaan Xhosa\",
        \"zh\": \"Chinese\",
        \"zu\": \"Afaan Zuulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/om.json";
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
        \"af\": \"Afrikoota\",
        \"am\": \"Afaan Sidaamaa\",
        \"ar\": \"Arabiffaa\",
        \"az\": \"Afaan Azerbaijani\",
        \"be\": \"Afaan Belarusia\",
        \"bg\": \"Afaan Bulgariya\",
        \"bn\": \"Afaan Baangladeshi\",
        \"bs\": \"Afaan Bosniyaa\",
        \"ca\": \"Afaan Katalaa\",
        \"cs\": \"Afaan Czech\",
        \"cy\": \"Welishiffaa\",
        \"da\": \"Afaan Deenmaark\",
        \"de\": \"Afaan Jarmanii\",
        \"el\": \"Afaan Giriiki\",
        \"en\": \"Ingliffa\",
        \"eo\": \"Afaan Esperantoo\",
        \"es\": \"Afaan Ispeen\",
        \"et\": \"Afaan Istooniya\",
        \"eu\": \"Afaan Baskuu\",
        \"fa\": \"Afaan Persia\",
        \"fi\": \"Afaan Fiilaandi\",
        \"fil\": \"Afaan Filippinii\",
        \"fo\": \"Afaan Faroese\",
        \"fr\": \"Afaan Faransaayii\",
        \"fy\": \"Afaan Firisiyaani\",
        \"ga\": \"Afaan Ayirishii\",
        \"gd\": \"Scots Gaelic\",
        \"gl\": \"Afaan Galishii\",
        \"gn\": \"Afaan Guarani\",
        \"gu\": \"Afaan Gujarati\",
        \"he\": \"Afaan Hebrew\",
        \"hi\": \"Afaan Hindii\",
        \"hr\": \"Afaan Croatian\",
        \"hu\": \"Afaan Hangaari\",
        \"ia\": \"Interlingua\",
        \"id\": \"Afaan Indoneziya\",
        \"is\": \"Ayiislandiffaa\",
        \"it\": \"Afaan Xaaliyaani\",
        \"ja\": \"Afaan Japanii\",
        \"jv\": \"Afaan Java\",
        \"ka\": \"Afaan Georgian\",
        \"kn\": \"Afaan Kannada\",
        \"ko\": \"Afaan Korea\",
        \"la\": \"Afaan Laatini\",
        \"lt\": \"Afaan Liituniyaa\",
        \"lv\": \"Afaan Lativiyaa\",
        \"mk\": \"Afaan Macedooniyaa\",
        \"ml\": \"Malayaalamiffaa\",
        \"mr\": \"Afaan Maratii\",
        \"ms\": \"Malaayiffaa\",
        \"mt\": \"Afaan Maltesii\",
        \"ne\": \"Afaan Nepalii\",
        \"nl\": \"Afaan Dachii\",
        \"nn\": \"Afaan Norwegian\",
        \"no\": \"Afaan Norweyii\",
        \"oc\": \"Afaan Occit\",
        \"om\": \"Oromoo\",
        \"pa\": \"Afaan Punjabii\",
        \"pl\": \"Afaan Polandii\",
        \"pt\": \"Afaan Porchugaal\",
        \"pt_BR\": \"Afaan Portugali (Braazil)\",
        \"pt_PT\": \"Afaan Protuguese\",
        \"ro\": \"Afaan Romaniyaa\",
        \"ru\": \"Afaan Rushiyaa\",
        \"si\": \"Afaan Sinhalese\",
        \"sk\": \"Afaan Slovak\",
        \"sl\": \"Afaan Islovaniyaa\",
        \"sq\": \"Afaan Albaniyaa\",
        \"sr\": \"Afaan Serbiya\",
        \"su\": \"Afaan Sudaanii\",
        \"sv\": \"Afaan Suwidiin\",
        \"sw\": \"Suwahilii\",
        \"ta\": \"Afaan Tamilii\",
        \"te\": \"Afaan Telugu\",
        \"th\": \"Afaan Tayii\",
        \"ti\": \"Afaan Tigiree\",
        \"tk\": \"Lammii Turkii\",
        \"tlh\": \"Afaan Kilingon\",
        \"tr\": \"Afaan Turkii\",
        \"uk\": \"Afaan Ukreenii\",
        \"ur\": \"Afaan Urdu\",
        \"uz\": \"Afaan Uzbek\",
        \"vi\": \"Afaan Veetinam\",
        \"xh\": \"Afaan Xhosa\",
        \"zh\": \"Chinese\",
        \"zu\": \"Afaan Zuulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/om.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/om.json");
    }
}
