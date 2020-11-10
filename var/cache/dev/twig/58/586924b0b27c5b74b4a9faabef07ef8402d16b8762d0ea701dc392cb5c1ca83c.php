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

/* vendor/symfony/intl/Resources/data/scripts/et.json */
class __TwigTemplate_464245a3c1a2d0105ba0001f20a1776705c21f23a0f7e8d9cabb56480851c7c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/et.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/et.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"afaka\",
        \"Aghb\": \"albaani\",
        \"Ahom\": \"ahomi\",
        \"Arab\": \"araabia\",
        \"Armi\": \"vanaaramea\",
        \"Armn\": \"armeenia\",
        \"Avst\": \"avesta\",
        \"Bali\": \"bali\",
        \"Bamu\": \"bamumi\",
        \"Bass\": \"bassa\",
        \"Batk\": \"bataki\",
        \"Beng\": \"bengali\",
        \"Blis\": \"Blissi sümbolid\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"braahmi\",
        \"Brai\": \"punktkiri\",
        \"Bugi\": \"bugi\",
        \"Buhd\": \"buhidi\",
        \"Cakm\": \"tšaakma\",
        \"Cans\": \"Kanada põlisrahvaste ühtlustatud silpkiri\",
        \"Cari\": \"kaaria\",
        \"Cham\": \"tšaami\",
        \"Cher\": \"tšerokii\",
        \"Cirt\": \"Cirthi\",
        \"Copt\": \"kopti\",
        \"Cprt\": \"Küprose silpkiri\",
        \"Cyrl\": \"kirillitsa\",
        \"Cyrs\": \"kürilliline kirikuslaavi\",
        \"Deva\": \"devanaagari\",
        \"Dsrt\": \"desereti\",
        \"Dupl\": \"Duployé kiirkiri\",
        \"Egyd\": \"egiptuse demootiline\",
        \"Egyh\": \"egiptuse hieraatiline\",
        \"Egyp\": \"egiptuse hieroglüüfkiri\",
        \"Elba\": \"Elbasani\",
        \"Ethi\": \"etioopia\",
        \"Geok\": \"hutsuri\",
        \"Geor\": \"gruusia\",
        \"Glag\": \"glagoolitsa\",
        \"Gonm\": \"Masarami gondi\",
        \"Goth\": \"gooti\",
        \"Gran\": \"grantha\",
        \"Grek\": \"kreeka\",
        \"Gujr\": \"gudžarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanbi\",
        \"Hang\": \"korea\",
        \"Hani\": \"hani\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"lihtsustatud\",
        \"Hant\": \"traditsiooniline\",
        \"Hatr\": \"Hatra\",
        \"Hebr\": \"heebrea\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"Anatoolia hieroglüüfkiri\",
        \"Hmng\": \"phahau-hmongi kiri\",
        \"Hrkt\": \"jaapani silpkirjad\",
        \"Hung\": \"vanaungari\",
        \"Inds\": \"Induse\",
        \"Ital\": \"vanaitali\",
        \"Jamo\": \"jamo\",
        \"Java\": \"jaava\",
        \"Jpan\": \"jaapani\",
        \"Jurc\": \"tšurtšeni\",
        \"Kali\": \"kaja-lii\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmeeri\",
        \"Khoj\": \"hodžki\",
        \"Knda\": \"kannada\",
        \"Kore\": \"korea segakiri\",
        \"Kpel\": \"kpelle\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"tai-thami\",
        \"Laoo\": \"lao\",
        \"Latf\": \"ladina fraktuurkiri\",
        \"Latg\": \"ladina gaeli\",
        \"Latn\": \"ladina\",
        \"Lepc\": \"leptša\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineaarkiri A\",
        \"Linb\": \"lineaarkiri B\",
        \"Lisu\": \"lisu\",
        \"Loma\": \"loma\",
        \"Lyci\": \"lüükia\",
        \"Lydi\": \"lüüdia\",
        \"Mahj\": \"mahaadžani\",
        \"Mand\": \"mandea\",
        \"Mani\": \"mani\",
        \"Maya\": \"maaja hieroglüüfkiri\",
        \"Mend\": \"mende\",
        \"Merc\": \"meroe kursiivkiri\",
        \"Mero\": \"meroe\",
        \"Mlym\": \"malajalami\",
        \"Modi\": \"modi\",
        \"Mong\": \"mongoli\",
        \"Moon\": \"Mooni\",
        \"Mroo\": \"mruu\",
        \"Mtei\": \"meitei\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"birma\",
        \"Narb\": \"Põhja-Araabia\",
        \"Nbat\": \"Nabatea\",
        \"Newa\": \"nevari\",
        \"Nkgb\": \"nasi\",
        \"Nkoo\": \"nkoo\",
        \"Nshu\": \"nüšu\",
        \"Ogam\": \"ogam\",
        \"Olck\": \"santali\",
        \"Orkh\": \"Orhoni\",
        \"Orya\": \"oria\",
        \"Osge\": \"oseidži\",
        \"Osma\": \"osmani\",
        \"Palm\": \"Palmyra\",
        \"Perm\": \"vanapermi\",
        \"Phag\": \"phakpa\",
        \"Phli\": \"pahlavi raidkiri\",
        \"Phlp\": \"pahlavi psalmikiri\",
        \"Phlv\": \"pahlavi raamatukiri\",
        \"Phnx\": \"foiniikia\",
        \"Plrd\": \"Pollardi miao\",
        \"Prti\": \"partia raidkiri\",
        \"Rjng\": \"redžangi\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"ruunikiri\",
        \"Samr\": \"Samaaria\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"Lõuna-Araabia\",
        \"Saur\": \"sauraštra\",
        \"Sgnw\": \"viipekiri\",
        \"Shaw\": \"Shaw’ kiri\",
        \"Shrd\": \"šaarada\",
        \"Sidd\": \"siddhami\",
        \"Sind\": \"hudavadi\",
        \"Sinh\": \"singali\",
        \"Sora\": \"sora\",
        \"Soyo\": \"sojombo\",
        \"Sund\": \"sunda\",
        \"Sylo\": \"siloti\",
        \"Syrc\": \"süüria\",
        \"Syre\": \"süüria estrangelo\",
        \"Syrj\": \"läänesüüria\",
        \"Syrn\": \"idasüüria\",
        \"Tagb\": \"tagbanva\",
        \"Takr\": \"taakri\",
        \"Tale\": \"tai-löö\",
        \"Talu\": \"uus tai-lõõ\",
        \"Taml\": \"tamili\",
        \"Tang\": \"tanguudi\",
        \"Tavt\": \"tai-vieti\",
        \"Telu\": \"telugu\",
        \"Teng\": \"Tengwari\",
        \"Tfng\": \"tifinagi\",
        \"Tglg\": \"tagalogi\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tai\",
        \"Tibt\": \"tiibeti\",
        \"Tirh\": \"tirhuta\",
        \"Ugar\": \"ugariti\",
        \"Vaii\": \"vai\",
        \"Visp\": \"nähtava kõne\",
        \"Wara\": \"hoo\",
        \"Wcho\": \"vantšo\",
        \"Wole\": \"voleai\",
        \"Xpeo\": \"vanapärsia\",
        \"Xsux\": \"sumeri-akadi kiilkiri\",
        \"Yiii\": \"jii\",
        \"Zanb\": \"Dzanabadzari ruutkiri\",
        \"Zinh\": \"päritud\",
        \"Zmth\": \"matemaatiline tähistus\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"sümbolid\",
        \"Zxxx\": \"kirjakeeleta\",
        \"Zyyy\": \"üldine\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/et.json";
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
        \"Aghb\": \"albaani\",
        \"Ahom\": \"ahomi\",
        \"Arab\": \"araabia\",
        \"Armi\": \"vanaaramea\",
        \"Armn\": \"armeenia\",
        \"Avst\": \"avesta\",
        \"Bali\": \"bali\",
        \"Bamu\": \"bamumi\",
        \"Bass\": \"bassa\",
        \"Batk\": \"bataki\",
        \"Beng\": \"bengali\",
        \"Blis\": \"Blissi sümbolid\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"braahmi\",
        \"Brai\": \"punktkiri\",
        \"Bugi\": \"bugi\",
        \"Buhd\": \"buhidi\",
        \"Cakm\": \"tšaakma\",
        \"Cans\": \"Kanada põlisrahvaste ühtlustatud silpkiri\",
        \"Cari\": \"kaaria\",
        \"Cham\": \"tšaami\",
        \"Cher\": \"tšerokii\",
        \"Cirt\": \"Cirthi\",
        \"Copt\": \"kopti\",
        \"Cprt\": \"Küprose silpkiri\",
        \"Cyrl\": \"kirillitsa\",
        \"Cyrs\": \"kürilliline kirikuslaavi\",
        \"Deva\": \"devanaagari\",
        \"Dsrt\": \"desereti\",
        \"Dupl\": \"Duployé kiirkiri\",
        \"Egyd\": \"egiptuse demootiline\",
        \"Egyh\": \"egiptuse hieraatiline\",
        \"Egyp\": \"egiptuse hieroglüüfkiri\",
        \"Elba\": \"Elbasani\",
        \"Ethi\": \"etioopia\",
        \"Geok\": \"hutsuri\",
        \"Geor\": \"gruusia\",
        \"Glag\": \"glagoolitsa\",
        \"Gonm\": \"Masarami gondi\",
        \"Goth\": \"gooti\",
        \"Gran\": \"grantha\",
        \"Grek\": \"kreeka\",
        \"Gujr\": \"gudžarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanbi\",
        \"Hang\": \"korea\",
        \"Hani\": \"hani\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"lihtsustatud\",
        \"Hant\": \"traditsiooniline\",
        \"Hatr\": \"Hatra\",
        \"Hebr\": \"heebrea\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"Anatoolia hieroglüüfkiri\",
        \"Hmng\": \"phahau-hmongi kiri\",
        \"Hrkt\": \"jaapani silpkirjad\",
        \"Hung\": \"vanaungari\",
        \"Inds\": \"Induse\",
        \"Ital\": \"vanaitali\",
        \"Jamo\": \"jamo\",
        \"Java\": \"jaava\",
        \"Jpan\": \"jaapani\",
        \"Jurc\": \"tšurtšeni\",
        \"Kali\": \"kaja-lii\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmeeri\",
        \"Khoj\": \"hodžki\",
        \"Knda\": \"kannada\",
        \"Kore\": \"korea segakiri\",
        \"Kpel\": \"kpelle\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"tai-thami\",
        \"Laoo\": \"lao\",
        \"Latf\": \"ladina fraktuurkiri\",
        \"Latg\": \"ladina gaeli\",
        \"Latn\": \"ladina\",
        \"Lepc\": \"leptša\",
        \"Limb\": \"limbu\",
        \"Lina\": \"lineaarkiri A\",
        \"Linb\": \"lineaarkiri B\",
        \"Lisu\": \"lisu\",
        \"Loma\": \"loma\",
        \"Lyci\": \"lüükia\",
        \"Lydi\": \"lüüdia\",
        \"Mahj\": \"mahaadžani\",
        \"Mand\": \"mandea\",
        \"Mani\": \"mani\",
        \"Maya\": \"maaja hieroglüüfkiri\",
        \"Mend\": \"mende\",
        \"Merc\": \"meroe kursiivkiri\",
        \"Mero\": \"meroe\",
        \"Mlym\": \"malajalami\",
        \"Modi\": \"modi\",
        \"Mong\": \"mongoli\",
        \"Moon\": \"Mooni\",
        \"Mroo\": \"mruu\",
        \"Mtei\": \"meitei\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"birma\",
        \"Narb\": \"Põhja-Araabia\",
        \"Nbat\": \"Nabatea\",
        \"Newa\": \"nevari\",
        \"Nkgb\": \"nasi\",
        \"Nkoo\": \"nkoo\",
        \"Nshu\": \"nüšu\",
        \"Ogam\": \"ogam\",
        \"Olck\": \"santali\",
        \"Orkh\": \"Orhoni\",
        \"Orya\": \"oria\",
        \"Osge\": \"oseidži\",
        \"Osma\": \"osmani\",
        \"Palm\": \"Palmyra\",
        \"Perm\": \"vanapermi\",
        \"Phag\": \"phakpa\",
        \"Phli\": \"pahlavi raidkiri\",
        \"Phlp\": \"pahlavi psalmikiri\",
        \"Phlv\": \"pahlavi raamatukiri\",
        \"Phnx\": \"foiniikia\",
        \"Plrd\": \"Pollardi miao\",
        \"Prti\": \"partia raidkiri\",
        \"Rjng\": \"redžangi\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"ruunikiri\",
        \"Samr\": \"Samaaria\",
        \"Sara\": \"sarati\",
        \"Sarb\": \"Lõuna-Araabia\",
        \"Saur\": \"sauraštra\",
        \"Sgnw\": \"viipekiri\",
        \"Shaw\": \"Shaw’ kiri\",
        \"Shrd\": \"šaarada\",
        \"Sidd\": \"siddhami\",
        \"Sind\": \"hudavadi\",
        \"Sinh\": \"singali\",
        \"Sora\": \"sora\",
        \"Soyo\": \"sojombo\",
        \"Sund\": \"sunda\",
        \"Sylo\": \"siloti\",
        \"Syrc\": \"süüria\",
        \"Syre\": \"süüria estrangelo\",
        \"Syrj\": \"läänesüüria\",
        \"Syrn\": \"idasüüria\",
        \"Tagb\": \"tagbanva\",
        \"Takr\": \"taakri\",
        \"Tale\": \"tai-löö\",
        \"Talu\": \"uus tai-lõõ\",
        \"Taml\": \"tamili\",
        \"Tang\": \"tanguudi\",
        \"Tavt\": \"tai-vieti\",
        \"Telu\": \"telugu\",
        \"Teng\": \"Tengwari\",
        \"Tfng\": \"tifinagi\",
        \"Tglg\": \"tagalogi\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tai\",
        \"Tibt\": \"tiibeti\",
        \"Tirh\": \"tirhuta\",
        \"Ugar\": \"ugariti\",
        \"Vaii\": \"vai\",
        \"Visp\": \"nähtava kõne\",
        \"Wara\": \"hoo\",
        \"Wcho\": \"vantšo\",
        \"Wole\": \"voleai\",
        \"Xpeo\": \"vanapärsia\",
        \"Xsux\": \"sumeri-akadi kiilkiri\",
        \"Yiii\": \"jii\",
        \"Zanb\": \"Dzanabadzari ruutkiri\",
        \"Zinh\": \"päritud\",
        \"Zmth\": \"matemaatiline tähistus\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"sümbolid\",
        \"Zxxx\": \"kirjakeeleta\",
        \"Zyyy\": \"üldine\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/et.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/et.json");
    }
}
