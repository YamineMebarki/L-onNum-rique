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

/* vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php */
class __TwigTemplate_9a91983ecc3f2587938ba95616bc6df36aca2d7f92a6812efd1c9ce8cf76c640 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\id_ID;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link http://bandung.go.id/images/download/daftarruasjalan.htm
     **/
    protected static \$street = array(
        \"Abang\", \"Abdul\", \"Abdul Muis\", \"Abdul Rahmat\", \"Abdul. Muis\", \"Abdullah\",
        \"Aceh\", \"Achmad\", \"Achmad Yani\", \"Acordion\", \"Adisucipto\",
        \"Adisumarmo\", \"Agus Salim\", \"Ahmad Dahlan\", \"Antapani Lama\", \"Arifin\",
        \"Asia Afrika\", \"Astana Anyar\", \"B.Agam 1\", \"B.Agam Dlm\", \"BKR\",
        \"Baabur Royan\", \"Baan\", \"Babadak\", \"Babadan\", \"Babah\",
        \"Babakan\", \"Bacang\", \"Badak\", \"Bagas Pati\", \"Bagis Utama\",
        \"Bagonwoto \", \"Bah Jaya\", \"Baha\", \"Bahagia\", \"Bahagia \",
        \"Baiduri\", \"Baik\", \"Baing\", \"Baja\", \"Baja Raya\",
        \"Bak Air\", \"Bak Mandi\", \"Bakaru\", \"Bakau\", \"Bakau Griya Utama\",
        \"Bakhita\", \"Bakin\", \"Bakit \", \"Bakti\", \"Baladewa\",
        \"Bambon\", \"Bambu\", \"Banal\", \"Banceng Pondok\", \"Banda\",
        \"Bank Dagang Negara\", \"Bappenas\", \"Bara\", \"Bara Tambar\", \"Baranang\",
        \"Baranang Siang\", \"Baranang Siang Indah\", \"Baranangsiang\", \"Barasak\", \"Barat\",
        \"Basket\", \"Basmol Raya\", \"Basoka\", \"Basoka Raya\", \"Bass\",
        \"Basudewo\", \"Basuki\", \"Basuki Rahmat \", \"Bata Putih\", \"Batako\",
        \"Baung\", \"Bawal\", \"Baya Kali Bungur\", \"Bayam\", \"Bayan\",
        \"Bazuka Raya\", \"Bhayangkara\", \"Camar\", \"Casablanca\", \"Cemara\",
        \"Cihampelas\", \"Cikapayang\", \"Cikutra Barat\", \"Cikutra Timur\", \"Ciumbuleuit\",
        \"Ciwastra\", \"Cokroaminoto\", \"Cut Nyak Dien\", \"Daan\", \"Dago\",
        \"Dahlia\", \"Dewi Sartika\", \"Dipatiukur\", \"Dipenogoro\", \"Diponegoro\",
        \"Dr. Junjunan\", \"Eka\", \"Ekonomi\", \"Elang\", \"Fajar\",
        \"Flora\", \"Flores\", \"Gading\", \"Gajah\", \"Gajah Mada\",
        \"Gambang\", \"Gardujati\", \"Gatot Subroto\", \"Gedebage Selatan\", \"Gegerkalong Hilir\",
        \"Gotong Royong\", \"Gremet\", \"HOS. Cjokroaminoto (Pasirkaliki)\", \"Haji\", \"Halim\",
        \"Hang\", \"Hasanuddin\", \"Honggowongso\", \"Ikan\", \"Imam\",
        \"Imam Bonjol\", \"Industri\", \"Ir. H. Juanda\", \"Jagakarsa\", \"Jakarta\",
        \"Jaksa\", \"Jambu\", \"Jamika\", \"Jayawijaya\", \"Jend. A. Yani\",
        \"Jend. Sudirman\", \"Juanda\", \"K.H. Maskur\", \"K.H. Wahid Hasyim (Kopo)\", \"Kali\",
        \"Kalimalang\", \"Kalimantan\", \"Karel S. Tubun\", \"Kartini\", \"Katamso\",
        \"Kebangkitan Nasional\", \"Kebonjati\", \"Ketandan\", \"Ki Hajar Dewantara\",
        \"Kiaracondong\", \"Krakatau\", \"Kusmanto\", \"Kyai Gede\", \"Kyai Mojo\", \"Labu\",
        \"Lada\", \"Laksamana\", \"Laswi\", \"Lembong\", \"Lumban Tobing\",
        \"M.T. Haryono\", \"Madiun\", \"Madrasah\", \"Mahakam\", \"Merdeka\",
        \"Moch. Ramdan\", \"Moch. Toha\", \"Moch. Yamin\", \"Monginsidi\", \"Mulyadi\",
        \"Muwardi\", \"Nakula\", \"Nanas\", \"Nangka\", \"Orang\",
        \"Otista\", \"Otto\", \"PHH. Mustofa\", \"Pacuan Kuda\", \"Padang\",
        \"Padma\", \"Pahlawan\", \"Panjaitan\", \"Pasir Koja\", \"Pasirkoja\",
        \"Pasteur\", \"Pattimura\", \"Pelajar Pejuang 45\", \"Perintis Kemerdekaan\", \"Peta\",
        \"Qrisdoren\", \"R.E. Martadinata\", \"R.M. Said\", \"Raden\", \"Raden Saleh\",
        \"Radio\", \"Rajawali\", \"Rajawali Barat\", \"Rajawali Timur\", \"Rajiman\",
        \"Raya Setiabudhi\", \"Raya Ujungberung\", \"Reksoninten\", \"Ronggowarsito\",
        \"Rumah Sakit\", \"S. Parman\", \"Sadang Serang\", \"Salak\", \"Salam\", \"Salatiga\",
        \"Sam Ratulangi\", \"Samanhudi\", \"Sampangan\", \"Sentot Alibasa\", \"Setia Budi\",
        \"Setiabudhi\", \"Siliwangi\", \"Soekarno Hatta\", \"Sudiarto\", \"Sudirman\",
        \"Sugiono\", \"Sugiyopranoto\", \"Suharso\", \"Sukabumi\", \"Sukajadi\",
        \"Sumpah Pemuda\", \"Sunaryo\", \"Suniaraja\", \"Supomo\", \"Supono\",
        \"Suprapto\", \"Surapati\", \"Suryo\", \"Suryo Pranoto\", \"Sutami\",
        \"Sutan Syahrir\", \"Sutarjo\", \"Sutarto\", \"Sutoyo\", \"Taman\",
        \"Tambak\", \"Tambun\", \"Tangkuban Perahu\", \"Tentara Pelajar\", \"Ters. Buah Batu\",
        \"Ters. Jakarta\", \"Ters. Kiaracondong\", \"Ters. Pasir Koja\", \"Teuku Umar\",
        \"Thamrin\", \"Tubagus Ismail\", \"Ujung\", \"Uluwatu\", \"Umalas\", \"Untung Suropati\",
        \"Urip Sumoharjo\", \"Veteran\", \"Villa\", \"W.R. Supratman\", \"Wahid\",
        \"Wahid Hasyim\", \"Wahidin\", \"Wahidin Sudirohusodo\", \"Warga\", \"Wora Wari\",
        \"Yap Tjwan Bing\", \"Yoga\", \"Yogyakarta\", \"Yohanes\", \"Yos\",
        \"Yos Sudarso\", \"Yosodipuro\", \"Zamrud\",
    );

    protected static \$streetPrefix = array(
        \"Ds.\", \"Dk.\", \"Gg.\", \"Jln.\", \"Jr.\", \"Kpg.\", \"Ki.\", \"Psr.\"
    );

    /**
     * @link http://kodepos.nomor.net/_kodepos.php?_i=provinsi-kodepos
     */
    protected static \$state = array(
        'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Jambi', 'Bangka Belitung', 'Riau',
        'Kepulauan Riau', 'Bengkulu', 'Sumatera Selatan', 'Lampung', 'Banten',
        'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Nusa Tenggara Timur',
        'DI Yogyakarta', 'Bali', 'Nusa Tenggara Barat', 'Kalimantan Barat',
        'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur',
        'Kalimantan Utara', 'Sulawesi Selatan', 'Sulawesi Utara', 'Gorontalo',
        'Sulawesi Tengah', 'Sulawesi Barat', 'Sulawesi Tenggara', 'Maluku',
        'Maluku Utara', 'Papua Barat', 'Papua'
    );

    /**
     * Abbreviated State Names.
     * Currently this is all just a guesswork, but should be highly accurate
     * @var array
     */
    protected static \$stateAbbr = array(
       'Aceh', 'SumUt', 'SumBar', 'Jambi', 'BaBel', 'Riau', 'KepR', 'Bengkulu', 'SumSel',
       'Lampung', 'Banten', 'DKI', 'JaBar', 'JaTeng', 'JaTim', 'NTT', 'DIY',
       'Bali', 'NTB', 'KalBar', 'KalTeng', 'KalSel', 'KalTim', 'KalUt', 'SulSel',
       'SulUt', 'Gorontalo', 'SulTeng', 'SulBar', 'SulTra', 'Maluku', 'MalUt',
       'PapBar', 'Papua'
    );

    /**
    * @link http://id.wikipedia.org/wiki/Daftar_negara-negara_di_dunia
    **/
    protected static \$country = array(
        'Afganistan', 'Afrika Selatan', 'Albania', 'Aljazair',
        'Amerika Serikat', 'Andorra', 'Angola', 'Anguilla',

        // http://id.wikipedia.org/wiki/Antartika
        'Antarktika',

        'Antigua and Barbuda',

        // http://id.wikipedia.org/wiki/Antillen_Belanda
        'Antillen Belanda',

        'Arab Saudi', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria',
        'Azerbaijan', 'Bahama', 'Bahrain', 'Bangladesh', 'Barbados', 'Belanda',
        'Belarus', 'Belgia', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia',

        // http://id.wikipedia.org/wiki/Bosnia_dan_Herzegovina
        'Bosnia dan Herzegovina',

        'Botswana', 'Brasil', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso',
        'Burundi', 'Chili', 'Cina', 'Cocos (Keeling)', 'Denmark', 'Djibouti',

        // http://id.wikipedia.org/wiki/Dominica
        'Dominika',

        'Ekuador', 'El Salvador', 'Eritrea', 'Estonia', 'Ethiopia',
        'Federasi Rusia', 'Fiji', 'Filipina', 'Finlandia', 'Gabon', 'Gambia',
        'Georgia',

        // http://id.wikipedia.org/wiki/South_Georgia_and_the_South_Sandwich_Islands
        'Georgia Selatan dan Kepulauan Sandwich Selatan',

        'Ghana', 'Gibraltar', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam',
        'Guatemala', 'Guernsey', 'Guinea', 'Guinea Ekuatorial', 'Guinea-Bissau',
        'Guyana', 'Guyana Prancis', 'Haiti', 'Honduras', 'Hong Kong',
        'Hongaria', 'India', 'Indonesia', 'Inggris Raya', 'Irak', 'Iran',
        'Irlandia', 'Islandia', 'Israel', 'Italia', 'Jamaika', 'Jepang',
        'Jerman', 'Jersey', 'Jordan', 'Kaledonia baru', 'Kamboja', 'Kamerun',
        'Kanada', 'Kazakhstan', 'Kenya', 'Kepulauan Cayman', 'Kepulauan Cook',
        'Kepulauan Falkland (Malvinas)', 'Kepulauan Faroe',
        'Kepulauan Mariana Utara', 'Kepulauan Marshall', 'Kepulauan Pitcairn',
        'Kepulauan Solomon',

        // http://id.wikipedia.org/wiki/United_States_Minor_Outlying_Islands
        'Kepulauan Terluar Kecil Amerika Serikat',

        'Kepulauan Turks dan Caicos',

        // http://id.wikipedia.org/wiki/United_States_Virgin_Islands
        'Kepulauan Virgin Amerika Serikat',

        'Kepulauan Virgin Inggris', 'Kiribati', 'Kolombia', 'Komoro', 'Kongo', 'Korea',
        'Korea', 'Kosta Rika', 'Kroasia',

        // http://id.wikipedia.org/wiki/Cuba
        'Kuba',

        'Kuwait', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya',
        'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagaskar', 'Makau', 'Makedonia',
        'Maladewa', 'Malawi', 'Malaysia', 'Mali', 'Malta', 'Maroko',

        // http://id.wikipedia.org/wiki/Martinique
        'Martinik',

        'Mauritania', 'Mauritius', 'Mayotte', 'Meksiko', 'Mesir', 'Mikronesia', 'Moldova',
        'Monako', 'Mongolia', 'Montenegro', 'Montserrat', 'Mozambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Niger', 'Nigeria', 'Nikaragua', 'Niue', 'Norwegia',
        'Oman', 'Pakistan', 'Palau', 'Panama',

        // http://id.wikipedia.org/wiki/Cote_d%27Ivoire
        'Pantai Gading',

        'Papua Nugini', 'Paraguay', 'Peru', 'Polandia', 'Polinesia Prancis', 'Portugal',
        'Prancis', 'Puerto Rico',

        // http://ms.wikipedia.org/wiki/Pulau_Bouvet
        'Pulau Bouvet',

        // http://id.wikipedia.org/wiki/Pulau_Heard_dan_Kepulauan_McDonald
        'Pulau Heard dan Kepulauan McDonald',

        // http://id.wikipedia.org/wiki/Isle_of_Man
        'Pulau Man',

        'Pulau Natal', 'Pulau Norfolk', 'Qatar', 'Republik Afrika Tengah',
        'Republik Ceko',

        // http://id.wikipedia.org/wiki/Chad
        'Republik Chad',

        'Republik Demokratik Rakyat Laos', 'Republik Dominika', 'Republik Kirgizstan',

        // http://id.wikipedia.org/wiki/Reunion
        'Réunion',

        'Rumania', 'Rwanda', 'Sahara Barat', 'Saint Barthelemy', 'Saint Helena',
        'Saint Kitts dan Nevis', 'Saint Lucia', 'Saint Martin',
        'Saint Pierre dan Miquelon', 'Saint Vincent dan Grenadines', 'Samoa',
        'Samoa Amerika', 'San Marino', 'Sao Tome dan Principe', 'Selandia baru',
        'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapura', 'Siprus',
        'Slovakia (Republik Slovak)', 'Slovenia', 'Somalia', 'Spanyol', 'Sri Lanka',
        'Sudan', 'Suriah', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland',
        'Swedia', 'Swiss', 'Taiwan', 'Tajikistan',

        // http://id.wikipedia.org/wiki/Cape_Verde
        'Tanjung Verde',

        'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga',
        'Trinidad dan Tobago', 'Tunisia', 'Turki', 'Turkmenistan', 'Tuvalu', 'Uganda',
        'Ukraina', 'Uni Emirat Arab', 'Uruguay', 'Uzbekistan', 'Vanuatu',

        // http://id.wikipedia.org/wiki/Holy_See
        'Vatikan',

        'Venezuela', 'Vietnam', 'Wallis dan Futuna', 'Wilayah Palestina',

        // http://id.wikipedia.org/wiki/United_States_Virgin_Islands
        'Wilayah Samudra Hindia Britania',

        'Wilayah Selatan Perancis', 'Yaman', 'Yunani', 'Zambia', 'Zimbabwe'
    );

    /**
     * @link http://id.wikipedia.org/wiki/Daftar_kabupaten_dan_kota_Indonesia#Daftar_kota
     */
    protected static \$cityNames = array(
        \"Administrasi Jakarta Barat\", \"Administrasi Jakarta Pusat\",
        \"Administrasi Jakarta Selatan\", \"Administrasi Jakarta Timur\",
        \"Administrasi Jakarta Utara\", \"Ambon\", \"Balikpapan\", \"Banda Aceh\",
        \"Bandar Lampung\", \"Bandung\", \"Banjar\", \"Banjarbaru\", \"Banjarmasin\",
        \"Batam\", \"Batu\", \"Bau-Bau\", \"Bekasi\",
        \"Bengkulu\", \"Bima\", \"Binjai\", \"Bitung\",
        \"Blitar\", \"Bogor\", \"Bontang\", \"Bukittinggi\",
        \"Cilegon\", \"Cimahi\", \"Cirebon\", \"Denpasar\",
        \"Depok\", \"Dumai\", \"Gorontalo\", \"Gunungsitoli\",
        \"Jambi\", \"Jayapura\", \"Kediri\", \"Kendari\",
        \"Kotamobagu\", \"Kupang\", \"Langsa\", \"Lhokseumawe\",
        \"Lubuklinggau\", \"Madiun\", \"Magelang\", \"Makassar\",
        \"Malang\", \"Manado\", \"Mataram\", \"Medan\",
        \"Metro\", \"Mojokerto\", \"Padang\", \"Padangpanjang\",
        \"Padangsidempuan\", \"Pagar Alam\", \"Palangka Raya\", \"Palembang\",
        \"Palopo\", \"Palu\", \"Pangkal Pinang\", \"Parepare\",
        \"Pariaman\", \"Pasuruan\", \"Payakumbuh\", \"Pekalongan\",
        \"Pekanbaru\", \"Pematangsiantar\", \"Pontianak\", \"Prabumulih\",
        \"Probolinggo\", \"Sabang\", \"Salatiga\", \"Samarinda\",
        \"Sawahlunto\", \"Semarang\", \"Serang\", \"Sibolga\",
        \"Singkawang\", \"Solok\", \"Sorong\", \"Subulussalam\",
        \"Sukabumi\", \"Sungai Penuh\", \"Surabaya\", \"Surakarta\",
        \"Tangerang\", \"Tangerang Selatan\", \"Tanjung Pinang\", \"Tanjungbalai\",
        \"Tarakan\", \"Tasikmalaya\", \"Tebing Tinggi\", \"Tegal\",
        \"Ternate\", \"Tidore Kepulauan\", \"Tomohon\", \"Tual\",
        \"Yogyakarta\",
    );

    protected static \$cityFormats = array(
        '";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 257, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 261, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 265, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 265, $this->source); })()), "html", null, true);
        echo " No. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 265, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 269, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 269, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 269, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["stateAbbr"]) || array_key_exists("stateAbbr", $context) ? $context["stateAbbr"] : (function () { throw new RuntimeError('Variable "stateAbbr" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$postcode = array('%####');

    /**
     * @example 'Kalimantan Tengah'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Banten'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public function city()
    {
        \$format = static::randomElement(static::\$cityFormats);

        return \$this->generator->parse(\$format);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }

    public static function buildingNumber()
    {
        return static::numberBetween(1, 999);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 269,  315 => 265,  308 => 261,  301 => 257,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\id_ID;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link http://bandung.go.id/images/download/daftarruasjalan.htm
     **/
    protected static \$street = array(
        \"Abang\", \"Abdul\", \"Abdul Muis\", \"Abdul Rahmat\", \"Abdul. Muis\", \"Abdullah\",
        \"Aceh\", \"Achmad\", \"Achmad Yani\", \"Acordion\", \"Adisucipto\",
        \"Adisumarmo\", \"Agus Salim\", \"Ahmad Dahlan\", \"Antapani Lama\", \"Arifin\",
        \"Asia Afrika\", \"Astana Anyar\", \"B.Agam 1\", \"B.Agam Dlm\", \"BKR\",
        \"Baabur Royan\", \"Baan\", \"Babadak\", \"Babadan\", \"Babah\",
        \"Babakan\", \"Bacang\", \"Badak\", \"Bagas Pati\", \"Bagis Utama\",
        \"Bagonwoto \", \"Bah Jaya\", \"Baha\", \"Bahagia\", \"Bahagia \",
        \"Baiduri\", \"Baik\", \"Baing\", \"Baja\", \"Baja Raya\",
        \"Bak Air\", \"Bak Mandi\", \"Bakaru\", \"Bakau\", \"Bakau Griya Utama\",
        \"Bakhita\", \"Bakin\", \"Bakit \", \"Bakti\", \"Baladewa\",
        \"Bambon\", \"Bambu\", \"Banal\", \"Banceng Pondok\", \"Banda\",
        \"Bank Dagang Negara\", \"Bappenas\", \"Bara\", \"Bara Tambar\", \"Baranang\",
        \"Baranang Siang\", \"Baranang Siang Indah\", \"Baranangsiang\", \"Barasak\", \"Barat\",
        \"Basket\", \"Basmol Raya\", \"Basoka\", \"Basoka Raya\", \"Bass\",
        \"Basudewo\", \"Basuki\", \"Basuki Rahmat \", \"Bata Putih\", \"Batako\",
        \"Baung\", \"Bawal\", \"Baya Kali Bungur\", \"Bayam\", \"Bayan\",
        \"Bazuka Raya\", \"Bhayangkara\", \"Camar\", \"Casablanca\", \"Cemara\",
        \"Cihampelas\", \"Cikapayang\", \"Cikutra Barat\", \"Cikutra Timur\", \"Ciumbuleuit\",
        \"Ciwastra\", \"Cokroaminoto\", \"Cut Nyak Dien\", \"Daan\", \"Dago\",
        \"Dahlia\", \"Dewi Sartika\", \"Dipatiukur\", \"Dipenogoro\", \"Diponegoro\",
        \"Dr. Junjunan\", \"Eka\", \"Ekonomi\", \"Elang\", \"Fajar\",
        \"Flora\", \"Flores\", \"Gading\", \"Gajah\", \"Gajah Mada\",
        \"Gambang\", \"Gardujati\", \"Gatot Subroto\", \"Gedebage Selatan\", \"Gegerkalong Hilir\",
        \"Gotong Royong\", \"Gremet\", \"HOS. Cjokroaminoto (Pasirkaliki)\", \"Haji\", \"Halim\",
        \"Hang\", \"Hasanuddin\", \"Honggowongso\", \"Ikan\", \"Imam\",
        \"Imam Bonjol\", \"Industri\", \"Ir. H. Juanda\", \"Jagakarsa\", \"Jakarta\",
        \"Jaksa\", \"Jambu\", \"Jamika\", \"Jayawijaya\", \"Jend. A. Yani\",
        \"Jend. Sudirman\", \"Juanda\", \"K.H. Maskur\", \"K.H. Wahid Hasyim (Kopo)\", \"Kali\",
        \"Kalimalang\", \"Kalimantan\", \"Karel S. Tubun\", \"Kartini\", \"Katamso\",
        \"Kebangkitan Nasional\", \"Kebonjati\", \"Ketandan\", \"Ki Hajar Dewantara\",
        \"Kiaracondong\", \"Krakatau\", \"Kusmanto\", \"Kyai Gede\", \"Kyai Mojo\", \"Labu\",
        \"Lada\", \"Laksamana\", \"Laswi\", \"Lembong\", \"Lumban Tobing\",
        \"M.T. Haryono\", \"Madiun\", \"Madrasah\", \"Mahakam\", \"Merdeka\",
        \"Moch. Ramdan\", \"Moch. Toha\", \"Moch. Yamin\", \"Monginsidi\", \"Mulyadi\",
        \"Muwardi\", \"Nakula\", \"Nanas\", \"Nangka\", \"Orang\",
        \"Otista\", \"Otto\", \"PHH. Mustofa\", \"Pacuan Kuda\", \"Padang\",
        \"Padma\", \"Pahlawan\", \"Panjaitan\", \"Pasir Koja\", \"Pasirkoja\",
        \"Pasteur\", \"Pattimura\", \"Pelajar Pejuang 45\", \"Perintis Kemerdekaan\", \"Peta\",
        \"Qrisdoren\", \"R.E. Martadinata\", \"R.M. Said\", \"Raden\", \"Raden Saleh\",
        \"Radio\", \"Rajawali\", \"Rajawali Barat\", \"Rajawali Timur\", \"Rajiman\",
        \"Raya Setiabudhi\", \"Raya Ujungberung\", \"Reksoninten\", \"Ronggowarsito\",
        \"Rumah Sakit\", \"S. Parman\", \"Sadang Serang\", \"Salak\", \"Salam\", \"Salatiga\",
        \"Sam Ratulangi\", \"Samanhudi\", \"Sampangan\", \"Sentot Alibasa\", \"Setia Budi\",
        \"Setiabudhi\", \"Siliwangi\", \"Soekarno Hatta\", \"Sudiarto\", \"Sudirman\",
        \"Sugiono\", \"Sugiyopranoto\", \"Suharso\", \"Sukabumi\", \"Sukajadi\",
        \"Sumpah Pemuda\", \"Sunaryo\", \"Suniaraja\", \"Supomo\", \"Supono\",
        \"Suprapto\", \"Surapati\", \"Suryo\", \"Suryo Pranoto\", \"Sutami\",
        \"Sutan Syahrir\", \"Sutarjo\", \"Sutarto\", \"Sutoyo\", \"Taman\",
        \"Tambak\", \"Tambun\", \"Tangkuban Perahu\", \"Tentara Pelajar\", \"Ters. Buah Batu\",
        \"Ters. Jakarta\", \"Ters. Kiaracondong\", \"Ters. Pasir Koja\", \"Teuku Umar\",
        \"Thamrin\", \"Tubagus Ismail\", \"Ujung\", \"Uluwatu\", \"Umalas\", \"Untung Suropati\",
        \"Urip Sumoharjo\", \"Veteran\", \"Villa\", \"W.R. Supratman\", \"Wahid\",
        \"Wahid Hasyim\", \"Wahidin\", \"Wahidin Sudirohusodo\", \"Warga\", \"Wora Wari\",
        \"Yap Tjwan Bing\", \"Yoga\", \"Yogyakarta\", \"Yohanes\", \"Yos\",
        \"Yos Sudarso\", \"Yosodipuro\", \"Zamrud\",
    );

    protected static \$streetPrefix = array(
        \"Ds.\", \"Dk.\", \"Gg.\", \"Jln.\", \"Jr.\", \"Kpg.\", \"Ki.\", \"Psr.\"
    );

    /**
     * @link http://kodepos.nomor.net/_kodepos.php?_i=provinsi-kodepos
     */
    protected static \$state = array(
        'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Jambi', 'Bangka Belitung', 'Riau',
        'Kepulauan Riau', 'Bengkulu', 'Sumatera Selatan', 'Lampung', 'Banten',
        'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Nusa Tenggara Timur',
        'DI Yogyakarta', 'Bali', 'Nusa Tenggara Barat', 'Kalimantan Barat',
        'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur',
        'Kalimantan Utara', 'Sulawesi Selatan', 'Sulawesi Utara', 'Gorontalo',
        'Sulawesi Tengah', 'Sulawesi Barat', 'Sulawesi Tenggara', 'Maluku',
        'Maluku Utara', 'Papua Barat', 'Papua'
    );

    /**
     * Abbreviated State Names.
     * Currently this is all just a guesswork, but should be highly accurate
     * @var array
     */
    protected static \$stateAbbr = array(
       'Aceh', 'SumUt', 'SumBar', 'Jambi', 'BaBel', 'Riau', 'KepR', 'Bengkulu', 'SumSel',
       'Lampung', 'Banten', 'DKI', 'JaBar', 'JaTeng', 'JaTim', 'NTT', 'DIY',
       'Bali', 'NTB', 'KalBar', 'KalTeng', 'KalSel', 'KalTim', 'KalUt', 'SulSel',
       'SulUt', 'Gorontalo', 'SulTeng', 'SulBar', 'SulTra', 'Maluku', 'MalUt',
       'PapBar', 'Papua'
    );

    /**
    * @link http://id.wikipedia.org/wiki/Daftar_negara-negara_di_dunia
    **/
    protected static \$country = array(
        'Afganistan', 'Afrika Selatan', 'Albania', 'Aljazair',
        'Amerika Serikat', 'Andorra', 'Angola', 'Anguilla',

        // http://id.wikipedia.org/wiki/Antartika
        'Antarktika',

        'Antigua and Barbuda',

        // http://id.wikipedia.org/wiki/Antillen_Belanda
        'Antillen Belanda',

        'Arab Saudi', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria',
        'Azerbaijan', 'Bahama', 'Bahrain', 'Bangladesh', 'Barbados', 'Belanda',
        'Belarus', 'Belgia', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia',

        // http://id.wikipedia.org/wiki/Bosnia_dan_Herzegovina
        'Bosnia dan Herzegovina',

        'Botswana', 'Brasil', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso',
        'Burundi', 'Chili', 'Cina', 'Cocos (Keeling)', 'Denmark', 'Djibouti',

        // http://id.wikipedia.org/wiki/Dominica
        'Dominika',

        'Ekuador', 'El Salvador', 'Eritrea', 'Estonia', 'Ethiopia',
        'Federasi Rusia', 'Fiji', 'Filipina', 'Finlandia', 'Gabon', 'Gambia',
        'Georgia',

        // http://id.wikipedia.org/wiki/South_Georgia_and_the_South_Sandwich_Islands
        'Georgia Selatan dan Kepulauan Sandwich Selatan',

        'Ghana', 'Gibraltar', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam',
        'Guatemala', 'Guernsey', 'Guinea', 'Guinea Ekuatorial', 'Guinea-Bissau',
        'Guyana', 'Guyana Prancis', 'Haiti', 'Honduras', 'Hong Kong',
        'Hongaria', 'India', 'Indonesia', 'Inggris Raya', 'Irak', 'Iran',
        'Irlandia', 'Islandia', 'Israel', 'Italia', 'Jamaika', 'Jepang',
        'Jerman', 'Jersey', 'Jordan', 'Kaledonia baru', 'Kamboja', 'Kamerun',
        'Kanada', 'Kazakhstan', 'Kenya', 'Kepulauan Cayman', 'Kepulauan Cook',
        'Kepulauan Falkland (Malvinas)', 'Kepulauan Faroe',
        'Kepulauan Mariana Utara', 'Kepulauan Marshall', 'Kepulauan Pitcairn',
        'Kepulauan Solomon',

        // http://id.wikipedia.org/wiki/United_States_Minor_Outlying_Islands
        'Kepulauan Terluar Kecil Amerika Serikat',

        'Kepulauan Turks dan Caicos',

        // http://id.wikipedia.org/wiki/United_States_Virgin_Islands
        'Kepulauan Virgin Amerika Serikat',

        'Kepulauan Virgin Inggris', 'Kiribati', 'Kolombia', 'Komoro', 'Kongo', 'Korea',
        'Korea', 'Kosta Rika', 'Kroasia',

        // http://id.wikipedia.org/wiki/Cuba
        'Kuba',

        'Kuwait', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya',
        'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagaskar', 'Makau', 'Makedonia',
        'Maladewa', 'Malawi', 'Malaysia', 'Mali', 'Malta', 'Maroko',

        // http://id.wikipedia.org/wiki/Martinique
        'Martinik',

        'Mauritania', 'Mauritius', 'Mayotte', 'Meksiko', 'Mesir', 'Mikronesia', 'Moldova',
        'Monako', 'Mongolia', 'Montenegro', 'Montserrat', 'Mozambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Niger', 'Nigeria', 'Nikaragua', 'Niue', 'Norwegia',
        'Oman', 'Pakistan', 'Palau', 'Panama',

        // http://id.wikipedia.org/wiki/Cote_d%27Ivoire
        'Pantai Gading',

        'Papua Nugini', 'Paraguay', 'Peru', 'Polandia', 'Polinesia Prancis', 'Portugal',
        'Prancis', 'Puerto Rico',

        // http://ms.wikipedia.org/wiki/Pulau_Bouvet
        'Pulau Bouvet',

        // http://id.wikipedia.org/wiki/Pulau_Heard_dan_Kepulauan_McDonald
        'Pulau Heard dan Kepulauan McDonald',

        // http://id.wikipedia.org/wiki/Isle_of_Man
        'Pulau Man',

        'Pulau Natal', 'Pulau Norfolk', 'Qatar', 'Republik Afrika Tengah',
        'Republik Ceko',

        // http://id.wikipedia.org/wiki/Chad
        'Republik Chad',

        'Republik Demokratik Rakyat Laos', 'Republik Dominika', 'Republik Kirgizstan',

        // http://id.wikipedia.org/wiki/Reunion
        'Réunion',

        'Rumania', 'Rwanda', 'Sahara Barat', 'Saint Barthelemy', 'Saint Helena',
        'Saint Kitts dan Nevis', 'Saint Lucia', 'Saint Martin',
        'Saint Pierre dan Miquelon', 'Saint Vincent dan Grenadines', 'Samoa',
        'Samoa Amerika', 'San Marino', 'Sao Tome dan Principe', 'Selandia baru',
        'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapura', 'Siprus',
        'Slovakia (Republik Slovak)', 'Slovenia', 'Somalia', 'Spanyol', 'Sri Lanka',
        'Sudan', 'Suriah', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland',
        'Swedia', 'Swiss', 'Taiwan', 'Tajikistan',

        // http://id.wikipedia.org/wiki/Cape_Verde
        'Tanjung Verde',

        'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga',
        'Trinidad dan Tobago', 'Tunisia', 'Turki', 'Turkmenistan', 'Tuvalu', 'Uganda',
        'Ukraina', 'Uni Emirat Arab', 'Uruguay', 'Uzbekistan', 'Vanuatu',

        // http://id.wikipedia.org/wiki/Holy_See
        'Vatikan',

        'Venezuela', 'Vietnam', 'Wallis dan Futuna', 'Wilayah Palestina',

        // http://id.wikipedia.org/wiki/United_States_Virgin_Islands
        'Wilayah Samudra Hindia Britania',

        'Wilayah Selatan Perancis', 'Yaman', 'Yunani', 'Zambia', 'Zimbabwe'
    );

    /**
     * @link http://id.wikipedia.org/wiki/Daftar_kabupaten_dan_kota_Indonesia#Daftar_kota
     */
    protected static \$cityNames = array(
        \"Administrasi Jakarta Barat\", \"Administrasi Jakarta Pusat\",
        \"Administrasi Jakarta Selatan\", \"Administrasi Jakarta Timur\",
        \"Administrasi Jakarta Utara\", \"Ambon\", \"Balikpapan\", \"Banda Aceh\",
        \"Bandar Lampung\", \"Bandung\", \"Banjar\", \"Banjarbaru\", \"Banjarmasin\",
        \"Batam\", \"Batu\", \"Bau-Bau\", \"Bekasi\",
        \"Bengkulu\", \"Bima\", \"Binjai\", \"Bitung\",
        \"Blitar\", \"Bogor\", \"Bontang\", \"Bukittinggi\",
        \"Cilegon\", \"Cimahi\", \"Cirebon\", \"Denpasar\",
        \"Depok\", \"Dumai\", \"Gorontalo\", \"Gunungsitoli\",
        \"Jambi\", \"Jayapura\", \"Kediri\", \"Kendari\",
        \"Kotamobagu\", \"Kupang\", \"Langsa\", \"Lhokseumawe\",
        \"Lubuklinggau\", \"Madiun\", \"Magelang\", \"Makassar\",
        \"Malang\", \"Manado\", \"Mataram\", \"Medan\",
        \"Metro\", \"Mojokerto\", \"Padang\", \"Padangpanjang\",
        \"Padangsidempuan\", \"Pagar Alam\", \"Palangka Raya\", \"Palembang\",
        \"Palopo\", \"Palu\", \"Pangkal Pinang\", \"Parepare\",
        \"Pariaman\", \"Pasuruan\", \"Payakumbuh\", \"Pekalongan\",
        \"Pekanbaru\", \"Pematangsiantar\", \"Pontianak\", \"Prabumulih\",
        \"Probolinggo\", \"Sabang\", \"Salatiga\", \"Samarinda\",
        \"Sawahlunto\", \"Semarang\", \"Serang\", \"Sibolga\",
        \"Singkawang\", \"Solok\", \"Sorong\", \"Subulussalam\",
        \"Sukabumi\", \"Sungai Penuh\", \"Surabaya\", \"Surakarta\",
        \"Tangerang\", \"Tangerang Selatan\", \"Tanjung Pinang\", \"Tanjungbalai\",
        \"Tarakan\", \"Tasikmalaya\", \"Tebing Tinggi\", \"Tegal\",
        \"Ternate\", \"Tidore Kepulauan\", \"Tomohon\", \"Tual\",
        \"Yogyakarta\",
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{street}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetPrefix}} {{street}} No. {{buildingNumber}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{city}} {{postcode}}, {{stateAbbr}}\",
    );

    protected static \$postcode = array('%####');

    /**
     * @example 'Kalimantan Tengah'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'Banten'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public function city()
    {
        \$format = static::randomElement(static::\$cityFormats);

        return \$this->generator->parse(\$format);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }

    public static function buildingNumber()
    {
        return static::numberBetween(1, 999);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/id_ID/Address.php");
    }
}
