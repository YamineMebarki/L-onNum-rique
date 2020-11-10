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

/* vendor/symfony/intl/Resources/data/regions/ug.json */
class __TwigTemplate_bc0ae606f2e178ea1bcae8bd29016bfe77633fff77e7d40f78b63ec0e3b4f3e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ug.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ug.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"ئاندوررا\",
        \"AE\": \"ئەرەب بىرلەشمە خەلىپىلىكى\",
        \"AF\": \"ئافغانىستان\",
        \"AG\": \"ئانتىگۇئا ۋە باربۇدا\",
        \"AI\": \"ئانگۋىللا\",
        \"AL\": \"ئالبانىيە\",
        \"AM\": \"ئەرمېنىيە\",
        \"AO\": \"ئانگولا\",
        \"AQ\": \"ئانتاركتىكا\",
        \"AR\": \"ئارگېنتىنا\",
        \"AS\": \"ئامېرىكا ساموئا\",
        \"AT\": \"ئاۋىستىرىيە\",
        \"AU\": \"ئاۋسترالىيە\",
        \"AW\": \"ئارۇبا\",
        \"AX\": \"ئالاند ئاراللىرى\",
        \"AZ\": \"ئەزەربەيجان\",
        \"BA\": \"بوسىنىيە ۋە گېرتسېگوۋىنا\",
        \"BB\": \"باربادوس\",
        \"BD\": \"بېنگال\",
        \"BE\": \"بېلگىيە\",
        \"BF\": \"بۇركىنا فاسو\",
        \"BG\": \"بۇلغارىيە\",
        \"BH\": \"بەھرەين\",
        \"BI\": \"بۇرۇندى\",
        \"BJ\": \"بېنىن\",
        \"BL\": \"ساينت بارتېلېمى\",
        \"BM\": \"بېرمۇدا\",
        \"BN\": \"بىرۇنېي\",
        \"BO\": \"بولىۋىيە\",
        \"BQ\": \"كارىب دېڭىزى گوللاندىيە\",
        \"BR\": \"بىرازىلىيە\",
        \"BS\": \"باھاما\",
        \"BT\": \"بۇتان\",
        \"BV\": \"بوۋېت ئارىلى\",
        \"BW\": \"بوتسۋانا\",
        \"BY\": \"بېلارۇسىيە\",
        \"BZ\": \"بېلىز\",
        \"CA\": \"كانادا\",
        \"CC\": \"كوكوس (كىلىڭ) ئاراللىرى\",
        \"CD\": \"كونگو - كىنشاسا\",
        \"CF\": \"ئوتتۇرا ئافرىقا جۇمھۇرىيىتى\",
        \"CG\": \"كونگو - بىراززاۋىل\",
        \"CH\": \"شىۋېتسارىيە\",
        \"CI\": \"كوتې دې ئىۋوئىر\",
        \"CK\": \"كۇك ئاراللىرى\",
        \"CL\": \"چىلى\",
        \"CM\": \"كامېرون\",
        \"CN\": \"جۇڭگو\",
        \"CO\": \"كولومبىيە\",
        \"CR\": \"كوستارىكا\",
        \"CU\": \"كۇبا\",
        \"CV\": \"يېشىل تۇمشۇق\",
        \"CW\": \"كۇراچاۋ\",
        \"CX\": \"مىلاد ئارىلى\",
        \"CY\": \"سىپرۇس\",
        \"CZ\": \"چېخ جۇمھۇرىيىتى\",
        \"DE\": \"گېرمانىيە\",
        \"DJ\": \"جىبۇتى\",
        \"DK\": \"دانىيە\",
        \"DM\": \"دومىنىكا\",
        \"DO\": \"دومىنىكا جۇمھۇرىيىتى\",
        \"DZ\": \"ئالجىرىيە\",
        \"EC\": \"ئېكۋاتور\",
        \"EE\": \"ئېستونىيە\",
        \"EG\": \"مىسىر\",
        \"EH\": \"غەربىي ساخارا\",
        \"ER\": \"ئېرىترىيە\",
        \"ES\": \"ئىسپانىيە\",
        \"ET\": \"ئېفىيوپىيە\",
        \"FI\": \"فىنلاندىيە\",
        \"FJ\": \"فىجى\",
        \"FK\": \"فالكلاند ئاراللىرى\",
        \"FM\": \"مىكرونېزىيە\",
        \"FO\": \"فارو ئاراللىرى\",
        \"FR\": \"فىرانسىيە\",
        \"GA\": \"گابون\",
        \"GB\": \"بىرلەشمە پادىشاھلىق\",
        \"GD\": \"گىرېنادا\",
        \"GE\": \"گىرۇزىيە\",
        \"GF\": \"فىرانسىيەگە قاراشلىق گىۋىيانا\",
        \"GG\": \"گۇرنسېي\",
        \"GH\": \"گانا\",
        \"GI\": \"جەبىلتارىق\",
        \"GL\": \"گىرېنلاندىيە\",
        \"GM\": \"گامبىيە\",
        \"GN\": \"گىۋىنىيە\",
        \"GP\": \"گىۋادېلۇپ\",
        \"GQ\": \"ئېكۋاتور گىۋىنىيەسى\",
        \"GR\": \"گىرېتسىيە\",
        \"GS\": \"جەنۇبىي جورجىيە ۋە جەنۇبىي ساندۋىچ ئاراللىرى\",
        \"GT\": \"گىۋاتېمالا\",
        \"GU\": \"گۇئام\",
        \"GW\": \"گىۋىنىيە بىسسائۇ\",
        \"GY\": \"گىۋىيانا\",
        \"HK\": \"شياڭگاڭ ئالاھىدە مەمۇرىي رايونى (جۇڭگو)\",
        \"HM\": \"ھېرد ئارىلى ۋە ماكدونالد ئاراللىرى\",
        \"HN\": \"ھوندۇراس\",
        \"HR\": \"كىرودىيە\",
        \"HT\": \"ھايتى\",
        \"HU\": \"ۋېنگىرىيە\",
        \"ID\": \"ھىندونېزىيە\",
        \"IE\": \"ئىرېلاندىيە\",
        \"IL\": \"ئىسرائىلىيە\",
        \"IM\": \"مان ئارىلى\",
        \"IN\": \"ھىندىستان\",
        \"IO\": \"ئەنگلىيەگە قاراشلىق ھىندى ئوكيان تېررىتورىيەسى\",
        \"IQ\": \"ئىراق\",
        \"IR\": \"ئىران\",
        \"IS\": \"ئىسلاندىيە\",
        \"IT\": \"ئىتالىيە\",
        \"JE\": \"جېرسېي\",
        \"JM\": \"يامايكا\",
        \"JO\": \"ئىيوردانىيە\",
        \"JP\": \"ياپونىيە\",
        \"KE\": \"كېنىيە\",
        \"KG\": \"قىرغىزىستان\",
        \"KH\": \"كامبودژا\",
        \"KI\": \"كىرىباتى\",
        \"KM\": \"كومورو\",
        \"KN\": \"ساينت كىتىس ۋە نېۋىس\",
        \"KP\": \"چاۋشيەن\",
        \"KR\": \"كورېيە\",
        \"KW\": \"كۇۋەيت\",
        \"KY\": \"كايمان ئاراللىرى\",
        \"KZ\": \"قازاقىستان\",
        \"LA\": \"لائوس\",
        \"LB\": \"لىۋان\",
        \"LC\": \"ساينت لۇسىيە\",
        \"LI\": \"لىكتېنستېين\",
        \"LK\": \"سىرىلانكا\",
        \"LR\": \"لىبېرىيە\",
        \"LS\": \"لېسوتو\",
        \"LT\": \"لىتۋانىيە\",
        \"LU\": \"لىيۇكسېمبۇرگ\",
        \"LV\": \"لاتۋىيە\",
        \"LY\": \"لىۋىيە\",
        \"MA\": \"ماراكەش\",
        \"MC\": \"موناكو\",
        \"MD\": \"مولدوۋا\",
        \"ME\": \"قارا تاغ\",
        \"MF\": \"ساينت مارتىن\",
        \"MG\": \"ماداغاسقار\",
        \"MH\": \"مارشال ئاراللىرى\",
        \"MK\": \"شىمالىي ماكېدونىيە\",
        \"ML\": \"مالى\",
        \"MM\": \"بىرما\",
        \"MN\": \"موڭغۇلىيە\",
        \"MO\": \"ئاۋمېن ئالاھىدە مەمۇرىي رايونى\",
        \"MP\": \"شىمالىي مارىيانا ئاراللىرى\",
        \"MQ\": \"مارتىنىكا\",
        \"MR\": \"ماۋرىتانىيە\",
        \"MS\": \"مونتسېررات\",
        \"MT\": \"مالتا\",
        \"MU\": \"ماۋرىتىيۇس\",
        \"MV\": \"مالدىۋې\",
        \"MW\": \"مالاۋى\",
        \"MX\": \"مېكسىكا\",
        \"MY\": \"مالايسىيا\",
        \"MZ\": \"موزامبىك\",
        \"NA\": \"نامىبىيە\",
        \"NC\": \"يېڭى كالېدونىيە\",
        \"NE\": \"نىگېر\",
        \"NF\": \"نورفولك ئارىلى\",
        \"NG\": \"نىگېرىيە\",
        \"NI\": \"نىكاراگۇئا\",
        \"NL\": \"گوللاندىيە\",
        \"NO\": \"نورۋېگىيە\",
        \"NP\": \"نېپال\",
        \"NR\": \"ناۋرۇ\",
        \"NU\": \"نيۇئې\",
        \"NZ\": \"يېڭى زېلاندىيە\",
        \"OM\": \"ئومان\",
        \"PA\": \"پاناما\",
        \"PE\": \"پېرۇ\",
        \"PF\": \"فىرانسىيەگە قاراشلىق پولىنېزىيە\",
        \"PG\": \"پاپۇئا يېڭى گىۋىنىيەسى\",
        \"PH\": \"فىلىپپىن\",
        \"PK\": \"پاكىستان\",
        \"PL\": \"پولشا\",
        \"PM\": \"ساينت پىيېر ۋە مىكېلون ئاراللىرى\",
        \"PN\": \"پىتكايرن ئاراللىرى\",
        \"PR\": \"پۇئېرتو رىكو\",
        \"PS\": \"پەلەستىن زېمىنى\",
        \"PT\": \"پورتۇگالىيە\",
        \"PW\": \"پالائۇ\",
        \"PY\": \"پاراگۋاي\",
        \"QA\": \"قاتار\",
        \"RE\": \"رېيۇنىيون\",
        \"RO\": \"رومىنىيە\",
        \"RS\": \"سېربىيە\",
        \"RU\": \"رۇسىيە\",
        \"RW\": \"رىۋاندا\",
        \"SA\": \"سەئۇدىي ئەرەبىستان\",
        \"SB\": \"سولومون ئاراللىرى\",
        \"SC\": \"سېيشېل\",
        \"SD\": \"سۇدان\",
        \"SE\": \"شىۋېتسىيە\",
        \"SG\": \"سىنگاپور\",
        \"SH\": \"ساينىت ھېلېنا\",
        \"SI\": \"سىلوۋېنىيە\",
        \"SJ\": \"سىۋالبارد ۋە يان مايېن\",
        \"SK\": \"سىلوۋاكىيە\",
        \"SL\": \"سېررالېئون\",
        \"SM\": \"سان مارىنو\",
        \"SN\": \"سېنېگال\",
        \"SO\": \"سومالى\",
        \"SR\": \"سۇرىنام\",
        \"SS\": \"جەنۇبىي سۇدان\",
        \"ST\": \"سان تومې ۋە پرىنسىپې\",
        \"SV\": \"سالۋادور\",
        \"SX\": \"سىنت مارتېن\",
        \"SY\": \"سۇرىيە\",
        \"SZ\": \"سىۋېزىلاند\",
        \"TC\": \"تۇركس ۋە كايكوس ئاراللىرى\",
        \"TD\": \"چاد\",
        \"TF\": \"فىرانسىيەنىڭ جەنۇبىي زېمىنى\",
        \"TG\": \"توگو\",
        \"TH\": \"تايلاند\",
        \"TJ\": \"تاجىكىستان\",
        \"TK\": \"توكېلاۋ\",
        \"TL\": \"شەرقىي تىمور\",
        \"TM\": \"تۈركمەنىستان\",
        \"TN\": \"تۇنىس\",
        \"TO\": \"تونگا\",
        \"TR\": \"تۈركىيە\",
        \"TT\": \"تىرىنىداد ۋە توباگو\",
        \"TV\": \"تۇۋالۇ\",
        \"TW\": \"تەيۋەن\",
        \"TZ\": \"تانزانىيە\",
        \"UA\": \"ئۇكرائىنا\",
        \"UG\": \"ئۇگاندا\",
        \"UM\": \"ئا ق ش تاشقى ئاراللىرى\",
        \"US\": \"ئامېرىكا قوشما ئىشتاتلىرى\",
        \"UY\": \"ئۇرۇگۋاي\",
        \"UZ\": \"ئۆزبېكىستان\",
        \"VA\": \"ۋاتىكان\",
        \"VC\": \"ساينت ۋىنسېنت ۋە گىرېنادىنېس\",
        \"VE\": \"ۋېنېسۇئېلا\",
        \"VG\": \"ئەنگلىيە ۋىرگىن ئاراللىرى\",
        \"VI\": \"ئا ق ش ۋىرگىن ئاراللىرى\",
        \"VN\": \"ۋىيېتنام\",
        \"VU\": \"ۋانۇئاتۇ\",
        \"WF\": \"ۋاللىس ۋە فۇتۇنا\",
        \"WS\": \"ساموئا\",
        \"YE\": \"يەمەن\",
        \"YT\": \"مايوتى\",
        \"ZA\": \"جەنۇبىي ئافرىقا\",
        \"ZM\": \"زامبىيە\",
        \"ZW\": \"زىمبابۋې\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/ug.json";
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
        \"AD\": \"ئاندوررا\",
        \"AE\": \"ئەرەب بىرلەشمە خەلىپىلىكى\",
        \"AF\": \"ئافغانىستان\",
        \"AG\": \"ئانتىگۇئا ۋە باربۇدا\",
        \"AI\": \"ئانگۋىللا\",
        \"AL\": \"ئالبانىيە\",
        \"AM\": \"ئەرمېنىيە\",
        \"AO\": \"ئانگولا\",
        \"AQ\": \"ئانتاركتىكا\",
        \"AR\": \"ئارگېنتىنا\",
        \"AS\": \"ئامېرىكا ساموئا\",
        \"AT\": \"ئاۋىستىرىيە\",
        \"AU\": \"ئاۋسترالىيە\",
        \"AW\": \"ئارۇبا\",
        \"AX\": \"ئالاند ئاراللىرى\",
        \"AZ\": \"ئەزەربەيجان\",
        \"BA\": \"بوسىنىيە ۋە گېرتسېگوۋىنا\",
        \"BB\": \"باربادوس\",
        \"BD\": \"بېنگال\",
        \"BE\": \"بېلگىيە\",
        \"BF\": \"بۇركىنا فاسو\",
        \"BG\": \"بۇلغارىيە\",
        \"BH\": \"بەھرەين\",
        \"BI\": \"بۇرۇندى\",
        \"BJ\": \"بېنىن\",
        \"BL\": \"ساينت بارتېلېمى\",
        \"BM\": \"بېرمۇدا\",
        \"BN\": \"بىرۇنېي\",
        \"BO\": \"بولىۋىيە\",
        \"BQ\": \"كارىب دېڭىزى گوللاندىيە\",
        \"BR\": \"بىرازىلىيە\",
        \"BS\": \"باھاما\",
        \"BT\": \"بۇتان\",
        \"BV\": \"بوۋېت ئارىلى\",
        \"BW\": \"بوتسۋانا\",
        \"BY\": \"بېلارۇسىيە\",
        \"BZ\": \"بېلىز\",
        \"CA\": \"كانادا\",
        \"CC\": \"كوكوس (كىلىڭ) ئاراللىرى\",
        \"CD\": \"كونگو - كىنشاسا\",
        \"CF\": \"ئوتتۇرا ئافرىقا جۇمھۇرىيىتى\",
        \"CG\": \"كونگو - بىراززاۋىل\",
        \"CH\": \"شىۋېتسارىيە\",
        \"CI\": \"كوتې دې ئىۋوئىر\",
        \"CK\": \"كۇك ئاراللىرى\",
        \"CL\": \"چىلى\",
        \"CM\": \"كامېرون\",
        \"CN\": \"جۇڭگو\",
        \"CO\": \"كولومبىيە\",
        \"CR\": \"كوستارىكا\",
        \"CU\": \"كۇبا\",
        \"CV\": \"يېشىل تۇمشۇق\",
        \"CW\": \"كۇراچاۋ\",
        \"CX\": \"مىلاد ئارىلى\",
        \"CY\": \"سىپرۇس\",
        \"CZ\": \"چېخ جۇمھۇرىيىتى\",
        \"DE\": \"گېرمانىيە\",
        \"DJ\": \"جىبۇتى\",
        \"DK\": \"دانىيە\",
        \"DM\": \"دومىنىكا\",
        \"DO\": \"دومىنىكا جۇمھۇرىيىتى\",
        \"DZ\": \"ئالجىرىيە\",
        \"EC\": \"ئېكۋاتور\",
        \"EE\": \"ئېستونىيە\",
        \"EG\": \"مىسىر\",
        \"EH\": \"غەربىي ساخارا\",
        \"ER\": \"ئېرىترىيە\",
        \"ES\": \"ئىسپانىيە\",
        \"ET\": \"ئېفىيوپىيە\",
        \"FI\": \"فىنلاندىيە\",
        \"FJ\": \"فىجى\",
        \"FK\": \"فالكلاند ئاراللىرى\",
        \"FM\": \"مىكرونېزىيە\",
        \"FO\": \"فارو ئاراللىرى\",
        \"FR\": \"فىرانسىيە\",
        \"GA\": \"گابون\",
        \"GB\": \"بىرلەشمە پادىشاھلىق\",
        \"GD\": \"گىرېنادا\",
        \"GE\": \"گىرۇزىيە\",
        \"GF\": \"فىرانسىيەگە قاراشلىق گىۋىيانا\",
        \"GG\": \"گۇرنسېي\",
        \"GH\": \"گانا\",
        \"GI\": \"جەبىلتارىق\",
        \"GL\": \"گىرېنلاندىيە\",
        \"GM\": \"گامبىيە\",
        \"GN\": \"گىۋىنىيە\",
        \"GP\": \"گىۋادېلۇپ\",
        \"GQ\": \"ئېكۋاتور گىۋىنىيەسى\",
        \"GR\": \"گىرېتسىيە\",
        \"GS\": \"جەنۇبىي جورجىيە ۋە جەنۇبىي ساندۋىچ ئاراللىرى\",
        \"GT\": \"گىۋاتېمالا\",
        \"GU\": \"گۇئام\",
        \"GW\": \"گىۋىنىيە بىسسائۇ\",
        \"GY\": \"گىۋىيانا\",
        \"HK\": \"شياڭگاڭ ئالاھىدە مەمۇرىي رايونى (جۇڭگو)\",
        \"HM\": \"ھېرد ئارىلى ۋە ماكدونالد ئاراللىرى\",
        \"HN\": \"ھوندۇراس\",
        \"HR\": \"كىرودىيە\",
        \"HT\": \"ھايتى\",
        \"HU\": \"ۋېنگىرىيە\",
        \"ID\": \"ھىندونېزىيە\",
        \"IE\": \"ئىرېلاندىيە\",
        \"IL\": \"ئىسرائىلىيە\",
        \"IM\": \"مان ئارىلى\",
        \"IN\": \"ھىندىستان\",
        \"IO\": \"ئەنگلىيەگە قاراشلىق ھىندى ئوكيان تېررىتورىيەسى\",
        \"IQ\": \"ئىراق\",
        \"IR\": \"ئىران\",
        \"IS\": \"ئىسلاندىيە\",
        \"IT\": \"ئىتالىيە\",
        \"JE\": \"جېرسېي\",
        \"JM\": \"يامايكا\",
        \"JO\": \"ئىيوردانىيە\",
        \"JP\": \"ياپونىيە\",
        \"KE\": \"كېنىيە\",
        \"KG\": \"قىرغىزىستان\",
        \"KH\": \"كامبودژا\",
        \"KI\": \"كىرىباتى\",
        \"KM\": \"كومورو\",
        \"KN\": \"ساينت كىتىس ۋە نېۋىس\",
        \"KP\": \"چاۋشيەن\",
        \"KR\": \"كورېيە\",
        \"KW\": \"كۇۋەيت\",
        \"KY\": \"كايمان ئاراللىرى\",
        \"KZ\": \"قازاقىستان\",
        \"LA\": \"لائوس\",
        \"LB\": \"لىۋان\",
        \"LC\": \"ساينت لۇسىيە\",
        \"LI\": \"لىكتېنستېين\",
        \"LK\": \"سىرىلانكا\",
        \"LR\": \"لىبېرىيە\",
        \"LS\": \"لېسوتو\",
        \"LT\": \"لىتۋانىيە\",
        \"LU\": \"لىيۇكسېمبۇرگ\",
        \"LV\": \"لاتۋىيە\",
        \"LY\": \"لىۋىيە\",
        \"MA\": \"ماراكەش\",
        \"MC\": \"موناكو\",
        \"MD\": \"مولدوۋا\",
        \"ME\": \"قارا تاغ\",
        \"MF\": \"ساينت مارتىن\",
        \"MG\": \"ماداغاسقار\",
        \"MH\": \"مارشال ئاراللىرى\",
        \"MK\": \"شىمالىي ماكېدونىيە\",
        \"ML\": \"مالى\",
        \"MM\": \"بىرما\",
        \"MN\": \"موڭغۇلىيە\",
        \"MO\": \"ئاۋمېن ئالاھىدە مەمۇرىي رايونى\",
        \"MP\": \"شىمالىي مارىيانا ئاراللىرى\",
        \"MQ\": \"مارتىنىكا\",
        \"MR\": \"ماۋرىتانىيە\",
        \"MS\": \"مونتسېررات\",
        \"MT\": \"مالتا\",
        \"MU\": \"ماۋرىتىيۇس\",
        \"MV\": \"مالدىۋې\",
        \"MW\": \"مالاۋى\",
        \"MX\": \"مېكسىكا\",
        \"MY\": \"مالايسىيا\",
        \"MZ\": \"موزامبىك\",
        \"NA\": \"نامىبىيە\",
        \"NC\": \"يېڭى كالېدونىيە\",
        \"NE\": \"نىگېر\",
        \"NF\": \"نورفولك ئارىلى\",
        \"NG\": \"نىگېرىيە\",
        \"NI\": \"نىكاراگۇئا\",
        \"NL\": \"گوللاندىيە\",
        \"NO\": \"نورۋېگىيە\",
        \"NP\": \"نېپال\",
        \"NR\": \"ناۋرۇ\",
        \"NU\": \"نيۇئې\",
        \"NZ\": \"يېڭى زېلاندىيە\",
        \"OM\": \"ئومان\",
        \"PA\": \"پاناما\",
        \"PE\": \"پېرۇ\",
        \"PF\": \"فىرانسىيەگە قاراشلىق پولىنېزىيە\",
        \"PG\": \"پاپۇئا يېڭى گىۋىنىيەسى\",
        \"PH\": \"فىلىپپىن\",
        \"PK\": \"پاكىستان\",
        \"PL\": \"پولشا\",
        \"PM\": \"ساينت پىيېر ۋە مىكېلون ئاراللىرى\",
        \"PN\": \"پىتكايرن ئاراللىرى\",
        \"PR\": \"پۇئېرتو رىكو\",
        \"PS\": \"پەلەستىن زېمىنى\",
        \"PT\": \"پورتۇگالىيە\",
        \"PW\": \"پالائۇ\",
        \"PY\": \"پاراگۋاي\",
        \"QA\": \"قاتار\",
        \"RE\": \"رېيۇنىيون\",
        \"RO\": \"رومىنىيە\",
        \"RS\": \"سېربىيە\",
        \"RU\": \"رۇسىيە\",
        \"RW\": \"رىۋاندا\",
        \"SA\": \"سەئۇدىي ئەرەبىستان\",
        \"SB\": \"سولومون ئاراللىرى\",
        \"SC\": \"سېيشېل\",
        \"SD\": \"سۇدان\",
        \"SE\": \"شىۋېتسىيە\",
        \"SG\": \"سىنگاپور\",
        \"SH\": \"ساينىت ھېلېنا\",
        \"SI\": \"سىلوۋېنىيە\",
        \"SJ\": \"سىۋالبارد ۋە يان مايېن\",
        \"SK\": \"سىلوۋاكىيە\",
        \"SL\": \"سېررالېئون\",
        \"SM\": \"سان مارىنو\",
        \"SN\": \"سېنېگال\",
        \"SO\": \"سومالى\",
        \"SR\": \"سۇرىنام\",
        \"SS\": \"جەنۇبىي سۇدان\",
        \"ST\": \"سان تومې ۋە پرىنسىپې\",
        \"SV\": \"سالۋادور\",
        \"SX\": \"سىنت مارتېن\",
        \"SY\": \"سۇرىيە\",
        \"SZ\": \"سىۋېزىلاند\",
        \"TC\": \"تۇركس ۋە كايكوس ئاراللىرى\",
        \"TD\": \"چاد\",
        \"TF\": \"فىرانسىيەنىڭ جەنۇبىي زېمىنى\",
        \"TG\": \"توگو\",
        \"TH\": \"تايلاند\",
        \"TJ\": \"تاجىكىستان\",
        \"TK\": \"توكېلاۋ\",
        \"TL\": \"شەرقىي تىمور\",
        \"TM\": \"تۈركمەنىستان\",
        \"TN\": \"تۇنىس\",
        \"TO\": \"تونگا\",
        \"TR\": \"تۈركىيە\",
        \"TT\": \"تىرىنىداد ۋە توباگو\",
        \"TV\": \"تۇۋالۇ\",
        \"TW\": \"تەيۋەن\",
        \"TZ\": \"تانزانىيە\",
        \"UA\": \"ئۇكرائىنا\",
        \"UG\": \"ئۇگاندا\",
        \"UM\": \"ئا ق ش تاشقى ئاراللىرى\",
        \"US\": \"ئامېرىكا قوشما ئىشتاتلىرى\",
        \"UY\": \"ئۇرۇگۋاي\",
        \"UZ\": \"ئۆزبېكىستان\",
        \"VA\": \"ۋاتىكان\",
        \"VC\": \"ساينت ۋىنسېنت ۋە گىرېنادىنېس\",
        \"VE\": \"ۋېنېسۇئېلا\",
        \"VG\": \"ئەنگلىيە ۋىرگىن ئاراللىرى\",
        \"VI\": \"ئا ق ش ۋىرگىن ئاراللىرى\",
        \"VN\": \"ۋىيېتنام\",
        \"VU\": \"ۋانۇئاتۇ\",
        \"WF\": \"ۋاللىس ۋە فۇتۇنا\",
        \"WS\": \"ساموئا\",
        \"YE\": \"يەمەن\",
        \"YT\": \"مايوتى\",
        \"ZA\": \"جەنۇبىي ئافرىقا\",
        \"ZM\": \"زامبىيە\",
        \"ZW\": \"زىمبابۋې\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/ug.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/ug.json");
    }
}
