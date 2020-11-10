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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php */
class __TwigTemplate_6ff757b5de4412db6003f69f460663bc133739ea6a0c1d178c387bacf415bbb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_AT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
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
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
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
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
         * 60 most popular names in 1985, 1995, 2005 and 2015
         * {@link} http://www.statistik.at/wcm/idc/idcplg?IdcService=GET_PDF_FILE&RevisionSelectionMethod=LatestReleased&dDocName=021130
         **/
    protected static \$firstNameMale = array(
        'Adrian', 'Alexander', 'Andreas', 'Anton',
        'Ben', 'Benedikt', 'Benjamin', 'Bernd', 'Bernhard',
        'Christian', 'Christoph', 'Christopher', 'Clemens',
        'Daniel', 'David', 'Dominik',
        'Elias', 'Emil', 'Erik',
        'Fabian', 'Fabio', 'Felix', 'Finn', 'Florian', 'Franz',
        'Gabriel', 'Georg', 'Gerald', 'Gerhard', 'Gernot', 'Gregor', 'Günther',
        'Hannes', 'Harald', 'Helmut', 'Herbert',
        'Jakob', 'Jan', 'Johann', 'Johannes', 'Jonas', 'Jonathan', 'Josef', 'Joseph', 'Julian', 'Justin', 'Jürgen',
        'Karl', 'Kevin', 'Kilian', 'Klaus', 'Konstantin',
        'Leo', 'Leon', 'Lorenz', 'Luca', 'Luis', 'Lukas',
        'Manfred', 'Manuel', 'Marc', 'Marcel', 'Marco', 'Mario', 'Markus', 'Martin', 'Marvin', 'Matteo', 'Matthias', 'Max', 'Maximilian', 'Michael', 'Moritz',
        'Nico', 'Nicolas', 'Niklas', 'Noah',
        'Oliver', 'Oskar',
        'Pascal', 'Patrick', 'Patrik', 'Paul', 'Peter', 'Philipp',
        'Ralph', 'Raphael', 'Reinhard', 'René', 'Richard', 'Robert', 'Roland', 'Roman',
        'Samuel', 'Sandro', 'Sascha', 'Sebastian', 'Simon', 'Stefan',
        'Theo', 'Theodor', 'Thomas', 'Tim', 'Tobias',
        'Valentin', 'Vincent',
        'Werner', 'Wolfgang',
    );

    /**
         * 60 most popular names in 1985, 1995, 2005 and 2015
         * {@link} http://www.statistik.at/wcm/idc/idcplg?IdcService=GET_PDF_FILE&RevisionSelectionMethod=LatestReleased&dDocName=021130
         **/
    protected static \$firstNameFemale = array(
        'Alexandra', 'Alexandrea', 'Algelika', 'Alina', 'Amelie', 'Andrea', 'Angelina', 'Anita', 'Anja', 'Anna', 'Anna-Lena', 'Annika', 'Astrid',
        'Barbara', 'Bettina', 'Bianca', 'Birgit',
        'Carina', 'Caroline', 'Celina', 'Chiara', 'Christina', 'Christine', 'Clara', 'Claudia', 'Cornelia',
        'Daniela', 'Denise', 'Doris',
        'Elena', 'Elisa', 'Elisabeth', 'Ella', 'Emely', 'Emilia', 'Emily', 'Emma', 'Eva', 'Eva-Maria',
        'Franziska',
        'Hanna', 'Hannah', 'Helena',
        'Ines', 'Iris', 'Isabel', 'Isabella',
        'Jacqueline', 'Jacquline', 'Jana', 'Janine', 'Jasmin', 'Jennifer', 'Jessica', 'Johanna', 'Julia',
        'Karin', 'Katharina', 'Katrin', 'Kerstin',
        'Lara', 'Larissa', 'Laura', 'Lea', 'Lena', 'Leonie', 'Lilly', 'Lina', 'Lisa', 'Livia', 'Luisa',
        'Magdalena', 'Maja', 'Manuela', 'Maria', 'Marie', 'Marion', 'Marlene', 'Martina', 'Melanie', 'Melina', 'Mia', 'Michaela', 'Michelle', 'Miriam', 'Mona', 'Monika',
        'Nadine', 'Natalie', 'Nicole', 'Nina', 'Nora',
        'Patricia', 'Paula', 'Petra', 'Pia',
        'Rebecca', 'Rosa',
        'Sabine', 'Sabrina', 'Sandra', 'Sarah', 'Selina', 'Silvia', 'Simone', 'Sonja', 'Sophia', 'Sophie', 'Stefanie', 'Susanne',
        'Tamara', 'Tanja', 'Theresa',
        'Valentina', 'Valerie', 'Vanessa', 'Verena', 'Viktoria',
        'Yvonne',
    );

    /**
         * Top 500 Names from a phone directory (February 2004)
         * {@link} https://de.wiktionary.org/wiki/Verzeichnis:Deutsch/Liste_der_h%C3%A4ufigsten_Nachnamen_Deutschlands
         **/
    protected static \$lastName = array(
        'Abraham', 'Achleitner', 'Adam', 'Aichinger', 'Aigner', 'Albrecht', 'Altmann', 'Amann', 'Amon', 'Angerer', 'Arnold', 'Artner', 'Aschauer', 'Auer', 'Augustin', 'Auinger',
        'Bacher', 'Bachler', 'Bachmann', 'Bader', 'Baier', 'Barth', 'Bartl', 'Bauer', 'Baumann', 'Baumgartner', 'Bayer', 'Beck', 'Beer', 'Berger', 'Bergmann', 'Bernhard', 'Bichler', 'Binder', 'Bischof', 'Bock', 'Bogner', 'Brandl', 'Brandner', 'Brandstetter', 'Brandstätter', 'Braun', 'Brenner', 'Bruckner', 'Brugger', 'Brunner', 'Buchberger', 'Buchegger', 'Bucher', 'Buchinger', 'Buchner', 'Burger', 'Burgstaller', 'Burtscher', 'Böck', 'Böhm', 'Bösch',
        'Danner', 'Denk', 'Deutsch', 'Dietrich', 'Dobler', 'Doppler', 'Dorner', 'Draxler',
        'Eberharter', 'Eberl', 'Ebner', 'Ecker', 'Eder', 'Edlinger', 'Egger', 'Eibl', 'Eichberger', 'Eichinger', 'Eigner', 'Erhart', 'Ernst', 'Ertl',
        'Falkner', 'Fasching', 'Feichtinger', 'Fellner', 'Fiala', 'Fichtinger', 'Fiedler', 'Fink', 'Fischer', 'Fleischhacker', 'Forster', 'Forstner', 'Frank', 'Franz', 'Friedl', 'Friedrich', 'Fritsch', 'Fritz', 'Fröhlich', 'Frühwirth', 'Fuchs', 'Führer', 'Fürst',
        'Gabriel', 'Gangl', 'Gartner', 'Gasser', 'Gassner', 'Geiger', 'Geisler', 'Geyer', 'Glaser', 'Glatz', 'Gmeiner', 'Grabner', 'Graf', 'Gratzer', 'Greiner', 'Grill', 'Gritsch', 'Gross', 'Groß', 'Gruber', 'Grünwald', 'Gschwandtner', 'Gutmann',
        'Haas', 'Haberl', 'Hackl', 'Hafner', 'Hagen', 'Hager', 'Hahn', 'Haider', 'Haidinger', 'Haller', 'Hammer', 'Hammerl', 'Handl', 'Handler', 'Harrer', 'Hartl', 'Hartmann', 'Haslinger', 'Hauer', 'Hauser', 'Heindl', 'Heinrich', 'Hemetsberger', 'Herbst', 'Hermann', 'Herzog', 'Hinterberger', 'Hinteregger', 'Hinterleitner', 'Hirsch', 'Hochreiter', 'Hofbauer', 'Hofer', 'Hoffmann', 'Hofmann', 'Hofstätter', 'Holzer', 'Holzinger', 'Holzmann', 'Horvath', 'Huber', 'Huemer', 'Hufnagl', 'Humer', 'Hummer', 'Hutter', 'Hämmerle', 'Hödl', 'Höfler', 'Höller', 'Hölzl', 'Hörmann', 'Hütter',
        'Jahn', 'Jandl', 'Janisch', 'Jovanovic', 'Jung', 'Jungwirth', 'Jäger',
        'Kainz', 'Kaiser', 'Kaltenbrunner', 'Kapeller', 'Kargl', 'Karl', 'Karner', 'Kastner', 'Kaufmann', 'Kellner', 'Kern', 'Kerschbaumer', 'Kirchmair', 'Kirchner', 'Klammer', 'Klein', 'Klinger', 'Klug', 'Knapp', 'Knoll', 'Koch', 'Kofler', 'Kogler', 'Kohl', 'Koller', 'Kollmann', 'Konrad', 'Kopp', 'Kovacs', 'Kraft', 'Krainer', 'Kramer', 'Krammer', 'Kraus', 'Kremser', 'Krenn', 'Kreuzer', 'Kronberger', 'Kröll', 'Kugler', 'Kummer', 'Kurz', 'Köberl', 'Köck', 'Köhler', 'König',
        'Lackner', 'Lamprecht', 'Lang', 'Langer', 'Lechner', 'Lederer', 'Leeb', 'Lehner', 'Leitgeb', 'Leitner', 'Lengauer', 'Lenz', 'Lettner', 'Lindner', 'List', 'Loidl', 'Lorenz', 'Ludwig', 'Luger', 'Lukas', 'Lutz', 'Löffler',
        'Mader', 'Maier', 'Maierhofer', 'Mair', 'Mairhofer', 'Mandl', 'Markovic', 'Martin', 'Maurer', 'Mayer', 'Mayerhofer', 'Mayr', 'Mayrhofer', 'Meier', 'Meixner', 'Messner', 'Meyer', 'Mitterer', 'Moosbrugger', 'Moser', 'Muhr', 'Mühlbacher', 'Müller', 'Müllner',
        'Nagl', 'Nemeth', 'Neubauer', 'Neuhauser', 'Neuhold', 'Neumann', 'Neumayer', 'Neuner', 'Neuwirth', 'Nikolic', 'Novak', 'Nowak', 'Nussbaumer', 'Nußbaumer',
        'Ofner', 'Ortner', 'Oswald', 'Ott',
        'Paar', 'Pacher', 'Pammer', 'Paul', 'Payer', 'Peer', 'Penz', 'Peter', 'Petrovic', 'Petz', 'Pfeffer', 'Pfeifer', 'Pfeiffer', 'Pfister', 'Pfleger', 'Pichler', 'Pilz', 'Pinter', 'Pirker', 'Plank', 'Plattner', 'Platzer', 'Pointner', 'Pokorny', 'Pollak', 'Posch', 'Prem', 'Prinz', 'Probst', 'Pucher', 'Putz', 'Pöll', 'Pölzl', 'Pöschl', 'Pühringer',
        'Raab', 'Rabl', 'Rainer', 'Rath', 'Rauch', 'Rausch', 'Rauscher', 'Rauter', 'Rechberger', 'Redl', 'Reich', 'Reichl', 'Reindl', 'Reiner', 'Reinisch', 'Reischl', 'Reisinger', 'Reiter', 'Reiterer', 'Renner', 'Resch', 'Richter', 'Rieder', 'Riedl', 'Riedler', 'Rieger', 'Riegler', 'Rieser', 'Ritter', 'Rosenberger', 'Roth', 'Rupp',
        'Sailer', 'Sattler', 'Sauer', 'Schachinger', 'Schachner', 'Schaffer', 'Schaller', 'Scharf', 'Schatz', 'Schauer', 'Scheiber', 'Schenk', 'Scheucher', 'Schiefer', 'Schiller', 'Schindler', 'Schlager', 'Schlögl', 'Schmid', 'Schmidt', 'Schmied', 'Schnabl', 'Schneeberger', 'Schneider', 'Schober', 'Scholz', 'Schranz', 'Schreiber', 'Schreiner', 'Schubert', 'Schuh', 'Schuller', 'Schulz', 'Schuster', 'Schwab', 'Schwaiger', 'Schwaighofer', 'Schwarz', 'Schweiger', 'Schweighofer', 'Schön', 'Schöpf', 'Schütz', 'Seebacher', 'Seidl', 'Siegl', 'Simon', 'Singer', 'Sommer', 'Sonnleitner', 'Spitzer', 'Springer', 'Stadler', 'Stangl', 'Stark', 'Staudinger', 'Steger', 'Steinbauer', 'Steinberger', 'Steindl', 'Steiner', 'Steininger', 'Steinkellner', 'Steinlechner', 'Steinwender', 'Stelzer', 'Stern', 'Steurer', 'Stocker', 'Stockinger', 'Strasser', 'Strauss', 'Strauß', 'Strobl', 'Stummer', 'Sturm', 'Stöckl', 'Stöger', 'Suppan', 'Swoboda', 'Szabo',
        'Thaler', 'Thaller', 'Thurner', 'Tischler', 'Toth', 'Traxler', 'Trimmel', 'Trummer',
        'Ulrich', 'Unger', 'Unterberger', 'Unterweger', 'Urban',
        'Varga', 'Vogel', 'Vogl',
        'Wachter', 'Wagner', 'Walch', 'Walcher', 'Wallner', 'Walter', 'Weber', 'Wechselberger', 'Wegscheider', 'Weidinger', 'Weigl', 'Weinberger', 'Weiss', 'Weiß', 'Weninger', 'Werner', 'Wieland', 'Wieser', 'Wiesinger', 'Wild', 'Wilhelm', 'Wimmer', 'Windisch', 'Winkler', 'Winter', 'Wirth', 'Wittmann', 'Wolf', 'Wurm', 'Wurzer',
        'Zach', 'Zangerl', 'Zauner', 'Zechner', 'Zehetner', 'Zeilinger', 'Zeller', 'Zenz', 'Ziegler', 'Zimmermann', 'Zöhrer',
    );

    protected static \$titleMale = array('Herr', 'Dr.', 'Mag.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');
    protected static \$titleFemale = array('Frau', 'Dr.', 'Maga.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');

    protected static \$suffix = array('B.Sc.', 'B.A.', 'B.Eng.', 'MBA.');

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
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 24,  137 => 23,  129 => 22,  123 => 21,  117 => 20,  111 => 19,  105 => 18,  92 => 14,  84 => 13,  76 => 12,  70 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_AT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    /**
         * 60 most popular names in 1985, 1995, 2005 and 2015
         * {@link} http://www.statistik.at/wcm/idc/idcplg?IdcService=GET_PDF_FILE&RevisionSelectionMethod=LatestReleased&dDocName=021130
         **/
    protected static \$firstNameMale = array(
        'Adrian', 'Alexander', 'Andreas', 'Anton',
        'Ben', 'Benedikt', 'Benjamin', 'Bernd', 'Bernhard',
        'Christian', 'Christoph', 'Christopher', 'Clemens',
        'Daniel', 'David', 'Dominik',
        'Elias', 'Emil', 'Erik',
        'Fabian', 'Fabio', 'Felix', 'Finn', 'Florian', 'Franz',
        'Gabriel', 'Georg', 'Gerald', 'Gerhard', 'Gernot', 'Gregor', 'Günther',
        'Hannes', 'Harald', 'Helmut', 'Herbert',
        'Jakob', 'Jan', 'Johann', 'Johannes', 'Jonas', 'Jonathan', 'Josef', 'Joseph', 'Julian', 'Justin', 'Jürgen',
        'Karl', 'Kevin', 'Kilian', 'Klaus', 'Konstantin',
        'Leo', 'Leon', 'Lorenz', 'Luca', 'Luis', 'Lukas',
        'Manfred', 'Manuel', 'Marc', 'Marcel', 'Marco', 'Mario', 'Markus', 'Martin', 'Marvin', 'Matteo', 'Matthias', 'Max', 'Maximilian', 'Michael', 'Moritz',
        'Nico', 'Nicolas', 'Niklas', 'Noah',
        'Oliver', 'Oskar',
        'Pascal', 'Patrick', 'Patrik', 'Paul', 'Peter', 'Philipp',
        'Ralph', 'Raphael', 'Reinhard', 'René', 'Richard', 'Robert', 'Roland', 'Roman',
        'Samuel', 'Sandro', 'Sascha', 'Sebastian', 'Simon', 'Stefan',
        'Theo', 'Theodor', 'Thomas', 'Tim', 'Tobias',
        'Valentin', 'Vincent',
        'Werner', 'Wolfgang',
    );

    /**
         * 60 most popular names in 1985, 1995, 2005 and 2015
         * {@link} http://www.statistik.at/wcm/idc/idcplg?IdcService=GET_PDF_FILE&RevisionSelectionMethod=LatestReleased&dDocName=021130
         **/
    protected static \$firstNameFemale = array(
        'Alexandra', 'Alexandrea', 'Algelika', 'Alina', 'Amelie', 'Andrea', 'Angelina', 'Anita', 'Anja', 'Anna', 'Anna-Lena', 'Annika', 'Astrid',
        'Barbara', 'Bettina', 'Bianca', 'Birgit',
        'Carina', 'Caroline', 'Celina', 'Chiara', 'Christina', 'Christine', 'Clara', 'Claudia', 'Cornelia',
        'Daniela', 'Denise', 'Doris',
        'Elena', 'Elisa', 'Elisabeth', 'Ella', 'Emely', 'Emilia', 'Emily', 'Emma', 'Eva', 'Eva-Maria',
        'Franziska',
        'Hanna', 'Hannah', 'Helena',
        'Ines', 'Iris', 'Isabel', 'Isabella',
        'Jacqueline', 'Jacquline', 'Jana', 'Janine', 'Jasmin', 'Jennifer', 'Jessica', 'Johanna', 'Julia',
        'Karin', 'Katharina', 'Katrin', 'Kerstin',
        'Lara', 'Larissa', 'Laura', 'Lea', 'Lena', 'Leonie', 'Lilly', 'Lina', 'Lisa', 'Livia', 'Luisa',
        'Magdalena', 'Maja', 'Manuela', 'Maria', 'Marie', 'Marion', 'Marlene', 'Martina', 'Melanie', 'Melina', 'Mia', 'Michaela', 'Michelle', 'Miriam', 'Mona', 'Monika',
        'Nadine', 'Natalie', 'Nicole', 'Nina', 'Nora',
        'Patricia', 'Paula', 'Petra', 'Pia',
        'Rebecca', 'Rosa',
        'Sabine', 'Sabrina', 'Sandra', 'Sarah', 'Selina', 'Silvia', 'Simone', 'Sonja', 'Sophia', 'Sophie', 'Stefanie', 'Susanne',
        'Tamara', 'Tanja', 'Theresa',
        'Valentina', 'Valerie', 'Vanessa', 'Verena', 'Viktoria',
        'Yvonne',
    );

    /**
         * Top 500 Names from a phone directory (February 2004)
         * {@link} https://de.wiktionary.org/wiki/Verzeichnis:Deutsch/Liste_der_h%C3%A4ufigsten_Nachnamen_Deutschlands
         **/
    protected static \$lastName = array(
        'Abraham', 'Achleitner', 'Adam', 'Aichinger', 'Aigner', 'Albrecht', 'Altmann', 'Amann', 'Amon', 'Angerer', 'Arnold', 'Artner', 'Aschauer', 'Auer', 'Augustin', 'Auinger',
        'Bacher', 'Bachler', 'Bachmann', 'Bader', 'Baier', 'Barth', 'Bartl', 'Bauer', 'Baumann', 'Baumgartner', 'Bayer', 'Beck', 'Beer', 'Berger', 'Bergmann', 'Bernhard', 'Bichler', 'Binder', 'Bischof', 'Bock', 'Bogner', 'Brandl', 'Brandner', 'Brandstetter', 'Brandstätter', 'Braun', 'Brenner', 'Bruckner', 'Brugger', 'Brunner', 'Buchberger', 'Buchegger', 'Bucher', 'Buchinger', 'Buchner', 'Burger', 'Burgstaller', 'Burtscher', 'Böck', 'Böhm', 'Bösch',
        'Danner', 'Denk', 'Deutsch', 'Dietrich', 'Dobler', 'Doppler', 'Dorner', 'Draxler',
        'Eberharter', 'Eberl', 'Ebner', 'Ecker', 'Eder', 'Edlinger', 'Egger', 'Eibl', 'Eichberger', 'Eichinger', 'Eigner', 'Erhart', 'Ernst', 'Ertl',
        'Falkner', 'Fasching', 'Feichtinger', 'Fellner', 'Fiala', 'Fichtinger', 'Fiedler', 'Fink', 'Fischer', 'Fleischhacker', 'Forster', 'Forstner', 'Frank', 'Franz', 'Friedl', 'Friedrich', 'Fritsch', 'Fritz', 'Fröhlich', 'Frühwirth', 'Fuchs', 'Führer', 'Fürst',
        'Gabriel', 'Gangl', 'Gartner', 'Gasser', 'Gassner', 'Geiger', 'Geisler', 'Geyer', 'Glaser', 'Glatz', 'Gmeiner', 'Grabner', 'Graf', 'Gratzer', 'Greiner', 'Grill', 'Gritsch', 'Gross', 'Groß', 'Gruber', 'Grünwald', 'Gschwandtner', 'Gutmann',
        'Haas', 'Haberl', 'Hackl', 'Hafner', 'Hagen', 'Hager', 'Hahn', 'Haider', 'Haidinger', 'Haller', 'Hammer', 'Hammerl', 'Handl', 'Handler', 'Harrer', 'Hartl', 'Hartmann', 'Haslinger', 'Hauer', 'Hauser', 'Heindl', 'Heinrich', 'Hemetsberger', 'Herbst', 'Hermann', 'Herzog', 'Hinterberger', 'Hinteregger', 'Hinterleitner', 'Hirsch', 'Hochreiter', 'Hofbauer', 'Hofer', 'Hoffmann', 'Hofmann', 'Hofstätter', 'Holzer', 'Holzinger', 'Holzmann', 'Horvath', 'Huber', 'Huemer', 'Hufnagl', 'Humer', 'Hummer', 'Hutter', 'Hämmerle', 'Hödl', 'Höfler', 'Höller', 'Hölzl', 'Hörmann', 'Hütter',
        'Jahn', 'Jandl', 'Janisch', 'Jovanovic', 'Jung', 'Jungwirth', 'Jäger',
        'Kainz', 'Kaiser', 'Kaltenbrunner', 'Kapeller', 'Kargl', 'Karl', 'Karner', 'Kastner', 'Kaufmann', 'Kellner', 'Kern', 'Kerschbaumer', 'Kirchmair', 'Kirchner', 'Klammer', 'Klein', 'Klinger', 'Klug', 'Knapp', 'Knoll', 'Koch', 'Kofler', 'Kogler', 'Kohl', 'Koller', 'Kollmann', 'Konrad', 'Kopp', 'Kovacs', 'Kraft', 'Krainer', 'Kramer', 'Krammer', 'Kraus', 'Kremser', 'Krenn', 'Kreuzer', 'Kronberger', 'Kröll', 'Kugler', 'Kummer', 'Kurz', 'Köberl', 'Köck', 'Köhler', 'König',
        'Lackner', 'Lamprecht', 'Lang', 'Langer', 'Lechner', 'Lederer', 'Leeb', 'Lehner', 'Leitgeb', 'Leitner', 'Lengauer', 'Lenz', 'Lettner', 'Lindner', 'List', 'Loidl', 'Lorenz', 'Ludwig', 'Luger', 'Lukas', 'Lutz', 'Löffler',
        'Mader', 'Maier', 'Maierhofer', 'Mair', 'Mairhofer', 'Mandl', 'Markovic', 'Martin', 'Maurer', 'Mayer', 'Mayerhofer', 'Mayr', 'Mayrhofer', 'Meier', 'Meixner', 'Messner', 'Meyer', 'Mitterer', 'Moosbrugger', 'Moser', 'Muhr', 'Mühlbacher', 'Müller', 'Müllner',
        'Nagl', 'Nemeth', 'Neubauer', 'Neuhauser', 'Neuhold', 'Neumann', 'Neumayer', 'Neuner', 'Neuwirth', 'Nikolic', 'Novak', 'Nowak', 'Nussbaumer', 'Nußbaumer',
        'Ofner', 'Ortner', 'Oswald', 'Ott',
        'Paar', 'Pacher', 'Pammer', 'Paul', 'Payer', 'Peer', 'Penz', 'Peter', 'Petrovic', 'Petz', 'Pfeffer', 'Pfeifer', 'Pfeiffer', 'Pfister', 'Pfleger', 'Pichler', 'Pilz', 'Pinter', 'Pirker', 'Plank', 'Plattner', 'Platzer', 'Pointner', 'Pokorny', 'Pollak', 'Posch', 'Prem', 'Prinz', 'Probst', 'Pucher', 'Putz', 'Pöll', 'Pölzl', 'Pöschl', 'Pühringer',
        'Raab', 'Rabl', 'Rainer', 'Rath', 'Rauch', 'Rausch', 'Rauscher', 'Rauter', 'Rechberger', 'Redl', 'Reich', 'Reichl', 'Reindl', 'Reiner', 'Reinisch', 'Reischl', 'Reisinger', 'Reiter', 'Reiterer', 'Renner', 'Resch', 'Richter', 'Rieder', 'Riedl', 'Riedler', 'Rieger', 'Riegler', 'Rieser', 'Ritter', 'Rosenberger', 'Roth', 'Rupp',
        'Sailer', 'Sattler', 'Sauer', 'Schachinger', 'Schachner', 'Schaffer', 'Schaller', 'Scharf', 'Schatz', 'Schauer', 'Scheiber', 'Schenk', 'Scheucher', 'Schiefer', 'Schiller', 'Schindler', 'Schlager', 'Schlögl', 'Schmid', 'Schmidt', 'Schmied', 'Schnabl', 'Schneeberger', 'Schneider', 'Schober', 'Scholz', 'Schranz', 'Schreiber', 'Schreiner', 'Schubert', 'Schuh', 'Schuller', 'Schulz', 'Schuster', 'Schwab', 'Schwaiger', 'Schwaighofer', 'Schwarz', 'Schweiger', 'Schweighofer', 'Schön', 'Schöpf', 'Schütz', 'Seebacher', 'Seidl', 'Siegl', 'Simon', 'Singer', 'Sommer', 'Sonnleitner', 'Spitzer', 'Springer', 'Stadler', 'Stangl', 'Stark', 'Staudinger', 'Steger', 'Steinbauer', 'Steinberger', 'Steindl', 'Steiner', 'Steininger', 'Steinkellner', 'Steinlechner', 'Steinwender', 'Stelzer', 'Stern', 'Steurer', 'Stocker', 'Stockinger', 'Strasser', 'Strauss', 'Strauß', 'Strobl', 'Stummer', 'Sturm', 'Stöckl', 'Stöger', 'Suppan', 'Swoboda', 'Szabo',
        'Thaler', 'Thaller', 'Thurner', 'Tischler', 'Toth', 'Traxler', 'Trimmel', 'Trummer',
        'Ulrich', 'Unger', 'Unterberger', 'Unterweger', 'Urban',
        'Varga', 'Vogel', 'Vogl',
        'Wachter', 'Wagner', 'Walch', 'Walcher', 'Wallner', 'Walter', 'Weber', 'Wechselberger', 'Wegscheider', 'Weidinger', 'Weigl', 'Weinberger', 'Weiss', 'Weiß', 'Weninger', 'Werner', 'Wieland', 'Wieser', 'Wiesinger', 'Wild', 'Wilhelm', 'Wimmer', 'Windisch', 'Winkler', 'Winter', 'Wirth', 'Wittmann', 'Wolf', 'Wurm', 'Wurzer',
        'Zach', 'Zangerl', 'Zauner', 'Zechner', 'Zehetner', 'Zeilinger', 'Zeller', 'Zenz', 'Ziegler', 'Zimmermann', 'Zöhrer',
    );

    protected static \$titleMale = array('Herr', 'Dr.', 'Mag.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');
    protected static \$titleFemale = array('Frau', 'Dr.', 'Maga.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');

    protected static \$suffix = array('B.Sc.', 'B.A.', 'B.Eng.', 'MBA.');

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_AT/Person.php");
    }
}
