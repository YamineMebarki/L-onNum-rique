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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php */
class __TwigTemplate_259771b4dfb850f7dc5541168d1cc72c2b1f7108ad9542e34c94c23700237882 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_AT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg',
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'straße', 'weg',
    );

    protected static \$postcode = array('####');

    protected static \$cityNames = array(
        'Allentsteig', 'Altheim', 'Althofen', 'Amstetten', 'Ansfelden', 'Attnang-Puchheim',
        'Bad Aussee', 'Bad Hall', 'Bad Ischl', 'Bad Leonfelden', 'Bad Radkersburg', 'Bad Sankt Leonhard im Lavanttal', 'Bad Vöslau', 'Baden', 'Bärnbach', 'Berndorf', 'Bischofshofen', 'Bleiburg', 'Bludenz', 'Braunau am Inn', 'Bregenz', 'Bruck an der Leitha', 'Bruck an der Mur',
        'Deutsch-Wagram', 'Deutschlandsberg', 'Dornbirn', 'Drosendorf-Zissersdorf 1', 'Dürnstein',
        'Ebenfurth', 'Ebreichsdorf', 'Eferding', 'Eggenburg', 'Eisenerz', 'Eisenstadt', 'Enns',
        'Fehring', 'Feldbach', 'Feldkirch', 'Feldkirchen', 'Ferlach', 'Fischamend', 'Frauenkirchen', 'Freistadt', 'Friedberg', 'Friesach', 'Frohnleiten', 'Fürstenfeld',
        'Gallneukirchen', 'Gänserndorf', 'Geras', 'Gerasdorf bei Wien', 'Gföhl', 'Gleisdorf', 'Gloggnitz', 'Gmünd', 'Gmünd in Kärnten', 'Gmunden', 'Graz', 'Grein', 'Grieskirchen', 'Groß-Enzersdorf', 'Groß-Gerungs', 'Groß-Siegharts', 'Güssing',
        'Haag', 'Hainburg an der Donau', 'Hainfeld', 'Hall in Tirol', 'Hallein', 'Hardegg', 'Hartberg', 'Heidenreichstein', 'Hermagor-Pressegger See', 'Herzogenburg', 'Hohenems', 'Hollabrunn', 'Horn',
        'Imst', 'Innsbruck',
        'Jennersdorf', 'Judenburg',
        'Kapfenberg', 'Kindberg', 'Kirchdorf an der Krems', 'Kirchschlag in der Buckligen Welt', 'Kitzbühel', 'Klagenfurt', 'Klosterneuburg', 'Knittelfeld', 'Köflach', 'Korneuburg', 'Krems an der Donau', 'Kufstein',
        'Laa an der Thaya', 'Laakirchen', 'Landeck', 'Langenlois', 'Leibnitz', 'Leoben', 'Leonding', 'Lienz', 'Liezen', 'Lilienfeld', 'Linz', 'Litschau',
        'Maissau', 'Mank', 'Mannersdorf am Leithagebirge', 'Marchegg', 'Marchtrenk', 'Mariazell', 'Mattersburg', 'Mattighofen', 'Mautern an der Donau', 'Melk', 'Mistelbach an der Zaya', 'Mödling', 'Murau', 'Mureck', 'Mürzzuschlag',
        'Neufeld an der Leitha', 'Neulengbach', 'Neumarkt am Wallersee', 'Neunkirchen', 'Neusiedl am See',
        'Oberndorf bei Salzburg', 'Oberpullendorf', 'Oberwart', 'Oberwälz',
        'Perg', 'Peuerbach', 'Pinkafeld', 'Pöchlarn', 'Poysdorf', 'Pregarten', 'Pulkau', 'Purbach am Neusiedler See', 'Purkersdorf',
        'Raabs an der Thaya', 'Radenthein', 'Radstadt', 'Rattenberg', 'Retz', 'Ried im Innkreis', 'Rohrbach in Oberösterreich', 'Rottenmann', 'Rust',
        'Saalfelden am Steinernen Meer', 'Salzburg', 'Sankt Andrä im Lavanttal', 'Sankt Johann im Pongau', 'Sankt Pölten', 'Sankt Valentin', 'Sankt Veit an der Glan', 'Schärding', 'Scheibbs', 'Schladming', 'Schrattenthal', 'Schrems', 'Schwanenstadt', 'Schwaz', 'Schwechat', 'Seekirchen am Wallersee', 'Spittal an der Drau', 'Stadtschlaining', 'Steyr', 'Steyregg', 'Stockerau', 'Straßburg',
        'Ternitz', 'Traiskirchen', 'Traismauer', 'Traun', 'Trieben', 'Trofaiach', 'Tulln an der Donau',
        'Villach', 'Vils', 'Vöcklabruck', 'Voitsberg', 'Völkermarkt',
        'Waidhofen an der Thaya', 'Waidhofen an der Ybbs', 'Weitra', 'Weiz', 'Wels', 'Wien', 'Wiener Neustadt', 'Wieselburg', 'Wilhelmsburg', 'Wolfsberg', 'Wolkersdorf', 'Wörgl',
        'Ybbs an der Donau',
        'Zell am See', 'Zeltweg', 'Zistersdorf', 'Zwettl',
    );

    protected static \$state = array(
        'Burgenland', 'Kärnten', 'Niederösterreich', 'Oberösterreich', 'Salzburg', 'Steiermark', 'Tirol', 'Vorarlberg', 'Wien'
    );

    protected static \$country = array(
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äußeres Ozeanien',
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
        // line 74
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 78, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffixShort"]) || array_key_exists("streetSuffixShort", $context) ? $context["streetSuffixShort"] : (function () { throw new RuntimeError('Variable "streetSuffixShort" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixLong"]) || array_key_exists("streetSuffixLong", $context) ? $context["streetSuffixLong"] : (function () { throw new RuntimeError('Variable "streetSuffixLong" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::\$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::\$streetSuffixLong);
    }

    /**
     * @example 'Wien'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  141 => 83,  130 => 79,  125 => 78,  118 => 74,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_AT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg',
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'straße', 'weg',
    );

    protected static \$postcode = array('####');

    protected static \$cityNames = array(
        'Allentsteig', 'Altheim', 'Althofen', 'Amstetten', 'Ansfelden', 'Attnang-Puchheim',
        'Bad Aussee', 'Bad Hall', 'Bad Ischl', 'Bad Leonfelden', 'Bad Radkersburg', 'Bad Sankt Leonhard im Lavanttal', 'Bad Vöslau', 'Baden', 'Bärnbach', 'Berndorf', 'Bischofshofen', 'Bleiburg', 'Bludenz', 'Braunau am Inn', 'Bregenz', 'Bruck an der Leitha', 'Bruck an der Mur',
        'Deutsch-Wagram', 'Deutschlandsberg', 'Dornbirn', 'Drosendorf-Zissersdorf 1', 'Dürnstein',
        'Ebenfurth', 'Ebreichsdorf', 'Eferding', 'Eggenburg', 'Eisenerz', 'Eisenstadt', 'Enns',
        'Fehring', 'Feldbach', 'Feldkirch', 'Feldkirchen', 'Ferlach', 'Fischamend', 'Frauenkirchen', 'Freistadt', 'Friedberg', 'Friesach', 'Frohnleiten', 'Fürstenfeld',
        'Gallneukirchen', 'Gänserndorf', 'Geras', 'Gerasdorf bei Wien', 'Gföhl', 'Gleisdorf', 'Gloggnitz', 'Gmünd', 'Gmünd in Kärnten', 'Gmunden', 'Graz', 'Grein', 'Grieskirchen', 'Groß-Enzersdorf', 'Groß-Gerungs', 'Groß-Siegharts', 'Güssing',
        'Haag', 'Hainburg an der Donau', 'Hainfeld', 'Hall in Tirol', 'Hallein', 'Hardegg', 'Hartberg', 'Heidenreichstein', 'Hermagor-Pressegger See', 'Herzogenburg', 'Hohenems', 'Hollabrunn', 'Horn',
        'Imst', 'Innsbruck',
        'Jennersdorf', 'Judenburg',
        'Kapfenberg', 'Kindberg', 'Kirchdorf an der Krems', 'Kirchschlag in der Buckligen Welt', 'Kitzbühel', 'Klagenfurt', 'Klosterneuburg', 'Knittelfeld', 'Köflach', 'Korneuburg', 'Krems an der Donau', 'Kufstein',
        'Laa an der Thaya', 'Laakirchen', 'Landeck', 'Langenlois', 'Leibnitz', 'Leoben', 'Leonding', 'Lienz', 'Liezen', 'Lilienfeld', 'Linz', 'Litschau',
        'Maissau', 'Mank', 'Mannersdorf am Leithagebirge', 'Marchegg', 'Marchtrenk', 'Mariazell', 'Mattersburg', 'Mattighofen', 'Mautern an der Donau', 'Melk', 'Mistelbach an der Zaya', 'Mödling', 'Murau', 'Mureck', 'Mürzzuschlag',
        'Neufeld an der Leitha', 'Neulengbach', 'Neumarkt am Wallersee', 'Neunkirchen', 'Neusiedl am See',
        'Oberndorf bei Salzburg', 'Oberpullendorf', 'Oberwart', 'Oberwälz',
        'Perg', 'Peuerbach', 'Pinkafeld', 'Pöchlarn', 'Poysdorf', 'Pregarten', 'Pulkau', 'Purbach am Neusiedler See', 'Purkersdorf',
        'Raabs an der Thaya', 'Radenthein', 'Radstadt', 'Rattenberg', 'Retz', 'Ried im Innkreis', 'Rohrbach in Oberösterreich', 'Rottenmann', 'Rust',
        'Saalfelden am Steinernen Meer', 'Salzburg', 'Sankt Andrä im Lavanttal', 'Sankt Johann im Pongau', 'Sankt Pölten', 'Sankt Valentin', 'Sankt Veit an der Glan', 'Schärding', 'Scheibbs', 'Schladming', 'Schrattenthal', 'Schrems', 'Schwanenstadt', 'Schwaz', 'Schwechat', 'Seekirchen am Wallersee', 'Spittal an der Drau', 'Stadtschlaining', 'Steyr', 'Steyregg', 'Stockerau', 'Straßburg',
        'Ternitz', 'Traiskirchen', 'Traismauer', 'Traun', 'Trieben', 'Trofaiach', 'Tulln an der Donau',
        'Villach', 'Vils', 'Vöcklabruck', 'Voitsberg', 'Völkermarkt',
        'Waidhofen an der Thaya', 'Waidhofen an der Ybbs', 'Weitra', 'Weiz', 'Wels', 'Wien', 'Wiener Neustadt', 'Wieselburg', 'Wilhelmsburg', 'Wolfsberg', 'Wolkersdorf', 'Wörgl',
        'Ybbs an der Donau',
        'Zell am See', 'Zeltweg', 'Zistersdorf', 'Zwettl',
    );

    protected static \$state = array(
        'Burgenland', 'Kärnten', 'Niederösterreich', 'Oberösterreich', 'Salzburg', 'Steiermark', 'Tirol', 'Vorarlberg', 'Wien'
    );

    protected static \$country = array(
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äußeres Ozeanien',
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
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::\$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::\$streetSuffixLong);
    }

    /**
     * @example 'Wien'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    public static function buildingNumber()
    {
        return static::regexify(self::numerify(static::randomElement(static::\$buildingNumber)));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Address.php");
    }
}
