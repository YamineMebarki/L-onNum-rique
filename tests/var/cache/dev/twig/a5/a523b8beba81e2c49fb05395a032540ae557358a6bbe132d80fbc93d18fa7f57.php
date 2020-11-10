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

/* vendor/symfony/intl/Resources/data/languages/tk.json */
class __TwigTemplate_a075af8b8fdfc731b11960214206f1953f93df5dbb3a8c067d2c7a658a88ba46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/tk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/tk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"afar dili\",
        \"ab\": \"abhaz dili\",
        \"ace\": \"açeh dili\",
        \"ada\": \"adangme dili\",
        \"ady\": \"adygeý dili\",
        \"af\": \"afrikaans dili\",
        \"agq\": \"ahem dili\",
        \"ain\": \"aýn dili\",
        \"ak\": \"akan dili\",
        \"ale\": \"aleut dili\",
        \"alt\": \"günorta Altaý dili\",
        \"am\": \"amhar dili\",
        \"an\": \"aragon dili\",
        \"anp\": \"angika dili\",
        \"ar\": \"arap dili\",
        \"ar_001\": \"häzirki zaman standart arap dili\",
        \"arn\": \"mapuçe dili\",
        \"arp\": \"arapaho dili\",
        \"as\": \"assam dili\",
        \"asa\": \"asu dili\",
        \"ast\": \"asturiý dili\",
        \"av\": \"awar dili\",
        \"awa\": \"awadhi dili\",
        \"ay\": \"aýmara dili\",
        \"az\": \"azerbaýjan dili\",
        \"ba\": \"başgyrt dili\",
        \"ban\": \"baliý dili\",
        \"bas\": \"basaa dili\",
        \"be\": \"belarus dili\",
        \"bem\": \"bemba dili\",
        \"bez\": \"bena dili\",
        \"bg\": \"bolgar dili\",
        \"bho\": \"bhojpuri dili\",
        \"bi\": \"bislama dili\",
        \"bin\": \"bini dili\",
        \"bla\": \"siksika dili\",
        \"bm\": \"bamana\",
        \"bn\": \"bengal dili\",
        \"bo\": \"tibet dili\",
        \"br\": \"breton dili\",
        \"brx\": \"bodo dili\",
        \"bs\": \"boşnak dili\",
        \"bug\": \"bugiý dili\",
        \"byn\": \"blin dili\",
        \"ca\": \"katalan dili\",
        \"ccp\": \"çakma dili\",
        \"ce\": \"çeçen dili\",
        \"ceb\": \"sebuan dili\",
        \"cgg\": \"kiga\",
        \"ch\": \"çamorro\",
        \"chk\": \"çuuk dili\",
        \"chm\": \"mariý dili\",
        \"cho\": \"çokto\",
        \"chr\": \"çeroki\",
        \"chy\": \"şaýenn dili\",
        \"ckb\": \"merkezi kürt dili\",
        \"co\": \"korsikan dili\",
        \"crs\": \"seselwa kreole-fransuz dili\",
        \"cs\": \"çeh dili\",
        \"cu\": \"buthana slaw dili\",
        \"cv\": \"çuwaş dili\",
        \"cy\": \"walliý dili\",
        \"da\": \"daniýa dili\",
        \"dak\": \"dakota dili\",
        \"dar\": \"dargi dili\",
        \"dav\": \"taita dili\",
        \"de\": \"nemes dili\",
        \"de_CH\": \"ýokarky nemes dili (Şweýsariýa)\",
        \"dgr\": \"dogrib dili\",
        \"dje\": \"zarma dili\",
        \"dsb\": \"aşaky lužits dili\",
        \"dua\": \"duala dili\",
        \"dv\": \"diwehi dili\",
        \"dyo\": \"ýola-fonýi dili\",
        \"dz\": \"dzong-ke dili\",
        \"dzg\": \"daza dili\",
        \"ebu\": \"embu dili\",
        \"ee\": \"ewe dili\",
        \"efi\": \"efik dili\",
        \"eka\": \"ekajuk dili\",
        \"el\": \"grek dili\",
        \"en\": \"iňlis dili\",
        \"en_GB\": \"iňlis dili (Beýik Britaniýa)\",
        \"en_US\": \"iňlis dili (Amerika)\",
        \"eo\": \"esperanto dili\",
        \"es\": \"ispan dili\",
        \"es_ES\": \"ispan dili (Ýewropa)\",
        \"et\": \"eston dili\",
        \"eu\": \"bask dili\",
        \"ewo\": \"ewondo dili\",
        \"fa\": \"pars dili\",
        \"ff\": \"fula dili\",
        \"fi\": \"fin dili\",
        \"fil\": \"filippin dili\",
        \"fj\": \"fiji dili\",
        \"fo\": \"farer dili\",
        \"fon\": \"fon dili\",
        \"fr\": \"fransuz dili\",
        \"fur\": \"friul dili\",
        \"fy\": \"günbatar friz dili\",
        \"ga\": \"irland dili\",
        \"gaa\": \"ga dili\",
        \"gd\": \"şotland kelt dili\",
        \"gez\": \"geez dili\",
        \"gil\": \"gilbert dili\",
        \"gl\": \"galisiý dili\",
        \"gn\": \"guarani dili\",
        \"gor\": \"gorontalo dili\",
        \"gsw\": \"nemes dili (Şweýsariýa)\",
        \"gu\": \"gujarati dili\",
        \"guz\": \"gusii dili\",
        \"gv\": \"men dili\",
        \"gwi\": \"gwiçin dili\",
        \"ha\": \"hausa dili\",
        \"haw\": \"gawaý dili\",
        \"he\": \"ýewreý dili\",
        \"hi\": \"hindi dili\",
        \"hil\": \"hiligaýnon dili\",
        \"hmn\": \"hmong dili\",
        \"hr\": \"horwat dili\",
        \"hsb\": \"ýokarky lužits dili\",
        \"ht\": \"gaiti kreol dili\",
        \"hu\": \"wenger dili\",
        \"hup\": \"hupa\",
        \"hy\": \"ermeni dili\",
        \"hz\": \"gerero dili\",
        \"ia\": \"interlingwa dili\",
        \"iba\": \"iban dili\",
        \"ibb\": \"ibibio dili\",
        \"id\": \"indonez dili\",
        \"ig\": \"igbo dili\",
        \"ii\": \"syçuan-i dili\",
        \"ilo\": \"iloko dili\",
        \"inh\": \"inguş dili\",
        \"io\": \"ido dili\",
        \"is\": \"island dili\",
        \"it\": \"italýan dili\",
        \"iu\": \"inuktitut dili\",
        \"ja\": \"ýapon dili\",
        \"jbo\": \"lojban dili\",
        \"jgo\": \"ngomba dili\",
        \"jmc\": \"maçame dili\",
        \"jv\": \"ýawa dili\",
        \"ka\": \"gruzin dili\",
        \"kab\": \"kabil dili\",
        \"kac\": \"kaçin dili\",
        \"kaj\": \"ju dili\",
        \"kam\": \"kamba dili\",
        \"kbd\": \"kabardin dili\",
        \"kcg\": \"tiap dili\",
        \"kde\": \"makonde dili\",
        \"kea\": \"kabuwerdianu dili\",
        \"kfo\": \"koro dili\",
        \"kha\": \"khasi dili\",
        \"khq\": \"koýra-Çini dili\",
        \"ki\": \"kikuýu dili\",
        \"kj\": \"kwanýama dili\",
        \"kk\": \"gazak dili\",
        \"kkj\": \"kako dili\",
        \"kl\": \"grenland dili\",
        \"kln\": \"kalenjin dili\",
        \"km\": \"khmer dili\",
        \"kmb\": \"kimbundu dili\",
        \"kn\": \"kannada dili\",
        \"ko\": \"koreý dili\",
        \"kok\": \"konkani dili\",
        \"kpe\": \"kpelle dili\",
        \"kr\": \"kanuri\",
        \"krc\": \"karaçaý-balkar dili\",
        \"krl\": \"karel dili\",
        \"kru\": \"kuruh dili\",
        \"ks\": \"kaşmiri dili\",
        \"ksb\": \"şambala dili\",
        \"ksf\": \"bafia dili\",
        \"ksh\": \"keln dili\",
        \"ku\": \"kürt dili\",
        \"kum\": \"kumyk dili\",
        \"kv\": \"komi dili\",
        \"kw\": \"korn dili\",
        \"ky\": \"gyrgyz dili\",
        \"la\": \"latyn dili\",
        \"lad\": \"ladino dili\",
        \"lag\": \"langi dili\",
        \"lb\": \"lýuksemburg dili\",
        \"lez\": \"lezgin dili\",
        \"lg\": \"ganda dili\",
        \"li\": \"limburg dili\",
        \"lkt\": \"lakota dili\",
        \"ln\": \"lingala dili\",
        \"lo\": \"laos dili\",
        \"loz\": \"lozi dili\",
        \"lrc\": \"demirgazyk luri dili\",
        \"lt\": \"litwa dili\",
        \"lu\": \"luba-katanga dili\",
        \"lua\": \"luba-Lulua dili\",
        \"lun\": \"lunda dili\",
        \"luo\": \"luo dili\",
        \"lus\": \"mizo dili\",
        \"luy\": \"luýýa dili\",
        \"lv\": \"latyş dili\",
        \"mad\": \"madur dili\",
        \"mag\": \"magahi dili\",
        \"mai\": \"maýthili dili\",
        \"mak\": \"makasar dili\",
        \"mas\": \"masai dili\",
        \"mdf\": \"mokşa dili\",
        \"men\": \"mende dili\",
        \"mer\": \"meru dili\",
        \"mfe\": \"morisýen dili\",
        \"mg\": \"malagasiý dili\",
        \"mgh\": \"makuwa-mito dili\",
        \"mgo\": \"meta dili\",
        \"mh\": \"marşall dili\",
        \"mi\": \"maori dili\",
        \"mic\": \"mikmak dili\",
        \"min\": \"minangkabau dili\",
        \"mk\": \"makedon dili\",
        \"ml\": \"malaýalam dili\",
        \"mn\": \"mongol dili\",
        \"mni\": \"manipuri dili\",
        \"moh\": \"mogauk dili\",
        \"mos\": \"mossi dili\",
        \"mr\": \"marathi dili\",
        \"ms\": \"malaý dili\",
        \"mt\": \"malta dili\",
        \"mua\": \"mundang dili\",
        \"mus\": \"krik dili\",
        \"mwl\": \"mirand dili\",
        \"my\": \"birma dili\",
        \"myv\": \"erzýan dili\",
        \"mzn\": \"mazanderan dili\",
        \"na\": \"nauru dili\",
        \"nap\": \"neapolitan dili\",
        \"naq\": \"nama dili\",
        \"nb\": \"norwegiýa bukmol dili\",
        \"nd\": \"demirgazyk ndebele dili\",
        \"nds\": \"aşaky nemes dili\",
        \"ne\": \"nepal dili\",
        \"new\": \"newari dili\",
        \"ng\": \"ndonga dili\",
        \"nia\": \"nias dili\",
        \"niu\": \"niue dili\",
        \"nl\": \"niderland dili\",
        \"nl_BE\": \"flamand dili\",
        \"nmg\": \"kwasio dili\",
        \"nn\": \"norwegiýa nýunorsk dili\",
        \"nnh\": \"ngembun dili\",
        \"nog\": \"nogaý dili\",
        \"nqo\": \"nko dili\",
        \"nr\": \"günorta ndebele dili\",
        \"nso\": \"demirgazyk soto dili\",
        \"nus\": \"nuer dili\",
        \"nv\": \"nawaho dili\",
        \"ny\": \"nýanja dili\",
        \"nyn\": \"nýankole dili\",
        \"oc\": \"oksitan dili\",
        \"om\": \"oromo dili\",
        \"or\": \"oriýa dili\",
        \"os\": \"osetin dili\",
        \"pa\": \"penjab dili\",
        \"pag\": \"pangansinan dili\",
        \"pam\": \"kapampangan dili\",
        \"pap\": \"papýamento dili\",
        \"pau\": \"palau dili\",
        \"pcm\": \"nigeriý-pijin dili\",
        \"pl\": \"polýak dili\",
        \"prg\": \"prussiýa dili\",
        \"ps\": \"peştun dili\",
        \"pt\": \"portugal dili\",
        \"pt_PT\": \"portugal dili (Ýewropa)\",
        \"qu\": \"keçua dili\",
        \"quc\": \"kiçe dili\",
        \"rap\": \"rapanuý dili\",
        \"rar\": \"kuk dili\",
        \"rm\": \"retoroman dili\",
        \"rn\": \"rundi dili\",
        \"ro\": \"rumyn dili\",
        \"ro_MD\": \"moldaw dili\",
        \"rof\": \"rombo dili\",
        \"root\": \"kök\",
        \"ru\": \"rus dili\",
        \"rup\": \"arumyn dili\",
        \"rw\": \"kinýaruanda dili\",
        \"rwk\": \"rwa dili\",
        \"sa\": \"sanskrit dili\",
        \"sad\": \"sandawe dili\",
        \"sah\": \"ýakut dili\",
        \"saq\": \"samburu dili\",
        \"sat\": \"santali dili\",
        \"sba\": \"ngambaý dili\",
        \"sbp\": \"sangu dili\",
        \"sc\": \"sardin dili\",
        \"scn\": \"sisiliýa dili\",
        \"sco\": \"şotland dili\",
        \"sd\": \"sindhi dili\",
        \"se\": \"demirgazyk saam dili\",
        \"seh\": \"sena dili\",
        \"ses\": \"koýraboro-senni dili\",
        \"sg\": \"sango dili\",
        \"shi\": \"tahelhit dili\",
        \"shn\": \"şan dili\",
        \"si\": \"singal dili\",
        \"sk\": \"slowak dili\",
        \"sl\": \"slowen dili\",
        \"sm\": \"samoa dili\",
        \"sma\": \"günorta saam dili\",
        \"smj\": \"lule-saam dili\",
        \"smn\": \"inari-saam dili\",
        \"sms\": \"skolt-saam dili\",
        \"sn\": \"şona dili\",
        \"snk\": \"soninke dili\",
        \"so\": \"somali dili\",
        \"sq\": \"alban dili\",
        \"sr\": \"serb dili\",
        \"srn\": \"sranan-tongo dili\",
        \"ss\": \"swati dili\",
        \"ssy\": \"saho dili\",
        \"st\": \"günorta soto dili\",
        \"su\": \"sundan dili\",
        \"suk\": \"sukuma dili\",
        \"sv\": \"şwed dili\",
        \"sw\": \"suahili dili\",
        \"sw_CD\": \"kongo suahili dili\",
        \"swb\": \"komor dili\",
        \"syr\": \"siriýa dili\",
        \"ta\": \"tamil dili\",
        \"te\": \"telugu dili\",
        \"tem\": \"temne dili\",
        \"teo\": \"teso dili\",
        \"tet\": \"tetum dili\",
        \"tg\": \"täjik dili\",
        \"th\": \"taý dili\",
        \"ti\": \"tigrinýa dili\",
        \"tig\": \"tigre dili\",
        \"tk\": \"türkmen dili\",
        \"tlh\": \"klingon dili\",
        \"tn\": \"tswana dili\",
        \"to\": \"tongan dili\",
        \"tpi\": \"tok-pisin dili\",
        \"tr\": \"türk dili\",
        \"trv\": \"taroko dili\",
        \"ts\": \"tsonga dili\",
        \"tt\": \"tatar dili\",
        \"tum\": \"tumbuka dili\",
        \"tvl\": \"tuwalu dili\",
        \"twq\": \"tasawak dili\",
        \"ty\": \"taiti dili\",
        \"tyv\": \"tuwa dili\",
        \"tzm\": \"orta-atlas tamazight dili\",
        \"udm\": \"udmurt dili\",
        \"ug\": \"uýgur dili\",
        \"uk\": \"ukrain dili\",
        \"umb\": \"umbundu dili\",
        \"ur\": \"urdu\",
        \"uz\": \"özbek dili\",
        \"vai\": \"wai dili\",
        \"ve\": \"wenda dili\",
        \"vi\": \"wýetnam dili\",
        \"vo\": \"wolapýuk dili\",
        \"vun\": \"wunýo dili\",
        \"wa\": \"wallon dili\",
        \"wae\": \"walzer dili\",
        \"wal\": \"wolaýta dili\",
        \"war\": \"waraý dili\",
        \"wo\": \"wolof dili\",
        \"xal\": \"galmyk dili\",
        \"xh\": \"kosa dili\",
        \"xog\": \"soga dili\",
        \"yav\": \"ýangben dili\",
        \"ybb\": \"ýemba dili\",
        \"yi\": \"idiş dili\",
        \"yo\": \"ýoruba dili\",
        \"yue\": \"kanton dili\",
        \"zgh\": \"standart Marokko tamazight dili\",
        \"zh\": \"hytaý dili\",
        \"zh_Hans\": \"ýönekeýleşdirilen hytaý dili\",
        \"zh_Hant\": \"adaty hytaý dili\",
        \"zu\": \"zulu dili\",
        \"zun\": \"zuni dili\",
        \"zza\": \"zazaki dili\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/tk.json";
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
        \"aa\": \"afar dili\",
        \"ab\": \"abhaz dili\",
        \"ace\": \"açeh dili\",
        \"ada\": \"adangme dili\",
        \"ady\": \"adygeý dili\",
        \"af\": \"afrikaans dili\",
        \"agq\": \"ahem dili\",
        \"ain\": \"aýn dili\",
        \"ak\": \"akan dili\",
        \"ale\": \"aleut dili\",
        \"alt\": \"günorta Altaý dili\",
        \"am\": \"amhar dili\",
        \"an\": \"aragon dili\",
        \"anp\": \"angika dili\",
        \"ar\": \"arap dili\",
        \"ar_001\": \"häzirki zaman standart arap dili\",
        \"arn\": \"mapuçe dili\",
        \"arp\": \"arapaho dili\",
        \"as\": \"assam dili\",
        \"asa\": \"asu dili\",
        \"ast\": \"asturiý dili\",
        \"av\": \"awar dili\",
        \"awa\": \"awadhi dili\",
        \"ay\": \"aýmara dili\",
        \"az\": \"azerbaýjan dili\",
        \"ba\": \"başgyrt dili\",
        \"ban\": \"baliý dili\",
        \"bas\": \"basaa dili\",
        \"be\": \"belarus dili\",
        \"bem\": \"bemba dili\",
        \"bez\": \"bena dili\",
        \"bg\": \"bolgar dili\",
        \"bho\": \"bhojpuri dili\",
        \"bi\": \"bislama dili\",
        \"bin\": \"bini dili\",
        \"bla\": \"siksika dili\",
        \"bm\": \"bamana\",
        \"bn\": \"bengal dili\",
        \"bo\": \"tibet dili\",
        \"br\": \"breton dili\",
        \"brx\": \"bodo dili\",
        \"bs\": \"boşnak dili\",
        \"bug\": \"bugiý dili\",
        \"byn\": \"blin dili\",
        \"ca\": \"katalan dili\",
        \"ccp\": \"çakma dili\",
        \"ce\": \"çeçen dili\",
        \"ceb\": \"sebuan dili\",
        \"cgg\": \"kiga\",
        \"ch\": \"çamorro\",
        \"chk\": \"çuuk dili\",
        \"chm\": \"mariý dili\",
        \"cho\": \"çokto\",
        \"chr\": \"çeroki\",
        \"chy\": \"şaýenn dili\",
        \"ckb\": \"merkezi kürt dili\",
        \"co\": \"korsikan dili\",
        \"crs\": \"seselwa kreole-fransuz dili\",
        \"cs\": \"çeh dili\",
        \"cu\": \"buthana slaw dili\",
        \"cv\": \"çuwaş dili\",
        \"cy\": \"walliý dili\",
        \"da\": \"daniýa dili\",
        \"dak\": \"dakota dili\",
        \"dar\": \"dargi dili\",
        \"dav\": \"taita dili\",
        \"de\": \"nemes dili\",
        \"de_CH\": \"ýokarky nemes dili (Şweýsariýa)\",
        \"dgr\": \"dogrib dili\",
        \"dje\": \"zarma dili\",
        \"dsb\": \"aşaky lužits dili\",
        \"dua\": \"duala dili\",
        \"dv\": \"diwehi dili\",
        \"dyo\": \"ýola-fonýi dili\",
        \"dz\": \"dzong-ke dili\",
        \"dzg\": \"daza dili\",
        \"ebu\": \"embu dili\",
        \"ee\": \"ewe dili\",
        \"efi\": \"efik dili\",
        \"eka\": \"ekajuk dili\",
        \"el\": \"grek dili\",
        \"en\": \"iňlis dili\",
        \"en_GB\": \"iňlis dili (Beýik Britaniýa)\",
        \"en_US\": \"iňlis dili (Amerika)\",
        \"eo\": \"esperanto dili\",
        \"es\": \"ispan dili\",
        \"es_ES\": \"ispan dili (Ýewropa)\",
        \"et\": \"eston dili\",
        \"eu\": \"bask dili\",
        \"ewo\": \"ewondo dili\",
        \"fa\": \"pars dili\",
        \"ff\": \"fula dili\",
        \"fi\": \"fin dili\",
        \"fil\": \"filippin dili\",
        \"fj\": \"fiji dili\",
        \"fo\": \"farer dili\",
        \"fon\": \"fon dili\",
        \"fr\": \"fransuz dili\",
        \"fur\": \"friul dili\",
        \"fy\": \"günbatar friz dili\",
        \"ga\": \"irland dili\",
        \"gaa\": \"ga dili\",
        \"gd\": \"şotland kelt dili\",
        \"gez\": \"geez dili\",
        \"gil\": \"gilbert dili\",
        \"gl\": \"galisiý dili\",
        \"gn\": \"guarani dili\",
        \"gor\": \"gorontalo dili\",
        \"gsw\": \"nemes dili (Şweýsariýa)\",
        \"gu\": \"gujarati dili\",
        \"guz\": \"gusii dili\",
        \"gv\": \"men dili\",
        \"gwi\": \"gwiçin dili\",
        \"ha\": \"hausa dili\",
        \"haw\": \"gawaý dili\",
        \"he\": \"ýewreý dili\",
        \"hi\": \"hindi dili\",
        \"hil\": \"hiligaýnon dili\",
        \"hmn\": \"hmong dili\",
        \"hr\": \"horwat dili\",
        \"hsb\": \"ýokarky lužits dili\",
        \"ht\": \"gaiti kreol dili\",
        \"hu\": \"wenger dili\",
        \"hup\": \"hupa\",
        \"hy\": \"ermeni dili\",
        \"hz\": \"gerero dili\",
        \"ia\": \"interlingwa dili\",
        \"iba\": \"iban dili\",
        \"ibb\": \"ibibio dili\",
        \"id\": \"indonez dili\",
        \"ig\": \"igbo dili\",
        \"ii\": \"syçuan-i dili\",
        \"ilo\": \"iloko dili\",
        \"inh\": \"inguş dili\",
        \"io\": \"ido dili\",
        \"is\": \"island dili\",
        \"it\": \"italýan dili\",
        \"iu\": \"inuktitut dili\",
        \"ja\": \"ýapon dili\",
        \"jbo\": \"lojban dili\",
        \"jgo\": \"ngomba dili\",
        \"jmc\": \"maçame dili\",
        \"jv\": \"ýawa dili\",
        \"ka\": \"gruzin dili\",
        \"kab\": \"kabil dili\",
        \"kac\": \"kaçin dili\",
        \"kaj\": \"ju dili\",
        \"kam\": \"kamba dili\",
        \"kbd\": \"kabardin dili\",
        \"kcg\": \"tiap dili\",
        \"kde\": \"makonde dili\",
        \"kea\": \"kabuwerdianu dili\",
        \"kfo\": \"koro dili\",
        \"kha\": \"khasi dili\",
        \"khq\": \"koýra-Çini dili\",
        \"ki\": \"kikuýu dili\",
        \"kj\": \"kwanýama dili\",
        \"kk\": \"gazak dili\",
        \"kkj\": \"kako dili\",
        \"kl\": \"grenland dili\",
        \"kln\": \"kalenjin dili\",
        \"km\": \"khmer dili\",
        \"kmb\": \"kimbundu dili\",
        \"kn\": \"kannada dili\",
        \"ko\": \"koreý dili\",
        \"kok\": \"konkani dili\",
        \"kpe\": \"kpelle dili\",
        \"kr\": \"kanuri\",
        \"krc\": \"karaçaý-balkar dili\",
        \"krl\": \"karel dili\",
        \"kru\": \"kuruh dili\",
        \"ks\": \"kaşmiri dili\",
        \"ksb\": \"şambala dili\",
        \"ksf\": \"bafia dili\",
        \"ksh\": \"keln dili\",
        \"ku\": \"kürt dili\",
        \"kum\": \"kumyk dili\",
        \"kv\": \"komi dili\",
        \"kw\": \"korn dili\",
        \"ky\": \"gyrgyz dili\",
        \"la\": \"latyn dili\",
        \"lad\": \"ladino dili\",
        \"lag\": \"langi dili\",
        \"lb\": \"lýuksemburg dili\",
        \"lez\": \"lezgin dili\",
        \"lg\": \"ganda dili\",
        \"li\": \"limburg dili\",
        \"lkt\": \"lakota dili\",
        \"ln\": \"lingala dili\",
        \"lo\": \"laos dili\",
        \"loz\": \"lozi dili\",
        \"lrc\": \"demirgazyk luri dili\",
        \"lt\": \"litwa dili\",
        \"lu\": \"luba-katanga dili\",
        \"lua\": \"luba-Lulua dili\",
        \"lun\": \"lunda dili\",
        \"luo\": \"luo dili\",
        \"lus\": \"mizo dili\",
        \"luy\": \"luýýa dili\",
        \"lv\": \"latyş dili\",
        \"mad\": \"madur dili\",
        \"mag\": \"magahi dili\",
        \"mai\": \"maýthili dili\",
        \"mak\": \"makasar dili\",
        \"mas\": \"masai dili\",
        \"mdf\": \"mokşa dili\",
        \"men\": \"mende dili\",
        \"mer\": \"meru dili\",
        \"mfe\": \"morisýen dili\",
        \"mg\": \"malagasiý dili\",
        \"mgh\": \"makuwa-mito dili\",
        \"mgo\": \"meta dili\",
        \"mh\": \"marşall dili\",
        \"mi\": \"maori dili\",
        \"mic\": \"mikmak dili\",
        \"min\": \"minangkabau dili\",
        \"mk\": \"makedon dili\",
        \"ml\": \"malaýalam dili\",
        \"mn\": \"mongol dili\",
        \"mni\": \"manipuri dili\",
        \"moh\": \"mogauk dili\",
        \"mos\": \"mossi dili\",
        \"mr\": \"marathi dili\",
        \"ms\": \"malaý dili\",
        \"mt\": \"malta dili\",
        \"mua\": \"mundang dili\",
        \"mus\": \"krik dili\",
        \"mwl\": \"mirand dili\",
        \"my\": \"birma dili\",
        \"myv\": \"erzýan dili\",
        \"mzn\": \"mazanderan dili\",
        \"na\": \"nauru dili\",
        \"nap\": \"neapolitan dili\",
        \"naq\": \"nama dili\",
        \"nb\": \"norwegiýa bukmol dili\",
        \"nd\": \"demirgazyk ndebele dili\",
        \"nds\": \"aşaky nemes dili\",
        \"ne\": \"nepal dili\",
        \"new\": \"newari dili\",
        \"ng\": \"ndonga dili\",
        \"nia\": \"nias dili\",
        \"niu\": \"niue dili\",
        \"nl\": \"niderland dili\",
        \"nl_BE\": \"flamand dili\",
        \"nmg\": \"kwasio dili\",
        \"nn\": \"norwegiýa nýunorsk dili\",
        \"nnh\": \"ngembun dili\",
        \"nog\": \"nogaý dili\",
        \"nqo\": \"nko dili\",
        \"nr\": \"günorta ndebele dili\",
        \"nso\": \"demirgazyk soto dili\",
        \"nus\": \"nuer dili\",
        \"nv\": \"nawaho dili\",
        \"ny\": \"nýanja dili\",
        \"nyn\": \"nýankole dili\",
        \"oc\": \"oksitan dili\",
        \"om\": \"oromo dili\",
        \"or\": \"oriýa dili\",
        \"os\": \"osetin dili\",
        \"pa\": \"penjab dili\",
        \"pag\": \"pangansinan dili\",
        \"pam\": \"kapampangan dili\",
        \"pap\": \"papýamento dili\",
        \"pau\": \"palau dili\",
        \"pcm\": \"nigeriý-pijin dili\",
        \"pl\": \"polýak dili\",
        \"prg\": \"prussiýa dili\",
        \"ps\": \"peştun dili\",
        \"pt\": \"portugal dili\",
        \"pt_PT\": \"portugal dili (Ýewropa)\",
        \"qu\": \"keçua dili\",
        \"quc\": \"kiçe dili\",
        \"rap\": \"rapanuý dili\",
        \"rar\": \"kuk dili\",
        \"rm\": \"retoroman dili\",
        \"rn\": \"rundi dili\",
        \"ro\": \"rumyn dili\",
        \"ro_MD\": \"moldaw dili\",
        \"rof\": \"rombo dili\",
        \"root\": \"kök\",
        \"ru\": \"rus dili\",
        \"rup\": \"arumyn dili\",
        \"rw\": \"kinýaruanda dili\",
        \"rwk\": \"rwa dili\",
        \"sa\": \"sanskrit dili\",
        \"sad\": \"sandawe dili\",
        \"sah\": \"ýakut dili\",
        \"saq\": \"samburu dili\",
        \"sat\": \"santali dili\",
        \"sba\": \"ngambaý dili\",
        \"sbp\": \"sangu dili\",
        \"sc\": \"sardin dili\",
        \"scn\": \"sisiliýa dili\",
        \"sco\": \"şotland dili\",
        \"sd\": \"sindhi dili\",
        \"se\": \"demirgazyk saam dili\",
        \"seh\": \"sena dili\",
        \"ses\": \"koýraboro-senni dili\",
        \"sg\": \"sango dili\",
        \"shi\": \"tahelhit dili\",
        \"shn\": \"şan dili\",
        \"si\": \"singal dili\",
        \"sk\": \"slowak dili\",
        \"sl\": \"slowen dili\",
        \"sm\": \"samoa dili\",
        \"sma\": \"günorta saam dili\",
        \"smj\": \"lule-saam dili\",
        \"smn\": \"inari-saam dili\",
        \"sms\": \"skolt-saam dili\",
        \"sn\": \"şona dili\",
        \"snk\": \"soninke dili\",
        \"so\": \"somali dili\",
        \"sq\": \"alban dili\",
        \"sr\": \"serb dili\",
        \"srn\": \"sranan-tongo dili\",
        \"ss\": \"swati dili\",
        \"ssy\": \"saho dili\",
        \"st\": \"günorta soto dili\",
        \"su\": \"sundan dili\",
        \"suk\": \"sukuma dili\",
        \"sv\": \"şwed dili\",
        \"sw\": \"suahili dili\",
        \"sw_CD\": \"kongo suahili dili\",
        \"swb\": \"komor dili\",
        \"syr\": \"siriýa dili\",
        \"ta\": \"tamil dili\",
        \"te\": \"telugu dili\",
        \"tem\": \"temne dili\",
        \"teo\": \"teso dili\",
        \"tet\": \"tetum dili\",
        \"tg\": \"täjik dili\",
        \"th\": \"taý dili\",
        \"ti\": \"tigrinýa dili\",
        \"tig\": \"tigre dili\",
        \"tk\": \"türkmen dili\",
        \"tlh\": \"klingon dili\",
        \"tn\": \"tswana dili\",
        \"to\": \"tongan dili\",
        \"tpi\": \"tok-pisin dili\",
        \"tr\": \"türk dili\",
        \"trv\": \"taroko dili\",
        \"ts\": \"tsonga dili\",
        \"tt\": \"tatar dili\",
        \"tum\": \"tumbuka dili\",
        \"tvl\": \"tuwalu dili\",
        \"twq\": \"tasawak dili\",
        \"ty\": \"taiti dili\",
        \"tyv\": \"tuwa dili\",
        \"tzm\": \"orta-atlas tamazight dili\",
        \"udm\": \"udmurt dili\",
        \"ug\": \"uýgur dili\",
        \"uk\": \"ukrain dili\",
        \"umb\": \"umbundu dili\",
        \"ur\": \"urdu\",
        \"uz\": \"özbek dili\",
        \"vai\": \"wai dili\",
        \"ve\": \"wenda dili\",
        \"vi\": \"wýetnam dili\",
        \"vo\": \"wolapýuk dili\",
        \"vun\": \"wunýo dili\",
        \"wa\": \"wallon dili\",
        \"wae\": \"walzer dili\",
        \"wal\": \"wolaýta dili\",
        \"war\": \"waraý dili\",
        \"wo\": \"wolof dili\",
        \"xal\": \"galmyk dili\",
        \"xh\": \"kosa dili\",
        \"xog\": \"soga dili\",
        \"yav\": \"ýangben dili\",
        \"ybb\": \"ýemba dili\",
        \"yi\": \"idiş dili\",
        \"yo\": \"ýoruba dili\",
        \"yue\": \"kanton dili\",
        \"zgh\": \"standart Marokko tamazight dili\",
        \"zh\": \"hytaý dili\",
        \"zh_Hans\": \"ýönekeýleşdirilen hytaý dili\",
        \"zh_Hant\": \"adaty hytaý dili\",
        \"zu\": \"zulu dili\",
        \"zun\": \"zuni dili\",
        \"zza\": \"zazaki dili\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/tk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/tk.json");
    }
}
