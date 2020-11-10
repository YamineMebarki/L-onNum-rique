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

/* vendor/symfony/intl/Resources/data/scripts/zu.json */
class __TwigTemplate_bd88ef11c4438f79e6d359374b6455041defa62ba4afe6a08b846287ef7edb77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/zu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/zu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"isi-Arabic\",
        \"Armn\": \"isi-Armenian\",
        \"Beng\": \"isi-Bangla\",
        \"Bopo\": \"isi-Bopomofo\",
        \"Brai\": \"i-Braille\",
        \"Cyrl\": \"isi-Cyrillic\",
        \"Deva\": \"isi-Devanagari\",
        \"Ethi\": \"isi-Ethiopic\",
        \"Geor\": \"isi-Georgian\",
        \"Grek\": \"isi-Greek\",
        \"Gujr\": \"isi-Gujarati\",
        \"Guru\": \"isi-Gurmukhi\",
        \"Hanb\": \"isi-Hanb\",
        \"Hang\": \"isi-Hangul\",
        \"Hani\": \"isi-Han\",
        \"Hans\": \"enziwe lula\",
        \"Hant\": \"okosiko\",
        \"Hebr\": \"isi-Hebrew\",
        \"Hira\": \"isi-Hiragana\",
        \"Hrkt\": \"i-Japanese syllabaries\",
        \"Jamo\": \"isi-Jamo\",
        \"Jpan\": \"isi-Japanese\",
        \"Kana\": \"isi-Katakana\",
        \"Khmr\": \"isi-Khmer\",
        \"Knda\": \"isi-Kannada\",
        \"Kore\": \"isi-Korean\",
        \"Laoo\": \"isi-Lao\",
        \"Latn\": \"isi-Latin\",
        \"Mlym\": \"isi-Malayalam\",
        \"Mong\": \"isi-Mongolian\",
        \"Mymr\": \"isi-Myanmar\",
        \"Orya\": \"isi-Odia\",
        \"Sinh\": \"isi-Sinhala\",
        \"Taml\": \"isi-Tamil\",
        \"Telu\": \"isi-Telugu\",
        \"Thaa\": \"isi-Thaana\",
        \"Thai\": \"isi-Thai\",
        \"Tibt\": \"i-Tibetan\",
        \"Zmth\": \"i-Mathematical Notation\",
        \"Zsye\": \"i-Emoji\",
        \"Zsym\": \"amasimbuli\",
        \"Zxxx\": \"okungabhaliwe\",
        \"Zyyy\": \"jwayelekile\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/zu.json";
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
        \"Arab\": \"isi-Arabic\",
        \"Armn\": \"isi-Armenian\",
        \"Beng\": \"isi-Bangla\",
        \"Bopo\": \"isi-Bopomofo\",
        \"Brai\": \"i-Braille\",
        \"Cyrl\": \"isi-Cyrillic\",
        \"Deva\": \"isi-Devanagari\",
        \"Ethi\": \"isi-Ethiopic\",
        \"Geor\": \"isi-Georgian\",
        \"Grek\": \"isi-Greek\",
        \"Gujr\": \"isi-Gujarati\",
        \"Guru\": \"isi-Gurmukhi\",
        \"Hanb\": \"isi-Hanb\",
        \"Hang\": \"isi-Hangul\",
        \"Hani\": \"isi-Han\",
        \"Hans\": \"enziwe lula\",
        \"Hant\": \"okosiko\",
        \"Hebr\": \"isi-Hebrew\",
        \"Hira\": \"isi-Hiragana\",
        \"Hrkt\": \"i-Japanese syllabaries\",
        \"Jamo\": \"isi-Jamo\",
        \"Jpan\": \"isi-Japanese\",
        \"Kana\": \"isi-Katakana\",
        \"Khmr\": \"isi-Khmer\",
        \"Knda\": \"isi-Kannada\",
        \"Kore\": \"isi-Korean\",
        \"Laoo\": \"isi-Lao\",
        \"Latn\": \"isi-Latin\",
        \"Mlym\": \"isi-Malayalam\",
        \"Mong\": \"isi-Mongolian\",
        \"Mymr\": \"isi-Myanmar\",
        \"Orya\": \"isi-Odia\",
        \"Sinh\": \"isi-Sinhala\",
        \"Taml\": \"isi-Tamil\",
        \"Telu\": \"isi-Telugu\",
        \"Thaa\": \"isi-Thaana\",
        \"Thai\": \"isi-Thai\",
        \"Tibt\": \"i-Tibetan\",
        \"Zmth\": \"i-Mathematical Notation\",
        \"Zsye\": \"i-Emoji\",
        \"Zsym\": \"amasimbuli\",
        \"Zxxx\": \"okungabhaliwe\",
        \"Zyyy\": \"jwayelekile\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/zu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/zu.json");
    }
}
