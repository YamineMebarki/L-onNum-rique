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

/* vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php */
class __TwigTemplate_2117335b6c438316d9ee453bfdf5e803bbcaf2ababffc6702431e6b02231a1b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\nb_NO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('%###', '%##', '%#', '%#?', '%', '%?');

    protected static \$streetPrefix = array(
        \"Øvre\", \"Nedre\", \"Søndre\", \"Gamle\", \"Østre\", \"Vestre\"
    );

    protected static \$streetSuffix = array(
        \"alléen\", \"bakken\", \"berget\", \"bråten\", \"eggen\", \"engen\", \"ekra\", \"faret\", \"flata\", \"gata\", \"gjerdet\", \"grenda\",
        \"gropa\", \"hagen\", \"haugen\", \"havna\", \"holtet\", \"høgda\", \"jordet\", \"kollen\", \"kroken\", \"lia\", \"lunden\", \"lyngen\",
        \"løkka\", \"marka\", \"moen\", \"myra\", \"plassen\", \"ringen\", \"roa\", \"røa\", \"skogen\", \"skrenten\", \"spranget\", \"stien\",
        \"stranda\", \"stubben\", \"stykket\", \"svingen\", \"tjernet\", \"toppen\", \"tunet\", \"vollen\", \"vika\", \"åsen\"
    );

    protected static \$streetSuffixWord = array(
        \"sgate\", \"svei\", \"s Gate\", \"s Vei\", \"gata\", \"veien\"
    );

    protected static \$postcode = array(\"####\", \"####\", \"####\", \"0###\");

    /**
    * @var array Norwegian city names
    * @link https://no.wikipedia.org/wiki/Liste_over_norske_byer
    */
    protected static \$cityNames = array(
        \"Alta\", \"Arendal\", \"Askim\", \"Bergen\", \"Bodø\", \"Brekstad\", \"Brevik\", \"Brumunddal\", \"Bryne\", \"Brønnøysund\",
        \"Drammen\", \"Drøbak\", \"Egersund\", \"Elverum\", \"Fagernes\", \"Farsund\", \"Fauske\", \"Finnsnes\", \"Flekkefjord\", \"Florø\",
        \"Fosnavåg\", \"Fredrikstad\", \"Førde\", \"Gjøvik\", \"Grimstad\", \"Halden\", \"Hamar\", \"Hammerfest\", \"Harstad\",
        \"Haugesund\", \"Hokksund\", \"Holmestrand\", \"Honningsvåg\", \"Horten\", \"Hønefoss\", \"Jessheim\", \"Jørpeland\",
        \"Kirkenes\", \"Kolvereid\", \"Kongsberg\", \"Kongsvinger\", \"Kopervik\", \"Kragerø\", \"Kristiansand\", \"Kristiansund\",
        \"Langesund\", \"Larvik\", \"Leknes\", \"Levanger\", \"Lillehammer\", \"Lillesand\", \"Lillestrøm\", \"Lyngdal\", \"Mandal\",
        \"Mo i Rana\",  \"Moelv\", \"Molde\", \"Mosjøen\", \"Moss\", \"Mysen\", \"Måløy\", \"Namsos\", \"Narvik\", \"Notodden\", \"Odda\",
        \"Orkanger\", \"Oslo\", \"Otta\", \"Porsgrunn\", \"Risør\", \"Rjukan\", \"Røros\", \"Sandefjord\", \"Sandnes\", \"Sandnessjøen\",
        \"Sandvika\", \"Sarpsborg\", \"Sauda\", \"Ski\", \"Skien\", \"Skudeneshavn\", \"Sortland\", \"Stathelle\", \"Stavanger\",
        \"Stavern\", \"Steinkjer\", \"Stjørdalshalsen\", \"Stokmarknes\", \"Stord\", \"Svelvik\", \"Svolvær\", \"Tromsø\", \"Trondheim\",
        \"Tvedestrand\", \"Tønsberg\", \"Ulsteinvik\", \"Vadsø\", \"Vardø\", \"Verdalsøra\", \"Vinstra\", \"Åkrehamn\", \"Ålesund\",
        \"Åndalsnes\", \"Åsgårdstrand\"
    );

    protected static \$cityFormats = array(
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
    * @var array Norwegian municipality names
    * @link https://no.wikipedia.org/wiki/Norges_kommuner
    */
    protected static \$kommuneNames = array(
        \"Halden\", \"Moss\", \"Sarpsborg\", \"Fredrikstad\", \"Hvaler\", \"Aremark\", \"Marker\", \"Rømskog\", \"Trøgstad\", \"Spydeberg\",
        \"Askim\", \"Eidsberg\", \"Skiptvet\", \"Rakkestad\", \"Råde\", \"Rygge\", \"Våler\", \"Hobøl\", \"Vestby\", \"Ski\", \"Ås\", \"Frogn\",
        \"Nesodden\", \"Oppegård\", \"Bærum\", \"Asker\", \"Aurskog-Høland\", \"Sørum\", \"Fet\", \"Rælingen\", \"Enebakk\", \"Lørenskog\",
        \"Skedsmo\", \"Nittedal\", \"Gjerdrum\", \"Ullensaker\", \"Nes\", \"Eidsvoll\", \"Nannestad\", \"Hurdal\", \"Oslo\",
        \"Kongsvinger\", \"Hamar\", \"Ringsaker\", \"Løten\", \"Stange\", \"Nord-Odal\", \"Sør-Odal\", \"Eidskog\", \"Grue\", \"Åsnes\",
        \"Våler\", \"Elverum\", \"Trysil\", \"Åmot\", \"Stor-Elvdal\", \"Rendalen\", \"Engerdal\", \"Tolga\", \"Tynset\", \"Alvdal\",
        \"Folldal\", \"Os\", \"Lillehammer\", \"Gjøvik\", \"Dovre\", \"Lesja\", \"Skjåk\", \"Lom\", \"Vågå\", \"Nord-Fron\", \"Sel\",
        \"Sør-Fron\", \"Ringebu\", \"Øyer\", \"Gausdal\", \"Østre Toten\", \"Vestre Toten\", \"Jevnaker\", \"Lunner\", \"Gran\",
        \"Søndre Land\", \"Nordre Land\", \"Sør-Aurdal\", \"Etnedal\", \"Nord-Aurdal\", \"Vestre Slidre\", \"Øystre Slidre\", \"Vang\",
        \"Drammen\", \"Kongsberg\", \"Ringerike\", \"Hole\", \"Flå\", \"Nes\", \"Gol\", \"Hemsedal\", \"Ål\", \"Hol\", \"Sigdal\",
        \"Krødsherad\", \"Modum\", \"Øvre Eiker\", \"Nedre Eiker\", \"Lier\", \"Røyken\", \"Hurum\", \"Flesberg\", \"Rollag\",
        \"Nore og Uvdal\", \"Horten\", \"Holmestrand\", \"Tønsberg\", \"Sandefjord\", \"Larvik\", \"Svelvik\", \"Sande\", \"Hof\", \"Re\",
        \"Andebu\", \"Stokke\", \"Nøtterøy\", \"Tjøme\", \"Lardal\", \"Porsgrunn\", \"Skien\", \"Notodden\", \"Siljan\", \"Bamble\",
        \"Kragerø\", \"Drangedal\", \"Nome\", \"Bø\", \"Sauherad\", \"Tinn\", \"Hjartdal\", \"Seljord\", \"Kviteseid\", \"Nissedal\",
        \"Fyresdal\", \"Tokke\", \"Vinje\", \"Risør\", \"Grimstad\", \"Arendal\", \"Gjerstad\", \"Vegårshei\", \"Tvedestrand\", \"Froland\",
        \"Lillesand\", \"Birkenes\", \"Åmli\", \"Iveland\", \"Evje og Hornnes\", \"Bygland\", \"Valle\", \"Bykle\", \"Kristiansand\",
        \"Mandal\", \"Farsund\", \"Flekkefjord\", \"Vennesla\", \"Songdalen\", \"Søgne\", \"Marnardal\", \"Åseral\", \"Audnedal\",
        \"Lindesnes\", \"Lyngdal\", \"Hægebostad\", \"Kvinesdal\", \"Sirdal\", \"Eigersund\", \"Sandnes\", \"Stavanger\", \"Haugesund\",
        \"Sokndal\", \"Lund\", \"Bjerkreim\", \"Hå\", \"Klepp\", \"Time\", \"Gjesdal\", \"Sola\", \"Randaberg\", \"Forsand\", \"Strand\",
        \"Hjelmeland\", \"Suldal\", \"Sauda\", \"Finnøy\", \"Rennesøy\", \"Kvitsøy\", \"Bokn\", \"Tysvær\", \"Karmøy\", \"Utsira\",
        \"Vindafjord\", \"Bergen\", \"Etne\", \"Sveio\", \"Bømlo\", \"Stord\", \"Fitjar\", \"Tysnes\", \"Kvinnherad\", \"Jondal\", \"Odda\",
        \"Ullensvang\", \"Eidfjord\", \"Ulvik\", \"Granvin\", \"Voss\", \"Kvam\", \"Fusa\", \"Samnanger\", \"Os\", \"Austevoll\", \"Sund\",
        \"Fjell\", \"Askøy\", \"Vaksdal\", \"Modalen\", \"Osterøy\", \"Meland\", \"Øygarden\", \"Radøy\", \"Lindås\", \"Austrheim\",
        \"Fedje\", \"Masfjorden\", \"Flora\", \"Gulen\", \"Solund\", \"Hyllestad\", \"Høyanger\", \"Vik\", \"Balestrand\", \"Leikanger\",
        \"Sogndal\", \"Aurland\", \"Lærdal\", \"Årdal\", \"Luster\", \"Askvoll\", \"Fjaler\", \"Gaular\", \"Jølster\", \"Førde\",
        \"Naustdal\", \"Bremanger\", \"Vågsøy\", \"Selje\", \"Eid\", \"Hornindal\", \"Gloppen\", \"Stryn\", \"Molde\", \"Ålesund\",
        \"Kristiansund\", \"Vanylven\", \"Sande\", \"Herøy\", \"Ulstein\", \"Hareid\", \"Volda\", \"Ørsta\", \"Ørskog\", \"Norddal\",
        \"Stranda\", \"Stordal\", \"Sykkylven\", \"Skodje\", \"Sula\", \"Giske\", \"Haram\", \"Vestnes\", \"Rauma\", \"Nesset\", \"Midsund\",
        \"Sandøy\", \"Aukra\", \"Fræna\", \"Eide\", \"Averøy\", \"Gjemnes\", \"Tingvoll\", \"Sunndal\", \"Surnadal\", \"Rindal\", \"Halsa\",
        \"Smøla\", \"Aure\", \"Trondheim\", \"Hemne\", \"Snillfjord\", \"Hitra\", \"Frøya\", \"Ørland\", \"Agdenes\", \"Rissa\", \"Bjugn\",
        \"Åfjord\", \"Roan\", \"Osen\", \"Oppdal\", \"Rennebu\", \"Meldal\", \"Orkdal\", \"Røros\", \"Holtålen\", \"Midtre Gauldal\",
        \"Melhus\", \"Skaun\", \"Klæbu\", \"Malvik\", \"Selbu\", \"Tydal\", \"Steinkjer\", \"Namsos\", \"Meråker\", \"Stjørdal\", \"Frosta\",
        \"Leksvik\", \"Levanger\", \"Verdal\", \"Verran\", \"Namdalseid\", \"Inderøy\", \"Snåsa\", \"Lierne\", \"Røyrvik\", \"Namsskogan\",
        \"Grong\", \"Høylandet\", \"Overhalla\", \"Fosnes\", \"Flatanger\", \"Vikna\", \"Nærøy\", \"Leka\", \"Bodø\", \"Narvik\", \"Bindal\",
        \"Sømna\", \"Brønnøy\", \"Vega\", \"Vevelstad\", \"Herøy\", \"Alstahaug\", \"Leirfjord\", \"Vefsn\", \"Grane\", \"Hattfjelldal\",
        \"Dønna\", \"Nesna\", \"Hemnes\", \"Rana\", \"Lurøy\", \"Træna\", \"Rødøy\", \"Meløy\", \"Gildeskål\", \"Beiarn\", \"Saltdal\",
        \"Fauske\", \"Sørfold\", \"Steigen\", \"Hamarøy\", \"Tysfjord\", \"Lødingen\", \"Tjeldsund\", \"Evenes\", \"Ballangen\", \"Røst\",
        \"Værøy\", \"Flakstad\", \"Vestvågøy\", \"Vågan\", \"Hadsel\", \"Bø\", \"Øksnes\", \"Sortland\", \"Andøy\", \"Moskenes\",
        \"Harstad[10]\", \"Tromsø\", \"Kvæfjord\", \"Skånland\", \"Ibestad\", \"Gratangen\", \"Lavangen\", \"Bardu\", \"Salangen\",
        \"Målselv\", \"Sørreisa\", \"Dyrøy\", \"Tranøy\", \"Torsken\", \"Berg\", \"Lenvik\", \"Balsfjord\", \"Karlsøy\", \"Lyngen\",
        \"Storfjord\", \"Kåfjord\", \"Skjervøy\", \"Nordreisa\", \"Kvænangen\", \"Vardø\", \"Vadsø\", \"Hammerfest\", \"Kautokeino\",
        \"Alta\", \"Loppa\", \"Hasvik\", \"Kvalsund\", \"Måsøy\", \"Nordkapp\", \"Porsanger\", \"Karasjok\", \"Lebesby\", \"Gamvik\",
        \"Berlevåg\", \"Tana\", \"Nesseby\", \"Båtsfjord\", \"Sør-Varanger\"
    );


    /**
    * @var array Norwegian county names
    * @link https://no.wikipedia.org/wiki/Norges_fylker
    */
    protected static \$countyNames = array(
        \"Østfold\", \"Akershus\", \"Oslo\", \"Hedmark\", \"Oppland\", \"Buskerud\", \"Vestfold\", \"Telemark\", \"Aust-Agder\",
        \"Vest-Agder\", \"Rogaland\", \"Hordaland\", \"Sogn og Fjordane\", \"Møre og Romsdal\", \"Sør-Trøndelag\", \"Nord-Trøndelag\",
        \"Nordland\", \"Troms\", \"Finnmark\", \"Svalbard\", \"Jan Mayen\", \"Kontinentalsokkelen\"
    );

    protected static \$country = array(
        \"Abkhasia\", \"Afghanistan\", \"Albania\", \"Algerie\", \"Andorra\", \"Angola\", \"Antigua og Barbuda\", \"Argentina\",
        \"Armenia\", \"Aserbajdsjan\", \"Australia\", \"Bahamas\", \"Bahrain\", \"Bangladesh\", \"Barbados\", \"Belgia\", \"Belize\",
        \"Benin\", \"Bhutan\", \"Bolivia\", \"Bosnia-Hercegovina\", \"Botswana\", \"Brasil\", \"Brunei\", \"Bulgaria\", \"Burkina Faso\",
        \"Burundi\", \"Canada\", \"Chile\", \"Colombia\", \"Costa Rica\", \"Cuba\", \"Danmark\", \"De forente arabiske emirater\",
        \"Den demokratiske republikken Kongo\", \"Den dominikanske republikk\", \"Den sentralafrikanske republikk\",
        \"Djibouti\", \"Dominica\", \"Ecuador\", \"Egypt\", \"Ekvatorial-Guinea\", \"Elfenbenskysten\", \"El Salvador\", \"Eritrea\",
        \"Estland\", \"Etiopia\", \"Fiji\", \"Filippinene\", \"Finland\", \"Frankrike\", \"Gabon\", \"Gambia\", \"Georgia\", \"Ghana\",
        \"Grenada\", \"Guatemala\", \"Guinea\", \"Guinea-Bissau\", \"Guyana\", \"Haiti\", \"Hellas\", \"Honduras\", \"Hviterussland\",
        \"India\", \"Indonesia\", \"Irak\", \"Iran\", \"Irland\", \"Island\", \"Israel\", \"Italia\", \"Jamaica\", \"Japan\", \"Jemen\",
        \"Jordan\", \"Kambodsja\", \"Kamerun\", \"Kapp Verde\", \"Kasakhstan\", \"Kenya\", \"Folkerepublikken Kina\", \"Kirgisistan\",
        \"Kiribati\", \"Komorene\", \"Republikken Kongo\", \"Kosovo\", \"Kroatia\", \"Kuwait\", \"Kypros\", \"Laos\", \"Latvia\",
        \"Lesotho\", \"Libanon\", \"Liberia\", \"Libya\", \"Liechtenstein\", \"Litauen\", \"Luxembourg\", \"Madagaskar\", \"Makedonia\",
        \"Malawi\", \"Malaysia\", \"Maldivene\", \"Mali\", \"Malta\", \"Marokko\", \"Marshalløyene\", \"Mauritania\", \"Mauritius\",
        \"Mexico\", \"Mikronesiaføderasjonen\", \"Moldova\", \"Monaco\", \"Mongolia\", \"Montenegro\", \"Mosambik\", \"Myanmar\",
        \"Namibia\", \"Nauru\", \"Nederland\", \"Nepal\", \"New Zealand\", \"Nicaragua\", \"Niger\", \"Nigeria\", \"Nord-Korea\",
        \"Nord-Kypros\", \"Norge\", \"Oman\", \"Pakistan\", \"Palau\", \"Panama\", \"Papua Ny-Guinea\", \"Paraguay\", \"Peru\", \"Polen\",
        \"Portugal\", \"Qatar\", \"Romania\", \"Russland\", \"Rwanda\", \"Saint Kitts og Nevis\", \"Saint Lucia\",
        \"Saint Vincent og Grenadinene\", \"Salomonøyene\", \"Samoa\", \"San Marino\", \"São Tomé og Príncipe\", \"Saudi-Arabia\",
        \"Senegal\", \"Serbia\", \"Seychellene\", \"Sierra Leone\", \"Singapore\", \"Slovakia\", \"Slovenia\", \"Somalia\", \"Spania\",
        \"Sri Lanka\", \"Storbritannia\", \"Sudan\", \"Surinam\", \"Sveits\", \"Sverige\", \"Swaziland\", \"Syria\", \"Sør-Afrika\",
        \"Sør-Korea\", \"Sør-Ossetia\", \"Sør-Sudan\", \"Tadsjikistan\", \"Taiwan\", \"Tanzania\", \"Thailand\", \"Togo\", \"Tonga\",
        \"Transnistria\", \"Trinidad og Tobago\", \"Tsjad\", \"Tsjekkia\", \"Tunisia\", \"Turkmenistan\", \"Tuvalu\", \"Tyrkia\",
        \"Tyskland\", \"Uganda\", \"USA\", \"Ukraina\", \"Ungarn\", \"Uruguay\", \"Usbekistan\", \"Vanuatu\", \"Vatikanstaten\",
        \"Venezuela\", \"Vietnam\", \"Zambia\", \"Zimbabwe\", \"Østerrike\", \"Øst-Timor\"
    );

    /**
    * @var array Norwegian street name formats
    */
    protected static \$streetNameFormats = array(
        '";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 141, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 142, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 143, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 144, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 145, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 146, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 147, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 148, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixWord"]) || array_key_exists("streetSuffixWord", $context) ? $context["streetSuffixWord"] : (function () { throw new RuntimeError('Variable "streetSuffixWord" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
    * @var array Norwegian street address formats
    */
    protected static \$streetAddressFormats = array(
        '";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 156, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
    * @var array Norwegian address formats
    */
    protected static \$addressFormats = array(
        \"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 163, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "\"
    );

    /**
    * Randomly return a real city name
    *
    * @return string
    */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function streetSuffixWord()
    {
        return static::randomElement(static::\$streetSuffixWord);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
    * Randomly return a building number.
    *
    * @return string
    */
    public static function buildingNumber()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$buildingNumber)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 163,  240 => 156,  228 => 149,  223 => 148,  218 => 147,  213 => 146,  208 => 145,  203 => 144,  198 => 143,  193 => 142,  188 => 141,  90 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\nb_NO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('%###', '%##', '%#', '%#?', '%', '%?');

    protected static \$streetPrefix = array(
        \"Øvre\", \"Nedre\", \"Søndre\", \"Gamle\", \"Østre\", \"Vestre\"
    );

    protected static \$streetSuffix = array(
        \"alléen\", \"bakken\", \"berget\", \"bråten\", \"eggen\", \"engen\", \"ekra\", \"faret\", \"flata\", \"gata\", \"gjerdet\", \"grenda\",
        \"gropa\", \"hagen\", \"haugen\", \"havna\", \"holtet\", \"høgda\", \"jordet\", \"kollen\", \"kroken\", \"lia\", \"lunden\", \"lyngen\",
        \"løkka\", \"marka\", \"moen\", \"myra\", \"plassen\", \"ringen\", \"roa\", \"røa\", \"skogen\", \"skrenten\", \"spranget\", \"stien\",
        \"stranda\", \"stubben\", \"stykket\", \"svingen\", \"tjernet\", \"toppen\", \"tunet\", \"vollen\", \"vika\", \"åsen\"
    );

    protected static \$streetSuffixWord = array(
        \"sgate\", \"svei\", \"s Gate\", \"s Vei\", \"gata\", \"veien\"
    );

    protected static \$postcode = array(\"####\", \"####\", \"####\", \"0###\");

    /**
    * @var array Norwegian city names
    * @link https://no.wikipedia.org/wiki/Liste_over_norske_byer
    */
    protected static \$cityNames = array(
        \"Alta\", \"Arendal\", \"Askim\", \"Bergen\", \"Bodø\", \"Brekstad\", \"Brevik\", \"Brumunddal\", \"Bryne\", \"Brønnøysund\",
        \"Drammen\", \"Drøbak\", \"Egersund\", \"Elverum\", \"Fagernes\", \"Farsund\", \"Fauske\", \"Finnsnes\", \"Flekkefjord\", \"Florø\",
        \"Fosnavåg\", \"Fredrikstad\", \"Førde\", \"Gjøvik\", \"Grimstad\", \"Halden\", \"Hamar\", \"Hammerfest\", \"Harstad\",
        \"Haugesund\", \"Hokksund\", \"Holmestrand\", \"Honningsvåg\", \"Horten\", \"Hønefoss\", \"Jessheim\", \"Jørpeland\",
        \"Kirkenes\", \"Kolvereid\", \"Kongsberg\", \"Kongsvinger\", \"Kopervik\", \"Kragerø\", \"Kristiansand\", \"Kristiansund\",
        \"Langesund\", \"Larvik\", \"Leknes\", \"Levanger\", \"Lillehammer\", \"Lillesand\", \"Lillestrøm\", \"Lyngdal\", \"Mandal\",
        \"Mo i Rana\",  \"Moelv\", \"Molde\", \"Mosjøen\", \"Moss\", \"Mysen\", \"Måløy\", \"Namsos\", \"Narvik\", \"Notodden\", \"Odda\",
        \"Orkanger\", \"Oslo\", \"Otta\", \"Porsgrunn\", \"Risør\", \"Rjukan\", \"Røros\", \"Sandefjord\", \"Sandnes\", \"Sandnessjøen\",
        \"Sandvika\", \"Sarpsborg\", \"Sauda\", \"Ski\", \"Skien\", \"Skudeneshavn\", \"Sortland\", \"Stathelle\", \"Stavanger\",
        \"Stavern\", \"Steinkjer\", \"Stjørdalshalsen\", \"Stokmarknes\", \"Stord\", \"Svelvik\", \"Svolvær\", \"Tromsø\", \"Trondheim\",
        \"Tvedestrand\", \"Tønsberg\", \"Ulsteinvik\", \"Vadsø\", \"Vardø\", \"Verdalsøra\", \"Vinstra\", \"Åkrehamn\", \"Ålesund\",
        \"Åndalsnes\", \"Åsgårdstrand\"
    );

    protected static \$cityFormats = array(
        '{{cityName}}'
    );

    /**
    * @var array Norwegian municipality names
    * @link https://no.wikipedia.org/wiki/Norges_kommuner
    */
    protected static \$kommuneNames = array(
        \"Halden\", \"Moss\", \"Sarpsborg\", \"Fredrikstad\", \"Hvaler\", \"Aremark\", \"Marker\", \"Rømskog\", \"Trøgstad\", \"Spydeberg\",
        \"Askim\", \"Eidsberg\", \"Skiptvet\", \"Rakkestad\", \"Råde\", \"Rygge\", \"Våler\", \"Hobøl\", \"Vestby\", \"Ski\", \"Ås\", \"Frogn\",
        \"Nesodden\", \"Oppegård\", \"Bærum\", \"Asker\", \"Aurskog-Høland\", \"Sørum\", \"Fet\", \"Rælingen\", \"Enebakk\", \"Lørenskog\",
        \"Skedsmo\", \"Nittedal\", \"Gjerdrum\", \"Ullensaker\", \"Nes\", \"Eidsvoll\", \"Nannestad\", \"Hurdal\", \"Oslo\",
        \"Kongsvinger\", \"Hamar\", \"Ringsaker\", \"Løten\", \"Stange\", \"Nord-Odal\", \"Sør-Odal\", \"Eidskog\", \"Grue\", \"Åsnes\",
        \"Våler\", \"Elverum\", \"Trysil\", \"Åmot\", \"Stor-Elvdal\", \"Rendalen\", \"Engerdal\", \"Tolga\", \"Tynset\", \"Alvdal\",
        \"Folldal\", \"Os\", \"Lillehammer\", \"Gjøvik\", \"Dovre\", \"Lesja\", \"Skjåk\", \"Lom\", \"Vågå\", \"Nord-Fron\", \"Sel\",
        \"Sør-Fron\", \"Ringebu\", \"Øyer\", \"Gausdal\", \"Østre Toten\", \"Vestre Toten\", \"Jevnaker\", \"Lunner\", \"Gran\",
        \"Søndre Land\", \"Nordre Land\", \"Sør-Aurdal\", \"Etnedal\", \"Nord-Aurdal\", \"Vestre Slidre\", \"Øystre Slidre\", \"Vang\",
        \"Drammen\", \"Kongsberg\", \"Ringerike\", \"Hole\", \"Flå\", \"Nes\", \"Gol\", \"Hemsedal\", \"Ål\", \"Hol\", \"Sigdal\",
        \"Krødsherad\", \"Modum\", \"Øvre Eiker\", \"Nedre Eiker\", \"Lier\", \"Røyken\", \"Hurum\", \"Flesberg\", \"Rollag\",
        \"Nore og Uvdal\", \"Horten\", \"Holmestrand\", \"Tønsberg\", \"Sandefjord\", \"Larvik\", \"Svelvik\", \"Sande\", \"Hof\", \"Re\",
        \"Andebu\", \"Stokke\", \"Nøtterøy\", \"Tjøme\", \"Lardal\", \"Porsgrunn\", \"Skien\", \"Notodden\", \"Siljan\", \"Bamble\",
        \"Kragerø\", \"Drangedal\", \"Nome\", \"Bø\", \"Sauherad\", \"Tinn\", \"Hjartdal\", \"Seljord\", \"Kviteseid\", \"Nissedal\",
        \"Fyresdal\", \"Tokke\", \"Vinje\", \"Risør\", \"Grimstad\", \"Arendal\", \"Gjerstad\", \"Vegårshei\", \"Tvedestrand\", \"Froland\",
        \"Lillesand\", \"Birkenes\", \"Åmli\", \"Iveland\", \"Evje og Hornnes\", \"Bygland\", \"Valle\", \"Bykle\", \"Kristiansand\",
        \"Mandal\", \"Farsund\", \"Flekkefjord\", \"Vennesla\", \"Songdalen\", \"Søgne\", \"Marnardal\", \"Åseral\", \"Audnedal\",
        \"Lindesnes\", \"Lyngdal\", \"Hægebostad\", \"Kvinesdal\", \"Sirdal\", \"Eigersund\", \"Sandnes\", \"Stavanger\", \"Haugesund\",
        \"Sokndal\", \"Lund\", \"Bjerkreim\", \"Hå\", \"Klepp\", \"Time\", \"Gjesdal\", \"Sola\", \"Randaberg\", \"Forsand\", \"Strand\",
        \"Hjelmeland\", \"Suldal\", \"Sauda\", \"Finnøy\", \"Rennesøy\", \"Kvitsøy\", \"Bokn\", \"Tysvær\", \"Karmøy\", \"Utsira\",
        \"Vindafjord\", \"Bergen\", \"Etne\", \"Sveio\", \"Bømlo\", \"Stord\", \"Fitjar\", \"Tysnes\", \"Kvinnherad\", \"Jondal\", \"Odda\",
        \"Ullensvang\", \"Eidfjord\", \"Ulvik\", \"Granvin\", \"Voss\", \"Kvam\", \"Fusa\", \"Samnanger\", \"Os\", \"Austevoll\", \"Sund\",
        \"Fjell\", \"Askøy\", \"Vaksdal\", \"Modalen\", \"Osterøy\", \"Meland\", \"Øygarden\", \"Radøy\", \"Lindås\", \"Austrheim\",
        \"Fedje\", \"Masfjorden\", \"Flora\", \"Gulen\", \"Solund\", \"Hyllestad\", \"Høyanger\", \"Vik\", \"Balestrand\", \"Leikanger\",
        \"Sogndal\", \"Aurland\", \"Lærdal\", \"Årdal\", \"Luster\", \"Askvoll\", \"Fjaler\", \"Gaular\", \"Jølster\", \"Førde\",
        \"Naustdal\", \"Bremanger\", \"Vågsøy\", \"Selje\", \"Eid\", \"Hornindal\", \"Gloppen\", \"Stryn\", \"Molde\", \"Ålesund\",
        \"Kristiansund\", \"Vanylven\", \"Sande\", \"Herøy\", \"Ulstein\", \"Hareid\", \"Volda\", \"Ørsta\", \"Ørskog\", \"Norddal\",
        \"Stranda\", \"Stordal\", \"Sykkylven\", \"Skodje\", \"Sula\", \"Giske\", \"Haram\", \"Vestnes\", \"Rauma\", \"Nesset\", \"Midsund\",
        \"Sandøy\", \"Aukra\", \"Fræna\", \"Eide\", \"Averøy\", \"Gjemnes\", \"Tingvoll\", \"Sunndal\", \"Surnadal\", \"Rindal\", \"Halsa\",
        \"Smøla\", \"Aure\", \"Trondheim\", \"Hemne\", \"Snillfjord\", \"Hitra\", \"Frøya\", \"Ørland\", \"Agdenes\", \"Rissa\", \"Bjugn\",
        \"Åfjord\", \"Roan\", \"Osen\", \"Oppdal\", \"Rennebu\", \"Meldal\", \"Orkdal\", \"Røros\", \"Holtålen\", \"Midtre Gauldal\",
        \"Melhus\", \"Skaun\", \"Klæbu\", \"Malvik\", \"Selbu\", \"Tydal\", \"Steinkjer\", \"Namsos\", \"Meråker\", \"Stjørdal\", \"Frosta\",
        \"Leksvik\", \"Levanger\", \"Verdal\", \"Verran\", \"Namdalseid\", \"Inderøy\", \"Snåsa\", \"Lierne\", \"Røyrvik\", \"Namsskogan\",
        \"Grong\", \"Høylandet\", \"Overhalla\", \"Fosnes\", \"Flatanger\", \"Vikna\", \"Nærøy\", \"Leka\", \"Bodø\", \"Narvik\", \"Bindal\",
        \"Sømna\", \"Brønnøy\", \"Vega\", \"Vevelstad\", \"Herøy\", \"Alstahaug\", \"Leirfjord\", \"Vefsn\", \"Grane\", \"Hattfjelldal\",
        \"Dønna\", \"Nesna\", \"Hemnes\", \"Rana\", \"Lurøy\", \"Træna\", \"Rødøy\", \"Meløy\", \"Gildeskål\", \"Beiarn\", \"Saltdal\",
        \"Fauske\", \"Sørfold\", \"Steigen\", \"Hamarøy\", \"Tysfjord\", \"Lødingen\", \"Tjeldsund\", \"Evenes\", \"Ballangen\", \"Røst\",
        \"Værøy\", \"Flakstad\", \"Vestvågøy\", \"Vågan\", \"Hadsel\", \"Bø\", \"Øksnes\", \"Sortland\", \"Andøy\", \"Moskenes\",
        \"Harstad[10]\", \"Tromsø\", \"Kvæfjord\", \"Skånland\", \"Ibestad\", \"Gratangen\", \"Lavangen\", \"Bardu\", \"Salangen\",
        \"Målselv\", \"Sørreisa\", \"Dyrøy\", \"Tranøy\", \"Torsken\", \"Berg\", \"Lenvik\", \"Balsfjord\", \"Karlsøy\", \"Lyngen\",
        \"Storfjord\", \"Kåfjord\", \"Skjervøy\", \"Nordreisa\", \"Kvænangen\", \"Vardø\", \"Vadsø\", \"Hammerfest\", \"Kautokeino\",
        \"Alta\", \"Loppa\", \"Hasvik\", \"Kvalsund\", \"Måsøy\", \"Nordkapp\", \"Porsanger\", \"Karasjok\", \"Lebesby\", \"Gamvik\",
        \"Berlevåg\", \"Tana\", \"Nesseby\", \"Båtsfjord\", \"Sør-Varanger\"
    );


    /**
    * @var array Norwegian county names
    * @link https://no.wikipedia.org/wiki/Norges_fylker
    */
    protected static \$countyNames = array(
        \"Østfold\", \"Akershus\", \"Oslo\", \"Hedmark\", \"Oppland\", \"Buskerud\", \"Vestfold\", \"Telemark\", \"Aust-Agder\",
        \"Vest-Agder\", \"Rogaland\", \"Hordaland\", \"Sogn og Fjordane\", \"Møre og Romsdal\", \"Sør-Trøndelag\", \"Nord-Trøndelag\",
        \"Nordland\", \"Troms\", \"Finnmark\", \"Svalbard\", \"Jan Mayen\", \"Kontinentalsokkelen\"
    );

    protected static \$country = array(
        \"Abkhasia\", \"Afghanistan\", \"Albania\", \"Algerie\", \"Andorra\", \"Angola\", \"Antigua og Barbuda\", \"Argentina\",
        \"Armenia\", \"Aserbajdsjan\", \"Australia\", \"Bahamas\", \"Bahrain\", \"Bangladesh\", \"Barbados\", \"Belgia\", \"Belize\",
        \"Benin\", \"Bhutan\", \"Bolivia\", \"Bosnia-Hercegovina\", \"Botswana\", \"Brasil\", \"Brunei\", \"Bulgaria\", \"Burkina Faso\",
        \"Burundi\", \"Canada\", \"Chile\", \"Colombia\", \"Costa Rica\", \"Cuba\", \"Danmark\", \"De forente arabiske emirater\",
        \"Den demokratiske republikken Kongo\", \"Den dominikanske republikk\", \"Den sentralafrikanske republikk\",
        \"Djibouti\", \"Dominica\", \"Ecuador\", \"Egypt\", \"Ekvatorial-Guinea\", \"Elfenbenskysten\", \"El Salvador\", \"Eritrea\",
        \"Estland\", \"Etiopia\", \"Fiji\", \"Filippinene\", \"Finland\", \"Frankrike\", \"Gabon\", \"Gambia\", \"Georgia\", \"Ghana\",
        \"Grenada\", \"Guatemala\", \"Guinea\", \"Guinea-Bissau\", \"Guyana\", \"Haiti\", \"Hellas\", \"Honduras\", \"Hviterussland\",
        \"India\", \"Indonesia\", \"Irak\", \"Iran\", \"Irland\", \"Island\", \"Israel\", \"Italia\", \"Jamaica\", \"Japan\", \"Jemen\",
        \"Jordan\", \"Kambodsja\", \"Kamerun\", \"Kapp Verde\", \"Kasakhstan\", \"Kenya\", \"Folkerepublikken Kina\", \"Kirgisistan\",
        \"Kiribati\", \"Komorene\", \"Republikken Kongo\", \"Kosovo\", \"Kroatia\", \"Kuwait\", \"Kypros\", \"Laos\", \"Latvia\",
        \"Lesotho\", \"Libanon\", \"Liberia\", \"Libya\", \"Liechtenstein\", \"Litauen\", \"Luxembourg\", \"Madagaskar\", \"Makedonia\",
        \"Malawi\", \"Malaysia\", \"Maldivene\", \"Mali\", \"Malta\", \"Marokko\", \"Marshalløyene\", \"Mauritania\", \"Mauritius\",
        \"Mexico\", \"Mikronesiaføderasjonen\", \"Moldova\", \"Monaco\", \"Mongolia\", \"Montenegro\", \"Mosambik\", \"Myanmar\",
        \"Namibia\", \"Nauru\", \"Nederland\", \"Nepal\", \"New Zealand\", \"Nicaragua\", \"Niger\", \"Nigeria\", \"Nord-Korea\",
        \"Nord-Kypros\", \"Norge\", \"Oman\", \"Pakistan\", \"Palau\", \"Panama\", \"Papua Ny-Guinea\", \"Paraguay\", \"Peru\", \"Polen\",
        \"Portugal\", \"Qatar\", \"Romania\", \"Russland\", \"Rwanda\", \"Saint Kitts og Nevis\", \"Saint Lucia\",
        \"Saint Vincent og Grenadinene\", \"Salomonøyene\", \"Samoa\", \"San Marino\", \"São Tomé og Príncipe\", \"Saudi-Arabia\",
        \"Senegal\", \"Serbia\", \"Seychellene\", \"Sierra Leone\", \"Singapore\", \"Slovakia\", \"Slovenia\", \"Somalia\", \"Spania\",
        \"Sri Lanka\", \"Storbritannia\", \"Sudan\", \"Surinam\", \"Sveits\", \"Sverige\", \"Swaziland\", \"Syria\", \"Sør-Afrika\",
        \"Sør-Korea\", \"Sør-Ossetia\", \"Sør-Sudan\", \"Tadsjikistan\", \"Taiwan\", \"Tanzania\", \"Thailand\", \"Togo\", \"Tonga\",
        \"Transnistria\", \"Trinidad og Tobago\", \"Tsjad\", \"Tsjekkia\", \"Tunisia\", \"Turkmenistan\", \"Tuvalu\", \"Tyrkia\",
        \"Tyskland\", \"Uganda\", \"USA\", \"Ukraina\", \"Ungarn\", \"Uruguay\", \"Usbekistan\", \"Vanuatu\", \"Vatikanstaten\",
        \"Venezuela\", \"Vietnam\", \"Zambia\", \"Zimbabwe\", \"Østerrike\", \"Øst-Timor\"
    );

    /**
    * @var array Norwegian street name formats
    */
    protected static \$streetNameFormats = array(
        '{{lastName}}{{streetSuffix}}',
        '{{lastName}}{{streetSuffix}}',
        '{{firstName}}{{streetSuffix}}',
        '{{firstName}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{lastName}} {{streetSuffixWord}}'
    );

    /**
    * @var array Norwegian street address formats
    */
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    /**
    * @var array Norwegian address formats
    */
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\"
    );

    /**
    * Randomly return a real city name
    *
    * @return string
    */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public static function streetSuffixWord()
    {
        return static::randomElement(static::\$streetSuffixWord);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
    * Randomly return a building number.
    *
    * @return string
    */
    public static function buildingNumber()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$buildingNumber)));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/nb_NO/Address.php");
    }
}
