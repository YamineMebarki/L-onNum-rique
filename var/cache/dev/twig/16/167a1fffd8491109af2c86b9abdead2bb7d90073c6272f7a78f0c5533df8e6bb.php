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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php */
class __TwigTemplate_036a8a4a0054dc17cb0fd85b1e684fb8eaed2110f600e830e9e7caa28f27df7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_DE;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg', 'Allee'
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'straße', 'str.', 'weg', 'allee'
    );

    protected static \$postcode = array('#####');

    /**
     * @var array
     * @see https://de.wikipedia.org/wiki/Liste_der_Gro%C3%9F-_und_Mittelst%C3%A4dte_in_Deutschland
     */
    protected static \$cityNames = array(
        'Aachen', 'Aalen', 'Achern', 'Achim', 'Ahaus', 'Ahlen', 'Ahrensburg', 'Aichach', 'Albstadt', 'Alfter', 'Alsdorf', 'Altenburg', 'Amberg', 'Andernach', 'Annaberg-Buchholz', 'Ansbach', 'Apolda', 'Arnsberg', 'Arnstadt', 'Aschaffenburg', 'Aschersleben', 'Attendorn', 'Augsburg', 'Aurich',
        'Backnang', 'Bad Harzburg', 'Bad Hersfeld', 'Bad Homburg vor der Höhe', 'Bad Honnef', 'Bad Kissingen', 'Bad Kreuznach', 'Bad Mergentheim', 'Bad Nauheim', 'Bad Neuenahr-Ahrweiler', 'Bad Oeynhausen', 'Bad Oldesloe', 'Bad Rappenau', 'Bad Salzuflen', 'Bad Soden am Taunus', 'Bad Vilbel', 'Bad Waldsee', 'Bad Zwischenahn', 'Baden-Baden', 'Baesweiler', 'Balingen', 'Bamberg', 'Barsinghausen', 'Baunatal', 'Bautzen', 'Bayreuth', 'Beckum', 'Bedburg', 'Bensheim', 'Bergheim', 'Bergisch Gladbach', 'Bergkamen', 'Berlin', 'Bernau bei Berlin', 'Bernburg (Saale)', 'Biberach an der Riß', 'Bielefeld', 'Bietigheim-Bissingen', 'Bingen am Rhein', 'Bitterfeld-Wolfen', 'Blankenburg (Harz)', 'Blankenfelde-Mahlow', 'Blieskastel', 'Böblingen', 'Bocholt', 'Bochum', 'Bonn', 'Borken', 'Bornheim', 'Bottrop', 'Bramsche', 'Brandenburg an der Havel', 'Braunschweig', 'Bremen', 'Bremerhaven', 'Bretten', 'Brilon', 'Bruchköbel', 'Bruchsal', 'Brühl', 'Buchholz in der Nordheide', 'Büdingen', 'Bühl', 'Bünde', 'Büren', 'Burg', 'Burgdorf', 'Burgwedel', 'Butzbach', 'Buxtehude',
        'Calw', 'Castrop-Rauxel', 'Celle',
        'Chemnitz', 'Cloppenburg', 'Coburg', 'Coesfeld', 'Coswig', 'Cottbus', 'Crailsheim', 'Cuxhaven',
        'Dachau', 'Darmstadt', 'Datteln', 'Deggendorf', 'Delbrück', 'Delitzsch', 'Delmenhorst', 'Dessau-Roßlau', 'Detmold', 'Dietzenbach', 'Dillenburg', 'Dillingen/Saar', 'Dinslaken', 'Ditzingen', 'Döbeln', 'Donaueschingen', 'Dormagen', 'Dorsten', 'Dortmund', 'Dreieich', 'Dresden', 'Duderstadt', 'Duisburg', 'Dülmen', 'Düren', 'Düsseldorf',
        'Eberswalde', 'Eckernförde', 'Edewecht', 'Ehingen', 'Einbeck', 'Eisenach', 'Eisenhüttenstadt', 'Lutherstadt Eisleben', 'Eislingen/Fils', 'Ellwangen (Jagst)', 'Elmshorn', 'Elsdorf', 'Emden', 'Emmendingen', 'Emmerich am Rhein', 'Emsdetten', 'Enger', 'Ennepetal', 'Ennigerloh', 'Eppingen', 'Erding', 'Erftstadt', 'Erfurt', 'Erkelenz', 'Erkrath', 'Erlangen', 'Eschborn', 'Eschweiler', 'Espelkamp', 'Essen', 'Esslingen am Neckar', 'Ettlingen', 'Euskirchen',
        'Falkensee', 'Fellbach', 'Filderstadt', 'Flensburg', 'Flörsheim am Main', 'Forchheim', 'Frankenthal (Pfalz)', 'Frankfurt (Oder)', 'Frankfurt am Main', 'Frechen', 'Freiberg', 'Freiburg im Breisgau', 'Freising', 'Freital', 'Freudenstadt', 'Friedberg', 'Friedberg (Hessen)', 'Friedrichsdorf', 'Friedrichshafen', 'Friesoythe', 'Fröndenberg/Ruhr', 'Fulda', 'Fürstenfeldbruck', 'Fürstenwalde/Spree', 'Fürth',
        'Gaggenau', 'Ganderkesee', 'Garbsen', 'Gardelegen', 'Garmisch-Partenkirchen', 'Gauting', 'Geesthacht', 'Geestland', 'Geilenkirchen', 'Geislingen an der Steige', 'Geldern', 'Gelnhausen', 'Gelsenkirchen', 'Georgsmarienhütte', 'Gera', 'Geretsried', 'Germering', 'Germersheim', 'Gersthofen', 'Geseke', 'Gevelsberg', 'Gießen', 'Gifhorn', 'Gladbeck', 'Glauchau', 'Goch', 'Göppingen', 'Görlitz', 'Goslar', 'Gotha', 'Göttingen', 'Greifswald', 'Greiz', 'Greven', 'Grevenbroich', 'Griesheim', 'Grimma', 'Gronau (Westf.)', 'Groß-Gerau', 'Groß-Umstadt', 'Gummersbach', 'Günzburg', 'Güstrow', 'Gütersloh',
        'Haan', 'Haar', 'Hagen', 'Halberstadt', 'Halle (Saale)', 'Halle (Westf.)', 'Haltern am See', 'Hamburg', 'Hameln', 'Hamm', 'Hamminkeln', 'Hanau', 'Hann. Münden', 'Hannover', 'Haren (Ems)', 'Harsewinkel', 'Haßloch', 'Hattersheim am Main', 'Hattingen', 'Heide', 'Heidelberg', 'Heidenheim an der Brenz', 'Heilbronn', 'Heiligenhaus', 'Heinsberg', 'Helmstedt', 'Hemer', 'Hennef (Sieg)', 'Hennigsdorf', 'Henstedt-Ulzburg', 'Heppenheim (Bergstraße)', 'Herborn', 'Herdecke', 'Herford', 'Herne', 'Herrenberg', 'Herten', 'Herzogenaurach', 'Herzogenrath', 'Hilden', 'Hildesheim', 'Hockenheim', 'Hof', 'Hofheim am Taunus', 'Hohen Neuendorf', 'Holzminden', 'Homburg', 'Horb am Neckar', 'Höxter', 'Hoyerswerda', 'Hückelhoven', 'Hürth', 'Husum',
        'Ibbenbüren', 'Idar-Oberstein', 'Idstein', 'Ilmenau', 'Ilsede', 'Ingelheim am Rhein', 'Ingolstadt', 'Iserlohn', 'Isernhagen', 'Itzehoe',
        'Jena', 'Jüchen', 'Jülich',
        'Kaarst', 'Kaiserslautern', 'Kaltenkirchen', 'Kamen', 'Kamp-Lintfort', 'Karben', 'Karlsfeld', 'Karlsruhe', 'Kassel', 'Kaufbeuren', 'Kehl', 'Kelkheim (Taunus)', 'Kempen', 'Kempten (Allgäu)', 'Kerpen', 'Kevelaer', 'Kiel', 'Kirchheim unter Teck', 'Kitzingen', 'Kleinmachnow', 'Kleve', 'Koblenz', 'Köln', 'Königs Wusterhausen', 'Königsbrunn', 'Königswinter', 'Konstanz', 'Korbach', 'Kornwestheim', 'Korschenbroich', 'Köthen (Anhalt)', 'Krefeld', 'Kreuztal', 'Kulmbach',
        'Laatzen', 'Lage', 'Lahr/Schwarzwald', 'Lampertheim', 'Landau in der Pfalz', 'Landsberg am Lech', 'Landshut', 'Langen', 'Langenfeld (Rheinland)', 'Langenhagen', 'Lauf an der Pegnitz', 'Laupheim', 'Leer', 'Lehrte', 'Leichlingen (Rheinland)', 'Leimen', 'Leinfelden-Echterdingen', 'Leipzig', 'Lemgo', 'Lengerich', 'Lennestadt', 'Leonberg', 'Leutkirch im Allgäu', 'Leverkusen', 'Lichtenfels', 'Limbach-Oberfrohna', 'Limburg an der Lahn', 'Lindau (Bodensee)', 'Lindlar', 'Lingen (Ems)', 'Lippstadt', 'Lohmar', 'Löhne', 'Lohne (Oldenburg)', 'Lörrach', 'Lübbecke', 'Lübeck', 'Luckenwalde', 'Lüdenscheid', 'Lüdinghausen', 'Ludwigsburg', 'Ludwigsfelde', 'Ludwigshafen am Rhein', 'Lüneburg', 'Lünen',
        'Magdeburg', 'Maintal', 'Mainz', 'Mannheim', 'Marburg', 'Markkleeberg', 'Marl', 'Mechernich', 'Meckenheim', 'Meerbusch', 'Meinerzhagen', 'Meiningen', 'Meißen', 'Melle', 'Memmingen', 'Menden (Sauerland)', 'Meppen', 'Merseburg', 'Merzig', 'Meschede', 'Mettmann', 'Metzingen', 'Minden', 'Moers', 'Mönchengladbach', 'Monheim am Rhein', 'Moormerland', 'Mörfelden-Walldorf', 'Mosbach', 'Mühlacker', 'Mühlhausen/Thüringen', 'Mühlheim am Main', 'Mülheim an der Ruhr', 'München', 'Münster',
        'Nagold', 'Naumburg (Saale)', 'Neckarsulm', 'Netphen', 'Nettetal', 'Neu Wulmstorf', 'Neu-Isenburg', 'Neu-Ulm', 'Neubrandenburg', 'Neuburg an der Donau', 'Neukirchen-Vluyn', 'Neumarkt in der Oberpfalz', 'Neumünster', 'Neunkirchen', 'Neuruppin', 'Neusäß', 'Neuss', 'Neustadt am Rübenberge', 'Neustadt an der Weinstraße', 'Neustrelitz', 'Neuwied', 'Niederkassel', 'Nienburg/Weser', 'Norden', 'Nordenham', 'Norderstedt', 'Nordhausen', 'Nordhorn', 'Northeim', 'Nürnberg', 'Nürtingen',
        'Oberhausen', 'Obertshausen', 'Oberursel (Taunus)', 'Oelde', 'Oer-Erkenschwick', 'Offenbach am Main', 'Offenburg', 'Öhringen', 'Olching', 'Oldenburg', 'Olpe', 'Oranienburg', 'Osnabrück', 'Osterholz-Scharmbeck', 'Osterode am Harz', 'Ostfildern', 'Ottobrunn', 'Overath',
        'Paderborn', 'Panketal', 'Papenburg', 'Passau', 'Peine', 'Petershagen', 'Pfaffenhofen an der Ilm', 'Pforzheim', 'Pfungstadt', 'Pinneberg', 'Pirmasens', 'Pirna', 'Plauen', 'Plettenberg', 'Porta Westfalica', 'Potsdam', 'Puchheim', 'Pulheim',
        'Quedlinburg', 'Quickborn',
        'Radebeul', 'Radevormwald', 'Radolfzell am Bodensee', 'Rastatt', 'Rastede', 'Rathenow', 'Ratingen', 'Ravensburg', 'Recklinghausen', 'Rees', 'Regensburg', 'Reinbek', 'Remscheid', 'Remseck am Neckar', 'Rendsburg', 'Reutlingen', 'Rheda-Wiedenbrück', 'Rheinbach', 'Rheinberg', 'Rheine', 'Rheinfelden (Baden)', 'Rheinstetten', 'Riedstadt', 'Riesa', 'Rietberg', 'Rinteln', 'Rödermark', 'Rodgau', 'Ronnenberg', 'Rosenheim', 'Rösrath', 'Rostock', 'Rotenburg (Wümme)', 'Roth', 'Rottenburg am Neckar', 'Rottweil', 'Rudolstadt', 'Rüsselsheim am Main',
        'Saalfeld/Saale', 'Saarbrücken', 'Saarlouis', 'Salzgitter', 'Salzkotten', 'Salzwedel', 'Sangerhausen', 'Sankt Augustin', 'Sankt Ingbert', 'Schleswig', 'Schloß Holte-Stukenbrock', 'Schmallenberg', 'Schönebeck', 'Schorndorf', 'Schortens', 'Schramberg', 'Schwabach', 'Schwäbisch Gmünd', 'Schwäbisch Hall', 'Schwandorf', 'Schwanewede', 'Schwedt/Oder', 'Schweinfurt', 'Schwelm', 'Schwerin', 'Schwerte', 'Schwetzingen', 'Seelze', 'Seevetal', 'Sehnde', 'Seligenstadt', 'Selm', 'Senden', 'Senden', 'Senftenberg', 'Siegburg', 'Siegen', 'Sindelfingen', 'Singen (Hohentwiel)', 'Sinsheim', 'Soest', 'Solingen', 'Soltau', 'Sondershausen', 'Sonneberg', 'Sonthofen', 'Speyer', 'Spremberg', 'Springe', 'Sprockhövel', 'St. Wendel', 'Stade', 'Stadtallendorf', 'Stadthagen', 'Stadtlohn', 'Starnberg', 'Staßfurt', 'Steinfurt', 'Steinhagen', 'Stendal', 'Stolberg (Rheinland)', 'Stralsund', 'Straubing', 'Strausberg', 'Stuhr', 'Stutensee', 'Stuttgart', 'Suhl', 'Sundern (Sauerland)', 'Syke',
        'Taunusstein', 'Teltow', 'Tönisvorst', 'Torgau', 'Traunreut', 'Trier', 'Troisdorf', 'Tübingen', 'Tuttlingen',
        'Übach-Palenberg', 'Überlingen',
        'Uelzen', 'Uetze', 'Ulm', 'Unna', 'Unterhaching', 'Unterschleißheim',
        'Vaihingen an der Enz', 'Varel', 'Vaterstetten', 'Vechta', 'Velbert', 'Verden (Aller)', 'Verl', 'Versmold', 'Viernheim', 'Viersen', 'Villingen-Schwenningen', 'Voerde (Niederrhein)', 'Völklingen', 'Vreden',
        'Wachtberg', 'Waghäusel', 'Waiblingen', 'Waldkirch', 'Waldkraiburg', 'Waldshut-Tiengen', 'Wallenhorst', 'Walsrode', 'Waltrop', 'Wandlitz', 'Wangen im Allgäu', 'Warburg', 'Waren (Müritz)', 'Warendorf', 'Warstein', 'Wedel', 'Wedemark', 'Wegberg', 'Weiden in der Oberpfalz', 'Weil am Rhein', 'Weilheim in Oberbayern', 'Weimar', 'Weingarten', 'Weinheim', 'Weinstadt', 'Weißenfels', 'Weiterstadt', 'Werdau', 'Werder (Havel)', 'Werl', 'Wermelskirchen', 'Werne', 'Wernigerode', 'Wertheim', 'Wesel', 'Wesseling', 'Westerstede', 'Westoverledingen', 'Wetter (Ruhr)', 'Wetzlar', 'Weyhe', 'Wiehl', 'Wiesbaden', 'Wiesloch', 'Wilhelmshaven', 'Willich', 'Wilnsdorf', 'Winnenden', 'Winsen (Luhe)', 'Wipperfürth', 'Wismar', 'Witten', 'Lutherstadt Wittenberg', 'Wittmund', 'Wolfenbüttel', 'Wolfsburg', 'Worms', 'Wülfrath', 'Wunstorf', 'Wuppertal', 'Würselen', 'Würzburg',
        'Xanten',
        'Zeitz', 'Zerbst/Anhalt', 'Zirndorf', 'Zittau', 'Zülpich', 'Zweibrücken', 'Zwickau',
    );

    protected static \$state = array(
        'Baden-Württemberg', 'Bayern', 'Berlin', 'Brandenburg', 'Bremen', 'Hamburg', 'Hessen', 'Mecklenburg-Vorpommern', 'Niedersachsen', 'Nordrhein-Westfalen', 'Rheinland-Pfalz', 'Saarland', 'Sachsen', 'Sachsen-Anhalt', 'Schleswig-Holstein', 'Thüringen'
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
        // line 83
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffixShort"]) || array_key_exists("streetSuffixShort", $context) ? $context["streetSuffixShort"] : (function () { throw new RuntimeError('Variable "streetSuffixShort" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["streetSuffixLong"]) || array_key_exists("streetSuffixLong", $context) ? $context["streetSuffixLong"] : (function () { throw new RuntimeError('Variable "streetSuffixLong" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 92, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 95, $this->source); })()), "html", null, true);
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
     * @example 'Berlin'
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 95,  150 => 92,  139 => 88,  134 => 87,  127 => 83,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_DE;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#', '#/#', '##[abc]', '#[abc]');

    protected static \$streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg', 'Allee'
    );
    protected static \$streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'straße', 'str.', 'weg', 'allee'
    );

    protected static \$postcode = array('#####');

    /**
     * @var array
     * @see https://de.wikipedia.org/wiki/Liste_der_Gro%C3%9F-_und_Mittelst%C3%A4dte_in_Deutschland
     */
    protected static \$cityNames = array(
        'Aachen', 'Aalen', 'Achern', 'Achim', 'Ahaus', 'Ahlen', 'Ahrensburg', 'Aichach', 'Albstadt', 'Alfter', 'Alsdorf', 'Altenburg', 'Amberg', 'Andernach', 'Annaberg-Buchholz', 'Ansbach', 'Apolda', 'Arnsberg', 'Arnstadt', 'Aschaffenburg', 'Aschersleben', 'Attendorn', 'Augsburg', 'Aurich',
        'Backnang', 'Bad Harzburg', 'Bad Hersfeld', 'Bad Homburg vor der Höhe', 'Bad Honnef', 'Bad Kissingen', 'Bad Kreuznach', 'Bad Mergentheim', 'Bad Nauheim', 'Bad Neuenahr-Ahrweiler', 'Bad Oeynhausen', 'Bad Oldesloe', 'Bad Rappenau', 'Bad Salzuflen', 'Bad Soden am Taunus', 'Bad Vilbel', 'Bad Waldsee', 'Bad Zwischenahn', 'Baden-Baden', 'Baesweiler', 'Balingen', 'Bamberg', 'Barsinghausen', 'Baunatal', 'Bautzen', 'Bayreuth', 'Beckum', 'Bedburg', 'Bensheim', 'Bergheim', 'Bergisch Gladbach', 'Bergkamen', 'Berlin', 'Bernau bei Berlin', 'Bernburg (Saale)', 'Biberach an der Riß', 'Bielefeld', 'Bietigheim-Bissingen', 'Bingen am Rhein', 'Bitterfeld-Wolfen', 'Blankenburg (Harz)', 'Blankenfelde-Mahlow', 'Blieskastel', 'Böblingen', 'Bocholt', 'Bochum', 'Bonn', 'Borken', 'Bornheim', 'Bottrop', 'Bramsche', 'Brandenburg an der Havel', 'Braunschweig', 'Bremen', 'Bremerhaven', 'Bretten', 'Brilon', 'Bruchköbel', 'Bruchsal', 'Brühl', 'Buchholz in der Nordheide', 'Büdingen', 'Bühl', 'Bünde', 'Büren', 'Burg', 'Burgdorf', 'Burgwedel', 'Butzbach', 'Buxtehude',
        'Calw', 'Castrop-Rauxel', 'Celle',
        'Chemnitz', 'Cloppenburg', 'Coburg', 'Coesfeld', 'Coswig', 'Cottbus', 'Crailsheim', 'Cuxhaven',
        'Dachau', 'Darmstadt', 'Datteln', 'Deggendorf', 'Delbrück', 'Delitzsch', 'Delmenhorst', 'Dessau-Roßlau', 'Detmold', 'Dietzenbach', 'Dillenburg', 'Dillingen/Saar', 'Dinslaken', 'Ditzingen', 'Döbeln', 'Donaueschingen', 'Dormagen', 'Dorsten', 'Dortmund', 'Dreieich', 'Dresden', 'Duderstadt', 'Duisburg', 'Dülmen', 'Düren', 'Düsseldorf',
        'Eberswalde', 'Eckernförde', 'Edewecht', 'Ehingen', 'Einbeck', 'Eisenach', 'Eisenhüttenstadt', 'Lutherstadt Eisleben', 'Eislingen/Fils', 'Ellwangen (Jagst)', 'Elmshorn', 'Elsdorf', 'Emden', 'Emmendingen', 'Emmerich am Rhein', 'Emsdetten', 'Enger', 'Ennepetal', 'Ennigerloh', 'Eppingen', 'Erding', 'Erftstadt', 'Erfurt', 'Erkelenz', 'Erkrath', 'Erlangen', 'Eschborn', 'Eschweiler', 'Espelkamp', 'Essen', 'Esslingen am Neckar', 'Ettlingen', 'Euskirchen',
        'Falkensee', 'Fellbach', 'Filderstadt', 'Flensburg', 'Flörsheim am Main', 'Forchheim', 'Frankenthal (Pfalz)', 'Frankfurt (Oder)', 'Frankfurt am Main', 'Frechen', 'Freiberg', 'Freiburg im Breisgau', 'Freising', 'Freital', 'Freudenstadt', 'Friedberg', 'Friedberg (Hessen)', 'Friedrichsdorf', 'Friedrichshafen', 'Friesoythe', 'Fröndenberg/Ruhr', 'Fulda', 'Fürstenfeldbruck', 'Fürstenwalde/Spree', 'Fürth',
        'Gaggenau', 'Ganderkesee', 'Garbsen', 'Gardelegen', 'Garmisch-Partenkirchen', 'Gauting', 'Geesthacht', 'Geestland', 'Geilenkirchen', 'Geislingen an der Steige', 'Geldern', 'Gelnhausen', 'Gelsenkirchen', 'Georgsmarienhütte', 'Gera', 'Geretsried', 'Germering', 'Germersheim', 'Gersthofen', 'Geseke', 'Gevelsberg', 'Gießen', 'Gifhorn', 'Gladbeck', 'Glauchau', 'Goch', 'Göppingen', 'Görlitz', 'Goslar', 'Gotha', 'Göttingen', 'Greifswald', 'Greiz', 'Greven', 'Grevenbroich', 'Griesheim', 'Grimma', 'Gronau (Westf.)', 'Groß-Gerau', 'Groß-Umstadt', 'Gummersbach', 'Günzburg', 'Güstrow', 'Gütersloh',
        'Haan', 'Haar', 'Hagen', 'Halberstadt', 'Halle (Saale)', 'Halle (Westf.)', 'Haltern am See', 'Hamburg', 'Hameln', 'Hamm', 'Hamminkeln', 'Hanau', 'Hann. Münden', 'Hannover', 'Haren (Ems)', 'Harsewinkel', 'Haßloch', 'Hattersheim am Main', 'Hattingen', 'Heide', 'Heidelberg', 'Heidenheim an der Brenz', 'Heilbronn', 'Heiligenhaus', 'Heinsberg', 'Helmstedt', 'Hemer', 'Hennef (Sieg)', 'Hennigsdorf', 'Henstedt-Ulzburg', 'Heppenheim (Bergstraße)', 'Herborn', 'Herdecke', 'Herford', 'Herne', 'Herrenberg', 'Herten', 'Herzogenaurach', 'Herzogenrath', 'Hilden', 'Hildesheim', 'Hockenheim', 'Hof', 'Hofheim am Taunus', 'Hohen Neuendorf', 'Holzminden', 'Homburg', 'Horb am Neckar', 'Höxter', 'Hoyerswerda', 'Hückelhoven', 'Hürth', 'Husum',
        'Ibbenbüren', 'Idar-Oberstein', 'Idstein', 'Ilmenau', 'Ilsede', 'Ingelheim am Rhein', 'Ingolstadt', 'Iserlohn', 'Isernhagen', 'Itzehoe',
        'Jena', 'Jüchen', 'Jülich',
        'Kaarst', 'Kaiserslautern', 'Kaltenkirchen', 'Kamen', 'Kamp-Lintfort', 'Karben', 'Karlsfeld', 'Karlsruhe', 'Kassel', 'Kaufbeuren', 'Kehl', 'Kelkheim (Taunus)', 'Kempen', 'Kempten (Allgäu)', 'Kerpen', 'Kevelaer', 'Kiel', 'Kirchheim unter Teck', 'Kitzingen', 'Kleinmachnow', 'Kleve', 'Koblenz', 'Köln', 'Königs Wusterhausen', 'Königsbrunn', 'Königswinter', 'Konstanz', 'Korbach', 'Kornwestheim', 'Korschenbroich', 'Köthen (Anhalt)', 'Krefeld', 'Kreuztal', 'Kulmbach',
        'Laatzen', 'Lage', 'Lahr/Schwarzwald', 'Lampertheim', 'Landau in der Pfalz', 'Landsberg am Lech', 'Landshut', 'Langen', 'Langenfeld (Rheinland)', 'Langenhagen', 'Lauf an der Pegnitz', 'Laupheim', 'Leer', 'Lehrte', 'Leichlingen (Rheinland)', 'Leimen', 'Leinfelden-Echterdingen', 'Leipzig', 'Lemgo', 'Lengerich', 'Lennestadt', 'Leonberg', 'Leutkirch im Allgäu', 'Leverkusen', 'Lichtenfels', 'Limbach-Oberfrohna', 'Limburg an der Lahn', 'Lindau (Bodensee)', 'Lindlar', 'Lingen (Ems)', 'Lippstadt', 'Lohmar', 'Löhne', 'Lohne (Oldenburg)', 'Lörrach', 'Lübbecke', 'Lübeck', 'Luckenwalde', 'Lüdenscheid', 'Lüdinghausen', 'Ludwigsburg', 'Ludwigsfelde', 'Ludwigshafen am Rhein', 'Lüneburg', 'Lünen',
        'Magdeburg', 'Maintal', 'Mainz', 'Mannheim', 'Marburg', 'Markkleeberg', 'Marl', 'Mechernich', 'Meckenheim', 'Meerbusch', 'Meinerzhagen', 'Meiningen', 'Meißen', 'Melle', 'Memmingen', 'Menden (Sauerland)', 'Meppen', 'Merseburg', 'Merzig', 'Meschede', 'Mettmann', 'Metzingen', 'Minden', 'Moers', 'Mönchengladbach', 'Monheim am Rhein', 'Moormerland', 'Mörfelden-Walldorf', 'Mosbach', 'Mühlacker', 'Mühlhausen/Thüringen', 'Mühlheim am Main', 'Mülheim an der Ruhr', 'München', 'Münster',
        'Nagold', 'Naumburg (Saale)', 'Neckarsulm', 'Netphen', 'Nettetal', 'Neu Wulmstorf', 'Neu-Isenburg', 'Neu-Ulm', 'Neubrandenburg', 'Neuburg an der Donau', 'Neukirchen-Vluyn', 'Neumarkt in der Oberpfalz', 'Neumünster', 'Neunkirchen', 'Neuruppin', 'Neusäß', 'Neuss', 'Neustadt am Rübenberge', 'Neustadt an der Weinstraße', 'Neustrelitz', 'Neuwied', 'Niederkassel', 'Nienburg/Weser', 'Norden', 'Nordenham', 'Norderstedt', 'Nordhausen', 'Nordhorn', 'Northeim', 'Nürnberg', 'Nürtingen',
        'Oberhausen', 'Obertshausen', 'Oberursel (Taunus)', 'Oelde', 'Oer-Erkenschwick', 'Offenbach am Main', 'Offenburg', 'Öhringen', 'Olching', 'Oldenburg', 'Olpe', 'Oranienburg', 'Osnabrück', 'Osterholz-Scharmbeck', 'Osterode am Harz', 'Ostfildern', 'Ottobrunn', 'Overath',
        'Paderborn', 'Panketal', 'Papenburg', 'Passau', 'Peine', 'Petershagen', 'Pfaffenhofen an der Ilm', 'Pforzheim', 'Pfungstadt', 'Pinneberg', 'Pirmasens', 'Pirna', 'Plauen', 'Plettenberg', 'Porta Westfalica', 'Potsdam', 'Puchheim', 'Pulheim',
        'Quedlinburg', 'Quickborn',
        'Radebeul', 'Radevormwald', 'Radolfzell am Bodensee', 'Rastatt', 'Rastede', 'Rathenow', 'Ratingen', 'Ravensburg', 'Recklinghausen', 'Rees', 'Regensburg', 'Reinbek', 'Remscheid', 'Remseck am Neckar', 'Rendsburg', 'Reutlingen', 'Rheda-Wiedenbrück', 'Rheinbach', 'Rheinberg', 'Rheine', 'Rheinfelden (Baden)', 'Rheinstetten', 'Riedstadt', 'Riesa', 'Rietberg', 'Rinteln', 'Rödermark', 'Rodgau', 'Ronnenberg', 'Rosenheim', 'Rösrath', 'Rostock', 'Rotenburg (Wümme)', 'Roth', 'Rottenburg am Neckar', 'Rottweil', 'Rudolstadt', 'Rüsselsheim am Main',
        'Saalfeld/Saale', 'Saarbrücken', 'Saarlouis', 'Salzgitter', 'Salzkotten', 'Salzwedel', 'Sangerhausen', 'Sankt Augustin', 'Sankt Ingbert', 'Schleswig', 'Schloß Holte-Stukenbrock', 'Schmallenberg', 'Schönebeck', 'Schorndorf', 'Schortens', 'Schramberg', 'Schwabach', 'Schwäbisch Gmünd', 'Schwäbisch Hall', 'Schwandorf', 'Schwanewede', 'Schwedt/Oder', 'Schweinfurt', 'Schwelm', 'Schwerin', 'Schwerte', 'Schwetzingen', 'Seelze', 'Seevetal', 'Sehnde', 'Seligenstadt', 'Selm', 'Senden', 'Senden', 'Senftenberg', 'Siegburg', 'Siegen', 'Sindelfingen', 'Singen (Hohentwiel)', 'Sinsheim', 'Soest', 'Solingen', 'Soltau', 'Sondershausen', 'Sonneberg', 'Sonthofen', 'Speyer', 'Spremberg', 'Springe', 'Sprockhövel', 'St. Wendel', 'Stade', 'Stadtallendorf', 'Stadthagen', 'Stadtlohn', 'Starnberg', 'Staßfurt', 'Steinfurt', 'Steinhagen', 'Stendal', 'Stolberg (Rheinland)', 'Stralsund', 'Straubing', 'Strausberg', 'Stuhr', 'Stutensee', 'Stuttgart', 'Suhl', 'Sundern (Sauerland)', 'Syke',
        'Taunusstein', 'Teltow', 'Tönisvorst', 'Torgau', 'Traunreut', 'Trier', 'Troisdorf', 'Tübingen', 'Tuttlingen',
        'Übach-Palenberg', 'Überlingen',
        'Uelzen', 'Uetze', 'Ulm', 'Unna', 'Unterhaching', 'Unterschleißheim',
        'Vaihingen an der Enz', 'Varel', 'Vaterstetten', 'Vechta', 'Velbert', 'Verden (Aller)', 'Verl', 'Versmold', 'Viernheim', 'Viersen', 'Villingen-Schwenningen', 'Voerde (Niederrhein)', 'Völklingen', 'Vreden',
        'Wachtberg', 'Waghäusel', 'Waiblingen', 'Waldkirch', 'Waldkraiburg', 'Waldshut-Tiengen', 'Wallenhorst', 'Walsrode', 'Waltrop', 'Wandlitz', 'Wangen im Allgäu', 'Warburg', 'Waren (Müritz)', 'Warendorf', 'Warstein', 'Wedel', 'Wedemark', 'Wegberg', 'Weiden in der Oberpfalz', 'Weil am Rhein', 'Weilheim in Oberbayern', 'Weimar', 'Weingarten', 'Weinheim', 'Weinstadt', 'Weißenfels', 'Weiterstadt', 'Werdau', 'Werder (Havel)', 'Werl', 'Wermelskirchen', 'Werne', 'Wernigerode', 'Wertheim', 'Wesel', 'Wesseling', 'Westerstede', 'Westoverledingen', 'Wetter (Ruhr)', 'Wetzlar', 'Weyhe', 'Wiehl', 'Wiesbaden', 'Wiesloch', 'Wilhelmshaven', 'Willich', 'Wilnsdorf', 'Winnenden', 'Winsen (Luhe)', 'Wipperfürth', 'Wismar', 'Witten', 'Lutherstadt Wittenberg', 'Wittmund', 'Wolfenbüttel', 'Wolfsburg', 'Worms', 'Wülfrath', 'Wunstorf', 'Wuppertal', 'Würselen', 'Würzburg',
        'Xanten',
        'Zeitz', 'Zerbst/Anhalt', 'Zirndorf', 'Zittau', 'Zülpich', 'Zweibrücken', 'Zwickau',
    );

    protected static \$state = array(
        'Baden-Württemberg', 'Bayern', 'Berlin', 'Brandenburg', 'Bremen', 'Hamburg', 'Hessen', 'Mecklenburg-Vorpommern', 'Niedersachsen', 'Nordrhein-Westfalen', 'Rheinland-Pfalz', 'Saarland', 'Sachsen', 'Sachsen-Anhalt', 'Schleswig-Holstein', 'Thüringen'
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
     * @example 'Berlin'
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
", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Address.php");
    }
}
