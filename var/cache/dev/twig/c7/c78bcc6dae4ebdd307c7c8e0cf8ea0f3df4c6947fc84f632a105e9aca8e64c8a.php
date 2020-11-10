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

/* vendor/symfony/intl/Resources/data/scripts/so.json */
class __TwigTemplate_f13650309c92afe935b6d1679adb71eac403d75082c97ad62342b4fbe45770f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/so.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/so.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Carabi\",
        \"Armn\": \"Armeeniyaan\",
        \"Beng\": \"Baangla\",
        \"Brai\": \"Qoraalka Indhoolaha\",
        \"Cyrl\": \"Siriylik\",
        \"Deva\": \"Dhefangaari\",
        \"Ethi\": \"Itoobiya\",
        \"Geor\": \"Jiyoorjoyaan\",
        \"Grek\": \"Giriik\",
        \"Gujr\": \"Gujaraati\",
        \"Hang\": \"Hanguul\",
        \"Hans\": \"La fududeeyay\",
        \"Hant\": \"Hore\",
        \"Hebr\": \"Cibraani\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Qoraalka Xuruufta Jabaaniiska\",
        \"Jamo\": \"Jaamo\",
        \"Jpan\": \"Jabaaniis\",
        \"Kana\": \"Katakaana\",
        \"Khmr\": \"Khamer\",
        \"Knda\": \"Kanada\",
        \"Kore\": \"Kuuriyaan\",
        \"Latn\": \"Laatiin\",
        \"Mlym\": \"Maalayalam\",
        \"Mong\": \"Mongooliyaan\",
        \"Mymr\": \"Mayanmaar\",
        \"Orya\": \"Oodhiya\",
        \"Sinh\": \"Sinhaala\",
        \"Taml\": \"Taamiil\",
        \"Telu\": \"Teeluguu\",
        \"Thaa\": \"Daana\",
        \"Thai\": \"Taay\",
        \"Tibt\": \"Tibetaan\",
        \"Zmth\": \"Aqoonsiga Xisaabta\",
        \"Zsye\": \"Calaamad Dareen Muujin\",
        \"Zsym\": \"Calaamado\",
        \"Zxxx\": \"Aan la qorin\",
        \"Zyyy\": \"Caadi ahaan\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/so.json";
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
        \"Arab\": \"Carabi\",
        \"Armn\": \"Armeeniyaan\",
        \"Beng\": \"Baangla\",
        \"Brai\": \"Qoraalka Indhoolaha\",
        \"Cyrl\": \"Siriylik\",
        \"Deva\": \"Dhefangaari\",
        \"Ethi\": \"Itoobiya\",
        \"Geor\": \"Jiyoorjoyaan\",
        \"Grek\": \"Giriik\",
        \"Gujr\": \"Gujaraati\",
        \"Hang\": \"Hanguul\",
        \"Hans\": \"La fududeeyay\",
        \"Hant\": \"Hore\",
        \"Hebr\": \"Cibraani\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Qoraalka Xuruufta Jabaaniiska\",
        \"Jamo\": \"Jaamo\",
        \"Jpan\": \"Jabaaniis\",
        \"Kana\": \"Katakaana\",
        \"Khmr\": \"Khamer\",
        \"Knda\": \"Kanada\",
        \"Kore\": \"Kuuriyaan\",
        \"Latn\": \"Laatiin\",
        \"Mlym\": \"Maalayalam\",
        \"Mong\": \"Mongooliyaan\",
        \"Mymr\": \"Mayanmaar\",
        \"Orya\": \"Oodhiya\",
        \"Sinh\": \"Sinhaala\",
        \"Taml\": \"Taamiil\",
        \"Telu\": \"Teeluguu\",
        \"Thaa\": \"Daana\",
        \"Thai\": \"Taay\",
        \"Tibt\": \"Tibetaan\",
        \"Zmth\": \"Aqoonsiga Xisaabta\",
        \"Zsye\": \"Calaamad Dareen Muujin\",
        \"Zsym\": \"Calaamado\",
        \"Zxxx\": \"Aan la qorin\",
        \"Zyyy\": \"Caadi ahaan\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/so.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/so.json");
    }
}
