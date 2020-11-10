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

/* vendor/symfony/intl/Resources/data/scripts/nb.json */
class __TwigTemplate_2c5a12cc0b23f8ec6d51c33aadc28c8329a7a4fd6fa75904a512b796762bea46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/nb.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/nb.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"afaka\",
        \"Aghb\": \"kaukasus-albansk\",
        \"Ahom\": \"ahom\",
        \"Arab\": \"arabisk\",
        \"Armi\": \"arameisk\",
        \"Armn\": \"armensk\",
        \"Avst\": \"avestisk\",
        \"Bali\": \"balinesisk\",
        \"Bamu\": \"bamum\",
        \"Bass\": \"bassa vah\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalsk\",
        \"Blis\": \"blissymbol\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"punktskrift\",
        \"Bugi\": \"buginesisk\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"felles kanadiske urspråksstavelser\",
        \"Cari\": \"karisk\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptisk\",
        \"Cprt\": \"kypriotisk\",
        \"Cyrl\": \"kyrillisk\",
        \"Cyrs\": \"kirkeslavisk kyrillisk\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Dupl\": \"duployan stenografi\",
        \"Egyd\": \"egyptisk demotisk\",
        \"Egyh\": \"egyptisk hieratisk\",
        \"Egyp\": \"egyptiske hieroglyfer\",
        \"Elba\": \"elbasisk\",
        \"Ethi\": \"etiopisk\",
        \"Geok\": \"georgisk khutsuri\",
        \"Geor\": \"georgisk\",
        \"Glag\": \"glagolittisk\",
        \"Goth\": \"gotisk\",
        \"Gran\": \"gammeltamilsk\",
        \"Grek\": \"gresk\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"forenklet\",
        \"Hant\": \"tradisjonell\",
        \"Hatr\": \"hatransk armensk\",
        \"Hebr\": \"hebraisk\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"anatoliske hieroglyfer\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"japanske stavelsesskrifter\",
        \"Hung\": \"gammelungarsk\",
        \"Inds\": \"indus\",
        \"Ital\": \"gammelitalisk\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanesisk\",
        \"Jpan\": \"japansk\",
        \"Jurc\": \"jurchen\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Khoj\": \"khojki\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreansk\",
        \"Kpel\": \"kpelle\",
        \"Kthi\": \"kaithisk\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotisk\",
        \"Latf\": \"frakturlatinsk\",
        \"Latg\": \"gælisk latinsk\",
        \"Latn\": \"latinsk\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineær A\",
        \"Linb\": \"lineær B\",
        \"Lisu\": \"fraser\",
        \"Loma\": \"loma\",
        \"Lyci\": \"lykisk\",
        \"Lydi\": \"lydisk\",
        \"Mahj\": \"mahajani\",
        \"Mand\": \"mandaisk\",
        \"Mani\": \"manikeisk\",
        \"Maya\": \"maya-hieroglyfer\",
        \"Mend\": \"mende\",
        \"Merc\": \"meroitisk kursiv\",
        \"Mero\": \"meroitisk\",
        \"Mlym\": \"malayalam\",
        \"Modi\": \"modi\",
        \"Mong\": \"mongolsk\",
        \"Moon\": \"moon\",
        \"Mroo\": \"mro\",
        \"Mtei\": \"meitei-mayek\",
        \"Mult\": \"multani\",
        \"Mymr\": \"burmesisk\",
        \"Narb\": \"gammelnordarabisk\",
        \"Nbat\": \"nabataeansk\",
        \"Nkgb\": \"naxi geba\",
        \"Nkoo\": \"n’ko\",
        \"Nshu\": \"nüshu\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol-chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanya\",
        \"Palm\": \"palmyrensk\",
        \"Pauc\": \"pau cin hau\",
        \"Perm\": \"gammelpermisk\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskripsjonspahlavi\",
        \"Phlp\": \"psalter pahlavi\",
        \"Phlv\": \"pahlavi\",
        \"Phnx\": \"fønikisk\",
        \"Plrd\": \"pollard-fonetisk\",
        \"Prti\": \"inskripsjonsparthisk\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runer\",
        \"Samr\": \"samaritansk\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"gammelsørarabisk\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"tegnskrift\",
        \"Shaw\": \"shavisk\",
        \"Shrd\": \"sharada\",
        \"Sidd\": \"siddham\",
        \"Sind\": \"khudawadi\",
        \"Sinh\": \"singalesisk\",
        \"Sora\": \"sora sompeng\",
        \"Sund\": \"sundanesisk\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syrisk\",
        \"Syre\": \"estrangelosyriakisk\",
        \"Syrj\": \"vestlig syriakisk\",
        \"Syrn\": \"østlig syriakisk\",
        \"Tagb\": \"tagbanwa\",
        \"Takr\": \"takri\",
        \"Tale\": \"tai le\",
        \"Talu\": \"ny tai lue\",
        \"Taml\": \"tamilsk\",
        \"Tang\": \"tangut\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"taana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetansk\",
        \"Tirh\": \"tirhuta\",
        \"Ugar\": \"ugaritisk\",
        \"Vaii\": \"vai\",
        \"Visp\": \"synlig tale\",
        \"Wara\": \"varang kshiti\",
        \"Wole\": \"woleai\",
        \"Xpeo\": \"gammelpersisk\",
        \"Xsux\": \"sumersk-akkadisk kileskrift\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"nedarvet\",
        \"Zmth\": \"matematisk notasjon\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symboler\",
        \"Zxxx\": \"språk uten skrift\",
        \"Zyyy\": \"felles\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/nb.json";
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
        \"Afak\": \"afaka\",
        \"Aghb\": \"kaukasus-albansk\",
        \"Ahom\": \"ahom\",
        \"Arab\": \"arabisk\",
        \"Armi\": \"arameisk\",
        \"Armn\": \"armensk\",
        \"Avst\": \"avestisk\",
        \"Bali\": \"balinesisk\",
        \"Bamu\": \"bamum\",
        \"Bass\": \"bassa vah\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalsk\",
        \"Blis\": \"blissymbol\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"punktskrift\",
        \"Bugi\": \"buginesisk\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"felles kanadiske urspråksstavelser\",
        \"Cari\": \"karisk\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptisk\",
        \"Cprt\": \"kypriotisk\",
        \"Cyrl\": \"kyrillisk\",
        \"Cyrs\": \"kirkeslavisk kyrillisk\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Dupl\": \"duployan stenografi\",
        \"Egyd\": \"egyptisk demotisk\",
        \"Egyh\": \"egyptisk hieratisk\",
        \"Egyp\": \"egyptiske hieroglyfer\",
        \"Elba\": \"elbasisk\",
        \"Ethi\": \"etiopisk\",
        \"Geok\": \"georgisk khutsuri\",
        \"Geor\": \"georgisk\",
        \"Glag\": \"glagolittisk\",
        \"Goth\": \"gotisk\",
        \"Gran\": \"gammeltamilsk\",
        \"Grek\": \"gresk\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"forenklet\",
        \"Hant\": \"tradisjonell\",
        \"Hatr\": \"hatransk armensk\",
        \"Hebr\": \"hebraisk\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"anatoliske hieroglyfer\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"japanske stavelsesskrifter\",
        \"Hung\": \"gammelungarsk\",
        \"Inds\": \"indus\",
        \"Ital\": \"gammelitalisk\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanesisk\",
        \"Jpan\": \"japansk\",
        \"Jurc\": \"jurchen\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\",
        \"Khoj\": \"khojki\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreansk\",
        \"Kpel\": \"kpelle\",
        \"Kthi\": \"kaithisk\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotisk\",
        \"Latf\": \"frakturlatinsk\",
        \"Latg\": \"gælisk latinsk\",
        \"Latn\": \"latinsk\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineær A\",
        \"Linb\": \"lineær B\",
        \"Lisu\": \"fraser\",
        \"Loma\": \"loma\",
        \"Lyci\": \"lykisk\",
        \"Lydi\": \"lydisk\",
        \"Mahj\": \"mahajani\",
        \"Mand\": \"mandaisk\",
        \"Mani\": \"manikeisk\",
        \"Maya\": \"maya-hieroglyfer\",
        \"Mend\": \"mende\",
        \"Merc\": \"meroitisk kursiv\",
        \"Mero\": \"meroitisk\",
        \"Mlym\": \"malayalam\",
        \"Modi\": \"modi\",
        \"Mong\": \"mongolsk\",
        \"Moon\": \"moon\",
        \"Mroo\": \"mro\",
        \"Mtei\": \"meitei-mayek\",
        \"Mult\": \"multani\",
        \"Mymr\": \"burmesisk\",
        \"Narb\": \"gammelnordarabisk\",
        \"Nbat\": \"nabataeansk\",
        \"Nkgb\": \"naxi geba\",
        \"Nkoo\": \"n’ko\",
        \"Nshu\": \"nüshu\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol-chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanya\",
        \"Palm\": \"palmyrensk\",
        \"Pauc\": \"pau cin hau\",
        \"Perm\": \"gammelpermisk\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskripsjonspahlavi\",
        \"Phlp\": \"psalter pahlavi\",
        \"Phlv\": \"pahlavi\",
        \"Phnx\": \"fønikisk\",
        \"Plrd\": \"pollard-fonetisk\",
        \"Prti\": \"inskripsjonsparthisk\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runer\",
        \"Samr\": \"samaritansk\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"gammelsørarabisk\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"tegnskrift\",
        \"Shaw\": \"shavisk\",
        \"Shrd\": \"sharada\",
        \"Sidd\": \"siddham\",
        \"Sind\": \"khudawadi\",
        \"Sinh\": \"singalesisk\",
        \"Sora\": \"sora sompeng\",
        \"Sund\": \"sundanesisk\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syrisk\",
        \"Syre\": \"estrangelosyriakisk\",
        \"Syrj\": \"vestlig syriakisk\",
        \"Syrn\": \"østlig syriakisk\",
        \"Tagb\": \"tagbanwa\",
        \"Takr\": \"takri\",
        \"Tale\": \"tai le\",
        \"Talu\": \"ny tai lue\",
        \"Taml\": \"tamilsk\",
        \"Tang\": \"tangut\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"taana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetansk\",
        \"Tirh\": \"tirhuta\",
        \"Ugar\": \"ugaritisk\",
        \"Vaii\": \"vai\",
        \"Visp\": \"synlig tale\",
        \"Wara\": \"varang kshiti\",
        \"Wole\": \"woleai\",
        \"Xpeo\": \"gammelpersisk\",
        \"Xsux\": \"sumersk-akkadisk kileskrift\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"nedarvet\",
        \"Zmth\": \"matematisk notasjon\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symboler\",
        \"Zxxx\": \"språk uten skrift\",
        \"Zyyy\": \"felles\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/nb.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/nb.json");
    }
}