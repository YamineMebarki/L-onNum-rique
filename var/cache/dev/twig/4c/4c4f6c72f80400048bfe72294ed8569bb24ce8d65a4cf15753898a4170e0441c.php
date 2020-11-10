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

/* vendor/symfony/intl/Resources/data/scripts/ia.json */
class __TwigTemplate_9b4636442e135398ee778cafb202c51184475922d428c3666c6421664adf8fab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ia.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ia.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabe\",
        \"Armn\": \"armenian\",
        \"Beng\": \"bengalese\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cyrl\": \"cyrillic\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"ethiope\",
        \"Geor\": \"georgian\",
        \"Grek\": \"grec\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han con bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificate\",
        \"Hant\": \"traditional\",
        \"Hebr\": \"hebraic\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"syllabarios japonese\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japonese\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"corean\",
        \"Laoo\": \"lao\",
        \"Latn\": \"latin\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birman\",
        \"Orya\": \"orya\",
        \"Sinh\": \"cingalese\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandese\",
        \"Tibt\": \"tibetano\",
        \"Zmth\": \"notation mathematic\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbolos\",
        \"Zxxx\": \"non scripte\",
        \"Zyyy\": \"commun\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ia.json";
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
        \"Arab\": \"arabe\",
        \"Armn\": \"armenian\",
        \"Beng\": \"bengalese\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cyrl\": \"cyrillic\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"ethiope\",
        \"Geor\": \"georgian\",
        \"Grek\": \"grec\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han con bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificate\",
        \"Hant\": \"traditional\",
        \"Hebr\": \"hebraic\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"syllabarios japonese\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japonese\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"corean\",
        \"Laoo\": \"lao\",
        \"Latn\": \"latin\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birman\",
        \"Orya\": \"orya\",
        \"Sinh\": \"cingalese\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandese\",
        \"Tibt\": \"tibetano\",
        \"Zmth\": \"notation mathematic\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"symbolos\",
        \"Zxxx\": \"non scripte\",
        \"Zyyy\": \"commun\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ia.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ia.json");
    }
}
