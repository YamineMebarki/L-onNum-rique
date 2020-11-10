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

/* vendor/symfony/intl/Resources/data/scripts/fr.json */
class __TwigTemplate_c3b6c41f37982b0efec53d9e282f73fdc07912e318150ce04ea45e58a21c739f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fr.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fr.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabe\",
        \"Armi\": \"araméen impérial\",
        \"Armn\": \"arménien\",
        \"Avst\": \"avestique\",
        \"Bali\": \"balinais\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengali\",
        \"Blis\": \"symboles Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brâhmî\",
        \"Brai\": \"braille\",
        \"Bugi\": \"bouguis\",
        \"Buhd\": \"bouhide\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"syllabaire autochtone canadien unifié\",
        \"Cari\": \"carien\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"copte\",
        \"Cprt\": \"syllabaire chypriote\",
        \"Cyrl\": \"cyrillique\",
        \"Cyrs\": \"cyrillique (variante slavonne)\",
        \"Deva\": \"dévanagari\",
        \"Dsrt\": \"déséret\",
        \"Egyd\": \"démotique égyptien\",
        \"Egyh\": \"hiératique égyptien\",
        \"Egyp\": \"hiéroglyphes égyptiens\",
        \"Elym\": \"élymaïque\",
        \"Ethi\": \"éthiopique\",
        \"Geok\": \"géorgien khoutsouri\",
        \"Geor\": \"géorgien\",
        \"Glag\": \"glagolitique\",
        \"Goth\": \"gotique\",
        \"Grek\": \"grec\",
        \"Gujr\": \"goudjarâtî\",
        \"Guru\": \"gourmoukhî\",
        \"Hanb\": \"han avec bopomofo\",
        \"Hang\": \"hangûl\",
        \"Hani\": \"sinogrammes\",
        \"Hano\": \"hanounóo\",
        \"Hans\": \"simplifié\",
        \"Hant\": \"traditionnel\",
        \"Hebr\": \"hébreu\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hmnp\": \"nyiakeng puachue hmong\",
        \"Hrkt\": \"katakana ou hiragana\",
        \"Hung\": \"ancien hongrois\",
        \"Inds\": \"indus\",
        \"Ital\": \"ancien italique\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanais\",
        \"Jpan\": \"japonais\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharochthî\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannara\",
        \"Kore\": \"coréen\",
        \"Kthi\": \"kaithî\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"latin (variante brisée)\",
        \"Latg\": \"latin (variante gaélique)\",
        \"Latn\": \"latin\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbou\",
        \"Lina\": \"linéaire A\",
        \"Linb\": \"linéaire B\",
        \"Lyci\": \"lycien\",
        \"Lydi\": \"lydien\",
        \"Mand\": \"mandéen\",
        \"Mani\": \"manichéen\",
        \"Maya\": \"hiéroglyphes mayas\",
        \"Mero\": \"méroïtique\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birman\",
        \"Nand\": \"nandinagari\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogam\",
        \"Olck\": \"ol tchiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanais\",
        \"Perm\": \"ancien permien\",
        \"Phag\": \"phags pa\",
        \"Phli\": \"pehlevi des inscriptions\",
        \"Phlp\": \"pehlevi des psautiers\",
        \"Phlv\": \"pehlevi des livres\",
        \"Phnx\": \"phénicien\",
        \"Plrd\": \"phonétique de Pollard\",
        \"Prti\": \"parthe des inscriptions\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runique\",
        \"Samr\": \"samaritain\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"écriture des signes\",
        \"Shaw\": \"shavien\",
        \"Sinh\": \"cingalais\",
        \"Sund\": \"sundanais\",
        \"Sylo\": \"sylotî nâgrî\",
        \"Syrc\": \"syriaque\",
        \"Syre\": \"syriaque estranghélo\",
        \"Syrj\": \"syriaque occidental\",
        \"Syrn\": \"syriaque oriental\",
        \"Tagb\": \"tagbanoua\",
        \"Tale\": \"taï-le\",
        \"Talu\": \"nouveau taï-lue\",
        \"Taml\": \"tamoul\",
        \"Tavt\": \"taï viêt\",
        \"Telu\": \"télougou\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagal\",
        \"Thaa\": \"thâna\",
        \"Thai\": \"thaï\",
        \"Tibt\": \"tibétain\",
        \"Ugar\": \"ougaritique\",
        \"Vaii\": \"vaï\",
        \"Visp\": \"parole visible\",
        \"Wcho\": \"wantcho\",
        \"Xpeo\": \"cunéiforme persépolitain\",
        \"Xsux\": \"cunéiforme suméro-akkadien\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"hérité\",
        \"Zmth\": \"notation mathématique\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symboles\",
        \"Zxxx\": \"non écrit\",
        \"Zyyy\": \"commun\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/fr.json";
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
        \"Arab\": \"arabe\",
        \"Armi\": \"araméen impérial\",
        \"Armn\": \"arménien\",
        \"Avst\": \"avestique\",
        \"Bali\": \"balinais\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengali\",
        \"Blis\": \"symboles Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brâhmî\",
        \"Brai\": \"braille\",
        \"Bugi\": \"bouguis\",
        \"Buhd\": \"bouhide\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"syllabaire autochtone canadien unifié\",
        \"Cari\": \"carien\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"copte\",
        \"Cprt\": \"syllabaire chypriote\",
        \"Cyrl\": \"cyrillique\",
        \"Cyrs\": \"cyrillique (variante slavonne)\",
        \"Deva\": \"dévanagari\",
        \"Dsrt\": \"déséret\",
        \"Egyd\": \"démotique égyptien\",
        \"Egyh\": \"hiératique égyptien\",
        \"Egyp\": \"hiéroglyphes égyptiens\",
        \"Elym\": \"élymaïque\",
        \"Ethi\": \"éthiopique\",
        \"Geok\": \"géorgien khoutsouri\",
        \"Geor\": \"géorgien\",
        \"Glag\": \"glagolitique\",
        \"Goth\": \"gotique\",
        \"Grek\": \"grec\",
        \"Gujr\": \"goudjarâtî\",
        \"Guru\": \"gourmoukhî\",
        \"Hanb\": \"han avec bopomofo\",
        \"Hang\": \"hangûl\",
        \"Hani\": \"sinogrammes\",
        \"Hano\": \"hanounóo\",
        \"Hans\": \"simplifié\",
        \"Hant\": \"traditionnel\",
        \"Hebr\": \"hébreu\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawh hmong\",
        \"Hmnp\": \"nyiakeng puachue hmong\",
        \"Hrkt\": \"katakana ou hiragana\",
        \"Hung\": \"ancien hongrois\",
        \"Inds\": \"indus\",
        \"Ital\": \"ancien italique\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanais\",
        \"Jpan\": \"japonais\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharochthî\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannara\",
        \"Kore\": \"coréen\",
        \"Kthi\": \"kaithî\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"latin (variante brisée)\",
        \"Latg\": \"latin (variante gaélique)\",
        \"Latn\": \"latin\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbou\",
        \"Lina\": \"linéaire A\",
        \"Linb\": \"linéaire B\",
        \"Lyci\": \"lycien\",
        \"Lydi\": \"lydien\",
        \"Mand\": \"mandéen\",
        \"Mani\": \"manichéen\",
        \"Maya\": \"hiéroglyphes mayas\",
        \"Mero\": \"méroïtique\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meitei mayek\",
        \"Mymr\": \"birman\",
        \"Nand\": \"nandinagari\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogam\",
        \"Olck\": \"ol tchiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"odia\",
        \"Osma\": \"osmanais\",
        \"Perm\": \"ancien permien\",
        \"Phag\": \"phags pa\",
        \"Phli\": \"pehlevi des inscriptions\",
        \"Phlp\": \"pehlevi des psautiers\",
        \"Phlv\": \"pehlevi des livres\",
        \"Phnx\": \"phénicien\",
        \"Plrd\": \"phonétique de Pollard\",
        \"Prti\": \"parthe des inscriptions\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runique\",
        \"Samr\": \"samaritain\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"écriture des signes\",
        \"Shaw\": \"shavien\",
        \"Sinh\": \"cingalais\",
        \"Sund\": \"sundanais\",
        \"Sylo\": \"sylotî nâgrî\",
        \"Syrc\": \"syriaque\",
        \"Syre\": \"syriaque estranghélo\",
        \"Syrj\": \"syriaque occidental\",
        \"Syrn\": \"syriaque oriental\",
        \"Tagb\": \"tagbanoua\",
        \"Tale\": \"taï-le\",
        \"Talu\": \"nouveau taï-lue\",
        \"Taml\": \"tamoul\",
        \"Tavt\": \"taï viêt\",
        \"Telu\": \"télougou\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagal\",
        \"Thaa\": \"thâna\",
        \"Thai\": \"thaï\",
        \"Tibt\": \"tibétain\",
        \"Ugar\": \"ougaritique\",
        \"Vaii\": \"vaï\",
        \"Visp\": \"parole visible\",
        \"Wcho\": \"wantcho\",
        \"Xpeo\": \"cunéiforme persépolitain\",
        \"Xsux\": \"cunéiforme suméro-akkadien\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"hérité\",
        \"Zmth\": \"notation mathématique\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symboles\",
        \"Zxxx\": \"non écrit\",
        \"Zyyy\": \"commun\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/fr.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/fr.json");
    }
}
