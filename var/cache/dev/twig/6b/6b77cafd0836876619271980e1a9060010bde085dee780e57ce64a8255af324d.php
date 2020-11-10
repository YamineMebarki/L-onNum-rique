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

/* vendor/symfony/intl/Resources/data/scripts/br.json */
class __TwigTemplate_e271fe0e204d1aeec2cdd313430a96103af4321fc93f78c6d7b821d5504b5fdd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/br.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/br.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Adlm\": \"adlam\",
        \"Arab\": \"arabek\",
        \"Armi\": \"arameek impalaerel\",
        \"Armn\": \"armenianek\",
        \"Avst\": \"avestek\",
        \"Bali\": \"balinek\",
        \"Bamu\": \"bamounek\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengali\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"bougiek\",
        \"Cakm\": \"chakmaek\",
        \"Cans\": \"silabennaoueg engenidik unvan Kanada\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Copt\": \"koptek\",
        \"Cprt\": \"silabennaoueg kipriek\",
        \"Cyrl\": \"kirillek\",
        \"Cyrs\": \"kirillek henslavonek\",
        \"Deva\": \"devanagari\",
        \"Dupl\": \"berrskriverezh Duployé\",
        \"Egyp\": \"hieroglifoù egiptek\",
        \"Ethi\": \"etiopek\",
        \"Geor\": \"jorjianek\",
        \"Glag\": \"glagolitek\",
        \"Goth\": \"gotek\",
        \"Grek\": \"gresianek\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han gant bopomofo\",
        \"Hang\": \"hangeul\",
        \"Hani\": \"sinalunioù (han)\",
        \"Hans\": \"eeunaet\",
        \"Hant\": \"hengounel\",
        \"Hebr\": \"hebraek\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"hieroglifoù Anatolia\",
        \"Hrkt\": \"silabennaouegoù japanek\",
        \"Hung\": \"henhungarek\",
        \"Ital\": \"henitalek\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanek\",
        \"Jpan\": \"japanek\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreanek\",
        \"Laoo\": \"laosek\",
        \"Latg\": \"latin gouezelek\",
        \"Latn\": \"latin\",
        \"Lyci\": \"likiek\",
        \"Lydi\": \"lidiek\",
        \"Mani\": \"manikeek\",
        \"Maya\": \"hieroglifoù mayaek\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolek\",
        \"Mymr\": \"myanmar\",
        \"Narb\": \"henarabek an Norzh\",
        \"Ogam\": \"ogam\",
        \"Orya\": \"oriya\",
        \"Phnx\": \"fenikianek\",
        \"Runr\": \"runek\",
        \"Samr\": \"samaritek\",
        \"Sarb\": \"henarabek ar Su\",
        \"Sinh\": \"singhalek\",
        \"Sund\": \"sundanek\",
        \"Syrc\": \"siriek\",
        \"Syre\": \"siriek Estrangelā\",
        \"Syrj\": \"siriek ar C’hornôg\",
        \"Syrn\": \"siriek ar Reter\",
        \"Taml\": \"tamilek\",
        \"Telu\": \"telougou\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetanek\",
        \"Ugar\": \"ougaritek\",
        \"Vaii\": \"vai\",
        \"Xpeo\": \"persek kozh\",
        \"Xsux\": \"gennheñvel\",
        \"Zinh\": \"hêrezh\",
        \"Zmth\": \"notadur jedoniel\",
        \"Zsye\": \"fromlunioù\",
        \"Zsym\": \"arouezioù\",
        \"Zxxx\": \"anskrivet\",
        \"Zyyy\": \"boutin\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/br.json";
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
        \"Adlm\": \"adlam\",
        \"Arab\": \"arabek\",
        \"Armi\": \"arameek impalaerel\",
        \"Armn\": \"armenianek\",
        \"Avst\": \"avestek\",
        \"Bali\": \"balinek\",
        \"Bamu\": \"bamounek\",
        \"Batk\": \"batak\",
        \"Beng\": \"bengali\",
        \"Bopo\": \"bopomofo\",
        \"Brai\": \"Braille\",
        \"Bugi\": \"bougiek\",
        \"Cakm\": \"chakmaek\",
        \"Cans\": \"silabennaoueg engenidik unvan Kanada\",
        \"Cham\": \"cham\",
        \"Cher\": \"cherokee\",
        \"Copt\": \"koptek\",
        \"Cprt\": \"silabennaoueg kipriek\",
        \"Cyrl\": \"kirillek\",
        \"Cyrs\": \"kirillek henslavonek\",
        \"Deva\": \"devanagari\",
        \"Dupl\": \"berrskriverezh Duployé\",
        \"Egyp\": \"hieroglifoù egiptek\",
        \"Ethi\": \"etiopek\",
        \"Geor\": \"jorjianek\",
        \"Glag\": \"glagolitek\",
        \"Goth\": \"gotek\",
        \"Grek\": \"gresianek\",
        \"Gujr\": \"gujarati\",
        \"Guru\": \"gurmukhi\",
        \"Hanb\": \"han gant bopomofo\",
        \"Hang\": \"hangeul\",
        \"Hani\": \"sinalunioù (han)\",
        \"Hans\": \"eeunaet\",
        \"Hant\": \"hengounel\",
        \"Hebr\": \"hebraek\",
        \"Hira\": \"hiragana\",
        \"Hluw\": \"hieroglifoù Anatolia\",
        \"Hrkt\": \"silabennaouegoù japanek\",
        \"Hung\": \"henhungarek\",
        \"Ital\": \"henitalek\",
        \"Jamo\": \"jamo\",
        \"Java\": \"javanek\",
        \"Jpan\": \"japanek\",
        \"Kana\": \"katakana\",
        \"Khmr\": \"khmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreanek\",
        \"Laoo\": \"laosek\",
        \"Latg\": \"latin gouezelek\",
        \"Latn\": \"latin\",
        \"Lyci\": \"likiek\",
        \"Lydi\": \"lidiek\",
        \"Mani\": \"manikeek\",
        \"Maya\": \"hieroglifoù mayaek\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"mongolek\",
        \"Mymr\": \"myanmar\",
        \"Narb\": \"henarabek an Norzh\",
        \"Ogam\": \"ogam\",
        \"Orya\": \"oriya\",
        \"Phnx\": \"fenikianek\",
        \"Runr\": \"runek\",
        \"Samr\": \"samaritek\",
        \"Sarb\": \"henarabek ar Su\",
        \"Sinh\": \"singhalek\",
        \"Sund\": \"sundanek\",
        \"Syrc\": \"siriek\",
        \"Syre\": \"siriek Estrangelā\",
        \"Syrj\": \"siriek ar C’hornôg\",
        \"Syrn\": \"siriek ar Reter\",
        \"Taml\": \"tamilek\",
        \"Telu\": \"telougou\",
        \"Tglg\": \"tagalog\",
        \"Thaa\": \"thaana\",
        \"Thai\": \"thai\",
        \"Tibt\": \"tibetanek\",
        \"Ugar\": \"ougaritek\",
        \"Vaii\": \"vai\",
        \"Xpeo\": \"persek kozh\",
        \"Xsux\": \"gennheñvel\",
        \"Zinh\": \"hêrezh\",
        \"Zmth\": \"notadur jedoniel\",
        \"Zsye\": \"fromlunioù\",
        \"Zsym\": \"arouezioù\",
        \"Zxxx\": \"anskrivet\",
        \"Zyyy\": \"boutin\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/br.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/br.json");
    }
}
