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

/* vendor/symfony/intl/Resources/data/scripts/gl.json */
class __TwigTemplate_545cd00989af17cbe6bc8b6b7036eab9c0b0560cdce1d5169a3ea2da366d10a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/gl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/gl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"árabe\",
        \"Armn\": \"armenio\",
        \"Beng\": \"bengalí\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cans\": \"Silabario aborixe canadiano unificado\",
        \"Cyrl\": \"cirílico\",
        \"Deva\": \"devanágari\",
        \"Ethi\": \"etíope\",
        \"Geor\": \"xeorxiano\",
        \"Grek\": \"grego\",
        \"Gujr\": \"guxarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han con bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebreo\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabarios xaponeses\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"xaponés\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannará\",
        \"Kore\": \"coreano\",
        \"Laoo\": \"laosiano\",
        \"Latn\": \"latino\",
        \"Mlym\": \"malabar\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birmano\",
        \"Orya\": \"odiá\",
        \"Sinh\": \"cingalés\",
        \"Taml\": \"támil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandés\",
        \"Tibt\": \"tibetano\",
        \"Zmth\": \"notación matemática\",
        \"Zsye\": \"emojis\",
        \"Zsym\": \"símbolos\",
        \"Zxxx\": \"non escrito\",
        \"Zyyy\": \"común\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/gl.json";
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
        \"Arab\": \"árabe\",
        \"Armn\": \"armenio\",
        \"Beng\": \"bengalí\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cans\": \"Silabario aborixe canadiano unificado\",
        \"Cyrl\": \"cirílico\",
        \"Deva\": \"devanágari\",
        \"Ethi\": \"etíope\",
        \"Geor\": \"xeorxiano\",
        \"Grek\": \"grego\",
        \"Gujr\": \"guxarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han con bopomofo\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificado\",
        \"Hant\": \"tradicional\",
        \"Hebr\": \"hebreo\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabarios xaponeses\",
        \"Jamo\": \"jamo\",
        \"Jpan\": \"xaponés\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannará\",
        \"Kore\": \"coreano\",
        \"Laoo\": \"laosiano\",
        \"Latn\": \"latino\",
        \"Mlym\": \"malabar\",
        \"Mong\": \"mongol\",
        \"Mymr\": \"birmano\",
        \"Orya\": \"odiá\",
        \"Sinh\": \"cingalés\",
        \"Taml\": \"támil\",
        \"Telu\": \"telugu\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"tailandés\",
        \"Tibt\": \"tibetano\",
        \"Zmth\": \"notación matemática\",
        \"Zsye\": \"emojis\",
        \"Zsym\": \"símbolos\",
        \"Zxxx\": \"non escrito\",
        \"Zyyy\": \"común\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/gl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/gl.json");
    }
}
