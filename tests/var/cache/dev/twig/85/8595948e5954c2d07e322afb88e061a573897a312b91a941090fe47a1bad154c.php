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

/* vendor/symfony/intl/Resources/data/regions/ks.json */
class __TwigTemplate_1f4c99a962116266dab9f6d99ecfe21dde60e8bf43a7f9cc6ce603524bd67bc6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ks.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ks.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"اؠنڑورا\",
        \"AE\": \"مُتحدہ عرَب امارات\",
        \"AF\": \"اَفغانَستان\",
        \"AG\": \"اؠنٹِگُوا تہٕ باربوڑا\",
        \"AI\": \"انگوئیلا\",
        \"AL\": \"اؠلبانِیا\",
        \"AM\": \"اَرمانِیا\",
        \"AO\": \"انگولا\",
        \"AQ\": \"اینٹارٹِکا\",
        \"AR\": \"أرجَنٹینا\",
        \"AS\": \"اَمریٖکَن سَموا\",
        \"AT\": \"آسٹِیا\",
        \"AU\": \"آسٹریلِیا\",
        \"AW\": \"اَروٗبا\",
        \"AX\": \"ایلینڑ جٔزیٖرٕ\",
        \"AZ\": \"آزَرباجان\",
        \"BA\": \"بوسنِیا تہٕ ہَرزِگووِنا\",
        \"BB\": \"باربیڈاس\",
        \"BD\": \"بَنگلادیش\",
        \"BE\": \"بیلجِیَم\",
        \"BF\": \"بُرکِنا فیسو\",
        \"BG\": \"بَلجیرِیا\",
        \"BH\": \"بحریٖن\",
        \"BI\": \"بورَنڈِ\",
        \"BJ\": \"بِنِن\",
        \"BL\": \"سینٹ بارتَھیلمی\",
        \"BM\": \"بٔرمیوڈا\",
        \"BN\": \"بُرنٔے\",
        \"BO\": \"بولِوِیا\",
        \"BQ\": \"برطانوی قُطبہِ جَنوٗبی علاقہٕ\",
        \"BR\": \"برازِل\",
        \"BS\": \"بَہامَس\",
        \"BT\": \"بوٗٹان\",
        \"BV\": \"بووَٹ جٔزیٖرٕ\",
        \"BW\": \"بوتَسوانا\",
        \"BY\": \"بیلاروٗس\",
        \"BZ\": \"بیلِج\",
        \"CA\": \"کینَڑا\",
        \"CC\": \"کوکَس کیٖلِنگ جٔزیٖرٕ\",
        \"CD\": \"کونگو کِنشاسا\",
        \"CF\": \"مرکٔزی اَفریٖکی جموٗریَت\",
        \"CG\": \"کونگو بٔرزاوِلی\",
        \"CH\": \"سُوِزَرلینڑ\",
        \"CI\": \"اَیوٕری کوسٹ\",
        \"CK\": \"کُک جٔزیٖرٕ\",
        \"CL\": \"چِلی\",
        \"CM\": \"کیمِروٗن\",
        \"CN\": \"چیٖن\",
        \"CO\": \"کولَمبِیا\",
        \"CR\": \"کوسٹا رِکا\",
        \"CU\": \"کیوٗبا\",
        \"CV\": \"کیپ ؤرڑی\",
        \"CX\": \"کرِسمَس جٔزیٖرٕ\",
        \"CY\": \"سایفرس\",
        \"CZ\": \"چیک جَموٗرِیَت\",
        \"DE\": \"جرمٔنی\",
        \"DJ\": \"جِبوٗتی\",
        \"DK\": \"ڈینمارٕک\",
        \"DM\": \"ڈومِنِکا\",
        \"DO\": \"ڈومِنِکَن جموٗرِیَت\",
        \"DZ\": \"اؠلجیرِیا\",
        \"EC\": \"اِکواڑور\",
        \"EE\": \"ایسٹونِیا\",
        \"EG\": \"مِسٔر\",
        \"EH\": \"مشرِقی سَہارا\",
        \"ER\": \"اِرٕٹِیا\",
        \"ES\": \"سٕپین\",
        \"ET\": \"اِتھوپِیا\",
        \"FI\": \"فِنلینڑ\",
        \"FJ\": \"فِجی\",
        \"FK\": \"فٕلاکلینڑ جٔزیٖرٕ\",
        \"FR\": \"فرانس\",
        \"GA\": \"گیبان\",
        \"GB\": \"یُنایٹِڑ کِنگڈَم\",
        \"GD\": \"گرنیڑا\",
        \"GE\": \"جارجِیا\",
        \"GF\": \"فرانسِسی گِانا\",
        \"GG\": \"گیوَنَرسے\",
        \"GH\": \"گانا\",
        \"GI\": \"جِبرالٹَر\",
        \"GL\": \"گریٖنلینڑ\",
        \"GM\": \"گَمبِیا\",
        \"GN\": \"گِنی\",
        \"GP\": \"گَواڑیلوپ\",
        \"GQ\": \"اِکوِٹورِیَل گِنی\",
        \"GR\": \"گریٖس\",
        \"GS\": \"جنوٗبی جارجِیا تہٕ جنوٗبی سینڑوٕچ جٔزیٖرٕ\",
        \"GT\": \"گوتیدالا\",
        \"GU\": \"گُوام\",
        \"GW\": \"گیٖنی بِساو\",
        \"GY\": \"گُیانا\",
        \"HK\": \"ہانگ کانگ ایس اے آر چیٖن\",
        \"HM\": \"ہَرٕڑ جٔزیٖرٕ تہٕ مؠکڈونالڑٕ جٔزیٖرٕ\",
        \"HN\": \"ہانڈوٗرِس\",
        \"HR\": \"کروشِیا\",
        \"HT\": \"ہایتی\",
        \"HU\": \"ہَنگری\",
        \"ID\": \"اِنڑونیشِیا\",
        \"IE\": \"اَیَرلینڑ\",
        \"IL\": \"اِسرایٖل\",
        \"IM\": \"آیِل آف مین\",
        \"IN\": \"ہِندوستان\",
        \"IO\": \"برطانوی بحرِ ہِندۍ علاقہٕ\",
        \"IQ\": \"ایٖراق\",
        \"IR\": \"ایٖران\",
        \"IS\": \"اَیِسلینڑ\",
        \"IT\": \"اِٹلی\",
        \"JE\": \"جٔرسی\",
        \"JM\": \"جَمایکا\",
        \"JP\": \"جاپان\",
        \"KE\": \"کِنیا\",
        \"KG\": \"کِرگِستان\",
        \"KH\": \"کَمبوڑِیا\",
        \"KI\": \"کِرٕباتی\",
        \"KM\": \"کَمورَس\",
        \"KN\": \"سینٹ کِٹَس تہٕ نیوِس\",
        \"KP\": \"شُمٲلی کورِیا\",
        \"KR\": \"جنوٗبی کورِیا\",
        \"KW\": \"کُویت\",
        \"KY\": \"کیمَن جٔزیٖرٕ\",
        \"KZ\": \"کَزاکِستان\",
        \"LA\": \"لاس\",
        \"LB\": \"لؠبنان\",
        \"LC\": \"سینٹ لوٗسِیا\",
        \"LI\": \"لِکٹیسٹیٖن\",
        \"LK\": \"سِریٖلَنکا\",
        \"LR\": \"لایبیرِیا\",
        \"LS\": \"لیسوتھو\",
        \"LT\": \"لِتھُوانِیا\",
        \"LU\": \"لَکسَمبٔرٕگ\",
        \"LV\": \"لیٹوِیا\",
        \"LY\": \"لِبیا\",
        \"MA\": \"موروکو\",
        \"MC\": \"مونیکو\",
        \"MD\": \"مولڑاوِیا\",
        \"ME\": \"موٹونیگِریو\",
        \"MF\": \"سینٹ مارٹِن\",
        \"MG\": \"میڑاگاسکار\",
        \"MH\": \"مارشَل جٔزیٖرٕ\",
        \"ML\": \"مالی\",
        \"MM\": \"مَیَنما بٔرما\",
        \"MN\": \"مَنگولِیا\",
        \"MO\": \"مَکاوو ایس اے آر چیٖن\",
        \"MP\": \"شُمٲلی مارِیانا جٔزیٖرٕ\",
        \"MQ\": \"مارٹِنِک\",
        \"MR\": \"مارٕٹانِیا\",
        \"MS\": \"مانٹسیراٹ\",
        \"MT\": \"مالٹا\",
        \"MU\": \"مورِشَس\",
        \"MV\": \"مالدیٖو\",
        \"MW\": \"ملاوی\",
        \"MX\": \"مؠکسِکو\",
        \"MY\": \"مَلیشِیا\",
        \"MZ\": \"موزَمبِک\",
        \"NA\": \"نامِبِیا\",
        \"NC\": \"نِو کیلِڑونِیا\",
        \"NE\": \"نایجَر\",
        \"NF\": \"نارفاک جٔزیٖرٕ\",
        \"NG\": \"نایجیرِیا\",
        \"NI\": \"ناکاراگُوا\",
        \"NL\": \"نیٖدَرلینڑ\",
        \"NO\": \"ناروے\",
        \"NP\": \"نیپال\",
        \"NR\": \"نارووٗ\",
        \"NU\": \"نیوٗ\",
        \"NZ\": \"نیوٗزِلینڑ\",
        \"OM\": \"اومان\",
        \"PA\": \"پَناما\",
        \"PE\": \"پیٖروٗ\",
        \"PF\": \"فرانسی پولِنیشِیا\",
        \"PG\": \"پاپُوا نیوٗ گیٖنی\",
        \"PH\": \"فِلِپِینس\",
        \"PK\": \"پاکِستان\",
        \"PL\": \"پولینڑ\",
        \"PM\": \"سینٹ پیٖری تہٕ موکیلِیَن\",
        \"PN\": \"پِٹکیرٕنۍ جٔزیٖرٕ\",
        \"PR\": \"پٔرٹو رِکو\",
        \"PS\": \"فَلَستیٖن\",
        \"PT\": \"پُرتِگال\",
        \"PW\": \"پَلاو\",
        \"PY\": \"پَراگُے\",
        \"QA\": \"قَطِر\",
        \"RE\": \"رِیوٗنِیَن\",
        \"RO\": \"رومانِیا\",
        \"RS\": \"سَربِیا\",
        \"RU\": \"روٗس\",
        \"RW\": \"روٗوانڈا\",
        \"SA\": \"سوٗدی عربِیہ\",
        \"SB\": \"سولامان جٔزیٖرٕ\",
        \"SC\": \"سیشَلِس\",
        \"SD\": \"سوٗڈان\",
        \"SE\": \"سُوِڈَن\",
        \"SG\": \"سِنگاپوٗر\",
        \"SH\": \"سینٹ ہؠلِنا\",
        \"SI\": \"سَلووینِیا\",
        \"SJ\": \"سَوالبریڑ تہٕ جان ماییڑ\",
        \"SK\": \"سَلوواکِیا\",
        \"SL\": \"سیٖرالیوون\",
        \"SM\": \"سین میرِنو\",
        \"SN\": \"سینیگَل\",
        \"SO\": \"سومالِیا\",
        \"SR\": \"سُرِنام\",
        \"ST\": \"ساو توم تہٕ پرنسِپی\",
        \"SV\": \"اؠل سَلواڑور\",
        \"SY\": \"شام\",
        \"SZ\": \"سُوزِلینڑ\",
        \"TC\": \"تُرُک تہٕ کیکوس جٔزیٖرٕ\",
        \"TD\": \"چاڑ\",
        \"TF\": \"فرانسِسی جَنوٗبی عَلاقہٕ\",
        \"TG\": \"ٹوگو\",
        \"TH\": \"تھایلینڑ\",
        \"TJ\": \"تاجکِستان\",
        \"TK\": \"توکیلاو\",
        \"TL\": \"مَشرِقی تایمور\",
        \"TM\": \"تُرمِنِستان\",
        \"TN\": \"ٹونیشِیا\",
        \"TO\": \"ٹونگا\",
        \"TR\": \"تُرکی\",
        \"TT\": \"ٹرنِنداد تہٕ ٹوبیگو\",
        \"TV\": \"توٗوالوٗ\",
        \"TW\": \"تایوان\",
        \"TZ\": \"تَنجانِیا\",
        \"UA\": \"یوٗرِکین\",
        \"UG\": \"یوٗگانڑا\",
        \"UM\": \"یوٗنایٹِڑ سِٹیٹِس ماینَر آوُٹلییِنگ جٔزیٖرٕ\",
        \"US\": \"یوٗنایٹِڑ سِٹیٹِس\",
        \"UY\": \"یوٗروگے\",
        \"UZ\": \"اُزبِکِستان\",
        \"VA\": \"ویٹِکَن سِٹی\",
        \"VC\": \"سینٹ وینسؠٹ تہٕ گریناڑاینٕز\",
        \"VE\": \"وینازوٗلا\",
        \"VG\": \"بَرطانوی ؤرجِن جٔزیٖرٕ\",
        \"VI\": \"یوٗ ایس ؤرجِن جٔزیٖرٕ\",
        \"VN\": \"ویٹِنام\",
        \"VU\": \"وانوٗتوٗ\",
        \"WF\": \"والِس تہٕ فیوٗچوٗنا\",
        \"WS\": \"سیمووا\",
        \"YE\": \"یَمَن\",
        \"YT\": \"مَییٹ\",
        \"ZA\": \"جَنوٗبی اَفریٖکا\",
        \"ZM\": \"جامبِیا\",
        \"ZW\": \"زِمبابے\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/ks.json";
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
        \"AD\": \"اؠنڑورا\",
        \"AE\": \"مُتحدہ عرَب امارات\",
        \"AF\": \"اَفغانَستان\",
        \"AG\": \"اؠنٹِگُوا تہٕ باربوڑا\",
        \"AI\": \"انگوئیلا\",
        \"AL\": \"اؠلبانِیا\",
        \"AM\": \"اَرمانِیا\",
        \"AO\": \"انگولا\",
        \"AQ\": \"اینٹارٹِکا\",
        \"AR\": \"أرجَنٹینا\",
        \"AS\": \"اَمریٖکَن سَموا\",
        \"AT\": \"آسٹِیا\",
        \"AU\": \"آسٹریلِیا\",
        \"AW\": \"اَروٗبا\",
        \"AX\": \"ایلینڑ جٔزیٖرٕ\",
        \"AZ\": \"آزَرباجان\",
        \"BA\": \"بوسنِیا تہٕ ہَرزِگووِنا\",
        \"BB\": \"باربیڈاس\",
        \"BD\": \"بَنگلادیش\",
        \"BE\": \"بیلجِیَم\",
        \"BF\": \"بُرکِنا فیسو\",
        \"BG\": \"بَلجیرِیا\",
        \"BH\": \"بحریٖن\",
        \"BI\": \"بورَنڈِ\",
        \"BJ\": \"بِنِن\",
        \"BL\": \"سینٹ بارتَھیلمی\",
        \"BM\": \"بٔرمیوڈا\",
        \"BN\": \"بُرنٔے\",
        \"BO\": \"بولِوِیا\",
        \"BQ\": \"برطانوی قُطبہِ جَنوٗبی علاقہٕ\",
        \"BR\": \"برازِل\",
        \"BS\": \"بَہامَس\",
        \"BT\": \"بوٗٹان\",
        \"BV\": \"بووَٹ جٔزیٖرٕ\",
        \"BW\": \"بوتَسوانا\",
        \"BY\": \"بیلاروٗس\",
        \"BZ\": \"بیلِج\",
        \"CA\": \"کینَڑا\",
        \"CC\": \"کوکَس کیٖلِنگ جٔزیٖرٕ\",
        \"CD\": \"کونگو کِنشاسا\",
        \"CF\": \"مرکٔزی اَفریٖکی جموٗریَت\",
        \"CG\": \"کونگو بٔرزاوِلی\",
        \"CH\": \"سُوِزَرلینڑ\",
        \"CI\": \"اَیوٕری کوسٹ\",
        \"CK\": \"کُک جٔزیٖرٕ\",
        \"CL\": \"چِلی\",
        \"CM\": \"کیمِروٗن\",
        \"CN\": \"چیٖن\",
        \"CO\": \"کولَمبِیا\",
        \"CR\": \"کوسٹا رِکا\",
        \"CU\": \"کیوٗبا\",
        \"CV\": \"کیپ ؤرڑی\",
        \"CX\": \"کرِسمَس جٔزیٖرٕ\",
        \"CY\": \"سایفرس\",
        \"CZ\": \"چیک جَموٗرِیَت\",
        \"DE\": \"جرمٔنی\",
        \"DJ\": \"جِبوٗتی\",
        \"DK\": \"ڈینمارٕک\",
        \"DM\": \"ڈومِنِکا\",
        \"DO\": \"ڈومِنِکَن جموٗرِیَت\",
        \"DZ\": \"اؠلجیرِیا\",
        \"EC\": \"اِکواڑور\",
        \"EE\": \"ایسٹونِیا\",
        \"EG\": \"مِسٔر\",
        \"EH\": \"مشرِقی سَہارا\",
        \"ER\": \"اِرٕٹِیا\",
        \"ES\": \"سٕپین\",
        \"ET\": \"اِتھوپِیا\",
        \"FI\": \"فِنلینڑ\",
        \"FJ\": \"فِجی\",
        \"FK\": \"فٕلاکلینڑ جٔزیٖرٕ\",
        \"FR\": \"فرانس\",
        \"GA\": \"گیبان\",
        \"GB\": \"یُنایٹِڑ کِنگڈَم\",
        \"GD\": \"گرنیڑا\",
        \"GE\": \"جارجِیا\",
        \"GF\": \"فرانسِسی گِانا\",
        \"GG\": \"گیوَنَرسے\",
        \"GH\": \"گانا\",
        \"GI\": \"جِبرالٹَر\",
        \"GL\": \"گریٖنلینڑ\",
        \"GM\": \"گَمبِیا\",
        \"GN\": \"گِنی\",
        \"GP\": \"گَواڑیلوپ\",
        \"GQ\": \"اِکوِٹورِیَل گِنی\",
        \"GR\": \"گریٖس\",
        \"GS\": \"جنوٗبی جارجِیا تہٕ جنوٗبی سینڑوٕچ جٔزیٖرٕ\",
        \"GT\": \"گوتیدالا\",
        \"GU\": \"گُوام\",
        \"GW\": \"گیٖنی بِساو\",
        \"GY\": \"گُیانا\",
        \"HK\": \"ہانگ کانگ ایس اے آر چیٖن\",
        \"HM\": \"ہَرٕڑ جٔزیٖرٕ تہٕ مؠکڈونالڑٕ جٔزیٖرٕ\",
        \"HN\": \"ہانڈوٗرِس\",
        \"HR\": \"کروشِیا\",
        \"HT\": \"ہایتی\",
        \"HU\": \"ہَنگری\",
        \"ID\": \"اِنڑونیشِیا\",
        \"IE\": \"اَیَرلینڑ\",
        \"IL\": \"اِسرایٖل\",
        \"IM\": \"آیِل آف مین\",
        \"IN\": \"ہِندوستان\",
        \"IO\": \"برطانوی بحرِ ہِندۍ علاقہٕ\",
        \"IQ\": \"ایٖراق\",
        \"IR\": \"ایٖران\",
        \"IS\": \"اَیِسلینڑ\",
        \"IT\": \"اِٹلی\",
        \"JE\": \"جٔرسی\",
        \"JM\": \"جَمایکا\",
        \"JP\": \"جاپان\",
        \"KE\": \"کِنیا\",
        \"KG\": \"کِرگِستان\",
        \"KH\": \"کَمبوڑِیا\",
        \"KI\": \"کِرٕباتی\",
        \"KM\": \"کَمورَس\",
        \"KN\": \"سینٹ کِٹَس تہٕ نیوِس\",
        \"KP\": \"شُمٲلی کورِیا\",
        \"KR\": \"جنوٗبی کورِیا\",
        \"KW\": \"کُویت\",
        \"KY\": \"کیمَن جٔزیٖرٕ\",
        \"KZ\": \"کَزاکِستان\",
        \"LA\": \"لاس\",
        \"LB\": \"لؠبنان\",
        \"LC\": \"سینٹ لوٗسِیا\",
        \"LI\": \"لِکٹیسٹیٖن\",
        \"LK\": \"سِریٖلَنکا\",
        \"LR\": \"لایبیرِیا\",
        \"LS\": \"لیسوتھو\",
        \"LT\": \"لِتھُوانِیا\",
        \"LU\": \"لَکسَمبٔرٕگ\",
        \"LV\": \"لیٹوِیا\",
        \"LY\": \"لِبیا\",
        \"MA\": \"موروکو\",
        \"MC\": \"مونیکو\",
        \"MD\": \"مولڑاوِیا\",
        \"ME\": \"موٹونیگِریو\",
        \"MF\": \"سینٹ مارٹِن\",
        \"MG\": \"میڑاگاسکار\",
        \"MH\": \"مارشَل جٔزیٖرٕ\",
        \"ML\": \"مالی\",
        \"MM\": \"مَیَنما بٔرما\",
        \"MN\": \"مَنگولِیا\",
        \"MO\": \"مَکاوو ایس اے آر چیٖن\",
        \"MP\": \"شُمٲلی مارِیانا جٔزیٖرٕ\",
        \"MQ\": \"مارٹِنِک\",
        \"MR\": \"مارٕٹانِیا\",
        \"MS\": \"مانٹسیراٹ\",
        \"MT\": \"مالٹا\",
        \"MU\": \"مورِشَس\",
        \"MV\": \"مالدیٖو\",
        \"MW\": \"ملاوی\",
        \"MX\": \"مؠکسِکو\",
        \"MY\": \"مَلیشِیا\",
        \"MZ\": \"موزَمبِک\",
        \"NA\": \"نامِبِیا\",
        \"NC\": \"نِو کیلِڑونِیا\",
        \"NE\": \"نایجَر\",
        \"NF\": \"نارفاک جٔزیٖرٕ\",
        \"NG\": \"نایجیرِیا\",
        \"NI\": \"ناکاراگُوا\",
        \"NL\": \"نیٖدَرلینڑ\",
        \"NO\": \"ناروے\",
        \"NP\": \"نیپال\",
        \"NR\": \"نارووٗ\",
        \"NU\": \"نیوٗ\",
        \"NZ\": \"نیوٗزِلینڑ\",
        \"OM\": \"اومان\",
        \"PA\": \"پَناما\",
        \"PE\": \"پیٖروٗ\",
        \"PF\": \"فرانسی پولِنیشِیا\",
        \"PG\": \"پاپُوا نیوٗ گیٖنی\",
        \"PH\": \"فِلِپِینس\",
        \"PK\": \"پاکِستان\",
        \"PL\": \"پولینڑ\",
        \"PM\": \"سینٹ پیٖری تہٕ موکیلِیَن\",
        \"PN\": \"پِٹکیرٕنۍ جٔزیٖرٕ\",
        \"PR\": \"پٔرٹو رِکو\",
        \"PS\": \"فَلَستیٖن\",
        \"PT\": \"پُرتِگال\",
        \"PW\": \"پَلاو\",
        \"PY\": \"پَراگُے\",
        \"QA\": \"قَطِر\",
        \"RE\": \"رِیوٗنِیَن\",
        \"RO\": \"رومانِیا\",
        \"RS\": \"سَربِیا\",
        \"RU\": \"روٗس\",
        \"RW\": \"روٗوانڈا\",
        \"SA\": \"سوٗدی عربِیہ\",
        \"SB\": \"سولامان جٔزیٖرٕ\",
        \"SC\": \"سیشَلِس\",
        \"SD\": \"سوٗڈان\",
        \"SE\": \"سُوِڈَن\",
        \"SG\": \"سِنگاپوٗر\",
        \"SH\": \"سینٹ ہؠلِنا\",
        \"SI\": \"سَلووینِیا\",
        \"SJ\": \"سَوالبریڑ تہٕ جان ماییڑ\",
        \"SK\": \"سَلوواکِیا\",
        \"SL\": \"سیٖرالیوون\",
        \"SM\": \"سین میرِنو\",
        \"SN\": \"سینیگَل\",
        \"SO\": \"سومالِیا\",
        \"SR\": \"سُرِنام\",
        \"ST\": \"ساو توم تہٕ پرنسِپی\",
        \"SV\": \"اؠل سَلواڑور\",
        \"SY\": \"شام\",
        \"SZ\": \"سُوزِلینڑ\",
        \"TC\": \"تُرُک تہٕ کیکوس جٔزیٖرٕ\",
        \"TD\": \"چاڑ\",
        \"TF\": \"فرانسِسی جَنوٗبی عَلاقہٕ\",
        \"TG\": \"ٹوگو\",
        \"TH\": \"تھایلینڑ\",
        \"TJ\": \"تاجکِستان\",
        \"TK\": \"توکیلاو\",
        \"TL\": \"مَشرِقی تایمور\",
        \"TM\": \"تُرمِنِستان\",
        \"TN\": \"ٹونیشِیا\",
        \"TO\": \"ٹونگا\",
        \"TR\": \"تُرکی\",
        \"TT\": \"ٹرنِنداد تہٕ ٹوبیگو\",
        \"TV\": \"توٗوالوٗ\",
        \"TW\": \"تایوان\",
        \"TZ\": \"تَنجانِیا\",
        \"UA\": \"یوٗرِکین\",
        \"UG\": \"یوٗگانڑا\",
        \"UM\": \"یوٗنایٹِڑ سِٹیٹِس ماینَر آوُٹلییِنگ جٔزیٖرٕ\",
        \"US\": \"یوٗنایٹِڑ سِٹیٹِس\",
        \"UY\": \"یوٗروگے\",
        \"UZ\": \"اُزبِکِستان\",
        \"VA\": \"ویٹِکَن سِٹی\",
        \"VC\": \"سینٹ وینسؠٹ تہٕ گریناڑاینٕز\",
        \"VE\": \"وینازوٗلا\",
        \"VG\": \"بَرطانوی ؤرجِن جٔزیٖرٕ\",
        \"VI\": \"یوٗ ایس ؤرجِن جٔزیٖرٕ\",
        \"VN\": \"ویٹِنام\",
        \"VU\": \"وانوٗتوٗ\",
        \"WF\": \"والِس تہٕ فیوٗچوٗنا\",
        \"WS\": \"سیمووا\",
        \"YE\": \"یَمَن\",
        \"YT\": \"مَییٹ\",
        \"ZA\": \"جَنوٗبی اَفریٖکا\",
        \"ZM\": \"جامبِیا\",
        \"ZW\": \"زِمبابے\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/ks.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/ks.json");
    }
}