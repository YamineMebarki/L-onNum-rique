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

/* vendor/symfony/intl/Resources/data/scripts/lb.json */
class __TwigTemplate_8e7e14a6c80117ce6af1f12b6e5042989a3fffac45843d863330df3eb1082b15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/lb.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/lb.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arabesch\",
        \"Armi\": \"Armi\",
        \"Armn\": \"Armenesch\",
        \"Avst\": \"Avestesch\",
        \"Bali\": \"Balinesesch\",
        \"Batk\": \"Battakesch\",
        \"Beng\": \"Bengalesch\",
        \"Blis\": \"Bliss-Symboler\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Blanneschrëft\",
        \"Bugi\": \"Buginesesch\",
        \"Buhd\": \"Buhid\",
        \"Cans\": \"UCAS\",
        \"Cari\": \"Karesch\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptesch\",
        \"Cprt\": \"Zypriotesch\",
        \"Cyrl\": \"Kyrillesch\",
        \"Cyrs\": \"Alkiercheslawesch\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Egyd\": \"Egyptesch-Demotesch\",
        \"Egyh\": \"Egyptesch-Hieratesch\",
        \"Egyp\": \"Egyptesch Hieroglyphen\",
        \"Ethi\": \"Ethiopesch\",
        \"Geok\": \"Khutsuri\",
        \"Geor\": \"Georgesch\",
        \"Glag\": \"Glagolitesch\",
        \"Goth\": \"Gotesch\",
        \"Grek\": \"Griichesch\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Chinesesch\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Vereinfacht\",
        \"Hant\": \"Traditionell\",
        \"Hebr\": \"Hebräesch\",
        \"Hira\": \"Hiragana\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana oder Hiragana\",
        \"Hung\": \"Alungaresch\",
        \"Inds\": \"Indus-Schrëft\",
        \"Ital\": \"Alitalesch\",
        \"Java\": \"Javanesesch\",
        \"Jpan\": \"Japanesch\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreanesch\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Laotesch\",
        \"Latf\": \"Laténgesch-Fraktur-Variant\",
        \"Latg\": \"Laténgesch-Gällesch Variant\",
        \"Latn\": \"Laténgesch\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lyci\": \"Lykesch\",
        \"Lydi\": \"Lydesch\",
        \"Mand\": \"Mandäesch\",
        \"Mani\": \"Manichäesch\",
        \"Maya\": \"Maya-Hieroglyphen\",
        \"Mero\": \"Meroitesch\",
        \"Mlym\": \"Malaysesch\",
        \"Mong\": \"Mongolesch\",
        \"Moon\": \"Moon\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mymr\": \"Birmanesch\",
        \"Nkoo\": \"N’Ko\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orchon-Runen\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Osmanesch\",
        \"Perm\": \"Alpermesch\",
        \"Phag\": \"Phags-pa\",
        \"Phlv\": \"Pahlavi\",
        \"Phnx\": \"Phönizesch\",
        \"Plrd\": \"Pollard Phonetesch\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runeschrëft\",
        \"Samr\": \"Samaritanesch\",
        \"Sara\": \"Sarati\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Zeechesprooch\",
        \"Shaw\": \"Shaw-Alphabet\",
        \"Sinh\": \"Singhalesesch\",
        \"Sund\": \"Sundanesesch\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syresch\",
        \"Syre\": \"Syresch-Estrangelo-Variant\",
        \"Syrj\": \"Westsyresch\",
        \"Syrn\": \"Ostsyresch\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue\",
        \"Taml\": \"Tamilesch\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Dagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetesch\",
        \"Ugar\": \"Ugaritesch\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Siichtbar Sprooch\",
        \"Xpeo\": \"Alpersesch\",
        \"Xsux\": \"Sumeresch-akkadesch Keilschrëft\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Geierfte Schrëftwäert\",
        \"Zsym\": \"Symboler\",
        \"Zxxx\": \"Ouni Schrëft\",
        \"Zyyy\": \"Onbestëmmt\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/lb.json";
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
        \"Arab\": \"Arabesch\",
        \"Armi\": \"Armi\",
        \"Armn\": \"Armenesch\",
        \"Avst\": \"Avestesch\",
        \"Bali\": \"Balinesesch\",
        \"Batk\": \"Battakesch\",
        \"Beng\": \"Bengalesch\",
        \"Blis\": \"Bliss-Symboler\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Blanneschrëft\",
        \"Bugi\": \"Buginesesch\",
        \"Buhd\": \"Buhid\",
        \"Cans\": \"UCAS\",
        \"Cari\": \"Karesch\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptesch\",
        \"Cprt\": \"Zypriotesch\",
        \"Cyrl\": \"Kyrillesch\",
        \"Cyrs\": \"Alkiercheslawesch\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Egyd\": \"Egyptesch-Demotesch\",
        \"Egyh\": \"Egyptesch-Hieratesch\",
        \"Egyp\": \"Egyptesch Hieroglyphen\",
        \"Ethi\": \"Ethiopesch\",
        \"Geok\": \"Khutsuri\",
        \"Geor\": \"Georgesch\",
        \"Glag\": \"Glagolitesch\",
        \"Goth\": \"Gotesch\",
        \"Grek\": \"Griichesch\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Chinesesch\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Vereinfacht\",
        \"Hant\": \"Traditionell\",
        \"Hebr\": \"Hebräesch\",
        \"Hira\": \"Hiragana\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana oder Hiragana\",
        \"Hung\": \"Alungaresch\",
        \"Inds\": \"Indus-Schrëft\",
        \"Ital\": \"Alitalesch\",
        \"Java\": \"Javanesesch\",
        \"Jpan\": \"Japanesch\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreanesch\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Laotesch\",
        \"Latf\": \"Laténgesch-Fraktur-Variant\",
        \"Latg\": \"Laténgesch-Gällesch Variant\",
        \"Latn\": \"Laténgesch\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lyci\": \"Lykesch\",
        \"Lydi\": \"Lydesch\",
        \"Mand\": \"Mandäesch\",
        \"Mani\": \"Manichäesch\",
        \"Maya\": \"Maya-Hieroglyphen\",
        \"Mero\": \"Meroitesch\",
        \"Mlym\": \"Malaysesch\",
        \"Mong\": \"Mongolesch\",
        \"Moon\": \"Moon\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mymr\": \"Birmanesch\",
        \"Nkoo\": \"N’Ko\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orchon-Runen\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Osmanesch\",
        \"Perm\": \"Alpermesch\",
        \"Phag\": \"Phags-pa\",
        \"Phlv\": \"Pahlavi\",
        \"Phnx\": \"Phönizesch\",
        \"Plrd\": \"Pollard Phonetesch\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runeschrëft\",
        \"Samr\": \"Samaritanesch\",
        \"Sara\": \"Sarati\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Zeechesprooch\",
        \"Shaw\": \"Shaw-Alphabet\",
        \"Sinh\": \"Singhalesesch\",
        \"Sund\": \"Sundanesesch\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syresch\",
        \"Syre\": \"Syresch-Estrangelo-Variant\",
        \"Syrj\": \"Westsyresch\",
        \"Syrn\": \"Ostsyresch\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue\",
        \"Taml\": \"Tamilesch\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Dagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetesch\",
        \"Ugar\": \"Ugaritesch\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Siichtbar Sprooch\",
        \"Xpeo\": \"Alpersesch\",
        \"Xsux\": \"Sumeresch-akkadesch Keilschrëft\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Geierfte Schrëftwäert\",
        \"Zsym\": \"Symboler\",
        \"Zxxx\": \"Ouni Schrëft\",
        \"Zyyy\": \"Onbestëmmt\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/lb.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/lb.json");
    }
}
