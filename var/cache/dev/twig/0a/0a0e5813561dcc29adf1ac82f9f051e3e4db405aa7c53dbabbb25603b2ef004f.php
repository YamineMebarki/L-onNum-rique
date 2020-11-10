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

/* vendor/symfony/intl/Resources/data/languages/ar.json */
class __TwigTemplate_1a5e64b0e888dd7504e3e6308d79b0c75a3115a0b35aade35a86ee710f57bce3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ar.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ar.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"الأفارية\",
        \"ab\": \"الأبخازية\",
        \"ace\": \"الأتشينيزية\",
        \"ach\": \"الأكولية\",
        \"ada\": \"الأدانجمية\",
        \"ady\": \"الأديغة\",
        \"ae\": \"الأفستية\",
        \"af\": \"الأفريقانية\",
        \"afh\": \"الأفريهيلية\",
        \"agq\": \"الأغم\",
        \"ain\": \"الآينوية\",
        \"ak\": \"الأكانية\",
        \"akk\": \"الأكادية\",
        \"ale\": \"الأليوتية\",
        \"alt\": \"الألطائية الجنوبية\",
        \"am\": \"الأمهرية\",
        \"an\": \"الأراغونية\",
        \"ang\": \"الإنجليزية القديمة\",
        \"anp\": \"الأنجيكا\",
        \"ar\": \"العربية\",
        \"ar_001\": \"العربية الفصحى الحديثة\",
        \"arc\": \"الآرامية\",
        \"arn\": \"المابودونغونية\",
        \"arp\": \"الأراباهو\",
        \"ars\": \"اللهجة النجدية\",
        \"arw\": \"الأراواكية\",
        \"as\": \"الأسامية\",
        \"asa\": \"الآسو\",
        \"ast\": \"الأسترية\",
        \"av\": \"الأوارية\",
        \"awa\": \"الأوادية\",
        \"ay\": \"الأيمارا\",
        \"az\": \"الأذربيجانية\",
        \"ba\": \"الباشكيرية\",
        \"bal\": \"البلوشية\",
        \"ban\": \"البالينية\",
        \"bas\": \"الباسا\",
        \"bax\": \"بامن\",
        \"bbj\": \"لغة الغومالا\",
        \"be\": \"البيلاروسية\",
        \"bej\": \"البيجا\",
        \"bem\": \"البيمبا\",
        \"bez\": \"بينا\",
        \"bfd\": \"لغة البافوت\",
        \"bg\": \"البلغارية\",
        \"bgn\": \"البلوشية الغربية\",
        \"bho\": \"البهوجبورية\",
        \"bi\": \"البيسلامية\",
        \"bik\": \"البيكولية\",
        \"bin\": \"البينية\",
        \"bkm\": \"لغة الكوم\",
        \"bla\": \"السيكسيكية\",
        \"bm\": \"البامبارا\",
        \"bn\": \"البنغالية\",
        \"bo\": \"التبتية\",
        \"br\": \"البريتونية\",
        \"bra\": \"البراجية\",
        \"brx\": \"البودو\",
        \"bs\": \"البوسنية\",
        \"bss\": \"أكوس\",
        \"bua\": \"البرياتية\",
        \"bug\": \"البجينيزية\",
        \"bum\": \"لغة البولو\",
        \"byn\": \"البلينية\",
        \"byv\": \"لغة الميدومبا\",
        \"ca\": \"الكتالانية\",
        \"cad\": \"الكادو\",
        \"car\": \"الكاريبية\",
        \"cay\": \"الكايوجية\",
        \"cch\": \"الأتسام\",
        \"ccp\": \"تشاكما\",
        \"ce\": \"الشيشانية\",
        \"ceb\": \"السيبيوانية\",
        \"cgg\": \"تشيغا\",
        \"ch\": \"التشامورو\",
        \"chb\": \"التشيبشا\",
        \"chg\": \"التشاجاتاي\",
        \"chk\": \"التشكيزية\",
        \"chm\": \"الماري\",
        \"chn\": \"الشينوك جارجون\",
        \"cho\": \"الشوكتو\",
        \"chp\": \"الشيباوايان\",
        \"chr\": \"الشيروكي\",
        \"chy\": \"الشايان\",
        \"ckb\": \"السورانية الكردية\",
        \"co\": \"الكورسيكية\",
        \"cop\": \"القبطية\",
        \"cr\": \"الكرى\",
        \"crh\": \"لغة تتار القرم\",
        \"crs\": \"الفرنسية الكريولية السيشيلية\",
        \"cs\": \"التشيكية\",
        \"csb\": \"الكاشبايان\",
        \"cu\": \"سلافية كنسية\",
        \"cv\": \"التشوفاشي\",
        \"cy\": \"الويلزية\",
        \"da\": \"الدانمركية\",
        \"dak\": \"الداكوتا\",
        \"dar\": \"الدارجوا\",
        \"dav\": \"تيتا\",
        \"de\": \"الألمانية\",
        \"de_AT\": \"الألمانية النمساوية\",
        \"de_CH\": \"الألمانية العليا السويسرية\",
        \"del\": \"الديلوير\",
        \"den\": \"السلافية\",
        \"dgr\": \"الدوجريب\",
        \"din\": \"الدنكا\",
        \"dje\": \"الزارمية\",
        \"doi\": \"الدوجرية\",
        \"dsb\": \"صوربيا السفلى\",
        \"dua\": \"الديولا\",
        \"dum\": \"الهولندية الوسطى\",
        \"dv\": \"المالديفية\",
        \"dyo\": \"جولا فونيا\",
        \"dyu\": \"الدايلا\",
        \"dz\": \"الزونخاية\",
        \"dzg\": \"القرعانية\",
        \"ebu\": \"إمبو\",
        \"ee\": \"الإيوي\",
        \"efi\": \"الإفيك\",
        \"egy\": \"المصرية القديمة\",
        \"eka\": \"الإكاجك\",
        \"el\": \"اليونانية\",
        \"elx\": \"الإمايت\",
        \"en\": \"الإنجليزية\",
        \"en_AU\": \"الإنجليزية الأسترالية\",
        \"en_CA\": \"الإنجليزية الكندية\",
        \"en_GB\": \"الإنجليزية البريطانية\",
        \"en_US\": \"الإنجليزية الأمريكية\",
        \"enm\": \"الإنجليزية الوسطى\",
        \"eo\": \"الإسبرانتو\",
        \"es\": \"الإسبانية\",
        \"es_419\": \"الإسبانية أمريكا اللاتينية\",
        \"es_ES\": \"الإسبانية الأوروبية\",
        \"es_MX\": \"الإسبانية المكسيكية\",
        \"et\": \"الإستونية\",
        \"eu\": \"الباسكية\",
        \"ewo\": \"الإيوندو\",
        \"fa\": \"الفارسية\",
        \"fan\": \"الفانج\",
        \"fat\": \"الفانتي\",
        \"ff\": \"الفولانية\",
        \"fi\": \"الفنلندية\",
        \"fil\": \"الفلبينية\",
        \"fj\": \"الفيجية\",
        \"fo\": \"الفاروية\",
        \"fon\": \"الفون\",
        \"fr\": \"الفرنسية\",
        \"fr_CA\": \"الفرنسية الكندية\",
        \"fr_CH\": \"الفرنسية السويسرية\",
        \"frc\": \"الفرنسية الكاجونية\",
        \"frm\": \"الفرنسية الوسطى\",
        \"fro\": \"الفرنسية القديمة\",
        \"frr\": \"الفريزينية الشمالية\",
        \"frs\": \"الفريزينية الشرقية\",
        \"fur\": \"الفريلايان\",
        \"fy\": \"الفريزيان\",
        \"ga\": \"الأيرلندية\",
        \"gaa\": \"الجا\",
        \"gag\": \"الغاغوز\",
        \"gan\": \"الغان الصينية\",
        \"gay\": \"الجايو\",
        \"gba\": \"الجبيا\",
        \"gd\": \"الغيلية الأسكتلندية\",
        \"gez\": \"الجعزية\",
        \"gil\": \"لغة أهل جبل طارق\",
        \"gl\": \"الجاليكية\",
        \"gmh\": \"الألمانية العليا الوسطى\",
        \"gn\": \"الغوارانية\",
        \"goh\": \"الألمانية العليا القديمة\",
        \"gon\": \"الجندي\",
        \"gor\": \"الجورونتالو\",
        \"got\": \"القوطية\",
        \"grb\": \"الجريبو\",
        \"grc\": \"اليونانية القديمة\",
        \"gsw\": \"الألمانية السويسرية\",
        \"gu\": \"الغوجاراتية\",
        \"guz\": \"الغيزية\",
        \"gv\": \"المنكية\",
        \"gwi\": \"غوتشن\",
        \"ha\": \"الهوسا\",
        \"hai\": \"الهيدا\",
        \"hak\": \"الهاكا الصينية\",
        \"haw\": \"لغة هاواي\",
        \"he\": \"العبرية\",
        \"hi\": \"الهندية\",
        \"hil\": \"الهيليجينون\",
        \"hit\": \"الحثية\",
        \"hmn\": \"الهمونجية\",
        \"ho\": \"الهيري موتو\",
        \"hr\": \"الكرواتية\",
        \"hsb\": \"الصوربية العليا\",
        \"hsn\": \"شيانغ الصينية\",
        \"ht\": \"الكريولية الهايتية\",
        \"hu\": \"الهنغارية\",
        \"hup\": \"الهبا\",
        \"hy\": \"الأرمنية\",
        \"hz\": \"الهيريرو\",
        \"ia\": \"اللّغة الوسيطة\",
        \"iba\": \"الإيبان\",
        \"ibb\": \"الإيبيبيو\",
        \"id\": \"الإندونيسية\",
        \"ie\": \"الإنترلينج\",
        \"ig\": \"الإيجبو\",
        \"ii\": \"السيتشيون يي\",
        \"ik\": \"الإينبياك\",
        \"ilo\": \"الإيلوكو\",
        \"inh\": \"الإنجوشية\",
        \"io\": \"الإيدو\",
        \"is\": \"الأيسلندية\",
        \"it\": \"الإيطالية\",
        \"iu\": \"الإينكتيتت\",
        \"ja\": \"اليابانية\",
        \"jbo\": \"اللوجبان\",
        \"jgo\": \"نغومبا\",
        \"jmc\": \"الماتشامية\",
        \"jpr\": \"الفارسية اليهودية\",
        \"jrb\": \"العربية اليهودية\",
        \"jv\": \"الجاوية\",
        \"ka\": \"الجورجية\",
        \"kaa\": \"الكارا-كالباك\",
        \"kab\": \"القبيلية\",
        \"kac\": \"الكاتشين\",
        \"kaj\": \"الجو\",
        \"kam\": \"الكامبا\",
        \"kaw\": \"الكوي\",
        \"kbd\": \"الكاباردايان\",
        \"kbl\": \"كانمبو\",
        \"kcg\": \"التايابية\",
        \"kde\": \"ماكونده\",
        \"kea\": \"كابوفيرديانو\",
        \"kfo\": \"الكورو\",
        \"kg\": \"الكونغو\",
        \"kha\": \"الكازية\",
        \"kho\": \"الخوتانيز\",
        \"khq\": \"كويرا تشيني\",
        \"ki\": \"الكيكيو\",
        \"kj\": \"الكيونياما\",
        \"kk\": \"الكازاخستانية\",
        \"kkj\": \"لغة الكاكو\",
        \"kl\": \"الكالاليست\",
        \"kln\": \"كالينجين\",
        \"km\": \"الخميرية\",
        \"kmb\": \"الكيمبندو\",
        \"kn\": \"الكانادا\",
        \"ko\": \"الكورية\",
        \"koi\": \"كومي-بيرماياك\",
        \"kok\": \"الكونكانية\",
        \"kos\": \"الكوسراين\",
        \"kpe\": \"الكبيل\",
        \"kr\": \"الكانوري\",
        \"krc\": \"الكاراتشاي-بالكار\",
        \"krl\": \"الكاريلية\",
        \"kru\": \"الكوروخ\",
        \"ks\": \"الكشميرية\",
        \"ksb\": \"شامبالا\",
        \"ksf\": \"لغة البافيا\",
        \"ksh\": \"لغة الكولونيان\",
        \"ku\": \"الكردية\",
        \"kum\": \"القموقية\",
        \"kut\": \"الكتيناي\",
        \"kv\": \"الكومي\",
        \"kw\": \"الكورنية\",
        \"ky\": \"القيرغيزية\",
        \"la\": \"اللاتينية\",
        \"lad\": \"اللادينو\",
        \"lag\": \"لانجي\",
        \"lah\": \"اللاهندا\",
        \"lam\": \"اللامبا\",
        \"lb\": \"اللكسمبورغية\",
        \"lez\": \"الليزجية\",
        \"lg\": \"الغاندا\",
        \"li\": \"الليمبورغية\",
        \"lkt\": \"لاكوتا\",
        \"ln\": \"اللينجالا\",
        \"lo\": \"اللاوية\",
        \"lol\": \"منغولى\",
        \"lou\": \"الكريولية اللويزيانية\",
        \"loz\": \"اللوزي\",
        \"lrc\": \"اللرية الشمالية\",
        \"lt\": \"الليتوانية\",
        \"lu\": \"اللوبا كاتانغا\",
        \"lua\": \"اللبا-لؤلؤ\",
        \"lui\": \"اللوسينو\",
        \"lun\": \"اللوندا\",
        \"luo\": \"اللو\",
        \"lus\": \"الميزو\",
        \"luy\": \"لغة اللويا\",
        \"lv\": \"اللاتفية\",
        \"mad\": \"المادريز\",
        \"mag\": \"الماجا\",
        \"mai\": \"المايثيلي\",
        \"mak\": \"الماكاسار\",
        \"man\": \"الماندينغ\",
        \"mas\": \"الماساي\",
        \"mde\": \"مابا\",
        \"mdf\": \"الموكشا\",
        \"mdr\": \"الماندار\",
        \"men\": \"الميند\",
        \"mer\": \"الميرو\",
        \"mfe\": \"المورسيانية\",
        \"mg\": \"الملغاشي\",
        \"mga\": \"الأيرلندية الوسطى\",
        \"mgh\": \"ماخاوا-ميتو\",
        \"mgo\": \"ميتا\",
        \"mh\": \"المارشالية\",
        \"mi\": \"الماورية\",
        \"mic\": \"الميكماكيونية\",
        \"min\": \"المينانجكاباو\",
        \"mk\": \"المقدونية\",
        \"ml\": \"المالايالامية\",
        \"mn\": \"المنغولية\",
        \"mnc\": \"المانشو\",
        \"mni\": \"المانيبورية\",
        \"moh\": \"الموهوك\",
        \"mos\": \"الموسي\",
        \"mr\": \"الماراثية\",
        \"ms\": \"الماليزية\",
        \"mt\": \"المالطية\",
        \"mua\": \"مندنج\",
        \"mus\": \"الكريك\",
        \"mwl\": \"الميرانديز\",
        \"mwr\": \"الماروارية\",
        \"my\": \"البورمية\",
        \"myv\": \"الأرزية\",
        \"mzn\": \"المازندرانية\",
        \"na\": \"النورو\",
        \"nan\": \"مين-نان الصينية\",
        \"nap\": \"النابولية\",
        \"naq\": \"لغة الناما\",
        \"nb\": \"النرويجية بوكمال\",
        \"nd\": \"النديبيل الشمالية\",
        \"nds\": \"الألمانية السفلى\",
        \"nds_NL\": \"السكسونية السفلى\",
        \"ne\": \"النيبالية\",
        \"new\": \"النوارية\",
        \"ng\": \"الندونجا\",
        \"nia\": \"النياس\",
        \"niu\": \"النيوي\",
        \"nl\": \"الهولندية\",
        \"nl_BE\": \"الفلمنكية\",
        \"nmg\": \"كواسيو\",
        \"nn\": \"النرويجية نينورسك\",
        \"nnh\": \"لغة النجيمبون\",
        \"no\": \"النرويجية\",
        \"nog\": \"النوجاي\",
        \"non\": \"النورس القديم\",
        \"nqo\": \"أنكو\",
        \"nr\": \"النديبيل الجنوبي\",
        \"nso\": \"السوتو الشمالية\",
        \"nus\": \"النوير\",
        \"nv\": \"النافاجو\",
        \"nwc\": \"النوارية التقليدية\",
        \"ny\": \"النيانجا\",
        \"nym\": \"النيامويزي\",
        \"nyn\": \"النيانكول\",
        \"nyo\": \"النيورو\",
        \"nzi\": \"النزيما\",
        \"oc\": \"الأوكسيتانية\",
        \"oj\": \"الأوجيبوا\",
        \"om\": \"الأورومية\",
        \"or\": \"الأورية\",
        \"os\": \"الأوسيتيك\",
        \"osa\": \"الأوساج\",
        \"ota\": \"التركية العثمانية\",
        \"pa\": \"البنجابية\",
        \"pag\": \"البانجاسينان\",
        \"pal\": \"البهلوية\",
        \"pam\": \"البامبانجا\",
        \"pap\": \"البابيامينتو\",
        \"pau\": \"البالوان\",
        \"pcm\": \"البدجنية النيجيرية\",
        \"peo\": \"الفارسية القديمة\",
        \"phn\": \"الفينيقية\",
        \"pi\": \"البالية\",
        \"pl\": \"البولندية\",
        \"pon\": \"البوهنبيايان\",
        \"prg\": \"البروسياوية\",
        \"pro\": \"البروفانسية القديمة\",
        \"ps\": \"البشتو\",
        \"pt\": \"البرتغالية\",
        \"pt_BR\": \"البرتغالية البرازيلية\",
        \"pt_PT\": \"البرتغالية الأوروبية\",
        \"qu\": \"الكويتشوا\",
        \"quc\": \"الكيشية\",
        \"raj\": \"الراجاسثانية\",
        \"rap\": \"الراباني\",
        \"rar\": \"الراروتونجاني\",
        \"rm\": \"الرومانشية\",
        \"rn\": \"الرندي\",
        \"ro\": \"الرومانية\",
        \"ro_MD\": \"المولدوفية\",
        \"rof\": \"الرومبو\",
        \"rom\": \"الغجرية\",
        \"root\": \"الجذر\",
        \"ru\": \"الروسية\",
        \"rup\": \"الأرومانيان\",
        \"rw\": \"الكينيارواندا\",
        \"rwk\": \"الروا\",
        \"sa\": \"السنسكريتية\",
        \"sad\": \"السانداوي\",
        \"sah\": \"الساخيّة\",
        \"sam\": \"الآرامية السامرية\",
        \"saq\": \"سامبورو\",
        \"sas\": \"الساساك\",
        \"sat\": \"السانتالية\",
        \"sba\": \"نامبي\",
        \"sbp\": \"سانغو\",
        \"sc\": \"السردينية\",
        \"scn\": \"الصقلية\",
        \"sco\": \"الأسكتلندية\",
        \"sd\": \"السندية\",
        \"sdh\": \"الكردية الجنوبية\",
        \"se\": \"سامي الشمالية\",
        \"see\": \"السنيكا\",
        \"seh\": \"سينا\",
        \"sel\": \"السيلكب\",
        \"ses\": \"كويرابورو سيني\",
        \"sg\": \"السانجو\",
        \"sga\": \"الأيرلندية القديمة\",
        \"sh\": \"صربية-كرواتية\",
        \"shi\": \"تشلحيت\",
        \"shn\": \"الشان\",
        \"shu\": \"العربية التشادية\",
        \"si\": \"السنهالية\",
        \"sid\": \"السيدامو\",
        \"sk\": \"السلوفاكية\",
        \"sl\": \"السلوفانية\",
        \"sm\": \"الساموائية\",
        \"sma\": \"السامي الجنوبي\",
        \"smj\": \"اللول سامي\",
        \"smn\": \"الإيناري سامي\",
        \"sms\": \"السكولت سامي\",
        \"sn\": \"الشونا\",
        \"snk\": \"السونينك\",
        \"so\": \"الصومالية\",
        \"sog\": \"السوجدين\",
        \"sq\": \"الألبانية\",
        \"sr\": \"الصربية\",
        \"srn\": \"السرانان تونجو\",
        \"srr\": \"السرر\",
        \"ss\": \"السواتي\",
        \"ssy\": \"لغة الساهو\",
        \"st\": \"السوتو الجنوبية\",
        \"su\": \"السوندانية\",
        \"suk\": \"السوكوما\",
        \"sus\": \"السوسو\",
        \"sux\": \"السومارية\",
        \"sv\": \"السويدية\",
        \"sw\": \"السواحلية\",
        \"sw_CD\": \"الكونغو السواحلية\",
        \"swb\": \"القمرية\",
        \"syc\": \"سريانية تقليدية\",
        \"syr\": \"السريانية\",
        \"ta\": \"التاميلية\",
        \"te\": \"التيلوغوية\",
        \"tem\": \"التيمن\",
        \"teo\": \"تيسو\",
        \"ter\": \"التيرينو\",
        \"tet\": \"التيتم\",
        \"tg\": \"الطاجيكية\",
        \"th\": \"التايلاندية\",
        \"ti\": \"التغرينية\",
        \"tig\": \"التيغرية\",
        \"tiv\": \"التيف\",
        \"tk\": \"التركمانية\",
        \"tkl\": \"التوكيلاو\",
        \"tl\": \"التاغالوغية\",
        \"tlh\": \"الكلينجون\",
        \"tli\": \"التلينغيتية\",
        \"tmh\": \"التاماشيك\",
        \"tn\": \"التسوانية\",
        \"to\": \"التونغية\",
        \"tog\": \"تونجا - نياسا\",
        \"tpi\": \"التوك بيسين\",
        \"tr\": \"التركية\",
        \"trv\": \"لغة التاروكو\",
        \"ts\": \"السونجا\",
        \"tsi\": \"التسيمشيان\",
        \"tt\": \"التترية\",
        \"tum\": \"التامبوكا\",
        \"tvl\": \"التوفالو\",
        \"tw\": \"التوي\",
        \"twq\": \"تاساواق\",
        \"ty\": \"التاهيتية\",
        \"tyv\": \"التوفية\",
        \"tzm\": \"الأمازيغية وسط الأطلس\",
        \"udm\": \"الأدمرت\",
        \"ug\": \"الأويغورية\",
        \"uga\": \"اليجاريتيك\",
        \"uk\": \"الأوكرانية\",
        \"umb\": \"الأمبندو\",
        \"ur\": \"الأوردية\",
        \"uz\": \"الأوزبكية\",
        \"vai\": \"الفاي\",
        \"ve\": \"الفيندا\",
        \"vi\": \"الفيتنامية\",
        \"vo\": \"لغة الفولابوك\",
        \"vot\": \"الفوتيك\",
        \"vun\": \"الفونجو\",
        \"wa\": \"الولونية\",
        \"wae\": \"الوالسر\",
        \"wal\": \"الولاياتا\",
        \"war\": \"الواراي\",
        \"was\": \"الواشو\",
        \"wbp\": \"وارلبيري\",
        \"wo\": \"الولوفية\",
        \"wuu\": \"الوو الصينية\",
        \"xal\": \"الكالميك\",
        \"xh\": \"الخوسا\",
        \"xog\": \"السوغا\",
        \"yao\": \"الياو\",
        \"yap\": \"اليابيز\",
        \"yav\": \"يانجبن\",
        \"ybb\": \"يمبا\",
        \"yi\": \"اليديشية\",
        \"yo\": \"اليوروبا\",
        \"yue\": \"الكَنْتُونية\",
        \"za\": \"الزهيونج\",
        \"zap\": \"الزابوتيك\",
        \"zbl\": \"رموز المعايير الأساسية\",
        \"zen\": \"الزيناجا\",
        \"zgh\": \"التمازيغية المغربية القياسية\",
        \"zh\": \"الصينية\",
        \"zh_Hans\": \"الصينية المبسطة\",
        \"zh_Hant\": \"الصينية التقليدية\",
        \"zu\": \"الزولو\",
        \"zun\": \"الزونية\",
        \"zza\": \"زازا\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ar.json";
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
        \"aa\": \"الأفارية\",
        \"ab\": \"الأبخازية\",
        \"ace\": \"الأتشينيزية\",
        \"ach\": \"الأكولية\",
        \"ada\": \"الأدانجمية\",
        \"ady\": \"الأديغة\",
        \"ae\": \"الأفستية\",
        \"af\": \"الأفريقانية\",
        \"afh\": \"الأفريهيلية\",
        \"agq\": \"الأغم\",
        \"ain\": \"الآينوية\",
        \"ak\": \"الأكانية\",
        \"akk\": \"الأكادية\",
        \"ale\": \"الأليوتية\",
        \"alt\": \"الألطائية الجنوبية\",
        \"am\": \"الأمهرية\",
        \"an\": \"الأراغونية\",
        \"ang\": \"الإنجليزية القديمة\",
        \"anp\": \"الأنجيكا\",
        \"ar\": \"العربية\",
        \"ar_001\": \"العربية الفصحى الحديثة\",
        \"arc\": \"الآرامية\",
        \"arn\": \"المابودونغونية\",
        \"arp\": \"الأراباهو\",
        \"ars\": \"اللهجة النجدية\",
        \"arw\": \"الأراواكية\",
        \"as\": \"الأسامية\",
        \"asa\": \"الآسو\",
        \"ast\": \"الأسترية\",
        \"av\": \"الأوارية\",
        \"awa\": \"الأوادية\",
        \"ay\": \"الأيمارا\",
        \"az\": \"الأذربيجانية\",
        \"ba\": \"الباشكيرية\",
        \"bal\": \"البلوشية\",
        \"ban\": \"البالينية\",
        \"bas\": \"الباسا\",
        \"bax\": \"بامن\",
        \"bbj\": \"لغة الغومالا\",
        \"be\": \"البيلاروسية\",
        \"bej\": \"البيجا\",
        \"bem\": \"البيمبا\",
        \"bez\": \"بينا\",
        \"bfd\": \"لغة البافوت\",
        \"bg\": \"البلغارية\",
        \"bgn\": \"البلوشية الغربية\",
        \"bho\": \"البهوجبورية\",
        \"bi\": \"البيسلامية\",
        \"bik\": \"البيكولية\",
        \"bin\": \"البينية\",
        \"bkm\": \"لغة الكوم\",
        \"bla\": \"السيكسيكية\",
        \"bm\": \"البامبارا\",
        \"bn\": \"البنغالية\",
        \"bo\": \"التبتية\",
        \"br\": \"البريتونية\",
        \"bra\": \"البراجية\",
        \"brx\": \"البودو\",
        \"bs\": \"البوسنية\",
        \"bss\": \"أكوس\",
        \"bua\": \"البرياتية\",
        \"bug\": \"البجينيزية\",
        \"bum\": \"لغة البولو\",
        \"byn\": \"البلينية\",
        \"byv\": \"لغة الميدومبا\",
        \"ca\": \"الكتالانية\",
        \"cad\": \"الكادو\",
        \"car\": \"الكاريبية\",
        \"cay\": \"الكايوجية\",
        \"cch\": \"الأتسام\",
        \"ccp\": \"تشاكما\",
        \"ce\": \"الشيشانية\",
        \"ceb\": \"السيبيوانية\",
        \"cgg\": \"تشيغا\",
        \"ch\": \"التشامورو\",
        \"chb\": \"التشيبشا\",
        \"chg\": \"التشاجاتاي\",
        \"chk\": \"التشكيزية\",
        \"chm\": \"الماري\",
        \"chn\": \"الشينوك جارجون\",
        \"cho\": \"الشوكتو\",
        \"chp\": \"الشيباوايان\",
        \"chr\": \"الشيروكي\",
        \"chy\": \"الشايان\",
        \"ckb\": \"السورانية الكردية\",
        \"co\": \"الكورسيكية\",
        \"cop\": \"القبطية\",
        \"cr\": \"الكرى\",
        \"crh\": \"لغة تتار القرم\",
        \"crs\": \"الفرنسية الكريولية السيشيلية\",
        \"cs\": \"التشيكية\",
        \"csb\": \"الكاشبايان\",
        \"cu\": \"سلافية كنسية\",
        \"cv\": \"التشوفاشي\",
        \"cy\": \"الويلزية\",
        \"da\": \"الدانمركية\",
        \"dak\": \"الداكوتا\",
        \"dar\": \"الدارجوا\",
        \"dav\": \"تيتا\",
        \"de\": \"الألمانية\",
        \"de_AT\": \"الألمانية النمساوية\",
        \"de_CH\": \"الألمانية العليا السويسرية\",
        \"del\": \"الديلوير\",
        \"den\": \"السلافية\",
        \"dgr\": \"الدوجريب\",
        \"din\": \"الدنكا\",
        \"dje\": \"الزارمية\",
        \"doi\": \"الدوجرية\",
        \"dsb\": \"صوربيا السفلى\",
        \"dua\": \"الديولا\",
        \"dum\": \"الهولندية الوسطى\",
        \"dv\": \"المالديفية\",
        \"dyo\": \"جولا فونيا\",
        \"dyu\": \"الدايلا\",
        \"dz\": \"الزونخاية\",
        \"dzg\": \"القرعانية\",
        \"ebu\": \"إمبو\",
        \"ee\": \"الإيوي\",
        \"efi\": \"الإفيك\",
        \"egy\": \"المصرية القديمة\",
        \"eka\": \"الإكاجك\",
        \"el\": \"اليونانية\",
        \"elx\": \"الإمايت\",
        \"en\": \"الإنجليزية\",
        \"en_AU\": \"الإنجليزية الأسترالية\",
        \"en_CA\": \"الإنجليزية الكندية\",
        \"en_GB\": \"الإنجليزية البريطانية\",
        \"en_US\": \"الإنجليزية الأمريكية\",
        \"enm\": \"الإنجليزية الوسطى\",
        \"eo\": \"الإسبرانتو\",
        \"es\": \"الإسبانية\",
        \"es_419\": \"الإسبانية أمريكا اللاتينية\",
        \"es_ES\": \"الإسبانية الأوروبية\",
        \"es_MX\": \"الإسبانية المكسيكية\",
        \"et\": \"الإستونية\",
        \"eu\": \"الباسكية\",
        \"ewo\": \"الإيوندو\",
        \"fa\": \"الفارسية\",
        \"fan\": \"الفانج\",
        \"fat\": \"الفانتي\",
        \"ff\": \"الفولانية\",
        \"fi\": \"الفنلندية\",
        \"fil\": \"الفلبينية\",
        \"fj\": \"الفيجية\",
        \"fo\": \"الفاروية\",
        \"fon\": \"الفون\",
        \"fr\": \"الفرنسية\",
        \"fr_CA\": \"الفرنسية الكندية\",
        \"fr_CH\": \"الفرنسية السويسرية\",
        \"frc\": \"الفرنسية الكاجونية\",
        \"frm\": \"الفرنسية الوسطى\",
        \"fro\": \"الفرنسية القديمة\",
        \"frr\": \"الفريزينية الشمالية\",
        \"frs\": \"الفريزينية الشرقية\",
        \"fur\": \"الفريلايان\",
        \"fy\": \"الفريزيان\",
        \"ga\": \"الأيرلندية\",
        \"gaa\": \"الجا\",
        \"gag\": \"الغاغوز\",
        \"gan\": \"الغان الصينية\",
        \"gay\": \"الجايو\",
        \"gba\": \"الجبيا\",
        \"gd\": \"الغيلية الأسكتلندية\",
        \"gez\": \"الجعزية\",
        \"gil\": \"لغة أهل جبل طارق\",
        \"gl\": \"الجاليكية\",
        \"gmh\": \"الألمانية العليا الوسطى\",
        \"gn\": \"الغوارانية\",
        \"goh\": \"الألمانية العليا القديمة\",
        \"gon\": \"الجندي\",
        \"gor\": \"الجورونتالو\",
        \"got\": \"القوطية\",
        \"grb\": \"الجريبو\",
        \"grc\": \"اليونانية القديمة\",
        \"gsw\": \"الألمانية السويسرية\",
        \"gu\": \"الغوجاراتية\",
        \"guz\": \"الغيزية\",
        \"gv\": \"المنكية\",
        \"gwi\": \"غوتشن\",
        \"ha\": \"الهوسا\",
        \"hai\": \"الهيدا\",
        \"hak\": \"الهاكا الصينية\",
        \"haw\": \"لغة هاواي\",
        \"he\": \"العبرية\",
        \"hi\": \"الهندية\",
        \"hil\": \"الهيليجينون\",
        \"hit\": \"الحثية\",
        \"hmn\": \"الهمونجية\",
        \"ho\": \"الهيري موتو\",
        \"hr\": \"الكرواتية\",
        \"hsb\": \"الصوربية العليا\",
        \"hsn\": \"شيانغ الصينية\",
        \"ht\": \"الكريولية الهايتية\",
        \"hu\": \"الهنغارية\",
        \"hup\": \"الهبا\",
        \"hy\": \"الأرمنية\",
        \"hz\": \"الهيريرو\",
        \"ia\": \"اللّغة الوسيطة\",
        \"iba\": \"الإيبان\",
        \"ibb\": \"الإيبيبيو\",
        \"id\": \"الإندونيسية\",
        \"ie\": \"الإنترلينج\",
        \"ig\": \"الإيجبو\",
        \"ii\": \"السيتشيون يي\",
        \"ik\": \"الإينبياك\",
        \"ilo\": \"الإيلوكو\",
        \"inh\": \"الإنجوشية\",
        \"io\": \"الإيدو\",
        \"is\": \"الأيسلندية\",
        \"it\": \"الإيطالية\",
        \"iu\": \"الإينكتيتت\",
        \"ja\": \"اليابانية\",
        \"jbo\": \"اللوجبان\",
        \"jgo\": \"نغومبا\",
        \"jmc\": \"الماتشامية\",
        \"jpr\": \"الفارسية اليهودية\",
        \"jrb\": \"العربية اليهودية\",
        \"jv\": \"الجاوية\",
        \"ka\": \"الجورجية\",
        \"kaa\": \"الكارا-كالباك\",
        \"kab\": \"القبيلية\",
        \"kac\": \"الكاتشين\",
        \"kaj\": \"الجو\",
        \"kam\": \"الكامبا\",
        \"kaw\": \"الكوي\",
        \"kbd\": \"الكاباردايان\",
        \"kbl\": \"كانمبو\",
        \"kcg\": \"التايابية\",
        \"kde\": \"ماكونده\",
        \"kea\": \"كابوفيرديانو\",
        \"kfo\": \"الكورو\",
        \"kg\": \"الكونغو\",
        \"kha\": \"الكازية\",
        \"kho\": \"الخوتانيز\",
        \"khq\": \"كويرا تشيني\",
        \"ki\": \"الكيكيو\",
        \"kj\": \"الكيونياما\",
        \"kk\": \"الكازاخستانية\",
        \"kkj\": \"لغة الكاكو\",
        \"kl\": \"الكالاليست\",
        \"kln\": \"كالينجين\",
        \"km\": \"الخميرية\",
        \"kmb\": \"الكيمبندو\",
        \"kn\": \"الكانادا\",
        \"ko\": \"الكورية\",
        \"koi\": \"كومي-بيرماياك\",
        \"kok\": \"الكونكانية\",
        \"kos\": \"الكوسراين\",
        \"kpe\": \"الكبيل\",
        \"kr\": \"الكانوري\",
        \"krc\": \"الكاراتشاي-بالكار\",
        \"krl\": \"الكاريلية\",
        \"kru\": \"الكوروخ\",
        \"ks\": \"الكشميرية\",
        \"ksb\": \"شامبالا\",
        \"ksf\": \"لغة البافيا\",
        \"ksh\": \"لغة الكولونيان\",
        \"ku\": \"الكردية\",
        \"kum\": \"القموقية\",
        \"kut\": \"الكتيناي\",
        \"kv\": \"الكومي\",
        \"kw\": \"الكورنية\",
        \"ky\": \"القيرغيزية\",
        \"la\": \"اللاتينية\",
        \"lad\": \"اللادينو\",
        \"lag\": \"لانجي\",
        \"lah\": \"اللاهندا\",
        \"lam\": \"اللامبا\",
        \"lb\": \"اللكسمبورغية\",
        \"lez\": \"الليزجية\",
        \"lg\": \"الغاندا\",
        \"li\": \"الليمبورغية\",
        \"lkt\": \"لاكوتا\",
        \"ln\": \"اللينجالا\",
        \"lo\": \"اللاوية\",
        \"lol\": \"منغولى\",
        \"lou\": \"الكريولية اللويزيانية\",
        \"loz\": \"اللوزي\",
        \"lrc\": \"اللرية الشمالية\",
        \"lt\": \"الليتوانية\",
        \"lu\": \"اللوبا كاتانغا\",
        \"lua\": \"اللبا-لؤلؤ\",
        \"lui\": \"اللوسينو\",
        \"lun\": \"اللوندا\",
        \"luo\": \"اللو\",
        \"lus\": \"الميزو\",
        \"luy\": \"لغة اللويا\",
        \"lv\": \"اللاتفية\",
        \"mad\": \"المادريز\",
        \"mag\": \"الماجا\",
        \"mai\": \"المايثيلي\",
        \"mak\": \"الماكاسار\",
        \"man\": \"الماندينغ\",
        \"mas\": \"الماساي\",
        \"mde\": \"مابا\",
        \"mdf\": \"الموكشا\",
        \"mdr\": \"الماندار\",
        \"men\": \"الميند\",
        \"mer\": \"الميرو\",
        \"mfe\": \"المورسيانية\",
        \"mg\": \"الملغاشي\",
        \"mga\": \"الأيرلندية الوسطى\",
        \"mgh\": \"ماخاوا-ميتو\",
        \"mgo\": \"ميتا\",
        \"mh\": \"المارشالية\",
        \"mi\": \"الماورية\",
        \"mic\": \"الميكماكيونية\",
        \"min\": \"المينانجكاباو\",
        \"mk\": \"المقدونية\",
        \"ml\": \"المالايالامية\",
        \"mn\": \"المنغولية\",
        \"mnc\": \"المانشو\",
        \"mni\": \"المانيبورية\",
        \"moh\": \"الموهوك\",
        \"mos\": \"الموسي\",
        \"mr\": \"الماراثية\",
        \"ms\": \"الماليزية\",
        \"mt\": \"المالطية\",
        \"mua\": \"مندنج\",
        \"mus\": \"الكريك\",
        \"mwl\": \"الميرانديز\",
        \"mwr\": \"الماروارية\",
        \"my\": \"البورمية\",
        \"myv\": \"الأرزية\",
        \"mzn\": \"المازندرانية\",
        \"na\": \"النورو\",
        \"nan\": \"مين-نان الصينية\",
        \"nap\": \"النابولية\",
        \"naq\": \"لغة الناما\",
        \"nb\": \"النرويجية بوكمال\",
        \"nd\": \"النديبيل الشمالية\",
        \"nds\": \"الألمانية السفلى\",
        \"nds_NL\": \"السكسونية السفلى\",
        \"ne\": \"النيبالية\",
        \"new\": \"النوارية\",
        \"ng\": \"الندونجا\",
        \"nia\": \"النياس\",
        \"niu\": \"النيوي\",
        \"nl\": \"الهولندية\",
        \"nl_BE\": \"الفلمنكية\",
        \"nmg\": \"كواسيو\",
        \"nn\": \"النرويجية نينورسك\",
        \"nnh\": \"لغة النجيمبون\",
        \"no\": \"النرويجية\",
        \"nog\": \"النوجاي\",
        \"non\": \"النورس القديم\",
        \"nqo\": \"أنكو\",
        \"nr\": \"النديبيل الجنوبي\",
        \"nso\": \"السوتو الشمالية\",
        \"nus\": \"النوير\",
        \"nv\": \"النافاجو\",
        \"nwc\": \"النوارية التقليدية\",
        \"ny\": \"النيانجا\",
        \"nym\": \"النيامويزي\",
        \"nyn\": \"النيانكول\",
        \"nyo\": \"النيورو\",
        \"nzi\": \"النزيما\",
        \"oc\": \"الأوكسيتانية\",
        \"oj\": \"الأوجيبوا\",
        \"om\": \"الأورومية\",
        \"or\": \"الأورية\",
        \"os\": \"الأوسيتيك\",
        \"osa\": \"الأوساج\",
        \"ota\": \"التركية العثمانية\",
        \"pa\": \"البنجابية\",
        \"pag\": \"البانجاسينان\",
        \"pal\": \"البهلوية\",
        \"pam\": \"البامبانجا\",
        \"pap\": \"البابيامينتو\",
        \"pau\": \"البالوان\",
        \"pcm\": \"البدجنية النيجيرية\",
        \"peo\": \"الفارسية القديمة\",
        \"phn\": \"الفينيقية\",
        \"pi\": \"البالية\",
        \"pl\": \"البولندية\",
        \"pon\": \"البوهنبيايان\",
        \"prg\": \"البروسياوية\",
        \"pro\": \"البروفانسية القديمة\",
        \"ps\": \"البشتو\",
        \"pt\": \"البرتغالية\",
        \"pt_BR\": \"البرتغالية البرازيلية\",
        \"pt_PT\": \"البرتغالية الأوروبية\",
        \"qu\": \"الكويتشوا\",
        \"quc\": \"الكيشية\",
        \"raj\": \"الراجاسثانية\",
        \"rap\": \"الراباني\",
        \"rar\": \"الراروتونجاني\",
        \"rm\": \"الرومانشية\",
        \"rn\": \"الرندي\",
        \"ro\": \"الرومانية\",
        \"ro_MD\": \"المولدوفية\",
        \"rof\": \"الرومبو\",
        \"rom\": \"الغجرية\",
        \"root\": \"الجذر\",
        \"ru\": \"الروسية\",
        \"rup\": \"الأرومانيان\",
        \"rw\": \"الكينيارواندا\",
        \"rwk\": \"الروا\",
        \"sa\": \"السنسكريتية\",
        \"sad\": \"السانداوي\",
        \"sah\": \"الساخيّة\",
        \"sam\": \"الآرامية السامرية\",
        \"saq\": \"سامبورو\",
        \"sas\": \"الساساك\",
        \"sat\": \"السانتالية\",
        \"sba\": \"نامبي\",
        \"sbp\": \"سانغو\",
        \"sc\": \"السردينية\",
        \"scn\": \"الصقلية\",
        \"sco\": \"الأسكتلندية\",
        \"sd\": \"السندية\",
        \"sdh\": \"الكردية الجنوبية\",
        \"se\": \"سامي الشمالية\",
        \"see\": \"السنيكا\",
        \"seh\": \"سينا\",
        \"sel\": \"السيلكب\",
        \"ses\": \"كويرابورو سيني\",
        \"sg\": \"السانجو\",
        \"sga\": \"الأيرلندية القديمة\",
        \"sh\": \"صربية-كرواتية\",
        \"shi\": \"تشلحيت\",
        \"shn\": \"الشان\",
        \"shu\": \"العربية التشادية\",
        \"si\": \"السنهالية\",
        \"sid\": \"السيدامو\",
        \"sk\": \"السلوفاكية\",
        \"sl\": \"السلوفانية\",
        \"sm\": \"الساموائية\",
        \"sma\": \"السامي الجنوبي\",
        \"smj\": \"اللول سامي\",
        \"smn\": \"الإيناري سامي\",
        \"sms\": \"السكولت سامي\",
        \"sn\": \"الشونا\",
        \"snk\": \"السونينك\",
        \"so\": \"الصومالية\",
        \"sog\": \"السوجدين\",
        \"sq\": \"الألبانية\",
        \"sr\": \"الصربية\",
        \"srn\": \"السرانان تونجو\",
        \"srr\": \"السرر\",
        \"ss\": \"السواتي\",
        \"ssy\": \"لغة الساهو\",
        \"st\": \"السوتو الجنوبية\",
        \"su\": \"السوندانية\",
        \"suk\": \"السوكوما\",
        \"sus\": \"السوسو\",
        \"sux\": \"السومارية\",
        \"sv\": \"السويدية\",
        \"sw\": \"السواحلية\",
        \"sw_CD\": \"الكونغو السواحلية\",
        \"swb\": \"القمرية\",
        \"syc\": \"سريانية تقليدية\",
        \"syr\": \"السريانية\",
        \"ta\": \"التاميلية\",
        \"te\": \"التيلوغوية\",
        \"tem\": \"التيمن\",
        \"teo\": \"تيسو\",
        \"ter\": \"التيرينو\",
        \"tet\": \"التيتم\",
        \"tg\": \"الطاجيكية\",
        \"th\": \"التايلاندية\",
        \"ti\": \"التغرينية\",
        \"tig\": \"التيغرية\",
        \"tiv\": \"التيف\",
        \"tk\": \"التركمانية\",
        \"tkl\": \"التوكيلاو\",
        \"tl\": \"التاغالوغية\",
        \"tlh\": \"الكلينجون\",
        \"tli\": \"التلينغيتية\",
        \"tmh\": \"التاماشيك\",
        \"tn\": \"التسوانية\",
        \"to\": \"التونغية\",
        \"tog\": \"تونجا - نياسا\",
        \"tpi\": \"التوك بيسين\",
        \"tr\": \"التركية\",
        \"trv\": \"لغة التاروكو\",
        \"ts\": \"السونجا\",
        \"tsi\": \"التسيمشيان\",
        \"tt\": \"التترية\",
        \"tum\": \"التامبوكا\",
        \"tvl\": \"التوفالو\",
        \"tw\": \"التوي\",
        \"twq\": \"تاساواق\",
        \"ty\": \"التاهيتية\",
        \"tyv\": \"التوفية\",
        \"tzm\": \"الأمازيغية وسط الأطلس\",
        \"udm\": \"الأدمرت\",
        \"ug\": \"الأويغورية\",
        \"uga\": \"اليجاريتيك\",
        \"uk\": \"الأوكرانية\",
        \"umb\": \"الأمبندو\",
        \"ur\": \"الأوردية\",
        \"uz\": \"الأوزبكية\",
        \"vai\": \"الفاي\",
        \"ve\": \"الفيندا\",
        \"vi\": \"الفيتنامية\",
        \"vo\": \"لغة الفولابوك\",
        \"vot\": \"الفوتيك\",
        \"vun\": \"الفونجو\",
        \"wa\": \"الولونية\",
        \"wae\": \"الوالسر\",
        \"wal\": \"الولاياتا\",
        \"war\": \"الواراي\",
        \"was\": \"الواشو\",
        \"wbp\": \"وارلبيري\",
        \"wo\": \"الولوفية\",
        \"wuu\": \"الوو الصينية\",
        \"xal\": \"الكالميك\",
        \"xh\": \"الخوسا\",
        \"xog\": \"السوغا\",
        \"yao\": \"الياو\",
        \"yap\": \"اليابيز\",
        \"yav\": \"يانجبن\",
        \"ybb\": \"يمبا\",
        \"yi\": \"اليديشية\",
        \"yo\": \"اليوروبا\",
        \"yue\": \"الكَنْتُونية\",
        \"za\": \"الزهيونج\",
        \"zap\": \"الزابوتيك\",
        \"zbl\": \"رموز المعايير الأساسية\",
        \"zen\": \"الزيناجا\",
        \"zgh\": \"التمازيغية المغربية القياسية\",
        \"zh\": \"الصينية\",
        \"zh_Hans\": \"الصينية المبسطة\",
        \"zh_Hant\": \"الصينية التقليدية\",
        \"zu\": \"الزولو\",
        \"zun\": \"الزونية\",
        \"zza\": \"زازا\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ar.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ar.json");
    }
}