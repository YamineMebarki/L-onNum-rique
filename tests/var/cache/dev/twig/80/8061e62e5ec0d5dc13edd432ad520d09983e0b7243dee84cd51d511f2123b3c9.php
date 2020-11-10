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

/* vendor/symfony/intl/Resources/data/scripts/hi.json */
class __TwigTemplate_c3b146346e99f32fff097bb3a1c78e8d2bf663f4ddeac0493dee56811bce29f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hi.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"अरबी\",
        \"Armi\": \"इम्पिरियल आर्मेनिक\",
        \"Armn\": \"आर्मेनियाई\",
        \"Avst\": \"अवेस्तन\",
        \"Bali\": \"बाली\",
        \"Batk\": \"बटकी\",
        \"Beng\": \"बंगाली\",
        \"Blis\": \"ब्लिसिम्बॉल्स\",
        \"Bopo\": \"बोपोमोफ़ो\",
        \"Brah\": \"ब्रह्मी\",
        \"Brai\": \"ब्रेल\",
        \"Bugi\": \"बगिनीस\",
        \"Buhd\": \"बुहिद\",
        \"Cakm\": \"चकमा\",
        \"Cans\": \"युनिफाइड कैनेडियन एबोरिजनल सिलेबिक्स\",
        \"Cari\": \"करैन\",
        \"Cham\": \"चाम\",
        \"Cher\": \"चेरोकी\",
        \"Cirt\": \"किर्थ\",
        \"Copt\": \"कॉप्टिक\",
        \"Cprt\": \"काइप्रायट\",
        \"Cyrl\": \"सिरिलिक\",
        \"Cyrs\": \"ओल्ड चर्च स्लावोनिक सिरिलिक\",
        \"Deva\": \"देवनागरी\",
        \"Dsrt\": \"डेसरेट\",
        \"Egyd\": \"इजिप्शियन डेमोटिक\",
        \"Egyh\": \"इजिप्शियन हाइरेटिक\",
        \"Egyp\": \"इजिप्शियन हाइरोग्लिफ्स\",
        \"Ethi\": \"इथियोपियाई\",
        \"Geok\": \"जॉर्जियन खुतसुरी\",
        \"Geor\": \"जॉर्जियन\",
        \"Glag\": \"ग्लेगोलिटिक\",
        \"Goth\": \"गोथिक\",
        \"Gran\": \"ग्रन्थ\",
        \"Grek\": \"यूनानी\",
        \"Gujr\": \"गुजराती\",
        \"Guru\": \"गुरमुखी\",
        \"Hanb\": \"हांब\",
        \"Hang\": \"हंगुल\",
        \"Hani\": \"हान\",
        \"Hano\": \"हनुनू\",
        \"Hans\": \"सरलीकृत\",
        \"Hant\": \"पारंपरिक\",
        \"Hebr\": \"हिब्रू\",
        \"Hira\": \"हिरागाना\",
        \"Hmng\": \"पाहो ह्मोन्ग\",
        \"Hrkt\": \"जापानी सिलेबरीज़\",
        \"Hung\": \"ऑल्ड हंगेरियन\",
        \"Inds\": \"सिन्धु\",
        \"Ital\": \"पुरानी इटली\",
        \"Jamo\": \"जामो\",
        \"Java\": \"जावानीस\",
        \"Jpan\": \"जापानी\",
        \"Kali\": \"कायाह ली\",
        \"Kana\": \"काताकाना\",
        \"Khar\": \"खारोशथी\",
        \"Khmr\": \"खमेर\",
        \"Knda\": \"कन्नड़\",
        \"Kore\": \"कोरियाई\",
        \"Kthi\": \"कैथी\",
        \"Lana\": \"लाना\",
        \"Laoo\": \"लाओ\",
        \"Latf\": \"फ़्रैक्टुर लातिनी\",
        \"Latg\": \"गेली लातिनी\",
        \"Latn\": \"लैटिन\",
        \"Lepc\": \"लेपचा\",
        \"Limb\": \"लिम्बू\",
        \"Lina\": \"लीनियर A\",
        \"Linb\": \"लीनियर बी\",
        \"Lyci\": \"लिशियन\",
        \"Lydi\": \"लिडियन\",
        \"Mand\": \"मनडेन\",
        \"Mani\": \"मनीशीन\",
        \"Maya\": \"मयान हाइरोग्लिफ्स\",
        \"Mero\": \"मेरोइटिक\",
        \"Mlym\": \"मलयालम\",
        \"Mong\": \"मंगोलियाई\",
        \"Moon\": \"मून\",
        \"Mtei\": \"मेइतेइ मायेक\",
        \"Mymr\": \"म्यांमार\",
        \"Nkoo\": \"एन्‘को\",
        \"Ogam\": \"ओगम\",
        \"Olck\": \"ऑल चिकी\",
        \"Orkh\": \"ओरखोन\",
        \"Orya\": \"उड़िया\",
        \"Osma\": \"ओस्मान्या\",
        \"Perm\": \"ओल्ड परमिक\",
        \"Phag\": \"फाग्स-पा\",
        \"Phli\": \"इंस्क्रिपश्नल पाहलवी\",
        \"Phlp\": \"सॉल्टर पाहलवी\",
        \"Phlv\": \"बुक पाहलवी\",
        \"Phnx\": \"फोनिशियन\",
        \"Plrd\": \"पॉलार्ड फोनेटिक\",
        \"Prti\": \"इंस्क्रिपश्नल पार्थियन\",
        \"Rjng\": \"रीजांग\",
        \"Roro\": \"रोन्गोरोन्गो\",
        \"Runr\": \"रूनिक\",
        \"Samr\": \"समरिटन\",
        \"Sara\": \"सराती\",
        \"Saur\": \"सौराष्ट्र\",
        \"Sgnw\": \"सांकेतिक लेख\",
        \"Shaw\": \"शावियान\",
        \"Sinh\": \"सिंहली\",
        \"Sund\": \"सूडानी\",
        \"Sylo\": \"सिलोती नागरी\",
        \"Syrc\": \"सिरियेक\",
        \"Syre\": \"एस्त्रेन्जेलो सिरिएक\",
        \"Syrj\": \"पश्चिम सिरिएक\",
        \"Syrn\": \"पूर्व सिरिएक\",
        \"Tagb\": \"तगबन्वा\",
        \"Tale\": \"ताई ली\",
        \"Talu\": \"नया ताई लु\",
        \"Taml\": \"तमिल\",
        \"Tavt\": \"ताई विएत\",
        \"Telu\": \"तेलुगू\",
        \"Teng\": \"तेन्गवार\",
        \"Tfng\": \"तिफिनाघ\",
        \"Tglg\": \"टैगालोग\",
        \"Thaa\": \"थाना\",
        \"Thai\": \"थाई\",
        \"Tibt\": \"तिब्बती\",
        \"Ugar\": \"युगारिटिक\",
        \"Vaii\": \"वाई\",
        \"Visp\": \"विसिबल स्पीच\",
        \"Xpeo\": \"पुरानी फारसी\",
        \"Xsux\": \"सुमेरो अक्कादियन सुनिफॉर्म\",
        \"Yiii\": \"यी\",
        \"Zinh\": \"विरासत\",
        \"Zmth\": \"गणितीय संकेतन\",
        \"Zsye\": \"ईमोजी\",
        \"Zsym\": \"चिह्न\",
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
        return "vendor/symfony/intl/Resources/data/scripts/hi.json";
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
        \"Armn\": \"आर्मेनियाई\",
        \"Avst\": \"अवेस्तन\",
        \"Bali\": \"बाली\",
        \"Batk\": \"बटकी\",
        \"Beng\": \"बंगाली\",
        \"Blis\": \"ब्लिसिम्बॉल्स\",
        \"Bopo\": \"बोपोमोफ़ो\",
        \"Brah\": \"ब्रह्मी\",
        \"Brai\": \"ब्रेल\",
        \"Bugi\": \"बगिनीस\",
        \"Buhd\": \"बुहिद\",
        \"Cakm\": \"चकमा\",
        \"Cans\": \"युनिफाइड कैनेडियन एबोरिजनल सिलेबिक्स\",
        \"Cari\": \"करैन\",
        \"Cham\": \"चाम\",
        \"Cher\": \"चेरोकी\",
        \"Cirt\": \"किर्थ\",
        \"Copt\": \"कॉप्टिक\",
        \"Cprt\": \"काइप्रायट\",
        \"Cyrl\": \"सिरिलिक\",
        \"Cyrs\": \"ओल्ड चर्च स्लावोनिक सिरिलिक\",
        \"Deva\": \"देवनागरी\",
        \"Dsrt\": \"डेसरेट\",
        \"Egyd\": \"इजिप्शियन डेमोटिक\",
        \"Egyh\": \"इजिप्शियन हाइरेटिक\",
        \"Egyp\": \"इजिप्शियन हाइरोग्लिफ्स\",
        \"Ethi\": \"इथियोपियाई\",
        \"Geok\": \"जॉर्जियन खुतसुरी\",
        \"Geor\": \"जॉर्जियन\",
        \"Glag\": \"ग्लेगोलिटिक\",
        \"Goth\": \"गोथिक\",
        \"Gran\": \"ग्रन्थ\",
        \"Grek\": \"यूनानी\",
        \"Gujr\": \"गुजराती\",
        \"Guru\": \"गुरमुखी\",
        \"Hanb\": \"हांब\",
        \"Hang\": \"हंगुल\",
        \"Hani\": \"हान\",
        \"Hano\": \"हनुनू\",
        \"Hans\": \"सरलीकृत\",
        \"Hant\": \"पारंपरिक\",
        \"Hebr\": \"हिब्रू\",
        \"Hira\": \"हिरागाना\",
        \"Hmng\": \"पाहो ह्मोन्ग\",
        \"Hrkt\": \"जापानी सिलेबरीज़\",
        \"Hung\": \"ऑल्ड हंगेरियन\",
        \"Inds\": \"सिन्धु\",
        \"Ital\": \"पुरानी इटली\",
        \"Jamo\": \"जामो\",
        \"Java\": \"जावानीस\",
        \"Jpan\": \"जापानी\",
        \"Kali\": \"कायाह ली\",
        \"Kana\": \"काताकाना\",
        \"Khar\": \"खारोशथी\",
        \"Khmr\": \"खमेर\",
        \"Knda\": \"कन्नड़\",
        \"Kore\": \"कोरियाई\",
        \"Kthi\": \"कैथी\",
        \"Lana\": \"लाना\",
        \"Laoo\": \"लाओ\",
        \"Latf\": \"फ़्रैक्टुर लातिनी\",
        \"Latg\": \"गेली लातिनी\",
        \"Latn\": \"लैटिन\",
        \"Lepc\": \"लेपचा\",
        \"Limb\": \"लिम्बू\",
        \"Lina\": \"लीनियर A\",
        \"Linb\": \"लीनियर बी\",
        \"Lyci\": \"लिशियन\",
        \"Lydi\": \"लिडियन\",
        \"Mand\": \"मनडेन\",
        \"Mani\": \"मनीशीन\",
        \"Maya\": \"मयान हाइरोग्लिफ्स\",
        \"Mero\": \"मेरोइटिक\",
        \"Mlym\": \"मलयालम\",
        \"Mong\": \"मंगोलियाई\",
        \"Moon\": \"मून\",
        \"Mtei\": \"मेइतेइ मायेक\",
        \"Mymr\": \"म्यांमार\",
        \"Nkoo\": \"एन्‘को\",
        \"Ogam\": \"ओगम\",
        \"Olck\": \"ऑल चिकी\",
        \"Orkh\": \"ओरखोन\",
        \"Orya\": \"उड़िया\",
        \"Osma\": \"ओस्मान्या\",
        \"Perm\": \"ओल्ड परमिक\",
        \"Phag\": \"फाग्स-पा\",
        \"Phli\": \"इंस्क्रिपश्नल पाहलवी\",
        \"Phlp\": \"सॉल्टर पाहलवी\",
        \"Phlv\": \"बुक पाहलवी\",
        \"Phnx\": \"फोनिशियन\",
        \"Plrd\": \"पॉलार्ड फोनेटिक\",
        \"Prti\": \"इंस्क्रिपश्नल पार्थियन\",
        \"Rjng\": \"रीजांग\",
        \"Roro\": \"रोन्गोरोन्गो\",
        \"Runr\": \"रूनिक\",
        \"Samr\": \"समरिटन\",
        \"Sara\": \"सराती\",
        \"Saur\": \"सौराष्ट्र\",
        \"Sgnw\": \"सांकेतिक लेख\",
        \"Shaw\": \"शावियान\",
        \"Sinh\": \"सिंहली\",
        \"Sund\": \"सूडानी\",
        \"Sylo\": \"सिलोती नागरी\",
        \"Syrc\": \"सिरियेक\",
        \"Syre\": \"एस्त्रेन्जेलो सिरिएक\",
        \"Syrj\": \"पश्चिम सिरिएक\",
        \"Syrn\": \"पूर्व सिरिएक\",
        \"Tagb\": \"तगबन्वा\",
        \"Tale\": \"ताई ली\",
        \"Talu\": \"नया ताई लु\",
        \"Taml\": \"तमिल\",
        \"Tavt\": \"ताई विएत\",
        \"Telu\": \"तेलुगू\",
        \"Teng\": \"तेन्गवार\",
        \"Tfng\": \"तिफिनाघ\",
        \"Tglg\": \"टैगालोग\",
        \"Thaa\": \"थाना\",
        \"Thai\": \"थाई\",
        \"Tibt\": \"तिब्बती\",
        \"Ugar\": \"युगारिटिक\",
        \"Vaii\": \"वाई\",
        \"Visp\": \"विसिबल स्पीच\",
        \"Xpeo\": \"पुरानी फारसी\",
        \"Xsux\": \"सुमेरो अक्कादियन सुनिफॉर्म\",
        \"Yiii\": \"यी\",
        \"Zinh\": \"विरासत\",
        \"Zmth\": \"गणितीय संकेतन\",
        \"Zsye\": \"ईमोजी\",
        \"Zsym\": \"चिह्न\",
        \"Zxxx\": \"अलिखित\",
        \"Zyyy\": \"सामान्य\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/hi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/hi.json");
    }
}
