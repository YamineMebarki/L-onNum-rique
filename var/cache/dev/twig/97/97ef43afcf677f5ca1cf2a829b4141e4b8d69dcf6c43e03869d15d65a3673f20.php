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

/* vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php */
class __TwigTemplate_41622f2f12c5569ad655d46bd7467c2eee22e28029c7ce83f7aad40296a8bd76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Address extends \\Faker\\Provider\\Address
{
    /**
     * @var array Danish city suffixes.
     */
    protected static \$citySuffix = array(
        'sted', 'bjerg', 'borg', 'rød', 'lund', 'by',
    );

    /**
     * @var array Danish street suffixes.
     */
    protected static \$streetSuffix = array(
        'vej', 'gade', 'skov', 'shaven',
    );

    /**
     * @var array Danish street word suffixes.
     */
    protected static \$streetSuffixWord = array(
        'Vej', 'Gade', 'Allé', 'Boulevard', 'Plads', 'Have',
    );

    /**
     * @var array Danish building numbers.
     */
    protected static \$buildingNumber = array(
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    );

    /**
     * @var array Danish building level.
     */
    protected static \$buildingLevel = array(
        'st.', '%.', '%. sal.',
    );

    /**
     * @var array Danish building sides.
     */
    protected static \$buildingSide = array(
        'tv.', 'th.',
    );

    /**
     * @var array Danish zip code.
     */
    protected static \$postcode = array(
        '%###'
    );

    /**
     * @var array Danish cities.
     */
    protected static \$cityNames = array(
        'Aabenraa', 'Aabybro', 'Aakirkeby', 'Aalborg', 'Aalestrup', 'Aars', 'Aarup', 'Agedrup', 'Agerbæk', 'Agerskov',
        'Albertslund', 'Allerød', 'Allinge', 'Allingåbro', 'Almind', 'Anholt', 'Ansager', 'Arden', 'Asaa', 'Askeby',
        'Asnæs', 'Asperup', 'Assens', 'Augustenborg', 'Aulum', 'Auning', 'Bagenkop', 'Bagsværd', 'Balle', 'Ballerup',
        'Bandholm', 'Barrit', 'Beder', 'Bedsted', 'Bevtoft', 'Billum', 'Billund', 'Bindslev', 'Birkerød', 'Bjerringbro',
        'Bjert', 'Bjæverskov', 'Blokhus', 'Blommenslyst', 'Blåvand', 'Boeslunde', 'Bogense', 'Bogø', 'Bolderslev', 'Bording',
        'Borre', 'Borup', 'Brøndby', 'Brabrand', 'Bramming', 'Brande', 'Branderup', 'Bredebro', 'Bredsten', 'Brenderup',
        'Broager', 'Broby', 'Brovst', 'Bryrup', 'Brædstrup', 'Strand', 'Brønderslev', 'Brønshøj', 'Brørup', 'Bække',
        'Bækmarksbro', 'Bælum', 'Børkop', 'Bøvlingbjerg', 'Charlottenlund', 'Christiansfeld', 'Dalby', 'Dalmose',
        'Dannemare', 'Daugård', 'Dianalund', 'Dragør', 'Dronninglund', 'Dronningmølle', 'Dybvad', 'Dyssegård', 'Ebberup',
        'Ebeltoft', 'Egernsund', 'Egtved', 'Egå', 'Ejby', 'Ejstrupholm', 'Engesvang', 'Errindlev', 'Erslev', 'Esbjerg',
        'Eskebjerg', 'Eskilstrup', 'Espergærde', 'Faaborg', 'Fanø', 'Farsø', 'Farum', 'Faxe', 'Ladeplads', 'Fejø',
        'Ferritslev', 'Fjenneslev', 'Fjerritslev', 'Flemming', 'Fredensborg', 'Fredericia', 'Frederiksberg',
        'Frederikshavn', 'Frederikssund', 'Frederiksværk', 'Frørup', 'Frøstrup', 'Fuglebjerg', 'Føllenslev', 'Føvling',
        'Fårevejle', 'Fårup', 'Fårvang', 'Gadbjerg', 'Gadstrup', 'Galten', 'Gandrup', 'Gedser', 'Gedsted', 'Gedved', 'Gelsted',
        'Gentofte', 'Gesten', 'Gilleleje', 'Gislev', 'Gislinge', 'Gistrup', 'Give', 'Gjerlev', 'Gjern', 'Glamsbjerg',
        'Glejbjerg', 'Glesborg', 'Glostrup', 'Glumsø', 'Gram', 'Gredstedbro', 'Grenaa', 'Greve', 'Grevinge', 'Grindsted',
        'Græsted', 'Gråsten', 'Gudbjerg', 'Sydfyn', 'Gudhjem', 'Gudme', 'Guldborg', 'Gørding', 'Gørlev', 'Gørløse',
        'Haderslev', 'Haderup', 'Hadsten', 'Hadsund', 'Hals', 'Hammel', 'Hampen', 'Hanstholm', 'Harboøre', 'Harlev', 'Harndrup',
        'Harpelunde', 'Hasle', 'Haslev', 'Hasselager', 'Havdrup', 'Havndal', 'Hedehusene', 'Hedensted', 'Hejls', 'Hejnsvig',
        'Hellebæk', 'Hellerup', 'Helsinge', 'Helsingør', 'Hemmet', 'Henne', 'Herfølge', 'Herlev', 'Herlufmagle', 'Herning',
        'Hesselager', 'Hillerød', 'Hinnerup', 'Hirtshals', 'Hjallerup', 'Hjerm', 'Hjortshøj', 'Hjørring', 'Hobro', 'Holbæk',
        'Holeby', 'Holmegaard', 'Holstebro', 'Holsted', 'Holte', 'Horbelev', 'Hornbæk', 'Hornslet', 'Hornsyld', 'Horsens',
        'Horslunde', 'Hovborg', 'Hovedgård', 'Humble', 'Humlebæk', 'Hundested', 'Hundslund', 'Hurup', 'Hvalsø', 'Hvide',
        'Sande', 'Hvidovre', 'Højbjerg', 'Højby', 'Højer', 'Højslev', 'Høng', 'Hørning', 'Hørsholm', 'Hørve', 'Hårlev',
        'Idestrup', 'Ikast', 'Ishøj', 'Janderup', 'Vestj', 'Jelling', 'Jerslev', 'Sjælland', 'Jerup', 'Jordrup', 'Juelsminde',
        'Jyderup', 'Jyllinge', 'Jystrup', 'Midtsj', 'Jægerspris', 'Kalundborg', 'Kalvehave', 'Karby', 'Karise', 'Karlslunde',
        'Karrebæksminde', 'Karup', 'Kastrup', 'Kerteminde', 'Kettinge', 'Kibæk', 'Kirke', 'Hyllinge', 'Såby', 'Kjellerup',
        'Klampenborg', 'Klarup', 'Klemensker', 'Klippinge', 'Klovborg', 'Knebel', 'Kokkedal', 'Kolding', 'Kolind', 'Kongens',
        'Lyngby', 'Kongerslev', 'Korsør', 'Kruså', 'Kvistgård', 'Kværndrup', 'København', 'Køge', 'Langebæk', 'Langeskov',
        'Langå', 'Lejre', 'Lemming', 'Lemvig', 'Lille', 'Skensved', 'Lintrup', 'Liseleje', 'Lundby', 'Lunderskov', 'Lynge',
        'Lystrup', 'Læsø', 'Løgstrup', 'Løgstør', 'Løgumkloster', 'Løkken', 'Løsning', 'Låsby', 'Malling', 'Mariager',
        'Maribo', 'Marslev', 'Marstal', 'Martofte', 'Melby', 'Mern', 'Mesinge', 'Middelfart', 'Millinge', 'Morud', 'Munke',
        'Bjergby', 'Munkebo', 'Møldrup', 'Mørke', 'Mørkøv', 'Måløv', 'Mårslet', 'Nakskov', 'Nexø', 'Nibe', 'Nimtofte',
        'Nordborg', 'Nyborg', 'Nykøbing', 'Nyrup', 'Nysted', 'Nærum', 'Næstved', 'Nørager', 'Nørre', 'Aaby', 'Alslev',
        'Asmindrup', 'Nebel', 'Snede', 'Nørreballe', 'Nørresundby', 'Odder', 'Odense', 'Oksbøl', 'Otterup', 'Oure', 'Outrup',
        'Padborg', 'Pandrup', 'Præstø', 'Randbøl', 'Randers', 'Ranum', 'Rask', 'Mølle', 'Redsted', 'Regstrup', 'Ribe', 'Ringe',
        'Ringkøbing', 'Ringsted', 'Risskov', 'Roskilde', 'Roslev', 'Rude', 'Rudkøbing', 'Ruds', 'Vedby', 'Rungsted', 'Kyst',
        'Rynkeby', 'Ryomgård', 'Ryslinge', 'Rødby', 'Rødding', 'Rødekro', 'Rødkærsbro', 'Rødovre', 'Rødvig', 'Stevns',
        'Rønde', 'Rønne', 'Rønnede', 'Rørvig', 'Sabro', 'Sakskøbing', 'Saltum', 'Samsø', 'Sandved', 'Sejerø', 'Silkeborg',
        'Sindal', 'Sjællands', 'Odde', 'Sjølund', 'Skagen', 'Skals', 'Skamby', 'Skanderborg', 'Skibby', 'Skive', 'Skjern',
        'Skodsborg', 'Skovlunde', 'Skælskør', 'Skærbæk', 'Skævinge', 'Skødstrup', 'Skørping', 'Skårup', 'Slagelse',
        'Slangerup', 'Smørum', 'Snedsted', 'Snekkersten', 'Snertinge', 'Solbjerg', 'Solrød', 'Sommersted', 'Sorring', 'Sorø',
        'Spentrup', 'Spjald', 'Sporup', 'Spøttrup', 'Stakroge', 'Stege', 'Stenderup', 'Stenlille', 'Stenløse', 'Stenstrup',
        'Stensved', 'Stoholm', 'Jyll', 'Stokkemarke', 'Store', 'Fuglede', 'Heddinge', 'Merløse', 'Storvorde', 'Stouby',
        'Strandby', 'Struer', 'Strøby', 'Stubbekøbing', 'Støvring', 'Suldrup', 'Sulsted', 'Sunds', 'Svaneke', 'Svebølle',
        'Svendborg', 'Svenstrup', 'Svinninge', 'Sydals', 'Sæby', 'Søborg', 'Søby', 'Ærø', 'Søllested', 'Sønder', 'Felding',
        'Sønderborg', 'Søndersø', 'Sørvad', 'Taastrup', 'Tappernøje', 'Tarm', 'Terndrup', 'Them', 'Thisted', 'Thorsø',
        'Thyborøn', 'Thyholm', 'Tikøb', 'Tilst', 'Tinglev', 'Tistrup', 'Tisvildeleje', 'Tjele', 'Tjæreborg', 'Toftlund',
        'Tommerup', 'Toreby', 'Torrig', 'Tranbjerg', 'Tranekær', 'Trige', 'Trustrup', 'Tune', 'Tureby', 'Tylstrup', 'Tølløse',
        'Tønder', 'Tørring', 'Tårs', 'Ugerløse', 'Uldum', 'Ulfborg', 'Ullerslev', 'Ulstrup', 'Vadum', 'Valby', 'Vallensbæk',
        'Vamdrup', 'Vandel', 'Vanløse', 'Varde', 'Vedbæk', 'Veflinge', 'Vejby', 'Vejen', 'Vejers', 'Vejle', 'Vejstrup',
        'Veksø', 'Vemb', 'Vemmelev', 'Vesløs', 'Vestbjerg', 'Vester', 'Skerninge', 'Vesterborg', 'Vestervig', 'Viborg', 'Viby',
        'Videbæk', 'Vildbjerg', 'Vils', 'Vinderup', 'Vipperød', 'Virum', 'Vissenbjerg', 'Viuf', 'Vodskov', 'Vojens', 'Vonge',
        'Vorbasse', 'Vordingborg', 'Væggerløse', 'Værløse', 'Ærøskøbing', 'Ølgod', 'Ølsted', 'Ølstykke', 'Ørbæk',
        'Ørnhøj', 'Ørsted', 'Djurs', 'Østbirk', 'Øster', 'Assels', 'Ulslev', 'Østermarie', 'Østervrå', 'Åbyhøj',
        'Ålbæk', 'Ålsgårde', 'Århus', 'Årre', 'Årslev', 'Haarby', 'Nivå', 'Rømø', 'Omme', 'Vrå', 'Ørum',
    );

    /**
     * @var array Danish municipalities, called 'kommuner' in danish.
     */
    protected static \$kommuneNames = array(
        'København', 'Frederiksberg', 'Ballerup', 'Brøndby', 'Dragør', 'Gentofte', 'Gladsaxe', 'Glostrup', 'Herlev',
        'Albertslund', 'Hvidovre', 'Høje Taastrup', 'Lyngby-Taarbæk', 'Rødovre', 'Ishøj', 'Tårnby', 'Vallensbæk',
        'Allerød', 'Fredensborg', 'Helsingør', 'Hillerød', 'Hørsholm', 'Rudersdal', 'Egedal', 'Frederikssund', 'Greve',
        'Halsnæs', 'Roskilde', 'Solrød', 'Gribskov', 'Odsherred', 'Holbæk', 'Faxe', 'Kalundborg', 'Ringsted', 'Slagelse',
        'Stevns', 'Sorø', 'Lejre', 'Lolland', 'Næstved', 'Guldborgsund', 'Vordingborg', 'Bornholm', 'Middelfart',
        'Christiansø', 'Assens', 'Faaborg-Midtfyn', 'Kerteminde', 'Nyborg', 'Odense', 'Svendborg', 'Nordfyns', 'Langeland',
        'Ærø', 'Haderslev', 'Billund', 'Sønderborg', 'Tønder', 'Esbjerg', 'Fanø', 'Varde', 'Vejen', 'Aabenraa',
        'Fredericia', 'Horsens', 'Kolding', 'Vejle', 'Herning', 'Holstebro', 'Lemvig', 'Struer', 'Syddjurs', 'Furesø',
        'Norddjurs', 'Favrskov', 'Odder', 'Randers', 'Silkeborg', 'Samsø', 'Skanderborg', 'Aarhus', 'Ikast-Brande',
        'Ringkøbing-Skjern', 'Hedensted', 'Morsø', 'Skive', 'Thisted', 'Viborg', 'Brønderslev', 'Frederikshavn',
        'Vesthimmerlands', 'Læsø', 'Rebild', 'Mariagerfjord', 'Jammerbugt', 'Aalborg', 'Hjørring', 'Køge',
    );

    /**
     * @var array Danish regions.
     */
    protected static \$regionNames = array(
        'Region Nordjylland', 'Region Midtjylland', 'Region Syddanmark', 'Region Hovedstaden', 'Region Sjælland',
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/da_DK/country.php
     *
     * @var array Some countries in danish.
     */
    protected static \$country = array(
        'Andorra', 'Forenede Arabiske Emirater', 'Afghanistan', 'Antigua og Barbuda', 'Anguilla', 'Albanien', 'Armenien',
        'Hollandske Antiller', 'Angola', 'Antarktis', 'Argentina', 'Amerikansk Samoa', 'Østrig', 'Australien', 'Aruba',
        'Åland', 'Aserbajdsjan', 'Bosnien-Hercegovina', 'Barbados', 'Bangladesh', 'Belgien', 'Burkina Faso', 'Bulgarien',
        'Bahrain', 'Burundi', 'Benin', 'Saint Barthélemy', 'Bermuda', 'Brunei Darussalam', 'Bolivia', 'Brasilien', 'Bahamas',
        'Bhutan', 'Bouvetø', 'Botswana', 'Hviderusland', 'Belize', 'Canada', 'Cocosøerne', 'Congo-Kinshasa',
        'Centralafrikanske Republik', 'Congo', 'Schweiz', 'Elfenbenskysten', 'Cook-øerne', 'Chile', 'Cameroun', 'Kina',
        'Colombia', 'Costa Rica', 'Serbien og Montenegro', 'Cuba', 'Kap Verde', 'Juleøen', 'Cypern', 'Tjekkiet', 'Tyskland',
        'Djibouti', 'Danmark', 'Dominica', 'Den Dominikanske Republik', 'Algeriet', 'Ecuador', 'Estland', 'Egypten',
        'Vestsahara', 'Eritrea', 'Spanien', 'Etiopien', 'Finland', 'Fiji-øerne', 'Falklandsøerne',
        'Mikronesiens Forenede Stater', 'Færøerne', 'Frankrig', 'Gabon', 'Storbritannien', 'Grenada', 'Georgien',
        'Fransk Guyana', 'Guernsey', 'Ghana', 'Gibraltar', 'Grønland', 'Gambia', 'Guinea', 'Guadeloupe', 'Ækvatorialguinea',
        'Grækenland', 'South Georgia og De Sydlige Sandwichøer', 'Guatemala', 'Guam', 'Guinea-Bissau', 'Guyana',
        'SAR Hongkong', 'Heard- og McDonald-øerne', 'Honduras', 'Kroatien', 'Haiti', 'Ungarn', 'Indonesien', 'Irland',
        'Israel', 'Isle of Man', 'Indien', 'Det Britiske Territorium i Det Indiske Ocean', 'Irak', 'Iran', 'Island',
        'Italien', 'Jersey', 'Jamaica', 'Jordan', 'Japan', 'Kenya', 'Kirgisistan', 'Cambodja', 'Kiribati', 'Comorerne',
        'Saint Kitts og Nevis', 'Nordkorea', 'Sydkorea', 'Kuwait', 'Caymanøerne', 'Kasakhstan', 'Laos', 'Libanon',
        'Saint Lucia', 'Liechtenstein', 'Sri Lanka', 'Liberia', 'Lesotho', 'Litauen', 'Luxembourg', 'Letland', 'Libyen',
        'Marokko', 'Monaco', 'Republikken Moldova', 'Montenegro', 'Saint Martin', 'Madagaskar', 'Marshalløerne',
        'Republikken Makedonien', 'Mali', 'Myanmar', 'Mongoliet', 'SAR Macao', 'Nordmarianerne', 'Martinique',
        'Mauretanien', 'Montserrat', 'Malta', 'Mauritius', 'Maldiverne', 'Malawi', 'Mexico', 'Malaysia', 'Mozambique',
        'Namibia', 'Ny Caledonien', 'Niger', 'Norfolk Island', 'Nigeria', 'Nicaragua', 'Holland', 'Norge', 'Nepal', 'Nauru',
        'Niue', 'New Zealand', 'Oman', 'Panama', 'Peru', 'Fransk Polynesien', 'Papua Ny Guinea', 'Filippinerne', 'Pakistan',
        'Polen', 'Saint Pierre og Miquelon', 'Pitcairn', 'Puerto Rico', 'De palæstinensiske områder', 'Portugal', 'Palau',
        'Paraguay', 'Qatar', 'Reunion', 'Rumænien', 'Serbien', 'Rusland', 'Rwanda', 'Saudi-Arabien', 'Salomonøerne',
        'Seychellerne', 'Sudan', 'Sverige', 'Singapore', 'St. Helena', 'Slovenien', 'Svalbard og Jan Mayen', 'Slovakiet',
        'Sierra Leone', 'San Marino', 'Senegal', 'Somalia', 'Surinam', 'Sao Tome og Principe', 'El Salvador', 'Syrien',
        'Swaziland', 'Turks- og Caicosøerne', 'Tchad', 'Franske Besiddelser i Det Sydlige Indiske Ocean', 'Togo',
        'Thailand', 'Tadsjikistan', 'Tokelau', 'Timor-Leste', 'Turkmenistan', 'Tunesien', 'Tonga', 'Tyrkiet',
        'Trinidad og Tobago', 'Tuvalu', 'Taiwan', 'Tanzania', 'Ukraine', 'Uganda', 'De Mindre Amerikanske Oversøiske Øer',
        'USA', 'Uruguay', 'Usbekistan', 'Vatikanstaten', 'St. Vincent og Grenadinerne', 'Venezuela',
        'De britiske jomfruøer', 'De amerikanske jomfruøer', 'Vietnam', 'Vanuatu', 'Wallis og Futunaøerne', 'Samoa',
        'Yemen', 'Mayotte', 'Sydafrika', 'Zambia', 'Zimbabwe',
    );

    /**
     * @var array Danish city format.
     */
    protected static \$cityFormats = array(
        '";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Danish street's name formats.
     */
    protected static \$streetNameFormats = array(
        '";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 196, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 197, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 198, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixWord"]) || array_key_exists("streetSuffixWord", $context) ? $context["streetSuffixWord"] : (function () { throw new RuntimeError('Variable "streetSuffixWord" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 199, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixWord"]) || array_key_exists("streetSuffixWord", $context) ? $context["streetSuffixWord"] : (function () { throw new RuntimeError('Variable "streetSuffixWord" does not exist.', 199, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Danish street's address formats.
     */
    protected static \$streetAddressFormats = array(
        '";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 206, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 207, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingLevel"]) || array_key_exists("buildingLevel", $context) ? $context["buildingLevel"] : (function () { throw new RuntimeError('Variable "buildingLevel" does not exist.', 207, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 208, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 208, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingLevel"]) || array_key_exists("buildingLevel", $context) ? $context["buildingLevel"] : (function () { throw new RuntimeError('Variable "buildingLevel" does not exist.', 208, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingSide"]) || array_key_exists("buildingSide", $context) ? $context["buildingSide"] : (function () { throw new RuntimeError('Variable "buildingSide" does not exist.', 208, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Danish address format.
     */
    protected static \$addressFormats = array(
        \"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 215, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 215, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * Randomly return a real city name.
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Randomly return a suffix word.
     *
     * @return string
     */
    public static function streetSuffixWord()
    {
        return static::randomElement(static::\$streetSuffixWord);
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

    /**
     * Randomly return a building level.
     *
     * @return string
     */
    public static function buildingLevel()
    {
        return static::numerify(static::randomElement(static::\$buildingLevel));
    }

    /**
     * Randomly return a side of the building.
     *
     * @return string
     */
    public static function buildingSide()
    {
        return static::randomElement(static::\$buildingSide);
    }

    /**
     * Randomly return a real municipality name, called 'kommune' in danish.
     *
     * @return string
     */
    public static function kommune()
    {
        return static::randomElement(static::\$kommuneNames);
    }

    /**
     * Randomly return a real region name.
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regionNames);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 215,  285 => 208,  277 => 207,  271 => 206,  259 => 199,  253 => 198,  248 => 197,  243 => 196,  233 => 189,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Address extends \\Faker\\Provider\\Address
{
    /**
     * @var array Danish city suffixes.
     */
    protected static \$citySuffix = array(
        'sted', 'bjerg', 'borg', 'rød', 'lund', 'by',
    );

    /**
     * @var array Danish street suffixes.
     */
    protected static \$streetSuffix = array(
        'vej', 'gade', 'skov', 'shaven',
    );

    /**
     * @var array Danish street word suffixes.
     */
    protected static \$streetSuffixWord = array(
        'Vej', 'Gade', 'Allé', 'Boulevard', 'Plads', 'Have',
    );

    /**
     * @var array Danish building numbers.
     */
    protected static \$buildingNumber = array(
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    );

    /**
     * @var array Danish building level.
     */
    protected static \$buildingLevel = array(
        'st.', '%.', '%. sal.',
    );

    /**
     * @var array Danish building sides.
     */
    protected static \$buildingSide = array(
        'tv.', 'th.',
    );

    /**
     * @var array Danish zip code.
     */
    protected static \$postcode = array(
        '%###'
    );

    /**
     * @var array Danish cities.
     */
    protected static \$cityNames = array(
        'Aabenraa', 'Aabybro', 'Aakirkeby', 'Aalborg', 'Aalestrup', 'Aars', 'Aarup', 'Agedrup', 'Agerbæk', 'Agerskov',
        'Albertslund', 'Allerød', 'Allinge', 'Allingåbro', 'Almind', 'Anholt', 'Ansager', 'Arden', 'Asaa', 'Askeby',
        'Asnæs', 'Asperup', 'Assens', 'Augustenborg', 'Aulum', 'Auning', 'Bagenkop', 'Bagsværd', 'Balle', 'Ballerup',
        'Bandholm', 'Barrit', 'Beder', 'Bedsted', 'Bevtoft', 'Billum', 'Billund', 'Bindslev', 'Birkerød', 'Bjerringbro',
        'Bjert', 'Bjæverskov', 'Blokhus', 'Blommenslyst', 'Blåvand', 'Boeslunde', 'Bogense', 'Bogø', 'Bolderslev', 'Bording',
        'Borre', 'Borup', 'Brøndby', 'Brabrand', 'Bramming', 'Brande', 'Branderup', 'Bredebro', 'Bredsten', 'Brenderup',
        'Broager', 'Broby', 'Brovst', 'Bryrup', 'Brædstrup', 'Strand', 'Brønderslev', 'Brønshøj', 'Brørup', 'Bække',
        'Bækmarksbro', 'Bælum', 'Børkop', 'Bøvlingbjerg', 'Charlottenlund', 'Christiansfeld', 'Dalby', 'Dalmose',
        'Dannemare', 'Daugård', 'Dianalund', 'Dragør', 'Dronninglund', 'Dronningmølle', 'Dybvad', 'Dyssegård', 'Ebberup',
        'Ebeltoft', 'Egernsund', 'Egtved', 'Egå', 'Ejby', 'Ejstrupholm', 'Engesvang', 'Errindlev', 'Erslev', 'Esbjerg',
        'Eskebjerg', 'Eskilstrup', 'Espergærde', 'Faaborg', 'Fanø', 'Farsø', 'Farum', 'Faxe', 'Ladeplads', 'Fejø',
        'Ferritslev', 'Fjenneslev', 'Fjerritslev', 'Flemming', 'Fredensborg', 'Fredericia', 'Frederiksberg',
        'Frederikshavn', 'Frederikssund', 'Frederiksværk', 'Frørup', 'Frøstrup', 'Fuglebjerg', 'Føllenslev', 'Føvling',
        'Fårevejle', 'Fårup', 'Fårvang', 'Gadbjerg', 'Gadstrup', 'Galten', 'Gandrup', 'Gedser', 'Gedsted', 'Gedved', 'Gelsted',
        'Gentofte', 'Gesten', 'Gilleleje', 'Gislev', 'Gislinge', 'Gistrup', 'Give', 'Gjerlev', 'Gjern', 'Glamsbjerg',
        'Glejbjerg', 'Glesborg', 'Glostrup', 'Glumsø', 'Gram', 'Gredstedbro', 'Grenaa', 'Greve', 'Grevinge', 'Grindsted',
        'Græsted', 'Gråsten', 'Gudbjerg', 'Sydfyn', 'Gudhjem', 'Gudme', 'Guldborg', 'Gørding', 'Gørlev', 'Gørløse',
        'Haderslev', 'Haderup', 'Hadsten', 'Hadsund', 'Hals', 'Hammel', 'Hampen', 'Hanstholm', 'Harboøre', 'Harlev', 'Harndrup',
        'Harpelunde', 'Hasle', 'Haslev', 'Hasselager', 'Havdrup', 'Havndal', 'Hedehusene', 'Hedensted', 'Hejls', 'Hejnsvig',
        'Hellebæk', 'Hellerup', 'Helsinge', 'Helsingør', 'Hemmet', 'Henne', 'Herfølge', 'Herlev', 'Herlufmagle', 'Herning',
        'Hesselager', 'Hillerød', 'Hinnerup', 'Hirtshals', 'Hjallerup', 'Hjerm', 'Hjortshøj', 'Hjørring', 'Hobro', 'Holbæk',
        'Holeby', 'Holmegaard', 'Holstebro', 'Holsted', 'Holte', 'Horbelev', 'Hornbæk', 'Hornslet', 'Hornsyld', 'Horsens',
        'Horslunde', 'Hovborg', 'Hovedgård', 'Humble', 'Humlebæk', 'Hundested', 'Hundslund', 'Hurup', 'Hvalsø', 'Hvide',
        'Sande', 'Hvidovre', 'Højbjerg', 'Højby', 'Højer', 'Højslev', 'Høng', 'Hørning', 'Hørsholm', 'Hørve', 'Hårlev',
        'Idestrup', 'Ikast', 'Ishøj', 'Janderup', 'Vestj', 'Jelling', 'Jerslev', 'Sjælland', 'Jerup', 'Jordrup', 'Juelsminde',
        'Jyderup', 'Jyllinge', 'Jystrup', 'Midtsj', 'Jægerspris', 'Kalundborg', 'Kalvehave', 'Karby', 'Karise', 'Karlslunde',
        'Karrebæksminde', 'Karup', 'Kastrup', 'Kerteminde', 'Kettinge', 'Kibæk', 'Kirke', 'Hyllinge', 'Såby', 'Kjellerup',
        'Klampenborg', 'Klarup', 'Klemensker', 'Klippinge', 'Klovborg', 'Knebel', 'Kokkedal', 'Kolding', 'Kolind', 'Kongens',
        'Lyngby', 'Kongerslev', 'Korsør', 'Kruså', 'Kvistgård', 'Kværndrup', 'København', 'Køge', 'Langebæk', 'Langeskov',
        'Langå', 'Lejre', 'Lemming', 'Lemvig', 'Lille', 'Skensved', 'Lintrup', 'Liseleje', 'Lundby', 'Lunderskov', 'Lynge',
        'Lystrup', 'Læsø', 'Løgstrup', 'Løgstør', 'Løgumkloster', 'Løkken', 'Løsning', 'Låsby', 'Malling', 'Mariager',
        'Maribo', 'Marslev', 'Marstal', 'Martofte', 'Melby', 'Mern', 'Mesinge', 'Middelfart', 'Millinge', 'Morud', 'Munke',
        'Bjergby', 'Munkebo', 'Møldrup', 'Mørke', 'Mørkøv', 'Måløv', 'Mårslet', 'Nakskov', 'Nexø', 'Nibe', 'Nimtofte',
        'Nordborg', 'Nyborg', 'Nykøbing', 'Nyrup', 'Nysted', 'Nærum', 'Næstved', 'Nørager', 'Nørre', 'Aaby', 'Alslev',
        'Asmindrup', 'Nebel', 'Snede', 'Nørreballe', 'Nørresundby', 'Odder', 'Odense', 'Oksbøl', 'Otterup', 'Oure', 'Outrup',
        'Padborg', 'Pandrup', 'Præstø', 'Randbøl', 'Randers', 'Ranum', 'Rask', 'Mølle', 'Redsted', 'Regstrup', 'Ribe', 'Ringe',
        'Ringkøbing', 'Ringsted', 'Risskov', 'Roskilde', 'Roslev', 'Rude', 'Rudkøbing', 'Ruds', 'Vedby', 'Rungsted', 'Kyst',
        'Rynkeby', 'Ryomgård', 'Ryslinge', 'Rødby', 'Rødding', 'Rødekro', 'Rødkærsbro', 'Rødovre', 'Rødvig', 'Stevns',
        'Rønde', 'Rønne', 'Rønnede', 'Rørvig', 'Sabro', 'Sakskøbing', 'Saltum', 'Samsø', 'Sandved', 'Sejerø', 'Silkeborg',
        'Sindal', 'Sjællands', 'Odde', 'Sjølund', 'Skagen', 'Skals', 'Skamby', 'Skanderborg', 'Skibby', 'Skive', 'Skjern',
        'Skodsborg', 'Skovlunde', 'Skælskør', 'Skærbæk', 'Skævinge', 'Skødstrup', 'Skørping', 'Skårup', 'Slagelse',
        'Slangerup', 'Smørum', 'Snedsted', 'Snekkersten', 'Snertinge', 'Solbjerg', 'Solrød', 'Sommersted', 'Sorring', 'Sorø',
        'Spentrup', 'Spjald', 'Sporup', 'Spøttrup', 'Stakroge', 'Stege', 'Stenderup', 'Stenlille', 'Stenløse', 'Stenstrup',
        'Stensved', 'Stoholm', 'Jyll', 'Stokkemarke', 'Store', 'Fuglede', 'Heddinge', 'Merløse', 'Storvorde', 'Stouby',
        'Strandby', 'Struer', 'Strøby', 'Stubbekøbing', 'Støvring', 'Suldrup', 'Sulsted', 'Sunds', 'Svaneke', 'Svebølle',
        'Svendborg', 'Svenstrup', 'Svinninge', 'Sydals', 'Sæby', 'Søborg', 'Søby', 'Ærø', 'Søllested', 'Sønder', 'Felding',
        'Sønderborg', 'Søndersø', 'Sørvad', 'Taastrup', 'Tappernøje', 'Tarm', 'Terndrup', 'Them', 'Thisted', 'Thorsø',
        'Thyborøn', 'Thyholm', 'Tikøb', 'Tilst', 'Tinglev', 'Tistrup', 'Tisvildeleje', 'Tjele', 'Tjæreborg', 'Toftlund',
        'Tommerup', 'Toreby', 'Torrig', 'Tranbjerg', 'Tranekær', 'Trige', 'Trustrup', 'Tune', 'Tureby', 'Tylstrup', 'Tølløse',
        'Tønder', 'Tørring', 'Tårs', 'Ugerløse', 'Uldum', 'Ulfborg', 'Ullerslev', 'Ulstrup', 'Vadum', 'Valby', 'Vallensbæk',
        'Vamdrup', 'Vandel', 'Vanløse', 'Varde', 'Vedbæk', 'Veflinge', 'Vejby', 'Vejen', 'Vejers', 'Vejle', 'Vejstrup',
        'Veksø', 'Vemb', 'Vemmelev', 'Vesløs', 'Vestbjerg', 'Vester', 'Skerninge', 'Vesterborg', 'Vestervig', 'Viborg', 'Viby',
        'Videbæk', 'Vildbjerg', 'Vils', 'Vinderup', 'Vipperød', 'Virum', 'Vissenbjerg', 'Viuf', 'Vodskov', 'Vojens', 'Vonge',
        'Vorbasse', 'Vordingborg', 'Væggerløse', 'Værløse', 'Ærøskøbing', 'Ølgod', 'Ølsted', 'Ølstykke', 'Ørbæk',
        'Ørnhøj', 'Ørsted', 'Djurs', 'Østbirk', 'Øster', 'Assels', 'Ulslev', 'Østermarie', 'Østervrå', 'Åbyhøj',
        'Ålbæk', 'Ålsgårde', 'Århus', 'Årre', 'Årslev', 'Haarby', 'Nivå', 'Rømø', 'Omme', 'Vrå', 'Ørum',
    );

    /**
     * @var array Danish municipalities, called 'kommuner' in danish.
     */
    protected static \$kommuneNames = array(
        'København', 'Frederiksberg', 'Ballerup', 'Brøndby', 'Dragør', 'Gentofte', 'Gladsaxe', 'Glostrup', 'Herlev',
        'Albertslund', 'Hvidovre', 'Høje Taastrup', 'Lyngby-Taarbæk', 'Rødovre', 'Ishøj', 'Tårnby', 'Vallensbæk',
        'Allerød', 'Fredensborg', 'Helsingør', 'Hillerød', 'Hørsholm', 'Rudersdal', 'Egedal', 'Frederikssund', 'Greve',
        'Halsnæs', 'Roskilde', 'Solrød', 'Gribskov', 'Odsherred', 'Holbæk', 'Faxe', 'Kalundborg', 'Ringsted', 'Slagelse',
        'Stevns', 'Sorø', 'Lejre', 'Lolland', 'Næstved', 'Guldborgsund', 'Vordingborg', 'Bornholm', 'Middelfart',
        'Christiansø', 'Assens', 'Faaborg-Midtfyn', 'Kerteminde', 'Nyborg', 'Odense', 'Svendborg', 'Nordfyns', 'Langeland',
        'Ærø', 'Haderslev', 'Billund', 'Sønderborg', 'Tønder', 'Esbjerg', 'Fanø', 'Varde', 'Vejen', 'Aabenraa',
        'Fredericia', 'Horsens', 'Kolding', 'Vejle', 'Herning', 'Holstebro', 'Lemvig', 'Struer', 'Syddjurs', 'Furesø',
        'Norddjurs', 'Favrskov', 'Odder', 'Randers', 'Silkeborg', 'Samsø', 'Skanderborg', 'Aarhus', 'Ikast-Brande',
        'Ringkøbing-Skjern', 'Hedensted', 'Morsø', 'Skive', 'Thisted', 'Viborg', 'Brønderslev', 'Frederikshavn',
        'Vesthimmerlands', 'Læsø', 'Rebild', 'Mariagerfjord', 'Jammerbugt', 'Aalborg', 'Hjørring', 'Køge',
    );

    /**
     * @var array Danish regions.
     */
    protected static \$regionNames = array(
        'Region Nordjylland', 'Region Midtjylland', 'Region Syddanmark', 'Region Hovedstaden', 'Region Sjælland',
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/da_DK/country.php
     *
     * @var array Some countries in danish.
     */
    protected static \$country = array(
        'Andorra', 'Forenede Arabiske Emirater', 'Afghanistan', 'Antigua og Barbuda', 'Anguilla', 'Albanien', 'Armenien',
        'Hollandske Antiller', 'Angola', 'Antarktis', 'Argentina', 'Amerikansk Samoa', 'Østrig', 'Australien', 'Aruba',
        'Åland', 'Aserbajdsjan', 'Bosnien-Hercegovina', 'Barbados', 'Bangladesh', 'Belgien', 'Burkina Faso', 'Bulgarien',
        'Bahrain', 'Burundi', 'Benin', 'Saint Barthélemy', 'Bermuda', 'Brunei Darussalam', 'Bolivia', 'Brasilien', 'Bahamas',
        'Bhutan', 'Bouvetø', 'Botswana', 'Hviderusland', 'Belize', 'Canada', 'Cocosøerne', 'Congo-Kinshasa',
        'Centralafrikanske Republik', 'Congo', 'Schweiz', 'Elfenbenskysten', 'Cook-øerne', 'Chile', 'Cameroun', 'Kina',
        'Colombia', 'Costa Rica', 'Serbien og Montenegro', 'Cuba', 'Kap Verde', 'Juleøen', 'Cypern', 'Tjekkiet', 'Tyskland',
        'Djibouti', 'Danmark', 'Dominica', 'Den Dominikanske Republik', 'Algeriet', 'Ecuador', 'Estland', 'Egypten',
        'Vestsahara', 'Eritrea', 'Spanien', 'Etiopien', 'Finland', 'Fiji-øerne', 'Falklandsøerne',
        'Mikronesiens Forenede Stater', 'Færøerne', 'Frankrig', 'Gabon', 'Storbritannien', 'Grenada', 'Georgien',
        'Fransk Guyana', 'Guernsey', 'Ghana', 'Gibraltar', 'Grønland', 'Gambia', 'Guinea', 'Guadeloupe', 'Ækvatorialguinea',
        'Grækenland', 'South Georgia og De Sydlige Sandwichøer', 'Guatemala', 'Guam', 'Guinea-Bissau', 'Guyana',
        'SAR Hongkong', 'Heard- og McDonald-øerne', 'Honduras', 'Kroatien', 'Haiti', 'Ungarn', 'Indonesien', 'Irland',
        'Israel', 'Isle of Man', 'Indien', 'Det Britiske Territorium i Det Indiske Ocean', 'Irak', 'Iran', 'Island',
        'Italien', 'Jersey', 'Jamaica', 'Jordan', 'Japan', 'Kenya', 'Kirgisistan', 'Cambodja', 'Kiribati', 'Comorerne',
        'Saint Kitts og Nevis', 'Nordkorea', 'Sydkorea', 'Kuwait', 'Caymanøerne', 'Kasakhstan', 'Laos', 'Libanon',
        'Saint Lucia', 'Liechtenstein', 'Sri Lanka', 'Liberia', 'Lesotho', 'Litauen', 'Luxembourg', 'Letland', 'Libyen',
        'Marokko', 'Monaco', 'Republikken Moldova', 'Montenegro', 'Saint Martin', 'Madagaskar', 'Marshalløerne',
        'Republikken Makedonien', 'Mali', 'Myanmar', 'Mongoliet', 'SAR Macao', 'Nordmarianerne', 'Martinique',
        'Mauretanien', 'Montserrat', 'Malta', 'Mauritius', 'Maldiverne', 'Malawi', 'Mexico', 'Malaysia', 'Mozambique',
        'Namibia', 'Ny Caledonien', 'Niger', 'Norfolk Island', 'Nigeria', 'Nicaragua', 'Holland', 'Norge', 'Nepal', 'Nauru',
        'Niue', 'New Zealand', 'Oman', 'Panama', 'Peru', 'Fransk Polynesien', 'Papua Ny Guinea', 'Filippinerne', 'Pakistan',
        'Polen', 'Saint Pierre og Miquelon', 'Pitcairn', 'Puerto Rico', 'De palæstinensiske områder', 'Portugal', 'Palau',
        'Paraguay', 'Qatar', 'Reunion', 'Rumænien', 'Serbien', 'Rusland', 'Rwanda', 'Saudi-Arabien', 'Salomonøerne',
        'Seychellerne', 'Sudan', 'Sverige', 'Singapore', 'St. Helena', 'Slovenien', 'Svalbard og Jan Mayen', 'Slovakiet',
        'Sierra Leone', 'San Marino', 'Senegal', 'Somalia', 'Surinam', 'Sao Tome og Principe', 'El Salvador', 'Syrien',
        'Swaziland', 'Turks- og Caicosøerne', 'Tchad', 'Franske Besiddelser i Det Sydlige Indiske Ocean', 'Togo',
        'Thailand', 'Tadsjikistan', 'Tokelau', 'Timor-Leste', 'Turkmenistan', 'Tunesien', 'Tonga', 'Tyrkiet',
        'Trinidad og Tobago', 'Tuvalu', 'Taiwan', 'Tanzania', 'Ukraine', 'Uganda', 'De Mindre Amerikanske Oversøiske Øer',
        'USA', 'Uruguay', 'Usbekistan', 'Vatikanstaten', 'St. Vincent og Grenadinerne', 'Venezuela',
        'De britiske jomfruøer', 'De amerikanske jomfruøer', 'Vietnam', 'Vanuatu', 'Wallis og Futunaøerne', 'Samoa',
        'Yemen', 'Mayotte', 'Sydafrika', 'Zambia', 'Zimbabwe',
    );

    /**
     * @var array Danish city format.
     */
    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    /**
     * @var array Danish street's name formats.
     */
    protected static \$streetNameFormats = array(
        '{{lastName}}{{streetSuffix}}',
        '{{middleName}}{{streetSuffix}}',
        '{{lastName}} {{streetSuffixWord}}',
        '{{middleName}} {{streetSuffixWord}}',
    );

    /**
     * @var array Danish street's address formats.
     */
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}, {{buildingLevel}}',
        '{{streetName}} {{buildingNumber}}, {{buildingLevel}} {{buildingSide}}',
    );

    /**
     * @var array Danish address format.
     */
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    /**
     * Randomly return a real city name.
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Randomly return a suffix word.
     *
     * @return string
     */
    public static function streetSuffixWord()
    {
        return static::randomElement(static::\$streetSuffixWord);
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

    /**
     * Randomly return a building level.
     *
     * @return string
     */
    public static function buildingLevel()
    {
        return static::numerify(static::randomElement(static::\$buildingLevel));
    }

    /**
     * Randomly return a side of the building.
     *
     * @return string
     */
    public static function buildingSide()
    {
        return static::randomElement(static::\$buildingSide);
    }

    /**
     * Randomly return a real municipality name, called 'kommune' in danish.
     *
     * @return string
     */
    public static function kommune()
    {
        return static::randomElement(static::\$kommuneNames);
    }

    /**
     * Randomly return a real region name.
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regionNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Address.php");
    }
}
