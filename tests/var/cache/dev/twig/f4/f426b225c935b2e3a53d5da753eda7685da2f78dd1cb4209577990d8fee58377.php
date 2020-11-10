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

/* vendor/symfony/intl/Resources/data/scripts/sq.json */
class __TwigTemplate_b7591505ae2e94b0122391a9f43335151c3027a86e7d75713d77efb2a34e06b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sq.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sq.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabik\",
        \"Armn\": \"armen\",
        \"Beng\": \"bengal\",
        \"Bopo\": \"bopomof\",
        \"Brai\": \"brailisht\",
        \"Cyrl\": \"cirilik\",
        \"Deva\": \"devanagar\",
        \"Ethi\": \"etiopik\",
        \"Geor\": \"gjeorgjian\",
        \"Grek\": \"grek\",
        \"Gujr\": \"guxharat\",
        \"Guru\": \"gurmuk\",
        \"Hanb\": \"hanbik\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"i thjeshtuar\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebraik\",
        \"Hira\": \"hiragan\",
        \"Hrkt\": \"alfabet rrokjesor japonez\",
        \"Jamo\": \"jamosisht\",
        \"Jpan\": \"japonez\",
        \"Kana\": \"katakan\",
        \"Khmr\": \"kmer\",
        \"Knda\": \"kanad\",
        \"Kore\": \"korean\",
        \"Laoo\": \"laosisht\",
        \"Latn\": \"latin\",
        \"Mlym\": \"malajalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birman\",
        \"Orya\": \"orija\",
        \"Sinh\": \"sinhal\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telug\",
        \"Thaa\": \"tanisht\",
        \"Thai\": \"tajlandez\",
        \"Tibt\": \"tibetisht\",
        \"Zmth\": \"simbole matematikore\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"me simbole\",
        \"Zxxx\": \"i pashkruar\",
        \"Zyyy\": \"i zakonshëm\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sq.json";
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
        \"Arab\": \"arabik\",
        \"Armn\": \"armen\",
        \"Beng\": \"bengal\",
        \"Bopo\": \"bopomof\",
        \"Brai\": \"brailisht\",
        \"Cyrl\": \"cirilik\",
        \"Deva\": \"devanagar\",
        \"Ethi\": \"etiopik\",
        \"Geor\": \"gjeorgjian\",
        \"Grek\": \"grek\",
        \"Gujr\": \"guxharat\",
        \"Guru\": \"gurmuk\",
        \"Hanb\": \"hanbik\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"i thjeshtuar\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebraik\",
        \"Hira\": \"hiragan\",
        \"Hrkt\": \"alfabet rrokjesor japonez\",
        \"Jamo\": \"jamosisht\",
        \"Jpan\": \"japonez\",
        \"Kana\": \"katakan\",
        \"Khmr\": \"kmer\",
        \"Knda\": \"kanad\",
        \"Kore\": \"korean\",
        \"Laoo\": \"laosisht\",
        \"Latn\": \"latin\",
        \"Mlym\": \"malajalam\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birman\",
        \"Orya\": \"orija\",
        \"Sinh\": \"sinhal\",
        \"Taml\": \"tamil\",
        \"Telu\": \"telug\",
        \"Thaa\": \"tanisht\",
        \"Thai\": \"tajlandez\",
        \"Tibt\": \"tibetisht\",
        \"Zmth\": \"simbole matematikore\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"me simbole\",
        \"Zxxx\": \"i pashkruar\",
        \"Zyyy\": \"i zakonshëm\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sq.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sq.json");
    }
}
