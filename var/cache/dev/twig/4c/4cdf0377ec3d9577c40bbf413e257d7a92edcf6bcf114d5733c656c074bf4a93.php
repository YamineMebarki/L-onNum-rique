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

/* vendor/symfony/intl/Resources/data/scripts/mo.json */
class __TwigTemplate_bf548179ef988a26c4cb304003ef718278797e56b494856eaf2f3f1d006cb759 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"arabă\",
        \"Armn\": \"armeană\",
        \"Bali\": \"balineză\",
        \"Beng\": \"bengaleză\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cans\": \"silabică aborigenă canadiană unificată\",
        \"Copt\": \"coptă\",
        \"Cprt\": \"cipriotă\",
        \"Cyrl\": \"chirilică\",
        \"Cyrs\": \"chirilică slavonă bisericească veche\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"mormonă\",
        \"Egyd\": \"demotică egipteană\",
        \"Egyh\": \"hieratică egipteană\",
        \"Egyp\": \"hieroglife egiptene\",
        \"Ethi\": \"etiopiană\",
        \"Geok\": \"georgiană bisericească\",
        \"Geor\": \"georgiană\",
        \"Glag\": \"glagolitică\",
        \"Goth\": \"gotică\",
        \"Grek\": \"greacă\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificată\",
        \"Hant\": \"tradițională\",
        \"Hebr\": \"ebraică\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabică japoneză\",
        \"Hung\": \"maghiară veche\",
        \"Inds\": \"indus\",
        \"Ital\": \"italică veche\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javaneză\",
        \"Jpan\": \"japoneză\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmeră\",
        \"Knda\": \"kannada\",
        \"Kore\": \"coreeană\",
        \"Laoo\": \"laoțiană\",
        \"Latf\": \"latină Fraktur\",
        \"Latg\": \"latină gaelică\",
        \"Latn\": \"latină\",
        \"Lina\": \"lineară A\",
        \"Linb\": \"lineară B\",
        \"Lydi\": \"lidiană\",
        \"Maya\": \"hieroglife maya\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolă\",
        \"Mymr\": \"birmană\",
        \"Orya\": \"oriya\",
        \"Phnx\": \"feniciană\",
        \"Runr\": \"runică\",
        \"Sinh\": \"singaleză\",
        \"Syrc\": \"siriacă\",
        \"Syrj\": \"siriacă occidentală\",
        \"Syrn\": \"siriacă orientală\",
        \"Taml\": \"tamilă\",
        \"Telu\": \"telugu\",
        \"Tfng\": \"berberă\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandeză\",
        \"Tibt\": \"tibetană\",
        \"Xpeo\": \"persană veche\",
        \"Xsux\": \"cuneiformă sumero-akkadiană\",
        \"Zinh\": \"moștenită\",
        \"Zmth\": \"notație matematică\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"simboluri\",
        \"Zxxx\": \"nescrisă\",
        \"Zyyy\": \"comună\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/mo.json";
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
        \"Arab\": \"arabă\",
        \"Armn\": \"armeană\",
        \"Bali\": \"balineză\",
        \"Beng\": \"bengaleză\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"braille\",
        \"Cans\": \"silabică aborigenă canadiană unificată\",
        \"Copt\": \"coptă\",
        \"Cprt\": \"cipriotă\",
        \"Cyrl\": \"chirilică\",
        \"Cyrs\": \"chirilică slavonă bisericească veche\",
        \"Deva\": \"devanagari\",
        \"Dsrt\": \"mormonă\",
        \"Egyd\": \"demotică egipteană\",
        \"Egyh\": \"hieratică egipteană\",
        \"Egyp\": \"hieroglife egiptene\",
        \"Ethi\": \"etiopiană\",
        \"Geok\": \"georgiană bisericească\",
        \"Geor\": \"georgiană\",
        \"Glag\": \"glagolitică\",
        \"Goth\": \"gotică\",
        \"Grek\": \"greacă\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hangul\",
        \"Hani\": \"han\",
        \"Hans\": \"simplificată\",
        \"Hant\": \"tradițională\",
        \"Hebr\": \"ebraică\",
        \"Hira\": \"hiragana\",
        \"Hrkt\": \"silabică japoneză\",
        \"Hung\": \"maghiară veche\",
        \"Inds\": \"indus\",
        \"Ital\": \"italică veche\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javaneză\",
        \"Jpan\": \"japoneză\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmeră\",
        \"Knda\": \"kannada\",
        \"Kore\": \"coreeană\",
        \"Laoo\": \"laoțiană\",
        \"Latf\": \"latină Fraktur\",
        \"Latg\": \"latină gaelică\",
        \"Latn\": \"latină\",
        \"Lina\": \"lineară A\",
        \"Linb\": \"lineară B\",
        \"Lydi\": \"lidiană\",
        \"Maya\": \"hieroglife maya\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolă\",
        \"Mymr\": \"birmană\",
        \"Orya\": \"oriya\",
        \"Phnx\": \"feniciană\",
        \"Runr\": \"runică\",
        \"Sinh\": \"singaleză\",
        \"Syrc\": \"siriacă\",
        \"Syrj\": \"siriacă occidentală\",
        \"Syrn\": \"siriacă orientală\",
        \"Taml\": \"tamilă\",
        \"Telu\": \"telugu\",
        \"Tfng\": \"berberă\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thailandeză\",
        \"Tibt\": \"tibetană\",
        \"Xpeo\": \"persană veche\",
        \"Xsux\": \"cuneiformă sumero-akkadiană\",
        \"Zinh\": \"moștenită\",
        \"Zmth\": \"notație matematică\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"simboluri\",
        \"Zxxx\": \"nescrisă\",
        \"Zyyy\": \"comună\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/mo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/mo.json");
    }
}
