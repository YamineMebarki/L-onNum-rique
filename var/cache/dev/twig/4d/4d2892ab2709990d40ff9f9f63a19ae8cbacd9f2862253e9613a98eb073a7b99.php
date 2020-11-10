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

/* vendor/symfony/intl/Resources/data/regions/fa.json */
class __TwigTemplate_41e791c888bf9ee6ce749a144d58a72e1fdf5465deccb33a6ce0bbd2bf75162f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fa.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fa.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"آندورا\",
        \"AE\": \"امارات متحدهٔ عربی\",
        \"AF\": \"افغانستان\",
        \"AG\": \"آنتیگوا و باربودا\",
        \"AI\": \"آنگویلا\",
        \"AL\": \"آلبانی\",
        \"AM\": \"ارمنستان\",
        \"AO\": \"آنگولا\",
        \"AQ\": \"جنوبگان\",
        \"AR\": \"آرژانتین\",
        \"AS\": \"ساموآی امریکا\",
        \"AT\": \"اتریش\",
        \"AU\": \"استرالیا\",
        \"AW\": \"آروبا\",
        \"AX\": \"جزایر آلاند\",
        \"AZ\": \"جمهوری آذربایجان\",
        \"BA\": \"بوسنی و هرزگوین\",
        \"BB\": \"باربادوس\",
        \"BD\": \"بنگلادش\",
        \"BE\": \"بلژیک\",
        \"BF\": \"بورکینافاسو\",
        \"BG\": \"بلغارستان\",
        \"BH\": \"بحرین\",
        \"BI\": \"بوروندی\",
        \"BJ\": \"بنین\",
        \"BL\": \"سن بارتلمی\",
        \"BM\": \"برمودا\",
        \"BN\": \"برونئی\",
        \"BO\": \"بولیوی\",
        \"BQ\": \"جزایر کارائیب هلند\",
        \"BR\": \"برزیل\",
        \"BS\": \"باهاما\",
        \"BT\": \"بوتان\",
        \"BV\": \"جزیرهٔ بووه\",
        \"BW\": \"بوتسوانا\",
        \"BY\": \"بلاروس\",
        \"BZ\": \"بلیز\",
        \"CA\": \"کانادا\",
        \"CC\": \"جزایر کوکوس\",
        \"CD\": \"کنگو - کینشاسا\",
        \"CF\": \"جمهوری افریقای مرکزی\",
        \"CG\": \"کنگو - برازویل\",
        \"CH\": \"سوئیس\",
        \"CI\": \"ساحل عاج\",
        \"CK\": \"جزایر کوک\",
        \"CL\": \"شیلی\",
        \"CM\": \"کامرون\",
        \"CN\": \"چین\",
        \"CO\": \"کلمبیا\",
        \"CR\": \"کاستاریکا\",
        \"CU\": \"کوبا\",
        \"CV\": \"کیپ‌ورد\",
        \"CW\": \"کوراسائو\",
        \"CX\": \"جزیرهٔ کریسمس\",
        \"CY\": \"قبرس\",
        \"CZ\": \"چک\",
        \"DE\": \"آلمان\",
        \"DJ\": \"جیبوتی\",
        \"DK\": \"دانمارک\",
        \"DM\": \"دومینیکا\",
        \"DO\": \"جمهوری دومینیکن\",
        \"DZ\": \"الجزایر\",
        \"EC\": \"اکوادور\",
        \"EE\": \"استونی\",
        \"EG\": \"مصر\",
        \"EH\": \"صحرای غربی\",
        \"ER\": \"اریتره\",
        \"ES\": \"اسپانیا\",
        \"ET\": \"اتیوپی\",
        \"FI\": \"فنلاند\",
        \"FJ\": \"فیجی\",
        \"FK\": \"جزایر فالکلند\",
        \"FM\": \"میکرونزی\",
        \"FO\": \"جزایر فارو\",
        \"FR\": \"فرانسه\",
        \"GA\": \"گابن\",
        \"GB\": \"بریتانیا\",
        \"GD\": \"گرنادا\",
        \"GE\": \"گرجستان\",
        \"GF\": \"گویان فرانسه\",
        \"GG\": \"گرنزی\",
        \"GH\": \"غنا\",
        \"GI\": \"جبل‌الطارق\",
        \"GL\": \"گرینلند\",
        \"GM\": \"گامبیا\",
        \"GN\": \"گینه\",
        \"GP\": \"گوادلوپ\",
        \"GQ\": \"گینهٔ استوایی\",
        \"GR\": \"یونان\",
        \"GS\": \"جورجیای جنوبی و جزایر ساندویچ جنوبی\",
        \"GT\": \"گواتمالا\",
        \"GU\": \"گوام\",
        \"GW\": \"گینهٔ بیسائو\",
        \"GY\": \"گویان\",
        \"HK\": \"هنگ‌کنگ، منطقهٔ ویژهٔ اداری چین\",
        \"HM\": \"هرد و جزایر مک‌دونالد\",
        \"HN\": \"هندوراس\",
        \"HR\": \"کرواسی\",
        \"HT\": \"هائیتی\",
        \"HU\": \"مجارستان\",
        \"ID\": \"اندونزی\",
        \"IE\": \"ایرلند\",
        \"IL\": \"اسرائیل\",
        \"IM\": \"جزیرهٔ من\",
        \"IN\": \"هند\",
        \"IO\": \"قلمرو بریتانیا در اقیانوس هند\",
        \"IQ\": \"عراق\",
        \"IR\": \"ایران\",
        \"IS\": \"ایسلند\",
        \"IT\": \"ایتالیا\",
        \"JE\": \"جرزی\",
        \"JM\": \"جامائیکا\",
        \"JO\": \"اردن\",
        \"JP\": \"ژاپن\",
        \"KE\": \"کنیا\",
        \"KG\": \"قرقیزستان\",
        \"KH\": \"کامبوج\",
        \"KI\": \"کیریباتی\",
        \"KM\": \"کومور\",
        \"KN\": \"سنت کیتس و نویس\",
        \"KP\": \"کرهٔ شمالی\",
        \"KR\": \"کرهٔ جنوبی\",
        \"KW\": \"کویت\",
        \"KY\": \"جزایر کِیمن\",
        \"KZ\": \"قزاقستان\",
        \"LA\": \"لائوس\",
        \"LB\": \"لبنان\",
        \"LC\": \"سنت لوسیا\",
        \"LI\": \"لیختن‌اشتاین\",
        \"LK\": \"سری‌لانکا\",
        \"LR\": \"لیبریا\",
        \"LS\": \"لسوتو\",
        \"LT\": \"لیتوانی\",
        \"LU\": \"لوکزامبورگ\",
        \"LV\": \"لتونی\",
        \"LY\": \"لیبی\",
        \"MA\": \"مراکش\",
        \"MC\": \"موناکو\",
        \"MD\": \"مولداوی\",
        \"ME\": \"مونته‌نگرو\",
        \"MF\": \"سنت مارتین\",
        \"MG\": \"ماداگاسکار\",
        \"MH\": \"جزایر مارشال\",
        \"MK\": \"مقدونیهٔ شمالی\",
        \"ML\": \"مالی\",
        \"MM\": \"میانمار (برمه)\",
        \"MN\": \"مغولستان\",
        \"MO\": \"ماکائو، منطقهٔ ویژهٔ اداری چین\",
        \"MP\": \"جزایر ماریانای شمالی\",
        \"MQ\": \"مارتینیک\",
        \"MR\": \"موریتانی\",
        \"MS\": \"مونت‌سرات\",
        \"MT\": \"مالت\",
        \"MU\": \"موریس\",
        \"MV\": \"مالدیو\",
        \"MW\": \"مالاوی\",
        \"MX\": \"مکزیک\",
        \"MY\": \"مالزی\",
        \"MZ\": \"موزامبیک\",
        \"NA\": \"نامیبیا\",
        \"NC\": \"کالدونیای جدید\",
        \"NE\": \"نیجر\",
        \"NF\": \"جزیرهٔ نورفولک\",
        \"NG\": \"نیجریه\",
        \"NI\": \"نیکاراگوئه\",
        \"NL\": \"هلند\",
        \"NO\": \"نروژ\",
        \"NP\": \"نپال\",
        \"NR\": \"نائورو\",
        \"NU\": \"نیوئه\",
        \"NZ\": \"نیوزیلند\",
        \"OM\": \"عمان\",
        \"PA\": \"پاناما\",
        \"PE\": \"پرو\",
        \"PF\": \"پلی‌نزی فرانسه\",
        \"PG\": \"پاپوا گینهٔ نو\",
        \"PH\": \"فیلیپین\",
        \"PK\": \"پاکستان\",
        \"PL\": \"لهستان\",
        \"PM\": \"سن پیر و میکلن\",
        \"PN\": \"جزایر پیت‌کرن\",
        \"PR\": \"پورتوریکو\",
        \"PS\": \"سرزمین‌های فلسطینی\",
        \"PT\": \"پرتغال\",
        \"PW\": \"پالائو\",
        \"PY\": \"پاراگوئه\",
        \"QA\": \"قطر\",
        \"RE\": \"رئونیون\",
        \"RO\": \"رومانی\",
        \"RS\": \"صربستان\",
        \"RU\": \"روسیه\",
        \"RW\": \"رواندا\",
        \"SA\": \"عربستان سعودی\",
        \"SB\": \"جزایر سلیمان\",
        \"SC\": \"سیشل\",
        \"SD\": \"سودان\",
        \"SE\": \"سوئد\",
        \"SG\": \"سنگاپور\",
        \"SH\": \"سنت هلن\",
        \"SI\": \"اسلوونی\",
        \"SJ\": \"سوالبارد و یان ماین\",
        \"SK\": \"اسلواکی\",
        \"SL\": \"سیرالئون\",
        \"SM\": \"سان‌مارینو\",
        \"SN\": \"سنگال\",
        \"SO\": \"سومالی\",
        \"SR\": \"سورینام\",
        \"SS\": \"سودان جنوبی\",
        \"ST\": \"سائوتومه و پرینسیپ\",
        \"SV\": \"السالوادور\",
        \"SX\": \"سنت مارتن\",
        \"SY\": \"سوریه\",
        \"SZ\": \"اسواتینی\",
        \"TC\": \"جزایر تورکس و کایکوس\",
        \"TD\": \"چاد\",
        \"TF\": \"سرزمین‌های جنوب فرانسه\",
        \"TG\": \"توگو\",
        \"TH\": \"تایلند\",
        \"TJ\": \"تاجیکستان\",
        \"TK\": \"توکلائو\",
        \"TL\": \"تیمور-لسته\",
        \"TM\": \"ترکمنستان\",
        \"TN\": \"تونس\",
        \"TO\": \"تونگا\",
        \"TR\": \"ترکیه\",
        \"TT\": \"ترینیداد و توباگو\",
        \"TV\": \"تووالو\",
        \"TW\": \"تایوان\",
        \"TZ\": \"تانزانیا\",
        \"UA\": \"اوکراین\",
        \"UG\": \"اوگاندا\",
        \"UM\": \"جزایر دورافتادهٔ ایالات متحده\",
        \"US\": \"ایالات متحده\",
        \"UY\": \"اروگوئه\",
        \"UZ\": \"ازبکستان\",
        \"VA\": \"واتیکان\",
        \"VC\": \"سنت وینسنت و گرنادین\",
        \"VE\": \"ونزوئلا\",
        \"VG\": \"جزایر ویرجین بریتانیا\",
        \"VI\": \"جزایر ویرجین ایالات متحده\",
        \"VN\": \"ویتنام\",
        \"VU\": \"وانواتو\",
        \"WF\": \"والیس و فوتونا\",
        \"WS\": \"ساموآ\",
        \"YE\": \"یمن\",
        \"YT\": \"مایوت\",
        \"ZA\": \"افریقای جنوبی\",
        \"ZM\": \"زامبیا\",
        \"ZW\": \"زیمبابوه\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/fa.json";
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
        \"AD\": \"آندورا\",
        \"AE\": \"امارات متحدهٔ عربی\",
        \"AF\": \"افغانستان\",
        \"AG\": \"آنتیگوا و باربودا\",
        \"AI\": \"آنگویلا\",
        \"AL\": \"آلبانی\",
        \"AM\": \"ارمنستان\",
        \"AO\": \"آنگولا\",
        \"AQ\": \"جنوبگان\",
        \"AR\": \"آرژانتین\",
        \"AS\": \"ساموآی امریکا\",
        \"AT\": \"اتریش\",
        \"AU\": \"استرالیا\",
        \"AW\": \"آروبا\",
        \"AX\": \"جزایر آلاند\",
        \"AZ\": \"جمهوری آذربایجان\",
        \"BA\": \"بوسنی و هرزگوین\",
        \"BB\": \"باربادوس\",
        \"BD\": \"بنگلادش\",
        \"BE\": \"بلژیک\",
        \"BF\": \"بورکینافاسو\",
        \"BG\": \"بلغارستان\",
        \"BH\": \"بحرین\",
        \"BI\": \"بوروندی\",
        \"BJ\": \"بنین\",
        \"BL\": \"سن بارتلمی\",
        \"BM\": \"برمودا\",
        \"BN\": \"برونئی\",
        \"BO\": \"بولیوی\",
        \"BQ\": \"جزایر کارائیب هلند\",
        \"BR\": \"برزیل\",
        \"BS\": \"باهاما\",
        \"BT\": \"بوتان\",
        \"BV\": \"جزیرهٔ بووه\",
        \"BW\": \"بوتسوانا\",
        \"BY\": \"بلاروس\",
        \"BZ\": \"بلیز\",
        \"CA\": \"کانادا\",
        \"CC\": \"جزایر کوکوس\",
        \"CD\": \"کنگو - کینشاسا\",
        \"CF\": \"جمهوری افریقای مرکزی\",
        \"CG\": \"کنگو - برازویل\",
        \"CH\": \"سوئیس\",
        \"CI\": \"ساحل عاج\",
        \"CK\": \"جزایر کوک\",
        \"CL\": \"شیلی\",
        \"CM\": \"کامرون\",
        \"CN\": \"چین\",
        \"CO\": \"کلمبیا\",
        \"CR\": \"کاستاریکا\",
        \"CU\": \"کوبا\",
        \"CV\": \"کیپ‌ورد\",
        \"CW\": \"کوراسائو\",
        \"CX\": \"جزیرهٔ کریسمس\",
        \"CY\": \"قبرس\",
        \"CZ\": \"چک\",
        \"DE\": \"آلمان\",
        \"DJ\": \"جیبوتی\",
        \"DK\": \"دانمارک\",
        \"DM\": \"دومینیکا\",
        \"DO\": \"جمهوری دومینیکن\",
        \"DZ\": \"الجزایر\",
        \"EC\": \"اکوادور\",
        \"EE\": \"استونی\",
        \"EG\": \"مصر\",
        \"EH\": \"صحرای غربی\",
        \"ER\": \"اریتره\",
        \"ES\": \"اسپانیا\",
        \"ET\": \"اتیوپی\",
        \"FI\": \"فنلاند\",
        \"FJ\": \"فیجی\",
        \"FK\": \"جزایر فالکلند\",
        \"FM\": \"میکرونزی\",
        \"FO\": \"جزایر فارو\",
        \"FR\": \"فرانسه\",
        \"GA\": \"گابن\",
        \"GB\": \"بریتانیا\",
        \"GD\": \"گرنادا\",
        \"GE\": \"گرجستان\",
        \"GF\": \"گویان فرانسه\",
        \"GG\": \"گرنزی\",
        \"GH\": \"غنا\",
        \"GI\": \"جبل‌الطارق\",
        \"GL\": \"گرینلند\",
        \"GM\": \"گامبیا\",
        \"GN\": \"گینه\",
        \"GP\": \"گوادلوپ\",
        \"GQ\": \"گینهٔ استوایی\",
        \"GR\": \"یونان\",
        \"GS\": \"جورجیای جنوبی و جزایر ساندویچ جنوبی\",
        \"GT\": \"گواتمالا\",
        \"GU\": \"گوام\",
        \"GW\": \"گینهٔ بیسائو\",
        \"GY\": \"گویان\",
        \"HK\": \"هنگ‌کنگ، منطقهٔ ویژهٔ اداری چین\",
        \"HM\": \"هرد و جزایر مک‌دونالد\",
        \"HN\": \"هندوراس\",
        \"HR\": \"کرواسی\",
        \"HT\": \"هائیتی\",
        \"HU\": \"مجارستان\",
        \"ID\": \"اندونزی\",
        \"IE\": \"ایرلند\",
        \"IL\": \"اسرائیل\",
        \"IM\": \"جزیرهٔ من\",
        \"IN\": \"هند\",
        \"IO\": \"قلمرو بریتانیا در اقیانوس هند\",
        \"IQ\": \"عراق\",
        \"IR\": \"ایران\",
        \"IS\": \"ایسلند\",
        \"IT\": \"ایتالیا\",
        \"JE\": \"جرزی\",
        \"JM\": \"جامائیکا\",
        \"JO\": \"اردن\",
        \"JP\": \"ژاپن\",
        \"KE\": \"کنیا\",
        \"KG\": \"قرقیزستان\",
        \"KH\": \"کامبوج\",
        \"KI\": \"کیریباتی\",
        \"KM\": \"کومور\",
        \"KN\": \"سنت کیتس و نویس\",
        \"KP\": \"کرهٔ شمالی\",
        \"KR\": \"کرهٔ جنوبی\",
        \"KW\": \"کویت\",
        \"KY\": \"جزایر کِیمن\",
        \"KZ\": \"قزاقستان\",
        \"LA\": \"لائوس\",
        \"LB\": \"لبنان\",
        \"LC\": \"سنت لوسیا\",
        \"LI\": \"لیختن‌اشتاین\",
        \"LK\": \"سری‌لانکا\",
        \"LR\": \"لیبریا\",
        \"LS\": \"لسوتو\",
        \"LT\": \"لیتوانی\",
        \"LU\": \"لوکزامبورگ\",
        \"LV\": \"لتونی\",
        \"LY\": \"لیبی\",
        \"MA\": \"مراکش\",
        \"MC\": \"موناکو\",
        \"MD\": \"مولداوی\",
        \"ME\": \"مونته‌نگرو\",
        \"MF\": \"سنت مارتین\",
        \"MG\": \"ماداگاسکار\",
        \"MH\": \"جزایر مارشال\",
        \"MK\": \"مقدونیهٔ شمالی\",
        \"ML\": \"مالی\",
        \"MM\": \"میانمار (برمه)\",
        \"MN\": \"مغولستان\",
        \"MO\": \"ماکائو، منطقهٔ ویژهٔ اداری چین\",
        \"MP\": \"جزایر ماریانای شمالی\",
        \"MQ\": \"مارتینیک\",
        \"MR\": \"موریتانی\",
        \"MS\": \"مونت‌سرات\",
        \"MT\": \"مالت\",
        \"MU\": \"موریس\",
        \"MV\": \"مالدیو\",
        \"MW\": \"مالاوی\",
        \"MX\": \"مکزیک\",
        \"MY\": \"مالزی\",
        \"MZ\": \"موزامبیک\",
        \"NA\": \"نامیبیا\",
        \"NC\": \"کالدونیای جدید\",
        \"NE\": \"نیجر\",
        \"NF\": \"جزیرهٔ نورفولک\",
        \"NG\": \"نیجریه\",
        \"NI\": \"نیکاراگوئه\",
        \"NL\": \"هلند\",
        \"NO\": \"نروژ\",
        \"NP\": \"نپال\",
        \"NR\": \"نائورو\",
        \"NU\": \"نیوئه\",
        \"NZ\": \"نیوزیلند\",
        \"OM\": \"عمان\",
        \"PA\": \"پاناما\",
        \"PE\": \"پرو\",
        \"PF\": \"پلی‌نزی فرانسه\",
        \"PG\": \"پاپوا گینهٔ نو\",
        \"PH\": \"فیلیپین\",
        \"PK\": \"پاکستان\",
        \"PL\": \"لهستان\",
        \"PM\": \"سن پیر و میکلن\",
        \"PN\": \"جزایر پیت‌کرن\",
        \"PR\": \"پورتوریکو\",
        \"PS\": \"سرزمین‌های فلسطینی\",
        \"PT\": \"پرتغال\",
        \"PW\": \"پالائو\",
        \"PY\": \"پاراگوئه\",
        \"QA\": \"قطر\",
        \"RE\": \"رئونیون\",
        \"RO\": \"رومانی\",
        \"RS\": \"صربستان\",
        \"RU\": \"روسیه\",
        \"RW\": \"رواندا\",
        \"SA\": \"عربستان سعودی\",
        \"SB\": \"جزایر سلیمان\",
        \"SC\": \"سیشل\",
        \"SD\": \"سودان\",
        \"SE\": \"سوئد\",
        \"SG\": \"سنگاپور\",
        \"SH\": \"سنت هلن\",
        \"SI\": \"اسلوونی\",
        \"SJ\": \"سوالبارد و یان ماین\",
        \"SK\": \"اسلواکی\",
        \"SL\": \"سیرالئون\",
        \"SM\": \"سان‌مارینو\",
        \"SN\": \"سنگال\",
        \"SO\": \"سومالی\",
        \"SR\": \"سورینام\",
        \"SS\": \"سودان جنوبی\",
        \"ST\": \"سائوتومه و پرینسیپ\",
        \"SV\": \"السالوادور\",
        \"SX\": \"سنت مارتن\",
        \"SY\": \"سوریه\",
        \"SZ\": \"اسواتینی\",
        \"TC\": \"جزایر تورکس و کایکوس\",
        \"TD\": \"چاد\",
        \"TF\": \"سرزمین‌های جنوب فرانسه\",
        \"TG\": \"توگو\",
        \"TH\": \"تایلند\",
        \"TJ\": \"تاجیکستان\",
        \"TK\": \"توکلائو\",
        \"TL\": \"تیمور-لسته\",
        \"TM\": \"ترکمنستان\",
        \"TN\": \"تونس\",
        \"TO\": \"تونگا\",
        \"TR\": \"ترکیه\",
        \"TT\": \"ترینیداد و توباگو\",
        \"TV\": \"تووالو\",
        \"TW\": \"تایوان\",
        \"TZ\": \"تانزانیا\",
        \"UA\": \"اوکراین\",
        \"UG\": \"اوگاندا\",
        \"UM\": \"جزایر دورافتادهٔ ایالات متحده\",
        \"US\": \"ایالات متحده\",
        \"UY\": \"اروگوئه\",
        \"UZ\": \"ازبکستان\",
        \"VA\": \"واتیکان\",
        \"VC\": \"سنت وینسنت و گرنادین\",
        \"VE\": \"ونزوئلا\",
        \"VG\": \"جزایر ویرجین بریتانیا\",
        \"VI\": \"جزایر ویرجین ایالات متحده\",
        \"VN\": \"ویتنام\",
        \"VU\": \"وانواتو\",
        \"WF\": \"والیس و فوتونا\",
        \"WS\": \"ساموآ\",
        \"YE\": \"یمن\",
        \"YT\": \"مایوت\",
        \"ZA\": \"افریقای جنوبی\",
        \"ZM\": \"زامبیا\",
        \"ZW\": \"زیمبابوه\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/fa.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/fa.json");
    }
}