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

/* vendor/symfony/intl/Resources/data/languages/rw.json */
class __TwigTemplate_2402e7261cd591d19e361420266447d298894ea194663c6b6db435ac83b95a7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/rw.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/rw.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"Ikinyafurikaneri\",
        \"am\": \"Inyamuhariki\",
        \"ar\": \"Icyarabu\",
        \"as\": \"Icyasamizi\",
        \"az\": \"Inyazeribayijani\",
        \"be\": \"Ikibelarusiya\",
        \"bg\": \"Urunyabuligariya\",
        \"bn\": \"Ikibengali\",
        \"br\": \"Inyebiritoni\",
        \"bs\": \"Inyebosiniya\",
        \"ca\": \"Igikatalani\",
        \"cs\": \"Igiceke\",
        \"cy\": \"Ikigaluwa\",
        \"da\": \"Ikidaninwa\",
        \"de\": \"Ikidage\",
        \"el\": \"Ikigereki\",
        \"en\": \"Icyongereza\",
        \"eo\": \"Icyesiperanto\",
        \"es\": \"Icyesipanyolo\",
        \"et\": \"Icyesitoniya\",
        \"eu\": \"Ikibasiki\",
        \"fa\": \"Inyeperisi\",
        \"fi\": \"Igifinilande\",
        \"fil\": \"Ikinyafilipine\",
        \"fo\": \"Inyefaroyizi\",
        \"fr\": \"Igifaransa\",
        \"fy\": \"Igifiriziyani\",
        \"ga\": \"Ikirilandi\",
        \"gd\": \"Ikigaluwa cy’Igisweduwa\",
        \"gl\": \"Ikigalisiya\",
        \"gn\": \"Inyaguwarani\",
        \"gu\": \"Inyegujarati\",
        \"he\": \"Igiheburayo\",
        \"hi\": \"Igihindi\",
        \"hr\": \"Igikorowasiya\",
        \"hu\": \"Igihongiriya\",
        \"hy\": \"Ikinyarumeniya\",
        \"ia\": \"Ururimi Gahuzamiryango\",
        \"id\": \"Ikinyendoziya\",
        \"ie\": \"Uruhuzandimi\",
        \"is\": \"Igisilande\",
        \"it\": \"Igitaliyani\",
        \"ja\": \"Ikiyapani\",
        \"jv\": \"Inyejava\",
        \"ka\": \"Inyejeworujiya\",
        \"km\": \"Igikambodiya\",
        \"kn\": \"Igikanada\",
        \"ko\": \"Igikoreya\",
        \"ku\": \"Inyekuridishi\",
        \"ky\": \"Inkerigizi\",
        \"la\": \"Ikilatini\",
        \"ln\": \"Ilingala\",
        \"lo\": \"Ikilawotiyani\",
        \"lt\": \"Ikilituwaniya\",
        \"lv\": \"Ikinyaletoviyani\",
        \"mk\": \"Ikimasedoniya\",
        \"ml\": \"Ikimalayalami\",
        \"mn\": \"Ikimongoli\",
        \"mr\": \"Ikimarati\",
        \"ms\": \"Ikimalayi\",
        \"mt\": \"Ikimaliteze\",
        \"ne\": \"Ikinepali\",
        \"nl\": \"Ikinerilande\",
        \"nn\": \"Inyenoruveji (Nyonorusiki)\",
        \"no\": \"Ikinoruveji\",
        \"oc\": \"Inyogusitani\",
        \"or\": \"Inyoriya\",
        \"pa\": \"Igipunjabi\",
        \"pl\": \"Igipolone\",
        \"ps\": \"Impashito\",
        \"pt\": \"Igiporutugali\",
        \"pt_BR\": \"Inyeporutigali (Brezili)\",
        \"pt_PT\": \"Inyeporutigali (Igiporutigali)\",
        \"ro\": \"Ikinyarumaniya\",
        \"ru\": \"Ikirusiya\",
        \"rw\": \"Kinyarwanda\",
        \"sa\": \"Igisansikiri\",
        \"sd\": \"Igisindi\",
        \"sh\": \"Inyeseribiya na Korowasiya\",
        \"si\": \"Inyesimpaleze\",
        \"sk\": \"Igisilovaki\",
        \"sl\": \"Ikinyasiloveniya\",
        \"so\": \"Igisomali\",
        \"sq\": \"Icyalubaniya\",
        \"sr\": \"Igiseribe\",
        \"st\": \"Inyesesoto\",
        \"su\": \"Inyesudani\",
        \"sv\": \"Igisuweduwa\",
        \"sw\": \"Igiswahili\",
        \"ta\": \"Igitamili\",
        \"te\": \"Igitelugu\",
        \"th\": \"Igitayi\",
        \"ti\": \"Inyatigirinya\",
        \"tk\": \"Inyeturukimeni\",
        \"tlh\": \"Inyekilingoni\",
        \"tr\": \"Igiturukiya\",
        \"tw\": \"Inyetuwi\",
        \"ug\": \"Ikiwiguri\",
        \"uk\": \"Ikinyayukereni\",
        \"ur\": \"Inyeyurudu\",
        \"uz\": \"Inyeyuzubeki\",
        \"vi\": \"Ikinyaviyetinamu\",
        \"xh\": \"Inyehawusa\",
        \"yi\": \"Inyeyidishi\",
        \"zu\": \"Inyezulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/rw.json";
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
        \"af\": \"Ikinyafurikaneri\",
        \"am\": \"Inyamuhariki\",
        \"ar\": \"Icyarabu\",
        \"as\": \"Icyasamizi\",
        \"az\": \"Inyazeribayijani\",
        \"be\": \"Ikibelarusiya\",
        \"bg\": \"Urunyabuligariya\",
        \"bn\": \"Ikibengali\",
        \"br\": \"Inyebiritoni\",
        \"bs\": \"Inyebosiniya\",
        \"ca\": \"Igikatalani\",
        \"cs\": \"Igiceke\",
        \"cy\": \"Ikigaluwa\",
        \"da\": \"Ikidaninwa\",
        \"de\": \"Ikidage\",
        \"el\": \"Ikigereki\",
        \"en\": \"Icyongereza\",
        \"eo\": \"Icyesiperanto\",
        \"es\": \"Icyesipanyolo\",
        \"et\": \"Icyesitoniya\",
        \"eu\": \"Ikibasiki\",
        \"fa\": \"Inyeperisi\",
        \"fi\": \"Igifinilande\",
        \"fil\": \"Ikinyafilipine\",
        \"fo\": \"Inyefaroyizi\",
        \"fr\": \"Igifaransa\",
        \"fy\": \"Igifiriziyani\",
        \"ga\": \"Ikirilandi\",
        \"gd\": \"Ikigaluwa cy’Igisweduwa\",
        \"gl\": \"Ikigalisiya\",
        \"gn\": \"Inyaguwarani\",
        \"gu\": \"Inyegujarati\",
        \"he\": \"Igiheburayo\",
        \"hi\": \"Igihindi\",
        \"hr\": \"Igikorowasiya\",
        \"hu\": \"Igihongiriya\",
        \"hy\": \"Ikinyarumeniya\",
        \"ia\": \"Ururimi Gahuzamiryango\",
        \"id\": \"Ikinyendoziya\",
        \"ie\": \"Uruhuzandimi\",
        \"is\": \"Igisilande\",
        \"it\": \"Igitaliyani\",
        \"ja\": \"Ikiyapani\",
        \"jv\": \"Inyejava\",
        \"ka\": \"Inyejeworujiya\",
        \"km\": \"Igikambodiya\",
        \"kn\": \"Igikanada\",
        \"ko\": \"Igikoreya\",
        \"ku\": \"Inyekuridishi\",
        \"ky\": \"Inkerigizi\",
        \"la\": \"Ikilatini\",
        \"ln\": \"Ilingala\",
        \"lo\": \"Ikilawotiyani\",
        \"lt\": \"Ikilituwaniya\",
        \"lv\": \"Ikinyaletoviyani\",
        \"mk\": \"Ikimasedoniya\",
        \"ml\": \"Ikimalayalami\",
        \"mn\": \"Ikimongoli\",
        \"mr\": \"Ikimarati\",
        \"ms\": \"Ikimalayi\",
        \"mt\": \"Ikimaliteze\",
        \"ne\": \"Ikinepali\",
        \"nl\": \"Ikinerilande\",
        \"nn\": \"Inyenoruveji (Nyonorusiki)\",
        \"no\": \"Ikinoruveji\",
        \"oc\": \"Inyogusitani\",
        \"or\": \"Inyoriya\",
        \"pa\": \"Igipunjabi\",
        \"pl\": \"Igipolone\",
        \"ps\": \"Impashito\",
        \"pt\": \"Igiporutugali\",
        \"pt_BR\": \"Inyeporutigali (Brezili)\",
        \"pt_PT\": \"Inyeporutigali (Igiporutigali)\",
        \"ro\": \"Ikinyarumaniya\",
        \"ru\": \"Ikirusiya\",
        \"rw\": \"Kinyarwanda\",
        \"sa\": \"Igisansikiri\",
        \"sd\": \"Igisindi\",
        \"sh\": \"Inyeseribiya na Korowasiya\",
        \"si\": \"Inyesimpaleze\",
        \"sk\": \"Igisilovaki\",
        \"sl\": \"Ikinyasiloveniya\",
        \"so\": \"Igisomali\",
        \"sq\": \"Icyalubaniya\",
        \"sr\": \"Igiseribe\",
        \"st\": \"Inyesesoto\",
        \"su\": \"Inyesudani\",
        \"sv\": \"Igisuweduwa\",
        \"sw\": \"Igiswahili\",
        \"ta\": \"Igitamili\",
        \"te\": \"Igitelugu\",
        \"th\": \"Igitayi\",
        \"ti\": \"Inyatigirinya\",
        \"tk\": \"Inyeturukimeni\",
        \"tlh\": \"Inyekilingoni\",
        \"tr\": \"Igiturukiya\",
        \"tw\": \"Inyetuwi\",
        \"ug\": \"Ikiwiguri\",
        \"uk\": \"Ikinyayukereni\",
        \"ur\": \"Inyeyurudu\",
        \"uz\": \"Inyeyuzubeki\",
        \"vi\": \"Ikinyaviyetinamu\",
        \"xh\": \"Inyehawusa\",
        \"yi\": \"Inyeyidishi\",
        \"zu\": \"Inyezulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/rw.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/rw.json");
    }
}
