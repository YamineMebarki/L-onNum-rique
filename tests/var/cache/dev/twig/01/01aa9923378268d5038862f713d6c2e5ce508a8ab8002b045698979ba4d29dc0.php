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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php */
class __TwigTemplate_1a4b6184dd3a061340fff3ae43bc452253a66a8d20238e6329f8cd70cc4186df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_FR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan');
    protected static \$streetPrefix = array('rue', 'rue', 'chemin', 'avenue', 'boulevard', 'place', 'impasse');
    protected static \$cityFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "-sur-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 27, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 28, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 30, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$buildingNumber = array('%', '%#', '%#', '%#', '%##');
    protected static \$postcode = array('#####', '## ###');

    protected static \$country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
    );

    private static \$regions = array(
        'Alsace', 'Aquitaine', 'Auvergne', 'Bourgogne', 'Bretagne', 'Centre', 'Champagne-Ardenne',
        'Corse', 'Franche-Comté', 'Île-de-France', 'Languedoc-Roussillon', 'Limousin',
        'Lorraine', 'Midi-Pyrénées', 'Nord-Pas-de-Calais', 'Basse-Normandie', 'Haute-Normandie',
        'Pays-de-Loire', 'Picardie', 'Poitou-Charentes', \"Provence-Alpes-Côte d'Azur\", 'Rhone-Alpes',
        'Guadeloupe', 'Martinique', 'Guyane', 'Réunion', 'Saint-Pierre-et-Miquelon', 'Mayotte',
        'Saint-Barthélémy', 'Saint-Martin', 'Wallis-et-Futuna', 'Polynésie française', 'Nouvelle-Calédonie'
    );

    private static \$departments = array(
        array('01' => 'Ain'), array('02' => 'Aisne'), array('03' => 'Allier'), array('04' => 'Alpes-de-Haute-Provence'), array('05' => 'Hautes-Alpes'),
        array('06' => 'Alpes-Maritimes'), array('07' => 'Ardèche'), array('08' => 'Ardennes'), array('09' => 'Ariège'), array('10' => 'Aube'),
        array('11' => 'Aude'), array('12' => 'Aveyron'), array('13' => 'Bouches-du-Rhône'), array('14' => 'Calvados'), array('15' => 'Cantal'),
        array('16' => 'Charente'), array('17' => 'Charente-Maritime'), array('18' => 'Cher'), array('19' => 'Corrèze'), array('2A' => 'Corse-du-Sud'),
        array('2B' => 'Haute-Corse'), array('21' => \"Côte-d'Or\"), array('22' => \"Côtes-d'Armor\"), array('23' => 'Creuse'), array('24' => 'Dordogne'),
        array('25' => 'Doubs'), array('26' => 'Drôme'), array('27' => 'Eure'), array('28' => 'Eure-et-Loir'), array('29' => 'Finistère'), array('30' => 'Gard'),
        array('31' => 'Haute-Garonne'), array('32' => 'Gers'), array('33' => 'Gironde'), array('34' => 'Hérault'), array('35' => 'Ille-et-Vilaine'),
        array('36' => 'Indre'), array('37' => 'Indre-et-Loire'), array('38' => 'Isère'), array('39' => 'Jura'), array('40' => 'Landes'), array('41' => 'Loir-et-Cher'),
        array('42' => 'Loire'), array('43' => 'Haute-Loire'), array('44' => 'Loire-Atlantique'), array('45' => 'Loiret'), array('46' => 'Lot'),
        array('47' => 'Lot-et-Garonne'), array('48' => 'Lozère'), array('49' => 'Maine-et-Loire'), array('50' => 'Manche'), array('51' => 'Marne'),
        array('52' => 'Haute-Marne'), array('53' => 'Mayenne'), array('54' => 'Meurthe-et-Moselle'), array('55' => 'Meuse'), array('56' => 'Morbihan'),
        array('57' => 'Moselle'), array('58' => 'Nièvre'), array('59' => 'Nord'), array('60' => 'Oise'), array('61' => 'Orne'), array('62' => 'Pas-de-Calais'),
        array('63' => 'Puy-de-Dôme'), array('64' => 'Pyrénées-Atlantiques'), array('65' => 'Hautes-Pyrénées'), array('66' => 'Pyrénées-Orientales'),
        array('67' => 'Bas-Rhin'), array('68' => 'Haut-Rhin'), array('69' => 'Rhône'), array('70' => 'Haute-Saône'), array('71' => 'Saône-et-Loire'),
        array('72' => 'Sarthe'), array('73' => 'Savoie'), array('74' => 'Haute-Savoie'), array('75' => 'Paris'), array('76' => 'Seine-Maritime'),
        array('77' => 'Seine-et-Marne'), array('78' => 'Yvelines'), array('79' => 'Deux-Sèvres'), array('80' => 'Somme'), array('81' => 'Tarn'),
        array('82' => 'Tarn-et-Garonne'), array('83' => 'Var'), array('84' => 'Vaucluse'), array('85' => 'Vendée'), array('86' => 'Vienne'),
        array('87' => 'Haute-Vienne'), array('88' => 'Vosges'), array('89' => 'Yonne'), array('90' => 'Territoire de Belfort'), array('91' => 'Essonne'),
        array('92' => 'Hauts-de-Seine'), array('93' => 'Seine-Saint-Denis'), array('94' => 'Val-de-Marne'), array('95' => \"Val-d'Oise\"),
        array('971' => 'Guadeloupe'), array('972' => 'Martinique'), array('973' => 'Guyane'), array('974' => 'La Réunion'), array('976' => 'Mayotte')
     );

    protected static \$secondaryAddressFormats = array('Apt. ###', 'Suite ###', 'Étage ###', \"Bât. ###\", \"Chambre ###\");

    /**
     * @example 'Appt. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

     /**
     * @example 'rue'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Randomly returns a french region.
     *
     * @example 'Guadeloupe'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regions);
    }

    /**
     * Randomly returns a french department ('departmentNumber' => 'departmentName').
     *
     * @example array('2B' => 'Haute-Corse')
     *
     * @return array
     */
    public static function department()
    {
        return static::randomElement(static::\$departments);
    }

    /**
     * Randomly returns a french department name.
     *
     * @example 'Ardèche'
     *
     * @return string
     */
    public static function departmentName()
    {
        \$randomDepartmentName = array_values(static::department());

        return \$randomDepartmentName[0];
    }

    /**
     * Randomly returns a french department number.
     *
     * @example '59'
     *
     * @return string
     */
    public static function departmentNumber()
    {
        \$randomDepartmentNumber = array_keys(static::department());

        return \$randomDepartmentNumber[0];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 33,  143 => 30,  137 => 29,  131 => 28,  125 => 27,  119 => 26,  115 => 25,  107 => 22,  99 => 21,  93 => 20,  85 => 17,  80 => 16,  75 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_FR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$citySuffix = array('Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan');
    protected static \$streetPrefix = array('rue', 'rue', 'chemin', 'avenue', 'boulevard', 'place', 'impasse');
    protected static \$cityFormats = array(
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}-sur-{{lastName}}',
    );
    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} de {{lastName}}',
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    protected static \$buildingNumber = array('%', '%#', '%#', '%#', '%##');
    protected static \$postcode = array('#####', '## ###');

    protected static \$country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
    );

    private static \$regions = array(
        'Alsace', 'Aquitaine', 'Auvergne', 'Bourgogne', 'Bretagne', 'Centre', 'Champagne-Ardenne',
        'Corse', 'Franche-Comté', 'Île-de-France', 'Languedoc-Roussillon', 'Limousin',
        'Lorraine', 'Midi-Pyrénées', 'Nord-Pas-de-Calais', 'Basse-Normandie', 'Haute-Normandie',
        'Pays-de-Loire', 'Picardie', 'Poitou-Charentes', \"Provence-Alpes-Côte d'Azur\", 'Rhone-Alpes',
        'Guadeloupe', 'Martinique', 'Guyane', 'Réunion', 'Saint-Pierre-et-Miquelon', 'Mayotte',
        'Saint-Barthélémy', 'Saint-Martin', 'Wallis-et-Futuna', 'Polynésie française', 'Nouvelle-Calédonie'
    );

    private static \$departments = array(
        array('01' => 'Ain'), array('02' => 'Aisne'), array('03' => 'Allier'), array('04' => 'Alpes-de-Haute-Provence'), array('05' => 'Hautes-Alpes'),
        array('06' => 'Alpes-Maritimes'), array('07' => 'Ardèche'), array('08' => 'Ardennes'), array('09' => 'Ariège'), array('10' => 'Aube'),
        array('11' => 'Aude'), array('12' => 'Aveyron'), array('13' => 'Bouches-du-Rhône'), array('14' => 'Calvados'), array('15' => 'Cantal'),
        array('16' => 'Charente'), array('17' => 'Charente-Maritime'), array('18' => 'Cher'), array('19' => 'Corrèze'), array('2A' => 'Corse-du-Sud'),
        array('2B' => 'Haute-Corse'), array('21' => \"Côte-d'Or\"), array('22' => \"Côtes-d'Armor\"), array('23' => 'Creuse'), array('24' => 'Dordogne'),
        array('25' => 'Doubs'), array('26' => 'Drôme'), array('27' => 'Eure'), array('28' => 'Eure-et-Loir'), array('29' => 'Finistère'), array('30' => 'Gard'),
        array('31' => 'Haute-Garonne'), array('32' => 'Gers'), array('33' => 'Gironde'), array('34' => 'Hérault'), array('35' => 'Ille-et-Vilaine'),
        array('36' => 'Indre'), array('37' => 'Indre-et-Loire'), array('38' => 'Isère'), array('39' => 'Jura'), array('40' => 'Landes'), array('41' => 'Loir-et-Cher'),
        array('42' => 'Loire'), array('43' => 'Haute-Loire'), array('44' => 'Loire-Atlantique'), array('45' => 'Loiret'), array('46' => 'Lot'),
        array('47' => 'Lot-et-Garonne'), array('48' => 'Lozère'), array('49' => 'Maine-et-Loire'), array('50' => 'Manche'), array('51' => 'Marne'),
        array('52' => 'Haute-Marne'), array('53' => 'Mayenne'), array('54' => 'Meurthe-et-Moselle'), array('55' => 'Meuse'), array('56' => 'Morbihan'),
        array('57' => 'Moselle'), array('58' => 'Nièvre'), array('59' => 'Nord'), array('60' => 'Oise'), array('61' => 'Orne'), array('62' => 'Pas-de-Calais'),
        array('63' => 'Puy-de-Dôme'), array('64' => 'Pyrénées-Atlantiques'), array('65' => 'Hautes-Pyrénées'), array('66' => 'Pyrénées-Orientales'),
        array('67' => 'Bas-Rhin'), array('68' => 'Haut-Rhin'), array('69' => 'Rhône'), array('70' => 'Haute-Saône'), array('71' => 'Saône-et-Loire'),
        array('72' => 'Sarthe'), array('73' => 'Savoie'), array('74' => 'Haute-Savoie'), array('75' => 'Paris'), array('76' => 'Seine-Maritime'),
        array('77' => 'Seine-et-Marne'), array('78' => 'Yvelines'), array('79' => 'Deux-Sèvres'), array('80' => 'Somme'), array('81' => 'Tarn'),
        array('82' => 'Tarn-et-Garonne'), array('83' => 'Var'), array('84' => 'Vaucluse'), array('85' => 'Vendée'), array('86' => 'Vienne'),
        array('87' => 'Haute-Vienne'), array('88' => 'Vosges'), array('89' => 'Yonne'), array('90' => 'Territoire de Belfort'), array('91' => 'Essonne'),
        array('92' => 'Hauts-de-Seine'), array('93' => 'Seine-Saint-Denis'), array('94' => 'Val-de-Marne'), array('95' => \"Val-d'Oise\"),
        array('971' => 'Guadeloupe'), array('972' => 'Martinique'), array('973' => 'Guyane'), array('974' => 'La Réunion'), array('976' => 'Mayotte')
     );

    protected static \$secondaryAddressFormats = array('Apt. ###', 'Suite ###', 'Étage ###', \"Bât. ###\", \"Chambre ###\");

    /**
     * @example 'Appt. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

     /**
     * @example 'rue'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Randomly returns a french region.
     *
     * @example 'Guadeloupe'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regions);
    }

    /**
     * Randomly returns a french department ('departmentNumber' => 'departmentName').
     *
     * @example array('2B' => 'Haute-Corse')
     *
     * @return array
     */
    public static function department()
    {
        return static::randomElement(static::\$departments);
    }

    /**
     * Randomly returns a french department name.
     *
     * @example 'Ardèche'
     *
     * @return string
     */
    public static function departmentName()
    {
        \$randomDepartmentName = array_values(static::department());

        return \$randomDepartmentName[0];
    }

    /**
     * Randomly returns a french department number.
     *
     * @example '59'
     *
     * @return string
     */
    public static function departmentNumber()
    {
        \$randomDepartmentNumber = array_keys(static::department());

        return \$randomDepartmentNumber[0];
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Address.php");
    }
}
