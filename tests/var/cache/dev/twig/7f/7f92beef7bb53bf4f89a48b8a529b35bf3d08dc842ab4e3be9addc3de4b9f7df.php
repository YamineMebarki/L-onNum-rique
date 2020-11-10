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

/* vendor/symfony/intl/Resources/data/scripts/mk.json */
class __TwigTemplate_537b47d2ce8d98ef4ff98b6890147e82f42b6859850b4e72651f4a25c7c5ffa6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"афака\",
        \"Aghb\": \"кавкаскоалбански\",
        \"Arab\": \"арапско писмо\",
        \"Armi\": \"царскоарамејски\",
        \"Armn\": \"ерменско писмо\",
        \"Avst\": \"авестанско\",
        \"Bali\": \"балиско\",
        \"Bamu\": \"бамумско\",
        \"Bass\": \"баса\",
        \"Batk\": \"батачко\",
        \"Beng\": \"бенгалско писмо\",
        \"Blis\": \"блиссимболи\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"брами\",
        \"Brai\": \"брајово писмо\",
        \"Bugi\": \"бугиско\",
        \"Buhd\": \"бухидско\",
        \"Cakm\": \"чакманско\",
        \"Cans\": \"канадско слоговно\",
        \"Cari\": \"кариско\",
        \"Cham\": \"чамско\",
        \"Cher\": \"черокиско\",
        \"Cirt\": \"кирт\",
        \"Copt\": \"коптско\",
        \"Cprt\": \"кипарско\",
        \"Cyrl\": \"кирилско писмо\",
        \"Cyrs\": \"старословенска кирилица\",
        \"Deva\": \"деванагари\",
        \"Dsrt\": \"дезеретско\",
        \"Dupl\": \"Диплојеево стенографско\",
        \"Egyd\": \"египетско демотско\",
        \"Egyh\": \"египетско хиератско\",
        \"Egyp\": \"египетски хиероглифи\",
        \"Elba\": \"елбасанско\",
        \"Ethi\": \"етиопско писмо\",
        \"Geok\": \"грузиски хуцури\",
        \"Geor\": \"грузиско писмо\",
        \"Glag\": \"глаголица\",
        \"Goth\": \"готско\",
        \"Gran\": \"гранта\",
        \"Grek\": \"грчко писмо\",
        \"Gujr\": \"гуџарати\",
        \"Guru\": \"гурмуки\",
        \"Hanb\": \"ханб\",
        \"Hang\": \"хангул\",
        \"Hani\": \"ханско писмо\",
        \"Hano\": \"хануноовско\",
        \"Hans\": \"поедноставено\",
        \"Hant\": \"традиционално\",
        \"Hebr\": \"хебрејско писмо\",
        \"Hira\": \"хирагана\",
        \"Hluw\": \"анадолски хиероглифи\",
        \"Hmng\": \"пахауанско хмоншко\",
        \"Hrkt\": \"јапонско слоговно\",
        \"Hung\": \"староунгарско\",
        \"Inds\": \"харапско\",
        \"Ital\": \"староиталско\",
        \"Jamo\": \"џамо\",
        \"Java\": \"јаванско\",
        \"Jpan\": \"јапонско писмо\",
        \"Jurc\": \"џурченско\",
        \"Kali\": \"каја ли\",
        \"Kana\": \"катакана\",
        \"Khar\": \"карошти\",
        \"Khmr\": \"кмерско писмо\",
        \"Khoj\": \"хоџки\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корејско писмо\",
        \"Kpel\": \"кпелско\",
        \"Kthi\": \"кајти\",
        \"Lana\": \"ланско\",
        \"Laoo\": \"лаошко писмо\",
        \"Latf\": \"фрактурна латиница\",
        \"Latg\": \"гелска латиница\",
        \"Latn\": \"латинично писмо\",
        \"Lepc\": \"лепчанско\",
        \"Limb\": \"лимбу\",
        \"Lina\": \"линеарно А\",
        \"Linb\": \"линеарно Б\",
        \"Lisu\": \"Фрејзерово\",
        \"Loma\": \"ломско\",
        \"Lyci\": \"ликиско\",
        \"Lydi\": \"лидиско\",
        \"Mahj\": \"махаџани\",
        \"Mand\": \"мандејско\",
        \"Mani\": \"манихејско\",
        \"Maya\": \"мајански хиероглифи\",
        \"Mend\": \"мендско\",
        \"Merc\": \"мероитско ракописно\",
        \"Mero\": \"мероитско\",
        \"Mlym\": \"малајаламско писмо\",
        \"Modi\": \"моди\",
        \"Mong\": \"монголско писмо\",
        \"Moon\": \"Муново\",
        \"Mroo\": \"мро\",
        \"Mtei\": \"мејтејско\",
        \"Mymr\": \"мјанмарско писмо\",
        \"Narb\": \"старосеверноарапско\",
        \"Nbat\": \"набатејско\",
        \"Nkgb\": \"насиска геба\",
        \"Nkoo\": \"нко\",
        \"Nshu\": \"нишу\",
        \"Ogam\": \"огам\",
        \"Olck\": \"ол чики\",
        \"Orkh\": \"старотурско\",
        \"Orya\": \"оријанско писмо\",
        \"Osma\": \"сомалиско\",
        \"Palm\": \"палмирско\",
        \"Pauc\": \"Паучинхауово\",
        \"Perm\": \"старопермско\",
        \"Phag\": \"пагспа\",
        \"Phli\": \"натписно средноперсиско\",
        \"Phlp\": \"псалтирско средноперсиско\",
        \"Phlv\": \"книжевно староперсиско\",
        \"Phnx\": \"феникиско\",
        \"Plrd\": \"Полардово\",
        \"Prti\": \"натписно партиско\",
        \"Rjng\": \"реџаншко\",
        \"Roro\": \"ронгоронго\",
        \"Runr\": \"рунско\",
        \"Samr\": \"самарјанско\",
        \"Sara\": \"сарати\",
        \"Sarb\": \"старојужноарапско\",
        \"Saur\": \"саураштранско\",
        \"Sgnw\": \"знаковно пишување\",
        \"Shaw\": \"Шоово\",
        \"Shrd\": \"шарада\",
        \"Sidd\": \"сидам\",
        \"Sind\": \"кудабади\",
        \"Sinh\": \"синхалско писмо\",
        \"Sora\": \"соранг сомпенг\",
        \"Sund\": \"сунданско\",
        \"Sylo\": \"силхетско нагари\",
        \"Syrc\": \"сириско\",
        \"Syre\": \"естрангелско сириско\",
        \"Syrj\": \"западносириско\",
        \"Syrn\": \"источносириско\",
        \"Tagb\": \"тагбанванско\",
        \"Takr\": \"такри\",
        \"Tale\": \"тај ле\",
        \"Talu\": \"ново тај луе\",
        \"Taml\": \"тамилско писмо\",
        \"Tang\": \"тангутско\",
        \"Tavt\": \"тај вјет\",
        \"Telu\": \"телугу\",
        \"Teng\": \"тенгвар\",
        \"Tfng\": \"тифинаг\",
        \"Tglg\": \"тагалошко\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тајландско писмо\",
        \"Tibt\": \"тибетско писмо\",
        \"Tirh\": \"тирхута\",
        \"Ugar\": \"угаритско\",
        \"Vaii\": \"вај\",
        \"Visp\": \"видлив говор\",
        \"Wara\": \"варанг кшити\",
        \"Wole\": \"волеајско\",
        \"Xpeo\": \"староперсиско\",
        \"Xsux\": \"сумероакадско клинесто\",
        \"Yiii\": \"ји\",
        \"Zinh\": \"наследено\",
        \"Zmth\": \"математичка нотација\",
        \"Zsye\": \"емоџи\",
        \"Zsym\": \"симболи\",
        \"Zxxx\": \"без писмо\",
        \"Zyyy\": \"општо\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/mk.json";
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
        \"Afak\": \"афака\",
        \"Aghb\": \"кавкаскоалбански\",
        \"Arab\": \"арапско писмо\",
        \"Armi\": \"царскоарамејски\",
        \"Armn\": \"ерменско писмо\",
        \"Avst\": \"авестанско\",
        \"Bali\": \"балиско\",
        \"Bamu\": \"бамумско\",
        \"Bass\": \"баса\",
        \"Batk\": \"батачко\",
        \"Beng\": \"бенгалско писмо\",
        \"Blis\": \"блиссимболи\",
        \"Bopo\": \"бопомофо\",
        \"Brah\": \"брами\",
        \"Brai\": \"брајово писмо\",
        \"Bugi\": \"бугиско\",
        \"Buhd\": \"бухидско\",
        \"Cakm\": \"чакманско\",
        \"Cans\": \"канадско слоговно\",
        \"Cari\": \"кариско\",
        \"Cham\": \"чамско\",
        \"Cher\": \"черокиско\",
        \"Cirt\": \"кирт\",
        \"Copt\": \"коптско\",
        \"Cprt\": \"кипарско\",
        \"Cyrl\": \"кирилско писмо\",
        \"Cyrs\": \"старословенска кирилица\",
        \"Deva\": \"деванагари\",
        \"Dsrt\": \"дезеретско\",
        \"Dupl\": \"Диплојеево стенографско\",
        \"Egyd\": \"египетско демотско\",
        \"Egyh\": \"египетско хиератско\",
        \"Egyp\": \"египетски хиероглифи\",
        \"Elba\": \"елбасанско\",
        \"Ethi\": \"етиопско писмо\",
        \"Geok\": \"грузиски хуцури\",
        \"Geor\": \"грузиско писмо\",
        \"Glag\": \"глаголица\",
        \"Goth\": \"готско\",
        \"Gran\": \"гранта\",
        \"Grek\": \"грчко писмо\",
        \"Gujr\": \"гуџарати\",
        \"Guru\": \"гурмуки\",
        \"Hanb\": \"ханб\",
        \"Hang\": \"хангул\",
        \"Hani\": \"ханско писмо\",
        \"Hano\": \"хануноовско\",
        \"Hans\": \"поедноставено\",
        \"Hant\": \"традиционално\",
        \"Hebr\": \"хебрејско писмо\",
        \"Hira\": \"хирагана\",
        \"Hluw\": \"анадолски хиероглифи\",
        \"Hmng\": \"пахауанско хмоншко\",
        \"Hrkt\": \"јапонско слоговно\",
        \"Hung\": \"староунгарско\",
        \"Inds\": \"харапско\",
        \"Ital\": \"староиталско\",
        \"Jamo\": \"џамо\",
        \"Java\": \"јаванско\",
        \"Jpan\": \"јапонско писмо\",
        \"Jurc\": \"џурченско\",
        \"Kali\": \"каја ли\",
        \"Kana\": \"катакана\",
        \"Khar\": \"карошти\",
        \"Khmr\": \"кмерско писмо\",
        \"Khoj\": \"хоџки\",
        \"Knda\": \"каннада\",
        \"Kore\": \"корејско писмо\",
        \"Kpel\": \"кпелско\",
        \"Kthi\": \"кајти\",
        \"Lana\": \"ланско\",
        \"Laoo\": \"лаошко писмо\",
        \"Latf\": \"фрактурна латиница\",
        \"Latg\": \"гелска латиница\",
        \"Latn\": \"латинично писмо\",
        \"Lepc\": \"лепчанско\",
        \"Limb\": \"лимбу\",
        \"Lina\": \"линеарно А\",
        \"Linb\": \"линеарно Б\",
        \"Lisu\": \"Фрејзерово\",
        \"Loma\": \"ломско\",
        \"Lyci\": \"ликиско\",
        \"Lydi\": \"лидиско\",
        \"Mahj\": \"махаџани\",
        \"Mand\": \"мандејско\",
        \"Mani\": \"манихејско\",
        \"Maya\": \"мајански хиероглифи\",
        \"Mend\": \"мендско\",
        \"Merc\": \"мероитско ракописно\",
        \"Mero\": \"мероитско\",
        \"Mlym\": \"малајаламско писмо\",
        \"Modi\": \"моди\",
        \"Mong\": \"монголско писмо\",
        \"Moon\": \"Муново\",
        \"Mroo\": \"мро\",
        \"Mtei\": \"мејтејско\",
        \"Mymr\": \"мјанмарско писмо\",
        \"Narb\": \"старосеверноарапско\",
        \"Nbat\": \"набатејско\",
        \"Nkgb\": \"насиска геба\",
        \"Nkoo\": \"нко\",
        \"Nshu\": \"нишу\",
        \"Ogam\": \"огам\",
        \"Olck\": \"ол чики\",
        \"Orkh\": \"старотурско\",
        \"Orya\": \"оријанско писмо\",
        \"Osma\": \"сомалиско\",
        \"Palm\": \"палмирско\",
        \"Pauc\": \"Паучинхауово\",
        \"Perm\": \"старопермско\",
        \"Phag\": \"пагспа\",
        \"Phli\": \"натписно средноперсиско\",
        \"Phlp\": \"псалтирско средноперсиско\",
        \"Phlv\": \"книжевно староперсиско\",
        \"Phnx\": \"феникиско\",
        \"Plrd\": \"Полардово\",
        \"Prti\": \"натписно партиско\",
        \"Rjng\": \"реџаншко\",
        \"Roro\": \"ронгоронго\",
        \"Runr\": \"рунско\",
        \"Samr\": \"самарјанско\",
        \"Sara\": \"сарати\",
        \"Sarb\": \"старојужноарапско\",
        \"Saur\": \"саураштранско\",
        \"Sgnw\": \"знаковно пишување\",
        \"Shaw\": \"Шоово\",
        \"Shrd\": \"шарада\",
        \"Sidd\": \"сидам\",
        \"Sind\": \"кудабади\",
        \"Sinh\": \"синхалско писмо\",
        \"Sora\": \"соранг сомпенг\",
        \"Sund\": \"сунданско\",
        \"Sylo\": \"силхетско нагари\",
        \"Syrc\": \"сириско\",
        \"Syre\": \"естрангелско сириско\",
        \"Syrj\": \"западносириско\",
        \"Syrn\": \"источносириско\",
        \"Tagb\": \"тагбанванско\",
        \"Takr\": \"такри\",
        \"Tale\": \"тај ле\",
        \"Talu\": \"ново тај луе\",
        \"Taml\": \"тамилско писмо\",
        \"Tang\": \"тангутско\",
        \"Tavt\": \"тај вјет\",
        \"Telu\": \"телугу\",
        \"Teng\": \"тенгвар\",
        \"Tfng\": \"тифинаг\",
        \"Tglg\": \"тагалошко\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тајландско писмо\",
        \"Tibt\": \"тибетско писмо\",
        \"Tirh\": \"тирхута\",
        \"Ugar\": \"угаритско\",
        \"Vaii\": \"вај\",
        \"Visp\": \"видлив говор\",
        \"Wara\": \"варанг кшити\",
        \"Wole\": \"волеајско\",
        \"Xpeo\": \"староперсиско\",
        \"Xsux\": \"сумероакадско клинесто\",
        \"Yiii\": \"ји\",
        \"Zinh\": \"наследено\",
        \"Zmth\": \"математичка нотација\",
        \"Zsye\": \"емоџи\",
        \"Zsym\": \"симболи\",
        \"Zxxx\": \"без писмо\",
        \"Zyyy\": \"општо\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/mk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/mk.json");
    }
}
