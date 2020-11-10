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

/* vendor/symfony/intl/Resources/data/scripts/nn.json */
class __TwigTemplate_8abbcc9c4c334dedb0d4e91971b719d558c3a3f433ea36f702d0f938e95c5ffb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/nn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/nn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabisk\",
        \"Armi\": \"armisk\",
        \"Armn\": \"armensk\",
        \"Avst\": \"avestisk\",
        \"Bali\": \"balinesisk\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalsk\",
        \"Blis\": \"blissymbol\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"punktskrift\",
        \"Bugi\": \"buginesisk\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"felles kanadiske urspråksstavingar\",
        \"Cari\": \"karisk\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptisk\",
        \"Cprt\": \"kypriotisk\",
        \"Cyrl\": \"kyrillisk\",
        \"Cyrs\": \"kyrillisk (kyrkjeslavisk variant)\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egyptisk demotisk\",
        \"Egyh\": \"egyptisk hieratisk\",
        \"Egyp\": \"egyptiske hieroglyfar\",
        \"Ethi\": \"etiopisk\",
        \"Geok\": \"khutsuri (asomtavruli og nuskhuri)\",
        \"Geor\": \"georgisk\",
        \"Glag\": \"glagolittisk\",
        \"Goth\": \"gotisk\",
        \"Grek\": \"gresk\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han med bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"forenkla\",
        \"Hant\": \"tradisjonell\",
        \"Hebr\": \"hebraisk\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawk hmong\",
        \"Hrkt\": \"japansk stavingsskrifter\",
        \"Hung\": \"gammalungarsk\",
        \"Inds\": \"indus\",
        \"Ital\": \"gammalitalisk\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanesisk\",
        \"Jpan\": \"japansk\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreansk\",
        \"Kthi\": \"kaithisk\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotisk\",
        \"Latf\": \"latinsk (frakturvariant)\",
        \"Latg\": \"latinsk (gælisk variant)\",
        \"Latn\": \"latinsk\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"lumbu\",
        \"Lina\": \"lineær A\",
        \"Linb\": \"lineær B\",
        \"Lyci\": \"lykisk\",
        \"Lydi\": \"lydisk\",
        \"Mand\": \"mandaisk\",
        \"Mani\": \"manikeisk\",
        \"Maya\": \"maya-hieroglyfar\",
        \"Mero\": \"meroitisk\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolsk\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei-mayek\",
        \"Mymr\": \"burmesisk\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol-chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"gammalpermisk\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskripsjonspahlavi\",
        \"Phlp\": \"salmepahlavi\",
        \"Phlv\": \"pahlavi\",
        \"Phnx\": \"fønikisk\",
        \"Plrd\": \"pollard-fonetisk\",
        \"Prti\": \"inskripsjonsparthisk\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runer\",
        \"Samr\": \"samaritansk\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"teiknskrift\",
        \"Shaw\": \"shavisk\",
        \"Sinh\": \"singalesisk\",
        \"Sund\": \"sundanesisk\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syriakisk\",
        \"Syre\": \"syriakisk (estrangelo-variant)\",
        \"Syrj\": \"syriakisk (vestleg variant)\",
        \"Syrn\": \"syriakisk (austleg variant)\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"ny tai lue\",
        \"Taml\": \"tamilsk\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetansk\",
        \"Ugar\": \"ugaritisk\",
        \"Vaii\": \"vai\",
        \"Visp\": \"synleg tale\",
        \"Xpeo\": \"gammalpersisk\",
        \"Xsux\": \"sumero-akkadisk kileskrift\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"nedarva\",
        \"Zmth\": \"matematisk notasjon\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbol\",
        \"Zxxx\": \"språk utan skrift\",
        \"Zyyy\": \"felles\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/nn.json";
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
        \"Arab\": \"arabisk\",
        \"Armi\": \"armisk\",
        \"Armn\": \"armensk\",
        \"Avst\": \"avestisk\",
        \"Bali\": \"balinesisk\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalsk\",
        \"Blis\": \"blissymbol\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"punktskrift\",
        \"Bugi\": \"buginesisk\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"felles kanadiske urspråksstavingar\",
        \"Cari\": \"karisk\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptisk\",
        \"Cprt\": \"kypriotisk\",
        \"Cyrl\": \"kyrillisk\",
        \"Cyrs\": \"kyrillisk (kyrkjeslavisk variant)\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egyptisk demotisk\",
        \"Egyh\": \"egyptisk hieratisk\",
        \"Egyp\": \"egyptiske hieroglyfar\",
        \"Ethi\": \"etiopisk\",
        \"Geok\": \"khutsuri (asomtavruli og nuskhuri)\",
        \"Geor\": \"georgisk\",
        \"Glag\": \"glagolittisk\",
        \"Goth\": \"gotisk\",
        \"Grek\": \"gresk\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han med bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"forenkla\",
        \"Hant\": \"tradisjonell\",
        \"Hebr\": \"hebraisk\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawk hmong\",
        \"Hrkt\": \"japansk stavingsskrifter\",
        \"Hung\": \"gammalungarsk\",
        \"Inds\": \"indus\",
        \"Ital\": \"gammalitalisk\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanesisk\",
        \"Jpan\": \"japansk\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreansk\",
        \"Kthi\": \"kaithisk\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotisk\",
        \"Latf\": \"latinsk (frakturvariant)\",
        \"Latg\": \"latinsk (gælisk variant)\",
        \"Latn\": \"latinsk\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"lumbu\",
        \"Lina\": \"lineær A\",
        \"Linb\": \"lineær B\",
        \"Lyci\": \"lykisk\",
        \"Lydi\": \"lydisk\",
        \"Mand\": \"mandaisk\",
        \"Mani\": \"manikeisk\",
        \"Maya\": \"maya-hieroglyfar\",
        \"Mero\": \"meroitisk\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolsk\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei-mayek\",
        \"Mymr\": \"burmesisk\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol-chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"gammalpermisk\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskripsjonspahlavi\",
        \"Phlp\": \"salmepahlavi\",
        \"Phlv\": \"pahlavi\",
        \"Phnx\": \"fønikisk\",
        \"Plrd\": \"pollard-fonetisk\",
        \"Prti\": \"inskripsjonsparthisk\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runer\",
        \"Samr\": \"samaritansk\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"teiknskrift\",
        \"Shaw\": \"shavisk\",
        \"Sinh\": \"singalesisk\",
        \"Sund\": \"sundanesisk\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syriakisk\",
        \"Syre\": \"syriakisk (estrangelo-variant)\",
        \"Syrj\": \"syriakisk (vestleg variant)\",
        \"Syrn\": \"syriakisk (austleg variant)\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"ny tai lue\",
        \"Taml\": \"tamilsk\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetansk\",
        \"Ugar\": \"ugaritisk\",
        \"Vaii\": \"vai\",
        \"Visp\": \"synleg tale\",
        \"Xpeo\": \"gammalpersisk\",
        \"Xsux\": \"sumero-akkadisk kileskrift\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"nedarva\",
        \"Zmth\": \"matematisk notasjon\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbol\",
        \"Zxxx\": \"språk utan skrift\",
        \"Zyyy\": \"felles\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/nn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/nn.json");
    }
}
