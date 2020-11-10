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

/* vendor/symfony/intl/Resources/data/languages/ps.json */
class __TwigTemplate_97ab93d367981211fd13d021545ad6156d0d87c866491616f140a0ce243ac91a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ps.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ps.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"افري\",
        \"ab\": \"ابخازي\",
        \"ace\": \"اچيني\",
        \"ada\": \"ادانگمي\",
        \"ady\": \"اديغي\",
        \"af\": \"افریکانسي\",
        \"agq\": \"اغیمي\",
        \"ain\": \"اينويي\",
        \"ak\": \"اکاني\",
        \"ale\": \"اليوتي\",
        \"alt\": \"سویل الټای\",
        \"am\": \"امهاري\",
        \"an\": \"اراگونېسي\",
        \"anp\": \"انگيکي\",
        \"ar\": \"عربي\",
        \"ar_001\": \"نوې معياري عربي\",
        \"arn\": \"ماپوچه\",
        \"arp\": \"اراپاهوي\",
        \"as\": \"اسامي\",
        \"asa\": \"اسويي\",
        \"ast\": \"استورياني\",
        \"av\": \"اواري\",
        \"awa\": \"اوادي\",
        \"ay\": \"ایماري\",
        \"az\": \"اذربایجاني\",
        \"ba\": \"باشکير\",
        \"bal\": \"بلوڅي\",
        \"ban\": \"بالنی\",
        \"bas\": \"باسا\",
        \"be\": \"بېلاروسي\",
        \"bem\": \"بيمبا\",
        \"bez\": \"بينا\",
        \"bg\": \"بلغاري\",
        \"bho\": \"بهوجپوري\",
        \"bi\": \"بسلاما\",
        \"bin\": \"بینی\",
        \"bla\": \"سکسيکا\",
        \"bm\": \"بمبارا\",
        \"bn\": \"بنگالي\",
        \"bo\": \"تبتي\",
        \"br\": \"برېتون\",
        \"brx\": \"بودو\",
        \"bs\": \"بوسني\",
        \"bug\": \"بگنيايي\",
        \"byn\": \"بلین\",
        \"ca\": \"کټلاني\",
        \"ccp\": \"چکما\",
        \"ce\": \"چيچني\",
        \"ceb\": \"سیبوانوي\",
        \"cgg\": \"چيگايي\",
        \"ch\": \"چمورو\",
        \"chk\": \"چواوکي\",
        \"chm\": \"ماري\",
        \"cho\": \"چوکټاوي\",
        \"chr\": \"چېروکي\",
        \"chy\": \"شيني\",
        \"ckb\": \"منځنۍ کوردي\",
        \"co\": \"کورسيکاني\",
        \"crs\": \"سسيلوا ڪروئل فرانسوي\",
        \"cs\": \"چېکي\",
        \"cu\": \"د کليسا سلاوي\",
        \"cv\": \"چوواشي\",
        \"cy\": \"ويلشي\",
        \"da\": \"ډنمارکي\",
        \"dak\": \"داکوتا\",
        \"dar\": \"درگوا\",
        \"dav\": \"ټایټا\",
        \"de\": \"الماني\",
        \"de_AT\": \"اتريشي آلماني\",
        \"de_CH\": \"سوئس لوی جرمن\",
        \"dgr\": \"داگرب\",
        \"dje\": \"زرما\",
        \"dsb\": \"کښته سربيايي\",
        \"dua\": \"دوالا\",
        \"dv\": \"ديویهی\",
        \"dyo\": \"جولا فوني\",
        \"dz\": \"ژونگکه\",
        \"dzg\": \"ډزاګا\",
        \"ebu\": \"ايمبو\",
        \"ee\": \"ايو\",
        \"efi\": \"افک\",
        \"eka\": \"اکجک\",
        \"el\": \"یوناني\",
        \"en\": \"انګليسي\",
        \"en_AU\": \"آسټرالياوي انګليسي\",
        \"en_CA\": \"کاناډايي انګلیسي\",
        \"en_GB\": \"بريتانوی انګلیسي\",
        \"eo\": \"اسپرانتو\",
        \"es\": \"هسپانوي\",
        \"es_419\": \"لاتيني امريکايي هسپانوي\",
        \"es_ES\": \"اروپايي هسپانوي\",
        \"es_MX\": \"ميکسيکي هسپانوي\",
        \"et\": \"حبشي\",
        \"eu\": \"باسکي\",
        \"ewo\": \"اوونڊو\",
        \"fa\": \"فارسي\",
        \"ff\": \"فولاح\",
        \"fi\": \"فینلنډي\",
        \"fil\": \"فلیپیني\",
        \"fj\": \"فجیان\",
        \"fo\": \"فاروئې\",
        \"fon\": \"فان\",
        \"fr\": \"فرانسوي\",
        \"fr_CA\": \"کاناډايي فرانسوي\",
        \"fr_CH\": \"سويسي فرانسوي\",
        \"fur\": \"فرائیلیین\",
        \"fy\": \"لوېديځ فريشي\",
        \"ga\": \"ائيرلېنډي\",
        \"gaa\": \"gaa\",
        \"gd\": \"سکاټلېنډي ګېلک\",
        \"gez\": \"ګیز\",
        \"gil\": \"گلبرتي\",
        \"gl\": \"ګلېشيايي\",
        \"gn\": \"ګوراني\",
        \"gor\": \"ګورن ټالو\",
        \"gsw\": \"سویس جرمن\",
        \"gu\": \"ګجراتي\",
        \"guz\": \"ګوسي\",
        \"gv\": \"مینکس\",
        \"gwi\": \"ګیچین\",
        \"ha\": \"هوسا\",
        \"haw\": \"هوایی\",
        \"he\": \"عبراني\",
        \"hi\": \"هندي\",
        \"hil\": \"ھلیګینون\",
        \"hmn\": \"همونګ\",
        \"hr\": \"کروايشيايي\",
        \"hsb\": \"پورته سربيايي\",
        \"ht\": \"هيټي کريول\",
        \"hu\": \"هنگري\",
        \"hup\": \"ھوپا\",
        \"hy\": \"آرمينيايي\",
        \"hz\": \"هیرورو\",
        \"ia\": \"انټرلنګوا\",
        \"iba\": \"ابن\",
        \"ibb\": \"ابیبیو\",
        \"id\": \"انډونېزي\",
        \"ig\": \"اګبو\",
        \"ii\": \"سیچیان یی\",
        \"ilo\": \"الوکو\",
        \"inh\": \"انگش\",
        \"io\": \"اڊو\",
        \"is\": \"ايسلنډي\",
        \"it\": \"ایټالوي\",
        \"iu\": \"انوکتیتوت\",
        \"ja\": \"جاپاني\",
        \"jbo\": \"لوجبان\",
        \"jgo\": \"نګومبا\",
        \"jmc\": \"ماچمی\",
        \"jv\": \"جاوايي\",
        \"ka\": \"جورجيائي\",
        \"kab\": \"کیبیل\",
        \"kac\": \"کاچین\",
        \"kaj\": \"ججو\",
        \"kam\": \"کامبا\",
        \"kbd\": \"کابیرین\",
        \"kcg\": \"تایپ\",
        \"kde\": \"ميکونډي\",
        \"kea\": \"کابوورډیانو\",
        \"kfo\": \"کورو\",
        \"kha\": \"خاسې\",
        \"khq\": \"کویرا چینی\",
        \"ki\": \"ککوؤو\",
        \"kj\": \"کواناما\",
        \"kk\": \"قازق\",
        \"kkj\": \"کاکو\",
        \"kl\": \"کلالیسٹ\",
        \"kln\": \"کلینجن\",
        \"km\": \"خمر\",
        \"kmb\": \"کیمبوندو\",
        \"kn\": \"کناډا\",
        \"ko\": \"کوریایی\",
        \"kok\": \"کونکاني\",
        \"kpe\": \"کیلي\",
        \"kr\": \"کنوری\",
        \"krc\": \"کراچی بالکر\",
        \"krl\": \"کاریلین\",
        \"kru\": \"کورخ\",
        \"ks\": \"کشمیري\",
        \"ksb\": \"شمبالا\",
        \"ksf\": \"بفیا\",
        \"ksh\": \"کولوګنيايي\",
        \"ku\": \"کردي\",
        \"kum\": \"کومک\",
        \"kv\": \"کومی\",
        \"kw\": \"کورنيشي\",
        \"ky\": \"کرغيزي\",
        \"la\": \"لاتیني\",
        \"lad\": \"لاډینو\",
        \"lag\": \"لنګی\",
        \"lb\": \"لوګزامبورګي\",
        \"lez\": \"لیګغیان\",
        \"lg\": \"ګانده\",
        \"li\": \"لمبرگیانی\",
        \"lkt\": \"لکوټا\",
        \"ln\": \"لنګالا\",
        \"lo\": \"لاو\",
        \"loz\": \"لوزی\",
        \"lrc\": \"شمالي لوری\",
        \"lt\": \"ليتواني\",
        \"lu\": \"لوبا-کټنګا\",
        \"lua\": \"لبا لولوا\",
        \"lun\": \"لندا\",
        \"luo\": \"لو\",
        \"lus\": \"ميزو\",
        \"luy\": \"لویا\",
        \"lv\": \"لېټواني\",
        \"mad\": \"مدراسی\",
        \"mag\": \"مګهي\",
        \"mai\": \"مایتھلي\",
        \"mak\": \"مکاسار\",
        \"mas\": \"ماسائي\",
        \"mdf\": \"موکشا\",
        \"men\": \"مینڊي\",
        \"mer\": \"ميرو\",
        \"mfe\": \"ماریسیسن\",
        \"mg\": \"ملغاسي\",
        \"mgh\": \"مکھوامیتو\",
        \"mgo\": \"ميټا\",
        \"mh\": \"مارشلیز\",
        \"mi\": \"ماوري\",
        \"mic\": \"ممکق\",
        \"min\": \"مينيگاباو\",
        \"mk\": \"مقدوني\",
        \"ml\": \"مالايالم\",
        \"mn\": \"منګولیایی\",
        \"mni\": \"مانی پوری\",
        \"moh\": \"محاواک\",
        \"mos\": \"ماسي\",
        \"mr\": \"مراټهي\",
        \"ms\": \"ملایا\",
        \"mt\": \"مالټايي\",
        \"mua\": \"مندانګ\",
        \"mus\": \"کريکي\",
        \"mwl\": \"مرانديز\",
        \"my\": \"برمایی\",
        \"myv\": \"ارزيا\",
        \"mzn\": \"مزاندراني\",
        \"na\": \"نایرو\",
        \"nap\": \"نيپالين\",
        \"naq\": \"ناما\",
        \"nb\": \"ناروې بوکمال\",
        \"nd\": \"شمالي نديبل\",
        \"nds\": \"کښته آلماني\",
        \"ne\": \"نېپالي\",
        \"new\": \"نيواري\",
        \"ng\": \"ندونگا\",
        \"nia\": \"نياس\",
        \"niu\": \"نیان\",
        \"nl\": \"هالېنډي\",
        \"nl_BE\": \"فلېمېشي\",
        \"nmg\": \"کواسیو\",
        \"nn\": \"ناروېئي (نائنورسک)\",
        \"nnh\": \"نایجیمون\",
        \"nog\": \"نوګی\",
        \"nqo\": \"نکو\",
        \"nr\": \"سويلي نديبيل\",
        \"nso\": \"شمالي سوتو\",
        \"nus\": \"نویر\",
        \"nv\": \"نواجو\",
        \"ny\": \"نیانجا\",
        \"nyn\": \"نینکول\",
        \"oc\": \"اوکسيټاني\",
        \"om\": \"اورومو\",
        \"or\": \"اوڊيا\",
        \"os\": \"اوسيټک\",
        \"pa\": \"پنجابي\",
        \"pag\": \"پانګاسین\",
        \"pam\": \"پمپانگا\",
        \"pap\": \"پاپيامينتو\",
        \"pau\": \"پالان\",
        \"pcm\": \"نائجیریا پیدجن\",
        \"pl\": \"پولنډي\",
        \"prg\": \"پروشين\",
        \"ps\": \"پښتو\",
        \"pt\": \"پورتګالي\",
        \"pt_BR\": \"برازیلي پرتګالي\",
        \"pt_PT\": \"اروپايي پرتګالي\",
        \"qu\": \"کېچوا\",
        \"quc\": \"کچی\",
        \"rap\": \"رپانوئي\",
        \"rar\": \"راروټانګان\",
        \"rm\": \"رومانیش\",
        \"rn\": \"رونډی\",
        \"ro\": \"رومانیایی\",
        \"ro_MD\": \"مولداویایی\",
        \"rof\": \"رومبو\",
        \"root\": \"روټ\",
        \"ru\": \"روسي\",
        \"rup\": \"اروماني\",
        \"rw\": \"کینیارونډا\",
        \"rwk\": \"روا\",
        \"sa\": \"سنسکریټ\",
        \"sad\": \"سنډاوی\",
        \"sah\": \"سخا\",
        \"saq\": \"سمبورو\",
        \"sat\": \"سنتالي\",
        \"sba\": \"نګبای\",
        \"sbp\": \"سانګوو\",
        \"sc\": \"سارڊيني\",
        \"scn\": \"سیلیسي\",
        \"sco\": \"سکاټس\",
        \"sd\": \"سندهي\",
        \"se\": \"شمالي سامي\",
        \"seh\": \"سینا\",
        \"ses\": \"کوییرابورو سینی\",
        \"sg\": \"سانګو\",
        \"shi\": \"تاکلهیټ\",
        \"shn\": \"شان\",
        \"si\": \"سينهالي\",
        \"sk\": \"سلوواکي\",
        \"sl\": \"سلوواني\",
        \"sm\": \"ساموآن\",
        \"sma\": \"سویلي سامی\",
        \"smj\": \"لول سامي\",
        \"smn\": \"اناري سميع\",
        \"sms\": \"سکولټ سمیع\",
        \"sn\": \"شونا\",
        \"snk\": \"سونینګ\",
        \"so\": \"سومالي\",
        \"sq\": \"الباني\",
        \"sr\": \"سربيائي\",
        \"srn\": \"سوران ټونګو\",
        \"ss\": \"سواتی\",
        \"ssy\": \"سهو\",
        \"st\": \"سويلي سوتو\",
        \"su\": \"سوډاني\",
        \"suk\": \"سکوما\",
        \"sv\": \"سویډنی\",
        \"sw\": \"سواهېلي\",
        \"sw_CD\": \"کانګو سواهلی\",
        \"swb\": \"کومورياني\",
        \"syr\": \"سوریاني\",
        \"ta\": \"تامل\",
        \"te\": \"تېليګو\",
        \"tem\": \"تیمني\",
        \"teo\": \"تیسو\",
        \"tet\": \"تتوم\",
        \"tg\": \"تاجکي\",
        \"th\": \"تايلېنډي\",
        \"ti\": \"تيګريني\",
        \"tig\": \"تیګر\",
        \"tk\": \"ترکمني\",
        \"tlh\": \"کلينګاني\",
        \"tn\": \"سووانا\",
        \"to\": \"تونګان\",
        \"tpi\": \"توک پیسین\",
        \"tr\": \"ترکي\",
        \"trv\": \"تاروکو\",
        \"ts\": \"سونګا\",
        \"tt\": \"تاتار\",
        \"tum\": \"تامبوکا\",
        \"tvl\": \"تووالو\",
        \"twq\": \"تساواق\",
        \"ty\": \"تاهیتي\",
        \"tyv\": \"توینیان\",
        \"tzm\": \"مرکزی اطلس تمازائيٹ\",
        \"udm\": \"ادمورت\",
        \"ug\": \"اويغوري\",
        \"uk\": \"اوکرايني\",
        \"umb\": \"امبوندو\",
        \"ur\": \"اردو\",
        \"uz\": \"اوزبکي\",
        \"vai\": \"وای\",
        \"ve\": \"ویندا\",
        \"vi\": \"وېتنامي\",
        \"vo\": \"والاپوک\",
        \"vun\": \"وونجو\",
        \"wa\": \"والون\",
        \"wae\": \"ولسیر\",
        \"wal\": \"ولایټا\",
        \"war\": \"وارۍ\",
        \"wo\": \"ولوف\",
        \"xal\": \"کالمک\",
        \"xh\": \"خوسا\",
        \"xog\": \"سوګا\",
        \"yav\": \"ینګبین\",
        \"ybb\": \"یمبا\",
        \"yi\": \"يديش\",
        \"yo\": \"یوروبا\",
        \"yue\": \"کانټوني\",
        \"zgh\": \"معياري مراکشي تمازيټ\",
        \"zh\": \"چیني\",
        \"zh_Hans\": \"ساده چيني\",
        \"zh_Hant\": \"دوديزه چيني\",
        \"zu\": \"زولو\",
        \"zun\": \"زوني\",
        \"zza\": \"زازا\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ps.json";
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
        \"aa\": \"افري\",
        \"ab\": \"ابخازي\",
        \"ace\": \"اچيني\",
        \"ada\": \"ادانگمي\",
        \"ady\": \"اديغي\",
        \"af\": \"افریکانسي\",
        \"agq\": \"اغیمي\",
        \"ain\": \"اينويي\",
        \"ak\": \"اکاني\",
        \"ale\": \"اليوتي\",
        \"alt\": \"سویل الټای\",
        \"am\": \"امهاري\",
        \"an\": \"اراگونېسي\",
        \"anp\": \"انگيکي\",
        \"ar\": \"عربي\",
        \"ar_001\": \"نوې معياري عربي\",
        \"arn\": \"ماپوچه\",
        \"arp\": \"اراپاهوي\",
        \"as\": \"اسامي\",
        \"asa\": \"اسويي\",
        \"ast\": \"استورياني\",
        \"av\": \"اواري\",
        \"awa\": \"اوادي\",
        \"ay\": \"ایماري\",
        \"az\": \"اذربایجاني\",
        \"ba\": \"باشکير\",
        \"bal\": \"بلوڅي\",
        \"ban\": \"بالنی\",
        \"bas\": \"باسا\",
        \"be\": \"بېلاروسي\",
        \"bem\": \"بيمبا\",
        \"bez\": \"بينا\",
        \"bg\": \"بلغاري\",
        \"bho\": \"بهوجپوري\",
        \"bi\": \"بسلاما\",
        \"bin\": \"بینی\",
        \"bla\": \"سکسيکا\",
        \"bm\": \"بمبارا\",
        \"bn\": \"بنگالي\",
        \"bo\": \"تبتي\",
        \"br\": \"برېتون\",
        \"brx\": \"بودو\",
        \"bs\": \"بوسني\",
        \"bug\": \"بگنيايي\",
        \"byn\": \"بلین\",
        \"ca\": \"کټلاني\",
        \"ccp\": \"چکما\",
        \"ce\": \"چيچني\",
        \"ceb\": \"سیبوانوي\",
        \"cgg\": \"چيگايي\",
        \"ch\": \"چمورو\",
        \"chk\": \"چواوکي\",
        \"chm\": \"ماري\",
        \"cho\": \"چوکټاوي\",
        \"chr\": \"چېروکي\",
        \"chy\": \"شيني\",
        \"ckb\": \"منځنۍ کوردي\",
        \"co\": \"کورسيکاني\",
        \"crs\": \"سسيلوا ڪروئل فرانسوي\",
        \"cs\": \"چېکي\",
        \"cu\": \"د کليسا سلاوي\",
        \"cv\": \"چوواشي\",
        \"cy\": \"ويلشي\",
        \"da\": \"ډنمارکي\",
        \"dak\": \"داکوتا\",
        \"dar\": \"درگوا\",
        \"dav\": \"ټایټا\",
        \"de\": \"الماني\",
        \"de_AT\": \"اتريشي آلماني\",
        \"de_CH\": \"سوئس لوی جرمن\",
        \"dgr\": \"داگرب\",
        \"dje\": \"زرما\",
        \"dsb\": \"کښته سربيايي\",
        \"dua\": \"دوالا\",
        \"dv\": \"ديویهی\",
        \"dyo\": \"جولا فوني\",
        \"dz\": \"ژونگکه\",
        \"dzg\": \"ډزاګا\",
        \"ebu\": \"ايمبو\",
        \"ee\": \"ايو\",
        \"efi\": \"افک\",
        \"eka\": \"اکجک\",
        \"el\": \"یوناني\",
        \"en\": \"انګليسي\",
        \"en_AU\": \"آسټرالياوي انګليسي\",
        \"en_CA\": \"کاناډايي انګلیسي\",
        \"en_GB\": \"بريتانوی انګلیسي\",
        \"eo\": \"اسپرانتو\",
        \"es\": \"هسپانوي\",
        \"es_419\": \"لاتيني امريکايي هسپانوي\",
        \"es_ES\": \"اروپايي هسپانوي\",
        \"es_MX\": \"ميکسيکي هسپانوي\",
        \"et\": \"حبشي\",
        \"eu\": \"باسکي\",
        \"ewo\": \"اوونڊو\",
        \"fa\": \"فارسي\",
        \"ff\": \"فولاح\",
        \"fi\": \"فینلنډي\",
        \"fil\": \"فلیپیني\",
        \"fj\": \"فجیان\",
        \"fo\": \"فاروئې\",
        \"fon\": \"فان\",
        \"fr\": \"فرانسوي\",
        \"fr_CA\": \"کاناډايي فرانسوي\",
        \"fr_CH\": \"سويسي فرانسوي\",
        \"fur\": \"فرائیلیین\",
        \"fy\": \"لوېديځ فريشي\",
        \"ga\": \"ائيرلېنډي\",
        \"gaa\": \"gaa\",
        \"gd\": \"سکاټلېنډي ګېلک\",
        \"gez\": \"ګیز\",
        \"gil\": \"گلبرتي\",
        \"gl\": \"ګلېشيايي\",
        \"gn\": \"ګوراني\",
        \"gor\": \"ګورن ټالو\",
        \"gsw\": \"سویس جرمن\",
        \"gu\": \"ګجراتي\",
        \"guz\": \"ګوسي\",
        \"gv\": \"مینکس\",
        \"gwi\": \"ګیچین\",
        \"ha\": \"هوسا\",
        \"haw\": \"هوایی\",
        \"he\": \"عبراني\",
        \"hi\": \"هندي\",
        \"hil\": \"ھلیګینون\",
        \"hmn\": \"همونګ\",
        \"hr\": \"کروايشيايي\",
        \"hsb\": \"پورته سربيايي\",
        \"ht\": \"هيټي کريول\",
        \"hu\": \"هنگري\",
        \"hup\": \"ھوپا\",
        \"hy\": \"آرمينيايي\",
        \"hz\": \"هیرورو\",
        \"ia\": \"انټرلنګوا\",
        \"iba\": \"ابن\",
        \"ibb\": \"ابیبیو\",
        \"id\": \"انډونېزي\",
        \"ig\": \"اګبو\",
        \"ii\": \"سیچیان یی\",
        \"ilo\": \"الوکو\",
        \"inh\": \"انگش\",
        \"io\": \"اڊو\",
        \"is\": \"ايسلنډي\",
        \"it\": \"ایټالوي\",
        \"iu\": \"انوکتیتوت\",
        \"ja\": \"جاپاني\",
        \"jbo\": \"لوجبان\",
        \"jgo\": \"نګومبا\",
        \"jmc\": \"ماچمی\",
        \"jv\": \"جاوايي\",
        \"ka\": \"جورجيائي\",
        \"kab\": \"کیبیل\",
        \"kac\": \"کاچین\",
        \"kaj\": \"ججو\",
        \"kam\": \"کامبا\",
        \"kbd\": \"کابیرین\",
        \"kcg\": \"تایپ\",
        \"kde\": \"ميکونډي\",
        \"kea\": \"کابوورډیانو\",
        \"kfo\": \"کورو\",
        \"kha\": \"خاسې\",
        \"khq\": \"کویرا چینی\",
        \"ki\": \"ککوؤو\",
        \"kj\": \"کواناما\",
        \"kk\": \"قازق\",
        \"kkj\": \"کاکو\",
        \"kl\": \"کلالیسٹ\",
        \"kln\": \"کلینجن\",
        \"km\": \"خمر\",
        \"kmb\": \"کیمبوندو\",
        \"kn\": \"کناډا\",
        \"ko\": \"کوریایی\",
        \"kok\": \"کونکاني\",
        \"kpe\": \"کیلي\",
        \"kr\": \"کنوری\",
        \"krc\": \"کراچی بالکر\",
        \"krl\": \"کاریلین\",
        \"kru\": \"کورخ\",
        \"ks\": \"کشمیري\",
        \"ksb\": \"شمبالا\",
        \"ksf\": \"بفیا\",
        \"ksh\": \"کولوګنيايي\",
        \"ku\": \"کردي\",
        \"kum\": \"کومک\",
        \"kv\": \"کومی\",
        \"kw\": \"کورنيشي\",
        \"ky\": \"کرغيزي\",
        \"la\": \"لاتیني\",
        \"lad\": \"لاډینو\",
        \"lag\": \"لنګی\",
        \"lb\": \"لوګزامبورګي\",
        \"lez\": \"لیګغیان\",
        \"lg\": \"ګانده\",
        \"li\": \"لمبرگیانی\",
        \"lkt\": \"لکوټا\",
        \"ln\": \"لنګالا\",
        \"lo\": \"لاو\",
        \"loz\": \"لوزی\",
        \"lrc\": \"شمالي لوری\",
        \"lt\": \"ليتواني\",
        \"lu\": \"لوبا-کټنګا\",
        \"lua\": \"لبا لولوا\",
        \"lun\": \"لندا\",
        \"luo\": \"لو\",
        \"lus\": \"ميزو\",
        \"luy\": \"لویا\",
        \"lv\": \"لېټواني\",
        \"mad\": \"مدراسی\",
        \"mag\": \"مګهي\",
        \"mai\": \"مایتھلي\",
        \"mak\": \"مکاسار\",
        \"mas\": \"ماسائي\",
        \"mdf\": \"موکشا\",
        \"men\": \"مینڊي\",
        \"mer\": \"ميرو\",
        \"mfe\": \"ماریسیسن\",
        \"mg\": \"ملغاسي\",
        \"mgh\": \"مکھوامیتو\",
        \"mgo\": \"ميټا\",
        \"mh\": \"مارشلیز\",
        \"mi\": \"ماوري\",
        \"mic\": \"ممکق\",
        \"min\": \"مينيگاباو\",
        \"mk\": \"مقدوني\",
        \"ml\": \"مالايالم\",
        \"mn\": \"منګولیایی\",
        \"mni\": \"مانی پوری\",
        \"moh\": \"محاواک\",
        \"mos\": \"ماسي\",
        \"mr\": \"مراټهي\",
        \"ms\": \"ملایا\",
        \"mt\": \"مالټايي\",
        \"mua\": \"مندانګ\",
        \"mus\": \"کريکي\",
        \"mwl\": \"مرانديز\",
        \"my\": \"برمایی\",
        \"myv\": \"ارزيا\",
        \"mzn\": \"مزاندراني\",
        \"na\": \"نایرو\",
        \"nap\": \"نيپالين\",
        \"naq\": \"ناما\",
        \"nb\": \"ناروې بوکمال\",
        \"nd\": \"شمالي نديبل\",
        \"nds\": \"کښته آلماني\",
        \"ne\": \"نېپالي\",
        \"new\": \"نيواري\",
        \"ng\": \"ندونگا\",
        \"nia\": \"نياس\",
        \"niu\": \"نیان\",
        \"nl\": \"هالېنډي\",
        \"nl_BE\": \"فلېمېشي\",
        \"nmg\": \"کواسیو\",
        \"nn\": \"ناروېئي (نائنورسک)\",
        \"nnh\": \"نایجیمون\",
        \"nog\": \"نوګی\",
        \"nqo\": \"نکو\",
        \"nr\": \"سويلي نديبيل\",
        \"nso\": \"شمالي سوتو\",
        \"nus\": \"نویر\",
        \"nv\": \"نواجو\",
        \"ny\": \"نیانجا\",
        \"nyn\": \"نینکول\",
        \"oc\": \"اوکسيټاني\",
        \"om\": \"اورومو\",
        \"or\": \"اوڊيا\",
        \"os\": \"اوسيټک\",
        \"pa\": \"پنجابي\",
        \"pag\": \"پانګاسین\",
        \"pam\": \"پمپانگا\",
        \"pap\": \"پاپيامينتو\",
        \"pau\": \"پالان\",
        \"pcm\": \"نائجیریا پیدجن\",
        \"pl\": \"پولنډي\",
        \"prg\": \"پروشين\",
        \"ps\": \"پښتو\",
        \"pt\": \"پورتګالي\",
        \"pt_BR\": \"برازیلي پرتګالي\",
        \"pt_PT\": \"اروپايي پرتګالي\",
        \"qu\": \"کېچوا\",
        \"quc\": \"کچی\",
        \"rap\": \"رپانوئي\",
        \"rar\": \"راروټانګان\",
        \"rm\": \"رومانیش\",
        \"rn\": \"رونډی\",
        \"ro\": \"رومانیایی\",
        \"ro_MD\": \"مولداویایی\",
        \"rof\": \"رومبو\",
        \"root\": \"روټ\",
        \"ru\": \"روسي\",
        \"rup\": \"اروماني\",
        \"rw\": \"کینیارونډا\",
        \"rwk\": \"روا\",
        \"sa\": \"سنسکریټ\",
        \"sad\": \"سنډاوی\",
        \"sah\": \"سخا\",
        \"saq\": \"سمبورو\",
        \"sat\": \"سنتالي\",
        \"sba\": \"نګبای\",
        \"sbp\": \"سانګوو\",
        \"sc\": \"سارڊيني\",
        \"scn\": \"سیلیسي\",
        \"sco\": \"سکاټس\",
        \"sd\": \"سندهي\",
        \"se\": \"شمالي سامي\",
        \"seh\": \"سینا\",
        \"ses\": \"کوییرابورو سینی\",
        \"sg\": \"سانګو\",
        \"shi\": \"تاکلهیټ\",
        \"shn\": \"شان\",
        \"si\": \"سينهالي\",
        \"sk\": \"سلوواکي\",
        \"sl\": \"سلوواني\",
        \"sm\": \"ساموآن\",
        \"sma\": \"سویلي سامی\",
        \"smj\": \"لول سامي\",
        \"smn\": \"اناري سميع\",
        \"sms\": \"سکولټ سمیع\",
        \"sn\": \"شونا\",
        \"snk\": \"سونینګ\",
        \"so\": \"سومالي\",
        \"sq\": \"الباني\",
        \"sr\": \"سربيائي\",
        \"srn\": \"سوران ټونګو\",
        \"ss\": \"سواتی\",
        \"ssy\": \"سهو\",
        \"st\": \"سويلي سوتو\",
        \"su\": \"سوډاني\",
        \"suk\": \"سکوما\",
        \"sv\": \"سویډنی\",
        \"sw\": \"سواهېلي\",
        \"sw_CD\": \"کانګو سواهلی\",
        \"swb\": \"کومورياني\",
        \"syr\": \"سوریاني\",
        \"ta\": \"تامل\",
        \"te\": \"تېليګو\",
        \"tem\": \"تیمني\",
        \"teo\": \"تیسو\",
        \"tet\": \"تتوم\",
        \"tg\": \"تاجکي\",
        \"th\": \"تايلېنډي\",
        \"ti\": \"تيګريني\",
        \"tig\": \"تیګر\",
        \"tk\": \"ترکمني\",
        \"tlh\": \"کلينګاني\",
        \"tn\": \"سووانا\",
        \"to\": \"تونګان\",
        \"tpi\": \"توک پیسین\",
        \"tr\": \"ترکي\",
        \"trv\": \"تاروکو\",
        \"ts\": \"سونګا\",
        \"tt\": \"تاتار\",
        \"tum\": \"تامبوکا\",
        \"tvl\": \"تووالو\",
        \"twq\": \"تساواق\",
        \"ty\": \"تاهیتي\",
        \"tyv\": \"توینیان\",
        \"tzm\": \"مرکزی اطلس تمازائيٹ\",
        \"udm\": \"ادمورت\",
        \"ug\": \"اويغوري\",
        \"uk\": \"اوکرايني\",
        \"umb\": \"امبوندو\",
        \"ur\": \"اردو\",
        \"uz\": \"اوزبکي\",
        \"vai\": \"وای\",
        \"ve\": \"ویندا\",
        \"vi\": \"وېتنامي\",
        \"vo\": \"والاپوک\",
        \"vun\": \"وونجو\",
        \"wa\": \"والون\",
        \"wae\": \"ولسیر\",
        \"wal\": \"ولایټا\",
        \"war\": \"وارۍ\",
        \"wo\": \"ولوف\",
        \"xal\": \"کالمک\",
        \"xh\": \"خوسا\",
        \"xog\": \"سوګا\",
        \"yav\": \"ینګبین\",
        \"ybb\": \"یمبا\",
        \"yi\": \"يديش\",
        \"yo\": \"یوروبا\",
        \"yue\": \"کانټوني\",
        \"zgh\": \"معياري مراکشي تمازيټ\",
        \"zh\": \"چیني\",
        \"zh_Hans\": \"ساده چيني\",
        \"zh_Hant\": \"دوديزه چيني\",
        \"zu\": \"زولو\",
        \"zun\": \"زوني\",
        \"zza\": \"زازا\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ps.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ps.json");
    }
}
