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

/* vendor/symfony/intl/Resources/data/scripts/en.json */
class __TwigTemplate_dc72cd2a03444e938699176beeea2820ff984ecdb5796983f2d8e91c5e4046e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/en.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/en.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Adlm\": \"Adlam\",
        \"Afak\": \"Afaka\",
        \"Aghb\": \"Caucasian Albanian\",
        \"Ahom\": \"Ahom\",
        \"Arab\": \"Arabic\",
        \"Armi\": \"Imperial Aramaic\",
        \"Armn\": \"Armenian\",
        \"Avst\": \"Avestan\",
        \"Bali\": \"Balinese\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bangla\",
        \"Bhks\": \"Bhaiksuki\",
        \"Blis\": \"Blissymbols\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Buginese\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Unified Canadian Aboriginal Syllabics\",
        \"Cari\": \"Carian\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Coptic\",
        \"Cprt\": \"Cypriot\",
        \"Cyrl\": \"Cyrillic\",
        \"Cyrs\": \"Old Church Slavonic Cyrillic\",
        \"Deva\": \"Devanagari\",
        \"Dogr\": \"Dogra\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Duployan shorthand\",
        \"Egyd\": \"Egyptian demotic\",
        \"Egyh\": \"Egyptian hieratic\",
        \"Egyp\": \"Egyptian hieroglyphs\",
        \"Elba\": \"Elbasan\",
        \"Elym\": \"Elymaic\",
        \"Ethi\": \"Ethiopic\",
        \"Geok\": \"Georgian Khutsuri\",
        \"Geor\": \"Georgian\",
        \"Glag\": \"Glagolitic\",
        \"Gong\": \"Gunjala Gondi\",
        \"Gonm\": \"Masaram Gondi\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han with Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Simplified\",
        \"Hant\": \"Traditional\",
        \"Hatr\": \"Hatran\",
        \"Hebr\": \"Hebrew\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Anatolian Hieroglyphs\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hmnp\": \"Nyiakeng Puachue Hmong\",
        \"Hrkt\": \"Japanese syllabaries\",
        \"Hung\": \"Old Hungarian\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Old Italic\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Javanese\",
        \"Jpan\": \"Japanese\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korean\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Fraktur Latin\",
        \"Latg\": \"Gaelic Latin\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycian\",
        \"Lydi\": \"Lydian\",
        \"Mahj\": \"Mahajani\",
        \"Maka\": \"Makasar\",
        \"Mand\": \"Mandaean\",
        \"Mani\": \"Manichaean\",
        \"Marc\": \"Marchen\",
        \"Maya\": \"Mayan hieroglyphs\",
        \"Medf\": \"Medefaidrin\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Meroitic Cursive\",
        \"Mero\": \"Meroitic\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolian\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"Myanmar\",
        \"Nand\": \"Nandinagari\",
        \"Narb\": \"Old North Arabian\",
        \"Nbat\": \"Nabataean\",
        \"Newa\": \"Newa\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Odia\",
        \"Osge\": \"Osage\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyrene\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"Old Permic\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inscriptional Pahlavi\",
        \"Phlp\": \"Psalter Pahlavi\",
        \"Phlv\": \"Book Pahlavi\",
        \"Phnx\": \"Phoenician\",
        \"Plrd\": \"Pollard Phonetic\",
        \"Prti\": \"Inscriptional Parthian\",
        \"Qaag\": \"Zawgyi\",
        \"Rjng\": \"Rejang\",
        \"Rohg\": \"Hanifi Rohingya\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritan\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Old South Arabian\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"Shavian\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sogd\": \"Sogdian\",
        \"Sogo\": \"Old Sogdian\",
        \"Sora\": \"Sora Sompeng\",
        \"Soyo\": \"Soyombo\",
        \"Sund\": \"Sundanese\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syriac\",
        \"Syre\": \"Estrangelo Syriac\",
        \"Syrj\": \"Western Syriac\",
        \"Syrn\": \"Eastern Syriac\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"New Tai Lue\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetan\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritic\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Visible Speech\",
        \"Wara\": \"Varang Kshiti\",
        \"Wcho\": \"Wancho\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Old Persian\",
        \"Xsux\": \"Sumero-Akkadian Cuneiform\",
        \"Yiii\": \"Yi\",
        \"Zanb\": \"Zanabazar Square\",
        \"Zinh\": \"Inherited\",
        \"Zmth\": \"Mathematical Notation\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Symbols\",
        \"Zxxx\": \"Unwritten\",
        \"Zyyy\": \"Common\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/en.json";
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
        \"Adlm\": \"Adlam\",
        \"Afak\": \"Afaka\",
        \"Aghb\": \"Caucasian Albanian\",
        \"Ahom\": \"Ahom\",
        \"Arab\": \"Arabic\",
        \"Armi\": \"Imperial Aramaic\",
        \"Armn\": \"Armenian\",
        \"Avst\": \"Avestan\",
        \"Bali\": \"Balinese\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bangla\",
        \"Bhks\": \"Bhaiksuki\",
        \"Blis\": \"Blissymbols\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Buginese\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Unified Canadian Aboriginal Syllabics\",
        \"Cari\": \"Carian\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Coptic\",
        \"Cprt\": \"Cypriot\",
        \"Cyrl\": \"Cyrillic\",
        \"Cyrs\": \"Old Church Slavonic Cyrillic\",
        \"Deva\": \"Devanagari\",
        \"Dogr\": \"Dogra\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Duployan shorthand\",
        \"Egyd\": \"Egyptian demotic\",
        \"Egyh\": \"Egyptian hieratic\",
        \"Egyp\": \"Egyptian hieroglyphs\",
        \"Elba\": \"Elbasan\",
        \"Elym\": \"Elymaic\",
        \"Ethi\": \"Ethiopic\",
        \"Geok\": \"Georgian Khutsuri\",
        \"Geor\": \"Georgian\",
        \"Glag\": \"Glagolitic\",
        \"Gong\": \"Gunjala Gondi\",
        \"Gonm\": \"Masaram Gondi\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han with Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Simplified\",
        \"Hant\": \"Traditional\",
        \"Hatr\": \"Hatran\",
        \"Hebr\": \"Hebrew\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Anatolian Hieroglyphs\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hmnp\": \"Nyiakeng Puachue Hmong\",
        \"Hrkt\": \"Japanese syllabaries\",
        \"Hung\": \"Old Hungarian\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Old Italic\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Javanese\",
        \"Jpan\": \"Japanese\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korean\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Fraktur Latin\",
        \"Latg\": \"Gaelic Latin\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycian\",
        \"Lydi\": \"Lydian\",
        \"Mahj\": \"Mahajani\",
        \"Maka\": \"Makasar\",
        \"Mand\": \"Mandaean\",
        \"Mani\": \"Manichaean\",
        \"Marc\": \"Marchen\",
        \"Maya\": \"Mayan hieroglyphs\",
        \"Medf\": \"Medefaidrin\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Meroitic Cursive\",
        \"Mero\": \"Meroitic\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolian\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"Myanmar\",
        \"Nand\": \"Nandinagari\",
        \"Narb\": \"Old North Arabian\",
        \"Nbat\": \"Nabataean\",
        \"Newa\": \"Newa\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Odia\",
        \"Osge\": \"Osage\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyrene\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"Old Permic\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inscriptional Pahlavi\",
        \"Phlp\": \"Psalter Pahlavi\",
        \"Phlv\": \"Book Pahlavi\",
        \"Phnx\": \"Phoenician\",
        \"Plrd\": \"Pollard Phonetic\",
        \"Prti\": \"Inscriptional Parthian\",
        \"Qaag\": \"Zawgyi\",
        \"Rjng\": \"Rejang\",
        \"Rohg\": \"Hanifi Rohingya\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritan\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Old South Arabian\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"Shavian\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sogd\": \"Sogdian\",
        \"Sogo\": \"Old Sogdian\",
        \"Sora\": \"Sora Sompeng\",
        \"Soyo\": \"Soyombo\",
        \"Sund\": \"Sundanese\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syriac\",
        \"Syre\": \"Estrangelo Syriac\",
        \"Syrj\": \"Western Syriac\",
        \"Syrn\": \"Eastern Syriac\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"New Tai Lue\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetan\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritic\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Visible Speech\",
        \"Wara\": \"Varang Kshiti\",
        \"Wcho\": \"Wancho\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Old Persian\",
        \"Xsux\": \"Sumero-Akkadian Cuneiform\",
        \"Yiii\": \"Yi\",
        \"Zanb\": \"Zanabazar Square\",
        \"Zinh\": \"Inherited\",
        \"Zmth\": \"Mathematical Notation\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Symbols\",
        \"Zxxx\": \"Unwritten\",
        \"Zyyy\": \"Common\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/en.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/en.json");
    }
}