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

/* vendor/symfony/intl/Resources/data/scripts/mr.json */
class __TwigTemplate_bbbb911fa3846c131978ac22af6b7b7638490ebaf33b7fc7b945e7a066cd4766 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mr.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mr.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"अरबी\",
        \"Armi\": \"इम्पिरियल आर्मेनिक\",
        \"Armn\": \"अर्मेनियन\",
        \"Avst\": \"अवेस्तान\",
        \"Bali\": \"बाली\",
        \"Batk\": \"बटाक\",
        \"Beng\": \"बंगाली\",
        \"Blis\": \"ब्लिसिम्बॉल्स\",
        \"Bopo\": \"बोपोमोफो\",
        \"Brah\": \"ब्रह्मी\",
        \"Brai\": \"ब्रेल\",
        \"Bugi\": \"बूगी\",
        \"Buhd\": \"बुहिद\",
        \"Cakm\": \"चकमा\",
        \"Cans\": \"यूनिफाइड कॅनेडियन अ‍ॅबोरिदनल सिलॅबिक्स\",
        \"Cari\": \"कॅरियन\",
        \"Cham\": \"चाम\",
        \"Cher\": \"चेरोकी\",
        \"Cirt\": \"किर्थ\",
        \"Copt\": \"कॉप्टिक\",
        \"Cprt\": \"सायप्रिऑट\",
        \"Cyrl\": \"सीरिलिक\",
        \"Cyrs\": \"पुरातन चर्च स्लाव्होनिक सिरिलिक\",
        \"Deva\": \"देवनागरी\",
        \"Dsrt\": \"डेसर्ट\",
        \"Egyd\": \"इजिप्शियन डेमोटिक\",
        \"Egyh\": \"इजिप्शियन हायरेटिक\",
        \"Egyp\": \"इजिप्शियन हायरोग्लिफ्स\",
        \"Ethi\": \"ईथिओपिक\",
        \"Geok\": \"जॉर्जियन खुत्सुरी\",
        \"Geor\": \"जॉर्जियन\",
        \"Glag\": \"ग्लॅगोलिटिक\",
        \"Goth\": \"गोथिक\",
        \"Grek\": \"ग्रीक\",
        \"Gujr\": \"गुजराती\",
        \"Guru\": \"गुरुमुखी\",
        \"Hanb\": \"हान्ब\",
        \"Hang\": \"हंगुल\",
        \"Hani\": \"हान\",
        \"Hano\": \"हनुनू\",
        \"Hans\": \"सरलीकृत\",
        \"Hant\": \"पारंपारिक\",
        \"Hebr\": \"हिब्रू\",
        \"Hira\": \"हिरागाना\",
        \"Hmng\": \"पहाउ मंग\",
        \"Hrkt\": \"जापानी स्वरलिपी\",
        \"Hung\": \"पुरातन हंगेरियन\",
        \"Inds\": \"सिन्धु\",
        \"Ital\": \"जुनी इटालिक\",
        \"Jamo\": \"जामो\",
        \"Java\": \"जावानीस\",
        \"Jpan\": \"जपानी\",
        \"Kali\": \"कायाह ली\",
        \"Kana\": \"कॅटाकाना\",
        \"Khar\": \"खारोश्थी\",
        \"Khmr\": \"ख्मेर\",
        \"Knda\": \"कन्नड\",
        \"Kore\": \"कोरियन\",
        \"Kthi\": \"काइथी\",
        \"Lana\": \"लाना\",
        \"Laoo\": \"लाओ\",
        \"Latf\": \"फ्रॅक्तुर लॅटिन\",
        \"Latg\": \"गाएलिक लेटिन\",
        \"Latn\": \"लॅटिन\",
        \"Lepc\": \"लेपचा\",
        \"Limb\": \"लिम्बू\",
        \"Lina\": \"लीनियार अ\",
        \"Linb\": \"लीनियर बी\",
        \"Lyci\": \"लायशियान\",
        \"Lydi\": \"लायडियान\",
        \"Mand\": \"मान्डायीन\",
        \"Mani\": \"मानीचायीन\",
        \"Maya\": \"मायान हाइरोग्लिफ्स\",
        \"Mero\": \"मेरोइटिक\",
        \"Mlym\": \"मल्याळम\",
        \"Mong\": \"मंगोलियन\",
        \"Moon\": \"मून\",
        \"Mtei\": \"मेइतेइ मायेक\",
        \"Mymr\": \"म्यानमार\",
        \"Nkoo\": \"एन्‘को\",
        \"Ogam\": \"ओघाम\",
        \"Olck\": \"ओल चिकि\",
        \"Orkh\": \"ओर्खोन\",
        \"Orya\": \"उडिया\",
        \"Osma\": \"उस्मानिया\",
        \"Perm\": \"पुरातन पर्मिक\",
        \"Phag\": \"फाग्स-पा\",
        \"Phli\": \"इन्स्क्रिप्शनल पाहलवी\",
        \"Phlp\": \"सॉल्टर पाहलवी\",
        \"Phlv\": \"बुक पाहलवी\",
        \"Phnx\": \"फोनिशियन\",
        \"Plrd\": \"पोलार्ड फोनेटिक\",
        \"Prti\": \"इन्स्क्रिप्शनल पर्थियन\",
        \"Rjng\": \"रीजांग\",
        \"Roro\": \"रोन्गोरोन्गो\",
        \"Runr\": \"रूनिक\",
        \"Samr\": \"समरिटान\",
        \"Sara\": \"सराती\",
        \"Saur\": \"सौराष्ट्र\",
        \"Sgnw\": \"संकेत लिपी\",
        \"Shaw\": \"शॅव्हियन\",
        \"Sinh\": \"सिंहला\",
        \"Sund\": \"सूदानी\",
        \"Sylo\": \"सिलोती नागरी\",
        \"Syrc\": \"सिरीयाक\",
        \"Syre\": \"एस्त्ट्रेन्जेलो सिरियाक\",
        \"Syrj\": \"पश्चिमी सिरियाक\",
        \"Syrn\": \"पूर्वी सिरियाक\",
        \"Tagb\": \"तगोआन्वा\",
        \"Tale\": \"ताई ली\",
        \"Talu\": \"नवीन ताई लू\",
        \"Taml\": \"तामिळ\",
        \"Tavt\": \"ताई विएत\",
        \"Telu\": \"तेलगु\",
        \"Teng\": \"तेन्गवार\",
        \"Tfng\": \"तिफिनाघ\",
        \"Tglg\": \"टागालोग\",
        \"Thaa\": \"थाना\",
        \"Thai\": \"थाई\",
        \"Tibt\": \"तिबेटी\",
        \"Ugar\": \"युगारिटिक\",
        \"Vaii\": \"वाई\",
        \"Visp\": \"दृश्य संवाद\",
        \"Xpeo\": \"पुरातन फारसी\",
        \"Xsux\": \"दृश्यमान भाषा\",
        \"Yiii\": \"यी\",
        \"Zinh\": \"वंशपरंपरागत\",
        \"Zmth\": \"गणितीय संकेतलिपी\",
        \"Zsye\": \"इमोजी\",
        \"Zsym\": \"प्रतीक\",
        \"Zxxx\": \"अलिखित\",
        \"Zyyy\": \"सामान्य\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/mr.json";
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
        \"Arab\": \"अरबी\",
        \"Armi\": \"इम्पिरियल आर्मेनिक\",
        \"Armn\": \"अर्मेनियन\",
        \"Avst\": \"अवेस्तान\",
        \"Bali\": \"बाली\",
        \"Batk\": \"बटाक\",
        \"Beng\": \"बंगाली\",
        \"Blis\": \"ब्लिसिम्बॉल्स\",
        \"Bopo\": \"बोपोमोफो\",
        \"Brah\": \"ब्रह्मी\",
        \"Brai\": \"ब्रेल\",
        \"Bugi\": \"बूगी\",
        \"Buhd\": \"बुहिद\",
        \"Cakm\": \"चकमा\",
        \"Cans\": \"यूनिफाइड कॅनेडियन अ‍ॅबोरिदनल सिलॅबिक्स\",
        \"Cari\": \"कॅरियन\",
        \"Cham\": \"चाम\",
        \"Cher\": \"चेरोकी\",
        \"Cirt\": \"किर्थ\",
        \"Copt\": \"कॉप्टिक\",
        \"Cprt\": \"सायप्रिऑट\",
        \"Cyrl\": \"सीरिलिक\",
        \"Cyrs\": \"पुरातन चर्च स्लाव्होनिक सिरिलिक\",
        \"Deva\": \"देवनागरी\",
        \"Dsrt\": \"डेसर्ट\",
        \"Egyd\": \"इजिप्शियन डेमोटिक\",
        \"Egyh\": \"इजिप्शियन हायरेटिक\",
        \"Egyp\": \"इजिप्शियन हायरोग्लिफ्स\",
        \"Ethi\": \"ईथिओपिक\",
        \"Geok\": \"जॉर्जियन खुत्सुरी\",
        \"Geor\": \"जॉर्जियन\",
        \"Glag\": \"ग्लॅगोलिटिक\",
        \"Goth\": \"गोथिक\",
        \"Grek\": \"ग्रीक\",
        \"Gujr\": \"गुजराती\",
        \"Guru\": \"गुरुमुखी\",
        \"Hanb\": \"हान्ब\",
        \"Hang\": \"हंगुल\",
        \"Hani\": \"हान\",
        \"Hano\": \"हनुनू\",
        \"Hans\": \"सरलीकृत\",
        \"Hant\": \"पारंपारिक\",
        \"Hebr\": \"हिब्रू\",
        \"Hira\": \"हिरागाना\",
        \"Hmng\": \"पहाउ मंग\",
        \"Hrkt\": \"जापानी स्वरलिपी\",
        \"Hung\": \"पुरातन हंगेरियन\",
        \"Inds\": \"सिन्धु\",
        \"Ital\": \"जुनी इटालिक\",
        \"Jamo\": \"जामो\",
        \"Java\": \"जावानीस\",
        \"Jpan\": \"जपानी\",
        \"Kali\": \"कायाह ली\",
        \"Kana\": \"कॅटाकाना\",
        \"Khar\": \"खारोश्थी\",
        \"Khmr\": \"ख्मेर\",
        \"Knda\": \"कन्नड\",
        \"Kore\": \"कोरियन\",
        \"Kthi\": \"काइथी\",
        \"Lana\": \"लाना\",
        \"Laoo\": \"लाओ\",
        \"Latf\": \"फ्रॅक्तुर लॅटिन\",
        \"Latg\": \"गाएलिक लेटिन\",
        \"Latn\": \"लॅटिन\",
        \"Lepc\": \"लेपचा\",
        \"Limb\": \"लिम्बू\",
        \"Lina\": \"लीनियार अ\",
        \"Linb\": \"लीनियर बी\",
        \"Lyci\": \"लायशियान\",
        \"Lydi\": \"लायडियान\",
        \"Mand\": \"मान्डायीन\",
        \"Mani\": \"मानीचायीन\",
        \"Maya\": \"मायान हाइरोग्लिफ्स\",
        \"Mero\": \"मेरोइटिक\",
        \"Mlym\": \"मल्याळम\",
        \"Mong\": \"मंगोलियन\",
        \"Moon\": \"मून\",
        \"Mtei\": \"मेइतेइ मायेक\",
        \"Mymr\": \"म्यानमार\",
        \"Nkoo\": \"एन्‘को\",
        \"Ogam\": \"ओघाम\",
        \"Olck\": \"ओल चिकि\",
        \"Orkh\": \"ओर्खोन\",
        \"Orya\": \"उडिया\",
        \"Osma\": \"उस्मानिया\",
        \"Perm\": \"पुरातन पर्मिक\",
        \"Phag\": \"फाग्स-पा\",
        \"Phli\": \"इन्स्क्रिप्शनल पाहलवी\",
        \"Phlp\": \"सॉल्टर पाहलवी\",
        \"Phlv\": \"बुक पाहलवी\",
        \"Phnx\": \"फोनिशियन\",
        \"Plrd\": \"पोलार्ड फोनेटिक\",
        \"Prti\": \"इन्स्क्रिप्शनल पर्थियन\",
        \"Rjng\": \"रीजांग\",
        \"Roro\": \"रोन्गोरोन्गो\",
        \"Runr\": \"रूनिक\",
        \"Samr\": \"समरिटान\",
        \"Sara\": \"सराती\",
        \"Saur\": \"सौराष्ट्र\",
        \"Sgnw\": \"संकेत लिपी\",
        \"Shaw\": \"शॅव्हियन\",
        \"Sinh\": \"सिंहला\",
        \"Sund\": \"सूदानी\",
        \"Sylo\": \"सिलोती नागरी\",
        \"Syrc\": \"सिरीयाक\",
        \"Syre\": \"एस्त्ट्रेन्जेलो सिरियाक\",
        \"Syrj\": \"पश्चिमी सिरियाक\",
        \"Syrn\": \"पूर्वी सिरियाक\",
        \"Tagb\": \"तगोआन्वा\",
        \"Tale\": \"ताई ली\",
        \"Talu\": \"नवीन ताई लू\",
        \"Taml\": \"तामिळ\",
        \"Tavt\": \"ताई विएत\",
        \"Telu\": \"तेलगु\",
        \"Teng\": \"तेन्गवार\",
        \"Tfng\": \"तिफिनाघ\",
        \"Tglg\": \"टागालोग\",
        \"Thaa\": \"थाना\",
        \"Thai\": \"थाई\",
        \"Tibt\": \"तिबेटी\",
        \"Ugar\": \"युगारिटिक\",
        \"Vaii\": \"वाई\",
        \"Visp\": \"दृश्य संवाद\",
        \"Xpeo\": \"पुरातन फारसी\",
        \"Xsux\": \"दृश्यमान भाषा\",
        \"Yiii\": \"यी\",
        \"Zinh\": \"वंशपरंपरागत\",
        \"Zmth\": \"गणितीय संकेतलिपी\",
        \"Zsye\": \"इमोजी\",
        \"Zsym\": \"प्रतीक\",
        \"Zxxx\": \"अलिखित\",
        \"Zyyy\": \"सामान्य\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/mr.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/mr.json");
    }
}
