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

/* vendor/symfony/intl/Resources/data/scripts/sr_Latn.json */
class __TwigTemplate_11b477e893d4b02cab94ba28ff348e6da2926c5ddfb696bf613b4e74c6e831f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sr_Latn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sr_Latn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arapsko pismo\",
        \"Armi\": \"imperijsko aramejsko pismo\",
        \"Armn\": \"jermensko pismo\",
        \"Avst\": \"avestansko pismo\",
        \"Bali\": \"balijsko pismo\",
        \"Batk\": \"batak pismo\",
        \"Beng\": \"bengalsko pismo\",
        \"Blis\": \"blisimbolično pismo\",
        \"Bopo\": \"bopomofo pismo\",
        \"Brah\": \"bramansko pismo\",
        \"Brai\": \"brajevo pismo\",
        \"Bugi\": \"buginsko pismo\",
        \"Buhd\": \"buhidsko pismo\",
        \"Cakm\": \"čakmansko pismo\",
        \"Cans\": \"ujedinjeni kanadski aboridžinski silabici\",
        \"Cari\": \"karijsko pismo\",
        \"Cham\": \"čamsko pismo\",
        \"Cher\": \"Čeroki\",
        \"Cirt\": \"cirt pismo\",
        \"Copt\": \"koptičko pismo\",
        \"Cprt\": \"kiparsko pismo\",
        \"Cyrl\": \"ćirilica\",
        \"Cyrs\": \"Staroslovenska crkvena ćirilica\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"Dezeret\",
        \"Egyd\": \"egipatsko narodno pismo\",
        \"Egyh\": \"egipatsko hijeratsko pismo\",
        \"Egyp\": \"egipatski hijeroglifi\",
        \"Ethi\": \"etiopsko pismo\",
        \"Geok\": \"gruzijsko khutsuri pismo\",
        \"Geor\": \"gruzijsko pismo\",
        \"Glag\": \"glagoljica\",
        \"Goth\": \"Gotika\",
        \"Grek\": \"grčko pismo\",
        \"Gujr\": \"gudžaratsko pismo\",
        \"Guru\": \"gurmuki pismo\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanuno\",
        \"Hans\": \"pojednostavljeno kinesko pismo\",
        \"Hant\": \"tradicionalno kinesko pismo\",
        \"Hebr\": \"hebrejsko pismo\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahav hmong pismo\",
        \"Hrkt\": \"japanska slogovna pisma\",
        \"Hung\": \"staromađarsko pismo\",
        \"Inds\": \"induško pismo\",
        \"Ital\": \"stari italik\",
        \"Jamo\": \"džamo\",
        \"Java\": \"javansko pismo\",
        \"Jpan\": \"japansko pismo\",
        \"Kali\": \"kajah-li pismo\",
        \"Kana\": \"katakana\",
        \"Khar\": \"karošti pismo\",
        \"Khmr\": \"kmersko pismo\",
        \"Knda\": \"kanada pismo\",
        \"Kore\": \"korejsko pismo\",
        \"Kthi\": \"kaiti\",
        \"Lana\": \"lanna pismo\",
        \"Laoo\": \"laoško pismo\",
        \"Latf\": \"latinica (fraktur varijanta)\",
        \"Latg\": \"galska latinica\",
        \"Latn\": \"latinica\",
        \"Lepc\": \"lepča pismo\",
        \"Limb\": \"limbu pismo\",
        \"Lina\": \"linearno A pismo\",
        \"Linb\": \"linearno B pismo\",
        \"Lyci\": \"lisijsko pismo\",
        \"Lydi\": \"lidijsko pismo\",
        \"Mand\": \"mandeansko pismo\",
        \"Mani\": \"manihejsko pismo\",
        \"Maya\": \"majanski hijeroglifi\",
        \"Mero\": \"meroitik pismo\",
        \"Mlym\": \"malajalamsko pismo\",
        \"Mong\": \"mongolsko pismo\",
        \"Moon\": \"mesečevo pismo\",
        \"Mtei\": \"meitei majek pismo\",
        \"Mymr\": \"mijanmarsko pismo\",
        \"Nkoo\": \"n’ko pismo\",
        \"Ogam\": \"ogamsko pismo\",
        \"Olck\": \"ol čiki pismo\",
        \"Orkh\": \"orkonsko pismo\",
        \"Orya\": \"orijansko pismo\",
        \"Osma\": \"osmanjansko pismo\",
        \"Perm\": \"staro permiksko pismo\",
        \"Phag\": \"pags-pa pismo\",
        \"Phli\": \"pisani pahlavi\",
        \"Phlp\": \"psalter pahlavi\",
        \"Phlv\": \"pahlavi pismo\",
        \"Phnx\": \"Feničansko pismo\",
        \"Plrd\": \"porald fonetsko pismo\",
        \"Prti\": \"pisani partian\",
        \"Rjng\": \"rejang pismo\",
        \"Roro\": \"rongorongo pismo\",
        \"Runr\": \"runsko pismo\",
        \"Samr\": \"samaritansko pismo\",
        \"Sara\": \"sarati pismo\",
        \"Saur\": \"sauraštra pismo\",
        \"Sgnw\": \"znakovno pismo\",
        \"Shaw\": \"šavijansko pismo\",
        \"Sinh\": \"sinhalsko pismo\",
        \"Sund\": \"sundansko pismo\",
        \"Sylo\": \"siloti nagri pismo\",
        \"Syrc\": \"sirijsko pismo\",
        \"Syre\": \"sirijsko estrangelo pismo\",
        \"Syrj\": \"zapadnosirijsko pismo\",
        \"Syrn\": \"pismo istočne Sirije\",
        \"Tagb\": \"tagbanva pismo\",
        \"Tale\": \"tai le pismo\",
        \"Talu\": \"novi tai lue\",
        \"Taml\": \"tamilsko pismo\",
        \"Tavt\": \"tai viet pismo\",
        \"Telu\": \"telugu pismo\",
        \"Teng\": \"tengvar pismo\",
        \"Tfng\": \"tifinag pismo\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"tana pismo\",
        \"Thai\": \"tajlandsko pismo\",
        \"Tibt\": \"tibetansko pismo\",
        \"Ugar\": \"ugaritsko pismo\",
        \"Vaii\": \"vai pismo\",
        \"Visp\": \"vidljivi govor\",
        \"Xpeo\": \"staropersijsko pismo\",
        \"Xsux\": \"sumersko-akadsko kuneiform pismo\",
        \"Yiii\": \"ji pismo\",
        \"Zinh\": \"nasledno pismo\",
        \"Zmth\": \"matematička notacija\",
        \"Zsye\": \"emodži\",
        \"Zsym\": \"simboli\",
        \"Zxxx\": \"nepisani jezik\",
        \"Zyyy\": \"zajedničko pismo\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sr_Latn.json";
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
        \"Arab\": \"arapsko pismo\",
        \"Armi\": \"imperijsko aramejsko pismo\",
        \"Armn\": \"jermensko pismo\",
        \"Avst\": \"avestansko pismo\",
        \"Bali\": \"balijsko pismo\",
        \"Batk\": \"batak pismo\",
        \"Beng\": \"bengalsko pismo\",
        \"Blis\": \"blisimbolično pismo\",
        \"Bopo\": \"bopomofo pismo\",
        \"Brah\": \"bramansko pismo\",
        \"Brai\": \"brajevo pismo\",
        \"Bugi\": \"buginsko pismo\",
        \"Buhd\": \"buhidsko pismo\",
        \"Cakm\": \"čakmansko pismo\",
        \"Cans\": \"ujedinjeni kanadski aboridžinski silabici\",
        \"Cari\": \"karijsko pismo\",
        \"Cham\": \"čamsko pismo\",
        \"Cher\": \"Čeroki\",
        \"Cirt\": \"cirt pismo\",
        \"Copt\": \"koptičko pismo\",
        \"Cprt\": \"kiparsko pismo\",
        \"Cyrl\": \"ćirilica\",
        \"Cyrs\": \"Staroslovenska crkvena ćirilica\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"Dezeret\",
        \"Egyd\": \"egipatsko narodno pismo\",
        \"Egyh\": \"egipatsko hijeratsko pismo\",
        \"Egyp\": \"egipatski hijeroglifi\",
        \"Ethi\": \"etiopsko pismo\",
        \"Geok\": \"gruzijsko khutsuri pismo\",
        \"Geor\": \"gruzijsko pismo\",
        \"Glag\": \"glagoljica\",
        \"Goth\": \"Gotika\",
        \"Grek\": \"grčko pismo\",
        \"Gujr\": \"gudžaratsko pismo\",
        \"Guru\": \"gurmuki pismo\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanuno\",
        \"Hans\": \"pojednostavljeno kinesko pismo\",
        \"Hant\": \"tradicionalno kinesko pismo\",
        \"Hebr\": \"hebrejsko pismo\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahav hmong pismo\",
        \"Hrkt\": \"japanska slogovna pisma\",
        \"Hung\": \"staromađarsko pismo\",
        \"Inds\": \"induško pismo\",
        \"Ital\": \"stari italik\",
        \"Jamo\": \"džamo\",
        \"Java\": \"javansko pismo\",
        \"Jpan\": \"japansko pismo\",
        \"Kali\": \"kajah-li pismo\",
        \"Kana\": \"katakana\",
        \"Khar\": \"karošti pismo\",
        \"Khmr\": \"kmersko pismo\",
        \"Knda\": \"kanada pismo\",
        \"Kore\": \"korejsko pismo\",
        \"Kthi\": \"kaiti\",
        \"Lana\": \"lanna pismo\",
        \"Laoo\": \"laoško pismo\",
        \"Latf\": \"latinica (fraktur varijanta)\",
        \"Latg\": \"galska latinica\",
        \"Latn\": \"latinica\",
        \"Lepc\": \"lepča pismo\",
        \"Limb\": \"limbu pismo\",
        \"Lina\": \"linearno A pismo\",
        \"Linb\": \"linearno B pismo\",
        \"Lyci\": \"lisijsko pismo\",
        \"Lydi\": \"lidijsko pismo\",
        \"Mand\": \"mandeansko pismo\",
        \"Mani\": \"manihejsko pismo\",
        \"Maya\": \"majanski hijeroglifi\",
        \"Mero\": \"meroitik pismo\",
        \"Mlym\": \"malajalamsko pismo\",
        \"Mong\": \"mongolsko pismo\",
        \"Moon\": \"mesečevo pismo\",
        \"Mtei\": \"meitei majek pismo\",
        \"Mymr\": \"mijanmarsko pismo\",
        \"Nkoo\": \"n’ko pismo\",
        \"Ogam\": \"ogamsko pismo\",
        \"Olck\": \"ol čiki pismo\",
        \"Orkh\": \"orkonsko pismo\",
        \"Orya\": \"orijansko pismo\",
        \"Osma\": \"osmanjansko pismo\",
        \"Perm\": \"staro permiksko pismo\",
        \"Phag\": \"pags-pa pismo\",
        \"Phli\": \"pisani pahlavi\",
        \"Phlp\": \"psalter pahlavi\",
        \"Phlv\": \"pahlavi pismo\",
        \"Phnx\": \"Feničansko pismo\",
        \"Plrd\": \"porald fonetsko pismo\",
        \"Prti\": \"pisani partian\",
        \"Rjng\": \"rejang pismo\",
        \"Roro\": \"rongorongo pismo\",
        \"Runr\": \"runsko pismo\",
        \"Samr\": \"samaritansko pismo\",
        \"Sara\": \"sarati pismo\",
        \"Saur\": \"sauraštra pismo\",
        \"Sgnw\": \"znakovno pismo\",
        \"Shaw\": \"šavijansko pismo\",
        \"Sinh\": \"sinhalsko pismo\",
        \"Sund\": \"sundansko pismo\",
        \"Sylo\": \"siloti nagri pismo\",
        \"Syrc\": \"sirijsko pismo\",
        \"Syre\": \"sirijsko estrangelo pismo\",
        \"Syrj\": \"zapadnosirijsko pismo\",
        \"Syrn\": \"pismo istočne Sirije\",
        \"Tagb\": \"tagbanva pismo\",
        \"Tale\": \"tai le pismo\",
        \"Talu\": \"novi tai lue\",
        \"Taml\": \"tamilsko pismo\",
        \"Tavt\": \"tai viet pismo\",
        \"Telu\": \"telugu pismo\",
        \"Teng\": \"tengvar pismo\",
        \"Tfng\": \"tifinag pismo\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"tana pismo\",
        \"Thai\": \"tajlandsko pismo\",
        \"Tibt\": \"tibetansko pismo\",
        \"Ugar\": \"ugaritsko pismo\",
        \"Vaii\": \"vai pismo\",
        \"Visp\": \"vidljivi govor\",
        \"Xpeo\": \"staropersijsko pismo\",
        \"Xsux\": \"sumersko-akadsko kuneiform pismo\",
        \"Yiii\": \"ji pismo\",
        \"Zinh\": \"nasledno pismo\",
        \"Zmth\": \"matematička notacija\",
        \"Zsye\": \"emodži\",
        \"Zsym\": \"simboli\",
        \"Zxxx\": \"nepisani jezik\",
        \"Zyyy\": \"zajedničko pismo\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sr_Latn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sr_Latn.json");
    }
}
