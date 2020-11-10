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

/* vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php */
class __TwigTemplate_1ccd71151d90de38fffe1af1eb5dd5c4d0c70190fc04c1f4c281f1371ba06e5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ms_MY;

use \\Faker\\Generator;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link https://en.wikipedia.org/wiki/Addresses_in_Malaysia
     */
    protected static \$addressFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["township"]) || array_key_exists("township", $context) ? $context["township"] : (function () { throw new RuntimeError('Variable "township" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["townState"]) || array_key_exists("townState", $context) ? $context["townState"] : (function () { throw new RuntimeError('Variable "townState" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["buildingPrefix"]) || array_key_exists("buildingPrefix", $context) ? $context["buildingPrefix"] : (function () { throw new RuntimeError('Variable "buildingPrefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * Most of the time 'No.' is not needed, and 'Lot' is less used.
     */
    protected static \$buildingPrefix = array(
        '','','','','','',
        'No. ','No. ','No. ',
        'Lot ',
    );

    protected static \$buildingNumber = array(
        '%','%','%',
        '%#','%#','%#','%#',
        '%##',
        '%-%',
        '?-##-##',
        '%?-##'
    );

    protected static \$streetNameFormats = array(
        '";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " %',
        '";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " %/%',
        '";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " %/%#',
        '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " %/%?',
        '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " %/%#?',
        '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " %?',
        '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " %#?',
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " %',
        '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " %/%',
        '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " %/%#',
        '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " %/%?',
        '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " %/%#?',
        '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " %?',
        '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " %#?',
    );

    protected static \$townshipFormats = array(
        '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["townshipPrefix"]) || array_key_exists("townshipPrefix", $context) ? $context["townshipPrefix"] : (function () { throw new RuntimeError('Variable "townshipPrefix" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["townshipSuffix"]) || array_key_exists("townshipSuffix", $context) ? $context["townshipSuffix"] : (function () { throw new RuntimeError('Variable "townshipSuffix" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["townshipPrefixAbbr"]) || array_key_exists("townshipPrefixAbbr", $context) ? $context["townshipPrefixAbbr"] : (function () { throw new RuntimeError('Variable "townshipPrefixAbbr" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "%',
        '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["townshipPrefixAbbr"]) || array_key_exists("townshipPrefixAbbr", $context) ? $context["townshipPrefixAbbr"] : (function () { throw new RuntimeError('Variable "townshipPrefixAbbr" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "%#',
        '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["townshipPrefixAbbr"]) || array_key_exists("townshipPrefixAbbr", $context) ? $context["townshipPrefixAbbr"] : (function () { throw new RuntimeError('Variable "townshipPrefixAbbr" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "%#?',
    );

    /**
     * 'Jalan' & 'Jln' are more frequently used than 'Lorong'
     * 
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur#Standard_translations
     */
    protected static \$streetPrefix = array(
        'Jln','Jln',
        'Jalan','Jalan','Jalan',
        'Lorong'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Ipoh
     * @link https://en.wikipedia.org/wiki/Transportation_in_Seremban#Inner_city_roads
     * @link https://en.wikipedia.org/wiki/List_of_streets_in_George_Town,_Penang
     */
    protected static \$streetSuffix = array(
        'Air Itam','Alor','Ampang','Ampang Hilir','Anson','Ariffin',
        'Bangsar','Baru','Bellamy','Birch','Bijih Timah','Bukit Aman','Bukit Bintang','Bukit Petaling','Bukit Tunku',
        'Cantonment','Cenderawasih','Chan Sow Lin','Chow Kit','Cinta','Cochrane','Conlay',
        'D. S. Ramanathan','Damansara','Dang Wangi','Davis','Dewan Bahasa','Dato Abdul Rahman','Dato\\'Keramat','Dato\\' Maharaja Lela','Doraisamy',
        'Eaton',
        'Faraday',
        'Galloway','Genting Klang','Gereja',
        'Hang Jebat','Hang Kasturi','Hang Lekir','Hang Lekiu','Hang Tuah','Hospital',
        'Imbi','Istana',
        'Jelutong',
        'Kampung Attap','Kebun Bunga','Kedah','Keliling','Kia Peng','Kinabalu','Kuala Kangsar','Kuching',
        'Ledang','Lembah Permai','Loke Yew','Lt. Adnan','Lumba Kuda',
        'Madras','Magazine','Maharajalela','Masjid','Maxwell','Mohana Chandran','Muda',
        'P. Ramlee','Padang Kota Lama','Pahang','Pantai Baharu','Parlimen','Pasar','Pasar Besar','Perak','Perdana','Petaling','Prangin','Pudu','Pudu Lama',
        'Raja','Raja Abdullah','Raja Chulan','Raja Laut','Rakyat','Residensi','Robson',
        'S.P. Seenivasagam','Samarahan 1','Selamat','Sempadan','Sentul','Serian 1','Sasaran','Sin Chee','Sultan Abdul Samad','Sultan Azlan Shah','Sultan Iskandar','Sultan Ismail','Sultan Sulaiman','Sungai Besi','Syed Putra',
        'Tan Cheng Lock','Thambipillay','Tugu','Tuanku Abdul Halim','Tuanku Abdul Rahman','Tun Abdul Razak','Tun Dr Ismail','Tun H S Lee','Tun Ismail','Tun Perak','Tun Razak','Tun Sambanthan',
        'U-Thant','Utama',
        'Vermont','Vivekananda',
        'Wan Kadir','Wesley','Wisma Putra',
        'Yaacob Latif','Yap Ah Loy','Yap Ah Shak','Yap Kwan Seng','Yew',
        'Zaaba','Zainal Abidin'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Petaling_Jaya_city_sections
     * @link https://en.wikipedia.org/wiki/UEP_Subang_Jaya#History
     */
    protected static \$townshipPrefixAbbr = array(
        'SS','Seksyen ','PJS','PJU','USJ ',
    );

    /**
     * 'Bandar' and 'Taman' are the most common township prefix
     * 
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur > Townships
     * @link https://en.wikipedia.org/wiki/Template:Johor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kedah > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kelantan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Melaka > Townships
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Perak > Townships
     * @link https://en.wikipedia.org/wiki/Template:Penang > Townships
     * @link https://en.wikipedia.org/wiki/Template:Selangor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Terengganu > Townships
     */
    protected static \$townshipPrefix = array(
        'Alam','Apartment','Ara',
        'Bandar','Bandar','Bandar','Bandar','Bandar','Bandar',
        'Bandar Bukit','Bandar Seri','Bandar Sri','Bandar Baru','Batu','Bukit',
        'Desa','Damansara',
        'Kampung','Kampung Baru','Kampung Baru','Kondominium','Kota',
        'Laman','Lembah',
        'Medan',
        'Pandan','Pangsapuri','Petaling','Puncak',
        'Seri','Sri',
        'Taman','Taman','Taman','Taman','Taman','Taman',
        'Taman Desa',
    );
    protected static \$townshipSuffix = array(
        'Aman','Amanjaya','Anggerik','Angkasa','Antarabangsa','Awan',
        'Bahagia','Bangsar','Baru','Belakong','Bendahara','Bestari','Bintang','Brickfields',
        'Casa','Changkat','Country Heights',
        'Damansara','Damai','Dato Harun','Delima','Duta',
        'Flora',
        'Gembira','Genting',
        'Harmoni','Hartamas',
        'Impian','Indah','Intan',
        'Jasa','Jaya',
        'Keramat','Kerinchi','Kiara','Kinrara','Kuchai',
        'Laksamana',
        'Mahkota','Maluri','Manggis','Maxwell','Medan','Melawati','Menjalara','Meru','Mulia','Mutiara',
        'Pahlawan','Perdana','Pertama','Permai','Pelangi','Petaling','Pinang','Puchong','Puteri','Putra',
        'Rahman','Rahmat','Raya','Razak','Ria',
        'Saujana','Segambut','Selamat','Selatan','Semarak','Sentosa','Seputeh','Setapak','Setia Jaya','Sinar','Sungai Besi','Sungai Buaya','Sungai Long','Suria',
        'Tasik Puteri','Tengah','Timur','Tinggi','Tropika','Tun Hussein Onn','Tun Perak','Tunku',
        'Ulu','Utama','Utara',
        'Wangi',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur
     * @link https://en.wikipedia.org/wiki/Template:Johor
     * @link https://en.wikipedia.org/wiki/Template:Kedah
     * @link https://en.wikipedia.org/wiki/Template:Kelantan
     * @link https://en.wikipedia.org/wiki/Template:Labuan
     * @link https://en.wikipedia.org/wiki/Template:Melaka
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan
     * @link https://en.wikipedia.org/wiki/Template:Pahang
     * @link https://en.wikipedia.org/wiki/Template:Perak
     * @link https://en.wikipedia.org/wiki/Template:Perlis
     * @link https://en.wikipedia.org/wiki/Template:Penang
     * @link https://en.wikipedia.org/wiki/Template:Sabah
     * @link https://en.wikipedia.org/wiki/Template:Sarawak
     * @link https://en.wikipedia.org/wiki/Template:Selangor
     * @link https://en.wikipedia.org/wiki/Template:Terengganu
     */
    protected static \$towns = array(
        'johor' => array(
            'Ayer Hitam',
            'Batu Pahat','Bukit Gambir','Bukit Kepong','Bukit Naning',
            'Desaru',
            'Endau',
            'Gelang Patah','Gemas Baharu',
            'Iskandar Puteri',
            'Jementah','Johor Lama','Johor Bahru',
            'Kempas','Kluang','Kota Iskandar','Kota Tinggi','Kukup','Kulai',
            'Labis ','Larkin','Layang-Layang',
            'Mersing','Muar',
            'Pagoh','Paloh','Parit Jawa','Pasir Gudang','Pekan Nanas','Permas Jaya','Pontian Kechil',
            'Renggam',
            'Segamat','Senai','Simpang Renggam','Skudai','Sri Gading',
            'Tangkak','Tebrau',
            'Ulu Tiram',
            'Yong Peng',
        ),
        'kedah' => array(
            'Alor Setar',
            'Baling','Bukit Kayu Hitam',
            'Changlun',
            'Durian Burung',
            'Gurun',
            'Jitra',
            'Kepala Batas','Kuah','Kuala Kedah','Kuala Ketil','Kulim',
            'Langgar','Lunas',
            'Merbok',
            'Padang Serai','Pendang',
            'Serdang','Sintok','Sungai Petani',
            'Tawar, Baling',
            'Yan',
        ),
        'kelantan' => array(
            'Bachok','Bunut Payong',
            'Dabong',
            'Gua Musang',
            'Jeli',
            'Ketereh','Kota Bharu','Kuala Krai',
            'Lojing',
            'Machang',
            'Pasir Mas','Pasir Puteh',
            'Rantau Panjang',
            'Salor',
            'Tok Bali',
            'Wakaf Bharu','Wakaf Che Yeh',
        ),
        'kl' => array(
            'Ampang',
            'Bandar Tasik Selatan','Bandar Tun Razak','Bangsar','Batu','Brickfields','Bukit Bintang','Bukit Jalil','Bukit Tunku',
            'Cheras','Chow Kit',
            'Damansara Town Centre','Dang Wangi','Desa Petaling','Desa Tun Hussein Onn',
            'Jinjang',
            'Kampung Baru','Kampung Kasipillay','Kampung Pandan','Kampung Sungai Penchala','Kepong','KLCC','Kuchai Lama',
            'Lake Gardens','Lembah Pantai',
            'Medan Tuanku','Mid Valley City','Mont Kiara',
            'Pantai Dalam','Pudu',
            'Salak South','Segambut','Semarak','Sentul','Setapak','Setiawangsa','Seputeh','Sri Hartamas','Sri Petaling','Sungai Besi',
            'Taman Desa','Taman Melawati','Taman OUG','Taman Tun Dr Ismail','Taman U-Thant','Taman Wahyu','Titiwangsa','Tun Razak Exchange',
            'Wangsa Maju',
        ),
        'labuan' => array(
            'Batu Manikar',
            'Kiamsam',
            'Layang-Layang',
            'Rancha-Rancha'
        ),
        'melaka' => array(
            'Alor Gajah',
            'Bandaraya Melaka','Batu Berendam','Bukit Beruang','Bukit Katil',
            'Cheng',
            'Durian Tunggal',
            'Hang Tuah Jaya',
            'Jasin',
            'Klebang',
            'Lubuk China',
            'Masjid Tanah',
            'Naning',
            'Pekan Asahan',
            'Ramuan China',
            'Simpang Ampat',
            'Tanjung Bidara','Telok Mas',
            'Umbai',
        ),
        'nsembilan' => array(
            'Ayer Kuning','Ampangan',
            'Bahau','Batang Benar',
            'Chembong',
            'Dangi',
            'Gemas',
            'Juasseh',
            'Kuala Pilah',
            'Labu','Lenggeng','Linggi',
            'Mantin',
            'Nilai',
            'Pajam','Pedas','Pengkalan Kempas','Port Dickson',
            'Rantau','Rompin',
            'Senawang','Seremban','Sungai Gadut',
            'Tampin','Tiroi',
        ),
        'pahang' => array(
            'Bandar Tun Razak','Bentong','Brinchang','Bukit Fraser','Bukit Tinggi',
            'Chendor',
            'Gambang','Genting Highlands','Genting Sempah',
            'Jerantut',
            'Karak','Kemayan','Kota Shahbandar','Kuala Lipis','Kuala Pahang','Kuala Rompin','Kuantan',
            'Lanchang','Lubuk Paku',
            'Maran','Mengkuang','Mentakab',
            'Nenasi',
            'Panching',
            'Pekan','Penor',
            'Raub',
            'Sebertak','Sungai Lembing',
            'Tanah Rata','Tanjung Sepat','Tasik Chini','Temerloh','Teriang','Tringkap',
        ),
        'penang' => array(
            'Air Itam',
            'Balik Pulau','Batu Ferringhi','Batu Kawan','Bayan Lepas','Bukit Mertajam','Butterworth',
            'Gelugor','George Town',
            'Jelutong',
            'Kepala Batas',
            'Nibong Tebal',
            'Permatang Pauh','Pulau Tikus',
            'Simpang Ampat',
            'Tanjung Bungah','Tanjung Tokong',
        ),
        'perak' => array(
            'Ayer Tawar',
            'Bagan Serai','Batu Gajah','Behrang','Bidor','Bukit Gantang','Bukit Merah',
            'Changkat Jering','Chemor','Chenderiang',
            'Damar Laut',
            'Gerik','Gopeng','Gua Tempurung',
            'Hutan Melintang',
            'Ipoh',
            'Jelapang',
            'Kamunting','Kampar','Kuala Kangsar',
            'Lekir','Lenggong','Lumut',
            'Malim Nawar','Manong','Menglembu',
            'Pantai Remis','Parit','Parit Buntar','Pasir Salak','Proton City',
            'Simpang Pulai','Sitiawan','Slim River','Sungai Siput','Sungkai',
            'Taiping','Tambun','Tanjung Malim','Tanjung Rambutan','Tapah','Teluk Intan',
            'Ulu Bernam',
        ),
        'perlis' => array(
            'Arau',
            'Beseri',
            'Chuping',
            'Kaki Bukit','Kangar','Kuala Perlis',
            'Mata Ayer',
            'Padang Besar',
            'Sanglang','Simpang Empat',
            'Wang Kelian',
        ),
        'putrajaya' => array(
            'Precinct 1','Precinct 4','Precinct 5',
            'Precinct 6','Precinct 8','Precinct 10',
            'Precinct 11','Precinct 12','Precinct 13',
            'Precinct 16','Precinct 18','Precinct 19',
        ),
        'sabah' => array(
            'Beaufort','Bingkor',
            'Donggongon',
            'Inanam',
            'Kinabatangan','Kota Belud','Kota Kinabalu','Kuala Penyu','Kimanis','Kundasang',
            'Lahad Datu','Likas','Lok Kawi',
            'Manggatal',
            'Nabawan',
            'Papar','Pitas',
            'Ranau',
            'Sandakan','Sapulut','Semporna','Sepanggar',
            'Tambunan','Tanjung Aru','Tawau','Tenom','Tuaran',
            'Weston',
        ),
        'sarawak' => array(
            'Asajaya',
            'Ba\\'kelalan','Bario','Batu Kawa','Batu Niah','Betong','Bintulu',
            'Dalat','Daro',
            'Engkilili',
            'Julau',
            'Kapit','Kota Samarahan','Kuching',
            'Lawas','Limbang','Lubok Antu',
            'Marudi','Matu','Miri',
            'Oya',
            'Pakan',
            'Sadong Jaya','Sematan','Sibu','Siburan','Song','Sri Aman','Sungai Tujoh',
            'Tanjung Kidurong','Tanjung Manis','Tatau',
        ),
        'selangor' => array(
            'Ampang','Assam Jawa',
            'Balakong','Bandar Baru Bangi','Bandar Baru Selayang','Bandar Sunway','Bangi','Banting','Batang Kali','Batu Caves','Bestari Jaya','Bukit Lanjan',
            'Cheras','Cyberjaya',
            'Damansara','Dengkil',
            'Ijok',
            'Jenjarom',
            'Kajang','Kelana Jaya','Klang','Kuala Kubu Bharu','Kuala Selangor','Kuang',
            'Lagong',
            'Morib',
            'Pandamaran','Paya Jaras','Petaling Jaya','Port Klang','Puchong',
            'Rasa','Rawang',
            'Salak Tinggi','Sekinchan','Selayang','Semenyih','Sepang','Serendah','Seri Kembangan','Shah Alam','Subang','Subang Jaya','Sungai Buloh',
            'Tanjung Karang','Tanjung Sepat',
            'Ulu Klang','Ulu Yam',
        ),
        'terengganu' => array(
            'Ajil',
            'Bandar Ketengah Jaya','Bandar Permaisuri','Bukit Besi','Bukit Payong',
            'Chukai',
            'Jerteh',
            'Kampung Raja','Kerteh','Kijal','Kuala Besut','Kuala Berang','Kuala Dungun','Kuala Terengganu',
            'Marang','Merchang',
            'Pasir Raja',
            'Rantau Abang',
            'Teluk Kalung',
            'Wakaf Tapai',
        )
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/States_and_federal_territories_of_Malaysia
     */
    protected static \$states = array(
        'johor' => array(
            'Johor Darul Ta\\'zim',
            'Johor'
        ),
        'kedah' => array(
            'Kedah Darul Aman',
            'Kedah'
        ),
        'kelantan' => array(
            'Kelantan Darul Naim',
            'Kelantan'
        ),
        'kl' => array(
            'KL',
            'Kuala Lumpur',
            'WP Kuala Lumpur'
        ),
        'labuan' => array(
            'Labuan'
        ),
        'melaka' => array(
            'Malacca',
            'Melaka'
        ),
        'nsembilan' => array(
            'Negeri Sembilan Darul Khusus',
            'Negeri Sembilan'
        ),
        'pahang' => array(
            'Pahang Darul Makmur',
            'Pahang'
        ),
        'penang' => array(
            'Penang',
            'Pulau Pinang'
        ),
        'perak' => array(
            'Perak Darul Ridzuan',
            'Perak'
        ),
        'perlis' => array(
            'Perlis Indera Kayangan',
            'Perlis'
        ),
        'putrajaya' => array(
            'Putrajaya'
        ),
        'sabah' => array(
            'Sabah'
        ),
        'sarawak' => array(
            'Sarawak'
        ),
        'selangor' => array(
            'Selangor Darul Ehsan',
            'Selangor'
        ),
        'terengganu' => array(
            'Terengganu Darul Iman',
            'Terengganu'
        )
    );

    /**
     * @link https://ms.wikipedia.org/wiki/Senarai_negara_berdaulat
     */
    protected static \$country = array(
        'Abkhazia','Afghanistan','Afrika Selatan','Republik Afrika Tengah','Akrotiri dan Dhekelia','Albania','Algeria','Amerika Syarikat','Andorra','Angola','Antigua dan Barbuda','Arab Saudi','Argentina','Armenia','Australia','Austria','Azerbaijan',
        'Bahamas','Bahrain','Bangladesh','Barbados','Belanda','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bonaire','Bosnia dan Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi',
        'Cameroon','Chad','Chile','Republik Rakyat China','Republik China di Taiwan','Colombia','Comoros','Republik Demokratik Congo','Republik Congo','Kepulauan Cook','Costa Rica','Côte d\\'Ivoire (Ivory Coast)','Croatia','Cuba','Curaçao','Cyprus','Republik Turki Cyprus Utara','Republik Czech',
        'Denmark','Djibouti','Dominika','Republik Dominika',
        'Ecuador','El Salvador','Emiriah Arab Bersatu','Eritrea','Estonia',
        'Kepulauan Faroe','Fiji','Filipina','Finland',
        'Gabon','Gambia','Georgia','Ghana','Grenada','Greece (Yunani)','Guatemala','Guinea','Guinea-Bissau','Guinea Khatulistiwa','Guiana Perancis','Guyana',
        'Habsyah (Etiopia)','Haiti','Honduras','Hungary',
        'Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Itali',
        'Jamaika','Jepun','Jerman','Jordan',
        'Kanada','Kazakhstan','Kemboja','Kenya','Kiribati','Korea Selatan','Korea Utara','Kosovo','Kuwait','Kyrgyzstan',
        'Laos','Latvia','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Lubnan','Luxembourg',
        'Macedonia','Madagaskar','Maghribi','Malawi','Malaysia','Maldives','Mali','Malta','Kepulauan Marshall','Mauritania','Mauritius','Mesir','Mexico','Persekutuan Micronesia','Moldova','Monaco','Montenegro','Mongolia','Mozambique','Myanmar',
        'Namibia','Nauru','Nepal','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norway',
        'Oman','Ossetia Selatan',
        'Pakistan','Palau','Palestin','Panama','Papua New Guinea','Paraguay','Perancis','Peru','Poland','Portugal',
        'Qatar',
        'Romania','Russia','Rwanda',
        'Sahara Barat','Saint Kitts dan Nevis','Saint Lucia','Saint Vincent dan Grenadines','Samoa','San Marino','São Tomé dan Príncipe','Scotland','Senegal','Sepanyol','Serbia','Seychelles','Sierra Leone','Singapura','Slovakia','Slovenia','Kepulauan Solomon','Somalia','Somaliland','Sri Lanka','Sudan','Sudan Selatan','Suriname','Swaziland','Sweden','Switzerland','Syria',
        'Tajikistan','Tanjung Verde','Tanzania','Thailand','Timor Leste','Togo','Tonga','Transnistria','Trinidad dan Tobago','Tunisia','Turki','Turkmenistan','Tuvalu',
        'Uganda','Ukraine','United Kingdom','Uruguay','Uzbekistan',
        'Vanuatu','Kota Vatican','Venezuela','Vietnam',
        'Yaman',
        'Zambia','Zimbabwe',
    );

    /**
     * Return a building prefix
     * 
     * @example 'No.'
     * 
     * @return @string
     */
    public static function buildingPrefix()
    {
        return static::randomElement(static::\$buildingPrefix);
    }

    /**
     * Return a building number
     * 
     * @example '123'
     * 
     * @return @string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$buildingNumber))));
    }

    /**
     * Return a street prefix
     * 
     * @example 'Jalan'
     */
    public function streetPrefix()
    {
        \$format = static::randomElement(static::\$streetPrefix);

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a complete streename
     * 
     * @example 'Jalan Utama 7'
     * 
     * @return @string
     */
    public function streetName()
    {
        \$format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$streetNameFormats))));

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a randown township
     * 
     * @example Taman Bahagia
     * 
     * @return @string
     */
    public function township()
    {
        \$format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$townshipFormats))));

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a township prefix abbreviation
     * 
     * @example 'USJ'
     * 
     * @return @string
     */
    public function townshipPrefixAbbr()
    {
        return static::randomElement(static::\$townshipPrefixAbbr);
    }

    /**
     * Return a township prefix
     * 
     * @example 'Taman'
     * 
     * @return @string
     */
    public function townshipPrefix()
    {
        return static::randomElement(static::\$townshipPrefix);
    }

    /**
     * Return a township suffix
     * 
     * @example 'Bahagia'
     */
    public function townshipSuffix()
    {
        return static::randomElement(static::\$townshipSuffix);
    }

    /**
     * Return a postcode based on state
     * 
     * @example '55100'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @param null|string \$state 'state' or null
     * 
     * @return @string
     */
    public static function postcode(\$state = null)
    {
        \$format = array(
            'perlis' => array( // (01000 - 02800)
                '0' . mt_rand(1000, 2800)
            ),
            'kedah' => array( // (05000 - 09810)
                '0' . mt_rand(5000, 9810)
            ),
            'penang' => array( // (10000 - 14400)
                mt_rand(10000, 14400)
            ),
            'kelantan' => array( // (15000 - 18500)
                mt_rand(15000, 18500)
            ),
            'terengganu' => array( // (20000 - 24300)
                mt_rand(20000, 24300)
            ),
            'pahang' => array( // (25000 - 28800 | 39000 - 39200 | 49000, 69000)
                mt_rand(25000, 28800),
                mt_rand(39000, 39200),
                mt_rand(49000, 69000)
            ),
            'perak' => array( // (30000 - 36810)
                mt_rand(30000, 36810)
            ),
            'selangor' => array( // (40000 - 48300 | 63000 - 68100)
                mt_rand(40000, 48300),
                mt_rand(63000, 68100)
            ),
            'kl' => array( // (50000 - 60000)
                mt_rand(50000, 60000),
            ),
            'putrajaya' => array( // (62000 - 62988)
                mt_rand(62000, 62988)
            ),
            'nsembilan' => array( // (70000 - 73509)
                mt_rand(70000, 73509)
            ),
            'melaka' => array( // (75000 - 78309)
                mt_rand(75000, 78309)
            ),
            'johor' => array( // (79000 - 86900)
                mt_rand(79000, 86900)
            ),
            'labuan' => array( // (87000 - 87033)
                mt_rand(87000, 87033)
            ),
            'sabah' => array( // (88000 - 91309)
                mt_rand(88000, 91309)
            ),
            'sarawak' => array( // (93000 - 98859)
                mt_rand(93000, 98859)
            )
        );

        \$postcode = is_null(\$state) ? static::randomElement(\$format) : \$format[\$state];
        return (string)static::randomElement(\$postcode);
    }

    /**
     * Return the complete town address with matching postcode and state
     * 
     * @example 55100 Bukit Bintang, Kuala Lumpur
     * 
     * @return @string
     */
    public function townState()
    {
        \$state = static::randomElement(array_keys(static::\$states));
        \$postcode = static::postcode(\$state);
        \$town = static::randomElement(static::\$towns[\$state]);
        \$state = static::randomElement(static::\$states[\$state]);

        return \$postcode . ' ' . \$town . ', ' . \$state;
    }
    
    /**
     * Return a random city (town)
     * 
     * @example 'Ampang'
     * 
     * @return @string
    */
    public function city()
    {
        \$state = static::randomElement(array_keys(static::\$towns));
        return static::randomElement(static::\$towns[\$state]);
    }
    
    /**
     * Return a random state
     * 
     * @example 'Johor'
     * 
     * @return @string
    */
    public function state()
    {
        \$state = static::randomElement(array_keys(static::\$states));
        return static::randomElement(static::\$states[\$state]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 65,  215 => 64,  211 => 63,  205 => 62,  199 => 61,  193 => 60,  187 => 59,  181 => 58,  175 => 57,  166 => 53,  160 => 52,  154 => 51,  148 => 50,  142 => 49,  136 => 48,  130 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  68 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ms_MY;

use \\Faker\\Generator;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link https://en.wikipedia.org/wiki/Addresses_in_Malaysia
     */
    protected static \$addressFormats = array(
        '{{streetAddress}}, {{township}}, {{townState}}',
    );

    protected static \$streetAddressFormats = array(
        '{{buildingPrefix}}{{buildingNumber}}, {{streetName}}'
    );

    /**
     * Most of the time 'No.' is not needed, and 'Lot' is less used.
     */
    protected static \$buildingPrefix = array(
        '','','','','','',
        'No. ','No. ','No. ',
        'Lot ',
    );

    protected static \$buildingNumber = array(
        '%','%','%',
        '%#','%#','%#','%#',
        '%##',
        '%-%',
        '?-##-##',
        '%?-##'
    );

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} %',
        '{{streetPrefix}} %/%',
        '{{streetPrefix}} %/%#',
        '{{streetPrefix}} %/%?',
        '{{streetPrefix}} %/%#?',
        '{{streetPrefix}} %?',
        '{{streetPrefix}} %#?',
        '{{streetPrefix}} {{streetSuffix}}',
        '{{streetPrefix}} {{streetSuffix}} %',
        '{{streetPrefix}} {{streetSuffix}} %/%',
        '{{streetPrefix}} {{streetSuffix}} %/%#',
        '{{streetPrefix}} {{streetSuffix}} %/%?',
        '{{streetPrefix}} {{streetSuffix}} %/%#?',
        '{{streetPrefix}} {{streetSuffix}} %?',
        '{{streetPrefix}} {{streetSuffix}} %#?',
    );

    protected static \$townshipFormats = array(
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefix}} {{townshipSuffix}}',
        '{{townshipPrefixAbbr}}%',
        '{{townshipPrefixAbbr}}%#',
        '{{townshipPrefixAbbr}}%#?',
    );

    /**
     * 'Jalan' & 'Jln' are more frequently used than 'Lorong'
     * 
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur#Standard_translations
     */
    protected static \$streetPrefix = array(
        'Jln','Jln',
        'Jalan','Jalan','Jalan',
        'Lorong'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Ipoh
     * @link https://en.wikipedia.org/wiki/Transportation_in_Seremban#Inner_city_roads
     * @link https://en.wikipedia.org/wiki/List_of_streets_in_George_Town,_Penang
     */
    protected static \$streetSuffix = array(
        'Air Itam','Alor','Ampang','Ampang Hilir','Anson','Ariffin',
        'Bangsar','Baru','Bellamy','Birch','Bijih Timah','Bukit Aman','Bukit Bintang','Bukit Petaling','Bukit Tunku',
        'Cantonment','Cenderawasih','Chan Sow Lin','Chow Kit','Cinta','Cochrane','Conlay',
        'D. S. Ramanathan','Damansara','Dang Wangi','Davis','Dewan Bahasa','Dato Abdul Rahman','Dato\\'Keramat','Dato\\' Maharaja Lela','Doraisamy',
        'Eaton',
        'Faraday',
        'Galloway','Genting Klang','Gereja',
        'Hang Jebat','Hang Kasturi','Hang Lekir','Hang Lekiu','Hang Tuah','Hospital',
        'Imbi','Istana',
        'Jelutong',
        'Kampung Attap','Kebun Bunga','Kedah','Keliling','Kia Peng','Kinabalu','Kuala Kangsar','Kuching',
        'Ledang','Lembah Permai','Loke Yew','Lt. Adnan','Lumba Kuda',
        'Madras','Magazine','Maharajalela','Masjid','Maxwell','Mohana Chandran','Muda',
        'P. Ramlee','Padang Kota Lama','Pahang','Pantai Baharu','Parlimen','Pasar','Pasar Besar','Perak','Perdana','Petaling','Prangin','Pudu','Pudu Lama',
        'Raja','Raja Abdullah','Raja Chulan','Raja Laut','Rakyat','Residensi','Robson',
        'S.P. Seenivasagam','Samarahan 1','Selamat','Sempadan','Sentul','Serian 1','Sasaran','Sin Chee','Sultan Abdul Samad','Sultan Azlan Shah','Sultan Iskandar','Sultan Ismail','Sultan Sulaiman','Sungai Besi','Syed Putra',
        'Tan Cheng Lock','Thambipillay','Tugu','Tuanku Abdul Halim','Tuanku Abdul Rahman','Tun Abdul Razak','Tun Dr Ismail','Tun H S Lee','Tun Ismail','Tun Perak','Tun Razak','Tun Sambanthan',
        'U-Thant','Utama',
        'Vermont','Vivekananda',
        'Wan Kadir','Wesley','Wisma Putra',
        'Yaacob Latif','Yap Ah Loy','Yap Ah Shak','Yap Kwan Seng','Yew',
        'Zaaba','Zainal Abidin'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Petaling_Jaya_city_sections
     * @link https://en.wikipedia.org/wiki/UEP_Subang_Jaya#History
     */
    protected static \$townshipPrefixAbbr = array(
        'SS','Seksyen ','PJS','PJU','USJ ',
    );

    /**
     * 'Bandar' and 'Taman' are the most common township prefix
     * 
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur > Townships
     * @link https://en.wikipedia.org/wiki/Template:Johor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kedah > Townships
     * @link https://en.wikipedia.org/wiki/Template:Kelantan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Melaka > Townships
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan > Townships
     * @link https://en.wikipedia.org/wiki/Template:Perak > Townships
     * @link https://en.wikipedia.org/wiki/Template:Penang > Townships
     * @link https://en.wikipedia.org/wiki/Template:Selangor > Townships
     * @link https://en.wikipedia.org/wiki/Template:Terengganu > Townships
     */
    protected static \$townshipPrefix = array(
        'Alam','Apartment','Ara',
        'Bandar','Bandar','Bandar','Bandar','Bandar','Bandar',
        'Bandar Bukit','Bandar Seri','Bandar Sri','Bandar Baru','Batu','Bukit',
        'Desa','Damansara',
        'Kampung','Kampung Baru','Kampung Baru','Kondominium','Kota',
        'Laman','Lembah',
        'Medan',
        'Pandan','Pangsapuri','Petaling','Puncak',
        'Seri','Sri',
        'Taman','Taman','Taman','Taman','Taman','Taman',
        'Taman Desa',
    );
    protected static \$townshipSuffix = array(
        'Aman','Amanjaya','Anggerik','Angkasa','Antarabangsa','Awan',
        'Bahagia','Bangsar','Baru','Belakong','Bendahara','Bestari','Bintang','Brickfields',
        'Casa','Changkat','Country Heights',
        'Damansara','Damai','Dato Harun','Delima','Duta',
        'Flora',
        'Gembira','Genting',
        'Harmoni','Hartamas',
        'Impian','Indah','Intan',
        'Jasa','Jaya',
        'Keramat','Kerinchi','Kiara','Kinrara','Kuchai',
        'Laksamana',
        'Mahkota','Maluri','Manggis','Maxwell','Medan','Melawati','Menjalara','Meru','Mulia','Mutiara',
        'Pahlawan','Perdana','Pertama','Permai','Pelangi','Petaling','Pinang','Puchong','Puteri','Putra',
        'Rahman','Rahmat','Raya','Razak','Ria',
        'Saujana','Segambut','Selamat','Selatan','Semarak','Sentosa','Seputeh','Setapak','Setia Jaya','Sinar','Sungai Besi','Sungai Buaya','Sungai Long','Suria',
        'Tasik Puteri','Tengah','Timur','Tinggi','Tropika','Tun Hussein Onn','Tun Perak','Tunku',
        'Ulu','Utama','Utara',
        'Wangi',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Template:Greater_Kuala_Lumpur
     * @link https://en.wikipedia.org/wiki/Template:Johor
     * @link https://en.wikipedia.org/wiki/Template:Kedah
     * @link https://en.wikipedia.org/wiki/Template:Kelantan
     * @link https://en.wikipedia.org/wiki/Template:Labuan
     * @link https://en.wikipedia.org/wiki/Template:Melaka
     * @link https://en.wikipedia.org/wiki/Template:Negeri_Sembilan
     * @link https://en.wikipedia.org/wiki/Template:Pahang
     * @link https://en.wikipedia.org/wiki/Template:Perak
     * @link https://en.wikipedia.org/wiki/Template:Perlis
     * @link https://en.wikipedia.org/wiki/Template:Penang
     * @link https://en.wikipedia.org/wiki/Template:Sabah
     * @link https://en.wikipedia.org/wiki/Template:Sarawak
     * @link https://en.wikipedia.org/wiki/Template:Selangor
     * @link https://en.wikipedia.org/wiki/Template:Terengganu
     */
    protected static \$towns = array(
        'johor' => array(
            'Ayer Hitam',
            'Batu Pahat','Bukit Gambir','Bukit Kepong','Bukit Naning',
            'Desaru',
            'Endau',
            'Gelang Patah','Gemas Baharu',
            'Iskandar Puteri',
            'Jementah','Johor Lama','Johor Bahru',
            'Kempas','Kluang','Kota Iskandar','Kota Tinggi','Kukup','Kulai',
            'Labis ','Larkin','Layang-Layang',
            'Mersing','Muar',
            'Pagoh','Paloh','Parit Jawa','Pasir Gudang','Pekan Nanas','Permas Jaya','Pontian Kechil',
            'Renggam',
            'Segamat','Senai','Simpang Renggam','Skudai','Sri Gading',
            'Tangkak','Tebrau',
            'Ulu Tiram',
            'Yong Peng',
        ),
        'kedah' => array(
            'Alor Setar',
            'Baling','Bukit Kayu Hitam',
            'Changlun',
            'Durian Burung',
            'Gurun',
            'Jitra',
            'Kepala Batas','Kuah','Kuala Kedah','Kuala Ketil','Kulim',
            'Langgar','Lunas',
            'Merbok',
            'Padang Serai','Pendang',
            'Serdang','Sintok','Sungai Petani',
            'Tawar, Baling',
            'Yan',
        ),
        'kelantan' => array(
            'Bachok','Bunut Payong',
            'Dabong',
            'Gua Musang',
            'Jeli',
            'Ketereh','Kota Bharu','Kuala Krai',
            'Lojing',
            'Machang',
            'Pasir Mas','Pasir Puteh',
            'Rantau Panjang',
            'Salor',
            'Tok Bali',
            'Wakaf Bharu','Wakaf Che Yeh',
        ),
        'kl' => array(
            'Ampang',
            'Bandar Tasik Selatan','Bandar Tun Razak','Bangsar','Batu','Brickfields','Bukit Bintang','Bukit Jalil','Bukit Tunku',
            'Cheras','Chow Kit',
            'Damansara Town Centre','Dang Wangi','Desa Petaling','Desa Tun Hussein Onn',
            'Jinjang',
            'Kampung Baru','Kampung Kasipillay','Kampung Pandan','Kampung Sungai Penchala','Kepong','KLCC','Kuchai Lama',
            'Lake Gardens','Lembah Pantai',
            'Medan Tuanku','Mid Valley City','Mont Kiara',
            'Pantai Dalam','Pudu',
            'Salak South','Segambut','Semarak','Sentul','Setapak','Setiawangsa','Seputeh','Sri Hartamas','Sri Petaling','Sungai Besi',
            'Taman Desa','Taman Melawati','Taman OUG','Taman Tun Dr Ismail','Taman U-Thant','Taman Wahyu','Titiwangsa','Tun Razak Exchange',
            'Wangsa Maju',
        ),
        'labuan' => array(
            'Batu Manikar',
            'Kiamsam',
            'Layang-Layang',
            'Rancha-Rancha'
        ),
        'melaka' => array(
            'Alor Gajah',
            'Bandaraya Melaka','Batu Berendam','Bukit Beruang','Bukit Katil',
            'Cheng',
            'Durian Tunggal',
            'Hang Tuah Jaya',
            'Jasin',
            'Klebang',
            'Lubuk China',
            'Masjid Tanah',
            'Naning',
            'Pekan Asahan',
            'Ramuan China',
            'Simpang Ampat',
            'Tanjung Bidara','Telok Mas',
            'Umbai',
        ),
        'nsembilan' => array(
            'Ayer Kuning','Ampangan',
            'Bahau','Batang Benar',
            'Chembong',
            'Dangi',
            'Gemas',
            'Juasseh',
            'Kuala Pilah',
            'Labu','Lenggeng','Linggi',
            'Mantin',
            'Nilai',
            'Pajam','Pedas','Pengkalan Kempas','Port Dickson',
            'Rantau','Rompin',
            'Senawang','Seremban','Sungai Gadut',
            'Tampin','Tiroi',
        ),
        'pahang' => array(
            'Bandar Tun Razak','Bentong','Brinchang','Bukit Fraser','Bukit Tinggi',
            'Chendor',
            'Gambang','Genting Highlands','Genting Sempah',
            'Jerantut',
            'Karak','Kemayan','Kota Shahbandar','Kuala Lipis','Kuala Pahang','Kuala Rompin','Kuantan',
            'Lanchang','Lubuk Paku',
            'Maran','Mengkuang','Mentakab',
            'Nenasi',
            'Panching',
            'Pekan','Penor',
            'Raub',
            'Sebertak','Sungai Lembing',
            'Tanah Rata','Tanjung Sepat','Tasik Chini','Temerloh','Teriang','Tringkap',
        ),
        'penang' => array(
            'Air Itam',
            'Balik Pulau','Batu Ferringhi','Batu Kawan','Bayan Lepas','Bukit Mertajam','Butterworth',
            'Gelugor','George Town',
            'Jelutong',
            'Kepala Batas',
            'Nibong Tebal',
            'Permatang Pauh','Pulau Tikus',
            'Simpang Ampat',
            'Tanjung Bungah','Tanjung Tokong',
        ),
        'perak' => array(
            'Ayer Tawar',
            'Bagan Serai','Batu Gajah','Behrang','Bidor','Bukit Gantang','Bukit Merah',
            'Changkat Jering','Chemor','Chenderiang',
            'Damar Laut',
            'Gerik','Gopeng','Gua Tempurung',
            'Hutan Melintang',
            'Ipoh',
            'Jelapang',
            'Kamunting','Kampar','Kuala Kangsar',
            'Lekir','Lenggong','Lumut',
            'Malim Nawar','Manong','Menglembu',
            'Pantai Remis','Parit','Parit Buntar','Pasir Salak','Proton City',
            'Simpang Pulai','Sitiawan','Slim River','Sungai Siput','Sungkai',
            'Taiping','Tambun','Tanjung Malim','Tanjung Rambutan','Tapah','Teluk Intan',
            'Ulu Bernam',
        ),
        'perlis' => array(
            'Arau',
            'Beseri',
            'Chuping',
            'Kaki Bukit','Kangar','Kuala Perlis',
            'Mata Ayer',
            'Padang Besar',
            'Sanglang','Simpang Empat',
            'Wang Kelian',
        ),
        'putrajaya' => array(
            'Precinct 1','Precinct 4','Precinct 5',
            'Precinct 6','Precinct 8','Precinct 10',
            'Precinct 11','Precinct 12','Precinct 13',
            'Precinct 16','Precinct 18','Precinct 19',
        ),
        'sabah' => array(
            'Beaufort','Bingkor',
            'Donggongon',
            'Inanam',
            'Kinabatangan','Kota Belud','Kota Kinabalu','Kuala Penyu','Kimanis','Kundasang',
            'Lahad Datu','Likas','Lok Kawi',
            'Manggatal',
            'Nabawan',
            'Papar','Pitas',
            'Ranau',
            'Sandakan','Sapulut','Semporna','Sepanggar',
            'Tambunan','Tanjung Aru','Tawau','Tenom','Tuaran',
            'Weston',
        ),
        'sarawak' => array(
            'Asajaya',
            'Ba\\'kelalan','Bario','Batu Kawa','Batu Niah','Betong','Bintulu',
            'Dalat','Daro',
            'Engkilili',
            'Julau',
            'Kapit','Kota Samarahan','Kuching',
            'Lawas','Limbang','Lubok Antu',
            'Marudi','Matu','Miri',
            'Oya',
            'Pakan',
            'Sadong Jaya','Sematan','Sibu','Siburan','Song','Sri Aman','Sungai Tujoh',
            'Tanjung Kidurong','Tanjung Manis','Tatau',
        ),
        'selangor' => array(
            'Ampang','Assam Jawa',
            'Balakong','Bandar Baru Bangi','Bandar Baru Selayang','Bandar Sunway','Bangi','Banting','Batang Kali','Batu Caves','Bestari Jaya','Bukit Lanjan',
            'Cheras','Cyberjaya',
            'Damansara','Dengkil',
            'Ijok',
            'Jenjarom',
            'Kajang','Kelana Jaya','Klang','Kuala Kubu Bharu','Kuala Selangor','Kuang',
            'Lagong',
            'Morib',
            'Pandamaran','Paya Jaras','Petaling Jaya','Port Klang','Puchong',
            'Rasa','Rawang',
            'Salak Tinggi','Sekinchan','Selayang','Semenyih','Sepang','Serendah','Seri Kembangan','Shah Alam','Subang','Subang Jaya','Sungai Buloh',
            'Tanjung Karang','Tanjung Sepat',
            'Ulu Klang','Ulu Yam',
        ),
        'terengganu' => array(
            'Ajil',
            'Bandar Ketengah Jaya','Bandar Permaisuri','Bukit Besi','Bukit Payong',
            'Chukai',
            'Jerteh',
            'Kampung Raja','Kerteh','Kijal','Kuala Besut','Kuala Berang','Kuala Dungun','Kuala Terengganu',
            'Marang','Merchang',
            'Pasir Raja',
            'Rantau Abang',
            'Teluk Kalung',
            'Wakaf Tapai',
        )
    );
    
    /**
     * @link https://en.wikipedia.org/wiki/States_and_federal_territories_of_Malaysia
     */
    protected static \$states = array(
        'johor' => array(
            'Johor Darul Ta\\'zim',
            'Johor'
        ),
        'kedah' => array(
            'Kedah Darul Aman',
            'Kedah'
        ),
        'kelantan' => array(
            'Kelantan Darul Naim',
            'Kelantan'
        ),
        'kl' => array(
            'KL',
            'Kuala Lumpur',
            'WP Kuala Lumpur'
        ),
        'labuan' => array(
            'Labuan'
        ),
        'melaka' => array(
            'Malacca',
            'Melaka'
        ),
        'nsembilan' => array(
            'Negeri Sembilan Darul Khusus',
            'Negeri Sembilan'
        ),
        'pahang' => array(
            'Pahang Darul Makmur',
            'Pahang'
        ),
        'penang' => array(
            'Penang',
            'Pulau Pinang'
        ),
        'perak' => array(
            'Perak Darul Ridzuan',
            'Perak'
        ),
        'perlis' => array(
            'Perlis Indera Kayangan',
            'Perlis'
        ),
        'putrajaya' => array(
            'Putrajaya'
        ),
        'sabah' => array(
            'Sabah'
        ),
        'sarawak' => array(
            'Sarawak'
        ),
        'selangor' => array(
            'Selangor Darul Ehsan',
            'Selangor'
        ),
        'terengganu' => array(
            'Terengganu Darul Iman',
            'Terengganu'
        )
    );

    /**
     * @link https://ms.wikipedia.org/wiki/Senarai_negara_berdaulat
     */
    protected static \$country = array(
        'Abkhazia','Afghanistan','Afrika Selatan','Republik Afrika Tengah','Akrotiri dan Dhekelia','Albania','Algeria','Amerika Syarikat','Andorra','Angola','Antigua dan Barbuda','Arab Saudi','Argentina','Armenia','Australia','Austria','Azerbaijan',
        'Bahamas','Bahrain','Bangladesh','Barbados','Belanda','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bonaire','Bosnia dan Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi',
        'Cameroon','Chad','Chile','Republik Rakyat China','Republik China di Taiwan','Colombia','Comoros','Republik Demokratik Congo','Republik Congo','Kepulauan Cook','Costa Rica','Côte d\\'Ivoire (Ivory Coast)','Croatia','Cuba','Curaçao','Cyprus','Republik Turki Cyprus Utara','Republik Czech',
        'Denmark','Djibouti','Dominika','Republik Dominika',
        'Ecuador','El Salvador','Emiriah Arab Bersatu','Eritrea','Estonia',
        'Kepulauan Faroe','Fiji','Filipina','Finland',
        'Gabon','Gambia','Georgia','Ghana','Grenada','Greece (Yunani)','Guatemala','Guinea','Guinea-Bissau','Guinea Khatulistiwa','Guiana Perancis','Guyana',
        'Habsyah (Etiopia)','Haiti','Honduras','Hungary',
        'Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Itali',
        'Jamaika','Jepun','Jerman','Jordan',
        'Kanada','Kazakhstan','Kemboja','Kenya','Kiribati','Korea Selatan','Korea Utara','Kosovo','Kuwait','Kyrgyzstan',
        'Laos','Latvia','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Lubnan','Luxembourg',
        'Macedonia','Madagaskar','Maghribi','Malawi','Malaysia','Maldives','Mali','Malta','Kepulauan Marshall','Mauritania','Mauritius','Mesir','Mexico','Persekutuan Micronesia','Moldova','Monaco','Montenegro','Mongolia','Mozambique','Myanmar',
        'Namibia','Nauru','Nepal','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norway',
        'Oman','Ossetia Selatan',
        'Pakistan','Palau','Palestin','Panama','Papua New Guinea','Paraguay','Perancis','Peru','Poland','Portugal',
        'Qatar',
        'Romania','Russia','Rwanda',
        'Sahara Barat','Saint Kitts dan Nevis','Saint Lucia','Saint Vincent dan Grenadines','Samoa','San Marino','São Tomé dan Príncipe','Scotland','Senegal','Sepanyol','Serbia','Seychelles','Sierra Leone','Singapura','Slovakia','Slovenia','Kepulauan Solomon','Somalia','Somaliland','Sri Lanka','Sudan','Sudan Selatan','Suriname','Swaziland','Sweden','Switzerland','Syria',
        'Tajikistan','Tanjung Verde','Tanzania','Thailand','Timor Leste','Togo','Tonga','Transnistria','Trinidad dan Tobago','Tunisia','Turki','Turkmenistan','Tuvalu',
        'Uganda','Ukraine','United Kingdom','Uruguay','Uzbekistan',
        'Vanuatu','Kota Vatican','Venezuela','Vietnam',
        'Yaman',
        'Zambia','Zimbabwe',
    );

    /**
     * Return a building prefix
     * 
     * @example 'No.'
     * 
     * @return @string
     */
    public static function buildingPrefix()
    {
        return static::randomElement(static::\$buildingPrefix);
    }

    /**
     * Return a building number
     * 
     * @example '123'
     * 
     * @return @string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$buildingNumber))));
    }

    /**
     * Return a street prefix
     * 
     * @example 'Jalan'
     */
    public function streetPrefix()
    {
        \$format = static::randomElement(static::\$streetPrefix);

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a complete streename
     * 
     * @example 'Jalan Utama 7'
     * 
     * @return @string
     */
    public function streetName()
    {
        \$format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$streetNameFormats))));

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a randown township
     * 
     * @example Taman Bahagia
     * 
     * @return @string
     */
    public function township()
    {
        \$format = static::toUpper(static::lexify(static::numerify(static::randomElement(static::\$townshipFormats))));

        return \$this->generator->parse(\$format);
    }

    /**
     * Return a township prefix abbreviation
     * 
     * @example 'USJ'
     * 
     * @return @string
     */
    public function townshipPrefixAbbr()
    {
        return static::randomElement(static::\$townshipPrefixAbbr);
    }

    /**
     * Return a township prefix
     * 
     * @example 'Taman'
     * 
     * @return @string
     */
    public function townshipPrefix()
    {
        return static::randomElement(static::\$townshipPrefix);
    }

    /**
     * Return a township suffix
     * 
     * @example 'Bahagia'
     */
    public function townshipSuffix()
    {
        return static::randomElement(static::\$townshipSuffix);
    }

    /**
     * Return a postcode based on state
     * 
     * @example '55100'
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia#States
     * 
     * @param null|string \$state 'state' or null
     * 
     * @return @string
     */
    public static function postcode(\$state = null)
    {
        \$format = array(
            'perlis' => array( // (01000 - 02800)
                '0' . mt_rand(1000, 2800)
            ),
            'kedah' => array( // (05000 - 09810)
                '0' . mt_rand(5000, 9810)
            ),
            'penang' => array( // (10000 - 14400)
                mt_rand(10000, 14400)
            ),
            'kelantan' => array( // (15000 - 18500)
                mt_rand(15000, 18500)
            ),
            'terengganu' => array( // (20000 - 24300)
                mt_rand(20000, 24300)
            ),
            'pahang' => array( // (25000 - 28800 | 39000 - 39200 | 49000, 69000)
                mt_rand(25000, 28800),
                mt_rand(39000, 39200),
                mt_rand(49000, 69000)
            ),
            'perak' => array( // (30000 - 36810)
                mt_rand(30000, 36810)
            ),
            'selangor' => array( // (40000 - 48300 | 63000 - 68100)
                mt_rand(40000, 48300),
                mt_rand(63000, 68100)
            ),
            'kl' => array( // (50000 - 60000)
                mt_rand(50000, 60000),
            ),
            'putrajaya' => array( // (62000 - 62988)
                mt_rand(62000, 62988)
            ),
            'nsembilan' => array( // (70000 - 73509)
                mt_rand(70000, 73509)
            ),
            'melaka' => array( // (75000 - 78309)
                mt_rand(75000, 78309)
            ),
            'johor' => array( // (79000 - 86900)
                mt_rand(79000, 86900)
            ),
            'labuan' => array( // (87000 - 87033)
                mt_rand(87000, 87033)
            ),
            'sabah' => array( // (88000 - 91309)
                mt_rand(88000, 91309)
            ),
            'sarawak' => array( // (93000 - 98859)
                mt_rand(93000, 98859)
            )
        );

        \$postcode = is_null(\$state) ? static::randomElement(\$format) : \$format[\$state];
        return (string)static::randomElement(\$postcode);
    }

    /**
     * Return the complete town address with matching postcode and state
     * 
     * @example 55100 Bukit Bintang, Kuala Lumpur
     * 
     * @return @string
     */
    public function townState()
    {
        \$state = static::randomElement(array_keys(static::\$states));
        \$postcode = static::postcode(\$state);
        \$town = static::randomElement(static::\$towns[\$state]);
        \$state = static::randomElement(static::\$states[\$state]);

        return \$postcode . ' ' . \$town . ', ' . \$state;
    }
    
    /**
     * Return a random city (town)
     * 
     * @example 'Ampang'
     * 
     * @return @string
    */
    public function city()
    {
        \$state = static::randomElement(array_keys(static::\$towns));
        return static::randomElement(static::\$towns[\$state]);
    }
    
    /**
     * Return a random state
     * 
     * @example 'Johor'
     * 
     * @return @string
    */
    public function state()
    {
        \$state = static::randomElement(array_keys(static::\$states));
        return static::randomElement(static::\$states[\$state]);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Address.php");
    }
}
