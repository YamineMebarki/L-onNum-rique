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

/* vendor/symfony/intl/Resources/data/scripts/pl.json */
class __TwigTemplate_5a3e0532fb371d1e0dba4d301a906d2a0a455761a7004b53c097bfd952b5986b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabskie\",
        \"Armi\": \"armi\",
        \"Armn\": \"ormiańskie\",
        \"Avst\": \"awestyjskie\",
        \"Bali\": \"balijskie\",
        \"Bamu\": \"bamun\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalskie\",
        \"Blis\": \"symbole Blissa\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"Braille’a\",
        \"Bugi\": \"bugińskie\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"zunifikowane symbole kanadyjskich autochtonów\",
        \"Cari\": \"karyjskie\",
        \"Cham\": \"czamskie\",
        \"Cher\": \"czirokeski\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptyjskie\",
        \"Cprt\": \"cypryjskie\",
        \"Cyrl\": \"cyrylica\",
        \"Cyrs\": \"cyrylica staro-cerkiewno-słowiańska\",
        \"Deva\": \"dewanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipskie demotyczne\",
        \"Egyh\": \"egipskie hieratyczne\",
        \"Egyp\": \"hieroglify egipskie\",
        \"Ethi\": \"etiopskie\",
        \"Geok\": \"gruzińskie chucuri\",
        \"Geor\": \"gruzińskie\",
        \"Glag\": \"głagolica\",
        \"Goth\": \"gotyckie\",
        \"Grek\": \"greckie\",
        \"Gujr\": \"gudżarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"chińskie z bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"chińskie\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"uproszczone\",
        \"Hant\": \"tradycyjne\",
        \"Hebr\": \"hebrajskie\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"sylabariusze japońskie\",
        \"Hung\": \"starowęgierskie\",
        \"Inds\": \"indus\",
        \"Ital\": \"starowłoskie\",
        \"Jamo\": \"jamo\",
        \"Java\": \"jawajskie\",
        \"Jpan\": \"japońskie\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"charosti\",
        \"Khmr\": \"khmerskie\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreańskie\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotańskie\",
        \"Latf\": \"łaciński - fraktura\",
        \"Latg\": \"łaciński - odmiana gaelicka\",
        \"Latn\": \"łacińskie\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linearne A\",
        \"Linb\": \"linearne B\",
        \"Lyci\": \"likijskie\",
        \"Lydi\": \"lidyjskie\",
        \"Mand\": \"mandejskie\",
        \"Mani\": \"manichejskie\",
        \"Maya\": \"hieroglify Majów\",
        \"Mero\": \"meroickie\",
        \"Mlym\": \"malajalam\",
        \"Mong\": \"mongolskie\",
        \"Moon\": \"Moon’a\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birmańskie\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orchońskie\",
        \"Orya\": \"orija\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"staropermskie\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskrypcyjne pahlawi\",
        \"Phlp\": \"pahlawi psałterzowy\",
        \"Phlv\": \"pahlawi książkowy\",
        \"Phnx\": \"fenicki\",
        \"Plrd\": \"fonetyczny Pollard’a\",
        \"Prti\": \"partyjski inskrypcyjny\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runiczne\",
        \"Samr\": \"samarytański\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"pismo znakowe\",
        \"Shaw\": \"shawa\",
        \"Sinh\": \"syngaleskie\",
        \"Sund\": \"sundajskie\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syryjski\",
        \"Syre\": \"syriacki estrangelo\",
        \"Syrj\": \"syryjski (odmiana zachodnia)\",
        \"Syrn\": \"syryjski (odmiana wschodnia)\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"nowy tai lue\",
        \"Taml\": \"tamilskie\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh (berberski)\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tajskie\",
        \"Tibt\": \"tybetańskie\",
        \"Ugar\": \"ugaryckie\",
        \"Vaii\": \"vai\",
        \"Visp\": \"Visible Speech\",
        \"Xpeo\": \"staroperskie\",
        \"Xsux\": \"klinowe sumero-akadyjskie\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"dziedziczone\",
        \"Zmth\": \"notacja matematyczna\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbole\",
        \"Zxxx\": \"język bez systemu pisma\",
        \"Zyyy\": \"wspólne\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/pl.json";
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
        \"Arab\": \"arabskie\",
        \"Armi\": \"armi\",
        \"Armn\": \"ormiańskie\",
        \"Avst\": \"awestyjskie\",
        \"Bali\": \"balijskie\",
        \"Bamu\": \"bamun\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengalskie\",
        \"Blis\": \"symbole Blissa\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"Braille’a\",
        \"Bugi\": \"bugińskie\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"zunifikowane symbole kanadyjskich autochtonów\",
        \"Cari\": \"karyjskie\",
        \"Cham\": \"czamskie\",
        \"Cher\": \"czirokeski\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"koptyjskie\",
        \"Cprt\": \"cypryjskie\",
        \"Cyrl\": \"cyrylica\",
        \"Cyrs\": \"cyrylica staro-cerkiewno-słowiańska\",
        \"Deva\": \"dewanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipskie demotyczne\",
        \"Egyh\": \"egipskie hieratyczne\",
        \"Egyp\": \"hieroglify egipskie\",
        \"Ethi\": \"etiopskie\",
        \"Geok\": \"gruzińskie chucuri\",
        \"Geor\": \"gruzińskie\",
        \"Glag\": \"głagolica\",
        \"Goth\": \"gotyckie\",
        \"Grek\": \"greckie\",
        \"Gujr\": \"gudżarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"chińskie z bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"chińskie\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"uproszczone\",
        \"Hant\": \"tradycyjne\",
        \"Hebr\": \"hebrajskie\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hrkt\": \"sylabariusze japońskie\",
        \"Hung\": \"starowęgierskie\",
        \"Inds\": \"indus\",
        \"Ital\": \"starowłoskie\",
        \"Jamo\": \"jamo\",
        \"Java\": \"jawajskie\",
        \"Jpan\": \"japońskie\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"charosti\",
        \"Khmr\": \"khmerskie\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreańskie\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laotańskie\",
        \"Latf\": \"łaciński - fraktura\",
        \"Latg\": \"łaciński - odmiana gaelicka\",
        \"Latn\": \"łacińskie\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linearne A\",
        \"Linb\": \"linearne B\",
        \"Lyci\": \"likijskie\",
        \"Lydi\": \"lidyjskie\",
        \"Mand\": \"mandejskie\",
        \"Mani\": \"manichejskie\",
        \"Maya\": \"hieroglify Majów\",
        \"Mero\": \"meroickie\",
        \"Mlym\": \"malajalam\",
        \"Mong\": \"mongolskie\",
        \"Moon\": \"Moon’a\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birmańskie\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orchońskie\",
        \"Orya\": \"orija\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"staropermskie\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"inskrypcyjne pahlawi\",
        \"Phlp\": \"pahlawi psałterzowy\",
        \"Phlv\": \"pahlawi książkowy\",
        \"Phnx\": \"fenicki\",
        \"Plrd\": \"fonetyczny Pollard’a\",
        \"Prti\": \"partyjski inskrypcyjny\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runiczne\",
        \"Samr\": \"samarytański\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"pismo znakowe\",
        \"Shaw\": \"shawa\",
        \"Sinh\": \"syngaleskie\",
        \"Sund\": \"sundajskie\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"syryjski\",
        \"Syre\": \"syriacki estrangelo\",
        \"Syrj\": \"syryjski (odmiana zachodnia)\",
        \"Syrn\": \"syryjski (odmiana wschodnia)\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"nowy tai lue\",
        \"Taml\": \"tamilskie\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh (berberski)\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tajskie\",
        \"Tibt\": \"tybetańskie\",
        \"Ugar\": \"ugaryckie\",
        \"Vaii\": \"vai\",
        \"Visp\": \"Visible Speech\",
        \"Xpeo\": \"staroperskie\",
        \"Xsux\": \"klinowe sumero-akadyjskie\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"dziedziczone\",
        \"Zmth\": \"notacja matematyczna\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbole\",
        \"Zxxx\": \"język bez systemu pisma\",
        \"Zyyy\": \"wspólne\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/pl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/pl.json");
    }
}
