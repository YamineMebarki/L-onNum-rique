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

/* vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php */
class __TwigTemplate_f1ccc520603f813919e8299fbae0b192f0c3b3d3d7dd475cd23923214e5c070b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ne_NP;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$wardNumber = array('##', '#');
    protected static \$streetSuffix = array(
        'bagh', 'bazaar', 'besi', 'chowk', 'gaun', 'kot', 'mandir', 'marg', 'nagar', 'sahar', 'sthan', 'tar'
    );

    protected static \$postcode = array('#####');

    /**
     * @link http://en.wikipedia.org/wiki/List_of_districts_of_Nepal
     */
    protected static \$district = array(
        'Achham', 'Arghakhanchi',
        'Baglung', 'Baitadi', 'Bajhang', 'Bajura', 'Banke', 'Bara', 'Bardiya', 'Bhaktapur', 'Bhojpur',
        'Chitwan',
        'Dadeldhura', 'Dailekh', 'Dang Deukhuri', 'Darchula', 'Dhading', 'Dhankuta', 'Dhanusa', 'Dolakha', 'Dolpa', 'Doti',
        'Gorkha', 'Gulmi',
        'Humla',
        'Ilam',
        'Jajarkot', 'Jhapa', 'Jumla',
        'Kailali', 'Kalikot', 'Kanchanpur', 'Kapilvastu', 'Kaski', 'Kathmandu', 'Kavrepalanchok', 'Khotang',
        'Lalitpur', 'Lamjung',
        'Mahottari', 'Makwanpur', 'Manang', 'Morang', 'Mugu', 'Mustang', 'Myagdi',
        'Nawalparasi', 'Nuwakot',
        'Okhaldhunga',
        'Palpa', 'Panchthar', 'Parbat', 'Parsa', 'Pyuthan',
        'Ramechhap', 'Rasuwa', 'Rautahat', 'Rolpa', 'Rukum', 'Rupandehi',
        'Salyan', 'Sankhuwasabha', 'Saptari', 'Sarlahi', 'Sindhuli', 'Sindhupalchok', 'Siraha', 'Solukhumbu', 'Sunsari', 'Surkhet', 'Syangja',
        'Tanahu', 'Taplejung', 'Terhathum',
        'Udayapur'
    );

    /**
     * @link http://www.fallingrain.com/world/NP/
     */
    protected static \$cityName = array(
        'Achham', 'Aiselukharka', 'Amardaha', 'Amariya', 'Amlekhganj', 'Amraia', 'Andia', 'Andruli', 'Angbung',  'Arghkot', 'Arughatbazaar', 'Asaina', 'Ataria', 'Atrauli', 'Aulgurta',
        'Bachhuwa', 'Badirpatti', 'Bagar', 'Bagarchhap', 'Baglungbazaar', 'Bahadurganj', 'Bahrabise', 'Bahsi', 'Baijnathpurwa', 'Baindoli', 'Bairia', 'Baitadi', 'Bajhang', 'Bajura', 'Bakarkot', 'Balapur', 'Baldenggarhi', 'Balkot', 'Balma', 'Bandipur', 'Banepa', 'Banepabazaar', 'Baneshore', 'Banghi', 'Banke', 'Bansangu', 'Barbatta', 'Bardiya', 'Barhamjia', 'Basbeti', 'Batarbazaar', 'Bathala', 'Battar', 'Baudha', 'Baudhatinchule', 'Baugachia', 'Beding', 'Belahia', 'Belgaon', 'Belwa', 'Beni', 'Benighat', 'Berhampuri', 'Besisahar', 'Beteni', 'Bethari', 'Betrwati', 'Bhadgaon', 'Bhadrapur', 'Bhagaura', 'Bhagwanpur', 'Bhainsah', 'Bhainse', 'Bhainsedobhn', 'Bhairahawa', 'Bhajni', 'Bhaktapur', 'Bhandar', 'Bharatpur', 'Bhartbs', 'Bhata', 'Bhataulia', 'Bhawanipur', 'Bhikhnatdjori', 'Bhiknathor', 'Bhimkothi', 'Bhimphedi', 'Bhingrigaon', 'Bhitania', 'Bhojpur', 'Bholi', 'Bhopatpur', 'Bhowa', 'Bhujauli', 'Bhurchaur', 'Bhurkia', 'Bijulpura', 'Bilauri', 'Binayakgaon', 'Biprat', 'Biratnagar', 'Birendranagar', 'Birgunj', 'Birkot', 'Birta', 'Bishunpura', 'Bithara', 'Bogri', 'Boradandi', 'Bramhadeumandi', 'Budanilkantha', 'Budhabare', 'Bungmati', 'Burili', 'Burthum', 'Burtibang', 'Butwal',
        'Captainganj', 'Chainpur', 'Chaitya', 'Champapur', 'Chandragadhi', 'Changrang', 'Chapagaun', 'Charikot', 'Chaturale', 'Chaubisho', 'Chaukle', 'Chaukun', 'Chaunrikharka', 'Chautara', 'Chautha', 'Chepang', 'Chepti', 'Chepuwa', 'Chhapia', 'Chhapre', 'Chharkabhot', 'Chhibro', 'Chhintapu', 'Chhokang', 'Chhrkbhotgaon', 'Chhukgaon', 'Chhule', 'Chilankha', 'Chilha', 'Chilkhaya', 'Chisapani', 'Chisapanigadhi', 'Chiybri', 'Chobhar', 'Cholpa', 'Chong', 'Choutar', 'Chuchekanda', 'Chukhung', 'Chumikgyatsa', 'Chunemari', 'Chyabari', 'Chyamtang', 'Chyangthapu', 'Colonelbari',
        'Daban', 'Dabhung', 'Dadeldhura', 'Dahawa', 'Dailekh', 'Dakhakot', 'Dakshnkli', 'Daliwa', 'Dall', 'Dalphu', 'Daman', 'Damdwali', 'Dandakharka', 'Dang', 'Dangarmarwa', 'Daregaunra', 'Daura', 'Debichaur', 'Debikot', 'Dekhatbhuli', 'Deomoro', 'Deoraha', 'Deurali', 'Dhabi', 'Dhadinbesi', 'Dhakela', 'Dhalkebar', 'Dhamaura', 'Dhangadhi', 'Dhankuta', 'Dhankutabazaar', 'Dharamnagar', 'Dharampur', 'Dharan', 'Dharnbzr', 'Dharot', 'Dharsing', 'Dhita', 'Dhuli', 'Dhulikhel', 'Dhunche', 'Dhungrebas', 'Dhurjanna', 'Dhurkot', 'Diktel', 'Diktelbazaar', 'Dillikot', 'Dingboche', 'Dingla', 'Dipayal', 'Doglng', 'Dolakha', 'Dolalghat', 'Dorpattan', 'Doti', 'Dugtha', 'Dullu', 'Dumja', 'Dumn', 'Dumrchaur', 'Dumuhn', 'Dunai', 'Dunglang', 'Durgaon', 'Durgoli',
        'Fatehpur',
        'Gadhi', 'Gadriya', 'Gaighat', 'Gaindaknda', 'Gairagaon', 'Gairigaun', 'Galba', 'Galwa', 'Galwagaun', 'Gamgadhi', 'Gamphathang', 'Garenkhuti', 'Gaur', 'Geta', 'Ghachak', 'Ghanpokhara', 'Ghilinggaon', 'Ghoghda', 'Ghorahi', 'Ghra', 'Ghunsa', 'Ghunthang', 'Giri', 'Girma', 'Godavari', 'Gogangaon', 'Gogn', 'Golagowar', 'Golapala', 'Golgaur', 'Gongrali', 'Goplpur', 'Gorkha', 'Gosainkunda', 'Gotam', 'Gotamsiyala', 'Gothi', 'Gour', 'Guani', 'Gudel', 'Guleriya', 'Gulmikot', 'Gumbung', 'Gumsha', 'Gunhna', 'Gurja', 'Gurjakhana', 'Guthi',
        'Hajminia', 'Halji', 'Handrung', 'Hangsari', 'Hanumannagar', 'Haraincha', 'Hardiachauki', 'Haria', 'Hariharpurgadhi', 'Haripur', 'Harrebarre', 'Hasta', 'Hatia', 'Hatranga', 'Helambu', 'Hetauda', 'Hetaudabazaar', 'Hilajug',
        'Ilam', 'Inarwa', 'Ismakot', 'Itahari',
        'Jagat', 'Jain', 'Jajarkot', 'Jaleswar', 'Jalkundi', 'Jalthal', 'Jamuna', 'Janakpur', 'Jantrakhani', 'Jawalakhel', 'Jhapa', 'Jhikabasti', 'Jhunga', 'Jhuwani', 'Jibu', 'Jiri', 'Jiwadanda', 'Jogkuti', 'Jomsom', 'Joriapani', 'Joshpur', 'Jumla', 'Junbesi', 'Juribela',
        'Kagbeni', 'Kailali', 'Kakani', 'Kalaiya', 'Kalikot', 'Kalimati', 'Kampughat', 'Kamsin', 'Kanchanpur', 'Kanouli', 'Kantipur', 'Kapilvastu', 'Kapurkot', 'Karelung', 'Kasba', 'Kaski', 'Kaspa', 'Kathmandu', 'Katle', 'Katti', 'Katunje', 'Kehami', 'Kermi', 'Khadkagaun', 'Khadreha', 'Khaireni', 'Khalte', 'Khanchikot', 'Khandbari', 'Khangsar', 'Khanjpur', 'Kharang', 'Kharchyun', 'Khargauli', 'Kharka', 'Khinchit', 'Khmchn', 'Khngra', 'Khnskot', 'Khokna', 'Khotng', 'Khrp', 'Khumaltar', 'Khumjung', 'Khunza', 'Khurpa', 'Kiratichhap', 'Kodari', 'Kodudhunga', 'Kohalpur', 'Koilbas', 'Koropani', 'Kothari', 'Kritipur', 'Kuiyahi', 'Kulekhani', 'Kumargaon', 'Kumbher', 'Kunchha', 'Kuseri', 'Kusma', 'Kuthanawa', 'Kutharpekot',
        'Labsibot', 'Lahan', 'Lakarpata', 'Lakkar', 'Lalitpur', 'Lamabagar', 'Lamji', 'Lamjung', 'Lammela', 'Lamobagargola', 'Lamodihi', 'Lampakha', 'Lamri', 'Langtang', 'Larkaiya', 'Lekhparajuli', 'Lete', 'Lahonak', 'Lildanda', 'Lilbhitti', 'Lilikot', 'Limbudin', 'Limbuwan', 'Lindandavillage', 'Liping', 'Liwang', 'Liwangaon', 'Lobuche', 'Lokondo', 'Lomanthang', 'Lubhu', 'Lukla', 'Lumbini', 'Lumbinibagh', 'Lumsal', 'Lumsum', 'Lumsumkhani', 'Lunak', 'Lungthung', 'Lunishera', 'Lurigaon',
        'Mahakali', 'Mahankal', 'Maharajaganj', 'Mahdevtar', 'Mahendranagar', 'Majari', 'Majhgaon', 'Makaising', 'Makwanpurgadhi', 'Malangwa', 'Malimchigaon', 'Manakot', 'Manang', 'Manangbhot', 'Manebhaniyang', 'Mangalpur', 'Mangle', 'Mangri', 'Manhari', 'Manikpur', 'Maniramkanda', 'Mankali', 'Manmaiju', 'Martadi', 'Meghauli', 'Melekheti', 'Melung', 'Mingbo', 'Mohami', 'Motipur', 'Mughla', 'Muglaha', 'Muglin', 'Mugu', 'Muktinath', 'Munchi', 'Munge', 'Munigaun', 'Musikot', 'Mustang',
        'Nagaa', 'Nagarjun', 'Nagarkot', 'Namai', 'Namchebazaar', 'Namdegoan', 'Namrek', 'Nandpur', 'Nangraon', 'Naraingarh', 'Narayangadh', 'Narayanghat', 'Narcheng', 'Nargaon', 'Naubise', 'Nauche', 'Nauranga', 'Nayagaon', 'Nepalgunj', 'Nepaltar', 'Nijgadh', 'Nuwakot',
        'Odarapur', 'Okhaldhunga', 'Okhaldhungabazaar', 'Olangchukgola', 'Oligaon',
        'Pachgachhiya', 'Pachi', 'Pachkaria', 'Pachuwarghat', 'Padmi', 'Pahritol', 'Paklihawa', 'Pali', 'Palung', 'Palungsikarkot', 'Panauti', 'Panautivillage', 'Panbari', 'Panchkhal', 'Pangboche', 'Pangthok', 'Panighat', 'Para', 'Parabice', 'Parasi', 'Partpur', 'Pasauli', 'Pashupatinth', 'Pasupati', 'Patan', 'Patansundhara', 'Pathalaiya', 'Patharkot', 'Patia', 'Patibhamyang', 'Patlahara', 'Phalamesangu', 'Phaplu', 'Pharping', 'Phembu', 'Phidim', 'Phijorgaon', 'Phopagaon', 'Phorcha', 'Phorse', 'Phugaon', 'Phugru', 'Phulbari', 'Phulwri', 'Phung', 'Phungnangtar', 'Pipalkot', 'Pipra', 'Pokhara', 'Pratappur', 'Pudamigaon', 'Pulanto', 'Purtighat', 'Putalikhet', 'Pyuthan',
        'Rajapur', 'Rajbiraj', 'Ramdighat', 'Ramdikbana', 'Ramechhap', 'Ramgarh', 'Ramnagar', 'Rampur', 'Ranbirta', 'Rangeli', 'Ranipauwa', 'Rara', 'Rasi', 'Raskot', 'Rasnadu', 'Rasnaduvillage', 'Rasuwa', 'Rasuwagadhi', 'Rear', 'Rehara', 'Rekcha', 'Ridi', 'Rimi', 'Riribazaar', 'Ririkot', 'Romandey', 'Rukumkot', 'Rumalgaon', 'Rumjatar', 'Rupandehi',
        'Saipal', 'Sakha', 'Salleri', 'Salyan', 'Salyangaon', 'Samargaon', 'Samde', 'Sanam', 'Sangdah', 'Sangu', 'Sangutar', 'Sankhu', 'Sarswati', 'Sasaiya', 'Saukatia', 'Semri', 'Setibesi', 'Shibganj', 'Shibkhola', 'Shimi', 'Shivanagar', 'Shringa', 'Siddharthanagar', 'Sidhniaghat', 'Sikha', 'Sikpasorkhani', 'Siktaghat', 'Silgadhi', 'Silgadhidoti', 'Siliguri', 'Silkot', 'Simengaon', 'Simikot', 'Simra', 'Sindhuli', 'Sindhuligadhi', 'Siraha', 'Sirsia', 'Sisaghatbazaar', 'Sisaria', 'Sisbani', 'Sisghat', 'Sitalpati', 'Sitapur', 'Siurigaon', 'Sorukot', 'Sorung', 'Sripur', 'Subkone', 'Sugarkhal', 'Sukadhik', 'Sukhar', 'Sukhchauri', 'Sunauli', 'Sundarijal', 'Sundarpur', 'Sunwal', 'Surkhet', 'Swargadwari', 'Syabru', 'Syabrubesi', 'Syangja',
        'Tamghas', 'Tamsipur', 'Tanahun', 'Tandi', 'Tange', 'Tanje', 'Tansen', 'Taplejung', 'Tarakot', 'Tarenggaon', 'Tatopani', 'Taulia', 'Taulihawa', 'Teghari', 'Tehrathum', 'Telok', 'Telpani', 'Tempthng', 'Thabng', 'Thakle', 'Thalara', 'Thami', 'Thammu', 'Thankot', 'Thapagaon', 'Thargumtha', 'Thimi', 'Thonje', 'Thothung', 'Thukla', 'Thulobeshi', 'Thuloptl', 'Thumshe', 'Thyangboche', 'Tibrikot', 'Tigri', 'Tikabhairab', 'Tikapur', 'Tikoli', 'Tilaurkot', 'Tiling', 'Tilkot', 'Tingjegaon', 'Tinkar', 'Titahari', 'Tokha', 'Tokna', 'Toli', 'Topkegola', 'Topla', 'Tribeni', 'Tribenighat', 'Trislibzr', 'Trisuli', 'Tsarang', 'Tukotigaon', 'Tukucha', 'Tulsi', 'Tulsipur', 'Tumlingtar',
        'Udaypur', 'Udaypurgadhi', 'Umari', 'Uppardangadhi', 'Uwagaon',
        'Waling', 'Walungchunggola', 'Wapsakhani',
        'Yala', 'Yalbang', 'Yamphodin', 'Yrsa',
    );

    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
    protected static \$cityFormats = array(
        '";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetNameFormats = array(
        '";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 96, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 97, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["wardNumber"]) || array_key_exists("wardNumber", $context) ? $context["wardNumber"] : (function () { throw new RuntimeError('Variable "wardNumber" does not exist.', 103, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 103, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["district"]) || array_key_exists("district", $context) ? $context["district"] : (function () { throw new RuntimeError('Variable "district" does not exist.', 103, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * @example 'Kalaiya'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example '5'
     */
    public static function wardNumber()
    {
        return static::numerify(static::randomElement(static::\$wardNumber));
    }

    /**
     * @example 'Bara'
     */
    public static function district()
    {
        return static::randomElement(static::\$district);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 103,  155 => 100,  148 => 97,  143 => 96,  137 => 93,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ne_NP;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$wardNumber = array('##', '#');
    protected static \$streetSuffix = array(
        'bagh', 'bazaar', 'besi', 'chowk', 'gaun', 'kot', 'mandir', 'marg', 'nagar', 'sahar', 'sthan', 'tar'
    );

    protected static \$postcode = array('#####');

    /**
     * @link http://en.wikipedia.org/wiki/List_of_districts_of_Nepal
     */
    protected static \$district = array(
        'Achham', 'Arghakhanchi',
        'Baglung', 'Baitadi', 'Bajhang', 'Bajura', 'Banke', 'Bara', 'Bardiya', 'Bhaktapur', 'Bhojpur',
        'Chitwan',
        'Dadeldhura', 'Dailekh', 'Dang Deukhuri', 'Darchula', 'Dhading', 'Dhankuta', 'Dhanusa', 'Dolakha', 'Dolpa', 'Doti',
        'Gorkha', 'Gulmi',
        'Humla',
        'Ilam',
        'Jajarkot', 'Jhapa', 'Jumla',
        'Kailali', 'Kalikot', 'Kanchanpur', 'Kapilvastu', 'Kaski', 'Kathmandu', 'Kavrepalanchok', 'Khotang',
        'Lalitpur', 'Lamjung',
        'Mahottari', 'Makwanpur', 'Manang', 'Morang', 'Mugu', 'Mustang', 'Myagdi',
        'Nawalparasi', 'Nuwakot',
        'Okhaldhunga',
        'Palpa', 'Panchthar', 'Parbat', 'Parsa', 'Pyuthan',
        'Ramechhap', 'Rasuwa', 'Rautahat', 'Rolpa', 'Rukum', 'Rupandehi',
        'Salyan', 'Sankhuwasabha', 'Saptari', 'Sarlahi', 'Sindhuli', 'Sindhupalchok', 'Siraha', 'Solukhumbu', 'Sunsari', 'Surkhet', 'Syangja',
        'Tanahu', 'Taplejung', 'Terhathum',
        'Udayapur'
    );

    /**
     * @link http://www.fallingrain.com/world/NP/
     */
    protected static \$cityName = array(
        'Achham', 'Aiselukharka', 'Amardaha', 'Amariya', 'Amlekhganj', 'Amraia', 'Andia', 'Andruli', 'Angbung',  'Arghkot', 'Arughatbazaar', 'Asaina', 'Ataria', 'Atrauli', 'Aulgurta',
        'Bachhuwa', 'Badirpatti', 'Bagar', 'Bagarchhap', 'Baglungbazaar', 'Bahadurganj', 'Bahrabise', 'Bahsi', 'Baijnathpurwa', 'Baindoli', 'Bairia', 'Baitadi', 'Bajhang', 'Bajura', 'Bakarkot', 'Balapur', 'Baldenggarhi', 'Balkot', 'Balma', 'Bandipur', 'Banepa', 'Banepabazaar', 'Baneshore', 'Banghi', 'Banke', 'Bansangu', 'Barbatta', 'Bardiya', 'Barhamjia', 'Basbeti', 'Batarbazaar', 'Bathala', 'Battar', 'Baudha', 'Baudhatinchule', 'Baugachia', 'Beding', 'Belahia', 'Belgaon', 'Belwa', 'Beni', 'Benighat', 'Berhampuri', 'Besisahar', 'Beteni', 'Bethari', 'Betrwati', 'Bhadgaon', 'Bhadrapur', 'Bhagaura', 'Bhagwanpur', 'Bhainsah', 'Bhainse', 'Bhainsedobhn', 'Bhairahawa', 'Bhajni', 'Bhaktapur', 'Bhandar', 'Bharatpur', 'Bhartbs', 'Bhata', 'Bhataulia', 'Bhawanipur', 'Bhikhnatdjori', 'Bhiknathor', 'Bhimkothi', 'Bhimphedi', 'Bhingrigaon', 'Bhitania', 'Bhojpur', 'Bholi', 'Bhopatpur', 'Bhowa', 'Bhujauli', 'Bhurchaur', 'Bhurkia', 'Bijulpura', 'Bilauri', 'Binayakgaon', 'Biprat', 'Biratnagar', 'Birendranagar', 'Birgunj', 'Birkot', 'Birta', 'Bishunpura', 'Bithara', 'Bogri', 'Boradandi', 'Bramhadeumandi', 'Budanilkantha', 'Budhabare', 'Bungmati', 'Burili', 'Burthum', 'Burtibang', 'Butwal',
        'Captainganj', 'Chainpur', 'Chaitya', 'Champapur', 'Chandragadhi', 'Changrang', 'Chapagaun', 'Charikot', 'Chaturale', 'Chaubisho', 'Chaukle', 'Chaukun', 'Chaunrikharka', 'Chautara', 'Chautha', 'Chepang', 'Chepti', 'Chepuwa', 'Chhapia', 'Chhapre', 'Chharkabhot', 'Chhibro', 'Chhintapu', 'Chhokang', 'Chhrkbhotgaon', 'Chhukgaon', 'Chhule', 'Chilankha', 'Chilha', 'Chilkhaya', 'Chisapani', 'Chisapanigadhi', 'Chiybri', 'Chobhar', 'Cholpa', 'Chong', 'Choutar', 'Chuchekanda', 'Chukhung', 'Chumikgyatsa', 'Chunemari', 'Chyabari', 'Chyamtang', 'Chyangthapu', 'Colonelbari',
        'Daban', 'Dabhung', 'Dadeldhura', 'Dahawa', 'Dailekh', 'Dakhakot', 'Dakshnkli', 'Daliwa', 'Dall', 'Dalphu', 'Daman', 'Damdwali', 'Dandakharka', 'Dang', 'Dangarmarwa', 'Daregaunra', 'Daura', 'Debichaur', 'Debikot', 'Dekhatbhuli', 'Deomoro', 'Deoraha', 'Deurali', 'Dhabi', 'Dhadinbesi', 'Dhakela', 'Dhalkebar', 'Dhamaura', 'Dhangadhi', 'Dhankuta', 'Dhankutabazaar', 'Dharamnagar', 'Dharampur', 'Dharan', 'Dharnbzr', 'Dharot', 'Dharsing', 'Dhita', 'Dhuli', 'Dhulikhel', 'Dhunche', 'Dhungrebas', 'Dhurjanna', 'Dhurkot', 'Diktel', 'Diktelbazaar', 'Dillikot', 'Dingboche', 'Dingla', 'Dipayal', 'Doglng', 'Dolakha', 'Dolalghat', 'Dorpattan', 'Doti', 'Dugtha', 'Dullu', 'Dumja', 'Dumn', 'Dumrchaur', 'Dumuhn', 'Dunai', 'Dunglang', 'Durgaon', 'Durgoli',
        'Fatehpur',
        'Gadhi', 'Gadriya', 'Gaighat', 'Gaindaknda', 'Gairagaon', 'Gairigaun', 'Galba', 'Galwa', 'Galwagaun', 'Gamgadhi', 'Gamphathang', 'Garenkhuti', 'Gaur', 'Geta', 'Ghachak', 'Ghanpokhara', 'Ghilinggaon', 'Ghoghda', 'Ghorahi', 'Ghra', 'Ghunsa', 'Ghunthang', 'Giri', 'Girma', 'Godavari', 'Gogangaon', 'Gogn', 'Golagowar', 'Golapala', 'Golgaur', 'Gongrali', 'Goplpur', 'Gorkha', 'Gosainkunda', 'Gotam', 'Gotamsiyala', 'Gothi', 'Gour', 'Guani', 'Gudel', 'Guleriya', 'Gulmikot', 'Gumbung', 'Gumsha', 'Gunhna', 'Gurja', 'Gurjakhana', 'Guthi',
        'Hajminia', 'Halji', 'Handrung', 'Hangsari', 'Hanumannagar', 'Haraincha', 'Hardiachauki', 'Haria', 'Hariharpurgadhi', 'Haripur', 'Harrebarre', 'Hasta', 'Hatia', 'Hatranga', 'Helambu', 'Hetauda', 'Hetaudabazaar', 'Hilajug',
        'Ilam', 'Inarwa', 'Ismakot', 'Itahari',
        'Jagat', 'Jain', 'Jajarkot', 'Jaleswar', 'Jalkundi', 'Jalthal', 'Jamuna', 'Janakpur', 'Jantrakhani', 'Jawalakhel', 'Jhapa', 'Jhikabasti', 'Jhunga', 'Jhuwani', 'Jibu', 'Jiri', 'Jiwadanda', 'Jogkuti', 'Jomsom', 'Joriapani', 'Joshpur', 'Jumla', 'Junbesi', 'Juribela',
        'Kagbeni', 'Kailali', 'Kakani', 'Kalaiya', 'Kalikot', 'Kalimati', 'Kampughat', 'Kamsin', 'Kanchanpur', 'Kanouli', 'Kantipur', 'Kapilvastu', 'Kapurkot', 'Karelung', 'Kasba', 'Kaski', 'Kaspa', 'Kathmandu', 'Katle', 'Katti', 'Katunje', 'Kehami', 'Kermi', 'Khadkagaun', 'Khadreha', 'Khaireni', 'Khalte', 'Khanchikot', 'Khandbari', 'Khangsar', 'Khanjpur', 'Kharang', 'Kharchyun', 'Khargauli', 'Kharka', 'Khinchit', 'Khmchn', 'Khngra', 'Khnskot', 'Khokna', 'Khotng', 'Khrp', 'Khumaltar', 'Khumjung', 'Khunza', 'Khurpa', 'Kiratichhap', 'Kodari', 'Kodudhunga', 'Kohalpur', 'Koilbas', 'Koropani', 'Kothari', 'Kritipur', 'Kuiyahi', 'Kulekhani', 'Kumargaon', 'Kumbher', 'Kunchha', 'Kuseri', 'Kusma', 'Kuthanawa', 'Kutharpekot',
        'Labsibot', 'Lahan', 'Lakarpata', 'Lakkar', 'Lalitpur', 'Lamabagar', 'Lamji', 'Lamjung', 'Lammela', 'Lamobagargola', 'Lamodihi', 'Lampakha', 'Lamri', 'Langtang', 'Larkaiya', 'Lekhparajuli', 'Lete', 'Lahonak', 'Lildanda', 'Lilbhitti', 'Lilikot', 'Limbudin', 'Limbuwan', 'Lindandavillage', 'Liping', 'Liwang', 'Liwangaon', 'Lobuche', 'Lokondo', 'Lomanthang', 'Lubhu', 'Lukla', 'Lumbini', 'Lumbinibagh', 'Lumsal', 'Lumsum', 'Lumsumkhani', 'Lunak', 'Lungthung', 'Lunishera', 'Lurigaon',
        'Mahakali', 'Mahankal', 'Maharajaganj', 'Mahdevtar', 'Mahendranagar', 'Majari', 'Majhgaon', 'Makaising', 'Makwanpurgadhi', 'Malangwa', 'Malimchigaon', 'Manakot', 'Manang', 'Manangbhot', 'Manebhaniyang', 'Mangalpur', 'Mangle', 'Mangri', 'Manhari', 'Manikpur', 'Maniramkanda', 'Mankali', 'Manmaiju', 'Martadi', 'Meghauli', 'Melekheti', 'Melung', 'Mingbo', 'Mohami', 'Motipur', 'Mughla', 'Muglaha', 'Muglin', 'Mugu', 'Muktinath', 'Munchi', 'Munge', 'Munigaun', 'Musikot', 'Mustang',
        'Nagaa', 'Nagarjun', 'Nagarkot', 'Namai', 'Namchebazaar', 'Namdegoan', 'Namrek', 'Nandpur', 'Nangraon', 'Naraingarh', 'Narayangadh', 'Narayanghat', 'Narcheng', 'Nargaon', 'Naubise', 'Nauche', 'Nauranga', 'Nayagaon', 'Nepalgunj', 'Nepaltar', 'Nijgadh', 'Nuwakot',
        'Odarapur', 'Okhaldhunga', 'Okhaldhungabazaar', 'Olangchukgola', 'Oligaon',
        'Pachgachhiya', 'Pachi', 'Pachkaria', 'Pachuwarghat', 'Padmi', 'Pahritol', 'Paklihawa', 'Pali', 'Palung', 'Palungsikarkot', 'Panauti', 'Panautivillage', 'Panbari', 'Panchkhal', 'Pangboche', 'Pangthok', 'Panighat', 'Para', 'Parabice', 'Parasi', 'Partpur', 'Pasauli', 'Pashupatinth', 'Pasupati', 'Patan', 'Patansundhara', 'Pathalaiya', 'Patharkot', 'Patia', 'Patibhamyang', 'Patlahara', 'Phalamesangu', 'Phaplu', 'Pharping', 'Phembu', 'Phidim', 'Phijorgaon', 'Phopagaon', 'Phorcha', 'Phorse', 'Phugaon', 'Phugru', 'Phulbari', 'Phulwri', 'Phung', 'Phungnangtar', 'Pipalkot', 'Pipra', 'Pokhara', 'Pratappur', 'Pudamigaon', 'Pulanto', 'Purtighat', 'Putalikhet', 'Pyuthan',
        'Rajapur', 'Rajbiraj', 'Ramdighat', 'Ramdikbana', 'Ramechhap', 'Ramgarh', 'Ramnagar', 'Rampur', 'Ranbirta', 'Rangeli', 'Ranipauwa', 'Rara', 'Rasi', 'Raskot', 'Rasnadu', 'Rasnaduvillage', 'Rasuwa', 'Rasuwagadhi', 'Rear', 'Rehara', 'Rekcha', 'Ridi', 'Rimi', 'Riribazaar', 'Ririkot', 'Romandey', 'Rukumkot', 'Rumalgaon', 'Rumjatar', 'Rupandehi',
        'Saipal', 'Sakha', 'Salleri', 'Salyan', 'Salyangaon', 'Samargaon', 'Samde', 'Sanam', 'Sangdah', 'Sangu', 'Sangutar', 'Sankhu', 'Sarswati', 'Sasaiya', 'Saukatia', 'Semri', 'Setibesi', 'Shibganj', 'Shibkhola', 'Shimi', 'Shivanagar', 'Shringa', 'Siddharthanagar', 'Sidhniaghat', 'Sikha', 'Sikpasorkhani', 'Siktaghat', 'Silgadhi', 'Silgadhidoti', 'Siliguri', 'Silkot', 'Simengaon', 'Simikot', 'Simra', 'Sindhuli', 'Sindhuligadhi', 'Siraha', 'Sirsia', 'Sisaghatbazaar', 'Sisaria', 'Sisbani', 'Sisghat', 'Sitalpati', 'Sitapur', 'Siurigaon', 'Sorukot', 'Sorung', 'Sripur', 'Subkone', 'Sugarkhal', 'Sukadhik', 'Sukhar', 'Sukhchauri', 'Sunauli', 'Sundarijal', 'Sundarpur', 'Sunwal', 'Surkhet', 'Swargadwari', 'Syabru', 'Syabrubesi', 'Syangja',
        'Tamghas', 'Tamsipur', 'Tanahun', 'Tandi', 'Tange', 'Tanje', 'Tansen', 'Taplejung', 'Tarakot', 'Tarenggaon', 'Tatopani', 'Taulia', 'Taulihawa', 'Teghari', 'Tehrathum', 'Telok', 'Telpani', 'Tempthng', 'Thabng', 'Thakle', 'Thalara', 'Thami', 'Thammu', 'Thankot', 'Thapagaon', 'Thargumtha', 'Thimi', 'Thonje', 'Thothung', 'Thukla', 'Thulobeshi', 'Thuloptl', 'Thumshe', 'Thyangboche', 'Tibrikot', 'Tigri', 'Tikabhairab', 'Tikapur', 'Tikoli', 'Tilaurkot', 'Tiling', 'Tilkot', 'Tingjegaon', 'Tinkar', 'Titahari', 'Tokha', 'Tokna', 'Toli', 'Topkegola', 'Topla', 'Tribeni', 'Tribenighat', 'Trislibzr', 'Trisuli', 'Tsarang', 'Tukotigaon', 'Tukucha', 'Tulsi', 'Tulsipur', 'Tumlingtar',
        'Udaypur', 'Udaypurgadhi', 'Umari', 'Uppardangadhi', 'Uwagaon',
        'Waling', 'Walungchunggola', 'Wapsakhani',
        'Yala', 'Yalbang', 'Yamphodin', 'Yrsa',
    );

    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
    protected static \$cityFormats = array(
        '{{cityName}}'
    );
    protected static \$streetNameFormats = array(
        '{{firstName}}{{streetSuffix}}',
        '{{lastName}}{{streetSuffix}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}',
    );
    protected static \$addressFormats = array(
        \"{{city}}-{{wardNumber}}, {{streetAddress}}, {{district}} {{postcode}}\",
    );

    /**
     * @example 'Kalaiya'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example '5'
     */
    public static function wardNumber()
    {
        return static::numerify(static::randomElement(static::\$wardNumber));
    }

    /**
     * @example 'Bara'
     */
    public static function district()
    {
        return static::randomElement(static::\$district);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Address.php");
    }
}
