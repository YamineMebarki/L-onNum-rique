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

/* vendor/symfony/intl/Resources/data/scripts/af.json */
class __TwigTemplate_211ec670886a6f8da3296cd983e3329184d31b31ab7b5ecabf75feb8b4bb277e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/af.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/af.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arabies\",
        \"Armn\": \"Armeens\",
        \"Beng\": \"Bengaals\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Sirillies\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Etiopies\",
        \"Geor\": \"Georgies\",
        \"Grek\": \"Grieks\",
        \"Gujr\": \"Gudjarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han met Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Vereenvoudig\",
        \"Hant\": \"Tradisioneel\",
        \"Hebr\": \"Hebreeus\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Japannese lettergreepskrif\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japannees\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreaans\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latyn\",
        \"Mlym\": \"Malabaars\",
        \"Mong\": \"Mongools\",
        \"Mymr\": \"Mianmar\",
        \"Orya\": \"Oriya\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Telu\": \"Teloegoe\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibettaans\",
        \"Zmth\": \"Wiskundige notasie\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbole\",
        \"Zxxx\": \"Ongeskrewe\",
        \"Zyyy\": \"Gemeenskaplik\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/af.json";
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
        \"Arab\": \"Arabies\",
        \"Armn\": \"Armeens\",
        \"Beng\": \"Bengaals\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Sirillies\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Etiopies\",
        \"Geor\": \"Georgies\",
        \"Grek\": \"Grieks\",
        \"Gujr\": \"Gudjarati\",
        \"Guru\": \"Gurmukhi\",
        \"Hanb\": \"Han met Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Vereenvoudig\",
        \"Hant\": \"Tradisioneel\",
        \"Hebr\": \"Hebreeus\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Japannese lettergreepskrif\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japannees\",
        \"Kana\": \"Katakana\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreaans\",
        \"Laoo\": \"Lao\",
        \"Latn\": \"Latyn\",
        \"Mlym\": \"Malabaars\",
        \"Mong\": \"Mongools\",
        \"Mymr\": \"Mianmar\",
        \"Orya\": \"Oriya\",
        \"Sinh\": \"Sinhala\",
        \"Taml\": \"Tamil\",
        \"Telu\": \"Teloegoe\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibettaans\",
        \"Zmth\": \"Wiskundige notasie\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Simbole\",
        \"Zxxx\": \"Ongeskrewe\",
        \"Zyyy\": \"Gemeenskaplik\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/af.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/af.json");
    }
}
