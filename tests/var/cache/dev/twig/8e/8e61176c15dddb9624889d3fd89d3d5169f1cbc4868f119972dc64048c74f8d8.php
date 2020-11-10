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

/* vendor/symfony/intl/Resources/data/scripts/cy.json */
class __TwigTemplate_b95be290f8951b80c720961ddcb9a3556a3562cb51246725f13dbf7a27a2abcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/cy.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/cy.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arabaidd\",
        \"Armn\": \"Armenaidd\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Cyrilig\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopig\",
        \"Geor\": \"Georgaidd\",
        \"Grek\": \"Groegaidd\",
        \"Gujr\": \"Gwjarataidd\",
        \"Guru\": \"Gwrmwci\",
        \"Hanb\": \"Han gyda Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Symledig\",
        \"Hant\": \"Traddodiadol\",
        \"Hebr\": \"Hebreig\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Syllwyddor Japaneaidd\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japaneaidd\",
        \"Kana\": \"Catacana\",
        \"Khmr\": \"Chmeraidd\",
        \"Knda\": \"Canaraidd\",
        \"Kore\": \"Coreaidd\",
        \"Laoo\": \"Laoaidd\",
        \"Latn\": \"Lladin\",
        \"Mlym\": \"Malayalamaidd\",
        \"Mong\": \"Mongolaidd\",
        \"Mymr\": \"Myanmaraidd\",
        \"Orya\": \"Orïaidd\",
        \"Sinh\": \"Sinhanaidd\",
        \"Taml\": \"Tamilaidd\",
        \"Telu\": \"Telugu\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Tai\",
        \"Tibt\": \"Tibetaidd\",
        \"Zmth\": \"Nodiant Mathemategol\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Symbolau\",
        \"Zxxx\": \"Anysgrifenedig\",
        \"Zyyy\": \"Cyffredin\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/cy.json";
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
        \"Arab\": \"Arabaidd\",
        \"Armn\": \"Armenaidd\",
        \"Beng\": \"Bangla\",
        \"Bopo\": \"Bopomofo\",
        \"Brai\": \"Braille\",
        \"Cyrl\": \"Cyrilig\",
        \"Deva\": \"Devanagari\",
        \"Ethi\": \"Ethiopig\",
        \"Geor\": \"Georgaidd\",
        \"Grek\": \"Groegaidd\",
        \"Gujr\": \"Gwjarataidd\",
        \"Guru\": \"Gwrmwci\",
        \"Hanb\": \"Han gyda Bopomofo\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hans\": \"Symledig\",
        \"Hant\": \"Traddodiadol\",
        \"Hebr\": \"Hebreig\",
        \"Hira\": \"Hiragana\",
        \"Hrkt\": \"Syllwyddor Japaneaidd\",
        \"Jamo\": \"Jamo\",
        \"Jpan\": \"Japaneaidd\",
        \"Kana\": \"Catacana\",
        \"Khmr\": \"Chmeraidd\",
        \"Knda\": \"Canaraidd\",
        \"Kore\": \"Coreaidd\",
        \"Laoo\": \"Laoaidd\",
        \"Latn\": \"Lladin\",
        \"Mlym\": \"Malayalamaidd\",
        \"Mong\": \"Mongolaidd\",
        \"Mymr\": \"Myanmaraidd\",
        \"Orya\": \"Orïaidd\",
        \"Sinh\": \"Sinhanaidd\",
        \"Taml\": \"Tamilaidd\",
        \"Telu\": \"Telugu\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Tai\",
        \"Tibt\": \"Tibetaidd\",
        \"Zmth\": \"Nodiant Mathemategol\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Symbolau\",
        \"Zxxx\": \"Anysgrifenedig\",
        \"Zyyy\": \"Cyffredin\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/cy.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/cy.json");
    }
}
