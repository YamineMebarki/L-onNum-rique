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

/* vendor/symfony/intl/Resources/data/languages/hr.json */
class __TwigTemplate_eb47c282dc51cfdedcb511a0a04a575f72f6abb6a0b8cf966dfed730a8c2d161 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/hr.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/hr.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"afarski\",
        \"ab\": \"abhaski\",
        \"ace\": \"ačinski\",
        \"ach\": \"ačoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigejski\",
        \"ae\": \"avestički\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainuski\",
        \"ak\": \"akanski\",
        \"akk\": \"akadski\",
        \"ale\": \"aleutski\",
        \"alt\": \"južni altai\",
        \"am\": \"amharski\",
        \"an\": \"aragonski\",
        \"ang\": \"staroengleski\",
        \"anp\": \"angika\",
        \"ar\": \"arapski\",
        \"ar_001\": \"moderni standardni arapski\",
        \"arc\": \"aramejski\",
        \"arn\": \"mapuche\",
        \"arp\": \"arapaho\",
        \"ars\": \"najdi arapski\",
        \"arw\": \"aravački\",
        \"as\": \"asamski\",
        \"asa\": \"asu\",
        \"ast\": \"asturijski\",
        \"av\": \"avarski\",
        \"awa\": \"awadhi\",
        \"ay\": \"ajmarski\",
        \"az\": \"azerbajdžanski\",
        \"az_Arab\": \"južnoazerbajdžanski\",
        \"ba\": \"baškirski\",
        \"bal\": \"belučki\",
        \"ban\": \"balijski\",
        \"bas\": \"basa\",
        \"bax\": \"bamunski\",
        \"bbj\": \"ghomala\",
        \"be\": \"bjeloruski\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bg\": \"bugarski\",
        \"bgn\": \"zapadnobaludžijski\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bikolski\",
        \"bin\": \"bini\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bangla\",
        \"bo\": \"tibetski\",
        \"br\": \"bretonski\",
        \"bra\": \"braj\",
        \"brx\": \"bodo\",
        \"bs\": \"bosanski\",
        \"bss\": \"akoose\",
        \"bua\": \"burjatski\",
        \"bug\": \"buginski\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"katalonski\",
        \"cad\": \"caddo\",
        \"car\": \"karipski\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"čečenski\",
        \"ceb\": \"cebuano\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"čibča\",
        \"chg\": \"čagatajski\",
        \"chk\": \"chuukese\",
        \"chm\": \"marijski\",
        \"chn\": \"chinook žargon\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"čerokijski\",
        \"chy\": \"čejenski\",
        \"ckb\": \"soranski kurdski\",
        \"co\": \"korzički\",
        \"cop\": \"koptski\",
        \"cr\": \"cree\",
        \"crh\": \"krimski turski\",
        \"crs\": \"sejšelski kreolski\",
        \"cs\": \"češki\",
        \"csb\": \"kašupski\",
        \"cu\": \"crkvenoslavenski\",
        \"cv\": \"čuvaški\",
        \"cy\": \"velški\",
        \"da\": \"danski\",
        \"dak\": \"dakota jezik\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"njemački\",
        \"de_AT\": \"austrijski njemački\",
        \"de_CH\": \"gornjonjemački (švicarski)\",
        \"del\": \"delavarski\",
        \"den\": \"slave\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"donjolužički\",
        \"dua\": \"duala\",
        \"dum\": \"srednjonizozemski\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"dyula\",
        \"dz\": \"dzongkha\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egy\": \"staroegipatski\",
        \"eka\": \"ekajuk\",
        \"el\": \"grčki\",
        \"elx\": \"elamitski\",
        \"en\": \"engleski\",
        \"en_AU\": \"australski engleski\",
        \"en_CA\": \"kanadski engleski\",
        \"en_GB\": \"britanski engleski\",
        \"en_US\": \"američki engleski\",
        \"enm\": \"srednjoengleski\",
        \"eo\": \"esperanto\",
        \"es\": \"španjolski\",
        \"es_419\": \"latinoamerički španjolski\",
        \"es_ES\": \"europski španjolski\",
        \"es_MX\": \"meksički španjolski\",
        \"et\": \"estonski\",
        \"eu\": \"baskijski\",
        \"ewo\": \"ewondo\",
        \"fa\": \"perzijski\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"fula\",
        \"fi\": \"finski\",
        \"fil\": \"filipinski\",
        \"fj\": \"fidžijski\",
        \"fo\": \"ferojski\",
        \"fon\": \"fon\",
        \"fr\": \"francuski\",
        \"fr_CA\": \"kanadski francuski\",
        \"fr_CH\": \"švicarski francuski\",
        \"frc\": \"kajunski francuski\",
        \"frm\": \"srednjofrancuski\",
        \"fro\": \"starofrancuski\",
        \"frr\": \"sjevernofrizijski\",
        \"frs\": \"istočnofrizijski\",
        \"fur\": \"furlanski\",
        \"fy\": \"zapadnofrizijski\",
        \"ga\": \"irski\",
        \"gaa\": \"ga\",
        \"gag\": \"gagauski\",
        \"gan\": \"gan kineski\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gd\": \"škotski gaelski\",
        \"gez\": \"geez\",
        \"gil\": \"gilbertski\",
        \"gl\": \"galicijski\",
        \"gmh\": \"srednjogornjonjemački\",
        \"gn\": \"gvaranski\",
        \"goh\": \"starovisokonjemački\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gotski\",
        \"grb\": \"grebo\",
        \"grc\": \"starogrčki\",
        \"gsw\": \"švicarski njemački\",
        \"gu\": \"gudžaratski\",
        \"guz\": \"gusii\",
        \"gv\": \"manski\",
        \"gwi\": \"gwich’in\",
        \"ha\": \"hausa\",
        \"hai\": \"haidi\",
        \"hak\": \"hakka kineski\",
        \"haw\": \"havajski\",
        \"he\": \"hebrejski\",
        \"hi\": \"hindski\",
        \"hil\": \"hiligaynonski\",
        \"hit\": \"hetitski\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"hrvatski\",
        \"hsb\": \"gornjolužički\",
        \"hsn\": \"xiang kineski\",
        \"ht\": \"haićanski kreolski\",
        \"hu\": \"mađarski\",
        \"hup\": \"hupa\",
        \"hy\": \"armenski\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonezijski\",
        \"ie\": \"interligua\",
        \"ig\": \"igbo\",
        \"ii\": \"sichuan ji\",
        \"ik\": \"inupiaq\",
        \"ilo\": \"iloko\",
        \"inh\": \"ingušetski\",
        \"io\": \"ido\",
        \"is\": \"islandski\",
        \"it\": \"talijanski\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japanski\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judejsko-perzijski\",
        \"jrb\": \"judejsko-arapski\",
        \"jv\": \"javanski\",
        \"ka\": \"gruzijski\",
        \"kaa\": \"kara-kalpak\",
        \"kab\": \"kabilski\",
        \"kac\": \"kačinski\",
        \"kaj\": \"kaje\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardinski\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"zelenortski\",
        \"kfo\": \"koro\",
        \"kg\": \"kongo\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanese\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"kikuyu\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kazaški\",
        \"kkj\": \"kako\",
        \"kl\": \"kalaallisut\",
        \"kln\": \"kalenjin\",
        \"km\": \"kmerski\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"karnatački\",
        \"ko\": \"korejski\",
        \"koi\": \"komi-permski\",
        \"kok\": \"konkani\",
        \"kos\": \"naurski\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karachay-balkar\",
        \"krl\": \"karelijski\",
        \"kru\": \"kuruški\",
        \"ks\": \"kašmirski\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kelnski\",
        \"ku\": \"kurdski\",
        \"kum\": \"kumyk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"kornski\",
        \"ky\": \"kirgiski\",
        \"la\": \"latinski\",
        \"lad\": \"ladino\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luksemburški\",
        \"lez\": \"lezgiški\",
        \"lg\": \"ganda\",
        \"li\": \"limburški\",
        \"lkt\": \"lakota\",
        \"ln\": \"lingala\",
        \"lo\": \"laoski\",
        \"lol\": \"mongo\",
        \"lou\": \"lujzijanski kreolski\",
        \"loz\": \"lozi\",
        \"lrc\": \"sjevernolurski\",
        \"lt\": \"litavski\",
        \"lu\": \"luba-katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"lushai\",
        \"luy\": \"luyia\",
        \"lv\": \"latvijski\",
        \"mad\": \"madurski\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandingo\",
        \"mas\": \"masajski\",
        \"mde\": \"maba\",
        \"mdf\": \"moksha\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauricijski kreolski\",
        \"mg\": \"malgaški\",
        \"mga\": \"srednjoirski\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mh\": \"maršalski\",
        \"mi\": \"maorski\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"makedonski\",
        \"ml\": \"malajalamski\",
        \"mn\": \"mongolski\",
        \"mnc\": \"mandžurski\",
        \"mni\": \"manipurski\",
        \"moh\": \"mohok\",
        \"mos\": \"mossi\",
        \"mr\": \"marathski\",
        \"ms\": \"malajski\",
        \"mt\": \"malteški\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandski\",
        \"mwr\": \"marwari\",
        \"my\": \"burmanski\",
        \"mye\": \"myene\",
        \"myv\": \"mordvinski\",
        \"mzn\": \"mazanderanski\",
        \"na\": \"nauru\",
        \"nan\": \"min nan kineski\",
        \"nap\": \"napolitanski\",
        \"naq\": \"nama\",
        \"nb\": \"norveški bokmål\",
        \"nd\": \"sjeverni ndebele\",
        \"nds\": \"donjonjemački\",
        \"nds_NL\": \"donjosaksonski\",
        \"ne\": \"nepalski\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niujski\",
        \"nl\": \"nizozemski\",
        \"nl_BE\": \"flamanski\",
        \"nmg\": \"kwasio\",
        \"nn\": \"norveški nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norveški\",
        \"nog\": \"nogajski\",
        \"non\": \"staronorveški\",
        \"nqo\": \"n’ko\",
        \"nr\": \"južni ndebele\",
        \"nso\": \"sjeverni sotski\",
        \"nus\": \"nuerski\",
        \"nv\": \"navajo\",
        \"nwc\": \"klasični newari\",
        \"ny\": \"njandža\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"okcitanski\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromski\",
        \"or\": \"orijski\",
        \"os\": \"osetski\",
        \"osa\": \"osage\",
        \"ota\": \"turski - otomanski\",
        \"pa\": \"pandžapski\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauanski\",
        \"pcm\": \"nigerijski pidžin\",
        \"peo\": \"staroperzijski\",
        \"phn\": \"fenički\",
        \"pi\": \"pali\",
        \"pl\": \"poljski\",
        \"pon\": \"pohnpeian\",
        \"prg\": \"pruski\",
        \"pro\": \"staroprovansalski\",
        \"ps\": \"paštunski\",
        \"pt\": \"portugalski\",
        \"pt_BR\": \"brazilski portugalski\",
        \"pt_PT\": \"europski portugalski\",
        \"qu\": \"kečuanski\",
        \"quc\": \"kiče\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapa nui\",
        \"rar\": \"rarotonški\",
        \"rm\": \"retoromanski\",
        \"rn\": \"rundi\",
        \"ro\": \"rumunjski\",
        \"ro_MD\": \"moldavski\",
        \"rof\": \"rombo\",
        \"rom\": \"romski\",
        \"root\": \"korijenski\",
        \"ru\": \"ruski\",
        \"rup\": \"aromunski\",
        \"rw\": \"kinyarwanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sanskrtski\",
        \"sad\": \"sandawe\",
        \"sah\": \"jakutski\",
        \"sam\": \"samarijanski aramejski\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santalski\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardski\",
        \"scn\": \"sicilijski\",
        \"sco\": \"škotski\",
        \"sd\": \"sindski\",
        \"sdh\": \"južnokurdski\",
        \"se\": \"sjeverni sami\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkupski\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"staroirski\",
        \"sh\": \"srpsko-hrvatski\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"čadski arapski\",
        \"si\": \"sinhaleški\",
        \"sid\": \"sidamo\",
        \"sk\": \"slovački\",
        \"sl\": \"slovenski\",
        \"sm\": \"samoanski\",
        \"sma\": \"južni sami\",
        \"smj\": \"lule sami\",
        \"smn\": \"inari sami\",
        \"sms\": \"skolt sami\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somalski\",
        \"sog\": \"sogdien\",
        \"sq\": \"albanski\",
        \"sr\": \"srpski\",
        \"srn\": \"sranan tongo\",
        \"srr\": \"serer\",
        \"ss\": \"svati\",
        \"ssy\": \"saho\",
        \"st\": \"sesotski\",
        \"su\": \"sundanski\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumerski\",
        \"sv\": \"švedski\",
        \"sw\": \"svahili\",
        \"sw_CD\": \"kongoanski svahili\",
        \"swb\": \"komorski\",
        \"syc\": \"klasični sirski\",
        \"syr\": \"sirijski\",
        \"ta\": \"tamilski\",
        \"te\": \"teluški\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tetum\",
        \"tg\": \"tadžički\",
        \"th\": \"tajlandski\",
        \"ti\": \"tigrinja\",
        \"tig\": \"tigriški\",
        \"tiv\": \"tiv\",
        \"tk\": \"turkmenski\",
        \"tkl\": \"tokelaunski\",
        \"tl\": \"tagalog\",
        \"tlh\": \"klingonski\",
        \"tli\": \"tlingit\",
        \"tmh\": \"tamašečki\",
        \"tn\": \"cvana\",
        \"to\": \"tonganski\",
        \"tog\": \"nyasa tonga\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turski\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshian\",
        \"tt\": \"tatarski\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluanski\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahićanski\",
        \"tyv\": \"tuvinski\",
        \"tzm\": \"tamašek (Srednji Atlas)\",
        \"udm\": \"udmurtski\",
        \"ug\": \"ujgurski\",
        \"uga\": \"ugaritski\",
        \"uk\": \"ukrajinski\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdski\",
        \"uz\": \"uzbečki\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vi\": \"vijetnamski\",
        \"vo\": \"volapük\",
        \"vot\": \"votski\",
        \"vun\": \"vunjo\",
        \"wa\": \"valonski\",
        \"wae\": \"walserski\",
        \"wal\": \"walamo\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"volof\",
        \"wuu\": \"wu kineski\",
        \"xal\": \"kalmyk\",
        \"xh\": \"xhosa\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"japski\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"jidiš\",
        \"yo\": \"jorupski\",
        \"yue\": \"kantonski\",
        \"za\": \"zhuang\",
        \"zap\": \"zapotečki\",
        \"zbl\": \"Blissovi simboli\",
        \"zen\": \"zenaga\",
        \"zgh\": \"standardni marokanski tamašek\",
        \"zh\": \"kineski\",
        \"zh_Hans\": \"kineski (pojednostavljeni)\",
        \"zh_Hant\": \"kineski (tradicionalni)\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zazaki\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/hr.json";
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
        \"aa\": \"afarski\",
        \"ab\": \"abhaski\",
        \"ace\": \"ačinski\",
        \"ach\": \"ačoli\",
        \"ada\": \"adangme\",
        \"ady\": \"adigejski\",
        \"ae\": \"avestički\",
        \"af\": \"afrikaans\",
        \"afh\": \"afrihili\",
        \"agq\": \"aghem\",
        \"ain\": \"ainuski\",
        \"ak\": \"akanski\",
        \"akk\": \"akadski\",
        \"ale\": \"aleutski\",
        \"alt\": \"južni altai\",
        \"am\": \"amharski\",
        \"an\": \"aragonski\",
        \"ang\": \"staroengleski\",
        \"anp\": \"angika\",
        \"ar\": \"arapski\",
        \"ar_001\": \"moderni standardni arapski\",
        \"arc\": \"aramejski\",
        \"arn\": \"mapuche\",
        \"arp\": \"arapaho\",
        \"ars\": \"najdi arapski\",
        \"arw\": \"aravački\",
        \"as\": \"asamski\",
        \"asa\": \"asu\",
        \"ast\": \"asturijski\",
        \"av\": \"avarski\",
        \"awa\": \"awadhi\",
        \"ay\": \"ajmarski\",
        \"az\": \"azerbajdžanski\",
        \"az_Arab\": \"južnoazerbajdžanski\",
        \"ba\": \"baškirski\",
        \"bal\": \"belučki\",
        \"ban\": \"balijski\",
        \"bas\": \"basa\",
        \"bax\": \"bamunski\",
        \"bbj\": \"ghomala\",
        \"be\": \"bjeloruski\",
        \"bej\": \"beja\",
        \"bem\": \"bemba\",
        \"bez\": \"bena\",
        \"bfd\": \"bafut\",
        \"bg\": \"bugarski\",
        \"bgn\": \"zapadnobaludžijski\",
        \"bho\": \"bhojpuri\",
        \"bi\": \"bislama\",
        \"bik\": \"bikolski\",
        \"bin\": \"bini\",
        \"bkm\": \"kom\",
        \"bla\": \"siksika\",
        \"bm\": \"bambara\",
        \"bn\": \"bangla\",
        \"bo\": \"tibetski\",
        \"br\": \"bretonski\",
        \"bra\": \"braj\",
        \"brx\": \"bodo\",
        \"bs\": \"bosanski\",
        \"bss\": \"akoose\",
        \"bua\": \"burjatski\",
        \"bug\": \"buginski\",
        \"bum\": \"bulu\",
        \"byn\": \"blin\",
        \"byv\": \"medumba\",
        \"ca\": \"katalonski\",
        \"cad\": \"caddo\",
        \"car\": \"karipski\",
        \"cay\": \"cayuga\",
        \"cch\": \"atsam\",
        \"ccp\": \"chakma\",
        \"ce\": \"čečenski\",
        \"ceb\": \"cebuano\",
        \"cgg\": \"chiga\",
        \"ch\": \"chamorro\",
        \"chb\": \"čibča\",
        \"chg\": \"čagatajski\",
        \"chk\": \"chuukese\",
        \"chm\": \"marijski\",
        \"chn\": \"chinook žargon\",
        \"cho\": \"choctaw\",
        \"chp\": \"chipewyan\",
        \"chr\": \"čerokijski\",
        \"chy\": \"čejenski\",
        \"ckb\": \"soranski kurdski\",
        \"co\": \"korzički\",
        \"cop\": \"koptski\",
        \"cr\": \"cree\",
        \"crh\": \"krimski turski\",
        \"crs\": \"sejšelski kreolski\",
        \"cs\": \"češki\",
        \"csb\": \"kašupski\",
        \"cu\": \"crkvenoslavenski\",
        \"cv\": \"čuvaški\",
        \"cy\": \"velški\",
        \"da\": \"danski\",
        \"dak\": \"dakota jezik\",
        \"dar\": \"dargwa\",
        \"dav\": \"taita\",
        \"de\": \"njemački\",
        \"de_AT\": \"austrijski njemački\",
        \"de_CH\": \"gornjonjemački (švicarski)\",
        \"del\": \"delavarski\",
        \"den\": \"slave\",
        \"dgr\": \"dogrib\",
        \"din\": \"dinka\",
        \"dje\": \"zarma\",
        \"doi\": \"dogri\",
        \"dsb\": \"donjolužički\",
        \"dua\": \"duala\",
        \"dum\": \"srednjonizozemski\",
        \"dv\": \"divehi\",
        \"dyo\": \"jola-fonyi\",
        \"dyu\": \"dyula\",
        \"dz\": \"dzongkha\",
        \"dzg\": \"dazaga\",
        \"ebu\": \"embu\",
        \"ee\": \"ewe\",
        \"efi\": \"efik\",
        \"egy\": \"staroegipatski\",
        \"eka\": \"ekajuk\",
        \"el\": \"grčki\",
        \"elx\": \"elamitski\",
        \"en\": \"engleski\",
        \"en_AU\": \"australski engleski\",
        \"en_CA\": \"kanadski engleski\",
        \"en_GB\": \"britanski engleski\",
        \"en_US\": \"američki engleski\",
        \"enm\": \"srednjoengleski\",
        \"eo\": \"esperanto\",
        \"es\": \"španjolski\",
        \"es_419\": \"latinoamerički španjolski\",
        \"es_ES\": \"europski španjolski\",
        \"es_MX\": \"meksički španjolski\",
        \"et\": \"estonski\",
        \"eu\": \"baskijski\",
        \"ewo\": \"ewondo\",
        \"fa\": \"perzijski\",
        \"fan\": \"fang\",
        \"fat\": \"fanti\",
        \"ff\": \"fula\",
        \"fi\": \"finski\",
        \"fil\": \"filipinski\",
        \"fj\": \"fidžijski\",
        \"fo\": \"ferojski\",
        \"fon\": \"fon\",
        \"fr\": \"francuski\",
        \"fr_CA\": \"kanadski francuski\",
        \"fr_CH\": \"švicarski francuski\",
        \"frc\": \"kajunski francuski\",
        \"frm\": \"srednjofrancuski\",
        \"fro\": \"starofrancuski\",
        \"frr\": \"sjevernofrizijski\",
        \"frs\": \"istočnofrizijski\",
        \"fur\": \"furlanski\",
        \"fy\": \"zapadnofrizijski\",
        \"ga\": \"irski\",
        \"gaa\": \"ga\",
        \"gag\": \"gagauski\",
        \"gan\": \"gan kineski\",
        \"gay\": \"gayo\",
        \"gba\": \"gbaya\",
        \"gd\": \"škotski gaelski\",
        \"gez\": \"geez\",
        \"gil\": \"gilbertski\",
        \"gl\": \"galicijski\",
        \"gmh\": \"srednjogornjonjemački\",
        \"gn\": \"gvaranski\",
        \"goh\": \"starovisokonjemački\",
        \"gon\": \"gondi\",
        \"gor\": \"gorontalo\",
        \"got\": \"gotski\",
        \"grb\": \"grebo\",
        \"grc\": \"starogrčki\",
        \"gsw\": \"švicarski njemački\",
        \"gu\": \"gudžaratski\",
        \"guz\": \"gusii\",
        \"gv\": \"manski\",
        \"gwi\": \"gwich’in\",
        \"ha\": \"hausa\",
        \"hai\": \"haidi\",
        \"hak\": \"hakka kineski\",
        \"haw\": \"havajski\",
        \"he\": \"hebrejski\",
        \"hi\": \"hindski\",
        \"hil\": \"hiligaynonski\",
        \"hit\": \"hetitski\",
        \"hmn\": \"hmong\",
        \"ho\": \"hiri motu\",
        \"hr\": \"hrvatski\",
        \"hsb\": \"gornjolužički\",
        \"hsn\": \"xiang kineski\",
        \"ht\": \"haićanski kreolski\",
        \"hu\": \"mađarski\",
        \"hup\": \"hupa\",
        \"hy\": \"armenski\",
        \"hz\": \"herero\",
        \"ia\": \"interlingua\",
        \"iba\": \"iban\",
        \"ibb\": \"ibibio\",
        \"id\": \"indonezijski\",
        \"ie\": \"interligua\",
        \"ig\": \"igbo\",
        \"ii\": \"sichuan ji\",
        \"ik\": \"inupiaq\",
        \"ilo\": \"iloko\",
        \"inh\": \"ingušetski\",
        \"io\": \"ido\",
        \"is\": \"islandski\",
        \"it\": \"talijanski\",
        \"iu\": \"inuktitut\",
        \"ja\": \"japanski\",
        \"jbo\": \"lojban\",
        \"jgo\": \"ngomba\",
        \"jmc\": \"machame\",
        \"jpr\": \"judejsko-perzijski\",
        \"jrb\": \"judejsko-arapski\",
        \"jv\": \"javanski\",
        \"ka\": \"gruzijski\",
        \"kaa\": \"kara-kalpak\",
        \"kab\": \"kabilski\",
        \"kac\": \"kačinski\",
        \"kaj\": \"kaje\",
        \"kam\": \"kamba\",
        \"kaw\": \"kawi\",
        \"kbd\": \"kabardinski\",
        \"kbl\": \"kanembu\",
        \"kcg\": \"tyap\",
        \"kde\": \"makonde\",
        \"kea\": \"zelenortski\",
        \"kfo\": \"koro\",
        \"kg\": \"kongo\",
        \"kha\": \"khasi\",
        \"kho\": \"khotanese\",
        \"khq\": \"koyra chiini\",
        \"ki\": \"kikuyu\",
        \"kj\": \"kuanyama\",
        \"kk\": \"kazaški\",
        \"kkj\": \"kako\",
        \"kl\": \"kalaallisut\",
        \"kln\": \"kalenjin\",
        \"km\": \"kmerski\",
        \"kmb\": \"kimbundu\",
        \"kn\": \"karnatački\",
        \"ko\": \"korejski\",
        \"koi\": \"komi-permski\",
        \"kok\": \"konkani\",
        \"kos\": \"naurski\",
        \"kpe\": \"kpelle\",
        \"kr\": \"kanuri\",
        \"krc\": \"karachay-balkar\",
        \"krl\": \"karelijski\",
        \"kru\": \"kuruški\",
        \"ks\": \"kašmirski\",
        \"ksb\": \"shambala\",
        \"ksf\": \"bafia\",
        \"ksh\": \"kelnski\",
        \"ku\": \"kurdski\",
        \"kum\": \"kumyk\",
        \"kut\": \"kutenai\",
        \"kv\": \"komi\",
        \"kw\": \"kornski\",
        \"ky\": \"kirgiski\",
        \"la\": \"latinski\",
        \"lad\": \"ladino\",
        \"lag\": \"langi\",
        \"lah\": \"lahnda\",
        \"lam\": \"lamba\",
        \"lb\": \"luksemburški\",
        \"lez\": \"lezgiški\",
        \"lg\": \"ganda\",
        \"li\": \"limburški\",
        \"lkt\": \"lakota\",
        \"ln\": \"lingala\",
        \"lo\": \"laoski\",
        \"lol\": \"mongo\",
        \"lou\": \"lujzijanski kreolski\",
        \"loz\": \"lozi\",
        \"lrc\": \"sjevernolurski\",
        \"lt\": \"litavski\",
        \"lu\": \"luba-katanga\",
        \"lua\": \"luba-lulua\",
        \"lui\": \"luiseno\",
        \"lun\": \"lunda\",
        \"luo\": \"luo\",
        \"lus\": \"lushai\",
        \"luy\": \"luyia\",
        \"lv\": \"latvijski\",
        \"mad\": \"madurski\",
        \"maf\": \"mafa\",
        \"mag\": \"magahi\",
        \"mai\": \"maithili\",
        \"mak\": \"makasar\",
        \"man\": \"mandingo\",
        \"mas\": \"masajski\",
        \"mde\": \"maba\",
        \"mdf\": \"moksha\",
        \"mdr\": \"mandar\",
        \"men\": \"mende\",
        \"mer\": \"meru\",
        \"mfe\": \"mauricijski kreolski\",
        \"mg\": \"malgaški\",
        \"mga\": \"srednjoirski\",
        \"mgh\": \"makhuwa-meetto\",
        \"mgo\": \"meta’\",
        \"mh\": \"maršalski\",
        \"mi\": \"maorski\",
        \"mic\": \"micmac\",
        \"min\": \"minangkabau\",
        \"mk\": \"makedonski\",
        \"ml\": \"malajalamski\",
        \"mn\": \"mongolski\",
        \"mnc\": \"mandžurski\",
        \"mni\": \"manipurski\",
        \"moh\": \"mohok\",
        \"mos\": \"mossi\",
        \"mr\": \"marathski\",
        \"ms\": \"malajski\",
        \"mt\": \"malteški\",
        \"mua\": \"mundang\",
        \"mus\": \"creek\",
        \"mwl\": \"mirandski\",
        \"mwr\": \"marwari\",
        \"my\": \"burmanski\",
        \"mye\": \"myene\",
        \"myv\": \"mordvinski\",
        \"mzn\": \"mazanderanski\",
        \"na\": \"nauru\",
        \"nan\": \"min nan kineski\",
        \"nap\": \"napolitanski\",
        \"naq\": \"nama\",
        \"nb\": \"norveški bokmål\",
        \"nd\": \"sjeverni ndebele\",
        \"nds\": \"donjonjemački\",
        \"nds_NL\": \"donjosaksonski\",
        \"ne\": \"nepalski\",
        \"new\": \"newari\",
        \"ng\": \"ndonga\",
        \"nia\": \"nias\",
        \"niu\": \"niujski\",
        \"nl\": \"nizozemski\",
        \"nl_BE\": \"flamanski\",
        \"nmg\": \"kwasio\",
        \"nn\": \"norveški nynorsk\",
        \"nnh\": \"ngiemboon\",
        \"no\": \"norveški\",
        \"nog\": \"nogajski\",
        \"non\": \"staronorveški\",
        \"nqo\": \"n’ko\",
        \"nr\": \"južni ndebele\",
        \"nso\": \"sjeverni sotski\",
        \"nus\": \"nuerski\",
        \"nv\": \"navajo\",
        \"nwc\": \"klasični newari\",
        \"ny\": \"njandža\",
        \"nym\": \"nyamwezi\",
        \"nyn\": \"nyankole\",
        \"nyo\": \"nyoro\",
        \"nzi\": \"nzima\",
        \"oc\": \"okcitanski\",
        \"oj\": \"ojibwa\",
        \"om\": \"oromski\",
        \"or\": \"orijski\",
        \"os\": \"osetski\",
        \"osa\": \"osage\",
        \"ota\": \"turski - otomanski\",
        \"pa\": \"pandžapski\",
        \"pag\": \"pangasinan\",
        \"pal\": \"pahlavi\",
        \"pam\": \"pampanga\",
        \"pap\": \"papiamento\",
        \"pau\": \"palauanski\",
        \"pcm\": \"nigerijski pidžin\",
        \"peo\": \"staroperzijski\",
        \"phn\": \"fenički\",
        \"pi\": \"pali\",
        \"pl\": \"poljski\",
        \"pon\": \"pohnpeian\",
        \"prg\": \"pruski\",
        \"pro\": \"staroprovansalski\",
        \"ps\": \"paštunski\",
        \"pt\": \"portugalski\",
        \"pt_BR\": \"brazilski portugalski\",
        \"pt_PT\": \"europski portugalski\",
        \"qu\": \"kečuanski\",
        \"quc\": \"kiče\",
        \"raj\": \"rajasthani\",
        \"rap\": \"rapa nui\",
        \"rar\": \"rarotonški\",
        \"rm\": \"retoromanski\",
        \"rn\": \"rundi\",
        \"ro\": \"rumunjski\",
        \"ro_MD\": \"moldavski\",
        \"rof\": \"rombo\",
        \"rom\": \"romski\",
        \"root\": \"korijenski\",
        \"ru\": \"ruski\",
        \"rup\": \"aromunski\",
        \"rw\": \"kinyarwanda\",
        \"rwk\": \"rwa\",
        \"sa\": \"sanskrtski\",
        \"sad\": \"sandawe\",
        \"sah\": \"jakutski\",
        \"sam\": \"samarijanski aramejski\",
        \"saq\": \"samburu\",
        \"sas\": \"sasak\",
        \"sat\": \"santalski\",
        \"sba\": \"ngambay\",
        \"sbp\": \"sangu\",
        \"sc\": \"sardski\",
        \"scn\": \"sicilijski\",
        \"sco\": \"škotski\",
        \"sd\": \"sindski\",
        \"sdh\": \"južnokurdski\",
        \"se\": \"sjeverni sami\",
        \"see\": \"seneca\",
        \"seh\": \"sena\",
        \"sel\": \"selkupski\",
        \"ses\": \"koyraboro senni\",
        \"sg\": \"sango\",
        \"sga\": \"staroirski\",
        \"sh\": \"srpsko-hrvatski\",
        \"shi\": \"tachelhit\",
        \"shn\": \"shan\",
        \"shu\": \"čadski arapski\",
        \"si\": \"sinhaleški\",
        \"sid\": \"sidamo\",
        \"sk\": \"slovački\",
        \"sl\": \"slovenski\",
        \"sm\": \"samoanski\",
        \"sma\": \"južni sami\",
        \"smj\": \"lule sami\",
        \"smn\": \"inari sami\",
        \"sms\": \"skolt sami\",
        \"sn\": \"shona\",
        \"snk\": \"soninke\",
        \"so\": \"somalski\",
        \"sog\": \"sogdien\",
        \"sq\": \"albanski\",
        \"sr\": \"srpski\",
        \"srn\": \"sranan tongo\",
        \"srr\": \"serer\",
        \"ss\": \"svati\",
        \"ssy\": \"saho\",
        \"st\": \"sesotski\",
        \"su\": \"sundanski\",
        \"suk\": \"sukuma\",
        \"sus\": \"susu\",
        \"sux\": \"sumerski\",
        \"sv\": \"švedski\",
        \"sw\": \"svahili\",
        \"sw_CD\": \"kongoanski svahili\",
        \"swb\": \"komorski\",
        \"syc\": \"klasični sirski\",
        \"syr\": \"sirijski\",
        \"ta\": \"tamilski\",
        \"te\": \"teluški\",
        \"tem\": \"temne\",
        \"teo\": \"teso\",
        \"ter\": \"tereno\",
        \"tet\": \"tetum\",
        \"tg\": \"tadžički\",
        \"th\": \"tajlandski\",
        \"ti\": \"tigrinja\",
        \"tig\": \"tigriški\",
        \"tiv\": \"tiv\",
        \"tk\": \"turkmenski\",
        \"tkl\": \"tokelaunski\",
        \"tl\": \"tagalog\",
        \"tlh\": \"klingonski\",
        \"tli\": \"tlingit\",
        \"tmh\": \"tamašečki\",
        \"tn\": \"cvana\",
        \"to\": \"tonganski\",
        \"tog\": \"nyasa tonga\",
        \"tpi\": \"tok pisin\",
        \"tr\": \"turski\",
        \"trv\": \"taroko\",
        \"ts\": \"tsonga\",
        \"tsi\": \"tsimshian\",
        \"tt\": \"tatarski\",
        \"tum\": \"tumbuka\",
        \"tvl\": \"tuvaluanski\",
        \"tw\": \"twi\",
        \"twq\": \"tasawaq\",
        \"ty\": \"tahićanski\",
        \"tyv\": \"tuvinski\",
        \"tzm\": \"tamašek (Srednji Atlas)\",
        \"udm\": \"udmurtski\",
        \"ug\": \"ujgurski\",
        \"uga\": \"ugaritski\",
        \"uk\": \"ukrajinski\",
        \"umb\": \"umbundu\",
        \"ur\": \"urdski\",
        \"uz\": \"uzbečki\",
        \"vai\": \"vai\",
        \"ve\": \"venda\",
        \"vi\": \"vijetnamski\",
        \"vo\": \"volapük\",
        \"vot\": \"votski\",
        \"vun\": \"vunjo\",
        \"wa\": \"valonski\",
        \"wae\": \"walserski\",
        \"wal\": \"walamo\",
        \"war\": \"waray\",
        \"was\": \"washo\",
        \"wbp\": \"warlpiri\",
        \"wo\": \"volof\",
        \"wuu\": \"wu kineski\",
        \"xal\": \"kalmyk\",
        \"xh\": \"xhosa\",
        \"xog\": \"soga\",
        \"yao\": \"yao\",
        \"yap\": \"japski\",
        \"yav\": \"yangben\",
        \"ybb\": \"yemba\",
        \"yi\": \"jidiš\",
        \"yo\": \"jorupski\",
        \"yue\": \"kantonski\",
        \"za\": \"zhuang\",
        \"zap\": \"zapotečki\",
        \"zbl\": \"Blissovi simboli\",
        \"zen\": \"zenaga\",
        \"zgh\": \"standardni marokanski tamašek\",
        \"zh\": \"kineski\",
        \"zh_Hans\": \"kineski (pojednostavljeni)\",
        \"zh_Hant\": \"kineski (tradicionalni)\",
        \"zu\": \"zulu\",
        \"zun\": \"zuni\",
        \"zza\": \"zazaki\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/hr.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/hr.json");
    }
}