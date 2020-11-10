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

/* vendor/symfony/intl/Resources/data/scripts/ms.json */
class __TwigTemplate_2e7d62df980e0f0d232dbfcefc6eabae7c69a2bddf35826895e831b5bd1863f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ms.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ms.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Adlm\": \"Adlam\",
        \"Aghb\": \"Kaukasia Albania\",
        \"Arab\": \"Arab\",
        \"Armi\": \"Aramia Imperial\",
        \"Armn\": \"Armenia\",
        \"Avst\": \"Avestan\",
        \"Bali\": \"Bali\",
        \"Bamu\": \"Bamu\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Benggala\",
        \"Bhks\": \"Bhaisuki\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugis\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Cans\",
        \"Cari\": \"Carian\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Copt\": \"Coptic\",
        \"Cprt\": \"Cypriot\",
        \"Cyrl\": \"Cyril\",
        \"Deva\": \"Devanagari\",
        \"Dogr\": \"Dogra\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Trengkas Duployan\",
        \"Egyp\": \"Hiroglif Mesir\",
        \"Elba\": \"Elbasan\",
        \"Elym\": \"Elymaic\",
        \"Ethi\": \"Ethiopia\",
        \"Geor\": \"Georgia\",
        \"Glag\": \"Glagolitik\",
        \"Gong\": \"Gunjala Gondi\",
        \"Gonm\": \"Masaram Gonti\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarat\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han dengan Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Ringkas\",
        \"Hant\": \"Tradisional\",
        \"Hatr\": \"Hatran\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Hiroglif Anatoli\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hmnp\": \"Nyiakeng Puachue Hmong\",
        \"Hrkt\": \"Ejaan sukuan Jepun\",
        \"Hung\": \"Hungary Lama\",
        \"Ital\": \"Italik Lama\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jawa\",
        \"Jpan\": \"Jepun\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lisu\": \"Fraser\",
        \"Lyci\": \"Lycia\",
        \"Lydi\": \"Lydia\",
        \"Mahj\": \"Mahajani\",
        \"Maka\": \"Makasar\",
        \"Mand\": \"Mandaean\",
        \"Mani\": \"Manichaean\",
        \"Marc\": \"Marchen\",
        \"Medf\": \"Medefaidrin\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Kursif Meroitic\",
        \"Mero\": \"Meroitic\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolia\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"Myammar\",
        \"Nand\": \"Nandinagari\",
        \"Narb\": \"Arab Utara Lama\",
        \"Nbat\": \"Nabataean\",
        \"Newa\": \"Newa\",
        \"Nkoo\": \"N’ko\",
        \"Nshu\": \"Nushu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Oriya\",
        \"Osge\": \"Osage\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyrene\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"Permic Lama\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inskripsi Pahlavi\",
        \"Phlp\": \"Pslater Pahlavi\",
        \"Phnx\": \"Phoenicia\",
        \"Plrd\": \"Fonetik Pollard\",
        \"Prti\": \"Inskripsi Parthian\",
        \"Qaag\": \"Zawgyi\",
        \"Rjng\": \"Rejang\",
        \"Rohg\": \"Hanifi Rohingya\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritan\",
        \"Sarb\": \"Arab Selatan Lama\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Tulisan Isyarat\",
        \"Shaw\": \"Shavia\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sogd\": \"Sogdia\",
        \"Sogo\": \"Sogdia Lama\",
        \"Sora\": \"Sora Sompeng\",
        \"Soyo\": \"Soyombo\",
        \"Sund\": \"Sunda\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syria\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue Baharu\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibet\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritic\",
        \"Vaii\": \"Vai\",
        \"Wara\": \"Varang Kshiti\",
        \"Wcho\": \"Wancho\",
        \"Xpeo\": \"Parsi Lama\",
        \"Xsux\": \"Aksara Paku Sumero-Akkadia\",
        \"Yiii\": \"Yi\",
        \"Zanb\": \"Segi Empat Zanabazar\",
        \"Zinh\": \"Diwarisi\",
        \"Zmth\": \"Tatatanda matematik\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Tidak ditulis\",
        \"Zyyy\": \"Lazim\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ms.json";
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
        \"Aghb\": \"Kaukasia Albania\",
        \"Arab\": \"Arab\",
        \"Armi\": \"Aramia Imperial\",
        \"Armn\": \"Armenia\",
        \"Avst\": \"Avestan\",
        \"Bali\": \"Bali\",
        \"Bamu\": \"Bamu\",
        \"Bass\": \"Bassa Vah\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Benggala\",
        \"Bhks\": \"Bhaisuki\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brahmi\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"Bugis\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Chakma\",
        \"Cans\": \"Cans\",
        \"Cari\": \"Carian\",
        \"Cham\": \"Cham\",
        \"Cher\": \"Cherokee\",
        \"Copt\": \"Coptic\",
        \"Cprt\": \"Cypriot\",
        \"Cyrl\": \"Cyril\",
        \"Deva\": \"Devanagari\",
        \"Dogr\": \"Dogra\",
        \"Dsrt\": \"Deseret\",
        \"Dupl\": \"Trengkas Duployan\",
        \"Egyp\": \"Hiroglif Mesir\",
        \"Elba\": \"Elbasan\",
        \"Elym\": \"Elymaic\",
        \"Ethi\": \"Ethiopia\",
        \"Geor\": \"Georgia\",
        \"Glag\": \"Glagolitik\",
        \"Gong\": \"Gunjala Gondi\",
        \"Gonm\": \"Masaram Gonti\",
        \"Goth\": \"Gothic\",
        \"Gran\": \"Grantha\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarat\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han dengan Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Ringkas\",
        \"Hant\": \"Tradisional\",
        \"Hatr\": \"Hatran\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hluw\": \"Hiroglif Anatoli\",
        \"Hmng\": \"Pahawh Hmong\",
        \"Hmnp\": \"Nyiakeng Puachue Hmong\",
        \"Hrkt\": \"Ejaan sukuan Jepun\",
        \"Hung\": \"Hungary Lama\",
        \"Ital\": \"Italik Lama\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jawa\",
        \"Jpan\": \"Jepun\",
        \"Kali\": \"Kayah Li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Khoj\": \"Khojki\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Linear A\",
        \"Linb\": \"Linear B\",
        \"Lisu\": \"Fraser\",
        \"Lyci\": \"Lycia\",
        \"Lydi\": \"Lydia\",
        \"Mahj\": \"Mahajani\",
        \"Maka\": \"Makasar\",
        \"Mand\": \"Mandaean\",
        \"Mani\": \"Manichaean\",
        \"Marc\": \"Marchen\",
        \"Medf\": \"Medefaidrin\",
        \"Mend\": \"Mende\",
        \"Merc\": \"Kursif Meroitic\",
        \"Mero\": \"Meroitic\",
        \"Mlym\": \"Malayalam\",
        \"Modi\": \"Modi\",
        \"Mong\": \"Mongolia\",
        \"Mroo\": \"Mro\",
        \"Mtei\": \"Meitei Mayek\",
        \"Mult\": \"Multani\",
        \"Mymr\": \"Myammar\",
        \"Nand\": \"Nandinagari\",
        \"Narb\": \"Arab Utara Lama\",
        \"Nbat\": \"Nabataean\",
        \"Newa\": \"Newa\",
        \"Nkoo\": \"N’ko\",
        \"Nshu\": \"Nushu\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol Chiki\",
        \"Orkh\": \"Orkhon\",
        \"Orya\": \"Oriya\",
        \"Osge\": \"Osage\",
        \"Osma\": \"Osmanya\",
        \"Palm\": \"Palmyrene\",
        \"Pauc\": \"Pau Cin Hau\",
        \"Perm\": \"Permic Lama\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Inskripsi Pahlavi\",
        \"Phlp\": \"Pslater Pahlavi\",
        \"Phnx\": \"Phoenicia\",
        \"Plrd\": \"Fonetik Pollard\",
        \"Prti\": \"Inskripsi Parthian\",
        \"Qaag\": \"Zawgyi\",
        \"Rjng\": \"Rejang\",
        \"Rohg\": \"Hanifi Rohingya\",
        \"Runr\": \"Runic\",
        \"Samr\": \"Samaritan\",
        \"Sarb\": \"Arab Selatan Lama\",
        \"Saur\": \"Saurashtra\",
        \"Sgnw\": \"Tulisan Isyarat\",
        \"Shaw\": \"Shavia\",
        \"Shrd\": \"Sharada\",
        \"Sidd\": \"Siddham\",
        \"Sind\": \"Khudawadi\",
        \"Sinh\": \"Sinhala\",
        \"Sogd\": \"Sogdia\",
        \"Sogo\": \"Sogdia Lama\",
        \"Sora\": \"Sora Sompeng\",
        \"Soyo\": \"Soyombo\",
        \"Sund\": \"Sunda\",
        \"Sylo\": \"Syloti Nagri\",
        \"Syrc\": \"Syria\",
        \"Tagb\": \"Tagbanwa\",
        \"Takr\": \"Takri\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Tai Lue Baharu\",
        \"Taml\": \"Tamil\",
        \"Tang\": \"Tangut\",
        \"Tavt\": \"Tai Viet\",
        \"Telu\": \"Telugu\",
        \"Tfng\": \"Tifinagh\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibet\",
        \"Tirh\": \"Tirhuta\",
        \"Ugar\": \"Ugaritic\",
        \"Vaii\": \"Vai\",
        \"Wara\": \"Varang Kshiti\",
        \"Wcho\": \"Wancho\",
        \"Xpeo\": \"Parsi Lama\",
        \"Xsux\": \"Aksara Paku Sumero-Akkadia\",
        \"Yiii\": \"Yi\",
        \"Zanb\": \"Segi Empat Zanabazar\",
        \"Zinh\": \"Diwarisi\",
        \"Zmth\": \"Tatatanda matematik\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Tidak ditulis\",
        \"Zyyy\": \"Lazim\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ms.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ms.json");
    }
}