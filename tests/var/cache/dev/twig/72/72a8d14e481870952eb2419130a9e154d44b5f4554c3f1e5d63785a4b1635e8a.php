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

/* vendor/symfony/intl/Resources/data/scripts/sl.json */
class __TwigTemplate_754356341deffcfaa2fc1d8f6d74659c0e8b5d6f9448336d31c9d3d3df39f2ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabski\",
        \"Armi\": \"imperialno-aramejski\",
        \"Armn\": \"armenski\",
        \"Avst\": \"avestanski\",
        \"Bali\": \"balijski\",
        \"Batk\": \"bataški\",
        \"Beng\": \"bengalski\",
        \"Blis\": \"znakovna pisava Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"bramanski\",
        \"Brai\": \"braillova pisava\",
        \"Bugi\": \"buginski\",
        \"Buhd\": \"buhidski\",
        \"Cans\": \"poenotena zlogovna pisava kanadskih staroselcev\",
        \"Cham\": \"Cham\",
        \"Cher\": \"čerokeški\",
        \"Cirt\": \"kirt\",
        \"Copt\": \"koptski\",
        \"Cprt\": \"ciprski\",
        \"Cyrl\": \"cirilica\",
        \"Cyrs\": \"starocerkvenoslovanska cirilica\",
        \"Deva\": \"devanagarščica\",
        \"Dsrt\": \"fonetska pisava deseret\",
        \"Egyd\": \"demotska egipčanska pisava\",
        \"Egyh\": \"hieratska egipčanska pisava\",
        \"Egyp\": \"egipčanska slikovna pisava\",
        \"Ethi\": \"etiopski\",
        \"Geok\": \"cerkvenogruzijski\",
        \"Geor\": \"gruzijski\",
        \"Glag\": \"glagoliški\",
        \"Goth\": \"gotski\",
        \"Grek\": \"grški\",
        \"Gujr\": \"gudžaratski\",
        \"Guru\": \"gurmuki\",
        \"Hanb\": \"Han + Bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"kanji\",
        \"Hano\": \"hanunski\",
        \"Hans\": \"poenostavljena pisava han\",
        \"Hant\": \"tradicionalna pisava han\",
        \"Hebr\": \"hebrejski\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahavhmonska zlogovna pisava\",
        \"Hrkt\": \"japonska zlogovnica\",
        \"Hung\": \"staroogrski\",
        \"Inds\": \"induški\",
        \"Ital\": \"staroitalski\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"javanski\",
        \"Jpan\": \"japonski\",
        \"Kali\": \"karenski\",
        \"Kana\": \"katakana\",
        \"Khar\": \"gandarski\",
        \"Khmr\": \"kmerski\",
        \"Knda\": \"kanadski\",
        \"Kore\": \"korejski\",
        \"Kthi\": \"kajatski\",
        \"Laoo\": \"laoški\",
        \"Latf\": \"fraktura\",
        \"Latg\": \"gelski latinični\",
        \"Latn\": \"latinica\",
        \"Lepc\": \"lepški\",
        \"Limb\": \"limbuški\",
        \"Lina\": \"linearna pisava A\",
        \"Linb\": \"linearna pisava B\",
        \"Lyci\": \"licijski\",
        \"Lydi\": \"lidijski\",
        \"Mand\": \"mandanski\",
        \"Mani\": \"manihejski\",
        \"Maya\": \"majevska slikovna pisava\",
        \"Mero\": \"meroitski\",
        \"Mlym\": \"malajalamski\",
        \"Mong\": \"mongolska\",
        \"Moon\": \"Moonova pisava za slepe\",
        \"Mtei\": \"manipurski\",
        \"Mymr\": \"mjanmarski\",
        \"Ogam\": \"ogamski\",
        \"Olck\": \"santalski\",
        \"Orkh\": \"orkonski\",
        \"Orya\": \"orijski\",
        \"Osma\": \"osmanski\",
        \"Perm\": \"staropermijski\",
        \"Phag\": \"pagpajski\",
        \"Phli\": \"vrezani napisi pahlavi\",
        \"Phlp\": \"psalmski pahlavi\",
        \"Phlv\": \"knjižno palavanski\",
        \"Phnx\": \"feničanski\",
        \"Plrd\": \"Pollardova fonetska pisava\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runski\",
        \"Samr\": \"samaritanski\",
        \"Sara\": \"saratski\",
        \"Sgnw\": \"znakovna pisava\",
        \"Shaw\": \"šojevski\",
        \"Sinh\": \"sinhalski\",
        \"Sund\": \"sundanski\",
        \"Sylo\": \"siletsko-nagarijski\",
        \"Syrc\": \"sirijski\",
        \"Syre\": \"sirska abeceda estrangelo\",
        \"Syrj\": \"zahodnosirijski\",
        \"Syrn\": \"vzhodnosirijski\",
        \"Tagb\": \"tagbanski\",
        \"Taml\": \"tamilski\",
        \"Tavt\": \"tajsko-vietnamski\",
        \"Telu\": \"teluški\",
        \"Teng\": \"tengvarski\",
        \"Tfng\": \"tifinajski\",
        \"Tglg\": \"tagaloški\",
        \"Thaa\": \"tanajski\",
        \"Thai\": \"tajski\",
        \"Tibt\": \"tibetanski\",
        \"Ugar\": \"ugaritski\",
        \"Vaii\": \"zlogovna pisava vai\",
        \"Visp\": \"vidni govor\",
        \"Xpeo\": \"staroperzijski\",
        \"Xsux\": \"sumersko-akadski klinopis\",
        \"Zinh\": \"podedovan\",
        \"Zmth\": \"matematična znamenja\",
        \"Zsye\": \"čustvenček\",
        \"Zsym\": \"simboli\",
        \"Zxxx\": \"nenapisano\",
        \"Zyyy\": \"splošno\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sl.json";
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
        \"Arab\": \"arabski\",
        \"Armi\": \"imperialno-aramejski\",
        \"Armn\": \"armenski\",
        \"Avst\": \"avestanski\",
        \"Bali\": \"balijski\",
        \"Batk\": \"bataški\",
        \"Beng\": \"bengalski\",
        \"Blis\": \"znakovna pisava Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"bramanski\",
        \"Brai\": \"braillova pisava\",
        \"Bugi\": \"buginski\",
        \"Buhd\": \"buhidski\",
        \"Cans\": \"poenotena zlogovna pisava kanadskih staroselcev\",
        \"Cham\": \"Cham\",
        \"Cher\": \"čerokeški\",
        \"Cirt\": \"kirt\",
        \"Copt\": \"koptski\",
        \"Cprt\": \"ciprski\",
        \"Cyrl\": \"cirilica\",
        \"Cyrs\": \"starocerkvenoslovanska cirilica\",
        \"Deva\": \"devanagarščica\",
        \"Dsrt\": \"fonetska pisava deseret\",
        \"Egyd\": \"demotska egipčanska pisava\",
        \"Egyh\": \"hieratska egipčanska pisava\",
        \"Egyp\": \"egipčanska slikovna pisava\",
        \"Ethi\": \"etiopski\",
        \"Geok\": \"cerkvenogruzijski\",
        \"Geor\": \"gruzijski\",
        \"Glag\": \"glagoliški\",
        \"Goth\": \"gotski\",
        \"Grek\": \"grški\",
        \"Gujr\": \"gudžaratski\",
        \"Guru\": \"gurmuki\",
        \"Hanb\": \"Han + Bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"kanji\",
        \"Hano\": \"hanunski\",
        \"Hans\": \"poenostavljena pisava han\",
        \"Hant\": \"tradicionalna pisava han\",
        \"Hebr\": \"hebrejski\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahavhmonska zlogovna pisava\",
        \"Hrkt\": \"japonska zlogovnica\",
        \"Hung\": \"staroogrski\",
        \"Inds\": \"induški\",
        \"Ital\": \"staroitalski\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"javanski\",
        \"Jpan\": \"japonski\",
        \"Kali\": \"karenski\",
        \"Kana\": \"katakana\",
        \"Khar\": \"gandarski\",
        \"Khmr\": \"kmerski\",
        \"Knda\": \"kanadski\",
        \"Kore\": \"korejski\",
        \"Kthi\": \"kajatski\",
        \"Laoo\": \"laoški\",
        \"Latf\": \"fraktura\",
        \"Latg\": \"gelski latinični\",
        \"Latn\": \"latinica\",
        \"Lepc\": \"lepški\",
        \"Limb\": \"limbuški\",
        \"Lina\": \"linearna pisava A\",
        \"Linb\": \"linearna pisava B\",
        \"Lyci\": \"licijski\",
        \"Lydi\": \"lidijski\",
        \"Mand\": \"mandanski\",
        \"Mani\": \"manihejski\",
        \"Maya\": \"majevska slikovna pisava\",
        \"Mero\": \"meroitski\",
        \"Mlym\": \"malajalamski\",
        \"Mong\": \"mongolska\",
        \"Moon\": \"Moonova pisava za slepe\",
        \"Mtei\": \"manipurski\",
        \"Mymr\": \"mjanmarski\",
        \"Ogam\": \"ogamski\",
        \"Olck\": \"santalski\",
        \"Orkh\": \"orkonski\",
        \"Orya\": \"orijski\",
        \"Osma\": \"osmanski\",
        \"Perm\": \"staropermijski\",
        \"Phag\": \"pagpajski\",
        \"Phli\": \"vrezani napisi pahlavi\",
        \"Phlp\": \"psalmski pahlavi\",
        \"Phlv\": \"knjižno palavanski\",
        \"Phnx\": \"feničanski\",
        \"Plrd\": \"Pollardova fonetska pisava\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runski\",
        \"Samr\": \"samaritanski\",
        \"Sara\": \"saratski\",
        \"Sgnw\": \"znakovna pisava\",
        \"Shaw\": \"šojevski\",
        \"Sinh\": \"sinhalski\",
        \"Sund\": \"sundanski\",
        \"Sylo\": \"siletsko-nagarijski\",
        \"Syrc\": \"sirijski\",
        \"Syre\": \"sirska abeceda estrangelo\",
        \"Syrj\": \"zahodnosirijski\",
        \"Syrn\": \"vzhodnosirijski\",
        \"Tagb\": \"tagbanski\",
        \"Taml\": \"tamilski\",
        \"Tavt\": \"tajsko-vietnamski\",
        \"Telu\": \"teluški\",
        \"Teng\": \"tengvarski\",
        \"Tfng\": \"tifinajski\",
        \"Tglg\": \"tagaloški\",
        \"Thaa\": \"tanajski\",
        \"Thai\": \"tajski\",
        \"Tibt\": \"tibetanski\",
        \"Ugar\": \"ugaritski\",
        \"Vaii\": \"zlogovna pisava vai\",
        \"Visp\": \"vidni govor\",
        \"Xpeo\": \"staroperzijski\",
        \"Xsux\": \"sumersko-akadski klinopis\",
        \"Zinh\": \"podedovan\",
        \"Zmth\": \"matematična znamenja\",
        \"Zsye\": \"čustvenček\",
        \"Zsym\": \"simboli\",
        \"Zxxx\": \"nenapisano\",
        \"Zyyy\": \"splošno\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sl.json");
    }
}
