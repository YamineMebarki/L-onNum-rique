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

/* vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php */
class __TwigTemplate_e2542a394569dd09e2ea6e2c508253c3bd691abf65dc8fa6b8e1d931fcaf9fcd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sl_SI;

class Address extends \\Faker\\Provider\\Address
{

    /**
     * @link http://www.rtvslo.si/strani/abecedni-seznam-obcin/3103
     **/
    protected static \$city = array(
        'Ajdovščina', 'Apače', 'Beltinci', 'Benedikt', 'Bistrica ob Sotli', 'Bled', 'Bloke', 'Bohinj', 'Borovnica', 'Bovec',
        'Braslovče', 'Brda', 'Brezovica', 'Brežice', 'Cankova', 'Celje', 'Cerklje na Gorenjskem', 'Cerknica', 'Cerkno',
        'Cerkvenjak', 'Cirkulane', 'Destrnik', 'Divača', 'Dobje', 'Dobrepolje', 'Dobrna', 'Dobrova - Polhov Gradec', 'Dobrovnik',
        'Dol pri Ljubljani', 'Dolenjske Toplice', 'Domžale', 'Dornava', 'Dravograd', 'Duplek', 'Gorenja vas - Poljane',
        'Gorišnica', 'Gorje', 'Gornja Radgona', 'Gornji Grad', 'Gornji Petrovci', 'Grad', 'Grosuplje', 'Hajdina', 'Hodoš',
        'Horjul', 'Hoče - Slivnica', 'Hrastnik', 'Hrpelje - Kozina', 'Idrija', 'Ig', 'Ilirska Bistrica', 'Ivančna Gorica',
        'Izola', 'Jesenice', 'Jezersko', 'Juršinci', 'Kamnik', 'Kanal ob Soči', 'Kidričevo', 'Kobarid', 'Kobilje', 'Komen',
        'Komenda', 'Koper', 'Kostanjevica na Krki', 'Kostel', 'Kozje', 'Kočevje', 'Kranj', 'Kranjska Gora', 'Križevci', 'Krško',
        'Kungota', 'Kuzma', 'Laško', 'Lenart', 'Lendava', 'Litija', 'Ljubljana', 'Ljubno', 'Ljutomer', 'Log - Dragomer', 'Logatec',
        'Lovrenc na Pohorju', 'Loška Dolina', 'Loški Potok', 'Lukovica', 'Luče', 'Majšperk', 'Makole', 'Maribor', 'Markovci',
        'Medvode', 'Mengeš', 'Metlika', 'Mežica', 'Miklavž na Dravskem polju', 'Miren - Kostanjevica', 'Mirna Peč', 'Mislinja',
        'Mokronog - Trebelno', 'Moravske Toplice', 'Moravče', 'Mozirje', 'Murska Sobota', 'Muta', 'Naklo', 'Nazarje', 'Nova Gorica',
        'Novo mesto', 'Odranci', 'Oplotnica', 'Ormož', 'Osilnica', 'Pesnica', 'Piran', 'Pivka', 'Podlehnik', 'Podvelka',
        'Podčetrtek', 'Poljčane', 'Polzela', 'Postojna', 'Prebold', 'Preddvor', 'Prevalje', 'Ptuj', 'Puconci', 'Radenci', 'Radeče',
        'Radlje ob Dravi', 'Radovljica', 'Ravne na Koroškem', 'Razkrižje', 'Rače - Fram', 'Renče - Vogrsko', 'Rečica ob Savinji',
        'Ribnica na Pohorju', 'Ribnica', 'Rogatec', 'Rogaška Slatina', 'Rogašovci', 'Ruše', 'Selnica ob Dravi', 'Semič', 'Sevnica',
        'Sežana', 'Slovenj Gradec', 'Slovenska Bistrica', 'Slovenske Konjice', 'Sodražica', 'Solčava', 'Središče ob Dravi', 'Starše',
        'Straža', 'Sveta Ana', 'Sveta Trojica v Slovenskih goricah', 'Sveti Andraž v Slovenskih goricah', 'Sveti Jurij ob Ščavnici',
        'Sveti Jurij v Slovenskih goricah', 'Sveti Tomaž', 'Tabor', 'Tišina', 'Tolmin', 'Trbovlje', 'Trebnje', 'Trnovska vas',
        'Trzin', 'Tržič', 'Turnišče', 'Velenje', 'Velika Polana', 'Velike Lašče', 'Veržej', 'Videm', 'Vipava', 'Vitanje', 'Vodice',
        'Vojnik', 'Vransko', 'Vrhnika', 'Vuzenica', 'Zagorje ob Savi', 'Zavrč', 'Zreče', 'Črenšovci', 'Črna na Koroškem', 'Črnomelj',
        'Šalovci', 'Šempeter - Vrtojba', 'Šentilj', 'Šentjernej', 'Šentjur', 'Šentrupert', 'Šenčur', 'Škocjan', 'Škofja Loka',
        'Škofljica', 'Šmarje pri Jelšah', 'Šmarješke Toplice', 'Šmartno ob Paki', 'Šmartno pri Litiji', 'Šoštanj', 'Štore', 'Žalec',
        'Železniki', 'Žetale', 'Žiri', 'Žirovnica', 'Žužemberk'
    );

    protected static \$buildingNumber = array('1##', '##', '##', '##', '##', '#');

    protected static \$postcode = array('###0');

    /**
     * Most common street names in Slovenia
     *
     * @link http://www.stat.si/krajevnaimena/pregledi_ulice_najpogostejse.asp
     * @link http://www.stat.si/KrajevnaImena/pregledi_naselja_najpogostejsa.asp
     */
    protected static \$street = array(
        'Šolska ulica', 'Prešernova ulica', 'Cankarjeva ulica', 'Vrtna ulica', 'Gregorčičeva ulica', 'Kajuhova ulica', 'Prečna ulica',
        'Levstikova ulica', 'Trubarjeva ulica', 'Mladinska ulica', 'Gubčeva ulica', 'Ljubljanska cesta', 'Partizanska ulica', 'Maistrova ulica',
        'Rožna ulica', 'Bevkova ulica', 'Jurčičeva ulica', 'Župančičeva ulica', 'Kolodvorska ulica', 'Partizanska cesta', 'Gasilska ulica',
        'Kidričeva ulica', 'Aškerčeva ulica', 'Kratka ulica', 'Nova ulica', 'Obrtniška ulica', 'Tomšičeva ulica', 'Cvetlična ulica',
        'Mariborska cesta', 'Ob potoku', 'Trg svobode', 'Ulica talcev', 'Kettejeva ulica', 'Kosovelova ulica', 'Finžgarjeva ulica', 'Ob gozdu',
        'Stara cesta', 'Vegova ulica', 'Prežihova ulica', 'Sončna ulica',

        'Gradišče', 'Pristava', 'Brezje', 'Dolenja vas', 'Potok', 'Ravne',
        'Brdo', 'Dobrava', 'Draga', 'Javorje', 'Kal', 'Laze', 'Log', 'Planina', 'Podkraj', 'Selce', 'Trnovec', 'Bistrica', 'Gorenja vas',
        'Gorica', 'Lipa', 'Nova vas', 'Podgora', 'Podgorje', 'Podgrad', 'Ponikve', 'Sela', 'Selo', 'Škocjan', 'Vrh'
    );

    /**
     * @link http://sl.wikipedia.org/wiki/Seznam_suverenih_držav
     */
    protected static \$country = array(
        'Afganistan', 'Albanija', 'Alžirija', 'Andora', 'Angola', 'Antigva in Barbuda', 'Argentina', 'Armenija', 'Avstralija', 'Avstrija',
        'Azerbajdžan', 'Bahami', 'Bahrajn', 'Bangladeš', 'Barbados', 'Belgija', 'Belize', 'Belorusija', 'Benin', 'Bocvana', 'Bolgarija',
        'Bolivija', 'Bosna in Hercegovina', 'Brazilija', 'Brunej', 'Burkina Faso', 'Burundi', 'Butan', 'Ciper', 'Čad', 'Češka', 'Čile',
        'Črna gora', 'Danska', 'Dominika', 'Dominikanska republika', 'Džibuti', 'Egipt', 'Ekvador', 'Ekvatorialna Gvineja', 'Eritreja',
        'Estonija', 'Etiopija', 'Fidži', 'Filipini', 'Finska', 'Francija', 'Gabon', 'Gambija', 'Gana', 'Grčija', 'Grenada', 'Gruzija',
        'Gvajana', 'Gvatemala', 'Gvineja', 'Gvineja Bissau', 'Haiti', 'Honduras', 'Hrvaška', 'Indija', 'Indonezija', 'Irak', 'Iran', 'Irska',
        'Islandija', 'Italija', 'Izrael', 'Jamajka', 'Japonska', 'Jemen', 'Jordanija', 'Južna Afrika', 'Južna Koreja', 'Kambodža', 'Kamerun',
        'Kanada', 'Katar', 'Kazahstan', 'Kenija', 'Kirgizistan', 'Kiribati', 'Kitajska', 'Kolumbija', 'Komori', 'Kongo', 'Demokratična republika Kongo',
        'Kostarika', 'Kuba', 'Kuvajt', 'Laos', 'Latvija', 'Lesoto', 'Libanon', 'Liberija', 'Libija', 'Lihtenštajn', 'Litva', 'Luksemburg', 'Madagaskar',
        'Madžarska', 'Makedonija', 'Malavi', 'Maldivi', 'Malezija', 'Mali', 'Malta', 'Maroko', 'Marshallovi otoki', 'Mauritius', 'Mavretanija', 'Mehika',
        'Mikronezija', 'Mjanmar', 'Moldavija', 'Monako', 'Mongolija', 'Mozambik', 'Namibija', 'Nauru', 'Nemčija', 'Nepal', 'Niger', 'Nigerija',
        'Nikaragva', 'Nizozemska', 'Norveška', 'Nova Zelandija', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Nova Gvineja', 'Paragvaj', 'Peru',
        'Poljska', 'Portugalska', 'Romunija', 'Ruanda', 'Rusija', 'Saint Kitts in Nevis', 'Saint Lucia', 'Saint Vincent in Grenadine',
        'Salomonovi otoki', 'Salvador', 'San Marino', 'Sao Tome in Principe', 'Saudova Arabija', 'Sejšeli', 'Senegal', 'Severna Koreja', 'Sierra Leone',
        'Singapur', 'Sirija', 'Slonokoščena obala', 'Slovaška', 'Slovenija', 'Somalija', 'Srbija', 'Srednjeafriška republika', 'Sudan', 'Surinam',
        'Svazi', 'Španija', 'Šrilanka', 'Švedska', 'Švica', 'Tadžikistan', 'Tajska', 'Tajvan', 'Tanzanija', 'Togo', 'Tonga', 'Trinidad in Tobago',
        'Tunizija', 'Turčija', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukrajina', 'Urugvaj', 'Uzbekistan', 'Vanuatu', 'Vatikan', 'Velika Britanija',
        'Venezuela', 'Vietnam', 'Vzhodni Timor', 'Zahodna Samoa', 'Zambija', 'Združene države Amerike', 'Združeni arabski emirati',
        'Zelenortski otoki', 'Zimbabve'
    );

    protected static \$cityFormats = array(
        '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$addressFormats = array(
        '";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\\n ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\\n ";
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "',
    );

    public static function cityName()
    {
        return static::randomElement(static::\$city);
    }

    public function streetName()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 95,  138 => 91,  131 => 87,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sl_SI;

class Address extends \\Faker\\Provider\\Address
{

    /**
     * @link http://www.rtvslo.si/strani/abecedni-seznam-obcin/3103
     **/
    protected static \$city = array(
        'Ajdovščina', 'Apače', 'Beltinci', 'Benedikt', 'Bistrica ob Sotli', 'Bled', 'Bloke', 'Bohinj', 'Borovnica', 'Bovec',
        'Braslovče', 'Brda', 'Brezovica', 'Brežice', 'Cankova', 'Celje', 'Cerklje na Gorenjskem', 'Cerknica', 'Cerkno',
        'Cerkvenjak', 'Cirkulane', 'Destrnik', 'Divača', 'Dobje', 'Dobrepolje', 'Dobrna', 'Dobrova - Polhov Gradec', 'Dobrovnik',
        'Dol pri Ljubljani', 'Dolenjske Toplice', 'Domžale', 'Dornava', 'Dravograd', 'Duplek', 'Gorenja vas - Poljane',
        'Gorišnica', 'Gorje', 'Gornja Radgona', 'Gornji Grad', 'Gornji Petrovci', 'Grad', 'Grosuplje', 'Hajdina', 'Hodoš',
        'Horjul', 'Hoče - Slivnica', 'Hrastnik', 'Hrpelje - Kozina', 'Idrija', 'Ig', 'Ilirska Bistrica', 'Ivančna Gorica',
        'Izola', 'Jesenice', 'Jezersko', 'Juršinci', 'Kamnik', 'Kanal ob Soči', 'Kidričevo', 'Kobarid', 'Kobilje', 'Komen',
        'Komenda', 'Koper', 'Kostanjevica na Krki', 'Kostel', 'Kozje', 'Kočevje', 'Kranj', 'Kranjska Gora', 'Križevci', 'Krško',
        'Kungota', 'Kuzma', 'Laško', 'Lenart', 'Lendava', 'Litija', 'Ljubljana', 'Ljubno', 'Ljutomer', 'Log - Dragomer', 'Logatec',
        'Lovrenc na Pohorju', 'Loška Dolina', 'Loški Potok', 'Lukovica', 'Luče', 'Majšperk', 'Makole', 'Maribor', 'Markovci',
        'Medvode', 'Mengeš', 'Metlika', 'Mežica', 'Miklavž na Dravskem polju', 'Miren - Kostanjevica', 'Mirna Peč', 'Mislinja',
        'Mokronog - Trebelno', 'Moravske Toplice', 'Moravče', 'Mozirje', 'Murska Sobota', 'Muta', 'Naklo', 'Nazarje', 'Nova Gorica',
        'Novo mesto', 'Odranci', 'Oplotnica', 'Ormož', 'Osilnica', 'Pesnica', 'Piran', 'Pivka', 'Podlehnik', 'Podvelka',
        'Podčetrtek', 'Poljčane', 'Polzela', 'Postojna', 'Prebold', 'Preddvor', 'Prevalje', 'Ptuj', 'Puconci', 'Radenci', 'Radeče',
        'Radlje ob Dravi', 'Radovljica', 'Ravne na Koroškem', 'Razkrižje', 'Rače - Fram', 'Renče - Vogrsko', 'Rečica ob Savinji',
        'Ribnica na Pohorju', 'Ribnica', 'Rogatec', 'Rogaška Slatina', 'Rogašovci', 'Ruše', 'Selnica ob Dravi', 'Semič', 'Sevnica',
        'Sežana', 'Slovenj Gradec', 'Slovenska Bistrica', 'Slovenske Konjice', 'Sodražica', 'Solčava', 'Središče ob Dravi', 'Starše',
        'Straža', 'Sveta Ana', 'Sveta Trojica v Slovenskih goricah', 'Sveti Andraž v Slovenskih goricah', 'Sveti Jurij ob Ščavnici',
        'Sveti Jurij v Slovenskih goricah', 'Sveti Tomaž', 'Tabor', 'Tišina', 'Tolmin', 'Trbovlje', 'Trebnje', 'Trnovska vas',
        'Trzin', 'Tržič', 'Turnišče', 'Velenje', 'Velika Polana', 'Velike Lašče', 'Veržej', 'Videm', 'Vipava', 'Vitanje', 'Vodice',
        'Vojnik', 'Vransko', 'Vrhnika', 'Vuzenica', 'Zagorje ob Savi', 'Zavrč', 'Zreče', 'Črenšovci', 'Črna na Koroškem', 'Črnomelj',
        'Šalovci', 'Šempeter - Vrtojba', 'Šentilj', 'Šentjernej', 'Šentjur', 'Šentrupert', 'Šenčur', 'Škocjan', 'Škofja Loka',
        'Škofljica', 'Šmarje pri Jelšah', 'Šmarješke Toplice', 'Šmartno ob Paki', 'Šmartno pri Litiji', 'Šoštanj', 'Štore', 'Žalec',
        'Železniki', 'Žetale', 'Žiri', 'Žirovnica', 'Žužemberk'
    );

    protected static \$buildingNumber = array('1##', '##', '##', '##', '##', '#');

    protected static \$postcode = array('###0');

    /**
     * Most common street names in Slovenia
     *
     * @link http://www.stat.si/krajevnaimena/pregledi_ulice_najpogostejse.asp
     * @link http://www.stat.si/KrajevnaImena/pregledi_naselja_najpogostejsa.asp
     */
    protected static \$street = array(
        'Šolska ulica', 'Prešernova ulica', 'Cankarjeva ulica', 'Vrtna ulica', 'Gregorčičeva ulica', 'Kajuhova ulica', 'Prečna ulica',
        'Levstikova ulica', 'Trubarjeva ulica', 'Mladinska ulica', 'Gubčeva ulica', 'Ljubljanska cesta', 'Partizanska ulica', 'Maistrova ulica',
        'Rožna ulica', 'Bevkova ulica', 'Jurčičeva ulica', 'Župančičeva ulica', 'Kolodvorska ulica', 'Partizanska cesta', 'Gasilska ulica',
        'Kidričeva ulica', 'Aškerčeva ulica', 'Kratka ulica', 'Nova ulica', 'Obrtniška ulica', 'Tomšičeva ulica', 'Cvetlična ulica',
        'Mariborska cesta', 'Ob potoku', 'Trg svobode', 'Ulica talcev', 'Kettejeva ulica', 'Kosovelova ulica', 'Finžgarjeva ulica', 'Ob gozdu',
        'Stara cesta', 'Vegova ulica', 'Prežihova ulica', 'Sončna ulica',

        'Gradišče', 'Pristava', 'Brezje', 'Dolenja vas', 'Potok', 'Ravne',
        'Brdo', 'Dobrava', 'Draga', 'Javorje', 'Kal', 'Laze', 'Log', 'Planina', 'Podkraj', 'Selce', 'Trnovec', 'Bistrica', 'Gorenja vas',
        'Gorica', 'Lipa', 'Nova vas', 'Podgora', 'Podgorje', 'Podgrad', 'Ponikve', 'Sela', 'Selo', 'Škocjan', 'Vrh'
    );

    /**
     * @link http://sl.wikipedia.org/wiki/Seznam_suverenih_držav
     */
    protected static \$country = array(
        'Afganistan', 'Albanija', 'Alžirija', 'Andora', 'Angola', 'Antigva in Barbuda', 'Argentina', 'Armenija', 'Avstralija', 'Avstrija',
        'Azerbajdžan', 'Bahami', 'Bahrajn', 'Bangladeš', 'Barbados', 'Belgija', 'Belize', 'Belorusija', 'Benin', 'Bocvana', 'Bolgarija',
        'Bolivija', 'Bosna in Hercegovina', 'Brazilija', 'Brunej', 'Burkina Faso', 'Burundi', 'Butan', 'Ciper', 'Čad', 'Češka', 'Čile',
        'Črna gora', 'Danska', 'Dominika', 'Dominikanska republika', 'Džibuti', 'Egipt', 'Ekvador', 'Ekvatorialna Gvineja', 'Eritreja',
        'Estonija', 'Etiopija', 'Fidži', 'Filipini', 'Finska', 'Francija', 'Gabon', 'Gambija', 'Gana', 'Grčija', 'Grenada', 'Gruzija',
        'Gvajana', 'Gvatemala', 'Gvineja', 'Gvineja Bissau', 'Haiti', 'Honduras', 'Hrvaška', 'Indija', 'Indonezija', 'Irak', 'Iran', 'Irska',
        'Islandija', 'Italija', 'Izrael', 'Jamajka', 'Japonska', 'Jemen', 'Jordanija', 'Južna Afrika', 'Južna Koreja', 'Kambodža', 'Kamerun',
        'Kanada', 'Katar', 'Kazahstan', 'Kenija', 'Kirgizistan', 'Kiribati', 'Kitajska', 'Kolumbija', 'Komori', 'Kongo', 'Demokratična republika Kongo',
        'Kostarika', 'Kuba', 'Kuvajt', 'Laos', 'Latvija', 'Lesoto', 'Libanon', 'Liberija', 'Libija', 'Lihtenštajn', 'Litva', 'Luksemburg', 'Madagaskar',
        'Madžarska', 'Makedonija', 'Malavi', 'Maldivi', 'Malezija', 'Mali', 'Malta', 'Maroko', 'Marshallovi otoki', 'Mauritius', 'Mavretanija', 'Mehika',
        'Mikronezija', 'Mjanmar', 'Moldavija', 'Monako', 'Mongolija', 'Mozambik', 'Namibija', 'Nauru', 'Nemčija', 'Nepal', 'Niger', 'Nigerija',
        'Nikaragva', 'Nizozemska', 'Norveška', 'Nova Zelandija', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Nova Gvineja', 'Paragvaj', 'Peru',
        'Poljska', 'Portugalska', 'Romunija', 'Ruanda', 'Rusija', 'Saint Kitts in Nevis', 'Saint Lucia', 'Saint Vincent in Grenadine',
        'Salomonovi otoki', 'Salvador', 'San Marino', 'Sao Tome in Principe', 'Saudova Arabija', 'Sejšeli', 'Senegal', 'Severna Koreja', 'Sierra Leone',
        'Singapur', 'Sirija', 'Slonokoščena obala', 'Slovaška', 'Slovenija', 'Somalija', 'Srbija', 'Srednjeafriška republika', 'Sudan', 'Surinam',
        'Svazi', 'Španija', 'Šrilanka', 'Švedska', 'Švica', 'Tadžikistan', 'Tajska', 'Tajvan', 'Tanzanija', 'Togo', 'Tonga', 'Trinidad in Tobago',
        'Tunizija', 'Turčija', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukrajina', 'Urugvaj', 'Uzbekistan', 'Vanuatu', 'Vatikan', 'Velika Britanija',
        'Venezuela', 'Vietnam', 'Vzhodni Timor', 'Zahodna Samoa', 'Zambija', 'Združene države Amerike', 'Združeni arabski emirati',
        'Zelenortski otoki', 'Zimbabve'
    );

    protected static \$cityFormats = array(
        '{{cityName}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    protected static \$addressFormats = array(
        '{{streetAddress}}\\n {{postcode}}\\n {{cityName}}',
    );

    public static function cityName()
    {
        return static::randomElement(static::\$city);
    }

    public function streetName()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Address.php");
    }
}
