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

/* vendor/symfony/intl/Resources/data/languages/uk.json */
class __TwigTemplate_2b2f72df738bdd040f76e16c45d1ff5123dca1a88de40d4f2328b2d17fd3cfae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/uk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/uk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"афарська\",
        \"ab\": \"абхазька\",
        \"ace\": \"ачехська\",
        \"ach\": \"ачолі\",
        \"ada\": \"адангме\",
        \"ady\": \"адигейська\",
        \"ae\": \"авестійська\",
        \"af\": \"африкаанс\",
        \"afh\": \"африхілі\",
        \"agq\": \"агем\",
        \"ain\": \"айнська\",
        \"ak\": \"акан\",
        \"akk\": \"аккадська\",
        \"akz\": \"алабама\",
        \"ale\": \"алеутська\",
        \"alt\": \"південноалтайська\",
        \"am\": \"амхарська\",
        \"an\": \"арагонська\",
        \"ang\": \"давньоанглійська\",
        \"anp\": \"ангіка\",
        \"ar\": \"арабська\",
        \"ar_001\": \"сучасна стандартна арабська\",
        \"arc\": \"арамейська\",
        \"arn\": \"арауканська\",
        \"aro\": \"араона\",
        \"arp\": \"арапахо\",
        \"arq\": \"алжирська арабська\",
        \"ars\": \"надждійська арабська\",
        \"arw\": \"аравакська\",
        \"as\": \"асамська\",
        \"asa\": \"асу\",
        \"ase\": \"американська мова рухів\",
        \"ast\": \"астурська\",
        \"av\": \"аварська\",
        \"awa\": \"авадхі\",
        \"ay\": \"аймара\",
        \"az\": \"азербайджанська\",
        \"az_Arab\": \"південноазербайджанська\",
        \"ba\": \"башкирська\",
        \"bal\": \"балучі\",
        \"ban\": \"балійська\",
        \"bar\": \"баеріш\",
        \"bas\": \"баса\",
        \"bax\": \"бамум\",
        \"bbc\": \"батак тоба\",
        \"bbj\": \"гомала\",
        \"be\": \"білоруська\",
        \"bej\": \"беджа\",
        \"bem\": \"бемба\",
        \"bew\": \"бетаві\",
        \"bez\": \"бена\",
        \"bfd\": \"бафут\",
        \"bfq\": \"бадага\",
        \"bg\": \"болгарська\",
        \"bgn\": \"східнобелуджійська\",
        \"bho\": \"бходжпурі\",
        \"bi\": \"біслама\",
        \"bik\": \"бікольська\",
        \"bin\": \"біні\",
        \"bjn\": \"банджарська\",
        \"bkm\": \"ком\",
        \"bla\": \"сіксіка\",
        \"bm\": \"бамбара\",
        \"bn\": \"банґла\",
        \"bo\": \"тибетська\",
        \"bqi\": \"бахтіарі\",
        \"br\": \"бретонська\",
        \"bra\": \"брадж\",
        \"brx\": \"бодо\",
        \"bs\": \"боснійська\",
        \"bss\": \"акус\",
        \"bua\": \"бурятська\",
        \"bug\": \"бугійська\",
        \"bum\": \"булу\",
        \"byn\": \"блін\",
        \"byv\": \"медумба\",
        \"ca\": \"каталонська\",
        \"cad\": \"каддо\",
        \"car\": \"карібська\",
        \"cay\": \"кайюга\",
        \"cch\": \"атсам\",
        \"ccp\": \"чакма\",
        \"ce\": \"чеченська\",
        \"ceb\": \"себуанська\",
        \"cgg\": \"кіга\",
        \"ch\": \"чаморро\",
        \"chb\": \"чібча\",
        \"chg\": \"чагатайська\",
        \"chk\": \"чуукська\",
        \"chm\": \"марійська\",
        \"chn\": \"чинук жаргон\",
        \"cho\": \"чокто\",
        \"chp\": \"чіпевʼян\",
        \"chr\": \"черокі\",
        \"chy\": \"чейєнн\",
        \"ckb\": \"центральнокурдська\",
        \"co\": \"корсиканська\",
        \"cop\": \"коптська\",
        \"cr\": \"крі\",
        \"crh\": \"кримськотатарська\",
        \"crs\": \"сейшельська креольська\",
        \"cs\": \"чеська\",
        \"csb\": \"кашубська\",
        \"cu\": \"церковнословʼянська\",
        \"cv\": \"чуваська\",
        \"cy\": \"валлійська\",
        \"da\": \"данська\",
        \"dak\": \"дакота\",
        \"dar\": \"даргінська\",
        \"dav\": \"таіта\",
        \"de\": \"німецька\",
        \"de_AT\": \"австрійська німецька\",
        \"de_CH\": \"верхньонімецька (Швейцарія)\",
        \"del\": \"делаварська\",
        \"den\": \"слейв\",
        \"dgr\": \"догрибська\",
        \"din\": \"дінка\",
        \"dje\": \"джерма\",
        \"doi\": \"догрі\",
        \"dsb\": \"нижньолужицька\",
        \"dua\": \"дуала\",
        \"dum\": \"середньонідерландська\",
        \"dv\": \"дівехі\",
        \"dyo\": \"дьола-фоні\",
        \"dyu\": \"діула\",
        \"dz\": \"дзонг-ке\",
        \"dzg\": \"дазага\",
        \"ebu\": \"ембу\",
        \"ee\": \"еве\",
        \"efi\": \"ефік\",
        \"egy\": \"давньоєгипетська\",
        \"eka\": \"екаджук\",
        \"el\": \"грецька\",
        \"elx\": \"еламська\",
        \"en\": \"англійська\",
        \"en_AU\": \"австралійська англійська\",
        \"en_CA\": \"канадська англійська\",
        \"en_GB\": \"британська англійська\",
        \"en_US\": \"англійська (США)\",
        \"enm\": \"середньоанглійська\",
        \"eo\": \"есперанто\",
        \"es\": \"іспанська\",
        \"es_419\": \"латиноамериканська іспанська\",
        \"es_ES\": \"іспанська (Європа)\",
        \"es_MX\": \"мексиканська іспанська\",
        \"et\": \"естонська\",
        \"eu\": \"баскська\",
        \"ewo\": \"евондо\",
        \"fa\": \"перська\",
        \"fan\": \"фанг\",
        \"fat\": \"фанті\",
        \"ff\": \"фула\",
        \"fi\": \"фінська\",
        \"fil\": \"філіппінська\",
        \"fj\": \"фіджі\",
        \"fo\": \"фарерська\",
        \"fon\": \"фон\",
        \"fr\": \"французька\",
        \"fr_CA\": \"канадська французька\",
        \"fr_CH\": \"швейцарська французька\",
        \"frc\": \"кажунська французька\",
        \"frm\": \"середньофранцузька\",
        \"fro\": \"давньофранцузька\",
        \"frp\": \"арпітанська\",
        \"frr\": \"фризька північна\",
        \"frs\": \"фризька східна\",
        \"fur\": \"фріульська\",
        \"fy\": \"західнофризька\",
        \"ga\": \"ірландська\",
        \"gaa\": \"га\",
        \"gag\": \"гагаузька\",
        \"gan\": \"ґань\",
        \"gay\": \"гайо\",
        \"gba\": \"гбайя\",
        \"gd\": \"гаельська\",
        \"gez\": \"гєез\",
        \"gil\": \"гільбертська\",
        \"gl\": \"галісійська\",
        \"gmh\": \"середньоверхньонімецька\",
        \"gn\": \"гуарані\",
        \"goh\": \"давньоверхньонімецька\",
        \"gon\": \"гонді\",
        \"gor\": \"горонтало\",
        \"got\": \"готська\",
        \"grb\": \"гребо\",
        \"grc\": \"давньогрецька\",
        \"gsw\": \"німецька (Швейцарія)\",
        \"gu\": \"гуджараті\",
        \"guz\": \"гусії\",
        \"gv\": \"менкська\",
        \"gwi\": \"кучін\",
        \"ha\": \"хауса\",
        \"hai\": \"хайда\",
        \"hak\": \"хаккаська\",
        \"haw\": \"гавайська\",
        \"he\": \"іврит\",
        \"hi\": \"гінді\",
        \"hil\": \"хілігайнон\",
        \"hit\": \"хітіті\",
        \"hmn\": \"хмонг\",
        \"ho\": \"хірі-моту\",
        \"hr\": \"хорватська\",
        \"hsb\": \"верхньолужицька\",
        \"hsn\": \"сянська китайська\",
        \"ht\": \"гаїтянська\",
        \"hu\": \"угорська\",
        \"hup\": \"хупа\",
        \"hy\": \"вірменська\",
        \"hz\": \"гереро\",
        \"ia\": \"інтерлінгва\",
        \"iba\": \"ібанська\",
        \"ibb\": \"ібібіо\",
        \"id\": \"індонезійська\",
        \"ie\": \"інтерлінгве\",
        \"ig\": \"ігбо\",
        \"ii\": \"сичуань\",
        \"ik\": \"інупіак\",
        \"ilo\": \"ілоканська\",
        \"inh\": \"інгуська\",
        \"io\": \"ідо\",
        \"is\": \"ісландська\",
        \"it\": \"італійська\",
        \"iu\": \"інуктітут\",
        \"ja\": \"японська\",
        \"jbo\": \"ложбан\",
        \"jgo\": \"нгомба\",
        \"jmc\": \"мачаме\",
        \"jpr\": \"юдео-перська\",
        \"jrb\": \"юдео-арабська\",
        \"jv\": \"яванська\",
        \"ka\": \"грузинська\",
        \"kaa\": \"каракалпацька\",
        \"kab\": \"кабільська\",
        \"kac\": \"качін\",
        \"kaj\": \"йю\",
        \"kam\": \"камба\",
        \"kaw\": \"каві\",
        \"kbd\": \"кабардинська\",
        \"kbl\": \"канембу\",
        \"kcg\": \"тіап\",
        \"kde\": \"маконде\",
        \"kea\": \"кабувердіану\",
        \"kfo\": \"коро\",
        \"kg\": \"конґолезька\",
        \"kha\": \"кхасі\",
        \"kho\": \"хотаносакська\",
        \"khq\": \"койра чіїні\",
        \"ki\": \"кікуйю\",
        \"kj\": \"кунама\",
        \"kk\": \"казахська\",
        \"kkj\": \"како\",
        \"kl\": \"калааллісут\",
        \"kln\": \"календжин\",
        \"km\": \"кхмерська\",
        \"kmb\": \"кімбунду\",
        \"kn\": \"каннада\",
        \"ko\": \"корейська\",
        \"koi\": \"комі-перм’яцька\",
        \"kok\": \"конкані\",
        \"kos\": \"косрае\",
        \"kpe\": \"кпеллє\",
        \"kr\": \"канурі\",
        \"krc\": \"карачаєво-балкарська\",
        \"krl\": \"карельська\",
        \"kru\": \"курукх\",
        \"ks\": \"кашмірська\",
        \"ksb\": \"шамбала\",
        \"ksf\": \"бафіа\",
        \"ksh\": \"колоніан\",
        \"ku\": \"курдська\",
        \"kum\": \"кумицька\",
        \"kut\": \"кутенаї\",
        \"kv\": \"комі\",
        \"kw\": \"корнійська\",
        \"ky\": \"киргизька\",
        \"la\": \"латинська\",
        \"lad\": \"ладіно\",
        \"lag\": \"лангі\",
        \"lah\": \"ланда\",
        \"lam\": \"ламба\",
        \"lb\": \"люксембурзька\",
        \"lez\": \"лезгінська\",
        \"lg\": \"ганда\",
        \"li\": \"лімбургійська\",
        \"lkt\": \"лакота\",
        \"ln\": \"лінгала\",
        \"lo\": \"лаоська\",
        \"lol\": \"монго\",
        \"lou\": \"луїзіанська креольська\",
        \"loz\": \"лозі\",
        \"lrc\": \"північнолурська\",
        \"lt\": \"литовська\",
        \"lu\": \"луба-катанга\",
        \"lua\": \"луба-лулуа\",
        \"lui\": \"луїсеньо\",
        \"lun\": \"лунда\",
        \"luo\": \"луо\",
        \"lus\": \"мізо\",
        \"luy\": \"луйя\",
        \"lv\": \"латвійська\",
        \"mad\": \"мадурська\",
        \"maf\": \"мафа\",
        \"mag\": \"магадхі\",
        \"mai\": \"майтхілі\",
        \"mak\": \"макасарська\",
        \"man\": \"мандінго\",
        \"mas\": \"масаї\",
        \"mde\": \"маба\",
        \"mdf\": \"мокша\",
        \"mdr\": \"мандарська\",
        \"men\": \"менде\",
        \"mer\": \"меру\",
        \"mfe\": \"маврикійська креольська\",
        \"mg\": \"малагасійська\",
        \"mga\": \"середньоірландська\",
        \"mgh\": \"макува-меето\",
        \"mgo\": \"мета\",
        \"mh\": \"маршалльська\",
        \"mi\": \"маорі\",
        \"mic\": \"мікмак\",
        \"min\": \"мінангкабау\",
        \"mk\": \"македонська\",
        \"ml\": \"малаялам\",
        \"mn\": \"монгольська\",
        \"mnc\": \"манчжурська\",
        \"mni\": \"маніпурі\",
        \"moh\": \"магавк\",
        \"mos\": \"моссі\",
        \"mr\": \"маратхі\",
        \"ms\": \"малайська\",
        \"mt\": \"мальтійська\",
        \"mua\": \"мунданг\",
        \"mus\": \"крік\",
        \"mwl\": \"мірандська\",
        \"mwr\": \"марварі\",
        \"my\": \"бірманська\",
        \"mye\": \"миін\",
        \"myv\": \"ерзя\",
        \"mzn\": \"мазандеранська\",
        \"na\": \"науру\",
        \"nan\": \"південноміньська\",
        \"nap\": \"неаполітанська\",
        \"naq\": \"нама\",
        \"nb\": \"норвезька (букмол)\",
        \"nd\": \"північна ндебеле\",
        \"nds\": \"нижньонімецька\",
        \"nds_NL\": \"нижньосаксонська\",
        \"ne\": \"непальська\",
        \"new\": \"неварі\",
        \"ng\": \"ндонга\",
        \"nia\": \"ніаська\",
        \"niu\": \"ніуе\",
        \"njo\": \"ао нага\",
        \"nl\": \"нідерландська\",
        \"nl_BE\": \"фламандська\",
        \"nmg\": \"квазіо\",
        \"nn\": \"норвезька (нюношк)\",
        \"nnh\": \"нгємбун\",
        \"no\": \"норвезька\",
        \"nog\": \"ногайська\",
        \"non\": \"давньонорвезька\",
        \"nqo\": \"нко\",
        \"nr\": \"ндебелє південна\",
        \"nso\": \"північна сото\",
        \"nus\": \"нуер\",
        \"nv\": \"навахо\",
        \"nwc\": \"неварі класична\",
        \"ny\": \"ньянджа\",
        \"nym\": \"ньямвезі\",
        \"nyn\": \"ньянколе\",
        \"nyo\": \"ньоро\",
        \"nzi\": \"нзіма\",
        \"oc\": \"окситанська\",
        \"oj\": \"оджібва\",
        \"om\": \"оромо\",
        \"or\": \"одія\",
        \"os\": \"осетинська\",
        \"osa\": \"осейдж\",
        \"ota\": \"османська\",
        \"pa\": \"панджабі\",
        \"pag\": \"пангасінанська\",
        \"pal\": \"пехлеві\",
        \"pam\": \"пампанга\",
        \"pap\": \"папʼяменто\",
        \"pau\": \"палауанська\",
        \"pcm\": \"нігерійсько-креольська\",
        \"peo\": \"давньоперська\",
        \"phn\": \"фінікійсько-пунічна\",
        \"pi\": \"палі\",
        \"pl\": \"польська\",
        \"pon\": \"понапе\",
        \"prg\": \"пруська\",
        \"pro\": \"давньопровансальська\",
        \"ps\": \"пушту\",
        \"pt\": \"портуґальська\",
        \"pt_BR\": \"португальська (Бразилія)\",
        \"pt_PT\": \"європейська портуґальська\",
        \"qu\": \"кечуа\",
        \"quc\": \"кіче\",
        \"raj\": \"раджастхані\",
        \"rap\": \"рапануї\",
        \"rar\": \"раротонга\",
        \"rm\": \"ретороманська\",
        \"rn\": \"рунді\",
        \"ro\": \"румунська\",
        \"ro_MD\": \"молдавська\",
        \"rof\": \"ромбо\",
        \"rom\": \"циганська\",
        \"root\": \"коренева\",
        \"ru\": \"російська\",
        \"rup\": \"арумунська\",
        \"rw\": \"кіньяруанда\",
        \"rwk\": \"рва\",
        \"sa\": \"санскрит\",
        \"sad\": \"сандаве\",
        \"sah\": \"якутська\",
        \"sam\": \"самаритянська арамейська\",
        \"saq\": \"самбуру\",
        \"sas\": \"сасакська\",
        \"sat\": \"сантальська\",
        \"sba\": \"нгамбай\",
        \"sbp\": \"сангу\",
        \"sc\": \"сардинська\",
        \"scn\": \"сицилійська\",
        \"sco\": \"шотландська\",
        \"sd\": \"сіндхі\",
        \"sdh\": \"південнокурдська\",
        \"se\": \"північносаамська\",
        \"see\": \"сенека\",
        \"seh\": \"сена\",
        \"sel\": \"селькупська\",
        \"ses\": \"койраборо сені\",
        \"sg\": \"санго\",
        \"sga\": \"давньоірландська\",
        \"sh\": \"сербсько-хорватська\",
        \"shi\": \"тачеліт\",
        \"shn\": \"шанська\",
        \"shu\": \"чадійська арабська\",
        \"si\": \"сингальська\",
        \"sid\": \"сідамо\",
        \"sk\": \"словацька\",
        \"sl\": \"словенська\",
        \"sm\": \"самоанська\",
        \"sma\": \"південносаамська\",
        \"smj\": \"саамська луле\",
        \"smn\": \"саамська інарі\",
        \"sms\": \"скольт-саамська\",
        \"sn\": \"шона\",
        \"snk\": \"сонінке\",
        \"so\": \"сомалі\",
        \"sog\": \"согдійська\",
        \"sq\": \"албанська\",
        \"sr\": \"сербська\",
        \"srn\": \"сранан тонго\",
        \"srr\": \"серер\",
        \"ss\": \"сісваті\",
        \"ssy\": \"сахо\",
        \"st\": \"сото південна\",
        \"su\": \"сунданська\",
        \"suk\": \"сукума\",
        \"sus\": \"сусу\",
        \"sux\": \"шумерська\",
        \"sv\": \"шведська\",
        \"sw\": \"суахілі\",
        \"sw_CD\": \"суахілі (Конго)\",
        \"swb\": \"коморська\",
        \"syc\": \"сирійська класична\",
        \"syr\": \"сирійська\",
        \"ta\": \"тамільська\",
        \"te\": \"телугу\",
        \"tem\": \"темне\",
        \"teo\": \"тесо\",
        \"ter\": \"терено\",
        \"tet\": \"тетум\",
        \"tg\": \"таджицька\",
        \"th\": \"тайська\",
        \"ti\": \"тигринья\",
        \"tig\": \"тигре\",
        \"tiv\": \"тів\",
        \"tk\": \"туркменська\",
        \"tkl\": \"токелау\",
        \"tl\": \"тагальська\",
        \"tlh\": \"клінгонська\",
        \"tli\": \"тлінгіт\",
        \"tmh\": \"тамашек\",
        \"tn\": \"тсвана\",
        \"to\": \"тонґанська\",
        \"tog\": \"ньяса тонга\",
        \"tpi\": \"ток-пісін\",
        \"tr\": \"турецька\",
        \"trv\": \"тароко\",
        \"ts\": \"тсонга\",
        \"tsi\": \"цимшиан\",
        \"tt\": \"татарська\",
        \"tum\": \"тумбука\",
        \"tvl\": \"тувалу\",
        \"tw\": \"тві\",
        \"twq\": \"тасавак\",
        \"ty\": \"таїтянська\",
        \"tyv\": \"тувинська\",
        \"tzm\": \"центральноатласька тамазігт\",
        \"udm\": \"удмуртська\",
        \"ug\": \"уйгурська\",
        \"uga\": \"угаритська\",
        \"uk\": \"українська\",
        \"umb\": \"умбунду\",
        \"ur\": \"урду\",
        \"uz\": \"узбецька\",
        \"vai\": \"ваї\",
        \"ve\": \"венда\",
        \"vi\": \"вʼєтнамська\",
        \"vo\": \"волапʼюк\",
        \"vot\": \"водська\",
        \"vun\": \"вуньо\",
        \"wa\": \"валлонська\",
        \"wae\": \"валзерська\",
        \"wal\": \"волайтта\",
        \"war\": \"варай\",
        \"was\": \"вашо\",
        \"wbp\": \"валпірі\",
        \"wo\": \"волоф\",
        \"wuu\": \"уська китайська\",
        \"xal\": \"калмицька\",
        \"xh\": \"кхоса\",
        \"xog\": \"сога\",
        \"yao\": \"яо\",
        \"yap\": \"яп\",
        \"yav\": \"янгбен\",
        \"ybb\": \"ємба\",
        \"yi\": \"їдиш\",
        \"yo\": \"йоруба\",
        \"yue\": \"кантонська\",
        \"za\": \"чжуан\",
        \"zap\": \"сапотекська\",
        \"zbl\": \"блісса мова\",
        \"zen\": \"зенага\",
        \"zgh\": \"стандартна марокканська берберська\",
        \"zh\": \"китайська\",
        \"zh_Hans\": \"китайська (спрощене письмо)\",
        \"zh_Hant\": \"китайська (традиційне письмо)\",
        \"zu\": \"зулуська\",
        \"zun\": \"зуньї\",
        \"zza\": \"зазакі\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/uk.json";
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
        \"aa\": \"афарська\",
        \"ab\": \"абхазька\",
        \"ace\": \"ачехська\",
        \"ach\": \"ачолі\",
        \"ada\": \"адангме\",
        \"ady\": \"адигейська\",
        \"ae\": \"авестійська\",
        \"af\": \"африкаанс\",
        \"afh\": \"африхілі\",
        \"agq\": \"агем\",
        \"ain\": \"айнська\",
        \"ak\": \"акан\",
        \"akk\": \"аккадська\",
        \"akz\": \"алабама\",
        \"ale\": \"алеутська\",
        \"alt\": \"південноалтайська\",
        \"am\": \"амхарська\",
        \"an\": \"арагонська\",
        \"ang\": \"давньоанглійська\",
        \"anp\": \"ангіка\",
        \"ar\": \"арабська\",
        \"ar_001\": \"сучасна стандартна арабська\",
        \"arc\": \"арамейська\",
        \"arn\": \"арауканська\",
        \"aro\": \"араона\",
        \"arp\": \"арапахо\",
        \"arq\": \"алжирська арабська\",
        \"ars\": \"надждійська арабська\",
        \"arw\": \"аравакська\",
        \"as\": \"асамська\",
        \"asa\": \"асу\",
        \"ase\": \"американська мова рухів\",
        \"ast\": \"астурська\",
        \"av\": \"аварська\",
        \"awa\": \"авадхі\",
        \"ay\": \"аймара\",
        \"az\": \"азербайджанська\",
        \"az_Arab\": \"південноазербайджанська\",
        \"ba\": \"башкирська\",
        \"bal\": \"балучі\",
        \"ban\": \"балійська\",
        \"bar\": \"баеріш\",
        \"bas\": \"баса\",
        \"bax\": \"бамум\",
        \"bbc\": \"батак тоба\",
        \"bbj\": \"гомала\",
        \"be\": \"білоруська\",
        \"bej\": \"беджа\",
        \"bem\": \"бемба\",
        \"bew\": \"бетаві\",
        \"bez\": \"бена\",
        \"bfd\": \"бафут\",
        \"bfq\": \"бадага\",
        \"bg\": \"болгарська\",
        \"bgn\": \"східнобелуджійська\",
        \"bho\": \"бходжпурі\",
        \"bi\": \"біслама\",
        \"bik\": \"бікольська\",
        \"bin\": \"біні\",
        \"bjn\": \"банджарська\",
        \"bkm\": \"ком\",
        \"bla\": \"сіксіка\",
        \"bm\": \"бамбара\",
        \"bn\": \"банґла\",
        \"bo\": \"тибетська\",
        \"bqi\": \"бахтіарі\",
        \"br\": \"бретонська\",
        \"bra\": \"брадж\",
        \"brx\": \"бодо\",
        \"bs\": \"боснійська\",
        \"bss\": \"акус\",
        \"bua\": \"бурятська\",
        \"bug\": \"бугійська\",
        \"bum\": \"булу\",
        \"byn\": \"блін\",
        \"byv\": \"медумба\",
        \"ca\": \"каталонська\",
        \"cad\": \"каддо\",
        \"car\": \"карібська\",
        \"cay\": \"кайюга\",
        \"cch\": \"атсам\",
        \"ccp\": \"чакма\",
        \"ce\": \"чеченська\",
        \"ceb\": \"себуанська\",
        \"cgg\": \"кіга\",
        \"ch\": \"чаморро\",
        \"chb\": \"чібча\",
        \"chg\": \"чагатайська\",
        \"chk\": \"чуукська\",
        \"chm\": \"марійська\",
        \"chn\": \"чинук жаргон\",
        \"cho\": \"чокто\",
        \"chp\": \"чіпевʼян\",
        \"chr\": \"черокі\",
        \"chy\": \"чейєнн\",
        \"ckb\": \"центральнокурдська\",
        \"co\": \"корсиканська\",
        \"cop\": \"коптська\",
        \"cr\": \"крі\",
        \"crh\": \"кримськотатарська\",
        \"crs\": \"сейшельська креольська\",
        \"cs\": \"чеська\",
        \"csb\": \"кашубська\",
        \"cu\": \"церковнословʼянська\",
        \"cv\": \"чуваська\",
        \"cy\": \"валлійська\",
        \"da\": \"данська\",
        \"dak\": \"дакота\",
        \"dar\": \"даргінська\",
        \"dav\": \"таіта\",
        \"de\": \"німецька\",
        \"de_AT\": \"австрійська німецька\",
        \"de_CH\": \"верхньонімецька (Швейцарія)\",
        \"del\": \"делаварська\",
        \"den\": \"слейв\",
        \"dgr\": \"догрибська\",
        \"din\": \"дінка\",
        \"dje\": \"джерма\",
        \"doi\": \"догрі\",
        \"dsb\": \"нижньолужицька\",
        \"dua\": \"дуала\",
        \"dum\": \"середньонідерландська\",
        \"dv\": \"дівехі\",
        \"dyo\": \"дьола-фоні\",
        \"dyu\": \"діула\",
        \"dz\": \"дзонг-ке\",
        \"dzg\": \"дазага\",
        \"ebu\": \"ембу\",
        \"ee\": \"еве\",
        \"efi\": \"ефік\",
        \"egy\": \"давньоєгипетська\",
        \"eka\": \"екаджук\",
        \"el\": \"грецька\",
        \"elx\": \"еламська\",
        \"en\": \"англійська\",
        \"en_AU\": \"австралійська англійська\",
        \"en_CA\": \"канадська англійська\",
        \"en_GB\": \"британська англійська\",
        \"en_US\": \"англійська (США)\",
        \"enm\": \"середньоанглійська\",
        \"eo\": \"есперанто\",
        \"es\": \"іспанська\",
        \"es_419\": \"латиноамериканська іспанська\",
        \"es_ES\": \"іспанська (Європа)\",
        \"es_MX\": \"мексиканська іспанська\",
        \"et\": \"естонська\",
        \"eu\": \"баскська\",
        \"ewo\": \"евондо\",
        \"fa\": \"перська\",
        \"fan\": \"фанг\",
        \"fat\": \"фанті\",
        \"ff\": \"фула\",
        \"fi\": \"фінська\",
        \"fil\": \"філіппінська\",
        \"fj\": \"фіджі\",
        \"fo\": \"фарерська\",
        \"fon\": \"фон\",
        \"fr\": \"французька\",
        \"fr_CA\": \"канадська французька\",
        \"fr_CH\": \"швейцарська французька\",
        \"frc\": \"кажунська французька\",
        \"frm\": \"середньофранцузька\",
        \"fro\": \"давньофранцузька\",
        \"frp\": \"арпітанська\",
        \"frr\": \"фризька північна\",
        \"frs\": \"фризька східна\",
        \"fur\": \"фріульська\",
        \"fy\": \"західнофризька\",
        \"ga\": \"ірландська\",
        \"gaa\": \"га\",
        \"gag\": \"гагаузька\",
        \"gan\": \"ґань\",
        \"gay\": \"гайо\",
        \"gba\": \"гбайя\",
        \"gd\": \"гаельська\",
        \"gez\": \"гєез\",
        \"gil\": \"гільбертська\",
        \"gl\": \"галісійська\",
        \"gmh\": \"середньоверхньонімецька\",
        \"gn\": \"гуарані\",
        \"goh\": \"давньоверхньонімецька\",
        \"gon\": \"гонді\",
        \"gor\": \"горонтало\",
        \"got\": \"готська\",
        \"grb\": \"гребо\",
        \"grc\": \"давньогрецька\",
        \"gsw\": \"німецька (Швейцарія)\",
        \"gu\": \"гуджараті\",
        \"guz\": \"гусії\",
        \"gv\": \"менкська\",
        \"gwi\": \"кучін\",
        \"ha\": \"хауса\",
        \"hai\": \"хайда\",
        \"hak\": \"хаккаська\",
        \"haw\": \"гавайська\",
        \"he\": \"іврит\",
        \"hi\": \"гінді\",
        \"hil\": \"хілігайнон\",
        \"hit\": \"хітіті\",
        \"hmn\": \"хмонг\",
        \"ho\": \"хірі-моту\",
        \"hr\": \"хорватська\",
        \"hsb\": \"верхньолужицька\",
        \"hsn\": \"сянська китайська\",
        \"ht\": \"гаїтянська\",
        \"hu\": \"угорська\",
        \"hup\": \"хупа\",
        \"hy\": \"вірменська\",
        \"hz\": \"гереро\",
        \"ia\": \"інтерлінгва\",
        \"iba\": \"ібанська\",
        \"ibb\": \"ібібіо\",
        \"id\": \"індонезійська\",
        \"ie\": \"інтерлінгве\",
        \"ig\": \"ігбо\",
        \"ii\": \"сичуань\",
        \"ik\": \"інупіак\",
        \"ilo\": \"ілоканська\",
        \"inh\": \"інгуська\",
        \"io\": \"ідо\",
        \"is\": \"ісландська\",
        \"it\": \"італійська\",
        \"iu\": \"інуктітут\",
        \"ja\": \"японська\",
        \"jbo\": \"ложбан\",
        \"jgo\": \"нгомба\",
        \"jmc\": \"мачаме\",
        \"jpr\": \"юдео-перська\",
        \"jrb\": \"юдео-арабська\",
        \"jv\": \"яванська\",
        \"ka\": \"грузинська\",
        \"kaa\": \"каракалпацька\",
        \"kab\": \"кабільська\",
        \"kac\": \"качін\",
        \"kaj\": \"йю\",
        \"kam\": \"камба\",
        \"kaw\": \"каві\",
        \"kbd\": \"кабардинська\",
        \"kbl\": \"канембу\",
        \"kcg\": \"тіап\",
        \"kde\": \"маконде\",
        \"kea\": \"кабувердіану\",
        \"kfo\": \"коро\",
        \"kg\": \"конґолезька\",
        \"kha\": \"кхасі\",
        \"kho\": \"хотаносакська\",
        \"khq\": \"койра чіїні\",
        \"ki\": \"кікуйю\",
        \"kj\": \"кунама\",
        \"kk\": \"казахська\",
        \"kkj\": \"како\",
        \"kl\": \"калааллісут\",
        \"kln\": \"календжин\",
        \"km\": \"кхмерська\",
        \"kmb\": \"кімбунду\",
        \"kn\": \"каннада\",
        \"ko\": \"корейська\",
        \"koi\": \"комі-перм’яцька\",
        \"kok\": \"конкані\",
        \"kos\": \"косрае\",
        \"kpe\": \"кпеллє\",
        \"kr\": \"канурі\",
        \"krc\": \"карачаєво-балкарська\",
        \"krl\": \"карельська\",
        \"kru\": \"курукх\",
        \"ks\": \"кашмірська\",
        \"ksb\": \"шамбала\",
        \"ksf\": \"бафіа\",
        \"ksh\": \"колоніан\",
        \"ku\": \"курдська\",
        \"kum\": \"кумицька\",
        \"kut\": \"кутенаї\",
        \"kv\": \"комі\",
        \"kw\": \"корнійська\",
        \"ky\": \"киргизька\",
        \"la\": \"латинська\",
        \"lad\": \"ладіно\",
        \"lag\": \"лангі\",
        \"lah\": \"ланда\",
        \"lam\": \"ламба\",
        \"lb\": \"люксембурзька\",
        \"lez\": \"лезгінська\",
        \"lg\": \"ганда\",
        \"li\": \"лімбургійська\",
        \"lkt\": \"лакота\",
        \"ln\": \"лінгала\",
        \"lo\": \"лаоська\",
        \"lol\": \"монго\",
        \"lou\": \"луїзіанська креольська\",
        \"loz\": \"лозі\",
        \"lrc\": \"північнолурська\",
        \"lt\": \"литовська\",
        \"lu\": \"луба-катанга\",
        \"lua\": \"луба-лулуа\",
        \"lui\": \"луїсеньо\",
        \"lun\": \"лунда\",
        \"luo\": \"луо\",
        \"lus\": \"мізо\",
        \"luy\": \"луйя\",
        \"lv\": \"латвійська\",
        \"mad\": \"мадурська\",
        \"maf\": \"мафа\",
        \"mag\": \"магадхі\",
        \"mai\": \"майтхілі\",
        \"mak\": \"макасарська\",
        \"man\": \"мандінго\",
        \"mas\": \"масаї\",
        \"mde\": \"маба\",
        \"mdf\": \"мокша\",
        \"mdr\": \"мандарська\",
        \"men\": \"менде\",
        \"mer\": \"меру\",
        \"mfe\": \"маврикійська креольська\",
        \"mg\": \"малагасійська\",
        \"mga\": \"середньоірландська\",
        \"mgh\": \"макува-меето\",
        \"mgo\": \"мета\",
        \"mh\": \"маршалльська\",
        \"mi\": \"маорі\",
        \"mic\": \"мікмак\",
        \"min\": \"мінангкабау\",
        \"mk\": \"македонська\",
        \"ml\": \"малаялам\",
        \"mn\": \"монгольська\",
        \"mnc\": \"манчжурська\",
        \"mni\": \"маніпурі\",
        \"moh\": \"магавк\",
        \"mos\": \"моссі\",
        \"mr\": \"маратхі\",
        \"ms\": \"малайська\",
        \"mt\": \"мальтійська\",
        \"mua\": \"мунданг\",
        \"mus\": \"крік\",
        \"mwl\": \"мірандська\",
        \"mwr\": \"марварі\",
        \"my\": \"бірманська\",
        \"mye\": \"миін\",
        \"myv\": \"ерзя\",
        \"mzn\": \"мазандеранська\",
        \"na\": \"науру\",
        \"nan\": \"південноміньська\",
        \"nap\": \"неаполітанська\",
        \"naq\": \"нама\",
        \"nb\": \"норвезька (букмол)\",
        \"nd\": \"північна ндебеле\",
        \"nds\": \"нижньонімецька\",
        \"nds_NL\": \"нижньосаксонська\",
        \"ne\": \"непальська\",
        \"new\": \"неварі\",
        \"ng\": \"ндонга\",
        \"nia\": \"ніаська\",
        \"niu\": \"ніуе\",
        \"njo\": \"ао нага\",
        \"nl\": \"нідерландська\",
        \"nl_BE\": \"фламандська\",
        \"nmg\": \"квазіо\",
        \"nn\": \"норвезька (нюношк)\",
        \"nnh\": \"нгємбун\",
        \"no\": \"норвезька\",
        \"nog\": \"ногайська\",
        \"non\": \"давньонорвезька\",
        \"nqo\": \"нко\",
        \"nr\": \"ндебелє південна\",
        \"nso\": \"північна сото\",
        \"nus\": \"нуер\",
        \"nv\": \"навахо\",
        \"nwc\": \"неварі класична\",
        \"ny\": \"ньянджа\",
        \"nym\": \"ньямвезі\",
        \"nyn\": \"ньянколе\",
        \"nyo\": \"ньоро\",
        \"nzi\": \"нзіма\",
        \"oc\": \"окситанська\",
        \"oj\": \"оджібва\",
        \"om\": \"оромо\",
        \"or\": \"одія\",
        \"os\": \"осетинська\",
        \"osa\": \"осейдж\",
        \"ota\": \"османська\",
        \"pa\": \"панджабі\",
        \"pag\": \"пангасінанська\",
        \"pal\": \"пехлеві\",
        \"pam\": \"пампанга\",
        \"pap\": \"папʼяменто\",
        \"pau\": \"палауанська\",
        \"pcm\": \"нігерійсько-креольська\",
        \"peo\": \"давньоперська\",
        \"phn\": \"фінікійсько-пунічна\",
        \"pi\": \"палі\",
        \"pl\": \"польська\",
        \"pon\": \"понапе\",
        \"prg\": \"пруська\",
        \"pro\": \"давньопровансальська\",
        \"ps\": \"пушту\",
        \"pt\": \"портуґальська\",
        \"pt_BR\": \"португальська (Бразилія)\",
        \"pt_PT\": \"європейська портуґальська\",
        \"qu\": \"кечуа\",
        \"quc\": \"кіче\",
        \"raj\": \"раджастхані\",
        \"rap\": \"рапануї\",
        \"rar\": \"раротонга\",
        \"rm\": \"ретороманська\",
        \"rn\": \"рунді\",
        \"ro\": \"румунська\",
        \"ro_MD\": \"молдавська\",
        \"rof\": \"ромбо\",
        \"rom\": \"циганська\",
        \"root\": \"коренева\",
        \"ru\": \"російська\",
        \"rup\": \"арумунська\",
        \"rw\": \"кіньяруанда\",
        \"rwk\": \"рва\",
        \"sa\": \"санскрит\",
        \"sad\": \"сандаве\",
        \"sah\": \"якутська\",
        \"sam\": \"самаритянська арамейська\",
        \"saq\": \"самбуру\",
        \"sas\": \"сасакська\",
        \"sat\": \"сантальська\",
        \"sba\": \"нгамбай\",
        \"sbp\": \"сангу\",
        \"sc\": \"сардинська\",
        \"scn\": \"сицилійська\",
        \"sco\": \"шотландська\",
        \"sd\": \"сіндхі\",
        \"sdh\": \"південнокурдська\",
        \"se\": \"північносаамська\",
        \"see\": \"сенека\",
        \"seh\": \"сена\",
        \"sel\": \"селькупська\",
        \"ses\": \"койраборо сені\",
        \"sg\": \"санго\",
        \"sga\": \"давньоірландська\",
        \"sh\": \"сербсько-хорватська\",
        \"shi\": \"тачеліт\",
        \"shn\": \"шанська\",
        \"shu\": \"чадійська арабська\",
        \"si\": \"сингальська\",
        \"sid\": \"сідамо\",
        \"sk\": \"словацька\",
        \"sl\": \"словенська\",
        \"sm\": \"самоанська\",
        \"sma\": \"південносаамська\",
        \"smj\": \"саамська луле\",
        \"smn\": \"саамська інарі\",
        \"sms\": \"скольт-саамська\",
        \"sn\": \"шона\",
        \"snk\": \"сонінке\",
        \"so\": \"сомалі\",
        \"sog\": \"согдійська\",
        \"sq\": \"албанська\",
        \"sr\": \"сербська\",
        \"srn\": \"сранан тонго\",
        \"srr\": \"серер\",
        \"ss\": \"сісваті\",
        \"ssy\": \"сахо\",
        \"st\": \"сото південна\",
        \"su\": \"сунданська\",
        \"suk\": \"сукума\",
        \"sus\": \"сусу\",
        \"sux\": \"шумерська\",
        \"sv\": \"шведська\",
        \"sw\": \"суахілі\",
        \"sw_CD\": \"суахілі (Конго)\",
        \"swb\": \"коморська\",
        \"syc\": \"сирійська класична\",
        \"syr\": \"сирійська\",
        \"ta\": \"тамільська\",
        \"te\": \"телугу\",
        \"tem\": \"темне\",
        \"teo\": \"тесо\",
        \"ter\": \"терено\",
        \"tet\": \"тетум\",
        \"tg\": \"таджицька\",
        \"th\": \"тайська\",
        \"ti\": \"тигринья\",
        \"tig\": \"тигре\",
        \"tiv\": \"тів\",
        \"tk\": \"туркменська\",
        \"tkl\": \"токелау\",
        \"tl\": \"тагальська\",
        \"tlh\": \"клінгонська\",
        \"tli\": \"тлінгіт\",
        \"tmh\": \"тамашек\",
        \"tn\": \"тсвана\",
        \"to\": \"тонґанська\",
        \"tog\": \"ньяса тонга\",
        \"tpi\": \"ток-пісін\",
        \"tr\": \"турецька\",
        \"trv\": \"тароко\",
        \"ts\": \"тсонга\",
        \"tsi\": \"цимшиан\",
        \"tt\": \"татарська\",
        \"tum\": \"тумбука\",
        \"tvl\": \"тувалу\",
        \"tw\": \"тві\",
        \"twq\": \"тасавак\",
        \"ty\": \"таїтянська\",
        \"tyv\": \"тувинська\",
        \"tzm\": \"центральноатласька тамазігт\",
        \"udm\": \"удмуртська\",
        \"ug\": \"уйгурська\",
        \"uga\": \"угаритська\",
        \"uk\": \"українська\",
        \"umb\": \"умбунду\",
        \"ur\": \"урду\",
        \"uz\": \"узбецька\",
        \"vai\": \"ваї\",
        \"ve\": \"венда\",
        \"vi\": \"вʼєтнамська\",
        \"vo\": \"волапʼюк\",
        \"vot\": \"водська\",
        \"vun\": \"вуньо\",
        \"wa\": \"валлонська\",
        \"wae\": \"валзерська\",
        \"wal\": \"волайтта\",
        \"war\": \"варай\",
        \"was\": \"вашо\",
        \"wbp\": \"валпірі\",
        \"wo\": \"волоф\",
        \"wuu\": \"уська китайська\",
        \"xal\": \"калмицька\",
        \"xh\": \"кхоса\",
        \"xog\": \"сога\",
        \"yao\": \"яо\",
        \"yap\": \"яп\",
        \"yav\": \"янгбен\",
        \"ybb\": \"ємба\",
        \"yi\": \"їдиш\",
        \"yo\": \"йоруба\",
        \"yue\": \"кантонська\",
        \"za\": \"чжуан\",
        \"zap\": \"сапотекська\",
        \"zbl\": \"блісса мова\",
        \"zen\": \"зенага\",
        \"zgh\": \"стандартна марокканська берберська\",
        \"zh\": \"китайська\",
        \"zh_Hans\": \"китайська (спрощене письмо)\",
        \"zh_Hant\": \"китайська (традиційне письмо)\",
        \"zu\": \"зулуська\",
        \"zun\": \"зуньї\",
        \"zza\": \"зазакі\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/uk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/uk.json");
    }
}
