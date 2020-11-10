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

/* vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php */
class __TwigTemplate_9e860dfad4364d9f2bdb1ecf0b2396a04301cbfbe71dd8ce7ace2051c7f4c055 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php"));

        // line 1
        echo "<?php
namespace Faker\\Provider\\ro_RO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static \$apartmentNumber = array('#', '##');
    protected static \$floor = array('#', '##');
    protected static \$block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static \$blockSegment = array('A', 'B', 'C', 'D');

    protected static \$streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Splaiul', 'Calea', 'P-ța'
    );

    // random selection of seemingly frequently used streets and naming categories
    protected static \$streetPlainName = array(
        // historical events
        'Eroilor', 'Independenței', 'Memorandumului', 'Unirii', '1 Decembrie',
        // historical people
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Vlad Țepeș', 'Traian', 'Decebal', 'Horea', 'Cloșca', 'Crișan',
        // national and international people names
        'Louis Pasteur', 'Albert Einstein', 'Franklin Delano Rosevelt', 'J.J Rousseau', 'Petrache Poenaru', 'Henri Coandă', 'Constantin Brâncuși', 'Aurel Vlaicu', 'Ion Creangă', 'Mihai Eminescu',
        // nature-related
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului',
        // work-related
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        // geography related
        'Jiului', 'Bega', 'Someș', 'Făget', 'Sinaia', 'Herculane', 'Padiș'
    );

    protected static \$postcode = array('######');

    // from http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Rom%C3%A2nia#Lista_alfabetic.C4.83_a_ora.C8.99elor_din_Rom.C3.A2nia_.28inclusiv_municipii.29
    protected static \$cityNames = array(
        'Abrud', 'Adjud', 'Agnita', 'Aiud', 'Alba Iulia', 'Aleșd', 'Alexandria', 'Amara', 'Anina', 'Aninoasa', 'Arad', 'Ardud', 'Avrig', 'Azuga', 'Babadag', 'Băbeni', 'Bacău', 'Baia de Aramă',
        'Baia de Arieș', 'Baia Mare', 'Baia Sprie', 'Băicoi', 'Băile Govora', 'Băile Herculane', 'Băile Olănești', 'Băile Tușnad', 'Băilești', 'Bălan', 'Bălcești', 'Balș', 'Băneasa', 'Baraolt',
        'Bârlad', 'Bechet', 'Beclean', 'Beiuș', 'Berbești', 'Berești', 'Bicaz', 'Bistrița', 'Blaj', 'Bocșa', 'Boldești-Scăeni', 'Bolintin-Vale', 'Borșa', 'Borsec', 'Botoșani', 'Brad', 'Bragadiru',
        'Brăila', 'Brașov', 'Breaza', 'Brezoi', 'Broșteni', 'Bucecea', 'București', 'Budești', 'Buftea', 'Buhuși', 'Bumbești-Jiu', 'Bușteni', 'Buzău', 'Buziaș', 'Cajvana', 'Calafat', 'Călan',
        'Călărași', 'Călimănești', 'Câmpeni', 'Câmpia Turzii', 'Câmpina', 'Câmpulung Moldovenesc', 'Câmpulung', 'Caracal', 'Caransebeș', 'Carei', 'Cavnic', 'Căzănești', 'Cehu Silvaniei',
        'Cernavodă', 'Chișineu-Criș', 'Chitila', 'Ciacova', 'Cisnădie', 'Cluj-Napoca', 'Codlea', 'Comănești', 'Comarnic', 'Constanța', 'Copșa Mică', 'Corabia', 'Costești', 'Covasna', 'Craiova',
        'Cristuru Secuiesc', 'Cugir', 'Curtea de Argeș', 'Curtici', 'Dăbuleni', 'Darabani', 'Dărmănești', 'Dej', 'Deta', 'Deva', 'Dolhasca', 'Dorohoi', 'Drăgănești-Olt', 'Drăgășani', 'Dragomirești',
        'Drobeta-Turnu Severin', 'Dumbrăveni', 'Eforie', 'Făgăraș', 'Făget', 'Fălticeni', 'Făurei', 'Fetești', 'Fieni', 'Fierbinți-Târg', 'Filiași', 'Flămânzi', 'Focșani', 'Frasin', 'Fundulea',
        'Găești', 'Galați', 'Gătaia', 'Geoagiu', 'Gheorgheni', 'Gherla', 'Ghimbav', 'Giurgiu', 'Gura Humorului', 'Hârlău', 'Hârșova', 'Hațeg', 'Horezu', 'Huedin', 'Hunedoara', 'Huși', 'Ianca',
        'Iași', 'Iernut', 'Ineu', 'Însurăței', 'Întorsura Buzăului', 'Isaccea', 'Jibou', 'Jimbolia', 'Lehliu Gară', 'Lipova', 'Liteni', 'Livada', 'Luduș', 'Lugoj', 'Lupeni', 'Măcin', 'Măgurele',
        'Mangalia', 'Mărășești', 'Marghita', 'Medgidia', 'Mediaș', 'Miercurea Ciuc', 'Miercurea Nirajului', 'Miercurea Sibiului', 'Mihăilești', 'Milișăuți', 'Mioveni', 'Mizil', 'Moinești',
        'Moldova Nouă', 'Moreni', 'Motru', 'Murfatlar', 'Murgeni', 'Nădlac', 'Năsăud', 'Năvodari', 'Negrești', 'Negrești-Oaș', 'Negru Vodă', 'Nehoiu', 'Novaci', 'Nucet', 'Ocna Mureș',
        'Ocna Sibiului', 'Ocnele Mari', 'Odobești', 'Odorheiu Secuiesc', 'Oltenița', 'Onești', 'Oradea', 'Orăștie', 'Oravița', 'Orșova', 'Oțelu Roșu', 'Otopeni', 'Ovidiu', 'Panciu', 'Pâncota',
        'Pantelimon', 'Pașcani', 'Pătârlagele', 'Pecica', 'Petrila', 'Petroșani', 'Piatra Neamț', 'Piatra-Olt', 'Pitești', 'Ploiești', 'Plopeni', 'Podu Iloaiei', 'Pogoanele', 'Popești-Leordeni',
        'Potcoava', 'Predeal', 'Pucioasa', 'Răcari', 'Rădăuți', 'Râmnicu Sărat', 'Râșnov', 'Recaș', 'Reghin', 'Reșița', 'Roman', 'Roșiorii de Vede', 'Rovinari', 'Roznov', 'Rupea', 'Săcele',
        'Săcueni', 'Salcea', 'Săliște', 'Săliștea de Sus', 'Salonta', 'Sângeorgiu de Pădure', 'Sângeorz-Băi', 'Sânnicolau Mare', 'Sântana', 'Sărmașu', 'Satu Mare', 'Săveni', 'Scornicești',
        'Sebeș', 'Sebiș', 'Segarcea', 'Seini', 'Sfântu Gheorghe', 'Sibiu', 'Sighetu Marmației', 'Sighișoara', 'Simeria', 'Șimleu Silvaniei', 'Sinaia', 'Siret', 'Slănic', 'Slănic-Moldova',
        'Slatina', 'Slobozia', 'Solca', 'Șomcuta Mare', 'Sovata', 'Ștefănești, Argeș', 'Ștefănești, Botoșani', 'Ștei', 'Strehaia', 'Suceava', 'Sulina', 'Tălmaciu', 'Țăndărei', 'Târgoviște',
        'Târgu Bujor', 'Târgu Cărbunești', 'Târgu Frumos', 'Târgu Jiu', 'Târgu Lăpuș', 'Târgu Mureș', 'Târgu Neamț', 'Târgu Ocna', 'Târgu Secuiesc', 'Târnăveni', 'Tășnad', 'Tăuții-Măgherăuș',
        'Techirghiol', 'Tecuci', 'Teiuș', 'Țicleni', 'Timișoara', 'Tismana', 'Titu', 'Toplița', 'Topoloveni', 'Tulcea', 'Turceni', 'Turda', 'Turnu Măgurele','Ulmeni', 'Ungheni', 'Uricani',
        'Urlați', 'Urziceni', 'Valea lui Mihai', 'Vălenii de Munte', 'Vânju Mare', 'Vașcău', 'Vaslui', 'Vatra Dornei', 'Vicovu de Sus', 'Victoria', 'Videle', 'Vișeu de Sus', 'Vlăhița', 'Voluntari',
        'Vulcan', 'Zalău', 'Zărnești', 'Zimnicea', 'Zlatna'
    );

    // http://en.wikipedia.org/wiki/Counties_of_Romania#Current_list
    protected static \$counties = array(
        'Alba', 'Arad', 'Argeș', 'Bacău', 'Bihor', 'Bistrița Năsăud', 'Botoșani', 'Brăila', 'Brașov', 'București', 'Buzău', 'Călărași', 'Caraș-Severin', 'Cluj', 'Constanța', 'Covasna', 'Dâmbovița',
        'Dolj', 'Galați', 'Giurgiu', 'Gorj', 'Harghita', 'Hunedoara', 'Ialomița', 'Iași', 'Ilfov', 'Maramureț', 'Mehedinți', 'Mureș', 'Neamț', 'Olt', 'Prahova', 'Sălaj', 'Satu Mare', 'Sibiu',
        'Suceava', 'Teleorman', 'Timiș', 'Tulcea', 'Vâlcea', 'Vaslui', 'Vrancea'
    );

    // http://ro.wikipedia.org/wiki/Lista_statelor_lumii#Lista_statelor_lumii
    protected static \$country = array(
        'Afganistan', 'Africa de Sud', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua și Barbuda', 'Arabia Saudită', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaidjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Birmania', 'Bolivia', 'Bosnia și Herțegovina', 'Botswana', 'Brazilia', 'Brunei', 'Bulgaria',
        'Burkina Faso', 'Burundi', 'Cambodgia', 'Camerun', 'Canada', 'Capul Verde', 'Cehia', 'Republica Centrafricană', 'Chile', 'Republica Populară Chineză', 'Ciad', 'Cipru', 'Columbia', 'Comore',
        'Republica Democrată Congo', 'Republica Congo', 'Coreea de Nord', 'Coreea de Sud', 'Costa Rica', 'Coasta de Fildeș', 'Croația', 'Cuba', 'Danemarca', 'Djibouti', 'Dominica',
        'Republica Dominicană', 'Ecuador', 'Egipt', 'El Salvador', 'Elveția', 'Emiratele Arabe Unite', 'Eritreea', 'Estonia', 'Etiopia', 'Fiji', 'Filipine', 'Finlanda', 'Franța', 'Gabon', 'Gambia',
        'Georgia', 'Germania', 'Ghana', 'Grecia', 'Grenada', 'Guatemala', 'Guineea', 'Guineea-Bissau', 'Guineea Ecuatorială', 'Guyana', 'Haiti', 'Honduras',
        'India', 'Indonezia', 'Iordania', 'Irak', 'Iran', 'Republica Irlanda', 'Islanda', 'Israel', 'Italia', 'Jamaica', 'Japonia', 'Kazahstan', 'Kenya', 'Kirghizstan', 'Kiribati', 'Kuweit',
        'Laos', 'Lesotho', 'Letonia', 'Liban', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburg', 'Republica Macedonia', 'Madagascar', 'Malawi', 'Malaezia', 'Maldive', 'Mali', 'Malta',
        'Maroc', 'Insulele Marshall', 'Mauritania', 'Mauritius', 'Mexic', 'Statele Federate ale Microneziei', 'Republica Moldova', 'Monaco', 'Mongolia', 'Mozambic', 'Muntenegru', 'Namibia', 'Nauru',
        'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Norvegia', 'Noua Zeelandă', 'Olanda', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Noua Guinee', 'Paraguay', 'Peru', 'Polonia', 'Portugalia',
        'Qatar', 'Regatul Unit', 'România', 'Rusia', 'Rwanda', 'Samoa', 'San Marino', 'São Tomé și Príncipe', 'São Tomé e Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sfânta Lucia',
        'Sfântul Cristofor și Nevis', 'Saint Vincent and the Grenadines', 'Sierra Leone', 'Singapore', 'Siria', 'Slovacia', 'Slovenia', 'Insulele Solomon', 'Somalia', 'Spania', 'Sri Lanka',
        'Statele Unite ale Americii', 'Sudan', 'Sudanul de Sud', 'Suedia', 'Surinam', 'Swaziland', 'Tadjikistan', 'Tanzania', 'Thailanda', 'Timorul de Est', 'Togo', 'Tonga', 'Trinidad-Tobago',
        'Tunisia', 'Turcia', 'Turkmenistan', 'Tuvalu', 'Ucraina', 'Uganda', 'Ungaria', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    );

    protected static \$cityFormats = array(
        '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "',
        'Mun. ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetPlainName"]) || array_key_exists("streetPlainName", $context) ? $context["streetPlainName"] : (function () { throw new RuntimeError('Variable "streetPlainName" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 97, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 98, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 98, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 99, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 99, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 99, $this->source); })()), "html", null, true);
        echo ", et. ";
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new RuntimeError('Variable "floor" does not exist.', 99, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " nr. ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ", bl. ";
        echo twig_escape_filter($this->env, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ", sc. ";
        echo twig_escape_filter($this->env, (isset($context["blockSegment"]) || array_key_exists("blockSegment", $context) ? $context["blockSegment"] : (function () { throw new RuntimeError('Variable "blockSegment" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ", et. ";
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new RuntimeError('Variable "floor" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ", ap. ";
        echo twig_escape_filter($this->env, (isset($context["apartmentNumber"]) || array_key_exists("apartmentNumber", $context) ? $context["apartmentNumber"] : (function () { throw new RuntimeError('Variable "apartmentNumber" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 104, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 104, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["county"]) || array_key_exists("county", $context) ? $context["county"] : (function () { throw new RuntimeError('Variable "county" does not exist.', 104, $this->source); })()), "html", null, true);
        echo ", CP ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function block()
    {
        return static::numerify(static::randomElement(static::\$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::\$blockSegment);
    }

    public static function floor()
    {
        return static::numerify(static::randomElement(static::\$floor));
    }

    public static function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::\$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::\$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Cluj'
     */
    public function county()
    {
        return static::randomElement(static::\$counties);
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 104,  190 => 100,  178 => 99,  168 => 98,  162 => 97,  156 => 96,  150 => 95,  141 => 91,  134 => 87,  130 => 86,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Provider\\ro_RO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static \$apartmentNumber = array('#', '##');
    protected static \$floor = array('#', '##');
    protected static \$block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static \$blockSegment = array('A', 'B', 'C', 'D');

    protected static \$streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Splaiul', 'Calea', 'P-ța'
    );

    // random selection of seemingly frequently used streets and naming categories
    protected static \$streetPlainName = array(
        // historical events
        'Eroilor', 'Independenței', 'Memorandumului', 'Unirii', '1 Decembrie',
        // historical people
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Vlad Țepeș', 'Traian', 'Decebal', 'Horea', 'Cloșca', 'Crișan',
        // national and international people names
        'Louis Pasteur', 'Albert Einstein', 'Franklin Delano Rosevelt', 'J.J Rousseau', 'Petrache Poenaru', 'Henri Coandă', 'Constantin Brâncuși', 'Aurel Vlaicu', 'Ion Creangă', 'Mihai Eminescu',
        // nature-related
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului',
        // work-related
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        // geography related
        'Jiului', 'Bega', 'Someș', 'Făget', 'Sinaia', 'Herculane', 'Padiș'
    );

    protected static \$postcode = array('######');

    // from http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Rom%C3%A2nia#Lista_alfabetic.C4.83_a_ora.C8.99elor_din_Rom.C3.A2nia_.28inclusiv_municipii.29
    protected static \$cityNames = array(
        'Abrud', 'Adjud', 'Agnita', 'Aiud', 'Alba Iulia', 'Aleșd', 'Alexandria', 'Amara', 'Anina', 'Aninoasa', 'Arad', 'Ardud', 'Avrig', 'Azuga', 'Babadag', 'Băbeni', 'Bacău', 'Baia de Aramă',
        'Baia de Arieș', 'Baia Mare', 'Baia Sprie', 'Băicoi', 'Băile Govora', 'Băile Herculane', 'Băile Olănești', 'Băile Tușnad', 'Băilești', 'Bălan', 'Bălcești', 'Balș', 'Băneasa', 'Baraolt',
        'Bârlad', 'Bechet', 'Beclean', 'Beiuș', 'Berbești', 'Berești', 'Bicaz', 'Bistrița', 'Blaj', 'Bocșa', 'Boldești-Scăeni', 'Bolintin-Vale', 'Borșa', 'Borsec', 'Botoșani', 'Brad', 'Bragadiru',
        'Brăila', 'Brașov', 'Breaza', 'Brezoi', 'Broșteni', 'Bucecea', 'București', 'Budești', 'Buftea', 'Buhuși', 'Bumbești-Jiu', 'Bușteni', 'Buzău', 'Buziaș', 'Cajvana', 'Calafat', 'Călan',
        'Călărași', 'Călimănești', 'Câmpeni', 'Câmpia Turzii', 'Câmpina', 'Câmpulung Moldovenesc', 'Câmpulung', 'Caracal', 'Caransebeș', 'Carei', 'Cavnic', 'Căzănești', 'Cehu Silvaniei',
        'Cernavodă', 'Chișineu-Criș', 'Chitila', 'Ciacova', 'Cisnădie', 'Cluj-Napoca', 'Codlea', 'Comănești', 'Comarnic', 'Constanța', 'Copșa Mică', 'Corabia', 'Costești', 'Covasna', 'Craiova',
        'Cristuru Secuiesc', 'Cugir', 'Curtea de Argeș', 'Curtici', 'Dăbuleni', 'Darabani', 'Dărmănești', 'Dej', 'Deta', 'Deva', 'Dolhasca', 'Dorohoi', 'Drăgănești-Olt', 'Drăgășani', 'Dragomirești',
        'Drobeta-Turnu Severin', 'Dumbrăveni', 'Eforie', 'Făgăraș', 'Făget', 'Fălticeni', 'Făurei', 'Fetești', 'Fieni', 'Fierbinți-Târg', 'Filiași', 'Flămânzi', 'Focșani', 'Frasin', 'Fundulea',
        'Găești', 'Galați', 'Gătaia', 'Geoagiu', 'Gheorgheni', 'Gherla', 'Ghimbav', 'Giurgiu', 'Gura Humorului', 'Hârlău', 'Hârșova', 'Hațeg', 'Horezu', 'Huedin', 'Hunedoara', 'Huși', 'Ianca',
        'Iași', 'Iernut', 'Ineu', 'Însurăței', 'Întorsura Buzăului', 'Isaccea', 'Jibou', 'Jimbolia', 'Lehliu Gară', 'Lipova', 'Liteni', 'Livada', 'Luduș', 'Lugoj', 'Lupeni', 'Măcin', 'Măgurele',
        'Mangalia', 'Mărășești', 'Marghita', 'Medgidia', 'Mediaș', 'Miercurea Ciuc', 'Miercurea Nirajului', 'Miercurea Sibiului', 'Mihăilești', 'Milișăuți', 'Mioveni', 'Mizil', 'Moinești',
        'Moldova Nouă', 'Moreni', 'Motru', 'Murfatlar', 'Murgeni', 'Nădlac', 'Năsăud', 'Năvodari', 'Negrești', 'Negrești-Oaș', 'Negru Vodă', 'Nehoiu', 'Novaci', 'Nucet', 'Ocna Mureș',
        'Ocna Sibiului', 'Ocnele Mari', 'Odobești', 'Odorheiu Secuiesc', 'Oltenița', 'Onești', 'Oradea', 'Orăștie', 'Oravița', 'Orșova', 'Oțelu Roșu', 'Otopeni', 'Ovidiu', 'Panciu', 'Pâncota',
        'Pantelimon', 'Pașcani', 'Pătârlagele', 'Pecica', 'Petrila', 'Petroșani', 'Piatra Neamț', 'Piatra-Olt', 'Pitești', 'Ploiești', 'Plopeni', 'Podu Iloaiei', 'Pogoanele', 'Popești-Leordeni',
        'Potcoava', 'Predeal', 'Pucioasa', 'Răcari', 'Rădăuți', 'Râmnicu Sărat', 'Râșnov', 'Recaș', 'Reghin', 'Reșița', 'Roman', 'Roșiorii de Vede', 'Rovinari', 'Roznov', 'Rupea', 'Săcele',
        'Săcueni', 'Salcea', 'Săliște', 'Săliștea de Sus', 'Salonta', 'Sângeorgiu de Pădure', 'Sângeorz-Băi', 'Sânnicolau Mare', 'Sântana', 'Sărmașu', 'Satu Mare', 'Săveni', 'Scornicești',
        'Sebeș', 'Sebiș', 'Segarcea', 'Seini', 'Sfântu Gheorghe', 'Sibiu', 'Sighetu Marmației', 'Sighișoara', 'Simeria', 'Șimleu Silvaniei', 'Sinaia', 'Siret', 'Slănic', 'Slănic-Moldova',
        'Slatina', 'Slobozia', 'Solca', 'Șomcuta Mare', 'Sovata', 'Ștefănești, Argeș', 'Ștefănești, Botoșani', 'Ștei', 'Strehaia', 'Suceava', 'Sulina', 'Tălmaciu', 'Țăndărei', 'Târgoviște',
        'Târgu Bujor', 'Târgu Cărbunești', 'Târgu Frumos', 'Târgu Jiu', 'Târgu Lăpuș', 'Târgu Mureș', 'Târgu Neamț', 'Târgu Ocna', 'Târgu Secuiesc', 'Târnăveni', 'Tășnad', 'Tăuții-Măgherăuș',
        'Techirghiol', 'Tecuci', 'Teiuș', 'Țicleni', 'Timișoara', 'Tismana', 'Titu', 'Toplița', 'Topoloveni', 'Tulcea', 'Turceni', 'Turda', 'Turnu Măgurele','Ulmeni', 'Ungheni', 'Uricani',
        'Urlați', 'Urziceni', 'Valea lui Mihai', 'Vălenii de Munte', 'Vânju Mare', 'Vașcău', 'Vaslui', 'Vatra Dornei', 'Vicovu de Sus', 'Victoria', 'Videle', 'Vișeu de Sus', 'Vlăhița', 'Voluntari',
        'Vulcan', 'Zalău', 'Zărnești', 'Zimnicea', 'Zlatna'
    );

    // http://en.wikipedia.org/wiki/Counties_of_Romania#Current_list
    protected static \$counties = array(
        'Alba', 'Arad', 'Argeș', 'Bacău', 'Bihor', 'Bistrița Năsăud', 'Botoșani', 'Brăila', 'Brașov', 'București', 'Buzău', 'Călărași', 'Caraș-Severin', 'Cluj', 'Constanța', 'Covasna', 'Dâmbovița',
        'Dolj', 'Galați', 'Giurgiu', 'Gorj', 'Harghita', 'Hunedoara', 'Ialomița', 'Iași', 'Ilfov', 'Maramureț', 'Mehedinți', 'Mureș', 'Neamț', 'Olt', 'Prahova', 'Sălaj', 'Satu Mare', 'Sibiu',
        'Suceava', 'Teleorman', 'Timiș', 'Tulcea', 'Vâlcea', 'Vaslui', 'Vrancea'
    );

    // http://ro.wikipedia.org/wiki/Lista_statelor_lumii#Lista_statelor_lumii
    protected static \$country = array(
        'Afganistan', 'Africa de Sud', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua și Barbuda', 'Arabia Saudită', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaidjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Birmania', 'Bolivia', 'Bosnia și Herțegovina', 'Botswana', 'Brazilia', 'Brunei', 'Bulgaria',
        'Burkina Faso', 'Burundi', 'Cambodgia', 'Camerun', 'Canada', 'Capul Verde', 'Cehia', 'Republica Centrafricană', 'Chile', 'Republica Populară Chineză', 'Ciad', 'Cipru', 'Columbia', 'Comore',
        'Republica Democrată Congo', 'Republica Congo', 'Coreea de Nord', 'Coreea de Sud', 'Costa Rica', 'Coasta de Fildeș', 'Croația', 'Cuba', 'Danemarca', 'Djibouti', 'Dominica',
        'Republica Dominicană', 'Ecuador', 'Egipt', 'El Salvador', 'Elveția', 'Emiratele Arabe Unite', 'Eritreea', 'Estonia', 'Etiopia', 'Fiji', 'Filipine', 'Finlanda', 'Franța', 'Gabon', 'Gambia',
        'Georgia', 'Germania', 'Ghana', 'Grecia', 'Grenada', 'Guatemala', 'Guineea', 'Guineea-Bissau', 'Guineea Ecuatorială', 'Guyana', 'Haiti', 'Honduras',
        'India', 'Indonezia', 'Iordania', 'Irak', 'Iran', 'Republica Irlanda', 'Islanda', 'Israel', 'Italia', 'Jamaica', 'Japonia', 'Kazahstan', 'Kenya', 'Kirghizstan', 'Kiribati', 'Kuweit',
        'Laos', 'Lesotho', 'Letonia', 'Liban', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburg', 'Republica Macedonia', 'Madagascar', 'Malawi', 'Malaezia', 'Maldive', 'Mali', 'Malta',
        'Maroc', 'Insulele Marshall', 'Mauritania', 'Mauritius', 'Mexic', 'Statele Federate ale Microneziei', 'Republica Moldova', 'Monaco', 'Mongolia', 'Mozambic', 'Muntenegru', 'Namibia', 'Nauru',
        'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Norvegia', 'Noua Zeelandă', 'Olanda', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua Noua Guinee', 'Paraguay', 'Peru', 'Polonia', 'Portugalia',
        'Qatar', 'Regatul Unit', 'România', 'Rusia', 'Rwanda', 'Samoa', 'San Marino', 'São Tomé și Príncipe', 'São Tomé e Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sfânta Lucia',
        'Sfântul Cristofor și Nevis', 'Saint Vincent and the Grenadines', 'Sierra Leone', 'Singapore', 'Siria', 'Slovacia', 'Slovenia', 'Insulele Solomon', 'Somalia', 'Spania', 'Sri Lanka',
        'Statele Unite ale Americii', 'Sudan', 'Sudanul de Sud', 'Suedia', 'Surinam', 'Swaziland', 'Tadjikistan', 'Tanzania', 'Thailanda', 'Timorul de Est', 'Togo', 'Tonga', 'Trinidad-Tobago',
        'Tunisia', 'Turcia', 'Turkmenistan', 'Tuvalu', 'Ucraina', 'Uganda', 'Ungaria', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
        'Mun. {{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{streetPlainName}}',
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, et. {{floor}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, sc. {{blockSegment}}, et. {{floor}}, ap. {{apartmentNumber}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{city}}, {{county}}, CP {{postcode}}\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function block()
    {
        return static::numerify(static::randomElement(static::\$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::\$blockSegment);
    }

    public static function floor()
    {
        return static::numerify(static::randomElement(static::\$floor));
    }

    public static function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::\$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::\$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName()
    {
        \$format = static::randomElement(static::\$streetNameFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'Cluj'
     */
    public function county()
    {
        return static::randomElement(static::\$counties);
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public function streetAddress()
    {
        \$format = static::randomElement(static::\$streetAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/Address.php");
    }
}
