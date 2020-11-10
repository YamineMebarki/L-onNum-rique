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

/* vendor/symfony/intl/Resources/data/scripts/eu.json */
class __TwigTemplate_3780d62f87108f37eb1f99c9ad21d7d4fdabfb6c211a0a578ae40f62483d7600 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/eu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/eu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabiarra\",
        \"Armn\": \"armeniarra\",
        \"Beng\": \"bengalarra\",
        \"Bopo\": \"bopomofoa\",
        \"Brai\": \"braillea\",
        \"Cyrl\": \"zirilikoa\",
        \"Deva\": \"devanagaria\",
        \"Ethi\": \"etiopiarra\",
        \"Geor\": \"georgiarra\",
        \"Grek\": \"grekoa\",
        \"Gujr\": \"gujaratarra\",
        \"Guru\": \"gurmukhia\",
        \"Hanb\": \"hänera\",
        \"Hang\": \"hangula\",
        \"Hani\": \"idazkera txinatarra\",
        \"Hans\": \"sinplifikatua\",
        \"Hant\": \"tradizionala\",
        \"Hebr\": \"hebrearra\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabario japoniarrak\",
        \"Jamo\": \"jamo-bihurketa\",
        \"Jpan\": \"japoniarra\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khemerarra\",
        \"Knda\": \"kanadarra\",
        \"Kore\": \"korearra\",
        \"Laoo\": \"laosarra\",
        \"Latn\": \"latinoa\",
        \"Mlym\": \"malayalamarra\",
        \"Mong\": \"mongoliarra\",
        \"Mymr\": \"birmaniarra\",
        \"Orya\": \"oriyarra\",
        \"Sinh\": \"sinhala\",
        \"Taml\": \"tamilarra\",
        \"Telu\": \"teluguarra\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandiarra\",
        \"Tibt\": \"tibetarra\",
        \"Zmth\": \"matematikako notazioa\",
        \"Zsye\": \"emotikonoa\",
        \"Zsym\": \"ikurrak\",
        \"Zxxx\": \"idatzi gabea\",
        \"Zyyy\": \"ohikoa\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/eu.json";
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
        \"Arab\": \"arabiarra\",
        \"Armn\": \"armeniarra\",
        \"Beng\": \"bengalarra\",
        \"Bopo\": \"bopomofoa\",
        \"Brai\": \"braillea\",
        \"Cyrl\": \"zirilikoa\",
        \"Deva\": \"devanagaria\",
        \"Ethi\": \"etiopiarra\",
        \"Geor\": \"georgiarra\",
        \"Grek\": \"grekoa\",
        \"Gujr\": \"gujaratarra\",
        \"Guru\": \"gurmukhia\",
        \"Hanb\": \"hänera\",
        \"Hang\": \"hangula\",
        \"Hani\": \"idazkera txinatarra\",
        \"Hans\": \"sinplifikatua\",
        \"Hant\": \"tradizionala\",
        \"Hebr\": \"hebrearra\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabario japoniarrak\",
        \"Jamo\": \"jamo-bihurketa\",
        \"Jpan\": \"japoniarra\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khemerarra\",
        \"Knda\": \"kanadarra\",
        \"Kore\": \"korearra\",
        \"Laoo\": \"laosarra\",
        \"Latn\": \"latinoa\",
        \"Mlym\": \"malayalamarra\",
        \"Mong\": \"mongoliarra\",
        \"Mymr\": \"birmaniarra\",
        \"Orya\": \"oriyarra\",
        \"Sinh\": \"sinhala\",
        \"Taml\": \"tamilarra\",
        \"Telu\": \"teluguarra\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandiarra\",
        \"Tibt\": \"tibetarra\",
        \"Zmth\": \"matematikako notazioa\",
        \"Zsye\": \"emotikonoa\",
        \"Zsym\": \"ikurrak\",
        \"Zxxx\": \"idatzi gabea\",
        \"Zyyy\": \"ohikoa\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/eu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/eu.json");
    }
}
