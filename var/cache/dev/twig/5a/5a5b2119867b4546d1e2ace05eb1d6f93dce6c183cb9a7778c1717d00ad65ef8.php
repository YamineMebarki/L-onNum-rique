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

/* vendor/symfony/intl/Resources/data/scripts/az.json */
class __TwigTemplate_bc4f03639124df5945366321c30319d0748851c9eb4c9fefa3b4e1a22cdbb9ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/az.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/az.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"ərəb\",
        \"Armi\": \"armi\",
        \"Armn\": \"erməni\",
        \"Avst\": \"avestan\",
        \"Bali\": \"bali\",
        \"Batk\": \"batak\",
        \"Beng\": \"benqal\",
        \"Blis\": \"blissymbols\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"brayl\",
        \"Bugi\": \"buqin\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"kakm\",
        \"Cans\": \"birləşmiş kanada yerli yazısı\",
        \"Cari\": \"kariyan\",
        \"Cham\": \"çam\",
        \"Cher\": \"çiroki\",
        \"Cirt\": \"sirt\",
        \"Copt\": \"koptik\",
        \"Cprt\": \"kipr\",
        \"Cyrl\": \"kiril\",
        \"Cyrs\": \"qədimi kilsa kirili\",
        \"Deva\": \"devanaqari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"misir demotik\",
        \"Egyh\": \"misir hiyeratik\",
        \"Egyp\": \"misir hiyeroqlif\",
        \"Ethi\": \"efiop\",
        \"Geok\": \"gürcü xutsuri\",
        \"Geor\": \"gürcü\",
        \"Glag\": \"qlaqolitik\",
        \"Goth\": \"qotik\",
        \"Grek\": \"yunan\",
        \"Gujr\": \"qucarat\",
        \"Guru\": \"qurmuxi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hanqıl\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunu\",
        \"Hans\": \"sadələşmiş\",
        \"Hant\": \"ənənəvi\",
        \"Hebr\": \"ibrani\",
        \"Hira\": \"iraqana\",
        \"Hmng\": \"pahav monq\",
        \"Hrkt\": \"hecalı yapon əlifbası\",
        \"Hung\": \"qədimi macar\",
        \"Inds\": \"hindistan\",
        \"Ital\": \"qədimi italyalı\",
        \"Jamo\": \"jamo\",
        \"Java\": \"cava\",
        \"Jpan\": \"yapon\",
        \"Kali\": \"kayax li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"xaroşti\",
        \"Khmr\": \"kxmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreya\",
        \"Kthi\": \"kti\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"fraktur latını\",
        \"Latg\": \"gael latını\",
        \"Latn\": \"latın\",
        \"Lepc\": \"lepçə\",
        \"Limb\": \"limbu\",
        \"Lyci\": \"lusian\",
        \"Lydi\": \"ludian\",
        \"Mand\": \"mandayen\",
        \"Mani\": \"maniçayen\",
        \"Maya\": \"maya hiyeroqlifi\",
        \"Mero\": \"meroytik\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"monqol\",
        \"Moon\": \"mun\",
        \"Mtei\": \"meytey mayek\",
        \"Mymr\": \"myanmar\",
        \"Nkoo\": \"nko\",
        \"Ogam\": \"oğam\",
        \"Olck\": \"ol çiki\",
        \"Orkh\": \"orxon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"qədimi permik\",
        \"Phag\": \"faqs-pa\",
        \"Phli\": \"fli\",
        \"Phlp\": \"flp\",
        \"Phlv\": \"kitab paxlavi\",
        \"Phnx\": \"foenik\",
        \"Plrd\": \"polard fonetik\",
        \"Prti\": \"prti\",
        \"Rjng\": \"recəng\",
        \"Roro\": \"ronqoronqo\",
        \"Runr\": \"runik\",
        \"Samr\": \"samaritan\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurastra\",
        \"Sgnw\": \"işarət yazısı\",
        \"Shaw\": \"şavyan\",
        \"Sinh\": \"sinhal\",
        \"Sund\": \"sundan\",
        \"Sylo\": \"siloti nəqri\",
        \"Syrc\": \"siryak\",
        \"Syre\": \"estrangela süryanice\",
        \"Tagb\": \"taqbanva\",
        \"Tale\": \"tay le\",
        \"Talu\": \"təzə tay lu\",
        \"Taml\": \"tamil\",
        \"Tavt\": \"tavt\",
        \"Telu\": \"teluqu\",
        \"Teng\": \"tengvar\",
        \"Tfng\": \"tifinaq\",
        \"Tglg\": \"taqaloq\",
        \"Thaa\": \"thana\",
        \"Thai\": \"tay\",
        \"Tibt\": \"tibet\",
        \"Ugar\": \"uqarit\",
        \"Vaii\": \"vay\",
        \"Visp\": \"danışma səsləri\",
        \"Xpeo\": \"qədimi fars\",
        \"Xsux\": \"sumer-akadyan kuneyform\",
        \"Yiii\": \"yi\",
        \"Zmth\": \"riyazi notasiya\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"simvollar\",
        \"Zxxx\": \"yazısız\",
        \"Zyyy\": \"ümumi yazı\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/az.json";
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
        \"Arab\": \"ərəb\",
        \"Armi\": \"armi\",
        \"Armn\": \"erməni\",
        \"Avst\": \"avestan\",
        \"Bali\": \"bali\",
        \"Batk\": \"batak\",
        \"Beng\": \"benqal\",
        \"Blis\": \"blissymbols\",
        \"Bopo\": \"bopomofo\",
        \"Brah\": \"brahmi\",
        \"Brai\": \"brayl\",
        \"Bugi\": \"buqin\",
        \"Buhd\": \"buhid\",
        \"Cakm\": \"kakm\",
        \"Cans\": \"birləşmiş kanada yerli yazısı\",
        \"Cari\": \"kariyan\",
        \"Cham\": \"çam\",
        \"Cher\": \"çiroki\",
        \"Cirt\": \"sirt\",
        \"Copt\": \"koptik\",
        \"Cprt\": \"kipr\",
        \"Cyrl\": \"kiril\",
        \"Cyrs\": \"qədimi kilsa kirili\",
        \"Deva\": \"devanaqari\",
        \"Dsrt\": \"deseret\",
        \"Egyd\": \"misir demotik\",
        \"Egyh\": \"misir hiyeratik\",
        \"Egyp\": \"misir hiyeroqlif\",
        \"Ethi\": \"efiop\",
        \"Geok\": \"gürcü xutsuri\",
        \"Geor\": \"gürcü\",
        \"Glag\": \"qlaqolitik\",
        \"Goth\": \"qotik\",
        \"Grek\": \"yunan\",
        \"Gujr\": \"qucarat\",
        \"Guru\": \"qurmuxi\",
        \"Hanb\": \"hanb\",
        \"Hang\": \"hanqıl\",
        \"Hani\": \"han\",
        \"Hano\": \"hanunu\",
        \"Hans\": \"sadələşmiş\",
        \"Hant\": \"ənənəvi\",
        \"Hebr\": \"ibrani\",
        \"Hira\": \"iraqana\",
        \"Hmng\": \"pahav monq\",
        \"Hrkt\": \"hecalı yapon əlifbası\",
        \"Hung\": \"qədimi macar\",
        \"Inds\": \"hindistan\",
        \"Ital\": \"qədimi italyalı\",
        \"Jamo\": \"jamo\",
        \"Java\": \"cava\",
        \"Jpan\": \"yapon\",
        \"Kali\": \"kayax li\",
        \"Kana\": \"katakana\",
        \"Khar\": \"xaroşti\",
        \"Khmr\": \"kxmer\",
        \"Knda\": \"kannada\",
        \"Kore\": \"koreya\",
        \"Kthi\": \"kti\",
        \"Lana\": \"lanna\",
        \"Laoo\": \"lao\",
        \"Latf\": \"fraktur latını\",
        \"Latg\": \"gael latını\",
        \"Latn\": \"latın\",
        \"Lepc\": \"lepçə\",
        \"Limb\": \"limbu\",
        \"Lyci\": \"lusian\",
        \"Lydi\": \"ludian\",
        \"Mand\": \"mandayen\",
        \"Mani\": \"maniçayen\",
        \"Maya\": \"maya hiyeroqlifi\",
        \"Mero\": \"meroytik\",
        \"Mlym\": \"malayalam\",
        \"Mong\": \"monqol\",
        \"Moon\": \"mun\",
        \"Mtei\": \"meytey mayek\",
        \"Mymr\": \"myanmar\",
        \"Nkoo\": \"nko\",
        \"Ogam\": \"oğam\",
        \"Olck\": \"ol çiki\",
        \"Orkh\": \"orxon\",
        \"Orya\": \"oriya\",
        \"Osma\": \"osmanya\",
        \"Perm\": \"qədimi permik\",
        \"Phag\": \"faqs-pa\",
        \"Phli\": \"fli\",
        \"Phlp\": \"flp\",
        \"Phlv\": \"kitab paxlavi\",
        \"Phnx\": \"foenik\",
        \"Plrd\": \"polard fonetik\",
        \"Prti\": \"prti\",
        \"Rjng\": \"recəng\",
        \"Roro\": \"ronqoronqo\",
        \"Runr\": \"runik\",
        \"Samr\": \"samaritan\",
        \"Sara\": \"sarati\",
        \"Saur\": \"saurastra\",
        \"Sgnw\": \"işarət yazısı\",
        \"Shaw\": \"şavyan\",
        \"Sinh\": \"sinhal\",
        \"Sund\": \"sundan\",
        \"Sylo\": \"siloti nəqri\",
        \"Syrc\": \"siryak\",
        \"Syre\": \"estrangela süryanice\",
        \"Tagb\": \"taqbanva\",
        \"Tale\": \"tay le\",
        \"Talu\": \"təzə tay lu\",
        \"Taml\": \"tamil\",
        \"Tavt\": \"tavt\",
        \"Telu\": \"teluqu\",
        \"Teng\": \"tengvar\",
        \"Tfng\": \"tifinaq\",
        \"Tglg\": \"taqaloq\",
        \"Thaa\": \"thana\",
        \"Thai\": \"tay\",
        \"Tibt\": \"tibet\",
        \"Ugar\": \"uqarit\",
        \"Vaii\": \"vay\",
        \"Visp\": \"danışma səsləri\",
        \"Xpeo\": \"qədimi fars\",
        \"Xsux\": \"sumer-akadyan kuneyform\",
        \"Yiii\": \"yi\",
        \"Zmth\": \"riyazi notasiya\",
        \"Zsye\": \"emoji\",
        \"Zsym\": \"simvollar\",
        \"Zxxx\": \"yazısız\",
        \"Zyyy\": \"ümumi yazı\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/az.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/az.json");
    }
}
