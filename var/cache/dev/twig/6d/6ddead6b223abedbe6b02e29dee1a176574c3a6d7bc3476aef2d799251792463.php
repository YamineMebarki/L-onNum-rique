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

/* vendor/symfony/intl/Resources/data/scripts/ar.json */
class __TwigTemplate_059146e822f970b4c92f0b2b3b03bf885bd3daa149436afc725504d5907af79c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ar.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ar.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"العربية\",
        \"Armn\": \"الأرمينية\",
        \"Bali\": \"البالية\",
        \"Batk\": \"الباتاك\",
        \"Beng\": \"البنغالية\",
        \"Blis\": \"رموز بليس\",
        \"Bopo\": \"البوبوموفو\",
        \"Brah\": \"الهندوسية\",
        \"Brai\": \"البرايل\",
        \"Bugi\": \"البجينيز\",
        \"Buhd\": \"البهيدية\",
        \"Cans\": \"مقاطع كندية أصلية موحدة\",
        \"Cari\": \"الكارية\",
        \"Cham\": \"التشامية\",
        \"Cher\": \"الشيروكي\",
        \"Cirt\": \"السيرث\",
        \"Copt\": \"القبطية\",
        \"Cprt\": \"القبرصية\",
        \"Cyrl\": \"السيريلية\",
        \"Cyrs\": \"السيريلية السلافية الكنسية القديمة\",
        \"Deva\": \"الديفاناجاري\",
        \"Dsrt\": \"الديسيريت\",
        \"Egyd\": \"الديموطيقية\",
        \"Egyh\": \"الهيراطيقية\",
        \"Egyp\": \"الهيروغليفية\",
        \"Ethi\": \"الأثيوبية\",
        \"Geok\": \"الأبجدية الجورجية - أسومتافرلي و نسخري\",
        \"Geor\": \"الجورجية\",
        \"Glag\": \"الجلاجوليتيك\",
        \"Goth\": \"القوطية\",
        \"Grek\": \"اليونانية\",
        \"Gujr\": \"التاغجراتية\",
        \"Guru\": \"الجرمخي\",
        \"Hanb\": \"هانب\",
        \"Hang\": \"الهانغول\",
        \"Hani\": \"الهان\",
        \"Hano\": \"الهانونو\",
        \"Hans\": \"المبسطة\",
        \"Hant\": \"التقليدية\",
        \"Hebr\": \"العبرية\",
        \"Hira\": \"الهيراجانا\",
        \"Hmng\": \"الباهوه همونج\",
        \"Hrkt\": \"أبجدية مقطعية يابانية\",
        \"Hung\": \"المجرية القديمة\",
        \"Inds\": \"اندس - هارابان\",
        \"Ital\": \"الإيطالية القديمة\",
        \"Jamo\": \"جامو\",
        \"Java\": \"الجاوية\",
        \"Jpan\": \"اليابانية\",
        \"Kali\": \"الكياه لى\",
        \"Kana\": \"الكتكانا\",
        \"Khar\": \"الخاروشتى\",
        \"Khmr\": \"الخميرية\",
        \"Knda\": \"الكانادا\",
        \"Kore\": \"الكورية\",
        \"Lana\": \"الانا\",
        \"Laoo\": \"اللاو\",
        \"Latf\": \"اللاتينية - متغير فراكتر\",
        \"Latg\": \"اللاتينية - متغير غيلى\",
        \"Latn\": \"اللاتينية\",
        \"Lepc\": \"الليبتشا - رونج\",
        \"Limb\": \"الليمبو\",
        \"Lina\": \"الخطية أ\",
        \"Linb\": \"الخطية ب\",
        \"Lyci\": \"الليسية\",
        \"Lydi\": \"الليدية\",
        \"Mand\": \"المانداينية\",
        \"Maya\": \"المايا الهيروغليفية\",
        \"Mero\": \"الميرويتيك\",
        \"Mlym\": \"الماليالام\",
        \"Mong\": \"المغولية\",
        \"Moon\": \"مون\",
        \"Mymr\": \"الميانمار\",
        \"Narb\": \"العربية الشمالية القديمة\",
        \"Nkoo\": \"أنكو\",
        \"Ogam\": \"الأوجهام\",
        \"Orkh\": \"الأورخون\",
        \"Orya\": \"الأوريا\",
        \"Osma\": \"الأوسمانيا\",
        \"Perm\": \"البيرميكية القديمة\",
        \"Phag\": \"الفاجسبا\",
        \"Phnx\": \"الفينيقية\",
        \"Plrd\": \"الصوتيات الجماء\",
        \"Roro\": \"رنجورنجو\",
        \"Runr\": \"الروني\",
        \"Sara\": \"الساراتي\",
        \"Sarb\": \"العربية الجنوبية القديمة\",
        \"Shaw\": \"الشواني\",
        \"Sinh\": \"السينهالا\",
        \"Sund\": \"السوندانية\",
        \"Sylo\": \"السيلوتي ناغري\",
        \"Syrc\": \"السريانية\",
        \"Syre\": \"السريانية الأسترنجيلية\",
        \"Syrj\": \"السريانية الغربية\",
        \"Syrn\": \"السريانية الشرقية\",
        \"Tagb\": \"التاجبانوا\",
        \"Tale\": \"التاي لي\",
        \"Talu\": \"التاى لى الجديد\",
        \"Taml\": \"التاميلية\",
        \"Telu\": \"التيلجو\",
        \"Teng\": \"التينجوار\",
        \"Tfng\": \"التيفيناغ\",
        \"Tglg\": \"التغالوغية\",
        \"Thaa\": \"الثعنة\",
        \"Thai\": \"التايلاندية\",
        \"Tibt\": \"التبتية\",
        \"Ugar\": \"الأجاريتيكية\",
        \"Vaii\": \"الفاي\",
        \"Visp\": \"الكلام المرئي\",
        \"Xpeo\": \"الفارسية القديمة\",
        \"Xsux\": \"الكتابة المسمارية الأكدية السومرية\",
        \"Yiii\": \"اليي\",
        \"Zinh\": \"الموروث\",
        \"Zmth\": \"تدوين رياضي\",
        \"Zsye\": \"إيموجي\",
        \"Zsym\": \"رموز\",
        \"Zxxx\": \"غير مكتوب\",
        \"Zyyy\": \"عام\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ar.json";
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
        \"Arab\": \"العربية\",
        \"Armn\": \"الأرمينية\",
        \"Bali\": \"البالية\",
        \"Batk\": \"الباتاك\",
        \"Beng\": \"البنغالية\",
        \"Blis\": \"رموز بليس\",
        \"Bopo\": \"البوبوموفو\",
        \"Brah\": \"الهندوسية\",
        \"Brai\": \"البرايل\",
        \"Bugi\": \"البجينيز\",
        \"Buhd\": \"البهيدية\",
        \"Cans\": \"مقاطع كندية أصلية موحدة\",
        \"Cari\": \"الكارية\",
        \"Cham\": \"التشامية\",
        \"Cher\": \"الشيروكي\",
        \"Cirt\": \"السيرث\",
        \"Copt\": \"القبطية\",
        \"Cprt\": \"القبرصية\",
        \"Cyrl\": \"السيريلية\",
        \"Cyrs\": \"السيريلية السلافية الكنسية القديمة\",
        \"Deva\": \"الديفاناجاري\",
        \"Dsrt\": \"الديسيريت\",
        \"Egyd\": \"الديموطيقية\",
        \"Egyh\": \"الهيراطيقية\",
        \"Egyp\": \"الهيروغليفية\",
        \"Ethi\": \"الأثيوبية\",
        \"Geok\": \"الأبجدية الجورجية - أسومتافرلي و نسخري\",
        \"Geor\": \"الجورجية\",
        \"Glag\": \"الجلاجوليتيك\",
        \"Goth\": \"القوطية\",
        \"Grek\": \"اليونانية\",
        \"Gujr\": \"التاغجراتية\",
        \"Guru\": \"الجرمخي\",
        \"Hanb\": \"هانب\",
        \"Hang\": \"الهانغول\",
        \"Hani\": \"الهان\",
        \"Hano\": \"الهانونو\",
        \"Hans\": \"المبسطة\",
        \"Hant\": \"التقليدية\",
        \"Hebr\": \"العبرية\",
        \"Hira\": \"الهيراجانا\",
        \"Hmng\": \"الباهوه همونج\",
        \"Hrkt\": \"أبجدية مقطعية يابانية\",
        \"Hung\": \"المجرية القديمة\",
        \"Inds\": \"اندس - هارابان\",
        \"Ital\": \"الإيطالية القديمة\",
        \"Jamo\": \"جامو\",
        \"Java\": \"الجاوية\",
        \"Jpan\": \"اليابانية\",
        \"Kali\": \"الكياه لى\",
        \"Kana\": \"الكتكانا\",
        \"Khar\": \"الخاروشتى\",
        \"Khmr\": \"الخميرية\",
        \"Knda\": \"الكانادا\",
        \"Kore\": \"الكورية\",
        \"Lana\": \"الانا\",
        \"Laoo\": \"اللاو\",
        \"Latf\": \"اللاتينية - متغير فراكتر\",
        \"Latg\": \"اللاتينية - متغير غيلى\",
        \"Latn\": \"اللاتينية\",
        \"Lepc\": \"الليبتشا - رونج\",
        \"Limb\": \"الليمبو\",
        \"Lina\": \"الخطية أ\",
        \"Linb\": \"الخطية ب\",
        \"Lyci\": \"الليسية\",
        \"Lydi\": \"الليدية\",
        \"Mand\": \"المانداينية\",
        \"Maya\": \"المايا الهيروغليفية\",
        \"Mero\": \"الميرويتيك\",
        \"Mlym\": \"الماليالام\",
        \"Mong\": \"المغولية\",
        \"Moon\": \"مون\",
        \"Mymr\": \"الميانمار\",
        \"Narb\": \"العربية الشمالية القديمة\",
        \"Nkoo\": \"أنكو\",
        \"Ogam\": \"الأوجهام\",
        \"Orkh\": \"الأورخون\",
        \"Orya\": \"الأوريا\",
        \"Osma\": \"الأوسمانيا\",
        \"Perm\": \"البيرميكية القديمة\",
        \"Phag\": \"الفاجسبا\",
        \"Phnx\": \"الفينيقية\",
        \"Plrd\": \"الصوتيات الجماء\",
        \"Roro\": \"رنجورنجو\",
        \"Runr\": \"الروني\",
        \"Sara\": \"الساراتي\",
        \"Sarb\": \"العربية الجنوبية القديمة\",
        \"Shaw\": \"الشواني\",
        \"Sinh\": \"السينهالا\",
        \"Sund\": \"السوندانية\",
        \"Sylo\": \"السيلوتي ناغري\",
        \"Syrc\": \"السريانية\",
        \"Syre\": \"السريانية الأسترنجيلية\",
        \"Syrj\": \"السريانية الغربية\",
        \"Syrn\": \"السريانية الشرقية\",
        \"Tagb\": \"التاجبانوا\",
        \"Tale\": \"التاي لي\",
        \"Talu\": \"التاى لى الجديد\",
        \"Taml\": \"التاميلية\",
        \"Telu\": \"التيلجو\",
        \"Teng\": \"التينجوار\",
        \"Tfng\": \"التيفيناغ\",
        \"Tglg\": \"التغالوغية\",
        \"Thaa\": \"الثعنة\",
        \"Thai\": \"التايلاندية\",
        \"Tibt\": \"التبتية\",
        \"Ugar\": \"الأجاريتيكية\",
        \"Vaii\": \"الفاي\",
        \"Visp\": \"الكلام المرئي\",
        \"Xpeo\": \"الفارسية القديمة\",
        \"Xsux\": \"الكتابة المسمارية الأكدية السومرية\",
        \"Yiii\": \"اليي\",
        \"Zinh\": \"الموروث\",
        \"Zmth\": \"تدوين رياضي\",
        \"Zsye\": \"إيموجي\",
        \"Zsym\": \"رموز\",
        \"Zxxx\": \"غير مكتوب\",
        \"Zyyy\": \"عام\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ar.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ar.json");
    }
}
