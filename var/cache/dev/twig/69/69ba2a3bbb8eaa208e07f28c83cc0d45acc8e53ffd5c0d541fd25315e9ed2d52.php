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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php */
class __TwigTemplate_dc2097395af67c8f699ba175aef51bd4e85c4a9bd6b54e7e3bd49cf34922a674 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_PH;

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$streetNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "'
    );

    //http://en.wikipedia.org/wiki/Postal_addresses_in_the_Philippines
    protected static \$addressFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["barangay"]) || array_key_exists("barangay", $context) ? $context["barangay"] : (function () { throw new RuntimeError('Variable "barangay" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["province"]) || array_key_exists("province", $context) ? $context["province"] : (function () { throw new RuntimeError('Variable "province" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["municipality"]) || array_key_exists("municipality", $context) ? $context["municipality"] : (function () { throw new RuntimeError('Variable "municipality" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["province"]) || array_key_exists("province", $context) ? $context["province"] : (function () { throw new RuntimeError('Variable "province" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$buildingNumber = array('##A', '##', '##A/##', '##/##');
    protected static \$postcode = array('####');

    //http://en.wikipedia.org/wiki/Provinces_of_the_Philippines
    protected static \$province = array(
        'Abra', 'Agusan del Norte', 'Agusan del Sur', 'Aklan', 'Albay',
        'Antique', 'Apayao', 'Aurora', 'Basilan', 'Bataan', 'Batanes',
        'Batangas', 'Benguet', 'Biliran', 'Bohol', 'Bukidnon', 'Bulacan',
        'Cagayan', 'Camarines Norte', 'Camarines Sur', 'Camiguin', 'Capiz',
        'Catanduanes', 'Cavite', 'Cebu', 'Compostela Valley', 'Cotabato',
        'Davao del Norte', 'Davao del Sur', 'Davao Oriental',
        'Dinagat Islands', 'Eastern Samar', 'Guimaras', 'Ifugao',
        'Ilocos Norte', 'Ilocos Sur', 'Iloilo', 'Isabela', 'Kalinga',
        'La Union', 'Laguna', 'Lanao del Norte', 'Lanao del Sur',
        'Leyte', 'Maguindanao', 'Marinduque', 'Masbate',
        'Misamis Occidental', 'Misamis Oriental',
        'Mountain Province', 'Negros Occidental', 'Negros Oriental',
        'Northern Samar', 'Nueva Ecija', 'Nueva Vizcaya',
        'Occidental Mindoro', 'Oriental Mindoro', 'Palawan',
        'Pampanga', 'Pangasinan', 'Quezon', 'Quirino', 'Rizal',
        'Romblon', 'Samar', 'Sarangani', 'Siquijor', 'Sorsogon',
        'South Cotabato', 'Southern Leyte', 'Sultan Kudarat', 'Sulu',
        'Surigao del Norte', 'Surigao del Sur', 'Tarlac',
        'Tawi-Tawi', 'Zambales', 'Zamboanga del Norte',
        'Zamboanga del Sur', 'Zamboanga Sibugay', 'Metro Manila'
    );

    //http://en.wikipedia.org/wiki/List_of_cities_in_the_Philippines
    protected static \$city = array(
        'Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong',
        'Manila', 'Marikina', 'Muntinlupa', 'Navotas', 'Parañaque', 'Pasay',
        'Pasig', 'Quezon City', 'San Juan', 'Taguig', 'Valenzuela',
        'Butuan', 'Cabadbaran', 'Bayugan', 'Legazpi', 'Ligao', 'Tabaco',
        'Isabela', 'Lamitan', 'Balanga', 'Batangas City', 'Lipa', 'Tanauan',
        'Baguio', 'Tagbilaran', 'Malaybalay', 'Valencia', 'Malolos',
        'Meycauayan', 'San Jose del Monte', 'Tuguegarao', 'Iriga', 'Naga',
        'Roxas', 'Bacoor', 'Cavite City', 'Dasmariñas', 'Imus', 'Tagaytay',
        'Trece Martires', 'Bogo', 'Carcar', 'Cebu City', 'Danao', 'Lapu-Lapu',
        'Mandaue', 'Naga', 'Talisay', 'Toledo', 'Kidapawan', 'Panabo', 'Samal',
        'Tagum', 'Davao City', 'Digos', 'Mati', 'Borongan', 'Batac', 'Laoag',
        'Candon', 'Vigan', 'Iloilo City', 'Passi', 'Cauayan', 'Ilagan',
        'Santiago', 'Tabuk', 'San Fernando', 'Biñan', 'Cabuyao', 'Calamba',
        'San Pablo', 'Santa Rosa', 'San Pedro', 'Iligan', 'Marawi', 'Baybay',
        'Ormoc', 'Tacloban', 'Cotabato City', 'Masbate City', 'Oroquieta',
        'Ozamiz', 'Tangub', 'Cagayan de Oro', 'El Salvador', 'Gingoog',
        'Bacolod', 'Bago', 'Cadiz', 'Escalante', 'Himamaylan', 'Kabankalan',
        'La Carlota', 'Sagay', 'San Carlos', 'Silay', 'Sipalay', 'Talisay',
        'Victorias', 'Bais', 'Bayawan', 'Canlaon', 'Dumaguete', 'Guihulngan',
        'Tanjay', 'Cabanatuan', 'Gapan', 'Muñoz', 'Palayan', 'San Jose',
        'Calapan', 'Puerto Princesa', 'Angeles', 'Mabalacat',
        'San Fernando', 'Alaminos', 'Dagupan', 'San Carlos',
        'Urdaneta', 'Lucena', 'Tayabas', 'Antipolo','Calbayog', 'Catbalogan',
        'Sorsogon City', 'General Santos', 'Koronadal', 'Maasin', 'Tacurong',
        'Surigao City', 'Bislig', 'Tandag', 'Tarlac City','Olongapo',
        'Dapitan', 'Dipolog', 'Pagadian', 'Zamboanga City'
    );

    //http://en.wikipedia.org/wiki/List_of_Philippine_cities_and_municipalities_by_population
    protected static \$municipality = array(
        'Bangued', 'Boliney', 'Bucay', 'Bucloc', 'Daguioman', 'Danglas',
        'Dolores', 'La Paz', 'Lacub', 'Lagangilang', 'Lagayan', 'Langiden',
        'Licuan-Baay', 'Luba', 'Malibcong', 'Manabo', 'Peñarrubia',
        'Pidigan', 'Pilar', 'Sallapadan', 'San Isidro', 'San Juan',
        'San Quintin', 'Tayum', 'Tineg', 'Tubo', 'Villaviciosa',
        'Butuan City', 'Cabadbaran City', 'Buenavista', 'Carmen',
        'Jabonga', 'Kitcharao', 'Las Nieves', 'Magallanes',
        'Nasipit', 'Remedios T. Romualdez', 'Santiago', 'Tubay',
        'Bayugan City', 'Bunawan', 'Esperanza', 'La Paz', 'Loreto',
        'Prosperidad', 'Rosario', 'San Francisco', 'San Luis',
        'Santa Josefa', 'Sibagat', 'Talacogon', 'Trento', 'Veruela',
        'Altavas', 'Balete', 'Banga', 'Batan', 'Buruanga', 'Ibajay',
        'Kalibo', 'Lezo', 'Libacao', 'Madalag', 'Makato', 'Malay',
        'Malinao', 'Nabas', 'New Washington', 'Numancia', 'Tangalan',
        'Legazpi City', 'Ligao City', 'Tabaco City', 'Bacacay', 'Camalig',
        'Daraga', 'Guinobatan', 'Jovellar', 'Libon', 'Malilipot', 'Malinao',
        'Manito', 'Oas', 'Pio Duran', 'Polangui', 'Rapu-Rapu',
        'Santo Domingo', 'Anini-y', 'Barbaza', 'Belison', 'Bugasong',
        'Caluya', 'Culasi', 'Hamtic', 'Laua-an', 'Libertad', 'Pandan',
        'Patnongon', 'San Jose', 'San Remigio', 'Sebaste', 'Sibalom',
        'Tibiao', 'Tobias Fornier', 'Valderrama', 'Calanasan', 'Conner',
        'Flora', 'Kabugao', 'Luna', 'Pudtol', 'Santa Marcela', 'Baler',
        'Casiguran', 'Dilasag', 'Dinalungan', 'Dingalan', 'Dipaculao',
        'Maria Aurora', 'San Luis', 'Isabela City', 'Lamitan City', 'Akbar',
        'Al-Barka', 'Hadji Mohammad Ajul', 'Hadji Muhtamad', 'Lantawan',
        'Maluso', 'Sumisip', 'Tabuan-Lasa', 'Tipo-Tipo', 'Tuburan',
        'Ungkaya Pukan', 'Balanga City', 'Abucay', 'Bagac', 'Dinalupihan',
        'Hermosa', 'Limay', 'Mariveles', 'Morong', 'Orani', 'Orion', 'Pilar',
        'Samal', 'Basco', 'Itbayat', 'Ivana', 'Mahatao', 'Sabtang', 'Uyugan',
        'Batangas City', 'Lipa City', 'Tanauan City', 'Agoncillo',
        'Alitagtag', 'Balayan', 'Balete', 'Bauan', 'Calaca', 'Calatagan',
        'Cuenca', 'Ibaan', 'Laurel', 'Lemery', 'Lian', 'Lobo', 'Mabini',
        'Malvar', 'Mataas na Kahoy', 'Nasugbu', 'Padre Garcia', 'Rosario',
        'San Jose', 'San Juan', 'San Luis', 'San Nicolas', 'San Pascual',
        'Santa Teresita', 'Santo Tomas', 'Taal', 'Talisay', 'Taysan',
        'Tingloy', 'Tuy', 'Baguio City', 'Atok', 'Bakun', 'Bokod', 'Buguias',
        'Itogon', 'Kabayan', 'Kapangan', 'Kibungan', 'La Trinidad',
        'Mankayan', 'Sablan', 'Tuba', 'Tublay', 'Almeria', 'Biliran',
        'Cabucgayan', 'Caibiran', 'Culaba', 'Kawayan', 'Maripipi', 'Naval',
        'Tagbilaran City', 'Alburquerque', 'Alicia', 'Anda', 'Antequera',
        'Baclayon', 'Balilihan', 'Batuan', 'Bien Unido', 'Bilar',
        'Buenavista', 'Calape', 'Candijay', 'Carmen', 'Catigbian', 'Clarin',
        'Corella', 'Cortes', 'Dagohoy', 'Danao', 'Dauis', 'Dimiao', 'Duero',
        'Garcia Hernandez', 'Getafe', 'Guindulman', 'Inabanga', 'Jagna',
        'Lila', 'Loay', 'Loboc', 'Loon', 'Mabini', 'Maribojoc', 'Panglao',
        'Pilar', 'President Carlos P. Garcia', 'Sagbayan', 'San Isidro',
        'San Miguel', 'Sevilla', 'Sierra Bullones', 'Sikatuna', 'Talibon',
        'Trinidad', 'Tubigon', 'Ubay', 'Valencia', 'Malaybalay City',
        'Valencia City', 'Baungon', 'Cabanglasan', 'Damulog', 'Dangcagan',
        'Don Carlos', 'Impasug-ong', 'Kadingilan', 'Kalilangan', 'Kibawe',
        'Kitaotao', 'Lantapan', 'Libona', 'Malitbog', 'Manolo Fortich',
        'Maramag', 'Pangantucan', 'Quezon', 'San Fernando', 'Sumilao',
        'Talakag', 'Malolos City', 'Meycauayan City',
        'San Jose del Monte City', 'Angat', 'Balagtas', 'Baliuag', 'Bocaue',
        'Bulacan', 'Bustos', 'Calumpit', 'Doña Remedios Trinidad',
        'Guiguinto', 'Hagonoy', 'Marilao', 'Norzagaray', 'Obando', 'Pandi',
        'Paombong', 'Plaridel', 'Pulilan', 'San Ildefonso', 'San Miguel',
        'San Rafael', 'Santa Maria', 'Tuguegarao City', 'Abulug', 'Alcala',
        'Allacapan', 'Amulung', 'Aparri', 'Baggao', 'Ballesteros', 'Buguey',
        'Calayan', 'Camalaniugan', 'Claveria', 'Enrile', 'Gattaran',
        'Gonzaga', 'Iguig', 'Lal-lo', 'Lasam', 'Pamplona', 'Peñablanca',
        'Piat', 'Rizal', 'Sanchez-Mira', 'Santa Ana', 'Santa Praxedes',
        'Santa Teresita', 'Santo Niño', 'Solana', 'Tuao', 'Basud',
        'Capalonga', 'Daet', 'Jose Panganiban', 'Labo', 'Mercedes',
        'Paracale', 'San Lorenzo Ruiz', 'San Vicente', 'Santa Elena',
        'Talisay', 'Vinzons', 'Iriga City', 'Naga City', 'Baao', 'Balatan',
        'Bato', 'Bombon', 'Buhi', 'Bula', 'Cabusao', 'Calabanga',
        'Camaligan', 'Canaman', 'Caramoan', 'Del Gallego', 'Gainza',
        'Garchitorena', 'Goa', 'Lagonoy', 'Libmanan', 'Lupi', 'Magarao',
        'Milaor', 'Minalabac', 'Nabua', 'Ocampo', 'Pamplona', 'Pasacao',
        'Pili', 'Presentacion', 'Ragay', 'Sagñay', 'San Fernando',
        'San Jose', 'Sipocot', 'Siruma', 'Tigaon', 'Tinambac', 'Catarman',
        'Guinsiliban', 'Mahinog', 'Mambajao', 'Sagay', 'Roxas City',
        'Cuartero', 'Dao', 'Dumalag', 'Dumarao', 'Ivisan', 'Jamindan',
        'Ma-ayon', 'Mambusao', 'Panay', 'Panitan', 'Pilar', 'Pontevedra',
        'President Roxas', 'Sapi-an', 'Sigma', 'Tapaz', 'Bagamanoc', 'Baras',
        'Bato', 'Caramoran', 'Gigmoto', 'Pandan', 'Panganiban', 'San Andres',
        'San Miguel', 'Viga', 'Virac', 'Bacoor City', 'Cavite City',
        'Dasmariñas City', 'Imus City', 'Tagaytay City',
        'Trece Martires City', 'Alfonso', 'Amadeo', 'Carmona',
        'General Mariano Alvarez', 'General Emilio Aguinaldo',
        'General Trias', 'Indang', 'Kawit', 'Magallanes', 'Maragondon',
        'Mendez', 'Naic', 'Noveleta', 'Rosario', 'Silang', 'Tanza',
        'Ternate', 'Bogo City', 'Cebu City', 'Carcar City', 'Danao City',
        'Lapu-Lapu City', 'Mandaue City', 'Naga City', 'Talisay City',
        'Toledo City', 'Alcantara', 'Alcoy', 'Alegria', 'Aloguinsan',
        'Argao', 'Asturias', 'Badian', 'Balamban', 'Bantayan', 'Barili',
        'Boljoon', 'Borbon', 'Carmen', 'Catmon', 'Compostela', 'Consolacion',
        'Cordoba', 'Daanbantayan', 'Dalaguete', 'Dumanjug', 'Ginatilan',
        'Liloan', 'Madridejos', 'Malabuyoc', 'Medellin', 'Minglanilla',
        'Moalboal', 'Oslob', 'Pilar', 'Pinamungahan', 'Poro', 'Ronda',
        'Samboan', 'San Fernando', 'San Francisco', 'San Remigio',
        'Santa Fe', 'Santander', 'Sibonga', 'Sogod', 'Tabogon', 'Tabuelan',
        'Tuburan', 'Tudela', 'Compostela', 'Laak', 'Mabini',
        'Maco', 'Maragusan', 'Mawab', 'Monkayo', 'Montevista', 'Nabunturan',
        'New Bataan', 'Pantukan', 'Kidapawan City', 'Alamada', 'Aleosan',
        'Antipas', 'Arakan', 'Banisilan', 'Carmen', 'Kabacan', 'Libungan',
        'M\\'lang', 'Magpet', 'Makilala', 'Matalam', 'Midsayap', 'Pigkawayan',
        'Pikit', 'President Roxas', 'Tulunan', 'Panabo City', 'Samal City',
        'Tagum City', 'Asuncion', 'Braulio E. Dujali', 'Carmen', 'Kapalong',
        'New Corella', 'San Isidro', 'Santo Tomas', 'Talaingod',
        'Davao City', 'Digos City', 'Bansalan', 'Don Marcelino', 'Hagonoy',
        'Jose Abad Santos', 'Kiblawan', 'Magsaysay', 'Malalag', 'Malita',
        'Matanao', 'Padada', 'Santa Cruz', 'Santa Maria', 'Sarangani',
        'Sulop', 'Mati City', 'Baganga', 'Banaybanay', 'Boston', 'Caraga',
        'Cateel', 'Governor Generoso', 'Lupon', 'Manay', 'San Isidro',
        'Tarragona', 'Basilisa', 'Cagdianao', 'Dinagat', 'Libjo', 'Loreto',
        'San Jose', 'Tubajon', 'Borongan City', 'Arteche', 'Balangiga',
        'Balangkayan', 'Can-avid', 'Dolores', 'General MacArthur',
        'Giporlos', 'Guiuan', 'Hernani', 'Jipapad', 'Lawaan', 'Llorente',
        'Maslog', 'Maydolong', 'Mercedes', 'Oras', 'Quinapondan', 'Salcedo',
        'San Julian', 'San Policarpo', 'Sulat', 'Taft', 'Buenavista',
        'Jordan', 'Nueva Valencia', 'San Lorenzo', 'Sibunag', 'Aguinaldo',
        'Alfonso Lista', 'Asipulo', 'Banaue', 'Hingyon', 'Hungduan',
        'Kiangan', 'Lagawe', 'Lamut', 'Mayoyao', 'Tinoc', 'Batac City',
        'Laoag City', 'Adams', 'Bacarra', 'Badoc', 'Bangui', 'Banna',
        'Burgos', 'Carasi', 'Currimao', 'Dingras', 'Dumalneg', 'Marcos',
        'Nueva Era', 'Pagudpud', 'Paoay', 'Pasuquin', 'Piddig', 'Pinili',
        'San Nicolas', 'Sarrat', 'Solsona', 'Vintar', 'Candon City',
        'Vigan City', 'Alilem', 'Banayoyo', 'Bantay', 'Burgos', 'Cabugao',
        'Caoayan', 'Cervantes', 'Galimuyod', 'Gregorio Del Pilar',
        'Lidlidda', 'Magsingal', 'Nagbukel', 'Narvacan', 'Quirino',
        'Salcedo', 'San Emilio', 'San Esteban', 'San Ildefonso', 'San Juan',
        'San Vicente', 'Santa', 'Santa Catalina', 'Santa Cruz',
        'Santa Lucia', 'Santa Maria', 'Santiago', 'Santo Domingo', 'Sigay',
        'Sinait', 'Sugpon', 'Suyo', 'Tagudin', 'Iloilo City', 'Passi City',
        'Ajuy', 'Alimodian', 'Anilao', 'Badiangan', 'Balasan', 'Banate',
        'Barotac Nuevo', 'Barotac Viejo', 'Batad', 'Bingawan', 'Cabatuan',
        'Calinog', 'Carles', 'Concepcion', 'Dingle', 'Dueñas', 'Dumangas',
        'Estancia', 'Guimbal', 'Igbaras', 'Janiuay', 'Lambunao', 'Leganes',
        'Lemery', 'Leon', 'Maasin', 'Miagao', 'Mina', 'New Lucena', 'Oton',
        'Pavia', 'Pototan', 'San Dionisio', 'San Enrique', 'San Joaquin',
        'San Miguel', 'San Rafael', 'Santa Barbara', 'Sara', 'Tigbauan',
        'Tubungan', 'Zarraga', 'Cauayan City', 'Ilagan City',
        'Santiago City', 'Alicia', 'Angadanan', 'Aurora', 'Benito Soliven',
        'Burgos', 'Cabagan', 'Cabatuan', 'Cordon', 'Delfin Albano',
        'Dinapigue', 'Divilacan', 'Echague', 'Gamu', 'Jones', 'Luna',
        'Maconacon', 'Mallig', 'Naguilian', 'Palanan', 'Quezon', 'Quirino',
        'Ramon', 'Reina Mercedes', 'Roxas', 'San Agustin', 'San Guillermo',
        'San Isidro', 'San Manuel', 'San Mariano', 'San Mateo', 'San Pablo',
        'Santa Maria', 'Santo Tomas', 'Tumauini', 'Tabuk City', 'Balbalan',
        'Lubuagan', 'Pasil', 'Pinukpuk', 'Rizal', 'Tanudan', 'Tinglayan',
        'San Fernando City', 'Agoo', 'Aringay', 'Bacnotan', 'Bagulin',
        'Balaoan', 'Bangar', 'Bauang', 'Burgos', 'Caba', 'Luna', 'Naguilian',
        'Pugo', 'Rosario', 'San Gabriel', 'San Juan', 'Santo Tomas',
        'Santol', 'Sudipen', 'Tubao', 'Biñan City', 'Cabuyao City',
        'Calamba City', 'San Pablo City', 'Santa Rosa City',
        'Nature and Science City of Los Baños', 'San Pedro', 'Alaminos',
        'Bay', 'Calauan', 'Cavinti', 'Famy', 'Kalayaan', 'Liliw', 'Luisiana',
        'Lumban', 'Mabitac', 'Magdalena', 'Majayjay', 'Nagcarlan', 'Paete',
        'Pagsanjan', 'Pakil', 'Pangil', 'Pila', 'Rizal', 'Santa Cruz',
        'Santa Maria', 'Siniloan', 'Victoria', 'Iligan City', 'Bacolod',
        'Baloi', 'Baroy', 'Kapatagan', 'Kauswagan', 'Kolambugan', 'Lala',
        'Linamon', 'Magsaysay', 'Maigo', 'Matungao', 'Munai', 'Nunungan',
        'Pantao Ragat', 'Pantar', 'Poona Piagapo', 'Salvador', 'Sapad',
        'Sultan Naga Dimaporo', 'Tagoloan', 'Tangcal', 'Tubod',
        'Marawi City', 'Bacolod-Kalawi', 'Balabagan', 'Balindong', 'Bayang',
        'Binidayan', 'Buadiposo-Buntong', 'Bubong', 'Bumbaran', 'Butig',
        'Calanogas', 'Ditsaan-Ramain', 'Ganassi', 'Kapai', 'Kapatagan',
        'Lumba-Bayabao', 'Lumbaca-Unayan', 'Lumbatan', 'Lumbayanague',
        'Madalum', 'Madamba', 'Maguing', 'Malabang', 'Marantao', 'Marogong',
        'Masiu', 'Mulondo', 'Pagayawan', 'Piagapo', 'Poona Bayabao',
        'Pualas', 'Saguiaran', 'Sultan Dumalondong', 'Picong', 'Tagoloan II',
        'Tamparan', 'Taraka', 'Tubaran', 'Tugaya', 'Wao', 'Baybay City',
        'Ormoc City', 'Tacloban City', 'Abuyog', 'Alangalang', 'Albuera',
        'Babatngon', 'Barugo', 'Bato', 'Burauen', 'Calubian', 'Capoocan',
        'Carigara', 'Dagami', 'Dulag', 'Hilongos', 'Hindang', 'Inopacan',
        'Isabel', 'Jaro', 'Javier', 'Julita', 'Kananga', 'La Paz', 'Leyte',
        'MacArthur', 'Mahaplag', 'Matag-ob', 'Matalom', 'Mayorga', 'Merida',
        'Palo', 'Palompon', 'Pastrana', 'San Isidro', 'San Miguel',
        'Santa Fe', 'Tabango', 'Tabontabon', 'Tanauan', 'Tolosa', 'Tunga',
        'Villaba', 'Cotabato City', 'Ampatuan', 'Barira', 'Buldon', 'Buluan',
        'Datu Abdullah Sangki', 'Datu Anggal Midtimbang',
        'Datu Blah T. Sinsuat', 'Datu Hoffer Ampatuan', 'Datu Montawal',
        'Datu Odin Sinsuat', 'Datu Paglas', 'Datu Piang', 'Datu Salibo',
        'Datu Saudi-Ampatuan', 'Datu Unsay', 'General Salipada K. Pendatun',
        'Guindulungan', 'Kabuntalan', 'Mamasapano', 'Mangudadatu', 'Matanog',
        'Northern Kabuntalan', 'Pagalungan', 'Paglat', 'Pandag', 'Parang',
        'Rajah Buayan', 'Shariff Aguak', 'Shariff Saydona Mustapha',
        'South Upi', 'Sultan Kudarat', 'Sultan Mastura',
        'Sultan sa Barongis', 'Talayan', 'Talitay', 'Upi', 'Boac',
        'Buenavista', 'Gasan', 'Mogpog', 'Santa Cruz', 'Torrijos',
        'Masbate City', 'Aroroy', 'Baleno', 'Balud', 'Batuan', 'Cataingan',
        'Cawayan', 'Claveria', 'Dimasalang', 'Esperanza', 'Mandaon',
        'Milagros', 'Mobo', 'Monreal', 'Palanas', 'Pio V. Corpuz', 'Placer',
        'San Fernando', 'San Jacinto', 'San Pascual', 'Uson', 'Manila',
        'Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong',
        'Marikina', 'Muntinlupa', 'Navotas', 'Parañaque', 'Pasay', 'Pasig',
        'Quezon City', 'San Juan', 'Taguig', 'Valenzuela', 'Pateros',
        'Oroquieta City', 'Ozamiz City', 'Tangub City', 'Aloran',
        'Baliangao', 'Bonifacio', 'Calamba', 'Clarin', 'Concepcion',
        'Don Victoriano Chiongbian', 'Jimenez', 'Lopez Jaena', 'Panaon',
        'Plaridel', 'Sapang Dalaga', 'Sinacaban', 'Tudela', 'Cagayan de Oro',
        'El Salvador City', 'Gingoog City', 'Alubijid', 'Balingasag',
        'Balingoan', 'Binuangan', 'Claveria', 'Gitagum', 'Initao', 'Jasaan',
        'Kinoguitan', 'Lagonglong', 'Laguindingan', 'Libertad', 'Lugait',
        'Magsaysay', 'Manticao', 'Medina', 'Naawan', 'Opol', 'Salay',
        'Sugbongcogon', 'Tagoloan', 'Talisayan', 'Villanueva', 'Barlig',
        'Bauko', 'Besao', 'Bontoc', 'Natonin', 'Paracelis', 'Sabangan',
        'Sadanga', 'Sagada', 'Tadian', 'Bacolod City', 'Bago City',
        'Cadiz City', 'Escalante City', 'Himamaylan City', 'Kabankalan City',
        'La Carlota City', 'Sagay City', 'San Carlos City', 'Silay City',
        'Sipalay City', 'Talisay City', 'Victorias City', 'Binalbagan',
        'Calatrava', 'Candoni', 'Cauayan', 'Enrique B. Magalona',
        'Hinigaran', 'Hinoba-an', 'Ilog', 'Isabela', 'La Castellana',
        'Manapla', 'Moises Padilla', 'Murcia', 'Pontevedra', 'Pulupandan',
        'Salvador Benedicto', 'San Enrique', 'Toboso', 'Valladolid',
        'Bais City', 'Bayawan City', 'Canlaon City', 'Guihulngan City',
        'Dumaguete City', 'Tanjay City', 'Amlan', 'Ayungon', 'Bacong',
        'Basay', 'Bindoy', 'Dauin', 'Jimalalud', 'La Libertad', 'Mabinay',
        'Manjuyod', 'Pamplona', 'San Jose', 'Santa Catalina', 'Siaton',
        'Sibulan', 'Tayasan', 'Valencia', 'Vallehermoso', 'Zamboanguita',
        'Allen', 'Biri', 'Bobon', 'Capul', 'Catarman', 'Catubig', 'Gamay',
        'Laoang', 'Lapinig', 'Las Navas', 'Lavezares', 'Lope de Vega',
        'Mapanas', 'Mondragon', 'Palapag', 'Pambujan', 'Rosario',
        'San Antonio', 'San Isidro', 'San Jose', 'San Roque', 'San Vicente',
        'Silvino Lobos', 'Victoria', 'Cabanatuan City', 'Gapan City',
        'Palayan City', 'San Jose City', 'Science City of Muñoz', 'Aliaga',
        'Bongabon', 'Cabiao', 'Carranglan', 'Cuyapo', 'Gabaldon',
        'General Mamerto Natividad', 'General Tinio', 'Guimba', 'Jaen',
        'Laur', 'Licab', 'Llanera', 'Lupao', 'Nampicuan', 'Pantabangan',
        'Peñaranda', 'Quezon', 'Rizal', 'San Antonio', 'San Isidro',
        'San Leonardo', 'Santa Rosa', 'Santo Domingo', 'Talavera',
        'Talugtug', 'Zaragoza', 'Alfonso Castaneda', 'Ambaguio', 'Aritao',
        'Bagabag', 'Bambang', 'Bayombong', 'Diadi', 'Dupax del Norte',
        'Dupax del Sur', 'Kasibu', 'Kayapa', 'Quezon', 'Santa Fe', 'Solano',
        'Villaverde', 'Abra de Ilog', 'Calintaan', 'Looc', 'Lubang',
        'Magsaysay', 'Mamburao', 'Paluan', 'Rizal', 'Sablayan', 'San Jose',
        'Santa Cruz', 'Calapan City', 'Baco', 'Bansud', 'Bongabong',
        'Bulalacao', 'Gloria', 'Mansalay', 'Naujan', 'Pinamalayan', 'Pola',
        'Puerto Galera', 'Roxas', 'San Teodoro', 'Socorro', 'Victoria',
        'Puerto Princesa City', 'Aborlan', 'Agutaya', 'Araceli', 'Balabac',
        'Bataraza', 'Brooke\\'s Point', 'Busuanga', 'Cagayancillo', 'Coron',
        'Culion', 'Cuyo', 'Dumaran', 'El Nido', 'Kalayaan', 'Linapacan',
        'Magsaysay', 'Narra', 'Quezon', 'Rizal', 'Roxas', 'San Vicente',
        'Sofronio Española', 'Taytay', 'Angeles City', 'San Fernando City',
        'Mabalacat City', 'Apalit', 'Arayat', 'Bacolor', 'Candaba',
        'Floridablanca', 'Guagua', 'Lubao', 'Macabebe', 'Magalang',
        'Masantol', 'Mexico', 'Minalin', 'Porac', 'San Luis', 'San Simon',
        'Santa Ana', 'Santa Rita', 'Santo Tomas', 'Sasmuan', 'Alaminos City',
        'Dagupan City', 'San Carlos City', 'Urdaneta City', 'Agno',
        'Aguilar', 'Alcala', 'Anda', 'Asingan', 'Balungao', 'Bani',
        'Basista', 'Bautista', 'Bayambang', 'Binalonan', 'Binmaley',
        'Bolinao', 'Bugallon', 'Burgos', 'Calasiao', 'Dasol', 'Infanta',
        'Labrador', 'Laoac', 'Lingayen', 'Mabini', 'Malasiqui', 'Manaoag',
        'Mangaldan', 'Mangatarem', 'Mapandan', 'Natividad', 'Pozzorubio',
        'Rosales', 'San Fabian', 'San Jacinto', 'San Manuel', 'San Nicolas',
        'San Quintin', 'Santa Barbara', 'Santa Maria', 'Santo Tomas',
        'Sison', 'Sual', 'Tayug', 'Umingan', 'Urbiztondo', 'Villasis',
        'Lucena City', 'Tayabas City', 'Agdangan', 'Alabat', 'Atimonan',
        'Buenavista', 'Burdeos', 'Calauag', 'Candelaria', 'Catanauan',
        'Dolores', 'General Luna', 'General Nakar', 'Guinayangan', 'Gumaca',
        'Infanta', 'Jomalig', 'Lopez', 'Lucban', 'Macalelon', 'Mauban',
        'Mulanay', 'Padre Burgos', 'Pagbilao', 'Panukulan', 'Patnanungan',
        'Perez', 'Pitogo', 'Plaridel', 'Polillo', 'Quezon', 'Real',
        'Sampaloc', 'San Andres', 'San Antonio', 'San Francisco',
        'San Narciso', 'Sariaya', 'Tagkawayan', 'Tiaong', 'Unisan',
        'Aglipay', 'Cabarroguis', 'Diffun', 'Maddela', 'Nagtipunan',
        'Saguday', 'Antipolo City', 'Angono', 'Baras', 'Binangonan',
        'Cainta', 'Cardona', 'Jalajala', 'Morong', 'Pililla', 'Rodriguez',
        'San Mateo', 'Tanay', 'Taytay', 'Teresa', 'Alcantara', 'Banton',
        'Cajidiocan', 'Calatrava', 'Concepcion', 'Corcuera', 'Ferrol',
        'Looc', 'Magdiwang', 'Odiongan', 'Romblon', 'San Agustin',
        'San Andres', 'San Fernando', 'San Jose', 'Santa Fe', 'Santa Maria',
        'Calbayog City', 'Catbalogan City', 'Almagro', 'Basey', 'Calbiga',
        'Daram', 'Gandara', 'Hinabangan', 'Jiabong', 'Marabut', 'Matuguinao',
        'Motiong', 'Pagsanghan', 'Paranas', 'Pinabacdao', 'San Jorge',
        'San Jose De Buan', 'San Sebastian', 'Santa Margarita', 'Santa Rita',
        'Santo Niño', 'Tagapul-an', 'Talalora', 'Tarangnan', 'Villareal',
        'Zumarraga', 'Alabel', 'Glan', 'Kiamba', 'Maasim', 'Maitum',
        'Malapatan', 'Malungon', 'Enrique Villanueva', 'Larena', 'Lazi',
        'Maria', 'San Juan', 'Siquijor', 'Sorsogon City', 'Barcelona',
        'Bulan', 'Bulusan', 'Casiguran', 'Castilla', 'Donsol', 'Gubat',
        'Irosin', 'Juban', 'Magallanes', 'Matnog', 'Pilar', 'Prieto Diaz',
        'Santa Magdalena', 'General Santos City', 'Koronadal City',
        'Polomolok', 'Banga', 'Lake Sebu', 'Norala', 'Santo Niño',
        'Surallah', 'T\\'boli', 'Tampakan', 'Tantangan', 'Tupi',
        'Maasin City', 'Anahawan', 'Bontoc', 'Hinunangan', 'Hinundayan',
        'Libagon', 'Liloan', 'Limasawa', 'Macrohon', 'Malitbog',
        'Padre Burgos', 'Pintuyan', 'Saint Bernard', 'San Francisco',
        'San Juan', 'San Ricardo', 'Silago', 'Sogod', 'Tomas Oppus',
        'Tacurong City', 'Bagumbayan', 'Columbio', 'Esperanza', 'Isulan',
        'Kalamansig', 'Lambayong', 'Lebak', 'Lutayan', 'Palimbang',
        'President Quirino', 'Senator Ninoy Aquino', 'Banguingui',
        'Hadji Panglima Tahil', 'Indanan', 'Jolo', 'Kalingalan Caluang',
        'Lugus', 'Luuk', 'Maimbung', 'Old Panamao', 'Omar', 'Pandami',
        'Panglima Estino', 'Pangutaran', 'Parang', 'Pata', 'Patikul',
        'Siasi', 'Talipao', 'Tapul', 'Surigao City', 'Alegria', 'Bacuag',
        'Burgos', 'Claver', 'Dapa', 'Del Carmen', 'General Luna',
        'Gigaquit', 'Mainit', 'Malimono', 'Pilar', 'Placer', 'San Benito',
        'San Francisco', 'San Isidro', 'Santa Monica', 'Sison', 'Socorro',
        'Tagana-an', 'Tubod', 'Bislig City', 'Tandag City', 'Barobo',
        'Bayabas', 'Cagwait', 'Cantilan', 'Carmen', 'Carrascal', 'Cortes',
        'Hinatuan', 'Lanuza', 'Lianga', 'Lingig', 'Madrid', 'Marihatag',
        'San Agustin', 'San Miguel', 'Tagbina', 'Tago', 'Tarlac City',
        'Anao', 'Bamban', 'Camiling', 'Capas', 'Concepcion', 'Gerona',
        'La Paz', 'Mayantoc', 'Moncada', 'Paniqui', 'Pura', 'Ramos',
        'San Clemente', 'San Jose', 'San Manuel', 'Santa Ignacia',
        'Victoria', 'Bongao', 'Languyan', 'Mapun', 'Panglima Sugala',
        'Sapa-Sapa', 'Sibutu', 'Simunul', 'Sitangkai', 'South Ubian',
        'Tandubas', 'Turtle Islands', 'Olongapo City', 'Botolan', 'Cabangan',
        'Candelaria', 'Castillejos', 'Iba', 'Masinloc', 'Palauig',
        'San Antonio', 'San Felipe', 'San Marcelino', 'San Narciso',
        'Santa Cruz', 'Subic', 'Dapitan City', 'Dipolog City', 'Bacungan',
        'Baliguian', 'Godod', 'Gutalac', 'Jose Dalman', 'Kalawit',
        'Katipunan', 'La Libertad', 'Labason', 'Liloy', 'Manukan', 'Mutia',
        'Piñan', 'Polanco', 'President Manuel A. Roxas', 'Rizal', 'Salug',
        'Sergio Osmeña Sr.', 'Siayan', 'Sibuco', 'Sibutad', 'Sindangan',
        'Siocon', 'Sirawai', 'Tampilisan', 'Pagadian City', 'Zamboanga City',
        'Aurora', 'Bayog', 'Dimataling', 'Dinas', 'Dumalinao', 'Dumingag',
        'Guipos', 'Josefina', 'Kumalarang', 'Labangan', 'Lakewood',
        'Lapuyan', 'Mahayag', 'Margosatubig', 'Midsalip', 'Molave', 'Pitogo',
        'Ramon Magsaysay', 'San Miguel', 'San Pablo', 'Sominot', 'Tabina',
        'Tambulig', 'Tigbao', 'Tukuran', 'Vincenzo A. Sagun', 'Alicia',
        'Buug', 'Diplahan', 'Imelda', 'Ipil', 'Kabasalan', 'Mabuhay',
        'Malangas', 'Naga', 'Olutanga', 'Payao', 'Roseller Lim', 'Siay',
        'Talusan', 'Titay', 'Tungawan'
    );

    protected static \$barangay = array(
        'Poblacion'
    );

    public function province()
    {
        return static::randomElement(static::\$province);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public function municipality()
    {
        return static::randomElement(static::\$municipality);
    }

    public function barangay()
    {
        return static::randomElement(static::\$barangay);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_PH;

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}'
    );

    //http://en.wikipedia.org/wiki/Postal_addresses_in_the_Philippines
    protected static \$addressFormats = array(
        '{{streetAddress}}, {{barangay}}, {{city}} {{postcode}} {{province}}', '{{streetAddress}}, {{municipality}} {{postcode}} {{province}}'
    );

    protected static \$buildingNumber = array('##A', '##', '##A/##', '##/##');
    protected static \$postcode = array('####');

    //http://en.wikipedia.org/wiki/Provinces_of_the_Philippines
    protected static \$province = array(
        'Abra', 'Agusan del Norte', 'Agusan del Sur', 'Aklan', 'Albay',
        'Antique', 'Apayao', 'Aurora', 'Basilan', 'Bataan', 'Batanes',
        'Batangas', 'Benguet', 'Biliran', 'Bohol', 'Bukidnon', 'Bulacan',
        'Cagayan', 'Camarines Norte', 'Camarines Sur', 'Camiguin', 'Capiz',
        'Catanduanes', 'Cavite', 'Cebu', 'Compostela Valley', 'Cotabato',
        'Davao del Norte', 'Davao del Sur', 'Davao Oriental',
        'Dinagat Islands', 'Eastern Samar', 'Guimaras', 'Ifugao',
        'Ilocos Norte', 'Ilocos Sur', 'Iloilo', 'Isabela', 'Kalinga',
        'La Union', 'Laguna', 'Lanao del Norte', 'Lanao del Sur',
        'Leyte', 'Maguindanao', 'Marinduque', 'Masbate',
        'Misamis Occidental', 'Misamis Oriental',
        'Mountain Province', 'Negros Occidental', 'Negros Oriental',
        'Northern Samar', 'Nueva Ecija', 'Nueva Vizcaya',
        'Occidental Mindoro', 'Oriental Mindoro', 'Palawan',
        'Pampanga', 'Pangasinan', 'Quezon', 'Quirino', 'Rizal',
        'Romblon', 'Samar', 'Sarangani', 'Siquijor', 'Sorsogon',
        'South Cotabato', 'Southern Leyte', 'Sultan Kudarat', 'Sulu',
        'Surigao del Norte', 'Surigao del Sur', 'Tarlac',
        'Tawi-Tawi', 'Zambales', 'Zamboanga del Norte',
        'Zamboanga del Sur', 'Zamboanga Sibugay', 'Metro Manila'
    );

    //http://en.wikipedia.org/wiki/List_of_cities_in_the_Philippines
    protected static \$city = array(
        'Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong',
        'Manila', 'Marikina', 'Muntinlupa', 'Navotas', 'Parañaque', 'Pasay',
        'Pasig', 'Quezon City', 'San Juan', 'Taguig', 'Valenzuela',
        'Butuan', 'Cabadbaran', 'Bayugan', 'Legazpi', 'Ligao', 'Tabaco',
        'Isabela', 'Lamitan', 'Balanga', 'Batangas City', 'Lipa', 'Tanauan',
        'Baguio', 'Tagbilaran', 'Malaybalay', 'Valencia', 'Malolos',
        'Meycauayan', 'San Jose del Monte', 'Tuguegarao', 'Iriga', 'Naga',
        'Roxas', 'Bacoor', 'Cavite City', 'Dasmariñas', 'Imus', 'Tagaytay',
        'Trece Martires', 'Bogo', 'Carcar', 'Cebu City', 'Danao', 'Lapu-Lapu',
        'Mandaue', 'Naga', 'Talisay', 'Toledo', 'Kidapawan', 'Panabo', 'Samal',
        'Tagum', 'Davao City', 'Digos', 'Mati', 'Borongan', 'Batac', 'Laoag',
        'Candon', 'Vigan', 'Iloilo City', 'Passi', 'Cauayan', 'Ilagan',
        'Santiago', 'Tabuk', 'San Fernando', 'Biñan', 'Cabuyao', 'Calamba',
        'San Pablo', 'Santa Rosa', 'San Pedro', 'Iligan', 'Marawi', 'Baybay',
        'Ormoc', 'Tacloban', 'Cotabato City', 'Masbate City', 'Oroquieta',
        'Ozamiz', 'Tangub', 'Cagayan de Oro', 'El Salvador', 'Gingoog',
        'Bacolod', 'Bago', 'Cadiz', 'Escalante', 'Himamaylan', 'Kabankalan',
        'La Carlota', 'Sagay', 'San Carlos', 'Silay', 'Sipalay', 'Talisay',
        'Victorias', 'Bais', 'Bayawan', 'Canlaon', 'Dumaguete', 'Guihulngan',
        'Tanjay', 'Cabanatuan', 'Gapan', 'Muñoz', 'Palayan', 'San Jose',
        'Calapan', 'Puerto Princesa', 'Angeles', 'Mabalacat',
        'San Fernando', 'Alaminos', 'Dagupan', 'San Carlos',
        'Urdaneta', 'Lucena', 'Tayabas', 'Antipolo','Calbayog', 'Catbalogan',
        'Sorsogon City', 'General Santos', 'Koronadal', 'Maasin', 'Tacurong',
        'Surigao City', 'Bislig', 'Tandag', 'Tarlac City','Olongapo',
        'Dapitan', 'Dipolog', 'Pagadian', 'Zamboanga City'
    );

    //http://en.wikipedia.org/wiki/List_of_Philippine_cities_and_municipalities_by_population
    protected static \$municipality = array(
        'Bangued', 'Boliney', 'Bucay', 'Bucloc', 'Daguioman', 'Danglas',
        'Dolores', 'La Paz', 'Lacub', 'Lagangilang', 'Lagayan', 'Langiden',
        'Licuan-Baay', 'Luba', 'Malibcong', 'Manabo', 'Peñarrubia',
        'Pidigan', 'Pilar', 'Sallapadan', 'San Isidro', 'San Juan',
        'San Quintin', 'Tayum', 'Tineg', 'Tubo', 'Villaviciosa',
        'Butuan City', 'Cabadbaran City', 'Buenavista', 'Carmen',
        'Jabonga', 'Kitcharao', 'Las Nieves', 'Magallanes',
        'Nasipit', 'Remedios T. Romualdez', 'Santiago', 'Tubay',
        'Bayugan City', 'Bunawan', 'Esperanza', 'La Paz', 'Loreto',
        'Prosperidad', 'Rosario', 'San Francisco', 'San Luis',
        'Santa Josefa', 'Sibagat', 'Talacogon', 'Trento', 'Veruela',
        'Altavas', 'Balete', 'Banga', 'Batan', 'Buruanga', 'Ibajay',
        'Kalibo', 'Lezo', 'Libacao', 'Madalag', 'Makato', 'Malay',
        'Malinao', 'Nabas', 'New Washington', 'Numancia', 'Tangalan',
        'Legazpi City', 'Ligao City', 'Tabaco City', 'Bacacay', 'Camalig',
        'Daraga', 'Guinobatan', 'Jovellar', 'Libon', 'Malilipot', 'Malinao',
        'Manito', 'Oas', 'Pio Duran', 'Polangui', 'Rapu-Rapu',
        'Santo Domingo', 'Anini-y', 'Barbaza', 'Belison', 'Bugasong',
        'Caluya', 'Culasi', 'Hamtic', 'Laua-an', 'Libertad', 'Pandan',
        'Patnongon', 'San Jose', 'San Remigio', 'Sebaste', 'Sibalom',
        'Tibiao', 'Tobias Fornier', 'Valderrama', 'Calanasan', 'Conner',
        'Flora', 'Kabugao', 'Luna', 'Pudtol', 'Santa Marcela', 'Baler',
        'Casiguran', 'Dilasag', 'Dinalungan', 'Dingalan', 'Dipaculao',
        'Maria Aurora', 'San Luis', 'Isabela City', 'Lamitan City', 'Akbar',
        'Al-Barka', 'Hadji Mohammad Ajul', 'Hadji Muhtamad', 'Lantawan',
        'Maluso', 'Sumisip', 'Tabuan-Lasa', 'Tipo-Tipo', 'Tuburan',
        'Ungkaya Pukan', 'Balanga City', 'Abucay', 'Bagac', 'Dinalupihan',
        'Hermosa', 'Limay', 'Mariveles', 'Morong', 'Orani', 'Orion', 'Pilar',
        'Samal', 'Basco', 'Itbayat', 'Ivana', 'Mahatao', 'Sabtang', 'Uyugan',
        'Batangas City', 'Lipa City', 'Tanauan City', 'Agoncillo',
        'Alitagtag', 'Balayan', 'Balete', 'Bauan', 'Calaca', 'Calatagan',
        'Cuenca', 'Ibaan', 'Laurel', 'Lemery', 'Lian', 'Lobo', 'Mabini',
        'Malvar', 'Mataas na Kahoy', 'Nasugbu', 'Padre Garcia', 'Rosario',
        'San Jose', 'San Juan', 'San Luis', 'San Nicolas', 'San Pascual',
        'Santa Teresita', 'Santo Tomas', 'Taal', 'Talisay', 'Taysan',
        'Tingloy', 'Tuy', 'Baguio City', 'Atok', 'Bakun', 'Bokod', 'Buguias',
        'Itogon', 'Kabayan', 'Kapangan', 'Kibungan', 'La Trinidad',
        'Mankayan', 'Sablan', 'Tuba', 'Tublay', 'Almeria', 'Biliran',
        'Cabucgayan', 'Caibiran', 'Culaba', 'Kawayan', 'Maripipi', 'Naval',
        'Tagbilaran City', 'Alburquerque', 'Alicia', 'Anda', 'Antequera',
        'Baclayon', 'Balilihan', 'Batuan', 'Bien Unido', 'Bilar',
        'Buenavista', 'Calape', 'Candijay', 'Carmen', 'Catigbian', 'Clarin',
        'Corella', 'Cortes', 'Dagohoy', 'Danao', 'Dauis', 'Dimiao', 'Duero',
        'Garcia Hernandez', 'Getafe', 'Guindulman', 'Inabanga', 'Jagna',
        'Lila', 'Loay', 'Loboc', 'Loon', 'Mabini', 'Maribojoc', 'Panglao',
        'Pilar', 'President Carlos P. Garcia', 'Sagbayan', 'San Isidro',
        'San Miguel', 'Sevilla', 'Sierra Bullones', 'Sikatuna', 'Talibon',
        'Trinidad', 'Tubigon', 'Ubay', 'Valencia', 'Malaybalay City',
        'Valencia City', 'Baungon', 'Cabanglasan', 'Damulog', 'Dangcagan',
        'Don Carlos', 'Impasug-ong', 'Kadingilan', 'Kalilangan', 'Kibawe',
        'Kitaotao', 'Lantapan', 'Libona', 'Malitbog', 'Manolo Fortich',
        'Maramag', 'Pangantucan', 'Quezon', 'San Fernando', 'Sumilao',
        'Talakag', 'Malolos City', 'Meycauayan City',
        'San Jose del Monte City', 'Angat', 'Balagtas', 'Baliuag', 'Bocaue',
        'Bulacan', 'Bustos', 'Calumpit', 'Doña Remedios Trinidad',
        'Guiguinto', 'Hagonoy', 'Marilao', 'Norzagaray', 'Obando', 'Pandi',
        'Paombong', 'Plaridel', 'Pulilan', 'San Ildefonso', 'San Miguel',
        'San Rafael', 'Santa Maria', 'Tuguegarao City', 'Abulug', 'Alcala',
        'Allacapan', 'Amulung', 'Aparri', 'Baggao', 'Ballesteros', 'Buguey',
        'Calayan', 'Camalaniugan', 'Claveria', 'Enrile', 'Gattaran',
        'Gonzaga', 'Iguig', 'Lal-lo', 'Lasam', 'Pamplona', 'Peñablanca',
        'Piat', 'Rizal', 'Sanchez-Mira', 'Santa Ana', 'Santa Praxedes',
        'Santa Teresita', 'Santo Niño', 'Solana', 'Tuao', 'Basud',
        'Capalonga', 'Daet', 'Jose Panganiban', 'Labo', 'Mercedes',
        'Paracale', 'San Lorenzo Ruiz', 'San Vicente', 'Santa Elena',
        'Talisay', 'Vinzons', 'Iriga City', 'Naga City', 'Baao', 'Balatan',
        'Bato', 'Bombon', 'Buhi', 'Bula', 'Cabusao', 'Calabanga',
        'Camaligan', 'Canaman', 'Caramoan', 'Del Gallego', 'Gainza',
        'Garchitorena', 'Goa', 'Lagonoy', 'Libmanan', 'Lupi', 'Magarao',
        'Milaor', 'Minalabac', 'Nabua', 'Ocampo', 'Pamplona', 'Pasacao',
        'Pili', 'Presentacion', 'Ragay', 'Sagñay', 'San Fernando',
        'San Jose', 'Sipocot', 'Siruma', 'Tigaon', 'Tinambac', 'Catarman',
        'Guinsiliban', 'Mahinog', 'Mambajao', 'Sagay', 'Roxas City',
        'Cuartero', 'Dao', 'Dumalag', 'Dumarao', 'Ivisan', 'Jamindan',
        'Ma-ayon', 'Mambusao', 'Panay', 'Panitan', 'Pilar', 'Pontevedra',
        'President Roxas', 'Sapi-an', 'Sigma', 'Tapaz', 'Bagamanoc', 'Baras',
        'Bato', 'Caramoran', 'Gigmoto', 'Pandan', 'Panganiban', 'San Andres',
        'San Miguel', 'Viga', 'Virac', 'Bacoor City', 'Cavite City',
        'Dasmariñas City', 'Imus City', 'Tagaytay City',
        'Trece Martires City', 'Alfonso', 'Amadeo', 'Carmona',
        'General Mariano Alvarez', 'General Emilio Aguinaldo',
        'General Trias', 'Indang', 'Kawit', 'Magallanes', 'Maragondon',
        'Mendez', 'Naic', 'Noveleta', 'Rosario', 'Silang', 'Tanza',
        'Ternate', 'Bogo City', 'Cebu City', 'Carcar City', 'Danao City',
        'Lapu-Lapu City', 'Mandaue City', 'Naga City', 'Talisay City',
        'Toledo City', 'Alcantara', 'Alcoy', 'Alegria', 'Aloguinsan',
        'Argao', 'Asturias', 'Badian', 'Balamban', 'Bantayan', 'Barili',
        'Boljoon', 'Borbon', 'Carmen', 'Catmon', 'Compostela', 'Consolacion',
        'Cordoba', 'Daanbantayan', 'Dalaguete', 'Dumanjug', 'Ginatilan',
        'Liloan', 'Madridejos', 'Malabuyoc', 'Medellin', 'Minglanilla',
        'Moalboal', 'Oslob', 'Pilar', 'Pinamungahan', 'Poro', 'Ronda',
        'Samboan', 'San Fernando', 'San Francisco', 'San Remigio',
        'Santa Fe', 'Santander', 'Sibonga', 'Sogod', 'Tabogon', 'Tabuelan',
        'Tuburan', 'Tudela', 'Compostela', 'Laak', 'Mabini',
        'Maco', 'Maragusan', 'Mawab', 'Monkayo', 'Montevista', 'Nabunturan',
        'New Bataan', 'Pantukan', 'Kidapawan City', 'Alamada', 'Aleosan',
        'Antipas', 'Arakan', 'Banisilan', 'Carmen', 'Kabacan', 'Libungan',
        'M\\'lang', 'Magpet', 'Makilala', 'Matalam', 'Midsayap', 'Pigkawayan',
        'Pikit', 'President Roxas', 'Tulunan', 'Panabo City', 'Samal City',
        'Tagum City', 'Asuncion', 'Braulio E. Dujali', 'Carmen', 'Kapalong',
        'New Corella', 'San Isidro', 'Santo Tomas', 'Talaingod',
        'Davao City', 'Digos City', 'Bansalan', 'Don Marcelino', 'Hagonoy',
        'Jose Abad Santos', 'Kiblawan', 'Magsaysay', 'Malalag', 'Malita',
        'Matanao', 'Padada', 'Santa Cruz', 'Santa Maria', 'Sarangani',
        'Sulop', 'Mati City', 'Baganga', 'Banaybanay', 'Boston', 'Caraga',
        'Cateel', 'Governor Generoso', 'Lupon', 'Manay', 'San Isidro',
        'Tarragona', 'Basilisa', 'Cagdianao', 'Dinagat', 'Libjo', 'Loreto',
        'San Jose', 'Tubajon', 'Borongan City', 'Arteche', 'Balangiga',
        'Balangkayan', 'Can-avid', 'Dolores', 'General MacArthur',
        'Giporlos', 'Guiuan', 'Hernani', 'Jipapad', 'Lawaan', 'Llorente',
        'Maslog', 'Maydolong', 'Mercedes', 'Oras', 'Quinapondan', 'Salcedo',
        'San Julian', 'San Policarpo', 'Sulat', 'Taft', 'Buenavista',
        'Jordan', 'Nueva Valencia', 'San Lorenzo', 'Sibunag', 'Aguinaldo',
        'Alfonso Lista', 'Asipulo', 'Banaue', 'Hingyon', 'Hungduan',
        'Kiangan', 'Lagawe', 'Lamut', 'Mayoyao', 'Tinoc', 'Batac City',
        'Laoag City', 'Adams', 'Bacarra', 'Badoc', 'Bangui', 'Banna',
        'Burgos', 'Carasi', 'Currimao', 'Dingras', 'Dumalneg', 'Marcos',
        'Nueva Era', 'Pagudpud', 'Paoay', 'Pasuquin', 'Piddig', 'Pinili',
        'San Nicolas', 'Sarrat', 'Solsona', 'Vintar', 'Candon City',
        'Vigan City', 'Alilem', 'Banayoyo', 'Bantay', 'Burgos', 'Cabugao',
        'Caoayan', 'Cervantes', 'Galimuyod', 'Gregorio Del Pilar',
        'Lidlidda', 'Magsingal', 'Nagbukel', 'Narvacan', 'Quirino',
        'Salcedo', 'San Emilio', 'San Esteban', 'San Ildefonso', 'San Juan',
        'San Vicente', 'Santa', 'Santa Catalina', 'Santa Cruz',
        'Santa Lucia', 'Santa Maria', 'Santiago', 'Santo Domingo', 'Sigay',
        'Sinait', 'Sugpon', 'Suyo', 'Tagudin', 'Iloilo City', 'Passi City',
        'Ajuy', 'Alimodian', 'Anilao', 'Badiangan', 'Balasan', 'Banate',
        'Barotac Nuevo', 'Barotac Viejo', 'Batad', 'Bingawan', 'Cabatuan',
        'Calinog', 'Carles', 'Concepcion', 'Dingle', 'Dueñas', 'Dumangas',
        'Estancia', 'Guimbal', 'Igbaras', 'Janiuay', 'Lambunao', 'Leganes',
        'Lemery', 'Leon', 'Maasin', 'Miagao', 'Mina', 'New Lucena', 'Oton',
        'Pavia', 'Pototan', 'San Dionisio', 'San Enrique', 'San Joaquin',
        'San Miguel', 'San Rafael', 'Santa Barbara', 'Sara', 'Tigbauan',
        'Tubungan', 'Zarraga', 'Cauayan City', 'Ilagan City',
        'Santiago City', 'Alicia', 'Angadanan', 'Aurora', 'Benito Soliven',
        'Burgos', 'Cabagan', 'Cabatuan', 'Cordon', 'Delfin Albano',
        'Dinapigue', 'Divilacan', 'Echague', 'Gamu', 'Jones', 'Luna',
        'Maconacon', 'Mallig', 'Naguilian', 'Palanan', 'Quezon', 'Quirino',
        'Ramon', 'Reina Mercedes', 'Roxas', 'San Agustin', 'San Guillermo',
        'San Isidro', 'San Manuel', 'San Mariano', 'San Mateo', 'San Pablo',
        'Santa Maria', 'Santo Tomas', 'Tumauini', 'Tabuk City', 'Balbalan',
        'Lubuagan', 'Pasil', 'Pinukpuk', 'Rizal', 'Tanudan', 'Tinglayan',
        'San Fernando City', 'Agoo', 'Aringay', 'Bacnotan', 'Bagulin',
        'Balaoan', 'Bangar', 'Bauang', 'Burgos', 'Caba', 'Luna', 'Naguilian',
        'Pugo', 'Rosario', 'San Gabriel', 'San Juan', 'Santo Tomas',
        'Santol', 'Sudipen', 'Tubao', 'Biñan City', 'Cabuyao City',
        'Calamba City', 'San Pablo City', 'Santa Rosa City',
        'Nature and Science City of Los Baños', 'San Pedro', 'Alaminos',
        'Bay', 'Calauan', 'Cavinti', 'Famy', 'Kalayaan', 'Liliw', 'Luisiana',
        'Lumban', 'Mabitac', 'Magdalena', 'Majayjay', 'Nagcarlan', 'Paete',
        'Pagsanjan', 'Pakil', 'Pangil', 'Pila', 'Rizal', 'Santa Cruz',
        'Santa Maria', 'Siniloan', 'Victoria', 'Iligan City', 'Bacolod',
        'Baloi', 'Baroy', 'Kapatagan', 'Kauswagan', 'Kolambugan', 'Lala',
        'Linamon', 'Magsaysay', 'Maigo', 'Matungao', 'Munai', 'Nunungan',
        'Pantao Ragat', 'Pantar', 'Poona Piagapo', 'Salvador', 'Sapad',
        'Sultan Naga Dimaporo', 'Tagoloan', 'Tangcal', 'Tubod',
        'Marawi City', 'Bacolod-Kalawi', 'Balabagan', 'Balindong', 'Bayang',
        'Binidayan', 'Buadiposo-Buntong', 'Bubong', 'Bumbaran', 'Butig',
        'Calanogas', 'Ditsaan-Ramain', 'Ganassi', 'Kapai', 'Kapatagan',
        'Lumba-Bayabao', 'Lumbaca-Unayan', 'Lumbatan', 'Lumbayanague',
        'Madalum', 'Madamba', 'Maguing', 'Malabang', 'Marantao', 'Marogong',
        'Masiu', 'Mulondo', 'Pagayawan', 'Piagapo', 'Poona Bayabao',
        'Pualas', 'Saguiaran', 'Sultan Dumalondong', 'Picong', 'Tagoloan II',
        'Tamparan', 'Taraka', 'Tubaran', 'Tugaya', 'Wao', 'Baybay City',
        'Ormoc City', 'Tacloban City', 'Abuyog', 'Alangalang', 'Albuera',
        'Babatngon', 'Barugo', 'Bato', 'Burauen', 'Calubian', 'Capoocan',
        'Carigara', 'Dagami', 'Dulag', 'Hilongos', 'Hindang', 'Inopacan',
        'Isabel', 'Jaro', 'Javier', 'Julita', 'Kananga', 'La Paz', 'Leyte',
        'MacArthur', 'Mahaplag', 'Matag-ob', 'Matalom', 'Mayorga', 'Merida',
        'Palo', 'Palompon', 'Pastrana', 'San Isidro', 'San Miguel',
        'Santa Fe', 'Tabango', 'Tabontabon', 'Tanauan', 'Tolosa', 'Tunga',
        'Villaba', 'Cotabato City', 'Ampatuan', 'Barira', 'Buldon', 'Buluan',
        'Datu Abdullah Sangki', 'Datu Anggal Midtimbang',
        'Datu Blah T. Sinsuat', 'Datu Hoffer Ampatuan', 'Datu Montawal',
        'Datu Odin Sinsuat', 'Datu Paglas', 'Datu Piang', 'Datu Salibo',
        'Datu Saudi-Ampatuan', 'Datu Unsay', 'General Salipada K. Pendatun',
        'Guindulungan', 'Kabuntalan', 'Mamasapano', 'Mangudadatu', 'Matanog',
        'Northern Kabuntalan', 'Pagalungan', 'Paglat', 'Pandag', 'Parang',
        'Rajah Buayan', 'Shariff Aguak', 'Shariff Saydona Mustapha',
        'South Upi', 'Sultan Kudarat', 'Sultan Mastura',
        'Sultan sa Barongis', 'Talayan', 'Talitay', 'Upi', 'Boac',
        'Buenavista', 'Gasan', 'Mogpog', 'Santa Cruz', 'Torrijos',
        'Masbate City', 'Aroroy', 'Baleno', 'Balud', 'Batuan', 'Cataingan',
        'Cawayan', 'Claveria', 'Dimasalang', 'Esperanza', 'Mandaon',
        'Milagros', 'Mobo', 'Monreal', 'Palanas', 'Pio V. Corpuz', 'Placer',
        'San Fernando', 'San Jacinto', 'San Pascual', 'Uson', 'Manila',
        'Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong',
        'Marikina', 'Muntinlupa', 'Navotas', 'Parañaque', 'Pasay', 'Pasig',
        'Quezon City', 'San Juan', 'Taguig', 'Valenzuela', 'Pateros',
        'Oroquieta City', 'Ozamiz City', 'Tangub City', 'Aloran',
        'Baliangao', 'Bonifacio', 'Calamba', 'Clarin', 'Concepcion',
        'Don Victoriano Chiongbian', 'Jimenez', 'Lopez Jaena', 'Panaon',
        'Plaridel', 'Sapang Dalaga', 'Sinacaban', 'Tudela', 'Cagayan de Oro',
        'El Salvador City', 'Gingoog City', 'Alubijid', 'Balingasag',
        'Balingoan', 'Binuangan', 'Claveria', 'Gitagum', 'Initao', 'Jasaan',
        'Kinoguitan', 'Lagonglong', 'Laguindingan', 'Libertad', 'Lugait',
        'Magsaysay', 'Manticao', 'Medina', 'Naawan', 'Opol', 'Salay',
        'Sugbongcogon', 'Tagoloan', 'Talisayan', 'Villanueva', 'Barlig',
        'Bauko', 'Besao', 'Bontoc', 'Natonin', 'Paracelis', 'Sabangan',
        'Sadanga', 'Sagada', 'Tadian', 'Bacolod City', 'Bago City',
        'Cadiz City', 'Escalante City', 'Himamaylan City', 'Kabankalan City',
        'La Carlota City', 'Sagay City', 'San Carlos City', 'Silay City',
        'Sipalay City', 'Talisay City', 'Victorias City', 'Binalbagan',
        'Calatrava', 'Candoni', 'Cauayan', 'Enrique B. Magalona',
        'Hinigaran', 'Hinoba-an', 'Ilog', 'Isabela', 'La Castellana',
        'Manapla', 'Moises Padilla', 'Murcia', 'Pontevedra', 'Pulupandan',
        'Salvador Benedicto', 'San Enrique', 'Toboso', 'Valladolid',
        'Bais City', 'Bayawan City', 'Canlaon City', 'Guihulngan City',
        'Dumaguete City', 'Tanjay City', 'Amlan', 'Ayungon', 'Bacong',
        'Basay', 'Bindoy', 'Dauin', 'Jimalalud', 'La Libertad', 'Mabinay',
        'Manjuyod', 'Pamplona', 'San Jose', 'Santa Catalina', 'Siaton',
        'Sibulan', 'Tayasan', 'Valencia', 'Vallehermoso', 'Zamboanguita',
        'Allen', 'Biri', 'Bobon', 'Capul', 'Catarman', 'Catubig', 'Gamay',
        'Laoang', 'Lapinig', 'Las Navas', 'Lavezares', 'Lope de Vega',
        'Mapanas', 'Mondragon', 'Palapag', 'Pambujan', 'Rosario',
        'San Antonio', 'San Isidro', 'San Jose', 'San Roque', 'San Vicente',
        'Silvino Lobos', 'Victoria', 'Cabanatuan City', 'Gapan City',
        'Palayan City', 'San Jose City', 'Science City of Muñoz', 'Aliaga',
        'Bongabon', 'Cabiao', 'Carranglan', 'Cuyapo', 'Gabaldon',
        'General Mamerto Natividad', 'General Tinio', 'Guimba', 'Jaen',
        'Laur', 'Licab', 'Llanera', 'Lupao', 'Nampicuan', 'Pantabangan',
        'Peñaranda', 'Quezon', 'Rizal', 'San Antonio', 'San Isidro',
        'San Leonardo', 'Santa Rosa', 'Santo Domingo', 'Talavera',
        'Talugtug', 'Zaragoza', 'Alfonso Castaneda', 'Ambaguio', 'Aritao',
        'Bagabag', 'Bambang', 'Bayombong', 'Diadi', 'Dupax del Norte',
        'Dupax del Sur', 'Kasibu', 'Kayapa', 'Quezon', 'Santa Fe', 'Solano',
        'Villaverde', 'Abra de Ilog', 'Calintaan', 'Looc', 'Lubang',
        'Magsaysay', 'Mamburao', 'Paluan', 'Rizal', 'Sablayan', 'San Jose',
        'Santa Cruz', 'Calapan City', 'Baco', 'Bansud', 'Bongabong',
        'Bulalacao', 'Gloria', 'Mansalay', 'Naujan', 'Pinamalayan', 'Pola',
        'Puerto Galera', 'Roxas', 'San Teodoro', 'Socorro', 'Victoria',
        'Puerto Princesa City', 'Aborlan', 'Agutaya', 'Araceli', 'Balabac',
        'Bataraza', 'Brooke\\'s Point', 'Busuanga', 'Cagayancillo', 'Coron',
        'Culion', 'Cuyo', 'Dumaran', 'El Nido', 'Kalayaan', 'Linapacan',
        'Magsaysay', 'Narra', 'Quezon', 'Rizal', 'Roxas', 'San Vicente',
        'Sofronio Española', 'Taytay', 'Angeles City', 'San Fernando City',
        'Mabalacat City', 'Apalit', 'Arayat', 'Bacolor', 'Candaba',
        'Floridablanca', 'Guagua', 'Lubao', 'Macabebe', 'Magalang',
        'Masantol', 'Mexico', 'Minalin', 'Porac', 'San Luis', 'San Simon',
        'Santa Ana', 'Santa Rita', 'Santo Tomas', 'Sasmuan', 'Alaminos City',
        'Dagupan City', 'San Carlos City', 'Urdaneta City', 'Agno',
        'Aguilar', 'Alcala', 'Anda', 'Asingan', 'Balungao', 'Bani',
        'Basista', 'Bautista', 'Bayambang', 'Binalonan', 'Binmaley',
        'Bolinao', 'Bugallon', 'Burgos', 'Calasiao', 'Dasol', 'Infanta',
        'Labrador', 'Laoac', 'Lingayen', 'Mabini', 'Malasiqui', 'Manaoag',
        'Mangaldan', 'Mangatarem', 'Mapandan', 'Natividad', 'Pozzorubio',
        'Rosales', 'San Fabian', 'San Jacinto', 'San Manuel', 'San Nicolas',
        'San Quintin', 'Santa Barbara', 'Santa Maria', 'Santo Tomas',
        'Sison', 'Sual', 'Tayug', 'Umingan', 'Urbiztondo', 'Villasis',
        'Lucena City', 'Tayabas City', 'Agdangan', 'Alabat', 'Atimonan',
        'Buenavista', 'Burdeos', 'Calauag', 'Candelaria', 'Catanauan',
        'Dolores', 'General Luna', 'General Nakar', 'Guinayangan', 'Gumaca',
        'Infanta', 'Jomalig', 'Lopez', 'Lucban', 'Macalelon', 'Mauban',
        'Mulanay', 'Padre Burgos', 'Pagbilao', 'Panukulan', 'Patnanungan',
        'Perez', 'Pitogo', 'Plaridel', 'Polillo', 'Quezon', 'Real',
        'Sampaloc', 'San Andres', 'San Antonio', 'San Francisco',
        'San Narciso', 'Sariaya', 'Tagkawayan', 'Tiaong', 'Unisan',
        'Aglipay', 'Cabarroguis', 'Diffun', 'Maddela', 'Nagtipunan',
        'Saguday', 'Antipolo City', 'Angono', 'Baras', 'Binangonan',
        'Cainta', 'Cardona', 'Jalajala', 'Morong', 'Pililla', 'Rodriguez',
        'San Mateo', 'Tanay', 'Taytay', 'Teresa', 'Alcantara', 'Banton',
        'Cajidiocan', 'Calatrava', 'Concepcion', 'Corcuera', 'Ferrol',
        'Looc', 'Magdiwang', 'Odiongan', 'Romblon', 'San Agustin',
        'San Andres', 'San Fernando', 'San Jose', 'Santa Fe', 'Santa Maria',
        'Calbayog City', 'Catbalogan City', 'Almagro', 'Basey', 'Calbiga',
        'Daram', 'Gandara', 'Hinabangan', 'Jiabong', 'Marabut', 'Matuguinao',
        'Motiong', 'Pagsanghan', 'Paranas', 'Pinabacdao', 'San Jorge',
        'San Jose De Buan', 'San Sebastian', 'Santa Margarita', 'Santa Rita',
        'Santo Niño', 'Tagapul-an', 'Talalora', 'Tarangnan', 'Villareal',
        'Zumarraga', 'Alabel', 'Glan', 'Kiamba', 'Maasim', 'Maitum',
        'Malapatan', 'Malungon', 'Enrique Villanueva', 'Larena', 'Lazi',
        'Maria', 'San Juan', 'Siquijor', 'Sorsogon City', 'Barcelona',
        'Bulan', 'Bulusan', 'Casiguran', 'Castilla', 'Donsol', 'Gubat',
        'Irosin', 'Juban', 'Magallanes', 'Matnog', 'Pilar', 'Prieto Diaz',
        'Santa Magdalena', 'General Santos City', 'Koronadal City',
        'Polomolok', 'Banga', 'Lake Sebu', 'Norala', 'Santo Niño',
        'Surallah', 'T\\'boli', 'Tampakan', 'Tantangan', 'Tupi',
        'Maasin City', 'Anahawan', 'Bontoc', 'Hinunangan', 'Hinundayan',
        'Libagon', 'Liloan', 'Limasawa', 'Macrohon', 'Malitbog',
        'Padre Burgos', 'Pintuyan', 'Saint Bernard', 'San Francisco',
        'San Juan', 'San Ricardo', 'Silago', 'Sogod', 'Tomas Oppus',
        'Tacurong City', 'Bagumbayan', 'Columbio', 'Esperanza', 'Isulan',
        'Kalamansig', 'Lambayong', 'Lebak', 'Lutayan', 'Palimbang',
        'President Quirino', 'Senator Ninoy Aquino', 'Banguingui',
        'Hadji Panglima Tahil', 'Indanan', 'Jolo', 'Kalingalan Caluang',
        'Lugus', 'Luuk', 'Maimbung', 'Old Panamao', 'Omar', 'Pandami',
        'Panglima Estino', 'Pangutaran', 'Parang', 'Pata', 'Patikul',
        'Siasi', 'Talipao', 'Tapul', 'Surigao City', 'Alegria', 'Bacuag',
        'Burgos', 'Claver', 'Dapa', 'Del Carmen', 'General Luna',
        'Gigaquit', 'Mainit', 'Malimono', 'Pilar', 'Placer', 'San Benito',
        'San Francisco', 'San Isidro', 'Santa Monica', 'Sison', 'Socorro',
        'Tagana-an', 'Tubod', 'Bislig City', 'Tandag City', 'Barobo',
        'Bayabas', 'Cagwait', 'Cantilan', 'Carmen', 'Carrascal', 'Cortes',
        'Hinatuan', 'Lanuza', 'Lianga', 'Lingig', 'Madrid', 'Marihatag',
        'San Agustin', 'San Miguel', 'Tagbina', 'Tago', 'Tarlac City',
        'Anao', 'Bamban', 'Camiling', 'Capas', 'Concepcion', 'Gerona',
        'La Paz', 'Mayantoc', 'Moncada', 'Paniqui', 'Pura', 'Ramos',
        'San Clemente', 'San Jose', 'San Manuel', 'Santa Ignacia',
        'Victoria', 'Bongao', 'Languyan', 'Mapun', 'Panglima Sugala',
        'Sapa-Sapa', 'Sibutu', 'Simunul', 'Sitangkai', 'South Ubian',
        'Tandubas', 'Turtle Islands', 'Olongapo City', 'Botolan', 'Cabangan',
        'Candelaria', 'Castillejos', 'Iba', 'Masinloc', 'Palauig',
        'San Antonio', 'San Felipe', 'San Marcelino', 'San Narciso',
        'Santa Cruz', 'Subic', 'Dapitan City', 'Dipolog City', 'Bacungan',
        'Baliguian', 'Godod', 'Gutalac', 'Jose Dalman', 'Kalawit',
        'Katipunan', 'La Libertad', 'Labason', 'Liloy', 'Manukan', 'Mutia',
        'Piñan', 'Polanco', 'President Manuel A. Roxas', 'Rizal', 'Salug',
        'Sergio Osmeña Sr.', 'Siayan', 'Sibuco', 'Sibutad', 'Sindangan',
        'Siocon', 'Sirawai', 'Tampilisan', 'Pagadian City', 'Zamboanga City',
        'Aurora', 'Bayog', 'Dimataling', 'Dinas', 'Dumalinao', 'Dumingag',
        'Guipos', 'Josefina', 'Kumalarang', 'Labangan', 'Lakewood',
        'Lapuyan', 'Mahayag', 'Margosatubig', 'Midsalip', 'Molave', 'Pitogo',
        'Ramon Magsaysay', 'San Miguel', 'San Pablo', 'Sominot', 'Tabina',
        'Tambulig', 'Tigbao', 'Tukuran', 'Vincenzo A. Sagun', 'Alicia',
        'Buug', 'Diplahan', 'Imelda', 'Ipil', 'Kabasalan', 'Mabuhay',
        'Malangas', 'Naga', 'Olutanga', 'Payao', 'Roseller Lim', 'Siay',
        'Talusan', 'Titay', 'Tungawan'
    );

    protected static \$barangay = array(
        'Poblacion'
    );

    public function province()
    {
        return static::randomElement(static::\$province);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public function municipality()
    {
        return static::randomElement(static::\$municipality);
    }

    public function barangay()
    {
        return static::randomElement(static::\$barangay);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_PH/Address.php");
    }
}