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

/* vendor/symfony/intl/Resources/data/languages/af.json */
class __TwigTemplate_3887ed541a65abaca594ff437d2d4d5c0ba06959660717ef266284c5092c497b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/af.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/af.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"Afar\",
        \"ab\": \"Abkasies\",
        \"ace\": \"Atsjenees\",
        \"ach\": \"Akoli\",
        \"ada\": \"Adangme\",
        \"ady\": \"Adyghe\",
        \"af\": \"Afrikaans\",
        \"agq\": \"Aghem\",
        \"ain\": \"Ainu\",
        \"ak\": \"Akan\",
        \"ale\": \"Aleut\",
        \"alt\": \"Suid-Altai\",
        \"am\": \"Amharies\",
        \"an\": \"Aragonees\",
        \"anp\": \"Angika\",
        \"ar\": \"Arabies\",
        \"ar_001\": \"Moderne Standaardarabies\",
        \"arc\": \"Aramees\",
        \"arn\": \"Mapuche\",
        \"arp\": \"Arapaho\",
        \"as\": \"Assamees\",
        \"asa\": \"Asu\",
        \"ast\": \"Asturies\",
        \"av\": \"Avaries\",
        \"awa\": \"Awadhi\",
        \"ay\": \"Aymara\",
        \"az\": \"Azerbeidjans\",
        \"ba\": \"Baskir\",
        \"ban\": \"Balinees\",
        \"bas\": \"Basaa\",
        \"be\": \"Belarussies\",
        \"bem\": \"Bemba\",
        \"bez\": \"Bena\",
        \"bg\": \"Bulgaars\",
        \"bgn\": \"Wes-Balochi\",
        \"bho\": \"Bhojpuri\",
        \"bi\": \"Bislama\",
        \"bin\": \"Bini\",
        \"bla\": \"Siksika\",
        \"bm\": \"Bambara\",
        \"bn\": \"Bengaals\",
        \"bo\": \"Tibettaans\",
        \"br\": \"Bretons\",
        \"brx\": \"Bodo\",
        \"bs\": \"Bosnies\",
        \"bug\": \"Buginees\",
        \"byn\": \"Blin\",
        \"ca\": \"Katalaans\",
        \"ccp\": \"Tsjaakma\",
        \"ce\": \"Tsjetsjeens\",
        \"ceb\": \"Cebuano\",
        \"cgg\": \"Kiga\",
        \"ch\": \"Chamorro\",
        \"chk\": \"Chuukees\",
        \"chm\": \"Mari\",
        \"cho\": \"Choctaw\",
        \"chr\": \"Cherokees\",
        \"chy\": \"Cheyennees\",
        \"ckb\": \"Sorani\",
        \"co\": \"Korsikaans\",
        \"cop\": \"Kopties\",
        \"crs\": \"Seselwa Franskreools\",
        \"cs\": \"Tsjeggies\",
        \"cu\": \"Kerkslawies\",
        \"cv\": \"Chuvash\",
        \"cy\": \"Wallies\",
        \"da\": \"Deens\",
        \"dak\": \"Dakotaans\",
        \"dar\": \"Dakota\",
        \"dav\": \"Taita\",
        \"de\": \"Duits\",
        \"dgr\": \"Dogrib\",
        \"dje\": \"Zarma\",
        \"dsb\": \"Benedesorbies\",
        \"dua\": \"Duala\",
        \"dv\": \"Divehi\",
        \"dyo\": \"Jola-Fonyi\",
        \"dz\": \"Dzongkha\",
        \"dzg\": \"Dazaga\",
        \"ebu\": \"Embu\",
        \"ee\": \"Ewe\",
        \"efi\": \"Efik\",
        \"egy\": \"Antieke Egipties\",
        \"eka\": \"Ekajuk\",
        \"el\": \"Grieks\",
        \"en\": \"Engels\",
        \"en_GB\": \"Engels (VK)\",
        \"en_US\": \"Engels (VSA)\",
        \"eo\": \"Esperanto\",
        \"es\": \"Spaans\",
        \"et\": \"Estnies\",
        \"eu\": \"Baskies\",
        \"ewo\": \"Ewondo\",
        \"fa\": \"Persies\",
        \"ff\": \"Fulah\",
        \"fi\": \"Fins\",
        \"fil\": \"Filippyns\",
        \"fj\": \"Fidjiaans\",
        \"fo\": \"Faroëes\",
        \"fon\": \"Fon\",
        \"fr\": \"Frans\",
        \"fur\": \"Friuliaans\",
        \"fy\": \"Fries\",
        \"ga\": \"Iers\",
        \"gaa\": \"Gaa\",
        \"gag\": \"Gagauz\",
        \"gan\": \"Gan-Sjinees\",
        \"gd\": \"Skotse Gallies\",
        \"gez\": \"Geez\",
        \"gil\": \"Gilbertees\",
        \"gl\": \"Galisies\",
        \"gn\": \"Guarani\",
        \"gor\": \"Gorontalo\",
        \"got\": \"Goties\",
        \"grc\": \"Antieke Grieks\",
        \"gsw\": \"Switserse Duits\",
        \"gu\": \"Goedjarati\",
        \"guz\": \"Gusii\",
        \"gv\": \"Manx\",
        \"gwi\": \"Gwichʼin\",
        \"ha\": \"Hausa\",
        \"hak\": \"Hakka-Sjinees\",
        \"haw\": \"Hawais\",
        \"he\": \"Hebreeus\",
        \"hi\": \"Hindi\",
        \"hil\": \"Hiligaynon\",
        \"hit\": \"Hetities\",
        \"hmn\": \"Hmong\",
        \"hr\": \"Kroaties\",
        \"hsb\": \"Oppersorbies\",
        \"hsn\": \"Xiang-Sjinees\",
        \"ht\": \"Haïtiaans\",
        \"hu\": \"Hongaars\",
        \"hup\": \"Hupa\",
        \"hy\": \"Armeens\",
        \"hz\": \"Herero\",
        \"ia\": \"Interlingua\",
        \"iba\": \"Ibanees\",
        \"ibb\": \"Ibibio\",
        \"id\": \"Indonesies\",
        \"ie\": \"Interlingue\",
        \"ig\": \"Igbo\",
        \"ii\": \"Sichuan Yi\",
        \"ilo\": \"Iloko\",
        \"inh\": \"Ingush\",
        \"io\": \"Ido\",
        \"is\": \"Yslands\",
        \"it\": \"Italiaans\",
        \"iu\": \"Inuïties\",
        \"ja\": \"Japannees\",
        \"jbo\": \"Lojban\",
        \"jgo\": \"Ngomba\",
        \"jmc\": \"Machame\",
        \"jv\": \"Javaans\",
        \"ka\": \"Georgies\",
        \"kab\": \"Kabyle\",
        \"kac\": \"Kachin\",
        \"kaj\": \"Jju\",
        \"kam\": \"Kamba\",
        \"kbd\": \"Kabardiaans\",
        \"kcg\": \"Tyap\",
        \"kde\": \"Makonde\",
        \"kea\": \"Kabuverdianu\",
        \"kfo\": \"Koro\",
        \"kg\": \"Kongolees\",
        \"kha\": \"Khasi\",
        \"khq\": \"Koyra Chiini\",
        \"ki\": \"Kikuyu\",
        \"kj\": \"Kuanyama\",
        \"kk\": \"Kazaks\",
        \"kkj\": \"Kako\",
        \"kl\": \"Kalaallisut\",
        \"kln\": \"Kalenjin\",
        \"km\": \"Khmer\",
        \"kmb\": \"Kimbundu\",
        \"kn\": \"Kannada\",
        \"ko\": \"Koreaans\",
        \"koi\": \"Komi-Permyaks\",
        \"kok\": \"Konkani\",
        \"kpe\": \"Kpellees\",
        \"kr\": \"Kanuri\",
        \"krc\": \"Karachay-Balkar\",
        \"krl\": \"Karelies\",
        \"kru\": \"Kurukh\",
        \"ks\": \"Kasjmirs\",
        \"ksb\": \"Shambala\",
        \"ksf\": \"Bafia\",
        \"ksh\": \"Keuls\",
        \"ku\": \"Koerdies\",
        \"kum\": \"Kumyk\",
        \"kv\": \"Komi\",
        \"kw\": \"Kornies\",
        \"ky\": \"Kirgisies\",
        \"la\": \"Latyn\",
        \"lad\": \"Ladino\",
        \"lag\": \"Langi\",
        \"lb\": \"Luxemburgs\",
        \"lez\": \"Lezghies\",
        \"lg\": \"Ganda\",
        \"li\": \"Limburgs\",
        \"lkt\": \"Lakota\",
        \"ln\": \"Lingaals\",
        \"lo\": \"Lao\",
        \"loz\": \"Lozi\",
        \"lrc\": \"Noord-Luri\",
        \"lt\": \"Litaus\",
        \"lu\": \"Luba-Katanga\",
        \"lua\": \"Luba-Lulua\",
        \"lun\": \"Lunda\",
        \"luo\": \"Luo\",
        \"lus\": \"Mizo\",
        \"luy\": \"Luyia\",
        \"lv\": \"Letties\",
        \"mad\": \"Madurees\",
        \"mag\": \"Magahi\",
        \"mai\": \"Maithili\",
        \"mak\": \"Makasar\",
        \"mas\": \"Masai\",
        \"mdf\": \"Moksha\",
        \"men\": \"Mende\",
        \"mer\": \"Meru\",
        \"mfe\": \"Morisjen\",
        \"mg\": \"Malgassies\",
        \"mgh\": \"Makhuwa-Meetto\",
        \"mgo\": \"Meta’\",
        \"mh\": \"Marshallees\",
        \"mi\": \"Maori\",
        \"mic\": \"Micmac\",
        \"min\": \"Minangkabaus\",
        \"mk\": \"Masedonies\",
        \"ml\": \"Malabaars\",
        \"mn\": \"Mongools\",
        \"mni\": \"Manipuri\",
        \"moh\": \"Mohawk\",
        \"mos\": \"Mossi\",
        \"mr\": \"Marathi\",
        \"ms\": \"Maleis\",
        \"mt\": \"Maltees\",
        \"mua\": \"Mundang\",
        \"mus\": \"Kreek\",
        \"mwl\": \"Mirandees\",
        \"my\": \"Birmaans\",
        \"myv\": \"Erzya\",
        \"mzn\": \"Masanderani\",
        \"na\": \"Nauru\",
        \"nan\": \"Min Nan-Sjinees\",
        \"nap\": \"Neapolitaans\",
        \"naq\": \"Nama\",
        \"nb\": \"Boeknoors\",
        \"nd\": \"Noord-Ndebele\",
        \"nds\": \"Nederduits\",
        \"nds_NL\": \"Nedersaksies\",
        \"ne\": \"Nepalees\",
        \"new\": \"Newari\",
        \"ng\": \"Ndonga\",
        \"nia\": \"Nias\",
        \"niu\": \"Niueaans\",
        \"nl\": \"Nederlands\",
        \"nl_BE\": \"Vlaams\",
        \"nmg\": \"Kwasio\",
        \"nn\": \"Nuwe Noors\",
        \"nnh\": \"Ngiemboon\",
        \"no\": \"Noors\",
        \"nog\": \"Nogai\",
        \"nqo\": \"N’Ko\",
        \"nr\": \"Suid-Ndebele\",
        \"nso\": \"Noord-Sotho\",
        \"nus\": \"Nuer\",
        \"nv\": \"Navajo\",
        \"ny\": \"Nyanja\",
        \"nyn\": \"Nyankole\",
        \"oc\": \"Oksitaans\",
        \"om\": \"Oromo\",
        \"or\": \"Oriya\",
        \"os\": \"Osseties\",
        \"pa\": \"Pandjabi\",
        \"pag\": \"Pangasinan\",
        \"pam\": \"Pampanga\",
        \"pap\": \"Papiamento\",
        \"pau\": \"Palauaans\",
        \"pcm\": \"Nigeriese Pidgin\",
        \"phn\": \"Fenisies\",
        \"pl\": \"Pools\",
        \"prg\": \"Pruisies\",
        \"ps\": \"Pasjto\",
        \"pt\": \"Portugees\",
        \"qu\": \"Quechua\",
        \"quc\": \"K’iche’\",
        \"rap\": \"Rapanui\",
        \"rar\": \"Rarotongaans\",
        \"rm\": \"Reto-Romaans\",
        \"rn\": \"Rundi\",
        \"ro\": \"Roemeens\",
        \"rof\": \"Rombo\",
        \"root\": \"Root\",
        \"ru\": \"Russies\",
        \"rup\": \"Aromanies\",
        \"rw\": \"Rwandees\",
        \"rwk\": \"Rwa\",
        \"sa\": \"Sanskrit\",
        \"sad\": \"Sandawees\",
        \"sah\": \"Sakhaans\",
        \"saq\": \"Samburu\",
        \"sat\": \"Santalies\",
        \"sba\": \"Ngambay\",
        \"sbp\": \"Sangu\",
        \"sc\": \"Sardinies\",
        \"scn\": \"Sisiliaans\",
        \"sco\": \"Skots\",
        \"sd\": \"Sindhi\",
        \"sdh\": \"Suid-Koerdies\",
        \"se\": \"Noord-Sami\",
        \"seh\": \"Sena\",
        \"ses\": \"Koyraboro Senni\",
        \"sg\": \"Sango\",
        \"sh\": \"Serwo-Kroaties\",
        \"shi\": \"Tachelhit\",
        \"shn\": \"Shan\",
        \"si\": \"Sinhala\",
        \"sk\": \"Slowaaks\",
        \"sl\": \"Sloweens\",
        \"sm\": \"Samoaans\",
        \"sma\": \"Suid-Sami\",
        \"smj\": \"Lule Sami\",
        \"smn\": \"Inari Sami\",
        \"sms\": \"Skolt Sami\",
        \"sn\": \"Shona\",
        \"snk\": \"Soninke\",
        \"so\": \"Somalies\",
        \"sq\": \"Albanees\",
        \"sr\": \"Serwies\",
        \"srn\": \"Sranan Tongo\",
        \"ss\": \"Swazi\",
        \"ssy\": \"Saho\",
        \"st\": \"Suid-Sotho\",
        \"su\": \"Sundanees\",
        \"suk\": \"Sukuma\",
        \"sv\": \"Sweeds\",
        \"sw\": \"Swahili\",
        \"swb\": \"Comoraans\",
        \"syr\": \"Siries\",
        \"ta\": \"Tamil\",
        \"te\": \"Teloegoe\",
        \"tem\": \"Timne\",
        \"teo\": \"Teso\",
        \"tet\": \"Tetoem\",
        \"tg\": \"Tadjiks\",
        \"th\": \"Thai\",
        \"ti\": \"Tigrinya\",
        \"tig\": \"Tigre\",
        \"tk\": \"Turkmeens\",
        \"tlh\": \"Klingon\",
        \"tn\": \"Tswana\",
        \"to\": \"Tongaans\",
        \"tpi\": \"Tok Pisin\",
        \"tr\": \"Turks\",
        \"trv\": \"Taroko\",
        \"ts\": \"Tsonga\",
        \"tt\": \"Tataars\",
        \"tum\": \"Toemboeka\",
        \"tvl\": \"Tuvalu\",
        \"tw\": \"Twi\",
        \"twq\": \"Tasawaq\",
        \"ty\": \"Tahities\",
        \"tyv\": \"Tuvinees\",
        \"tzm\": \"Sentraal-Atlas-Tamazight\",
        \"udm\": \"Udmurt\",
        \"ug\": \"Uighur\",
        \"uk\": \"Oekraïens\",
        \"umb\": \"Umbundu\",
        \"ur\": \"Oerdoe\",
        \"uz\": \"Oezbeeks\",
        \"vai\": \"Vai\",
        \"ve\": \"Venda\",
        \"vi\": \"Viëtnamees\",
        \"vo\": \"Volapük\",
        \"vun\": \"Vunjo\",
        \"wa\": \"Walloon\",
        \"wae\": \"Walser\",
        \"wal\": \"Wolaytta\",
        \"war\": \"Waray\",
        \"wbp\": \"Warlpiri\",
        \"wo\": \"Wolof\",
        \"wuu\": \"Wu-Sjinees\",
        \"xal\": \"Kalmyk\",
        \"xh\": \"Xhosa\",
        \"xog\": \"Soga\",
        \"yav\": \"Yangben\",
        \"ybb\": \"Yemba\",
        \"yi\": \"Jiddisj\",
        \"yo\": \"Yoruba\",
        \"yue\": \"Kantonees\",
        \"zgh\": \"Standaard Marokkaanse Tamazight\",
        \"zh\": \"Chinees\",
        \"zu\": \"Zoeloe\",
        \"zun\": \"Zuni\",
        \"zza\": \"Zaza\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/af.json";
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
        \"aa\": \"Afar\",
        \"ab\": \"Abkasies\",
        \"ace\": \"Atsjenees\",
        \"ach\": \"Akoli\",
        \"ada\": \"Adangme\",
        \"ady\": \"Adyghe\",
        \"af\": \"Afrikaans\",
        \"agq\": \"Aghem\",
        \"ain\": \"Ainu\",
        \"ak\": \"Akan\",
        \"ale\": \"Aleut\",
        \"alt\": \"Suid-Altai\",
        \"am\": \"Amharies\",
        \"an\": \"Aragonees\",
        \"anp\": \"Angika\",
        \"ar\": \"Arabies\",
        \"ar_001\": \"Moderne Standaardarabies\",
        \"arc\": \"Aramees\",
        \"arn\": \"Mapuche\",
        \"arp\": \"Arapaho\",
        \"as\": \"Assamees\",
        \"asa\": \"Asu\",
        \"ast\": \"Asturies\",
        \"av\": \"Avaries\",
        \"awa\": \"Awadhi\",
        \"ay\": \"Aymara\",
        \"az\": \"Azerbeidjans\",
        \"ba\": \"Baskir\",
        \"ban\": \"Balinees\",
        \"bas\": \"Basaa\",
        \"be\": \"Belarussies\",
        \"bem\": \"Bemba\",
        \"bez\": \"Bena\",
        \"bg\": \"Bulgaars\",
        \"bgn\": \"Wes-Balochi\",
        \"bho\": \"Bhojpuri\",
        \"bi\": \"Bislama\",
        \"bin\": \"Bini\",
        \"bla\": \"Siksika\",
        \"bm\": \"Bambara\",
        \"bn\": \"Bengaals\",
        \"bo\": \"Tibettaans\",
        \"br\": \"Bretons\",
        \"brx\": \"Bodo\",
        \"bs\": \"Bosnies\",
        \"bug\": \"Buginees\",
        \"byn\": \"Blin\",
        \"ca\": \"Katalaans\",
        \"ccp\": \"Tsjaakma\",
        \"ce\": \"Tsjetsjeens\",
        \"ceb\": \"Cebuano\",
        \"cgg\": \"Kiga\",
        \"ch\": \"Chamorro\",
        \"chk\": \"Chuukees\",
        \"chm\": \"Mari\",
        \"cho\": \"Choctaw\",
        \"chr\": \"Cherokees\",
        \"chy\": \"Cheyennees\",
        \"ckb\": \"Sorani\",
        \"co\": \"Korsikaans\",
        \"cop\": \"Kopties\",
        \"crs\": \"Seselwa Franskreools\",
        \"cs\": \"Tsjeggies\",
        \"cu\": \"Kerkslawies\",
        \"cv\": \"Chuvash\",
        \"cy\": \"Wallies\",
        \"da\": \"Deens\",
        \"dak\": \"Dakotaans\",
        \"dar\": \"Dakota\",
        \"dav\": \"Taita\",
        \"de\": \"Duits\",
        \"dgr\": \"Dogrib\",
        \"dje\": \"Zarma\",
        \"dsb\": \"Benedesorbies\",
        \"dua\": \"Duala\",
        \"dv\": \"Divehi\",
        \"dyo\": \"Jola-Fonyi\",
        \"dz\": \"Dzongkha\",
        \"dzg\": \"Dazaga\",
        \"ebu\": \"Embu\",
        \"ee\": \"Ewe\",
        \"efi\": \"Efik\",
        \"egy\": \"Antieke Egipties\",
        \"eka\": \"Ekajuk\",
        \"el\": \"Grieks\",
        \"en\": \"Engels\",
        \"en_GB\": \"Engels (VK)\",
        \"en_US\": \"Engels (VSA)\",
        \"eo\": \"Esperanto\",
        \"es\": \"Spaans\",
        \"et\": \"Estnies\",
        \"eu\": \"Baskies\",
        \"ewo\": \"Ewondo\",
        \"fa\": \"Persies\",
        \"ff\": \"Fulah\",
        \"fi\": \"Fins\",
        \"fil\": \"Filippyns\",
        \"fj\": \"Fidjiaans\",
        \"fo\": \"Faroëes\",
        \"fon\": \"Fon\",
        \"fr\": \"Frans\",
        \"fur\": \"Friuliaans\",
        \"fy\": \"Fries\",
        \"ga\": \"Iers\",
        \"gaa\": \"Gaa\",
        \"gag\": \"Gagauz\",
        \"gan\": \"Gan-Sjinees\",
        \"gd\": \"Skotse Gallies\",
        \"gez\": \"Geez\",
        \"gil\": \"Gilbertees\",
        \"gl\": \"Galisies\",
        \"gn\": \"Guarani\",
        \"gor\": \"Gorontalo\",
        \"got\": \"Goties\",
        \"grc\": \"Antieke Grieks\",
        \"gsw\": \"Switserse Duits\",
        \"gu\": \"Goedjarati\",
        \"guz\": \"Gusii\",
        \"gv\": \"Manx\",
        \"gwi\": \"Gwichʼin\",
        \"ha\": \"Hausa\",
        \"hak\": \"Hakka-Sjinees\",
        \"haw\": \"Hawais\",
        \"he\": \"Hebreeus\",
        \"hi\": \"Hindi\",
        \"hil\": \"Hiligaynon\",
        \"hit\": \"Hetities\",
        \"hmn\": \"Hmong\",
        \"hr\": \"Kroaties\",
        \"hsb\": \"Oppersorbies\",
        \"hsn\": \"Xiang-Sjinees\",
        \"ht\": \"Haïtiaans\",
        \"hu\": \"Hongaars\",
        \"hup\": \"Hupa\",
        \"hy\": \"Armeens\",
        \"hz\": \"Herero\",
        \"ia\": \"Interlingua\",
        \"iba\": \"Ibanees\",
        \"ibb\": \"Ibibio\",
        \"id\": \"Indonesies\",
        \"ie\": \"Interlingue\",
        \"ig\": \"Igbo\",
        \"ii\": \"Sichuan Yi\",
        \"ilo\": \"Iloko\",
        \"inh\": \"Ingush\",
        \"io\": \"Ido\",
        \"is\": \"Yslands\",
        \"it\": \"Italiaans\",
        \"iu\": \"Inuïties\",
        \"ja\": \"Japannees\",
        \"jbo\": \"Lojban\",
        \"jgo\": \"Ngomba\",
        \"jmc\": \"Machame\",
        \"jv\": \"Javaans\",
        \"ka\": \"Georgies\",
        \"kab\": \"Kabyle\",
        \"kac\": \"Kachin\",
        \"kaj\": \"Jju\",
        \"kam\": \"Kamba\",
        \"kbd\": \"Kabardiaans\",
        \"kcg\": \"Tyap\",
        \"kde\": \"Makonde\",
        \"kea\": \"Kabuverdianu\",
        \"kfo\": \"Koro\",
        \"kg\": \"Kongolees\",
        \"kha\": \"Khasi\",
        \"khq\": \"Koyra Chiini\",
        \"ki\": \"Kikuyu\",
        \"kj\": \"Kuanyama\",
        \"kk\": \"Kazaks\",
        \"kkj\": \"Kako\",
        \"kl\": \"Kalaallisut\",
        \"kln\": \"Kalenjin\",
        \"km\": \"Khmer\",
        \"kmb\": \"Kimbundu\",
        \"kn\": \"Kannada\",
        \"ko\": \"Koreaans\",
        \"koi\": \"Komi-Permyaks\",
        \"kok\": \"Konkani\",
        \"kpe\": \"Kpellees\",
        \"kr\": \"Kanuri\",
        \"krc\": \"Karachay-Balkar\",
        \"krl\": \"Karelies\",
        \"kru\": \"Kurukh\",
        \"ks\": \"Kasjmirs\",
        \"ksb\": \"Shambala\",
        \"ksf\": \"Bafia\",
        \"ksh\": \"Keuls\",
        \"ku\": \"Koerdies\",
        \"kum\": \"Kumyk\",
        \"kv\": \"Komi\",
        \"kw\": \"Kornies\",
        \"ky\": \"Kirgisies\",
        \"la\": \"Latyn\",
        \"lad\": \"Ladino\",
        \"lag\": \"Langi\",
        \"lb\": \"Luxemburgs\",
        \"lez\": \"Lezghies\",
        \"lg\": \"Ganda\",
        \"li\": \"Limburgs\",
        \"lkt\": \"Lakota\",
        \"ln\": \"Lingaals\",
        \"lo\": \"Lao\",
        \"loz\": \"Lozi\",
        \"lrc\": \"Noord-Luri\",
        \"lt\": \"Litaus\",
        \"lu\": \"Luba-Katanga\",
        \"lua\": \"Luba-Lulua\",
        \"lun\": \"Lunda\",
        \"luo\": \"Luo\",
        \"lus\": \"Mizo\",
        \"luy\": \"Luyia\",
        \"lv\": \"Letties\",
        \"mad\": \"Madurees\",
        \"mag\": \"Magahi\",
        \"mai\": \"Maithili\",
        \"mak\": \"Makasar\",
        \"mas\": \"Masai\",
        \"mdf\": \"Moksha\",
        \"men\": \"Mende\",
        \"mer\": \"Meru\",
        \"mfe\": \"Morisjen\",
        \"mg\": \"Malgassies\",
        \"mgh\": \"Makhuwa-Meetto\",
        \"mgo\": \"Meta’\",
        \"mh\": \"Marshallees\",
        \"mi\": \"Maori\",
        \"mic\": \"Micmac\",
        \"min\": \"Minangkabaus\",
        \"mk\": \"Masedonies\",
        \"ml\": \"Malabaars\",
        \"mn\": \"Mongools\",
        \"mni\": \"Manipuri\",
        \"moh\": \"Mohawk\",
        \"mos\": \"Mossi\",
        \"mr\": \"Marathi\",
        \"ms\": \"Maleis\",
        \"mt\": \"Maltees\",
        \"mua\": \"Mundang\",
        \"mus\": \"Kreek\",
        \"mwl\": \"Mirandees\",
        \"my\": \"Birmaans\",
        \"myv\": \"Erzya\",
        \"mzn\": \"Masanderani\",
        \"na\": \"Nauru\",
        \"nan\": \"Min Nan-Sjinees\",
        \"nap\": \"Neapolitaans\",
        \"naq\": \"Nama\",
        \"nb\": \"Boeknoors\",
        \"nd\": \"Noord-Ndebele\",
        \"nds\": \"Nederduits\",
        \"nds_NL\": \"Nedersaksies\",
        \"ne\": \"Nepalees\",
        \"new\": \"Newari\",
        \"ng\": \"Ndonga\",
        \"nia\": \"Nias\",
        \"niu\": \"Niueaans\",
        \"nl\": \"Nederlands\",
        \"nl_BE\": \"Vlaams\",
        \"nmg\": \"Kwasio\",
        \"nn\": \"Nuwe Noors\",
        \"nnh\": \"Ngiemboon\",
        \"no\": \"Noors\",
        \"nog\": \"Nogai\",
        \"nqo\": \"N’Ko\",
        \"nr\": \"Suid-Ndebele\",
        \"nso\": \"Noord-Sotho\",
        \"nus\": \"Nuer\",
        \"nv\": \"Navajo\",
        \"ny\": \"Nyanja\",
        \"nyn\": \"Nyankole\",
        \"oc\": \"Oksitaans\",
        \"om\": \"Oromo\",
        \"or\": \"Oriya\",
        \"os\": \"Osseties\",
        \"pa\": \"Pandjabi\",
        \"pag\": \"Pangasinan\",
        \"pam\": \"Pampanga\",
        \"pap\": \"Papiamento\",
        \"pau\": \"Palauaans\",
        \"pcm\": \"Nigeriese Pidgin\",
        \"phn\": \"Fenisies\",
        \"pl\": \"Pools\",
        \"prg\": \"Pruisies\",
        \"ps\": \"Pasjto\",
        \"pt\": \"Portugees\",
        \"qu\": \"Quechua\",
        \"quc\": \"K’iche’\",
        \"rap\": \"Rapanui\",
        \"rar\": \"Rarotongaans\",
        \"rm\": \"Reto-Romaans\",
        \"rn\": \"Rundi\",
        \"ro\": \"Roemeens\",
        \"rof\": \"Rombo\",
        \"root\": \"Root\",
        \"ru\": \"Russies\",
        \"rup\": \"Aromanies\",
        \"rw\": \"Rwandees\",
        \"rwk\": \"Rwa\",
        \"sa\": \"Sanskrit\",
        \"sad\": \"Sandawees\",
        \"sah\": \"Sakhaans\",
        \"saq\": \"Samburu\",
        \"sat\": \"Santalies\",
        \"sba\": \"Ngambay\",
        \"sbp\": \"Sangu\",
        \"sc\": \"Sardinies\",
        \"scn\": \"Sisiliaans\",
        \"sco\": \"Skots\",
        \"sd\": \"Sindhi\",
        \"sdh\": \"Suid-Koerdies\",
        \"se\": \"Noord-Sami\",
        \"seh\": \"Sena\",
        \"ses\": \"Koyraboro Senni\",
        \"sg\": \"Sango\",
        \"sh\": \"Serwo-Kroaties\",
        \"shi\": \"Tachelhit\",
        \"shn\": \"Shan\",
        \"si\": \"Sinhala\",
        \"sk\": \"Slowaaks\",
        \"sl\": \"Sloweens\",
        \"sm\": \"Samoaans\",
        \"sma\": \"Suid-Sami\",
        \"smj\": \"Lule Sami\",
        \"smn\": \"Inari Sami\",
        \"sms\": \"Skolt Sami\",
        \"sn\": \"Shona\",
        \"snk\": \"Soninke\",
        \"so\": \"Somalies\",
        \"sq\": \"Albanees\",
        \"sr\": \"Serwies\",
        \"srn\": \"Sranan Tongo\",
        \"ss\": \"Swazi\",
        \"ssy\": \"Saho\",
        \"st\": \"Suid-Sotho\",
        \"su\": \"Sundanees\",
        \"suk\": \"Sukuma\",
        \"sv\": \"Sweeds\",
        \"sw\": \"Swahili\",
        \"swb\": \"Comoraans\",
        \"syr\": \"Siries\",
        \"ta\": \"Tamil\",
        \"te\": \"Teloegoe\",
        \"tem\": \"Timne\",
        \"teo\": \"Teso\",
        \"tet\": \"Tetoem\",
        \"tg\": \"Tadjiks\",
        \"th\": \"Thai\",
        \"ti\": \"Tigrinya\",
        \"tig\": \"Tigre\",
        \"tk\": \"Turkmeens\",
        \"tlh\": \"Klingon\",
        \"tn\": \"Tswana\",
        \"to\": \"Tongaans\",
        \"tpi\": \"Tok Pisin\",
        \"tr\": \"Turks\",
        \"trv\": \"Taroko\",
        \"ts\": \"Tsonga\",
        \"tt\": \"Tataars\",
        \"tum\": \"Toemboeka\",
        \"tvl\": \"Tuvalu\",
        \"tw\": \"Twi\",
        \"twq\": \"Tasawaq\",
        \"ty\": \"Tahities\",
        \"tyv\": \"Tuvinees\",
        \"tzm\": \"Sentraal-Atlas-Tamazight\",
        \"udm\": \"Udmurt\",
        \"ug\": \"Uighur\",
        \"uk\": \"Oekraïens\",
        \"umb\": \"Umbundu\",
        \"ur\": \"Oerdoe\",
        \"uz\": \"Oezbeeks\",
        \"vai\": \"Vai\",
        \"ve\": \"Venda\",
        \"vi\": \"Viëtnamees\",
        \"vo\": \"Volapük\",
        \"vun\": \"Vunjo\",
        \"wa\": \"Walloon\",
        \"wae\": \"Walser\",
        \"wal\": \"Wolaytta\",
        \"war\": \"Waray\",
        \"wbp\": \"Warlpiri\",
        \"wo\": \"Wolof\",
        \"wuu\": \"Wu-Sjinees\",
        \"xal\": \"Kalmyk\",
        \"xh\": \"Xhosa\",
        \"xog\": \"Soga\",
        \"yav\": \"Yangben\",
        \"ybb\": \"Yemba\",
        \"yi\": \"Jiddisj\",
        \"yo\": \"Yoruba\",
        \"yue\": \"Kantonees\",
        \"zgh\": \"Standaard Marokkaanse Tamazight\",
        \"zh\": \"Chinees\",
        \"zu\": \"Zoeloe\",
        \"zun\": \"Zuni\",
        \"zza\": \"Zaza\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/af.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/af.json");
    }
}
