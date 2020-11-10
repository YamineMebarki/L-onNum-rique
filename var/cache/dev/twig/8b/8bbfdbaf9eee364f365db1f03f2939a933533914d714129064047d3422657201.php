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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php */
class __TwigTemplate_4049d5fe3d644aadfa5ee6c7170be4e81b8f022c4c660e57306d4f88dc2be4fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_CH;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Strasse', 'Weg', 'Allee'
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'strasse', 'str.', 'weg', 'allee'
    );

    protected static \$postcode = array('####');

    /**
     * @link https://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_der_Schweiz
     */
    protected static \$cityNames = array(
        'Aarau', 'Aarberg', 'Aarburg', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Agno', 'Aigle', 'Allschwil', 'Altdorf', 'Altstätten', 'Amriswil', 'Appenzell', 'Arbon', 'Arth', 'Ascona', 'Aubonne', 'Avenches',
        'Baar', 'Bad Zurzach', 'Baden', 'Basel', 'Bassersdorf', 'Bellinzona', 'Belp', 'Bern', 'Beromünster', 'Biasca', 'Biel/Bienne', 'Binningen', 'Birsfelden', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten', 'Brig-Glis', 'Brig', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach',
        'Carouge', 'Cham', 'Chur', 'Châtel-Saint-Denis', 'Chêne-Bougeries', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Davos', 'Delsberg', 'Diessenhofen', 'Dietikon', 'Dübendorf',
        'Ebikon', 'Echallens', 'Ecublens', 'Eglisau', 'Einsiedeln', 'Elgg', 'Emmen', 'Erlach', 'Estavayer-le-Lac',
        'Flawil', 'Frauenfeld', 'Freiburg', 'Freienbach', 'Fürstenau',
        'Genf', 'Gland', 'Glarus', 'Gordola', 'Gossau', 'Grandcour', 'Grandson', 'Greifensee', 'Grenchen', 'Greyerz', 'Grüningen',
        'Herisau', 'Hermance', 'Hinwil', 'Horgen', 'Horw', 'Huttwil',
        'Ilanz', 'Illnau-Effretikon', 'Ittigen',
        'Kaiserstuhl', 'Klingnau', 'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Lachen', 'Lancy', 'Langenthal', 'Laufen', 'Laufenburg', 'Laupen', 'Lausanne', 'Le Grand-Saconnex', 'Le Landeron', 'Le Locle', 'Lenzburg', 'Les Clées', 'Leuk', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Luzern', 'Lyss',
        'Maienfeld', 'Martigny', 'Meilen', 'Mellingen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Muri bei Bern', 'Murten', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen',
        'Neuenburg', 'Neuhausen am Rheinfall', 'Neunkirch', 'Nidau', 'Nyon',
        'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Orbe', 'Orsières', 'Ostermundigen', 'Payerne', 'Pfäffikon', 'Plan-les-Ouates', 'Pratteln', 'Prilly', 'Pruntrut', 'Pully',
        'Rapperswil-Jona', 'Regensberg', 'Regensdorf', 'Reinach', 'Renens', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Richterswil', 'Riehen', 'Risch', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romanshorn', 'Romont', 'Rorschach', 'Rue', 'Rüti',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Sargans', 'Sarnen', 'Schaffhausen', 'Schlieren', 'Schwyz', 'Sembrancher', 'Sempach', 'Siders', 'Sitten', 'Solothurn', 'Spiez', 'Splügen', 'Spreitenbach', 'St. Gallen', 'Stans', 'Steckborn', 'Steffisburg', 'Stein am Rhein', 'Stäfa', 'Sursee',
        'Thalwil', 'Thun', 'Thusis', 'Thônex',
        'Unterseen', 'Uster', 'Uznach', 'Uzwil',
        'Val-de-Travers NE', 'Valangin', 'Vernier', 'Versoix', 'Vevey', 'Veyrier GE', 'Villars-sur-Glâne', 'Villeneuve', 'Visp', 'Volketswil',
        'Waldenburg', 'Walenstadt', 'Wallisellen', 'Wangen an der Aare', 'Weinfelden', 'Werdenberg', 'Wettingen', 'Wetzikon', 'Wiedlisbach', 'Willisau', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen', 'Zollikon', 'Zug', 'Zürich'
    );

    /**
     * @link https://de.wikipedia.org/wiki/Kanton_(Schweiz)
     */
    protected static \$canton = array(
        array('AG' => 'Aargau'),
        array('AI' => 'Appenzell Innerrhoden'),
        array('AR' => 'Appenzell Ausserrhoden'),
        array('BE' => 'Bern'),
        array('BL' => 'Basel-Landschaft'),
        array('BS' => 'Basel-Stadt'),
        array('FR' => 'Freiburg'),
        array('GE' => 'Genf'),
        array('GL' => 'Glarus'),
        array('GR' => 'Graubünden'),
        array('JU' => 'Jura',),
        array('LU' => 'Luzern'),
        array('NE' => 'Neuenburg'),
        array('NW' => 'Nidwalden'),
        array('OW' => 'Obwalden'),
        array('SG' => 'St. Gallen'),
        array('SH' => 'Schaffhausen'),
        array('SO' => 'Solothurn'),
        array('SZ' => 'Schwyz'),
        array('TG' => 'Thurgau'),
        array('TI' => 'Tessin'),
        array('UR' => 'Uri'),
        array('VD' => 'Waadt'),
        array('VS' => 'Wallis'),
        array('ZG' => 'Zug'),
        array('ZH' => 'Zürich')
    );

    protected static \$country = array(
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äusseres Ozeanien',
        'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belarus', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivien', 'Bosnien und Herzegowina', 'Botsuana', 'Bouvetinsel', 'Brasilien', 'Britische Jungferninseln', 'Britisches Territorium im Indischen Ozean', 'Brunei Darussalam', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Chile', 'China', 'Cookinseln', 'Costa Rica', 'Côte d’Ivoire',
        'Demokratische Republik Kongo', 'Demokratische Volksrepublik Korea', 'Deutschland', 'Dominica', 'Dominikanische Republik', 'Dschibuti', 'Dänemark',
        'Ecuador', 'El Salvador', 'Eritrea', 'Estland', 'Europäische Union',
        'Falklandinseln', 'Fidschi', 'Finnland', 'Frankreich', 'Französisch-Guayana', 'Französisch-Polynesien', 'Französische Süd- und Antarktisgebiete', 'Färöer',
        'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grenada', 'Griechenland', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- und McDonald-Inseln', 'Honduras',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaika', 'Japan', 'Jemen', 'Jersey', 'Jordanien',
        'Kaimaninseln', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kokosinseln', 'Kolumbien', 'Komoren', 'Kongo', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Madagaskar', 'Malawi', 'Malaysia', 'Malediven', 'Mali', 'Malta', 'Marokko', 'Marshallinseln', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Monaco', 'Mongolei', 'Montenegro', 'Montserrat', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Neukaledonien', 'Neuseeland', 'Nicaragua', 'Niederlande', 'Niederländische Antillen', 'Niger', 'Nigeria', 'Niue', 'Norfolkinsel', 'Norwegen', 'Nördliche Marianen',
        'Oman', 'Osttimor', 'Österreich',
        'Pakistan', 'Palau', 'Palästinensische Gebiete', 'Panama', 'Papua-Neuguinea', 'Paraguay', 'Peru', 'Philippinen', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Republik Korea', 'Republik Moldau', 'Ruanda', 'Rumänien', 'Russische Föderation', 'Réunion',
        'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Saudi-Arabien', 'Schweden', 'Schweiz', 'Senegal', 'Serbien', 'Serbien und Montenegro', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Sonderverwaltungszone Hongkong', 'Sonderverwaltungszone Macao', 'Spanien', 'Sri Lanka', 'St. Barthélemy', 'St. Helena', 'St. Kitts und Nevis', 'St. Lucia', 'St. Martin', 'St. Pierre und Miquelon', 'St. Vincent und die Grenadinen', 'Sudan', 'Suriname', 'Svalbard und Jan Mayen', 'Swasiland', 'Syrien', 'São Tomé und Príncipe', 'Südafrika', 'Südgeorgien und die Südlichen Sandwichinseln',
        'Tadschikistan', 'Taiwan', 'Tansania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad und Tobago', 'Tschad', 'Tschechische Republik', 'Tunesien', 'Turkmenistan', 'Turks- und Caicosinseln', 'Tuvalu', 'Türkei',
        'Uganda', 'Ukraine', 'Unbekannte oder ungültige Region', 'Ungarn', 'Uruguay', 'Usbekistan',
        'Vanuatu', 'Vatikanstadt', 'Venezuela', 'Vereinigte Arabische Emirate', 'Vereinigte Staaten', 'Vereinigtes Königreich', 'Vietnam',
        'Wallis und Futuna', 'Weihnachtsinsel', 'Westsahara',
        'Zentralafrikanische Republik', 'Zypern',
    );

    protected static \$cityFormats = array(
        '";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 109, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffixShort"]) || array_key_exists("streetSuffixShort", $context) ? $context["streetSuffixShort"] : (function () { throw new RuntimeError('Variable "streetSuffixShort" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 110, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffixShort"]) || array_key_exists("streetSuffixShort", $context) ? $context["streetSuffixShort"] : (function () { throw new RuntimeError('Variable "streetSuffixShort" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixLong"]) || array_key_exists("streetSuffixLong", $context) ? $context["streetSuffixLong"] : (function () { throw new RuntimeError('Variable "streetSuffixLong" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 115, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * Returns a random city name.
     * @example Luzern
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Returns a random street suffix.
     * @example str.
     * @return string
     */
    public function streetSuffixShort()
    {
        return static::randomElement(static::\$streetSuffixShort);
    }

    /**
     * Returns a random street suffix.
     * @example Strasse
     * @return string
     */
    public function streetSuffixLong()
    {
        return static::randomElement(static::\$streetSuffixLong);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::\$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        \$canton = static::canton();
        return key(\$canton);
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        \$canton = static::canton();
        return current(\$canton);
    }

    public static function buildingNumber()
    {
        return static::regexify(self::numerify(static::randomElement(static::\$buildingNumber)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 118,  177 => 115,  166 => 111,  161 => 110,  156 => 109,  149 => 105,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_CH;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Strasse', 'Weg', 'Allee'
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'strasse', 'str.', 'weg', 'allee'
    );

    protected static \$postcode = array('####');

    /**
     * @link https://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_der_Schweiz
     */
    protected static \$cityNames = array(
        'Aarau', 'Aarberg', 'Aarburg', 'Adliswil', 'Aesch', 'Affoltern am Albis', 'Agno', 'Aigle', 'Allschwil', 'Altdorf', 'Altstätten', 'Amriswil', 'Appenzell', 'Arbon', 'Arth', 'Ascona', 'Aubonne', 'Avenches',
        'Baar', 'Bad Zurzach', 'Baden', 'Basel', 'Bassersdorf', 'Bellinzona', 'Belp', 'Bern', 'Beromünster', 'Biasca', 'Biel/Bienne', 'Binningen', 'Birsfelden', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten', 'Brig-Glis', 'Brig', 'Brugg', 'Buchs', 'Bulle', 'Burgdorf', 'Bülach',
        'Carouge', 'Cham', 'Chur', 'Châtel-Saint-Denis', 'Chêne-Bougeries', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Davos', 'Delsberg', 'Diessenhofen', 'Dietikon', 'Dübendorf',
        'Ebikon', 'Echallens', 'Ecublens', 'Eglisau', 'Einsiedeln', 'Elgg', 'Emmen', 'Erlach', 'Estavayer-le-Lac',
        'Flawil', 'Frauenfeld', 'Freiburg', 'Freienbach', 'Fürstenau',
        'Genf', 'Gland', 'Glarus', 'Gordola', 'Gossau', 'Grandcour', 'Grandson', 'Greifensee', 'Grenchen', 'Greyerz', 'Grüningen',
        'Herisau', 'Hermance', 'Hinwil', 'Horgen', 'Horw', 'Huttwil',
        'Ilanz', 'Illnau-Effretikon', 'Ittigen',
        'Kaiserstuhl', 'Klingnau', 'Kloten', 'Kreuzlingen', 'Kriens', 'Köniz', 'Küsnacht',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Lachen', 'Lancy', 'Langenthal', 'Laufen', 'Laufenburg', 'Laupen', 'Lausanne', 'Le Grand-Saconnex', 'Le Landeron', 'Le Locle', 'Lenzburg', 'Les Clées', 'Leuk', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Luzern', 'Lyss',
        'Maienfeld', 'Martigny', 'Meilen', 'Mellingen', 'Mendrisio', 'Meyrin', 'Monthey', 'Montreux', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Muri bei Bern', 'Murten', 'Muttenz', 'Männedorf', 'Möhlin', 'Münchenstein', 'Münsingen',
        'Neuenburg', 'Neuhausen am Rheinfall', 'Neunkirch', 'Nidau', 'Nyon',
        'Oberwil', 'Oftringen', 'Olten', 'Onex', 'Opfikon', 'Orbe', 'Orsières', 'Ostermundigen', 'Payerne', 'Pfäffikon', 'Plan-les-Ouates', 'Pratteln', 'Prilly', 'Pruntrut', 'Pully',
        'Rapperswil-Jona', 'Regensberg', 'Regensdorf', 'Reinach', 'Renens', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Richterswil', 'Riehen', 'Risch', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romanshorn', 'Romont', 'Rorschach', 'Rue', 'Rüti',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Sargans', 'Sarnen', 'Schaffhausen', 'Schlieren', 'Schwyz', 'Sembrancher', 'Sempach', 'Siders', 'Sitten', 'Solothurn', 'Spiez', 'Splügen', 'Spreitenbach', 'St. Gallen', 'Stans', 'Steckborn', 'Steffisburg', 'Stein am Rhein', 'Stäfa', 'Sursee',
        'Thalwil', 'Thun', 'Thusis', 'Thônex',
        'Unterseen', 'Uster', 'Uznach', 'Uzwil',
        'Val-de-Travers NE', 'Valangin', 'Vernier', 'Versoix', 'Vevey', 'Veyrier GE', 'Villars-sur-Glâne', 'Villeneuve', 'Visp', 'Volketswil',
        'Waldenburg', 'Walenstadt', 'Wallisellen', 'Wangen an der Aare', 'Weinfelden', 'Werdenberg', 'Wettingen', 'Wetzikon', 'Wiedlisbach', 'Willisau', 'Wil', 'Winterthur', 'Wohlen', 'Worb', 'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen', 'Zollikon', 'Zug', 'Zürich'
    );

    /**
     * @link https://de.wikipedia.org/wiki/Kanton_(Schweiz)
     */
    protected static \$canton = array(
        array('AG' => 'Aargau'),
        array('AI' => 'Appenzell Innerrhoden'),
        array('AR' => 'Appenzell Ausserrhoden'),
        array('BE' => 'Bern'),
        array('BL' => 'Basel-Landschaft'),
        array('BS' => 'Basel-Stadt'),
        array('FR' => 'Freiburg'),
        array('GE' => 'Genf'),
        array('GL' => 'Glarus'),
        array('GR' => 'Graubünden'),
        array('JU' => 'Jura',),
        array('LU' => 'Luzern'),
        array('NE' => 'Neuenburg'),
        array('NW' => 'Nidwalden'),
        array('OW' => 'Obwalden'),
        array('SG' => 'St. Gallen'),
        array('SH' => 'Schaffhausen'),
        array('SO' => 'Solothurn'),
        array('SZ' => 'Schwyz'),
        array('TG' => 'Thurgau'),
        array('TI' => 'Tessin'),
        array('UR' => 'Uri'),
        array('VD' => 'Waadt'),
        array('VS' => 'Wallis'),
        array('ZG' => 'Zug'),
        array('ZH' => 'Zürich')
    );

    protected static \$country = array(
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äusseres Ozeanien',
        'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belarus', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivien', 'Bosnien und Herzegowina', 'Botsuana', 'Bouvetinsel', 'Brasilien', 'Britische Jungferninseln', 'Britisches Territorium im Indischen Ozean', 'Brunei Darussalam', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Chile', 'China', 'Cookinseln', 'Costa Rica', 'Côte d’Ivoire',
        'Demokratische Republik Kongo', 'Demokratische Volksrepublik Korea', 'Deutschland', 'Dominica', 'Dominikanische Republik', 'Dschibuti', 'Dänemark',
        'Ecuador', 'El Salvador', 'Eritrea', 'Estland', 'Europäische Union',
        'Falklandinseln', 'Fidschi', 'Finnland', 'Frankreich', 'Französisch-Guayana', 'Französisch-Polynesien', 'Französische Süd- und Antarktisgebiete', 'Färöer',
        'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grenada', 'Griechenland', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- und McDonald-Inseln', 'Honduras',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaika', 'Japan', 'Jemen', 'Jersey', 'Jordanien',
        'Kaimaninseln', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kokosinseln', 'Kolumbien', 'Komoren', 'Kongo', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Madagaskar', 'Malawi', 'Malaysia', 'Malediven', 'Mali', 'Malta', 'Marokko', 'Marshallinseln', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Monaco', 'Mongolei', 'Montenegro', 'Montserrat', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Neukaledonien', 'Neuseeland', 'Nicaragua', 'Niederlande', 'Niederländische Antillen', 'Niger', 'Nigeria', 'Niue', 'Norfolkinsel', 'Norwegen', 'Nördliche Marianen',
        'Oman', 'Osttimor', 'Österreich',
        'Pakistan', 'Palau', 'Palästinensische Gebiete', 'Panama', 'Papua-Neuguinea', 'Paraguay', 'Peru', 'Philippinen', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Republik Korea', 'Republik Moldau', 'Ruanda', 'Rumänien', 'Russische Föderation', 'Réunion',
        'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Saudi-Arabien', 'Schweden', 'Schweiz', 'Senegal', 'Serbien', 'Serbien und Montenegro', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Sonderverwaltungszone Hongkong', 'Sonderverwaltungszone Macao', 'Spanien', 'Sri Lanka', 'St. Barthélemy', 'St. Helena', 'St. Kitts und Nevis', 'St. Lucia', 'St. Martin', 'St. Pierre und Miquelon', 'St. Vincent und die Grenadinen', 'Sudan', 'Suriname', 'Svalbard und Jan Mayen', 'Swasiland', 'Syrien', 'São Tomé und Príncipe', 'Südafrika', 'Südgeorgien und die Südlichen Sandwichinseln',
        'Tadschikistan', 'Taiwan', 'Tansania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad und Tobago', 'Tschad', 'Tschechische Republik', 'Tunesien', 'Turkmenistan', 'Turks- und Caicosinseln', 'Tuvalu', 'Türkei',
        'Uganda', 'Ukraine', 'Unbekannte oder ungültige Region', 'Ungarn', 'Uruguay', 'Usbekistan',
        'Vanuatu', 'Vatikanstadt', 'Venezuela', 'Vereinigte Arabische Emirate', 'Vereinigte Staaten', 'Vereinigtes Königreich', 'Vietnam',
        'Wallis und Futuna', 'Weihnachtsinsel', 'Westsahara',
        'Zentralafrikanische Republik', 'Zypern',
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{lastName}}{{streetSuffixShort}}',
        '{{cityName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    /**
     * Returns a random city name.
     * @example Luzern
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Returns a random street suffix.
     * @example str.
     * @return string
     */
    public function streetSuffixShort()
    {
        return static::randomElement(static::\$streetSuffixShort);
    }

    /**
     * Returns a random street suffix.
     * @example Strasse
     * @return string
     */
    public function streetSuffixLong()
    {
        return static::randomElement(static::\$streetSuffixLong);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::\$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        \$canton = static::canton();
        return key(\$canton);
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        \$canton = static::canton();
        return current(\$canton);
    }

    public static function buildingNumber()
    {
        return static::regexify(self::numerify(static::randomElement(static::\$buildingNumber)));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_CH/Address.php");
    }
}
