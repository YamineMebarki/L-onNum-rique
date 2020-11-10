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

/* vendor/symfony/intl/Resources/data/languages/be.json */
class __TwigTemplate_64c2bf2a7e90b15c9c7727f2693b8e6dbe225f644ed70d82a775ea34938999cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/be.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/be.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"афарская\",
        \"ab\": \"абхазская\",
        \"ace\": \"ачэх\",
        \"ada\": \"адангмэ\",
        \"ady\": \"адыгейская\",
        \"af\": \"афрыкаанс\",
        \"agq\": \"агем\",
        \"ain\": \"айнская\",
        \"ak\": \"акан\",
        \"akk\": \"акадская\",
        \"ale\": \"алеуцкая\",
        \"alt\": \"паўднёваалтайская\",
        \"am\": \"амхарская\",
        \"an\": \"арагонская\",
        \"ang\": \"стараанглійская\",
        \"anp\": \"ангіка\",
        \"ar\": \"арабская\",
        \"ar_001\": \"сучасная стандартная арабская\",
        \"arc\": \"арамейская\",
        \"arn\": \"мапудунгун\",
        \"arp\": \"арапаха\",
        \"as\": \"асамская\",
        \"asa\": \"асу\",
        \"ast\": \"астурыйская\",
        \"av\": \"аварская\",
        \"awa\": \"авадхі\",
        \"ay\": \"аймара\",
        \"az\": \"азербайджанская\",
        \"ba\": \"башкірская\",
        \"ban\": \"балійская\",
        \"bas\": \"басаа\",
        \"be\": \"беларуская\",
        \"bem\": \"бемба\",
        \"bez\": \"бена\",
        \"bg\": \"балгарская\",
        \"bgn\": \"заходняя белуджская\",
        \"bho\": \"бхаджпуры\",
        \"bi\": \"біслама\",
        \"bin\": \"эда\",
        \"bla\": \"блэкфут\",
        \"bm\": \"бамбара\",
        \"bn\": \"бенгальская\",
        \"bo\": \"тыбецкая\",
        \"br\": \"брэтонская\",
        \"brx\": \"бода\",
        \"bs\": \"баснійская\",
        \"bua\": \"бурацкая\",
        \"bug\": \"бугіс\",
        \"byn\": \"білен\",
        \"ca\": \"каталанская\",
        \"ccp\": \"чакма\",
        \"ce\": \"чачэнская\",
        \"ceb\": \"себуана\",
        \"cgg\": \"чыга\",
        \"ch\": \"чамора\",
        \"chb\": \"чыбча\",
        \"chk\": \"чуук\",
        \"chm\": \"мары\",
        \"cho\": \"чокта\",
        \"chr\": \"чэрокі\",
        \"chy\": \"шэйен\",
        \"ckb\": \"цэнтральнакурдская\",
        \"co\": \"карсіканская\",
        \"cop\": \"копцкая\",
        \"crs\": \"сэсэльва\",
        \"cs\": \"чэшская\",
        \"cu\": \"царкоўнаславянская\",
        \"cv\": \"чувашская\",
        \"cy\": \"валійская\",
        \"da\": \"дацкая\",
        \"dak\": \"дакота\",
        \"dar\": \"даргінская\",
        \"dav\": \"таіта\",
        \"de\": \"нямецкая\",
        \"de_AT\": \"аўстрыйская нямецкая\",
        \"de_CH\": \"швейцарская літаратурная нямецкая\",
        \"dgr\": \"догрыб\",
        \"dje\": \"зарма\",
        \"dsb\": \"ніжнялужыцкая\",
        \"dua\": \"дуала\",
        \"dv\": \"мальдыўская\",
        \"dyo\": \"джола-фоньі\",
        \"dz\": \"дзонг-кэ\",
        \"dzg\": \"дазага\",
        \"ebu\": \"эмбу\",
        \"ee\": \"эве\",
        \"efi\": \"эфік\",
        \"egy\": \"старажытнаегіпецкая\",
        \"eka\": \"экаджук\",
        \"el\": \"грэчаская\",
        \"en\": \"англійская\",
        \"en_AU\": \"аўстралійская англійская\",
        \"en_CA\": \"канадская англійская\",
        \"en_GB\": \"брытанская англійская\",
        \"en_US\": \"амерыканская англійская\",
        \"eo\": \"эсперанта\",
        \"es\": \"іспанская\",
        \"es_419\": \"лацінаамерыканская іспанская\",
        \"es_ES\": \"еўрапейская іспанская\",
        \"es_MX\": \"мексіканская іспанская\",
        \"et\": \"эстонская\",
        \"eu\": \"баскская\",
        \"ewo\": \"эвонда\",
        \"fa\": \"фарсі\",
        \"ff\": \"фула\",
        \"fi\": \"фінская\",
        \"fil\": \"філіпінская\",
        \"fj\": \"фіджыйская\",
        \"fo\": \"фарэрская\",
        \"fon\": \"фон\",
        \"fr\": \"французская\",
        \"fr_CA\": \"канадская французская\",
        \"fr_CH\": \"швейцарская французская\",
        \"fro\": \"старафранцузская\",
        \"fur\": \"фрыульская\",
        \"fy\": \"заходняя фрызская\",
        \"ga\": \"ірландская\",
        \"gaa\": \"га\",
        \"gag\": \"гагаузская\",
        \"gd\": \"шатландская гэльская\",
        \"gez\": \"геэз\",
        \"gil\": \"кірыбаці\",
        \"gl\": \"галісійская\",
        \"gn\": \"гуарані\",
        \"gor\": \"гарантала\",
        \"grc\": \"старажытнагрэчаская\",
        \"gsw\": \"швейцарская нямецкая\",
        \"gu\": \"гуджараці\",
        \"guz\": \"гусіі\",
        \"gv\": \"мэнская\",
        \"gwi\": \"гуіч’ін\",
        \"ha\": \"хауса\",
        \"haw\": \"гавайская\",
        \"he\": \"іўрыт\",
        \"hi\": \"хіндзі\",
        \"hil\": \"хілігайнон\",
        \"hmn\": \"хмонг\",
        \"hr\": \"харвацкая\",
        \"hsb\": \"верхнялужыцкая\",
        \"ht\": \"гаіцянская крэольская\",
        \"hu\": \"венгерская\",
        \"hup\": \"хупа\",
        \"hy\": \"армянская\",
        \"hz\": \"герэра\",
        \"ia\": \"інтэрлінгва\",
        \"iba\": \"ібан\",
        \"ibb\": \"ібібія\",
        \"id\": \"інданезійская\",
        \"ie\": \"інтэрлінгвэ\",
        \"ig\": \"ігба\",
        \"ii\": \"сычуаньская йі\",
        \"ilo\": \"ілакана\",
        \"inh\": \"інгушская\",
        \"io\": \"іда\",
        \"is\": \"ісландская\",
        \"it\": \"італьянская\",
        \"iu\": \"інуктытут\",
        \"ja\": \"японская\",
        \"jbo\": \"ложбан\",
        \"jgo\": \"нгомба\",
        \"jmc\": \"мачамбэ\",
        \"jv\": \"яванская\",
        \"ka\": \"грузінская\",
        \"kab\": \"кабільская\",
        \"kac\": \"качынская\",
        \"kaj\": \"дджу\",
        \"kam\": \"камба\",
        \"kbd\": \"кабардзінская\",
        \"kcg\": \"т’яп\",
        \"kde\": \"макондэ\",
        \"kea\": \"кабувердыяну\",
        \"kfo\": \"кора\",
        \"kha\": \"кхасі\",
        \"khq\": \"койра чыіні\",
        \"ki\": \"кікуйю\",
        \"kj\": \"куаньяма\",
        \"kk\": \"казахская\",
        \"kkj\": \"како\",
        \"kl\": \"грэнландская\",
        \"kln\": \"календжын\",
        \"km\": \"кхмерская\",
        \"kmb\": \"кімбунду\",
        \"kn\": \"канада\",
        \"ko\": \"карэйская\",
        \"koi\": \"комі-пярмяцкая\",
        \"kok\": \"канкані\",
        \"kpe\": \"кпеле\",
        \"kr\": \"кануры\",
        \"krc\": \"карачай-балкарская\",
        \"krl\": \"карэльская\",
        \"kru\": \"курух\",
        \"ks\": \"кашмірская\",
        \"ksb\": \"шамбала\",
        \"ksf\": \"бафія\",
        \"ksh\": \"кёльнская\",
        \"ku\": \"курдская\",
        \"kum\": \"кумыцкая\",
        \"kv\": \"комі\",
        \"kw\": \"корнская\",
        \"ky\": \"кіргізская\",
        \"la\": \"лацінская\",
        \"lad\": \"ладына\",
        \"lag\": \"лангі\",
        \"lb\": \"люксембургская\",
        \"lez\": \"лезгінская\",
        \"lg\": \"ганда\",
        \"li\": \"лімбургская\",
        \"lkt\": \"лакота\",
        \"ln\": \"лінгала\",
        \"lo\": \"лаоская\",
        \"lol\": \"монга\",
        \"loz\": \"лозі\",
        \"lrc\": \"паўночная луры\",
        \"lt\": \"літоўская\",
        \"lu\": \"луба-катанга\",
        \"lua\": \"луба-касаі\",
        \"lun\": \"лунда\",
        \"luo\": \"луо\",
        \"lus\": \"мізо\",
        \"luy\": \"луйя\",
        \"lv\": \"латышская\",
        \"mad\": \"мадурская\",
        \"mag\": \"магахі\",
        \"mai\": \"майтхілі\",
        \"mak\": \"макасар\",
        \"man\": \"мандынг\",
        \"mas\": \"маасай\",
        \"mdf\": \"макшанская\",
        \"men\": \"мендэ\",
        \"mer\": \"меру\",
        \"mfe\": \"марысьен\",
        \"mg\": \"малагасійская\",
        \"mgh\": \"макуўа-меета\",
        \"mgo\": \"мета\",
        \"mh\": \"маршальская\",
        \"mi\": \"маары\",
        \"mic\": \"мікмак\",
        \"min\": \"мінангкабау\",
        \"mk\": \"македонская\",
        \"ml\": \"малаялам\",
        \"mn\": \"мангольская\",
        \"mni\": \"мейтэй\",
        \"moh\": \"мохак\",
        \"mos\": \"мосі\",
        \"mr\": \"маратхі\",
        \"ms\": \"малайская\",
        \"mt\": \"мальтыйская\",
        \"mua\": \"мунданг\",
        \"mus\": \"мускогі\",
        \"mwl\": \"мірандыйская\",
        \"my\": \"бірманская\",
        \"myv\": \"эрзянская\",
        \"mzn\": \"мазандэранская\",
        \"na\": \"науру\",
        \"nap\": \"неапалітанская\",
        \"naq\": \"нама\",
        \"nb\": \"нарвежская (букмол)\",
        \"nd\": \"паўночная ндэбеле\",
        \"nds\": \"ніжненямецкая\",
        \"nds_NL\": \"ніжнесаксонская\",
        \"ne\": \"непальская\",
        \"new\": \"неўары\",
        \"ng\": \"ндонга\",
        \"nia\": \"ніас\",
        \"niu\": \"ніўэ\",
        \"nl\": \"нідэрландская\",
        \"nl_BE\": \"фламандская\",
        \"nmg\": \"нгумба\",
        \"nn\": \"нарвежская (нюношк)\",
        \"nnh\": \"нг’ембон\",
        \"no\": \"нарвежская\",
        \"nog\": \"нагайская\",
        \"non\": \"старанарвежская\",
        \"nqo\": \"нко\",
        \"nr\": \"паўднёвая ндэбеле\",
        \"nso\": \"паўночная сота\",
        \"nus\": \"нуэр\",
        \"nv\": \"наваха\",
        \"ny\": \"ньянджа\",
        \"nyn\": \"ньянколе\",
        \"oc\": \"аксітанская\",
        \"oj\": \"аджыбва\",
        \"om\": \"арома\",
        \"or\": \"орыя\",
        \"os\": \"асецінская\",
        \"pa\": \"панджабі\",
        \"pag\": \"пангасінан\",
        \"pam\": \"пампанга\",
        \"pap\": \"пап’яменту\",
        \"pau\": \"палау\",
        \"pcm\": \"нігерыйскі піджын\",
        \"peo\": \"стараперсідская\",
        \"phn\": \"фінікійская\",
        \"pl\": \"польская\",
        \"prg\": \"пруская\",
        \"pro\": \"стараправансальская\",
        \"ps\": \"пушту\",
        \"pt\": \"партугальская\",
        \"pt_BR\": \"бразільская партугальская\",
        \"pt_PT\": \"еўрапейская партугальская\",
        \"qu\": \"кечуа\",
        \"quc\": \"кічэ\",
        \"raj\": \"раджастханская\",
        \"rap\": \"рапануі\",
        \"rar\": \"раратонг\",
        \"rm\": \"рэтараманская\",
        \"rn\": \"рундзі\",
        \"ro\": \"румынская\",
        \"ro_MD\": \"малдаўская\",
        \"rof\": \"ромба\",
        \"root\": \"корань\",
        \"ru\": \"руская\",
        \"rup\": \"арумунская\",
        \"rw\": \"руанда\",
        \"rwk\": \"руа\",
        \"sa\": \"санскрыт\",
        \"sad\": \"сандаўэ\",
        \"sah\": \"якуцкая\",
        \"saq\": \"самбуру\",
        \"sat\": \"санталі\",
        \"sba\": \"нгамбай\",
        \"sbp\": \"сангу\",
        \"sc\": \"сардзінская\",
        \"scn\": \"сіцылійская\",
        \"sco\": \"шатландская\",
        \"sd\": \"сіндхі\",
        \"sdh\": \"паўднёвакурдская\",
        \"se\": \"паўночнасаамская\",
        \"seh\": \"сена\",
        \"ses\": \"кайрабора сэні\",
        \"sg\": \"санга\",
        \"sga\": \"стараірландская\",
        \"sh\": \"сербскахарвацкая\",
        \"shi\": \"ташэльхіт\",
        \"shn\": \"шан\",
        \"si\": \"сінгальская\",
        \"sk\": \"славацкая\",
        \"sl\": \"славенская\",
        \"sm\": \"самоа\",
        \"sma\": \"паўднёвасаамская\",
        \"smj\": \"луле-саамская\",
        \"smn\": \"інары-саамская\",
        \"sms\": \"колта-саамская\",
        \"sn\": \"шона\",
        \"snk\": \"санінке\",
        \"so\": \"самалі\",
        \"sq\": \"албанская\",
        \"sr\": \"сербская\",
        \"srn\": \"сранан-тонга\",
        \"ss\": \"суаці\",
        \"ssy\": \"саха\",
        \"st\": \"сесута\",
        \"su\": \"сунда\",
        \"suk\": \"сукума\",
        \"sux\": \"шумерская\",
        \"sv\": \"шведская\",
        \"sw\": \"суахілі\",
        \"sw_CD\": \"кангалезская суахілі\",
        \"swb\": \"каморская\",
        \"syr\": \"сірыйская\",
        \"ta\": \"тамільская\",
        \"te\": \"тэлугу\",
        \"tem\": \"тэмнэ\",
        \"teo\": \"тэсо\",
        \"tet\": \"тэтум\",
        \"tg\": \"таджыкская\",
        \"th\": \"тайская\",
        \"ti\": \"тыгрынья\",
        \"tig\": \"тыгрэ\",
        \"tk\": \"туркменская\",
        \"tlh\": \"клінган\",
        \"tn\": \"тсвана\",
        \"to\": \"танганская\",
        \"tpi\": \"ток-пісін\",
        \"tr\": \"турэцкая\",
        \"trv\": \"тарока\",
        \"ts\": \"тсонга\",
        \"tt\": \"татарская\",
        \"tum\": \"тумбука\",
        \"tvl\": \"тувалу\",
        \"twq\": \"тасаўак\",
        \"ty\": \"таіці\",
        \"tyv\": \"тувінская\",
        \"tzm\": \"сярэднеатлаская тамазігхт\",
        \"udm\": \"удмурцкая\",
        \"ug\": \"уйгурская\",
        \"uk\": \"украінская\",
        \"umb\": \"умбунду\",
        \"ur\": \"урду\",
        \"uz\": \"узбекская\",
        \"vai\": \"ваі\",
        \"ve\": \"венда\",
        \"vi\": \"в’етнамская\",
        \"vo\": \"валапюк\",
        \"vun\": \"вунджо\",
        \"wa\": \"валонская\",
        \"wae\": \"вальшская\",
        \"wal\": \"волайта\",
        \"war\": \"варай\",
        \"wbp\": \"варлпіры\",
        \"wo\": \"валоф\",
        \"xal\": \"калмыцкая\",
        \"xh\": \"коса\",
        \"xog\": \"сога\",
        \"yav\": \"янгбэн\",
        \"ybb\": \"йемба\",
        \"yi\": \"ідыш\",
        \"yo\": \"ёруба\",
        \"yue\": \"кантонскі дыялект кітайскай\",
        \"zap\": \"сапатэк\",
        \"zgh\": \"стандартная мараканская тамазіхт\",
        \"zh\": \"кітайская\",
        \"zh_Hans\": \"кітайская (спрошчаныя іерогліфы)\",
        \"zh_Hant\": \"кітайская (традыцыйныя іерогліфы)\",
        \"zu\": \"зулу\",
        \"zun\": \"зуні\",
        \"zza\": \"зазакі\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/be.json";
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
        \"aa\": \"афарская\",
        \"ab\": \"абхазская\",
        \"ace\": \"ачэх\",
        \"ada\": \"адангмэ\",
        \"ady\": \"адыгейская\",
        \"af\": \"афрыкаанс\",
        \"agq\": \"агем\",
        \"ain\": \"айнская\",
        \"ak\": \"акан\",
        \"akk\": \"акадская\",
        \"ale\": \"алеуцкая\",
        \"alt\": \"паўднёваалтайская\",
        \"am\": \"амхарская\",
        \"an\": \"арагонская\",
        \"ang\": \"стараанглійская\",
        \"anp\": \"ангіка\",
        \"ar\": \"арабская\",
        \"ar_001\": \"сучасная стандартная арабская\",
        \"arc\": \"арамейская\",
        \"arn\": \"мапудунгун\",
        \"arp\": \"арапаха\",
        \"as\": \"асамская\",
        \"asa\": \"асу\",
        \"ast\": \"астурыйская\",
        \"av\": \"аварская\",
        \"awa\": \"авадхі\",
        \"ay\": \"аймара\",
        \"az\": \"азербайджанская\",
        \"ba\": \"башкірская\",
        \"ban\": \"балійская\",
        \"bas\": \"басаа\",
        \"be\": \"беларуская\",
        \"bem\": \"бемба\",
        \"bez\": \"бена\",
        \"bg\": \"балгарская\",
        \"bgn\": \"заходняя белуджская\",
        \"bho\": \"бхаджпуры\",
        \"bi\": \"біслама\",
        \"bin\": \"эда\",
        \"bla\": \"блэкфут\",
        \"bm\": \"бамбара\",
        \"bn\": \"бенгальская\",
        \"bo\": \"тыбецкая\",
        \"br\": \"брэтонская\",
        \"brx\": \"бода\",
        \"bs\": \"баснійская\",
        \"bua\": \"бурацкая\",
        \"bug\": \"бугіс\",
        \"byn\": \"білен\",
        \"ca\": \"каталанская\",
        \"ccp\": \"чакма\",
        \"ce\": \"чачэнская\",
        \"ceb\": \"себуана\",
        \"cgg\": \"чыга\",
        \"ch\": \"чамора\",
        \"chb\": \"чыбча\",
        \"chk\": \"чуук\",
        \"chm\": \"мары\",
        \"cho\": \"чокта\",
        \"chr\": \"чэрокі\",
        \"chy\": \"шэйен\",
        \"ckb\": \"цэнтральнакурдская\",
        \"co\": \"карсіканская\",
        \"cop\": \"копцкая\",
        \"crs\": \"сэсэльва\",
        \"cs\": \"чэшская\",
        \"cu\": \"царкоўнаславянская\",
        \"cv\": \"чувашская\",
        \"cy\": \"валійская\",
        \"da\": \"дацкая\",
        \"dak\": \"дакота\",
        \"dar\": \"даргінская\",
        \"dav\": \"таіта\",
        \"de\": \"нямецкая\",
        \"de_AT\": \"аўстрыйская нямецкая\",
        \"de_CH\": \"швейцарская літаратурная нямецкая\",
        \"dgr\": \"догрыб\",
        \"dje\": \"зарма\",
        \"dsb\": \"ніжнялужыцкая\",
        \"dua\": \"дуала\",
        \"dv\": \"мальдыўская\",
        \"dyo\": \"джола-фоньі\",
        \"dz\": \"дзонг-кэ\",
        \"dzg\": \"дазага\",
        \"ebu\": \"эмбу\",
        \"ee\": \"эве\",
        \"efi\": \"эфік\",
        \"egy\": \"старажытнаегіпецкая\",
        \"eka\": \"экаджук\",
        \"el\": \"грэчаская\",
        \"en\": \"англійская\",
        \"en_AU\": \"аўстралійская англійская\",
        \"en_CA\": \"канадская англійская\",
        \"en_GB\": \"брытанская англійская\",
        \"en_US\": \"амерыканская англійская\",
        \"eo\": \"эсперанта\",
        \"es\": \"іспанская\",
        \"es_419\": \"лацінаамерыканская іспанская\",
        \"es_ES\": \"еўрапейская іспанская\",
        \"es_MX\": \"мексіканская іспанская\",
        \"et\": \"эстонская\",
        \"eu\": \"баскская\",
        \"ewo\": \"эвонда\",
        \"fa\": \"фарсі\",
        \"ff\": \"фула\",
        \"fi\": \"фінская\",
        \"fil\": \"філіпінская\",
        \"fj\": \"фіджыйская\",
        \"fo\": \"фарэрская\",
        \"fon\": \"фон\",
        \"fr\": \"французская\",
        \"fr_CA\": \"канадская французская\",
        \"fr_CH\": \"швейцарская французская\",
        \"fro\": \"старафранцузская\",
        \"fur\": \"фрыульская\",
        \"fy\": \"заходняя фрызская\",
        \"ga\": \"ірландская\",
        \"gaa\": \"га\",
        \"gag\": \"гагаузская\",
        \"gd\": \"шатландская гэльская\",
        \"gez\": \"геэз\",
        \"gil\": \"кірыбаці\",
        \"gl\": \"галісійская\",
        \"gn\": \"гуарані\",
        \"gor\": \"гарантала\",
        \"grc\": \"старажытнагрэчаская\",
        \"gsw\": \"швейцарская нямецкая\",
        \"gu\": \"гуджараці\",
        \"guz\": \"гусіі\",
        \"gv\": \"мэнская\",
        \"gwi\": \"гуіч’ін\",
        \"ha\": \"хауса\",
        \"haw\": \"гавайская\",
        \"he\": \"іўрыт\",
        \"hi\": \"хіндзі\",
        \"hil\": \"хілігайнон\",
        \"hmn\": \"хмонг\",
        \"hr\": \"харвацкая\",
        \"hsb\": \"верхнялужыцкая\",
        \"ht\": \"гаіцянская крэольская\",
        \"hu\": \"венгерская\",
        \"hup\": \"хупа\",
        \"hy\": \"армянская\",
        \"hz\": \"герэра\",
        \"ia\": \"інтэрлінгва\",
        \"iba\": \"ібан\",
        \"ibb\": \"ібібія\",
        \"id\": \"інданезійская\",
        \"ie\": \"інтэрлінгвэ\",
        \"ig\": \"ігба\",
        \"ii\": \"сычуаньская йі\",
        \"ilo\": \"ілакана\",
        \"inh\": \"інгушская\",
        \"io\": \"іда\",
        \"is\": \"ісландская\",
        \"it\": \"італьянская\",
        \"iu\": \"інуктытут\",
        \"ja\": \"японская\",
        \"jbo\": \"ложбан\",
        \"jgo\": \"нгомба\",
        \"jmc\": \"мачамбэ\",
        \"jv\": \"яванская\",
        \"ka\": \"грузінская\",
        \"kab\": \"кабільская\",
        \"kac\": \"качынская\",
        \"kaj\": \"дджу\",
        \"kam\": \"камба\",
        \"kbd\": \"кабардзінская\",
        \"kcg\": \"т’яп\",
        \"kde\": \"макондэ\",
        \"kea\": \"кабувердыяну\",
        \"kfo\": \"кора\",
        \"kha\": \"кхасі\",
        \"khq\": \"койра чыіні\",
        \"ki\": \"кікуйю\",
        \"kj\": \"куаньяма\",
        \"kk\": \"казахская\",
        \"kkj\": \"како\",
        \"kl\": \"грэнландская\",
        \"kln\": \"календжын\",
        \"km\": \"кхмерская\",
        \"kmb\": \"кімбунду\",
        \"kn\": \"канада\",
        \"ko\": \"карэйская\",
        \"koi\": \"комі-пярмяцкая\",
        \"kok\": \"канкані\",
        \"kpe\": \"кпеле\",
        \"kr\": \"кануры\",
        \"krc\": \"карачай-балкарская\",
        \"krl\": \"карэльская\",
        \"kru\": \"курух\",
        \"ks\": \"кашмірская\",
        \"ksb\": \"шамбала\",
        \"ksf\": \"бафія\",
        \"ksh\": \"кёльнская\",
        \"ku\": \"курдская\",
        \"kum\": \"кумыцкая\",
        \"kv\": \"комі\",
        \"kw\": \"корнская\",
        \"ky\": \"кіргізская\",
        \"la\": \"лацінская\",
        \"lad\": \"ладына\",
        \"lag\": \"лангі\",
        \"lb\": \"люксембургская\",
        \"lez\": \"лезгінская\",
        \"lg\": \"ганда\",
        \"li\": \"лімбургская\",
        \"lkt\": \"лакота\",
        \"ln\": \"лінгала\",
        \"lo\": \"лаоская\",
        \"lol\": \"монга\",
        \"loz\": \"лозі\",
        \"lrc\": \"паўночная луры\",
        \"lt\": \"літоўская\",
        \"lu\": \"луба-катанга\",
        \"lua\": \"луба-касаі\",
        \"lun\": \"лунда\",
        \"luo\": \"луо\",
        \"lus\": \"мізо\",
        \"luy\": \"луйя\",
        \"lv\": \"латышская\",
        \"mad\": \"мадурская\",
        \"mag\": \"магахі\",
        \"mai\": \"майтхілі\",
        \"mak\": \"макасар\",
        \"man\": \"мандынг\",
        \"mas\": \"маасай\",
        \"mdf\": \"макшанская\",
        \"men\": \"мендэ\",
        \"mer\": \"меру\",
        \"mfe\": \"марысьен\",
        \"mg\": \"малагасійская\",
        \"mgh\": \"макуўа-меета\",
        \"mgo\": \"мета\",
        \"mh\": \"маршальская\",
        \"mi\": \"маары\",
        \"mic\": \"мікмак\",
        \"min\": \"мінангкабау\",
        \"mk\": \"македонская\",
        \"ml\": \"малаялам\",
        \"mn\": \"мангольская\",
        \"mni\": \"мейтэй\",
        \"moh\": \"мохак\",
        \"mos\": \"мосі\",
        \"mr\": \"маратхі\",
        \"ms\": \"малайская\",
        \"mt\": \"мальтыйская\",
        \"mua\": \"мунданг\",
        \"mus\": \"мускогі\",
        \"mwl\": \"мірандыйская\",
        \"my\": \"бірманская\",
        \"myv\": \"эрзянская\",
        \"mzn\": \"мазандэранская\",
        \"na\": \"науру\",
        \"nap\": \"неапалітанская\",
        \"naq\": \"нама\",
        \"nb\": \"нарвежская (букмол)\",
        \"nd\": \"паўночная ндэбеле\",
        \"nds\": \"ніжненямецкая\",
        \"nds_NL\": \"ніжнесаксонская\",
        \"ne\": \"непальская\",
        \"new\": \"неўары\",
        \"ng\": \"ндонга\",
        \"nia\": \"ніас\",
        \"niu\": \"ніўэ\",
        \"nl\": \"нідэрландская\",
        \"nl_BE\": \"фламандская\",
        \"nmg\": \"нгумба\",
        \"nn\": \"нарвежская (нюношк)\",
        \"nnh\": \"нг’ембон\",
        \"no\": \"нарвежская\",
        \"nog\": \"нагайская\",
        \"non\": \"старанарвежская\",
        \"nqo\": \"нко\",
        \"nr\": \"паўднёвая ндэбеле\",
        \"nso\": \"паўночная сота\",
        \"nus\": \"нуэр\",
        \"nv\": \"наваха\",
        \"ny\": \"ньянджа\",
        \"nyn\": \"ньянколе\",
        \"oc\": \"аксітанская\",
        \"oj\": \"аджыбва\",
        \"om\": \"арома\",
        \"or\": \"орыя\",
        \"os\": \"асецінская\",
        \"pa\": \"панджабі\",
        \"pag\": \"пангасінан\",
        \"pam\": \"пампанга\",
        \"pap\": \"пап’яменту\",
        \"pau\": \"палау\",
        \"pcm\": \"нігерыйскі піджын\",
        \"peo\": \"стараперсідская\",
        \"phn\": \"фінікійская\",
        \"pl\": \"польская\",
        \"prg\": \"пруская\",
        \"pro\": \"стараправансальская\",
        \"ps\": \"пушту\",
        \"pt\": \"партугальская\",
        \"pt_BR\": \"бразільская партугальская\",
        \"pt_PT\": \"еўрапейская партугальская\",
        \"qu\": \"кечуа\",
        \"quc\": \"кічэ\",
        \"raj\": \"раджастханская\",
        \"rap\": \"рапануі\",
        \"rar\": \"раратонг\",
        \"rm\": \"рэтараманская\",
        \"rn\": \"рундзі\",
        \"ro\": \"румынская\",
        \"ro_MD\": \"малдаўская\",
        \"rof\": \"ромба\",
        \"root\": \"корань\",
        \"ru\": \"руская\",
        \"rup\": \"арумунская\",
        \"rw\": \"руанда\",
        \"rwk\": \"руа\",
        \"sa\": \"санскрыт\",
        \"sad\": \"сандаўэ\",
        \"sah\": \"якуцкая\",
        \"saq\": \"самбуру\",
        \"sat\": \"санталі\",
        \"sba\": \"нгамбай\",
        \"sbp\": \"сангу\",
        \"sc\": \"сардзінская\",
        \"scn\": \"сіцылійская\",
        \"sco\": \"шатландская\",
        \"sd\": \"сіндхі\",
        \"sdh\": \"паўднёвакурдская\",
        \"se\": \"паўночнасаамская\",
        \"seh\": \"сена\",
        \"ses\": \"кайрабора сэні\",
        \"sg\": \"санга\",
        \"sga\": \"стараірландская\",
        \"sh\": \"сербскахарвацкая\",
        \"shi\": \"ташэльхіт\",
        \"shn\": \"шан\",
        \"si\": \"сінгальская\",
        \"sk\": \"славацкая\",
        \"sl\": \"славенская\",
        \"sm\": \"самоа\",
        \"sma\": \"паўднёвасаамская\",
        \"smj\": \"луле-саамская\",
        \"smn\": \"інары-саамская\",
        \"sms\": \"колта-саамская\",
        \"sn\": \"шона\",
        \"snk\": \"санінке\",
        \"so\": \"самалі\",
        \"sq\": \"албанская\",
        \"sr\": \"сербская\",
        \"srn\": \"сранан-тонга\",
        \"ss\": \"суаці\",
        \"ssy\": \"саха\",
        \"st\": \"сесута\",
        \"su\": \"сунда\",
        \"suk\": \"сукума\",
        \"sux\": \"шумерская\",
        \"sv\": \"шведская\",
        \"sw\": \"суахілі\",
        \"sw_CD\": \"кангалезская суахілі\",
        \"swb\": \"каморская\",
        \"syr\": \"сірыйская\",
        \"ta\": \"тамільская\",
        \"te\": \"тэлугу\",
        \"tem\": \"тэмнэ\",
        \"teo\": \"тэсо\",
        \"tet\": \"тэтум\",
        \"tg\": \"таджыкская\",
        \"th\": \"тайская\",
        \"ti\": \"тыгрынья\",
        \"tig\": \"тыгрэ\",
        \"tk\": \"туркменская\",
        \"tlh\": \"клінган\",
        \"tn\": \"тсвана\",
        \"to\": \"танганская\",
        \"tpi\": \"ток-пісін\",
        \"tr\": \"турэцкая\",
        \"trv\": \"тарока\",
        \"ts\": \"тсонга\",
        \"tt\": \"татарская\",
        \"tum\": \"тумбука\",
        \"tvl\": \"тувалу\",
        \"twq\": \"тасаўак\",
        \"ty\": \"таіці\",
        \"tyv\": \"тувінская\",
        \"tzm\": \"сярэднеатлаская тамазігхт\",
        \"udm\": \"удмурцкая\",
        \"ug\": \"уйгурская\",
        \"uk\": \"украінская\",
        \"umb\": \"умбунду\",
        \"ur\": \"урду\",
        \"uz\": \"узбекская\",
        \"vai\": \"ваі\",
        \"ve\": \"венда\",
        \"vi\": \"в’етнамская\",
        \"vo\": \"валапюк\",
        \"vun\": \"вунджо\",
        \"wa\": \"валонская\",
        \"wae\": \"вальшская\",
        \"wal\": \"волайта\",
        \"war\": \"варай\",
        \"wbp\": \"варлпіры\",
        \"wo\": \"валоф\",
        \"xal\": \"калмыцкая\",
        \"xh\": \"коса\",
        \"xog\": \"сога\",
        \"yav\": \"янгбэн\",
        \"ybb\": \"йемба\",
        \"yi\": \"ідыш\",
        \"yo\": \"ёруба\",
        \"yue\": \"кантонскі дыялект кітайскай\",
        \"zap\": \"сапатэк\",
        \"zgh\": \"стандартная мараканская тамазіхт\",
        \"zh\": \"кітайская\",
        \"zh_Hans\": \"кітайская (спрошчаныя іерогліфы)\",
        \"zh_Hant\": \"кітайская (традыцыйныя іерогліфы)\",
        \"zu\": \"зулу\",
        \"zun\": \"зуні\",
        \"zza\": \"зазакі\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/be.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/be.json");
    }
}