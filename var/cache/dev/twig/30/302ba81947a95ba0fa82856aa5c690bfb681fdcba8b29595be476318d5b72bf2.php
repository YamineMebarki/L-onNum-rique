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

/* vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php */
class __TwigTemplate_42bca97cd1e37abb9a0949e427c0b7b1b110632ed27f8b0c0f2a3af85d50a40f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sk_SK;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$lastNameFormat = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$maleNameFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$firstNameMale = array(
        'Drahoslav', 'Severín', 'Alexej', 'Ernest', 'Rastislav', 'Radovan', 'Dobroslav', 'Dalibor', 'Vincent', 'Miloš', 'Timotej', 'Gejza', 'Bohuš',
        'Alfonz', 'Gašpar', 'Emil', 'Erik', 'Blažej', 'Zdenko', 'Dezider', 'Arpád', 'Valentín', 'Pravoslav', 'Jaromír', 'Roman', 'Matej', 'Frederik',
        'Viktor', 'Alexander', 'Radomír', 'Albín', 'Bohumil', 'Kazimír', 'Fridrich', 'Radoslav', 'Tomáš', 'Alan', 'Branislav', 'Bruno', 'Gregor',
        'Vlastimil', 'Boleslav', 'Eduard', 'Jozef', 'Víťazoslav', 'Blahoslav', 'Beňadik', 'Adrián', 'Gabriel', 'Marián', 'Emanuel', 'Miroslav',
        'Benjamín', 'Hugo', 'Richard', 'Izidor', 'Zoltán', 'Albert', 'Igor', 'Július', 'Aleš', 'Fedor', 'Rudolf', 'Valér', 'Marcel', 'Ervín',
        'Slavomír', 'Vojtech', 'Juraj', 'Marek', 'Jaroslav', 'Žigmund', 'Florián', 'Roland', 'Pankrác', 'Servác', 'Bonifác', 'Svetozár', 'Bernard',
        'Júlia', 'Urban', 'Dušan', 'Viliam', 'Ferdinand', 'Norbert', 'Róbert', 'Medard', 'Zlatko', 'Anton', 'Vasil', 'Vít', 'Adolf', 'Vratislav',
        'Alfréd', 'Alojz', 'Ján', 'Tadeáš', 'Ladislav', 'Peter', 'Pavol', 'Miloslav', 'Prokop', 'Cyril', 'Metod', 'Patrik', 'Oliver', 'Ivan',
        'Kamil', 'Henrich', 'Drahomír', 'Bohuslav', 'Iľja', 'Daniel', 'Vladimír', 'Jakub', 'Krištof', 'Ignác', 'Gustáv', 'Jerguš', 'Dominik',
        'Oskar', 'Vavrinec', 'Ľubomír', 'Mojmír', 'Leonard', 'Tichomír', 'Filip', 'Bartolomej', 'Ľudovít', 'Samuel', 'Augustín', 'Belo', 'Oleg',
        'Bystrík', 'Ctibor', 'Ľudomil', 'Konštantín', 'Ľuboslav', 'Matúš', 'Móric', 'Ľuboš', 'Ľubor', 'Vladislav', 'Cyprián', 'Václav', 'Michal',
        'Jarolím', 'Arnold', 'Levoslav', 'František', 'Dionýz', 'Maximilián', 'Koloman', 'Boris', 'Lukáš', 'Kristián', 'Vendelín', 'Sergej',
        'Aurel', 'Demeter', 'Denis', 'Hubert', 'Karol', 'Imrich', 'René', 'Bohumír', 'Teodor', 'Tibor', 'Maroš', 'Martin', 'Svätopluk', 'Stanislav',
        'Leopold', 'Eugen', 'Félix', 'Klement', 'Kornel', 'Milan', 'Vratko', 'Ondrej', 'Andrej', 'Edmund', 'Oldrich', 'Oto', 'Mikuláš', 'Ambróz',
        'Radúz', 'Bohdan', 'Adam', 'Štefan', 'Dávid', 'Silvester'

    );

    protected static \$firstNameFemale = array(
        'Alexandra', 'Karina', 'Daniela', 'Andrea', 'Antónia', 'Bohuslava', 'Dáša', 'Malvína', 'Kristína', 'Nataša', 'Bohdana', 'Drahomíra',
        'Sára', 'Zora', 'Tamara', 'Ema', 'Tatiana', 'Erika', 'Veronika', 'Agáta', 'Dorota', 'Vanda', 'Zoja', 'Gabriela', 'Perla', 'Ida', 'Liana',
        'Miloslava', 'Vlasta', 'Lívia', 'Eleonóra', 'Etela', 'Romana', 'Zlatica', 'Anežka', 'Bohumila', 'Františka', 'Angela', 'Matilda',
        'Svetlana', 'Ľubica', 'Alena', 'Soňa', 'Vieroslava', 'Zita', 'Miroslava', 'Irena', 'Milena', 'Estera', 'Justína', 'Dana', 'Danica',
        'Jela', 'Jaroslava', 'Jarmila', 'Lea', 'Anastázia', 'Galina', 'Lesana', 'Hermína', 'Monika', 'Ingrida', 'Viktória', 'Blažena', 'Žofia',
        'Sofia', 'Gizela', 'Viola', 'Gertrúda', 'Zina', 'Júlia', 'Juliana', 'Želmíra', 'Ela', 'Vanesa', 'Iveta', 'Vilma', 'Petronela', 'Žaneta',
        'Xénia', 'Karolína', 'Lenka', 'Laura', 'Stanislava', 'Margaréta', 'Dobroslava', 'Blanka', 'Valéria', 'Paulína', 'Sidónia', 'Adriána',
        'Beáta', 'Petra', 'Melánia', 'Diana', 'Berta', 'Patrícia', 'Lujza', 'Amália', 'Milota', 'Nina', 'Margita', 'Kamila', 'Dušana', 'Magdaléna',
        'Oľga', 'Anna', 'Hana', 'Božena', 'Marta', 'Libuša', 'Božidara', 'Dominika', 'Hortenzia', 'Jozefína', 'Štefánia', 'Ľubomíra', 'Zuzana',
        'Darina', 'Marcela', 'Milica', 'Elena', 'Helena', 'Lýdia', 'Anabela', 'Jana', 'Silvia', 'Nikola', 'Ružena', 'Nora', 'Drahoslava', 'Linda',
        'Melinda', 'Rebeka', 'Rozália', 'Regína', 'Alica', 'Marianna', 'Miriama', 'Martina', 'Mária', 'Jolana', 'Ľudomila', 'Ľudmila', 'Olympia',
        'Eugénia', 'Ľuboslava', 'Zdenka', 'Edita', 'Michaela', 'Stela', 'Viera', 'Natália', 'Eliška', 'Brigita', 'Valentína', 'Terézia', 'Vladimíra',
        'Hedviga', 'Uršuľa', 'Alojza', 'Kvetoslava', 'Sabína', 'Dobromila', 'Klára', 'Simona', 'Aurélia', 'Denisa', 'Renáta', 'Irma', 'Agnesa',
        'Klaudia', 'Alžbeta', 'Elvíra', 'Cecília', 'Emília', 'Katarína', 'Henrieta', 'Bibiána', 'Barbora', 'Marína', 'Izabela', 'Hilda', 'Otília',
        'Lucia', 'Branislava', 'Bronislava', 'Ivica', 'Albína', 'Kornélia', 'Sláva', 'Slávka', 'Judita', 'Dagmara', 'Adela', 'Nadežda', 'Eva',
        'Filoména', 'Ivana', 'Milada'

    );

    protected static \$lastNameMale = array(
        'Sloboda', 'Novotný', 'Kučera', 'Veselý', 'Horák', 'Marek', 'Pokorný', 'Král', 'Růžička', 'Zeman', 'Kolár', 'Urban', 'Bartoš', 'Vlček',
        'Polák', 'Kopecký', 'Konečný', 'Malý', 'Holub', 'Abrahám', 'Adam', 'Adamec', 'Almáši', 'Anderle', 'Antal', 'Babka', 'Bahna', 'Bahno',
        'Bajnok', 'Balaša', 'Balog', 'Balogh', 'Baláž', 'Baran', 'Baranka', 'Bartovič', 'Bartoš', 'Bača', 'Beck', 'Beihofner', 'Bella', 'Beran',
        'Bernolák', 'Beňo', 'Bicek', 'Bielik', 'Biringer', 'Blaho', 'Bondra', 'Bosák', 'Boška', 'Brezina', 'Bugár', 'Buš', 'Chalupka', 'Chudík',
        'Cyprich', 'Cíger', 'Dacej', 'Danko', 'Debnár', 'Dej', 'Dekýš', 'Doležal', 'Dostál', 'Dočolomanský', 'Drajna', 'Droppa', 'Dubovský',
        'Dudek', 'Dula', 'Dulla', 'Dusík', 'Dvonč', 'Dzurjanin', 'Dávid', 'Fabian', 'Fabián', 'Fajnor', 'Farkašovský', 'Feldek', 'Fico', 'Filc',
        'Filip', 'Finka', 'Ftorek', 'Galis', 'Gallo', 'Gašpar', 'Gašparovič', 'Gocník', 'Golonka', 'Greguš', 'Grznár', 'Hablák', 'Habšuda',
        'Haluška', 'Halák', 'Hanko', 'Hanzal', 'Hanzel', 'Hanzel', 'Haščák', 'Heretik', 'Hečko', 'Hečková', 'Hlaváček', 'Hlinka', 'Hochschorner',
        'Holub', 'Holuby', 'Horváth', 'Hossa', 'Hraško', 'Hric', 'Hrmo', 'Hrušovský', 'Huba', 'Hudáček', 'Hála', 'Ihnačák', 'Janoška', 'Jantošovič',
        'Janík', 'Jonata', 'Jurina', 'Jurinová', 'Jurík', 'Jáni', 'Jánošík', 'Kaliský', 'Karul', 'Karvaš', 'Keníž', 'Klapka', 'Klaus', 'Kolník',
        'Konstantinidis', 'Korec', 'Kostrec', 'Kováč', 'Kováčik', 'Koza', 'Kubík', 'Kučera', 'Labuda', 'Langoš', 'Lepšík', 'Lexa', 'Lintner',
        'Lubina', 'Lukáč', 'Lupták', 'Líška', 'Majeský', 'Malachovský', 'Malíšek', 'Marián', 'Masaryk', 'Maslo', 'Matiaško', 'Medveď', 'Menyhért',
        'Mečiar', 'Mečíř', 'Mikloško', 'Mikulík', 'Mikuš', 'Mikúš', 'Mišík', 'Mojžiš', 'Mokroš', 'Molnár', 'Moravčík', 'Musil', 'Mydlo', 'Nagy',
        'Nemec', 'Neruda', 'Nezval', 'Nitra', 'Novák', 'Nábělek', 'Němec', 'Obšut', 'Otčenáš', 'Pauko', 'Pavlikovský', 'Pavúk', 'Pašek', 'Paška',
        'Paško', 'Pelikán', 'Petrovický', 'Petruška', 'Plch', 'Podhradská', 'Podkonický', 'Poliak', 'Procházka', 'Puskás', 'Puškáš', 'Raši',
        'Repiský', 'Riszdorfer', 'Romančík', 'Rozenberg', 'Rus', 'Ružička', 'Rúfus', 'Růžička', 'Samson', 'Sedliak', 'Senko', 'Sidor', 'Sklenka',
        'Skutecký', 'Slašťan', 'Sloboda', 'Slobodník', 'Slota', 'Slovák', 'Smrek', 'Stodola', 'Straka', 'Szabó', 'Sámel', 'Sýkora', 'Tatar',
        'Tatarka', 'Tatár', 'Tatárka', 'Timko', 'Tiso', 'Tomeček', 'Truben', 'Turčok', 'Tóth', 'Uram', 'Urblík', 'Vajcík', 'Valent', 'Valuška',
        'Varga', 'Vašíček', 'Vesel', 'Vico', 'Višňovský', 'Vydarený', 'Weiss', 'Zima', 'Zimka', 'Zipser', 'Zátopek', 'Zúbrik', 'Čaplovič',
        'Čarnogurský', 'Čierny', 'Ďaďo', 'Ďurica', 'Ďuriš', 'Šimonovič', 'Škriniar', 'Šouc', 'Šoustal', 'Štefan', 'Štefanka', 'Šulc', 'Šurka',
        'Švehla', 'Šťastný'

    );

    protected static \$lastNameFemale = array(
        'Slobodová', 'Novotná', 'Čierna', 'Kučerová', 'Veselá', 'Krajčíová', 'Nemcová', 'Králová', 'Růžičková', 'Fialová', 'Zemanová',
        'Kolárová', 'Kováčová', 'Vlčková', 'Poláková', 'Kopecká', 'Šimková', 'Konečná', 'Malá', 'Holubová', 'Staneková', 'Šťastná',
        'Vargová', 'Tóthová', 'Horváthová', 'Balážová', 'Szabová', 'Molnárová', 'Balogová', 'Lukáčová', 'Vícenová', 'Ringlóciová', 'Popovičová',
        'Hulmanová', 'Zelenayová', 'Fingerlandová', 'Králiková', 'Kapustová', 'Hantuchová', 'Holéczyová', 'Butvínová', 'Oslejová', 'Radičová', 'Sárová',
        'Sobotková', 'Kažimírová', 'Plšková', 'Jakubová', 'Šindlerová', 'Ondrejková', 'Slobodníková', 'Sadloňová', 'Černá', 'Nosková',
        'Virčíková', 'Taliánová', 'Čuntalová', 'Oťapková', 'Zuzulová', 'Godolová', 'Gonová', 'Jančová', 'Kocúrová', 'Svobodová', 'Oravcová', 'Muráriková',
        'Holubová', 'Kubáňová', 'Ondrišová', 'Šoltisová', 'Molnárová', 'Rezníčková', 'Dubníčková', 'Karolčíková', 'Máliková', 'Malíková', 'Litajová',
        'Kolrusová', 'Košíková', 'Kušnírová', 'Kravjarová', 'Hotová', 'Hajzerová', 'Ferjenčíková', 'Senková', 'Adamcová', 'Pirošová', 'Šimonová',
        'Finková', 'Hrdá', 'Murčová'
    );

    protected static \$title = array(
        'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
        'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.'
    );

    private static \$suffix = array(
        'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.'
    );

    public function title(\$gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$title);
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Novotný'
     */
    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 27,  132 => 26,  126 => 25,  120 => 24,  114 => 23,  108 => 22,  95 => 18,  87 => 17,  81 => 16,  75 => 15,  69 => 14,  63 => 13,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sk_SK;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}'
    );

    protected static \$firstNameMale = array(
        'Drahoslav', 'Severín', 'Alexej', 'Ernest', 'Rastislav', 'Radovan', 'Dobroslav', 'Dalibor', 'Vincent', 'Miloš', 'Timotej', 'Gejza', 'Bohuš',
        'Alfonz', 'Gašpar', 'Emil', 'Erik', 'Blažej', 'Zdenko', 'Dezider', 'Arpád', 'Valentín', 'Pravoslav', 'Jaromír', 'Roman', 'Matej', 'Frederik',
        'Viktor', 'Alexander', 'Radomír', 'Albín', 'Bohumil', 'Kazimír', 'Fridrich', 'Radoslav', 'Tomáš', 'Alan', 'Branislav', 'Bruno', 'Gregor',
        'Vlastimil', 'Boleslav', 'Eduard', 'Jozef', 'Víťazoslav', 'Blahoslav', 'Beňadik', 'Adrián', 'Gabriel', 'Marián', 'Emanuel', 'Miroslav',
        'Benjamín', 'Hugo', 'Richard', 'Izidor', 'Zoltán', 'Albert', 'Igor', 'Július', 'Aleš', 'Fedor', 'Rudolf', 'Valér', 'Marcel', 'Ervín',
        'Slavomír', 'Vojtech', 'Juraj', 'Marek', 'Jaroslav', 'Žigmund', 'Florián', 'Roland', 'Pankrác', 'Servác', 'Bonifác', 'Svetozár', 'Bernard',
        'Júlia', 'Urban', 'Dušan', 'Viliam', 'Ferdinand', 'Norbert', 'Róbert', 'Medard', 'Zlatko', 'Anton', 'Vasil', 'Vít', 'Adolf', 'Vratislav',
        'Alfréd', 'Alojz', 'Ján', 'Tadeáš', 'Ladislav', 'Peter', 'Pavol', 'Miloslav', 'Prokop', 'Cyril', 'Metod', 'Patrik', 'Oliver', 'Ivan',
        'Kamil', 'Henrich', 'Drahomír', 'Bohuslav', 'Iľja', 'Daniel', 'Vladimír', 'Jakub', 'Krištof', 'Ignác', 'Gustáv', 'Jerguš', 'Dominik',
        'Oskar', 'Vavrinec', 'Ľubomír', 'Mojmír', 'Leonard', 'Tichomír', 'Filip', 'Bartolomej', 'Ľudovít', 'Samuel', 'Augustín', 'Belo', 'Oleg',
        'Bystrík', 'Ctibor', 'Ľudomil', 'Konštantín', 'Ľuboslav', 'Matúš', 'Móric', 'Ľuboš', 'Ľubor', 'Vladislav', 'Cyprián', 'Václav', 'Michal',
        'Jarolím', 'Arnold', 'Levoslav', 'František', 'Dionýz', 'Maximilián', 'Koloman', 'Boris', 'Lukáš', 'Kristián', 'Vendelín', 'Sergej',
        'Aurel', 'Demeter', 'Denis', 'Hubert', 'Karol', 'Imrich', 'René', 'Bohumír', 'Teodor', 'Tibor', 'Maroš', 'Martin', 'Svätopluk', 'Stanislav',
        'Leopold', 'Eugen', 'Félix', 'Klement', 'Kornel', 'Milan', 'Vratko', 'Ondrej', 'Andrej', 'Edmund', 'Oldrich', 'Oto', 'Mikuláš', 'Ambróz',
        'Radúz', 'Bohdan', 'Adam', 'Štefan', 'Dávid', 'Silvester'

    );

    protected static \$firstNameFemale = array(
        'Alexandra', 'Karina', 'Daniela', 'Andrea', 'Antónia', 'Bohuslava', 'Dáša', 'Malvína', 'Kristína', 'Nataša', 'Bohdana', 'Drahomíra',
        'Sára', 'Zora', 'Tamara', 'Ema', 'Tatiana', 'Erika', 'Veronika', 'Agáta', 'Dorota', 'Vanda', 'Zoja', 'Gabriela', 'Perla', 'Ida', 'Liana',
        'Miloslava', 'Vlasta', 'Lívia', 'Eleonóra', 'Etela', 'Romana', 'Zlatica', 'Anežka', 'Bohumila', 'Františka', 'Angela', 'Matilda',
        'Svetlana', 'Ľubica', 'Alena', 'Soňa', 'Vieroslava', 'Zita', 'Miroslava', 'Irena', 'Milena', 'Estera', 'Justína', 'Dana', 'Danica',
        'Jela', 'Jaroslava', 'Jarmila', 'Lea', 'Anastázia', 'Galina', 'Lesana', 'Hermína', 'Monika', 'Ingrida', 'Viktória', 'Blažena', 'Žofia',
        'Sofia', 'Gizela', 'Viola', 'Gertrúda', 'Zina', 'Júlia', 'Juliana', 'Želmíra', 'Ela', 'Vanesa', 'Iveta', 'Vilma', 'Petronela', 'Žaneta',
        'Xénia', 'Karolína', 'Lenka', 'Laura', 'Stanislava', 'Margaréta', 'Dobroslava', 'Blanka', 'Valéria', 'Paulína', 'Sidónia', 'Adriána',
        'Beáta', 'Petra', 'Melánia', 'Diana', 'Berta', 'Patrícia', 'Lujza', 'Amália', 'Milota', 'Nina', 'Margita', 'Kamila', 'Dušana', 'Magdaléna',
        'Oľga', 'Anna', 'Hana', 'Božena', 'Marta', 'Libuša', 'Božidara', 'Dominika', 'Hortenzia', 'Jozefína', 'Štefánia', 'Ľubomíra', 'Zuzana',
        'Darina', 'Marcela', 'Milica', 'Elena', 'Helena', 'Lýdia', 'Anabela', 'Jana', 'Silvia', 'Nikola', 'Ružena', 'Nora', 'Drahoslava', 'Linda',
        'Melinda', 'Rebeka', 'Rozália', 'Regína', 'Alica', 'Marianna', 'Miriama', 'Martina', 'Mária', 'Jolana', 'Ľudomila', 'Ľudmila', 'Olympia',
        'Eugénia', 'Ľuboslava', 'Zdenka', 'Edita', 'Michaela', 'Stela', 'Viera', 'Natália', 'Eliška', 'Brigita', 'Valentína', 'Terézia', 'Vladimíra',
        'Hedviga', 'Uršuľa', 'Alojza', 'Kvetoslava', 'Sabína', 'Dobromila', 'Klára', 'Simona', 'Aurélia', 'Denisa', 'Renáta', 'Irma', 'Agnesa',
        'Klaudia', 'Alžbeta', 'Elvíra', 'Cecília', 'Emília', 'Katarína', 'Henrieta', 'Bibiána', 'Barbora', 'Marína', 'Izabela', 'Hilda', 'Otília',
        'Lucia', 'Branislava', 'Bronislava', 'Ivica', 'Albína', 'Kornélia', 'Sláva', 'Slávka', 'Judita', 'Dagmara', 'Adela', 'Nadežda', 'Eva',
        'Filoména', 'Ivana', 'Milada'

    );

    protected static \$lastNameMale = array(
        'Sloboda', 'Novotný', 'Kučera', 'Veselý', 'Horák', 'Marek', 'Pokorný', 'Král', 'Růžička', 'Zeman', 'Kolár', 'Urban', 'Bartoš', 'Vlček',
        'Polák', 'Kopecký', 'Konečný', 'Malý', 'Holub', 'Abrahám', 'Adam', 'Adamec', 'Almáši', 'Anderle', 'Antal', 'Babka', 'Bahna', 'Bahno',
        'Bajnok', 'Balaša', 'Balog', 'Balogh', 'Baláž', 'Baran', 'Baranka', 'Bartovič', 'Bartoš', 'Bača', 'Beck', 'Beihofner', 'Bella', 'Beran',
        'Bernolák', 'Beňo', 'Bicek', 'Bielik', 'Biringer', 'Blaho', 'Bondra', 'Bosák', 'Boška', 'Brezina', 'Bugár', 'Buš', 'Chalupka', 'Chudík',
        'Cyprich', 'Cíger', 'Dacej', 'Danko', 'Debnár', 'Dej', 'Dekýš', 'Doležal', 'Dostál', 'Dočolomanský', 'Drajna', 'Droppa', 'Dubovský',
        'Dudek', 'Dula', 'Dulla', 'Dusík', 'Dvonč', 'Dzurjanin', 'Dávid', 'Fabian', 'Fabián', 'Fajnor', 'Farkašovský', 'Feldek', 'Fico', 'Filc',
        'Filip', 'Finka', 'Ftorek', 'Galis', 'Gallo', 'Gašpar', 'Gašparovič', 'Gocník', 'Golonka', 'Greguš', 'Grznár', 'Hablák', 'Habšuda',
        'Haluška', 'Halák', 'Hanko', 'Hanzal', 'Hanzel', 'Hanzel', 'Haščák', 'Heretik', 'Hečko', 'Hečková', 'Hlaváček', 'Hlinka', 'Hochschorner',
        'Holub', 'Holuby', 'Horváth', 'Hossa', 'Hraško', 'Hric', 'Hrmo', 'Hrušovský', 'Huba', 'Hudáček', 'Hála', 'Ihnačák', 'Janoška', 'Jantošovič',
        'Janík', 'Jonata', 'Jurina', 'Jurinová', 'Jurík', 'Jáni', 'Jánošík', 'Kaliský', 'Karul', 'Karvaš', 'Keníž', 'Klapka', 'Klaus', 'Kolník',
        'Konstantinidis', 'Korec', 'Kostrec', 'Kováč', 'Kováčik', 'Koza', 'Kubík', 'Kučera', 'Labuda', 'Langoš', 'Lepšík', 'Lexa', 'Lintner',
        'Lubina', 'Lukáč', 'Lupták', 'Líška', 'Majeský', 'Malachovský', 'Malíšek', 'Marián', 'Masaryk', 'Maslo', 'Matiaško', 'Medveď', 'Menyhért',
        'Mečiar', 'Mečíř', 'Mikloško', 'Mikulík', 'Mikuš', 'Mikúš', 'Mišík', 'Mojžiš', 'Mokroš', 'Molnár', 'Moravčík', 'Musil', 'Mydlo', 'Nagy',
        'Nemec', 'Neruda', 'Nezval', 'Nitra', 'Novák', 'Nábělek', 'Němec', 'Obšut', 'Otčenáš', 'Pauko', 'Pavlikovský', 'Pavúk', 'Pašek', 'Paška',
        'Paško', 'Pelikán', 'Petrovický', 'Petruška', 'Plch', 'Podhradská', 'Podkonický', 'Poliak', 'Procházka', 'Puskás', 'Puškáš', 'Raši',
        'Repiský', 'Riszdorfer', 'Romančík', 'Rozenberg', 'Rus', 'Ružička', 'Rúfus', 'Růžička', 'Samson', 'Sedliak', 'Senko', 'Sidor', 'Sklenka',
        'Skutecký', 'Slašťan', 'Sloboda', 'Slobodník', 'Slota', 'Slovák', 'Smrek', 'Stodola', 'Straka', 'Szabó', 'Sámel', 'Sýkora', 'Tatar',
        'Tatarka', 'Tatár', 'Tatárka', 'Timko', 'Tiso', 'Tomeček', 'Truben', 'Turčok', 'Tóth', 'Uram', 'Urblík', 'Vajcík', 'Valent', 'Valuška',
        'Varga', 'Vašíček', 'Vesel', 'Vico', 'Višňovský', 'Vydarený', 'Weiss', 'Zima', 'Zimka', 'Zipser', 'Zátopek', 'Zúbrik', 'Čaplovič',
        'Čarnogurský', 'Čierny', 'Ďaďo', 'Ďurica', 'Ďuriš', 'Šimonovič', 'Škriniar', 'Šouc', 'Šoustal', 'Štefan', 'Štefanka', 'Šulc', 'Šurka',
        'Švehla', 'Šťastný'

    );

    protected static \$lastNameFemale = array(
        'Slobodová', 'Novotná', 'Čierna', 'Kučerová', 'Veselá', 'Krajčíová', 'Nemcová', 'Králová', 'Růžičková', 'Fialová', 'Zemanová',
        'Kolárová', 'Kováčová', 'Vlčková', 'Poláková', 'Kopecká', 'Šimková', 'Konečná', 'Malá', 'Holubová', 'Staneková', 'Šťastná',
        'Vargová', 'Tóthová', 'Horváthová', 'Balážová', 'Szabová', 'Molnárová', 'Balogová', 'Lukáčová', 'Vícenová', 'Ringlóciová', 'Popovičová',
        'Hulmanová', 'Zelenayová', 'Fingerlandová', 'Králiková', 'Kapustová', 'Hantuchová', 'Holéczyová', 'Butvínová', 'Oslejová', 'Radičová', 'Sárová',
        'Sobotková', 'Kažimírová', 'Plšková', 'Jakubová', 'Šindlerová', 'Ondrejková', 'Slobodníková', 'Sadloňová', 'Černá', 'Nosková',
        'Virčíková', 'Taliánová', 'Čuntalová', 'Oťapková', 'Zuzulová', 'Godolová', 'Gonová', 'Jančová', 'Kocúrová', 'Svobodová', 'Oravcová', 'Muráriková',
        'Holubová', 'Kubáňová', 'Ondrišová', 'Šoltisová', 'Molnárová', 'Rezníčková', 'Dubníčková', 'Karolčíková', 'Máliková', 'Malíková', 'Litajová',
        'Kolrusová', 'Košíková', 'Kušnírová', 'Kravjarová', 'Hotová', 'Hajzerová', 'Ferjenčíková', 'Senková', 'Adamcová', 'Pirošová', 'Šimonová',
        'Finková', 'Hrdá', 'Murčová'
    );

    protected static \$title = array(
        'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
        'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.'
    );

    private static \$suffix = array(
        'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.'
    );

    public function title(\$gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$title);
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Novotný'
     */
    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Person.php");
    }
}
