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

/* vendor/symfony/intl/Resources/data/regions/hy.json */
class __TwigTemplate_9d50bb92832a1100efb663b906a04acdc89d17dc0d41d77a41eea344268973c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/hy.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/hy.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Անդորրա\",
        \"AE\": \"Արաբական Միացյալ Էմիրություններ\",
        \"AF\": \"Աֆղանստան\",
        \"AG\": \"Անտիգուա և Բարբուդա\",
        \"AI\": \"Անգուիլա\",
        \"AL\": \"Ալբանիա\",
        \"AM\": \"Հայաստան\",
        \"AO\": \"Անգոլա\",
        \"AQ\": \"Անտարկտիդա\",
        \"AR\": \"Արգենտինա\",
        \"AS\": \"Ամերիկյան Սամոա\",
        \"AT\": \"Ավստրիա\",
        \"AU\": \"Ավստրալիա\",
        \"AW\": \"Արուբա\",
        \"AX\": \"Ալանդյան կղզիներ\",
        \"AZ\": \"Ադրբեջան\",
        \"BA\": \"Բոսնիա և Հերցեգովինա\",
        \"BB\": \"Բարբադոս\",
        \"BD\": \"Բանգլադեշ\",
        \"BE\": \"Բելգիա\",
        \"BF\": \"Բուրկինա Ֆասո\",
        \"BG\": \"Բուլղարիա\",
        \"BH\": \"Բահրեյն\",
        \"BI\": \"Բուրունդի\",
        \"BJ\": \"Բենին\",
        \"BL\": \"Սուրբ Բարդուղիմեոս\",
        \"BM\": \"Բերմուդներ\",
        \"BN\": \"Բրունեյ\",
        \"BO\": \"Բոլիվիա\",
        \"BQ\": \"Կարիբյան Նիդեռլանդներ\",
        \"BR\": \"Բրազիլիա\",
        \"BS\": \"Բահամյան կղզիներ\",
        \"BT\": \"Բութան\",
        \"BV\": \"Բուվե կղզի\",
        \"BW\": \"Բոթսվանա\",
        \"BY\": \"Բելառուս\",
        \"BZ\": \"Բելիզ\",
        \"CA\": \"Կանադա\",
        \"CC\": \"Կոկոսյան (Քիլինգ) կղզիներ\",
        \"CD\": \"Կոնգո - Կինշասա\",
        \"CF\": \"Կենտրոնական Աֆրիկյան Հանրապետություն\",
        \"CG\": \"Կոնգո - Բրազավիլ\",
        \"CH\": \"Շվեյցարիա\",
        \"CI\": \"Կոտ դ՚Իվուար\",
        \"CK\": \"Կուկի կղզիներ\",
        \"CL\": \"Չիլի\",
        \"CM\": \"Կամերուն\",
        \"CN\": \"Չինաստան\",
        \"CO\": \"Կոլումբիա\",
        \"CR\": \"Կոստա Ռիկա\",
        \"CU\": \"Կուբա\",
        \"CV\": \"Կաբո Վերդե\",
        \"CW\": \"Կյուրասաո\",
        \"CX\": \"Սուրբ Ծննդյան կղզի\",
        \"CY\": \"Կիպրոս\",
        \"CZ\": \"Չեխիա\",
        \"DE\": \"Գերմանիա\",
        \"DJ\": \"Ջիբութի\",
        \"DK\": \"Դանիա\",
        \"DM\": \"Դոմինիկա\",
        \"DO\": \"Դոմինիկյան Հանրապետություն\",
        \"DZ\": \"Ալժիր\",
        \"EC\": \"Էկվադոր\",
        \"EE\": \"Էստոնիա\",
        \"EG\": \"Եգիպտոս\",
        \"EH\": \"Արևմտյան Սահարա\",
        \"ER\": \"Էրիթրեա\",
        \"ES\": \"Իսպանիա\",
        \"ET\": \"Եթովպիա\",
        \"FI\": \"Ֆինլանդիա\",
        \"FJ\": \"Ֆիջի\",
        \"FK\": \"Ֆոլքլենդյան կղզիներ\",
        \"FM\": \"Միկրոնեզիա\",
        \"FO\": \"Ֆարերյան կղզիներ\",
        \"FR\": \"Ֆրանսիա\",
        \"GA\": \"Գաբոն\",
        \"GB\": \"Միացյալ Թագավորություն\",
        \"GD\": \"Գրենադա\",
        \"GE\": \"Վրաստան\",
        \"GF\": \"Ֆրանսիական Գվիանա\",
        \"GG\": \"Գերնսի\",
        \"GH\": \"Գանա\",
        \"GI\": \"Ջիբրալթար\",
        \"GL\": \"Գրենլանդիա\",
        \"GM\": \"Գամբիա\",
        \"GN\": \"Գվինեա\",
        \"GP\": \"Գվադելուպա\",
        \"GQ\": \"Հասարակածային Գվինեա\",
        \"GR\": \"Հունաստան\",
        \"GS\": \"Հարավային Ջորջիա և Հարավային Սենդվիչյան կղզիներ\",
        \"GT\": \"Գվատեմալա\",
        \"GU\": \"Գուամ\",
        \"GW\": \"Գվինեա-Բիսաու\",
        \"GY\": \"Գայանա\",
        \"HK\": \"Հոնկոնգի ՀՎՇ\",
        \"HM\": \"Հերդ կղզի և ՄակԴոնալդի կղզիներ\",
        \"HN\": \"Հոնդուրաս\",
        \"HR\": \"Խորվաթիա\",
        \"HT\": \"Հայիթի\",
        \"HU\": \"Հունգարիա\",
        \"ID\": \"Ինդոնեզիա\",
        \"IE\": \"Իռլանդիա\",
        \"IL\": \"Իսրայել\",
        \"IM\": \"Մեն կղզի\",
        \"IN\": \"Հնդկաստան\",
        \"IO\": \"Բրիտանական Տարածք Հնդկական Օվկիանոսում\",
        \"IQ\": \"Իրաք\",
        \"IR\": \"Իրան\",
        \"IS\": \"Իսլանդիա\",
        \"IT\": \"Իտալիա\",
        \"JE\": \"Ջերսի\",
        \"JM\": \"Ճամայկա\",
        \"JO\": \"Հորդանան\",
        \"JP\": \"Ճապոնիա\",
        \"KE\": \"Քենիա\",
        \"KG\": \"Ղրղզստան\",
        \"KH\": \"Կամբոջա\",
        \"KI\": \"Կիրիբատի\",
        \"KM\": \"Կոմորյան կղզիներ\",
        \"KN\": \"Սենթ Քիտս և Նևիս\",
        \"KP\": \"Հյուսիսային Կորեա\",
        \"KR\": \"Հարավային Կորեա\",
        \"KW\": \"Քուվեյթ\",
        \"KY\": \"Կայմանյան կղզիներ\",
        \"KZ\": \"Ղազախստան\",
        \"LA\": \"Լաոս\",
        \"LB\": \"Լիբանան\",
        \"LC\": \"Սենթ Լյուսիա\",
        \"LI\": \"Լիխտենշտեյն\",
        \"LK\": \"Շրի Լանկա\",
        \"LR\": \"Լիբերիա\",
        \"LS\": \"Լեսոտո\",
        \"LT\": \"Լիտվա\",
        \"LU\": \"Լյուքսեմբուրգ\",
        \"LV\": \"Լատվիա\",
        \"LY\": \"Լիբիա\",
        \"MA\": \"Մարոկկո\",
        \"MC\": \"Մոնակո\",
        \"MD\": \"Մոլդովա\",
        \"ME\": \"Չեռնոգորիա\",
        \"MF\": \"Սեն Մարտեն\",
        \"MG\": \"Մադագասկար\",
        \"MH\": \"Մարշալյան կղզիներ\",
        \"MK\": \"Հյուսիսային Մակեդոնիա\",
        \"ML\": \"Մալի\",
        \"MM\": \"Մյանմա (Բիրմա)\",
        \"MN\": \"Մոնղոլիա\",
        \"MO\": \"Չինաստանի Մակաո ՀՎՇ\",
        \"MP\": \"Հյուսիսային Մարիանյան կղզիներ\",
        \"MQ\": \"Մարտինիկա\",
        \"MR\": \"Մավրիտանիա\",
        \"MS\": \"Մոնսեռատ\",
        \"MT\": \"Մալթա\",
        \"MU\": \"Մավրիկիոս\",
        \"MV\": \"Մալդիվներ\",
        \"MW\": \"Մալավի\",
        \"MX\": \"Մեքսիկա\",
        \"MY\": \"Մալայզիա\",
        \"MZ\": \"Մոզամբիկ\",
        \"NA\": \"Նամիբիա\",
        \"NC\": \"Նոր Կալեդոնիա\",
        \"NE\": \"Նիգեր\",
        \"NF\": \"Նորֆոլկ կղզի\",
        \"NG\": \"Նիգերիա\",
        \"NI\": \"Նիկարագուա\",
        \"NL\": \"Նիդեռլանդներ\",
        \"NO\": \"Նորվեգիա\",
        \"NP\": \"Նեպալ\",
        \"NR\": \"Նաուրու\",
        \"NU\": \"Նիուե\",
        \"NZ\": \"Նոր Զելանդիա\",
        \"OM\": \"Օման\",
        \"PA\": \"Պանամա\",
        \"PE\": \"Պերու\",
        \"PF\": \"Ֆրանսիական Պոլինեզիա\",
        \"PG\": \"Պապուա Նոր Գվինեա\",
        \"PH\": \"Ֆիլիպիններ\",
        \"PK\": \"Պակիստան\",
        \"PL\": \"Լեհաստան\",
        \"PM\": \"Սեն Պիեռ և Միքելոն\",
        \"PN\": \"Պիտկեռն կղզիներ\",
        \"PR\": \"Պուերտո Ռիկո\",
        \"PS\": \"Պաղեստինյան տարածքներ\",
        \"PT\": \"Պորտուգալիա\",
        \"PW\": \"Պալաու\",
        \"PY\": \"Պարագվայ\",
        \"QA\": \"Կատար\",
        \"RE\": \"Ռեյունիոն\",
        \"RO\": \"Ռումինիա\",
        \"RS\": \"Սերբիա\",
        \"RU\": \"Ռուսաստան\",
        \"RW\": \"Ռուանդա\",
        \"SA\": \"Սաուդյան Արաբիա\",
        \"SB\": \"Սողոմոնյան կղզիներ\",
        \"SC\": \"Սեյշելներ\",
        \"SD\": \"Սուդան\",
        \"SE\": \"Շվեդիա\",
        \"SG\": \"Սինգապուր\",
        \"SH\": \"Սուրբ Հեղինեի կղզի\",
        \"SI\": \"Սլովենիա\",
        \"SJ\": \"Սվալբարդ և Յան Մայեն\",
        \"SK\": \"Սլովակիա\",
        \"SL\": \"Սիեռա Լեոնե\",
        \"SM\": \"Սան Մարինո\",
        \"SN\": \"Սենեգալ\",
        \"SO\": \"Սոմալի\",
        \"SR\": \"Սուրինամ\",
        \"SS\": \"Հարավային Սուդան\",
        \"ST\": \"Սան Տոմե և Փրինսիպի\",
        \"SV\": \"Սալվադոր\",
        \"SX\": \"Սինտ Մարտեն\",
        \"SY\": \"Սիրիա\",
        \"SZ\": \"Էսվատինի\",
        \"TC\": \"Թըրքս և Կայկոս կղզիներ\",
        \"TD\": \"Չադ\",
        \"TF\": \"Ֆրանսիական Հարավային Տարածքներ\",
        \"TG\": \"Տոգո\",
        \"TH\": \"Թայլանդ\",
        \"TJ\": \"Տաջիկստան\",
        \"TK\": \"Տոկելաու\",
        \"TL\": \"Թիմոր Լեշտի\",
        \"TM\": \"Թուրքմենստան\",
        \"TN\": \"Թունիս\",
        \"TO\": \"Տոնգա\",
        \"TR\": \"Թուրքիա\",
        \"TT\": \"Տրինիդադ և Տոբագո\",
        \"TV\": \"Տուվալու\",
        \"TW\": \"Թայվան\",
        \"TZ\": \"Տանզանիա\",
        \"UA\": \"Ուկրաինա\",
        \"UG\": \"Ուգանդա\",
        \"UM\": \"Արտաքին կղզիներ (ԱՄՆ)\",
        \"US\": \"Միացյալ Նահանգներ\",
        \"UY\": \"Ուրուգվայ\",
        \"UZ\": \"Ուզբեկստան\",
        \"VA\": \"Վատիկան\",
        \"VC\": \"Սենթ Վինսենթ և Գրենադիններ\",
        \"VE\": \"Վենեսուելա\",
        \"VG\": \"Բրիտանական Վիրջինյան կղզիներ\",
        \"VI\": \"ԱՄՆ Վիրջինյան կղզիներ\",
        \"VN\": \"Վիետնամ\",
        \"VU\": \"Վանուատու\",
        \"WF\": \"Ուոլիս և Ֆուտունա\",
        \"WS\": \"Սամոա\",
        \"YE\": \"Եմեն\",
        \"YT\": \"Մայոտ\",
        \"ZA\": \"Հարավաֆրիկյան Հանրապետություն\",
        \"ZM\": \"Զամբիա\",
        \"ZW\": \"Զիմբաբվե\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/hy.json";
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
        \"AD\": \"Անդորրա\",
        \"AE\": \"Արաբական Միացյալ Էմիրություններ\",
        \"AF\": \"Աֆղանստան\",
        \"AG\": \"Անտիգուա և Բարբուդա\",
        \"AI\": \"Անգուիլա\",
        \"AL\": \"Ալբանիա\",
        \"AM\": \"Հայաստան\",
        \"AO\": \"Անգոլա\",
        \"AQ\": \"Անտարկտիդա\",
        \"AR\": \"Արգենտինա\",
        \"AS\": \"Ամերիկյան Սամոա\",
        \"AT\": \"Ավստրիա\",
        \"AU\": \"Ավստրալիա\",
        \"AW\": \"Արուբա\",
        \"AX\": \"Ալանդյան կղզիներ\",
        \"AZ\": \"Ադրբեջան\",
        \"BA\": \"Բոսնիա և Հերցեգովինա\",
        \"BB\": \"Բարբադոս\",
        \"BD\": \"Բանգլադեշ\",
        \"BE\": \"Բելգիա\",
        \"BF\": \"Բուրկինա Ֆասո\",
        \"BG\": \"Բուլղարիա\",
        \"BH\": \"Բահրեյն\",
        \"BI\": \"Բուրունդի\",
        \"BJ\": \"Բենին\",
        \"BL\": \"Սուրբ Բարդուղիմեոս\",
        \"BM\": \"Բերմուդներ\",
        \"BN\": \"Բրունեյ\",
        \"BO\": \"Բոլիվիա\",
        \"BQ\": \"Կարիբյան Նիդեռլանդներ\",
        \"BR\": \"Բրազիլիա\",
        \"BS\": \"Բահամյան կղզիներ\",
        \"BT\": \"Բութան\",
        \"BV\": \"Բուվե կղզի\",
        \"BW\": \"Բոթսվանա\",
        \"BY\": \"Բելառուս\",
        \"BZ\": \"Բելիզ\",
        \"CA\": \"Կանադա\",
        \"CC\": \"Կոկոսյան (Քիլինգ) կղզիներ\",
        \"CD\": \"Կոնգո - Կինշասա\",
        \"CF\": \"Կենտրոնական Աֆրիկյան Հանրապետություն\",
        \"CG\": \"Կոնգո - Բրազավիլ\",
        \"CH\": \"Շվեյցարիա\",
        \"CI\": \"Կոտ դ՚Իվուար\",
        \"CK\": \"Կուկի կղզիներ\",
        \"CL\": \"Չիլի\",
        \"CM\": \"Կամերուն\",
        \"CN\": \"Չինաստան\",
        \"CO\": \"Կոլումբիա\",
        \"CR\": \"Կոստա Ռիկա\",
        \"CU\": \"Կուբա\",
        \"CV\": \"Կաբո Վերդե\",
        \"CW\": \"Կյուրասաո\",
        \"CX\": \"Սուրբ Ծննդյան կղզի\",
        \"CY\": \"Կիպրոս\",
        \"CZ\": \"Չեխիա\",
        \"DE\": \"Գերմանիա\",
        \"DJ\": \"Ջիբութի\",
        \"DK\": \"Դանիա\",
        \"DM\": \"Դոմինիկա\",
        \"DO\": \"Դոմինիկյան Հանրապետություն\",
        \"DZ\": \"Ալժիր\",
        \"EC\": \"Էկվադոր\",
        \"EE\": \"Էստոնիա\",
        \"EG\": \"Եգիպտոս\",
        \"EH\": \"Արևմտյան Սահարա\",
        \"ER\": \"Էրիթրեա\",
        \"ES\": \"Իսպանիա\",
        \"ET\": \"Եթովպիա\",
        \"FI\": \"Ֆինլանդիա\",
        \"FJ\": \"Ֆիջի\",
        \"FK\": \"Ֆոլքլենդյան կղզիներ\",
        \"FM\": \"Միկրոնեզիա\",
        \"FO\": \"Ֆարերյան կղզիներ\",
        \"FR\": \"Ֆրանսիա\",
        \"GA\": \"Գաբոն\",
        \"GB\": \"Միացյալ Թագավորություն\",
        \"GD\": \"Գրենադա\",
        \"GE\": \"Վրաստան\",
        \"GF\": \"Ֆրանսիական Գվիանա\",
        \"GG\": \"Գերնսի\",
        \"GH\": \"Գանա\",
        \"GI\": \"Ջիբրալթար\",
        \"GL\": \"Գրենլանդիա\",
        \"GM\": \"Գամբիա\",
        \"GN\": \"Գվինեա\",
        \"GP\": \"Գվադելուպա\",
        \"GQ\": \"Հասարակածային Գվինեա\",
        \"GR\": \"Հունաստան\",
        \"GS\": \"Հարավային Ջորջիա և Հարավային Սենդվիչյան կղզիներ\",
        \"GT\": \"Գվատեմալա\",
        \"GU\": \"Գուամ\",
        \"GW\": \"Գվինեա-Բիսաու\",
        \"GY\": \"Գայանա\",
        \"HK\": \"Հոնկոնգի ՀՎՇ\",
        \"HM\": \"Հերդ կղզի և ՄակԴոնալդի կղզիներ\",
        \"HN\": \"Հոնդուրաս\",
        \"HR\": \"Խորվաթիա\",
        \"HT\": \"Հայիթի\",
        \"HU\": \"Հունգարիա\",
        \"ID\": \"Ինդոնեզիա\",
        \"IE\": \"Իռլանդիա\",
        \"IL\": \"Իսրայել\",
        \"IM\": \"Մեն կղզի\",
        \"IN\": \"Հնդկաստան\",
        \"IO\": \"Բրիտանական Տարածք Հնդկական Օվկիանոսում\",
        \"IQ\": \"Իրաք\",
        \"IR\": \"Իրան\",
        \"IS\": \"Իսլանդիա\",
        \"IT\": \"Իտալիա\",
        \"JE\": \"Ջերսի\",
        \"JM\": \"Ճամայկա\",
        \"JO\": \"Հորդանան\",
        \"JP\": \"Ճապոնիա\",
        \"KE\": \"Քենիա\",
        \"KG\": \"Ղրղզստան\",
        \"KH\": \"Կամբոջա\",
        \"KI\": \"Կիրիբատի\",
        \"KM\": \"Կոմորյան կղզիներ\",
        \"KN\": \"Սենթ Քիտս և Նևիս\",
        \"KP\": \"Հյուսիսային Կորեա\",
        \"KR\": \"Հարավային Կորեա\",
        \"KW\": \"Քուվեյթ\",
        \"KY\": \"Կայմանյան կղզիներ\",
        \"KZ\": \"Ղազախստան\",
        \"LA\": \"Լաոս\",
        \"LB\": \"Լիբանան\",
        \"LC\": \"Սենթ Լյուսիա\",
        \"LI\": \"Լիխտենշտեյն\",
        \"LK\": \"Շրի Լանկա\",
        \"LR\": \"Լիբերիա\",
        \"LS\": \"Լեսոտո\",
        \"LT\": \"Լիտվա\",
        \"LU\": \"Լյուքսեմբուրգ\",
        \"LV\": \"Լատվիա\",
        \"LY\": \"Լիբիա\",
        \"MA\": \"Մարոկկո\",
        \"MC\": \"Մոնակո\",
        \"MD\": \"Մոլդովա\",
        \"ME\": \"Չեռնոգորիա\",
        \"MF\": \"Սեն Մարտեն\",
        \"MG\": \"Մադագասկար\",
        \"MH\": \"Մարշալյան կղզիներ\",
        \"MK\": \"Հյուսիսային Մակեդոնիա\",
        \"ML\": \"Մալի\",
        \"MM\": \"Մյանմա (Բիրմա)\",
        \"MN\": \"Մոնղոլիա\",
        \"MO\": \"Չինաստանի Մակաո ՀՎՇ\",
        \"MP\": \"Հյուսիսային Մարիանյան կղզիներ\",
        \"MQ\": \"Մարտինիկա\",
        \"MR\": \"Մավրիտանիա\",
        \"MS\": \"Մոնսեռատ\",
        \"MT\": \"Մալթա\",
        \"MU\": \"Մավրիկիոս\",
        \"MV\": \"Մալդիվներ\",
        \"MW\": \"Մալավի\",
        \"MX\": \"Մեքսիկա\",
        \"MY\": \"Մալայզիա\",
        \"MZ\": \"Մոզամբիկ\",
        \"NA\": \"Նամիբիա\",
        \"NC\": \"Նոր Կալեդոնիա\",
        \"NE\": \"Նիգեր\",
        \"NF\": \"Նորֆոլկ կղզի\",
        \"NG\": \"Նիգերիա\",
        \"NI\": \"Նիկարագուա\",
        \"NL\": \"Նիդեռլանդներ\",
        \"NO\": \"Նորվեգիա\",
        \"NP\": \"Նեպալ\",
        \"NR\": \"Նաուրու\",
        \"NU\": \"Նիուե\",
        \"NZ\": \"Նոր Զելանդիա\",
        \"OM\": \"Օման\",
        \"PA\": \"Պանամա\",
        \"PE\": \"Պերու\",
        \"PF\": \"Ֆրանսիական Պոլինեզիա\",
        \"PG\": \"Պապուա Նոր Գվինեա\",
        \"PH\": \"Ֆիլիպիններ\",
        \"PK\": \"Պակիստան\",
        \"PL\": \"Լեհաստան\",
        \"PM\": \"Սեն Պիեռ և Միքելոն\",
        \"PN\": \"Պիտկեռն կղզիներ\",
        \"PR\": \"Պուերտո Ռիկո\",
        \"PS\": \"Պաղեստինյան տարածքներ\",
        \"PT\": \"Պորտուգալիա\",
        \"PW\": \"Պալաու\",
        \"PY\": \"Պարագվայ\",
        \"QA\": \"Կատար\",
        \"RE\": \"Ռեյունիոն\",
        \"RO\": \"Ռումինիա\",
        \"RS\": \"Սերբիա\",
        \"RU\": \"Ռուսաստան\",
        \"RW\": \"Ռուանդա\",
        \"SA\": \"Սաուդյան Արաբիա\",
        \"SB\": \"Սողոմոնյան կղզիներ\",
        \"SC\": \"Սեյշելներ\",
        \"SD\": \"Սուդան\",
        \"SE\": \"Շվեդիա\",
        \"SG\": \"Սինգապուր\",
        \"SH\": \"Սուրբ Հեղինեի կղզի\",
        \"SI\": \"Սլովենիա\",
        \"SJ\": \"Սվալբարդ և Յան Մայեն\",
        \"SK\": \"Սլովակիա\",
        \"SL\": \"Սիեռա Լեոնե\",
        \"SM\": \"Սան Մարինո\",
        \"SN\": \"Սենեգալ\",
        \"SO\": \"Սոմալի\",
        \"SR\": \"Սուրինամ\",
        \"SS\": \"Հարավային Սուդան\",
        \"ST\": \"Սան Տոմե և Փրինսիպի\",
        \"SV\": \"Սալվադոր\",
        \"SX\": \"Սինտ Մարտեն\",
        \"SY\": \"Սիրիա\",
        \"SZ\": \"Էսվատինի\",
        \"TC\": \"Թըրքս և Կայկոս կղզիներ\",
        \"TD\": \"Չադ\",
        \"TF\": \"Ֆրանսիական Հարավային Տարածքներ\",
        \"TG\": \"Տոգո\",
        \"TH\": \"Թայլանդ\",
        \"TJ\": \"Տաջիկստան\",
        \"TK\": \"Տոկելաու\",
        \"TL\": \"Թիմոր Լեշտի\",
        \"TM\": \"Թուրքմենստան\",
        \"TN\": \"Թունիս\",
        \"TO\": \"Տոնգա\",
        \"TR\": \"Թուրքիա\",
        \"TT\": \"Տրինիդադ և Տոբագո\",
        \"TV\": \"Տուվալու\",
        \"TW\": \"Թայվան\",
        \"TZ\": \"Տանզանիա\",
        \"UA\": \"Ուկրաինա\",
        \"UG\": \"Ուգանդա\",
        \"UM\": \"Արտաքին կղզիներ (ԱՄՆ)\",
        \"US\": \"Միացյալ Նահանգներ\",
        \"UY\": \"Ուրուգվայ\",
        \"UZ\": \"Ուզբեկստան\",
        \"VA\": \"Վատիկան\",
        \"VC\": \"Սենթ Վինսենթ և Գրենադիններ\",
        \"VE\": \"Վենեսուելա\",
        \"VG\": \"Բրիտանական Վիրջինյան կղզիներ\",
        \"VI\": \"ԱՄՆ Վիրջինյան կղզիներ\",
        \"VN\": \"Վիետնամ\",
        \"VU\": \"Վանուատու\",
        \"WF\": \"Ուոլիս և Ֆուտունա\",
        \"WS\": \"Սամոա\",
        \"YE\": \"Եմեն\",
        \"YT\": \"Մայոտ\",
        \"ZA\": \"Հարավաֆրիկյան Հանրապետություն\",
        \"ZM\": \"Զամբիա\",
        \"ZW\": \"Զիմբաբվե\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/hy.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/hy.json");
    }
}
