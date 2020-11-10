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

/* vendor/symfony/intl/Resources/data/scripts/jv.json */
class __TwigTemplate_2f4bacd129d04cc487c52208336f900a0956b8ca6d1474fca750cadf0b7ede7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/jv.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/jv.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arab\",
        \"Armn\": \"Armenia\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Sirilik\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopik\",
        \"Geor\": \"Georgia\",
        \"Grek\": \"Yunani\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han nganggo Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Prasaja\",
        \"Hant\": \"Tradhisional\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Silabaris Jepang\",
        \"Jpan\": \"Jepang\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongolia\",
        \"Mymr\": \"Myanmar\",
        \"Orya\": \"Odia\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thailand\",
        \"Tibt\": \"Tibetan\",
        \"Zmth\": \"Notasi Matematika\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Ora Ketulis\",
        \"Zyyy\": \"Umum\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/jv.json";
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
        \"Arab\": \"Arab\",
        \"Armn\": \"Armenia\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Sirilik\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopik\",
        \"Geor\": \"Georgia\",
        \"Grek\": \"Yunani\",
        \"Gujr\": \"Gujarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han nganggo Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Prasaja\",
        \"Hant\": \"Tradhisional\",
        \"Hebr\": \"Ibrani\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Silabaris Jepang\",
        \"Jpan\": \"Jepang\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Korea\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latin\",
        \"Mlym\": \"Malayalam\",
        \"Mong\": \"Mongolia\",
        \"Mymr\": \"Myanmar\",
        \"Orya\": \"Odia\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thailand\",
        \"Tibt\": \"Tibetan\",
        \"Zmth\": \"Notasi Matematika\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbol\",
        \"Zxxx\": \"Ora Ketulis\",
        \"Zyyy\": \"Umum\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/jv.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/jv.json");
    }
}
