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

/* vendor/symfony/intl/Resources/data/scripts/fo.json */
class __TwigTemplate_4ab04e82edb22861d8f96f0f824694d89a4f965234e1b4ff35d24f123394aa84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabisk\",
        \"Armn\": \"armenskt\",
        \"Beng\": \"bangla\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"blindaskrift\",
        \"Cyrl\": \"kyrilliskt\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"etiopiskt\",
        \"Geor\": \"georgianskt\",
        \"Grek\": \"grikskt\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"einkult\",
        \"Hant\": \"vanligt\",
        \"Hebr\": \"hebraiskt\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"japanskir stavir\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japanskt\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreanskt\",
        \"Laoo\": \"lao\",
        \"Latn\": \"latínskt\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolsk\",
        \"Mymr\": \"myanmarskt\",
        \"Orya\": \"odia\",
        \"Sinh\": \"sinhala\",
        \"Taml\": \"tamilskt\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailendskt\",
        \"Tibt\": \"tibetskt\",
        \"Zmth\": \"støddfrøðilig teknskipan\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"tekin\",
        \"Zxxx\": \"óskriva\",
        \"Zyyy\": \"vanlig\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/fo.json";
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
        \"Arab\": \"arabisk\",
        \"Armn\": \"armenskt\",
        \"Beng\": \"bangla\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"blindaskrift\",
        \"Cyrl\": \"kyrilliskt\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"etiopiskt\",
        \"Geor\": \"georgianskt\",
        \"Grek\": \"grikskt\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"einkult\",
        \"Hant\": \"vanligt\",
        \"Hebr\": \"hebraiskt\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"japanskir stavir\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japanskt\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreanskt\",
        \"Laoo\": \"lao\",
        \"Latn\": \"latínskt\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolsk\",
        \"Mymr\": \"myanmarskt\",
        \"Orya\": \"odia\",
        \"Sinh\": \"sinhala\",
        \"Taml\": \"tamilskt\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailendskt\",
        \"Tibt\": \"tibetskt\",
        \"Zmth\": \"støddfrøðilig teknskipan\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"tekin\",
        \"Zxxx\": \"óskriva\",
        \"Zyyy\": \"vanlig\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/fo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/fo.json");
    }
}
