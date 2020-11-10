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

/* vendor/symfony/intl/Resources/data/scripts/uz.json */
class __TwigTemplate_d832a7e362dc0610bb029a66b6f63b53751bccd920efbec9cc486ee2d403b923 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/uz.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/uz.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arab\",
        \"Armn\": \"arman\",
        \"Beng\": \"bengal\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"brayl\",
        \"Cyrl\": \"kirill\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"habash\",
        \"Geor\": \"gruzin\",
        \"Grek\": \"grek\",
        \"Gujr\": \"gujarot\",
        \"Guru\": \"gurmukxi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"xitoy\",
        \"Hans\": \"soddalashgan xitoy\",
        \"Hant\": \"an’anaviy xitoy\",
        \"Hebr\": \"ivrit\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"katakana yoki hiragana\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"yapon\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"kxmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreys\",
        \"Laoo\": \"laos\",
        \"Latn\": \"lotin\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"myanma\",
        \"Orya\": \"oriya\",
        \"Sinh\": \"singal\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tay\",
        \"Tibt\": \"tibet\",
        \"Zmth\": \"matematik ifodalar\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"belgilar\",
        \"Zxxx\": \"yozuvsiz\",
        \"Zyyy\": \"umumiy\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/uz.json";
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
        \"Arab\": \"arab\",
        \"Armn\": \"arman\",
        \"Beng\": \"bengal\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"brayl\",
        \"Cyrl\": \"kirill\",
        \"Deva\": \"devanagari\",
        \"Ethi\": \"habash\",
        \"Geor\": \"gruzin\",
        \"Grek\": \"grek\",
        \"Gujr\": \"gujarot\",
        \"Guru\": \"gurmukxi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"xitoy\",
        \"Hans\": \"soddalashgan xitoy\",
        \"Hant\": \"an’anaviy xitoy\",
        \"Hebr\": \"ivrit\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"katakana yoki hiragana\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"yapon\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"kxmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreys\",
        \"Laoo\": \"laos\",
        \"Latn\": \"lotin\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"myanma\",
        \"Orya\": \"oriya\",
        \"Sinh\": \"singal\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"taana\",
        \"Thai\": \"tay\",
        \"Tibt\": \"tibet\",
        \"Zmth\": \"matematik ifodalar\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"belgilar\",
        \"Zxxx\": \"yozuvsiz\",
        \"Zyyy\": \"umumiy\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/uz.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/uz.json");
    }
}
