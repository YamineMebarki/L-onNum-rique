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

/* vendor/symfony/intl/Resources/data/scripts/id.json */
class __TwigTemplate_af058e3e4c4d5d53b0e6d36d4afcf79c898f49c323faff679f8873f934c50d4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/id.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/id.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"Afaka\",
        \"Aghb\": \"Albania Kaukasia\",
        \"Arab\": \"Arab\",
        \"Armi\": \"Aram Imperial\",
        \"Armn\": \"Armenia\",
        \"Avst\": \"Avesta\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengali\",
        \"Blis\": \"Blissymbol\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugis\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Simbol Aborigin Kanada Kesatuan\",
        \"Cari\": \"Karia\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptik\",
        \"Cprt\": \"Siprus\",
        \"Cyrl\": \"Sirilik\",
        \"Cyrs\": \"Gereja Slavonia Sirilik Lama\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Stenografi Duployan\",
        \"Egyd\": \"Demotik Mesir\",
        \"Egyh\": \"Hieratik Mesir\",
        \"Egyp\": \"Hieroglip Mesir\",
        \"Ethi\": \"Etiopia\",
        \"Geok\": \"Georgian Khutsuri\",
        \"Geor\": \"Georgia\",
        \"Glag\": \"Glagolitic\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Yunani\",
        \"Gujr\": \"Gujarat\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han dengan Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Sederhana\",
        \"Hant\": \"Tradisional\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Hieroglif Anatolia\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana atau Hiragana\",
        \"Hung\": \"Hungaria Kuno\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Italia Lama\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jawa\",
        \"Jpan\": \"Jepang\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Laos\",
        \"Latf\": \"Latin Fraktur\",
        \"Latg\": \"Latin Gaelik\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycia\",
        \"Lydi\": \"Lydia\",
        \"Mand\": \"Mandae\",
        \"Mani\": \"Manikhei\",
        \"Maya\": \"Hieroglip Maya\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Kursif Meroitik\",
        \"Mero\": \"Meroitik\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolia\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mymr\": \"Myanmar\",
        \"Narb\": \"Arab Utara Kuno\",
        \"Nbat\": \"Nabataea\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nushu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Chiki Lama\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmira\",
        \"Perm\": \"Permik Kuno\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Pahlevi\",
        \"Phlp\": \"Mazmur Pahlevi\",
        \"Phlv\": \"Kitab Pahlevi\",
        \"Phnx\": \"Phoenix\",
        \"Plrd\": \"Fonetik Pollard\",
        \"Prti\": \"Prasasti Parthia\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runik\",
        \"Samr\": \"Samaria\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Arab Selatan Kuno\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Tulisan Isyarat\",
        \"Shaw\": \"Shavia\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"Sunda\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Suriah\",
        \"Syre\": \"Suriah Estrangelo\",
        \"Syrj\": \"Suriah Barat\",
        \"Syrn\": \"Suriah Timur\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue Baru\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tenghwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibet\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritik\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Ucapan Terlihat\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Persia Kuno\",
        \"Xsux\": \"Cuneiform Sumero-Akkadia\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Warisan\",
        \"Zmth\": \"Notasi Matematika\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Tidak Tertulis\",
        \"Zyyy\": \"Umum\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/id.json";
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
        \"Aghb\": \"Albania Kaukasia\",
        \"Arab\": \"Arab\",
        \"Armi\": \"Aram Imperial\",
        \"Armn\": \"Armenia\",
        \"Avst\": \"Avesta\",
        \"Bamu\": \"Bamum\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengali\",
        \"Blis\": \"Blissymbol\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugis\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Simbol Aborigin Kanada Kesatuan\",
        \"Cari\": \"Karia\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptik\",
        \"Cprt\": \"Siprus\",
        \"Cyrl\": \"Sirilik\",
        \"Cyrs\": \"Gereja Slavonia Sirilik Lama\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Stenografi Duployan\",
        \"Egyd\": \"Demotik Mesir\",
        \"Egyh\": \"Hieratik Mesir\",
        \"Egyp\": \"Hieroglip Mesir\",
        \"Ethi\": \"Etiopia\",
        \"Geok\": \"Georgian Khutsuri\",
        \"Geor\": \"Georgia\",
        \"Glag\": \"Glagolitic\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Yunani\",
        \"Gujr\": \"Gujarat\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han dengan Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Sederhana\",
        \"Hant\": \"Tradisional\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Hieroglif Anatolia\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana atau Hiragana\",
        \"Hung\": \"Hungaria Kuno\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Italia Lama\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jawa\",
        \"Jpan\": \"Jepang\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Laos\",
        \"Latf\": \"Latin Fraktur\",
        \"Latg\": \"Latin Gaelik\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycia\",
        \"Lydi\": \"Lydia\",
        \"Mand\": \"Mandae\",
        \"Mani\": \"Manikhei\",
        \"Maya\": \"Hieroglip Maya\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Kursif Meroitik\",
        \"Mero\": \"Meroitik\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolia\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mymr\": \"Myanmar\",
        \"Narb\": \"Arab Utara Kuno\",
        \"Nbat\": \"Nabataea\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nushu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Chiki Lama\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmira\",
        \"Perm\": \"Permik Kuno\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Pahlevi\",
        \"Phlp\": \"Mazmur Pahlevi\",
        \"Phlv\": \"Kitab Pahlevi\",
        \"Phnx\": \"Phoenix\",
        \"Plrd\": \"Fonetik Pollard\",
        \"Prti\": \"Prasasti Parthia\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runik\",
        \"Samr\": \"Samaria\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Arab Selatan Kuno\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Tulisan Isyarat\",
        \"Shaw\": \"Shavia\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"Sunda\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Suriah\",
        \"Syre\": \"Suriah Estrangelo\",
        \"Syrj\": \"Suriah Barat\",
        \"Syrn\": \"Suriah Timur\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue Baru\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tenghwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibet\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritik\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Ucapan Terlihat\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Persia Kuno\",
        \"Xsux\": \"Cuneiform Sumero-Akkadia\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Warisan\",
        \"Zmth\": \"Notasi Matematika\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Tidak Tertulis\",
        \"Zyyy\": \"Umum\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/id.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/id.json");
    }
}
