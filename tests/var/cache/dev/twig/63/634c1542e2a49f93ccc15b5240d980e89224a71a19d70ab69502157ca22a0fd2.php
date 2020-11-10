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

/* vendor/symfony/intl/Resources/data/scripts/rm.json */
class __TwigTemplate_056db90aee37c0adff0d449e43dcbab414ad5613c2628b55b86b366f742889b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/rm.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/rm.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arab\",
        \"Armi\": \"arameic imperial\",
        \"Armn\": \"armen\",
        \"Avst\": \"avestic\",
        \"Bali\": \"balinais\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengal\",
        \"Blis\": \"simbols da Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"scrittira da Braille\",
        \"Bugi\": \"buginais\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"simbols autoctons canadais unifitgads\",
        \"Cari\": \"carian\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"coptic\",
        \"Cprt\": \"cipriot\",
        \"Cyrl\": \"cirillic\",
        \"Cyrs\": \"slav da baselgia vegl\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipzian demotic\",
        \"Egyh\": \"egipzian ieratic\",
        \"Egyp\": \"ieroglifas egipzianas\",
        \"Ethi\": \"etiopic\",
        \"Geok\": \"kutsuri\",
        \"Geor\": \"georgian\",
        \"Glag\": \"glagolitic\",
        \"Goth\": \"gotic\",
        \"Grek\": \"grec\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"scrittira chinaisa simplifitgada\",
        \"Hant\": \"scrittira chinaisa tradiziunala\",
        \"Hebr\": \"ebraic\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawn hmong\",
        \"Hrkt\": \"katanaka u hiragana\",
        \"Hung\": \"ungarais vegl\",
        \"Inds\": \"indus\",
        \"Ital\": \"italic vegl\",
        \"Java\": \"javanais\",
        \"Jpan\": \"giapunais\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\\/cambodschan\",
        \"Knda\": \"kannada\",
        \"Kore\": \"corean\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laot\",
        \"Latf\": \"latin (scrittira gotica)\",
        \"Latg\": \"latin (scrittira gaelica)\",
        \"Latn\": \"latin\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linear A\",
        \"Linb\": \"linear B\",
        \"Lyci\": \"lichic\",
        \"Lydi\": \"lidic\",
        \"Mand\": \"mandaic\",
        \"Mani\": \"manicheic\",
        \"Maya\": \"ieroglifas maya\",
        \"Mero\": \"meroitic\",
        \"Mlym\": \"malaisian\",
        \"Mong\": \"mongolic\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meetei mayek\",
        \"Mymr\": \"burmais\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osman\",
        \"Perm\": \"permic vegl\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"pahlavi dad inscripziuns\",
        \"Phlp\": \"pahlavi da psalms\",
        \"Phlv\": \"pahlavi da cudeschs\",
        \"Phnx\": \"fenizian\",
        \"Plrd\": \"fonetica da Pollard\",
        \"Prti\": \"partic dad inscripziuns\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runic\",
        \"Samr\": \"samaritan\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"lingua da segns\",
        \"Shaw\": \"shavian\",
        \"Sinh\": \"singalais\",
        \"Sund\": \"sundanais\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siric\",
        \"Syre\": \"siric estrangelo\",
        \"Syrj\": \"siric dal vest\",
        \"Syrn\": \"siric da l’ost\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"tai lue\",
        \"Taml\": \"tamil\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandais\",
        \"Tibt\": \"tibetan\",
        \"Ugar\": \"ugaritic\",
        \"Vaii\": \"vaii\",
        \"Visp\": \"alfabet visibel\",
        \"Xpeo\": \"persian vegl\",
        \"Xsux\": \"scrittira a cugn sumeric-accadica\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"ertà\",
        \"Zmth\": \"notaziun matematica\",
        \"Zsym\": \"simbols\",
        \"Zxxx\": \"linguas na scrittas\",
        \"Zyyy\": \"betg determinà\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/rm.json";
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
        \"Arab\": \"arab\",
        \"Armi\": \"arameic imperial\",
        \"Armn\": \"armen\",
        \"Avst\": \"avestic\",
        \"Bali\": \"balinais\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengal\",
        \"Blis\": \"simbols da Bliss\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"scrittira da Braille\",
        \"Bugi\": \"buginais\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"chakma\",
        \"Cans\": \"simbols autoctons canadais unifitgads\",
        \"Cari\": \"carian\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Cirt\": \"cirth\",
        \"Copt\": \"coptic\",
        \"Cprt\": \"cipriot\",
        \"Cyrl\": \"cirillic\",
        \"Cyrs\": \"slav da baselgia vegl\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"egipzian demotic\",
        \"Egyh\": \"egipzian ieratic\",
        \"Egyp\": \"ieroglifas egipzianas\",
        \"Ethi\": \"etiopic\",
        \"Geok\": \"kutsuri\",
        \"Geor\": \"georgian\",
        \"Glag\": \"glagolitic\",
        \"Goth\": \"gotic\",
        \"Grek\": \"grec\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunoo\",
        \"Hans\": \"scrittira chinaisa simplifitgada\",
        \"Hant\": \"scrittira chinaisa tradiziunala\",
        \"Hebr\": \"ebraic\",
        \"Hira\": \"hiragana\",
        \"Hmng\": \"pahawn hmong\",
        \"Hrkt\": \"katanaka u hiragana\",
        \"Hung\": \"ungarais vegl\",
        \"Inds\": \"indus\",
        \"Ital\": \"italic vegl\",
        \"Java\": \"javanais\",
        \"Jpan\": \"giapunais\",
        \"Kali\": \"kayah li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"kharoshthi\",
        \"Khmr\": \"khmer\\/cambodschan\",
        \"Knda\": \"kannada\",
        \"Kore\": \"corean\",
        \"Kthi\": \"kaithi\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"laot\",
        \"Latf\": \"latin (scrittira gotica)\",
        \"Latg\": \"latin (scrittira gaelica)\",
        \"Latn\": \"latin\",
        \"Lepc\": \"lepcha\",
        \"Limb\": \"limbu\",
        \"Lina\": \"linear A\",
        \"Linb\": \"linear B\",
        \"Lyci\": \"lichic\",
        \"Lydi\": \"lidic\",
        \"Mand\": \"mandaic\",
        \"Mani\": \"manicheic\",
        \"Maya\": \"ieroglifas maya\",
        \"Mero\": \"meroitic\",
        \"Mlym\": \"malaisian\",
        \"Mong\": \"mongolic\",
        \"Moon\": \"moon\",
        \"Mtei\": \"meetei mayek\",
        \"Mymr\": \"burmais\",
        \"Nkoo\": \"n’ko\",
        \"Ogam\": \"ogham\",
        \"Olck\": \"ol chiki\",
        \"Orkh\": \"orkhon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osman\",
        \"Perm\": \"permic vegl\",
        \"Phag\": \"phags-pa\",
        \"Phli\": \"pahlavi dad inscripziuns\",
        \"Phlp\": \"pahlavi da psalms\",
        \"Phlv\": \"pahlavi da cudeschs\",
        \"Phnx\": \"fenizian\",
        \"Plrd\": \"fonetica da Pollard\",
        \"Prti\": \"partic dad inscripziuns\",
        \"Rjng\": \"rejang\",
        \"Roro\": \"rongorongo\",
        \"Runr\": \"runic\",
        \"Samr\": \"samaritan\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurashtra\",
        \"Sgnw\": \"lingua da segns\",
        \"Shaw\": \"shavian\",
        \"Sinh\": \"singalais\",
        \"Sund\": \"sundanais\",
        \"Sylo\": \"syloti nagri\",
        \"Syrc\": \"siric\",
        \"Syre\": \"siric estrangelo\",
        \"Syrj\": \"siric dal vest\",
        \"Syrn\": \"siric da l’ost\",
        \"Tagb\": \"tagbanwa\",
        \"Tale\": \"tai le\",
        \"Talu\": \"tai lue\",
        \"Taml\": \"tamil\",
        \"Tavt\": \"tai viet\",
        \"Telu\": \"telugu\",
        \"Teng\": \"tengwar\",
        \"Tfng\": \"tifinagh\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandais\",
        \"Tibt\": \"tibetan\",
        \"Ugar\": \"ugaritic\",
        \"Vaii\": \"vaii\",
        \"Visp\": \"alfabet visibel\",
        \"Xpeo\": \"persian vegl\",
        \"Xsux\": \"scrittira a cugn sumeric-accadica\",
        \"Yiii\": \"yi\",
        \"Zinh\": \"ertà\",
        \"Zmth\": \"notaziun matematica\",
        \"Zsym\": \"simbols\",
        \"Zxxx\": \"linguas na scrittas\",
        \"Zyyy\": \"betg determinà\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/rm.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/rm.json");
    }
}
