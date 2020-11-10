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

/* vendor/symfony/intl/Resources/data/scripts/ks.json */
class __TwigTemplate_fc536ab4c450861c08bc9716076363aed3abbd8ecc90367aa9e3e6ed7dc179b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ks.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ks.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"اَربی\",
        \"Armn\": \"اَرمانیَن\",
        \"Avst\": \"اَویستَن\",
        \"Bali\": \"بالَنیٖز\",
        \"Batk\": \"باتَک\",
        \"Beng\": \"بینگٲلۍ\",
        \"Blis\": \"بِلِس سِمبلز\",
        \"Bopo\": \"بوپوموفو\",
        \"Brah\": \"براہمی\",
        \"Brai\": \"بریل\",
        \"Bugi\": \"بُگِنیٖز\",
        \"Buhd\": \"بُہِد\",
        \"Cans\": \"یُنِفایِڑ کنیڑِیَن ایب آرجِنَل سِلیبِک\",
        \"Cari\": \"کاریَن\",
        \"Cham\": \"چَم\",
        \"Cher\": \"چیروکی\",
        \"Cirt\": \"کِرتھ\",
        \"Copt\": \"کاپٹِک\",
        \"Cprt\": \"کِپرایِٹ\",
        \"Cyrl\": \"سَیرِلِک\",
        \"Cyrs\": \"پرون چٔرچسلیوونِک سَیرِلِک\",
        \"Deva\": \"دیوناگری\",
        \"Dsrt\": \"ڈیسٔریٹ\",
        \"Egyd\": \"اِجپشِیَن ڈِماٹِک\",
        \"Egyh\": \"اِجِپشَن ہَیریٹِک\",
        \"Egyp\": \"اِجِپشَن ہَیروگلِپھس\",
        \"Ethi\": \"اِتھیوپِک\",
        \"Geok\": \"جارجِیَن کھتسوری\",
        \"Geor\": \"جارجِیَن\",
        \"Glag\": \"گلیگولِٹِک\",
        \"Goth\": \"گوتھِک\",
        \"Grek\": \"گرَنتھا\",
        \"Gujr\": \"گریٖک\",
        \"Guru\": \"گُجرٲتۍ\",
        \"Hang\": \"ہانگُل\",
        \"Hani\": \"ہان\",
        \"Hano\": \"ہانُنوٗ\",
        \"Hans\": \"سِمپلِفایِڑ ہان\",
        \"Hant\": \"ٹریڑِشَنَل\",
        \"Hebr\": \"ہِبرِو\",
        \"Hira\": \"ہیٖراگانا\",
        \"Hmng\": \"پَہاو مانگ\",
        \"Hrkt\": \"کَٹاکانا یا ہِراگانا\",
        \"Hung\": \"پرون ہَنگیریَن\",
        \"Inds\": \"اِنڈَس\",
        \"Ital\": \"اولڈ اِٹیلِک\",
        \"Java\": \"جاوَنیٖز\",
        \"Jpan\": \"جیپَنیٖز\",
        \"Kali\": \"کایا لی\",
        \"Kana\": \"کَتاکانا\",
        \"Khar\": \"خَروشتھی\",
        \"Khmr\": \"کھٕمیر\",
        \"Knda\": \"کَنَڑا\",
        \"Kore\": \"کوریَن\",
        \"Lana\": \"لانا\",
        \"Laoo\": \"لاو\",
        \"Latf\": \"فرکتُر لیٹِن\",
        \"Latg\": \"گیلِک لیٹَن\",
        \"Latn\": \"لیٹِن\",
        \"Lepc\": \"لیپکا\",
        \"Limb\": \"لِمبوٗ\",
        \"Lina\": \"لیٖنیَر اے\",
        \"Linb\": \"لیٖنیَر بی\",
        \"Lyci\": \"لیسِیَن\",
        \"Lydi\": \"لیدِیَن\",
        \"Mand\": \"مَندییَن\",
        \"Mani\": \"مانیشییَن\",
        \"Maya\": \"مایَن ہیٖروگلِپھ\",
        \"Mero\": \"مِرایٹِک\",
        \"Mlym\": \"مَلیالَم\",
        \"Mong\": \"مَنگولیَن\",
        \"Moon\": \"موٗن\",
        \"Mtei\": \"میتی مایَک\",
        \"Mymr\": \"مَیَنمار\",
        \"Nkoo\": \"این کو\",
        \"Ogam\": \"اوگہام\",
        \"Olck\": \"اول چِکی\",
        \"Orkh\": \"اورکھون\",
        \"Orya\": \"اورِیا\",
        \"Osma\": \"اوسمانیا\",
        \"Perm\": \"اولڈ پٔرمِک\",
        \"Phag\": \"پھاگس پا\",
        \"Phlv\": \"بوٗک پَہَلوی\",
        \"Phnx\": \"پھونِشِیَن\",
        \"Plrd\": \"پولاڑ پھونِٹِک\",
        \"Rjng\": \"ریجَنگ\",
        \"Roro\": \"رونگو رونگو\",
        \"Runr\": \"رَنِک\",
        \"Samr\": \"سَمارِٹَن\",
        \"Sara\": \"سَراتی\",
        \"Saur\": \"سوراشٹرا\",
        \"Sgnw\": \"اِشارٲتی لِکھٲے\",
        \"Shaw\": \"شاویَن\",
        \"Sinh\": \"سِنہالا\",
        \"Sund\": \"سَنڈَنیٖز\",
        \"Sylo\": \"سیلوتی ناگری\",
        \"Syrc\": \"سیٖرِیَک\",
        \"Syre\": \"ایسٹرینجِلو سیٖرِیَک\",
        \"Syrj\": \"مغرِبی سیٖریَک\",
        \"Syrn\": \"مشرَقی سیٖریَک\",
        \"Tagb\": \"تَگبَنوا\",
        \"Tale\": \"تَیلیے\",
        \"Talu\": \"نۆو تیلو\",
        \"Taml\": \"تَمِل\",
        \"Telu\": \"تیلگوٗ\",
        \"Teng\": \"تینگوار\",
        \"Tfng\": \"تِفِناگ\",
        \"Tglg\": \"تَگَلوگ\",
        \"Thaa\": \"تھانا\",
        \"Thai\": \"تھاے\",
        \"Tibt\": \"تِبتی\",
        \"Ugar\": \"اُگارِٹِک\",
        \"Vaii\": \"واے\",
        \"Visp\": \"وِزِبٕل سپیٖچ\",
        \"Xpeo\": \"پرون فارسی\",
        \"Xsux\": \"سُمیرو اکادیَن کوٗنِفام\",
        \"Yiii\": \"یٖی\",
        \"Zxxx\": \"لیکھنَے\",
        \"Zyyy\": \"عام\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ks.json";
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
        \"Arab\": \"اَربی\",
        \"Armn\": \"اَرمانیَن\",
        \"Avst\": \"اَویستَن\",
        \"Bali\": \"بالَنیٖز\",
        \"Batk\": \"باتَک\",
        \"Beng\": \"بینگٲلۍ\",
        \"Blis\": \"بِلِس سِمبلز\",
        \"Bopo\": \"بوپوموفو\",
        \"Brah\": \"براہمی\",
        \"Brai\": \"بریل\",
        \"Bugi\": \"بُگِنیٖز\",
        \"Buhd\": \"بُہِد\",
        \"Cans\": \"یُنِفایِڑ کنیڑِیَن ایب آرجِنَل سِلیبِک\",
        \"Cari\": \"کاریَن\",
        \"Cham\": \"چَم\",
        \"Cher\": \"چیروکی\",
        \"Cirt\": \"کِرتھ\",
        \"Copt\": \"کاپٹِک\",
        \"Cprt\": \"کِپرایِٹ\",
        \"Cyrl\": \"سَیرِلِک\",
        \"Cyrs\": \"پرون چٔرچسلیوونِک سَیرِلِک\",
        \"Deva\": \"دیوناگری\",
        \"Dsrt\": \"ڈیسٔریٹ\",
        \"Egyd\": \"اِجپشِیَن ڈِماٹِک\",
        \"Egyh\": \"اِجِپشَن ہَیریٹِک\",
        \"Egyp\": \"اِجِپشَن ہَیروگلِپھس\",
        \"Ethi\": \"اِتھیوپِک\",
        \"Geok\": \"جارجِیَن کھتسوری\",
        \"Geor\": \"جارجِیَن\",
        \"Glag\": \"گلیگولِٹِک\",
        \"Goth\": \"گوتھِک\",
        \"Grek\": \"گرَنتھا\",
        \"Gujr\": \"گریٖک\",
        \"Guru\": \"گُجرٲتۍ\",
        \"Hang\": \"ہانگُل\",
        \"Hani\": \"ہان\",
        \"Hano\": \"ہانُنوٗ\",
        \"Hans\": \"سِمپلِفایِڑ ہان\",
        \"Hant\": \"ٹریڑِشَنَل\",
        \"Hebr\": \"ہِبرِو\",
        \"Hira\": \"ہیٖراگانا\",
        \"Hmng\": \"پَہاو مانگ\",
        \"Hrkt\": \"کَٹاکانا یا ہِراگانا\",
        \"Hung\": \"پرون ہَنگیریَن\",
        \"Inds\": \"اِنڈَس\",
        \"Ital\": \"اولڈ اِٹیلِک\",
        \"Java\": \"جاوَنیٖز\",
        \"Jpan\": \"جیپَنیٖز\",
        \"Kali\": \"کایا لی\",
        \"Kana\": \"کَتاکانا\",
        \"Khar\": \"خَروشتھی\",
        \"Khmr\": \"کھٕمیر\",
        \"Knda\": \"کَنَڑا\",
        \"Kore\": \"کوریَن\",
        \"Lana\": \"لانا\",
        \"Laoo\": \"لاو\",
        \"Latf\": \"فرکتُر لیٹِن\",
        \"Latg\": \"گیلِک لیٹَن\",
        \"Latn\": \"لیٹِن\",
        \"Lepc\": \"لیپکا\",
        \"Limb\": \"لِمبوٗ\",
        \"Lina\": \"لیٖنیَر اے\",
        \"Linb\": \"لیٖنیَر بی\",
        \"Lyci\": \"لیسِیَن\",
        \"Lydi\": \"لیدِیَن\",
        \"Mand\": \"مَندییَن\",
        \"Mani\": \"مانیشییَن\",
        \"Maya\": \"مایَن ہیٖروگلِپھ\",
        \"Mero\": \"مِرایٹِک\",
        \"Mlym\": \"مَلیالَم\",
        \"Mong\": \"مَنگولیَن\",
        \"Moon\": \"موٗن\",
        \"Mtei\": \"میتی مایَک\",
        \"Mymr\": \"مَیَنمار\",
        \"Nkoo\": \"این کو\",
        \"Ogam\": \"اوگہام\",
        \"Olck\": \"اول چِکی\",
        \"Orkh\": \"اورکھون\",
        \"Orya\": \"اورِیا\",
        \"Osma\": \"اوسمانیا\",
        \"Perm\": \"اولڈ پٔرمِک\",
        \"Phag\": \"پھاگس پا\",
        \"Phlv\": \"بوٗک پَہَلوی\",
        \"Phnx\": \"پھونِشِیَن\",
        \"Plrd\": \"پولاڑ پھونِٹِک\",
        \"Rjng\": \"ریجَنگ\",
        \"Roro\": \"رونگو رونگو\",
        \"Runr\": \"رَنِک\",
        \"Samr\": \"سَمارِٹَن\",
        \"Sara\": \"سَراتی\",
        \"Saur\": \"سوراشٹرا\",
        \"Sgnw\": \"اِشارٲتی لِکھٲے\",
        \"Shaw\": \"شاویَن\",
        \"Sinh\": \"سِنہالا\",
        \"Sund\": \"سَنڈَنیٖز\",
        \"Sylo\": \"سیلوتی ناگری\",
        \"Syrc\": \"سیٖرِیَک\",
        \"Syre\": \"ایسٹرینجِلو سیٖرِیَک\",
        \"Syrj\": \"مغرِبی سیٖریَک\",
        \"Syrn\": \"مشرَقی سیٖریَک\",
        \"Tagb\": \"تَگبَنوا\",
        \"Tale\": \"تَیلیے\",
        \"Talu\": \"نۆو تیلو\",
        \"Taml\": \"تَمِل\",
        \"Telu\": \"تیلگوٗ\",
        \"Teng\": \"تینگوار\",
        \"Tfng\": \"تِفِناگ\",
        \"Tglg\": \"تَگَلوگ\",
        \"Thaa\": \"تھانا\",
        \"Thai\": \"تھاے\",
        \"Tibt\": \"تِبتی\",
        \"Ugar\": \"اُگارِٹِک\",
        \"Vaii\": \"واے\",
        \"Visp\": \"وِزِبٕل سپیٖچ\",
        \"Xpeo\": \"پرون فارسی\",
        \"Xsux\": \"سُمیرو اکادیَن کوٗنِفام\",
        \"Yiii\": \"یٖی\",
        \"Zxxx\": \"لیکھنَے\",
        \"Zyyy\": \"عام\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ks.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ks.json");
    }
}
