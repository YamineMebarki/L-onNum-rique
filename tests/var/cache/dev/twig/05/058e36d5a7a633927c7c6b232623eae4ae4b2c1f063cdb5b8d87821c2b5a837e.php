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

/* vendor/symfony/intl/Resources/data/scripts/sw.json */
class __TwigTemplate_07e7a1e0785527dcd92a64bce6bd362bef3270948b63403340d5a93856a9bf04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sw.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sw.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Kiarabu\",
        \"Armn\": \"Kiarmenia\",
        \"Beng\": \"Kibengali\",
        \"Bopo\": \"Kibopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Kisiriliki\",
        \"Deva\": \"Kidevanagari\",
        \"Ethi\": \"Kiethiopia\",
        \"Geor\": \"Kijojia\",
        \"Grek\": \"Kigiriki\",
        \"Gujr\": \"Kigujarati\",
        \"Guru\": \"Kigurmukhi\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Kihangul\",
        \"Hani\": \"Kihan\",
        \"Hans\": \"Rahisi\",
        \"Hant\": \"Cha jadi\",
        \"Hebr\": \"Kiebrania\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Hati za Kijapani\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Kijapani\",
        \"Kana\": \"Kikatakana\",
        \"Khmr\": \"Kikambodia\",
        \"Knda\": \"Kikannada\",
        \"Kore\": \"Kikorea\",
        \"Laoo\": \"Kilaosi\",
        \"Latn\": \"Kilatini\",
        \"Mlym\": \"Kimalayalam\",
        \"Mong\": \"Kimongolia\",
        \"Mymr\": \"Myama\",
        \"Orya\": \"Kioriya\",
        \"Sinh\": \"Kisinhala\",
        \"Taml\": \"Kitamil\",
        \"Telu\": \"Kitelugu\",
        \"Thaa\": \"Kithaana\",
        \"Thai\": \"Kithai\",
        \"Tibt\": \"Kitibeti\",
        \"Zmth\": \"Hati za kihisabati\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Alama\",
        \"Zxxx\": \"Haijaandikwa\",
        \"Zyyy\": \"Kawaida\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sw.json";
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
        \"Arab\": \"Kiarabu\",
        \"Armn\": \"Kiarmenia\",
        \"Beng\": \"Kibengali\",
        \"Bopo\": \"Kibopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Kisiriliki\",
        \"Deva\": \"Kidevanagari\",
        \"Ethi\": \"Kiethiopia\",
        \"Geor\": \"Kijojia\",
        \"Grek\": \"Kigiriki\",
        \"Gujr\": \"Kigujarati\",
        \"Guru\": \"Kigurmukhi\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Kihangul\",
        \"Hani\": \"Kihan\",
        \"Hans\": \"Rahisi\",
        \"Hant\": \"Cha jadi\",
        \"Hebr\": \"Kiebrania\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Hati za Kijapani\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Kijapani\",
        \"Kana\": \"Kikatakana\",
        \"Khmr\": \"Kikambodia\",
        \"Knda\": \"Kikannada\",
        \"Kore\": \"Kikorea\",
        \"Laoo\": \"Kilaosi\",
        \"Latn\": \"Kilatini\",
        \"Mlym\": \"Kimalayalam\",
        \"Mong\": \"Kimongolia\",
        \"Mymr\": \"Myama\",
        \"Orya\": \"Kioriya\",
        \"Sinh\": \"Kisinhala\",
        \"Taml\": \"Kitamil\",
        \"Telu\": \"Kitelugu\",
        \"Thaa\": \"Kithaana\",
        \"Thai\": \"Kithai\",
        \"Tibt\": \"Kitibeti\",
        \"Zmth\": \"Hati za kihisabati\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Alama\",
        \"Zxxx\": \"Haijaandikwa\",
        \"Zyyy\": \"Kawaida\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sw.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sw.json");
    }
}
