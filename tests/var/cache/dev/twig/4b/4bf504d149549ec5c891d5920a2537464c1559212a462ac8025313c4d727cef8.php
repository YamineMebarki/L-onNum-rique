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

/* vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php */
class __TwigTemplate_871a3b2c8a1f58b9cff8e3a888a950d055e6ecae7df817fa819733df8e591688 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sl_SI;

class Person extends \\Faker\\Provider\\Person
{

    protected static \$maleNameFormats = array(
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link http://www.stat.si/imena_top_imena_spol.asp?r=True
     * @link http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */
    protected static \$firstNameMale = array(
        'Adam', 'Adolf', 'Albert', 'Albin', 'Aleks', 'Aleksandar', 'Aleksander', 'Aleksej', 'Alen',
        'Alex', 'Aleš', 'Aljaž', 'Aljoša', 'Alojz', 'Alojzij', 'Andraž', 'Andrej', 'Anej', 'Anton',
        'Anže', 'Avgust', 'Ažbe', 'Benjamin', 'Bernard', 'Bine', 'Blaž', 'Bogdan', 'Bogomir',
        'Bojan', 'Bor', 'Boris', 'Borut', 'Boštjan', 'Božidar', 'Branko', 'Brin', 'Bruno', 'Ciril',
        'Cvetko', 'Damijan', 'Damir', 'Damjan', 'Daniel', 'Danijel', 'Danilo', 'Darko', 'David',
        'Davor', 'Davorin', 'Dejan', 'Denis', 'Domen', 'Dominik', 'Dragan', 'Drago', 'Dušan',
        'Edin', 'Edvard', 'Elvis', 'Emil', 'Enej', 'Erazem', 'Erik', 'Ernest', 'Ervin',
        'Ferdinand', 'Filip', 'Franc', 'Franci', 'Franjo', 'Frančišek', 'Gaber', 'Gabriel', 'Gal',
        'Gašper', 'Goran', 'Gorazd', 'Grega', 'Gregor', 'Hasan', 'Ian', 'Ignac', 'Igor', 'Ivan',
        'Ivo', 'Izak', 'Izidor', 'Iztok', 'Jaka', 'Jakob', 'Jan', 'Janez', 'Jani', 'Janko',
        'Jasmin', 'Jaša', 'Jernej', 'Jon', 'Josip', 'Joško', 'Jošt', 'Jože', 'Jožef', 'Jure',
        'Jurij', 'Karel', 'Karl', 'Kevin', 'Klemen', 'Kristijan', 'Kristjan', 'Ladislav', 'Lan',
        'Lenart', 'Leon', 'Leopold', 'Liam', 'Lovro', 'Ludvik', 'Luka', 'Lukas', 'Mai', 'Maj',
        'Maks', 'Maksimiljan', 'Marcel', 'Marijan', 'Mario', 'Marjan', 'Mark', 'Marko', 'Martin',
        'Matej', 'Matevž', 'Matic', 'Matija', 'Matjaž', 'Max', 'Metod', 'Miha', 'Mihael', 'Milan',
        'Miloš', 'Miran', 'Mirko', 'Miro', 'Miroslav', 'Mirsad', 'Mitja', 'Mladen', 'Nace', 'Nal',
        'Nejc', 'Nenad', 'Nik', 'Niko', 'Nikola', 'Nikolaj', 'Nino', 'Oskar', 'Ožbej', 'Patrik',
        'Pavel', 'Petar', 'Peter', 'Primož', 'Rado', 'Radovan', 'Rafael', 'Rajko', 'Renato',
        'Rene', 'Robert', 'Rok', 'Roman', 'Rudi', 'Rudolf', 'Samir', 'Samo', 'Sandi', 'Saša',
        'Sašo', 'Sebastijan', 'Sebastjan', 'Senad', 'Sergej', 'Silvester', 'Silvo', 'Simon',
        'Slavko', 'Slobodan', 'Srečko', 'Stanislav', 'Stanko', 'Staš', 'Stjepan', 'Stojan', 'Svit',
        'Tadej', 'Tai', 'Taj', 'Tarik', 'Teo', 'Tevž', 'Tian', 'Tilen', 'Tim', 'Timotej', 'Tine',
        'Tjaš', 'Tomaž', 'Tomislav', 'Tristan', 'Urban', 'Uroš', 'Val', 'Valentin', 'Valter',
        'Vid', 'Viktor', 'Viljem', 'Vincenc', 'Vinko', 'Vito', 'Vladimir', 'Vlado', 'Vojko',
        'Zdenko', 'Zdravko', 'Zlatko', 'Zoran', 'Zvonko', 'Štefan', 'Žak', 'Žan', 'Željko', 'Žiga'
    );

    /**
     * @link http://www.stat.si/imena_top_imena_spol.asp?r=True
     * @link http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */
    protected static \$firstNameFemale = array(
        'Ajda', 'Ajla', 'Albina', 'Aleksandra', 'Alenka', 'Alina', 'Alja', 'Alojzija', 'Amalija',
        'Ana Marija', 'Ana', 'Andreja', 'Andrejka', 'Aneja', 'Angela', 'Anica', 'Anika', 'Anita',
        'Anja', 'Anka', 'Antonija', 'Barbara', 'Bernarda', 'Blanka', 'Bojana', 'Branka', 'Breda',
        'Brigita', 'Brina', 'Cecilija', 'Cvetka', 'Damjana', 'Danica', 'Daniela', 'Danijela',
        'Darinka', 'Darja', 'Daša', 'Doroteja', 'Dragica', 'Dušanka', 'Ela', 'Elena', 'Elizabeta',
        'Ella', 'Ema', 'Emilija', 'Erika', 'Erna', 'Eva', 'Frančiška', 'Gabrijela', 'Gaja',
        'Gloria', 'Gordana', 'Hana', 'Hedvika', 'Helena', 'Hermina', 'Ida', 'Ines', 'Inja',
        'Irena', 'Iris', 'Irma', 'Iva', 'Ivana', 'Ivanka', 'Ivica', 'Iza', 'Izabela', 'Jana',
        'Janja', 'Jasmina', 'Jasna', 'Jelena', 'Jelka', 'Jerca', 'Jerneja', 'Jolanda', 'Jožefa',
        'Jožica', 'Julia', 'Julija', 'Julijana', 'Justina', 'Kaja', 'Karin', 'Karmen', 'Karolina',
        'Katarina', 'Katja', 'Kiara', 'Kim', 'Klara', 'Klavdija', 'Kristina', 'Ksenija', 'Lana',
        'Lara', 'Larisa', 'Laura', 'Lea', 'Leja', 'Lejla', 'Lia', 'Lidija', 'Lili', 'Lilijana',
        'Liljana', 'Lina', 'Liza', 'Ljubica', 'Ljudmila', 'Loti', 'Lucija', 'Luna', 'Magda',
        'Magdalena', 'Maja', 'Majda', 'Manca', 'Marica', 'Marija', 'Marijana', 'Marina', 'Marinka',
        'Marjana', 'Marjanca', 'Marjeta', 'Marjetka', 'Marta', 'Martina', 'Maruša', 'Mateja',
        'Matilda', 'Maša', 'Melita', 'Meta', 'Metka', 'Mia', 'Mihaela', 'Mija', 'Mila', 'Milena',
        'Milica', 'Milka', 'Mira', 'Mirjam', 'Mirjana', 'Miroslava', 'Mojca', 'Monika', 'Nada',
        'Nadja', 'Naja', 'Nastja', 'Natalija', 'Nataša', 'Neja', 'Neli', 'Nevenka', 'Neža', 'Nika',
        'Nikolina', 'Nina', 'Nives', 'Nuša', 'Olga', 'Patricija', 'Pavla', 'Petra', 'Pia', 'Pika',
        'Polona', 'Polonca', 'Rebeka', 'Renata', 'Romana', 'Rozalija', 'Sabina', 'Sandra', 'Sanja',
        'Sara', 'Saša', 'Silva', 'Simona', 'Slavica', 'Slavka', 'Sofia', 'Sofija', 'Sonja',
        'Stanislava', 'Stanka', 'Stela', 'Suzana', 'Tadeja', 'Taja', 'Tajda', 'Tamara', 'Tanja',
        'Tara', 'Tatjana', 'Tea', 'Teja', 'Terezija', 'Tia', 'Tiana', 'Tija', 'Tina', 'Tinkara',
        'Tisa', 'Tjaša', 'Ula', 'Urša', 'Urška', 'Valentina', 'Valerija', 'Vanja', 'Vera',
        'Veronika', 'Vesna', 'Vida', 'Viktorija', 'Vita', 'Vlasta', 'Zala', 'Zara', 'Zarja',
        'Zdenka', 'Zlatka', 'Zofija', 'Zoja', 'Zora', 'Zvonka', 'Špela', 'Štefanija', 'Štefka',
        'Žana', 'Živa'
    );

    /**
     * @link http://www.stat.si/imena_top_priimki.asp?r=True
     */
    protected static \$lastName = array(
        'Ambrožič', 'Babič', 'Bajc', 'Bergant', 'Bevc', 'Bezjak', 'Bizjak', 'Blatnik', 'Blažič',
        'Bogataj', 'Božič', 'Bregar', 'Breznik', 'Bukovec', 'Cerar', 'Cvetko', 'Debeljak',
        'Demšar', 'Dolenc', 'Dolinar', 'Dolinšek', 'Erjavec', 'Eržen', 'Filipič', 'Fras', 'Furlan',
        'Gajšek', 'Godec', 'Golob', 'Gomboc', 'Gorenc', 'Gorjup', 'Gregorič', 'Hafner', 'Hodžić',
        'Horvat', 'Hozjan', 'Hočevar', 'Hren', 'Hribar', 'Hribernik', 'Hrovat', 'Humar', 'Ilić',
        'Ivančič', 'Jamnik', 'Janežič', 'Jarc', 'Javornik', 'Jazbec', 'Jelen', 'Jenko', 'Jereb',
        'Jerič', 'Jerman', 'Jovanović', 'Jug', 'Kalan', 'Kastelic', 'Kaučič', 'Kavčič',
        'Klemenčič', 'Knez', 'Kobal', 'Kocjančič', 'Kodrič', 'Kokalj', 'Kokol', 'Kolar', 'Kolarič',
        'Kolenc', 'Koren', 'Korošec', 'Kos', 'Kosi', 'Kotnik', 'Kovač', 'Kovačević', 'Kovačič',
        'Kočevar', 'Košir', 'Koželj', 'Krajnc', 'Kralj', 'Kramar', 'Kramberger', 'Kranjc',
        'Kranjec', 'Kristan', 'Krivec', 'Kuhar', 'Kumer', 'Lah', 'Lavrič', 'Lazar', 'Leban',
        'Lebar', 'Lesjak', 'Leskovar', 'Lešnik', 'Likar', 'Logar', 'Majcen', 'Marković',
        'Markovič', 'Marolt', 'Mavrič', 'Maček', 'Medved', 'Meglič', 'Mihelič', 'Miklavčič',
        'Mlakar', 'Mlinar', 'Mlinarič', 'Mohorič', 'Močnik', 'Mrak', 'Nemec', 'Nikolić', 'Novak',
        'Oblak', 'Pavlin', 'Pavlič', 'Perko', 'Petek', 'Petrič', 'Petrović', 'Petrovič', 'Pečnik',
        'Pintar', 'Pintarič', 'Pirc', 'Pirnat', 'Podgoršek', 'Pogačar', 'Pogačnik', 'Popović',
        'Potočnik', 'Povše', 'Primožič', 'Pušnik', 'Rajh', 'Ramšak', 'Resnik', 'Ribič', 'Rozman',
        'Rožič', 'Rožman', 'Rupnik', 'Rus', 'Rutar', 'Savić', 'Sever', 'Simonič', 'Sitar', 'Skok',
        'Smrekar', 'Stopar', 'Sušnik', 'Tavčar', 'Tomažič', 'Tomšič', 'Toplak', 'Tratnik', 'Trček',
        'Turk', 'Uršič', 'Vidic', 'Vidmar', 'Vidovič', 'Vodopivec', 'Volk', 'Vovk', 'Zadravec',
        'Zajc', 'Zakrajšek', 'Zalar', 'Zalokar', 'Založnik', 'Zemljič', 'Zorko', 'Zorman', 'Zupan',
        'Zupanc', 'Zupančič', 'Zver', 'Čeh', 'Černe', 'Čuk', 'Šinkovec', 'Škof', 'Šmid',
        'Štrukelj', 'Šuštar', 'Žagar', 'Železnik', 'Žibert', 'Žižek', 'Žnidaršič'
    );

    protected static \$title = array(
        'dr.', 'mag.', 'inž.', 'univ. dipl.', 'dipl.', 'univ. dipl. inž.', 'dipl. inž.', 'prof.', 'akad.', 'dr. med.', 'spec.'
    );

    /**
     * replaced by specific unisex slovenian title
     */
    public function title(\$gender = null)
    {
        return static::randomElement(static::\$title);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Novak'
     */
    public function lastName(\$gender = null)
    {
        return static::randomElement(static::\$lastName);
    }

    public static function lastNameMale()
    {
        return static::lastName();
    }

    public static function lastNameFemale()
    {
        return static::lastName();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 21,  106 => 20,  100 => 19,  94 => 18,  88 => 17,  77 => 13,  71 => 12,  65 => 11,  59 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sl_SI;

class Person extends \\Faker\\Provider\\Person
{

    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{title}} {{firstNameMale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{title}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @link http://www.stat.si/imena_top_imena_spol.asp?r=True
     * @link http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */
    protected static \$firstNameMale = array(
        'Adam', 'Adolf', 'Albert', 'Albin', 'Aleks', 'Aleksandar', 'Aleksander', 'Aleksej', 'Alen',
        'Alex', 'Aleš', 'Aljaž', 'Aljoša', 'Alojz', 'Alojzij', 'Andraž', 'Andrej', 'Anej', 'Anton',
        'Anže', 'Avgust', 'Ažbe', 'Benjamin', 'Bernard', 'Bine', 'Blaž', 'Bogdan', 'Bogomir',
        'Bojan', 'Bor', 'Boris', 'Borut', 'Boštjan', 'Božidar', 'Branko', 'Brin', 'Bruno', 'Ciril',
        'Cvetko', 'Damijan', 'Damir', 'Damjan', 'Daniel', 'Danijel', 'Danilo', 'Darko', 'David',
        'Davor', 'Davorin', 'Dejan', 'Denis', 'Domen', 'Dominik', 'Dragan', 'Drago', 'Dušan',
        'Edin', 'Edvard', 'Elvis', 'Emil', 'Enej', 'Erazem', 'Erik', 'Ernest', 'Ervin',
        'Ferdinand', 'Filip', 'Franc', 'Franci', 'Franjo', 'Frančišek', 'Gaber', 'Gabriel', 'Gal',
        'Gašper', 'Goran', 'Gorazd', 'Grega', 'Gregor', 'Hasan', 'Ian', 'Ignac', 'Igor', 'Ivan',
        'Ivo', 'Izak', 'Izidor', 'Iztok', 'Jaka', 'Jakob', 'Jan', 'Janez', 'Jani', 'Janko',
        'Jasmin', 'Jaša', 'Jernej', 'Jon', 'Josip', 'Joško', 'Jošt', 'Jože', 'Jožef', 'Jure',
        'Jurij', 'Karel', 'Karl', 'Kevin', 'Klemen', 'Kristijan', 'Kristjan', 'Ladislav', 'Lan',
        'Lenart', 'Leon', 'Leopold', 'Liam', 'Lovro', 'Ludvik', 'Luka', 'Lukas', 'Mai', 'Maj',
        'Maks', 'Maksimiljan', 'Marcel', 'Marijan', 'Mario', 'Marjan', 'Mark', 'Marko', 'Martin',
        'Matej', 'Matevž', 'Matic', 'Matija', 'Matjaž', 'Max', 'Metod', 'Miha', 'Mihael', 'Milan',
        'Miloš', 'Miran', 'Mirko', 'Miro', 'Miroslav', 'Mirsad', 'Mitja', 'Mladen', 'Nace', 'Nal',
        'Nejc', 'Nenad', 'Nik', 'Niko', 'Nikola', 'Nikolaj', 'Nino', 'Oskar', 'Ožbej', 'Patrik',
        'Pavel', 'Petar', 'Peter', 'Primož', 'Rado', 'Radovan', 'Rafael', 'Rajko', 'Renato',
        'Rene', 'Robert', 'Rok', 'Roman', 'Rudi', 'Rudolf', 'Samir', 'Samo', 'Sandi', 'Saša',
        'Sašo', 'Sebastijan', 'Sebastjan', 'Senad', 'Sergej', 'Silvester', 'Silvo', 'Simon',
        'Slavko', 'Slobodan', 'Srečko', 'Stanislav', 'Stanko', 'Staš', 'Stjepan', 'Stojan', 'Svit',
        'Tadej', 'Tai', 'Taj', 'Tarik', 'Teo', 'Tevž', 'Tian', 'Tilen', 'Tim', 'Timotej', 'Tine',
        'Tjaš', 'Tomaž', 'Tomislav', 'Tristan', 'Urban', 'Uroš', 'Val', 'Valentin', 'Valter',
        'Vid', 'Viktor', 'Viljem', 'Vincenc', 'Vinko', 'Vito', 'Vladimir', 'Vlado', 'Vojko',
        'Zdenko', 'Zdravko', 'Zlatko', 'Zoran', 'Zvonko', 'Štefan', 'Žak', 'Žan', 'Željko', 'Žiga'
    );

    /**
     * @link http://www.stat.si/imena_top_imena_spol.asp?r=True
     * @link http://www.stat.si/doc/vsebina/05/imena/TOPIMENA_SI.xlsx
     */
    protected static \$firstNameFemale = array(
        'Ajda', 'Ajla', 'Albina', 'Aleksandra', 'Alenka', 'Alina', 'Alja', 'Alojzija', 'Amalija',
        'Ana Marija', 'Ana', 'Andreja', 'Andrejka', 'Aneja', 'Angela', 'Anica', 'Anika', 'Anita',
        'Anja', 'Anka', 'Antonija', 'Barbara', 'Bernarda', 'Blanka', 'Bojana', 'Branka', 'Breda',
        'Brigita', 'Brina', 'Cecilija', 'Cvetka', 'Damjana', 'Danica', 'Daniela', 'Danijela',
        'Darinka', 'Darja', 'Daša', 'Doroteja', 'Dragica', 'Dušanka', 'Ela', 'Elena', 'Elizabeta',
        'Ella', 'Ema', 'Emilija', 'Erika', 'Erna', 'Eva', 'Frančiška', 'Gabrijela', 'Gaja',
        'Gloria', 'Gordana', 'Hana', 'Hedvika', 'Helena', 'Hermina', 'Ida', 'Ines', 'Inja',
        'Irena', 'Iris', 'Irma', 'Iva', 'Ivana', 'Ivanka', 'Ivica', 'Iza', 'Izabela', 'Jana',
        'Janja', 'Jasmina', 'Jasna', 'Jelena', 'Jelka', 'Jerca', 'Jerneja', 'Jolanda', 'Jožefa',
        'Jožica', 'Julia', 'Julija', 'Julijana', 'Justina', 'Kaja', 'Karin', 'Karmen', 'Karolina',
        'Katarina', 'Katja', 'Kiara', 'Kim', 'Klara', 'Klavdija', 'Kristina', 'Ksenija', 'Lana',
        'Lara', 'Larisa', 'Laura', 'Lea', 'Leja', 'Lejla', 'Lia', 'Lidija', 'Lili', 'Lilijana',
        'Liljana', 'Lina', 'Liza', 'Ljubica', 'Ljudmila', 'Loti', 'Lucija', 'Luna', 'Magda',
        'Magdalena', 'Maja', 'Majda', 'Manca', 'Marica', 'Marija', 'Marijana', 'Marina', 'Marinka',
        'Marjana', 'Marjanca', 'Marjeta', 'Marjetka', 'Marta', 'Martina', 'Maruša', 'Mateja',
        'Matilda', 'Maša', 'Melita', 'Meta', 'Metka', 'Mia', 'Mihaela', 'Mija', 'Mila', 'Milena',
        'Milica', 'Milka', 'Mira', 'Mirjam', 'Mirjana', 'Miroslava', 'Mojca', 'Monika', 'Nada',
        'Nadja', 'Naja', 'Nastja', 'Natalija', 'Nataša', 'Neja', 'Neli', 'Nevenka', 'Neža', 'Nika',
        'Nikolina', 'Nina', 'Nives', 'Nuša', 'Olga', 'Patricija', 'Pavla', 'Petra', 'Pia', 'Pika',
        'Polona', 'Polonca', 'Rebeka', 'Renata', 'Romana', 'Rozalija', 'Sabina', 'Sandra', 'Sanja',
        'Sara', 'Saša', 'Silva', 'Simona', 'Slavica', 'Slavka', 'Sofia', 'Sofija', 'Sonja',
        'Stanislava', 'Stanka', 'Stela', 'Suzana', 'Tadeja', 'Taja', 'Tajda', 'Tamara', 'Tanja',
        'Tara', 'Tatjana', 'Tea', 'Teja', 'Terezija', 'Tia', 'Tiana', 'Tija', 'Tina', 'Tinkara',
        'Tisa', 'Tjaša', 'Ula', 'Urša', 'Urška', 'Valentina', 'Valerija', 'Vanja', 'Vera',
        'Veronika', 'Vesna', 'Vida', 'Viktorija', 'Vita', 'Vlasta', 'Zala', 'Zara', 'Zarja',
        'Zdenka', 'Zlatka', 'Zofija', 'Zoja', 'Zora', 'Zvonka', 'Špela', 'Štefanija', 'Štefka',
        'Žana', 'Živa'
    );

    /**
     * @link http://www.stat.si/imena_top_priimki.asp?r=True
     */
    protected static \$lastName = array(
        'Ambrožič', 'Babič', 'Bajc', 'Bergant', 'Bevc', 'Bezjak', 'Bizjak', 'Blatnik', 'Blažič',
        'Bogataj', 'Božič', 'Bregar', 'Breznik', 'Bukovec', 'Cerar', 'Cvetko', 'Debeljak',
        'Demšar', 'Dolenc', 'Dolinar', 'Dolinšek', 'Erjavec', 'Eržen', 'Filipič', 'Fras', 'Furlan',
        'Gajšek', 'Godec', 'Golob', 'Gomboc', 'Gorenc', 'Gorjup', 'Gregorič', 'Hafner', 'Hodžić',
        'Horvat', 'Hozjan', 'Hočevar', 'Hren', 'Hribar', 'Hribernik', 'Hrovat', 'Humar', 'Ilić',
        'Ivančič', 'Jamnik', 'Janežič', 'Jarc', 'Javornik', 'Jazbec', 'Jelen', 'Jenko', 'Jereb',
        'Jerič', 'Jerman', 'Jovanović', 'Jug', 'Kalan', 'Kastelic', 'Kaučič', 'Kavčič',
        'Klemenčič', 'Knez', 'Kobal', 'Kocjančič', 'Kodrič', 'Kokalj', 'Kokol', 'Kolar', 'Kolarič',
        'Kolenc', 'Koren', 'Korošec', 'Kos', 'Kosi', 'Kotnik', 'Kovač', 'Kovačević', 'Kovačič',
        'Kočevar', 'Košir', 'Koželj', 'Krajnc', 'Kralj', 'Kramar', 'Kramberger', 'Kranjc',
        'Kranjec', 'Kristan', 'Krivec', 'Kuhar', 'Kumer', 'Lah', 'Lavrič', 'Lazar', 'Leban',
        'Lebar', 'Lesjak', 'Leskovar', 'Lešnik', 'Likar', 'Logar', 'Majcen', 'Marković',
        'Markovič', 'Marolt', 'Mavrič', 'Maček', 'Medved', 'Meglič', 'Mihelič', 'Miklavčič',
        'Mlakar', 'Mlinar', 'Mlinarič', 'Mohorič', 'Močnik', 'Mrak', 'Nemec', 'Nikolić', 'Novak',
        'Oblak', 'Pavlin', 'Pavlič', 'Perko', 'Petek', 'Petrič', 'Petrović', 'Petrovič', 'Pečnik',
        'Pintar', 'Pintarič', 'Pirc', 'Pirnat', 'Podgoršek', 'Pogačar', 'Pogačnik', 'Popović',
        'Potočnik', 'Povše', 'Primožič', 'Pušnik', 'Rajh', 'Ramšak', 'Resnik', 'Ribič', 'Rozman',
        'Rožič', 'Rožman', 'Rupnik', 'Rus', 'Rutar', 'Savić', 'Sever', 'Simonič', 'Sitar', 'Skok',
        'Smrekar', 'Stopar', 'Sušnik', 'Tavčar', 'Tomažič', 'Tomšič', 'Toplak', 'Tratnik', 'Trček',
        'Turk', 'Uršič', 'Vidic', 'Vidmar', 'Vidovič', 'Vodopivec', 'Volk', 'Vovk', 'Zadravec',
        'Zajc', 'Zakrajšek', 'Zalar', 'Zalokar', 'Založnik', 'Zemljič', 'Zorko', 'Zorman', 'Zupan',
        'Zupanc', 'Zupančič', 'Zver', 'Čeh', 'Černe', 'Čuk', 'Šinkovec', 'Škof', 'Šmid',
        'Štrukelj', 'Šuštar', 'Žagar', 'Železnik', 'Žibert', 'Žižek', 'Žnidaršič'
    );

    protected static \$title = array(
        'dr.', 'mag.', 'inž.', 'univ. dipl.', 'dipl.', 'univ. dipl. inž.', 'dipl. inž.', 'prof.', 'akad.', 'dr. med.', 'spec.'
    );

    /**
     * replaced by specific unisex slovenian title
     */
    public function title(\$gender = null)
    {
        return static::randomElement(static::\$title);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Novak'
     */
    public function lastName(\$gender = null)
    {
        return static::randomElement(static::\$lastName);
    }

    public static function lastNameMale()
    {
        return static::lastName();
    }

    public static function lastNameFemale()
    {
        return static::lastName();
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sl_SI/Person.php");
    }
}
