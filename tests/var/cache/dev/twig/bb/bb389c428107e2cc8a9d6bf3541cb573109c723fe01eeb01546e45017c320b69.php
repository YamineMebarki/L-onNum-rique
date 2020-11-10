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

/* vendor/symfony/intl/Resources/data/scripts/fy.json */
class __TwigTemplate_35e633ca2991ba45dcc855f65415d3e79f0c6afe4790cf4185eb183a8c4cbdaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fy.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fy.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"Defaka\",
        \"Arab\": \"Arabysk\",
        \"Armi\": \"Keizerlijk Aramees\",
        \"Armn\": \"Armeens\",
        \"Avst\": \"Avestaansk\",
        \"Bali\": \"Balineesk\",
        \"Bamu\": \"Bamoun\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengalees\",
        \"Blis\": \"Blissymbolen\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugineesk\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Verenigde Canadese Aboriginal-symbolen\",
        \"Cari\": \"Karysk\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptysk\",
        \"Cprt\": \"Syprysk\",
        \"Cyrl\": \"Syrillysk\",
        \"Cyrs\": \"Aldkerkslavysk Syrillysk\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Duployan snelschrift\",
        \"Egyd\": \"Egyptysk demotysk\",
        \"Egyh\": \"Egyptysk hiëratysk\",
        \"Egyp\": \"Egyptyske hiërogliefen\",
        \"Ethi\": \"Ethiopysk\",
        \"Geok\": \"Georgysk Khutsuri\",
        \"Geor\": \"Georgysk\",
        \"Glag\": \"Glagolitysk\",
        \"Goth\": \"Gothysk\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Grieks\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Ferienfâldigd\",
        \"Hant\": \"Traditjoneel\",
        \"Hebr\": \"Hebreeuwsk\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Anatolyske hiërogliefen\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana of Hiragana\",
        \"Hung\": \"Aldhongaars\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Ald-italysk\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Javaansk\",
        \"Jpan\": \"Japans\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreaansk\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Gotysk Latyn\",
        \"Latg\": \"Gaelysk Latyn\",
        \"Latn\": \"Latyn\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Lineair A\",
        \"Linb\": \"Lineair B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycysk\",
        \"Lydi\": \"Lydysk\",
        \"Mand\": \"Mandaeans\",
        \"Mani\": \"Manicheaansk\",
        \"Maya\": \"Mayahiërogliefen\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Meroitysk cursief\",
        \"Mero\": \"Meroïtysk\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongools\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei\",
        \"Mymr\": \"Myanmar\",
        \"Narb\": \"Ald Noard-Arabysk\",
        \"Nbat\": \"Nabateaansk\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Odia\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyreens\",
        \"Perm\": \"Aldpermysk\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inscriptioneel Pahlavi\",
        \"Phlp\": \"Psalmen Pahlavi\",
        \"Phlv\": \"Boek Pahlavi\",
        \"Phnx\": \"Foenicysk\",
        \"Plrd\": \"Pollard-fonetysk\",
        \"Prti\": \"Inscriptioneel Parthysk\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritaansk\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Ald Sûd-Arabysk\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"Shavian\",
        \"Shrd\": \"Sharada\",
        \"Sind\": \"Sindhi\",
        \"Sinh\": \"Sinhala\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"Soendaneesk\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syriac\",
        \"Syre\": \"Estrangelo Arameesk\",
        \"Syrj\": \"West-Arameesk\",
        \"Syrn\": \"East-Arameesk\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Nij Tai Lue\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thais\",
        \"Tibt\": \"Tibetaansk\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritysk\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Sichtbere spraak\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Aldperzysk\",
        \"Xsux\": \"Sumero-Akkadian Cuneiform\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Oergeërfd\",
        \"Zmth\": \"Wiskundige notatie\",
        \"Zsym\": \"Symbolen\",
        \"Zxxx\": \"Ongeschreven\",
        \"Zyyy\": \"Algemeen\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/fy.json";
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
        \"Afak\": \"Defaka\",
        \"Arab\": \"Arabysk\",
        \"Armi\": \"Keizerlijk Aramees\",
        \"Armn\": \"Armeens\",
        \"Avst\": \"Avestaansk\",
        \"Bali\": \"Balineesk\",
        \"Bamu\": \"Bamoun\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengalees\",
        \"Blis\": \"Blissymbolen\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugineesk\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Verenigde Canadese Aboriginal-symbolen\",
        \"Cari\": \"Karysk\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Cirt\": \"Cirth\",
        \"Copt\": \"Koptysk\",
        \"Cprt\": \"Syprysk\",
        \"Cyrl\": \"Syrillysk\",
        \"Cyrs\": \"Aldkerkslavysk Syrillysk\",
        \"Deva\": \"Devanagari\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Duployan snelschrift\",
        \"Egyd\": \"Egyptysk demotysk\",
        \"Egyh\": \"Egyptysk hiëratysk\",
        \"Egyp\": \"Egyptyske hiërogliefen\",
        \"Ethi\": \"Ethiopysk\",
        \"Geok\": \"Georgysk Khutsuri\",
        \"Geor\": \"Georgysk\",
        \"Glag\": \"Glagolitysk\",
        \"Goth\": \"Gothysk\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Grieks\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Ferienfâldigd\",
        \"Hant\": \"Traditjoneel\",
        \"Hebr\": \"Hebreeuwsk\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Anatolyske hiërogliefen\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hrkt\": \"Katakana of Hiragana\",
        \"Hung\": \"Aldhongaars\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Ald-italysk\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Javaansk\",
        \"Jpan\": \"Japans\",
        \"Jurc\": \"Jurchen\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreaansk\",
        \"Kpel\": \"Kpelle\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Gotysk Latyn\",
        \"Latg\": \"Gaelysk Latyn\",
        \"Latn\": \"Latyn\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Lineair A\",
        \"Linb\": \"Lineair B\",
        \"Lisu\": \"Fraser\",
        \"Loma\": \"Loma\",
        \"Lyci\": \"Lycysk\",
        \"Lydi\": \"Lydysk\",
        \"Mand\": \"Mandaeans\",
        \"Mani\": \"Manicheaansk\",
        \"Maya\": \"Mayahiërogliefen\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Meroitysk cursief\",
        \"Mero\": \"Meroïtysk\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongools\",
        \"Moon\": \"Moon\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei\",
        \"Mymr\": \"Myanmar\",
        \"Narb\": \"Ald Noard-Arabysk\",
        \"Nbat\": \"Nabateaansk\",
        \"Nkgb\": \"Naxi Geba\",
        \"Nkoo\": \"N’Ko\",
        \"Nshu\": \"Nüshu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Odia\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyreens\",
        \"Perm\": \"Aldpermysk\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inscriptioneel Pahlavi\",
        \"Phlp\": \"Psalmen Pahlavi\",
        \"Phlv\": \"Boek Pahlavi\",
        \"Phnx\": \"Foenicysk\",
        \"Plrd\": \"Pollard-fonetysk\",
        \"Prti\": \"Inscriptioneel Parthysk\",
        \"Rjng\": \"Rejang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritaansk\",
        \"Sara\": \"Sarati\",
        \"Sarb\": \"Ald Sûd-Arabysk\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"SignWriting\",
        \"Shaw\": \"Shavian\",
        \"Shrd\": \"Sharada\",
        \"Sind\": \"Sindhi\",
        \"Sinh\": \"Sinhala\",
        \"Sora\": \"Sora Sompeng\",
        \"Sund\": \"Soendaneesk\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syriac\",
        \"Syre\": \"Estrangelo Arameesk\",
        \"Syrj\": \"West-Arameesk\",
        \"Syrn\": \"East-Arameesk\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Nij Tai Lue\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thais\",
        \"Tibt\": \"Tibetaansk\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritysk\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Sichtbere spraak\",
        \"Wara\": \"Varang Kshiti\",
        \"Wole\": \"Woleai\",
        \"Xpeo\": \"Aldperzysk\",
        \"Xsux\": \"Sumero-Akkadian Cuneiform\",
        \"Yiii\": \"Yi\",
        \"Zinh\": \"Oergeërfd\",
        \"Zmth\": \"Wiskundige notatie\",
        \"Zsym\": \"Symbolen\",
        \"Zxxx\": \"Ongeschreven\",
        \"Zyyy\": \"Algemeen\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/fy.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/fy.json");
    }
}
