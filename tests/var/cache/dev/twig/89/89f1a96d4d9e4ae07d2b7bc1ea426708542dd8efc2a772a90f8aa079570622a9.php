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

/* vendor/symfony/intl/Resources/data/languages/sd.json */
class __TwigTemplate_a292b66b70794953619cf06ec049673549cbea3ebf316b72b388f2efc46e92b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"افار\",
        \"ab\": \"ابقازیان\",
        \"ace\": \"اچائينيز\",
        \"ada\": \"ادنگمي\",
        \"ady\": \"اديگهي\",
        \"af\": \"آفريڪي\",
        \"agq\": \"اگهيم\",
        \"ain\": \"آئينو\",
        \"ak\": \"اڪان\",
        \"ale\": \"اليوٽ\",
        \"alt\": \"ڏکڻ التائي\",
        \"am\": \"امهاري\",
        \"an\": \"ارگني\",
        \"anp\": \"انجيڪا\",
        \"ar\": \"عربي\",
        \"ar_001\": \"جديد معياري عربي\",
        \"arn\": \"ماپوچي\",
        \"arp\": \"اراپائو\",
        \"as\": \"آسامي\",
        \"asa\": \"اسو\",
        \"ast\": \"اسٽورين\",
        \"av\": \"اويرس\",
        \"awa\": \"اواڌي\",
        \"ay\": \"ایمارا\",
        \"az\": \"آزربائيجاني\",
        \"ba\": \"بشڪر\",
        \"ban\": \"بالي\",
        \"bas\": \"باسا\",
        \"be\": \"بيلاروسي\",
        \"bem\": \"بيمبا\",
        \"bez\": \"بينا\",
        \"bg\": \"بلغاريائي\",
        \"bho\": \"ڀوجپوري\",
        \"bi\": \"بسلاما\",
        \"bin\": \"بني\",
        \"bla\": \"سڪسڪا\",
        \"bm\": \"بمبارا\",
        \"bn\": \"بنگلا\",
        \"bo\": \"تبيتائي\",
        \"br\": \"بريٽن\",
        \"brx\": \"بودو\",
        \"bs\": \"بوسنيائي\",
        \"bug\": \"بگنيز\",
        \"byn\": \"بلن\",
        \"ca\": \"ڪيٽالان\",
        \"ccp\": \"چمڪا\",
        \"ce\": \"چیچن\",
        \"ceb\": \"سبوانو\",
        \"cgg\": \"چگا\",
        \"ch\": \"چمورو\",
        \"chk\": \"چڪيز\",
        \"chm\": \"ماري\",
        \"cho\": \"چوڪ تو\",
        \"chr\": \"چروڪي\",
        \"chy\": \"چايان\",
        \"ckb\": \"مرڪزي ڪردش\",
        \"co\": \"ڪارسيڪائي\",
        \"crs\": \"سيسلوا ڪريئول فرانسي\",
        \"cs\": \"چيڪ\",
        \"cu\": \"چرچ سلاوی\",
        \"cv\": \"چو واش\",
        \"cy\": \"ويلش\",
        \"da\": \"ڊينش\",
        \"dak\": \"ڊڪوٽا\",
        \"dar\": \"ڊارگوا\",
        \"dav\": \"تائيتا\",
        \"de\": \"جرمن\",
        \"de_AT\": \"آسٽريائي جرمن\",
        \"de_CH\": \"سوئس هائي جرمن\",
        \"dgr\": \"داگرب\",
        \"dje\": \"زارما\",
        \"dsb\": \"لوئر سوربين\",
        \"dua\": \"ڊيولا\",
        \"dv\": \"دويهي\",
        \"dyo\": \"جولا فوني\",
        \"dz\": \"زونخا\",
        \"dzg\": \"دزاگا\",
        \"ebu\": \"ايمبيو\",
        \"ee\": \"ايو\",
        \"efi\": \"ايفڪ\",
        \"eka\": \"ايڪاجڪ\",
        \"el\": \"يوناني\",
        \"en\": \"انگريزي\",
        \"en_AU\": \"آسٽريليائي انگريزي\",
        \"en_CA\": \"ڪينيڊيائي انگريزي\",
        \"en_GB\": \"برطانوي انگريزي\",
        \"en_US\": \"آمريڪي انگريزي\",
        \"eo\": \"ايسپرانٽو\",
        \"es\": \"اسپيني\",
        \"es_419\": \"لاطيني آمريڪي اسپينش\",
        \"es_ES\": \"يورپي اسپيني\",
        \"es_MX\": \"ميڪسيڪين اسپيني\",
        \"et\": \"ايستونائي\",
        \"eu\": \"باسڪي\",
        \"ewo\": \"اوانڊو\",
        \"fa\": \"فارسي\",
        \"ff\": \"فلاهه\",
        \"fi\": \"فنش\",
        \"fil\": \"فلپائني\",
        \"fj\": \"فجي\",
        \"fo\": \"فيروايس\",
        \"fon\": \"فون\",
        \"fr\": \"فرانسي\",
        \"fr_CA\": \"ڪينيڊيائي فرانسيسي\",
        \"fr_CH\": \"سوئس فرانسيسي\",
        \"fur\": \"فرائي لئين\",
        \"fy\": \"مغربي فريشن\",
        \"ga\": \"آئرش\",
        \"gaa\": \"گا\",
        \"gd\": \"اسڪاٽش گيلڪ\",
        \"gez\": \"جيز\",
        \"gil\": \"گلبرٽيز\",
        \"gl\": \"گليشئين\",
        \"gn\": \"گواراني\",
        \"gor\": \"گورنٽلو\",
        \"gsw\": \"سوئس جرمن\",
        \"gu\": \"گجراتي\",
        \"guz\": \"گشي\",
        \"gv\": \"مينڪس\",
        \"gwi\": \"گوچن\",
        \"ha\": \"هوسا\",
        \"haw\": \"هوائي\",
        \"he\": \"عبراني\",
        \"hi\": \"هندي\",
        \"hil\": \"هلي گيانان\",
        \"hmn\": \"مونگ\",
        \"hr\": \"ڪروشيائي\",
        \"hsb\": \"اپر سربيائي\",
        \"ht\": \"هيٽي ڪرولي\",
        \"hu\": \"هنگري\",
        \"hup\": \"هوپا\",
        \"hy\": \"ارماني\",
        \"hz\": \"هريرو\",
        \"ia\": \"انٽرلنگئا\",
        \"iba\": \"ايبن\",
        \"ibb\": \"ابيبيو\",
        \"id\": \"انڊونيشي\",
        \"ig\": \"اگبو\",
        \"ii\": \"سچوان يي\",
        \"ilo\": \"الوڪو\",
        \"inh\": \"انگش\",
        \"io\": \"ادو\",
        \"is\": \"آئيس لينڊڪ\",
        \"it\": \"اطالوي\",
        \"iu\": \"انو ڪتوت\",
        \"ja\": \"جاپاني\",
        \"jbo\": \"لوجبين\",
        \"jgo\": \"نغومبا\",
        \"jmc\": \"ميڪم\",
        \"jv\": \"جاونيز\",
        \"ka\": \"جارجين\",
        \"kab\": \"ڪبائل\",
        \"kac\": \"ڪچن\",
        \"kaj\": \"پوڪيپسي\",
        \"kam\": \"ڪئمبا\",
        \"kbd\": \"ڪبارڊيئن\",
        \"kcg\": \"تياپ\",
        \"kde\": \"مڪوندي\",
        \"kea\": \"ڪيبيو ويرڊيانو\",
        \"kfo\": \"ڪورو\",
        \"kha\": \"خاسي\",
        \"khq\": \"ڪيورا چني\",
        \"ki\": \"اڪويو\",
        \"kj\": \"ڪنياما\",
        \"kk\": \"قازق\",
        \"kkj\": \"ڪڪو\",
        \"kl\": \"ڪالا ليسٽ\",
        \"kln\": \"ڪيلين جن\",
        \"km\": \"خمر\",
        \"kmb\": \"ڪمبونڊو\",
        \"kn\": \"ڪناڊا\",
        \"ko\": \"ڪوريائي\",
        \"kok\": \"ڪونڪي\",
        \"kpe\": \"ڪپيل\",
        \"kr\": \"ڪنوري\",
        \"krc\": \"ڪراچي بالڪر\",
        \"krl\": \"ڪريلئين\",
        \"kru\": \"ڪورخ\",
        \"ks\": \"ڪشميري\",
        \"ksb\": \"شمبالا\",
        \"ksf\": \"بافيا\",
        \"ksh\": \"ڪلونئين\",
        \"ku\": \"ڪردي\",
        \"kum\": \"ڪومڪ\",
        \"kv\": \"ڪومي\",
        \"kw\": \"ڪورنش\",
        \"ky\": \"ڪرغيز\",
        \"la\": \"لاطيني\",
        \"lad\": \"لڊينو\",
        \"lag\": \"لانگي\",
        \"lb\": \"لگزمبرگ\",
        \"lez\": \"ليزگهين\",
        \"lg\": \"گاندا\",
        \"li\": \"لمبرگش\",
        \"lkt\": \"لڪوٽا\",
        \"ln\": \"لنگالا\",
        \"lo\": \"لائو\",
        \"loz\": \"لوزي\",
        \"lrc\": \"اتر لوري\",
        \"lt\": \"ليٿونيائي\",
        \"lu\": \"لوبا-ڪتانگا\",
        \"lua\": \"لوبا-لولوا\",
        \"lun\": \"لنڊا\",
        \"luo\": \"لو\",
        \"lus\": \"ميزو\",
        \"luy\": \"لوهيا\",
        \"lv\": \"لاتوين\",
        \"mad\": \"مدورائي\",
        \"mag\": \"مگاهي\",
        \"mai\": \"ميٿلي\",
        \"mak\": \"مڪاسر\",
        \"mas\": \"مسائي\",
        \"mdf\": \"موڪشا\",
        \"men\": \"مينڊي\",
        \"mer\": \"ميرو\",
        \"mfe\": \"موریسیین\",
        \"mg\": \"ملاگاسي\",
        \"mgh\": \"مخووا ميتو\",
        \"mgo\": \"ميتا\",
        \"mh\": \"مارشليز\",
        \"mi\": \"مائوري\",
        \"mic\": \"ميڪ مڪ\",
        \"min\": \"مناڪابوا\",
        \"mk\": \"ميسي ڊونيائي\",
        \"ml\": \"مليالم\",
        \"mn\": \"منگولي\",
        \"mni\": \"ماني پوري\",
        \"moh\": \"موهاڪ\",
        \"mos\": \"موسي\",
        \"mr\": \"مراٺي\",
        \"ms\": \"ملي\",
        \"mt\": \"مالٽي\",
        \"mua\": \"من دانگ\",
        \"mus\": \"ڪريڪ\",
        \"mwl\": \"مرانڊيز\",
        \"my\": \"برمي\",
        \"myv\": \"ايريزيا\",
        \"mzn\": \"مزيندراني\",
        \"na\": \"نائو\",
        \"nap\": \"نيپولٽن\",
        \"naq\": \"ناما\",
        \"nb\": \"نارويائي بوڪمال\",
        \"nd\": \"اتر دبيلي\",
        \"nds\": \"لو جرمن\",
        \"ne\": \"نيپالي\",
        \"new\": \"نيواري\",
        \"ng\": \"ڊونگا\",
        \"nia\": \"نياس\",
        \"niu\": \"نووي\",
        \"nl\": \"ڊچ\",
        \"nl_BE\": \"فلیمش\",
        \"nmg\": \"ڪويسيو\",
        \"nn\": \"نارويائي نيوناسڪ\",
        \"nnh\": \"نغيمبون\",
        \"nog\": \"نوگائي\",
        \"nqo\": \"نڪو\",
        \"nr\": \"ڏکڻ دبيلي\",
        \"nso\": \"اتر سوٿو\",
        \"nus\": \"نيور\",
        \"nv\": \"نواجو\",
        \"ny\": \"نيانجا\",
        \"nyn\": \"نايانڪول\",
        \"oc\": \"آڪسيٽن\",
        \"om\": \"اورومو\",
        \"or\": \"اوڊيا\",
        \"os\": \"اوسيٽڪ\",
        \"pa\": \"پنجابي\",
        \"pag\": \"پانگا سينان\",
        \"pam\": \"پيم پينگا\",
        \"pap\": \"پاپي امينٽو\",
        \"pau\": \"پلون\",
        \"pcm\": \"نائيجرين پجن\",
        \"pl\": \"پولش\",
        \"prg\": \"پرشن\",
        \"ps\": \"پشتو\",
        \"pt\": \"پورٽگليز\",
        \"pt_BR\": \"برازيلي پرتگالي\",
        \"pt_PT\": \"يورپي پرتگالي\",
        \"qu\": \"ڪيچوا\",
        \"quc\": \"ڪچي\",
        \"rap\": \"ريپنوئي\",
        \"rar\": \"ريرو ٽينگو\",
        \"rm\": \"رومانش\",
        \"rn\": \"رونڊي\",
        \"ro\": \"روماني\",
        \"ro_MD\": \"مالديوي\",
        \"rof\": \"رومبو\",
        \"root\": \"روٽ\",
        \"ru\": \"روسي\",
        \"rup\": \"ارومينين\",
        \"rw\": \"ڪنيار وانڊا\",
        \"rwk\": \"روا\",
        \"sa\": \"سنسڪرت\",
        \"sad\": \"سنداوي\",
        \"sah\": \"ساخا\",
        \"saq\": \"سيمبورو\",
        \"sat\": \"سنتالي\",
        \"sba\": \"نغمبي\",
        \"sbp\": \"سانگوو\",
        \"sc\": \"سارڊيني\",
        \"scn\": \"سسلي\",
        \"sco\": \"اسڪاٽس\",
        \"sd\": \"سنڌي\",
        \"se\": \"اتر سامي\",
        \"seh\": \"سينا\",
        \"ses\": \"ڪيورابورو سيني\",
        \"sg\": \"سانگو\",
        \"shi\": \"تيچل هاتي\",
        \"shn\": \"شان\",
        \"si\": \"سنهالا\",
        \"sk\": \"سلواڪي\",
        \"sl\": \"سلوويني\",
        \"sm\": \"ساموآن\",
        \"sma\": \"ڏکڻ سامي\",
        \"smj\": \"لولي سامي\",
        \"smn\": \"اناري سامي\",
        \"sms\": \"اسڪاٽ سامي\",
        \"sn\": \"شونا\",
        \"snk\": \"سونينڪي\",
        \"so\": \"سومالي\",
        \"sq\": \"الباني\",
        \"sr\": \"سربيائي\",
        \"srn\": \"سرانن تانگو\",
        \"ss\": \"سواتي\",
        \"ssy\": \"سهو\",
        \"st\": \"ڏکڻ سوٿي\",
        \"su\": \"سوڊاني\",
        \"suk\": \"سڪوما\",
        \"sv\": \"سويڊني\",
        \"sw\": \"سواحيلي\",
        \"sw_CD\": \"ڪونگو سواحيلي\",
        \"swb\": \"ڪمورين\",
        \"syr\": \"شامي\",
        \"ta\": \"تامل\",
        \"te\": \"تلگو\",
        \"tem\": \"تمني\",
        \"teo\": \"تيسو\",
        \"tet\": \"تيتم\",
        \"tg\": \"تاجڪي\",
        \"th\": \"ٿائي\",
        \"ti\": \"تگرينيائي\",
        \"tig\": \"تگري\",
        \"tk\": \"ترڪماني\",
        \"tlh\": \"ڪلون\",
        \"tn\": \"تسوانا\",
        \"to\": \"تونگن\",
        \"tpi\": \"تاڪ پسن\",
        \"tr\": \"ترڪ\",
        \"trv\": \"تاروڪو\",
        \"ts\": \"سونگا\",
        \"tt\": \"تاتري\",
        \"tum\": \"تمبوڪا\",
        \"tvl\": \"توالو\",
        \"twq\": \"تساوڪي\",
        \"ty\": \"تاهيتي\",
        \"tyv\": \"تووينيائي\",
        \"tzm\": \"وچ اٽلس تمازائيٽ\",
        \"udm\": \"ادمورتيا\",
        \"ug\": \"يوغور\",
        \"uk\": \"يوڪراني\",
        \"umb\": \"اومبنڊو\",
        \"ur\": \"اردو\",
        \"uz\": \"ازبڪ\",
        \"vai\": \"يا\",
        \"ve\": \"وينڊا\",
        \"vi\": \"ويتنامي\",
        \"vo\": \"والپڪ\",
        \"vun\": \"ونجو\",
        \"wa\": \"ولون\",
        \"wae\": \"والسر\",
        \"wal\": \"وولايٽا\",
        \"war\": \"واري\",
        \"wo\": \"وولف\",
        \"xal\": \"ڪيلمڪ\",
        \"xh\": \"زھوسا\",
        \"xog\": \"سوگا\",
        \"yav\": \"يانگ بين\",
        \"ybb\": \"ييمبا\",
        \"yi\": \"يدش\",
        \"yo\": \"يوروبا\",
        \"yue\": \"ڪينٽونيز\",
        \"zgh\": \"معياري مراڪشي تامازائيٽ\",
        \"zh\": \"چيني\",
        \"zh_Hans\": \"آسان چینی\",
        \"zh_Hant\": \"روايتي چيني\",
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
        return "vendor/symfony/intl/Resources/data/languages/sd.json";
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
        \"aa\": \"افار\",
        \"ab\": \"ابقازیان\",
        \"ace\": \"اچائينيز\",
        \"ada\": \"ادنگمي\",
        \"ady\": \"اديگهي\",
        \"af\": \"آفريڪي\",
        \"agq\": \"اگهيم\",
        \"ain\": \"آئينو\",
        \"ak\": \"اڪان\",
        \"ale\": \"اليوٽ\",
        \"alt\": \"ڏکڻ التائي\",
        \"am\": \"امهاري\",
        \"an\": \"ارگني\",
        \"anp\": \"انجيڪا\",
        \"ar\": \"عربي\",
        \"ar_001\": \"جديد معياري عربي\",
        \"arn\": \"ماپوچي\",
        \"arp\": \"اراپائو\",
        \"as\": \"آسامي\",
        \"asa\": \"اسو\",
        \"ast\": \"اسٽورين\",
        \"av\": \"اويرس\",
        \"awa\": \"اواڌي\",
        \"ay\": \"ایمارا\",
        \"az\": \"آزربائيجاني\",
        \"ba\": \"بشڪر\",
        \"ban\": \"بالي\",
        \"bas\": \"باسا\",
        \"be\": \"بيلاروسي\",
        \"bem\": \"بيمبا\",
        \"bez\": \"بينا\",
        \"bg\": \"بلغاريائي\",
        \"bho\": \"ڀوجپوري\",
        \"bi\": \"بسلاما\",
        \"bin\": \"بني\",
        \"bla\": \"سڪسڪا\",
        \"bm\": \"بمبارا\",
        \"bn\": \"بنگلا\",
        \"bo\": \"تبيتائي\",
        \"br\": \"بريٽن\",
        \"brx\": \"بودو\",
        \"bs\": \"بوسنيائي\",
        \"bug\": \"بگنيز\",
        \"byn\": \"بلن\",
        \"ca\": \"ڪيٽالان\",
        \"ccp\": \"چمڪا\",
        \"ce\": \"چیچن\",
        \"ceb\": \"سبوانو\",
        \"cgg\": \"چگا\",
        \"ch\": \"چمورو\",
        \"chk\": \"چڪيز\",
        \"chm\": \"ماري\",
        \"cho\": \"چوڪ تو\",
        \"chr\": \"چروڪي\",
        \"chy\": \"چايان\",
        \"ckb\": \"مرڪزي ڪردش\",
        \"co\": \"ڪارسيڪائي\",
        \"crs\": \"سيسلوا ڪريئول فرانسي\",
        \"cs\": \"چيڪ\",
        \"cu\": \"چرچ سلاوی\",
        \"cv\": \"چو واش\",
        \"cy\": \"ويلش\",
        \"da\": \"ڊينش\",
        \"dak\": \"ڊڪوٽا\",
        \"dar\": \"ڊارگوا\",
        \"dav\": \"تائيتا\",
        \"de\": \"جرمن\",
        \"de_AT\": \"آسٽريائي جرمن\",
        \"de_CH\": \"سوئس هائي جرمن\",
        \"dgr\": \"داگرب\",
        \"dje\": \"زارما\",
        \"dsb\": \"لوئر سوربين\",
        \"dua\": \"ڊيولا\",
        \"dv\": \"دويهي\",
        \"dyo\": \"جولا فوني\",
        \"dz\": \"زونخا\",
        \"dzg\": \"دزاگا\",
        \"ebu\": \"ايمبيو\",
        \"ee\": \"ايو\",
        \"efi\": \"ايفڪ\",
        \"eka\": \"ايڪاجڪ\",
        \"el\": \"يوناني\",
        \"en\": \"انگريزي\",
        \"en_AU\": \"آسٽريليائي انگريزي\",
        \"en_CA\": \"ڪينيڊيائي انگريزي\",
        \"en_GB\": \"برطانوي انگريزي\",
        \"en_US\": \"آمريڪي انگريزي\",
        \"eo\": \"ايسپرانٽو\",
        \"es\": \"اسپيني\",
        \"es_419\": \"لاطيني آمريڪي اسپينش\",
        \"es_ES\": \"يورپي اسپيني\",
        \"es_MX\": \"ميڪسيڪين اسپيني\",
        \"et\": \"ايستونائي\",
        \"eu\": \"باسڪي\",
        \"ewo\": \"اوانڊو\",
        \"fa\": \"فارسي\",
        \"ff\": \"فلاهه\",
        \"fi\": \"فنش\",
        \"fil\": \"فلپائني\",
        \"fj\": \"فجي\",
        \"fo\": \"فيروايس\",
        \"fon\": \"فون\",
        \"fr\": \"فرانسي\",
        \"fr_CA\": \"ڪينيڊيائي فرانسيسي\",
        \"fr_CH\": \"سوئس فرانسيسي\",
        \"fur\": \"فرائي لئين\",
        \"fy\": \"مغربي فريشن\",
        \"ga\": \"آئرش\",
        \"gaa\": \"گا\",
        \"gd\": \"اسڪاٽش گيلڪ\",
        \"gez\": \"جيز\",
        \"gil\": \"گلبرٽيز\",
        \"gl\": \"گليشئين\",
        \"gn\": \"گواراني\",
        \"gor\": \"گورنٽلو\",
        \"gsw\": \"سوئس جرمن\",
        \"gu\": \"گجراتي\",
        \"guz\": \"گشي\",
        \"gv\": \"مينڪس\",
        \"gwi\": \"گوچن\",
        \"ha\": \"هوسا\",
        \"haw\": \"هوائي\",
        \"he\": \"عبراني\",
        \"hi\": \"هندي\",
        \"hil\": \"هلي گيانان\",
        \"hmn\": \"مونگ\",
        \"hr\": \"ڪروشيائي\",
        \"hsb\": \"اپر سربيائي\",
        \"ht\": \"هيٽي ڪرولي\",
        \"hu\": \"هنگري\",
        \"hup\": \"هوپا\",
        \"hy\": \"ارماني\",
        \"hz\": \"هريرو\",
        \"ia\": \"انٽرلنگئا\",
        \"iba\": \"ايبن\",
        \"ibb\": \"ابيبيو\",
        \"id\": \"انڊونيشي\",
        \"ig\": \"اگبو\",
        \"ii\": \"سچوان يي\",
        \"ilo\": \"الوڪو\",
        \"inh\": \"انگش\",
        \"io\": \"ادو\",
        \"is\": \"آئيس لينڊڪ\",
        \"it\": \"اطالوي\",
        \"iu\": \"انو ڪتوت\",
        \"ja\": \"جاپاني\",
        \"jbo\": \"لوجبين\",
        \"jgo\": \"نغومبا\",
        \"jmc\": \"ميڪم\",
        \"jv\": \"جاونيز\",
        \"ka\": \"جارجين\",
        \"kab\": \"ڪبائل\",
        \"kac\": \"ڪچن\",
        \"kaj\": \"پوڪيپسي\",
        \"kam\": \"ڪئمبا\",
        \"kbd\": \"ڪبارڊيئن\",
        \"kcg\": \"تياپ\",
        \"kde\": \"مڪوندي\",
        \"kea\": \"ڪيبيو ويرڊيانو\",
        \"kfo\": \"ڪورو\",
        \"kha\": \"خاسي\",
        \"khq\": \"ڪيورا چني\",
        \"ki\": \"اڪويو\",
        \"kj\": \"ڪنياما\",
        \"kk\": \"قازق\",
        \"kkj\": \"ڪڪو\",
        \"kl\": \"ڪالا ليسٽ\",
        \"kln\": \"ڪيلين جن\",
        \"km\": \"خمر\",
        \"kmb\": \"ڪمبونڊو\",
        \"kn\": \"ڪناڊا\",
        \"ko\": \"ڪوريائي\",
        \"kok\": \"ڪونڪي\",
        \"kpe\": \"ڪپيل\",
        \"kr\": \"ڪنوري\",
        \"krc\": \"ڪراچي بالڪر\",
        \"krl\": \"ڪريلئين\",
        \"kru\": \"ڪورخ\",
        \"ks\": \"ڪشميري\",
        \"ksb\": \"شمبالا\",
        \"ksf\": \"بافيا\",
        \"ksh\": \"ڪلونئين\",
        \"ku\": \"ڪردي\",
        \"kum\": \"ڪومڪ\",
        \"kv\": \"ڪومي\",
        \"kw\": \"ڪورنش\",
        \"ky\": \"ڪرغيز\",
        \"la\": \"لاطيني\",
        \"lad\": \"لڊينو\",
        \"lag\": \"لانگي\",
        \"lb\": \"لگزمبرگ\",
        \"lez\": \"ليزگهين\",
        \"lg\": \"گاندا\",
        \"li\": \"لمبرگش\",
        \"lkt\": \"لڪوٽا\",
        \"ln\": \"لنگالا\",
        \"lo\": \"لائو\",
        \"loz\": \"لوزي\",
        \"lrc\": \"اتر لوري\",
        \"lt\": \"ليٿونيائي\",
        \"lu\": \"لوبا-ڪتانگا\",
        \"lua\": \"لوبا-لولوا\",
        \"lun\": \"لنڊا\",
        \"luo\": \"لو\",
        \"lus\": \"ميزو\",
        \"luy\": \"لوهيا\",
        \"lv\": \"لاتوين\",
        \"mad\": \"مدورائي\",
        \"mag\": \"مگاهي\",
        \"mai\": \"ميٿلي\",
        \"mak\": \"مڪاسر\",
        \"mas\": \"مسائي\",
        \"mdf\": \"موڪشا\",
        \"men\": \"مينڊي\",
        \"mer\": \"ميرو\",
        \"mfe\": \"موریسیین\",
        \"mg\": \"ملاگاسي\",
        \"mgh\": \"مخووا ميتو\",
        \"mgo\": \"ميتا\",
        \"mh\": \"مارشليز\",
        \"mi\": \"مائوري\",
        \"mic\": \"ميڪ مڪ\",
        \"min\": \"مناڪابوا\",
        \"mk\": \"ميسي ڊونيائي\",
        \"ml\": \"مليالم\",
        \"mn\": \"منگولي\",
        \"mni\": \"ماني پوري\",
        \"moh\": \"موهاڪ\",
        \"mos\": \"موسي\",
        \"mr\": \"مراٺي\",
        \"ms\": \"ملي\",
        \"mt\": \"مالٽي\",
        \"mua\": \"من دانگ\",
        \"mus\": \"ڪريڪ\",
        \"mwl\": \"مرانڊيز\",
        \"my\": \"برمي\",
        \"myv\": \"ايريزيا\",
        \"mzn\": \"مزيندراني\",
        \"na\": \"نائو\",
        \"nap\": \"نيپولٽن\",
        \"naq\": \"ناما\",
        \"nb\": \"نارويائي بوڪمال\",
        \"nd\": \"اتر دبيلي\",
        \"nds\": \"لو جرمن\",
        \"ne\": \"نيپالي\",
        \"new\": \"نيواري\",
        \"ng\": \"ڊونگا\",
        \"nia\": \"نياس\",
        \"niu\": \"نووي\",
        \"nl\": \"ڊچ\",
        \"nl_BE\": \"فلیمش\",
        \"nmg\": \"ڪويسيو\",
        \"nn\": \"نارويائي نيوناسڪ\",
        \"nnh\": \"نغيمبون\",
        \"nog\": \"نوگائي\",
        \"nqo\": \"نڪو\",
        \"nr\": \"ڏکڻ دبيلي\",
        \"nso\": \"اتر سوٿو\",
        \"nus\": \"نيور\",
        \"nv\": \"نواجو\",
        \"ny\": \"نيانجا\",
        \"nyn\": \"نايانڪول\",
        \"oc\": \"آڪسيٽن\",
        \"om\": \"اورومو\",
        \"or\": \"اوڊيا\",
        \"os\": \"اوسيٽڪ\",
        \"pa\": \"پنجابي\",
        \"pag\": \"پانگا سينان\",
        \"pam\": \"پيم پينگا\",
        \"pap\": \"پاپي امينٽو\",
        \"pau\": \"پلون\",
        \"pcm\": \"نائيجرين پجن\",
        \"pl\": \"پولش\",
        \"prg\": \"پرشن\",
        \"ps\": \"پشتو\",
        \"pt\": \"پورٽگليز\",
        \"pt_BR\": \"برازيلي پرتگالي\",
        \"pt_PT\": \"يورپي پرتگالي\",
        \"qu\": \"ڪيچوا\",
        \"quc\": \"ڪچي\",
        \"rap\": \"ريپنوئي\",
        \"rar\": \"ريرو ٽينگو\",
        \"rm\": \"رومانش\",
        \"rn\": \"رونڊي\",
        \"ro\": \"روماني\",
        \"ro_MD\": \"مالديوي\",
        \"rof\": \"رومبو\",
        \"root\": \"روٽ\",
        \"ru\": \"روسي\",
        \"rup\": \"ارومينين\",
        \"rw\": \"ڪنيار وانڊا\",
        \"rwk\": \"روا\",
        \"sa\": \"سنسڪرت\",
        \"sad\": \"سنداوي\",
        \"sah\": \"ساخا\",
        \"saq\": \"سيمبورو\",
        \"sat\": \"سنتالي\",
        \"sba\": \"نغمبي\",
        \"sbp\": \"سانگوو\",
        \"sc\": \"سارڊيني\",
        \"scn\": \"سسلي\",
        \"sco\": \"اسڪاٽس\",
        \"sd\": \"سنڌي\",
        \"se\": \"اتر سامي\",
        \"seh\": \"سينا\",
        \"ses\": \"ڪيورابورو سيني\",
        \"sg\": \"سانگو\",
        \"shi\": \"تيچل هاتي\",
        \"shn\": \"شان\",
        \"si\": \"سنهالا\",
        \"sk\": \"سلواڪي\",
        \"sl\": \"سلوويني\",
        \"sm\": \"ساموآن\",
        \"sma\": \"ڏکڻ سامي\",
        \"smj\": \"لولي سامي\",
        \"smn\": \"اناري سامي\",
        \"sms\": \"اسڪاٽ سامي\",
        \"sn\": \"شونا\",
        \"snk\": \"سونينڪي\",
        \"so\": \"سومالي\",
        \"sq\": \"الباني\",
        \"sr\": \"سربيائي\",
        \"srn\": \"سرانن تانگو\",
        \"ss\": \"سواتي\",
        \"ssy\": \"سهو\",
        \"st\": \"ڏکڻ سوٿي\",
        \"su\": \"سوڊاني\",
        \"suk\": \"سڪوما\",
        \"sv\": \"سويڊني\",
        \"sw\": \"سواحيلي\",
        \"sw_CD\": \"ڪونگو سواحيلي\",
        \"swb\": \"ڪمورين\",
        \"syr\": \"شامي\",
        \"ta\": \"تامل\",
        \"te\": \"تلگو\",
        \"tem\": \"تمني\",
        \"teo\": \"تيسو\",
        \"tet\": \"تيتم\",
        \"tg\": \"تاجڪي\",
        \"th\": \"ٿائي\",
        \"ti\": \"تگرينيائي\",
        \"tig\": \"تگري\",
        \"tk\": \"ترڪماني\",
        \"tlh\": \"ڪلون\",
        \"tn\": \"تسوانا\",
        \"to\": \"تونگن\",
        \"tpi\": \"تاڪ پسن\",
        \"tr\": \"ترڪ\",
        \"trv\": \"تاروڪو\",
        \"ts\": \"سونگا\",
        \"tt\": \"تاتري\",
        \"tum\": \"تمبوڪا\",
        \"tvl\": \"توالو\",
        \"twq\": \"تساوڪي\",
        \"ty\": \"تاهيتي\",
        \"tyv\": \"تووينيائي\",
        \"tzm\": \"وچ اٽلس تمازائيٽ\",
        \"udm\": \"ادمورتيا\",
        \"ug\": \"يوغور\",
        \"uk\": \"يوڪراني\",
        \"umb\": \"اومبنڊو\",
        \"ur\": \"اردو\",
        \"uz\": \"ازبڪ\",
        \"vai\": \"يا\",
        \"ve\": \"وينڊا\",
        \"vi\": \"ويتنامي\",
        \"vo\": \"والپڪ\",
        \"vun\": \"ونجو\",
        \"wa\": \"ولون\",
        \"wae\": \"والسر\",
        \"wal\": \"وولايٽا\",
        \"war\": \"واري\",
        \"wo\": \"وولف\",
        \"xal\": \"ڪيلمڪ\",
        \"xh\": \"زھوسا\",
        \"xog\": \"سوگا\",
        \"yav\": \"يانگ بين\",
        \"ybb\": \"ييمبا\",
        \"yi\": \"يدش\",
        \"yo\": \"يوروبا\",
        \"yue\": \"ڪينٽونيز\",
        \"zgh\": \"معياري مراڪشي تامازائيٽ\",
        \"zh\": \"چيني\",
        \"zh_Hans\": \"آسان چینی\",
        \"zh_Hant\": \"روايتي چيني\",
        \"zu\": \"زولو\",
        \"zun\": \"زوني\",
        \"zza\": \"زازا\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/sd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/sd.json");
    }
}