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

/* vendor/symfony/intl/Resources/data/scripts/te.json */
class __TwigTemplate_1d2d85efd6940fa989e5e871a14cf5914de9aa2a80404c4ed41be914892f23a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/te.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/te.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"అరబిక్\",
        \"Armi\": \"ఇంపీరియల్ అరామాక్\",
        \"Armn\": \"అర్మేనియన్\",
        \"Avst\": \"అవేస్టాన్\",
        \"Bali\": \"బాలినీస్\",
        \"Batk\": \"బాటక్\",
        \"Beng\": \"బాంగ్లా\",
        \"Blis\": \"బ్లిస్సింబల్స్\",
        \"Bopo\": \"బోపోమోఫో\",
        \"Brah\": \"బ్రాహ్మి\",
        \"Brai\": \"బ్రెయిల్\",
        \"Bugi\": \"బ్యుగినీస్\",
        \"Buhd\": \"బుహిడ్\",
        \"Cakm\": \"చక్మా\",
        \"Cans\": \"యునిఫైడ్ కెనెడియన్ అబొరిజినల్ సిలబిక్స్\",
        \"Cari\": \"కారియన్\",
        \"Cham\": \"చామ్\",
        \"Cher\": \"చిరోకి\",
        \"Cirt\": \"సిర్థ్\",
        \"Copt\": \"కోప్టిక్\",
        \"Cprt\": \"సైప్రోట్\",
        \"Cyrl\": \"సిరిలిక్\",
        \"Cyrs\": \"ప్రాచీన చర్చ స్లావోనిక్ సిరిలిక్\",
        \"Deva\": \"దేవనాగరి\",
        \"Dsrt\": \"డేసెరెట్\",
        \"Egyd\": \"ఇజిప్షియన్ డెమోటిక్\",
        \"Egyh\": \"ఇజిప్షియన్ హైరాటిక్\",
        \"Egyp\": \"ఇజిప్షియన్ హైరోగ్లైఫ్స్\",
        \"Ethi\": \"ఇథియోపిక్\",
        \"Geok\": \"జార్జియన్ ఖట్సూరి\",
        \"Geor\": \"జార్జియన్\",
        \"Glag\": \"గ్లాగో లిటిక్\",
        \"Goth\": \"గోతిక్\",
        \"Grek\": \"గ్రీక్\",
        \"Gujr\": \"గుజరాతీ\",
        \"Guru\": \"గుర్ముఖి\",
        \"Hanb\": \"హాన్బ్\",
        \"Hang\": \"హంగుల్\",
        \"Hani\": \"హాన్\",
        \"Hano\": \"హనునూ\",
        \"Hans\": \"సరళీకృతం\",
        \"Hant\": \"సాంప్రదాయక\",
        \"Hebr\": \"హీబ్రు\",
        \"Hira\": \"హిరాగాన\",
        \"Hmng\": \"పాహవా హ్మోంగ్\",
        \"Hrkt\": \"జపనీస్ సిలబెరీస్\",
        \"Hung\": \"ప్రాచీన హంగేరియన్\",
        \"Inds\": \"సింధు\",
        \"Ital\": \"ప్రాచిన ఐటాలిక్\",
        \"Jamo\": \"జమో\",
        \"Java\": \"జావనీస్\",
        \"Jpan\": \"జాపనీస్\",
        \"Kali\": \"కాయాహ్ లి\",
        \"Kana\": \"కాటాకాన\",
        \"Khar\": \"ఖరోషథి\",
        \"Khmr\": \"ఖ్మేర్\",
        \"Knda\": \"కన్నడ\",
        \"Kore\": \"కొరియన్\",
        \"Kthi\": \"కైథి\",
        \"Lana\": \"లన్నా\",
        \"Laoo\": \"లావో\",
        \"Latf\": \"ఫ్రాక్టూర్ లాటిన్\",
        \"Latg\": \"గేలిక్ లాటిన్\",
        \"Latn\": \"లాటిన్\",
        \"Lepc\": \"లేప్చా\",
        \"Limb\": \"లింబు\",
        \"Lina\": \"లినియర్ ఎ\",
        \"Linb\": \"లినియర్ బి\",
        \"Lyci\": \"లిసియన్\",
        \"Lydi\": \"లిడియన్\",
        \"Mand\": \"మాన్డియన్\",
        \"Mani\": \"మానిచేన్\",
        \"Maya\": \"మాయన్ హైరోగ్లైఫ్స్\",
        \"Mero\": \"మెరోఇటిక్\",
        \"Mlym\": \"మలయాళం\",
        \"Mong\": \"మంగోలియన్\",
        \"Moon\": \"మూన్\",
        \"Mtei\": \"మీటి మయెక్\",
        \"Mymr\": \"మయాన్మార్\",
        \"Nkoo\": \"న్కో\",
        \"Ogam\": \"ఒఘమ్\",
        \"Olck\": \"ఓల్ చికి\",
        \"Orkh\": \"ఓర్ఖోన్\",
        \"Orya\": \"ఒడియా\",
        \"Osma\": \"ఓసమాన్య\",
        \"Perm\": \"ప్రాచీన పెర్మిక్\",
        \"Phag\": \"ఫాగ్స్-పా\",
        \"Phli\": \"ఇంస్క్రిప్షనాల్ పహ్లావి\",
        \"Phlp\": \"సల్టార్ పహ్లావి\",
        \"Phlv\": \"పుస్తక పహ్లావి\",
        \"Phnx\": \"ఫోనిశియన్\",
        \"Plrd\": \"పోల్లర్డ్ ఫోనెటిక్\",
        \"Prti\": \"ఇంస్క్రిప్షనాల్ పార్థియన్\",
        \"Rjng\": \"రేజాంగ్\",
        \"Roro\": \"రోంగో రోంగో\",
        \"Runr\": \"రూనిక్\",
        \"Samr\": \"సమారిటన్\",
        \"Sara\": \"సరాటి\",
        \"Saur\": \"సౌరాష్ట్ర\",
        \"Sgnw\": \"సంజ్ఞ లిపి\",
        \"Shaw\": \"షవియాన్\",
        \"Sinh\": \"సింహళం\",
        \"Sund\": \"సుడానీస్\",
        \"Sylo\": \"స్లోటి నాగ్రి\",
        \"Syrc\": \"సిరియాక్\",
        \"Syre\": \"ఎస్ట్రానజీలో సిరియాక్\",
        \"Syrj\": \"పశ్చిమ సిరియాక్\",
        \"Syrn\": \"తూర్పు సిరియాక్\",
        \"Tagb\": \"టాగ్బానవా\",
        \"Tale\": \"తై లీ\",
        \"Talu\": \"క్రొత్త టై లుఇ\",
        \"Taml\": \"తమిళము\",
        \"Tavt\": \"టై వియట్\",
        \"Telu\": \"తెలుగు\",
        \"Teng\": \"టేంగ్వార్\",
        \"Tfng\": \"టిఫీనాఘ్\",
        \"Tglg\": \"టగలాగ్\",
        \"Thaa\": \"థానా\",
        \"Thai\": \"థాయ్\",
        \"Tibt\": \"టిబెటన్\",
        \"Ugar\": \"యుగారిటిక్\",
        \"Vaii\": \"వాయి\",
        \"Visp\": \"కనిపించే భాష\",
        \"Xpeo\": \"ప్రాచీన పర్షియన్\",
        \"Xsux\": \"సుమేరో- అక్కడియన్ క్యునిఫార్మ్\",
        \"Yiii\": \"యి\",
        \"Zinh\": \"వారసత్వం\",
        \"Zmth\": \"గణిత సంకేతలిపి\",
        \"Zsye\": \"ఎమోజి\",
        \"Zsym\": \"చిహ్నాలు\",
        \"Zxxx\": \"లిపి లేని\",
        \"Zyyy\": \"సామాన్య\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/te.json";
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
        \"Arab\": \"అరబిక్\",
        \"Armi\": \"ఇంపీరియల్ అరామాక్\",
        \"Armn\": \"అర్మేనియన్\",
        \"Avst\": \"అవేస్టాన్\",
        \"Bali\": \"బాలినీస్\",
        \"Batk\": \"బాటక్\",
        \"Beng\": \"బాంగ్లా\",
        \"Blis\": \"బ్లిస్సింబల్స్\",
        \"Bopo\": \"బోపోమోఫో\",
        \"Brah\": \"బ్రాహ్మి\",
        \"Brai\": \"బ్రెయిల్\",
        \"Bugi\": \"బ్యుగినీస్\",
        \"Buhd\": \"బుహిడ్\",
        \"Cakm\": \"చక్మా\",
        \"Cans\": \"యునిఫైడ్ కెనెడియన్ అబొరిజినల్ సిలబిక్స్\",
        \"Cari\": \"కారియన్\",
        \"Cham\": \"చామ్\",
        \"Cher\": \"చిరోకి\",
        \"Cirt\": \"సిర్థ్\",
        \"Copt\": \"కోప్టిక్\",
        \"Cprt\": \"సైప్రోట్\",
        \"Cyrl\": \"సిరిలిక్\",
        \"Cyrs\": \"ప్రాచీన చర్చ స్లావోనిక్ సిరిలిక్\",
        \"Deva\": \"దేవనాగరి\",
        \"Dsrt\": \"డేసెరెట్\",
        \"Egyd\": \"ఇజిప్షియన్ డెమోటిక్\",
        \"Egyh\": \"ఇజిప్షియన్ హైరాటిక్\",
        \"Egyp\": \"ఇజిప్షియన్ హైరోగ్లైఫ్స్\",
        \"Ethi\": \"ఇథియోపిక్\",
        \"Geok\": \"జార్జియన్ ఖట్సూరి\",
        \"Geor\": \"జార్జియన్\",
        \"Glag\": \"గ్లాగో లిటిక్\",
        \"Goth\": \"గోతిక్\",
        \"Grek\": \"గ్రీక్\",
        \"Gujr\": \"గుజరాతీ\",
        \"Guru\": \"గుర్ముఖి\",
        \"Hanb\": \"హాన్బ్\",
        \"Hang\": \"హంగుల్\",
        \"Hani\": \"హాన్\",
        \"Hano\": \"హనునూ\",
        \"Hans\": \"సరళీకృతం\",
        \"Hant\": \"సాంప్రదాయక\",
        \"Hebr\": \"హీబ్రు\",
        \"Hira\": \"హిరాగాన\",
        \"Hmng\": \"పాహవా హ్మోంగ్\",
        \"Hrkt\": \"జపనీస్ సిలబెరీస్\",
        \"Hung\": \"ప్రాచీన హంగేరియన్\",
        \"Inds\": \"సింధు\",
        \"Ital\": \"ప్రాచిన ఐటాలిక్\",
        \"Jamo\": \"జమో\",
        \"Java\": \"జావనీస్\",
        \"Jpan\": \"జాపనీస్\",
        \"Kali\": \"కాయాహ్ లి\",
        \"Kana\": \"కాటాకాన\",
        \"Khar\": \"ఖరోషథి\",
        \"Khmr\": \"ఖ్మేర్\",
        \"Knda\": \"కన్నడ\",
        \"Kore\": \"కొరియన్\",
        \"Kthi\": \"కైథి\",
        \"Lana\": \"లన్నా\",
        \"Laoo\": \"లావో\",
        \"Latf\": \"ఫ్రాక్టూర్ లాటిన్\",
        \"Latg\": \"గేలిక్ లాటిన్\",
        \"Latn\": \"లాటిన్\",
        \"Lepc\": \"లేప్చా\",
        \"Limb\": \"లింబు\",
        \"Lina\": \"లినియర్ ఎ\",
        \"Linb\": \"లినియర్ బి\",
        \"Lyci\": \"లిసియన్\",
        \"Lydi\": \"లిడియన్\",
        \"Mand\": \"మాన్డియన్\",
        \"Mani\": \"మానిచేన్\",
        \"Maya\": \"మాయన్ హైరోగ్లైఫ్స్\",
        \"Mero\": \"మెరోఇటిక్\",
        \"Mlym\": \"మలయాళం\",
        \"Mong\": \"మంగోలియన్\",
        \"Moon\": \"మూన్\",
        \"Mtei\": \"మీటి మయెక్\",
        \"Mymr\": \"మయాన్మార్\",
        \"Nkoo\": \"న్కో\",
        \"Ogam\": \"ఒఘమ్\",
        \"Olck\": \"ఓల్ చికి\",
        \"Orkh\": \"ఓర్ఖోన్\",
        \"Orya\": \"ఒడియా\",
        \"Osma\": \"ఓసమాన్య\",
        \"Perm\": \"ప్రాచీన పెర్మిక్\",
        \"Phag\": \"ఫాగ్స్-పా\",
        \"Phli\": \"ఇంస్క్రిప్షనాల్ పహ్లావి\",
        \"Phlp\": \"సల్టార్ పహ్లావి\",
        \"Phlv\": \"పుస్తక పహ్లావి\",
        \"Phnx\": \"ఫోనిశియన్\",
        \"Plrd\": \"పోల్లర్డ్ ఫోనెటిక్\",
        \"Prti\": \"ఇంస్క్రిప్షనాల్ పార్థియన్\",
        \"Rjng\": \"రేజాంగ్\",
        \"Roro\": \"రోంగో రోంగో\",
        \"Runr\": \"రూనిక్\",
        \"Samr\": \"సమారిటన్\",
        \"Sara\": \"సరాటి\",
        \"Saur\": \"సౌరాష్ట్ర\",
        \"Sgnw\": \"సంజ్ఞ లిపి\",
        \"Shaw\": \"షవియాన్\",
        \"Sinh\": \"సింహళం\",
        \"Sund\": \"సుడానీస్\",
        \"Sylo\": \"స్లోటి నాగ్రి\",
        \"Syrc\": \"సిరియాక్\",
        \"Syre\": \"ఎస్ట్రానజీలో సిరియాక్\",
        \"Syrj\": \"పశ్చిమ సిరియాక్\",
        \"Syrn\": \"తూర్పు సిరియాక్\",
        \"Tagb\": \"టాగ్బానవా\",
        \"Tale\": \"తై లీ\",
        \"Talu\": \"క్రొత్త టై లుఇ\",
        \"Taml\": \"తమిళము\",
        \"Tavt\": \"టై వియట్\",
        \"Telu\": \"తెలుగు\",
        \"Teng\": \"టేంగ్వార్\",
        \"Tfng\": \"టిఫీనాఘ్\",
        \"Tglg\": \"టగలాగ్\",
        \"Thaa\": \"థానా\",
        \"Thai\": \"థాయ్\",
        \"Tibt\": \"టిబెటన్\",
        \"Ugar\": \"యుగారిటిక్\",
        \"Vaii\": \"వాయి\",
        \"Visp\": \"కనిపించే భాష\",
        \"Xpeo\": \"ప్రాచీన పర్షియన్\",
        \"Xsux\": \"సుమేరో- అక్కడియన్ క్యునిఫార్మ్\",
        \"Yiii\": \"యి\",
        \"Zinh\": \"వారసత్వం\",
        \"Zmth\": \"గణిత సంకేతలిపి\",
        \"Zsye\": \"ఎమోజి\",
        \"Zsym\": \"చిహ్నాలు\",
        \"Zxxx\": \"లిపి లేని\",
        \"Zyyy\": \"సామాన్య\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/te.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/te.json");
    }
}
