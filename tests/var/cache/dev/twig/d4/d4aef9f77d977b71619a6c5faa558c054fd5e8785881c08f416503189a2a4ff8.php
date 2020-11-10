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

/* vendor/symfony/intl/Resources/data/languages/iw.json */
class __TwigTemplate_262efd2a53a2670d2f6837948219cffc32dac8aaa0b0e73b215b2f3be9dd9a6b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/iw.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/iw.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"אפארית\",
        \"ab\": \"אבחזית\",
        \"ace\": \"אכינזית\",
        \"ach\": \"אקצ׳ולי\",
        \"ada\": \"אדנמה\",
        \"ady\": \"אדיגית\",
        \"ae\": \"אבסטן\",
        \"af\": \"אפריקאנס\",
        \"afh\": \"אפריהילי\",
        \"agq\": \"אע׳ם\",
        \"ain\": \"אינו\",
        \"ak\": \"אקאן\",
        \"akk\": \"אכדית\",
        \"ale\": \"אלאוט\",
        \"alt\": \"אלטאי דרומית\",
        \"am\": \"אמהרית\",
        \"an\": \"אראגונית\",
        \"ang\": \"אנגלית עתיקה\",
        \"anp\": \"אנג׳יקה\",
        \"ar\": \"ערבית\",
        \"ar_001\": \"ערבית ספרותית\",
        \"arc\": \"ארמית\",
        \"arn\": \"אראוקנית\",
        \"arp\": \"אראפהו\",
        \"ars\": \"ערבית - נג׳ד\",
        \"arw\": \"ארוואק\",
        \"as\": \"אסאמית\",
        \"asa\": \"אסו\",
        \"ast\": \"אסטורית\",
        \"av\": \"אווארית\",
        \"awa\": \"אוואדית\",
        \"ay\": \"איימארית\",
        \"az\": \"אזרית\",
        \"ba\": \"בשקירית\",
        \"bal\": \"באלוצ׳י\",
        \"ban\": \"באלינזית\",
        \"bar\": \"בווארית\",
        \"bas\": \"בסאא\",
        \"bax\": \"במום\",
        \"bbj\": \"גומאלה\",
        \"be\": \"בלארוסית\",
        \"bej\": \"בז׳ה\",
        \"bem\": \"במבה\",
        \"bez\": \"בנה\",
        \"bfd\": \"באפוט\",
        \"bg\": \"בולגרית\",
        \"bgn\": \"באלוצ׳י מערבית\",
        \"bho\": \"בוג׳פורי\",
        \"bi\": \"ביסלמה\",
        \"bik\": \"ביקול\",
        \"bin\": \"ביני\",
        \"bkm\": \"קום\",
        \"bla\": \"סיקסיקה\",
        \"bm\": \"במבארה\",
        \"bn\": \"בנגלית\",
        \"bo\": \"טיבטית\",
        \"br\": \"ברטונית\",
        \"bra\": \"בראג׳\",
        \"brx\": \"בודו\",
        \"bs\": \"בוסנית\",
        \"bss\": \"אקוסה\",
        \"bua\": \"בוריאט\",
        \"bug\": \"בוגינזית\",
        \"bum\": \"בולו\",
        \"byn\": \"בלין\",
        \"byv\": \"מדומבה\",
        \"ca\": \"קטלאנית\",
        \"cad\": \"קאדו\",
        \"car\": \"קאריב\",
        \"cay\": \"קאיוגה\",
        \"cch\": \"אטסם\",
        \"ccp\": \"צ׳אקמה\",
        \"ce\": \"צ׳צ׳נית\",
        \"ceb\": \"סבואנו\",
        \"cgg\": \"צ׳יגה\",
        \"ch\": \"צ׳מורו\",
        \"chb\": \"צ׳יבצ׳ה\",
        \"chg\": \"צ׳אגאטאי\",
        \"chk\": \"צ׳וקסה\",
        \"chm\": \"מארי\",
        \"chn\": \"ניב צ׳ינוק\",
        \"cho\": \"צ׳וקטאו\",
        \"chp\": \"צ׳יפוויאן\",
        \"chr\": \"צ׳רוקי\",
        \"chy\": \"שאיין\",
        \"ckb\": \"כורדית סוראנית\",
        \"co\": \"קורסיקנית\",
        \"cop\": \"קופטית\",
        \"cr\": \"קרי\",
        \"crh\": \"טטרית של קרים\",
        \"crs\": \"קריאולית (סיישל)\",
        \"cs\": \"צ׳כית\",
        \"csb\": \"קשובית\",
        \"cu\": \"סלאבית כנסייתית עתיקה\",
        \"cv\": \"צ׳ובאש\",
        \"cy\": \"וולשית\",
        \"da\": \"דנית\",
        \"dak\": \"דקוטה\",
        \"dar\": \"דרגווה\",
        \"dav\": \"טאיטה\",
        \"de\": \"גרמנית\",
        \"de_CH\": \"גרמנית (שוויץ)\",
        \"del\": \"דלאוור\",
        \"den\": \"סלאבית\",
        \"dgr\": \"דוגריב\",
        \"din\": \"דינקה\",
        \"dje\": \"זארמה\",
        \"doi\": \"דוגרי\",
        \"dsb\": \"סורבית תחתית\",
        \"dua\": \"דואלה\",
        \"dum\": \"הולנדית תיכונה\",
        \"dv\": \"דיבהי\",
        \"dyo\": \"ג׳ולה פונית\",
        \"dyu\": \"דיולה\",
        \"dz\": \"דזונקה\",
        \"dzg\": \"דזאנגה\",
        \"ebu\": \"אמבו\",
        \"ee\": \"אווה\",
        \"efi\": \"אפיק\",
        \"egy\": \"מצרית עתיקה\",
        \"eka\": \"אקיוק\",
        \"el\": \"יוונית\",
        \"elx\": \"עילמית\",
        \"en\": \"אנגלית\",
        \"enm\": \"אנגלית תיכונה\",
        \"eo\": \"אספרנטו\",
        \"es\": \"ספרדית\",
        \"et\": \"אסטונית\",
        \"eu\": \"בסקית\",
        \"ewo\": \"אוונדו\",
        \"fa\": \"פרסית\",
        \"fan\": \"פנג\",
        \"fat\": \"פאנטי\",
        \"ff\": \"פולה\",
        \"fi\": \"פינית\",
        \"fil\": \"פיליפינית\",
        \"fj\": \"פיג׳ית\",
        \"fo\": \"פארואזית\",
        \"fon\": \"פון\",
        \"fr\": \"צרפתית\",
        \"fr_CH\": \"צרפתית (שוויץ)\",
        \"frc\": \"צרפתית קייג׳ונית\",
        \"frm\": \"צרפתית תיכונה\",
        \"fro\": \"צרפתית עתיקה\",
        \"frr\": \"פריזית צפונית\",
        \"frs\": \"פריזית מזרחית\",
        \"fur\": \"פריולית\",
        \"fy\": \"פריזית מערבית\",
        \"ga\": \"אירית\",
        \"gaa\": \"גא\",
        \"gag\": \"גגאוזית\",
        \"gan\": \"סינית גאן\",
        \"gay\": \"גאיו\",
        \"gba\": \"גבאיה\",
        \"gd\": \"גאלית סקוטית\",
        \"gez\": \"געז\",
        \"gil\": \"קיריבטית\",
        \"gl\": \"גליציאנית\",
        \"gmh\": \"גרמנית בינונית-גבוהה\",
        \"gn\": \"גוארני\",
        \"goh\": \"גרמנית עתיקה גבוהה\",
        \"gon\": \"גונדי\",
        \"gor\": \"גורונטאלו\",
        \"got\": \"גותית\",
        \"grb\": \"גרבו\",
        \"grc\": \"יוונית עתיקה\",
        \"gsw\": \"גרמנית (בשוויץ)\",
        \"gu\": \"גוג׳ארטי\",
        \"guz\": \"גוסי\",
        \"gv\": \"מאנית\",
        \"gwi\": \"גוויצ׳ן\",
        \"ha\": \"האוסה\",
        \"hai\": \"האידה\",
        \"hak\": \"סינית האקה\",
        \"haw\": \"הוואית\",
        \"he\": \"עברית\",
        \"hi\": \"הינדי\",
        \"hil\": \"היליגאינון\",
        \"hit\": \"חתית\",
        \"hmn\": \"המונג\",
        \"ho\": \"הירי מוטו\",
        \"hr\": \"קרואטית\",
        \"hsb\": \"סורבית עילית\",
        \"hsn\": \"סינית שיאנג\",
        \"ht\": \"קריאולית (האיטי)\",
        \"hu\": \"הונגרית\",
        \"hup\": \"הופה\",
        \"hy\": \"ארמנית\",
        \"hz\": \"הררו\",
        \"ia\": \"‏אינטרלינגואה\",
        \"iba\": \"איבאן\",
        \"ibb\": \"איביביו\",
        \"id\": \"אינדונזית\",
        \"ie\": \"אינטרלינגה\",
        \"ig\": \"איגבו\",
        \"ii\": \"סצ׳ואן יי\",
        \"ik\": \"אינופיאק\",
        \"ilo\": \"אילוקו\",
        \"inh\": \"אינגושית\",
        \"io\": \"אידו\",
        \"is\": \"איסלנדית\",
        \"it\": \"איטלקית\",
        \"iu\": \"אינוקטיטוט\",
        \"ja\": \"יפנית\",
        \"jbo\": \"לוז׳באן\",
        \"jgo\": \"נגומבה\",
        \"jmc\": \"מאקאמה\",
        \"jpr\": \"פרסית יהודית\",
        \"jrb\": \"ערבית יהודית\",
        \"jv\": \"יאוואית\",
        \"ka\": \"גאורגית\",
        \"kaa\": \"קארא-קלפאק\",
        \"kab\": \"קבילה\",
        \"kac\": \"קצ׳ין\",
        \"kaj\": \"ג׳ו\",
        \"kam\": \"קמבה\",
        \"kaw\": \"קאווי\",
        \"kbd\": \"קברדית\",
        \"kbl\": \"קנמבו\",
        \"kcg\": \"טיאפ\",
        \"kde\": \"מקונדה\",
        \"kea\": \"קאבוורדיאנו\",
        \"kfo\": \"קורו\",
        \"kg\": \"קונגו\",
        \"kha\": \"קהאסי\",
        \"kho\": \"קוטאנזית\",
        \"khq\": \"קוירה צ׳יני\",
        \"ki\": \"קיקויו\",
        \"kj\": \"קואניאמה\",
        \"kk\": \"קזחית\",
        \"kkj\": \"קאקו\",
        \"kl\": \"גרינלנדית\",
        \"kln\": \"קלנג׳ין\",
        \"km\": \"חמרית\",
        \"kmb\": \"קימבונדו\",
        \"kn\": \"קנאדה\",
        \"ko\": \"קוריאנית\",
        \"koi\": \"קומי-פרמיאקית\",
        \"kok\": \"קונקאני\",
        \"kos\": \"קוסראיאן\",
        \"kpe\": \"קפלה\",
        \"kr\": \"קאנורי\",
        \"krc\": \"קראצ׳י-בלקר\",
        \"krl\": \"קארלית\",
        \"kru\": \"קורוק\",
        \"ks\": \"קשמירית\",
        \"ksb\": \"שמבאלה\",
        \"ksf\": \"באפיה\",
        \"ksh\": \"קולוניאן\",
        \"ku\": \"כורדית\",
        \"kum\": \"קומיקית\",
        \"kut\": \"קוטנאי\",
        \"kv\": \"קומי\",
        \"kw\": \"קורנית\",
        \"ky\": \"קירגיזית\",
        \"la\": \"לטינית\",
        \"lad\": \"לדינו\",
        \"lag\": \"לאנגי\",
        \"lah\": \"לנדה\",
        \"lam\": \"למבה\",
        \"lb\": \"לוקסמבורגית\",
        \"lez\": \"לזגית\",
        \"lg\": \"גאנדה\",
        \"li\": \"לימבורגית\",
        \"lkt\": \"לקוטה\",
        \"ln\": \"לינגלה\",
        \"lo\": \"לאו\",
        \"lol\": \"מונגו\",
        \"lou\": \"קריאולית לואיזיאנית\",
        \"loz\": \"לוזית\",
        \"lrc\": \"לורית צפונית\",
        \"lt\": \"ליטאית\",
        \"lu\": \"לובה-קטנגה\",
        \"lua\": \"לובה-לולואה\",
        \"lui\": \"לויסנו\",
        \"lun\": \"לונדה\",
        \"luo\": \"לואו\",
        \"lus\": \"מיזו\",
        \"luy\": \"לויה\",
        \"lv\": \"לטבית\",
        \"mad\": \"מדורזית\",
        \"maf\": \"מאפאה\",
        \"mag\": \"מאגאהית\",
        \"mai\": \"מאיטילית\",
        \"mak\": \"מקסאר\",
        \"man\": \"מנדינגו\",
        \"mas\": \"מסאית\",
        \"mde\": \"מאבא\",
        \"mdf\": \"מוקשה\",
        \"mdr\": \"מנדאר\",
        \"men\": \"מנדה\",
        \"mer\": \"מרו\",
        \"mfe\": \"קריאולית מאוריציאנית\",
        \"mg\": \"מלגשית\",
        \"mga\": \"אירית תיכונה\",
        \"mgh\": \"מאקוואה מטו\",
        \"mgo\": \"מטא\",
        \"mh\": \"מרשלית\",
        \"mi\": \"מאורית\",
        \"mic\": \"מיקמק\",
        \"min\": \"מיננגקבאו\",
        \"mk\": \"מקדונית\",
        \"ml\": \"מליאלאם\",
        \"mn\": \"מונגולית\",
        \"mnc\": \"מנצ׳ו\",
        \"mni\": \"מניפורית\",
        \"moh\": \"מוהוק\",
        \"mos\": \"מוסי\",
        \"mr\": \"מראטהי\",
        \"ms\": \"מלאית\",
        \"mt\": \"מלטית\",
        \"mua\": \"מונדאנג\",
        \"mus\": \"קריק\",
        \"mwl\": \"מירנדזית\",
        \"mwr\": \"מרווארי\",
        \"my\": \"בורמזית\",
        \"mye\": \"מאיין\",
        \"myv\": \"ארזיה\",
        \"mzn\": \"מאזאנדראני\",
        \"na\": \"נאורית\",
        \"nan\": \"סינית מין נאן\",
        \"nap\": \"נפוליטנית\",
        \"naq\": \"נאמה\",
        \"nb\": \"נורווגית ספרותית\",
        \"nd\": \"נדבלה צפונית\",
        \"nds\": \"גרמנית תחתית\",
        \"nds_NL\": \"סקסונית תחתית\",
        \"ne\": \"נפאלית\",
        \"new\": \"נווארי\",
        \"ng\": \"נדונגה\",
        \"nia\": \"ניאס\",
        \"niu\": \"ניואן\",
        \"nl\": \"הולנדית\",
        \"nl_BE\": \"פלמית\",
        \"nmg\": \"קוואסיו\",
        \"nn\": \"נורווגית חדשה\",
        \"nnh\": \"נגיאמבון\",
        \"no\": \"נורווגית\",
        \"nog\": \"נוגאי\",
        \"non\": \"‏נורדית עתיקה\",
        \"nqo\": \"נ׳קו\",
        \"nr\": \"נדבלה דרומית\",
        \"nso\": \"סותו צפונית\",
        \"nus\": \"נואר\",
        \"nv\": \"נאוואחו\",
        \"nwc\": \"נווארית קלאסית\",
        \"ny\": \"ניאנג׳ה\",
        \"nym\": \"ניאמווזי\",
        \"nyn\": \"ניאנקולה\",
        \"nyo\": \"ניורו\",
        \"nzi\": \"נזימה\",
        \"oc\": \"אוקסיטנית\",
        \"oj\": \"אוג׳יבווה\",
        \"om\": \"אורומו\",
        \"or\": \"אורייה\",
        \"os\": \"אוסטית\",
        \"osa\": \"אוסג׳\",
        \"ota\": \"טורקית עות׳מנית\",
        \"pa\": \"פנג׳אבי\",
        \"pag\": \"פנגסינאן\",
        \"pal\": \"פלאבי\",
        \"pam\": \"פמפאניה\",
        \"pap\": \"פפיאמנטו\",
        \"pau\": \"פלוואן\",
        \"pcm\": \"ניגרית פידג׳ית\",
        \"peo\": \"פרסית עתיקה\",
        \"phn\": \"פיניקית\",
        \"pi\": \"פאלי\",
        \"pl\": \"פולנית\",
        \"pon\": \"פונפיאן\",
        \"prg\": \"פרוסית\",
        \"pro\": \"פרובנסאל עתיקה\",
        \"ps\": \"פאשטו\",
        \"pt\": \"פורטוגזית\",
        \"qu\": \"קצ׳ואה\",
        \"quc\": \"קיצ׳ה\",
        \"raj\": \"ראג׳סטאני\",
        \"rap\": \"רפאנוי\",
        \"rar\": \"ררוטונגאן\",
        \"rm\": \"רומאנש\",
        \"rn\": \"קירונדי\",
        \"ro\": \"רומנית\",
        \"ro_MD\": \"מולדבית\",
        \"rof\": \"רומבו\",
        \"rom\": \"רומאני\",
        \"root\": \"רוט\",
        \"ru\": \"רוסית\",
        \"rup\": \"ארומנית\",
        \"rw\": \"קנירואנדית\",
        \"rwk\": \"ראווה\",
        \"sa\": \"סנסקריט\",
        \"sad\": \"סנדאווה\",
        \"sah\": \"סאחה\",
        \"sam\": \"ארמית שומרונית\",
        \"saq\": \"סמבורו\",
        \"sas\": \"סאסק\",
        \"sat\": \"סאנטאלי\",
        \"sba\": \"נגמבאי\",
        \"sbp\": \"סאנגו\",
        \"sc\": \"סרדינית\",
        \"scn\": \"סיציליאנית\",
        \"sco\": \"סקוטית\",
        \"sd\": \"סינדהית\",
        \"sdh\": \"כורדית דרומית\",
        \"se\": \"סמי צפונית\",
        \"see\": \"סנקה\",
        \"seh\": \"סנה\",
        \"sel\": \"סלקופ\",
        \"ses\": \"קויראבורו סני\",
        \"sg\": \"סנגו\",
        \"sga\": \"אירית עתיקה\",
        \"sh\": \"סרבו-קרואטית\",
        \"shi\": \"שילה\",
        \"shn\": \"שאן\",
        \"shu\": \"ערבית צ׳אדית\",
        \"si\": \"סינהלה\",
        \"sid\": \"סידאמו\",
        \"sk\": \"סלובקית\",
        \"sl\": \"סלובנית\",
        \"sm\": \"סמואית\",
        \"sma\": \"סאמי דרומית\",
        \"smj\": \"לולה סאמי\",
        \"smn\": \"אינארי סאמי\",
        \"sms\": \"סקולט סאמי\",
        \"sn\": \"שונה\",
        \"snk\": \"סונינקה\",
        \"so\": \"סומלית\",
        \"sog\": \"סוגדיאן\",
        \"sq\": \"אלבנית\",
        \"sr\": \"סרבית\",
        \"srn\": \"סרנאן טונגו\",
        \"srr\": \"סרר\",
        \"ss\": \"סאווזי\",
        \"ssy\": \"סאהו\",
        \"st\": \"סותו דרומית\",
        \"su\": \"סונדנזית\",
        \"suk\": \"סוקומה\",
        \"sus\": \"סוסו\",
        \"sux\": \"שומרית\",
        \"sv\": \"שוודית\",
        \"sw\": \"סווהילי\",
        \"sw_CD\": \"סווהילי קונגו\",
        \"swb\": \"קומורית\",
        \"syc\": \"סירית קלאסית\",
        \"syr\": \"סורית\",
        \"ta\": \"טמילית\",
        \"te\": \"טלוגו\",
        \"tem\": \"טימנה\",
        \"teo\": \"טסו\",
        \"ter\": \"טרנו\",
        \"tet\": \"טטום\",
        \"tg\": \"טג׳יקית\",
        \"th\": \"תאית\",
        \"ti\": \"תיגרינית\",
        \"tig\": \"טיגרית\",
        \"tiv\": \"טיב\",
        \"tk\": \"טורקמנית\",
        \"tkl\": \"טוקלאו\",
        \"tl\": \"טאגאלוג\",
        \"tlh\": \"קלינגונית\",
        \"tli\": \"טלינגיט\",
        \"tmh\": \"טמאשק\",
        \"tn\": \"סוואנה\",
        \"to\": \"טונגאית\",
        \"tog\": \"ניאסה טונגה\",
        \"tpi\": \"טוק פיסין\",
        \"tr\": \"טורקית\",
        \"trv\": \"טרוקו\",
        \"ts\": \"טסונגה\",
        \"tsi\": \"טסימשיאן\",
        \"tt\": \"טטרית\",
        \"tum\": \"טומבוקה\",
        \"tvl\": \"טובאלו\",
        \"tw\": \"טווי\",
        \"twq\": \"טסוואק\",
        \"ty\": \"טהיטית\",
        \"tyv\": \"טובינית\",
        \"tzm\": \"תמאזיגת של מרכז מרוקו\",
        \"udm\": \"אודמורט\",
        \"ug\": \"אויגור\",
        \"uga\": \"אוגריתית\",
        \"uk\": \"אוקראינית\",
        \"umb\": \"אומבונדו\",
        \"ur\": \"אורדו\",
        \"uz\": \"אוזבקית\",
        \"vai\": \"וואי\",
        \"ve\": \"וונדה\",
        \"vi\": \"וייטנאמית\",
        \"vo\": \"‏וולאפיק\",
        \"vot\": \"ווטיק\",
        \"vun\": \"וונג׳ו\",
        \"wa\": \"ולונית\",
        \"wae\": \"וואלסר\",
        \"wal\": \"ווליאטה\",
        \"war\": \"ווראי\",
        \"was\": \"וואשו\",
        \"wbp\": \"וורלפירי\",
        \"wo\": \"וולוף\",
        \"wuu\": \"סינית וו\",
        \"xal\": \"קלמיקית\",
        \"xh\": \"קוסה\",
        \"xog\": \"סוגה\",
        \"yao\": \"יאו\",
        \"yap\": \"יאפזית\",
        \"yav\": \"יאנגבן\",
        \"ybb\": \"ימבה\",
        \"yi\": \"יידיש\",
        \"yo\": \"יורובה\",
        \"yue\": \"קנטונזית\",
        \"za\": \"זואנג\",
        \"zap\": \"זאפוטק\",
        \"zbl\": \"בליסימבולס\",
        \"zen\": \"זנאגה\",
        \"zgh\": \"תמזיע׳ת מרוקאית תקנית\",
        \"zh\": \"סינית\",
        \"zh_Hans\": \"סינית פשוטה\",
        \"zh_Hant\": \"סינית מסורתית\",
        \"zu\": \"זולו\",
        \"zun\": \"זוני\",
        \"zza\": \"זאזא\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/iw.json";
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
        \"aa\": \"אפארית\",
        \"ab\": \"אבחזית\",
        \"ace\": \"אכינזית\",
        \"ach\": \"אקצ׳ולי\",
        \"ada\": \"אדנמה\",
        \"ady\": \"אדיגית\",
        \"ae\": \"אבסטן\",
        \"af\": \"אפריקאנס\",
        \"afh\": \"אפריהילי\",
        \"agq\": \"אע׳ם\",
        \"ain\": \"אינו\",
        \"ak\": \"אקאן\",
        \"akk\": \"אכדית\",
        \"ale\": \"אלאוט\",
        \"alt\": \"אלטאי דרומית\",
        \"am\": \"אמהרית\",
        \"an\": \"אראגונית\",
        \"ang\": \"אנגלית עתיקה\",
        \"anp\": \"אנג׳יקה\",
        \"ar\": \"ערבית\",
        \"ar_001\": \"ערבית ספרותית\",
        \"arc\": \"ארמית\",
        \"arn\": \"אראוקנית\",
        \"arp\": \"אראפהו\",
        \"ars\": \"ערבית - נג׳ד\",
        \"arw\": \"ארוואק\",
        \"as\": \"אסאמית\",
        \"asa\": \"אסו\",
        \"ast\": \"אסטורית\",
        \"av\": \"אווארית\",
        \"awa\": \"אוואדית\",
        \"ay\": \"איימארית\",
        \"az\": \"אזרית\",
        \"ba\": \"בשקירית\",
        \"bal\": \"באלוצ׳י\",
        \"ban\": \"באלינזית\",
        \"bar\": \"בווארית\",
        \"bas\": \"בסאא\",
        \"bax\": \"במום\",
        \"bbj\": \"גומאלה\",
        \"be\": \"בלארוסית\",
        \"bej\": \"בז׳ה\",
        \"bem\": \"במבה\",
        \"bez\": \"בנה\",
        \"bfd\": \"באפוט\",
        \"bg\": \"בולגרית\",
        \"bgn\": \"באלוצ׳י מערבית\",
        \"bho\": \"בוג׳פורי\",
        \"bi\": \"ביסלמה\",
        \"bik\": \"ביקול\",
        \"bin\": \"ביני\",
        \"bkm\": \"קום\",
        \"bla\": \"סיקסיקה\",
        \"bm\": \"במבארה\",
        \"bn\": \"בנגלית\",
        \"bo\": \"טיבטית\",
        \"br\": \"ברטונית\",
        \"bra\": \"בראג׳\",
        \"brx\": \"בודו\",
        \"bs\": \"בוסנית\",
        \"bss\": \"אקוסה\",
        \"bua\": \"בוריאט\",
        \"bug\": \"בוגינזית\",
        \"bum\": \"בולו\",
        \"byn\": \"בלין\",
        \"byv\": \"מדומבה\",
        \"ca\": \"קטלאנית\",
        \"cad\": \"קאדו\",
        \"car\": \"קאריב\",
        \"cay\": \"קאיוגה\",
        \"cch\": \"אטסם\",
        \"ccp\": \"צ׳אקמה\",
        \"ce\": \"צ׳צ׳נית\",
        \"ceb\": \"סבואנו\",
        \"cgg\": \"צ׳יגה\",
        \"ch\": \"צ׳מורו\",
        \"chb\": \"צ׳יבצ׳ה\",
        \"chg\": \"צ׳אגאטאי\",
        \"chk\": \"צ׳וקסה\",
        \"chm\": \"מארי\",
        \"chn\": \"ניב צ׳ינוק\",
        \"cho\": \"צ׳וקטאו\",
        \"chp\": \"צ׳יפוויאן\",
        \"chr\": \"צ׳רוקי\",
        \"chy\": \"שאיין\",
        \"ckb\": \"כורדית סוראנית\",
        \"co\": \"קורסיקנית\",
        \"cop\": \"קופטית\",
        \"cr\": \"קרי\",
        \"crh\": \"טטרית של קרים\",
        \"crs\": \"קריאולית (סיישל)\",
        \"cs\": \"צ׳כית\",
        \"csb\": \"קשובית\",
        \"cu\": \"סלאבית כנסייתית עתיקה\",
        \"cv\": \"צ׳ובאש\",
        \"cy\": \"וולשית\",
        \"da\": \"דנית\",
        \"dak\": \"דקוטה\",
        \"dar\": \"דרגווה\",
        \"dav\": \"טאיטה\",
        \"de\": \"גרמנית\",
        \"de_CH\": \"גרמנית (שוויץ)\",
        \"del\": \"דלאוור\",
        \"den\": \"סלאבית\",
        \"dgr\": \"דוגריב\",
        \"din\": \"דינקה\",
        \"dje\": \"זארמה\",
        \"doi\": \"דוגרי\",
        \"dsb\": \"סורבית תחתית\",
        \"dua\": \"דואלה\",
        \"dum\": \"הולנדית תיכונה\",
        \"dv\": \"דיבהי\",
        \"dyo\": \"ג׳ולה פונית\",
        \"dyu\": \"דיולה\",
        \"dz\": \"דזונקה\",
        \"dzg\": \"דזאנגה\",
        \"ebu\": \"אמבו\",
        \"ee\": \"אווה\",
        \"efi\": \"אפיק\",
        \"egy\": \"מצרית עתיקה\",
        \"eka\": \"אקיוק\",
        \"el\": \"יוונית\",
        \"elx\": \"עילמית\",
        \"en\": \"אנגלית\",
        \"enm\": \"אנגלית תיכונה\",
        \"eo\": \"אספרנטו\",
        \"es\": \"ספרדית\",
        \"et\": \"אסטונית\",
        \"eu\": \"בסקית\",
        \"ewo\": \"אוונדו\",
        \"fa\": \"פרסית\",
        \"fan\": \"פנג\",
        \"fat\": \"פאנטי\",
        \"ff\": \"פולה\",
        \"fi\": \"פינית\",
        \"fil\": \"פיליפינית\",
        \"fj\": \"פיג׳ית\",
        \"fo\": \"פארואזית\",
        \"fon\": \"פון\",
        \"fr\": \"צרפתית\",
        \"fr_CH\": \"צרפתית (שוויץ)\",
        \"frc\": \"צרפתית קייג׳ונית\",
        \"frm\": \"צרפתית תיכונה\",
        \"fro\": \"צרפתית עתיקה\",
        \"frr\": \"פריזית צפונית\",
        \"frs\": \"פריזית מזרחית\",
        \"fur\": \"פריולית\",
        \"fy\": \"פריזית מערבית\",
        \"ga\": \"אירית\",
        \"gaa\": \"גא\",
        \"gag\": \"גגאוזית\",
        \"gan\": \"סינית גאן\",
        \"gay\": \"גאיו\",
        \"gba\": \"גבאיה\",
        \"gd\": \"גאלית סקוטית\",
        \"gez\": \"געז\",
        \"gil\": \"קיריבטית\",
        \"gl\": \"גליציאנית\",
        \"gmh\": \"גרמנית בינונית-גבוהה\",
        \"gn\": \"גוארני\",
        \"goh\": \"גרמנית עתיקה גבוהה\",
        \"gon\": \"גונדי\",
        \"gor\": \"גורונטאלו\",
        \"got\": \"גותית\",
        \"grb\": \"גרבו\",
        \"grc\": \"יוונית עתיקה\",
        \"gsw\": \"גרמנית (בשוויץ)\",
        \"gu\": \"גוג׳ארטי\",
        \"guz\": \"גוסי\",
        \"gv\": \"מאנית\",
        \"gwi\": \"גוויצ׳ן\",
        \"ha\": \"האוסה\",
        \"hai\": \"האידה\",
        \"hak\": \"סינית האקה\",
        \"haw\": \"הוואית\",
        \"he\": \"עברית\",
        \"hi\": \"הינדי\",
        \"hil\": \"היליגאינון\",
        \"hit\": \"חתית\",
        \"hmn\": \"המונג\",
        \"ho\": \"הירי מוטו\",
        \"hr\": \"קרואטית\",
        \"hsb\": \"סורבית עילית\",
        \"hsn\": \"סינית שיאנג\",
        \"ht\": \"קריאולית (האיטי)\",
        \"hu\": \"הונגרית\",
        \"hup\": \"הופה\",
        \"hy\": \"ארמנית\",
        \"hz\": \"הררו\",
        \"ia\": \"‏אינטרלינגואה\",
        \"iba\": \"איבאן\",
        \"ibb\": \"איביביו\",
        \"id\": \"אינדונזית\",
        \"ie\": \"אינטרלינגה\",
        \"ig\": \"איגבו\",
        \"ii\": \"סצ׳ואן יי\",
        \"ik\": \"אינופיאק\",
        \"ilo\": \"אילוקו\",
        \"inh\": \"אינגושית\",
        \"io\": \"אידו\",
        \"is\": \"איסלנדית\",
        \"it\": \"איטלקית\",
        \"iu\": \"אינוקטיטוט\",
        \"ja\": \"יפנית\",
        \"jbo\": \"לוז׳באן\",
        \"jgo\": \"נגומבה\",
        \"jmc\": \"מאקאמה\",
        \"jpr\": \"פרסית יהודית\",
        \"jrb\": \"ערבית יהודית\",
        \"jv\": \"יאוואית\",
        \"ka\": \"גאורגית\",
        \"kaa\": \"קארא-קלפאק\",
        \"kab\": \"קבילה\",
        \"kac\": \"קצ׳ין\",
        \"kaj\": \"ג׳ו\",
        \"kam\": \"קמבה\",
        \"kaw\": \"קאווי\",
        \"kbd\": \"קברדית\",
        \"kbl\": \"קנמבו\",
        \"kcg\": \"טיאפ\",
        \"kde\": \"מקונדה\",
        \"kea\": \"קאבוורדיאנו\",
        \"kfo\": \"קורו\",
        \"kg\": \"קונגו\",
        \"kha\": \"קהאסי\",
        \"kho\": \"קוטאנזית\",
        \"khq\": \"קוירה צ׳יני\",
        \"ki\": \"קיקויו\",
        \"kj\": \"קואניאמה\",
        \"kk\": \"קזחית\",
        \"kkj\": \"קאקו\",
        \"kl\": \"גרינלנדית\",
        \"kln\": \"קלנג׳ין\",
        \"km\": \"חמרית\",
        \"kmb\": \"קימבונדו\",
        \"kn\": \"קנאדה\",
        \"ko\": \"קוריאנית\",
        \"koi\": \"קומי-פרמיאקית\",
        \"kok\": \"קונקאני\",
        \"kos\": \"קוסראיאן\",
        \"kpe\": \"קפלה\",
        \"kr\": \"קאנורי\",
        \"krc\": \"קראצ׳י-בלקר\",
        \"krl\": \"קארלית\",
        \"kru\": \"קורוק\",
        \"ks\": \"קשמירית\",
        \"ksb\": \"שמבאלה\",
        \"ksf\": \"באפיה\",
        \"ksh\": \"קולוניאן\",
        \"ku\": \"כורדית\",
        \"kum\": \"קומיקית\",
        \"kut\": \"קוטנאי\",
        \"kv\": \"קומי\",
        \"kw\": \"קורנית\",
        \"ky\": \"קירגיזית\",
        \"la\": \"לטינית\",
        \"lad\": \"לדינו\",
        \"lag\": \"לאנגי\",
        \"lah\": \"לנדה\",
        \"lam\": \"למבה\",
        \"lb\": \"לוקסמבורגית\",
        \"lez\": \"לזגית\",
        \"lg\": \"גאנדה\",
        \"li\": \"לימבורגית\",
        \"lkt\": \"לקוטה\",
        \"ln\": \"לינגלה\",
        \"lo\": \"לאו\",
        \"lol\": \"מונגו\",
        \"lou\": \"קריאולית לואיזיאנית\",
        \"loz\": \"לוזית\",
        \"lrc\": \"לורית צפונית\",
        \"lt\": \"ליטאית\",
        \"lu\": \"לובה-קטנגה\",
        \"lua\": \"לובה-לולואה\",
        \"lui\": \"לויסנו\",
        \"lun\": \"לונדה\",
        \"luo\": \"לואו\",
        \"lus\": \"מיזו\",
        \"luy\": \"לויה\",
        \"lv\": \"לטבית\",
        \"mad\": \"מדורזית\",
        \"maf\": \"מאפאה\",
        \"mag\": \"מאגאהית\",
        \"mai\": \"מאיטילית\",
        \"mak\": \"מקסאר\",
        \"man\": \"מנדינגו\",
        \"mas\": \"מסאית\",
        \"mde\": \"מאבא\",
        \"mdf\": \"מוקשה\",
        \"mdr\": \"מנדאר\",
        \"men\": \"מנדה\",
        \"mer\": \"מרו\",
        \"mfe\": \"קריאולית מאוריציאנית\",
        \"mg\": \"מלגשית\",
        \"mga\": \"אירית תיכונה\",
        \"mgh\": \"מאקוואה מטו\",
        \"mgo\": \"מטא\",
        \"mh\": \"מרשלית\",
        \"mi\": \"מאורית\",
        \"mic\": \"מיקמק\",
        \"min\": \"מיננגקבאו\",
        \"mk\": \"מקדונית\",
        \"ml\": \"מליאלאם\",
        \"mn\": \"מונגולית\",
        \"mnc\": \"מנצ׳ו\",
        \"mni\": \"מניפורית\",
        \"moh\": \"מוהוק\",
        \"mos\": \"מוסי\",
        \"mr\": \"מראטהי\",
        \"ms\": \"מלאית\",
        \"mt\": \"מלטית\",
        \"mua\": \"מונדאנג\",
        \"mus\": \"קריק\",
        \"mwl\": \"מירנדזית\",
        \"mwr\": \"מרווארי\",
        \"my\": \"בורמזית\",
        \"mye\": \"מאיין\",
        \"myv\": \"ארזיה\",
        \"mzn\": \"מאזאנדראני\",
        \"na\": \"נאורית\",
        \"nan\": \"סינית מין נאן\",
        \"nap\": \"נפוליטנית\",
        \"naq\": \"נאמה\",
        \"nb\": \"נורווגית ספרותית\",
        \"nd\": \"נדבלה צפונית\",
        \"nds\": \"גרמנית תחתית\",
        \"nds_NL\": \"סקסונית תחתית\",
        \"ne\": \"נפאלית\",
        \"new\": \"נווארי\",
        \"ng\": \"נדונגה\",
        \"nia\": \"ניאס\",
        \"niu\": \"ניואן\",
        \"nl\": \"הולנדית\",
        \"nl_BE\": \"פלמית\",
        \"nmg\": \"קוואסיו\",
        \"nn\": \"נורווגית חדשה\",
        \"nnh\": \"נגיאמבון\",
        \"no\": \"נורווגית\",
        \"nog\": \"נוגאי\",
        \"non\": \"‏נורדית עתיקה\",
        \"nqo\": \"נ׳קו\",
        \"nr\": \"נדבלה דרומית\",
        \"nso\": \"סותו צפונית\",
        \"nus\": \"נואר\",
        \"nv\": \"נאוואחו\",
        \"nwc\": \"נווארית קלאסית\",
        \"ny\": \"ניאנג׳ה\",
        \"nym\": \"ניאמווזי\",
        \"nyn\": \"ניאנקולה\",
        \"nyo\": \"ניורו\",
        \"nzi\": \"נזימה\",
        \"oc\": \"אוקסיטנית\",
        \"oj\": \"אוג׳יבווה\",
        \"om\": \"אורומו\",
        \"or\": \"אורייה\",
        \"os\": \"אוסטית\",
        \"osa\": \"אוסג׳\",
        \"ota\": \"טורקית עות׳מנית\",
        \"pa\": \"פנג׳אבי\",
        \"pag\": \"פנגסינאן\",
        \"pal\": \"פלאבי\",
        \"pam\": \"פמפאניה\",
        \"pap\": \"פפיאמנטו\",
        \"pau\": \"פלוואן\",
        \"pcm\": \"ניגרית פידג׳ית\",
        \"peo\": \"פרסית עתיקה\",
        \"phn\": \"פיניקית\",
        \"pi\": \"פאלי\",
        \"pl\": \"פולנית\",
        \"pon\": \"פונפיאן\",
        \"prg\": \"פרוסית\",
        \"pro\": \"פרובנסאל עתיקה\",
        \"ps\": \"פאשטו\",
        \"pt\": \"פורטוגזית\",
        \"qu\": \"קצ׳ואה\",
        \"quc\": \"קיצ׳ה\",
        \"raj\": \"ראג׳סטאני\",
        \"rap\": \"רפאנוי\",
        \"rar\": \"ררוטונגאן\",
        \"rm\": \"רומאנש\",
        \"rn\": \"קירונדי\",
        \"ro\": \"רומנית\",
        \"ro_MD\": \"מולדבית\",
        \"rof\": \"רומבו\",
        \"rom\": \"רומאני\",
        \"root\": \"רוט\",
        \"ru\": \"רוסית\",
        \"rup\": \"ארומנית\",
        \"rw\": \"קנירואנדית\",
        \"rwk\": \"ראווה\",
        \"sa\": \"סנסקריט\",
        \"sad\": \"סנדאווה\",
        \"sah\": \"סאחה\",
        \"sam\": \"ארמית שומרונית\",
        \"saq\": \"סמבורו\",
        \"sas\": \"סאסק\",
        \"sat\": \"סאנטאלי\",
        \"sba\": \"נגמבאי\",
        \"sbp\": \"סאנגו\",
        \"sc\": \"סרדינית\",
        \"scn\": \"סיציליאנית\",
        \"sco\": \"סקוטית\",
        \"sd\": \"סינדהית\",
        \"sdh\": \"כורדית דרומית\",
        \"se\": \"סמי צפונית\",
        \"see\": \"סנקה\",
        \"seh\": \"סנה\",
        \"sel\": \"סלקופ\",
        \"ses\": \"קויראבורו סני\",
        \"sg\": \"סנגו\",
        \"sga\": \"אירית עתיקה\",
        \"sh\": \"סרבו-קרואטית\",
        \"shi\": \"שילה\",
        \"shn\": \"שאן\",
        \"shu\": \"ערבית צ׳אדית\",
        \"si\": \"סינהלה\",
        \"sid\": \"סידאמו\",
        \"sk\": \"סלובקית\",
        \"sl\": \"סלובנית\",
        \"sm\": \"סמואית\",
        \"sma\": \"סאמי דרומית\",
        \"smj\": \"לולה סאמי\",
        \"smn\": \"אינארי סאמי\",
        \"sms\": \"סקולט סאמי\",
        \"sn\": \"שונה\",
        \"snk\": \"סונינקה\",
        \"so\": \"סומלית\",
        \"sog\": \"סוגדיאן\",
        \"sq\": \"אלבנית\",
        \"sr\": \"סרבית\",
        \"srn\": \"סרנאן טונגו\",
        \"srr\": \"סרר\",
        \"ss\": \"סאווזי\",
        \"ssy\": \"סאהו\",
        \"st\": \"סותו דרומית\",
        \"su\": \"סונדנזית\",
        \"suk\": \"סוקומה\",
        \"sus\": \"סוסו\",
        \"sux\": \"שומרית\",
        \"sv\": \"שוודית\",
        \"sw\": \"סווהילי\",
        \"sw_CD\": \"סווהילי קונגו\",
        \"swb\": \"קומורית\",
        \"syc\": \"סירית קלאסית\",
        \"syr\": \"סורית\",
        \"ta\": \"טמילית\",
        \"te\": \"טלוגו\",
        \"tem\": \"טימנה\",
        \"teo\": \"טסו\",
        \"ter\": \"טרנו\",
        \"tet\": \"טטום\",
        \"tg\": \"טג׳יקית\",
        \"th\": \"תאית\",
        \"ti\": \"תיגרינית\",
        \"tig\": \"טיגרית\",
        \"tiv\": \"טיב\",
        \"tk\": \"טורקמנית\",
        \"tkl\": \"טוקלאו\",
        \"tl\": \"טאגאלוג\",
        \"tlh\": \"קלינגונית\",
        \"tli\": \"טלינגיט\",
        \"tmh\": \"טמאשק\",
        \"tn\": \"סוואנה\",
        \"to\": \"טונגאית\",
        \"tog\": \"ניאסה טונגה\",
        \"tpi\": \"טוק פיסין\",
        \"tr\": \"טורקית\",
        \"trv\": \"טרוקו\",
        \"ts\": \"טסונגה\",
        \"tsi\": \"טסימשיאן\",
        \"tt\": \"טטרית\",
        \"tum\": \"טומבוקה\",
        \"tvl\": \"טובאלו\",
        \"tw\": \"טווי\",
        \"twq\": \"טסוואק\",
        \"ty\": \"טהיטית\",
        \"tyv\": \"טובינית\",
        \"tzm\": \"תמאזיגת של מרכז מרוקו\",
        \"udm\": \"אודמורט\",
        \"ug\": \"אויגור\",
        \"uga\": \"אוגריתית\",
        \"uk\": \"אוקראינית\",
        \"umb\": \"אומבונדו\",
        \"ur\": \"אורדו\",
        \"uz\": \"אוזבקית\",
        \"vai\": \"וואי\",
        \"ve\": \"וונדה\",
        \"vi\": \"וייטנאמית\",
        \"vo\": \"‏וולאפיק\",
        \"vot\": \"ווטיק\",
        \"vun\": \"וונג׳ו\",
        \"wa\": \"ולונית\",
        \"wae\": \"וואלסר\",
        \"wal\": \"ווליאטה\",
        \"war\": \"ווראי\",
        \"was\": \"וואשו\",
        \"wbp\": \"וורלפירי\",
        \"wo\": \"וולוף\",
        \"wuu\": \"סינית וו\",
        \"xal\": \"קלמיקית\",
        \"xh\": \"קוסה\",
        \"xog\": \"סוגה\",
        \"yao\": \"יאו\",
        \"yap\": \"יאפזית\",
        \"yav\": \"יאנגבן\",
        \"ybb\": \"ימבה\",
        \"yi\": \"יידיש\",
        \"yo\": \"יורובה\",
        \"yue\": \"קנטונזית\",
        \"za\": \"זואנג\",
        \"zap\": \"זאפוטק\",
        \"zbl\": \"בליסימבולס\",
        \"zen\": \"זנאגה\",
        \"zgh\": \"תמזיע׳ת מרוקאית תקנית\",
        \"zh\": \"סינית\",
        \"zh_Hans\": \"סינית פשוטה\",
        \"zh_Hant\": \"סינית מסורתית\",
        \"zu\": \"זולו\",
        \"zun\": \"זוני\",
        \"zza\": \"זאזא\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/iw.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/iw.json");
    }
}
