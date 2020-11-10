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

/* vendor/symfony/intl/Resources/data/scripts/lt.json */
class __TwigTemplate_7f43bf4b109220e4e2db04910475fec40f8346a0221c86805010ae7a158064ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/lt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/lt.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"Afaka\",
        \"Aghb\": \"Kaukazo Albanijos\",
        \"Arab\": \"arabų\",
        \"Armi\": \"imperinė aramaikų\",
        \"Armn\": \"armėnų\",
        \"Avst\": \"avestano\",
        \"Bali\": \"Baliečių\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalų\",
        \"Blis\": \"„Bliss“ simboliai\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"brailio\",
        \"Bugi\": \"buginezų\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"čakma\",
        \"Cans\": \"suvienodinti Kanados aborigenų silabiniai\",
        \"Cari\": \"karių\",
        \"Cham\": \"čam\",
        \"Cher\": \"čerokių\",
        \"Cirt\": \"kirt\",
        \"Copt\": \"koptų\",
        \"Cprt\": \"kipro\",
        \"Cyrl\": \"kirilica\",
        \"Cyrs\": \"senoji bažnytinė slavų kirilica\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseretas\",
        \"Dupl\": \"Duplojė stenografija\",
        \"Egyd\": \"Egipto liaudies\",
        \"Egyh\": \"Egipto žynių\",
        \"Egyp\": \"egipto hieroglifai\",
        \"Elba\": \"Elbasano\",
        \"Ethi\": \"etiopų\",
        \"Geok\": \"gruzinų kutsuri\",
        \"Geor\": \"gruzinų\",
        \"Glag\": \"glagolitik\",
        \"Goth\": \"gotų\",
        \"Gran\": \"Granta\",
        \"Grek\": \"graikų\",
        \"Gujr\": \"gudžaratų\",
        \"Guru\": \"gurmuki\",
        \"Hanb\": \"hanbų\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanuno\",
        \"Hans\": \"supaprastinti\",
        \"Hant\": \"tradiciniai\",
        \"Hebr\": \"hebrajų\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"Anatolijaus hieroglifai\",
        \"Hmng\": \"pahav hmong\",
        \"Hrkt\": \"katakana \\/ hiragana\",
        \"Hung\": \"senasis vengrų\",
        \"Inds\": \"indus\",
        \"Ital\": \"senasis italų\",
        \"Jamo\": \"Jamo simboliai\",
        \"Java\": \"javiečių\",
        \"Jpan\": \"japonų\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"kajah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"karošti\",
        \"Khmr\": \"khmerų\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"kanadų\",
        \"Kore\": \"korėjiečių\",
        \"Kpel\": \"Kpelų\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lana\",
        \"Laoo\": \"laosiečių\",
        \"Latf\": \"fraktur lotynų\",
        \"Latg\": \"gėlų lotynų\",
        \"Latn\": \"lotynų\",
        \"Lepc\": \"lepča\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linijiniai A\",
        \"Linb\": \"linijiniai B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"lician\",
        \"Lydi\": \"lidian\",
        \"Mahj\": \"Mahadžani\",
        \"Mand\": \"mandėjų\",
        \"Mani\": \"maničų\",
        \"Maya\": \"malų hieroglifai\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Merojitų rankraštinis\",
        \"Mero\": \"meroitik\",
        \"Mlym\": \"malajalių\",
        \"Modi\": \"Modi\",
        \"Mong\": \"mongolų\",
        \"Moon\": \"mūn\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"meitei majek\",
        \"Mymr\": \"birmiečių\",
        \"Narb\": \"Senasis šiaurės arabų\",
        \"Nbat\": \"Nabatėjų\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"enko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol čiki\",
        \"Orkh\": \"orkon\",
        \"Orya\": \"orijų\",
        \"Osma\": \"osmanų\",
        \"Palm\": \"Palmiros\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"senieji permės\",
        \"Phag\": \"pagsa pa\",
        \"Phli\": \"rašytiniai pahlavi\",
        \"Phlp\": \"pselter pahlavi\",
        \"Phlv\": \"buk pahvali\",
        \"Phnx\": \"foenikų\",
        \"Plrd\": \"polard fonetinė\",
        \"Prti\": \"rašytiniai partų\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runų\",
        \"Samr\": \"samariečių\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"senoji pietų Arabijos\",
        \"Saur\": \"sauraštra\",
        \"Sgnw\": \"ženklų raštas\",
        \"Shaw\": \"šavių\",
        \"Shrd\": \"Šarados\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"sinhalų\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"sundų\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"sirų\",
        \"Syre\": \"estrangelo siriečių\",
        \"Syrj\": \"vakarų sirų\",
        \"Syrn\": \"rytų sirų\",
        \"Tagb\": \"tagbanva\",
        \"Takr\": \"Takri\",
        \"Tale\": \"tai le\",
        \"Talu\": \"naujasis Tailando lue\",
        \"Taml\": \"tamilų\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"tai vet\",
        \"Telu\": \"telugų\",
        \"Teng\": \"tengvar\",
        \"Tfng\": \"tifinag\",
        \"Tglg\": \"tagalogų\",
        \"Thaa\": \"hana\",
        \"Thai\": \"tajų\",
        \"Tibt\": \"tibetiečių\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"ugaritik\",
        \"Vaii\": \"vai\",
        \"Visp\": \"matoma kalba\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"senieji persų\",
        \"Xsux\": \"Šumero Akado dantiraštis\",
        \"Yiii\": \"ji\",
        \"Zinh\": \"paveldėtas\",
        \"Zmth\": \"matematiniai simboliai\",
        \"Zsye\": \"jaustukai\",
        \"Zsym\": \"simbolių\",
        \"Zxxx\": \"neparašyta\",
        \"Zyyy\": \"bendri\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/lt.json";
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
        \"Afak\": \"Afaka\",
        \"Aghb\": \"Kaukazo Albanijos\",
        \"Arab\": \"arabų\",
        \"Armi\": \"imperinė aramaikų\",
        \"Armn\": \"armėnų\",
        \"Avst\": \"avestano\",
        \"Bali\": \"Baliečių\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalų\",
        \"Blis\": \"„Bliss“ simboliai\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"brailio\",
        \"Bugi\": \"buginezų\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"čakma\",
        \"Cans\": \"suvienodinti Kanados aborigenų silabiniai\",
        \"Cari\": \"karių\",
        \"Cham\": \"čam\",
        \"Cher\": \"čerokių\",
        \"Cirt\": \"kirt\",
        \"Copt\": \"koptų\",
        \"Cprt\": \"kipro\",
        \"Cyrl\": \"kirilica\",
        \"Cyrs\": \"senoji bažnytinė slavų kirilica\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseretas\",
        \"Dupl\": \"Duplojė stenografija\",
        \"Egyd\": \"Egipto liaudies\",
        \"Egyh\": \"Egipto žynių\",
        \"Egyp\": \"egipto hieroglifai\",
        \"Elba\": \"Elbasano\",
        \"Ethi\": \"etiopų\",
        \"Geok\": \"gruzinų kutsuri\",
        \"Geor\": \"gruzinų\",
        \"Glag\": \"glagolitik\",
        \"Goth\": \"gotų\",
        \"Gran\": \"Granta\",
        \"Grek\": \"graikų\",
        \"Gujr\": \"gudžaratų\",
        \"Guru\": \"gurmuki\",
        \"Hanb\": \"hanbų\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanuno\",
        \"Hans\": \"supaprastinti\",
        \"Hant\": \"tradiciniai\",
        \"Hebr\": \"hebrajų\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"Anatolijaus hieroglifai\",
        \"Hmng\": \"pahav hmong\",
        \"Hrkt\": \"katakana \\/ hiragana\",
        \"Hung\": \"senasis vengrų\",
        \"Inds\": \"indus\",
        \"Ital\": \"senasis italų\",
        \"Jamo\": \"Jamo simboliai\",
        \"Java\": \"javiečių\",
        \"Jpan\": \"japonų\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"kajah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"karošti\",
        \"Khmr\": \"khmerų\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"kanadų\",
        \"Kore\": \"korėjiečių\",
        \"Kpel\": \"Kpelų\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lana\",
        \"Laoo\": \"laosiečių\",
        \"Latf\": \"fraktur lotynų\",
        \"Latg\": \"gėlų lotynų\",
        \"Latn\": \"lotynų\",
        \"Lepc\": \"lepča\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linijiniai A\",
        \"Linb\": \"linijiniai B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"lician\",
        \"Lydi\": \"lidian\",
        \"Mahj\": \"Mahadžani\",
        \"Mand\": \"mandėjų\",
        \"Mani\": \"maničų\",
        \"Maya\": \"malų hieroglifai\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Merojitų rankraštinis\",
        \"Mero\": \"meroitik\",
        \"Mlym\": \"malajalių\",
        \"Modi\": \"Modi\",
        \"Mong\": \"mongolų\",
        \"Moon\": \"mūn\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"meitei majek\",
        \"Mymr\": \"birmiečių\",
        \"Narb\": \"Senasis šiaurės arabų\",
        \"Nbat\": \"Nabatėjų\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"enko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol čiki\",
        \"Orkh\": \"orkon\",
        \"Orya\": \"orijų\",
        \"Osma\": \"osmanų\",
        \"Palm\": \"Palmiros\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"senieji permės\",
        \"Phag\": \"pagsa pa\",
        \"Phli\": \"rašytiniai pahlavi\",
        \"Phlp\": \"pselter pahlavi\",
        \"Phlv\": \"buk pahvali\",
        \"Phnx\": \"foenikų\",
        \"Plrd\": \"polard fonetinė\",
        \"Prti\": \"rašytiniai partų\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runų\",
        \"Samr\": \"samariečių\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"senoji pietų Arabijos\",
        \"Saur\": \"sauraštra\",
        \"Sgnw\": \"ženklų raštas\",
        \"Shaw\": \"šavių\",
        \"Shrd\": \"Šarados\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"sinhalų\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"sundų\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"sirų\",
        \"Syre\": \"estrangelo siriečių\",
        \"Syrj\": \"vakarų sirų\",
        \"Syrn\": \"rytų sirų\",
        \"Tagb\": \"tagbanva\",
        \"Takr\": \"Takri\",
        \"Tale\": \"tai le\",
        \"Talu\": \"naujasis Tailando lue\",
        \"Taml\": \"tamilų\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"tai vet\",
        \"Telu\": \"telugų\",
        \"Teng\": \"tengvar\",
        \"Tfng\": \"tifinag\",
        \"Tglg\": \"tagalogų\",
        \"Thaa\": \"hana\",
        \"Thai\": \"tajų\",
        \"Tibt\": \"tibetiečių\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"ugaritik\",
        \"Vaii\": \"vai\",
        \"Visp\": \"matoma kalba\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"senieji persų\",
        \"Xsux\": \"Šumero Akado dantiraštis\",
        \"Yiii\": \"ji\",
        \"Zinh\": \"paveldėtas\",
        \"Zmth\": \"matematiniai simboliai\",
        \"Zsye\": \"jaustukai\",
        \"Zsym\": \"simbolių\",
        \"Zxxx\": \"neparašyta\",
        \"Zyyy\": \"bendri\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/lt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/lt.json");
    }
}
