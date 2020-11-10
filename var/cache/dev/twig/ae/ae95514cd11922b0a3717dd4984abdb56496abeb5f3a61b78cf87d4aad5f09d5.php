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

/* vendor/symfony/intl/Resources/data/scripts/sk.json */
class __TwigTemplate_c34b396784c39af15f99f27f659c6a7c47f1939d3069300d870dc8988fc64cda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabské\",
        \"Armn\": \"arménske\",
        \"Bali\": \"balijský\",
        \"Beng\": \"bengálske\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braillovo\",
        \"Cyrl\": \"cyrilika\",
        \"Deva\": \"dévanágarí\",
        \"Egyp\": \"egyptské hieroglyfy\",
        \"Ethi\": \"etiópske\",
        \"Geor\": \"gruzínske\",
        \"Glag\": \"hlaholika\",
        \"Goth\": \"gotický\",
        \"Grek\": \"grécke\",
        \"Gujr\": \"gudžarátí\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"čínske a bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"čínske\",
        \"Hans\": \"zjednodušené\",
        \"Hant\": \"tradičné\",
        \"Hebr\": \"hebrejské\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"kana\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japonské\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmérske\",
        \"Knda\": \"kannadské\",
        \"Kore\": \"kórejské\",
        \"Laoo\": \"laoské\",
        \"Latn\": \"latinka\",
        \"Lina\": \"lineárna A\",
        \"Linb\": \"lineárna B\",
        \"Maya\": \"mayské hieroglyfy\",
        \"Mlym\": \"malajálamske\",
        \"Mong\": \"mongolské\",
        \"Mymr\": \"barmské\",
        \"Orya\": \"uríjske\",
        \"Osma\": \"osmanský\",
        \"Runr\": \"Runové písmo\",
        \"Sinh\": \"sinhálske\",
        \"Taml\": \"tamilské\",
        \"Telu\": \"telugské\",
        \"Thaa\": \"tána\",
        \"Thai\": \"thajské\",
        \"Tibt\": \"tibetské\",
        \"Zmth\": \"matematický zápis\",
        \"Zsye\": \"emodži\",
        \"Zsym\": \"symboly\",
        \"Zxxx\": \"bez zápisu\",
        \"Zyyy\": \"všeobecné\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sk.json";
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
        \"Arab\": \"arabské\",
        \"Armn\": \"arménske\",
        \"Bali\": \"balijský\",
        \"Beng\": \"bengálske\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braillovo\",
        \"Cyrl\": \"cyrilika\",
        \"Deva\": \"dévanágarí\",
        \"Egyp\": \"egyptské hieroglyfy\",
        \"Ethi\": \"etiópske\",
        \"Geor\": \"gruzínske\",
        \"Glag\": \"hlaholika\",
        \"Goth\": \"gotický\",
        \"Grek\": \"grécke\",
        \"Gujr\": \"gudžarátí\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"čínske a bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"čínske\",
        \"Hans\": \"zjednodušené\",
        \"Hant\": \"tradičné\",
        \"Hebr\": \"hebrejské\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"kana\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"japonské\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmérske\",
        \"Knda\": \"kannadské\",
        \"Kore\": \"kórejské\",
        \"Laoo\": \"laoské\",
        \"Latn\": \"latinka\",
        \"Lina\": \"lineárna A\",
        \"Linb\": \"lineárna B\",
        \"Maya\": \"mayské hieroglyfy\",
        \"Mlym\": \"malajálamske\",
        \"Mong\": \"mongolské\",
        \"Mymr\": \"barmské\",
        \"Orya\": \"uríjske\",
        \"Osma\": \"osmanský\",
        \"Runr\": \"Runové písmo\",
        \"Sinh\": \"sinhálske\",
        \"Taml\": \"tamilské\",
        \"Telu\": \"telugské\",
        \"Thaa\": \"tána\",
        \"Thai\": \"thajské\",
        \"Tibt\": \"tibetské\",
        \"Zmth\": \"matematický zápis\",
        \"Zsye\": \"emodži\",
        \"Zsym\": \"symboly\",
        \"Zxxx\": \"bez zápisu\",
        \"Zyyy\": \"všeobecné\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sk.json");
    }
}
