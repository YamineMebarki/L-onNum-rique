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

/* vendor/symfony/intl/Resources/data/scripts/pt.json */
class __TwigTemplate_b1d7b10bc680590a94491537ad28f4982733521b72278b0ae6f153f55b679d40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pt.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"árabe\",
        \"Armi\": \"armi\",
        \"Armn\": \"armênio\",
        \"Avst\": \"avéstico\",
        \"Bali\": \"balinês\",
        \"Bamu\": \"bamum\",
        \"Batk\": \"bataque\",
        \"Beng\": \"bengali\",
        \"Blis\": \"símbolos bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"braille\",
        \"Bugi\": \"buginês\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"cakm\",
        \"Cans\": \"escrita silábica unificada dos aborígenes canadenses\",
        \"Cari\": \"cariano\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"cóptico\",
        \"Cprt\": \"cipriota\",
        \"Cyrl\": \"cirílico\",
        \"Cyrs\": \"cirílico eslavo eclesiástico\",
        \"Deva\": \"devanágari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"demótico egípcio\",
        \"Egyh\": \"hierático egípcio\",
        \"Egyp\": \"hieróglifos egípcios\",
        \"Ethi\": \"etiópico\",
        \"Geok\": \"khutsuri georgiano\",
        \"Geor\": \"georgiano\",
        \"Glag\": \"glagolítico\",
        \"Goth\": \"gótico\",
        \"Grek\": \"grego\",
        \"Gujr\": \"guzerate\",
        \"Guru\": \"gurmuqui\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebraico\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"silabários japoneses\",
        \"Hung\": \"húngaro antigo\",
        \"Inds\": \"indo\",
        \"Ital\": \"itálico antigo\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanês\",
        \"Jpan\": \"japonês\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"coreano\",
        \"Kthi\": \"kthi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"latim fraktur\",
        \"Latg\": \"latim gaélico\",
        \"Latn\": \"latim\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linear A\",
        \"Linb\": \"linear B\",
        \"Lisu\": \"lisu\",
        \"Lyci\": \"lício\",
        \"Lydi\": \"lídio\",
        \"Mand\": \"mandaico\",
        \"Mani\": \"maniqueano\",
        \"Maya\": \"hieróglifos maias\",
        \"Merc\": \"meroítico cursivo\",
        \"Mero\": \"meroítico\",
        \"Mlym\": \"malaiala\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birmanês\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogâmico\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriá\",
        \"Osma\": \"osmania\",
        \"Perm\": \"pérmico antigo\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"phli\",
        \"Phlp\": \"phlp\",
        \"Phlv\": \"pahlavi antigo\",
        \"Phnx\": \"fenício\",
        \"Plrd\": \"fonético pollard\",
        \"Prti\": \"prti\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"rúnico\",
        \"Samr\": \"samaritano\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"signwriting\",
        \"Shaw\": \"shaviano\",
        \"Sinh\": \"cingalês\",
        \"Sund\": \"sundanês\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siríaco\",
        \"Syre\": \"siríaco estrangelo\",
        \"Syrj\": \"siríaco ocidental\",
        \"Syrn\": \"siríaco oriental\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai Le\",
        \"Talu\": \"novo tai lue\",
        \"Taml\": \"tâmil\",
        \"Tavt\": \"tavt\",
        \"Telu\": \"télugo\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalo\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandês\",
        \"Tibt\": \"tibetano\",
        \"Ugar\": \"ugarítico\",
        \"Vaii\": \"vai\",
        \"Visp\": \"visible speech\",
        \"Xpeo\": \"persa antigo\",
        \"Xsux\": \"sumério-acadiano cuneiforme\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"herdado\",
        \"Zmth\": \"notação matemática\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"zsym\",
        \"Zxxx\": \"ágrafo\",
        \"Zyyy\": \"comum\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/pt.json";
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
        \"Armi\": \"armi\",
        \"Armn\": \"armênio\",
        \"Avst\": \"avéstico\",
        \"Bali\": \"balinês\",
        \"Bamu\": \"bamum\",
        \"Batk\": \"bataque\",
        \"Beng\": \"bengali\",
        \"Blis\": \"símbolos bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"braille\",
        \"Bugi\": \"buginês\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"cakm\",
        \"Cans\": \"escrita silábica unificada dos aborígenes canadenses\",
        \"Cari\": \"cariano\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"cóptico\",
        \"Cprt\": \"cipriota\",
        \"Cyrl\": \"cirílico\",
        \"Cyrs\": \"cirílico eslavo eclesiástico\",
        \"Deva\": \"devanágari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"demótico egípcio\",
        \"Egyh\": \"hierático egípcio\",
        \"Egyp\": \"hieróglifos egípcios\",
        \"Ethi\": \"etiópico\",
        \"Geok\": \"khutsuri georgiano\",
        \"Geor\": \"georgiano\",
        \"Glag\": \"glagolítico\",
        \"Goth\": \"gótico\",
        \"Grek\": \"grego\",
        \"Gujr\": \"guzerate\",
        \"Guru\": \"gurmuqui\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebraico\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"silabários japoneses\",
        \"Hung\": \"húngaro antigo\",
        \"Inds\": \"indo\",
        \"Ital\": \"itálico antigo\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanês\",
        \"Jpan\": \"japonês\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"coreano\",
        \"Kthi\": \"kthi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"latim fraktur\",
        \"Latg\": \"latim gaélico\",
        \"Latn\": \"latim\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linear A\",
        \"Linb\": \"linear B\",
        \"Lisu\": \"lisu\",
        \"Lyci\": \"lício\",
        \"Lydi\": \"lídio\",
        \"Mand\": \"mandaico\",
        \"Mani\": \"maniqueano\",
        \"Maya\": \"hieróglifos maias\",
        \"Merc\": \"meroítico cursivo\",
        \"Mero\": \"meroítico\",
        \"Mlym\": \"malaiala\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birmanês\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogâmico\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriá\",
        \"Osma\": \"osmania\",
        \"Perm\": \"pérmico antigo\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"phli\",
        \"Phlp\": \"phlp\",
        \"Phlv\": \"pahlavi antigo\",
        \"Phnx\": \"fenício\",
        \"Plrd\": \"fonético pollard\",
        \"Prti\": \"prti\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"rúnico\",
        \"Samr\": \"samaritano\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"signwriting\",
        \"Shaw\": \"shaviano\",
        \"Sinh\": \"cingalês\",
        \"Sund\": \"sundanês\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siríaco\",
        \"Syre\": \"siríaco estrangelo\",
        \"Syrj\": \"siríaco ocidental\",
        \"Syrn\": \"siríaco oriental\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai Le\",
        \"Talu\": \"novo tai lue\",
        \"Taml\": \"tâmil\",
        \"Tavt\": \"tavt\",
        \"Telu\": \"télugo\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalo\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandês\",
        \"Tibt\": \"tibetano\",
        \"Ugar\": \"ugarítico\",
        \"Vaii\": \"vai\",
        \"Visp\": \"visible speech\",
        \"Xpeo\": \"persa antigo\",
        \"Xsux\": \"sumério-acadiano cuneiforme\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"herdado\",
        \"Zmth\": \"notação matemática\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"zsym\",
        \"Zxxx\": \"ágrafo\",
        \"Zyyy\": \"comum\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/pt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/pt.json");
    }
}
