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

/* vendor/symfony/intl/Resources/data/scripts/tl.json */
class __TwigTemplate_eaab079375afee3205b0755c3e37ea051378cdb4e6f994da8e0feabd7f1234b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/tl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/tl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arabic\",
        \"Armn\": \"Armenian\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Cyrillic\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopic\",
        \"Geor\": \"Georgian\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Pinasimple\",
        \"Hant\": \"Tradisyonal\",
        \"Hebr\": \"Hebrew\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Japanese syllabaries\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japanese\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korean\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongolian\",
        \"Mymr\": \"Myanmar\",
        \"Orya\": \"Odia\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Telu\": \"Telugu\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetan\",
        \"Zmth\": \"Mathematical Notation\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Mga Simbolo\",
        \"Zxxx\": \"Hindi Nakasulat\",
        \"Zyyy\": \"Karaniwan\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/tl.json";
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
        \"Arab\": \"Arabic\",
        \"Armn\": \"Armenian\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Cyrillic\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopic\",
        \"Geor\": \"Georgian\",
        \"Grek\": \"Greek\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Pinasimple\",
        \"Hant\": \"Tradisyonal\",
        \"Hebr\": \"Hebrew\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Japanese syllabaries\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japanese\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korean\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongolian\",
        \"Mymr\": \"Myanmar\",
        \"Orya\": \"Odia\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Telu\": \"Telugu\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibetan\",
        \"Zmth\": \"Mathematical Notation\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Mga Simbolo\",
        \"Zxxx\": \"Hindi Nakasulat\",
        \"Zyyy\": \"Karaniwan\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/tl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/tl.json");
    }
}
