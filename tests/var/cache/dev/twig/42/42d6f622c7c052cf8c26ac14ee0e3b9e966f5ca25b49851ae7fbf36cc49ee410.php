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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php */
class __TwigTemplate_ee9bfb0ee227c1c6b2d907a18dec9d1cb8a69bc7983920a8d7366ac4025a447c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_HK;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$country = array('Hong Kong');

    protected static \$syllables = array(
        'A', 'Ai', 'Ak', 'Am', 'An', 'Ang', 'Ap', 'At', 'Au',
        'Cha', 'Chai', 'Chak', 'Cham', 'Chan', 'Chang', 'Chap', 'Chat', 'Chau',
        'Che', 'Chek', 'Cheng', 'Cheuk', 'Cheung',
        'Chi', 'Chik', 'Chim', 'Chin', 'Ching', 'Chip', 'Chit', 'Chiu',
        'Cho', 'Choi', 'Chok', 'Chong', 'Chou',
        'Chue', 'Chuen', 'Chuet', 'Chui', 'Chuk', 'Chun', 'Chung', 'Chut',
        'E', 'Ei',
        'Fa', 'Fai', 'Fak', 'Fan', 'Fang', 'Fat', 'Fau',
        'Fe', 'Fei', 'Fo', 'Fok', 'Fong',
        'Fu', 'Fui', 'Fuk', 'Fun', 'Fung', 'Fut',
        'Ha', 'Hai', 'Hak', 'Ham', 'Han', 'Hang', 'Hap', 'Hat', 'Hau',
        'Hei', 'Hek', 'Heng', 'Heu', 'Heung',
        'Hik', 'Him', 'Hin', 'Hing', 'Hip', 'Hit', 'Hiu',
        'Ho', 'Hoi', 'Hok', 'Hon', 'Hong', 'Hot', 'Hou',
        'Huen', 'Huet', 'Hui', 'Huk', 'Hung',
        'Ka', 'Kai', 'Kak', 'Kam', 'Kan', 'Kang', 'Kap', 'Kat', 'Kau',
        'Ke', 'Kei', 'Kek', 'Keng', 'Keu', 'Keuk', 'Keung',
        'Kik', 'Kim', 'Kin', 'King', 'Kip', 'Kit', 'Kiu',
        'Ko', 'Koi', 'Kok', 'Kon', 'Kong', 'Kot', 'Kou',
        'Ku', 'Kuen', 'Kuet', 'Kui', 'Kuk', 'Kun', 'Kung', 'Kut',
        'Kwa', 'Kwai', 'Kwak', 'Kwan', 'Kwang', 'Kwat', 'Kwik', 'Kwing', 'Kwo', 'Kwok', 'Kwong',
        'La', 'Lai', 'Lak', 'Lam', 'Lan', 'Lang', 'Lap', 'Lat', 'Lau',
        'Le', 'Lei', 'Lek', 'Leng', 'Leuk', 'Leung',
        'Li', 'Lik', 'Lim', 'Lin', 'Ling', 'Lip', 'Lit', 'Liu',
        'Lo', 'Loi', 'Lok', 'Long', 'Lou',
        'Luen', 'Luet', 'Lui', 'Luk', 'Lun', 'Lung', 'Lut',
        'Ma', 'Mai', 'Mak', 'Man', 'Mang', 'Mat', 'Mau',
        'Me', 'Mei', 'Meng',
        'Mi', 'Mik', 'Min', 'Ming', 'Mit', 'Miu',
        'Mo', 'Mok', 'Mong', 'Mou',
        'Mui', 'Muk', 'Mun', 'Mung', 'Mut',
        'Na', 'Nai', 'Nam', 'Nan', 'Nang', 'Nap', 'Nat', 'Nau',
        'Ne', 'Nei', 'Neung',
        'Ng', 'Nga', 'Ngai', 'Ngak', 'Ngam', 'Ngan', 'Ngang', 'Ngap', 'Ngat', 'Ngau',
        'Ngit',
        'Ngo', 'Ngoi', 'Ngok', 'Ngon', 'Ngong', 'Ngou',
        'Ni', 'Nik', 'Nim', 'Nin', 'Ning', 'Nip', 'Niu',
        'No', 'Noi', 'Nok', 'Nong', 'Nou', 'Nuen',
        'Nui', 'Nuk', 'Nung', 'Nut',
        'O', 'Oi', 'Ok', 'On', 'Ong', 'Ou',
        'Pa', 'Pai', 'Pak', 'Pam', 'Pan', 'Pang', 'Pat', 'Pau',
        'Pe', 'Pei', 'Pek', 'Peng',
        'Pik', 'Pin', 'Ping', 'Pit', 'Piu',
        'Po', 'Poi', 'Pok', 'Pong', 'Pou',
        'Pui', 'Puk', 'Pun', 'Pung', 'Put',
        'Sa', 'Sai', 'Sak', 'Sam', 'San', 'Sang', 'Sap', 'Sat', 'Sau',
        'Se', 'Sei', 'Sek', 'Seng', 'Seuk', 'Seung',
        'Sha', 'Shai', 'Shak', 'Sham', 'Shan', 'Shang', 'Shap', 'Shat', 'Shau',
        'She', 'Shei', 'Shek', 'Sheng', 'Sheuk', 'Sheung',
        'Shi', 'Shik', 'Shim', 'Shin', 'Shing', 'Ship', 'Shit', 'Shiu',
        'Sho', 'Shoi', 'Shok', 'Shong', 'Shou',
        'Shue', 'Shuen', 'Shuet', 'Shui', 'Shuk', 'Shun', 'Shung', 'Shut',
        'Sik', 'Sim', 'Sin', 'Sing', 'Sip', 'Sit', 'Siu',
        'So', 'Soi', 'Sok', 'Song', 'Sou',
        'Sue', 'Suen', 'Suet', 'Sui', 'Suk', 'Sun', 'Sung', 'Sut',
        'Sze',
        'Ta', 'Tai', 'Tak', 'Tam', 'Tan', 'Tang', 'Tap', 'Tat', 'Tau',
        'Te', 'Tei', 'Tek', 'Teng', 'Teu', 'Teuk',
        'Tik', 'Tim', 'Tin', 'Ting', 'Tip', 'Tit', 'Tiu',
        'To', 'Toi', 'Tok', 'Tong', 'Tou',
        'Tsa', 'Tsai', 'Tsak', 'Tsam', 'Tsan', 'Tsang', 'Tsap', 'Tsat', 'Tsau',
        'Tse', 'Tsek', 'Tseng', 'Tseuk', 'Tseung',
        'Tsik', 'Tsim', 'Tsin', 'Tsing', 'Tsip', 'Tsit', 'Tsiu',
        'Tso', 'Tsoi', 'Tsok', 'Tsong', 'Tsou',
        'Tsue', 'Tsuen', 'Tsuet', 'Tsui', 'Tsuk', 'Tsun', 'Tsung', 'Tsut',
        'Tsz',
        'Tuen', 'Tuet', 'Tui', 'Tuk', 'Tun', 'Tung', 'Tut',
        'Uk', 'Ung',
        'Wa', 'Wai', 'Wak', 'Wan', 'Wang', 'Wat',
        'Wik', 'Wing',
        'Wo', 'Wok', 'Wong', 'Wu',
        'Wui', 'Wun', 'Wut', 'Ya',
        'Yai', 'Yak', 'Yam', 'Yan', 'Yap', 'Yat', 'Yau',
        'Ye', 'Yeng', 'Yeuk', 'Yeung', 'Yi',
        'Yik', 'Yim', 'Yin', 'Ying', 'Yip', 'Yit', 'Yiu',
        'Yo',
        'Yue', 'Yuen', 'Yuet', 'Yui', 'Yuk', 'Yun', 'Yung',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["village"]) || array_key_exists("village", $context) ? $context["village"] : (function () { throw new RuntimeError('Variable "village" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "',
        'Block ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 92, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["estate"]) || array_key_exists("estate", $context) ? $context["estate"] : (function () { throw new RuntimeError('Variable "estate" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$villageNameFormats = array(
        '";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 101, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 101, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 103, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 103, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 104, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 104, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 105, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 105, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 106, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 106, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 108, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 108, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 108, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 110, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 110, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 110, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 111, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 111, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 111, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 112, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 112, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 112, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 113, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 113, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 113, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 115, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 116, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 117, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 120, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 120, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["villageSuffix"]) || array_key_exists("villageSuffix", $context) ? $context["villageSuffix"] : (function () { throw new RuntimeError('Variable "villageSuffix" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$estateNameFormats = array(
        '";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 126, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 126, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 127, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 127, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 128, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 128, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 129, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 129, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 129, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["estateSuffix"]) || array_key_exists("estateSuffix", $context) ? $context["estateSuffix"] : (function () { throw new RuntimeError('Variable "estateSuffix" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "',
    );


    protected static \$villageSuffixes = array('Village', 'Tsuen', 'San Tsuen', 'New Village', 'Wai');

    protected static \$estateSuffixes = array('Estate', 'Court');

    protected static \$streetNameFormats = array(
        '";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 141, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 147, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 147, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 147, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 148, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 148, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 148, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 150, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 150, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 150, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 151, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 151, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 151, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 151, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["englishStreetName"]) || array_key_exists("englishStreetName", $context) ? $context["englishStreetName"] : (function () { throw new RuntimeError('Variable "englishStreetName" does not exist.', 152, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["englishStreetName"]) || array_key_exists("englishStreetName", $context) ? $context["englishStreetName"] : (function () { throw new RuntimeError('Variable "englishStreetName" does not exist.', 153, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 153, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 153, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$englishStreetNames = array(
        \"King's\", \"Queen's\", \"Nathan\", \"Robinson\", \"Kingston\", \"Irving\", \"Bonham\", \"Salisbury\",
        \"Tonkin\", \"Nanking\", \"Peking\", \"Canton\", \"Amoy\", \"Shanghai\"
    );

    protected static \$streetSuffix = array(
        'Road', 'Road', 'Road', 'Street', 'Street', 'Street', 'Lane',
        'Circuit', 'Avenue', 'Path', 'Square',
    );

    protected static \$directions = array('North', 'East', 'South', 'West');

    protected static \$cities = array('Hong Kong', 'Kowloon', 'New Territories');

    protected static \$towns = array(
        '";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 171, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 172, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 172, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 173, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 173, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 174, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 178, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 179, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 180, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 181, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 181, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 181, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 182, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 184, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 184, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 185, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 185, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 185, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 186, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 186, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 186, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 187, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 187, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 188, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 188, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 189, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 189, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 190, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 190, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["syllable"]) || array_key_exists("syllable", $context) ? $context["syllable"] : (function () { throw new RuntimeError('Variable "syllable" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "',
        'Aberdeen',
        'Stanley',
        'Victoria',
    );

    public function city()
    {
        return static::randomElement(static::\$cities);
    }

    public function town()
    {
        return \$this->generator->parse(static::randomElement(static::\$towns));
    }

    public function syllable()
    {
        return static::randomElement(static::\$syllables);
    }

    public function direction()
    {
        return static::randomElement(static::\$directions);
    }

    public function englishStreetName()
    {
        return static::randomElement(static::\$englishStreetNames);
    }

    public function villageSuffix()
    {
        return static::randomElement(static::\$villageSuffixes);
    }

    public function estateSuffix()
    {
        return static::randomElement(static::\$estateSuffixes);
    }

    public function village()
    {
        return \$this->generator->parse(static::randomElement(static::\$villageNameFormats));
    }

    public function estate()
    {
        return \$this->generator->parse(static::randomElement(static::\$estateNameFormats));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 190,  684 => 189,  676 => 188,  668 => 187,  660 => 186,  652 => 185,  644 => 184,  636 => 183,  628 => 182,  620 => 181,  614 => 180,  608 => 179,  602 => 178,  596 => 177,  590 => 176,  584 => 175,  578 => 174,  572 => 173,  566 => 172,  560 => 171,  535 => 153,  529 => 152,  517 => 151,  507 => 150,  495 => 149,  485 => 148,  475 => 147,  465 => 146,  455 => 145,  447 => 144,  439 => 143,  431 => 142,  425 => 141,  411 => 132,  401 => 131,  391 => 130,  381 => 129,  373 => 128,  365 => 127,  357 => 126,  348 => 122,  344 => 121,  336 => 120,  328 => 119,  320 => 118,  314 => 117,  308 => 116,  302 => 115,  292 => 114,  282 => 113,  272 => 112,  262 => 111,  252 => 110,  242 => 109,  232 => 108,  222 => 107,  214 => 106,  206 => 105,  198 => 104,  190 => 103,  182 => 102,  174 => 101,  166 => 100,  155 => 96,  146 => 92,  140 => 91,  134 => 90,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_HK;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$country = array('Hong Kong');

    protected static \$syllables = array(
        'A', 'Ai', 'Ak', 'Am', 'An', 'Ang', 'Ap', 'At', 'Au',
        'Cha', 'Chai', 'Chak', 'Cham', 'Chan', 'Chang', 'Chap', 'Chat', 'Chau',
        'Che', 'Chek', 'Cheng', 'Cheuk', 'Cheung',
        'Chi', 'Chik', 'Chim', 'Chin', 'Ching', 'Chip', 'Chit', 'Chiu',
        'Cho', 'Choi', 'Chok', 'Chong', 'Chou',
        'Chue', 'Chuen', 'Chuet', 'Chui', 'Chuk', 'Chun', 'Chung', 'Chut',
        'E', 'Ei',
        'Fa', 'Fai', 'Fak', 'Fan', 'Fang', 'Fat', 'Fau',
        'Fe', 'Fei', 'Fo', 'Fok', 'Fong',
        'Fu', 'Fui', 'Fuk', 'Fun', 'Fung', 'Fut',
        'Ha', 'Hai', 'Hak', 'Ham', 'Han', 'Hang', 'Hap', 'Hat', 'Hau',
        'Hei', 'Hek', 'Heng', 'Heu', 'Heung',
        'Hik', 'Him', 'Hin', 'Hing', 'Hip', 'Hit', 'Hiu',
        'Ho', 'Hoi', 'Hok', 'Hon', 'Hong', 'Hot', 'Hou',
        'Huen', 'Huet', 'Hui', 'Huk', 'Hung',
        'Ka', 'Kai', 'Kak', 'Kam', 'Kan', 'Kang', 'Kap', 'Kat', 'Kau',
        'Ke', 'Kei', 'Kek', 'Keng', 'Keu', 'Keuk', 'Keung',
        'Kik', 'Kim', 'Kin', 'King', 'Kip', 'Kit', 'Kiu',
        'Ko', 'Koi', 'Kok', 'Kon', 'Kong', 'Kot', 'Kou',
        'Ku', 'Kuen', 'Kuet', 'Kui', 'Kuk', 'Kun', 'Kung', 'Kut',
        'Kwa', 'Kwai', 'Kwak', 'Kwan', 'Kwang', 'Kwat', 'Kwik', 'Kwing', 'Kwo', 'Kwok', 'Kwong',
        'La', 'Lai', 'Lak', 'Lam', 'Lan', 'Lang', 'Lap', 'Lat', 'Lau',
        'Le', 'Lei', 'Lek', 'Leng', 'Leuk', 'Leung',
        'Li', 'Lik', 'Lim', 'Lin', 'Ling', 'Lip', 'Lit', 'Liu',
        'Lo', 'Loi', 'Lok', 'Long', 'Lou',
        'Luen', 'Luet', 'Lui', 'Luk', 'Lun', 'Lung', 'Lut',
        'Ma', 'Mai', 'Mak', 'Man', 'Mang', 'Mat', 'Mau',
        'Me', 'Mei', 'Meng',
        'Mi', 'Mik', 'Min', 'Ming', 'Mit', 'Miu',
        'Mo', 'Mok', 'Mong', 'Mou',
        'Mui', 'Muk', 'Mun', 'Mung', 'Mut',
        'Na', 'Nai', 'Nam', 'Nan', 'Nang', 'Nap', 'Nat', 'Nau',
        'Ne', 'Nei', 'Neung',
        'Ng', 'Nga', 'Ngai', 'Ngak', 'Ngam', 'Ngan', 'Ngang', 'Ngap', 'Ngat', 'Ngau',
        'Ngit',
        'Ngo', 'Ngoi', 'Ngok', 'Ngon', 'Ngong', 'Ngou',
        'Ni', 'Nik', 'Nim', 'Nin', 'Ning', 'Nip', 'Niu',
        'No', 'Noi', 'Nok', 'Nong', 'Nou', 'Nuen',
        'Nui', 'Nuk', 'Nung', 'Nut',
        'O', 'Oi', 'Ok', 'On', 'Ong', 'Ou',
        'Pa', 'Pai', 'Pak', 'Pam', 'Pan', 'Pang', 'Pat', 'Pau',
        'Pe', 'Pei', 'Pek', 'Peng',
        'Pik', 'Pin', 'Ping', 'Pit', 'Piu',
        'Po', 'Poi', 'Pok', 'Pong', 'Pou',
        'Pui', 'Puk', 'Pun', 'Pung', 'Put',
        'Sa', 'Sai', 'Sak', 'Sam', 'San', 'Sang', 'Sap', 'Sat', 'Sau',
        'Se', 'Sei', 'Sek', 'Seng', 'Seuk', 'Seung',
        'Sha', 'Shai', 'Shak', 'Sham', 'Shan', 'Shang', 'Shap', 'Shat', 'Shau',
        'She', 'Shei', 'Shek', 'Sheng', 'Sheuk', 'Sheung',
        'Shi', 'Shik', 'Shim', 'Shin', 'Shing', 'Ship', 'Shit', 'Shiu',
        'Sho', 'Shoi', 'Shok', 'Shong', 'Shou',
        'Shue', 'Shuen', 'Shuet', 'Shui', 'Shuk', 'Shun', 'Shung', 'Shut',
        'Sik', 'Sim', 'Sin', 'Sing', 'Sip', 'Sit', 'Siu',
        'So', 'Soi', 'Sok', 'Song', 'Sou',
        'Sue', 'Suen', 'Suet', 'Sui', 'Suk', 'Sun', 'Sung', 'Sut',
        'Sze',
        'Ta', 'Tai', 'Tak', 'Tam', 'Tan', 'Tang', 'Tap', 'Tat', 'Tau',
        'Te', 'Tei', 'Tek', 'Teng', 'Teu', 'Teuk',
        'Tik', 'Tim', 'Tin', 'Ting', 'Tip', 'Tit', 'Tiu',
        'To', 'Toi', 'Tok', 'Tong', 'Tou',
        'Tsa', 'Tsai', 'Tsak', 'Tsam', 'Tsan', 'Tsang', 'Tsap', 'Tsat', 'Tsau',
        'Tse', 'Tsek', 'Tseng', 'Tseuk', 'Tseung',
        'Tsik', 'Tsim', 'Tsin', 'Tsing', 'Tsip', 'Tsit', 'Tsiu',
        'Tso', 'Tsoi', 'Tsok', 'Tsong', 'Tsou',
        'Tsue', 'Tsuen', 'Tsuet', 'Tsui', 'Tsuk', 'Tsun', 'Tsung', 'Tsut',
        'Tsz',
        'Tuen', 'Tuet', 'Tui', 'Tuk', 'Tun', 'Tung', 'Tut',
        'Uk', 'Ung',
        'Wa', 'Wai', 'Wak', 'Wan', 'Wang', 'Wat',
        'Wik', 'Wing',
        'Wo', 'Wok', 'Wong', 'Wu',
        'Wui', 'Wun', 'Wut', 'Ya',
        'Yai', 'Yak', 'Yam', 'Yan', 'Yap', 'Yat', 'Yau',
        'Ye', 'Yeng', 'Yeuk', 'Yeung', 'Yi',
        'Yik', 'Yim', 'Yin', 'Ying', 'Yip', 'Yit', 'Yiu',
        'Yo',
        'Yue', 'Yuen', 'Yuet', 'Yui', 'Yuk', 'Yun', 'Yung',
    );

    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{village}}',
        'Block {{buildingNumber}}, {{estate}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{town}}\\n{{city}}\",
    );

    protected static \$villageNameFormats = array(
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{villageSuffix}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{town}}',
        '{{town}} {{villageSuffix}}',
    );

    protected static \$estateNameFormats = array(
        '{{syllable}} {{syllable}} {{estateSuffix}}',
        '{{syllable}} {{syllable}} {{estateSuffix}}',
        '{{syllable}} {{syllable}} {{estateSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{estateSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{estateSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{estateSuffix}}',
        '{{town}} {{estateSuffix}}',
    );


    protected static \$villageSuffixes = array('Village', 'Tsuen', 'San Tsuen', 'New Village', 'Wai');

    protected static \$estateSuffixes = array('Estate', 'Court');

    protected static \$streetNameFormats = array(
        '{{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{direction}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{syllable}} {{direction}} {{streetSuffix}}',
        '{{syllable}} {{syllable}} {{streetSuffix}} {{direction}}',
        '{{syllable}} {{syllable}} {{syllable}} {{streetSuffix}} {{direction}}',
        '{{englishStreetName}} {{streetSuffix}}',
        '{{englishStreetName}} {{streetSuffix}} {{direction}}',
    );

    protected static \$englishStreetNames = array(
        \"King's\", \"Queen's\", \"Nathan\", \"Robinson\", \"Kingston\", \"Irving\", \"Bonham\", \"Salisbury\",
        \"Tonkin\", \"Nanking\", \"Peking\", \"Canton\", \"Amoy\", \"Shanghai\"
    );

    protected static \$streetSuffix = array(
        'Road', 'Road', 'Road', 'Street', 'Street', 'Street', 'Lane',
        'Circuit', 'Avenue', 'Path', 'Square',
    );

    protected static \$directions = array('North', 'East', 'South', 'West');

    protected static \$cities = array('Hong Kong', 'Kowloon', 'New Territories');

    protected static \$towns = array(
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        '{{syllable}} {{syllable}} {{syllable}}',
        'Aberdeen',
        'Stanley',
        'Victoria',
    );

    public function city()
    {
        return static::randomElement(static::\$cities);
    }

    public function town()
    {
        return \$this->generator->parse(static::randomElement(static::\$towns));
    }

    public function syllable()
    {
        return static::randomElement(static::\$syllables);
    }

    public function direction()
    {
        return static::randomElement(static::\$directions);
    }

    public function englishStreetName()
    {
        return static::randomElement(static::\$englishStreetNames);
    }

    public function villageSuffix()
    {
        return static::randomElement(static::\$villageSuffixes);
    }

    public function estateSuffix()
    {
        return static::randomElement(static::\$estateSuffixes);
    }

    public function village()
    {
        return \$this->generator->parse(static::randomElement(static::\$villageNameFormats));
    }

    public function estate()
    {
        return \$this->generator->parse(static::randomElement(static::\$estateNameFormats));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_HK/Address.php");
    }
}
