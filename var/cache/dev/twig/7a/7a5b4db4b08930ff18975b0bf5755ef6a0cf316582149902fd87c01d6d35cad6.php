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

/* vendor/symfony/intl/Resources/data/languages/no.json */
class __TwigTemplate_e00258d97582ce5625d998c6e3dfec9eb26dec879eb88210be7c14e8dec9d152 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/no.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/no.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"afar\",
        \"ab\": \"abkhasisk\",
        \"ace\": \"achinesisk\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adygeisk\",
        \"ae\": \"avestisk\",
        \"aeb\": \"tunisisk-arabisk\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"akan\",
        \"akk\": \"akkadisk\",
        \"akz\": \"alabama\",
        \"ale\": \"aleutisk\",
        \"aln\": \"gegisk-albansk\",
        \"alt\": \"søraltaisk\",
        \"am\": \"amharisk\",
        \"an\": \"aragonsk\",
        \"ang\": \"gammelengelsk\",
        \"anp\": \"angika\",
        \"ar\": \"arabisk\",
        \"ar_001\": \"moderne standardarabisk\",
        \"arc\": \"arameisk\",
        \"arn\": \"mapudungun\",
        \"aro\": \"araona\",
        \"arp\": \"arapaho\",
        \"arq\": \"algerisk arabisk\",
        \"ars\": \"najdi-arabisk\",
        \"arw\": \"arawak\",
        \"ary\": \"marokkansk-arabisk\",
        \"arz\": \"egyptisk arabisk\",
        \"as\": \"assamesisk\",
        \"asa\": \"asu\",
        \"ase\": \"amerikansk tegnspråk\",
        \"ast\": \"asturisk\",
        \"av\": \"avarisk\",
        \"avk\": \"kotava\",
        \"awa\": \"avadhi\",
        \"ay\": \"aymara\",
        \"az\": \"aserbajdsjansk\",
        \"ba\": \"basjkirsk\",
        \"bal\": \"baluchi\",
        \"ban\": \"balinesisk\",
        \"bar\": \"bairisk\",
        \"bas\": \"basaa\",
        \"bax\": \"bamun\",
        \"bbc\": \"batak toba\",
        \"bbj\": \"ghomala\",
        \"be\": \"hviterussisk\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bew\": \"betawi\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bfq\": \"badaga\",
        \"bg\": \"bulgarsk\",
        \"bgn\": \"vestbalutsji\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bikol\",
        \"bin\": \"bini\",
        \"bjn\": \"banjar\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bengali\",
        \"bo\": \"tibetansk\",
        \"bpy\": \"bishnupriya\",
        \"bqi\": \"bakhtiari\",
        \"br\": \"bretonsk\",
        \"bra\": \"braj\",
        \"brh\": \"brahui\",
        \"brx\": \"bodo\",
        \"bs\": \"bosnisk\",
        \"bss\": \"akose\",
        \"bua\": \"burjatisk\",
        \"bug\": \"buginesisk\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"katalansk\",
        \"cad\": \"caddo\",
        \"car\": \"karibisk\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"tsjetsjensk\",
        \"ceb\": \"cebuansk\",
        \"cgg\": \"kiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"chibcha\",
        \"chg\": \"tsjagatai\",
        \"chk\": \"chuukesisk\",
        \"chm\": \"mari\",
        \"chn\": \"chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewiansk\",
        \"chr\": \"cherokesisk\",
        \"chy\": \"cheyenne\",
        \"ckb\": \"kurdisk (sorani)\",
        \"co\": \"korsikansk\",
        \"cop\": \"koptisk\",
        \"cps\": \"kapiz\",
        \"cr\": \"cree\",
        \"crh\": \"krimtatarisk\",
        \"crs\": \"seselwa\",
        \"cs\": \"tsjekkisk\",
        \"csb\": \"kasjubisk\",
        \"cu\": \"kirkeslavisk\",
        \"cv\": \"tsjuvasjisk\",
        \"cy\": \"walisisk\",
        \"da\": \"dansk\",
        \"dak\": \"dakota\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"tysk\",
        \"del\": \"delaware\",
        \"den\": \"slavey\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"lavsorbisk\",
        \"dtp\": \"sentraldusun\",
        \"dua\": \"duala\",
        \"dum\": \"mellomnederlandsk\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"dyula\",
        \"dz\": \"dzongkha\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"kiembu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egl\": \"emiliansk\",
        \"egy\": \"gammelegyptisk\",
        \"eka\": \"ekajuk\",
        \"el\": \"gresk\",
        \"elx\": \"elamittisk\",
        \"en\": \"engelsk\",
        \"enm\": \"mellomengelsk\",
        \"eo\": \"esperanto\",
        \"es\": \"spansk\",
        \"esu\": \"sentralyupik\",
        \"et\": \"estisk\",
        \"eu\": \"baskisk\",
        \"ewo\": \"ewondo\",
        \"ext\": \"ekstremaduransk\",
        \"fa\": \"persisk\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"fulfulde\",
        \"fi\": \"finsk\",
        \"fil\": \"filipino\",
        \"fit\": \"tornedalsfinsk\",
        \"fj\": \"fijiansk\",
        \"fo\": \"færøysk\",
        \"fon\": \"fon\",
        \"fr\": \"fransk\",
        \"frc\": \"cajunfransk\",
        \"frm\": \"mellomfransk\",
        \"fro\": \"gammelfransk\",
        \"frp\": \"arpitansk\",
        \"frr\": \"nordfrisisk\",
        \"frs\": \"østfrisisk\",
        \"fur\": \"friuliansk\",
        \"fy\": \"vestfrisisk\",
        \"ga\": \"irsk\",
        \"gaa\": \"ga\",
        \"gag\": \"gagausisk\",
        \"gan\": \"gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gbz\": \"zoroastrisk dari\",
        \"gd\": \"skotsk-gælisk\",
        \"gez\": \"geez\",
        \"gil\": \"kiribatisk\",
        \"gl\": \"galisisk\",
        \"glk\": \"gileki\",
        \"gmh\": \"mellomhøytysk\",
        \"gn\": \"guarani\",
        \"goh\": \"gammelhøytysk\",
        \"gom\": \"goansk konkani\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gotisk\",
        \"grb\": \"grebo\",
        \"grc\": \"gammelgresk\",
        \"gsw\": \"sveitsertysk\",
        \"gu\": \"gujarati\",
        \"guc\": \"wayuu\",
        \"gur\": \"frafra\",
        \"guz\": \"gusii\",
        \"gv\": \"mansk\",
        \"gwi\": \"gwichin\",
        \"ha\": \"hausa\",
        \"hai\": \"haida\",
        \"hak\": \"hakka\",
        \"haw\": \"hawaiisk\",
        \"he\": \"hebraisk\",
        \"hi\": \"hindi\",
        \"hif\": \"fijiansk hindi\",
        \"hil\": \"hiligaynon\",
        \"hit\": \"hettittisk\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"kroatisk\",
        \"hsb\": \"høysorbisk\",
        \"hsn\": \"xiang\",
        \"ht\": \"haitisk\",
        \"hu\": \"ungarsk\",
        \"hup\": \"hupa\",
        \"hy\": \"armensk\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonesisk\",
        \"ie\": \"interlingue\",
        \"ig\": \"ibo\",
        \"ii\": \"sichuan-yi\",
        \"ik\": \"inupiak\",
        \"ilo\": \"iloko\",
        \"inh\": \"ingusjisk\",
        \"io\": \"ido\",
        \"is\": \"islandsk\",
        \"it\": \"italiensk\",
        \"iu\": \"inuktitut\",
        \"izh\": \"ingrisk\",
        \"ja\": \"japansk\",
        \"jam\": \"jamaicansk kreolengelsk\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"jødepersisk\",
        \"jrb\": \"jødearabisk\",
        \"jut\": \"jysk\",
        \"jv\": \"javanesisk\",
        \"ka\": \"georgisk\",
        \"kaa\": \"karakalpakisk\",
        \"kab\": \"kabylsk\",
        \"kac\": \"kachin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardisk\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"kappverdisk\",
        \"ken\": \"kenyang\",
        \"kfo\": \"koro\",
        \"kg\": \"kikongo\",
        \"kgp\": \"kaingang\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanesisk\",
        \"khq\": \"koyra chiini\",
        \"khw\": \"khowar\",
        \"ki\": \"kikuyu\",
        \"kiu\": \"kirmancki\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kasakhisk\",
        \"kkj\": \"kako\",
        \"kl\": \"grønlandsk\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"kannada\",
        \"ko\": \"koreansk\",
        \"koi\": \"komipermjakisk\",
        \"kok\": \"konkani\",
        \"kos\": \"kosraeansk\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karatsjajbalkarsk\",
        \"kri\": \"krio\",
        \"krj\": \"kinaray-a\",
        \"krl\": \"karelsk\",
        \"kru\": \"kurukh\",
        \"ks\": \"kasjmiri\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kølnsk\",
        \"ku\": \"kurdisk\",
        \"kum\": \"kumykisk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"kornisk\",
        \"ky\": \"kirgisisk\",
        \"la\": \"latin\",
        \"lad\": \"ladinsk\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburgsk\",
        \"lez\": \"lesgisk\",
        \"lfn\": \"lingua franca nova\",
        \"lg\": \"ganda\",
        \"li\": \"limburgsk\",
        \"lij\": \"ligurisk\",
        \"liv\": \"livisk\",
        \"lkt\": \"lakota\",
        \"lmo\": \"lombardisk\",
        \"ln\": \"lingala\",
        \"lo\": \"laotisk\",
        \"lol\": \"mongo\",
        \"lou\": \"louisianakreolsk\",
        \"loz\": \"lozi\",
        \"lrc\": \"nord-luri\",
        \"lt\": \"litauisk\",
        \"ltg\": \"latgallisk\",
        \"lu\": \"luba-katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"mizo\",
        \"luy\": \"luhya\",
        \"lv\": \"latvisk\",
        \"lzh\": \"klassisk kinesisk\",
        \"lzz\": \"lazisk\",
        \"mad\": \"maduresisk\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandingo\",
        \"mas\": \"masai\",
        \"mde\": \"maba\",
        \"mdf\": \"moksja\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauritisk-kreolsk\",
        \"mg\": \"gassisk\",
        \"mga\": \"mellomirsk\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshallesisk\",
        \"mi\": \"maori\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"makedonsk\",
        \"ml\": \"malayalam\",
        \"mn\": \"mongolsk\",
        \"mnc\": \"mandsju\",
        \"mni\": \"manipuri\",
        \"moh\": \"mohawk\",
        \"mos\": \"mossi\",
        \"mr\": \"marathi\",
        \"mrj\": \"vestmarisk\",
        \"ms\": \"malayisk\",
        \"mt\": \"maltesisk\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandesisk\",
        \"mwr\": \"marwari\",
        \"mwv\": \"mentawai\",
        \"my\": \"burmesisk\",
        \"mye\": \"myene\",
        \"myv\": \"erzia\",
        \"mzn\": \"mazandarani\",
        \"na\": \"nauru\",
        \"nan\": \"minnan\",
        \"nap\": \"napolitansk\",
        \"naq\": \"nama\",
        \"nb\": \"norsk bokmål\",
        \"nd\": \"nord-ndebele\",
        \"nds\": \"nedertysk\",
        \"nds_NL\": \"nedersaksisk\",
        \"ne\": \"nepali\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niueansk\",
        \"njo\": \"ao naga\",
        \"nl\": \"nederlandsk\",
        \"nl_BE\": \"flamsk\",
        \"nmg\": \"kwasio\",
        \"nn\": \"norsk nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norsk\",
        \"nog\": \"nogaisk\",
        \"non\": \"gammelnorsk\",
        \"nov\": \"novial\",
        \"nqo\": \"nʼko\",
        \"nr\": \"sør-ndebele\",
        \"nso\": \"nord-sotho\",
        \"nus\": \"nuer\",
        \"nv\": \"navajo\",
        \"nwc\": \"klassisk newari\",
        \"ny\": \"nyanja\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"oksitansk\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"odia\",
        \"os\": \"ossetisk\",
        \"osa\": \"osage\",
        \"ota\": \"ottomansk tyrkisk\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauisk\",
        \"pcd\": \"pikardisk\",
        \"pcm\": \"nigeriansk pidginspråk\",
        \"pdc\": \"pennsylvaniatysk\",
        \"pdt\": \"plautdietsch\",
        \"peo\": \"gammelpersisk\",
        \"pfl\": \"palatintysk\",
        \"phn\": \"fønikisk\",
        \"pi\": \"pali\",
        \"pl\": \"polsk\",
        \"pms\": \"piemontesisk\",
        \"pnt\": \"pontisk\",
        \"pon\": \"ponapisk\",
        \"prg\": \"prøyssisk\",
        \"pro\": \"gammelprovençalsk\",
        \"ps\": \"pashto\",
        \"pt\": \"portugisisk\",
        \"qu\": \"quechua\",
        \"quc\": \"k’iche’\",
        \"qug\": \"kichwa (Chimborazo-høylandet)\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongansk\",
        \"rgn\": \"romagnolsk\",
        \"rif\": \"riff\",
        \"rm\": \"retoromansk\",
        \"rn\": \"rundi\",
        \"ro\": \"rumensk\",
        \"ro_MD\": \"moldovsk\",
        \"rof\": \"rombo\",
        \"rom\": \"romani\",
        \"root\": \"rot\",
        \"rtm\": \"rotumansk\",
        \"ru\": \"russisk\",
        \"rue\": \"rusinsk\",
        \"rug\": \"roviana\",
        \"rup\": \"aromansk\",
        \"rw\": \"kinyarwanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sanskrit\",
        \"sad\": \"sandawe\",
        \"sah\": \"sakha\",
        \"sam\": \"samaritansk arameisk\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"saz\": \"saurashtra\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardisk\",
        \"scn\": \"siciliansk\",
        \"sco\": \"skotsk\",
        \"sd\": \"sindhi\",
        \"sdc\": \"sassaresisk sardisk\",
        \"sdh\": \"sørkurdisk\",
        \"se\": \"nordsamisk\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sei\": \"seri\",
        \"sel\": \"selkupisk\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"gammelirsk\",
        \"sgs\": \"samogitisk\",
        \"sh\": \"serbokroatisk\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"tsjadisk arabisk\",
        \"si\": \"singalesisk\",
        \"sid\": \"sidamo\",
        \"sk\": \"slovakisk\",
        \"sl\": \"slovensk\",
        \"sli\": \"lavschlesisk\",
        \"sly\": \"selayar\",
        \"sm\": \"samoansk\",
        \"sma\": \"sørsamisk\",
        \"smj\": \"lulesamisk\",
        \"smn\": \"enaresamisk\",
        \"sms\": \"skoltesamisk\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somali\",
        \"sog\": \"sogdisk\",
        \"sq\": \"albansk\",
        \"sr\": \"serbisk\",
        \"srn\": \"sranan\",
        \"srr\": \"serer\",
        \"ss\": \"swati\",
        \"ssy\": \"saho\",
        \"st\": \"sør-sotho\",
        \"stq\": \"saterfrisisk\",
        \"su\": \"sundanesisk\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumerisk\",
        \"sv\": \"svensk\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"kongolesisk swahili\",
        \"swb\": \"komorisk\",
        \"syc\": \"klassisk syrisk\",
        \"syr\": \"syriakisk\",
        \"szl\": \"schlesisk\",
        \"ta\": \"tamil\",
        \"tcy\": \"tulu\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tetum\",
        \"tg\": \"tadsjikisk\",
        \"th\": \"thai\",
        \"ti\": \"tigrinja\",
        \"tig\": \"tigré\",
        \"tiv\": \"tiv\",
        \"tk\": \"turkmensk\",
        \"tkl\": \"tokelauisk\",
        \"tkr\": \"tsakhursk\",
        \"tl\": \"tagalog\",
        \"tlh\": \"klingon\",
        \"tli\": \"tlingit\",
        \"tly\": \"talysj\",
        \"tmh\": \"tamasjek\",
        \"tn\": \"setswana\",
        \"to\": \"tongansk\",
        \"tog\": \"nyasa-tongansk\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"tyrkisk\",
        \"tru\": \"turoyo\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsd\": \"tsakonisk\",
        \"tsi\": \"tsimshian\",
        \"tt\": \"tatarisk\",
        \"ttt\": \"muslimsk tat\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvalsk\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahitisk\",
        \"tyv\": \"tuvinsk\",
        \"tzm\": \"sentralmarokkansk tamazight\",
        \"udm\": \"udmurtisk\",
        \"ug\": \"uigurisk\",
        \"uga\": \"ugaritisk\",
        \"uk\": \"ukrainsk\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdu\",
        \"uz\": \"usbekisk\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vec\": \"venetiansk\",
        \"vep\": \"vepsisk\",
        \"vi\": \"vietnamesisk\",
        \"vls\": \"vestflamsk\",
        \"vmf\": \"Main-frankisk\",
        \"vo\": \"volapyk\",
        \"vot\": \"votisk\",
        \"vro\": \"sørestisk\",
        \"vun\": \"vunjo\",
        \"wa\": \"vallonsk\",
        \"wae\": \"walsertysk\",
        \"wal\": \"wolaytta\",
        \"war\": \"waray-waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"wolof\",
        \"wuu\": \"wu\",
        \"xal\": \"kalmukkisk\",
        \"xh\": \"xhosa\",
        \"xmf\": \"mingrelsk\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"yapesisk\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"jiddisk\",
        \"yo\": \"joruba\",
        \"yrl\": \"nheengatu\",
        \"yue\": \"kantonesisk\",
        \"za\": \"zhuang\",
        \"zap\": \"zapotekisk\",
        \"zbl\": \"blissymboler\",
        \"zea\": \"zeeuws\",
        \"zen\": \"zenaga\",
        \"zgh\": \"standard marrokansk tamazight\",
        \"zh\": \"kinesisk\",
        \"zh_Hans\": \"forenklet kinesisk\",
        \"zh_Hant\": \"tradisjonell kinesisk\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zazaisk\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/no.json";
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
        \"aa\": \"afar\",
        \"ab\": \"abkhasisk\",
        \"ace\": \"achinesisk\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adygeisk\",
        \"ae\": \"avestisk\",
        \"aeb\": \"tunisisk-arabisk\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"akan\",
        \"akk\": \"akkadisk\",
        \"akz\": \"alabama\",
        \"ale\": \"aleutisk\",
        \"aln\": \"gegisk-albansk\",
        \"alt\": \"søraltaisk\",
        \"am\": \"amharisk\",
        \"an\": \"aragonsk\",
        \"ang\": \"gammelengelsk\",
        \"anp\": \"angika\",
        \"ar\": \"arabisk\",
        \"ar_001\": \"moderne standardarabisk\",
        \"arc\": \"arameisk\",
        \"arn\": \"mapudungun\",
        \"aro\": \"araona\",
        \"arp\": \"arapaho\",
        \"arq\": \"algerisk arabisk\",
        \"ars\": \"najdi-arabisk\",
        \"arw\": \"arawak\",
        \"ary\": \"marokkansk-arabisk\",
        \"arz\": \"egyptisk arabisk\",
        \"as\": \"assamesisk\",
        \"asa\": \"asu\",
        \"ase\": \"amerikansk tegnspråk\",
        \"ast\": \"asturisk\",
        \"av\": \"avarisk\",
        \"avk\": \"kotava\",
        \"awa\": \"avadhi\",
        \"ay\": \"aymara\",
        \"az\": \"aserbajdsjansk\",
        \"ba\": \"basjkirsk\",
        \"bal\": \"baluchi\",
        \"ban\": \"balinesisk\",
        \"bar\": \"bairisk\",
        \"bas\": \"basaa\",
        \"bax\": \"bamun\",
        \"bbc\": \"batak toba\",
        \"bbj\": \"ghomala\",
        \"be\": \"hviterussisk\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bew\": \"betawi\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bfq\": \"badaga\",
        \"bg\": \"bulgarsk\",
        \"bgn\": \"vestbalutsji\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bikol\",
        \"bin\": \"bini\",
        \"bjn\": \"banjar\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bengali\",
        \"bo\": \"tibetansk\",
        \"bpy\": \"bishnupriya\",
        \"bqi\": \"bakhtiari\",
        \"br\": \"bretonsk\",
        \"bra\": \"braj\",
        \"brh\": \"brahui\",
        \"brx\": \"bodo\",
        \"bs\": \"bosnisk\",
        \"bss\": \"akose\",
        \"bua\": \"burjatisk\",
        \"bug\": \"buginesisk\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"katalansk\",
        \"cad\": \"caddo\",
        \"car\": \"karibisk\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"tsjetsjensk\",
        \"ceb\": \"cebuansk\",
        \"cgg\": \"kiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"chibcha\",
        \"chg\": \"tsjagatai\",
        \"chk\": \"chuukesisk\",
        \"chm\": \"mari\",
        \"chn\": \"chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewiansk\",
        \"chr\": \"cherokesisk\",
        \"chy\": \"cheyenne\",
        \"ckb\": \"kurdisk (sorani)\",
        \"co\": \"korsikansk\",
        \"cop\": \"koptisk\",
        \"cps\": \"kapiz\",
        \"cr\": \"cree\",
        \"crh\": \"krimtatarisk\",
        \"crs\": \"seselwa\",
        \"cs\": \"tsjekkisk\",
        \"csb\": \"kasjubisk\",
        \"cu\": \"kirkeslavisk\",
        \"cv\": \"tsjuvasjisk\",
        \"cy\": \"walisisk\",
        \"da\": \"dansk\",
        \"dak\": \"dakota\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"tysk\",
        \"del\": \"delaware\",
        \"den\": \"slavey\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"lavsorbisk\",
        \"dtp\": \"sentraldusun\",
        \"dua\": \"duala\",
        \"dum\": \"mellomnederlandsk\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"dyula\",
        \"dz\": \"dzongkha\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"kiembu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egl\": \"emiliansk\",
        \"egy\": \"gammelegyptisk\",
        \"eka\": \"ekajuk\",
        \"el\": \"gresk\",
        \"elx\": \"elamittisk\",
        \"en\": \"engelsk\",
        \"enm\": \"mellomengelsk\",
        \"eo\": \"esperanto\",
        \"es\": \"spansk\",
        \"esu\": \"sentralyupik\",
        \"et\": \"estisk\",
        \"eu\": \"baskisk\",
        \"ewo\": \"ewondo\",
        \"ext\": \"ekstremaduransk\",
        \"fa\": \"persisk\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"fulfulde\",
        \"fi\": \"finsk\",
        \"fil\": \"filipino\",
        \"fit\": \"tornedalsfinsk\",
        \"fj\": \"fijiansk\",
        \"fo\": \"færøysk\",
        \"fon\": \"fon\",
        \"fr\": \"fransk\",
        \"frc\": \"cajunfransk\",
        \"frm\": \"mellomfransk\",
        \"fro\": \"gammelfransk\",
        \"frp\": \"arpitansk\",
        \"frr\": \"nordfrisisk\",
        \"frs\": \"østfrisisk\",
        \"fur\": \"friuliansk\",
        \"fy\": \"vestfrisisk\",
        \"ga\": \"irsk\",
        \"gaa\": \"ga\",
        \"gag\": \"gagausisk\",
        \"gan\": \"gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gbz\": \"zoroastrisk dari\",
        \"gd\": \"skotsk-gælisk\",
        \"gez\": \"geez\",
        \"gil\": \"kiribatisk\",
        \"gl\": \"galisisk\",
        \"glk\": \"gileki\",
        \"gmh\": \"mellomhøytysk\",
        \"gn\": \"guarani\",
        \"goh\": \"gammelhøytysk\",
        \"gom\": \"goansk konkani\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gotisk\",
        \"grb\": \"grebo\",
        \"grc\": \"gammelgresk\",
        \"gsw\": \"sveitsertysk\",
        \"gu\": \"gujarati\",
        \"guc\": \"wayuu\",
        \"gur\": \"frafra\",
        \"guz\": \"gusii\",
        \"gv\": \"mansk\",
        \"gwi\": \"gwichin\",
        \"ha\": \"hausa\",
        \"hai\": \"haida\",
        \"hak\": \"hakka\",
        \"haw\": \"hawaiisk\",
        \"he\": \"hebraisk\",
        \"hi\": \"hindi\",
        \"hif\": \"fijiansk hindi\",
        \"hil\": \"hiligaynon\",
        \"hit\": \"hettittisk\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"kroatisk\",
        \"hsb\": \"høysorbisk\",
        \"hsn\": \"xiang\",
        \"ht\": \"haitisk\",
        \"hu\": \"ungarsk\",
        \"hup\": \"hupa\",
        \"hy\": \"armensk\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonesisk\",
        \"ie\": \"interlingue\",
        \"ig\": \"ibo\",
        \"ii\": \"sichuan-yi\",
        \"ik\": \"inupiak\",
        \"ilo\": \"iloko\",
        \"inh\": \"ingusjisk\",
        \"io\": \"ido\",
        \"is\": \"islandsk\",
        \"it\": \"italiensk\",
        \"iu\": \"inuktitut\",
        \"izh\": \"ingrisk\",
        \"ja\": \"japansk\",
        \"jam\": \"jamaicansk kreolengelsk\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"jødepersisk\",
        \"jrb\": \"jødearabisk\",
        \"jut\": \"jysk\",
        \"jv\": \"javanesisk\",
        \"ka\": \"georgisk\",
        \"kaa\": \"karakalpakisk\",
        \"kab\": \"kabylsk\",
        \"kac\": \"kachin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardisk\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"kappverdisk\",
        \"ken\": \"kenyang\",
        \"kfo\": \"koro\",
        \"kg\": \"kikongo\",
        \"kgp\": \"kaingang\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanesisk\",
        \"khq\": \"koyra chiini\",
        \"khw\": \"khowar\",
        \"ki\": \"kikuyu\",
        \"kiu\": \"kirmancki\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kasakhisk\",
        \"kkj\": \"kako\",
        \"kl\": \"grønlandsk\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"kannada\",
        \"ko\": \"koreansk\",
        \"koi\": \"komipermjakisk\",
        \"kok\": \"konkani\",
        \"kos\": \"kosraeansk\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karatsjajbalkarsk\",
        \"kri\": \"krio\",
        \"krj\": \"kinaray-a\",
        \"krl\": \"karelsk\",
        \"kru\": \"kurukh\",
        \"ks\": \"kasjmiri\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kølnsk\",
        \"ku\": \"kurdisk\",
        \"kum\": \"kumykisk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"kornisk\",
        \"ky\": \"kirgisisk\",
        \"la\": \"latin\",
        \"lad\": \"ladinsk\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburgsk\",
        \"lez\": \"lesgisk\",
        \"lfn\": \"lingua franca nova\",
        \"lg\": \"ganda\",
        \"li\": \"limburgsk\",
        \"lij\": \"ligurisk\",
        \"liv\": \"livisk\",
        \"lkt\": \"lakota\",
        \"lmo\": \"lombardisk\",
        \"ln\": \"lingala\",
        \"lo\": \"laotisk\",
        \"lol\": \"mongo\",
        \"lou\": \"louisianakreolsk\",
        \"loz\": \"lozi\",
        \"lrc\": \"nord-luri\",
        \"lt\": \"litauisk\",
        \"ltg\": \"latgallisk\",
        \"lu\": \"luba-katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"mizo\",
        \"luy\": \"luhya\",
        \"lv\": \"latvisk\",
        \"lzh\": \"klassisk kinesisk\",
        \"lzz\": \"lazisk\",
        \"mad\": \"maduresisk\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandingo\",
        \"mas\": \"masai\",
        \"mde\": \"maba\",
        \"mdf\": \"moksja\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauritisk-kreolsk\",
        \"mg\": \"gassisk\",
        \"mga\": \"mellomirsk\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshallesisk\",
        \"mi\": \"maori\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"makedonsk\",
        \"ml\": \"malayalam\",
        \"mn\": \"mongolsk\",
        \"mnc\": \"mandsju\",
        \"mni\": \"manipuri\",
        \"moh\": \"mohawk\",
        \"mos\": \"mossi\",
        \"mr\": \"marathi\",
        \"mrj\": \"vestmarisk\",
        \"ms\": \"malayisk\",
        \"mt\": \"maltesisk\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandesisk\",
        \"mwr\": \"marwari\",
        \"mwv\": \"mentawai\",
        \"my\": \"burmesisk\",
        \"mye\": \"myene\",
        \"myv\": \"erzia\",
        \"mzn\": \"mazandarani\",
        \"na\": \"nauru\",
        \"nan\": \"minnan\",
        \"nap\": \"napolitansk\",
        \"naq\": \"nama\",
        \"nb\": \"norsk bokmål\",
        \"nd\": \"nord-ndebele\",
        \"nds\": \"nedertysk\",
        \"nds_NL\": \"nedersaksisk\",
        \"ne\": \"nepali\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niueansk\",
        \"njo\": \"ao naga\",
        \"nl\": \"nederlandsk\",
        \"nl_BE\": \"flamsk\",
        \"nmg\": \"kwasio\",
        \"nn\": \"norsk nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norsk\",
        \"nog\": \"nogaisk\",
        \"non\": \"gammelnorsk\",
        \"nov\": \"novial\",
        \"nqo\": \"nʼko\",
        \"nr\": \"sør-ndebele\",
        \"nso\": \"nord-sotho\",
        \"nus\": \"nuer\",
        \"nv\": \"navajo\",
        \"nwc\": \"klassisk newari\",
        \"ny\": \"nyanja\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"oksitansk\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"odia\",
        \"os\": \"ossetisk\",
        \"osa\": \"osage\",
        \"ota\": \"ottomansk tyrkisk\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauisk\",
        \"pcd\": \"pikardisk\",
        \"pcm\": \"nigeriansk pidginspråk\",
        \"pdc\": \"pennsylvaniatysk\",
        \"pdt\": \"plautdietsch\",
        \"peo\": \"gammelpersisk\",
        \"pfl\": \"palatintysk\",
        \"phn\": \"fønikisk\",
        \"pi\": \"pali\",
        \"pl\": \"polsk\",
        \"pms\": \"piemontesisk\",
        \"pnt\": \"pontisk\",
        \"pon\": \"ponapisk\",
        \"prg\": \"prøyssisk\",
        \"pro\": \"gammelprovençalsk\",
        \"ps\": \"pashto\",
        \"pt\": \"portugisisk\",
        \"qu\": \"quechua\",
        \"quc\": \"k’iche’\",
        \"qug\": \"kichwa (Chimborazo-høylandet)\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongansk\",
        \"rgn\": \"romagnolsk\",
        \"rif\": \"riff\",
        \"rm\": \"retoromansk\",
        \"rn\": \"rundi\",
        \"ro\": \"rumensk\",
        \"ro_MD\": \"moldovsk\",
        \"rof\": \"rombo\",
        \"rom\": \"romani\",
        \"root\": \"rot\",
        \"rtm\": \"rotumansk\",
        \"ru\": \"russisk\",
        \"rue\": \"rusinsk\",
        \"rug\": \"roviana\",
        \"rup\": \"aromansk\",
        \"rw\": \"kinyarwanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sanskrit\",
        \"sad\": \"sandawe\",
        \"sah\": \"sakha\",
        \"sam\": \"samaritansk arameisk\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"saz\": \"saurashtra\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardisk\",
        \"scn\": \"siciliansk\",
        \"sco\": \"skotsk\",
        \"sd\": \"sindhi\",
        \"sdc\": \"sassaresisk sardisk\",
        \"sdh\": \"sørkurdisk\",
        \"se\": \"nordsamisk\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sei\": \"seri\",
        \"sel\": \"selkupisk\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"gammelirsk\",
        \"sgs\": \"samogitisk\",
        \"sh\": \"serbokroatisk\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"tsjadisk arabisk\",
        \"si\": \"singalesisk\",
        \"sid\": \"sidamo\",
        \"sk\": \"slovakisk\",
        \"sl\": \"slovensk\",
        \"sli\": \"lavschlesisk\",
        \"sly\": \"selayar\",
        \"sm\": \"samoansk\",
        \"sma\": \"sørsamisk\",
        \"smj\": \"lulesamisk\",
        \"smn\": \"enaresamisk\",
        \"sms\": \"skoltesamisk\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somali\",
        \"sog\": \"sogdisk\",
        \"sq\": \"albansk\",
        \"sr\": \"serbisk\",
        \"srn\": \"sranan\",
        \"srr\": \"serer\",
        \"ss\": \"swati\",
        \"ssy\": \"saho\",
        \"st\": \"sør-sotho\",
        \"stq\": \"saterfrisisk\",
        \"su\": \"sundanesisk\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumerisk\",
        \"sv\": \"svensk\",
        \"sw\": \"swahili\",
        \"sw_CD\": \"kongolesisk swahili\",
        \"swb\": \"komorisk\",
        \"syc\": \"klassisk syrisk\",
        \"syr\": \"syriakisk\",
        \"szl\": \"schlesisk\",
        \"ta\": \"tamil\",
        \"tcy\": \"tulu\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tetum\",
        \"tg\": \"tadsjikisk\",
        \"th\": \"thai\",
        \"ti\": \"tigrinja\",
        \"tig\": \"tigré\",
        \"tiv\": \"tiv\",
        \"tk\": \"turkmensk\",
        \"tkl\": \"tokelauisk\",
        \"tkr\": \"tsakhursk\",
        \"tl\": \"tagalog\",
        \"tlh\": \"klingon\",
        \"tli\": \"tlingit\",
        \"tly\": \"talysj\",
        \"tmh\": \"tamasjek\",
        \"tn\": \"setswana\",
        \"to\": \"tongansk\",
        \"tog\": \"nyasa-tongansk\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"tyrkisk\",
        \"tru\": \"turoyo\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsd\": \"tsakonisk\",
        \"tsi\": \"tsimshian\",
        \"tt\": \"tatarisk\",
        \"ttt\": \"muslimsk tat\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvalsk\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahitisk\",
        \"tyv\": \"tuvinsk\",
        \"tzm\": \"sentralmarokkansk tamazight\",
        \"udm\": \"udmurtisk\",
        \"ug\": \"uigurisk\",
        \"uga\": \"ugaritisk\",
        \"uk\": \"ukrainsk\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdu\",
        \"uz\": \"usbekisk\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vec\": \"venetiansk\",
        \"vep\": \"vepsisk\",
        \"vi\": \"vietnamesisk\",
        \"vls\": \"vestflamsk\",
        \"vmf\": \"Main-frankisk\",
        \"vo\": \"volapyk\",
        \"vot\": \"votisk\",
        \"vro\": \"sørestisk\",
        \"vun\": \"vunjo\",
        \"wa\": \"vallonsk\",
        \"wae\": \"walsertysk\",
        \"wal\": \"wolaytta\",
        \"war\": \"waray-waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"wolof\",
        \"wuu\": \"wu\",
        \"xal\": \"kalmukkisk\",
        \"xh\": \"xhosa\",
        \"xmf\": \"mingrelsk\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"yapesisk\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"jiddisk\",
        \"yo\": \"joruba\",
        \"yrl\": \"nheengatu\",
        \"yue\": \"kantonesisk\",
        \"za\": \"zhuang\",
        \"zap\": \"zapotekisk\",
        \"zbl\": \"blissymboler\",
        \"zea\": \"zeeuws\",
        \"zen\": \"zenaga\",
        \"zgh\": \"standard marrokansk tamazight\",
        \"zh\": \"kinesisk\",
        \"zh_Hans\": \"forenklet kinesisk\",
        \"zh_Hant\": \"tradisjonell kinesisk\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zazaisk\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/no.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/no.json");
    }
}
