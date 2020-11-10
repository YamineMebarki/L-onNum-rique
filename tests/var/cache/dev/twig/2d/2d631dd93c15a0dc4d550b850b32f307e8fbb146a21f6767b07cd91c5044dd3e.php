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

/* vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php */
class __TwigTemplate_83d9c0d27f1dcc9e5563aa3608cbb3be23a2637b4e8b29c5f99e9d71dd8026ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sv_SE;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$formats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Swedish female first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static \$firstNameFemale = array(

        'Ada', 'Adela', 'Adele', 'Adéle', 'Adelia', 'Adina', 'Adolfina', 'Agda', 'Agnes', 'Agneta', 'Aina', 'Aino', 'Albertina', 'Alexandra', 'Alfhild', 'Alfrida', 'Alice', 'Alida', 'Ally', 'Alma', 'Alva', 'Amalia', 'Amanda', 'Andrea', 'Anette', 'Angela', 'Anita', 'Anja', 'Ann', 'Anna', 'Anna-Carin', 'Anna-Greta', 'Anna-Karin', 'Anna-Lena', 'Anna-Lisa', 'Anna-Maria', 'Anna-Stina', 'Anne', 'Anneli', 'Annelie', 'Annette', 'Anne-Charlotte', 'Anne-Marie', 'Anni', 'Annica', 'Annie', 'Annika', 'Annikki', 'Anny', 'Ann-Britt', 'Ann-Charlott', 'Ann-Charlotte', 'Ann-Christin', 'Ann-Christine', 'Ann-Katrin', 'Ann-Kristin', 'Ann-Louise', 'Ann-Margret', 'Ann-Mari', 'Ann-Marie', 'Ann-Sofi', 'Ann-Sofie', 'Antonia', 'Arvida', 'Asta', 'Astrid', 'Augusta', 'Aurora', 'Axelia', 'Axelina',
        'Barbro', 'Beata', 'Beatrice', 'Beda', 'Berit', 'Bernhardina', 'Berta', 'Betty', 'Birgit', 'Birgitta', 'Blenda', 'Bodil', 'Boel', 'Borghild', 'Brita', 'Britt', 'Britta', 'Britt-Inger', 'Britt-Louise', 'Britt-Mari', 'Britt-Marie',
        'Camilla', 'Carin', 'Carina', 'Carita', 'Carola', 'Carolina', 'Caroline', 'Catarina', 'Catharina', 'Cathrine', 'Catrin', 'Cecilia', 'Charlott', 'Charlotta', 'Charlotte', 'Christel', 'Christin', 'Christina', 'Christine', 'Clara', 'Clary', 'Constance', 'Cristina',
        'Daga', 'Dagmar', 'Dagny', 'Daisy', 'Davida', 'Desideria', 'Desirée', 'Diana', 'Disa', 'Dora', 'Doris', 'Dorotea',
        'Ebba', 'Edit', 'Edith', 'Edla', 'Eira', 'Eivor', 'Ejvor', 'Elaine', 'Eleonor', 'Eleonora', 'Elfrida', 'Elida', 'Elin', 'Elina', 'Elinor', 'Elisabet', 'Elisabeth', 'Elise', 'Ella', 'Ellen', 'Ellinor', 'Elly', 'Elma', 'Elna', 'Elsa', 'Else', 'Else-Marie', 'Elsi', 'Elsie', 'Elsy', 'Elvi', 'Elvira', 'Elvy', 'Emelia', 'Emerentia', 'Emilia', 'Emma', 'Emmy', 'Erika', 'Erna', 'Ester', 'Estrid', 'Ethel', 'Eufemia', 'Eugenia', 'Eva', 'Eva-Britt', 'Eva-Lena', 'Eva-Lotta', 'Eva-Marie', 'Evelina', 'Evelyn', 'Evy', 'Ewa',
        'Fanny', 'Florence', 'Fredrika', 'Frida', 'Frideborg',
        'Gabriella', 'Gerd', 'Gerda', 'Gertie', 'Gertrud', 'Gisela', 'Greta', 'Gudrun', 'Gull', 'Gullan', 'Gullbritt', 'Gulli', 'Gullvi', 'Gully', 'Gull-Britt', 'Gun', 'Gunborg', 'Gunbritt', 'Gunda', 'Gunhild', 'Gunilla', 'Gunn', 'Gunnel', 'Gunni', 'Gunvor', 'Gun-Britt', 'Gurli', 'Gustava', 'Gärd', 'Görel', 'Göta',
        'Hanna', 'Harriet', 'Hedvig', 'Helen', 'Helén', 'Helena', 'Helene', 'Heléne', 'Helfrid', 'Helga', 'Helmi', 'Helny', 'Henny', 'Henrietta', 'Henriette', 'Herta', 'Hilda', 'Hildegard', 'Hildur', 'Hillevi', 'Hilma', 'Hjördis', 'Hulda',
        'Ida', 'Ines', 'Inez', 'Inga', 'Ingalill', 'Inga-Britt', 'Inga-Lena', 'Inga-Lill', 'Inga-Lisa', 'Inga-Maj', 'Ingbritt', 'Ingeborg', 'Ingegerd', 'Ingegärd', 'Ingela', 'Inger', 'Ingrid', 'Ingvor', 'Ing-Britt', 'Ing-Mari', 'Ing-Marie', 'Iréne', 'Irene', 'Iris', 'Irma', 'Isabella',
        'Jane', 'Janet', 'Jeanette', 'Jenny', 'Jessica', 'Johanna', 'Josefina', 'Judit', 'Judith', 'Julia', 'Juliana', 'Justina',
        'Kaarina', 'Kajsa', 'Karin', 'Karina', 'Karla', 'Karola', 'Karolina', 'Katarina', 'Katharina', 'Katrin', 'Katrina', 'Kersti', 'Kerstin', 'Klara', 'Konstantia', 'Kornelia', 'Kristin', 'Kristina', 'Kristine',
        'Laila', 'Laura', 'Leila', 'Lena', 'Leontina', 'Liisa', 'Lilian', 'Lill', 'Lillemor', 'Lillian', 'Lilly', 'Linda', 'Linnéa', 'Linnea', 'Lisa', 'Lisbet', 'Lisbeth', 'Liselott', 'Liselotte', 'Lise-Lott', 'Lise-Lotte', 'Lizzie', 'Lola', 'Louise', 'Lovisa', 'Lucia', 'Lydia',
        'Madeleine', 'Madelene', 'Magda', 'Magdalena', 'Magnhild', 'Maj', 'Maja', 'Majbritt', 'Majken', 'Majlis', 'Majvor', 'Maj-Britt', 'Maj-Lis', 'Malin', 'Malvina', 'Margaret', 'Margareta', 'Margareth', 'Margaretha', 'Margit', 'Margita', 'Margot', 'Margret', 'Margreta', 'Mari', 'Maria', 'Mariana', 'Mariann', 'Marianne', 'Marie', 'Mariette', 'Marie-Louise', 'Marika', 'Marina', 'Marion', 'Marit', 'Marita', 'Mari-Ann', 'Marja', 'Marjatta', 'Marlene', 'Marta', 'Martha', 'Martina', 'Mary', 'Mathilda', 'Matilda', 'Maud', 'May', 'Mia', 'Mildred', 'Mimmi', 'Mirjam', 'Mona', 'Monica', 'Monika', 'Märit', 'Märta', 'Märtha',
        'Naemi', 'Naima', 'Nancy', 'Nanna', 'Nanny', 'Natalia', 'Nelly', 'Nina', 'Nora',
        'Olga', 'Olivia', 'Ottilia',
        'Paula', 'Paulina', 'Pauline', 'Pernilla', 'Petra', 'Petronella', 'Pia',
        'Ragna', 'Ragnhild', 'Rakel', 'Rebecka', 'Regina', 'Renée', 'Rigmor', 'Rita', 'Rosa', 'Rose', 'Rose-Marie', 'Rosita', 'Ros-Mari', 'Ros-Marie', 'Runa', 'Rut', 'Ruth',
        'Sabina', 'Saga', 'Sally', 'Sara', 'Selma', 'Serafia', 'Sibylla', 'Sigbritt', 'Signe', 'Signhild', 'Sigrid', 'Siri', 'Siv', 'Sofi', 'Sofia', 'Sofie', 'Solbritt', 'Solveig', 'Solvig', 'Sonja', 'Stina', 'Susann', 'Susanna', 'Susanne', 'Suzanne', 'Svea', 'Sylvia', 'Synnöve', 'Syster',
        'Tea', 'Tekla', 'Terese', 'Teresia', 'Therése', 'Therese', 'Theresia', 'Thyra', 'Tina', 'Tora', 'Torborg', 'Tove', 'Tyra',
        'Ulla', 'Ulla-Britt', 'Ulla-Britta', 'Ulrica', 'Ulrika', 'Ursula',
        'Valborg', 'Vanja', 'Vega', 'Vendela', 'Vendla', 'Vera', 'Veronica', 'Veronika', 'Victoria', 'Viktoria', 'Vilhelmina', 'Vilma', 'Viola', 'Virginia', 'Vivan', 'Viveca', 'Viveka', 'Vivi', 'Vivian', 'Viviann', 'Vivianne', 'Vivi-Ann', 'Vivi-Anne',
        'Wilhelmina',
        'Ylva', 'Yvonne',
        'Åsa', 'Åse'
    );

    /**
     * @var array Swedish male first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static \$firstNameMale = array(
        'Abraham', 'Adam', 'Adolf', 'Adrian', 'Agaton', 'Agne', 'Albert', 'Albin', 'Aldor', 'Alex', 'Alexander', 'Alexis', 'Alexius', 'Alf', 'Alfons', 'Alfred', 'Algot', 'Allan', 'Alrik', 'Alvar', 'Alve', 'Amandus', 'Anders', 'André', 'Andreas', 'Anselm', 'Anshelm', 'Antero', 'Anton', 'Antonius', 'Arne', 'Arnold', 'Aron', 'Arthur', 'Artur', 'Arvid', 'Assar', 'Astor', 'August', 'Augustin', 'Axel',
        'Bengt', 'Bengt-Göran', 'Bengt-Olof', 'Bengt-Åke', 'Benny', 'Berndt', 'Berne', 'Bernhard', 'Bernt', 'Bert', 'Berth', 'Berthold', 'Bertil', 'Bill', 'Billy', 'Birger', 'Bjarne', 'Björn', 'Bo', 'Boris', 'Bror', 'Bruno', 'Brynolf', 'Börje',
        'Carl', 'Carl-Axel', 'Carl-Erik', 'Carl-Gustaf', 'Carl-Gustav', 'Carl-Johan', 'Charles', 'Christer', 'Christian', 'Claes', 'Claes-Göran', 'Clarence', 'Clas', 'Conny', 'Crister', 'Curt',
        'Dag', 'Dan', 'Daniel', 'David', 'Dennis', 'Dick', 'Donald', 'Douglas',
        'Ebbe', 'Eddie', 'Eddy', 'Edgar', 'Edmund', 'Edvard', 'Edvin', 'Efraim', 'Egon', 'Eilert', 'Einar', 'Eje', 'Ejnar', 'Elias', 'Elis', 'Ellert', 'Elmer', 'Elof', 'Elon', 'Elov', 'Elving', 'Elvir', 'Emanuel', 'Emil', 'Enar', 'Engelbert', 'Engelbrekt', 'Enok', 'Erhard', 'Eric', 'Erik', 'Erland', 'Erling', 'Ernfrid', 'Ernst', 'Esbjörn', 'Eskil', 'Eugén', 'Eugen', 'Evald', 'Eve', 'Evert',
        'Fabian', 'Felix', 'Ferdinand', 'Filip', 'Fingal', 'Finn', 'Folke', 'Frank', 'Frans', 'Franz', 'Fred', 'Fredrik', 'Fridolf', 'Friedrich', 'Fritiof', 'Fritjof', 'Frits', 'Fritz',
        'Gabriel', 'Georg', 'George', 'Gerhard', 'Gert', 'Gideon', 'Gilbert', 'Gillis', 'Glenn', 'Gottfrid', 'Gotthard', 'Greger', 'Gudmund', 'Gunder', 'Gunnar', 'Gustaf', 'Gustav', 'Göran', 'Görgen', 'Gösta', 'Göte',
        'Hadar', 'Halvar', 'Halvard', 'Hans', 'Hans-Erik', 'Hans-Olof', 'Hans-Åke', 'Harald', 'Hardy', 'Harry', 'Hartvig', 'Hasse', 'Heinrich', 'Heinz', 'Helge', 'Helmer', 'Henning', 'Henric', 'Henrik', 'Henry', 'Herbert', 'Heribert', 'Herman', 'Hilbert', 'Hilding', 'Hilmer', 'Hjalmar', 'Holger', 'Holmfrid', 'Hubert', 'Hugo', 'Håkan',
        'Inge', 'Ingemar', 'Ingmar', 'Ingvald', 'Ingvar', 'Isak', 'Isidor', 'Ivan', 'Ivar',
        'Jack', 'Jacob', 'Jakob', 'James', 'Jan', 'Janne', 'Jan-Eric', 'Jan-Erik', 'Jan-Olof', 'Jan-Olov', 'Jan-Ove', 'Jan-Åke', 'Jarl', 'Jean', 'Jens', 'Jerker', 'Jerry', 'Jesper', 'Jim', 'Jimmy', 'Joachim', 'Joacim', 'Joakim', 'Joel', 'Johan', 'Johannes', 'John', 'Johnny', 'Johny', 'Jon', 'Jonas', 'Jonny', 'Josef', 'Juhani', 'Julius', 'Justus', 'Jöns', 'Jörgen',
        'Kai', 'Kaj', 'Kalevi', 'Karl', 'Karl-Axel', 'Karl-Erik', 'Karl-Gunnar', 'Karl-Gustaf', 'Karl-Gustav', 'Karl-Johan', 'Kennert', 'Kennet', 'Kenneth', 'Kenny', 'Kent', 'Kenth', 'Kjell', 'Kjell-Åke', 'Klas', 'Knut', 'Konrad', 'Konstantin', 'Krister', 'Kristian', 'Kristoffer', 'Kurt', 'Kåre',
        'Lage', 'Lambert', 'Lars', 'Lars-Eric', 'Lars-Erik', 'Lars-Gunnar', 'Lars-Göran', 'Lars-Olof', 'Lars-Olov', 'Lars-Ove', 'Lars-Åke', 'Laurentius', 'Leander', 'Leif', 'Lennart', 'Leo', 'Leon', 'Leonard', 'Leopold', 'Levi', 'Levin', 'Linné', 'Linus', 'Lorentz', 'Louis', 'Ludvig',
        'Magni', 'Magnus', 'Malkolm', 'Malte', 'Manfred', 'Manne', 'Marcus', 'Markus', 'Martin', 'Mathias', 'Mats', 'Matti', 'Mattias', 'Matts', 'Maurits', 'Mauritz', 'Max', 'Melker', 'Micael', 'Michael', 'Mickael', 'Mikael', 'Morgan', 'Måns', 'Mårten',
        'Napoleon', 'Natanael', 'Nicklas', 'Niclas', 'Niklas', 'Nikolaus', 'Nils', 'Nils-Erik', 'Nore',
        'Odd', 'Ola', 'Olaus', 'Olav', 'Olavi', 'Ole', 'Oliver', 'Olle', 'Olof', 'Olov', 'Orvar', 'Oscar', 'Oskar', 'Ossian', 'Osvald', 'Otto', 'Ove', 'Owe',
        'Patric', 'Patrick', 'Patrik', 'Paul', 'Peder', 'Per', 'Percy', 'Per-Anders', 'Per-Arne', 'Per-Erik', 'Per-Ola', 'Per-Olof', 'Per-Olov', 'Per-Åke', 'Peter', 'Petrus', 'Petter', 'Pierre', 'Pontus', 'Pär',
        'Ragnar', 'Ragnvald', 'Ralf', 'Ralph', 'Raymond', 'Reidar', 'Reine', 'Reinhold', 'Reino', 'Richard', 'Rickard', 'Rikard', 'Robert', 'Roger', 'Roine', 'Roland', 'Rolf', 'Ronald', 'Ronnie', 'Ronny', 'Roy', 'Ruben', 'Rudolf', 'Runar', 'Rune', 'Runo', 'Rutger',
        'Salomon', 'Sam', 'Samuel', 'Sanfrid', 'Sebastian', 'Set', 'Seth', 'Seved', 'Severin', 'Sigfrid', 'Sigmund', 'Signar', 'Sigurd', 'Sigvard', 'Simon', 'Sivert', 'Sixten', 'Sonny', 'Staffan', 'Stanley', 'Stefan', 'Stellan', 'Sten', 'Stephan', 'Steve', 'Stig', 'Sture', 'Sune', 'Svante', 'Sven', 'Sven-Erik', 'Sven-Olof', 'Sven-Olov', 'Sven-Åke', 'Sverker', 'Sölve', 'Sören',
        'Tage', 'Ted', 'Teodor', 'Theodor', 'Thomas', 'Thor', 'Thorbjörn', 'Thord', 'Thore', 'Thorsten', 'Thorvald', 'Thure', 'Tobias', 'Toivo', 'Tom', 'Tomas', 'Tommy', 'Tonny', 'Tony', 'Tor', 'Torbjörn', 'Tord', 'Tore', 'Torgny', 'Torkel', 'Torsten', 'Torvald', 'Tryggve', 'Ture', 'Tyko',
        'Ulf', 'Ulrik', 'Uno', 'Urban',
        'Valdemar', 'Valentin', 'Valfrid', 'Vallentin', 'Valter', 'Veine', 'Verner', 'Victor', 'Vidar', 'Viggo', 'Viking', 'Viktor', 'Vilgot', 'Vilhelm', 'Villiam', 'Villy', 'Vincent', 'Vitalis',
        'Waldemar', 'Walter', 'Werner', 'Wilhelm', 'William', 'Willy',
        'Yngve',
        'Åke',
        'Örjan', 'Östen'
    );

    /**
     * @var array Swedish common last names
     * @link http://www.scb.se/sv_/Hitta-statistik/Statistik-efter-amne/Befolkning/Amnesovergripande-statistik/Namnstatistik/30898/2012A01x/Samtliga-folkbokforda--Efternamn-topplistor/Efternamn-topp-100/
     */
    protected static \$lastName = array(

        'Abrahamsson', 'Andersson', 'Andreasson', 'Arvidsson', 'Axelsson',
        'Bengtsson', 'Berg', 'Berggren', 'Berglund', 'Bergman', 'Bergqvist', 'Bergström', 'Björk', 'Björklund', 'Blom', 'Blomqvist',
        'Claesson',
        'Dahlberg', 'Danielsson',
        'Engström', 'Ek', 'Eklund', 'Ekström', 'Eliasson', 'Eriksson',
        'Falk', 'Forsberg', 'Fransson', 'Fredriksson',
        'Gunnarsson', 'Gustafsson',
        'Hansen', 'Hansson', 'Hedlund', 'Hellström', 'Henriksson', 'Hermansson', 'Holm', 'Holmberg', 'Holmgren', 'Holmqvist', 'Håkansson',
        'Isaksson', 'Ivarsson',
        'Jakobsson', 'Jansson', 'Johansson', 'Jonasson', 'Jonsson', 'Jönsson',
        'Karlsson',
        'Larsson', 'Lind', 'Lindberg', 'Lindgren', 'Lindholm', 'Lindqvist', 'Lindström', 'Lund', 'Lundberg', 'Lundgren', 'Lundin', 'Lundqvist', 'Lundström', 'Löfgren',
        'Magnusson', 'Martinsson', 'Mattsson', 'Månsson', 'Mårtensson',
        'Nilsson', 'Norberg', 'Nordin', 'Nordström', 'Nyberg', 'Nyström',
        'Olofsson', 'Olsson',
        'Persson', 'Pettersson', 'Pålsson',
        'Samuelsson', 'Sandberg', 'Sandström', 'Sjöberg', 'Sjögren', 'Ström', 'Strömberg', 'Sundberg', 'Sundqvist', 'Sundström', 'Svensson', 'Söderberg',
        'Viklund',
        'Wallin', 'Wikström',
        'Åberg', 'Åkesson', 'Åström',
        'Öberg'
    );

    /**
     * National Personal Identity number (personnummer)
     * @link http://en.wikipedia.org/wiki/Personal_identity_number_(Sweden)
     * @param \\DateTime \$birthdate
     * @param string \$gender Person::GENDER_MALE || Person::GENDER_FEMALE
     * @return string on format XXXXXX-XXXX
     */
    public function personalIdentityNumber(\\DateTime \$birthdate = null, \$gender = null)
    {
        if (!\$birthdate) {
            \$birthdate = \\Faker\\Provider\\DateTime::dateTimeThisCentury();
        }
        \$datePart = \$birthdate->format('ymd');

        if (\$gender && \$gender == static::GENDER_MALE) {
            \$randomDigits = (string)static::numerify('##') . static::randomElement(array(1,3,5,7,9));
        } elseif (\$gender && \$gender == static::GENDER_FEMALE) {
            \$randomDigits = (string)static::numerify('##') . static::randomElement(array(0,2,4,6,8));
        } else {
            \$randomDigits = (string)static::numerify('###');
        }


        \$checksum = Luhn::computeCheckDigit(\$datePart . \$randomDigits);

        return \$datePart . '-' . \$randomDigits . \$checksum;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 20,  116 => 19,  108 => 18,  100 => 17,  92 => 16,  84 => 15,  78 => 14,  72 => 13,  66 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sv_SE;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{lastName}}-{{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}-{{lastName}}',
    );

    /**
     * @var array Swedish female first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static \$firstNameFemale = array(

        'Ada', 'Adela', 'Adele', 'Adéle', 'Adelia', 'Adina', 'Adolfina', 'Agda', 'Agnes', 'Agneta', 'Aina', 'Aino', 'Albertina', 'Alexandra', 'Alfhild', 'Alfrida', 'Alice', 'Alida', 'Ally', 'Alma', 'Alva', 'Amalia', 'Amanda', 'Andrea', 'Anette', 'Angela', 'Anita', 'Anja', 'Ann', 'Anna', 'Anna-Carin', 'Anna-Greta', 'Anna-Karin', 'Anna-Lena', 'Anna-Lisa', 'Anna-Maria', 'Anna-Stina', 'Anne', 'Anneli', 'Annelie', 'Annette', 'Anne-Charlotte', 'Anne-Marie', 'Anni', 'Annica', 'Annie', 'Annika', 'Annikki', 'Anny', 'Ann-Britt', 'Ann-Charlott', 'Ann-Charlotte', 'Ann-Christin', 'Ann-Christine', 'Ann-Katrin', 'Ann-Kristin', 'Ann-Louise', 'Ann-Margret', 'Ann-Mari', 'Ann-Marie', 'Ann-Sofi', 'Ann-Sofie', 'Antonia', 'Arvida', 'Asta', 'Astrid', 'Augusta', 'Aurora', 'Axelia', 'Axelina',
        'Barbro', 'Beata', 'Beatrice', 'Beda', 'Berit', 'Bernhardina', 'Berta', 'Betty', 'Birgit', 'Birgitta', 'Blenda', 'Bodil', 'Boel', 'Borghild', 'Brita', 'Britt', 'Britta', 'Britt-Inger', 'Britt-Louise', 'Britt-Mari', 'Britt-Marie',
        'Camilla', 'Carin', 'Carina', 'Carita', 'Carola', 'Carolina', 'Caroline', 'Catarina', 'Catharina', 'Cathrine', 'Catrin', 'Cecilia', 'Charlott', 'Charlotta', 'Charlotte', 'Christel', 'Christin', 'Christina', 'Christine', 'Clara', 'Clary', 'Constance', 'Cristina',
        'Daga', 'Dagmar', 'Dagny', 'Daisy', 'Davida', 'Desideria', 'Desirée', 'Diana', 'Disa', 'Dora', 'Doris', 'Dorotea',
        'Ebba', 'Edit', 'Edith', 'Edla', 'Eira', 'Eivor', 'Ejvor', 'Elaine', 'Eleonor', 'Eleonora', 'Elfrida', 'Elida', 'Elin', 'Elina', 'Elinor', 'Elisabet', 'Elisabeth', 'Elise', 'Ella', 'Ellen', 'Ellinor', 'Elly', 'Elma', 'Elna', 'Elsa', 'Else', 'Else-Marie', 'Elsi', 'Elsie', 'Elsy', 'Elvi', 'Elvira', 'Elvy', 'Emelia', 'Emerentia', 'Emilia', 'Emma', 'Emmy', 'Erika', 'Erna', 'Ester', 'Estrid', 'Ethel', 'Eufemia', 'Eugenia', 'Eva', 'Eva-Britt', 'Eva-Lena', 'Eva-Lotta', 'Eva-Marie', 'Evelina', 'Evelyn', 'Evy', 'Ewa',
        'Fanny', 'Florence', 'Fredrika', 'Frida', 'Frideborg',
        'Gabriella', 'Gerd', 'Gerda', 'Gertie', 'Gertrud', 'Gisela', 'Greta', 'Gudrun', 'Gull', 'Gullan', 'Gullbritt', 'Gulli', 'Gullvi', 'Gully', 'Gull-Britt', 'Gun', 'Gunborg', 'Gunbritt', 'Gunda', 'Gunhild', 'Gunilla', 'Gunn', 'Gunnel', 'Gunni', 'Gunvor', 'Gun-Britt', 'Gurli', 'Gustava', 'Gärd', 'Görel', 'Göta',
        'Hanna', 'Harriet', 'Hedvig', 'Helen', 'Helén', 'Helena', 'Helene', 'Heléne', 'Helfrid', 'Helga', 'Helmi', 'Helny', 'Henny', 'Henrietta', 'Henriette', 'Herta', 'Hilda', 'Hildegard', 'Hildur', 'Hillevi', 'Hilma', 'Hjördis', 'Hulda',
        'Ida', 'Ines', 'Inez', 'Inga', 'Ingalill', 'Inga-Britt', 'Inga-Lena', 'Inga-Lill', 'Inga-Lisa', 'Inga-Maj', 'Ingbritt', 'Ingeborg', 'Ingegerd', 'Ingegärd', 'Ingela', 'Inger', 'Ingrid', 'Ingvor', 'Ing-Britt', 'Ing-Mari', 'Ing-Marie', 'Iréne', 'Irene', 'Iris', 'Irma', 'Isabella',
        'Jane', 'Janet', 'Jeanette', 'Jenny', 'Jessica', 'Johanna', 'Josefina', 'Judit', 'Judith', 'Julia', 'Juliana', 'Justina',
        'Kaarina', 'Kajsa', 'Karin', 'Karina', 'Karla', 'Karola', 'Karolina', 'Katarina', 'Katharina', 'Katrin', 'Katrina', 'Kersti', 'Kerstin', 'Klara', 'Konstantia', 'Kornelia', 'Kristin', 'Kristina', 'Kristine',
        'Laila', 'Laura', 'Leila', 'Lena', 'Leontina', 'Liisa', 'Lilian', 'Lill', 'Lillemor', 'Lillian', 'Lilly', 'Linda', 'Linnéa', 'Linnea', 'Lisa', 'Lisbet', 'Lisbeth', 'Liselott', 'Liselotte', 'Lise-Lott', 'Lise-Lotte', 'Lizzie', 'Lola', 'Louise', 'Lovisa', 'Lucia', 'Lydia',
        'Madeleine', 'Madelene', 'Magda', 'Magdalena', 'Magnhild', 'Maj', 'Maja', 'Majbritt', 'Majken', 'Majlis', 'Majvor', 'Maj-Britt', 'Maj-Lis', 'Malin', 'Malvina', 'Margaret', 'Margareta', 'Margareth', 'Margaretha', 'Margit', 'Margita', 'Margot', 'Margret', 'Margreta', 'Mari', 'Maria', 'Mariana', 'Mariann', 'Marianne', 'Marie', 'Mariette', 'Marie-Louise', 'Marika', 'Marina', 'Marion', 'Marit', 'Marita', 'Mari-Ann', 'Marja', 'Marjatta', 'Marlene', 'Marta', 'Martha', 'Martina', 'Mary', 'Mathilda', 'Matilda', 'Maud', 'May', 'Mia', 'Mildred', 'Mimmi', 'Mirjam', 'Mona', 'Monica', 'Monika', 'Märit', 'Märta', 'Märtha',
        'Naemi', 'Naima', 'Nancy', 'Nanna', 'Nanny', 'Natalia', 'Nelly', 'Nina', 'Nora',
        'Olga', 'Olivia', 'Ottilia',
        'Paula', 'Paulina', 'Pauline', 'Pernilla', 'Petra', 'Petronella', 'Pia',
        'Ragna', 'Ragnhild', 'Rakel', 'Rebecka', 'Regina', 'Renée', 'Rigmor', 'Rita', 'Rosa', 'Rose', 'Rose-Marie', 'Rosita', 'Ros-Mari', 'Ros-Marie', 'Runa', 'Rut', 'Ruth',
        'Sabina', 'Saga', 'Sally', 'Sara', 'Selma', 'Serafia', 'Sibylla', 'Sigbritt', 'Signe', 'Signhild', 'Sigrid', 'Siri', 'Siv', 'Sofi', 'Sofia', 'Sofie', 'Solbritt', 'Solveig', 'Solvig', 'Sonja', 'Stina', 'Susann', 'Susanna', 'Susanne', 'Suzanne', 'Svea', 'Sylvia', 'Synnöve', 'Syster',
        'Tea', 'Tekla', 'Terese', 'Teresia', 'Therése', 'Therese', 'Theresia', 'Thyra', 'Tina', 'Tora', 'Torborg', 'Tove', 'Tyra',
        'Ulla', 'Ulla-Britt', 'Ulla-Britta', 'Ulrica', 'Ulrika', 'Ursula',
        'Valborg', 'Vanja', 'Vega', 'Vendela', 'Vendla', 'Vera', 'Veronica', 'Veronika', 'Victoria', 'Viktoria', 'Vilhelmina', 'Vilma', 'Viola', 'Virginia', 'Vivan', 'Viveca', 'Viveka', 'Vivi', 'Vivian', 'Viviann', 'Vivianne', 'Vivi-Ann', 'Vivi-Anne',
        'Wilhelmina',
        'Ylva', 'Yvonne',
        'Åsa', 'Åse'
    );

    /**
     * @var array Swedish male first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static \$firstNameMale = array(
        'Abraham', 'Adam', 'Adolf', 'Adrian', 'Agaton', 'Agne', 'Albert', 'Albin', 'Aldor', 'Alex', 'Alexander', 'Alexis', 'Alexius', 'Alf', 'Alfons', 'Alfred', 'Algot', 'Allan', 'Alrik', 'Alvar', 'Alve', 'Amandus', 'Anders', 'André', 'Andreas', 'Anselm', 'Anshelm', 'Antero', 'Anton', 'Antonius', 'Arne', 'Arnold', 'Aron', 'Arthur', 'Artur', 'Arvid', 'Assar', 'Astor', 'August', 'Augustin', 'Axel',
        'Bengt', 'Bengt-Göran', 'Bengt-Olof', 'Bengt-Åke', 'Benny', 'Berndt', 'Berne', 'Bernhard', 'Bernt', 'Bert', 'Berth', 'Berthold', 'Bertil', 'Bill', 'Billy', 'Birger', 'Bjarne', 'Björn', 'Bo', 'Boris', 'Bror', 'Bruno', 'Brynolf', 'Börje',
        'Carl', 'Carl-Axel', 'Carl-Erik', 'Carl-Gustaf', 'Carl-Gustav', 'Carl-Johan', 'Charles', 'Christer', 'Christian', 'Claes', 'Claes-Göran', 'Clarence', 'Clas', 'Conny', 'Crister', 'Curt',
        'Dag', 'Dan', 'Daniel', 'David', 'Dennis', 'Dick', 'Donald', 'Douglas',
        'Ebbe', 'Eddie', 'Eddy', 'Edgar', 'Edmund', 'Edvard', 'Edvin', 'Efraim', 'Egon', 'Eilert', 'Einar', 'Eje', 'Ejnar', 'Elias', 'Elis', 'Ellert', 'Elmer', 'Elof', 'Elon', 'Elov', 'Elving', 'Elvir', 'Emanuel', 'Emil', 'Enar', 'Engelbert', 'Engelbrekt', 'Enok', 'Erhard', 'Eric', 'Erik', 'Erland', 'Erling', 'Ernfrid', 'Ernst', 'Esbjörn', 'Eskil', 'Eugén', 'Eugen', 'Evald', 'Eve', 'Evert',
        'Fabian', 'Felix', 'Ferdinand', 'Filip', 'Fingal', 'Finn', 'Folke', 'Frank', 'Frans', 'Franz', 'Fred', 'Fredrik', 'Fridolf', 'Friedrich', 'Fritiof', 'Fritjof', 'Frits', 'Fritz',
        'Gabriel', 'Georg', 'George', 'Gerhard', 'Gert', 'Gideon', 'Gilbert', 'Gillis', 'Glenn', 'Gottfrid', 'Gotthard', 'Greger', 'Gudmund', 'Gunder', 'Gunnar', 'Gustaf', 'Gustav', 'Göran', 'Görgen', 'Gösta', 'Göte',
        'Hadar', 'Halvar', 'Halvard', 'Hans', 'Hans-Erik', 'Hans-Olof', 'Hans-Åke', 'Harald', 'Hardy', 'Harry', 'Hartvig', 'Hasse', 'Heinrich', 'Heinz', 'Helge', 'Helmer', 'Henning', 'Henric', 'Henrik', 'Henry', 'Herbert', 'Heribert', 'Herman', 'Hilbert', 'Hilding', 'Hilmer', 'Hjalmar', 'Holger', 'Holmfrid', 'Hubert', 'Hugo', 'Håkan',
        'Inge', 'Ingemar', 'Ingmar', 'Ingvald', 'Ingvar', 'Isak', 'Isidor', 'Ivan', 'Ivar',
        'Jack', 'Jacob', 'Jakob', 'James', 'Jan', 'Janne', 'Jan-Eric', 'Jan-Erik', 'Jan-Olof', 'Jan-Olov', 'Jan-Ove', 'Jan-Åke', 'Jarl', 'Jean', 'Jens', 'Jerker', 'Jerry', 'Jesper', 'Jim', 'Jimmy', 'Joachim', 'Joacim', 'Joakim', 'Joel', 'Johan', 'Johannes', 'John', 'Johnny', 'Johny', 'Jon', 'Jonas', 'Jonny', 'Josef', 'Juhani', 'Julius', 'Justus', 'Jöns', 'Jörgen',
        'Kai', 'Kaj', 'Kalevi', 'Karl', 'Karl-Axel', 'Karl-Erik', 'Karl-Gunnar', 'Karl-Gustaf', 'Karl-Gustav', 'Karl-Johan', 'Kennert', 'Kennet', 'Kenneth', 'Kenny', 'Kent', 'Kenth', 'Kjell', 'Kjell-Åke', 'Klas', 'Knut', 'Konrad', 'Konstantin', 'Krister', 'Kristian', 'Kristoffer', 'Kurt', 'Kåre',
        'Lage', 'Lambert', 'Lars', 'Lars-Eric', 'Lars-Erik', 'Lars-Gunnar', 'Lars-Göran', 'Lars-Olof', 'Lars-Olov', 'Lars-Ove', 'Lars-Åke', 'Laurentius', 'Leander', 'Leif', 'Lennart', 'Leo', 'Leon', 'Leonard', 'Leopold', 'Levi', 'Levin', 'Linné', 'Linus', 'Lorentz', 'Louis', 'Ludvig',
        'Magni', 'Magnus', 'Malkolm', 'Malte', 'Manfred', 'Manne', 'Marcus', 'Markus', 'Martin', 'Mathias', 'Mats', 'Matti', 'Mattias', 'Matts', 'Maurits', 'Mauritz', 'Max', 'Melker', 'Micael', 'Michael', 'Mickael', 'Mikael', 'Morgan', 'Måns', 'Mårten',
        'Napoleon', 'Natanael', 'Nicklas', 'Niclas', 'Niklas', 'Nikolaus', 'Nils', 'Nils-Erik', 'Nore',
        'Odd', 'Ola', 'Olaus', 'Olav', 'Olavi', 'Ole', 'Oliver', 'Olle', 'Olof', 'Olov', 'Orvar', 'Oscar', 'Oskar', 'Ossian', 'Osvald', 'Otto', 'Ove', 'Owe',
        'Patric', 'Patrick', 'Patrik', 'Paul', 'Peder', 'Per', 'Percy', 'Per-Anders', 'Per-Arne', 'Per-Erik', 'Per-Ola', 'Per-Olof', 'Per-Olov', 'Per-Åke', 'Peter', 'Petrus', 'Petter', 'Pierre', 'Pontus', 'Pär',
        'Ragnar', 'Ragnvald', 'Ralf', 'Ralph', 'Raymond', 'Reidar', 'Reine', 'Reinhold', 'Reino', 'Richard', 'Rickard', 'Rikard', 'Robert', 'Roger', 'Roine', 'Roland', 'Rolf', 'Ronald', 'Ronnie', 'Ronny', 'Roy', 'Ruben', 'Rudolf', 'Runar', 'Rune', 'Runo', 'Rutger',
        'Salomon', 'Sam', 'Samuel', 'Sanfrid', 'Sebastian', 'Set', 'Seth', 'Seved', 'Severin', 'Sigfrid', 'Sigmund', 'Signar', 'Sigurd', 'Sigvard', 'Simon', 'Sivert', 'Sixten', 'Sonny', 'Staffan', 'Stanley', 'Stefan', 'Stellan', 'Sten', 'Stephan', 'Steve', 'Stig', 'Sture', 'Sune', 'Svante', 'Sven', 'Sven-Erik', 'Sven-Olof', 'Sven-Olov', 'Sven-Åke', 'Sverker', 'Sölve', 'Sören',
        'Tage', 'Ted', 'Teodor', 'Theodor', 'Thomas', 'Thor', 'Thorbjörn', 'Thord', 'Thore', 'Thorsten', 'Thorvald', 'Thure', 'Tobias', 'Toivo', 'Tom', 'Tomas', 'Tommy', 'Tonny', 'Tony', 'Tor', 'Torbjörn', 'Tord', 'Tore', 'Torgny', 'Torkel', 'Torsten', 'Torvald', 'Tryggve', 'Ture', 'Tyko',
        'Ulf', 'Ulrik', 'Uno', 'Urban',
        'Valdemar', 'Valentin', 'Valfrid', 'Vallentin', 'Valter', 'Veine', 'Verner', 'Victor', 'Vidar', 'Viggo', 'Viking', 'Viktor', 'Vilgot', 'Vilhelm', 'Villiam', 'Villy', 'Vincent', 'Vitalis',
        'Waldemar', 'Walter', 'Werner', 'Wilhelm', 'William', 'Willy',
        'Yngve',
        'Åke',
        'Örjan', 'Östen'
    );

    /**
     * @var array Swedish common last names
     * @link http://www.scb.se/sv_/Hitta-statistik/Statistik-efter-amne/Befolkning/Amnesovergripande-statistik/Namnstatistik/30898/2012A01x/Samtliga-folkbokforda--Efternamn-topplistor/Efternamn-topp-100/
     */
    protected static \$lastName = array(

        'Abrahamsson', 'Andersson', 'Andreasson', 'Arvidsson', 'Axelsson',
        'Bengtsson', 'Berg', 'Berggren', 'Berglund', 'Bergman', 'Bergqvist', 'Bergström', 'Björk', 'Björklund', 'Blom', 'Blomqvist',
        'Claesson',
        'Dahlberg', 'Danielsson',
        'Engström', 'Ek', 'Eklund', 'Ekström', 'Eliasson', 'Eriksson',
        'Falk', 'Forsberg', 'Fransson', 'Fredriksson',
        'Gunnarsson', 'Gustafsson',
        'Hansen', 'Hansson', 'Hedlund', 'Hellström', 'Henriksson', 'Hermansson', 'Holm', 'Holmberg', 'Holmgren', 'Holmqvist', 'Håkansson',
        'Isaksson', 'Ivarsson',
        'Jakobsson', 'Jansson', 'Johansson', 'Jonasson', 'Jonsson', 'Jönsson',
        'Karlsson',
        'Larsson', 'Lind', 'Lindberg', 'Lindgren', 'Lindholm', 'Lindqvist', 'Lindström', 'Lund', 'Lundberg', 'Lundgren', 'Lundin', 'Lundqvist', 'Lundström', 'Löfgren',
        'Magnusson', 'Martinsson', 'Mattsson', 'Månsson', 'Mårtensson',
        'Nilsson', 'Norberg', 'Nordin', 'Nordström', 'Nyberg', 'Nyström',
        'Olofsson', 'Olsson',
        'Persson', 'Pettersson', 'Pålsson',
        'Samuelsson', 'Sandberg', 'Sandström', 'Sjöberg', 'Sjögren', 'Ström', 'Strömberg', 'Sundberg', 'Sundqvist', 'Sundström', 'Svensson', 'Söderberg',
        'Viklund',
        'Wallin', 'Wikström',
        'Åberg', 'Åkesson', 'Åström',
        'Öberg'
    );

    /**
     * National Personal Identity number (personnummer)
     * @link http://en.wikipedia.org/wiki/Personal_identity_number_(Sweden)
     * @param \\DateTime \$birthdate
     * @param string \$gender Person::GENDER_MALE || Person::GENDER_FEMALE
     * @return string on format XXXXXX-XXXX
     */
    public function personalIdentityNumber(\\DateTime \$birthdate = null, \$gender = null)
    {
        if (!\$birthdate) {
            \$birthdate = \\Faker\\Provider\\DateTime::dateTimeThisCentury();
        }
        \$datePart = \$birthdate->format('ymd');

        if (\$gender && \$gender == static::GENDER_MALE) {
            \$randomDigits = (string)static::numerify('##') . static::randomElement(array(1,3,5,7,9));
        } elseif (\$gender && \$gender == static::GENDER_FEMALE) {
            \$randomDigits = (string)static::numerify('##') . static::randomElement(array(0,2,4,6,8));
        } else {
            \$randomDigits = (string)static::numerify('###');
        }


        \$checksum = Luhn::computeCheckDigit(\$datePart . \$randomDigits);

        return \$datePart . '-' . \$randomDigits . \$checksum;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sv_SE/Person.php");
    }
}
