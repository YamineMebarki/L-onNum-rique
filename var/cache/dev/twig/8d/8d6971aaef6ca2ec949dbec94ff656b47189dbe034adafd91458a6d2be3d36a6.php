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

/* vendor/symfony/intl/Resources/data/scripts/es.json */
class __TwigTemplate_6cbf187388f251e78b065619115dd4bcab49c9fb6f417c5ce4df967a86cfbf25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/es.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/es.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"árabe\",
        \"Armn\": \"armenio\",
        \"Avst\": \"avéstico\",
        \"Bali\": \"balinés\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalí\",
        \"Blis\": \"símbolos blis\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"braille\",
        \"Bugi\": \"buginés\",
        \"Buhd\": \"buhid\",
        \"Cans\": \"silabarios aborígenes canadienses unificados\",
        \"Cari\": \"cario\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"copto\",
        \"Cprt\": \"chipriota\",
        \"Cyrl\": \"cirílico\",
        \"Cyrs\": \"cirílico del antiguo eslavo eclesiástico\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipcio demótico\",
        \"Egyh\": \"egipcio hierático\",
        \"Egyp\": \"jeroglíficos egipcios\",
        \"Ethi\": \"etiópico\",
        \"Geok\": \"georgiano eclesiástico\",
        \"Geor\": \"georgiano\",
        \"Glag\": \"glagolítico\",
        \"Goth\": \"gótico\",
        \"Grek\": \"griego\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmuji\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebreo\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"silabarios japoneses\",
        \"Hung\": \"húngaro antiguo\",
        \"Inds\": \"Indio (harappan)\",
        \"Ital\": \"antigua bastardilla\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanés\",
        \"Jpan\": \"japonés\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharosthi\",
        \"Khmr\": \"jemer\",
        \"Knda\": \"canarés\",
        \"Kore\": \"coreano\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laosiano\",
        \"Latf\": \"latino fraktur\",
        \"Latg\": \"latino gaélico\",
        \"Latn\": \"latino\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineal A\",
        \"Linb\": \"lineal B\",
        \"Lyci\": \"licio\",
        \"Lydi\": \"lidio\",
        \"Mand\": \"mandeo\",
        \"Maya\": \"jeroglíficos mayas\",
        \"Mero\": \"meroítico\",
        \"Mlym\": \"malayálam\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"manipuri\",
        \"Mymr\": \"birmano\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol ciki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osmaniya\",
        \"Perm\": \"permiano antiguo\",
        \"Phag\": \"phags-pa\",
        \"Phnx\": \"fenicio\",
        \"Plrd\": \"Pollard Miao\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongo-rongo\",
        \"Runr\": \"rúnico\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"shaviano\",
        \"Sinh\": \"cingalés\",
        \"Sund\": \"sundanés\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siriaco\",
        \"Syre\": \"siriaco estrangelo\",
        \"Syrj\": \"siriaco occidental\",
        \"Syrn\": \"siriaco oriental\",
        \"Tagb\": \"tagbanúa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"nuevo tai lue\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalo\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandés\",
        \"Tibt\": \"tibetano\",
        \"Ugar\": \"ugarítico\",
        \"Vaii\": \"vai\",
        \"Visp\": \"lenguaje visible\",
        \"Xpeo\": \"persa antiguo\",
        \"Xsux\": \"cuneiforme sumerio-acadio\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"heredado\",
        \"Zmth\": \"notación matemática\",
        \"Zsye\": \"emojis\",
        \"Zsym\": \"símbolos\",
        \"Zxxx\": \"no escrito\",
        \"Zyyy\": \"común\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/es.json";
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
        \"Arab\": \"árabe\",
        \"Armn\": \"armenio\",
        \"Avst\": \"avéstico\",
        \"Bali\": \"balinés\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalí\",
        \"Blis\": \"símbolos blis\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"braille\",
        \"Bugi\": \"buginés\",
        \"Buhd\": \"buhid\",
        \"Cans\": \"silabarios aborígenes canadienses unificados\",
        \"Cari\": \"cario\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"copto\",
        \"Cprt\": \"chipriota\",
        \"Cyrl\": \"cirílico\",
        \"Cyrs\": \"cirílico del antiguo eslavo eclesiástico\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipcio demótico\",
        \"Egyh\": \"egipcio hierático\",
        \"Egyp\": \"jeroglíficos egipcios\",
        \"Ethi\": \"etiópico\",
        \"Geok\": \"georgiano eclesiástico\",
        \"Geor\": \"georgiano\",
        \"Glag\": \"glagolítico\",
        \"Goth\": \"gótico\",
        \"Grek\": \"griego\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmuji\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebreo\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"silabarios japoneses\",
        \"Hung\": \"húngaro antiguo\",
        \"Inds\": \"Indio (harappan)\",
        \"Ital\": \"antigua bastardilla\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanés\",
        \"Jpan\": \"japonés\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharosthi\",
        \"Khmr\": \"jemer\",
        \"Knda\": \"canarés\",
        \"Kore\": \"coreano\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laosiano\",
        \"Latf\": \"latino fraktur\",
        \"Latg\": \"latino gaélico\",
        \"Latn\": \"latino\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineal A\",
        \"Linb\": \"lineal B\",
        \"Lyci\": \"licio\",
        \"Lydi\": \"lidio\",
        \"Mand\": \"mandeo\",
        \"Maya\": \"jeroglíficos mayas\",
        \"Mero\": \"meroítico\",
        \"Mlym\": \"malayálam\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"manipuri\",
        \"Mymr\": \"birmano\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol ciki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osmaniya\",
        \"Perm\": \"permiano antiguo\",
        \"Phag\": \"phags-pa\",
        \"Phnx\": \"fenicio\",
        \"Plrd\": \"Pollard Miao\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongo-rongo\",
        \"Runr\": \"rúnico\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"shaviano\",
        \"Sinh\": \"cingalés\",
        \"Sund\": \"sundanés\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siriaco\",
        \"Syre\": \"siriaco estrangelo\",
        \"Syrj\": \"siriaco occidental\",
        \"Syrn\": \"siriaco oriental\",
        \"Tagb\": \"tagbanúa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"nuevo tai lue\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalo\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandés\",
        \"Tibt\": \"tibetano\",
        \"Ugar\": \"ugarítico\",
        \"Vaii\": \"vai\",
        \"Visp\": \"lenguaje visible\",
        \"Xpeo\": \"persa antiguo\",
        \"Xsux\": \"cuneiforme sumerio-acadio\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"heredado\",
        \"Zmth\": \"notación matemática\",
        \"Zsye\": \"emojis\",
        \"Zsym\": \"símbolos\",
        \"Zxxx\": \"no escrito\",
        \"Zyyy\": \"común\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/es.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/es.json");
    }
}
