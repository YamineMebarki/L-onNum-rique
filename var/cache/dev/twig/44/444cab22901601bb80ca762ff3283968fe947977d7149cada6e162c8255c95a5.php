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

/* vendor/symfony/intl/Resources/data/languages/ca.json */
class __TwigTemplate_5978635448c46ab9646858e890a94924e9c1020408ee0a4a6af6412843ad2db2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ca.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ca.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"àfar\",
        \"ab\": \"abkhaz\",
        \"ace\": \"atjeh\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigué\",
        \"ae\": \"avèstic\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"àkan\",
        \"akk\": \"accadi\",
        \"akz\": \"alabama\",
        \"ale\": \"aleuta\",
        \"aln\": \"albanès geg\",
        \"alt\": \"altaic meridional\",
        \"am\": \"amhàric\",
        \"an\": \"aragonès\",
        \"ang\": \"anglès antic\",
        \"anp\": \"angika\",
        \"ar\": \"àrab\",
        \"ar_001\": \"àrab estàndard modern\",
        \"arc\": \"arameu\",
        \"arn\": \"mapudungu\",
        \"aro\": \"araona\",
        \"arp\": \"arapaho\",
        \"ars\": \"àrab najdi\",
        \"arw\": \"arauac\",
        \"arz\": \"àrab egipci\",
        \"as\": \"assamès\",
        \"asa\": \"pare\",
        \"ase\": \"llengua de signes americana\",
        \"ast\": \"asturià\",
        \"av\": \"àvar\",
        \"awa\": \"awadhi\",
        \"ay\": \"aimara\",
        \"az\": \"azerbaidjanès\",
        \"ba\": \"baixkir\",
        \"bal\": \"balutxi\",
        \"ban\": \"balinès\",
        \"bar\": \"bavarès\",
        \"bas\": \"basa\",
        \"bax\": \"bamum\",
        \"bbj\": \"ghomala\",
        \"be\": \"belarús\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bfq\": \"badaga\",
        \"bg\": \"búlgar\",
        \"bgn\": \"balutxi occidental\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bicol\",
        \"bin\": \"edo\",
        \"bkm\": \"kom\",
        \"bla\": \"blackfoot\",
        \"bm\": \"bambara\",
        \"bn\": \"bengalí\",
        \"bo\": \"tibetà\",
        \"br\": \"bretó\",
        \"bra\": \"braj\",
        \"brh\": \"brahui\",
        \"brx\": \"bodo\",
        \"bs\": \"bosnià\",
        \"bss\": \"akoose\",
        \"bua\": \"buriat\",
        \"bug\": \"bugui\",
        \"bum\": \"bulu\",
        \"byn\": \"bilin\",
        \"byv\": \"medumba\",
        \"ca\": \"català\",
        \"cad\": \"caddo\",
        \"car\": \"carib\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"txetxè\",
        \"ceb\": \"cebuà\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"txibtxa\",
        \"chg\": \"txagatai\",
        \"chk\": \"chuuk\",
        \"chm\": \"mari\",
        \"chn\": \"pidgin chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"cherokee\",
        \"chy\": \"xeiene\",
        \"ckb\": \"kurd central\",
        \"co\": \"cors\",
        \"cop\": \"copte\",
        \"cr\": \"cree\",
        \"crh\": \"tàtar de Crimea\",
        \"crs\": \"francès crioll de les Seychelles\",
        \"cs\": \"txec\",
        \"csb\": \"caixubi\",
        \"cu\": \"eslau eclesiàstic\",
        \"cv\": \"txuvaix\",
        \"cy\": \"gal·lès\",
        \"da\": \"danès\",
        \"dak\": \"dakota\",
        \"dar\": \"darguà\",
        \"dav\": \"taita\",
        \"de\": \"alemany\",
        \"de_AT\": \"alemany austríac\",
        \"de_CH\": \"alemany estàndard suís\",
        \"del\": \"delaware\",
        \"den\": \"slavi\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"baix sòrab\",
        \"dua\": \"douala\",
        \"dum\": \"neerlandès mitjà\",
        \"dv\": \"divehi\",
        \"dyo\": \"diola\",
        \"dyu\": \"jula\",
        \"dz\": \"dzongka\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egl\": \"emilià\",
        \"egy\": \"egipci antic\",
        \"eka\": \"ekajuk\",
        \"el\": \"grec\",
        \"elx\": \"elamita\",
        \"en\": \"anglès\",
        \"en_AU\": \"anglès australià\",
        \"en_CA\": \"anglès canadenc\",
        \"en_GB\": \"anglès britànic\",
        \"en_US\": \"anglès americà\",
        \"enm\": \"anglès mitjà\",
        \"eo\": \"esperanto\",
        \"es\": \"espanyol\",
        \"es_419\": \"espanyol hispanoamericà\",
        \"es_ES\": \"espanyol europeu\",
        \"es_MX\": \"espanyol de Mèxic\",
        \"et\": \"estonià\",
        \"eu\": \"basc\",
        \"ewo\": \"ewondo\",
        \"ext\": \"extremeny\",
        \"fa\": \"persa\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"ful\",
        \"fi\": \"finès\",
        \"fil\": \"filipí\",
        \"fj\": \"fijià\",
        \"fo\": \"feroès\",
        \"fon\": \"fon\",
        \"fr\": \"francès\",
        \"fr_CA\": \"francès canadenc\",
        \"fr_CH\": \"francès suís\",
        \"frc\": \"francès cajun\",
        \"frm\": \"francès mitjà\",
        \"fro\": \"francès antic\",
        \"frr\": \"frisó septentrional\",
        \"frs\": \"frisó oriental\",
        \"fur\": \"friülà\",
        \"fy\": \"frisó occidental\",
        \"ga\": \"irlandès\",
        \"gaa\": \"ga\",
        \"gag\": \"gagaús\",
        \"gan\": \"xinès gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gd\": \"gaèlic escocès\",
        \"gez\": \"gueez\",
        \"gil\": \"gilbertès\",
        \"gl\": \"gallec\",
        \"glk\": \"gilaki\",
        \"gmh\": \"alt alemany mitjà\",
        \"gn\": \"guaraní\",
        \"goh\": \"alt alemany antic\",
        \"gom\": \"concani de Goa\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gòtic\",
        \"grb\": \"grebo\",
        \"grc\": \"grec antic\",
        \"gsw\": \"alemany suís\",
        \"gu\": \"gujarati\",
        \"guc\": \"wayú\",
        \"guz\": \"gusí\",
        \"gv\": \"manx\",
        \"gwi\": \"gwich’in\",
        \"ha\": \"haussa\",
        \"hai\": \"haida\",
        \"hak\": \"xinès hakka\",
        \"haw\": \"hawaià\",
        \"he\": \"hebreu\",
        \"hi\": \"hindi\",
        \"hif\": \"hindi de Fiji\",
        \"hil\": \"híligaynon\",
        \"hit\": \"hitita\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"croat\",
        \"hsb\": \"alt sòrab\",
        \"hsn\": \"xinès xiang\",
        \"ht\": \"crioll d’Haití\",
        \"hu\": \"hongarès\",
        \"hup\": \"hupa\",
        \"hy\": \"armeni\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonesi\",
        \"ie\": \"interlingue\",
        \"ig\": \"igbo\",
        \"ii\": \"yi sichuan\",
        \"ik\": \"inupiak\",
        \"ilo\": \"ilocano\",
        \"inh\": \"ingúix\",
        \"io\": \"ido\",
        \"is\": \"islandès\",
        \"it\": \"italià\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japonès\",
        \"jam\": \"crioll anglès de Jamaica\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judeopersa\",
        \"jrb\": \"judeoàrab\",
        \"jv\": \"javanès\",
        \"ka\": \"georgià\",
        \"kaa\": \"karakalpak\",
        \"kab\": \"cabilenc\",
        \"kac\": \"katxin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardí\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"crioll capverdià\",
        \"ken\": \"kenyang\",
        \"kfo\": \"koro\",
        \"kg\": \"kongo\",
        \"kgp\": \"kaingà\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanès\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"kikuiu\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kazakh\",
        \"kkj\": \"kako\",
        \"kl\": \"grenlandès\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"kannada\",
        \"ko\": \"coreà\",
        \"koi\": \"komi-permiac\",
        \"kok\": \"concani\",
        \"kos\": \"kosraeà\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karatxai-balkar\",
        \"kri\": \"krio\",
        \"krl\": \"carelià\",
        \"kru\": \"kurukh\",
        \"ks\": \"caixmiri\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kölsch\",
        \"ku\": \"kurd\",
        \"kum\": \"kúmik\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"còrnic\",
        \"ky\": \"kirguís\",
        \"la\": \"llatí\",
        \"lad\": \"judeocastellà\",
        \"lag\": \"langi\",
        \"lah\": \"panjabi occidental\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburguès\",
        \"lez\": \"lesguià\",
        \"lg\": \"ganda\",
        \"li\": \"limburguès\",
        \"lij\": \"lígur\",
        \"lkt\": \"lakota\",
        \"lmo\": \"llombard\",
        \"ln\": \"lingala\",
        \"lo\": \"laosià\",
        \"lol\": \"mongo\",
        \"lou\": \"crioll francès de Louisiana\",
        \"loz\": \"lozi\",
        \"lrc\": \"luri septentrional\",
        \"lt\": \"lituà\",
        \"lu\": \"luba katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luisenyo\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"mizo\",
        \"luy\": \"luyia\",
        \"lv\": \"letó\",
        \"lzh\": \"xinès clàssic\",
        \"lzz\": \"laz\",
        \"mad\": \"madurès\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makassar\",
        \"man\": \"mandinga\",
        \"mas\": \"massai\",
        \"mde\": \"maba\",
        \"mdf\": \"mordovià moksa\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauricià\",
        \"mg\": \"malgaix\",
        \"mga\": \"gaèlic irlandès mitjà\",
        \"mgh\": \"makhuwa-metto\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshallès\",
        \"mi\": \"maori\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"macedoni\",
        \"ml\": \"malaiàlam\",
        \"mn\": \"mongol\",
        \"mnc\": \"manxú\",
        \"mni\": \"manipurí\",
        \"moh\": \"mohawk\",
        \"mos\": \"moore\",
        \"mr\": \"marathi\",
        \"mrj\": \"mari occidental\",
        \"ms\": \"malai\",
        \"mt\": \"maltès\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandès\",
        \"mwr\": \"marwari\",
        \"my\": \"birmà\",
        \"mye\": \"myene\",
        \"myv\": \"mordovià erza\",
        \"mzn\": \"mazanderani\",
        \"na\": \"nauruà\",
        \"nan\": \"xinès min del sud\",
        \"nap\": \"napolità\",
        \"naq\": \"nama\",
        \"nb\": \"noruec bokmål\",
        \"nd\": \"ndebele septentrional\",
        \"nds\": \"baix alemany\",
        \"nds_NL\": \"baix saxó\",
        \"ne\": \"nepalès\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niueà\",
        \"nl\": \"neerlandès\",
        \"nl_BE\": \"flamenc\",
        \"nmg\": \"bissio\",
        \"nn\": \"noruec nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"noruec\",
        \"nog\": \"nogai\",
        \"non\": \"nòrdic antic\",
        \"nov\": \"novial\",
        \"nqo\": \"n’Ko\",
        \"nr\": \"ndebele meridional\",
        \"nso\": \"sotho septentrional\",
        \"nus\": \"nuer\",
        \"nv\": \"navaho\",
        \"nwc\": \"newari clàssic\",
        \"ny\": \"nyanja\",
        \"nym\": \"nyamwesi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzema\",
        \"oc\": \"occità\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"oriya\",
        \"os\": \"osseta\",
        \"osa\": \"osage\",
        \"ota\": \"turc otomà\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiament\",
        \"pau\": \"palauà\",
        \"pcd\": \"picard\",
        \"pcm\": \"pidgin de Nigèria\",
        \"pdc\": \"alemany pennsilvanià\",
        \"peo\": \"persa antic\",
        \"pfl\": \"alemany palatí\",
        \"phn\": \"fenici\",
        \"pi\": \"pali\",
        \"pl\": \"polonès\",
        \"pms\": \"piemontès\",
        \"pnt\": \"pòntic\",
        \"pon\": \"ponapeà\",
        \"prg\": \"prussià\",
        \"pro\": \"provençal antic\",
        \"ps\": \"paixtu\",
        \"pt\": \"portuguès\",
        \"pt_BR\": \"portuguès del Brasil\",
        \"pt_PT\": \"portuguès de Portugal\",
        \"qu\": \"quítxua\",
        \"quc\": \"k’iche’\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongà\",
        \"rgn\": \"romanyès\",
        \"rm\": \"retoromànic\",
        \"rn\": \"rundi\",
        \"ro\": \"romanès\",
        \"ro_MD\": \"moldau\",
        \"rof\": \"rombo\",
        \"rom\": \"romaní\",
        \"root\": \"arrel\",
        \"ru\": \"rus\",
        \"rup\": \"aromanès\",
        \"rw\": \"ruandès\",
        \"rwk\": \"rwo\",
        \"sa\": \"sànscrit\",
        \"sad\": \"sandawe\",
        \"sah\": \"iacut\",
        \"sam\": \"arameu samarità\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sard\",
        \"scn\": \"sicilià\",
        \"sco\": \"escocès\",
        \"sd\": \"sindi\",
        \"sdc\": \"sasserès\",
        \"sdh\": \"kurd meridional\",
        \"se\": \"sami septentrional\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkup\",
        \"ses\": \"songhai oriental\",
        \"sg\": \"sango\",
        \"sga\": \"irlandès antic\",
        \"sh\": \"serbocroat\",
        \"shi\": \"taixelhit\",
        \"shn\": \"xan\",
        \"shu\": \"àrab txadià\",
        \"si\": \"singalès\",
        \"sid\": \"sidamo\",
        \"sk\": \"eslovac\",
        \"sl\": \"eslovè\",
        \"sm\": \"samoà\",
        \"sma\": \"sami meridional\",
        \"smj\": \"sami lule\",
        \"smn\": \"sami d’Inari\",
        \"sms\": \"sami skolt\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somali\",
        \"sog\": \"sogdià\",
        \"sq\": \"albanès\",
        \"sr\": \"serbi\",
        \"srn\": \"sranan\",
        \"srr\": \"serer\",
        \"ss\": \"swazi\",
        \"ssy\": \"saho\",
        \"st\": \"sotho meridional\",
        \"su\": \"sondanès\",
        \"suk\": \"sukuma\",
        \"sus\": \"susú\",
        \"sux\": \"sumeri\",
        \"sv\": \"suec\",
        \"sw\": \"suahili\",
        \"sw_CD\": \"suahili del Congo\",
        \"swb\": \"comorià\",
        \"syc\": \"siríac clàssic\",
        \"syr\": \"siríac\",
        \"szl\": \"silesià\",
        \"ta\": \"tàmil\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"terena\",
        \"tet\": \"tètum\",
        \"tg\": \"tadjik\",
        \"th\": \"tai\",
        \"ti\": \"tigrinya\",
        \"tig\": \"tigre\",
        \"tiv\": \"tiv\",
        \"tk\": \"turcman\",
        \"tkl\": \"tokelauès\",
        \"tkr\": \"tsakhur\",
        \"tl\": \"tagal\",
        \"tlh\": \"klingonià\",
        \"tli\": \"tlingit\",
        \"tly\": \"talix\",
        \"tmh\": \"amazic\",
        \"tn\": \"setswana\",
        \"to\": \"tongalès\",
        \"tog\": \"tonga\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turc\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshià\",
        \"tt\": \"tàtar\",
        \"ttt\": \"tat meridional\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluà\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahitià\",
        \"tyv\": \"tuvinià\",
        \"tzm\": \"amazic del Marroc central\",
        \"udm\": \"udmurt\",
        \"ug\": \"uigur\",
        \"uga\": \"ugarític\",
        \"uk\": \"ucraïnès\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdú\",
        \"uz\": \"uzbek\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vec\": \"vènet\",
        \"vep\": \"vepse\",
        \"vi\": \"vietnamita\",
        \"vls\": \"flamenc occidental\",
        \"vo\": \"volapük\",
        \"vot\": \"vòtic\",
        \"vun\": \"vunjo\",
        \"wa\": \"való\",
        \"wae\": \"walser\",
        \"wal\": \"wolaita\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"wòlof\",
        \"wuu\": \"xinès wu\",
        \"xal\": \"calmuc\",
        \"xh\": \"xosa\",
        \"xmf\": \"mingrelià\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"yapeà\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"ídix\",
        \"yo\": \"ioruba\",
        \"yue\": \"cantonès\",
        \"za\": \"zhuang\",
        \"zap\": \"zapoteca\",
        \"zbl\": \"símbols Bliss\",
        \"zea\": \"zelandès\",
        \"zen\": \"zenaga\",
        \"zgh\": \"amazic estàndard marroquí\",
        \"zh\": \"xinès\",
        \"zh_Hans\": \"xinès simplificat\",
        \"zh_Hant\": \"xinès tradicional\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zaza\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ca.json";
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
        \"aa\": \"àfar\",
        \"ab\": \"abkhaz\",
        \"ace\": \"atjeh\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigué\",
        \"ae\": \"avèstic\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"àkan\",
        \"akk\": \"accadi\",
        \"akz\": \"alabama\",
        \"ale\": \"aleuta\",
        \"aln\": \"albanès geg\",
        \"alt\": \"altaic meridional\",
        \"am\": \"amhàric\",
        \"an\": \"aragonès\",
        \"ang\": \"anglès antic\",
        \"anp\": \"angika\",
        \"ar\": \"àrab\",
        \"ar_001\": \"àrab estàndard modern\",
        \"arc\": \"arameu\",
        \"arn\": \"mapudungu\",
        \"aro\": \"araona\",
        \"arp\": \"arapaho\",
        \"ars\": \"àrab najdi\",
        \"arw\": \"arauac\",
        \"arz\": \"àrab egipci\",
        \"as\": \"assamès\",
        \"asa\": \"pare\",
        \"ase\": \"llengua de signes americana\",
        \"ast\": \"asturià\",
        \"av\": \"àvar\",
        \"awa\": \"awadhi\",
        \"ay\": \"aimara\",
        \"az\": \"azerbaidjanès\",
        \"ba\": \"baixkir\",
        \"bal\": \"balutxi\",
        \"ban\": \"balinès\",
        \"bar\": \"bavarès\",
        \"bas\": \"basa\",
        \"bax\": \"bamum\",
        \"bbj\": \"ghomala\",
        \"be\": \"belarús\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bfq\": \"badaga\",
        \"bg\": \"búlgar\",
        \"bgn\": \"balutxi occidental\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bicol\",
        \"bin\": \"edo\",
        \"bkm\": \"kom\",
        \"bla\": \"blackfoot\",
        \"bm\": \"bambara\",
        \"bn\": \"bengalí\",
        \"bo\": \"tibetà\",
        \"br\": \"bretó\",
        \"bra\": \"braj\",
        \"brh\": \"brahui\",
        \"brx\": \"bodo\",
        \"bs\": \"bosnià\",
        \"bss\": \"akoose\",
        \"bua\": \"buriat\",
        \"bug\": \"bugui\",
        \"bum\": \"bulu\",
        \"byn\": \"bilin\",
        \"byv\": \"medumba\",
        \"ca\": \"català\",
        \"cad\": \"caddo\",
        \"car\": \"carib\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"txetxè\",
        \"ceb\": \"cebuà\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"txibtxa\",
        \"chg\": \"txagatai\",
        \"chk\": \"chuuk\",
        \"chm\": \"mari\",
        \"chn\": \"pidgin chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"cherokee\",
        \"chy\": \"xeiene\",
        \"ckb\": \"kurd central\",
        \"co\": \"cors\",
        \"cop\": \"copte\",
        \"cr\": \"cree\",
        \"crh\": \"tàtar de Crimea\",
        \"crs\": \"francès crioll de les Seychelles\",
        \"cs\": \"txec\",
        \"csb\": \"caixubi\",
        \"cu\": \"eslau eclesiàstic\",
        \"cv\": \"txuvaix\",
        \"cy\": \"gal·lès\",
        \"da\": \"danès\",
        \"dak\": \"dakota\",
        \"dar\": \"darguà\",
        \"dav\": \"taita\",
        \"de\": \"alemany\",
        \"de_AT\": \"alemany austríac\",
        \"de_CH\": \"alemany estàndard suís\",
        \"del\": \"delaware\",
        \"den\": \"slavi\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"baix sòrab\",
        \"dua\": \"douala\",
        \"dum\": \"neerlandès mitjà\",
        \"dv\": \"divehi\",
        \"dyo\": \"diola\",
        \"dyu\": \"jula\",
        \"dz\": \"dzongka\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egl\": \"emilià\",
        \"egy\": \"egipci antic\",
        \"eka\": \"ekajuk\",
        \"el\": \"grec\",
        \"elx\": \"elamita\",
        \"en\": \"anglès\",
        \"en_AU\": \"anglès australià\",
        \"en_CA\": \"anglès canadenc\",
        \"en_GB\": \"anglès britànic\",
        \"en_US\": \"anglès americà\",
        \"enm\": \"anglès mitjà\",
        \"eo\": \"esperanto\",
        \"es\": \"espanyol\",
        \"es_419\": \"espanyol hispanoamericà\",
        \"es_ES\": \"espanyol europeu\",
        \"es_MX\": \"espanyol de Mèxic\",
        \"et\": \"estonià\",
        \"eu\": \"basc\",
        \"ewo\": \"ewondo\",
        \"ext\": \"extremeny\",
        \"fa\": \"persa\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"ful\",
        \"fi\": \"finès\",
        \"fil\": \"filipí\",
        \"fj\": \"fijià\",
        \"fo\": \"feroès\",
        \"fon\": \"fon\",
        \"fr\": \"francès\",
        \"fr_CA\": \"francès canadenc\",
        \"fr_CH\": \"francès suís\",
        \"frc\": \"francès cajun\",
        \"frm\": \"francès mitjà\",
        \"fro\": \"francès antic\",
        \"frr\": \"frisó septentrional\",
        \"frs\": \"frisó oriental\",
        \"fur\": \"friülà\",
        \"fy\": \"frisó occidental\",
        \"ga\": \"irlandès\",
        \"gaa\": \"ga\",
        \"gag\": \"gagaús\",
        \"gan\": \"xinès gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gd\": \"gaèlic escocès\",
        \"gez\": \"gueez\",
        \"gil\": \"gilbertès\",
        \"gl\": \"gallec\",
        \"glk\": \"gilaki\",
        \"gmh\": \"alt alemany mitjà\",
        \"gn\": \"guaraní\",
        \"goh\": \"alt alemany antic\",
        \"gom\": \"concani de Goa\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gòtic\",
        \"grb\": \"grebo\",
        \"grc\": \"grec antic\",
        \"gsw\": \"alemany suís\",
        \"gu\": \"gujarati\",
        \"guc\": \"wayú\",
        \"guz\": \"gusí\",
        \"gv\": \"manx\",
        \"gwi\": \"gwich’in\",
        \"ha\": \"haussa\",
        \"hai\": \"haida\",
        \"hak\": \"xinès hakka\",
        \"haw\": \"hawaià\",
        \"he\": \"hebreu\",
        \"hi\": \"hindi\",
        \"hif\": \"hindi de Fiji\",
        \"hil\": \"híligaynon\",
        \"hit\": \"hitita\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"croat\",
        \"hsb\": \"alt sòrab\",
        \"hsn\": \"xinès xiang\",
        \"ht\": \"crioll d’Haití\",
        \"hu\": \"hongarès\",
        \"hup\": \"hupa\",
        \"hy\": \"armeni\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonesi\",
        \"ie\": \"interlingue\",
        \"ig\": \"igbo\",
        \"ii\": \"yi sichuan\",
        \"ik\": \"inupiak\",
        \"ilo\": \"ilocano\",
        \"inh\": \"ingúix\",
        \"io\": \"ido\",
        \"is\": \"islandès\",
        \"it\": \"italià\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japonès\",
        \"jam\": \"crioll anglès de Jamaica\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judeopersa\",
        \"jrb\": \"judeoàrab\",
        \"jv\": \"javanès\",
        \"ka\": \"georgià\",
        \"kaa\": \"karakalpak\",
        \"kab\": \"cabilenc\",
        \"kac\": \"katxin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardí\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"crioll capverdià\",
        \"ken\": \"kenyang\",
        \"kfo\": \"koro\",
        \"kg\": \"kongo\",
        \"kgp\": \"kaingà\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanès\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"kikuiu\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kazakh\",
        \"kkj\": \"kako\",
        \"kl\": \"grenlandès\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"kannada\",
        \"ko\": \"coreà\",
        \"koi\": \"komi-permiac\",
        \"kok\": \"concani\",
        \"kos\": \"kosraeà\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karatxai-balkar\",
        \"kri\": \"krio\",
        \"krl\": \"carelià\",
        \"kru\": \"kurukh\",
        \"ks\": \"caixmiri\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kölsch\",
        \"ku\": \"kurd\",
        \"kum\": \"kúmik\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"còrnic\",
        \"ky\": \"kirguís\",
        \"la\": \"llatí\",
        \"lad\": \"judeocastellà\",
        \"lag\": \"langi\",
        \"lah\": \"panjabi occidental\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburguès\",
        \"lez\": \"lesguià\",
        \"lg\": \"ganda\",
        \"li\": \"limburguès\",
        \"lij\": \"lígur\",
        \"lkt\": \"lakota\",
        \"lmo\": \"llombard\",
        \"ln\": \"lingala\",
        \"lo\": \"laosià\",
        \"lol\": \"mongo\",
        \"lou\": \"crioll francès de Louisiana\",
        \"loz\": \"lozi\",
        \"lrc\": \"luri septentrional\",
        \"lt\": \"lituà\",
        \"lu\": \"luba katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luisenyo\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"mizo\",
        \"luy\": \"luyia\",
        \"lv\": \"letó\",
        \"lzh\": \"xinès clàssic\",
        \"lzz\": \"laz\",
        \"mad\": \"madurès\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makassar\",
        \"man\": \"mandinga\",
        \"mas\": \"massai\",
        \"mde\": \"maba\",
        \"mdf\": \"mordovià moksa\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauricià\",
        \"mg\": \"malgaix\",
        \"mga\": \"gaèlic irlandès mitjà\",
        \"mgh\": \"makhuwa-metto\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshallès\",
        \"mi\": \"maori\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"macedoni\",
        \"ml\": \"malaiàlam\",
        \"mn\": \"mongol\",
        \"mnc\": \"manxú\",
        \"mni\": \"manipurí\",
        \"moh\": \"mohawk\",
        \"mos\": \"moore\",
        \"mr\": \"marathi\",
        \"mrj\": \"mari occidental\",
        \"ms\": \"malai\",
        \"mt\": \"maltès\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandès\",
        \"mwr\": \"marwari\",
        \"my\": \"birmà\",
        \"mye\": \"myene\",
        \"myv\": \"mordovià erza\",
        \"mzn\": \"mazanderani\",
        \"na\": \"nauruà\",
        \"nan\": \"xinès min del sud\",
        \"nap\": \"napolità\",
        \"naq\": \"nama\",
        \"nb\": \"noruec bokmål\",
        \"nd\": \"ndebele septentrional\",
        \"nds\": \"baix alemany\",
        \"nds_NL\": \"baix saxó\",
        \"ne\": \"nepalès\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niueà\",
        \"nl\": \"neerlandès\",
        \"nl_BE\": \"flamenc\",
        \"nmg\": \"bissio\",
        \"nn\": \"noruec nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"noruec\",
        \"nog\": \"nogai\",
        \"non\": \"nòrdic antic\",
        \"nov\": \"novial\",
        \"nqo\": \"n’Ko\",
        \"nr\": \"ndebele meridional\",
        \"nso\": \"sotho septentrional\",
        \"nus\": \"nuer\",
        \"nv\": \"navaho\",
        \"nwc\": \"newari clàssic\",
        \"ny\": \"nyanja\",
        \"nym\": \"nyamwesi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzema\",
        \"oc\": \"occità\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"oriya\",
        \"os\": \"osseta\",
        \"osa\": \"osage\",
        \"ota\": \"turc otomà\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiament\",
        \"pau\": \"palauà\",
        \"pcd\": \"picard\",
        \"pcm\": \"pidgin de Nigèria\",
        \"pdc\": \"alemany pennsilvanià\",
        \"peo\": \"persa antic\",
        \"pfl\": \"alemany palatí\",
        \"phn\": \"fenici\",
        \"pi\": \"pali\",
        \"pl\": \"polonès\",
        \"pms\": \"piemontès\",
        \"pnt\": \"pòntic\",
        \"pon\": \"ponapeà\",
        \"prg\": \"prussià\",
        \"pro\": \"provençal antic\",
        \"ps\": \"paixtu\",
        \"pt\": \"portuguès\",
        \"pt_BR\": \"portuguès del Brasil\",
        \"pt_PT\": \"portuguès de Portugal\",
        \"qu\": \"quítxua\",
        \"quc\": \"k’iche’\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongà\",
        \"rgn\": \"romanyès\",
        \"rm\": \"retoromànic\",
        \"rn\": \"rundi\",
        \"ro\": \"romanès\",
        \"ro_MD\": \"moldau\",
        \"rof\": \"rombo\",
        \"rom\": \"romaní\",
        \"root\": \"arrel\",
        \"ru\": \"rus\",
        \"rup\": \"aromanès\",
        \"rw\": \"ruandès\",
        \"rwk\": \"rwo\",
        \"sa\": \"sànscrit\",
        \"sad\": \"sandawe\",
        \"sah\": \"iacut\",
        \"sam\": \"arameu samarità\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sard\",
        \"scn\": \"sicilià\",
        \"sco\": \"escocès\",
        \"sd\": \"sindi\",
        \"sdc\": \"sasserès\",
        \"sdh\": \"kurd meridional\",
        \"se\": \"sami septentrional\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkup\",
        \"ses\": \"songhai oriental\",
        \"sg\": \"sango\",
        \"sga\": \"irlandès antic\",
        \"sh\": \"serbocroat\",
        \"shi\": \"taixelhit\",
        \"shn\": \"xan\",
        \"shu\": \"àrab txadià\",
        \"si\": \"singalès\",
        \"sid\": \"sidamo\",
        \"sk\": \"eslovac\",
        \"sl\": \"eslovè\",
        \"sm\": \"samoà\",
        \"sma\": \"sami meridional\",
        \"smj\": \"sami lule\",
        \"smn\": \"sami d’Inari\",
        \"sms\": \"sami skolt\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somali\",
        \"sog\": \"sogdià\",
        \"sq\": \"albanès\",
        \"sr\": \"serbi\",
        \"srn\": \"sranan\",
        \"srr\": \"serer\",
        \"ss\": \"swazi\",
        \"ssy\": \"saho\",
        \"st\": \"sotho meridional\",
        \"su\": \"sondanès\",
        \"suk\": \"sukuma\",
        \"sus\": \"susú\",
        \"sux\": \"sumeri\",
        \"sv\": \"suec\",
        \"sw\": \"suahili\",
        \"sw_CD\": \"suahili del Congo\",
        \"swb\": \"comorià\",
        \"syc\": \"siríac clàssic\",
        \"syr\": \"siríac\",
        \"szl\": \"silesià\",
        \"ta\": \"tàmil\",
        \"te\": \"telugu\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"terena\",
        \"tet\": \"tètum\",
        \"tg\": \"tadjik\",
        \"th\": \"tai\",
        \"ti\": \"tigrinya\",
        \"tig\": \"tigre\",
        \"tiv\": \"tiv\",
        \"tk\": \"turcman\",
        \"tkl\": \"tokelauès\",
        \"tkr\": \"tsakhur\",
        \"tl\": \"tagal\",
        \"tlh\": \"klingonià\",
        \"tli\": \"tlingit\",
        \"tly\": \"talix\",
        \"tmh\": \"amazic\",
        \"tn\": \"setswana\",
        \"to\": \"tongalès\",
        \"tog\": \"tonga\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turc\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshià\",
        \"tt\": \"tàtar\",
        \"ttt\": \"tat meridional\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluà\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahitià\",
        \"tyv\": \"tuvinià\",
        \"tzm\": \"amazic del Marroc central\",
        \"udm\": \"udmurt\",
        \"ug\": \"uigur\",
        \"uga\": \"ugarític\",
        \"uk\": \"ucraïnès\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdú\",
        \"uz\": \"uzbek\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vec\": \"vènet\",
        \"vep\": \"vepse\",
        \"vi\": \"vietnamita\",
        \"vls\": \"flamenc occidental\",
        \"vo\": \"volapük\",
        \"vot\": \"vòtic\",
        \"vun\": \"vunjo\",
        \"wa\": \"való\",
        \"wae\": \"walser\",
        \"wal\": \"wolaita\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"wòlof\",
        \"wuu\": \"xinès wu\",
        \"xal\": \"calmuc\",
        \"xh\": \"xosa\",
        \"xmf\": \"mingrelià\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"yapeà\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"ídix\",
        \"yo\": \"ioruba\",
        \"yue\": \"cantonès\",
        \"za\": \"zhuang\",
        \"zap\": \"zapoteca\",
        \"zbl\": \"símbols Bliss\",
        \"zea\": \"zelandès\",
        \"zen\": \"zenaga\",
        \"zgh\": \"amazic estàndard marroquí\",
        \"zh\": \"xinès\",
        \"zh_Hans\": \"xinès simplificat\",
        \"zh_Hant\": \"xinès tradicional\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zaza\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ca.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ca.json");
    }
}
