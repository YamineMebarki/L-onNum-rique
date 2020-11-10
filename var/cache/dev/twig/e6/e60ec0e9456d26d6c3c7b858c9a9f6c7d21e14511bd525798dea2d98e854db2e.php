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

/* vendor/symfony/intl/Resources/data/languages/wo.json */
class __TwigTemplate_70a6b6bc1b0b27775a35f6dca799c3e241ec6b6ce2b2de661d7b68c0e4cd21fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/wo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/wo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"Afrikaans\",
        \"am\": \"Amharik\",
        \"ar\": \"Araab\",
        \"as\": \"Asame\",
        \"az\": \"Aserbayjane\",
        \"ba\": \"Baskir\",
        \"ban\": \"Bali\",
        \"be\": \"Belaris\",
        \"bem\": \"Bemba\",
        \"bg\": \"Bilgaar\",
        \"bn\": \"Baŋla\",
        \"bo\": \"Tibetan\",
        \"br\": \"Breton\",
        \"bs\": \"Bosñak\",
        \"ca\": \"Katalan\",
        \"ceb\": \"Sibiyanoo\",
        \"chm\": \"Mari\",
        \"chr\": \"Ceroki\",
        \"ckb\": \"Kurdi gu Diggu\",
        \"co\": \"Kors\",
        \"cs\": \"Cek\",
        \"cy\": \"Wels\",
        \"da\": \"Danuwa\",
        \"de\": \"Almaa\",
        \"dsb\": \"Sorab-Suuf\",
        \"dv\": \"Diweyi\",
        \"dz\": \"Dsongkaa\",
        \"el\": \"Gereg\",
        \"en\": \"Àngale\",
        \"eo\": \"Esperantoo\",
        \"es\": \"Español\",
        \"es_419\": \"Español (Amerik Latin)\",
        \"et\": \"Estoñiye\",
        \"eu\": \"Bask\",
        \"fa\": \"Pers\",
        \"ff\": \"Pël\",
        \"fi\": \"Feylànde\",
        \"fil\": \"Filipiye\",
        \"fo\": \"Feroos\",
        \"fr\": \"Farañse\",
        \"ga\": \"Irlànde\",
        \"gd\": \"Galuwaa bu Ekos\",
        \"gl\": \"Galisiye\",
        \"gn\": \"Garani\",
        \"gu\": \"Gujarati\",
        \"ha\": \"Hawsa\",
        \"haw\": \"Hawaye\",
        \"he\": \"Ebrë\",
        \"hi\": \"Endo\",
        \"hil\": \"Hiligaynon\",
        \"hr\": \"Krowat\",
        \"hsb\": \"Sorab-Kaw\",
        \"ht\": \"Kereyolu Ayti\",
        \"hu\": \"Ongruwaa\",
        \"hy\": \"Armaniye\",
        \"hz\": \"Herero\",
        \"ibb\": \"Ibibiyo\",
        \"id\": \"Endonesiye\",
        \"ig\": \"Igbo\",
        \"is\": \"Islànde\",
        \"it\": \"Italiye\",
        \"iu\": \"Inuktitit\",
        \"ja\": \"Sapone\",
        \"ka\": \"Sorsiye\",
        \"kk\": \"Kasax\",
        \"km\": \"Xmer\",
        \"kn\": \"Kannadaa\",
        \"ko\": \"Koreye\",
        \"kok\": \"Konkani\",
        \"kr\": \"Kanuri\",
        \"kru\": \"Kuruks\",
        \"ks\": \"Kashmiri\",
        \"ku\": \"Kurdi\",
        \"ky\": \"Kirgiis\",
        \"la\": \"Latin\",
        \"lb\": \"Liksàmbursuwaa\",
        \"lo\": \"Laaw\",
        \"lt\": \"Lituyaniye\",
        \"lv\": \"Letoniye\",
        \"men\": \"Mende\",
        \"mg\": \"Malagasi\",
        \"mi\": \"Mawri\",
        \"mk\": \"Maseduwaane\",
        \"ml\": \"Malayalam\",
        \"mn\": \"Mongoliye\",
        \"mni\": \"Manipuri\",
        \"moh\": \"Mowak\",
        \"mr\": \"Marati\",
        \"ms\": \"Malay\",
        \"mt\": \"Malt\",
        \"my\": \"Birmes\",
        \"ne\": \"Nepale\",
        \"niu\": \"Niweyan\",
        \"nl\": \"Neyerlànde\",
        \"no\": \"Nerwesiye\",
        \"ny\": \"Sewa\",
        \"oc\": \"Ositan\",
        \"om\": \"Oromo\",
        \"or\": \"Oja\",
        \"pa\": \"Punjabi\",
        \"pap\": \"Papiyamento\",
        \"pl\": \"Polone\",
        \"ps\": \"Pasto\",
        \"pt\": \"Purtugees\",
        \"qu\": \"Kesuwa\",
        \"quc\": \"Kishe\",
        \"rm\": \"Romaas\",
        \"ro\": \"Rumaniyee\",
        \"ru\": \"Rus\",
        \"rw\": \"Kinyarwànda\",
        \"sa\": \"Sanskrit\",
        \"sah\": \"Saxa\",
        \"sat\": \"Santali\",
        \"sd\": \"Sindi\",
        \"se\": \"Penku Sami\",
        \"si\": \"Sinala\",
        \"sk\": \"Eslowaki (Eslowak)\",
        \"sl\": \"Esloweniye\",
        \"sma\": \"Sami gu Saalum\",
        \"smj\": \"Lule Sami\",
        \"smn\": \"Inari Sami\",
        \"sms\": \"Eskolt Sami\",
        \"so\": \"Somali (làkk)\",
        \"sq\": \"Albane\",
        \"sr\": \"Serb\",
        \"sv\": \"Suweduwaa\",
        \"syr\": \"Siryak\",
        \"ta\": \"Tamil\",
        \"te\": \"Telugu\",
        \"tg\": \"Tajis\",
        \"th\": \"Tay\",
        \"ti\": \"Tigriña\",
        \"tk\": \"Tirkmen\",
        \"to\": \"Tongan\",
        \"tr\": \"Tirk\",
        \"tt\": \"Tatar\",
        \"tzm\": \"Tamasis gu Digg Atlaas\",
        \"ug\": \"Uygur\",
        \"uk\": \"Ikreniye\",
        \"ur\": \"Urdu\",
        \"uz\": \"Usbek\",
        \"ve\": \"Wenda\",
        \"vi\": \"Wiyetnaamiye\",
        \"wo\": \"Wolof\",
        \"yi\": \"Yidis\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Sinuwaa\",
        \"zh_Hans\": \"Sinuwaa buñ woyofal\",
        \"zh_Hant\": \"Sinuwaa bu cosaan\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/wo.json";
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
        \"af\": \"Afrikaans\",
        \"am\": \"Amharik\",
        \"ar\": \"Araab\",
        \"as\": \"Asame\",
        \"az\": \"Aserbayjane\",
        \"ba\": \"Baskir\",
        \"ban\": \"Bali\",
        \"be\": \"Belaris\",
        \"bem\": \"Bemba\",
        \"bg\": \"Bilgaar\",
        \"bn\": \"Baŋla\",
        \"bo\": \"Tibetan\",
        \"br\": \"Breton\",
        \"bs\": \"Bosñak\",
        \"ca\": \"Katalan\",
        \"ceb\": \"Sibiyanoo\",
        \"chm\": \"Mari\",
        \"chr\": \"Ceroki\",
        \"ckb\": \"Kurdi gu Diggu\",
        \"co\": \"Kors\",
        \"cs\": \"Cek\",
        \"cy\": \"Wels\",
        \"da\": \"Danuwa\",
        \"de\": \"Almaa\",
        \"dsb\": \"Sorab-Suuf\",
        \"dv\": \"Diweyi\",
        \"dz\": \"Dsongkaa\",
        \"el\": \"Gereg\",
        \"en\": \"Àngale\",
        \"eo\": \"Esperantoo\",
        \"es\": \"Español\",
        \"es_419\": \"Español (Amerik Latin)\",
        \"et\": \"Estoñiye\",
        \"eu\": \"Bask\",
        \"fa\": \"Pers\",
        \"ff\": \"Pël\",
        \"fi\": \"Feylànde\",
        \"fil\": \"Filipiye\",
        \"fo\": \"Feroos\",
        \"fr\": \"Farañse\",
        \"ga\": \"Irlànde\",
        \"gd\": \"Galuwaa bu Ekos\",
        \"gl\": \"Galisiye\",
        \"gn\": \"Garani\",
        \"gu\": \"Gujarati\",
        \"ha\": \"Hawsa\",
        \"haw\": \"Hawaye\",
        \"he\": \"Ebrë\",
        \"hi\": \"Endo\",
        \"hil\": \"Hiligaynon\",
        \"hr\": \"Krowat\",
        \"hsb\": \"Sorab-Kaw\",
        \"ht\": \"Kereyolu Ayti\",
        \"hu\": \"Ongruwaa\",
        \"hy\": \"Armaniye\",
        \"hz\": \"Herero\",
        \"ibb\": \"Ibibiyo\",
        \"id\": \"Endonesiye\",
        \"ig\": \"Igbo\",
        \"is\": \"Islànde\",
        \"it\": \"Italiye\",
        \"iu\": \"Inuktitit\",
        \"ja\": \"Sapone\",
        \"ka\": \"Sorsiye\",
        \"kk\": \"Kasax\",
        \"km\": \"Xmer\",
        \"kn\": \"Kannadaa\",
        \"ko\": \"Koreye\",
        \"kok\": \"Konkani\",
        \"kr\": \"Kanuri\",
        \"kru\": \"Kuruks\",
        \"ks\": \"Kashmiri\",
        \"ku\": \"Kurdi\",
        \"ky\": \"Kirgiis\",
        \"la\": \"Latin\",
        \"lb\": \"Liksàmbursuwaa\",
        \"lo\": \"Laaw\",
        \"lt\": \"Lituyaniye\",
        \"lv\": \"Letoniye\",
        \"men\": \"Mende\",
        \"mg\": \"Malagasi\",
        \"mi\": \"Mawri\",
        \"mk\": \"Maseduwaane\",
        \"ml\": \"Malayalam\",
        \"mn\": \"Mongoliye\",
        \"mni\": \"Manipuri\",
        \"moh\": \"Mowak\",
        \"mr\": \"Marati\",
        \"ms\": \"Malay\",
        \"mt\": \"Malt\",
        \"my\": \"Birmes\",
        \"ne\": \"Nepale\",
        \"niu\": \"Niweyan\",
        \"nl\": \"Neyerlànde\",
        \"no\": \"Nerwesiye\",
        \"ny\": \"Sewa\",
        \"oc\": \"Ositan\",
        \"om\": \"Oromo\",
        \"or\": \"Oja\",
        \"pa\": \"Punjabi\",
        \"pap\": \"Papiyamento\",
        \"pl\": \"Polone\",
        \"ps\": \"Pasto\",
        \"pt\": \"Purtugees\",
        \"qu\": \"Kesuwa\",
        \"quc\": \"Kishe\",
        \"rm\": \"Romaas\",
        \"ro\": \"Rumaniyee\",
        \"ru\": \"Rus\",
        \"rw\": \"Kinyarwànda\",
        \"sa\": \"Sanskrit\",
        \"sah\": \"Saxa\",
        \"sat\": \"Santali\",
        \"sd\": \"Sindi\",
        \"se\": \"Penku Sami\",
        \"si\": \"Sinala\",
        \"sk\": \"Eslowaki (Eslowak)\",
        \"sl\": \"Esloweniye\",
        \"sma\": \"Sami gu Saalum\",
        \"smj\": \"Lule Sami\",
        \"smn\": \"Inari Sami\",
        \"sms\": \"Eskolt Sami\",
        \"so\": \"Somali (làkk)\",
        \"sq\": \"Albane\",
        \"sr\": \"Serb\",
        \"sv\": \"Suweduwaa\",
        \"syr\": \"Siryak\",
        \"ta\": \"Tamil\",
        \"te\": \"Telugu\",
        \"tg\": \"Tajis\",
        \"th\": \"Tay\",
        \"ti\": \"Tigriña\",
        \"tk\": \"Tirkmen\",
        \"to\": \"Tongan\",
        \"tr\": \"Tirk\",
        \"tt\": \"Tatar\",
        \"tzm\": \"Tamasis gu Digg Atlaas\",
        \"ug\": \"Uygur\",
        \"uk\": \"Ikreniye\",
        \"ur\": \"Urdu\",
        \"uz\": \"Usbek\",
        \"ve\": \"Wenda\",
        \"vi\": \"Wiyetnaamiye\",
        \"wo\": \"Wolof\",
        \"yi\": \"Yidis\",
        \"yo\": \"Yoruba\",
        \"zh\": \"Sinuwaa\",
        \"zh_Hans\": \"Sinuwaa buñ woyofal\",
        \"zh_Hant\": \"Sinuwaa bu cosaan\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/wo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/wo.json");
    }
}
