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

/* vendor/symfony/intl/Resources/data/languages/yo.json */
class __TwigTemplate_9adf9ed08184b13d1c0e35c8b409c4c800d9b46b5b60e940b044a5ae90b4e88a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/yo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/yo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"Èdè Afrikani\",
        \"ak\": \"Èdè Akani\",
        \"am\": \"Èdè Amariki\",
        \"ar\": \"Èdè Árábìkì\",
        \"as\": \"Ti Assam\",
        \"az\": \"Èdè Azerbaijani\",
        \"be\": \"Èdè Belarusi\",
        \"bg\": \"Èdè Bugaria\",
        \"bn\": \"Èdè Bengali\",
        \"br\": \"Èdè Bretoni\",
        \"bs\": \"Èdè Bosnia\",
        \"ca\": \"Èdè Catala\",
        \"cs\": \"Èdè seeki\",
        \"cy\": \"Èdè Welshi\",
        \"da\": \"Èdè Ilẹ̀ Denmark\",
        \"de\": \"Èdè Jámánì\",
        \"de_AT\": \"Èdè Jámánì (Ọ́síríà )\",
        \"de_CH\": \"Èdè Ilẹ̀ Jámánì (Orílẹ́ède swítsàlandì)\",
        \"el\": \"Èdè Giriki\",
        \"en\": \"Èdè Gẹ̀ẹ́sì\",
        \"en_AU\": \"Èdè Gẹ̀ẹ́sì (órílẹ̀-èdè Ọsirélíà)\",
        \"en_CA\": \"Èdè Gẹ̀ẹ́sì (Orílẹ̀-èdè Kánádà)\",
        \"en_GB\": \"Èdè òyìnbó Gẹ̀ẹ́sì\",
        \"eo\": \"Èdè Esperanto\",
        \"es\": \"Èdè Sípáníìṣì\",
        \"es_419\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Látìn-Amẹ́ríkà) ( Èdè Sípáníìshì (Látìn-Amẹ́ríkà)\",
        \"es_ES\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Yúróòpù)\",
        \"es_MX\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Mẹ́síkò)\",
        \"et\": \"Èdè Estonia\",
        \"eu\": \"Èdè Baski\",
        \"fa\": \"Èdè Pasia\",
        \"ff\": \"Èdè Fúlàní\",
        \"fi\": \"Èdè Finisi\",
        \"fil\": \"Èdè Filipino\",
        \"fo\": \"Èdè Faroesi\",
        \"fr\": \"Èdè Faransé\",
        \"fr_CA\": \"Èdè Faransé (orílẹ̀-èdè Kánádà)\",
        \"fr_CH\": \"Èdè Faranṣé (Súwísàlaǹdì)\",
        \"fy\": \"Èdè Frisia\",
        \"ga\": \"Èdè Ireland\",
        \"gd\": \"Èdè Gaelik ti Ilu Scotland\",
        \"gl\": \"Èdè Galicia\",
        \"gn\": \"Èdè Guarani\",
        \"gu\": \"Èdè Gujarati\",
        \"ha\": \"Èdè Hausa\",
        \"he\": \"Èdè Heberu\",
        \"hi\": \"Èdè Híńdì\",
        \"hr\": \"Èdè Kroatia\",
        \"hu\": \"Èdè Hungaria\",
        \"hy\": \"Èdè Ile Armenia\",
        \"ia\": \"Èdè pipo\",
        \"id\": \"Èdè Indonéṣíà\",
        \"ie\": \"Iru Èdè\",
        \"ig\": \"Èdè Yíbò\",
        \"is\": \"Èdè Icelandic\",
        \"it\": \"Èdè Ítálì\",
        \"ja\": \"Èdè Jàpáànù\",
        \"jv\": \"Èdè Javanasi\",
        \"ka\": \"Èdè Georgia\",
        \"km\": \"Èdè kameri\",
        \"kn\": \"Èdè Kannada\",
        \"ko\": \"Èdè Kòríà\",
        \"la\": \"Èdè Latini\",
        \"lt\": \"Èdè Lithuania\",
        \"lv\": \"Èdè Latvianu\",
        \"mk\": \"Èdè Macedonia\",
        \"mr\": \"Èdè marathi\",
        \"ms\": \"Èdè Malaya\",
        \"mt\": \"Èdè Malta\",
        \"my\": \"Èdè Bumiisi\",
        \"ne\": \"Èdè Nepali\",
        \"nl\": \"Èdè Dọ́ọ̀ṣì\",
        \"no\": \"Èdè Norway\",
        \"oc\": \"Èdè Occitani\",
        \"pa\": \"Èdè Punjabi\",
        \"pl\": \"Èdè Póláǹdì\",
        \"pt\": \"Èdè Pọtogí\",
        \"pt_BR\": \"Èdè Pọtogí (Orilẹ̀-èdè Bràsíl)\",
        \"pt_PT\": \"Èdè Pọtogí (orílẹ̀-èdè Yúróòpù)\",
        \"ro\": \"Èdè Romania\",
        \"ru\": \"Èdè Rọ́ṣíà\",
        \"rw\": \"Èdè Ruwanda\",
        \"sa\": \"Èdè awon ara Indo\",
        \"sd\": \"Èdè Sindhi\",
        \"sh\": \"Èdè Serbo-Croatiani\",
        \"si\": \"Èdè Sinhalese\",
        \"sk\": \"Èdè Slovaki\",
        \"sl\": \"Èdè Slovenia\",
        \"so\": \"Èdè ara Somalia\",
        \"sq\": \"Èdè Albania\",
        \"sr\": \"Èdè Serbia\",
        \"st\": \"Èdè Sesoto\",
        \"su\": \"Èdè Sudani\",
        \"sv\": \"Èdè Suwidiisi\",
        \"sw\": \"Èdè Swahili\",
        \"ta\": \"Èdè Tamili\",
        \"te\": \"Èdè Telugu\",
        \"th\": \"Èdè Tai\",
        \"ti\": \"Èdè Tigrinya\",
        \"tk\": \"Èdè Turkmen\",
        \"tlh\": \"Èdè Klingoni\",
        \"tr\": \"Èdè Tọọkisi\",
        \"uk\": \"Èdè Ukania\",
        \"ur\": \"Èdè Udu\",
        \"uz\": \"Èdè Uzbek\",
        \"vi\": \"Èdè Jetinamu\",
        \"xh\": \"Èdè Xhosa\",
        \"yi\": \"Èdè Yiddishi\",
        \"yo\": \"Èdè Yorùbá\",
        \"zh\": \"Èdè Mandarin tí wọ́n ń sọ lórílẹ̀-èdè Ṣáínà\",
        \"zu\": \"Èdè Ṣulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/yo.json";
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
        \"af\": \"Èdè Afrikani\",
        \"ak\": \"Èdè Akani\",
        \"am\": \"Èdè Amariki\",
        \"ar\": \"Èdè Árábìkì\",
        \"as\": \"Ti Assam\",
        \"az\": \"Èdè Azerbaijani\",
        \"be\": \"Èdè Belarusi\",
        \"bg\": \"Èdè Bugaria\",
        \"bn\": \"Èdè Bengali\",
        \"br\": \"Èdè Bretoni\",
        \"bs\": \"Èdè Bosnia\",
        \"ca\": \"Èdè Catala\",
        \"cs\": \"Èdè seeki\",
        \"cy\": \"Èdè Welshi\",
        \"da\": \"Èdè Ilẹ̀ Denmark\",
        \"de\": \"Èdè Jámánì\",
        \"de_AT\": \"Èdè Jámánì (Ọ́síríà )\",
        \"de_CH\": \"Èdè Ilẹ̀ Jámánì (Orílẹ́ède swítsàlandì)\",
        \"el\": \"Èdè Giriki\",
        \"en\": \"Èdè Gẹ̀ẹ́sì\",
        \"en_AU\": \"Èdè Gẹ̀ẹ́sì (órílẹ̀-èdè Ọsirélíà)\",
        \"en_CA\": \"Èdè Gẹ̀ẹ́sì (Orílẹ̀-èdè Kánádà)\",
        \"en_GB\": \"Èdè òyìnbó Gẹ̀ẹ́sì\",
        \"eo\": \"Èdè Esperanto\",
        \"es\": \"Èdè Sípáníìṣì\",
        \"es_419\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Látìn-Amẹ́ríkà) ( Èdè Sípáníìshì (Látìn-Amẹ́ríkà)\",
        \"es_ES\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Yúróòpù)\",
        \"es_MX\": \"Èdè Sípáníìṣì (orílẹ̀-èdè Mẹ́síkò)\",
        \"et\": \"Èdè Estonia\",
        \"eu\": \"Èdè Baski\",
        \"fa\": \"Èdè Pasia\",
        \"ff\": \"Èdè Fúlàní\",
        \"fi\": \"Èdè Finisi\",
        \"fil\": \"Èdè Filipino\",
        \"fo\": \"Èdè Faroesi\",
        \"fr\": \"Èdè Faransé\",
        \"fr_CA\": \"Èdè Faransé (orílẹ̀-èdè Kánádà)\",
        \"fr_CH\": \"Èdè Faranṣé (Súwísàlaǹdì)\",
        \"fy\": \"Èdè Frisia\",
        \"ga\": \"Èdè Ireland\",
        \"gd\": \"Èdè Gaelik ti Ilu Scotland\",
        \"gl\": \"Èdè Galicia\",
        \"gn\": \"Èdè Guarani\",
        \"gu\": \"Èdè Gujarati\",
        \"ha\": \"Èdè Hausa\",
        \"he\": \"Èdè Heberu\",
        \"hi\": \"Èdè Híńdì\",
        \"hr\": \"Èdè Kroatia\",
        \"hu\": \"Èdè Hungaria\",
        \"hy\": \"Èdè Ile Armenia\",
        \"ia\": \"Èdè pipo\",
        \"id\": \"Èdè Indonéṣíà\",
        \"ie\": \"Iru Èdè\",
        \"ig\": \"Èdè Yíbò\",
        \"is\": \"Èdè Icelandic\",
        \"it\": \"Èdè Ítálì\",
        \"ja\": \"Èdè Jàpáànù\",
        \"jv\": \"Èdè Javanasi\",
        \"ka\": \"Èdè Georgia\",
        \"km\": \"Èdè kameri\",
        \"kn\": \"Èdè Kannada\",
        \"ko\": \"Èdè Kòríà\",
        \"la\": \"Èdè Latini\",
        \"lt\": \"Èdè Lithuania\",
        \"lv\": \"Èdè Latvianu\",
        \"mk\": \"Èdè Macedonia\",
        \"mr\": \"Èdè marathi\",
        \"ms\": \"Èdè Malaya\",
        \"mt\": \"Èdè Malta\",
        \"my\": \"Èdè Bumiisi\",
        \"ne\": \"Èdè Nepali\",
        \"nl\": \"Èdè Dọ́ọ̀ṣì\",
        \"no\": \"Èdè Norway\",
        \"oc\": \"Èdè Occitani\",
        \"pa\": \"Èdè Punjabi\",
        \"pl\": \"Èdè Póláǹdì\",
        \"pt\": \"Èdè Pọtogí\",
        \"pt_BR\": \"Èdè Pọtogí (Orilẹ̀-èdè Bràsíl)\",
        \"pt_PT\": \"Èdè Pọtogí (orílẹ̀-èdè Yúróòpù)\",
        \"ro\": \"Èdè Romania\",
        \"ru\": \"Èdè Rọ́ṣíà\",
        \"rw\": \"Èdè Ruwanda\",
        \"sa\": \"Èdè awon ara Indo\",
        \"sd\": \"Èdè Sindhi\",
        \"sh\": \"Èdè Serbo-Croatiani\",
        \"si\": \"Èdè Sinhalese\",
        \"sk\": \"Èdè Slovaki\",
        \"sl\": \"Èdè Slovenia\",
        \"so\": \"Èdè ara Somalia\",
        \"sq\": \"Èdè Albania\",
        \"sr\": \"Èdè Serbia\",
        \"st\": \"Èdè Sesoto\",
        \"su\": \"Èdè Sudani\",
        \"sv\": \"Èdè Suwidiisi\",
        \"sw\": \"Èdè Swahili\",
        \"ta\": \"Èdè Tamili\",
        \"te\": \"Èdè Telugu\",
        \"th\": \"Èdè Tai\",
        \"ti\": \"Èdè Tigrinya\",
        \"tk\": \"Èdè Turkmen\",
        \"tlh\": \"Èdè Klingoni\",
        \"tr\": \"Èdè Tọọkisi\",
        \"uk\": \"Èdè Ukania\",
        \"ur\": \"Èdè Udu\",
        \"uz\": \"Èdè Uzbek\",
        \"vi\": \"Èdè Jetinamu\",
        \"xh\": \"Èdè Xhosa\",
        \"yi\": \"Èdè Yiddishi\",
        \"yo\": \"Èdè Yorùbá\",
        \"zh\": \"Èdè Mandarin tí wọ́n ń sọ lórílẹ̀-èdè Ṣáínà\",
        \"zu\": \"Èdè Ṣulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/yo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/yo.json");
    }
}
