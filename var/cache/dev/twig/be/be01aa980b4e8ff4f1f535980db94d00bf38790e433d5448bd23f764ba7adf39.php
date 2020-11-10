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

/* vendor/symfony/intl/Resources/data/scripts/fa.json */
class __TwigTemplate_e4585e1021015fe8681bebda6855ad1f62ce41d87bf9ea12ef7693852e63ffc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fa.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/fa.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Aghb\": \"آلبانیایی قفقازی\",
        \"Arab\": \"عربی\",
        \"Armi\": \"آرامی هخامنشی\",
        \"Armn\": \"ارمنی\",
        \"Avst\": \"اوستایی\",
        \"Bali\": \"بالیایی\",
        \"Batk\": \"باتاکی\",
        \"Beng\": \"بنگالی\",
        \"Blis\": \"نمادهای بلیس\",
        \"Bopo\": \"بوپوموفو\",
        \"Brah\": \"براهمی\",
        \"Brai\": \"بریل\",
        \"Bugi\": \"بوگیایی\",
        \"Buhd\": \"بوهید\",
        \"Cakm\": \"چاکمایی\",
        \"Cari\": \"کاری\",
        \"Cham\": \"چمی\",
        \"Cher\": \"چروکیایی\",
        \"Cirt\": \"کرت\",
        \"Copt\": \"قبطی\",
        \"Cprt\": \"قبرسی\",
        \"Cyrl\": \"سیریلی\",
        \"Deva\": \"دوناگری\",
        \"Dsrt\": \"دیسرتی\",
        \"Egyh\": \"کاهنی مصری\",
        \"Egyp\": \"هیروگلیف مصری\",
        \"Ethi\": \"اتیوپیایی\",
        \"Geok\": \"گرجی خوتسوری\",
        \"Geor\": \"گرجی\",
        \"Glag\": \"گلاگولیتی\",
        \"Goth\": \"گوتی\",
        \"Grek\": \"یونانی\",
        \"Gujr\": \"گجراتی\",
        \"Guru\": \"گورومخی\",
        \"Hanb\": \"هان با بوموپوفو\",
        \"Hang\": \"هانگول\",
        \"Hani\": \"هان\",
        \"Hano\": \"هانونویی\",
        \"Hans\": \"ساده‌شده\",
        \"Hant\": \"سنتی\",
        \"Hebr\": \"عبری\",
        \"Hira\": \"هیراگانا\",
        \"Hluw\": \"هیروگلیف آناتولی\",
        \"Hrkt\": \"سیلابی‌های ژاپنی\",
        \"Hung\": \"مجاری باستان\",
        \"Inds\": \"ایندوس\",
        \"Ital\": \"ایتالی باستان\",
        \"Jamo\": \"جامو\",
        \"Java\": \"جاوه‌ای\",
        \"Jpan\": \"ژاپنی\",
        \"Kali\": \"کایالی\",
        \"Kana\": \"کاتاکانا\",
        \"Khmr\": \"خمری\",
        \"Khoj\": \"خواجکی\",
        \"Knda\": \"کانارا\",
        \"Kore\": \"کره‌ای\",
        \"Kthi\": \"کثی\",
        \"Lana\": \"لانایی\",
        \"Laoo\": \"لائوسی\",
        \"Latf\": \"لاتینی فراکتور\",
        \"Latg\": \"لاتینی گیلی\",
        \"Latn\": \"لاتینی\",
        \"Limb\": \"لیمبایی\",
        \"Lina\": \"خطی الف\",
        \"Linb\": \"خطی ب\",
        \"Lyci\": \"لسیایی\",
        \"Lydi\": \"لدیایی\",
        \"Mand\": \"منده‌ای\",
        \"Mani\": \"مانوی\",
        \"Maya\": \"هیروگلیف مایایی\",
        \"Mero\": \"مروییتی\",
        \"Mlym\": \"مالایالامی\",
        \"Mong\": \"مغولی\",
        \"Moon\": \"مونی\",
        \"Mtei\": \"مایک میتی\",
        \"Mymr\": \"میانمار\",
        \"Narb\": \"عربی شمالی باستان\",
        \"Nbat\": \"نبطی\",
        \"Ogam\": \"اوگامی\",
        \"Orkh\": \"اورخونی\",
        \"Orya\": \"اوریه‌ای\",
        \"Palm\": \"پالمیرایی\",
        \"Perm\": \"پرمی باستان\",
        \"Phli\": \"پهلوی کتیبه‌ای\",
        \"Phlp\": \"پهلوی زبوری\",
        \"Phlv\": \"پهلوی کتابی\",
        \"Phnx\": \"فنیقی\",
        \"Prti\": \"پارتی کتیبه‌ای\",
        \"Rjng\": \"رجنگی\",
        \"Runr\": \"رونی\",
        \"Samr\": \"سامری\",
        \"Sara\": \"ساراتی\",
        \"Sarb\": \"عربی جنوبی باستان\",
        \"Saur\": \"سوراشترایی\",
        \"Shaw\": \"شاوی\",
        \"Sinh\": \"سینهالی\",
        \"Sylo\": \"سیلوتی نگاری\",
        \"Syrc\": \"سریانی\",
        \"Syre\": \"سریانی سطرنجیلی\",
        \"Syrj\": \"سریانی غربی\",
        \"Syrn\": \"سریانی شرقی\",
        \"Tagb\": \"تگبنوایی\",
        \"Taml\": \"تامیلی\",
        \"Telu\": \"تلوگویی\",
        \"Teng\": \"تنگوار\",
        \"Tfng\": \"تیفیناغی\",
        \"Tglg\": \"تاگالوگی\",
        \"Thaa\": \"تانه‌ای\",
        \"Thai\": \"تایلندی\",
        \"Tibt\": \"تبتی\",
        \"Ugar\": \"اوگاریتی\",
        \"Vaii\": \"ویایی\",
        \"Visp\": \"گفتار قابل مشاهده\",
        \"Xpeo\": \"فارسی باستان\",
        \"Xsux\": \"میخی سومری‐اکدی\",
        \"Yiii\": \"یی\",
        \"Zinh\": \"موروثی\",
        \"Zmth\": \"علائم ریاضی\",
        \"Zsye\": \"اموجی\",
        \"Zsym\": \"علائم\",
        \"Zxxx\": \"نانوشته\",
        \"Zyyy\": \"مشترک\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/fa.json";
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
        \"Aghb\": \"آلبانیایی قفقازی\",
        \"Arab\": \"عربی\",
        \"Armi\": \"آرامی هخامنشی\",
        \"Armn\": \"ارمنی\",
        \"Avst\": \"اوستایی\",
        \"Bali\": \"بالیایی\",
        \"Batk\": \"باتاکی\",
        \"Beng\": \"بنگالی\",
        \"Blis\": \"نمادهای بلیس\",
        \"Bopo\": \"بوپوموفو\",
        \"Brah\": \"براهمی\",
        \"Brai\": \"بریل\",
        \"Bugi\": \"بوگیایی\",
        \"Buhd\": \"بوهید\",
        \"Cakm\": \"چاکمایی\",
        \"Cari\": \"کاری\",
        \"Cham\": \"چمی\",
        \"Cher\": \"چروکیایی\",
        \"Cirt\": \"کرت\",
        \"Copt\": \"قبطی\",
        \"Cprt\": \"قبرسی\",
        \"Cyrl\": \"سیریلی\",
        \"Deva\": \"دوناگری\",
        \"Dsrt\": \"دیسرتی\",
        \"Egyh\": \"کاهنی مصری\",
        \"Egyp\": \"هیروگلیف مصری\",
        \"Ethi\": \"اتیوپیایی\",
        \"Geok\": \"گرجی خوتسوری\",
        \"Geor\": \"گرجی\",
        \"Glag\": \"گلاگولیتی\",
        \"Goth\": \"گوتی\",
        \"Grek\": \"یونانی\",
        \"Gujr\": \"گجراتی\",
        \"Guru\": \"گورومخی\",
        \"Hanb\": \"هان با بوموپوفو\",
        \"Hang\": \"هانگول\",
        \"Hani\": \"هان\",
        \"Hano\": \"هانونویی\",
        \"Hans\": \"ساده‌شده\",
        \"Hant\": \"سنتی\",
        \"Hebr\": \"عبری\",
        \"Hira\": \"هیراگانا\",
        \"Hluw\": \"هیروگلیف آناتولی\",
        \"Hrkt\": \"سیلابی‌های ژاپنی\",
        \"Hung\": \"مجاری باستان\",
        \"Inds\": \"ایندوس\",
        \"Ital\": \"ایتالی باستان\",
        \"Jamo\": \"جامو\",
        \"Java\": \"جاوه‌ای\",
        \"Jpan\": \"ژاپنی\",
        \"Kali\": \"کایالی\",
        \"Kana\": \"کاتاکانا\",
        \"Khmr\": \"خمری\",
        \"Khoj\": \"خواجکی\",
        \"Knda\": \"کانارا\",
        \"Kore\": \"کره‌ای\",
        \"Kthi\": \"کثی\",
        \"Lana\": \"لانایی\",
        \"Laoo\": \"لائوسی\",
        \"Latf\": \"لاتینی فراکتور\",
        \"Latg\": \"لاتینی گیلی\",
        \"Latn\": \"لاتینی\",
        \"Limb\": \"لیمبایی\",
        \"Lina\": \"خطی الف\",
        \"Linb\": \"خطی ب\",
        \"Lyci\": \"لسیایی\",
        \"Lydi\": \"لدیایی\",
        \"Mand\": \"منده‌ای\",
        \"Mani\": \"مانوی\",
        \"Maya\": \"هیروگلیف مایایی\",
        \"Mero\": \"مروییتی\",
        \"Mlym\": \"مالایالامی\",
        \"Mong\": \"مغولی\",
        \"Moon\": \"مونی\",
        \"Mtei\": \"مایک میتی\",
        \"Mymr\": \"میانمار\",
        \"Narb\": \"عربی شمالی باستان\",
        \"Nbat\": \"نبطی\",
        \"Ogam\": \"اوگامی\",
        \"Orkh\": \"اورخونی\",
        \"Orya\": \"اوریه‌ای\",
        \"Palm\": \"پالمیرایی\",
        \"Perm\": \"پرمی باستان\",
        \"Phli\": \"پهلوی کتیبه‌ای\",
        \"Phlp\": \"پهلوی زبوری\",
        \"Phlv\": \"پهلوی کتابی\",
        \"Phnx\": \"فنیقی\",
        \"Prti\": \"پارتی کتیبه‌ای\",
        \"Rjng\": \"رجنگی\",
        \"Runr\": \"رونی\",
        \"Samr\": \"سامری\",
        \"Sara\": \"ساراتی\",
        \"Sarb\": \"عربی جنوبی باستان\",
        \"Saur\": \"سوراشترایی\",
        \"Shaw\": \"شاوی\",
        \"Sinh\": \"سینهالی\",
        \"Sylo\": \"سیلوتی نگاری\",
        \"Syrc\": \"سریانی\",
        \"Syre\": \"سریانی سطرنجیلی\",
        \"Syrj\": \"سریانی غربی\",
        \"Syrn\": \"سریانی شرقی\",
        \"Tagb\": \"تگبنوایی\",
        \"Taml\": \"تامیلی\",
        \"Telu\": \"تلوگویی\",
        \"Teng\": \"تنگوار\",
        \"Tfng\": \"تیفیناغی\",
        \"Tglg\": \"تاگالوگی\",
        \"Thaa\": \"تانه‌ای\",
        \"Thai\": \"تایلندی\",
        \"Tibt\": \"تبتی\",
        \"Ugar\": \"اوگاریتی\",
        \"Vaii\": \"ویایی\",
        \"Visp\": \"گفتار قابل مشاهده\",
        \"Xpeo\": \"فارسی باستان\",
        \"Xsux\": \"میخی سومری‐اکدی\",
        \"Yiii\": \"یی\",
        \"Zinh\": \"موروثی\",
        \"Zmth\": \"علائم ریاضی\",
        \"Zsye\": \"اموجی\",
        \"Zsym\": \"علائم\",
        \"Zxxx\": \"نانوشته\",
        \"Zyyy\": \"مشترک\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/fa.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/fa.json");
    }
}
