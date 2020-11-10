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

/* vendor/symfony/intl/Resources/data/languages/pt.json */
class __TwigTemplate_c61322c5cd205918e7a2b9d524003a71eff1c51cd65e0202cfb25be390dc9c55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/pt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/pt.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"afar\",
        \"ab\": \"abcázio\",
        \"ace\": \"achém\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigue\",
        \"ae\": \"avéstico\",
        \"af\": \"africâner\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"akan\",
        \"akk\": \"acadiano\",
        \"ale\": \"aleúte\",
        \"alt\": \"altai meridional\",
        \"am\": \"amárico\",
        \"an\": \"aragonês\",
        \"ang\": \"inglês arcaico\",
        \"anp\": \"angika\",
        \"ar\": \"árabe\",
        \"ar_001\": \"árabe moderno\",
        \"arc\": \"aramaico\",
        \"arn\": \"mapudungun\",
        \"arp\": \"arapaho\",
        \"ars\": \"árabe négede\",
        \"arw\": \"arauaqui\",
        \"as\": \"assamês\",
        \"asa\": \"asu\",
        \"ast\": \"asturiano\",
        \"av\": \"avárico\",
        \"awa\": \"awadhi\",
        \"ay\": \"aimará\",
        \"az\": \"azerbaijano\",
        \"az_Arab\": \"azeri sul\",
        \"ba\": \"bashkir\",
        \"bal\": \"balúchi\",
        \"ban\": \"balinês\",
        \"bas\": \"basa\",
        \"bax\": \"bamum\",
        \"bbj\": \"ghomala’\",
        \"be\": \"bielorrusso\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bg\": \"búlgaro\",
        \"bgn\": \"balúchi ocidental\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislamá\",
        \"bik\": \"bikol\",
        \"bin\": \"bini\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bengali\",
        \"bo\": \"tibetano\",
        \"br\": \"bretão\",
        \"bra\": \"braj\",
        \"brx\": \"bodo\",
        \"bs\": \"bósnio\",
        \"bss\": \"akoose\",
        \"bua\": \"buriato\",
        \"bug\": \"buginês\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"catalão\",
        \"cad\": \"caddo\",
        \"car\": \"caribe\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"checheno\",
        \"ceb\": \"cebuano\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"chibcha\",
        \"chg\": \"chagatai\",
        \"chk\": \"chuukese\",
        \"chm\": \"mari\",
        \"chn\": \"jargão Chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"cheroqui\",
        \"chy\": \"cheiene\",
        \"ckb\": \"curdo central\",
        \"co\": \"corso\",
        \"cop\": \"copta\",
        \"cr\": \"cree\",
        \"crh\": \"turco da Crimeia\",
        \"crs\": \"crioulo francês seichelense\",
        \"cs\": \"tcheco\",
        \"csb\": \"kashubian\",
        \"cu\": \"eslavo eclesiástico\",
        \"cv\": \"tchuvache\",
        \"cy\": \"galês\",
        \"da\": \"dinamarquês\",
        \"dak\": \"dacota\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"alemão\",
        \"de_CH\": \"alto alemão (Suíça)\",
        \"del\": \"delaware\",
        \"den\": \"slave\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"baixo sorábio\",
        \"dua\": \"duala\",
        \"dum\": \"holandês médio\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"diúla\",
        \"dz\": \"dzonga\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"eve\",
        \"efi\": \"efique\",
        \"egy\": \"egípcio arcaico\",
        \"eka\": \"ekajuk\",
        \"el\": \"grego\",
        \"elx\": \"elamite\",
        \"en\": \"inglês\",
        \"enm\": \"inglês médio\",
        \"eo\": \"esperanto\",
        \"es\": \"espanhol\",
        \"et\": \"estoniano\",
        \"eu\": \"basco\",
        \"ewo\": \"ewondo\",
        \"fa\": \"persa\",
        \"fan\": \"fangue\",
        \"fat\": \"fanti\",
        \"ff\": \"fula\",
        \"fi\": \"finlandês\",
        \"fil\": \"filipino\",
        \"fj\": \"fijiano\",
        \"fo\": \"feroês\",
        \"fon\": \"fom\",
        \"fr\": \"francês\",
        \"frc\": \"francês cajun\",
        \"frm\": \"francês médio\",
        \"fro\": \"francês arcaico\",
        \"frr\": \"frísio setentrional\",
        \"frs\": \"frisão oriental\",
        \"fur\": \"friulano\",
        \"fy\": \"frísio ocidental\",
        \"ga\": \"irlandês\",
        \"gaa\": \"ga\",
        \"gag\": \"gagauz\",
        \"gan\": \"gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaia\",
        \"gd\": \"gaélico escocês\",
        \"gez\": \"geez\",
        \"gil\": \"gilbertês\",
        \"gl\": \"galego\",
        \"gmh\": \"alto alemão médio\",
        \"gn\": \"guarani\",
        \"goh\": \"alemão arcaico alto\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gótico\",
        \"grb\": \"grebo\",
        \"grc\": \"grego arcaico\",
        \"gsw\": \"alemão (Suíça)\",
        \"gu\": \"guzerate\",
        \"guz\": \"gusii\",
        \"gv\": \"manx\",
        \"gwi\": \"gwichʼin\",
        \"ha\": \"hauçá\",
        \"hai\": \"haida\",
        \"hak\": \"hacá\",
        \"haw\": \"havaiano\",
        \"he\": \"hebraico\",
        \"hi\": \"híndi\",
        \"hil\": \"hiligaynon\",
        \"hit\": \"hitita\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"croata\",
        \"hsb\": \"alto sorábio\",
        \"hsn\": \"xiang\",
        \"ht\": \"haitiano\",
        \"hu\": \"húngaro\",
        \"hup\": \"hupa\",
        \"hy\": \"armênio\",
        \"hz\": \"herero\",
        \"ia\": \"interlíngua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonésio\",
        \"ie\": \"interlingue\",
        \"ig\": \"igbo\",
        \"ii\": \"sichuan yi\",
        \"ik\": \"inupiaque\",
        \"ilo\": \"ilocano\",
        \"inh\": \"inguche\",
        \"io\": \"ido\",
        \"is\": \"islandês\",
        \"it\": \"italiano\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japonês\",
        \"jbo\": \"lojban\",
        \"jgo\": \"nguemba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judaico-persa\",
        \"jrb\": \"judaico-arábico\",
        \"jv\": \"javanês\",
        \"ka\": \"georgiano\",
        \"kaa\": \"kara-kalpak\",
        \"kab\": \"kabyle\",
        \"kac\": \"kachin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardiano\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"maconde\",
        \"kea\": \"crioulo cabo-verdiano\",
        \"kfo\": \"koro\",
        \"kg\": \"congolês\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanês\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"quicuio\",
        \"kj\": \"cuanhama\",
        \"kk\": \"cazaque\",
        \"kkj\": \"kako\",
        \"kl\": \"groenlandês\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"quimbundo\",
        \"kn\": \"canarim\",
        \"ko\": \"coreano\",
        \"koi\": \"komi-permyak\",
        \"kok\": \"concani\",
        \"kos\": \"kosraean\",
        \"kpe\": \"kpelle\",
        \"kr\": \"canúri\",
        \"krc\": \"karachay-balkar\",
        \"krl\": \"carélio\",
        \"kru\": \"kurukh\",
        \"ks\": \"caxemira\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kölsch\",
        \"ku\": \"curdo\",
        \"kum\": \"kumyk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"córnico\",
        \"ky\": \"quirguiz\",
        \"la\": \"latim\",
        \"lad\": \"ladino\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburguês\",
        \"lez\": \"lezgui\",
        \"lg\": \"luganda\",
        \"li\": \"limburguês\",
        \"lkt\": \"lacota\",
        \"ln\": \"lingala\",
        \"lo\": \"laosiano\",
        \"lol\": \"mongo\",
        \"lou\": \"crioulo da Louisiana\",
        \"loz\": \"lozi\",
        \"lrc\": \"luri setentrional\",
        \"lt\": \"lituano\",
        \"lu\": \"luba-catanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"lushai\",
        \"luy\": \"luyia\",
        \"lv\": \"letão\",
        \"mad\": \"madurês\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandinga\",
        \"mas\": \"massai\",
        \"mde\": \"maba\",
        \"mdf\": \"mocsa\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"morisyen\",
        \"mg\": \"malgaxe\",
        \"mga\": \"irlandês médio\",
        \"mgh\": \"macua\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshalês\",
        \"mi\": \"maori\",
        \"mic\": \"miquemaque\",
        \"min\": \"minangkabau\",
        \"mk\": \"macedônio\",
        \"ml\": \"malaiala\",
        \"mn\": \"mongol\",
        \"mnc\": \"manchu\",
        \"mni\": \"manipuri\",
        \"moh\": \"moicano\",
        \"mos\": \"mossi\",
        \"mr\": \"marati\",
        \"ms\": \"malaio\",
        \"mt\": \"maltês\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandês\",
        \"mwr\": \"marwari\",
        \"my\": \"birmanês\",
        \"mye\": \"myene\",
        \"myv\": \"erzya\",
        \"mzn\": \"mazandarani\",
        \"na\": \"nauruano\",
        \"nan\": \"min nan\",
        \"nap\": \"napolitano\",
        \"naq\": \"nama\",
        \"nb\": \"bokmål norueguês\",
        \"nd\": \"ndebele do norte\",
        \"nds\": \"baixo alemão\",
        \"nds_NL\": \"baixo saxão\",
        \"ne\": \"nepalês\",
        \"new\": \"newari\",
        \"ng\": \"dongo\",
        \"nia\": \"nias\",
        \"niu\": \"niueano\",
        \"nl\": \"holandês\",
        \"nl_BE\": \"flamengo\",
        \"nmg\": \"kwasio\",
        \"nn\": \"nynorsk norueguês\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norueguês\",
        \"nog\": \"nogai\",
        \"non\": \"nórdico arcaico\",
        \"nqo\": \"n’ko\",
        \"nr\": \"ndebele do sul\",
        \"nso\": \"soto setentrional\",
        \"nus\": \"nuer\",
        \"nv\": \"navajo\",
        \"nwc\": \"newari clássico\",
        \"ny\": \"nianja\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"occitânico\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"oriá\",
        \"os\": \"osseto\",
        \"osa\": \"osage\",
        \"ota\": \"turco otomano\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinã\",
        \"pal\": \"pálavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauano\",
        \"pcm\": \"pidgin nigeriano\",
        \"peo\": \"persa arcaico\",
        \"phn\": \"fenício\",
        \"pi\": \"páli\",
        \"pl\": \"polonês\",
        \"pon\": \"pohnpeiano\",
        \"prg\": \"prussiano\",
        \"pro\": \"provençal arcaico\",
        \"ps\": \"pashto\",
        \"pt\": \"português\",
        \"qu\": \"quíchua\",
        \"quc\": \"quiché\",
        \"raj\": \"rajastani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongano\",
        \"rm\": \"romanche\",
        \"rn\": \"rundi\",
        \"ro\": \"romeno\",
        \"ro_MD\": \"moldávio\",
        \"rof\": \"rombo\",
        \"rom\": \"romani\",
        \"root\": \"raiz\",
        \"ru\": \"russo\",
        \"rup\": \"aromeno\",
        \"rw\": \"quiniaruanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sânscrito\",
        \"sad\": \"sandawe\",
        \"sah\": \"sakha\",
        \"sam\": \"aramaico samaritano\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardo\",
        \"scn\": \"siciliano\",
        \"sco\": \"scots\",
        \"sd\": \"sindi\",
        \"sdh\": \"curdo meridional\",
        \"se\": \"sami setentrional\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkup\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"irlandês arcaico\",
        \"sh\": \"servo-croata\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"árabe chadiano\",
        \"si\": \"cingalês\",
        \"sid\": \"sidamo\",
        \"sk\": \"eslovaco\",
        \"sl\": \"esloveno\",
        \"sm\": \"samoano\",
        \"sma\": \"sami meridional\",
        \"smj\": \"sami de Lule\",
        \"smn\": \"sami de Inari\",
        \"sms\": \"sami de Skolt\",
        \"sn\": \"xona\",
        \"snk\": \"soninquê\",
        \"so\": \"somali\",
        \"sog\": \"sogdiano\",
        \"sq\": \"albanês\",
        \"sr\": \"sérvio\",
        \"srn\": \"surinamês\",
        \"srr\": \"serere\",
        \"ss\": \"suázi\",
        \"ssy\": \"saho\",
        \"st\": \"soto do sul\",
        \"su\": \"sundanês\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumério\",
        \"sv\": \"sueco\",
        \"sw\": \"suaíli\",
        \"sw_CD\": \"suaíli do Congo\",
        \"swb\": \"comoriano\",
        \"syc\": \"siríaco clássico\",
        \"syr\": \"siríaco\",
        \"ta\": \"tâmil\",
        \"te\": \"télugo\",
        \"tem\": \"timne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tétum\",
        \"tg\": \"tadjique\",
        \"th\": \"tailandês\",
        \"ti\": \"tigrínia\",
        \"tig\": \"tigré\",
        \"tiv\": \"tiv\",
        \"tk\": \"turcomeno\",
        \"tkl\": \"toquelauano\",
        \"tl\": \"tagalo\",
        \"tlh\": \"klingon\",
        \"tli\": \"tlinguite\",
        \"tmh\": \"tamaxeque\",
        \"tn\": \"tswana\",
        \"to\": \"tonganês\",
        \"tog\": \"tonganês de Nyasa\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turco\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshiano\",
        \"tt\": \"tártaro\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluano\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"taitiano\",
        \"tyv\": \"tuviniano\",
        \"tzm\": \"tamazirte do Atlas Central\",
        \"udm\": \"udmurte\",
        \"ug\": \"uigur\",
        \"uga\": \"ugarítico\",
        \"uk\": \"ucraniano\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdu\",
        \"uz\": \"uzbeque\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vi\": \"vietnamita\",
        \"vo\": \"volapuque\",
        \"vot\": \"vótico\",
        \"vun\": \"vunjo\",
        \"wa\": \"valão\",
        \"wae\": \"walser\",
        \"wal\": \"wolaytta\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"uolofe\",
        \"wuu\": \"wu\",
        \"xal\": \"kalmyk\",
        \"xh\": \"xhosa\",
        \"xog\": \"lusoga\",
        \"yao\": \"yao\",
        \"yap\": \"yapese\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"iídiche\",
        \"yo\": \"iorubá\",
        \"yue\": \"cantonês\",
        \"za\": \"zhuang\",
        \"zap\": \"zapoteco\",
        \"zbl\": \"símbolos blis\",
        \"zen\": \"zenaga\",
        \"zgh\": \"tamazirte marroqino padrão\",
        \"zh\": \"chinês\",
        \"zh_Hans\": \"chinês simplificado\",
        \"zh_Hant\": \"chinês tradicional\",
        \"zu\": \"zulu\",
        \"zun\": \"zunhi\",
        \"zza\": \"zazaki\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/pt.json";
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
        \"ab\": \"abcázio\",
        \"ace\": \"achém\",
        \"ach\": \"acoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigue\",
        \"ae\": \"avéstico\",
        \"af\": \"africâner\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainu\",
        \"ak\": \"akan\",
        \"akk\": \"acadiano\",
        \"ale\": \"aleúte\",
        \"alt\": \"altai meridional\",
        \"am\": \"amárico\",
        \"an\": \"aragonês\",
        \"ang\": \"inglês arcaico\",
        \"anp\": \"angika\",
        \"ar\": \"árabe\",
        \"ar_001\": \"árabe moderno\",
        \"arc\": \"aramaico\",
        \"arn\": \"mapudungun\",
        \"arp\": \"arapaho\",
        \"ars\": \"árabe négede\",
        \"arw\": \"arauaqui\",
        \"as\": \"assamês\",
        \"asa\": \"asu\",
        \"ast\": \"asturiano\",
        \"av\": \"avárico\",
        \"awa\": \"awadhi\",
        \"ay\": \"aimará\",
        \"az\": \"azerbaijano\",
        \"az_Arab\": \"azeri sul\",
        \"ba\": \"bashkir\",
        \"bal\": \"balúchi\",
        \"ban\": \"balinês\",
        \"bas\": \"basa\",
        \"bax\": \"bamum\",
        \"bbj\": \"ghomala’\",
        \"be\": \"bielorrusso\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bg\": \"búlgaro\",
        \"bgn\": \"balúchi ocidental\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislamá\",
        \"bik\": \"bikol\",
        \"bin\": \"bini\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bengali\",
        \"bo\": \"tibetano\",
        \"br\": \"bretão\",
        \"bra\": \"braj\",
        \"brx\": \"bodo\",
        \"bs\": \"bósnio\",
        \"bss\": \"akoose\",
        \"bua\": \"buriato\",
        \"bug\": \"buginês\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"catalão\",
        \"cad\": \"caddo\",
        \"car\": \"caribe\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"checheno\",
        \"ceb\": \"cebuano\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"chibcha\",
        \"chg\": \"chagatai\",
        \"chk\": \"chuukese\",
        \"chm\": \"mari\",
        \"chn\": \"jargão Chinook\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"cheroqui\",
        \"chy\": \"cheiene\",
        \"ckb\": \"curdo central\",
        \"co\": \"corso\",
        \"cop\": \"copta\",
        \"cr\": \"cree\",
        \"crh\": \"turco da Crimeia\",
        \"crs\": \"crioulo francês seichelense\",
        \"cs\": \"tcheco\",
        \"csb\": \"kashubian\",
        \"cu\": \"eslavo eclesiástico\",
        \"cv\": \"tchuvache\",
        \"cy\": \"galês\",
        \"da\": \"dinamarquês\",
        \"dak\": \"dacota\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"alemão\",
        \"de_CH\": \"alto alemão (Suíça)\",
        \"del\": \"delaware\",
        \"den\": \"slave\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"baixo sorábio\",
        \"dua\": \"duala\",
        \"dum\": \"holandês médio\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"diúla\",
        \"dz\": \"dzonga\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"eve\",
        \"efi\": \"efique\",
        \"egy\": \"egípcio arcaico\",
        \"eka\": \"ekajuk\",
        \"el\": \"grego\",
        \"elx\": \"elamite\",
        \"en\": \"inglês\",
        \"enm\": \"inglês médio\",
        \"eo\": \"esperanto\",
        \"es\": \"espanhol\",
        \"et\": \"estoniano\",
        \"eu\": \"basco\",
        \"ewo\": \"ewondo\",
        \"fa\": \"persa\",
        \"fan\": \"fangue\",
        \"fat\": \"fanti\",
        \"ff\": \"fula\",
        \"fi\": \"finlandês\",
        \"fil\": \"filipino\",
        \"fj\": \"fijiano\",
        \"fo\": \"feroês\",
        \"fon\": \"fom\",
        \"fr\": \"francês\",
        \"frc\": \"francês cajun\",
        \"frm\": \"francês médio\",
        \"fro\": \"francês arcaico\",
        \"frr\": \"frísio setentrional\",
        \"frs\": \"frisão oriental\",
        \"fur\": \"friulano\",
        \"fy\": \"frísio ocidental\",
        \"ga\": \"irlandês\",
        \"gaa\": \"ga\",
        \"gag\": \"gagauz\",
        \"gan\": \"gan\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaia\",
        \"gd\": \"gaélico escocês\",
        \"gez\": \"geez\",
        \"gil\": \"gilbertês\",
        \"gl\": \"galego\",
        \"gmh\": \"alto alemão médio\",
        \"gn\": \"guarani\",
        \"goh\": \"alemão arcaico alto\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gótico\",
        \"grb\": \"grebo\",
        \"grc\": \"grego arcaico\",
        \"gsw\": \"alemão (Suíça)\",
        \"gu\": \"guzerate\",
        \"guz\": \"gusii\",
        \"gv\": \"manx\",
        \"gwi\": \"gwichʼin\",
        \"ha\": \"hauçá\",
        \"hai\": \"haida\",
        \"hak\": \"hacá\",
        \"haw\": \"havaiano\",
        \"he\": \"hebraico\",
        \"hi\": \"híndi\",
        \"hil\": \"hiligaynon\",
        \"hit\": \"hitita\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"croata\",
        \"hsb\": \"alto sorábio\",
        \"hsn\": \"xiang\",
        \"ht\": \"haitiano\",
        \"hu\": \"húngaro\",
        \"hup\": \"hupa\",
        \"hy\": \"armênio\",
        \"hz\": \"herero\",
        \"ia\": \"interlíngua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonésio\",
        \"ie\": \"interlingue\",
        \"ig\": \"igbo\",
        \"ii\": \"sichuan yi\",
        \"ik\": \"inupiaque\",
        \"ilo\": \"ilocano\",
        \"inh\": \"inguche\",
        \"io\": \"ido\",
        \"is\": \"islandês\",
        \"it\": \"italiano\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japonês\",
        \"jbo\": \"lojban\",
        \"jgo\": \"nguemba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judaico-persa\",
        \"jrb\": \"judaico-arábico\",
        \"jv\": \"javanês\",
        \"ka\": \"georgiano\",
        \"kaa\": \"kara-kalpak\",
        \"kab\": \"kabyle\",
        \"kac\": \"kachin\",
        \"kaj\": \"jju\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardiano\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"maconde\",
        \"kea\": \"crioulo cabo-verdiano\",
        \"kfo\": \"koro\",
        \"kg\": \"congolês\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanês\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"quicuio\",
        \"kj\": \"cuanhama\",
        \"kk\": \"cazaque\",
        \"kkj\": \"kako\",
        \"kl\": \"groenlandês\",
        \"kln\": \"kalenjin\",
        \"km\": \"khmer\",
        \"kmb\": \"quimbundo\",
        \"kn\": \"canarim\",
        \"ko\": \"coreano\",
        \"koi\": \"komi-permyak\",
        \"kok\": \"concani\",
        \"kos\": \"kosraean\",
        \"kpe\": \"kpelle\",
        \"kr\": \"canúri\",
        \"krc\": \"karachay-balkar\",
        \"krl\": \"carélio\",
        \"kru\": \"kurukh\",
        \"ks\": \"caxemira\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kölsch\",
        \"ku\": \"curdo\",
        \"kum\": \"kumyk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"córnico\",
        \"ky\": \"quirguiz\",
        \"la\": \"latim\",
        \"lad\": \"ladino\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luxemburguês\",
        \"lez\": \"lezgui\",
        \"lg\": \"luganda\",
        \"li\": \"limburguês\",
        \"lkt\": \"lacota\",
        \"ln\": \"lingala\",
        \"lo\": \"laosiano\",
        \"lol\": \"mongo\",
        \"lou\": \"crioulo da Louisiana\",
        \"loz\": \"lozi\",
        \"lrc\": \"luri setentrional\",
        \"lt\": \"lituano\",
        \"lu\": \"luba-catanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"lushai\",
        \"luy\": \"luyia\",
        \"lv\": \"letão\",
        \"mad\": \"madurês\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandinga\",
        \"mas\": \"massai\",
        \"mde\": \"maba\",
        \"mdf\": \"mocsa\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"morisyen\",
        \"mg\": \"malgaxe\",
        \"mga\": \"irlandês médio\",
        \"mgh\": \"macua\",
        \"mgo\": \"meta’\",
        \"mh\": \"marshalês\",
        \"mi\": \"maori\",
        \"mic\": \"miquemaque\",
        \"min\": \"minangkabau\",
        \"mk\": \"macedônio\",
        \"ml\": \"malaiala\",
        \"mn\": \"mongol\",
        \"mnc\": \"manchu\",
        \"mni\": \"manipuri\",
        \"moh\": \"moicano\",
        \"mos\": \"mossi\",
        \"mr\": \"marati\",
        \"ms\": \"malaio\",
        \"mt\": \"maltês\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandês\",
        \"mwr\": \"marwari\",
        \"my\": \"birmanês\",
        \"mye\": \"myene\",
        \"myv\": \"erzya\",
        \"mzn\": \"mazandarani\",
        \"na\": \"nauruano\",
        \"nan\": \"min nan\",
        \"nap\": \"napolitano\",
        \"naq\": \"nama\",
        \"nb\": \"bokmål norueguês\",
        \"nd\": \"ndebele do norte\",
        \"nds\": \"baixo alemão\",
        \"nds_NL\": \"baixo saxão\",
        \"ne\": \"nepalês\",
        \"new\": \"newari\",
        \"ng\": \"dongo\",
        \"nia\": \"nias\",
        \"niu\": \"niueano\",
        \"nl\": \"holandês\",
        \"nl_BE\": \"flamengo\",
        \"nmg\": \"kwasio\",
        \"nn\": \"nynorsk norueguês\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norueguês\",
        \"nog\": \"nogai\",
        \"non\": \"nórdico arcaico\",
        \"nqo\": \"n’ko\",
        \"nr\": \"ndebele do sul\",
        \"nso\": \"soto setentrional\",
        \"nus\": \"nuer\",
        \"nv\": \"navajo\",
        \"nwc\": \"newari clássico\",
        \"ny\": \"nianja\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"occitânico\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromo\",
        \"or\": \"oriá\",
        \"os\": \"osseto\",
        \"osa\": \"osage\",
        \"ota\": \"turco otomano\",
        \"pa\": \"panjabi\",
        \"pag\": \"pangasinã\",
        \"pal\": \"pálavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauano\",
        \"pcm\": \"pidgin nigeriano\",
        \"peo\": \"persa arcaico\",
        \"phn\": \"fenício\",
        \"pi\": \"páli\",
        \"pl\": \"polonês\",
        \"pon\": \"pohnpeiano\",
        \"prg\": \"prussiano\",
        \"pro\": \"provençal arcaico\",
        \"ps\": \"pashto\",
        \"pt\": \"português\",
        \"qu\": \"quíchua\",
        \"quc\": \"quiché\",
        \"raj\": \"rajastani\",
        \"rap\": \"rapanui\",
        \"rar\": \"rarotongano\",
        \"rm\": \"romanche\",
        \"rn\": \"rundi\",
        \"ro\": \"romeno\",
        \"ro_MD\": \"moldávio\",
        \"rof\": \"rombo\",
        \"rom\": \"romani\",
        \"root\": \"raiz\",
        \"ru\": \"russo\",
        \"rup\": \"aromeno\",
        \"rw\": \"quiniaruanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sânscrito\",
        \"sad\": \"sandawe\",
        \"sah\": \"sakha\",
        \"sam\": \"aramaico samaritano\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santali\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardo\",
        \"scn\": \"siciliano\",
        \"sco\": \"scots\",
        \"sd\": \"sindi\",
        \"sdh\": \"curdo meridional\",
        \"se\": \"sami setentrional\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkup\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"irlandês arcaico\",
        \"sh\": \"servo-croata\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"árabe chadiano\",
        \"si\": \"cingalês\",
        \"sid\": \"sidamo\",
        \"sk\": \"eslovaco\",
        \"sl\": \"esloveno\",
        \"sm\": \"samoano\",
        \"sma\": \"sami meridional\",
        \"smj\": \"sami de Lule\",
        \"smn\": \"sami de Inari\",
        \"sms\": \"sami de Skolt\",
        \"sn\": \"xona\",
        \"snk\": \"soninquê\",
        \"so\": \"somali\",
        \"sog\": \"sogdiano\",
        \"sq\": \"albanês\",
        \"sr\": \"sérvio\",
        \"srn\": \"surinamês\",
        \"srr\": \"serere\",
        \"ss\": \"suázi\",
        \"ssy\": \"saho\",
        \"st\": \"soto do sul\",
        \"su\": \"sundanês\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumério\",
        \"sv\": \"sueco\",
        \"sw\": \"suaíli\",
        \"sw_CD\": \"suaíli do Congo\",
        \"swb\": \"comoriano\",
        \"syc\": \"siríaco clássico\",
        \"syr\": \"siríaco\",
        \"ta\": \"tâmil\",
        \"te\": \"télugo\",
        \"tem\": \"timne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tétum\",
        \"tg\": \"tadjique\",
        \"th\": \"tailandês\",
        \"ti\": \"tigrínia\",
        \"tig\": \"tigré\",
        \"tiv\": \"tiv\",
        \"tk\": \"turcomeno\",
        \"tkl\": \"toquelauano\",
        \"tl\": \"tagalo\",
        \"tlh\": \"klingon\",
        \"tli\": \"tlinguite\",
        \"tmh\": \"tamaxeque\",
        \"tn\": \"tswana\",
        \"to\": \"tonganês\",
        \"tog\": \"tonganês de Nyasa\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turco\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshiano\",
        \"tt\": \"tártaro\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluano\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"taitiano\",
        \"tyv\": \"tuviniano\",
        \"tzm\": \"tamazirte do Atlas Central\",
        \"udm\": \"udmurte\",
        \"ug\": \"uigur\",
        \"uga\": \"ugarítico\",
        \"uk\": \"ucraniano\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdu\",
        \"uz\": \"uzbeque\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vi\": \"vietnamita\",
        \"vo\": \"volapuque\",
        \"vot\": \"vótico\",
        \"vun\": \"vunjo\",
        \"wa\": \"valão\",
        \"wae\": \"walser\",
        \"wal\": \"wolaytta\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"uolofe\",
        \"wuu\": \"wu\",
        \"xal\": \"kalmyk\",
        \"xh\": \"xhosa\",
        \"xog\": \"lusoga\",
        \"yao\": \"yao\",
        \"yap\": \"yapese\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"iídiche\",
        \"yo\": \"iorubá\",
        \"yue\": \"cantonês\",
        \"za\": \"zhuang\",
        \"zap\": \"zapoteco\",
        \"zbl\": \"símbolos blis\",
        \"zen\": \"zenaga\",
        \"zgh\": \"tamazirte marroqino padrão\",
        \"zh\": \"chinês\",
        \"zh_Hans\": \"chinês simplificado\",
        \"zh_Hant\": \"chinês tradicional\",
        \"zu\": \"zulu\",
        \"zun\": \"zunhi\",
        \"zza\": \"zazaki\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/pt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/pt.json");
    }
}
